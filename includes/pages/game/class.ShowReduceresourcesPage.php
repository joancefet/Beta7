<?php

/**
 *  2Moons
 *  Copyright (C) 2012 Jan Kröpke
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package 2Moons
 * @author Jan Kröpke <info@2moons.cc>
 * @copyright 2012 Jan Kröpke <info@2moons.cc>
 * @license http://www.gnu.org/licenses/gpl.html GNU GPLv3 License
 * @version 1.7.3 (2013-05-19)
 * @info $Id: class.ShowBuddyListPage.php 2632 2013-03-18 19:05:14Z slaver7 $
 * @link http://2moons.cc/
 */
require_once('includes/classes/class.FleetFunctions.php');

class ShowReduceresourcesPage extends AbstractPage
{

	function __construct() 
	{
		parent::__construct();
	}
	
	function reduce()
	{
	global $USER, $PLANET, $LNG, $UNI;
	if (!isset($_POST['palanets']))
	$this->redirectTo('game.php?page=reduceresources');
	if(!isset($_POST['palanets']))
	$_POST['palanets'] = array();
	foreach($_POST['palanets'] as $ID => $Value) {
	$sur = $GLOBALS['DATABASE']->uniquequery("SELECT metal, crystal, deuterium, ev_transporter, id_owner, id, galaxy, system, planet FROM ".PLANETS." where `id` = '".$Value."';");
	$total_res = $sur['metal'] + $sur['crystal'] + $sur['deuterium'];
	$needed_ships = ($sur['metal'] + $sur['crystal'] + $sur['deuterium']) / 390000000;
	if($needed_ships < 1){
		$needed_ships = 1;
	}
	$ships1	= min($needed_ships, $sur['ev_transporter']);
	$shipscapa = $ships1 * 390000000;
	
	$RecycledGoods	= array('metal' => 0, 'crystal' => 0, 'deuterium' => 0);
	if ($total_res <= $shipscapa) {
			$RecycledGoods['metal']   = $sur['metal'];
			$RecycledGoods['crystal'] = $sur['crystal'];
			$RecycledGoods['deuterium'] = $sur['deuterium'];
		} elseif (($sur['metal'] > $shipscapa / 2) && ($sur['crystal'] > $shipscapa / 2)&& ($sur['deuterium'] > $shipscapa / 2)) {
			$RecycledGoods['metal']   = $shipscapa / 2;
			$RecycledGoods['crystal'] = $shipscapa / 2;
			$RecycledGoods['deuterium'] = $shipscapa / 2;
		}elseif ($sur['metal'] > $sur['crystal']) {
			$RecycledGoods['crystal'] = $sur['crystal'];
			if ($sur['metal'] > ($shipscapa - $RecycledGoods['crystal'])){
				$RecycledGoods['metal'] = $shipscapa - $RecycledGoods['crystal'];
			}else{
				$RecycledGoods['metal'] = $sur['metal'];
				}
		}else {
			$RecycledGoods['metal'] = $sur['metal'];
			if ($sur['crystal'] > ($shipscapa - $RecycledGoods['metal'])){
				$RecycledGoods['crystal'] = $shipscapa - $RecycledGoods['metal'];
				}
			else{
				$RecycledGoods['crystal'] = $sur['crystal'];
				}
		}
	
		 if($RecycledGoods['metal'] < 0) { 
		$RecycledGoods['metal'] = 0;
		}
		if($RecycledGoods['crystal'] < 0) { 
		$RecycledGoods['crystal'] = 0;
		}
		if($RecycledGoods['deuterium'] < 0) { 
		$RecycledGoods['deuterium'] = 0;
		}
		
		$mission 				= 3;
		$galaxy     			= $PLANET['galaxy'];
		$system     			= $PLANET['system'];
		$planet     			= $PLANET['planet'];
		$planettype 			= 1;
		$fleet_group		 	= 0;
		$GenFleetSpeed		 	= 10;
		$TransportMetal			= $RecycledGoods['metal'];
		$TransportCrystal		= $RecycledGoods['crystal'];
		$TransportDeuterium		= $RecycledGoods['deuterium'];
		$holdingtime 			= 0;
		$rawfleetarray			= array(217 => $ships1);
		
	$ActualFleets		= FleetFunctions::GetCurrentFleets($USER['id']);
	if (FleetFunctions::GetMaxFleetSlots($USER) <= $ActualFleets)
	return false;
	$FleetArray  		= $rawfleetarray;	
	
	
	$GameSpeedFactor   		 	= FleetFunctions::GetGameSpeedFactor();		
	$MaxFleetSpeed 				= FleetFunctions::GetFleetMaxSpeed($FleetArray, $USER);
	$distance      				= FleetFunctions::GetTargetDistance(array($PLANET['galaxy'], $PLANET['system'], $PLANET['planet']),array($sur['galaxy'], $sur['system'], $sur['planet']));
	$duration      				= FleetFunctions::GetMissionDuration(10, $MaxFleetSpeed, $distance, $GameSpeedFactor, $USER);	
	$consumption   	= FleetFunctions::GetFleetConsumption($FleetArray, $duration, $distance, $MaxFleetSpeed, $USER, $GameSpeedFactor);
	$StayDuration    = 0;
	
	if ($sur['deuterium'] < $consumption)
	continue; 
	
	$PlanetRess = new ResourceUpdate();
	$PlanetRess->CalcResource();
	
	$fleetRessource	= array(
			901	=> $TransportMetal,
			902	=> $TransportCrystal,
			903	=> $TransportDeuterium,
		);
	$GLOBALS['DATABASE']->multi_query("UPDATE ".PLANETS." SET metal = metal - ".$RecycledGoods['metal'].", crystal = crystal - ".$RecycledGoods['crystal'].", deuterium = deuterium - ".$RecycledGoods['deuterium']." where `id` = '".$sur['id']."';");
		
		

		
	$fleetStartTime		= $duration + TIMESTAMP;
	$timeDifference		= round(max(0, $fleetStartTime - 0));
	if($fleet_group != 0)
	{
	if($timeDifference != 0)
	{
	FleetFunctions::setACSTime($timeDifference, $fleet_group);
	}
	else
	{
	$fleetStartTime		= $ACSTime;
	}
	}
	$fleetStayTime		= $fleetStartTime + $StayDuration;
	$fleetEndTime		= $fleetStayTime + $duration;	
				
	FleetFunctions::sendFleet($FleetArray, $mission, $sur['id_owner'], $sur['id'], $sur['galaxy'], $sur['system'], $sur['planet'], 1, $PLANET['id_owner'], $PLANET['id'], $galaxy, $system, $planet, $planettype, $fleetRessource, $fleetStartTime, $fleetStayTime, $fleetEndTime, $fleet_group);
	}			
	$this->printMessage('Fleets Succesfully Send', true, array('game.php?page=reduceresources', 4));
	}
	
	function show()
	{
	global $USER, $PLANET, $LNG, $UNI, $resource, $reslist;
	//if($USER['id'] != 1){
	//	$this->printMessage('This page is under maintenance', true, array('game.php?page=overview', 4));
	//}
	$PlanetRess	= new ResourceUpdate();
	
	
	$this->tplObj->loadscript('flotten.js');
	$stats_sql	=	'SELECT DISTINCT p.* FROM '.PLANETS.' as p
                WHERE p.`universe` = '.$UNI.' AND destruyed = 0 AND p.`id_owner` = '.$USER['id'].' AND p.`id` != '.$PLANET['id'].'
                ;';

    $query = $GLOBALS['DATABASE']->query($stats_sql);
	$RangeList	= array();
	

			
	while ($StatRow = $GLOBALS['DATABASE']->fetch_array($query))
                {
	list($USER, $StatRow)	= $PlanetRess->CalcResource($USER, $StatRow, true);	
	$GameSpeedFactor   		 	= FleetFunctions::GetGameSpeedFactor();		
	$MaxFleetSpeed 				= FleetFunctions::GetFleetMaxSpeed(217, $USER);
	$distance      				= FleetFunctions::GetTargetDistance(array($PLANET['galaxy'], $PLANET['system'], $PLANET['planet']), array($StatRow['galaxy'], $StatRow['system'], $StatRow['planet']));
	$duration      				= FleetFunctions::GetMissionDuration(10, $MaxFleetSpeed, $distance, $GameSpeedFactor, $USER);		
	$needed_ships =  round(($StatRow['metal'] + $StatRow['crystal'] + $StatRow['deuterium']) / 390000000); 
	if($needed_ships == 0){
	$needed_ships = 1;
	}
                    $RangeList[]	= array(
                        'name'		=> $StatRow['name'],
                        'id'		=> $StatRow['id'],
                        'galaxy'		=> $StatRow['galaxy'],
                        'system'		=> $StatRow['system'],
                        'planet'		=> $StatRow['planet'],
                        'metal'		=> pretty_number($StatRow['metal']),
                        'crystal'		=> pretty_number($StatRow['crystal']),
                        'deuterium'		=> pretty_number($StatRow['deuterium']),
                        'ev_transporter'		=> pretty_number($StatRow['ev_transporter']),
                        'duration'		=> gmdate("H:i:s", round($duration)),
                        'needed_ships'		=> $needed_ships,
						'needed_ships1'		=> pretty_number($needed_ships),
                       
                    );
                }
				
	$this->tplObj->assign_vars(array(	
	'RangeList'				=> $RangeList,
	));
		
	$this->display('page.reduceresources.default.tpl');
	}
}