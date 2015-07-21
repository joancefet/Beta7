
{block name="title" prepend}Resource Package{/block}
{block name="content"}
<div id="page">
	<div id="content">
		<div id="ally_content" class="conteiner">
			<div class="gray_stripe">
				{$LNG.doubleganger1}
			</div>
			<div class="left_part">
			
		</div> 
		<ul>
			<li>{$price_metal} Metal </li>
			<li>{$price_crystal} Crystal </li> 
			<li>{$price_deuterium} Deuterium </li> 
		</ul>
		<ul>
		<div style='border-bottom:1px dashed #666; margin:7px 0 4px 0;'></div>
		<img src="styles/theme/gow/images/premiumstar.png" alt="star" width="15" height="15">{$LNG.ForMem} {if !empty($premium_active)} <span style="color:red;" class="countdown2"  secs="{$premium_active}"></span>{/if} <img src="styles/theme/gow/images/premiumstar.png" alt="star" width="15" height="15">
			<li>- {$price_metal2} Metal </li>
			<li>- {$price_crystal2} Crystal </li> 
			<li>- {$price_deuterium2} Deuterium </li> 
		</ul>
		<div>
			<div class="gray_stripe">
				{$LNG.doubleganger3}
			</div>
			<div class="ally_contents">

				<ul>
					<li>Dark Matter: {if $dm < 300000} <span style="color:red">300.000</span>{else}<span style="color:green">300.000</span>{/if} DM</li>
					<li>Anti Matter: {if $am < 1} <span style="color:red">1</span>{else}<span style="color:green">1</span>{/if} AM</li>
				</ul>
			</div>
		</div>

		<div class="ally_contents sepor_conten development_row">
			<div class="clear"></div>
		</div>


		<div class="ally_contents sepor_conten development_row">
			<div class="development_text"> {$LNG.nextIn3}</div>
			{if $dm < 300000}
			<div class="right_flank" style="color:red">{$LNG.nextIn1}</div>{else}
			<div class="right_flank">
				{if $status === true}
				<form method="POST">
					<input type="submit" name="buy" value="Buy With Darkmatter">
				</form>
				{else}
				<font color="lime"><b>{$LNG.nextIn}</font></b>
				<b><font color="yellow"><span class="countdown2" secs="{$status}"></span></font></big>
				{/if}   
			</div>
			{/if}	
			<div class="clear"></div>
		</div>
	
		<div class="ally_contents sepor_conten development_row">
			<div class="development_text"> {$LNG.nextIn2}</div>
			{if $am < 1}
			<div class="right_flank" style="color:red">{$LNG.nextIn4}</div>
			{else}
			<div class="right_flank">
				{if $status === true}
				<form method="POST">
					<input type="submit" name="buy" value="Buy With Antimatter">
				</form>
				{else}
				<font color="lime"><b>{$LNG.nextIn}</font></b>
				<b><font color="yellow"><span class="countdown2" secs="{$status}"></span></font></b>
				{/if}   
			</div>
			{/if}	
			<div class="clear"></div>
		</div>
	</div>
</div>
</div>
<div class="clear"></div>            
</div>
{/block}