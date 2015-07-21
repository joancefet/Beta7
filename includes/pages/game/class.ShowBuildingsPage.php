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
 require_once('includes/classes/class.FleetFunctions.php');
class ShowBuildingsPage extends AbstractPage
{	
	private $build_anz=0;
	private $bOnInsert=FALSE;
	public static $requireModule = MODULE_BUILDING;

	function __construct() 
	{
		parent::__construct();
	}
	
	private function CancelBuildingFromQueue()
	{
		global $PLANET, $USER, $resource;
		$CurrentQueue  = unserialize($PLANET['b_building_id']);
		if (empty($CurrentQueue))
		{
			$PLANET['b_building_id']	= '';
			$PLANET['b_building']		= 0;
			return;
		}
	
	
	
		$Element             	= $CurrentQueue[0][0];
		$BuildMode          	= $CurrentQueue[0][4];
		
		$costRessources			= BuildFunctions::getElementPrice($USER, $PLANET, $Element, $BuildMode == 'destroy');
		
		
		if(isset($costRessources[901])) { $PLANET[$resource[901]]	+= $costRessources[901]; }
		if(isset($costRessources[902])) { $PLANET[$resource[902]]	+= $costRessources[902]; }
		if(isset($costRessources[903])) { $PLANET[$resource[903]]	+= $costRessources[903]; }
		if(isset($costRessources[921])) { $USER[$resource[921]]		+= $costRessources[921]; }
		if(isset($costRessources[922])) { $USER[$resource[922]]		+= $costRessources[922]; }
		
		
		array_shift($CurrentQueue);
		if (count($CurrentQueue) == 0) {
			$PLANET['b_building']    	= 0;
			$PLANET['b_building_id'] 	= '';
		} else {
			$BuildEndTime	= TIMESTAMP;
			$NewQueueArray	= array();
			foreach($CurrentQueue as $ListIDArray) {
				if($Element == $ListIDArray[0])
					continue;
					
				$BuildEndTime       += BuildFunctions::getBuildingTime($USER, $PLANET, $ListIDArray[0], NULL, $ListIDArray[4] == 'destroy');
				$ListIDArray[3]		= $BuildEndTime;
				$NewQueueArray[]	= $ListIDArray;					
			}
			
			if(!empty($NewQueueArray)) {
				$PLANET['b_building']    	= TIMESTAMP;
				$PLANET['b_building_id'] 	= serialize($NewQueueArray);
				$this->ecoObj->USER			= $USER;
				$this->ecoObj->PLANET		= $PLANET;
				$this->ecoObj->SetNextQueueElementOnTop();
				$USER						= $this->ecoObj->USER;
				$PLANET						= $this->ecoObj->PLANET;
			} else {
				$PLANET['b_building']    	= 0;
				$PLANET['b_building_id'] 	= '';

			}
		}
	}

	private function RemoveBuildingFromQueue($QueueID)
	{
		global $USER, $PLANET;
		if ($QueueID <= 1 || empty($PLANET['b_building_id'])) {
            return false;
        }

		$CurrentQueue  = unserialize($PLANET['b_building_id']);
		$ActualCount   = count($CurrentQueue);
		if($ActualCount <= 1) {
			return $this->CancelBuildingFromQueue();
        }

		$Element		= $CurrentQueue[$QueueID - 2][0];
		$BuildEndTime	= $CurrentQueue[$QueueID - 2][3];
		unset($CurrentQueue[$QueueID - 1]);
		$NewQueueArray	= array();
		foreach($CurrentQueue as $ID => $ListIDArray)
		{				
			if ($ID < $QueueID - 1) {
				$NewQueueArray[]	= $ListIDArray;
			} else {
				if($Element == $ListIDArray[0] || empty($ListIDArray[0]))
					continue;

				$BuildEndTime       += BuildFunctions::getBuildingTime($USER, $PLANET, $ListIDArray[0]);
				$ListIDArray[3]		= $BuildEndTime;
				$NewQueueArray[]	= $ListIDArray;				
			}
		}

		if(!empty($NewQueueArray))
			$PLANET['b_building_id'] = serialize($NewQueueArray);
		else
			$PLANET['b_building_id'] = "";

        return true;
	}

	
	private function AddBuildingToQueue($Element, $lvlup, $lvlup1, $AddMode = true)
 {
  if($this->bOnInsert==FALSE)
  {
   $this->build_anz=(int)$_POST['lvlup'] - $_POST['lvlup1'];
   if($this->build_anz>=1 )
   {
    $this->bOnInsert=TRUE;
    while($this->build_anz>0)
    {
     $this->DoAddBuildingToQueue($Element, $AddMode);
     $this->build_anz=$this->build_anz-1;
    }
    $this->bOnInsert=FALSE;
   }
  }
 }
	private function DoAddBuildingToQueue($Element, $AddMode = true)	{
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
		if($USER['premium_reward_stage'] > 0 && $USER['premium_reward_stage_days'] > TIMESTAMP){
		$premium_stage = $USER['premium_reward_stage'];
		}

		if ((Config::get('max_elements_build')  != 0 && $ActualCount == Config::get('max_elements_build') +$premium_stage) || ($AddMode && $PLANET["field_current"] >= ($CurrentMaxFields - $ActualCount)))
			return;
	
		$BuildMode 			= $AddMode ? 'build' : 'destroy';
		$BuildLevel			= $PLANET[$resource[$Element]] + (int) $AddMode;
		
		if($ActualCount == 0)
		{
			if($pricelist[$Element]['max'] < $BuildLevel)
				return;

			$costRessources		= BuildFunctions::getElementPrice($USER, $PLANET, $Element, !$AddMode);
			
			if(!BuildFunctions::isElementBuyable($USER, $PLANET, $Element, $costRessources))
				return;
			
			if(isset($costRessources[901])) { $PLANET[$resource[901]]	-= $costRessources[901]; }
			if(isset($costRessources[902])) { $PLANET[$resource[902]]	-= $costRessources[902]; }
			if(isset($costRessources[903])) { $PLANET[$resource[903]]	-= $costRessources[903]; }
			if(isset($costRessources[921])) { $USER[$resource[921]]		-= $costRessources[921]; }
			if(isset($costRessources[922])) { $USER[$resource[922]]		-= $costRessources[922]; }
			
			
		
                        
			$elementTime    			= BuildFunctions::getBuildingTime($USER, $PLANET, $Element, $costRessources);
			$BuildEndTime				= TIMESTAMP + $elementTime;

			$PLANET['b_building_id']	= serialize(array(array($Element, $BuildLevel, $elementTime, $BuildEndTime, $BuildMode)));
			$PLANET['b_building']		= $BuildEndTime;
			
		} else {
			$addLevel = 0;
			foreach($CurrentQueue as $QueueSubArray)
			{
				if($QueueSubArray[0] != $Element)
					continue;
					
				if($QueueSubArray[4] == 'build')
					$addLevel++;
				else
					$addLevel--;
			}
			
			
			$BuildLevel					+= $addLevel;
			
			if(!$AddMode && $BuildLevel == 0)
				return;
				
			if($pricelist[$Element]['max'] < $BuildLevel)
				return;
				
			$elementTime    			= BuildFunctions::getBuildingTime($USER, $PLANET, $Element, NULL, !$AddMode, $BuildLevel);
			$BuildEndTime				= $CurrentQueue[$ActualCount - 1][3] + $elementTime;
			$CurrentQueue[]				= array($Element, $BuildLevel, $elementTime, $BuildEndTime, $BuildMode);
			$PLANET['b_building_id']	= serialize($CurrentQueue);		
		}

	
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
		global $ProdGrid, $LNG, $resource, $reslist, $CONF, $PLANET, $USER, $pricelist;
		
		$TheCommand		= HTTP::_GP('cmd', '');

		// wellformed buildURLs
		if(!empty($TheCommand) && $_SERVER['REQUEST_METHOD'] === 'POST' && $USER['urlaubs_modus'] == 0)
		{
			$Element     	= HTTP::_GP('building', 0);
			$ListID      	= HTTP::_GP('listid', 0);
			$lvlup1      	= HTTP::_GP('lvlup1', 0);
			switch($TheCommand)
			{
				case 'cancel':
					$this->CancelBuildingFromQueue();
				break;
				case 'remove':
					$this->RemoveBuildingFromQueue($ListID);
				break;
				case 'insert':
					$this->AddBuildingToQueue($Element, $lvlup1, true);
				break;
				case 'destroy':
					$this->DoAddBuildingToQueue($Element, false);
				break;
			}
			
			$this->redirectTo('game.php?page=buildings');
		}
		$premium_stage = 0;
		if($USER['premium_reward_stage'] > 0 && $USER['premium_reward_stage_days'] > TIMESTAMP){
		$premium_stage = $USER['premium_reward_stage'];
		}
		$queueData	 		= $this->getQueueData();
		$Queue	 			= $queueData['queue'];
		$QueueCount			= count($Queue);
		$CanBuildElement 	= isVacationMode($USER) || (Config::get('max_elements_build')-1) == 0 || $QueueCount < (Config::get('max_elements_build')-1) + $premium_stage;
		$CurrentMaxFields   = CalculateMaxPlanetFields($PLANET);
		
		$RoomIsOk 			= $PLANET['field_current'] < ($CurrentMaxFields - $QueueCount);
				
		$BuildEnergy		= $USER[$resource[113]];
		$BuildLevelFactor   = 10;
		$BuildTemp          = $PLANET['temp_max'];

        $BuildInfoList      = array();

		$Elements			= $reslist['allow'][$PLANET['planet_type']];
		
		foreach($Elements as $ID => $Element)
		{
			
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
				
				$peacefull_resource = 0;
				if($USER['experience_peace_level'] > 0){
				$peacefull_resource = $USER['experience_peace_level'];
				}
				$peacefull_resource	                = $peacefull_resource;	
				
				$premium_resource = 0;
				if($USER['premium_reward_extraction'] > 0 && $USER['premium_reward_extraction_days'] > TIMESTAMP){
				$premium_resource = $USER['premium_reward_extraction'];
				}
				$premium_resource	                = $premium_resource;

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
			
			$costRessources		= BuildFunctions::getElementPrice($USER, $PLANET, $Element, false, $levelToBuild);
			$costOverflow		= BuildFunctions::getRestPrice($USER, $PLANET, $Element, $costRessources);
			$elementTime    	= BuildFunctions::getBuildingTime($USER, $PLANET, $Element, $costRessources);
			$destroyRessources	= BuildFunctions::getElementPrice($USER, $PLANET, $Element, true);
			$destroyTime		= BuildFunctions::getBuildingTime($USER, $PLANET, $Element, $destroyRessources);
			$destroyOverflow	= BuildFunctions::getRestPrice($USER, $PLANET, $Element, $destroyRessources);
			$buyable			= $QueueCount != 0 || BuildFunctions::isElementBuyable($USER, $PLANET, $Element, $costRessources);

			$BuildInfoList[$Element]	= array(
				'level'				=> $PLANET[$resource[$Element]],
				'maxLevel'			=> $pricelist[$Element]['max'],
				'factor'			=> $pricelist[$Element]['factor'],
				'infoEnergy'		=> $infoEnergy,
				'costRessources'	=> $costRessources,
				'costOverflow'		=> $costOverflow,
				'elementTime'    	=> $elementTime,
				'destroyRessources'	=> $destroyRessources,
				'destroyTime'		=> $destroyTime,
				'destroyOverflow'	=> $destroyOverflow,
				'buyable'			=> $buyable,
				'levelToBuild'		=> $levelToBuild,
				'AllTech'		=> $AllTech,
				'techacc' => BuildFunctions::isTechnologieAccessible($USER, $PLANET, $Element),
			);
		}

		
		
			$this->tplObj->loadscript('buildlist.js');
		
		
		$manual_step_2 = 1;
		if($USER['training'] == 0 && $USER['training_step'] == 2 && $PLANET['solar_plant'] < 1){
		$manual_step_2 = 0;
		}
		$manual_step_2_1 = 1;
		if($USER['training'] == 0 && $PLANET['solar_plant'] >= 1 && $USER['training_step'] == 2 && ($PLANET['metal_mine'] < 3 || $PLANET['crystal_mine'] < 2 || $PLANET['deuterium_sintetizer'] < 1)){
		$manual_step_2_1 = 0;
		}
		$manual_step_2_2 = 1;
		if($USER['training'] == 0 && $USER['training_step'] == 2 && $PLANET['metal_mine'] >= 3 && $PLANET['crystal_mine'] >= 2 && $PLANET['deuterium_sintetizer'] >= 1 && $PLANET['solar_plant'] < 4){
		$manual_step_2_2 = 0;
		}
		$manual_step_2_3 = 1;
		if($USER['training'] == 0 && $USER['training_step'] == 2 && $PLANET['metal_mine'] >= 3 && $PLANET['crystal_mine'] >= 2 && $PLANET['deuterium_sintetizer'] >= 1 && $PLANET['solar_plant'] >= 4){
		$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `training_step` = '3' WHERE `id` = ".$USER['id'].";");
		$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `experience_peace` = `experience_peace` + '650' WHERE `id` = ".$USER['id'].";");
		// SEND PROBES FUNCTION HERE
		
		
		
		$rawfleetarray			= array(210 => 5);
	$fleetRessource	= array(
			901	=> 0,
			902	=> 0,
			903	=> 0,
		);
		FleetFunctions::sendFleet($rawfleetarray, '6', 1, 1, 1, 1, 1, 1, $PLANET['id_owner'], $PLANET['id'], $PLANET['galaxy'], $PLANET['system'], $PLANET['planet'], $PLANET['planet_type'], $fleetRessource, TIMESTAMP +40, TIMESTAMP+40, (TIMESTAMP + 80), 0);
		
		$manual_step_2_3 = 0;
		}
		$manual_step_5 = 1;
		if($USER['training'] == 0 && $USER['training_step'] == 5){
		$manual_step_5 = 0;
		}
		
		$manual_step_9 = 1;
		if($USER['training'] == 0 && $USER['training_step'] == 9){
		$manual_step_9 = 0;
		}
		
		$manual_step_16 = 1;
		if($USER['training'] == 0 && $USER['training_step'] == 16){
		$manual_step_16 = 0;
		}
		
		if($USER['training'] == 0 && $USER['training_step'] == 5 && $PLANET['laboratory'] >= 3){
		$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `training_step` = '6' WHERE `id` = ".$USER['id'].";");
		}
		$this->tplObj->assign_vars(array(
			'manual_step_16'		=> $manual_step_16,
			'manual_step_9'		=> $manual_step_9,
			'manual_step_2'		=> $manual_step_2,
			'manual_step_2_1'		=> $manual_step_2_1,
			'manual_step_2_2'		=> $manual_step_2_2,
			'manual_step_2_3'		=> $manual_step_2_3,
			'manual_step_5'		=> $manual_step_5,
			'BuildInfoList'		=> $BuildInfoList,
			'CanBuildElement'	=> $CanBuildElement,
			'RoomIsOk'			=> $RoomIsOk,
			'Planetas'			=> $PLANET,
			'Queue'				=> $Queue,
			'isBusy'			=> array('shipyard' => !empty($PLANET['b_hangar_id']), 'research' => $USER['b_tech_planet'] != 0),
			'HaveMissiles'		=> (bool) $PLANET[$resource[503]] + $PLANET[$resource[502]],
			'HaveMissiles'		=> (bool) $PLANET[$resource[503]] + $PLANET[$resource[502]],
			'field_used'		=> $PLANET['field_current'],
			'field_max'		=> CalculateMaxPlanetFields($PLANET),
			'field_left'		=> CalculateMaxPlanetFields($PLANET) - $PLANET['field_current'],
			'field_percent'		=> $PLANET['field_current'] * 100 / CalculateMaxPlanetFields($PLANET),
		));
			
		$this->display('page.buildings.default.tpl');
	}
}