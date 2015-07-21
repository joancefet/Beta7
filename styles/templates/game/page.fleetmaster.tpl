{block name="title" prepend}Fleet Master{/block}
{block name="content"}

<div id="ally_content" class="conteiner">
    <div class="gray_stripe">
       Fleet Master -> Set Fleet Speed
       <a href="game.php?page=overview" class="interrogation manual" style="width: 35px;">Back</a>                 
    </div>
    <table class="tablesorter ally_ranks">
		<tbody>
			<tr>
				<td colspan='2' style="color: #669999;">
					<br>
					{if $access == 3}
					<span style="color:lime;font-size:15px;font-weight:bold;">Welcome Admin {$username}!</span><br><br>
					{/if}
					{if $access == 4}
					<span style="color:lime;font-size:15px;font-weight:bold;">Welcome</span><br><br>
					{/if}
					<span style="color:yellow;font-size:15px;">Congratulations!</span><br>
					<br>
					{$LNG.fm1} {$down} {$LNG.fm2} {$up}.<br><br>
				</td>
			</tr>
			<tr>
				<td style="vertical-align: middle;height:30px;">
					{$LNG.fm3}
				</td>
				<td style="vertical-align: middle;height:30px;">
					<div style="float:left;line-height: 30px;margin-left: 81px;">5.000 DM</div>
					<div style="
					background-image: url(styles/resource/css/images/darkmatter.gif);
					width: 21px;
					height: 21px;
					margin-top: 4px;
					border: 1px solid #000;
					background-color: #000;
					left: 0;
					top: 9px;
					-moz-border-radius: 11px;
					-webkit-border-radius: 11px;
					border-radius: 11px;
					z-index: 2;"></div>
				</td>
			</tr>
<form action="game.php?page=FleetMaster" method="post">
			<tr>
				<td style="vertical-align: middle;height:30px;">
					<span id="result">{$LNG.fm4} {$current_speed / 2500}</span>
				</td>
				<td style="vertical-align: middle;height:30px;">
					<input type="number" name="speed" placeholder="{$current_speed / 2500}" />
				</td>
			</tr>
			<tr>
			
				
				<td> 
				
         {if $status === true}
            <center><input type="submit" id="submit_button" value="Change"></center>
         {else}
          <font color="lime"><b> {$LNG.FM_wait}</font></b><br>
          <big><b><font color="yellow"><span class="countdown2" secs="{$status}"></span></font></b></big>
        {/if}
    </td>
			</tr>
</form>
		</tbody>
    </table>
</div>

{/block}