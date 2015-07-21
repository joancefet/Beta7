<?php

class ShowBlockPage extends AbstractPage
{
        
	function __construct() 
	{
		parent::__construct();
	}
	
	       
	
	function add(){
		global $USER, $PLANET, $LNG, $UNI, $CONF,$resource,$pricelist;

$mode   = HTTP::_GP('blid', '');	
$GLOBALS['DATABASE']->query("INSERT INTO `uni1_messages_blacklist` VALUES ('".$GLOBALS['DATABASE']->GetInsertID()."',".$USER['id'].",'".$mode."') ;");
$this->printMessage("This player cant send you anymore private messages", true, array('?page=statistics', 3));
                die();
              
		$this->tplObj->assign_vars(
				array(

                                 )
		);
	}
}
