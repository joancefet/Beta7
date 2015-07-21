{block name="title" prepend}{$LNG.lm_options}{/block}
{block name="content"}
<div id="page">
<div id="content">
<div id="ally_content" class="conteiner">
	<form action="game.php?page=settings" method="post">
<input type="hidden" name="mode" value="send">


		<div class="gray_stripe">
    	Player details
    </div>
	<table class="tablesorter ally_ranks" style="padding-bottom:5px;">
         <tbody>
		 {if $userAuthlevel > 0}
		 <tr>
			<input style="float:left; margin:5px 6px 0 0;" id="adminprotection" name="adminprotection" type="checkbox" value="1" {if $adminProtection > 0}checked="checked"{/if}">
			{$LNG.op_admin_planets_protection}	
		</tr>
		 {/if}
		 
		 <tr>
			<td>{$LNG.op_username}</td>
			<td>{$username}	</td>
		</tr>
        <tr>
			<td>{$LNG.op_email_adress}</td>
			<td>{$permaEmail}	</td>
		</tr>
		 <tr>
			<td>{$LNG.op_old_pass}</td>
			<td><input type="password"  style="padding-bottom:5px; margin-left:40px;" class="big_seting_text" min="0"  maxlength="20" name="password" maxlength="10" >	</td>
		</tr>
		 <tr>
			<td>{$LNG.op_new_pass}</td>
			<td><input type="password"  style="padding-bottom:5px; margin-left:40px;" class="big_seting_text" min="0"  maxlength="20" name="newpassword" maxlength="10" >	</td>
		</tr>
    </tbody></table>

    <div class="gray_stripe">
    	{$LNG.op_general_settings}
    </div>
    <div class="ally_contents" style="padding-bottom:5px;">
		<label class="left_label">{$LNG.op_timezone}</label>
		{html_options name=timezone options=$Selectors.timezones class="big_seting_text option" selected=$timezone}

		<div class="clear"></div> 
		<label class="left_label">{$LNG.op_sort_planets_by}</label>
        {html_options name=planetSort options=$Selectors.Sort class="big_seting_text option" selected=$planetSort}

		
		{if count($Selectors.lang) > 1}
        <div class="clear"></div> 
		<label class="left_label">{$LNG.op_lang}</label>
       {html_options name=language options=$Selectors.lang selected=$userLang class="big_seting_text option"}
		{/if}
		 <div class="clear"></div> 
		<label class="left_label">{$LNG.op_sort_kind}</label>
        {html_options name=planetOrder options=$Selectors.SortUpDown class="big_seting_text option" selected=$planetOrder}
		
        <div class="clear"></div> 
        <input style="float:left; margin:5px 6px 0 0;" id="queueMessagesID" name="queueMessages" type="checkbox" value="1" {if $queueMessages == 1}checked="checked"{/if}">
		<label for="queueMessagesID" class="left_label" style="width:auto;">{$LNG.op_active_build_messages}</label>		
        <div class="clear"></div> 
		
	
    </div>
    <div class="gray_stripe">
    	Layout settings
    </div>
    <div class="ally_contents" style="padding-bottom:5px;">
    	<input style="float:left; margin:5px 6px 0 0;" id="ajaxID" name="op_ajax" type="checkbox" value="1" checked="checked">
		<label for="ajaxID" class="left_label" style="width:auto;">use AJAX</label>		
        <div class="clear"></div> 
        <input style="float:left; margin:5px 6px 0 0;" id="settings_gift" name="settings_gift" type="checkbox" value="1" checked="checked">
		<label for="settings_gift" class="left_label" style="width:auto;">active design</label>		
        <div class="clear"></div> 
        <label class="left_label">Sound of sirens</label>
        <select name="sirena" onchange="SoundTest(this.options[this.selectedIndex].value)" class="big_seting_text"> 
            <option  {if $alarm_volumes == 0}selected{/if} value="0">off</option>
            <option  {if $alarm_volumes == 1}selected{/if} value="1">1</option>
            <option  {if $alarm_volumes == 2}selected{/if} value="2">2</option>
            <option  {if $alarm_volumes == 3}selected{/if} value="3">3</option>
            <option  {if $alarm_volumes == 4}selected{/if}  value="4">4</option>
            <option  {if $alarm_volumes == 5}selected{/if} value="5">5</option>
            <option  {if $alarm_volumes == 6}selected{/if} value="6">6</option>
            <option  {if $alarm_volumes == 7}selected{/if} value="7">7</option>
            <option  {if $alarm_volumes == 8}selected{/if} value="8">8</option>
            <option  {if $alarm_volumes == 9}selected{/if} value="9">9</option>
            <option  {if $alarm_volumes == 10}selected{/if} value="10">10</option>
        </select>
		<div class="clear"></div>         
    </div>
    <div class="gray_stripe">
    	Galaxy settings
    </div>
    <div class="ally_contents" style="padding-bottom:5px;">
    	<label class="left_label" title="{$LNG.op_spy_probes_number_descrip}">{$LNG.op_spy_probes_number}</label>
<input type="number"  class="big_seting_text" min="0"  maxlength="5" name="spycount" size="{$spycount|count_characters + 3}" value="{$spycount}" type="int">		
        <div class="clear"></div>  
        <label class="left_label">{$LNG.op_max_fleets_messages}</label>	
		<input name="fleetactions" type="number" class="big_seting_text" min="0" maxlength="2" size="{$fleetActions|count_characters + 2}" value="{$fleetActions}" type="int">
        <div class="clear"></div>  
    </div>
	
	 <div class="gray_stripe">
    	Social Settings
    </div>
    <div class="ally_contents" style="padding-bottom:5px;">
    	<label class="left_label" title="Facebook Link">www.facebook.com/username</label>
<input class="big_seting_text" min="0"  maxlength="25" name="fblink" size="25" value="{$fblink}" type="text">		
        <div class="clear"></div>  
        <div class="clear"></div>  
    </div>
	
	
    <div class="gray_stripe">
    	{$LNG.op_shortcut}
    </div>
    <div class="ally_contents" style="padding-bottom:5px;">
		<input style="float:left; margin:5px 6px 0 0;" id="galaxySpyID" name="galaxySpy" type="checkbox" value="1" {if $galaxySpy == 1}checked="checked"{/if}>
		<label for="galaxySpyID" class="left_label" style="width:auto;"><img src="styles/images/iconav/over.png" alt=""> {$LNG.op_spy}</label>	
        <div class="clear"></div> 
		<input style="float:left; margin:5px 6px 0 0;" id="galaxyMessageID" name="galaxyMessage" type="checkbox" value="1" {if $galaxyMessage == 1}checked="checked"{/if}>
		<label for="galaxyMessageID" class="left_label" style="width:auto;"><img src="styles/images/iconav/mesages.png" alt=""> {$LNG.op_write_message}</label>
        <div class="clear"></div> 
		<input style="float:left; margin:5px 6px 0 0;" id="galaxyBuddyListID" name="galaxyBuddyList" type="checkbox" value="1" {if $galaxyBuddyList == 1}checked="checked"{/if}>
		<label for="galaxyBuddyListID" class="left_label" style="width:auto;"><img src="styles/images/iconav/friend.png" alt=""> {$LNG.op_add_to_buddy_list}</label>
        <div class="clear"></div> 
		<input style="float:left; margin:5px 6px 0 0;" id="galaxyMissleID" name="galaxyMissle" type="checkbox" value="1" {if $galaxyMissle == 1}checked="checked"{/if}>
		<label for="galaxyMissleID" class="left_label" style="width:auto;"><img src="styles/images/iconav/write.png" alt=""> {$LNG.op_missile_attack}</label>
        <div class="clear"></div>         
    </div>
    <div class="gray_stripe">
    	{$LNG.op_vacation_delete_mode}
    </div>
    <div class="ally_contents" style="padding-bottom:5px;">
<input style="float:left; margin:5px 6px 0 0;" id="vacationID" name="vacation" type="checkbox" value="1">
		<label for="vacationID" class="left_label" style="width:auto;" title="{$LNG.op_activate_vacation_mode_descrip}">{$LNG.op_activate_vacation_mode}</label>	
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