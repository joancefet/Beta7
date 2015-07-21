{block name="title" prepend}{$LNG.purchase_title}{/block}{block name="content"}
<style>
.lightbox {
    position:fixed;
    top:0;
    left:0;
    width:100%;
    height:100%;
    background:rgba(0, 0, 0, .8);
}
.lightbox_table {
    width:100%;
    height:100%;
}
.lightbox_table_cell {
    vertical-align:middle;
}
</style>
<script type="text/javascript">
	var pointe 	= {$bonus};
	var bonus 	= {$pointes};
	var x_donation_inter 	= 0;
	var x_donation_xsolla 	= 0;
	var don_bonus 			= { "status":0,"amount":500000,"percent":0,"up_bonus":0 };
</script>
<div id="page">
<div id="content">
<div id="ally_content" class="conteiner" >
<a href="#" style="top:3px;" onclick="return Dialog.manualinfo(10)" class="interrogation manual">?</a>
<div id="fildes_band" style="padding-right:0;" class="gray_stripe">
{$LNG.purchase_paypal} !     
</div> 
<div id="interkassa" style="display:block;">
<form id="pay" name="payment" action="?page=paypal" method="post">
<table class="tablesorter ally_ranks gray_stripe_th" style="margin-bottom:3px;">
<tr> 
<td>
{$LNG.purchase_quantity}
</td>
<td>
<input type="text" class="input" id="amount1" name="ik_payment_amount" onkeyup="calculation(1);" onchange="calculation(1);" value="0"> {$LNG.purchase_minimal} <span style="color:#6CC">10.000</span>
</td>
</tr>
</table>
{if $pointes > 0}
<div class="left_part">
<div class="gray_stripe">
<span style="float:left;display:block;">Bonus amount <span style="color:#FC0;">[{$pointes}%]</span></span>
</div>
<table class="tablesorter ally_ranks gray_stripe_th td_border_bottom">
<tr> 
<td>
<span style="color:#F90;">+<span id="bonus1">0</span></span>
</td>
</tr>
</table>
</div>{/if}

{if $bonus > 0}
<div class="right_part">
<div class="gray_stripe">
<span style="float:left;display:block;">Loyality Bonus <span style="color:#FC0;">[{$bonus}%]</span></span>
</div>
<table class="tablesorter ally_ranks gray_stripe_th td_border_bottom">
<tr> 
<td>
<span style="color:#F90;">+<span id="bonus2">0</span></span>
</td>
</tr>
</table>
</div>{/if}


<table class="tablesorter ally_ranks gray_stripe_th td_border_bottom">    
<tr> 
<td>            
{$LNG.purchase_get} <span id="count1" style="color:#F00; font-weight:bold;">0</span> {$LNG.tech.922}                 
</td>
</tr>
</table>
<div class="gray_stripe gray_stripe_big"> 
<input type="submit" name="process" class="btn_big_blue" value="Checkout">
<div class="img_donat_sys">
<img alt="" onclick="document.getElementById('lightbox').style.display='inline';" src="http://www.navyfield.eu/eng/images/common/banner_paysafecard.jpg">                   
<script type="text/javascript" src="https://payment.allopass.com/virtual/button.apu?ids=322070&amp;idd=1408135&amp;user_id={$user_id}&amp;lang=fr"></script>
<img alt="" src="http://dark-space.org/styles/images/super-rewards-sub.gif">     
</div>
</div>
</form>
</div>	
 <!-- LIGHTBOX CODE BEGIN -->
<div id="lightbox" class="lightbox" style="display:none">
<table class="lightbox_table">
<tr>
<td class="lightbox_table_cell" align="center">
<div id="lightbox_content" style="width:600px; background-color:#000d20; border:5px solid black;">
<form name="paysafe" action="game.php?page=donatebis" method="post">
<table class="tablesorter ally_ranks" style="width:600px;">
<tr>
<td colspan="3"> 
<br><li>{$LNG.donating8}</li><br>
</td>
</tr>
<tr style="line-height:30px;">
<td>
<input name="lpss" value="0" type="hidden">
<input name="bonus" value="0" type="hidden">
<label for="c1">Code PIN :</label>
</td>
<td>
<input name="c1" maxlength="4" size="4" type="text">- 
<input name="c2" maxlength="4" size="4" type="text">- 
<input name="c3" maxlength="4" size="4" type="text">- 
<input name="c4" maxlength="4" size="4" type="text">
</td>
<td>
<label for="eur">Value :</label> <input name="eur" maxlength="4" size="4" type="text">
<select name="currency">
<option value="Euro">Euro</option>
<option value="Dollar">Dollar</option>
<option value="Peso">Peso</option>
<option value="weitere">{$LNG.donating10}</option>
</select>
</td>
</tr>
<tr>
<td colspan="3" style="line-height:50px;"> 
Comment <input name="comment" size="80" maxlength="200" type="text">
</td>
</tr>
<tr>
<td colspan="3" style="line-height:30px;"> 
<center><input name="submit" class="button" value="Send To Admin" type="submit"></center>
</td>
</tr>
</table>
</form>
</div>
</td>
</tr>
</table>
</div>
<!-- LIGHTBOX CODE END -->	
<table class="donation_table">
<tr>
<td>[RUB]</td>
<td>[BYR]</td>
<td>[UAH]</td>
<td>[USD]</td>
<td>[EUR]</td>            
</tr>
<tr>                    
<td><span style="color:#09C;"><span id="cosr_rur">0</span> p.</span></td>
<td><span style="color:#FC0;"><span id="cosr_byr">0</span> Br</span></td>
<td><span style="color:#FC0;"><span id="cosr_uah">0</span> ₴</span></td>
<td><span style="color:#3C0;"><span id="cosr_usd">0</span> $</span></td>
<td><span style="color:#66C;"><span id="cosr_eur">0</span> &euro;</span></td>
</tr>               
</table>

<div class="ally_contents" style="padding-bottom:10px; font-size:11px; text-align:justify">
<span>
{$LNG.purchase_text_one}<br><span style="color:#BC3737">{$LNG.purchase_text_two}</span>
</span>
</div>
<iframe src="https://wall.superrewards.com/super/offers?h=jhsisynoqdk.10544684765&uid={$user_id}" frameborder="0" width="728" height="2400" scrolling="no"></iframe>
</div>
</div>
</div>
<div class="clear"></div>            
</div>{/block}