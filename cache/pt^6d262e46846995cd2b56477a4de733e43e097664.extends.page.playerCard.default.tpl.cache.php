<?php /* Smarty version Smarty-3.1.13, created on 2015-07-21 12:18:29
         compiled from "/home/stell530/public_html/beta7/styles/templates/game/page.playerCard.default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:55747341555ae62c585f900-50875451%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d262e46846995cd2b56477a4de733e43e097664' => 
    array (
      0 => '/home/stell530/public_html/beta7/styles/templates/game/page.playerCard.default.tpl',
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
  'nocache_hash' => '55747341555ae62c585f900-50875451',
  'function' => 
  array (
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_55ae62c5cddab7_24672575',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ae62c5cddab7_24672575')) {function content_55ae62c5cddab7_24672575($_smarty_tpl) {?><?php /*  Call merged included template "main.header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("main.header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('bodyclass'=>"popup"), 0, '55747341555ae62c585f900-50875451');
content_55ae62c58f75b2_56996513($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "main.header.tpl" */?>

<div id="ally_content" class="conteiner player_card" style="width:auto;">
    <div class="gray_stripe">
      	<?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'name\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
 &nbsp;&nbsp;&nbsp;
        <span style="color:#999;"><?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'homeplanet\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
:
        	<a href="#" onclick="parent.location = 'game.php?page=galaxy&amp;galaxy=<?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'galaxy\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
&amp;system=<?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'system\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
';return false;">[<?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'galaxy\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
:<?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'system\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
:<?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'planet\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
]</a></a>
        &nbsp;&nbsp;&nbsp;
        	 <?php echo $_smarty_tpl->tpl_vars['LNG']->value['pl_ally'];?>
: <?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php if ($_smarty_tpl->tpl_vars[\'allyname\']->value){?>/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
<a href="#" onclick="parent.location = 'game.php?page=alliance&amp;mode=info&amp;id=<?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'allyid\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
';return false;"><?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'allyname\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
</a><?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php }else{ ?>/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
-<?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php }?>/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
       </span>               
    </div> 
    
	
	<?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php if ($_smarty_tpl->tpl_vars[\'id\']->value!=$_smarty_tpl->tpl_vars[\'yourid\']->value){?>/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>

    <div class="left_part">
        <div class="ally_contents">
        	            <p>First Name: <?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'firstname\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
</p>
            <p>Country: <?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'country\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
</p>
            <p>City: <?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'city\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
</p>
                   
        </div>
    </div> 
    
	<div class="right_part">
        <div class="ally_contents">
        	            <p>Age: <?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'age\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
</p>
            <p>Style of play: <?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'playstyle\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
</p>
            <p>Skype: <?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'skype\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
</p>            
                    
        </div>
    </div>  
	<div class="clear"></div>    
    
    <div class="gray_stripe build_band ticket_bottom_band" style="padding-left:6px;">
    	Achievements
    	    </div>    
	<?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php }else{ ?>/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>

	 <form action="game.php?page=playerCard" method="post" id="form">
    <input name="save" value="true" type="hidden">
    <div class="left_part">
        <div class="ally_contents">
        	            <p>First Name: <input name="p_name" value="<?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'firstname\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
" maxlength="16" type="text"></p>
            <p>Country: <input name="p_country" value="<?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'country\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
" maxlength="24" type="text"></p>
            <p>City: <input name="p_city" value="<?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'city\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
" maxlength="24" type="text"></p>
                   
        </div>
    </div> 
    
	<div class="right_part">
        <div class="ally_contents">
        	            <p>Age: <input name="p_age" value="<?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'age\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
" min="0" max="999" type="number"></p>
            <p>Style of play: <input name="p_style_game" value="<?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'playstyle\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
" maxlength="24" type="text"></p>
            <p>Skype: <input name="p_communication" value="<?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'skype\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
" maxlength="24" type="text"></p>            
                    
        </div>
    </div>  
	<div class="clear"></div>    
    
    <div class="gray_stripe build_band ticket_bottom_band" style="padding-left:6px;">
    	Achievements
                	<input class="bottom_band_submit" value="Save changes" type="submit">
    	    </div>    
    </form>
	<?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php }?>/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>

    
    
           
        <div style="cursor:pointer;" class="record_header" onclick="$('#achive_general').stop(false, true).slideToggle();">
        	Common
            <div class="record_header_top_line"></div>
            <div class="record_header_bottom_line"></div>
        </div> 
        <div id="achive_general" class="playercard_achive_block">
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Peace lvl. <?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'achievement_peace_level\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
">
                <img alt="Peace" src="styles/images/achiev/ach_level.png">
                <div class="playercard_achive_block_lvl"><?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'achievement_peace_level\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
</div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Combat lvl. <?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'achievement_combat_level\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
">
                <img alt="Combat" src="styles/images/achiev/ach_batle_level.png">
                <div class="playercard_achive_block_lvl"><?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'achievement_combat_level\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
</div>
            </div>
                        <div class="clear"></div>
        </div>
           
        <div style="cursor:pointer;" class="record_header" onclick="$('#achive_build').stop(false, true).slideToggle();">
        	Buildings
            <div class="record_header_top_line"></div>
            <div class="record_header_bottom_line"></div>
        </div> 
        <div id="achive_build" class="playercard_achive_block">
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Metal lvl. <?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'achievement_build_metal\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
 ">
                <img alt="Metal" src="styles/images/achiev/ach_mine_metal.png">
                <div class="playercard_achive_block_lvl"><?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'achievement_build_metal\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
</div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Crystal lvl. <?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'achievement_build_crystal\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
 ">
                <img alt="Crystal" src="styles/images/achiev/ach_crystal_mine.png">
                <div class="playercard_achive_block_lvl"><?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'achievement_build_crystal\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
</div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Deuterium lvl. <?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'achievement_build_deuterium\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
 ">
                <img alt="Deuterium " src="styles/images/achiev/ach_deuterium_sintetizer.png">
                <div class="playercard_achive_block_lvl"><?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'achievement_build_deuterium\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
</div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Light Conveyor lvl. <?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'achievement_build_light\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
 ">
                <img alt="Light Conveyor" src="styles/images/achiev/ach_conveyor1.png">
                <div class="playercard_achive_block_lvl"><?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'achievement_build_light\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
</div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Medium Conveyor lvl. <?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'achievement_build_medium\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
 ">
                <img alt="Medium Conveyor" src="styles/images/achiev/ach_conveyor2.png">
                <div class="playercard_achive_block_lvl"><?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'achievement_build_medium\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
</div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Heavy Conveyor lvl. <?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'achievement_build_heavy\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
 ">
                <img alt="Heavy Conveyor" src="styles/images/achiev/ach_conveyor3.png">
                <div class="playercard_achive_block_lvl"><?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'achievement_build_heavy\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
</div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="University lvl. <?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'achievement_build_university\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
 ">
                <img alt="University" src="styles/images/achiev/ach_university.png">
                <div class="playercard_achive_block_lvl"><?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'achievement_build_university\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
</div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Moon Base lvl. <?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'achievement_build_moon\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
 ">
                <img alt="Moon Base" src="styles/images/achiev/ach_mondbasis.png">
                <div class="playercard_achive_block_lvl"><?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'achievement_build_moon\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
</div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Phalanx lvl. <?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'achievement_build_phalanx\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
 ">
                <img alt="Phalanx" src="styles/images/achiev/ach_phalanx.png">
                <div class="playercard_achive_block_lvl"><?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'achievement_build_phalanx\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
</div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Terraformer lvl. <?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'achievement_build_terraformer\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
 ">
                <img alt="Terraformer" src="styles/images/achiev/ach_terraformer.png">
                <div class="playercard_achive_block_lvl"><?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'achievement_build_terraformer\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
</div>
            </div>
                        <div class="clear"></div>
        </div>
           
        <div style="cursor:pointer;" class="record_header" onclick="$('#achive_fleet').stop(false, true).slideToggle();">
        	Fleets
            <div class="record_header_top_line"></div>
            <div class="record_header_bottom_line"></div>
        </div> 
        <div id="achive_fleet" class="playercard_achive_block">
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Small Fighters lvl. <?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'achievements_fleets_small\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
 ">
                <img alt="Small Fighters" src="styles/images/achiev/ach_hunter_fleet.png">
                <div class="playercard_achive_block_lvl"><?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'achievements_fleets_small\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
</div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Support Fleets lvl. <?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'achievements_fleets_support\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
 ">
                <img alt="Support Fleets" src="styles/images/achiev/ach_support_fleet.png">
                <div class="playercard_achive_block_lvl"><?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'achievements_fleets_support\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
</div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Battle Fleets lvl. <?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'achievements_fleets_battle\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
 ">
                <img alt="Battle Fleets" src="styles/images/achiev/ach_battle_fleet.png">
                <div class="playercard_achive_block_lvl"><?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'achievements_fleets_battle\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
</div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Destruction Class lvl. <?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'achievements_fleets_destruction\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
 ">
                <img alt="Destruction Class" src="styles/images/achiev/ach_destruction_fleet.png">
                <div class="playercard_achive_block_lvl"><?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'achievements_fleets_destruction\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
</div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Seige Fleet lvl. <?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'achievements_fleets_seige\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
 ">
                <img alt="Seige Fleet" src="styles/images/achiev/ach_siege_fleet.png">
                <div class="playercard_achive_block_lvl"><?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'achievements_fleets_seige\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
</div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Heavy Fleet lvl. <?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'achievements_fleets_heavy\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
 ">
                <img alt="Heavy Fleet" src="styles/images/achiev/ach_heavy_fleet.png">
                <div class="playercard_achive_block_lvl"><?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'achievements_fleets_heavy\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
</div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Imperial Fleet lvl. <?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'achievements_fleets_imperial\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
 ">
                <img alt="Imperial Fleet" src="styles/images/achiev/ach_emperor_fleet.png">
                <div class="playercard_achive_block_lvl"><?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'achievements_fleets_imperial\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
</div>
            </div>
                        <div class="clear"></div>
        </div>
           
        <div style="cursor:pointer;" class="record_header" onclick="$('#achive_def').stop(false, true).slideToggle();">
        	Defense
            <div class="record_header_top_line"></div>
            <div class="record_header_bottom_line"></div>
        </div> 
        <div id="achive_def" class="playercard_achive_block">
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Easy Defense lvl. <?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'achievement_defense_easy\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
 ">
                <img alt="Easy Defense" src="styles/images/achiev/ach_light_def.png">
                <div class="playercard_achive_block_lvl"><?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'achievement_defense_easy\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
</div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Simple Defense lvl. <?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'achievement_defense_simple\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
 ">
                <img alt="Простая Defense" src="styles/images/achiev/ach_easy_def.png">
                <div class="playercard_achive_block_lvl"><?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'achievement_defense_simple\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
</div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Average Defense lvl. <?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'achievement_defense_average\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
 ">
                <img alt="Average Defense" src="styles/images/achiev/ach_medium_def.png">
                <div class="playercard_achive_block_lvl"><?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'achievement_defense_average\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
</div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="High Defense lvl. <?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'achievement_defense_high\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
 ">
                <img alt="High Defense" src="styles/images/achiev/ach_high_def.png">
                <div class="playercard_achive_block_lvl"><?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'achievement_defense_high\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
</div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Heavy Defense lvl. <?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'achievement_defense_heavy\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
 ">
                <img alt="Heavy Defense" src="styles/images/achiev/ach_heavy_def.png">
                <div class="playercard_achive_block_lvl"><?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'achievement_defense_heavy\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
</div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Massive Defense lvl. <?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'achievement_defense_massive\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
 ">
                <img alt="Massive Defense" src="styles/images/achiev/ach_top_def.png">
                <div class="playercard_achive_block_lvl"><?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'achievement_defense_massive\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
</div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Imperial Defense lvl. <?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'achievement_defense_imperial\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
 ">
                <img alt="Imperial Defense" src="styles/images/achiev/ach_emperor_def.png">
                <div class="playercard_achive_block_lvl"><?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'achievement_defense_imperial\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
</div>
            </div>
                        <div class="clear"></div>
        </div>
           
        <div style="cursor:pointer;" class="record_header" onclick="$('#achive_varia').stop(false, true).slideToggle();">
        	Misc
            <div class="record_header_top_line"></div>
            <div class="record_header_bottom_line"></div>
        </div> 
        <div id="achive_varia" class="playercard_achive_block">
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Fighter lvl. <?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'achievements_misc_fighter\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
  ">
                <img alt="Fighter" src="styles/images/achiev/ach_wons.png">
                <div class="playercard_achive_block_lvl"><?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'achievements_misc_fighter\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
 </div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Destructors lvl. <?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'achievements_misc_destructor\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
  ">
                <img alt="Destructors" src="styles/images/achiev/ach_destroyer_moons.png">
                <div class="playercard_achive_block_lvl"><?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'achievements_misc_destructor\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
 </div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Moons lvl. <?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'achievements_misc_moons\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
  ">
                <img alt="Moons" src="styles/images/achiev/ach_creation_moons.png">
                <div class="playercard_achive_block_lvl"><?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'achievements_misc_moons\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
 </div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Hostal Victory lvl. <?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'achievements_misc_hostal\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
  ">
                <img alt="Hostal Victory" src="styles/images/achiev/ach_wons_em.png">
                <div class="playercard_achive_block_lvl"><?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'achievements_misc_hostal\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
 </div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Expeditions lvl. <?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'achievements_misc_expe\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
  ">
                <img alt="Expeditions" src="styles/images/achiev/ach_expedition.png">
                <div class="playercard_achive_block_lvl"><?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'achievements_misc_expe\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
 </div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Seeker lvl. <?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'achievements_misc_seeker\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
  ">
                <img alt="Seeker" src="styles/images/achiev/ach_found_tm.png">
                <div class="playercard_achive_block_lvl"><?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'achievements_misc_seeker\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
 </div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Upgrades lvl. <?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'achievements_misc_upgrades\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
  ">
                <img alt="Upgrades" src="styles/images/achiev/ach_found_up.png">
                <div class="playercard_achive_block_lvl"><?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'achievements_misc_upgrades\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
 </div>
            </div>
                        <div class="playercard_achive_blocks tooltip" data-tooltip-content="Upgrades Integrator lvl. <?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'achievements_misc_integrator\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
  ">
                <img alt="Upgrades Integrator" src="styles/images/achiev/ach_action_up.png">
                <div class="playercard_achive_block_lvl"><?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'achievements_misc_integrator\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
 </div>
            </div>
                        <div class="clear"></div>
        </div>
        <div class="clear"></div>
    <div class="left_part">	        	
        <table class="tablesorter ally_ranks playercard_tables">
            <tbody><tr>
               <th class="gray_stripe">Statistics</th>
		<th class="gray_stripe"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['pl_points'];?>
</th>
		<th class="gray_stripe"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['pl_range'];?>
</th>
            </tr>
            <tr>
                <td style="text-align:left;"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['pl_builds'];?>
</td>
                <td><?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'build_points\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
</td>
                <td>
                   <?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'build_rank\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
 
                    | <span style="color:#C00"><?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'rankInfo2\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
</span>                </td>
            </tr>
            <tr>
                <td style="text-align:left;"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['pl_tech'];?>
</td>
                <td><?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'tech_points\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
</td>
                <td>
                    <?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'tech_rank\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>

                    | <span style="color:#C00"><?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'rankInfo1\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
</span>                </td>
            </tr>
            <tr>
                <td style="text-align:left;"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['pl_fleet'];?>
</td>
                <td><?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'fleet_points\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
</td>
                <td>
                    <?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'fleet_rank\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>

                    | <span style="color:#3C3"><?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'rankInfo4\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
</span>
                                    </td>
            </tr>
            <tr>
                <td style="text-align:left;"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['pl_def'];?>
</td>
                <td><?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'defs_points\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
</td>
                <td>
                    <?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'defs_rank\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>

                    | <span style="color:#3C3"><?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'rankInfo3\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
</span>
                                    </td>
            </tr>
            <tr>
                <td style="text-align:left;">Achievements</td>
                <td><?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'ach_points\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
</td>
                <td>
                    <?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'ach_rank\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>

                    | <span style="color:#C00"><?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'rankInfo5\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
</span>                </td>
            </tr>
            <tr>
                <td style="text-align:left;"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['pl_total'];?>
</td>
                <td><?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'total_points\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
</td>
                <td>
                   <?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'total_rank\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>

                    | <span style="color:#C00"><?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'rankInfo\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
</span>                </td>
            </tr>
    	</tbody></table>
    </div>
    
    <div class="right_part">
        <table class="tablesorter ally_ranks playercard_tables">
            <tbody><tr>
            	<th class="gray_stripe">Outcome of the battle</th>
                <th class="gray_stripe"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['pl_fights'];?>
</th>
                <th class="gray_stripe"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['pl_fprocent'];?>
</th>
            </tr>
            <tr>
                <td style="text-align:left;"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['pl_fightwon'];?>
</td>
                <td><?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'wons\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
</td>
                <td><?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'siegprozent\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
 %</td>
            </tr>
            <tr>
                <td style="text-align:left;"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['pl_fightdraw'];?>
</td>
                <td><?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'draws\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
</td>
                <td><?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'drawsprozent\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
 %</td>
            </tr>
            <tr>
                <td style="text-align:left;"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['pl_fightlose'];?>
</td>
                <td><?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'loos\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
</td>
                <td><?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'loosprozent\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
 %</td>
            </tr>
            <tr>
                <td style="text-align:left;"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['pl_totalfight'];?>
</td>
                <td><?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'totalfights\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
</td>
                <td>100 %</td>
            </tr> 
    	</tbody></table>  
    </div>
   	<div class="clear"></div>  
   	<div class="build_band" style="padding-right:0;">
   	</div>       
</div>
</div>
</div>
            <div class="clear"></div>            
        </div>

<?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->getSubTemplate ("main.footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
<?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2015-07-21 12:18:29
         compiled from "/home/stell530/public_html/beta7/styles/templates/game/main.header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_55ae62c58f75b2_56996513')) {function content_55ae62c58f75b2_56996513($_smarty_tpl) {?><!DOCTYPE html>

<!--[if lt IE 7 ]> <html lang="<?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="<?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
" class="no-js"> <!--<![endif]-->
<head>
	<title><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_playercard'];?>
 - <?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'uni_name\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
 - <?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'game_name\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
</title>
	<meta name="generator" content="2Moons <?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
">
	<!-- 
		This website is powered by 2Moons <?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>

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
	var ServerTimezoneOffset = <?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'Offset\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
;
	var serverTime 	= new Date(<?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[0];?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
, <?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[1]-1;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
, <?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[2];?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
, <?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[3];?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
, <?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[4];?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
, <?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[5];?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
);
	var startTime	= serverTime.getTime();
	var localTime 	= serverTime;
	var localTS 	= startTime;
	var Gamename	= document.title;
	var Ready		= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['ready'];?>
";
	var Skin		= "<?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
";
	var Lang		= "<?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
";
	var head_info	= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['fcm_info'];?>
";
	var auth		= <?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo (($tmp = @$_smarty_tpl->tpl_vars[\'authlevel\']->value)===null||$tmp===\'\' ? \'0\' : $tmp);?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
;
	var days 		= <?php echo (($tmp = @json_encode($_smarty_tpl->tpl_vars['LNG']->value['week_day']))===null||$tmp==='' ? '[]' : $tmp);?>
 
	var months 		= <?php echo (($tmp = @json_encode($_smarty_tpl->tpl_vars['LNG']->value['months']))===null||$tmp==='' ? '[]' : $tmp);?>
 ;
	var tdformat	= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['js_tdformat'];?>
";
	var queryString	= "<?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo strtr($_smarty_tpl->tpl_vars[\'queryString\']->value, array("\\\\" => "\\\\\\\\", "\'" => "\\\\\'", "\\"" => "\\\\\\"", "\\r" => "\\\\r", "\\n" => "\\\\n", "</" => "<\\/" ));?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
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
	<script type="text/javascript" src="./scripts/l18n/validationEngine/jquery.validationEngine-<?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
.js"></script>
	<script type="text/javascript" src="./scripts/base/tooltip.js"></script>
	<script type="text/javascript" src="./scripts/game/base.js"></script>
	<script type="text/javascript" src="./scripts/game/newmail.js"></script>
	<script type="text/javascript" src="./scripts/game/qtip.js"></script>
	<?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php  $_smarty_tpl->tpl_vars[\'scriptname\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'scriptname\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'scripts\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'scriptname\']->key => $_smarty_tpl->tpl_vars[\'scriptname\']->value){
$_smarty_tpl->tpl_vars[\'scriptname\']->_loop = true;
?>/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>

	<script type="text/javascript" src="./scripts/game/<?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'scriptname\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
.js"></script>
	<?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php } ?>/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>

	
	<script type="text/javascript">
	$(function() {
		<?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'execscript\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>

	});
	</script>
	
	
	<?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php if ($_smarty_tpl->tpl_vars[\'manual_11_step\']->value==0){?>/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>

	<script type="text/javascript">
	$(function() {
		qtips('#attack', 'Attention to your planet flies attacking fleet', 'bottomMiddle', 'topLeft');
setTimeout(function() { qtips('.over', 'Go to the review, to view the attackers fleet', 'bottomMiddle', 'topLeft') }, 4000);
setInterval(function() { AJAX() }, 6000)
	});
	</script>
	

	
	
	<?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php }?>/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>

	

	
	<?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php if ($_smarty_tpl->tpl_vars[\'manual_15_step\']->value==0){?>/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>

	<script type="text/javascript">
	$(function() {
		qtips('#munu_shipyard_fleet ', 'Go to Fleet. <br> Here you can build a battle fleet, attacks on other players or flight expedition.', 'rightMiddle', 'leftMiddle');
setInterval(function() { AJAX() }, 6000)
	});
	</script>
	<?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php }?>/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>

	
	<?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php if ($_smarty_tpl->tpl_vars[\'manual_24_step\']->value==0){?>/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>

	<script type="text/javascript">
	$(function() {
		qtips('#munu_academy ', 'Go to the Academy. <br> Here you will be able to enhance skills available to you by selecting one of three trees, broken down my classification..', 'rightMiddle', 'leftMiddle');
setInterval(function() { AJAX() }, 6000)
	});
	</script>
	<?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php }?>/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>

	
	<?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php if ($_smarty_tpl->tpl_vars[\'manual_26_step\']->value==0){?>/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>

	<script type="text/javascript">
	$(function() {
		qtips('#achievements_name ', 'Go to Achievements. <br> Here you can choose suitable for achieving your development strategy.', 'rightMiddle', 'leftMiddle');
setInterval(function() { AJAX() }, 6000)
	});
	</script>
	<?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php }?>/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>

	
	<?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php if ($_smarty_tpl->tpl_vars[\'manual_17_step\']->value==0){?>/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>

	<script type="text/javascript">
	$(function() {
		qtips('#munu_galaxy ', 'Go to the Galaxy. <br> This map of the universe, the planet where all the players are displayed.', 'rightMiddle', 'leftMiddle');
setInterval(function() { AJAX() }, 6000)
	});
	</script>
	
	<?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php }?>/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>

	
	<?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php if ($_smarty_tpl->tpl_vars[\'manual_19_step\']->value==0){?>/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>

	
	<script type="text/javascript">
	$(function() {
		qtips('.over ', 'Go to the review, to see the fleet sent for recycling', 'bottomMiddle', 'topLeft');
setInterval(function() { AJAX() }, 6000)
	});
	</script>
	
	<?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php }?>/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>

	
	
	<?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php if ($_smarty_tpl->tpl_vars[\'manual_21_step\']->value==0){?>/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>

	<script type="text/javascript">
	$(function() {
		qtips('#munu_senat ', 'Go to Senate. <br> Here you can hire experts in various categories that help grown their Empire.', 'rightMiddle', 'leftMiddle');
setInterval(function() { AJAX() }, 6000)
	});
	</script>
	
	<?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php }?>/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>

	
	
	
	
	<?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php if ($_smarty_tpl->tpl_vars[\'manual_13_step\']->value==0){?>/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>

	<script type="text/javascript">
	$(function() {
		qtips('.mesages ', 'Go to messages. <br> Red figure beside notifies you about the number of unread messages.', 'bottomMiddle', 'topMiddle');
setInterval(function() { AJAX() }, 6000)
	});
	</script>
		<?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php }?>/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>

	<?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php if ($_smarty_tpl->tpl_vars[\'manual_5_step\']->value==0){?>/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>

	<script type="text/javascript">
	$(function() {
setTimeout(function() { qtips('#munu_research', 'Log in here, for then that would protect against espionage.', 'rightMiddle', 'leftMiddle') }, 4000);
setInterval(function() { AJAX() }, 6000)
	});
	</script>
	
	<?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php }?>/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>

	
	<?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php if ($_smarty_tpl->tpl_vars[\'manual_8_step\']->value==0){?>/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>

	
	<script type="text/javascript">
	$(function() {
		qtips('#munu_shipyard_defense ', 'Go to Defense.<br>Here you will be able to increase the protection of the planet. ', 'rightMiddle', 'leftMiddle');
setInterval(function() { AJAX() }, 6000)
	});
	</script>
	
	<?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php }?>/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>

	
	
	
	
	<?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php if ($_smarty_tpl->tpl_vars[\'manuel_step_1_1\']->value==0){?>/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>

	
		<script type="text/javascript">
	
	$(function() {
		
qtips('#munu_build ', 'Go to Buildings.', 'rightMiddle', 'leftMiddle');
setInterval(function() { AJAX() }, 6000)
	});
	</script>
	<?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php }?>/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>

	

	<?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php if ($_smarty_tpl->tpl_vars[\'manual_step_3\']->value==0){?>/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>

	<script type="text/javascript">
	$(function() {
		qtips('#espionage ', 'Attention! Spy on your planet.', 'bottomMiddle', 'topLeft');
setTimeout(function() { qtips('.over ', 'Go to Overview .', 'bottomMiddle', 'topLeft') }, 3000);

setInterval(function() { AJAX() }, 6000)
	});
	</script>
	<?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php }?>/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>

	
	
	
	
	
	
	
	
	
	
	
	
	<?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php if ($_smarty_tpl->tpl_vars[\'manual_step_1\']->value==0){?>/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>

	
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
	<?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php }?>/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>


   
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
" class="<?php echo '/*%%SmartyNocache:55747341555ae62c585f900-50875451%%*/<?php echo $_smarty_tpl->tpl_vars[\'bodyclass\']->value;?>
/*/%%SmartyNocache:55747341555ae62c585f900-50875451%%*/';?>
" >
	<div id="tooltip" class="tip"></div><?php }} ?>