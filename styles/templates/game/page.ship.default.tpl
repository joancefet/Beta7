{block name="title" prepend}Nave{/block}
{block name="content"}
<div id="page">
	<div id="content">
<div class="ship-container">
	<div class="ship-graphic"><img src="./styles/images/ships/{$ship_image}" border=0></div>
    <div class="ship-user-container">
        <div class="ship-stats-user  ship-divider-top">
            <div class="ship-component-name"> Piloto</div>
            <div class="ship-storage-quantity">{$character_name}</div>
        </div>
        <div class="ship-stats-user">
            <div class="ship-component-name"> Nome da Nave</div>
            <div class="ship-storage-quantity">{$ship_name}</div>
        </div>
        <div class="ship-stats-user">
            <div class="ship-component-name"> Creditos</div>
            <div class="ship-storage-quantity">{$credits}</div>
        </div>
    </div>
    <div class="ship-component-container">
        <div class="ship-component-component ship-divider-top">
        	<div class="ship-group-title">COMPONENTES</div>
        </div>
        <div class="ship-component-component">
            <div class="ship-component-name"> Casco</div>
            <div class="ship-component-bars">
                <div class="ship-progress">
                    <div class="ship-bar ship-{$fsl_hull}" style="width:{$max_hull}%">&nbsp;</div>
                    <div class="ship-component-warning"></div >
                </div>
                <div class="ship-lvl">({$l_level} {$hull})</div>
            </div>
        </div>
        
        <div class="ship-component-component">
            <div class="ship-component-name"> Motores</div>
            <div class="ship-component-bars">
                <div class="ship-progress">
                    <div class="ship-bar ship-{$fsl_engines}" style="width:{$max_engines}%">&nbsp;</div>
                    <div class="ship-component-warning"></div >
                </div>
                <div class="ship-lvl">({$l_level} {$engines})</div>
            </div>
        </div>
        
        <div class="ship-component-component">
            <div class="ship-component-name"> Power</div>
            <div class="ship-component-bars">
                <div class="ship-progress">
                    <div class="ship-bar ship-{$fsl_power}" style="width:{$max_power}%">&nbsp;</div>
                    <div class="ship-component-warning"></div >
                </div>
                <div class="ship-lvl">({$l_level} {$power})</div>
            </div>
        </div>
        
        <div class="ship-component-component">
            <div class="ship-component-name"> Computador</div>
            <div class="ship-component-bars">
                <div class="ship-progress">
                    <div class="ship-bar ship-{$fsl_computer}" style="width:{$max_computer}%">&nbsp;</div>
                    <div class="ship-component-warning"></div >
                </div>
                <div class="ship-lvl">({$l_level} {$computer})</div>
            </div>
        </div>
        
        <div class="ship-component-component">
            <div class="ship-component-name"> Sensores</div>
            <div class="ship-component-bars">
                <div class="ship-progress">
                    <div class="ship-bar ship-{$fsl_sensors}" style="width:{$max_sensors}%">&nbsp;</div>
                    <div class="ship-component-warning"></div >
                </div>
                <div class="ship-lvl">({$l_level} {$sensors})</div>
            </div>
        </div>
        
        <div class="ship-component-component">
            <div class="ship-component-name"> Resistencia</div>
            <div class="ship-component-bars">
                <div class="ship-progress">
                    <div class="ship-bar ship-{$fsl_armor}" style="width:{$max_armor}%">&nbsp;</div>
                    <div class="ship-component-warning"></div >
                </div>
                <div class="ship-lvl">({$l_level} {$armor})</div>
            </div>
        </div>
        
        <div class="ship-component-component">
            <div class="ship-component-name"> Escudos</div>
            <div class="ship-component-bars">
                <div class="ship-progress">
                    <div class="ship-bar ship-{$fsl_shields}" style="width:{$max_shields}%">&nbsp;</div>
                    <div class="ship-component-warning"></div >
                </div>
                <div class="ship-lvl">({$l_level} {$shields})</div>
            </div>
        </div>
        
        <div class="ship-component-component">
            <div class="ship-component-name"> Laser</div>
            <div class="ship-component-bars">
                <div class="ship-progress">
                    <div class="ship-bar ship-{$fsl_beams}" style="width:{$max_beams}%">&nbsp;</div>
                    <div class="ship-component-warning"></div >
                </div>
                <div class="ship-lvl">({$l_level} {$beams})</div>
            </div>
        </div>
        
        <div class="ship-component-component">
            <div class="ship-component-name"> Lan&ccedil;adores de Torpedos</div>
            <div class="ship-component-bars">
                <div class="ship-progress">
                    <div class="ship-bar ship-{$fsl_torp_launchers}" style="width:{$max_torp_launchers}%">&nbsp;</div>
                    <div class="ship-component-warning"></div >
                </div>
                <div class="ship-lvl">({$l_level} {$torp_launchers})</div>
            </div>
        </div>
        
        <div class="ship-component-component">
            <div class="ship-component-name"> Manto</div>
            <div class="ship-component-bars">
                <div class="ship-progress">
                    <div class="ship-bar ship-{$fsl_cloak}" style="width:{$max_cloak}%">&nbsp;</div>
                    <div class="ship-component-warning"></div >
                </div>
                <div class="ship-lvl">({$l_level} {$cloak})</div>
            </div>
        </div>

        <div class="ship-stats-component ship-divider-top">
            <div class="ship-component-name"> Nave de fuga</div>
            <div class="ship-storage-quantity">{$escape_pod_warning} {$escape_pod}</div>
        </div>
        <div class="ship-stats-component">
            <div class="ship-component-name"> Analisador de Saltos</div>
            <div class="ship-storage-quantity">{$lssd}</div>
        </div>
        <div class="ship-stats-component">
            <div class="ship-component-name"> Coletor de Energia</div>
            <div class="ship-storage-quantity">{$fuel_scoop}</div>
        </div>

        <div class="ship-component-component ship-divider-top">
            <div class="ship-component-name"> Level Medio da Nave</div>
            <div class="ship-component-bars">
                <div class="ship-progress">
                    <div class="ship-bar ship-{$fsl_shipavg}" style="width:{$max_shipavg}%">&nbsp;</div>
                    <div class="ship-component-warning"></div >
                </div>
                <div class="ship-lvl">({$l_level} {$shipavg})</div>
            </div>
        </div>
		
        <div class="ship-component-component">
            <div class="ship-component-name"> For&ccedil;a da Nave</div>
            <div class="ship-component-bars">
                <div class="ship-progress">
                    <div class="ship-bar ship-{$fsl_componenet_strength}" style="width:{$strength_total}%">&nbsp;</div>
                    <div class="ship-component-warning"></div >
                </div>
                <div class="ship-lvl ship-divider-bottom"></div>
            </div>
        </div>
        
        
    </div>
    
    
    <div class="ship-stats-container">
        <div class="ship-stats-component ship-divider-top">
        	<div class="ship-group-title">ARMAZENAMENTO</div>
        </div>
        <div class="ship-stats-component">
            <div class="ship-component-name"> Energia</div>
            <div class="ship-component-bars">
                <div class="ship-progress">
                    <div class="ship-bar ship-0" style="width:{$per_ship_energy}%">&nbsp;</div>
                    <div class="ship-component-warning"></div >
                </div>
                <div class="ship-lvl ship-divider-bottom">({$ship_energy} / {$energy_max})</div>
            </div>
        </div>
        <div class="ship-stats-component">
            <div class="ship-component-name"> Armazenamento</div>
            <div class="ship-component-bars">
                <div class="ship-progress">
                    <div class="ship-bar ship-0" style="width:{$per_holds_used}%">&nbsp;</div>
                    <div class="ship-component-warning"></div >
                </div>
                <div class="ship-lvl ship-divider-bottom">({$holds_used} / {$holds_max})</div>
            </div>
        </div>
        <div class="ship-stats-component">
            <div class="ship-component-name"> Organicos</div>
            <div class="ship-storage-quantity">{$ship_organics}</div>
        </div>
        <div class="ship-stats-component">
            <div class="ship-component-name"> Minerio</div>
            <div class="ship-storage-quantity">{$ship_ore}</div>
        </div>
        <div class="ship-stats-component">
            <div class="ship-component-name"> Mercadorias</div>
            <div class="ship-storage-quantity">{$ship_goods}</div>
        </div>
        <div class="ship-stats-component">
            <div class="ship-component-name"> Colonos</div>
            <div class="ship-storage-quantity">{$ship_colonists}</div>
        </div>
        
        
        <div class="ship-stats-component ship-divider-top">
        	<div class="ship-group-title ">ARMAS</div>
        </div>
        <div class="ship-stats-component">
            <div class="ship-component-name"> Pontos de Resistencia</div>
            <div class="ship-component-bars">
                <div class="ship-progress">
                    <div class="ship-bar ship-0" style="width:{$per_armor_pts}%">&nbsp;</div>
                    <div class="ship-component-warning"></div >
                </div>
                <div class="ship-lvl ship-divider-bottom">({$armor_pts} / {$armor_pts_max})</div>
            </div>
        </div>
        <div class="ship-stats-component">
            <div class="ship-component-name"> Ca&ccedil;as</div>
            <div class="ship-component-bars">
                <div class="ship-progress">
                    <div class="ship-bar ship-0" style="width:{$per_ship_fighters}%">&nbsp;</div>
                    <div class="ship-component-warning"></div >
                </div>
                <div class="ship-lvl ship-divider-bottom">({$ship_fighters} / {$ship_fighters_max})</div>
            </div>
        </div>
        <div class="ship-stats-component">
            <div class="ship-component-name"> Torpedos</div>
            <div class="ship-component-bars">
                <div class="ship-progress">
                    <div class="ship-bar ship-0" style="width:{$per_torps}%">&nbsp;</div>
                    <div class="ship-component-warning"></div >
                </div>
                <div class="ship-lvl ship-divider-bottom">({$torps} / {$torps_max})</div>
            </div>
        </div>
        <div class="ship-stats-component ship-divider-top">
        	<div class="ship-group-title ">DISPOSITIVOS</div>
        </div>
        <div class="ship-stats-component">
            <div class="ship-component-name"> Estandarte Espacial</div>
            <div class="ship-storage-quantity">{$dev_beacon}</div>
        </div>
        <div class="ship-stats-component">
            <div class="ship-component-name"> Editor de Saltos</div>
            <div class="ship-storage-quantity">{$dev_warpedit}</div>
        </div>
        <div class="ship-stats-component">
            <div class="ship-component-name"> Torpedos Genesis</div>
            <div class="ship-storage-quantity">{$dev_genesis}</div>
        </div>
        <div class="ship-stats-component">
            <div class="ship-component-name"> Dispositivo de Salto de Emergencia</div>
            <div class="ship-storage-quantity">{$emergancy_warp_warning} {$dev_emerwarp}</div>
        </div>
        <div class="ship-stats-component">
            <div class="ship-component-name"> Defletores de Minas</div>
            <div class="ship-storage-quantity">{$mine_deflector_warning} {$dev_minedeflector}</div>
        </div>
        
        
        
        
    </div>
</div>
</div>
</div>
</div>
{/block}