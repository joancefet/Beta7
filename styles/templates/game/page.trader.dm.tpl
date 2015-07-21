{block name="title" prepend}{$LNG.lm_trader}{/block}
{block name="content"}
<div id="page">
	<div id="content">
<div id="ally_content" class="conteiner">
    <div class="gray_stripe">
       {$LNG.tr_sell} {$LNG.tech.$tradeResourceID}                 
    </div> 
    <form id="trader" action="" method="post">
	<input type="hidden" name="mode" value="sendDM">
	<input type="hidden" name="resource" value="{$tradeResourceID}">
        <table class="tablesorter ally_ranks">
        <tr>
            <td>{$LNG.tr_resource}</td>
		<td colspan="2">{$LNG.tr_amount}</td>
		<td>{$LNG.tr_quota_exchange}</td>
        </tr>
       <tr>
		<td>{$LNG.tech.$tradeResourceID}</td>
		<td colspan="2"><span id="ress">0</span></td>
		<td>1</td>
	</tr>
       	{foreach $tradeResources as $tradeResource}
	<tr>
		<td><label for="resource{$tradeResource}">{$LNG.tech[$tradeResource]}</label></td>
		<td><input name="trade[{$tradeResource}]" id="resource{$tradeResource}" class="trade_input" type="text" value="0" size="30" data-resource="{$tradeResource}"></td>
		<td><span id="resource{$tradeResource}Shortly"></span></td>
		<td>{$ChargeAM[$tradeResource]}</td>
	</tr>
	{/foreach}
       
        <tr>
            <td colspan="3"><input type="submit" value="{$LNG.tr_exchange}"></td>
        </tr>
        </table>
    </form>
</div>
</div>
</div>
            <div class="clear"></div>            
        </div>
{/block}
{block name="script" append}
<script type="text/javascript">
var ChargeAM = {$ChargeAM|json};
</script>
{/block}