function Fild()
{
	var Count	= $('#filds').val();
	
	if(isNaN(Count) || Count < 0 ) {
		$('#filds').val(0);
		Count = 0;
	}
	var cost 	= 0;
	
	for(var i = 0; i < Count; i++ )
	{		
		cost 	= Number(Count) * academy_points_cost;
	}
		
	$('#cost_filds').text(NumberGetHumanReadable(cost));
	$('#cost_filds_send').val(cost);
	cost	= 0; step 	= 0;	cost_i	= 0;
}

function ResetAcademy(Tree)
{
	$.post("game.php?page=academy", {'mode': 'BackUpTree', 'Info': 1, 'Tree': Tree, 'ajax': 1}, function(pointes) {
		if(confirm(pointes.msg) && pointes.done == 1)
		{
			$.post("game.php?page=academy", {'mode': 'BackUpTree', 'Tree': Tree, 'ajax': 1}, function(data) {
				alert(data.msg);
				window.location = 'game.php?page=academy';
			}, "json");
		}
	}, "json");
}

function ResetAcademyFull(method)
{
	switch(method)
	{
		case 100:
			url = 'game.php?page=academy&mode=BackUp&bac=100';
			msg = lng.reset_full_100;
		break
		case 75:
			url = 'game.php?page=academy&mode=BackUp&bac=75';
			msg = lng.reset_full_75;
		break
		case 50:
			url = 'game.php?page=academy&mode=BackUp';
			msg = lng.reset_full_50;
		break
	}
	
		window.location = url;
}

function openV(IDblock, IDopenV)
{
	if(!$('.ach_menu li.'+ IDblock).hasClass('active'))
	{
        $('.ach_menu li').removeClass('active');	
        $('.ach_menu li.'+ IDblock).addClass('active');
		$('.ach_content_box').hide();
		$('#' + IDblock).show();
		
		if(IDopenV != 'no')
			$.cookie("openV", IDopenV);	
	}
}

function openInfo()
{	
	$('#academy_info_more').hide();
	$('#academy_info_dop_info').show();
}

function calculation()
{
	var Count = Number(Math.max($('#count').val(), ELevel));
	
	$('#ab1').html(ab1 * Count);
	
	if(ab2 > 0)
		$('#ab2').html(ab2 * Count);
	
	var FulCost = 0;
	
	for (var i = ELevel; i < Count; i++) 
	{        	
		FulCost += Math.floor(Icost * Math.pow(factor, i));
	}
	
	$('#cost').html(NumberGetHumanReadable(FulCost));
	$('#cost_send_aca_res').val(Math.round((Number(FulCost))));
	if(FulCost <= point)
		$('#cost').css({'color': '#0C3'})
	else
		$('#cost').css({'color': '#F33'})
}