{block name="title" prepend}{$LNG.lm_fleet}{/block}
{block name="content"}
<div id="page">
<div id="content">
<div id="ally_content" class="conteiner">
    <div class="gray_stripe">
    	{$LNG.fl_send_fleet}
    </div>
<form action="game.php?page=fleetStep2" method="post" onsubmit="return CheckTarget()" id="form">
	<input type="hidden" name="token" value="{$token}">
	<input type="hidden" name="fleet_group" value="0">
	<input type="hidden" name="target_mission" value="{$mission}">
	<table class="tablesorter ally_ranks">
		<tr style="height:20px;">
			<td style="text-align:right;">{$LNG.fl_destiny}</td>
			<td>
			<input type="text" id="galaxy" name="galaxy" size="3" maxlength="2" onkeyup="updateVars()" value="{$galaxy}">
				<input type="text" id="system" name="system" size="3" maxlength="4" onkeyup="updateVars()" value="{$system}">
				<input type="text" id="planet" name="planet" size="3" maxlength="2" onkeyup="updateVars()" value="{$planet}">
				

				<select id="type" name="type" onchange="updateVars()">
					{html_options options=$typeSelect selected=$type}
				</select>
			</td>
		</tr>
		<tr style="height:20px;">
			<td style="text-align:right;">{$LNG.fl_fleet_speed}</td>
			<td>
				<select id="speed" name="speed" onChange="updateVars()">
					{html_options options=$speedSelect}
				</select> %
			</td>
		</tr>
		<tr style="height:20px;">
			<td style="text-align:right;">{$LNG.fl_distance}</td>
			<td id="distance">-</td>
		</tr>
		<tr style="height:20px;">
			<td style="text-align:right;">{$LNG.fl_flying_time}</th>
			<td id="duration">-</td>
		</tr>
		<tr style="height:20px;">
			<td style="text-align:right;">{$LNG.fl_flying_arrival}</th>
			<td id="arrival">-</td>
		</tr>
		<tr style="height:20px;">
			<td style="text-align:right;">{$LNG.fl_flying_return}</th>
			<td id="return">-</td>
		</tr>
		<tr style="height:20px;">
			<td style="text-align:right;">{$LNG.fl_fuel_consumption}</td>
			<td id="consumption">-</td>
		</tr>
		<tr style="height:20px;">
			<td style="text-align:right;">{$LNG.fl_max_speed}</td>
			<td id="maxspeed">-</td>
		</tr>
		<tr style="height:20px;">
			<td style="text-align:right;">{$LNG.fl_cargo_capacity}</td>
			<td id="storage">-</td>
		</tr>
	</table>
	    
			
	
	
	
	   
    <div class="gray_stripe build_band">
    	{$LNG.fl_my_planets}
    </div>
	
	{foreach $colonyList as $ColonyRow}
                <div class="fleet_my_planet_kord" onclick="setTarget({$ColonyRow.galaxy},{$ColonyRow.system},{$ColonyRow.planet},{$ColonyRow.type});updateVars();">
            <span class="fleet_my_planet_kord_kord">[{$ColonyRow.galaxy}:{$ColonyRow.system}:{$ColonyRow.planet}]</span>
            <span class="fleet_my_planet_kord_name">{$ColonyRow.name} {if $ColonyRow.type == 3}{$LNG.fl_moon_shortcut}{/if}</span>
        </div>
               {foreachelse}
{/foreach}			   
				   
				   
		{if $ACSList}
<table class="tablesorter ally_ranks" style="table-layout: fixed;">
		<tr style="height:20px;">
			<th colspan="5">{$LNG.fl_acs_title}</th>
		</tr>
		{foreach $ACSList as $ACSRow}
		{if ($ACSRow@iteration % $themeSettings.ACS_ROWS_ON_FLEET1) === 1}<tr style="height:20px;">{/if}
		
			<td><a href="javascript:setACSTarget({$ACSRow.galaxy},{$ACSRow.system},{$ACSRow.planet},{$ACSRow.planet_type},{$ACSRow.id});">{$ACSRow.name} - [{$ACSRow.galaxy}:{$ACSRow.system}:{$ACSRow.planet}]</a></td>
		
		{if $ACSRow@last && ($ACSRow@iteration % $themeSettings.ACS_ROWS_ON_FLEET1) !== 0}
		{$to = $themeSettings.ACS_ROWS_ON_FLEET1 - ($ACSRow@iteration % $themeSettings.ACS_ROWS_ON_FLEET1)}
		{for $foo=1 to $to}<td>&nbsp;</td>{/for}
		{/if}
		{if ($ACSRow@iteration % $themeSettings.ACS_ROWS_ON_FLEET1) === 0}</tr>{/if}
		{/foreach}
	</table>
	
	{/if}

	
                                                                        <div class="clear"></div>
	    <div class="gray_stripe build_band" style="padding-right:0; margin-top:2px;">
    	<input class="bottom_band_submit" type="submit" value=" Continue ">
    </div>
	</form>
</div>
	
	    
	    




	    
</form>
</div>
</form>
<script type="text/javascript">
data			= {$fleetdata|json};
shortCutRows	= {$themeSettings.SHORTCUT_ROWS_ON_FLEET1};
fl_no_shortcuts	= '{$LNG.fl_no_shortcuts}';
</script>
</div>
</div>
            <div class="clear"></div>            
        </div>

{/block}