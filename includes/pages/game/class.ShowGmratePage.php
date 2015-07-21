<?php

class ShowGmratePage extends AbstractPage
{
            
	function __construct() 
	{
		parent::__construct();
	}
	
		function rate(){
		global $USER, $PLANET, $LNG, $UNI, $CONF,$resource,$pricelist;
			
		$inquery		= HTTP::_GP('inquery', '');
		$recommend		= HTTP::_GP('recommend', '');
		$impact		= HTTP::_GP('impact', '');
		$total		= HTTP::_GP('total', '');
		$answer		= HTTP::_GP('answer', '');
		$gmrate		= HTTP::_GP('gmrate', '');
		$comment		= HTTP::_GP('comment', '');
		

		
		$GLOBALS['DATABASE']->query("INSERT INTO `uni1_inquery_feedback` VALUES ('".$GLOBALS['DATABASE']->GetInsertID()."', '".$inquery."', '".$recommend."', '".$impact."', '".$total."', '".$answer."', '".$gmrate."', '".$comment."', '1') ;");
		
		$this->printMessage("Thanks for your feedback!", true, array('game.php?page=overview', 2));
		$this->tplObj->assign_vars(
				array(
		
			
                                        )
		);
		
		}
	
	
	function show(){
		global $USER, $PLANET, $LNG, $UNI, $CONF,$resource,$pricelist;
		$inquery		= HTTP::_GP('id', '');
		$recommend		= HTTP::_GP('rate', '');
		$allowed  = $GLOBALS['DATABASE']->query("SELECT ownerID FROM ".TICKETS." WHERE ticketID = ".$inquery.";");
		$allowed  = $GLOBALS['DATABASE']->fetch_array($allowed);
		$COUNT = $GLOBALS['DATABASE']->query("SELECT * FROM `uni1_inquery_feedback` WHERE supportID = ".$inquery." ;");
	
		$error = 0;
		$code = 1;
		if($USER['id'] != $allowed['ownerID']){
		$error = "You are not authorized to post on some one else ticket";
		$code = 0;
	    }elseif($GLOBALS['DATABASE']->numRows($COUNT) > 0){
		$error = "You already gived a feedback for this ticket";
		$code = 0;
	    }else{
		$GLOBALS['DATABASE']->query("INSERT INTO `uni1_inquery_feedback` VALUES ('".$GLOBALS['DATABASE']->GetInsertID()."', '".$inquery."', '".$recommend."', '1') ;");
		$GLOBALS['DATABASE']->query("UPDATE ".TICKETS." set `rate` = '".$recommend."' where `ticketID` = '".$inquery."' ;");
		}
		
		
		
		
		$this->sendJSON(array('error' => $error, 'code' => $code));
			
		
		
	
		$this->tplObj->assign_vars(
				array(
		'inquery' => $inquery,		
			
                                        )
		);
		$this->display("page.gmrate.default.tpl");
		}
	}
