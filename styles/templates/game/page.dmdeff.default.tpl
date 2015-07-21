{block name="title" prepend}dm ships{/block}
{block name="content"}

<div id="page">
	<div id="content">
<div id="ally_content" class="conteiner">
    <div class="gray_stripe">
       Buy fleet (<span style="color:#FC0; font-weight:bold;" id="traderHead"></span>)<a class="bakc" href="game.php?page=port">back</a>                      
    </div> 
	<form action="game.php?page=dmdeff" method="post">
	<input type="hidden" name="mode" value="send">
    <input type="hidden" id="shipID" name="shipID" value="">
	<table class="tablesorter ally_ranks gray_stripe_th">
        <tr>
			<td rowspan="4" style="width:121px; height:126px;">
				<img width="120" height="120"  id="img" alt="" data-src="./styles/theme/gow/gebaeude/" />
            </td>
        </tr>
        <tr>
        	<td>
            	number: <input type="text" id="count" name="count" onkeyup="Total();">
            </td>
        </tr>
        <tr>
        	<td>
				cost: <span id="darkmatter" style="font-weight:bold;"></span> darkmatter		</td>
        </tr>
        <tr>
        	<td>
				total: <span id="total_darkmatter" style="font-weight:bold;"></span> darkmatter
			</td>
		</tr>
        <tr style="display:none;" id="batn">
			<th colspan="2" style="text-align:center;  border-left:0;"><input type="submit" value="buy" style="width:70px; margin:0 auto;"></th>
		</tr>
	
        <tr>
			<td colspan="2" style="text-align:left; height:auto; border-top:1px solid #000;">
			
			{foreach $elementList as $ID => $Element}
            	                        <img style="cursor:pointer; width:57px;" onclick="updateVars({$ID})" alt=" {$LNG.tech.{$ID}}" title=" {$LNG.tech.{$ID}}" src="./styles/theme/gow/gebaeude/{$ID}.gif" />
										{/foreach}
				                       
				            </td>
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
var CostInfo = {$ChargeDM|json};
var CostInf = {$ChargeDN|json};
var Charge = 30;
</script>
{/block}