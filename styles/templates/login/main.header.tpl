<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="{$lang}" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="{$lang}" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="{$lang}" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="{$lang}" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> 
<html lang="{$lang}" class="no-js"> <!--<![endif]-->
	<head>
		
		
		<link rel="stylesheet" type="text/css" href="media/css/bjqs.css"/>
		<link href="media/css/style.css" rel="stylesheet" type="text/css"/>
		<link href="media/css/dialog.css" rel="stylesheet" type="text/css"/>
		<link rel="stylesheet" href="media/css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8"/>
		<link href="media/css/vidjet.css" rel="stylesheet" type="text/css"/>
		<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
		<title>{$gameName}</title>
		<meta name="generator" content="Stellar Wars {$VERSION}">
		<!-- 
			This website is powered by 2Moons {$VERSION}
			2Moons is a free Space Browsergame initially created by Jan Kröpke and licensed under GNU/GPL.
			2Moons is copyright 2009-2013 of Jan Kröpke. Extensions are copyright of their respective owners.
			Information and contribution at http://2moons.cc/
		-->
		<meta name="keywords" content="{$LNG.header_keywords}">
		<meta name="description" content="{$gameName}: {$LNG.header_meta_description}"> <!-- Noob Check :) -->
		<!--[if lt IE 9]>
		<script src="scripts/base/html5.js"></script>
		<![endif]-->
		<script src="scripts/base/jquery.js"></script>
		<script src="scripts/base/jquery.cookie.js"></script>
		<script src="scripts/base/jquery.fancybox.js"></script>
		<script src="scripts/login/main.js"></script>
		<script src="media/js/jquery.delegate.js" type="text/javascript"></script>
		<script src="media/js/jquery-1.7.1.min.js" type="text/javascript"></script>
		<script src="media/js/validate.min.js" type="text/javascript"></script>
		<script src="media/js/dialog.js" type="text/javascript" ></script>
		<script src="media/js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
		<script>{if isset($code)}var loginError = {$code|json};{/if}</script>
		{block name="script"}{/block}	
	</head>
<body id="{$smarty.get.page|htmlspecialchars|default:'overview'}" class="{$bodyclass}">
	<div id="page">