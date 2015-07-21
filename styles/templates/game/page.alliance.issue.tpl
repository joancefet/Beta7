{block name="title" prepend}Alliance Storage{/block}
{block name="content"}
<script type="text/javascript" src="./scripts/game/filterlist.js"></script>
<div id="page">
	<div id="content">
<div id="ally_content" class="conteiner">
    <div class="gray_stripe">
    	<a href="game.php?page=alliance&mode=storage" style="color:#8e9394;">Alliance Storage</a>
        <img src="styles/images/arrow_right.png" alt="" />
    	Issue of Alliance Bank
	</div>
    <form id="trader" action="game.php?page=alliance" method="post">
        <input type="hidden" name="mode" value="issuesend">
        <select name="idu" size="20" style="width:100%; height:100px; clear:both;">
            {$Userlist}
	  </select>    
<script type="text/javascript">
            var UserList = new filterlist(document.getElementsByName('idu')[0]);
        </script>
        <input name="regexp" style="width:550px;" onKeyUp="UserList.set(this.value)">
        <input type="button" onClick="UserList.set(this.form.regexp.value)" value="filter">
        <input type="button" onClick="UserList.reset();this.form.regexp.value=''" value="cancel">	  
        <div class="clear" style="margin-bottom:5px;"></div>

		
		
		
		<table class="tablesorter ally_ranks gray_stripe_th td_border_bottom">
        <tr>
            <th style="border-left:0;"></th>
            <th><span id="ress"></span></th>
            <th>In stock</th>
        </tr>
        <tr>
            <td style="text-align:left; padding-left:15px;"><label for="resource901" style="color:#a47d7a;">Metal</label></td>
            <td><input name="resource901" style="color:#a47d7a; width:98%;" id="resource901" class="trade_input" type="text" value="0" size="30"></td>
            <td><label for="resource901" style="color:#a47d7a;" class="tooltip" data-tooltip-content="{$storage_metal1}">{$storage_metal}&nbsp;</label></td>
        </tr>
        <tr>
            <td style="text-align:left; padding-left:15px;"><label for="resource902" style="color:#5ca6aa;">Crystal</label></td>
            <td><input name="resource902" style="color:#5ca6aa; width:98%;" id="resource902" class="trade_input" type="text" value="0" size="30"></td>
            <td><label for="resource902" style="color:#5ca6aa;" class="tooltip" data-tooltip-content="{$storage_crystal1}">{$storage_crystal}&nbsp;</label></td>
        </tr>
        <tr>
            <td style="text-align:left; padding-left:15px;"><label for="resource903" style="color:#339966;">Deuterium</label></td>
            <td><input name="resource903" style="color:#339966; width:98%;" id="resource903" class="trade_input" type="text" value="0" size="30"></td>
            <td><label for="resource903" style="color:#339966;" class="tooltip" data-tooltip-content="{$storage_deuterium1}">{$storage_deuterium}&nbsp;</label></td>
        </tr>
        </table>
        <div class="ally_contents" style="padding:10px;">
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