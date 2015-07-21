function check(){

	var Cost = Number($('#cost').text().replace(/[^[0-9]|\.]/g, ''));
	
	if(Cost < SminCost){
		alert(mes_min_cost);
		return false;
	}else{
		$('submit').attr('disabled','disabled');
		$.post('game.php?ajax=1&page=createlot&mode=senddeuterium&count='+$('#count').val().replace(/[^[0-9]|\.]/g, '')+'&course='+$('#course').val(), function(data) {
			alert(data);
			parent.$.fancybox.close();
			parent.location = "game.php?page=market&mode=yourlots";
			return true;
		});
	}
}

function cost()
{
	if($('#count').val().length > 3)
		$('#count').val(function(i, old) {
			return NumberGetHumanReadable(old.replace(/[^[0-9]|\.]/g, ''));
		});
		
	var Count	= $('#count').val().replace(/[^[0-9]|\.]/g, '');
	var Course	= $('#course').val();
	
	if($('#count').val().length > 3 && (isNaN(Count) || Count < 1 )) {
		$('#count').val(1);
		Count = 1;
	}
	
	var SCourseFul = SCourse + Math.floor(SCourseSeting * (1 - Course / 100));
	
	var cost = Math.floor(Count / SCourseFul);
	
	$('#cost').text(NumberGetHumanReadable(cost));
}

/*ÐÐ¿Ð³Ñ€ÐµÐ¹Ð´Ñ‹*/
function UpCheck()
{
	var Name	= $('#upgrade_name').val();
	var Cost	= $('#cost').val() || 100;
	var Count	= $('#count').val() || 1;

	$('submit').attr('disabled','disabled');
	$.post('game.php?ajax=1&page=createlot&mode=sendupgrade&count=' + Count +'&cost='+ Cost +'&name='+ Name, function(data) {
		alert(data);
		parent.$.fancybox.close();
		parent.location = "game.php?page=market&mode=yourlots";
		return true;
	});
}

/*ÐŸÐ»Ð°Ð½ÐµÑ‚Ñ‹*/
function PlanetCheck()
{
	var Cost	= $('#cost').val() || 10000;

	$('submit').attr('disabled','disabled');
	$.post('game.php?ajax=1&page=createlot&mode=sendplanet&cost='+ Cost, function(data) {
		alert(data);
		parent.$.fancybox.close();
		parent.location = "game.php?page=market&mode=yourlots";
		return true;
	});

}

