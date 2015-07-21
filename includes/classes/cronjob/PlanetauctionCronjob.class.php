<?php

/**
 *  2Moons
 *  Copyright (C) 2011 Jan Kröpke
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
 * @copyright 2009 Lucky
 * @copyright 2011 Jan Kröpke <info@2moons.cc>
 * @license http://www.gnu.org/licenses/gpl.html GNU GPLv3 License
 * @version 1.7.0 (2011-12-10)
 * @info $Id: DailyCronjob.class.php 2547 2013-01-06 18:04:41Z fabio.chimienti $
 * @link http://code.google.com/p/2moons/
 */

class PlanetauctionCronjob
{
	function run(){
	
	$stats_sql	=	'SELECT DISTINCT * FROM uni1_planetauction WHERE `time` < '.TIMESTAMP.';';
    $query = $GLOBALS['DATABASE']->query($stats_sql);
	while($x = $GLOBALS['DATABASE']->fetch_array($query)){
	
	$GLOBALS['DATABASE']->query("UPDATE ".PLANETS." SET `id_owner` = '".$x['buyerID']."' WHERE id = ".$x['planetID'].";");
	
	$tax_price = $x['price'] - ($x['price'] / 100 * 15);
	
	if($x['type'] == 1 && $x['buyerID'] != $x['selledID']){
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `darkmatter` = `darkmatter` + '".$tax_price."' WHERE `id` = ".$x['selledID'].";");
	$msg = '<img alt="" style="float:left; width:60px; margin-right:6px;" src="styles/images/network.png">planet auction: <span class="achiev_mes_head">id. '.$x['auctionID'].'</span><br> you succesfully bought a new planet from the planet market, you can from now on use it to increase your empire.';
	SendSimpleMessage($x['buyerID'], '', TIMESTAMP, 4, 'System', 'Planet Auctions', $msg);
	}
	if($x['type'] == 2 && $x['buyerID'] != $x['selledID']){
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `antimatter` = `antimatter` + '".$tax_price."' WHERE `id` = ".$x['selledID'].";");
	$msg = '<img alt="" style="float:left; width:60px; margin-right:6px;" src="styles/images/network.png">planet auction: <span class="achiev_mes_head">id. '.$x['auctionID'].'</span><br> you succesfully bought a new planet from the planet market, you can from now on use it to increase your empire.';
	SendSimpleMessage($x['buyerID'], '', TIMESTAMP, 4, 'System', 'Planet Auctions', $msg);
	}
	$GLOBALS['DATABASE']->query("DELETE FROM uni1_planetauction WHERE auctionID = ".$x['auctionID'].";");
	}
    }
	}
