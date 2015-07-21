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
 * @version 1.7.2 (2013-03-18)
 * @info $Id: class.ShowStatisticsPage.php 2632 2013-03-18 19:05:14Z slaver7 $
 * @link http://2moons.cc/
 */


class ShowTop30Page extends AbstractPage
{
    public static $requireModule = MODULE_STATISTICS;

	function __construct() 
	{
		parent::__construct();
	}

    function show()
    {
        global $USER, $CONF, $LNG, $UNI;
    
        $totalusers = $GLOBALS['DATABASE']->query("SELECT *FROM `uni1_users` WHERE universe = '".$UNI."' ORDER BY `vcount` DESC LIMIT 30;");
        $kyle     = array();
        $Rank = 1;
        $id_users = $USER['id'];
        while ($x = mysqli_fetch_assoc($totalusers)) {
            $kyle[$x['id']]        = array();
            $kyle[$x['id']]['vcount'] = $x['vcount'];
            $kyle[$x['id']]['username'] = $x['username'];
            $kyle[$x['id']]['id'] = $x['id'];
            $kyle[$x['id']]['rank'] = $Rank++;
            
 }
        
        $this->tplObj->assign_vars(array(

            'voturile' => $kyle,
            'rank' => $Rank,
            'id_users' => $USER['id'],
        ));

        $this->display('page.statisticsvote.default.tpl');
    }
}