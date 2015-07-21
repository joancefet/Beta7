 <div id="res_nav">
 {if $cosmonaute_day == 1}
 <div id="top_cosmonautics">
                    		<div class="top_gift_left"></div>
                        	<div class="top_gift_mid"></div>
                        	<div class="top_gift_right"></div>
                        </div>
						
						
						{elseif $new_year == 1}
                	                    	<div id="top_new_year">
                    		<div class="top_gift_left"></div>
                        	<div class="top_gift_mid"></div>
                        	<div class="top_gift_right"></div>
                        </div>
						{else}
						{/if}
						
                	      {foreach $resourceTable as $resourceID => $resouceData}
									{if !isset($resouceData.current)}
									{$resouceData.current = $resouceData.max + $resouceData.used}   

									<div id="res_block_{$resouceData.name}" class="bloc_res">
                		<div class="ico_res tooltip"></div>   
                                        
                        <div class="stock_res">
						
{if $resouceData.used1 > $resouceData.max}
						<div class="stock_percentage stock_percentage_left" style="width:{$resouceData.percenta}%;"></div>
                        <div class="stock_percentage stock_percentage_right" style="width:0;display:none;";"></div>
						{else}
						<div class="stock_percentage stock_percentage_left" style="width:0;display:none;";"></div>
                        <div class="stock_percentage stock_percentage_right" style="width:{$resouceData.percent}%;"></div>
						{/if}
							
							
							

							<div class="stock_text tooltip" data-tooltip-content="{$resouceData.current|number}"><span id="current_{$resouceData.name}" name="{$resouceData.current|number}" data-real="{$resouceData.current}">{$resouceData.current|number}&nbsp;/&nbsp;{$resouceData.max|number}</span> </div>
                        </div>
                    </div>					
									
{else}								
  									
	
                	<div id="res_block_{$resouceData.name}" class="bloc_res">
                		<div class="ico_res"></div>   
									{if !isset($resouceData.current) || !isset($resouceData.max)}
									
									<div class="stock_res">
									<div class="stock_text"><span id="current_{$resouceData.name}" name="{$resouceData.current|number}" data-real="{$resouceData.current}">{pretty_number($resouceData.current)}</span>
									</div>
									 </div>
									{else}
									
									{if $resouceData.name != "darkmatter"}
                        <a href="game.php?page=trader&amp;mode=trade&amp;resource={$resourceID}" title="Trader" class="exchange_res"></a>    {/if}                
                        <div class="stock_res">
                        	
							
							<div class="stock_percentage" style="width:{$resouceData.percent}%;"></div>
                                
							
							<div class="stock_text tooltip" {if $resouceData.name != "darkmatter"}class="bloc_res tooltip" data-tooltip-content="<span class='p_res'>{$resouceData.name}</span><br /><br />{$LNG.PPS}: {$resouceData.information}<br />{$LNG.PPD}: {$resouceData.informationd}<br />{$LNG.PPW}: {$resouceData.informationz} <div style='border-bottom:1px dashed #666; margin:7px 0 4px 0;'></div> <span style='color:#999'>{$resouceData.current|number}&nbsp;/&nbsp;{$resouceData.max|number}</span>"{/if}><span id="current_{$resouceData.name}" name="{$resouceData.current|number}" data-real="{$resouceData.current}">{$resouceData.current}</span>{if $resouceData.name != "darkmatter"} (<span class="pricent">{$resouceData.percent}</span>%){/if}     </div>
                        </div>
						 {/if}
                    </div>
                    {/if}
									{/foreach}
                   
                    
				   
				   
					
                </div><!--/res_nav-->                

		{if !$vmode}
		<script type="text/javascript">
		var viewShortlyNumber	= {$shortlyNumber|json}
		var vacation			= {$vmode};
		{foreach $resourceTable as $resourceID => $resouceData}
		{if isset($resouceData.production)}
		resourceTicker({
			available: {$resouceData.current|json},
			limit: [0, {$resouceData.max|json}],
			production: {$resouceData.production|json},
			valueElem: "current_{$resouceData.name}"
		}, true);
		{/if}
		{/foreach}
		</script>
		{/if}
	</div>
	{if $closed}
	<div class="infobox">{$LNG.ov_closed}</div>
	{elseif $delete}
	<div class="infobox">{$delete}</div>
	{elseif $vacation}
	<div class="infobox">{$LNG.tn_vacation_mode} {$vacation}</div>
	{/if}
	</div><!--/header-->