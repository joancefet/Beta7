{block name="title" prepend}{$LNG.lm_banned}{/block}
{block name="content"}

<table style="width:100%">
	<tbody><tr>
		<th colspan="2">
			Reporting a post
		</th>
	</tr>
	<tr>
		<td>
			message
		</td>
		<td>
			from
		</td>
	</tr>
	<tr>
		<td style="width:75%">
			{$messages_compl}
		</td>
		<td>
			{$messages_user} [{$messages_gal}:{$messages_sys}:{$messages_pla}]
		</td>
	</tr>
</tbody></table>
<form action="game.php?page=complaintMsg" method="post">
<input name="mode" value="send" type="hidden">
<input name="id" value="{$messageID}" type="hidden">
<table style="width:100%">
	<tbody><tr>
		<th colspan="2">
			complaint Form
		</th>
	</tr>
	<tr>
		<td>
			<input name="type_compl" value="1" type="radio">Insult, mat, threats
		</td>
		<td>
			<input name="type_compl" value="2" type="radio">Advertising Spam
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<textarea placeholder="Explain your reasons here:" class="validate[required]" id="message" name="comment" rows="60" cols="8" style="height:100px;"></textarea>
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<input title="complain" value="complain" type="submit"><br>
		</td>
	</tr>
</tbody></table>
</form>
{/block}