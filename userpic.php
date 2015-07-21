<?php


define('MODE', 'BANNER');
define('ROOT_PATH', str_replace('\\', '/',dirname(__FILE__)).'/');
set_include_path(ROOT_PATH);

if(!extension_loaded('gd')) {
	clearGIF();
}

require 'includes/common.php';
$id = HTTP::_GP('id', 0);

if(!isModulAvalible(MODULE_BANNER) || $id == 0) {
	clearGIF();
}

$LNG = new Language;
$LNG->getUserAgentLanguage();
$LNG->includeData(array('L18N', 'BANNER', 'CUSTOM'));

require 'includes/classes/class.StatBanner.php';

$banner = new StatBanner();
$Data	= $banner->GetData($id);
if(!isset($Data) || !is_array($Data)) {
	clearGIF();
}
	
$ETag	= md5(implode('', $Data));
header('ETag: '.$ETag);

if(isset($_SERVER['HTTP_IF_NONE_MATCH']) && $_SERVER['HTTP_IF_NONE_MATCH'] == $ETag) {
	HTTP::sendHeader('HTTP/1.0 304 Not Modified');
	exit;
}

$banner->CreateUTF8Banner($Data);