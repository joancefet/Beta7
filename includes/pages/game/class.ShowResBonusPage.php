<?php
class ShowResBonusPage extends AbstractPage
{	
	public static $requireModule = 0;
	
	function __construct() 
	{
		parent::__construct();
	}
	
	function show()
	{
		global $CONF, $LNG, $PLANET, $USER, $db, $resource, $UNI;


//$db->query("UPDATE ".USERS." set `res_bonus_time` = 0;");



		$PlanetRess = new ResourceUpdate();
		$PlanetRess->CalcResource();
		$PlanetRess->SavePlanetToDB();

//start the template
		$this->tplObj->loadscript('countdown.js');

		$dm_cost = 300000;
		$am_cost = 1;

		if(!empty($USER['urlaubs_modus'])){
			$this->printMessage("You can't access this page while you are in V mode!", true, array('game.php?page=overview', 2));
			die();
		}

//fetch the best planet
		$za_planet1 = $GLOBALS['DATABASE']->uniquequery("SELECT *FROM ".PLANETS." where `id_owner` = ".$USER['id']." order by `metal_perhour` DESC limit 1;");
		$za_planet2 = $GLOBALS['DATABASE']->uniquequery("SELECT *FROM ".PLANETS." where `id_owner` = ".$USER['id']." order by `crystal_perhour` DESC limit 1;");
		$za_planet3 = $GLOBALS['DATABASE']->uniquequery("SELECT *FROM ".PLANETS." where `id_owner` = ".$USER['id']." order by `deuterium_perhour` DESC limit 1;");

		$buy_type = HTTP::_GP('buy','');

		$metal   	= 24* $za_planet1['metal_perhour'];
		$crystal   	= 24*$za_planet2['crystal_perhour'];
		$deuterium  = 24*$za_planet3['deuterium_perhour'];
		$metal2   	= 36* $za_planet1['metal_perhour'];
		$crystal2   	= 36*$za_planet2['crystal_perhour'];
		$deuterium2  = 36*$za_planet3['deuterium_perhour'];

		$time = "1 HOUR";
		if($_POST){
			if ($buy_type == 'Buy With Antimatter') {
				if($USER['antimatter'] >= $am_cost){
					if($USER['res_bonus_time']+ 12*60*60 < TIMESTAMP){
				//update
						if($USER['premium_until'] < TIMESTAMP){
						$GLOBALS['DATABASE']->query("UPDATE ".USERS." set `res_bonus_time` = '".TIMESTAMP."', antimatter = antimatter - {$am_cost} where `id` = '".$USER['id']."';");
						$PLANET['metal'] += $metal;
						$PLANET['crystal'] += $crystal;
						$PLANET['deuterium'] += $deuterium ;

						$this->printMessage("Pack has been bought and the account has been updated succesfully!", true, array('game.php?page=ResBonus', 2));
						die();
						die();
					}elseif($USER['premium_until'] > TIMESTAMP){
					$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET antimatter = antimatter - {$am_cost} where `id` = '".$USER['id']."';");
						$GLOBALS['DATABASE']->query("UPDATE ".USERS." set `res_bonus_time` = '".TIMESTAMP."' where `id` = '".$USER['id']."';");
						$PLANET['metal'] += $metal2;
						$PLANET['crystal'] += $crystal2;
						$PLANET['deuterium'] += $deuterium2;
						
						$this->printMessage("Pack has been bought and the account has been updated succesfully!", true, array('game.php?page=ResBonus', 2));
						die();
						die();
					}
					}else{
						$this->printMessage("You can use this pack Twice at every 12 hours!", true, array('game.php?page=ResBonus', 2));
						die();
					}
				}else{
					$this->printMessage("You do not have enough Antimatter!", true, array('game.php?page=ResBonus', 2));
					die();
				}
			}
			elseif ($buy_type == 'Buy With Darkmatter') {
				if($USER['darkmatter'] >= $dm_cost){
					if($USER['res_bonus_time']+ 12*60*60 < TIMESTAMP){
				 if($USER['premium_until'] < TIMESTAMP){
						$USER['darkmatter'] -= $dm_cost;
						$GLOBALS['DATABASE']->query("UPDATE ".USERS." set `res_bonus_time` = '".TIMESTAMP."' where `id` = '".$USER['id']."';");
						$PLANET['metal'] += $metal;
						$PLANET['crystal'] += $crystal;
						$PLANET['deuterium'] += $deuterium ;

						$this->printMessage("Pack has been bought and the account has been updated succesfully!", true, array('game.php?page=ResBonus', 2));
						die();
						die();
					}elseif($USER['premium_until'] > TIMESTAMP){
					    $USER['darkmatter'] -= $dm_cost;
						$GLOBALS['DATABASE']->query("UPDATE ".USERS." set `res_bonus_time` = '".TIMESTAMP."' where `id` = '".$USER['id']."';");
						$PLANET['metal'] += $metal2;
						$PLANET['crystal'] += $crystal2;
						$PLANET['deuterium'] += $deuterium2;
						
						$this->printMessage("Pack has been bought and the account has been updated succesfully!", true, array('game.php?page=ResBonus', 2));
						die();
						die();
					}
					}else{
						$this->printMessage("You can use this pack Twice at every 12 hours!", true, array('game.php?page=ResBonus', 2));
						die();
					}
				}else{
					$this->printMessage("You do not have enough DarkMatter!", true, array('game.php?page=ResBonus', 2));
					die();
				}
			}
	//verificam daca au trecut 24h
		}

		$this->tplObj->assign_vars(array( 
			'cost'		      	=> pretty_number($dm_cost),
			'time'		      	=> $time,
			'price_metal'     	=> pretty_number($metal),
			'price_crystal'   	=> pretty_number($crystal),
			'price_deuterium' 	=> pretty_number($deuterium), 
			'price_metal2'     => pretty_number($metal2),
			'price_crystal2'   => pretty_number($crystal2),
			'price_deuterium2' => pretty_number($deuterium2),
			'dm' 				=> $USER['darkmatter'],
			'am' 				=> $USER['antimatter'],
			'p_state' => (($USER['premium_until'] > TIMESTAMP) ? "You have premium account until" :"You don't have premium account active" ),
			'premium_active' => ((!empty($USER['premium_until']) && $USER['premium_until'] > TIMESTAMP) ? ($USER['premium_until'] - TIMESTAMP) : 0),
			'status'	      	=> ((($USER['res_bonus_time']+ 12*60*60) < TIMESTAMP) ? true : (($USER['res_bonus_time']+12*60*60) - TIMESTAMP)),
			));


		$this->display('page.resbonus.default.tpl');

	}
}
?>