<?php /*%%SmartyHeaderCode:55747341555ae62c585f900-50875451%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d262e46846995cd2b56477a4de733e43e097664' => 
    array (
      0 => '/home/stell530/public_html/beta7/styles/templates/game/page.playerCard.default.tpl',
      1 => 1436892737,
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
  'nocache_hash' => '55747341555ae62c585f900-50875451',
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_55ae62c5d16e01_85879267',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ae62c5d16e01_85879267')) {function content_55ae62c5d16e01_85879267($_smarty_tpl) {?><!DOCTYPE html>

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
	<title>Página de Jogador - <?php echo $_smarty_tpl->tpl_vars['uni_name']->value;?>
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

<body id="playerCard" class="<?php echo $_smarty_tpl->tpl_vars['bodyclass']->value;?>
" >
	<div id="tooltip" class="tip"></div>
<div id="ally_content" class="conteiner player_card" style="width:auto;">
    <div class="gray_stripe">
      	<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 &nbsp;&nbsp;&nbsp;
        <span style="color:#999;"><?php echo $_smarty_tpl->tpl_vars['homeplanet']->value;?>
:
        	<a href="#" onclick="parent.location = 'game.php?page=galaxy&amp;galaxy=<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
&amp;system=<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
';return false;">[<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
]</a></a>
        &nbsp;&nbsp;&nbsp;
        	 Aliança: <?php if ($_smarty_tpl->tpl_vars['allyname']->value){?><a href="#" onclick="parent.location = 'game.php?page=alliance&amp;mode=info&amp;id=<?php echo $_smarty_tpl->tpl_vars['allyid']->value;?>
';return false;"><?php echo $_smarty_tpl->tpl_vars['allyname']->value;?>
</a><?php }else{ ?>-<?php }?>       </span>               
    </div> 
    
	
	<?php if ($_smarty_tpl->tpl_vars['id']->value!=$_smarty_tpl->tpl_vars['yourid']->value){?>
    <div class="left_part">
        <div class="ally_contents">
        	            <p>First Name: <?php echo $_smarty_tpl->tpl_vars['firstname']->value;?>
</p>
            <p>Country: <?php echo $_smarty_tpl->tpl_vars['country']->value;?>
</p>
            <p>City: <?php echo $_smarty_tpl->tpl_vars['city']->value;?>
</p>
                   
        </div>
    </div> 
    
	<div class="right_part">
        <div class="ally_contents">
        	            <p>Age: <?php echo $_smarty_tpl->tpl_vars['age']->value;?>
</p>
            <p>Style of play: <?php echo $_smarty_tpl->tpl_vars['playstyle']->value;?>
</p>
            <p>Skype: <?php echo $_smarty_tpl->tpl_vars['skype']->value;?>
</p>            
                    
        </div>
    </div>  
	<div class="clear"></div>    
    
    <div class="gray_stripe build_band ticket_bottom_band" style="padding-left:6px;">
    	Achievements
    	    </div>    
	<?php }else{ ?>
	 <form action="game.php?page=playerCard" method="post" id="form">
    <input name="save" value="true" type="hidden">
    <div class="left_part">
        <div class="ally_contents">
        	            <p>First Name: <input name="p_name" value="<?php echo $_smarty_tpl->tpl_vars['firstname']->value;?>
" maxlength="16" type="text"></p>
            <p>Country: <input name="p_country" value="<?php echo $_smarty_tpl->tpl_vars['country']->value;?>
" maxlength="24" type="text"></p>
            <p>City: <input name="p_city" value="<?php echo $_smarty_tpl->tpl_vars['city']->value;?>
" maxlength="24" type="text"></p>
                   
        </div>
    </div> 
    
	<div class="right_part">
        <div class="ally_contents">
        	            <p>Age: <input name="p_age" value="<?php echo $_smarty_tpl->tpl_vars['age']->value;?>
" min="0" max="999" type="number"></p>
            <p>Style of play: <input name="p_style_game" value="<?php echo $_smarty_tpl->tpl_vars['playstyle']->value;?>
" maxlength="24" type="text"></p>
            <p>Skype: <input name="p_communication" value="<?php echo $_smarty_tpl->tpl_vars['skype']->value;?>
" maxlength="24" type="text"></p>            
                    
        </div>
    </div>  
	<div class="clear"></div>    
    
    <div class="gray_stripe build_band ticket_bottom_band" style="padding-left:6px;">
    	Achievements
                	<input class="bottom_band_submit" value="Save changes" type="submit">
    	    </div>    
    </form>
	<?php }?>
    
    
           
        <div style="cursor:pointer;" class="record_header" onclick="$('#achive_general').stop(false, true).slideToggle();">
        	Common
            <div class="record_header_top_line"></div>
            <div class="record_header_bottom_line"></div>
        </div> 
        <div id="achive_general" class="playercard_achive_block">
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Peace lvl. <?php echo $_smarty_tpl->tpl_vars['achievement_peace_level']->value;?>
">
                <img alt="Peace" src="styles/images/achiev/ach_level.png">
                <div class="playercard_achive_block_lvl"><?php echo $_smarty_tpl->tpl_vars['achievement_peace_level']->value;?>
</div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Combat lvl. <?php echo $_smarty_tpl->tpl_vars['achievement_combat_level']->value;?>
">
                <img alt="Combat" src="styles/images/achiev/ach_batle_level.png">
                <div class="playercard_achive_block_lvl"><?php echo $_smarty_tpl->tpl_vars['achievement_combat_level']->value;?>
</div>
            </div>
                        <div class="clear"></div>
        </div>
           
        <div style="cursor:pointer;" class="record_header" onclick="$('#achive_build').stop(false, true).slideToggle();">
        	Buildings
            <div class="record_header_top_line"></div>
            <div class="record_header_bottom_line"></div>
        </div> 
        <div id="achive_build" class="playercard_achive_block">
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Metal lvl. <?php echo $_smarty_tpl->tpl_vars['achievement_build_metal']->value;?>
 ">
                <img alt="Metal" src="styles/images/achiev/ach_mine_metal.png">
                <div class="playercard_achive_block_lvl"><?php echo $_smarty_tpl->tpl_vars['achievement_build_metal']->value;?>
</div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Crystal lvl. <?php echo $_smarty_tpl->tpl_vars['achievement_build_crystal']->value;?>
 ">
                <img alt="Crystal" src="styles/images/achiev/ach_crystal_mine.png">
                <div class="playercard_achive_block_lvl"><?php echo $_smarty_tpl->tpl_vars['achievement_build_crystal']->value;?>
</div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Deuterium lvl. <?php echo $_smarty_tpl->tpl_vars['achievement_build_deuterium']->value;?>
 ">
                <img alt="Deuterium " src="styles/images/achiev/ach_deuterium_sintetizer.png">
                <div class="playercard_achive_block_lvl"><?php echo $_smarty_tpl->tpl_vars['achievement_build_deuterium']->value;?>
</div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Light Conveyor lvl. <?php echo $_smarty_tpl->tpl_vars['achievement_build_light']->value;?>
 ">
                <img alt="Light Conveyor" src="styles/images/achiev/ach_conveyor1.png">
                <div class="playercard_achive_block_lvl"><?php echo $_smarty_tpl->tpl_vars['achievement_build_light']->value;?>
</div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Medium Conveyor lvl. <?php echo $_smarty_tpl->tpl_vars['achievement_build_medium']->value;?>
 ">
                <img alt="Medium Conveyor" src="styles/images/achiev/ach_conveyor2.png">
                <div class="playercard_achive_block_lvl"><?php echo $_smarty_tpl->tpl_vars['achievement_build_medium']->value;?>
</div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Heavy Conveyor lvl. <?php echo $_smarty_tpl->tpl_vars['achievement_build_heavy']->value;?>
 ">
                <img alt="Heavy Conveyor" src="styles/images/achiev/ach_conveyor3.png">
                <div class="playercard_achive_block_lvl"><?php echo $_smarty_tpl->tpl_vars['achievement_build_heavy']->value;?>
</div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="University lvl. <?php echo $_smarty_tpl->tpl_vars['achievement_build_university']->value;?>
 ">
                <img alt="University" src="styles/images/achiev/ach_university.png">
                <div class="playercard_achive_block_lvl"><?php echo $_smarty_tpl->tpl_vars['achievement_build_university']->value;?>
</div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Moon Base lvl. <?php echo $_smarty_tpl->tpl_vars['achievement_build_moon']->value;?>
 ">
                <img alt="Moon Base" src="styles/images/achiev/ach_mondbasis.png">
                <div class="playercard_achive_block_lvl"><?php echo $_smarty_tpl->tpl_vars['achievement_build_moon']->value;?>
</div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Phalanx lvl. <?php echo $_smarty_tpl->tpl_vars['achievement_build_phalanx']->value;?>
 ">
                <img alt="Phalanx" src="styles/images/achiev/ach_phalanx.png">
                <div class="playercard_achive_block_lvl"><?php echo $_smarty_tpl->tpl_vars['achievement_build_phalanx']->value;?>
</div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Terraformer lvl. <?php echo $_smarty_tpl->tpl_vars['achievement_build_terraformer']->value;?>
 ">
                <img alt="Terraformer" src="styles/images/achiev/ach_terraformer.png">
                <div class="playercard_achive_block_lvl"><?php echo $_smarty_tpl->tpl_vars['achievement_build_terraformer']->value;?>
</div>
            </div>
                        <div class="clear"></div>
        </div>
           
        <div style="cursor:pointer;" class="record_header" onclick="$('#achive_fleet').stop(false, true).slideToggle();">
        	Fleets
            <div class="record_header_top_line"></div>
            <div class="record_header_bottom_line"></div>
        </div> 
        <div id="achive_fleet" class="playercard_achive_block">
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Small Fighters lvl. <?php echo $_smarty_tpl->tpl_vars['achievements_fleets_small']->value;?>
 ">
                <img alt="Small Fighters" src="styles/images/achiev/ach_hunter_fleet.png">
                <div class="playercard_achive_block_lvl"><?php echo $_smarty_tpl->tpl_vars['achievements_fleets_small']->value;?>
</div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Support Fleets lvl. <?php echo $_smarty_tpl->tpl_vars['achievements_fleets_support']->value;?>
 ">
                <img alt="Support Fleets" src="styles/images/achiev/ach_support_fleet.png">
                <div class="playercard_achive_block_lvl"><?php echo $_smarty_tpl->tpl_vars['achievements_fleets_support']->value;?>
</div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Battle Fleets lvl. <?php echo $_smarty_tpl->tpl_vars['achievements_fleets_battle']->value;?>
 ">
                <img alt="Battle Fleets" src="styles/images/achiev/ach_battle_fleet.png">
                <div class="playercard_achive_block_lvl"><?php echo $_smarty_tpl->tpl_vars['achievements_fleets_battle']->value;?>
</div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Destruction Class lvl. <?php echo $_smarty_tpl->tpl_vars['achievements_fleets_destruction']->value;?>
 ">
                <img alt="Destruction Class" src="styles/images/achiev/ach_destruction_fleet.png">
                <div class="playercard_achive_block_lvl"><?php echo $_smarty_tpl->tpl_vars['achievements_fleets_destruction']->value;?>
</div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Seige Fleet lvl. <?php echo $_smarty_tpl->tpl_vars['achievements_fleets_seige']->value;?>
 ">
                <img alt="Seige Fleet" src="styles/images/achiev/ach_siege_fleet.png">
                <div class="playercard_achive_block_lvl"><?php echo $_smarty_tpl->tpl_vars['achievements_fleets_seige']->value;?>
</div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Heavy Fleet lvl. <?php echo $_smarty_tpl->tpl_vars['achievements_fleets_heavy']->value;?>
 ">
                <img alt="Heavy Fleet" src="styles/images/achiev/ach_heavy_fleet.png">
                <div class="playercard_achive_block_lvl"><?php echo $_smarty_tpl->tpl_vars['achievements_fleets_heavy']->value;?>
</div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Imperial Fleet lvl. <?php echo $_smarty_tpl->tpl_vars['achievements_fleets_imperial']->value;?>
 ">
                <img alt="Imperial Fleet" src="styles/images/achiev/ach_emperor_fleet.png">
                <div class="playercard_achive_block_lvl"><?php echo $_smarty_tpl->tpl_vars['achievements_fleets_imperial']->value;?>
</div>
            </div>
                        <div class="clear"></div>
        </div>
           
        <div style="cursor:pointer;" class="record_header" onclick="$('#achive_def').stop(false, true).slideToggle();">
        	Defense
            <div class="record_header_top_line"></div>
            <div class="record_header_bottom_line"></div>
        </div> 
        <div id="achive_def" class="playercard_achive_block">
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Easy Defense lvl. <?php echo $_smarty_tpl->tpl_vars['achievement_defense_easy']->value;?>
 ">
                <img alt="Easy Defense" src="styles/images/achiev/ach_light_def.png">
                <div class="playercard_achive_block_lvl"><?php echo $_smarty_tpl->tpl_vars['achievement_defense_easy']->value;?>
</div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Simple Defense lvl. <?php echo $_smarty_tpl->tpl_vars['achievement_defense_simple']->value;?>
 ">
                <img alt="Простая Defense" src="styles/images/achiev/ach_easy_def.png">
                <div class="playercard_achive_block_lvl"><?php echo $_smarty_tpl->tpl_vars['achievement_defense_simple']->value;?>
</div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Average Defense lvl. <?php echo $_smarty_tpl->tpl_vars['achievement_defense_average']->value;?>
 ">
                <img alt="Average Defense" src="styles/images/achiev/ach_medium_def.png">
                <div class="playercard_achive_block_lvl"><?php echo $_smarty_tpl->tpl_vars['achievement_defense_average']->value;?>
</div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="High Defense lvl. <?php echo $_smarty_tpl->tpl_vars['achievement_defense_high']->value;?>
 ">
                <img alt="High Defense" src="styles/images/achiev/ach_high_def.png">
                <div class="playercard_achive_block_lvl"><?php echo $_smarty_tpl->tpl_vars['achievement_defense_high']->value;?>
</div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Heavy Defense lvl. <?php echo $_smarty_tpl->tpl_vars['achievement_defense_heavy']->value;?>
 ">
                <img alt="Heavy Defense" src="styles/images/achiev/ach_heavy_def.png">
                <div class="playercard_achive_block_lvl"><?php echo $_smarty_tpl->tpl_vars['achievement_defense_heavy']->value;?>
</div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Massive Defense lvl. <?php echo $_smarty_tpl->tpl_vars['achievement_defense_massive']->value;?>
 ">
                <img alt="Massive Defense" src="styles/images/achiev/ach_top_def.png">
                <div class="playercard_achive_block_lvl"><?php echo $_smarty_tpl->tpl_vars['achievement_defense_massive']->value;?>
</div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Imperial Defense lvl. <?php echo $_smarty_tpl->tpl_vars['achievement_defense_imperial']->value;?>
 ">
                <img alt="Imperial Defense" src="styles/images/achiev/ach_emperor_def.png">
                <div class="playercard_achive_block_lvl"><?php echo $_smarty_tpl->tpl_vars['achievement_defense_imperial']->value;?>
</div>
            </div>
                        <div class="clear"></div>
        </div>
           
        <div style="cursor:pointer;" class="record_header" onclick="$('#achive_varia').stop(false, true).slideToggle();">
        	Misc
            <div class="record_header_top_line"></div>
            <div class="record_header_bottom_line"></div>
        </div> 
        <div id="achive_varia" class="playercard_achive_block">
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Fighter lvl. <?php echo $_smarty_tpl->tpl_vars['achievements_misc_fighter']->value;?>
  ">
                <img alt="Fighter" src="styles/images/achiev/ach_wons.png">
                <div class="playercard_achive_block_lvl"><?php echo $_smarty_tpl->tpl_vars['achievements_misc_fighter']->value;?>
 </div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Destructors lvl. <?php echo $_smarty_tpl->tpl_vars['achievements_misc_destructor']->value;?>
  ">
                <img alt="Destructors" src="styles/images/achiev/ach_destroyer_moons.png">
                <div class="playercard_achive_block_lvl"><?php echo $_smarty_tpl->tpl_vars['achievements_misc_destructor']->value;?>
 </div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Moons lvl. <?php echo $_smarty_tpl->tpl_vars['achievements_misc_moons']->value;?>
  ">
                <img alt="Moons" src="styles/images/achiev/ach_creation_moons.png">
                <div class="playercard_achive_block_lvl"><?php echo $_smarty_tpl->tpl_vars['achievements_misc_moons']->value;?>
 </div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Hostal Victory lvl. <?php echo $_smarty_tpl->tpl_vars['achievements_misc_hostal']->value;?>
  ">
                <img alt="Hostal Victory" src="styles/images/achiev/ach_wons_em.png">
                <div class="playercard_achive_block_lvl"><?php echo $_smarty_tpl->tpl_vars['achievements_misc_hostal']->value;?>
 </div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Expeditions lvl. <?php echo $_smarty_tpl->tpl_vars['achievements_misc_expe']->value;?>
  ">
                <img alt="Expeditions" src="styles/images/achiev/ach_expedition.png">
                <div class="playercard_achive_block_lvl"><?php echo $_smarty_tpl->tpl_vars['achievements_misc_expe']->value;?>
 </div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Seeker lvl. <?php echo $_smarty_tpl->tpl_vars['achievements_misc_seeker']->value;?>
  ">
                <img alt="Seeker" src="styles/images/achiev/ach_found_tm.png">
                <div class="playercard_achive_block_lvl"><?php echo $_smarty_tpl->tpl_vars['achievements_misc_seeker']->value;?>
 </div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Upgrades lvl. <?php echo $_smarty_tpl->tpl_vars['achievements_misc_upgrades']->value;?>
  ">
                <img alt="Upgrades" src="styles/images/achiev/ach_found_up.png">
                <div class="playercard_achive_block_lvl"><?php echo $_smarty_tpl->tpl_vars['achievements_misc_upgrades']->value;?>
 </div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Upgrades Integrator lvl. <?php echo $_smarty_tpl->tpl_vars['achievements_misc_integrator']->value;?>
  ">
                <img alt="Upgrades Integrator" src="styles/images/achiev/ach_action_up.png">
                <div class="playercard_achive_block_lvl"><?php echo $_smarty_tpl->tpl_vars['achievements_misc_integrator']->value;?>
 </div>
            </div>
                        <div class="clear"></div>
        </div>
        <div class="clear"></div>
    <div class="left_part">	        	
        <table class="tablesorter ally_ranks playercard_tables">
            <tbody><tr>
               <th class="gray_stripe">Statistics</th>
		<th class="gray_stripe">Pontos</th>
		<th class="gray_stripe">Posição</th>
            </tr>
            <tr>
                <td style="text-align:left;">Edifícios</td>
                <td><?php echo $_smarty_tpl->tpl_vars['build_points']->value;?>
</td>
                <td>
                   <?php echo $_smarty_tpl->tpl_vars['build_rank']->value;?>
 
                    | <span style="color:#C00"><?php echo $_smarty_tpl->tpl_vars['rankInfo2']->value;?>
</span>                </td>
            </tr>
            <tr>
                <td style="text-align:left;">Tecnologias</td>
                <td><?php echo $_smarty_tpl->tpl_vars['tech_points']->value;?>
</td>
                <td>
                    <?php echo $_smarty_tpl->tpl_vars['tech_rank']->value;?>

                    | <span style="color:#C00"><?php echo $_smarty_tpl->tpl_vars['rankInfo1']->value;?>
</span>                </td>
            </tr>
            <tr>
                <td style="text-align:left;">Frotas</td>
                <td><?php echo $_smarty_tpl->tpl_vars['fleet_points']->value;?>
</td>
                <td>
                    <?php echo $_smarty_tpl->tpl_vars['fleet_rank']->value;?>

                    | <span style="color:#3C3"><?php echo $_smarty_tpl->tpl_vars['rankInfo4']->value;?>
</span>
                                    </td>
            </tr>
            <tr>
                <td style="text-align:left;">Defesas</td>
                <td><?php echo $_smarty_tpl->tpl_vars['defs_points']->value;?>
</td>
                <td>
                    <?php echo $_smarty_tpl->tpl_vars['defs_rank']->value;?>

                    | <span style="color:#3C3"><?php echo $_smarty_tpl->tpl_vars['rankInfo3']->value;?>
</span>
                                    </td>
            </tr>
            <tr>
                <td style="text-align:left;">Achievements</td>
                <td><?php echo $_smarty_tpl->tpl_vars['ach_points']->value;?>
</td>
                <td>
                    <?php echo $_smarty_tpl->tpl_vars['ach_rank']->value;?>

                    | <span style="color:#C00"><?php echo $_smarty_tpl->tpl_vars['rankInfo5']->value;?>
</span>                </td>
            </tr>
            <tr>
                <td style="text-align:left;">Total</td>
                <td><?php echo $_smarty_tpl->tpl_vars['total_points']->value;?>
</td>
                <td>
                   <?php echo $_smarty_tpl->tpl_vars['total_rank']->value;?>

                    | <span style="color:#C00"><?php echo $_smarty_tpl->tpl_vars['rankInfo']->value;?>
</span>                </td>
            </tr>
    	</tbody></table>
    </div>
    
    <div class="right_part">
        <table class="tablesorter ally_ranks playercard_tables">
            <tbody><tr>
            	<th class="gray_stripe">Outcome of the battle</th>
                <th class="gray_stripe">Combates</th>
                <th class="gray_stripe">Percentagem de combates</th>
            </tr>
            <tr>
                <td style="text-align:left;">Combates Vencidos</td>
                <td><?php echo $_smarty_tpl->tpl_vars['wons']->value;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['siegprozent']->value;?>
 %</td>
            </tr>
            <tr>
                <td style="text-align:left;">Combates Empatados</td>
                <td><?php echo $_smarty_tpl->tpl_vars['draws']->value;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['drawsprozent']->value;?>
 %</td>
            </tr>
            <tr>
                <td style="text-align:left;">Combates Perdidos</td>
                <td><?php echo $_smarty_tpl->tpl_vars['loos']->value;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['loosprozent']->value;?>
 %</td>
            </tr>
            <tr>
                <td style="text-align:left;">Combates Totais</td>
                <td><?php echo $_smarty_tpl->tpl_vars['totalfights']->value;?>
</td>
                <td>100 %</td>
            </tr> 
    	</tbody></table>  
    </div>
   	<div class="clear"></div>  
   	<div class="build_band" style="padding-right:0;">
   	</div>       
</div>
</div>
</div>
            <div class="clear"></div>            
        </div>

<?php echo $_smarty_tpl->getSubTemplate ("main.footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>