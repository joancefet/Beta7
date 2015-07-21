<?php /*%%SmartyHeaderCode:2992153855ae661b6a47e3-66694985%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a38ced95311516a60a1b7c357fefcee51a1ca947' => 
    array (
      0 => '/home/stell530/public_html/beta7/styles/templates/adm/ShowIndexPage.tpl',
      1 => 1436892736,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2992153855ae661b6a47e3-66694985',
  'variables' => 
  array (
    'adm_cp_title' => 1,
    'game_name' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_55ae661b70c188_66216617',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ae661b70c188_66216617')) {function content_55ae661b70c188_66216617($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php echo $_smarty_tpl->tpl_vars['adm_cp_title']->value;?>
 &bull; <?php echo $_smarty_tpl->tpl_vars['game_name']->value;?>
</title>
<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
<script type="text/javascript">
if (top.location != self.location) top.location = self.location;
</script>
</head>

	<frameset frameborder="0">
		
		<frame src="admin.php?page=overview" name="Hauptframe" scrolling="auto" noresize="noresize" id="mainFrame">
	</frameset>
</frameset>
</html><?php }} ?>