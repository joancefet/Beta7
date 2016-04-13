 {if $show_dbonus == 2}<script>
$(function() {
$( "#info-dialog" ).dialog({
modal: true,
width:'80%',buttons: {
Ok: function() {
$( this ).dialog( "close" );
}
}
});
});
</script>{/if}
<div style="display: none;" id="scroller">
<a class="scroller_mesages" href="game.php?page=messages" onclick="document.location.href = 'game.php?page=messages'">
<span class="mesages" {if $new_message == 0}style="display:none;"{/if}></span>
<span class="new_email" {if $new_message == 0}style="display:none;"{/if}>
{$new_message}
</span>
<span class="clear"></span>
</a>
<span class="go_top_bg">Top</span>
</div>
<div id="left_side">        
<div id="left_menu">
<div id="indicators">        	
<div id="attack" class="{$attack} indicator tooltip" data-tooltip-content="{if $attack == 'active_indicator' }{$LNG.NIA_on}{else}{$LNG.NIA}{/if}"><div class="icoi"></div></div>
<div id="grab" class="indicator tooltip" data-tooltip-content="{if $attack == 'active_indicator' }{$LNG.FORR_on}{else}{$LNG.FORR}{/if}"><div class="icoi"></div></div>
<div id="destruction" class="{$destroy} indicator tooltip" data-tooltip-content="{if $destroy == 'active_indicator' }{$LNG.YMIS_on}{else}{$LNG.YMIS}{/if}"><div class="icoi"></div></div>
<div id="espionage" class="{$spying} indicator tooltip" data-tooltip-content="{if $spying == 'active_indicator' }{$LNG.YEINBS_on}{else}{$LNG.YEINBS}{/if}" href="game.php?page=overview"><div class="icoi"></div></div>
<div id="rocket" class="{$rocket} indicator tooltip" data-tooltip-content="{if $rocket == 'active_indicator' }{$LNG.NIR_on}{else}{$LNG.NIR}{/if}"><div class="icoi"></div></div>
</div>     
<div class="servertime">{$servertime} Tick: {$tickatual}</div>
<div class="separator"></div>
{if $bonus_timer < $TIME}     <a title="Bonus" class="big_btn red btn_menu btn_menu_big" href="game.php?page=bonus">
{if $bonte_button !=0}x{$bonte_button}|{/if}<span>{$LNG.alm_bonus}</span></a>{/if}
<a class="big_btn btn_menu btn_menu_big"  href="game.php?page=donatebis">{$LNG.alm_purchase} {if $pointe != 0}<span style="color:#FC0;">+{$pointe}%</span>{/if}</a>
<a  href="?page=premium" class="big_btn premium btn_menu btn_menu_big">
<img class="left" src="./styles/theme/gow/images/ico-account-premium.png" alt="Premium Account" />
<span style="color:#FC0;">{$LNG.alm_premium} {if $premiun_extra != 0}<span style="color:#09C;">+{$premiun_extra}%</span>{/if}</span>
<img class="right" src="./styles/theme/gow/images/ico-account-premium.png" alt="Premium Account" />
</a>
<div class="separator"></div>
<a class="btn_menu" href="game.php?page=research" id="munu_research" {if $manual_step_4 == 0}onclick="starttraining4()"{/if}>{$LNG.alm_reseach}</a>		        	<a class="btn_menu" href="game.php?page=buildings" id="munu_build" {if $manual_step_1 == 0}onclick="starttraining2()"{/if}>{$LNG.alm_buildings}</a>		        	<a class="btn_menu" href="game.php?page=shipyard&amp;mode=fleet" id="munu_shipyard_fleet" {if $manual_15_step == 0}onclick="starttraining8()"{/if}>{$LNG.alm_shipyard}</a>		        	<a class="btn_menu" href="game.php?page=shipyard&amp;mode=defense" id="munu_shipyard_defense" {if $manual_8_step == 0}onclick="starttraining5()"{/if}>{$LNG.alm_defense}</a>		        	<a class="btn_menu" href="game.php?page=fleetTable">{$LNG.alm_fleets}</a>		        	        	<a class="btn_menu" href="game.php?page=resources" id="munu_resources">{$LNG.alm_resource}</a>        
<a class="btn_menu" href="game.php?page=officier" id="munu_senat" {if $manual_21_step == 0}onclick="starttraining12()"{/if}>{$LNG.alm_senat}</a>
<a class="btn_menu" href="game.php?page=port">{$LNG.alm_port}</a>   
<a class="btn_menu" href="game.php?page=trader">{$LNG.alm_adv_trader}</a>
<a class="btn_menu" href="game.php?page=academy">Academia {if $academy_reduce != 0}<span style="color:#FC0;">-{$academy_reduce}%</span>{/if}</a>	
<a class="btn_menu" href="game.php?page=Immunity">{$LNG.alm_immunity}</a>
<a class="btn_menu" href="game.php?page=Planetcloak">{$LNG.alm_planetcloak}</a>
<a class="btn_menu" href="game.php?page=Planeta">Leilões do P.</a>
<a class="btn_menu" href="game.php?page=Reward2">Resgate</a>
<a class="btn_menu" href="game.php?page=FleetDealer">Merc. de Frotas</a>
{*<a title="Get back some of your lsot fleets" class="btn_menu" href="game.php?page=FleetDealer">{$LNG.alm_fleetdealer}</a>*}
<div class="clear"></div>        
<div class="separator"></div>
<a class="btn_menu" href="game.php?page=galaxy" id="munu_galaxy" {if $manual_17_step == 0}onclick="starttraining9()"{/if}>{$LNG.alm_galaxy}</a>
<a class="btn_menu" href="game.php?page=alliance">{$LNG.alm_ally}</a>  		
<a class="btn_menu" href="game.php?page=battleSimulator">{$LNG.alm_battlesim}</a>
{if $uni_value == 1}    <a class="btn_menu" {if $manual_26_step == 0}onclick="starttraining15()"{/if} href="game.php?page=Achievements" id="achievements_name">{$LNG.alm_achievement}</a> {/if}
<a class="btn_menu" href="game.php?page=Refystem" id="munu_refsystem">{$LNG.alm_referal}</a>
<a class="btn_menu" href="game.php?page=Feedback" id="munu_refsystem">{$LNG.alm_feedback}</a>
<div class="clear"></div>
<div class="separator"></div>
{if $nvote == 1}	<a title="Promote us" class="big_btn red btn_menu btn_menu_big" href="game.php?page=Promote">
{$LNG.alm_promote}</a>{/if} 
{if $authlevel > 0} <a  href="admin.php" class="big_btn green btn_menu btn_menu_big">Administração</a>{/if}
<div class="clear"></div>
{if $cosmonaute_day == 1}
<div id="bottom_cosmonautics">
<div class="bottom_gift_bg">
<a {if $gift1 > 0}href="?page=bonus&mode=gift1"{/if} class="gift_bloc gift_1 {if $gift1 == 0}gift_opacity{/if} tooltip" data-tooltip-content="When activated you get <b>50</b> antimatter<br>
(Flying Saucer will be lost when)">{$gift1}</a>
<a {if $gift2 > 0}href="?page=bonus&mode=gift2"{/if} class="gift_bloc gift_2 {if $gift2 == 0}gift_opacity{/if} tooltip" data-tooltip-content="When activate, you get <b>50</b> antimatter<br>
(The alien will then be lost)">{$gift2}</a>
<a {if $gift3 > 0}href="?page=bonus&mode=gift3"{/if} class="gift_bloc gift_3 {if $gift3 == 0}gift_opacity{/if} tooltip" data-tooltip-content="When activated you get <b>50</b> antimatter<br>
(Rocket will be lost when)">{$gift3}</a>
<a {if $gift4 > 0}href="?page=bonus&mode=gift4"{/if} class="gift_bloc gift_4 {if $gift4_1 == 0}gift_opacity{/if} tooltip" data-tooltip-content="When you activated Cosmonaut, 
<br>You will receive 300 Antimatter<br>
And as you have a 50% chance:
<br><span style=' margin-left: 9px; margin-right: 4px; cursor: default; float: left;'>•</span>pontos de Academia <b>1-25</b>
<br><span style=' margin-left: 9px; margin-right: 4px; cursor: default; float: left;'>•</span>experiência de pascifismo <b>150-3500</b>
<br><span style=' margin-left: 9px; margin-right: 4px; cursor: default; float: left;'>•</span>bonus de anti matéria <b>200</b>
<br><span style=' margin-left: 9px; margin-right: 4px; cursor: default; float: left;'>•</span>Get <b>frisbee</b>
<br><span style=' margin-left: 9px; margin-right: 4px; cursor: default; float: left;'>•</span>Get <b>alien</b> 
<br><span style=' margin-left: 9px; margin-right: 4px; cursor: default; float: left;'>•</span>Get <b>space rocket</b> ">{$gift4}</a>
</div>
</div>
{/if}
{if $new_year == 1}
<div id="bottom_new_year">
<div class="bottom_gift_bg">
<a class="gift_bloc gift_1 gift_opacity tooltip" data-tooltip-content="When activated, you will receive a Christmas toy <b>35</b> antimatter<br>
(Christmas tree toy at the same time will be lost)">0</a>
<a class="gift_bloc gift_2 gift_opacity tooltip" data-tooltip-content="When activated, you will receive a New Year Snowflakes <b>35</b> antimatter<br>
(Snowflake thus will be lost)">0</a>
<a class="gift_bloc gift_3 gift_opacity tooltip" data-tooltip-content="When activated, you will receive a New Year's Bluebell <b>35</b> antimatter<br>
(The bell will then be lost)">0</a>
<a class="gift_bloc gift_4 gift_opacity tooltip" data-tooltip-content="When activated, Christmas gifts (one toy, Snowflake and bell) 
<br>you will receive 215 antimatter<br>
And as you have a 50% chance:
<br><span style=' margin-left: 9px; margin-right: 4px; cursor: default; float: left;'>•</span>Peace Experience <b>215-2015</b>
<br><span style=' margin-left: 9px; margin-right: 4px; cursor: default; float: left;'>•</span>bonus antimatter <b>215</b>
<br><span style=' margin-left: 9px; margin-right: 4px; cursor: default; float: left;'>•</span>To Get <b>Christmas toy </b>
<br><span style=' margin-left: 9px; margin-right: 4px; cursor: default; float: left;'>•</span>To Get <b>Christmas Snowflake</b> 
<br><span style=' margin-left: 9px; margin-right: 4px; cursor: default; float: left;'>•</span>To Get <b>Christmas bell</b> ">0</a>
</div>
</div>
{/if}
</div><!--/left_menu-->
<div style="height:0; overflow:hidden;" loop="false;" id="music">
<audio id="beepataks" preload="auto">
<source src="http://mass.xterium.ru/sound/sirena.mp3"></source>
<source src="http://mass.xterium.ru/sound/sirena.ogg"></source>
</audio>
<script type="text/javascript">
var ataks = "0";
var spio = "0";
var unic = "0";
var rakets = "0";
document.getElementById('beepataks').volume={$alarm_volume};
{* {$sound} *}
</script>
</div>  
</div><!--/left_side-->
{if $show_dbonus != 1}
<div id="info-dialog" title="Daily Bonus" >
                <!-- Rewards panel (Always visible) -->
<div id="activityRewards_dayHolder">
<form action="game.php?page=dbonus" method="POST">
<input name="cmd" value="1" type="hidden">
			<div class="dayCard {if $xxx != 1}{else}active{/if}" data-day="1" data-type="Income15">

			<div class="boxDayNameBox">Day 1</div>
			<div class="boxImage premiumAccount"></div>
			<div class="boxDescription">This will reward you with 5 free "Academy" points !</div>
				<div class="boxClaim">							
					<input id="activityRewards_button_1"  {if $xxx != 1}disabled="disabled" class="inactive"{else}class="active"{/if} value="Claim" {if $xxx == 1}onclick="$('#info-dialog').dialog('close');"{/if} type="submit">
				</div>
			</div>
</form>
		
		<form action="game.php?page=dbonus" method="POST">
<input name="cmd" value="2" type="hidden">
			<div class="dayCard {if $xxx != 2}{else}active{/if}" data-day="2" data-type="Income30">

			<div class="boxDayNameBox">
									Day 2							</div>

			<div class="boxImage income30"></div>

			<div class="boxDescription">This will reward you with {$rewardss} "Peace" experience !</div>

							<div class="boxClaim">
					<input id="activityRewards_button_2" {if $xxx != 2}disabled="disabled" class="inactive"{else}class="active"{/if} value="Claim !" {if $xxx == 2}onclick="$('#info-dialog').dialog('close');"{/if} type="submit">
				</div>
			
		</div>
		</form>
		<form action="game.php?page=dbonus" method="POST">
<input name="cmd" value="3" type="hidden">
			<div class="dayCard {if $xxx != 3}{else}active{/if}" data-day="3" data-type="Ozone50">

			<div class="boxDayNameBox">
									Day 3							</div>

			<div class="boxImage income60"></div>

			<div class="boxDescription">Get 30% extra production on all your planets for 24H !</div>

							<div class="boxClaim">
					<input id="activityRewards_button_3" {if $xxx != 3}disabled="disabled" class="inactive"{else}class="active"{/if} value="Claim !" {if $xxx == 3}onclick="$('#info-dialog').dialog('close');"{/if} type="submit">
				</div>
			
		</div>
		</form>
		<form action="game.php?page=dbonus" method="POST">
<input name="cmd" value="4" type="hidden">
			<div class="dayCard {if $xxx != 4}{else}active{/if}" data-day="4" data-type="Income60">

			<div class="boxDayNameBox">
									Day 4							</div>

			<div class="boxImage credits"></div>

			<div class="boxDescription">This gift will reward u with 250.000 DM !</div>

							<div class="boxClaim">
					<input id="activityRewards_button_4" {if $xxx != 4}disabled="disabled" class="inactive"{else}class="active"{/if} value="Claim !" {if $xxx == 4}onclick="$('#info-dialog').dialog('close');"{/if} type="submit">
				</div>
			
		</div>
		</form>
		<form action="game.php?page=dbonus" method="POST">
<input name="cmd" value="5" type="hidden">
			<div class="dayCard {if $xxx != 5}{else}active{/if}" data-day="5" data-type="Premium8">

			<div class="boxDayNameBox">
									Day 5							</div>

			<div class="boxImage income15"></div>

			<div class="boxDescription">The surprise box will reward you with random bonuses !</div>

							<div class="boxClaim">
					<input id="activityRewards_button_5" {if $xxx != 5}disabled="disabled" class="inactive"{else}class="active"{/if} value="Claim !" {if $xxx == 5}onclick="$('#info-dialog').dialog('close');"{/if} type="submit">
				</div>
			
		</div>
		</form>
		<form action="game.php?page=dbonus" method="POST">
<input name="cmd" value="6" type="hidden">
			<div class="dayCard {if $xxx != 6}{else}active{/if}" data-day="6" data-type="Premium2">

			<div class="boxDayNameBox">
									Day 6							</div>

			<div class="boxImage ozone"></div>

			<div class="boxDescription">This bonus will give u one extra planet slot !</div>

							<div class="boxClaim">
					<input id="activityRewards_button_6" {if $xxx != 6}disabled="disabled" class="inactive"{else}class="active"{/if} value="Claim !" {if $xxx == 6}onclick="$('#info-dialog').dialog('close');"{/if} type="submit">
				</div>
			
		</div>
		</form>
				<form action="game.php?page=dbonus" method="POST">
<input name="cmd" value="{$randomd}" type="hidden">
			<div class="dayCard {if $xxx != 7}{else}active{/if}" data-day="7" data-type="MetaRewardX2">

			<div class="boxDayNameBox">
									Day 7						</div>

			<div class="boxImage meta"></div>

			<div class="boxDescription">This will reward u randomly with one of the former bonuses !</div>
			<div class="boxClaim">
					<input id="activityRewards_button_7" {if $xxx != 7}disabled="disabled" class="inactive"{else}class="active"{/if} value="Claim !" {if $xxx == 7}onclick="$('#info-dialog').dialog('close');"{/if} type="submit">
				</div></div>
				</form>
				
			</div>

			</div> {/if}