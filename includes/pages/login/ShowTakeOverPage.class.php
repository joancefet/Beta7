<?php

/**
 *  2Moons
 *  Copyright (C) 2012 Jan
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
 * @author Jan <info@2moons.cc>
 * @copyright 2006 Perberos <ugamela@perberos.com.ar> (UGamela)
 * @copyright 2008 Chlorel (XNova)
 * @copyright 2012 Jan <info@2moons.cc> (2Moons)
 * @license http://www.gnu.org/licenses/gpl.html GNU GPLv3 License
 * @version 2.0.$Revision: 2242 $ (2012-11-31)
 * @info $Id: ShowBanListPage.class.php 2442 2012-11-18 00:48:36Z slaver7 $
 * @link http://2moons.cc/
 */

class ShowTakeOverPage extends AbstractPage 
{


	function __construct() 
	{
		parent::__construct();
	}

	function show()
	{		
		
	  global $USER, $CONF, $LNG, $UNI;
	  
				$ranki = $GLOBALS['DATABASE']->query("SELECT `id`, s.total_rank, s.build_rank, s.tech_rank FROM ".USERS." as u INNER JOIN ".STATPOINTS." as s ON u.id = s.id_owner WHERE onlinetime < ".(TIMESTAMP - 15 * 24 * 60 * 60)." AND bana = '0' LIMIT  5 ;");
				$balken = $GLOBALS['DATABASE']->countquery("SELECT COUNT(*) FROM ".USERS." WHERE universe = ".$UNI." AND onlinetime > '".(TIMESTAMP - 45 * 60 )."';");	$länge2 = 365/$CONF['users_amount'];	$länge  = $balken*$länge2;
				$RangeList	= array();
                while ($StatRow = $GLOBALS['DATABASE']->fetch_array($ranki))
                {
				
				$RangeList[]	= array(
                        'id'		=> $StatRow['id'],
                        'total_rank'		=> $StatRow['total_rank'],
                        'build_rank'		=> $StatRow['build_rank'],
                        'tech_rank'		=> $StatRow['tech_rank'],
                        
                    );
                }
				
			if($_POST){	
		$userName 		= HTTP::_GP('username', '', UTF8_SUPPORT);
		$password 		= HTTP::_GP('password', '', true);
		$mailAddress 	= HTTP::_GP('email', '');
		$rulesChecked	= HTTP::_GP('rules', 0);
		$id	= HTTP::_GP('idc', '');
		
		$allowedTo = $GLOBALS['DATABASE']->query("SELECT `id`, onlinetime, authlevel FROM ".USERS." WHERE id = ".$id." ;");
		$allowedTo = $GLOBALS['DATABASE']->fetch_array($allowedTo);
                

		
		$errors 	= array();
		
		if(Config::get('game_disable') == 0 || Config::get('reg_closed') == 1) {
			$this->printMessage(t('registerErrorUniClosed'), NULL, array(array(
				'label'	=> t('registerBack'),
				'url'	=> 'javascript:window.history.back()',
			)));
		}
		
                    //Esto es para verificar si existe ya un usuario con esa ip.
  
 

   
		if(empty($userName)) {
			$errors[]	= t('registerErrorUsernameEmpty');
		}
		
		if($allowedTo['onlinetime'] > TIMESTAMP - 15 * 24 * 60 * 60 ){
			$errors[]	= t('youcanttakeoverthisaccount');
		}
		
		if($allowedTo['authlevel'] > 0 ){
			$errors[]	= t('adminaccount');
		}
		
		if(!PlayerUtil::isNameValid($userName)) {
			$errors[]	= t('registerErrorUsernameChar');
		}
		
		if(strlen($password) < 6) {
			$errors[]	= t('registerErrorPasswordLength');
		}
			
			
		if(!PlayerUtil::isMailValid($mailAddress)) {
			$errors[]	= t('registerErrorMailInvalid');
		}
			
		if(empty($mailAddress)) {
			$errors[]	= t('registerErrorMailEmpty');
		}
		
		
		
		if($rulesChecked != 1) {
			$errors[]	= t('registerErrorRules');
		}
		
		$countUsername	= $GLOBALS['DATABASE']->getFirstCell("SELECT (
			SELECT COUNT(*) 
			FROM ".USERS." 
			WHERE universe = ".$GLOBALS['UNI']."
			AND username = '".$GLOBALS['DATABASE']->escape($userName)."'
		) + (
			SELECT COUNT(*)
			FROM ".USERS_VALID."
			WHERE universe = ".$GLOBALS['UNI']."
			AND username = '".$GLOBALS['DATABASE']->escape($userName)."'
		);");
		
		$countMail		= $GLOBALS['DATABASE']->getFirstCell("SELECT (
			SELECT COUNT(*)
			FROM ".USERS."
			WHERE universe = ".$GLOBALS['UNI']."
			AND (
				email = '".$GLOBALS['DATABASE']->escape($mailAddress)."'
				OR email_2 = '".$GLOBALS['DATABASE']->escape($mailAddress)."'
			)
		) + (
			SELECT COUNT(*)
			FROM ".USERS_VALID."
			WHERE universe = ".$GLOBALS['UNI']."
			AND email = '".$GLOBALS['DATABASE']->escape($mailAddress)."'
		);");
		
		if($countUsername!= 0) {
			$errors[]	= t('registerErrorUsernameExist');
		}
			
		if($countMail != 0) {
			$errors[]	= t('registerErrorMailExist');
		}
			
		if (!empty($errors)) {
			$this->printMessage(implode("<br>\r\n", $errors), NULL, array(array(
				'label'	=> t('registerBack'),
				'url'	=> 'javascript:window.history.back()',
			)));
		}
		
	
		
		$validationKey	= md5(uniqid('2m'));
	
		$SQL = "UPDATE ".USERS." SET
				`userName` = '".$GLOBALS['DATABASE']->escape($userName)."',
				`password` = '".PlayerUtil::cryptPassword($password)."',
				`email` = '".$GLOBALS['DATABASE']->escape($mailAddress)."',
				`darkmatter` = '300000',
				`ip_at_reg` = '".$_SERVER['REMOTE_ADDR']."' WHERE id = '".$id."' ;";
				
		$GLOBALS['DATABASE']->query($SQL);
		
		$vertifyURL	= 'game.php?page=overview';
		
		if(Config::get('user_valid') == 0 || !empty($externalAuthUID))
		{
			$this->redirectTo($vertifyURL);
		}
		else
		{
			require('includes/classes/Mail.class.php');
			$MailSubject 	= t('registerMailVertifyTitle');
			$MailRAW		= $GLOBALS['LNG']->getTemplate('email_vaild_reg');
			$MailContent	= str_replace(array(
				'{USERNAME}',
				'{PASSWORD}',
				'{GAMENAME}',
				'{GAMEMAIL}',
			), array(
				$userName,
				$password,
				Config::get('game_name').' - '.Config::get('uni_name'),
				Config::get('smtp_sendmail'),
			), $MailRAW);
			
			Mail::send($mailAddress, $userName, t('registerMailVertifyTitle', Config::get('game_name')), $MailContent);
			
			$this->printMessage(t('registerSendComplete'));
		}
        }
        $this->tplObj->assign_vars(array(

            'RangeList'				=> $RangeList,
			'reg_user'			        => $CONF['users_amount'],	    'online_users'              => $balken,		'balken',
        ));
		
		$this->render('page.takeover.default.tpl');
	}
}