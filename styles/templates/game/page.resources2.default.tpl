{block name="title" prepend}{$LNG.lm_resources}{/block}
{block name="content"}
<div id="page">
	<div id="content">
<div id="ally_content" class="conteiner">
    <div class="gray_stripe" style="border-bottom:0;">
    	{$header}
    </div>
<form action="?page=resources" method="post">
<input type="hidden" name="mode" value="send">
    
<table class="tablesorter ally_ranks">
<tbody>
<tr style="height:22px">
	<td style="width:40%">&nbsp;</td>
	<td style="width:10%">{$LNG.tech.901}</td>
	<td style="width:10%">{$LNG.tech.902}</td>
	<td style="width:10%">{$LNG.tech.903}</td>
	<td style="width:10%">{$LNG.tech.911}</td>
</tr>
<tr style="height:22px">
	<td>{$LNG.rs_basic_income}</td>
	<td>{shortly_number($basicProduction.901)}</td>
	<td>{shortly_number($basicProduction.902)}</td>
	<td>{shortly_number($basicProduction.903)}</td>
	<td>{shortly_number($basicProduction.911)}</td>
	
</tr>
{foreach $productionList as $productionID => $productionRow}
{if $productionID != 48}
<tr style="height:22px">
	<td>{$LNG.tech.$productionID } ({if $productionID  > 200}{$LNG.rs_amount}{else}{$LNG.rs_lvl}{/if} {$productionRow.elementLevel})</td>
	<td><span style="color:{if $productionRow.production.901 > 0}lime{elseif $productionRow.production.901 < 0}red{else}white{/if}">{shortly_number($productionRow.production.901)}</span></td>
	<td><span style="color:{if $productionRow.production.902 > 0}lime{elseif $productionRow.production.902 < 0}red{else}white{/if}">{shortly_number($productionRow.production.902)}</span></td>
	<td><span style="color:{if $productionRow.production.903 > 0}lime{elseif $productionRow.production.903 < 0}red{else}white{/if}">{shortly_number($productionRow.production.903)}</span></td>
	<td><span style="color:{if $productionRow.production.911 > 0}lime{elseif $productionRow.production.911 < 0}red{else}white{/if}">{shortly_number($productionRow.production.911)}</span></td>
	
	<td style="width:10%">
		{html_options name="prod[{$productionID}]" options=$prodSelector selected=$productionRow.prodLevel}
	</td>
</tr>{/if}
{/foreach}
<tr style="height:22px">
	<td>{$LNG.rs_ress_bonus}</td>
	<td><span style="color:{if $bonusProduction.901 > 0}lime{elseif $bonusProduction.901 < 0}red{else}white{/if}">{shortly_number($bonusProduction.901)}</span></td>
	<td><span style="color:{if $bonusProduction.902 > 0}lime{elseif $bonusProduction.902 < 0}red{else}white{/if}">{shortly_number($bonusProduction.902)}</span></td>
	<td><span style="color:{if $bonusProduction.903 > 0}lime{elseif $bonusProduction.903 < 0}red{else}white{/if}">{shortly_number($bonusProduction.903)}</span></td>
	<td><span style="color:{if $bonusProduction.911 > 0}lime{elseif $bonusProduction.911 < 0}red{else}white{/if}">{shortly_number($bonusProduction.911)}</span></td>
	<td><input value="{$LNG.rs_calculate}" type="submit"></td>
</tr>
<tr style="height:22px">
	<td>{$LNG.rs_storage_capacity}</td>
	<td><span style="color:lime;">{shortly_number($storage.901)}</span></td>
	<td><span style="color:lime;">{shortly_number($storage.902)}</span></td>
	<td><span style="color:lime;">{shortly_number($storage.903)}</span></td>
	<td>-</td>
</tr>
<tr style="height:22px">
	<td>{$LNG.rs_sum}:</td>
	<td><span style="color:{if $totalProduction.901 > 0}lime{elseif $totalProduction.901 < 0}red{else}white{/if}">{shortly_number($totalProduction.901)}</span></td>
	<td><span style="color:{if $totalProduction.902 > 0}lime{elseif $totalProduction.902 < 0}red{else}white{/if}">{shortly_number($totalProduction.902)}</span></td>
	<td><span style="color:{if $totalProduction.903 > 0}lime{elseif $totalProduction.903 < 0}red{else}white{/if}">{shortly_number($totalProduction.903)}</span></td>
	<td><span style="color:{if $totalProduction.911 > 0}lime{elseif $totalProduction.911 < 0}red{else}white{/if}">{shortly_number($totalProduction.911)}</span></td>
	
</tr>
<tr style="height:22px">
	<td>{$LNG.rs_daily}</td>
	<td><span style="color:{if $dailyProduction.901 > 0}lime{elseif $dailyProduction.901 < 0}red{else}white{/if}">{shortly_number($dailyProduction.901)}</span></td>
	<td><span style="color:{if $dailyProduction.902 > 0}lime{elseif $dailyProduction.902 < 0}red{else}white{/if}">{shortly_number($dailyProduction.902)}</span></td>
	<td><span style="color:{if $dailyProduction.903 > 0}lime{elseif $dailyProduction.903 < 0}red{else}white{/if}">{shortly_number($dailyProduction.903)}</span></td>
	<td><span style="color:{if $dailyProduction.911 > 0}lime{elseif $dailyProduction.911 < 0}red{else}white{/if}">{shortly_number($dailyProduction.911)}</span></td>
	
</tr>
<tr style="height:22px">
	<td>{$LNG.rs_weekly}</td>
	<td><span style="color:{if $weeklyProduction.901 > 0}lime{elseif $weeklyProduction.901 < 0}red{else}white{/if}">{shortly_number($weeklyProduction.901)}</span></td>
	<td><span style="color:{if $weeklyProduction.902 > 0}lime{elseif $weeklyProduction.902 < 0}red{else}white{/if}">{shortly_number($weeklyProduction.902)}</span></td>
	<td><span style="color:{if $weeklyProduction.903 > 0}lime{elseif $weeklyProduction.903 < 0}red{else}white{/if}">{shortly_number($weeklyProduction.903)}</span></td>
	<td><span style="color:{if $weeklyProduction.911 > 0}lime{elseif $weeklyProduction.911 < 0}red{else}white{/if}">{shortly_number($weeklyProduction.911)}</span></td>
	
</tr>
</tbody>
</table>
</form>
</div>
</div>
</div>
            <div class="clear"></div>            
        </div><!--/body-->
{/block}