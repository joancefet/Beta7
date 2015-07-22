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
 * @info $Id: PUBLIC.php 2632 2013-03-18 19:05:14Z slaver7 $
 * @link http://2moons.cc/
 */

// Site Title
$LNG['siteTitleIndex']				= 'Index';
$LNG['siteTitleRegister']			= 'Registrieren';
$LNG['siteTitleScreens']			= 'Screenshots';
$LNG['siteTitleBanList']			= 'Pranger';
$LNG['siteTitleBattleHall']			= 'BattleHall';
$LNG['siteTitleRules']				= 'Regeln';
$LNG['siteTitleNews']				= 'News';
$LNG['siteTitleDisclamer']			= 'Impressum';
$LNG['siteTitleLostPassword']		= 'Passwort vergessen?';

// Menu
$LNG['forum']						= 'Forum';
$LNG['menu_index']					= 'IndeX';
$LNG['menu_news']					= 'News';
$LNG['menu_rules']					= 'Regeln';
$LNG['menu_banlist']				= 'Pranger';
$LNG['menu_battlehall']				= 'Battle Hall';
$LNG['menu_disclamer']				= 'Impressum';
$LNG['menu_register']				= 'Registration';

// Universe select
$LNG['chose_a_uni']					= 'Wähle ein Universum';
$LNG['universe']					= 'Universum';
$LNG['uni_closed']					= ' (closed)';

// Button
$LNG['buttonRegister']				= 'Erstelle deinen Account!';
$LNG['buttonScreenshot']			= 'Screenshots';
$LNG['buttonLostPassword']			= 'Passwort vergessen?';

// Start
$LNG['gameInformations']			= array(
	'Ein Weltraum-Strategiespiel in Echtzeit.',
	'Spiele zusammen mit hunderten Usern.',
	'Kein Download, es wird nur ein Standardbrowser benötigt.',
	'Kostenlose Registrierung',
);

// Login
$LNG['loginHeader']					= 'Login';
$LNG['loginUsername']				= 'Nickname';
$LNG['loginPassword']				= 'Passwort';
$LNG['loginButton']					= 'Login';
$LNG['loginInfo']					= 'Mit dem Login akzeptiere ich die %s.';
$LNG['loginWelcome']				= 'Willkommen bei %s';
$LNG['loginServerDesc']				= '%s ist ein Weltraum-Strategiespiel mit hunderten Spielern die erdumgreifend <strong>gleichzeitig</strong> versuchen der/die Beste zu werden. Alles was ihr zum spielen braucht ist ein Standartwebbrowser.';

// Register
$LNG['registerRace'] 				= 'Wahl des Rasse:';
$LNG['registerFacebookAccount']		= 'Facebook-Account';
$LNG['registerUsername']			= 'Nickname';
$LNG['registerUsernameDesc']		= 'Der Nickname muss mindestens 3 und darf maximal 25 Zeichen und darf nur aus Zahlen, Buchstaben, Punkte, Binde- und Unterstriche und Leerzeichen bestehen';
$LNG['registerPassword']			= 'Passwort';
$LNG['registerPasswordDesc']		= 'Das Passwort muss mindestens 8 Zeichen lang sein.';
$LNG['registerPasswordReplay']		= 'Passwort widerhohlen';
$LNG['registerPasswordReplayDesc']	= 'Bitte wiederhole zur Sicherheit die Eingabe deines Paswortes!';
$LNG['registerEmail']				= 'E-Mail';
$LNG['registerEmailDesc']			= 'Bitte geben deine E-Mail-Adresse ein!';
$LNG['registerEmailReplay']			= 'E-Mail wiederhohlen';
$LNG['registerEmailReplayDesc']		= 'Bitte wiederhole zur Sicherheit die Eingabe deiner E-Mail-Adresse!';
$LNG['registerLanguage']			= 'Sprache';
$LNG['registerReferral']			= 'Geworben von:';
$LNG['registerCaptcha']				= 'Sicherheitscode';
$LNG['registerCaptchaDesc']			= 'Bitte gebe die untenstehenden Zeichen ohne Leerstellen in das leere Feld ein. Groß- und Kleinschreibung müssen nicht beachtet werden. Solltest du das Bild auch nach mehrfachem Neuladen nicht entziffern können, wenden Sie sich an den Administrator dieser Seite.';
$LNG['registerCaptchaReload']		= 'Captcha neuladen.';
$LNG['registerRules']				= 'Regeln';
$LNG['registerRulesDesc']			= 'Ich bin mit den %s einverstanden.';

$LNG['registerBack']				= 'Zurück';
$LNG['registerNext']				= 'Weiter';

$LNG['registerErrorUniClosed']		= 'Die Registrierung ist in diesem Universum geschlossen. Das tut uns Leid!';
$LNG['registerErrorUsernameEmpty']	= 'Du hast keinen Nicknamen eingeben!';
$LNG['registerErrorUsernameChar']	= 'Im Nickname sind nur Zahlen, Buchstaben, Leerzeichen, _, -, . erlaubt!';
$LNG['registerErrorUsernameExist']	= 'Der Nickname ist bereits vergeben!';
$LNG['registerErrorPasswordLength']	= 'Das Passwort muss mindestens 6 Zeichen lang sein!';
$LNG['registerErrorPasswordSame']	= 'Sie haben 2 unterschiedliche Passwörter eingegeben!';
$LNG['registerErrorMailEmpty']		= 'Du musst eine E-Mail-Adresse angeben!';
$LNG['registerErrorMailInvalid']	= 'Ungültige E-Mail-Adresse!';
$LNG['registerErrorMailInvalid2']	= 'Wir akzeptieren keine 10 Minuten Mails!';
$LNG['registerErrorMailSame']		= 'Sie haben 2 unterschiedliche E-Mail-Adressen angegeben!';
$LNG['registerErrorMailExist']		= 'Die E-Mail-Adresse ist bereits registriert!';
$LNG['registerErrorRules']			= 'Du musst die Regeln akzeptieren!';
$LNG['registerErrorCaptcha']		= 'Der Sicherheitscode ist falsch!';

$LNG['registerMailVertifyTitle']	= 'Aktivierung der Registrierung auf der Website: %s';
$LNG['registerMailVertifyError']	= 'Fehler beim Versenden der Mail: %s';

$LNG['registerMailCompleteTitle']	= 'Willkommen bei %s!';

$LNG['registerSendComplete']		= 'Vielen Dank für die Registration. Du erhälst in Kürze eine E-Mail mit weiteren Informationen.';

$LNG['registerWelcomePMSenderName']	= 'Administrator';
$LNG['registerWelcomePMSubject']	= 'Willkommen';
$LNG['registerWelcomePMText']		= 'Willkommen bei %s! Baue zuerst ein Solarkraftwerk, denn Energie wird für die spätere Rohstoffproduktion benötigt. Um diese zu bauen, klicke links im Menu auf "Gebäude". Danach baue das 4. Gebäude von oben. Da du nun Energie hast, kannst du anfangen Minen zu bauen. Gehe dazu wieder im Menü auf Gebäude und baue eine Metallmine, danach wieder eine Kristallmine. Um Schiffe bauen zu können musst du zuerst eine Raumschiffswerft gebaut haben. Was dafür benötigt wird findest du links im Menüpunkt Technologie. Das Team wünscht dir viel Spaß beim Erkunden des Universums!';

//Vertify

$LNG['vertifyNoUserFound']			= 'Ungültiger Anfrage!';
$LNG['vertifyAdminMessage']			= 'Der Username "%s" wurder aktiviert!';


//lostpassword
$LNG['passwordInfo']				= 'Wenn du dein Kennwort vergessen hast, musst du den Benutzernamen und die E-Mail-Adresse angeben, die du in deinem Profil hinterlegt hast. Wenn du die Daten nicht mehr weißt, wende dich an den Gameadministrator.';
$LNG['passwordUsername']			= 'Benutzernamen';
$LNG['passwordMail']				= 'E-Mail';
$LNG['passwordCaptcha']				= 'Sicherheitscode';
$LNG['passwordSubmit']				= 'Absenden';
$LNG['passwordErrorUsernameEmpty']	= 'Du hast keinen Benuternamen angegeben!';
$LNG['passwordErrorMailEmpty']		= 'Du hast keine E-Mail-Adresse angegeben!';
$LNG['passwordErrorUnknown']		= 'Es könnte kein Benutzterkonto mit den Daten gefunden werden.';
$LNG['passwordErrorOnePerDay']		= 'Das Kennwort für dieses Benutzerkonto wurde in den letzten 24 Stunden bereits einmal angefordert. Aus Sicherheitsgründen kann das Kennwort eines Benutzers nur einmal pro Tag angefordert werden. Sie können das Kennwort für dieses Benutzerkonto in 24 Stunde(n) erneut anfordern. ';

$LNG['passwordValidMailTitle']		= 'Kennwort vergessen auf der Website: %s';
$LNG['passwordValidMailSend']		= 'Du erhälst in Kürze eine E-Mail mit weiteren Informationen.';

$LNG['passwordValidInValid']		= 'Ungültiger Anfrage!';
$LNG['passwordChangedMailSend']		= 'Du erhälst in Kürze eine E-Mail mit deinem neuen Kennwort.';
$LNG['passwordChangedMailTitle']	= 'Neues Kennwort auf der Website: %s';

$LNG['passwordBack']				= 'Zurück';
$LNG['passwordNext']				= 'Weiter';

//case default

$LNG['login_error_1']				= 'Falscher Benutzername/Passwort!';
$LNG['login_error_2']				= 'Jemand hat sich von einem anderem PC in deinem Account eingeloggt!';
$LNG['login_error_3']				= 'Deine Session ist abgelaufen!';
$LNG['login_error_4']				= 'Es gab einen Fehler bei der externen Autorisierung, bitte versuche Sie es später noch einmal!';

//Rules
$LNG['rulesHeader']					= 'Regelwerk';

//NEWS
$LNG['news_overview']				= 'News';
$LNG['news_from']					= 'Am %s von %s';
$LNG['news_does_not_exist']			= 'Keine News vorhanden!';

//Impressum
$LNG['disclamerLabelAddress']		= 'Adresse:';
$LNG['disclamerLabelPhone']			= 'Telefon Nr.:';
$LNG['disclamerLabelMail']			= 'E-Mail Adresse:';
$LNG['disclamerLabelNotice']		= 'Weitere Informationen';

/**
 * Ajout de toute la partie login
**/

/** main.footer.tpl **/
$LNG['footer_title_block1']			= "Spielen";
$LNG['footer_block1_menu1']			= "Um sich anzumelden";
$LNG['footer_block1_menu2']			= "Regeln";
$LNG['footer_block1_menu3']			= "Nachrichten";
$LNG['footer_block1_menu4']			= "Über uns";
$LNG['footer_title_block2']			= "Konto";
$LNG['footer_block2_menu1']			= "Ein Konto erstellen";
$LNG['footer_block2_menu2']			= "Gewinnen Sie Ihr Passwort";
$LNG['footer_title_block3']			= "Gemeinde";
$LNG['footer_block3_menu1']			= "Forum";
$LNG['footer_block3_menu2']			= "Wir kontaktierten";
$LNG['footer_block3_menu3']			= "Galerien";
$LNG['footer_block3_menu4']			= "Arbeitsplätze";
$LNG['footer_copy']					= "2015 &copy; %s ! - Alle Rechte vorbehalten";
// pour le popup pour le login
$LNG['popup_login_title']			= "Login auf Ihr Konto";
$LNG['popup_login_login']			= "Mail-Adresse";
$LNG['popup_login_mdp']				= "Passwort";
$LNG['popup_login_souvient']		= "Erinnere dich an mich";
$LNG['popup_login_button']			= "Diese Verbunden";
$LNG['popup_login_account']			= "Ein Konto erstellen";
$LNG['popup_login_recover']			= "Passwort vergessen";

/** main.header.tpl **/
$LNG['header_meta_keywords']		= "Xnova Revolution, XNova, 2Moons, Space, Private, Server, Speed";
$LNG['header_meta_description']		= "ist ein Management-Spiel / Massen-Mehrspieler-Strategie-Browser auf einem Science-Fiction-Universum völlig erfunden.";

/** main.navigation.tpl **/
$LNG['main_navigation_menu_head1']	= "Willkommen in der wunderbaren Welt des Raumes!";
$LNG['main_navigation_menu_head2']	= "Anmelden";
$LNG['main_navigation_menu_head3']	= "Anmeldung";
$LNG['main_navigation_menu1']		= "Registrieren";
$LNG['main_navigation_menu2']		= "Zuhause";
$LNG['main_navigation_menu3']		= "Über Uns";
$LNG['main_navigation_menu4']		= "Gallery";
$LNG['main_navigation_menu5']		= "Forum";
$LNG['main_navigation_menu6']		= "Wiki";