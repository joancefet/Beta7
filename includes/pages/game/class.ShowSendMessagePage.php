<?php
class ShowSendMessagePage extends AbstractPage
{	
	public static $requireModule = 0;
	
	function __construct() 
	{
		parent::__construct();
	}
	
	function show()
	{
            
            global $USER, $PLANET, $LNG, $UNI, $CONF,$resource,$pricelist, $UNI;
            
			
			if($USER['authlevel'] < 3 ){
		$this->printMessage("your dont have enough permissions!", true, array('game.php?page=Overview', 2));
		die();
	}
			
            if($_POST){
			$mode   = HTTP::_GP('textArea', '');
			$mode1   = HTTP::_GP('subject', '');
			$mode2   = HTTP::_GP('type', '');
			$news   = HTTP::_GP('news', 0);
			
			
                        switch($mode2){
			
			
		
		case '1':
		require_once('includes/functions/BBCode.php');
		$pmMessage 	= bbcode($mode);
		$USERS		= $GLOBALS['DATABASE']->query("SELECT `id`, `username` FROM ".USERS." WHERE `universe` = ".$UNI."");
		while($UserData = $GLOBALS['DATABASE']->fetch_array($USERS)){
		$sendMessage = str_replace('{USERNAME}', $UserData['username'], $pmMessage);
		$sendMessage = '<span class="admin">'.$sendMessage.'</span>';
		SendSimpleMessage($UserData['id'], $USER['id'], TIMESTAMP, 50, 'Game Info', $mode1, $sendMessage);
		} 
		if($news == 1){
		$GLOBALS['DATABASE']->query("INSERT INTO ".NEWS." (`id` ,`user` ,`date` ,`title` ,`text`, `catID`) VALUES ( NULL , 'Thisishowwedoit', '".TIMESTAMP."', '".$mode1."', '".$pmMessage."', '4') ;");
		}

        
		$this->printMessage("Message Send!", true, array('game.php?page=SendMessage', 2));
		break;
        case '2':
		require_once('includes/functions/BBCode.php');
		require 'includes/classes/Mail.class.php';
		$pmMessage 	= bbcode($mode);
		$USERS		= $GLOBALS['DATABASE']->query("SELECT `email` FROM emails");
		while($UserData = $GLOBALS['DATABASE']->fetch_array($USERS)){
		
		
		// Dans le cas où nos lignes comportent plus de 70 caractères, nous les coupons en utilisant wordwrap()
		$to = $UserData['email'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= 'From: no-reply@dark-space.org' . "\r\n";
		$headers .= 'Reply-To: no-reply@dark-space.org' . "\r\n";
		mail($to, $mode1, $pmMessage, $headers);
		} 
		if($news == 1){
		$GLOBALS['DATABASE']->query("INSERT INTO ".NEWS." (`id` ,`user` ,`date` ,`title` ,`text`, `catID`) VALUES ( NULL , 'Thisishowwedoit', '".TIMESTAMP."', '".$mode1."', '".$pmMessage."', '4') ;");
		}
		$this->printMessage("Mail Send!", true, array('game.php?page=SendMessage', 2));
		 break;
		}
		}
		
		
 
		$this->tplObj->assign_vars(array(
			
			
		));
		$this->display('page.sendmes.default.tpl');
	}
}
		

?>