function CheckArg()
{
	DotsToCount();
	
	diameter	= $('#diameter').val();
	mondbasis	= $('#mondbasis').val();
	stars		= $('#stars').val();
	prem		= $('#prem').val();
		
	if(diameter > 0 && stars > 0) {
		//document.getElementById('form').submit();
		$('#form').submit();
	} else {
		alert('Ð—Ð½Ð°Ñ‡ÐµÐ½Ð¸Ñ Ð² Ð¿Ð¾Ð»ÑÑ… Ð¿Ð¾Ð¼ÐµÑ‡ÐµÐ½Ð½Ñ‹Ñ… Ð·Ð²Ñ‘Ð·Ð´Ð¾Ñ‡ÐºÐ¾Ð¹, Ð´Ð¾Ð»Ð¶Ð½Ñ‹ Ð±Ñ‹Ñ‚ÑŒ Ð±Ð¾Ð»ÑŒÑˆÐµ Ð½ÑƒÐ»Ñ!');
	}
	return false;
}
function DotsToCount() {
	$('#form input[type=text]').val(function(i, old) {
		return old.replace(/[^[0-9]|\.]/g, '');
	});
}
function countDots() {
	$('#form input[type=text]').val(function(i, old) {
		return NumberGetHumanReadable(old.replace(/[^[0-9]|\.]/g, ''));
	});	
}
$(function() {
	$('#form input[type=text]').keyup(function() {
		countDots();
	});
	$('#form').submit(function() {
		DotsToCount();
	});
});
jQuery(document).ready(function(){
	countDots();
});