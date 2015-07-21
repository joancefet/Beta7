{block name="title" prepend}{$LNG.lm_alliance}{/block}
{block name="content"}
<div id="page">
	<div id="content">

<div id="ally_content" class="conteiner">
    <div class="gray_stripe">
    	<span style="float:left; display:block; width:140px;">alliance</span>
        <div class="search_aly">
            <form action="game.php?page=alliance&amp;mode=search" method="post">
                <input type="text" placeholder="search alliance" name="searchtext" value=""> 
                <input type="submit" value="search"> 
            </form>     
        </div>
        <a href="game.php?page=alliance&amp;mode=create" class="batn_lincks right_flank plus">{$LNG.al_alliance_make}</a>   
    </div>  

{if !empty($searchList)}	
{foreach $searchList as $seachRow}
	    <div class="ally_img">
        <table class="no_visible"><tr><td>
        	<a href="game.php?page=alliance&amp;mode=apply&amp;id={$seachRow.id}">
			<img src="{$seachRow.ally_image}" width="682px" height="215" />
                            <span class="designation">
                <span>{$seachRow.name} [{$seachRow.tag}]</span><br/>
                {$seachRow.members} members of {$seachRow.max_members}
            </span>
            </a>
        </td></tr></table>                            
    </div>   
{foreachelse}
	<tr>
		<td colspan="3">{$LNG.al_find_no_alliances}</td>
	</tr>
	{/foreach}
{/if}	
	</div>
</div>
</div>
            <div class="clear"></div>            
        </div>
{/block}