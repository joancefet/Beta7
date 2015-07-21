{block name="title" prepend}Alliance Storage{/block}
{block name="content"}
<div id="page">
	<div id="content">
<div id="ally_content" class="conteiner">
    <div class="gray_stripe">
        	development alliance (<span style="font-weight:bold;">{$alliance_points} points</span>)      
     </div>
     <div class="ally_contents sepor_conten development_row">
        <div class="development_text">production rate</div>
        <div class="development_count">+{$alliance_prod}%</div>
               
        	{if $alliance_points < $alliance_prod_price}<span style="color:#95a3b0; float:right;">insufficiently <span style="color:#fff; font-weight:bold;">{$alliance_prod_price}</span></span>
 {else}
			<span style="color:#95a3b0; float:right;"><form action="game.php?page=alliance&mode=development" method="post">
				<input type="hidden" name="con" value="alliance_prod"> 
                <input type="submit" value="upgrade for {$alliance_prod_price} points"> 
            </form> </span>{/if}					
             
        <div class="clear"></div>
    </div>
    <div class="ally_contents sepor_conten development_row">
        <div class="development_text">speed fleet</div>
        <div class="development_count">+{$alliance_fleet_speed}%</div>
               
        	{if $alliance_points < $alliance_fleet_speed_price}<span style="color:#95a3b0; float:right;">insufficiently <span style="color:#fff; font-weight:bold;">{$alliance_fleet_speed_price}</span></span>  
 {else}
			<span style="color:#95a3b0; float:right;"><form action="game.php?page=alliance&mode=development" method="post">
				<input type="hidden" name="con" value="alliance_fleet_speed"> 
                <input type="submit" value="upgrade for {$alliance_fleet_speed_price} points"> 
            </form> </span>{/if}				
             
        <div class="clear"></div>
    </div>
    <div class="ally_contents sepor_conten development_row">
        <div class="development_text">Attack Power, shields and armor</div>
        <div class="development_count">+{$alliance_battle_tech}%</div>
               
        	{if $alliance_points < $alliance_battle_tech_price}<span style="color:#95a3b0; float:right;">insufficiently <span style="color:#fff; font-weight:bold;">{$alliance_battle_tech_price}</span></span>    
			 {else}
			<span style="color:#95a3b0; float:right;"><form action="game.php?page=alliance&mode=development" method="post">
				<input type="hidden" name="con" value="alliance_battle_tech"> 
                <input type="submit" value="upgrade for {$alliance_battle_tech_price} points"> 
            </form> </span>{/if}	
             
        <div class="clear"></div>
    </div>
    <div class="ally_contents sepor_conten development_row">
        <div class="development_text">Speed ​​construction of buildings</div>
        <div class="development_count">+{$alliance_build_speed}%</div>
               
        	{if $alliance_points < $alliance_build_speed_price}<span style="color:#95a3b0; float:right;">insufficiently <span style="color:#fff; font-weight:bold;">{$alliance_build_speed_price}</span></span>   
 {else}
			<span style="color:#95a3b0; float:right;"><form action="game.php?page=alliance&mode=development" method="post">
				<input type="hidden" name="con" value="alliance_build_speed"> 
                <input type="submit" value="upgrade for {$alliance_build_speed_price} points"> 
            </form> </span>{/if}			
             
        <div class="clear"></div>
    </div>
    <div class="ally_contents sepor_conten development_row">
        <div class="development_text">speed research</div>
        <div class="development_count">+{$alliance_research_speed}%</div>
               
        	{if $alliance_points < $alliance_research_speed_price}<span style="color:#95a3b0; float:right;">insufficiently <span style="color:#fff; font-weight:bold;">{$alliance_research_speed_price}</span></span>    
             {else}
			<span style="color:#95a3b0; float:right;"><form action="game.php?page=alliance&mode=development" method="post">
				<input type="hidden" name="con" value="alliance_research_speed"> 
                <input type="submit" value="upgrade for {$alliance_research_speed_price} points"> 
            </form> </span>{/if}
        <div class="clear"></div>
    </div>
    <div class="ally_contents sepor_conten development_row">
        <div class="development_text">Speed ​​construction of the fleet
		 <span class="interrogation tooltip" data-tooltip-content="<b>additionally:</b><br /> every <span style='color:#F93'>2%</span> gives <span style='color:#6C0'>+1</span> units to a second for the light conveyor<br /> every <span style='color:#F93'>4%</span> gives <span style='color:#6C0'>+1</span> units in a second for the medium conveyor<br /> every <span style='color:#F93'>8%</span> gives <span style='color:#6C0'>+1</span> units to a second for heavy conveyor">!</span></div>
        <div class="development_count">+{$alliance_fleet_construction}%</div>
               
        	{if $alliance_points < $alliance_fleet_construction_price}<span style="color:#95a3b0; float:right;">insufficiently <span style="color:#fff; font-weight:bold;">{$alliance_fleet_construction_price}</span></span>   
{else}
			<span style="color:#95a3b0; float:right;"><form action="game.php?page=alliance&mode=development" method="post">
				<input type="hidden" name="con" value="alliance_fleet_construction"> 
                <input type="submit" value="upgrade for {$alliance_fleet_construction_price} points"> 
            </form> </span>{/if}			
             
        <div class="clear"></div>
    </div>
    <div class="ally_contents sepor_conten development_row">
        <div class="development_text">Construction speed of Defense
		
		 <span class="interrogation tooltip" data-tooltip-content="<b>additionally:</b><br /> every <span style='color:#F93'>2%</span> gives <span style='color:#6C0'>+1</span> units to a second for the light conveyor<br /> every <span style='color:#F93'>4%</span> gives <span style='color:#6C0'>+1</span> units in a second for the medium conveyor<br /> every <span style='color:#F93'>8%</span> gives <span style='color:#6C0'>+1</span> units to a second for heavy conveyor">!</span>
        </div>
		
        <div class="development_count">+{$alliance_def_construction}%</div>
               
        	{if $alliance_points < $alliance_def_construction_price}<span style="color:#95a3b0; float:right;">insufficiently <span style="color:#fff; font-weight:bold;">{$alliance_def_construction_price}</span></span>   
			{else}
			<span style="color:#95a3b0; float:right;"><form action="game.php?page=alliance&mode=development" method="post">
				<input type="hidden" name="con" value="alliance_def_construction"> 
                <input type="submit" value="upgrade for {$alliance_def_construction_price} points"> 
            </form>     </span>{/if}
             
        <div class="clear"></div>
    </div>
</div>
<div class="ally_bottom" style="text-align:left;">
    <a href="?page=alliance">back</a>
</div>
</div>
</div>
            <div class="clear"></div>            
        </div>
{/block}