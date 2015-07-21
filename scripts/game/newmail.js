function starttraining(){xhr=$.ajax({type:"POST",url:"game.php?page=overview&mode=starttraining",dataType:"json",global:false,success:function(e){}})}function starttraining2(){xhr=$.ajax({type:"POST",url:"game.php?page=overview&mode=starttraining2",dataType:"json",global:false,success:function(e){}})}function facebook(){xhr=$.ajax({type:"POST",url:"game.php?page=overview&mode=facebook",dataType:"json",global:false,success:function(e){}})}function starttraining3(){xhr=$.ajax({type:"POST",url:"game.php?page=overview&mode=starttraining3",dataType:"json",global:false,success:function(e){}})}function starttraining4(){xhr=$.ajax({type:"POST",url:"game.php?page=overview&mode=starttraining4",dataType:"json",global:false,success:function(e){}})}function starttraining5(){xhr=$.ajax({type:"POST",url:"game.php?page=overview&mode=starttraining5",dataType:"json",global:false,success:function(e){}})}function starttraining6(){xhr=$.ajax({type:"POST",url:"game.php?page=overview&mode=starttraining6",dataType:"json",global:false,success:function(e){}})}function starttraining7(){xhr=$.ajax({type:"POST",url:"game.php?page=overview&mode=starttraining7",dataType:"json",global:false,success:function(e){}})}function starttraining8(){xhr=$.ajax({type:"POST",url:"game.php?page=overview&mode=starttraining8",dataType:"json",global:false,success:function(e){}})}function starttraining9(){xhr=$.ajax({type:"POST",url:"game.php?page=overview&mode=starttraining9",dataType:"json",global:false,success:function(e){}})}function starttraining10(){xhr=$.ajax({type:"POST",url:"game.php?page=overview&mode=starttraining10",dataType:"json",global:false,success:function(e){}})}function starttraining11(){xhr=$.ajax({type:"POST",url:"game.php?page=overview&mode=starttraining11",dataType:"json",global:false,success:function(e){}})}function starttraining12(){xhr=$.ajax({type:"POST",url:"game.php?page=overview&mode=starttraining12",dataType:"json",global:false,success:function(e){}})}function starttraining13(){xhr=$.ajax({type:"POST",url:"game.php?page=overview&mode=starttraining13",dataType:"json",global:false,success:function(e){}})}function starttraining14(){xhr=$.ajax({type:"POST",url:"game.php?page=overview&mode=starttraining14",dataType:"json",global:false,success:function(e){}})}function starttraining15(){xhr=$.ajax({type:"POST",url:"game.php?page=overview&mode=starttraining15",dataType:"json",global:false,success:function(e){}})}function starttraining16(){xhr=$.ajax({type:"POST",url:"game.php?page=overview&mode=starttraining16",dataType:"json",global:false,success:function(e){}})}function starttraining17(){xhr=$.ajax({type:"POST",url:"game.php?page=overview&mode=starttraining17",dataType:"json",global:false,success:function(e){}})}function starttraining20(){xhr=$.ajax({type:"POST",url:"game.php?page=overview&mode=starttraining20",dataType:"json",global:false,success:function(e){}})}function endfacebook(){xhr=$.ajax({type:"POST",url:"game.php?page=overview&mode=endfacebook",dataType:"json",global:false,success:function(e){}})}


function Checkmail(){	
var e=document.getElementById("new_email");	
$.getJSON('game.php?page=overview&mode=newmail', function(response){
if(response.message > 0){
$("#new_email").show();
$('#scroller .new_email').html('+' + response.message);
e.innerHTML=response.message
}
else{
$("#new_email").hide();
}	

});
setTimeout(Checkmail, 5000);
}


function Alarm(){		
$.getJSON('game.php?page=overview&mode=Alarm', function(response){
if(response.message > 0){
beepataks.play();
document.getElementById('attack').addClass('active_indicator')
}

});
setTimeout(Alarm, 5000);
}

function Notification(){		
$.getJSON('game.php?page=overview&mode=Notification', function(response){
if(response.message > 0){
showNotification({
message: response.text,
 autoClose: true,
duration: 3,
type: response.type
});
}
});
setTimeout(Notification, 10000);
}


$(document).ready(function(){
	$(window).scroll(function () {if ($(this).scrollTop() > 100) {$('#scroller').fadeIn();} else {$('#scroller').fadeOut();}});
	$('#scroller').click(function () {$('body,html').animate({scrollTop: 0}, 400); return false;});
});


