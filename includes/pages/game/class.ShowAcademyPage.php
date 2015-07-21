<?php

class ShowAcademyPage extends AbstractPage
{
            
	function __construct() 
	{
		parent::__construct();
	}
	
function skillup(){
global $LNG, $USER, $PLANET, $resource, $reslist, $CONF;
$this->setWindow('popup');
$this->initTemplate();
$info   = HTTP::_GP('id', '');

$academyInfo = $GLOBALS['DATABASE']->query("SELECT ab1, ab2, icost, factor FROM `uni1_academy_skills` WHERE skill_id = ".$info.";");
$academyInfo  = $GLOBALS['DATABASE']->fetch_array($academyInfo);

$name = '';
$bonus = '';
$posneg = 'posneg';
if($info == 1101){
$name = 'Armement';
$bonus = 'Attack';
$posneg = '+';
}elseif($info == 1102){
$name = 'Armement Class A';
$bonus = 'Attack';
$posneg = '+';
}elseif($info == 1103){
$name = 'double Attack';
$bonus = 'cumulative probability of firing a projectile';
$posneg = '+';
}elseif($info == 1104){
$name = 'Standartisation Fleets';
$bonus = 'Cost of Fleets';
$posneg = '-';
}elseif($info == 1105){
$name = 'Limit Engine';
$bonus = 'Speed of Fleets';
$posneg = '+';
}elseif($info == 1106){
$name = 'Computerization';
$bonus = 'Fleet Slots';
$posneg = '+';
}elseif($info == 1107){
$name = 'Efficient Engine';
$bonus = 'Comsumption of Deuterium';
$posneg = '-';
}elseif($info == 1108){
$name = 'accurate shots';
$bonus = 'the maximum number of murdered per round';
$posneg = '+';
}elseif($info == 1109){
$name = 'chain reaction';
$bonus = 'the possibility of causing a chain reaction';
$posneg = '+';
}elseif($info == 1110){
$name = 'strengthening explosion';
$bonus = 'the destruction of additional units';
$posneg = '+';
}elseif($info == 1111){
$name = 'focus';
$bonus = 'to focus ships';
$posneg = '+';
}elseif($info == 1112){
$name = 'relief ships';
$bonus = 'fuel consumption';
$bonusbika = 'bumpers';
$posneg = '+';
$posneg1 = '-';
}elseif($info == 1113){
$name = 'Critical damage Defense';
$bonus = 'the destruction of Defense';
$posneg = '+';
}elseif($info == 1201){
$name = 'Production Rate';
$bonus = 'Production of Mines';
$posneg = '+';
}elseif($info == 1202){
$name = 'Energetics';
$bonus = 'Energy production (Solar Plant)';
$posneg = '+';
}elseif($info == 1203){
$name = 'Magistracy';
$bonus = 'Speed of Research';
$posneg = '+';
}elseif($info == 1204){
$name = 'Cosmo Depot';
$bonus = 'Space to Storage';
$posneg = '+';
}elseif($info == 1208){
$name = 'Global Defense';
$bonus = 'Shield Domes';
$posneg = '+';
}elseif($info == 1209){
$name = 'Thermonuclear Reaction';
$bonus = 'Energy production (Fusion Reactor)';
$posneg = '+';
}elseif($info == 1210){
$name = 'Solar Panels';
$bonus = 'Energy production (Solar Satelite)';
$posneg = '+';
}elseif($info == 1205){
$name = 'Academy of Sciences';
$bonus = 'Intergalactir Network Level';
$posneg = '+';
}elseif($info == 1207){
$name = 'Packing of Cargo';
$bonus = 'Fleet Capacity';
$posneg = '+';
}elseif($info == 1206){
$name = 'Expansion of the Empire';
$bonus = 'Planet for ur Empire';
$posneg = '+';
}

elseif($info == 1301){
$name = 'Defensive Strategy';
$bonus = 'Shield and Armor';
$posneg = '+';
}elseif($info == 1302){
$name = 'Defense Class A';
$bonus = 'Shield and Armor';
$posneg = '+';
}elseif($info == 1303){
$name = 'double shields';
$bonus = 'probability of doubling boards';
$posneg = '+';
}elseif($info == 1304){
$name = 'Mechanics';
$bonus = 'Defense restoration after battle';
$posneg = '+';
}elseif($info == 1305){
$name = 'Shield Complex';
$bonus = 'shield to the defense';
$posneg = '+';
}elseif($info == 1306){
$name = 'Defense Complex';
$posneg = '+';
$bonus = 'armor to the defense';
}elseif($info == 1307){
$name = 'Seal Shield Dome';
$bonus = 'Missiles will be Destroyed';
$posneg = '+';
}elseif($info == 1308){
$name = 'Thick armor';
$bonus = 'destruction of skorostrela';
$posneg = '+';
}elseif($info == 1309){
$name = 'Maximum Defense';
$bonus = 'Orbital Base';
$posneg = '+';
}elseif($info == 1310){
$name = 'Standartization Defense';
$bonus = 'Cost of Defense';
$posneg = '-';
}elseif($info == 1311){
$name = 'Seal double shields';
$bonus = 'to double the density boards';
$posneg = '+';
}elseif($info == 1312){
$name = 'Restoring light shields';
$bonus = 'to the restoration of the round';
$posneg = '+';
}elseif($info == 1313){
$name = 'Rehabilitation of secondary shields';
$bonus = 'to the restoration of the round';
$posneg = '+';
}elseif($info == 1314){
$name = 'Recovery of heavy shields';
$bonus = 'to the restoration of the round';
$posneg = '+';
}

$this->tplObj->loadscript("pointes.js");
$this->tplObj->assign_vars(
array(
'posneg' => $posneg,
'name' => $name,
'bonus' => $bonus,
'info' => $info,
'ab1' => $academyInfo['ab1'],
'ab2' => $academyInfo['ab2'],
'icost' => $academyInfo['icost'],
'academyLevel' => $USER['academy_'.$info.''],
'factor' => $academyInfo['factor'],
'academypoints' => $USER['academy_p'],
));
$this->display("page.skillup.tpl");
	
}

function BackUp(){
global $LNG, $USER, $PLANET, $resource, $reslist, $CONF;

$TOTAL  = calculationBis(1101,$USER['academy_1101']) + calculationBis(1102,$USER['academy_1102']) + calculationBis(1103,$USER['academy_1103']) + calculationBis(1104,$USER['academy_1104']) + calculationBis(1105,$USER['academy_1105']) + calculationBis(1106,$USER['academy_1106']) + calculationBis(1107,$USER['academy_1107']) + calculationBis(1108,$USER['academy_1108']) + calculationBis(1109,$USER['academy_1109']) + calculationBis(1110,$USER['academy_1110']) + calculationBis(1111,$USER['academy_1111']) + calculationBis(1112,$USER['academy_1112']) + calculationBis(1113,$USER['academy_1113']) + calculationBis(1201,$USER['academy_1201']) + calculationBis(1202,$USER['academy_1202']) + calculationBis(1203,$USER['academy_1203']) + calculationBis(1204,$USER['academy_1204']) + calculationBis(1208,$USER['academy_1208']) + calculationBis(1209,$USER['academy_1209']) + calculationBis(1210,$USER['academy_1210']) + calculationBis(1205,$USER['academy_1205']) + calculationBis(1207,$USER['academy_1207']) + calculationBis(1206,$USER['academy_1206']) + calculationBis(1301,$USER['academy_1301']) + calculationBis(1302,$USER['academy_1302']) + calculationBis(1303,$USER['academy_1303']) + calculationBis(1304,$USER['academy_1304']) + calculationBis(1305,$USER['academy_1305']) + calculationBis(1306,$USER['academy_1306']) + calculationBis(1307,$USER['academy_1307']) + calculationBis(1308,$USER['academy_1308']) + calculationBis(1309,$USER['academy_1309']) + calculationBis(1310,$USER['academy_1310']) + calculationBis(1311,$USER['academy_1311']) + calculationBis(1312,$USER['academy_1312']) + calculationBis(1313,$USER['academy_1313']) + calculationBis(1314,$USER['academy_1314']);
$bac   = HTTP::_GP('bac', '');

if(!$bac){
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET academy_p = academy_p + ".(floor($TOTAL/2)).", academy_1101 = 0, academy_1102 = 0, academy_1103 = 0, academy_1104 = 0, academy_1105 = 0, academy_1106 = 0, academy_1107 = 0, academy_1108 = 0, academy_1109 = 0, academy_1110 = 0, academy_1111 = 0, academy_1112 = 0, academy_1113 = 0,academy_1201 = 0, academy_1202 = 0, academy_1203 = 0, academy_1204 = 0, academy_1208 = 0, academy_1209 = 0, academy_1210 = 0, academy_1205 = 0, academy_1207 = 0, academy_1206 = 0, academy_1301 = 0, academy_1302 = 0, academy_1303 = 0, academy_1304 = 0, academy_1305 = 0, academy_1306 = 0, academy_1307 = 0, academy_1308 = 0, academy_1309 = 0, academy_1310 = 0, academy_1311 = 0, academy_1312 = 0, academy_1303 = 0, academy_1314 = 0 WHERE id= ".$USER['id'].";");		
$this->printMessage('You succesfully recovered '.$TOTAL.' academy points for free', true, array('game.php?page=academy', 2));

}elseif($bac == 75){
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET academy_p = academy_p + ".(floor($TOTAL/100*75)).", academy_1101 = 0, academy_1102 = 0, academy_1103 = 0, academy_1104 = 0, academy_1105 = 0, academy_1106 = 0, academy_1107 = 0, academy_1108 = 0, academy_1109 = 0, academy_1110 = 0, academy_1111 = 0, academy_1112 = 0, academy_1113 = 0,academy_1201 = 0, academy_1202 = 0, academy_1203 = 0, academy_1204 = 0, academy_1208 = 0, academy_1209 = 0, academy_1210 = 0, academy_1205 = 0, academy_1207 = 0, academy_1206 = 0, academy_1301 = 0, academy_1302 = 0, academy_1303 = 0, academy_1304 = 0, academy_1305 = 0, academy_1306 = 0, academy_1307 = 0, academy_1308 = 0, academy_1309 = 0, academy_1310 = 0, academy_1311 = 0, academy_1312 = 0, academy_1303 = 0, academy_1314 = 0 WHERE id= ".$USER['id'].";");		
$USER['darkmatter'] -= 200000;
$this->printMessage('You succesfully recovered '.$TOTAL.' academy points for 200.000 darkmatter', true, array('game.php?page=academy', 2));
	
}elseif($bac == 100){
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET antimatter = antimatter - 10000, academy_p = academy_p + ".$TOTAL.", academy_1101 = 0, academy_1102 = 0, academy_1103 = 0, academy_1104 = 0, academy_1105 = 0, academy_1106 = 0, academy_1107 = 0, academy_1108 = 0, academy_1109 = 0, academy_1110 = 0, academy_1111 = 0, academy_1112 = 0, academy_1113 = 0,academy_1201 = 0, academy_1202 = 0, academy_1203 = 0, academy_1204 = 0, academy_1208 = 0, academy_1209 = 0, academy_1210 = 0, academy_1205 = 0, academy_1207 = 0, academy_1206 = 0, academy_1301 = 0, academy_1302 = 0, academy_1303 = 0, academy_1304 = 0, academy_1305 = 0, academy_1306 = 0, academy_1307 = 0, academy_1308 = 0, academy_1309 = 0, academy_1310 = 0, academy_1311 = 0, academy_1312 = 0, academy_1303 = 0, academy_1314 = 0 WHERE id= ".$USER['id'].";");		
$this->printMessage('You succesfully recovered '.$TOTAL.' academy points for 10.000 antimatter', true, array('game.php?page=academy', 2));
	
}




	
}


	
function donation(){
global $LNG, $USER, $PLANET, $resource, $reslist, $CONF;
$pointes   = HTTP::_GP('pointes', 0);
$academy_cost = 50;
if($CONF['academy_bonus'] != 0 && $CONF['purchase_bonus_timer'] > TIMESTAMP){
$academy_cost = round($academy_cost - ($academy_cost / 100 * $CONF['academy_bonus']));
}
$academy_cost = $academy_cost * $pointes;

if($USER['antimatter'] < $academy_cost){
$this->printMessage("Not enough AM", true, array('game.php?page=academy', 2));
}else{
$USER['antimatter'] -= $academy_cost;
$GLOBALS['DATABASE']->query(" Update ".USERS." SET `antimatter` = `antimatter` - ".$academy_cost.", `academy_p` = academy_p + ".$pointes." WHERE `id` = ".$USER['id'].";");
$this->printMessage(''.$pointes.' academy points has been added on your account', true, array('game.php?page=academy', 2));
}	
}	
function up(){
global $LNG, $USER, $PLANET, $resource, $reslist;
$skill   = HTTP::_GP('skill',0);
$price   = HTTP::_GP('price',0);	
$count   = HTTP::_GP('count',0);
$realPrice = $price   = calculationBisTris($skill,$count, $USER['academy_'.$skill.'']);


if ($count < 1) {
$this->printMessage("You have to select a minimum of 1 for this bonus.", true, array('game.php?page=premium', 2));
}
if ($price < 0) {
$this->printMessage("Hack attempt.", true, array('game.php?page=premium', 2));
}	
############ ID:1 armement
$count   = $count - $USER['academy_'.$skill.''];
$academy_1101 = $price;
if( $skill == '1101' && $USER['academy_p'] >= $academy_1101 && $USER['academy_1101'] + $count <= 200){
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET academy_1101 = academy_1101 + '".$count."' WHERE id= '".$USER['id']."';");
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET academy_p = academy_p - '".$academy_1101."' WHERE id= '".$USER['id']."';");
$this->printMessage('Academy armement is succesfully upgraded!',  true, array('game.php?page=academy', 3)); 
}elseif( $skill == '1101' && $USER['academy_p'] < $academy_1101){
$this->printMessage('Please verify your academy points to upgrade this bonus!',  true, array('game.php?page=academy', 3));    
}elseif($skill == '1101' && $USER['academy_1101'] + $count > 200){
$this->printMessage('You reached the max level!',  true, array('game.php?page=academy', 3));    
}
############ ID:2 armement class A
$academy_1102 = $price;
if( $skill == '1102' && $USER['academy_p'] >= $academy_1102 && $USER['academy_1102'] + $count <= 100){
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET academy_1102 = academy_1102 + '".$count."' WHERE id= '".$USER['id']."';");
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET academy_p = academy_p - '".$academy_1102."' WHERE id= '".$USER['id']."';");
$this->printMessage('Academy armement class A is succesfully upgraded!',  true, array('game.php?page=academy', 3)); 
}elseif( $skill == '1102' && $USER['academy_p'] < $academy_1102){
$this->printMessage('Please verify your academy points to upgrade this bonus!',  true, array('game.php?page=academy', 3));    
}elseif($skill == '1102' && $USER['academy_1102'] + $count > 100){
$this->printMessage('You reached the max level!',  true, array('game.php?page=academy', 3));    
}
############ ID:2 armement class A
$academy_1103 = $price;
if( $skill == '1103' && $USER['academy_p'] >= $academy_1103 && $USER['academy_1103'] + $count <= 100){
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET academy_1103 = academy_1103 + '".$count."' WHERE id= '".$USER['id']."';");
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET academy_p = academy_p - '".$academy_1103."' WHERE id= '".$USER['id']."';");
$this->printMessage('Academy double attack is succesfully upgraded!',  true, array('game.php?page=academy', 3)); 
}elseif( $skill == '1103' && $USER['academy_p'] < $academy_1103){
$this->printMessage('Please verify your academy points to upgrade this bonus!',  true, array('game.php?page=academy', 3));    
}elseif($skill == '1103' && $USER['academy_1103'] + $count > 100){
$this->printMessage('You reached the max level!',  true, array('game.php?page=academy', 3));    
}
############ ID:3 standardization fleet
$academy_1104 = $price;
if( $skill == '1104' && $USER['academy_p'] >= $academy_1104 && $USER['academy_1104'] + $count <= 70){
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET academy_1104 = academy_1104 + '".$count."' WHERE id= '".$USER['id']."';");
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET academy_p = academy_p - '".$academy_1104."' WHERE id= '".$USER['id']."';");
$this->printMessage('Academy fleet standartization is succesfully upgraded!',  true, array('game.php?page=academy', 3)); 
}elseif( $skill == '1104' && $USER['academy_p'] < $academy_1104){
$this->printMessage('Please verify your academy points to upgrade this bonus!',  true, array('game.php?page=academy', 3));    
}elseif($skill == '1104' && $USER['academy_1104'] + $count > 70){
$this->printMessage('You reached the max level!',  true, array('game.php?page=academy', 3));    
}
############ ID:4 limit engine
$academy_1105 = $price;
if( $skill == '1105' && $USER['academy_p'] >= $academy_1105 && $USER['academy_1105'] + $count <= 25){
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET academy_1105 = academy_1105 + '".$count."' WHERE id= '".$USER['id']."';");
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET academy_p = academy_p - '".$academy_1105."' WHERE id= '".$USER['id']."';");
$this->printMessage('Academy engine limit is succesfully upgraded!',  true, array('game.php?page=academy', 3)); 
}elseif( $skill == '1105' && $USER['academy_p'] < $academy_1105){
$this->printMessage('Please verify your academy points to upgrade this bonus!',  true, array('game.php?page=academy', 3));    
}elseif($skill == '1105' && $USER['academy_1105'] + $count > 25){
$this->printMessage('You reached the max level!',  true, array('game.php?page=academy', 3));    
}
############ ID:5 computerization
$academy_1106 = $price;
if( $skill == '1106' && $USER['academy_p'] >= $academy_1106 && $USER['academy_1106'] + $count <= 100){
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET academy_1106 = academy_1106 + '".$count."' WHERE id= '".$USER['id']."';");
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET academy_p = academy_p - '".$academy_1106."' WHERE id= '".$USER['id']."';");
$this->printMessage('Academy computerization is succesfully upgraded!',  true, array('game.php?page=academy', 3)); 
}elseif( $skill == '1106' && $USER['academy_p'] < $academy_1106){
$this->printMessage('Please verify your academy points to upgrade this bonus!',  true, array('game.php?page=academy', 3));    
}elseif($skill == '1106' && $USER['academy_1106'] + $count > 100){
$this->printMessage('You reached the max level!',  true, array('game.php?page=academy', 3));    
}
############ ID:6 efficient engine
$academy_1107 = $price;
if( $skill == '1107' && $USER['academy_p'] >= $academy_1107 && $USER['academy_1107'] + $count <= 40){
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET academy_1107 = academy_1107 + '".$count."' WHERE id= '".$USER['id']."';");
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET academy_p = academy_p - '".$academy_1107."' WHERE id= '".$USER['id']."';");
$this->printMessage('Academy efficient engines is succesfully upgraded!',  true, array('game.php?page=academy', 3)); 
}elseif( $skill == '1107' && $USER['academy_p'] < $academy_1107){
$this->printMessage('Please verify your academy points to upgrade this bonus!',  true, array('game.php?page=academy', 3));    
}elseif($skill == '1107' && $USER['academy_1107'] + $count > 40){
$this->printMessage('You reached the max level!',  true, array('game.php?page=academy', 3));    
}

$academy_1108 = $price;
if( $skill == '1108' && $USER['academy_p'] >= $academy_1108 && $USER['academy_1108'] + $count <= 40){
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET academy_1108 = academy_1108 + '".$count."' WHERE id= '".$USER['id']."';");
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET academy_p = academy_p - '".$academy_1108."' WHERE id= '".$USER['id']."';");
$this->printMessage('Academy accurate shots is succesfully upgraded!',  true, array('game.php?page=academy', 3)); 
}elseif( $skill == '1108' && $USER['academy_p'] < $academy_1108){
$this->printMessage('Please verify your academy points to upgrade this bonus!',  true, array('game.php?page=academy', 3));    
}elseif($skill == '1108' && $USER['academy_1108'] + $count > 40){
$this->printMessage('You reached the max level!',  true, array('game.php?page=academy', 3));    
}

$academy_1109 = $price;
if( $skill == '1109' && $USER['academy_p'] >= $academy_1109 && $USER['academy_1109'] + $count <= 40){
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET academy_1109 = academy_1109 + '".$count."' WHERE id= '".$USER['id']."';");
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET academy_p = academy_p - '".$academy_1109."' WHERE id= '".$USER['id']."';");
$this->printMessage('Academy chain reaction is succesfully upgraded!',  true, array('game.php?page=academy', 3)); 
}elseif( $skill == '1109' && $USER['academy_p'] < $academy_1109){
$this->printMessage('Please verify your academy points to upgrade this bonus!',  true, array('game.php?page=academy', 3));    
}elseif($skill == '1109' && $USER['academy_1109'] + $count > 40){
$this->printMessage('You reached the max level!',  true, array('game.php?page=academy', 3));    
}

$academy_1110 = $price;
if( $skill == '1110' && $USER['academy_p'] >= $academy_1110 && $USER['academy_1110'] + $count <= 40){
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET academy_1110 = academy_1110 + '".$count."' WHERE id= '".$USER['id']."';");
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET academy_p = academy_p - '".$academy_1110."' WHERE id= '".$USER['id']."';");
$this->printMessage('Academy strenghtening explosion is succesfully upgraded!',  true, array('game.php?page=academy', 3)); 
}elseif( $skill == '1110' && $USER['academy_p'] < $academy_1110){
$this->printMessage('Please verify your academy points to upgrade this bonus!',  true, array('game.php?page=academy', 3));    
}elseif($skill == '1110' && $USER['academy_1110'] + $count > 40){
$this->printMessage('You reached the max level!',  true, array('game.php?page=academy', 3));    
}

$academy_1111 = $price;
if( $skill == '1111' && $USER['academy_p'] >= $academy_1111 && $USER['academy_1111'] + $count <= 40){
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET academy_1111 = academy_1111 + '".$count."' WHERE id= '".$USER['id']."';");
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET academy_p = academy_p - '".$academy_1111."' WHERE id= '".$USER['id']."';");
$this->printMessage('Academy efficient engines is succesfully upgraded!',  true, array('game.php?page=academy', 3)); 
}elseif( $skill == '1111' && $USER['academy_p'] < $academy_1111){
$this->printMessage('Please verify your academy points to upgrade this bonus!',  true, array('game.php?page=academy', 3));    
}elseif($skill == '1111' && $USER['academy_1111'] + $count > 40){
$this->printMessage('You reached the max level!',  true, array('game.php?page=academy', 3));    
}

$academy_1112 = $price;
if( $skill == '1112' && $USER['academy_p'] >= $academy_1112 && $USER['academy_1112'] + $count <= 40){
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET academy_1112 = academy_1112 + '".$count."' WHERE id= '".$USER['id']."';");
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET academy_p = academy_p - '".$academy_1112."' WHERE id= '".$USER['id']."';");
$this->printMessage('Academy efficient engines is succesfully upgraded!',  true, array('game.php?page=academy', 3)); 
}elseif( $skill == '1112' && $USER['academy_p'] < $academy_1112){
$this->printMessage('Please verify your academy points to upgrade this bonus!',  true, array('game.php?page=academy', 3));    
}elseif($skill == '1112' && $USER['academy_1112'] + $count > 40){
$this->printMessage('You reached the max level!',  true, array('game.php?page=academy', 3));    
}

$academy_1113 = $price;
if( $skill == '1113' && $USER['academy_p'] >= $academy_1113 && $USER['academy_1113'] + $count <= 40){
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET academy_1113 = academy_1113 + '".$count."' WHERE id= '".$USER['id']."';");
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET academy_p = academy_p - '".$academy_1113."' WHERE id= '".$USER['id']."';");
$this->printMessage('Academy efficient engines is succesfully upgraded!',  true, array('game.php?page=academy', 3)); 
}elseif( $skill == '1113' && $USER['academy_p'] < $academy_1113){
$this->printMessage('Please verify your academy points to upgrade this bonus!',  true, array('game.php?page=academy', 3));    
}elseif($skill == '1113' && $USER['academy_1113'] + $count > 40){
$this->printMessage('You reached the max level!',  true, array('game.php?page=academy', 3));    
}

############ ID:7 production rate
$academy_1201 = $price;
if( $skill == '1201' && $USER['academy_p'] >= $academy_1201 && $USER['academy_1201'] + $count <= 100){
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET academy_1201 = academy_1201 + '".$count."' WHERE id= '".$USER['id']."';");
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET academy_p = academy_p - '".$academy_1201."' WHERE id= '".$USER['id']."';");
$this->printMessage('Academy production rate is succesfully upgraded!',  true, array('game.php?page=academy', 3)); 
}elseif( $skill == '1201' && $USER['academy_p'] < $academy_1201){
$this->printMessage('Please verify your academy points to upgrade this bonus!',  true, array('game.php?page=academy', 3));    
}elseif($skill == '1201' && $USER['academy_1201'] + $count > 100){
$this->printMessage('You reached the max level!',  true, array('game.php?page=academy', 3));    
}
############ ID:8 energetics
$academy_1202 = $price;
if( $skill == '1202' && $USER['academy_p'] >= $academy_1202 && $USER['academy_1202'] + $count <= 100){
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET academy_1202 = academy_1202 + '".$count."' WHERE id= '".$USER['id']."';");
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET academy_p = academy_p - '".$academy_1202."' WHERE id= '".$USER['id']."';");
$this->printMessage('Academy energetics is succesfully upgraded!',  true, array('game.php?page=academy', 3)); 
}elseif( $skill == '1202' && $USER['academy_p'] < $academy_1202){
$this->printMessage('Please verify your academy points to upgrade this bonus!',  true, array('game.php?page=academy', 3));    
}elseif($skill == '1202' && $USER['academy_1202'] + $count > 100){
$this->printMessage('You reached the max level!',  true, array('game.php?page=academy', 3));    
}
############ ID:9 magistracy
$academy_1203 = $price;
if( $skill == '1203' && $USER['academy_p'] >= $academy_1203 && $USER['academy_1203'] + $count <= 40){
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET academy_1203 = academy_1203 + '".$count."' WHERE id= '".$USER['id']."';");
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET academy_p = academy_p - '".$academy_1203."' WHERE id= '".$USER['id']."';");
$this->printMessage('Academy magistracy is succesfully upgraded!',  true, array('game.php?page=academy', 3)); 
}elseif( $skill == '1203' && $USER['academy_p'] < $academy_1203){
$this->printMessage('Please verify your academy points to upgrade this bonus!',  true, array('game.php?page=academy', 3));    
}elseif($skill == '1203' && $USER['academy_1203'] + $count > 40){
$this->printMessage('You reached the max level!',  true, array('game.php?page=academy', 3));    
}
############ ID:10 cosmo depot
$academy_1204 = $price;
if( $skill == '1204' && $USER['academy_p'] >= $academy_1204 && $USER['academy_1204'] + $count <= 50){
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET academy_1204 = academy_1204 + '".$count."' WHERE id= '".$USER['id']."';");
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET academy_p = academy_p - '".$academy_1204."' WHERE id= '".$USER['id']."';");
$this->printMessage('Academy cosmo depot is succesfully upgraded!',  true, array('game.php?page=academy', 3)); 
}elseif( $skill == '1204' && $USER['academy_p'] < $academy_1204){
$this->printMessage('Please verify your academy points to upgrade this bonus!',  true, array('game.php?page=academy', 3));    
}elseif($skill == '1204' && $USER['academy_1204'] + $count > 50){
$this->printMessage('You reached the max level!',  true, array('game.php?page=academy', 3));    
}
############ ID:11 global defense
$academy_1208 = $price;
if( $skill == '1208' && $USER['academy_p'] >= $academy_1208 && $USER['academy_1208'] + $count <= 200){
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET academy_1208 = academy_1208 + '".$count."' WHERE id= '".$USER['id']."';");
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET academy_p = academy_p - '".$academy_1208."' WHERE id= '".$USER['id']."';");
$this->printMessage('Academy global defense is succesfully upgraded!',  true, array('game.php?page=academy', 3)); 
}elseif( $skill == '1208' && $USER['academy_p'] < $academy_1208){
$this->printMessage('Please verify your academy points to upgrade this bonus!',  true, array('game.php?page=academy', 3));    
}elseif($skill == '1208' && $USER['academy_1208'] + $count > 200){
$this->printMessage('You reached the max level!',  true, array('game.php?page=academy', 3));    
}
############ ID:12 thermonuclear reaction
$academy_1209 = $price;
if( $skill == '1209' && $USER['academy_p'] >= $academy_1209 && $USER['academy_1209'] + $count <= 100){
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET academy_1209 = academy_1209 + '".$count."' WHERE id= '".$USER['id']."';");
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET academy_p = academy_p - '".$academy_1209."' WHERE id= '".$USER['id']."';");
$this->printMessage('Academy thermonuclear reaction is succesfully upgraded!',  true, array('game.php?page=academy', 3)); 
}elseif( $skill == '1209' && $USER['academy_p'] < $academy_1209){
$this->printMessage('Please verify your academy points to upgrade this bonus!',  true, array('game.php?page=academy', 3));    
}elseif($skill == '1209' && $USER['academy_1209'] + $count > 100){
$this->printMessage('You reached the max level!',  true, array('game.php?page=academy', 3));    
}
############ ID:13 solar panels
$academy_1210 = $price;
if( $skill == '1210' && $USER['academy_p'] >= $academy_1210 && $USER['academy_1210'] + $count <= 100){
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET academy_1210 = academy_1210 + '".$count."' WHERE id= '".$USER['id']."';");
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET academy_p = academy_p - '".$academy_1210."' WHERE id= '".$USER['id']."';");
$this->printMessage('Academy solar panels is succesfully upgraded!',  true, array('game.php?page=academy', 3)); 
}elseif( $skill == '1210' && $USER['academy_p'] < $academy_1210){
$this->printMessage('Please verify your academy points to upgrade this bonus!',  true, array('game.php?page=academy', 3));    
}elseif($skill == '1210' && $USER['academy_1210'] + $count > 100){
$this->printMessage('You reached the max level!',  true, array('game.php?page=academy', 3));    
}
############ ID:14 academy of sciences (not coded as bonus)
$academy_1205 = $price;
if( $skill == '1205' && $USER['academy_p'] >= $academy_1205  && $USER['academy_1205'] + $count <= 20){
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET academy_1205 = academy_1205 + '".$count."' WHERE id= '".$USER['id']."';");
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET academy_p = academy_p - '".$academy_1205."' WHERE id= '".$USER['id']."';");
$this->printMessage('Academy academy of sciences is succesfully upgraded!',  true, array('game.php?page=academy', 3)); 
}elseif( $skill == '1205' && $USER['academy_p'] < $academy_1205){
$this->printMessage('Please verify your academy points to upgrade this bonus!',  true, array('game.php?page=academy', 3));    
}elseif($skill == '1205' && $USER['academy_1205'] + $count > 20){
$this->printMessage('You reached the max level!',  true, array('game.php?page=academy', 3));    
}
############ ID:15 packing of cargo
$academy_1207 = $price;
if( $skill == '1207' && $USER['academy_p'] >= $academy_1207 && $USER['academy_1207'] + $count <= 50){
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET academy_1207 = academy_1207 + '".$count."' WHERE id= '".$USER['id']."';");
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET academy_p = academy_p - '".$academy_1207."' WHERE id= '".$USER['id']."';");
$this->printMessage('Academy packing of cargo is succesfully upgraded!',  true, array('game.php?page=academy', 3)); 
}elseif( $skill == '1207' && $USER['academy_p'] < $academy_1207){
$this->printMessage('Please verify your academy points to upgrade this bonus!',  true, array('game.php?page=academy', 3));    
}elseif($skill == '1207' && $USER['academy_1207'] + $count > 50){
$this->printMessage('You reached the max level!',  true, array('game.php?page=academy', 3));    
}
############ ID:16 expansion of the empire
$academy_1206 = $price;
if( $skill == '1206' && $USER['academy_p'] >= $academy_1206 && $USER['academy_1206'] + $count <= 20){
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET academy_1206 = academy_1206 + '".$count."' WHERE id= '".$USER['id']."';");
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET academy_p = academy_p - '".$academy_1206."' WHERE id= '".$USER['id']."';");
$this->printMessage('Academy expansion of the empire is succesfully upgraded!',  true, array('game.php?page=academy', 3)); 
}elseif( $skill == '1206' && $USER['academy_p'] < $academy_1206){
$this->printMessage('Please verify your academy points to upgrade this bonus!',  true, array('game.php?page=academy', 3));    
}elseif($skill == '1206' && $USER['academy_1206'] + $count > 20){
$this->printMessage('You reached the max level!',  true, array('game.php?page=academy', 3));    
}
############ ID:17 defensive strategy
$academy_1301 = $price;
if( $skill == '1301' && $USER['academy_p'] >= $academy_1301 && $USER['academy_1301'] + $count <= 200){
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET academy_1301 = academy_1301 + '".$count."' WHERE id= '".$USER['id']."';");
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET academy_p = academy_p - '".$academy_1301."' WHERE id= '".$USER['id']."';");
$this->printMessage('Academy defensive strategy is succesfully upgraded!',  true, array('game.php?page=academy', 3)); 
}elseif( $skill == '1301' && $USER['academy_p'] < $academy_1301){
$this->printMessage('Please verify your academy points to upgrade this bonus!',  true, array('game.php?page=academy', 3));    
}elseif($skill == '1301' && $USER['academy_1301'] + $count > 200){
$this->printMessage('You reached the max level!',  true, array('game.php?page=academy', 3));    
}
############ ID:19 defense class A
$academy_1302 = $price;
if( $skill == '1302' && $USER['academy_p'] >= $academy_1302 && $USER['academy_1302'] + $count <= 100){
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET academy_1302 = academy_1302 + '".$count."' WHERE id= '".$USER['id']."';");
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET academy_p = academy_p - '".$academy_1302."' WHERE id= '".$USER['id']."';");
$this->printMessage('Academy defense class A is succesfully upgraded!',  true, array('game.php?page=academy', 3)); 
}elseif( $skill == '1302' && $USER['academy_p'] < $academy_1302){
$this->printMessage('Please verify your academy points to upgrade this bonus!',  true, array('game.php?page=academy', 3));    
}elseif($skill == '1302' && $USER['academy_1302'] + $count > 100){
$this->printMessage('You reached the max level!',  true, array('game.php?page=academy', 3));    
}
$academy_1303 = $price;
if( $skill == '1303' && $USER['academy_p'] >= $academy_1303 && $USER['academy_1303'] + $count <= 100){
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET academy_1303 = academy_1303 + '".$count."' WHERE id= '".$USER['id']."';");
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET academy_p = academy_p - '".$academy_1303."' WHERE id= '".$USER['id']."';");
$this->printMessage('Academy double shields is succesfully upgraded!',  true, array('game.php?page=academy', 3)); 
}elseif( $skill == '1303' && $USER['academy_p'] < $academy_1303){
$this->printMessage('Please verify your academy points to upgrade this bonus!',  true, array('game.php?page=academy', 3));    
}elseif($skill == '1303' && $USER['academy_1303'] + $count > 100){
$this->printMessage('You reached the max level!',  true, array('game.php?page=academy', 3));    
}
############ ID:18 mechanics
$academy_1304 = $price;
if( $skill == '1304' && $USER['academy_p'] >= $academy_1304 && $USER['academy_1304'] + $count <= 40){
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET academy_1304 = academy_1304 + '".$count."' WHERE id= '".$USER['id']."';");
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET academy_p = academy_p - '".$academy_1304."' WHERE id= '".$USER['id']."';");
$this->printMessage('Academy mechanics is succesfully upgraded!',  true, array('game.php?page=academy', 3)); 
}elseif( $skill == '1304' && $USER['academy_p'] < $academy_1304){
$this->printMessage('Please verify your academy points to upgrade this bonus!',  true, array('game.php?page=academy', 3));    
}elseif($skill == '1304' && $USER['academy_1304'] + $count > 40){
$this->printMessage('You reached the max level!',  true, array('game.php?page=academy', 3));    
}
############ ID:21 shield complex
$academy_1305 = $price;
if( $skill == '1305' && $USER['academy_p'] >= $academy_1305 && $USER['academy_1305'] + $count <= 50){
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET academy_1305 = academy_1305 + '".$count."' WHERE id= '".$USER['id']."';");
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET academy_p = academy_p - '".$academy_1305."' WHERE id= '".$USER['id']."';");
$this->printMessage('Academy shield complex is succesfully upgraded!',  true, array('game.php?page=academy', 3)); 
}elseif( $skill == '1305' && $USER['academy_p'] < $academy_1305){
$this->printMessage('Please verify your academy points to upgrade this bonus!',  true, array('game.php?page=academy', 3));    
}elseif($skill == '1305' && $USER['academy_1305'] + $count > 50){
$this->printMessage('You reached the max level!',  true, array('game.php?page=academy', 3));    
}
############ ID:22 defense complex
$academy_1306 = $price;
if( $skill == '1306' && $USER['academy_p'] >= $academy_1306 && $USER['academy_1306'] + $count <= 50){
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET academy_1306 = academy_1306 + '".$count."' WHERE id= '".$USER['id']."';");
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET academy_p = academy_p - '".$academy_1306."' WHERE id= '".$USER['id']."';");
$this->printMessage('Academy defense complex is succesfully upgraded!',  true, array('game.php?page=academy', 3)); 
}elseif( $skill == '1306' && $USER['academy_p'] < $academy_1306){
$this->printMessage('Please verify your academy points to upgrade this bonus!',  true, array('game.php?page=academy', 3));    
}elseif($skill == '1306' && $USER['academy_1306'] + $count > 50){
$this->printMessage('You reached the max level!',  true, array('game.php?page=academy', 3));    
}
############ ID:23 seal shield dome
$academy_1307 = $price;
if( $skill == '1307' && $USER['academy_p'] >= $academy_1307 && $USER['academy_1307'] + $count <= 70){
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET academy_1307 = academy_1307 + '".$count."' WHERE id= '".$USER['id']."';");
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET academy_p = academy_p - '".$academy_1307."' WHERE id= '".$USER['id']."';");
$this->printMessage('Academy seal shield dome is succesfully upgraded!',  true, array('game.php?page=academy', 3)); 
}elseif( $skill == '1307' && $USER['academy_p'] < $academy_1307){
$this->printMessage('Please verify your academy points to upgrade this bonus!',  true, array('game.php?page=academy', 3));    
}elseif($skill == '1307' && $USER['academy_1307'] + $count > 70){
$this->printMessage('You reached the max level!',  true, array('game.php?page=academy', 3));    
}
$academy_1308 = $price;
if( $skill == '1308' && $USER['academy_p'] >= $academy_1308 && $USER['academy_1308'] + $count <= 70){
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET academy_1308 = academy_1308 + '".$count."' WHERE id= '".$USER['id']."';");
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET academy_p = academy_p - '".$academy_1308."' WHERE id= '".$USER['id']."';");
$this->printMessage('Academy thick armor is succesfully upgraded!',  true, array('game.php?page=academy', 3)); 
}elseif( $skill == '1308' && $USER['academy_p'] < $academy_1308){
$this->printMessage('Please verify your academy points to upgrade this bonus!',  true, array('game.php?page=academy', 3));    
}elseif($skill == '1308' && $USER['academy_1308'] + $count > 70){
$this->printMessage('You reached the max level!',  true, array('game.php?page=academy', 3));    
}
############ ID:24 maximum defense
$academy_1309 = $price;
if( $skill == '1309' && $USER['academy_p'] >= $academy_1309 && $USER['academy_1309'] + $count <= 60){
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET academy_1309 = academy_1309 + '".$count."' WHERE id= '".$USER['id']."';");
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET academy_p = academy_p - '".$academy_1309."' WHERE id= '".$USER['id']."';");
$this->printMessage('Academy maximum defense is succesfully upgraded!',  true, array('game.php?page=academy', 3)); 
}elseif( $skill == '1309' && $USER['academy_p'] < $academy_1309){
$this->printMessage('Please verify your academy points to upgrade this bonus!',  true, array('game.php?page=academy', 3));    
}elseif($skill == '1309' && $USER['academy_1309'] + $count > 60){
$this->printMessage('You reached the max level!',  true, array('game.php?page=academy', 3));    
}
############ ID:20 standartization (defense)
$academy_1310 = $price;
if( $skill == '1310' && $USER['academy_p'] >= $academy_1310 && $USER['academy_1310'] + $count <= 70){
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET academy_1310 = academy_1310 + '".$count."' WHERE id= '".$USER['id']."';");
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET academy_p = academy_p - '".$academy_1310."' WHERE id= '".$USER['id']."';");
$this->printMessage('Academy standartization (defense) is succesfully upgraded!',  true, array('game.php?page=academy', 3)); 
}elseif( $skill == '1310' && $USER['academy_p'] < $academy_1310){
$this->printMessage('Please verify your academy points to upgrade this bonus!',  true, array('game.php?page=academy', 3));    
}elseif($skill == '1310' && $USER['academy_1310'] + $count > 70){
$this->printMessage('You reached the max level!',  true, array('game.php?page=academy', 3));    
}

$academy_1311 = $price;
if( $skill == '1311' && $USER['academy_p'] >= $academy_1311 && $USER['academy_1311'] + $count <= 70){
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET academy_1311 = academy_1311 + '".$count."' WHERE id= '".$USER['id']."';");
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET academy_p = academy_p - '".$academy_1311."' WHERE id= '".$USER['id']."';");
$this->printMessage('Academy seal double shield is succesfully upgraded!',  true, array('game.php?page=academy', 3)); 
}elseif( $skill == '1311' && $USER['academy_p'] < $academy_1311){
$this->printMessage('Please verify your academy points to upgrade this bonus!',  true, array('game.php?page=academy', 3));    
}elseif($skill == '1311' && $USER['academy_1311'] + $count > 70){
$this->printMessage('You reached the max level!',  true, array('game.php?page=academy', 3));    
}

$academy_1312 = $price;
if( $skill == '1312' && $USER['academy_p'] >= $academy_1312 && $USER['academy_1312'] + $count <= 70){
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET academy_1312 = academy_1312 + '".$count."' WHERE id= '".$USER['id']."';");
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET academy_p = academy_p - '".$academy_1312."' WHERE id= '".$USER['id']."';");
$this->printMessage('Academy restoring light shields is succesfully upgraded!',  true, array('game.php?page=academy', 3)); 
}elseif( $skill == '1312' && $USER['academy_p'] < $academy_1312){
$this->printMessage('Please verify your academy points to upgrade this bonus!',  true, array('game.php?page=academy', 3));    
}elseif($skill == '1312' && $USER['academy_1312'] + $count > 70){
$this->printMessage('You reached the max level!',  true, array('game.php?page=academy', 3));    
}

$academy_1313 = $price;
if( $skill == '1313' && $USER['academy_p'] >= $academy_1313 && $USER['academy_1313'] + $count <= 70){
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET academy_1313 = academy_1313 + '".$count."' WHERE id= '".$USER['id']."';");
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET academy_p = academy_p - '".$academy_1313."' WHERE id= '".$USER['id']."';");
$this->printMessage('Academy Rebuild of secondary shields is succesfully upgraded!',  true, array('game.php?page=academy', 3)); 
}elseif( $skill == '1313' && $USER['academy_p'] < $academy_1313){
$this->printMessage('Please verify your academy points to upgrade this bonus!',  true, array('game.php?page=academy', 3));    
}elseif($skill == '1313' && $USER['academy_1313'] + $count > 70){
$this->printMessage('You reached the max level!',  true, array('game.php?page=academy', 3));    
}

$academy_1314 = $price;
if( $skill == '1314' && $USER['academy_p'] >= $academy_1314 && $USER['academy_1314'] + $count <= 70){
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET academy_1314 = academy_1314 + '".$count."' WHERE id= '".$USER['id']."';");
$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET academy_p = academy_p - '".$academy_1314."' WHERE id= '".$USER['id']."';");
$this->printMessage('Academy recovery of heavy shield is succesfully upgraded!',  true, array('game.php?page=academy', 3)); 
}elseif( $skill == '1314' && $USER['academy_p'] < $academy_1314){
$this->printMessage('Please verify your academy points to upgrade this bonus!',  true, array('game.php?page=academy', 3));    
}elseif($skill == '1314' && $USER['academy_1314'] + $count > 70){
$this->printMessage('You reached the max level!',  true, array('game.php?page=academy', 3));    
}

}


	function show(){
	global $LNG, $USER, $PLANET, $resource, $reslist, $CONF;
	
	//if($USER['id'] != 1){
	//$this->printMessage('The page is under maintencane!',  true, array('game.php?page=overview', 3));    
	//}

	$TOTAL  = calculationBis(1101,$USER['academy_1101']) + calculationBis(1102,$USER['academy_1102']) + calculationBis(1103,$USER['academy_1103']) + calculationBis(1104,$USER['academy_1104']) + calculationBis(1105,$USER['academy_1105']) + calculationBis(1106,$USER['academy_1106']) + calculationBis(1107,$USER['academy_1107']) + calculationBis(1108,$USER['academy_1108']) + calculationBis(1109,$USER['academy_1109']) + calculationBis(1110,$USER['academy_1110']) + calculationBis(1111,$USER['academy_1111']) + calculationBis(1112,$USER['academy_1112']) + calculationBis(1113,$USER['academy_1113']) + calculationBis(1201,$USER['academy_1201']) + calculationBis(1202,$USER['academy_1202']) + calculationBis(1203,$USER['academy_1203']) + calculationBis(1204,$USER['academy_1204']) + calculationBis(1208,$USER['academy_1208']) + calculationBis(1209,$USER['academy_1209']) + calculationBis(1210,$USER['academy_1210']) + calculationBis(1205,$USER['academy_1205']) + calculationBis(1207,$USER['academy_1207']) + calculationBis(1206,$USER['academy_1206']) + calculationBis(1301,$USER['academy_1301']) + calculationBis(1302,$USER['academy_1302']) + calculationBis(1303,$USER['academy_1303']) + calculationBis(1304,$USER['academy_1304']) + calculationBis(1305,$USER['academy_1305']) + calculationBis(1306,$USER['academy_1306']) + calculationBis(1307,$USER['academy_1307']) + calculationBis(1308,$USER['academy_1308']) + calculationBis(1309,$USER['academy_1309']) + calculationBis(1310,$USER['academy_1310']) + calculationBis(1311,$USER['academy_1311']) + calculationBis(1312,$USER['academy_1312']) + calculationBis(1313,$USER['academy_1313']) + calculationBis(1314,$USER['academy_1314']);
	$academy_cost = 50;
	if($CONF['academy_bonus'] != 0 && $CONF['purchase_bonus_timer'] > TIMESTAMP){
	$academy_cost = round($academy_cost - ($academy_cost / 100 * $CONF['academy_bonus']));
	}
	
	$academy_1101_bonus = getbonusOne(1101,$USER['academy_1101']);
	$academy_1101_points = calculation(1101,$USER['academy_1101']);
	$academy_1101_next = 1 + ($USER['academy_1101'] * 1);
	
	$academy_1102_bonus1 = getbonusOne(1102,$USER['academy_1102']);
	$academy_1102_bonus2 = getbonusTwo(1102,$USER['academy_1102']);
	$academy_1102_points = calculation(1102,$USER['academy_1102']);
	$academy_1102_next = 1 + ($USER['academy_1102'] * 1);
	
	$academy_1103_bonus = getbonusOne(1103,$USER['academy_1103']);
	$academy_1103_points = calculation(1103,$USER['academy_1103']);
	$academy_1103_next = 1 + ($USER['academy_1103'] * 1);
	
	$academy_1104_bonus = getbonusOne(1104,$USER['academy_1104']);
	$academy_1104_points = calculation(1104,$USER['academy_1104']);
	$academy_1104_next = 1 + ($USER['academy_1104'] * 1);
	
	$academy_1105_bonus = getbonusOne(1105,$USER['academy_1105']);
	$academy_1105_points = calculation(1105,$USER['academy_1105']);
	$academy_1105_next = 1 + ($USER['academy_1105'] * 1);
	
	$academy_1106_bonus = getbonusOne(1106,$USER['academy_1106']);
	$academy_1106_points = calculation(1106,$USER['academy_1106']);
	$academy_1106_next = 1 + ($USER['academy_1106'] * 1);
	
	$academy_1107_bonus = getbonusOne(1107,$USER['academy_1107']);
	$academy_1107_points = calculation(1107,$USER['academy_1107']);
	$academy_1107_next = 1 + ($USER['academy_1107'] * 1);
	
	$academy_1108_bonus = getbonusOne(1108,$USER['academy_1108']);
	$academy_1108_points = calculation(1108,$USER['academy_1108']);
	$academy_1108_next = 1 + ($USER['academy_1108'] * 1);
	
	$academy_1109_bonus = getbonusOne(1109,$USER['academy_1109']);
	$academy_1109_points = calculation(1109,$USER['academy_1109']);
	$academy_1109_next = 1 + ($USER['academy_1109'] * 1);
	
	$academy_1110_bonus = getbonusOne(1109,$USER['academy_1110']);
	$academy_1110_points = calculation(1109,$USER['academy_1110']);
	$academy_1110_next = 1 + ($USER['academy_1110'] * 1);
	
	$academy_1111_bonus = getbonusOne(1111,$USER['academy_1111']);
	$academy_1111_points = calculation(1111,$USER['academy_1111']);
	$academy_1111_next = 1 + ($USER['academy_1111'] * 1);
	
	$academy_1112_bonus = getbonusOne(1112,$USER['academy_1112']);
	$academy_1112_points = calculation(1112,$USER['academy_1112']);
	$academy_1112_next = 1 + ($USER['academy_1112'] * 1);
	
	$academy_1113_bonus = getbonusOne(1113,$USER['academy_1113']);
	$academy_1113_points = calculation(1113,$USER['academy_1113']);
	$academy_1113_next = 1 + ($USER['academy_1113'] * 1);
	
	$academy_1201_bonus = getbonusOne(1201,$USER['academy_1201']);
	$academy_1201_points = calculation(1201,$USER['academy_1201']);
	$academy_1201_next = 1 + ($USER['academy_1201'] * 1);
	
	$academy_1202_bonus = getbonusOne(1202,$USER['academy_1202']);
	$academy_1202_points = calculation(1202,$USER['academy_1202']);
	$academy_1202_next = 1 + ($USER['academy_1202'] * 1);
	
	$academy_1203_bonus = getbonusOne(1203,$USER['academy_1203']);
	$academy_1203_points = calculation(1203,$USER['academy_1203']);
	$academy_1203_next = 1 + ($USER['academy_1203'] * 1);
	
	$academy_1204_bonus = getbonusOne(1204,$USER['academy_1204']);
	$academy_1204_points = calculation(1204,$USER['academy_1204']);
	$academy_1204_next = 1 + ($USER['academy_1204'] * 1);
	
	$academy_1205_bonus = getbonusOne(1205,$USER['academy_1205']);
	$academy_1205_points = calculation(1205,$USER['academy_1205']);
	$academy_1205_next = 1 + ($USER['academy_1205'] * 1);
	
	$academy_1206_bonus = getbonusOne(1206,$USER['academy_1206']);
	$academy_1206_points = calculation(1206,$USER['academy_1206']);
	$academy_1206_next = 1 + ($USER['academy_1206'] * 1);
	
	$academy_1207_bonus = getbonusOne(1207,$USER['academy_1207']);
	$academy_1207_points = calculation(1207,$USER['academy_1207']);
	$academy_1207_next = 1 + ($USER['academy_1207'] * 1);
	
	$academy_1208_bonus = getbonusOne(1208,$USER['academy_1208']);
	$academy_1208_points = calculation(1208,$USER['academy_1208']);
	$academy_1208_next = 1 + ($USER['academy_1208'] * 1);
	
	$academy_1209_bonus = getbonusOne(1209,$USER['academy_1209']);
	$academy_1209_points = calculation(1209,$USER['academy_1209']);
	$academy_1209_next = 1 + ($USER['academy_1209'] * 1);
	
	$academy_1210_bonus = getbonusOne(1210,$USER['academy_1210']);
	$academy_1210_points = calculation(1210,$USER['academy_1210']);
	$academy_1210_next = 1 + ($USER['academy_1210'] * 1);
	
	$academy_1301_bonus = getbonusOne(1301,$USER['academy_1301']);
	$academy_1301_points = calculation(1301,$USER['academy_1301']);
	$academy_1301_next = 1 + ($USER['academy_1301'] * 1);
	
	$academy_1302_bonus1 =  getbonusOne(1302,$USER['academy_1302']);
	$academy_1302_bonus2 =  getbonusTwo(1302,$USER['academy_1302']);
	$academy_1302_points = calculation(1302,$USER['academy_1302']);
	$academy_1302_next = 1 + ($USER['academy_1302'] * 1);
	
	$academy_1303_bonus = getbonusOne(1303,$USER['academy_1303']);
	$academy_1303_points = calculation(1303,$USER['academy_1303']);
	$academy_1303_next = 1 + ($USER['academy_1303'] * 1);
	
	$academy_1304_bonus =  getbonusOne(1304,$USER['academy_1304']);
	$academy_1304_points = calculation(1304,$USER['academy_1304']);
	$academy_1304_next = 1 + ($USER['academy_1304'] * 1);
	
	$academy_1305_bonus =  getbonusOne(1305,$USER['academy_1305']);
	$academy_1305_points = calculation(1305,$USER['academy_1305']);
	$academy_1305_next = 1 + ($USER['academy_1305'] * 1);
	
	$academy_1306_bonus =  getbonusOne(1306,$USER['academy_1306']);
	$academy_1306_points = calculation(1306,$USER['academy_1306']);
	$academy_1306_next = 1 + ($USER['academy_1306'] * 1);
	
	$academy_1307_bonus =  getbonusOne(1307,$USER['academy_1307']);
	$academy_1307_points = calculation(1307,$USER['academy_1307']);
	$academy_1307_next = 1 + ($USER['academy_1307'] * 1);
	
	$academy_1308_bonus =  getbonusOne(1308,$USER['academy_1308']);
	$academy_1308_points = calculation(1308,$USER['academy_1308']);
	$academy_1308_next = 1 + ($USER['academy_1308'] * 1);
	
	$academy_1309_bonus =  getbonusOne(1309,$USER['academy_1309']);
	$academy_1309_points = calculation(1309,$USER['academy_1309']);
	$academy_1309_next = 1 + ($USER['academy_1309'] * 1);
	
	$academy_1310_bonus =  getbonusOne(1310,$USER['academy_1310']);
	$academy_1310_points = calculation(1310,$USER['academy_1310']);
	$academy_1310_next = 1 + ($USER['academy_1310'] * 1);
	
	$academy_1311_bonus =  getbonusOne(1311,$USER['academy_1311']);
	$academy_1311_points = calculation(1311,$USER['academy_1311']);
	$academy_1311_next = 1 + ($USER['academy_1311'] * 1);
	
	$academy_1312_bonus =  getbonusOne(1312,$USER['academy_1312']);
	$academy_1312_points = calculation(1312,$USER['academy_1312']);
	$academy_1312_next = 1 + ($USER['academy_1312'] * 1);
	
	$academy_1313_bonus =  getbonusOne(1313,$USER['academy_1313']);
	$academy_1313_points = calculation(1313,$USER['academy_1313']);
	$academy_1313_next = 1 + ($USER['academy_1313'] * 1);
	
	$academy_1314_bonus =  getbonusOne(1314,$USER['academy_1314']);
	$academy_1314_points = calculation(1314,$USER['academy_1314']);
	$academy_1314_next = 1 + ($USER['academy_1314'] * 1);
	
	
	
	
	
	$manual_25_step = 1;
	if($USER['training'] == 0 && $USER['training_step'] == 25 && $USER['academy_1101'] < 1 && $USER['academy_1201'] < 1 && $USER['academy_1301'] < 1){
	$manual_25_step = 0;
	}
	
	$manual_25_1_step = 1;
	if($USER['training'] == 0 && $USER['training_step'] == 25 && ($USER['academy_1101'] >= 1 || $USER['academy_1201'] >= 1 || $USER['academy_1301'] >= 1)){
	$manual_25_1_step = 0;
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `training_step` = '26' WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `experience_peace` = `experience_peace` + '650' WHERE `id` = ".$USER['id'].";");
	}

	$this->tplObj->loadscript("pointes.js");

	$this->tplObj->assign_vars(
	array(
	'manual_25_step' => $manual_25_step,
	'manual_25_1_step' => $manual_25_1_step,
	'academy_p' => pretty_number($USER['academy_p']),
	'academy_1101' => $USER['academy_1101'],
	'academy_1102' => $USER['academy_1102'],
	'academy_1103' => $USER['academy_1103'],
	'academy_1104' => $USER['academy_1104'],
	'academy_1105' => $USER['academy_1105'],
	'academy_1106' => $USER['academy_1106'],
	'academy_1107' => $USER['academy_1107'],
	'academy_1108' => $USER['academy_1108'],
	'academy_1109' => $USER['academy_1109'],
	'academy_1110' => $USER['academy_1110'],
	'academy_1111' => $USER['academy_1111'],
	'academy_1112' => $USER['academy_1112'],
	'academy_1113' => $USER['academy_1113'],
	'academy_1201' => $USER['academy_1201'],
	'academy_1202' => $USER['academy_1202'],
	'academy_1203' => $USER['academy_1203'],
	'academy_1204' => $USER['academy_1204'],
	'academy_1208' => $USER['academy_1208'],
	'academy_1209' => $USER['academy_1209'],
	'academy_1210' => $USER['academy_1210'],
	'academy_1205' => $USER['academy_1205'],
	'academy_1207' => $USER['academy_1207'],
	'academy_1206' => $USER['academy_1206'],
	'academy_1301' => $USER['academy_1301'],
	'academy_1302' => $USER['academy_1302'],
	'academy_1303' => $USER['academy_1303'],
	'academy_1304' => $USER['academy_1304'],
	'academy_1305' => $USER['academy_1305'],
	'academy_1306' => $USER['academy_1306'],
	'academy_1307' => $USER['academy_1307'],
	'academy_1308' => $USER['academy_1308'],
	'academy_1309' => $USER['academy_1309'],
	'academy_1310' => $USER['academy_1310'],
	'academy_1311' => $USER['academy_1311'],
	'academy_1312' => $USER['academy_1312'],
	'academy_1313' => $USER['academy_1313'],
	'academy_1314' => $USER['academy_1314'],
	'academy_1101_bonus' => $academy_1101_bonus,
	'academy_1101_points' => $academy_1101_points,
	'academy_1101_next' => $academy_1101_next,
	'academy_1102_bonus1' => $academy_1102_bonus1,
	'academy_1102_bonus2' => $academy_1102_bonus2,
	'academy_1102_points' => $academy_1102_points,
	'academy_1102_next' => $academy_1102_next,
	'academy_1103_bonus' => $academy_1103_bonus,
	'academy_1103_points' => $academy_1103_points,
	'academy_1103_next' => $academy_1103_next,
	'academy_1104_bonus' => $academy_1104_bonus,
	'academy_1104_points' => $academy_1104_points,
	'academy_1104_next' => $academy_1104_next,
	'academy_1105_bonus' => $academy_1105_bonus,
	'academy_1105_points' => $academy_1105_points,
	'academy_1105_next' => $academy_1105_next,
	'academy_1106_bonus' => $academy_1106_bonus,
	'academy_1106_points' => $academy_1106_points,
	'academy_1106_next' => $academy_1106_next,
	'academy_1107_bonus' => $academy_1107_bonus,
	'academy_1107_points' => $academy_1107_points,
	'academy_1107_next' => $academy_1107_next,
	'academy_1108_bonus' => $academy_1108_bonus,
	'academy_1108_points' => $academy_1108_points,
	'academy_1108_next' => $academy_1108_next,
	'academy_1109_bonus' => $academy_1109_bonus,
	'academy_1109_points' => $academy_1109_points,
	'academy_1109_next' => $academy_1109_next,
	'academy_1110_bonus' => $academy_1110_bonus,
	'academy_1110_points' => $academy_1110_points,
	'academy_1110_next' => $academy_1110_next,
	'academy_1111_bonus' => $academy_1111_bonus,
	'academy_1111_points' => $academy_1111_points,
	'academy_1111_next' => $academy_1111_next,
	'academy_1112_bonus' => $academy_1112_bonus,
	'academy_1112_points' => $academy_1112_points,
	'academy_1112_next' => $academy_1112_next,
	'academy_1113_bonus' => $academy_1113_bonus,
	'academy_1113_points' => $academy_1113_points,
	'academy_1113_next' => $academy_1113_next,
	'academy_1201_bonus' => $academy_1201_bonus,
	'academy_1201_points' => $academy_1201_points,
	'academy_1201_next' => $academy_1201_next,
	'academy_1202_bonus' => $academy_1202_bonus,
	'academy_1202_points' => $academy_1202_points,
	'academy_1202_next' => $academy_1202_next,
	'academy_1203_bonus' => $academy_1203_bonus,
	'academy_1203_points' => $academy_1203_points,
	'academy_1203_next' => $academy_1203_next,
	'academy_1204_bonus' => $academy_1204_bonus,
	'academy_1204_points' => $academy_1204_points,
	'academy_1204_next' => $academy_1204_next,
	'academy_1205_bonus' => $academy_1205_bonus,
	'academy_1205_points' => $academy_1205_points,
	'academy_1205_next' => $academy_1205_next,
	'academy_1206_bonus' => $academy_1206_bonus,
	'academy_1206_points' => $academy_1206_points,
	'academy_1206_next' => $academy_1206_next,
	'academy_1207_bonus' => $academy_1207_bonus,
	'academy_1207_points' => $academy_1207_points,
	'academy_1207_next' => $academy_1207_next,
	'academy_1208_bonus' => $academy_1208_bonus,
	'academy_1208_points' => $academy_1208_points,
	'academy_1208_next' => $academy_1208_next,
	'academy_1209_bonus' => $academy_1209_bonus,
	'academy_1209_points' => $academy_1209_points,
	'academy_1209_next' => $academy_1209_next,
	'academy_1210_bonus' => $academy_1210_bonus,
	'academy_1210_points' => $academy_1210_points,
	'academy_1210_next' => $academy_1210_next,
	'academy_1301_bonus' => $academy_1301_bonus,
	'academy_1301_points' => $academy_1301_points,
	'academy_1301_next' => $academy_1301_next,
	'academy_1302_bonus1' => $academy_1302_bonus1,
	'academy_1302_bonus2' => $academy_1302_bonus2,
	'academy_1302_points' => $academy_1302_points,
	'academy_1302_next' => $academy_1302_next,
	'academy_1303_bonus' => $academy_1303_bonus,
	'academy_1303_points' => $academy_1303_points,
	'academy_1303_next' => $academy_1303_next,
	'academy_1304_bonus' => $academy_1304_bonus,
	'academy_1304_points' => $academy_1304_points,
	'academy_1304_next' => $academy_1304_next,
	'academy_1305_bonus' => $academy_1305_bonus,
	'academy_1305_points' => $academy_1305_points,
	'academy_1305_next' => $academy_1305_next,
	'academy_1306_bonus' => $academy_1306_bonus,
	'academy_1306_points' => $academy_1306_points,
	'academy_1306_next' => $academy_1306_next,
	'academy_1307_bonus' => $academy_1307_bonus,
	'academy_1307_points' => $academy_1307_points,
	'academy_1307_next' => $academy_1307_next,
	'academy_1308_bonus' => $academy_1308_bonus,
	'academy_1308_points' => $academy_1308_points,
	'academy_1308_next' => $academy_1308_next,
	'academy_1309_bonus' => $academy_1309_bonus,
	'academy_1309_points' => $academy_1309_points,
	'academy_1309_next' => $academy_1309_next,
	'academy_1310_bonus' => $academy_1310_bonus,
	'academy_1310_points' => $academy_1310_points,
	'academy_1310_next' => $academy_1310_next,
	'academy_1311_bonus' => $academy_1311_bonus,
	'academy_1311_points' => $academy_1311_points,
	'academy_1311_next' => $academy_1311_next,
	'academy_1312_bonus' => $academy_1312_bonus,
	'academy_1312_points' => $academy_1312_points,
	'academy_1312_next' => $academy_1312_next,
	'academy_1313_bonus' => $academy_1313_bonus,
	'academy_1313_points' => $academy_1313_points,
	'academy_1313_next' => $academy_1313_next,
	'academy_1314_bonus' => $academy_1314_bonus,
	'academy_1314_points' => $academy_1314_points,
	'academy_1314_next' => $academy_1314_next,
	'academy_cost' => $academy_cost,
	'total_free' => floor($TOTAL / 2),
	'total_dm' => floor($TOTAL / 100 * 75),
	'total_am' => floor($TOTAL),
			
    ));
	$this->display("page.academy.default.tpl");
	}
	}
