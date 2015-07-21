{include file="overall_header.tpl"}

{include file="overall_header.tpl"}
{include file="head_nav.tpl"}
<form action="" method="post">
<div class="grid_10">
            <div class="box round first grid">
                <h2>
                    Voucher Code</h2>
                <div class="block">
                    
                    
                    
                    <table class="data display datatable" id="example">
					<thead>
				
	<tr>
		<td>
			Id
		</td>
		<td>
			Voucher Code
		</td>
		<td>
			Metal
		</td>
		<td>
			Crystal
		</td>
		<td>
			Deuterium
		</td>
		<td>
			Darkmatter
		</td>
		<td>
			Antimatter
		</td>
      
		<td>
			Reward Count
		</td>
		<td>
			Reward User Limit
		</td>
		<td>
			Action
		</td>
	</tr>
	{foreach from=$AllVouchers item=i key=k}
		<tr>
			<td>
			{$i.rewardId}
			</td>
			<td>
			{$i.rewardCode}
			</td>
			<td>
			{$i.rewardMetal}
			</td>
			<td>
			{$i.rewardCrystal}
			</td>
			<td>
			{$i.rewardDeuterium}
			</td>
			<td>
			{$i.rewardDarkmatter}
			</td>
			<td>
			{$i.rewardAntimatter}
			</td>
            <td>
			{$i.rewardCount}
			</td>
            <td>
			{$i.rewardUserLimit}
			</td>
                 
			<td>	
			<a href="?page=voucher&mode=delete&i={$i.rewardId}">
				<img src="http://cdn1.iconfinder.com/data/icons/aspneticons_v1.0_Nov2006/delete_16x16.gif" />
			</a>
			</td>
		</tr>
	{foreachelse}
	<tr>
		<td colspan="15">
			<center>There are no vouchers</center>
		</td>
	</tr>
	{/foreach}
	</table>
	<hr>
	
	 <table class="data display datatable" id="example">
	

	<tr class="odd gradeX">
	<td><center>Voucher Code</center></td>
	<td><input type="text" name="rewardCode"></td>
</tr>
<tr class="odd gradeX">
	<td><center>Voucher Metal</center></td>
	<td><input type="text" name="rewardMetal"></td>
</tr>
<tr class="odd gradeX">
	<td><center>Voucher Crystal</center></td>
	<td><input type="text" name="rewardCrystal"></td>
</tr>
<tr class="odd gradeX">
	<td><center>Voucher Deuterium</center></td>
	<td><input type="text" name="rewardDeuterium"></td>
</tr>
<tr class="odd gradeX">
	<td><center>Voucher Darkmatter</center></td>
	<td><input type="text" name="rewardDarkmatter"></td>
</tr>
<tr class="odd gradeX">
	<td><center>Voucher Antimatter</center></td>
	<td><input type="text" name="rewardAntimatter"></td>
</tr>
<tr class="odd gradeX">
	<td><center>Voucher Count</center></td>
	<td><select name="rewardCount">
				<option value="-1">Infinite</option>
				<option value="1">1 Try</option>
			</select></td>
</tr>
<tr class="odd gradeX">
	<td><center>Voucher User Limit</center></td>
	<td><select name="rewardUserLimit">
				<option value="0">User can use it infinite</option>
				<option value="1">User can use a code once</option>
			</select></td>
</tr>
<tr class="odd gradeX">
	<td><center>Voucher Universe</center></td>
	<td><select name="universe">
				<option value="1">Dark-Space</option>
			</select></td>
</tr>

<tr>
	<td><center><br><input value="Add Code" type="submit"></center></td>
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