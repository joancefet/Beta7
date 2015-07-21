var chat_refreshing = false;
var chat_last_message = 0;

if(!status_smiles_menu){
	var status_smiles_menu = false;
}
if(!status_msg_color_menu){
	var status_msg_color_menu = false;
}
if(!status_img_add_menu){
	var status_img_add_menu = false;
}
if(!status_chat_sound){
	var status_chat_sound = true;
}

function msgEnterClean(message)
{
	var reg = new RegExp("\\n+", "i");
	message = message.replace(reg,"");
	return message;
}

function addSmiley(smiley,smileyName)
{
	if(smileyName != 'nickname')
		smiley = ' '+smiley+' ';
	document.chat_form.msg.value += smiley;
	//document.chat_form.msg.focus();
	setCursorPosition(document.chat_form.msg);
	if(smileyName != 'nickname'){
		coockRefresh(smileyName);
		coockView();
	}
}

// возвращает cookie с именем name, если есть, если нет, то undefined
function getCookie(name)
{
	var matches = document.cookie.match(new RegExp(
		"(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1')  + "=([^;]*)"
	));
	return matches ? decodeURIComponent(matches[1]) : undefined;
}

// Вывод последних смайлов из кукисов
function coockView()
{
	// разбиваем получаемую строку из куки на массив
	cook = getCookie("SmilesXterium").split(',');
	
	// обнуляем блок со последними смайлами
	$('#last_smiles').text('');

	// устанавливаем счётчик цикла в нулевую позицию
	i = 0;
	// выводим каждое значение массива в виде html-элемента
	while(i < cook.length){
		// присваиваем переменно смайл, сохранённый в куках
		smile = document.getElementById(cook[i]);
		
		// создаём элемент IMG
		var newImg = document.createElement('img');
		newImg.setAttribute('src', smile.getAttribute('src'));
		newImg.setAttribute('style', smile.getAttribute('style'));
		newImg.setAttribute('title', smile.getAttribute('title'));
		newImg.setAttribute('alt', smile.getAttribute('alt'));
		newImg.setAttribute('onClick', smile.getAttribute('onClick'));
		
		// элемент DIV с последними смайлами
		var smilesDiv = document.getElementById('last_smiles');
	
		smilesDiv.appendChild(newImg);
		i++;
	}
}

// Обновление куки с последними смайлами
function coockRefresh(val)
{
	// установка даты в +30 дней
	date = new Date;
	date.setDate( date.getDate() + 30 );
	
	// Если такой куки нет, то просто создаём новую с одним значением
	if(getCookie("SmilesXterium") == undefined){
		document.cookie = "SmilesXterium="+val+"; expires="+date.toUTCString();;
		return;
	}
	
	// Если кука есть, то разбираем её на массив
	cook = getCookie("SmilesXterium").split(',');
	
	// Если длина массива меньше шести,
	// то проверяем новое значение на наличиие, и если его нет
	// просто добавляем его в конец. Сохраняем куку
	if(cook.length != 6){
		i = cook.length;
		while(i > 0){
			if(cook[i-1] == val)
				return;
			i--;
		}
		cook[cook.length] = val;
		document.cookie = "SmilesXterium="+cook+"; expires="+date.toUTCString();;
	}
	// Если значений шесть, то проверяем новое значение на наличиие, и если его нет
	// добавляем его по принципу стека. Сохраняем куку
	else{
		i = cook.length;
		while(i > 0){
			if(cook[i-1] == val)
				return;
			i--;
		}
		i = 0;
		while(i < cook.length){
			if(i != 5){
				cook[i] = cook[i+1]
			}else{
				cook[i] = val;
			}
			i++;
		}
		document.cookie = "SmilesXterium="+cook+"; expires="+date.toUTCString();;
	}
}

function msgColorSelect(color, authlevel, userID)
{
	if(color == 'my'){
		color = document.chat_form.chat_msg_color_my.value;
	}

	if(userID == 17){
		color = color;
	}
	else if(authlevel != 3 && color == '#ff0000'){
		color = '#ffffff';
	}
	
	$.get("game.php?page=chat&mode=colorselect", {'color': color, 'ajax': 1}, function(data) {});
	document.chat_form.msg_color.value = color;
	document.getElementById('chat_msg_color_short').style.background = color;

	showMsgColorMenu('close');
}

function addImage()
{
	url = document.chat_form.chat_img.value;
	document.chat_form.chat_img.value = '';

	img = "[img="+url+"]";

	jQuery.post("./chat/chat_add.php", {'ally': ally_id, 'message': img, 'ajax': 1}, function(data)
	{
		showMessage();
	});

	//document.chat_form.msg.focus();
	setCursorPosition(document.chat_form.msg);
	closeAllMenu();
}

function closeAllMenu(){
	showMsgColorMenu('close');
	showSmilesMenu('close');
	showImgAddMenu("close");
}

function showSmilesMenu(act)
{
	if(act != 'close'){
		showMsgColorMenu("close");
		showImgAddMenu("close");
	}
	if(act == 'close'){
		status_smiles_menu = true;
	}
	if(act == 'open'){
		status_smiles_menu = false;
	}

	if(status_smiles_menu == false){
		$('#chat_smiles').stop(true,false).slideDown(300);
		status_smiles_menu = true;
		act ='';
	} else if(status_smiles_menu == true){
		$('#chat_smiles').stop(true,false).slideUp(300);
		status_smiles_menu = false;
		//document.chat_form.msg.focus();
		//setCursorPosition(document.chat_form.msg);
		act ='';
	}
}

function showMsgColorMenu(act)
{
	if(act != 'close'){
		showSmilesMenu("close");
		showImgAddMenu("close");
	}
	if(act == 'close'){
		status_msg_color_menu = true;
	}
	if(act == 'open'){
		status_msg_color_menu = false;
	}

	if(status_msg_color_menu == false){
		$('#msg_color_menu').stop(true,false).slideDown(300);
		status_msg_color_menu = true;
		act ='';
	} else if(status_msg_color_menu == true){
		$('#msg_color_menu').stop(true,false).slideUp(300);
		status_msg_color_menu = false;
		//document.chat_form.msg.focus();
		//setCursorPosition(document.chat_form.msg);
		act ='';
	}
}

function showImgAddMenu(act)
{
	if(act != 'close'){
		showMsgColorMenu("close");
		showSmilesMenu("close");
	}
	if(act == 'close'){
		status_img_add_menu = true;
	}
	if(act == 'open'){
		status_img_add_menu = false;
	}

	if(status_img_add_menu == false){
		$('#chat_img_add').stop(true,false).slideDown(300);
		status_img_add_menu = true;
		act ='';
	} else if(status_img_add_menu == true){
		$('#chat_img_add').stop(true,false).slideUp(300);
		status_img_add_menu = false;
		//document.chat_form.msg.focus();
		//setCursorPosition(document.chat_form.msg);
		act ='';
	}
}

function chatSoundMute(act)
{
	if(status_chat_sound == false || act == 'unmute'){
		status_chat_sound = true;
		chatSoundMuteCookie('unmute');
		$('#sound_mute').hide();
		$('#sound_unmute').show();
	} else if(status_chat_sound == true || act == 'mute'){
		status_chat_sound = false;
		chatSoundMuteCookie('mute');
		$('#sound_unmute').hide();
		$('#sound_mute').show();
	}
	document.chat_form.msg.focus();
	setCursorPosition(document.chat_form.msg);
}

function chatSoundMuteCookie(val)
{
	// установка даты в +30 дней
	date = new Date;
	date.setDate( date.getDate() + 30 );
	
	// Записываем куку
	document.cookie = "ChatSound="+val+"; expires="+date.toUTCString();;
}

function addMessage()
{
	var message = document.chat_form.msg.value;
	
	message = msgEnterClean(message);
	
	if(!message){
		document.chat_form.msg.value = '';
		$('#lost_symbols').text('0');
		return;
	}

	document.chat_form.msg.value = '';
	var color = document.chat_form.msg_color.value;
	if(color == ''){
		color = 'white';
	}
	$('#lost_symbols').text('0');
  
	message = "[c="+color+"]" + message + "[/c]";

	jQuery.post("./chat/chat_add.php", {'ally': ally_id, 'message': message, 'ajax': 1}, function(data){
		showMessage();
		$('#lost_symbols').text('0');
	});
}

function showMessage(norefresh)
{
  if(chat_refreshing)
  {
    return;
  }
  
  chat_refreshing = true;

  jQuery.post("./chat/chat_msg.php", {'ally': ally_id, 'last_message': chat_last_message, 'online': 1, 'ajax': 1}, function(data)
  {
	  if(data != undefined)
	  {
		  var shoutbox = document.getElementById('shoutbox');
		  var onlinecat = document.getElementById('online_chat');
		  var beepchat = document.getElementById('beepchat');
		  if(data.html)
		  {
			chat_last_message = data.last_message;
			shoutbox.innerHTML += data.html;
			jQuery('#shoutbox').animate({scrollTop: jQuery('#shoutbox').prop('scrollHeight')}, 1);
			if(data.sound && status_chat_sound == true)
			{
				beepchat.play();
			}
			if(data.online)
			  {
				onlinecat.innerHTML = data.online;
			  }
		  }
	  }
	  chat_refreshing = false;
      window.setTimeout(showMessage, 5000);
    }, "json"
  );
}

function setCursorPosition(inputObject)
{
	if (inputObject.selectionStart){
		var end = inputObject.value.length;
		inputObject.setSelectionRange(end,end);
		inputObject.focus();
	}
}

function ChatSoundGetCookie()
{
	status = getCookie("ChatSound");
	if(status == 'unmute')
		chatSoundMute('unmute');
	if(status == 'mute')
		chatSoundMute('mute');
}

jQuery(document).ready(function(){
    showMessage();
	coockView();
	ChatSoundGetCookie();
	$('#msg').keyup(function(e) {
		if(e.which == 27) {
			document.chat_form.msg.value = '';
			$('#lost_symbols').text('0');
			e.preventDefault();
			return false;
		}
	});
});
function keyUp()
{
	message = document.chat_form.msg.value;
	$('#lost_symbols').text(message.length);
	document.chat_form.msg.value = msgEnterClean(message);
}