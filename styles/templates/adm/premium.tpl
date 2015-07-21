{include file="overall_header.tpl"}
{include file="head_nav.tpl"}

<div class="grid_10">
            <div class="box round first grid">
                <h2>
                    Premium Users</h2>
                <div class="block">
                    
                    
                    
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							
		<th>{$LNG.se_id_owner}</th>
		<th>Resource Extraction</th>
		<th>Storing Reward</th>
		<th>Construction/Research Speed</th>
		<th>Construction/Research Stage</th>
		<th>Bonus Button</th>
		<th>Expedition Reward</th>
		<th>Experience Reward</th>
		<th>Bank Storage</th>
		<th>Premium Until</th>
						</tr>
					</thead>
					
					
					<thead>
					
	
	{foreach $multiGroups as $IP => $Users}
<tr class="odd gradeX">
		{foreach $Users as $ID => $User}
		<th class="left">{$User.username}</th>
		<th class="left">+{$User.premium_reward_extraction}%</th>
		<th class="left">+{$User.premium_reward_storing}</th>
		<th class="left">+{$User.premium_reward_speed}%</th>
		<th class="left">+{$User.premium_reward_stage}%</th>
		<th class="center">+{$User.premium_reward_bonus}%</th>
		<th class="center">{$User.premium_reward_expedition}</th>
		<th class="center">{$User.premium_reward_experience}</th>
		<th class="center">{$User.premium_reward_bank}</th>
		<th class="center">{$User.premium_reward_days}</th>
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