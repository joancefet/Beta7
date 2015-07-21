<?php

class ShowDmdeffPage extends AbstractPage
{
            
	function __construct() 
	{
		parent::__construct();
	}
	
	public static $ChargeDM = array(
'defence'	=> array(401 => [0,1], 402 => [0,1], 403 => [0,1], 404 => [0,2], 405 => [0,1], 406 => [0,7], 410 => [0,1125], 412 => [0,650], 413 => [0,1825], 414 => [0,7000], 416 => [0,18], 417 => [0,24], 418 => [0,160], 419 => [0,3475], 420 => [0,1], 421 => [0,20], 422 => [0,1369]),
	);

	public static $ChargeDN = array(
	'fleets'	=> array(401 => [0,'Missile Launcher'], 402 => [0,'Light Laser Turret'], 403 => [0,'Heavy Laser Turret'], 404 => [0,'Gauss Cannon'], 405 => [0,'Ion Cannon'], 406 => [0,'Plasma Cannon'], 409 => [0,'Atmospheric Shield'], 410 => [0,'Gravitons Cannon'], 411 => [0,'Orbital Defence Platform'], 412 => [0,'Lepton Gun'], 413 => [0,'Proton Gun'], 414 => [0,'Canyon'], 415 => [0,'Quantum Gun'], 416 => [0,'Hydrogen Gun'], 417 => [0,'Dora Gun'], 418 => [0,'Photon Cannon'], 419 => [0,'Particle Emitter'], 420 => [0,'Mehador Slim'], 421 => [0,'Iron Mehador'], 422 => [0,'Grand Mehador']),
	);
	

	
	function send(){
	global $USER, $PLANET, $LNG, $UNI, $CONF,$resource,$pricelist, $reslist;
	$this->tplObj->loadscript("dmfleet.js");
	if ($PLANET[$resource[21]] == 0)
	{
	$this->printMessage($LNG['bd_shipyard_required']);
	}
	
	$number = HTTP::_GP('count',0);
	$shipID			= HTTP::_GP('shipID', 0);
	$this->printMessage($shipID);
	$ChargeDM = array(
	'defence'	=> array(401 => [0,1], 402 => [0,1], 403 => [0,1], 404 => [0,2], 405 => [0,1], 406 => [0,7], 410 => [0,1125], 412 => [0,650], 413 => [0,1825], 414 => [0,7000], 416 => [0,18], 417 => [0,24], 418 => [0,160], 419 => [0,3475], 420 => [0,1], 421 => [0,20], 422 => [0,1369]),
	);
	$price = $number * $ChargeDM['defence'][$shipID][1];
	$isPossible = $GLOBALS['DATABASE']->getFirstCell("SELECT COUNT(*) FROM uni1_fleets WHERE fleet_target_owner = ".$USER['id']." AND fleet_end_stay < ".(TIMESTAMP + 90)." AND fleet_mess = 0 AND fleet_mission = '1';");
	
	if ($PLANET[$resource[21]] == 0)
	{
	$this->printMessage($LNG['bd_shipyard_required']);
	}elseif($isPossible != 0)
	{
	$this->printMessage('you can not buy new defense when you have an incoming attack');
	}elseif($USER['instant_defense'] + $price > 500000000)
	{
	$this->printMessage('you exeeded the maximum buyable units for today ('.(500000000 - $USER['instant_defense']).' left)');
	}elseif($USER['darkmatter'] < $price)
	{
	$this->printMessage('you dont have enough darkmatter!');
	}
	
	
	$PLANET[$resource[$shipID]]		+= $number;
	$GLOBALS['DATABASE']->query("UPDATE ".PLANETS." SET ".$resource[$shipID]." = ".$resource[$shipID]." + ".$number." where `id` = '".$PLANET['id']."';");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET instant_defense = instant_defense + ".$price." where `id` = '".$USER['id']."';");
	$USER['darkmatter']		-= $price;
	
	$this->printMessage('defense has been added on your planet');
	
	}
	
	function show(){
	global $USER, $PLANET, $LNG, $UNI, $CONF,$resource,$pricelist, $reslist, $CONF;

		if($CONF['dmenabled'] == 0){
			$this->printMessage("This add-on is disabled", true, array('game.php?page=overview', 2));
			die;
		}
	
		
	$this->tplObj->loadscript("dmfleet.js");
	if ($PLANET[$resource[21]] == 0)
	{
	$this->printMessage($LNG['bd_shipyard_required']);
	}
	if($CONF['fleetconf'] > TIMESTAMP) {
	$elementIDs	= array(401,402,403,404,405,406,410,412,413,414,416,417,418,419,420,421,422);
	}else{
	$elementIDs	= array(401,402,403,404,405,406,410,412,413,414,416,417,418,419);
	}
	
	foreach($elementIDs as $Element)
		{
			if(!BuildFunctions::isTechnologieAccessible($USER, $PLANET, $Element))
				continue;

			$elementList[$Element]	= array(
				'id'				=> $Element,
				'available'			=> $PLANET[$resource[$Element]],
			
			);
		}
		
	$this->tplObj->assign_vars(
	array(
	'elementList'	=> $elementList,			
	'ChargeDM' 			=> self::$ChargeDM['defence'],
	'ChargeDN' 			=> self::$ChargeDN['fleets'],

    )
	);
	$this->display("page.dmdeff.default.tpl");
	}
	}
