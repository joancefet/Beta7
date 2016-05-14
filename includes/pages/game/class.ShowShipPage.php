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