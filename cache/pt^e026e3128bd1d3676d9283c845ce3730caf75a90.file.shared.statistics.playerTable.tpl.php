<?php /* Smarty version Smarty-3.1.13, created on 2015-07-21 09:46:43
         compiled from "/home/stell530/public_html/beta7/styles/templates/game/shared.statistics.playerTable.tpl" */ ?>
<?php /*%%SmartyHeaderCode:161449385355ae3f336d1542-10516785%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e026e3128bd1d3676d9283c845ce3730caf75a90' => 
    array (
      0 => '/home/stell530/public_html/beta7/styles/templates/game/shared.statistics.playerTable.tpl',
      1 => 1436892737,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '161449385355ae3f336d1542-10516785',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LNG' => 0,
    'RangeList' => 1,
    'RangeInfo' => 1,
    'CUser_id' => 1,
    'CUser_ally' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_55ae3f337996b8_94289521',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ae3f337996b8_94289521')) {function content_55ae3f337996b8_94289521($_smarty_tpl) {?><table class="tablesorter ally_ranks">
            <tr>
	<th colspan="2"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['st_position'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['LNG']->value['st_player'];?>
</th>
	<th>&nbsp;</th>
	<th><?php echo $_smarty_tpl->tpl_vars['LNG']->value['st_alliance'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['LNG']->value['st_points'];?>
</th>
</tr>
<?php  $_smarty_tpl->tpl_vars['RangeInfo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['RangeInfo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['RangeList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['RangeInfo']->key => $_smarty_tpl->tpl_vars['RangeInfo']->value){
$_smarty_tpl->tpl_vars['RangeInfo']->_loop = true;
?>
<tr>
	<td><?php if ($_smarty_tpl->tpl_vars['RangeInfo']->value['rank']==1){?>
						<img src="styles/images/iconav/trophee_1.png" />
						<?php }elseif($_smarty_tpl->tpl_vars['RangeInfo']->value['rank']==2){?>
						<img src="styles/images/iconav/trophee_2.png" />
						<?php }elseif($_smarty_tpl->tpl_vars['RangeInfo']->value['rank']==3){?>
						<img src="styles/images/iconav/trophee_3.png" />
						<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['RangeInfo']->value['rank'];?>
<?php }?></td>
    <td><?php if ($_smarty_tpl->tpl_vars['RangeInfo']->value['ranking']==0){?><span style='color:#87CEEB'>*</span><?php }elseif($_smarty_tpl->tpl_vars['RangeInfo']->value['ranking']<0){?><span style='color:red'><?php echo $_smarty_tpl->tpl_vars['RangeInfo']->value['ranking'];?>
</span><?php }elseif($_smarty_tpl->tpl_vars['RangeInfo']->value['ranking']>0){?><span style='color:green'>+<?php echo $_smarty_tpl->tpl_vars['RangeInfo']->value['ranking'];?>
</span><?php }?></td>
	<td>
	
	
	
	
    	<a href="#" onclick="return Dialog.Playercard(<?php echo $_smarty_tpl->tpl_vars['RangeInfo']->value['id'];?>
, '<?php echo $_smarty_tpl->tpl_vars['RangeInfo']->value['name'];?>
');"<?php if ($_smarty_tpl->tpl_vars['RangeInfo']->value['id']==$_smarty_tpl->tpl_vars['CUser_id']->value){?> style="color:lime"<?php }elseif($_smarty_tpl->tpl_vars['RangeInfo']->value['isEnnemie']>0){?>style="color:red"<?php }elseif($_smarty_tpl->tpl_vars['RangeInfo']->value['isFriend']>0){?>style="color:#eae45c"<?php }?>
		><?php echo $_smarty_tpl->tpl_vars['RangeInfo']->value['name'];?>
</a>
		<?php if ($_smarty_tpl->tpl_vars['RangeInfo']->value['isnoob']==1){?>
                (<span class="galaxy-short-noob">n</span>)  
		<?php }elseif($_smarty_tpl->tpl_vars['RangeInfo']->value['isnoob']==2){?>
		(<span class="galaxy-short-strong">s</span>)  
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['RangeInfo']->value['isVac']==0){?>
                (<span class="galaxy-short-vacation">v</span>) <?php }?> 
				<?php if ($_smarty_tpl->tpl_vars['RangeInfo']->value['isInac']==0){?>
                (<span class="galaxy-short-inactive">i</span>) <?php }?> 
				</td>
	<td><?php if ($_smarty_tpl->tpl_vars['RangeInfo']->value['id']!=$_smarty_tpl->tpl_vars['CUser_id']->value){?><a href="#" onclick="return Dialog.PM(<?php echo $_smarty_tpl->tpl_vars['RangeInfo']->value['id'];?>
);"><img src="./styles/images/iconav/mesages.png" title="private Message" alt="private Message"></a><?php }?></td>
	<td><?php if ($_smarty_tpl->tpl_vars['RangeInfo']->value['allyid']!=0){?><a href="game.php?page=alliance&amp;mode=info&amp;id=<?php echo $_smarty_tpl->tpl_vars['RangeInfo']->value['allyid'];?>
"><?php if ($_smarty_tpl->tpl_vars['RangeInfo']->value['allyid']==$_smarty_tpl->tpl_vars['CUser_ally']->value){?><span style="color:#33CCFF"><?php echo $_smarty_tpl->tpl_vars['RangeInfo']->value['allyname'];?>
</a><?php if ($_smarty_tpl->tpl_vars['RangeInfo']->value['fraction2']!=0){?><a class="tooltip" data-tooltip-content="Level <?php echo $_smarty_tpl->tpl_vars['RangeInfo']->value['level'];?>
"><?php echo $_smarty_tpl->tpl_vars['RangeInfo']->value['fraction'];?>
<?php }?></span><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['RangeInfo']->value['allyname'];?>
<?php }?></a><?php if ($_smarty_tpl->tpl_vars['RangeInfo']->value['fraction2']!=0){?><a class="tooltip" data-tooltip-content="Level <?php echo $_smarty_tpl->tpl_vars['RangeInfo']->value['level'];?>
"><?php echo $_smarty_tpl->tpl_vars['RangeInfo']->value['fraction'];?>
<?php }?><?php }else{ ?>-<?php }?></td>
	<td><?php echo $_smarty_tpl->tpl_vars['RangeInfo']->value['points'];?>
</td>
</tr>



	
<?php } ?>
 </table>
    <div class="gray_stripe">
    	<span style='color:#FFDEAD' class="tooltip" data-tooltip-content="<table>
	<tr>
		<th colspan='2'><span style='color:F30'>player</span></th>
	</tr>
	<tr>
		<td style='text-align:left;'>friends</td>
		<td style='text-align:left;'><span style='color:yellow'>UserName</span></td>
	</tr>
	<tr>
		<td style='text-align:left;'>enemies</td>
		<td style='text-align:left;'><span style='color:red'>UserName</span></td>
	</tr>
	
	
	<tr>
		<th colspan='2'>alliance</th>
	</tr>
	<tr>
		<td style='text-align:left;'>union</td>
		<td style='text-align:left;'><span style='color:#32CD32'>AllyName</span></td>
	</tr>
	<tr>
		<td style='text-align:left;'>war</td>
		<td style='text-align:left;'><span style='color:#FF0000'>AllyName</span></td>
	</tr>
	<tr>
		<td style='text-align:left;'>their alliance</td>
		<td style='text-align:left;'><span style='color:#33CCFF'>AllyName</span></td>
	</tr>
</table>">color diplomacy</span>
    </div>
</div>
</div>
</div>
            <div class="clear"></div>            
        </div><?php }} ?>