<?php

class ShowHarvestPage extends AbstractPage {

	public static $requireModule = 0;
    var $HarvestPrice = array(1=>5000,3=>10000,6=>20000, 15=>40000); // (weeks => price dm)
	function __construct() {
		parent::__construct();
	}

	function show() {
	global $CONF, $LNG, $PLANET, $USER, $resource, $UNI;
	
	
	
	if($USER['harvest_delay'] < TIMESTAMP - 24*60*60){
                    
		if($USER['harvest_time'] < 5){

			$time = TIMESTAMP;
			$GLOBALS['DATABASE']->query("UPDATE `uni1_users` SET `harvest_time` = 5,  `harvest_delay` = ".$time." where `id` = ".$USER['id'].";");
			$this->printMessage("We are setting back your harvest counters to 5.", true, array('game.php?page=harvest', 2));
			die();
                        
                    } else{ 
                        $time = TIMESTAMP;
			$GLOBALS['DATABASE']->query("UPDATE `uni1_users` SET `harvest_delay` = ".$time." where `id` = ".$USER['id'].";");
			$this->printMessage("Loading your data.", true, array('game.php?page=harvest', 2));
			die();
                        
                    }
            
                }

if(!empty($USER['urlaubs_modus'])){
	$this->printMessage("You can't access this page while you are in V mode!", true, array('game.php?page=overview', 2));
	die();
}	
				
	if($_POST){

        $mode   = HTTP::_GP('con', '');

        switch($mode){
        case 'extra':
		
		   $take = HTTP::_GP('buy',0);
		   $take = $GLOBALS['DATABASE']->escape($take);
                if(!array_key_exists($take,$this->HarvestPrice)){
		$this->printMessage("Invalid Option", true, array('?page=Harvest', 3));
                }else{
		//option is ok . go forward
		
                //enough dm ? 
                if($USER['darkmatter'] < $this->HarvestPrice[$take]){
		$this->printMessage("Not enough DM", true, array('?page=Harvest', 3));
		die();
                }
                $USER['darkmatter'] -= $this->HarvestPrice[$take];
                $GLOBALS['DATABASE']->query("Update ".USERS." SET `harvest_time` = `harvest_time` + ".($take)." WHERE `id` = ".$USER['id']." ; ");
                $this->printMessage("You have bought ".$take." Harvest Points", true, array('?page=Harvest', 3));
                die();
                }
        break;
		case 'gather':
		
		if($USER['harvest_time'] == 0 ){
		$this->printMessage("No Harvest Points Left!", true, array('game.php?page=Harvest', 2));
		die();
	}

		if (!isset($_POST['check_planet']) && !isset($_POST['check_moons']))
				$this->redirectTo('game.php?page=harvest');
		if(!isset($_POST['check_planet']))
				$_POST['check_planet'] = array();
			foreach($_POST['check_planet'] as $ID => $Value) {
				$sur = $GLOBALS['DATABASE']->uniquequery("SELECT metal, crystal, deuterium FROM ".PLANETS." where `id` = '".$Value."';");
				
				$GLOBALS['DATABASE']->multi_query("LOCK TABLE ".PLANETS." WRITE; UPDATE ".PLANETS." SET `metal` = metal - ".$sur['metal'].", `crystal` = crystal - ".$sur['crystal'].", `deuterium` = deuterium - ".$sur['deuterium']." WHERE `id` = '".$Value."'; UNLOCK TABLES;");
				$PLANET['metal'] += $sur['metal'];
				$PLANET['crystal'] += $sur['crystal'];
				$PLANET['deuterium'] += $sur['deuterium'];
				//$PLANET['light_hunter'] += $sur['light_hunter'];
			}
				if(!isset($_POST['check_moons']))
				$_POST['check_moons'] = array();
			foreach($_POST['check_moons'] as $ID => $Value) {
				$surr = $GLOBALS['DATABASE']->uniquequery("SELECT metal,crystal, deuterium FROM ".PLANETS." where `id` = '".$Value."';");
				$GLOBALS['DATABASE']->multi_query("LOCK TABLE ".PLANETS." WRITE; UPDATE ".PLANETS." SET `metal` = metal - ".$surr['metal'].", `crystal` = crystal - ".$surr['crystal'].", `deuterium` = deuterium - ".$surr['deuterium']." WHERE `id` = '".$Value."'; UNLOCK TABLES;");
				$PLANET['metal'] += $surr['metal'];
				$PLANET['crystal'] += $surr['crystal'];
				$PLANET['deuterium'] += $surr['deuterium'];
				//$PLANET['light_hunter'] += $surr['light_hunter'];
			}
						
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `harvest_time` = `harvest_time` - 1 where `id` = '".$USER['id']."';");
			$this->printMessage($LNG['h_ok'], true, array('game.php?page=harvest', 4));
			

		        
        break;
		}
		}
		
			$Planets		= array();
			$Moons 			= array();
			if (isset($USER['PLANETS'])) {
				$USER['PLANETS']	= getPlanets($USER);
			}
			foreach($USER['PLANETS'] as $ID => $PlanetQuery) {
				if ($ID == $PLANET['id']) continue;
				if ($PlanetQuery['planet_type'] == 3) {
					$Moons[$PlanetQuery['id']] = " [" . $PlanetQuery['galaxy'] . ":" . $PlanetQuery['system'] . ":" . $PlanetQuery['planet'] . "]";
				} elseif ($PlanetQuery['planet_type'] == 1) {
					$Planets[$PlanetQuery['id']] = " [".$PlanetQuery['galaxy'] . ":" . $PlanetQuery['system'] . ":" . $PlanetQuery['planet'] . "]";
				}
			}
			$this->tplObj->loadscript("jquery.countdown.js");
			$this->tplObj->assign_vars(array(
			'prices' => $this->HarvestPrice,
			'PlanetsList'				=> $Planets,
			'MoonsList'					=> $Moons,
			'harvest'					=> $USER['harvest_time'],
            'p_state' => $USER['harvest_time'],
            'p_delay'	      => ((($USER['harvest_delay']+24*60*60) < TIMESTAMP) ? true : (($USER['harvest_delay']+24*60*60) - TIMESTAMP)),
			));
			$this->display('page.harvest.default.tpl');
		}
	}

?>