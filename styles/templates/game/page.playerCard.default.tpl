{block name="title" prepend}{$LNG.lm_playercard}{/block}
{block name="content"}
<div id="ally_content" class="conteiner player_card" style="width:auto;">
    <div class="gray_stripe">
      	{$name} &nbsp;&nbsp;&nbsp;
        <span style="color:#999;">{$homeplanet}:
        	<a href="#" onclick="parent.location = 'game.php?page=galaxy&amp;galaxy={$galaxy}&amp;system={$system}';return false;">[{$galaxy}:{$system}:{$planet}]</a></a>
        &nbsp;&nbsp;&nbsp;
        	 {$LNG.pl_ally}: {if $allyname}<a href="#" onclick="parent.location = 'game.php?page=alliance&amp;mode=info&amp;id={$allyid}';return false;">{$allyname}</a>{else}-{/if}       </span>               
    </div> 
    
	
	{if $id != $yourid}
    <div class="left_part">
        <div class="ally_contents">
        	            <p>First Name: {$firstname}</p>
            <p>Country: {$country}</p>
            <p>City: {$city}</p>
                   
        </div>
    </div> 
    
	<div class="right_part">
        <div class="ally_contents">
        	            <p>Age: {$age}</p>
            <p>Style of play: {$playstyle}</p>
            <p>Skype: {$skype}</p>            
                    
        </div>
    </div>  
	<div class="clear"></div>    
    
    <div class="gray_stripe build_band ticket_bottom_band" style="padding-left:6px;">
    	Achievements
    	    </div>    
	{else}
	 <form action="game.php?page=playerCard" method="post" id="form">
    <input name="save" value="true" type="hidden">
    <div class="left_part">
        <div class="ally_contents">
        	            <p>First Name: <input name="p_name" value="{$firstname}" maxlength="16" type="text"></p>
            <p>Country: <input name="p_country" value="{$country}" maxlength="24" type="text"></p>
            <p>City: <input name="p_city" value="{$city}" maxlength="24" type="text"></p>
                   
        </div>
    </div> 
    
	<div class="right_part">
        <div class="ally_contents">
        	            <p>Age: <input name="p_age" value="{$age}" min="0" max="999" type="number"></p>
            <p>Style of play: <input name="p_style_game" value="{$playstyle}" maxlength="24" type="text"></p>
            <p>Skype: <input name="p_communication" value="{$skype}" maxlength="24" type="text"></p>            
                    
        </div>
    </div>  
	<div class="clear"></div>    
    
    <div class="gray_stripe build_band ticket_bottom_band" style="padding-left:6px;">
    	Achievements
                	<input class="bottom_band_submit" value="Save changes" type="submit">
    	    </div>    
    </form>
	{/if}
    
    
           
        <div style="cursor:pointer;" class="record_header" onclick="$('#achive_general').stop(false, true).slideToggle();">
        	Common
            <div class="record_header_top_line"></div>
            <div class="record_header_bottom_line"></div>
        </div> 
        <div id="achive_general" class="playercard_achive_block">
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Peace lvl. {$achievement_peace_level}">
                <img alt="Peace" src="styles/images/achiev/ach_level.png">
                <div class="playercard_achive_block_lvl">{$achievement_peace_level}</div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Combat lvl. {$achievement_combat_level}">
                <img alt="Combat" src="styles/images/achiev/ach_batle_level.png">
                <div class="playercard_achive_block_lvl">{$achievement_combat_level}</div>
            </div>
                        <div class="clear"></div>
        </div>
           
        <div style="cursor:pointer;" class="record_header" onclick="$('#achive_build').stop(false, true).slideToggle();">
        	Buildings
            <div class="record_header_top_line"></div>
            <div class="record_header_bottom_line"></div>
        </div> 
        <div id="achive_build" class="playercard_achive_block">
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Metal lvl. {$achievement_build_metal} ">
                <img alt="Metal" src="styles/images/achiev/ach_mine_metal.png">
                <div class="playercard_achive_block_lvl">{$achievement_build_metal}</div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Crystal lvl. {$achievement_build_crystal} ">
                <img alt="Crystal" src="styles/images/achiev/ach_crystal_mine.png">
                <div class="playercard_achive_block_lvl">{$achievement_build_crystal}</div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Deuterium lvl. {$achievement_build_deuterium} ">
                <img alt="Deuterium " src="styles/images/achiev/ach_deuterium_sintetizer.png">
                <div class="playercard_achive_block_lvl">{$achievement_build_deuterium}</div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Light Conveyor lvl. {$achievement_build_light} ">
                <img alt="Light Conveyor" src="styles/images/achiev/ach_conveyor1.png">
                <div class="playercard_achive_block_lvl">{$achievement_build_light}</div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Medium Conveyor lvl. {$achievement_build_medium} ">
                <img alt="Medium Conveyor" src="styles/images/achiev/ach_conveyor2.png">
                <div class="playercard_achive_block_lvl">{$achievement_build_medium}</div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Heavy Conveyor lvl. {$achievement_build_heavy} ">
                <img alt="Heavy Conveyor" src="styles/images/achiev/ach_conveyor3.png">
                <div class="playercard_achive_block_lvl">{$achievement_build_heavy}</div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="University lvl. {$achievement_build_university} ">
                <img alt="University" src="styles/images/achiev/ach_university.png">
                <div class="playercard_achive_block_lvl">{$achievement_build_university}</div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Moon Base lvl. {$achievement_build_moon} ">
                <img alt="Moon Base" src="styles/images/achiev/ach_mondbasis.png">
                <div class="playercard_achive_block_lvl">{$achievement_build_moon}</div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Phalanx lvl. {$achievement_build_phalanx} ">
                <img alt="Phalanx" src="styles/images/achiev/ach_phalanx.png">
                <div class="playercard_achive_block_lvl">{$achievement_build_phalanx}</div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Terraformer lvl. {$achievement_build_terraformer} ">
                <img alt="Terraformer" src="styles/images/achiev/ach_terraformer.png">
                <div class="playercard_achive_block_lvl">{$achievement_build_terraformer}</div>
            </div>
                        <div class="clear"></div>
        </div>
           
        <div style="cursor:pointer;" class="record_header" onclick="$('#achive_fleet').stop(false, true).slideToggle();">
        	Fleets
            <div class="record_header_top_line"></div>
            <div class="record_header_bottom_line"></div>
        </div> 
        <div id="achive_fleet" class="playercard_achive_block">
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Small Fighters lvl. {$achievements_fleets_small} ">
                <img alt="Small Fighters" src="styles/images/achiev/ach_hunter_fleet.png">
                <div class="playercard_achive_block_lvl">{$achievements_fleets_small}</div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Support Fleets lvl. {$achievements_fleets_support} ">
                <img alt="Support Fleets" src="styles/images/achiev/ach_support_fleet.png">
                <div class="playercard_achive_block_lvl">{$achievements_fleets_support}</div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Battle Fleets lvl. {$achievements_fleets_battle} ">
                <img alt="Battle Fleets" src="styles/images/achiev/ach_battle_fleet.png">
                <div class="playercard_achive_block_lvl">{$achievements_fleets_battle}</div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Destruction Class lvl. {$achievements_fleets_destruction} ">
                <img alt="Destruction Class" src="styles/images/achiev/ach_destruction_fleet.png">
                <div class="playercard_achive_block_lvl">{$achievements_fleets_destruction}</div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Seige Fleet lvl. {$achievements_fleets_seige} ">
                <img alt="Seige Fleet" src="styles/images/achiev/ach_siege_fleet.png">
                <div class="playercard_achive_block_lvl">{$achievements_fleets_seige}</div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Heavy Fleet lvl. {$achievements_fleets_heavy} ">
                <img alt="Heavy Fleet" src="styles/images/achiev/ach_heavy_fleet.png">
                <div class="playercard_achive_block_lvl">{$achievements_fleets_heavy}</div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Imperial Fleet lvl. {$achievements_fleets_imperial} ">
                <img alt="Imperial Fleet" src="styles/images/achiev/ach_emperor_fleet.png">
                <div class="playercard_achive_block_lvl">{$achievements_fleets_imperial}</div>
            </div>
                        <div class="clear"></div>
        </div>
           
        <div style="cursor:pointer;" class="record_header" onclick="$('#achive_def').stop(false, true).slideToggle();">
        	Defense
            <div class="record_header_top_line"></div>
            <div class="record_header_bottom_line"></div>
        </div> 
        <div id="achive_def" class="playercard_achive_block">
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Easy Defense lvl. {$achievement_defense_easy} ">
                <img alt="Easy Defense" src="styles/images/achiev/ach_light_def.png">
                <div class="playercard_achive_block_lvl">{$achievement_defense_easy}</div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Simple Defense lvl. {$achievement_defense_simple} ">
                <img alt="Простая Defense" src="styles/images/achiev/ach_easy_def.png">
                <div class="playercard_achive_block_lvl">{$achievement_defense_simple}</div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Average Defense lvl. {$achievement_defense_average} ">
                <img alt="Average Defense" src="styles/images/achiev/ach_medium_def.png">
                <div class="playercard_achive_block_lvl">{$achievement_defense_average}</div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="High Defense lvl. {$achievement_defense_high} ">
                <img alt="High Defense" src="styles/images/achiev/ach_high_def.png">
                <div class="playercard_achive_block_lvl">{$achievement_defense_high}</div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Heavy Defense lvl. {$achievement_defense_heavy} ">
                <img alt="Heavy Defense" src="styles/images/achiev/ach_heavy_def.png">
                <div class="playercard_achive_block_lvl">{$achievement_defense_heavy}</div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Massive Defense lvl. {$achievement_defense_massive} ">
                <img alt="Massive Defense" src="styles/images/achiev/ach_top_def.png">
                <div class="playercard_achive_block_lvl">{$achievement_defense_massive}</div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Imperial Defense lvl. {$achievement_defense_imperial} ">
                <img alt="Imperial Defense" src="styles/images/achiev/ach_emperor_def.png">
                <div class="playercard_achive_block_lvl">{$achievement_defense_imperial}</div>
            </div>
                        <div class="clear"></div>
        </div>
           
        <div style="cursor:pointer;" class="record_header" onclick="$('#achive_varia').stop(false, true).slideToggle();">
        	Misc
            <div class="record_header_top_line"></div>
            <div class="record_header_bottom_line"></div>
        </div> 
        <div id="achive_varia" class="playercard_achive_block">
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Fighter lvl. {$achievements_misc_fighter}  ">
                <img alt="Fighter" src="styles/images/achiev/ach_wons.png">
                <div class="playercard_achive_block_lvl">{$achievements_misc_fighter} </div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Destructors lvl. {$achievements_misc_destructor}  ">
                <img alt="Destructors" src="styles/images/achiev/ach_destroyer_moons.png">
                <div class="playercard_achive_block_lvl">{$achievements_misc_destructor} </div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Moons lvl. {$achievements_misc_moons}  ">
                <img alt="Moons" src="styles/images/achiev/ach_creation_moons.png">
                <div class="playercard_achive_block_lvl">{$achievements_misc_moons} </div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Hostal Victory lvl. {$achievements_misc_hostal}  ">
                <img alt="Hostal Victory" src="styles/images/achiev/ach_wons_em.png">
                <div class="playercard_achive_block_lvl">{$achievements_misc_hostal} </div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Expeditions lvl. {$achievements_misc_expe}  ">
                <img alt="Expeditions" src="styles/images/achiev/ach_expedition.png">
                <div class="playercard_achive_block_lvl">{$achievements_misc_expe} </div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Seeker lvl. {$achievements_misc_seeker}  ">
                <img alt="Seeker" src="styles/images/achiev/ach_found_tm.png">
                <div class="playercard_achive_block_lvl">{$achievements_misc_seeker} </div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Upgrades lvl. {$achievements_misc_upgrades}  ">
                <img alt="Upgrades" src="styles/images/achiev/ach_found_up.png">
                <div class="playercard_achive_block_lvl">{$achievements_misc_upgrades} </div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Upgrades Integrator lvl. {$achievements_misc_integrator}  ">
                <img alt="Upgrades Integrator" src="styles/images/achiev/ach_action_up.png">
                <div class="playercard_achive_block_lvl">{$achievements_misc_integrator} </div>
            </div>
                        <div class="clear"></div>
        </div>
        <div class="clear"></div>
    <div class="left_part">	        	
        <table class="tablesorter ally_ranks playercard_tables">
            <tbody><tr>
               <th class="gray_stripe">Statistics</th>
		<th class="gray_stripe">{$LNG.pl_points}</th>
		<th class="gray_stripe">{$LNG.pl_range}</th>
            </tr>
            <tr>
                <td style="text-align:left;">{$LNG.pl_builds}</td>
                <td>{$build_points}</td>
                <td>
                   {$build_rank} 
                    | <span style="color:#C00">{$rankInfo2}</span>                </td>
            </tr>
            <tr>
                <td style="text-align:left;">{$LNG.pl_tech}</td>
                <td>{$tech_points}</td>
                <td>
                    {$tech_rank}
                    | <span style="color:#C00">{$rankInfo1}</span>                </td>
            </tr>
            <tr>
                <td style="text-align:left;">{$LNG.pl_fleet}</td>
                <td>{$fleet_points}</td>
                <td>
                    {$fleet_rank}
                    | <span style="color:#3C3">{$rankInfo4}</span>
                                    </td>
            </tr>
            <tr>
                <td style="text-align:left;">{$LNG.pl_def}</td>
                <td>{$defs_points}</td>
                <td>
                    {$defs_rank}
                    | <span style="color:#3C3">{$rankInfo3}</span>
                                    </td>
            </tr>
            <tr>
                <td style="text-align:left;">Achievements</td>
                <td>{$ach_points}</td>
                <td>
                    {$ach_rank}
                    | <span style="color:#C00">{$rankInfo5}</span>                </td>
            </tr>
            <tr>
                <td style="text-align:left;">{$LNG.pl_total}</td>
                <td>{$total_points}</td>
                <td>
                   {$total_rank}
                    | <span style="color:#C00">{$rankInfo}</span>                </td>
            </tr>
    	</tbody></table>
    </div>
    
    <div class="right_part">
        <table class="tablesorter ally_ranks playercard_tables">
            <tbody><tr>
            	<th class="gray_stripe">Outcome of the battle</th>
                <th class="gray_stripe">{$LNG.pl_fights}</th>
                <th class="gray_stripe">{$LNG.pl_fprocent}</th>
            </tr>
            <tr>
                <td style="text-align:left;">{$LNG.pl_fightwon}</td>
                <td>{$wons}</td>
                <td>{$siegprozent} %</td>
            </tr>
            <tr>
                <td style="text-align:left;">{$LNG.pl_fightdraw}</td>
                <td>{$draws}</td>
                <td>{$drawsprozent} %</td>
            </tr>
            <tr>
                <td style="text-align:left;">{$LNG.pl_fightlose}</td>
                <td>{$loos}</td>
                <td>{$loosprozent} %</td>
            </tr>
            <tr>
                <td style="text-align:left;">{$LNG.pl_totalfight}</td>
                <td>{$totalfights}</td>
                <td>100 %</td>
            </tr> 
    	</tbody></table>  
    </div>
   	<div class="clear"></div>  
   	<div class="build_band" style="padding-right:0;">
   	</div>       
</div>
</div>
</div>
            <div class="clear"></div>            
        </div>
{/block}