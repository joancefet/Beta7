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

function ShowPaybonusPage()
{
	global $LNG;
	$CONF	= Config::getAll(NULL, 1);
	if (!empty($_POST))
	{
		$pay_before = array(
			'bonus_button'	=> $CONF['bonus_button'],
			'academy_bonus'	=> $CONF['academy_bonus'],
			'premium'	=> $CONF['premium'],
			'stardust_bonus'	=> $CONF['stardust_bonus'],
			'purchase_bonus'	=> $CONF['purchase_bonus'],
			'purchase_bonus_timer'	=> $CONF['purchase_bonus_timer'],
			'cosmonaute'	=> $CONF['cosmonaute'],
			'fleetconf'	=> $CONF['fleetconf'],
			'new_year'	=> $CONF['new_year']
		);
		
		$purchase_bonus			= $_POST['percent'];
		$academy_bonus			= $_POST['academy_bonus'];
		$bonus_button			= $_POST['bonus_button'];
		$premium			= $_POST['premium'];
		$stardust_bonus			= $_POST['stardust_bonus'];
		$stardust_bonus			= $_POST['stardust_bonus'];
		$fleetconf			= isset($_POST['fleetconf']) && $_POST['fleetconf'] == 'on' ? 1 : 0;
		$cosmonaute			= isset($_POST['cosmonaute']) && $_POST['cosmonaute'] == 'on' ? 1 : 0;
		$new_year			= isset($_POST['new_year']) && $_POST['new_year'] == 'on' ? 1 : 0;
		$purchase_bonus_timer 		= TIMESTAMP + $_POST['days'] * 24 * 60 * 60;

			
		$pay_after = array(
			'bonus_button'	=> $bonus_button,
			'academy_bonus'	=> $academy_bonus,
			'premium'	=> $premium,
			'stardust_bonus'	=> $stardust_bonus,
			'purchase_bonus'	=> $purchase_bonus,
			'purchase_bonus_timer'	=> $purchase_bonus_timer,
			'fleetconf'	=> $fleetconf,
			'cosmonaute'	=> $cosmonaute,
			'new_year'	=> $new_year
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
	'academy_bonus' => $CONF['academy_bonus'],	
	'cosmonaute' => $CONF['cosmonaute'],	
	'new_year' => $CONF['new_year'],	
	'bonus_button' => $CONF['bonus_button'],	
	'fleetconf' => $CONF['fleetconf'],	
	'premium' => $CONF['premium'],	
	'stardust_bonus' => $CONF['stardust_bonus'],	
	'purchase_bonus' => $CONF['purchase_bonus'],	
	'purchase_bonus_timer' => $CONF['purchase_bonus_timer'],	
	'bonus_next_active' => (($CONF['purchase_bonus_timer'] > TIMESTAMP) ? ($CONF['purchase_bonus_timer'] - TIMESTAMP) : 0),
	'bonus_next_active_timer' => (($CONF['purchase_bonus_timer'] > TIMESTAMP) ? date("d.m.Y H:i:s",($CONF['purchase_bonus_timer'])) : 0),
	));
	$template->show('paybonus.tpl');
}

