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
 

class ShowDmhangarPage extends AbstractPage
{
	public static $requireModule = 0;
	
	public static $defaultController = 'show';

	function __construct() 
	{
		parent::__construct();
	}
	
	
	
	private function BuildAuftr($fmenge)
	{
		global $USER, $PLANET, $reslist, $CONF, $resource, $pricelist;	
		
		
		

		foreach($fmenge as $Element => $Count)
		{
			if(empty($Count)
				|| !in_array($Element, array_merge($reslist['fleet'], $reslist['defense']))
				|| !BuildFunctions::isTechnologieAccessible($USER, $PLANET, $Element)
			) {
				continue;
			}
			
			
			
			$MaxElements 	= BuildFunctions::getMaxConstructibleElementsDM($USER, $PLANET, $Element);
			$Count			= is_numeric($Count) ? round($Count) : 0;
			$Count 			= max(min($Count, Config::get('max_fleet_per_build')), 0);
			$Count 			= min($Count, $MaxElements);
			
			$BuildArray    	= !empty($PLANET['b_hangar_id']) ? unserialize($PLANET['b_hangar_id']) : array();
			
			if($Element == 407 || $Element == 408 || $Element == 409 || $Element == 411)
			continue;
			
			if(empty($Count))
				continue;
				
			$GetAllPrice = $GLOBALS['DATABASE']->query("SELECT dmprice FROM `uni1_vars` WHERE elementID = ".$Element." ;");
			
			while($x = $GLOBALS['DATABASE']->fetch_array($GetAllPrice)){
			$AllPrice = $x['dmprice'];
			}
			
			
			$costRessources		= $AllPrice * $Count;
		
			if($USER['darkmatter'] - $costRessources < 0)
			continue;
			
			if(40000000 - $USER['instant_fleet'] < 0)
			continue;
			
			
			$USER['darkmatter']		-= $costRessources; 
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET instant_fleet = instant_fleet + ".$costRessources.", darkmatter  = darkmatter -  ".$costRessources." WHERE id = ".$USER['id']." ;");
			$GLOBALS['DATABASE']->query("UPDATE ".PLANETS." SET ".$resource[$Element]."  = ".$resource[$Element]." + ".$Count." WHERE id = ".$PLANET['id']." ;");

		}
	}
	
	public function show()
	{
		global $USER, $UNI, $PLANET, $LNG, $resource, $dpath, $reslist, $pricelist, $requeriments, $CONF;
		if($CONF['dmenabled'] == 0){
			$this->printMessage("This add-on is disabled", true, array('game.php?page=overview', 2));
			die;
		}
		


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
		
		if($mode == 'defense' && $CONF['fleetconf'] > TIMESTAMP) {
			$elementALL	= array(401,402,403,404,405,406,410,412,413,414,416,417,418,419,420,421,422);
			$elementIDs	= array(411,502,503);
			$elementIDd	= array(401,402,403,420);
			$elementIDa	= array(405,404,406,416,417,421);
			$elementIDq	= array(418,412,410,413,419,414);
		}elseif($mode == 'defense' && $CONF['fleetconf'] < TIMESTAMP) {
			$elementALL	= array(401,402,403,404,405,406,410,412,413,414,416,417,418,419,420,421,422);
			$elementIDs	= array(411,502,503);
			$elementIDd	= array(401,402,403);
			$elementIDa	= array(405,404,406,416,417);
			$elementIDq	= array(418,412,410,413,422,419,414,422);
			}elseif($mode == 'fleet' && $CONF['fleetconf'] > TIMESTAMP) {
			$elementALL	= array(202,203,204,205,206,207,208,209,210,211,212,213,214,215,216,217,218,219,221,222,223,224,225,226,227,228,229,230);
			$elementIDs	= array(208,210,223);
			$elementIDd	= array(212,202,203,204,205,229);
			$elementIDa	= array(209,206,207,217,215,213,211,219,224);
			$elementIDq	= array(225,226,214,216,230,227,228,222,218,221);
		}elseif($mode == 'fleet' && $CONF['fleetconf'] < TIMESTAMP) {
			$elementALL	= array(202,203,204,205,206,207,208,209,210,211,212,213,214,215,216,217,218,219,221,222,223,224,225,226,227,228,229,230);
			$elementIDs	= array(208,210,223);
			$elementIDd	= array(212,202,203,204,205);
			$elementIDa	= array(209,206,207,217,215,213,211,219);
			$elementIDq	= array(225,226,214,216,230,227,228,222,218,221);
		}
		
		
		foreach($elementALL as $Element)
		{
			 
			$AllPrice = array();
   
			$GetAllPrice = $GLOBALS['DATABASE']->query("SELECT * FROM `uni1_vars` WHERE elementID = ".$Element." ;");
			if($GLOBALS['DATABASE']->numRows($GetAllPrice)>0){
			while($k = $GLOBALS['DATABASE']->fetch_array($GetAllPrice)){
			$AllPrice[] = $k;
			}
			}
			
			$costRessources		= $k;
			$costOverflow		= BuildFunctions::getRestPrice($USER, $PLANET, $Element, $costRessources);
			$elementTime    	= 0;
			$buyable			= BuildFunctions::isElementBuyable($USER, $PLANET, $Element, $costRessources);
			$maxBuildable		= BuildFunctions::getMaxConstructibleElementsDM($USER, $PLANET, $Element, $costRessources);

			
			$elementListall[$Element]	= array(
				'id'				=> $Element,
				'available'			=> $PLANET[$resource[$Element]],
				'costRessources'	=> $costRessources,
				'costOverflow'		=> $costOverflow,
				'elementTime'    	=> $elementTime,
				'buyable'			=> $buyable,
				'maxBuildable'		=> floattostring($maxBuildable),
				'AllPrice'		=> $AllPrice,
				
				'techacc' => BuildFunctions::isTechnologieAccessible($USER, $PLANET, $Element),
				
				
			);
		}
		
		foreach($elementIDs as $Element)
		{
		
			
			$AllTech = array();
   
			$GetAll = $GLOBALS['DATABASE']->query("SELECT * FROM `uni1_vars_requriements` WHERE elementID = ".$Element." ;");
			if($GLOBALS['DATABASE']->numRows($GetAll)>0){
			while($x = $GLOBALS['DATABASE']->fetch_array($GetAll)){
				 if($x['requireID'] <=  99){
            $x['rlevel'] = $PLANET[$resource[$x['requireID']]];
            }else{
                $x['rlevel'] =  $USER[$resource[$x['requireID']]];
            }
			$AllTech[] = $x;
			}
			}
			
			$AllPrice = array();
   
			$GetAllPrice = $GLOBALS['DATABASE']->query("SELECT * FROM `uni1_vars` WHERE elementID = ".$Element." ;");
			if($GLOBALS['DATABASE']->numRows($GetAllPrice)>0){
			while($k = $GLOBALS['DATABASE']->fetch_array($GetAllPrice)){
			$AllPrice[] = $k;
			}
			}
			$costRessources		= $k;
			$costOverflow		= BuildFunctions::getRestPrice($USER, $PLANET, $Element, $costRessources);
			$elementTime    	= 0;
			$buyable			= BuildFunctions::isElementBuyable($USER, $PLANET, $Element, $costRessources);
			$maxBuildable		= BuildFunctions::getMaxConstructibleElementsDM($USER, $PLANET, $Element, $costRessources);

			$elementList[$Element]	= array(
				'id'				=> $Element,
				'available'			=> $PLANET[$resource[$Element]],
				'costRessources'	=> $costRessources,
				'costOverflow'		=> $costOverflow,
				'elementTime'    	=> $elementTime,
				'buyable'			=> $buyable,
				'maxBuildable'		=> floattostring($maxBuildable),
				
				'AllPrice'		=> $AllPrice,
				'AllTech'		=> $AllTech,
				'AllPrice'		=> $AllPrice,
				'techacc' => BuildFunctions::isTechnologieAccessible($USER, $PLANET, $Element),
				
			);
			
			
		}
		
		foreach($elementIDq as $Element)
		{
			$AllTech = array();
   
			$GetAll = $GLOBALS['DATABASE']->query("SELECT * FROM `uni1_vars_requriements` WHERE elementID = ".$Element." ;");
			if($GLOBALS['DATABASE']->numRows($GetAll)>0){
			while($x = $GLOBALS['DATABASE']->fetch_array($GetAll)){
				 if($x['requireID'] <=  99){
            $x['rlevel'] = $PLANET[$resource[$x['requireID']]];
            }else{
                $x['rlevel'] =  $USER[$resource[$x['requireID']]];
            }
			$AllTech[] = $x;
			}
			}
			
			$AllPrice = array();
   
			$GetAllPrice = $GLOBALS['DATABASE']->query("SELECT * FROM `uni1_vars` WHERE elementID = ".$Element." ;");
			if($GLOBALS['DATABASE']->numRows($GetAllPrice)>0){
			while($k = $GLOBALS['DATABASE']->fetch_array($GetAllPrice)){
			$AllPrice[] = $k;
			}
			}
			
			$costRessources		= $k;
			$costOverflow		= BuildFunctions::getRestPrice($USER, $PLANET, $Element, $costRessources);
			$elementTime    	= 0;
			$buyable			= BuildFunctions::isElementBuyable($USER, $PLANET, $Element, $costRessources);
			$maxBuildable		= BuildFunctions::getMaxConstructibleElementsDM($USER, $PLANET, $Element, $costRessources);

			
			$elementListq[$Element]	= array(
				'id'				=> $Element,
				'available'			=> $PLANET[$resource[$Element]],
				'costRessources'	=> $costRessources,
				'costOverflow'		=> $costOverflow,
				'elementTime'    	=> $elementTime,
				'buyable'			=> $buyable,
				'maxBuildable'		=> floattostring($maxBuildable),
				
				'AllTech'		=> $AllTech,
				'AllPrice'		=> $AllPrice,
				'techacc' => BuildFunctions::isTechnologieAccessible($USER, $PLANET, $Element),
				
			);
		}
		foreach($elementIDa as $Element)
		{
			
		$AllTech = array();
   
			$GetAll = $GLOBALS['DATABASE']->query("SELECT * FROM `uni1_vars_requriements` WHERE elementID = ".$Element." ;");
			if($GLOBALS['DATABASE']->numRows($GetAll)>0){
			while($x = $GLOBALS['DATABASE']->fetch_array($GetAll)){
				 if($x['requireID'] <=  99){
            $x['rlevel'] = $PLANET[$resource[$x['requireID']]];
            }else{
                $x['rlevel'] =  $USER[$resource[$x['requireID']]];
            }
			$AllTech[] = $x;
			}
			}
			
			$AllPrice = array();
   
			$GetAllPrice = $GLOBALS['DATABASE']->query("SELECT * FROM `uni1_vars` WHERE elementID = ".$Element." ;");
			if($GLOBALS['DATABASE']->numRows($GetAllPrice)>0){
			while($k = $GLOBALS['DATABASE']->fetch_array($GetAllPrice)){
			$AllPrice[] = $k;
			}
			}
			
			$costRessources		= $k;
			$costOverflow		= BuildFunctions::getRestPrice($USER, $PLANET, $Element, $costRessources);
			$elementTime    	= 0;
			$buyable			= BuildFunctions::isElementBuyable($USER, $PLANET, $Element, $costRessources);
			$maxBuildable		= BuildFunctions::getMaxConstructibleElementsDM($USER, $PLANET, $Element, $costRessources);

			
			$elementLista[$Element]	= array(
				'id'				=> $Element,
				'available'			=> $PLANET[$resource[$Element]],
				'costRessources'	=> $costRessources,
				'costOverflow'		=> $costOverflow,
				'elementTime'    	=> $elementTime,
				'buyable'			=> $buyable,
				'maxBuildable'		=> floattostring($maxBuildable),
				
				'AllTech'		=> $AllTech,
				'AllPrice'		=> $AllPrice,
				'techacc' => BuildFunctions::isTechnologieAccessible($USER, $PLANET, $Element),
			);
		}
		foreach($elementIDd as $Element)
		{
			
			$AllTech = array();
   
			$GetAll = $GLOBALS['DATABASE']->query("SELECT * FROM `uni1_vars_requriements` WHERE elementID = ".$Element." ;");
			if($GLOBALS['DATABASE']->numRows($GetAll)>0){
			while($x = $GLOBALS['DATABASE']->fetch_array($GetAll)){
				 if($x['requireID'] <=  99){
            $x['rlevel'] = $PLANET[$resource[$x['requireID']]];
            }else{
                $x['rlevel'] =  $USER[$resource[$x['requireID']]];
            }
			$AllTech[] = $x;
			}
			}
			
			$AllPrice = array();
   
			$GetAllPrice = $GLOBALS['DATABASE']->query("SELECT * FROM `uni1_vars` WHERE elementID = ".$Element." ;");
			if($GLOBALS['DATABASE']->numRows($GetAllPrice)>0){
			while($k = $GLOBALS['DATABASE']->fetch_array($GetAllPrice)){
			$AllPrice[] = $k;
			}
			}
			
			$costRessources		= $k;
			$costOverflow		= BuildFunctions::getRestPrice($USER, $PLANET, $Element, $costRessources);
			$elementTime    	= 0;
			$buyable			= BuildFunctions::isElementBuyable($USER, $PLANET, $Element, $costRessources);
			$maxBuildable		= BuildFunctions::getMaxConstructibleElementsDM($USER, $PLANET, $Element, $costRessources);

			
			
			$elementListd[$Element]	= array(
				'id'				=> $Element,
				'available'			=> $PLANET[$resource[$Element]],
				'costRessources'	=> $costRessources,
				'costOverflow'		=> $costOverflow,
				'elementTime'    	=> $elementTime,
				'buyable'			=> $buyable,
				'maxBuildable'		=> floattostring($maxBuildable),
				
				'AllTech'		=> $AllTech,
				'AllPrice'		=> $AllPrice,
				'techacc' => BuildFunctions::isTechnologieAccessible($USER, $PLANET, $Element),
				
			);
		}
		
	
	
		
		
		

		

		
		$this->tplObj->loadscript('shipyard.js');
		$this->tplObj->assign_vars(array(

			'elementListall'	=> $elementListall,
			'elementList'	=> $elementList,
			'elementListd'	=> $elementListd,
			'elementLista'	=> $elementLista,
			'elementListq'	=> $elementListq,
			'NotBuilding'	=> $NotBuilding,
			'BuildList'		=> $Buildlist,
			'maxlength'		=> strlen(Config::get('max_fleet_per_build')),
			'mode'			=> $mode,
			'instant_fleet'			=> pretty_number(40000000 - $USER['instant_fleet']),
			
			
			
		));

		$this->display('page.dmship.default.tpl');
	}
}
