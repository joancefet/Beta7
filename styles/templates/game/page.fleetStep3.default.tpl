{block name="title" prepend}{$LNG.lm_fleet}{/block}
{block name="content"}
<div id="page">
	<div id="content">
<div id="ally_content" class="conteiner" style="width:450px;">
    <div class="gray_stripe" style="border-bottom:0;">
    	{$LNG.fl_fleet_sended}
    </div>
   <table class="tablesorter ally_ranks">
        <tbody><tr style="height:20px">
            <td colspan="2">{$LNG.fl_mission}</td>
            <td>{$LNG.type_mission.{$targetMission}}</td>
        </tr>
        <tr style="height:20px">
            <td colspan="2">{$LNG.fl_distance}</td>
            <td>{$distance|number}</td>
        </tr>
        <tr style="height:20px">
            <td colspan="2">{$LNG.fl_fleet_speed}</td>
            <td>{$MaxFleetSpeed|number}</td>
        </tr>
        <tr style="height:20px">
            <td colspan="2">{$LNG.fl_fuel_consumption}</td>
            <td>{$consumption|number}</td>
        </tr>
        <tr style="height:20px">
            <td colspan="2">{$LNG.fl_from}</td>
            <td>{$from}</td>
        </tr>
        <tr style="height:20px">
            <td colspan="2">{$LNG.fl_destiny}</td>
            <td>{$destination}</td>
        </tr>
        <tr style="height:20px">
            <td colspan="2">{$LNG.fl_arrival_time}</td>
            <td>{$fleetStartTime}</td>
        </tr>
        <tr style="height:20px">
            <td colspan="2">{$LNG.fl_arrival_time}</td>
            <td>{$fleetEndTime}</td>
        </tr>
        <tr style="height:20px">
            <th class="gray_stripe" colspan="3">Fleets</th>
        </tr>
		{foreach $FleetList as $ShipID => $ShipCount}
                <tr class="fl_fllets_rows">
        	<td class="fl_fllets_rows_img_td"><img src="./styles/theme/gow/gebaeude/{$ShipID}.gif" alt="{$LNG.tech.$ShipID}" height="30" width="30"></td>
            <td>{$LNG.tech.{$ShipID}}</td>
            <td>{$ShipCount|number}</td>
        </tr>
		{/foreach}
		
            </tbody></table>
</div>
</div>
</div>
            <div class="clear"></div>            
        </div>
{/block}