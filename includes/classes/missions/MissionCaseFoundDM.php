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
 * @info $Id: MissionCaseFoundDM.php 2632 2013-03-18 19:05:14Z slaver7 $
 * @link http://2moons.cc/
 */

class MissionCaseFoundDM extends MissionFunctions
{
	const CHANCE = 30; 
	const CHANCE_SHIP = 0.25; 
	const MIN_FOUND = 13289; 
	const MAX_FOUND = 52148; 
	const MAX_CHANCE = 15; 
		
	function __construct($Fleet)
	{
		$this->_fleet	= $Fleet;
	}
	
	function TargetEvent()
	{
		$this->setState(FLEET_HOLD);
		$this->SaveFleet();
	}
	
	function EndStayEvent()
	{
		$LNG	= $this->getLanguage(NULL, $this->_fleet['fleet_owner']);
		$chance	= mt_rand(0, 100);
		if($chance <= min(self::MAX_CHANCE, (self::CHANCE + $this->_fleet['fleet_amount'] * self::CHANCE_SHIP))) {
			$FoundDark 	= mt_rand(self::MIN_FOUND, self::MAX_FOUND);
			$this->UpdateFleet('fleet_resource_darkmatter', $FoundDark);
			$Message 	= $LNG['sys_expe_found_dm_'.mt_rand(1, 3).'_'.mt_rand(1, 2).''];
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." set `found_dm` = `found_dm` + ".$FoundDark." where `id` = '".$this->_fleet['fleet_owner']."';");
			$INFOR = $GLOBALS['DATABASE']->query("SELECT * FROM `uni1_users` WHERE id = ".$this->_fleet['fleet_owner'].";");
			if($GLOBALS['DATABASE']->numRows($INFOR) > 0){
			while ($xkf = mysqli_fetch_assoc($INFOR)) {
			$ACTUA =  $xkf['found_dm'];
			$ACTUAL =  (50000 * $xkf['achievements_misc_seeker']) + 50000;
			$expe_lvl =  $xkf['achievements_misc_seeker'] +1;
			$seeker_reward_points = 20;
			$seeker_reward_am = 20;
			$seeker_reward_points = $seeker_reward_points + ($xkf['achievements_misc_seeker'] * $seeker_reward_points);
			$seeker_reward_am = $seeker_reward_am + ($xkf['achievements_misc_seeker'] * $seeker_reward_am);
			}
			if($ACTUA == $ACTUAL){
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET achievements_misc_seeker = achievements_misc_seeker + '1', antimatter = antimatter + ".$seeker_reward_am." WHERE id = ".$this->_fleet['fleet_owner'].";");
			$msg = '<img alt="" style="float:left; width:60px; margin-right:6px;" src="styles/images/achiev/ach_found_tm.png">reached: <span class="achiev_mes_head">seeker lvl. '.$expe_lvl.'</span><br> received:<br> '.$seeker_reward_am.' antimatter <br> '.$seeker_reward_points.' achievement points';
			SendSimpleMessage($this->_fleet['fleet_owner'], '', TIMESTAMP, 4, 'System', 'Achievements', $msg);
		
		}
        }
		} else {
			$Message 	= $LNG['sys_expe_nothing_'.mt_rand(1, 9)];
		}
		$this->setState(FLEET_RETURN);
		$this->SaveFleet();
		SendSimpleMessage($this->_fleet['fleet_owner'], 0, $this->_fleet['fleet_end_stay'], 15, $LNG['sys_mess_tower'], $LNG['sys_expe_report'], $Message);
	}
	
	function ReturnEvent()
	{
		$LNG	= $this->getLanguage(NULL, $this->_fleet['fleet_owner']);
		if($this->_fleet['fleet_resource_darkmatter'] > 0) {
			SendSimpleMessage($this->_fleet['fleet_owner'], 0, $this->_fleet['fleet_end_time'], 15, $LNG['sys_mess_tower'], $LNG['sys_expe_report'], sprintf($LNG['sys_expe_back_home_with_dm'], $LNG['tech'][921], pretty_number($this->_fleet['fleet_resource_darkmatter']), $LNG['tech'][921]));
			$this->UpdateFleet('fleet_array', '220,0;');
		} else {
			SendSimpleMessage($this->_fleet['fleet_owner'], 0, $this->_fleet['fleet_end_time'], 15, $LNG['sys_mess_tower'], $LNG['sys_expe_report'], $LNG['sys_expe_back_home_without_dm']);
		}
		$this->RestoreFleet();
	}
}
