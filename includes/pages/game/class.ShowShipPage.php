<?php
class ShowShipPage extends AbstractPage
{	
	
	
	function __construct() 
	{
		parent::__construct();
	}
	
	function show(){
		
		global $USER, $PLANET, $LNG, $UNI, $CONF;
		
		$res = $GLOBALS['DATABASE']->query("SELECT * FROM ".SHIPS." WHERE owner_id = ".$USER['id'].";");
		$playerinfo = $GLOBALS['DATABASE']->fetch_array($res);
		
		$shipavg = get_avg_tech($playerinfo, "ship");

		if ($shipavg < 8)
		   $shiplevel = 0;
		elseif ($shipavg < 12)
		   $shiplevel = 1;
		elseif ($shipavg < 16)
		   $shiplevel = 2;
		elseif ($shipavg < 20)
		   $shiplevel = 3;
		else
		   $shiplevel = 4;
		
		
		
		$manual_22_step = 1;
		if($USER['training'] == 0 && $USER['training_step'] == 22){
		$manual_22_step = 0;
		}
		$this->tplObj->assign_vars(
				array(
                  'manual_22_step' => $manual_22_step,       
				)
		);
		$this->display("page.ship.default.tpl");
	}
}
?>