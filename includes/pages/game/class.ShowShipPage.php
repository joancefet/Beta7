<?php

require_once('includes/classes/class.ManageShip.php');
class ShowShipPage extends AbstractPage
{	
	function __construct() 
	{
		parent::__construct();
	}
	
	public function show(){
		
		global $USER, $PLANET, $LNG, $UNI, $CONF;
		
		$max_upgrades_devices = MAX_UPGRADES_DEVICES;
		
		$res2 = $GLOBALS['DATABASE']->query("SELECT * FROM ".SHIPS." WHERE owner_id = ".$USER['id'].";");
		if($GLOBALS['DATABASE']->numRows($res2) == 0){
			$SQL = "INSERT INTO ".SHIPS." SET 
			`ship_name`				= 'Nave',
			`ship_destroyed`		= 'N',
			`owner_id`				= '".$USER['id']."',
			`hull`					= 0,
			`engines`				= 0,
			`power`					= 0,
			`computer`				= 0,
			`sensors`				= 0,
			`beams`					= 0,
			`torp_launchers`		= 0,
			`torps`					= 0,
			`shields`				= 0,
			`armor`					= 0,
			`armor_pts`				= 10,
			`cloak`					= 0,
			`credits`				= 1000,
			`galaxy`				= 1,
			`system`				= 1,
			`ship_ore`				= 0,
			`ship_organics`			= 0,
			`ship_goods`			= 0,
			`ship_energy`			= 100,
			`ship_colonists`		= 0,
			`ship_fighters`			= 10,
			`ship_damage`			= 0,
			`turns`					= 1200,
			`on_planet`				= 'N',
			`dev_warpedit`			= 0,
			`dev_genesis`			= 1,
			`dev_beacon`			= 0,
			`dev_emerwarp`			= 0,
			`dev_escapepod`			= 'N',
			`dev_fuelscoop`			= 'N',
			`dev_minedeflector`		= 0,
			`turns_used`			= 0,
			`last_login`			= '0000-00-00 00:00:00',
			`last_kami`				= '0000-00-00 00:00:00',
			`last_sofa`				= '0000-00-00 00:00:00',
			`ship_kills`			= 0,
			`ship_deaths`			= 0,
			`rating`				= 0,
			`score`					= 0,
			`points`				= 0,
			`team`					= 0,
			`team_invite`			= 0,
			`planet_id`				= 0,
			`preset1`				= 0,
			`preset2`				= 0,
			`preset3`				= 0,
			`preset4`				= 0,
			`preset5`				= 0,
			`trade_colonists`		= 'Y',
			`trade_fighters`		= 'N',
			`trade_torps`			= 'N',
			`trade_energy`			= 'Y',
			`cleared_defences`		= ' ',
			`dev_lssd`				= 'N';";
			
			$GLOBALS['DATABASE']->query($SQL);
		}
		
		$res = $GLOBALS['DATABASE']->query("SELECT * FROM ".SHIPS." WHERE owner_id = ".$USER['id'].";");
		$playerinfo = $GLOBALS['DATABASE']->fetch_array($res);
		
		$shiptypes[0]= "ship-1.gif";
		$shiptypes[1]= "ship-2.gif";
		$shiptypes[2]= "ship-3.gif";
		$shiptypes[3]= "ship-4.gif";
		$shiptypes[4]= "ship-5.gif";
		$shiptypes[5]= "ship-6.gif";
		$shiptypes[6]= "ship-7.gif";
		$shiptypes[7]= "ship-8.gif";
		
		$shipavg = Manage_Ship::get_avg_tech($playerinfo, "ship");

		if ($shipavg < 10)
		   $ship_image = 0;
		elseif ($shipavg < 15)
		   $ship_image = 1;
		elseif ($shipavg < 20)
			$ship_image = 2;
		elseif ($shipavg < 25)
			$ship_image = 3;
		elseif ($shipavg < 30)
			$ship_image = 4;
		elseif ($shipavg < 35)
			$ship_image = 5;
		elseif ($shipavg < 40)
			$ship_image = 6;
		elseif ($shipavg < 45)
			$ship_image = 7;
		else
		   $ship_image = 7;

		$holds_used = $playerinfo['ship_ore'] + $playerinfo['ship_organics'] + $playerinfo['ship_goods'] + $playerinfo['ship_colonists'];
		$holds_max = Manage_Ship::NUM_HOLDS($playerinfo['hull']);
		$armor_pts_max = Manage_Ship::NUM_ARMOR($playerinfo['armor']);
		$ship_fighters_max = Manage_Ship::NUM_FIGHTERS($playerinfo['computer']);
		$torps_max = Manage_Ship::NUM_TORPEDOES($playerinfo['torp_launchers']);
		$energy_max = Manage_Ship::NUM_ENERGY($playerinfo['power']);
		$escape_pod = ($playerinfo['dev_escapepod'] == 'Y') ? 'yes' : 'no';
		$fuel_scoop = ($playerinfo['dev_fuelscoop'] == 'Y') ? 'yes' : 'no';
		$lssd = ($playerinfo['dev_lssd'] == 'Y') ? 'yes' : 'no';

		if($playerinfo['dev_escapepod'] == 'N')
		{
			$escape_pod_warning = '<span class="ship-component-warning-span">CRITICAL COMPONENT NOT INSTALLED</span>';
		}

		if($playerinfo['dev_minedeflector'] == '0')
		{
			$mine_deflector_warning = '<span class="ship-component-warning-span">WARNING YOU HAVE NO MINEDEFLECTORS</span>';
		}
		if($playerinfo['dev_emerwarp'] == '0')
		{
			$emergancy_warp_warning = '<span class="ship-component-warning-span">WARNING NO EMERGENCY WARPS INSTALLED</span>';
		}
		
		/*
		Ship Strength compares components vs what your carrying, e.g.torp launchers vs torpedoes carrying.
		*/
		
		$componenet_strength = $playerinfo['power'] + $playerinfo['torp_launchers'] + $playerinfo['armor'] + $playerinfo['computer'];
		$componenet_strength = $componenet_strength/4;
		$strength_total = Manage_Ship::percent($playerinfo['armor_pts'],$armor_pts_max) + Manage_Ship::percent($playerinfo['ship_fighters'],$ship_fighters_max) + Manage_Ship::percent($playerinfo['torps'],$torps_max) + Manage_Ship::percent($playerinfo['ship_energy'],$energy_max);
		$strength_total = $strength_total / 4;
		
		
		$this->tplObj->assign_vars(
				array(
					'ship_image' 				=> $shiptypes[$ship_image],
					'character_name'			=> $USER['username'],
					'ship_name'					=> $playerinfo['ship_name'],
					'credits'					=> Manage_Ship::NUMBER($playerinfo['credits']),
					'fsl_hull'					=> Manage_Ship::filter_ship_levels($playerinfo['hull']),
					'max_hull'					=> ($playerinfo['hull']/$max_upgrades_devices)*100,
					'l_level'					=> "Level:", //$l_level,
					'hull'						=> $playerinfo['hull'],
					'fsl_engines'				=> Manage_Ship::filter_ship_levels($playerinfo['engines']),
					'max_engines'				=> ($playerinfo['engines']/$max_upgrades_devices)*100,
					'engines'					=> $playerinfo['engines'],
					'fsl_power'					=> Manage_Ship::filter_ship_levels($playerinfo['power']),
					'max_power'					=> ($playerinfo['power']/$max_upgrades_devices)*100,
					'power'						=> $playerinfo['power'],
					'fsl_computer'				=> Manage_Ship::filter_ship_levels($playerinfo['computer']),
					'max_computer'				=> ($playerinfo['computer']/$max_upgrades_devices)*100,
					'computer'					=> $playerinfo['computer'],
					'fsl_sensors'				=> Manage_Ship::filter_ship_levels($playerinfo['sensors']),
					'max_sensors'				=> ($playerinfo['sensors']/$max_upgrades_devices)*100,
					'sensors'					=> $playerinfo['sensors'],
					'fsl_armor'					=> Manage_Ship::filter_ship_levels($playerinfo['armor']),
					'max_armor'					=> ($playerinfo['armor']/$max_upgrades_devices)*100,
					'armor'						=> $playerinfo['armor'],
					'fsl_shields'				=> Manage_Ship::filter_ship_levels($playerinfo['shields']),
					'max_shields'				=> ($playerinfo['shields']/$max_upgrades_devices)*100,
					'shields'					=> $playerinfo['shields'],
					'fsl_beams'					=> Manage_Ship::filter_ship_levels($playerinfo['beams']),
					'max_beams'					=> ($playerinfo['beams']/$max_upgrades_devices)*100,
					'beams'						=> $playerinfo['beams'],
					'fsl_torp_launchers'		=> Manage_Ship::filter_ship_levels($playerinfo['torp_launchers']),
					'max_torp_launchers'		=> ($playerinfo['torp_launchers']/$max_upgrades_devices)*100,
					'torp_launchers'			=> $playerinfo['torp_launchers'],
					'fsl_cloak'					=> Manage_Ship::filter_ship_levels($playerinfo['cloak']),
					'max_cloak'					=> ($playerinfo['cloak']/$max_upgrades_devices)*100,
					'cloak'						=> $playerinfo['cloak'],
					'escape_pod_warning'		=> $escape_pod_warning,
					'escape_pod'				=> $escape_pod,
					'lssd'						=> $lssd,
					'fuel_scoop'				=> $fuel_scoop,
					'fsl_shipavg'				=> Manage_Ship::filter_ship_levels($shipavg),
					'max_shipavg'				=> ($shipavg/$max_upgrades_devices)*100,
					'shipavg'					=> Manage_Ship::NUMBER($shipavg, 2),
					'fsl_componenet_strength'	=> Manage_Ship::filter_ship_levels($componenet_strength),
					'strength_total'			=> $strength_total,
					'per_ship_energy'			=> Manage_Ship::percent($playerinfo['ship_energy'],$energy_max),
					'ship_energy'				=> Manage_Ship::NUMBER($playerinfo['ship_energy']),
					'energy_max'				=> Manage_Ship::NUMBER($energy_max),
					'per_holds_used'			=> Manage_Ship::percent($holds_used,$holds_max),
					'holds_used'				=> Manage_Ship::NUMBER($holds_used),
					'holds_max'					=> Manage_Ship::NUMBER($holds_max),
					'ship_organics'				=> Manage_Ship::NUMBER($playerinfo['ship_organics']),
					'ship_ore'					=> Manage_Ship::NUMBER($playerinfo['ship_ore']),
					'ship_goods'				=> Manage_Ship::NUMBER($playerinfo['ship_goods']),
					'ship_colonists'			=> Manage_Ship::NUMBER($playerinfo['ship_colonists']),
					'per_armor_pts'				=> Manage_Ship::percent($playerinfo['armor_pts'],$armor_pts_max),
					'armor_pts'					=> Manage_Ship::NUMBER($playerinfo['armor_pts']),
					'armor_pts_max'				=> Manage_Ship::NUMBER($armor_pts_max),
					'per_ship_fighters'			=> Manage_Ship::percent($playerinfo['ship_fighters'],$ship_fighters_max),
					'ship_fighters'				=> Manage_Ship::NUMBER($playerinfo['ship_fighters']),
					'ship_fighters_max'			=> Manage_Ship::NUMBER($ship_fighters_max),
					'per_torps'					=> Manage_Ship::percent($playerinfo['torps'],$torps_max),
					'torps'						=> Manage_Ship::NUMBER($playerinfo['torps']),
					'torps_max'					=> Manage_Ship::NUMBER($torps_max),
					'dev_beacon'				=> $playerinfo['dev_beacon'],
					'dev_warpedit'				=> $playerinfo['dev_warpedit'],
					'dev_genesis'				=> $playerinfo['dev_genesis'],
					'emergancy_warp_warning'	=> $emergancy_warp_warning,
					'dev_emerwarp'				=> $playerinfo['dev_emerwarp'],
					'mine_deflector_warning'	=> $mine_deflector_warning,
					'dev_minedeflector'			=> $playerinfo['dev_minedeflector'],
				)
		);
		$this->display("page.ship.default.tpl");
		
	}
	
	
}
?>