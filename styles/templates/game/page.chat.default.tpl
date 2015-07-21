{block name="title" prepend}{$LNG.lm_chat}{/block}
{block name="content"}
<div id="page">
	<div id="content">


	<div id="chat" class="conteiner" style="overflow:hidden;"><br><br>
<iframe src="./chat/index.php?action={$smarty.get.action|default:''|escape:'html'}" style="border: 0px;width:100%;height:700px;margin-top:-70px;" ALLOWTRANSPARENCY="true"></iframe>

</div></div>
{/block}