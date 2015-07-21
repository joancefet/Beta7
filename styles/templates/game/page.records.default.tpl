{block name="title" prepend}{$LNG.lm_records}{/block}
{block name="content"}
<div id="page">
	<div id="content">
<div id="ally_content" class="conteiner">
    <div class="gray_stripe">
      	<div style="float:left">Records:</div>
        <span class="record_btn ico_star record_btn_active" title="All" onclick="allopen();"></span>
        <span class="record_btn ico_builds" title="Buildings" onclick="buildsopen();"></span>
        <span class="record_btn ico_tech" title="Research" onclick="techopen();"></span>
        {*<span class="record_btn ico_fleet" title="Fleets" onclick="fleetopen();"></span>*}
        <span class="record_btn ico_shield" title="Defense" onclick="defopen();"></span>
        <span style="color:#777; float:right;">Last update: {$update}</span>    
    </div>
    <div id="u000">
        <div class="record_header">
            {$LNG.tech.0}
            <div class="record_header_top_line"></div>
            <div class="record_header_bottom_line"></div>
        </div>
		
		{foreach $buildList as $elementID => $elementRow}
                <div class="record_rows ">
            <div class="bottom_line_progres"  style="width:0%;"></div>
            <div class="record_img_utits">
                <a href="#" onclick="return Dialog.info({$elementID})">
                    <img alt="" src="./styles/theme/gow/gebaeude/{$elementID}.gif" />
                </a>
            </div>
            <div class="record_name_utits">
                <a href="#" onclick="return Dialog.info({$elementID})">{$LNG.tech.{$elementID}}</a>
            </div>
                        
						{if !empty($elementRow)}
						<div class="record_made ico_record_made tooltip_sticky" data-tooltip-content="
                <span style='line-height:20px; font-size:14px; color:#6c6;'>Record established:</span><br />
                {foreach $elementRow as $user} &bull; <a href='#' style='line-height:20px;' onclick='return Dialog.Playercard({$user.userID});'>{$user.username}</a>{if !$user@last}<br>{/if}{/foreach}<br /> 
				 
				          ">  		
            </div>{/if}
			
            <div class="record_count">
			{if !empty($elementRow)}
                <div class="record_text record_server"><span>Record:</span> <div>{$elementRow[0].level|number}</div></div>
                <div class="record_text"><span>{$LNG.YouH}:</span> <div>{$myBuildList[$elementID]}</div></div>
					{else}
	<div class="record_text record_server"><span>Record:</span> <div>-</div></div>
                <div class="record_text"><span>{$LNG.YouH}:</span> <div>0</div></div>
	{/if}
            </div>
			
                    </div>
         {/foreach}
            </div>
			
			
			
    <div id="u100">
        <div class="record_header">
            Research
            <div class="record_header_bottom_line"></div>
            <div class="record_header_top_line"></div>
        </div>
             {foreach $researchList as $elementID => $elementRow}
                <div class="record_rows ">
            <div class="bottom_line_progres"  style="width:50%;"></div>
			
            <div class="record_img_utits">
                <a href="#" onclick="return Dialog.info({$elementID})">
                    <img alt="" src="./styles/theme/gow/gebaeude/{$elementID}.gif" />
                </a>
            </div>
            <div class="record_name_utits">
                <a href="#" onclick="return Dialog.info({$elementID})">{$LNG.tech.{$elementID}}</a>
            </div>
                       {if !empty($elementRow)}
						<div class="record_made ico_record_made tooltip_sticky" data-tooltip-content="
                <span style='line-height:20px; font-size:14px; color:#6c6;'>Record established:</span><br />
                {foreach $elementRow as $user} &bull; <a href='#' style='line-height:20px;' onclick='return Dialog.Playercard({$user.userID});'>{$user.username}</a>{if !$user@last}<br>{/if}{/foreach}<br /> 
				 
				          ">  




						
            </div>{/if}
			
            <div class="record_count">
			{if !empty($elementRow)}
                <div class="record_text record_server"><span>Record:</span> <div>{$elementRow[0].level|number}</div></div>
                <div class="record_text"><span>{$LNG.YouH}:</span> <div>{$myBuildList[$elementID]}</div></div>
					{else}
	<div class="record_text record_server"><span>Record:</span> <div>-</div></div>
                <div class="record_text"><span>{$LNG.YouH}:</span> <div>0</div></div>
	{/if}
            </div>
			
                    </div>
         {/foreach}
              
            </div>

    <div id="u400">
        <div class="record_header">
            Defense
            <div class="record_header_bottom_line"></div>
            <div class="record_header_top_line"></div>
        </div>
               {foreach $defenseList as $elementID => $elementRow}
                <div class="record_rows ">
            <div class="bottom_line_progres"  style="width:0%;"></div>
            <div class="record_img_utits">
                <a href="#" onclick="return Dialog.info({$elementID})">
                    <img alt="" src="./styles/theme/gow/gebaeude/{$elementID}.gif" />
                </a>
            </div>
            <div class="record_name_utits">
                <a href="#" onclick="return Dialog.info({$elementID})">{$LNG.tech.{$elementID}}</a>
            </div>
                  {if !empty($elementRow)}
						<div class="record_made ico_record_made tooltip_sticky" data-tooltip-content="
                <span style='line-height:20px; font-size:14px; color:#6c6;'>Record established:</span><br />
                {foreach $elementRow as $user} &bull; <a href='#' style='line-height:20px;' onclick='return Dialog.Playercard({$user.userID});'>{$user.username}</a>{if !$user@last}<br>{/if}{/foreach}<br /> 
				 
				          ">  




						
            </div>{/if}
            <div class="record_count">
			{if !empty($elementRow)}
                <div class="record_text record_server"><span>Record:</span> <div>{$elementRow[0].level|number}</div></div>
                <div class="record_text"><span>{$LNG.YouH}:</span> <div>{$myBuildList[$elementID]}</div></div>
					{else}
	<div class="record_text record_server"><span>Record:</span> <div>-</div></div>
                <div class="record_text"><span>{$LNG.YouH}:</span> <div>0</div></div>
	{/if}
            </div>
			
                    </div>
         {/foreach}
                
            </div>
</div>
</div>
</div>
            <div class="clear"></div>            
        </div>
{/block}