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

class TickerCronJob
{
	function run()
	{
		$this->updateTicker();
	}
	
	function updateTicker()
	{
		$buscarTick = $GLOBALS['DATABASE']->query("SELECT tick, tick_last_time FROM ".CONFIG."");
		$ticklasttime = $GLOBALS['DATABASE']->fetch_array($buscarTick);
		$tickatual = $ticklasttime['tick'];
		$tick_last_time = $ticklasttime['tick_last_time'];
		
		if (($tickatual != 0) and (TIMESTAMP - $tick_last_time > 600) ){
		
			$GLOBALS['DATABASE']->query("UPDATE ".CONFIG." SET `tick` = `tick` + 1, `tick_last_time` = ".TIMESTAMP.";");
		
		}
		
		if ($tickatual == 0){
			$GLOBALS['DATABASE']->query("UPDATE ".CONFIG." SET `tick` = `tick` + 1, `tick_last_time` = ".TIMESTAMP.";");
		}
	}
}
