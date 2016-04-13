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
 * You should have '.$LNG['ach_receive'].' a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package 2Moons
 * @author Jan Kröpke <info@2moons.cc>
 * @copyright 2012 Jan Kröpke <info@2moons.cc>
 * @license http://www.gnu.org/licenses/gpl.html GNU GPLv3 License
 * @version 1.7.3 (2013-05-19)
 * @info $Id: class.AbstractPage.php 2643 2013-03-26 17:13:31Z slaver7 $
 * @link http://2moons.cc/
 */

abstract class AbstractPage 
{
	protected $tplObj;
	protected $ecoObj;
	protected $window;
	protected $disableEcoSystem = false;
	
	protected function __construct() {
		
		if(!AJAX_REQUEST)
		{
			$this->setWindow('full');
			if(!$this->disableEcoSystem)
			{
				$this->ecoObj	= new ResourceUpdate();
				$this->ecoObj->CalcResource();
			}
			$this->initTemplate();
		} else {
			$this->setWindow('ajax');
		}
	}
	
	protected function initTemplate() {
		if(isset($this->tplObj))
			return true;
			
		$this->tplObj	= new template;
		list($tplDir)	= $this->tplObj->getTemplateDir();
		$this->tplObj->setTemplateDir($tplDir.'game/');
		return true;
	}
	
	protected function setWindow($window) {
		$this->window	= $window;
	}
		
	protected function getWindow() {
		return $this->window;
	}
	
	protected function getQueryString() {
		$queryString	= array();
		$page			= HTTP::_GP('page', '');
		
		if(!empty($page)) {
			$queryString['page']	= $page;
		}
		
		$mode			= HTTP::_GP('mode', '');
		if(!empty($mode)) {
			$queryString['mode']	= $mode;
		}
		
		return http_build_query($queryString);
	}
	
	protected function getCronjobsTodo()
	{
		require_once 'includes/classes/Cronjob.class.php';
		
		$this->tplObj->assign_vars(array(	
			'cronjobs'		=> Cronjob::getNeedTodoExecutedJobs()
		));
	}
	
	protected function getNavigationData() 
    {
		global $PLANET, $LNG, $USER, $THEME, $resource, $reslist;
		
		$buscarTick = $GLOBALS['DATABASE']->query("SELECT tick FROM ".CONFIG."");
		$tickatual = $GLOBALS['DATABASE']->fetch_array($buscarTick);
		$tickatual = $tickatual['tick'];
		
		if($PLANET[$resource[43]] > 0) {
			$this->tplObj->loadscript("gate.js");
		}
		
		$this->tplObj->loadscript("topnav.js");
			$this->tplObj->loadscript("planetmenu.js");
		$PlanetSelect	= array();
		
		if(isset($USER['PLANETS'])) {
			$USER['PLANETS']	= getPlanets($USER);
		}
		
		foreach($USER['PLANETS'] as $CurPlanetID => $PlanetQuery)
		{
			$PlanetSelect[$PlanetQuery['id']]	= $PlanetQuery['name'].(($PlanetQuery['planet_type'] == 3) ? " (" . $LNG['fcm_moon'] . ")":"")." [".$PlanetQuery['galaxy'].":".$PlanetQuery['system'].":".$PlanetQuery['planet']."]";
		} 

		
		$resourceTable	= array();
		$resourceSpeed	= Config::get('resource_multiplier');
		foreach($reslist['resstype'][1] as $resourceID)
		{
			$resourceTable[$resourceID]['name']			= $resource[$resourceID];
			$resourceTable[$resourceID]['current']		= $PLANET[$resource[$resourceID]];
			$resourceTable[$resourceID]['max']			= $PLANET[$resource[$resourceID].'_max'];
			$resourceTable[$resourceID]['percent']			= round($PLANET[$resource[$resourceID]] * 100 / $PLANET[$resource[$resourceID].'_max']);
			
			
			if($PLANET['planet_type'] == 1){
			$resourceTable[$resourceID]['information']			= pretty_number($PLANET[$resource[$resourceID].'_perhour']+ Config::get($resource[$resourceID].'_basic_income') * $resourceSpeed);
			$resourceTable[$resourceID]['informationd']			= pretty_number(($PLANET[$resource[$resourceID].'_perhour']+ Config::get($resource[$resourceID].'_basic_income') * $resourceSpeed) *24);
			$resourceTable[$resourceID]['informationz']			= pretty_number(($PLANET[$resource[$resourceID].'_perhour']+ Config::get($resource[$resourceID].'_basic_income') * $resourceSpeed) * 24 * 7);
			}else{
			$resourceTable[$resourceID]['information']			= 0;
			$resourceTable[$resourceID]['informationd']			= 0;
			$resourceTable[$resourceID]['informationz']			= 0;
			}
			if($USER['urlaubs_modus'] == 1 || $PLANET['planet_type'] != 1)
			{
				$resourceTable[$resourceID]['production']	= $PLANET[$resource[$resourceID].'_perhour'];
			}
			else
			{
				$resourceTable[$resourceID]['production']	= $PLANET[$resource[$resourceID].'_perhour'] + Config::get($resource[$resourceID].'_basic_income') * $resourceSpeed;
			}
		}

		foreach($reslist['resstype'][2] as $resourceID)
		{
			$resourceTable[$resourceID]['name']			= $resource[$resourceID];
			$resourceTable[$resourceID]['used']			= $PLANET[$resource[$resourceID].'_used'];
			$resourceTable[$resourceID]['max']			= $PLANET[$resource[$resourceID]];
			$resourceTable[$resourceID]['used1']			= abs($PLANET[$resource[$resourceID].'_used']);
			
			
			if($PLANET[$resource[$resourceID]] == 0){
			$resourceTable[$resourceID]['percent'] = 0;
			$resourceTable[$resourceID]['percenta'] = 0;
			}else{
			$resourceTable[$resourceID]['percent']			= 100 / $PLANET[$resource[$resourceID]] * ($PLANET[$resource[$resourceID]] - abs($PLANET[$resource[$resourceID].'_used'])) / 2;
			$resourceTable[$resourceID]['percenta']			= abs(100 / $PLANET[$resource[$resourceID]] * ($PLANET[$resource[$resourceID]] - abs($PLANET[$resource[$resourceID].'_used'])) / 2);
			}

		}

		foreach($reslist['resstype'][3] as $resourceID)
		{
			$resourceTable[$resourceID]['name']			= $resource[$resourceID];
			$resourceTable[$resourceID]['current']		= $USER[$resource[$resourceID]];
			
			
			
			
		}

		$themeSettings	= $THEME->getStyleSettings();
		
		$this->tplObj->assign_vars(array(	
			'PlanetSelect'		=> $PlanetSelect,
			'new_message' 		=> $USER['messages'],
			'vacation'			=> $USER['urlaubs_modus'] ? _date($LNG['php_tdformat'], $USER['urlaubs_until'], $USER['timezone']) : false,
			'delete'			=> $USER['db_deaktjava'] ? sprintf($LNG['tn_delete_mode'], _date($LNG['php_tdformat'], $USER['db_deaktjava'] + (Config::get('del_user_manually') * 86400)), $USER['timezone']) : false,
			'darkmatter'		=> $USER['darkmatter'],
			'antimatte'		=> $USER['antimatter'],
			'antimatter'		=> pretty_number($USER['antimatter']),
			'darkmatte'		=> pretty_number($USER['darkmatter']),
			'current_pid'		=> $PLANET['id'],
			'image'				=> $PLANET['image'],
			'resourceTable'		=> $resourceTable,
			'shortlyNumber'		=> $themeSettings['TOPNAV_SHORTLY_NUMBER'],
			'closed'			=> !Config::get('game_disable'),
			'hasBoard'			=> filter_var(Config::get('forum_url'), FILTER_VALIDATE_URL, FILTER_FLAG_SCHEME_REQUIRED),
			'hasAdminAccess'	=> isset($_SESSION['admin_login']),
			'servertime'				=> _date("M D d H:i:s", TIMESTAMP, $USER['timezone']),
			'tickatual'					=> $tickatual,
			'AUPLANETS'				=> $PLANET['name'],
			'AUGAL'				=> $PLANET['galaxy'],
			'AUST'				=> $PLANET['system'],
			'AUPLA'				=> $PLANET['planet'],
			'bonus_timer'				=> $USER['bonus_timer'],
			'usr_id'				=> $USER['id'],
			'TIME'				=>TIMESTAMP,
			'premium' => IsPremiumUser($USER),
		));
	}
	
	protected function getExperienceData() 
    {
		global $PLANET, $LNG, $USER, $THEME, $resource, $reslist, $CONF, $UNI, $ALLIANCE;
		
		$new_peace_experience_max =  $USER['experience_peace_max'] * $CONF['experience_multi'];
		if ($USER['experience_peace'] >= $USER['experience_peace_max']){
		$GLOBALS['DATABASE']->query("UPDATE ".USERS." set experience_peace = 0,`experience_peace_max` = ".$new_peace_experience_max.", `experience_peace_level` = `experience_peace_level` + '1', `academy_p` = `academy_p` + ".$USER['experience_peace_level']." where `id` = '".$USER['id']."';");
		if (($USER['experience_peace_level'] + 1) / 4 == $USER['peace_reward_fields'] + 5  ){
		$GLOBALS['DATABASE']->query("UPDATE ".USERS." set `peace_reward_fields` = `peace_reward_fields` + '5' WHERE `id` = '".$USER['id']."';");
		}
		if (($USER['experience_peace_level'] + 1) / 10 == $USER['peace_reward_slots'] + 1  ){
		$GLOBALS['DATABASE']->query("UPDATE ".USERS." set `peace_reward_slots` = `peace_reward_slots` + '1' WHERE `id` = '".$USER['id']."';");
		}
		if (($USER['experience_peace_level'] + 1) / 5 == $USER['peace_reward_golf'] + 2  ){
		$GLOBALS['DATABASE']->query("UPDATE ".USERS." set `peace_reward_golf` = `peace_reward_golf` + '2' WHERE `id` = '".$USER['id']."';");
		}

		}
		
		$new_combat_experience =  $USER['experience_combat'] - $USER['experience_combat_max'];
		$new_combat_experience_max =  $USER['experience_combat_max'] + 9560/2 ;
		if ($USER['experience_combat'] >= $USER['experience_combat_max']){
		$GLOBALS['DATABASE']->query("UPDATE ".USERS." set `experience_combat` = ".$new_combat_experience.", `experience_combat_max` = ".$new_combat_experience_max.", `experience_combat_level` = `experience_combat_level` + '1' where `id` = '".$USER['id']."';");
		if (($USER['experience_combat_level']+1)  == (($USER['combat_reward_deut'] * 3) +3)){
		$GLOBALS['DATABASE']->query("UPDATE ".USERS." set `combat_reward_deut` = `combat_reward_deut` + '1' WHERE `id` = '".$USER['id']."';");
		}
		if (($USER['experience_combat_level']+1)  == (($USER['combat_reward_expe'] * 5)+5)  ){
		$GLOBALS['DATABASE']->query("UPDATE ".USERS." set `combat_reward_expe` = `combat_reward_expe` + '1' WHERE `id` = '".$USER['id']."';");
		}
		if (($USER['experience_combat_level']+1)  == (($USER['combat_reward_bonus'] * 8)+8)  ){
		$GLOBALS['DATABASE']->query("UPDATE ".USERS." set `combat_reward_bonus` = `combat_reward_bonus` + '1' WHERE `id` = '".$USER['id']."';");
		}
		if (($USER['experience_combat_level']+1)  == (($USER['combat_reward_collider'] * 15)+15)  ){
		$GLOBALS['DATABASE']->query("UPDATE ".USERS." set `combat_reward_collider` = `combat_reward_collider` + '1' WHERE `id` = '".$USER['id']."';");
		}
		}
		if($UNI == 1){
		$peace_reward_am = 47;
		$peace_reward_points = 9;
		$next_points_peace = $peace_reward_points + ($USER['achievement_peace_level'] * $peace_reward_points);
		$next_am_peace = $peace_reward_am + ($USER['achievement_peace_level'] * $peace_reward_am);
		$next_level = $USER['achievement_peace_level'] + 1;
		if ($USER['experience_peace_level'] == (5 * $USER['achievement_peace_level']) + 5){
		$GLOBALS['DATABASE']->query("UPDATE ".USERS." set `achievement_peace_level` = `achievement_peace_level` + '1', antimatter = antimatter + ".$next_am_peace." where `id` = '".$USER['id']."';");
		$msg = '<img alt="" style="float:left; width:60px; margin-right:6px;" src="styles/images/achiev/ach_level.png">'.$LNG['ach_'.$LNG['ach_reached'].''].' <span class="achiev_mes_head">peace lvl. '.$next_level.'</span><br> '.$LNG['ach_receive'].':<br> '.$next_am_peace.' '.$LNG['tech'][922].' <br> '.$next_points_peace.' '.$LNG['ach_points'].'';
		SendSimpleMessage($USER['id'], '', TIMESTAMP, 4, 'System', 'Achievements', $msg);
		}
		
		$combat_reward_am = 125;
		$combat_reward_points = 13;
		$next_points_combat = $combat_reward_points + ($USER['achievement_combat_level'] * $combat_reward_points);
		$next_am_combat = $combat_reward_am + ($USER['achievement_combat_level'] * $combat_reward_am);
		$next_level = $USER['achievement_combat_level'] + 1;
		if ($USER['experience_combat_level'] == (5 * $USER['achievement_combat_level']) + 5){
		$GLOBALS['DATABASE']->query("UPDATE ".USERS." set `achievement_combat_level` = `achievement_combat_level` + '1', antimatter = antimatter + ".$next_am_combat." where `id` = '".$USER['id']."';");
		$msg = '<img alt="" style="float:left; width:60px; margin-right:6px;" src="styles/images/achiev/ach_level.png">'.$LNG['ach_reached'].': <span class="achiev_mes_head">combat lvl. '.$next_level.'</span><br> '.$LNG['ach_receive'].':<br> '.$next_am_combat.' '.$LNG['tech'][922].' <br> '.$next_points_combat.' '.$LNG['ach_points'].'';
		SendSimpleMessage($USER['id'], '', TIMESTAMP, 4, 'System', 'Achievements', $msg);
		}
		
		
		//ACHIEVEMENT TECH SPY
		$spy_reward_am = 37;
		$spy_reward_points = 8;
		$spy_reward_points = $spy_reward_points + ($USER['achievements_tech_spy'] * $spy_reward_points);
		$spy_reward_am = $spy_reward_am + ($USER['achievements_tech_spy'] * $spy_reward_am);
		$next_level = $USER['achievements_tech_spy'] + 1;
		if ($USER['spy_tech'] >= (3 * $USER['achievements_tech_spy']) + 3){
		$GLOBALS['DATABASE']->query("UPDATE ".USERS." set `achievements_tech_spy` = `achievements_tech_spy` + '1', antimatter = antimatter + ".$spy_reward_am." where `id` = '".$USER['id']."';");
		$msg = '<img alt="" style="float:left; width:60px; margin-right:6px;" src="styles/images/achiev/ach_spy_tech.png">'.$LNG['ach_reached'].': <span class="achiev_mes_head">spy lvl. '.$next_level.'</span><br> '.$LNG['ach_receive'].':<br> '.$spy_reward_am.' '.$LNG['tech'][922].' <br> '.$spy_reward_points.' '.$LNG['ach_points'].'';
		SendSimpleMessage($USER['id'], '', TIMESTAMP, 4, 'System', 'Achievements', $msg);
		}
		//END SPY ACHIEVEMENT
		//ACHIEVEMENT TECH HACKER
		$hacker_reward_am = 20;
		$hacker_reward_points = 11;
		$hacker_reward_points = $hacker_reward_points + ($USER['achievements_tech_hacker'] * $hacker_reward_points);
		$hacker_reward_am = $hacker_reward_am + ($USER['achievements_tech_hacker'] * $hacker_reward_am);
		$next_level = $USER['achievements_tech_hacker'] + 1;
		if ($USER['computer_tech'] >= (3 * $USER['achievements_tech_hacker']) + 3){
		$GLOBALS['DATABASE']->query("UPDATE ".USERS." set `achievements_tech_hacker` = `achievements_tech_hacker` + '1', antimatter = antimatter + ".$hacker_reward_am." where `id` = '".$USER['id']."';");
		$msg = '<img alt="" style="float:left; width:60px; margin-right:6px;" src="styles/images/achiev/ach_computer_tech.png">'.$LNG['ach_reached'].': <span class="achiev_mes_head">hacker lvl. '.$next_level.'</span><br> '.$LNG['ach_receive'].':<br> '.$hacker_reward_am.' '.$LNG['tech'][922].' <br> '.$hacker_reward_points.' '.$LNG['ach_points'].'';
		SendSimpleMessage($USER['id'], '', TIMESTAMP, 4, 'System', 'Achievements', $msg);
		}
		//END HACKER ACHIEVEMENT
		//ACHIEVEMENT TECH INVINCIBLE
		$invincible_reward_am = 40;
		$invincible_reward_points = 9;
		$invincible_reward_points = $invincible_reward_points + ($USER['achievements_tech_invincible'] * $invincible_reward_points);
		$invincible_reward_am = $invincible_reward_am + ($USER['achievements_tech_invincible'] * $invincible_reward_am);
		$next_level = $USER['achievements_tech_invincible'] + 1;
		if ($USER['military_tech'] >= (2 * $USER['achievements_tech_invincible']) + 2 && $USER['defence_tech'] >= (2 * $USER['achievements_tech_invincible']) + 2 && $USER['shield_tech'] >= (2 * $USER['achievements_tech_invincible']) + 2){
		$GLOBALS['DATABASE']->query("UPDATE ".USERS." set `achievements_tech_invincible` = `achievements_tech_invincible` + '1', antimatter = antimatter + ".$invincible_reward_am." where `id` = '".$USER['id']."';");
		$msg = '<img alt="" style="float:left; width:60px; margin-right:6px;" src="styles/images/achiev/ach_war_tech.png">'.$LNG['ach_reached'].': <span class="achiev_mes_head">invincible lvl. '.$next_level.'</span><br> '.$LNG['ach_receive'].':<br> '.$invincible_reward_am.' '.$LNG['tech'][922].' <br> '.$invincible_reward_points.' '.$LNG['ach_points'].'';
		SendSimpleMessage($USER['id'], '', TIMESTAMP, 4, 'System', 'Achievements', $msg);
		}
		//END INVINCIBLE ACHIEVEMENT
		//ACHIEVEMENT TECH ASTROPHYSIQ
		$expedition_reward_am = 45;
		$expedition_reward_points = 15;
		$expedition_reward_points = $expedition_reward_points + ($USER['achievements_tech_expedition'] * $expedition_reward_points);
		$expedition_reward_am = $expedition_reward_am + ($USER['achievements_tech_expedition'] * $expedition_reward_am);
		$next_level = $USER['achievements_tech_expedition'] + 1;
		if ($USER['expedition_tech'] >= (4 * $USER['achievements_tech_expedition']) + 4){
		$GLOBALS['DATABASE']->query("UPDATE ".USERS." set `achievements_tech_expedition` = `achievements_tech_expedition` + '1', antimatter = antimatter + ".$expedition_reward_am." where `id` = '".$USER['id']."';");
		$msg = '<img alt="" style="float:left; width:60px; margin-right:6px;" src="styles/images/achiev/ach_expedition_tech.png">'.$LNG['ach_reached'].': <span class="achiev_mes_head">expeditioners lvl. '.$next_level.'</span><br> '.$LNG['ach_receive'].':<br> '.$expedition_reward_am.' '.$LNG['tech'][922].' <br> '.$expedition_reward_points.' '.$LNG['ach_points'].'';
		SendSimpleMessage($USER['id'], '', TIMESTAMP, 4, 'System', 'Achievements', $msg);
		}
		//END ASTROPHYSIQ ACHIEVEMENT
		//ACHIEVEMENT TECH GRAVITON
		$graviton_reward_am = 75;
		$graviton_reward_points = 40;
		$graviton_reward_points = $graviton_reward_points + ($USER['achievements_tech_graviton'] * $graviton_reward_points);
		$graviton_reward_am = $graviton_reward_am + ($USER['achievements_tech_graviton'] * $graviton_reward_am);
		$next_level = $USER['achievements_tech_graviton'] + 1;
		if ($USER['graviton_tech'] >= (1 * $USER['achievements_tech_graviton']) + 1){
		$GLOBALS['DATABASE']->query("UPDATE ".USERS." set `achievements_tech_graviton` = `achievements_tech_graviton` + '1', antimatter = antimatter + ".$graviton_reward_am." where `id` = '".$USER['id']."';");
		$msg = '<img alt="" style="float:left; width:60px; margin-right:6px;" src="styles/images/achiev/ach_gravity_tech.png">'.$LNG['ach_reached'].': <span class="achiev_mes_head">graviton lvl. '.$next_level.'</span><br> '.$LNG['ach_receive'].':<br> '.$graviton_reward_am.' '.$LNG['tech'][922].' <br> '.$graviton_reward_points.' '.$LNG['ach_points'].'';
		SendSimpleMessage($USER['id'], '', TIMESTAMP, 4, 'System', 'Achievements', $msg);
		}
		//END GRAVITON ACHIEVEMENT
		//ACHIEVEMENT TECH POWER TOOLS
		$power_reward_am = 50;
		$power_reward_points = 25;
		$power_reward_points = $power_reward_points + ($USER['achievements_tech_power'] * $power_reward_points);
		$power_reward_am = $power_reward_am + ($USER['achievements_tech_power'] * $power_reward_am);
		$next_level = $USER['achievements_tech_power'] + 1;
		if ($USER['laser_tech'] >= (2 * $USER['achievements_tech_power']) + 2 && $USER['ionic_tech'] >= (2 * $USER['achievements_tech_power']) + 2 && $USER['buster_tech'] >= (2 * $USER['achievements_tech_power']) + 2){
		$GLOBALS['DATABASE']->query("UPDATE ".USERS." set `achievements_tech_power` = `achievements_tech_power` + '1', antimatter = antimatter + ".$power_reward_am." where `id` = '".$USER['id']."';");
		$msg = '<img alt="" style="float:left; width:60px; margin-right:6px;" src="styles/images/achiev/ach_gun_tech.png">'.$LNG['ach_reached'].': <span class="achiev_mes_head">power tools lvl. '.$next_level.'</span><br> '.$LNG['ach_receive'].':<br> '.$power_reward_am.' '.$LNG['tech'][922].' <br> '.$power_reward_points.' '.$LNG['ach_points'].'';
		SendSimpleMessage($USER['id'], '', TIMESTAMP, 4, 'System', 'Achievements', $msg);
		}
		//END POWER TOOLS ACHIEVEMENT
		//ACHIEVEMENT TECH ENERGETICS
		$energy_reward_am = 25;
		$energy_reward_points = 32;
		$energy_reward_points = $energy_reward_points + ($USER['achievements_tech_energy'] * $energy_reward_points);
		$energy_reward_am = $energy_reward_am + ($USER['achievements_tech_energy'] * $energy_reward_am);
		$next_level = $USER['achievements_tech_energy'] + 1;
		if ($USER['energy_tech'] >= (3 * $USER['achievements_tech_energy']) + 3){
		$GLOBALS['DATABASE']->query("UPDATE ".USERS." set `achievements_tech_energy` = `achievements_tech_energy` + '1', antimatter = antimatter + ".$energy_reward_am." where `id` = '".$USER['id']."';");
		$msg = '<img alt="" style="float:left; width:60px; margin-right:6px;" src="styles/images/achiev/ach_energy_tech.png">'.$LNG['ach_reached'].': <span class="achiev_mes_head">energetic lvl. '.$next_level.'</span><br> '.$LNG['ach_receive'].':<br> '.$energy_reward_am.' '.$LNG['tech'][922].' <br> '.$energy_reward_points.' '.$LNG['ach_points'].'';
		SendSimpleMessage($USER['id'], '', TIMESTAMP, 4, 'System', 'Achievements', $msg);
		}
		//END ENERGETICS ACHIEVEMENT
		//ACHIEVEMENT TECH BROTHERHOOD
		$brotherhood_reward_am = 20;
		$brotherhood_reward_points = 10;
		$brotherhood_reward_points = $brotherhood_reward_points + ($USER['achievements_tech_brotherhood'] * $brotherhood_reward_points);
		$brotherhood_reward_am = $brotherhood_reward_am + ($USER['achievements_tech_brotherhood'] * $brotherhood_reward_am);
		$next_level = $USER['achievements_tech_brotherhood'] + 1;
		if ($USER['brotherhood'] >= (2 * $USER['achievements_tech_brotherhood']) + 2){
		$GLOBALS['DATABASE']->query("UPDATE ".USERS." set `achievements_tech_brotherhood` = `achievements_tech_brotherhood` + '1', antimatter = antimatter + ".$brotherhood_reward_am." where `id` = '".$USER['id']."';");
		$msg = '<img alt="" style="float:left; width:60px; margin-right:6px;" src="styles/images/achiev/ach_bank_ally_tech.png">'.$LNG['ach_reached'].': <span class="achiev_mes_head">brotherhood lvl. '.$next_level.'</span><br> '.$LNG['ach_receive'].':<br> '.$brotherhood_reward_am.' '.$LNG['tech'][922].' <br> '.$brotherhood_reward_points.' '.$LNG['ach_points'].'';
		SendSimpleMessage($USER['id'], '', TIMESTAMP, 4, 'System', 'Achievements', $msg);
		}
		//END BROTHERHOOD ACHIEVEMENT
		//ACHIEVEMENT TECH SPEED
		$speed_reward_am = 40;
		$speed_reward_points = 20;
		$speed_reward_points = $speed_reward_points + ($USER['achievements_tech_speed'] * $speed_reward_points);
		$speed_reward_am = $speed_reward_am + ($USER['achievements_tech_speed'] * $speed_reward_am);
		$next_level = $USER['achievements_tech_speed'] + 1;
		if ($USER['combustion_tech'] >= (2 * $USER['achievements_tech_speed']) + 2 && $USER['impulse_motor_tech'] >= (2 * $USER['achievements_tech_speed']) + 2 && $USER['hyperspace_motor_tech'] >= (2 * $USER['achievements_tech_speed']) + 2){
		$GLOBALS['DATABASE']->query("UPDATE ".USERS." set `achievements_tech_speed` = `achievements_tech_speed` + '1', antimatter = antimatter + ".$speed_reward_am." where `id` = '".$USER['id']."';");
		$msg = '<img alt="" style="float:left; width:60px; margin-right:6px;" src="styles/images/achiev/ach_motor_tech.png">'.$LNG['ach_reached'].': <span class="achiev_mes_head">speed lvl. '.$next_level.'</span><br> '.$LNG['ach_receive'].':<br> '.$speed_reward_am.' '.$LNG['tech'][922].' <br> '.$speed_reward_points.' '.$LNG['ach_points'].'';
		SendSimpleMessage($USER['id'], '', TIMESTAMP, 4, 'System', 'Achievements', $msg);
		}
		//END SPEED ACHIEVEMENT
		//ACHIEVEMENT TECH GEOLOGIST
		$geologist_reward_am = 20;
		$geologist_reward_points = 10;
		$geologist_reward_points = $geologist_reward_points + ($USER['achievements_tech_geologist'] * $geologist_reward_points);
		$geologist_reward_am = $geologist_reward_am + ($USER['achievements_tech_geologist'] * $geologist_reward_am);
		$next_level = $USER['achievements_tech_geologist'] + 1;
		if ($USER['metal_proc_tech'] >= (2 * $USER['achievements_tech_geologist']) + 2 && $USER['crystal_proc_tech'] >= (2 * $USER['achievements_tech_geologist']) + 2 && $USER['deuterium_proc_tech'] >= (2 * $USER['achievements_tech_geologist']) + 2){
		$GLOBALS['DATABASE']->query("UPDATE ".USERS." set `achievements_tech_geologist` = `achievements_tech_geologist` + '1', antimatter = antimatter + ".$geologist_reward_am." where `id` = '".$USER['id']."';");
		$msg = '<img alt="" style="float:left; width:60px; margin-right:6px;" src="styles/images/achiev/ach_mining_tech.png">'.$LNG['ach_reached'].': <span class="achiev_mes_head">geologist lvl. '.$next_level.'</span><br> '.$LNG['ach_receive'].':<br> '.$geologist_reward_am.' '.$LNG['tech'][922].' <br> '.$geologist_reward_points.' '.$LNG['ach_points'].'';
		SendSimpleMessage($USER['id'], '', TIMESTAMP, 4, 'System', 'Achievements', $msg);
		}
		//END GEOLOGIST ACHIEVEMENT
		
		   //ACHIEVEMENT DEF EASY
		$total  = $GLOBALS['DATABASE']->query("SELECT SUM(misil_launcher) as misil_launcher, SUM(small_laser) as small_laser from `uni1_planets` where `id_owner` = '".$USER['id']."' ;");
		$total  = $GLOBALS['DATABASE']->fetch_array($total);
		$easy_reward_points = 15;
		$easy_reward_am = 17;
		$next_level = $USER['achievement_defense_easy'] + 1;
		$easy_reward_am =  ($USER['achievement_defense_easy'] * $easy_reward_am);
		$easy_reward_points = $easy_reward_points + ($USER['achievement_defense_easy'] * $easy_reward_points);
		if ($total['misil_launcher'] >= $USER['achievement_def_1']*2 && $total['small_laser'] >= $USER['achievement_def_1']*2 && $next_level < 151){
		$GLOBALS['DATABASE']->query("UPDATE ".USERS." set achievement_def_1 = ".($USER['achievement_def_1']*2)." , `achievement_defense_easy` = `achievement_defense_easy` + '1', antimatter = antimatter + ".$easy_reward_am." where `id` = '".$USER['id']."';");
		//$GLOBALS['DATABASE']->query("UPDATE ".USERS." set achievement_def_1 = ".($USER['achievement_def_1']*2)." , `achievement_defense_easy` = `achievement_defense_easy` + '1' where `id` = '".$USER['id']."';");
		$msg = '<img alt="" style="float:left; width:60px; margin-right:6px;" src="styles/images/achiev/ach_light_def.png">'.$LNG['ach_reached'].': <span class="achiev_mes_head">easy defense lvl. '.$next_level.'</span><br> '.$LNG['ach_receive'].':<br> '.$easy_reward_am.' '.$LNG['tech'][922].' <br> '.$easy_reward_points.' '.$LNG['ach_points'].'';
		SendSimpleMessage($USER['id'], '', TIMESTAMP, 4, 'System', 'Achievements', $msg);
		}
		//END DEF ACHIEVEMENT
		 //ACHIEVEMENT DEF SIMPLE
		$total  = $GLOBALS['DATABASE']->query("SELECT SUM(big_laser) as big_laser, SUM(ionic_canyon) as ionic_canyon from `uni1_planets` where `id_owner` = '".$USER['id']."' ;");
		$total  = $GLOBALS['DATABASE']->fetch_array($total);
		$simple_reward_points = 18;
		$simple_reward_am = 23;
		$next_level = $USER['achievement_defense_simple'] + 1;
		$simple_reward_am =  ($USER['achievement_defense_simple'] * $simple_reward_am);
		$simple_reward_points = $simple_reward_points + ($USER['achievement_defense_simple'] * $simple_reward_points);
		if ($total['big_laser'] >= $USER['achievement_def_2']*2 && $total['ionic_canyon'] >= $USER['achievement_def_3']*2 && $next_level < 151){
		$GLOBALS['DATABASE']->query("UPDATE ".USERS." set achievement_def_2 = ".($USER['achievement_def_2']*2)." , achievement_def_3 = ".($USER['achievement_def_3']*2)." , `achievement_defense_simple` = `achievement_defense_simple` + '1', antimatter = antimatter + ".$simple_reward_am." where `id` = '".$USER['id']."';");
		//$GLOBALS['DATABASE']->query("UPDATE ".USERS." set achievement_def_2 = ".($USER['achievement_def_2']*2)." , achievement_def_3 = ".($USER['achievement_def_3']*2)." , `achievement_defense_simple` = `achievement_defense_simple` + '1' where `id` = '".$USER['id']."';");
		$msg = '<img alt="" style="float:left; width:60px; margin-right:6px;" src="styles/images/achiev/ach_easy_def.png">'.$LNG['ach_reached'].': <span class="achiev_mes_head">simple defense lvl. '.$next_level.'</span><br> '.$LNG['ach_receive'].':<br> '.$simple_reward_am.' '.$LNG['tech'][922].' <br> '.$simple_reward_points.' '.$LNG['ach_points'].'';
		SendSimpleMessage($USER['id'], '', TIMESTAMP, 4, 'System', 'Achievements', $msg);
		}
		//END SIMPLE ACHIEVEMENT
		//ACHIEVEMENT DEF AVERAGE
		$total  = $GLOBALS['DATABASE']->query("SELECT SUM(gauss_canyon) as gauss_canyon, SUM(buster_canyon) as buster_canyon from `uni1_planets` where `id_owner` = '".$USER['id']."' ;");
		$total  = $GLOBALS['DATABASE']->fetch_array($total);
		$average_reward_points = 25;
		$average_reward_am = 31;
		$next_level = $USER['achievement_defense_average'] + 1;
		$average_reward_am = ($USER['achievement_defense_average'] * $average_reward_am);
		$average_reward_points = $average_reward_points + ($USER['achievement_defense_average'] * $average_reward_points);
		if ($total['gauss_canyon'] >= $USER['achievement_def_4']*2 && $total['buster_canyon'] >= $USER['achievement_def_4']*2 && $next_level < 151){
		$GLOBALS['DATABASE']->query("UPDATE ".USERS." set achievement_def_4 = ".($USER['achievement_def_4']*2)." , `achievement_defense_average` = `achievement_defense_average` + '1', antimatter = antimatter + ".$average_reward_am." where `id` = '".$USER['id']."';");
		//$GLOBALS['DATABASE']->query("UPDATE ".USERS." set achievement_def_4 = ".($USER['achievement_def_4']*2)." , `achievement_defense_average` = `achievement_defense_average` + '1' where `id` = '".$USER['id']."';");
		$msg = '<img alt="" style="float:left; width:60px; margin-right:6px;" src="styles/images/achiev/ach_medium_def.png">'.$LNG['ach_reached'].': <span class="achiev_mes_head">Average defense lvl. '.$next_level.'</span><br> '.$LNG['ach_receive'].':<br> '.$average_reward_am.' '.$LNG['tech'][922].' <br> '.$average_reward_points.' '.$LNG['ach_points'].'';
		SendSimpleMessage($USER['id'], '', TIMESTAMP, 4, 'System', 'Achievements', $msg);
		}
		//END AVERAGE ACHIEVEMENT
		//ACHIEVEMENT DEF HIGH
		$total  = $GLOBALS['DATABASE']->query("SELECT SUM(hydrogen_gun) as hydrogen_gun, SUM(dora_gun) as dora_gun from `uni1_planets` where `id_owner` = '".$USER['id']."' ;");
		$total  = $GLOBALS['DATABASE']->fetch_array($total);
		$high_reward_points = 30;
		$high_reward_am = 36;
		$next_level = $USER['achievement_defense_high'] + 1;
		$high_reward_am =  ($USER['achievement_defense_high'] * $high_reward_am);
		$high_reward_points = $high_reward_points + ($USER['achievement_defense_high'] * $high_reward_points);
		if ($total['hydrogen_gun'] >= $USER['achievement_def_5']*2 && $total['dora_gun'] >= $USER['achievement_def_6']*2 && $next_level < 151){
		$GLOBALS['DATABASE']->query("UPDATE ".USERS." set achievement_def_5 = ".($USER['achievement_def_5']*2)." , achievement_def_6 = ".($USER['achievement_def_6']*2)." , `achievement_defense_high` = `achievement_defense_high` + '1', antimatter = antimatter + ".$high_reward_am." where `id` = '".$USER['id']."';");
		//$GLOBALS['DATABASE']->query("UPDATE ".USERS." set achievement_def_5 = ".($USER['achievement_def_5']*2)." , achievement_def_6 = ".($USER['achievement_def_6']*2)." , `achievement_defense_high` = `achievement_defense_high` + '1' where `id` = '".$USER['id']."';");
		$msg = '<img alt="" style="float:left; width:60px; margin-right:6px;" src="styles/images/achiev/ach_high_def.png">'.$LNG['ach_reached'].': <span class="achiev_mes_head">high defense lvl. '.$next_level.'</span><br> '.$LNG['ach_receive'].':<br> '.$high_reward_am.' '.$LNG['tech'][922].' <br> '.$high_reward_points.' '.$LNG['ach_points'].'';
		SendSimpleMessage($USER['id'], '', TIMESTAMP, 4, 'System', 'Achievements', $msg); 
		}
		//END HIGH ACHIEVEMENT
		//ACHIEVEMENT DEF HEAVY
		$total  = $GLOBALS['DATABASE']->query("SELECT SUM(graviton_canyon) as graviton_canyon, SUM(photon_cannon) as photon_cannon from `uni1_planets` where `id_owner` = '".$USER['id']."' ;");
		$total  = $GLOBALS['DATABASE']->fetch_array($total);
		$heavy_reward_points = 37;
		$heavy_reward_am = 41;
		$next_level = $USER['achievement_defense_heavy'] + 1;
		$heavy_reward_am = ($USER['achievement_defense_heavy'] * $heavy_reward_am);
		$heavy_reward_points = $heavy_reward_points + ($USER['achievement_defense_heavy'] * $heavy_reward_points);
		if ($total['graviton_canyon'] >= $USER['achievement_def_7']*2 && $total['photon_cannon'] >= $USER['achievement_def_8']*2 && $next_level < 151){
		$GLOBALS['DATABASE']->query("UPDATE ".USERS." set achievement_def_7 = ".($USER['achievement_def_7']*2)." , achievement_def_8 = ".($USER['achievement_def_8']*2)." , `achievement_defense_heavy` = `achievement_defense_heavy` + '1', antimatter = antimatter + ".$heavy_reward_am." where `id` = '".$USER['id']."';");
		//$GLOBALS['DATABASE']->query("UPDATE ".USERS." set achievement_def_7 = ".($USER['achievement_def_7']*2)." , achievement_def_8 = ".($USER['achievement_def_8']*2)." , `achievement_defense_heavy` = `achievement_defense_heavy` + '1' where `id` = '".$USER['id']."';");
		$msg = '<img alt="" style="float:left; width:60px; margin-right:6px;" src="styles/images/achiev/ach_heavy_def.png">'.$LNG['ach_reached'].': <span class="achiev_mes_head">heavy defense lvl. '.$next_level.'</span><br> '.$LNG['ach_receive'].':<br> '.$heavy_reward_am.' '.$LNG['tech'][922].' <br> '.$heavy_reward_points.' '.$LNG['ach_points'].'';
		SendSimpleMessage($USER['id'], '', TIMESTAMP, 4, 'System', 'Achievements', $msg);
		}
		//END HEAVY ACHIEVEMENT
		//ACHIEVEMENT DEF MASSIVE
		$total  = $GLOBALS['DATABASE']->query("SELECT SUM(canyon) as canyon, SUM(quantum_gun) as quantum_gun from `uni1_planets` where `id_owner` = '".$USER['id']."' ;");
		$total  = $GLOBALS['DATABASE']->fetch_array($total);
		$massive_reward_points = 42;
		$massive_reward_am = 45;
		$next_level = $USER['achievement_defense_massive'] + 1;
		$massive_reward_am =  ($USER['achievement_defense_massive'] * $massive_reward_am);
		$massive_reward_points = $massive_reward_points + ($USER['achievement_defense_massive'] * $massive_reward_points);
		if ($total['canyon'] >= $USER['achievement_def_9']*2 && $total['quantum_gun'] >= $USER['achievement_def_10']*2 && $next_level < 151){
		$GLOBALS['DATABASE']->query("UPDATE ".USERS." set achievement_def_9 = ".($USER['achievement_def_9']*2)." , achievement_def_10 = ".($USER['achievement_def_10']*2)." , `achievement_defense_massive` = `achievement_defense_massive` + '1', antimatter = antimatter + ".$massive_reward_am." where `id` = '".$USER['id']."';");
		//$GLOBALS['DATABASE']->query("UPDATE ".USERS." set achievement_def_9 = ".($USER['achievement_def_9']*2)." , achievement_def_10 = ".($USER['achievement_def_10']*2)." , `achievement_defense_massive` = `achievement_defense_massive` + '1' where `id` = '".$USER['id']."';");
		$msg = '<img alt="" style="float:left; width:60px; margin-right:6px;" src="styles/images/achiev/ach_top_def.png">'.$LNG['ach_reached'].': <span class="achiev_mes_head">massive defense lvl. '.$next_level.'</span><br> '.$LNG['ach_receive'].':<br> '.$massive_reward_am.' '.$LNG['tech'][922].' <br> '.$massive_reward_points.' '.$LNG['ach_points'].'';
		SendSimpleMessage($USER['id'], '', TIMESTAMP, 4, 'System', 'Achievements', $msg);
		}
		//END MASSIVE ACHIEVEMENT
		//ACHIEVEMENT DEF IMPERIAL
		$total  = $GLOBALS['DATABASE']->query("SELECT SUM(proton_gun) as proton_gun, SUM(particle_emitter) as particle_emitter, SUM(lepton_gun) as lepton_gun from `uni1_planets` where `id_owner` = '".$USER['id']."' ;");
		$total  = $GLOBALS['DATABASE']->fetch_array($total);
		$imperial_reward_points = 47;
		$imperial_reward_am = 52;
		$next_level = $USER['achievement_defense_imperial'] + 1;
		$imperial_reward_am = ($USER['achievement_defense_imperial'] * $imperial_reward_am);
		$imperial_reward_points = $imperial_reward_points + ($USER['achievement_defense_massive'] * $imperial_reward_points);
		if ($total['proton_gun'] >= $USER['achievement_def_11']*2 && $USER['achievement_def_12']*2 && $total['lepton_gun'] >= $USER['achievement_def_13']*2 && $next_level < 151){
		$GLOBALS['DATABASE']->query("UPDATE ".USERS." set achievement_def_11 = ".($USER['achievement_def_11']*2)." , achievement_def_12 = ".($USER['achievement_def_12']*2)." , achievement_def_13 = ".($USER['achievement_def_13']*2)." ,`achievement_defense_imperial` = `achievement_defense_imperial` + '1', antimatter = antimatter + ".$imperial_reward_am." where `id` = '".$USER['id']."';");
	//	$GLOBALS['DATABASE']->query("UPDATE ".USERS." set achievement_def_11 = ".($USER['achievement_def_11']*2)." , achievement_def_12 = ".($USER['achievement_def_12']*2)." , achievement_def_13 = ".($USER['achievement_def_13']*2)." ,`achievement_defense_imperial` = `achievement_defense_imperial` + '1' where `id` = '".$USER['id']."';");
		$msg = '<img alt="" style="float:left; width:60px; margin-right:6px;" src="styles/images/achiev/ach_emperor_def.png">'.$LNG['ach_reached'].': <span class="achiev_mes_head">imperial defense lvl. '.$next_level.'</span><br> '.$LNG['ach_receive'].':<br> '.$imperial_reward_am.' '.$LNG['tech'][922].' <br> '.$imperial_reward_points.' '.$LNG['ach_points'].'';
		SendSimpleMessage($USER['id'], '', TIMESTAMP, 4, 'System', 'Achievements', $msg);
		}
		//END IMPERIAL ACHIEVEMENT
		
		  //ACHIEVEMENT FLEET SMALL
		$total  = $GLOBALS['DATABASE']->query("SELECT SUM(light_hunter) as light_hunter, SUM(heavy_hunter) as heavy_hunter from `uni1_planets` where `id_owner` = '".$USER['id']."' ;");
		$total  = $GLOBALS['DATABASE']->fetch_array($total);
		$small_reward_points = 15;
		$small_reward_am = 17;
		$next_level = $USER['achievements_fleets_small'] + 1;
		$small_reward_am = ($USER['achievements_fleets_small'] * $small_reward_am);
		$small_reward_points = $small_reward_points + ($USER['achievements_fleets_small'] * $small_reward_points);
		if ($total['light_hunter'] >= $USER['achievement_fleet_1']*2 && $total['heavy_hunter'] >= $USER['achievement_fleet_1']*2 && $next_level < 151) {
		$GLOBALS['DATABASE']->query("UPDATE ".USERS." set achievement_fleet_1 = ".($USER['achievement_fleet_1']*2)." , `achievements_fleets_small` = `achievements_fleets_small` + '1', antimatter = antimatter + ".$small_reward_am." where `id` = '".$USER['id']."';");
		//$GLOBALS['DATABASE']->query("UPDATE ".USERS." set achievement_fleet_1 = ".($USER['achievement_fleet_1']*2)." , `achievements_fleets_small` = `achievements_fleets_small` + '1' where `id` = '".$USER['id']."';");
		$msg = '<img alt="" style="float:left; width:60px; margin-right:6px;" src="styles/images/achiev/ach_emperor_def.png">'.$LNG['ach_reached'].': <span class="achiev_mes_head">small fighters lvl. '.$next_level.'</span><br> '.$LNG['ach_receive'].':<br> '.$small_reward_am.' '.$LNG['tech'][922].' <br> '.$small_reward_points.' '.$LNG['ach_points'].'';
		SendSimpleMessage($USER['id'], '', TIMESTAMP, 4, 'System', 'Achievements', $msg);
		}
		//END FLEET SMALL 
		//ACHIEVEMENT FLEET SUPPORT
		$total  = $GLOBALS['DATABASE']->query("SELECT SUM(crusher) as crusher, SUM(battle_ship) as battle_ship from `uni1_planets` where `id_owner` = '".$USER['id']."' ;");
		$total  = $GLOBALS['DATABASE']->fetch_array($total);
		$support_reward_points = 18;
		$support_reward_am = 23;
		$next_level = $USER['achievements_fleets_support'] + 1;
		$support_reward_am = ($USER['achievements_fleets_support'] * $support_reward_am);
		$support_reward_points = $support_reward_points + ($USER['achievements_fleets_support'] * $support_reward_points);
		if ($total['crusher'] >= $USER['achievement_fleet_2']*2 && $total['battle_ship'] >= $USER['achievement_fleet_2']*2 && $next_level < 151){
		//$GLOBALS['DATABASE']->query("UPDATE ".USERS." set achievement_fleet_2 = ".($USER['achievement_fleet_2']*2)." , `achievements_fleets_support` = `achievements_fleets_support` + '1' where `id` = '".$USER['id']."';");
		$GLOBALS['DATABASE']->query("UPDATE ".USERS." set achievement_fleet_2 = ".($USER['achievement_fleet_2']*2)." , `achievements_fleets_support` = `achievements_fleets_support` + '1', antimatter = antimatter + ".$support_reward_am." where `id` = '".$USER['id']."';");
		$msg = '<img alt="" style="float:left; width:60px; margin-right:6px;" src="styles/images/achiev/ach_emperor_def.png">'.$LNG['ach_reached'].': <span class="achiev_mes_head">support fleet lvl. '.$next_level.'</span><br> '.$LNG['ach_receive'].':<br> '.$support_reward_am.' '.$LNG['tech'][922].' <br> '.$support_reward_points.' '.$LNG['ach_points'].'';
		SendSimpleMessage($USER['id'], '', TIMESTAMP, 4, 'System', 'Achievements', $msg);
		}
		//END FLEET SUPPORT
		//ACHIEVEMENT BATTLE FLEET
		$total  = $GLOBALS['DATABASE']->query("SELECT SUM(destructor) as destructor, SUM(battleship) as battleship from `uni1_planets` where `id_owner` = '".$USER['id']."' ;");
		$total  = $GLOBALS['DATABASE']->fetch_array($total);
		$battle_reward_points = 25;
		$battle_reward_am = 31;
		$next_level = $USER['achievements_fleets_battle'] + 1;
		$battle_reward_am = ($USER['achievements_fleets_battle'] * $battle_reward_am);
		$battle_reward_points = $battle_reward_points + ($USER['achievements_fleets_battle'] * $battle_reward_points);
		if ($total['destructor'] >= $USER['achievement_fleet_3']*2 && $total['battleship'] >= $USER['achievement_fleet_3']*2 && $next_level < 151){
		//$GLOBALS['DATABASE']->query("UPDATE ".USERS." set achievement_fleet_3 = ".($USER['achievement_fleet_3']*2)." , `achievements_fleets_battle` = `achievements_fleets_battle` + '1', antimatter = antimatter + ".$battle_reward_am." where `id` = '".$USER['id']."';");
		$GLOBALS['DATABASE']->query("UPDATE ".USERS." set achievement_fleet_3 = ".($USER['achievement_fleet_3']*2)." , `achievements_fleets_battle` = `achievements_fleets_battle` + '1' where `id` = '".$USER['id']."';");
		$msg = '<img alt="" style="float:left; width:60px; margin-right:6px;" src="styles/images/achiev/ach_emperor_def.png">'.$LNG['ach_reached'].': <span class="achiev_mes_head">battle fleet lvl. '.$next_level.'</span><br> '.$LNG['ach_receive'].':<br> '.$battle_reward_am.' '.$LNG['tech'][922].' <br> '.$battle_reward_points.' '.$LNG['ach_points'].'';
		SendSimpleMessage($USER['id'], '', TIMESTAMP, 4, 'System', 'Achievements', $msg);
		}
		//END BATTLE FLEET 
		//ACHIEVEMENT DESTRUCTION CLASS
		$total  = $GLOBALS['DATABASE']->query("SELECT SUM(lune_noir) as lune_noir, SUM(galleon) as galleon from `uni1_planets` where `id_owner` = '".$USER['id']."' ;");
		$total  = $GLOBALS['DATABASE']->fetch_array($total);
		$destruction_reward_points = 30;
		$destruction_reward_am = 36;
		$next_level = $USER['achievements_fleets_destruction'] + 1;
		$destruction_reward_am = ($USER['achievements_fleets_destruction'] * $destruction_reward_am);
		$destruction_reward_points = $destruction_reward_points + ($USER['achievements_fleets_destruction'] * $destruction_reward_points);
		if ($total['lune_noir'] >= $USER['achievement_fleet_4']*2 && $total['galleon'] >= $USER['achievement_fleet_5']*2 && $next_level < 151){
		$GLOBALS['DATABASE']->query("UPDATE ".USERS." set achievement_fleet_4 = ".($USER['achievement_fleet_4']*2).", achievement_fleet_5 = ".($USER['achievement_fleet_5']*2).", `achievements_fleets_destruction` = `achievements_fleets_destruction` + '1', antimatter = antimatter + ".$destruction_reward_am." where `id` = '".$USER['id']."';");
		//$GLOBALS['DATABASE']->query("UPDATE ".USERS." set achievement_fleet_4 = ".($USER['achievement_fleet_4']*2).", achievement_fleet_5 = ".($USER['achievement_fleet_5']*2).", `achievements_fleets_destruction` = `achievements_fleets_destruction` + '1' where `id` = '".$USER['id']."';");
		$msg = '<img alt="" style="float:left; width:60px; margin-right:6px;" src="styles/images/achiev/ach_emperor_def.png">'.$LNG['ach_reached'].': <span class="achiev_mes_head">destruction class lvl. '.$next_level.'</span><br> '.$LNG['ach_receive'].':<br> '.$destruction_reward_am.' '.$LNG['tech'][922].' <br> '.$destruction_reward_points.' '.$LNG['ach_points'].'';
		SendSimpleMessage($USER['id'], '', TIMESTAMP, 4, 'System', 'Achievements', $msg);
		}
		//END DESTRUCTION CLASS
		//ACHIEVEMENT SEIGE FLEET
		$total  = $GLOBALS['DATABASE']->query("SELECT SUM(bomber_ship) as bomber_ship, SUM(destroyer) as destroyer from `uni1_planets` where `id_owner` = '".$USER['id']."' ;");
		$total  = $GLOBALS['DATABASE']->fetch_array($total);
		$seige_reward_points = 37;
		$seige_reward_am = 41;
		$next_level = $USER['achievements_fleets_seige'] + 1;
		$seige_reward_am = ($USER['achievements_fleets_seige'] * $seige_reward_am);
		$seige_reward_points = $seige_reward_points + ($USER['achievements_fleets_seige'] * $seige_reward_points);
		if ($total['bomber_ship'] >= $USER['achievement_fleet_6']*2 && $total['destroyer'] >= $USER['achievement_fleet_4']*7 && $next_level < 151){
		//$GLOBALS['DATABASE']->query("UPDATE ".USERS." set achievement_fleet_6 = ".($USER['achievement_fleet_6']*2).", achievement_fleet_7 = ".($USER['achievement_fleet_7']*2).", `achievements_fleets_seige` = `achievements_fleets_seige` + '1', antimatter = antimatter + ".$destruction_reward_am." where `id` = '".$USER['id']."';");
		$GLOBALS['DATABASE']->query("UPDATE ".USERS." set achievement_fleet_6 = ".($USER['achievement_fleet_6']*2).", achievement_fleet_7 = ".($USER['achievement_fleet_7']*2).", `achievements_fleets_seige` = `achievements_fleets_seige` + '1' where `id` = '".$USER['id']."';");
		$msg = '<img alt="" style="float:left; width:60px; margin-right:6px;" src="styles/images/achiev/ach_emperor_def.png">'.$LNG['ach_reached'].': <span class="achiev_mes_head">seige fleet lvl. '.$next_level.'</span><br> '.$LNG['ach_receive'].':<br> '.$seige_reward_am.' '.$LNG['tech'][922].' <br> '.$seige_reward_points.' '.$LNG['ach_points'].'';
		SendSimpleMessage($USER['id'], '', TIMESTAMP, 4, 'System', 'Achievements', $msg);
		}
		//END SEIGE FLEET
		//ACHIEVEMENT HEAVY FLEET
		$total  = $GLOBALS['DATABASE']->query("SELECT SUM(frigate) as frigate, SUM(black_wanderer) as black_wanderer from `uni1_planets` where `id_owner` = '".$USER['id']."' ;");
		$total  = $GLOBALS['DATABASE']->fetch_array($total);
		$heavy_reward_points = 42;
		$heavy_reward_am = 45;
		$next_level = $USER['achievements_fleets_heavy'] + 1;
		$heavy_reward_am = ($USER['achievements_fleets_heavy'] * $heavy_reward_am);
		$heavy_reward_points = $heavy_reward_points + ($USER['achievements_fleets_heavy'] * $heavy_reward_points);
		if ($total['frigate'] >= $USER['achievement_fleet_8']*2 && $total['black_wanderer'] >= $USER['achievement_fleet_9']*2 && $next_level < 151){
		$GLOBALS['DATABASE']->query("UPDATE ".USERS." set achievement_fleet_8 = ".($USER['achievement_fleet_8']*2).", achievement_fleet_9 = ".($USER['achievement_fleet_9']*2).", `achievements_fleets_heavy` = `achievements_fleets_heavy` + '1', antimatter = antimatter + ".$heavy_reward_am." where `id` = '".$USER['id']."';");
		//$GLOBALS['DATABASE']->query("UPDATE ".USERS." set achievement_fleet_8 = ".($USER['achievement_fleet_8']*2).", achievement_fleet_9 = ".($USER['achievement_fleet_9']*2).", `achievements_fleets_heavy` = `achievements_fleets_heavy` + '1' where `id` = '".$USER['id']."';");
		$msg = '<img alt="" style="float:left; width:60px; margin-right:6px;" src="styles/images/achiev/ach_emperor_def.png">'.$LNG['ach_reached'].': <span class="achiev_mes_head">heavy fleet lvl. '.$next_level.'</span><br> '.$LNG['ach_receive'].':<br> '.$heavy_reward_am.' '.$LNG['tech'][922].' <br> '.$heavy_reward_points.' '.$LNG['ach_points'].'';
		SendSimpleMessage($USER['id'], '', TIMESTAMP, 4, 'System', 'Achievements', $msg);
		}
		//END HEAVY FLEET
		//ACHIEVEMENT IMPERIAL FLEET
		$total  = $GLOBALS['DATABASE']->query("SELECT SUM(star_crasher) as star_crasher, SUM(flying_death) as flying_death, SUM(bs_class_oneil) as bs_class_oneil from `uni1_planets` where `id_owner` = '".$USER['id']."' ;");
		$total  = $GLOBALS['DATABASE']->fetch_array($total);
		$imperial_reward_points = 47;
		$imperial_reward_am = 52;
		$next_level = $USER['achievements_fleets_imperial'] + 1;
		$imperial_reward_am = ($USER['achievements_fleets_imperial'] * $imperial_reward_am);
		$imperial_reward_points = $imperial_reward_points + ($USER['achievements_fleets_imperial'] * $imperial_reward_points);
		if ($total['star_crasher'] >= $USER['achievement_fleet_10']*2 && $total['flying_death'] >= $USER['achievement_fleet_10']*2 && $total['bs_class_oneil'] >= $USER['achievement_fleet_10']*2 && $next_level < 151){
		$GLOBALS['DATABASE']->query("UPDATE ".USERS." set achievement_fleet_10 = ".($USER['achievement_fleet_10']*2).", `achievements_fleets_imperial` = `achievements_fleets_imperial` + '1', antimatter = antimatter + ".$imperial_reward_am." where `id` = '".$USER['id']."';");
		//$GLOBALS['DATABASE']->query("UPDATE ".USERS." set achievement_fleet_10 = ".($USER['achievement_fleet_10']*2).", `achievements_fleets_imperial` = `achievements_fleets_imperial` + '1' where `id` = '".$USER['id']."';");
		$msg = '<img alt="" style="float:left; width:60px; margin-right:6px;" src="styles/images/achiev/ach_emperor_def.png">'.$LNG['ach_reached'].': <span class="achiev_mes_head">imperial fleet lvl. '.$next_level.'</span><br> '.$LNG['ach_receive'].':<br> '.$imperial_reward_am.' '.$LNG['tech'][922].' <br> '.$imperial_reward_points.' '.$LNG['ach_points'].'';
		SendSimpleMessage($USER['id'], '', TIMESTAMP, 4, 'System', 'Achievements', $msg);
		}
		//END IMPERIAL FLEET  
		
		
		//ACHIEVEMENT BUILD METAL
		$total  = $GLOBALS['DATABASE']->query("SELECT max(metal_mine) as metal_mine from `uni1_planets` where `id_owner` = '".$USER['id']."' ;");
		$total  = $GLOBALS['DATABASE']->fetch_array($total);
		$metal_reward_points = 2;
		$metal_reward_am = 9;
		$next_level = $USER['achievement_build_metal'] + 1;
		$metal_reward_am = $metal_reward_am + ($USER['achievement_build_metal'] * $metal_reward_am);
		$metal_reward_points = $metal_reward_points + ($USER['achievement_build_metal'] * $metal_reward_points);
		if ($total['metal_mine'] >= (3 * $USER['achievement_build_metal']) + 3){
		$GLOBALS['DATABASE']->query("UPDATE ".USERS." set `achievement_build_metal` = `achievement_build_metal` + '1', antimatter = antimatter + ".$metal_reward_am." where `id` = '".$USER['id']."';");
		$msg = '<img alt="" style="float:left; width:60px; margin-right:6px;" src="styles/images/achiev/ach_mine_metal.png">'.$LNG['ach_reached'].': <span class="achiev_mes_head">metal lvl. '.$next_level.'</span><br> '.$LNG['ach_receive'].':<br> '.$metal_reward_am.' '.$LNG['tech'][922].' <br> '.$metal_reward_points.' '.$LNG['ach_points'].'';
		SendSimpleMessage($USER['id'], '', TIMESTAMP, 4, 'System', 'Achievements', $msg);
		}
		//END METAL ACHIEVEMENT
		//ACHIEVEMENT BUILD CRYSTAL
		$total  = $GLOBALS['DATABASE']->query("SELECT max(crystal_mine) as crystal_mine from `uni1_planets` where `id_owner` = '".$USER['id']."' ;");
		$total  = $GLOBALS['DATABASE']->fetch_array($total);
		$crystal_reward_am = 12;
		$crystal_reward_points = 2;
		$next_level = $USER['achievement_build_crystal'] + 1;
		$crystal_reward_am = $crystal_reward_am + ($USER['achievement_build_crystal'] * $crystal_reward_am);
		$crystal_reward_points = $crystal_reward_points + ($USER['achievement_build_crystal'] * $crystal_reward_points);
		if ($total['crystal_mine'] >= (3 * $USER['achievement_build_crystal']) + 3){
		$GLOBALS['DATABASE']->query("UPDATE ".USERS." set `achievement_build_crystal` = `achievement_build_crystal` + '1', antimatter = antimatter + ".$crystal_reward_am." where `id` = '".$USER['id']."';");
		$msg = '<img alt="" style="float:left; width:60px; margin-right:6px;" src="styles/images/achiev/ach_crystal_mine.png">'.$LNG['ach_reached'].': <span class="achiev_mes_head">crystal lvl. '.$next_level.'</span><br> '.$LNG['ach_receive'].':<br> '.$crystal_reward_am.' '.$LNG['tech'][922].' <br> '.$crystal_reward_points.' '.$LNG['ach_points'].'';
		SendSimpleMessage($USER['id'], '', TIMESTAMP, 4, 'System', 'Achievements', $msg);
		}
		//END CRYSTAL ACHIEVEMENT
		//ACHIEVEMENT BUILD DEUTERIUM
		$total  = $GLOBALS['DATABASE']->query("SELECT max(deuterium_sintetizer) as deuterium_sintetizer from `uni1_planets` where `id_owner` = '".$USER['id']."' ;");
		$total  = $GLOBALS['DATABASE']->fetch_array($total);
		$deuterium_reward_am = 15;
		$deuterium_reward_points = 3;
		$next_level = $USER['achievement_build_deuterium'] + 1;
		$deuterium_reward_am = $deuterium_reward_am + ($USER['achievement_build_deuterium'] * $deuterium_reward_am);
		$deuterium_reward_points = $deuterium_reward_points + ($USER['achievement_build_deuterium'] * $deuterium_reward_points);
		if ($total['deuterium_sintetizer'] >= (3 * $USER['achievement_build_deuterium']) + 3){
		$GLOBALS['DATABASE']->query("UPDATE ".USERS." set `achievement_build_deuterium` = `achievement_build_deuterium` + '1', antimatter = antimatter + ".$deuterium_reward_am." where `id` = '".$USER['id']."';");
		$msg = '<img alt="" style="float:left; width:60px; margin-right:6px;" src="styles/images/achiev/ach_deuterium_sintetizer.png">'.$LNG['ach_reached'].': <span class="achiev_mes_head">deuterium lvl. '.$next_level.'</span><br> '.$LNG['ach_receive'].':<br> '.$deuterium_reward_am.' '.$LNG['tech'][922].' <br> '.$deuterium_reward_points.' '.$LNG['ach_points'].'';
		SendSimpleMessage($USER['id'], '', TIMESTAMP, 4, 'System', 'Achievements', $msg);
		}
		//END DEUTERIUM ACHIEVEMENT
		//ACHIEVEMENT BUILD UNIVERSITY
		$total  = $GLOBALS['DATABASE']->query("SELECT max(university) as university from `uni1_planets` where `id_owner` = '".$USER['id']."' ;");
		$total  = $GLOBALS['DATABASE']->fetch_array($total);
		$university_reward_am = 90;
		$university_reward_points = 9;
		$next_level = $USER['achievement_build_university'] + 1;
		$university_reward_am = $university_reward_am + ($USER['achievement_build_university'] * $university_reward_am);
		$university_reward_points = $university_reward_points + ($USER['achievement_build_university'] * $university_reward_points);
		if ($total['university'] >= (2 * $USER['achievement_build_university']) + 2){
		$GLOBALS['DATABASE']->query("UPDATE ".USERS." set `achievement_build_university` = `achievement_build_university` + '1', antimatter = antimatter + ".$university_reward_am." where `id` = '".$USER['id']."';");
		$msg = '<img alt="" style="float:left; width:60px; margin-right:6px;" src="styles/images/achiev/ach_university.png">'.$LNG['ach_reached'].': <span class="achiev_mes_head">university lvl. '.$next_level.'</span><br> '.$LNG['ach_receive'].':<br> '.$university_reward_am.' '.$LNG['tech'][922].' <br> '.$university_reward_points.' '.$LNG['ach_points'].'';
		SendSimpleMessage($USER['id'], '', TIMESTAMP, 4, 'System', 'Achievements', $msg);
		}
		//END UNIVERSITY ACHIEVEMENT
		//ACHIEVEMENT BUILD MOON BASE
		$total  = $GLOBALS['DATABASE']->query("SELECT max(mondbasis) as mondbasis from `uni1_planets` where `id_owner` = '".$USER['id']."' ;");
		$total  = $GLOBALS['DATABASE']->fetch_array($total);
		$moon_reward_am = 55;
		$moon_reward_points = 6;
		$next_level = $USER['achievement_build_moon'] + 1;
		$moon_reward_am = $moon_reward_am + ($USER['achievement_build_moon'] * $moon_reward_am);
		$moon_reward_points = $moon_reward_points + ($USER['achievement_build_moon'] * $moon_reward_points);
		if ($total['mondbasis'] >= (2 * $USER['achievement_build_moon']) + 2){
		$GLOBALS['DATABASE']->query("UPDATE ".USERS." set `achievement_build_moon` = `achievement_build_moon` + '1', antimatter = antimatter + ".$moon_reward_am." where `id` = '".$USER['id']."';");
		$msg = '<img alt="" style="float:left; width:60px; margin-right:6px;" src="styles/images/achiev/ach_mondbasis.png">'.$LNG['ach_reached'].': <span class="achiev_mes_head">moon base lvl. '.$next_level.'</span><br> '.$LNG['ach_receive'].':<br> '.$moon_reward_am.' '.$LNG['tech'][922].' <br> '.$moon_reward_points.' '.$LNG['ach_points'].'';
		SendSimpleMessage($USER['id'], '', TIMESTAMP, 4, 'System', 'Achievements', $msg);
		}
		$total  = $GLOBALS['DATABASE']->query("SELECT max(phalanx) as phalanx from `uni1_planets` where `id_owner` = '".$USER['id']."' ;");
		$total  = $GLOBALS['DATABASE']->fetch_array($total);
		$phalanx_reward_am = 80;
		$phalanx_reward_points = 8;
		$next_level = $USER['achievement_build_phalanx'] + 1;
		$phalanx_reward_am = $phalanx_reward_am + ($USER['achievement_build_phalanx'] * $phalanx_reward_am);
		$phalanx_reward_points = $phalanx_reward_points + ($USER['achievement_build_phalanx'] * $phalanx_reward_points);
		if ($total['phalanx'] >= (2 * $USER['achievement_build_phalanx']) + 2){
		$GLOBALS['DATABASE']->query("UPDATE ".USERS." set `achievement_build_phalanx` = `achievement_build_phalanx` + '1', antimatter = antimatter + ".$phalanx_reward_am." where `id` = '".$USER['id']."';");
		$msg = '<img alt="" style="float:left; width:60px; margin-right:6px;" src="styles/images/achiev/ach_phalanx.png">'.$LNG['ach_reached'].': <span class="achiev_mes_head">phalanx lvl. '.$next_level.'</span><br> '.$LNG['ach_receive'].':<br> '.$phalanx_reward_am.' '.$LNG['tech'][922].' <br> '.$phalanx_reward_points.' '.$LNG['ach_points'].'';
		SendSimpleMessage($USER['id'], '', TIMESTAMP, 4, 'System', 'Achievements', $msg);
		}
		$total  = $GLOBALS['DATABASE']->query("SELECT max(terraformer) as terraformer from `uni1_planets` where `id_owner` = '".$USER['id']."' ;");
		$total  = $GLOBALS['DATABASE']->fetch_array($total);
		$terraformer_reward_am = 65;
		$terraformer_reward_points = 7;
		$next_level = $USER['achievement_build_terraformer'] + 1;
		$terraformer_reward_am = $terraformer_reward_am + ($USER['achievement_build_terraformer'] * $terraformer_reward_am);
		$terraformer_reward_points = $terraformer_reward_points + ($USER['achievement_build_terraformer'] * $terraformer_reward_points);
		if ($total['terraformer'] >= (2 * $USER['achievement_build_terraformer']) + 2){
		$GLOBALS['DATABASE']->query("UPDATE ".USERS." set `achievement_build_terraformer` = `achievement_build_terraformer` + '1', antimatter = antimatter + ".$terraformer_reward_am." where `id` = '".$USER['id']."';");
		$msg = '<img alt="" style="float:left; width:60px; margin-right:6px;" src="styles/images/achiev/ach_terraformer.png">'.$LNG['ach_reached'].': <span class="achiev_mes_head">terraformer lvl. '.$next_level.'</span><br> '.$LNG['ach_receive'].':<br> '.$terraformer_reward_am.' '.$LNG['tech'][922].' <br> '.$terraformer_reward_points.' '.$LNG['ach_points'].'';
		SendSimpleMessage($USER['id'], '', TIMESTAMP, 4, 'System', 'Achievements', $msg);
		}
		} 

		$premium_peace = 0;
		if($USER['premium_reward_experience'] > 0 && $USER['premium_reward_experience_days'] > TIMESTAMP){
		$premium_peace = $USER['premium_reward_experience'];
		}
		
		if($USER['urlaubs_modus'] == 0){
		if($USER['onlinetime'] < TIMESTAMP - 5 * 60){
		$GLOBALS['DATABASE']->query("UPDATE ".USERS." set `peacefull_last_update` = ".TIMESTAMP." `id` = '".$USER['id']."';");
		}
		$ProductionTime  			= (TIMESTAMP - $USER['peacefull_last_update']);
		$expProd = $ProductionTime * (500 - $USER['experience_peace_level']) / 3600;
		$expProd = $expProd + ($expProd / 100 * $ALLIANCE['ExpPeace']);
		
		
		$expProd = $expProd + ($expProd / 100 * $premium_peace);
		
		
		$GLOBALS['DATABASE']->query("UPDATE ".USERS." set `experience_peace` = `experience_peace` + ".$expProd.", peacefull_last_update = ".TIMESTAMP." where `id` = '".$USER['id']."';");
		}
		
		if($USER['planet_sort'] == 0) {
			$Order	= "p.id ";
		} elseif($USER['planet_sort'] == 1) {
			$Order	= "p.galaxy, p.system, p.planet, p.planet_type ";
		} elseif ($USER['planet_sort'] == 2) {
			$Order	= "p.name ";	
		}
		
		$Order .= ($USER['planet_sort_order'] == 1) ? "DESC" : "ASC" ;
		
		

		$AllPlanets = array();
   
		$GetAll = $GLOBALS['DATABASE']->query("SELECT DISTINCT p.*, f.fleet_mission, u.immunity_until FROM ".PLANETS." as p 
		INNER JOIN ".USERS." as u ON p.id_owner = u.id
		LEFT JOIN uni1_fleets as f ON p.id = f.fleet_end_id WHERE p.id_owner = ".$USER['id']." AND p.planet_type != '3' AND p.destruyed = '0' ORDER BY ".$Order.";");
		if($GLOBALS['DATABASE']->numRows($GetAll)>0){
		while($x = $GLOBALS['DATABASE']->fetch_array($GetAll)){
        $AllPlanets[] = $x;
		}
		}

		$next_planet	= $GLOBALS['DATABASE']->getFirstCell("SELECT id FROM ".PLANETS." WHERE id > ".$PLANET['id']." AND destruyed = '0' AND id_owner = ".$USER['id']." ORDER BY id ASC LIMIT 1;");
		$previous_planet	= $GLOBALS['DATABASE']->getFirstCell("SELECT id FROM ".PLANETS." WHERE id < ".$PLANET['id']." AND destruyed = '0' AND id_owner = ".$USER['id']." ORDER BY id DESC LIMIT 1;");
		

		$query1 = $GLOBALS['DATABASE']->query("SELECT `fleet_mission` FROM ".FLEETS." WHERE `fleet_target_owner` = '". $USER['id'] ."' AND (`fleet_mission` = '1' OR `fleet_mission` = '2' OR `fleet_mission` = '6' OR `fleet_mission` = '9' OR `fleet_mission` = '10') AND `fleet_mess` ='0';");
		$attack = '';
		$sound = '';
		$spying = '';
		$destroy = '';
		$rocket = '';
		if($GLOBALS['DATABASE']->numRows($query1)>0){
		while($x = $GLOBALS['DATABASE']->fetch_array($query1)){
		
		if($x['fleet_mission'] == 1 || $x['fleet_mission'] == 2){
		$attack = 'active_indicator';
		$sound = 'beepataks.play();';
		}
		if($x['fleet_mission'] == 6){
		$spying = 'active_indicator';
		}
		if($x['fleet_mission'] == 9){
		$destroy = 'active_indicator';
		}
		if($x['fleet_mission'] == 10){
		$rocket = 'active_indicator';
		}
		}
		}
		
		$premiun_extra = 0;	
		if($CONF['premium'] != 0 && $CONF['purchase_bonus_timer'] > TIMESTAMP){
		$premiun_extra = $CONF['premium'];
		}
		
		$academy_reduce = 0;	
		if($CONF['academy_bonus'] != 0 && $CONF['purchase_bonus_timer'] > TIMESTAMP){
		$academy_reduce = $CONF['academy_bonus'];
		}
		
		$pointe = 0;	
		if($CONF['purchase_bonus'] != 0 && $CONF['purchase_bonus_timer'] > TIMESTAMP){
		$pointe = $CONF['purchase_bonus'];
		}
		
		$bonte_button = 0;	
		if($CONF['bonus_button'] != 0 && $CONF['purchase_bonus_timer'] > TIMESTAMP){
		$bonte_button = $CONF['bonus_button'];
		}
	
		// Vote reminder
		
		
		if($USER['v1'] < TIMESTAMP || $USER['v3'] < TIMESTAMP){
		$nvote = 1;
		}else{ 
		$nvote = 0;
		}
		
		  
		if($PLANET['misil_launcher'] >=25 && $PLANET['small_laser'] >=10 && $USER['training_step'] == 9){
		$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `training_step` = '10' WHERE `id` = ".$USER['id'].";");
		}
		
		if($USER['training'] == 0 && $USER['training_step'] == 16 && $PLANET['recycler'] >=5 ){
		$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `training_step` = '17' WHERE `id` = ".$USER['id'].";");
		}
		
		$this->tplObj->assign_vars(array(	
		'timing'					=> TIMESTAMP,
		'bonte_button'					=> $bonte_button,
		'nvote'					=> $nvote,
		'experience_peace' => pretty_number($USER['experience_peace']),
		'experience_peace_max' => pretty_number($USER['experience_peace_max']),
		'peace_reward_slots' => $USER['peace_reward_slots'],
		'peace_reward_fields' => $USER['peace_reward_fields'],
		'peace_reward_golf' => $USER['peace_reward_golf'],
		'experience_peace_level' => $USER['experience_peace_level'],
		'experience_combat_level' => $USER['experience_combat_level'],
		'experience_peace_percent' => number_format($USER['experience_peace'] * 100 / $USER['experience_peace_max'], 2, '.', ''),
		'experience_combat' => pretty_number($USER['experience_combat']),
		'experience_combat_max' => pretty_number($USER['experience_combat_max']),
		'combat_reward_deut' => $USER['combat_reward_deut'],
		'combat_reward_expe' => $USER['combat_reward_expe'],
		'combat_reward_bonus' => $USER['combat_reward_bonus'],
		'combat_reward_collider' => $USER['combat_reward_collider'],
		'experience_combat_level' => $USER['experience_combat_level'],
		'experience_combat_percent' => number_format($USER['experience_combat'] * 100 / $USER['experience_combat_max'], 2, '.', ''),
		'next_planet'				=> $next_planet,
        'previous_planet'				=> $previous_planet,
		'id'			=> $PLANET['id'],
		'AllPlanets' => $AllPlanets,
		'attack' => $attack,
		'spying' => $spying,
		'destroy' => $destroy,
		'rocket' => $rocket,
		'sound' => $sound,
		'pointe' => $pointe,
		'premiun_extra' => $premiun_extra,
		'academy_reduce' => $academy_reduce,
		'alarm_volume' => $USER['alarm_volume'],
		'alarm_volumes' => $USER['alarm_volume']*10,
		));
	}
	
	protected function getDbonusData()
	{
		global $CONF, $LNG, $PLANET, $USER, $resource, $UNI;
		
			/* $local_search = $GLOBALS['DATABASE']->query("SELECT * FROM `uni1_timebonus_log` where `userID` = ".$USER['id'].";");
			if($CONF['timeRewardFrom'] < TIMESTAMP && $CONF['timeRewardTo'] > TIMESTAMP && $GLOBALS['DATABASE']->numRows($local_search)==0){
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET antimatter = antimatter + '".$CONF['timeReward']."' WHERE id = ".$USER['id'].";");
			$GLOBALS['DATABASE']->query("INSERT INTO uni1_timebonus_log VALUES ('".$GLOBALS['DATABASE']->GetInsertID()."','".$USER['id']."', ".TIMESTAMP.");");
			} */
			
		if($USER['sdays_time'] < TIMESTAMP - 48 * 60 * 60 ){
		$GLOBALS['DATABASE']->query("Update ".USERS." SET `sdays_b` = 1, `sdays_time` = ".(TIMESTAMP - 60 * 60 *24)." WHERE `id` = ".$USER['id']." ;");
		$xxx = 1;
		}
		else{
		$xxx = 1;
		if($USER['sdays_b'] == 1 )
		$xxx = 1;
		if($USER['sdays_b'] == 2 )
		$xxx = 2;
		if($USER['sdays_b'] == 3 )
		$xxx = 3;
		if($USER['sdays_b'] == 4 )
		$xxx = 4;
		if($USER['sdays_b'] == 5 )
		$xxx = 5;
		if($USER['sdays_b'] == 6 )
		$xxx = 6;
		if($USER['sdays_b'] == 7 )
		$xxx = 7;
		}
		$BID = $USER['sdays_b'];
		$randomd = mt_rand(1,6);
			$this->tplObj->assign_vars(array(
			'randomd' => $randomd,
			'mode1' => $BID,
			'xxx' => $xxx,
			'rewardss' => pretty_number($USER['experience_peace_max'] / 100 * 5),
			'show_dbonus' => (($USER['sdays_time']  > TIMESTAMP - 60 * 60 * 24) ?  1 : 2 ),
				));
	}
	
	protected function getPageData() 
    {
		global $USER, $THEME;
		
		if($this->getWindow() === 'full') {
			$this->getNavigationData();
			$this->getCronjobsTodo();
			$this->getExperienceData();
			$this->getDbonusData();
		}
		
		
		
		$dateTimeServer		= new DateTime("now");
		if(isset($USER['timezone'])) {
			try {
				$dateTimeUser	= new DateTime("now", new DateTimeZone($USER['timezone']));
			} catch (Exception $e) {
				$dateTimeUser	= $dateTimeServer;
			}
		} else {
			$dateTimeUser	= $dateTimeServer;
		}
		$manual_step_1 = 1;
		if($USER['training'] == 0 && $USER['training_step'] == 1){
		$manual_step_1 = 0;
		}
		
		$manuel_step_1_1 = 1;
		if($USER['training'] == 0 && $USER['training_step'] == 2 && $this->getQueryString() != 'page=buildings'){
		$manuel_step_1_1 = 0;
		}
		
		$manual_step_3 = 1;
		if($USER['training'] == 0 && $USER['training_step'] == 3){
		$manual_step_3 = 0;
		}
		
		$manual_step_4 = 1;
		if($USER['training'] == 0 && $USER['training_step'] == 4){
		$manual_step_4 = 0;
		}
		
		$manual_5_step = 1;
		if($USER['training'] == 0 && $USER['training_step'] == 5 && ($this->getQueryString() != 'page=buildings' && $this->getQueryString() != 'page=research')){
		$manual_5_step = 0;
		}
		
		$manual_8_step = 1;
		if($USER['training'] == 0 && $USER['training_step'] == 8){
		$manual_8_step = 0;
		}
		
		
		$manual_11_step = 1;
		if($USER['training'] == 0 && $USER['training_step'] == 10){
		
		$manual_11_step = 0;
		}
		
		$manual_13_step = 1;
		if($USER['training'] == 0 && $USER['training_step'] == 13){
		$manual_13_step = 0;
		}
		
		$manual_15_step = 1;
		if($USER['training'] == 0 && $USER['training_step'] == 15){
		$manual_15_step = 0;
		}
		
		$manual_17_step = 1;
		if($USER['training'] == 0 && $USER['training_step'] == 17){
		$manual_17_step = 0;
		}
		$manual_19_step = 1;
		if($USER['training'] == 0 && $USER['training_step'] == 19){
		$manual_19_step = 0;
		}
		
		$manual_21_step = 1;
		if($USER['training'] == 0 && $USER['training_step'] == 21){
		$manual_21_step = 0;
		}
		
		if($USER['training'] == 0 && $USER['training_step'] == 20){
		$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `training_step` = '21' WHERE `id` = '".$USER['id']."';");
		}
		
		$manual_24_step = 1;
		if($USER['training'] == 0 && $USER['training_step'] == 24){
		$manual_24_step = 0;
		}
		
		$manual_26_step = 1;
		if($USER['training'] == 0 && $USER['training_step'] == 26){
		$manual_26_step = 0;
		}
		
		$manual_28_steps = 1;
		if($USER['training'] == 0 && $USER['training_step'] == 28 && $this->getQueryString() == 'page=Achievements'){
		$manual_28_steps = 0;
		//$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `training` = '1' WHERE `id` = '".$USER['id']."';");
		
		}
		
		if($USER['training'] == 0 && $USER['training_step'] == 28 && $this->getQueryString() != 'page=Achievements'){
		$manual_28_steps = 0;
		$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `training` = '1' WHERE `id` = '".$USER['id']."';");
		$manual_28_steps = 0;
		}
		
      $cosmonaute_day =0;
	  if(Config::get('cosmonaute') == 1 && Config::get('purchase_bonus_timer') > TIMESTAMP){
	  $cosmonaute_day =1;
	  }
	  
	  
	  $new_year =0;
	  if(Config::get('new_year') == 1 && Config::get('purchase_bonus_timer') > TIMESTAMP){
	  $new_year =1;
	  }
	  
	  $gift4_1 = 0;
	  $gift4 = 0;
	  if($USER['frisbee'] >= 1 && $USER['alien'] >= 1 && $USER['rocket'] >= 1){
	  $gift4_1 = 1;
	 
	if($USER['frisbee'] <= $USER['alien'] && $USER['frisbee'] <= $USER['rocket']){
	$gift4 = $USER['frisbee'];
	}elseif($USER['alien'] <= $USER['frisbee'] && $USER['alien'] <= $USER['rocket']){
	$gift4 = $USER['alien'];
	}elseif($USER['rocket'] <= $USER['frisbee'] && $USER['rocket'] <= $USER['alien']){
	$gift4 = $USER['rocket'];
	}
	 }
	$multi_spoted = 0;
	if($USER['multi_spotted_aproval'] == 1 && $USER['multi_spotted'] == 1){
	$multi_spoted = 0;
	}elseif($USER['multi_spotted_aproval'] == 0 && $USER['multi_spotted'] == 1){
	$multi_spoted = 1;
	}
	  $this->tplObj->assign_vars(array(
            'vmode'				=> $USER['urlaubs_modus'],
            'manual_28_steps'				=> $manual_28_steps,
            'manual_26_step'				=> $manual_26_step,
            'manual_24_step'				=> $manual_24_step,
            'manual_19_step'				=> $manual_19_step,
            'manual_21_step'				=> $manual_21_step,
            'multi_spotted'				=> $multi_spoted,
            'manual_17_step'				=> $manual_17_step,
            'manual_13_step'				=> $manual_13_step,
            'manual_15_step'				=> $manual_15_step,
            'manual_11_step'				=> $manual_11_step,
            'manual_step_1'				=> $manual_step_1,
            'manual_8_step'				=> $manual_8_step,
            'manual_5_step'				=> $manual_5_step,
            'manuel_step_1_1'				=> $manuel_step_1_1,
            'manual_step_3'				=> $manual_step_3,
            'manual_step_4'				=> $manual_step_4,
            
			'authlevel'			=> $USER['authlevel'],
			'userID'			=> $USER['id'],
			'cosmonaute_day'			=> $cosmonaute_day,
			'new_year'			=> $new_year,
			'gift1'			=> $USER['frisbee'],
			'gift2'			=> $USER['alien'],
			'gift3'			=> $USER['rocket'],
			'gift4'			=> $gift4,
			'gift4_1'			=> $gift4_1,
			'bodyclass'			=> $this->getWindow(),
            'game_name'			=> Config::get('game_name'),
            'uni_name'			=> Config::get('uni_name'),
            'uni_value'			=> Config::get('uni'),
			'ga_active'			=> Config::get('ga_active'),
			'ga_key'			=> Config::get('ga_key'),
			'debug'				=> Config::get('debug'),
			'VERSION'			=> Config::get('VERSION'),
			'date'				=> explode("|", date('Y\|n\|j\|G\|i\|s\|Z', TIMESTAMP)),
			'REV'				=> substr(Config::get('VERSION'), -4),
			'Offset'			=> $dateTimeUser->getOffset() - $dateTimeServer->getOffset(),
			'queryString'		=> $this->getQueryString(),
			'themeSettings'		=> $THEME->getStyleSettings(),
		));
	}
	
	protected function printMessage($Message, $fullSide = true, $redirect = NULL) {
		$this->tplObj->assign_vars(array(
			'mes'		=> $Message,
		));
		
		if(isset($redirect)) {
			$this->tplObj->gotoside($redirect[0], $redirect[1]);
		}
		
		if(!$fullSide) {
			$this->setWindow('popup');
		}
		
		$this->display('error.default.tpl');
	}
	
	protected function save() {		
		if(isset($this->ecoObj)) {
			$this->ecoObj->SavePlanetToDB();
		}
	}
	
	protected function display($file) {
		global $THEME, $LNG;
		
		$this->save();
		
		if($this->getWindow() !== 'ajax') {
			$this->getPageData();
		}
		
		$this->tplObj->assign_vars(array(
            'lang'    		=> $LNG->getLanguage(),
            'dpath'			=> $THEME->getTheme(),
			'scripts'		=> $this->tplObj->jsscript,
			'execscript'	=> implode("\n", $this->tplObj->script),
			'basepath'		=> PROTOCOL.HTTP_HOST.HTTP_BASE,
		));

		$this->tplObj->assign_vars(array(
			'LNG'			=> $LNG,
		), false);
		
		$this->tplObj->display('extends:layout.'.$this->getWindow().'.tpl|'.$file);
		exit;
	}
	
	protected function sendJSON($data) {
		$this->save();
		echo json_encode($data);
		exit;
	}
	
	protected function redirectTo($url) {
		$this->save();
		HTTP::redirectTo($url);
		exit;
	}
}