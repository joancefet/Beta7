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
 * @info $Id: class.ShowBuildingsPage.php 2632 2013-03-18 19:05:14Z slaver7 $
 * @link http://2moons.cc/
 */

class ShowDmbuildPage extends AbstractPage
{	
	
	public static $requireModule = MODULE_BUILDING;

	function __construct() 
	{
		parent::__construct();
	}

	
	private function AddBuildingToQueue($Element, $AddMode = true)
	{
		global $PLANET, $USER, $resource, $CONF, $reslist, $pricelist;
		
		if(!in_array($Element, $reslist['allow'][$PLANET['planet_type']])
			|| !BuildFunctions::isTechnologieAccessible($USER, $PLANET, $Element) 
			|| ($Element == 31 && $USER["b_tech_planet"] != 0) 
			|| (($Element == 15 || $Element == 21) && !empty($PLANET['b_hangar_id']))
			|| (!$AddMode && $PLANET[$resource[$Element]] == 0)
		)
			return;
		
		$CurrentQueue  		= unserialize($PLANET['b_building_id']);

				
		if (!empty($CurrentQueue)) {
			$ActualCount	= count($CurrentQueue);
		} else {
			$CurrentQueue	= array();
			$ActualCount	= 0;
		}
		
		$CurrentMaxFields  	= CalculateMaxPlanetFields($PLANET);
		
		$premium_stage = 0;
		if($USER['premium_reward_stage'] > 0 && $USER['premium_reward_days'] > TIMESTAMP){
		$premium_stage = $USER['premium_reward_stage'];
		}
		
		if ((Config::get('max_elements_build') != 0 && $ActualCount == Config::get('max_elements_build') + $premium_stage) || ($AddMode && $PLANET["field_current"] >= ($CurrentMaxFields - $ActualCount)))
			return;
	
		$BuildMode 			= $AddMode ? 'build' : 'destroy';
		$BuildLevel			= $PLANET[$resource[$Element]] + (int) $AddMode;
		
		$costRessources		= round(max(1,($pricelist[$Element]['cost']['901'] + $pricelist[$Element]['cost']['902'] + $pricelist[$Element]['cost']['903']) *pow($pricelist[$Element]['factor'], $PLANET[$resource[$Element]]) / 5000));
		
			if($pricelist[$Element]['max'] < $BuildLevel)
				return;
			
			if($USER['darkmatter'] < $costRessources)
			return;
			$GLOBALS['DATABASE']->query("UPDATE ".PLANETS." SET ".$resource[$Element]." = ".$resource[$Element]." + 1 WHERE id = '".$PLANET['id']."';");
			$USER['darkmatter']		-= $costRessources; 
			
			$PLANET['field_current'] += 1;
		

	}

	private function getQueueData()
	{
		global $LNG, $CONF, $PLANET, $USER;
		
		$scriptData		= array();
		$quickinfo		= array();
		
		if ($PLANET['b_building'] == 0 || $PLANET['b_building_id'] == "")
			return array('queue' => $scriptData, 'quickinfo' => $quickinfo);
		
		$buildQueue		= unserialize($PLANET['b_building_id']);
		
		foreach($buildQueue as $BuildArray) {
			if ($BuildArray[3] < TIMESTAMP)
				continue;
			
			$quickinfo[$BuildArray[0]]	= $BuildArray[1];
			
			$scriptData[] = array(
				'element'	=> $BuildArray[0], 
				'level' 	=> $BuildArray[1], 
				'time' 		=> $BuildArray[2], 
				'resttime' 	=> ($BuildArray[3] - TIMESTAMP), 
				'destroy' 	=> ($BuildArray[4] == 'destroy'), 
				'endtime' 	=> _date('U', $BuildArray[3], $USER['timezone']),
				'display' 	=> _date($LNG['php_tdformat'], $BuildArray[3], $USER['timezone']),
			);
		}
		
		return array('queue' => $scriptData, 'quickinfo' => $quickinfo);
	}

	public function show()
	{
		global $ProdGrid, $LNG, $UNI, $resource, $reslist, $CONF, $PLANET, $USER, $pricelist;
		
		$TheCommand		= HTTP::_GP('cmd', '');

		
		if($CONF['dmenabled'] == 0){
			$this->printMessage("This add-on is disabled", true, array('game.php?page=overview', 2));
			die;
		}

		// wellformed buildURLs
		if(!empty($TheCommand) && $_SERVER['REQUEST_METHOD'] === 'POST' && $USER['urlaubs_modus'] == 0)
		{
			$Element     	= HTTP::_GP('building', 0);
			$ListID      	= HTTP::_GP('listid', 0);
			switch($TheCommand)
			{
				
				case 'insert':
					$this->AddBuildingToQueue($Element, true);
				break;
			
			}
			
			$this->redirectTo('game.php?page=dmbuild');
		}
		$premium_stage = 0;
		if($USER['premium_reward_stage'] > 0 && $USER['premium_reward_days'] > TIMESTAMP){
		$premium_stage = $USER['premium_reward_stage'];
		}
		$queueData	 		= $this->getQueueData();
		$Queue	 			= $queueData['queue'];
		$QueueCount			= count($Queue);
		$CanBuildElement 	= isVacationMode($USER) || Config::get('max_elements_build') == 0 || $QueueCount < Config::get('max_elements_build') + $premium_stage;
		$CurrentMaxFields   = CalculateMaxPlanetFields($PLANET);
		
		$RoomIsOk 			= $PLANET['field_current'] < ($CurrentMaxFields - $QueueCount);
				
		$BuildEnergy		= $USER[$resource[113]];
		$BuildLevelFactor   = 10;
		$BuildTemp          = $PLANET['temp_max'];

        $BuildInfoList      = array();

		
		if($PLANET['planet_type'] == 1){
		$Elements			= $reslist['allow'][$PLANET['planet_type']];
		}elseif($PLANET['planet_type'] == 3){
		$Elements			= array(14,15,21,22,23,24,41,42,43);
		}
		foreach($Elements as $ID => $Element)
		{
		
		if (!BuildFunctions::isBusyToBuild($USER, $PLANET, $Element))
				continue;
			
			
			$AllTech = array();
   
			$GetAll = $GLOBALS['DATABASE']->query("SELECT * FROM `uni1_vars_requriements` WHERE elementID = ".$Element." ;");
			if($GLOBALS['DATABASE']->numRows($GetAll)>0){
			while($x = $GLOBALS['DATABASE']->fetch_array($GetAll)){
			$AllTech[] = $x;
			}
			}
			
			$infoEnergy	= "";
			
			if(isset($queueData['quickinfo'][$Element]))
			{
				$levelToBuild	= $queueData['quickinfo'][$Element];
			}
			else
			{
				$levelToBuild	= $PLANET[$resource[$Element]];
			}
			
			if(in_array($Element, $reslist['prod']))
			{	
		
				$premium_resource = 0;
				if($USER['premium_reward_extraction'] > 0 && $USER['premium_reward_extraction_days'] > TIMESTAMP){
				$premium_resource = $USER['premium_reward_extraction'];
				}
				$premium_resource	                = $premium_resource;	
				
				$peacefull_resource = 0;
				if($USER['experience_peace_level'] > 0){
				$peacefull_resource = $USER['experience_peace_level'];
				}
				$peacefull_resource	                = $peacefull_resource;	
				
				$combat_collider = 0;
				if($USER['combat_reward_collider'] > 0){
				$combat_collider = $USER['combat_reward_collider'];
				}
				$combat_collider	                = $combat_collider;
				
				$academy_mines = 0;
				if($USER['academy_1201'] > 0){
				$academy_mines = getbonusOneBis(1201,$USER['academy_1201']);
				}
				$academy_mines	                = $academy_mines; 	
				
				$daily_prod_bonus = 0;
				if($USER['daily_produ'] > TIMESTAMP){
				$daily_prod_bonus = 30;
				}
				$daily_prod_bonus	                = $daily_prod_bonus; 	
				
				$academy_energy = 0;
				if($USER['academy_1202'] > 0){
				$academy_energy = getbonusOneBis(1202,$USER['academy_1202']);
				}
				$academy_energy	                = $academy_energy;
				
				$academy_fusion = 0;
				if($USER['academy_1209'] > 0){
				$academy_fusion = getbonusOneBis(1209,$USER['academy_1209']);
				}
				$academy_fusion	                = $academy_fusion;
				
				$academy_solar = 0;
				if($USER['academy_1210'] > 0){
				$academy_solar = getbonusOneBis(1210,$USER['academy_1210']);
				}
				$academy_solar	                = $academy_solar;
				
				
				
				$allyInfo = $GLOBALS['DATABASE']->query("SELECT alliance_prod FROM `uni1_alliance` WHERE id = ".$USER['ally_id'].";");
				$allyInfo  = $GLOBALS['DATABASE']->fetch_array($allyInfo);
			
				$alliance_prod = 0;
				if($allyInfo['alliance_prod'] > 0){
				$alliance_prod = $allyInfo['alliance_prod'];
				}
				$alliance_prod	                = $alliance_prod;
					   
				
				$BuildLevel	= $PLANET[$resource[$Element]];
				$Need		= round(eval(ResourceUpdate::getProd($ProdGrid[$Element]['production'][911])));
									
				$BuildLevel	= $levelToBuild + 1;
				$Prod		= round(eval(ResourceUpdate::getProd($ProdGrid[$Element]['production'][911])));
					
				$requireEnergy	= $Prod - $Need;
				
				if($requireEnergy < 0) {
					$infoEnergy	= sprintf($LNG['bd_need_engine'], pretty_number(abs($requireEnergy)), $LNG['tech'][911]);
				} else {
					$infoEnergy	= sprintf($LNG['bd_more_engine'], pretty_number(abs($requireEnergy)), $LNG['tech'][911]);
				}
			}
			
			$costRessources		= round(max(1,($pricelist[$Element]['cost']['901'] + $pricelist[$Element]['cost']['902'] + $pricelist[$Element]['cost']['903']) *pow($pricelist[$Element]['factor'], $PLANET[$resource[$Element]]) / 5000));
			
			
			$elementTime    	= 0;
			
			
			
			$BuildInfoList[$Element]	= array(
				'level'				=> $PLANET[$resource[$Element]],
				'maxLevel'			=> $pricelist[$Element]['max'],
				'infoEnergy'		=> $infoEnergy,
				'costRessources'	=> pretty_number($costRessources),
				'techacc' => BuildFunctions::isTechnologieAccessible($USER, $PLANET, $Element),
				'elementTime'    	=> $elementTime,
				'levelToBuild'		=> $levelToBuild,
				'AllTech'		=> $AllTech,
			);
		}

		$this->tplObj->loadscript('buildlist.js');
		$this->tplObj->assign_vars(array(
			'BuildInfoList'		=> $BuildInfoList,
			'CanBuildElement'	=> $CanBuildElement,
			'RoomIsOk'			=> $RoomIsOk,
			'Queue'				=> $Queue,
			'isBusy'			=> array('shipyard' => !empty($PLANET['b_hangar_id']), 'research' => $USER['b_tech_planet'] != 0),
			'HaveMissiles'		=> (bool) $PLANET[$resource[503]] + $PLANET[$resource[502]],
			'HaveMissiles'		=> (bool) $PLANET[$resource[503]] + $PLANET[$resource[502]],
			'field_used'		=> $PLANET['field_current'],
			'field_max'		=> CalculateMaxPlanetFields($PLANET),
			'field_left'		=> CalculateMaxPlanetFields($PLANET) - $PLANET['field_current'],
			'field_percent'		=> $PLANET['field_current'] * 100 / CalculateMaxPlanetFields($PLANET),
		));
			
		$this->display('page.dmbuild.default.tpl');
	}
}