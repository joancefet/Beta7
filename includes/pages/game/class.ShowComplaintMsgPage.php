<?php

/**
 *  2Moons
 *  Copyright (C) 2012 Jan Kröpke
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package 2Moons
 * @author Jan Kröpke <info@2moons.cc>
 * @copyright 2012 Jan Kröpke <info@2moons.cc>
 * @license http://www.gnu.org/licenses/gpl.html GNU GPLv3 License
 * @version 1.7.3 (2013-05-19)
 * @info $Id: class.ShowBuddyListPage.php 2632 2013-03-18 19:05:14Z slaver7 $
 * @link http://2moons.cc/
 */

class ShowComplaintMsgPage extends AbstractPage
{

	function __construct() 
	{
		parent::__construct();
	}

	
	
	function send()
	{
		global $USER, $UNI, $LNG;
		$this->setWindow('popup');
		$this->initTemplate();
		
		$id		= HTTP::_GP('id', '');
		$type_compl		= HTTP::_GP('type_compl', '1');
		$comment		= HTTP::_GP('comment', '');
		

		$exists	= $GLOBALS['DATABASE']->getFirstCell("SELECT COUNT(*) FROM uni1_messages WHERE message_id = '".$id."';");
		$complPM = $GLOBALS['DATABASE']->query("SELECT message_sender, message_text from `uni1_messages` where `message_id` = '".$id."' ;");
		$complPM  = $GLOBALS['DATABASE']->fetch_array($complPM);
		$userID = $GLOBALS['DATABASE']->query("SELECT username, galaxy, system, planet from `uni1_users` where `id` = '".$complPM['message_sender']."' ;");
		$userID  = $GLOBALS['DATABASE']->fetch_array($userID);
		
		
		if($exists != 0)
		{
		$GLOBALS['DATABASE']->query("INSERT INTO `uni1_complaints` VALUES ('".$GLOBALS['DATABASE']->GetInsertID()."', '".$complPM['message_text']."', '".$userID['username']."', '".$type_compl."', '".$comment."', '".$USER['username']."', '".TIMESTAMP."', '1') ;");
		
	}
$this->printMessage("Message have been reported");
	
}
	
	function show()
	{
		global $USER, $PLANET, $LNG, $UNI;
		
		
		
		$this->setWindow('popup');
		$this->initTemplate();
		
		$messageID 	= HTTP::_GP('id', 0);
		$exists	= $GLOBALS['DATABASE']->getFirstCell("SELECT COUNT(*) FROM uni1_messages WHERE message_id = '".$messageID."';");
		
		if($exists == 0)
		{
		$this->printMessage("Message does not exist!", true, array('game.php?page=overview', 3));
		}else{
		$complPM = $GLOBALS['DATABASE']->query("SELECT message_sender, message_text from `uni1_messages` where `message_id` = '".$messageID."' ;");
		$complPM  = $GLOBALS['DATABASE']->fetch_array($complPM);
		$userID = $GLOBALS['DATABASE']->query("SELECT username, galaxy, system, planet from `uni1_users` where `id` = '".$complPM['message_sender']."' ;");
		$userID  = $GLOBALS['DATABASE']->fetch_array($userID);
		
	
		$this->tplObj->assign_vars(array(	
		'messages_compl' => $complPM['message_text'],
		'messages_user' => $userID['username'],
		'messages_gal' => $userID['galaxy'],
		'messages_sys' => $userID['system'],
		'messages_pla' => $userID['planet'],
		'messageID' => $messageID,
		));
		
		$this->display('page.complaints.default.tpl');
		}
	}
}