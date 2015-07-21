{block name="title" prepend}Alliance Storage{/block}
{block name="content"}
<div id="page">
	<div id="content">
<div id="ally_content" class="conteiner">
    <div class="gray_stripe">
        <div class="left_part">	
           Alliance Storage
        </div>
         {if $rights.BANK}<a href="?page=alliance&mode=logstorage" class="batn_lincks right_flank over imperia">statistics</a>      {/if}                 
    </div> 
    <div class="ally_contents sepor_conten res_901">
    	<div class="res_ico"></div>
        <div class="res_text">Metal:</div>
        <div class="res_count">{$storage_metal}</div>
        <div class="clear"></div>
    </div>
    <div class="ally_contents sepor_conten res_902">
    	<div class="res_ico"></div>
        <div class="res_text">Crystal:</div>
        <div class="res_count">{$storage_crystal}</div>
        <div class="clear"></div>
    </div>
    <div class="ally_contents sepor_conten res_903">
    	<div class="res_ico"></div>
        <div class="res_text">Deuterium:</div>
        <div class="res_count">{$storage_deuterium}</div>
        <div class="clear"></div>
    </div>
   
    <div class="ally_contents" style="padding:10px;">
      
                <div class="btn_border right_flank"> 
				 {if $rights.BANK}
            <a href="?page=alliance&amp;mode=issue" method="post" >
            	<input value="Issue" type="submit">
            </a>
			{/if}
        </div>
                

        
				{if !empty($deposit_active)}
				<div class="btn_border right_flank">
				
                	<button><span style="color:red;" class="countdown2"  secs="{$deposit_active}"></span></button>
        		</div>
				{else}
				<div class="btn_border right_flank">
                
            <a href="?page=alliance&amp;mode=put">
                <input value="Make a contribution" type="submit">
            </a>
        		</div>
				{/if}
        
        <div class="clear"></div>        
    </div>
    
    <div class="gray_stripe">
                    </div>
</div>
<div class="ally_bottom" style="text-align:left;">
    <a href="?page=alliance">back</a>
</div>
</div>
</div>
            <div class="clear"></div>            
        </div>
{/block}