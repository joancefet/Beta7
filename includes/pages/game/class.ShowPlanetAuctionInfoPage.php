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

class ShowPlanetAuctionInfoPage extends AbstractPage
{

	function __construct() 
	{
		parent::__construct();
	}

	
	function show()
	{
		global $LNG, $USER, $PLANET, $resource, $reslist;
		$this->setWindow('popup');
		$this->initTemplate();
		
		$id 	= HTTP::_GP('id', 0);
		
		
		
		$PlanetsRAW = $GLOBALS['DATABASE']->query("SELECT * FROM ".PLANETS." WHERE id = '".$id."';");
		$PLANETS	= array($PLANET);
		while($CPLANET = $GLOBALS['DATABASE']->fetch_array($PlanetsRAW))
		{
			
		$planetList['image'][$CPLANET['id']]					= $CPLANET['image'];

		$planetList['coords'][$CPLANET['id']]['planet']		= $CPLANET['planet'];
			
		$planetList['field'][$CPLANET['id']]['current']		= $CPLANET['field_current'];
		$planetList['diameter'][$CPLANET['id']]['diameter']		= $CPLANET['diameter'];
		$planetList['field'][$CPLANET['id']]['max']			= CalculateMaxPlanetFields($CPLANET);
		$planetList['temperature'][$CPLANET['id']]['minimum']			= $CPLANET['temp_min'];;
		$planetList['temperature'][$CPLANET['id']]['maximum']			= $CPLANET['temp_max'];;
		$planetList['solar'][$CPLANET['id']]['solar']			= $CPLANET['solar_satelit'];;
			

           
			
		foreach($reslist['build'] as $elementID) {
				$planetList['build'][$elementID][$CPLANET['id']]	= $CPLANET[$resource[$elementID]];
		}
			
		foreach($reslist['defense'] as $elementID) {
				$planetList['defense'][$elementID][$CPLANET['id']]	= $CPLANET[$resource[$elementID]];
		}
		
		
		
		
		
		}
		
		
		


		
		$this->tplObj->assign_vars(array(
			'planetList'	=> $planetList,
		));

		$this->display('page.planetauction.info.tpl');
	}
	}
