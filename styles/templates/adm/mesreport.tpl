{include file="overall_header.tpl"}
{include file="head_nav.tpl"}

<div class="grid_10">
            <div class="box round first grid">
                <h2>
                    Reported Messages</h2>
                <div class="block">
                    
                    
                    
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							
		<td><b>Report ID</b></td>
		<td><b>Type</b></td>
		<td><b>From</b></td>
		<td><b>To</b></td>
		<td><b>Date</b></td>
		<td><b>Reviewed</b></td>
		
						</tr>
					</thead>
					
					
					<thead>
					
	
	
	{foreach $multiGroups as $IP => $Users}
<tr class="odd gradeX">
		{foreach $Users as $ID => $User}
		<td class="left">#{$User.compID}</td>
		<{if $User.type == 1}<td class="left">Insult, mat, threats </td>{else}<td class="left">Advertising Spam </td>{/if}
		<td class="left">{$User.from}</td>
		<td class="left">{$User.reportBy}</td>
		<td class="left">{$User.time}</td>
		{if $User.finished == 1}<td class="left" style="color:red;">No</td>{else}<td class="left" style="color:green;">Yes</td>{/if}

						</tr>{if !$User@last}<tr>{/if}
							{/foreach}
	{/foreach}
				
						
		
					</thead> 
				</table>
                    
                    
                    
                </div>
            </div>
        </div>
        <div class="clear">
        </div>

	

{include file="overall_footer.tpl"}