<?php


function getUniverse()
{
	$gameConfig	= Config::getAll(NULL);
	
	if(MODE == 'ADMIN' && isset($_SESSION['adminuni']))
	{
		$UNI	= (int) $_SESSION['adminuni'];
	}
	elseif(MODE == 'LOGIN')
	{
		if(isset($_COOKIE['uni']))
		{
			$UNI	= (int) $_COOKIE['uni'];
		}

		if(isset($_REQUEST['uni']))
		{
			$UNI	= (int) $_REQUEST['uni'];
		}
	}
	
	if(!isset($UNI))
	{
		if(UNIS_WILDCAST === true) {
			$UNI	= explode('.', $_SERVER['HTTP_HOST']);
			$UNI	= substr($UNI[0], 3);
			if(!is_numeric($UNI))
			{
				$UNI	= ROOT_UNI;
			}
		} else {
			if(count($gameConfig) == 1)
			{
				if(HTTP_ROOT != HTTP_BASE)
				{
					HTTP::redirectTo(PROTOCOL.HTTP_HOST.HTTP_BASE.HTTP_FILE, true);
				}
				
				$UNI = ROOT_UNI;
			}
			else
			{
				if(isset($_SERVER['REDIRECT_UNI'])) {
					// Apache - faster then preg_match
					$UNI	= $_SERVER["REDIRECT_UNI"];
				}
				elseif(isset($_SERVER['REDIRECT_REDIRECT_UNI']))
				{
					// Patch for www.top-hoster.de - Hoster
					$UNI	= $_SERVER["REDIRECT_REDIRECT_UNI"];
				}
				elseif(strpos($_SERVER['SERVER_SOFTWARE'], 'Apache/') === false)
				{
					preg_match('!/uni([0-9]+)/!', HTTP_PATH, $match);
					if(isset($match[1]))
					{
						$UNI	= $match[1];
					}
				}
				
				if(!isset($UNI) || !isset($gameConfig[$UNI]))
				{
					HTTP::redirectTo(PROTOCOL.HTTP_HOST.HTTP_BASE."uni".ROOT_UNI."/".HTTP_FILE, true);
				}
			}
		}
	}
	
	return $UNI;
}

function t($key)
{
	global $LNG;
	
	if(strpos($key, '.') === false)
	{
		$text = $LNG[$key];
	}
	else
	{
		$keys = explode('.', $key);
		$text = $LNG[$keys[0]][$keys[1]];
	}
	
	$args = func_get_args();
	array_shift($args);
	
	switch (count($args)) {
		case 0: return $text; break;
		case 1: return sprintf($text, $args[0]); break;
		case 2: return sprintf($text, $args[0], $args[1]); break;
		case 3: return sprintf($text, $args[0], $args[1], $args[2]); break;
		case 4: return sprintf($text, $args[0], $args[1], $args[2], $args[3]); break;
		case 5: return sprintf($text, $args[0], $args[1], $args[2], $args[3], $args[4]); break;
		case 6: return sprintf($text, $args[0], $args[1], $args[2], $args[3], $args[4], $args[5]); break;
		case 7: return sprintf($text, $args[0], $args[1], $args[2], $args[3], $args[4], $args[5], $args[6]); break;
		case 8: return sprintf($text, $args[0], $args[1], $args[2], $args[3], $args[4], $args[5], $args[6], $args[7]); break;
		case 9: return sprintf($text, $args[0], $args[1], $args[2], $args[3], $args[4], $args[5], $args[6], $args[7], $args[8]); break;
		case 10: return call_user_func_array('sprintf', $args); break;
	}
}

function getFactors($USER, $Type = 'basic', $TIME = NULL) {
	global $CONF, $resource, $pricelist, $reslist;
	if(empty($TIME))
		$TIME	= TIMESTAMP;
	
	$bonusList	= BuildFunctions::getBonusList();
	$factor		= ArrayUtil::combineArrayWithSingleElement($bonusList, 0);
	
	foreach($reslist['bonus'] as $elementID) {
		$bonus = $pricelist[$elementID]['bonus'];
		
		if (isset($PLANET[$resource[$elementID]])) {
			$elementLevel = $PLANET[$resource[$elementID]];
		} elseif (isset($USER[$resource[$elementID]])) {
			$elementLevel = $USER[$resource[$elementID]];
		} else {
			continue;
		}
		
		if(in_array($elementID, $reslist['dmfunc'])) {
			if(DMExtra($elementLevel, $TIME, false, true)) {
				continue;
			}
			
			foreach($bonusList as $bonusKey)
			{
				$factor[$bonusKey]	+= $bonus[$bonusKey][0];
			}
		} else {
			foreach($bonusList as $bonusKey)
			{
				$factor[$bonusKey]	+= $elementLevel * $bonus[$bonusKey][0];
			}
		}
	}
	
	return $factor;
}

function getPlanets($USER)
{
		if(isset($USER['PLANETS']))
		return $USER['PLANETS'];
		
	$Order = $USER['planet_sort_order'] == 1 ? "DESC" : "ASC" ;
	$Sort  = $USER['planet_sort'];

	$QryPlanets  = "SELECT id, name, galaxy, system, planet, planet_type, image, b_building, b_building_id FROM ".PLANETS." WHERE id_owner = '".$USER['id']."' AND destruyed = '0' ORDER BY ";

	if($Sort == 0)
		$QryPlanets .= "id ". $Order;
	elseif($Sort == 1)
		$QryPlanets .= "galaxy, system, planet, planet_type ". $Order;
	elseif ($Sort == 2)
		$QryPlanets .= "name ". $Order;

	$PlanetRAW = $GLOBALS['DATABASE']->query($QryPlanets);
	
	$Planets	= array();
	
	while($Planet = $GLOBALS['DATABASE']->fetch_array($PlanetRAW))
		$Planets[$Planet['id']]	= $Planet;

	$GLOBALS['DATABASE']->free_result($PlanetRAW);
	return $Planets;
}

function get_timezone_selector() {
	global $LNG;
	
	// New Timezone Selector, better support for changes in tzdata (new russian timezones, e.g.)
	// http://www.php.net/manual/en/datetimezone.listidentifiers.php
	
	$timezones = array();
	$timezone_identifiers = DateTimeZone::listIdentifiers();

	foreach( $timezone_identifiers as $value )
	{
		if ( preg_match( '/^(America|Antartica|Arctic|Asia|Atlantic|Europe|Indian|Pacific)\//', $value ) )
		{
			$ex=explode('/',$value); //obtain continent,city
			$city = isset($ex[2])? $ex[1].' - '.$ex[2]:$ex[1]; //in case a timezone has more than one
			$timezones[$ex[0]][$value] = str_replace('_', ' ', $city);
		}
	}
	return $timezones; 
}

function locale_date_format($format, $time, $LNG = NULL) {

	//Workaound for locale Names.

	if(!isset($LNG)) {
		$LNG	= $GLOBALS['LNG'];		
	}
	
	$weekDay	= date('w', $time);
	$months		= date('n', $time) - 1;
	
	$format     = str_replace(array('D', 'M'), array('$D$', '$M$'), $format);
	$format		= str_replace('$D$', addcslashes($LNG['week_day'][$weekDay], 'A..z'), $format);
	$format		= str_replace('$M$', addcslashes($LNG['months'][$months], 'A..z'), $format);
	
	return $format;
}

function _date($format, $time = null, $toTimeZone = null, $LNG = NULL) {
	global $CONF;
	
	if(!isset($time)) {
		$time	= TIMESTAMP;
	}
	
		
	if(isset($toTimeZone))
	{
		$date = new DateTime();
		if(method_exists($date, 'setTimestamp'))
		{	// PHP > 5.3			
			$date->setTimestamp($time);
		} else {
			// PHP < 5.3
			$tempDate = getdate((int) $time);
			$date->setDate($tempDate['year'], $tempDate['mon'], $tempDate['mday']);
			$date->setTime($tempDate['hours'], $tempDate['minutes'], $tempDate['seconds']);
		}
		
		$time	-= $date->getOffset();
		try {
			$date->setTimezone(new DateTimeZone($toTimeZone));
		} catch (Exception $e) {
			
		}
		$time	+= $date->getOffset();
	}
	
	$format	= locale_date_format($format, $time, $LNG);
	return date($format, $time);
}

function ValidateAddress($address) {
	
	if(function_exists('filter_var')) {
		return filter_var($address, FILTER_VALIDATE_EMAIL) !== FALSE;
	} else {
		/*
			Regex expression from swift mailer (http://swiftmailer.org)
			RFC 2822
		*/
		return preg_match('/^(?:(?:(?:(?:(?:(?:(?:[ \t]*(?:\r\n))?[ \t])?(\((?:(?:(?:[ \t]*(?:\r\n))?[ \t])|(?:(?:[\x01-\x08\x0B\x0C\x0E-\x19\x7F]|[\x21-\x27\x2A-\x5B\x5D-\x7E])|(?:\\[\x00-\x08\x0B\x0C\x0E-\x7F])|(?1)))*(?:(?:[ \t]*(?:\r\n))?[ \t])?\)))*(?:(?:(?:(?:[ \t]*(?:\r\n))?[ \t])?(\((?:(?:(?:[ \t]*(?:\r\n))?[ \t])|(?:(?:[\x01-\x08\x0B\x0C\x0E-\x19\x7F]|[\x21-\x27\x2A-\x5B\x5D-\x7E])|(?:\\[\x00-\x08\x0B\x0C\x0E-\x7F])|(?1)))*(?:(?:[ \t]*(?:\r\n))?[ \t])?\)))|(?:(?:[ \t]*(?:\r\n))?[ \t])))?(?:[a-zA-Z0-9!#\$%&\'\*\+\-\/=\?\^_\{\}\|~]+(\.[a-zA-Z0-9!#\$%&\'\*\+\-\/=\?\^_\{\}\|~]+)*)+(?:(?:(?:(?:[ \t]*(?:\r\n))?[ \t])?(\((?:(?:(?:[ \t]*(?:\r\n))?[ \t])|(?:(?:[\x01-\x08\x0B\x0C\x0E-\x19\x7F]|[\x21-\x27\x2A-\x5B\x5D-\x7E])|(?:\\[\x00-\x08\x0B\x0C\x0E-\x7F])|(?1)))*(?:(?:[ \t]*(?:\r\n))?[ \t])?\)))*(?:(?:(?:(?:[ \t]*(?:\r\n))?[ \t])?(\((?:(?:(?:[ \t]*(?:\r\n))?[ \t])|(?:(?:[\x01-\x08\x0B\x0C\x0E-\x19\x7F]|[\x21-\x27\x2A-\x5B\x5D-\x7E])|(?:\\[\x00-\x08\x0B\x0C\x0E-\x7F])|(?1)))*(?:(?:[ \t]*(?:\r\n))?[ \t])?\)))|(?:(?:[ \t]*(?:\r\n))?[ \t])))?)|(?:(?:(?:(?:(?:[ \t]*(?:\r\n))?[ \t])?(\((?:(?:(?:[ \t]*(?:\r\n))?[ \t])|(?:(?:[\x01-\x08\x0B\x0C\x0E-\x19\x7F]|[\x21-\x27\x2A-\x5B\x5D-\x7E])|(?:\\[\x00-\x08\x0B\x0C\x0E-\x7F])|(?1)))*(?:(?:[ \t]*(?:\r\n))?[ \t])?\)))*(?:(?:(?:(?:[ \t]*(?:\r\n))?[ \t])?(\((?:(?:(?:[ \t]*(?:\r\n))?[ \t])|(?:(?:[\x01-\x08\x0B\x0C\x0E-\x19\x7F]|[\x21-\x27\x2A-\x5B\x5D-\x7E])|(?:\\[\x00-\x08\x0B\x0C\x0E-\x7F])|(?1)))*(?:(?:[ \t]*(?:\r\n))?[ \t])?\)))|(?:(?:[ \t]*(?:\r\n))?[ \t])))?"((?:(?:[ \t]*(?:\r\n))?[ \t])?(?:(?:[\x01-\x08\x0B\x0C\x0E-\x19\x7F]|[\x21\x23-\x5B\x5D-\x7E])|(?:\\[\x00-\x08\x0B\x0C\x0E-\x7F])))*(?:(?:[ \t]*(?:\r\n))?[ \t])?"(?:(?:(?:(?:[ \t]*(?:\r\n))?[ \t])?(\((?:(?:(?:[ \t]*(?:\r\n))?[ \t])|(?:(?:[\x01-\x08\x0B\x0C\x0E-\x19\x7F]|[\x21-\x27\x2A-\x5B\x5D-\x7E])|(?:\\[\x00-\x08\x0B\x0C\x0E-\x7F])|(?1)))*(?:(?:[ \t]*(?:\r\n))?[ \t])?\)))*(?:(?:(?:(?:[ \t]*(?:\r\n))?[ \t])?(\((?:(?:(?:[ \t]*(?:\r\n))?[ \t])|(?:(?:[\x01-\x08\x0B\x0C\x0E-\x19\x7F]|[\x21-\x27\x2A-\x5B\x5D-\x7E])|(?:\\[\x00-\x08\x0B\x0C\x0E-\x7F])|(?1)))*(?:(?:[ \t]*(?:\r\n))?[ \t])?\)))|(?:(?:[ \t]*(?:\r\n))?[ \t])))?))@(?:(?:(?:(?:(?:(?:[ \t]*(?:\r\n))?[ \t])?(\((?:(?:(?:[ \t]*(?:\r\n))?[ \t])|(?:(?:[\x01-\x08\x0B\x0C\x0E-\x19\x7F]|[\x21-\x27\x2A-\x5B\x5D-\x7E])|(?:\\[\x00-\x08\x0B\x0C\x0E-\x7F])|(?1)))*(?:(?:[ \t]*(?:\r\n))?[ \t])?\)))*(?:(?:(?:(?:[ \t]*(?:\r\n))?[ \t])?(\((?:(?:(?:[ \t]*(?:\r\n))?[ \t])|(?:(?:[\x01-\x08\x0B\x0C\x0E-\x19\x7F]|[\x21-\x27\x2A-\x5B\x5D-\x7E])|(?:\\[\x00-\x08\x0B\x0C\x0E-\x7F])|(?1)))*(?:(?:[ \t]*(?:\r\n))?[ \t])?\)))|(?:(?:[ \t]*(?:\r\n))?[ \t])))?(?:[a-zA-Z0-9!#\$%&\'\*\+\-\/=\?\^_\{\}\|~]+(\.[a-zA-Z0-9!#\$%&\'\*\+\-\/=\?\^_\{\}\|~]+)*)+(?:(?:(?:(?:[ \t]*(?:\r\n))?[ \t])?(\((?:(?:(?:[ \t]*(?:\r\n))?[ \t])|(?:(?:[\x01-\x08\x0B\x0C\x0E-\x19\x7F]|[\x21-\x27\x2A-\x5B\x5D-\x7E])|(?:\\[\x00-\x08\x0B\x0C\x0E-\x7F])|(?1)))*(?:(?:[ \t]*(?:\r\n))?[ \t])?\)))*(?:(?:(?:(?:[ \t]*(?:\r\n))?[ \t])?(\((?:(?:(?:[ \t]*(?:\r\n))?[ \t])|(?:(?:[\x01-\x08\x0B\x0C\x0E-\x19\x7F]|[\x21-\x27\x2A-\x5B\x5D-\x7E])|(?:\\[\x00-\x08\x0B\x0C\x0E-\x7F])|(?1)))*(?:(?:[ \t]*(?:\r\n))?[ \t])?\)))|(?:(?:[ \t]*(?:\r\n))?[ \t])))?)|(?:(?:(?:(?:(?:[ \t]*(?:\r\n))?[ \t])?(\((?:(?:(?:[ \t]*(?:\r\n))?[ \t])|(?:(?:[\x01-\x08\x0B\x0C\x0E-\x19\x7F]|[\x21-\x27\x2A-\x5B\x5D-\x7E])|(?:\\[\x00-\x08\x0B\x0C\x0E-\x7F])|(?1)))*(?:(?:[ \t]*(?:\r\n))?[ \t])?\)))*(?:(?:(?:(?:[ \t]*(?:\r\n))?[ \t])?(\((?:(?:(?:[ \t]*(?:\r\n))?[ \t])|(?:(?:[\x01-\x08\x0B\x0C\x0E-\x19\x7F]|[\x21-\x27\x2A-\x5B\x5D-\x7E])|(?:\\[\x00-\x08\x0B\x0C\x0E-\x7F])|(?1)))*(?:(?:[ \t]*(?:\r\n))?[ \t])?\)))|(?:(?:[ \t]*(?:\r\n))?[ \t])))?\[((?:(?:[ \t]*(?:\r\n))?[ \t])?(?:(?:[\x01-\x08\x0B\x0C\x0E-\x19\x7F]|[\x21-\x5A\x5E-\x7E])|(?:\\[\x00-\x08\x0B\x0C\x0E-\x7F])))*?(?:(?:[ \t]*(?:\r\n))?[ \t])?\](?:(?:(?:(?:[ \t]*(?:\r\n))?[ \t])?(\((?:(?:(?:[ \t]*(?:\r\n))?[ \t])|(?:(?:[\x01-\x08\x0B\x0C\x0E-\x19\x7F]|[\x21-\x27\x2A-\x5B\x5D-\x7E])|(?:\\[\x00-\x08\x0B\x0C\x0E-\x7F])|(?1)))*(?:(?:[ \t]*(?:\r\n))?[ \t])?\)))*(?:(?:(?:(?:[ \t]*(?:\r\n))?[ \t])?(\((?:(?:(?:[ \t]*(?:\r\n))?[ \t])|(?:(?:[\x01-\x08\x0B\x0C\x0E-\x19\x7F]|[\x21-\x27\x2A-\x5B\x5D-\x7E])|(?:\\[\x00-\x08\x0B\x0C\x0E-\x7F])|(?1)))*(?:(?:[ \t]*(?:\r\n))?[ \t])?\)))|(?:(?:[ \t]*(?:\r\n))?[ \t])))?)))$/D', $address);
	}
}

function message($mes, $dest = "", $time = "3", $topnav = false, $menu = true)
{
	require_once('includes/classes/class.template.php');
	$template = new template();
	$template->message($mes, $dest, $time, !$topnav);
	exit;
}

function CalculateMaxPlanetFields($planet)
{
	global $resource, $USER;
	$extra_fields = 0 ;
	if($planet['planet_type'] == 1){
	$extra_fields = $USER['peace_reward_fields'];
	}else{
	$extra_fields = $USER['peace_reward_golf'];
	}
	return $planet['field_max'] + $extra_fields + ($planet[$resource[33]] * FIELDS_BY_TERRAFORMER) + ($planet[$resource[41]] * FIELDS_BY_MOONBASIS_LEVEL);
}

function pretty_time($seconds)
{
	global $LNG;
	
	$day	= floor($seconds / 86400);
	$hour	= floor($seconds / 3600 % 24);
	$minute	= floor($seconds / 60 % 60);
	$second	= floor($seconds % 60);
	
	$time  = '';
	
	if($day >= 10) {
		$time .= $day.$LNG['short_day'].' ';
	} elseif($day > 0) {
		$time .= '0'.$day.$LNG['short_day'].' ';
	}
	
	if($hour >= 10) {
		$time .= $hour.$LNG['short_hour'].' ';
	} else {
		$time .= '0'.$hour.$LNG['short_hour'].' ';
	}
	
	if($minute >= 10) {
		$time .= $minute.$LNG['short_minute'].' ';
	} else {
		$time .= '0'.$minute.$LNG['short_minute'].' ';
	}
	
	if($second >= 10) {
		$time .= $second.$LNG['short_second'].' ';
	} else {
		$time .= '0'.$second.$LNG['short_second'].' ';
	}

	return $time;
}

function pretty_fly_time($seconds)
{
	$hour	= floor($seconds / 3600);
	$minute	= floor($seconds / 60 % 60);
	$second	= floor($seconds % 60);
	
	$time  = '';
	
	if($hour >= 10) {
		$time .= $hour;
	} else {
		$time .= '0'.$hour;
	}
	
	$time .= ':';
	
	if($minute >= 10) {
		$time .= $minute;
	} else {
		$time .= '0'.$minute;
	}
	
	$time .= ':';
	
	if($second >= 10) {
		$time .= $second;
	} else {
		$time .= '0'.$second;
	}

	return $time;
}

function GetStartAdressLink($FleetRow, $FleetType)
{
	return '<a href="game.php?page=galaxy&amp;galaxy='.$FleetRow['fleet_start_galaxy'].'&amp;system='.$FleetRow['fleet_start_system'].'" class="'. $FleetType .'">['.$FleetRow['fleet_start_galaxy'].':'.$FleetRow['fleet_start_system'].':'.$FleetRow['fleet_start_planet'].']</a>';
}

function GetTargetAdressLink($FleetRow, $FleetType)
{
	return '<a href="game.php?page=galaxy&amp;galaxy='.$FleetRow['fleet_end_galaxy'].'&amp;system='.$FleetRow['fleet_end_system'].'" class="'. $FleetType .'">['.$FleetRow['fleet_end_galaxy'].':'.$FleetRow['fleet_end_system'].':'.$FleetRow['fleet_end_planet'].']</a>';
}

function BuildPlanetAdressLink($CurrentPlanet)
{
	return '<a href="game.php?page=galaxy&amp;galaxy='.$CurrentPlanet['galaxy'].'&amp;system='.$CurrentPlanet['system'].'">['.$CurrentPlanet['galaxy'].':'.$CurrentPlanet['system'].':'.$CurrentPlanet['planet'].']</a>';
}

function pretty_number($n, $dec = 0)
{
	return number_format(floattostring($n, $dec), $dec, ',', '.');
}

function GetUserByID($UserID, $GetInfo = "*")
{
	if(is_array($GetInfo)) {
		$GetOnSelect = "";
		foreach($GetInfo as $id => $col)
		{
			$GetOnSelect .= "".$col.",";
		}
		$GetOnSelect = substr($GetOnSelect, 0, -1);
	}
	else
		$GetOnSelect = $GetInfo;
	
	$User = $GLOBALS['DATABASE']->getFirstRow("SELECT ".$GetOnSelect." FROM ".USERS." WHERE id = '". $UserID ."';");
	return $User;
}

function makebr($text)
{
    // XHTML FIX for PHP 5.3.0
	// Danke an Meikel
	
    $BR = "<br>\n";
    return (version_compare(PHP_VERSION, "5.3.0", ">=")) ? nl2br($text, false) : strtr($text, array("\r\n" => $BR, "\r" => $BR, "\n" => $BR)); 
}

function CheckPlanetIfExist($Galaxy, $System, $Planet, $Universe, $Planettype = 1)
{
	$QrySelectGalaxy = $GLOBALS['DATABASE']->getFirstCell("SELECT COUNT(*) FROM ".PLANETS." WHERE universe = '".$Universe."' AND galaxy = '".$Galaxy."' AND system = '".$System."' AND planet = '".$Planet."' AND planet_type = '".$Planettype."';");
	return $QrySelectGalaxy ? true : false;
}

function CheckNoobProtec($OwnerPlayer, $TargetPlayer, $Player)
{	
	global $CONF;
	if(
		Config::get('noobprotection') == 0 
		|| Config::get('noobprotectiontime') == 0 
		|| Config::get('noobprotectionmulti') == 0 
		|| $Player['banaday'] > TIMESTAMP
		|| $Player['onlinetime'] < TIMESTAMP - INACTIVE
	) {
		return array('NoobPlayer' => false, 'StrongPlayer' => false);
	}
	
	return array(
		'NoobPlayer' => (
			/* WAHR: 
				Wenn Spieler mehr als 25000 Punkte hat UND
				Wenn ZielSpieler weniger als 80% der Punkte des Spieler hat.
				ODER weniger als 5.000 hat.
			*/
			// Addional Comment: Letzteres ist eigentlich sinnfrei, bitte testen.a
			($TargetPlayer['total_points'] <= Config::get('noobprotectiontime')) && // Default: 25.000
			($OwnerPlayer['total_points'] > $TargetPlayer['total_points'] * Config::get('noobprotectionmulti'))
		), 
		'StrongPlayer' => (
			/* WAHR: 
				Wenn Spieler weniger als 5000 Punkte hat UND
				Mehr als das funfache der eigende Punkte hat
			*/
			($OwnerPlayer['total_points'] < Config::get('noobprotectiontime')) && // Default: 5.000
			($OwnerPlayer['total_points'] * Config::get('noobprotectionmulti') < $TargetPlayer['total_points'])
		),
	);
}

function CheckName($name)
{
	if(UTF8_SUPPORT) {
		return preg_match("/^[\p{L}\p{N}_\-. ]*$/u", $name);
	} else {
		return preg_match("/^[A-z0-9_\-. ]*$/", $name);
	}
}

function SendSimpleMessage($Owner, $Sender, $Time, $Type, $From, $Subject, $Message)
{
			
	$SQL	= "INSERT INTO ".MESSAGES." SET 
	message_owner = ".(int) $Owner.", 
	message_sender = ".(int) $Sender.", 
	message_time = ".(int) $Time.", 
	message_type = ".(int) $Type.", 
	message_from = '".$GLOBALS['DATABASE']->sql_escape($From) ."', 
	message_subject = '". $GLOBALS['DATABASE']->sql_escape($Subject) ."', 
	message_text = '".$GLOBALS['DATABASE']->sql_escape($Message)."', 
	message_unread = '1', 
	message_universe = '1';";
	$SQ	= "INSERT INTO ".MESSAGES_COPY." SET 
	message_owner = ".(int) $Owner.", 
	message_sender = ".(int) $Sender.", 
	message_time = ".(int) $Time.", 
	message_type = ".(int) $Type.", 
	message_from = '".$GLOBALS['DATABASE']->sql_escape($From) ."', 
	message_subject = '". $GLOBALS['DATABASE']->sql_escape($Subject) ."', 
	message_text = '".$GLOBALS['DATABASE']->sql_escape($Message)."', 
	message_unread = '1', 
	message_universe = '1';";

	$GLOBALS['DATABASE']->query($SQL);
	$GLOBALS['DATABASE']->query($SQ);
}

function shortly_number($number, $decial = NULL)
{
	$negate	= $number < 0 ? -1 : 1;
	$number	= abs($number);
    $unit	= array("", "K", "M", "B", "T", "Q", "Q+", "S", "S+", "O", "N");
	$key	= 0;
	
	if($number >= 1000000) {
		++$key;
		while($number >= 1000000)
		{
			++$key;
			$number = $number / 1000000;
		}
	} elseif($number >= 1000) {
		++$key;
		$number = $number / 1000;
	}
	
	$decial	= !is_numeric($decial) ? ((int) (((int)$number != $number) && $key != 0 && $number != 0 && $number < 100)) : $decial;
	return pretty_number($negate * $number, $decial).'&nbsp;'.$unit[$key];
}

function floattostring($Numeric, $Pro = 0, $Output = false){
	return ($Output) ? str_replace(",",".", sprintf("%.".$Pro."f", $Numeric)) : sprintf("%.".$Pro."f", $Numeric);
}

function isModulAvalible($ID)
{
	if(!isset($GLOBALS['CONF']['moduls'][$ID])) 
		$GLOBALS['CONF']['moduls'][$ID] = 1;
	
	return $GLOBALS['CONF']['moduls'][$ID] == 1 || (isset($USER['authlevel']) && $USER['authlevel'] > AUTH_USR);
}

function ClearCache()
{
	$DIRS	= array('cache/', 'cache/templates/');
	foreach($DIRS as $DIR) {
		$FILES = array_diff(scandir($DIR), array('..', '.', '.htaccess'));
		foreach($FILES as $FILE) {
			if(is_dir(ROOT_PATH.$DIR.$FILE))
				continue;
				
			unlink(ROOT_PATH.$DIR.$FILE);
		}
	}
	
	require_once 'includes/classes/Cronjob.class.php';
	Cronjob::reCalculateCronjobs();
	$GLOBALS['DATABASE']->query("UPDATE ".PLANETS." SET eco_hash = '';");
	clearstatcache();
}

function allowedTo($side)
{
	global $USER;
	return ($USER['authlevel'] == AUTH_ADM || (isset($USER['rights']) && $USER['rights'][$side] == 1));
}

function isactiveDMExtra($Extra, $Time) {
	return $Time - $Extra <= 0;
}

function DMExtra($Extra, $Time, $true, $false) {
	return isactiveDMExtra($Extra, $Time) ? $true : $false;
}

function getRandomString() {
	return md5(uniqid());
}

function isVacationMode($USER)
{
	return ($USER['urlaubs_modus'] == 1) ? true : false;
}

function isPremiumUser($USER)
{
	return ($USER['premium_reward_days'] > TIMESTAMP) ? true : false;
}
function calculationBis($skillID,$Element)
{
	$AcademyCalc = $GLOBALS['DATABASE']->query("SELECT ab1, ab2, icost, factor FROM `uni1_academy_skills` WHERE skill_id = ".$skillID.";");
	$AcademyCalc  = $GLOBALS['DATABASE']->fetch_array($AcademyCalc);	
	$Count = $Element;
	
	$FulCost = 0;
	
	for ($i = 0; $i < $Count; $i++) 
	{        	
		$FulCost += floor($AcademyCalc['icost'] * pow($AcademyCalc['factor'], $i));
	}
	$cost = $FulCost;
	
	return $cost;
}

function calculationBisTris($skillID,$Element,$level)
{
	$AcademyCalc = $GLOBALS['DATABASE']->query("SELECT ab1, ab2, icost, factor FROM `uni1_academy_skills` WHERE skill_id = ".$skillID.";");
	$AcademyCalc  = $GLOBALS['DATABASE']->fetch_array($AcademyCalc);	
	$Count = $Element;
	
	$FulCost = 0;
	
	for ($i = $level; $i < $Count; $i++) 
	{        	
		$FulCost += floor($AcademyCalc['icost'] * pow($AcademyCalc['factor'], $i));
	}
	$cost = $FulCost;
	
	return $cost;
}


function calculation($skillID,$Element)
{
	$AcademyCalc = $GLOBALS['DATABASE']->query("SELECT ab1, ab2, icost, factor FROM `uni1_academy_skills` WHERE skill_id = ".$skillID.";");
	$AcademyCalc  = $GLOBALS['DATABASE']->fetch_array($AcademyCalc);	
	$Count = $Element + 1;
	$ab1 = $AcademyCalc['ab1'] * $Count;
	$ab2 = '';
	if($AcademyCalc['ab2'] > 0){
	$ab2 = $AcademyCalc['ab2'] * $Count;
	}
	$FulCost = 0;
	
	for ($i = $Element; $i < $Count; $i++) 
	{        	
		$FulCost += floor($AcademyCalc['icost'] * pow($AcademyCalc['factor'], $i));
	}
	$cost = $FulCost;
	
	return $cost;
}

function getUsername($userID)
{
	$AcademyCalc = $GLOBALS['DATABASE']->query("SELECT username FROM `uni1_users` WHERE id = ".$userID.";");
	$AcademyCalc  = $GLOBALS['DATABASE']->fetch_array($AcademyCalc);	
	$ab1 = $AcademyCalc['username'];
	return $ab1;
}

function getbonusOne($skillID,$Element)
{
	$AcademyCalc = $GLOBALS['DATABASE']->query("SELECT ab1 FROM `uni1_academy_skills` WHERE skill_id = ".$skillID.";");
	$AcademyCalc  = $GLOBALS['DATABASE']->fetch_array($AcademyCalc);	
	$Count = $Element + 1;
	$ab1 = $AcademyCalc['ab1'] * $Count;
	return $ab1;
}

function getbonusOneBis($skillID,$Element)
{
	$AcademyCalc = $GLOBALS['DATABASE']->query("SELECT ab1 FROM `uni1_academy_skills` WHERE skill_id = ".$skillID.";");
	$AcademyCalc  = $GLOBALS['DATABASE']->fetch_array($AcademyCalc);	
	$Count = $Element;
	$ab1 = $AcademyCalc['ab1'] * $Count;
	return $ab1;
}

function getbonusTwo($skillID,$Element)
{
	$AcademyCalc = $GLOBALS['DATABASE']->query("SELECT ab2 FROM `uni1_academy_skills` WHERE skill_id = ".$skillID.";");
	$AcademyCalc  = $GLOBALS['DATABASE']->fetch_array($AcademyCalc);	
	$Count = $Element + 1;
	$ab1 = $AcademyCalc['ab2'] * $Count;
	return $ab1;
}

function cryptPassword($password)
{
	// http://www.phpgangsta.de/schoener-hashen-mit-bcrypt
	global $resource, $salt;
	if(!CRYPT_BLOWFISH || !isset($salt))
	{
		return md5($password);
	} else {
		return crypt($password, '$2a$09$'.$salt.'$');
	}
}

function combineArrayWithSingleElement($keys, $var) {
	return array_combine($keys, array_fill(0, count($keys), $var));
}

function clearGIF() {
	header('Cache-Control: no-cache');
	header('Content-type: image/gif');
	header('Content-length: 43');
	header('Expires: 0');
	echo("\x47\x49\x46\x38\x39\x61\x01\x00\x01\x00\x80\x00\x00\x00\x00\x00\x00\x00\x00\x21\xF9\x04\x01\x00\x00\x00\x00\x2C\x00\x00\x00\x00\x01\x00\x01\x00\x00\x02\x02\x44\x01\x00\x3B");
	exit;
}

function fleetAmountToArray($fleetAmount)
{
	$fleetTyps		= explode(';', $fleetAmount);
	
	$fleetAmount	= array();
	
	foreach ($fleetTyps as $fleetTyp)
	{
		$temp = explode(',', $fleetTyp);
		
		if (empty($temp[0])) continue;

		if (!isset($fleetAmount[$temp[0]]))
		{
			$fleetAmount[$temp[0]] = 0;
		}
		
		$fleetAmount[$temp[0]] += $temp[1];
	}
	
	return $fleetAmount;
}

function exceptionHandler($exception) 
{
	global $CONF;
	if(!headers_sent()) {
		if (!class_exists('HTTP', false)) {
			require_once('includes/classes/HTTP.class.php');
		}
		
		HTTP::sendHeader('HTTP/1.1 503 Service Unavailable');
	}
	
	if(method_exists($exception, 'getSeverity')) {
		$errno	= $exception->getSeverity();
	} else {
		$errno	= E_USER_ERROR;
	}
	
	$errorType = array(
		E_ERROR				=> 'ERROR',
		E_WARNING			=> 'WARNING',
		E_PARSE				=> 'PARSING ERROR',
		E_NOTICE			=> 'NOTICE',
		E_CORE_ERROR		=> 'CORE ERROR',
		E_CORE_WARNING   	=> 'CORE WARNING',
		E_COMPILE_ERROR		=> 'COMPILE ERROR',
		E_COMPILE_WARNING	=> 'COMPILE WARNING',
		E_USER_ERROR		=> 'USER ERROR',
		E_USER_WARNING		=> 'USER WARNING',
		E_USER_NOTICE		=> 'USER NOTICE',
		E_STRICT			=> 'STRICT NOTICE',
		E_RECOVERABLE_ERROR	=> 'RECOVERABLE ERROR'
	);
	
	try
	{
		if(!class_exists('Config', false))
		{
			throw new Exception("No config class");
		}
		$VERSION	= Config::get('VERSION');
	} catch(Exception $e) {
		if(file_exists(ROOT_PATH.'install/VERSION'))
		{
			$VERSION	= file_get_contents(ROOT_PATH.'install/VERSION').' (FILE)';
		}
		else
		{
			$VERSION	= 'UNKNOWN';
		}
	}
	
	try
	{
		if(!class_exists('Config', false))
		{
			throw new Exception("No config class");
		}
		$gameName	= Config::get('game_name');
	} catch(Exception $e) {
		$gameName	= '-';
	}
	
	$DIR		= MODE == 'INSTALL' ? '..' : '.';
	ob_start();
	echo '<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="de" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="de" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="de" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="de" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="de" class="no-js"> <!--<![endif]-->
<head>
	<title>'.$errorType[$errno].'</title>
	<meta name="generator" content="2Moons '.$VERSION.'">
	<!-- 
		This website is powered by 2Moons '.$VERSION.'
		2Moons is a free Space Browsergame initially created by Jan Kr�pke and licensed under GNU/GPL.
		2Moons is copyright 2009-2013 of Jan Kröpke. Extensions are copyright of their respective owners.
		Information and contribution at http://2moons.cc/
	-->
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
</head>
<body id="overview" class="full">
<style>
body {
    background:#0F0F3D;
    color:#ffffff;
    font-family:courier;
    font-size:12pt;
    text-align:center;
    margin:100px;
}

blink {
    color:yellow;
}

.neg {
    background:#fff;
    color:#0F0F3D;
    padding:2px 8px;
    font-weight:bold;
}

p {
    margin:30px 100px;
    text-align:left;
}

a,a:hover {
    color:inherit;
    font:inherit;
}

.menu {
    text-align:center;
    margin-top:50px;
}
</style>

<span class="neg">'.$errorType[$errno].'</span>
<p>Seems something went wrong! Copy paste this error and send via Support Ticket, so we can fix this issue.</p>

		<p class="left">
			<b>Issue: </b>'.$exception->getMessage().'<br>
			<b>File: </b>'.$exception->getFile().' (Line '.$exception->getLine().')<br>
			<b>URL: </b>'.PROTOCOL.HTTP_HOST.$_SERVER['REQUEST_URI'].'<br>
			<b>PHP: Version </b>'.PHP_VERSION.' [ '.php_sapi_name().' ]<br>
			<b>MySQL: </b>'.mysqli_get_client_info().'<br><br>
			<b>Debug Track:</b><br>'.makebr(htmlspecialchars($exception->getTraceAsString())).'
		</p>

		<div class="menu">
<a href="'.$DIR.'/game.php">Return to Game</a> | 
<a href="'.$DIR.'/game.php?page=ticket">Contact Support Ticket</a> 
</div>

</body>
</html>';

	echo str_replace(array('\\', ROOT_PATH, substr(ROOT_PATH, 0, 15)), array('/', '/', 'FILEPATH '), ob_get_clean());
	
	$errorText	= date("[d-M-Y H:i:s]", TIMESTAMP).' '.$errorType[$errno].': "'.strip_tags($exception->getMessage())."\"\r\n";
	$errorText	.= 'File: '.$exception->getFile().' | Line: '.$exception->getLine()."\r\n";
	$errorText	.= 'URL: '.PROTOCOL.HTTP_HOST.$_SERVER['REQUEST_URI'].' | Version: '.$VERSION."\r\n";
	$errorText	.= "Stack trace:\r\n";
	$errorText	.= str_replace(ROOT_PATH, '/', htmlspecialchars(str_replace('\\', '/',$exception->getTraceAsString())))."\r\n";
	
	if(is_writable('includes/error.log'))
	{
		file_put_contents('includes/error.log', $errorText, FILE_APPEND);
	}
}

function errorHandler($errno, $errstr, $errfile, $errline)
{
    if (!($errno & error_reporting())) {
        return;
    }
	
	throw new ErrorException($errstr, 0, $errno, $errfile, $errline);
}

// "workaround" for PHP version pre 5.3.0
if (!function_exists('array_replace_recursive'))
{
    function array_replace_recursive($array, $array1)
    {
        if (!function_exists('recurse')) {
            function recurse($array, $array1)
            {
                foreach ($array1 as $key => $value)
                {
                    // create new key in $array, if it is empty or not an array
                    if (!isset($array[$key]) || (isset($array[$key]) && !is_array($array[$key])))
                    {
                        $array[$key] = array();
                    }

                    // overwrite the value in the base array
                    if (is_array($value))
                    {
                        $value = recurse($array[$key], $value);
                    }
                    $array[$key] = $value;
                }
                return $array;
            }
        }

        // handle the arguments, merge one by one
        $args = func_get_args();
        $array = $args[0];
        if (!is_array($array))
        {
            return $array;
        }
        $count = count($args);
        for ($i = 1; $i < $count; ++$i)
        {
            if (is_array($args[$i]))
            {
                $array = recurse($array, $args[$i]);
            }
        }
        return $array;
    }
}