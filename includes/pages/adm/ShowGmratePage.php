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
 * @info $Id: ShowMultiIPPage.php 2632 2013-03-18 19:05:14Z slaver7 $
 * @link http://2moons.cc/
 */

if (!allowedTo(str_replace(array(dirname(__FILE__), '\\', '/', '.php'), '', __FILE__))) throw new Exception("Permission error!");

function ShowGmratePage()
{
	global $LNG;
	
	$info = $GLOBALS['DATABASE']->query("SELECT DISTINCT u.inqueryID, u.supportID, us.username, u.question_5, u.finished, s.ownerID, s.subject 
										FROM uni1_inquery_feedback as u
										LEFT JOIN ".TICKETS." as s ON s.ticketID = u.supportID 
										LEFT JOIN ".USERS." as us ON s.ownerID = us.id ORDER BY u.finished ASC LIMIT 50										
										;");
										
	$PUSERS	= array();
	while($Data = $GLOBALS['DATABASE']->fetch_array($info)) {
	
	$PUSERS[$Data['username']]	= array();
	$PUSERS[$Data['username']][$Data['id']]	= $Data;
	
	}
	
	
	
	$template	= new template();
	$template->assign_vars(array(
		'multiGroups'	=> $PUSERS,

	));
	$template->show('gmrate.tpl');
}

