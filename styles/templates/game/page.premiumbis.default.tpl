{block name="title" prepend}Premium{/block}
{block name="content"}

<script type="text/javascript">
	var pblist			= { "Cost":{ "prem_res":10,"prem_storage":1,"prem_s_build":7,"prem_o_build":100,"prem_button":525,"prem_speed_button":30,"prem_expedition":30,"prem_count_expiditeon":500,"prem_speed_expiditeon":50,"prem_moon_dextruct":8500,"prem_leveling":32,"prem_batle_leveling":37,"prem_bank_ally":200,"prem_prod_from_colly":110,"prem_moon_creat":100,"prem_fuel_consumption":55 },"Factor":{ "prem_res":[1.07,90],"prem_storage":[1.05,4],"prem_s_build":[1.2,50],"prem_o_build":[1.3,1],"prem_button":[1.45,1],"prem_speed_button":[1.35,10],"prem_expedition":[1.02,5],"prem_count_expiditeon":[1.35,1],"prem_speed_expiditeon":[1.03,8],"prem_moon_dextruct":[2,2],"prem_leveling":[1.1,25],"prem_batle_leveling":[1.08,25],"prem_bank_ally":[1.2,1],"prem_prod_from_colly":[1.13,15],"prem_moon_creat":[1.04,2],"prem_fuel_consumption":[1.12,3] },"RangeValue":{ "prem_res":[0,1000],"prem_storage":[0,1000],"prem_s_build":[0,1000],"prem_o_build":[0,100],"prem_button":[2,10],"prem_speed_button":[0,100],"prem_expedition":[0,1000],"prem_count_expiditeon":[0,100],"prem_speed_expiditeon":[0,1000],"prem_moon_dextruct":[2,10],"prem_leveling":[0,1000],"prem_batle_leveling":[0,1000],"prem_bank_ally":[2,100],"prem_prod_from_colly":[0,250],"prem_moon_creat":[0,100],"prem_fuel_consumption":[0,1000] } };
	var cost_stardust	= {$buystardustprice};
	var atm				= {$antimatte};
</script>


<div id="page">
	<div id="content">
<div id="ally_content" class="conteiner">
    <div class="gray_stripe" style="margin-bottom:5px;">
		Premium shop
    </div>
		<div id="build_elements" class="officier_elements prem_shop">
               

			   <div class="build_box">
            <div class="head" onclick="OpenBox('prem_res');">
            	<span style="cursor:help; float:left; margin-right:8px;" class="interrogation tooltip" data-tooltip-content="Increases the speed of production of mines.<br><span style='color:#F00'>Does not increase the production of the collider.</span>">?</span>
				The rate of extraction of resources
				{if !empty($premium_reward_extraction_days)}  
				<span style="color:#6C6;">+{$premium_reward_extraction}%</span>
                	<span style="color:#FC6;" class="countdown2" secs="{$premium_reward_extraction_days}"></span>{/if}
                                <span id="open_btn_prem_res" class="prem_open_btn">+</span>
			</div>	
           	<div id="box_prem_res" class="content_box">
            	<form action="game.php?page=premium" method="post">
                	<img class="pren_img" alt="" title="" src="/styles/images/premium/prem_res.jpg" />
                	<input type="hidden" name="item" value="prem_res" />
                	<input type="hidden" name="price" id="cost_send_prem_res" value="" />
					
            	               		<div class="content_form">
                        <span style="color:#6C6;">+
                        <input id="count_prem_res" style="width:50px; color:#6C6;" name="count" type="number" min="0" max="1000" onChange="KeyUpBuy('prem_res');" onKeyUp="KeyUpBuy('prem_res');" value="0" />%</span>&nbsp;&nbsp;|&nbsp;&nbsp;
                       	<span style="color:#FC6;">
                        	Days: 
                        	<input id="days_prem_res" style="color:#FC6; width:50px;" name="days" type="number" min="0" onChange="KeyUpBuy('prem_res');" onKeyUp="KeyUpBuy('prem_res');" value="0" />
                        </span>
                        <span style="float:right;"><span id="cost_prem_res" style="color:#090;">0</span> АМ</span>
                    </div>
					
                    <input class="pren_btn_buy" type="submit" value="Buy" />
           		                	
            	</form>
            </div>
        </div>
		
                <div class="build_box">
            <div class="head" onclick="OpenBox('prem_storage');">
            	<span style="cursor:help; float:left; margin-right:8px;" class="interrogation tooltip" data-tooltip-content="Increases storage capacity on the planets and moons.<br><span style='color:#F00'>Does not increase the capacity of the fleets.</span>">?</span>
				Storing capacity
				{if !empty($premium_reward_storing_days)}  
				<span style="color:#6C6;">+{$premium_reward_storing}%</span>
                	<span style="color:#FC6;" class="countdown2" secs="{$premium_reward_storing_days}"></span>{/if}
                                <span id="open_btn_prem_storage" class="prem_open_btn">+</span>
			</div>	
           	<div id="box_prem_storage" class="content_box">
            	<form action="game.php?page=premium" method="post">
                	<img class="pren_img" alt="" title="" src="/styles/images/premium/prem_storage.jpg" />
                	<input type="hidden" name="item" value="prem_storage" />
					<input type="hidden" name="price" id="cost_send_prem_storage" value="" />
            	               		<div class="content_form">
                        
                        <span style="color:#6C6;">+
                        <input id="count_prem_storage" style="width:50px; color:#6C6;" name="count" type="number" min="0" max="250" onChange="KeyUpBuy('prem_storage');" onKeyUp="KeyUpBuy('prem_storage');" value="0" />%</span>&nbsp;&nbsp;|&nbsp;&nbsp;
                       	<span style="color:#FC6;">
                        	Days: 
                        	<input id="days_prem_storage" style="color:#FC6; width:50px;" name="days" type="number" min="0" onChange="KeyUpBuy('prem_storage');" onKeyUp="KeyUpBuy('prem_storage');" value="0" />
                        </span>
                        <span style="float:right;"><span id="cost_prem_storage" style="color:#090;">0</span> АМ</span>
                    </div>
                    <input class="pren_btn_buy" type="submit" value="Buy" />
           		                	
            	</form>
            </div>
        </div>
                <div class="build_box">
            <div class="head" onclick="OpenBox('prem_s_build');">
            	<span style="cursor:help; float:left; margin-right:8px;" class="interrogation tooltip" data-tooltip-content="Increases the speed of construction of buildings and the speed of the study.">?</span>
				The speed of construction and research
				{if !empty($premium_reward_speed_days)}  
				<span style="color:#6C6;">+{$premium_reward_speed}%</span>
                	<span style="color:#FC6;" class="countdown2" secs="{$premium_reward_speed_days}"></span>{/if}
                                <span id="open_btn_prem_s_build" class="prem_open_btn">+</span>
			</div>	
           	<div id="box_prem_s_build" class="content_box">
            	<form action="game.php?page=premium" method="post">
                	<img class="pren_img" alt="" title="" src="/styles/images/premium/prem_s_build.jpg" />
                	<input type="hidden" name="item" value="prem_s_build" />
					<input type="hidden" name="price" id="cost_send_prem_s_build" value="" />
            	               		<div class="content_form">
                        
                        <span style="color:#6C6;">+
                        <input id="count_prem_s_build" style="width:50px; color:#6C6;" name="count" type="number" min="0" max="100" onChange="KeyUpBuy('prem_s_build');" onKeyUp="KeyUpBuy('prem_s_build');" value="0" />%</span>&nbsp;&nbsp;|&nbsp;&nbsp;
                       	<span style="color:#FC6;">
                        	Days: 
                        	<input id="days_prem_s_build" style="color:#FC6; width:50px;" name="days" type="number" min="0" onChange="KeyUpBuy('prem_s_build');" onKeyUp="KeyUpBuy('prem_s_build');" value="0" />
                        </span>
                        <span style="float:right;"><span id="cost_prem_s_build" style="color:#090;">0</span> АМ</span>
                    </div>
                    <input class="pren_btn_buy" type="submit" value="Buy" />
           		                	
            	</form>
            </div>
        </div>
                <div class="build_box">
            <div class="head" onclick="OpenBox('prem_o_build');">
            	<span style="cursor:help; float:left; margin-right:8px;" class="interrogation tooltip" data-tooltip-content="Allows you to add more research and buildings in the queue.">?</span>
				Phase of construction and research
				{if !empty($premium_reward_stage_days)}  
				<span style="color:#6C6;">+{$premium_reward_stage}%</span>
                	<span style="color:#FC6;" class="countdown2" secs="{$premium_reward_stage_days}"></span>{/if}
                                <span id="open_btn_prem_o_build" class="prem_open_btn">+</span>
			</div>	
           	<div id="box_prem_o_build" class="content_box">
            	<form action="game.php?page=premium" method="post">
                	<img class="pren_img" alt="" title="" src="/styles/images/premium/prem_o_build.jpg" />
                	<input type="hidden" name="item" value="prem_o_build" />
					<input type="hidden" name="price" id="cost_send_prem_o_build" value="" />
            	               		<div class="content_form">
                        
                        <span style="color:#6C6;">+
                        <input id="count_prem_o_build" style="width:50px; color:#6C6;" name="count" type="number" min="0" max="100" onChange="KeyUpBuy('prem_o_build');" onKeyUp="KeyUpBuy('prem_o_build');" value="0" />&nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp;|&nbsp;&nbsp;
                       	<span style="color:#FC6;">
                        	Days: 
                        	<input id="days_prem_o_build" style="color:#FC6; width:50px;" name="days" type="number" min="0" onChange="KeyUpBuy('prem_o_build');" onKeyUp="KeyUpBuy('prem_o_build');" value="0" />
                        </span>
                        <span style="float:right;"><span id="cost_prem_o_build" style="color:#090;">0</span> АМ</span>
                    </div>
                    <input class="pren_btn_buy" type="submit" value="Buy" />
           		                	
            	</form>
            </div>
        </div>
                <div class="build_box">
            <div class="head" onclick="OpenBox('prem_button');">
            	<span style="cursor:help; float:left; margin-right:8px;" class="interrogation tooltip" data-tooltip-content="Increases the size of the bonus button.">?</span>
				The "Bonus"
				{if !empty($premium_reward_bonus_days)}  
				<span style="color:#6C6;">+{$premium_reward_bonus}%</span>
                	<span style="color:#FC6;" class="countdown2" secs="{$premium_reward_bonus_days}"></span>{/if}
                                <span id="open_btn_prem_button" class="prem_open_btn">+</span>
			</div>	
           	<div id="box_prem_button" class="content_box">
            	<form action="game.php?page=premium" method="post">
                	<img class="pren_img" alt="" title="" src="/styles/images/premium/prem_button.jpg" />
                	<input type="hidden" name="item" value="prem_button" />
					<input type="hidden" name="price" id="cost_send_prem_button" value="" />
            	               		<div class="content_form">
                        
                        <span style="color:#6C6;">x
                        <input id="count_prem_button" style="width:50px; color:#6C6;" name="count" type="number" min="2" max="10" onChange="KeyUpBuy('prem_button');" onKeyUp="KeyUpBuy('prem_button');" value="2" />&nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp;|&nbsp;&nbsp;
                       	<span style="color:#FC6;">
                        	Days: 
                        	<input id="days_prem_button" style="color:#FC6; width:50px;" name="days" type="number" min="0" onChange="KeyUpBuy('prem_button');" onKeyUp="KeyUpBuy('prem_button');" value="0" />
                        </span>
                        <span style="float:right;"><span id="cost_prem_button" style="color:#090;">0</span> АМ</span>
                    </div>
                    <input class="pren_btn_buy" type="submit" value="Buy" />
           		                	
            	</form>
            </div>
        </div>
                <div class="build_box">
            <div class="head" onclick="OpenBox('prem_speed_button');">
            	<span style="cursor:help; float:left; margin-right:8px;" class="interrogation tooltip" data-tooltip-content="Increases the rate of appearance of the "Bonus".">?</span>
				The emergence of the "bonus"
				{if !empty($prem_speed_button_days)}  
				<span style="color:#6C6;">+{$prem_speed_button}%</span>
                	<span style="color:#FC6;" class="countdown2" secs="{$prem_speed_button_days}"></span>{/if}
                                <span id="open_btn_prem_speed_button" class="prem_open_btn">+</span>
			</div>	
           	<div id="box_prem_speed_button" class="content_box">
            	<form action="game.php?page=premium" method="post">
                	<img class="pren_img" alt="" title="" src="/styles/images/premium/prem_speed_button.jpg" />
                	<input type="hidden" name="item" value="prem_speed_button" />
					<input type="hidden" name="price" id="cost_send_prem_speed_button" value="" />
            	               		<div class="content_form">
                        
                        <span style="color:#6C6;">+
                        <input id="count_prem_speed_button" style="width:50px; color:#6C6;" name="count" type="number" min="0" max="50" onChange="KeyUpBuy('prem_speed_button');" onKeyUp="KeyUpBuy('prem_speed_button');" value="0" />%</span>&nbsp;&nbsp;|&nbsp;&nbsp;
                       	<span style="color:#FC6;">
                        	Days: 
                        	<input id="days_prem_speed_button" style="color:#FC6; width:50px;" name="days" type="number" min="0" onChange="KeyUpBuy('prem_speed_button');" onKeyUp="KeyUpBuy('prem_speed_button');" value="0" />
                        </span>
                        <span style="float:right;"><span id="cost_prem_speed_button" style="color:#090;">0</span> АМ</span>
                    </div>
                    <input class="pren_btn_buy" type="submit" value="Buy" />
           		                	
            	</form>
            </div>
        </div>
                <div class="build_box">
            <div class="head" onclick="OpenBox('prem_expedition');">
            	<span style="cursor:help; float:left; margin-right:8px;" class="interrogation tooltip" data-tooltip-content="Increases the amount brought in by the fleets and the resources of the expedition.<br><span style='color:#F00'>Does not affect the chance of a successful expedition.</span>">?</span>
				Bonus "Expedition"
				{if !empty($prem_expedition_days)}  
				<span style="color:#6C6;">+{$prem_expedition}%</span>
                	<span style="color:#FC6;" class="countdown2" secs="{$prem_expedition_days}"></span>{/if}
                                <span id="open_btn_prem_expedition" class="prem_open_btn">+</span>
			</div>	
           	<div id="box_prem_expedition" class="content_box">
            	<form action="game.php?page=premium" method="post">
                	<img class="pren_img" alt="" title="" src="/styles/images/premium/prem_expedition.jpg" />
                	<input type="hidden" name="item" value="prem_expedition" />
					<input type="hidden" name="price" id="cost_send_prem_expedition" value="" />
            	               		<div class="content_form">
                        
                        <span style="color:#6C6;">+
                        <input id="count_prem_expedition" style="width:50px; color:#6C6;" name="count" type="number" min="0" max="1000" onChange="KeyUpBuy('prem_expedition');" onKeyUp="KeyUpBuy('prem_expedition');" value="0" />%</span>&nbsp;&nbsp;|&nbsp;&nbsp;
                       	<span style="color:#FC6;">
                        	Days: 
                        	<input id="days_prem_expedition" style="color:#FC6; width:50px;" name="days" type="number" min="0" onChange="KeyUpBuy('prem_expedition');" onKeyUp="KeyUpBuy('prem_expedition');" value="0" />
                        </span>
                        <span style="float:right;"><span id="cost_prem_expedition" style="color:#090;">0</span> АМ</span>
                    </div>
                    <input class="pren_btn_buy" type="submit" value="Buy" />
           		                	
            	</form>
            </div>
        </div>
                <div class="build_box">
            <div class="head" onclick="OpenBox('prem_count_expiditeon');">
            	<span style="cursor:help; float:left; margin-right:8px;" class="interrogation tooltip" data-tooltip-content="Increases the maximum number of simultaneous expeditions">?</span>
				Number of "Expedition"
				{if !empty($premium_reward_expedition_days)}  
				<span style="color:#6C6;">+{$premium_reward_expedition}%</span>
                	<span style="color:#FC6;" class="countdown2" secs="{$premium_reward_expedition_days}"></span>{/if}
                                <span id="open_btn_prem_count_expiditeon" class="prem_open_btn">+</span>
			</div>	
           	<div id="box_prem_count_expiditeon" class="content_box">
            	<form action="game.php?page=premium" method="post">
                	<img class="pren_img" alt="" title="" src="/styles/images/premium/prem_count_expiditeon.jpg" />
                	<input type="hidden" name="item" value="prem_count_expiditeon" />
					<input type="hidden" name="price" id="cost_send_prem_count_expiditeon" value="" />
            	               		<div class="content_form">
                        
                        <span style="color:#6C6;">+
                        <input id="count_prem_count_expiditeon" style="width:50px; color:#6C6;" name="count" type="number" min="0" max="100" onChange="KeyUpBuy('prem_count_expiditeon');" onKeyUp="KeyUpBuy('prem_count_expiditeon');" value="0" />&nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp;|&nbsp;&nbsp;
                       	<span style="color:#FC6;">
                        	Days: 
                        	<input id="days_prem_count_expiditeon" style="color:#FC6; width:50px;" name="days" type="number" min="0" onChange="KeyUpBuy('prem_count_expiditeon');" onKeyUp="KeyUpBuy('prem_count_expiditeon');" value="0" />
                        </span>
                        <span style="float:right;"><span id="cost_prem_count_expiditeon" style="color:#090;">0</span> АМ</span>
                    </div>
                    <input class="pren_btn_buy" type="submit" value="Buy" />
           		                	
            	</form>
            </div>
        </div>
                <div class="build_box">
            <div class="head" onclick="OpenBox('prem_speed_expiditeon');">
            	<span style="cursor:help; float:left; margin-right:8px;" class="interrogation tooltip" data-tooltip-content="Reduces the time of the expedition.">?</span>
				Speed ​​"expedition"
				{if !empty($prem_speed_expiditeon_days)}  
				<span style="color:#6C6;">+{$prem_speed_expiditeon}%</span>
                	<span style="color:#FC6;" class="countdown2" secs="{$prem_speed_expiditeon_days}"></span>{/if}
                                <span id="open_btn_prem_speed_expiditeon" class="prem_open_btn">+</span>
			</div>	
           	<div id="box_prem_speed_expiditeon" class="content_box">
            	<form action="game.php?page=premium" method="post">
                	<img class="pren_img" alt="" title="" src="/styles/images/premium/prem_speed_expiditeon.jpg" />
                	<input type="hidden" name="item" value="prem_speed_expiditeon" />
					<input type="hidden" name="price" id="cost_send_prem_speed_expiditeon" value="" />
            	               		<div class="content_form">
                        
                        <span style="color:#6C6;">+
                        <input id="count_prem_speed_expiditeon" style="width:50px; color:#6C6;" name="count" type="number" min="0" max="70" onChange="KeyUpBuy('prem_speed_expiditeon');" onKeyUp="KeyUpBuy('prem_speed_expiditeon');" value="0" />%</span>&nbsp;&nbsp;|&nbsp;&nbsp;
                       	<span style="color:#FC6;">
                        	Days: 
                        	<input id="days_prem_speed_expiditeon" style="color:#FC6; width:50px;" name="days" type="number" min="0" onChange="KeyUpBuy('prem_speed_expiditeon');" onKeyUp="KeyUpBuy('prem_speed_expiditeon');" value="0" />
                        </span>
                        <span style="float:right;"><span id="cost_prem_speed_expiditeon" style="color:#090;">0</span> АМ</span>
                    </div>
                    <input class="pren_btn_buy" type="submit" value="Buy" />
           		                	
            	</form>
            </div>
        </div>
               
                <div class="build_box">
            <div class="head" onclick="OpenBox('prem_leveling');">
            	<span style="cursor:help; float:left; margin-right:8px;" class="interrogation tooltip" data-tooltip-content="Increases the rate of accumulation of the peace level">?</span>
				Getting peaceful experience
				{if !empty($premium_reward_experience_days)}  
				<span style="color:#6C6;">+{$premium_reward_experience}%</span>
                	<span style="color:#FC6;" class="countdown2" secs="{$premium_reward_experience_days}"></span>{/if}
                                <span id="open_btn_prem_leveling" class="prem_open_btn">+</span>
			</div>	
           	<div id="box_prem_leveling" class="content_box">
            	<form action="game.php?page=premium" method="post">
                	<img class="pren_img" alt="" title="" src="/styles/images/premium/prem_leveling.jpg" />
                	<input type="hidden" name="item" value="prem_leveling" />
					<input type="hidden" name="price" id="cost_send_prem_leveling" value="" />
            	               		<div class="content_form">
                        
                        <span style="color:#6C6;">+
                        <input id="count_prem_leveling" style="width:50px; color:#6C6;" name="count" type="number" min="0" max="1000" onChange="KeyUpBuy('prem_leveling');" onKeyUp="KeyUpBuy('prem_leveling');" value="0" />%</span>&nbsp;&nbsp;|&nbsp;&nbsp;
                       	<span style="color:#FC6;">
                        	Days: 
                        	<input id="days_prem_leveling" style="color:#FC6; width:50px;" name="days" type="number" min="0" onChange="KeyUpBuy('prem_leveling');" onKeyUp="KeyUpBuy('prem_leveling');" value="0" />
                        </span>
                        <span style="float:right;"><span id="cost_prem_leveling" style="color:#090;">0</span> АМ</span>
                    </div>
                    <input class="pren_btn_buy" type="submit" value="Buy" />
           		                	
            	</form>
            </div>
        </div>
                <div class="build_box">
            <div class="head" onclick="OpenBox('prem_batle_leveling');">
            	<span style="cursor:help; float:left; margin-right:8px;" class="interrogation tooltip" data-tooltip-content="Increases the rate of accumulation of combat level">?</span>
				Preparation of combat experience
				{if !empty($prem_batle_leveling_days)}  
				<span style="color:#6C6;">+{$prem_batle_leveling}%</span>
                	<span style="color:#FC6;" class="countdown2" secs="{$prem_batle_leveling_days}"></span>{/if}
                                <span id="open_btn_prem_batle_leveling" class="prem_open_btn">+</span>
			</div>	
           	<div id="box_prem_batle_leveling" class="content_box">
            	<form action="game.php?page=premium" method="post">
                	<img class="pren_img" alt="" title="" src="/styles/images/premium/prem_batle_leveling.jpg" />
                	<input type="hidden" name="item" value="prem_batle_leveling" />
					<input type="hidden" name="price" id="cost_send_prem_batle_leveling" value="" />
            	               		<div class="content_form">
                        
                        <span style="color:#6C6;">+
                        <input id="count_prem_batle_leveling" style="width:50px; color:#6C6;" name="count" type="number" min="0" max="1000" onChange="KeyUpBuy('prem_batle_leveling');" onKeyUp="KeyUpBuy('prem_batle_leveling');" value="0" />%</span>&nbsp;&nbsp;|&nbsp;&nbsp;
                       	<span style="color:#FC6;">
                        	Days: 
                        	<input id="days_prem_batle_leveling" style="color:#FC6; width:50px;" name="days" type="number" min="0" onChange="KeyUpBuy('prem_batle_leveling');" onKeyUp="KeyUpBuy('prem_batle_leveling');" value="0" />
                        </span>
                        <span style="float:right;"><span id="cost_prem_batle_leveling" style="color:#090;">0</span> АМ</span>
                    </div>
                    <input class="pren_btn_buy" type="submit" value="Buy" />
           		                	
            	</form>
            </div>
        </div>
                <div class="build_box">
            <div class="head" onclick="OpenBox('prem_bank_ally');">
            	<span style="cursor:help; float:left; margin-right:8px;" class="interrogation tooltip" data-tooltip-content="Increases the maximum amount of resources transferred at a time at the bank of the alliance.">?</span>
				alliance Bank
				{if !empty($premium_reward_bank_days)}  
				<span style="color:#6C6;">+{$premium_reward_bank}%</span>
                	<span style="color:#FC6;" class="countdown2" secs="{$premium_reward_bank_days}"></span>{/if}
                                <span id="open_btn_prem_bank_ally" class="prem_open_btn">+</span>
			</div>	
           	<div id="box_prem_bank_ally" class="content_box">
            	<form action="game.php?page=premium" method="post">
                	<img class="pren_img" alt="" title="" src="/styles/images/premium/prem_bank_ally.jpg" />
                	<input type="hidden" name="item" value="prem_bank_ally" />
					<input type="hidden" name="price" id="cost_send_prem_bank_ally" value="" />
            	               		<div class="content_form">
                        
                        <span style="color:#6C6;">x
                        <input id="count_prem_bank_ally" style="width:50px; color:#6C6;" name="count" type="number" min="2" max="100" onChange="KeyUpBuy('prem_bank_ally');" onKeyUp="KeyUpBuy('prem_bank_ally');" value="2" />&nbsp;&nbsp;&nbsp;</span>&nbsp;&nbsp;|&nbsp;&nbsp;
                       	<span style="color:#FC6;">
                        	Days: 
                        	<input id="days_prem_bank_ally" style="color:#FC6; width:50px;" name="days" type="number" min="0" onChange="KeyUpBuy('prem_bank_ally');" onKeyUp="KeyUpBuy('prem_bank_ally');" value="0" />
                        </span>
                        <span style="float:right;"><span id="cost_prem_bank_ally" style="color:#090;">0</span> АМ</span>
                    </div>
                    <input class="pren_btn_buy" type="submit" value="Buy" />
           		                	
            	</form>
            </div>
        </div>
               
                
             
                <div class="build_box">
            <div class="head" onclick="OpenBox('prem_prod_from_colly');">
            	<span style="cursor:help; float:left; margin-right:8px;" class="interrogation tooltip" data-tooltip-content="Increases the production of the collider">?</span>
				Generation collider
				{if !empty($prem_prod_from_colly_days)}  
				<span style="color:#6C6;">+{$prem_prod_from_colly}%</span>
                	<span style="color:#FC6;" class="countdown2" secs="{$prem_prod_from_colly_days}"></span>{/if}
                                <span id="open_btn_prem_prod_from_colly" class="prem_open_btn">+</span>
			</div>	
           	<div id="box_prem_prod_from_colly" class="content_box">
            	<form action="game.php?page=premium" method="post">
                	<img class="pren_img" alt="" title="" src="/styles/images/premium/prem_prod_from_colly.jpg" />
                	<input type="hidden" name="item" value="prem_prod_from_colly" />
					<input type="hidden" name="price" id="cost_send_prem_prod_from_colly" value="" />
            	               		<div class="content_form">
                        
                        <span style="color:#6C6;">+
                        <input id="count_prem_prod_from_colly" style="width:50px; color:#6C6;" name="count" type="number" min="0" max="250" onChange="KeyUpBuy('prem_prod_from_colly');" onKeyUp="KeyUpBuy('prem_prod_from_colly');" value="0" />%</span>&nbsp;&nbsp;|&nbsp;&nbsp;
                       	<span style="color:#FC6;">
                        	Days: 
                        	<input id="days_prem_prod_from_colly" style="color:#FC6; width:50px;" name="days" type="number" min="0" onChange="KeyUpBuy('prem_prod_from_colly');" onKeyUp="KeyUpBuy('prem_prod_from_colly');" value="0" />
                        </span>
                        <span style="float:right;"><span id="cost_prem_prod_from_colly" style="color:#090;">0</span> АМ</span>
                    </div>
                    <input class="pren_btn_buy" type="submit" value="Buy" />
           		                	
            	</form>
            </div>
        </div>
                <div class="build_box">
            <div class="head" onclick="OpenBox('prem_moon_creat');">
            	<span style="cursor:help; float:left; margin-right:8px;" class="interrogation tooltip" data-tooltip-content="Increases the maximum chance of making the moon">?</span>
				Creating the moon
				{if !empty($prem_moon_creat_days)}  
				<span style="color:#6C6;">+{$prem_moon_creat}%</span>
                	<span style="color:#FC6;" class="countdown2" secs="{$prem_moon_creat_days}"></span>{/if}
                                <span id="open_btn_prem_moon_creat" class="prem_open_btn">+</span>
			</div>	
           	<div id="box_prem_moon_creat" class="content_box">
            	<form action="game.php?page=premium" method="post">
                	<img class="pren_img" alt="" title="" src="/styles/images/premium/prem_moon_creat.jpg" />
                	<input type="hidden" name="item" value="prem_moon_creat" />
					<input type="hidden" name="price" id="cost_send_prem_moon_creat" value="" />
            	               		<div class="content_form">
                        
                        <span style="color:#6C6;">+
                        <input id="count_prem_moon_creat" style="width:50px; color:#6C6;" name="count" type="number" min="0" max="100" onChange="KeyUpBuy('prem_moon_creat');" onKeyUp="KeyUpBuy('prem_moon_creat');" value="0" />%</span>&nbsp;&nbsp;|&nbsp;&nbsp;
                       	<span style="color:#FC6;">
                        	Days: 
                        	<input id="days_prem_moon_creat" style="color:#FC6; width:50px;" name="days" type="number" min="0" onChange="KeyUpBuy('prem_moon_creat');" onKeyUp="KeyUpBuy('prem_moon_creat');" value="0" />
                        </span>
                        <span style="float:right;"><span id="cost_prem_moon_creat" style="color:#090;">0</span> АМ</span>
                    </div>
                    <input class="pren_btn_buy" type="submit" value="Buy" />
           		                	
            	</form>
            </div>
        </div>
                <div class="build_box">
            <div class="head" onclick="OpenBox('prem_fuel_consumption');">
            	<span style="cursor:help; float:left; margin-right:8px;" class="interrogation tooltip" data-tooltip-content="Reduces fuel consumption">?</span>
				fuel Consumption
				{if !empty($prem_fuel_consumption_days)}  
				<span style="color:#6C6;">+{$prem_fuel_consumption}%</span>
                	<span style="color:#FC6;" class="countdown2" secs="{$prem_fuel_consumption_days}"></span>{/if}
                                <span id="open_btn_prem_fuel_consumption" class="prem_open_btn">+</span>
			</div>	
           	<div id="box_prem_fuel_consumption" class="content_box">
            	<form action="game.php?page=premium" method="post">
                	<img class="pren_img" alt="" title="" src="/styles/images/premium/prem_fuel_consumption.jpg" />
                	<input type="hidden" name="item" value="prem_fuel_consumption" />
					<input type="hidden" name="price" id="cost_send_prem_fuel_consumption" value="" />
            	               		<div class="content_form">
                        
                        <span style="color:#6C6;">-
                        <input id="count_prem_fuel_consumption" style="width:50px; color:#6C6;" name="count" type="number" min="0" max="70" onChange="KeyUpBuy('prem_fuel_consumption');" onKeyUp="KeyUpBuy('prem_fuel_consumption');" value="0" />%</span>&nbsp;&nbsp;|&nbsp;&nbsp;
                       	<span style="color:#FC6;">
                        	Days: 
                        	<input id="days_prem_fuel_consumption" style="color:#FC6; width:50px;" name="days" type="number" min="0" onChange="KeyUpBuy('prem_fuel_consumption');" onKeyUp="KeyUpBuy('prem_fuel_consumption');" value="0" />
                        </span>
                        <span style="float:right;"><span id="cost_prem_fuel_consumption" style="color:#090;">0</span> АМ</span>
                    </div>
                    <input class="pren_btn_buy" type="submit" value="Buy" />
           		                	
            	</form>
            </div>
        </div>
		
		
		
		<div class="build_box">
            <div class="head" onclick="OpenBox('prem_advanced_battlesim');">
            	<span style="cursor:help; float:left; margin-right:8px;" class="interrogation tooltip" data-tooltip-content="Give you the defender academy details">?</span>
				Advanced battle simulator
				{if !empty($prem_advanced_battlesim_days)}  
				<span style="color:#6C6;">+{$prem_advanced_battlesim}%</span>
                	<span style="color:#FC6;" class="countdown2" secs="{$prem_advanced_battlesim_days}"></span>{/if}
                                <span id="open_btn_prem_advanced_battlesim" class="prem_open_btn">+</span>
			</div>	
           	<div id="box_prem_advanced_battlesim" class="content_box">
            	<form action="game.php?page=premium" method="post">
                	<img class="pren_img" alt="" title="" src="/styles/images/premium/prem_advanced_battlesim.jpg" />
                	<input type="hidden" name="item" value="prem_advanced_battlesim" />
					<input type="hidden" name="price" id="cost_send_prem_advanced_battlesim" value="" />
            	               		<div class="content_form">
                        
                       
                       	<span style="color:#FC6;">
                        	Days: 
                        	<input id="days_prem_advanced_battlesim" style="color:#FC6; width:50px;" name="days" type="number" min="0" onChange="KeyUpBuyBis('prem_advanced_battlesim');" onKeyUp="KeyUpBuyBis('prem_advanced_battlesim');" value="0" />
                        </span>
                        <span style="float:right;"><span id="cost_prem_advanced_battlesim" style="color:#090;">0</span> АМ</span>
                    </div>
                    <input class="pren_btn_buy" type="submit" value="Buy" />
           		                	
            	</form>
            </div>
        </div>
		
		
		
		
        		
        <div class="build_box">
            <div class="head" onclick="OpenBox('stardust');">
            	Stardust
                <span style="color:#FC0;">0</span>
                <span id="open_btn_stardust" class="prem_open_btn">+</span>
            </div>
         	<div id="box_stardust" class="content_box">   
            	<img class="pren_img" alt="" title="" src="/styles/images/premium/stardust.jpg" />
                <form action="game.php?page=premium" method="post">
				<input type="hidden" name="price" id="cost_stardust_price" value="" />
                <input type="hidden" name="mode" value="buystardust" >
            	<div class="content_form">	                	
                    +<input style="width:50px;" type="number" min="0" value="0" id="stardust" name="stardust" onKeyUp="Totalstardust();" onchange="Totalstardust();">
					<span style="float:right;">cost is <span style="color:#090;" id="cost_stardust">0</span> Antimatter</span>            		
             	</div>
                <input  class="pren_btn_buy" type="submit" value="Buy">
                </form> 
        	</div>
    	</div>
	</div>
</div>
</div>
</div>
            <div class="clear"></div>            
        </div>
{/block}