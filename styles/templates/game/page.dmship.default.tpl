{block name="title" prepend}{if $mode == "defense"}{$LNG.lm_defenses}{else}{$LNG.lm_shipshard}{/if}{/block}
{block name="content"}

	
<div id="page">
<div id="content">



<form action="game.php?page=dmhangar&amp;mode={$mode}" method="post">

<div id="build_content" class="conteiner ship_build">
    <div id="fildes_band">
    	<span style="display:block; float:left; margin-left:20px;">The residue of the daily purchase limit <span style="color:#ABD3F8"> {$instant_fleet} </span> dark matter</span>
    </div> 
	{if $mode == "fleet"}
	{foreach $elementList as $ID => $Element}
    <div id="build_elements">
        <div class="build_elements">
                        <div id="s_{$ID}" class="build_box {if !$Element.techacc}required{/if}">
    <div class="head">
        <a href="#" onclick="return Dialog.info({$ID})" class="interrogation">?</a>                
        <a href="#" onclick="return Dialog.info({$ID})" class="title">
            {$LNG.tech.{$ID}}
        </a> 
		
        <span class="tooltip available" data-tooltip-content="{$LNG.bd_available}"><span id="val_{$ID}">{if $Element.available != 0} ({$Element.available|number}){/if}</span>    </div>
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
		
              


				</div>     {else}{foreach from=$Element.AllPrice item=i key=k}
			   
		
			<div class="prices">
		
					

                            <div class="price res921 ">
                    <div class="ico"></div>
                    <div class="text" data-tooltip-content="">{$i.dmprice}</div>                                        
                </div>
                  						
										</div>     
		
		 {/foreach}   
{/if}			
        <div class="clear"></div>
        
        <div class="time_build">
             
        </div>
        
       {if $NotBuilding && $Element.maxBuildable > 0 && $Element.techacc}
<div class="btn_build_border">  
				
					 <input id="input_{$ID}" type="text" name="fmenge[{$ID}]" size="7" maxlength="14" value="0" class="text" tabindex="{$smarty.foreach.FleetList.iteration}" onkeyup="counting('{$ID}');">
						
			<input class="input_btn" type="button" value="{$LNG.bd_max_ships}" onclick="$('#input_{$ID}').val('{$Element.maxBuildable}'); counting('{$ID}');">
			 </div>
			{elseif !$Element.techacc}{else}<div class="btn_build_border">
			 <span class="btn_build red">Not enough resources</span>
			  </div>
{/if}
    </div>
	</div>

                                                                
  
                                                                
                                                                
        </div>   
		 {/foreach} {/if}
		 
<div class="clear"></div>
<div class="build_band_conveyors" id="s_light">
            <span>Light Class</span>
                        	{*<a href="game.php?page=conveyors&amp;class=l">Improve light conveyor</a>*}
                    </div>
					
					
				{foreach $elementListd as $ID => $Element}
    <div id="build_elements">
        <div class="build_elements">
                        <div id="s_{$ID}" class="build_box {if !$Element.techacc}required{/if}">
    <div class="head">
        <a href="#" onclick="return Dialog.info({$ID})" class="interrogation">?</a>                
        <a href="#" onclick="return Dialog.info({$ID})" class="title">
            {$LNG.tech.{$ID}}
        </a> 
		
        <span class="tooltip available" data-tooltip-content="{$LNG.bd_available}"><span id="val_{$ID}">{if $Element.available != 0} ({$Element.available|number}){/if}</span>    </div>
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
		
		
              


				</div>     {else}{foreach from=$Element.AllPrice item=i key=k}
			   
		
			<div class="prices">
		
					

                            <div class="price res921 ">
                    <div class="ico"></div>
                    <div class="text" data-tooltip-content="">{$i.dmprice}</div>                                        
                </div>
                  						
										</div>     
		
		 {/foreach}    
{/if}					                                 

        <div class="clear"></div>
        
   <div class="time_build">
             
            	
        </div>
        
       {if $NotBuilding && $Element.maxBuildable > 0 && $Element.techacc}
<div class="btn_build_border">  
				
					 <input id="input_{$ID}" type="text" name="fmenge[{$ID}]" size="7" maxlength="14" value="0" class="text" tabindex="{$smarty.foreach.FleetList.iteration}" onkeyup="counting('{$ID}');">
						
			<input class="input_btn" type="button" value="{$LNG.bd_max_ships}" onclick="$('#input_{$ID}').val('{$Element.maxBuildable}'); counting('{$ID}');">
			 </div>
			{elseif !$Element.techacc}{else}<div class="btn_build_border">
			 <span class="btn_build red">Not enough resources</span>
			  </div>
{/if}
    </div>
	</div>

                                                                
  
                                                                
                                                                
        </div>   
		 {/foreach} 
		 
<div class="clear"></div>
				<div class="build_band_conveyors" id="s_light">
            <span>Medium Class</span>
                        	{*<a href="game.php?page=conveyors&amp;class=l">Improve light conveyor</a>*}
                    </div>
					
					
				{foreach $elementLista as $ID => $Element}
    <div id="build_elements">
        <div class="build_elements">
                        <div id="s_{$ID}" class="build_box {if !$Element.techacc}required{/if}">
    <div class="head">
        <a href="#" onclick="return Dialog.info({$ID})" class="interrogation">?</a>                
        <a href="#" onclick="return Dialog.info({$ID})" class="title">
            {$LNG.tech.{$ID}}
        </a> 
		
        <span class="tooltip available" data-tooltip-content="{$LNG.bd_available}"><span id="val_{$ID}">{if $Element.available != 0} ({$Element.available|number}){/if}</span>    </div>
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
		
		
              


				</div>     {else}{foreach from=$Element.AllPrice item=i key=k}
			   
		
			<div class="prices">
		
					

                            <div class="price res921 ">
                    <div class="ico"></div>
                    <div class="text" data-tooltip-content="">{$i.dmprice}</div>                                        
                </div>
                  						
										</div>     
		
		 {/foreach}   
{/if}			
        <div class="clear"></div>
        
       <div class="time_build">
             
            	  
             
        </div>
        
       {if $NotBuilding && $Element.maxBuildable > 0 && $Element.techacc}
<div class="btn_build_border">  
				
					 <input id="input_{$ID}" type="text" name="fmenge[{$ID}]" size="7" maxlength="14" value="0" class="text" tabindex="{$smarty.foreach.FleetList.iteration}" onkeyup="counting('{$ID}');">
						
			<input class="input_btn" type="button" value="{$LNG.bd_max_ships}" onclick="$('#input_{$ID}').val('{$Element.maxBuildable}'); counting('{$ID}');">
			 </div>
			{elseif !$Element.techacc}{else}<div class="btn_build_border">
			 <span class="btn_build red">Not enough resources</span>
			  </div>
{/if}
    </div>
	</div>

                                                                
  
                                                                
                                                                
        </div>   
		 {/foreach} 
		 
<div class="clear"></div>	
					
					
				<div class="build_band_conveyors" id="s_light">
            <span>Heavy Class</span>
                        	{*<a href="game.php?page=conveyors&amp;class=l">Improve light conveyor</a>*}
                    </div>
					
					
				{foreach $elementListq as $ID => $Element}
    <div id="build_elements">
        <div class="build_elements">
                        <div id="s_{$ID}" class="build_box {if !$Element.techacc}required{/if}">
    <div class="head">
        <a href="#" onclick="return Dialog.info({$ID})" class="interrogation">?</a>                
        <a href="#" onclick="return Dialog.info({$ID})" class="title">
            {$LNG.tech.{$ID}}
        </a> 
		
        <span class="tooltip available" data-tooltip-content="{$LNG.bd_available}"><span id="val_{$ID}">{if $Element.available != 0} ({$Element.available|number}){/if}</span>    </div>
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
		
              


				</div>     {else}{foreach from=$Element.AllPrice item=i key=k}
			   
		
			<div class="prices">
		
					

                            <div class="price res921 ">
                    <div class="ico"></div>
                    <div class="text" data-tooltip-content="">{$i.dmprice}</div>                                        
                </div>
                  						
										</div>     
		
		 {/foreach}   
{/if}			

        <div class="clear"></div>
        
<div class="time_build">
             
            	
             
        </div>
        
       {if $NotBuilding && $Element.maxBuildable > 0 && $Element.techacc}
<div class="btn_build_border">  
				
					 <input id="input_{$ID}" type="text" name="fmenge[{$ID}]" size="7" maxlength="14" value="0" class="text" tabindex="{$smarty.foreach.FleetList.iteration}" onkeyup="counting('{$ID}');">
						
			<input class="input_btn" type="button" value="{$LNG.bd_max_ships}" onclick="$('#input_{$ID}').val('{$Element.maxBuildable}'); counting('{$ID}');">
			 </div>
			{elseif !$Element.techacc}{else}<div class="btn_build_border">
			 <span class="btn_build red">Not enough resources</span>
			  </div>
{/if}
                   
    </div>
	</div>

                                                                
  
                                                                
                                                                
        </div>   
		 {/foreach} 
		 
<div class="clear"></div>	
					
					
					
					
					
					
					
					
					
        </div>
    </div> 
       
    <div class="build_band" style="text-align:center;">
        <input type="submit" value="{$LNG.bd_build_ships}">       
    </div>
    </div>
</form>

{if $mode == "fleet"}
<script type="text/javascript">
data			= {$BuildList|json};
bd_operating	= '{$LNG.bd_operating}';
bd_available	= '{$LNG.bd_available}';

	
	
	DatatList		= {literal}{{/literal}
	{foreach $elementListall as $ID => $Element}
	{literal}
	"{/literal}{$ID}{literal}":{"id":"{/literal}{$ID}{literal}","available":"{/literal}{$Element.available|number}{literal}","costRessources":{{/literal}{foreach from=$Element.AllPrice item=i key=k}{literal}"{/literal}921{literal}":{/literal}{$i.dmprice}{/foreach}{literal}},"elementTime":{/literal}0{literal},"buyable":true,"maxBuildable":"{/literal}{$Element.maxBuildable}{literal}","AlreadyBuild":false,"AlreadyBuildOne":false},
	{/literal}
	{/foreach}
	
	{literal}};{/literal}
	
	
	
	MaxCount		= 5000000000;
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
{elseif $mode == "defense"}
<script type="text/javascript">
data			= {$BuildList|json};
bd_operating	= '{$LNG.bd_operating}';
bd_available	= '{$LNG.bd_available}';
	DatatList		= {literal}{{/literal}
	{foreach $elementListall as $ID => $Element}
	{literal}
	"{/literal}{$ID}{literal}":{"id":"{/literal}{$ID}{literal}","available":"{/literal}{$Element.available|number}{literal}","costRessources":{{/literal}{foreach from=$Element.AllPrice item=i key=k}{literal}"{/literal}921{literal}":{/literal}{$i.dmprice}{/foreach}{literal}},"elementTime":{/literal}0{literal},"buyable":true,"maxBuildable":"{/literal}{$Element.maxBuildable}{literal}","AlreadyBuild":false,"AlreadyBuildOne":false},
	{/literal}
	{/foreach}
	
	{literal}};{/literal}
		MaxCount		= 5000000000;
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
{/if}
</div>
</div>
            <div class="clear"></div>            
        </div>
{/block}