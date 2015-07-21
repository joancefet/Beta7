{block name="title" prepend}Global Message{/block}
{block name="content"}

<div id="page">
	<div id="content">
<div id="ally_content" class="conteiner">
    <div class="gray_stripe" style="border-bottom:0;">
    	Global Message
    </div>
	 <table class="tablesorter ally_ranks">

<tr>
        <td colspan="2">
            This mod allows admin to send global message to all users
       </td>
    </tr>
       <form method="POST">
<tr>
        <td>
		
		
<select name="type">
        <option value="1">Message</option>
        <option value="2">Email</option>
      </select>
	  
		Subject: <INPUT type=text name="subject">
    <textarea rows="4" cols="50" name="textArea" style="background-color: black"></textarea> 
	
       </td>
    </tr>
    <tr><td>
	Show as news: <INPUT type=checkbox name="news" value="1">
	</td></tr>
					
					<tr>
        <td colspan="2">
  <center>  <button type="submit" name="Send" onclick="check();" class="button" style="height:25px;">Send Messages</button>   </center>  
					
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
