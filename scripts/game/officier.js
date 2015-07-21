function GetOfficerTime(Element, Time)
{
	if(Time == 0)
		return;
	
	if(Time < 3600){
	$('#time_'+Element).css('color','#F33');
	}
	$('#time_'+Element).text(GetDayRestTimeFormat(Time));
	Time--;
	window.setTimeout("GetOfficerTime("+Element+", "+Time+")", 1000)
}
