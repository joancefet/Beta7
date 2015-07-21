<?php

class ShowReduceresourcesPage extends AbstractPage {


	public static $requireModule = 0;

	function __construct() {
		parent::__construct();
	}

	function show() {

		global $CONF, $LNG, $PLANET, $USER, $resource, $UNI;

		$act	     	= HTTP::_GP('act', '');
			$transCoasts	= 2500;
		
		if ($act == "take") {

			if (!isset($_POST['check_planet']) && !isset($_POST['check_moons']))
				$this->redirectTo('game.php?page=Reduceresources');

			
				if($transCoasts > $USER['darkmatter'])
				{
				$this->printMessage('Not enough darkmater', true, array('game.php?page=harvest', 4));
				}else{
				$USER['darkmatter']	-= $transCoasts;
			
			if(!isset($_POST['check_planet']))
				$_POST['check_planet'] = array();
			foreach($_POST['check_planet'] as $ID => $Value) {
				$sur = $GLOBALS['DATABASE']->uniquequery("SELECT id, metal, crystal, deuterium FROM ".PLANETS." where `id` = '".$Value."';");
				$GLOBALS['DATABASE']->multi_query("LOCK TABLE ".PLANETS." WRITE; UPDATE ".PLANETS." SET `metal` = metal - ".$sur['metal'].", `crystal` = crystal - ".$sur['crystal'].", `deuterium` = deuterium - ".$sur['deuterium']." WHERE `id` = '".$Value."'; UNLOCK TABLES;");
				
				if($sur['id'] == $PLANET['id'])
				continue;
				
				$PLANET['metal'] += $sur['metal'];
				$PLANET['crystal'] += $sur['crystal'];
				$PLANET['deuterium'] += $sur['deuterium'];
			}
			if(!isset($_POST['check_moons']))
				$_POST['check_moons'] = array();
			foreach($_POST['check_moons'] as $ID => $Value) {
				$sur = $GLOBALS['DATABASE']->uniquequery("SELECT id, metal, crystal, deuterium FROM ".PLANETS." where `id` = '".$Value."';");
				$GLOBALS['DATABASE']->multi_query("LOCK TABLE ".PLANETS." WRITE; UPDATE ".PLANETS." SET `metal` = metal - ".$sur['metal'].", `crystal` = crystal - ".$sur['crystal'].", `deuterium` = deuterium - ".$sur['deuterium']." WHERE `id` = '".$Value."'; UNLOCK TABLES;");
				
				if($sur['id'] == $PLANET['id'])
				continue;
				
				$PLANET['metal'] += $sur['metal'];
				$PLANET['crystal'] += $sur['crystal'];
				$PLANET['deuterium'] += $sur['deuterium'];
			}
			$this->printMessage('All your ressource are gathered on the planet', true, array('game.php?page=Reduceresources', 4));
			}
		} else {
			$Planets		= array();
			$Moons 			= array();
			if (isset($USER['PLANETS'])) {
				$USER['PLANETS']	= getPlanets($USER);
			}
			foreach($USER['PLANETS'] as $ID => $PlanetQuery) {
				if ($ID == $PLANET['id']) continue;
				if ($PlanetQuery['planet_type'] == 3) {
					$Moons[$PlanetQuery['id']] = $PlanetQuery['name'] . " [" . $PlanetQuery['galaxy'] . ":" . $PlanetQuery['system'] . ":" . $PlanetQuery['planet'] . "]";
				} elseif ($PlanetQuery['planet_type'] == 1) {
					$Planets[$PlanetQuery['id']] = $PlanetQuery['name'] . " [".$PlanetQuery['galaxy'] . ":" . $PlanetQuery['system'] . ":" . $PlanetQuery['planet'] . "]";
				}
			}
//			$this->tplObj->loadscript("jquery.countdown.js");
			$this->tplObj->assign_vars(array(
				'PlanetsList'				=> $Planets,
				'MoonsList'					=> $Moons,
			));
			$this->display('page.harvest.default.tpl');
		}
	}
}
?>