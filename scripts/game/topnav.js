function resourceTicker(e,t){if(typeof t!=="undefined"&&t===true)window.setInterval(function(){resourceTicker(e)},1e3);var n=document.getElementById(e.valueElem);if(n.className.match(/res_current_max/)!==null)return false;var r=Math.max(0,Math.round(e.available+e.production/3600*(serverTime.getTime()-startTime)/1e3));if(r<e.limit[1]){if(r>=e.limit[1])n.className=n.className+" res_current_max";else if(r>=e.limit[1]*.9)n.className=n.className+" res_current_warn";if(viewShortlyNumber){n.innerHTML=shortly_number(r);n.name=NumberGetHumanReadable(r)}else{n.innerHTML=NumberGetHumanReadable(r);$("#res_block_"+e.valueName+" .pricent").html(String(Math.round(Number(r)/Number(e.limit[1])*100)));$("#res_block_"+e.valueName+" .stock_percentage").width(String(Math.round(Number(r)/Number(e.limit[1])*100))+"%")}}else{$("#res_block_"+e.valueName+" .pricent").html(100);$("#res_block_"+e.valueName+" .stock_percentage").width("100%")}}function getRessource(e){return parseInt($("#current_"+e).attr("name").replace(/\./g,""))}if(queryString!="page=galaxy"){function MovimentoPlanet(e){e=e?e:evento?evento:null;if(e.keyCode==37){document.location="?"+queryString+"&cp="+back}if(e.keyCode==39){document.location="?"+queryString+"&cp="+next}}document.onkeydown=MovimentoPlanet}

$(function() {
	var div			= $('#planetSelectorWrapper');
	var Selector	= div.children('select');
	var Val			= Selector.val();
	var Option		= Selector.find('option:selected');
	Selector.before(function() {
		if(Option.prev().length == 1) {
			div.css('width', function(index, value) {
				return (parseFloat(value) + 30)+"px";
			});
			Selector.css('margin', '37px 5px');
			return '<input type="button" style="margin:37px 0 0 5px;float:left;" value="<-" onclick="$(\'#planetSelector > :selected\').prev().attr(\'selected\', \'selected\');$(\'#planetSelector\').trigger(\'change\')">';
		}
	});
	Selector.after(function() {
		if(Option.next().length == 1) {
			div.css('width', function(index, value) {
				return (parseFloat(value) + 30)+"px";
			});
			Selector.css('margin', '37px 5px');
			return '<input type="button"  value="->" onclick="$(\'#planetSelector > :selected\').next().attr(\'selected\', \'selected\');$(\'#planetSelector\').trigger(\'change\')">';
		}
	});
})();
