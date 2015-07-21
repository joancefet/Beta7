<?php

class MissionCaseCapture extends MissionFunctions
{
	function __construct($Fleet)
	{
		$this->_fleet	= $Fleet;
	}
	
	function TargetEvent()
	{	
		global $db, $pricelist, $LANG,$CONF, $UNI, $reslist;
		
		$UsedPlanet 	= $GLOBALS['DATABASE']->getFirstCell("SELECT COUNT(*) FROM ".PLANETS." WHERE `id` = '".$this->_fleet['fleet_end_id']."';");
        $Target2			 = $GLOBALS['DATABASE']->uniquequery("SELECT id_owner FROM ".PLANETS." WHERE `id` = '".$this->_fleet['fleet_end_id']."';");        
         $targetPlanet 	= $GLOBALS['DATABASE']->getFirstRow("SELECT * FROM ".PLANETS." WHERE id = '".$this->_fleet['fleet_end_id']."';");      
        if(!$UsedPlanet)
		{
			$this->setState(FLEET_RETURN);
					$this->SaveFleet();
		}elseif($Target2['id_owner'] != 9998)
		{
			$this->setState(FLEET_RETURN);
					$this->SaveFleet();
		}
		else{
			
			$expeditionPoints       = array();

		foreach($reslist['fleet'] as $ID)
		{
			$expeditionPoints[$ID]	= ($pricelist[$ID]['cost'][901] + $pricelist[$ID]['cost'][902]) / 1000;
		}
		
		$expeditionPoints[202] = 12;
		$expeditionPoints[203] = 47;
		$expeditionPoints[204] = 12;
		$expeditionPoints[205] = 110;
		$expeditionPoints[206] = 47;
		$expeditionPoints[207] = 160;
			$fleetRaw 			= explode(";", $this->_fleet['fleet_array']);
			$fleetCapacity		= 0;
			$fleetPoints 		= 0;
				$fleetArray         = array();
				$fleetCapacity  -= $this->_fleet['fleet_resource_metal'] + $this->_fleet['fleet_resource_crystal'] + $this->_fleet['fleet_resource_deuterium'] + $this->_fleet['fleet_resource_darkmatter'];

		foreach ($fleetRaw as $Group)
		{
			if (empty($Group)) continue;

			$Class 						= explode (",", $Group);
			$fleetArray[$Class[0]]		= $Class[1];
			$fleetCapacity 			   += $Class[1] * $pricelist[$Class[0]]['capacity'];
			$fleetPoints   			   += $Class[1] * $expeditionPoints[$Class[0]];
		}
			$LNG		= $this->getLanguage(NULL, $this->_fleet['fleet_owner']);
		    	$Chance	= mt_rand(1,2);
				if($Chance == 1) {
					$Points	= array(-3,-5,-8);
					$Which	= 1;
					$Def	= -3;
					$Name	= $LNG['sys_expe_attackname_1'];
					$Add	= 0;
					$Rand	= array(5,3,2);	
					$DefenderFleetArray	= "204,5;206,3;207,2;";								
				} else { 
					$Points	= array(-4,-6,-9);
					$Which	= 2;
					$Def	= 3;
					$Name	= $LNG['sys_expe_attackname_2'];
					$Add	= 0.1;
					$Rand	= array(4,3,2);
					$DefenderFleetArray	= "205,5;215,3;213,2;";
				}
			
				$messageHTML	= <<<HTML
<div class="raportMessage">
<table>
<tr>
<td colspan="2"><a href="CombatReport.php?raport=%s" target="_blank"><span %s>%s %s (%s)</span></a></td>
</tr>
<tr>
<td>%s</td><td><span %s>%s: %s</span>&nbsp;<span %s>%s: %s</span></td>
</tr>
<tr>
			<td>%s</td><td><span>%s:&nbsp;<span style="color:#a47d7a;">%s</span>&nbsp;</span><span>%s:&nbsp;<span style="color:#5ca6aa;">%s</span>&nbsp;</span><span>%s:&nbsp;<span style="color:#339966;">%s</span></span></td>
		</tr>
<tr>
			<td>%s</td><td><span>%s:&nbsp;<span style="color:#a47d7a;">%s</font>&nbsp;</span><span>%s:&nbsp;<span style="color:#5ca6aa;">%s</span></span></td>
		</tr>
</table>
</div>
HTML;
				//Minize HTML
				$messageHTML	= str_replace(array("\n", "\t", "\r"), "", $messageHTML);
				
				
				$FindSize   = mt_rand(0, 100);
                $maxAttack  = 0;

				if(10 < $FindSize) {
					$Message    = $LNG['sys_expe_attack_'.$Which.'_1_'.$Rand[0]];
					$maxAttack	= 0.3 + $Add + (mt_rand($Points[0], abs($Points[0])) * 0.01);
				} elseif(0 < $FindSize && 10 >= $FindSize) {
					$Message    = $LNG['sys_expe_attack_'.$Which.'_2_'.$Rand[1]];
					$maxAttack	= 0.3 + $Add + (mt_rand($Points[1], abs($Points[1])) * 0.01);
				} elseif(0 == $FindSize) {
					$Message    = $LNG['sys_expe_attack_'.$Which.'_3_'.$Rand[2]];
					$maxAttack	= 0.3 + $Add + (mt_rand($Points[2], abs($Points[2])) * 0.01);
				}
					
				foreach($fleetArray as $ID => $count)
				{
					$DefenderFleetArray	.= $ID.",".round($count * $maxAttack).";";
				}

				$AttackerTechno	= $GLOBALS['DATABASE']->getFirstRow("SELECT * FROM ".USERS." WHERE id = ".$this->_fleet['fleet_owner'].";");
				$DefenderTechno	= array(
					'id' => 0,
					'username' => $Name,
					'military_tech' => (min($AttackerTechno['military_tech'] + $Def,0)),
					'defence_tech' => (min($AttackerTechno['defence_tech'] + $Def,0)),
					'shield_tech' => (min($AttackerTechno['shield_tech'] + $Def,0)),
					'rpg_amiral' => 0,
					'dm_defensive' => 0,
					'dm_attack' => 0,
					'academy_1101' => 0,
					'academy_1102' => 0,
					'academy_1301' => 0,
					'academy_1302' => 0
				);
				
				$fleetID	= $this->_fleet['fleet_id'];
				
				$fleetAttack[$fleetID]['fleetDetail']		= $this->_fleet;
				$fleetAttack[$fleetID]['player']			= $AttackerTechno;
				$fleetAttack[$fleetID]['player']['factor']	= getFactors($fleetAttack[$this->_fleet['fleet_id']]['player'], 'attack', $this->_fleet['fleet_start_time']);
				$fleetAttack[$fleetID]['unit']				= array();
				
				$temp = explode(';', $this->_fleet['fleet_array']);
				foreach ($temp as $temp2)
				{
					$temp2 = explode(',', $temp2);
					
					if ($temp2[0] < 100)
					{
						continue;
					}
					
					if (!isset($fleetAttack[$fleetID]['unit'][$temp2[0]]))
					{
						$fleetAttack[$fleetID]['unit'][$temp2[0]] = 0;
					}
					
					$fleetAttack[$fleetID]['unit'][$temp2[0]] += $temp2[1];
				}
				
				$fleetDefend = array();

				$defRowDef = explode(';', $DefenderFleetArray);
				foreach ($defRowDef as $Element)
				{
					$Element = explode(',', $Element);

					if ($Element[0] < 100) continue;

					if (!isset($fleetDefend[0]['unit'][$Element[0]]))
					    $fleetDefend[0]['unit'][$Element[0]] = 0;

					$fleetDefend[0]['unit'][$Element[0]] += $Element[1];
				}
				
				$fleetDefend[0]['fleetDetail'] = array(
					'fleet_start_galaxy' => $this->_fleet['fleet_end_galaxy'],
					'fleet_start_system' => $this->_fleet['fleet_end_system'],
					'fleet_start_planet' => $this->_fleet['fleet_end_planet'], 
					'fleet_start_type' => 1, 
					'fleet_end_galaxy' => $this->_fleet['fleet_end_galaxy'], 
					'fleet_end_system' => $this->_fleet['fleet_end_system'], 
					'fleet_end_planet' => $this->_fleet['fleet_end_planet'], 
					'fleet_end_type' => 1, 
					'fleet_resource_metal' => 0,
					'fleet_resource_crystal' => 0,
					'fleet_resource_deuterium' => 0
				);
				$fleetDefend[0]['player'] = $DefenderTechno;
				$fleetDefend[0]['player']['factor']	= 0;

				require_once('calculateAttack.php');
			
				$fleetIntoDebris	= $GLOBALS['CONFIG'][$this->_fleet['fleet_universe']]['Fleet_Cdr'];
				$defIntoDebris		= $GLOBALS['CONFIG'][$this->_fleet['fleet_universe']]['Defs_Cdr'];
				
				$combatResult 		= calculateAttack($fleetAttack, $fleetDefend, $fleetIntoDebris, $defIntoDebris);

				$fleetArray = '';
				$totalCount = 0;
				
				$fleetAttack[$fleetID]['unit']	= array_filter($fleetAttack[$fleetID]['unit']);
				foreach ($fleetAttack[$fleetID]['unit'] as $element => $amount)
				{
					$fleetArray .= $element.','.$amount.';';
					$totalCount += $amount;
				}

				if ($totalCount <= 0)
				{
					$this->KillFleet();
				}
				else
				{
					$this->UpdateFleet('fleet_array', substr($fleetArray, 0, -1));
					$this->UpdateFleet('fleet_amount', $totalCount);
				}

				require_once('GenerateReport.php');
			
			
				$debrisRessource	= array(901, 902);
				foreach($debrisRessource as $elementID)
				{
					$debris[$elementID]			= 0;
				}
				
				$stealResource	= array(901 => 0, 902 => 0, 903 => 0);
			
				$raportInfo	= array(
					'thisFleet'				=> $this->_fleet,
					'debris'				=> $debris,
					'stealResource'			=> $stealResource,
					'moonChance'			=> 0,
					'moonDestroy'			=> false,
					'moonName'				=> null,
					'moonDestroyChance'		=> null,
					'moonDestroySuccess'	=> null,
					'fleetDestroyChance'	=> null,
					'fleetDestroySuccess'	=> null,
				);
				
				$raportData	= GenerateReport($combatResult, $raportInfo);
			
				$raportID	= md5(uniqid('', true).TIMESTAMP);
				$sqlQuery	= "INSERT INTO ".RW." SET rid = '".$raportID."', raport = '".serialize($raportData)."', time = '".$this->_fleet['fleet_start_time']."', attacker = '".$this->_fleet['fleet_owner']."';";
				$GLOBALS['DATABASE']->query($sqlQuery);
			
				switch($combatResult['won'])
				{
					case "a":
						$attackClass	= 'style="color:green;"';
						$defendClass	= 'style="color:red;"';
					break;
					case "w":
						$attackClass	= 'raportDraw';
						$defendClass	= 'raportDraw';
					break;
					case "r":
						$attackClass	= 'style="color:red;"';
						$defendClass	= 'style="color:green;"';
					break;
				}

				$message	= sprintf($messageHTML,
					$raportID,
					$attackClass,
					$LNG['sys_mess_attack_report'],
					sprintf(
						$LNG['sys_adress_planet'],
						$this->_fleet['fleet_end_galaxy'],
						$this->_fleet['fleet_end_system'],
						$this->_fleet['fleet_end_planet']
					),
					$LNG['type_planet_short'][$this->_fleet['fleet_end_type']],
					$LNG['sys_lost'],
					$attackClass,
					$LNG['sys_attack_attacker_pos'],
					pretty_number($combatResult['unitLost']['attacker']),
					$defendClass,
					$LNG['sys_attack_defender_pos'],
					pretty_number($combatResult['unitLost']['defender']),
					$LNG['sys_gain'],
					$LNG['tech'][901],
					pretty_number($stealResource[901]),
					$LNG['tech'][902],
					pretty_number($stealResource[902]),
					$LNG['tech'][903],
					pretty_number($stealResource[903]),
					$LNG['sys_debris'],
					$LNG['tech'][901],
					pretty_number($debris[901]), 
					$LNG['tech'][902],
					pretty_number($debris[902])
				);
				

				if($combatResult['won'] == 'a' && $this->_fleet['fleet_end_type'] == 4){
		$GLOBALS['DATABASE']->query("UPDATE ".PLANETS." set `id_owner` = '".$this->_fleet['fleet_owner']."' where `id` = '".$this->_fleet['fleet_end_id']."';");
		}
				
				SendSimpleMessage($this->_fleet['fleet_owner'], 0, $this->_fleet['fleet_end_stay'], 3, $LNG['sys_mess_tower'], $LNG['sys_mess_attack_report'], $message);
      		
		

		$this->setState(FLEET_RETURN);
		$this->SaveFleet();
	}
	}
	function EndStayEvent()
	{
		return;
	}
	
	function ReturnEvent()
	{
		global $LANG;
		$LNG				= $this->getLanguage(NULL, $this->_fleet['fleet_owner']);
	
		$Message         = sprintf( $LNG['sys_tran_mess_owner'], 'Asteroid' , GetStartAdressLink($this->_fleet, ''), pretty_number($this->_fleet['fleet_resource_metal']), $LNG['Metal'], pretty_number($this->_fleet['fleet_resource_crystal']), $LNG['Crystal'], pretty_number($this->_fleet['fleet_resource_deuterium']), $LNG['Deuterium'] );
		SendSimpleMessage($this->_fleet['fleet_owner'], 0, $this->_fleet['fleet_end_time'], 5, $LNG['sys_mess_tower'], $LNG['sys_mess_fleetback'], $Message);

		$this->RestoreFleet();
	}
}
?>