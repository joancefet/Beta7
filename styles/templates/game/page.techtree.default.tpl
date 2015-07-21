{block name="title" prepend}{$LNG.lm_technology}{/block}
{block name="content"}
<div id="page">
	<div id="content">
<div id="ally_content" class="conteiner">
    <div class="gray_stripe">
      	<div style="float:left">Technology:</div>
        <span class="record_btn ico_star record_btn_active" title="All" onclick="allopen();"></span>
        <span class="record_btn ico_builds" title="Buildings" onclick="buildsopen();"></span>
        <span class="record_btn ico_tech" title="Research" onclick="techopen();"></span>
        <span class="record_btn ico_fleet" title="Fleets" onclick="fleetopen();"></span>
        <span class="record_btn ico_shield" title="Defense" onclick="defopen();"></span>    
        <span class="record_btn ico_oficer" title="Officers" onclick="oficopen();"></span>  
            </div>
   	<div id="u0">
	{foreach $TechTreeList as $elementID => $requireList}
	{if !is_array($requireList)}
        <div class="record_header">
            {$LNG.tech.$requireList}
             <div class="record_header_top_line"></div>
            <div class="record_header_bottom_line"></div>
            <div style="color:#999; font-weight:lighter; float:right; width:53%;">{$LNG.tt_requirements}</div>
        </div>       
    	   {else}
    	            
    	           
    	            <div class="record_rows">
            <div class="record_img_utits">
                <a href="#" onclick="return Dialog.info({$elementID})">
                	<img alt="" src="./styles/theme/gow/gebaeude/{$elementID}.{if $elementID >=600 && $elementID <= 699}jpg{else}gif{/if}">
                </a>
            </div>
            <div class="record_name_utits">
                <a href="#" onclick="return Dialog.info({$elementID})">{$LNG.tech.$elementID}</a></td>
            </div>
			
			
                        <div class="required_blocks">
						
						{if $requireList}
		{foreach $requireList as $requireID => $NeedLevel}
                                <div class="required_block required_smal_text">
                    <a href="#" onclick="return Dialog.info({$requireID})" class="tooltip" data-tooltip-content="<span style='color:{if $NeedLevel.own < $NeedLevel.count}red{else}lime{/if};'>build Up:<br /> {$LNG.tech.$requireID} ({$LNG.tt_lvl} {min($NeedLevel.count, $NeedLevel.own)}/{$NeedLevel.count})</span>">
                        <img src="./styles/theme/gow/gebaeude/{$requireID}.{if $requireID >=600 && $requireID <= 699}jpg{else}gif{/if}" alt="{$LNG.tech.$requireID}" />
                        <div class="text" style="color:{if $NeedLevel.own < $NeedLevel.count}red{else}lime{/if};">{$NeedLevel.count}</div>
                    </a>            
                </div>
                     {/foreach}
	{/if}           
                            </div>
                    </div>
    	           {/if}
    	            {/foreach}
    	            
    	        </div>
   	<div id="u100">
        {foreach $TechTreeList2 as $elementID => $requireList}
	{if !is_array($requireList)}
        <div class="record_header">
            {$LNG.tech.$requireList}
             <div class="record_header_top_line"></div>
            <div class="record_header_bottom_line"></div>
            <div style="color:#999; font-weight:lighter; float:right; width:53%;">{$LNG.tt_requirements}</div>
        </div>       
    	   {else}  
    	            <div class="record_rows">
            <div class="record_img_utits">
               <a href="#" onclick="return Dialog.info({$elementID})">
                	<img alt="" src="./styles/theme/gow/gebaeude/{$elementID}.{if $elementID >=600 && $elementID <= 699}jpg{else}gif{/if}">
                </a>
            </div>
            <div class="record_name_utits">
                <a href="#" onclick="return Dialog.info({$elementID})">{$LNG.tech.$elementID}</a></td>
            </div>
                        <div class="required_blocks">
                             {if $requireList}
		{foreach $requireList as $requireID => $NeedLevel}
                                <div class="required_block required_smal_text">
                    <a href="#" onclick="return Dialog.info({$requireID})" class="tooltip" data-tooltip-content="<span style='color:{if $NeedLevel.own < $NeedLevel.count}red{else}lime{/if};'>build Up:<br /> {$LNG.tech.$requireID} ({$LNG.tt_lvl} {min($NeedLevel.count, $NeedLevel.own)}/{$NeedLevel.count})</span>">
                        <img src="./styles/theme/gow/gebaeude/{$requireID}.{if $requireID >=600 && $requireID <= 699}jpg{else}gif{/if}" alt="{$LNG.tech.$requireID}" />
                        <div class="text" style="color:{if $NeedLevel.own < $NeedLevel.count}red{else}lime{/if};">{$NeedLevel.count}</div>
                    </a>            
                </div>
                     {/foreach}
	{/if}
                            </div>
                    </div>
    	             {/if}
    	            {/foreach}
    	           
    	        </div>
   	<div id="u200">
        {foreach $TechTreeList3 as $elementID => $requireList}
	{if !is_array($requireList)}
        <div class="record_header">
            {$LNG.tech.$requireList}
             <div class="record_header_top_line"></div>
            <div class="record_header_bottom_line"></div>
            <div style="color:#999; font-weight:lighter; float:right; width:53%;">{$LNG.tt_requirements}</div>
        </div>       
    	   {else}     
    	            <div class="record_rows">
            <div class="record_img_utits">
               <a href="#" onclick="return Dialog.info({$elementID})">
                	<img alt="" src="./styles/theme/gow/gebaeude/{$elementID}.{if $elementID >=600 && $elementID <= 699}jpg{else}gif{/if}">
                </a>
            </div>
            <div class="record_name_utits">
                <a href="#" onclick="return Dialog.info({$elementID})">{$LNG.tech.$elementID}</a></td>
            </div>
                        <div class="required_blocks">
                                {if $requireList}
		{foreach $requireList as $requireID => $NeedLevel}
                                <div class="required_block required_smal_text">
                    <a href="#" onclick="return Dialog.info({$requireID})" class="tooltip" data-tooltip-content="<span style='color:{if $NeedLevel.own < $NeedLevel.count}red{else}lime{/if};'>build Up:<br /> {$LNG.tech.$requireID} ({$LNG.tt_lvl} {min($NeedLevel.count, $NeedLevel.own)}/{$NeedLevel.count})</span>">
                        <img src="./styles/theme/gow/gebaeude/{$requireID}.{if $requireID >=600 && $requireID <= 699}jpg{else}gif{/if}" alt="{$LNG.tech.$requireID}" />
                        <div class="text" style="color:{if $NeedLevel.own < $NeedLevel.count}red{else}lime{/if};">{$NeedLevel.count}</div>
                    </a>            
                </div>
                     {/foreach}
	{/if}
                            </div>
                    </div>
    	             {/if}
    	            {/foreach}
    	       
    	        </div>
   	<div id="u400">
       {foreach $TechTreeList4 as $elementID => $requireList}
	{if !is_array($requireList)}
        <div class="record_header">
            {$LNG.tech.$requireList}
             <div class="record_header_top_line"></div>
            <div class="record_header_bottom_line"></div>
            <div style="color:#999; font-weight:lighter; float:right; width:53%;">{$LNG.tt_requirements}</div>
        </div>       
    	   {else}     
    	            <div class="record_rows">
            <div class="record_img_utits">
               <a href="#" onclick="return Dialog.info({$elementID})">
                	<img alt="" src="./styles/theme/gow/gebaeude/{$elementID}.{if $elementID >=600 && $elementID <= 699}jpg{else}gif{/if}">
                </a>
            </div>
            <div class="record_name_utits">
                <a href="#" onclick="return Dialog.info({$elementID})">{$LNG.tech.$elementID}</a></td>
            </div>
                        <div class="required_blocks">
                                {if $requireList}
		{foreach $requireList as $requireID => $NeedLevel}
                                <div class="required_block required_smal_text">
                    <a href="#" onclick="return Dialog.info({$requireID})" class="tooltip" data-tooltip-content="<span style='color:{if $NeedLevel.own < $NeedLevel.count}red{else}lime{/if};'>build Up:<br /> {$LNG.tech.$requireID} ({$LNG.tt_lvl} {min($NeedLevel.count, $NeedLevel.own)}/{$NeedLevel.count})</span>">
                        <img src="./styles/theme/gow/gebaeude/{$requireID}.{if $requireID >=600 && $requireID <= 699}jpg{else}gif{/if}" alt="{$LNG.tech.$requireID}" />
                        <div class="text" style="color:{if $NeedLevel.own < $NeedLevel.count}red{else}lime{/if};">{$NeedLevel.count}</div>
                    </a>            
                </div>
                     {/foreach}
	{/if}
                            </div>
                    </div>
    	             {/if}
    	            {/foreach}
    	            
    	        </div>
   	<div id="u600">
        {foreach $TechTreeList5 as $elementID => $requireList}
	{if !is_array($requireList)}
        <div class="record_header">
            {$LNG.tech.$requireList}
             <div class="record_header_top_line"></div>
            <div class="record_header_bottom_line"></div>
            <div style="color:#999; font-weight:lighter; float:right; width:53%;">{$LNG.tt_requirements}</div>
        </div>       
    	   {else}        
    	            <div class="record_rows">
            <div class="record_img_utits">
               <a href="#" onclick="return Dialog.info({$elementID})">
                	<img alt="" src="./styles/theme/gow/gebaeude/{$elementID}.{if $elementID >=600 && $elementID <= 699}jpg{else}gif{/if}">
                </a>
            </div>
            <div class="record_name_utits">
                <a href="#" onclick="return Dialog.info({$elementID})">{$LNG.tech.$elementID}</a></td>
            </div>
			<div class="required_blocks">
                                {if $requireList}
		{foreach $requireList as $requireID => $NeedLevel}
                                <div class="required_block required_smal_text">
                    <a href="#" onclick="return Dialog.info({$requireID})" class="tooltip" data-tooltip-content="<span style='color:{if $NeedLevel.own < $NeedLevel.count}red{else}lime{/if};'>build Up:<br /> {$LNG.tech.$requireID} ({$LNG.tt_lvl} {min($NeedLevel.count, $NeedLevel.own)}/{$NeedLevel.count})</span>">
                        <img src="./styles/theme/gow/gebaeude/{$requireID}.{if $requireID >=600 && $requireID <= 699}jpg{else}gif{/if}" alt="{$LNG.tech.$requireID}" />
                        <div class="text" style="color:{if $NeedLevel.own < $NeedLevel.count}red{else}lime{/if};">{$NeedLevel.count}</div>
                    </a>            
                </div>
                     {/foreach}
	{/if} </div>
                    </div>
    	         {/if}
    	            {/foreach}  
    	            
    	</div>
</div>
</div>
            <div class="clear"></div>            
        </div>
{/block}