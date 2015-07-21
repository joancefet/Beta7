<?php

/**
 *  OPBE
 *  Copyright (C) 2013  Jstar
 *
 * This file is part of OPBE.
 * 
 * OPBE is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * OPBE is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with OPBE.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package OPBE
 * @author Jstar <frascafresca@gmail.com>
 * @copyright 2013 Jstar <frascafresca@gmail.com>
 * @license http://www.gnu.org/licenses/ GNU AGPLv3 License
 * @version beta(26-10-2013)
 * @link https://github.com/jstar88/opbe
 */
require (ROOT_PATH . 'includes'.DIRECTORY_SEPARATOR.'libs'.DIRECTORY_SEPARATOR.'opbe'.DIRECTORY_SEPARATOR.'utils'.DIRECTORY_SEPARATOR.'includer.php');

define('ID_MIN_SHIPS', 200);
define('ID_MAX_SHIPS', 400);
define('HOME_FLEET', 0);
define('DEFENDERS_WON', 'r');
define('ATTACKERS_WON', 'a');
define('DRAW', 'w');
define('METAL_ID', 901);
define('CRYSTAL_ID', 902);


/**
 * calculateAttack()
 * Calculate the battle using OPBE.
 * 
 * OPBE ,to decrease memory usage, don't save both the initial and end state of fleets in a single round: only the end state is saved.
 * Then OPBE store the first round in BattleReport and don't start it, just to show the fleets before the battle.
 * Also,cause OPBE start the rounds without saving the initial state, the informations about how many shots were fired etc must be asked to the next round.
 * Logically, the last round can't ask the next round because there is not.
 * 
 * @param array &$attackers
 * @param array &$defenders
 * @param mixed $FleetTF
 * @param mixed $DefTF
 * @return array
 */
function calculateAttack(&$attackers, &$defenders, $FleetTF, $DefTF)
{
    //null == use default handlers
    $errorHandler = null;
    $exceptionHandler = null;
    
    $CombatCaps = $GLOBALS['CombatCaps'];
    $pricelist = $GLOBALS['pricelist'];

    /********** BUILDINGS MODELS **********/
    /** Note: we are transform array of data like
     *  fleetID => infos
     *  into object tree structure like
     *  playerGroup -> player -> fleet -> shipType
     */

    //attackers
    $attackerGroupObj = new PlayerGroup();
    foreach ($attackers as $fleetID => $attacker)
    {
        $player = $attacker['player'];
        //techs + bonus. Note that the bonus is divided by the factor because the result sum will be multiplied by the same inside OPBE
        $attTech = $player['academy_1101'] + ($player['academy_1102'] * 2) + $player['factor']['Attack'] * WEAPONS_TECH_INCREMENT_FACTOR ;        
		$shieldTech = $player['academy_1301'] + ($player['academy_1302'] * 2) + $player['factor']['Shield'] * SHIELDS_TECH_INCREMENT_FACTOR;
        $defTech = $player['academy_1301'] + ($player['academy_1302'] * 2) + $player['factor']['Defensive'] * ARMOUR_TECH_INCREMENT_FACTOR;
		$attackers[$fleetID]['techs'] = array($attTech, $defTech, $shieldTech);
        //--
        $attackerPlayerObj = $attackerGroupObj->createPlayerIfNotExist($player['id'], array(), max(0, $attTech), max(0, $shieldTech), max(0, $defTech));
        $attackerFleetObj = new Fleet($fleetID);
        foreach ($attacker['unit'] as $element => $amount)
        {
            if (empty($amount)) continue;
            $shipType = getShipType($element, $amount);
            $attackerFleetObj->addShipType($shipType);
        }
        $attackerPlayerObj->addFleet($attackerFleetObj);
    }
    //defenders
    $defenderGroupObj = new PlayerGroup();
    foreach ($defenders as $fleetID => $defender)
    {
        $player = $defender['player'];
		//russian function
		//$player['factor']['Shield'] 	+= isset($player['academy_1305']) ? $player['academy_1305'] / 100 : 0;
		//$player['factor']['Defensive']	+= isset($player['academy_1306']) ? $player['academy_1306'] / 100 : 0;
		
        //techs + bonus. Note that the bonus is divided by the factor because the result sum will be multiplied by the same inside OPBE
		$attTech = $player['academy_1101'] + ($player['academy_1102'] * 2) + $player['factor']['Attack'] * WEAPONS_TECH_INCREMENT_FACTOR ;        
		$shieldTech = $player['academy_1301'] + ($player['academy_1302'] * 2) + $player['factor']['Shield'] * SHIELDS_TECH_INCREMENT_FACTOR;
        $defTech = $player['academy_1301'] + ($player['academy_1302'] * 2) + $player['factor']['Defensive'] * ARMOUR_TECH_INCREMENT_FACTOR;
		$defenders[$fleetID]['techs'] = array($attTech, $defTech, $shieldTech);
		
        //--
        $defenderPlayerObj = $defenderGroupObj->createPlayerIfNotExist($player['id'], array(), max(0, $attTech), max(0, $shieldTech), max(0, $defTech));
        $defenderFleetObj = getFleet($fleetID);
        foreach ($defender['unit'] as $element => $amount)
        {
	        if (empty($amount)) continue;
            $shipType = getShipType($element, $amount);
            $defenderFleetObj->addShipType($shipType);
        }
        $defenderPlayerObj->addFleet($defenderFleetObj);
    }

    /********** BATTLE ELABORATION **********/
    $opbe = new Battle($attackerGroupObj, $defenderGroupObj);
    $startBattle = DebugManager::runDebugged(array($opbe,'startBattle'),$errorHandler,$exceptionHandler);
    $startBattle();
    $report = $opbe->getReport();

    /********** WHO WON **********/
    if ($report->defenderHasWin())
    {
        $won = DEFENDERS_WON;
    }
    elseif ($report->attackerHasWin())
    {
        $won = ATTACKERS_WON;
    }
    elseif ($report->isAdraw())
    {
        $won = DRAW;
    }
    else
    {
        throw new Exception('problem');
    }

    /********** ROUNDS INFOS **********/

    $ROUND = array();
    $lastRound = $report->getLastRoundNumber();
    for ($i = 0; $i <= $lastRound; $i++)
    {
        // in case of last round, ask for rebuilt defenses. to change rebuils prob see constants/battle_constants.php
        $attackerGroupObj = ($lastRound == $i) ? $report->getAfterBattleAttackers() : $report->getResultAttackersFleetOnRound($i);
        $defenderGroupObj = ($lastRound == $i) ? $report->getAfterBattleDefenders() : $report->getResultDefendersFleetOnRound($i);
        $attInfo = updatePlayers($attackerGroupObj, $attackers, 'unit');
        $defInfo = updatePlayers($defenderGroupObj, $defenders, 'unit');
        $ROUND[$i] = roundInfo($report, $attackers, $defenders, $attackerGroupObj, $defenderGroupObj, $i + 1, $attInfo, $defInfo);
    }

    /********** DEBRIS **********/
    //attackers
    $debAtt = $report->getAttackerDebris();
    $debAttMet = $debAtt[0];
    $debAttCry = $debAtt[1];
    //defenders
    $debDef = $report->getDefenderDebris();
    $debDefMet = $debDef[0];
    $debDefCry = $debDef[1];
    //total
    $debris = array('attacker' => array(METAL_ID => $debAttMet, CRYSTAL_ID => $debAttCry), 'defender' => array(METAL_ID => $debDefMet, CRYSTAL_ID => $debDefCry));

    /********** LOST UNITS **********/
    $totalLost = array('attacker' => $report->getTotalAttackersLostUnits(), 'defender' => $report->getTotalDefendersLostUnits());

    /********** RETURNS **********/
    return array(
        'won' => $won,
        'debris' => $debris,
        'rw' => $ROUND,
        'unitLost' => $totalLost);
}


/**
 * roundInfo()
 * Return the info required to fill $ROUND.
 * @param BattleReport $report
 * @param array $attackers
 * @param array $defenders
 * @param PlayerGroup $attackerGroupObj
 * @param PlayerGroup $defenderGroupObj
 * @param int $i
 * @return array
 */
function roundInfo(BattleReport $report, $attackers, $defenders, PlayerGroup $attackerGroupObj, PlayerGroup $defenderGroupObj, $i, $attInfo, $defInfo)
{
    $round = null;
    // the last round doesn't has next round, so we not ask for fire etc
    if($i <= $report->getLastRoundNumber())
    {
        $round = $report->getRound($i);
    }
	
	$attack = ($i > $report->getLastRoundNumber()) ? 0 : $round->getAttackersFirePower();
	$defense = ($i > $report->getLastRoundNumber()) ? 0 : $round->getDefendersFirePower();
	$defShield = ($i > $report->getLastRoundNumber()) ? 0 : $round->getDefendersAssorbedDamage();
	$attackShield = ($i > $report->getLastRoundNumber()) ? 0 : $round->getAttachersAssorbedDamage();
    
    return array(
        'attack' => $attack,
        'defense' => $defense,
        'defShield' => min($attack, $defShield),
        'attackShield' => min($defense, $attackShield),
        'attackers' => $attackers,
        'defenders' => $defenders,
        'attackA' => $attInfo[1],
        'defenseA' => $defInfo[1],
        'infoA' => $attInfo[0],
        'infoD' => $defInfo[0]);
}


/**
 * updatePlayers()
 * Update players array as default 2moons require.
 * OPBE keep the internal array data full to decrease memory size, so a PlayerGroup object don't have data about 
 * empty users(an user is empty when fleets are empty and fleet is empty when the ships count is zero)
 * Instead, the old system require to have also array of zero: to update the array of users, after a round, we must iterate them
 * and check the corrispective OPBE value if empty.  
 * 
 * @param PlayerGroup $playerGroup
 * @param array &$players
 * @return null
 */
 


function updatePlayers(PlayerGroup $playerGroup, &$players)
{
    $plyArray = array();
    $amountArray = array();
    foreach ($players as $idFleet => $info)
    {
        foreach ($info['unit'] as $idShipType => $amount)
        {
			
				
            if ($playerGroup->existPlayer($info['player']['id']))
            {
                $player = $playerGroup->getPlayer($info['player']['id']);
				
				
                //used to show techs in the report .Empty player not exist in OPBE's result data
                $players[$idFleet]['techs'] = array($player->getWeaponsTech(),$player->getArmourTech(),$player->getShieldsTech());
                if ($player->existFleet($idFleet)) //if after battle still there are some ship types in this fleet
                {
				
				
                    $fleet = $player->getFleet($idFleet);
                    if ($fleet->existShipType($idShipType)) //if there are some ships of this type
                    {
						
						$attackKrit = 1;
						//$attackKritChance = mt_rand(0,100);
						//$attackuser = getbonusOneBis(1103,$player['academy_1103']);
	//if(0 >= $attackKritChance){
	//$attackKrit = 2;
	//}
	
                        $shipType = $fleet->getShipType($idShipType);
                        //used to show life,power and shield of each ships in the report
                        $plyArray[$idFleet][$idShipType] = array(
						'def' => $shipType->getHull(),
						'shield' => $shipType->getShield(),
						'att' => $shipType->getPower()
						);
						
                        $players[$idFleet]['unit'][$idShipType] = $shipType->getCount();
						$players[$idFleet]['unit_attKrit'][$idShipType] = $attackKrit;
						//$players[$idFleet]['unit_shieldKrit'][$idShipType] = $shipType->getFlagShildCrit();
                    }
                    else //all ships of this type were destroyed
                    {
                        $players[$idFleet]['unit'][$idShipType] = 0;
						$players[$idFleet]['unit_attKrit'][$idShipType] = 1;
						//$players[$idFleet]['unit_shieldKrit'][$idShipType] = 1;
                    }
                }
                else //the fleet is empty, so all ships of this type were destroyed
                {
                   $players[$idFleet]['unit'][$idShipType] = 0;
					$players[$idFleet]['unit_attKrit'][$idShipType] = 1;
					//$players[$idFleet]['unit_shieldKrit'][$idShipType] = 1;
                }
            }
            else // is empty
            {
                $players[$idFleet]['unit'][$idShipType] = 0;
				$players[$idFleet]['unit_attKrit'][$idShipType] = 1;
				//$players[$idFleet]['unit_shieldKrit'][$idShipType] = 1;
                $players[$idFleet]['techs'] = array(0,0,0);
            }

            //initialization
            if (!isset($amountArray[$idFleet]))
            {
                $amountArray[$idFleet] = 0;
            }
            if (!isset($amountArray['total']))
            {
                $amountArray['total'] = 0;
            }
            //increment
            $currentAmount = $players[$idFleet]['unit'][$idShipType];
            $amountArray[$idFleet] = $amountArray[$idFleet] + $currentAmount;
            $amountArray['total'] = $amountArray['total'] + $currentAmount;
        }
    }
    return array($plyArray, $amountArray);
}


/**
 * getShipType()
 * Choose the correct class type by ID
 * 
 * @param int $id
 * @param int $count
 * @return a Ship or Defense instance
 */
function getShipType($id, $count, $player = NULL)
{
	global $CombatCaps, $pricelist, $reslist, $BonusGan;	
	
	/* $skils = array(
		'double_damage' 	=> isset($player['academy_1103']) ? $player['academy_1103'] : 0, // шанс двойной атаки
		'accurate_shots' 	=> isset($player['academy_1108']) ? (1 + $player['academy_1108'] * $pricelist[1108]['cost'][902] / 100) : 0, // процент точныйх выстрелов	
		'chain_reaction' 	=> isset($player['academy_1109']) ? $player['academy_1109'] * $pricelist[1109]['cost'][902] / 200 : 0, // шанс цепной реакции
		'streng_explosion' 	=> isset($player['academy_1110']) ? $player['academy_1110'] * $pricelist[1110]['cost'][902] / 100 : 0, // усиление цепной реакции
		'focus' 			=> isset($player['academy_1111']) ? min(0.7, $player['academy_1111'] * $pricelist[1111]['cost'][902] / 100) : 0, // процент фокусировки
		'double_protec'		=> isset($player['academy_1303']) ? $player['academy_1303'] : 0, // шанс двойных щитов
		'double_protec_x'	=> isset($player['academy_1311']) ? ($player['academy_1311'] * $pricelist[1311]['cost'][902] / 100) : 0, // увеличение двойных щитов
		'heavy_armor' 		=> isset($player['academy_1108']) ? (1 - min(1, $player['academy_1108'] * $pricelist[1308]['cost'][902] / 100)) : 0, // уменьшение скарострела 
		'restoration_def' 	=> isset($player['academy_1103']) ? $player['academy_1103'] : 0,
	); */
	
    $rf = isset($CombatCaps[$id]['sd']) ? $CombatCaps[$id]['sd'] : 0;
	
	//original function
    $shield = $CombatCaps[$id]['shield'];
	
	/* //begin russian function
	if(!empty($player))
	{
		if($CombatCaps[$id]['type_shield'] == 'none')
		$shield	= 0;
		else
    	$shield = ($CombatCaps[$id]['shield'] * (1 + $player['up']['s_'.$CombatCaps[$id]['type_shield']] / 100  * $reslist['up_force']['s_'.$CombatCaps[$id]['type_shield']] * $reslist['upgrade_tech']['s_'.$CombatCaps[$id]['type_shield']]));
	}
	else
	{
		if($CombatCaps[$id]['type_shield'] == 'none')
		$shield	= 0;
		else
		$shield = $CombatCaps[$id]['shield'];
	}
	//end russian function */
	
    $cost = array($pricelist[$id]['cost'][METAL_ID], $pricelist[$id]['cost'][CRYSTAL_ID]);
	
	
    $power = $CombatCaps[$id]['attack'];
	
	/* //begin russian function
	$rig = array(
		'bonus_type_gun' 	=> array('light' => 0, 'medium' => 0, 'heavy' => 0), //fire bonus to armor types
		'type_defend'		=> $CombatCaps[$id]['type_defend'], // type of armor
	);
	
	if(!empty($player))
	{
    	$rig['bonus_type_defend'] = 1 + $player['up']['d_'.$CombatCaps[$id]['type_defend']] / 100 * $reslist['up_force']['d_'.$CombatCaps[$id]['type_defend']]; // бонус kbrone of apgreyda
	}
	else
	{
		$rig['bonus_type_defend'] = 1;
	}
	
	$factorAttack = isset($player['user']['factor']['Attack']) ? ($player['user']['factor']['Attack'] + 1) : 1;
	
	$rig['bonus_type_gun']['light'] = 0; $rig['bonus_type_gun']['medium'] = 0; $rig['bonus_type_gun']['heavy'] = 0;
	
	switch($CombatCaps[$id]['type_gun']) // type checking oruzhki
	{	
		case 'none':
		{	
			$power	= 0; // no weapons
			break;
		}
		case 'notype':
		{	
			$power	= $CombatCaps[$id]['attack']; // standard type of weapon
			$rig['bonus_type_gun']['light']  	+= round($power * $BonusGan['notype']['light'] * $factorAttack);
			$rig['bonus_type_gun']['medium'] 	+= round($power * $BonusGan['notype']['medium'] * $factorAttack);
			$rig['bonus_type_gun']['heavy']	 	+= round($power * $BonusGan['notype']['heavy'] * $factorAttack);
			break;
		}
		default: // not a standard type oruzhki
		{	
			$power			= 0; //attaque
			$type_gun		= explode(';', $CombatCaps[$id]['type_gun']);
			$FleetGun       = array();
			
			foreach ($type_gun as $Item => $gun) // percentage oruzhki + upgrades and tehi
			{
				if (empty($gun)) continue;	
				
				$Class		= explode(',', $gun);
				
				if(!empty($player))// checking for user
				{
					$power_gan	=	round((($CombatCaps[$id]['attack'] * $Class[1]/100) 
					* (1 + ($player['up'][$Class[0]] / 100 * $reslist['up_force'][$Class[0]]))) 
					* (1 + ($reslist['upgrade_tech'][$Class[0]] * $player['user'][$Class[0].'_tech']))); // proschet oruzhki fleet of its type
				}
				else
				{
					$power_gan	=	round(($CombatCaps[$id]['attack'] * $Class[1]/100)); // proschet oruzhki fleet of its type
				}
				
				$power 	+= $power_gan;
				
				$rig['bonus_type_gun']['light']  	+= round($power_gan * $BonusGan[$Class[0]]['light'] * $factorAttack);
				$rig['bonus_type_gun']['medium'] 	+= round($power_gan * $BonusGan[$Class[0]]['medium'] * $factorAttack);
				$rig['bonus_type_gun']['heavy']	 	+= round($power_gan * $BonusGan[$Class[0]]['heavy'] * $factorAttack);									
			}
		}
	}
	
	$restoreShields = (empty($CombatCaps[$id]['restore_shields']) ? 0 : $CombatCaps[$id]['restore_shields']) / 100;
	//end russian function */
	
    if ($id > ID_MIN_SHIPS && $id < ID_MAX_SHIPS)
{
return new Ship($id, $count, $rf, $shield, $cost, $power);
}
return new Defense($id, $count, $rf, $shield, $cost, $power);
}


/**
 * getFleet()
 * Choose the correct class type by ID
 * 
 * @param int $id
 * @return a Fleet or HomeFleet instance
 */
function getFleet($id)
{
    if ($id == HOME_FLEET)
    {
        return new HomeFleet(HOME_FLEET);
    }
    return new Fleet($id);
}

?>
