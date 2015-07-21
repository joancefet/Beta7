<?php /* Smarty version Smarty-3.1.13, created on 2015-07-21 12:56:33
         compiled from "/home/stell530/public_html/beta7/styles/templates/game/page.fleetStep1.default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:107979782255ae6bb1ccc641-95592899%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30f3de12c470eab374e66d8d4ccd79bf3515da9d' => 
    array (
      0 => '/home/stell530/public_html/beta7/styles/templates/game/page.fleetStep1.default.tpl',
      1 => 1436892736,
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
  'nocache_hash' => '107979782255ae6bb1ccc641-95592899',
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
  'unifunc' => 'content_55ae6bb25a7859_17202212',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ae6bb25a7859_17202212')) {function content_55ae6bb25a7859_17202212($_smarty_tpl) {?><?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php $_smarty = $_smarty_tpl->smarty; if (!is_callable(\'smarty_function_html_options\')) include \'/home/stell530/public_html/beta7/includes/libs/Smarty/plugins/function.html_options.php\';
?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
<?php /*  Call merged included template "main.header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("main.header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('bodyclass'=>"full"), 0, '107979782255ae6bb1ccc641-95592899');
content_55ae6bb1d262d1_50395777($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "main.header.tpl" */?>
<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'hasAdminAccess\']->value){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

<div class="globalWarning">
<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'admin_access_1\'];?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
 <a id="drop-admin"><?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'admin_access_link\'];?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
</a><?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'admin_access_2\'];?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

</div>
<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

<?php /*  Call merged included template "head_menu.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("head_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '107979782255ae6bb1ccc641-95592899');
content_55ae6bb1f2bc39_54547537($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "head_menu.tpl" */?>
<?php /*  Call merged included template "main.topnav.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("main.topnav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '107979782255ae6bb1ccc641-95592899');
content_55ae6bb21d7120_43833733($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "main.topnav.tpl" */?>
<?php /*  Call merged included template "main.navigation.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("main.navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '107979782255ae6bb1ccc641-95592899');
content_55ae6bb22e92f0_22461621($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "main.navigation.tpl" */?>


<div id="page">
<div id="content">
<div id="ally_content" class="conteiner">
    <div class="gray_stripe">
    	<?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_send_fleet'];?>

    </div>
<form action="game.php?page=fleetStep2" method="post" onsubmit="return CheckTarget()" id="form">
	<input type="hidden" name="token" value="<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'token\']->value;?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
">
	<input type="hidden" name="fleet_group" value="0">
	<input type="hidden" name="target_mission" value="<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'mission\']->value;?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
">
	<table class="tablesorter ally_ranks">
		<tr style="height:20px;">
			<td style="text-align:right;"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_destiny'];?>
</td>
			<td>
			<input type="text" id="galaxy" name="galaxy" size="3" maxlength="2" onkeyup="updateVars()" value="<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'galaxy\']->value;?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
">
				<input type="text" id="system" name="system" size="3" maxlength="4" onkeyup="updateVars()" value="<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'system\']->value;?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
">
				<input type="text" id="planet" name="planet" size="3" maxlength="2" onkeyup="updateVars()" value="<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'planet\']->value;?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
">
				

				<select id="type" name="type" onchange="updateVars()">
					<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo smarty_function_html_options(array(\'options\'=>$_smarty_tpl->tpl_vars[\'typeSelect\']->value,\'selected\'=>$_smarty_tpl->tpl_vars[\'type\']->value),$_smarty_tpl);?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

				</select>
			</td>
		</tr>
		<tr style="height:20px;">
			<td style="text-align:right;"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_fleet_speed'];?>
</td>
			<td>
				<select id="speed" name="speed" onChange="updateVars()">
					<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo smarty_function_html_options(array(\'options\'=>$_smarty_tpl->tpl_vars[\'speedSelect\']->value),$_smarty_tpl);?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

				</select> %
			</td>
		</tr>
		<tr style="height:20px;">
			<td style="text-align:right;"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_distance'];?>
</td>
			<td id="distance">-</td>
		</tr>
		<tr style="height:20px;">
			<td style="text-align:right;"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_flying_time'];?>
</th>
			<td id="duration">-</td>
		</tr>
		<tr style="height:20px;">
			<td style="text-align:right;"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_flying_arrival'];?>
</th>
			<td id="arrival">-</td>
		</tr>
		<tr style="height:20px;">
			<td style="text-align:right;"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_flying_return'];?>
</th>
			<td id="return">-</td>
		</tr>
		<tr style="height:20px;">
			<td style="text-align:right;"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_fuel_consumption'];?>
</td>
			<td id="consumption">-</td>
		</tr>
		<tr style="height:20px;">
			<td style="text-align:right;"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_max_speed'];?>
</td>
			<td id="maxspeed">-</td>
		</tr>
		<tr style="height:20px;">
			<td style="text-align:right;"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_cargo_capacity'];?>
</td>
			<td id="storage">-</td>
		</tr>
	</table>
	    
			
	
	
	
	   
    <div class="gray_stripe build_band">
    	<?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_my_planets'];?>

    </div>
	
	<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php  $_smarty_tpl->tpl_vars[\'ColonyRow\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'ColonyRow\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'colonyList\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'ColonyRow\']->key => $_smarty_tpl->tpl_vars[\'ColonyRow\']->value){
$_smarty_tpl->tpl_vars[\'ColonyRow\']->_loop = true;
?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

                <div class="fleet_my_planet_kord" onclick="setTarget(<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'ColonyRow\']->value[\'galaxy\'];?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
,<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'ColonyRow\']->value[\'system\'];?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
,<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'ColonyRow\']->value[\'planet\'];?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
,<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'ColonyRow\']->value[\'type\'];?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
);updateVars();">
            <span class="fleet_my_planet_kord_kord">[<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'ColonyRow\']->value[\'galaxy\'];?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
:<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'ColonyRow\']->value[\'system\'];?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
:<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'ColonyRow\']->value[\'planet\'];?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
]</span>
            <span class="fleet_my_planet_kord_name"><?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'ColonyRow\']->value[\'name\'];?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
 <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'ColonyRow\']->value[\'type\']==3){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'fl_moon_shortcut\'];?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
</span>
        </div>
               <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }
if (!$_smarty_tpl->tpl_vars[\'ColonyRow\']->_loop) {
?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php } ?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
			   
				   
				   
		<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'ACSList\']->value){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

<table class="tablesorter ally_ranks" style="table-layout: fixed;">
		<tr style="height:20px;">
			<th colspan="5"><?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'fl_acs_title\'];?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
</th>
		</tr>
		<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php  $_smarty_tpl->tpl_vars[\'ACSRow\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'ACSRow\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'ACSList\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
 $_smarty_tpl->tpl_vars[\'ACSRow\']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars[\'ACSRow\']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars[\'ACSRow\']->key => $_smarty_tpl->tpl_vars[\'ACSRow\']->value){
$_smarty_tpl->tpl_vars[\'ACSRow\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'ACSRow\']->iteration++;
 $_smarty_tpl->tpl_vars[\'ACSRow\']->last = $_smarty_tpl->tpl_vars[\'ACSRow\']->iteration === $_smarty_tpl->tpl_vars[\'ACSRow\']->total;
?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

		<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if (($_smarty_tpl->tpl_vars[\'ACSRow\']->iteration%$_smarty_tpl->tpl_vars[\'themeSettings\']->value[\'ACS_ROWS_ON_FLEET1\'])===1){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
<tr style="height:20px;"><?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

		
			<td><a href="javascript:setACSTarget(<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'ACSRow\']->value[\'galaxy\'];?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
,<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'ACSRow\']->value[\'system\'];?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
,<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'ACSRow\']->value[\'planet\'];?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
,<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'ACSRow\']->value[\'planet_type\'];?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
,<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'ACSRow\']->value[\'id\'];?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
);"><?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'ACSRow\']->value[\'name\'];?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
 - [<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'ACSRow\']->value[\'galaxy\'];?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
:<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'ACSRow\']->value[\'system\'];?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
:<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'ACSRow\']->value[\'planet\'];?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
]</a></td>
		
		<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'ACSRow\']->last&&($_smarty_tpl->tpl_vars[\'ACSRow\']->iteration%$_smarty_tpl->tpl_vars[\'themeSettings\']->value[\'ACS_ROWS_ON_FLEET1\'])!==0){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

		<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php $_smarty_tpl->tpl_vars[\'to\'] = new Smarty_variable($_smarty_tpl->tpl_vars[\'themeSettings\']->value[\'ACS_ROWS_ON_FLEET1\']-($_smarty_tpl->tpl_vars[\'ACSRow\']->iteration%$_smarty_tpl->tpl_vars[\'themeSettings\']->value[\'ACS_ROWS_ON_FLEET1\']), true, 0);?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

		<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php $_smarty_tpl->tpl_vars[\'foo\'] = new Smarty_Variable;$_smarty_tpl->tpl_vars[\'foo\']->step = 1;$_smarty_tpl->tpl_vars[\'foo\']->total = (int)ceil(($_smarty_tpl->tpl_vars[\'foo\']->step > 0 ? $_smarty_tpl->tpl_vars[\'to\']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars[\'to\']->value)+1)/abs($_smarty_tpl->tpl_vars[\'foo\']->step));
if ($_smarty_tpl->tpl_vars[\'foo\']->total > 0){
for ($_smarty_tpl->tpl_vars[\'foo\']->value = 1, $_smarty_tpl->tpl_vars[\'foo\']->iteration = 1;$_smarty_tpl->tpl_vars[\'foo\']->iteration <= $_smarty_tpl->tpl_vars[\'foo\']->total;$_smarty_tpl->tpl_vars[\'foo\']->value += $_smarty_tpl->tpl_vars[\'foo\']->step, $_smarty_tpl->tpl_vars[\'foo\']->iteration++){
$_smarty_tpl->tpl_vars[\'foo\']->first = $_smarty_tpl->tpl_vars[\'foo\']->iteration == 1;$_smarty_tpl->tpl_vars[\'foo\']->last = $_smarty_tpl->tpl_vars[\'foo\']->iteration == $_smarty_tpl->tpl_vars[\'foo\']->total;?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
<td>&nbsp;</td><?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }} ?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

		<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

		<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if (($_smarty_tpl->tpl_vars[\'ACSRow\']->iteration%$_smarty_tpl->tpl_vars[\'themeSettings\']->value[\'ACS_ROWS_ON_FLEET1\'])===0){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
</tr><?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

		<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php } ?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

	</table>
	
	<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>


	
                                                                        <div class="clear"></div>
	    <div class="gray_stripe build_band" style="padding-right:0; margin-top:2px;">
    	<input class="bottom_band_submit" type="submit" value=" Continue ">
    </div>
	</form>
</div>
	
	    
	    




	    
</form>
</div>
</form>
<script type="text/javascript">
data			= <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo json_encode($_smarty_tpl->tpl_vars[\'fleetdata\']->value);?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
;
shortCutRows	= <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'themeSettings\']->value[\'SHORTCUT_ROWS_ON_FLEET1\'];?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
;
fl_no_shortcuts	= '<?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_no_shortcuts'];?>
';
</script>
</div>
</div>
            <div class="clear"></div>            
        </div>


<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php  $_smarty_tpl->tpl_vars[\'cronjob\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'cronjob\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'cronjobs\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'cronjob\']->key => $_smarty_tpl->tpl_vars[\'cronjob\']->value){
$_smarty_tpl->tpl_vars[\'cronjob\']->_loop = true;
?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
<img src="cronjob.php?cronjobID=<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'cronjob\']->value;?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
" alt=""><?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php } ?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->getSubTemplate ("main.footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

<?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2015-07-21 12:56:33
         compiled from "/home/stell530/public_html/beta7/styles/templates/game/main.header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_55ae6bb1d262d1_50395777')) {function content_55ae6bb1d262d1_50395777($_smarty_tpl) {?><!DOCTYPE html>

<!--[if lt IE 7 ]> <html lang="<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
" class="no-js"> <!--<![endif]-->
<head>
	<title><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_fleet'];?>
 - <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'uni_name\']->value;?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
 - <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'game_name\']->value;?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
</title>
	<meta name="generator" content="2Moons <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
">
	<!-- 
		This website is powered by 2Moons <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

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
	var ServerTimezoneOffset = <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'Offset\']->value;?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
;
	var serverTime 	= new Date(<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[0];?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
, <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[1]-1;?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
, <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[2];?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
, <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[3];?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
, <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[4];?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
, <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[5];?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
);
	var startTime	= serverTime.getTime();
	var localTime 	= serverTime;
	var localTS 	= startTime;
	var Gamename	= document.title;
	var Ready		= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['ready'];?>
";
	var Skin		= "<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
";
	var Lang		= "<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
";
	var head_info	= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['fcm_info'];?>
";
	var auth		= <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo (($tmp = @$_smarty_tpl->tpl_vars[\'authlevel\']->value)===null||$tmp===\'\' ? \'0\' : $tmp);?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
;
	var days 		= <?php echo (($tmp = @json_encode($_smarty_tpl->tpl_vars['LNG']->value['week_day']))===null||$tmp==='' ? '[]' : $tmp);?>
 
	var months 		= <?php echo (($tmp = @json_encode($_smarty_tpl->tpl_vars['LNG']->value['months']))===null||$tmp==='' ? '[]' : $tmp);?>
 ;
	var tdformat	= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['js_tdformat'];?>
";
	var queryString	= "<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo strtr($_smarty_tpl->tpl_vars[\'queryString\']->value, array("\\\\" => "\\\\\\\\", "\'" => "\\\\\'", "\\"" => "\\\\\\"", "\\r" => "\\\\r", "\\n" => "\\\\n", "</" => "<\\/" ));?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
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
	<script type="text/javascript" src="./scripts/l18n/validationEngine/jquery.validationEngine-<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
.js"></script>
	<script type="text/javascript" src="./scripts/base/tooltip.js"></script>
	<script type="text/javascript" src="./scripts/game/base.js"></script>
	<script type="text/javascript" src="./scripts/game/newmail.js"></script>
	<script type="text/javascript" src="./scripts/game/qtip.js"></script>
	<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php  $_smarty_tpl->tpl_vars[\'scriptname\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'scriptname\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'scripts\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'scriptname\']->key => $_smarty_tpl->tpl_vars[\'scriptname\']->value){
$_smarty_tpl->tpl_vars[\'scriptname\']->_loop = true;
?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

	<script type="text/javascript" src="./scripts/game/<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'scriptname\']->value;?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
.js"></script>
	<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php } ?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

	
	<script type="text/javascript">
	$(function() {
		<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'execscript\']->value;?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

	});
	</script>
	
	
	<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'manual_11_step\']->value==0){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

	<script type="text/javascript">
	$(function() {
		qtips('#attack', 'Attention to your planet flies attacking fleet', 'bottomMiddle', 'topLeft');
setTimeout(function() { qtips('.over', 'Go to the review, to view the attackers fleet', 'bottomMiddle', 'topLeft') }, 4000);
setInterval(function() { AJAX() }, 6000)
	});
	</script>
	

	
	
	<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

	

	
	<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'manual_15_step\']->value==0){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

	<script type="text/javascript">
	$(function() {
		qtips('#munu_shipyard_fleet ', 'Go to Fleet. <br> Here you can build a battle fleet, attacks on other players or flight expedition.', 'rightMiddle', 'leftMiddle');
setInterval(function() { AJAX() }, 6000)
	});
	</script>
	<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

	
	<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'manual_24_step\']->value==0){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

	<script type="text/javascript">
	$(function() {
		qtips('#munu_academy ', 'Go to the Academy. <br> Here you will be able to enhance skills available to you by selecting one of three trees, broken down my classification..', 'rightMiddle', 'leftMiddle');
setInterval(function() { AJAX() }, 6000)
	});
	</script>
	<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

	
	<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'manual_26_step\']->value==0){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

	<script type="text/javascript">
	$(function() {
		qtips('#achievements_name ', 'Go to Achievements. <br> Here you can choose suitable for achieving your development strategy.', 'rightMiddle', 'leftMiddle');
setInterval(function() { AJAX() }, 6000)
	});
	</script>
	<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

	
	<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'manual_17_step\']->value==0){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

	<script type="text/javascript">
	$(function() {
		qtips('#munu_galaxy ', 'Go to the Galaxy. <br> This map of the universe, the planet where all the players are displayed.', 'rightMiddle', 'leftMiddle');
setInterval(function() { AJAX() }, 6000)
	});
	</script>
	
	<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

	
	<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'manual_19_step\']->value==0){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

	
	<script type="text/javascript">
	$(function() {
		qtips('.over ', 'Go to the review, to see the fleet sent for recycling', 'bottomMiddle', 'topLeft');
setInterval(function() { AJAX() }, 6000)
	});
	</script>
	
	<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

	
	
	<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'manual_21_step\']->value==0){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

	<script type="text/javascript">
	$(function() {
		qtips('#munu_senat ', 'Go to Senate. <br> Here you can hire experts in various categories that help grown their Empire.', 'rightMiddle', 'leftMiddle');
setInterval(function() { AJAX() }, 6000)
	});
	</script>
	
	<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

	
	
	
	
	<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'manual_13_step\']->value==0){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

	<script type="text/javascript">
	$(function() {
		qtips('.mesages ', 'Go to messages. <br> Red figure beside notifies you about the number of unread messages.', 'bottomMiddle', 'topMiddle');
setInterval(function() { AJAX() }, 6000)
	});
	</script>
		<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

	<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'manual_5_step\']->value==0){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

	<script type="text/javascript">
	$(function() {
setTimeout(function() { qtips('#munu_research', 'Log in here, for then that would protect against espionage.', 'rightMiddle', 'leftMiddle') }, 4000);
setInterval(function() { AJAX() }, 6000)
	});
	</script>
	
	<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

	
	<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'manual_8_step\']->value==0){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

	
	<script type="text/javascript">
	$(function() {
		qtips('#munu_shipyard_defense ', 'Go to Defense.<br>Here you will be able to increase the protection of the planet. ', 'rightMiddle', 'leftMiddle');
setInterval(function() { AJAX() }, 6000)
	});
	</script>
	
	<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

	
	
	
	
	<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'manuel_step_1_1\']->value==0){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

	
		<script type="text/javascript">
	
	$(function() {
		
qtips('#munu_build ', 'Go to Buildings.', 'rightMiddle', 'leftMiddle');
setInterval(function() { AJAX() }, 6000)
	});
	</script>
	<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

	

	<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'manual_step_3\']->value==0){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

	<script type="text/javascript">
	$(function() {
		qtips('#espionage ', 'Attention! Spy on your planet.', 'bottomMiddle', 'topLeft');
setTimeout(function() { qtips('.over ', 'Go to Overview .', 'bottomMiddle', 'topLeft') }, 3000);

setInterval(function() { AJAX() }, 6000)
	});
	</script>
	<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

	
	
	
	
	
	
	
	
	
	
	
	
	<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'manual_step_1\']->value==0){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

	
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
	<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>


   
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
" class="<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'bodyclass\']->value;?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
" >
	<div id="tooltip" class="tip"></div><?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2015-07-21 12:56:33
         compiled from "/home/stell530/public_html/beta7/styles/templates/game/head_menu.tpl" */ ?>
<?php if ($_valid && !is_callable('content_55ae6bb1f2bc39_54547537')) {function content_55ae6bb1f2bc39_54547537($_smarty_tpl) {?>
<div id="header">
            	
                <div id="top_nav">
                
                	<div id="top_nav_part_left">
                        
                        <a title="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['hnav_overview'];?>
" <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'manual_19_step\']->value==0){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
onclick="starttraining11()" <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
 <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'manual_11_step\']->value==0){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
onclick="starttraining6()" <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
 <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'manual_step_3\']->value==0){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
onclick="starttraining3()" <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
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
    <span id="new_email" class="new_email" <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'new_message\']->value==0){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
style="display:none;"<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
>

        <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'new_message\']->value;?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>


    </span>

</a>						
                    </div>                    
                
                	<div class="mini_planet_navigation">
                    	                        <span class="link_back urlpalnet"  url="cp=<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'previous_planet\']->value==\'\'){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'id\']->value;?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }else{ ?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'previous_planet\']->value;?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
"></span>
                                                                        <span class="link_next urlpalnet" url="cp=<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'next_planet\']->value==\'\'){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'id\']->value;?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }else{ ?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'next_planet\']->value;?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
"></span>
                                            </div>
                  
<div id="planet_select">
                    	<div class="active_panet">
                    		<div class="name_palnet"><?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'AUPLANETS\']->value;?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
</div> 
                            <span class="ico_build"></span>                            
                            <div class="coordinates_palnet">[<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'AUGAL\']->value;?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
:<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'AUST\']->value;?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
:<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'AUPLA\']->value;?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
]</div>
                            <div class="clear"></div>
                        </div>
                        <div id="list_palnet">
						<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php  $_smarty_tpl->tpl_vars[\'i\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'i\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'k\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'AllPlanets\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'i\']->key => $_smarty_tpl->tpl_vars[\'i\']->value){
$_smarty_tpl->tpl_vars[\'i\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'k\']->value = $_smarty_tpl->tpl_vars[\'i\']->key;
?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

                        	                            <div class="separator_h"></div> 
                                                         
                            <div class="palnet_row active_palnet_row">
                            	<div class="fleet_indicators">
                                	<img id="p211736m1" style="display:none;" src="styles/images/iconav/p_select_attack.png" alt="" class="tooltip" data-tooltip-content="planet attack">                                    
                                    <img id="p211736m12" style="display:none;" src="styles/images/iconav/p_select_grab.png" alt="" class="tooltip" data-tooltip-content="planet capture">
                                    <img id="p211736m6" style="display:none;" src="styles/images/iconav/p_select_spio.png" alt="" class="tooltip" data-tooltip-content="planet spy">
                                    <img id="p211736m10" style="display:none;" src="styles/images/iconav/p_select_rocket.png" alt="" class="tooltip" data-tooltip-content="Fly a rocket to the planet!">
                                        
                                    <div class="clear"></div>
                                </div>
                            	<span class="urlpalnet" url="cp=<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'i\']->value[\'id\'];?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
">
                                	<span class="name_palnet" <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'i\']->value[\'immunity_until\']>$_smarty_tpl->tpl_vars[\'timing\']->value){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
style="color:#ff5252 !important;"<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
><?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'i\']->value[\'name\'];?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
</span>
                                    <span class="ico_build">
                                    <br>                                      <br>                                                                          </span>                                 
                            		<span class="coordinates_palnet">[<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'i\']->value[\'galaxy\'];?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
:<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'i\']->value[\'system\'];?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
:<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'i\']->value[\'planet\'];?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
]</span>
                                </span>
								<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'i\']->value[\'id_luna\']!=0){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

								
								<span class="urlpalnet" url="cp=<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'i\']->value[\'id_luna\'];?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
">
								<span class="moon_palnet"><img src='./styles/images/iconav/moon.png'></span>
								</span><?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

                                                            </div> 
                                 
							<div class="separator_h"></div>      
<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php } ?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
 
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
                	<div id="level_active" style="width:<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'experience_peace_percent\']->value;?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
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
                        &nbsp;<span style='color:#0C3'>+<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'experience_peace_level\']->value;?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
%</span> <?php echo $_smarty_tpl->tpl_vars['LNG']->value['hnav_peace_extract'];?>
<br>
                        &nbsp;<span style='color:#0C3'>+<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'experience_peace_level\']->value;?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
%</span> <?php echo $_smarty_tpl->tpl_vars['LNG']->value['hnav_peace_speed'];?>
<br>
                        &nbsp;<span style='color:#0C3'>+<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'experience_peace_level\']->value;?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
%</span> <?php echo $_smarty_tpl->tpl_vars['LNG']->value['hnav_peace_energyprod'];?>
<br>
                        &nbsp;<span style='color:#0C3'>+<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'peace_reward_slots\']->value;?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
</span> <?php echo $_smarty_tpl->tpl_vars['LNG']->value['hnav_peace_slot'];?>
<br>
                        &nbsp;<span style='color:#0C3'>+<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'peace_reward_fields\']->value;?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
</span> <?php echo $_smarty_tpl->tpl_vars['LNG']->value['hnav_peace_planet'];?>
<br>
                        &nbsp;<span style='color:#0C3'>+<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'peace_reward_golf\']->value;?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
</span> <?php echo $_smarty_tpl->tpl_vars['LNG']->value['hnav_peace_moon'];?>
<br>
                        <div style='border-bottom:1px dashed #666; margin:7px 0 4px 0;'></div>
                        <span style='color:#999'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['hnav_exp'];?>
 <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'experience_peace\']->value;?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
 / <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'experience_peace_max\']->value;?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
</span>">
                		<?php echo $_smarty_tpl->tpl_vars['LNG']->value['hnav_lvl'];?>
 <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'experience_peace_level\']->value;?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
 (<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'experience_peace_percent\']->value;?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
%)
                    </div>
                </div><!--/level-->
                
                <div id="Batlelevel">
                	<div id="Batlelevel_active" style="width:<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'experience_combat_percent\']->value;?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
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
                        &nbsp;<span style='color:#0C3'>+<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'experience_combat_level\']->value;?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
%</span> <?php echo $_smarty_tpl->tpl_vars['LNG']->value['hnav_combat_tech'];?>
<br>
                        &nbsp;<span style='color:#0C3'>-<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'combat_reward_deut\']->value;?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
%</span> <?php echo $_smarty_tpl->tpl_vars['LNG']->value['hnav_combat_fuel'];?>
<br>
                        &nbsp;<span style='color:#0C3'>+<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'combat_reward_expe\']->value;?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
%</span> <?php echo $_smarty_tpl->tpl_vars['LNG']->value['hnav_combat_extract'];?>
<br>                       
                        &nbsp;<span style='color:#0C3'>+<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'combat_reward_bonus\']->value;?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
%</span> <?php echo $_smarty_tpl->tpl_vars['LNG']->value['hnav_combat_bonus_but'];?>
<br> 
                        &nbsp;<span style='color:#0C3'>+<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'combat_reward_collider\']->value;?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
%</span> <?php echo $_smarty_tpl->tpl_vars['LNG']->value['hnav_combat_collider'];?>
<br>
                        <div style='border-bottom:1px dashed #666; margin:7px 0 4px 0;'></div>
                        <span style='color:#999'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['hnav_exp'];?>
 <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'experience_combat\']->value;?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
 / <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'experience_combat_max\']->value;?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
</span>">
                		<?php echo $_smarty_tpl->tpl_vars['LNG']->value['hnav_lvl'];?>
 <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'experience_combat_level\']->value;?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
 (<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'experience_combat_percent\']->value;?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
%)
                    </div>
                </div><!--/Batlelevel--><?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2015-07-21 12:56:34
         compiled from "/home/stell530/public_html/beta7/styles/templates/game/main.topnav.tpl" */ ?>
<?php if ($_valid && !is_callable('content_55ae6bb21d7120_43833733')) {function content_55ae6bb21d7120_43833733($_smarty_tpl) {?> <div id="res_nav">
 <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'cosmonaute_day\']->value==1){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

 <div id="top_cosmonautics">
                    		<div class="top_gift_left"></div>
                        	<div class="top_gift_mid"></div>
                        	<div class="top_gift_right"></div>
                        </div>
						
						
						<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }elseif($_smarty_tpl->tpl_vars[\'new_year\']->value==1){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

                	                    	<div id="top_new_year">
                    		<div class="top_gift_left"></div>
                        	<div class="top_gift_mid"></div>
                        	<div class="top_gift_right"></div>
                        </div>
						<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }else{ ?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

						<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

						
                	      <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php  $_smarty_tpl->tpl_vars[\'resouceData\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'resouceData\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'resourceID\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'resourceTable\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'resouceData\']->key => $_smarty_tpl->tpl_vars[\'resouceData\']->value){
$_smarty_tpl->tpl_vars[\'resouceData\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'resourceID\']->value = $_smarty_tpl->tpl_vars[\'resouceData\']->key;
?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

									<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if (!isset($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'current\'])){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

									<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php $_smarty_tpl->createLocalArrayVariable(\'resouceData\', true, 0);
$_smarty_tpl->tpl_vars[\'resouceData\']->value[\'current\'] = $_smarty_tpl->tpl_vars[\'resouceData\']->value[\'max\']+$_smarty_tpl->tpl_vars[\'resouceData\']->value[\'used\'];?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
   

									<div id="res_block_<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'resouceData\']->value[\'name\'];?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
" class="bloc_res">
                		<div class="ico_res tooltip"></div>   
                                        
                        <div class="stock_res">
						
<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'used1\']>$_smarty_tpl->tpl_vars[\'resouceData\']->value[\'max\']){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

						<div class="stock_percentage stock_percentage_left" style="width:<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'resouceData\']->value[\'percenta\'];?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
%;"></div>
                        <div class="stock_percentage stock_percentage_right" style="width:0;display:none;";"></div>
						<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }else{ ?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

						<div class="stock_percentage stock_percentage_left" style="width:0;display:none;";"></div>
                        <div class="stock_percentage stock_percentage_right" style="width:<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'resouceData\']->value[\'percent\'];?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
%;"></div>
						<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

							
							
							

							<div class="stock_text tooltip" data-tooltip-content="<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'current\']);?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
"><span id="current_<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'resouceData\']->value[\'name\'];?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
" name="<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'current\']);?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
" data-real="<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'resouceData\']->value[\'current\'];?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
"><?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'current\']);?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
&nbsp;/&nbsp;<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'max\']);?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
</span> </div>
                        </div>
                    </div>					
									
<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }else{ ?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
								
  									
	
                	<div id="res_block_<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'resouceData\']->value[\'name\'];?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
" class="bloc_res">
                		<div class="ico_res"></div>   
									<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if (!isset($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'current\'])||!isset($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'max\'])){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

									
									<div class="stock_res">
									<div class="stock_text"><span id="current_<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'resouceData\']->value[\'name\'];?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
" name="<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'current\']);?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
" data-real="<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'resouceData\']->value[\'current\'];?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
"><?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'current\']);?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
</span>
									</div>
									 </div>
									<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }else{ ?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

									
									<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'name\']!="darkmatter"){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

                        <a href="game.php?page=trader&amp;mode=trade&amp;resource=<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceID\']->value;?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
" title="Trader" class="exchange_res"></a>    <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
                
                        <div class="stock_res">
                        	
							
							<div class="stock_percentage" style="width:<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'resouceData\']->value[\'percent\'];?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
%;"></div>
                                
							
							<div class="stock_text tooltip" <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'name\']!="darkmatter"){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
class="bloc_res tooltip" data-tooltip-content="<span class='p_res'><?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'resouceData\']->value[\'name\'];?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
</span><br /><br /><?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'PPS\'];?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
: <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'resouceData\']->value[\'information\'];?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
<br /><?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'PPD\'];?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
: <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'resouceData\']->value[\'informationd\'];?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
<br /><?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'PPW\'];?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
: <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'resouceData\']->value[\'informationz\'];?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
 <div style='border-bottom:1px dashed #666; margin:7px 0 4px 0;'></div> <span style='color:#999'><?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'current\']);?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
&nbsp;/&nbsp;<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'max\']);?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
</span>"<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
><span id="current_<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'resouceData\']->value[\'name\'];?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
" name="<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'current\']);?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
" data-real="<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'resouceData\']->value[\'current\'];?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
"><?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'resouceData\']->value[\'current\'];?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
</span><?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'name\']!="darkmatter"){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
 (<span class="pricent"><?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'resouceData\']->value[\'percent\'];?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
</span>%)<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
     </div>
                        </div>
						 <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

                    </div>
                    <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

									<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php } ?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

                   
                    
				   
				   
					
                </div><!--/res_nav-->                

		<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if (!$_smarty_tpl->tpl_vars[\'vmode\']->value){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

		<script type="text/javascript">
		var viewShortlyNumber	= <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo json_encode($_smarty_tpl->tpl_vars[\'shortlyNumber\']->value);?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

		var vacation			= <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'vmode\']->value;?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
;
		<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php  $_smarty_tpl->tpl_vars[\'resouceData\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'resouceData\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'resourceID\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'resourceTable\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'resouceData\']->key => $_smarty_tpl->tpl_vars[\'resouceData\']->value){
$_smarty_tpl->tpl_vars[\'resouceData\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'resourceID\']->value = $_smarty_tpl->tpl_vars[\'resouceData\']->key;
?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

		<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'production\'])){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

		resourceTicker({
			available: <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo json_encode($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'current\']);?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
,
			limit: [0, <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo json_encode($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'max\']);?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
],
			production: <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo json_encode($_smarty_tpl->tpl_vars[\'resouceData\']->value[\'production\']);?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
,
			valueElem: "current_<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'resouceData\']->value[\'name\'];?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
"
		}, true);
		<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

		<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php } ?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

		</script>
		<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

	</div>
	<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'closed\']->value){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

	<div class="infobox"><?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'ov_closed\'];?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
</div>
	<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }elseif($_smarty_tpl->tpl_vars[\'delete\']->value){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

	<div class="infobox"><?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'delete\']->value;?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
</div>
	<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }elseif($_smarty_tpl->tpl_vars[\'vacation\']->value){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

	<div class="infobox"><?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'tn_vacation_mode\'];?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
 <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'vacation\']->value;?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
</div>
	<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

	</div><!--/header--><?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2015-07-21 12:56:34
         compiled from "/home/stell530/public_html/beta7/styles/templates/game/main.navigation.tpl" */ ?>
<?php if ($_valid && !is_callable('content_55ae6bb22e92f0_22461621')) {function content_55ae6bb22e92f0_22461621($_smarty_tpl) {?> <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'show_dbonus\']->value==2){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
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
</script><?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

<div style="display: none;" id="scroller">
<a class="scroller_mesages" href="game.php?page=messages" onclick="document.location.href = 'game.php?page=messages'">
<span class="mesages" <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'new_message\']->value==0){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
style="display:none;"<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
></span>
<span class="new_email" <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'new_message\']->value==0){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
style="display:none;"<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
>
<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'new_message\']->value;?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

</span>
<span class="clear"></span>
</a>
<span class="go_top_bg">Top</span>
</div>
<div id="left_side">        
<div id="left_menu">
<div id="indicators">        	
<div id="attack" class="<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'attack\']->value;?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
 indicator tooltip" data-tooltip-content="<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'attack\']->value==\'active_indicator\'){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'NIA_on\'];?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }else{ ?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'NIA\'];?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
"><div class="icoi"></div></div>
<div id="grab" class="indicator tooltip" data-tooltip-content="<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'attack\']->value==\'active_indicator\'){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'FORR_on\'];?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }else{ ?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'FORR\'];?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
"><div class="icoi"></div></div>
<div id="destruction" class="<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'destroy\']->value;?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
 indicator tooltip" data-tooltip-content="<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'destroy\']->value==\'active_indicator\'){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'YMIS_on\'];?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }else{ ?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'YMIS\'];?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
"><div class="icoi"></div></div>
<div id="espionage" class="<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'spying\']->value;?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
 indicator tooltip" data-tooltip-content="<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'spying\']->value==\'active_indicator\'){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'YEINBS_on\'];?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }else{ ?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'YEINBS\'];?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
" href="game.php?page=overview"><div class="icoi"></div></div>
<div id="rocket" class="<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'rocket\']->value;?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
 indicator tooltip" data-tooltip-content="<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'rocket\']->value==\'active_indicator\'){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'NIR_on\'];?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }else{ ?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'NIR\'];?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
"><div class="icoi"></div></div>
</div>     
<div class="servertime"><?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'servertime\']->value;?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
</div>
<div class="separator"></div>
<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'bonus_timer\']->value<$_smarty_tpl->tpl_vars[\'TIME\']->value){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
     <a title="Bonus" class="big_btn red btn_menu btn_menu_big" href="game.php?page=bonus">
<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'bonte_button\']->value!=0){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
x<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'bonte_button\']->value;?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
|<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
<span><?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'alm_bonus\'];?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
</span></a><?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

<a class="big_btn btn_menu btn_menu_big"  href="game.php?page=donatebis"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['alm_purchase'];?>
 <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'pointe\']->value!=0){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
<span style="color:#FC0;">+<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'pointe\']->value;?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
%</span><?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
</a>
<a  href="?page=premium" class="big_btn premium btn_menu btn_menu_big">
<img class="left" src="./styles/theme/gow/images/ico-account-premium.png" alt="Premium Account" />
<span style="color:#FC0;"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['alm_premium'];?>
 <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'premiun_extra\']->value!=0){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
<span style="color:#09C;">+<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'premiun_extra\']->value;?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
%</span><?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
</span>
<img class="right" src="./styles/theme/gow/images/ico-account-premium.png" alt="Premium Account" />
</a>
<div class="separator"></div>
<a class="btn_menu" href="game.php?page=research" id="munu_research" <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'manual_step_4\']->value==0){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
onclick="starttraining4()"<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
><?php echo $_smarty_tpl->tpl_vars['LNG']->value['alm_reseach'];?>
</a>		        	<a class="btn_menu" href="game.php?page=buildings" id="munu_build" <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'manual_step_1\']->value==0){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
onclick="starttraining2()"<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
><?php echo $_smarty_tpl->tpl_vars['LNG']->value['alm_buildings'];?>
</a>		        	<a class="btn_menu" href="game.php?page=shipyard&amp;mode=fleet" id="munu_shipyard_fleet" <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'manual_15_step\']->value==0){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
onclick="starttraining8()"<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
><?php echo $_smarty_tpl->tpl_vars['LNG']->value['alm_shipyard'];?>
</a>		        	<a class="btn_menu" href="game.php?page=shipyard&amp;mode=defense" id="munu_shipyard_defense" <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'manual_8_step\']->value==0){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
onclick="starttraining5()"<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
><?php echo $_smarty_tpl->tpl_vars['LNG']->value['alm_defense'];?>
</a>		        	<a class="btn_menu" href="game.php?page=fleetTable"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['alm_fleets'];?>
</a>		        	        	<a class="btn_menu" href="game.php?page=resources" id="munu_resources"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['alm_resource'];?>
</a>        
<a class="btn_menu" href="game.php?page=officier" id="munu_senat" <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'manual_21_step\']->value==0){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
onclick="starttraining12()"<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
><?php echo $_smarty_tpl->tpl_vars['LNG']->value['alm_senat'];?>
</a>
<a class="btn_menu" href="game.php?page=port"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['alm_port'];?>
</a>   
<a class="btn_menu" href="game.php?page=trader"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['alm_adv_trader'];?>
</a>
<a class="btn_menu" href="game.php?page=academy">Academia <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'academy_reduce\']->value!=0){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
<span style="color:#FC0;">-<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'academy_reduce\']->value;?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
%</span><?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
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
<a class="btn_menu" href="game.php?page=galaxy" id="munu_galaxy" <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'manual_17_step\']->value==0){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
onclick="starttraining9()"<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
><?php echo $_smarty_tpl->tpl_vars['LNG']->value['alm_galaxy'];?>
</a>
<a class="btn_menu" href="game.php?page=alliance"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['alm_ally'];?>
</a>  		
<a class="btn_menu" href="game.php?page=battleSimulator"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['alm_battlesim'];?>
</a>
<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'uni_value\']->value==1){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
    <a class="btn_menu" <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'manual_26_step\']->value==0){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
onclick="starttraining15()"<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
 href="game.php?page=Achievements" id="achievements_name"><?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'alm_achievement\'];?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
</a> <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

<a class="btn_menu" href="game.php?page=Refystem" id="munu_refsystem"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['alm_referal'];?>
</a>
<a class="btn_menu" href="game.php?page=Feedback" id="munu_refsystem"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['alm_feedback'];?>
</a>
<div class="clear"></div>
<div class="separator"></div>
<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'nvote\']->value==1){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
	<a title="Promote us" class="big_btn red btn_menu btn_menu_big" href="game.php?page=Promote">
<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'alm_promote\'];?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
</a><?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
 
<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'authlevel\']->value>0){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
 <a  href="admin.php" class="big_btn green btn_menu btn_menu_big">Administração</a><?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

<div class="clear"></div>
<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'cosmonaute_day\']->value==1){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

<div id="bottom_cosmonautics">
<div class="bottom_gift_bg">
<a <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'gift1\']->value>0){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
href="?page=bonus&mode=gift1"<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
 class="gift_bloc gift_1 <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'gift1\']->value==0){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
gift_opacity<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
 tooltip" data-tooltip-content="When activated you get <b>50</b> antimatter<br>
(Flying Saucer will be lost when)"><?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'gift1\']->value;?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
</a>
<a <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'gift2\']->value>0){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
href="?page=bonus&mode=gift2"<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
 class="gift_bloc gift_2 <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'gift2\']->value==0){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
gift_opacity<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
 tooltip" data-tooltip-content="When activate, you get <b>50</b> antimatter<br>
(The alien will then be lost)"><?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'gift2\']->value;?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
</a>
<a <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'gift3\']->value>0){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
href="?page=bonus&mode=gift3"<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
 class="gift_bloc gift_3 <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'gift3\']->value==0){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
gift_opacity<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
 tooltip" data-tooltip-content="When activated you get <b>50</b> antimatter<br>
(Rocket will be lost when)"><?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'gift3\']->value;?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
</a>
<a <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'gift4\']->value>0){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
href="?page=bonus&mode=gift4"<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
 class="gift_bloc gift_4 <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'gift4_1\']->value==0){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
gift_opacity<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
 tooltip" data-tooltip-content="When you activated Cosmonaut, 
<br>You will receive 300 Antimatter<br>
And as you have a 50% chance:
<br><span style=' margin-left: 9px; margin-right: 4px; cursor: default; float: left;'>•</span>pontos de Academia <b>1-25</b>
<br><span style=' margin-left: 9px; margin-right: 4px; cursor: default; float: left;'>•</span>experiência de pascifismo <b>150-3500</b>
<br><span style=' margin-left: 9px; margin-right: 4px; cursor: default; float: left;'>•</span>bonus de anti matéria <b>200</b>
<br><span style=' margin-left: 9px; margin-right: 4px; cursor: default; float: left;'>•</span>Get <b>frisbee</b>
<br><span style=' margin-left: 9px; margin-right: 4px; cursor: default; float: left;'>•</span>Get <b>alien</b> 
<br><span style=' margin-left: 9px; margin-right: 4px; cursor: default; float: left;'>•</span>Get <b>space rocket</b> "><?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'gift4\']->value;?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
</a>
</div>
</div>
<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'new_year\']->value==1){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

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
<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

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
document.getElementById('beepataks').volume=<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'alarm_volume\']->value;?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
;

</script>
</div>  
</div><!--/left_side-->
<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'show_dbonus\']->value!=1){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>

<div id="info-dialog" title="Daily Bonus" >
                <!-- Rewards panel (Always visible) -->
<div id="activityRewards_dayHolder">
<form action="game.php?page=dbonus" method="POST">
<input name="cmd" value="1" type="hidden">
			<div class="dayCard <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'xxx\']->value!=1){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }else{ ?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
active<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
" data-day="1" data-type="Income15">

			<div class="boxDayNameBox">Day 1</div>
			<div class="boxImage premiumAccount"></div>
			<div class="boxDescription">This will reward you with 5 free "Academy" points !</div>
				<div class="boxClaim">							
					<input id="activityRewards_button_1"  <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'xxx\']->value!=1){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
disabled="disabled" class="inactive"<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }else{ ?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
class="active"<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
 value="Claim" <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'xxx\']->value==1){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
onclick="$('#info-dialog').dialog('close');"<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
 type="submit">
				</div>
			</div>
</form>
		
		<form action="game.php?page=dbonus" method="POST">
<input name="cmd" value="2" type="hidden">
			<div class="dayCard <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'xxx\']->value!=2){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }else{ ?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
active<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
" data-day="2" data-type="Income30">

			<div class="boxDayNameBox">
									Day 2							</div>

			<div class="boxImage income30"></div>

			<div class="boxDescription">This will reward you with <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'rewardss\']->value;?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
 "Peace" experience !</div>

							<div class="boxClaim">
					<input id="activityRewards_button_2" <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'xxx\']->value!=2){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
disabled="disabled" class="inactive"<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }else{ ?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
class="active"<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
 value="Claim !" <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'xxx\']->value==2){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
onclick="$('#info-dialog').dialog('close');"<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
 type="submit">
				</div>
			
		</div>
		</form>
		<form action="game.php?page=dbonus" method="POST">
<input name="cmd" value="3" type="hidden">
			<div class="dayCard <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'xxx\']->value!=3){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }else{ ?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
active<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
" data-day="3" data-type="Ozone50">

			<div class="boxDayNameBox">
									Day 3							</div>

			<div class="boxImage income60"></div>

			<div class="boxDescription">Get 30% extra production on all your planets for 24H !</div>

							<div class="boxClaim">
					<input id="activityRewards_button_3" <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'xxx\']->value!=3){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
disabled="disabled" class="inactive"<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }else{ ?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
class="active"<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
 value="Claim !" <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'xxx\']->value==3){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
onclick="$('#info-dialog').dialog('close');"<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
 type="submit">
				</div>
			
		</div>
		</form>
		<form action="game.php?page=dbonus" method="POST">
<input name="cmd" value="4" type="hidden">
			<div class="dayCard <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'xxx\']->value!=4){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }else{ ?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
active<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
" data-day="4" data-type="Income60">

			<div class="boxDayNameBox">
									Day 4							</div>

			<div class="boxImage credits"></div>

			<div class="boxDescription">This gift will reward u with 250.000 DM !</div>

							<div class="boxClaim">
					<input id="activityRewards_button_4" <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'xxx\']->value!=4){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
disabled="disabled" class="inactive"<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }else{ ?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
class="active"<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
 value="Claim !" <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'xxx\']->value==4){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
onclick="$('#info-dialog').dialog('close');"<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
 type="submit">
				</div>
			
		</div>
		</form>
		<form action="game.php?page=dbonus" method="POST">
<input name="cmd" value="5" type="hidden">
			<div class="dayCard <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'xxx\']->value!=5){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }else{ ?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
active<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
" data-day="5" data-type="Premium8">

			<div class="boxDayNameBox">
									Day 5							</div>

			<div class="boxImage income15"></div>

			<div class="boxDescription">The surprise box will reward you with random bonuses !</div>

							<div class="boxClaim">
					<input id="activityRewards_button_5" <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'xxx\']->value!=5){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
disabled="disabled" class="inactive"<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }else{ ?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
class="active"<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
 value="Claim !" <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'xxx\']->value==5){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
onclick="$('#info-dialog').dialog('close');"<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
 type="submit">
				</div>
			
		</div>
		</form>
		<form action="game.php?page=dbonus" method="POST">
<input name="cmd" value="6" type="hidden">
			<div class="dayCard <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'xxx\']->value!=6){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }else{ ?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
active<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
" data-day="6" data-type="Premium2">

			<div class="boxDayNameBox">
									Day 6							</div>

			<div class="boxImage ozone"></div>

			<div class="boxDescription">This bonus will give u one extra planet slot !</div>

							<div class="boxClaim">
					<input id="activityRewards_button_6" <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'xxx\']->value!=6){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
disabled="disabled" class="inactive"<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }else{ ?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
class="active"<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
 value="Claim !" <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'xxx\']->value==6){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
onclick="$('#info-dialog').dialog('close');"<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
 type="submit">
				</div>
			
		</div>
		</form>
				<form action="game.php?page=dbonus" method="POST">
<input name="cmd" value="<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php echo $_smarty_tpl->tpl_vars[\'randomd\']->value;?>
/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
" type="hidden">
			<div class="dayCard <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'xxx\']->value!=7){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }else{ ?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
active<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
" data-day="7" data-type="MetaRewardX2">

			<div class="boxDayNameBox">
									Day 7						</div>

			<div class="boxImage meta"></div>

			<div class="boxDescription">This will reward u randomly with one of the former bonuses !</div>
			<div class="boxClaim">
					<input id="activityRewards_button_7" <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'xxx\']->value!=7){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
disabled="disabled" class="inactive"<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }else{ ?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
class="active"<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
 value="Claim !" <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php if ($_smarty_tpl->tpl_vars[\'xxx\']->value==7){?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
onclick="$('#info-dialog').dialog('close');"<?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
 type="submit">
				</div></div>
				</form>
				
			</div>

			</div> <?php echo '/*%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/<?php }?>/*/%%SmartyNocache:107979782255ae6bb1ccc641-95592899%%*/';?>
<?php }} ?>