{block name="title" prepend}{$LNG.lm_alliance}{/block}
{block name="content"}
<div id="page">
<div id="content">
<div id="ally_content" class="conteiner">
    <div class="gray_stripe" style="padding-right:0; margin-bottom:5px;">
    	{$LNG.al_diplo_head}
        <a href="game.php?page=alliance&amp;mode=admin&amp;action=diplomacyCreate&amp;diploMode=0" class="right_flank button" onclick="return Dialog.open(this.href, 684, 283);">
New agreement</a>
    </div>

		{foreach $diploList.0 as $diploMode => $diploAlliances}	
	<div class="gray_stripe"> 
	
    	{$LNG.al_diplo_level.$diploMode} <a href="game.php?page=alliance&amp;mode=admin&amp;action=diplomacyCreate&amp;diploMode=1" onclick="return Dialog.open(this.href, 684, 283);" 
        class="batn_lincks right_flank diplomacy">{$LNG.ERA}</a>
    </div>
	
	
	
   {foreach $diploAlliances as $diploID => $diploName}
   <ul>
 <div class="ally_contents">
					<li>
                    	{$diploName}
						
                        						<a href="game.php?page=alliance&amp;mode=admin&amp;action=diplomacyDelete&amp;id={$diploID}" onclick="return confirm('{$LNG.al_diplo_confirm_delete}');">
                        <img src="styles/images/false.png" alt="" width="16" height="16"></a>
                                            </li>
		    </div>
			</ul>
			{foreachelse}
			
			
   <div class="ally_contents">
					<span>{$LNG.al_diplo_no_entry}</span>
		    </div>
		{/foreach}
	{/foreach}
	    <div>
       

	  
        
		  <div class="left_part">
            <div class="gray_stripe">
                {$LNG.al_diplo_accept}
            </div>    
			{if array_filter($diploList.1)}
		{foreach $diploList.1 as $diploMode => $diploAlliances}	
		{if !empty($diploAlliances)}
            <div class="ally_contents">        
            					
				                	
				                	
								{$LNG.al_diplo_level.$diploMode}<br/>
                <ul>
				{foreach $diploAlliances as $diploID => $diploName}
				                	<li>
                    	{$diploName}
						<a href="game.php?page=alliance&amp;mode=admin&amp;action=diplomacyAccept&amp;id={$diploID}" onclick="return confirm('{$LNG.al_diplo_accept_yes_confirm}');"><img src="styles/resource/images/true.png" alt="" width="16" height="16"></a>
                        						<a href="game.php?page=alliance&amp;mode=admin&amp;action=diplomacyDelete&amp;id={$diploID}" onclick="return confirm('{$LNG.al_diplo_confirm_delete}');">
                        <img src="styles/images/false.png" alt="" width="16" height="16"></a>
                                            </li>
											{/foreach}
                                </ul>
                                	</div>
		{/if}
		{/foreach}
				  {else}
	<div class="ally_contents"> 
            <span>{$LNG.NoOffer}</span>            </div>
	{/if}              	
				                	
				                             
            </div>           
         </div>
       


	   

	   <div class="right_part">
            <div class="gray_stripe">
                {$LNG.al_diplo_accept_send}
            </div>    
			{if array_filter($diploList.2)}
		{foreach $diploList.2 as $diploMode => $diploAlliances}	
		{if !empty($diploAlliances)}
            <div class="ally_contents">        
            					
				                	
				                	
								{$LNG.al_diplo_level.$diploMode}<br/>
                <ul>
				{foreach $diploAlliances as $diploID => $diploName}
				                	<li>
                    	{$diploName}
						
                        						<a href="game.php?page=alliance&amp;mode=admin&amp;action=diplomacyDelete&amp;id={$diploID}" onclick="return confirm('{$LNG.al_diplo_confirm_delete}');">
                        <img src="styles/images/false.png" alt="" width="16" height="16"></a>
                                            </li>
											{/foreach}
                                </ul>
                            </div>     	
		{/if}
		{/foreach}
				  {else}
<div class="ally_contents"> 
            <span>{$LNG.NoOffer}</span>            </div>
	{/if}              	
		              	
			                             
          
        <div class="clear"></div>
	</div>
</div>

<div class="ally_bottom" style="text-align:left;">
    <a href="game.php?page=alliance&amp;mode=admin">back</a>
</div>
</div>
</div>
            <div class="clear"></div>            
        </div>
{/block}