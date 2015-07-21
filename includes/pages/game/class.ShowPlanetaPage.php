<?php
class ShowPlanetaPage extends AbstractPage
{	
	
	function __construct() 
	{
		parent::__construct();
	}
	
	function sellshow(){
	global $USER, $PLANET, $LNG, $UNI, $CONF,$resource,$pricelist;
	$isPossible = $GLOBALS['DATABASE']->getFirstCell("SELECT COUNT(*) FROM uni1_planetauction WHERE planetID = ".$PLANET['id']." AND universe = ".$UNI.";");
	$isMax = $GLOBALS['DATABASE']->getFirstCell("SELECT COUNT(*) FROM uni1_planetauction WHERE selledID = ".$USER['id']." AND universe = ".$UNI.";");
	if($PLANET['id'] == $USER['id_planet']){
	$this->printMessage("you may not sell your home planet!", true, array('game.php?page=Planeta', 2));
		die();
	}elseif($PLANET['field_max'] < 500){
	$this->printMessage("you can only sell planets that has a minimum of 500 fields!", true, array('game.php?page=Planeta', 2));
		die();
	}
	elseif($isPossible != 0){
	$this->printMessage("this planet is already placed on the market!", true, array('game.php?page=Planeta', 2));
		die();
	}elseif($isMax >= 3){
	$this->printMessage("you can sale maximum 3 planets simultanly!", true, array('game.php?page=Planeta', 2));
		die();
	}
	else{
	
	$info	= $GLOBALS['DATABASE']->query("SELECT field_max, id_luna FROM ".PLANETS." WHERE id = ".$PLANET['id']." AND universe = ".$UNI.";");
	$info   = $GLOBALS['DATABASE']->fetch_array($info);
	
	$this->tplObj->assign_vars(
	array(
	'field_max' => $info['field_max'],
	'id_luna' => $info['id_luna'],
	));
	
	$this->display("page.planetauctions.sellshow.tpl");
	}
	}
	
	function sellpost(){
	global $USER, $PLANET, $LNG, $UNI, $CONF,$resource,$pricelist;
	$rate   	= $_POST['rate'];
	$type   	= HTTP::_GP('type', 0);
	
	if($type == 1 && $rate < 150000 || $type == 1 && $rate > 3000000000){
	$this->printMessage("minimum or maximum price not respected!", true, array('game.php?page=Planeta', 2));
	}elseif($type == 2 && $rate < 1500 || $type == 2 && $rate > 1000000){
	$this->printMessage("minimum or maximum price not respected!", true, array('game.php?page=Planeta', 2));
	}else{
	
	$GLOBALS['DATABASE']->query("INSERT INTO `uni1_planetauction` VALUES (".$GLOBALS['DATABASE']->GetInsertID().", ".$PLANET['id'].", ".$rate.", ".$type.", ".(TIMESTAMP + 3 * 24 * 60 * 60).", '".$USER['id']."', '".$USER['id']."', ".$UNI.");");
	$GLOBALS['DATABASE']->query("UPDATE ".PLANETS." SET name = 'Planet', metal = '0', crystal = '0', deuterium = '0', small_ship_cargo = '0', big_ship_cargo = '0', light_hunter = '0', heavy_hunter = '0', crusher = '0', battle_ship = '0', colonizer = '0', recycler = '0', spy_sonde = '0', bomber_ship = '0', destructor = '0', dearth_star = '0', battleship = '0', lune_noir = '0', ev_transporter = '0', star_crasher = '0', giga_recykler = '0', dm_ship = '0', bs_class_oneil = '0', flying_death = '0', Scrappy = '0', М19 = '0', galleon = '0', destroyer = '0', frigate = '0', black_wanderer = '0' WHERE id = ".$PLANET['id']." AND universe = ".$UNI.";");
	
	$GLOBALS['DATABASE']->query("UPDATE ".PLANETS." SET id_owner = '151' WHERE id = ".$PLANET['id']." AND universe = ".$UNI.";");
	
	
	$this->tplObj->assign_vars(
	array(
	));
	$this->printMessage("planet succesfully added on the market!", true, array('game.php?page=Planeta&cp='.$USER['id_planet'].'', 2));
	}
	}
	
	
	function lotinfo(){
	global $USER, $PLANET, $LNG, $UNI, $CONF,$resource,$pricelist;
	$lotID   	= HTTP::_GP('lotID', 0);
	$info	= $GLOBALS['DATABASE']->query("SELECT DISTINCT ps.*, p.field_current, p.field_max, p.id_luna FROM uni1_planetauction as ps 
	INNER JOIN ".PLANETS." as p ON p.id = ps.planetID WHERE auctionID = ".$lotID.";");
	$info   = $GLOBALS['DATABASE']->fetch_array($info);
	$iPlanetCount 	= $GLOBALS['DATABASE']->getFirstCell("SELECT COUNT(*) FROM ".PLANETS." WHERE `id_owner` = '".$USER['id']."' AND `planet_type` = '1' AND `destruyed` = '0' AND universe = ".$UNI.";");
	$MaxPlanets		= PlayerUtil::maxPlanetCount($USER);
	if($iPlanetCount >= $MaxPlanets){
	$this->printMessage("you can not buy additional planets as you have reached the max allowed planets / user!", true, array('game.php?page=Planeta', 2));
	die();
	}elseif($USER['id'] == $info['selledID']){
	$this->printMessage("you can not rebuy your old planets!", true, array('game.php?page=Planeta', 2));
	die();
	}
	else{
	
	
	$this->tplObj->loadscript("jquery.countdown.js");
	$this->tplObj->assign_vars(
	array(
	'lotID' => $lotID,
	'type' => $info['type'],
	'field_max' => $info['field_max'],
	'id_luna'	=> $info['id_luna'],
	'planetID'	=> $info['planetID'],
	'time'		=> ((!empty($info['time']) && $info['time'] > TIMESTAMP) ? ($info['time'] - TIMESTAMP) : 0),
	'current_price' => round($info['price'] + ($info['price'] / 100 * 1)),
	
	));
	
	$this->display("page.planetauctions.lot.tpl");
	}
	}
	
	function rate(){
	global $USER, $PLANET, $LNG, $UNI, $CONF,$resource,$pricelist;
	
	$lotID   	= HTTP::_GP('lotID', 0);
	$rate   	= HTTP::_GP('rate', '');
	$info	= $GLOBALS['DATABASE']->query("SELECT DISTINCT ps.*, p.field_current, p.field_max, p.id_luna FROM uni1_planetauction as ps 
	INNER JOIN ".PLANETS." as p ON p.id = ps.planetID WHERE auctionID = ".$lotID.";");
	$info   = $GLOBALS['DATABASE']->fetch_array($info);
	$price = round($info['price'] + ($info['price'] / 100 * 1));
	
	if($rate < 0 || $price < 0){
	$this->printMessage("error with negative values!", true, array('game.php?page=Planeta', 2));
	}
	
	if($info['type'] == 1 && $rate < $price && $USER['darkmatter'] < $price || $info['type'] == 1 && $rate > $price && $USER['darkmatter'] < $rate){
	$this->printMessage("You dont have enough darkmatter!", true, array('game.php?page=Planeta', 2));
		die();
	}elseif($info['type'] == 2 && $rate < $price && $USER['antimatter'] < $price || $info['type'] == 2 && $rate > $price && $USER['antimatter'] < $rate){
	$this->printMessage("You dont have enough antimatter!", true, array('game.php?page=Planeta', 2));
		die();
	}elseif($info['time'] < TIMESTAMP){
	$this->printMessage("planet has already been sold!", true, array('game.php?page=Planeta', 2));
		die();
	}else{
	
	if($info['type'] == 1 && $rate <= $price){
	$USER['darkmatter'] -= $price;
	$GLOBALS['DATABASE']->query("Update uni1_planetauction SET `price` = ".$price.", `buyerID` = ".$USER['id']." WHERE `auctionID` = ".$lotID.";");
	$this->printMessage("bet succesfully placed!", true, array('game.php?page=Planeta', 2));
	}elseif($info['type'] == 1 && $rate > $price){
	$USER['darkmatter'] -= $rate;
	$GLOBALS['DATABASE']->query("Update uni1_planetauction SET `price` = ".$rate.", `buyerID` = ".$USER['id']." WHERE `auctionID` = ".$lotID.";");
	$this->printMessage("bet succesfully placed!", true, array('game.php?page=Planeta', 2));
	}elseif($info['type'] == 2 && $rate <= $price){
	$USER['antimatter'] -= $price; 
	$GLOBALS['DATABASE']->query("Update uni1_users SET `antimatter` = `antimatter` - ".$price." WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("Update uni1_planetauction SET `price` = ".$price.", `buyerID` = ".$USER['id']." WHERE `auctionID` = ".$lotID.";");
	$this->printMessage("bet succesfully placed!", true, array('game.php?page=Planeta', 2));
	}elseif($info['type'] == 2 && $rate > $price){
	$USER['antimatter'] -= $rate;
	$GLOBALS['DATABASE']->query("Update uni1_users SET `antimatter` = `antimatter` - ".$rate." WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("Update uni1_planetauction SET `price` = ".$rate.", `buyerID` = ".$USER['id']." WHERE `auctionID` = ".$lotID.";");
	$this->printMessage("bet succesfully placed!", true, array('game.php?page=Planeta', 2));
	}
}
	
	
	
	$this->tplObj->assign_vars(
	array(
	));
	
	}
	
	function show(){
	global $USER, $PLANET, $LNG, $UNI, $CONF,$resource,$pricelist;
	
	$stats_sql	=	'SELECT DISTINCT ps.*, p.field_current, p.field_max, p.id_luna FROM uni1_planetauction as ps
                INNER JOIN '.PLANETS.' as p ON p.id = ps.planetID
                WHERE ps.`time` > '.TIMESTAMP.' AND ps.universe = '.$UNI.';';
                

    $query = $GLOBALS['DATABASE']->query($stats_sql);
	$PlanetList	= array();
	
	
	while ($StatRow = $GLOBALS['DATABASE']->fetch_array($query)){
	$PlanetList[]	= array(
    'auctionID'		=> $StatRow['auctionID'],
    'price'		=> pretty_number($StatRow['price']),
    'time'		=> ((!empty($StatRow['time']) && $StatRow['time'] > TIMESTAMP) ? ($StatRow['time'] - TIMESTAMP) : 0),
    'type'	=> $StatRow['type'],
    'field_max'	=> $StatRow['field_max'],
    'field_current'	=> $StatRow['field_current'],
    'id_luna'	=> $StatRow['id_luna'],
    'planetID'	=> $StatRow['planetID'],
                    );
                }
	$this->tplObj->loadscript("jquery.countdown.js");
	$this->tplObj->assign_vars(
	array(
	'PlanetList'				=> $PlanetList,
	));
	$this->display("page.planetauctions.default.tpl");
	}
	}

?>