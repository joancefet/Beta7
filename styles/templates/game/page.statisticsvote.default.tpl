{block name="title" prepend}{$LNG.lm_statistics}{/block}
{block name="content"}
<div id="content">
<div id="ally_content" class="conteiner">

<table style="width:680px;">

	<div class="gray_stripe">
		<th colspan="4">Top 30 Votings</th>
	</div>
	<tr>
		<th colspan="4"><center><a href='./game.php?page=statistics' style="color:red">Back to Player Statistic</a></center></th>
	</tr>
	
	<tr>
		<td colspan="4">Best Voters for ZyperaxGalaxy<br>
        Top 3 will respectivly receive 150k, 100k & 50k DM at the end of the month</td>
	</tr>
	
<tr style="height:23px;">
	<td style="width:80px"><strong style="color:orange;">Ranking</strong></td>
	<td style="width:250px"><strong style="color:orange;">Players</strong></td>
	<td><strong style="color:orange;">Amount of votes</strong></td>

</tr>

{foreach from=$voturile key=k item=v}
<tr>
	<td style="height:40px;">{$v.rank}</td>
	<td><a href="#" onclick="return Dialog.Playercard({$v.id}" {if $v.id == $id_users} style="color:lime"{/if}>{$v.username}</a></td>
	<td>{$v.vcount}</td>
</tr>
{/foreach}

</table>
{/block}