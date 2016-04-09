{block name="title" prepend}{$LNG.lm_research}{/block}
{block name="content"}

{if $manual_step_16 ==0}
<script type="text/javascript">
	$(function() {
		$( ".build_box" ).hide();
$( "#research_113" ).show();
$( "#research_120" ).show();
$( "#research_110" ).show();
$( "#research_115" ).show();
setInterval(function() { AJAX() }, 6000)
	});
	</script>
	{/if}
	
{if $manual_step_9 ==0}

	<script type="text/javascript">
	$(function() {
		$( ".build_box" ).hide();
$( "#research_113" ).show();
$( "#research_120" ).show();
setInterval(function() { AJAX() }, 6000)
	});
	</script>
	{/if}
	
	
{if $manual_step_7 == 0}
<script type="text/javascript">
	$(function() {
		$( ".build_box" ).hide();
$( "#research_106" ).show();
qtips('#fildes_band', 'excellent! Now your empire protected from espionage, but do not forget to continue to increase as the technology that will allow you to hide information and from more serious opponents.<br/><br/> <b>You get 650 points peaceful experience.</b>', 'leftMiddle', 'topRight');
setTimeout(function() { location.reload(); }, 10000);
setInterval(function() { AJAX() }, 6000)
	});
	</script>
{/if}
{if $manual_step_5 == 0}
<script type="text/javascript">
	$(function() {
		$( ".build_box" ).hide();
$( "#research_106" ).show();
setTimeout(function() { qtips('.price:first', 'To unlock the study &laquo;Spy technology&raquo;, you need to go on the build page and upgrade &laquo;research laboratory&raquo; <br/>Third level.', 'topMiddle', 'bottomLeft') }, 4000);
qtips('#fildes_band', 'To protect your data, you need to explore &laquo;Spy Technology&raquo; lvl 3.', 'leftMiddle', 'topRight');
setInterval(function() { AJAX() }, 6000)
	});
	</script>
	{/if}
	
	{if $manual_step_5_1 == 0}
<script type="text/javascript">
	$(function() {
		$( ".build_box" ).hide();
$( "#research_106" ).show();
qtips('#fildes_band', 'To protect your data, you need to explore &laquo;espionage&raquo; level 3.', 'leftMiddle', 'topRight');
setInterval(function() { AJAX() }, 6000)
	});
	</script>
	{/if}
	
	{if $manual_step_6 == 0}
<script type="text/javascript">
	$(function() {
		$( ".build_box" ).hide();
$( "#research_106" ).show();
qtips('#fildes_band', 'To protect your data, you need to explore &laquo;espionage&raquo; level 3.', 'leftMiddle', 'topRight');
setInterval(function() { AJAX() }, 6000)
	});
	</script>
	{/if}
	
	
	<div id="page">

	<div id="content">
	{if !empty($Queue)}
<div id="buildlist" class="buildlist">

	<div id="build_process">
		{foreach $Queue as $List}
		{$ID = $List.element}
				{if $List@first}
				
				
			
		
				 <div class="element_row active_row">
             <div class="right_hand">
            	
				<form action="game.php?page=research" method="post" class="build_form">
					<input type="hidden" name="cmd" value="cancel">
					<button type="submit" class="del"></button>
				</form><div id="time" data-time="{$List.time}"></div>
				
            </div>
            <div class="band_process"  id="progressbar" data-time="{$List.resttime}">          
                <div class="left_part">
                    <span>{$List@iteration}. </span>
                    {$LNG.tech.{$ID}} {$List.level}</div>
                <div class="right_part">
				
                    <div data-time="{$List.endtime}" class="timer">{$List.display}</div>
                </div>
            </div>
        </div>
		
{else}

            	
			
	   

 <div class="element_row ">
            <div class="right_hand">
            	
				<form action="game.php?page=research" method="post" class="build_form">
					<input type="hidden" name="cmd" value="remove">
					<input type="hidden" name="listid" value="{$List@iteration}">
					<button type="submit" class="del"></button>
				</form>
								<div id="time" data-time="{$List.resttime}"></div>
            </div>
            <div class="band_process" >          
                <div class="left_part">
                    <span>{$List@iteration}. </span>
                   {$LNG.tech.{$ID}} {$List.level}{if $List.destroy} {$LNG.bd_dismantle}{/if}               </div>
                <div class="right_part">
                  <div data-time="{$List.endtime}" class="timer">{$List.display}</div>
                </div>
            </div>
        </div>

{/if}{/foreach}</div>{/if}	
	
{if $IsLabinBuild}<table width="100%" id="infobox" style="border: 2px solid red; text-align:center;background:transparent"><tr><td>{$LNG.bd_building_lab}</td></tr></table><br><br>{/if}

<div id="build_content" class="conteiner">
    <div id="fildes_band">
    	<a href="#" id="arrow_question" style="left:5px; right:auto;" onclick="return Dialog.manualinfo(2)" class="interrogation manual">?</a>
       	<a class="bd_dm_buy" href="game.php?page=dmtech">Comprar pesquisas com MN</a>
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
				
						{if !$Element.techacc}<div class="prices"><div class="price"> {$LNG.NFTC}
            </div>  

		{foreach from=$Element.AllTech item=i key=k}
			   
		
			    <div class="required_block  required_smal_text">
           <a href="#" onclick="return Dialog.info({$i.requireID})" class="tooltip" data-tooltip-content="{$LNG.explore}:<br />{$LNG.tech.{$i.requireID}} lvl.  {$i.requireLevel} ">
                    <img src="./styles/theme/gow/gebaeude/{$i.requireID}.{if $i.requireID >=600 && $i.requireID <= 699}jpg{else}gif{/if}" alt="{$LNG.tech.{$i.requireID}}">
                    <div class="text">{$i.requireLevel}</div>
                </a>           
        </div>
		
		 {/foreach}
		
		
              


				</div>     {else}	
                <div class="prices">
				
					{foreach $Element.costRessources as $RessID => $RessAmount}
                   	                        <div class="price res{$RessID} {if $Element.costOverflow[$RessID] == 0}{else}required{/if}">
                        	<div class="ico"></div>
                        	<div class="text " data-tooltip-content="">{$RessAmount|number}</div>                                        
                    	</div>
						{/foreach}

                                                                                <br>                       
                </div>{/if}
                <div class="clear"></div>
                
                
                <div class="time_build">
				{if !$Element.techacc}{elseif $Element.elementTime == 0}{else}
                     {$LNG.fgf_time}: <span class="time_build_text">{$Element.elementTime|time} </span> 
					 {/if}              </div>
                
                
               



                	
				{if !$Element.techacc}{elseif $Element.maxLevel == $Element.levelToBuild}
				<div class="btn_build_border">
						<span class="btn_build red">{$LNG.bd_maxlevel}</span>
						</div>
					{elseif $IsLabinBuild || $IsFullQueue || !$Element.buyable}
							<div class="btn_build_border">
						<span class="btn_build red">{if $Element.level == 0}{$LNG.bd_tech}{else}{$LNG.bd_tech_next_level}{$Element.levelToBuild + 1}{/if}</span>
</div>
					{else}
					<div class="btn_build_border">
						
						<form class="build_form" method="post" action="game.php?page=research">

    <input type="hidden" value="insert" name="cmd"></input>
    <input type="hidden" value="{$ID}" name="tech"></input>
	<input type="hidden" value="{$Element.level}" name="lvlup1"></input>
    <input id="b_input_{$ID}" class="build_number" type="hidden" value="{$Element.levelToBuild + 1}" min="{$Element.levelToBuild + 1}" maxlength="3" size="3" name="lvlup" onchange="counting('{$ID}');"></input>
    <button class="btn_build_part_left" type="submit">

        {$LNG.BTNL}

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
			"factor":"{/literal}{$Element.factor}{literal}",
			"costRessources":{{/literal}{foreach $Element.costRessources as $RessID => $RessAmount}{literal}"{/literal}{$RessID}{literal}":{/literal}{$RessAmount}{literal},{/literal}{/foreach}{literal}},
			"costOverflow":{{/literal}{foreach $Element.costOverflow as $RessID => $RessAmount}{literal}"{/literal}{$RessID}{literal}":{/literal}{$RessAmount}{literal},{/literal}{/foreach}{literal}},
			"elementTime":{/literal}{$Element.elementTime}{literal},
			"buyable":true},
			{/literal}
{/foreach}
{literal}};{/literal}

	bd_operating	= '(busy)';
	LNGning			= 'insuficiente:';
	LNGtech901		= 'Metal';
	LNGtech902		= 'Cristal';
	LNGtech903		= 'Deuterio';
	LNGtech911		= 'Energia';
	LNGtech921		= 'Matéria Negra';
	LNGtech922		= 'Anti Matéria';
	short_day 		= 'd';
	short_hour 		= 'h';
	short_minute 	= 'm';
	short_second 	= 's';
	
	</script>
{/block}