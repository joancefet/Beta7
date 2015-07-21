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
 * @info $Id: class.ShowRecordsPage.php 2632 2013-03-18 19:05:14Z slaver7 $
 * @link http://2moons.cc/
 */


class ShowRecordsPage extends AbstractPage
{
    public static $requireModule = MODULE_RECORDS;
	
	private $myBuildList;

	function __construct() 
	{
		parent::__construct();
	}
	
	function show()
	{
		global $USER, $PLANET, $LNG, $resource, $CONF, $UNI, $reslist;
		$this->tplObj->loadscript("record.js");
		$recordResult	= $GLOBALS['DATABASE']->query("SELECT elementID, level, userID, username FROM ".USERS." INNER JOIN ".RECORDS." ON userID = id WHERE universe = ".$UNI.";");
		
		$listorder = array(1,2,3,4,5,6,12,14,15,21,22,23,24,31,33,34,41,42,43,44,48);
		$listorder1 = array(210,212,202,203,204,205,229,209,206,207,208,217,215,213,211,220,224,219,223,225,226,214,216,230,227,228,222,218,221);
		$listorder2 = array(401,402,403,420,405,404,406,416,421,417,418,412,410,413,422,419,414,415,407,408,409,411,502,503);
		$ListYou	= array(1,2,3,4,5,6,12,14,15,21,22,23,24,31,33,34,41,42,43,44,48,210,212,202,203,204,205,229,209,206,207,208,217,215,213,211,220,224,219,223,225,226,214,216,230,227,228,222,218,221,401,402,403,420,405,404,406,416,421,417,418,412,410,413,422,419,414,415,407,408,409,411,502,503,106,108,109,110,111,112,113,114,115,117,118,120,121,122,123,124,125,131,132,133,199);
		$defenseList	= array_fill_keys($listorder2, array());
		$fleetList		= array_fill_keys($listorder1, array());
		$researchList	= array_fill_keys($reslist['tech'], array());
		$buildList		= array_fill_keys($listorder, array());
		
		$this->myBuildList = array_fill_keys($ListYou, 0);
		$za_planet2 = $GLOBALS['DATABASE']->query("SELECT * FROM ".PLANETS." where `id_owner` = ".$USER['id']);
		$za_planet1 = $GLOBALS['DATABASE']->query("SELECT * FROM ".USERS." where `id` = ".$USER['id']);
		
		
		
		while($recordRow = $GLOBALS['DATABASE']->fetch_array($za_planet1)){
		$this->getHighestValue($recordRow, 'spy_tech', 106);
		$this->getHighestValue($recordRow, 'computer_tech', 108);
		$this->getHighestValue($recordRow, 'military_tech', 109);
		$this->getHighestValue($recordRow, 'defence_tech', 110);
		$this->getHighestValue($recordRow, 'shield_tech', 111);
		$this->getHighestValue($recordRow, 'energy_tech', 113);
		$this->getHighestValue($recordRow, 'hyperspace_tech', 114);
		
		$this->getHighestValue($recordRow, 'combustion_tech', 115);
		$this->getHighestValue($recordRow, 'impulse_motor_tech', 117);
		$this->getHighestValue($recordRow, 'hyperspace_motor_tech', 118);
		$this->getHighestValue($recordRow, 'laser_tech', 120);
		$this->getHighestValue($recordRow, 'ionic_tech', 121);
		$this->getHighestValue($recordRow, 'buster_tech', 122);
		$this->getHighestValue($recordRow, 'intergalactic_tech', 123);
		$this->getHighestValue($recordRow, 'expedition_tech', 124);
		$this->getHighestValue($recordRow, 'brotherhood', 125);
		$this->getHighestValue($recordRow, 'metal_proc_tech', 131);
		$this->getHighestValue($recordRow, 'crystal_proc_tech', 132);
		$this->getHighestValue($recordRow, 'deuterium_proc_tech', 133);
		$this->getHighestValue($recordRow, 'graviton_tech', 199);
		}
		while($recordRow = $GLOBALS['DATABASE']->fetch_array($za_planet2)){
		
			$this->getHighestValue($recordRow, 'metal_mine', 1);
			$this->getHighestValue($recordRow, 'crystal_mine', 2);
			$this->getHighestValue($recordRow, 'deuterium_sintetizer', 3);
			$this->getHighestValue($recordRow, 'solar_plant', 4);
			$this->getHighestValue($recordRow, 'searcher', 5);
			$this->getHighestValue($recordRow, 'fusion_plant', 12);
			$this->getHighestValue($recordRow, 'robot_factory', 14);
			$this->getHighestValue($recordRow, 'nano_factory', 15);
			$this->getHighestValue($recordRow, 'hangar', 21);
			$this->getHighestValue($recordRow, 'metal_store', 22);
			$this->getHighestValue($recordRow, 'crystal_store', 23);
			$this->getHighestValue($recordRow, 'deuterium_store', 24);
			$this->getHighestValue($recordRow, 'laboratory', 31);
			$this->getHighestValue($recordRow, 'terraformer', 33);
			$this->getHighestValue($recordRow, 'university', 6);
			$this->getHighestValue($recordRow, 'ally_deposit', 34);
			$this->getHighestValue($recordRow, 'mondbasis', 41);
			$this->getHighestValue($recordRow, 'phalanx', 42);
			$this->getHighestValue($recordRow, 'sprungtor', 43);
			$this->getHighestValue($recordRow, 'collider', 48);

			$this->getHighestValue($recordRow, 'small_ship_cargo', 202);
			$this->getHighestValue($recordRow, 'big_ship_cargo', 203);
			$this->getHighestValue($recordRow, 'light_hunter', 204);
			$this->getHighestValue($recordRow, 'heavy_hunter', 205);
			$this->getHighestValue($recordRow, 'crusher', 206);
			$this->getHighestValue($recordRow, 'battle_ship', 207);
			$this->getHighestValue($recordRow, 'colonizer', 208);
			$this->getHighestValue($recordRow, 'recycler', 209);
			$this->getHighestValue($recordRow, 'spy_sonde', 210);
			$this->getHighestValue($recordRow, 'bomber_ship', 211);
			$this->getHighestValue($recordRow, 'solar_satelit', 212);
			$this->getHighestValue($recordRow, 'destructor', 216);
			$this->getHighestValue($recordRow, 'dearth_star', 218);
			$this->getHighestValue($recordRow, 'battleship', 214);
			$this->getHighestValue($recordRow, 'lune_noir', 215);
			$this->getHighestValue($recordRow, 'ev_transporter', 217);
			
			$this->getHighestValue($recordRow, 'giga_recykler', 219);
			$this->getHighestValue($recordRow, 'dm_ship', 220);
			$this->getHighestValue($recordRow, 'bs_class_oneil', 221);
			$this->getHighestValue($recordRow, 'flying_death', 222);
			$this->getHighestValue($recordRow, 'Scrappy', 223);
			$this->getHighestValue($recordRow, 'M7', 229);
	
			$this->getHighestValue($recordRow, 'M32', 230);
			$this->getHighestValue($recordRow, 'galleon', 225);
			$this->getHighestValue($recordRow, 'destroyer', 226);
			$this->getHighestValue($recordRow, 'frigate', 227);
			$this->getHighestValue($recordRow, 'black_wanderer', 228);
			$this->getHighestValue($recordRow, 'slim_mehador', 420);
			$this->getHighestValue($recordRow, 'iron_mehador', 421);
			$this->getHighestValue($recordRow, 'grand_mehador', 422);
	

			$this->getHighestValue($recordRow, 'orbital_station', 411);
			$this->getHighestValue($recordRow, 'misil_launcher', 401);
			$this->getHighestValue($recordRow, 'small_laser', 402);
			$this->getHighestValue($recordRow, 'big_laser', 403);
			$this->getHighestValue($recordRow, 'gauss_canyon', 404);
			$this->getHighestValue($recordRow, 'ionic_canyon', 405);
			$this->getHighestValue($recordRow, 'buster_canyon', 406);
			$this->getHighestValue($recordRow, 'small_protection_shield', 407);
			$this->getHighestValue($recordRow, 'planet_protector', 409);
			$this->getHighestValue($recordRow, 'big_protection_shield', 408);
			$this->getHighestValue($recordRow, 'graviton_canyon', 410);
			$this->getHighestValue($recordRow, 'interceptor_misil', 502);
			$this->getHighestValue($recordRow, 'interplanetary_misil', 503);
		
			$this->getHighestValue($recordRow, 'lepton_gun', 412);
			$this->getHighestValue($recordRow, 'proton_gun', 413);
			$this->getHighestValue($recordRow, 'canyon', 414);
			$this->getHighestValue($recordRow, 'quantum_gun', 415);
			$this->getHighestValue($recordRow, 'hydrogen_gun', 416);
			$this->getHighestValue($recordRow, 'dora_gun', 417);
			$this->getHighestValue($recordRow, 'photon_cannon', 418);
			$this->getHighestValue($recordRow, 'particle_emitter', 419);
		
		}
	
	
		while($recordRow = $GLOBALS['DATABASE']->fetch_array($recordResult)) {
			if (in_array($recordRow['elementID'], $listorder2)) {
				$defenseList[$recordRow['elementID']][]		= $recordRow;
			} elseif (in_array($recordRow['elementID'], $listorder1)) {
				$fleetList[$recordRow['elementID']][]		= $recordRow;
			} elseif (in_array($recordRow['elementID'], $reslist['tech'])) {
				$researchList[$recordRow['elementID']][]	= $recordRow;
			} elseif (in_array($recordRow['elementID'], $listorder)) {
				$buildList[$recordRow['elementID']][]		= $recordRow;
			}
		}
		$calc = 
		$this->tplObj->assign_vars(array(	
			'defenseList'	=> $defenseList,
			'fleetList'		=> $fleetList,
			'researchList'	=> $researchList,
			'buildList'		=> $buildList,
			'update'		=> _date($LNG['php_tdformat'], Config::get('stat_last_update'), $USER['timezone']),
			'myBuildList'	=> $this->myBuildList
		));
		
		$this->display('page.records.default.tpl');
	}
	
	function getHighestValue($arr, $column, $buildId){
		if($arr[$column] > $this->myBuildList[$buildId]) $this->myBuildList[$buildId] = $arr[$column];
	}
}
 