$(function() {
	// Ð¤ÑƒÐ½ÐºÑ†Ð¸Ð¸ Ð¾Ñ†ÐµÐ½ÐºÐ¸ Ð¸Ð· ÑÐ¿Ð¸ÑÐºÐ° Ñ‚Ð¸ÐºÐµÑ‚Ð¾Ð²
	$('.tckRateStar').mouseover(function() {
		star_id		= $(this).attr('star');
		
		parent	= $(this).parent();
		stars	= $(parent).children('.tckRateStar');
		$(stars).each(function(){
			if($(this).attr('star') <= star_id)
				$(this).css({'background-image':'url(./styles/images/star-gold.png)'});
		});
	});
	$('.tckRateStar').mouseout(function() {
		star_id		= $(this).attr('star');
		
		parent	= $(this).parent();
		stars	= $(parent).children('.tckRateStar');
		$(stars).each(function(){
			if($(this).attr('star') <= star_id)
				$(this).css({'background-image':'url(./styles/images/star-gray.png)'});
		});
	});
	$('.tckRateStar').click(function() {
		star_id		= $(this).attr('star');
		parent_id	= $(this).parent().attr('id');
		
		$.post('game.php?page=gmrate', {'id': parent_id, 'rate': star_id, 'ajax': 1}, function(data) {
			if(data.error !== 0)
			{
				alert(data.error);
				if(data.code === 1)
					window.location.reload(true);
			}
			else if(data.error === 0)
				window.location.reload(true);
		}, 'json');
		return false;
	});
	
	// Ð¤ÑƒÐ½ÐºÑ†Ð¸Ð¸ Ð¾Ñ†ÐµÐ½ÐºÐ¸ Ð¸Ð· Ñ‚Ð¸ÐºÐµÑ‚Ð°
	$('.gmRateStar').mouseover(function() {
		star_id		= $(this).attr('id');
		star_num	= star_id.charAt(5);
		
		for (var i = 1; i <= star_num; i++) {
			$('#star_'+i).css({'background-image':'url(./styles/images/star-gold.png)'});
		}
	});
	$('.gmRateStar').mouseout(function() {
		star_id		= $(this).attr('id');
		star_num	= star_id.charAt(5);
		
		for (var i = 1; i <= star_num; i++) {
			$('#star_'+i).css({'background-image':'url(./styles/images/star-gray.png)'});
		}
	});
	$('.gmRateStar').click(function() {
		star_id		= $(this).attr('id');
		star_num	= star_id.charAt(5);
		
		$.post('game.php?page=gmrate', {'id': ticketID, 'rate': star_num, 'ajax': 1}, function(data) {
			if(data.error !== 0)
			{
				alert(data.error);
				if(data.code === 1)
					window.location.reload(true);
			}
			else if(data.error === 0)
				window.location.reload(true);
		}, 'json');
	});
});