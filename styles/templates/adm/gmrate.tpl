{include file="overall_header.tpl"}
{include file="head_nav.tpl"}

<div class="grid_10">
            <div class="box round first grid">
                <h2>
                    Operators Feedback</h2>
                <div class="block">
                    
                    
                    
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							
		<td><b>Feedback ID</b></td>
		<td><b>Support ID</b></td>
		<td><b>Player</b></td>
		<td><b>Score</b></td>
		<td><b>Reviewed</b></td>
		
						</tr>
					</thead>
					
					
					<thead>
					
	
	
	{foreach $multiGroups as $IP => $Users}
<tr class="odd gradeX">
		{foreach $Users as $ID => $User}
		<td class="left">#{$User.inqueryID}</td>
		<td class="left">#{$User.supportID} {$User.subject}</td>
		<td class="left">{$User.username}</td>
		<td class="left">{$User.question_5}/3</td>
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