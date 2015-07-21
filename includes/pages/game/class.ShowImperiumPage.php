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
 * @info $Id: class.ShowImperiumPage.php 2632 2013-03-18 19:05:14Z slaver7 $
 * @link http://2moons.cc/
 */


class ShowImperiumPage extends AbstractPage
{
	public static $requireModule = MODULE_IMPERIUM;

	function __construct() 
	{
		parent::__construct();
	}

	function show()
	{
		global $LNG, $USER, $PLANET, $resource, $reslist;

		if($USER['planet_sort'] == 0) {
			$Order	= "id ";
		} elseif($USER['planet_sort'] == 1) {
			$Order	= "galaxy, system, planet, planet_type ";
		} elseif ($USER['planet_sort'] == 2) {
			$Order	= "name ";	
		}
		
		$Order .= ($USER['planet_sort_order'] == 1) ? "DESC" : "ASC" ;
		
		
		
		$PlanetsRAW = $GLOBALS['DATABASE']->query("SELECT * FROM ".PLANETS." WHERE id_owner = '".$USER['id']."' AND destruyed = '0' AND planet_type != '4' ORDER BY ".$Order.";");	
		
		
		$elementALL	= array(212,202,203,204,205,229,209,206,207,217,215,213,211,219,225,226,214,216,230,227,228,222,218,221,208,210,220,223);
		$elementALLBis	= array(401,402,403,404,405,406,407,408,409,410,411,412,413,414,416,417,418,419,420,421,422,502,503);
		$elementAllTris	= array(1,2,3,4,5,6,12,14,15,21,22,23,24,31,33,34,41,42,43,44,48);
		foreach($elementAllTris as $Element)
		{
			$elementListallTris[$Element]	= array(
				'id'				=> $Element,
			);
		}
		
		foreach($elementALL as $Element)
		{
			$elementListall[$Element]	= array(
				'id'				=> $Element,
			);
		}
		
		foreach($elementALLBis as $Element)
		{
			$elementListallBis[$Element]	= array(
				'id'				=> $Element,
			);
		}
		

        $planetList	= array();
		$PlanetRess	= new ResourceUpdate();
		while ($PLANETA = $GLOBALS['DATABASE']->fetch_array($PlanetsRAW))
		{
			
			list($USER, $PLANETA)	= $PlanetRess->CalcResource($USER, $PLANETA, true);
	
			$planetList[]	= array(
				'id' => $PLANETA['id'],
				'name' => $PLANETA['name'],
				'image' => $PLANETA['image'],
				'galaxy' => $PLANETA['galaxy'],
				'system' => $PLANETA['system'],
				'planet' => $PLANETA['planet'],
				'type' => $PLANETA['planet_type'],
				'metal_percent' => round($PLANETA['metal'] * 100 / $PLANETA['metal_max']),
				'cystal_percent' => round($PLANETA['crystal'] * 100 / $PLANETA['crystal_max']),
				'deut_percent' => round($PLANETA['deuterium'] * 100 / $PLANETA['deuterium_max']),
				
				'metal_mine' => $PLANETA['metal_mine'],
				'crystal_mine' => $PLANETA['crystal_mine'],
				'deuterium_sintetizer' => $PLANETA['deuterium_sintetizer'],
				'solar_plant' => $PLANETA['solar_plant'],
				'searcher' => $PLANETA['searcher'],
				'fusion_plant' => $PLANETA['fusion_plant'],
				'robot_factory' => $PLANETA['robot_factory'],
				'nano_factory' => $PLANETA['nano_factory'],
				'hangar' => $PLANETA['hangar'],
				'metal_store' => $PLANETA['metal_store'],
				'crystal_store' => $PLANETA['crystal_store'],
				'deuterium_store' => $PLANETA['deuterium_store'],
				'laboratory' => $PLANETA['laboratory'],
				'terraformer' => $PLANETA['terraformer'],
				'university' => $PLANETA['university'],
				'ally_deposit' => $PLANETA['ally_deposit'],
				'silo' => $PLANETA['silo'],
				'mondbasis' => $PLANETA['mondbasis'],
				'phalanx' => $PLANETA['phalanx'],
				'sprungtor' => $PLANETA['sprungtor'],
				'collider' => $PLANETA['collider'],
				
				'solar_satelit' => pretty_number($PLANETA['solar_satelit']),
				'small_ship_cargo' => pretty_number($PLANETA['small_ship_cargo']),
				'big_ship_cargo' => pretty_number($PLANETA['big_ship_cargo']),
				'light_hunter' => pretty_number($PLANETA['light_hunter']),
				'heavy_hunter' => pretty_number($PLANETA['heavy_hunter']),
				'M7' => pretty_number($PLANETA['M7']),
				'recycler' => pretty_number($PLANETA['recycler']),
				'crusher' => pretty_number($PLANETA['crusher']),
				'battle_ship' => pretty_number($PLANETA['battle_ship']),
				'ev_transporter' => pretty_number($PLANETA['ev_transporter']),
				'battleship' => pretty_number($PLANETA['battleship']),
				'destructor' => pretty_number($PLANETA['destructor']),
				'bomber_ship' => pretty_number($PLANETA['bomber_ship']),
				'М19' => pretty_number($PLANETA['М19']),
				'giga_recykler' => pretty_number($PLANETA['giga_recykler']),
				'galleon' => pretty_number($PLANETA['galleon']),
				'destroyer' => pretty_number($PLANETA['destroyer']),
				'dearth_star' => pretty_number($PLANETA['dearth_star']),
				'lune_noir' => pretty_number($PLANETA['lune_noir']),
				'M32' => pretty_number($PLANETA['M32']),
				'frigate' => pretty_number($PLANETA['frigate']),
				'black_wanderer' => pretty_number($PLANETA['black_wanderer']),
				'flying_death' => pretty_number($PLANETA['flying_death']),
				'star_crasher' => pretty_number($PLANETA['star_crasher']),
				'bs_class_oneil' => pretty_number($PLANETA['bs_class_oneil']),
				'colonizer' => pretty_number($PLANETA['colonizer']),
				'spy_sonde' => pretty_number($PLANETA['spy_sonde']),
				'dm_ship' => pretty_number($PLANETA['dm_ship']),
				'Scrappy' => pretty_number($PLANETA['Scrappy']),
			
				'misil_launcher' => pretty_number($PLANETA['misil_launcher']),
				'small_laser' => pretty_number($PLANETA['small_laser']),
				'big_laser' => pretty_number($PLANETA['big_laser']),
				'gauss_canyon' => pretty_number($PLANETA['gauss_canyon']),
				'ionic_canyon' => pretty_number($PLANETA['ionic_canyon']),
				'buster_canyon' => pretty_number($PLANETA['buster_canyon']),
				'small_protection_shield' => pretty_number($PLANETA['small_protection_shield']),
				'big_protection_shield' => pretty_number($PLANETA['big_protection_shield']),
				'planet_protector' => pretty_number($PLANETA['planet_protector']),
				'graviton_canyon' => pretty_number($PLANETA['graviton_canyon']),
				'orbital_station' => pretty_number($PLANETA['orbital_station']),
				'lepton_gun' => pretty_number($PLANETA['lepton_gun']),
				'proton_gun' => pretty_number($PLANETA['proton_gun']),
				'canyon' => pretty_number($PLANETA['canyon']),
				'hydrogen_gun' => pretty_number($PLANETA['hydrogen_gun']),
				'dora_gun' => pretty_number($PLANETA['dora_gun']),
				'photon_cannon' => pretty_number($PLANETA['photon_cannon']),
				'particle_emitter' => pretty_number($PLANETA['particle_emitter']),
				'slim_mehador' => pretty_number($PLANETA['slim_mehador']),
				'iron_mehador' => pretty_number($PLANETA['iron_mehador']),
				'grand_mehador' => pretty_number($PLANETA['grand_mehador']),
				'interceptor_misil' => pretty_number($PLANETA['interceptor_misil']),
				'interplanetary_misil' => pretty_number($PLANETA['interplanetary_misil']),
				
				'current' => $PLANETA['field_current'],
				'max' => CalculateMaxPlanetFields($PLANETA),
				'energy_used' => $PLANETA['energy'] + $PLANETA['energy_used'],
				'resource901' => pretty_number($PLANETA['metal']),
				'resource902' => pretty_number($PLANETA['crystal']),
				'resource903' => pretty_number($PLANETA['deuterium']),
				'resource911' => pretty_number($PLANETA['energy']),
				
			);
		} 
		

		$this->tplObj->loadscript("empire.js");
		$this->tplObj->assign_vars(array(
			'planetList'	=> $planetList,
			'elementListall'	=> $elementListall,
			'elementListallBis'	=> $elementListallBis,
			'elementListallTris'	=> $elementListallTris,
		));

		$this->display('page.empire.default.tpl');
	}
}