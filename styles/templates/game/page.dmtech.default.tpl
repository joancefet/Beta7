{block name="title" prepend}{$LNG.lm_research}{/block}
{block name="content"}

	
	<div id="page">

	<div id="content">

	
{if $IsLabinBuild}<table width="100%" id="infobox" style="border: 2px solid red; text-align:center;background:transparent"><tr><td>{$LNG.bd_building_lab}</td></tr></table><br><br>{/if}

<div id="build_content" class="conteiner">
    <div id="fildes_band">
    	<a href="#" id="arrow_question" style="left:5px; right:auto;" onclick="return Dialog.manualinfo(2)" class="interrogation manual">?</a>
       	<a class="bd_dm_buy" href="game.php?page=dmtech">Buy study with dm</a>
    </div>   
    <div id="build_elements">
	 {foreach $ResearchList as $ID => $Element}   
    <div id="research_{$ID}" class="build_box {if !$Element.techacc}required{/if}">
            <div class="head">
                <a href="#" onclick="return Dialog.info({$ID})" class="interrogation">?</a>                
                <a href="#" onclick="return Dialog.info({$ID})" class="title">
                	{$LNG.tech.{$ID}}                 </a> {if $Element.level != 0} ({$LNG.bd_lvl} {$Element.level}{if $Element.maxLevel != 255}/{$Element.maxLevel}{/if}){/if}
                
            </div>
                        <div class="content_box">
                <div class="image">
                   <a href="#" onclick="return Dialog.info({$ID})"><img src="./styles/theme/gow/gebaeude/{$ID}.gif" alt="{$LNG.tech.{$ID}}" /></a>
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
                        	<div class="text " data-tooltip-content="">{$Element.costRessources}</div>                                        
                    	</div>
						

                                                                                <br>                       
                </div>{/if}
                <div class="clear"></div>
                
                
                <div class="time_build">
                              </div>
                
                
               


			   
                	
				
						
						{if !$Element.techacc}{elseif $Element.maxLevel == $Element.levelToBuild}
						<div class="btn_build_border">
						<span class="btn_build red">{$LNG.bd_maxlevel}</span>
						</div>
					{else}
					<div class="btn_build_border">
						<form action="game.php?page=dmtech" method="post" class="build_form">
							<input type="hidden" name="cmd" value="insert">
							<input type="hidden" name="tech" value="{$ID}">
						<input type="hidden" name="cmd" value="insert">
								<input type="hidden" name="building" value="{$ID}">
    
	<button type="submit" class="btn_build">{if $Element.level == 0}{$LNG.bd_build}{else}{$LNG.bd_build_next_level}{$Element.levelToBuild + 1}{/if}</button>

        Build The Next Level 

    </button>
						</form>
						</div>
					{/if}
					                
   		    	</div>
            </div>
                    

		    
    
        {/foreach}  
                       
</div><!--/build-->
</div>
</div>
            <div class="clear"></div>            
        </div>
				<script type="text/javascript">
		
		
		
			DatatList		= {literal}{{/literal}
			{foreach $ResearchList as $ID => $Element}
			{literal}
			"{/literal}{$ID}{literal}":{"id":"{/literal}{$ID}{literal}",
			"elvl":"0",
			"level":"{/literal}{$Element.level}{literal}",
			"maxLevel":"{/literal}{$Element.maxLevel}{literal}",
			"costRessources":{{/literal}{foreach $Element.costRessources as $RessID => $RessAmount}{literal}"{/literal}{$RessID}{literal}":{/literal}{$RessAmount}{/foreach}{literal}},
			"buyable":true},
			{/literal}
{/foreach}
{literal}};{/literal}

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