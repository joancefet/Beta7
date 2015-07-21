{block name="title" prepend}{$LNG.lm_alliance}{/block}
{block name="content"}
<div id="page">
	<div id="content">
<div id="ally_content" class="conteiner">
    <div class="gray_stripe">   	
    	Grabtor 
          <span style="color:#FC6; float:right;" id="span_point">Level :{$level} 	{if $fraction == 1}<form action="game.php?page=Alliance" method="post">
				<input type="hidden" name="mode" value="up1"> 
                <input type="submit" value="Get 1 lvl higher"> 
            </form> {/if}</span>
	</div>
        <div class="ally_contents" style="color:#CCC; padding:0px;">
    	 <img alt="" title="" style="float:left; height:64px; width:68px;" src="styles/images/alliance/fraction_1.png" />
         <p style="padding:6px;">
         	{$LNG.Fac1}
         </p>
         <div class="clear"></div>
         <p style="padding:6px; text-align:center; color:#F00;">
         	{$LNG.warning}
         </p>
    </div>
    <div class="gray_stripe">    	
    	Power Ups
	</div>
        <div class="ally_contents" style="color:#CCC; line-height:17px; position:relative;">    	
    	                	        	{$LNG.F1}: 
        			<span style="color:#0F6">{$armament}%</span>
        			<span style="color:#666;" class="tooltip" data-tooltip-content="{$LNG.TNL}">(5%)</span><br />
                            	                	                	        	{$LNG.F1} [<span style='color:#F93;'>{$LNG.F2}</span>]: 
        			<span style="color:#0F6">{$armamentDA}%</span>
        			<span style="color:#666;" class="tooltip" data-tooltip-content="{$LNG.TNL}">(5%)</span><br />
                            	                	                	                	        	{$LNG.F3} [<span style='color:#09F;'>{$LNG.F4}</span>]: 
        			<span style="color:#F33">-{$Bumper}%</span>
        			<span style="color:#666;" class="tooltip" data-tooltip-content="{$LNG.TNL}">(-3%)</span><br />
                            	        	{$LNG.F5} [<span style='color:#09F;'>{$LNG.F4}</span>]: 
        			<span style="color:#F33">-{$Boards}%</span>
        			<span style="color:#666;" class="tooltip" data-tooltip-content="{$LNG.TNL}">(-3%)</span><br />
                            	                	                	                	                	        	 {$LNG.F6}
        			<span style="color:#0F6">{$SpeedFleet}%</span>
        			<span style="color:#666;" class="tooltip" data-tooltip-content="{$LNG.TNL}">(3%)</span><br />
                            	                	                	        	{$LNG.F7}
        			<span style="color:#0F6">{$TheftResource}%</span>
        			<span style="color:#666;" class="tooltip" data-tooltip-content="{$LNG.TNL}">(1%)</span><br />
                            	                	        	{$LNG.F8}
        			<span style="color:#0F6">{$CombatExp}%</span>
        			<span style="color:#666;" class="tooltip" data-tooltip-content="{$LNG.TNL}">(4%)</span><br />
                            	                	                	                	        	{$LNG.F9}
        			<span style="color:#0F6">{$LoseDefWreck}%</span>
        			<span style="color:#666;" class="tooltip" data-tooltip-content="{$LNG.TNL}">(4%)</span><br />
                            	        	{$LNG.F10}
        			<span style="color:#0F6">{$LoseDefWreck}%</span>
        			<span style="color:#666;" class="tooltip" data-tooltip-content="{$LNG.TNL}">(1%)</span><br />
                            	        	  {$LNG.F11}
        			<span style="color:#F33">{$RestorationDef}%</span>
        			<span style="color:#666;" class="tooltip" data-tooltip-content="{$LNG.TNL}">(-1%)</span><br />
                            	                	                	                	                	                
       	        <br />
	
                
    </div>
 	{if $fraction < 1}
    <a class="fraction_up" >
	
    	<form action="game.php?page=Alliance" method="post">
				<input type="hidden" name="mode" value="Fr1"> 
                <input type="submit" value="Choose this"> 
            </form> 
     
    </a>{/if}
</div>
<div class="ally_bottom" style="text-align:left;">
    <a href="?page=alliance">{$LNG.back}</a>
</div>
</div>
</div>
            <div class="clear"></div>            
        </div>
{/block}