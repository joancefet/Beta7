{block name="title" prepend}{$LNG.lm_alliance}{/block}
{block name="content"}
<div id="page">
	<div id="content">
<div id="ally_content" class="conteiner">
    <div class="gray_stripe">   	
    	Tallkor 
        <span style="color:#FC6; float:right;" id="span_point">Level :{$level} {if $fraction == 3}<form action="game.php?page=Alliance" method="post">
				<input type="hidden" name="mode" value="up3"> 
                <input type="submit" value="Get 1 lvl higher"> 
            </form>{/if}</span>
	</div>
        <div class="ally_contents" style="color:#CCC; padding:0px;">
    	 <img alt="" title="" style="float:left; height:64px; width:68px;" src="styles/images/alliance/fraction_3.png" />
         <p style="padding:6px;">
         	Fraction having the strongest impact on the economy in the whole world. Prefer not to conduct military operations and conduct peace sentences, concluding alliances and non-aggression pacts. Is actively developing mining resources and research new technologies. Power and own well-being the only thing that bothers them.
         </p>
         <div class="clear"></div>
         <p style="padding:6px; text-align:center; color:#F00;">
         	Warning! After selecting one of fractions, you can not change it.
         </p>
    </div>
    <div class="gray_stripe">    	
    	Power Ups
	</div>
        <div class="ally_contents" style="color:#CCC; line-height:17px; position:relative;">    	
    	                	                	                	                	        	armament [<span style='color:#F93;'>during the attack</span>]: 
        			<span style="color:#0F6">{$armament}%</span>
        			<span style="color:#666;" class="tooltip" data-tooltip-content="The next level">(5%)</span><br />
                            	                	                	                	        	bumper [<span style='color:#09F;'>the defense</span>]: 
        			<span style="color:#0F6">{$Bumper}%</span>
        			<span style="color:#666;" class="tooltip" data-tooltip-content="The next level">(3%)</span><br />
                            	        	boards [<span style='color:#09F;'>the defense</span>]: 
        			<span style="color:#0F6">{$Boards}%</span>
        			<span style="color:#666;" class="tooltip" data-tooltip-content="The next level">(3%)</span><br />
                            	        	The total resource extraction: 
        			<span style="color:#0F6">{$ResourceProduk}%</span>
        			<span style="color:#666;" class="tooltip" data-tooltip-content="The next level">(2%)</span><br />
                            	        	Total energy production: 
        			<span style="color:#0F6">{$EnergyProduk}%</span>
        			<span style="color:#666;" class="tooltip" data-tooltip-content="The next level">(2%)</span><br />
                            	                	                	        	The speed of the fleet: 
        			<span style="color:#F33">{$SpeedFleet}%</span>
        			<span style="color:#666;" class="tooltip" data-tooltip-content="The next level">(-2%)</span><br />
                            	                	        	The resulting peaceful experience: 
        			<span style="color:#0F6">{$PeaceExp}%</span>
        			<span style="color:#666;" class="tooltip" data-tooltip-content="The next level">(2%)</span><br />
                            	                	            The speed of the expedition: 
        			<span style="color:#0F6">{$SpeedExpo}%</span>
        			<span style="color:#666;" class="tooltip" data-tooltip-content="The next level">(2%)</span><br />
                            	                	                	                	                
       	        
    </div>   	
	{if $fraction < 1}
  <a class="fraction_up" >
    	<form action="game.php?page=Alliance" method="post">
				<input type="hidden" name="mode" value="Fr3"> 
                <input type="submit" value="Choose this"> 
            </form> 
        
    </a>{/if}
</div>
<div class="ally_bottom" style="text-align:left;">
    <a href="?page=alliance">back</a>
</div>
</div>

            <div class="clear"></div>            
        </div>
{/block}