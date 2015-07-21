

{block name="title" prepend}{$LNG.lm_overview}{/block}
{block name="content"}
    	<div id="body"><div id="popup_conteirer">
	<div id="content">
<div class="ui-tabs ui-widget ui-widget-content ui-corner-all" id="tabs">
	<ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">
		<li class="ui-state-default ui-corner-top"><a href="#tabs-1">Rename</a></li>
		<li class="ui-state-default ui-corner-top ui-tabs-selected ui-state-active"><a href="#tabs-2">Delete the planet.</a></li>
	</ul>
    <div style="padding:9px;">
        <div class="ui-tabs-panel ui-widget-content ui-corner-bottom" id="tabs-1">
            <label for="name">The new name: </label>
            <input class="left" name="name" id="name" size="12" maxlength="10" autocomplete="off" type="text">
           	<label onclick="GenerateName()" style="color:#999; margin-left:3px;">Generate</label>
            <input style="width:375px; margin-top:6px;" onclick="checkrename()" value="Send" type="button">
        </div>
        <div class="ui-tabs-panel ui-widget-content ui-corner-bottom" id="tabs-2">
        	<span style="color:#999;"><h3 style="margin:0;">Safety system</h3>{$ov_security_confirm}</span><br><br>
            <label for="password">Password: </label><input class="left" name="password" id="password" size="25" maxlength="20" autocomplete="off" type="password">
            <input onclick="checkcancel()" value="Send" type="button">
        </div>
    </div>
</div>
</div>
</div>
{/block}