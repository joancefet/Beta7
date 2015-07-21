<?php


if (!allowedTo(str_replace(array(dirname(__FILE__), '\\', '/', '.php'), '', __FILE__))) throw new Exception("Permission error!");


function ShowCreatorPage()
{
	global $LNG, $USER, $UNI, $CONF;

	$template	= new template();

	
	switch ($_GET['mode'])
	{
		case 'bot':
			$LNG->includeData(array('PUBLIC'));
			if ($_POST)
			{
				$UserName 	= HTTP::_GP('name', '', UTF8_SUPPORT);
				$UserPass 	= HTTP::_GP('password', 'bot');
				$UserPass2 	= HTTP::_GP('password2', 'bot');
				$UserMail 	= HTTP::_GP('email', 'bot@endlessuni.ga');
				$UserMail2	= HTTP::_GP('email2', 'bot@endlessuni.ga');
				$UserLang 	= HTTP::_GP('lang', 'en');
				$UserAuth 	= HTTP::_GP('authlevel', 0);
				$Galaxy 	= HTTP::_GP('galaxy', mt_rand(1,$CONF['max_galaxy']) );
				$System 	= HTTP::_GP('system', mt_rand(1,$CONF['max_system']) );
				$Planet 	= HTTP::_GP('planet', mt_rand(1,$CONF['max_planets']) );
													
				
				if (CheckPlanetIfExist($Galaxy, $System, $Planet, 1)) {
					$errors .= $LNG['planet_already_exists'];
				}	
			

				if (!empty($errors)) {
					$template->message($errors, '?page=create&mode=bot', 10, true);
					exit;
				}
				
				$SQL = "INSERT INTO ".USERS." SET
				username		= '".$GLOBALS['DATABASE']->sql_escape($UserName). "',
				password		= '".md5($UserPass)."',
				email			= '".$GLOBALS['DATABASE']->sql_escape($UserMail)."',
				email_2			= '".$GLOBALS['DATABASE']->sql_escape($UserMail)."',
				lang			= '".$GLOBALS['DATABASE']->sql_escape($UserLang)."',
				authlevel		= ".$UserAuth.",
				ip_at_reg		= '".$_SERVER['REMOTE_ADDR']."',
				id_planet		= 0,
				universe		= '1',
				onlinetime		= ".TIMESTAMP.",
				register_time	= ".TIMESTAMP.",
				dpath			= '".DEFAULT_THEME."',
				timezone		= '".Config::get('timezone')."',
				uctime			= 0;";
				$GLOBALS['DATABASE']->query($SQL);

				$UserID = $GLOBALS['DATABASE']->GetInsertID();
				
				require_once('includes/functions/CreateOnePlanetRecord.php');
				$PlanerID	= CreateOnePlanetRecord($Galaxy, $System, $Planet, 1, $UserID, $LNG['fcm_planet'], true, $UserAuth);
								
				$SQL = "UPDATE ".USERS." SET 
				id_planet	= ".$PlanerID.",
				galaxy		= ".$Galaxy.",
				system		= ".$System.",
				planet		= ".$Planet.",
				spy_tech		= ".mt_rand(1,30).",
				computer_tech		= ".mt_rand(1,30).",
				military_tech		= ".mt_rand(1,30).",
				defence_tech		= ".mt_rand(1,30).",
				shield_tech		= ".mt_rand(1,30).",
				energy_tech		= ".mt_rand(1,30).",
				hyperspace_tech		= ".mt_rand(1,30).",
				combustion_tech		= ".mt_rand(1,30).",
				impulse_motor_tech		= ".mt_rand(1,30).",
				hyperspace_motor_tech		= ".mt_rand(1,30).",
				laser_tech		= ".mt_rand(1,30).",
				ionic_tech		= ".mt_rand(1,30).",
				buster_tech		= ".mt_rand(1,30).",
				intergalactic_tech		= ".mt_rand(1,30).",
				expedition_tech		= ".mt_rand(1,30).",
				metal_proc_tech		= ".mt_rand(1,30).",
				crystal_proc_tech		= ".mt_rand(1,30).",
				deuterium_proc_tech		= ".mt_rand(1,30).",
				graviton_tech		= ".mt_rand(1,30)."
				WHERE
				id			= ".$UserID.";
				INSERT INTO ".STATPOINTS." SET 
				id_owner	= ".$UserID.",
				universe	= '1',
				stat_type	= 1,
				tech_rank	= ".(Config::get('users_amount') + 1).",
				build_rank	= ".(Config::get('users_amount') + 1).",
				defs_rank	= ".(Config::get('users_amount') + 1).",
				fleet_rank	= ".(Config::get('users_amount') + 1).",
				total_rank	= ".(Config::get('users_amount') + 1).";";
				$GLOBALS['DATABASE']->multi_query($SQL);
				
				$SQL = "UPDATE ".PLANETS." SET 
				name	= 'Planet ".mt_rand(1,1000)."',
				metal_mine	= ".mt_rand(31,60).",
				crystal_mine	= ".mt_rand(31,60).",
				deuterium_sintetizer	= ".mt_rand(31,60).",
				solar_plant	= ".mt_rand(51,70).",
				searcher	= ".mt_rand(1,10).",
				fusion_plant	= ".mt_rand(11,40).",
				robot_factory	= ".mt_rand(1,30).",
				nano_factory	= ".mt_rand(1,30).",
				hangar	= ".mt_rand(1,30).",
				metal_store	= ".mt_rand(1,30).",
				crystal_store	= ".mt_rand(1,30).",
				deuterium_store	= ".mt_rand(1,30).",
				laboratory	= ".mt_rand(1,30).",
				terraformer	= ".mt_rand(1,30).",
				university	= ".mt_rand(1,30).",
				ally_deposit	= ".mt_rand(1,30).",
				silo	= ".mt_rand(1,30).",
				small_ship_cargo	= ".mt_rand(1,2147483647).",
				big_ship_cargo	= ".mt_rand(1,2147483647).",
				light_hunter	= ".mt_rand(1,2147483647).",
				heavy_hunter	= ".mt_rand(1,2147483647).",
				crusher	= ".mt_rand(1,2147483647).",
				battle_ship	= ".mt_rand(1,2147483647).",
				colonizer	= ".mt_rand(1,2147483647).",
				recycler	= ".mt_rand(1,2147483647).",
				spy_sonde	= ".mt_rand(1,2147483647).",
				bomber_ship	= ".mt_rand(1,2147483647).",
				solar_satelit	= ".mt_rand(1,2147483647).",
				destructor	= ".mt_rand(1,1483647).",
				dearth_star	= ".mt_rand(1,1483647).",
				battleship	= ".mt_rand(1,2147483647).",
				lune_noir	= ".mt_rand(1,1483647).",
				ev_transporter	= ".mt_rand(1,2147483647).",
				star_crasher	= ".mt_rand(1,1483647).",
				giga_recykler	= ".mt_rand(1,2147483647).",
				misil_launcher	= ".mt_rand(1,2147483647).",
				small_laser	= ".mt_rand(1,2147483647).",
				big_laser	= ".mt_rand(1,2147483647).",
				gauss_canyon	= ".mt_rand(1,2147483647).",
				ionic_canyon	= ".mt_rand(1,483647).",
				buster_canyon	= ".mt_rand(1,483647).",
				small_protection_shield	= ".mt_rand(0,1).",
				planet_protector	= ".mt_rand(0,1).",
				big_protection_shield	= ".mt_rand(0,1).",
				orbital_station	= ".mt_rand(0,1)."
				WHERE
				id			= ".$PlanerID.";";
				$GLOBALS['DATABASE']->multi_query($SQL);
				
				Config::update(array('users_amount' => Config::get('users_amount') + 1));
				
				$template->message($LNG['new_user_success'], '?page=create&mode=bot', 5, true);
				exit;
			}

			$AUTH			= array();
			$AUTH[AUTH_USR]	= $LNG['user_level'][AUTH_USR];
			
			if($USER['authlevel'] >= AUTH_OPS)
				$AUTH[AUTH_OPS]	= $LNG['user_level'][AUTH_OPS];
				
			if($USER['authlevel'] >= AUTH_MOD)
				$AUTH[AUTH_MOD]	= $LNG['user_level'][AUTH_MOD];
				
			if($USER['authlevel'] >= AUTH_ADM)
				$AUTH[AUTH_ADM]	= $LNG['user_level'][AUTH_ADM];
				
			
			$template->assign_vars(array(	
				'admin_auth'			=> $USER['authlevel'],
				'new_add_user'			=> $LNG['new_add_user'],
				'new_creator_refresh'	=> $LNG['new_creator_refresh'],
				'new_creator_go_back'	=> $LNG['new_creator_go_back'],
				'universe'				=> $LNG['mu_universe'],
				'user_reg'				=> $LNG['user_reg'],
				'pass_reg'				=> $LNG['pass_reg'],
				'pass2_reg'				=> $LNG['pass2_reg'],
				'email_reg'				=> $LNG['email_reg'],
				'email2_reg'			=> $LNG['email2_reg'],
				'new_coord'				=> $LNG['new_coord'],
				'new_range'				=> $LNG['new_range'],
				'lang_reg'				=> $LNG['lang_reg'],		
				'new_title'				=> $LNG['new_title'],
				'Selector'				=> array('auth' => $AUTH, 'lang' => $LNG->getAllowedLangs(false)),  
			));
			$template->show('CreatePageBot.tpl');
		break;
		case 'user':
			$LNG->includeData(array('PUBLIC'));
			if ($_POST)
			{
				$UserName 	= HTTP::_GP('name', '', UTF8_SUPPORT);
				$UserPass 	= HTTP::_GP('password', '');
				$UserPass2 	= HTTP::_GP('password2', '');
				$UserMail 	= HTTP::_GP('email', '');
				$UserMail2	= HTTP::_GP('email2', '');
				$UserLang 	= HTTP::_GP('lang', '');
				$UserAuth 	= HTTP::_GP('authlevel', 0);
				$Galaxy 	= HTTP::_GP('galaxy', 0);
				$System 	= HTTP::_GP('system', 0);
				$Planet 	= HTTP::_GP('planet', 0);
					
				$ExistsUser 	= $GLOBALS['DATABASE']->getFirstCell("SELECT (SELECT COUNT(*) FROM ".USERS." WHERE universe = '1' AND username = '".$GLOBALS['DATABASE']->sql_escape($UserName)."') + (SELECT COUNT(*) FROM ".USERS_VALID." WHERE universe = '1' AND username = '".$GLOBALS['DATABASE']->sql_escape($UserName)."')");
				$ExistsMails	= $GLOBALS['DATABASE']->getFirstCell("SELECT (SELECT COUNT(*) FROM ".USERS." WHERE universe = '1' AND (email = '".$GLOBALS['DATABASE']->sql_escape($UserMail)."' OR email_2 = '".$GLOBALS['DATABASE']->sql_escape($UserMail)."')) + (SELECT COUNT(*) FROM ".USERS_VALID." WHERE universe = '1' AND email = '".$GLOBALS['DATABASE']->sql_escape($UserMail)."')");
								
				if (!ValidateAddress($UserMail)) 
					$errors .= $LNG['invalid_mail_adress'];
					
				if (empty($UserName))
					$errors .= $LNG['empty_user_field'];
										
				if (strlen($UserPass) < 6)
					$errors .= $LNG['password_lenght_error'];
					
				if ($UserPass != $UserPass2)
					$errors .= $LNG['different_passwords'];				
					
				if ($UserMail != $UserMail2)
					$errors .= $LNG['different_mails'];
					
				if (!CheckName($UserName))
					$errors .= $LNG['user_field_specialchar'];				
										
				if ($ExistsUser != 0)
					$errors .= $LNG['user_already_exists'];

				if ($ExistsMails != 0)
					$errors .= $LNG['mail_already_exists'];
				
				if (CheckPlanetIfExist($Galaxy, $System, $Planet, 1)) {
					$errors .= $LNG['planet_already_exists'];
				}	
				
				if ($Galaxy > Config::get('max_galaxy') || $System > Config::get('max_system') || $Planet > Config::get('max_planets')) {
					$errors .= $LNG['po_complete_all2'];
				}

				if (!empty($errors)) {
					$template->message($errors, '?page=create&mode=user', 10, true);
					exit;
				}
				
				$SQL = "INSERT INTO ".USERS." SET
				username		= '".$GLOBALS['DATABASE']->sql_escape($UserName). "',
				password		= '".md5($UserPass)."',
				email			= '".$GLOBALS['DATABASE']->sql_escape($UserMail)."',
				email_2			= '".$GLOBALS['DATABASE']->sql_escape($UserMail)."',
				lang			= '".$GLOBALS['DATABASE']->sql_escape($UserLang)."',
				authlevel		= ".$UserAuth.",
				ip_at_reg		= '".$_SERVER['REMOTE_ADDR']."',
				id_planet		= 0,
				universe		= '1',
				onlinetime		= ".TIMESTAMP.",
				register_time	= ".TIMESTAMP.",
				dpath			= '".DEFAULT_THEME."',
				timezone		= '".Config::get('timezone')."',
				uctime			= 0;";
				$GLOBALS['DATABASE']->query($SQL);

				$UserID = $GLOBALS['DATABASE']->GetInsertID();
				
				require_once('includes/functions/CreateOnePlanetRecord.php');
				$PlanerID	= CreateOnePlanetRecord($Galaxy, $System, $Planet, 1, $UserID, $LNG['fcm_planet'], true, $UserAuth);
								
				$SQL = "UPDATE ".USERS." SET 
				id_planet	= ".$PlanerID.",
				galaxy		= ".$Galaxy.",
				system		= ".$System.",
				planet		= ".$Planet."
				WHERE
				id			= ".$UserID.";
				INSERT INTO ".STATPOINTS." SET 
				id_owner	= ".$UserID.",
				universe	= '1',
				stat_type	= 1,
				tech_rank	= ".(Config::get('users_amount') + 1).",
				build_rank	= ".(Config::get('users_amount') + 1).",
				defs_rank	= ".(Config::get('users_amount') + 1).",
				fleet_rank	= ".(Config::get('users_amount') + 1).",
				total_rank	= ".(Config::get('users_amount') + 1).";";
				$GLOBALS['DATABASE']->multi_query($SQL);
				
				Config::update(array('users_amount' => Config::get('users_amount') + 1));
				
				$template->message($LNG['new_user_success'], '?page=create&mode=user', 5, true);
				exit;
			}

			$AUTH			= array();
			$AUTH[AUTH_USR]	= $LNG['user_level'][AUTH_USR];
			
			if($USER['authlevel'] >= AUTH_OPS)
				$AUTH[AUTH_OPS]	= $LNG['user_level'][AUTH_OPS];
				
			if($USER['authlevel'] >= AUTH_MOD)
				$AUTH[AUTH_MOD]	= $LNG['user_level'][AUTH_MOD];
				
			if($USER['authlevel'] >= AUTH_ADM)
				$AUTH[AUTH_ADM]	= $LNG['user_level'][AUTH_ADM];
				
			
			$template->assign_vars(array(	
				'admin_auth'			=> $USER['authlevel'],
				'new_add_user'			=> $LNG['new_add_user'],
				'new_creator_refresh'	=> $LNG['new_creator_refresh'],
				'new_creator_go_back'	=> $LNG['new_creator_go_back'],
				'universe'				=> $LNG['mu_universe'],
				'user_reg'				=> $LNG['user_reg'],
				'pass_reg'				=> $LNG['pass_reg'],
				'pass2_reg'				=> $LNG['pass2_reg'],
				'email_reg'				=> $LNG['email_reg'],
				'email2_reg'			=> $LNG['email2_reg'],
				'new_coord'				=> $LNG['new_coord'],
				'new_range'				=> $LNG['new_range'],
				'lang_reg'				=> $LNG['lang_reg'],		
				'new_title'				=> $LNG['new_title'],
				'Selector'				=> array('auth' => $AUTH, 'lang' => $LNG->getAllowedLangs(false)),  
			));
			$template->show('CreatePageUser.tpl');
		break;
		case 'moon':
			if ($_POST)
			{
				$PlanetID  	= HTTP::_GP('add_moon', 0);
				$MoonName  	= HTTP::_GP('name', '', UTF8_SUPPORT);
				$Diameter	= HTTP::_GP('diameter', 0);
				$FieldMax	= HTTP::_GP('field_max', 0);
			
				$MoonPlanet	= $GLOBALS['DATABASE']->getFirstRow("SELECT temp_max, temp_min, id_luna, galaxy, system, planet, planet_type, destruyed, id_owner FROM ".PLANETS." WHERE id = '".$PlanetID."' AND universe = '1' AND planet_type = '1' AND destruyed = '0';");

				if (!isset($MoonPlanet)) {
					$template->message($LNG['mo_planet_doesnt_exist'], '?page=create&mode=moon', 3, true);
					exit;
				}
			
				require_once('includes/functions/CreateOneMoonRecord.php');
				
				if(empty($MoonName))
				{
					$MoonName = $LNG['type_planet'][3];
				}
				
				if(CreateOneMoonRecord($MoonPlanet['galaxy'], $MoonPlanet['system'], $MoonPlanet['planet'], 1, $MoonPlanet['id_owner'], $MoonName, 20, TIMESTAMP, (($_POST['diameter_check'] == 'on') ? 0: $Diameter)) !== false)
					$template->message($LNG['mo_moon_added'], '?page=create&mode=moon', 3, true);
				else
					$template->message($LNG['mo_moon_unavaible'], '?page=create&mode=moon', 3, true);
				
				exit;
			}
			
			$template->assign_vars(array(
				'admin_auth'			=> $USER['authlevel'],	
				'universum'				=> $LNG['mu_universe'],
				'po_add_moon'			=> $LNG['po_add_moon'],
				'input_id_planet'		=> $LNG['input_id_planet'],
				'mo_moon_name'			=> $LNG['mo_moon_name'],
				'mo_diameter'			=> $LNG['mo_diameter'],
				'mo_temperature'		=> $LNG['mo_temperature'],
				'mo_fields_avaibles'	=> $LNG['mo_fields_avaibles'],
				'button_add'			=> $LNG['button_add'],
				'new_creator_refresh'	=> $LNG['new_creator_refresh'],
				'mo_moon'				=> $LNG['fcm_moon'],
				'new_creator_go_back'	=> $LNG['new_creator_go_back'],
			));
			
			
			$template->show('CreatePageMoon.tpl');
		break;
		case 'planet':
			if ($_POST) 
			{
				$id          = HTTP::_GP('id', 0);
				$Galaxy      = HTTP::_GP('galaxy', 0);
				$System      = HTTP::_GP('system', 0);
				$Planet      = HTTP::_GP('planet', 0);
				$name        = HTTP::_GP('name', '', UTF8_SUPPORT);
				$field_max   = HTTP::_GP('field_max', 0);
				
				if($Galaxy > Config::get('max_galaxy') || $System > Config::get('max_system') || $Planet > Config::get('max_planets')) {
					$template->message($LNG['po_complete_all2'], '?page=create&mode=planet', 3, true);
					exit;					
				}
				
				$ISUser		= $GLOBALS['DATABASE']->getFirstRow("SELECT id, authlevel FROM ".USERS." WHERE id = '".$id."' AND universe = '1';");
				if(CheckPlanetIfExist($Galaxy, $System, $Planet, 1) || !isset($ISUser)) {
					$template->message($LNG['po_complete_all'], '?page=create&mode=planet', 3, true);
					exit;
				}
				
				require_once('includes/functions/CreateOnePlanetRecord.php');
				CreateOnePlanetRecord($Galaxy, $System, $Planet, 1, $id, '', '', false) ; 
						
				$SQL  = "UPDATE ".PLANETS." SET ";
				
				if ($_POST['diameter_check'] != 'on' || $field_max > 0)
					$SQL .= "field_max = '".$field_max."' ";
			
				if (!empty($name))
					$SQL .= ", name = '".$GLOBALS['DATABASE']->sql_escape($name)."' ";

				$SQL .= "WHERE ";
				$SQL .= "universe = '". 1 ."' AND ";
				$SQL .= "galaxy = '". $Galaxy ."' AND ";
				$SQL .= "system = '". $System ."' AND ";
				$SQL .= "planet = '". $Planet ."' AND ";
				$SQL .= "planet_type = '1'";
				$GLOBALS['DATABASE']->query($SQL);

				$template->message($LNG['po_complete_succes'], '?page=create&mode=planet', 3, true);
				exit;
			}
			
			$Query	= $GLOBALS['DATABASE']->query("SELECT uni, game_name FROM ".CONFIG." ORDER BY uni ASC;");
			while($Unis	= $GLOBALS['DATABASE']->fetch_array($Query)) {
				$AvailableUnis[$Unis['uni']]	= $Unis;
			}

			$template->assign_vars(array(	
				'AvailableUnis'			=> $AvailableUnis,
				'admin_auth'			=> $USER['authlevel'],	
				'universum'				=> $LNG['mu_universe'],
				'po_add_planet'			=> $LNG['po_add_planet'],
				'po_galaxy'				=> $LNG['po_galaxy'],
				'po_system'				=> $LNG['po_system'],
				'po_planet'				=> $LNG['po_planet'],
				'input_id_user'			=> $LNG['input_id_user'],
				'new_creator_coor'		=> $LNG['new_creator_coor'],
				'po_name_planet'		=> $LNG['po_name_planet'],
				'po_fields_max'			=> $LNG['po_fields_max'],
				'button_add'			=> $LNG['button_add'],
				'po_colony'				=> $LNG['fcp_colony'],
				'new_creator_refresh'	=> $LNG['new_creator_refresh'],
				'new_creator_go_back'	=> $LNG['new_creator_go_back'],
			));
			
			$template->show('CreatePagePlanet.tpl');
		break;
		default:
			$template->assign_vars(array(	
				'new_creator_title_u'	=> $LNG['new_creator_title_u'],
				'new_creator_title_p'	=> $LNG['new_creator_title_p'],
				'new_creator_title_l'	=> $LNG['new_creator_title_l'],
				'new_creator_title'		=> $LNG['new_creator_title'],
			));
			
			$template->show('CreatePage.tpl');
		break;	
	}
}
