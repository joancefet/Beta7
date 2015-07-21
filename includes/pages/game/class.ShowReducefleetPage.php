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

class ShowReducefleetPage extends AbstractPage
{

	function __construct() 
	{
		parent::__construct();
	}
	
	function reduce()
	{
	global $USER, $PLANET, $LNG, $UNI;
	if (!isset($_POST['palanets']))
	$this->redirectTo('game.php?page=Reducefleet');
	if(!isset($_POST['palanets']))
	$_POST['palanets'] = array();
	foreach($_POST['palanets'] as $ID => $Value) {
	$sur = $GLOBALS['DATABASE']->uniquequery("SELECT deuterium, small_ship_cargo, lune_noir, big_ship_cargo, light_hunter, heavy_hunter, crusher, battle_ship, recycler, bomber_ship, destructor, battleship, galleon, destroyer, frigate, black_wanderer, id_owner, id, galaxy, system, planet FROM ".PLANETS." where `id` = '".$Value."';");

	$ships1	= $sur['small_ship_cargo'];
	$ships2	= $sur['big_ship_cargo'];
	$ships3	= $sur['light_hunter'];
	$ships4	= $sur['heavy_hunter'];
	$ships5	= $sur['crusher'];
	$ships6	= $sur['battle_ship'];
	$ships7	= $sur['recycler'];
	$ships8	= $sur['bomber_ship'];
	$ships9	= $sur['destructor'];
	$ships10 = $sur['battleship'];
	$ships11 = $sur['galleon'];
	$ships12 = $sur['destroyer'];
	$ships13 = $sur['frigate'];
	$ships14 = $sur['black_wanderer'];
	$ships15 = $sur['lune_noir'];

	
		
		$mission 				= 4;
		$galaxy     			= $PLANET['galaxy'];
		$system     			= $PLANET['system'];
		$planet     			= $PLANET['planet'];
		$planettype 			= 1;
		$fleet_group		 	= 0;
		$GenFleetSpeed		 	= 10;
		$TransportMetal			= 0;
		$TransportCrystal		= 0;
		$TransportDeuterium		= 0;
		$holdingtime 			= 0;
		$rawfleetarray			= array(202 => $ships1, 203 => $ships2, 204 => $ships3, 205 => $ships4, 206 => $ships5, 207 => $ships6, 209 => $ships7, 211 => $ships8, 213 => $ships9, 215 => $ships10, 225 => $ships11, 226 => $ships12, 227 => $ships13, 228 => $ships14, 216 => $ships15);
		
		
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
	$GLOBALS['DATABASE']->multi_query("UPDATE ".PLANETS." SET deuterium = deuterium - ".$consumption." where `id` = '".$sur['id']."';");
	
		

		
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
	$this->printMessage('Fleets Succesfully Send', true, array('game.php?page=Reducefleet', 4));
	}
	
	function show()
	{
	global $USER, $PLANET, $LNG, $UNI;
	$this->tplObj->loadscript('flotten.js');
	$stats_sql	=	'SELECT DISTINCT p.* FROM '.PLANETS.' as p
                WHERE p.`universe` = '.$UNI.' AND destruyed = 0 AND p.`id_owner` = '.$USER['id'].' AND p.`id` != '.$PLANET['id'].'
                ;';

    $query = $GLOBALS['DATABASE']->query($stats_sql);
	

		
		
	$RangeList	= array();
	
	while ($StatRow = $GLOBALS['DATABASE']->fetch_array($query)){
	
	$slowestShip = 202;
	if ($StatRow['small_ship_cargo'] > 0){
	$slowestShip = 202;
	}elseif ($StatRow['big_ship_cargo'] > 0){
	$slowestShip = 203;
	}elseif ($StatRow['light_hunter'] > 0){
	$slowestShip = 204;
	}elseif ($StatRow['heavy_hunter'] > 0){
	$slowestShip = 205;
	}elseif ($StatRow['crusher'] > 0){
	$slowestShip = 206;
	}elseif ($StatRow['battle_ship'] > 0){
	$slowestShip = 207;
	}elseif ($StatRow['recycler'] > 0){
	$slowestShip = 209;
	}elseif ($StatRow['bomber_ship'] > 0){
	$slowestShip = 211;
	}elseif ($StatRow['destructor'] > 0){
	$slowestShip = 213;
	}elseif ($StatRow['battleship'] > 0){
	$slowestShip = 215;
	}elseif ($StatRow['galleon'] > 0){
	$slowestShip = 225;
	}elseif ($StatRow['destroyer'] > 0){
	$slowestShip = 226;
	}elseif ($StatRow['frigate'] > 0){
	$slowestShip = 227;
	}elseif ($StatRow['black_wanderer'] > 0){
	$slowestShip = 228;
	}
	
	
	$GameSpeedFactor   		 	= FleetFunctions::GetGameSpeedFactor();		
	$MaxFleetSpeed 				= FleetFunctions::GetFleetMaxSpeed($slowestShip, $USER);
	$distance      				= FleetFunctions::GetTargetDistance(array($PLANET['galaxy'], $PLANET['system'], $PLANET['planet']), array($StatRow['galaxy'], $StatRow['system'], $StatRow['planet']));
	$duration      				= FleetFunctions::GetMissionDuration(10, $MaxFleetSpeed, $distance, $GameSpeedFactor, $USER);		
	
	
                    $RangeList[]	= array(
                        'name'		=> $StatRow['name'],
                        'id'		=> $StatRow['id'],
                        'galaxy'		=> $StatRow['galaxy'],
                        'system'		=> $StatRow['system'],
                        'planet'		=> $StatRow['planet'],
                        'metal'		=> pretty_number($StatRow['metal']),
                        'crystal'		=> pretty_number($StatRow['crystal']),
                        'deuterium'		=> pretty_number($StatRow['deuterium']),
                        'duration'		=> gmdate("H:i:s", round($duration)),
						'small_ship_cargo'		=> pretty_number($StatRow['small_ship_cargo']),
						'big_ship_cargo'		=> pretty_number($StatRow['big_ship_cargo']),
						'light_hunter'		=> pretty_number($StatRow['light_hunter']),
						'heavy_hunter'		=> pretty_number($StatRow['heavy_hunter']),
						'crusher'		=> pretty_number($StatRow['crusher']),
						'battle_ship'		=> pretty_number($StatRow['battle_ship']),
						'recycler'		=> pretty_number($StatRow['recycler']),
						'bomber_ship'		=> pretty_number($StatRow['bomber_ship']),
						'destructor'		=> pretty_number($StatRow['destructor']),
						'battleship'		=> pretty_number($StatRow['battleship']),
						'galleon'		=> pretty_number($StatRow['galleon']),
						'destroyer'		=> pretty_number($StatRow['destroyer']),
						'frigate'		=> pretty_number($StatRow['frigate']),
						'black_wanderer'		=> pretty_number($StatRow['black_wanderer']),
						'lune_noir'		=> pretty_number($StatRow['lune_noir']),
                       
                    );
                }
				
	$this->tplObj->assign_vars(array(	
	'RangeList'				=> $RangeList,
	));
		
	$this->display('page.reducefleets.default.tpl');
	}
}