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
 * @info $Id: class.ShowSearchPage.php 2632 2013-03-18 19:05:14Z slaver7 $
 * @link http://2moons.cc/
 */

class ShowPlanetcloakPage extends AbstractPage
{
	
	
	function __construct() {
		parent::__construct();
	}

	function buy()
	{
		global $USER, $LNG, $THEME, $UNI;
		$days   = HTTP::_GP('hide', 1);
		
		if($days == 1){
		
		if($USER['planet_cloak_countdown'] > TIMESTAMP){
		$this->printMessage($LNG['planetcloak_cntdown'], true, array('game.php?page=overview', 2));
		}elseif($USER['darkmatter'] < 500000){
		$this->printMessage($LNG['gover_notres'], true, array('game.php?page=overview', 2));
		}else{
		$USER['darkmatter'] -= 500000;
		$GLOBALS['DATABASE']->query("Update ".USERS." SET `planet_cloak` = ".(TIMESTAMP + 3 * 24 * 60 * 60)." WHERE `id` = ".$USER['id']." AND universe = ".$UNI.";");
		$GLOBALS['DATABASE']->query("Update ".USERS." SET `planet_cloak_countdown` = ".(TIMESTAMP + 11 * 24 * 60 * 60)." WHERE `id` = ".$USER['id']." AND universe = ".$UNI.";");
		$GLOBALS['DATABASE']->query("INSERT INTO uni1_planetcloak_log VALUES ('".$GLOBALS['DATABASE']->GetInsertID()."','".$USER['id']."','".TIMESTAMP."','20000');");
		$this->printMessage($LNG['planetcloak_activate_one'], true, array('game.php?page=overview', 2));
		}
		}elseif($days == 2){
		if($USER['planet_cloak_countdown'] > TIMESTAMP){
		$this->printMessage($LNG['planetcloak_cntdown'], true, array('game.php?page=overview', 2));
		}elseif($USER['darkmatter'] < 2000000){
		$this->printMessage($LNG['gover_notres'], true, array('game.php?page=overview', 2));
		}else{
		$USER['darkmatter'] -= 2000000;
		$GLOBALS['DATABASE']->query("Update ".USERS." SET `planet_cloak` = ".(TIMESTAMP + 14 * 24 * 60 * 60)." WHERE `id` = ".$USER['id']." AND universe = ".$UNI.";");
		$GLOBALS['DATABASE']->query("Update ".USERS." SET `planet_cloak_countdown` = ".(TIMESTAMP + 44 * 24 * 60 * 60)." WHERE `id` = ".$USER['id']." AND universe = ".$UNI.";");
		$GLOBALS['DATABASE']->query("INSERT INTO uni1_planetcloak_log VALUES ('".$GLOBALS['DATABASE']->GetInsertID()."','".$USER['id']."','".TIMESTAMP."','100000');");
		$this->printMessage($LNG['planetcloak_activate_seven'], true, array('game.php?page=overview', 2));
		}
		}
		
		
		$this->tplObj->assign_vars(array(
		
		));
		
		$this->display('page.planetcloak.default.tpl');
	}
	
	function show()
	{
		global $USER, $LNG, $THEME;
		$showCountdown = 0;
		if($USER['planet_cloak'] < TIMESTAMP && $USER['planet_cloak_countdown'] > TIMESTAMP){
		$showCountdown = 1;
		}
		
		$this->tplObj->loadscript("jquery.countdown.js");
		$this->tplObj->assign_vars(array(
		'cloak_active' => ((!empty($USER['planet_cloak']) && $USER['planet_cloak'] > TIMESTAMP) ? ($USER['planet_cloak'] - TIMESTAMP) : 0),
		'cloak_active_countdown' => ((!empty($USER['planet_cloak_countdown']) && $USER['planet_cloak_countdown'] > TIMESTAMP) ? ($USER['planet_cloak_countdown'] - TIMESTAMP) : 0),
		'showCountdown' => $showCountdown,
		));
		
		$this->display('page.planetcloak.default.tpl');
	}
}