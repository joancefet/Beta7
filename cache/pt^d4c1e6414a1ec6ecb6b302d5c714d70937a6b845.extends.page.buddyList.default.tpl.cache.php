<?php /* Smarty version Smarty-3.1.13, created on 2015-07-21 09:48:35
         compiled from "/home/stell530/public_html/beta7/styles/templates/game/page.buddyList.default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:90674818255ae3fa3bc5f94-00736401%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4c1e6414a1ec6ecb6b302d5c714d70937a6b845' => 
    array (
      0 => '/home/stell530/public_html/beta7/styles/templates/game/page.buddyList.default.tpl',
      1 => 1436892737,
      2 => 'file',
    ),
    '9f505e718d8a877c67b745977f378c1bba295f11' => 
    array (
      0 => '/home/stell530/public_html/beta7/styles/templates/game/layout.full.tpl',
      1 => 1436892736,
      2 => 'file',
    ),
    'b74cecb32d9acd6c8f33dcb0d12b1c7f3f8ebd3d' => 
    array (
      0 => '/home/stell530/public_html/beta7/styles/templates/game/main.header.tpl',
      1 => 1436892737,
      2 => 'file',
    ),
    '843a0eed50fd3737d7533a0c823aa78486dced0b' => 
    array (
      0 => '/home/stell530/public_html/beta7/styles/templates/game/head_menu.tpl',
      1 => 1436892737,
      2 => 'file',
    ),
    '83c96d425525bae57a311ad8c45069b10459d6e0' => 
    array (
      0 => '/home/stell530/public_html/beta7/styles/templates/game/main.topnav.tpl',
      1 => 1436892736,
      2 => 'file',
    ),
    '04d3581faf75ccdc4644ec6d92bb3b0148b04ca9' => 
    array (
      0 => '/home/stell530/public_html/beta7/styles/templates/game/main.navigation.tpl',
      1 => 1437433241,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '90674818255ae3fa3bc5f94-00736401',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'hasAdminAccess' => 1,
    'LNG' => 1,
    'cronjobs' => 1,
    'cronjob' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_55ae3fa460d033_80894118',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ae3fa460d033_80894118')) {function content_55ae3fa460d033_80894118($_smarty_tpl) {?><?php /*  Call merged included template "main.header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("main.header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('bodyclass'=>"full"), 0, '90674818255ae3fa3bc5f94-00736401');
content_55ae3fa3c24548_37368213($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "main.header.tpl" */?>
<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'hasAdminAccess\']->value){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

<div class="globalWarning">
<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'admin_access_1\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
 <a id="drop-admin"><?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'admin_access_link\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
</a><?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'admin_access_2\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

</div>
<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

<?php /*  Call merged included template "head_menu.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("head_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '90674818255ae3fa3bc5f94-00736401');
content_55ae3fa3d75b64_11301956($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "head_menu.tpl" */?>
<?php /*  Call merged included template "main.topnav.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("main.topnav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '90674818255ae3fa3bc5f94-00736401');
content_55ae3fa3f2bb20_03372229($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "main.topnav.tpl" */?>
<?php /*  Call merged included template "main.navigation.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("main.navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '90674818255ae3fa3bc5f94-00736401');
content_55ae3fa41953a0_04769795($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "main.navigation.tpl" */?>


<div id="page">
<div id="content">
<div id="ally_content" class="conteiner">
    <div class="gray_stripe" style="padding-right:0;">
    	<?php echo $_smarty_tpl->tpl_vars['LNG']->value['bu_requests'];?>

        <a href="game.php?page=EnnemiesList" class="right_flank button"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['hnav_ennemies'];?>
</a>
    </div>
    <table class="tablesorter ally_ranks">
	<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'otherRequestList\']->value)){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

<tr><th colspan="5" style="text-align:center"><?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bu_partners\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
</th></tr>
	<tr>
	<th><?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bu_player\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
</td>
	<th><?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bu_alliance\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
</th>
	<th><?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bu_coords\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
</th>
	<th><?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bu_online\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
</th>
	<th><?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bu_action\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
</th>
</tr>
          
	
	
<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php  $_smarty_tpl->tpl_vars[\'otherRequestRow\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'otherRequestRow\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'otherRequestID\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'otherRequestList\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'otherRequestRow\']->key => $_smarty_tpl->tpl_vars[\'otherRequestRow\']->value){
$_smarty_tpl->tpl_vars[\'otherRequestRow\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'otherRequestID\']->value = $_smarty_tpl->tpl_vars[\'otherRequestRow\']->key;
?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

<tr>
	<td><a href="#" onclick="return Dialog.PM(<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'otherRequestRow\']->value[\'id\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
);"><?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'otherRequestRow\']->value[\'username\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
</a></td>
	<td><?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars[\'otherRequestRow\']->value[\'ally_name\'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
<a href="game.php?page=alliance&amp;mode=info&amp;id=<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'otherRequestRow\']->value[\'ally_id\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
"><?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'otherRequestRow\']->value[\'ally_name\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
</a><?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }else{ ?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
-<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
</td>
	<td><a href="game.php?page=galaxy&amp;galaxy=<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'otherRequestRow\']->value[\'galaxy\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
&amp;system=<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'otherRequestRow\']->value[\'system\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
">[<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'otherRequestRow\']->value[\'galaxy\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
:<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'otherRequestRow\']->value[\'system\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
:<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'otherRequestRow\']->value[\'planet\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
]</a></td>
	<td><?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'otherRequestRow\']->value[\'text\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
</td>
	<td><a href="game.php?page=buddyList&amp;mode=accept&amp;id=<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'otherRequestID\']->value;?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
"><img src="styles/resource/images/true.png" alt="<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bu_accept\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
" title="<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bu_accept\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
"></a><a href="game.php?page=buddyList&amp;mode=delete&amp;id=<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'otherRequestID\']->value;?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
"><img src="styles/resource/images/false.png" alt="<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bu_decline\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
" title="<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bu_decline\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
"></a></td>
</tr>
<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }
if (!$_smarty_tpl->tpl_vars[\'otherRequestRow\']->_loop) {
?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

<tr><td colspan="5"><?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bu_no_request\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
</td></tr>
<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php } ?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'myRequestList\']->value)){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

<tr><th colspan="5" style="text-align:center"><?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bu_my_requests\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
</th></tr>
<tr>
	<th><?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bu_player\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
</th>
	<th><?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bu_alliance\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
</th>
	<th><?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bu_coords\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
</th>
	<th><?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bu_text\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
</th>
	<th><?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bu_action\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
</th>
</tr>
<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php  $_smarty_tpl->tpl_vars[\'myRequestRow\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'myRequestRow\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'myRequestID\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'myRequestList\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'myRequestRow\']->key => $_smarty_tpl->tpl_vars[\'myRequestRow\']->value){
$_smarty_tpl->tpl_vars[\'myRequestRow\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'myRequestID\']->value = $_smarty_tpl->tpl_vars[\'myRequestRow\']->key;
?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

<tr>
	<td><a href="#" onclick="return Dialog.PM(<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'myRequestRow\']->value[\'id\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
);"><?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'myRequestRow\']->value[\'username\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
</a></td>
	<td><?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars[\'myRequestRow\']->value[\'ally_name\'];?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
<a href="game.php?page=alliance&amp;mode=info&amp;id=<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'myRequestRow\']->value[\'ally_id\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
"><?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'myRequestRow\']->value[\'ally_name\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
</a><?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }else{ ?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
-<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
</td>
	<td><a href="game.php?page=galaxy&amp;galaxy=<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'myRequestRow\']->value[\'galaxy\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
&amp;system=<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'myRequestRow\']->value[\'system\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
">[<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'myRequestRow\']->value[\'galaxy\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
:<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'myRequestRow\']->value[\'system\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
:<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'myRequestRow\']->value[\'planet\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
]</a></td>
	<td><?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'myRequestRow\']->value[\'text\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
</td>
	<td><a href="game.php?page=buddyList&amp;mode=delete&amp;id=<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'myRequestID\']->value;?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
"><img src="styles/resource/images/false.png" alt="<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bu_cancel_request\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
" title="<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bu_cancel_request\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
"></a></td>
</tr>
<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }
if (!$_smarty_tpl->tpl_vars[\'myRequestRow\']->_loop) {
?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

<tr><td colspan="5"><?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bu_no_request\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
</td></tr>
<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php } ?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

<tr><th colspan="5" style="text-align:center"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['bu_partners'];?>
</th></tr>
	<tr>
	<th><?php echo $_smarty_tpl->tpl_vars['LNG']->value['bu_player'];?>
</td>
	<th><?php echo $_smarty_tpl->tpl_vars['LNG']->value['bu_alliance'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['LNG']->value['bu_coords'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['LNG']->value['bu_online'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['LNG']->value['bu_action'];?>
</th>
</tr>
<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php  $_smarty_tpl->tpl_vars[\'myBuddyRow\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'myBuddyRow\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'myBuddyID\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'myBuddyList\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'myBuddyRow\']->key => $_smarty_tpl->tpl_vars[\'myBuddyRow\']->value){
$_smarty_tpl->tpl_vars[\'myBuddyRow\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'myBuddyID\']->value = $_smarty_tpl->tpl_vars[\'myBuddyRow\']->key;
?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

<tr>
	<td><a href="#" onclick="return Dialog.PM(<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'myBuddyRow\']->value[\'id\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
);"><?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'myBuddyRow\']->value[\'username\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
</a></td>
	<td><?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars[\'myBuddyRow\']->value[\'ally_name\'];?>
<?php $_tmp3=ob_get_clean();?><?php if ($_tmp3){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
<a href="game.php?page=alliance&amp;mode=info&amp;id=<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'myBuddyRow\']->value[\'ally_id\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
"><?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'myBuddyRow\']->value[\'ally_name\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
</a><?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }else{ ?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
-<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
</td>
	<td><a href="game.php?page=galaxy&amp;galaxy=<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'myBuddyRow\']->value[\'galaxy\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
&amp;system=<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'myBuddyRow\']->value[\'system\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
">[<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'myBuddyRow\']->value[\'galaxy\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
:<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'myBuddyRow\']->value[\'system\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
:<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'myBuddyRow\']->value[\'planet\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
]</a></td>
	<td>
	<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'myBuddyRow\']->value[\'onlinetime\']<4){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

	<span style="color:lime"><?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bu_connected\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
</span>
	<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }elseif($_smarty_tpl->tpl_vars[\'myBuddyRow\']->value[\'onlinetime\']>=4&&$_smarty_tpl->tpl_vars[\'myBuddyRow\']->value[\'onlinetime\']<=15){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

	<span style="color:yellow"><?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'myBuddyRow\']->value[\'onlinetime\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
 <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bu_minutes\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
</span>
	<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }else{ ?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

	<span style="color:red"><?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bu_disconnected\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
</span>
	<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

	</td>
	<td><a href="game.php?page=buddyList&amp;mode=delete&amp;id=<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'myBuddyID\']->value;?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
"><img src="styles/resource/images/false.png" alt="<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bu_delete\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
" title="<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bu_delete\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
"></a></td>
</tr>
<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }
if (!$_smarty_tpl->tpl_vars[\'myBuddyRow\']->_loop) {
?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

 <tr><td colspan="5"><?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bu_no_buddys\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
</td></tr><?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php } ?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

</table>
</div>
</div>
</div>
            <div class="clear"></div>            
        </div>

<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php  $_smarty_tpl->tpl_vars[\'cronjob\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'cronjob\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'cronjobs\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'cronjob\']->key => $_smarty_tpl->tpl_vars[\'cronjob\']->value){
$_smarty_tpl->tpl_vars[\'cronjob\']->_loop = true;
?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
<img src="cronjob.php?cronjobID=<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'cronjob\']->value;?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
" alt=""><?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php } ?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->getSubTemplate ("main.footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

<?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2015-07-21 09:48:35
         compiled from "/home/stell530/public_html/beta7/styles/templates/game/main.header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_55ae3fa3c24548_37368213')) {function content_55ae3fa3c24548_37368213($_smarty_tpl) {?><!DOCTYPE html>

<!--[if lt IE 7 ]> <html lang="<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
" class="no-js"> <!--<![endif]-->
<head>
	<title><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_buddylist'];?>
 - <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'uni_name\']->value;?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
 - <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'game_name\']->value;?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
</title>
	<meta name="generator" content="2Moons <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
">
	<!-- 
		This website is powered by 2Moons <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

		2Moons is a free Space Browsergame initially created by Jan Kröpke and licensed under GNU/GPL.
		2Moons is copyright 2009-2013 of Jan Kröpke. Extensions are copyright of their respective owners.
		Information and contribution at http://2moons.cc/
	-->
	<?php if (!empty($_smarty_tpl->tpl_vars['goto']->value)){?>
	<meta http-equiv="refresh" content="<?php echo $_smarty_tpl->tpl_vars['gotoinsec']->value;?>
;URL=<?php echo $_smarty_tpl->tpl_vars['goto']->value;?>
">
	<?php }?>
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
	var ServerTimezoneOffset = <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'Offset\']->value;?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
;
	var serverTime 	= new Date(<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[0];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
, <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[1]-1;?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
, <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[2];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
, <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[3];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
, <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[4];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
, <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[5];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
);
	var startTime	= serverTime.getTime();
	var localTime 	= serverTime;
	var localTS 	= startTime;
	var Gamename	= document.title;
	var Ready		= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['ready'];?>
";
	var Skin		= "<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
";
	var Lang		= "<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
";
	var head_info	= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['fcm_info'];?>
";
	var auth		= <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo (($tmp = @$_smarty_tpl->tpl_vars[\'authlevel\']->value)===null||$tmp===\'\' ? \'0\' : $tmp);?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
;
	var days 		= <?php echo (($tmp = @json_encode($_smarty_tpl->tpl_vars['LNG']->value['week_day']))===null||$tmp==='' ? '[]' : $tmp);?>
 
	var months 		= <?php echo (($tmp = @json_encode($_smarty_tpl->tpl_vars['LNG']->value['months']))===null||$tmp==='' ? '[]' : $tmp);?>
 ;
	var tdformat	= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['js_tdformat'];?>
";
	var queryString	= "<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo strtr($_smarty_tpl->tpl_vars[\'queryString\']->value, array("\\\\" => "\\\\\\\\", "\'" => "\\\\\'", "\\"" => "\\\\\\"", "\\r" => "\\\\r", "\\n" => "\\\\n", "</" => "<\\/" ));?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
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
	<script type="text/javascript" src="./scripts/l18n/validationEngine/jquery.validationEngine-<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
.js"></script>
	<script type="text/javascript" src="./scripts/base/tooltip.js"></script>
	<script type="text/javascript" src="./scripts/game/base.js"></script>
	<script type="text/javascript" src="./scripts/game/newmail.js"></script>
	<script type="text/javascript" src="./scripts/game/qtip.js"></script>
	<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php  $_smarty_tpl->tpl_vars[\'scriptname\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'scriptname\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'scripts\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'scriptname\']->key => $_smarty_tpl->tpl_vars[\'scriptname\']->value){
$_smarty_tpl->tpl_vars[\'scriptname\']->_loop = true;
?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

	<script type="text/javascript" src="./scripts/game/<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'scriptname\']->value;?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
.js"></script>
	<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php } ?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

	
	<script type="text/javascript">
	$(function() {
		<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'execscript\']->value;?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

	});
	</script>
	
	
	<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'manual_11_step\']->value==0){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

	<script type="text/javascript">
	$(function() {
		qtips('#attack', 'Attention to your planet flies attacking fleet', 'bottomMiddle', 'topLeft');
setTimeout(function() { qtips('.over', 'Go to the review, to view the attackers fleet', 'bottomMiddle', 'topLeft') }, 4000);
setInterval(function() { AJAX() }, 6000)
	});
	</script>
	

	
	
	<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

	

	
	<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'manual_15_step\']->value==0){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

	<script type="text/javascript">
	$(function() {
		qtips('#munu_shipyard_fleet ', 'Go to Fleet. <br> Here you can build a battle fleet, attacks on other players or flight expedition.', 'rightMiddle', 'leftMiddle');
setInterval(function() { AJAX() }, 6000)
	});
	</script>
	<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

	
	<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'manual_24_step\']->value==0){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

	<script type="text/javascript">
	$(function() {
		qtips('#munu_academy ', 'Go to the Academy. <br> Here you will be able to enhance skills available to you by selecting one of three trees, broken down my classification..', 'rightMiddle', 'leftMiddle');
setInterval(function() { AJAX() }, 6000)
	});
	</script>
	<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

	
	<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'manual_26_step\']->value==0){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

	<script type="text/javascript">
	$(function() {
		qtips('#achievements_name ', 'Go to Achievements. <br> Here you can choose suitable for achieving your development strategy.', 'rightMiddle', 'leftMiddle');
setInterval(function() { AJAX() }, 6000)
	});
	</script>
	<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

	
	<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'manual_17_step\']->value==0){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

	<script type="text/javascript">
	$(function() {
		qtips('#munu_galaxy ', 'Go to the Galaxy. <br> This map of the universe, the planet where all the players are displayed.', 'rightMiddle', 'leftMiddle');
setInterval(function() { AJAX() }, 6000)
	});
	</script>
	
	<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

	
	<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'manual_19_step\']->value==0){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

	
	<script type="text/javascript">
	$(function() {
		qtips('.over ', 'Go to the review, to see the fleet sent for recycling', 'bottomMiddle', 'topLeft');
setInterval(function() { AJAX() }, 6000)
	});
	</script>
	
	<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

	
	
	<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'manual_21_step\']->value==0){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

	<script type="text/javascript">
	$(function() {
		qtips('#munu_senat ', 'Go to Senate. <br> Here you can hire experts in various categories that help grown their Empire.', 'rightMiddle', 'leftMiddle');
setInterval(function() { AJAX() }, 6000)
	});
	</script>
	
	<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

	
	
	
	
	<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'manual_13_step\']->value==0){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

	<script type="text/javascript">
	$(function() {
		qtips('.mesages ', 'Go to messages. <br> Red figure beside notifies you about the number of unread messages.', 'bottomMiddle', 'topMiddle');
setInterval(function() { AJAX() }, 6000)
	});
	</script>
		<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

	<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'manual_5_step\']->value==0){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

	<script type="text/javascript">
	$(function() {
setTimeout(function() { qtips('#munu_research', 'Log in here, for then that would protect against espionage.', 'rightMiddle', 'leftMiddle') }, 4000);
setInterval(function() { AJAX() }, 6000)
	});
	</script>
	
	<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

	
	<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'manual_8_step\']->value==0){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

	
	<script type="text/javascript">
	$(function() {
		qtips('#munu_shipyard_defense ', 'Go to Defense.<br>Here you will be able to increase the protection of the planet. ', 'rightMiddle', 'leftMiddle');
setInterval(function() { AJAX() }, 6000)
	});
	</script>
	
	<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

	
	
	
	
	<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'manuel_step_1_1\']->value==0){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

	
		<script type="text/javascript">
	
	$(function() {
		
qtips('#munu_build ', 'Go to Buildings.', 'rightMiddle', 'leftMiddle');
setInterval(function() { AJAX() }, 6000)
	});
	</script>
	<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

	

	<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'manual_step_3\']->value==0){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

	<script type="text/javascript">
	$(function() {
		qtips('#espionage ', 'Attention! Spy on your planet.', 'bottomMiddle', 'topLeft');
setTimeout(function() { qtips('.over ', 'Go to Overview .', 'bottomMiddle', 'topLeft') }, 3000);

setInterval(function() { AJAX() }, 6000)
	});
	</script>
	<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

	
	
	
	
	
	
	
	
	
	
	
	
	<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'manual_step_1\']->value==0){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

	
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
	<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>


   
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

<body id="<?php echo (($tmp = @htmlspecialchars($_GET['page']))===null||$tmp==='' ? 'overview' : $tmp);?>
" class="<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'bodyclass\']->value;?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
" >
	<div id="tooltip" class="tip"></div><?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2015-07-21 09:48:35
         compiled from "/home/stell530/public_html/beta7/styles/templates/game/head_menu.tpl" */ ?>
<?php if ($_valid && !is_callable('content_55ae3fa3d75b64_11301956')) {function content_55ae3fa3d75b64_11301956($_smarty_tpl) {?>
<div id="header">
            	
                <div id="top_nav">
                
                	<div id="top_nav_part_left">
                        
                        <a title="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['hnav_overview'];?>
" <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'manual_19_step\']->value==0){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
onclick="starttraining11()" <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
 <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'manual_11_step\']->value==0){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
onclick="starttraining6()" <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
 <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'manual_step_3\']->value==0){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
onclick="starttraining3()" <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
href="game.php?page=overview">
                            <span class="over"></span>
                        </a>
                        <a title="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['hnav_empire'];?>
" href="game.php?page=imperium">
                            <span class="imperia"></span>
                        </a>
                        
                        <div class="separator_nav"></div>
                        
                        <a title="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['hnav_stats'];?>
" href="game.php?page=statistics">
                            <span class="stats"></span>
                        </a>
                        <a title="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['hnav_hof'];?>
" href="game.php?page=battleHall">
                            <span class="topbk"></span>
                        </a>
                        <a title="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['hnav_record'];?>
" href="game.php?page=records">
                            <span class="record"></span>
                        </a>
                                              
                        <div class="separator_nav"></div>
                        
                        <a title="Chat" href="game.php?page=chat">
                            <span class="chat"></span>
                        </a>
                        <a title="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['hnav_forum'];?>
" href="?page=board" target="_blank">
                            <span class="forum"></span>
                        </a>
                                             	
					

<a id="a_mesage" href="game.php?page=messages" title="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['hnav_message'];?>
">

    <span class="mesages"></span>
    <span id="new_email" class="new_email" <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'new_message\']->value==0){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
style="display:none;"<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
>

        <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'new_message\']->value;?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>


    </span>

</a>						
                    </div>                    
                
                	<div class="mini_planet_navigation">
                    	                        <span class="link_back urlpalnet"  url="cp=<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'previous_planet\']->value==\'\'){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'id\']->value;?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }else{ ?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'previous_planet\']->value;?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
"></span>
                                                                        <span class="link_next urlpalnet" url="cp=<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'next_planet\']->value==\'\'){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'id\']->value;?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }else{ ?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'next_planet\']->value;?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
"></span>
                                            </div>
                  
<div id="planet_select">
                    	<div class="active_panet">
                    		<div class="name_palnet"><?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'AUPLANETS\']->value;?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
</div> 
                            <span class="ico_build"></span>                            
                            <div class="coordinates_palnet">[<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'AUGAL\']->value;?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
:<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'AUST\']->value;?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
:<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'AUPLA\']->value;?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
]</div>
                            <div class="clear"></div>
                        </div>
                        <div id="list_palnet">
						<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php  $_smarty_tpl->tpl_vars[\'i\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'i\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'k\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'AllPlanets\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'i\']->key => $_smarty_tpl->tpl_vars[\'i\']->value){
$_smarty_tpl->tpl_vars[\'i\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'k\']->value = $_smarty_tpl->tpl_vars[\'i\']->key;
?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

                        	                            <div class="separator_h"></div> 
                                                         
                            <div class="palnet_row active_palnet_row">
                            	<div class="fleet_indicators">
                                	<img id="p211736m1" style="display:none;" src="styles/images/iconav/p_select_attack.png" alt="" class="tooltip" data-tooltip-content="planet attack">                                    
                                    <img id="p211736m12" style="display:none;" src="styles/images/iconav/p_select_grab.png" alt="" class="tooltip" data-tooltip-content="planet capture">
                                    <img id="p211736m6" style="display:none;" src="styles/images/iconav/p_select_spio.png" alt="" class="tooltip" data-tooltip-content="planet spy">
                                    <img id="p211736m10" style="display:none;" src="styles/images/iconav/p_select_rocket.png" alt="" class="tooltip" data-tooltip-content="Fly a rocket to the planet!">
                                        
                                    <div class="clear"></div>
                                </div>
                            	<span class="urlpalnet" url="cp=<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'i\']->value[\'id\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
">
                                	<span class="name_palnet" <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'i\']->value[\'immunity_until\']>$_smarty_tpl->tpl_vars[\'timing\']->value){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
style="color:#ff5252 !important;"<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
><?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'i\']->value[\'name\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
</span>
                                    <span class="ico_build">
                                    <br>                                      <br>                                                                          </span>                                 
                            		<span class="coordinates_palnet">[<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'i\']->value[\'galaxy\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
:<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'i\']->value[\'system\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
:<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'i\']->value[\'planet\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
]</span>
                                </span>
								<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'i\']->value[\'id_luna\']!=0){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

								
								<span class="urlpalnet" url="cp=<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'i\']->value[\'id_luna\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
">
								<span class="moon_palnet"><img src='./styles/images/iconav/moon.png'></span>
								</span><?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

                                                            </div> 
                                 
							<div class="separator_h"></div>      
<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php } ?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
 
                        </div>
						 
                    </div><!--/planet_select--> 
                    
                    <div id="top_nav_part_right">
                        
                        <a title="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['hnav_friends'];?>
" href="game.php?page=buddyList">
                            <span class="frend"></span>
                        </a>
                        <a title="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['hnav_banlist'];?>
" href="game.php?page=banList">
                            <span class="baned"></span>
                        </a>
                                                
                      <div class="separator_nav"></div>
                        <a title="Techtree" href="game.php?page=techtree">
                        	<span class="techtree"></span>
                        </a>
                        
                       <a target="_blank" href="http://wiki.dark-space.org" title="Wiki">

    <span class="faq"></span>

</a>
                        <a title="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['hnav_rules'];?>
" href="http://dark-space.org/index.php?page=rules" target="_blank">
                            <span class="rules"></span>
                        </a>
                        <a title="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['hnav_notes'];?>
" href="javascript:Dialog.open('?page=notes', 900, 300);">
                            <span class="notes"></span>
                        </a>
                        <a title="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['hnav_support'];?>
" href="game.php?page=ticket">
                            <span class="soopart"></span>
                        </a>
                        <a title="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['hnav_search'];?>
" href="game.php?page=search">
                            <span class="search"></span>
                        </a>                        
                         
                        <div class="separator_nav"></div>
                        
                        <a title="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['hnav_option'];?>
" href="game.php?page=settings">
                            <span class="seting"></span>
                        </a>
                         
                        <div class="separator_nav"></div>
                        
                        <a  title="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['hnav_logout'];?>
" href="game.php?page=logout">
                            <span class="exit"></span>
                        </a>
                       
                    </div>                    
                </div><!--/top_nav-->
                
                <div id="level">
                	<div id="level_active" style="width:<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'experience_peace_percent\']->value;?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
%;">
                    	<div class="left_blick"></div>
                        <div class="right_blick"></div>
                    </div>
                	<div class="separs"></div>
                    <div class="separs"></div>
                    <div class="separs"></div>
                    <div class="separs"></div>
                    <div class="separs"></div>
                    <div class="separs"></div>
                    <div class="separs"></div>
                    <div class="separs"></div>
                    <div class="separs"></div>
                    <div class="separs"></div>
                    <div class="level_text tooltip" style="cursor:help !important" data-tooltip-content="
                    	<span style='color:#0C6'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['hnav_peacelvl'];?>
</span><br>   
                        Rewards:<br>
                        &nbsp;<span style='color:#0C3'>+<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'experience_peace_level\']->value;?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
%</span> <?php echo $_smarty_tpl->tpl_vars['LNG']->value['hnav_peace_extract'];?>
<br>
                        &nbsp;<span style='color:#0C3'>+<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'experience_peace_level\']->value;?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
%</span> <?php echo $_smarty_tpl->tpl_vars['LNG']->value['hnav_peace_speed'];?>
<br>
                        &nbsp;<span style='color:#0C3'>+<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'experience_peace_level\']->value;?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
%</span> <?php echo $_smarty_tpl->tpl_vars['LNG']->value['hnav_peace_energyprod'];?>
<br>
                        &nbsp;<span style='color:#0C3'>+<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'peace_reward_slots\']->value;?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
</span> <?php echo $_smarty_tpl->tpl_vars['LNG']->value['hnav_peace_slot'];?>
<br>
                        &nbsp;<span style='color:#0C3'>+<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'peace_reward_fields\']->value;?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
</span> <?php echo $_smarty_tpl->tpl_vars['LNG']->value['hnav_peace_planet'];?>
<br>
                        &nbsp;<span style='color:#0C3'>+<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'peace_reward_golf\']->value;?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
</span> <?php echo $_smarty_tpl->tpl_vars['LNG']->value['hnav_peace_moon'];?>
<br>
                        <div style='border-bottom:1px dashed #666; margin:7px 0 4px 0;'></div>
                        <span style='color:#999'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['hnav_exp'];?>
 <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'experience_peace\']->value;?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
 / <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'experience_peace_max\']->value;?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
</span>">
                		<?php echo $_smarty_tpl->tpl_vars['LNG']->value['hnav_lvl'];?>
 <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'experience_peace_level\']->value;?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
 (<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'experience_peace_percent\']->value;?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
%)
                    </div>
                </div><!--/level-->
                
                <div id="Batlelevel">
                	<div id="Batlelevel_active" style="width:<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'experience_combat_percent\']->value;?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
%;">
                    	<div class="left_blick"></div>
                        <div class="right_blick"></div>
                    </div>
                	<div class="separs"></div>
                    <div class="separs"></div>
                    <div class="separs"></div>
                    <div class="separs"></div>
                    <div class="separs"></div>
                    <div class="separs"></div>
                    <div class="separs"></div>
                    <div class="separs"></div>
                    <div class="separs"></div>
                    <div class="separs"></div>
                    <div class="level_text tooltip" style="cursor:help !important" data-tooltip-content="
                    	<span style='color:#F33'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['hnav_combatlvl'];?>
</span><br>                   
                        Rewards:<br>                     
                        &nbsp;<span style='color:#0C3'>+<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'experience_combat_level\']->value;?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
%</span> <?php echo $_smarty_tpl->tpl_vars['LNG']->value['hnav_combat_tech'];?>
<br>
                        &nbsp;<span style='color:#0C3'>-<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'combat_reward_deut\']->value;?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
%</span> <?php echo $_smarty_tpl->tpl_vars['LNG']->value['hnav_combat_fuel'];?>
<br>
                        &nbsp;<span style='color:#0C3'>+<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'combat_reward_expe\']->value;?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
%</span> <?php echo $_smarty_tpl->tpl_vars['LNG']->value['hnav_combat_extract'];?>
<br>                       
                        &nbsp;<span style='color:#0C3'>+<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'combat_reward_bonus\']->value;?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
%</span> <?php echo $_smarty_tpl->tpl_vars['LNG']->value['hnav_combat_bonus_but'];?>
<br> 
                        &nbsp;<span style='color:#0C3'>+<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'combat_reward_collider\']->value;?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
%</span> <?php echo $_smarty_tpl->tpl_vars['LNG']->value['hnav_combat_collider'];?>
<br>
                        <div style='border-bottom:1px dashed #666; margin:7px 0 4px 0;'></div>
                        <span style='color:#999'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['hnav_exp'];?>
 <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'experience_combat\']->value;?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
 / <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'experience_combat_max\']->value;?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
</span>">
                		<?php echo $_smarty_tpl->tpl_vars['LNG']->value['hnav_lvl'];?>
 <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'experience_combat_level\']->value;?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
 (<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'experience_combat_percent\']->value;?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
%)
                    </div>
                </div><!--/Batlelevel--><?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2015-07-21 09:48:35
         compiled from "/home/stell530/public_html/beta7/styles/templates/game/main.topnav.tpl" */ ?>
<?php if ($_valid && !is_callable('content_55ae3fa3f2bb20_03372229')) {function content_55ae3fa3f2bb20_03372229($_smarty_tpl) {?> <div id="res_nav">
 <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'cosmonaute_day\']->value==1){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

 <div id="top_cosmonautics">
                    		<div class="top_gift_left"></div>
                        	<div class="top_gift_mid"></div>
                        	<div class="top_gift_right"></div>
                        </div>
						
						
						<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }elseif($_smarty_tpl->tpl_vars[\'new_year\']->value==1){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

                	                    	<div id="top_new_year">
                    		<div class="top_gift_left"></div>
                        	<div class="top_gift_mid"></div>
                        	<div class="top_gift_right"></div>
                        </div>
						<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }else{ ?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

						<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

						
                	      <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php  $_smarty_tpl->tpl_vars[\'resouceData\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'resouceData\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'resourceID\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'resourceTable\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'resouceData\']->key => $_smarty_tpl->tpl_vars[\'resouceData\']->value){
$_smarty_tpl->tpl_vars[\'resouceData\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'resourceID\']->value = $_smarty_tpl->tpl_vars[\'resouceData\']->key;
?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

									<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if (!isset($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'current\'])){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

									<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php $_smarty_tpl->createLocalArrayVariable(\'resouceData\', true, 0);
$_smarty_tpl->tpl_vars[\'resouceData\']->value[\'current\'] = $_smarty_tpl->tpl_vars[\'resouceData\']->value[\'max\']+$_smarty_tpl->tpl_vars[\'resouceData\']->value[\'used\'];?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
   

									<div id="res_block_<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'resouceData\']->value[\'name\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
" class="bloc_res">
                		<div class="ico_res tooltip"></div>   
                                        
                        <div class="stock_res">
						
<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'used1\']>$_smarty_tpl->tpl_vars[\'resouceData\']->value[\'max\']){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

						<div class="stock_percentage stock_percentage_left" style="width:<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'resouceData\']->value[\'percenta\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
%;"></div>
                        <div class="stock_percentage stock_percentage_right" style="width:0;display:none;";"></div>
						<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }else{ ?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

						<div class="stock_percentage stock_percentage_left" style="width:0;display:none;";"></div>
                        <div class="stock_percentage stock_percentage_right" style="width:<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'resouceData\']->value[\'percent\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
%;"></div>
						<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

							
							
							

							<div class="stock_text tooltip" data-tooltip-content="<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'current\']);?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
"><span id="current_<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'resouceData\']->value[\'name\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
" name="<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'current\']);?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
" data-real="<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'resouceData\']->value[\'current\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
"><?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'current\']);?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
&nbsp;/&nbsp;<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'max\']);?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
</span> </div>
                        </div>
                    </div>					
									
<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }else{ ?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
								
  									
	
                	<div id="res_block_<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'resouceData\']->value[\'name\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
" class="bloc_res">
                		<div class="ico_res"></div>   
									<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if (!isset($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'current\'])||!isset($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'max\'])){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

									
									<div class="stock_res">
									<div class="stock_text"><span id="current_<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'resouceData\']->value[\'name\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
" name="<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'current\']);?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
" data-real="<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'resouceData\']->value[\'current\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
"><?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'current\']);?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
</span>
									</div>
									 </div>
									<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }else{ ?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

									
									<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'name\']!="darkmatter"){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

                        <a href="game.php?page=trader&amp;mode=trade&amp;resource=<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceID\']->value;?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
" title="Trader" class="exchange_res"></a>    <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
                
                        <div class="stock_res">
                        	
							
							<div class="stock_percentage" style="width:<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'resouceData\']->value[\'percent\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
%;"></div>
                                
							
							<div class="stock_text tooltip" <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'name\']!="darkmatter"){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
class="bloc_res tooltip" data-tooltip-content="<span class='p_res'><?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'resouceData\']->value[\'name\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
</span><br /><br /><?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'PPS\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
: <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'resouceData\']->value[\'information\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
<br /><?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'PPD\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
: <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'resouceData\']->value[\'informationd\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
<br /><?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'PPW\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
: <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'resouceData\']->value[\'informationz\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
 <div style='border-bottom:1px dashed #666; margin:7px 0 4px 0;'></div> <span style='color:#999'><?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'current\']);?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
&nbsp;/&nbsp;<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'max\']);?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
</span>"<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
><span id="current_<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'resouceData\']->value[\'name\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
" name="<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'current\']);?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
" data-real="<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'resouceData\']->value[\'current\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
"><?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'resouceData\']->value[\'current\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
</span><?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'name\']!="darkmatter"){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
 (<span class="pricent"><?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'resouceData\']->value[\'percent\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
</span>%)<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
     </div>
                        </div>
						 <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

                    </div>
                    <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

									<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php } ?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

                   
                    
				   
				   
					
                </div><!--/res_nav-->                

		<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if (!$_smarty_tpl->tpl_vars[\'vmode\']->value){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

		<script type="text/javascript">
		var viewShortlyNumber	= <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo json_encode($_smarty_tpl->tpl_vars[\'shortlyNumber\']->value);?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

		var vacation			= <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'vmode\']->value;?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
;
		<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php  $_smarty_tpl->tpl_vars[\'resouceData\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'resouceData\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'resourceID\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'resourceTable\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'resouceData\']->key => $_smarty_tpl->tpl_vars[\'resouceData\']->value){
$_smarty_tpl->tpl_vars[\'resouceData\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'resourceID\']->value = $_smarty_tpl->tpl_vars[\'resouceData\']->key;
?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

		<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'production\'])){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

		resourceTicker({
			available: <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo json_encode($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'current\']);?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
,
			limit: [0, <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo json_encode($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'max\']);?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
],
			production: <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo json_encode($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'production\']);?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
,
			valueElem: "current_<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'resouceData\']->value[\'name\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
"
		}, true);
		<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

		<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php } ?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

		</script>
		<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

	</div>
	<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'closed\']->value){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

	<div class="infobox"><?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'ov_closed\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
</div>
	<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }elseif($_smarty_tpl->tpl_vars[\'delete\']->value){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

	<div class="infobox"><?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'delete\']->value;?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
</div>
	<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }elseif($_smarty_tpl->tpl_vars[\'vacation\']->value){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

	<div class="infobox"><?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'tn_vacation_mode\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
 <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'vacation\']->value;?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
</div>
	<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

	</div><!--/header--><?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2015-07-21 09:48:36
         compiled from "/home/stell530/public_html/beta7/styles/templates/game/main.navigation.tpl" */ ?>
<?php if ($_valid && !is_callable('content_55ae3fa41953a0_04769795')) {function content_55ae3fa41953a0_04769795($_smarty_tpl) {?> <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'show_dbonus\']->value==2){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
<script>
$(function() {
$( "#info-dialog" ).dialog({
modal: true,
width:'80%',buttons: {
Ok: function() {
$( this ).dialog( "close" );
}
}
});
});
</script><?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

<div style="display: none;" id="scroller">
<a class="scroller_mesages" href="game.php?page=messages" onclick="document.location.href = 'game.php?page=messages'">
<span class="mesages" <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'new_message\']->value==0){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
style="display:none;"<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
></span>
<span class="new_email" <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'new_message\']->value==0){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
style="display:none;"<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
>
<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'new_message\']->value;?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

</span>
<span class="clear"></span>
</a>
<span class="go_top_bg">Top</span>
</div>
<div id="left_side">        
<div id="left_menu">
<div id="indicators">        	
<div id="attack" class="<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'attack\']->value;?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
 indicator tooltip" data-tooltip-content="<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'attack\']->value==\'active_indicator\'){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'NIA_on\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }else{ ?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'NIA\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
"><div class="icoi"></div></div>
<div id="grab" class="indicator tooltip" data-tooltip-content="<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'attack\']->value==\'active_indicator\'){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'FORR_on\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }else{ ?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'FORR\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
"><div class="icoi"></div></div>
<div id="destruction" class="<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'destroy\']->value;?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
 indicator tooltip" data-tooltip-content="<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'destroy\']->value==\'active_indicator\'){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'YMIS_on\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }else{ ?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'YMIS\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
"><div class="icoi"></div></div>
<div id="espionage" class="<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'spying\']->value;?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
 indicator tooltip" data-tooltip-content="<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'spying\']->value==\'active_indicator\'){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'YEINBS_on\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }else{ ?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'YEINBS\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
" href="game.php?page=overview"><div class="icoi"></div></div>
<div id="rocket" class="<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'rocket\']->value;?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
 indicator tooltip" data-tooltip-content="<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'rocket\']->value==\'active_indicator\'){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'NIR_on\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }else{ ?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'NIR\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
"><div class="icoi"></div></div>
</div>     
<div class="servertime"><?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'servertime\']->value;?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
</div>
<div class="separator"></div>
<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'bonus_timer\']->value<$_smarty_tpl->tpl_vars[\'TIME\']->value){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
     <a title="Bonus" class="big_btn red btn_menu btn_menu_big" href="game.php?page=bonus">
<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'bonte_button\']->value!=0){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
x<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'bonte_button\']->value;?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
|<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
<span><?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'alm_bonus\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
</span></a><?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

<a class="big_btn btn_menu btn_menu_big"  href="game.php?page=donatebis"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['alm_purchase'];?>
 <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'pointe\']->value!=0){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
<span style="color:#FC0;">+<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'pointe\']->value;?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
%</span><?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
</a>
<a  href="?page=premium" class="big_btn premium btn_menu btn_menu_big">
<img class="left" src="./styles/theme/gow/images/ico-account-premium.png" alt="Premium Account" />
<span style="color:#FC0;"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['alm_premium'];?>
 <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'premiun_extra\']->value!=0){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
<span style="color:#09C;">+<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'premiun_extra\']->value;?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
%</span><?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
</span>
<img class="right" src="./styles/theme/gow/images/ico-account-premium.png" alt="Premium Account" />
</a>
<div class="separator"></div>
<a class="btn_menu" href="game.php?page=research" id="munu_research" <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'manual_step_4\']->value==0){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
onclick="starttraining4()"<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
><?php echo $_smarty_tpl->tpl_vars['LNG']->value['alm_reseach'];?>
</a>		        	<a class="btn_menu" href="game.php?page=buildings" id="munu_build" <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'manual_step_1\']->value==0){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
onclick="starttraining2()"<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
><?php echo $_smarty_tpl->tpl_vars['LNG']->value['alm_buildings'];?>
</a>		        	<a class="btn_menu" href="game.php?page=shipyard&amp;mode=fleet" id="munu_shipyard_fleet" <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'manual_15_step\']->value==0){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
onclick="starttraining8()"<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
><?php echo $_smarty_tpl->tpl_vars['LNG']->value['alm_shipyard'];?>
</a>		        	<a class="btn_menu" href="game.php?page=shipyard&amp;mode=defense" id="munu_shipyard_defense" <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'manual_8_step\']->value==0){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
onclick="starttraining5()"<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
><?php echo $_smarty_tpl->tpl_vars['LNG']->value['alm_defense'];?>
</a>		        	<a class="btn_menu" href="game.php?page=fleetTable"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['alm_fleets'];?>
</a>		        	        	<a class="btn_menu" href="game.php?page=resources" id="munu_resources"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['alm_resource'];?>
</a>        
<a class="btn_menu" href="game.php?page=officier" id="munu_senat" <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'manual_21_step\']->value==0){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
onclick="starttraining12()"<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
><?php echo $_smarty_tpl->tpl_vars['LNG']->value['alm_senat'];?>
</a>
<a class="btn_menu" href="game.php?page=port"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['alm_port'];?>
</a>   
<a class="btn_menu" href="game.php?page=trader"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['alm_adv_trader'];?>
</a>
<a class="btn_menu" href="game.php?page=academy">Academia <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'academy_reduce\']->value!=0){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
<span style="color:#FC0;">-<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'academy_reduce\']->value;?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
%</span><?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
</a>	
<a class="btn_menu" href="game.php?page=Immunity"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['alm_immunity'];?>
</a>
<a class="btn_menu" href="game.php?page=Planetcloak"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['alm_planetcloak'];?>
</a>
<a class="btn_menu"  href="game.php?page=Planeta">Leilões do P.</a>
<a class="btn_menu" href="game.php?page=Reward2">Resgate</a>
<a class="btn_menu" href="game.php?page=FleetDealer">Merc. de Frotas</a>

<div class="clear"></div>        
<div class="separator"></div>
<a class="btn_menu" href="game.php?page=galaxy" id="munu_galaxy" <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'manual_17_step\']->value==0){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
onclick="starttraining9()"<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
><?php echo $_smarty_tpl->tpl_vars['LNG']->value['alm_galaxy'];?>
</a>
<a class="btn_menu" href="game.php?page=alliance"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['alm_ally'];?>
</a>  		
<a class="btn_menu" href="game.php?page=battleSimulator"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['alm_battlesim'];?>
</a>
<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'uni_value\']->value==1){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
    <a class="btn_menu" <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'manual_26_step\']->value==0){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
onclick="starttraining15()"<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
 href="game.php?page=Achievements" id="achievements_name"><?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'alm_achievement\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
</a> <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

<a class="btn_menu" href="game.php?page=Refystem" id="munu_refsystem"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['alm_referal'];?>
</a>
<a class="btn_menu" href="game.php?page=Feedback" id="munu_refsystem"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['alm_feedback'];?>
</a>
<div class="clear"></div>
<div class="separator"></div>
<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'nvote\']->value==1){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
	<a title="Promote us" class="big_btn red btn_menu btn_menu_big" href="game.php?page=Promote">
<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'alm_promote\'];?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
</a><?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
 
<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'authlevel\']->value>0){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
 <a  href="admin.php" class="big_btn green btn_menu btn_menu_big">Administração</a><?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

<div class="clear"></div>
<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'cosmonaute_day\']->value==1){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

<div id="bottom_cosmonautics">
<div class="bottom_gift_bg">
<a <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'gift1\']->value>0){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
href="?page=bonus&mode=gift1"<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
 class="gift_bloc gift_1 <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'gift1\']->value==0){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
gift_opacity<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
 tooltip" data-tooltip-content="When activated you get <b>50</b> antimatter<br>
(Flying Saucer will be lost when)"><?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'gift1\']->value;?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
</a>
<a <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'gift2\']->value>0){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
href="?page=bonus&mode=gift2"<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
 class="gift_bloc gift_2 <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'gift2\']->value==0){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
gift_opacity<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
 tooltip" data-tooltip-content="When activate, you get <b>50</b> antimatter<br>
(The alien will then be lost)"><?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'gift2\']->value;?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
</a>
<a <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'gift3\']->value>0){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
href="?page=bonus&mode=gift3"<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
 class="gift_bloc gift_3 <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'gift3\']->value==0){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
gift_opacity<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
 tooltip" data-tooltip-content="When activated you get <b>50</b> antimatter<br>
(Rocket will be lost when)"><?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'gift3\']->value;?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
</a>
<a <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'gift4\']->value>0){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
href="?page=bonus&mode=gift4"<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
 class="gift_bloc gift_4 <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'gift4_1\']->value==0){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
gift_opacity<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
 tooltip" data-tooltip-content="When you activated Cosmonaut, 
<br>You will receive 300 Antimatter<br>
And as you have a 50% chance:
<br><span style=' margin-left: 9px; margin-right: 4px; cursor: default; float: left;'>•</span>pontos de Academia <b>1-25</b>
<br><span style=' margin-left: 9px; margin-right: 4px; cursor: default; float: left;'>•</span>experiência de pascifismo <b>150-3500</b>
<br><span style=' margin-left: 9px; margin-right: 4px; cursor: default; float: left;'>•</span>bonus de anti matéria <b>200</b>
<br><span style=' margin-left: 9px; margin-right: 4px; cursor: default; float: left;'>•</span>Get <b>frisbee</b>
<br><span style=' margin-left: 9px; margin-right: 4px; cursor: default; float: left;'>•</span>Get <b>alien</b> 
<br><span style=' margin-left: 9px; margin-right: 4px; cursor: default; float: left;'>•</span>Get <b>space rocket</b> "><?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'gift4\']->value;?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
</a>
</div>
</div>
<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'new_year\']->value==1){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

<div id="bottom_new_year">
<div class="bottom_gift_bg">
<a class="gift_bloc gift_1 gift_opacity tooltip" data-tooltip-content="When activated, you will receive a Christmas toy <b>35</b> antimatter<br>
(Christmas tree toy at the same time will be lost)">0</a>
<a class="gift_bloc gift_2 gift_opacity tooltip" data-tooltip-content="When activated, you will receive a New Year Snowflakes <b>35</b> antimatter<br>
(Snowflake thus will be lost)">0</a>
<a class="gift_bloc gift_3 gift_opacity tooltip" data-tooltip-content="When activated, you will receive a New Year's Bluebell <b>35</b> antimatter<br>
(The bell will then be lost)">0</a>
<a class="gift_bloc gift_4 gift_opacity tooltip" data-tooltip-content="When activated, Christmas gifts (one toy, Snowflake and bell) 
<br>you will receive 215 antimatter<br>
And as you have a 50% chance:
<br><span style=' margin-left: 9px; margin-right: 4px; cursor: default; float: left;'>•</span>Peace Experience <b>215-2015</b>
<br><span style=' margin-left: 9px; margin-right: 4px; cursor: default; float: left;'>•</span>bonus antimatter <b>215</b>
<br><span style=' margin-left: 9px; margin-right: 4px; cursor: default; float: left;'>•</span>To Get <b>Christmas toy </b>
<br><span style=' margin-left: 9px; margin-right: 4px; cursor: default; float: left;'>•</span>To Get <b>Christmas Snowflake</b> 
<br><span style=' margin-left: 9px; margin-right: 4px; cursor: default; float: left;'>•</span>To Get <b>Christmas bell</b> ">0</a>
</div>
</div>
<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

</div><!--/left_menu-->
<div style="height:0; overflow:hidden;" loop="false;" id="music">
<audio id="beepataks" preload="auto">
<source src="http://mass.xterium.ru/sound/sirena.mp3"></source>
<source src="http://mass.xterium.ru/sound/sirena.ogg"></source>
</audio>
<script type="text/javascript">
var ataks = "0";
var spio = "0";
var unic = "0";
var rakets = "0";
document.getElementById('beepataks').volume=<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'alarm_volume\']->value;?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
;

</script>
</div>  
</div><!--/left_side-->
<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'show_dbonus\']->value!=1){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>

<div id="info-dialog" title="Daily Bonus" >
                <!-- Rewards panel (Always visible) -->
<div id="activityRewards_dayHolder">
<form action="game.php?page=dbonus" method="POST">
<input name="cmd" value="1" type="hidden">
			<div class="dayCard <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'xxx\']->value!=1){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }else{ ?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
active<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
" data-day="1" data-type="Income15">

			<div class="boxDayNameBox">Day 1</div>
			<div class="boxImage premiumAccount"></div>
			<div class="boxDescription">This will reward you with 5 free "Academy" points !</div>
				<div class="boxClaim">							
					<input id="activityRewards_button_1"  <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'xxx\']->value!=1){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
disabled="disabled" class="inactive"<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }else{ ?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
class="active"<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
 value="Claim" <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'xxx\']->value==1){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
onclick="$('#info-dialog').dialog('close');"<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
 type="submit">
				</div>
			</div>
</form>
		
		<form action="game.php?page=dbonus" method="POST">
<input name="cmd" value="2" type="hidden">
			<div class="dayCard <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'xxx\']->value!=2){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }else{ ?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
active<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
" data-day="2" data-type="Income30">

			<div class="boxDayNameBox">
									Day 2							</div>

			<div class="boxImage income30"></div>

			<div class="boxDescription">This will reward you with <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'rewardss\']->value;?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
 "Peace" experience !</div>

							<div class="boxClaim">
					<input id="activityRewards_button_2" <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'xxx\']->value!=2){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
disabled="disabled" class="inactive"<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }else{ ?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
class="active"<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
 value="Claim !" <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'xxx\']->value==2){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
onclick="$('#info-dialog').dialog('close');"<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
 type="submit">
				</div>
			
		</div>
		</form>
		<form action="game.php?page=dbonus" method="POST">
<input name="cmd" value="3" type="hidden">
			<div class="dayCard <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'xxx\']->value!=3){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }else{ ?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
active<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
" data-day="3" data-type="Ozone50">

			<div class="boxDayNameBox">
									Day 3							</div>

			<div class="boxImage income60"></div>

			<div class="boxDescription">Get 30% extra production on all your planets for 24H !</div>

							<div class="boxClaim">
					<input id="activityRewards_button_3" <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'xxx\']->value!=3){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
disabled="disabled" class="inactive"<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }else{ ?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
class="active"<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
 value="Claim !" <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'xxx\']->value==3){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
onclick="$('#info-dialog').dialog('close');"<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
 type="submit">
				</div>
			
		</div>
		</form>
		<form action="game.php?page=dbonus" method="POST">
<input name="cmd" value="4" type="hidden">
			<div class="dayCard <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'xxx\']->value!=4){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }else{ ?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
active<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
" data-day="4" data-type="Income60">

			<div class="boxDayNameBox">
									Day 4							</div>

			<div class="boxImage credits"></div>

			<div class="boxDescription">This gift will reward u with 250.000 DM !</div>

							<div class="boxClaim">
					<input id="activityRewards_button_4" <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'xxx\']->value!=4){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
disabled="disabled" class="inactive"<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }else{ ?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
class="active"<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
 value="Claim !" <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'xxx\']->value==4){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
onclick="$('#info-dialog').dialog('close');"<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
 type="submit">
				</div>
			
		</div>
		</form>
		<form action="game.php?page=dbonus" method="POST">
<input name="cmd" value="5" type="hidden">
			<div class="dayCard <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'xxx\']->value!=5){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }else{ ?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
active<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
" data-day="5" data-type="Premium8">

			<div class="boxDayNameBox">
									Day 5							</div>

			<div class="boxImage income15"></div>

			<div class="boxDescription">The surprise box will reward you with random bonuses !</div>

							<div class="boxClaim">
					<input id="activityRewards_button_5" <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'xxx\']->value!=5){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
disabled="disabled" class="inactive"<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }else{ ?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
class="active"<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
 value="Claim !" <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'xxx\']->value==5){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
onclick="$('#info-dialog').dialog('close');"<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
 type="submit">
				</div>
			
		</div>
		</form>
		<form action="game.php?page=dbonus" method="POST">
<input name="cmd" value="6" type="hidden">
			<div class="dayCard <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'xxx\']->value!=6){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }else{ ?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
active<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
" data-day="6" data-type="Premium2">

			<div class="boxDayNameBox">
									Day 6							</div>

			<div class="boxImage ozone"></div>

			<div class="boxDescription">This bonus will give u one extra planet slot !</div>

							<div class="boxClaim">
					<input id="activityRewards_button_6" <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'xxx\']->value!=6){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
disabled="disabled" class="inactive"<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }else{ ?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
class="active"<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
 value="Claim !" <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'xxx\']->value==6){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
onclick="$('#info-dialog').dialog('close');"<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
 type="submit">
				</div>
			
		</div>
		</form>
				<form action="game.php?page=dbonus" method="POST">
<input name="cmd" value="<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php echo $_smarty_tpl->tpl_vars[\'randomd\']->value;?>
/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
" type="hidden">
			<div class="dayCard <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'xxx\']->value!=7){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }else{ ?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
active<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
" data-day="7" data-type="MetaRewardX2">

			<div class="boxDayNameBox">
									Day 7						</div>

			<div class="boxImage meta"></div>

			<div class="boxDescription">This will reward u randomly with one of the former bonuses !</div>
			<div class="boxClaim">
					<input id="activityRewards_button_7" <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'xxx\']->value!=7){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
disabled="disabled" class="inactive"<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }else{ ?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
class="active"<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
 value="Claim !" <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php if ($_smarty_tpl->tpl_vars[\'xxx\']->value==7){?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
onclick="$('#info-dialog').dialog('close');"<?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
 type="submit">
				</div></div>
				</form>
				
			</div>

			</div> <?php echo '/*%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/<?php }?>/*/%%SmartyNocache:90674818255ae3fa3bc5f94-00736401%%*/';?>
<?php }} ?>