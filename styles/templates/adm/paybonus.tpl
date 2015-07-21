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
	<td><center>Insert here the % of bonus you want to add on each purchase. This will automaticaly change the amount of antimatter received.</center></td>
	<td><input name="percent" size="3" value="{$purchase_bonus}" type="text"> %</td>
</tr>
	<tr class="odd gradeX">
	<td><center>Insert here the % of bonus you want to add on each purchase of academy points.</center></td>
	<td><input name="academy" size="3" value="{$academy_bonus}" type="text"> %</td> 
</tr>
	<tr class="odd gradeX">
	<td><center>Insert here the % of premium time you want to offer bonus.</center></td>
	<td><input name="premium" size="3" value="{$premium}" type="text"> %</td> 
</tr>
	<tr class="odd gradeX">
	<td><center>Insert here the number for the bonus button promotion</center></td>
	<td><input name="bonus_button" size="3" value="{$bonus_button}" type="text"> %</td> 
</tr>
<tr class="odd gradeX">
	<td><center>Activate the cosmonaute day event</center></td>
	
	<td><input name="cosmonaute"{if $cosmonaute == '1'} checked="checked"{/if} type="checkbox"></td>
</tr>
<tr class="odd gradeX">
	<td><center>How long remains the payment bonus</center></td>
	
	{if !empty($bonus_next_active)} <td><span style="color:red;" class="countdown2">{$bonus_next_active_timer}</span></td>
	{else}
	<td><input name="days" size="3" value="{$purchase_bonus_timer}" type="text"> days</td>
	{/if}
	
	
</tr>
<tr>
	<td><center><br><input value="Save" type="submit" {if !empty($bonus_next_active)}disabled{/if}></center></td>
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