


	<div id="left_side">        
    <div id="left_menu">
               
        <div class="separator"></div>

        
        
        <a class="btn_menu" href="admin.php?page=overview" >&nbsp;Overview</a>
        <a class="btn_menu" href="game.php" >Go to game</a>
	        <div class="separator"></div>	
		{if allowedTo('ShowInformationPage')}<a href="?page=infos" class="btn_menu" >{$LNG.mu_game_info}</a>{/if}
		{if allowedTo('ShowConfigBasicPage')}<a href="?page=config" class="btn_menu" >{$LNG.mu_settings}</a>{/if}
		{if allowedTo('ShowConfigUniPage')}<a href="?page=configuni" class="btn_menu" >{$LNG.mu_unisettings}</a>{/if}
		{if allowedTo('ShowChatConfigPage')}<a href="?page=chat" class="btn_menu" >{$LNG.mu_chat}</a>{/if}
		{if allowedTo('ShowTeamspeakPage')}<a href="?page=teamspeak" class="btn_menu" >{$LNG.mu_ts_options}</a>{/if}
		{if allowedTo('ShowFacebookPage')}<a href="?page=facebook" class="btn_menu" >{$LNG.mu_fb_options}</a>{/if}
		{if allowedTo('ShowModulePage')}<a href="?page=module" class="btn_menu" >{$LNG.mu_module}</a>{/if}
		{if allowedTo('ShowDisclamerPage')}<a href="?page=disclamer" class="btn_menu" >{$LNG.mu_disclaimer}</a>{/if}
		{if allowedTo('ShowStatsPage')}<a href="?page=statsconf" class="btn_menu" >{$LNG.mu_stats_options}</a>{/if}
		{if allowedTo('ShowVertifyPage')}<a href="?page=vertify" class="btn_menu" >{$LNG.mu_vertify}</a>{/if}
		{if allowedTo('ShowCronjobPage')}<a href="?page=cronjob" class="btn_menu" >{$LNG.mu_cronjob}</a>{/if}
		{if allowedTo('ShowDumpPage')}<a href="?page=dump" class="btn_menu" >{$LNG.mu_dump}</a>{/if}
        <div class="separator"></div>		
		{if allowedTo('ShowCreatorPage')}<a href="?page=create" class="btn_menu" >{$LNG.new_creator_title}</a>{/if}
		{if allowedTo('ShowAccountEditorPage')}<a href="?page=accounteditor" class="btn_menu" >{$LNG.mu_add_delete_resources}</a>{/if}
		{if allowedTo('ShowBanPage')}<a href="?page=bans" class="btn_menu" >{$LNG.mu_ban_options}</a>{/if}
		{if allowedTo('ShowGiveawayPage')}<a href="?page=giveaway" class="btn_menu" >{$LNG.mu_giveaway}</a>{/if}
        <div class="separator"></div>		
		{if allowedTo('ShowSearchPage')}<a href="?page=search&amp;search=online&amp;minimize=on" class="btn_menu" >{$LNG.mu_connected}</a>{/if}
		{if allowedTo('ShowSupportPage')}<a href="?page=support" class="btn_menu" >{$LNG.mu_support}{if $supportticks != 0} ({$supportticks}){/if}</a>{/if}
		{if allowedTo('ShowActivePage')}<a href="?page=active" class="btn_menu" >{$LNG.mu_vaild_users}</a>{/if}
		{if allowedTo('ShowSearchPage')}<a href="?page=search&amp;search=p_connect&amp;minimize=on" class="btn_menu" >{$LNG.mu_active_planets}</a>{/if}
		{if allowedTo('ShowFlyingFleetPage')}<a href="?page=fleets" class="btn_menu" >{$LNG.mu_flying_fleets}</a>{/if}
		{if allowedTo('ShowNewsPage')}<a href="?page=news" class="btn_menu" >{$LNG.mu_news}</a>{/if}
		{if allowedTo('ShowSearchPage')}<a href="?page=search&amp;search=users&amp;minimize=on" class="btn_menu" >{$LNG.mu_user_list}</a>{/if}
		{if allowedTo('ShowSearchPage')}<a href="?page=search&amp;search=planet&amp;minimize=on" class="btn_menu" >{$LNG.mu_planet_list}</a>{/if}
		{if allowedTo('ShowSearchPage')}<a href="?page=search&amp;search=moon&amp;minimize=on" class="btn_menu" >{$LNG.mu_moon_list}</a>{/if}
		{if allowedTo('ShowMessageListPage')}<a href="?page=messagelist" class="btn_menu" >{$LNG.mu_mess_list}</a>{/if}
		{if allowedTo('ShowAccountDataPage')}<a href="?page=accountdata" class="btn_menu" >{$LNG.mu_info_account_page}</a>{/if}
		{if allowedTo('ShowSearchPage')}<a href="?page=search" class="btn_menu" >{$LNG.mu_search_page}</a>{/if}
		{if allowedTo('ShowMultiIPPage')}<a href="?page=multiips" class="btn_menu" >{$LNG.mu_multiip_page}</a>{/if}
        <div class="separator"></div>		
		{if allowedTo('ShowLogPage')}<a href="?page=log" class="btn_menu" >{$LNG.mu_logs}</a>{/if}
		{if allowedTo('ShowSendMessagesPage')}<a href="?page=globalmessage" class="btn_menu" >{$LNG.mu_global_message}</a>{/if}
		{if allowedTo('ShowPassEncripterPage')}<a href="?page=password" class="btn_menu" >{$LNG.mu_md5_encripter}</a>{/if}
		{if allowedTo('ShowStatUpdatePage')}<a href="?page=statsupdate" class="btn_menu"  onClick=" return confirm('{$LNG.mu_mpu_confirmation}');">{$LNG.mu_manual_points_update}</a>{/if}
		{if allowedTo('ShowClearCachePage')}<a href="?page=clearcache" class="btn_menu" >{$LNG.mu_clear_cache}</a>{/if}

        <div class="separator"></div>
        
		        
                <div class="clear"></div>
				
    </div><!--/left_menu-->
	
 
</div><!--/left_side-->

   <div id="page" >
   <div id="content">


