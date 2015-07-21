    <table class="tablesorter ally_ranks">
            <tr>
	<th colspan="2">{$LNG.st_position}</th>
		<th>{$LNG.st_alliance}</th>	
	<th>{$LNG.st_members}</th>
	<th>{$LNG.st_points}</th>
	<th>{$LNG.st_per_member}</th>
</tr>
{foreach name=RangeList item=RangeInfo from=$RangeList}
<tr>
	<td>{if $RangeInfo.rank == 1}
						<img src="styles/images/iconav/trophee_1.png" />
						{elseif $RangeInfo.rank == 2}
						<img src="styles/images/iconav/trophee_2.png" />
						{elseif $RangeInfo.rank == 3}
						<img src="styles/images/iconav/trophee_3.png" />
						{else}{$RangeInfo.rank}{/if}</td>
    <td>{if $RangeInfo.ranking == 0}<span style='color:#87CEEB'>*</span>{elseif $RangeInfo.ranking < 0}<span style='color:red'>{$RangeInfo.ranking}</span>{elseif $RangeInfo.ranking > 0}<span style='color:green'>+{$RangeInfo.ranking}</span>{/if}</td>
	<td><a href="game.php?page=alliance&amp;mode=info&amp;id={$RangeInfo.id}" target="ally"{if $RangeInfo.id == $CUser_ally} style="color:#33CCFF"{elseif $RangeInfo.isWar > 0 }style="color:red"{elseif $RangeInfo.isUnion > 0 }style="color:#32CD32"{/if} >{$RangeInfo.name}</a></td>
	<td>{$RangeInfo.members}</td>
	<td>{$RangeInfo.points}</td>
	<td>{$RangeInfo.mppoints}</td>
</tr>
{/foreach}
        </table>
  

 <div class="gray_stripe">
    	<span style='color:#FFDEAD' class="tooltip" data-tooltip-content="<table>
	<tr>
		<th colspan='2'><span style='color:F30'>player</span></th>
	</tr>
	<tr>
		<td style='text-align:left;'>friends</td>
		<td style='text-align:left;'><span style='color:yellow'>UserName</span></td>
	</tr>
	<tr>
		<td style='text-align:left;'>enemies</td>
		<td style='text-align:left;'><span style='color:red'>UserName</span></td>
	</tr>
	
	
	<tr>
		<th colspan='2'>alliance</th>
	</tr>
	<tr>
		<td style='text-align:left;'>union</td>
		<td style='text-align:left;'><span style='color:#32CD32'>AllyName</span></td>
	</tr>
	<tr>
		<td style='text-align:left;'>war</td>
		<td style='text-align:left;'><span style='color:#FF0000'>AllyName</span></td>
	</tr>
	<tr>
		<td style='text-align:left;'>their alliance</td>
		<td style='text-align:left;'><span style='color:#33CCFF'>AllyName</span></td>
	</tr>
</table>">color diplomacy</span>
    </div>
</div>

</div>
</div>
            <div class="clear"></div>            
        </div>