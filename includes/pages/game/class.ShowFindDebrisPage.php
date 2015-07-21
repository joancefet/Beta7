<?php

class ShowFindDebrisPage extends AbstractPage
{
    
	function __construct() 
	{
		parent::__construct();
	}
	
	function show(){
		global $USER, $PLANET, $LNG, $UNI, $CONF,$resource,$pricelist;
		
		$mode = HTTP::_GP('y', '');
		$table = "";
		$range = $PLANET['hangar'] * 3 - 2;
		if($range < 0){
		$range = 0;
		}
	if($mode == '1'){
	$cautare = $GLOBALS['DATABASE']->query("SELECT *from ".PLANETS." where (`der_metal` >0 OR `der_crystal` >0) AND (`system` > '".($PLANET['system'] - $range)."' AND `system` < '".($PLANET['system'] + $range)."') AND `galaxy` = '".$PLANET['galaxy']."' and `planet_type` = '1' AND universe = ".$UNI." ;");
			$table = "<tr><th>".$LNG['debris_action_1']."</th><th>".$LNG['debris_action_2']."</th><th>".$LNG['debris_action_3']."</th><th>".$LNG['debris_action_4']."</th><th>".$LNG['debris_action_5']."</th><th>".$LNG['debris_action_6']."
			</th></tr>";
			

//print_r($cautare);
			if($GLOBALS['DATABASE']->numRows($cautare) > 0)
		while($GalaxyRowPlanet = $GLOBALS['DATABASE']->fetch_array($cautare)){
		
		$GRecNeeded = min(ceil(($GalaxyRowPlanet['der_metal'] + $GalaxyRowPlanet['der_crystal']) / $pricelist[219]['capacity']), $PLANET[$resource[219]]);
		
			$table .= "<tr><td>".$GalaxyRowPlanet['galaxy']."</td><td>".$GalaxyRowPlanet['system']."</td><td>".$GalaxyRowPlanet['planet']."</td><td>".pretty_number($GalaxyRowPlanet['der_metal'])."</td><td>".pretty_number($GalaxyRowPlanet['der_crystal'])."</td><td><a href='javascript:doit(8,".$GalaxyRowPlanet['id'].");'>".$LNG['debris_action_6']."</a></td></tr>";
		}
			else
				$table .= "<tr><td colspan='6'>".$LNG['debris_action_7']."</td></tr>";
		
	}
		$this->tplObj->assign_vars(
			array(
				'range' => $range,
				'debris' => $table,
				'user_maxfleetsettings' => $USER['settings_fleetactions'],
			)
		);
		$this->display("page.finddebris.default.tpl");
	}
}
?>