<?php /*%%SmartyHeaderCode:65233451255ae661bd49945-53510697%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1da2f3abcc58630f55a5ec1b786c3737640f79dd' => 
    array (
      0 => '/home/stell530/public_html/beta7/styles/templates/adm/OverviewBody.tpl',
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
  'nocache_hash' => '65233451255ae661bd49945-53510697',
  'variables' => 
  array (
    'online_users' => 1,
    'prem_users' => 1,
    'locked_cron' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_55ae661c0d0750_06338824',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ae661c0d0750_06338824')) {function content_55ae661c0d0750_06338824($_smarty_tpl) {?><!DOCTYPE html>

<!--[if lt IE 7 ]> <html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="no-js"> <!--<![endif]-->
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Admin Panel</title>
	 
    <!-- BEGIN: load jquery -->
	
	<script type="text/javascript">
	var ServerTimezoneOffset = <?php echo $_smarty_tpl->tpl_vars['Offset']->value;?>
;
	var serverTime 	= new Date(<?php echo $_smarty_tpl->tpl_vars['date']->value[0];?>
, <?php echo $_smarty_tpl->tpl_vars['date']->value[1]-1;?>
, <?php echo $_smarty_tpl->tpl_vars['date']->value[2];?>
, <?php echo $_smarty_tpl->tpl_vars['date']->value[3];?>
, <?php echo $_smarty_tpl->tpl_vars['date']->value[4];?>
, <?php echo $_smarty_tpl->tpl_vars['date']->value[5];?>
);
	var xsize 	= screen.width;
	var ysize 	= screen.height;
	var breite	= 720;
	var hoehe	= 300;
	var xpos	= (xsize-breite) / 2;
	var ypos	= (ysize-hoehe) / 2;
	var Ready		= "Pronto";
	var Skin		= "<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
";
	var Lang		= "<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
";
	var head_info	= "Informação";
	var days 		= ["Dom","Seg","Ter","Qua","Qui","Sex","Sab"] 
	var months 		= ["Jan","Fev","Mar","Abr","Mai","Jun","Jul","Ago","Set","Out","Nov","Dez"] ;
	var tdformat	= "[M] [D] [d] [H]:[i]:[s]";
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

	
	<script type="text/javascript" src="./scripts/base/jquery.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.ui.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.cookie.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.fancybox.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.validationEngine.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="./scripts/l18n/validationEngine/jquery.validationEngine-<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="./scripts/base/tooltip.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="./scripts/game/base.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<?php  $_smarty_tpl->tpl_vars['scriptname'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['scriptname']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['scripts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['scriptname']->key => $_smarty_tpl->tpl_vars['scriptname']->value){
$_smarty_tpl->tpl_vars['scriptname']->_loop = true;
?>
	<script type="text/javascript" src="./scripts/game/<?php echo $_smarty_tpl->tpl_vars['scriptname']->value;?>
.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<?php } ?>
	<script type="text/javascript">
	$(function() {
		<?php echo $_smarty_tpl->tpl_vars['execscript']->value;?>

	});
	</script>

</head>
<body id="overview" class="<?php echo $_smarty_tpl->tpl_vars['bodyclass']->value;?>
">
	<div id="tooltip" class="tip"></div>

	<div id="left_side">        
    <div id="left_menu">
               
        <div class="separator"></div>

        
        
        <a class="btn_menu" href="admin.php?page=overview" >&nbsp;Overview</a>
        <a class="btn_menu" href="game.php" >Go to game</a>
	        <div class="separator"></div>	
		<a href="?page=infos" class="btn_menu" >Information</a>		<a href="?page=config" class="btn_menu" >Server Configuration</a>		<a href="?page=configuni" class="btn_menu" >Universe Configuration</a>		<a href="?page=chat" class="btn_menu" >Chat Configuration</a>		<a href="?page=teamspeak" class="btn_menu" >Teamspeak Options</a>		<a href="?page=facebook" class="btn_menu" >Registration by Facebook</a>		<a href="?page=module" class="btn_menu" >Modules</a>		<a href="?page=disclamer" class="btn_menu" >mu_disclaimer</a>		<a href="?page=statsconf" class="btn_menu" >Statistics Configuration</a>		<a href="?page=vertify" class="btn_menu" >Check Game content</a>		<a href="?page=cronjob" class="btn_menu" >Cronjobs</a>		<a href="?page=dump" class="btn_menu" >Database Backup</a>        <div class="separator"></div>		
		<a href="?page=create" class="btn_menu" >Creator</a>		<a href="?page=accounteditor" class="btn_menu" >Edit Accounts</a>		<a href="?page=bans" class="btn_menu" >Ban System</a>		<a href="?page=giveaway" class="btn_menu" >Giveaways</a>        <div class="separator"></div>		
		<a href="?page=search&amp;search=online&amp;minimize=on" class="btn_menu" >Online</a>		<a href="?page=support" class="btn_menu" >Support Tickets</a>		<a href="?page=active" class="btn_menu" >User activity</a>		<a href="?page=search&amp;search=p_connect&amp;minimize=on" class="btn_menu" >Active Planets</a>		<a href="?page=fleets" class="btn_menu" >Flying Fleets</a>		<a href="?page=news" class="btn_menu" >News</a>		<a href="?page=search&amp;search=users&amp;minimize=on" class="btn_menu" >Player List</a>		<a href="?page=search&amp;search=planet&amp;minimize=on" class="btn_menu" >Planet List</a>		<a href="?page=search&amp;search=moon&amp;minimize=on" class="btn_menu" >Moon List</a>		<a href="?page=messagelist" class="btn_menu" >Message List</a>		<a href="?page=accountdata" class="btn_menu" >Information Account</a>		<a href="?page=search" class="btn_menu" >Advanced search</a>		<a href="?page=multiips" class="btn_menu" >Multiple IPs</a>        <div class="separator"></div>		
		<a href="?page=log" class="btn_menu" >Admin Log</a>		<a href="?page=globalmessage" class="btn_menu" >Global Message</a>		<a href="?page=password" class="btn_menu" >MD5 Encryptor</a>		<a href="?page=statsupdate" class="btn_menu"  onClick=" return confirm('The Updater is automatico points, this allows you to see what is that your server is currently doing (As memory consumed, SQL, etc.)');">Manual points</a>		<a href="?page=clearcache" class="btn_menu" >Clear Cache</a>
        <div class="separator"></div>
        
		        
                <div class="clear"></div>
				
    </div><!--/left_menu-->
	
 
</div><!--/left_side-->

   <div id="page" >
   <div id="content">



   
   <table >
<tr><th colspan="5"></th></tr>
<tr>
	<td><center><a href="admin.php?page=search&search=online&minimize=on"><img src="styles/images/post-53569-1139676688.png" width="35px" height="35px" /></a></center></td>
	<td><center><a href="admin.php?page=premium"><img src="styles/images/premium_icon_2.png" width="35px" height="35px" /></a></center></td>
	<td><center><a href="admin.php?page=search&search=users&minimize=on"><img src="styles/images/preferences-contact-list.png" width="35px" height="35px" /></a></center></td>
	<td><center><a href="?page=search&search=planet&minimize=on"><img src="styles/images/multi-user-access.png" width="35px" height="35px" /></a></center></td>
	<td><center><a href="?page=search&search=moon&minimize=on"><img src="styles/images/About_info_information_question_hint_ask.png" width="35px" height="35px" /></a></center></td>

</tr>
<tr>
	<td width="20%"><center><a href="admin.php?page=search&search=online&minimize=on">Online Users (<?php echo $_smarty_tpl->tpl_vars['online_users']->value;?>
)</a></center></td>
	<td width="20%"><center><a href="admin.php?page=premium">Premium Users (<?php echo $_smarty_tpl->tpl_vars['prem_users']->value;?>
)</a></center></td>
	<td width="20%"><center><a href="?page=search&search=users&minimize=on">Player List</a></center></td>
	<td width="20%"><center><a href="?page=search&search=planet&minimize=on">Planet List</a></center></td>
	<td width="20%"><center><a href="?page=search&search=moon&minimize=on">Moon List</a></center></td>

</tr>
<tr><th colspan="5"></th></tr>
<tr>
	<td><center><a href="?page=log&amp;type=planet"><img src="styles/images/wp.png" width="35px" height="35px" /></a></center></td>
	<td><center><a href="?page=log&amp;type=player"><img src="styles/images/Edit-male-user.png" width="35px" height="35px" /></a></center></td>
	<td><center><a href="?page=log&amp;type=settings"><img src="styles/images/home-security-systems-installation-costs.png" width="35px" height="35px" /></a></center></td>
	<td><center><a href="?page=log&amp;type=present"><img src="styles/images/Tf_gift.png" width="35px" height="35px" /></a></center></td>
	<td><center><a href="?page=messagelist"><img src="styles/images/indicator-messages-new.png" width="35px" height="35px" /></a></center></td>

</tr>
<tr>
	<td width="20%"><center><a href="?page=log&amp;type=planet">Edited Planets</a></center></td>
	<td width="20%"><center><a href="?page=log&amp;type=player">Edited Players</a></center></td>
	<td width="20%"><center><a href="?page=log&amp;type=settings">Edited Settings</a></center></td>
	<td width="20%"><center><a href="?page=log&amp;type=present">Given Away</a></center></td>
	<td width="20%"><center><a href="?page=messagelist">Message List</a></center></td>

</tr>
<tr><th colspan="5"></th></tr>
<tr>
	<td><center><a href="?page=cronjob"><img src="styles/images/cronis.png" width="35px" height="35px" /></a></center></td>
	<td><center><a href="?page=globalmessage"><img src="styles/images/Send_mail.png" width="35px" height="35px" /></a></center></td>
	<td><center><a href="?page=password"><img src="styles/images/md5saltedhashkracker_icon.png" width="35px" height="35px" /></a></center></td>
	<td><center><a href="?page=statsupdate"><img src="styles/images/stats_icon.png" width="35px" height="35px" /></a></center></td>
	<td><center><a href="?page=clearcache"><img src="styles/images/com.rootuninstaller.rambooster.png" width="35px" height="35px" /></a></center></td>

</tr>
<tr>
	<td width="20%"><center><a href="?page=cronjob">Cronjobs (<?php echo $_smarty_tpl->tpl_vars['locked_cron']->value;?>
)</a></center></td>
	<td width="20%"><center><a href="?page=globalmessage">Global Message</a></center></td>
	<td width="20%"><center><a href="?page=password">MD5 Password</a></center></td>
	<td width="20%"><center><a href="?page=statsupdate">Update Stats</a></center></td>
	<td width="20%"><center><a href="?page=clearcache">Clear Cache</a></center></td>

</tr>
					
 </table>
   

   
 	</div>
	</div>
 
 <div id="site_info">
    </div>
</body>
</html><?php }} ?>