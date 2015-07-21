{block name="title" prepend}{$LNG.lm_officiers}{/block}
{block name="content"}
<div id="page">

{if $manual_23_step == 0}
<script type="text/javascript">
	$(function() {
		qtips('.gray_stripe', 'To strengthen the economy and military power of the empire, you can hire officers. All officers are hired for dark matter. <br /><br /><b><span style="margin:0 0 7px 0;display: block;color:#002211;">Hire:<b></span><span style=" margin-left: 9px; margin-right: 4px; cursor: default; float: left;color:#002211;">•</span>Geologist Level 1 <br /><span style=" margin-left: 9px; margin-right: 4px; cursor: default; float: left;color:#002211;">•</span>Admiral Level 1</b>', 'leftMiddle', 'topRight');
setInterval(function() { AJAX() }, 6000)
	});
	</script>
	{/if}
	
	{if $close_to == 0}
	<script type="text/javascript">
	$(function() {
		qtips('.gray_stripe', 'Excellent! You hired officers.<br/><br/> <b>You get 650 points peaceful experience.</b>', 'leftMiddle', 'topRight');
setTimeout(function() { location.reload(); }, 10000);
setInterval(function() { AJAX() }, 6000)
	});
	</script>
	{/if}
	
	<div id="content">
	{if $officierList}
<div id="ally_content" class="conteiner">

    <div class="gray_stripe" style="padding-right:0;">
       {$LNG.lm_officiers}<a class="bakc" href="game.php?page=governors"><input class="right_flank input_blue" value="Governors" type="button"></a>                
    </div> 
	<div id="build_elements" class="officier_elements" style="padding-top:10px; padding-bottom:5px;">
	
	
	
	
	    {foreach $officierList as $ID => $Element}
    	<div id="ofic_{$ID}" class="build_box {if !$Element.techacc}required{/if}">
            <div class="head">
                <a href="#" onclick="return Dialog.info({$ID})" class="interrogation">?</a>                
                <a href="#" onclick="return Dialog.info({$ID})">{$LNG.tech.{$ID}}</a> 
                ({$LNG.of_lvl} {$Element.level}/{$Element.maxLevel})
            </div>
                        <div class="content_box">
                <div class="image">
                   <a href="#" onclick="return Dialog.info({$ID})"><img src="./styles/theme/gow/gebaeude/{$ID}.jpg" alt="{$LNG.tech.{$ID}}" /></a>
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
		
		
              


				</div>
				{else}
                <div class="prices">
                	<p>{$LNG.shortDescription.{$ID}}.
  <br><br>
  <font color="#00FF00">{foreach $Element.elementBonus as $BonusName => $Bonus}{if $Bonus[0] < 0}-{else}+{/if}{if $Bonus[1] == 0}{abs($Bonus[0] * 100)}%{else}{floatval($Bonus[0])}{/if} {$LNG.bonus.$BonusName}<br>{/foreach}</font></p>
                </div>
                <div class="clear"></div>
                
                <div class="time_build">
                    
                </div>
                                
                <div class="btn_build_border">
				{if $Element.maxLevel <= $Element.level}
				<span class="btn_build red">{$LNG.bd_maxlevel}</span>
						{elseif $Element.buyable}
                	                        <form action="game.php?page=officier" method="post" class="build_form">
                            <input type="hidden" name="id" value="{$ID}">
                            <button type="submit" class="btn_build">{$LNG.of_recruit}: {$LNG.tech.921} {foreach $Element.costRessources as $RessID => $RessAmount}<span style="color:{if $Element.costOverflow[$RessID] == 0}lime{else}red{/if}">{$RessAmount|number}</span>{/foreach}</button>
                        </form>
						{else}
						<span class="btn_build red">{$LNG.of_recruit}</span>
						{/if}
					                </div>
									{/if} 
                <div class="clear"></div>
            </div>
			</div>
			{/foreach}
			
			
			
			
			
			
            <div class="clear"></div>
                        <div class="clear"></div>
        </div>    
</div>
</div>
</div>
{/if}
</div>
            <div class="clear"></div>            
        </div>
		
		
{/block}