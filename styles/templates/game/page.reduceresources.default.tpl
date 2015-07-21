{block name="title" prepend}Harvest Ressource{/block}
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
	<form action="game.php?page=reduceresources&amp;mode=reduce" method="post" id="form">
    <div class="gray_stripe">
    	Select planets to take resources
         [<span class="all_true" style="color:#6C0; cursor:pointer;">select all</span>]
         [<span class="all_false" style="color:#F90; cursor:pointer;">reset</span>]
    </div>
	
	<table class="tablesorter ally_ranks">
	
	{foreach name=RangeList item=RangeInfo from=$RangeList}

					<tr style="height:20px;">
			<td>
            	{$RangeInfo.name}<br />
				{if $RangeInfo.ev_transporter > 0 && $RangeInfo.needed_ships > 0}
                                	<span style="color:#09F;">time: {$RangeInfo.duration} </span> {/if}
                            </td>
            <td>
                [{$RangeInfo.galaxy}:{$RangeInfo.system}:{$RangeInfo.planet}]
            </td>      
            <td style="text-align:left; padding:3px 0;">
                Metal: {$RangeInfo.metal}<br />
               	Crystal: {$RangeInfo.crystal}<br />
                Deuterium: {$RangeInfo.deuterium}<br />
            </td>
            
			{if $RangeInfo.ev_transporter <= 0 || $RangeInfo.needed_ships <= 0}
			<td colspan="2" style="text-align:left;">
               	               	               	               	               		<span style="color:#F00;">No suitable fleet ({$RangeInfo.needed_ships1} {$LNG.tech.217})</span>
               	                                            </td>
			
							{else}
							<td style="text-align:left;">
               		{$LNG.tech.217}: {$RangeInfo.ev_transporter}<br />               	               	               	                                            </td>
             <td>
                                	<input name="palanets[]" type="checkbox" value="{$RangeInfo.id}">
                            </td>
															{/if}
            
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
