{block name="title" prepend}Manual Information{/block}
{block name="content"}
<div id="tooltip" class="tip"></div>
    	<div id="body"><div id="popup_conteirer">
	<div id="content">
<div id="ally_content" class="conteiner academy_info">
	<div class="gray_stripe">
    	<span class="academy_info_text_h">{$name}</span> (Level {$academyLevel})
    </div>
    <p class="academy_info_text">
    	<img class="academy_info_img" title="" alt="" src="styles/theme/gow/gebaeude/{$info}.jpg">
        <span style="color:#0C0;">{$posneg}<span id="ab1">0</span>%</span> {$bonus} 
            </p>
    <div class="clear"></div>
    <div class="gray_stripe academy_info_form">
        <div class="academy_info_form_padding">
        	<form action="game.php?page=academy" target="_parent" method="post">
                <input name="mode" value="up" type="hidden">
                <input name="skill" value="{$info}" type="hidden">
				<input type="hidden" name="price" id="cost_send_aca_res" value="" />
                <input class="academy_info_lvlup" onchange="calculation();" id="count" name="count" min="{$academyLevel}" value="{$academyLevel}" type="number">
                <label>Level</label>
                <input class="academy_info_btn" name="button" value="Study" type="submit">
                <label class="academy_info_cost">Cost <span id="cost" style="color:#0C3;">1</span> points</label>
        	</form>
        </div>
    </div>
</div>
<script type="text/javascript">
	var ELevel 	= {$academyLevel};
	var ab1 	= {$ab1};
	var ab2 	= {$ab2};
	var Icost 	= {$icost};	
	var point 	= {$academypoints};
	var factor 	= {$factor};
</script>
</div>
</div>
            <div class="clear"></div>            
        </div>

{/block}