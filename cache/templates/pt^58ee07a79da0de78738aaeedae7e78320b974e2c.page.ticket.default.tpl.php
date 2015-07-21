<?php /*%%SmartyHeaderCode:3085727655ae661e9f83a2-31784008%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58ee07a79da0de78738aaeedae7e78320b974e2c' => 
    array (
      0 => '/home/stell530/public_html/beta7/styles/templates/adm/page.ticket.default.tpl',
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
  'nocache_hash' => '3085727655ae661e9f83a2-31784008',
  'variables' => 
  array (
    'LNG' => 1,
    'ticketList' => 1,
    'TicketInfo' => 1,
    'TicketID' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_55ae661edd9911_43997045',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ae661edd9911_43997045')) {function content_55ae661edd9911_43997045($_smarty_tpl) {?><!DOCTYPE html>

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
<body id="support" class="<?php echo $_smarty_tpl->tpl_vars['bodyclass']->value;?>
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


<table width="70%" cellpadding="2" cellspacing="2">
	<tr>
		<th colspan="6">Sistema de Suporte</th>
	</tr>
	<tr>
		<th style="width:10%">Ticket</td>
		<th style="width:10%">Jogador</td>
		<th style="width:40%">Assunto</td>
		<th style="width:10%">Resposta</td>
		<th style="width:15%">Data</td>
		<th style="width:15%">Estado</td>
	</tr>
	<?php  $_smarty_tpl->tpl_vars['TicketInfo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['TicketInfo']->_loop = false;
 $_smarty_tpl->tpl_vars['TicketID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ticketList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['TicketInfo']->key => $_smarty_tpl->tpl_vars['TicketInfo']->value){
$_smarty_tpl->tpl_vars['TicketInfo']->_loop = true;
 $_smarty_tpl->tpl_vars['TicketID']->value = $_smarty_tpl->tpl_vars['TicketInfo']->key;
?>	
	<?php if ($_smarty_tpl->tpl_vars['TicketInfo']->value['status']<2){?>
	<tr>
		<td><a href="admin.php?page=support&amp;mode=view&amp;id=<?php echo $_smarty_tpl->tpl_vars['TicketID']->value;?>
">#<?php echo $_smarty_tpl->tpl_vars['TicketID']->value;?>
</a></td>
		<td><a href="admin.php?page=support&amp;mode=view&amp;id=<?php echo $_smarty_tpl->tpl_vars['TicketID']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['TicketInfo']->value['username'];?>
</a></td>
		<td><a href="admin.php?page=support&amp;mode=view&amp;id=<?php echo $_smarty_tpl->tpl_vars['TicketID']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['TicketInfo']->value['subject'];?>
</a></td>
		<td><?php echo $_smarty_tpl->tpl_vars['TicketInfo']->value['answer']-1;?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['TicketInfo']->value['time'];?>
</td>
		<td><?php if ($_smarty_tpl->tpl_vars['TicketInfo']->value['status']==0){?><span style="color:green"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ti_status_open'];?>
</span><?php }elseif($_smarty_tpl->tpl_vars['TicketInfo']->value['status']==1){?><span style="color:orange"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ti_status_answer'];?>
</span><?php }?></td>
	</tr>
	<?php }?>
	<?php } ?>
	<tr>
		<th colspan="6">Fechado</th>
	</tr>
	<tr>
		<th style="width:10%">Ticket</td>
		<th style="width:10%">Jogador</td>
		<th style="width:40%">Assunto</td>
		<th style="width:10%">Resposta</td>
		<th style="width:15%">Data</td>
		<th style="width:15%">Estado</td>
	</tr>
	<?php  $_smarty_tpl->tpl_vars['TicketInfo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['TicketInfo']->_loop = false;
 $_smarty_tpl->tpl_vars['TicketID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ticketList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['TicketInfo']->key => $_smarty_tpl->tpl_vars['TicketInfo']->value){
$_smarty_tpl->tpl_vars['TicketInfo']->_loop = true;
 $_smarty_tpl->tpl_vars['TicketID']->value = $_smarty_tpl->tpl_vars['TicketInfo']->key;
?>	
	<?php if ($_smarty_tpl->tpl_vars['TicketInfo']->value['status']==2){?>
	<tr>
		<td><a href="admin.php?page=support&amp;mode=view&amp;id=<?php echo $_smarty_tpl->tpl_vars['TicketID']->value;?>
">#<?php echo $_smarty_tpl->tpl_vars['TicketID']->value;?>
</a></td>
		<td><a href="admin.php?page=support&amp;mode=view&amp;id=<?php echo $_smarty_tpl->tpl_vars['TicketID']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['TicketInfo']->value['username'];?>
</a></td>
		<td><a href="admin.php?page=support&amp;mode=view&amp;id=<?php echo $_smarty_tpl->tpl_vars['TicketID']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['TicketInfo']->value['subject'];?>
</a></td>
		<td><?php echo $_smarty_tpl->tpl_vars['TicketInfo']->value['answer']-1;?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['TicketInfo']->value['time'];?>
</td>
		<td><span style="color:red"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ti_status_closed'];?>
</span></td>
	</tr>
	<?php }?>
	<?php } ?>
</table>
 	</div>
	</div>
 
 <div id="site_info">
    </div>
</body>
</html><?php }} ?>