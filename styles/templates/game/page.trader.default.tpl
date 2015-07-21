{block name="title" prepend}{$LNG.lm_trader}{/block}
{block name="content"}
<div id="page">
	<div id="content">
<div id="ally_content" class="conteiner">
    <div class="gray_stripe">
      	{$LNG.tr_call_trader} <a class="bakc" href="game.php?page=port">back</a>                
    </div> 
<table class="tablesorter ally_ranks">
<tr>
	<td>
		<div>{$LNG.tr_call_trader_who_buys}</div>
		<div id="trader" style="width:335px">
		{foreach $charge as $resourceID => $chageData}
			<div class="trader_col">
				{if !$requiredDarkMatter}<form action="game.php?page=trader" method="post">
						<input type="hidden" name="mode" value="trade">
						<input type="hidden" name="resource" value="{$resourceID}">
						<input type="image" id="trader_metal" src="{$dpath}images/{$resource.$resourceID}.gif" title="{$LNG.tech.$resourceID}" border="0" height="32" width="52"><br>
						<label for="trader_metal">{$LNG.tech.$resourceID}</label>
						</form>
						{else}<img src="{$dpath}images/{$resource.$resourceID}.gif" title="{$LNG.tech.$resourceID}" border="0" height="32" width="52" style="margin: 3px;"><br>{$LNG.tech.$resourceID}{/if}
							</div>
							{/foreach}
			
		</div>  
		<div style="padding-bottom:10px;">
			<p>{$LNG.tr_exchange_quota}: {$charge.901.903}/{$charge.902.903}/{$charge.903.903}</p>
            <div class="clear"></div>  
		</div>
        <div style="width:225px; padding-bottom:10px;">
		{foreach $ChargeAM as $resourceID => $chageData}
        	<div class="trader_col">
				<form action="game.php?page=trader" method="post">
				<input type="hidden" name="mode" value="tradedm">
				<input type="hidden" name="resource" value="921">
				<input type="image" id="trader_darkmatter" src="./styles/theme/gow/images/darkmatter.gif" title="darkmatter" border="0" height="32" width="52"><br>
				<label for="trader_darkmatter">darkmatter</label>
				</form>
							</div>
					{/foreach}	

{foreach $ChargeDM as $resourceID => $chageData}
        	<div class="trader_col">
				<form action="game.php?page=trader" method="post">
				<input type="hidden" name="mode" value="tradeam">
				<input type="hidden" name="resource" value="922">
				<input type="image" id="trader_antimatter" src="./styles/theme/gow/images/atm.gif" title="antimatter" border="0" height="32" width="52"><br>
				<label for="trader_darkmatter">antimatter</label>
				</form>
							</div>
					{/foreach}		
					
						
            
            <div class="clear"></div>     	
        </div>
        <div style="padding-bottom:10px;">
			<p>{$tr_cost_dm_trader}</p>
		</div>
	</td>
</tr>
</table>
</div>
</div>
</div>
            <div class="clear"></div>            
        </div>
{/block}