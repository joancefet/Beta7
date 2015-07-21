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
 * @info $Id: ShowBanPage.php 2632 2013-03-18 19:05:14Z slaver7 $
 * @link http://2moons.cc/
 */

if (!allowedTo(str_replace(array(dirname(__FILE__), '\\', '/', '.php'), '', __FILE__))) throw new Exception("Permission error!");

function ShowBanmessagePage() 
{
	global $LNG, $USER;
	
	$ORDER = $_GET['order'] == 'id' ? "id" : "username";

	if ($_GET['view'] == 'bana')
		$WHEREBANA	= "AND `message_ban` = '1'";

	$UserList		= $GLOBALS['DATABASE']->query("SELECT `username`, `id`, `message_ban` FROM ".USERS." WHERE `universe` = '1' ".$WHEREBANA." ORDER BY ".$ORDER." ASC;");

	$UserSelect	= array('List' => '', 'ListBan' => '');
	
	$Users	=	0;
	while ($a = $GLOBALS['DATABASE']->fetch_array($UserList))
	{
		$UserSelect['List']	.=	'<option value="'.$a['username'].'">'.$a['username'].'&nbsp;&nbsp;(ID:&nbsp;'.$a['id'].')'.(($a['bana']	==	'1') ? $LNG['bo_characters_suus'] : '').'</option>';
		$Users++;
	}

	$GLOBALS['DATABASE']->free_result($UserList);
	
	$ORDER2 = $_GET['order2'] == 'id' ? "id" : "username";
		
	$Banneds		=0;
	$UserListBan	= $GLOBALS['DATABASE']->query("SELECT `username`, `id` FROM ".USERS." WHERE `message_ban` = '1' AND `universe` = '1' ORDER BY ".$ORDER2." ASC;");
	while ($b = $GLOBALS['DATABASE']->fetch_array($UserListBan))
	{
		$UserSelect['ListBan']	.=	'<option value="'.$b['username'].'">'.$b['username'].'&nbsp;&nbsp;(ID:&nbsp;'.$b['id'].')</option>';
		$Banneds++;
	}

	$GLOBALS['DATABASE']->free_result($UserListBan);

	$template	= new template();
	$template->loadscript('filterlist.js');


	if(isset($_POST['panel']))
	{
		$Name					= HTTP::_GP('ban_name', '', true);
		$BANUSER				= $GLOBALS['DATABASE']->getFirstRow("SELECT b.theme, b.longer, u.id, u.urlaubs_modus, u.timezone, u.message_ban_time, u.username, u.email FROM ".USERS." as u LEFT JOIN uni1_message_banned as b ON u.`username` = b.`who` WHERE u.`username` = '".$GLOBALS['DATABASE']->sql_escape($Name)."' AND u.`universe` = '1';");
			
		if ($BANUSER['message_ban_time'] <= TIMESTAMP)
		{
			$title			= $LNG['bo_bbb_title_1'];
			$changedate		= $LNG['bo_bbb_title_2'];
			$changedate_advert		= '';
			$reas					= '';
			$timesus				= '';
		}
		else
		{
			$title			= $LNG['bo_bbb_title_3'];
			$changedate		= $LNG['bo_bbb_title_6'];
			$changedate_advert	=	'<td class="c" width="18px"><img src="./styles/resource/images/admin/i.gif" class="tooltip" data-tooltip-content="'.$LNG['bo_bbb_title_4'].'"></td>';
				
			$reas			= $BANUSER['theme'];
			$timesus		=	
				"<tr>
					<th>".$LNG['bo_bbb_title_5']."</th>
					<th height=25 colspan=2>".date($LNG['php_tdformat'], $BANUSER['longer'])."</th>
				</tr>";
		}
		
		
		$vacation	= ($BANUSER['urlaubs_modus'] == 1) ? true : false;
		
		$template->assign_vars(array(	
			'name'				=> $Name,
			'bantitle'			=> $title,
			'changedate'		=> $changedate,
			'reas'				=> $reas,
			'changedate_advert'	=> $changedate_advert,
			'timesus'			=> $timesus,
			'vacation'			=> $vacation,
		));
	} elseif (isset($_POST['bannow']) && $BANUSER['id'] != 1) {
		$Name              = HTTP::_GP('ban_name', '' ,true);
		$reas              = HTTP::_GP('why', '' ,true);
		$days              = HTTP::_GP('days', 0);
		$hour              = HTTP::_GP('hour', 0);
		$mins              = HTTP::_GP('mins', 0);
		$secs              = HTTP::_GP('secs', 0);
		$admin             = $USER['username'];
		$mail              = $USER['email'];
		$BanTime           = $days * 86400 + $hour * 3600 + $mins * 60 + $secs;

		if ($BANUSER['longer'] > TIMESTAMP)
			$BanTime          += ($BANUSER['longer'] - TIMESTAMP);
		
		if (isset($_POST['permanent'])) {
			$BannedUntil = 2147483647;
		} else {
			$BannedUntil = ($BanTime + TIMESTAMP) < TIMESTAMP ? TIMESTAMP : TIMESTAMP + $BanTime;
		}
		
		if ($BANUSER['message_ban_time'] > TIMESTAMP)
		{
			$SQL      = "UPDATE uni1_message_banned SET ";
			$SQL     .= "`who` = '". $Name ."', ";
			$SQL     .= "`theme` = '". $reas ."', ";
			$SQL     .= "`time` = '".TIMESTAMP."', ";
			$SQL     .= "`longer` = '". $BannedUntil ."', ";
			$SQL     .= "`author` = '". $admin ."', ";
			$SQL     .= "`email` = '". $mail ."' ";
			$SQL     .= "WHERE `who2` = '".$Name."' AND `universe` = '1';";
			$GLOBALS['DATABASE']->query($SQL);
		} else {
			$SQL      = "INSERT INTO uni1_message_banned SET ";
			$SQL     .= "`who` = '". $Name ."', ";
			$SQL     .= "`theme` = '". $reas ."', ";
			$SQL     .= "`time` = '".TIMESTAMP."', ";
			$SQL     .= "`longer` = '". $BannedUntil ."', ";
			$SQL     .= "`author` = '". $admin ."', ";
			$SQL     .= "`universe` = '1', ";
			$SQL     .= "`email` = '". $mail ."';";
			$GLOBALS['DATABASE']->query($SQL);
		}

		$SQL     = "UPDATE ".USERS." SET ";
		$SQL    .= "`message_ban` = '1', ";
		$SQL    .= "`message_ban_time` = '". $BannedUntil ."', ";
		$SQL	.= isset($_POST['vacat']) ? "`urlaubs_modus` = '1'" : "`urlaubs_modus` = '0'";
		$SQL    .= "WHERE ";
		$SQL    .= "`username` = '". $Name ."' AND `universe` = '1';";
		
		
		$GLOVERS		= $GLOBALS['DATABASE']->query("SELECT `email`, `username` FROM ".USERS." WHERE `username` = '".$GLOBALS['DATABASE']->sql_escape($Name)."' AND `universe` = '1';");
		while($UserData = $GLOBALS['DATABASE']->fetch_array($GLOVERS)){
		
		
		$timeofban = _date($LNG['php_tdformat'], $BannedUntil, $UserData['timezone']);
		require_once('includes/functions/BBCode.php');
		require 'includes/classes/Mail.class.php';
		
		if(isset($_POST['permanent'])){
		$pmMessage 	= "Hello ".$UserData['username'].",<br> Your eris-universe.net account is permanently blocked for sending private messages for the following reason: ".$reas.".<br> You might still open a forum thread if you want to resolve your ban issue: <a href=http://eris-universe.net/forum/index.php?/forum/10-banned-accounts/>Click here</a><br><br> Regards<br>Eris-Universe Team.";
		}else{
		$pmMessage 	= "Hello ".$UserData['username'].",<br> Your eris-universe.net account is blocked for sending private messages for the following reason: ".$reas." until '".$timeofban."'.<br> You might still open a forum thread if you want to resolve your ban issue: <a href=http://eris-universe.net/forum/index.php?/forum/10-banned-accounts/>Click here</a><br><br> Regards<br>Eris-Universe Team.";
		}
		$sendMessage = str_replace('{USERNAME}', $UserData['username'], $pmMessage);
		
		// Dans le cas où nos lignes comportent plus de 70 caractères, nous les coupons en utilisant wordwrap()
		$to = $UserData['email'];
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= 'From: eris-universe-banned@gmail.com' . "\r\n";
		$headers .= 'Reply-To: eris-universe-banned@gmail.com' . "\r\n";
		mail($to, 'Your account is suspended', $sendMessage, $headers);
		
		}
		$GLOBALS['DATABASE']->query($SQL);
		

		

		$template->message($LNG['bo_the_player'].$Name.$LNG['bo_banned'], '?page=banmessage');
		exit;
	} elseif(isset($_POST['unban_name'])) {
		$Name	= HTTP::_GP('unban_name', '', true);
		$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET message_ban = '0', message_ban_time = '0' WHERE username = '".$GLOBALS['DATABASE']->sql_escape($Name)."' AND `universe` = '1';");
		#DELETE FROM ".BANNED." WHERE who = '".$GLOBALS['DATABASE']->sql_escape($Name)."' AND `universe` = '1';
		$template->message($LNG['bo_the_player2'].$Name.$LNG['bo_unbanned'], '?page=banmessage');
		exit;
	}

	$template->assign_vars(array(	
		'UserSelect'		=> $UserSelect,
		'usercount'			=> $Users,
		'bancount'			=> $Banneds,
	));
	
	$template->show('BanMessagePage.tpl');
}