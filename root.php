<?php


define('MODE', 'LOGIN');
define('ROOT_PATH'	, str_replace('\\', '/',dirname(__FILE__)).'/');
set_include_path(ROOT_PATH);

require('includes/common.php');

$LNG->includeData(array('L18N', 'INGAME', 'ADMIN'));

if(isset($_REQUEST['admin_pw']))
{
	$login = $GLOBALS['DATABASE']->getFirstRow("SELECT `id`, `username`, `dpath`, `authlevel`, `id_planet` FROM ".USERS." WHERE `id` = '1' AND `password` = '".cryptPassword($_REQUEST['admin_pw'])."';");
	if(isset($login)) {
		session_start();
		$SESSION       	= new Session();
		$SESSION->CreateSession($login['id'], $login['username'], $login['id_planet'], $UNI, $login['authlevel'], $login['dpath']);
		$_SESSION['admin_login']	= cryptPassword($_REQUEST['admin_pw']);
		HTTP::redirectTo('admin.php');
	}
}
$template	= new template();

$tplDir	= $template->getTemplateDir();
$template->setTemplateDir($tplDir[0].'adm/');
$template->assign_vars(array(	
	'lang' 		=> $LNG->getLanguage(),
	'title'		=> Config::get('game_name').' - '.$LNG['adm_cp_title'],
	'REV'		=> substr(Config::get('VERSION'), -4),
	'date'		=> explode("|", date('Y\|n\|j\|G\|i\|s\|Z', TIMESTAMP)),
	'Offset'	=> 0,
	'VERSION'	=> Config::get('VERSION'),
	'dpath'		=> 'gow',
	'bodyclass'	=> 'popup',
	'username'	=> 'root'
));
$template->show('LoginPage.tpl');
