{block name="title" prepend}{$LNG.immunity_title}{/block}
{block name="content"}
<div id="page">

	<div id="content">
<div id="ally_content" class="conteiner">
    <div class="gray_stripe" style="border-bottom:0;">
    	{$LNG.immunity_title}
    </div>
    <table class="tablesorter ally_ranks">
    <tbody>
       <tr>
        <td colspan="2">
           {$p_state}{if !empty($immunity_active)} <b><span style="color:red;" class="countdown2"  secs="{$immunity_active}"></span></b>{/if}
       </td>
    </tr>
    <tr>
        <td>
            <img src="styles/theme/gow/images/immunity_page.png">
        </td>
        <td>
        {$LNG.immunity_text}
        </td>
    </tr>
    
   <form action="game.php?page=immunity" method="POST">
   <input type="hidden" name="con" value="buy">
					
					<tr>
        <td colspan="2">
    {$next_immunity}{if !empty($immunity_next_active)} <span  class="countdown2"  secs="{$immunity_next_active}"></span>{/if}
    
				</form>
    
                    </td>
    </tr>
        </form>

       <form action="game.php?page=immunity" method="POST">
	   <input type="hidden" name="con" value="end">

  <tr>
        <td colspan="2">  
    {$end_immunity}
    
    </td>
    </tr>
    </form>
    </tbody>
    </table>
</div>
</div>
</div>
            <div class="clear"></div>            
        </div>
		{/block}