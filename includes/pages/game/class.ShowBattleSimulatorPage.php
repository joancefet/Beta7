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
 * @info $Id: class.ShowBattleSimulatorPage.php 2640 2013-03-23 19:23:26Z slaver7 $
 * @link http://2moons.cc/
 */

class ShowBattleSimulatorPage extends AbstractPage 
{
	public static $requireModule = MODULE_SIMULATOR;

	function __construct() 
	{
		parent::__construct();
	}
	
	function MoonSim(){
	global $USER, $PLANET, $reslist, $pricelist, $LNG, $CONF;
	
	$step = 1;
	$fleetDestroyChance = '';
	$moonDestroyChance = '';
	$mondbasis = '';
	$diameter = '';
	$stars = '';
	if (!empty($_POST))
	{
	$stars	= HTTP::_GP('stars', 0);
	$mondbasis	= HTTP::_GP('mondbasis', 0);
	$diameter	= HTTP::_GP('diameter', 0);
	$step = 2;
	$fleetDestroyChance	= round(sqrt($stars) / 2);
	$moonDestroyChance	= round((100 - sqrt($diameter)) * sqrt($stars), 1);

	}
	
	
	$this->tplObj->loadscript('moonsim.js');
		//m32 after 216
		$this->tplObj->assign_vars(array(
		'fleetDestroyChance' => $fleetDestroyChance,
		'moonDestroyChance' => $moonDestroyChance,
		'mondbasis' => $mondbasis,
		'stars' => pretty_number($stars),
		'diameter' => pretty_number($diameter),
		));
		if($step == 1){
		$this->display('page.battleSimulator.moon.tpl'); 
		}else{
		$this->display('page.battleSimulator.moon1.tpl'); 
		}
	
	}
	function send()
	{
		global $USER, $PLANET, $reslist, $pricelist, $LNG, $CONF;
		
		if(!isset($_REQUEST['battleinput'])) {
			$this->sendJSON(0);
		}
		$pid			= HTTP::_GP('pid', 0);
		$targetUser		= $GLOBALS['DATABASE']->getFirstRow("SELECT * FROM ".USERS." WHERE id = ".$pid.";");
		$BattleArray	= $_REQUEST['battleinput'];
		$elements	= array(0, 0);
		foreach($BattleArray as $BattleSlotID => $BattleSlot)
		{
			if(isset($BattleSlot[0]) && (array_sum($BattleSlot[0]) > 0 || $BattleSlotID == 0))
			{
				$attacker	= array();
				$attacker['fleetDetail'] 		= array(
					'fleet_start_galaxy' => 1,
					'fleet_start_system' => 33,
					'fleet_start_planet' => 7, 
					'fleet_start_type' => 1, 
					'fleet_end_galaxy' => 1, 
					'fleet_end_system' => 33, 
					'fleet_end_planet' => 7, 
					'fleet_end_type' => 1, 
					'fleet_resource_metal' => 0,
					'fleet_resource_crystal' => 0,
					'fleet_resource_deuterium' => 0
				);
				
				$attacker['player']				= array(
					'id' => (1000 + $BattleSlotID + 1),
					'username'	=> $LNG['bs_atter'].' Nr.'.($BattleSlotID + 1),
					'military_tech' => $BattleSlot[0][109],
					'defence_tech' => $BattleSlot[0][110],
					'shield_tech' => $BattleSlot[0][111],
					'laser_tech'	=> $BattleSlot[0][120],
					'ion_tech'	=> $BattleSlot[0][121],
					'plasma_tech'	=> $BattleSlot[0][122],
					'gravity_tech'	=> $BattleSlot[0][199],
					'rpg_amiral' => $BattleSlot[0][602],
					'academy_1101' => $USER['academy_1101'],
					'academy_1102' => $USER['academy_1102'],
					'academy_1301' => $USER['academy_1301'],
					'academy_1302' => $USER['academy_1302'], 
					'academy_1103' => $BattleSlot[0][1103],
					'academy_1108' => $BattleSlot[0][1108],
					'academy_1109' => $BattleSlot[0][1109],
					'academy_1110' => $BattleSlot[0][1110],
					'academy_1111' => $BattleSlot[0][1111],
					'academy_1303' => $BattleSlot[0][1303],
					'academy_1311' => $BattleSlot[0][1311],
					'experience_combat_level' => $USER['experience_combat_level']
				); 
				
				$attacker['player']['factor']	= getFactors($attacker['player'], 'attack');
				
				foreach($BattleSlot[0] as $ID => $Count)
				{
					if(!in_array($ID, $reslist['fleet']) || $BattleSlot[0][$ID] <= 0)
					{
						unset($BattleSlot[0][$ID]);
					}
				}
				
				$attacker['unit'] 	= $BattleSlot[0];
				
				$attackers[]	= $attacker;
			}
				
			if(isset($BattleSlot[1]) && (array_sum($BattleSlot[1]) > 0 || $BattleSlotID == 0))
			{
				$defender	= array();
				$defender['fleetDetail'] 		= array(
					'fleet_start_galaxy' => 1,
					'fleet_start_system' => 33,
					'fleet_start_planet' => 7, 
					'fleet_start_type' => 1, 
					'fleet_end_galaxy' => 1, 
					'fleet_end_system' => 33, 
					'fleet_end_planet' => 7, 
					'fleet_end_type' => 1, 
					'fleet_resource_metal' => 0,
					'fleet_resource_crystal' => 0,
					'fleet_resource_deuterium' => 0
				);
				
				$defender['player']				= array(
					'id' => (2000 + $BattleSlotID + 1),
					'username'	=> $LNG['bs_deffer'].' Nr.'.($BattleSlotID + 1),
					'military_tech' => $BattleSlot[1][109],
					'defence_tech' => $BattleSlot[1][110],
					'shield_tech' => $BattleSlot[1][111],
					'laser_tech'	=> $BattleSlot[1][120],
					'ion_tech'	=> $BattleSlot[1][121],
					'plasma_tech'	=> $BattleSlot[1][122],
					'gravity_tech'	=> $BattleSlot[1][199],
					'rpg_amiral' => $BattleSlot[1][602],
					
					'academy_1101' => $targetUser['academy_1101'],
					'academy_1102' => $targetUser['academy_1102'],
					'academy_1301' => $targetUser['academy_1301'],
					'academy_1302' => $targetUser['academy_1302'], 
					
					'academy_1103' => $BattleSlot[1][1103],
					'academy_1108' => $BattleSlot[1][1108],
					'academy_1109' => $BattleSlot[1][1109],
					'academy_1110' => $BattleSlot[1][1110],
					'academy_1111' => $BattleSlot[1][1111],
					'academy_1303' => $BattleSlot[1][1303],
					'academy_1311' => $BattleSlot[1][1311],
					'experience_combat_level' => 0,
				); 
				
				$defender['player']['factor']	= getFactors($defender['player'], 'attack');
				
				foreach($BattleSlot[1] as $ID => $Count)
				{
					if((!in_array($ID, $reslist['fleet']) && !in_array($ID, $reslist['defense'])) || $BattleSlot[1][$ID] <= 0)
					{
						unset($BattleSlot[1][$ID]);
					}
				}
				
				$defender['unit'] 	= $BattleSlot[1];
				$defenders[]	= $defender;
			}
		}
		
		$LNG->includeData(array('FLEET'));
		
		require_once('includes/classes/missions/calculateAttack.php');
		require_once('includes/classes/missions/calculateSteal.php');
		require_once('includes/classes/missions/GenerateReport.php');
		
		$combatResult	= calculateAttack($attackers, $defenders, Config::get('Fleet_Cdr'), Config::get('Defs_Cdr'));
		
		if($combatResult['won'] == "a")
		{
			$stealResource = calculateSteal($attackers, array(
				'metal' => $BattleArray[0][1][1],
				'crystal' => $BattleArray[0][1][2],
				'deuterium' => $BattleArray[0][1][3]
			), true);
		}
		else
		{
			$stealResource = array(
				901 => 0,
				902 => 0,
				903 => 0
			);
		}
		
		$debris	= array();
		
		foreach(array(901, 902) as $elementID)
		{
			$debris[$elementID]			= $combatResult['debris']['attacker'][$elementID] + $combatResult['debris']['defender'][$elementID];
		}
		
		$debrisTotal		= array_sum($debris);
		
		$moonFactor			= Config::get('moon_factor');
		$maxMoonChance		= Config::get('moon_chance');
		
		$chanceCreateMoon	= round($debrisTotal / 1000000 * $moonFactor);
		$chanceCreateMoon	= min($chanceCreateMoon, $maxMoonChance);

		$raportInfo	= array(
			'thisFleet'				=> array(
				'fleet_start_galaxy'	=> 1,
				'fleet_start_system'	=> 33,
				'fleet_start_planet'	=> 7,
				'fleet_start_type'		=> 1,
				'fleet_end_galaxy'		=> 1,
				'fleet_end_system'		=> 33,
				'fleet_end_planet'		=> 7,
				'fleet_end_type'		=> 1,
				'fleet_start_time'		=> TIMESTAMP,
			),
			'debris'				=> $debris,
			'stealResource'			=> $stealResource,
			'moonChance'			=> $chanceCreateMoon,
			'moonDestroy'			=> false,
			'moonName'				=> null,
			'moonDestroyChance'		=> null,
			'moonDestroySuccess'	=> null,
			'fleetDestroyChance'	=> null,
			'fleetDestroySuccess'	=> null,
		);
		
		$sumSteal	= array_sum($stealResource);
		
		$stealResourceInformations	= sprintf($LNG['bs_derbis_raport'], 
			pretty_number(ceil($debrisTotal / $pricelist[219]['capacity'])), $LNG['tech'][219],
			pretty_number(ceil($debrisTotal / $pricelist[209]['capacity'])), $LNG['tech'][209]
		);
		
		$stealResourceInformations	.= '<br>';
		
		$stealResourceInformations	.= sprintf($LNG['bs_steal_raport'], 
			pretty_number(ceil($sumSteal / $pricelist[202]['capacity'])), $LNG['tech'][202], 
			pretty_number(ceil($sumSteal / $pricelist[203]['capacity'])), $LNG['tech'][203], 
			pretty_number(ceil($sumSteal / $pricelist[217]['capacity'])), $LNG['tech'][217]
		);

		$raportInfo	= array(
			'thisFleet'				=> array(
				'fleet_start_galaxy'	=> 1,
				'fleet_start_system'	=> 33,
				'fleet_start_planet'	=> 7,
				'fleet_start_type'		=> 1,
				'fleet_end_galaxy'		=> 1,
				'fleet_end_system'		=> 33,
				'fleet_end_planet'		=> 7,
				'fleet_end_type'		=> 1,
				'fleet_start_time'		=> TIMESTAMP,
			),
			'debris'				=> $debris,
			'stealResource'			=> $stealResource,
			'moonChance'			=> $chanceCreateMoon,
			'moonDestroy'			=> false,
			'moonName'				=> null,
			'moonDestroyChance'		=> null,
			'moonDestroySuccess'	=> null,
			'fleetDestroyChance'	=> null,
			'fleetDestroySuccess'	=> null,
			'additionalInfo'		=> $stealResourceInformations,
		);
		
		$raportData	= GenerateReport($combatResult, $raportInfo);
		
		$raportID	= md5(uniqid('', true).TIMESTAMP);
		$sqlQuery	= "INSERT INTO ".RW." SET rid = '".$raportID."', raport = '".$GLOBALS['DATABASE']->sql_escape(serialize($raportData))."', time = ".TIMESTAMP.";";
		$GLOBALS['DATABASE']->query($sqlQuery);
		
		$this->sendJSON($raportID);
	}
	
	function show()
	{
		global $USER, $PLANET, $reslist, $pricelist, $resource, $LNG, $CONF;
		
		require_once('includes/classes/class.FleetFunctions.php');
		
		$action			= HTTP::_GP('action', '');
		$Slots			= HTTP::_GP('slots', 1);
		$pid			= HTTP::_GP('pid', 0);
		
		$BattleArray	= array();
		$BattleArray[0][0][109]	= $USER[$resource[109]];
		$BattleArray[0][0][110]	= $USER[$resource[110]];
		$BattleArray[0][0][111]	= $USER[$resource[111]];
		 $BattleArray[0][0][120]	= $USER[$resource[120]];
		$BattleArray[0][0][121]	= $USER[$resource[121]];
		$BattleArray[0][0][122]	= $USER[$resource[122]];
		$BattleArray[0][0][199]	= $USER[$resource[199]]; 
		$BattleArray[0][0][602]	= $USER[$resource[602]];
		$BattleArray[0][0][1101]	= $USER['academy_1101'];
		$BattleArray[0][0][1102]	= $USER['academy_1102'];
		$BattleArray[0][0][1301]	= $USER['academy_1301'];
		$BattleArray[0][0][1302]	= $USER['academy_1302']; 
		$BattleArray[0][0][1103]	= $USER['academy_1103'];
		$BattleArray[0][0][1108]	= $USER['academy_1108'];
		$BattleArray[0][0][1109]	= $USER['academy_1109'];
		$BattleArray[0][0][1110]	= $USER['academy_1110'];
		$BattleArray[0][0][1111]	= $USER['academy_1111'];
		$BattleArray[0][0][1303]	= $USER['academy_1303'];
		$BattleArray[0][0][1311]	= $USER['academy_1311']; 
		$targetUser		= $GLOBALS['DATABASE']->getFirstRow("SELECT * FROM ".USERS." WHERE id = ".$pid.";");
		if($USER['prem_advanced_battlesim_days'] > TIMESTAMP && $pid != ''){
		$BattleArray[0][1][120]	= $targetUser[$resource[120]];
		$BattleArray[0][1][121]	= $targetUser[$resource[121]];
		$BattleArray[0][1][122]	= $targetUser[$resource[122]];
		$BattleArray[0][1][199]	= $targetUser[$resource[199]]; 
		$BattleArray[0][1][602]	= $targetUser[$resource[602]];
		$BattleArray[0][1][1101]	= $targetUser['academy_1101'];
		$BattleArray[0][1][1102]	= $targetUser['academy_1102'];
		$BattleArray[0][1][1301]	= $targetUser['academy_1301'];
		$BattleArray[0][1][1302]	= $targetUser['academy_1302']; 
		$BattleArray[0][1][1103]	= $targetUser['academy_1103'];
		$BattleArray[0][1][1108]	= $targetUser['academy_1108'];
		$BattleArray[0][1][1109]	= $targetUser['academy_1109'];
		$BattleArray[0][1][1110]	= $targetUser['academy_1110'];
		$BattleArray[0][1][1111]	= $targetUser['academy_1111'];
		$BattleArray[0][1][1303]	= $targetUser['academy_1303'];
		$BattleArray[0][1][1311]	= $targetUser['academy_1311'];
	
		}
		
		
		if(empty($_REQUEST['battleinput']))
		{
			foreach($reslist['fleet'] as $ID)
			{
				if(FleetFunctions::GetFleetMaxSpeed($ID, $USER) > 0)
				{
					// Add just flyable elements
					$BattleArray[0][0][$ID]	= $PLANET[$resource[$ID]];
				}
			}
		}
		
		if(isset($_REQUEST['battleinput']))
		{
			$BattleArray	= $_REQUEST['battleinput'];
		}
		
		if(isset($_REQUEST['im']))
		{
			foreach($_REQUEST['im'] as $ID => $Count)
			{
				$BattleArray[0][1][$ID]	= floattostring($Count);
			}
		}
		
		$this->tplObj->loadscript('battlesim.js');
		
		$this->tplObj->assign_vars(array(
			'pid'			=> $pid,
			'Slots'			=> $Slots,
			'battleinput'	=> $BattleArray,
			'fleetList'		=> array(202,203,204,205,229,209,206,207,217,215,213,211,224,219,225,226,214,216,230,227,228,222,218,221),
			'defensiveList'	=> array(401,402,403,420,405,404,406,416,421,417,418,412,410,413,422,419,414,415,407,408,409,411),
		));
		
		$this->display('page.battleSimulator.default.tpl');   
	}
}
