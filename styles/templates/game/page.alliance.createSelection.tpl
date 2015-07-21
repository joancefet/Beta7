
{block name="title" prepend}{$LNG.lm_alliance}{/block}
{block name="content"}
<div id="page">
	<div id="content">

<div id="ally_content" class="conteiner">
    <div class="gray_stripe">
    	<span style="float:left; display:block; width:140px;">Alliance</span>
        <div class="search_aly">
            <form action="game.php?page=alliance&amp;mode=search" method="post">
                <input type="text" placeholder="{$LNG.al_alliance_search}" name="searchtext" value=""> 
                <input type="submit" value="search"> 
            </form>     
        </div>
        <a href="game.php?page=alliance&amp;mode=create" class="batn_lincks right_flank plus">{$LNG.al_alliance_make}</a>   
		</div>  

{foreach $searchList as $seachRow}
<div class="ally_img">
			{if $seachRow.fraction > 0}
    	        <div class="fractions_ico_big">
        	<img alt="" title="" class="tooltip" data-tooltip-content="Level: ({$seachRow.level})" src="styles/images/alliance/fraction_{$seachRow.fraction}.png">
        </div>{/if}
                <table class="no_visible"><tbody><tr><td>
        	<a href="game.php?page=alliance&amp;mode=info&amp;id={$seachRow.id}">
               <img src="{$seachRow.ally_image}" >   <span class="designation">
                <span>{$seachRow.name} [{$seachRow.tag}]</span><br>
                  {$seachRow.members} members of {$seachRow.max_members}
            </span>
            </a>
        </td></tr></tbody></table>                            
    </div>  
	{/foreach}		
	</div>
</div>
</div>
            <div class="clear"></div>            
        </div>
{/block}