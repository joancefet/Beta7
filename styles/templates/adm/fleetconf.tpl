{include file="overall_header.tpl"}
{include file="head_nav.tpl"}
<form action="" method="post">
<div class="grid_10">
            <div class="box round first grid">
                <h2>
                    Promotional Fleet/Defense Campaign</h2>
                <div class="block">
                    
                    
                    
                    <table class="data display datatable" id="example">
					<thead>
				
<tr class="odd gradeX">
	<td><center>How long remains the promotional campaign</center></td>
	
	{if !empty($bonus_next_active)} <td><span style="color:red;" class="countdown2">{$bonus_next_active_timer}</span></td>
	{else}
	<td><input name="days" size="3" value="{$fleetconf}" type="text"> days</td>
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