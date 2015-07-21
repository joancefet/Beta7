<?php

class ShowFleetMasterPage extends AbstractPage
{

	function __construct() 
	{
		parent::__construct();
	}
	
	function show(){
		global $USER, $PLANET, $LNG, $UNI, $CONF,$pricelist, $db;
		
		$id = $USER['id'];

		$fleetmaster = $GLOBALS['DATABASE']->getFirstRow("SELECT * FROM uni1_statpoints ORDER BY `fleet_points` DESC LIMIT 1;");

		$current = $GLOBALS['DATABASE']->getFirstRow("SELECT `fleet_speed` FROM uni1_config;");
		
		if ($USER['authlevel'] == 3) {
			$access = 3;
		} elseif ($fleetmaster['id_owner'] == $id) {
			$access = 1;
		} else {
			$this->printMessage($LNG['flm1'], true, array('game.php?page=overview', 3));
		}

		if ($USER['username'] == 'Mighty') {
			$access = 4;
		}
		
		$upper_limit  	= 20;
		$down_limit  	= 5;
		$dm_needed  	= 5000;

		if ($_POST) {
		  if($USER['FM_cooldown']+24*60*60 < TIMESTAMP)
			$chosed = (int)HTTP::_GP('speed',0);
			if ( $chosed < $down_limit || $chosed > $upper_limit ){
				$this->printMessage("The Universe Speed must be between $down_limit and $upper_limit you choosed $chosed.", true, array('game.php?page=FleetMaster', 3));
			} elseif ( $USER['darkmatter'] < $dm_needed) {
				$this->printMessage("You don't have enough Dark Matter (".pretty_number($dm_needed)." DM).", true, array('game.php?page=FleetMaster', 3));
			} elseif ( $chosed == $current['fleet_speed']) {
				$this->printMessage("Why would you waste your DM by setting the same speed again. ;)", true, array('game.php?page=FleetMaster', 3));
			} else {
				$GLOBALS['DATABASE']->query("UPDATE uni1_config SET fleet_speed = ({$chosed} * 2500);");
				$GLOBALS['DATABASE']->query("UPDATE ".USERS." set `FM_cooldown` = '".TIMESTAMP."' where `id` = '".$USER['id']."';");
				$USER['darkmatter'] -= $dm_needed;
				$this->printMessage("You have changed the fleet speed of the universe to $chosed.", true, array('game.php?page=FleetMaster', 3));
			}

		} 

		$this->tplObj->assign_vars(
		array(
			'access' => $access,
			'current_speed' => $current['fleet_speed'],
			'up' => $upper_limit,
			'down' => $down_limit,
			'status'	      => ((($USER['FM_cooldown']+24*60*60) < TIMESTAMP) ? true : (($USER['FM_cooldown']+24*60*60) - TIMESTAMP)),
			'username' => $USER['username'],
		));	

		$this->display("page.fleetmaster.tpl");
	}
}