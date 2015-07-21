<div id="planet_menu">
	<div id="planet_menu_header"><a href="javascript:ShowPlanetMenu()" id="planet_menu_link"><font color="red"><img src="styles/images/iconav/chat.png"></a></div>
	<div id="planet_menu_content" style="display:none;">
    <table style="text-align:left;margin:0">
	<div id="chat" class="conteiner" style="overflow:hidden;">
<form name="chat_form">
	
<iframe src="./chat/index.php?action={$smarty.get.action|default:''|escape:'html'}" style="border: 0px;width:100%;height:400px;margin-top:-70px;" ALLOWTRANSPARENCY="true"></iframe>
</div>
	</div>
</div>
