{block name="title" prepend}{$LNG.lm_battlesim}{/block}
{block name="content"}
<div id="page">
	<div id="content">
<div id="ally_content" class="conteiner">
	<form id="form" name="battlesim">
		<input type="hidden" name="slots" id="slots" value="{$Slots + 1}">
		<input type="hidden" name="pid" id="pid" value="{$pid}">
    <div class="gray_stripe" style="padding-right:0;">
    	Combat Simulator
        <input type="button" class="right_flank input_blue" onClick="return add();" value="Add Slot">
        <input type="button" class="right_flank input_blue" style="border-radius:0;margin-right:10px;" onClick="window.location = '?page=battleSimulator&mode=MoonSim';" value="Moon Sim">
    </div>
    <div class="battlesim_ress">
		{$LNG.bs_steal} {$LNG.tech.901}: <input type="text" size="10" value="{if isset($battleinput.0.1.1)}{$battleinput.0.1.1}{else}0{/if}" name="battleinput[0][1][1]"> {$LNG.tech.902}: <input type="text" size="10" value="{if isset($battleinput.0.1.2)}{$battleinput.0.1.2}{else}0{/if}" name="battleinput[0][1][2]"> {$LNG.tech.903}: <input type="text" size="10" value="{if isset($battleinput.0.1.3)}{$battleinput.0.1.3}{else}0{/if}" name="battleinput[0][1][3]">
	</div>
	

					
					
					
	<div id="tabs">
        <ul>
                       {section name=tab start=0 loop=$Slots}<li><a href="#tabs-{$smarty.section.tab.index}">{$LNG.bs_acs_slot} {$smarty.section.tab.index + 1}</a></li>{/section}
                    </ul>
        <div class="clear"></div>
                {section name=content start=0 loop=$Slots}
					<div id="tabs-{$smarty.section.content.index}">
            <table class="battlesim_table battlesim_table_left">
                <tr>
                    <th colspan="2">Technology</th>
                    <th>Attacker</th>
                    <th>Defender</th>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td><span class="reset">reset</span></td>
                    <td><span class="reset">reset</span></td>
                </tr>
                <tr>
                    <td class="battlesim_img_ship"><img src="./styles/theme/gow/gebaeude/109.gif" alt="{$LNG.tech.109}" /></td>
                    <td class="battlesim_name_ship">{$LNG.tech.109}.</td>
                    <td><input type="text" size="10" value="{if isset($battleinput.{$smarty.section.content.index}.0.109)}{$battleinput.{$smarty.section.content.index}.0.109}{else}0{/if}" name="battleinput[{$smarty.section.content.index}][0][109]"></td>
					<td><input type="text" size="10" value="{if isset($battleinput.{$smarty.section.content.index}.1.109)}{$battleinput.{$smarty.section.content.index}.1.109}{else}0{/if}" name="battleinput[{$smarty.section.content.index}][1][109]"></td>
                </tr>
                <tr>
                    <td class="battlesim_img_ship"><img src="./styles/theme/gow/gebaeude/110.gif" alt="{$LNG.tech.110}" /></td>
                    <td class="battlesim_name_ship">{$LNG.tech.110}.</td>
                    <td><input type="text" size="10" value="{if isset($battleinput.{$smarty.section.content.index}.0.110)}{$battleinput.{$smarty.section.content.index}.0.110}{else}0{/if}" name="battleinput[{$smarty.section.content.index}][0][110]"></td>
					<td><input type="text" size="10" value="{if isset($battleinput.{$smarty.section.content.index}.1.110)}{$battleinput.{$smarty.section.content.index}.1.110}{else}0{/if}" name="battleinput[{$smarty.section.content.index}][1][110]"></td>
                </tr>
                <tr>
                    <td class="battlesim_img_ship"><img src="./styles/theme/gow/gebaeude/111.gif" alt="{$LNG.tech.111}" /></td>
                    <td class="battlesim_name_ship">{$LNG.tech.111}.</td>
                    <td><input type="text" size="10" value="{if isset($battleinput.{$smarty.section.content.index}.0.111)}{$battleinput.{$smarty.section.content.index}.0.111}{else}0{/if}" name="battleinput[{$smarty.section.content.index}][0][111]"></td>
					<td><input type="text" size="10" value="{if isset($battleinput.{$smarty.section.content.index}.1.111)}{$battleinput.{$smarty.section.content.index}.1.111}{else}0{/if}" name="battleinput[{$smarty.section.content.index}][1][111]"></td>
                </tr>
				<tr>
                    <td class="battlesim_img_ship"><img src="./styles/theme/gow/gebaeude/120.gif" alt="{$LNG.tech.120}" /></td>
                    <td class="battlesim_name_ship">{$LNG.tech.120}.</td>
                    <td><input type="text" size="10" value="{if isset($battleinput.{$smarty.section.content.index}.0.120)}{$battleinput.{$smarty.section.content.index}.0.120}{else}0{/if}" name="battleinput[{$smarty.section.content.index}][0][120]"></td>
					<td><input type="text" size="10" value="{if isset($battleinput.{$smarty.section.content.index}.1.120)}{$battleinput.{$smarty.section.content.index}.1.120}{else}0{/if}" name="battleinput[{$smarty.section.content.index}][1][120]"></td>
                </tr>
				<tr>
                    <td class="battlesim_img_ship"><img src="./styles/theme/gow/gebaeude/121.gif" alt="{$LNG.tech.121}" /></td>
                    <td class="battlesim_name_ship">{$LNG.tech.121}.</td>
                    <td><input type="text" size="10" value="{if isset($battleinput.{$smarty.section.content.index}.0.121)}{$battleinput.{$smarty.section.content.index}.0.121}{else}0{/if}" name="battleinput[{$smarty.section.content.index}][0][121]"></td>
					<td><input type="text" size="10" value="{if isset($battleinput.{$smarty.section.content.index}.1.121)}{$battleinput.{$smarty.section.content.index}.1.121}{else}0{/if}" name="battleinput[{$smarty.section.content.index}][1][121]"></td>
                </tr>
				<tr>
                    <td class="battlesim_img_ship"><img src="./styles/theme/gow/gebaeude/122.gif" alt="{$LNG.tech.122}" /></td>
                    <td class="battlesim_name_ship">{$LNG.tech.122}.</td>
                    <td><input type="text" size="10" value="{if isset($battleinput.{$smarty.section.content.index}.0.122)}{$battleinput.{$smarty.section.content.index}.0.122}{else}0{/if}" name="battleinput[{$smarty.section.content.index}][0][122]"></td>
					<td><input type="text" size="10" value="{if isset($battleinput.{$smarty.section.content.index}.1.122)}{$battleinput.{$smarty.section.content.index}.1.122}{else}0{/if}" name="battleinput[{$smarty.section.content.index}][1][122]"></td>
                </tr>
				<tr>
                    <td class="battlesim_img_ship"><img src="./styles/theme/gow/gebaeude/199.gif" alt="{$LNG.tech.199}" /></td>
                    <td class="battlesim_name_ship">{$LNG.tech.199}.</td>
                    <td><input type="text" size="10" value="{if isset($battleinput.{$smarty.section.content.index}.0.199)}{$battleinput.{$smarty.section.content.index}.0.199}{else}0{/if}" name="battleinput[{$smarty.section.content.index}][0][199]"></td>
					<td><input type="text" size="10" value="{if isset($battleinput.{$smarty.section.content.index}.1.199)}{$battleinput.{$smarty.section.content.index}.1.199}{else}0{/if}" name="battleinput[{$smarty.section.content.index}][1][199]"></td>
                </tr>
				<tr>
                    <td class="battlesim_img_ship"><img src="./styles/theme/gow/gebaeude/602.jpg" alt="{$LNG.tech.602}" /></td>
                    <td class="battlesim_name_ship">{$LNG.tech.602}.</td>
                    <td><input type="text" size="10" value="{if isset($battleinput.{$smarty.section.content.index}.0.602)}{$battleinput.{$smarty.section.content.index}.0.602}{else}0{/if}" name="battleinput[{$smarty.section.content.index}][0][602]"></td>
					<td><input type="text" size="10" value="{if isset($battleinput.{$smarty.section.content.index}.1.602)}{$battleinput.{$smarty.section.content.index}.1.602}{else}0{/if}" name="battleinput[{$smarty.section.content.index}][1][602]"></td>
                </tr>
         
            </table>                        
            <table class="battlesim_table battlesim_table_right">
            <tr>
                    <th colspan="2">Academy</th>
                    <th>Attacker</th>
                    <th>Defender</th>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td><span class="reset">reset</span></td>
                    <td><span class="reset">reset</span></td>
                </tr>
                <tr>
                    <td class="battlesim_img_ship"><img src="./styles/theme/gow/gebaeude/1103.jpg" alt="double Attack" /></td>
                    <td class="battlesim_name_ship">double Attack.</td>
                    <td><input type="text" size="10" value="{if isset($battleinput.{$smarty.section.content.index}.0.1103)}{$battleinput.{$smarty.section.content.index}.0.1103}{else}0{/if}" name="battleinput[{$smarty.section.content.index}][0][1103]"></td>
					<td><input type="text" size="10" value="{if isset($battleinput.{$smarty.section.content.index}.1.1103)}{$battleinput.{$smarty.section.content.index}.1.1103}{else}0{/if}" name="battleinput[{$smarty.section.content.index}][1][1103]"></td>
                </tr>
                <tr>
                    <td class="battlesim_img_ship"><img src="./styles/theme/gow/gebaeude/1108.jpg" alt="accurate shots" /></td>
                    <td class="battlesim_name_ship">accurate shots.</td>
                    <td><input type="text" size="10" value="{if isset($battleinput.{$smarty.section.content.index}.0.1108)}{$battleinput.{$smarty.section.content.index}.0.1108}{else}0{/if}" name="battleinput[{$smarty.section.content.index}][0][1108]"></td>
					<td><input type="text" size="10" value="{if isset($battleinput.{$smarty.section.content.index}.1.1108)}{$battleinput.{$smarty.section.content.index}.1.1108}{else}0{/if}" name="battleinput[{$smarty.section.content.index}][1][1108]"></td>
                </tr>
                <tr>
                    <td class="battlesim_img_ship"><img src="./styles/theme/gow/gebaeude/1109.jpg" alt="chain reaction" /></td>
                    <td class="battlesim_name_ship">chain reaction.</td>
                    <td><input type="text" size="10" value="{if isset($battleinput.{$smarty.section.content.index}.0.1109)}{$battleinput.{$smarty.section.content.index}.0.1109}{else}0{/if}" name="battleinput[{$smarty.section.content.index}][0][1109]"></td>
					<td><input type="text" size="10" value="{if isset($battleinput.{$smarty.section.content.index}.1.1109)}{$battleinput.{$smarty.section.content.index}.1.1109}{else}0{/if}" name="battleinput[{$smarty.section.content.index}][1][1109]"></td>
                </tr>
				<tr>
                    <td class="battlesim_img_ship"><img src="./styles/theme/gow/gebaeude/1110.jpg" alt="strengthening explosion" /></td>
                    <td class="battlesim_name_ship">strengthening explosion.</td>
                    <td><input type="text" size="10" value="{if isset($battleinput.{$smarty.section.content.index}.0.1110)}{$battleinput.{$smarty.section.content.index}.0.1110}{else}0{/if}" name="battleinput[{$smarty.section.content.index}][0][1110]"></td>
					<td><input type="text" size="10" value="{if isset($battleinput.{$smarty.section.content.index}.1.1110)}{$battleinput.{$smarty.section.content.index}.1.1110}{else}0{/if}" name="battleinput[{$smarty.section.content.index}][1][1110]"></td>
                </tr>
				
				<tr>
                    <td class="battlesim_img_ship"><img src="./styles/theme/gow/gebaeude/1111.jpg" alt="focus" /></td>
                    <td class="battlesim_name_ship">focus.</td>
                    <td><input type="text" size="10" value="{if isset($battleinput.{$smarty.section.content.index}.0.1111)}{$battleinput.{$smarty.section.content.index}.0.1111}{else}0{/if}" name="battleinput[{$smarty.section.content.index}][0][1111]"></td>
					<td><input type="text" size="10" value="{if isset($battleinput.{$smarty.section.content.index}.1.1111)}{$battleinput.{$smarty.section.content.index}.1.1111}{else}0{/if}" name="battleinput[{$smarty.section.content.index}][1][1111]"></td>
                </tr>
				<tr>
                    <td class="battlesim_img_ship"><img src="./styles/theme/gow/gebaeude/1303.jpg" alt="double shields" /></td>
                    <td class="battlesim_name_ship">double shields.</td>
                    <td><input type="text" size="10" value="{if isset($battleinput.{$smarty.section.content.index}.0.1303)}{$battleinput.{$smarty.section.content.index}.0.1303}{else}0{/if}" name="battleinput[{$smarty.section.content.index}][0][1303]"></td>
					<td><input type="text" size="10" value="{if isset($battleinput.{$smarty.section.content.index}.1.1303)}{$battleinput.{$smarty.section.content.index}.1.1303}{else}0{/if}" name="battleinput[{$smarty.section.content.index}][1][1303]"></td>
                </tr>
				<tr>
                    <td class="battlesim_img_ship"><img src="./styles/theme/gow/gebaeude/1308.jpg" alt="Thick armor" /></td>
                    <td class="battlesim_name_ship">Thick armor.</td>
                    <td><input type="text" size="10" value="{if isset($battleinput.{$smarty.section.content.index}.0.1308)}{$battleinput.{$smarty.section.content.index}.0.1308}{else}0{/if}" name="battleinput[{$smarty.section.content.index}][0][1308]"></td>
					<td><input type="text" size="10" value="{if isset($battleinput.{$smarty.section.content.index}.1.1308)}{$battleinput.{$smarty.section.content.index}.1.1308}{else}0{/if}" name="battleinput[{$smarty.section.content.index}][1][1308]"></td>
                </tr>
				<tr>
                    <td class="battlesim_img_ship"><img src="./styles/theme/gow/gebaeude/1311.jpg" alt="seal double shields" /></td>
                    <td class="battlesim_name_ship">seal double shields.</td>
                    <td><input type="text" size="10" value="{if isset($battleinput.{$smarty.section.content.index}.0.1311)}{$battleinput.{$smarty.section.content.index}.0.1311}{else}0{/if}" name="battleinput[{$smarty.section.content.index}][0][1311]"></td>
					<td><input type="text" size="10" value="{if isset($battleinput.{$smarty.section.content.index}.1.1311)}{$battleinput.{$smarty.section.content.index}.1.1311}{else}0{/if}" name="battleinput[{$smarty.section.content.index}][1][1311]"></td>
                </tr>
         
            </table>
            <div class="clear"></div>
            <table class="battlesim_table battlesim_table_left">
                <tr>
                    <th colspan="2">Fleets</th>
                    <th>Attacker</th>
                    <th>Defender</th>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td><span class="reset">reset</span></td>
                    <td><span class="reset">reset</span></td>
                </tr>
                                      
				{foreach $fleetList as $id}
									  <tr>
                	<td class="battlesim_img_ship"><img src="./styles/theme/gow/gebaeude/{$id}.gif" alt="{$LNG.tech.$id}" /></td>
                    <td class="battlesim_name_ship">
					{if $id == 229 || $id == 224 || $id == 230}
					<span style="color:#32CD32">{/if}
					{$LNG.tech.$id}
					{if $id == 229 || $id == 224 || $id == 230}</span>{/if}</td>
                    <td><input class="fleetAttCountBS" type="text" size="10" value="{if isset($battleinput.{$smarty.section.content.index}.0.$id)}{$battleinput.{$smarty.section.content.index}.0.$id}{else}0{/if}" name="battleinput[{$smarty.section.content.index}][0][{$id}]"></td>
											<td><input class="fleetDefCountBS" type="text" size="10" value="{if isset($battleinput.{$smarty.section.content.index}.1.$id)}{$battleinput.{$smarty.section.content.index}.1.$id}{else}0{/if}" name="battleinput[{$smarty.section.content.index}][1][{$id}]"></td>
                </tr>
                       {/foreach}    
                                            </table>      

{if $smarty.section.content.index == 0}											
                        <table class="battlesim_table battlesim_table_right">
                <tr>
                    <th colspan="2">Defense</th>
                    <th>Defender</th>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td><span class="reset">reset</span></td>
                </tr>
                            {foreach $defensiveList as $id}
									  <tr>
                	<td class="battlesim_img_ship"><img src="./styles/theme/gow/gebaeude/{$id}.gif" alt="{$LNG.tech.$id}" /></td>
                    <td class="battlesim_name_ship">
					{if $id == 420 || $id == 421 || $id == 422}<span style="color:#32CD32">{/if}
					{$LNG.tech.$id}
					{if $id == 420 || $id == 421 || $id == 422}</span>{/if}
					</td>
                    <td><input class="fleetDefCountBS" type="text" size="10" value="{if isset($battleinput.{$smarty.section.content.index}.1.$id)}{$battleinput.{$smarty.section.content.index}.1.$id}{else}0{/if}" name="battleinput[{$smarty.section.content.index}][1][{$id}]"></td>
                </tr>
                       {/foreach}    
                   
                                        </table>{/if}
                        <div class="clear"></div>
        </div>{/section}
        </div>
	 <div class="gray_stripe">
    	<span class="battlesim_att_points"><span class="totalAttPoints">0</span> points attacker</span>
        <span class="battlesim_def_points"><span class="totalDefPoints">0</span> defending points</span>
    </div>	
    <div id="submit">
            <input type="button" onClick="return check();" value="Simulate">            
    </div>
    <div id="wait" style="display:none;">
        {$LNG.bs_wait}
    </div>
</form>
</div>
</div>
</div>
            <div class="clear"></div>            
        </div>
		<script type="text/javascript">
	var pointsPrice = { "battleinput[0][0][202]":0.004,"battleinput[0][1][202]":0.004,"battleinput[0][0][203]":0.012,"battleinput[0][1][203]":0.012,"battleinput[0][0][204]":0.004,"battleinput[0][1][204]":0.004,"battleinput[0][0][205]":0.011,"battleinput[0][1][205]":0.011,"battleinput[0][0][206]":0.0265,"battleinput[0][1][206]":0.0265,"battleinput[0][0][207]":0.058,"battleinput[0][1][207]":0.058,"battleinput[0][0][208]":0.04,"battleinput[0][1][208]":0.04,"battleinput[0][0][209]":0.018,"battleinput[0][1][209]":0.018,"battleinput[0][0][210]":0.001,"battleinput[0][1][210]":0.001,"battleinput[0][0][211]":0.12,"battleinput[0][1][211]":0.12,"battleinput[0][0][212]":0.0025,"battleinput[0][1][212]":0.0025,"battleinput[0][0][213]":0.125,"battleinput[0][1][213]":0.125,"battleinput[0][0][214]":10.5,"battleinput[0][1][214]":10.5,"battleinput[0][0][215]":0.1,"battleinput[0][1][215]":0.1,"battleinput[0][0][216]":12.5,"battleinput[0][1][216]":12.5,"battleinput[0][0][217]":0.0565,"battleinput[0][1][217]":0.0565,"battleinput[0][0][218]":500,"battleinput[0][1][218]":500,"battleinput[0][0][219]":1.8,"battleinput[0][1][219]":1.8,"battleinput[0][0][220]":16,"battleinput[0][1][220]":16,"battleinput[0][0][221]":580,"battleinput[0][1][221]":580,"battleinput[0][0][222]":360,"battleinput[0][1][222]":360,"battleinput[0][0][223]":5.625,"battleinput[0][1][223]":5.625,"battleinput[0][0][224]":0.15,"battleinput[0][1][224]":0.15,"battleinput[0][0][225]":1.8,"battleinput[0][1][225]":1.8,"battleinput[0][0][226]":5.2,"battleinput[0][1][226]":5.2,"battleinput[0][0][227]":42,"battleinput[0][1][227]":42,"battleinput[0][0][228]":127,"battleinput[0][1][228]":127,"battleinput[0][0][229]":0.0105,"battleinput[0][1][229]":0.0105,"battleinput[0][0][230]":27.75,"battleinput[0][1][230]":27.75,"battleinput[0][1][401]":0.002,"battleinput[0][1][402]":0.002,"battleinput[0][1][403]":0.008,"battleinput[0][1][404]":0.037,"battleinput[0][1][405]":0.008,"battleinput[0][1][406]":0.13,"battleinput[0][1][407]":2,"battleinput[0][1][408]":10,"battleinput[0][1][409]":1000,"battleinput[0][1][410]":30,"battleinput[0][1][411]":7500,"battleinput[0][1][502]":0.01,"battleinput[0][1][503]":0.025,"battleinput[0][1][412]":16.5,"battleinput[0][1][413]":46,"battleinput[0][1][414]":160,"battleinput[0][1][415]":470,"battleinput[0][1][416]":0.4,"battleinput[0][1][417]":0.575,"battleinput[0][1][418]":4.1,"battleinput[0][1][419]":83.5,"battleinput[0][1][420]":0.0085,"battleinput[0][1][421]":0.38,"battleinput[0][1][422]":25.75 };
</script>
{/block}