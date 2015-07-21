<?php /*%%SmartyHeaderCode:35180077255ae65a6e0a1a6-67338602%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24712427f623a284c7cf1631470dd4ac281c4977' => 
    array (
      0 => '/home/stell530/public_html/beta7/styles/templates/game/page.messages.write.tpl',
      1 => 1436892736,
      2 => 'file',
    ),
    '4679275ceb2a5a2402c1e1a05f059e05f4e726e5' => 
    array (
      0 => '/home/stell530/public_html/beta7/styles/templates/game/layout.popup.tpl',
      1 => 1436892736,
      2 => 'file',
    ),
    'b74cecb32d9acd6c8f33dcb0d12b1c7f3f8ebd3d' => 
    array (
      0 => '/home/stell530/public_html/beta7/styles/templates/game/main.header.tpl',
      1 => 1436892737,
      2 => 'file',
    ),
    '438ad86be17fa805d88ab6cb253baace1cb18c77' => 
    array (
      0 => '/home/stell530/public_html/beta7/styles/templates/game/main.footer.tpl',
      1 => 1436892737,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '35180077255ae65a6e0a1a6-67338602',
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_55ae65a712e4e6_98368142',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ae65a712e4e6_98368142')) {function content_55ae65a712e4e6_98368142($_smarty_tpl) {?><!DOCTYPE html>

<!--[if lt IE 7 ]> <html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="no-js"> <!--<![endif]-->
<head>
	<title>Escrever mensagem - <?php echo $_smarty_tpl->tpl_vars['uni_name']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['game_name']->value;?>
</title>
	<meta name="generator" content="2Moons <?php echo $_smarty_tpl->tpl_vars['VERSION']->value;?>
">
	<!-- 
		This website is powered by 2Moons <?php echo $_smarty_tpl->tpl_vars['VERSION']->value;?>

		2Moons is a free Space Browsergame initially created by Jan Kröpke and licensed under GNU/GPL.
		2Moons is copyright 2009-2013 of Jan Kröpke. Extensions are copyright of their respective owners.
		Information and contribution at http://2moons.cc/
	-->
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="./styles/css/boilerplate.css">
	<link rel="stylesheet" type="text/css" href="./styles/css/jquery.css">
  	<link rel="stylesheet" type="text/css" href="./styles/css/jquery.fancybox.css">
	<link rel="stylesheet" type="text/css" href="./styles/theme/gow/formate.css">
    <link rel="stylesheet" type="text/css" href="./styles/css/ingame.css">
    <link rel="stylesheet" type="text/css" href="./styles/css/style.css">
	<link rel="stylesheet" type="text/css" href="./styles/css/chat.css">
	<link rel="stylesheet" type="text/css" href="./styles/css/responsive.css">
	<link rel="stylesheet" type="text/css" href="./styles/css/jquery_notification.css">
	<link rel="shortcut icon" href="./favicon.png" type="image/x-icon">
	<script type="text/javascript">
	var ServerTimezoneOffset = <?php echo $_smarty_tpl->tpl_vars['Offset']->value;?>
;
	var serverTime 	= new Date(<?php echo $_smarty_tpl->tpl_vars['date']->value[0];?>
, <?php echo $_smarty_tpl->tpl_vars['date']->value[1]-1;?>
, <?php echo $_smarty_tpl->tpl_vars['date']->value[2];?>
, <?php echo $_smarty_tpl->tpl_vars['date']->value[3];?>
, <?php echo $_smarty_tpl->tpl_vars['date']->value[4];?>
, <?php echo $_smarty_tpl->tpl_vars['date']->value[5];?>
);
	var startTime	= serverTime.getTime();
	var localTime 	= serverTime;
	var localTS 	= startTime;
	var Gamename	= document.title;
	var Ready		= "Pronto";
	var Skin		= "<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
";
	var Lang		= "<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
";
	var head_info	= "Informação";
	var auth		= <?php echo (($tmp = @$_smarty_tpl->tpl_vars['authlevel']->value)===null||$tmp==='' ? '0' : $tmp);?>
;
	var days 		= ["Dom","Seg","Ter","Qua","Qui","Sex","Sab"] 
	var months 		= ["Jan","Fev","Mar","Abr","Mai","Jun","Jul","Ago","Set","Out","Nov","Dez"] ;
	var tdformat	= "[M] [D] [d] [H]:[i]:[s]";
	var queryString	= "<?php echo strtr($_smarty_tpl->tpl_vars['queryString']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
";
	var miniChat	= 2;

	setInterval(function() {
		serverTime.setSeconds(serverTime.getSeconds()+1);
	}, 1000);
	</script>
		<script type="text/javascript" src="./scripts/base/jquery.js"></script>
	<script type="text/javascript" src="./scripts/base/jquery.ui.js"></script>
	<script type="text/javascript" src="./scripts/base/jquery.cookie.js"></script>
	<script type="text/javascript" src="./scripts/base/jquery.fancybox.js"></script>
	<script type="text/javascript" src="./scripts/base/jquery.validationEngine.js"></script>
	<script type="text/javascript" src="./scripts/l18n/validationEngine/jquery.validationEngine-<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
.js"></script>
	<script type="text/javascript" src="./scripts/base/tooltip.js"></script>
	<script type="text/javascript" src="./scripts/game/base.js"></script>
	<script type="text/javascript" src="./scripts/game/newmail.js"></script>
	<script type="text/javascript" src="./scripts/game/qtip.js"></script>
	<?php  $_smarty_tpl->tpl_vars['scriptname'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['scriptname']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['scripts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['scriptname']->key => $_smarty_tpl->tpl_vars['scriptname']->value){
$_smarty_tpl->tpl_vars['scriptname']->_loop = true;
?>
	<script type="text/javascript" src="./scripts/game/<?php echo $_smarty_tpl->tpl_vars['scriptname']->value;?>
.js"></script>
	<?php } ?>
	
<script type="text/javascript">
function check(){
	if($('#text').val().length == 0) {
		alert('Intruduzir Texto');
		return false;
	} else {
		$('submit').attr('disabled','disabled');
		$.post('game.php?page=messages&mode=send&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&ajax=1', $('#message').serialize(), function(data) {
			alert(data);
			parent.$.fancybox.close();
			return true;
		}, 'json');
	}
}
</script>

	<script type="text/javascript">
	$(function() {
		<?php echo $_smarty_tpl->tpl_vars['execscript']->value;?>

	});
	</script>
	
	
	<?php if ($_smarty_tpl->tpl_vars['manual_11_step']->value==0){?>
	<script type="text/javascript">
	$(function() {
		qtips('#attack', 'Attention to your planet flies attacking fleet', 'bottomMiddle', 'topLeft');
setTimeout(function() { qtips('.over', 'Go to the review, to view the attackers fleet', 'bottomMiddle', 'topLeft') }, 4000);
setInterval(function() { AJAX() }, 6000)
	});
	</script>
	

	
	
	<?php }?>
	

	
	<?php if ($_smarty_tpl->tpl_vars['manual_15_step']->value==0){?>
	<script type="text/javascript">
	$(function() {
		qtips('#munu_shipyard_fleet ', 'Go to Fleet. <br> Here you can build a battle fleet, attacks on other players or flight expedition.', 'rightMiddle', 'leftMiddle');
setInterval(function() { AJAX() }, 6000)
	});
	</script>
	<?php }?>
	
	<?php if ($_smarty_tpl->tpl_vars['manual_24_step']->value==0){?>
	<script type="text/javascript">
	$(function() {
		qtips('#munu_academy ', 'Go to the Academy. <br> Here you will be able to enhance skills available to you by selecting one of three trees, broken down my classification..', 'rightMiddle', 'leftMiddle');
setInterval(function() { AJAX() }, 6000)
	});
	</script>
	<?php }?>
	
	<?php if ($_smarty_tpl->tpl_vars['manual_26_step']->value==0){?>
	<script type="text/javascript">
	$(function() {
		qtips('#achievements_name ', 'Go to Achievements. <br> Here you can choose suitable for achieving your development strategy.', 'rightMiddle', 'leftMiddle');
setInterval(function() { AJAX() }, 6000)
	});
	</script>
	<?php }?>
	
	<?php if ($_smarty_tpl->tpl_vars['manual_17_step']->value==0){?>
	<script type="text/javascript">
	$(function() {
		qtips('#munu_galaxy ', 'Go to the Galaxy. <br> This map of the universe, the planet where all the players are displayed.', 'rightMiddle', 'leftMiddle');
setInterval(function() { AJAX() }, 6000)
	});
	</script>
	
	<?php }?>
	
	<?php if ($_smarty_tpl->tpl_vars['manual_19_step']->value==0){?>
	
	<script type="text/javascript">
	$(function() {
		qtips('.over ', 'Go to the review, to see the fleet sent for recycling', 'bottomMiddle', 'topLeft');
setInterval(function() { AJAX() }, 6000)
	});
	</script>
	
	<?php }?>
	
	
	<?php if ($_smarty_tpl->tpl_vars['manual_21_step']->value==0){?>
	<script type="text/javascript">
	$(function() {
		qtips('#munu_senat ', 'Go to Senate. <br> Here you can hire experts in various categories that help grown their Empire.', 'rightMiddle', 'leftMiddle');
setInterval(function() { AJAX() }, 6000)
	});
	</script>
	
	<?php }?>
	
	
	
	
	<?php if ($_smarty_tpl->tpl_vars['manual_13_step']->value==0){?>
	<script type="text/javascript">
	$(function() {
		qtips('.mesages ', 'Go to messages. <br> Red figure beside notifies you about the number of unread messages.', 'bottomMiddle', 'topMiddle');
setInterval(function() { AJAX() }, 6000)
	});
	</script>
		<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['manual_5_step']->value==0){?>
	<script type="text/javascript">
	$(function() {
setTimeout(function() { qtips('#munu_research', 'Log in here, for then that would protect against espionage.', 'rightMiddle', 'leftMiddle') }, 4000);
setInterval(function() { AJAX() }, 6000)
	});
	</script>
	
	<?php }?>
	
	<?php if ($_smarty_tpl->tpl_vars['manual_8_step']->value==0){?>
	
	<script type="text/javascript">
	$(function() {
		qtips('#munu_shipyard_defense ', 'Go to Defense.<br>Here you will be able to increase the protection of the planet. ', 'rightMiddle', 'leftMiddle');
setInterval(function() { AJAX() }, 6000)
	});
	</script>
	
	<?php }?>
	
	
	
	
	<?php if ($_smarty_tpl->tpl_vars['manuel_step_1_1']->value==0){?>
	
		<script type="text/javascript">
	
	$(function() {
		
qtips('#munu_build ', 'Go to Buildings.', 'rightMiddle', 'leftMiddle');
setInterval(function() { AJAX() }, 6000)
	});
	</script>
	<?php }?>
	

	<?php if ($_smarty_tpl->tpl_vars['manual_step_3']->value==0){?>
	<script type="text/javascript">
	$(function() {
		qtips('#espionage ', 'Attention! Spy on your planet.', 'bottomMiddle', 'topLeft');
setTimeout(function() { qtips('.over ', 'Go to Overview .', 'bottomMiddle', 'topLeft') }, 3000);

setInterval(function() { AJAX() }, 6000)
	});
	</script>
	<?php }?>
	
	
	
	
	
	
	
	
	
	
	
	
	<?php if ($_smarty_tpl->tpl_vars['manual_step_1']->value==0){?>
	
		<script type="text/javascript">
	
	$(function() {
		qtips('#res_block_metal .ico_res ', '<span style="margin:0 0 7px 0;display: block;color:#002211; "><b>Metal:</b></span> <span style=" margin-left: 9px; margin-right: 4px; cursor: default; float: left;color:#002211;">•</span> This is used in the construction of buildings Navy and Defense, as well as in the study of research <br/> <span style=" margin-left: 9px; margin-right: 4px; cursor: default; float: left;color:#002211;">•</span>it can be exchanged for other resources <br/><span style=" margin-left: 9px; margin-right: 4px; cursor: default; float: left;color:#002211;">•</span>if the store is filled, the development of the resource ceases', 'bottomMiddle', 'topLeft');
qtips('#res_block_crystal .ico_res ', '<span style="margin:0 0 7px 0;display: block;color:#002211;"><b>Crystal:</b></span> <span style=" margin-left: 9px; margin-right: 4px; cursor: default; float: left;color:#002211;">•</span>used in the study of research<br/><span style=" margin-left: 9px; margin-right: 4px; cursor: default; float: left;color:#002211;">•</span>it can be exchanged for other resources <br/> <span style=" margin-left: 9px; margin-right: 4px; cursor: default; float: left;color:#002211;">•</span>if the store is filled, the development of the resource ceases.', 'bottomMiddle', 'topLeft');
qtips('#res_block_deuterium .ico_res ', '<span style="margin:0 0 7px 0;display: block;color:#002211;"><b>Deuterium:</b></span> <span style=" margin-left: 9px; margin-right: 4px; cursor: default; float: left;color:#002211;">•</span>used as fuel for the Navy<br/> <span style=" margin-left: 9px; margin-right: 4px; cursor: default; float: left;color:#002211;">•</span>it can be exchanged for other resources<br/> <span style=" margin-left: 9px; margin-right: 4px; cursor: default; float: left;color:#002211;">•</span>if the store is filled, the development of the resource ceases.', 'bottomMiddle', 'topLeft');
qtips('#res_block_energy .ico_res ', '<span style="margin:0 0 7px 0;display: block;color:#002211;"><b>Energy:</b></span>  <span style=" margin-left: 9px; margin-right: 4px; cursor: default; float: left;color:#002211;">•</span>required for the operation of mines <br/><span style=" margin-left: 9px; margin-right: 4px; cursor: default; float: left;color:#002211;">•</span>produced with the aid of solar or Fusion power plant, as well as a solar satellite; <br/><span style=" margin-left: 9px; margin-right: 4px; cursor: default; float: left;color:#002211;">•</span>with a shortage of energy production of mines decreases.', 'bottomMiddle', 'topLeft');

qtips('#res_block_darkmatter .ico_res ', '<span style="margin:0 0 7px 0;display: block;color:#002211;"><b>Dark matter:</b></span>  <span style=" margin-left: 9px; margin-right: 4px; cursor: default; float: left;color:#002211;">•</span>Used to buy ingame special features <br/><span style=" margin-left: 9px; margin-right: 4px; cursor: default; float: left;color:#002211;">•</span>produced with the aid of collider (avaible only on moons) <br/><span style=" margin-left: 9px; margin-right: 4px; cursor: default; float: left;color:#002211;">•</span>There is no limit of production.', 'bottomMiddle', 'topLeft');

qtips('#res_block_antimatter .ico_res ', '<span style="margin:0 0 7px 0;display: block;color:#002211;"><b>Anti Matter:</b></span>  <span style=" margin-left: 9px; margin-right: 4px; cursor: default; float: left;color:#002211;">•</span>Can only be bought', 'bottomLeft', 'topLeft');


setTimeout(function() { qtips('#munu_build ', 'Go to buildings .', 'rightMiddle', 'leftMiddle') }, 4000);setInterval(function() { AJAX() }, 6000)
	});
	</script>
	<?php }?>

   
    <script type="text/javascript">
		$(document).ready(function(){
			var flag_planet_menu = false;
			$('#planet_select').click(function(){ 
				$(this).toggleClass('active');
				$('#list_palnet').stop(true,false).slideDown(300);
				flag_planet_menu = true;
			});		
			if(flag_planet_menu)
			{					
				document.body.onclick = function (e) {
					e = e || event;
					target = e.target || e.srcElement;
					if (target.id == "planet_select") {
						return;
					} else {
						$('#planet_select').removeClass('active');
						$('#list_palnet').hide();
						flag_planet_menu = false;
					}
				}

			}
			$('.urlpalnet').click( function(){
				document.location = '?'+queryString+'&'+$(this).attr("url");
			});		
		});
	</script>
</head>

<body id="messages" class="<?php echo $_smarty_tpl->tpl_vars['bodyclass']->value;?>
" >
	<div id="tooltip" class="tip"></div>

<div id="ally_content" class="conteiner" style="width:auto">
    <div class="gray_stripe">
    	Escrever uma mensagem <span style="float:right; color:#8e9394;">(<span id="cntChars">0</span>&nbsp;/&nbsp;5.000&nbsp;symbols)</span>
    </div>
    <form name="message" id="message" action="">
        <table class="ally_ranks gray_stripe_th td_border_bottom">
            <tbody><tr>
                <td>Para <input name="to" size="40" value="<?php echo $_smarty_tpl->tpl_vars['OwnerRecord']->value['username'];?>
 [<?php echo $_smarty_tpl->tpl_vars['OwnerRecord']->value['galaxy'];?>
:<?php echo $_smarty_tpl->tpl_vars['OwnerRecord']->value['system'];?>
:<?php echo $_smarty_tpl->tpl_vars['OwnerRecord']->value['planet'];?>
]" type="text"></td>
                <td><input name="subject" id="subject" size="40" maxlength="40" placeholder="topic" value="<?php if (!empty($_smarty_tpl->tpl_vars['subject']->value)){?><?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mg_no_subject'];?>
<?php }?>" type="text"></td>
            </tr>
            <tr>
                <td colspan="2">
                	<textarea placeholder="message" name="text" id="text" cols="40" rows="8" onkeyup="$('#cntChars').text($(this).val().length); keyUp(event);" onkeydown="keyDown(event)"></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:center;">
                	<input id="submit" onclick="check();" name="button" value="Enviar" type="button"> 
               	 	<span style="float:right; color:#999; line-height:20px;">[ctrl + enter]</span>
            	</td>
            </tr>
        </tbody></table>
    </form>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("main.footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>