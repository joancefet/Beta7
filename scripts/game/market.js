function LEFTSIDE(line) /*Ð›ÐµÐ²Ð°Ñ Ð¼ÐµÐ½ÑŽÑˆÐºÐ°*/
{
	jQuery.post("./market.php", {'left_line': line, 'ajax': 1}, 
	function(data)
	{
		var div = document.getElementById('market_left_side');
		var content = document.getElementById('market_content');
		if(data.LEFT.HTML !== "undefined")
		{
			div.innerHTML 		= data.LEFT.HTML;
			content.innerHTML	= '';
		}
	}, "json");
}

function SEARCHDEUTERIUM() /*ÐŸÐ¾Ð¸ÑÐº Ð´ÐµÐ¹Ñ‚ÐµÑ€Ð¸Ñ*/
{
	jQuery.post("./market.php", {'content_line': 'deuterium', 'max_cost': $('#max_cost').val(), 'min_count': $('#min_count').val(), 'max_count': $('#max_count').val(), 'ajax': 1}, 
	function(data)
	{
		var div = document.getElementById('market_content');
		if(data.CONTENT.HTML !== "undefined")
		{
			div.innerHTML = data.CONTENT.HTML;
		}
	}, "json");
}

function BUYDEUTERIUM(ID, Msg, NoMsg, Cost, Count) /*ÐŸÐ¾ÐºÑƒÐ¿ÐºÐ° Ð´ÐµÐ¹Ñ‚ÐµÑ€Ð¸Ñ*/
{
	var deuterium 	= Number(String($('#current_deuterium').text()).replace(/[.]/g, ''));
	var am 			= Number(String($('#current_am').text()).replace(/[.]/g, ''));
	
	if(am < Cost) // ÐÐµÑ…Ð²Ð°Ñ‚Ð°ÐµÑ‚ ÐÐœ
	{
		alert(NoMsg);
		return (false);
	}
	
	if(confirm(Msg))
	{	
		jQuery.post("./market.php", {'purchase_line': 'deuterium', 'id': ID, 'ajax': 1}, 
		function(data)
		{
			if(data.MSG !== "undefined")
			{
				var div = document.getElementById('market_lost_msg');
				//alert(data.MSG);
				div.innerHTML = '<p>'+data.MSG+'</p>';
				if(!data.ERROR)
				{
					$('#current_am').text(NumberGetHumanReadable(am - Cost));
					$('#current_deuterium').text(NumberGetHumanReadable(Count + deuterium ));
				}
			}
		}, "json");
		
		SEARCHDEUTERIUM();
	}
}

function SEARCHUPGRADE() /*ÐŸÐ¾Ð¸ÑÐº Ð°Ð¿Ð³Ñ€ÐµÐ¹Ð´Ð°*/
{
	$('#gr_search').attr("disabled", "disabled");
	setTimeout("$('#gr_search').removeAttr('disabled')", 3000);
	jQuery.post("./market.php", {'content_line': 'upgrade', 'max_cost': $('#max_cost').val(), 'min_count': $('#min_count').val(), 'name': $('#upgrade_name').val(), 'ajax': 1}, 
	function(data)
	{
		var div = document.getElementById('market_content');
		if(data.CONTENT.HTML !== "undefined")
		{
			div.innerHTML = data.CONTENT.HTML;
		}
	}, "json");
	
}

function BUYUPGRADE(ID, Msg, NoMsg, Cost) /*ÐŸÐ¾ÐºÑƒÐ¿ÐºÐ° Ð´ÐµÐ¹Ñ‚ÐµÑ€Ð¸Ñ*/
{
	var am 			= Number(String($('#current_am').text()).replace(/[.]/g, ''));
	
	if(am < Cost) // ÐÐµÑ…Ð²Ð°Ñ‚Ð°ÐµÑ‚ ÐÐœ
	{
		alert(NoMsg);
		return (false);
	}
	
	if(confirm(Msg))
	{	
		jQuery.post("./market.php", {'purchase_line': 'upgrade', 'id': ID, 'ajax': 1}, 
		function(data)
		{
			if(data.MSG !== "undefined")
			{
				var div = document.getElementById('market_lost_msg');
				//alert(data.MSG);
				div.innerHTML = '<p>'+data.MSG+'</p>'
				if(!data.ERROR)
				{
					$('#current_am').text(NumberGetHumanReadable(am - Cost));
				}
			}
		}, "json");
		
		SEARCHUPGRADE();
	}
}

function SEARCHPLANET() /*ÐŸÐ¾Ð¸ÑÐº Ð¿Ð»Ð°Ð½ÐµÑ‚*/
{
	$('#gr_search').attr("disabled", "disabled");
	setTimeout("$('#gr_search').removeAttr('disabled')", 3000);
	
	var Sort = 0;
	var Luna = 0;
	if($("#sort").attr("checked") == 'checked')
    	Sort = 1;
	if($("#luna").attr("checked") == 'checked')
    	Luna = 1;  
	
	jQuery.post("./market.php", 
	{
		'content_line': 'planet',
		'max_cost': $('#max_cost').val(),
		'ssort': $('#ssort').val(),
		'sort': Sort,
		'fildes': $('#fildes').val(),
		'points_b_p': $('#points_b_p').val(),
		'points_d_p': $('#points_d_p').val(),
		'luna': Luna,
		'points_b_l': $('#points_b_l').val(),
		'points_d_l': $('#points_d_l').val(),
		'collider': $('#collider').val(), 
		'ajax': 1
	}, 
	function(data)
	{
		var div = document.getElementById('market_content');
		if(data.CONTENT.HTML !== "undefined")
		{
			div.innerHTML = data.CONTENT.HTML;
		}
	}, "json");
}