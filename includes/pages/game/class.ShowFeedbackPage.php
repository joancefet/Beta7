<?php
class ShowFeedbackPage extends AbstractPage
{	
	public static $requireModule = 0;
	
	function __construct() 
	{
		parent::__construct();
	}
	
	function show(){
	global $USER, $PLANET, $LNG, $UNI, $CONF,$resource,$pricelist;
	
	$this->tplObj->assign_vars(
	array(
    
	)
	);
	$this->display("page.feedback.default.tpl");
	}
}
?>