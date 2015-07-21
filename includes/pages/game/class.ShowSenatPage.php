<?php
class ShowSenatPage extends AbstractPage
{	
	
	
	function __construct() 
	{
		parent::__construct();
	}
	
	function show(){
		
		global $USER;
		
		$manual_22_step = 1;
		if($USER['training'] == 0 && $USER['training_step'] == 22){
		$manual_22_step = 0;
		}
	$this->tplObj->assign_vars(
				array(
                  'manual_22_step' => $manual_22_step,       
				)
		);
		$this->display("page.senat.default.tpl");
	}
}
?>