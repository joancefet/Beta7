{block name="title" prepend}{$LNG.lm_battlesim}{/block}{block name="content"}<div id="page">
	<div id="content">
<div id="ally_content" class="conteiner">
    <div class="gray_stripe" style="padding-right:0;">
    	Moon Simulator
        <input type="button" class="right_flank input_blue" onClick="window.location = '?page=battleSimulator';" value="Battle Simulator">
    </div>
        	<div class="ally_contents">
        	The diameter of the moon: {$diameter}<br />Level of Lunar Base: {$mondbasis}<br />Number of Death Stars: {$stars}<br />protection PA: 1<br />Chance to destroy the moon is {$moonDestroyChance}% chance of destroying the deathstars is {$fleetDestroyChance}%<br /><br />Note: Modifier protection PA (Premium Account) reduces the chance of the destruction of the moon according to the "chance of destruction / Modifier protection." By default, each player (with an inactive factor) protection factor is x1.<br /><br />
        <span style='color:red;font-weight:bold;'>CAUTION!</span> Moon with a diameter of 10,000 km is not destroyed at all!
        </div>
</div>
<div class="ally_bottom" style="text-align:left;">
    <a href="game.php?page=battleSimulator&mode=MoonSim">Back</a>
</div>
    </div>
</div>
            <div class="clear"></div>            
        </div><!--/body-->{/block}