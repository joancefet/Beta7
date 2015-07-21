{block name="title" prepend}{$LNG.lm_alliance}{/block}
{block name="content"}
<div id="page">
<div id="content">
<div id="ally_content" class="conteiner">
    <div class="gray_stripe">
    	{$LNG.al_your_ally}       
    </div>             

    <div class="ally_img">
        <table class="no_visible"><tr><td>
               {if $ally_image} <img src="{$ally_image}" />  {/if}          <span class="designation">
                <span>{$ally_tag} {$ally_name}</span><br/>
                 {$ally_member_scount} members of {$ally_max_members}
            </span>
        </td></tr></table>                            
    </div>              
    

	{if $ally_request_min_points}
    <div class="gray_stripe">
        
                   <a href="game.php?page=alliance&amp;mode=apply&amp;id={$ally_id}">apply</a>
                        </div>
    {else}
     <div class="gray_stripe">
        
                        	{$ally_request_min_points_info}
                        </div>
    {/if}
    <div class="ally_contents">
        <i><b><span style="color: #ff6600">{if !empty($ally_description)}{$ally_description}{else}{$LNG.al_description_message}{/if}</span></b></i>            </div>   
     
	 {if isset($DiploInfo)}
	  <div class="left_part">
            <div class="gray_stripe">
                {$LNG.al_diplo}
            </div>
            <div class="ally_contents">      
                                                              

					{if $DiploInfo}
					<ul>
	{if !empty($DiploInfo.0)}<li>{$LNG.al_diplo_level.0}</li><br><br>{foreach item=PaktInfo from=$DiploInfo.0}<a href="?page=alliance&mode=info&amp;id={$PaktInfo.1}">{$PaktInfo.0}</a><br>{/foreach}<br>{/if}
	{if !empty($DiploInfo.1)}<li>{$LNG.al_diplo_level.1}</li><br><br>{foreach item=PaktInfo from=$DiploInfo.1}<a href="?page=alliance&mode=info&amp;id={$PaktInfo.1}">{$PaktInfo.0}</a><br>{/foreach}<br>{/if}
	{if !empty($DiploInfo.2)}<li>{$LNG.al_diplo_level.2}</li><br><br>{foreach item=PaktInfo from=$DiploInfo.2}<a href="?page=alliance&mode=info&amp;id={$PaktInfo.1}">{$PaktInfo.0}</a><br>{/foreach}<br>{/if}
	{if !empty($DiploInfo.3)}<li>{$LNG.al_diplo_level.3}</li><br><br>{foreach item=PaktInfo from=$DiploInfo.3}<a href="?page=alliance&mode=info&amp;id={$PaktInfo.1}">{$PaktInfo.0}</a><br>{/foreach}<br>{/if}
		{if !empty($DiploInfo.4)}<li>{$LNG.al_diplo_level.4}</li><br><br>{foreach item=PaktInfo from=$DiploInfo.4}<a href="?page=alliance&mode=info&amp;id={$PaktInfo.1}">{$PaktInfo.0}</a><br>{/foreach}<br>
		</ul>{/if}
					
                                                                                         
{else}
		
		</div>
        </div>
	{/if}
	   
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
              
</div>
{/if}<!--/ally-->
</div>
</div>
            <div class="clear"></div>            
        </div>
{/block}