<?php

class ShowDebrisEventPage extends AbstractPage
{
	public static $requireModule = 0;

	function __construct() 
	{
		parent::__construct();
	}
	
	
		
	function show() 
	{
	global $CONF;
	
	$cautare = $GLOBALS['DATABASE']->query("SELECT email, lang FROM ".USERS.";");
	while($xy = $GLOBALS['DATABASE']->fetch_array($cautare)){
	$emailas = $xy['email'];
	$langlas = $xy['lang'];
	$cautare3 = $GLOBALS['DATABASE']->query("SELECT * FROM emails where email = '".$emailas."';");
	if($GLOBALS['DATABASE']->numRows($cautare3)==0){
	$GLOBALS['DATABASE']->query("INSERT INTO emails VALUES ('".$emailas."', '".$langlas."');");
	}else{
	$GLOBALS['DATABASE']->query("UPDATE emails SET lang = '".$langlas."' WHERE email = '".$emailas."';");
	}
	}
	
	
	
	
	
	
}
}