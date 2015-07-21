{block name="title" prepend}{$LNG.siteTitleLostPassword}{/block}
{block name="content"}

<h1 class="top_title"></h1>

<form action="index.php?page=lostPassword" method="post" data-action="index.php?page=lostPassword" >
	<input type="hidden" value="send" name="mode">

	<div class="blocks">
		<span class="lable">{$LNG.passwordMail}:</span>
		<input type="text" name="mail" id="mail">
		<div id="regemailcption" class="reg_caption"> Enter your e-mail to send the secret code. The secret code will only be available for 24 hours. </div>
	</div>

	<div class="clear"></div>

	<span class="lable"></span>
	<input class="button" type="submit" value="send a code" name="submit1">

	<div class="clear"></div>

</form>
{/block}