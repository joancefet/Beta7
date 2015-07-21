{block name="title" prepend}{$LNG.lm_options}{/block}
{block name="content"}
<div id="page">
<div id="content">
<div id="ally_content" class="conteiner">
	<form action="game.php?page=settings&amp;mode=send" method="post">
	<div class="gray_stripe">
    	Holiday mode is enabled.
    </div> 
    <div class="ally_contents" style="padding-bottom:5px;">	
    	<span>{$LNG.op_vacation_mode_active_message} {$vacationUntil}</span>
        <div class="clear" style="margin-bottom:10px;"></div>
		<input style="float:left; margin:5px 6px 0 0;" id="vacationID" name="vacation" type="checkbox" value="1" {if !$canVacationDisbaled}disabled{/if}>
		<label for="vacationID" class="left_label" style="width:auto;">{$LNG.op_end_vacation_mode}</label>		
        <div class="clear"></div> 	 
		<input style="float:left; margin:5px 6px 0 0;" id="deleteID" name="delete" type="checkbox" value="1" {if $delete > 0}checked="checked"{/if}>
		<label for="deleteID" class="left_label" style="width:auto;" title="{$LNG.op_dlte_account_descrip}">{$LNG.op_dlte_account}</label>		
        <div class="clear"></div> 
    </div>
    <div class="gray_stripe">
    	<div class="clear"></div> 
        <input value="{$LNG.op_save_changes}" type="submit" style="width:200px; margin-top:2px;">
    </div>
	</form>
</div>
</div>
</div>
            <div class="clear"></div>            
        </div>
{/block}