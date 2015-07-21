function GetGubernatorTime(Element, Time)
{
	if(Time == 0)
		return;
	
	$('#time_'+Element).text(GetDayRestTimeFormat(Time));
	Time--;
	window.setTimeout("GetGubernatorTime("+Element+", "+Time+")", 1000)
}
function GubPrice(Element, Price)
{
	var Days  		= $('#days'+Element).val();
	var darkmatter 	= Number(String($('#current_darkmatter').text()).replace(/[.]/g, ''));
	var TotalPrice	= Number(Price) * Number(Days);
	
	var PriceE		= $('#price'+Element);
	
	if(TotalPrice <= darkmatter)
		PriceE.css('color','#6C6');
	else
		PriceE.css('color','#F33');

	PriceE.html(NumberGetHumanReadable(TotalPrice));
}

function GubPriceAP(Element, Level, ElementName)
{
	var UpLevel		= $('#uplvl'+Element).val();
	var costAP		= 0;	
	var RowGuber 	= GOVERNORS[ElementName];
	
	var PriceAP 	= RowGuber['priceAP'][0];
	var FpriceAP 	= RowGuber['priceAP'][1];
	var PriceDM 	= RowGuber['priceDM'][0];
	var FpriceDM 	= RowGuber['priceDM'][1];
	
	$.each(RowGuber['bonus'], function( key, DataBonus ) {
		var MathBonus = Math.floor(DataBonus['default'] * DataBonus['factor'] + (DataBonus['bonuslevel'] * Math.floor(UpLevel / DataBonus['divider']) * DataBonus['factor']));
  		$('#'+key+Element).html(MathBonus);
	});
	
	for(var i = Level + 1; i <= UpLevel; i++)
	{
		costAP += Math.round(PriceAP * Math.pow(FpriceAP, i-1));
	}
	
	var PriceE = $('#price_point'+Element);
	
	if(costAP <= AllRep)
		PriceE.css('color','#09C');
	else
		PriceE.css('color','#F66');

	PriceE.html(NumberGetHumanReadable(costAP));
	
	var FullPriceDM = Math.round(PriceDM * Math.pow(FpriceDM, UpLevel));
	
	GubPrice(Element, FullPriceDM);
}