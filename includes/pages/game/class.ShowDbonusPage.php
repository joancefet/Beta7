<?php

class ShowDbonusPage extends AbstractPage {

	
	function __construct() {
		parent::__construct();
	}

	function show() {

	
	
		
		global $CONF, $LNG, $PLANET, $USER, $resource, $UNI;
		
		
		
		if($USER['sdays_time'] < TIMESTAMP - 48 * 60 * 60 ){
		$GLOBALS['DATABASE']->query("Update ".USERS." SET `sdays_b` = 1, `sdays_time` = ".(TIMESTAMP - 60 * 60 *24)." WHERE `id` = ".$USER['id']." ;");
		$this->printMessage("You didnt Claim you're bonus for yesterday... You restart from Day 1", true, array('game.php?page=dbonus', 2));
		}
		if($USER['sdays_time']  > TIMESTAMP - 60 * 60 * 24){
        $this->printMessage("Not Allowed!", true, array('game.php?page=overview', 2));
        die();
        }
		else{
		
		if($USER['sdays_b'] == 1 )
		$xxx = 1;
		if($USER['sdays_b'] == 2 )
		$xxx = 2;
		if($USER['sdays_b'] == 3 )
		$xxx = 3;
		if($USER['sdays_b'] == 4 )
		$xxx = 4;
		if($USER['sdays_b'] == 5 )
		$xxx = 5;
		if($USER['sdays_b'] == 6 )
		$xxx = 6;
		if($USER['sdays_b'] == 7 )
		$xxx = 7;
		
		
		if($_POST){
		$mode   = HTTP::_GP('cmd', '');
		
		
		
		if($mode != $USER['sdays_b'] && $USER['sdays_b'] != 7 ){
		$this->printMessage("Dont try stupid things, admin got warned", true, array('game.php?page=dbonus', 2));
		die();
		}
		
		
        switch($mode){
		
		
        case '1':
		$GLOBALS['DATABASE']->query("Update ".USERS." SET `academy_p` = `academy_p` + 5, `sdays_time` = ".TIMESTAMP." WHERE `id` = ".$USER['id']." ;");
		if($USER['sdays_b'] == 7){
		$GLOBALS['DATABASE']->query("Update ".USERS." SET `sdays_b` = 1 WHERE `id` = ".$USER['id']." ;");
		}else{
		$GLOBALS['DATABASE']->query("Update ".USERS." SET `sdays_b` = 2 WHERE `id` = ".$USER['id']." ;");
		}
		$this->printMessage("Bought Package Day #1", true, array('game.php?page=overview', 2));
        die();
        break;
		
		
		case '2':
		$reward = $USER['experience_peace_max'] / 100 * 5;
        $GLOBALS['DATABASE']->query("UPDATE ".USERS." SET experience_peace = experience_peace + ".$reward.", `sdays_time` = ".TIMESTAMP." WHERE id = ".$USER['id'].";");   
  		if($USER['sdays_b'] == 7){
		$GLOBALS['DATABASE']->query("Update ".USERS." SET `sdays_b` = 1 WHERE `id` = ".$USER['id']." ;");
		}else{
		$GLOBALS['DATABASE']->query("Update ".USERS." SET `sdays_b` = 3 WHERE `id` = ".$USER['id']." ;");
		}
		$this->printMessage("Bought Package Day #2", true, array('game.php?page=overview', 2));
        die();
        break;
	

		case '3':
		$GLOBALS['DATABASE']->query("Update ".USERS." SET `daily_produ` = ".(TIMESTAMP + 24*60*60).", `sdays_time` = ".TIMESTAMP." WHERE `id` = ".$USER['id']." ;");
		if($USER['sdays_b'] == 7){
		$GLOBALS['DATABASE']->query("Update ".USERS." SET `sdays_b` = 1 WHERE `id` = ".$USER['id']." ;");
		}else{
		$GLOBALS['DATABASE']->query("Update ".USERS." SET `sdays_b` = 4 WHERE `id` = ".$USER['id']." ;");
		}
		$this->printMessage("Bought Package Day #3", true, array('game.php?page=overview', 2));
        die();
        break;
		
		
		case '4':
		$USER['darkmatter'] += 250000; 
		$GLOBALS['DATABASE']->query("Update ".USERS." SET `sdays_time` = ".TIMESTAMP." WHERE `id` = ".$USER['id']." ;");
		if($USER['sdays_b'] == 7){
		$GLOBALS['DATABASE']->query("Update ".USERS." SET `sdays_b` = 1 WHERE `id` = ".$USER['id']." ;");
		}else{
		$GLOBALS['DATABASE']->query("Update ".USERS." SET `sdays_b` = 5 WHERE `id` = ".$USER['id']." ;");
		}
		$this->printMessage("Bought Package Day #4", true, array('game.php?page=overview', 2));
        die();
        break;
		
		
		case '5':
		$GLOBALS['DATABASE']->query("Update ".USERS." SET `sdays_time` = ".TIMESTAMP." WHERE `id` = ".$USER['id']." ;");
		if($USER['sdays_b'] == 7){
		$GLOBALS['DATABASE']->query("Update ".USERS." SET `sdays_b` = 1 WHERE `id` = ".$USER['id']." ;");
		}else{
		$GLOBALS['DATABASE']->query("Update ".USERS." SET `sdays_b` = 6 WHERE `id` = ".$USER['id']." ;");
		}
		$this->printMessage("Bought Package Day #5", true, array('game.php?page=overview', 2));
        die();
        break;
		
		
		case '6':
		
		$GLOBALS['DATABASE']->query("Update ".USERS." SET `extra_palnet` = `extra_palnet` + '1', `sdays_time` = ".TIMESTAMP." WHERE `id` = ".$USER['id']." ;");
		if($USER['sdays_b'] == 7){
		$GLOBALS['DATABASE']->query("Update ".USERS." SET `sdays_b` = 1 WHERE `id` = ".$USER['id']." ;");
		}else{
		$GLOBALS['DATABASE']->query("Update ".USERS." SET `sdays_b` = 7 WHERE `id` = ".$USER['id']." ;");
		}
		$this->printMessage("Bought Package Day #6", true, array('game.php?page=overview', 2));
        die();
        break;

		}
		}
		}
		$BID = $USER['sdays_b'];
		$randomd = mt_rand(1,6);
			$this->tplObj->assign_vars(array(
			'randomd' => $randomd,
			'mode1' => $BID,
			'xxx' => $xxx,
				));
			$this->display('page.planetjump.default.tpl');
		}
	}

?>