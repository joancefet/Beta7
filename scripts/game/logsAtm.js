$(function() {
	$('.spending_span').click(function() {
		table	= $(this).attr('list');
		
		$('.spending_span').each(function(){
			if($(this).attr('list') != table)
				$(this).removeClass('spending_active');
			else
				$(this).addClass('spending_active');
		});
		$('.spending_table').each(function(){
			if($(this).attr('id') != table)
				$(this).css({'display':'none'});
			else
				$(this).css({'display':'block'});
		});
	});
});