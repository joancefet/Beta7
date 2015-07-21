{block name="title" prepend}Dark Matter Lottery{/block}
{block name="content"}
<br>
<div id="ally_content" class="conteiner">
<table>
<div id="ally_content" class="conteiner">
<tr>
  <div class="imper_block_td">{$LNG.Lo1} <div class="right_part">   {$LNG.Lo2} <font color="red"><span class="countdown2" secs="{$secs}"></span></font></div></div>
</tr>

  <div class="ally_contents sepor_conten development_row">
  
	<div class="right_part">
		<div class="gray_stripe">
			{$LNG.CostOf1}
		</div>
		<div class="ally_contents">
			<ul>
									<li>Metal <span style="color:red">{$metal_p}</span></li>
							</ul>
			<ul>
									<li>Crystal  <span style="color:red">{$crystal_p}</span></li>
							</ul>
							<ul>
									<li>Deuterium  <span style="color:red">{$deuterium_p}</span></li>
							</ul>
							
							<br>Details: <br>{$LNG.Lo5} {$max_tickets_per_player} tickets
		</div>
	</div>

	{$LNG.Lo3} {$dm_win} {$LNG.Lo99} 
			</font> 
	</div>
   <div class="ally_contents sepor_conten development_row">
  <div class="development_text">  {$LNG.Lo4} </div>
  
   <form method="POST">
   <select size="1" name="tickets">
   <option value="1">1</option>
   <option value="2">2</option>
   <option value="3">3</option>
   <option value="4">4</option>
   <option value="5">5</option>
   <option value="6">6</option>
   <option value="7">7</option>
   <option value="8">8</option>
   <option value="9">9</option>
   <option value="10">10</option>
   </select>
   <input type="submit" value="Buy" name="Buy">
</form>
	</div>
		
		<div class="ally_contents sepor_conten development_row">
  
	<div class="right_part">
		<div class="ally_contents">
				<tr>
		<div class="ally_contents sepor_conten development_row">
		<center>	{$user_lists} </center>
		</div>
	</tr>
		</div>
	</div>

	<tr>
		<div class="ally_contents sepor_conten development_row">
			<center>Winners </center><br>
			{$winners}
		</div>
	</tr>
	</div>

    </table>
	</div>
    <div style="display:none">
</div>
{/block}