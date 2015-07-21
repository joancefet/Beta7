<?php /* Smarty version Smarty-3.1.13, created on 2015-07-21 12:38:27
         compiled from "/home/stell530/public_html/beta7/styles/templates/adm/MessageList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:109816801155ae6773b3c5d4-04235735%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f20938fbd8147570745e1fb67d9f16d5428e4e5' => 
    array (
      0 => '/home/stell530/public_html/beta7/styles/templates/adm/MessageList.tpl',
      1 => 1436892736,
      2 => 'file',
    ),
    '2ac1132477632b442d4bb4c745e86e8d35901910' => 
    array (
      0 => '/home/stell530/public_html/beta7/styles/templates/adm/overall_header.tpl',
      1 => 1436892736,
      2 => 'file',
    ),
    'b40b1a8a0983daa9cfe05f682b123e931f749aaf' => 
    array (
      0 => '/home/stell530/public_html/beta7/styles/templates/adm/head_nav.tpl',
      1 => 1436892736,
      2 => 'file',
    ),
    '893231ff9ef83adb18e1c4fbac9ddf890da347cf' => 
    array (
      0 => '/home/stell530/public_html/beta7/styles/templates/adm/overall_footer.tpl',
      1 => 1436892736,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '109816801155ae6773b3c5d4-04235735',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 1,
    'LNG' => 1,
    'categories' => 1,
    'type' => 1,
    'dateStart' => 1,
    'dateEnd' => 1,
    'sender' => 1,
    'receiver' => 1,
    'Selected' => 1,
    'maxPage' => 1,
    'site' => 1,
    'messageList' => 1,
    'messageID' => 1,
    'messageRow' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_55ae67740809f5_95969512',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ae67740809f5_95969512')) {function content_55ae67740809f5_95969512($_smarty_tpl) {?><?php echo '/*%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/<?php $_smarty = $_smarty_tpl->smarty; if (!is_callable(\'smarty_function_html_options\')) include \'/home/stell530/public_html/beta7/includes/libs/Smarty/plugins/function.html_options.php\';
?>/*/%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/';?>
<?php /*  Call merged included template "overall_header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("overall_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '109816801155ae6773b3c5d4-04235735');
content_55ae6773c2e780_92213134($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "overall_header.tpl" */?>
<?php /*  Call merged included template "head_nav.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("head_nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '109816801155ae6773b3c5d4-04235735');
content_55ae6773d24037_23663273($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "head_nav.tpl" */?><form action="admin.php?page=messagelist" method="post" id="form">
<input type="hidden" name="side" value="<?php echo '/*%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value;?>
/*/%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/';?>
" id="side">
<table width="90%">   
	<tr>
		<th colspan="5"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ml_message_list'];?>
</th>
	</tr>
	<tr>
		<td style="width:15%"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ml_type'];?>
</td>
		<td style="width:35%"><?php echo '/*%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/<?php echo smarty_function_html_options(array(\'options\'=>$_smarty_tpl->tpl_vars[\'categories\']->value,\'selected\'=>$_smarty_tpl->tpl_vars[\'type\']->value,\'name\'=>"type"),$_smarty_tpl);?>
/*/%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/';?>
</td>
		<td style="width:15%"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ml_date_range'];?>
</td>
		<td style="width:17.5%"><input value="<?php echo '/*%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/<?php echo (($tmp = @$_smarty_tpl->tpl_vars[\'dateStart\']->value[\'day\'])===null||$tmp===\'\' ? \'\' : $tmp);?>
/*/%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/';?>
" type="text" id="dateStartDay" name="dateStart[day]" style="width:25px" maxlength="2" placeholder="dd">.<input value="<?php echo '/*%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/<?php echo (($tmp = @$_smarty_tpl->tpl_vars[\'dateStart\']->value[\'month\'])===null||$tmp===\'\' ? \'\' : $tmp);?>
/*/%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/';?>
" type="text" id="dateStartMonth" name="dateStart[month]" style="width:25px" maxlength="2" placeholder="mm">.<input value="<?php echo '/*%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/<?php echo (($tmp = @$_smarty_tpl->tpl_vars[\'dateStart\']->value[\'year\'])===null||$tmp===\'\' ? \'\' : $tmp);?>
/*/%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/';?>
" type="text" id="dateStartYear" name="dateStart[year]" style="width:35px" maxlength="4" placeholder="yyyy"></td>
		<td style="width:17.5%"><input value="<?php echo '/*%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/<?php echo (($tmp = @$_smarty_tpl->tpl_vars[\'dateEnd\']->value[\'day\'])===null||$tmp===\'\' ? \'\' : $tmp);?>
/*/%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/';?>
" type="text" id="dateEndDay" name="dateEnd[day]" style="width:25px" maxlength="2" placeholder="dd">.<input value="<?php echo '/*%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/<?php echo (($tmp = @$_smarty_tpl->tpl_vars[\'dateEnd\']->value[\'month\'])===null||$tmp===\'\' ? \'\' : $tmp);?>
/*/%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/';?>
" type="text" id="dateEndMonth" name="dateEnd[month]" style="width:25px" maxlength="2" placeholder="mm">.<input value="<?php echo '/*%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/<?php echo (($tmp = @$_smarty_tpl->tpl_vars[\'dateEnd\']->value[\'year\'])===null||$tmp===\'\' ? \'\' : $tmp);?>
/*/%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/';?>
" type="text" id="dateEndYear" name="dateEnd[year]" style="width:35px" maxlength="4" placeholder="yyyy"></td>
	</tr>
	<tr>
		<td style="width:15%"><label for="sender"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ml_sender'];?>
</label></td>
		<td style="width:35%"><input type="text" id="sender" name="sender" value="<?php echo '/*%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/<?php echo $_smarty_tpl->tpl_vars[\'sender\']->value;?>
/*/%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/';?>
" length="11"></td>
		<td style="width:15%"><label for="receiver"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ml_receiver'];?>
</label></td>
		<td style="width:35%" colspan="2"><input type="text" id="receiver" name="receiver" value="<?php echo '/*%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/<?php echo $_smarty_tpl->tpl_vars[\'receiver\']->value;?>
/*/%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/';?>
" length="11"></td>
	</tr>
	<tr>
		<th colspan="5" class="center">
			<input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['ml_type_submit'];?>
">
		</th>
	</tr>
</table>
<table width="90%">  	
	<tr>
		<th colspan="<?php if ($_smarty_tpl->tpl_vars['Selected']->value==100){?>6<?php }else{ ?>5<?php }?>"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ml_message_list'];?>
</th>
	</tr>
	<tr style="height: 20px;">
		<td class="right" colspan="<?php if ($_smarty_tpl->tpl_vars['Selected']->value==100){?>6<?php }else{ ?>5<?php }?>"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mg_page'];?>
: <?php echo '/*%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value!=1){?>/*/%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/';?>
<a href="#" onclick="gotoPage(<?php echo '/*%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value-1;?>
/*/%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/';?>
);return false;">&laquo;</a> <?php echo '/*%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/<?php }?>/*/%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/';?>
<?php echo '/*%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/<?php $_smarty_tpl->tpl_vars[\'site\'] = new Smarty_Variable;$_smarty_tpl->tpl_vars[\'site\']->step = 1;$_smarty_tpl->tpl_vars[\'site\']->total = (int)ceil(($_smarty_tpl->tpl_vars[\'site\']->step > 0 ? $_smarty_tpl->tpl_vars[\'maxPage\']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars[\'maxPage\']->value)+1)/abs($_smarty_tpl->tpl_vars[\'site\']->step));
if ($_smarty_tpl->tpl_vars[\'site\']->total > 0){
for ($_smarty_tpl->tpl_vars[\'site\']->value = 1, $_smarty_tpl->tpl_vars[\'site\']->iteration = 1;$_smarty_tpl->tpl_vars[\'site\']->iteration <= $_smarty_tpl->tpl_vars[\'site\']->total;$_smarty_tpl->tpl_vars[\'site\']->value += $_smarty_tpl->tpl_vars[\'site\']->step, $_smarty_tpl->tpl_vars[\'site\']->iteration++){
$_smarty_tpl->tpl_vars[\'site\']->first = $_smarty_tpl->tpl_vars[\'site\']->iteration == 1;$_smarty_tpl->tpl_vars[\'site\']->last = $_smarty_tpl->tpl_vars[\'site\']->iteration == $_smarty_tpl->tpl_vars[\'site\']->total;?>/*/%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/';?>
<a href="#" onclick="gotoPage(<?php echo '/*%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/<?php echo $_smarty_tpl->tpl_vars[\'site\']->value;?>
/*/%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/';?>
);return false;"><?php echo '/*%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/<?php if ($_smarty_tpl->tpl_vars[\'site\']->value==$_smarty_tpl->tpl_vars[\'page\']->value){?>/*/%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/';?>
<span style="color:orange"><b>[<?php echo '/*%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/<?php echo $_smarty_tpl->tpl_vars[\'site\']->value;?>
/*/%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/';?>
]</b></span><?php echo '/*%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/<?php }else{ ?>/*/%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/';?>
[<?php echo '/*%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/<?php echo $_smarty_tpl->tpl_vars[\'site\']->value;?>
/*/%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/';?>
]<?php echo '/*%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/<?php }?>/*/%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/';?>
</a><?php echo '/*%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/<?php if ($_smarty_tpl->tpl_vars[\'site\']->value!=$_smarty_tpl->tpl_vars[\'maxPage\']->value){?>/*/%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/';?>
 <?php echo '/*%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/<?php }?>/*/%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/';?>
<?php echo '/*%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/<?php }} ?>/*/%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/';?>
<?php echo '/*%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value!=$_smarty_tpl->tpl_vars[\'maxPage\']->value){?>/*/%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/';?>
 <a href="#" onclick="gotoPage(<?php echo '/*%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value+1;?>
/*/%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/';?>
);return false;">&raquo;</a><?php echo '/*%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/<?php }?>/*/%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/';?>
</td>
	</tr>
	<tr>
		<th style="width:4%"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ml_id'];?>
</th>
		<?php if ($_smarty_tpl->tpl_vars['Selected']->value==100){?><th><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ml_type'];?>
</th><?php }?>
		<th style="width:15%"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ml_date'];?>
</th>
		<th><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ml_sender'];?>
</th>
		<th><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ml_receiver'];?>
</th>
		<th><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ml_subject'];?>
</th>
	</tr>
	<?php echo '/*%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/<?php  $_smarty_tpl->tpl_vars[\'messageRow\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'messageRow\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'messageID\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'messageList\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'messageRow\']->key => $_smarty_tpl->tpl_vars[\'messageRow\']->value){
$_smarty_tpl->tpl_vars[\'messageRow\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'messageID\']->value = $_smarty_tpl->tpl_vars[\'messageRow\']->key;
?>/*/%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/';?>

	<tr data-messageID="<?php echo '/*%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/<?php echo $_smarty_tpl->tpl_vars[\'messageID\']->value;?>
/*/%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/';?>
">
		<td><a href="#" class="toggle"><?php echo '/*%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/<?php echo $_smarty_tpl->tpl_vars[\'messageID\']->value;?>
/*/%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/';?>
</a></td>
		<?php echo '/*%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/<?php if ($_smarty_tpl->tpl_vars[\'Selected\']->value==100){?>/*/%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/';?>
<td><a href="#" class="toggle"><?php echo '/*%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'mg_type\'][$_smarty_tpl->tpl_vars[\'messageRow\']->value[\'type\']];?>
/*/%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/';?>
</a></td><?php echo '/*%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/<?php }?>/*/%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/';?>

		<td><a href="#" class="toggle"><?php echo '/*%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/<?php echo $_smarty_tpl->tpl_vars[\'messageRow\']->value[\'time\'];?>
/*/%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/';?>
</a></td>
		<td><a href="#" class="toggle"><?php echo '/*%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/<?php echo $_smarty_tpl->tpl_vars[\'messageRow\']->value[\'sender\'];?>
/*/%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/';?>
</a></td>
		<td><a href="#" class="toggle"><?php echo '/*%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/<?php echo $_smarty_tpl->tpl_vars[\'messageRow\']->value[\'receiver\'];?>
/*/%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/';?>
</a></td>
		<td><a href="#" class="toggle"><?php echo '/*%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/<?php echo $_smarty_tpl->tpl_vars[\'messageRow\']->value[\'subject\'];?>
/*/%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/';?>
</a></td>
	</tr>
	<tr id="contentID<?php echo '/*%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/<?php echo $_smarty_tpl->tpl_vars[\'messageID\']->value;?>
/*/%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/';?>
" style="display:none;">
		<td class="left" colspan="<?php echo '/*%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/<?php if ($_smarty_tpl->tpl_vars[\'Selected\']->value==100){?>/*/%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/';?>
6<?php echo '/*%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/<?php }else{ ?>/*/%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/';?>
5<?php echo '/*%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/<?php }?>/*/%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/';?>
" style="padding:5px 8px;"><?php echo '/*%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/<?php echo $_smarty_tpl->tpl_vars[\'messageRow\']->value[\'text\'];?>
/*/%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/';?>
</td>
	</tr>
	<?php echo '/*%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/<?php } ?>/*/%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/';?>

</table>
</form>
<script src="scripts/admin/messageList.js"></script>
<?php /*  Call merged included template "overall_footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("overall_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '109816801155ae6773b3c5d4-04235735');
content_55ae677407c2b1_99336857($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "overall_footer.tpl" */?><?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2015-07-21 12:38:27
         compiled from "/home/stell530/public_html/beta7/styles/templates/adm/overall_header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_55ae6773c2e780_92213134')) {function content_55ae6773c2e780_92213134($_smarty_tpl) {?><!DOCTYPE html>

<!--[if lt IE 7 ]> <html lang="<?php echo '/*%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/';?>
" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="<?php echo '/*%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/';?>
" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<?php echo '/*%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/';?>
" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<?php echo '/*%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/';?>
" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<?php echo '/*%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/';?>
" class="no-js"> <!--<![endif]-->
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Admin Panel</title>
	 
    <!-- BEGIN: load jquery -->
	
	<script type="text/javascript">
	var ServerTimezoneOffset = <?php echo '/*%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/<?php echo $_smarty_tpl->tpl_vars[\'Offset\']->value;?>
/*/%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/';?>
;
	var serverTime 	= new Date(<?php echo '/*%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[0];?>
/*/%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/';?>
, <?php echo '/*%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[1]-1;?>
/*/%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/';?>
, <?php echo '/*%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[2];?>
/*/%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/';?>
, <?php echo '/*%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[3];?>
/*/%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/';?>
, <?php echo '/*%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[4];?>
/*/%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/';?>
, <?php echo '/*%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[5];?>
/*/%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/';?>
);
	var xsize 	= screen.width;
	var ysize 	= screen.height;
	var breite	= 720;
	var hoehe	= 300;
	var xpos	= (xsize-breite) / 2;
	var ypos	= (ysize-hoehe) / 2;
	var Ready		= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['ready'];?>
";
	var Skin		= "<?php echo '/*%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/';?>
";
	var Lang		= "<?php echo '/*%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/';?>
";
	var head_info	= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['fcm_info'];?>
";
	var days 		= <?php echo (($tmp = @json_encode($_smarty_tpl->tpl_vars['LNG']->value['week_day']))===null||$tmp==='' ? '[]' : $tmp);?>
 
	var months 		= <?php echo (($tmp = @json_encode($_smarty_tpl->tpl_vars['LNG']->value['months']))===null||$tmp==='' ? '[]' : $tmp);?>
 ;
	var tdformat	= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['js_tdformat'];?>
";
	function openEdit(id, type) {
		var editlist = window.open("?page=qeditor&edit="+type+"&id="+id, "edit", "scrollbars=yes,statusbar=no,toolbar=no,location=no,directories=no,resizable=no,menubar=no,width=850,height=600,screenX="+((xsize-600)/2)+",screenY="+((ysize-850)/2)+",top="+((ysize-600)/2)+",left="+((xsize-850)/2));
		editlist.focus();
	}
	</script> 
	
	
	<link rel="stylesheet" type="text/css" href="./styles/css/boilerplate.css">
	<link rel="stylesheet" type="text/css" href="./styles/css/jquery.css">
  	<link rel="stylesheet" type="text/css" href="./styles/css/jquery.fancybox.css">
	<link rel="stylesheet" type="text/css" href="./styles/theme/gow/formate.css">
    <link rel="stylesheet" type="text/css" href="./styles/css/ingame.css">
    <link rel="stylesheet" type="text/css" href="./styles/css/style.css">
	<link rel="stylesheet" type="text/css" href="./styles/css/chat.css">
	<link rel="stylesheet" type="text/css" href="./styles/css/responsive.css">

	
	<script type="text/javascript" src="./scripts/base/jquery.js?v=<?php echo '/*%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/';?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.ui.js?v=<?php echo '/*%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/';?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.cookie.js?v=<?php echo '/*%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/';?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.fancybox.js?v=<?php echo '/*%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/';?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.validationEngine.js?v=<?php echo '/*%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/';?>
"></script>
	<script type="text/javascript" src="./scripts/l18n/validationEngine/jquery.validationEngine-<?php echo '/*%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/';?>
"></script>
	<script type="text/javascript" src="./scripts/base/tooltip.js?v=<?php echo '/*%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/';?>
"></script>
	<script type="text/javascript" src="./scripts/game/base.js?v=<?php echo '/*%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/';?>
"></script>
	<?php echo '/*%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/<?php  $_smarty_tpl->tpl_vars[\'scriptname\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'scriptname\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'scripts\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'scriptname\']->key => $_smarty_tpl->tpl_vars[\'scriptname\']->value){
$_smarty_tpl->tpl_vars[\'scriptname\']->_loop = true;
?>/*/%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/';?>

	<script type="text/javascript" src="./scripts/game/<?php echo '/*%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/<?php echo $_smarty_tpl->tpl_vars[\'scriptname\']->value;?>
/*/%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/';?>
"></script>
	<?php echo '/*%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/<?php } ?>/*/%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/';?>

	<script type="text/javascript">
	$(function() {
		<?php echo '/*%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/<?php echo $_smarty_tpl->tpl_vars[\'execscript\']->value;?>
/*/%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/';?>

	});
	</script>

</head>
<body id="<?php echo (($tmp = @htmlspecialchars($_GET['page']))===null||$tmp==='' ? 'overview' : $tmp);?>
" class="<?php echo '/*%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/<?php echo $_smarty_tpl->tpl_vars[\'bodyclass\']->value;?>
/*/%%SmartyNocache:109816801155ae6773b3c5d4-04235735%%*/';?>
">
	<div id="tooltip" class="tip"></div><?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2015-07-21 12:38:27
         compiled from "/home/stell530/public_html/beta7/styles/templates/adm/head_nav.tpl" */ ?>
<?php if ($_valid && !is_callable('content_55ae6773d24037_23663273')) {function content_55ae6773d24037_23663273($_smarty_tpl) {?>


	<div id="left_side">        
    <div id="left_menu">
               
        <div class="separator"></div>

        
        
        <a class="btn_menu" href="admin.php?page=overview" >&nbsp;Overview</a>
        <a class="btn_menu" href="game.php" >Go to game</a>
	        <div class="separator"></div>	
		<?php if (allowedTo('ShowInformationPage')){?><a href="?page=infos" class="btn_menu" ><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_game_info'];?>
</a><?php }?>
		<?php if (allowedTo('ShowConfigBasicPage')){?><a href="?page=config" class="btn_menu" ><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_settings'];?>
</a><?php }?>
		<?php if (allowedTo('ShowConfigUniPage')){?><a href="?page=configuni" class="btn_menu" ><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_unisettings'];?>
</a><?php }?>
		<?php if (allowedTo('ShowChatConfigPage')){?><a href="?page=chat" class="btn_menu" ><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_chat'];?>
</a><?php }?>
		<?php if (allowedTo('ShowTeamspeakPage')){?><a href="?page=teamspeak" class="btn_menu" ><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_ts_options'];?>
</a><?php }?>
		<?php if (allowedTo('ShowFacebookPage')){?><a href="?page=facebook" class="btn_menu" ><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_fb_options'];?>
</a><?php }?>
		<?php if (allowedTo('ShowModulePage')){?><a href="?page=module" class="btn_menu" ><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_module'];?>
</a><?php }?>
		<?php if (allowedTo('ShowDisclamerPage')){?><a href="?page=disclamer" class="btn_menu" ><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_disclaimer'];?>
</a><?php }?>
		<?php if (allowedTo('ShowStatsPage')){?><a href="?page=statsconf" class="btn_menu" ><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_stats_options'];?>
</a><?php }?>
		<?php if (allowedTo('ShowVertifyPage')){?><a href="?page=vertify" class="btn_menu" ><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_vertify'];?>
</a><?php }?>
		<?php if (allowedTo('ShowCronjobPage')){?><a href="?page=cronjob" class="btn_menu" ><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_cronjob'];?>
</a><?php }?>
		<?php if (allowedTo('ShowDumpPage')){?><a href="?page=dump" class="btn_menu" ><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_dump'];?>
</a><?php }?>
        <div class="separator"></div>		
		<?php if (allowedTo('ShowCreatorPage')){?><a href="?page=create" class="btn_menu" ><?php echo $_smarty_tpl->tpl_vars['LNG']->value['new_creator_title'];?>
</a><?php }?>
		<?php if (allowedTo('ShowAccountEditorPage')){?><a href="?page=accounteditor" class="btn_menu" ><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_add_delete_resources'];?>
</a><?php }?>
		<?php if (allowedTo('ShowBanPage')){?><a href="?page=bans" class="btn_menu" ><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_ban_options'];?>
</a><?php }?>
		<?php if (allowedTo('ShowGiveawayPage')){?><a href="?page=giveaway" class="btn_menu" ><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_giveaway'];?>
</a><?php }?>
        <div class="separator"></div>		
		<?php if (allowedTo('ShowSearchPage')){?><a href="?page=search&amp;search=online&amp;minimize=on" class="btn_menu" ><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_connected'];?>
</a><?php }?>
		<?php if (allowedTo('ShowSupportPage')){?><a href="?page=support" class="btn_menu" ><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_support'];?>
<?php if ($_smarty_tpl->tpl_vars['supportticks']->value!=0){?> (<?php echo $_smarty_tpl->tpl_vars['supportticks']->value;?>
)<?php }?></a><?php }?>
		<?php if (allowedTo('ShowActivePage')){?><a href="?page=active" class="btn_menu" ><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_vaild_users'];?>
</a><?php }?>
		<?php if (allowedTo('ShowSearchPage')){?><a href="?page=search&amp;search=p_connect&amp;minimize=on" class="btn_menu" ><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_active_planets'];?>
</a><?php }?>
		<?php if (allowedTo('ShowFlyingFleetPage')){?><a href="?page=fleets" class="btn_menu" ><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_flying_fleets'];?>
</a><?php }?>
		<?php if (allowedTo('ShowNewsPage')){?><a href="?page=news" class="btn_menu" ><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_news'];?>
</a><?php }?>
		<?php if (allowedTo('ShowSearchPage')){?><a href="?page=search&amp;search=users&amp;minimize=on" class="btn_menu" ><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_user_list'];?>
</a><?php }?>
		<?php if (allowedTo('ShowSearchPage')){?><a href="?page=search&amp;search=planet&amp;minimize=on" class="btn_menu" ><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_planet_list'];?>
</a><?php }?>
		<?php if (allowedTo('ShowSearchPage')){?><a href="?page=search&amp;search=moon&amp;minimize=on" class="btn_menu" ><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_moon_list'];?>
</a><?php }?>
		<?php if (allowedTo('ShowMessageListPage')){?><a href="?page=messagelist" class="btn_menu" ><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_mess_list'];?>
</a><?php }?>
		<?php if (allowedTo('ShowAccountDataPage')){?><a href="?page=accountdata" class="btn_menu" ><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_info_account_page'];?>
</a><?php }?>
		<?php if (allowedTo('ShowSearchPage')){?><a href="?page=search" class="btn_menu" ><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_search_page'];?>
</a><?php }?>
		<?php if (allowedTo('ShowMultiIPPage')){?><a href="?page=multiips" class="btn_menu" ><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_multiip_page'];?>
</a><?php }?>
        <div class="separator"></div>		
		<?php if (allowedTo('ShowLogPage')){?><a href="?page=log" class="btn_menu" ><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_logs'];?>
</a><?php }?>
		<?php if (allowedTo('ShowSendMessagesPage')){?><a href="?page=globalmessage" class="btn_menu" ><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_global_message'];?>
</a><?php }?>
		<?php if (allowedTo('ShowPassEncripterPage')){?><a href="?page=password" class="btn_menu" ><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_md5_encripter'];?>
</a><?php }?>
		<?php if (allowedTo('ShowStatUpdatePage')){?><a href="?page=statsupdate" class="btn_menu"  onClick=" return confirm('<?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_mpu_confirmation'];?>
');"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_manual_points_update'];?>
</a><?php }?>
		<?php if (allowedTo('ShowClearCachePage')){?><a href="?page=clearcache" class="btn_menu" ><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_clear_cache'];?>
</a><?php }?>

        <div class="separator"></div>
        
		        
                <div class="clear"></div>
				
    </div><!--/left_menu-->
	
 
</div><!--/left_side-->

   <div id="page" >
   <div id="content">


<?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2015-07-21 12:38:28
         compiled from "/home/stell530/public_html/beta7/styles/templates/adm/overall_footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_55ae677407c2b1_99336857')) {function content_55ae677407c2b1_99336857($_smarty_tpl) {?> 	</div>
	</div>
 
 <div id="site_info">
    </div>
</body>
</html><?php }} ?>