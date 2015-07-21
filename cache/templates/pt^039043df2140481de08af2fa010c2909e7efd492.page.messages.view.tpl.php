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
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_55ae6591b810e0_80940944',
  'has_nocache_code' => true,
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ae6591b810e0_80940944')) {function content_55ae6591b810e0_80940944($_smarty_tpl) {?><form action="game.php?page=messages" method="post">
<input type="hidden" name="mode" value="action">
<input type="hidden" name="ajax" value="1">
<input type="hidden" name="messcat" value="<?php echo $_smarty_tpl->tpl_vars['MessID']->value;?>
">
<input type="hidden" name="side" value="<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
">
<table id="messagestable" class="tablesorter ally_ranks">	
	<tr>
		<th colspan="4">Mensagens</th>
	</tr>
	
	<?php if ($_smarty_tpl->tpl_vars['MessID']->value!=999){?>
	<tr>
		<td colspan="4">
			<select name="actionTop">
				<option value="deletemarked"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mg_delete_marked'];?>
</option>
				<option value="deleteunmarked"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mg_delete_unmarked'];?>
</option>
				<option value="deletetypeall"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mg_delete_type_all'];?>
</option>
				<option value="deleteall"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mg_delete_all'];?>
</option>
				<option value="archivemarked">Archive marked messages</option>
			</select>
			<input value="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['mg_confirm'];?>
" type="submit" name="submitTop">
		</td>
	</tr>
	<?php }?>
	
	<tr style="height: 20px;">
		<td class="right" colspan="4">Página: <?php if ($_smarty_tpl->tpl_vars['page']->value!=1){?><a href="#" onclick="Message.getMessages(<?php echo $_smarty_tpl->tpl_vars['MessID']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
);return false;">&laquo;</a>&nbsp;<?php }?><?php $_smarty_tpl->tpl_vars['site'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['site']->step = 1;$_smarty_tpl->tpl_vars['site']->total = (int)ceil(($_smarty_tpl->tpl_vars['site']->step > 0 ? $_smarty_tpl->tpl_vars['maxPage']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['maxPage']->value)+1)/abs($_smarty_tpl->tpl_vars['site']->step));
if ($_smarty_tpl->tpl_vars['site']->total > 0){
for ($_smarty_tpl->tpl_vars['site']->value = 1, $_smarty_tpl->tpl_vars['site']->iteration = 1;$_smarty_tpl->tpl_vars['site']->iteration <= $_smarty_tpl->tpl_vars['site']->total;$_smarty_tpl->tpl_vars['site']->value += $_smarty_tpl->tpl_vars['site']->step, $_smarty_tpl->tpl_vars['site']->iteration++){
$_smarty_tpl->tpl_vars['site']->first = $_smarty_tpl->tpl_vars['site']->iteration == 1;$_smarty_tpl->tpl_vars['site']->last = $_smarty_tpl->tpl_vars['site']->iteration == $_smarty_tpl->tpl_vars['site']->total;?><a href="#" onclick="Message.getMessages(<?php echo $_smarty_tpl->tpl_vars['MessID']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['site']->value;?>
);return false;"><?php if ($_smarty_tpl->tpl_vars['site']->value==$_smarty_tpl->tpl_vars['page']->value){?><b>[<?php echo $_smarty_tpl->tpl_vars['site']->value;?>
]</b><?php }else{ ?>[<?php echo $_smarty_tpl->tpl_vars['site']->value;?>
]<?php }?></a><?php if ($_smarty_tpl->tpl_vars['site']->value!=$_smarty_tpl->tpl_vars['maxPage']->value){?>&nbsp;<?php }?><?php }} ?><?php if ($_smarty_tpl->tpl_vars['page']->value!=$_smarty_tpl->tpl_vars['maxPage']->value){?>&nbsp;<a href="#" onclick="Message.getMessages(<?php echo $_smarty_tpl->tpl_vars['MessID']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
);return false;">&raquo;</a><?php }?></td>
	</tr>
	
	<?php  $_smarty_tpl->tpl_vars['Message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Message']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['MessageList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Message']->key => $_smarty_tpl->tpl_vars['Message']->value){
$_smarty_tpl->tpl_vars['Message']->_loop = true;
?>
	<tr id="message_<?php echo $_smarty_tpl->tpl_vars['Message']->value['id'];?>
" class="message_head<?php if ($_smarty_tpl->tpl_vars['MessID']->value!=999&&$_smarty_tpl->tpl_vars['Message']->value['unread']==1){?> mes_unread<?php }?>">
		<td class="head_row_msg" style="width:40px;" rowspan="2">
		<?php if ($_smarty_tpl->tpl_vars['MessID']->value!=999){?><input class="head_row_msg" name="messageID[<?php echo $_smarty_tpl->tpl_vars['Message']->value['id'];?>
]" value="1" type="checkbox"><?php }?>
		</td>
		<td class="head_row_msg"><?php echo $_smarty_tpl->tpl_vars['Message']->value['time'];?>
</td>
		<td class="head_row_msg"><?php echo $_smarty_tpl->tpl_vars['Message']->value['from'];?>
 	<?php if ($_smarty_tpl->tpl_vars['Message']->value['type']==1&&$_smarty_tpl->tpl_vars['MessID']->value!=999){?><a href="#" onclick="return Dialog.Buddy(<?php echo $_smarty_tpl->tpl_vars['Message']->value['sender'];?>
)" title="proposal to make friends"><img src="../styles/images/iconav/friend.png"></a>            <a href="?page=EnnemiesList&mode=send&id=<?php echo $_smarty_tpl->tpl_vars['Message']->value['sender'];?>
" title="Add to the list of enemies"><img src="../styles/images/iconav/enemies.png" style="height:20px;"></a><?php }?> </td>
		<td class="head_row_msg"><?php echo $_smarty_tpl->tpl_vars['Message']->value['subject'];?>

		<?php if ($_smarty_tpl->tpl_vars['Message']->value['type']==1&&$_smarty_tpl->tpl_vars['MessID']->value!=999){?>
		<a href="#" onclick="return Dialog.PM(<?php echo $_smarty_tpl->tpl_vars['Message']->value['sender'];?>
, Message.CreateAnswer('<?php echo $_smarty_tpl->tpl_vars['Message']->value['subject'];?>
'));" title="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['mg_answer_to'];?>
 <?php echo strip_tags($_smarty_tpl->tpl_vars['Message']->value['from']);?>
"><img src="./styles/images/iconav/mesages.png" border="0"></a>
		
		<a href="#" onclick="return Dialog.complPM(<?php echo $_smarty_tpl->tpl_vars['Message']->value['id'];?>
)" title="Report"><img src="./styles/images/iconav/complaint.png" height="16px"></a>	
		 <?php }?>
		 <a href="#" onclick="msgDel(<?php echo $_smarty_tpl->tpl_vars['Message']->value['id'];?>
, <?php echo $_smarty_tpl->tpl_vars['Message']->value['type'];?>
); Message.getMessages(<?php echo $_smarty_tpl->tpl_vars['Message']->value['type'];?>
); return false;" title="Remove"><img src="../styles/images/iconav/delmsg.png">
				</td>
	
	
	
		
		
		</td>
	</tr>
	
	
	<tr class="messages_body">
		<td colspan="3" class="left">
		<?php echo $_smarty_tpl->tpl_vars['Message']->value['text'];?>

		</td>
	</tr>
	<?php } ?>
	<tr style="height: 20px;">
		<td class="right" colspan="4">Página: <?php if ($_smarty_tpl->tpl_vars['page']->value!=1){?><a href="#" onclick="Message.getMessages(<?php echo $_smarty_tpl->tpl_vars['MessID']->value;?>
, 1);return false;">&laquo;</a>&nbsp;<?php }?><?php $_smarty_tpl->tpl_vars['site'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['site']->step = 1;$_smarty_tpl->tpl_vars['site']->total = (int)ceil(($_smarty_tpl->tpl_vars['site']->step > 0 ? $_smarty_tpl->tpl_vars['maxPage']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['maxPage']->value)+1)/abs($_smarty_tpl->tpl_vars['site']->step));
if ($_smarty_tpl->tpl_vars['site']->total > 0){
for ($_smarty_tpl->tpl_vars['site']->value = 1, $_smarty_tpl->tpl_vars['site']->iteration = 1;$_smarty_tpl->tpl_vars['site']->iteration <= $_smarty_tpl->tpl_vars['site']->total;$_smarty_tpl->tpl_vars['site']->value += $_smarty_tpl->tpl_vars['site']->step, $_smarty_tpl->tpl_vars['site']->iteration++){
$_smarty_tpl->tpl_vars['site']->first = $_smarty_tpl->tpl_vars['site']->iteration == 1;$_smarty_tpl->tpl_vars['site']->last = $_smarty_tpl->tpl_vars['site']->iteration == $_smarty_tpl->tpl_vars['site']->total;?><a href="#" onclick="Message.getMessages(<?php echo $_smarty_tpl->tpl_vars['MessID']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['site']->value;?>
);return false;"><?php if ($_smarty_tpl->tpl_vars['site']->value==$_smarty_tpl->tpl_vars['page']->value){?><b>[<?php echo $_smarty_tpl->tpl_vars['site']->value;?>
]</b><?php }else{ ?>[<?php echo $_smarty_tpl->tpl_vars['site']->value;?>
]<?php }?></a><?php if ($_smarty_tpl->tpl_vars['site']->value!=$_smarty_tpl->tpl_vars['maxPage']->value){?>&nbsp;<?php }?><?php }} ?><?php if ($_smarty_tpl->tpl_vars['page']->value!=$_smarty_tpl->tpl_vars['maxPage']->value){?>&nbsp;<a href="#" onclick="Message.getMessages(<?php echo $_smarty_tpl->tpl_vars['MessID']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['maxPage']->value;?>
);return false;">&raquo;</a><?php }?></td>
	</tr>
	<?php if ($_smarty_tpl->tpl_vars['MessID']->value!=999){?>
	<tr>
		<td colspan="4">
			<select name="actionBottom">
				<option value="deletemarked"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mg_delete_marked'];?>
</option>
				<option value="deleteunmarked"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mg_delete_unmarked'];?>
</option>
				<option value="deletetypeall"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mg_delete_type_all'];?>
</option>
				<option value="deleteall"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mg_delete_all'];?>
</option>
				<option value="archivemarked">Archive marked messages</option>
			</select>
			<input value="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['mg_confirm'];?>
" type="submit" name="submitBottom">
		</td>
	</tr>
	<?php }?>
</table>
</form>
<?php }} ?>