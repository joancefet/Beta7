{block name="title" prepend}{$pageTitle}{/block}
{block name="content"}
<link rel="stylesheet" type="text/css" href="./styles/css/battle.css" />
<script type="text/javascript">
	$(document).ready(function(){
		$('.batle_scan').click(function(){ 
			$(this).toggleClass('batle_scan_active');
			$(this).parent().parent().find(".batle_mem_content").stop(true, false).slideToggle(300);
		});		
	});
	function RoundScan(idSelect)
	{
		$(String(idSelect)).find(".batle_scan").stop(true, false).toggleClass('batle_scan_active');
		$(String(idSelect)).find(".batle_mem_content").stop(true, false).slideToggle(300);
	};
</script>


	<div id="body"><div id="popup_conteirer">
	<div id="content">

<div id="raports">
{foreach $Raport.rounds as $Round => $RoundInfo}
<div class="batle_round" id="round_{$Round}">
    <div class="batle_part_att">
    	
		
		{foreach $RoundInfo.attacker as $Player}
		{$PlayerInfo = $Raport.players[$Player.userID]}   		        
        <div class="{if $RoundInfo@last}{if $Raport.result == "r"}batle_mem batle_mem_die{else}batle_mem{/if}{/if}">
            <div class="batle_mem_header">
            	<span>{$PlayerInfo.name}</span> 
                {if isset($Info)}([XX:XX:XX]){else}([{$PlayerInfo.koords[0]}:{$PlayerInfo.koords[1]}:{$PlayerInfo.koords[2]}]{if isset($PlayerInfo.koords[3])} ({$LNG.type_planet_short[$PlayerInfo.koords[3]]}){/if}){/if}<br>
				            {$LNG.sys_ship_weapon} <span>+{$PlayerInfo.tech[0]}%</span> •
                	{$LNG.sys_ship_shield} <span>+{$PlayerInfo.tech[1]}%</span> • 
                	{$LNG.sys_ship_armour} <span>+{$PlayerInfo.tech[2]}%</span> 
					 
                    <div class="batle_scan {if $RoundInfo@last}batle_scan_active{/if}"></div>
                            </div>
                        <div class="batle_mem_content" {if $RoundInfo@last}style="display:block;"{/if}>
						{foreach $Player.ships as $ShipID => $ShipData}	
   		    	                <div class="batle_unit">
                    <div class="img_unit tooltip" style="cursor:help !important" data-tooltip-content="
                   <table>
                    	<tr>
                            <td style='color:#FC0; text-align:right !important;'>{$LNG.sys_ship_weapon}:</td>
                            <td style='text-align:right !important;'><span >{$ShipData[1]|number}</span></td>
                        </tr>
                        <tr>
                            <td style='color:#FC0; text-align:right !important;'>{$LNG.sys_ship_shield}:</td>
                            <td style='text-align:right !important;'><span >{$ShipData[2]|number}</span></td>
                        </tr>
                        <tr>
                            <td style='color:#FC0; text-align:right !important;'>{$LNG.sys_ship_armour}:</td>
                            <td style='text-align:right !important;'>{$ShipData[3]|number}</td>
                        </tr>
                    </table>
                    ">
                        <img alt="" title="" src="styles/theme/gow/gebaeude/{$ShipID}.gif" width="60px" height="60px" />
						{if $ShipData[5] != 1}<div class="ico_ka"></div>{/if}
                        {if $ShipData[6] != 1}<div class="ico_kd"></div>{/if}
						
                                                                    </div>
                    <span class="name_unit">{$LNG.shortNames.{$ShipID}}</span><br/>
                    <span class="tooltip" data-real="{$ShipData[0]|number}" data-tooltip-content="{$ShipData[0]|number}">{pretty_number($ShipData[0])}</span><br/>
                    <span class="destruct_unit">{if $ShipData[4] != 0 }-{/if}{$ShipData[4]|number}</span>
                </div>{/foreach}
               	                <div class="clear"></div>
            </div>
              
        </div>
  {/foreach}      		        
      
            </div>
    <div class="batle_part_def">
    	{foreach $RoundInfo.defender as $Player}
		{$PlayerInfo = $Raport.players[$Player.userID]}  		      
        <div class="{if $RoundInfo@last}{if $Raport.result == "a"}batle_mem batle_mem_die{else}batle_mem{/if}{/if}">
            <div class="batle_mem_header">
            	<span>{$PlayerInfo.name}</span> 
                {if isset($Info)}([XX:XX:XX]){else}([{$PlayerInfo.koords[0]}:{$PlayerInfo.koords[1]}:{$PlayerInfo.koords[2]}]{if isset($PlayerInfo.koords[3])} ({$LNG.type_planet_short[$PlayerInfo.koords[3]]}){/if}){/if}<br>
				          {$LNG.sys_ship_weapon} <span>+{$PlayerInfo.tech[0]}%</span> •
                	{$LNG.sys_ship_shield} <span>+{$PlayerInfo.tech[1]}%</span> • 
                	{$LNG.sys_ship_armour} <span>+{$PlayerInfo.tech[2]}%</span> 
					

					
                    <div class="batle_scan {if $RoundInfo@last}batle_scan_active{/if}"></div>
                                
            </div>
                       <div class="batle_mem_content" {if $RoundInfo@last}style="display:block;"{/if}>
						{foreach $Player.ships as $ShipID => $ShipData}	
   		    	                <div class="batle_unit">
                    <div class="img_unit tooltip" style="cursor:help !important" data-tooltip-content="
                   <table>
                    	<tr>
                            <td style='color:#FC0; text-align:right !important;'>{$LNG.sys_ship_weapon}:</td>
                            <td style='text-align:right !important;'><span >{$ShipData[1]|number}</span></td>
                        </tr>
                        <tr>
                            <td style='color:#FC0; text-align:right !important;'>{$LNG.sys_ship_shield}:</td>
                            <td style='text-align:right !important;'><span >{$ShipData[2]|number}</span></td>
                        </tr>
                        <tr>
                            <td style='color:#FC0; text-align:right !important;'>{$LNG.sys_ship_armour}:</td>
                            <td style='text-align:right !important;'>{$ShipData[3]|number}</td>
                        </tr>
                    </table>
                    ">
                        <img alt="" title="" src="styles/theme/gow/gebaeude/{$ShipID}.gif" width="60px" height="60px" />
						{if $ShipData[5] != 1}<div class="ico_ka"></div>{/if}
                        {if $ShipData[6] != 1}<div class="ico_kd"></div>{/if}
						
                                                                    </div>
                    <span class="name_unit">{$LNG.shortNames.{$ShipID}}</span><br/>
                     <span class="tooltip" data-real="{$ShipData[0]|number}" data-tooltip-content="{$ShipData[0]|number}">{pretty_number($ShipData[0])}</span><br/>
                    <span class="destruct_unit">{if $ShipData[4] != 0}-{/if}{$ShipData[4]|number}</span>
                </div>{/foreach}
               	  
                <div class="clear"></div>
            </div>
             
        </div>
{/foreach}		
        </div>
		
	<div class="batle_part_sep">
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
</div><!--/round-->
<div class="batle_round_info" onclick="RoundScan('#round_{$Round}');">
    <h2>{$Round}</h2>
    <h3>Round</h3>
</div>


{if !$RoundInfo@last}
<div class="band_att tooltip" style="cursor:help !important" data-tooltip-content="
	{$LNG.fleet_attack_1} {$RoundInfo.info[0]|number} {$LNG.fleet_attack_2} {$RoundInfo.info[3]|number} {$LNG.damage}<br> 
{$LNG.fleet_defs_1} {$RoundInfo.info[2]|number} {$LNG.fleet_defs_2} {$RoundInfo.info[1]|number} {$LNG.damage}">
    <div class="ico_part">
        <img alt="" title="" src="styles/images/att.png" />
    </div>
    <div class="ico_part" style="left:auto; right:5px;">
        <img alt="" title="" src="styles/images/def.png" />
    </div>
    <div class="left_part_att" style="width:99.800399201597%">
        <div class="bsorb" style="width:4%">
            <div class="bsorb_end"></div>
            <div class="bsorb_mid"></div>
        </div>    </div>
    <div class="left_part_def" style="width:0%">
            </div>
</div>
{/if}

{/foreach}

	<div class="batle_part_sep">
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
</div><!--/round-->

<!--ITOG-->


	<div class="batle_round_info" onclick="RoundScan('#round_2');">
               {if $Raport.result == "a"}
 <h2 style="color:#45a000">{$LNG.sys_attacker_won}</h2>
{elseif $Raport.result == "r"}
<h2>{$LNG.sys_defender_won}</h2>
{else}
<h2 style="color:#c77602">{$LNG.sys_both_won}</h2>
{/if}
        	</div>
    
    <div class="band_itog tooltip" style="cursor:help !important" data-tooltip-content="
    	{$LNG.sys_attacker_lostunits} {$Raport['units'][0]|number} {$LNG.sys_units}<br>
{$LNG.sys_defender_lostunits} {$Raport['units'][1]|number} {$LNG.sys_units}
    ">
        <div class="ico_part">
            <img alt="" title="" src="styles/images/att.png" />
        </div>
        <div class="ico_part" style="left:auto; right:5px;">
            <img alt="" title="" src="styles/images/def.png" />
        </div>
        <div class="left_part_att" style="width:10.163001955668%">
        </div>
        <div class="left_part_def" style="width:89.836985695606%">
        </div>
    </div>
    
    <div class="batle_text">    
            
        {if $Raport.result == "a"}
{$LNG.sys_stealed_ressources} {foreach $Raport.steal as $elementID => $amount}{$amount|number} {$LNG.tech.$elementID}{if ($amount@index + 2) == count($Raport.steal)} {$LNG.sys_and} {elseif !$amount@last}, {/if}{/foreach}
{elseif $Raport.result == "r"}
{else}
{/if}
<br>
       
 {$LNG.debree_field_1} {foreach $Raport.debris as $elementID => $amount}{$amount|number} {$LNG.tech.$elementID}{if ($amount@index + 2) == count($Raport.debris)} {$LNG.sys_and} {elseif !$amount@last}, {/if}{/foreach} {$LNG.debree_field_2}<br>  
          {if $Raport.mode == 1}
	{* Destruction *}
	{if $Raport.moon.moonDestroySuccess == -1}
		{* Attack not win *}
		{$LNG.sys_destruc_stop}<br>
	{else}
		{* Attack win *}
		{sprintf($LNG.sys_destruc_lune, "{$Raport.moon.moonDestroyChance}")}<br>{$LNG.sys_destruc_mess1}
		{if $Raport.moon.moonDestroySuccess == 1}
			{* Destroy success *}
			{$LNG.sys_destruc_reussi}
		{elseif $Raport.moon.moonDestroySuccess == 0}
			{* Destroy failed *}
			{$LNG.sys_destruc_null}			
		{/if}
		<br>
		{sprintf($LNG.sys_destruc_rip, "{$Raport.moon.fleetDestroyChance}")}
		{if $Raport.moon.fleetDestroySuccess == 1}
			{* Fleet destroyed *}
			<br>{$LNG.sys_destruc_echec}
		{/if}			
	{/if}
{else}
	{* Normal Attack *}
	{$LNG.sys_moonproba} {$Raport.moon.moonChance} %<br>
	{if !empty($Raport.moon.moonName)}
		{if isset($Info)}
			{* Moon created (HoF Mode) *}
			{sprintf($LNG.sys_moonbuilt, "{$Raport.moon.moonName}", "XX", "XX", "XX")}
		{else}
			{* Moon created *}
			{sprintf($LNG.sys_moonbuilt, "{$Raport.moon.moonName}", "{$Raport.koords[0]}", "{$Raport.koords[1]}", "{$Raport.koords[2]}")}
		{/if}
	{/if}
{/if}
                
    {$Raport.additionalInfo}<br>
    </div>  
</div>
</div>
</div>
            <div class="clear"></div>            
        </div>

{/block} 