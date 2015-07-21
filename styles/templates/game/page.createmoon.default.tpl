{block name="title" prepend}Create Moon{/block}
{block name="content"}
<div id="page">
<div id="content">
<div id="ally_content" class="conteiner">
	<div class="gray_stripe">
		Create Moon
	</div>
	<div class="left_part">
		<div class="gray_stripe">
			{$LNG.RMoon}
		</div>
		<div class="ally_contents">
			<ul>
									<li{$LNG.DebrisM} {if $wreckage < 50000000}<span style="color:red">50.000.000</span>{else}<span style="color:green">50.000.000</span>{/if} wreckage</li>
							</ul>
		</div>
	</div> 
	
	<div class="right_part">
		<div class="gray_stripe">
			{$LNG.CostCrMoon}
		</div>
		<div class="ally_contents">
			<ul>
									<li>{$LNG.tech.922}: {if $am < 10000}<span style="color:red">10.000</span>{else}<span style="color:green">10.000</span>{/if}</li>
							</ul>
			<ul>
									<li>{$LNG.tech.921}: {if $dm < 2000000} <span style="color:red">2.000.000</span>{else}<span style="color:green">2.000.000</span>{/if}</li>
							</ul>
		</div>
	</div>

	<div class="ally_contents sepor_conten development_row">
		<div class="clear"></div>
	</div>
	<div class="ally_contents sepor_conten development_row">
		<div class="clear"></div>
		<div class="development_text">{$LNG.create_am}</div>
		{if $possible_am == 0}
		
		<div class="right_flank" style="color:red">{$LNG.create_am_not}</div>	{else}
				<div class="right_flank">
				<form action="game.php?page=createMoon" method="post">
				<input type="hidden" name="mode" value="am"> 
                <input type="submit" value="{$LNG.create_am_buy}"> 
            </form>     
			</div>{/if}	
		<div class="clear"></div>
	</div>
	
	<div class="ally_contents sepor_conten development_row">
		<div class="development_text">{$LNG.create_dm}</div>
		{if $possible_dm == 0}
				<div class="right_flank" style="color:red">{$LNG.create_dm_not}</div>{else}
				<div class="right_flank">
				<form action="game.php?page=createMoon" method="post">
                <input type="hidden" name="mode" value="dm"> 
                <input type="submit" value="{$LNG.create_dm_buy}"> 
            </form>     
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