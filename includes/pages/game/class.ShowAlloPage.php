<?php
class ShowAlloPage extends AbstractPage
{	
	public static $requireModule = 0;
	
	function __construct() 
	{
		parent::__construct();
	}
	
	function show()
	{
		global $CONF, $LNG, $PLANET, $USER, $db, $resource, $UNI;

		

		
		
$code = isset($_GET['code']) ? $_GET['code'] : null;
$quer = $GLOBALS['DATABASE']->query("SELECT *FROM `uni1_allopass_log` where `code` = '".$code."' ;");

if($GLOBALS['DATABASE']->numRows($quer) < 1){
$this->printMessage("We are proceeding the payment, do not quit this page. <br> you wil be redirected in 5 seconds", true, array('game.php?page=allo&code='.$code.'', 5));
			die();
}

$query = $GLOBALS['DATABASE']->query("SELECT transac, date, orderid, reference_paid, credits FROM `uni1_allopass_log` where `code` = '".$code."' ;");
$query  = $GLOBALS['DATABASE']->fetch_array($query);

$INFO1        = $GLOBALS['DATABASE']->uniquequery("SELECT * FROM `uni1_users` WHERE `id` = ".$USER['id'].";");
				
		
				if($INFO1['lp_points'] == 0)
				$text = 0;
				if($INFO1['lp_points'] > 0)
                $text = 0;
				if($INFO1['lp_points'] >= 125)
                $text = 5;
				if($INFO1['lp_points'] >= 625)
                $text = 10;
				if($INFO1['lp_points'] >= 2500)
                $text = 15;
				if($INFO1['lp_points'] >= 7000)
                $text = 20;

	$this->tplObj->assign_vars(array( 
'transac' => $query['transac'],
'code' => $code,
'date' => str_replace(' ', '&nbsp;', _date($LNG['php_tdformat'], $query['date']), $USER['timezone']),
'orderid' => $query['orderid'],
'total' => $query['reference_paid'],
'credits' => pretty_number($query['credits'] + $query['credits'] / 100 * $text),
	
	));


	$this->display('page.allo.order.tpl');

	}
}
?>