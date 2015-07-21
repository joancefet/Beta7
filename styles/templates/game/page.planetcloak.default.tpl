{block name="title" prepend}{$LNG.planetcloak_title}{/block}
{block name="content"}
<div id="page">

	<div id="content">
<div id="ally_content" class="conteiner">
    <div class="gray_stripe" style="border-bottom:0;">
    	{$LNG.planetcloak_title}
    </div>
    <table class="tablesorter ally_ranks">
    <tbody>
     
	<tr>
	<td rowspan="1" style="height:150px;">
		<img src="./styles/theme/gow/gebaeude/720.gif" "="" height="150">
	</td>
	<td style="text-align:left;"><br><br>
		<font color="#4495D0">{$LNG.planetcloak_one} <br>
		</font>
	</td>
	</tr>
	<tr>
		<td colspan="2">
		{if $showCountdown == 1}
		{$LNG.planetcloak_countdown}: <span style="color:red;" class="countdown2"  secs="{$cloak_active_countdown}"></span>
		{elseif !empty($cloak_active)}
		{$LNG.planetcloak_active}: <span style="color:red;" class="countdown2"  secs="{$cloak_active}"></span>
		{else}
								{$LNG.planetcloak_notactive}
						<form method="POST">
							<select name="hide">
								<option value="1" selected="selected">{$LNG.planetcloak_option_one}</option>
								<option value="2">{$LNG.planetcloak_option_two}</option>
							</select>
							<input value="{$LNG.planetcloak_option_send}" name="Buy" type="submit">
							<input name="mode" value="buy" type="hidden">
						</form>{/if}
						</td>
	</tr>
    </tbody>
    </table>
</div>
</div>
</div>
            <div class="clear"></div>            
        </div>
		{/block}