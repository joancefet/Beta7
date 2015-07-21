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
 * @info $Id: class.ShowBuddyListPage.php 2632 2013-03-18 19:05:14Z slaver7 $
 * @link http://2moons.cc/
 */

class ShowCreateMoonPage extends AbstractPage
{

	function __construct() 
	{
		parent::__construct();
	}
	function am()
	{
		global $USER, $PLANET, $LNG, $UNI;
		
		 if(($PLANET['der_metal'] + $PLANET['der_crystal']) <= 50000000){
		$this->printMessage("you dont have enough debris on the planet", array('game.php?page=createMoon', 3));
		die();
		}elseif($USER['antimatter'] < 10000){
		$this->printMessage($LNG['create_1'], array('game.php?page=createMoon', 3));
		die();
		}else{
		
		
		if($PLANET['planet_type'] == 1 && $PLANET['id_luna'] == 0){
		require_once(ROOT_PATH.'includes/functions/CreateOneMoonRecord.php');
		$a = mt_rand(9400,9888); // how big ?
		$u_have_moon = CreateOneMoonRecord($PLANET['galaxy'], $PLANET['system'], $PLANET['planet'], $PLANET['universe'], $USER['id'],'', 'Moon', '', $a);
		$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET antimatter = antimatter - '10000' WHERE id = ".$USER['id'].";");
		$this->printMessage($LNG['create_2'], array('game.php?page=overview', 3));
		}else{
					$this->printMessage($LNG['create_3'], true, array('game.php?page=overview', 2));
					die();
				}
	
		
		$this->tplObj->assign_vars(array(	
		
		));
		
		}
		
	}
	function dm()
	{
		global $USER, $PLANET, $LNG, $UNI;
		
		if(($PLANET['der_metal'] + $PLANET['der_crystal']) <= 50000000){
		$this->printMessage("you dont have enough debris on the planet", array('game.php?page=createMoon', 3));
		die();
		}elseif($USER['darkmatter'] < 2000000){
		$this->printMessage($LNG['create_4'], array('game.php?page=createMoon', 3));
		die();
		}else{
		
		
		if($PLANET['planet_type'] == 1 && $PLANET['id_luna'] == 0){
		require_once(ROOT_PATH.'includes/functions/CreateOneMoonRecord.php');
		$a = mt_rand(8000, 9000); // how big ?
		$u_have_moon = CreateOneMoonRecord($PLANET['galaxy'], $PLANET['system'], $PLANET['planet'], $PLANET['universe'], $USER['id'],'', 'Moon', '', $a);
		$USER['darkmatter'] -= 2000000;
		$this->printMessage($LNG['create_2'], array('game.php?page=overview', 3));
		}else{
					$this->printMessage($LNG['create_3'], true, array('game.php?page=overview', 2));
					die();
				}
	
		
		$this->tplObj->assign_vars(array(	
		
		));
		
		}
	
	}
	
	function show()
	{
		global $USER, $PLANET, $LNG, $UNI;
		$possible_am = 0;
		$possible_dm = 0;
		
		if($USER['antimatter'] >= 10000 && $PLANET['der_metal'] + $PLANET['der_crystal'] >= 50000000){
		$possible_am = 1;
		}
		if($USER['darkmatter'] >= 2000000 && $PLANET['der_metal'] + $PLANET['der_crystal'] >= 50000000){
		$possible_dm = 1;
		}
		$this->tplObj->assign_vars(array(	
		'wreckage' => $PLANET['der_metal'] + $PLANET['der_crystal'],
		'possible_dm' => $possible_dm,
		'possible_am' => $possible_am,
		'am' => $USER['antimatter'],
		'dm' => $USER['darkmatter'],
		));
		
		$this->display('page.createmoon.default.tpl');
	}
}