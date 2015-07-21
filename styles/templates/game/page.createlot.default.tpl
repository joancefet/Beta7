{block name="title" prepend}Create planet lot{/block}
{block name="content"}
<div id="tooltip" class="tip"></div>
    	<div id="body"><div id="popup_conteirer">
	<div id="content">
<div id="ally_content" class="conteiner" style="width:auto">
    <div class="gray_stripe">
    	Sell ​​Planet
    </div>
    <form name="message" id="message" action="">
        <table class="ally_ranks gray_stripe_th td_border_bottom">
        	            <tbody><tr>
                <td>Price: <input id="cost" min="546" max="4374" value="546" type="number"> Antimatter (max = 4.374)</td>
            </tr>
            <tr>
                <td>
                	<input id="submit" style="padding-left:10px; padding-right:10px;" onclick="PlanetCheck();" name="button" value="Put on the three-storey" type="button">
            	</td>
            </tr>
            <tr>
                <td style="color:#F00; font-size:11px;">
                	WARNING! Upon the sale of all the resources of the planet, the entire fleet (with the exception of solar satellite), queue and shipyard buildings on the planet, orbiting debris is removed! Beforehand removed fleet and resources from the planet! <br> Referral at sale is 5% of the planet.
                </td>
            </tr>
                    </tbody></table>
    </form>
</div>
</div>
</div>
            <div class="clear"></div>            
        </div><!--/body-->
        
       

{/block}