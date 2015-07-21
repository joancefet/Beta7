{block name="title" prepend}{$LNG.debris_title}{/block}
{block name="content"}
<div id="page">
	<div id="content">
<div id="ally_content" class="conteiner">
    <div class="gray_stripe">
      	{$LNG.debris_title}        
 <a href="#" onclick="return Dialog.minimanualinfo(13)" class="interrogation manual">?</a>   		
    </div>
	
<table class="tablesorter ally_ranks">

			<tr>
				<td colspan="6"><a href="?page=findDebris&y=1">{$LNG.debris_show}({$LNG.debris_range} : {$range})</a></td>
			</tr>
				{$debris}
		
		
		
		
    </table>
</div>





<script type="text/javascript">
		MaxFleetSetting = {$user_maxfleetsettings};
	</script>
<script>

function doit(missionID, planetID) {
	$.getJSON("game.php?page=fleetAjax&ajax=1&mission="+missionID+"&planetID="+planetID, function(data)
	{
		$('#slots').text(data.slots);
		if(typeof data.ships !== "undefined")
		{
			$.each(data.ships, function(elementID, value) {
				$('#elementID'+elementID).text(number_format(value));
			});
		}
		
		var statustable	= $('#fleetstatusrow');
		var messages	= statustable.find("~tr");
		if(messages.length == MaxFleetSetting) {
			messages.filter(':last').remove();
		}
		var element		= $('<td />').attr('colspan', 8).attr('class', data.code == 600 ? "success" : "error").text(data.mess).wrap('<tr />').parent();
		statustable.removeAttr('style').after(element);
	});
}
</script>
{/block}