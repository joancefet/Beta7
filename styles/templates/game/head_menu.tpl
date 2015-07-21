{block name="script" append}{/block}
<div id="header">
            	
                <div id="top_nav">
                
                	<div id="top_nav_part_left">
                        
                        <a title="{$LNG.hnav_overview}" {if $manual_19_step == 0}onclick="starttraining11()" {/if} {if $manual_11_step == 0}onclick="starttraining6()" {/if} {if $manual_step_3 == 0}onclick="starttraining3()" {/if}href="game.php?page=overview">
                            <span class="over"></span>
                        </a>
                        <a title="{$LNG.hnav_empire}" href="game.php?page=imperium">
                            <span class="imperia"></span>
                        </a>
                        
                        <div class="separator_nav"></div>
                        
                        <a title="{$LNG.hnav_stats}" href="game.php?page=statistics">
                            <span class="stats"></span>
                        </a>
                        <a title="{$LNG.hnav_hof}" href="game.php?page=battleHall">
                            <span class="topbk"></span>
                        </a>
                        <a title="{$LNG.hnav_record}" href="game.php?page=records">
                            <span class="record"></span>
                        </a>
                                              
                        <div class="separator_nav"></div>
                        
                        <a title="Chat" href="game.php?page=chat">
                            <span class="chat"></span>
                        </a>
                        <a title="{$LNG.hnav_forum}" href="?page=board" target="_blank">
                            <span class="forum"></span>
                        </a>
                                             	
					

<a id="a_mesage" href="game.php?page=messages" title="{$LNG.hnav_message}">

    <span class="mesages"></span>
    <span id="new_email" class="new_email" {if $new_message == 0}style="display:none;"{/if}>

        {$new_message}

    </span>

</a>						
                    </div>                    
                
                	<div class="mini_planet_navigation">
                    	                        <span class="link_back urlpalnet"  url="cp={if $previous_planet == ""}{$id}{else}{$previous_planet}{/if}"></span>
                                                                        <span class="link_next urlpalnet" url="cp={if $next_planet == ""}{$id}{else}{$next_planet}{/if}"></span>
                                            </div>
                  
<div id="planet_select">
                    	<div class="active_panet">
                    		<div class="name_palnet">{$AUPLANETS}</div> 
                            <span class="ico_build"></span>                            
                            <div class="coordinates_palnet">[{$AUGAL}:{$AUST}:{$AUPLA}]</div>
                            <div class="clear"></div>
                        </div>
                        <div id="list_palnet">
						{foreach from=$AllPlanets item=i key=k}
                        	                            <div class="separator_h"></div> 
                                                         
                            <div class="palnet_row active_palnet_row">
                            	<div class="fleet_indicators">
                                	<img id="p211736m1" style="display:none;" src="styles/images/iconav/p_select_attack.png" alt="" class="tooltip" data-tooltip-content="planet attack">                                    
                                    <img id="p211736m12" style="display:none;" src="styles/images/iconav/p_select_grab.png" alt="" class="tooltip" data-tooltip-content="planet capture">
                                    <img id="p211736m6" style="display:none;" src="styles/images/iconav/p_select_spio.png" alt="" class="tooltip" data-tooltip-content="planet spy">
                                    <img id="p211736m10" style="display:none;" src="styles/images/iconav/p_select_rocket.png" alt="" class="tooltip" data-tooltip-content="Fly a rocket to the planet!">
                                        
                                    <div class="clear"></div>
                                </div>
                            	<span class="urlpalnet" url="cp={$i.id}">
                                	<span class="name_palnet" {if $i.immunity_until > $timing}style="color:#ff5252 !important;"{/if}>{$i.name}</span>
                                    <span class="ico_build">
                                    <br>                                      <br>                                                                          </span>                                 
                            		<span class="coordinates_palnet">[{$i.galaxy}:{$i.system}:{$i.planet}]</span>
                                </span>
								{if $i.id_luna != 0}
								
								<span class="urlpalnet" url="cp={$i.id_luna}">
								<span class="moon_palnet"><img src='./styles/images/iconav/moon.png'></span>
								</span>{/if}
                                                            </div> 
                                 
							<div class="separator_h"></div>      
{/foreach} 
                        </div>
						 
                    </div><!--/planet_select--> 
                    
                    <div id="top_nav_part_right">
                        
                        <a title="{$LNG.hnav_friends}" href="game.php?page=buddyList">
                            <span class="frend"></span>
                        </a>
                        <a title="{$LNG.hnav_banlist}" href="game.php?page=banList">
                            <span class="baned"></span>
                        </a>
                                                
                      <div class="separator_nav"></div>
                        <a title="Techtree" href="game.php?page=techtree">
                        	<span class="techtree"></span>
                        </a>
                        
                       <a target="_blank" href="http://wiki.dark-space.org" title="Wiki">

    <span class="faq"></span>

</a>
                        <a title="{$LNG.hnav_rules}" href="http://dark-space.org/index.php?page=rules" target="_blank">
                            <span class="rules"></span>
                        </a>
                        <a title="{$LNG.hnav_notes}" href="javascript:Dialog.open('?page=notes', 900, 300);">
                            <span class="notes"></span>
                        </a>
                        <a title="{$LNG.hnav_support}" href="game.php?page=ticket">
                            <span class="soopart"></span>
                        </a>
                        <a title="{$LNG.hnav_search}" href="game.php?page=search">
                            <span class="search"></span>
                        </a>                        
                         
                        <div class="separator_nav"></div>
                        
                        <a title="{$LNG.hnav_option}" href="game.php?page=settings">
                            <span class="seting"></span>
                        </a>
                         
                        <div class="separator_nav"></div>
                        
                        <a  title="{$LNG.hnav_logout}" href="game.php?page=logout">
                            <span class="exit"></span>
                        </a>
                       
                    </div>                    
                </div><!--/top_nav-->
                
                <div id="level">
                	<div id="level_active" style="width:{$experience_peace_percent}%;">
                    	<div class="left_blick"></div>
                        <div class="right_blick"></div>
                    </div>
                	<div class="separs"></div>
                    <div class="separs"></div>
                    <div class="separs"></div>
                    <div class="separs"></div>
                    <div class="separs"></div>
                    <div class="separs"></div>
                    <div class="separs"></div>
                    <div class="separs"></div>
                    <div class="separs"></div>
                    <div class="separs"></div>
                    <div class="level_text tooltip" style="cursor:help !important" data-tooltip-content="
                    	<span style='color:#0C6'>{$LNG.hnav_peacelvl}</span><br>   
                        Rewards:<br>
                        &nbsp;<span style='color:#0C3'>+{$experience_peace_level}%</span> {$LNG.hnav_peace_extract}<br>
                        &nbsp;<span style='color:#0C3'>+{$experience_peace_level}%</span> {$LNG.hnav_peace_speed}<br>
                        &nbsp;<span style='color:#0C3'>+{$experience_peace_level}%</span> {$LNG.hnav_peace_energyprod}<br>
                        &nbsp;<span style='color:#0C3'>+{$peace_reward_slots}</span> {$LNG.hnav_peace_slot}<br>
                        &nbsp;<span style='color:#0C3'>+{$peace_reward_fields}</span> {$LNG.hnav_peace_planet}<br>
                        &nbsp;<span style='color:#0C3'>+{$peace_reward_golf}</span> {$LNG.hnav_peace_moon}<br>
                        <div style='border-bottom:1px dashed #666; margin:7px 0 4px 0;'></div>
                        <span style='color:#999'>{$LNG.hnav_exp} {$experience_peace} / {$experience_peace_max}</span>">
                		{$LNG.hnav_lvl} {$experience_peace_level} ({$experience_peace_percent}%)
                    </div>
                </div><!--/level-->
                
                <div id="Batlelevel">
                	<div id="Batlelevel_active" style="width:{$experience_combat_percent}%;">
                    	<div class="left_blick"></div>
                        <div class="right_blick"></div>
                    </div>
                	<div class="separs"></div>
                    <div class="separs"></div>
                    <div class="separs"></div>
                    <div class="separs"></div>
                    <div class="separs"></div>
                    <div class="separs"></div>
                    <div class="separs"></div>
                    <div class="separs"></div>
                    <div class="separs"></div>
                    <div class="separs"></div>
                    <div class="level_text tooltip" style="cursor:help !important" data-tooltip-content="
                    	<span style='color:#F33'>{$LNG.hnav_combatlvl}</span><br>                   
                        Rewards:<br>                     
                        &nbsp;<span style='color:#0C3'>+{$experience_combat_level}%</span> {$LNG.hnav_combat_tech}<br>
                        &nbsp;<span style='color:#0C3'>-{$combat_reward_deut}%</span> {$LNG.hnav_combat_fuel}<br>
                        &nbsp;<span style='color:#0C3'>+{$combat_reward_expe}%</span> {$LNG.hnav_combat_extract}<br>                       
                        &nbsp;<span style='color:#0C3'>+{$combat_reward_bonus}%</span> {$LNG.hnav_combat_bonus_but}<br> 
                        &nbsp;<span style='color:#0C3'>+{$combat_reward_collider}%</span> {$LNG.hnav_combat_collider}<br>
                        <div style='border-bottom:1px dashed #666; margin:7px 0 4px 0;'></div>
                        <span style='color:#999'>{$LNG.hnav_exp} {$experience_combat} / {$experience_combat_max}</span>">
                		{$LNG.hnav_lvl} {$experience_combat_level} ({$experience_combat_percent}%)
                    </div>
                </div><!--/Batlelevel-->