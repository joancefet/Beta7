<?php
class ShowPremiumPage extends AbstractPage
{
function __construct()
{
parent::__construct();
}

 function KeyUpBuy($name,$count,$days)
{
$PremiumCalc = $GLOBALS['DATABASE']->query("SELECT cost, factor, factorone, rangevalue FROM `uni1_premium_calc` WHERE name = '".$name."';");
$PremiumCalc  = $GLOBALS['DATABASE']->fetch_array($PremiumCalc);	

$Cost		= $PremiumCalc['cost'];
$Factor		= $PremiumCalc['factor'];
$FactorOne		= $PremiumCalc['factorone'];
$RangeValue	= $PremiumCalc['rangevalue'];
	
$CostPerDay	= round($Cost * pow($Factor, (floor($count/$FactorOne))-$RangeValue) * $count);
$Discount	= 1 - min(0.50, ($days * 0.5 / 100)) ;
$FullCost	= round($days * $CostPerDay * $Discount);
	
return $FullCost;
}	

 function KeyUpBuyBis($days)
{
$prem_days	= $days;
$CostPerDay	= 175 * $prem_days ;
$Discount	= 1 - min(0.50, ($prem_days * 0.5 / 100)) ;
$FullCost	= $prem_days * $CostPerDay * $Discount;
	
return $FullCost;
}	

function buystardust(){
global $USER, $PLANET, $LNG, $UNI, $CONF,$resource,$pricelist;
$stardust = HTTP::_GP('stardust', 0);
$price = (100000 - (100000/100*$CONF['stardust_bonus'])) * $stardust;
if ($price < 0) {
$this->printMessage("Hack attempt.", true, array('game.php?page=premium', 2));
}
if($USER['antimatter'] < $price){
$this->printMessage("You do not have enough antimatter", true, array('game.php?page=premium', 2));
die();
}elseif($stardust < 0){
$this->printMessage("Hack attempt.", true, array('game.php?page=premium', 2));
die();
}else{
	$USER['antimatter'] -= $price;
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `stardust` = `stardust` + '".$stardust."', `antimatter` = `antimatter` - '".$price."' WHERE `id` = ".$USER['id'].";");
}
$this->printMessage('Stardust has succesfully be bought', true, array('game.php?page=premium', 2));
die();
}
function show(){
global $USER, $PLANET, $LNG, $UNI, $CONF,$resource,$pricelist;

if($_POST){
$mode = HTTP::_GP('item', '');
$count = HTTP::_GP('count', 0);
$days = HTTP::_GP('days', 0);

$premiun_extra = 0;	
if($CONF['premium'] != 0 && $CONF['purchase_bonus_timer'] > TIMESTAMP){
$premiun_extra = $CONF['premium'];
}

if($mode != 'prem_advanced_battlesim'){
$price = $this->KeyUpBuy($mode,$count,$days);
}else{
$price = $this->KeyUpBuyBis($days);
}

$Premium_Time = (TIMESTAMP + $days * 86400) + (($days * 86400) / 100 * $premiun_extra);


if ($days < 1) {
$this->printMessage("You have to select a minimum of 1 day period for this bonus.", true, array('game.php?page=premium', 2));
}elseif ($count < 1 && $mode != "prem_advanced_battlesim") {
$this->printMessage("You have to select a minimum of 1 for this bonus.", true, array('game.php?page=premium', 2));
}elseif ($price < 0) {
$this->printMessage("Hack attempt.", true, array('game.php?page=premium', 2));
}
switch($mode){
case 'prem_res':
if($USER['antimatter'] < $price){
$this->printMessage("You do not have enough antimatter", true, array('game.php?page=premium', 2));
die();
}elseif($USER['premium_reward_extraction_days'] > TIMESTAMP){
$this->printMessage("You already have that bonus active", true, array('game.php?page=premium', 2));
die();
}else{
$USER['antimatter'] -= $price;
$GLOBALS['DATABASE']->query("Update ".USERS." SET `antimatter` = `antimatter` - ".$price.", `premium_reward_extraction` = ".$count.", `premium_reward_extraction_days` = ".$Premium_Time." WHERE `id` = ".$USER['id'].";");
$this->printMessage("Premium reward extraction (".$count."%) is succesfully activated for ".$days." days", true, array('game.php?page=premium', 2));
die();
}
break;
case 'prem_storage':
if($USER['antimatter'] < $price){
$this->printMessage("You do not have enough antimatter", true, array('game.php?page=premium', 2));
die();
}elseif($USER['premium_reward_storing_days'] > TIMESTAMP){
$this->printMessage("You already have that bonus active", true, array('game.php?page=premium', 2));
die();
}else{
	$USER['antimatter'] -= $price;
$GLOBALS['DATABASE']->query("Update ".USERS." SET `antimatter` = `antimatter` - ".$price.", `premium_reward_storing` = ".$count.", `premium_reward_storing_days` = ".$Premium_Time." WHERE `id` = ".$USER['id'].";");
$this->printMessage("Premium reward storing (".$count."%) is succesfully activated for ".$days." days", true, array('game.php?page=premium', 2));
die();
}
break;
case 'prem_s_build':
if($USER['antimatter'] < $price){
$this->printMessage("You do not have enough antimatter", true, array('game.php?page=premium', 2));
die();
}elseif($USER['premium_reward_speed_days'] > TIMESTAMP){
$this->printMessage("You already have that bonus active", true, array('game.php?page=premium', 2));
die();
}else{
	$USER['antimatter'] -= $price;
$GLOBALS['DATABASE']->query("Update ".USERS." SET `antimatter` = `antimatter` - ".$price.", `premium_reward_speed` = ".$count.", `premium_reward_speed_days` = ".$Premium_Time." WHERE `id` = ".$USER['id'].";");
$this->printMessage("Premium speed of construction and research (".$count."%) is succesfully activated for ".$days." days", true, array('game.php?page=premium', 2));
die();
}
break;
case 'prem_o_build':
if($USER['antimatter'] < $price){
$this->printMessage("You do not have enough antimatter", true, array('game.php?page=premium', 2));
die();
}elseif($USER['premium_reward_stage_days'] > TIMESTAMP){
$this->printMessage("You already have that bonus active", true, array('game.php?page=premium', 2));
die();
}else{
	$USER['antimatter'] -= $price;
$GLOBALS['DATABASE']->query("Update ".USERS." SET `antimatter` = `antimatter` - ".$price.", `premium_reward_stage` = ".$count.", `premium_reward_stage_days` = ".$Premium_Time." WHERE `id` = ".$USER['id'].";");
$this->printMessage("Premium phase of construction and research (".$count."%) is succesfully activated for ".$days." days", true, array('game.php?page=premium', 2));
die();
}
break;
case 'prem_button':
if($USER['antimatter'] < $price){
$this->printMessage("You do not have enough antimatter", true, array('game.php?page=premium', 2));
die();
}elseif($USER['premium_reward_bonus_days'] > TIMESTAMP){
$this->printMessage("You already have that bonus active", true, array('game.php?page=premium', 2));
die();
}else{
	$USER['antimatter'] -= $price;
$GLOBALS['DATABASE']->query("Update ".USERS." SET `antimatter` = `antimatter` - ".$price.", `premium_reward_bonus` = ".$count.", `premium_reward_bonus_days` = ".$Premium_Time." WHERE `id` = ".$USER['id'].";");
$this->printMessage("Premium bonus button size (".$count."%) is succesfully activated for ".$days." days", true, array('game.php?page=premium', 2));
die();
}
break;
case 'prem_speed_button':
if($USER['antimatter'] < $price){
$this->printMessage("You do not have enough antimatter", true, array('game.php?page=premium', 2));
die();
}elseif($USER['prem_speed_button_days'] > TIMESTAMP){
$this->printMessage("You already have that bonus active", true, array('game.php?page=premium', 2));
die();
}else{
	$USER['antimatter'] -= $price;
$GLOBALS['DATABASE']->query("Update ".USERS." SET `antimatter` = `antimatter` - ".$price.", `prem_speed_button` = ".$count.", `prem_speed_button_days` = ".$Premium_Time." WHERE `id` = ".$USER['id'].";");
$this->printMessage("Premium bonus button emergence (".$count."%) is succesfully activated for ".$days." days", true, array('game.php?page=premium', 2));
die();
}
break;
case 'prem_expedition':
if($USER['antimatter'] < $price){
$this->printMessage("You do not have enough antimatter", true, array('game.php?page=premium', 2));
die();
}elseif($USER['prem_expedition_days'] > TIMESTAMP){
$this->printMessage("You already have that bonus active", true, array('game.php?page=premium', 2));
die();
}else{
	$USER['antimatter'] -= $price;
$GLOBALS['DATABASE']->query("Update ".USERS." SET `antimatter` = `antimatter` - ".$price.", `prem_expedition` = ".$count.", `prem_expedition_days` = ".$Premium_Time." WHERE `id` = ".$USER['id'].";");
$this->printMessage("Premium expedition bonus (".$count."%) is succesfully activated for ".$days." days", true, array('game.php?page=premium', 2));
die();
}
break;
case 'prem_count_expiditeon':
if($USER['antimatter'] < $price){
$this->printMessage("You do not have enough antimatter", true, array('game.php?page=premium', 2));
die();
}elseif($USER['premium_reward_expedition_days'] > TIMESTAMP){
$this->printMessage("You already have that bonus active", true, array('game.php?page=premium', 2));
die();
}else{
	$USER['antimatter'] -= $price;
$GLOBALS['DATABASE']->query("Update ".USERS." SET `antimatter` = `antimatter` - ".$price.", `premium_reward_expedition` = ".$count.", `premium_reward_expedition_days` = ".$Premium_Time." WHERE `id` = ".$USER['id'].";");
$this->printMessage("Premium expedition count (".$count."%) is succesfully activated for ".$days." days", true, array('game.php?page=premium', 2));
die();
}
break;
case 'prem_speed_expiditeon':
if($USER['antimatter'] < $price){
$this->printMessage("You do not have enough antimatter", true, array('game.php?page=premium', 2));
die();
}elseif($USER['prem_speed_expiditeon_days'] > TIMESTAMP){
$this->printMessage("You already have that bonus active", true, array('game.php?page=premium', 2));
die();
}else{
	$USER['antimatter'] -= $price;
$GLOBALS['DATABASE']->query("Update ".USERS." SET `antimatter` = `antimatter` - ".$price.", `prem_speed_expiditeon` = ".$count.", `prem_speed_expiditeon_days` = ".$Premium_Time." WHERE `id` = ".$USER['id'].";");
$this->printMessage("Premium expedition speed (".$count."%) is succesfully activated for ".$days." days", true, array('game.php?page=premium', 2));
die();
}
break;
case 'prem_leveling':
if($USER['antimatter'] < $price){
$this->printMessage("You do not have enough antimatter", true, array('game.php?page=premium', 2));
die();
}elseif($USER['premium_reward_experience_days'] > TIMESTAMP){
$this->printMessage("You already have that bonus active", true, array('game.php?page=premium', 2));
die();
}else{
	$USER['antimatter'] -= $price;
$GLOBALS['DATABASE']->query("Update ".USERS." SET `antimatter` = `antimatter` - ".$price.", `premium_reward_experience` = ".$count.", `premium_reward_experience_days` = ".$Premium_Time." WHERE `id` = ".$USER['id'].";");
$this->printMessage("Premium peacefull experience (".$count."%) is succesfully activated for ".$days." days", true, array('game.php?page=premium', 2));
die();
}
break;
case 'prem_batle_leveling':
if($USER['antimatter'] < $price){
$this->printMessage("You do not have enough antimatter", true, array('game.php?page=premium', 2));
die();
}elseif($USER['prem_batle_leveling_days'] > TIMESTAMP){
$this->printMessage("You already have that bonus active", true, array('game.php?page=premium', 2));
die();
}else{
	$USER['antimatter'] -= $price;
$GLOBALS['DATABASE']->query("Update ".USERS." SET `antimatter` = `antimatter` - ".$price.", `prem_batle_leveling` = ".$count.", `prem_batle_leveling_days` = ".$Premium_Time." WHERE `id` = ".$USER['id'].";");
$this->printMessage("Premium combat experience (".$count."%) is succesfully activated for ".$days." days", true, array('game.php?page=premium', 2));
die();
}
break;
case 'prem_bank_ally':
if($USER['antimatter'] < $price){
$this->printMessage("You do not have enough antimatter", true, array('game.php?page=premium', 2));
die();
}elseif($USER['premium_reward_bank_days'] > TIMESTAMP){
$this->printMessage("You already have that bonus active", true, array('game.php?page=premium', 2));
die();
}else{
	$USER['antimatter'] -= $price;
$GLOBALS['DATABASE']->query("Update ".USERS." SET `antimatter` = `antimatter` - ".$price.", `premium_reward_bank` = ".$count.", `premium_reward_bank_days` = ".$Premium_Time." WHERE `id` = ".$USER['id'].";");
$this->printMessage("Premium alliance bank (".$count."%) is succesfully activated for ".$days." days", true, array('game.php?page=premium', 2));
die();
}
break;
case 'prem_prod_from_colly':
if($USER['antimatter'] < $price){
$this->printMessage("You do not have enough antimatter", true, array('game.php?page=premium', 2));
die();
}elseif($USER['prem_prod_from_colly_days'] > TIMESTAMP){
$this->printMessage("You already have that bonus active", true, array('game.php?page=premium', 2));
die();
}else{
	$USER['antimatter'] -= $price;
$GLOBALS['DATABASE']->query("Update ".USERS." SET `antimatter` = `antimatter` - ".$price.", `prem_prod_from_colly` = ".$count.", `prem_prod_from_colly_days` = ".$Premium_Time." WHERE `id` = ".$USER['id'].";");
$this->printMessage("Premium collider production (".$count."%) is succesfully activated for ".$days." days", true, array('game.php?page=premium', 2));
die();
}
break;
case 'prem_moon_creat':
if($USER['antimatter'] < $price){
$this->printMessage("You do not have enough antimatter", true, array('game.php?page=premium', 2));
die();
}elseif($USER['prem_moon_creat_days'] > TIMESTAMP){
$this->printMessage("You already have that bonus active", true, array('game.php?page=premium', 2));
die();
}else{
	$USER['antimatter'] -= $price;
$GLOBALS['DATABASE']->query("Update ".USERS." SET `antimatter` = `antimatter` - ".$price.", `prem_moon_creat` = ".$count.", `prem_moon_creat_days` = ".$Premium_Time." WHERE `id` = ".$USER['id'].";");
$this->printMessage("Premium moon creation (".$count."%) is succesfully activated for ".$days." days", true, array('game.php?page=premium', 2));
die();
}
break;
case 'prem_fuel_consumption':
if($USER['antimatter'] < $price){
$this->printMessage("You do not have enough antimatter", true, array('game.php?page=premium', 2));
die();
}elseif($USER['prem_fuel_consumption_days'] > TIMESTAMP){
$this->printMessage("You already have that bonus active", true, array('game.php?page=premium', 2));
die();
}else{
	$USER['antimatter'] -= $price;
$GLOBALS['DATABASE']->query("Update ".USERS." SET `antimatter` = `antimatter` - ".$price.", `prem_fuel_consumption` = ".$count.", `prem_fuel_consumption_days` = ".$Premium_Time." WHERE `id` = ".$USER['id'].";");
$this->printMessage("Premium deuterium comsumption (".$count."%) is succesfully activated for ".$days." days", true, array('game.php?page=premium', 2));
die();
}
break;

case 'prem_advanced_battlesim':
if($USER['antimatter'] < $price){
$this->printMessage("You do not have enough antimatter", true, array('game.php?page=premium', 2));
die();
}elseif($USER['prem_advanced_battlesim_days'] > TIMESTAMP){
$this->printMessage("You already have that bonus active", true, array('game.php?page=premium', 2));
die();
}else{
	$USER['antimatter'] -= $price;
$GLOBALS['DATABASE']->query("Update ".USERS." SET `antimatter` = `antimatter` - ".$price.", `prem_advanced_battlesim_days` = ".$Premium_Time." WHERE `id` = ".$USER['id'].";");
$this->printMessage("Advanced battle Simulator is succesfully activated for ".$days." days", true, array('game.php?page=premium', 2));
die();
}
break;


}
}
$this->tplObj->loadscript("jquery.countdown.js");
$this->tplObj->loadscript("premiumbis.js");
$this->tplObj->assign_vars(
array(
'buystardustprice' => 100000 - (100000/100*$CONF['stardust_bonus']),
'premium_reward_extraction' => $USER['premium_reward_extraction'],
'premium_reward_extraction_days' => ((!empty($USER['premium_reward_extraction_days']) && $USER['premium_reward_extraction_days'] > TIMESTAMP) ? ($USER['premium_reward_extraction_days'] - TIMESTAMP) : 0),
'premium_reward_storing' => $USER['premium_reward_storing'],
'premium_reward_storing_days' => ((!empty($USER['premium_reward_storing_days']) && $USER['premium_reward_storing_days'] > TIMESTAMP) ? ($USER['premium_reward_storing_days'] - TIMESTAMP) : 0),
'premium_reward_speed' => $USER['premium_reward_speed'],
'prem_advanced_battlesim' => $USER['prem_advanced_battlesim'],
'premium_reward_speed_days' => ((!empty($USER['premium_reward_speed_days']) && $USER['premium_reward_speed_days'] > TIMESTAMP) ? ($USER['premium_reward_speed_days'] - TIMESTAMP) : 0),
'prem_advanced_battlesim_days' => ((!empty($USER['prem_advanced_battlesim_days']) && $USER['prem_advanced_battlesim_days'] > TIMESTAMP) ? ($USER['prem_advanced_battlesim_days'] - TIMESTAMP) : 0),
'premium_reward_stage' => $USER['premium_reward_stage'],
'premium_reward_stage_days' => ((!empty($USER['premium_reward_stage_days']) && $USER['premium_reward_stage_days'] > TIMESTAMP) ? ($USER['premium_reward_stage_days'] - TIMESTAMP) : 0),
'premium_reward_bonus' => $USER['premium_reward_bonus'],
'premium_reward_bonus_days' => ((!empty($USER['premium_reward_bonus_days']) && $USER['premium_reward_bonus_days'] > TIMESTAMP) ? ($USER['premium_reward_bonus_days'] - TIMESTAMP) : 0),
'prem_speed_button' => $USER['prem_speed_button'],
'prem_speed_button_days' => ((!empty($USER['prem_speed_button_days']) && $USER['prem_speed_button_days'] > TIMESTAMP) ? ($USER['prem_speed_button_days'] - TIMESTAMP) : 0),
'prem_expedition' => $USER['prem_expedition'],
'prem_expedition_days' => ((!empty($USER['prem_expedition_days']) && $USER['prem_expedition_days'] > TIMESTAMP) ? ($USER['prem_expedition_days'] - TIMESTAMP) : 0),
'premium_reward_expedition' => $USER['premium_reward_expedition'],
'premium_reward_expedition_days' => ((!empty($USER['premium_reward_expedition_days']) && $USER['premium_reward_expedition_days'] > TIMESTAMP) ? ($USER['premium_reward_expedition_days'] - TIMESTAMP) : 0),
'prem_speed_expiditeon' => $USER['prem_speed_expiditeon'],
'prem_speed_expiditeon_days' => ((!empty($USER['prem_speed_expiditeon_days']) && $USER['prem_speed_expiditeon_days'] > TIMESTAMP) ? ($USER['prem_speed_expiditeon_days'] - TIMESTAMP) : 0),
'premium_reward_experience' => $USER['premium_reward_experience'],
'premium_reward_experience_days' => ((!empty($USER['premium_reward_experience_days']) && $USER['premium_reward_experience_days'] > TIMESTAMP) ? ($USER['premium_reward_experience_days'] - TIMESTAMP) : 0),
'prem_batle_leveling' => $USER['prem_batle_leveling'],
'prem_batle_leveling_days' => ((!empty($USER['prem_batle_leveling_days']) && $USER['prem_batle_leveling_days'] > TIMESTAMP) ? ($USER['prem_batle_leveling_days'] - TIMESTAMP) : 0),
'premium_reward_bank' => $USER['premium_reward_bank'],
'premium_reward_bank_days' => ((!empty($USER['premium_reward_bank_days']) && $USER['premium_reward_bank_days'] > TIMESTAMP) ? ($USER['premium_reward_bank_days'] - TIMESTAMP) : 0),
'prem_prod_from_colly' => $USER['prem_prod_from_colly'],
'prem_prod_from_colly_days' => ((!empty($USER['prem_prod_from_colly_days']) && $USER['prem_prod_from_colly_days'] > TIMESTAMP) ? ($USER['prem_prod_from_colly_days'] - TIMESTAMP) : 0),
'prem_moon_creat' => $USER['prem_moon_creat'],
'prem_moon_creat_days' => ((!empty($USER['prem_moon_creat_days']) && $USER['prem_moon_creat_days'] > TIMESTAMP) ? ($USER['prem_moon_creat_days'] - TIMESTAMP) : 0),
'prem_fuel_consumption' => $USER['prem_fuel_consumption'],
'prem_fuel_consumption_days' => ((!empty($USER['prem_fuel_consumption_days']) && $USER['prem_fuel_consumption_days'] > TIMESTAMP) ? ($USER['prem_fuel_consumption_days'] - TIMESTAMP) : 0),
));
$this->display("page.premiumbis.default.tpl");
}
}
?>
