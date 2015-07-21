function SliderDown(name, type)
{
	$('#'+type+'_'+name).stop(true,false).slideDown(300);
	$('#btn_'+type+'_'+name).css('display','none');
	$('#btn_'+type+'_cls_'+name).css('display','inline-block');
}

function SliderUp(name, type)
{
	$('#'+type+'_'+name).stop(true,false).slideUp(300);
	$('#btn_'+type+'_cls_'+name).css('display','none');
	$('#btn_'+type+'_'+name).css('display','inline-block');
}

function OpenBox(Key){
	var btn = $('#open_btn_'+Key)
	if(btn.text() == '+')
	{
		$('#box_'+Key).stop(true,false).slideDown(300);
		btn.text('-')
	}
	else
	{
		$('#box_'+Key).stop(true,false).slideUp(300);
		btn.text('+')
	}
}

function Totalstardust()
{
	var stardust	= $('#stardust').val();
	if(isNaN(stardust) || stardust < 0 ) {
		$('#stardust').val(0);
	}
	cost 	= Number(stardust) * cost_stardust;
	if(cost < 0)
	$('#cost_stardust').text(NumberGetHumanReadable(0));
	else
	$('#cost_stardust').text(NumberGetHumanReadable(cost));
	$('#cost_stardust_price').val(cost);
	if(cost > atm)
		$('#cost_stardust').css('color','#f30');
	else
		$('#cost_stardust').css('color','#090');
}

function KeyUpBuyBis(name)
{
	prem_days	= $('#days_'+name).val();
	
	if(isNaN(prem_days) || prem_days < 0 ) {
		$('#days_'+name).val(0);
	}
	
	CostPerDay	= 175 * prem_days ;
	Discount	= 1 - Math.min(0.50, (Number(prem_days) * 0.5 / 100)) ;
	FullCost	= Number(prem_days) * (Number(CostPerDay) * Number(Discount));
	if(FullCost < 0)
	$('#cost_'+name).text(NumberGetHumanReadable(Math.round((Number(0)))));
	else
	$('#cost_'+name).text(NumberGetHumanReadable(Math.round((Number(FullCost)))));
	$('#cost_send_'+name).val(Math.round((Number(FullCost))));
	if(FullCost > atm)
		$('#cost_'+name).css('color','#f30');
	else
		$('#cost_'+name).css('color','#090');
}

function KeyUpBuy(name)
{
	count		= $('#count_'+name).val();
	prem_days	= $('#days_'+name).val();
	
	if(isNaN(count) || count < 0 ) {
		$('#count_'+name).val(0);
	}
	if(isNaN(prem_days) || prem_days < 0 ) {
		$('#days_'+name).val(0);
	}
	
	Cost		= pblist.Cost[name];
	Factor		= pblist.Factor[name];
	RangeValue	= pblist.RangeValue[name];
	
	CostPerDay	= Cost * Math.pow(Factor[0], (Math.floor(Number(count)/Factor[1]))-RangeValue[0]) * Number(count);
	Discount	= 1 - Math.min(0.50, (Number(prem_days) * 0.5 / 100)) ;
	FullCost	= Number(prem_days) * (Number(CostPerDay) * Number(Discount));
	
	if(FullCost < 0)
	$('#cost_'+name).text(NumberGetHumanReadable(Math.round((Number(0)))));
	else
	$('#cost_'+name).text(NumberGetHumanReadable(Math.round((Number(FullCost)))));
	$('#cost_send_'+name).val(Math.round((Number(FullCost))));
	if(FullCost > atm)
		$('#cost_'+name).css('color','#f30');
	else
		$('#cost_'+name).css('color','#090');
}

function KeyUpExt(name, count)
{
	prem_days	= $('#days_'+name).val();
	
	Cost		= pblist.Cost[name];
	Factor		= pblist.Factor[name];
	RangeValue	= pblist.RangeValue[name];
	
	CostPerDay	= Cost * Math.pow(Factor[0], (Math.floor(Number(count)/Factor[1]))-RangeValue[0]) * Number(count);
	Discount	= 1 - Math.min(0.50, (Number(prem_days) * 0.5 / 100)) ;
	FullCost	= Number(prem_days) * (Number(CostPerDay) * Number(Discount));
	
	$('#cost_'+name).text(NumberGetHumanReadable(Math.round((Number(FullCost)))));
	if(FullCost > atm)
		$('#cost_'+name).css('color','#f30');
	else
		$('#cost_'+name).css('color','#090');
}

function resetBonus(name)
{
	$.post("game.php?page=premium", {'mode': 'premResetInfo', 'item': name, 'ajax': 1}, function(info) {
		if(confirm(info.msg) && info.done == 1)
		{
			$.post("game.php?page=premium", {'mode': 'premReset', 'item': name, 'ajax': 1}, function(data) {
				alert(data.msg);
				window.location = 'game.php?page=premium';
			}, "json");
		}
	}, "json");
}