{block name="title" prepend}{$LNG.lm_buildings}{/block}
{block name="content"}
<div id="page">

	<div id="content">

<div id="build_content" class="conteiner">
    <div id="fildes_band">
    	<a href="game.php?page=planet" title="Changing the world" class="palanetarium_linck seting2"></a>
        <div id="fildes_band_proc" style="width:{$field_percent}%;"></div>
        <div class="fildes_band_text">
        	fields employed: <span>{$field_used}</span> of <span>{$field_max}</span>&emsp;&emsp;
        	free: <span>{$field_left}</span>
        </div>           
    </div>   
    <div id="build_elements">
	{foreach $BuildInfoList as $ID => $Element}
    			
				
				<div id="build_{$ID}" class="build_box {if !$Element.techacc}required{/if}">
            <div class="head">
                <a href="#" onclick="return Dialog.info({$ID})" class="interrogation">?</a>                
              <a href="#" onclick="return Dialog.info({$ID})">{$LNG.tech.{$ID}}</a>{if $Element.level > 0} ({$LNG.bd_lvl} {$Element.level}{if $Element.maxLevel != 255}/{$Element.maxLevel}{/if}){/if}
                 
                            </div>
                        <div class="content_box">
                <div class="image">
                   <a href="#" onclick="return Dialog.info({$ID})"><img src="./styles/theme/gow/gebaeude/{$ID}.gif" alt="" /></a>
                </div>
				
				{if !$Element.techacc}<div class="prices"><div class="price"> {$LNG.Nece}
            </div>  

		{foreach from=$Element.AllTech item=i key=k}
			   
		
			    <div class="required_block  required_smal_text">
           <a href="#" onclick="return Dialog.info({$i.requireID})" class="tooltip" data-tooltip-content="Explore:<br />{$LNG.tech.{$i.requireID}} lvl.  {$i.requireLevel} ">
                    <img src="./styles/theme/gow/gebaeude/{$i.requireID}.{if $i.requireID >=600 && $i.requireID <= 699}jpg{else}gif{/if}" alt="{$LNG.tech.{$i.requireID}}">
                    <div class="text">{$i.requireLevel}</div>
                </a>           
        </div>
		
		 {/foreach}
		
		
              


				</div>     {else}	
					
                <div class="prices">
					
                   	                        <div class="price res921">
                        	<div class="ico"></div>
        
							<div class="text">{$Element.costRessources}</div>    
							
                    	</div>
                                    
								  
				
                                                                                                 <div class="price">
                      {if !empty($Element.infoEnergy)}
							
							{$Element.infoEnergy}<br>
						{/if}                           
                    </div>
                                    
                </div>
				
				{/if}
                <div class="clear"></div>
                
                <div class="time_build">
                    
                </div>
                
                
                              
								
								
								
                               
								
									{if !$Element.techacc}{elseif $Element.maxLevel == $Element.levelToBuild}
									 <div class="btn_build_border">
									<span class="btn_build red">{$LNG.bd_maxlevel}</span>
									</div>
					{elseif ($isBusy.research && ($ID == 6 || $ID == 31)) || ($isBusy.shipyard && ($ID == 15 || $ID == 21))}
					 <div class="btn_build_border">
						<span class="btn_build red">{$LNG.bd_working}</span>
						</div>
					{else}
								{if $RoomIsOk}
							{if $CanBuildElement}
							 <div class="btn_build_border">
                																			<form action="game.php?page=dmbuild" method="post" class="build_form">
								<input type="hidden" name="cmd" value="insert">
								<input type="hidden" name="building" value="{$ID}">
    
	<button type="submit" class="btn_build">{if $Element.level == 0}{$LNG.bd_build}{else}{$LNG.bd_build_next_level}{$Element.levelToBuild + 1}{/if}</button>

        Build The Next Level 

    </button>
							</form>
							</div>
							{else}
							 <div class="btn_build_border">
							<span class="btn_build red">Not Enough Ressources</span>
							</div>
							{/if}
							
						{else}
						 <div class="btn_build_border">
						<span class="btn_build red">{$LNG.bd_no_more_fields}</span>
						</div>
						{/if}
					{/if}
																		                </div>
            </div>
                    
			
			{/foreach}
			
			
                <div class="clear"></div>
            
              
    <div class="build_band" style="padding-right:0;">
       	<a class="bd_dm_buy" href="game.php?page=dmbuild">Buy builds with dm</a>
    </div>    
           
</div><!--/build-->
</div>
</div>
            <div class="clear"></div>            
        </div><!--/body-->
		
		<script type="text/javascript">
DatatList		= {literal}{{/literal}
	{foreach $BuildInfoList as $ID => $Element}
	{literal}

"{/literal}{$ID}{literal}":{
"level":"{/literal}{$Element.level}{literal}",
"maxLevel":"{/literal}{$Element.maxLevel}{literal}",
"costRessources":{{/literal}{foreach $Element.costRessources as $RessID => $RessAmount}{literal}"921":{/literal}{$RessAmount}{/foreach}{literal}},
"elementTime":{/literal}{$Element.elementTime}{literal},
"buyable":true },
{/literal}
{/foreach}
{literal}};{/literal}


{*DatatList		= {literal}{{/literal}
	{foreach $BuildInfoList as $ID => $Element}
	{literal}

"{/literal}{$ID}{literal}":{
"level":"{/literal}{$Element.level}{literal}",
"maxLevel":"{/literal}{$Element.maxLevel}{literal}",
"factor":"1.50",
"costRessources":{{/literal}{foreach $Element.costRessources as $RessID => $RessAmount}{literal}"921":{/literal}{$RessAmount}{/foreach}{literal}},
"elementTime":{/literal}{$Element.elementTime}{literal},
"buyable":true },
{/literal}
{/foreach}
{literal}};{/literal}*}
	
	bd_operating	= '(busy)';
	LNGning			= 'not enough:';
	LNGtech901		= 'Metal';
	LNGtech902		= 'Crystal';
	LNGtech903		= 'Deuterium';
	LNGtech911		= 'Energy';
	LNGtech921		= 'Dark Matter';
	LNGtech922		= 'Anti Matter';
	short_day 		= 'd';
	short_hour 		= 'h';
	short_minute 	= 'm';
	short_second 	= 's';
	
	</script>

{/block}