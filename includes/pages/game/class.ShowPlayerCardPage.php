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
 * @info $Id: class.ShowPlayerCardPage.php 2632 2013-03-18 19:05:14Z slaver7 $
 * @link http://2moons.cc/
 */


class ShowPlayerCardPage extends AbstractPage
{
    public static $requireModule = MODULE_PLAYERCARD;
	
	protected $disableEcoSystem = true;

	function __construct() 
	{
		parent::__construct();
	}
	
	function show()
	{
		global $USER, $PLANET, $LNG, $UNI;
		
		$this->setWindow('popup');
		$this->initTemplate();
		
		
		
		$PlayerID 	= HTTP::_GP('id', $USER['id']);
		
		if($_POST){
		$p_name = HTTP::_GP('p_name', '', UTF8_SUPPORT);
		$p_country = HTTP::_GP('p_country', '', UTF8_SUPPORT);
		$p_city = HTTP::_GP('p_city', '', UTF8_SUPPORT);
		$p_age = HTTP::_GP('p_age', 0);
		$p_style_game = HTTP::_GP('p_style_game', '', UTF8_SUPPORT);
		$p_communication = HTTP::_GP('p_communication', '', UTF8_SUPPORT);
		
		$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `firstname` = '".$p_name."', `country` = '".$p_country."', `city` = '".$p_city."', `age` = '".$p_age."', `playstyle` = '".$p_style_game."', `skype` = '".$p_communication."' WHERE id = '".$USER['id']."' ;");
		
		
		
		}
			
		$query 		= $GLOBALS['DATABASE']->getFirstRow("SELECT 
						u.achievements_misc_fighter, u.achievements_misc_destructor, u.achievements_misc_moons, u.achievements_misc_hostal, u.achievements_misc_expe, u.achievements_misc_seeker, u.achievements_misc_upgrades, u.achievements_misc_integrator, u.achievement_build_metal, u.achievement_build_crystal, u.achievement_build_deuterium, u.achievement_build_light, u.achievement_build_medium, u.achievement_build_heavy, u.achievement_build_university, u.achievement_build_moon, u.achievement_build_phalanx, u.achievement_build_terraformer, u.achievement_peace_level, u.achievement_combat_level, u.achievement_defense_easy, u.achievement_defense_simple, u.achievement_defense_average, u.achievement_defense_high, u.achievement_defense_heavy, u.achievement_defense_massive, u.achievement_defense_imperial, u.achievements_fleets_small, u.achievements_fleets_support, u.achievements_fleets_battle, u.achievements_fleets_destruction, u.achievements_fleets_seige, u.achievements_fleets_heavy, u.achievements_fleets_imperial, u.firstname, u.age, u.country, u.playstyle, u.city, u.skype, u.username, u.galaxy, u.system, u.planet, u.wons, u.loos, u.draws, u.kbmetal, u.kbcrystal, u.lostunits, u.desunits, u.ally_id, 
						p.name, 
						s.tech_rank, s.tech_points, s.ach_rank, s.ach_points, s.build_rank, s.build_points, s.defs_rank, s.defs_points, s.fleet_rank, s.fleet_points, s.total_rank, s.total_points, 
						a.ally_name 
						FROM ".USERS." u 
						INNER JOIN ".PLANETS." p ON p.id = u.id_planet 
						LEFT JOIN ".STATPOINTS." s ON s.id_owner = u.id AND s.stat_type = 1 
						LEFT JOIN ".ALLIANCE." a ON a.id = u.ally_id
						WHERE u.id = ".$PlayerID." AND u.universe = ".$UNI.";");

		$totalfights = $query['wons'] + $query['loos'] + $query['draws'];
		
		if ($totalfights == 0) {
			$siegprozent                = 0;
			$loosprozent                = 0;
			$drawsprozent               = 0;
		} else {
			$siegprozent                = 100 / $totalfights * $query['wons'];
			$loosprozent                = 100 / $totalfights * $query['loos'];
			$drawsprozent               = 100 / $totalfights * $query['draws'];
		}
		
		$statinfo	= $GLOBALS['DATABASE']->query("SELECT s.tech_rank, s.ach_rank, s.build_rank, s.defs_rank, s.fleet_rank, s.tech_old_rank, s.ach_old_rank, s.build_old_rank, s.defs_old_rank, s.fleet_old_rank, s.total_old_rank, s.total_rank FROM ".USERS." as u LEFT JOIN ".STATPOINTS." as s ON s.id_owner = u.id AND s.stat_type = '1' WHERE id = ".$USER['id'].";");
		while ($game = $GLOBALS['DATABASE']->fetch_array($statinfo)) {
		$ranking	= $game['total_old_rank'] - $game['total_rank'];
		$ranking1	= $game['tech_old_rank'] - $game['tech_rank'];
		$ranking2	= $game['build_old_rank'] - $game['build_rank'];
		$ranking3	= $game['defs_old_rank'] - $game['defs_rank'];
		$ranking4	= $game['fleet_old_rank'] - $game['fleet_rank'];
		$ranking5	= $game['ach_old_rank'] - $game['ach_rank'];
		
		if($ranking == 0){
		$position = "<span style='color:#87CEEB'>(*)</span>";
		}elseif($ranking < 0){
		$position = "<span style='color:red'>(".$ranking.")</span>";
		}elseif ($ranking > 0){
		$position = "<span style='color:green'>(+".$ranking.")</span>";
		}
		
		if($ranking1 == 0){
		$position1 = "<span style='color:#87CEEB'>(*)</span>";
		}elseif($ranking1 < 0){
		$position1 = "<span style='color:red'>(".$ranking1.")</span>";
		}elseif ($ranking1 > 0){
		$position1 = "<span style='color:green'>(+".$ranking1.")</span>";
		}
		
		if($ranking2 == 0){
		$position2 = "<span style='color:#87CEEB'>(*)</span>";
		}elseif($ranking2 < 0){
		$position2 = "<span style='color:red'>(".$ranking2.")</span>";
		}elseif ($ranking2){
		$position2 = "<span style='color:green'>(+".$ranking2.")</span>";
		}
		
		if($ranking3 == 0){
		$position3 = "<span style='color:#87CEEB'>(*)</span>";
		}elseif($ranking3 < 0){
		$position3 = "<span style='color:red'>(".$ranking3.")</span>";
		}elseif ($ranking3 > 0){
		$position3 = "<span style='color:green'>(+".$ranking3.")</span>";
		}
		
		if($ranking4 == 0){
		$position4 = "<span style='color:#87CEEB'>(*)</span>";
		}elseif($ranking4 < 0){
		$position4 = "<span style='color:red'>(".$ranking4.")</span>";
		}elseif ($ranking4 > 0){
		$position4 = "<span style='color:green'>(+".$ranking4.")</span>";
		}
		
		if($ranking5 == 0){
		$position5 = "<span style='color:#87CEEB'>(*)</span>";
		}elseif($ranking5 < 0){
		$position5 = "<span style='color:red'>(".$ranking5.")</span>";
		}elseif ($ranking5 > 0){
		$position5 = "<span style='color:green'>(+".$ranking5.")</span>";
		}
		}
	
		

		$this->tplObj->assign_vars(array(	
			'rankInfo'					=> $position,
			'rankInfo1'					=> $position1,
			'rankInfo2'					=> $position2,
			'rankInfo3'					=> $position3,
			'rankInfo4'					=> $position4,
			'rankInfo5'					=> $position5,
			'id'			=> $PlayerID,
			'yourid'		=> $USER['id'],
			'name'			=> $query['username'],
			'firstname'			=> $query['firstname'],
			'age'			=> $query['age'],
			'country'			=> $query['country'],
			'playstyle'			=> $query['playstyle'],
			'city'			=> $query['city'],
			'skype'			=> $query['skype'],
			'homeplanet'	=> $query['name'],
			'galaxy'		=> $query['galaxy'],
			'system'		=> $query['system'],
			'planet'		=> $query['planet'],
			'allyid'		=> $query['ally_id'],
			
			'achievement_peace_level'		=> $query['achievement_peace_level'],
			'achievement_combat_level'		=> $query['achievement_combat_level'],
			'achievements_misc_fighter'		=> $query['achievements_misc_fighter'],
'achievements_misc_destructor'		=> $query['achievements_misc_destructor'],
'achievements_misc_moons'		=> $query['achievements_misc_moons'],
'achievements_misc_hostal'		=> $query['achievements_misc_hostal'],
'achievements_misc_expe'		=> $query['achievements_misc_expe'],
'achievements_misc_seeker'		=> $query['achievements_misc_seeker'],
'achievements_misc_upgrades'		=> $query['achievements_misc_upgrades'],
'achievements_misc_integrator'		=> $query['achievements_misc_integrator'],


			'achievement_build_metal'		=> $query['achievement_build_metal'],
'achievement_build_crystal'		=> $query['achievement_build_crystal'],
'achievement_build_deuterium'		=> $query['achievement_build_deuterium'],
'achievement_build_light'		=> $query['achievement_build_light'],
'achievement_build_medium'		=> $query['achievement_build_medium'],
'achievement_build_heavy'		=> $query['achievement_build_heavy'],
'achievement_build_university'		=> $query['achievement_build_university'],
'achievement_build_moon'		=> $query['achievement_build_moon'],
'achievement_build_phalanx'		=> $query['achievement_build_phalanx'],
'achievement_build_terraformer'		=> $query['achievement_build_terraformer'],
			'achievement_defense_easy'		=> $query['achievement_defense_easy'],
'achievement_defense_simple'		=> $query['achievement_defense_simple'],
'achievement_defense_average'		=> $query['achievement_defense_average'],
'achievement_defense_high'		=> $query['achievement_defense_high'],
'achievement_defense_heavy'		=> $query['achievement_defense_heavy'],
'achievement_defense_massive'		=> $query['achievement_defense_massive'],
'achievement_defense_imperial'		=> $query['achievement_defense_imperial'],
'achievements_fleets_small'		=> $query['achievements_fleets_small'],
'achievements_fleets_support'		=> $query['achievements_fleets_support'],
'achievements_fleets_battle'		=> $query['achievements_fleets_battle'],
'achievements_fleets_destruction'		=> $query['achievements_fleets_destruction'],
'achievements_fleets_seige'		=> $query['achievements_fleets_seige'],
'achievements_fleets_heavy'		=> $query['achievements_fleets_heavy'],
'achievements_fleets_imperial'		=> $query['achievements_fleets_imperial'],
			
			'tech_rank'     => pretty_number($query['tech_rank']),
			'tech_points'   => pretty_number($query['tech_points']),
			'ach_rank'     => pretty_number($query['ach_rank']),
			'ach_points'   => pretty_number($query['ach_points']),
			'build_rank'    => pretty_number($query['build_rank']),
			'build_points'  => pretty_number($query['build_points']),
			'defs_rank'     => pretty_number($query['defs_rank']),
			'defs_points'   => pretty_number($query['defs_points']),
			'fleet_rank'    => pretty_number($query['fleet_rank']),
			'fleet_points'  => pretty_number($query['fleet_points']),
			'total_rank'    => pretty_number($query['total_rank']),
			'total_points'  => pretty_number($query['total_points']),
			'allyname'		=> $query['ally_name'],
			'playerdestory' => sprintf($LNG['pl_destroy'], $query['username']),
			'wons'          => pretty_number($query['wons']),
			'loos'          => pretty_number($query['loos']),
			'draws'         => pretty_number($query['draws']),
			'kbmetal'       => pretty_number($query['kbmetal']),
			'kbcrystal'     => pretty_number($query['kbcrystal']),
			'lostunits'     => pretty_number($query['lostunits']),
			'desunits'      => pretty_number($query['desunits']),
			'totalfights'   => pretty_number($totalfights),
			'siegprozent'   => round($siegprozent, 2),
			'loosprozent'   => round($loosprozent, 2),
			'drawsprozent'  => round($drawsprozent, 2),
		));
		
		$this->display('page.playerCard.default.tpl');
	}
}