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

function ShowFleetsConfPage()
{
	global $LNG;
	$CONF	= Config::getAll(NULL, 1);
	if (!empty($_POST))
	{
		$pay_before = array(
			'fleetconf'	=> $CONF['fleetconf']
		);
		$fleetconf 		= TIMESTAMP + $_POST['days'] * 24 * 60 * 60;

			
		$pay_after = array(
			'fleetconf'	=> $fleetconf
		);
		
		Config::update($pay_after, 1);
		$CONF	= Config::getAll(NULL, 1);
		
		$LOG = new Log(3);
		$LOG->target = 1;
		$LOG->old = $pay_before;
		$LOG->new = $pay_after;
		$LOG->save();
		
		require_once('includes/functions/BBCode.php');
				$Time    	= TIMESTAMP;
				
				
				$Message    	= '<span class="admin">All promotional fleets and defence have been unlocked until '.date("d.m.Y - H:i:s",($CONF['fleetconf'])).'. - <a href="?page=shipyard&mode=fleet">Fleet</a> - <a href="?page=shipyard&mode=defence">Defence</a>' ;
				
				
				$From    	= '<span class="admin">"Antimatter"</span>';
				$pmSubject 	= '<span class="admin">"Purchase Bonus"</span>';
				$pmMessage 	= '<span class="admin">'.bbcode($Message).'</span>';
				$USERS		= $GLOBALS['DATABASE']->query("SELECT `id`, `username` FROM ".USERS." WHERE `universe` = '1';");
				while($UserData = $GLOBALS['DATABASE']->fetch_array($USERS))
				{
					$sendMessage = str_replace('{USERNAME}', $UserData['username'], $pmMessage);
					SendSimpleMessage($UserData['id'], $USER['id'], TIMESTAMP, 50, $From, $pmSubject, $sendMessage);
				}

	}
				
	
	
	
	$template	= new template();
	$template->assign_vars(array(	
	'fleetconf' => $CONF['fleetconf'],	
	'bonus_next_active' => (($CONF['fleetconf'] > TIMESTAMP) ? ($CONF['fleetconf'] - TIMESTAMP) : 0),
	'bonus_next_active_timer' => (($CONF['fleetconf'] > TIMESTAMP) ? date("d.m.Y H:i:s",($CONF['fleetconf'])) : 0),
	));
	$template->show('fleetconf.tpl');
}

