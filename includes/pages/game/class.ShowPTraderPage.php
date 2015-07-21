<?php
class ShowPTraderPage extends AbstractPage
{	
	public static $requireModule = 0;
	
	function __construct() 
	{
		parent::__construct();
	}
	
	function show()
	{
		global $CONF, $LNG, $PLANET, $USER, $db, $resource, $UNI;

		//$PlanetRess = new ResourceUpdate();
		//$PlanetRess->CalcResource();
		//$PlanetRess->SavePlanetToDB();

		$this->tplObj->loadscript('p_trader.js');
		
		if($_POST){

			//if($_SESSION['last']['user_side'] != 'game.php?page=p_trade'){
			//	$this->printMessage("Page error, err nr 5.", true, array('game.php?page=ptrade', 2));
			//	die();
			//}

			//$PlanetRess = new ResourceUpdate();
			//$PlanetRess->CalcResource();
			//$PlanetRess->SavePlanetToDb();
			/*totalPoints
			oldMetal
			oldCrystal
			oldDeuterium
			newMetal
			newCrystal
			newDeuterium
			*/
			$total_points = isset($_POST['totalPoints']) ? $_POST['totalPoints'] : 0;
			$new_metal = isset($_POST['newMetal']) ? $_POST['newMetal'] : 0;
			$new_crystal = isset($_POST['newCrystal']) ? $_POST['newCrystal'] : 0;
			$new_deuterium = isset($_POST['newDeuterium']) ? $_POST['newDeuterium'] : 0;
			
			$userId = isset($_POST['userid']) ? $_POST['userid'] : null;
			
			$recalculate = $new_metal + 2*$new_crystal + 4*$new_deuterium ;
			if($recalculate != $total_points && ($recalculate - $total_points > 2000)){
				$this->printMessage("Error with inputs.", true, array('game.php?page=PTrader', 2));
				die();
			}

			if($new_metal < 0 || $new_crystal < 0 || $new_deuterium < 0 ){
				$this->printMessage("ERROR with negative numbers.", true, array('game.php?page=PTrader', 2));
				die();
			}
		//	if($USER['antimatter'] < 250 && $USER['premium_reward_days'] < TIMESTAMP){
			//	$this->printMessage("Not enough antimatter.", true, array('game.php?page=PTrader', 2));
		//		die();
		//	}
			$PLANET['metal'] 	= $GLOBALS['DATABASE']->sql_escape($new_metal);
			$PLANET['crystal'] 	= $GLOBALS['DATABASE']->sql_escape($new_crystal);
			$PLANET['deuterium']= $GLOBALS['DATABASE']->sql_escape($new_deuterium);

			$GLOBALS['DATABASE']->query("UPDATE ".PLANETS." set `metal` = '".$GLOBALS['DATABASE']->sql_escape($new_metal)."', `crystal` = '".$GLOBALS['DATABASE']->sql_escape($new_crystal)."', `deuterium` = '".$GLOBALS['DATABASE']->sql_escape($new_deuterium)."' where `id` = '".$PLANET['id']."' ;");
			
			
			if($USER['premium_reward_days'] < TIMESTAMP){
			//$GLOBALS['DATABASE']->query("UPDATE ".USERS." set `antimatter` = antimatter - '250' WHERE `id` = '".$USER['id']."' ;");
			}
			
			$this->printMessage("Exchange has been successfully made.", true, array('game.php?page=PTrader', 2));
			die();
		}

		$recalculate = $PLANET['metal'] + $PLANET['crystal']*2 + $PLANET['deuterium']*4 ;
		//$GLOBALS['DATABASE']->query("UPDATE ".USERS." set `ptrader_total` = '".$recalculate."' where `id` = '".$USER['id']."' ;");
		$_SESSION['total_p'] = $recalculate;
		$this->tplObj->assign_vars(array(
			'total_points'	=> pretty_number(floattostring($recalculate)),
			'total_points11'	=> floattostring($recalculate),
			'planet_metal'	=> pretty_number($PLANET['metal']),
			'planet_crystal'	=> pretty_number($PLANET['crystal']),
			'planet_deuterium'	=> pretty_number($PLANET['deuterium']),
			'planet_metal11'	=> $PLANET['metal'],
			'planet_crystal11'	=> $PLANET['crystal'],
			'planet_deuterium11'	=> $PLANET['deuterium'],
			'planet_metal_t'	=> pretty_number($PLANET['metal']),
			'planet_crystal_t'	=> pretty_number(floattostring($PLANET['crystal'] *2)),
			'planet_deuterium_t'	=> pretty_number(floattostring($PLANET['deuterium']*4)),
		));
		$this->display('page.ptrader.default.tpl');
	}
}
?>