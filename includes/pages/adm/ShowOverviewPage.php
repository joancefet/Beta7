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
 * @info $Id: ShowOverviewPage.php 2640 2013-03-23 19:23:26Z slaver7 $
 * @link http://2moons.cc/
 */

function ShowOverviewPage()
{
	global $LNG, $USER, $UNI, $CONF;
	
	$Message	= array();

	if ($USER['authlevel'] >= AUTH_ADM)
	{
		if(file_exists(ROOT_PATH.'update.php'))
			$Message[]	= sprintf($LNG['ow_file_detected'], 'update.php');
			
		if(file_exists(ROOT_PATH.'webinstall.php'))
			$Message[]	= sprintf($LNG['ow_file_detected'], 'webinstall.php');
			
		if(file_exists('includes/ENABLE_INSTALL_TOOL'))
			$Message[]	= sprintf($LNG['ow_file_detected'], 'includes/ENABLE_INSTALL_TOOL');
					
		if(!is_writable(ROOT_PATH.'cache'))
			$Message[]	= sprintf($LNG['ow_dir_not_writable'], 'cache');
			
		if(!is_writable('includes'))
			$Message[]	= sprintf($LNG['ow_dir_not_writable'], 'includes');
	}
	
	$getch = $GLOBALS['DATABASE']->query("SELECT * FROM `uni1_ticket`");
	$total_ticket = $GLOBALS['DATABASE']->numRows($getch);
	
	$open_tickets = $GLOBALS['DATABASE']->query("SELECT * FROM `uni1_ticket` WHERE status = '0'");
	$open_tickets = $GLOBALS['DATABASE']->numRows($open_tickets);
	
	$open_ratio = $GLOBALS['DATABASE']->query("SELECT * FROM `uni1_inquery_feedback` WHERE finished = '1'");
	$open_ratio = $GLOBALS['DATABASE']->numRows($open_ratio);
	
	$online_users = $GLOBALS['DATABASE']->query("SELECT * FROM `uni1_users` WHERE onlinetime > '".(TIMESTAMP - 15 * 60)."'");
	$online_users = $GLOBALS['DATABASE']->numRows($online_users);
	$prem_users = $GLOBALS['DATABASE']->query("SELECT * FROM `uni1_users` WHERE premium_reward_days > '".TIMESTAMP."'");
	$prem_users = $GLOBALS['DATABASE']->numRows($prem_users);
	
	$locked_cron = $GLOBALS['DATABASE']->query("SELECT * FROM `uni1_cronjobs` WHERE `lock` IS NOT NULL;");
	$locked_cron = $GLOBALS['DATABASE']->numRows($locked_cron);
	
	$multi_declare = $GLOBALS['DATABASE']->query("SELECT * FROM `uni1_multi_declaration` WHERE `finished` = '1';");
	$multi_declare = $GLOBALS['DATABASE']->numRows($multi_declare);
	$total_declare = $GLOBALS['DATABASE']->query("SELECT * FROM `uni1_multi_declaration`;");
	$total_declare = $GLOBALS['DATABASE']->numRows($total_declare);
	
	$complaints = $GLOBALS['DATABASE']->query("SELECT * FROM `uni1_complaints`");
	$complaints = $GLOBALS['DATABASE']->numRows($complaints);
	$complaintsb = $GLOBALS['DATABASE']->query("SELECT * FROM `uni1_complaints` WHERE finished = '1'");
	$complaintsb = $GLOBALS['DATABASE']->numRows($complaintsb);
	
	
	$goog = $GLOBALS['DATABASE']->query("SELECT * FROM `uni1_inquery_feedback`");
	$total_r = $GLOBALS['DATABASE']->numRows($goog);
	if($total_r == 0){
	$total_r = 1;
	}
	
	$total_ratio  = 0;
	$total_ratio = 0;
	
	
	$template	= new template();

	
	
	$AvailableUnis[Config::get('uni')]	= $CONF['uni_name'].' (ID: '.$CONF['uni'].')';
	$Query	= $GLOBALS['DATABASE']->query("SELECT `uni`, `uni_name` FROM ".CONFIG." WHERE `uni` != '".$UNI."' ORDER BY `uni` DESC;");
	while($Unis	= $GLOBALS['DATABASE']->fetch_array($Query)) {
		$AvailableUnis[$Unis['uni']]	= $Unis['uni_name'].' (ID: '.$Unis['uni'].')';
	}
	ksort($AvailableUnis);
	$template->assign_vars(array(	
		'complaintsb'			=> pretty_number($complaintsb),
		'multi_declare'			=> pretty_number($multi_declare),
		'total_declare'			=> pretty_number($total_declare),
		'total_users'			=> pretty_number($CONF['users_amount']),
		'total_ticket'			=> pretty_number($total_ticket),
		'total_ratio'			=> pretty_number($total_ratio),
		'open_tickets'			=> pretty_number($open_tickets),
		'prem_users'			=> pretty_number($prem_users),
		'online_users'			=> pretty_number($online_users),
		'open_ratio'			=> pretty_number($open_ratio),
		'locked_cron'			=> pretty_number($locked_cron),
		'complaints'			=> pretty_number($complaints),
		'ow_none'			=> $LNG['ow_none'],
		'ow_overview'		=> $LNG['ow_overview'],
		'ow_welcome_text'	=> $LNG['ow_welcome_text'],
		'ow_credits'		=> $LNG['ow_credits'],
		'ow_special_thanks'	=> $LNG['ow_special_thanks'],
		'ow_translator'		=> $LNG['ow_translator'],
		'ow_proyect_leader'	=> $LNG['ow_proyect_leader'],
		'ow_support'		=> $LNG['ow_support'],
		'ow_title'			=> $LNG['ow_title'],
		'ow_forum'			=> $LNG['ow_forum'],
		'ow_donate'			=> $LNG['ow_donate'],
		'Messages'			=> $Message,
		'date'				=> date('m\_Y', TIMESTAMP),
		'sid'					=> session_id(),
		'AvailableUnis'			=> $AvailableUnis,
	));
	
	$template->show('OverviewBody.tpl');
}
