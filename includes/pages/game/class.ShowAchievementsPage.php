<?php
class ShowAchievementsPage extends AbstractPage
{	
	public static $requireModule = 0;
	
	function __construct() 
	{
		parent::__construct();
	}
	
	function show()
	{
    global $CONF, $LNG, $PLANET, $USER, $db, $resource, $UNI;
	$status   = HTTP::_GP('group', '');
    switch($status){
	case '':
	$peace_reward_am = 47;
	$peace_reward_points = 9;
	$combat_reward_am = 125;
	$combat_reward_points = 13;
	
		$manual_27_step = 1;
		if($USER['training'] == 0 && $USER['training_step'] == 27){
		$manual_27_step = 0;
		}
		$manual_28_step = 1;
		if($USER['training'] == 0 && $USER['training_step'] == 28){
		$manual_28_step = 0;
		}
		

	$this->tplObj->assign_vars(array( 
	'manual_28_step' => $manual_28_step,
	'manual_27_step' => $manual_27_step,
	'missing1' => ((5 * $USER['achievement_peace_level']) + 5) - $USER['experience_peace_level'],
	'missing2' => ((5 * $USER['achievement_combat_level']) + 5) - $USER['experience_combat_level'],
	'missing1_percent' => $USER['experience_peace_level'] * 100 / ((5 * $USER['achievement_peace_level']) + 5),
	'missing2_percent' => $USER['experience_combat_level'] * 100 / ((5 * $USER['achievement_combat_level']) + 5),
	'achievement_peace_level' => $USER['achievement_peace_level'],
	'achievement_combat_level' => $USER['achievement_combat_level'],
	'achievement_next_require_peace' => (5 * $USER['achievement_peace_level']) + 5,
	'achievement_next_require_combat' => (5 * $USER['achievement_combat_level']) + 5,
	'total_points_peace' => $peace_reward_points * $USER['achievement_peace_level'],
	'total_points_combat' => $combat_reward_points * $USER['achievement_combat_level'],
	'next_points_peace' => $peace_reward_points + ($USER['achievement_peace_level'] * $peace_reward_points),
	'next_points_combat' => $combat_reward_points + ($USER['achievement_combat_level'] * $combat_reward_points),
	'next_am_peace' => $peace_reward_am + ($USER['achievement_peace_level'] * $peace_reward_am),
	'next_am_combat' => $combat_reward_am + ($USER['achievement_combat_level'] * $combat_reward_am),
	));
	$this->display('page.achievements.default.tpl');
	break;
	case 'general':
	$manual_28_step = 1;
		if($USER['training'] == 0 && $USER['training_step'] == 28){
		$manual_28_step = 0;
		}
	$peace_reward_am = 47;
	$peace_reward_points = 9;
	$combat_reward_am = 125;
	$combat_reward_points = 13;

	$this->tplObj->assign_vars(array( 
	'manual_28_step' => $manual_28_step,
	'missing1' => ((5 * $USER['achievement_peace_level']) + 5) - $USER['experience_peace_level'],
	'missing2' => ((5 * $USER['achievement_combat_level']) + 5) - $USER['experience_combat_level'],
	'missing1_percent' => $USER['experience_peace_level'] * 100 / ((5 * $USER['achievement_peace_level']) + 5),
	'missing2_percent' => $USER['experience_combat_level'] * 100 / ((5 * $USER['achievement_combat_level']) + 5),
	'achievement_peace_level' => $USER['achievement_peace_level'],
	'achievement_combat_level' => $USER['achievement_combat_level'],
	'achievement_next_require_peace' => (5 * $USER['achievement_peace_level']) + 5,
	'achievement_next_require_combat' => (5 * $USER['achievement_combat_level']) + 5,
	'total_points_peace' => $peace_reward_points * $USER['achievement_peace_level'],
	'total_points_combat' => $combat_reward_points * $USER['achievement_combat_level'],
	'next_points_peace' => $peace_reward_points + ($USER['achievement_peace_level'] * $peace_reward_points),
	'next_points_combat' => $combat_reward_points + ($USER['achievement_combat_level'] * $combat_reward_points),
	'next_am_peace' => $peace_reward_am + ($USER['achievement_peace_level'] * $peace_reward_am),
	'next_am_combat' => $combat_reward_am + ($USER['achievement_combat_level'] * $combat_reward_am),
	));
	$this->display('page.achievements.general.tpl');
	break;
	case 'daily':
	$manual_28_step = 1;
		if($USER['training'] == 0 && $USER['training_step'] == 28){
		$manual_28_step = 0;
		}
	$attack_reward_am = 200;
	$attack_reward_points = 50;
	$hostal_reward_am = 200;
	$hostal_reward_points = 50;
	$expe_reward_am = 250;
	$expe_reward_points = 50;
	
	$this->tplObj->assign_vars(array( 
	'manual_28_step' => $manual_28_step,
	'achievements_attack' => $USER['achievements_level_attack'],
	'achievements_hostal' => $USER['achievements_level_hostal'],
	'achievements_expedition' => $USER['achievements_level_expe'],
	'total_points_attack' => $attack_reward_points * $USER['achievements_level_attack'],
	'total_points_hostal' => $hostal_reward_points * $USER['achievements_level_hostal'],
	'total_points_expe' => $expe_reward_points * $USER['achievements_level_expe'],
	'next_points_attack' => $attack_reward_points + ($USER['achievements_level_attack'] * $attack_reward_points),
	'next_points_hostal' => $hostal_reward_points + ($USER['achievements_level_hostal'] * $hostal_reward_points),
	'next_points_expe' => $expe_reward_points + ($USER['achievements_level_expe'] * $expe_reward_points),
	'next_am_attack' => $attack_reward_am + ($USER['achievements_level_attack'] * $attack_reward_am),
	'next_am_hostal' => $hostal_reward_am + ($USER['achievements_level_hostal'] * $hostal_reward_am),
	'next_am_expe' => $expe_reward_am + ($USER['achievements_level_expe'] * $expe_reward_am),
	'achievement_next_require_attack' => (5 * $USER['achievements_level_attack']) + 15,
	'achievement_next_require_hostal' => (5 * $USER['achievements_level_hostal']) + 20,
	'achievement_next_require_expe' => (5 * $USER['achievements_level_expe']) + 20,
	
	));
	$this->display('page.achievements.daily.tpl');
	break;
	case 'build':
	$manual_28_step = 1;
		if($USER['training'] == 0 && $USER['training_step'] == 28){
		$manual_28_step = 0;
		}
	$metal_reward_am = 9;
	$metal_reward_points = 2;
	$crystal_reward_am = 12;
	$crystal_reward_points = 2;
	$deuterium_reward_am = 15;
	$deuterium_reward_points = 3;
	$light_reward_am = 28;
	$light_reward_points = 3;
	$medium_reward_am = 31;
	$medium_reward_points = 3;
	$heavy_reward_am = 34;
	$heavy_reward_points = 3;
	$university_reward_am = 90;
	$university_reward_points = 9;
	$moon_reward_am = 55;
	$moon_reward_points = 6;
	$phalanx_reward_am = 80;
	$phalanx_reward_points = 8;
	$terraformer_reward_am = 65;
	$terraformer_reward_points = 7;
	$this->tplObj->assign_vars(array( 
	'manual_28_step' => $manual_28_step,
	'achievements_metal_level' => $USER['achievement_build_metal'],
	'achievements_crystal_level' => $USER['achievement_build_crystal'],
	'achievements_deuterium_level' => $USER['achievement_build_deuterium'],
	'achievements_light_level' => $USER['achievement_build_light'],
	'achievements_medium_level' => $USER['achievement_build_medium'],
	'achievements_heavy_level' => $USER['achievement_build_heavy'],
	'achievements_university_level' => $USER['achievement_build_university'],
	'achievements_moon_level' => $USER['achievement_build_moon'],
	'achievements_phalanx_level' => $USER['achievement_build_phalanx'],
	'achievements_terraformer_level' => $USER['achievement_build_terraformer'],
	'total_points_metal' => $metal_reward_points * $USER['achievement_build_metal'],
	'total_points_crystal' => $crystal_reward_points * $USER['achievement_build_crystal'],
	'total_points_deuterium' => $deuterium_reward_points * $USER['achievement_build_deuterium'],
	'total_points_light' => $light_reward_points * $USER['achievement_build_light'],
	'total_points_medium' => $medium_reward_points * $USER['achievement_build_medium'],
	'total_points_heavy' => $heavy_reward_points * $USER['achievement_build_heavy'],
	'total_points_university' => $university_reward_points * $USER['achievement_build_university'],
	'total_points_moon' => $moon_reward_points * $USER['achievement_build_moon'],
	'total_points_phalanx' => $phalanx_reward_points * $USER['achievement_build_phalanx'],
	'total_points_terraformer' => $terraformer_reward_points * $USER['achievement_build_terraformer'],
	'next_points_metal' => $metal_reward_points + ($USER['achievement_build_metal'] * $metal_reward_points),
	'next_points_crystal' => $crystal_reward_points + ($USER['achievement_build_crystal'] * $crystal_reward_points),
	'next_points_deuterium' => $deuterium_reward_points + ($USER['achievement_build_deuterium'] * $deuterium_reward_points),
	'next_points_light' => $light_reward_points + ($USER['achievement_build_light'] * $light_reward_points),
	'next_points_medium' => $medium_reward_points + ($USER['achievement_build_medium'] * $medium_reward_points),
	'next_points_heavy' => $heavy_reward_points + ($USER['achievement_build_heavy'] * $heavy_reward_points),
	'next_points_university' => $university_reward_points + ($USER['achievement_build_university'] * $university_reward_points),
	'next_points_moon' => $moon_reward_points + ($USER['achievement_build_moon'] * $moon_reward_points),
	'next_points_phalanx' => $phalanx_reward_points + ($USER['achievement_build_phalanx'] * $phalanx_reward_points),
	'next_points_terraformer' => $terraformer_reward_points + ($USER['achievement_build_terraformer'] * $terraformer_reward_points),
	'next_am_metal' => $metal_reward_am + ($USER['achievement_build_metal'] * $metal_reward_am),
	'next_am_crystal' => $crystal_reward_am + ($USER['achievement_build_crystal'] * $crystal_reward_am),
	'next_am_deuterium' => $deuterium_reward_am + ($USER['achievement_build_deuterium'] * $deuterium_reward_am),
	'next_am_light' => $light_reward_am + ($USER['achievement_build_light'] * $light_reward_am),
	'next_am_medium' => $medium_reward_am + ($USER['achievement_build_medium'] * $medium_reward_am),
	'next_am_heavy' => $heavy_reward_am + ($USER['achievement_build_heavy'] * $heavy_reward_am),
	'next_am_university' => $university_reward_am + ($USER['achievement_build_university'] * $university_reward_am),
	'next_am_moon' => $moon_reward_am + ($USER['achievement_build_moon'] * $moon_reward_am),
	'next_am_phalanx' => $phalanx_reward_am + ($USER['achievement_build_phalanx'] * $phalanx_reward_am),
	'next_am_terraformer' => $terraformer_reward_am + ($USER['achievement_build_terraformer'] * $terraformer_reward_am),
	'achievement_next_require_metal' => (3 * $USER['achievement_build_metal']) + 3,
	'achievement_next_require_crystal' => (3 * $USER['achievement_build_crystal']) + 3,
	'achievement_next_require_deuterium' => (3 * $USER['achievement_build_deuterium']) + 3,
	'achievement_next_require_light' => (1 * $USER['achievement_build_light']) + 1,
	'achievement_next_require_medium' => (1 * $USER['achievement_build_medium']) + 1,
	'achievement_next_require_heavy' => (1 * $USER['achievement_build_heavy']) + 1,
	'achievement_next_require_university' => (2 * $USER['achievement_build_university']) + 2,
	'achievement_next_require_moon' => (2 * $USER['achievement_build_moon']) + 2,
	'achievement_next_require_phalanx' => (2 * $USER['achievement_build_phalanx']) + 2,
	'achievement_next_require_terraformer' => (2 * $USER['achievement_build_terraformer']) + 2,
	));
	$this->display('page.achievements.build.tpl');
	break;
	case 'def':
	$manual_28_step = 1;
		if($USER['training'] == 0 && $USER['training_step'] == 28){
		$manual_28_step = 0;
		}
		
	$easy_reward_points = 15;
	$simple_reward_points = 18;
	$average_reward_points = 25;
	$high_reward_points = 30;
	$heavy_reward_points = 37;
	$massive_reward_points = 42;
	$imperial_reward_points = 47;
	$easy_reward_am = 17;
	$simple_reward_am = 23;
	$average_reward_am = 31;
	$high_reward_am = 36;
	$heavy_reward_am = 41;
	$massive_reward_am = 45;
	$imperial_reward_am = 52;
	
	$this->tplObj->assign_vars(array( 
	'manual_28_step' => $manual_28_step,
	'achievement_defense_easy' => $USER['achievement_defense_easy'],
	'achievement_defense_simple' => $USER['achievement_defense_simple'],
	'achievement_defense_average' => $USER['achievement_defense_average'],
	'achievement_defense_high' => $USER['achievement_defense_high'],
	'achievement_defense_heavy' => $USER['achievement_defense_heavy'],
	'achievement_defense_massive' => $USER['achievement_defense_massive'],
	'achievement_defense_imperial' => $USER['achievement_defense_imperial'],
	'achievement_next_require_easy_1' => pretty_number($USER['achievement_def_1']*2),
	'achievement_next_require_easy_2' => pretty_number($USER['achievement_def_1']*2),
	'achievement_next_require_simple_1' => pretty_number($USER['achievement_def_2']*2),
	'achievement_next_require_simple_2' => pretty_number($USER['achievement_def_3']*2),
	'achievement_next_require_average_1' => pretty_number($USER['achievement_def_4']*2),
	'achievement_next_require_average_2' => pretty_number($USER['achievement_def_4']*2),
	'achievement_next_require_high_1' => pretty_number($USER['achievement_def_5']*2),
	'achievement_next_require_high_2' => pretty_number($USER['achievement_def_6']*2),
	'achievement_next_require_heavy_1' => pretty_number($USER['achievement_def_7']*2),
	'achievement_next_require_heavy_2' => pretty_number($USER['achievement_def_8']*2),
	'achievement_next_require_massive_1' => pretty_number($USER['achievement_def_9']*2),
	'achievement_next_require_massive_2' => pretty_number($USER['achievement_def_10']*2),
	'achievement_next_require_imperial_1' => pretty_number($USER['achievement_def_11']*2),
	'achievement_next_require_imperial_2' => pretty_number($USER['achievement_def_12']*2),
	'achievement_next_require_imperial_3' => pretty_number($USER['achievement_def_13']*2),
	'total_points_easy' => $easy_reward_points * $USER['achievement_defense_easy'],
	'total_points_simple' => $simple_reward_points * $USER['achievement_defense_simple'],
	'total_points_average' => $average_reward_points * $USER['achievement_defense_average'],
	'total_points_high' => $high_reward_points * $USER['achievement_defense_high'],
	'total_points_heavy' => $heavy_reward_points * $USER['achievement_defense_heavy'],
	'total_points_massive' => $massive_reward_points * $USER['achievement_defense_massive'],
	'total_points_imperial' => $imperial_reward_points * $USER['achievement_defense_imperial'],
	'easy_reward_am' => $easy_reward_am + ($USER['achievement_defense_easy'] * $easy_reward_am),
	'simple_reward_am' => $simple_reward_am + ($USER['achievement_defense_simple'] * $simple_reward_am),
	'average_reward_am' => $average_reward_am + ($USER['achievement_defense_average'] * $average_reward_am),
	'high_reward_am' => $high_reward_am + ($USER['achievement_defense_high'] * $high_reward_am),
	'heavy_reward_am' => $heavy_reward_am + ($USER['achievement_defense_heavy'] * $heavy_reward_am),
	'massive_reward_am' => $massive_reward_am + ($USER['achievement_defense_massive'] * $massive_reward_am),
	'imperial_reward_am' => $imperial_reward_am + ($USER['achievement_defense_imperial'] * $imperial_reward_am),
	'easy_reward_points' => $easy_reward_points + ($USER['achievement_defense_easy'] * $easy_reward_points),
	'simple_reward_points' => $simple_reward_points + ($USER['achievement_defense_simple'] * $simple_reward_points),
	'average_reward_points' => $average_reward_points + ($USER['achievement_defense_average'] * $average_reward_points),
	'high_reward_points' => $high_reward_points + ($USER['achievement_defense_high'] * $high_reward_points),
	'heavy_reward_points' => $heavy_reward_points + ($USER['achievement_defense_heavy'] * $heavy_reward_points),
	'massive_reward_points' => $massive_reward_points + ($USER['achievement_defense_massive'] * $massive_reward_points),
	'imperial_reward_points' => $imperial_reward_points + ($USER['achievement_defense_imperial'] * $imperial_reward_points),
	));
	$this->display('page.achievements.def.tpl');
	break;
	case 'varia':
	$manual_28_step = 1;
		if($USER['training'] == 0 && $USER['training_step'] == 28){
		$manual_28_step = 0;
		}
	$fighter_reward_points = 15;
	$destructor_reward_points = 60;
	$moons_reward_points = 50;
	$hostal_reward_points = 40;
	$expe_reward_points = 50;
	$seeker_reward_points = 20;
	$upgrades_reward_points = 25;
	$integrator_reward_points = 50;
	$fighter_reward_am = 15;
	$destructor_reward_am = 60;
	$moons_reward_am = 50;
	$hostal_reward_am = 40;
	$expe_reward_am = 50;
	$seeker_reward_am = 20;
	$upgrades_reward_am = 25;
	$integrator_reward_am = 50;
	
	$this->tplObj->assign_vars(array( 
	'manual_28_step' => $manual_28_step,
	'achievements_misc_fighter' => $USER['achievements_misc_fighter'],
	'achievements_misc_destructor' => $USER['achievements_misc_destructor'],
	'achievements_misc_moons' => $USER['achievements_misc_moons'],
	'achievements_misc_hostal' => $USER['achievements_misc_hostal'],
	'achievements_misc_expe' => $USER['achievements_misc_expe'],
	'achievements_misc_seeker' => $USER['achievements_misc_seeker'],
	'achievements_misc_upgrades' => $USER['achievements_misc_upgrades'],
	'achievements_misc_integrator' => $USER['achievements_misc_integrator'],
	'achievement_next_require_fighter' => pretty_number((50 * $USER['achievements_misc_fighter']) + 50),
	'achievement_next_require_destructor' => pretty_number((3 * $USER['achievements_misc_destructor']) + 3),
	'achievement_next_require_moons' => pretty_number((3 * $USER['achievements_misc_moons']) + 3),
	'achievement_next_require_hostal' => pretty_number((20 * $USER['achievements_misc_hostal']) + 20),
	'achievement_next_require_expe' => pretty_number((10 * $USER['achievements_misc_expe']) + 10),
	'achievement_next_require_seeker' => pretty_number((50000 * $USER['achievements_misc_seeker']) + 50000),
	'achievement_next_require_upgrades' => pretty_number((3 * $USER['achievements_misc_upgrades']) + 3),
	'achievement_next_require_integrator' => pretty_number((10 * $USER['achievements_misc_integrator']) + 10),
	'total_points_fighter' => $fighter_reward_points * $USER['achievements_misc_fighter'],
	'total_points_destructor' => $destructor_reward_points * $USER['achievements_misc_destructor'],
	'total_points_moons' => $moons_reward_points * $USER['achievements_misc_moons'],
	'total_points_hostal' => $hostal_reward_points * $USER['achievements_misc_hostal'],
	'total_points_expe' => $expe_reward_points * $USER['achievements_misc_expe'],
	'total_points_seeker' => $seeker_reward_points * $USER['achievements_misc_seeker'],
	'total_points_upgrades' => $upgrades_reward_points * $USER['achievements_misc_upgrades'],
	'total_points_integrator' => $integrator_reward_points * $USER['achievements_misc_integrator'],
	'fighter_reward_points' => $fighter_reward_points + ($USER['achievements_misc_fighter'] * $fighter_reward_points),
	'destructor_reward_points' => $destructor_reward_points + ($USER['achievements_misc_destructor'] * $destructor_reward_points),
	'moons_reward_points' => $moons_reward_points + ($USER['achievements_misc_moons'] * $moons_reward_points),
	'hostal_reward_points' => $hostal_reward_points + ($USER['achievements_misc_hostal'] * $hostal_reward_points),
	'expe_reward_points' => $expe_reward_points + ($USER['achievements_misc_expe'] * $expe_reward_points),
	'seeker_reward_points' => $seeker_reward_points + ($USER['achievements_misc_seeker'] * $seeker_reward_points),
	'upgrades_reward_points' => $upgrades_reward_points + ($USER['achievements_misc_upgrades'] * $upgrades_reward_points),
	'integrator_reward_points' => $integrator_reward_points + ($USER['achievements_misc_integrator'] * $integrator_reward_points),
	'fighter_reward_am' => $fighter_reward_am + ($USER['achievements_misc_fighter'] * $fighter_reward_am),
	'destructor_reward_am' => $destructor_reward_am + ($USER['achievements_misc_destructor'] * $destructor_reward_am),
	'moons_reward_am' => $moons_reward_am + ($USER['achievements_misc_moons'] * $moons_reward_am),
	'hostal_reward_am' => $hostal_reward_am + ($USER['achievements_misc_hostal'] * $hostal_reward_am),
	'expe_reward_am' => $expe_reward_am + ($USER['achievements_misc_expe'] * $expe_reward_am),
	'seeker_reward_am' => $seeker_reward_am + ($USER['achievements_misc_seeker'] * $seeker_reward_am),
	'upgrades_reward_am' => $upgrades_reward_am + ($USER['achievements_misc_upgrades'] * $upgrades_reward_am),
	'integrator_reward_am' => $integrator_reward_am + ($USER['achievements_misc_integrator'] * $integrator_reward_am),
	));
	$this->display('page.achievements.varia.tpl');
	break;
	case 'fleet':
	$manual_28_step = 1;
		if($USER['training'] == 0 && $USER['training_step'] == 28){
		$manual_28_step = 0;
		}
	$small_reward_points = 15;
	$support_reward_points = 18;
	$battle_reward_points = 25;
	$destruction_reward_points = 30;
	$seige_reward_points = 37;
	$heavy_reward_points = 42;
	$imperial_reward_points = 47;
	$small_reward_am = 17;
	$support_reward_am = 23;
	$battle_reward_am = 31;
	$destruction_reward_am = 36;
	$seige_reward_am = 41;
	$heavy_reward_am = 45;
	$imperial_reward_am = 52;
	$this->tplObj->assign_vars(array( 
	'manual_28_step' => $manual_28_step,
	'achievements_fleets_small' => $USER['achievements_fleets_small'],
	'achievements_fleets_support' => $USER['achievements_fleets_support'],
	'achievements_fleets_battle' => $USER['achievements_fleets_battle'],
	'achievements_fleets_destruction' => $USER['achievements_fleets_destruction'],
	'achievements_fleets_seige' => $USER['achievements_fleets_seige'],
	'achievements_fleets_heavy' => $USER['achievements_fleets_heavy'],
	'achievements_fleets_imperial' => $USER['achievements_fleets_imperial'],
	'achievement_next_require_small_1' => pretty_number($USER['achievement_fleet_1']*2),
	'achievement_next_require_small_2' => pretty_number($USER['achievement_fleet_1']*2),
	'achievement_next_require_support_1' => pretty_number($USER['achievement_fleet_2']*2),
	'achievement_next_require_support_2' => pretty_number($USER['achievement_fleet_2']*2),
	'achievement_next_require_battle_1' => pretty_number($USER['achievement_fleet_3']*2),
	'achievement_next_require_battle_2' => pretty_number($USER['achievement_fleet_3']*2),
	'achievement_next_require_destruction_1' => pretty_number($USER['achievement_fleet_4']*2),
	'achievement_next_require_destruction_2' => pretty_number($USER['achievement_fleet_5']*2),
	'achievement_next_require_seige_1' => pretty_number($USER['achievement_fleet_6']*2),
	'achievement_next_require_seige_2' => pretty_number($USER['achievement_fleet_7']*2),
	'achievement_next_require_heavy_1' => pretty_number($USER['achievement_fleet_8']*2),
	'achievement_next_require_heavy_2' => pretty_number($USER['achievement_fleet_9']*2),
	'achievement_next_require_imperial_1' => pretty_number($USER['achievement_fleet_10']*2),
	'achievement_next_require_imperial_2' => pretty_number($USER['achievement_fleet_10']*2),
	'achievement_next_require_imperial_3' => pretty_number($USER['achievement_fleet_10']*2),
	'total_points_small' => $small_reward_points * $USER['achievements_fleets_small'],
	'total_points_support' => $support_reward_points * $USER['achievements_fleets_support'],
	'total_points_battle' => $battle_reward_points * $USER['achievements_fleets_battle'],
	'total_points_destruction' => $destruction_reward_points * $USER['achievements_fleets_destruction'],
	'total_points_seige' => $seige_reward_points * $USER['achievements_fleets_seige'],
	'total_points_heavy' => $heavy_reward_points * $USER['achievements_fleets_heavy'],
	'total_points_imperial' => $imperial_reward_points * $USER['achievements_fleets_imperial'],
	'small_reward_am' => ($USER['achievements_fleets_small'] * $small_reward_am),
	'support_reward_am' =>  ($USER['achievements_fleets_support'] * $support_reward_am),
	'battle_reward_am' => ($USER['achievements_fleets_battle'] * $battle_reward_am),
	'destruction_reward_am' => $destruction_reward_am + ($USER['achievements_fleets_destruction'] * $destruction_reward_am),
	'seige_reward_am' => ($USER['achievements_fleets_seige'] * $seige_reward_am),
	'heavy_reward_am' => ($USER['achievements_fleets_heavy'] * $heavy_reward_am),
	'imperial_reward_am' =>  ($USER['achievements_fleets_imperial'] * $imperial_reward_am),
	'small_reward_points' => $small_reward_points + ($USER['achievements_fleets_small'] * $small_reward_points),
	'support_reward_points' => $support_reward_points + ($USER['achievements_fleets_support'] * $support_reward_points),
	'battle_reward_points' => $battle_reward_points + ($USER['achievements_fleets_battle'] * $battle_reward_points),
	'destruction_reward_points' => $destruction_reward_points + ($USER['achievements_fleets_destruction'] * $destruction_reward_points),
	'seige_reward_points' => $seige_reward_points + ($USER['achievements_fleets_seige'] * $seige_reward_points),
	'heavy_reward_points' => $heavy_reward_points + ($USER['achievements_fleets_heavy'] * $heavy_reward_points),
	'imperial_reward_points' => $imperial_reward_points + ($USER['achievements_fleets_imperial'] * $imperial_reward_points),
	));
	$this->display('page.achievements.fleet.tpl');
	break;
	case 'tech':
	$manual_28_step = 1;
		if($USER['training'] == 0 && $USER['training_step'] == 28){
		$manual_28_step = 0;
		}
	$spy_reward_points = 8;
	$hacker_reward_points = 11;
	$invincible_reward_points = 9;
	$expedition_reward_points = 15;
	$graviton_reward_points = 40;
	$power_reward_points = 25;
	$energy_reward_points = 32;
	$brotherhood_reward_points = 10;
	$speed_reward_points = 20;
	$geologist_reward_points = 10;
	$spy_reward_am = 37;
	$hacker_reward_am = 20;
	$invincible_reward_am = 40;
	$expedition_reward_am = 45;
	$graviton_reward_am = 75;
	$power_reward_am = 50;
	$energy_reward_am = 25;
	$brotherhood_reward_am = 20;
	$speed_reward_am = 40;
	$geologist_reward_am = 20;
	
	$this->tplObj->assign_vars(array( 
	'manual_28_step' => $manual_28_step,
	'achievements_tech_spy' => $USER['achievements_tech_spy'],
	'achievements_tech_hacker' => $USER['achievements_tech_hacker'],
	'achievements_tech_invincible' => $USER['achievements_tech_invincible'],
	'achievements_tech_expedition' => $USER['achievements_tech_expedition'],
	'achievements_tech_graviton' => $USER['achievements_tech_graviton'],
	'achievements_tech_power' => $USER['achievements_tech_power'],
	'achievements_tech_energy' => $USER['achievements_tech_energy'],
	'achievements_tech_brotherhood' => $USER['achievements_tech_brotherhood'],
	'achievements_tech_speed' => $USER['achievements_tech_speed'],
	'achievements_tech_geologist' => $USER['achievements_tech_geologist'],
	'achievement_next_require_spy' => pretty_number((3 * $USER['achievements_tech_spy']) + 3),
	'achievement_next_require_hacker' => pretty_number((3 * $USER['achievements_tech_hacker']) + 3),
	'achievement_next_require_invincible_1' => pretty_number((2 * $USER['achievements_tech_invincible']) + 2),
	'achievement_next_require_invincible_2' => pretty_number((2 * $USER['achievements_tech_invincible']) + 2),
	'achievement_next_require_invincible_3' => pretty_number((2 * $USER['achievements_tech_invincible']) + 2),
	'achievement_next_require_expedition' => pretty_number((4 * $USER['achievements_tech_expedition']) + 4),
	'achievement_next_require_graviton' => pretty_number((1 * $USER['achievements_tech_graviton']) + 1),
	'achievement_next_require_power_1' => pretty_number((2 * $USER['achievements_tech_power']) + 2),
	'achievement_next_require_power_2' => pretty_number((2 * $USER['achievements_tech_power']) + 2),
	'achievement_next_require_power_3' => pretty_number((2 * $USER['achievements_tech_power']) + 2),
	'achievement_next_require_energy' => pretty_number((3 * $USER['achievements_tech_energy']) + 3),
	'achievement_next_require_brotherhood' => pretty_number((2 * $USER['achievements_tech_brotherhood']) + 2),
	'achievement_next_require_speed_1' => pretty_number((2 * $USER['achievements_tech_speed']) + 2),
	'achievement_next_require_speed_2' => pretty_number((2 * $USER['achievements_tech_speed']) + 2),
	'achievement_next_require_speed_3' => pretty_number((2 * $USER['achievements_tech_speed']) + 2),
	'achievement_next_require_geologist_1' => pretty_number((2 * $USER['achievements_tech_geologist']) + 2),
	'achievement_next_require_geologist_2' => pretty_number((2 * $USER['achievements_tech_geologist']) + 2),
	'achievement_next_require_geologist_3' => pretty_number((2 * $USER['achievements_tech_geologist']) + 2),
	'total_points_spy' => $spy_reward_points * $USER['achievements_tech_spy'],
	'total_points_hacker' => $hacker_reward_points * $USER['achievements_tech_hacker'],
	'total_points_invincible' => $invincible_reward_points * $USER['achievements_tech_invincible'],
	'total_points_expedition' => $expedition_reward_points * $USER['achievements_tech_expedition'],
	'total_points_graviton' => $graviton_reward_points * $USER['achievements_tech_graviton'],
	'total_points_power' => $power_reward_points * $USER['achievements_tech_power'],
	'total_points_energy' => $energy_reward_points * $USER['achievements_tech_energy'],
	'total_points_brotherhood' => $brotherhood_reward_points * $USER['achievements_tech_brotherhood'],
	'total_points_speed' => $speed_reward_points * $USER['achievements_tech_speed'],
	'total_points_geologist' => $geologist_reward_points * $USER['achievements_tech_geologist'],
	'spy_reward_am' => $spy_reward_am + ($USER['achievements_tech_spy'] * $spy_reward_am),
	'hacker_reward_am' => $hacker_reward_am + ($USER['achievements_tech_hacker'] * $hacker_reward_am),
	'invincible_reward_am' => $invincible_reward_am + ($USER['achievements_tech_invincible'] * $invincible_reward_am),
	'expedition_reward_am' => $expedition_reward_am + ($USER['achievements_tech_expedition'] * $expedition_reward_am),
	'graviton_reward_am' => $graviton_reward_am + ($USER['achievements_tech_graviton'] * $graviton_reward_am),
	'power_reward_am' => $power_reward_am + ($USER['achievements_tech_power'] * $power_reward_am),
	'energy_reward_am' => $energy_reward_am + ($USER['achievements_tech_energy'] * $energy_reward_am),
	'brotherhood_reward_am' => $brotherhood_reward_am + ($USER['achievements_tech_brotherhood'] * $brotherhood_reward_am),
	'speed_reward_am' => $speed_reward_am + ($USER['achievements_tech_speed'] * $speed_reward_am),
	'geologist_reward_am' => $geologist_reward_am + ($USER['achievements_tech_geologist'] * $geologist_reward_am),
	'spy_reward_points' => $spy_reward_points + ($USER['achievements_tech_spy'] * $spy_reward_points),
	'hacker_reward_points' => $hacker_reward_points + ($USER['achievements_tech_hacker'] * $hacker_reward_points),
	'invincible_reward_points' => $invincible_reward_points + ($USER['achievements_tech_invincible'] * $invincible_reward_points),
	'expedition_reward_points' => $expedition_reward_points + ($USER['achievements_tech_expedition'] * $expedition_reward_points),
	'graviton_reward_points' => $graviton_reward_points + ($USER['achievements_tech_graviton'] * $graviton_reward_points),
	'power_reward_points' => $power_reward_points + ($USER['achievements_tech_power'] * $power_reward_points),
	'energy_reward_points' => $energy_reward_points + ($USER['achievements_tech_energy'] * $energy_reward_points),
	'brotherhood_reward_points' => $brotherhood_reward_points + ($USER['achievements_tech_brotherhood'] * $brotherhood_reward_points),
	'speed_reward_points' => $speed_reward_points + ($USER['achievements_tech_speed'] * $speed_reward_points),
	'geologist_reward_points' => $geologist_reward_points + ($USER['achievements_tech_geologist'] * $geologist_reward_points),
	
	));
	
	
	$this->display('page.achievements.tech.tpl');
	break;
	
    }
	}
}
?>