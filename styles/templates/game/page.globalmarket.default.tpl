{block name="title" prepend}Global Market{/block}
{block name="content"}
	<div id="page">
	<div id="content">
<div id="ally_content" class="conteiner market">
    <div class="gray_stripe" style="padding:0;">
    	<a href="#" id="arrow_question" style="left:5px; right:auto;" onclick="return Dialog.manualinfo(12)" class="interrogation manual">?</a>
    	<span style="float:left; margin-left:30px;">Market <span style="font-size:10px; color:#666;">beta</span></span>
        <a href="#" class="right_flank button tooltip_sticky" data-tooltip-content="
        	<div class='gr_btn_top_buy'>
        		                 		<a href='#' onclick='return Dialog.CreateLotPlanet();'>Sell ​​Planet</a> 
            </div>
        ">Sell</a>
        <div class="gr_btn_top">
        	<a class="active" href="game.php?page=market">Purchase</a>         
        	<a href="game.php?page=market&amp;mode=yourlots">Your planets</a>
       		<a href="game.php?page=market&amp;mode=yourrate">Active bets</a> 
        </div>
    </div>
     <div id="market_conteiner">
        <div id="market_left_side">
            <span onclick="LEFTSIDE('upgrade');" class="market_left_btn">Upgrades</span><span onclick="LEFTSIDE('planet');" class="market_left_btn">Planet Auctions</span>
        </div>
        <div id="market_lost_msg">           
        </div>
        <div id="market_content">   
        	         
        </div>
    </div>
</div>
</div>
</div>
            <div class="clear"></div>            
        </div>
		{/block}