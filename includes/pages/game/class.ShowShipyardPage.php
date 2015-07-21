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
 * @info $Id: class.ShowShipyardPage.php 2632 2013-03-18 19:05:14Z slaver7 $
 * @link http://2moons.cc/
 */
 

class ShowShipyardPage extends AbstractPage
{
	public static $requireModule = 0;
	
	public static $defaultController = 'show';

	function __construct() 
	{
		parent::__construct();
	}
	
	private function CancelAuftr() 
	{
		global $USER, $PLANET, $resource, $CONF;
		$ElementQueue = unserialize($PLANET['b_hangar_id']);
		
		$CancelArray	= HTTP::_GP('auftr', array());
		
		if(!is_array($CancelArray))
		{
			return false;
		}	
		
		foreach ($CancelArray as $Auftr)
		{
			if(!isset($ElementQueue[$Auftr])) {
				continue;
			}
			
			if($Auftr == 0) {
				$PLANET['b_hangar']	= 0;
			}
			
			$Element		= $ElementQueue[$Auftr][0];
			$Count			= $ElementQueue[$Auftr][1];
			
			$costRessources	= BuildFunctions::getElementPrice($USER, $PLANET, $Element, false, $Count);
		
			if(isset($costRessources[901])) { $PLANET[$resource[901]]	+= $costRessources[901] * FACTOR_CANCEL_SHIPYARD; }
			if(isset($costRessources[902])) { $PLANET[$resource[902]]	+= $costRessources[902] * FACTOR_CANCEL_SHIPYARD; }
			if(isset($costRessources[903])) { $PLANET[$resource[903]]	+= $costRessources[903] * FACTOR_CANCEL_SHIPYARD; }
			if(isset($costRessources[921])) { $USER[$resource[921]]		+= $costRessources[921] * FACTOR_CANCEL_SHIPYARD; }
			
			unset($ElementQueue[$Auftr]);
		}
		
		if(empty($ElementQueue)) {
			$PLANET['b_hangar_id']	= '';
		} else {
			$PLANET['b_hangar_id']	= serialize(array_values($ElementQueue));
		}
	}
	
	private function BuildAuftr($fmenge)
	{
		global $USER, $PLANET, $reslist, $CONF, $resource;	
		
		$Missiles	= array(
			502	=> $PLANET[$resource[502]],
			503	=> $PLANET[$resource[503]],
		);
		
		$Domes	= array(
			407	=> $PLANET[$resource[407]],
			408	=> $PLANET[$resource[408]],
			409	=> $PLANET[$resource[409]],
		);
		
		$Orbits	= array(
			411	=> $PLANET[$resource[411]],
			
		);
		
		

		foreach($fmenge as $Element => $Count)
		{
			if(empty($Count)
				|| !in_array($Element, array_merge($reslist['fleet'], $reslist['defense'], $reslist['missile']))
				|| !BuildFunctions::isTechnologieAccessible($USER, $PLANET, $Element)
			) {
				continue;
			}
			
			$missi = 0;
			$ll = 0;
			if($Element == 401){
			$missi = $PLANET['misil_launcher'] + $Count;
			}elseif($Element == 402){
			$ll = $PLANET['small_laser'] + $Count;
			}
			
			
			
			
			if($USER['training'] == 0 && $USER['training_step'] == 9 && $missi >=25 && $ll >=10){
		$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `training_step` = '11' WHERE `id` = ".$USER['id'].";");
		
		}
		
		if($USER['training'] == 0 && $USER['training_step'] == 16 && $PLANET['recycler'] >=5 ){
		$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `training_step` = '17' WHERE `id` = ".$USER['id'].";");
		}
			
			
			$MaxElements 	= BuildFunctions::getMaxConstructibleElements($USER, $PLANET, $Element);
			$Count			= is_numeric($Count) ? round($Count) : 0;
			$Count 			= max(min($Count, Config::get('max_fleet_per_build')), 0);
			$Count 			= min($Count, $MaxElements);
			
			$BuildArray    	= !empty($PLANET['b_hangar_id']) ? unserialize($PLANET['b_hangar_id']) : array();
			if (in_array($Element, $reslist['missile']))
			{
				$MaxMissiles		= BuildFunctions::getMaxConstructibleRockets($USER, $PLANET, $Missiles);
			
				
				$Count 				= min($Count, $MaxMissiles[$Element]);

				$Missiles[$Element] += $Count;
			}elseif ($Element == 407 || $Element == 408 || $Element == 409)
			{
				$MaxDomes		= BuildFunctions::getMaxConstructibleDomes($USER, $PLANET, $Domes);
			
				$Count 				= min($Count, $MaxDomes[$Element]);
				

				$Domes[$Element] += $Count;
			}elseif ($Element == 411)
			{
				$MaxOrbits		= BuildFunctions::getMaxConstructibleOrbits($USER, $PLANET, $Orbits);
			
				$Count 				= min($Count, $MaxOrbits[$Element]);
				

				$Orbits[$Element] += $Count;
			} elseif(in_array($Element, $reslist['one'])) {
				
				$InBuild	= false;
				foreach($BuildArray as $ElementArray) {
					if($ElementArray[0] == $Element) {
						$InBuild	= true;
						break;
					}
				}
				
				if ($InBuild)
					continue;

				if($Count != 0 && $PLANET[$resource[$Element]] == 0 && $InBuild === false)
					$Count =  1;
			}

			if(empty($Count))
				continue;
				
			$costRessources	= BuildFunctions::getElementPrice($USER, $PLANET, $Element, false, $Count);
		
			if(isset($costRessources[901])) { $PLANET[$resource[901]]	-= $costRessources[901]; }
			if(isset($costRessources[902])) { $PLANET[$resource[902]]	-= $costRessources[902]; }
			if(isset($costRessources[903])) { $PLANET[$resource[903]]	-= $costRessources[903]; }
			if(isset($costRessources[921])) { $USER[$resource[921]]		-= $costRessources[921]; }
			
			$BuildArray[]			= array($Element, $Count);
			$PLANET['b_hangar_id']	= serialize($BuildArray);

		}
	}
	
	public function show()
	{
		global $USER, $PLANET, $LNG, $resource, $dpath, $reslist, $requeriments, $CONF;
		
		
		
		

		$fmenge	= isset($_POST['fmenge']) ? $_POST['fmenge'] : array();
		$action	= HTTP::_GP('action', '');
								
		$NotBuilding = true;
		if (!empty($PLANET['b_building_id']))
		{
			$CurrentQueue 	= unserialize($PLANET['b_building_id']);
			foreach($CurrentQueue as $ElementArray) {
				if($ElementArray[0] == 21 || $ElementArray[0] == 15) {
					$NotBuilding = false;
					break;
				}
			}
		}
		
		$ElementQueue 	= unserialize($PLANET['b_hangar_id']);
		if(empty($ElementQueue))
			$Count	= 0;
		else
			$Count	= count($ElementQueue);
			
		if($USER['urlaubs_modus'] == 0) {
			if (!empty($fmenge) && $NotBuilding == true) {
				if (Config::get('max_elements_ships') != 0 && $Count >= Config::get('max_elements_ships')) {
					$this->printMessage(sprintf($LNG['bd_max_builds'], Config::get('max_elements_ships')));
					exit;
				}
				$this->BuildAuftr($fmenge);
			}
					
			if ($action == "delete") {
				$this->CancelAuftr();
			}
		}
		
		
		$elementInQueue	= array();
		$ElementQueue 	= unserialize($PLANET['b_hangar_id']);
		$Buildlist		= array();
		if(!empty($ElementQueue))
		{
			$Shipyard		= array();
			$QueueTime		= 0;
			foreach($ElementQueue as $Element)
			{
				if (empty($Element))
					continue;
					
				$elementInQueue[$Element[0]]	= true;
				$ElementTime  	= BuildFunctions::getBuildingTime($USER, $PLANET, $Element[0]);
				$QueueTime   	+= $ElementTime * $Element[1];
				$Shipyard[]		= array($LNG['tech'][$Element[0]], $Element[1], $ElementTime, $Element[0]);		
			}

			$this->tplObj->loadscript('bcmath.js');
			
			$this->tplObj->execscript('ShipyardInit();');
			
			$Buildlist	= array(
				'Queue' 				=> $Shipyard,
				'b_hangar_id_plus' 		=> $PLANET['b_hangar'],
				'pretty_time_b_hangar' 	=> pretty_time(max($QueueTime - $PLANET['b_hangar'],0)),
			);
		}
		
		
		$mode		= HTTP::_GP('mode', 'fleet');
		if($mode != 'defense' && $PLANET['planet_type'] == 4){
		$this->printMessage("You cant acces this page on a fortress");	
		}
		if($mode == 'defense' && $CONF['fleetconf'] == 1 && $CONF['purchase_bonus_timer'] > TIMESTAMP) {
			$elementALL	= array(401,402,403,404,405,406,407,408,409,410,411,412,413,414,416,417,418,419,420,421,422,502,503);
			$elementIDs	= array(407,408,409,411,502,503);
			$elementIDd	= array(401,402,403,420);
			$elementIDa	= array(405,404,406,416,417,421);
			$elementIDq	= array(418,412,410,413,419,414,422,415);
		}elseif($mode == 'defense') {
		$elementALL	= array(401,402,403,404,405,406,407,408,409,410,411,412,413,414,416,417,418,419,420,421,422,502,503);
			$elementIDs	= array(407,408,409,411,502,503);
			$elementIDd	= array(401,402,403);
			$elementIDa	= array(405,404,406,416,417);
			$elementIDq	= array(418,412,410,413,419,414,415);
			}elseif($mode == 'fleet' && $CONF['fleetconf'] == 1 && $CONF['purchase_bonus_timer'] > TIMESTAMP) {
			$elementALL	= array(202,203,204,205,206,207,208,209,210,211,212,213,214,215,216,217,218,219,220,221,222,223,224,225,226,227,228,229,230);
			$elementIDs	= array(208,210,220,223);
			$elementIDd	= array(212,202,203,204,205,229);
			$elementIDa	= array(209,206,207,217,215,213,211,219,224);
			$elementIDq	= array(225,226,214,216,230,227,228,222,218,221);
		}elseif($mode == 'fleet') {
			$elementALL	= array(202,203,204,205,206,207,208,209,210,211,212,213,214,215,216,217,218,219,220,221,222,223,224,225,226,227,228,229,230);
			$elementIDs	= array(208,210,220,223);
			$elementIDd	= array(212,202,203,204,205);
			$elementIDa	= array(209,206,207,217,215,213,211,219);
			$elementIDq	= array(225,226,214,216,227,228,222,218,221);
		}
		
		
		$Missiles	= array();
		$Domes	= array();
		$Orbits	= array();

		
		
		
		
		foreach($reslist['missile'] as $elementID)
		{
			$Missiles[$elementID]	= $PLANET[$resource[$elementID]];
		}
		
		foreach($reslist['defense'] as $elementID)
		{
			$Domes[$elementID]	= $PLANET[$resource[$elementID]];
			$Orbits[$elementID]	= $PLANET[$resource[$elementID]];
		}
		
		$MaxMissiles	= BuildFunctions::getMaxConstructibleRockets($USER, $PLANET, $Missiles);
		$MaxDomes	= BuildFunctions::getMaxConstructibleDomes($USER, $PLANET, $Domes);
		$MaxOrbits	= BuildFunctions::getMaxConstructibleOrbits($USER, $PLANET, $Orbits);
		
		
		foreach($elementALL as $Element)
		{
			
			$costRessources		= BuildFunctions::getElementPrice($USER, $PLANET, $Element);
			$costOverflow		= BuildFunctions::getRestPrice($USER, $PLANET, $Element, $costRessources);
			$elementTime    	= BuildFunctions::getBuildingTime($USER, $PLANET, $Element, $costRessources);
			$buyable			= BuildFunctions::isElementBuyable($USER, $PLANET, $Element, $costRessources);
			$maxBuildable		= BuildFunctions::getMaxConstructibleElements($USER, $PLANET, $Element, $costRessources);

			if(isset($MaxMissiles[$Element])) {
				$maxBuildable	= min($maxBuildable, $MaxMissiles[$Element]);
			}
			
			if(isset($MaxDomes[$Element])) {
				$maxBuildable	= min($maxBuildable, $MaxDomes[$Element]);
			}
			
			if(isset($MaxOrbits[$Element])) {
				$maxBuildable	= min($maxBuildable, $MaxOrbits[$Element]);
			}
			
			$AlreadyBuild		= in_array($Element, $reslist['one']) && (isset($elementInQueue[$Element]) || $PLANET[$resource[$Element]] != 0);
			

			
			$elementListall[$Element]	= array(
				'id'				=> $Element,
				'available'			=> $PLANET[$resource[$Element]],
				'costRessources'	=> $costRessources,
				'costOverflow'		=> $costOverflow,
				'elementTime'    	=> $elementTime,
				'buyable'			=> $buyable,
				'maxBuildable'		=> floattostring($maxBuildable),
				'AlreadyBuild'		=> $AlreadyBuild,
				'techacc' => BuildFunctions::isTechnologieAccessible($USER, $PLANET, $Element),
				
				
			);
		}
		
		foreach($elementIDs as $Element)
		{
		
			
			$AllTech = array();
   
			$GetAll = $GLOBALS['DATABASE']->query("SELECT * FROM `uni1_vars_requriements` WHERE elementID = ".$Element." ;");
			if($GLOBALS['DATABASE']->numRows($GetAll)>0){
			while($x = $GLOBALS['DATABASE']->fetch_array($GetAll)){
			$AllTech[] = $x;
			}
			}
			
			$costRessources		= BuildFunctions::getElementPrice($USER, $PLANET, $Element);
			$costOverflow		= BuildFunctions::getRestPrice($USER, $PLANET, $Element, $costRessources);
			$elementTime    	= BuildFunctions::getBuildingTime($USER, $PLANET, $Element, $costRessources);
			$buyable			= BuildFunctions::isElementBuyable($USER, $PLANET, $Element, $costRessources);
			$maxBuildable		= BuildFunctions::getMaxConstructibleElements($USER, $PLANET, $Element, $costRessources);

			if(isset($MaxMissiles[$Element])) {
				$maxBuildable	= min($maxBuildable, $MaxMissiles[$Element]);
			}
			
			if(isset($MaxDomes[$Element])) {
				$maxBuildable	= min($maxBuildable, $MaxDomes[$Element]);
			}
			
			if(isset($MaxOrbits[$Element])) {
				$maxBuildable	= min($maxBuildable, $MaxOrbits[$Element]);
			}
			
			$AlreadyBuild		= in_array($Element, $reslist['one']) && (isset($elementInQueue[$Element]) || $PLANET[$resource[$Element]] != 0);
			
			$elementList[$Element]	= array(
				'id'				=> $Element,
				'available'			=> $PLANET[$resource[$Element]],
				'costRessources'	=> $costRessources,
				'costOverflow'		=> $costOverflow,
				'elementTime'    	=> $elementTime,
				'buyable'			=> $buyable,
				'maxBuildable'		=> floattostring($maxBuildable),
				'AlreadyBuild'		=> $AlreadyBuild,
				'AllTech'		=> $AllTech,
				'techacc' => BuildFunctions::isTechnologieAccessible($USER, $PLANET, $Element),
				
			);
			
			
		}
		
		foreach($elementIDq as $Element)
		{
			$AllTech = array();
   
			$GetAll = $GLOBALS['DATABASE']->query("SELECT * FROM `uni1_vars_requriements` WHERE elementID = ".$Element." ;");
			if($GLOBALS['DATABASE']->numRows($GetAll)>0){
			while($x = $GLOBALS['DATABASE']->fetch_array($GetAll)){
			$AllTech[] = $x;
			}
			}
			
			$costRessources		= BuildFunctions::getElementPrice($USER, $PLANET, $Element);
			$costOverflow		= BuildFunctions::getRestPrice($USER, $PLANET, $Element, $costRessources);
			$elementTime    	= BuildFunctions::getBuildingTime($USER, $PLANET, $Element, $costRessources);
			$buyable			= BuildFunctions::isElementBuyable($USER, $PLANET, $Element, $costRessources);
			$maxBuildable		= BuildFunctions::getMaxConstructibleElements($USER, $PLANET, $Element, $costRessources);

			if(isset($MaxMissiles[$Element])) {
				$maxBuildable	= min($maxBuildable, $MaxMissiles[$Element]);
			}
			
			if(isset($MaxDomes[$Element])) {
				$maxBuildable	= min($maxBuildable, $MaxDomes[$Element]);
			}
			
			if(isset($MaxOrbits[$Element])) {
				$maxBuildable	= min($maxBuildable, $MaxOrbits[$Element]);
			}
			
			$AlreadyBuild		= in_array($Element, $reslist['one']) && (isset($elementInQueue[$Element]) || $PLANET[$resource[$Element]] != 0);
			
			$elementListq[$Element]	= array(
				'id'				=> $Element,
				'available'			=> $PLANET[$resource[$Element]],
				'costRessources'	=> $costRessources,
				'costOverflow'		=> $costOverflow,
				'elementTime'    	=> $elementTime,
				'buyable'			=> $buyable,
				'maxBuildable'		=> floattostring($maxBuildable),
				'AlreadyBuild'		=> $AlreadyBuild,
				'AllTech'		=> $AllTech,
				'techacc' => BuildFunctions::isTechnologieAccessible($USER, $PLANET, $Element),
				
			);
		}
		foreach($elementIDa as $Element)
		{
			
		$AllTech = array();
   
			$GetAll = $GLOBALS['DATABASE']->query("SELECT * FROM `uni1_vars_requriements` WHERE elementID = ".$Element." ;");
			if($GLOBALS['DATABASE']->numRows($GetAll)>0){
			while($x = $GLOBALS['DATABASE']->fetch_array($GetAll)){
			$AllTech[] = $x;
			}
			}
			
			$costRessources		= BuildFunctions::getElementPrice($USER, $PLANET, $Element);
			$costOverflow		= BuildFunctions::getRestPrice($USER, $PLANET, $Element, $costRessources);
			$elementTime    	= BuildFunctions::getBuildingTime($USER, $PLANET, $Element, $costRessources);
			$buyable			= BuildFunctions::isElementBuyable($USER, $PLANET, $Element, $costRessources);
			$maxBuildable		= BuildFunctions::getMaxConstructibleElements($USER, $PLANET, $Element, $costRessources);

			if(isset($MaxMissiles[$Element])) {
				$maxBuildable	= min($maxBuildable, $MaxMissiles[$Element]);
			}
			
			if(isset($MaxDomes[$Element])) {
				$maxBuildable	= min($maxBuildable, $MaxDomes[$Element]);
			}
			
			if(isset($MaxOrbits[$Element])) {
				$maxBuildable	= min($maxBuildable, $MaxOrbits[$Element]);
			}
			
			$AlreadyBuild		= in_array($Element, $reslist['one']) && (isset($elementInQueue[$Element]) || $PLANET[$resource[$Element]] != 0);
			
			$elementLista[$Element]	= array(
				'id'				=> $Element,
				'available'			=> $PLANET[$resource[$Element]],
				'costRessources'	=> $costRessources,
				'costOverflow'		=> $costOverflow,
				'elementTime'    	=> $elementTime,
				'buyable'			=> $buyable,
				'maxBuildable'		=> floattostring($maxBuildable),
				'AlreadyBuild'		=> $AlreadyBuild,
				'AllTech'		=> $AllTech,
				'techacc' => BuildFunctions::isTechnologieAccessible($USER, $PLANET, $Element),
			);
		}
		foreach($elementIDd as $Element)
		{
			
			$AllTech = array();
   
			$GetAll = $GLOBALS['DATABASE']->query("SELECT * FROM `uni1_vars_requriements` WHERE elementID = ".$Element." ;");
			if($GLOBALS['DATABASE']->numRows($GetAll)>0){
			while($x = $GLOBALS['DATABASE']->fetch_array($GetAll)){
			$AllTech[] = $x;
			}
			}
			
			$costRessources		= BuildFunctions::getElementPrice($USER, $PLANET, $Element);
			$costOverflow		= BuildFunctions::getRestPrice($USER, $PLANET, $Element, $costRessources);
			$elementTime    	= BuildFunctions::getBuildingTime($USER, $PLANET, $Element, $costRessources);
			$buyable			= BuildFunctions::isElementBuyable($USER, $PLANET, $Element, $costRessources);
			$maxBuildable		= BuildFunctions::getMaxConstructibleElements($USER, $PLANET, $Element, $costRessources);

			if(isset($MaxMissiles[$Element])) {
				$maxBuildable	= min($maxBuildable, $MaxMissiles[$Element]);
			}
			
			if(isset($MaxDomes[$Element])) {
				$maxBuildable	= min($maxBuildable, $MaxDomes[$Element]);
			}
			
			if(isset($MaxOrbits[$Element])) {
				$maxBuildable	= min($maxBuildable, $MaxOrbits[$Element]);
			}
			
			$AlreadyBuild		= in_array($Element, $reslist['one']) && (isset($elementInQueue[$Element]) || $PLANET[$resource[$Element]] != 0);
			
			$elementListd[$Element]	= array(
				'id'				=> $Element,
				'available'			=> $PLANET[$resource[$Element]],
				'costRessources'	=> $costRessources,
				'costOverflow'		=> $costOverflow,
				'elementTime'    	=> $elementTime,
				'buyable'			=> $buyable,
				'maxBuildable'		=> floattostring($maxBuildable),
				'AlreadyBuild'		=> $AlreadyBuild,
				'AllTech'		=> $AllTech,
				'techacc' => BuildFunctions::isTechnologieAccessible($USER, $PLANET, $Element),
				
			);
		}
		
		$manual_step_9 = 1;
		if($USER['training'] == 0 && $USER['training_step'] == 9 && ($PLANET['misil_launcher'] < 25 || $PLANET['small_laser'] < 10)){
		$manual_step_9 = 0;
		}
		
		$manual_step_10 = 1;
		if($USER['training'] == 0 && $USER['training_step'] == 9  && $PLANET['misil_launcher'] >=25  && $PLANET['small_laser'] >=10){
		$manual_step_10 = 0;
		$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `training_step` = '11' WHERE `id` = ".$USER['id'].";");
		$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `experience_peace` = `experience_peace` + '650' WHERE `id` = '".$USER['id']."';");
		require_once('includes/classes/class.FleetFunctions.php');
		$rawfleetarray			= array(204 => 8, 205 => 5, 206 => 3);
		$fleetRessource	= array(
			901	=> 0,
			902	=> 0,
			903	=> 0,
		);
		FleetFunctions::sendFleet($rawfleetarray, '1', 1, 1, 1, 1, 1, 1, $PLANET['id_owner'], $PLANET['id'], $PLANET['galaxy'], $PLANET['system'], $PLANET['planet'], $PLANET['planet_type'], $fleetRessource, TIMESTAMP +58, TIMESTAMP+58, (TIMESTAMP + 116), 0);
		}
	
		
		$manual_step_16 = 1;
		if($USER['training'] == 0 && $USER['training_step'] == 16){
		$manual_step_16 = 0;
		}
		
		if($USER['training'] == 0 && $USER['training_step'] == 16 && $PLANET['recycler'] >=5 ){
		$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `training_step` = '17' WHERE `id` = ".$USER['id'].";");
		}
		

		
		$this->tplObj->loadscript('shipyard.js');
		$this->tplObj->assign_vars(array(
			'manual_step_16'	=> $manual_step_16,
			'manual_step_10'	=> $manual_step_10,
			'manual_step_9'	=> $manual_step_9,
			'elementListall'	=> $elementListall,
			'elementList'	=> $elementList,
			'elementListd'	=> $elementListd,
			'elementLista'	=> $elementLista,
			'elementListq'	=> $elementListq,
			'NotBuilding'	=> $NotBuilding,
			'BuildList'		=> $Buildlist,
			'maxlength'		=> strlen(Config::get('max_fleet_per_build')),
			'mode'			=> $mode,
			
			
			
		));

		$this->display('page.shipyard.default.tpl');
	}
}