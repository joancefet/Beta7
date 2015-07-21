{block name="title" prepend}{$LNG.write_message}{/block}
{block name="content"}

<div id="ally_content" class="conteiner" style="width:auto">
    <div class="gray_stripe">
    	{$LNG.WAM} <span style="float:right; color:#8e9394;">(<span id="cntChars">0</span>&nbsp;/&nbsp;5.000&nbsp;symbols)</span>
    </div>
    <form name="message" id="message" action="">
        <table class="ally_ranks gray_stripe_th td_border_bottom">
            <tbody><tr>
                <td>{$LNG.To} <input name="to" size="40" value="{$OwnerRecord.username} [{$OwnerRecord.galaxy}:{$OwnerRecord.system}:{$OwnerRecord.planet}]" type="text"></td>
                <td><input name="subject" id="subject" size="40" maxlength="40" placeholder="topic" value="{if !empty($subject)}{$subject}{else}{$LNG.mg_no_subject}{/if}" type="text"></td>
            </tr>
            <tr>
                <td colspan="2">
                	<textarea placeholder="message" name="text" id="text" cols="40" rows="8" onkeyup="$('#cntChars').text($(this).val().length); keyUp(event);" onkeydown="keyDown(event)"></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:center;">
                	<input id="submit" onclick="check();" name="button" value="{$LNG.Send}" type="button"> 
               	 	<span style="float:right; color:#999; line-height:20px;">[ctrl + enter]</span>
            	</td>
            </tr>
        </tbody></table>
    </form>
</div>
{/block}
{block name="script" append}
<script type="text/javascript">
function check(){
	if($('#text').val().length == 0) {
		alert('{$LNG.mg_empty_text}');
		return false;
	} else {
		$('submit').attr('disabled','disabled');
		$.post('game.php?page=messages&mode=send&id={$id}&ajax=1', $('#message').serialize(), function(data) {
			alert(data);
			parent.$.fancybox.close();
			return true;
		}, 'json');
	}
}
</script>
{/block}