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

class ShowEnnemiesListPage extends AbstractPage
{
	public static $requireModule = MODULE_BUDDYLIST;

	function __construct() 
	{
		parent::__construct();
	}
	
	
	
	
	function delete()
	{
		global $USER, $LNG;
		
		$id	= HTTP::_GP('id', 0);
		
		$isAllowed = $GLOBALS['DATABASE']->getFirstCell("SELECT COUNT(*) FROM uni1_ennemies WHERE id = ".$id." AND sender = ".$USER['id'].";");
		
		if($isAllowed)
		{
		$GLOBALS['DATABASE']->query("DELETE FROM uni1_ennemies WHERE id = '".$id."';");
		$this->printMessage("Ennemie Deleted");
		}	
			
		$this->redirectTo("game.php?page=EnnemiesList");
	}
	function send()
	{
		global $USER, $UNI, $LNG;
		
		
		$id		= HTTP::_GP('id', 0);
		$test 	= $GLOBALS['DATABASE']->getFirstCell("SELECT COUNT(*) FROM uni1_ennemies WHERE (sender = ".$USER['id']." AND owner = ".$id.");");
		
		if($id == $USER['id'])
		{
			$this->printMessage($LNG['bu_cannot_request_yourself']);
		}
		
		$exists	= $GLOBALS['DATABASE']->getFirstCell("SELECT COUNT(*) FROM uni1_ennemies WHERE (sender = ".$USER['id']." AND owner = ".$id.");");
		$existsb	= $GLOBALS['DATABASE']->getFirstCell("SELECT COUNT(*) FROM ".BUDDY." WHERE (sender = ".$USER['id']." AND owner = ".$id.") OR (owner = ".$USER['id']." AND sender = ".$id.");");
		
		if($existsb != 0)
		{
			$this->printMessage('Delete the player first from your buddy list');
		}
		
		if($exists != 0)
		{
			$this->printMessage($LNG['bu_request_exists']);
		}
		$validationID	= $GLOBALS['DATABASE']->GetInsertID();
		$GLOBALS['DATABASE']->query("INSERT INTO uni1_ennemies SET 
		id = ".$validationID.",
		sender = ".$USER['id'].", 
		owner = ".$id.", 
		universe = ".$UNI.";");
		

		$this->printMessage("Ennemie Added");
	}
	
	 
	 
	function show()
	{
		global $USER, $PLANET, $LNG, $UNI;
		
		
		
		 
		
		$BuddyListResult	= $GLOBALS['DATABASE']->query("SELECT 
		a.sender, a.id as buddyid, 
		b.id, b.username, b.onlinetime, b.galaxy, b.system, b.planet, b.ally_id,
		c.ally_name
		FROM (uni1_ennemies as a, ".USERS." as b) 
		LEFT JOIN ".ALLIANCE." as c ON c.id = b.ally_id
		
		WHERE 
		(a.sender = ".$USER['id']." AND a.owner = b.id) ;");
		
				
		
		$myBuddyList		= array();		
				
		while($BuddyList = $GLOBALS['DATABASE']->fetch_array($BuddyListResult))
		{
			
				$myBuddyList[$BuddyList['buddyid']]	= $BuddyList;
			
		}
		
		$GLOBALS['DATABASE']->free_result($BuddyListResult);
	
		$this->tplObj->assign_vars(array(	
			'myBuddyList'		=> $myBuddyList,
			
		));
		
		$this->display('page.ennemies.defaults.tpl');
	}
}