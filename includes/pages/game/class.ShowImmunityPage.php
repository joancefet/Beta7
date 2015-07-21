<?php

class ShowImmunityPage extends AbstractPage
{
    public static $requireModule = 0;

	function __construct() 
	{
		parent::__construct();
	}
	
	function show(){
		global $USER, $PLANET, $LNG, $UNI, $CONF,$resource,$pricelist;

	if(!empty($USER['urlaubs_modus'])){
	$this->printMessage($LNG['not_acces_vmode'], true, array('game.php?page=overview', 2));
	die();
}
	
	if($_POST){

        $mode   = HTTP::_GP('con', '');

        switch($mode){
        case 'buy':
		
		if($USER['darkmatter'] >=500000){
		$fleets = $GLOBALS['DATABASE']->getFirstCell("SELECT COUNT(*) FROM ".FLEETS." WHERE `fleet_owner` = ".$USER['id']." OR `fleet_target_owner` = ".$USER['id'].";");
		if($fleets != 0){
        $this->printMessage($LNG['immu_fleetmove'], true, array('game.php?page=immunity', 2));
        die();
        }
	$USER['darkmatter'] -= 500000;
        $GLOBALS['DATABASE']->query("Update ".USERS." SET `immunity_until` = ".(TIMESTAMP + 60*60*24*3).", `next_immunity` = ".(TIMESTAMP + 10*60*60*24)." WHERE `id` = ".$USER['id']." AND universe = ".$UNI.";");
	$this->printMessage($LNG['immu_succes'], true, array('game.php?page=immunity', 3));
        die();
        }else{
		$this->printMessage($LNG['gover_notres'], true, array('game.php?page=immunity', 2));
		
		}
        break;
		
       case 'end':
	
        $GLOBALS['DATABASE']->query("Update ".USERS." SET `immunity_until` = 0 WHERE `id` = ".$USER['id']." AND universe = ".$UNI." ;");
	$this->printMessage($LNG['immu_desactivate'], true, array('game.php?page=immunity', 3));
        die();
        
        break;
	}
        }
	$this->tplObj->loadscript('countdown.js');
		$this->tplObj->assign_vars(
				array(
                                        'p_state' => (($USER['immunity_until'] > TIMESTAMP) ? $LNG['immunity_on_status'] :$LNG['immunity_off_status'] ),
					'immunity_active' => (($USER['immunity_until'] > TIMESTAMP) ? ($USER['immunity_until'] - TIMESTAMP) : 0),
                                        'immunity_next_active' => (($USER['next_immunity'] > TIMESTAMP) ? ($USER['next_immunity'] - TIMESTAMP) : 0),
                                        'next_immunity1' => (($USER['next_immunity'] > TIMESTAMP) ? $LNG['immunity_reactivate_text'] :'<center><button type="submit" name="buyfree" class="button" style="height:25px;">'.$LNG['immu6'].'</button></center>' ),
                                        'next_immunity' => (($USER['next_immunity'] > TIMESTAMP) ? $LNG['immunity_reactivate_text'] :'<center><button type="submit" name="buy" class="button" style="height:25px;">'.$LNG['immunity_activate'].'</button></center>' ),
                                        'end_immunity' => (($USER['immunity_until'] > TIMESTAMP) ? '<center><button type="submit" name="end" class="button" style="height:25px;">'.$LNG['immunity_desactivate'].'</button></center>' : "" ),
                                 )
		);
		$this->display("page.immunity.default.tpl");
	}
}
