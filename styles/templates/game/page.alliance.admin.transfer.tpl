{block name="title" prepend}{$LNG.lm_alliance}{/block}
{block name="content"}
<div id="page">
<div id="content">
<div id="ally_content" class="conteiner">
    <div class="gray_stripe">
    	{$LNG.al_transfer_alliance}
    </div>
<form action="game.php?page=alliance&amp;mode=admin&amp;action=transfer" method="post">
    <div class="ally_contents">
    	{$LNG.al_transfer_to}: {html_options name=newleader options=$transferUserList}

        <div class="btn_border right_flank">
        	<input type="submit" value="{$LNG.al_transfer_submit}">
        </div>
    </div>
    </form>
</div>
<div class="ally_bottom" style="text-align:left;">
    <a href="game.php?page=alliance&amp;mode=admin">{$LNG.al_back}</a>
</div>
</div>
</div>
            <div class="clear"></div>            
        </div>
{/block}