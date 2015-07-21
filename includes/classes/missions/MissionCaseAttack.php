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
 * @info $Id: MissionCaseAttack.php 2657 2013-03-31 12:29:08Z slaver7 $
 * @link http://2moons.cc/
 */

class MissionCaseAttack extends MissionFunctions
{
	function __construct($Fleet)
	{
		$this->_fleet	= $Fleet;
	}
	
	function TargetEvent()
	{	
		global $resource, $reslist;
		
		$fleetAttack	= array();
		$fleetDefend	= array();
		
		$userAttack		= array();
		$userDefend		= array();
		
		$stealResource	= array(
			901	=> 0,
			902	=> 0,
			903	=> 0,
		);
		
		$debris			= array();
		$planetDebris	= array();
		
		$raportInfo		= array();
		
		$debrisRessource	= array(901, 902);
		
		$messageHTML	= <<<HTML
		<div class="raportMessage">
	<table>
		<tr>
			<td colspan="2"><a href="CombatReport.php?raport=%s" onclick="starttraining20()" target="_blank"><span %s>%s %s (%s)</span></a></td>
		</tr>
		<tr>
			<td>%s</td><td><span %s>%s: %s</span>&nbsp;<span %s>%s: %s</span></td>
		</tr>
		<tr>
			<td>%s</td><td><span>%s:&nbsp;<span style="color:#a47d7a;">%s</span>&nbsp;</span><span>%s:&nbsp;<span style="color:#5ca6aa;">%s</span>&nbsp;</span><span>%s:&nbsp;<span style="color:#339966;">%s</span></span></td>
		</tr>
		<tr>
			<td>%s</td><td><span>%s:&nbsp;<span style="color:#a47d7a;">%s</font>&nbsp;</span><span>%s:&nbsp;<span style="color:#5ca6aa;">%s</span></span></td>
		</tr>
	</table>
</div>
HTML;
		//Minize HTML
		$messageHTML	= str_replace(array("\n", "\t", "\r"), "", $messageHTML);
		
		$targetPlanet 	= $GLOBALS['DATABASE']->getFirstRow("SELECT * FROM ".PLANETS." WHERE id = '".$this->_fleet['fleet_end_id']."';");
		$targetUser   	= $GLOBALS['DATABASE']->getFirstRow("SELECT * FROM ".USERS." WHERE id = '".$targetPlanet['id_owner']."';");
		
		$targetUser['factor']	= getFactors($targetUser, 'basic', $this->_fleet['fleet_start_time']);
		$planetUpdater	= new ResourceUpdate();
		
		list($targetUser, $targetPlanet)	= $planetUpdater->CalcResource($targetUser, $targetPlanet, true, $this->_fleet['fleet_start_time']);
		
		if($this->_fleet['fleet_group'] != 0)
		{
			$GLOBALS['DATABASE']->query("DELETE FROM ".AKS." WHERE id = '".$this->_fleet['fleet_group']."';");
			$incomingFleetsResult = $GLOBALS['DATABASE']->query("SELECT * FROM ".FLEETS." WHERE fleet_group = '".$this->_fleet['fleet_group']."';");
		
			while ($incomingFleetsRow = $GLOBALS['DATABASE']->fetch_array($incomingFleetsResult))
			{
				$incomingFleets[$incomingFleetsRow['fleet_id']] = $incomingFleetsRow;
			}
			
			$GLOBALS['DATABASE']->free_result($incomingFleetsResult);
		}
		else
		{
			$incomingFleets = array($this->_fleet['fleet_id'] => $this->_fleet);
		}
		
		foreach($incomingFleets as $fleetID => $fleetDetail)
		{
			$fleetAttack[$fleetID]['fleetDetail']		= $fleetDetail;
			$fleetAttack[$fleetID]['player']			= $GLOBALS['DATABASE']->getFirstRow("SELECT * FROM ".USERS." WHERE id = '".$fleetDetail['fleet_owner']."';");
			$fleetAttack[$fleetID]['player']['factor']	= getFactors($fleetAttack[$fleetID]['player'], 'attack', $this->_fleet['fleet_start_time']);
			$fleetAttack[$fleetID]['unit']				= fleetAmountToArray($fleetDetail['fleet_array']);
			
			$userAttack[$fleetAttack[$fleetID]['player']['id']]	= $fleetAttack[$fleetID]['player']['username'];
		}
				
		$targetFleetsResult = $GLOBALS['DATABASE']->query("SELECT * FROM ".FLEETS." WHERE fleet_mission = '5' AND fleet_end_id = '".$this->_fleet['fleet_end_id']."' AND fleet_start_time <= '".TIMESTAMP."' AND fleet_end_stay >= '".TIMESTAMP."';");
		while ($fleetDetail = $GLOBALS['DATABASE']->fetch_array($targetFleetsResult))
		{
			$fleetID	= $fleetDetail['fleet_id'];
			
			$fleetDefend[$fleetID]['fleetDetail']		= $fleetDetail;
			$fleetDefend[$fleetID]['player']			= $GLOBALS['DATABASE']->getFirstRow("SELECT * FROM ".USERS." WHERE id = '".$fleetDetail['fleet_owner']."';");
			$fleetDefend[$fleetID]['player']['factor']	= getFactors($fleetDefend[$fleetID]['player'], 'attack', $this->_fleet['fleet_start_time']);
			$fleetDefend[$fleetID]['unit']				= fleetAmountToArray($fleetDetail['fleet_array']);
			
			$userDefend[$fleetDefend[$fleetID]['player']['id']]	= $fleetDefend[$fleetID]['player']['username'];
		}
			
		$GLOBALS['DATABASE']->free_result($targetFleetsResult);
		
		$fleetDefend[0]['player']			= $targetUser;
		$fleetDefend[0]['player']['factor']	= getFactors($fleetDefend[0]['player'], 'attack', $this->_fleet['fleet_start_time']);
		$fleetDefend[0]['fleetDetail']		= array(
			'fleet_start_galaxy'	=> $targetPlanet['galaxy'], 
			'fleet_start_system'	=> $targetPlanet['system'], 
			'fleet_start_planet'	=> $targetPlanet['planet'], 
			'fleet_start_type'		=> $targetPlanet['planet_type'], 
		);
		
		$fleetDefend[0]['unit']				= array();
		
		foreach(array_merge($reslist['fleet'], $reslist['defense']) as $elementID)
		{
			if (empty($targetPlanet[$resource[$elementID]])) continue;

			$fleetDefend[0]['unit'][$elementID] = $targetPlanet[$resource[$elementID]];
		}
			
		$userDefend[$fleetDefend[0]['player']['id']]	= $fleetDefend[0]['player']['username'];
		
		require_once('calculateAttack.php');
		
		$fleetIntoDebris	= $GLOBALS['CONFIG'][$this->_fleet['fleet_universe']]['Fleet_Cdr'];
		$defIntoDebris		= $GLOBALS['CONFIG'][$this->_fleet['fleet_universe']]['Defs_Cdr'];
		
		$combatResult 		= calculateAttack($fleetAttack, $fleetDefend, $fleetIntoDebris, $defIntoDebris);
		
		$sqlQuery			= "";
		
		foreach ($fleetAttack as $fleetID => $fleetDetail)
		{
			$fleetArray = '';
			$totalCount = 0;
			
			$fleetDetail['unit']	= array_filter($fleetDetail['unit']);
			foreach ($fleetDetail['unit'] as $elementID => $amount)
			{				
				$fleetArray .= $elementID.','.floattostring($amount).';';
				$totalCount += $amount;
			}
			
			if($totalCount == 0)
			{
				if($this->_fleet['fleet_id'] == $fleetID)
				{
					$this->KillFleet();
				}
				else
				{
					$sqlQuery .= "DELETE FROM ".FLEETS." WHERE fleet_id = ".$fleetID.";";
					$sqlQuery .= "DELETE FROM ".FLEETS_EVENT." WHERE fleetID = ".$fleetID.";";
				}
				
				$sqlQuery .= "UPDATE ".LOG_FLEETS." SET fleet_state = 2 WHERE fleet_id = '".$fleetID."';";
			}
			elseif($totalCount > 0)
			{
				$sqlQuery .= "UPDATE ".FLEETS." SET fleet_array = '".substr($fleetArray, 0, -1)."', fleet_amount = '".$totalCount."' WHERE fleet_id = '".$fleetID."';";
				$sqlQuery .= "UPDATE ".LOG_FLEETS." SET fleet_array = '".substr($fleetArray, 0, -1)."', fleet_amount = '".$totalCount."', fleet_state = 1 WHERE fleet_id = '".$fleetID."';";
			}
			else
			{
				throw new Exception("Negative Fleet amount ....");
			}
		}
		
		foreach ($fleetDefend as $fleetID => $fleetDetail)
		{
			if($fleetID != 0)
			{
				$fleetArray = '';
				$totalCount = 0;
				
				$fleetDetail['unit']	= array_filter($fleetDetail['unit']);
				
				foreach ($fleetDetail['unit'] as $elementID => $amount)
				{				
					$fleetArray .= $elementID.','.floattostring($amount).';';
					$totalCount += $amount;
				}
				
				if($totalCount == 0)
				{
					$sqlQuery .= "DELETE FROM ".FLEETS." WHERE fleet_id = ".$fleetID.";";
					$sqlQuery .= "DELETE FROM ".FLEETS_EVENT." WHERE fleetID = ".$fleetID.";";
					$sqlQuery .= "UPDATE ".LOG_FLEETS." SET fleet_state = 2 WHERE fleet_id = '".$fleetID."';";
				}
				elseif($totalCount > 0)
				{
					$sqlQuery .= "UPDATE ".FLEETS." SET fleet_array = '".substr($fleetArray, 0, -1)."', fleet_amount = '".$totalCount."' WHERE fleet_id = '".$fleetID."';";
					$sqlQuery .= "UPDATE ".LOG_FLEETS." SET fleet_array = '".substr($fleetArray, 0, -1)."', fleet_amount = '".$totalCount."', fleet_state = 1 WHERE fleet_id = '".$fleetID."';";
				}
				else
				{
					throw new Exception("Negative Fleet amount ....");
				}
			}
			else
			{
				$fleetArray = array();
				foreach ($fleetDetail['unit'] as $elementID => $amount)
				{				
					$fleetArray[] = $resource[$elementID]." = ".$amount;
				}
				
				if(!empty($fleetArray))
				{
					$sqlQuery .= "UPDATE ".PLANETS." SET ".implode(', ', $fleetArray)." WHERE id = '".$this->_fleet['fleet_end_id']."';";
				}
			}
		}
		
		$GLOBALS['DATABASE']->multi_query($sqlQuery);
		
		if ($combatResult['won'] == "a")
		{
			require_once('calculateSteal.php');
			$stealResource = calculateSteal($fleetAttack, $targetPlanet);
		}
		
		if($this->_fleet['fleet_end_type'] == 3)
		{
			// Use planet debris, if attack on moons
			$targetPlanet 		= array_merge(
				$targetPlanet,
				$GLOBALS['DATABASE']->getFirstRow("SELECT der_metal, der_crystal FROM ".PLANETS." WHERE id_luna = ".$this->_fleet['fleet_end_id'].";")
			);
		}
		
		foreach($debrisRessource as $elementID)
		{
			$debris[$elementID]			= $combatResult['debris']['attacker'][$elementID] + $combatResult['debris']['defender'][$elementID];
			$planetDebris[$elementID]	= $targetPlanet['der_'.$resource[$elementID]] + $debris[$elementID];
		}
		
		$debrisTotal		= array_sum($debris);
		
		$moonFactor			= $GLOBALS['CONFIG'][$this->_fleet['fleet_universe']]['moon_factor'];
		$maxMoonChance		= $GLOBALS['CONFIG'][$this->_fleet['fleet_universe']]['moon_chance'];
		
		if($targetPlanet['id_luna'] == 0 && $targetPlanet['planet_type'] == 1)
		{
			$chanceCreateMoon	= round($debrisTotal / 1000000 * $moonFactor);
			$chanceCreateMoon	= min($chanceCreateMoon, $maxMoonChance);
		}
		else
		{
			$chanceCreateMoon	= 0;
		}

		$raportInfo	= array(
			'thisFleet'				=> $this->_fleet,
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
		
		$randChance	= mt_rand(1, 100);
		if ($randChance <= $chanceCreateMoon + ($chanceCreateMoon / 100 * 35))
		{		
			require_once('includes/functions/CreateOneMoonRecord.php');
			
			$LNG					= $this->getLanguage($targetUser['lang']);
			$raportInfo['moonName']	= $LNG['type_planet'][3];
			
			CreateOneMoonRecord(
				$this->_fleet['fleet_end_galaxy'],
				$this->_fleet['fleet_end_system'],
				$this->_fleet['fleet_end_planet'],
				$this->_fleet['fleet_universe'],
				$targetUser['id'],
				$raportInfo['moonName'],
				$chanceCreateMoon,
				$this->_fleet['fleet_start_time']
			);
			
			if($GLOBALS['CONFIG'][$this->_fleet['fleet_universe']]['debris_moon'] == 1)
			{
				foreach($debrisRessource as $elementID)
				{
					$planetDebris[$elementID]	= 0;
				}
			}
			
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET moon_creation = moon_creation + '1' WHERE id = ".$this->_fleet['fleet_owner'].";");
			$INFOR = $GLOBALS['DATABASE']->query("SELECT * FROM `uni1_users` WHERE id = ".$this->_fleet['fleet_owner'].";");
			if($GLOBALS['DATABASE']->numRows($INFOR) > 0){
			while ($xkf = mysqli_fetch_assoc($INFOR)) {
			$ACTUA =  $xkf['moon_creation'];
			$ACTUAL =  (3 * $xkf['achievements_misc_moons']) + 3;
			$moons_lvl =  $xkf['achievements_misc_moons'] + 1;
			$moons_reward_points = 50;
			$moons_reward_am = 50;
			$moons_reward_points = $moons_reward_points + ($xkf['achievements_misc_moons'] * $moons_reward_points);
			$moons_reward_am = $moons_reward_am + ($xkf['achievements_misc_moons'] * $moons_reward_am);
			}
			if($ACTUA == $ACTUAL){
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET achievements_misc_moons = achievements_misc_moons + '1', antimatter = antimatter + ".$moons_reward_am." WHERE id = ".$this->_fleet['fleet_owner'].";");
			$msg = '<img alt="" style="float:left; width:60px; margin-right:6px;" src="styles/images/achiev/ach_creation_moons.png">reached: <span class="achiev_mes_head">moons lvl. '.$moons_lvl.'</span><br> received:<br> '.$moons_reward_am.' antimatter <br> '.$moons_reward_points.' achievement points';
			SendSimpleMessage($this->_fleet['fleet_owner'], '', TIMESTAMP, 4, 'System', 'Achievements', $msg);
			}
			}
		}
		
		require_once('GenerateReport.php');
		$raportData	= GenerateReport($combatResult, $raportInfo);
		
		$who_won = 0;
		if($combatResult['won'] == 'a'){
		$who_won = $this->_fleet['fleet_owner'];
		}elseif($combatResult['won'] == 'r'){
		$who_won = $this->_fleet['fleet_target_owner'];
		}elseif($combatResult['won'] == 'w'){
		$who_won = 1;
		}

		$search_hit = $GLOBALS['DATABASE']->query("SELECT * FROM `uni1_topkb` ORDER by units DESC LIMIT 1 ;");
		if($GLOBALS['DATABASE']->numRows($search_hit)>0 ){
		$hit = $GLOBALS['DATABASE']->fetch_array($search_hit);
		$units = $hit['units'];
		$total_hit = $combatResult['unitLost']['attacker'] + $combatResult['unitLost']['defender'];
		if($units < $total_hit){
		$GLOBALS['DATABASE']->query("UPDATE ".USERS." set `antimatter` = `antimatter` + '1000' where `id` = '".$who_won."';");
		$msg = 'Congratulations, you are rewarded with 1.000 antimatter for the new top 1 hit.';
		SendSimpleMessage($who_won, '', TIMESTAMP, 4, 'System', 'Top hof', $msg);
		}
		}
		
		// $allyInfo = $GLOBALS['DATABASE']->query("SELECT CombatExp FROM `uni1_alliance` WHERE id = ".$fleetAttack[$fleetID]['player']['ally_id'].";");
		// $allyInfo  = $GLOBALS['DATABASE']->fetch_array($allyInfo);
		// $xx = $allyInfo['CombatExp'];
		// if($GLOBALS['DATABASE']->numRows($allyInfo==0){
		// $xx = 0;
		// }
		
		$search_b = $GLOBALS['DATABASE']->query("SELECT * FROM `uni1_users` where `id` = ".$this->_fleet['fleet_owner']." ;");	
		$f = $GLOBALS['DATABASE']->fetch_array($search_b);		
		$premium_combate = 0;		
		if($f['prem_batle_leveling'] > 0 && $f['prem_batle_leveling_days'] > TIMESTAMP){		
		$premium_combate = $f['prem_batle_leveling'];		
		}
		if($GLOBALS['DATABASE']->numRows($search_b)>0){
		
		$combat_points = round(($debris[901] + $debris[902]) / ((100000000 * $f['experience_combat_level']) + 100000000));
		$maximum_points = 0;
		if($combat_points + ($combat_points / 100 * $premium_combate) >= 50000){
		$maximum_points = 50000 ;
		}else{
		$maximum_points = $combat_points + ($combat_points / 100 * $premium_combate);
		//$maximum_points = $maximum_points + ($maximum_points / 100 * $xx);
		}
		
		if($maximum_points >= 1){
		$GLOBALS['DATABASE']->query("UPDATE ".USERS." set `experience_combat` = `experience_combat` + ".$maximum_points." where `id` = '".$this->_fleet['fleet_owner']."';
		");
        }
        } 
		$INFOR = $GLOBALS['DATABASE']->query("SELECT * FROM `uni1_users` WHERE id = ".$this->_fleet['fleet_owner'].";");
        if($GLOBALS['DATABASE']->numRows($INFOR) > 0){
		while ($xkf = mysqli_fetch_assoc($INFOR)) {
        $ACTUA =  $xkf['experience_combat'];
        $ally =  $xkf['ally_id'];
        $ACTUAL =  $xkf['experience_combat_max'];
		$NEWEP =  $xkf['experience_combat'] - $xkf['experience_combat_max'];
		$NEWEPMAX =  $xkf['experience_combat_max'] + ($xkf['experience_combat_max'] / 5 * $xkf['experience_combat_level']);
		}
		if($ACTUA >= $ACTUAL){
		$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET experience_combat = ".$NEWEP.", experience_combat_max = ".$NEWEPMAX.", experience_combat_level = experience_combat_level + 1 WHERE id = ".$this->_fleet['fleet_owner'].";");
		}
	
		if($ally != 0 && $targetUser['ally_id'] != 0 && $ally != $targetUser['ally_id']){
		$alliance_points = round(($debris[901] + $debris[902]) / 100000000);
		//$allyInfo = $GLOBALS['DATABASE']->query("SELECT GetAlliancePoints FROM `uni1_alliance` WHERE id = ".$fleetAttack[$fleetID]['player']['ally_id'].";");
		//$allyInfo  = $GLOBALS['DATABASE']->fetch_array($allyInfo);
		$maximum_points = 0;
		if($alliance_points >= 40){
		$maximum_points = 40;
		}else{
		$maximum_points = $alliance_points ;
		}
		$GLOBALS['DATABASE']->query("UPDATE ".ALLIANCE." SET alliance_points = alliance_points + '".$maximum_points."' WHERE id = ".$ally.";");
		}
		
		
        }
		
		switch($combatResult['won'])
		{
			case "a":
				$attackStatus	= 'wons';
				$defendStatus	= 'loos';
				$attackClass	= 'style="color:green;"';
				$defendClass	= 'style="color:red;"';
			break;
			case "w":
				$attackStatus	= 'draws';
				$defendStatus	= 'draws';
				$attackClass	= 'style="color:orange;"';
				$defendClass	= 'style="color:orange;"';
			break;
			case "r":
				$attackStatus	= 'loos';
				$defendStatus	= 'wons';
				$attackClass	= 'style="color:red;"';
				$defendClass	= 'style="color:green;"';
			break;
		}
		
		$raportID	= md5(uniqid('', true).TIMESTAMP);
		
		$sqlQuery	= "INSERT INTO ".RW." SET 
		rid = '".$raportID."',
		raport = '".serialize($raportData)."',
		time = '".$this->_fleet['fleet_start_time']."',
		attacker = '".implode(',', array_keys($userAttack))."',
		defender = '".implode(',', array_keys($userDefend))."';";
		$GLOBALS['DATABASE']->query($sqlQuery);
		
		$sqlQuery		= "";
		foreach($userAttack as $userID => $userName)
		{
			$LNG		= $this->getLanguage(NULL, $userID);
			
			$message	= sprintf($messageHTML,
				$raportID,
				$attackClass,
				$LNG['sys_mess_attack_report'],
				sprintf(
					$LNG['sys_adress_planet'],
					$this->_fleet['fleet_start_galaxy'],
					$this->_fleet['fleet_start_system'],
					$this->_fleet['fleet_start_planet'],
					$this->_fleet['fleet_end_galaxy'],
					$this->_fleet['fleet_end_system'],
					$this->_fleet['fleet_end_planet']
				),
				$LNG['type_planet_short'][$this->_fleet['fleet_end_type']],
				$LNG['sys_lost'],
				$attackClass,
				$LNG['sys_attack_attacker_pos'],
				pretty_number($combatResult['unitLost']['attacker']),
				$defendClass,
				$LNG['sys_attack_defender_pos'],
				pretty_number($combatResult['unitLost']['defender']),
				$LNG['sys_gain'],
				$LNG['tech'][901],
				pretty_number($stealResource[901]),
				$LNG['tech'][902],
				pretty_number($stealResource[902]),
				$LNG['tech'][903],
				pretty_number($stealResource[903]),
				$LNG['sys_debris'],
				$LNG['tech'][901],
				pretty_number($debris[901]), 
				$LNG['tech'][902],
				pretty_number($debris[902])
			);
				
			SendSimpleMessage($userID, 0, $this->_fleet['fleet_start_time'], 3, $LNG['sys_mess_tower'], $LNG['sys_mess_attack_report'], $message);
			
			$sqlQuery	.= "INSERT INTO ".TOPKB_USERS." SET ";
			$sqlQuery	.= "rid = '".$raportID."', ";
			$sqlQuery	.= "role = 1, ";
			$sqlQuery	.= "username = '".$GLOBALS['DATABASE']->escape($userName)."', ";
			$sqlQuery	.= "uid = ".$userID.";";
		}
		
		
		foreach($userDefend as $userID => $userName)
		{
			$LNG		= $this->getLanguage(NULL, $userID);
			
			$message	= sprintf($messageHTML,
				$raportID,
				$defendClass,
				$LNG['sys_mess_attack_report'],
				sprintf(
					$LNG['sys_adress_planet'],
					$this->_fleet['fleet_start_galaxy'],
					$this->_fleet['fleet_start_system'],
					$this->_fleet['fleet_start_planet'],
					$this->_fleet['fleet_end_galaxy'],
					$this->_fleet['fleet_end_system'],
					$this->_fleet['fleet_end_planet']
				),
				$LNG['type_planet_short'][$this->_fleet['fleet_end_type']],
				$LNG['sys_lost'],
				$defendClass,
				$LNG['sys_attack_attacker_pos'],
				pretty_number($combatResult['unitLost']['attacker']),
				$attackClass,
				$LNG['sys_attack_defender_pos'],
				pretty_number($combatResult['unitLost']['defender']),
				$LNG['sys_gain'],
				$LNG['tech'][901],
				pretty_number($stealResource[901]),
				$LNG['tech'][902],
				pretty_number($stealResource[902]),
				$LNG['tech'][903],
				pretty_number($stealResource[903]),
				$LNG['sys_debris'],
				$LNG['tech'][901],
				pretty_number($debris[901]), 
				$LNG['tech'][902],
				pretty_number($debris[902])
			);
				
			SendSimpleMessage($userID, 0, $this->_fleet['fleet_start_time'], 3, $LNG['sys_mess_tower'], $LNG['sys_mess_attack_report'], $message);
			
			$sqlQuery	.= "INSERT INTO ".TOPKB_USERS." SET ";
			$sqlQuery	.= "rid = '".$raportID."', ";
			$sqlQuery	.= "role = 2, ";
			$sqlQuery	.= "username = '".$GLOBALS['DATABASE']->escape($userName)."', ";
			$sqlQuery	.= "uid = ".$userID.";";
		}
		
		if($this->_fleet['fleet_end_type'] == 3)
		{
			$debrisType	= 'id_luna';
		}
		else
		{
			$debrisType	= 'id';
		}
		
		$sqlQuery	.= "UPDATE ".PLANETS." SET
						der_metal = ".$planetDebris[901].",
						der_crystal = ".$planetDebris[902]."
						WHERE
						".$debrisType." = ".$this->_fleet['fleet_end_id'].";
						UPDATE ".PLANETS." SET
						metal = metal - ".$stealResource[901].",
						crystal = crystal - ".$stealResource[902].",
						deuterium = deuterium - ".$stealResource[903]."
						WHERE
						id = ".$this->_fleet['fleet_end_id'].";
						INSERT INTO ".TOPKB." SET
						units = ".($combatResult['unitLost']['attacker'] + $combatResult['unitLost']['defender']).",
						rid = '".$raportID."',
						time = ".$this->_fleet['fleet_start_time'].",
						universe = ".$this->_fleet['fleet_universe'].",
						result = '".$combatResult['won'] ."';
						UPDATE ".USERS." SET
						".$attackStatus." = ".$attackStatus." + 1,
						kbmetal = kbmetal + ".$debris[901].",
						kbcrystal = kbcrystal + ".$debris[902].",
						lostunits = lostunits + ".$combatResult['unitLost']['attacker'].",
						desunits = desunits + ".$combatResult['unitLost']['defender']."
						WHERE
						id IN (".implode(',', array_keys($userAttack)).");
						UPDATE ".USERS." SET
						".$defendStatus." = ".$defendStatus." + 1,
						kbmetal = kbmetal + ".$debris[901].",
						kbcrystal = kbcrystal + ".$debris[902].",
						lostunits = lostunits + ".$combatResult['unitLost']['defender'].",
						desunits = desunits + ".$combatResult['unitLost']['attacker']."
						WHERE
						id IN (".implode(',', array_keys($userDefend)).");";
						
		$GLOBALS['DATABASE']->multi_query($sqlQuery);
		
		if($attackStatus == 'wons'){
		$GLOBALS['DATABASE']->query("UPDATE ".USERS." set `achievements_attack` = `achievements_attack` + '1' where `id` = '".$this->_fleet['fleet_owner']."';");
		}
		
	
		
		$INFOR = $GLOBALS['DATABASE']->query("SELECT * FROM `uni1_users` WHERE id = ".$this->_fleet['fleet_owner'].";");
        if($GLOBALS['DATABASE']->numRows($INFOR) > 0){
		while ($xkf = mysqli_fetch_assoc($INFOR)) {
        $ACTUA =  $xkf['wons'];
        $ACTUAL =  (50 * $xkf['achievements_misc_fighter']) + 50;
        $fighter_lvl =  $xkf['achievements_misc_fighter'] +1;
		$fighter_reward_points = 15;
		$fighter_reward_am = 15;
		$fighter_reward_points = $fighter_reward_points + ($xkf['achievements_misc_fighter'] * $fighter_reward_points);
		$fighter_reward_am = $fighter_reward_am + ($xkf['achievements_misc_fighter'] * $fighter_reward_am);
		}
		if($ACTUA == $ACTUAL){
		$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET achievements_misc_fighter = achievements_misc_fighter + '1', antimatter = antimatter + ".$fighter_reward_am." WHERE id = ".$this->_fleet['fleet_owner'].";");
		$msg = '<img alt="" style="float:left; width:60px; margin-right:6px;" src="styles/images/achiev/ach_wons.png">reached: <span class="achiev_mes_head">fighter lvl. '.$fighter_lvl.'</span><br> received:<br> '.$fighter_reward_am.' antimatter <br> '.$fighter_reward_points.' achievement points';
		SendSimpleMessage($this->_fleet['fleet_owner'], '', TIMESTAMP, 4, 'System', 'Achievements', $msg);
		}
        }
		
		$this->setState(FLEET_RETURN);
		$this->SaveFleet();
	}
	
	function EndStayEvent()
	{
		return;
	}
	
	function ReturnEvent()
	{
		$LNG		= $this->getLanguage(NULL, $this->_fleet['fleet_owner']);
		$TargetName	= $GLOBALS['DATABASE']->getFirstCell("SELECT name FROM ".PLANETS." WHERE id = ".$this->_fleet['fleet_start_id'].";");
		$Message	= sprintf( $LNG['sys_fleet_won'], $TargetName, GetTargetAdressLink($this->_fleet, ''), pretty_number($this->_fleet['fleet_resource_metal']), $LNG['tech'][901], pretty_number($this->_fleet['fleet_resource_crystal']), $LNG['tech'][902], pretty_number($this->_fleet['fleet_resource_deuterium']), $LNG['tech'][903]);

		SendSimpleMessage($this->_fleet['fleet_owner'], 0, $this->_fleet['fleet_end_time'], 3, $LNG['sys_mess_tower'], $LNG['sys_mess_fleetback'], $Message);
			
		$this->RestoreFleet();
	}
}
	