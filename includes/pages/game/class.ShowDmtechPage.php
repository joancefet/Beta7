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

class ShowDmtechPage extends AbstractPage
{	
	public static $requireModule = MODULE_BUILDING;

	function __construct() 
	{
		parent::__construct();
	}


	private function CheckLabSettingsInQueue()
	{
		global $PLANET, $CONF;
		if ($PLANET['b_building'] == 0)
			return true;
			
		$CurrentQueue		= unserialize($PLANET['b_building_id']);
		foreach($CurrentQueue as $ListIDArray) {
			if($ListIDArray[0] == 6 || $ListIDArray[0] == 31)
				return false;
		}

		return true;
	}
	
	private function AddBuildingToQueue($Element, $AddMode = true)
	{
		global $PLANET, $USER, $resource, $CONF, $reslist, $pricelist;

		if(!in_array($Element, $reslist['tech'])
			|| !BuildFunctions::isTechnologieAccessible($USER, $PLANET, $Element)
			|| !$this->CheckLabSettingsInQueue($PLANET)
		)
			return;
			
		$CurrentQueue  		= unserialize($USER['b_tech_queue']);
		
		if (!empty($CurrentQueue)) {
			$ActualCount   	= count($CurrentQueue);
		} else {
			$CurrentQueue  	= array();
			$ActualCount   	= 0;
		}
		
		
			
			$BuildLevel					= $USER[$resource[$Element]] + 1;
		
			if($pricelist[$Element]['max'] < $BuildLevel)
			return;
				
			$costRessources		= max(1,($pricelist[$Element]['cost']['901'] + $pricelist[$Element]['cost']['902']*2 + $pricelist[$Element]['cost']['903']*4) *pow($pricelist[$Element]['factor'], $USER[$resource[$Element]])/2500);
			
			if($USER['darkmatter'] < $costRessources)
			return;

			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET ".$resource[$Element]." = ".$resource[$Element]." + 1 WHERE id = '".$USER['id']."';");
			$USER[$resource[921]]		-= $costRessources; 
	}

	private function getQueueData()
	{
		global $LNG, $CONF, $PLANET, $USER;

		$scriptData		= array();
		$quickinfo		= array();
		
		if ($USER['b_tech'] == 0)
		return array('queue' => $scriptData, 'quickinfo' => $quickinfo);
		
		$CurrentQueue   = unserialize($USER['b_tech_queue']);
		
		foreach($CurrentQueue as $BuildArray) {
			if ($BuildArray[3] < TIMESTAMP)
				continue;
			
			$PlanetName	= '';
		
			$quickinfo[$BuildArray[0]]	= $BuildArray[1];
			
			if($BuildArray[4] != $PLANET['id'])
				$PlanetName		= $USER['PLANETS'][$BuildArray[4]]['name'];
				
			$scriptData[] = array(
				'element'	=> $BuildArray[0], 
				'level' 	=> $BuildArray[1], 
				'time' 		=> $BuildArray[2], 
				'resttime' 	=> ($BuildArray[3] - TIMESTAMP), 
				'destroy' 	=> ($BuildArray[4] == 'destroy'), 
				'endtime' 	=> _date('U', $BuildArray[3], $USER['timezone']),
				'display' 	=> _date($LNG['php_tdformat'], $BuildArray[3], $USER['timezone']),
				'planet'	=> $PlanetName,
			);
		}
		
		return array('queue' => $scriptData, 'quickinfo' => $quickinfo);
	}

	public function show()
	{
		global $PLANET, $USER, $UNI, $LNG, $resource, $reslist, $CONF, $pricelist;


		if($CONF['dmenabled'] == 0){
			$this->printMessage("This add-on is disabled", true, array('game.php?page=overview', 2));
			die;
		}
		 
		if ($PLANET[$resource[31]] == 0)
		{
			$this->printMessage($LNG['bd_lab_required']);
		}
			
		$TheCommand		= HTTP::_GP('cmd','');
		$Element     	= HTTP::_GP('tech', 0);
		$ListID     	= HTTP::_GP('listid', 0);
		
		$PLANET[$resource[31].'_inter']	= ResourceUpdate::getNetworkLevel($USER, $PLANET);	

		if(!empty($TheCommand) && $_SERVER['REQUEST_METHOD'] === 'POST' && $USER['urlaubs_modus'] == 0)
		{
			switch($TheCommand)
			{
				case 'insert':
					$this->AddBuildingToQueue($Element, true);
				break;
			}
			
			$this->redirectTo('game.php?page=dmtech');
		}
		
		$bContinue		= $this->CheckLabSettingsInQueue($PLANET);
		
		$queueData		= $this->getQueueData();
		$TechQueue		= $queueData['queue'];
		$QueueCount		= count($TechQueue);
		$ResearchList	= array();

		
		$Elements			= array(106,108,109,110,111,113,114,115,117,118,120,121,122,123,124,131,132,133);
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
			
				
			if(isset($queueData['quickinfo'][$Element]))
			{
				$levelToBuild	= $queueData['quickinfo'][$Element];
			}
			else
			{
				$levelToBuild	= $USER[$resource[$Element]];
			}
			
			$costRessources		= max(1,($pricelist[$Element]['cost']['901'] + $pricelist[$Element]['cost']['902']*2 + $pricelist[$Element]['cost']['903']*4) *pow($pricelist[$Element]['factor'], $USER[$resource[$Element]])/2500);
			
			$elementTime    	= 0;

			$ResearchList[$Element]	= array(
				'id'				=> $Element,
				'level'				=> $USER[$resource[$Element]],
				'maxLevel'			=> $pricelist[$Element]['max'],
				'costRessources'	=> pretty_number($costRessources),
				'levelToBuild'		=> $levelToBuild,
				'techacc' => BuildFunctions::isTechnologieAccessible($USER, $PLANET, $Element),
				'AllTech'		=> $AllTech,
			);
		}
		
		
		$premium_stage = 0;
		if($USER['premium_reward_stage'] > 0 && $USER['premium_reward_days'] > TIMESTAMP){
		$premium_stage = $USER['premium_reward_stage'];
		}
		$this->tplObj->assign_vars(array(
			'ResearchList'	=> $ResearchList,
			'IsLabinBuild'	=> !$bContinue,
			'IsFullQueue'	=> Config::get('max_elements_tech') == 0 || Config::get('max_elements_tech') + $premium_stage == count($TechQueue),
			'Queue'			=> $TechQueue,
		));
		
		$this->display('page.dmtech.default.tpl');
	}
}