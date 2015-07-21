{block name="title" prepend}Academy{/block}
{block name="content"}
 <div id="page">
	<div id="content"> 
{if $manual_25_step == 0}
<script type="text/javascript">
	$(function() {
		qtips('#span_point', 'You have accumulated experience points, through awareness. The higher the level, the more points you get for his achievement.', 'topMiddle', 'bottomLeft');
qtips('.gray_stripe', 'Here you can find a lot of skills that you can upgrade for academy points that you get for achieving Peace and Combat level. <br /><br /><b><span style="margin:0 0 7px 0;display: block;color:#002211;">Upgrade one of the skills:<b></span> <b><span style=" margin-left: 9px; margin-right: 4px; cursor: default; float: left;color:#002211;">•</span>armament <br /><span style=" margin-left: 9px; margin-right: 4px; cursor: default; float: left;color:#002211;">•</span>production rate <br /><span style=" margin-left: 9px; margin-right: 4px; cursor: default; float: left;color:#002211;">•</span>defensive strategy</b>', 'leftMiddle', 'topRight');
setInterval(function() { AJAX() }, 6000)
	});
	</script>
	{/if}
	
	{if $manual_25_1_step == 0}
	<script type="text/javascript">
	$(function() {
		qtips('.gray_stripe', 'Excellent! You pumped his first skill academy.<br/><br/> <b>You get 650 points peaceful experience.</b>', 'leftMiddle', 'topRight');
setTimeout(function() { location.reload(); }, 10000);
setInterval(function() { AJAX() }, 6000)
	});
	</script>
	{/if}
<div id="achivment">
    <div class="ach_main_block academy_main_block">
    
        <div id="academy_head" class="gray_stripe">
            Academy
         	<span style="color:#FC6; float:right;" id="span_point">you have {$academy_p} academy points</span>
        </div>

		<div id="academy" class="ach_main_content">
                            
            <div class="ach_menu">
                <ul>
                    <li class="skils1 active">
                        <a href="#" onclick="openV('skils1', 1)">I</a>
                    </li>
                    <li class="skils2 ">
                        <a href="#" onclick="openV('skils2', 2)">II</a>
                    </li>
                    <li class="skils3 ">
                        <a href="#" onclick="openV('skils3', 3)">III</a>
                    </li>
                    <li class="donpoint">
                        <a href="#" style="color:#6C6;" onclick="openV('donpoint', 'no')">+</a>
                    </li>
                    <li class="back_skils">
                        <a href="#" style="color:#F33;" onclick="openV('back_skils', 'no')">&dArr;</a>
                    </li>
                </ul>  
            </div> 
            
            <div id="skils1" class="ach_content_box" >
            	<div style="float:left; width:100%;">                             
                <div class="ach_content" style="padding-top:7px;">
                	<span class="tooltip academy_reset_tree" data-tooltip-content="To reset the branches Academy requires 5.000 АМ">&dArr;</span>
<div class="clear"></div>
<!----------------------------------VETKAA 1------------------------------------------------->
<table class="skils">
   <tr><!--1 lvl-->
                	<td class="skils_p">&nbsp;</td>
                	<td class="skils_p">&nbsp;</td>
                    <td class="skils_p">&nbsp;</td>
                 	<td rowspan="2" colspan="2" class="skils_bg_bl_vniz2{if $academy_1101 >=3}_a{/if}"></td>
                    <td class="skils_bg_bl_vniz1{if $academy_1101 >=3}_a{/if}"></td>
                    <td class="skils_bg_a"><a {if $academy_1101 >= 0} onclick="return Dialog.SkillUp(1101);"{/if} class="skils tooltip" data-tooltip-content="<span style='color:#09f;font-weight:bold;'>armament</span><br />level {$academy_1101_next}:<br /><span style='color:#0C0;'>+{$academy_1101_bonus}%</span> attack<br /><br />required:<br /><span style='color:#0C0;'>{$academy_1101_points}</span> academy points"  style="background:url(styles/theme/gow/gebaeude/1101.jpg);">
					{if $academy_1101 > 0 && $academy_1101 < 200}<span class="lvl">{$academy_1101}</span>{elseif $academy_1101 == 200}<span class="lvl">Max.</span>{/if}
					</a></td>
                    <td class="skils_p">&nbsp;</td>
                </tr>
    <tr><!--perehoh 1-2 -->
                	<td class="skils_p">&nbsp;</td>
                	<td class="skils_p">&nbsp;</td>
                    <td class="skils_p">&nbsp;</td>
                    <td colspan="3" class="skils_bg_t_vniz{if $academy_1101 >=5}_a{/if}">&nbsp;</td>
                </tr>
<tr><!--2 lvl-->
                	<td class="skils_p">&nbsp;</td>
                    <td class="skils_p">&nbsp;</td>
                    <td class="skils_p">&nbsp;</td>
                	<td class="skils_bg{if $academy_1101 >= 3}_a{/if}"><a  {if $academy_1101 >= 3} onclick="return Dialog.SkillUp(1102);" {/if}  class="skils tooltip" data-tooltip-content="<span style='color:#09f;font-weight:bold;'>armament class A</span><br />level {$academy_1102_next}:<br /><span style='color:#0C0;'>+{$academy_1102_bonus1}%</span> attack<br /><br />required:<br />{if $academy_1101 < 3}
					<span style='color:#F00;'>armament (level {$academy_1101}/3)</span><br />
					{else}
					<span style='color:#0C0;'>{$academy_1102_points}</span> academy points{/if}"  style="background:url(styles/theme/gow/gebaeude/1102.jpg);">
					{if $academy_1102 > 0 && $academy_1102 < 100}<span class="lvl">{$academy_1102}</span>{elseif $academy_1102 == 100}<span class="lvl">Max.</span>{/if}</a></td>
                	<td class="skils_p">&nbsp;</td>
                	
					<td class="skils_bg{if $academy_1101 >= 5}_a{/if}"><a  {if $academy_1101 >= 5} onclick="return Dialog.SkillUp(1104);" {/if} class="skils tooltip" data-tooltip-content="<span style='color:#09f;font-weight:bold;'>standardization (fleet)</span><br />level {$academy_1104_next}:<br /><span style='color:#0C0;'>-{$academy_1104_bonus}%</span> cost of fleets<br /><br />required:<br />
					{if $academy_1101 < 5}
					<span style='color:#F00;'>armament (level {$academy_1101}/5)</span><br />
					{else}
					<span style='color:#0C0;'>{$academy_1104_points}</span> academy points{/if}"  
					style="background:url(styles/theme/gow/gebaeude/1104.jpg);">{if $academy_1104 > 0 && $academy_1104 < 70}<span class="lvl">{$academy_1104}</span>{elseif $academy_1104 == 70}<span class="lvl">Max.</span>{/if}</a></td>
                    
					
					<td class="skils_p">&nbsp;</td>
                    <td class="skils_bg{if $academy_1101 >= 5}_a{/if}"><a  {if $academy_1101 >= 5} onclick="return Dialog.SkillUp(1105);" {/if} class="skils tooltip" data-tooltip-content="<span style='color:#09f;font-weight:bold;'>limit engine</span><br />level {$academy_1105_next}:<br /><span style='color:#0C0;'>+{$academy_1105_bonus}%</span> fleet speed<br /><br />required:<br />{if $academy_1101 < 5}
					<span style='color:#F00;'>armament (level {$academy_1101}/5)</span><br />
					{else}
					<span style='color:#0C0;'>{$academy_1105_points}</span> academy points{/if}"  style="background:url(styles/theme/gow/gebaeude/1105.jpg);">{if $academy_1105 > 0 && $academy_1105 < 25}<span class="lvl">{$academy_1105}</span>{elseif $academy_1105 == 25}<span class="lvl">Max.</span>{/if}</a></td>
                </tr>
	 <tr><!--perehoh 2-3 -->
                 	<td class="skils_p">&nbsp;</td>
                    <td class="skils_p">&nbsp;</td>
                    <td class="skils_p">&nbsp;</td>
                    <td class="skils_bg_vniz">&nbsp;</td>
                    <td class="skils_p">&nbsp;</td>
                    <td class="skils_bg_vniz{if $academy_1104 >=3}_a{/if}"></td>
                    <td class="skils_p">&nbsp;</td>
                    <td class="skils_bg_vniz{if $academy_1105 >=5}_a{/if}"></td>
                </tr>
				
    <tr><!--3 lvl-->
        <td rowspan="2" colspan="2" class="skils_bg_bl_vniz2"></td>
        <td class="skils_bg_bl_vniz1"></td>
        
		<td class="skils_bg{if $academy_1102 >= 7}_a{/if}"><a  {if $academy_1102 >= 7} onclick="return Dialog.SkillUp(1103);" {/if} class="skils tooltip" data-tooltip-content="<span style='color:#09f;font-weight:bold;'>double attack</span><br /> Level {$academy_1103_next}:<br /><span style='color:#0C0;'>+<span id='ab1'>{$academy_1103_bonus}</span>&#37</span> cumulative probability of firing a projectile<br /><br />Required:<br />
		{if $academy_1102 < 7}<span style='color:#F00;'>Armament Class A (level {$academy_1102}/7)</span><br />
		{else}<span style='color:#0C0;'>{$academy_1103_points}</span> academy points{/if}"  
		style="background:url(styles/theme/gow/gebaeude/1103.jpg);">{if $academy_1103 > 0 && $academy_1103 < 100}<span class="lvl">{$academy_1103}</span>{elseif $academy_1103 == 100}<span class="lvl">Max.</span>{/if}</a></td>
        <td class="skils_p">&nbsp;</td>
		
		<td class="skils_bg{if $academy_1104 >= 3}_a{/if}"><a  {if $academy_1104 >= 3} onclick="return Dialog.SkillUp(1106);" {/if} class="skils tooltip" data-tooltip-content="<span style='color:#09f;font-weight:bold;'>computerization</span><br />level {$academy_1106_next}:<br /><span style='color:#0C0;'>+{$academy_1106_bonus}%</span> fleet slots<br /><br />required:<br />{if $academy_1104 < 3}<span style='color:#F00;'>standartization (fleet) (level {$academy_1104}/3)</span><br />{else}
	<span style='color:#0C0;'>{$academy_1106_points}</span> academy points{/if}" style="background:url(styles/theme/gow/gebaeude/1106.jpg);">{if $academy_1106 > 0 && $academy_1106 < 100}<span class="lvl">{$academy_1106}</span>{elseif $academy_1106 == 100}<span class="lvl">Max.</span>{/if}</a></td>
       <td class="skils_p">&nbsp;</td>
       <td class="skils_bg{if $academy_1105 >= 5}_a{/if}"><a  {if $academy_1105 >= 5} onclick="return Dialog.SkillUp(1107);" {/if} class="skils tooltip" data-tooltip-content="<span style='color:#09f;font-weight:bold;'>efficient engines</span><br />level {$academy_1107_next}:<br /><span style='color:#0C0;'>-{$academy_1107_bonus}%. </span> consumption of deuterium<br /><br />required:<br />{if $academy_1105 < 5}<span style='color:#F00;'>limit engine (level {$academy_1105}/5)</span><br />{else}
		<span style='color:#0C0;'>{$academy_1107_points}</span> academy points{/if}" 
		style="background:url(styles/theme/gow/gebaeude/1107.jpg);">{if $academy_1107 > 0 && $academy_1107 < 40}<span class="lvl">{$academy_1107}</span>{elseif $academy_1107 == 40}<span class="lvl">Max.</span>{/if}</a></td>
    </tr>
    <tr><!--perehoh 3-4 -->                 	
        <td colspan="3" class="skils_bg_t_vniz">&nbsp;</td>
        <td class="skils_p">&nbsp;</td>
        <td class="skils_p">&nbsp;</td>
        <td class="skils_bg_vniz"></td>
    </tr>
    <tr><!--4 lvl-->             
        <td class="skils_bg{if $academy_1103 >= 5}_a{/if}"><a {if $academy_1103 >= 5} onclick="return Dialog.SkillUp(1108);" {/if} class="skils tooltip" data-tooltip-content="<span style='color:#09f;font-weight:bold;'>accurate shots</span><br /> Level {$academy_1108_next}:<br /><span style='color:#0C0;'>+<span id='ab1'>{$academy_1108_bonus}</span>&#37</span> the maximum number of murdered per round<br /><br />Required:<br />
		{if $academy_1103 < 5}<span style='color:#F00;'>double Attack (level {$academy_1103}/5)</span><br />{else}
		<span style='color:#0C0;'>{$academy_1108_points}</span> academy points{/if}" 
		style="background:url(styles/theme/gow/gebaeude/1108.jpg);">{if $academy_1108 > 0 && $academy_1108 < 40}<span class="lvl">{$academy_1108}</span>{elseif $academy_1108 == 40}<span class="lvl">Max.</span>{/if}</a></td>
				
		
        <td class="skils_p">&nbsp;</td>
		
        <td class="skils_bg{if $academy_1103 >= 7}_a{/if}"><a {if $academy_1103 >= 7} onclick="return Dialog.SkillUp(1109);" {/if} class="skils tooltip" data-tooltip-content="<span style='color:#09f;font-weight:bold;'>chain reaction</span><br /> Level {$academy_1109_next}:<br /><span style='color:#0C0;'>+<span id='ab1'>{$academy_1109_bonus}</span>&#37</span> the possibility of causing a chain reaction<br /><br />Required:<br />
		{if $academy_1103 < 7}<span style='color:#F00;'>double Attack (level {$academy_1103}/7)</span><br />{else}
		<span style='color:#0C0;'>{$academy_1109_points}</span> academy points{/if}" 
		style="background:url(styles/theme/gow/gebaeude/1109.jpg);">{if $academy_1109 > 0 && $academy_1109 < 40}<span class="lvl">{$academy_1109}</span>{elseif $academy_1109 == 40}<span class="lvl">Max.</span>{/if}</a></td>		
		
        <td class="skils_p">&nbsp;</td>
		
		
		
        <td class="skils_bg{if $academy_1103 >= 7}_a{/if}"><a {if $academy_1103 >= 7} onclick="return Dialog.SkillUp(1110);" {/if} class="skils tooltip" data-tooltip-content="<span style='color:#09f;font-weight:bold;'>strengthening explosion</span><br /> Level {$academy_1110_next}:<br /><span style='color:#0C0;'>+<span id='ab1'>{$academy_1110_bonus}</span>&#37</span> the destruction of additional units<br /><br />Required:<br />
		{if $academy_1103 < 7}<span style='color:#F00;'>double Attack (level {$academy_1103}/7)</span><br />{else}
		<span style='color:#0C0;'>{$academy_1110_points}</span> academy points{/if}" 
		style="background:url(styles/theme/gow/gebaeude/1110.jpg);">{if $academy_1110 > 0 && $academy_1110 < 40}<span class="lvl">{$academy_1110}</span>{elseif $academy_1110 == 40}<span class="lvl">Max.</span>{/if}</a></td>		

		
        <td class="skils_p">&nbsp;</td>
        <td class="skils_p">&nbsp;</td>
		
		
        <td class="skils_bg{if $academy_1107 >= 10}_a{/if}"><a {if $academy_1107 >= 10} onclick="return Dialog.SkillUp(1112);" {/if} class="skils tooltip" data-tooltip-content="<span style='color:#09f;font-weight:bold;'>relief ships</span><br /> Level {$academy_1112_next}:<br /><span style='color:#0C0;'>-<span id='ab1'>{$academy_1112_bonus}</span>&#37</span> fuel consumption<br /><span style='color:#F90;'>-<span id='ab2'>0</span>&#37</span> bumpers<br /><br />Required:<br />
		{if $academy_1107 < 10}<span style='color:#F00;'>efficient engines (level {$academy_1107}/10)</span><br />{else}
		<span style='color:#0C0;'>{$academy_1112_points}</span> academy points{/if}" 
		style="background:url(styles/theme/gow/gebaeude/1112.jpg);">{if $academy_1112 > 0 && $academy_1112 < 40}<span class="lvl">{$academy_1112}</span>{elseif $academy_1112 == 40}<span class="lvl">Max.</span>{/if}</a></td>		
	
   </tr>
   <tr><!--perehoh 4-5 -->                 	
        <td class="skils_bg_vniz"></td>
        <td class="skils_p">&nbsp;</td>
        <td class="skils_bg_vniz"></td>
        <td class="skils_p">&nbsp;</td>
        <td class="skils_p">&nbsp;</td>
        <td class="skils_p">&nbsp;</td>
        <td class="skils_p">&nbsp;</td>
    </tr>
    <tr><!--5 lvl-->             
        <td class="skils_bg{if $academy_1108 >= 5}_a{/if}"><a {if $academy_1108 >= 5} onclick="return Dialog.SkillUp(1111);" {/if} class="skils tooltip" data-tooltip-content="<span style='color:#09f;font-weight:bold;'>Fokus</span><br /> Level {$academy_1111_next}:<br /><span style='color:#0C0;'>+<span id='ab1'>{$academy_1111_bonus}</span>&#37</span> to focus ships<br /><br />Required:<br />
		{if $academy_1108 < 5}<span style='color:#F00;'>accurate shots (level {$academy_1108}/5)</span><br />{else}
		<span style='color:#0C0;'>{$academy_1111_points}</span> academy points{/if}" 
		style="background:url(styles/theme/gow/gebaeude/1111.jpg);">{if $academy_1111 > 0 && $academy_1111 < 40}<span class="lvl">{$academy_1111}</span>{elseif $academy_1111 == 40}<span class="lvl">Max.</span>{/if}</a></td>		
			
		
		
        <td class="skils_p">&nbsp;</td>
        <td class="skils_bg{if $academy_1109 >= 5}_a{/if}"><a {if $academy_1109 >= 5} onclick="return Dialog.SkillUp(1113);" {/if} class="skils tooltip" data-tooltip-content="<span style='color:#09f;font-weight:bold;'>Critical damage Defense</span><br /> Level {$academy_1113_next}:<br /><span style='color:#0C0;'>+<span id='ab1'>{$academy_1113_bonus}</span>&#37</span> the destruction of Defense<br /><br />Required:<br />
		{if $academy_1109 < 5}<span style='color:#F00;'>chain reaction (level {$academy_1109}/5)</span><br />{else}
		<span style='color:#0C0;'>{$academy_1113_points}</span> academy points{/if}" 
		style="background:url(styles/theme/gow/gebaeude/1113.jpg);">{if $academy_1113 > 0 && $academy_1113 < 40}<span class="lvl">{$academy_1113}</span>{elseif $academy_1113 == 40}<span class="lvl">Max.</span>{/if}</a></td>		
		
        <td class="skils_p">&nbsp;</td>
        <td class="skils_p">&nbsp;</td>                	
        <td class="skils_p">&nbsp;</td>
        <td class="skils_p">&nbsp;</td>
        <td class="skils_p">&nbsp;</td>
   </tr>
</table>                    <div class="clear"></div>               
                </div> <!--/ach_content-->
                </div>   
                <div style="padding-top:7px;"></div>
                <div class="clear"></div>                               
	 		</div><!--/ach_content_box-->
            <div id="skils2" class="ach_content_box"  style="display:none;">
            	<div style="float:left; width:100%;">                             
                <div class="ach_content" style="padding-top:7px;">
                	<span class="tooltip academy_reset_tree" data-tooltip-content="Для сброса ветки академии Required 5.000 АМ">&dArr;</span>
<!----------------------------------VETKAA 2------------------------------------------------->
<table class="skils">
   <tr><!--1 lvl-->
                	<td class="skils_p">&nbsp;</td>
                    <td class="skils_p">&nbsp;</td>
                	<td class="skils_p">&nbsp;</td>
                    <td class="skils_p">&nbsp;</td>
                 	<td class="skils_p">&nbsp;</td>
                    <td class="skils_bg_a"><a  onclick="return Dialog.SkillUp(1201);" class="skils tooltip" data-tooltip-content="<span style='color:#09f;font-weight:bold;'>production rate</span><br />level {$academy_1201_next}:<br /><span style='color:#0C0;'>+{$academy_1201_bonus}%</span> mining mines<br /><br />required:<br />
					<span style='color:#0C0;'>{$academy_1201_points}</span> academy points"  style="background:url(styles/theme/gow/gebaeude/1201.jpg);">{if $academy_1201 > 0 && $academy_1201 < 100}<span class="lvl">{$academy_1201}</span>{elseif $academy_1201 == 100}<span class="lvl">Max.</span>{/if}</a></td>
                    <td class="skils_p">&nbsp;</td>
                    <td class="skils_p">&nbsp;</td>
                	<td class="skils_p">&nbsp;</td>
                </tr>
               	<tr><!--perehoh 2-3 -->
                	<td class="skils_p">&nbsp;</td>
                	<td class="skils_p">&nbsp;</td>
                	<td class="skils_p">&nbsp;</td>
                    <td class="skils_p">&nbsp;</td>
               		<td class="skils_p">&nbsp;</td>
                    <td class="skils_bg_vniz{if $academy_1201 >=3}_a{/if}"></td>
                    <td class="skils_p">&nbsp;</td>
                    <td class="skils_p">&nbsp;</td>
                	<td class="skils_p">&nbsp;</td>
                </tr>
    <tr><!--2 lvl-->     
                	<td class="skils_p">&nbsp;</td>       	
                    <td colspan="3" class="skils_bg_bl_vniz3_2{if $academy_1202 >=10}_a{/if}"></td>  
                    <td class="skils_bg_bl_vniz1{if $academy_1202 >=10}_a{/if}"></td>                	
                	<td class="skils_bg{if $academy_1201 >= 3}_a{/if}"><a  {if $academy_1201 >= 3} onclick="return Dialog.SkillUp(1202);" {/if} class="skils tooltip" data-tooltip-content="<span style='color:#09f;font-weight:bold;'>energetics</span><br />level {$academy_1202_next}:<br /><span style='color:#0C0;'>+{$academy_1202_bonus}%</span> energy production<br /><br />required:<br />{if $academy_1201 < 3}<span style='color:#F00;'>production rate (level {$academy_1201}/3)</span><br />
					{else}<span style='color:#0C0;'>{$academy_1202_points}</span> academy points{/if}" style="background:url(styles/theme/gow/gebaeude/1202.jpg);">{if $academy_1202 > 0 && $academy_1202 < 100}<span class="lvl">{$academy_1202}</span>{elseif $academy_1202 == 100}<span class="lvl">Max.</span>{/if}</a></td>
                    <td class="skils_bg_br_vniz1{if $academy_1202 >=15}_a{/if}"></td>
                    <td rowspan="2" colspan="2" class="skils_bg_br_vniz2{if $academy_1202 >=15}_a{/if}"></td>                   
                </tr>
                <tr><!--perehoh 2-3 -->
                 	<td colspan="3" class="skils_bg_t_big_vniz{if $academy_1202 >=10}_a{/if}">&nbsp;</td>
                    <td class="skils_p">&nbsp;</td>
                    <td colspan="3" class="skils_bg_t_vniz{if $academy_1202 >=7}_a{/if}">&nbsp;</td>
                </tr>                 
    <tr><!--3 lvl-->
					<td class="skils_bg{if $academy_1202 >= 10}_a{/if}"><a {if $academy_1202 >= 10} onclick="return Dialog.SkillUp(1209);" {/if} class="skils tooltip" data-tooltip-content="<span style='color:#09f;font-weight:bold;'>thermonuclear reaction</span><br />level {$academy_1209_next}:<br /><span style='color:#0C0;'>+{$academy_1209_bonus}% </span> power generation for fusion reactor<br /><br />required:<br />
					{if $academy_1202 < 10}<span style='color:#F00;'>energetics (level {$academy_1202}/10)</span><br />
					{else}<span style='color:#0C0;'>{$academy_1209_points}</span> academy points{/if}"  
					style="background:url(styles/theme/gow/gebaeude/1209.jpg);">{if $academy_1209 > 0 && $academy_1209 < 100}<span class="lvl">{$academy_1209}</span>{elseif $academy_1209 == 100}<span class="lvl">Max.</span>{/if}</a></td>
                 	<td class="skils_p">&nbsp;</td>
					<td class="skils_bg{if $academy_1202 >= 10}_a{/if}"><a  {if $academy_1202 >= 10} onclick="return Dialog.SkillUp(1210);" {/if} class="skils tooltip" data-tooltip-content="<span style='color:#09f;font-weight:bold;'>solar panels</span><br />level {$academy_1210_next}:<br /><span style='color:#0C0;'>+{$academy_1210_bonus}% </span> to the development of solar energy satellites<br /><br />required:<br />
					{if $academy_1202 < 10}<span style='color:#F00;'>energetics (level {$academy_1202}/10)</span><br />
					{else}<span style='color:#0C0;'>{$academy_1210_points}</span> academy points{/if}"  					
					style="background:url(styles/theme/gow/gebaeude/1210.jpg);">{if $academy_1210 > 0 && $academy_1210 < 100}<span class="lvl">{$academy_1210}</span>{elseif $academy_1210 == 100}<span class="lvl">Max.</span>{/if}</a></td>
                    <td class="skils_p">&nbsp;</td>
                	<td class="skils_bg{if $academy_1202 >= 7}_a{/if}"><a  {if $academy_1202 >= 7} onclick="return Dialog.SkillUp(1203);" {/if} class="skils tooltip" data-tooltip-content="<span style='color:#09f;font-weight:bold;'>magistracy</span><br />level {$academy_1203_next}:<br /><span style='color:#0C0;'>-{$academy_1203_bonus}%</span> time to study<br /><br />required:<br />
					{if $academy_1202 < 7}<span style='color:#F00;'>energetics (level {$academy_1202}/7)</span><br />
					{else}<span style='color:#0C0;'>{$academy_1203_points}</span> academy points{/if}"  
					style="background:url(styles/theme/gow/gebaeude/1203.jpg);">{if $academy_1203 > 0 && $academy_1203 < 40}<span class="lvl">{$academy_1203}</span>{elseif $academy_1203 == 40}<span class="lvl">Max.</span>{/if}</a></td>
                	<td class="skils_p">&nbsp;</td><td class="skils_bg{if $academy_1202 >= 7}_a{/if}"><a  {if $academy_1202 >= 7} onclick="return Dialog.SkillUp(1204);" {/if} class="skils tooltip" data-tooltip-content="<span style='color:#09f;font-weight:bold;'>Cosmo depot</span><br />level {$academy_1204_next}:<br /><span style='color:#0C0;'>+{$academy_1204_bonus}%</span> spaciousness to storage<br /><br />required:<br />
					{if $academy_1202 < 7}<span style='color:#F00;'>energetics (level {$academy_1202}/7)</span><br />
					{else}<span style='color:#0C0;'>{$academy_1204_points}</span> academy points{/if}"  
					style="background:url(styles/theme/gow/gebaeude/1204.jpg);">{if $academy_1204 > 0 && $academy_1204 < 50}<span class="lvl">{$academy_1204}</span>{elseif $academy_1204 == 50}<span class="lvl">Max.</span>{/if}</a></td>
                    <td class="skils_p">&nbsp;</td>
					<td class="skils_bg{if $academy_1202 >= 15}_a{/if}"><a  {if $academy_1202 >= 15} onclick="return Dialog.SkillUp(1208);" {/if} class="skils tooltip" data-tooltip-content="<span style='color:#09f;font-weight:bold;'>global defense</span><br />level {$academy_1208_next}:<br /><span style='color:#0C0;'>+{$academy_1208_bonus}</span> to the maximum number of shield domes<br /><br />required:<br />
					{if $academy_1202 < 15}<span style='color:#F00;'>energetics (level {$academy_1202}/15)</span><br />
					{else}<span style='color:#0C0;'>{$academy_1208_points}</span> academy points{/if}"  style="background:url(styles/theme/gow/gebaeude/1208.jpg);">{if $academy_1208 > 0 && $academy_1208 < 200}<span class="lvl">{$academy_1208}</span>{elseif $academy_1208 == 200}<span class="lvl">Max.</span>{/if}</a></td>    
                </tr>
    <tr><!--perehoh 3-4 -->
                    <td class="skils_p">&nbsp;</td>
                    <td class="skils_p">&nbsp;</td>
                	<td class="skils_p">&nbsp;</td>
                    <td class="skils_p">&nbsp;</td>
                	<td class="skils_bg_vniz{if $academy_1203 >=12}_a{/if}"></td>
               		<td class="skils_p">&nbsp;</td>                    
                    <td class="skils_bg_vniz{if $academy_1204 >=5}_a{/if}"></td>
                    <td class="skils_p">&nbsp;</td>
                    <td class="skils_p">&nbsp;</td>
                </tr>
                <tr><!--4 lvl-->
                	<td class="skils_p">&nbsp;</td>
                 	<td rowspan="2" colspan="2" class="skils_bg_bl_vniz2{if $academy_1205 >=3}_a{/if}"></td>
                    <td class="skils_bg_bl_vniz1{if $academy_1205 >=3}_a{/if}"></td>
					<td class="skils_bg{if $academy_1203 >= 12}_a{/if}"><a {if $academy_1203 >= 12} onclick="return Dialog.SkillUp(1205);" {/if} class="skils tooltip" data-tooltip-content="<span style='color:#09f;font-weight:bold;'>academy of sciences</span><br />level {$academy_1205_next}:<br /><span style='color:#0C0;'>+{$academy_1205_bonus}</span> to the intergalactic research network<br /><br />required:<br />
					{if $academy_1203 < 12}<span style='color:#F00;'>magistracy (level {$academy_1203}/12)</span><br />
					{else}<span style='color:#0C0;'>{$academy_1205_points}</span> academy points{/if}"  
					style="background:url(styles/theme/gow/gebaeude/1205.jpg);">{if $academy_1205 > 0 && $academy_1205 < 20}<span class="lvl">{$academy_1205}</span>{elseif $academy_1205 == 20}<span class="lvl">Max.</span>{/if}</a></td>
					<td class="skils_p">&nbsp;</td>
					<td class="skils_bg{if $academy_1204 >= 5}_a{/if}"><a {if $academy_1204 >= 5} onclick="return Dialog.SkillUp(1207);" {/if} class="skils tooltip" data-tooltip-content="<span style='color:#09f;font-weight:bold;'>packing of cargo</span><br />level {$academy_1207_next}:<br /><span style='color:#0C0;'>+{$academy_1207_bonus}%</span> spaciousness to fleet<br /><br />required:<br />
					{if $academy_1204 < 5}<span style='color:#F00;'>cosmo depot (level {$academy_1204}/5)</span><br />
					{else}<span style='color:#0C0;'>{$academy_1207_points}</span> academy points{/if}"  
					style="background:url(styles/theme/gow/gebaeude/1207.jpg);">{if $academy_1207 > 0 && $academy_1207 < 50}<span class="lvl">{$academy_1207}</span>{elseif $academy_1207 == 50}<span class="lvl">Max.</span>{/if}</a></td>
                    <td class="skils_p">&nbsp;</td>
                    <td class="skils_p">&nbsp;</td>                  
                </tr>
    <tr><!--perehoh 4-5 -->
                	<td class="skils_p">&nbsp;</td>
                 	<td class="skils_p">&nbsp;</td>                    
                    <td class="skils_p">&nbsp;</td>
               		<td class="skils_p">&nbsp;</td>                    
                    <td class="skils_p">&nbsp;</td>
                    <td class="skils_p">&nbsp;</td>
                	<td class="skils_p">&nbsp;</td>
                </tr>
                <tr><!--5 lvl-->
                	<td class="skils_p">&nbsp;</td>
                	<td class="skils_bg{if $academy_1205 >= 3}_a{/if}"><a {if $academy_1205 >= 3} onclick="return Dialog.SkillUp(1206);" {/if}  class="skils tooltip" data-tooltip-content="<span style='color:#09f;font-weight:bold;'>expansion of the empire</span><br />level {$academy_1206_next}:<br /><span style='color:#0C0;'>+{$academy_1206_bonus}</span> to the maximum number of planets in the empire<br /><br />required:<br />
					{if $academy_1205 < 3}<span style='color:#F00;'>academy of sciences (level {$academy_1205}/3)</span><br />
					{else}<span style='color:#0C0;'>{$academy_1206_points}</span> academy points{/if}"
					style="background:url(styles/theme/gow/gebaeude/1206.jpg);">{if $academy_1206 > 0 && $academy_1206 < 20}<span class="lvl">{$academy_1206}</span>{elseif $academy_1206 == 20}<span class="lvl">Max.</span>{/if}</a></td>
                	<td class="skils_p">&nbsp;</td>
                    <td class="skils_p">&nbsp;</td>
                    <td class="skils_p">&nbsp;</td>                    
                    <td class="skils_p">&nbsp;</td>   
                    <td class="skils_p">&nbsp;</td> 
                    <td class="skils_p">&nbsp;</td>
                	<td class="skils_p">&nbsp;</td>            
                </tr>
</table>                    <div class="clear"></div>               
                </div> <!--/ach_content-->
                </div>   
                <div style="padding-top:7px;"></div>
                <div class="clear"></div>                               
	 		</div><!--/ach_content_box-->
            <div id="skils3" class="ach_content_box"  style="display:none;">
            	<div style="float:left; width:100%;">                             
                <div class="ach_content" style="padding-top:7px;">
                	<span class="tooltip academy_reset_tree" data-tooltip-content="To reset the branches Academy requires 5.000 АМ">&dArr;</span>
<div class="clear"></div>
<!-------------------------------VETKAA 3---------------------------------------------------->
<table class="skils">
    <tr><!--1 lvl-->
        <td rowspan="2" colspan="2" class="skils_bg_bl_vniz2"></td>
        <td class="skils_bg_bl_vniz1"></td>
        <td class="skils_bg_a"><a onclick="return Dialog.SkillUp(1301);" class="skils tooltip" data-tooltip-content="<span style='color:#09f;font-weight:bold;'>defensive strategy</span><br />level {$academy_1301_next}:<br /><span style='color:#0C0;'>+{$academy_1301_bonus}%</span> to the shields and armor<br /><br />required:<br /><span style='color:#0C0;'>{$academy_1301_points}</span> academy points"  style="background:url(styles/theme/gow/gebaeude/1301.jpg);">{if $academy_1301 > 0 && $academy_1301 < 200}<span class="lvl">{$academy_1301}</span>{elseif $academy_1301 == 200}<span class="lvl">Max.</span>{/if}</a></td>           
        <td class="skils_bg_br_vniz1"></td>
        <td rowspan="2" colspan="2" class="skils_bg_br_vniz2"></td>
        <td class="skils_p">&nbsp;</td>
        <td class="skils_p">&nbsp;</td>
    </tr>
    <tr><!--perehod 1-2 -->
        <td colspan="3" class="skils_bg_t_vniz"></td>
        <td class="skils_p">&nbsp;</td>
        <td class="skils_p">&nbsp;</td>
    </tr>
    <tr><!--2 lvl-->
        <td class="skils_bg{if $academy_1301 >= 15}_a{/if}"><a {if $academy_1301 >= 15} onclick="return Dialog.SkillUp(1312);" {/if} class="skils tooltip" data-tooltip-content="<span style='color:#09f;font-weight:bold;'>Restoring light shields</span><br /> Level {$academy_1312_next}:<br /><span style='color:#0C0;'>+<span id='ab1'>{$academy_1312_bonus}</span>&#37</span> to the restoration of the round<br /><br />Required:<br />
		 {if $academy_1301 < 15}<span style='color:#F00;'>defensive strategy (level {$academy_1312}/15)</span><br />
		{else}<span style='color:#0C0;'>{$academy_1312_points}</span> academy points{/if}"  style="background:url(styles/theme/gow/gebaeude/1312.jpg);">{if $academy_1312 > 0 && $academy_1312 < 40}<span class="lvl">{$academy_1312}</span>{elseif $academy_1312 == 40}<span class="lvl">Max.</span>{/if}</a></td>

        <td class="skils_p">&nbsp;</td>
        
		 <td class="skils_bg{if $academy_1301 >= 8}_a{/if}"><a {if $academy_1301 >= 8} onclick="return Dialog.SkillUp(1304);" {/if} class="skils tooltip" data-tooltip-content="<span style='color:#09f;font-weight:bold;'>mechanics</span><br />level {$academy_1304_next}:<br /><span style='color:#0C0;'>+{$academy_1304_bonus}%</span> to restore defense<br /><br />required:<br />
	    {if $academy_1301 < 8}<span style='color:#F00;'>defensive strategy (level {$academy_1301}/8)</span><br />
		{else}<span style='color:#0C0;'>{$academy_1304_points}</span> academy points{/if}"  style="background:url(styles/theme/gow/gebaeude/1304.jpg);">{if $academy_1304 > 0 && $academy_1304 < 40}<span class="lvl">{$academy_1304}</span>{elseif $academy_1304 == 40}<span class="lvl">Max.</span>{/if}</a></td>

		
        <td class="skils_p">&nbsp;</td>
        <td class="skils_bg{if $academy_1304 >= 10}_a{/if}"><a {if $academy_1304 >= 10} onclick="return Dialog.SkillUp(1310);" {/if}  class="skils tooltip" data-tooltip-content="<span style='color:#09f;font-weight:bold;'>standardization (defense)</span><br />level {$academy_1310_next}:<br /><span style='color:#0C0;'>-{$academy_1310_bonus}% </span> to the cost of defense<br /><br />required:<br />
		{if $academy_1304 < 10}<span style='color:#F00;'>mechanics (level {$academy_1304}/10)</span><br />
		{else}<span style='color:#0C0;'>{$academy_1310_points}</span> academy points{/if}"  	
		style="background:url(styles/theme/gow/gebaeude/1310.jpg);">{if $academy_1310 > 0 && $academy_1310 < 70}<span class="lvl">{$academy_1310}</span>{elseif $academy_1310 == 70}<span class="lvl">Max.</span>{/if}</a></td>
		
		
        <td class="skils_p">&nbsp;</td>
        <td class="skils_bg{if $academy_1301 >= 10}_a{/if}"><a {if $academy_1301 >= 10}onclick="return Dialog.SkillUp(1302);" {/if} class="skils tooltip" data-tooltip-content="<span style='color:#09f;font-weight:bold;'>defense class A</span><br />level {$academy_1302_next}:<br /><span style='color:#0C0;'>+{$academy_1302_bonus1}%</span> shields and armor<br /><br />required:<br />
		{if $academy_1301 < 10}<span style='color:#F00;'>defensive strategy (level {$academy_1301}/10)</span><br />
		{else}<span style='color:#0C0;'>{$academy_1302_points}</span> academy points{/if}"  					
		style="background:url(styles/theme/gow/gebaeude/1302.jpg);">{if $academy_1302 > 0 && $academy_1302 < 100}<span class="lvl">{$academy_1302}</span>{elseif $academy_1302 == 100}<span class="lvl">Max.</span>{/if}</a></td> 
		
		
        <td class="skils_p">&nbsp;</td>
        <td class="skils_p">&nbsp;</td>
    </tr>
     <tr><!--perehod 2-3 -->      
     	<td class="skils_bg_vniz"></td>      
     	<td class="skils_p">&nbsp;</td>   	
        <td colspan="3" class="skils_bg_t_vniz_l"></td>
        <td class="skils_p">&nbsp;</td>
        <td class="skils_bg_vniz"></td>
        <td class="skils_p">&nbsp;</td>
        <td class="skils_p">&nbsp;</td>
    </tr>
     <tr><!--3 lvl-->
        <td class="skils_bg{if $academy_1312 >= 5}_a{/if}"><a {if $academy_1312 >= 5} onclick="return Dialog.SkillUp(1313);" {/if} class="skils tooltip" data-tooltip-content="<span style='color:#09f;font-weight:bold;'>Rehabilitation of secondary shields</span><br /> Level  {$academy_1313_next}:<br /><span style='color:#0C0;'>+<span id='ab1'>{$academy_1313_bonus}</span>&#37</span> to the restoration of the round<br /><br />Required:<br />
		{if $academy_1312 < 5}<span style='color:#F00;'>Restoring light shields (level {$academy_1312}/5)</span><br />
		{else}<span style='color:#0C0;'>{$academy_1313_points}</span> academy points{/if}"  	
		style="background:url(styles/theme/gow/gebaeude/1313.jpg);">{if $academy_1313 > 0 && $academy_1313 < 50}<span class="lvl">{$academy_1313}</span>{elseif $academy_1313 == 50}<span class="lvl">Max.</span>{/if}</a></td>   
			
		
        <td class="skils_p">&nbsp;</td>
        <td class="skils_bg{if $academy_1304 >= 8}_a{/if}"><a {if $academy_1304 >= 8} onclick="return Dialog.SkillUp(1305);" {/if} class="skils tooltip" data-tooltip-content="<span style='color:#09f;font-weight:bold;'>Shield complex</span><br />level {$academy_1305_next}:<br /><span style='color:#0C0;'>+{$academy_1305_bonus}%</span> shields the defense<br /><br />required:<br />
		{if $academy_1304 < 8}<span style='color:#F00;'>mechanics (level {$academy_1304}/8)</span><br />
		{else}<span style='color:#0C0;'>{$academy_1305_points}</span> academy points{/if}"  	
		style="background:url(styles/theme/gow/gebaeude/1305.jpg);">{if $academy_1305 > 0 && $academy_1305 < 50}<span class="lvl">{$academy_1305}</span>{elseif $academy_1305 == 50}<span class="lvl">Max.</span>{/if}</a></td>   

		

		
        <td class="skils_p">&nbsp;</td>     
		
		<td class="skils_bg{if $academy_1304 >= 8}_a{/if}"><a {if $academy_1304 >= 8} onclick="return Dialog.SkillUp(1306);" {/if} class="skils tooltip" data-tooltip-content="<span style='color:#09f;font-weight:bold;'>defense complex</span><br />level {$academy_1306_next}:<br /><span style='color:#0C0;'>x{$academy_1306_bonus}</span> armor in the defense<br /><br />required:<br />
		{if $academy_1304 < 8}<span style='color:#F00;'>mechanics (level {$academy_1304}/8)</span><br />
		{else}<span style='color:#0C0;'>{$academy_1306_points}</span> academy points{/if}"  					
		style="background:url(styles/theme/gow/gebaeude/1306.jpg);">{if $academy_1306 > 0 && $academy_1306 < 50}<span class="lvl">{$academy_1306}</span>{elseif $academy_1306 == 50}<span class="lvl">Max.</span>{/if}</a></td>
		
		
        <td class="skils_p">&nbsp;</td>                    			
        <td class="skils_bg{if $academy_1302 >= 4}_a{/if}"><a {if $academy_1302 >= 4} onclick="return Dialog.SkillUp(1303);" {/if} class="skils tooltip" data-tooltip-content="<span style='color:#09f;font-weight:bold;'>double shields</span><br /> Level {$academy_1303_next}:<br /><span style='color:#0C0;'>+<span id='ab1'>{$academy_1303_bonus}</span>&#37</span> probability of doubling boards<br /><br />Required:<br />
		{if $academy_1302 < 4}<span style='color:#F00;'>Defense class A (level {$academy_1302}/4)</span><br />
		{else}<span style='color:#0C0;'>{$academy_1303_points}</span> academy points{/if}"  					
		style="background:url(styles/theme/gow/gebaeude/1303.jpg);">{if $academy_1303 > 0 && $academy_1303 < 50}<span class="lvl">{$academy_1303}</span>{elseif $academy_1303 == 50}<span class="lvl">Max.</span>{/if}</a></td>
			
		
        <td colspan="2" rowspan="2" class="skils_bg_r_vniz"></td>
    </tr>
    <tr><!--perehod 3-4 -->
        <td class="skils_bg_vniz"></td>
        <td class="skils_p">&nbsp;</td>
        <td class="skils_bg_vniz"></td>
        <td class="skils_p">&nbsp;</td>                    
        <td class="skils_bg_vniz"></td>
        <td class="skils_p">&nbsp;</td>
        <td class="skils_bg_vniz"></td>
    </tr>
    <tr><!--4 lvl-->
	
        <td class="skils_bg{if $academy_1313 >= 3}_a{/if}"><a {if $academy_1313 >= 3} onclick="return Dialog.SkillUp(1314);" {/if} class="skils tooltip" data-tooltip-content="<span style='color:#09f;font-weight:bold;'>Recovery of heavy shields</span><br /> Level {$academy_1314_next}:<br /><span style='color:#0C0;'>+<span id='ab1'>{$academy_1314_bonus}</span>&#37</span> to the restoration of the round<br /><br />Required:<br />
		{if $academy_1313 < 3}<span style='color:#F00;'>Rehabilitation of secondary shields (level {$academy_1313}/3)</span><br />
		{else}<span style='color:#0C0;'>{$academy_1314_points}</span> academy points{/if}"  
		style="background:url(styles/theme/gow/gebaeude/1314.jpg);">{if $academy_1314 > 0 && $academy_1314 < 70}<span class="lvl">{$academy_1314}</span>{elseif $academy_1314 == 70}<span class="lvl">Max.</span>{/if}</a></td>
				
		
        <td class="skils_p">&nbsp;</td>
        <td class="skils_bg{if $academy_1305 >= 3}_a{/if}"><a {if $academy_1305 >= 3} onclick="return Dialog.SkillUp(1307);" {/if} class="skils tooltip" data-tooltip-content="<span style='color:#09f;font-weight:bold;'>seal shield dome</span><br />level {$academy_1307_next}:<br /><span style='color:#0C0;'>{$academy_1307_bonus}%</span> interplanetary missiles will be destroyed<br /><br />required:<br />
		{if $academy_1305 < 3}<span style='color:#F00;'>shield complex (level {$academy_1305}/3)</span><br />
		{else}<span style='color:#0C0;'>{$academy_1307_points}</span> academy points{/if}"  
		style="background:url(styles/theme/gow/gebaeude/1307.jpg);">{if $academy_1307 > 0 && $academy_1307 < 70}<span class="lvl">{$academy_1307}</span>{elseif $academy_1307 == 70}<span class="lvl">Max.</span>{/if}</a></td>
		
		
        <td class="skils_p">&nbsp;</td>
        <td class="skils_bg{if $academy_1306 >= 20}_a{/if}"><a {if $academy_1306 >= 20} onclick="return Dialog.SkillUp(1309);" {/if} class="skils tooltip" data-tooltip-content="<span style='color:#09f;font-weight:bold;'>maximum defense</span><br />level {$academy_1309_next}:<br /><span style='color:#0C0;'>+{$academy_1309_bonus}</span> to the maximum number of orbital bases<br /><br />required:<br />
		{if $academy_1306 < 20}<span style='color:#F00;'>defense complex (level {$academy_1306}/20)</span><br />
		{else}<span style='color:#0C0;'>{$academy_1309_points}</span> academy points{/if}"  
		style="background:url(styles/theme/gow/gebaeude/1309.jpg);">{if $academy_1309 > 0 && $academy_1309 <60}<span class="lvl">{$academy_1309}</span>{elseif $academy_1309 == 60}<span class="lvl">Max.</span>{/if}</a></td>  
		
		
        <td class="skils_p">&nbsp;</td>
        <td class="skils_bg{if $academy_1303 >= 7}_a{/if}"><a {if $academy_1303 >= 7} onclick="return Dialog.SkillUp(1308);" {/if} class="skils tooltip" data-tooltip-content="<span style='color:#09f;font-weight:bold;'>Thick armor</span><br /> Level {$academy_1308_next}:<br /><span style='color:#0C0;'>-<span id='ab1'>{$academy_1308_bonus}</span>&#37</span> destruction of skorostrela<br /><br />Required:<br />
		{if $academy_1303 < 7}<span style='color:#F00;'>double shields (level {$academy_1307}/7)</span><br />
		{else}<span style='color:#0C0;'>{$academy_1308_points}</span> academy points{/if}"  
		style="background:url(styles/theme/gow/gebaeude/1308.jpg);">{if $academy_1308 > 0 && $academy_1308 <60}<span class="lvl">{$academy_1308}</span>{elseif $academy_1308 == 60}<span class="lvl">Max.</span>{/if}</a></td>  
			
		
        <td class="skils_p">&nbsp;</td>  
        <td class="skils_bg{if $academy_1303 >= 5}_a{/if}"><a {if $academy_1303 >= 5} onclick="return Dialog.SkillUp(1311);" {/if} class="skils tooltip" data-tooltip-content="<span style='color:#09f;font-weight:bold;'>Seal double shields</span><br /> Level {$academy_1311_next}:<br /><span style='color:#0C0;'>+<span id='ab1'>{$academy_1311_bonus}</span>&#37</span> to double the density boards<br /><br />Required:<br />
		{if $academy_1303 < 5}<span style='color:#F00;'>double shields (level {$academy_1307}/5)</span><br />
		{else}<span style='color:#0C0;'>{$academy_1311_points}</span> academy points{/if}"  
		style="background:url(styles/theme/gow/gebaeude/1311.jpg);">{if $academy_1311 > 0 && $academy_1311 <60}<span class="lvl">{$academy_1311}</span>{elseif $academy_1311 == 60}<span class="lvl">Max.</span>{/if}</a></td>  
		
		</tr>
</table>                    <div class="clear"></div>               
                </div> <!--/ach_content-->
                </div>   
                <div style="padding-top:7px;"></div>
                <div class="clear"></div>                               
	 		</div><!--/ach_content_box-->
            
           <div class="ach_content_box" id="back_skils" style="display:none;">
            	<div style="float:left; width:100%;">                             
                <div class="ach_content" style="padding:0;">
                        <table style="width:100%; max-width:100%;">
                            <tr>
                                <td>
								{if $antimatte < 10000}
								<a  style="color:#444;" class="tooltip_sticky" data-tooltip-content="<a href='?page=donatebis'>top up</a>">Reset</a>
								{else}
								<a href="game.php?page=academy&mode=BackUp&bac=100" style="cursor:pointer;"  class="tooltip" data-tooltip-content="<span style='color:#F00; text-decoration:blink;'>Warning! 0% will be lost ({$total_am}) points Academy</span>" >Reset</a>
								{/if}
								
								</td>
                                <td style="color:#FC0;">100% ({$total_am})</td>
                                <td style="text-align:left; color:#FC0;">10.000 Antimateria</td>
                            </tr>
                            <tr>
                                <td>
								{if $darkmatter < 200000}
								<a  style="color:#444;"  class="tooltip_sticky" data-tooltip-content="<a href='?page=trader&mode=tradeam&resource=922'>top up</a>">Reset</a>
								{else}
								<a href="game.php?page=academy&mode=BackUp&bac=75" style="cursor:pointer;"  class="tooltip" data-tooltip-content="<span style='color:#F00; text-decoration:blink;'>Warning! 25% will be lost ({$total_dm}) points Academy</span>" >Reset</a>
								{/if}
								
								</td>
                                <td style="color:#6CF;">75% ({$total_dm})</td>
                                <td style="text-align:left; color:#6CF;">200.000 dark Matter</td>
                            </tr>
                            <tr>
                                <td><a href="game.php?page=academy&mode=BackUp" style="cursor:pointer;" class="tooltip" data-tooltip-content="<span style='color:#F00; text-decoration:blink;'>Warning! 50% will be lost ({$total_free}) points Academy</span>" >Reset</a></td>
                                <td style="color:#999;">50% ({$total_free})</td>
                                <td style="text-align:left; color:#999;">free</td>
                                
                            </tr>
                        </table>
                    <div class="clear"></div>               
                </div> <!--/ach_content-->
                </div>   
                <div style="padding-top:7px;"></div>
                <div class="clear"></div>                               
	 		</div><!--/ach_content_box-->
            
            <div class="ach_content_box" id="donpoint" style="display:none;">
            	<div style="float:left; width:100%;">                             
                <div class="ach_content" style="padding:0;">
                        <form action="game.php?page=academy&mode=donation" method="POST">
						<input type="hidden" name="cost_filds_send" value="" id="cost_filds_send">
                         <table style="width:100%; max-width:100%;">
                            <tr>
                                <td>Antimatter:</td>
                                <td><span style="color:#0F0; font-weight:bold;" id="cost_filds">0</span></td>
                            </tr>
                            <tr>                
                                <td>Buy points:</td>
                                <td><input id="filds" name="pointes" maxlength="5" width="50px" onkeyup="Fild();" value="0" type="text"></td>
                            </tr>
                            <tr>    
                               <td class="gray_stripe" colspan="2"><input class="academy_info_btn" value="Buy" type="submit"></td>
                            </tr>
                        </table>
                        </form>
                    <div class="clear"></div>               
                </div> <!--/ach_content-->
                </div>   
                <div style="padding-top:7px;"></div>
                <div class="clear"></div>                               
	 		</div><!--/ach_content_box-->
            
        </div><!--/ach_main_content-->
        
    </div><!--/ach_main_block-->
</div><!--/achivment-->  
<script type="text/javascript">
	var academy_points_cost 	= {$academy_cost};
</script>
</div>
</div>
            <div class="clear"></div>            
        </div>
{/block}