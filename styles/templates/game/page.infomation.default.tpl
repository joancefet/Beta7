{block name="title" prepend}{$LNG.lm_info}{/block}
{block name="content"}
<table style="width:100%;">
	<tbody>
	<tr>
		<th>{$LNG.tech.$elementID}</th>
	</tr>

	<tr>
		<td>
			<table>
				<tr>
					<td class="transparent" style="width:120px"><img width="120" height="120" src="{$dpath}gebaeude/{$elementID}.{if $elementID >=600 && $elementID <= 699}jpg{elseif $elementID > 700}png{else}gif{/if}" alt=""></td>
					<td class="transparent left"><p>{$LNG.longDescription.$elementID}</p>
					{if !empty($Bonus)}<p>
					<br>
					{foreach $Bonus as $BonusName => $elementBouns}<font color="#00FF00">{if $elementBouns[0] < 0}-{else}+{/if}{if $elementBouns[1] == 0}{abs($elementBouns[0] * 100)}%{else}{floatval($elementBouns[0])}{/if}  {$LNG.bonus.$BonusName}</font><br>{/foreach}
					</p>{/if}	
					
					
					</td>
				</tr>
			</table>
		</td>
	</tr>
	</tbody>
</table>
{if !empty($productionTable.production)}
{include file="shared.information.production.tpl"}
{/if}
{if !empty($productionTable.storage)}
{include file="shared.information.storage.tpl"}
{/if}
{if !empty($FleetInfo)}
{include file="shared.information.shipInfo.tpl"}
{/if}
{if !empty($gateData)}
{include file="shared.information.gate.tpl"}
{/if}
{if !empty($MissileList)}
{include file="shared.information.missiles.tpl"}
{/if}
{/block}