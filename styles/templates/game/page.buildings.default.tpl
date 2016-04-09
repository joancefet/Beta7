{block name="title" prepend}{$LNG.lm_buildings}{/block}
{block name="content"}
{if $manual_step_9 == 0}

<script type="text/javascript">
	$(function() {
		$( ".build_box" ).hide();
$( "#build_1" ).show();
$( "#build_2" ).show();
$( "#build_3" ).show();
$( "#build_4" ).show();
$( "#build_31" ).show();
$( "#build_14" ).show();
$( "#build_21" ).show();
setInterval(function() { AJAX() }, 6000)
	});
	</script>

{/if}


{if $manual_step_16 ==0}
<script type="text/javascript">
	$(function() {
		$( ".build_box" ).hide();
$( "#build_1" ).show();
$( "#build_2" ).show();
$( "#build_3" ).show();
$( "#build_4" ).show();
$( "#build_31" ).show();
$( "#build_14" ).show();
$( "#build_21" ).show();
setInterval(function() { AJAX() }, 6000)
	});
	</script>
	{/if}






{if $manual_step_2_3 == 0}

	<script type="text/javascript">
	$(function() {
		$( ".build_box" ).hide();
$( "#build_1" ).show();
$( "#build_2" ).show();
$( "#build_3" ).show();
$( "#build_4" ).show();
qtips('#fildes_band', 'Excelente! Agora temos energia suficiente para todas as minas!<br/><br/> <b>Você ganhou 650 pontos de experiência em pacifismo.</b>', 'leftMiddle', 'topRight')
setTimeout(function() { location.reload(); }, 5000);
setInterval(function() { AJAX() }, 6000)
	});
	</script>
	{/if}
	{if $manual_step_5 == 0}
	<script type="text/javascript">
	$(function() {
		$( ".build_box" ).hide();
$( "#build_1" ).show();
$( "#build_2" ).show();
$( "#build_3" ).show();
$( "#build_4" ).show();
$( "#build_31" ).show();
setInterval(function() { AJAX() }, 6000)
	});
	</script>
	
	{/if}
	

{if $manual_step_2 == 0}

<script type="text/javascript">
	$(function() {
		$( ".build_box" ).hide();
$( "#build_1" ).show();
$( "#build_2" ).show();
$( "#build_3" ).show();
$( "#build_4" ).show();
qtips('#fildes_band', 'You can build mines in the world, to increase the production of resources.<br/> But remember that each mine for its work requires energy.<br /><br /> <b><span style="margin:0 0 7px 0;display: block;color:#002211;">Build:</span><span style=" margin-left: 9px;display: block;">Solar Power Planet lvl. 1</span>', 'leftMiddle', 'topRight')
setInterval(function() { AJAX() }, 6000)
	});
	</script>

	{/if}
	
	{if $manual_step_2_1 == 0}
	<script type="text/javascript">
	$(function() {
		$( ".build_box" ).hide();
$( "#build_1" ).show();
$( "#build_2" ).show();
$( "#build_3" ).show();
$( "#build_4" ).show();
qtips('#fildes_band', 'Now you have a little bit of energy that would provide job Mines.<br /><br /> <b><span style="margin:0 0 7px 0;display: block;color:#002211;">Build:</span><span style=" margin-left: 9px; margin-right: 4px; cursor: default; float: left;color:#002211;">•</span>Metal Mine Level 3. <br /><span style=" margin-left: 9px; margin-right: 4px; cursor: default; float: left;color:#002211;">•</span>Crystal Mine Level 2. <br /><span style=" margin-left: 9px; margin-right: 4px; cursor: default; float: left;color:#002211;">•</span>Deuterium Mine Level 1.</b>', 'leftMiddle', 'topRight')
setInterval(function() { AJAX() }, 6000)
	});
	</script>
	{/if}
	
		{if $manual_step_2_2 == 0}
	<script type="text/javascript">
	$(function() {
		$( ".build_box" ).hide();
$( "#build_1" ).show();
$( "#build_2" ).show();
$( "#build_3" ).show();
$( "#build_4" ).show();
qtips('#res_block_energy .stock_text ', 'You do not have enough energy.', 'bottomMiddle', 'topLeft');
qtips('#fildes_band', 'Due to lack of energy, The production of mines is reduced. It is necessary to provide energy for all mines.<br /><br /><b><span style="margin:0 0 7px 0;display: block;color:#002211;">Build:</span> <span style=" margin-left: 9px;display: block;">Solar Power Planet lvl 4.</span></b>', 'leftMiddle', 'topRight')
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
            	
				<form action="game.php?page=buildings" method="post" class="build_form">
					<input type="hidden" name="cmd" value="cancel">
					<button type="submit" class="del"></button>
				</form><div id="time" data-time="{$List.time}"></div>
				
            </div>
            <div class="band_process"  id="progressbar" data-time="{$List.resttime}">          
                <div class="left_part">
                    <span>{$List@iteration}. </span>
                    {$LNG.tech.{$ID}} {$List.level}{if $List.destroy} {$LNG.bd_dismantle}{/if}             </div>
                <div class="right_part">
                    <div data-time="{$List.endtime}" class="timer">{$List.display}</div>
                </div>
            </div>
        </div>
		
		
		{else}
		

		
 <div class="element_row ">
            <div class="right_hand">
            	
				<form action="game.php?page=buildings" method="post" class="build_form">
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
	


	

	
	
	
	
	
<div id="build_content" class="conteiner">
    <div id="fildes_band">
    	<a href="#" id="arrow_question" onclick="return Dialog.manualinfo(1)" class="interrogation manual">?</a>
		<a href="game.php?page=planet" title="Change Planet" class="palanetarium_linck seting2"></a>
        <div id="fildes_band_proc" style="width:{$field_percent}%;"></div>
        <div class="fildes_band_text">
        	campos construídos: <span>{$field_used}</span> de <span>{$field_max}</span>&emsp;&emsp;
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
					{foreach $Element.costRessources as $RessID => $RessAmount}
                   	                        <div class="price res{$RessID} {if $Element.costOverflow[$RessID] == 0}{else}required{/if}">
                        	<div class="ico"></div>
        
							<div class="text">{$RessAmount|number}</div>    
							
                    	</div>
                                  {/foreach}      
								  
				
                                                                                                 <div class="price">
                      {if !empty($Element.infoEnergy)}
							
							{$Element.infoEnergy}<br>
						{/if}                           
                    </div>
                                    
                </div>
				
				{/if}
                <div class="clear"></div>
                
                <div class="time_build">
				{if !$Element.techacc}{elseif $Element.elementTime == 0}{else}
                     {$LNG.fgf_time}: <span class="time_build_text"> {$Element.elementTime|time} </span> 
					 {/if}
                </div>
                
                
                                <div class="break_build tooltip_sticky" data-tooltip-content="<table style='width:300px'><tr><th colspan='2'><span style='color:#00FF00'>Custo de demolição:</span><br> {$LNG.tech.{$ID}} {$Element.level} </th></tr>
								{foreach $Element.destroyRessources as $ResType => $ResCount}
								<tr><td>{$LNG.tech.{$ResType}}</td><td>{$ResCount|number}</td></tr>{/foreach}
								
								<td>{$LNG.bd_destroy_time}</td><td>{$Element.destroyTime|time}</td></tr><tr><td colspan='2'>
								<form action='game.php?page=buildings' method='post' class='build_form'><input type='hidden' name='cmd' value='destroy'><input type='hidden' name='building' value='{$ID}' /><button type='submit' class='build_submit onlist'>{$LNG.bd_dismantle}</button></form></td></tr></table>">x</div>
								
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
							{if $CanBuildElement && $Element.buyable}
							<div class="btn_build_border">
                							
							
							<form class="build_form" method="post" action="game.php?page=buildings">

    <input type="hidden" value="insert" name="cmd"></input>
    <input type="hidden" value="{$ID}" name="building"></input>
	<input type="hidden" value="{$Element.level}" name="lvlup1"></input>
    <input id="b_input_{$ID}" class="build_number" type="hidden" value="{$Element.levelToBuild + 1}" min="{$Element.levelToBuild + 1}" maxlength="3" size="3" name="lvlup" onchange="counting('{$ID}');"></input>
    <button class="btn_build_part_left" type="submit">

    {$LNG.btnl}

    </button>

</form>


							 </div>
							{else}
							<div class="btn_build_border">
							<span class="btn_build red"> {if $Element.level == 0}{$LNG.bd_build}{else}{$LNG.bd_build_next_level}{$Element.levelToBuild + 1}{/if}</span>
							 </div>
							{/if}
							
						{else}
						<div class="btn_build_border">
						<span class="btn_build red">{$LNG.bd_no_more_fields}</span>
						 </div>
						{/if}
					
																		               
        {/if}    </div> </div>
                   
			
			{/foreach}
			
			
                <div class="clear"></div>
            
              
    <div class="build_band" style="padding-right:0;">
       	<a class="bd_dm_buy" href="game.php?page=dmbuild">Comprar edifícios com MN</a>
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
"factor":"{/literal}{$Element.factor}{literal}",
"costRessources":{{/literal}{foreach $Element.costRessources as $RessID => $RessAmount}{literal}"{/literal}{$RessID}{literal}":{/literal}{$RessAmount}{literal},{/literal}{/foreach}{literal}},
"costOverflow":{{/literal}{foreach $Element.costOverflow as $RessID => $RessAmount}{literal}"{/literal}{$RessID}{literal}":{/literal}{$RessAmount}{literal},{/literal}{/foreach}{literal}},
"elementTime":{/literal}{$Element.elementTime}{literal},
"destroyRessources":{{/literal}{foreach $Element.destroyRessources as $RessID => $RessAmount}{literal}"{/literal}{$RessID}{literal}":{/literal}{$RessAmount}{literal},{/literal}{/foreach}{literal}},
"destroyTime":{/literal}{$Element.destroyTime}{literal},
"buyable":true },
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
