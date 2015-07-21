{block name="content"}
<form action="game.php?page=messages" method="post">
<input type="hidden" name="mode" value="action">
<input type="hidden" name="ajax" value="1">
<input type="hidden" name="messcat" value="{$MessID}">
<input type="hidden" name="side" value="{$page}">
<table id="messagestable" class="tablesorter ally_ranks">	
	<tr>
		<th colspan="4">{$LNG.mg_message_title}</th>
	</tr>
	
	{if $MessID != 999}
	<tr>
		<td colspan="4">
			<select name="actionTop">
				<option value="deletemarked">{$LNG.mg_delete_marked}</option>
				<option value="deleteunmarked">{$LNG.mg_delete_unmarked}</option>
				<option value="deletetypeall">{$LNG.mg_delete_type_all}</option>
				<option value="deleteall">{$LNG.mg_delete_all}</option>
				<option value="archivemarked">Archive marked messages</option>
			</select>
			<input value="{$LNG.mg_confirm}" type="submit" name="submitTop">
		</td>
	</tr>
	{/if}
	
	<tr style="height: 20px;">
		<td class="right" colspan="4">{$LNG.mg_page}: {if $page != 1}<a href="#" onclick="Message.getMessages({$MessID}, {$page - 1});return false;">&laquo;</a>&nbsp;{/if}{for $site=1 to $maxPage}<a href="#" onclick="Message.getMessages({$MessID}, {$site});return false;">{if $site == $page}<b>[{$site}]</b>{else}[{$site}]{/if}</a>{if $site != $maxPage}&nbsp;{/if}{/for}{if $page != $maxPage}&nbsp;<a href="#" onclick="Message.getMessages({$MessID}, {$page + 1});return false;">&raquo;</a>{/if}</td>
	</tr>
	
	{foreach $MessageList as $Message}
	<tr id="message_{$Message.id}" class="message_head{if $MessID != 999 && $Message.unread == 1} mes_unread{/if}">
		<td class="head_row_msg" style="width:40px;" rowspan="2">
		{if $MessID != 999}<input class="head_row_msg" name="messageID[{$Message.id}]" value="1" type="checkbox">{/if}
		</td>
		<td class="head_row_msg">{$Message.time}</td>
		<td class="head_row_msg">{$Message.from} 	{if $Message.type == 1 && $MessID != 999}<a href="#" onclick="return Dialog.Buddy({$Message.sender})" title="proposal to make friends"><img src="../styles/images/iconav/friend.png"></a>            <a href="?page=EnnemiesList&mode=send&id={$Message.sender}" title="Add to the list of enemies"><img src="../styles/images/iconav/enemies.png" style="height:20px;"></a>{/if} </td>
		<td class="head_row_msg">{$Message.subject}
		{if $Message.type == 1 && $MessID != 999}
		<a href="#" onclick="return Dialog.PM({$Message.sender}, Message.CreateAnswer('{$Message.subject}'));" title="{$LNG.mg_answer_to} {strip_tags($Message.from)}"><img src="./styles/images/iconav/mesages.png" border="0"></a>
		
		<a href="#" onclick="return Dialog.complPM({$Message.id})" title="Report"><img src="./styles/images/iconav/complaint.png" height="16px"></a>	
		 {/if}
		 <a href="#" onclick="msgDel({$Message.id}, {$Message.type}); Message.getMessages({$Message.type}); return false;" title="Remove"><img src="../styles/images/iconav/delmsg.png">
				</td>
	
	
	
		
		
		</td>
	</tr>
	
	
	<tr class="messages_body">
		<td colspan="3" class="left">
		{$Message.text}
		</td>
	</tr>
	{/foreach}
	<tr style="height: 20px;">
		<td class="right" colspan="4">{$LNG.mg_page}: {if $page != 1}<a href="#" onclick="Message.getMessages({$MessID}, 1);return false;">&laquo;</a>&nbsp;{/if}{for $site=1 to $maxPage}<a href="#" onclick="Message.getMessages({$MessID}, {$site});return false;">{if $site == $page}<b>[{$site}]</b>{else}[{$site}]{/if}</a>{if $site != $maxPage}&nbsp;{/if}{/for}{if $page != $maxPage}&nbsp;<a href="#" onclick="Message.getMessages({$MessID}, {$maxPage});return false;">&raquo;</a>{/if}</td>
	</tr>
	{if $MessID != 999}
	<tr>
		<td colspan="4">
			<select name="actionBottom">
				<option value="deletemarked">{$LNG.mg_delete_marked}</option>
				<option value="deleteunmarked">{$LNG.mg_delete_unmarked}</option>
				<option value="deletetypeall">{$LNG.mg_delete_type_all}</option>
				<option value="deleteall">{$LNG.mg_delete_all}</option>
				<option value="archivemarked">Archive marked messages</option>
			</select>
			<input value="{$LNG.mg_confirm}" type="submit" name="submitBottom">
		</td>
	</tr>
	{/if}
</table>
</form>
{/block}