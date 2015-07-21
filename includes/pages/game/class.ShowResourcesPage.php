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
 * @info $Id: class.ShowResourcesPage.php 2632 2013-03-18 19:05:14Z slaver7 $
 * @link http://2moons.cc/
 */

class ShowResourcesPage extends AbstractPage
{
	public static $requireModule = MODULE_RESSOURCE_LIST;

	function __construct() 
	{
		parent::__construct();
	}
	
	
	function AllPlanets()
	{
		global $LNG, $resource, $USER, $PLANET;
		$action = HTTP::_GP('action','');
		if ($action == 'on'){
		                                                                                                                                                     $GLOBALS['DATABASE']->query("UPDATE ".PLANETS." SET metal_mine_porcent = 11, crystal_mine_porcent = 11, deuterium_sintetizer_porcent = 11, solar_plant_porcent = 11, fusion_plant_porcent = 11, solar_satelit_porcent = 11, collider_porcent = 11 WHERE `id_owner` = ".$USER['id'] .";");
		$this->ecoObj->ReBuildCache();
		$this->ecoObj->PLANET['eco_hash'] = $this->ecoObj->CreateHash();
		$PLANET = $this->ecoObj->PLANET;
		}elseif ($action == 'off'){
		 $GLOBALS['DATABASE']->query("UPDATE ".PLANETS." SET metal_mine_porcent = 1, crystal_mine_porcent = 1, deuterium_sintetizer_porcent = 1, solar_plant_porcent = 1, fusion_plant_porcent = 1, solar_satelit_porcent = 1, collider_porcent = 1 WHERE `id_owner` = ".$USER['id'] .";");
		$this->ecoObj->ReBuildCache();
		$this->ecoObj->PLANET['eco_hash'] = $this->ecoObj->CreateHash();
		$PLANET = $this->ecoObj->PLANET;
		}
		$this->save();
		$this->redirectTo('game.php?page=resources');
	}
	
	
	function send()
	{
		global $LNG, $resource, $USER, $PLANET;
		if ($USER['urlaubs_modus'] == 0)
		{
			$updateSQL	= array();
			if(!isset($_POST['prod']))
				$_POST['prod'] = array();
				
				
			foreach($_POST['prod'] as $ressourceID => $Value)
			{
				$FieldName = $resource[$ressourceID].'_porcent';
				if (!isset($PLANET[$FieldName]) || !in_array($Value, range(0, 10)))
					continue;
				
				$updateSQL[]	= $FieldName." = '".((int) $Value)."'";
				
				$PLANET[$FieldName]	= $Value;
				$this->ecoObj->PLANET[$FieldName]	= $Value;
			}

			if(!empty($updateSQL))
			{
				$GLOBALS['DATABASE']->query("UPDATE ".PLANETS." SET ".implode(", ", $updateSQL)." WHERE `id` = ".$PLANET['id'] .";");
				
				$this->ecoObj->ReBuildCache();
				$this->ecoObj->PLANET['eco_hash'] = $this->ecoObj->CreateHash();
				$PLANET = $this->ecoObj->PLANET;
			}
		}
		$this->save();
		$this->redirectTo('game.php?page=resources');
	}
	function show()
	{
		global $LNG, $UNI, $ProdGrid, $resource, $reslist, $CONF, $pricelist, $USER, $PLANET;
		$PlanetRess = new ResourceUpdate();
		$PlanetRess->CalcResource();
		$PlanetRess->SavePlanetToDb();
		if($USER['urlaubs_modus'] == 1)
		{
			$basicIncome[901]	= 0;
			$basicIncome[902]	= 0;
			$basicIncome[903]	= 0;
			$basicIncome[911]	= 0;
		}	
		else
		{		
			$basicIncome[901]	= Config::get($resource[901].'_basic_income');
			$basicIncome[902]	= Config::get($resource[902].'_basic_income');
			$basicIncome[903]	= Config::get($resource[903].'_basic_income');
			$basicIncome[911]	= Config::get($resource[911].'_basic_income');
		}
		
		$temp	= array(
			901	=> array(
				'plus'	=> 0,
				'minus'	=> 0,
			),
			902	=> array(
				'plus'	=> 0,
				'minus'	=> 0,
			),
			903	=> array(
				'plus'	=> 0,
				'minus'	=> 0,
			),
			911	=> array(
				'plus'	=> 0,
				'minus'	=> 0,
			)
		);
		
		$BuildTemp		= $PLANET['temp_max'];
		$BuildEnergy	= $USER[$resource[113]];
		
		$ressIDs		= array_merge(array(), $reslist['resstype'][1], $reslist['resstype'][2]);
		
		if($PLANET['energy_used'] != 0) {
			$prodLevel	= min(1, $PLANET['energy'] / abs($PLANET['energy_used']));
		} else {
			$prodLevel	= 0;
		}
		
		foreach($reslist['prod'] as $ProdID)
		{	
			$BuildLevelFactor	= $PLANET[$resource[$ProdID].'_porcent'];
			$BuildLevel 		= $PLANET[$resource[$ProdID]];
		$premium_resource = 0;
			$peacefull_resource = 0;	
				if($USER['premium_reward_extraction'] > 0 && $USER['premium_reward_extraction_days'] > TIMESTAMP){
				$premium_resource = $USER['premium_reward_extraction'];
				}
				$premium_resource	                = $premium_resource;
				
				if($USER['experience_peace_level'] > 0){
				$peacefull_resource = $USER['experience_peace_level'];
				}
				$peacefull_resource	                = $peacefull_resource;	
				
				$academy_mines = 0;
				if($USER['academy_1201'] > 0){
				$academy_mines = getbonusOneBis(1201,$USER['academy_1201']);
				}
				$academy_mines	                = $academy_mines;
				
				$daily_prod_bonus = 0;
				if($USER['daily_produ'] > TIMESTAMP){
				$daily_prod_bonus = 30;
				}
				$daily_prod_bonus	                = $daily_prod_bonus; 	
				
				$academy_energy = 0;
				if($USER['academy_1202'] > 0){
				$academy_energy = getbonusOneBis(1202,$USER['academy_1202']);
				}
				$academy_energy	                = $academy_energy;
				
				$academy_fusion = 0;
				if($USER['academy_1209'] > 0){
				$academy_fusion = getbonusOneBis(1209,$USER['academy_1209']);
				}
				$academy_fusion	                = $academy_fusion;
				
				$academy_solar = 0;
				if($USER['academy_1210'] > 0){
				$academy_solar = getbonusOneBis(1210,$USER['academy_1210']);
				}
				$academy_solar	                = $academy_solar;
				
				$combat_collider = 0;
				if($USER['combat_reward_collider'] > 0){
				$combat_collider = $USER['combat_reward_collider'];
				}
				$combat_collider	                = $combat_collider;
				
				$allyInfo = $GLOBALS['DATABASE']->query("SELECT alliance_prod FROM `uni1_alliance` WHERE id = ".$USER['ally_id'].";");
				$allyInfo  = $GLOBALS['DATABASE']->fetch_array($allyInfo);
			
				$alliance_prod = 0;
				if($allyInfo['alliance_prod'] > 0){
				$alliance_prod = $allyInfo['alliance_prod'];
				}
				$alliance_prod	                = $alliance_prod;
				
				
				
			$productionList[$ProdID]	= array(
				'production'	=> array(901 => 0, 902 => 0, 903 => 0, 911 => 0),
				'elementLevel'	=> $PLANET[$resource[$ProdID]],
				'prodLevel'		=> $PLANET[$resource[$ProdID].'_porcent'],
			);
			
			foreach($ressIDs as $ID) 
			{
				if(!isset($ProdGrid[$ProdID]['production'][$ID]))
					continue;
					
				$Production	= eval(ResourceUpdate::getProd($ProdGrid[$ProdID]['production'][$ID]));
				
				if($ID != 911)
				{
					$Production	*= $prodLevel * Config::get('resource_multiplier');
				}
				else
				{
					$Production	*= Config::get('energySpeed');
				}
				
				$productionList[$ProdID]['production'][$ID]	= $Production;
				
				if($Production > 0) {
					if($PLANET[$resource[$ID]] == 0) continue;
					
					$temp[$ID]['plus']	+= $Production;
				} else {
					$temp[$ID]['minus']	+= $Production;
				}
			}
		}
				
		$storage	= array(
			901 => shortly_number($PLANET[$resource[901].'_max']),
			902 => shortly_number($PLANET[$resource[902].'_max']),
			903 => shortly_number($PLANET[$resource[903].'_max']),
		);
		
		$basicProduction	= array(
			901 => $basicIncome[901] * Config::get('resource_multiplier'),
			902 => $basicIncome[902] * Config::get('resource_multiplier'),
			903	=> $basicIncome[903] * Config::get('resource_multiplier'),
			911	=> $basicIncome[911] * Config::get('energySpeed'),
		);
		
		$totalProduction	= array(
			901 => $PLANET[$resource[901].'_perhour'] + $basicProduction[901],
			902 => $PLANET[$resource[902].'_perhour'] + $basicProduction[902],
			903	=> $PLANET[$resource[903].'_perhour'] + $basicProduction[903],
			911	=> $PLANET[$resource[911]] + $basicProduction[911] + $PLANET[$resource[911].'_used'],
		);
		
		$bonusProduction	= array(
			901 => $temp[901]['plus'] * ($USER['factor']['Resource'] + 0.05 * $USER[$resource[131]]),
			902 => $temp[902]['plus'] * ($USER['factor']['Resource'] + 0.05 * $USER[$resource[132]]),
			903	=> $temp[903]['plus'] * ($USER['factor']['Resource'] + 0.05 * $USER[$resource[133]]),
			911	=> $temp[911]['plus'] * $USER['factor']['Energy'],
		);
		
		$dailyProduction	= array(
			901 => $totalProduction[901] * 24,
			902 => $totalProduction[902] * 24,
			903	=> $totalProduction[903] * 24,
			911	=> $totalProduction[911],
		);
		
		$weeklyProduction	= array(
			901 => $totalProduction[901] * 168,
			902 => $totalProduction[902] * 168,
			903	=> $totalProduction[903] * 168,
			911	=> $totalProduction[911],
		);
			
		$prodSelector	= array();
		
		foreach(range(0, 10) as $procent) {
			$prodSelector[$procent]	= ($procent * 10).'%';
		}
		
		$this->tplObj->assign_vars(array(	
			'header'			=> sprintf($LNG['rs_production_on_planet'], $PLANET['name']),
			'prodSelector'		=> $prodSelector,
			'productionList'	=> $productionList,
			'basicProduction'	=> $basicProduction,
			'totalProduction'	=> $totalProduction,
			'bonusProduction'	=> $bonusProduction,
			'dailyProduction'	=> $dailyProduction,
			'weeklyProduction'	=> $weeklyProduction,
			'storage'			=> $storage,
		));
		
		$this->display('page.resources.default.tpl');
		
	}
}
