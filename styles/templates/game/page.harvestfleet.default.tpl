{block name="title" prepend}Harvest{/block}
{block name="content"}

<div id="content">
<table style="border:1px solid white; background-color:#1C1F23; margin-left:60px; border-radius: 5px;">	
	<tr>
		<td>
			Harvest (you have {$harvest} HP[harvest points] left)
		</td>
	</tr>
		<tr> 
			<td>
<form action="game.php?page=Harvest" method="POST">
<input type="hidden" name="con" value="gather">
<fieldset>
	
	<legend>Planets<input type="checkbox" id="check_p" onClick="check_planets();"></legend>
	<div style="float:left;">
		{foreach $PlanetsList as $ID => $Planets}
							<input type=checkbox name=check_planet[] value={$ID}>{$Planets}
						{/foreach}
	</div>
</fieldset>
<fieldset>
	
	<legend>Moons<input type="checkbox" id="check_m" onClick="check_moons();"></legend>
	<div style="float:left;">
		{foreach $MoonsList as $ID => $Moons}
							<input type=checkbox name=check_moons[] value={$ID}>{$Moons}
						{/foreach}
	</div>
</fieldset>
<center><input type="submit" value="Gather Resource" class="button" name="Buy"></center>
</form>
</td>
</tr>
</table>
	<table style="border:1px solid white; background-color:#1C1F23; margin-left:60px; border-radius: 5px;">	
		<tr>
			<td>
				Harvest Description: 
					<br>
					
{$LNG.ha1}
<br /><br />
<font color="red"><blink>IMPORTANT</blink></font>
<br />{$LNG.ha2}
			</td>
		</tr>
	</table>
	
<table style="border:1px solid white; background-color:#1C1F23; margin-left:60px; border-radius: 5px;">
	<tr>
		<td>
			{$LNG.ha4}
		</td>
		<td>

				{$LNG.ha3}
				<form action="game.php?page=Harvest" method="POST">
									<input type="hidden" name="con" value="extra">
					<select name="buy">
						{foreach from=$prices item=i key=k}
							<option value="{$k}">{$k} Harvest(s) - {$i} DM</option>
						{/foreach}
					</select>
					<center><input type="submit" value="Buy Harvest Points" class="button" name="Buy"></center>
			</form>
		</td>
	</tr>
</table>
{/block}
{block name="script" append}
<script type="text/javascript">
function check_planets()
{
	var chkAll = document.getElementById('check_p');
	var checks = document.getElementsByName('check_planet[]');

	if(chkAll.checked == true){
		for (i = 0; i < checks.length; i++)
			checks[i].checked = true ;
	}else{
		for (i = 0; i < checks.length; i++)
			checks[i].checked = false ;
	}
}

function check_moons()
{
	var chkAll = document.getElementById('check_m');
	var checks = document.getElementsByName('check_moons[]');

	if(chkAll.checked == true){
		for (i = 0; i < checks.length; i++)
			checks[i].checked = true ;
	}else{
		for (i = 0; i < checks.length; i++)
			checks[i].checked = false ;
	}
}
</script>
{/block}