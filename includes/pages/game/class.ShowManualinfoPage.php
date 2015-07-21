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
 * @info $Id: class.ShowBuddyListPage.php 2632 2013-03-18 19:05:14Z slaver7 $
 * @link http://2moons.cc/
 */

class ShowManualinfoPage extends AbstractPage
{

	function __construct() 
	{
		parent::__construct();
	}

	function show()
	{
	global $USER, $PLANET, $LNG, $UNI;
	$this->setWindow('popup');
	$this->initTemplate();
	
	$info   = HTTP::_GP('id', '');
	switch($info){
	case '1':
	$this->tplObj->assign_vars(
	array(
	));
	$this->display("page.manualinfo.1.tpl");
	break;
	case '2':
	$this->tplObj->assign_vars(
	array(
	));
	$this->display("page.manualinfo.2.tpl");
	break;
	case '3':
	$this->tplObj->assign_vars(
	array(
	));
	$this->display("page.manualinfo.3.tpl");
	break;
	case '4':
	$this->tplObj->assign_vars(
	array(
	));
	$this->display("page.manualinfo.4.tpl");
	break;
	case '5':
	$this->tplObj->assign_vars(
	array(
	));
	$this->display("page.manualinfo.5.tpl");
	break;
	case '6':
	$this->tplObj->assign_vars(
	array(
	));
	$this->display("page.manualinfo.6.tpl");
	break;
	case '7':
	$this->tplObj->assign_vars(
	array(
	));
	$this->display("page.manualinfo.7.tpl");
	break;
	case '8':
	$this->tplObj->assign_vars(
	array(
	));
	$this->display("page.manualinfo.8.tpl");
	break;
	case '9':
	$this->tplObj->assign_vars(
	array(
	));
	$this->display("page.manualinfo.9.tpl");
	break;
	case '10':
	$this->tplObj->assign_vars(
	array(
	));
	$this->display("page.manualinfo.10.tpl");
	break;
	case '11':
	$this->tplObj->assign_vars(
	array(
	));
	$this->display("page.manualinfo.11.tpl");
	break;
	case '12':
	$this->tplObj->assign_vars(
	array(
	));
	$this->display("page.manualinfo.12.tpl");
	break;
	case '13':
	$this->tplObj->assign_vars(
	array(
	));
	$this->display("page.manualinfo.13.tpl");
	break;
	case '14':
	$this->tplObj->assign_vars(
	array(
	));
	$this->display("page.manualinfo.14.tpl");
	break;
	case '15':
	$this->tplObj->assign_vars(
	array(
	));
	$this->display("page.manualinfo.15.tpl");
	break;
	case '16':
	$this->tplObj->assign_vars(
	array(
	));
	$this->display("page.manual.intro.tpl");
	break;
	case '17':
	$this->tplObj->assign_vars(
	array(
	));
	$this->display("page.manual.achievement.tpl");
	break;
	case '18':
	$this->tplObj->assign_vars(
	array(
	));
	$this->display("page.manual.end.tpl");
	break;
	case '19':
	if($USER['facebook_liked'] == 1){
	SendSimpleMessage(1, '', TIMESTAMP, 4, 'System', 'Achievements', ''.$USER['username'].' is using facebook bug');	
	}
	$this->tplObj->assign_vars(
	array(
	));
	$this->display("page.manual.facebook.tpl");
	break;
	case '20':
	$this->tplObj->assign_vars(
	array(
	));
	$this->display("page.manual.20.tpl");
	break;
    }
	
	}
	}