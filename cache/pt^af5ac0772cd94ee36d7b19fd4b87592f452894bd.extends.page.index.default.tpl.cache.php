<?php /* Smarty version Smarty-3.1.13, created on 2015-07-21 12:16:02
         compiled from "/home/stell530/public_html/beta7/styles/templates/login/page.index.default.tpl" */ ?>
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
  'function' => 
  array (
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_55ae6232f2d3e8_63913497',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ae6232f2d3e8_63913497')) {function content_55ae6232f2d3e8_63913497($_smarty_tpl) {?><?php /*  Call merged included template "main.header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("main.header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '163493719955ae6232a87c63-78605160');
content_55ae6232bf93c2_46960283($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "main.header.tpl" */?>
<?php /*  Call merged included template "main.navigation.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("main.navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '163493719955ae6232a87c63-78605160');
content_55ae6232d9bd84_45888188($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "main.navigation.tpl" */?>


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
				<h3>Status do Servidor</h3> Jogadores: <span><?php echo '/*%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/<?php echo $_smarty_tpl->tpl_vars[\'users_amount\']->value;?>
/*/%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/';?>
</span>
				<br>Novos este mês: <span><?php echo '/*%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/<?php echo $_smarty_tpl->tpl_vars[\'new_member\']->value;?>
/*/%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/';?>
</span>
				<br>Novo SdC: <span><?php echo '/*%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/<?php echo $_smarty_tpl->tpl_vars[\'total_hof\']->value;?>
/*/%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/';?>
</span>
				<br>Jogadores ativos: <span><?php echo '/*%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/<?php echo $_smarty_tpl->tpl_vars[\'active\']->value;?>
/*/%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/';?>
</span>
			</div>
			</div>
		</div>

		<div class="forums">
			<h3>Últimos tópicos</h3>
			<div class="hr"></div>
			<?php echo '/*%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/<?php  $_smarty_tpl->tpl_vars[\'topicsRow\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'topicsRow\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'topicsList\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'topicsRow\']->key => $_smarty_tpl->tpl_vars[\'topicsRow\']->value){
$_smarty_tpl->tpl_vars[\'topicsRow\']->_loop = true;
?>/*/%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/';?>

				<a title="" href="#" target="_blank"><?php echo '/*%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/<?php echo $_smarty_tpl->tpl_vars[\'topicsRow\']->value[\'title\'];?>
/*/%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/';?>

				<br><span><?php echo '/*%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/<?php echo $_smarty_tpl->tpl_vars[\'topicsRow\']->value[\'date\'];?>
/*/%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/';?>
</span>
				</a>
			<?php echo '/*%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/<?php }
if (!$_smarty_tpl->tpl_vars[\'topicsRow\']->_loop) {
?>/*/%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/';?>

				<h1><?php echo '/*%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'news_does_not_exist\'];?>
/*/%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/';?>
</h1>
			<?php echo '/*%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/<?php } ?>/*/%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/';?>

			<a title="" href="#" class="more" target="_blank">Ir para o Forum ...</a>
		</div>

	</div>

	<div class="conteiner">
		<link rel='stylesheet' id='style-css' href='./media/css/bjqs.css' type='text/css'>
		<script type='text/javascript' src='./media/js/bjqs.js'></script>


		<?php echo '/*%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/<?php  $_smarty_tpl->tpl_vars[\'newsRow\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'newsRow\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'newsList\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'newsRow\']->key => $_smarty_tpl->tpl_vars[\'newsRow\']->value){
$_smarty_tpl->tpl_vars[\'newsRow\']->_loop = true;
?>/*/%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/';?>

			<div class="news">
				<h2 class="title">
				<a href="index.php?page=news&id=<?php echo '/*%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/<?php echo $_smarty_tpl->tpl_vars[\'newsRow\']->value[\'id\'];?>
/*/%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/';?>
"><?php echo '/*%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/<?php echo $_smarty_tpl->tpl_vars[\'newsRow\']->value[\'title\'];?>
/*/%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/';?>
</a>
				</h2>
				<a href="index.php?page=news&id=<?php echo '/*%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/<?php echo $_smarty_tpl->tpl_vars[\'newsRow\']->value[\'id\'];?>
/*/%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/';?>
"><img src="./media/<?php echo '/*%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/<?php echo $_smarty_tpl->tpl_vars[\'newsRow\']->value[\'image\'];?>
/*/%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/';?>
"/></a>
					<div class="news_gasage">
						<span class="date"><?php echo '/*%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/<?php echo $_smarty_tpl->tpl_vars[\'newsRow\']->value[\'date\'];?>
/*/%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/';?>
</span>
						<p><?php echo '/*%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/<?php echo $_smarty_tpl->tpl_vars[\'newsRow\']->value[\'text\'];?>
/*/%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/';?>
</p>
					</div>
				<a href="index.php?page=news&id=<?php echo '/*%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/<?php echo $_smarty_tpl->tpl_vars[\'newsRow\']->value[\'id\'];?>
/*/%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/';?>
" class="more">More...</a>
			</div>
			<div class="hr"></div>
		<?php echo '/*%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/<?php }
if (!$_smarty_tpl->tpl_vars[\'newsRow\']->_loop) {
?>/*/%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/';?>

			<h2 class="title" style="padding: 15px;"><?php echo '/*%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'news_does_not_exist\'];?>
/*/%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/';?>
</h2>
		<?php echo '/*%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/<?php } ?>/*/%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/';?>

		<a class="news_all" title="" href="index.php?page=news&mode=all">Show all news</a>
	</div>

	<div class="clear"></div>
	
</div>


<?php /*  Call merged included template "main.footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("main.footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '163493719955ae6232a87c63-78605160');
content_55ae6232e5cad3_87367219($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "main.footer.tpl" */?><?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2015-07-21 12:16:02
         compiled from "/home/stell530/public_html/beta7/styles/templates/login/main.header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_55ae6232bf93c2_46960283')) {function content_55ae6232bf93c2_46960283($_smarty_tpl) {?><!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="<?php echo '/*%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/';?>
" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="<?php echo '/*%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/';?>
" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<?php echo '/*%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/';?>
" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<?php echo '/*%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/';?>
" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> 
<html lang="<?php echo '/*%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/';?>
" class="no-js"> <!--<![endif]-->
	<head>
		
		
		<link rel="stylesheet" type="text/css" href="media/css/bjqs.css"/>
		<link href="media/css/style.css" rel="stylesheet" type="text/css"/>
		<link href="media/css/dialog.css" rel="stylesheet" type="text/css"/>
		<link rel="stylesheet" href="media/css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8"/>
		<link href="media/css/vidjet.css" rel="stylesheet" type="text/css"/>
		<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
		<title><?php echo '/*%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/<?php echo $_smarty_tpl->tpl_vars[\'gameName\']->value;?>
/*/%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/';?>
</title>
		<meta name="generator" content="Stellar Wars <?php echo '/*%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/';?>
">
		<!-- 
			This website is powered by 2Moons <?php echo '/*%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/';?>

			2Moons is a free Space Browsergame initially created by Jan Kröpke and licensed under GNU/GPL.
			2Moons is copyright 2009-2013 of Jan Kröpke. Extensions are copyright of their respective owners.
			Information and contribution at http://2moons.cc/
		-->
		<meta name="keywords" content="<?php echo '/*%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'header_keywords\'];?>
/*/%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/';?>
">
		<meta name="description" content="<?php echo '/*%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/<?php echo $_smarty_tpl->tpl_vars[\'gameName\']->value;?>
/*/%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/';?>
: <?php echo '/*%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'header_meta_description\'];?>
/*/%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/';?>
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
		<script><?php echo '/*%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'code\']->value)){?>/*/%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/';?>
var loginError = <?php echo '/*%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/<?php echo json_encode($_smarty_tpl->tpl_vars[\'code\']->value);?>
/*/%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/';?>
;<?php echo '/*%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/<?php }?>/*/%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/';?>
</script>
		<script><?php echo '/*%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/<?php if ($_smarty_tpl->tpl_vars[\'code\']->value){?>/*/%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/';?>
alert(<?php echo '/*%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/<?php echo json_encode($_smarty_tpl->tpl_vars[\'code\']->value);?>
/*/%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/';?>
);<?php echo '/*%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/<?php }?>/*/%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/';?>
</script>	
	</head>
<body id="<?php echo (($tmp = @htmlspecialchars($_GET['page']))===null||$tmp==='' ? 'overview' : $tmp);?>
" class="<?php echo '/*%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/<?php echo $_smarty_tpl->tpl_vars[\'bodyclass\']->value;?>
/*/%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/';?>
">
	<div id="page"><?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2015-07-21 12:16:02
         compiled from "/home/stell530/public_html/beta7/styles/templates/login/main.navigation.tpl" */ ?>
<?php if ($_valid && !is_callable('content_55ae6232d9bd84_45888188')) {function content_55ae6232d9bd84_45888188($_smarty_tpl) {?><div id="body">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="./scripts/login/selectLang.js"></script>
<script type="text/javascript" src="./scripts/login/FormulaireLang.js"></script>
		 <header>
			 <div id="top_band">
				<span style="padding-top: 13px;"><?php echo '/*%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'main_navigation_menu_head1\'];?>
/*/%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/';?>
</span>
				<!-- Ajout du choix de la langue en jquery -->
				<?php echo '/*%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/<?php if (count($_smarty_tpl->tpl_vars[\'languages\']->value)>1){?>/*/%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/';?>

			    <div id="polyglotLanguageSwitcher" style="padding: 6px;">
					<form action="">
						<select id="polyglot-language-options">
						<?php echo '/*%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/<?php  $_smarty_tpl->tpl_vars[\'langName\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'langName\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'langKey\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'languages\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'langName\']->key => $_smarty_tpl->tpl_vars[\'langName\']->value){
$_smarty_tpl->tpl_vars[\'langName\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'langKey\']->value = $_smarty_tpl->tpl_vars[\'langName\']->key;
?>/*/%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/';?>

							<option id="<?php echo '/*%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/<?php echo $_smarty_tpl->tpl_vars[\'langKey\']->value;?>
/*/%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/';?>
" value="<?php echo '/*%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/<?php echo $_smarty_tpl->tpl_vars[\'langKey\']->value;?>
/*/%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/';?>
" selected><?php echo '/*%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/<?php echo $_smarty_tpl->tpl_vars[\'langName\']->value;?>
/*/%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/';?>
</option>
						<?php echo '/*%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/<?php } ?>/*/%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/';?>

						</select>
					</form>
				</div>
				<?php echo '/*%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/<?php }?>/*/%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/';?>

				<!-- Fin du choix de la langue en jquery -->
		<form id="login" name="login" action="index.php?page=register" data-action="index.php?page=register" method="post">
				 <a href="javascript:;" onclick="$('#login').submit();" style="margin-right: 10px;"><?php echo '/*%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'main_navigation_menu_head2\'];?>
/*/%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/';?>
</a>
				 <div id="pencil_edit">&nbsp;|&nbsp;</div>
				 <a href="/users/login" name="modal"><?php echo '/*%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'main_navigation_menu_head3\'];?>
/*/%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/';?>
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
			 	<a href="javascript:;" onclick="$('#login').submit();"><?php echo '/*%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'main_navigation_menu1\'];?>
/*/%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/';?>
</a>
			 </div>
			 <div class="left_part">
				 <a href="index.php"><?php echo '/*%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'main_navigation_menu2\'];?>
/*/%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/';?>
</a>
				 <div class="seporator"></div>
				 <a href="index.php?page=about"><?php echo '/*%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'main_navigation_menu3\'];?>
/*/%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/';?>
</a>
				 <div class="seporator"></div>
				 <a href="index.php?page=galery"><?php echo '/*%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'main_navigation_menu4\'];?>
/*/%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/';?>
</a>
				 <div class="seporator"></div>
				 <a href="#"><?php echo '/*%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'main_navigation_menu5\'];?>
/*/%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/';?>
</a>
				 <div class="seporator"></div>
				 <a href="#"><?php echo '/*%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'main_navigation_menu6\'];?>
/*/%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/';?>
</a>
			 </div>
		 </div>
	 </form><?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2015-07-21 12:16:02
         compiled from "/home/stell530/public_html/beta7/styles/templates/login/main.footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_55ae6232e5cad3_87367219')) {function content_55ae6232e5cad3_87367219($_smarty_tpl) {?><footer>

<div id="footer">
  <div class="left_part">
    <div class="block">
      <span><?php echo '/*%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'footer_title_block1\'];?>
/*/%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/';?>
</span>
      <a href="javascript:;" onclick="$('#login').submit();"><?php echo '/*%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'footer_block1_menu1\'];?>
/*/%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/';?>
</a>
      <br/><a href="index.php?page=rules"><?php echo '/*%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'footer_block1_menu2\'];?>
/*/%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/';?>
</a>
      <br/><a href="index.php?page=news&mode=all"><?php echo '/*%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'footer_block1_menu3\'];?>
/*/%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/';?>
</a>
      <br/><a href="index.php?page=about"><?php echo '/*%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'footer_block1_menu4\'];?>
/*/%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/';?>
</a>
    </div>

    <div class="block">
      <span><?php echo '/*%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'footer_title_block2\'];?>
/*/%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/';?>
</span>
      <a href="javascript:;" onclick="$('#login').submit();"><?php echo '/*%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'footer_block2_menu1\'];?>
/*/%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/';?>
</a>
      <br/><a href="index.php?page=lostPassword"><?php echo '/*%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'footer_block2_menu2\'];?>
/*/%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/';?>
</a>
    </div>

    <div class="block">
      <span><?php echo '/*%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'footer_title_block3\'];?>
/*/%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/';?>
</span>
      <a><?php echo '/*%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'footer_block3_menu1\'];?>
/*/%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/';?>
</a>
      <br/><a href="index.php?page=disclamer"><?php echo '/*%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'footer_block3_menu2\'];?>
/*/%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/';?>
</a>
      <br/><a href="index.php?page=galery"><?php echo '/*%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'footer_block3_menu3\'];?>
/*/%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/';?>
</a>
      <br/><a href="index.php?page=jobs"><?php echo '/*%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'footer_block3_menu4\'];?>
/*/%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/';?>
</a>
    </div>

    <div class="clear"></div>
  </div>

    <div class="right_part"><?php echo '/*%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/<?php echo $_smarty_tpl->tpl_vars[\'copyright\']->value;?>
/*/%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/';?>
<br/><br/></div>

    <div class="clear"></div>

  </div>

</footer>

<div id="boxes">
  <div id="dialog" class="window">
    <div class="dialog_top">
      <span><?php echo '/*%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'popup_login_title\'];?>
/*/%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/';?>
</span>
      <div class="close"></div>
    </div>


    <form id="login" name="login" action="index.php?page=login" data-action="index.php?page=login" method="post">
        <span class="lable"><?php echo '/*%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'popup_login_login\'];?>
/*/%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/';?>
</span>
        <input required name="email" id="email" type="text">
      <div class="clear"></div>
        <span class="lable"><?php echo '/*%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'popup_login_mdp\'];?>
/*/%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/';?>
</span>
        <input required name="password" id="password" type="password">

      <div class="clear"></div>

      <div style="float:left;margin-left:150px;margin-top:17px;">
        <input type="checkbox" id="remember_pass" name="remember_pass" value="false"/>
        <label for="remember_pass" class="checked"><?php echo '/*%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'popup_login_souvient\'];?>
/*/%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/';?>
</label>
      </div>

      <input type="submit" class="button_mini" value="<?php echo '/*%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'popup_login_button\'];?>
/*/%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/';?>
"> 
    </form>


    <div class="clear"></div>

    <a title="" href="index.php?page=register" style="float:right;margin-right:25px;"><?php echo '/*%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'popup_login_account\'];?>
/*/%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/';?>
</a>
    <a title="" href="index.php?page=lostPassword" style="float:right;margin-right:25px;"><?php echo '/*%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'popup_login_recover\'];?>
/*/%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/';?>
</a>

  </div>

  <div id="mask"></div>

</div>

<div id="dialog" style="display:none;"></div>

<script>
var LoginConfig = {
	'isMultiUniverse': <?php echo '/*%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/<?php echo json_encode($_smarty_tpl->tpl_vars[\'isMultiUniverse\']->value);?>
/*/%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/';?>
,
	'referralEnable' : <?php echo '/*%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/<?php echo json_encode($_smarty_tpl->tpl_vars[\'referralEnable\']->value);?>
/*/%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/';?>
,
	'basePath' : <?php echo '/*%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/<?php echo json_encode($_smarty_tpl->tpl_vars[\'basepath\']->value);?>
/*/%%SmartyNocache:163493719955ae6232a87c63-78605160%%*/';?>

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