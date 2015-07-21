{block name="title" prepend}{$LNG.hnav_ennemies}{/block}
{block name="content"}
<div id="page">
<div id="content">
<div id="ally_content" class="conteiner">
    <div class="gray_stripe" style="padding-right:0;">
    	{$LNG.hnav_ennemies}
        <a href="game.php?page=BuddyList" class="right_flank button">{$LNG.hnav_friends}</a>
    </div>
    <table class="tablesorter ally_ranks">
 <tr><th colspan="5" style="text-align:center">{$LNG.hnav_ennemies}</th></tr>

	<tr>
	<th>{$LNG.bu_player}</td>
	<th>{$LNG.bu_alliance}</th>
	<th>{$LNG.bu_coords}</th>
	<th>{$LNG.bu_action}</th>
</tr>
{foreach $myBuddyList as $myBuddyID => $myBuddyRow}
<tr>
	<td><a href="#" onclick="return Dialog.PM({$myBuddyRow.id});">{$myBuddyRow.username}</a></td>
	<td>{if {$myBuddyRow.ally_name}}<a href="game.php?page=alliance&amp;mode=info&amp;id={$myBuddyRow.ally_id}">{$myBuddyRow.ally_name}</a>{else}-{/if}</td>
	<td><a href="game.php?page=galaxy&amp;galaxy={$myBuddyRow.galaxy}&amp;system={$myBuddyRow.system}">[{$myBuddyRow.galaxy}:{$myBuddyRow.system}:{$myBuddyRow.planet}]</a></td>
	
	<td><a href="game.php?page=EnnemiesList&amp;mode=delete&amp;id={$myBuddyID}"><img src="styles/resource/images/false.png" alt="{$LNG.bu_delete}" title="{$LNG.bu_delete}"></a></td>
</tr>
{foreachelse}
 <tr><td colspan="5">{$LNG.no_ennem}</td></tr>{/foreach}
</table>
</div>
</div>
</div>
            <div class="clear"></div>            
        </div>
{/block}