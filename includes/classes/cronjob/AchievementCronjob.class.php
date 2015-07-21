<?php

/**
 *  2Moons
 *  Copyright (C) 2011 Jan Kröpke
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
 * @copyright 2009 Lucky
 * @copyright 2011 Jan Kröpke <info@2moons.cc>
 * @license http://www.gnu.org/licenses/gpl.html GNU GPLv3 License
 * @version 1.7.0 (2011-12-10)
 * @info $Id: DailyCronjob.class.php 2547 2013-01-06 18:04:41Z fabio.chimienti $
 * @link http://code.google.com/p/2moons/
 */

class AchievementCronjob
{
	function run(){
	
	$achievements_levels = $GLOBALS['DATABASE']->query("SELECT * FROM ".USERS." WHERE `universe` = '1';");
	while($x = $GLOBALS['DATABASE']->fetch_array($achievements_levels)){
	$achievement_next_require_attack = (5 * $x['achievements_level_attack']) + 15;
	$achievement_next_require_hostal = (5 * $x['achievements_level_hostal']) + 20;
	$achievement_next_require_expe = (5 * $x['achievements_level_expe']) + 20;
	$achievement_next_level_attack = (1 * $x['achievements_level_attack']) + 1;
	$achievement_next_level_hostal = (1 * $x['achievements_level_hostal']) + 1;
	$achievement_next_level_expe = (1 * $x['achievements_level_expe']) + 1;
	if($x['achievements_attack'] >= $achievement_next_require_attack){
	$attack_reward_am = 200;
	$attack_reward_points = 50;
	$next_points_attack = $attack_reward_points + ($x['achievements_level_attack'] * $attack_reward_points);
	$next_am_attack = $attack_reward_am + ($x['achievements_level_attack'] * $attack_reward_am);
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_level_attack` = `achievements_level_attack` + '1', `antimatter` = `antimatter` + ".$next_am_attack." WHERE `id` = ".$x['id'].";");
	
	$msg = '<img alt="" style="float:left; width:60px; margin-right:6px;" src="styles/images/achiev/ach_wons_day.png">reached: <span class="achiev_mes_head">raider lvl. '.$achievement_next_level_attack.'</span><br> received:<br> '.$next_am_attack.' antimatter <br> '.$next_points_attack.' achievement points';
	SendSimpleMessage($x['id'], '', TIMESTAMP, 4, 'System', 'Achievements', $msg);
	} 
	if($x['achievements_hostal'] >= $achievement_next_require_hostal){
	$hostal_reward_am = 200;
	$hostal_reward_points = 50;
    $next_points_hostal = $hostal_reward_points + ($x['achievements_level_hostal'] * $hostal_reward_points);
	$next_am_hostal = $hostal_reward_am + ($x['achievements_level_hostal'] * $hostal_reward_am);
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_level_hostal` = `achievements_level_hostal` + '1', `antimatter` = `antimatter` + ".$next_am_hostal." WHERE `id` = ".$x['id'].";");
	$msg = '<img alt="" style="float:left; width:60px; margin-right:6px;" src="styles/images/achiev/ach_wons_em_day.png">reached: <span class="achiev_mes_head">hostals victory lvl. '.$achievement_next_level_hostal.'</span><br> received:<br> '.$next_am_hostal.' antimatter <br> '.$next_points_hostal.' achievement points';
	SendSimpleMessage($x['id'], '', TIMESTAMP, 4, 'System', 'Achievements', $msg);
	}
	if($x['achievements_expedition'] >= $achievement_next_require_expe){
	$expe_reward_am = 250;
	$expe_reward_points = 50;
	$next_am_expe = $expe_reward_am + ($x['achievements_level_expe'] * $expe_reward_am);
	$next_points_expe = $expe_reward_points + ($x['achievements_level_expe'] * $expe_reward_points);
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_level_expe` = `achievements_level_expe` + '1', `antimatter` = `antimatter` + ".$next_am_expe." WHERE `id` = ".$x['id'].";");
	$msg = '<img alt="" style="float:left; width:60px; margin-right:6px;" src="styles/images/achiev/ach_expedition_day.png">reached: <span class="achiev_mes_head">expeditions lvl. '.$achievement_next_level_expe.'</span><br> received:<br> '.$next_am_expe.' antimatter <br> '.$next_points_expe.' achievement points';
	SendSimpleMessage($x['id'], '', TIMESTAMP, 4, 'System', 'Achievements', $msg);
	}
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_attack` = '0', `achievements_hostal` = '0', `achievements_expedition` = '0' WHERE id = ".$x['id'].";");
    }
    }
	}
