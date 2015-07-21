{block name="title" prepend}{$LNG.lm_messages}{/block}
{block name="content"}
{if $manual_14_step == 0}
<script type="text/javascript">
	$(function() {
		qtips('#mes_3 ', 'Go to the "Battle" and view the combat report by clicking on it.', 'topMiddle', 'bottomMiddle');
setTimeout(function() { location.reload(); }, 20000);
setInterval(function() { AJAX() }, 6000)
	});
	</script>
	{/if}
	
<div id="page">
<div id="content">
<div id="ally_content" class="conteiner">
    <div class="gray_stripe" style="border-bottom:0;">
    	{$LNG.mg_overview}<span id="loading" style="display:none;"> ({$LNG.loading})</span>
    </div>
    <table class="tablesorter ally_ranks">
<tr>     

{foreach $CategoryList as $CategoryID => $CategoryRow}
		{if ($CategoryRow@iteration % 6) === 1}<tr>{/if}
		{if $CategoryRow@last && ($CategoryRow@iteration % 6) !== 0}<td>&nbsp;</td>{/if}
		<td style="word-wrap: break-word;color:{$CategoryRow.color};"><a href="#" id="mes_{$CategoryID}" onclick="Message.getMessages({$CategoryID});return false;" style="color:{$CategoryRow.color};">{$LNG.mg_type.{$CategoryID}}</a>
		<br><span id="unread_{$CategoryID}">{$CategoryRow.unread}</span>/<span id="total_{$CategoryID}">{$CategoryRow.total}</span>
		</td>
		{if $CategoryRow@last || ($CategoryRow@iteration % 6) === 0}</tr>{/if}
		{/foreach}
		
	
        </tr>            </table>
</div>
</div>
</div>
            <div class="clear"></div>            
        </div>
{/block}