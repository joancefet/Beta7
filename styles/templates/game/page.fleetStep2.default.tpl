{block name="title" prepend}{$LNG.lm_fleet}{/block}
{block name="content"}
<div id="page">
	<div id="content">
<div id="ally_content" class="conteiner">
    <!--<div class="gray_stripe">
    	1:2537:8 - Планета
    </div>-->
    <form action="game.php?page=fleetStep3" method="post">
	<input type="hidden" name="token" value="{$token}">  
   	<table class="tablesorter ally_ranks">
		<tr>
			<th class="gray_stripe">{$LNG.fl_mission}</th>
        	<th class="gray_stripe">{$LNG.fl_resources} <a style="float:right; color:#666;" href="javascript:maxResources()">Todos os recursos</a></th>
        </tr>
		<tr class="left top">
			<td style="padding:0;" > 
            	<div class="fl_mission_selector">      		
                 {foreach $MissionSelector as $MissionID} 
                	<div class="fl_mission_selector_row">            
                		<input  id="radio_{$MissionID}" type="radio" name="mission" value="{$MissionID}" >
                		<label  for="radio_{$MissionID}">{$LNG.type_mission.{$MissionID}}</label>
                    </div>
					{if $MissionID == 15} <div class="fl_mission_selector_caution">{$LNG.fl_expedition_alert_message}</div>  {/if}     
                {if $MissionID == 11} <div class="fl_mission_selector_caution">{$LNG.fl_dm_alert_message}</div>    {/if}   
                     {/foreach}                                            
                

				</div>
        	</td>
        	<td style="padding:0; width:300px;">
				<table class="tablesorter ally_ranks fl_res_table">
                    <tr>
        				<td style="padding:0;">                        
                            <div class="fl_res_rows_input_div">
                            	<img class="fl_res_rows_ico_img" alt="Металл"  title="Металл" src="styles/images/metall.gif" />
                                <div onclick="minResource('metal');" class="fl_res_rows_input_min">Min</div>
                                <div onclick="maxResource('metal');" class="fl_res_rows_input_max">Max</div>                                
                                <input name="metal" onchange="calculateTransportCapacity();" type="text">
                            </div>
                        </td>
        			</tr>
                    <tr>
        				<td style="padding:0;">
                        	<div class="fl_res_rows_input_div">
                            	<img class="fl_res_rows_ico_img" alt="Кристалл"  title="Кристалл" src="styles/images/kristall.gif" />
                                <div onclick="minResource('crystal');" class="fl_res_rows_input_min">Min</div>
                                <div onclick="maxResource('crystal');" class="fl_res_rows_input_max">Max</div>                                
                                <input name="crystal" onchange="calculateTransportCapacity();" type="text">
                            </div>
                        </td>
        			</tr>
                    <tr>
        				<td style="padding:0;">
                        	<div class="fl_res_rows_input_div">
                            	<img class="fl_res_rows_ico_img" alt="Дейтерий"  title="Кристалл" src="styles/images/deuterium.gif" />
                                <div onclick="minResource('deuterium');" class="fl_res_rows_input_min">Min</div>
                                <div onclick="maxResource('deuterium');" class="fl_res_rows_input_max">Max</div>                                
                                <input name="deuterium" onchange="calculateTransportCapacity();" type="text">
                            </div>
                       	</td>
        			</tr>
                    <tr>
        				<td style="text-align:left">{$LNG.fl_resources_left}: <span id="remainingresources">-</span></td>
        				
        			</tr>
                    <tr>
        				<td style="text-align:left">
                        	{$LNG.fl_fuel_consumption}: <span style="color:#096;">{$consumption}</span>
                            <span id="consumption" class="consumption" style="display:none;">{$consumption}</span>
                        </td>
        			</tr>
					 {if $StaySelector}
			<tr>
			<td style="text-align:left">{$LNG.fl_hold_time}: {html_options name=staytime options=$StaySelector}
  (hours)</td>
		</tr>
		{/if}
				</table>
			</td>
		</tr>
		    

		
		
		
    </table>
    <div style="display:none;" id="listsector">
    	<span>Укажите цель:</span> &nbsp;&nbsp;
                <div class="clear"></div>
    </div>
	
    <div class="gray_stripe build_band" style="padding-right:0;">
    	        <input class="bottom_band_submit" type="submit" value=" {$LNG.fl_continue} ">
            </div>
	</form>
</div>
<script type="text/javascript">
data	= {$fleetdata|json};
function ListSector()
{
	$('#listsector').show();
}
</script>
</div>
</div>
            <div class="clear"></div>            
        </div>

{/block}