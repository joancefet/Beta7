{block name="title" prepend}{$LNG.lm_alliance}{/block}
{block name="content"}
<div id="page">
	<div id="content">
<div id="ally_content" class="conteiner">
    <div class="gray_stripe">   	
    	Senter 
         <span style="color:#FC6; float:right;" id="span_point">Level :{$level} {if $fraction == 2}<form action="game.php?page=Alliance" method="post">
				<input type="hidden" name="mode" value="up2"> 
                <input type="submit" value="Get 1 lvl higher"> 
            </form>{/if}</span>
	</div>
        <div class="ally_contents" style="color:#CCC; padding:0px;">
    	 <img alt="" title="" style="float:left; height:64px; width:68px;" src="styles/images/alliance/fraction_2.png" />
         <p style="padding:6px;">
         	Fraction formed from the combined empires, throughout the universe, in a single army to protect the universe from the terror Grabtor. It keeps order in the universe and live on the 3rd rules: honor, duty, discipline.
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
    	                	                	        	bumper: 
        			<span style="color:#0F6">{$Bumper}%</span>
        			<span style="color:#666;" class="tooltip" data-tooltip-content="The next level">(3%)</span><br />
                            	        	Boards: 
        			<span style="color:#0F6">{$Boards}%</span>
        			<span style="color:#666;" class="tooltip" data-tooltip-content="The next level">(3%)</span><br />
                            	        	Armament [<span style='color:#F93;'>during the attack</span>]: 
        			<span style="color:0F6">+{$armamentDA}%</span>
        			<span style="color:#666;" class="tooltip" data-tooltip-content="The next level">(-3%)</span><br />
                            	                	                	        	fleet Capacity: 
        			<span style="color:#F33">+{$FleetCapa}%</span>
        			<span style="color:#666;" class="tooltip" data-tooltip-content="The next level">(-2%)</span><br />
                            	        	fuel consumption: 
        			<span style="color:#0F6">{$FuelReduce}%</span>
        			<span style="color:#666;" class="tooltip" data-tooltip-content="The next level">(1%)</span><br />
                            	                	      
                            	                	                	                	                	                	        	The resulting combat experience in the expedition: 
        			<span style="color:#0F6">{$ComExpExpo}%</span>
        			<span style="color:#666;" class="tooltip" data-tooltip-content="The next level">(3%)</span><br />
                            	        	Get points Alliance: 
        			<span style="color:#0F6">{$GetAlliancePoints}%</span>
        			<span style="color:#666;" class="tooltip" data-tooltip-content="The next level">(5%)</span><br />
                            	                	                	                	                	                	                	                	                
       	        <br />
	          
    </div>   
	{if $fraction < 1}
    <a class="fraction_up" >
    	<form action="game.php?page=Alliance" method="post">
				<input type="hidden" name="mode" value="Fr2"> 
                <input type="submit" value="Choose this"> 
            </form> 
       
    </a>{/if}
</div>
<div class="ally_bottom" style="text-align:left;">
    <a href="?page=alliance">back</a>
</div>
</div>
</div>
            <div class="clear"></div>            
        </div>
{/block}