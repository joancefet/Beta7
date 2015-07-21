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
 * @info $Id: class.ShowTechtreePage.php 2632 2013-03-18 19:05:14Z slaver7 $
 * @link http://2moons.cc/
 */


class ShowTechtreePage extends AbstractPage
{
	public static $requireModule = MODULE_TECHTREE;

	function __construct() 
	{
		parent::__construct();
	}
	
	
	function show()
	{
			$this->tplObj->loadscript("techtree.js");

		global $resource, $requeriments, $LNG, $reslist, $USER, $PLANET;
		
		$RequeriList	= array();
		
		$listorder = array(401,402,403,420,405,404,406,416,421,417,418,412,410,413,422,419,414,415,407,408,409,411,502,503);
		
		
		$listorder = array(1,2,3,4,5,6,12,14,15,21,22,23,24,31,33,34,41,42,43,44,45,46,48);
		$listorder2 = array(106,106,109,110,111,113,114,115,117,118,120,121,122,123,124,131,132,133,199,125);
		$listorder3 = array(210,212,202,203,204,205,229,209,206,207,208,217,215,213,211,220,224,219,223,225,226,214,216,230,227,228,222,218,221);
		$listorder4 = array(401,402,403,420,405,404,406,416,421,417,418,412,410,413,422,419,414,415,407,408,409,411,502,503);
		$listorder5 = array(601,602,603,604,605,606,607,608,609,610,611,612,613,614,615);
		

		$elementID		= array_merge(array(0), $listorder);
		$elementID1		= array_merge(array(100), $listorder2);
		$elementID3		= array_merge(array(200), $listorder3);
		$elementID4		= array_merge(array(400), $listorder4);
		$elementID5		= array_merge(array(600), $listorder5);
			
	
		//research
		foreach($elementID1 as $Element)
		{			
			if(!isset($resource[$Element])) {
				$TechTreeList2[$Element]	= $Element;
			
			} else {
				$RequeriList	= array();
				if(isset($requeriments[$Element]))
				{
					foreach($requeriments[$Element] as $requireID => $RedCount)
					{
						$RequeriList[$requireID]	= array('count' => $RedCount, 'own' => (isset($PLANET[$resource[$requireID]])) ? $PLANET[$resource[$requireID]] : $USER[$resource[$requireID]]);
					}
				}
				
				$TechTreeList2[$Element]	= $RequeriList;
			}
		}
		
		
		//buildings
		foreach($elementID as $Element)
		{			
			if(!isset($resource[$Element])) {
				$TechTreeList[$Element]	= $Element;
			
			} else {
				$RequeriList	= array();
				if(isset($requeriments[$Element]))
				{
					foreach($requeriments[$Element] as $requireID => $RedCount)
					{
						$RequeriList[$requireID]	= array('count' => $RedCount, 'own' => (isset($PLANET[$resource[$requireID]])) ? $PLANET[$resource[$requireID]] : $USER[$resource[$requireID]]);
					}
				}
				
				$TechTreeList[$Element]	= $RequeriList;
			}
		}
		//fleets
		foreach($elementID3 as $Element)
		{			
			if(!isset($resource[$Element])) {
				$TechTreeList3[$Element]	= $Element;
			
			} else {
				$RequeriList	= array();
				if(isset($requeriments[$Element]))
				{
					foreach($requeriments[$Element] as $requireID => $RedCount)
					{
						$RequeriList[$requireID]	= array('count' => $RedCount, 'own' => (isset($PLANET[$resource[$requireID]])) ? $PLANET[$resource[$requireID]] : $USER[$resource[$requireID]]);
					}
				}
				
				$TechTreeList3[$Element]	= $RequeriList;
			}
		}
		
		//defense
		foreach($elementID4 as $Element)
		{			
			if(!isset($resource[$Element])) {
				$TechTreeList4[$Element]	= $Element;
			
			} else {
				$RequeriList	= array();
				if(isset($requeriments[$Element]))
				{
					foreach($requeriments[$Element] as $requireID => $RedCount)
					{
						$RequeriList[$requireID]	= array('count' => $RedCount, 'own' => (isset($PLANET[$resource[$requireID]])) ? $PLANET[$resource[$requireID]] : $USER[$resource[$requireID]]);
					}
				}
				
				$TechTreeList4[$Element]	= $RequeriList;
			}
		}
		
		//officers
		foreach($elementID5 as $Element)
		{			
			if(!isset($resource[$Element])) {
				$TechTreeList5[$Element]	= $Element;
			
			} else {
				$RequeriList	= array();
				if(isset($requeriments[$Element]))
				{
					foreach($requeriments[$Element] as $requireID => $RedCount)
					{
						$RequeriList[$requireID]	= array('count' => $RedCount, 'own' => (isset($PLANET[$resource[$requireID]])) ? $PLANET[$resource[$requireID]] : $USER[$resource[$requireID]]);
					}
				}
				
				$TechTreeList5[$Element]	= $RequeriList;
			}
		}
		
		$this->tplObj->assign_vars(array(
			'TechTreeList'		=> $TechTreeList,
			'TechTreeList2'		=> $TechTreeList2,
			'TechTreeList3'		=> $TechTreeList3,
			'TechTreeList4'		=> $TechTreeList4,
			'TechTreeList5'		=> $TechTreeList5,
		));

		$this->display('page.techtree.default.tpl');
	}
}