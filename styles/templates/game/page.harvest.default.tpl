{block name="title" prepend}Reduce Resource{/block}
{block name="content"}
<div id="page">

	<div id="content">
<div id="ally_content" class="conteiner">
    <div class="gray_stripe" style="border-bottom:0;">
    	Reduce Resource
    </div>
    <table class="tablesorter ally_ranks">
    <tbody>
    <tr>
			<form action="game.php?page=Reduceresources&act=take" method="POST" id="harv" name="harv">
			<tr>
				<td colspan ="3" style="text-align:left">
				{if $PlanetsList}
					<fieldset>
						<font color=gold size=2><legend>Planets<input type="checkbox" id="check_p" onClick="check_planets();"></legend></font>
						<font color=skyblue>{foreach $PlanetsList as $ID => $Planets}
							<input type=checkbox name=check_planet[] value={$ID}>{$Planets}
						{/foreach}</font>
					</fieldset>
				{/if}
				</td>
			</tr>
			<tr>
				<td colspan ="3" style="text-align:left">
				{if $MoonsList}
					<fieldset>
						<font color=gold size=2><legend>Moons<input type="checkbox" id="check_m" onClick="check_moons();"></legend></font>
						<font color=skyblue>{foreach $MoonsList as $ID => $Moons}
							<input type=checkbox name=check_moons[] value={$ID}>{$Moons}
						{/foreach}</font>
					</fieldset>
				{/if}
				</td>
			</tr>
			<tr>
				<td colspan="3" style="test-align:left">
				<input type="submit" value="Harvest">
				</td>
			</tr>
			<tr>
				<td colspan="3" style="test-align:left">
				<br><font color=red><em>With this mod, you have the possibility to harvest (Metall, Crystal, Deuterium),</em></font>
				<br><font color=red><em>from the selected planets and moons on the planet your on.</em></font>
				
				</td>
			</tr>
			</form>
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