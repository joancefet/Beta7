<?php
class ShowBonusPage extends AbstractPage
{
function __construct()
{
parent::__construct();
}
function gift1(){
global $USER, $PLANET, $LNG, $UNI, $CONF;
if($USER['frisbee'] >= 1){
$GLOBALS['DATABASE']->query("Update ".USERS." SET `frisbee` = `frisbee` - '1', `antimatter` = `antimatter` + '50' WHERE `id` = ".$USER['id'].";");
$this->printMessage("You got <br> 50 Antimatter", true, array('game.php?page=overview', 2));
}else{
$this->printMessage("No frisbee avaible!", true, array('game.php?page=overview', 2));
}
}
function gift2(){
global $USER, $PLANET, $LNG, $UNI, $CONF;
if($USER['alien'] >= 1){
$GLOBALS['DATABASE']->query("Update ".USERS." SET `alien` = `alien` - '1', `antimatter` = `antimatter` + '50' WHERE `id` = ".$USER['id'].";");
$this->printMessage("You got <br> 50 Antimatter", true, array('game.php?page=overview', 2));
}else{
$this->printMessage("No alien avaible!", true, array('game.php?page=overview', 2));
}
}
function gift3(){
global $USER, $PLANET, $LNG, $UNI, $CONF;
if($USER['rocket'] >= 1){
$GLOBALS['DATABASE']->query("Update ".USERS." SET `rocket` = `rocket` - '1', `antimatter` = `antimatter` + '50' WHERE `id` = ".$USER['id'].";");
$this->printMessage("You got <br> 50 Antimatter", true, array('game.php?page=overview', 2));
}else{
$this->printMessage("No rocket avaible!", true, array('game.php?page=overview', 2));
}
}
function gift4(){
global $USER, $PLANET, $LNG, $UNI, $CONF;
$get_extra = mt_rand(1,50);
$get_extra_false = mt_rand(1,100);
if($get_extra > $get_extra_false){
$FindSize = mt_rand(0, 100);
if(90 < $FindSize && 100 >= $FindSize) {
$Message	= "<br> 200 Antimatter bonus";
$varis = "antimatter";
$valuee = 200;
} elseif(70 < $FindSize && 90 >= $FindSize) {
$varis = "experience_peace";
$valuee = mt_rand(150,3500);
$Message	= "<br> ".$valuee." Peace Experience";
} elseif(50 < $FindSize && 70 >= $FindSize) {
$varis = 'academy_p';
$valuee = mt_rand(1,25);
$Message	= "<br> ".$valuee." Academy Points";
} elseif(30 < $FindSize && 50 >= $FindSize) {
$varis = 'frisbee';
$valuee = 1;
$Message	= "<br> ".$valuee." frisbee bonus";
} elseif(10 < $FindSize && 30 >= $FindSize) {
$valuee = 1;
$varis = 'alien';
$Message	= "<br> ".$valuee." alien bonus";
} elseif(0 < $FindSize && 10 >= $FindSize) {
$valuee = 1;
$varis = 'rocket';
$Message	= "<br> '".$valuee."' rocket bonus";
}
$GLOBALS['DATABASE']->query("Update ".USERS." SET `antimatter` = `antimatter` + '300', `frisbee` = `frisbee` - '1', `alien` = `alien` - '1', `rocket` = `rocket` - '1' WHERE `id` = ".$USER['id'].";");
$GLOBALS['DATABASE']->query("Update ".USERS." SET ".$varis." = ".$varis." + ".$valuee." WHERE `id` = ".$USER['id'].";");
$this->printMessage("You got <br> 300 Antimatter ".$Message."", true, array('game.php?page=overview', 2));
}else{
$GLOBALS['DATABASE']->query("Update ".USERS." SET `antimatter` = `antimatter` + '300', `frisbee` = `frisbee` - '1', `alien` = `alien` - '1', `rocket` = `rocket` - '1' WHERE `id` = ".$USER['id'].";");
$this->printMessage("You got <br> 300 Antimatter", true, array('game.php?page=overview', 2));
}
}
function show(){
global $USER, $PLANET, $LNG, $UNI, $CONF,$resource,$pricelist;
if(!empty($USER['urlaubs_modus'])){
$this->printMessage($LNG['not_acces_vmode'], true, array('game.php?page=overview', 2));
die();
}elseif($USER['bonus_timer'] > TIMESTAMP){
$this->printMessage($LNG['bonus_time_res'], true, array('game.php?page=overview', 2));
die();
}else{
$premium_bonus = 1;
if($USER['premium_reward_bonus'] > 0 && $USER['premium_reward_bonus_days'] > TIMESTAMP){
$premium_bonus = $USER['premium_reward_bonus'];
}
$bonus_button = 1;
$r = mt_rand(1,100);
$q = mt_rand(1,100);
if($CONF['bonus_button'] != 0 && $CONF['purchase_bonus_timer'] > TIMESTAMP && $r > $q){
$bonus_button = $CONF['bonus_button'];
}
$dm = mt_rand(2500,10000);
$dm = round(($dm + ($dm / 100 * $USER['combat_reward_bonus'])) * (1+$USER['experience_peace_level']/100)) ;
$dm *= $premium_bonus;
$dm *= $bonus_button;
$ap = mt_rand(1,5);
$ap = round(($ap + ($ap / 100 * $USER['combat_reward_bonus'])) * (1+$USER['experience_peace_level']/100)) ;
$ap *= $premium_bonus;
$ap *= $bonus_button;
//$dm = round(( * (1+$USER['experience_peace_level']/100)) * $premium_bonus * $bonus_button);
$experience = mt_rand(1,439);
$experience = round(($experience + ($experience / 100 * $USER['combat_reward_bonus']) + ($experience / 100 * $USER['premium_reward_experience'])));
$experience *= $premium_bonus;
$experience *= $bonus_button;
$premium_bonus_time = 0;
if($USER['prem_speed_button'] > 0 && $USER['prem_speed_button_days'] > TIMESTAMP){
$premium_bonus_time = $USER['prem_speed_button'];
}
$time = mt_rand(18000,32400);
$time = $time - ($time / 100 * $premium_bonus_time);
$timex = TIMESTAMP + $time;
$USER['darkmatter'] += $dm;
$GLOBALS['DATABASE']->query("Update ".USERS." SET `academy_p` = `academy_p` + ".$ap.", `experience_peace` = `experience_peace` + ".$experience.", `bonus_timer` = '".$timex."' WHERE `id` = ".$USER['id']." ;
");
$Message	= sprintf( $LNG['bonus_msg'], $LNG['tech'][921], $dm, $experience, $ap);
$this->printMessage($Message, true, array('game.php?page=overview', 2));
$this->tplObj->assign_vars(
array(
)
);
}
}
}