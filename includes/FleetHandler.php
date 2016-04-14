<?php


 
#$GLOBALS['DATABASE']->query("LOCK TABLE ".AKS." WRITE, ".RW." WRITE, ".MESSAGES." WRITE, ".CONFIG." WRITE, ".FLEETS_EVENT." WRITE, ".FLEETS." WRITE, ".PLANETS." WRITE, ".PLANETS." as p WRITE, ".TOPKB." WRITE, ".USERS." WRITE, ".USERS." as u WRITE, ".STATPOINTS." WRITE;");	

$buscarTick = $GLOBALS['DATABASE']->query("SELECT tick FROM ".CONFIG.";");
$tickatual = $GLOBALS['DATABASE']->fetch_array($buscarTick);
$tickatual = $tickatual['tick'];

$token			= getRandomString();

$fleetResult	= $GLOBALS['DATABASE']->query("UPDATE ".FLEETS_EVENT." SET `lock` = '".$token."' WHERE `lock` IS NULL AND `time` <= ". TIMESTAMP .";");
//$fleetResult	= $GLOBALS['DATABASE']->query("UPDATE ".FLEETS_EVENT." SET `lock` = '".$token."' WHERE `lock` IS NULL AND `time` <= ".$tickatual.";");

if($GLOBALS['DATABASE']->affectedRows() !== 0) {
	require_once('includes/classes/class.FlyingFleetHandler.php');
	
	$fleetObj	= new FlyingFleetHandler();
	$fleetObj->setToken($token);
	$fleetObj->run();

	$GLOBALS['DATABASE']->query("UPDATE ".FLEETS_EVENT." SET `lock` = NULL WHERE `lock` = '".$token."';"); #UNLOCK TABLES
}