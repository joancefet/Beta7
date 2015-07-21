{block name="title" prepend}{$LNG.lm_officiers}{/block}
{block name="content"}
<div id="page">
	<div id="content">
	{if !empty($GovernorsList)}
<div id="ally_content" class="conteiner">
    <div class="gray_stripe">
       Governors<a class="bakc" href="game.php?page=senat">Senat</a>                
    </div> 
	<div id="build_elements" class="officier_elements" style="padding-top:10px; padding-bottom:5px;">
	
	{foreach $GovernorsList as $ID => $Element}
	    	<div id="ofic_{$ID}" class="build_box">
            <div class="head">
                <a href="#" onclick="return Dialog.info({$ID})" class="interrogation">?</a>                
                <a href="#" onclick="return Dialog.info({$ID})">{$LNG.tech.{$ID}}</a> 
				{if $Element.timeLeft > 0}[{$LNG.of_active}: <span id="time_{$ID}">-</span>]{/if}
                            </div>
			<div class="content_box">
                <div class="image">
                   <a href="#" onclick="return Dialog.info({$ID})"><img src="./styles/theme/gow/gebaeude/{$ID}.png" alt="{$LNG.tech.{$ID}}" /></a>
                </div>
                <div class="prices">
                	<p>{$LNG.shortDescription.{$ID}}
  <br><br>
  <font color="#00FF00">{foreach $Element.elementBonus as $BonusName => $Bonus}{if $Bonus@iteration % 3 === 1}<p>{/if}{if $Bonus[0] < 0}-{else}+{/if}{if $Bonus[1] == 0}{abs($Bonus[0] * 100)}%{else}{$Bonus[0]}{/if} {$LNG.bonus.$BonusName}{if $Bonus@iteration % 3 === 0 || $Bonus@last}</p>{else}&nbsp;{/if}{/foreach}</font></p>
				</div>
                <div class="clear"></div>
                
                <div class="time_build">
                	{foreach $Element.costRessources as $RessID => $RessAmount}{$LNG.tech.{$RessID}}: <b><span style="color:{if $Element.costOverflow[$RessID] == 0}lime{else}red{/if}">{$RessAmount|number}</span></b>{/foreach}
                    | {$LNG.in_dest_durati}: <span style="color:lime">{$Element.time|time} </span>
                </div>
				
				
                <div class="btn_build_border">
				{if $Element.buyable}
                                	<form action="game.php?page=governors" method="post" class="build_form">
                    	<input type="hidden" name="id" value="{$ID}">
                    	<button type="submit" class="btn_build">{$LNG.of_recruit}</button>
               	 </form>
				 {else}
				 <span class="btn_build red">{$LNG.gover_notres}</span>
				 {/if}
                				</div>
                <div class="clear"></div>
            </div>
			
            <div class="clear"></div>
    	</div>
	{/foreach}
		</div>
</div>
</div>
{/if}
</div>
            <div class="clear"></div>            
        </div>
{/block}
