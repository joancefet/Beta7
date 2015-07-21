{block name="title" prepend}{$LNG.lm_battlesim}{/block}{block name="content"}<div id="page">
	<div id="content">
<div id="ally_content" class="conteiner">
    <div class="gray_stripe" style="padding-right:0;">
    	Moon Simulator
        <input type="button" class="right_flank input_blue" onClick="window.location = '?page=battleSimulator';" value="Battle Simulator">
    </div>
        <form id="form" method="post" onSubmit="return CheckArg();">
		<input type="hidden" name="modeSim" value="1" />
        <table id="memberList" class="tablesorter ally_ranks">
			<tr>
            	<td><span style="color:red;">*</span>The diameter of the moon:</td>
	            <td>
                	<input id="diameter" type="text" name="diameter" value="8000" />
                	<a style="float:none;left:initial;top:initial;right:initial;bottom:initial;margin:-20px 0px 0 230px;" class="interrogation manual tooltip" data-tooltip-content="<span style='color:red;font-weight:bold;'>CAUTION!</span> Moon with a diameter of 10,000 km is not destroyed at all!">?</a>
                </td>
            </tr>
			<tr>
          	  <td>Lv. lunar base:</td>
	            <td><input id="mondbasis" type="text" name="mondbasis" value="0" /></td>
            </tr>
			<tr>
	            <td><span style="color:red;">*</span>Qty DS:</td>
	            <td><input id="stars" type="text" name="stars" value="5000" /></td>
            </tr>
			<tr>
	            <td>Modifier protection PA:</td>
	            <td><input id="prem" type="text" name="prem" value="1" /></td>
            </tr>
			<tr>
	            <td colspan="2"><input type="submit" value="Simulate" /></td>
            </tr>
		</table>
	</form>
    <div class="ally_contents">
       Note: Modifier protection PA (Premium Account) reduces the chance of the destruction of the moon according to the "chance of destruction / Modifier protection." By default, each player (with an inactive factor) protection factor is x1.
	</div>
</div>
    </div>
</div>
            <div class="clear"></div>            
        </div><!--/body-->{/block}