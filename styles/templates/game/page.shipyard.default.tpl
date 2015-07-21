{block name="title" prepend}{if $mode == "defense"}{$LNG.lm_defenses}{else}{$LNG.lm_shipshard}{/if}{/block}
{block name="content"}
{if $manual_step_16 == 0}
<script type="text/javascript">
	$(function() {
		qtips('#fildes_band ', 'After a battle in the vicinity of your planet formed a debris field, for that would raise their fleet needs "Recycler".<br /><br /><span style="margin:0 0 7px 0;display: block;color:#002211; "><b>build:</b></span><span style=" margin-left: 9px; margin-right: 4px; cursor: default; float: left;color:#002211;">•</span>5 recyclers', 'lefttMiddle', 'topRight');
$( ".build_box" ).hide();
$( ".build_band_conveyors" ).hide();
$( "#s_209" ).show();
$( "#s_middle" ).show();
setInterval(function() { AJAX() }, 6000)
	});
	</script>
	{/if}
	
{if $manual_11_step == 0}
	<script type="text/javascript">
	$(function() {
		qtips('#attack', 'Attention to your planet flies attacking fleet', 'bottomMiddle', 'topLeft');
setTimeout(function() { qtips('.over', 'Go to the review, to view the attackers fleet', 'bottomMiddle', 'topLeft') }, 4000);
setInterval(function() { AJAX() }, 6000)
	});
	</script>
	

	
	
	{/if}
	
{if $manual_step_9 == 0}
<script type="text/javascript">
	$(function() {
		$( ".build_box" ).hide();
$( ".build_band_conveyors" ).hide();
$( "#s_401" ).show();
$( "#s_402" ).show();
$( "#s_light" ).show();
qtips('#s_light', 'Enemy probed you and preparing an attack. To protect the planet, build defenses. <br/><br/><b><span style="margin:0 0 7px 0;display: block;color:#002211;">Build:</span><span style=" margin-left: 9px; margin-right: 4px; cursor: default; float: left;color:#002211;">•</span>25 missiles launchers <br /> <span style=" margin-left: 9px; margin-right: 4px; cursor: default; float: left;color:#002211;">•</span>10 light lasers</b>', 'bottomMiddle', 'bottomMiddle')
setInterval(function() { AJAX() }, 6000)
	});
	</script>
	{/if}
	
	{if $manual_step_10 == 0}
<script type="text/javascript">
	$(function() {
		$( ".build_box" ).hide();
$( ".build_band_conveyors" ).hide();
$( "#s_401" ).show();
$( "#s_402" ).show();
$( "#s_light" ).show();
qtips('#fildes_band', 'Excellent! Now your planet is protected from attacks. After the destruction of defense exists 10-30% chance to restore it.<br/><br/> <b>You get 650 points peaceful experience.</b>', 'leftMiddle', 'topRight')
setTimeout(function() { location.reload(); }, 5000);
setInterval(function() { AJAX() }, 6000)
	});
	</script>
	{/if}
	
<div id="page">
<div id="content">

{if !$NotBuilding}<table width="70%" id="infobox" style="border: 2px solid red; text-align:center;background:transparent"><tr><td>{$LNG.bd_building_shipyard}</td></tr></table><br><br>{/if}
{if !empty($BuildList)}
<div id="ship_build_list">
    <div id="bx" class="z"></div>
    <form action="game.php?page=shipyard&amp;mode={$mode}" method="post">
    <input type="hidden" name="action" value="delete">
    <div class="multiple_ship">
		<select name="auftr[]" id="auftr" size="10" multiple><option>&nbsp;</option></select>
    </div>
    <input type="submit" class="btn_del" value="{$LNG.bd_cancel_send}">
    <span class="text_del">{$LNG.bd_cancel_warning}</span>
    <span id="timeleft"></span>
    </form>    
</div>

<br>
{/if}

<form action="game.php?page=shipyard&amp;mode={$mode}" method="post">

<div id="build_content" class="conteiner ship_build">
    <div id="fildes_band">
    	<a href="#" id="arrow_question" style="left:5px; right:auto;" onclick="return Dialog.manualinfo({if $mode == "defense"}4{else}3{/if})" class="interrogation manual">?</a>
	   	{if $mode == "defense"}<a class="bd_dm_buy" href="?page=dmhangar&mode=defense">Dark Matter Defense</a>
		{else}<a class="bd_dm_buy" href="?page=dmhangar&mode=fleet">Dark Matter Fleets</a>{/if}
    </div> 
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
		
              


				</div>     {else}<div class="prices">
		{foreach $Element.costRessources as $RessID => $RessAmount}
					

                            <div class="price res{$RessID} {if $Element.costOverflow[$RessID] == 0}{else}required{/if}">
                    <div class="ico"></div>
                    <div class="text" data-tooltip-content="">{$RessAmount|number}</div>                                        
                </div>
                  						{/foreach}   
										</div>        
{/if}			
        <div class="clear"></div>
        
        <div class="time_build">
             
            	  {if !$Element.techacc}{else}
            	{$LNG.fgf_time}: <span class="time_build_text">{$Element.elementTime|time} </span>
             {/if}
             
        </div>
        
       {if $NotBuilding && $Element.buyable && $Element.techacc}
<div class="btn_build_border">  
				
					 <input id="input_{$ID}" type="text" name="fmenge[{$ID}]" size="7" {if $uni_value == 1}maxlength="30"{else}maxlength="30"{/if} value="0" class="text" tabindex="{$smarty.foreach.FleetList.iteration}" onkeyup="counting('{$ID}');">
						
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
		
		
              


				</div>     {else}<div class="prices">
		{foreach $Element.costRessources as $RessID => $RessAmount}
					

                            <div class="price res{$RessID} {if $Element.costOverflow[$RessID] == 0}{else}required{/if}">
                    <div class="ico"></div>
                    <div class="text" data-tooltip-content="">{$RessAmount|number}</div>                                        
                </div>
                  						{/foreach}   
										</div>        
{/if}					                                 

        <div class="clear"></div>
        
   <div class="time_build">
             
            	  {if !$Element.techacc}{else}
            	{$LNG.fgf_time}: <span class="time_build_text">{$Element.elementTime|time} </span>
             {/if}
             
        </div>
        
       {if $NotBuilding && $Element.buyable && $Element.techacc}
<div class="btn_build_border">  
				
					 <input id="input_{$ID}" type="text" name="fmenge[{$ID}]" size="7" {if $uni_value == 1}maxlength="30"{else}maxlength="30"{/if} value="0" class="text" tabindex="{$smarty.foreach.FleetList.iteration}" onkeyup="counting('{$ID}');">
						
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
		
		
              


				</div>     {else}<div class="prices">
		{foreach $Element.costRessources as $RessID => $RessAmount}
					

                            <div class="price res{$RessID} {if $Element.costOverflow[$RessID] == 0}{else}required{/if}">
                    <div class="ico"></div>
                    <div class="text" data-tooltip-content="">{$RessAmount|number}</div>                                        
                </div>
                  						{/foreach}   
										</div>        
{/if}			
        <div class="clear"></div>
        
       <div class="time_build">
             
            	  {if !$Element.techacc}{else}
            	{$LNG.fgf_time}: <span class="time_build_text">{$Element.elementTime|time} </span>
             {/if}
             
        </div>
        
       {if $NotBuilding && $Element.buyable && $Element.techacc}
<div class="btn_build_border">  
				
					 <input id="input_{$ID}" type="text" name="fmenge[{$ID}]" size="7" {if $uni_value == 1}maxlength="30"{else}maxlength="30"{/if} value="0" class="text" tabindex="{$smarty.foreach.FleetList.iteration}" onkeyup="counting('{$ID}');">
						
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
		
              


				</div>     {else}<div class="prices">
		{foreach $Element.costRessources as $RessID => $RessAmount}
					

                            <div class="price res{$RessID} {if $Element.costOverflow[$RessID] == 0}{else}required{/if} ">
                    <div class="ico"></div>
                    <div class="text" data-tooltip-content="">{$RessAmount|number}</div>                                        
                </div>
                  						{/foreach}   
										</div>        
{/if}			

        <div class="clear"></div>
        
<div class="time_build">
             
            	  {if !$Element.techacc}{else}
            	{$LNG.fgf_time}: <span class="time_build_text">{$Element.elementTime|time} </span>
             {/if}
             
        </div>
        
       {if $NotBuilding && $Element.buyable && $Element.techacc}
<div class="btn_build_border">  
				
					 <input id="input_{$ID}" type="text" name="fmenge[{$ID}]" size="7" {if $uni_value == 1}maxlength="30"{else}maxlength="30"{/if} value="0" class="text" tabindex="{$smarty.foreach.FleetList.iteration}" onkeyup="counting('{$ID}');">
						
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


<script type="text/javascript">
data			= {$BuildList|json};
bd_operating	= '{$LNG.bd_operating}';
bd_available	= '{$LNG.bd_available}';

	
	
	DatatList		= {literal}{{/literal}
	{foreach $elementListall as $ID => $Element}
	{literal}
	"{/literal}{$ID}{literal}":{"id":"{/literal}{$ID}{literal}","available":"{/literal}{$Element.available|number}{literal}","costRessources":{{/literal}{foreach $Element.costRessources as $RessID => $RessAmount}{literal}"{/literal}{$RessID}{literal}":{/literal}{$RessAmount}{literal},{/literal}{/foreach}{literal}},"elementTime":{/literal}{$Element.elementTime}{literal},"buyable":true,"maxBuildable":"{/literal}{$Element.maxBuildable}{literal}","AlreadyBuild":false,"AlreadyBuildOne":false},
	{/literal}
	{/foreach}
	
	{literal}};{/literal}
	
	
	MaxCount		= 500000000000;
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
</div>
</div>
            <div class="clear"></div>            
        </div>
{/block}