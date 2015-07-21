{block name="title" prepend}Alliance Storage{/block}
{block name="content"}
<div id="page">
	<div id="content">
<div id="ally_content" class="conteiner">
    <div class="gray_stripe">
    	<a href="game.php?page=alliance&mode=storage" style="color:#8e9394;">Alliance Storage</a>
        <img src="styles/images/arrow_right.png" alt="" />
    	Make a contribution
	</div>
    <form id="trader" action="game.php?page=alliance" method="post">
        <input type="hidden" name="mode" value="putsend">     
        <div class="ally_contents sepor_conten res_901">
            <div class="res_ico"></div>
            <div class="res_text">Metal:</div>
            <div class="res_count"><input name="resource901" id="resource901" class="trade_input" type="text" value="0" size="30"></div>
            <div class="clear"></div>
        </div>
        <div class="ally_contents sepor_conten res_902">
            <div class="res_ico"></div>
            <div class="res_text">Crystal:</div>
            <div class="res_count"><input name="resource902" id="resource902" class="trade_input" type="text" value="0" size="30"></div>
            <div class="clear"></div>
        </div>
        <div class="ally_contents sepor_conten res_903">
            <div class="res_ico"></div>
            <div class="res_text">Deuterium:</div>
            <div class="res_count"><input name="resource903" id="resource903" class="trade_input" type="text" value="0" size="30"></div>
            <div class="clear"></div>
        </div>
        <div class="ally_contents" style="padding:10px;">
        	<div style="float:left; margin-left:22px; line-height:18px;">
        		<div class="res_text">maximum:</div>
        		<div class="res_count" style="width:auto;">{$max}</div>
                <div class="clear"></div>
               
            </div>         
            <div class="btn_border right_flank">
                <input type="submit" value="ОК">
            </div>
            <div class="clear"></div>
        </div>
    </form>
</div>
<div class="ally_bottom" style="text-align:left;">
    <a href="game.php?page=alliance&mode=storage">back</a>
</div>
</div>
</div>
            <div class="clear"></div>            
        </div>
{/block}