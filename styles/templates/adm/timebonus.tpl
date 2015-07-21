{include file="overall_header.tpl"}
{include file="head_nav.tpl"}
<form action="" method="post">
<div class="grid_10">
            <div class="box round first grid">
                <h2>
                    Payment Bonus</h2>
                <div class="block">
                    
                    
                    
                    <table class="data display datatable" id="example">
					<thead>
						
						<tr class="odd gradeX">
	<td><center>Amount of antimatter you want to give as bonus</center></td>
	<td><input name="timeReward" size="3" value="{$timeReward}" type="text"> Antimatter</td>
</tr>
	<tr class="odd gradeX">
	<td><center>Start time.</center></td>
	<td><input name="timeRewardFrom" size="3" value="{$timeRewardFrom}" type="text"> </td> 
</tr>
	<tr class="odd gradeX">
	<td><center>End time</center></td>
	<td><input name="timeRewardTo" size="3" value="{$timeRewardTo}" type="text"> </td> 
</tr>

<tr>
	<td><center><br><input value="Save" type="submit" ></center></td>
</tr>
		
						
					</thead>
					

				</table>
                    
                    
                    
                </div>
            </div>
        </div>
        <div class="clear">
        </div>

	</form>


{include file="overall_footer.tpl"}