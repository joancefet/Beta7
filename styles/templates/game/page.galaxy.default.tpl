{block name="title" prepend}{$LNG.lm_galaxy}{/block}
{block name="content"}
<div id="page">
<div id="content">



	
<div id="galactic_block_1">
 <div id="galactic_header" style="position:relative;">
    	<a href="#" style="left:5px; right:auto;" onclick="return Dialog.manualinfo(5)" class="interrogation manual">?</a>
    	<form action="?page=galaxy" method="post" id="galaxy_form">
			<input id="auto" value="dr" type="hidden">
        <div class="gal_nazv" style="margin-left:15px;">Galaxy:</div>  
        <div id="nav_1">
            <input class="prev" name="galaxyeft" onclick="galaxy_submit('galaxyLeft')" type="button">
			<input class="gal_p3" name="galaxy" value="{$galaxy}" size="5" maxlength="4" tabindex="2" type="text">
            <input class="next" name="galaxyRight" onclick="galaxy_submit('galaxyRight')" type="button">
        </div><!--/nav_2-->           
        <div class="gal_p4">System:</div>        
        <div id="nav_2">
             <input type="button" class="prev" name="systemLeft" onclick="galaxy_submit('systemLeft')">
			<input class="gal_p3" type="text" name="system" value="{$system}" size="5" maxlength="4" tabindex="2">
            <input type="button" class="next" name="systemRight" onclick="galaxy_submit('systemRight')">
        </div><!--/nav_2-->
    	<div class="gal_sep"></div>
    		<input value="View" id="galactic_show" type="submit">
   		</form>
    </div><!--/galactic_header-->
	
	
	{if $action == 'sendMissle'}
    <form action="?page=fleetMissile" method="post">
	<input type="hidden" name="galaxy" value="{$galaxy}">
	<input type="hidden" name="system" value="{$system}">
	<input type="hidden" name="planet" value="{$planet}">
	<input type="hidden" name="type" value="{$type}">
	<table class="table569">
		<tr>
			<th colspan="2">{$LNG.gl_missil_launch} [{$galaxy}:{$system}:{$planet}]</th>
		</tr>
		<tr>
			<td>{$missile_count} <input type="text" name="SendMI" size="2" maxlength="7"></td>
			<td>{$LNG.gl_objective}: 
				{html_options name=Target options=$MissleSelector}
			</td>
		</tr>
		<tr>
			<th colspan="2" style="text-align:center;"><input type="submit" value="{$LNG.gl_missil_launch_action}"></th>
		</tr>
	</table>
	</form>
    {/if}
	
	
	 <div id="galactic_status">
        <div class="gal_p5">{$LNG.gl_pos}</div>
        <div class="status_sep"></div>
        <div class="gal_p6">{$LNG.gl_name_activity}</div>
        <div class="status_sep"></div>
        <div class="gal_p7">{$LNG.gl_moon}</div>
        <div class="status_sep"></div>
        <div class="gal_p8">{$LNG.gl_debris}</div>
        <div class="status_sep"></div>
        <div class="gal_p9">{$LNG.gl_player_estate}</div>
        <div class="status_sep"></div>
        <div class="gal_p10">{$LNG.gl_alliance}</div>
        <div class="status_sep"></div>
        <div class="gal_p11">{$LNG.gl_actions}</div>
    </div><!--/galactic_status-->	
	{for $planet=1 to $max_planets}
	
	    {if !isset($GalaxyRows[$planet])}
		<div class="gal_user {if $planet != 1 && $planet != 3 && $planet != 5 && $planet != 7 && $planet != 9 && $planet != 11 && $planet != 13 && $planet != 15}second{/if}">  
		
		
	 	<div class="gal_number">
        	<a href="?page=fleetTable&amp;galaxy={$galaxy}&amp;system={$system}&amp;planet={$planet}&amp;planettype=1" class="tooltip">
            <span style="color:#FF0000">{$planet}</span></a>
        </div>
		                    <div class="gal_player_cont" style="float:right">
            <a class="ico_coloni" href="?page=fleetTable&amp;galaxy={$galaxy}&amp;system={$system}&amp;planet={$planet}&amp;planettype=1&amp;target_mission=7" title="colonize"></a>    
        </div>       
                    </div>
    {elseif $GalaxyRows[$planet] === false}
	
		    <div class="gal_user {if $planet != 1 && $planet != 3 && $planet != 5 && $planet != 7 && $planet != 9 && $planet != 11 && $planet != 13 && $planet != 15}second{/if}">   
	 	<div class="gal_number">

            <span style="color:#FF1010">{$planet}</span>
        </div>
           <div class="gal_planet_name">{$LNG.gl_planet_destroyed}</div>
        </div><!--/gal_user-->     
		
    {else}
	 {$currentPlanet = $GalaxyRows[$planet]}
		 <div class="gal_user {if $currentPlanet.isFortress}fortress{elseif $planet != 1 && $planet != 3 && $planet != 5 && $planet != 7 && $planet != 9 && $planet != 11 && $planet != 13 && $planet != 15}second{/if}">   
	 	<div class="gal_number">
        	<a href="?page=fleetTable&amp;galaxy={$galaxy}&amp;system={$system}&amp;planet={$planet}&amp;planettype=1">
            <span style="color:#FC4242">{$planet}</span></a>
        </div>
			

 

 
			
				   
                    <span id="p_{$currentPlanet.planet.id}" class="tooltip_sticky" data-tooltip-content="<table style='width:220px'><tr><th colspan='2'>{$LNG.gl_planet} {$currentPlanet.planet.name} [{$galaxy}:{$system}:{$planet}]</th></tr>
					
					<tr><td style='width:80px'><img src='./styles/theme/gow/planeten/small/s_{$currentPlanet.planet.image}.jpg' height='75' width='75'></td><td>
					{if $currentPlanet.missions.6}<a href='javascript:doit(6,{$currentPlanet.planet.id});'>{$LNG.type_mission.6}</a><br><br>{/if}
					
					{if $currentPlanet.planet.phalanx}<a href='javascript:OpenPopup(&quot;?page=phalanx&amp;galaxy={$galaxy}&amp;system={$system}&amp;planet={$planet}&amp;planettype=1&quot;, &quot;&quot;, 640, 510);'>{$LNG.gl_phalanx}</a><br>{/if}
					
					{if $currentPlanet.missions.1}<a href='?page=fleetTable&amp;galaxy={$galaxy}&amp;system={$system}&amp;planet={$planet}&amp;planettype=1&amp;target_mission=1'>{$LNG.type_mission.1}</a><br>{/if}{if $currentPlanet.missions.5}<a href='?page=fleetTable&amp;galaxy={$galaxy}&amp;system={$system}&amp;planet={$planet}&amp;planettype=1&amp;target_mission=5'>{$LNG.type_mission.5}</a><br>{/if}{if $currentPlanet.missions.4}<a href='?page=fleetTable&amp;galaxy={$galaxy}&amp;system={$system}&amp;planet={$planet}&amp;planettype=1&amp;target_mission=4'>{$LNG.type_mission.4}</a><br>{/if}{if $currentPlanet.missions.3}<a href='?page=fleetTable&amp;galaxy={$galaxy}&amp;system={$system}&amp;planet={$planet}&amp;planettype=1&amp;target_mission=3'>{$LNG.type_mission.3}</a><br>{/if}{if $currentPlanet.missions.10}<a href='?page=galaxy&amp;action=sendMissle&amp;galaxy={$galaxy}&amp;system={$system}&amp;planet={$planet}'>{$LNG.type_mission.10}</a><br>{/if}{if $currentPlanet.missions.12}<a href='?page=fleetTable&amp;galaxy={$galaxy}&amp;system={$system}&amp;planet={$planet}&amp;planettype=1&amp;target_mission=12'>Harvest</a><br>{/if}
					{if $currentPlanet.missions.20}<a href='?page=fleetTable&amp;galaxy={$galaxy}&amp;system={$system}&amp;planet={$planet}&amp;planettype=1&amp;target_mission=20'>Capture</a><br>{/if}
					</td></tr></table>">
		<img  src="./styles/theme/gow/planeten/small/s_{$currentPlanet.planet.image}.jpg"  alt="">
		</span>
        <div class="gal_planet_name" ">{$currentPlanet.planet.name} {$currentPlanet.lastActivity} </div>
		
		
		
		 
		
       <div class="gal_ico_moon">
	   {if $currentPlanet.moon}
        				<div class="ico_moon tooltip_sticky" data-tooltip-content="<table><tr><th colspan='2'>{$LNG.gl_moon} [{$galaxy}:{$system}:{$planet}]</th></tr><tr><td style='width:80px'><img src='./styles/theme/gow/planeten/mond.jpg' height='75' width='75'></td><td><table style='width:100%'><tr><th colspan='2'>{$LNG.gl_features}</th></tr><tr><td>{$LNG.gl_diameter}</td><td>{$currentPlanet.moon.diameter|number}</td></tr><tr><td>{$LNG.gl_temperature}</td><td>{$currentPlanet.moon.temp_min}</td></tr><tr><th colspan=2>{$LNG.gl_actions}</th></tr><tr><td colspan='2'>
           
		{if $currentPlanet.missions.1}<a href='?page=fleetTable&amp;galaxy={$galaxy}&amp;system={$system}&amp;planet={$planet}&amp;planettype=3&amp;target_mission=1'>{$LNG.type_mission.1}</a><br>{/if}{if $currentPlanet.missions.3}<a href='?page=fleetTable&amp;galaxy={$galaxy}&amp;system={$system}&amp;planet={$planet}&amp;planettype=3&amp;target_mission=3'>{$LNG.type_mission.3}</a>{/if}{if $currentPlanet.missions.3}<br><a href='?page=fleetTable&amp;galaxy={$galaxy}&amp;system={$system}&amp;planet={$planet}&amp;planettype=3&amp;target_mission=4'>{$LNG.type_mission.4}</a>{/if}{if $currentPlanet.missions.5}<br><a href='?page=fleetTable&amp;galaxy={$galaxy}&amp;system={$system}&amp;planet={$planet}&amp;planettype=3&amp;target_mission=5'>{$LNG.type_mission.5}</a>{/if}{if $currentPlanet.missions.6}<br><a href='javascript:doit(6,{$currentPlanet.moon.id});'>{$LNG.type_mission.6}</a>{/if}{if $currentPlanet.missions.9}<br><br><a href='?page=fleetTable&amp;galaxy={$galaxy}&amp;system={$system}&amp;planet={$planet}&amp;planettype=3&amp;target_mission=9'>{$LNG.type_mission.9}</a><br>{/if}</td></tr></table></td></tr></table>">
            </div>{/if}

			        </div>
					

	   <div class="gal_ico_trash">
	   {if $currentPlanet.debris}
        					<div class="ico_trash_{if $currentPlanet.debris.metal + $currentPlanet.debris.crystal > 225000000000 }big{elseif $currentPlanet.debris.metal + $currentPlanet.debris.crystal < 225000000000 && $currentPlanet.debris.metal + $currentPlanet.debris.crystal > 7500000000}medium{elseif $currentPlanet.debris.metal + $currentPlanet.debris.crystal < 7500000000}small{/if}



							tooltip_sticky" data-tooltip-content="<table><tr><th colspan='2'>{$LNG.gl_debris_field} [{$galaxy}:{$system}:{$planet}]</th></tr><tr><td><table style='width:100%'><tr><th colspan='2'>{$LNG.gl_resources}:</th></tr><tr><td>{$LNG.tech.901}: </td><td>{$currentPlanet.debris.metal|number}</td></tr><tr><td>{$LNG.tech.902}: </td><td>{$currentPlanet.debris.crystal|number}</td></tr><tr><th colspan='2'>{$LNG.gl_actions}</th></tr><tr><td colspan='2'><a href='javascript:doit(8, {$currentPlanet.planet.id});' {if $db_link == 0}onclick='starttraining10()'{/if}>{$LNG.type_mission.8}</a></td></tr></table></td></tr></table>">
			</div>
			{/if}
        	        </div>
					 
					
					    
					
					
        <div class="gal_player_name">
        	        	<a class="tooltip_sticky" data-tooltip-content="<table><tr><th>           
            {$currentPlanet.user.playerrank}.</th></tr>
            <tr>{if !$currentPlanet.ownPlanet}{if $currentPlanet.user.isBuddy}<td><a href='#' onclick='return Dialog.Buddy({$currentPlanet.user.id})'>{$LNG.gl_buddy_request}</a></td></tr>{/if}
            <tr><td><a href='?page=EnnemiesList&amp;mode=send&amp;id={$currentPlanet.user.id}'>Add to ennemies</a></td></tr>
            <tr><td><a href='#' onclick='return Dialog.Playercard({$currentPlanet.user.id});'>{$LNG.gl_playercard}</a></td></tr>   {/if}         <tr><td><a href='?page=statistics&amp;who=1&amp;start={$currentPlanet.user.rank}'>{$LNG.gl_see_on_stats}</a></td></tr>
            
                        <tr><td>status {foreach $currentPlanet.user.class as $class}{if !$class@first}&nbsp;{/if}<span class='galaxy-short-{$class} galaxy-short'>{$ShortStatus.$class}</span>{/foreach}</td></tr>            </table>">
				
				<span class="{foreach $currentPlanet.user.class as $class}{if !$class@first} {/if}galaxy-username-{$class}{/foreach}  galaxy-username" {if !$currentPlanet.user.isEnnemies}style='color:red'{/if}{if !$currentPlanet.user.isBuddy}style='color:#eae45c'{/if}>{$currentPlanet.user.username}</span>
								<span>
								{if !empty($currentPlanet.user.class)}
				<span>(</span>{foreach $currentPlanet.user.class as $class}{if !$class@first}&nbsp;{/if}<span class="galaxy-short-{$class} galaxy-short">{$ShortStatus.$class}</span>{/foreach}<span>)</span>
				{/if}
							</a>
                    </div>
        
		
		
		
		<div class="gal_ally_name">
		
							{if $currentPlanet.alliance}
        				<a class="tooltip_sticky" data-tooltip-content="<table><tr><th>{$LNG.gl_alliance} {$currentPlanet.alliance.name} {$currentPlanet.alliance.member}</th></tr><td><table><tr><td><a href='?page=alliance&amp;mode=info&amp;id={$currentPlanet.alliance.id}'>{$LNG.gl_alliance_page}</a></td></tr><tr><td><a href='?page=statistics&amp;start={$currentPlanet.alliance.rank}&amp;who=2'>{$LNG.gl_see_on_stats}</a></td></tr></table></td></table>">
				<span class="galaxy-alliance {foreach $currentPlanet.alliance.class as $class}{if !$class@first} {/if}galaxy-alliance {$class}{/foreach}"
				{$class}> 
				{if $currentPlanet.alliance.fraction !=0}
				<img alt="" title="" class="tooltip fraction_ico_mini_t" src="styles/images/alliance/fraction_{$currentPlanet.alliance.fraction}.png" /> 
				{/if}
				{$currentPlanet.alliance.tag}</span>
			</a>
				
{/if}	
			        </div>


							                    <div class="gal_player_cont" style="float:right">
												{if $currentPlanet.action}
				{if $currentPlanet.action.esp}
        									<a class="ico_watch" title="{$LNG.gl_spy}" href="javascript:doit(6,{$currentPlanet.planet.id},{$spyShips|json|escape:'html'})">
				</a>				{/if}
{if $currentPlanet.action.message} <a href="#" class="ico_post" onclick="return Dialog.PM({$currentPlanet.user.id})" title="{$LNG.write_message}">
				</a>				      {/if}
			{if $currentPlanet.action.buddy}	<a href="#" class="ico_friend" onclick="return Dialog.Buddy({$currentPlanet.user.id})" title="{$LNG.gl_buddy_request}">
				</a>				{/if}		
				
				{if $currentPlanet.action.fortress}<span style="color:white;" class="countdown2"  secs="{$currentPlanet.isFortressTimer}"></span>	{/if}	
				
				
{/if}	        </div> 
		
		
		
		
            </div><!--/gal_user-->     
{/if}
	    
   {/for}

   <div id="gal_block_1_footer">
        <div class="gal_p19">{$max_planets + 1}</div>
        <span class="dali"></span>
        <a class="expedition" href="?page=fleetTable&amp;galaxy={$galaxy}&amp;system={$system}&amp;planet={$max_planets + 1}&amp;planettype=1&amp;target_mission=15">"{$LNG.gl_out_space}"</a>
    </div><!--/block_1_footer-->
    
</div><!--/galactic_block_1-->

<div id="send_zond">
    <table>
	<tr style="display: none;" id="fleetstatusrow">
	</tr>
	</table>
</div><!--/send_zond-->




<div id="galactic_block_2">
    <div id="block_status">
        <div class="gal_stat_1">
            <div class="gal_text_1">{$planetcount1}</div>
            <div class="gal_text_2">{$planetcount}</div>
        </div>
    
        <div class="gal_stat_2">
            <div class="gal_text_1">{$currentmip|number}</div>
            <div class="gal_text_2"> {$LNG.gl_avaible_missiles}</div>
        </div>
        <div class="gal_stat_3">
            <div class="gal_text_1"><span id="grecyclers">{$grecyclers|number}</span></div>
            <div class="gal_text_2">{$LNG.gl_avaible_grecyclers}</div>
        </div>
    
        <div class="gal_stat_4">
            <div class="gal_text_1"><span id="slots">{$maxfleetcount}</span>/{$fleetmax}</div>
            <div class="gal_text_2">{$LNG.gl_fleets}</div>
        </div>
    
        <div class="gal_stat_5">
            <div class="gal_text_1"><span id="probes">{$spyprobes|number}</span></div>
            <div class="gal_text_2">{$LNG.gl_avaible_spyprobes}</div>
        </div>
    
        <div class="gal_stat_6">
            <div class="gal_text_1"><span id="recyclers">{$recyclers|number}</span> </div>
            <div class="gal_text_2">{$LNG.gl_avaible_recyclers}</div>
        </div>
    </div><!--/block_status-->   
    
    <div id="block_diplom">
        <div id="diplom_shapka">
            <div class="diplom_color">diplomacy colors</div>
            <div class="gal_show_content">
                <div id="diplom_btn" class="gal_show_block" onclick="klicdiplo();"></div><!--/show_block-->
            </div>
        </div>
        
        <div id="diplom_content">
            <div class="block_1">
                <div class="gal_text_1">Players:</div>
                <div class="gal_text_2">Alliances:</div>
            </div>
            
            <div class="block_2">
                <div class="dipl_color first">
                    <div class="yellow"></div>
                    <div class="color_text">Friends</div>
                </div>
                
                <div class="dipl_color second">
                    <div class="red"></div>
                    <div class="color_text">Enemies</div>
                </div>
                
                <div id="attention">Color foreground color enemies friends!</div>
                
                <div class="dipl_color ally first">
                    <div class="green"></div>
                    <div class="color_text">union</div>
                </div>
                
                <div class="dipl_color ally second">
                    <div class="white"></div>
                    <div class="color_text">academy</div>
                </div>
                
                <div class="dipl_color ally third">
                    <div class="grey_yellow"></div>
                    <div class="color_text">trade relations</div>
                </div>
                
                <div class="dipl_color ally thour">
                    <div class="brown"></div>
                    <div class="color_text">Non-aggression pact</div>
                </div>
                
                <div class="dipl_color ally_2 first">
                    <div class="red"></div>
                    <div class="color_text">war</div>
                </div>
                
                <div class="dipl_color ally_2 second">
                    <div class="green"></div>
                    <div class="color_text">secret alliance</div>
                </div>
                
                <div class="dipl_color ally_2 third">
                    <div class="blue"></div>
                    <div class="color_text">their alliance</div>
                </div>
           </div><!--/block_2-->
        </div><!--/diplom_content-->
    </div><!--/block_diplom-->    
    
    <div id="diplom_faq">    
        <div id="diplom_shapka">
            <div class="spravka">Reference</div>
            <div class="gal_show_content">
                <div id="faq_btn" class="gal_show_block" onclick="kliclegend();"></div><!--/show_block-->
            </div>
        </div>
        <div id="faq_content">
            <div class="nad1">Strong player:</div>
            <div class="nad2">S</div>
            <div class="nad3">holiday mode:</div>
            <div class="nad4">VM</div>
            <div class="nad5">Inactive for more than 7 days:</div>
            <div class="nad6">i</div>
            <div class="nad7">Newbie:</div>
            <div class="nad8">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;N</div>
            <div class="nad9">blocked:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
            <div class="nad10">B</div>
            <div class="nad11">&nbsp;&nbsp;Inactive for more than 28 days:</div>
            <div class="nad12">I</div>        
        </div><!--/faq_content-->        
    </div><!--/diplom_faq-->    
</div><!--/galactic_block_2-->

<div class="clear"></div>     	
	
<script type="text/javascript">
		status_ok		= '{$LNG.gl_ajax_status_ok}';
		status_fail		= '{$LNG.gl_ajax_status_fail}';
		MaxFleetSetting = {$settings_fleetactions};
	</script>
	
	{if $tut_info == 0}
	<script type="text/javascript">
	$(function() {
		setTimeout(function() { location.reload(); }, 15000);
qtips_galaxy_der('{$man_p}', 'Place your mouse on the debris field around the planet to send the recyclers');
setInterval(function() { AJAX() }, 6000)
	});
	</script>
	{/if}
</div>
</div>
</div>
            <div class="clear"></div>            
        </div>
		
{/block}