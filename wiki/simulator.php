<!DOCTYPE html>
<html>
	<head>		
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Introduction</title>
        <meta property="og:image" content="http://xterium.ru/images/social.jpg" />
        <link rel="image_src" href='http://forum.xterium.ru/public/style_images/master/meta_image.png' />
		<meta name="description" content="Wiki Xterium - Все о игре Xterium" />
		<meta name="keywords" content="Wiki Xterium" />
		<link type="image/x-icon" href="favicon.png" rel="shortcut icon" />
		<link href="css/style.css" rel="stylesheet" type="text/css" />
		<script type='text/javascript' src='js/jquery.js'></script>
        <script type='text/javascript' src='js/menu.js'></script>        
		<!--[if IE]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
        <script type="text/javascript">$(document).ready(function(){
		$(window).scroll(function () {if ($(this).scrollTop() > 0) {$('#scroller').fadeIn();} else {$('#scroller').fadeOut();}});
		$('#scroller').click(function () {$('body,html').animate({scrollTop: 40}, 400); return false;});
		});</script>         
	</head>
	<body>		
        <div id="header">
        	<div class="body">
            	<a href="/" class="logo"><img class="logo" src="images/xterium_logo.png" title="Xterium" /></a>
			</div>
            <div id="header_bottom"></div>
         </div><!--/header-->
		 
		 
		<div class="body">
             <div id="content">
                ﻿<div id="content_left">
    <div id="content_left_menu">
        <ul class="menu_vert"> 
        	<li><a href="http://dark-space.org">Portal</a></li>
            <li><a target="" href="index.php?pages=vvedenie">Introduction</a> </li>
            <li><a target="" href="game_start.php">Start the game</a>
                <ul>        
                    <li><a target="" href="game_start.php#sovety">Tips for beginners</a></li>
                    <li><a target="" href="game_start.php#menu">Game Menu</a></li>
                </ul>
            </li>
    		<li>
            	<a target="">Player Development</a>
        		<ul>
         			<li><a target="" href="planets.php">Planets</a></li>
    				<li><a target="" href="moons.php">Moons</a></li>        
                    <li><a target="" href="buildings.php">Buildings</a></li>
                    <li><a target="" href="research.php">Research</a></li>            
                    <li><a target="" href="fleets.php">Fleets</a></li>
                    <li><a target="" href="defence.php">Defense</a></li>
                    <li><a target="" href="officers.php">Officers</a></li>
                    <li><a target="" href="governators.php">Governators</a></li>
                    <li><a target="" href="academy.php">Academy</a></li>
                    <li><a target="" href="arsenal.php">Arsenal</a></li>
                    <li><a target="" href="level.php">Levels</a></li>
                    <li><a target="" href="achievements.php">Achievements</a></li>
                    <li><a target="" href="statistics.php">Statistics</a></li>   					
        		</ul>
        	</li>
            <li>
            	<a target="" href="ressource.php">Resources</a>
                <ul>
                    <li><a target="" href="ressource.php#skup">Main ressource</a></li>                
                    <li><a target="_new" href="ressource.php#xran">Secret Vault</a> </li>
                </ul>
            </li>
            <li>
                <a target="" href="currency.php">Game currency</a>
                <ul>
                    <li><a target="" href="index.php?pages=money#AM">АМ</a> </li>
                    <li><a target="" href="index.php?pages=money#ТМ">DM</a></li>
                </ul>
            </li>
           <li><a target="" href="premium.php">Premium</a></li>
            <li><a target="" href="alliance.php">Alliances</a></li>
            <li><a target="" href="simulator.php">Battle Simulator</a></li>
            <li><a target="" href="referals.php">Referals</a></li>
            <li><a  target="" href="alerts.php">Alerts</a></li>
            <li><a target="" href="messages.php">Messages</a></li>
            <li>
                <a target="" href="harvest.php">Harvest</a>
                <ul>
                     <li><a target="" href="harvest.php#flot">Fleets</a></li>
                    <li><a target="" href="harvest.php#res">Resource</a></li>
                </ul>    
        <div style="clear:both;"></div>
    </div>     
    <div style="clear:both;"></div>
</div>     
               <div id="scroller" class="b-top" style="display: none;"><span class="b-top-but">To the top</span></div>
				﻿<div id="content_right">
	<h1>Battle Simulator</h1>

<script language = "JavaScript">
var bigsize = "800"; //Размер большой картинки
var smallsize = "150"; //Размер маленькой картинки
function changeSizeImage1(im) {
  if(im.height == bigsize) im.height = smallsize;
  else im.height = bigsize;
}
</script>


Here's a view of a battle simulator window. <br />

<div align="center"><img style="border-radius:10px"  height="150" src="html/images/17/1.png" onclick="changeSizeImage1(this)"> </div><p>
Simulator, we tend to use in those cases when we are going to attack someone, or to render the defense that you need to build to ninja the incomming fleets.
<p>

<p>
Small tip: to better predict the outcome of the battle. We suggest you to put the enemy technology levels.

</div>            	<div style="clear:both;"></div>
        	</div><!--/content-->
		</div>	
		

	</body>
</html>