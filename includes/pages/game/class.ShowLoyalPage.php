<?php
class ShowLoyalPage extends AbstractPage
{	
	public static $requireModule = 0;
	
	function __construct() 
	{
		parent::__construct();
	}
	
	function show()
	{
		global $CONF, $LNG, $PLANET, $USER, $db, $resource, $UNI;

		$amai = $USER['lp_points'];

                if($USER['lp_points'] == 0)
                $text = 'NORMAL PLAYER';
				if($USER['lp_points'] > 0)
                $text = 'BRONZE PLAYER';
				if($USER['lp_points'] >= 125)
                $text = 'SILVER PLAYER';
				if($USER['lp_points'] >= 625)
                $text = 'GOLD PLAYER';
				if($USER['lp_points'] >= 2500)
                $text = 'PLATINIUM PLAYER';
				if($USER['lp_points'] >= 7000)
                $text = 'DIAMOND PLAYER';

$this->tplObj->assign_vars(array( 
'lol' => (($USER['lp_points'] > 0) ? 'You have in total '.$amai.' Loyality Points' :  'You need to make at least 1 donation to receive Bronze next rank'),
'text' => $text,

	));

$this->display('loyal_temp.tpl');

	}
}
?>