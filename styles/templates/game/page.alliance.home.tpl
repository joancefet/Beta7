{block name="title" prepend}{$LNG.lm_alliance}{/block}
{block name="content"}
<div id="page">
<div id="content">
<div id="ally_content" class="conteiner">
    <div class="gray_stripe">
        <a href="#" style="left:5px; right:auto;" onclick="return Dialog.manualinfo(11)" class="interrogation manual">?</a>
       {if $rights.ADMIN}
	   <a href="?page=alliance&amp;mode=admin" class="batn_lincks right_flank office">{$LNG.al_manage_alliance}</a> {/if}       <div class="position">
            {$LNG.al_rank}: {$rankName}
        </div>                         
    </div>             

    <div class="ally_img">
	<div class="fractions_ico_big">
	{if $fraction == 0}
        	        	<a href="game.php?page=alliance&amp;mode=fraction&amp;fraction=1"><img alt="" title="" class="tooltip" data-tooltip-content="Grabtor" src="styles/images/alliance/fraction_1.png" /></a>
        	<a href="game.php?page=alliance&amp;mode=fraction&amp;fraction=2"><img alt="" title="" class="tooltip" data-tooltip-content="Senter" src="styles/images/alliance/fraction_2.png" /></a>
            <a href="game.php?page=alliance&amp;mode=fraction&amp;fraction=3"><img alt="" title="" class="tooltip" data-tooltip-content="Tallkor" src="styles/images/alliance/fraction_3.png" /></a>
			{else}
			<a href="game.php?page=alliance&amp;mode=fraction&amp;fraction={$fraction}"><img alt="" title="" src="styles/images/alliance/fraction_{$fraction}.png" /></a>
			{/if}
                    </div>
        <table class="no_visible"><tr><td>
                            <span class="designation">
							{if $ally_image}
                <img src="{$ally_image}" />   {/if}
                <span>{$ally_name} {$ally_tag}</span><br/>
              {if $rights.MEMBERLIST} <a href="?page=alliance&amp;mode=memberList">{$ally_max_members} member</a> of {$ally_members}{else}{$ally_max_members} member of {$ally_members}{/if}
			   
                            </span>
        </td></tr></table>                            
    </div>       
	
    
	
	
	
    <div class="gray_stripe">
        <div class="left_part">	
             <a href="game.php?page=alliance&amp;mode=storage" class="batn_lincks storage">storage alliance</a>
            		{if $rights.SEEAPPLY && $applyCount > 0}		
	
		<a href="?page=alliance&amp;mode=admin&amp;action=mangeApply">{$requests}</a>
	
	{/if}	
{if $rights.ROUNDMAIL}
						<a href="game.php?page=alliance&mode=circular" onclick="return Dialog.open(this.href, 650, 300);" class="batn_lincks right_flank mesages">{$LNG.al_circular_message}</a>
						{/if}
						
						
                    </div>
        <div class="right_part">
        	<a href="game.php?page=alliance&amp;mode=development" class="batn_lincks development">development (<span>{$points}&nbsp;</span>)</a>	
			<a href="game.php?page=chat&chat=ally" class="batn_lincks right_flank chat">{$LNG.al_goto_chat}</a>
        </div>
    </div>
    <div class="ally_contents">
       {if $ally_description}{$ally_description}{else}{$LNG.al_description_message}{/if}   </div>
           {if $rights.EVENTS}
		   <div class="gray_stripe">
			
            {$LNG.al_events}
        </div> 

		
        <div class="ally_contents">
        
				{if $ally_events}	
			<span>
	
		
			{foreach $ally_events as $member => $events}
				<tr>
					<td colspan="2">{$member}</td>
				</tr>
				{foreach $events as $index => $fleet}
				<tr>
					<td id="fleettime_{$index}" class="fleets" data-fleet-end-time="{$fleet.returntime}" data-fleet-time="{$fleet.resttime}">-</td>
					<td colspan="2">{$fleet.text}</td>
				</tr>
				{/foreach}
			{/foreach}
		{else}
			<tr>
				<td colspan="2">{$LNG.al_no_events}</td>
			</tr>
		</span>	{/if}		
		        </div>
	    
    
	{/if}
    <div class="gray_stripe">
       {$LNG.al_inside_section}
    </div>                        
    <div class="ally_contents">
        {$ally_text}
            </div>
                            
    
    <div>
        <div class="left_part">
            <div class="gray_stripe">
                {$LNG.al_diplo}
                					{if $rights.DIPLOMATIC}<a href="game.php?page=alliance&amp;mode=admin&amp;action=diplomacy" class="batn_lincks right_flank diplomacy">{$LNG.ERA}</a>{/if}
                            </div>
            <div class="ally_contents">       
                                    <span></span>
                            </div>
        </div>
        
        <div class="right_part">
           <div class="gray_stripe">
                {$LNG.pl_fightstats}
            </div>
            <div class="ally_contents">
                <p>{$LNG.pl_totalfight}: <span>{$totalfight|number}</span></p>
                <p>{$LNG.pl_fightwon}: <span>{$fightwon|number} {if $totalfight}({round($fightwon / $totalfight * 100, 2)}%){/if}</span></p>
                <p>{$LNG.pl_fightlose}: <span>{$fightlose|number} {if $totalfight}({round($fightlose / $totalfight * 100, 2)}%){/if}</span></p>
                <p>{$LNG.pl_fightdraw}: <span>{$fightdraw|number} {if $totalfight}({round($fightdraw / $totalfight * 100, 2)}%){/if}</span></p>
            </div>
        </div>                           
    </div>
              
</div><!--/ally-->
{if !$isOwner}
 
	
	<div class="ally_bottom">
    <a href="game.php?page=alliance&amp;mode=close" onclick="return confirm('{$LNG.al_leave_ally}');">{$LNG.al_leave_alliance}</a>
</div>
	
	
{/if}
</div>
</div>
            <div class="clear"></div>            
        </div>
{/block}