{block name="title" prepend}{$LNG.lm_topkb}{/block}
{block name="content"}
<div id="page">
<div id="content">
<div id="ally_content" class="conteiner">
    <div class="gray_stripe">
      {$LNG.tkb_top} <span style="float:right;"><b>{$LNG.tkb_legende}: </b><span style="color:#00FF00"><b>{$LNG.tkb_gewinner}</b></span><span style="color:#FF0000"><b>{$LNG.tkb_verlierer}</b></span></span>      
    </div>
    <table class="tablesorter ally_ranks">
    <tbody>
    <tr>
        <td>{$LNG.tkb_platz}</td>
        <td><a href="game.php?page=battleHall&order=owner&sort={if $sort == "ASC"}DESC{else}ASC{/if}"{if $order == "owner"} style="font-weight:bold;"{/if}>{$LNG.tkb_owners}</a></td>
        <td><a href="game.php?page=battleHall&order=date&sort={if $sort == "ASC"}DESC{else}ASC{/if}"{if $order == "date"} style="font-weight:bold;"{/if}>{$LNG.tkb_datum}</a></td>
        <td><a href="game.php?page=battleHall&order=units&sort={if $sort == "ASC"}DESC{else}ASC{/if}"{if $order == "units"} style="font-weight:bold;"{/if}>{$LNG.tkb_units}</a></td>
    </tr>
{foreach $TopKBList as $hallCat}
{foreach $hallCat as $rank => $hallRow}


 <tr class="day0 week0">
        <td>{if $rank == 1}
						<img src="styles/images/iconav/trophee_1.png" />
						{elseif $rank == 2}
						<img src="styles/images/iconav/trophee_2.png" />
						{elseif $rank == 3}
						<img src="styles/images/iconav/trophee_3.png" />
						{else}{$rank}{/if} </td>
        <td><a href="game.php?page=raport&amp;mode=battlehall&amp;raport={$hallRow.rid}" target="_blank">
	{if $hallRow.result == "a"}
	<span style="color:#00FF00">{$hallRow.attacker}</span> VS <span style="color:#FF0000">{$hallRow.defender}</span>
	{elseif $hallRow.result == "r"}
	<span style="color:#FF0000">{$hallRow.attacker}</span> VS <span style="color:#00FF00">{$hallRow.defender}</span>
	{else}
	{$hallRow.attacker} VS {$hallRow.defender}
	{/if}</a></td>
        <td>{$hallRow.date}</td>
	<td>{$hallRow.units|number}</td>
    </tr>
	
{/foreach}
{/foreach}

</tbody>
</table>
</div>
</div>
</div>
            <div class="clear"></div>            
        </div>
{/block}