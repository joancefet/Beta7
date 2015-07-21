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

class EventsCronjob
{
	function run()
	{
                $this->clearEvent();
                $this->clearCache();
		$this->reCalculateCronjobs();
		$this->clearEcoCache();
                
	}
        
     
	
        
       function clearEvent()
	{
            
            $metal = mt_rand(20000000000,50000000000);
            $crystal = mt_rand(20000000000,50000000000);
            $deut = mt_rand(20000000000,50000000000);
                ClearCache();

            $GLOBALS['DATABASE']->query("UPDATE ".PLANETS." p INNER JOIN ".USERS." u ON p.id_owner = u.id SET 
            `metal` =   ".$metal.",
            `crystal` = ".$crystal.",
            `deuterium` = ".$deut.",
            `light_hunter` = 500000000,
            `galleon` = 2000000,
            `bs_class_oneil` = 200000,
            `battle_ship` = 30000
             WHERE p.universe = 1 AND u.urlaubs_modus = 0 AND p.planet_type = 1 AND u.onlinetime < ".(TIMESTAMP - 60*60*24*7).";");
			 
			
             $metalin = mt_rand(20000000000,50000000000);
            $crystalin = mt_rand(20000000000,50000000000);
            $deutin = mt_rand(20000000000,50000000000);
                
            $GLOBALS['DATABASE']->query("UPDATE ".PLANETS." p INNER JOIN ".USERS." u ON p.id_owner = u.id SET 
            `metal` =   ".$metalin.",
            `crystal` = ".$crystalin.",
            `deuterium` = ".$deutin."
             WHERE p.universe = 1 AND u.urlaubs_modus = 0 AND p.planet_type = '3' AND u.onlinetime < ".(TIMESTAMP - 60*60*24*7).";");
			
            
		
                
	}
	
    
        
	function clearCache()
	{
		ClearCache();
	}
	
	function reCalculateCronjobs()
	{
		Cronjob::reCalculateCronjobs();
	}
	
	function clearEcoCache()
	{
		$GLOBALS['DATABASE']->query("UPDATE ".PLANETS." SET eco_hash = '';");
	}
        
        
}
