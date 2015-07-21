{block name="title" prepend}{$LNG.senat_title}{/block}
{block name="content"}
<div id="page">

{if $manual_22_step == 0}
		<script type="text/javascript">
	$(function() {
		qtips('#a_officier ', 'Select officers', 'leftMiddle', 'rightMiddle');
setInterval(function() { AJAX() }, 6000)
	});
	</script>
	
	{/if}
	<div id="content">
<div id="ally_content" class="conteiner">
    <div class="gray_stripe" style="border-bottom:0;">
    	{$LNG.senat_title}
        <a href="#" onclick="return Dialog.manualinfo(8)" class="interrogation manual">?</a>
    </div>
    <table class="tablesorter ally_ranks">
    <tbody>
        <tr>
            <td><a id="a_officier" href="game.php?page=officier" {if $manual_22_step == 0}onclick="starttraining13()"{/if}><img width="120px" src="./styles/images/port/off.png"><br>{$LNG.senat_officers}</a></td>
            <td> {$LNG.senat_officers_text}</td>
        </tr>
        <tr>
            <td><a href="game.php?page=governors"><img width="120px" src="./styles/images/port/guber.png"><br>{$LNG.senat_governors}</a></td>
            <td>{$LNG.senat_governors_text}</td>
        </tr>
    </tbody>
    </table>
</div>
</div>
</div>
            <div class="clear"></div>            
        </div>
		{/block}