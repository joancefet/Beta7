<?php
class ShowUseratmlogsPage extends AbstractPage
{	
	public static $requireModule = 0;
	
	function __construct() 
	{
		parent::__construct();
	}
	
	function show()
	{
		global $CONF, $LNG, $PLANET, $USER, $db, $resource, $UNI;

	$this->tplObj->loadscript("logsAtm.js");
	$this->tplObj->assign_vars(array( 

	
	));


	$this->display('page.userAtmLogs.tpl');

	}
}
?>