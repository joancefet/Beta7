<?php
class ShowRecupflottePage extends AbstractPage
{	
	
	
	function __construct() 
	{
		parent::__construct();
	}
	
	function show(){
		
		global $USER;
		
		
		
	$this->tplObj->assign_vars(
				array(
				)
		);
		$this->display("page.recupflotte.default.tpl");
	}
}
?>