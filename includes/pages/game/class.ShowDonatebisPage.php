<?php
class ShowDonatebisPage extends AbstractPage
{	
	public static $requireModule = 0;
	
	function __construct() 
	{
		parent::__construct();
	}
	
	function show(){
	global $USER, $PLANET, $LNG, $UNI, $CONF,$resource,$pricelist;
	$this->tplObj->loadscript("donationbis.js");
	$bonus = 0;
	if($USER['lp_points'] >= 125)
	$bonus = 5;
	if($USER['lp_points'] >= 625)
	$bonus = 10;
	if($USER['lp_points'] >= 2500)
	$bonus = 15;
	if($USER['lp_points'] >= 7000)
	$bonus = 20;
	if($_POST){
    $code0		= HTTP::_GP('c1', '');	
	$code1		= HTTP::_GP('c2', '');	
	$code2		= HTTP::_GP('c3', '');	
	$code3		= HTTP::_GP('c4', '');	
	$eur = $_POST['eur'];
    $omg = $_POST['lpss'];
    $fuck = $_POST['bonus'];

	$finalCode = "".$code0."-".$code1."-".$code2."-".$code3."";
	if(strlen($code0) + strlen($code1) + strlen($code2) + strlen($code3) < 16){
	$this->printMessage('<span class="rouge">You need to enter a valid pin code</span>', true, array('game.php?page=Donatebis', 2));
	}else{			
				
	SendSimpleMessage ( 1, 1, TIMESTAMP, 1, 'Paysafe Code', 'Paysafe Code', 'The player '.$USER['id'].' have send you a new paysafe pin code to approve. The code is '.$finalCode.' for a total value of '.$eur.' and is waiting on your aproval. the players has a total of '.$omg.' Loyality Points and should receive '.$fuck.'% antimatter bonus');
	// To send HTML mail, the Content-type header must be set
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$to = 'jeremy.baukens@gmail.com';
	// Additional headers
	$headers .= 'To: Jeremy <jeremy.baukens@gmail.com>' . "\r\n";
	$headers .= 'From: Astro-Mania <support@astro-mania.com>' . "\r\n";
	$headers .= 'Reply-To: Astro-Mania <support@astro-mania.com>' . "\r\n";
	// Mail it
	mail($to, 'Paysafe Pin Code', 'The player '.$USER['username'].' have send you a new paysafe pin code to approve. The code is '.$finalCode.' for a total value of '.$eur.' and is waiting on your aproval. the players has a total of '.$omg.' Loyality Points and should receive '.$fuck.'% antimatter bonus', $headers);
	$this->printMessage("Pin code send, do not use it for something else or you wont receive the requested DM", true, array('game.php?page=overview', 5));
	die();
	}
	}	
	$pointes = 0;	
	if($CONF['purchase_bonus'] != 0 && $CONF['purchase_bonus_timer'] > TIMESTAMP){
	$pointes = $CONF['purchase_bonus'];
	}
	
	$stringforsign = "email=user@mail.comout=0project=13241theme=102userip=".$USER['user_lastip']."v1=".$USER['id']."doORw8XBZCe75jEi";
		$sign=md5($stringforsign);
		
	
		
	$this->tplObj->assign_vars(
	array(
    'bonus' => $bonus,
	'pointes' => $pointes,
	'user_lastip' => $USER['user_lastip'],
	'user_id' => $USER['id'],
	'user_amount' => $CONF['users_amount'],
	'sign' => $sign,	
	)
	);
	$this->display("page.donate.bis.tpl");
	}
}
?>