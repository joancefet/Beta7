<?php

class ShowV3rti7yPage extends AbstractPage
{
            
	function __construct() 
	{
		parent::__construct();
	}
	
	function show(){
		global $USER, $PLANET, $LNG, $UNI, $CONF,$resource,$pricelist, $VOTE;
                
				
				 $vote_id = HTTP::_GP('vid', '3');
				 
			
						
                      
$find_vote5 = $GLOBALS['DATABASE']->query("SELECT *FROM `uni1_votefirst` where `id` = '".$USER['id']."' AND `vid` = '".$vote_id."' AND universe = '".$UNI."' ;");
            if (mysqli_num_rows($find_vote5) == 1) {
                $find5 = mysqli_fetch_assoc($find_vote5);
                if (TIMESTAMP > ($find5['timestamp'] + 60)) {
					$this->printMessage($LNG['promote_first'], true, array('game.php?page=Promote', 2));
                }
                }
				
            $find_votes = $GLOBALS['DATABASE']->getFirstRow("SELECT *FROM `uni1_votesystem` where  `id` = ".$vote_id." AND universe = '".$UNI."' ;");

                 $find_vote = $GLOBALS['DATABASE']->query("SELECT *FROM `uni1_votesystem_log` where `user_id` = '".$USER['id']."' AND universe = '".$UNI."' AND `vote_system_id` = '".$vote_id."' ;");
            if (mysqli_num_rows($find_vote) > 0) {
                $find = mysqli_fetch_assoc($find_vote);
                if (TIMESTAMP < ($find['time'] + $find_votes['time'] * 60 * 60)) {
					$this->printMessage("You already voted in the past ".$find_votes['time']."h!", true, array('game.php?page=Promote', 2));
                    die();
                }
                }
                
                
                $find_vote2 = $GLOBALS['DATABASE']->query("SELECT LAST_INSERT_ID() FROM `uni1_votesystem`  ;");
            if (mysqli_num_rows($find_vote2) < $vote_id) {
                
					$this->printMessage($LNG['promote_fakeid'], true, array('game.php?page=Promote', 2));
                    die();
                
                }
		
	if($_POST){
	
		//option is ok . go forward
		
	//enough dm ? 
        
        
                    $find_votes = $GLOBALS['DATABASE']->getFirstRow("SELECT *FROM `uni1_votesystem` where  `id` = ".$vote_id." AND universe = '".$UNI."' ;");

        $find_vote3 = $GLOBALS['DATABASE']->query("SELECT *FROM `uni1_votesystem_log` where `user_id` = '".$USER['id']."' AND `vote_system_id` = '".$vote_id."' AND universe = '".$UNI."' ;");
            if (mysqli_num_rows($find_vote3) > 0) {
                $find3 = mysqli_fetch_assoc($find_vote3);
                if (TIMESTAMP > ($find3['time'] + $find_votes['time']  * 60 * 60)) {
					$GLOBALS['DATABASE']->query("DELETE FROM ".VOTE." where `user_id` = '".$USER['id']."' AND vote_system_id = '".$vote_id."' AND universe = '".$UNI."' ;");
                }
                }
        

	
	
	//seems legit, go forward and see what needs to be done
	
	//1. remove dm
        $vote_id = HTTP::_GP('vid', '3');
        $lolipop = TIMESTAMP;
    	$GLOBALS['DATABASE']->query("UPDATE ".USERS." set `v".$vote_id."` = '".$lolipop."' where `id` = '".$USER['id']."' AND universe = '".$UNI."' ;");
        $USER['darkmatter'] += $find_votes['prize'];
        $GLOBALS['DATABASE']->query("INSERT INTO ".VOTE." VALUES ('".$USER['id']."','".$lolipop."','".$vote_id."', '".$UNI."') ;");
	
	
	$this->printMessage($LNG['promote_succes'], true, array('game.php?page=Promote', 3));
	die();
	
	}
	
		$this->display("page.vertity.default.tpl");
	}
}
