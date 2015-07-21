$(document).ready(function()
{
    $('#universe').change(function()
    { 
	
		var value = document.getElementById("universe").value;
		var user_email = document.getElementById("user_email").value;
		
		//alert(user_name);
        
        $.ajax({
            url: 'http://xterium.ru/ajax',
            type: 'POST',
            dataType: 'JSON',
			data : '&value=' + value + '&email=' + user_email + '&ajax=universe' ,
            success: function(data)
            {
               if (data['status'] == 'ok')
                {
					alert('done');

                }
				
               else  alert('not');
            }
	    })
	return false; 
    });
	
});