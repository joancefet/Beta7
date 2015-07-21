{block name="title" prepend}{$LNG.lm_empire}{/block}
{block name="content"}
<div id="page">
	<div id="content">
<div id="ally_content" style="width:auto;" class="conteiner">
    <div class="gray_stripe">
    	{$LNG.lv_imperium_title}
		<a href="game.php?page=userAtmLogs" class="imper_gala_bonuses imper_atm_logs">User antimatter log</a>
        	</div>
        <div class="gray_stripe">
    	<div class="imper_left_part">
        	<a href="game.php?page=reduceresources" class="fleet_reduce ico_reduceresources tooltip" data-tooltip-content="Resource harvester"></a>
       		<a href="game.php?page=reducefleet" class="fleet_reduce ico_reducefleet tooltip" data-tooltip-content="Fleet harvester"></a>
        </div>
        <div class="imper_right_part">        	
            <div onclick="gorightMAX();" class="imper_goleft_2 imper_navigation"></div>
            <div onclick="goright();" class="imper_goleft imper_navigation"></div>
            <div onclick="goleftMAX();" class="imper_goright_2 imper_navigation"></div>
            <div onclick="goleft();" class="imper_goright imper_navigation"></div>  
            <div class="icovavigation">
            	<span class="record_btn ico_star record_btn_active" title="All" onclick="allopen();"></span>
                <span class="record_btn ico_builds" title="Buildings" onclick="buildsopen();"></span>
                <span class="record_btn ico_fleet" title="Fleets" onclick="fleetopen();"></span>
                <span class="record_btn ico_shield" title="Defense" onclick="defopen();"></span>
                <div class="clear"></div>
            </div>          
        </div>
	</div>
    <div class="imper_left_part">
        <div class="imper_block_image">
        	<div class="imper_block_info_text">{$LNG.lv_name}</div>
            <div class="imper_block_info_text">{$LNG.lv_coords}</div>
            <div class="imper_block_info_text">{$LNG.lv_fields}</div>
            <div class="imper_block_info_text">Go on</div>            
        </div>
    	<div class="imper_block_th">Resources</div>
                <div class="imper_block_td">{$LNG.tech.901}</div>
		        <div class="imper_block_td">{$LNG.tech.902}</div>
		        <div class="imper_block_td">{$LNG.tech.903}</div>
		        <div class="imper_block_td">{$LNG.tech.911}</div>
		        
                <div class="u000">
        <div class="imper_block_th">{$LNG.tech.0}</div> 
                {foreach $elementListallTris as $ID => $Element}
                        <div class="imper_block_td">{$LNG.tech.{$ID}}</div>
						{/foreach}
              
                </div>
        <div class="u200">
        <div class="imper_block_th">{$LNG.tech.200}</div> 
                {foreach $elementListall as $ID => $Element}
                        <div class="imper_block_td">{$LNG.tech.{$ID}}</div>
						{/foreach}
        
                </div>
        <div class="u400">
        <div class="imper_block_th">{$LNG.tech.400}</div> 
                {foreach $elementListallBis as $ID => $Element}
                        <div class="imper_block_td">{$LNG.tech.{$ID}}</div>
						{/foreach}

         
        </div>
    </div>
    <div onclick="goright();" class="imper_goleft_big"></div>
    <div onclick="goleft();" class="imper_goright_big"></div> 
    <div class="imper_right_part" id="ipper_planets">
    <table class="imper_table"><tr>
   
	{foreach $planetList as $planetRow}
        <td class="imper_f 
    		 imper_planet
                    ">
    	<div class="imper_block_vertical">        	
            <div class="imper_block_image" style="background-image:url(./styles/theme/gow/planeten/small/s_{$planetRow.image}.jpg);">
            	<div class="gradient_block_image"></div>
            	<div class="imper_block_info_text"><a href="game.php?page=overview&amp;cp={$planetRow.id}">{$planetRow.name}</a></div>
            	<div class="imper_block_info_text">
                	<a href="game.php?page=galaxy&amp;galaxy={$planetRow.galaxy}&amp;system={$planetRow.system}">[{$planetRow.galaxy}:{$planetRow.system}:{$planetRow.planet}]</a>
                </div>
                <div class="imper_block_info_text">
                	{$planetRow.current} / {$planetRow.max}
                </div>
                <a class="ico_rows_planet imper_go_planet" href="game.php?page=overview&amp;cp={$planetRow.id}"></a>
            </div>      
			
            <div class="imper_block_th"></div>        
            <div class="imper_block_td">
            	<div class="occupancy occupancy_901" style="width:{$planetRow.metal_percent}%"></div>
            	<div class="text_res">{$planetRow.resource901}</div>
            </div>
            <div class="imper_block_td">
            	<div class="occupancy occupancy_902" style="width:{$planetRow.cystal_percent}%"></div>
           		<div class="text_res">{$planetRow.resource902}</div>
            </div>
            <div class="imper_block_td">
            	<div class="occupancy occupancy_903" style="width:{$planetRow.deut_percent}%"></div>
            	<div class="text_res">{$planetRow.resource903}</div>
            </div>
            <div class="imper_block_td">
            	<span >{$planetRow.resource911}</span>
            </div>
			
            
                        <div class="u000">
            <div class="imper_block_th"></div> 
                        <div class="imper_block_td">{$planetRow.metal_mine}</div>
                        <div class="imper_block_td">{$planetRow.crystal_mine}</div>
                        <div class="imper_block_td">{$planetRow.deuterium_sintetizer}</div>
                        <div class="imper_block_td">{$planetRow.solar_plant}</div>
                        <div class="imper_block_td">{$planetRow.searcher}</div>
                        <div class="imper_block_td">{$planetRow.university}</div>
                        <div class="imper_block_td">{$planetRow.fusion_plant}</div>
                        <div class="imper_block_td">{$planetRow.robot_factory}</div>
                        <div class="imper_block_td">{$planetRow.nano_factory}</div>
                        <div class="imper_block_td">{$planetRow.hangar}</div>
                        <div class="imper_block_td">{$planetRow.metal_store}</div>
                        <div class="imper_block_td">{$planetRow.crystal_store}</div>
                        <div class="imper_block_td">{$planetRow.deuterium_store}</div>
                        <div class="imper_block_td">{$planetRow.laboratory}</div>
                        <div class="imper_block_td">{$planetRow.terraformer}</div>
                        <div class="imper_block_td">{$planetRow.ally_deposit}</div>
                        <div class="imper_block_td">{$planetRow.mondbasis}</div>
                        <div class="imper_block_td">{$planetRow.phalanx}</div>
                        <div class="imper_block_td">{$planetRow.sprungtor}</div>
                        <div class="imper_block_td">{$planetRow.silo}</div>
                        <div class="imper_block_td">{$planetRow.collider}</div>
              
                        </div>
            <div class="u200">
            <div class="imper_block_th"></div> 
                         <div class="imper_block_td">{$planetRow.solar_satelit}</div>
                         <div class="imper_block_td">{$planetRow.small_ship_cargo}</div>
                         <div class="imper_block_td">{$planetRow.big_ship_cargo}</div>
                         <div class="imper_block_td">{$planetRow.light_hunter}</div>
                         <div class="imper_block_td">{$planetRow.heavy_hunter}</div>
                         <div class="imper_block_td">{$planetRow.M7}</div>
                         <div class="imper_block_td">{$planetRow.recycler}</div>
                         <div class="imper_block_td">{$planetRow.crusher}</div>
                         <div class="imper_block_td">{$planetRow.battle_ship}</div>
                         <div class="imper_block_td">{$planetRow.ev_transporter}</div>
                         <div class="imper_block_td">{$planetRow.battleship}</div>
                         <div class="imper_block_td">{$planetRow.destructor}</div>
                         <div class="imper_block_td">{$planetRow.bomber_ship}</div>
                         {*<div class="imper_block_td">{$planetRow.М19}</div>*}
                         <div class="imper_block_td">{$planetRow.giga_recykler}</div>
                         <div class="imper_block_td">{$planetRow.galleon}</div>
                         <div class="imper_block_td">{$planetRow.destroyer}</div>
                         <div class="imper_block_td">{$planetRow.dearth_star}</div>
                         <div class="imper_block_td">{$planetRow.lune_noir}</div>
                         <div class="imper_block_td">{$planetRow.M32}</div>
                         <div class="imper_block_td">{$planetRow.frigate}</div>
                         <div class="imper_block_td">{$planetRow.black_wanderer}</div>
                         <div class="imper_block_td">{$planetRow.flying_death}</div>
                         <div class="imper_block_td">{$planetRow.star_crasher}</div>
                         <div class="imper_block_td">{$planetRow.bs_class_oneil}</div>
                         <div class="imper_block_td">{$planetRow.colonizer}</div>
                         <div class="imper_block_td">{$planetRow.spy_sonde}</div>
                         <div class="imper_block_td">{$planetRow.dm_ship}</div>
                         <div class="imper_block_td">{$planetRow.Scrappy}</div>
                 
                        </div>
            <div class="u400">
            <div class="imper_block_th"></div> 
                        <div class="imper_block_td">{$planetRow.misil_launcher}</div>
                        <div class="imper_block_td">{$planetRow.small_laser}</div>
                        <div class="imper_block_td">{$planetRow.big_laser}</div>
                        <div class="imper_block_td">{$planetRow.gauss_canyon}</div>
                        <div class="imper_block_td">{$planetRow.ionic_canyon}</div>
                        <div class="imper_block_td">{$planetRow.buster_canyon}</div>
                        <div class="imper_block_td">{$planetRow.small_protection_shield}</div>
                        <div class="imper_block_td">{$planetRow.big_protection_shield}</div>
                        <div class="imper_block_td">{$planetRow.planet_protector}</div>
                        <div class="imper_block_td">{$planetRow.graviton_canyon}</div>
                        <div class="imper_block_td">{$planetRow.orbital_station}</div>
                        <div class="imper_block_td">{$planetRow.lepton_gun}</div>
                        <div class="imper_block_td">{$planetRow.proton_gun}</div>
                        <div class="imper_block_td">{$planetRow.canyon}</div>
                        <div class="imper_block_td">{$planetRow.hydrogen_gun}</div>
                        <div class="imper_block_td">{$planetRow.dora_gun}</div>
                        <div class="imper_block_td">{$planetRow.photon_cannon}</div>
                        <div class="imper_block_td">{$planetRow.particle_emitter}</div>
                        <div class="imper_block_td">{$planetRow.slim_mehador}</div>
                        <div class="imper_block_td">{$planetRow.iron_mehador}</div>
                        <div class="imper_block_td">{$planetRow.grand_mehador}</div>
                        <div class="imper_block_td">{$planetRow.interceptor_misil}</div>
                        <div class="imper_block_td">{$planetRow.interplanetary_misil}</div>
  
              
            </div>          
     	</div>
        <div class="clear"></div>
    </td>
     
    {/foreach}
     
     
      
        </tr></table>
    <div class="clear"></div> 
    </div>
</div>
</div>
</div>
            <div class="clear"></div>            
        </div>

{/block}