<?php /* Smarty version Smarty-3.1.13, created on 2015-07-21 09:47:21
         compiled from "/home/stell530/public_html/beta7/styles/templates/game/page.messages.view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:128476595455ae3f5930bfe8-73365855%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '039043df2140481de08af2fa010c2909e7efd492' => 
    array (
      0 => '/home/stell530/public_html/beta7/styles/templates/game/page.messages.view.tpl',
      1 => 1436892736,
      2 => 'file',
    ),
    '5a2f1f77c4a853ef6b13f084b69f190f4c4d6f0e' => 
    array (
      0 => '/home/stell530/public_html/beta7/styles/templates/game/layout.ajax.tpl',
      1 => 1436892736,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '128476595455ae3f5930bfe8-73365855',
  'function' => 
  array (
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_55ae3f594fd975_93788746',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ae3f594fd975_93788746')) {function content_55ae3f594fd975_93788746($_smarty_tpl) {?>
<form action="game.php?page=messages" method="post">
<input type="hidden" name="mode" value="action">
<input type="hidden" name="ajax" value="1">
<input type="hidden" name="messcat" value="<?php echo '/*%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/<?php echo $_smarty_tpl->tpl_vars[\'MessID\']->value;?>
/*/%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/';?>
">
<input type="hidden" name="side" value="<?php echo '/*%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value;?>
/*/%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/';?>
">
<table id="messagestable" class="tablesorter ally_ranks">	
	<tr>
		<th colspan="4"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mg_message_title'];?>
</th>
	</tr>
	
	<?php echo '/*%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/<?php if ($_smarty_tpl->tpl_vars[\'MessID\']->value!=999){?>/*/%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/';?>

	<tr>
		<td colspan="4">
			<select name="actionTop">
				<option value="deletemarked"><?php echo '/*%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'mg_delete_marked\'];?>
/*/%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/';?>
</option>
				<option value="deleteunmarked"><?php echo '/*%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'mg_delete_unmarked\'];?>
/*/%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/';?>
</option>
				<option value="deletetypeall"><?php echo '/*%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'mg_delete_type_all\'];?>
/*/%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/';?>
</option>
				<option value="deleteall"><?php echo '/*%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'mg_delete_all\'];?>
/*/%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/';?>
</option>
				<option value="archivemarked">Archive marked messages</option>
			</select>
			<input value="<?php echo '/*%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'mg_confirm\'];?>
/*/%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/';?>
" type="submit" name="submitTop">
		</td>
	</tr>
	<?php echo '/*%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/<?php }?>/*/%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/';?>

	
	<tr style="height: 20px;">
		<td class="right" colspan="4"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mg_page'];?>
: <?php echo '/*%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value!=1){?>/*/%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/';?>
<a href="#" onclick="Message.getMessages(<?php echo '/*%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/<?php echo $_smarty_tpl->tpl_vars[\'MessID\']->value;?>
/*/%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/';?>
, <?php echo '/*%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value-1;?>
/*/%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/';?>
);return false;">&laquo;</a>&nbsp;<?php echo '/*%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/<?php }?>/*/%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/';?>
<?php echo '/*%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/<?php $_smarty_tpl->tpl_vars[\'site\'] = new Smarty_Variable;$_smarty_tpl->tpl_vars[\'site\']->step = 1;$_smarty_tpl->tpl_vars[\'site\']->total = (int)ceil(($_smarty_tpl->tpl_vars[\'site\']->step > 0 ? $_smarty_tpl->tpl_vars[\'maxPage\']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars[\'maxPage\']->value)+1)/abs($_smarty_tpl->tpl_vars[\'site\']->step));
if ($_smarty_tpl->tpl_vars[\'site\']->total > 0){
for ($_smarty_tpl->tpl_vars[\'site\']->value = 1, $_smarty_tpl->tpl_vars[\'site\']->iteration = 1;$_smarty_tpl->tpl_vars[\'site\']->iteration <= $_smarty_tpl->tpl_vars[\'site\']->total;$_smarty_tpl->tpl_vars[\'site\']->value += $_smarty_tpl->tpl_vars[\'site\']->step, $_smarty_tpl->tpl_vars[\'site\']->iteration++){
$_smarty_tpl->tpl_vars[\'site\']->first = $_smarty_tpl->tpl_vars[\'site\']->iteration == 1;$_smarty_tpl->tpl_vars[\'site\']->last = $_smarty_tpl->tpl_vars[\'site\']->iteration == $_smarty_tpl->tpl_vars[\'site\']->total;?>/*/%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/';?>
<a href="#" onclick="Message.getMessages(<?php echo '/*%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/<?php echo $_smarty_tpl->tpl_vars[\'MessID\']->value;?>
/*/%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/';?>
, <?php echo '/*%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/<?php echo $_smarty_tpl->tpl_vars[\'site\']->value;?>
/*/%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/';?>
);return false;"><?php echo '/*%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/<?php if ($_smarty_tpl->tpl_vars[\'site\']->value==$_smarty_tpl->tpl_vars[\'page\']->value){?>/*/%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/';?>
<b>[<?php echo '/*%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/<?php echo $_smarty_tpl->tpl_vars[\'site\']->value;?>
/*/%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/';?>
]</b><?php echo '/*%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/<?php }else{ ?>/*/%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/';?>
[<?php echo '/*%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/<?php echo $_smarty_tpl->tpl_vars[\'site\']->value;?>
/*/%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/';?>
]<?php echo '/*%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/<?php }?>/*/%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/';?>
</a><?php echo '/*%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/<?php if ($_smarty_tpl->tpl_vars[\'site\']->value!=$_smarty_tpl->tpl_vars[\'maxPage\']->value){?>/*/%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/';?>
&nbsp;<?php echo '/*%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/<?php }?>/*/%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/';?>
<?php echo '/*%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/<?php }} ?>/*/%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/';?>
<?php echo '/*%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value!=$_smarty_tpl->tpl_vars[\'maxPage\']->value){?>/*/%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/';?>
&nbsp;<a href="#" onclick="Message.getMessages(<?php echo '/*%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/<?php echo $_smarty_tpl->tpl_vars[\'MessID\']->value;?>
/*/%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/';?>
, <?php echo '/*%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value+1;?>
/*/%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/';?>
);return false;">&raquo;</a><?php echo '/*%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/<?php }?>/*/%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/';?>
</td>
	</tr>
	
	<?php echo '/*%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/<?php  $_smarty_tpl->tpl_vars[\'Message\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'Message\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'MessageList\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'Message\']->key => $_smarty_tpl->tpl_vars[\'Message\']->value){
$_smarty_tpl->tpl_vars[\'Message\']->_loop = true;
?>/*/%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/';?>

	<tr id="message_<?php echo '/*%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/<?php echo $_smarty_tpl->tpl_vars[\'Message\']->value[\'id\'];?>
/*/%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/';?>
" class="message_head<?php echo '/*%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/<?php if ($_smarty_tpl->tpl_vars[\'MessID\']->value!=999&&$_smarty_tpl->tpl_vars[\'Message\']->value[\'unread\']==1){?>/*/%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/';?>
 mes_unread<?php echo '/*%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/<?php }?>/*/%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/';?>
">
		<td class="head_row_msg" style="width:40px;" rowspan="2">
		<?php echo '/*%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/<?php if ($_smarty_tpl->tpl_vars[\'MessID\']->value!=999){?>/*/%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/';?>
<input class="head_row_msg" name="messageID[<?php echo '/*%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/<?php echo $_smarty_tpl->tpl_vars[\'Message\']->value[\'id\'];?>
/*/%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/';?>
]" value="1" type="checkbox"><?php echo '/*%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/<?php }?>/*/%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/';?>

		</td>
		<td class="head_row_msg"><?php echo '/*%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/<?php echo $_smarty_tpl->tpl_vars[\'Message\']->value[\'time\'];?>
/*/%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/';?>
</td>
		<td class="head_row_msg"><?php echo '/*%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/<?php echo $_smarty_tpl->tpl_vars[\'Message\']->value[\'from\'];?>
/*/%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/';?>
 	<?php echo '/*%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/<?php if ($_smarty_tpl->tpl_vars[\'Message\']->value[\'type\']==1&&$_smarty_tpl->tpl_vars[\'MessID\']->value!=999){?>/*/%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/';?>
<a href="#" onclick="return Dialog.Buddy(<?php echo '/*%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/<?php echo $_smarty_tpl->tpl_vars[\'Message\']->value[\'sender\'];?>
/*/%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/';?>
)" title="proposal to make friends"><img src="../styles/images/iconav/friend.png"></a>            <a href="?page=EnnemiesList&mode=send&id=<?php echo '/*%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/<?php echo $_smarty_tpl->tpl_vars[\'Message\']->value[\'sender\'];?>
/*/%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/';?>
" title="Add to the list of enemies"><img src="../styles/images/iconav/enemies.png" style="height:20px;"></a><?php echo '/*%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/<?php }?>/*/%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/';?>
 </td>
		<td class="head_row_msg"><?php echo '/*%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/<?php echo $_smarty_tpl->tpl_vars[\'Message\']->value[\'subject\'];?>
/*/%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/';?>

		<?php echo '/*%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/<?php if ($_smarty_tpl->tpl_vars[\'Message\']->value[\'type\']==1&&$_smarty_tpl->tpl_vars[\'MessID\']->value!=999){?>/*/%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/';?>

		<a href="#" onclick="return Dialog.PM(<?php echo '/*%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/<?php echo $_smarty_tpl->tpl_vars[\'Message\']->value[\'sender\'];?>
/*/%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/';?>
, Message.CreateAnswer('<?php echo '/*%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/<?php echo $_smarty_tpl->tpl_vars[\'Message\']->value[\'subject\'];?>
/*/%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/';?>
'));" title="<?php echo '/*%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'mg_answer_to\'];?>
/*/%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/';?>
 <?php echo '/*%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/<?php echo strip_tags($_smarty_tpl->tpl_vars[\'Message\']->value[\'from\']);?>
/*/%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/';?>
"><img src="./styles/images/iconav/mesages.png" border="0"></a>
		
		<a href="#" onclick="return Dialog.complPM(<?php echo '/*%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/<?php echo $_smarty_tpl->tpl_vars[\'Message\']->value[\'id\'];?>
/*/%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/';?>
)" title="Report"><img src="./styles/images/iconav/complaint.png" height="16px"></a>	
		 <?php echo '/*%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/<?php }?>/*/%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/';?>

		 <a href="#" onclick="msgDel(<?php echo '/*%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/<?php echo $_smarty_tpl->tpl_vars[\'Message\']->value[\'id\'];?>
/*/%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/';?>
, <?php echo '/*%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/<?php echo $_smarty_tpl->tpl_vars[\'Message\']->value[\'type\'];?>
/*/%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/';?>
); Message.getMessages(<?php echo '/*%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/<?php echo $_smarty_tpl->tpl_vars[\'Message\']->value[\'type\'];?>
/*/%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/';?>
); return false;" title="Remove"><img src="../styles/images/iconav/delmsg.png">
				</td>
	
	
	
		
		
		</td>
	</tr>
	
	
	<tr class="messages_body">
		<td colspan="3" class="left">
		<?php echo '/*%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/<?php echo $_smarty_tpl->tpl_vars[\'Message\']->value[\'text\'];?>
/*/%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/';?>

		</td>
	</tr>
	<?php echo '/*%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/<?php } ?>/*/%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/';?>

	<tr style="height: 20px;">
		<td class="right" colspan="4"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mg_page'];?>
: <?php echo '/*%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value!=1){?>/*/%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/';?>
<a href="#" onclick="Message.getMessages(<?php echo '/*%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/<?php echo $_smarty_tpl->tpl_vars[\'MessID\']->value;?>
/*/%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/';?>
, 1);return false;">&laquo;</a>&nbsp;<?php echo '/*%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/<?php }?>/*/%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/';?>
<?php echo '/*%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/<?php $_smarty_tpl->tpl_vars[\'site\'] = new Smarty_Variable;$_smarty_tpl->tpl_vars[\'site\']->step = 1;$_smarty_tpl->tpl_vars[\'site\']->total = (int)ceil(($_smarty_tpl->tpl_vars[\'site\']->step > 0 ? $_smarty_tpl->tpl_vars[\'maxPage\']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars[\'maxPage\']->value)+1)/abs($_smarty_tpl->tpl_vars[\'site\']->step));
if ($_smarty_tpl->tpl_vars[\'site\']->total > 0){
for ($_smarty_tpl->tpl_vars[\'site\']->value = 1, $_smarty_tpl->tpl_vars[\'site\']->iteration = 1;$_smarty_tpl->tpl_vars[\'site\']->iteration <= $_smarty_tpl->tpl_vars[\'site\']->total;$_smarty_tpl->tpl_vars[\'site\']->value += $_smarty_tpl->tpl_vars[\'site\']->step, $_smarty_tpl->tpl_vars[\'site\']->iteration++){
$_smarty_tpl->tpl_vars[\'site\']->first = $_smarty_tpl->tpl_vars[\'site\']->iteration == 1;$_smarty_tpl->tpl_vars[\'site\']->last = $_smarty_tpl->tpl_vars[\'site\']->iteration == $_smarty_tpl->tpl_vars[\'site\']->total;?>/*/%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/';?>
<a href="#" onclick="Message.getMessages(<?php echo '/*%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/<?php echo $_smarty_tpl->tpl_vars[\'MessID\']->value;?>
/*/%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/';?>
, <?php echo '/*%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/<?php echo $_smarty_tpl->tpl_vars[\'site\']->value;?>
/*/%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/';?>
);return false;"><?php echo '/*%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/<?php if ($_smarty_tpl->tpl_vars[\'site\']->value==$_smarty_tpl->tpl_vars[\'page\']->value){?>/*/%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/';?>
<b>[<?php echo '/*%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/<?php echo $_smarty_tpl->tpl_vars[\'site\']->value;?>
/*/%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/';?>
]</b><?php echo '/*%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/<?php }else{ ?>/*/%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/';?>
[<?php echo '/*%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/<?php echo $_smarty_tpl->tpl_vars[\'site\']->value;?>
/*/%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/';?>
]<?php echo '/*%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/<?php }?>/*/%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/';?>
</a><?php echo '/*%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/<?php if ($_smarty_tpl->tpl_vars[\'site\']->value!=$_smarty_tpl->tpl_vars[\'maxPage\']->value){?>/*/%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/';?>
&nbsp;<?php echo '/*%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/<?php }?>/*/%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/';?>
<?php echo '/*%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/<?php }} ?>/*/%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/';?>
<?php echo '/*%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value!=$_smarty_tpl->tpl_vars[\'maxPage\']->value){?>/*/%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/';?>
&nbsp;<a href="#" onclick="Message.getMessages(<?php echo '/*%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/<?php echo $_smarty_tpl->tpl_vars[\'MessID\']->value;?>
/*/%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/';?>
, <?php echo '/*%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/<?php echo $_smarty_tpl->tpl_vars[\'maxPage\']->value;?>
/*/%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/';?>
);return false;">&raquo;</a><?php echo '/*%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/<?php }?>/*/%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/';?>
</td>
	</tr>
	<?php echo '/*%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/<?php if ($_smarty_tpl->tpl_vars[\'MessID\']->value!=999){?>/*/%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/';?>

	<tr>
		<td colspan="4">
			<select name="actionBottom">
				<option value="deletemarked"><?php echo '/*%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'mg_delete_marked\'];?>
/*/%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/';?>
</option>
				<option value="deleteunmarked"><?php echo '/*%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'mg_delete_unmarked\'];?>
/*/%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/';?>
</option>
				<option value="deletetypeall"><?php echo '/*%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'mg_delete_type_all\'];?>
/*/%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/';?>
</option>
				<option value="deleteall"><?php echo '/*%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'mg_delete_all\'];?>
/*/%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/';?>
</option>
				<option value="archivemarked">Archive marked messages</option>
			</select>
			<input value="<?php echo '/*%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'mg_confirm\'];?>
/*/%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/';?>
" type="submit" name="submitBottom">
		</td>
	</tr>
	<?php echo '/*%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/<?php }?>/*/%%SmartyNocache:128476595455ae3f5930bfe8-73365855%%*/';?>

</table>
</form>
<?php }} ?>