<?php /*%%SmartyHeaderCode:163493719955ae6232a87c63-78605160%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af5ac0772cd94ee36d7b19fd4b87592f452894bd' => 
    array (
      0 => '/home/stell530/public_html/beta7/styles/templates/login/page.index.default.tpl',
      1 => 1436907583,
      2 => 'file',
    ),
    '4f33dcf7b02cd5da466848269adcc3e8d8ea0f94' => 
    array (
      0 => '/home/stell530/public_html/beta7/styles/templates/login/layout.light.tpl',
      1 => 1436892736,
      2 => 'file',
    ),
    '6b6fdac6c2cf19a713ac03c0d4b828b02428678a' => 
    array (
      0 => '/home/stell530/public_html/beta7/styles/templates/login/main.header.tpl',
      1 => 1436992338,
      2 => 'file',
    ),
    'ff0dd2416849237f900282e4e9aea9f22c713664' => 
    array (
      0 => '/home/stell530/public_html/beta7/styles/templates/login/main.navigation.tpl',
      1 => 1436892736,
      2 => 'file',
    ),
    'e88544ab476b8788bc01ece7e8bade5d055cd994' => 
    array (
      0 => '/home/stell530/public_html/beta7/styles/templates/login/main.footer.tpl',
      1 => 1436892736,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '163493719955ae6232a87c63-78605160',
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_55ae623305c157_13489998',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ae623305c157_13489998')) {function content_55ae623305c157_13489998($_smarty_tpl) {?><!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> 
<html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="no-js"> <!--<![endif]-->
	<head>
		
		
		<link rel="stylesheet" type="text/css" href="media/css/bjqs.css"/>
		<link href="media/css/style.css" rel="stylesheet" type="text/css"/>
		<link href="media/css/dialog.css" rel="stylesheet" type="text/css"/>
		<link rel="stylesheet" href="media/css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8"/>
		<link href="media/css/vidjet.css" rel="stylesheet" type="text/css"/>
		<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
		<title><?php echo $_smarty_tpl->tpl_vars['gameName']->value;?>
</title>
		<meta name="generator" content="Stellar Wars <?php echo $_smarty_tpl->tpl_vars['VERSION']->value;?>
">
		<!-- 
			This website is powered by 2Moons <?php echo $_smarty_tpl->tpl_vars['VERSION']->value;?>

			2Moons is a free Space Browsergame initially created by Jan Kröpke and licensed under GNU/GPL.
			2Moons is copyright 2009-2013 of Jan Kröpke. Extensions are copyright of their respective owners.
			Information and contribution at http://2moons.cc/
		-->
		<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['header_keywords'];?>
">
		<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['gameName']->value;?>
: <?php echo $_smarty_tpl->tpl_vars['LNG']->value['header_meta_description'];?>
"> <!-- Noob Check :) -->
		<!--[if lt IE 9]>
		<script src="scripts/base/html5.js"></script>
		<![endif]-->
		<script src="scripts/base/jquery.js"></script>
		<script src="scripts/base/jquery.cookie.js"></script>
		<script src="scripts/base/jquery.fancybox.js"></script>
		<script src="scripts/login/main.js"></script>
		<script src="media/js/jquery.delegate.js" type="text/javascript"></script>
		<script src="media/js/jquery-1.7.1.min.js" type="text/javascript"></script>
		<script src="media/js/validate.min.js" type="text/javascript"></script>
		<script src="media/js/dialog.js" type="text/javascript" ></script>
		<script src="media/js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
		<script><?php if (isset($_smarty_tpl->tpl_vars['code']->value)){?>var loginError = <?php echo json_encode($_smarty_tpl->tpl_vars['code']->value);?>
;<?php }?></script>
		<script><?php if ($_smarty_tpl->tpl_vars['code']->value){?>alert(<?php echo json_encode($_smarty_tpl->tpl_vars['code']->value);?>
);<?php }?></script>	
	</head>
<body id="overview" class="<?php echo $_smarty_tpl->tpl_vars['bodyclass']->value;?>
">
	<div id="page"><div id="body">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="./scripts/login/selectLang.js"></script>
<script type="text/javascript" src="./scripts/login/FormulaireLang.js"></script>
		 <header>
			 <div id="top_band">
				<span style="padding-top: 13px;"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['main_navigation_menu_head1'];?>
</span>
				<!-- Ajout du choix de la langue en jquery -->
				<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1){?>
			    <div id="polyglotLanguageSwitcher" style="padding: 6px;">
					<form action="">
						<select id="polyglot-language-options">
						<?php  $_smarty_tpl->tpl_vars['langName'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['langName']->_loop = false;
 $_smarty_tpl->tpl_vars['langKey'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['langName']->key => $_smarty_tpl->tpl_vars['langName']->value){
$_smarty_tpl->tpl_vars['langName']->_loop = true;
 $_smarty_tpl->tpl_vars['langKey']->value = $_smarty_tpl->tpl_vars['langName']->key;
?>
							<option id="<?php echo $_smarty_tpl->tpl_vars['langKey']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['langKey']->value;?>
" selected><?php echo $_smarty_tpl->tpl_vars['langName']->value;?>
</option>
						<?php } ?>
						</select>
					</form>
				</div>
				<?php }?>
				<!-- Fin du choix de la langue en jquery -->
		<form id="login" name="login" action="index.php?page=register" data-action="index.php?page=register" method="post">
				 <a href="javascript:;" onclick="$('#login').submit();" style="margin-right: 10px;"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['main_navigation_menu_head2'];?>
</a>
				 <div id="pencil_edit">&nbsp;|&nbsp;</div>
				 <a href="/users/login" name="modal"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['main_navigation_menu_head3'];?>
</a>
			 </div>
			 <div id="header">
				 <a href="index.php" class="logo">
				 <img id="img_logo" src="./media/images/logo.png"/>
				 </a>
				 <div id="top_content"></div>
			 </div>
		</header>

		 <div id="main_menu">
			 <div class="right_part">
			 	<a href="javascript:;" onclick="$('#login').submit();"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['main_navigation_menu1'];?>
</a>
			 </div>
			 <div class="left_part">
				 <a href="index.php"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['main_navigation_menu2'];?>
</a>
				 <div class="seporator"></div>
				 <a href="index.php?page=about"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['main_navigation_menu3'];?>
</a>
				 <div class="seporator"></div>
				 <a href="index.php?page=galery"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['main_navigation_menu4'];?>
</a>
				 <div class="seporator"></div>
				 <a href="#"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['main_navigation_menu5'];?>
</a>
				 <div class="seporator"></div>
				 <a href="#"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['main_navigation_menu6'];?>
</a>
			 </div>
		 </div>
	 </form>

<div id="content">
	<div id="right_side">
		<div class="browser">
			<h3>Junte-se a nós agora!</h3>
			<p>Para jogar, você irá precisar apenas de um navegador.</p>
				<div class="links">
					<a href="http://www.opera.com/">
					<img src="./media/images/opera.png" width="22px" height="26px"/>
					</a>
					<a href="http://www.mozilla.org/en/firefox/new/">
					<img src="./media/images/firfox.png" width="27px" height="26px"/>
					</a>
					<a href="http://www.google.com/intl/en/chrome/browser/">
					<img src="./media/images/hrom.png" width="26px" height="27px"/>
					</a>
					<div style="float: right;">we recommend:</div>
				</div>
		</div>

		<div class="socials">
			<div class="black_bg">
				<h3>Redes Sociais</h3>
				<a style="background: url(./media/images/fb.png) no-repeat;" href="#" target="_BLANK"></a>
				<span>Inscreva-se e Siga.</span>
			</div>
		</div>

		<div class="server_status">
			<div class="black_bg">
			<div class="">
				<div class="hr"></div>
				<h3>Status do Servidor</h3> Jogadores: <span><?php echo $_smarty_tpl->tpl_vars['users_amount']->value;?>
</span>
				<br>Novos este mês: <span><?php echo $_smarty_tpl->tpl_vars['new_member']->value;?>
</span>
				<br>Novo SdC: <span><?php echo $_smarty_tpl->tpl_vars['total_hof']->value;?>
</span>
				<br>Jogadores ativos: <span><?php echo $_smarty_tpl->tpl_vars['active']->value;?>
</span>
			</div>
			</div>
		</div>

		<div class="forums">
			<h3>Últimos tópicos</h3>
			<div class="hr"></div>
			<?php  $_smarty_tpl->tpl_vars['topicsRow'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topicsRow']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['topicsList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topicsRow']->key => $_smarty_tpl->tpl_vars['topicsRow']->value){
$_smarty_tpl->tpl_vars['topicsRow']->_loop = true;
?>
				<a title="" href="#" target="_blank"><?php echo $_smarty_tpl->tpl_vars['topicsRow']->value['title'];?>

				<br><span><?php echo $_smarty_tpl->tpl_vars['topicsRow']->value['date'];?>
</span>
				</a>
			<?php }
if (!$_smarty_tpl->tpl_vars['topicsRow']->_loop) {
?>
				<h1><?php echo $_smarty_tpl->tpl_vars['LNG']->value['news_does_not_exist'];?>
</h1>
			<?php } ?>
			<a title="" href="#" class="more" target="_blank">Ir para o Forum ...</a>
		</div>

	</div>

	<div class="conteiner">
		<link rel='stylesheet' id='style-css' href='./media/css/bjqs.css' type='text/css'>
		<script type='text/javascript' src='./media/js/bjqs.js'></script>


		<?php  $_smarty_tpl->tpl_vars['newsRow'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['newsRow']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['newsList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['newsRow']->key => $_smarty_tpl->tpl_vars['newsRow']->value){
$_smarty_tpl->tpl_vars['newsRow']->_loop = true;
?>
			<div class="news">
				<h2 class="title">
				<a href="index.php?page=news&id=<?php echo $_smarty_tpl->tpl_vars['newsRow']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['newsRow']->value['title'];?>
</a>
				</h2>
				<a href="index.php?page=news&id=<?php echo $_smarty_tpl->tpl_vars['newsRow']->value['id'];?>
"><img src="./media/<?php echo $_smarty_tpl->tpl_vars['newsRow']->value['image'];?>
"/></a>
					<div class="news_gasage">
						<span class="date"><?php echo $_smarty_tpl->tpl_vars['newsRow']->value['date'];?>
</span>
						<p><?php echo $_smarty_tpl->tpl_vars['newsRow']->value['text'];?>
</p>
					</div>
				<a href="index.php?page=news&id=<?php echo $_smarty_tpl->tpl_vars['newsRow']->value['id'];?>
" class="more">More...</a>
			</div>
			<div class="hr"></div>
		<?php }
if (!$_smarty_tpl->tpl_vars['newsRow']->_loop) {
?>
			<h2 class="title" style="padding: 15px;"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['news_does_not_exist'];?>
</h2>
		<?php } ?>
		<a class="news_all" title="" href="index.php?page=news&mode=all">Show all news</a>
	</div>

	<div class="clear"></div>
	
</div>


<footer>

<div id="footer">
  <div class="left_part">
    <div class="block">
      <span><?php echo $_smarty_tpl->tpl_vars['LNG']->value['footer_title_block1'];?>
</span>
      <a href="javascript:;" onclick="$('#login').submit();"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['footer_block1_menu1'];?>
</a>
      <br/><a href="index.php?page=rules"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['footer_block1_menu2'];?>
</a>
      <br/><a href="index.php?page=news&mode=all"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['footer_block1_menu3'];?>
</a>
      <br/><a href="index.php?page=about"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['footer_block1_menu4'];?>
</a>
    </div>

    <div class="block">
      <span><?php echo $_smarty_tpl->tpl_vars['LNG']->value['footer_title_block2'];?>
</span>
      <a href="javascript:;" onclick="$('#login').submit();"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['footer_block2_menu1'];?>
</a>
      <br/><a href="index.php?page=lostPassword"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['footer_block2_menu2'];?>
</a>
    </div>

    <div class="block">
      <span><?php echo $_smarty_tpl->tpl_vars['LNG']->value['footer_title_block3'];?>
</span>
      <a><?php echo $_smarty_tpl->tpl_vars['LNG']->value['footer_block3_menu1'];?>
</a>
      <br/><a href="index.php?page=disclamer"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['footer_block3_menu2'];?>
</a>
      <br/><a href="index.php?page=galery"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['footer_block3_menu3'];?>
</a>
      <br/><a href="index.php?page=jobs"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['footer_block3_menu4'];?>
</a>
    </div>

    <div class="clear"></div>
  </div>

    <div class="right_part"><?php echo $_smarty_tpl->tpl_vars['copyright']->value;?>
<br/><br/></div>

    <div class="clear"></div>

  </div>

</footer>

<div id="boxes">
  <div id="dialog" class="window">
    <div class="dialog_top">
      <span><?php echo $_smarty_tpl->tpl_vars['LNG']->value['popup_login_title'];?>
</span>
      <div class="close"></div>
    </div>


    <form id="login" name="login" action="index.php?page=login" data-action="index.php?page=login" method="post">
        <span class="lable"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['popup_login_login'];?>
</span>
        <input required name="email" id="email" type="text">
      <div class="clear"></div>
        <span class="lable"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['popup_login_mdp'];?>
</span>
        <input required name="password" id="password" type="password">

      <div class="clear"></div>

      <div style="float:left;margin-left:150px;margin-top:17px;">
        <input type="checkbox" id="remember_pass" name="remember_pass" value="false"/>
        <label for="remember_pass" class="checked"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['popup_login_souvient'];?>
</label>
      </div>

      <input type="submit" class="button_mini" value="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['popup_login_button'];?>
"> 
    </form>


    <div class="clear"></div>

    <a title="" href="index.php?page=register" style="float:right;margin-right:25px;"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['popup_login_account'];?>
</a>
    <a title="" href="index.php?page=lostPassword" style="float:right;margin-right:25px;"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['popup_login_recover'];?>
</a>

  </div>

  <div id="mask"></div>

</div>

<div id="dialog" style="display:none;"></div>

<script>
var LoginConfig = {
	'isMultiUniverse': <?php echo json_encode($_smarty_tpl->tpl_vars['isMultiUniverse']->value);?>
,
	'referralEnable' : <?php echo json_encode($_smarty_tpl->tpl_vars['referralEnable']->value);?>
,
	'basePath' : <?php echo json_encode($_smarty_tpl->tpl_vars['basepath']->value);?>

};
</script>
<script>
  (function(i,s,o,g,r,a,m){ i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){ 
  (i[r].q=i[r].q||[]).push(arguments) },i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
   })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-44438409-3', 'auto');
  ga('send', 'pageview');

</script>

  </body>
</html><?php }} ?>