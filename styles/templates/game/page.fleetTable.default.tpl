{block name="title" prepend}{$LNG.lm_fleet}{/block}
{block name="content"}
<div id="page">
	<div id="content">
<div id="ally_content" class="conteiner">

    <div class="gray_stripe">
    	       <a href="game.php?page=reduceresources" class="fleet_reduce ico_reduceresources tooltip" data-tooltip-content="{$LNG.HarRes}"></a>
	   <a href="game.php?page=reducefleet" class="fleet_reduce ico_reducefleet tooltip" data-tooltip-content="Fleet harvester"></a>
        <span style="float:right;color:#6ccdce;"><span class="totalFleetPoints">0</span> Navy selected points</span>
    </div>
    {if !empty($acsData)}
{include file="shared.fleetTable.acsTable.tpl"}
{/if}
    <form action="?page=fleetStep1" method="post">
<input type="hidden" name="galaxy" value="{$targetGalaxy}">
<input type="hidden" name="system" value="{$targetSystem}">
<input type="hidden" name="planet" value="{$targetPlanet}">
<input type="hidden" name="type" value="{$targetType}">
<input type="hidden" name="target_mission" value="{$targetMission}">
        <table class="tablesorter ally_ranks">
    	        <tr>
        	<th colspan="3" class="gray_stripe">Combat Ships</th>     
            <th style="padding:0;" class="gray_stripe">            	
             	<a href="javascript:noShipsBatle();" class="fl_min_ships">Min</a>
                <a href="javascript:maxShipsBatle();" class="fl_max_ships">Max</a>
           	</th>
        </tr>
		
		 {foreach $FleetsOnPlanet as $FleetRow}
                        <tr class="fl_fllets_rows">
            <td class="fl_fllets_rows_img_td"><a href="#" onclick="return Dialog.info({$FleetRow.id})"><img src="./styles/theme/gow/gebaeude/{$FleetRow.id}.gif" alt="{$LNG.tech.{$FleetRow.id}}" /></a></td>
            <td> <span class="tooltip" {if $FleetRow.speed != 0}data-tooltip-content="speed:  {$FleetRow.speed}"{/if} style="cursor:help;">{$LNG.tech.{$FleetRow.id}}</span></td>
            <td id="ship{$FleetRow.id}_value">{$FleetRow.count|number}</td>
            <td class="fl_fllets_rows_input_td">
            	<div class="fl_fllets_rows_input_div">
                	<div onclick="minShip('ship{$FleetRow.id}');" class="fl_fllets_rows_input_min">Min</div>
                    <div onclick="maxShip('ship{$FleetRow.id}');" class="fl_fllets_rows_input_max">Max</div>
                	<input class="countdots fl_fllets_rows_input_countdots" name="ship{$FleetRow.id}" id="ship{$FleetRow.id}_input"  value="0">
               	</div>
            </td>
        </tr>
		{/foreach}
		
		
		    <tr>
        	<th colspan="3" class="gray_stripe">Transport</th>     
            <th style="padding:0;" class="gray_stripe">            	
             	<a href="javascript:noShipsTransports();" class="fl_min_ships">Min</a>
                <a href="javascript:maxShipsTransports();" class="fl_max_ships">Max</a>
           	</th>
        </tr>
		
{foreach $FleetsOnPlanetTransport as $FleetRow}
                        <tr class="fl_fllets_rows">
            <td class="fl_fllets_rows_img_td"><a href="#" onclick="return Dialog.info({$FleetRow.id})"><img src="./styles/theme/gow/gebaeude/{$FleetRow.id}.gif" alt="{$LNG.tech.{$FleetRow.id}}" /></a></td>
            <td> <span class="tooltip" {if $FleetRow.speed != 0}data-tooltip-content="speed:  {$FleetRow.speed}"{/if}  style="cursor:help;">{$LNG.tech.{$FleetRow.id}}</span></td>
            <td id="ship{$FleetRow.id}_value">{$FleetRow.count|number}</td>
            <td class="fl_fllets_rows_input_td">
            	<div class="fl_fllets_rows_input_div">
                	<div onclick="minShip('ship{$FleetRow.id}');" class="fl_fllets_rows_input_min">Min</div>
                    <div onclick="maxShip('ship{$FleetRow.id}');" class="fl_fllets_rows_input_max">Max</div>
                	<input class="countdots fl_fllets_rows_input_countdots" name="ship{$FleetRow.id}" id="ship{$FleetRow.id}_input"  value="0">
               	</div>
            </td>
        </tr>
		{/foreach}
		
                                                        <tr>
        	<th colspan="3" class="gray_stripe">Recyclers</th>     
            <th style="padding:0;" class="gray_stripe">            	
             	<a href="javascript:noShipsProcessors();" class="fl_min_ships">Min</a>
                <a href="javascript:maxShipsProcessors();" class="fl_max_ships">Max</a>
           	</th>
        </tr>
		
{foreach $FleetsOnPlanetProccesors as $FleetRow}
                        <tr class="fl_fllets_rows">
            <td class="fl_fllets_rows_img_td"><a href="#" onclick="return Dialog.info({$FleetRow.id})"><img src="./styles/theme/gow/gebaeude/{$FleetRow.id}.gif" alt="{$LNG.tech.{$FleetRow.id}}" /></a></td>
            <td> <span class="tooltip" {if $FleetRow.speed != 0}data-tooltip-content="speed:  {$FleetRow.speed}"{/if}  style="cursor:help;">{$LNG.tech.{$FleetRow.id}}</span></td>
            <td id="ship{$FleetRow.id}_value">{$FleetRow.count|number}</td>
            <td class="fl_fllets_rows_input_td">
            	<div class="fl_fllets_rows_input_div">
                	<div onclick="minShip('ship{$FleetRow.id}');" class="fl_fllets_rows_input_min">Min</div>
                    <div onclick="maxShip('ship{$FleetRow.id}');" class="fl_fllets_rows_input_max">Max</div>
                	<input class="countdots fl_fllets_rows_input_countdots" name="ship{$FleetRow.id}" id="ship{$FleetRow.id}_input"  value="0">
               	</div>
            </td>
        </tr>
		{/foreach}
		
		
                                                        <tr>
        	<th colspan="3" class="gray_stripe">Special</th>     
            <th style="padding:0;" class="gray_stripe">            	
             	<a href="javascript:noShipsSpecial();" class="fl_min_ships">Min</a>
                <a href="javascript:maxShipsSpecial();" class="fl_max_ships">Max</a>
           	</th>
        </tr>
		
{foreach $FleetsOnPlanetSpecial as $FleetRow}
                        <tr class="fl_fllets_rows">
            <td class="fl_fllets_rows_img_td"><a href="#" onclick="return Dialog.info({$FleetRow.id})"><img src="./styles/theme/gow/gebaeude/{$FleetRow.id}.gif" alt="{$LNG.tech.{$FleetRow.id}}" /></a></td>
            <td> <span class="tooltip" {if $FleetRow.speed != 0}data-tooltip-content="speed:  {$FleetRow.speed}"{/if} style="cursor:help;">{$LNG.tech.{$FleetRow.id}}</span></td>
            <td id="ship{$FleetRow.id}_value">{$FleetRow.count|number}</td>
            <td class="fl_fllets_rows_input_td">
            	<div class="fl_fllets_rows_input_div">
                	<div onclick="minShip('ship{$FleetRow.id}');" class="fl_fllets_rows_input_min">Min</div>
                    <div onclick="maxShip('ship{$FleetRow.id}');" class="fl_fllets_rows_input_max">Max</div>
                	<input class="countdots fl_fllets_rows_input_countdots" name="ship{$FleetRow.id}" id="ship{$FleetRow.id}_input"  value="0">
               	</div>
            </td>
        </tr>
		{/foreach}
		
		
		
                        <tr>     
        	<th colspan="2" style="text-align:center;" class="gray_stripe"><a href="javascript:onSave();" style="color:#666;">Save</a></td>            	      
        	<th colspan="1" style="text-align:center;" class="gray_stripe"><a href="javascript:maxShips();" style="color:#666;">All ships</a></td>        	  
            <th colspan="1" style="text-align:center;" class="gray_stripe"><a href="javascript:noShips();" style="color:#666;">set to zero</a></td>           
        </tr>
        <tr style="display:none;" id="save">
        	<td colspan="3" style="text-align:right; color:#CCC;">Specify the name of the stored group</td>
            <td colspan="1"><input name="save_groop" size="15" maxlength="13" style="width:96%;"></td>
        </tr>    
{if $maxFleetSlots != $activeFleetSlots}		
        <tr>
            <td colspan="4" style="padding:0;">
                <input class="fl_bigbtn_go" type="submit"  value="Continue">
            </td>
        </tr>
               {/if}  
    </table>	
    </form>
    
        
            
    <div class="gray_stripe" style="margin-top:1px;">
        <div class="left_part">	
            <div class="transparent" style="text-align:left;float:left;">{$LNG.fl_fleets} {$activeFleetSlots} / {$maxFleetSlots}</div>
        </div>
        <div class="right_part">
            <div class="transparent" style="text-align:right;float:right;">{$activeExpedition} / {$maxExpedition} {$LNG.fl_expeditions}</div>
        </div>
    </div>
    
	 <table class="tablesorter ally_ranks">
        <tr>
            <td>№</td>
            <td>{$LNG.j}</td>
            <td>{$LNG.st}</td>
            <td>{$LNG.wh}</td>
            <td>{$LNG.ar}</td>
            <td>{$LNG.whe}</td>
            <td>{$LNG.re}</td>
            <td>{$LNG.Re}</td>
            <td>{$LNG.Or}</td>
        </tr>
             {foreach name=FlyingFleets item=FlyingFleetRow from=$FlyingFleetList}
	<tr>
	<td>{$smarty.foreach.FlyingFleets.iteration}</td>
	<td>{$LNG.type_mission.{$FlyingFleetRow.mission}}
	{if $FlyingFleetRow.state == 1}
		<br><a title="{$LNG.fl_returning}">{$LNG.fl_r}</a>
	{else}
		<br><a title="{$LNG.fl_onway}">{$LNG.fl_a}</a>
	{/if}
	</td>
	<td><a class="tooltip_sticky" data-tooltip-content="<table width='100%'><tr><th colspan='2' style='text-align:center;'>{$LNG.fl_info_detail}</th></tr>{foreach $FlyingFleetRow.FleetList as $shipID => $shipCount}<tr><td class='transparent'>{$LNG.tech.{$shipID}}:</td><td class='transparent'>{$shipCount}</td></tr>{/foreach}</table>">{$FlyingFleetRow.amount}</a></td>
	<td><a href="game.php?page=galaxy&amp;galaxy={$FlyingFleetRow.startGalaxy}&amp;system={$FlyingFleetRow.startSystem}">[{$FlyingFleetRow.startGalaxy}:{$FlyingFleetRow.startSystem}:{$FlyingFleetRow.startPlanet}]</a></td>
	<td{if $FlyingFleetRow.state == 0} style="color:lime"{/if}>{$FlyingFleetRow.startTime}</td>
	<td><a href="game.php?page=galaxy&amp;galaxy={$FlyingFleetRow.endGalaxy}&amp;system={$FlyingFleetRow.endSystem}">[{$FlyingFleetRow.endGalaxy}:{$FlyingFleetRow.endSystem}:{$FlyingFleetRow.endPlanet}]</a></td>
	{if $FlyingFleetRow.mission == 4 && $FlyingFleetRow.state == 0}
	<td>-</td>
	{else}
	<td{if $FlyingFleetRow.state != 0} style="color:lime"{/if}>{$FlyingFleetRow.endTime}</td>
	{/if}
	<td id="fleettime_{$smarty.foreach.FlyingFleets.iteration}" class="fleets" data-fleet-end-time="{$FlyingFleetRow.returntime}" data-fleet-time="{$FlyingFleetRow.resttime}">{pretty_fly_time({$FlyingFleetRow.resttime})}</td>
	<td>
	{if !$isVacation && $FlyingFleetRow.state != 1}
		<form action="game.php?page=fleetTable&amp;action=sendfleetback" method="post">
		<input name="fleetID" value="{$FlyingFleetRow.id}" type="hidden">
		<input class="fl_btn_table_fleets_order" value="{$LNG.fl_send_back}" type="submit">
		</form>
		{if $FlyingFleetRow.mission == 1}
		<form action="game.php?page=fleetTable&amp;action=acs" method="post">
		<input name="fleetID" value="{$FlyingFleetRow.id}" type="hidden">
		<input class="fl_btn_table_fleets_order" value="{$LNG.fl_acs}" type="submit">
		</form>
		{/if}
	{else}
	&nbsp;-&nbsp;
	{/if}
	</td>
	</tr>
	{foreachelse}
	<tr>
		<td>-</td>
		<td>-</td>
		<td>-</td>
		<td>-</td>
		<td>-</td>
		<td>-</td>
		<td>-</td>
		<td>-</td>
		<td>-</td>
	</tr>
	{/foreach}
                    </table>
					
					
					
        <div class="gray_stripe" style="border-bottom:0;">
        <span style="cursor:help; color:#6ccdce" class="tooltip" data-tooltip-content="
         <table>
            <tr>
                <th style='text-align:right; padding-right:12px;'>{$LNG.fl_bonus_attack}</th> 
             	<td>+{$bonusAttack} %</td>
            </tr>
            <tr>
                <th style='text-align:right; padding-right:12px;'>{$LNG.fl_bonus_defensive}</th>
                <td>+{$bonusDefensive} %</td>
            </tr>
            <tr>
                <th style='text-align:right; padding-right:12px;'>{$LNG.fl_bonus_shield}</th>
                <td>+{$bonusShield} %</td>
            </tr>
            <tr>
                <th style='text-align:right; padding-right:12px;'>{$LNG.tech.115}</th>
                <td>+{$bonusCombustion} %</td>
            </tr>
            <tr>
                <th style='text-align:right; padding-right:12px;'>{$LNG.tech.117}</th>
                <td>+{$bonusImpulse} %</td>
            </tr>
            <tr>
                <th style='text-align:right; padding-right:12px;'>{$LNG.tech.118}</th>
                <td>+{$bonusHyperspace} %</td>
            </tr>
        </table>
        ">{$LNG.ReTe}</span>
        <span style="float:right;color:#6ccdce;"><span class="totalFleetPoints">0</span> Navy selected points</span>
    </div>
</div>
<script type="text/javascript">
	fleetGroopShip	= [];
	var pointsPrice = { "ship202":0.004,"ship203":0.012,"ship204":0.004,"ship205":0.011,"ship206":0.0265,"ship207":0.058,"ship208":0.04,"ship209":0.018,"ship210":0.001,"ship211":0.12,"ship212":0.0025,"ship213":0.125,"ship214":10.5,"ship215":0.1,"ship216":12.5,"ship217":0.0565,"ship218":500,"ship219":1.8,"ship220":16,"ship221":580,"ship222":360,"ship223":5.625,"ship224":0.15,"ship225":1.8,"ship226":5.2,"ship227":42,"ship228":127,"ship229":0.0105,"ship230":27.75 };
</script>
</div>
</div>
            <div class="clear"></div>            
        </div>

{/block}
{block name="script" append}<script src="scripts/game/fleetTable.js"></script>{/block}