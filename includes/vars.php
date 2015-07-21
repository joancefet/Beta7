<?php


// VARS DB -> SCRIPT WRAPPER

$CACHE->add('vars', 'VarsBuildCache');
extract($CACHE->get('vars'));
$resource[901] = 'metal';
$resource[902] = 'crystal';
$resource[903] = 'deuterium';
$resource[911] = 'energy';
$resource[921] = 'darkmatter';
$resource[922] = 'antimatter';

define('Asteroid_Id' ,9999);
define('Fortress_Id' ,9998);

$reslist['ressources']  = array(901, 902, 903, 911, 922, 921);
$reslist['resstype'][1] = array(901, 902, 903);
$reslist['resstype'][2] = array(911);
$reslist['resstype'][3] = array(922, 921);