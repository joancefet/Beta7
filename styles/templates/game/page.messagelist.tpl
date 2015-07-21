{block name="title" prepend}{$LNG.lm_support}{/block}
{block name="content"}
<div id="page">
<div id="content">
<div id="ally_content" class="conteiner">
    <div class="gray_stripe">
      {$LNG.ti_header}
    </div> 
        <table class="tablesorter ally_ranks">
        <tr>
		<th style="width:5%">Time</th>
		<th style="width:15%">Sender</th>
		<th style="width:15%">Receiver</th>
		<th style="width:50%">Message</th>
        </tr>
		{foreach $messageList as $messageID => $messageRow}
	<tr data-messageID="{$messageID}">
		<td><a href="#" class="toggle">{$messageRow.sender}</a></td>
		<td><a href="#" class="toggle">{$messageRow.receiver}</a></td>
		<td><a href="#" class="toggle">{$messageRow.text}</a></td>
		
	</tr>
	
	{/foreach}
            </table>
</div>
</div>
</div>
            <div class="clear"></div>            
        </div>
{/block}