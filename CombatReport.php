<?php


define('MODE', 'INGAME');
define('ROOT_PATH', str_replace('\\', '/',dirname(__FILE__)).'/');
set_include_path(ROOT_PATH);

require 'includes/common.php';
HTTP::redirectTo('game.php?page=raport&raport='.HTTP::_GP('raport', ''));