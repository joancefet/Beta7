<?php

#Example PHP Postback Script

// Your Database Connection Details
$host = 'localhost';
$db_name = '';
$db_user = ''; 
$db_password = '';


mysql_connect($host, $db_user, $db_password);
mysql_select_db($db_name);
function pretty_number($n, $dec = 0)
{
	return number_format(floattostring($n, $dec), $dec, ',', '.');
}
function floattostring($Numeric, $Pro = 0, $Output = false){
	return ($Output) ? str_replace(",",".", sprintf("%.".$Pro."f", $Numeric)) : sprintf("%.".$Pro."f", $Numeric);
}
function SendSimpleMessage($Owner, $Sender, $Time, $Type, $From, $Subject, $Message)
{
			
	$SQL	= "INSERT INTO uni1_messages SET 
	message_owner = ".(int) $Owner.", 
	message_sender = ".(int) $Sender.", 
	message_time = ".(int) $Time.", 
	message_type = ".(int) $Type.", 
	message_from = '". $From ."', 
	message_subject = '". $Subject ."', 
	message_text = '".$Message."', 
	message_unread = '1', 
	message_universe = '1';";
	$SQ	= "INSERT INTO uni1_messages_copy SET 
	message_owner = ".(int) $Owner.", 
	message_sender = ".(int) $Sender.", 
	message_time = ".(int) $Time.", 
	message_type = ".(int) $Type.", 
	message_from = '". $From ."', 
	message_subject = '". $Subject ."', 
	message_text = '".$Message."', 
	message_unread = '1', 
	message_universe = '1';";

	mysql_query($SQL);
	mysql_query($SQ);
}

function _rewardPurchase($userId, $pay, $realpay, $received, $credits, $type, $transac, $code, $timer) {

    

// Make userid safe to use in query
$userId = mysql_real_escape_string($userId);
$timer = time();
$INFO1        = mysql_query("SELECT * FROM `uni1_users` WHERE `id` = ".mysql_escape_string($userId).";");   
				
if($INFO1['lp_points'] >= 0)
{$tex = 1;}
elseif($INFO1['lp_points'] >= 125)
{$tex = 2;}
elseif($INFO1['lp_points'] >= 625)
{$tex = 4;}
elseif($INFO1['lp_points'] >= 2500)
{$tex = 6;}
elseif($INFO1['lp_points'] >= 7000)
{$tex = 8;}
   
mysql_query("UPDATE `uni1_users` SET `lp_points` = `lp_points` + ".($mc_gross * $tex).", `antimatter` = `antimatter` + '".$credits."' WHERE `id` = '".mysql_escape_string($userId)."';");
mysql_query("INSERT INTO `uni1_allopass_log` VALUES ('', '".mysql_escape_string($userId)."', '".mysql_escape_string($code)."', '".mysql_escape_string($credits)."','".mysql_escape_string($type)."', '".mysql_escape_string($transac)."', '".mysql_escape_string($pay)."', '".mysql_escape_string($realpay)."', '".mysql_escape_string($received)."',  '".$timer."', '1');");
if($INFO1['ref_id'] != 0){
mysql_query("UPDATE `uni1_users` SET `antimatter` = `antimatter` + ".($INFO['amount'] / 100 * 5)." WHERE `id` = '".$INFO1['ref_id']."';");
SendSimpleMessage($INFO1['ref_id'], '', TIMESTAMP, 4, 'System', 'Anti Matter Order', 'Referal PayPal payment was successful. <br>'.pretty_number($INFO['amount'] / 100 * 5).' anti matter have been credited to your account.');
}        
SendSimpleMessage(mysql_escape_string($userId), '', $timer, 4, 'System', 'Anti Matter Order', 'Allopass payment was successful. <br>'.pretty_number($credits + ($credits / 100 * $text)).' Anti Matter Units have been credited to your account');
				//Admin Message
SendSimpleMessage(1, '', $timer, 4, 'System', 'Anti Matter Order', 'Allopass payment was successful. <br>'.pretty_number($credits + ($credits / 100 * $text)).' Anti Matter Units have been credited to '.$userId.'');
    

}

//-------------------------- Don't change anything below this! ----------------------------- //

$userId = isset($_GET['user_id']) ? $_GET['user_id'] : null;
$pay = isset($_GET['amount']) ? $_GET['amount'] : null;
$realpay = isset($_GET['paid']) ? $_GET['paid'] : null;
$received = isset($_GET['payout_amount']) ? $_GET['payout_amount'] : null;
$credits = isset($_GET['virtual_amount']) ? $_GET['virtual_amount'] : null;
$type = isset($_GET['type']) ? $_GET['type'] : null;
$transac = isset($_GET['transaction_id']) ? $_POST['transaction_id'] : null;
$code = isset($_GET['code']) ? $_GET['code'] : null;
$timer = time();
$result = false;

if (isset($code)) {

        $result = true;
        _rewardPurchase($userId, $pay, $realpay, $received, $credits, $type, $transac, $code, $timer);
    

}

if ($result) {
    echo 'OK';
}

//Close Connection
mysql_close();

?>