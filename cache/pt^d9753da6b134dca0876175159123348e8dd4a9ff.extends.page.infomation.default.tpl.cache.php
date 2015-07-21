<?php /* Smarty version Smarty-3.1.13, created on 2015-07-21 09:52:11
         compiled from "/home/stell530/public_html/beta7/styles/templates/game/page.infomation.default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5290032655ae407bac9172-91032853%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9753da6b134dca0876175159123348e8dd4a9ff' => 
    array (
      0 => '/home/stell530/public_html/beta7/styles/templates/game/page.infomation.default.tpl',
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
  ),
  'nocache_hash' => '5290032655ae407bac9172-91032853',
  'function' => 
  array (
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_55ae407bd7cbb0_01227398',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ae407bd7cbb0_01227398')) {function content_55ae407bd7cbb0_01227398($_smarty_tpl) {?><?php /*  Call merged included template "main.header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("main.header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('bodyclass'=>"popup"), 0, '5290032655ae407bac9172-91032853');
content_55ae407bb6be80_22425868($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "main.header.tpl" */?>

<table style="width:100%;">
	<tbody>
	<tr>
		<th><?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'tech\'][$_smarty_tpl->tpl_vars[\'elementID\']->value];?>
/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>
</th>
	</tr>

	<tr>
		<td>
			<table>
				<tr>
					<td class="transparent" style="width:120px"><img width="120" height="120" src="<?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>
gebaeude/<?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php echo $_smarty_tpl->tpl_vars[\'elementID\']->value;?>
/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>
.<?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php if ($_smarty_tpl->tpl_vars[\'elementID\']->value>=600&&$_smarty_tpl->tpl_vars[\'elementID\']->value<=699){?>/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>
jpg<?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php }elseif($_smarty_tpl->tpl_vars[\'elementID\']->value>700){?>/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>
png<?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php }else{ ?>/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>
gif<?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php }?>/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>
" alt=""></td>
					<td class="transparent left"><p><?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'longDescription\'][$_smarty_tpl->tpl_vars[\'elementID\']->value];?>
/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>
</p>
					<?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'Bonus\']->value)){?>/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>
<p>
					<br>
					<?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php  $_smarty_tpl->tpl_vars[\'elementBouns\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'elementBouns\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'BonusName\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'Bonus\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'elementBouns\']->key => $_smarty_tpl->tpl_vars[\'elementBouns\']->value){
$_smarty_tpl->tpl_vars[\'elementBouns\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'BonusName\']->value = $_smarty_tpl->tpl_vars[\'elementBouns\']->key;
?>/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>
<font color="#00FF00"><?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php if ($_smarty_tpl->tpl_vars[\'elementBouns\']->value[0]<0){?>/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>
-<?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php }else{ ?>/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>
+<?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php }?>/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>
<?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php if ($_smarty_tpl->tpl_vars[\'elementBouns\']->value[1]==0){?>/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>
<?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php echo abs($_smarty_tpl->tpl_vars[\'elementBouns\']->value[0]*100);?>
/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>
%<?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php }else{ ?>/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>
<?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php echo floatval($_smarty_tpl->tpl_vars[\'elementBouns\']->value[0]);?>
/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>
<?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php }?>/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>
  <?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bonus\'][$_smarty_tpl->tpl_vars[\'BonusName\']->value];?>
/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>
</font><br><?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php } ?>/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>

					</p><?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php }?>/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>
	
					
					
					</td>
				</tr>
			</table>
		</td>
	</tr>
	</tbody>
</table>
<?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'productionTable\']->value[\'production\'])){?>/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>

<?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php echo $_smarty_tpl->getSubTemplate ("shared.information.production.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>

<?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php }?>/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>

<?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'productionTable\']->value[\'storage\'])){?>/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>

<?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php echo $_smarty_tpl->getSubTemplate ("shared.information.storage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>

<?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php }?>/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>

<?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'FleetInfo\']->value)){?>/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>

<?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php echo $_smarty_tpl->getSubTemplate ("shared.information.shipInfo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>

<?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php }?>/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>

<?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'gateData\']->value)){?>/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>

<?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php echo $_smarty_tpl->getSubTemplate ("shared.information.gate.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>

<?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php }?>/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>

<?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'MissileList\']->value)){?>/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>

<?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php echo $_smarty_tpl->getSubTemplate ("shared.information.missiles.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>

<?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php }?>/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>


<?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php echo $_smarty_tpl->getSubTemplate ("main.footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>
<?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2015-07-21 09:52:11
         compiled from "/home/stell530/public_html/beta7/styles/templates/game/main.header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_55ae407bb6be80_22425868')) {function content_55ae407bb6be80_22425868($_smarty_tpl) {?><!DOCTYPE html>

<!--[if lt IE 7 ]> <html lang="<?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>
" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="<?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>
" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>
" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>
" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>
" class="no-js"> <!--<![endif]-->
<head>
	<title><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_info'];?>
 - <?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php echo $_smarty_tpl->tpl_vars[\'uni_name\']->value;?>
/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>
 - <?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php echo $_smarty_tpl->tpl_vars[\'game_name\']->value;?>
/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>
</title>
	<meta name="generator" content="2Moons <?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>
">
	<!-- 
		This website is powered by 2Moons <?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>

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
	var ServerTimezoneOffset = <?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php echo $_smarty_tpl->tpl_vars[\'Offset\']->value;?>
/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>
;
	var serverTime 	= new Date(<?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[0];?>
/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>
, <?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[1]-1;?>
/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>
, <?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[2];?>
/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>
, <?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[3];?>
/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>
, <?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[4];?>
/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>
, <?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[5];?>
/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>
);
	var startTime	= serverTime.getTime();
	var localTime 	= serverTime;
	var localTS 	= startTime;
	var Gamename	= document.title;
	var Ready		= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['ready'];?>
";
	var Skin		= "<?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>
";
	var Lang		= "<?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>
";
	var head_info	= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['fcm_info'];?>
";
	var auth		= <?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php echo (($tmp = @$_smarty_tpl->tpl_vars[\'authlevel\']->value)===null||$tmp===\'\' ? \'0\' : $tmp);?>
/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>
;
	var days 		= <?php echo (($tmp = @json_encode($_smarty_tpl->tpl_vars['LNG']->value['week_day']))===null||$tmp==='' ? '[]' : $tmp);?>
 
	var months 		= <?php echo (($tmp = @json_encode($_smarty_tpl->tpl_vars['LNG']->value['months']))===null||$tmp==='' ? '[]' : $tmp);?>
 ;
	var tdformat	= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['js_tdformat'];?>
";
	var queryString	= "<?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php echo strtr($_smarty_tpl->tpl_vars[\'queryString\']->value, array("\\\\" => "\\\\\\\\", "\'" => "\\\\\'", "\\"" => "\\\\\\"", "\\r" => "\\\\r", "\\n" => "\\\\n", "</" => "<\\/" ));?>
/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>
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
	<script type="text/javascript" src="./scripts/l18n/validationEngine/jquery.validationEngine-<?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>
.js"></script>
	<script type="text/javascript" src="./scripts/base/tooltip.js"></script>
	<script type="text/javascript" src="./scripts/game/base.js"></script>
	<script type="text/javascript" src="./scripts/game/newmail.js"></script>
	<script type="text/javascript" src="./scripts/game/qtip.js"></script>
	<?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php  $_smarty_tpl->tpl_vars[\'scriptname\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'scriptname\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'scripts\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'scriptname\']->key => $_smarty_tpl->tpl_vars[\'scriptname\']->value){
$_smarty_tpl->tpl_vars[\'scriptname\']->_loop = true;
?>/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>

	<script type="text/javascript" src="./scripts/game/<?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php echo $_smarty_tpl->tpl_vars[\'scriptname\']->value;?>
/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>
.js"></script>
	<?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php } ?>/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>

	
	<script type="text/javascript">
	$(function() {
		<?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php echo $_smarty_tpl->tpl_vars[\'execscript\']->value;?>
/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>

	});
	</script>
	
	
	<?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php if ($_smarty_tpl->tpl_vars[\'manual_11_step\']->value==0){?>/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>

	<script type="text/javascript">
	$(function() {
		qtips('#attack', 'Attention to your planet flies attacking fleet', 'bottomMiddle', 'topLeft');
setTimeout(function() { qtips('.over', 'Go to the review, to view the attackers fleet', 'bottomMiddle', 'topLeft') }, 4000);
setInterval(function() { AJAX() }, 6000)
	});
	</script>
	

	
	
	<?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php }?>/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>

	

	
	<?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php if ($_smarty_tpl->tpl_vars[\'manual_15_step\']->value==0){?>/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>

	<script type="text/javascript">
	$(function() {
		qtips('#munu_shipyard_fleet ', 'Go to Fleet. <br> Here you can build a battle fleet, attacks on other players or flight expedition.', 'rightMiddle', 'leftMiddle');
setInterval(function() { AJAX() }, 6000)
	});
	</script>
	<?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php }?>/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>

	
	<?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php if ($_smarty_tpl->tpl_vars[\'manual_24_step\']->value==0){?>/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>

	<script type="text/javascript">
	$(function() {
		qtips('#munu_academy ', 'Go to the Academy. <br> Here you will be able to enhance skills available to you by selecting one of three trees, broken down my classification..', 'rightMiddle', 'leftMiddle');
setInterval(function() { AJAX() }, 6000)
	});
	</script>
	<?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php }?>/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>

	
	<?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php if ($_smarty_tpl->tpl_vars[\'manual_26_step\']->value==0){?>/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>

	<script type="text/javascript">
	$(function() {
		qtips('#achievements_name ', 'Go to Achievements. <br> Here you can choose suitable for achieving your development strategy.', 'rightMiddle', 'leftMiddle');
setInterval(function() { AJAX() }, 6000)
	});
	</script>
	<?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php }?>/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>

	
	<?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php if ($_smarty_tpl->tpl_vars[\'manual_17_step\']->value==0){?>/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>

	<script type="text/javascript">
	$(function() {
		qtips('#munu_galaxy ', 'Go to the Galaxy. <br> This map of the universe, the planet where all the players are displayed.', 'rightMiddle', 'leftMiddle');
setInterval(function() { AJAX() }, 6000)
	});
	</script>
	
	<?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php }?>/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>

	
	<?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php if ($_smarty_tpl->tpl_vars[\'manual_19_step\']->value==0){?>/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>

	
	<script type="text/javascript">
	$(function() {
		qtips('.over ', 'Go to the review, to see the fleet sent for recycling', 'bottomMiddle', 'topLeft');
setInterval(function() { AJAX() }, 6000)
	});
	</script>
	
	<?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php }?>/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>

	
	
	<?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php if ($_smarty_tpl->tpl_vars[\'manual_21_step\']->value==0){?>/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>

	<script type="text/javascript">
	$(function() {
		qtips('#munu_senat ', 'Go to Senate. <br> Here you can hire experts in various categories that help grown their Empire.', 'rightMiddle', 'leftMiddle');
setInterval(function() { AJAX() }, 6000)
	});
	</script>
	
	<?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php }?>/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>

	
	
	
	
	<?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php if ($_smarty_tpl->tpl_vars[\'manual_13_step\']->value==0){?>/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>

	<script type="text/javascript">
	$(function() {
		qtips('.mesages ', 'Go to messages. <br> Red figure beside notifies you about the number of unread messages.', 'bottomMiddle', 'topMiddle');
setInterval(function() { AJAX() }, 6000)
	});
	</script>
		<?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php }?>/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>

	<?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php if ($_smarty_tpl->tpl_vars[\'manual_5_step\']->value==0){?>/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>

	<script type="text/javascript">
	$(function() {
setTimeout(function() { qtips('#munu_research', 'Log in here, for then that would protect against espionage.', 'rightMiddle', 'leftMiddle') }, 4000);
setInterval(function() { AJAX() }, 6000)
	});
	</script>
	
	<?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php }?>/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>

	
	<?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php if ($_smarty_tpl->tpl_vars[\'manual_8_step\']->value==0){?>/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>

	
	<script type="text/javascript">
	$(function() {
		qtips('#munu_shipyard_defense ', 'Go to Defense.<br>Here you will be able to increase the protection of the planet. ', 'rightMiddle', 'leftMiddle');
setInterval(function() { AJAX() }, 6000)
	});
	</script>
	
	<?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php }?>/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>

	
	
	
	
	<?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php if ($_smarty_tpl->tpl_vars[\'manuel_step_1_1\']->value==0){?>/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>

	
		<script type="text/javascript">
	
	$(function() {
		
qtips('#munu_build ', 'Go to Buildings.', 'rightMiddle', 'leftMiddle');
setInterval(function() { AJAX() }, 6000)
	});
	</script>
	<?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php }?>/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>

	

	<?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php if ($_smarty_tpl->tpl_vars[\'manual_step_3\']->value==0){?>/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>

	<script type="text/javascript">
	$(function() {
		qtips('#espionage ', 'Attention! Spy on your planet.', 'bottomMiddle', 'topLeft');
setTimeout(function() { qtips('.over ', 'Go to Overview .', 'bottomMiddle', 'topLeft') }, 3000);

setInterval(function() { AJAX() }, 6000)
	});
	</script>
	<?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php }?>/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>

	
	
	
	
	
	
	
	
	
	
	
	
	<?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php if ($_smarty_tpl->tpl_vars[\'manual_step_1\']->value==0){?>/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>

	
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
	<?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php }?>/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>


   
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
" class="<?php echo '/*%%SmartyNocache:5290032655ae407bac9172-91032853%%*/<?php echo $_smarty_tpl->tpl_vars[\'bodyclass\']->value;?>
/*/%%SmartyNocache:5290032655ae407bac9172-91032853%%*/';?>
" >
	<div id="tooltip" class="tip"></div><?php }} ?>