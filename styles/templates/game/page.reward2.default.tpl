
{block name="title" prepend}Voucher{/block}
{block name="content"}
<div id="page">
	<div id="content">
<div id="ally_content" class="conteiner">
    <div class="gray_stripe" style="border-bottom:0;">
    	Redeem Code
    </div>
 <table class="tablesorter ally_ranks">
<tr>
        <td colspan="2">
           {$LNG.redeem}
       </td>
    </tr>
       <form method="POST">
<tr>
        <td>
		Voucher Code: <INPUT type=text name="voucher" style="border:1px solid white; background-color:#1C1F23;">
       </td>
    </tr>		
					<tr>
        <td colspan="2">
  <center>  <button type="submit" name="redeem" class="button" style="height:25px;">Redeem</button>   </center>  
					
				</form>
    
                    </td>
    </tr>
    
 </tbody>
    </table>
</div>
</div>
</div>
            <div class="clear"></div>            
        </div>
		{/block}
		
