{block name="title" prepend}Harvest Fleets{/block}
{block name="content"}

<div id="page">
	<div id="content">
	<script type="text/javascript">
$(document).ready(function(){
    $('span.all_true').click(function() {
        $(':checkbox').attr('checked',true);
    });
	$('span.all_false').click(function() {
        $(':checkbox').attr('checked',false);
    });
});
</script>
<div id="ally_content" class="conteiner">
	<form action="game.php?page=reducefleet&amp;mode=reduce" method="post" id="form">
    <div class="gray_stripe">
    	Select planets to take fleets off
         [<span class="all_true" style="color:#6C0; cursor:pointer;">select all</span>]
         [<span class="all_false" style="color:#F90; cursor:pointer;">reset</span>]
    </div>
	
	<table class="tablesorter ally_ranks">
	
	{foreach name=RangeList item=RangeInfo from=$RangeList}

					<tr style="height:20px;">
			<td>
            	{$RangeInfo.name}<br />
				{if $RangeInfo.small_ship_cargo > 0 || $RangeInfo.big_ship_cargo > 0 || $RangeInfo.light_hunter > 0 || $RangeInfo.heavy_hunter > 0 || $RangeInfo.crusher > 0 || $RangeInfo.battle_ship > 0 || $RangeInfo.recycler > 0 || $RangeInfo.bomber_ship > 0 || $RangeInfo.destructor > 0 || $RangeInfo.battleship > 0 || $RangeInfo.galleon > 0 || $RangeInfo.destroyer > 0 || $RangeInfo.frigate > 0 || $RangeInfo.black_wanderer > 0 || $RangeInfo.lune_noir > 0}
				
                                	<span style="color:#09F;">time: {$RangeInfo.duration} </span>
									{/if}
                            </td>
            <td>
                [{$RangeInfo.galaxy}:{$RangeInfo.system}:{$RangeInfo.planet}]
            </td>      
            <td style="text-align:left; padding:3px 0;">
                Metal: {$RangeInfo.metal}<br />
               	Crystal: {$RangeInfo.crystal}<br />
                Deuterium: {$RangeInfo.deuterium}<br />
            </td>
            
{if $RangeInfo.small_ship_cargo > 0 || $RangeInfo.big_ship_cargo > 0 || $RangeInfo.light_hunter > 0 || $RangeInfo.heavy_hunter > 0 || $RangeInfo.crusher > 0 || $RangeInfo.battle_ship > 0 || $RangeInfo.recycler > 0 || $RangeInfo.bomber_ship > 0 || $RangeInfo.destructor > 0 || $RangeInfo.battleship > 0 || $RangeInfo.galleon > 0 || $RangeInfo.destroyer > 0 || $RangeInfo.frigate > 0 || $RangeInfo.black_wanderer > 0 || $RangeInfo.lune_noir > 0}			
					<td style="text-align:left;">
               		{if $RangeInfo.small_ship_cargo > 0} {$LNG.tech.202}: {$RangeInfo.small_ship_cargo}<br/> {/if} 
					{if $RangeInfo.big_ship_cargo > 0}{$LNG.tech.203}: {$RangeInfo.big_ship_cargo}<br/>{/if} 
					{if $RangeInfo.light_hunter > 0}{$LNG.tech.204}: {$RangeInfo.light_hunter}<br/>{/if} 
					{if $RangeInfo.heavy_hunter > 0}{$LNG.tech.205}: {$RangeInfo.heavy_hunter}<br/>{/if} 
					{if $RangeInfo.crusher > 0}{$LNG.tech.206}: {$RangeInfo.crusher}<br/>{/if} 
					{if $RangeInfo.battle_ship > 0}{$LNG.tech.207}: {$RangeInfo.battle_ship}<br/>{/if} 
					{if $RangeInfo.recycler > 0}{$LNG.tech.209}: {$RangeInfo.recycler}<br/>{/if} 
					{if $RangeInfo.bomber_ship > 0}{$LNG.tech.211}: {$RangeInfo.bomber_ship}<br/>{/if} 
					{if $RangeInfo.destructor > 0}{$LNG.tech.213}: {$RangeInfo.destructor}<br/>{/if} 
					{if $RangeInfo.battleship > 0}{$LNG.tech.215}: {$RangeInfo.battleship}<br/>{/if} 
					{if $RangeInfo.lune_noir > 0}{$LNG.tech.216}: {$RangeInfo.lune_noir}<br/>{/if} 
					{if $RangeInfo.galleon > 0}{$LNG.tech.225}: {$RangeInfo.galleon}<br/>{/if} 
					{if $RangeInfo.destroyer > 0}{$LNG.tech.226}: {$RangeInfo.destroyer}<br/>{/if} 
					{if $RangeInfo.frigate > 0}{$LNG.tech.227}: {$RangeInfo.frigate}<br/>{/if} 
					{if $RangeInfo.black_wanderer > 0}{$LNG.tech.228}: {$RangeInfo.black_wanderer}<br/>{/if} </td>
             <td>
                                	<input name="palanets[]" type="checkbox" value="{$RangeInfo.id}">
                            </td>
					{else}

<td colspan="2" style="text-align:left;">
               	               	               	               	               		<span style="color:#F00;">No suitable fleet</span>
               	                                            </td> {/if}					
            
		</tr>
		
		{/foreach}
		        <tr style="height:20px;">
			<td colspan="5"><input type="submit" value="Send"></td>
		</tr>
    	</table>
	</form>
</div>

<div class="ally_bottom" style="text-align:left;">
   
    <a href="game.php?page=fleetTable">back</a>
	</div>
</div>
</div>
            <div class="clear"></div>            
        </div>
{/block}
