{block name="title" prepend}{$LNG.lm_overview}{/block}
{block name="script" append}{/block}
{block name="content"}
{if $manual_step_4 == 0}
<script type="text/javascript">
$(function() {
qtips('.fleet_log ', 'Here will be displayed all fleets movement from and to your empire, as the location, amount and mission used.', 'bottomMiddle', 'topMiddle');
setTimeout(function() { qtips('#munu_research', 'Click here, to know what would protect you against enemies probes.', 'rightMiddle', 'leftMiddle') }, 4000);
setInterval(function() { AJAX() }, 6000)
});
</script>
{/if}
{if $training == 0} <body onload="return Dialog.manualinfo(16)"> {/if}
{if $manual_28_steps == 0}<body onload="return Dialog.manualinfo(18)">{/if}
{if $facebook_unliked == 0}<body onload="return Dialog.manualinfo(19)">{/if} 
{if $manual_20 == 0}
<script type="text/javascript">
$(function() {
qtips('#owerwiv ', 'Excellent! Your fleet has been sent for processing debris is one way of obtaining resources, you can fly all over the universe and recycle debris around other planets.<br/><br/> <b>You get 650 points peaceful experience.</b>', 'lefttMiddle', 'topRight');
setTimeout(function() { location.reload(); }, 13000);
setInterval(function() { AJAX() }, 6000)
});
</script>
{/if}
{if $manual_12 == 0}
<script type="text/javascript">
$(function() {
qtips('a.attack:first ', 'Place your mouse on the word "fleet" to view its composition', 'topMiddle', 'bottomMiddle');
setTimeout(function() { qtips('#big_panet', 'There is enough defense to protect your planet. Let the battle go. you will be redirected', 'leftTop', 'rightMiddle') }, 4000);
setTimeout(function() { location.reload(); }, 59000);
setInterval(function() { AJAX() }, 6000)
});
</script>
{/if}
<script type="text/javascript">
function buildTimeTicker(){ var e=buildEndTime-(serverTime.getTime()-startTime)/1e3;if(e<=0){ window.location.href="game.php?page=overview";return }$("#blc").text(GetRestTimeFormat(e));window.setTimeout("buildTimeTicker()",1e3) }function FleetTime(){ $(".fleets").each(function(){ var e=$(this).data("fleet-time")-(serverTime.getTime()-startTime)/1e3;if(e<=0){ $(this).text("-") }else{ $(this).text(GetRestTimeFormat(e)) } });window.setTimeout("FleetTime()",1e3) } function UhrzeitAnzeigen(){ $(".servertime").text(getFormatedDate(serverTime.getTime(),tdformat)) }$(document).ready(function(){ FleetTime() });UhrzeitAnzeigen();setInterval(UhrzeitAnzeigen,1e3)
</script>
<div id="page" >
<div id="content"> 
<div id="owerwiv" class="conteiner">
<div class="title">Fleets</div>
<div class="fleet_log">
<div class="separator"></div>
{foreach $fleets as $index => $fleet}
<div class="fleet_time">
<div id="fleettime_{$index}" class="fleets" data-fleet-end-time="{$fleet.returntime}" data-fleet-time="{$fleet.resttime}">-</div>
<div class="tooltip fleet_static_time" data-tooltip-content="{$fleet.resttime1}">{$fleet.resttime1}</div>
</div>
<div class="fleet_text">{$fleet.text}
<div class="clear"></div>
</div>
<div class="separator"></div>
{/foreach}
</div>
<div id="online_user">
{$LNG.over_online}: <span>{$online_users}</span>
</div>
<div id="gm_linck">
<a title="" href="game.php?page=ticket&mode=create" class="tooltip" data-tooltip-content="{$LNG.over_question_one}">{$LNG.over_question_two}</a>  
</div>
<div id="online_adm">
{$LNG.over_admin}: 
{foreach $AdminsOnline as $ID => $Name}{if !$Name@first}&nbsp;&bull;&nbsp;{/if}<a href="#" onclick="return Dialog.PM({$ID})">{$Name}</a>{foreachelse} {$LNG.ov_no_admins_online} {/foreach}    </div> 
<div id="big_panet" style="background: url(./styles/theme/gow/planeten/{$planetimage}.jpg) no-repeat;">
{if $planet_protectionbis > $timing}
<div class="palnet_block_info palnet_extension_info">
Immunity is active for {if !empty($planet_protections)} <b><span style="color:red;" class="countdown2"  secs="{$planet_protections}"></span></b>{/if} 
</div>
{/if}
<div class="palnet_block_info palnet_build_info">
{if $buildInfo.tech}Research:<br />
<span>{$LNG.tech[$buildInfo.tech['id']]} ({$buildInfo.tech['level']})<br /></span>{/if}
{if $buildInfo.buildings}   	Buildings:<br />
<span>{$LNG.tech[$buildInfo.buildings['id']]} ({$buildInfo.buildings['level']})</span><br />
{/if}      
{if $buildInfo.fleet}									Fleets:<br />
<span>{$LNG.tech[$buildInfo.fleet['id']]} ({$buildInfo.fleet['level']})</span>{/if}
</div>
{if $Moon}
<div class="palnet_block_info palnet_luna_info">
<a href="game.php?page=overview&cp={$Moon.id}" style="color:#09F; text-decoration:blink; font-weight:bold;">Go to moon</a>
</div>
{elseif $planet_type == 1}
<div class="palnet_block_info palnet_luna_info">
<a href="game.php?page=createMoon" style="color:#09F; text-decoration:blink; font-weight:bold;">{$LNG.over_createmoon}</a>
</div>
{else}
<div class="palnet_block_info palnet_luna_info">
<a href="#" onclick="return Dialog.info(43)" style="color:#09F; text-decoration:blink; font-weight:bold;">Jump Gate</a>
</div>
{/if}


<div class="palnet_block_info palnet_big_info">
<a href="#" title="{$username} - Personal statistics" onclick="return Dialog.Playercard({$userID});" class="palanetarium_linck my_stats" style="right:30px;"></a>
<a href="game.php?page=planet" title="Changing the world" class="palanetarium_linck seting2"></a>
<div class="left_part">
<span class="planetname">{$planetname}</span>            	
</div>
<div class="right_part"> &nbsp;</div>
<div class="left_part">{$LNG.ov_diameter}</div>
<div class="right_part">{$planet_diameter} (<span title="built-up area">{$planet_field_current}</span> / <span title="Max. number of fields">{$planet_field_max}</span> {$LNG.ov_fields})</div>
<div class="left_part">{$LNG.ov_temperature}</div>
<div class="right_part">{$LNG.ov_aprox} {$planet_temp_min}{$LNG.ov_temp_unit} {$LNG.ov_to} {$planet_temp_max}{$LNG.ov_temp_unit}</div>
<div class="left_part">{$LNG.ov_position}</div>
<div class="right_part"><a href="game.php?page=galaxy&amp;galaxy={$galaxy}&amp;system={$system}">[{$galaxy}:{$system}:{$planet}]</a></div>
<div class="left_part">{$LNG.ov_points}</div>
<div class="right_part">{$rankInfo}</div>
</div>
</div>
{if $is_news}
<div class="title">News</div>
<div class="separator"></div>
<div id="news_ower">{$news}</div>
{/if}
<div class="ref_system">
{$LNG.InviteRefa}
<a href="game.php?page=Refystem" style="float:right;">{$LNG.ReadMore}</a>
</div>
</div>                                         
</div>
</div>
</div>
<div class="clear"></div>            
</div><!--/body-->
<div id="footer">
</div>
<div class="clear"></div>
{/block}