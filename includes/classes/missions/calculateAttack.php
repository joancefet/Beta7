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
 * @info $Id: calculateAttack.php 2632 2013-03-18 19:05:14Z slaver7 $
 * @link http://2moons.cc/
 */


function calculateAttack(&$attackers, &$defenders, $FleetTF, $DefTF)
{
	global $pricelist, $CombatCaps, $resource;

	$TRES 	= array('attacker' => 0, 'defender' => 0);
	$ARES 	= $DRES = array('metal' => 0, 'crystal' => 0);
	$ROUND	= array();
	$RF		= array();
	
	foreach ($attackers as $fleetID => $attacker) 
	{
		foreach ($attacker['unit'] as $element => $amount) 
		{
			$ARES['metal'] 		+= $pricelist[$element]['cost'][901] * $amount;
			$ARES['crystal'] 	+= $pricelist[$element]['cost'][902] * $amount;
		}
	}

	foreach($CombatCaps as $e => $arr) {
		if(!isset($arr['sd'])) continue;
		
		foreach($arr['sd'] as $t => $sd) {
			if($sd == 0) continue;
			$RF[$t][$e] = $sd;
		}
	}
	
	$TRES['attacker']	= $ARES['metal'] + $ARES['crystal'];

	foreach ($defenders as $fleetID => $defender) 
	{
		foreach ($defender['unit'] as $element => $amount)
		{
			if ($element < 300) {
				$DRES['metal'] 		+= $pricelist[$element]['cost'][901] * $amount;
				$DRES['crystal'] 	+= $pricelist[$element]['cost'][902] * $amount ;

				$TRES['defender'] 	+= $pricelist[$element]['cost'][901] * $amount;
				$TRES['defender'] 	+= $pricelist[$element]['cost'][902] * $amount;
			} else {
				if (!isset($STARTDEF[$element])) 
					$STARTDEF[$element] = 0;
				
				$STARTDEF[$element] += $amount;

				$TRES['defender']	+= $pricelist[$element]['cost'][901] * $amount;
				$TRES['defender']	+= $pricelist[$element]['cost'][902] * $amount;
			}
		}
	}
	
	for ($ROUNDC = 0; $ROUNDC <= MAX_ATTACK_ROUNDS; $ROUNDC++) 
	{
		$attackDamage  = array('total' => 0);
		$attackShield  = array('total' => 0);
		$attackAmount  = array('total' => 0);
		$defenseDamage = array('total' => 0);
		$defenseShield = array('total' => 0);
		$defenseAmount = array('total' => 0);
		$attArray = array();
		$defArray = array();
		$KritAttacker = array();
		$KritDefender = array();
		$attackShoting 	 = array('light' => 0, 'medium' => 0, 'heavy' => 0);
		$defenseShoting  = array('light' => 0, 'medium' => 0, 'heavy' => 0);

		foreach ($attackers as $fleetID => $attacker) {
			$attackDamage[$fleetID] = 0;
			$attackShield[$fleetID] = 0;
			$attackAmount[$fleetID] = 0;
			$KritAttacker['DK'][$fleetID] = 0;
			$KritAttacker['SK'][$fleetID] = 0;

			$attTech	= getbonusOneBis(1101,$attacker['player']['academy_1101']) + getbonusOneBis(1102,$attacker['player']['academy_1102']) + $attacker['player']['factor']['Attack'] * 100; //attaque
			$defTech	= getbonusOneBis(1301,$attacker['player']['academy_1301']) + getbonusOneBis(1302,$attacker['player']['academy_1302']) + $attacker['player']['factor']['Defensive']* 100; //bouclier
			$shieldTech = getbonusOneBis(1301,$attacker['player']['academy_1301']) + getbonusOneBis(1302,$attacker['player']['academy_1302']) + $attacker['player']['factor']['Shield']* 100; //coque
			$attackers[$fleetID]['techs'] = array(max(0, $attTech), max(0, $defTech), max(0, $shieldTech));		
			
			if($shieldTech == 0){
			$shieldTech = 1	;
			}
			if($defTech == 0){
			$defTech = 1	;
			}
			if($attTech == 0){
			$attTech = 1	;
			}
			
			
			foreach ($attacker['unit'] as $element => $amount) {
			
				$thisAtt	= $amount * ($CombatCaps[$element]['attack'] * $attTech); //attaque
				$thisShield	= $amount * ($CombatCaps[$element]['shield'] * $shieldTech); // прощет щитов
				$structure = $pricelist[$element]['cost'][902];					
				$thisDef	= $amount * $structure ; //прощет брони
				
				//------Крит атаки и щитов
			$DK		= 1;
			$SK		= 1;
			
			if($attacker['player']['academy_1103'] == 0)
			{$procen_DK = 0;}
			else
			{$procen_DK = 2*$attacker['player']['academy_1103'];}
			
			if($attacker['player']['academy_1303'] == 0)
			{$procen_SK = 0;}
			else
			{$procen_SK = 2*$attacker['player']['academy_1303'];}
			
			if($attacker['player']['academy_1311'] == 0)
			{$power_SK = 0;}
			else
			{$power_SK = getbonusOneBis(1311,$attacker['player']['academy_1311']);}
						
			if(rand(1,100) <= $procen_DK) $DK	= 2;
			if(rand(1,100) <= $procen_SK) $SK	= 2;		
			//--------------------------------------------------------------------- 	
			

				$thisAtt 			*= $DK;
				$thisShield 		*= $SK;
				$KritAttacker['DK'][$fleetID] = $DK;
				$KritAttacker['SK'][$fleetID] = $SK;
				
				$attArray[$fleetID][$element] = array('def' => $thisDef, 'shield' => $thisShield, 'att' => $thisAtt);
				
				$attackDamage[$fleetID] += $thisAtt;
				$attackDamage['total'] += $thisAtt;
				$attackShield[$fleetID] += $thisDef;
				$attackShield['total'] += $thisDef;
				$attackAmount[$fleetID] += $amount;
				$attackAmount['total'] += $amount;
			}
			//$temp1	= $attacker['unit'];
		}

		foreach ($defenders as $fleetID => $defender) {
			$defenseDamage[$fleetID] = 0;
			$defenseShield[$fleetID] = 0;
			$defenseAmount[$fleetID] = 0;
			$KritDefender['DK'][$fleetID] = 0;
			$KritDefender['SK'][$fleetID] = 0;
			
			//-----DEFENDER bonus
			if(empty($defender['player']['academy_1306']))
			{$OB = 0;}
			else{
			$OB = $defender['player']['academy_1306'];
			}
			if(empty($defender['player']['academy_1305'])){
			$OS = 0;
			}else{
			$OS = $defender['player']['academy_1305'];
			}
			//---------------------------------------------------------------------------------------------

			$attTech	= getbonusOneBis(1101,$defender['player']['academy_1101']) + getbonusOneBis(1102,$defender['player']['academy_1102']) + $defender['player']['factor']['Attack'] * 100; //attaque
			$defTech	= $OB + getbonusOneBis(1301,$defender['player']['academy_1301']) + getbonusOneBis(1302,$defender['player']['academy_1302']) + $defender['player']['factor']['Defensive']* 100; //bouclier
			$shieldTech = $OS + getbonusOneBis(1301,$defender['player']['academy_1301']) + getbonusOneBis(1302,$defender['player']['academy_1302']) + $defender['player']['factor']['Shield']* 100; //coque
			$defenders[$fleetID]['techs'] = array(max(0, $attTech), max(0, $defTech), max(0, $shieldTech));
			
			if($shieldTech == 0){
			$shieldTech = 1	;
			}
			if($defTech == 0){
			$defTech = 1	;
			}
			if($attTech == 0){
			$attTech = 1	;
			}

			foreach ($defender['unit'] as $element => $amount) {
				
			
				//------Крит атаки и щитов
			$DK		= 1;
			$SK		= 1;
			
			if($defender['player']['academy_1103'] == 0)
			{$procen_DK = 0;}
			else
			{$procen_DK = 2*$defender['player']['academy_1103'];}
			
			if($defender['player']['academy_1303'] == 0)
			{$procen_SK = 0;}
			else
			{$procen_SK = 2*$defender['player']['academy_1303'];}
			
			if($defender['player']['academy_1311'] == 0)
			{$power_SK = 0;}
			else
			{$power_SK = getbonusOneBis(1311,$defender['player']['academy_1311']);}
						
			if(rand(1,100) <= $procen_DK) $DK	= 2;
			if(rand(1,100) <= $procen_SK) $SK	= 2;		
			//--------------------------------------------------------------------- 
			
				
				$thisAtt	= $amount * ($CombatCaps[$element]['attack'] * $attTech); //attaque
				$thisShield	= $amount * ($CombatCaps[$element]['shield'] * $shieldTech); // прощет щитов
				$structure = $pricelist[$element]['cost'][902];					
				$thisDef	= $amount * $structure ; //прощет брони

				
				$thisAtt 		*= $DK;
				$thisShield 	*= $SK;
				$KritDefender['DK'][$fleetID] = $DK;
				$KritDefender['SK'][$fleetID] = $SK;		
				
				if ($element == 407 || $element == 408 || $element == 409|| $element == 411) $thisAtt = 0;

				$defArray[$fleetID][$element] = array('def' => $thisDef, 'shield' => $thisShield, 'att' => $thisAtt);

				$defenseDamage[$fleetID] += $thisAtt;
				$defenseDamage['total'] += $thisAtt;
				$defenseShield[$fleetID] += $thisDef;
				$defenseShield['total'] += $thisDef;
				$defenseAmount[$fleetID] += $amount;
				$defenseAmount['total'] += $amount;
			}
			//$temp2	= $defender['unit'];
		}

		$ROUND[$ROUNDC] = array('attackers' => $attackers, 'defenders' => $defenders, 'attackA' => $attackAmount, 'defenseA' => $defenseAmount, 'infoA' => $attArray, 'infoD' => $defArray, 'kA' => $KritAttacker, 'kD' => $KritDefender);

		if ($ROUNDC >= MAX_ATTACK_ROUNDS || $defenseAmount['total'] <= 0 || $attackAmount['total'] <= 0) {
			break;
		}

		// Calculate hit percentages (ACS only but ok)
		$attackPct = array();
		foreach ($attackAmount as $fleetID => $amount) {
			if (!is_numeric($fleetID)) continue;
				$attackPct[$fleetID] = $amount / $attackAmount['total'];
		}

		$defensePct = array();
		foreach ($defenseAmount as $fleetID => $amount) {
			if (!is_numeric($fleetID)) continue;
				$defensePct[$fleetID] = $amount / $defenseAmount['total'];
		}

		// CALCUL DES PERTES !!!
		$attacker_n = array();
		$attacker_shield = 0;
		$defenderAttack	= 0;
		foreach ($attackers as $fleetID => $attacker) {
			$attacker_n[$fleetID] = array();

			foreach($attacker['unit'] as $element => $amount) {
				if ($amount <= 0) {
					$attacker_n[$fleetID][$element] = 0;
					continue;
				}

				$defender_moc = $amount * ($defenseDamage['total'] * $attackPct[$fleetID]) / $attackAmount[$fleetID];
			
				if(isset($RF[$element])) {
					foreach($RF[$element] as $shooter => $shots) {
						foreach($defArray as $fID => $rfdef) {
							if(empty($rfdef[$shooter]['att']) || $attackAmount[$fleetID] <= 0) continue;

							$defender_moc += $rfdef[$shooter]['att'] * $shots / ($amount / $attackAmount[$fleetID] * $attackPct[$fleetID]);
							$defenseAmount['total'] += $defenders[$fID]['unit'][$shooter] * $shots;
						}
					}
				}
				
				$CV = 0;
				$CR = 0;
				$Max_dex = 1.0;
				$Fcus = 1.0;		
				
				foreach($defArray as $fID => $rfatt) 
				{
					if ($defenseAmount[$fID] <= 0 ) continue;
					//------CV
					if(empty($defenders[$fID]['academy_1109']))
					{$CV = 0;}
					else
					{$CV += $defensePct[$fID] + getbonusOneBis(1109,$defenders['academy_1109']);}
					//------CR
					if(empty($defenders[$fID]['academy_1110']))					
					{$CR += 1;}
					else
					{$CR += $defensePct[$fID] * rand(1,(getbonusOneBis(1110,$defenders['academy_1110'])));}
					//------max destruction
					if(empty($defenders[$fID]['academy_1108']))
					{$Max_dex += 0;}
					else
					{$Max_dex += $defensePct[$fID] * (getbonusOneBis(1108,$defenders['academy_1108']));}
					//------skil_fcus
					if(empty($defenders[$fID]['skil_fcus']))
					{$Fcus -= 0;}
					else
					{$Fcus -= $defensePct[$fID] * ((getbonusOneBis(1111,$defenders['academy_1111'])));}
				} 
				
				$defenderAttack	+= $defender_moc;
				
				if (($attArray[$fleetID][$element]['def'] / $amount) >= $defender_moc) {
					$attacker_n[$fleetID][$element] = round($amount);
					$attacker_shield += $defender_moc;
					continue;
				}

				 //------minimize RF
				if(empty($attacker['player']['academy_1308']))
				{$minimize_RF = 1;}
				else
				{$minimize_RF = max(0, 1 - (getbonusOneBis(1308,$attacker['player']['academy_1308'])));}
				//---------------------------------------------------------------------------------------------------------- 
				
				
				$max_removePoints = floor($amount * $defenseAmount['total'] / $attackAmount[$fleetID] * $attackPct[$fleetID]);

				$attacker_shield += min($attArray[$fleetID][$element]['def'], $defender_moc);
				$defender_moc 	 -= min($attArray[$fleetID][$element]['def'], $defender_moc);

				$ile_removePoints = max(min($max_removePoints, $amount * min($defender_moc / $attArray[$fleetID][$element]['shield'] * (rand(0, 200) / 100), 1)), 0);

				$attacker_n[$fleetID][$element] = max(ceil($amount - $ile_removePoints), 0);
			}
		}

		$defender_n = array();
		$defender_shield = 0;
		$attackerAttack	= 0;
		foreach ($defenders as $fleetID => $defender) {
			$defender_n[$fleetID] = array();

			foreach($defender['unit'] as $element => $amount) {
				if ($amount <= 0) {
					$defender_n[$fleetID][$element] = 0;
					continue;
				}

				$attacker_moc = $amount * ($attackDamage['total'] * $defensePct[$fleetID]) / $defenseAmount[$fleetID];
				if (isset($RF[$element])) {
					foreach($RF[$element] as $shooter => $shots) {
						foreach($attArray as $fID => $rfatt) {
							if (empty($rfatt[$shooter]['att']) || $defenseAmount[$fleetID] <= 0 ) continue;

							$attacker_moc += $rfatt[$shooter]['att'] * $shots / ($amount / $defenseAmount[$fleetID] * $defensePct[$fleetID]);
							$attackAmount['total'] += $attackers[$fID]['unit'][$shooter] * $shots;
						}
					}
				}
				
				$CV = 0;
				$CR = 0;
				$Max_dex = 1.0;
				$Fcus = 1;
				
				foreach($attArray as $fID => $rfatt) 
				{
					if ($attackAmount[$fID] <= 0 ) continue;
					//------CV
					if(empty($attackers[$fID]['academy_1109']))
					{$CV = 0;}
					else
					{$CV += $attackPct[$fID] + getbonusOneBis(1109,$attackers['academy_1109']);}
					//------CR
					if(empty($attackers[$fID]['academy_1110']))					
					{$CR += 1;}
					else
					{$CR += $attackPct[$fID] * rand(1,(getbonusOneBis(1110,$attackers['academy_1110'])));}
					//------max destruction
					if(empty($attackers[$fID]['academy_1108']))
					{$Max_dex += 0;}
					else
					{$Max_dex += $attackPct[$fID] * (getbonusOneBis(1108,$attackers['academy_1108']));}
					//------skil_fcus
					if(empty($attackers[$fID]['skil_fcus']))
					{$Fcus -= 0;}
					else
					{$Fcus -= $attackPct[$fID] * ((getbonusOneBis(1111,$attackers['academy_1111'])));}
				} 
				
				
				$attackerAttack	+= $attacker_moc;
				
				if (($defArray[$fleetID][$element]['def'] / $amount) >= $attacker_moc) {
					$defender_n[$fleetID][$element] = round($amount);
					$defender_shield += $attacker_moc;
					continue;
				}
				
				//------minimize RF
				if(empty($defender['player']['academy_1308']))
				{$minimize_RF = 1;}
				else
				{$minimize_RF = max(0, 1 - (getbonusOneBis(1308,$defender['player']['academy_1308'])));}
				//---------------------------------------------------------------------------------------------------------- /
	
				$max_removePoints = floor($amount * $attackAmount['total'] / $defenseAmount[$fleetID] * $defensePct[$fleetID]);
				$defender_shield += min($defArray[$fleetID][$element]['def'], $attacker_moc);
				$attacker_moc 	 -= min($defArray[$fleetID][$element]['def'], $attacker_moc);
				
				$ile_removePoints = max(min($max_removePoints, $amount * min($attacker_moc / $defArray[$fleetID][$element]['shield'] * (rand(0, 200) / 100), 1)), 0);

				$defender_n[$fleetID][$element] = max(ceil($amount - $ile_removePoints), 0);
			}
		}
		
		$ROUND[$ROUNDC]['attack'] 		= $attackerAttack;
		$ROUND[$ROUNDC]['defense'] 		= $defenderAttack;
		$ROUND[$ROUNDC]['attackShield'] = $attacker_shield;
		$ROUND[$ROUNDC]['defShield'] 	= $defender_shield;
		foreach ($attackers as $fleetID => $attacker) {
			$attackers[$fleetID]['unit'] = array_map('round', $attacker_n[$fleetID]);
		}

		foreach ($defenders as $fleetID => $defender) {
			$defenders[$fleetID]['unit'] = array_map('round', $defender_n[$fleetID]);
		}
	}
	
	if ($attackAmount['total'] <= 0 && $defenseAmount['total'] > 0) {
		$won = "r"; // defender
	} elseif ($attackAmount['total'] > 0 && $defenseAmount['total'] <= 0) {
		$won = "a"; // attacker
	} else {
		$won = "w"; // draw
	}

	// CDR
	foreach ($attackers as $fleetID => $attacker) {					   // flotte attaquant en CDR
		foreach ($attacker['unit'] as $element => $amount) {
			$TRES['attacker'] -= $pricelist[$element]['cost'][901] * $amount ;
			$TRES['attacker'] -= $pricelist[$element]['cost'][902] * $amount ;

			$ARES['metal'] -= $pricelist[$element]['cost'][901] * $amount ;
			$ARES['crystal'] -= $pricelist[$element]['cost'][902] * $amount ;
		}
	}

	$DRESDefs = array('metal' => 0, 'crystal' => 0);
	 //------Reductin defender
	$RD		= 1;			
	if(empty($defender['player']['academy_1313']))
	{$RD = 0;}
	else
	{$RD = getbonusOneBis(1313,$defender['player']['academy_1313']);}	
	//--------------------------------------------------------------------- 

	$defs_point 	= 0;
	foreach ($defenders as $fleetID => $defender) {
		foreach ($defender['unit'] as $element => $amount) {
			if ($element < 300) {							// flotte defenseur en CDR
				$DRES['metal'] 	 -= $pricelist[$element]['cost'][901] * $amount ;
				$DRES['crystal'] -= $pricelist[$element]['cost'][902] * $amount ;

				$TRES['defender'] -= $pricelist[$element]['cost'][901] * $amount ;
				$TRES['defender'] -= $pricelist[$element]['cost'][902] * $amount ;
			} else {									// defs defenseur en CDR + reconstruction
				$TRES['defender'] -= $pricelist[$element]['cost'][901] * $amount ;
				$TRES['defender'] -= $pricelist[$element]['cost'][902] * $amount ;

				$lost = $STARTDEF[$element] - $amount;
				//$giveback = round($lost * (rand(56, 84) / 100));
				$giveback = round($lost * min(1,(rand(56+$RD, 70+$RD) / 100)));
				$defenders[$fleetID]['unit'][$element] += $giveback;
				$DRESDefs['metal'] 	 += $pricelist[$element]['cost'][901] * ($lost - $giveback) ;
				$DRESDefs['crystal'] += $pricelist[$element]['cost'][902] * ($lost - $giveback) ;
				
				$defs_point 	+= $pricelist[$element]['cost'][901] * $amount + $pricelist[$element]['cost'][901] * ($lost - $giveback);// очки оборонки
				$defs_point	 	+= $pricelist[$element]['cost'][902] * $amount + $pricelist[$element]['cost'][902] * ($lost - $giveback);// очки оборонки
			}
		}
	}
	
	$ARES['metal']		= max($ARES['metal'], 0);
	$ARES['crystal']	= max($ARES['crystal'], 0);
	$DRES['metal']		= max($DRES['metal'], 0);
	$DRES['crystal']	= max($DRES['crystal'], 0);
	$TRES['attacker']	= max($TRES['attacker'], 0);
	$TRES['defender']	= max($TRES['defender'], 0);
	
	$totalLost = array('attacker' => $TRES['attacker'], 'defender' => $TRES['defender'], 'dp' => $defs_point); 
	$debAttMet = ($ARES['metal'] * ($FleetTF / 100));
	$debAttCry = ($ARES['crystal'] * ($FleetTF / 100));
	$debDefMet = ($DRES['metal'] * ($FleetTF / 100)) + ($DRESDefs['metal'] * ($DefTF / 100));
	$debDefCry = ($DRES['crystal'] * ($FleetTF / 100)) + ($DRESDefs['crystal'] * ($DefTF / 100));

	return array('won' => $won, 'debris' => array('attacker' => array(901 => $debAttMet, 902 => $debAttCry), 'defender' => array(901 => $debDefMet, 902 => $debDefCry)), 'rw' => $ROUND, 'unitLost' => $totalLost);
}