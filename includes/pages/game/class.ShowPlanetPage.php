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

class ShowPlanetPage extends AbstractPage
{
	public static $requireModule = MODULE_BUDDYLIST;

	function __construct() 
	{
		parent::__construct();
	}
	
	function coord()
	{
	global $USER, $PLANET, $LNG, $UNI, $CONF;
	
	
		$galaxy = HTTP::_GP('galaxy',0);
		$system = HTTP::_GP('system',0);
		$planet =  HTTP::_GP('planets',0);
		
		$galaxy1 = $PLANET['galaxy'];
		$system1 = $PLANET['system'];
		$planet1 =  $PLANET['planet'];
		
		
		$cost_tp = 1000 * abs($system1 - $system) + 15000 * abs($galaxy1 - $galaxy) + 2500 * abs($planet1 - $planet);
		//$cost_tp = 0;
	
		$fleets = $GLOBALS['DATABASE']->getFirstCell("SELECT COUNT(fleet_id) FROM ".FLEETS." WHERE `fleet_start_id` = ".$PLANET['id']." AND `fleet_universe` = ".$UNI." OR `fleet_end_id` = ".$PLANET['id']." AND `fleet_universe` = ".$UNI.";");
		$fleets2 = 0;
		
		
		if($PLANET['id_luna'] != 0){
		$fleets2 = $GLOBALS['DATABASE']->getFirstCell("SELECT COUNT(fleet_id) FROM ".FLEETS." WHERE `fleet_start_id` = ".$PLANET['id_luna']." AND `fleet_universe` = ".$UNI." OR `fleet_end_id` = ".$PLANET['id_luna']." AND `fleet_universe` = ".$UNI.";");
		}
		
	
		
		
		if($USER['darkmatter'] < $cost_tp){
		$Message	= sprintf( $LNG['planet_message_1'], pretty_number($cost_tp));
		$this->printMessage($Message, true, array('game.php?page=planet', 2));
		die();
}elseif($USER['id_planet'] == $PLANET['id']) {
		$this->printMessage($LNG['planet_message_2'],"game.php?page=planet",2);
        die();
		}elseif($fleets > 0 || $fleets2 > 0){
			$this->printMessage($LNG['planet_message_3'], true, array('game.php?page=planet', 2));
die();
}elseif($PLANET['planet_type'] == 3){
			$this->printMessage($LNG['planet_message_4'], true, array('game.php?page=planet', 2));
die();
}else{
		

		
		if(empty($galaxy) || empty($system) || empty($planet))
			{
				$this->printMessage($LNG['planet_message_5'],true, array('game.php?page=planet', 2));
				die();
			}
		elseif($galaxy < 0 || $system < 0 || $planet < 0){
			$this->printMessage($LNG['planet_message_6'], true, array('game.php?page=planet', 2));
				die();
		}elseif($galaxy > $CONF['max_galaxy'] || $system > $CONF['max_system'] || $planet > $CONF['max_planets']){
			$this->printMessage($LNG['planet_message_7'], true, array('game.php?page=planet', 2));
				die();
		}elseif($PLANET['last_relocate'] + 24*60*60 > TIMESTAMP && $system != $PLANET['system'] ){
			$this->printMessage($LNG['planet_message_8'], true, array('game.php?page=planet', 2));
die();
} 
                
			$fetch = $GLOBALS['DATABASE']->query("SELECT *FROM ".PLANETS." where `galaxy` = '".$galaxy."' AND `system` = '".$system."' AND `planet` = '".$planet."' AND `planet_type` = '1' AND universe = ".$UNI." ;");
		if($GLOBALS['DATABASE']->numRows($fetch) >0)
			{
				$this->printMessage($LNG['planet_message_9'], true, array('game.php?page=planet', 2));
				die();
			}else{
				//facem mutarea dar prima data vedem daca are luna
				//$fetch = $db->fetch_array($fetch);
				
				if(!empty($PLANET['id_luna'])){
					$fetch2 = $GLOBALS['DATABASE']->query("SELECT *FROM ".PLANETS." where `id` = '".$PLANET['id_luna']."' AND `planet_type` = '3' AND universe =".$UNI.";");
					$fetch2 = $GLOBALS['DATABASE']->fetch_array($fetch2);
					$GLOBALS['DATABASE']->query("UPDATE ".PLANETS." set `galaxy` = '".$galaxy."', `system` = '".$system."' , `planet` = '".$planet."' where `id` = '".$fetch2['id']."' AND universe = ".$UNI." ;");
					$GLOBALS['DATABASE']->query("UPDATE ".PLANETS." set `last_relocate` = '".TIMESTAMP."' WHERE `id` = '".$PLANET['id_luna']."' AND universe = ".$UNI.";");
				}
                                if($USER['id_planet'] == $PLANET['id']){
    
					$GLOBALS['DATABASE']->query("UPDATE ".USERS." set `galaxy` = '".$galaxy."', `system` = '".$system."' , `planet` = '".$planet."' where `id` = '".$USER['id']."' AND universe = ".$UNI.";");
				}
				$GLOBALS['DATABASE']->query("UPDATE ".PLANETS." set `last_relocate` = '".TIMESTAMP."' WHERE `id` = '".$PLANET['id']."' AND universe = ".$UNI.";");
				$GLOBALS['DATABASE']->query("UPDATE ".PLANETS." set `galaxy` = '".$galaxy."', `system` = '".$system."' , `planet` = '".$planet."' where `id` = '".$PLANET['id']."' AND universe = ".$UNI.";");
				$USER['darkmatter'] -= $cost_tp;
				
				$this->printMessage($LNG['planet_message_10'], true, array('game.php?page=planet', 2));
				die();
			}
		}
		
	}
	function diameter()
	{
		global $USER, $PLANET, $LNG, $UNI, $CONF;
if($PLANET['planet_type'] == 1 && $PLANET['crystal'] < 50000000000 || $PLANET['metal'] < 100000000000 || $USER['stardust'] < 1){		
$this->printMessage($LNG['planet_message_11'], true, array('game.php?page=planet', 2));
}elseif($PLANET['planet_type'] == 3 && $PLANET['crystal'] < 25000000000 || $PLANET['metal'] < 50000000000 || $USER['stardust'] < 1){	
$this->printMessage($LNG['planet_message_11'], true, array('game.php?page=planet', 2));
}else{
	if($PLANET['planet_type'] == 1){
	$diameter = mt_rand(276,414);
	$fields = mt_rand(12,18);
	$PLANET['crystal'] -= 50000000000;
	$PLANET['metal'] -= 100000000000;
	$GLOBALS['DATABASE']->query("UPDATE ".PLANETS." set `diameter` = diameter + '".$diameter."', field_max = field_max + '".$fields."' WHERE `id` = '".$PLANET['id']."';");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." set `stardust` = stardust - '1' WHERE `id` = '".$USER['id']."' ;");
	}else{
	$diameter = mt_rand(46,184);
	$fields = mt_rand(2,8);
	$PLANET['crystal'] -= 25000000000;
	$PLANET['metal'] -= 50000000000;
	$GLOBALS['DATABASE']->query("UPDATE ".PLANETS." set `diameter` = diameter + '".$diameter."', field_max = field_max + '".$fields."' WHERE `id` = '".$PLANET['id_luna']."';");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." set `stardust` = stardust - '1' WHERE `id` = '".$USER['id']."' ;");
	}
	$this->printMessage($LNG['planet_message_12'], true, array('game.php?page=planet', 2));
	}
		
	$this->tplObj->assign_vars(array(	
		
			'stardust' => $USER['stardust'],
			
		));
		
	}
	
	function field()
	{
		global $USER, $PLANET, $LNG, $UNI, $CONF;
		
		$fields = HTTP::_GP('filds',0);
		
		$cost_i 	= 0;
		$cost 	= 0;
		
		for($i = 0; $i < $fields; $i++)
	{
		$cost_i 	= round(200 * pow(1.1,$USER['kolvo'] + $i));
		$cost 	= $cost + $cost_i;
	}
		
		if($USER['darkmatter'] < $cost){
		$this->printMessage('you dont have enough darkmatter to continue this operation.', true, array('game.php?page=planet', 2));
		}else{
		$GLOBALS['DATABASE']->query("UPDATE ".PLANETS." set `field_max` = field_max + '".$fields."' WHERE `id` = '".$PLANET['id']."' ;");
		$GLOBALS['DATABASE']->query("UPDATE ".USERS." set `kolvo` = kolvo + '".$fields."' WHERE `id` = '".$PLANET['id_owner']."' ;");
		$USER['darkmatter'] -= $cost;
		$Message	= sprintf( $LNG['planet_message_13'], $fields);
		$this->printMessage($Message, true, array('game.php?page=planet', 2));
}
	}
	
	function planetImageSet()
	{
		global $USER, $PLANET, $LNG, $UNI, $CONF;
		$ImageName = HTTP::_GP('ImageName','');
		$Code = 0;
		$Coins = 0;
		if($USER['climate_change'] == 0){
		$Cost = 0;
		}else{
		$Cost = 5000;
		}
		
		
		
		if($USER['antimatter'] < $Cost){
		$Code = 1;
		$Coins = $Cost - $USER['antimatter'];	
		}else{
		//$USER['antimatter'] -= $Cost;
		$Code = 2;
		$Coins = 0;	
		$GLOBALS['DATABASE']->query("UPDATE ".USERS." set climate_change = climate_change + '1',  climate_change_name = '".$ImageName."' WHERE `id` = '".$PLANET['id_owner']."' ;");
		}
		$Code = 3;
		
		
		$this->sendJSON(array('code' => $Code,'coins' => $Coins));
	}
	
	function planetImageCode()
	{
		global $USER, $PLANET, $LNG, $UNI, $CONF;
		$code = HTTP::_GP('code',0);
		$coins = HTTP::_GP('coins',0);
		
		if($code == 1){
	   $this->printMessage('You are missing '.pretty_number($coins).' antimatter', true, array('game.php?page=planet', 2));
		}elseif($code == 2){
		$this->printMessage('Planet structure changed', true, array('game.php?page=planet', 2));	
		}elseif($code == 3){
		$this->printMessage('under maintenace', true, array('game.php?page=planet', 2));	
		}
	}
	
	
	
	function show()
	{
		global $USER, $PLANET, $LNG, $UNI, $CONF;
		
		if($PLANET['planet_type'] == 1){
		$diamter = 276;
		$diamter1 = 414;
		$fields = 12;
		$fields1 = 18;
		$crystal = 50000000000;
		$metal = 100000000000;
		}else{
		$diamter = 46;
		$diamter1 = 184;
		$fields = 2;
		$fields1 = 8;
		$crystal = 25000000000;
		$metal = 50000000000;
		}
		$field_max = $PLANET['field_max'];
		
		if($USER['climate_change'] == 0){
		$Cost = 0;
		}else{
		$Cost = 5000;
		}

		$this->tplObj->loadscript("planet.js");
		$this->tplObj->loadscript("overview.actions.js");
		$this->tplObj->assign_vars(array(	
			'Cost' => $Cost,
			'field_max' => $field_max,
			'crystal2' => $crystal,
			'crystal1' => pretty_number($crystal),
			'metal' => $metal,
			'metal1' => pretty_number($metal),
			'diamter' => $diamter,
			'diamter1' => $diamter1,
			'fields' => $fields,
			'fields1' => $fields1,
			'kolvo' => $USER['kolvo'],
			'galaxy' => $PLANET['galaxy'],
			'system' => $PLANET['system'],
			'planet' => $PLANET['planet'],
			'dm' => $USER['darkmatter'],
			'der_metal' => $PLANET['metal'],
			'crystal' => $PLANET['crystal'],
			'stardust' => $USER['stardust'],
			'CurrentMaxFields'  	=> CalculateMaxPlanetFields($PLANET),
			'ov_security_confirm'		=> sprintf($LNG['ov_security_confirm'], $PLANET['name'].' ['.$PLANET['galaxy'].':'.$PLANET['system'].':'.$PLANET['planet'].']'),
		));
		
		$this->display('page.planet.default.tpl');
	
	}
}