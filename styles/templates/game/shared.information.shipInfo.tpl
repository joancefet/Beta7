<table style="width:100%;">
	<tbody>
		<tr>
			<th colspan="2" style="width:50%">structural armor</th>
        </tr>
        <tr>
			<td style="width:50%">{$LNG.in_struct_pt}</td>
			<td style="width:50%">{$FleetInfo.structure|number}</td>
                        </td>
						
		</tr>
		  <tr>
			<td style="width:50%">{$LNG.in_attack_pt}</td>
			<td style="width:50%">{$FleetInfo.attack|number}</td>
                        </td>
						
		</tr>
		  <tr>
			<td style="width:50%">{$LNG.in_shield_pt}</td>
			<td style="width:50%">{$FleetInfo.shield|number}</td>
                        </td>
						
		</tr>
	       
   	           
			<tr>
			<th style="width:50%">engine</th>
            <th style="width:50%">initial velocity</th>
			
		</tr>
		{if !empty($FleetInfo.speed1)}
		<tr>
			<td style="width:50%">
            jet engine
                        </td>
			<td style="width:50%">
            	{$FleetInfo.speed1|number}
                		</td></tr>
						{/if}
						
						{if !empty($FleetInfo.speed1) != !empty($FleetInfo.speed2)}
                <tr>
			<td style="width:50%">
                <span style="color:yellow">kick motor</span>
                            </td>
			<td style="width:50%">
                <span style="color:yellow">{if $FleetInfo.speed1 != $FleetInfo.speed2} <span style="color:yellow">{$FleetInfo.speed2|number}</span>{/if}</span>
                            </td>
		</tr>
		{/if}
		
		
		{if !empty($FleetInfo.consumption1)}
        				<tr>
			<td style="width:50%">Fuel Consumption (Deuterium)</td>
			<td style="width:50%">{$FleetInfo.consumption1|number}{if $FleetInfo.consumption1 != $FleetInfo.consumption2} <span style="color:yellow">({$FleetInfo.consumption2|number})</span>{/if}</td>
		</tr>
		{/if}
		   	    		<tr>
        	<th colspan="2"></th>
        </tr>
		{if !empty($FleetInfo.capacity)}
        <tr>
			<td style="width:50%">capacity</td>
			<td style="width:50%">{$FleetInfo.capacity|number}</td>
		</tr>
		{/if}
	    
{if !empty($FleetInfo)}
					{if !empty($FleetInfo.rapidfire.to)}

		<tr>
    	<th>Gets shots per round</th><th>number</th>
    </tr>     

					{foreach $FleetInfo.rapidfire.to as $rapidfireID => $shoots}	
	    <tr>
        <td style="height:auto !important;">
        	{$LNG.tech.$rapidfireID}
        </td>
        <td style="height:auto !important;">
        	<span style="color:#00ff00">{$shoots|number}</span>
        </td>
	</tr>
	{/foreach}{/if}
	


	{if !empty($FleetInfo.rapidfire.from)}
			    <tr>
    	<th>Gets shots per round</th><th>number</th>
    </tr>
	
					{foreach $FleetInfo.rapidfire.from as $rapidfireID => $shoots}
		<tr>
        <td style="height:auto !important;">
        	{$LNG.tech.$rapidfireID}
       	</td><td>
        	<span style="color:#ff0000">{$shoots|number}</span>
        </td>
    
    	</tr>
{/foreach}{/if}{/if}
    
    	</tr></tbody>		
			