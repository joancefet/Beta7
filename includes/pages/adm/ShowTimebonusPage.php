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

function ShowTimebonusPage()
{
	global $LNG;
	$CONF	= Config::getAll(NULL, 1);
	if (!empty($_POST))
	{
		$pay_before = array(
			'timeReward'	=> $CONF['timeReward'],
			'timeRewardFrom'	=> $CONF['timeRewardFrom'],
			'timeRewardTo'	=> $CONF['timeRewardTo'],
		);
		
		$timeReward			= $_POST['timeReward'];
		$timeRewardFrom			= $_POST['timeRewardFrom'];
		$timeRewardTo			= $_POST['timeRewardTo'];

			
		$pay_after = array(
			'timeReward'	=> $timeReward,
			'timeRewardFrom'	=> $timeRewardFrom,
			'timeRewardTo'	=> $timeRewardTo,

		);
		
		Config::update($pay_after, 1);
		$CONF	= Config::getAll(NULL, 1);
		
		$LOG = new Log(3);
		$LOG->target = 1;
		$LOG->old = $pay_before;
		$LOG->new = $pay_after;
		$LOG->save();
		
	}
				
	
	
	
	$template	= new template();
	$template->assign_vars(array(
	'timeReward' => $CONF['timeReward'],	
	'timeRewardFrom' => $CONF['timeRewardFrom'],	
	'timeRewardTo' => $CONF['timeRewardTo'],	
	));
	$template->show('timebonus.tpl');
}

