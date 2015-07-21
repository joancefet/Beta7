<div class="spyRaport">
 <div class="spyRaportHead">
 <a href="game.php?page=galaxy&amp;galaxy={$targetPlanet.galaxy}&amp;system={$targetPlanet.system}">{$title}</a> </div> 


{foreach $spyData as $Class => $elementIDs}
	<div class="spyRaportContainerHead spyRaportContainerHeadClass{$Class}">
	<span>{$LNG.tech.$Class} </span></div>
	<div class="spyRaportContainerCell" style=" width:100%; height:auto; float:none; clear:both; padding:0; line-height:13px !important; border:0;"> 
	<table class="tablesorter ally_ranks">
	{foreach $elementIDs as $elementID => $amount}
	{if ($amount@iteration % 3) === 1}{/if}
	
	<div class="spyRaportContainerCellImg">
	 <img class="ico_res_spio" src="styles/theme/gow/gebaeude/{$elementID}.gif" title="{$LNG.tech.$elementID}" height="35" width="35"> </a> </div> 
	 <div class="spyRaportContainerCell">
                    <span class="res_current tooltip" data-real="{$amount|number}" data-tooltip-content="{$amount|number}" name="{$amount|number}">{pretty_number($amount)}</span>
                </div>

	  
	 
	 {if ($amount@iteration % 3) === 0}</div>  {/if}
	 
	
	{/foreach}
	</table>
	</div>
	{/foreach}




			<div class="spyRaportFooter">
		<a href="game.php?page=fleetTable&amp;galaxy={$targetPlanet.galaxy}&amp;system={$targetPlanet.system}&amp;planet={$targetPlanet.planet}&amp;planettype={$targetPlanet.planet_type}&amp;target_mission=1">{$LNG.type_mission.1}</a>
		<br>{if $targetChance >= $spyChance}{$LNG.sys_mess_spy_destroyed}{else}{sprintf($LNG.sys_mess_spy_lostproba, $targetChance)}{/if}
		{if $isBattleSim}<br><a href="game.php?page=battleSimulator{foreach $spyData as $Class => $elementIDs}{foreach $elementIDs as $elementID => $amount}&amp;im[{$elementID}]={$amount}{/foreach}{/foreach}&pid={$targetPlanet.id_owner}">{$LNG.fl_simulate}</a>{/if}
		<!--Inizio gestione pianeta :)-->
		<div class="spyRaportContainerHead">Need for plundering</div>
        
   <br>
				<table class="tablesorter ally_ranks">
			<tr><th style="width:33%">{$fleet_202}</th><th style="width:33%">{$fleet_203}</th></tr>
<tr><th style="width:33%">{$fleet_209}</th><th style="width:33%">{$fleet_219}</th></tr>
        </table>
	</div>
</div>