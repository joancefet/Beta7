<?php


class ShowPromotePage extends AbstractPage
{
    public static $requireModule = 0;
    
    function __construct()
    {
        parent::__construct();
    }
    
    function show()
    {
       global  $USER, $PLANET, $LNG, $LANG,$CONF,$UNI;
        
		$this->tplObj->loadscript('countdown.js');
        $timp      = $USER['onlinetime'] + 30 * 60;
        if(!empty($_GET['i'])) {
            
            
			$vote_id = (int) $_GET['i'];
            $cautare = $GLOBALS['DATABASE']->query("SELECT *FROM `uni1_votesystem` where `id` = '".$vote_id."' AND universe = '".$UNI."';");
            
            if (mysqli_num_rows($cautare) == 0) {
				$this->printMessage("Don't try anything , wont work!", true, array('game.php?page=reward', 2));
                die();
            }
            $cautare = mysqli_fetch_assoc($cautare);
            $find_votes = $GLOBALS['DATABASE']->getFirstRow("SELECT *FROM `uni1_votesystem` where  `id` = ".$vote_id." AND universe = '".$UNI."';");

			$link = $cautare['link'];
			if($cautare['id'] == 1){
			$link =  $cautare['link']."/".$USER['id']."";	
			}elseif($cautare['id'] == 3){
			$link =  $cautare['link']."&id=".$USER['id']."";	
			}
            $find_vote = $GLOBALS['DATABASE']->query("SELECT *FROM `uni1_votesystem_log` where `user_id` = '".$USER['id']."' AND universe = '".$UNI."' AND `vote_system_id` = '".$vote_id."' AND time > '".TIMESTAMP."' ORDER BY time LIMIT 1 ;");
            if (mysqli_num_rows($find_vote) > 0) {
                $find = mysqli_fetch_assoc($find_vote);
                if (TIMESTAMP > $find['time']) {
					$this->printMessage("You already voted in the past 12h!", true, array('game.php?page=reward', 2));
                    die();
                } else {
					
                    header("Location: " . $link);
                }
            } else {
				// $USER['bonus_point'] += $cautare['prize'];
                
                header("Location: " . $link);
            }
        
               }
        $captcha = 0;
        if (!empty($USER['time_online']) && ($timp < TIMESTAMP)) {
            //au trecut cele 30 minute si a mai dat
            $x       = "<input type='submit' value='Collect'>";
            $y       = "<font color='lime'>00:00</font>";
            $captcha = 1;
        } elseif (empty($USER['time_online'])) {
            $x       = "<input type='submit' value='Collect'>";
            $y       = "<font color='lime'>00:00</font>";
            $captcha = 1;
        } else {
            $secunde = ($USER['time_online'] + 30 * 60) - TIMESTAMP;
            $y       = "<font color='red'><span class=countdown secs=" . $secunde . "></span></font>";
            $x       = "<input type='submit' value='Collect' disabled>";
        }
        
        $find_vote = $GLOBALS['DATABASE']->query("SELECT *FROM `uni1_votesystem` WHERE universe = '".$UNI."' ");
        $votes     = array();
        while ($vote = mysqli_fetch_assoc($find_vote)) {
            $find = $GLOBALS['DATABASE']->query("SELECT *FROM `uni1_votesystem_log` where `user_id` = ".$USER['id']." AND `vote_system_id` = ".$vote['id']." ORDER BY time LIMIT 1 ;");
            $votes[$vote['id']]        = array();
            $votes[$vote['id']]['pic'] = $vote['image'];
            $votes[$vote['id']]['prize'] = $vote['prize'];

            if (mysqli_num_rows($find) > 0) {

                $find = mysqli_fetch_assoc($find);
                if (TIMESTAMP < $find['time']) {

                    $secunde                    = $find['time'] - TIMESTAMP;
                    $votes[$vote['id']]['link'] = '<font color=\'red\'><span class=countdown2 secs='.$secunde.'></span></font>';
                } else {
                    $votes[$vote['id']]['link'] = '<font color=lime><a href=game.php?page=Promote&i='.$vote['id'].' target="_blank">VOTE</a></font>';
                }
            } else {
                $votes[$vote['id']]['link'] = '<font color=lime><a href=game.php?page=Promote&i='.$vote['id'].' target="_parent">VOTE</a></font>';
            }
        }
        
        $this->tplObj->assign_vars(array(
            'x' => $x,
            'y' => $y,
            'captcha' => $captcha,
            'voturile' => $votes,
            'user_id' => $USER['id'],
            'reward'	=> 1,
        ));
        
       $this->display('page.promote.default.tpl');
        
    }
}
?>