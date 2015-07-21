{block name="title" prepend}{$LNG.port_head_title}{/block}
{block name="content"}
<div id="page">
<div id="content">
<div id="ally_content" class="conteiner">
    <div class="gray_stripe">
       {$LNG.port_head_title}  
       <a href="#" onclick="return Dialog.manualinfo(9)" class="interrogation manual">?</a>                 
    </div>
    <table class="tablesorter ally_ranks gray_stripe_th td_border_bottom">
    <tbody>
	{if $uni_value == 1}
               <tr>
            <td>
            <a href="game.php?page=dmbuild"><img style="max-height:none !important;" src="./styles/images/port/build.png"><br>{$LNG.alm_buildings}</a></td>
            <td><a href="game.php?page=dmbuild">{$LNG.port_build_text}</a></td>
        </tr> 
                        <tr>
            <td><a href="game.php?page=dmtech"><img style="max-height:none !important;" src="./styles/images/port/tech.png"><br>{$LNG.alm_reseach}</a></td>
            <td><a href="game.php?page=dmtech">{$LNG.port_research_text}</a></td>
        </tr>   
        
        <tr>
            <td><a href="game.php?page=dmhangar&mode={if $universun == 1}fleet{else}fleetbis{/if}"><img style="max-height:none !important;" src="./styles/images/port/fleet.png"><br>{$LNG.port_title_fleets}</a></td>
            <td><a href="game.php?page=dmhangar&mode={if $universun == 1}fleet{else}fleetbis{/if}">{$LNG.port_fleets_text}</a></td>
        </tr>
        
        <tr>
            <td><a href="game.php?page=dmhangar&mode={if $universun == 1}defense{else}defensebis{/if}"><img style="max-height:none !important;" src="./styles/images/port/deff.png"><br>{$LNG.alm_defense}</a></td>
            <td><a href="game.php?page=dmhangar&mode={if $universun == 1}defense{else}defensebis{/if}">{$LNG.port_defense_text}</a></td>
        </tr>
		 {/if}
        <tr>
            <td><a href="game.php?page=trader"><img style="max-height:none !important;" src="./styles/images/port/trade.png"><br>{$LNG.port_title_merchant}</a></td>
            <td><a href="game.php?page=trader">{$LNG.port_merchant_text}. </a></td>
        </tr>
         <tr>
            <td><a href="game.php?page=planet"><img style="max-height:none !important;" src="./styles/images/port/planet.png"><br>{$LNG.port_title_planeta}</a></td>
            <td>
                <a href="game.php?page=planet">{$LNG.port_planeta_text}</a>      
            </td>
        </tr>
    </tbody>
    </table>
</div>
</div>
</div>
            <div class="clear"></div>            
        </div>
{/block}
