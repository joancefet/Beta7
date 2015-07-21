{block name="title" prepend}{$LNG.planet_message_14}{/block}
{block name="content"}
<script type="text/javascript">

	var imageCost = "The structure of one of the planet can be free to change once. Later, you can change over antimatter. The present value of the change of structure: {$Cost} AM";
</script>
<div id="page">
	<div id="content">
<div id="ally_content" class="conteiner">
    <div class="gray_stripe" style="margin-bottom:5px;">
		Changing the world
    </div>
	<div id="build_elements" class="officier_elements prem_shop">
         <div class="build_box">
            <div class="head" onclick="OpenBox('fields');">
                Increase the fields on the planet
                <span style="color:#FC0;">{$field_max}</span>
                <span id="open_btn_fields" class="prem_open_btn">+</span>
            </div>
            <div id="box_fields" class="content_box" style="height:auto;">   
                <form action="game.php?page=planet&mode=field" method="POST">
                <input type="hidden" id="type" value="200">
                <input type="hidden" id="power" value="1.1">
                <input type="hidden" id="kolvo"  value="{$kolvo}">
                <div style="padding:10px; color:#CCC; line-height:20px;">
                                + <input id="filds" name="filds" type="number" maxlength="2" size="3" onchange="Fild();" min="0" max="99" value="0" type="text">
                <input value="Enlarge" type="submit">
                Cost: <span style="color:#0F0; font-weight:bold;" id="cost_filds">0</span> 
                <a href='game.php?page=trader&amp;mode=obmen'>Dark Matter</a>                        
                                </div>
                </form>
            </div>
        </div>   
    	    	<div class="build_box">
            <div class="head" onclick="OpenBox('teleport');">
                <span style="cursor:help; float:left; margin-right:8px;" class="interrogation tooltip" data-tooltip-content="<span style='color:#F30;'>Teleportation of the planet is available every 12h (except teleportation within the system is not restricted).<br />After teleporting planets attack fleet and intergalactic mission to destroy the missiles and are not available for 15 minutes.<br>Scan phalanx is not available within 10 minutes.</span>">?</span>
                Relocate Planet
                                <span id="open_btn_teleport" class="prem_open_btn">+</span>
            </div>
            <div id="box_teleport" class="content_box" style="height:auto;"> 
            	<div style="padding:10px; color:#CCC; line-height:20px; text-align:center">
                <form action="game.php?page=planet&mode=coord" method="POST">
                    <input type="hidden" id="galaxy1" name="galaxy1" value="{$galaxy}">
                    <input type="hidden" id="system1" name="system1" value="{$system}">
                    <input type="hidden" id="planet1" name="planet1" value="{$planet}">                        
                    Galaxy: <input type="number" style="width:30px;" id="galaxy" min="1" max="5" name="galaxy" onchange="TPort();" size="1"  value="{$galaxy}" type="text">
                    System: <input type="number" style="width:60px;" id="system" min="1" max="5000" name="system" onchange="TPort();" size="3"  value="{$system}" type="text">
                    Planet: <input type="number" style="width:35px;" id="planets" min="1" max="20" name="planets" onchange="TPort();" size="1" value="{$planet}" type="text">
                    
                                            <input value="Relocate" type="submit"> <br />
                        Cost: <span style="color:#0F0; font-weight:bold;" id="cost_tp">0</span> <a href='game.php?page=trader&amp;mode=obmen'>Dark Matter</a>
                                    </form> 
                </div>    	
    		</div>
        </div>
                <div class="build_box">
            <div class="head" onclick="OpenBox('diameter');">
                <span style="cursor:help; float:left; margin-right:8px;" class="interrogation tooltip" data-tooltip-content="Bonus:<br />
&bull; Diameter<span style='color:#0C0; font-weight:bold;'>+276 &mdash; +414</span><br />                  
&bull; Fields <span style='color:#0C0; font-weight:bold;'>+12 &mdash; +18</span>">?</span>
                Increasing the diameter
                    <span style="color:#F93;">Stardust: {$stardust}</span>
                <span id="open_btn_diameter" class="prem_open_btn">+</span>
            </div>
            <div id="box_diameter" class="content_box" style="height:auto;"> 
            	<div style="padding:10px; color:#CCC; line-height:20px; text-align:center"> <span style="float:right; color:#FC0;"></span></th>
                Cost:
                Metal
                                <span style="color:{if $der_metal < $metal}#F30{else}#0F0{/if}; font-weight:bold;" class="tooltip"data-tooltip-content="Missing: 100.000.000.000">
                    {$metal1}
					
                </span>
                                Crystal
                                <span style="color:{if $crystal < $crystal2}#F30{else}#0F0{/if}; font-weight:bold;" class="tooltip"data-tooltip-content="Missing: 50.000.000.000">
                    {$crystal1}
                </span>
                                Stardust
                                <span style="color:{if $stardust < 1}#F30{else}#0F0{/if}; font-weight:bold;" class="tooltip"data-tooltip-content="Missing: 1">1</span>
								 <br />
						
						<form action="game.php?page=planet&mode=diameter" method="POST">
		<input value="{$LNG.planet_message_29}" type="submit">
		</form>
		
                                    		</div>
											
    	</div>
		
		
		
					
					
					
	</div>
	
	<div class="build_box">
        <div class="head" onclick="OpenBox('planet_image');">
            <span>Change the structure of the planet</span>
            <span id="open_btn_planet_image" class="prem_open_btn">+</span>            
        </div>
        <div id="box_planet_image" class="content_box" style="height:auto;">
        	<div style="padding:10px; color:#CCC; line-height:20px;">
            	                <div class="planetarium_img_block">
                	<div class="planetarium_img_preview" style="background-image:url(./styles/theme/gow/planeten/dschjungelplanet01.jpg);">
                    	<span class="planetarium_img_desc tooltip" data-tooltip-content="The total production of metals <span style='color:#0C3'>+2%</span><br />The total production of deuterium <span style='color:#0C3'>+3%</span><br />The speed of study <span style='color:#0C3'>-3%</span><br />">?</span>
                    </div>
                    <button class="bottom_band_submit planetarium_img_button" onclick="planetChangeImage('dschjungelplanet01');">Change</button>
                </div>
                                <div class="planetarium_img_block">
                	<div class="planetarium_img_preview" style="background-image:url(./styles/theme/gow/planeten/dschjungelplanet02.jpg);">
                    	<span class="planetarium_img_desc tooltip" data-tooltip-content="The total production of metals <span style='color:#0C3'>+2%</span><br />The total production of deuterium <span style='color:#0C3'>+3%</span><br />The speed of study <span style='color:#0C3'>-3%</span><br />">?</span>
                    </div>
                    <button class="bottom_band_submit planetarium_img_button" onclick="planetChangeImage('dschjungelplanet02');">Change</button>
                </div>
                                <div class="planetarium_img_block">
                	<div class="planetarium_img_preview" style="background-image:url(./styles/theme/gow/planeten/dschjungelplanet03.jpg);">
                    	<span class="planetarium_img_desc tooltip" data-tooltip-content="The total production of metals <span style='color:#0C3'>+2%</span><br />The total production of deuterium <span style='color:#0C3'>+3%</span><br />The speed of study <span style='color:#0C3'>-3%</span><br />">?</span>
                    </div>
                    <button class="bottom_band_submit planetarium_img_button" onclick="planetChangeImage('dschjungelplanet03');">Change</button>
                </div>
                                <div class="planetarium_img_block">
                	<div class="planetarium_img_preview" style="background-image:url(./styles/theme/gow/planeten/dschjungelplanet04.jpg);">
                    	<span class="planetarium_img_desc tooltip" data-tooltip-content="The total production of metals <span style='color:#0C3'>+2%</span><br />The total production of deuterium <span style='color:#0C3'>+3%</span><br />The speed of study <span style='color:#0C3'>-3%</span><br />">?</span>
                    </div>
                    <button class="bottom_band_submit planetarium_img_button" onclick="planetChangeImage('dschjungelplanet04');">Change</button>
                </div>
                                <div class="planetarium_img_block">
                	<div class="planetarium_img_preview" style="background-image:url(./styles/theme/gow/planeten/dschjungelplanet05.jpg);">
                    	<span class="planetarium_img_desc tooltip" data-tooltip-content="The total production of metals <span style='color:#0C3'>+2%</span><br />The total production of deuterium <span style='color:#0C3'>+3%</span><br />The speed of study <span style='color:#0C3'>-3%</span><br />">?</span>
                    </div>
                    <button class="bottom_band_submit planetarium_img_button" onclick="planetChangeImage('dschjungelplanet05');">Change</button>
                </div>
                                <div class="planetarium_img_block">
                	<div class="planetarium_img_preview" style="background-image:url(./styles/theme/gow/planeten/dschjungelplanet06.jpg);">
                    	<span class="planetarium_img_desc tooltip" data-tooltip-content="The total production of metals <span style='color:#0C3'>+2%</span><br />The total production of deuterium <span style='color:#0C3'>+3%</span><br />The speed of study <span style='color:#0C3'>-3%</span><br />">?</span>
                    </div>
                    <button class="bottom_band_submit planetarium_img_button" onclick="planetChangeImage('dschjungelplanet06');">Change</button>
                </div>
                                <div class="planetarium_img_block">
                	<div class="planetarium_img_preview" style="background-image:url(./styles/theme/gow/planeten/dschjungelplanet07.jpg);">
                    	<span class="planetarium_img_desc tooltip" data-tooltip-content="The total production of metals <span style='color:#0C3'>+2%</span><br />The total production of deuterium <span style='color:#0C3'>+3%</span><br />The speed of study <span style='color:#0C3'>-3%</span><br />">?</span>
                    </div>
                    <button class="bottom_band_submit planetarium_img_button" onclick="planetChangeImage('dschjungelplanet07');">Change</button>
                </div>
                                <div class="planetarium_img_block">
                	<div class="planetarium_img_preview" style="background-image:url(./styles/theme/gow/planeten/dschjungelplanet09.jpg);">
                    	<span class="planetarium_img_desc tooltip" data-tooltip-content="The total production of metals <span style='color:#0C3'>+2%</span><br />The total production of deuterium <span style='color:#0C3'>+3%</span><br />The speed of study <span style='color:#0C3'>-3%</span><br />">?</span>
                    </div>
                    <button class="bottom_band_submit planetarium_img_button" onclick="planetChangeImage('dschjungelplanet09');">Change</button>
                </div>
                                <div class="planetarium_img_block">
                	<div class="planetarium_img_preview" style="background-image:url(./styles/theme/gow/planeten/dschjungelplanet10.jpg);">
                    	<span class="planetarium_img_desc tooltip" data-tooltip-content="The total production of metals <span style='color:#0C3'>+2%</span><br />The total production of deuterium <span style='color:#0C3'>+3%</span><br />The speed of study <span style='color:#0C3'>-3%</span><br />">?</span>
                    </div>
                    <button class="bottom_band_submit planetarium_img_button" onclick="planetChangeImage('dschjungelplanet10');">Change</button>
                </div>
                                <div class="planetarium_img_block">
                	<div class="planetarium_img_preview" style="background-image:url(./styles/theme/gow/planeten/eisplanet01.jpg);">
                    	<span class="planetarium_img_desc tooltip" data-tooltip-content="The total production of metals <span style='color:#0C3'>+2%</span><br />The total production Crystal <span style='color:#0C3'>+4%</span><br />The total production of deuterium <span style='color:#0C3'>+2%</span><br />Total production of energy <span style='color:#0C3'>+1%</span><br />">?</span>
                    </div>
                    <button class="bottom_band_submit planetarium_img_button" onclick="planetChangeImage('eisplanet01');">Change</button>
                </div>
                                <div class="planetarium_img_block">
                	<div class="planetarium_img_preview" style="background-image:url(./styles/theme/gow/planeten/eisplanet02.jpg);">
                    	<span class="planetarium_img_desc tooltip" data-tooltip-content="The total production of metals <span style='color:#0C3'>+2%</span><br />The total production Crystal <span style='color:#0C3'>+4%</span><br />The total production of deuterium <span style='color:#0C3'>+2%</span><br />Total production of energy <span style='color:#0C3'>+1%</span><br />">?</span>
                    </div>
                    <button class="bottom_band_submit planetarium_img_button" onclick="planetChangeImage('eisplanet02');">Change</button>
                </div>
                                <div class="planetarium_img_block">
                	<div class="planetarium_img_preview" style="background-image:url(./styles/theme/gow/planeten/eisplanet03.jpg);">
                    	<span class="planetarium_img_desc tooltip" data-tooltip-content="The total production of metals <span style='color:#0C3'>+2%</span><br />The total production Crystal <span style='color:#0C3'>+4%</span><br />The total production of deuterium <span style='color:#0C3'>+2%</span><br />Total production of energy <span style='color:#0C3'>+1%</span><br />">?</span>
                    </div>
                    <button class="bottom_band_submit planetarium_img_button" onclick="planetChangeImage('eisplanet03');">Change</button>
                </div>
                                <div class="planetarium_img_block">
                	<div class="planetarium_img_preview" style="background-image:url(./styles/theme/gow/planeten/eisplanet04.jpg);">
                    	<span class="planetarium_img_desc tooltip" data-tooltip-content="The total production of metals <span style='color:#0C3'>+2%</span><br />The total production Crystal <span style='color:#0C3'>+4%</span><br />The total production of deuterium <span style='color:#0C3'>+2%</span><br />Total production of energy <span style='color:#0C3'>+1%</span><br />">?</span>
                    </div>
                    <button class="bottom_band_submit planetarium_img_button" onclick="planetChangeImage('eisplanet04');">Change</button>
                </div>
                                <div class="planetarium_img_block">
                	<div class="planetarium_img_preview" style="background-image:url(./styles/theme/gow/planeten/eisplanet05.jpg);">
                    	<span class="planetarium_img_desc tooltip" data-tooltip-content="The total production of metals <span style='color:#0C3'>+2%</span><br />The total production Crystal <span style='color:#0C3'>+4%</span><br />The total production of deuterium <span style='color:#0C3'>+2%</span><br />Total production of energy <span style='color:#0C3'>+1%</span><br />">?</span>
                    </div>
                    <button class="bottom_band_submit planetarium_img_button" onclick="planetChangeImage('eisplanet05');">Change</button>
                </div>
                                <div class="planetarium_img_block">
                	<div class="planetarium_img_preview" style="background-image:url(./styles/theme/gow/planeten/eisplanet06.jpg);">
                    	<span class="planetarium_img_desc tooltip" data-tooltip-content="The total production of metals <span style='color:#0C3'>+2%</span><br />The total production Crystal <span style='color:#0C3'>+4%</span><br />The total production of deuterium <span style='color:#0C3'>+2%</span><br />Total production of energy <span style='color:#0C3'>+1%</span><br />">?</span>
                    </div>
                    <button class="bottom_band_submit planetarium_img_button" onclick="planetChangeImage('eisplanet06');">Change</button>
                </div>
                                <div class="planetarium_img_block">
                	<div class="planetarium_img_preview" style="background-image:url(./styles/theme/gow/planeten/eisplanet07.jpg);">
                    	<span class="planetarium_img_desc tooltip" data-tooltip-content="The total production of metals <span style='color:#0C3'>+2%</span><br />The total production Crystal <span style='color:#0C3'>+4%</span><br />The total production of deuterium <span style='color:#0C3'>+2%</span><br />Total production of energy <span style='color:#0C3'>+1%</span><br />">?</span>
                    </div>
                    <button class="bottom_band_submit planetarium_img_button" onclick="planetChangeImage('eisplanet07');">Change</button>
                </div>
                                <div class="planetarium_img_block">
                	<div class="planetarium_img_preview" style="background-image:url(./styles/theme/gow/planeten/eisplanet08.jpg);">
                    	<span class="planetarium_img_desc tooltip" data-tooltip-content="The total production of metals <span style='color:#0C3'>+2%</span><br />The total production Crystal <span style='color:#0C3'>+4%</span><br />The total production of deuterium <span style='color:#0C3'>+2%</span><br />Total production of energy <span style='color:#0C3'>+1%</span><br />">?</span>
                    </div>
                    <button class="bottom_band_submit planetarium_img_button" onclick="planetChangeImage('eisplanet08');">Change</button>
                </div>
                                <div class="planetarium_img_block">
                	<div class="planetarium_img_preview" style="background-image:url(./styles/theme/gow/planeten/eisplanet09.jpg);">
                    	<span class="planetarium_img_desc tooltip" data-tooltip-content="The total production of metals <span style='color:#0C3'>+2%</span><br />The total production Crystal <span style='color:#0C3'>+4%</span><br />The total production of deuterium <span style='color:#0C3'>+2%</span><br />Total production of energy <span style='color:#0C3'>+1%</span><br />">?</span>
                    </div>
                    <button class="bottom_band_submit planetarium_img_button" onclick="planetChangeImage('eisplanet09');">Change</button>
                </div>
                                <div class="planetarium_img_block">
                	<div class="planetarium_img_preview" style="background-image:url(./styles/theme/gow/planeten/eisplanet10.jpg);">
                    	<span class="planetarium_img_desc tooltip" data-tooltip-content="The total production of metals <span style='color:#0C3'>+2%</span><br />The total production Crystal <span style='color:#0C3'>+4%</span><br />The total production of deuterium <span style='color:#0C3'>+2%</span><br />Total production of energy <span style='color:#0C3'>+1%</span><br />">?</span>
                    </div>
                    <button class="bottom_band_submit planetarium_img_button" onclick="planetChangeImage('eisplanet10');">Change</button>
                </div>
                                <div class="planetarium_img_block">
                	<div class="planetarium_img_preview" style="background-image:url(./styles/theme/gow/planeten/gasplanet01.jpg);">
                    	<span class="planetarium_img_desc tooltip" data-tooltip-content="The total production of metals <span style='color:#0C3'>+4%</span><br />The total production Crystal <span style='color:#0C3'>+2%</span><br />The total production of deuterium <span style='color:#0C3'>+2%</span><br />">?</span>
                    </div>
                    <button class="bottom_band_submit planetarium_img_button" onclick="planetChangeImage('gasplanet01');">Change</button>
                </div>
                                <div class="planetarium_img_block">
                	<div class="planetarium_img_preview" style="background-image:url(./styles/theme/gow/planeten/gasplanet02.jpg);">
                    	<span class="planetarium_img_desc tooltip" data-tooltip-content="The total production of metals <span style='color:#0C3'>+4%</span><br />The total production Crystal <span style='color:#0C3'>+2%</span><br />The total production of deuterium <span style='color:#0C3'>+2%</span><br />">?</span>
                    </div>
                    <button class="bottom_band_submit planetarium_img_button" onclick="planetChangeImage('gasplanet02');">Change</button>
                </div>
                                <div class="planetarium_img_block">
                	<div class="planetarium_img_preview" style="background-image:url(./styles/theme/gow/planeten/gasplanet03.jpg);">
                    	<span class="planetarium_img_desc tooltip" data-tooltip-content="The total production of metals <span style='color:#0C3'>+4%</span><br />The total production Crystal <span style='color:#0C3'>+2%</span><br />The total production of deuterium <span style='color:#0C3'>+2%</span><br />">?</span>
                    </div>
                    <button class="bottom_band_submit planetarium_img_button" onclick="planetChangeImage('gasplanet03');">Change</button>
                </div>
                                <div class="planetarium_img_block">
                	<div class="planetarium_img_preview" style="background-image:url(./styles/theme/gow/planeten/gasplanet04.jpg);">
                    	<span class="planetarium_img_desc tooltip" data-tooltip-content="The total production of metals <span style='color:#0C3'>+4%</span><br />The total production Crystal <span style='color:#0C3'>+2%</span><br />The total production of deuterium <span style='color:#0C3'>+2%</span><br />">?</span>
                    </div>
                    <button class="bottom_band_submit planetarium_img_button" onclick="planetChangeImage('gasplanet04');">Change</button>
                </div>
                                <div class="planetarium_img_block">
                	<div class="planetarium_img_preview" style="background-image:url(./styles/theme/gow/planeten/gasplanet05.jpg);">
                    	<span class="planetarium_img_desc tooltip" data-tooltip-content="The total production of metals <span style='color:#0C3'>+4%</span><br />The total production Crystal <span style='color:#0C3'>+2%</span><br />The total production of deuterium <span style='color:#0C3'>+2%</span><br />">?</span>
                    </div>
                    <button class="bottom_band_submit planetarium_img_button" onclick="planetChangeImage('gasplanet05');">Change</button>
                </div>
                                <div class="planetarium_img_block">
                	<div class="planetarium_img_preview" style="background-image:url(./styles/theme/gow/planeten/gasplanet06.jpg);">
                    	<span class="planetarium_img_desc tooltip" data-tooltip-content="The total production of metals <span style='color:#0C3'>+4%</span><br />The total production Crystal <span style='color:#0C3'>+2%</span><br />The total production of deuterium <span style='color:#0C3'>+2%</span><br />">?</span>
                    </div>
                    <button class="bottom_band_submit planetarium_img_button" onclick="planetChangeImage('gasplanet06');">Change</button>
                </div>
                                <div class="planetarium_img_block">
                	<div class="planetarium_img_preview" style="background-image:url(./styles/theme/gow/planeten/gasplanet07.jpg);">
                    	<span class="planetarium_img_desc tooltip" data-tooltip-content="The total production of metals <span style='color:#0C3'>+4%</span><br />The total production Crystal <span style='color:#0C3'>+2%</span><br />The total production of deuterium <span style='color:#0C3'>+2%</span><br />">?</span>
                    </div>
                    <button class="bottom_band_submit planetarium_img_button" onclick="planetChangeImage('gasplanet07');">Change</button>
                </div>
                                <div class="planetarium_img_block">
                	<div class="planetarium_img_preview" style="background-image:url(./styles/theme/gow/planeten/gasplanet08.jpg);">
                    	<span class="planetarium_img_desc tooltip" data-tooltip-content="The total production of metals <span style='color:#0C3'>+4%</span><br />The total production Crystal <span style='color:#0C3'>+2%</span><br />The total production of deuterium <span style='color:#0C3'>+2%</span><br />">?</span>
                    </div>
                    <button class="bottom_band_submit planetarium_img_button" onclick="planetChangeImage('gasplanet08');">Change</button>
                </div>
                                <div class="planetarium_img_block">
                	<div class="planetarium_img_preview" style="background-image:url(./styles/theme/gow/planeten/normaltempplanet01.jpg);">
                    	<span class="planetarium_img_desc tooltip" data-tooltip-content="Total production of energy <span style='color:#0C3'>+3%</span><br />Бонус к конвейерам <span style='color:#0C3'>+3%</span><br />The speed of study <span style='color:#0C3'>-3%</span><br />">?</span>
                    </div>
                    <button class="bottom_band_submit planetarium_img_button" onclick="planetChangeImage('normaltempplanet01');">Change</button>
                </div>
                                <div class="planetarium_img_block">
                	<div class="planetarium_img_preview" style="background-image:url(./styles/theme/gow/planeten/normaltempplanet02.jpg);">
                    	<span class="planetarium_img_desc tooltip" data-tooltip-content="Total production of energy <span style='color:#0C3'>+3%</span><br />Бонус к конвейерам <span style='color:#0C3'>+3%</span><br />The speed of study <span style='color:#0C3'>-3%</span><br />">?</span>
                    </div>
                    <button class="bottom_band_submit planetarium_img_button" onclick="planetChangeImage('normaltempplanet02');">Change</button>
                </div>
                                <div class="planetarium_img_block">
                	<div class="planetarium_img_preview" style="background-image:url(./styles/theme/gow/planeten/normaltempplanet03.jpg);">
                    	<span class="planetarium_img_desc tooltip" data-tooltip-content="Total production of energy <span style='color:#0C3'>+3%</span><br />Бонус к конвейерам <span style='color:#0C3'>+3%</span><br />The speed of study <span style='color:#0C3'>-3%</span><br />">?</span>
                    </div>
                    <button class="bottom_band_submit planetarium_img_button" onclick="planetChangeImage('normaltempplanet03');">Change</button>
                </div>
                                <div class="planetarium_img_block">
                	<div class="planetarium_img_preview" style="background-image:url(./styles/theme/gow/planeten/normaltempplanet04.jpg);">
                    	<span class="planetarium_img_desc tooltip" data-tooltip-content="Total production of energy <span style='color:#0C3'>+3%</span><br />Бонус к конвейерам <span style='color:#0C3'>+3%</span><br />The speed of study <span style='color:#0C3'>-3%</span><br />">?</span>
                    </div>
                    <button class="bottom_band_submit planetarium_img_button" onclick="planetChangeImage('normaltempplanet04');">Change</button>
                </div>
                                <div class="planetarium_img_block">
                	<div class="planetarium_img_preview" style="background-image:url(./styles/theme/gow/planeten/normaltempplanet05.jpg);">
                    	<span class="planetarium_img_desc tooltip" data-tooltip-content="Total production of energy <span style='color:#0C3'>+3%</span><br />Бонус к конвейерам <span style='color:#0C3'>+3%</span><br />The speed of study <span style='color:#0C3'>-3%</span><br />">?</span>
                    </div>
                    <button class="bottom_band_submit planetarium_img_button" onclick="planetChangeImage('normaltempplanet05');">Change</button>
                </div>
                                <div class="planetarium_img_block">
                	<div class="planetarium_img_preview" style="background-image:url(./styles/theme/gow/planeten/normaltempplanet06.jpg);">
                    	<span class="planetarium_img_desc tooltip" data-tooltip-content="Total production of energy <span style='color:#0C3'>+3%</span><br />Бонус к конвейерам <span style='color:#0C3'>+3%</span><br />The speed of study <span style='color:#0C3'>-3%</span><br />">?</span>
                    </div>
                    <button class="bottom_band_submit planetarium_img_button" onclick="planetChangeImage('normaltempplanet06');">Change</button>
                </div>
                                <div class="planetarium_img_block">
                	<div class="planetarium_img_preview" style="background-image:url(./styles/theme/gow/planeten/normaltempplanet07.jpg);">
                    	<span class="planetarium_img_desc tooltip" data-tooltip-content="Total production of energy <span style='color:#0C3'>+3%</span><br />Бонус к конвейерам <span style='color:#0C3'>+3%</span><br />The speed of study <span style='color:#0C3'>-3%</span><br />">?</span>
                    </div>
                    <button class="bottom_band_submit planetarium_img_button" onclick="planetChangeImage('normaltempplanet07');">Change</button>
                </div>
                                <div class="planetarium_img_block">
                	<div class="planetarium_img_preview" style="background-image:url(./styles/theme/gow/planeten/trockenplanet01.jpg);">
                    	<span class="planetarium_img_desc tooltip" data-tooltip-content="The total production of metals <span style='color:#0C3'>+2%</span><br />The total production Crystal <span style='color:#0C3'>+2%</span><br />Total production of energy <span style='color:#0C3'>+4%</span><br />">?</span>
                    </div>
                    <button class="bottom_band_submit planetarium_img_button" onclick="planetChangeImage('trockenplanet01');">Change</button>
                </div>
                                <div class="planetarium_img_block">
                	<div class="planetarium_img_preview" style="background-image:url(./styles/theme/gow/planeten/trockenplanet02.jpg);">
                    	<span class="planetarium_img_desc tooltip" data-tooltip-content="The total production of metals <span style='color:#0C3'>+2%</span><br />The total production Crystal <span style='color:#0C3'>+2%</span><br />Total production of energy <span style='color:#0C3'>+4%</span><br />">?</span>
                    </div>
                    <button class="bottom_band_submit planetarium_img_button" onclick="planetChangeImage('trockenplanet02');">Change</button>
                </div>
                                <div class="planetarium_img_block">
                	<div class="planetarium_img_preview" style="background-image:url(./styles/theme/gow/planeten/trockenplanet03.jpg);">
                    	<span class="planetarium_img_desc tooltip" data-tooltip-content="The total production of metals <span style='color:#0C3'>+2%</span><br />The total production Crystal <span style='color:#0C3'>+2%</span><br />Total production of energy <span style='color:#0C3'>+4%</span><br />">?</span>
                    </div>
                    <button class="bottom_band_submit planetarium_img_button" onclick="planetChangeImage('trockenplanet03');">Change</button>
                </div>
                                <div class="planetarium_img_block">
                	<div class="planetarium_img_preview" style="background-image:url(./styles/theme/gow/planeten/trockenplanet04.jpg);">
                    	<span class="planetarium_img_desc tooltip" data-tooltip-content="The total production of metals <span style='color:#0C3'>+2%</span><br />The total production Crystal <span style='color:#0C3'>+2%</span><br />Total production of energy <span style='color:#0C3'>+4%</span><br />">?</span>
                    </div>
                    <button class="bottom_band_submit planetarium_img_button" onclick="planetChangeImage('trockenplanet04');">Change</button>
                </div>
                                <div class="planetarium_img_block">
                	<div class="planetarium_img_preview" style="background-image:url(./styles/theme/gow/planeten/trockenplanet05.jpg);">
                    	<span class="planetarium_img_desc tooltip" data-tooltip-content="The total production of metals <span style='color:#0C3'>+2%</span><br />The total production Crystal <span style='color:#0C3'>+2%</span><br />Total production of energy <span style='color:#0C3'>+4%</span><br />">?</span>
                    </div>
                    <button class="bottom_band_submit planetarium_img_button" onclick="planetChangeImage('trockenplanet05');">Change</button>
                </div>
                                <div class="planetarium_img_block">
                	<div class="planetarium_img_preview" style="background-image:url(./styles/theme/gow/planeten/trockenplanet06.jpg);">
                    	<span class="planetarium_img_desc tooltip" data-tooltip-content="The total production of metals <span style='color:#0C3'>+2%</span><br />The total production Crystal <span style='color:#0C3'>+2%</span><br />Total production of energy <span style='color:#0C3'>+4%</span><br />">?</span>
                    </div>
                    <button class="bottom_band_submit planetarium_img_button" onclick="planetChangeImage('trockenplanet06');">Change</button>
                </div>
                                <div class="planetarium_img_block">
                	<div class="planetarium_img_preview" style="background-image:url(./styles/theme/gow/planeten/trockenplanet07.jpg);">
                    	<span class="planetarium_img_desc tooltip" data-tooltip-content="The total production of metals <span style='color:#0C3'>+2%</span><br />The total production Crystal <span style='color:#0C3'>+2%</span><br />Total production of energy <span style='color:#0C3'>+4%</span><br />">?</span>
                    </div>
                    <button class="bottom_band_submit planetarium_img_button" onclick="planetChangeImage('trockenplanet07');">Change</button>
                </div>
                                <div class="planetarium_img_block">
                	<div class="planetarium_img_preview" style="background-image:url(./styles/theme/gow/planeten/trockenplanet08.jpg);">
                    	<span class="planetarium_img_desc tooltip" data-tooltip-content="The total production of metals <span style='color:#0C3'>+2%</span><br />The total production Crystal <span style='color:#0C3'>+2%</span><br />Total production of energy <span style='color:#0C3'>+4%</span><br />">?</span>
                    </div>
                    <button class="bottom_band_submit planetarium_img_button" onclick="planetChangeImage('trockenplanet08');">Change</button>
                </div>
                                <div class="planetarium_img_block">
                	<div class="planetarium_img_preview" style="background-image:url(./styles/theme/gow/planeten/trockenplanet09.jpg);">
                    	<span class="planetarium_img_desc tooltip" data-tooltip-content="The total production of metals <span style='color:#0C3'>+2%</span><br />The total production Crystal <span style='color:#0C3'>+2%</span><br />Total production of energy <span style='color:#0C3'>+4%</span><br />">?</span>
                    </div>
                    <button class="bottom_band_submit planetarium_img_button" onclick="planetChangeImage('trockenplanet09');">Change</button>
                </div>
                                <div class="planetarium_img_block">
                	<div class="planetarium_img_preview" style="background-image:url(./styles/theme/gow/planeten/trockenplanet10.jpg);">
                    	<span class="planetarium_img_desc tooltip" data-tooltip-content="The total production of metals <span style='color:#0C3'>+2%</span><br />The total production Crystal <span style='color:#0C3'>+2%</span><br />Total production of energy <span style='color:#0C3'>+4%</span><br />">?</span>
                    </div>
                    <button class="bottom_band_submit planetarium_img_button" onclick="planetChangeImage('trockenplanet10');">Change</button>
                </div>
                                <div class="planetarium_img_block">
                	<div class="planetarium_img_preview" style="background-image:url(./styles/theme/gow/planeten/wasserplanet01.jpg);">
                    	<span class="planetarium_img_desc tooltip" data-tooltip-content="The total production of deuterium <span style='color:#0C3'>+5%</span><br />Бонус к конвейерам <span style='color:#0C3'>+1%</span><br />The speed of study <span style='color:#0C3'>-2%</span><br />">?</span>
                    </div>
                    <button class="bottom_band_submit planetarium_img_button" onclick="planetChangeImage('wasserplanet01');">Change</button>
                </div>
                                <div class="planetarium_img_block">
                	<div class="planetarium_img_preview" style="background-image:url(./styles/theme/gow/planeten/wasserplanet02.jpg);">
                    	<span class="planetarium_img_desc tooltip" data-tooltip-content="The total production of deuterium <span style='color:#0C3'>+5%</span><br />Бонус к конвейерам <span style='color:#0C3'>+1%</span><br />The speed of study <span style='color:#0C3'>-2%</span><br />">?</span>
                    </div>
                    <button class="bottom_band_submit planetarium_img_button" onclick="planetChangeImage('wasserplanet02');">Change</button>
                </div>
                                <div class="planetarium_img_block">
                	<div class="planetarium_img_preview" style="background-image:url(./styles/theme/gow/planeten/wasserplanet03.jpg);">
                    	<span class="planetarium_img_desc tooltip" data-tooltip-content="The total production of deuterium <span style='color:#0C3'>+5%</span><br />Бонус к конвейерам <span style='color:#0C3'>+1%</span><br />The speed of study <span style='color:#0C3'>-2%</span><br />">?</span>
                    </div>
                    <button class="bottom_band_submit planetarium_img_button" onclick="planetChangeImage('wasserplanet03');">Change</button>
                </div>
                                <div class="planetarium_img_block">
                	<div class="planetarium_img_preview" style="background-image:url(./styles/theme/gow/planeten/wasserplanet04.jpg);">
                    	<span class="planetarium_img_desc tooltip" data-tooltip-content="The total production of deuterium <span style='color:#0C3'>+5%</span><br />Бонус к конвейерам <span style='color:#0C3'>+1%</span><br />The speed of study <span style='color:#0C3'>-2%</span><br />">?</span>
                    </div>
                    <button class="bottom_band_submit planetarium_img_button" onclick="planetChangeImage('wasserplanet04');">Change</button>
                </div>
                                <div class="planetarium_img_block">
                	<div class="planetarium_img_preview" style="background-image:url(./styles/theme/gow/planeten/wasserplanet05.jpg);">
                    	<span class="planetarium_img_desc tooltip" data-tooltip-content="The total production of deuterium <span style='color:#0C3'>+5%</span><br />Бонус к конвейерам <span style='color:#0C3'>+1%</span><br />The speed of study <span style='color:#0C3'>-2%</span><br />">?</span>
                    </div>
                    <button class="bottom_band_submit planetarium_img_button" onclick="planetChangeImage('wasserplanet05');">Change</button>
                </div>
                                <div class="planetarium_img_block">
                	<div class="planetarium_img_preview" style="background-image:url(./styles/theme/gow/planeten/wasserplanet06.jpg);">
                    	<span class="planetarium_img_desc tooltip" data-tooltip-content="The total production of deuterium <span style='color:#0C3'>+5%</span><br />Бонус к конвейерам <span style='color:#0C3'>+1%</span><br />The speed of study <span style='color:#0C3'>-2%</span><br />">?</span>
                    </div>
                    <button class="bottom_band_submit planetarium_img_button" onclick="planetChangeImage('wasserplanet06');">Change</button>
                </div>
                                <div class="planetarium_img_block">
                	<div class="planetarium_img_preview" style="background-image:url(./styles/theme/gow/planeten/wasserplanet07.jpg);">
                    	<span class="planetarium_img_desc tooltip" data-tooltip-content="The total production of deuterium <span style='color:#0C3'>+5%</span><br />Бонус к конвейерам <span style='color:#0C3'>+1%</span><br />The speed of study <span style='color:#0C3'>-2%</span><br />">?</span>
                    </div>
                    <button class="bottom_band_submit planetarium_img_button" onclick="planetChangeImage('wasserplanet07');">Change</button>
                </div>
                                <div class="planetarium_img_block">
                	<div class="planetarium_img_preview" style="background-image:url(./styles/theme/gow/planeten/wasserplanet08.jpg);">
                    	<span class="planetarium_img_desc tooltip" data-tooltip-content="The total production of deuterium <span style='color:#0C3'>+5%</span><br />Бонус к конвейерам <span style='color:#0C3'>+1%</span><br />The speed of study <span style='color:#0C3'>-2%</span><br />">?</span>
                    </div>
                    <button class="bottom_band_submit planetarium_img_button" onclick="planetChangeImage('wasserplanet08');">Change</button>
                </div>
                                <div class="planetarium_img_block">
                	<div class="planetarium_img_preview" style="background-image:url(./styles/theme/gow/planeten/wasserplanet09.jpg);">
                    	<span class="planetarium_img_desc tooltip" data-tooltip-content="The total production of deuterium <span style='color:#0C3'>+5%</span><br />Бонус к конвейерам <span style='color:#0C3'>+1%</span><br />The speed of study <span style='color:#0C3'>-2%</span><br />">?</span>
                    </div>
                    <button class="bottom_band_submit planetarium_img_button" onclick="planetChangeImage('wasserplanet09');">Change</button>
                </div>
                                <div class="planetarium_img_block">
                	<div class="planetarium_img_preview" style="background-image:url(./styles/theme/gow/planeten/wuestenplanet01.jpg);">
                    	<span class="planetarium_img_desc tooltip" data-tooltip-content="Total production of energy <span style='color:#0C3'>+3%</span><br />Бонус к конвейерам <span style='color:#0C3'>+4%</span><br />The speed of study <span style='color:#0C3'>-1%</span><br />">?</span>
                    </div>
                    <button class="bottom_band_submit planetarium_img_button" onclick="planetChangeImage('wuestenplanet01');">Change</button>
                </div>
                                <div class="planetarium_img_block">
                	<div class="planetarium_img_preview" style="background-image:url(./styles/theme/gow/planeten/wuestenplanet02.jpg);">
                    	<span class="planetarium_img_desc tooltip" data-tooltip-content="Total production of energy <span style='color:#0C3'>+3%</span><br />Бонус к конвейерам <span style='color:#0C3'>+4%</span><br />The speed of study <span style='color:#0C3'>-1%</span><br />">?</span>
                    </div>
                    <button class="bottom_band_submit planetarium_img_button" onclick="planetChangeImage('wuestenplanet02');">Change</button>
                </div>
                                <div class="planetarium_img_block">
                	<div class="planetarium_img_preview" style="background-image:url(./styles/theme/gow/planeten/wuestenplanet03.jpg);">
                    	<span class="planetarium_img_desc tooltip" data-tooltip-content="Total production of energy <span style='color:#0C3'>+3%</span><br />Бонус к конвейерам <span style='color:#0C3'>+4%</span><br />The speed of study <span style='color:#0C3'>-1%</span><br />">?</span>
                    </div>
                    <button class="bottom_band_submit planetarium_img_button" onclick="planetChangeImage('wuestenplanet03');">Change</button>
                </div>
                                <div class="planetarium_img_block">
                	<div class="planetarium_img_preview" style="background-image:url(./styles/theme/gow/planeten/wuestenplanet04.jpg);">
                    	<span class="planetarium_img_desc tooltip" data-tooltip-content="Total production of energy <span style='color:#0C3'>+3%</span><br />Бонус к конвейерам <span style='color:#0C3'>+4%</span><br />The speed of study <span style='color:#0C3'>-1%</span><br />">?</span>
                    </div>
                    <button class="bottom_band_submit planetarium_img_button" onclick="planetChangeImage('wuestenplanet04');">Change</button>
                </div>
                            </div>
        </div>
    </div>
    <div class="build_box">
        <div class="head" onclick="OpenBox('planet_rename');">
            Rename
            <span id="open_btn_planet_rename" class="prem_open_btn">+</span>
        </div>
        <div id="box_planet_rename" class="content_box" style="height:auto;">
        	<div style="padding:10px; color:#CCC; line-height:20px;">
            <label for="name">New name: </label>
            <input class="left" type="text" name="name" id="name" size="12" maxlength="7" autocomplete="off">
            <label onclick="GenerateName()" style="color:#999; margin-left:3px;">Generate</label>
            <input type="button" style="width:175px; margin-top:6px;" onclick="checkrename()" value="Send">
            </div>
        </div>
    </div>
    <div class="build_box">
        <div class="head" onclick="OpenBox('delete_planet');">
            <span style="color:#F33">Remove the planet</span>
            <span id="open_btn_delete_planet" class="prem_open_btn">+</span>            
        </div>
        <div id="box_delete_planet" class="content_box" style="height:auto;">
        	<div style="padding:10px; color:#CCC; line-height:20px;">
            <span style="color:#999;">{$ov_security_confirm}</span><br />
            <label for="password">Password: </label><input class="left" type="password" name="password" id="password" size="25" maxlength="20" autocomplete="off">
            <input type="button" onclick="checkcancel()" value="Send">
            </div>
        </div>
    </div>
</div>
</div>
</div>
            <div class="clear"></div>            
        </div>
		{/block}