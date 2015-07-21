<?php

class ShowMultiPage extends AbstractPage
{
            
	function __construct() 
	{
		parent::__construct();
	}
	function report(){
	global $USER, $PLANET, $LNG, $UNI, $CONF,$resource,$pricelist;
	
	$multi		= HTTP::_GP('multi', '');
	$multia 	= HTTP::_GP('multia', '');
	$text		= HTTP::_GP('text', '');
	
	
	$GLOBALS['DATABASE']->query("INSERT INTO `uni1_multi_declaration` VALUES ('".$GLOBALS['DATABASE']->GetInsertID()."', '".$multi."', '".$multia."', '".$text."', '".TIMESTAMP."', '1') ;");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET multi_report = '1' WHERE `username` = '".$multi."';");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET multi_report = '1' WHERE `username` = '".$multia."';");
	$this->printMessage("The multi account has been declared!", true, array('game.php?page=overview', 2));
	$this->tplObj->assign_vars(
	array(
		
			
    ));
	}
	
	
	function show(){
	global $USER, $PLANET, $LNG, $UNI, $CONF,$resource,$pricelist;
	
	$multi = $GLOBALS['DATABASE']->query("SELECT username FROM `uni1_users` WHERE (user_lastip = '".$USER['user_lastip']."' AND id != '".$USER['id']."' AND multi_report = '0') OR (ip_at_reg = '".$USER['ip_at_reg']."' AND id != '".$USER['id']."' AND multi_report = '0') ORDER BY id ASC LIMIT 1 ");
	$multi = $GLOBALS['DATABASE']->fetch_array($multi);
	
	
	$this->tplObj->assign_vars(
	array(
	'username' => $USER['username'],
	'multi' => $multi['username'],
	));
	$this->display("page.multi.default.tpl");	
	}
}