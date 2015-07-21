<?php


class ShowVotePage extends AbstractPage
{
	public static $requireModule = 0;
	
	function __construct() {
		parent::__construct();
	}

	function show()
	{
		global  $USER, $PLANET, $LNG, $LANG;
		
	$this->tplObj->loadscript('countdown.js');	
		
	if(!empty($_GET['i'])){

/*============> A dat sa voteze , sa vedem ce avem de facut <==============*/
	$vote_id = (int)$_GET['i'];
	
	$cautare = $GLOBALS['DATABASE']->query("SELECT *FROM `uni1_votesystem` where `id` = '".$vote_id."' ; ");
	
	/*============> a bagat prostu un nr la nimereala futul norocu <==============*/
	if($GLOBALS['DATABASE']->numRows($cautare) == 0){
		$this->printMessage("Don't try anything , wont work");
		die();
	}	
	$cautare = $GLOBALS['DATABASE']->fetch_array($cautare);
	/*============> am verificat ca existat sitemul acesta , vedem daca a votat <==============*/
	
	$find_vote = $GLOBALS['DATABASE']->query("SELECT *FROM `uni1_votesystem_log` where `user_id` = '".$USER['id']."' AND `vote_system_id` = '".$vote_id."' ;");
	if($GLOBALS['DATABASE']->numRows($find_vote)>0){
		/*============> a votat deja , verificam daca ii dam dreptul <==============*/
		$find = $GLOBALS['DATABASE']->fetch_array($find_vote);
		if(TIMESTAMP < ($find['time']+12*60*60)){
			/*============> a mai votat in mai putin de 12h <==============*/
			$this->printMessage("You already voted in the past 12h");
			die();
		}else{
			//$GLOBALS['DATABASE']->query("Update ".USERS." set `darkmatter` = `darkmatter` + ".$cautare['prize']." where `id` = '".$USER['id']."' ; ");
			$USER['darkmatter'] += $cautare['prize'];
			$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET vcount = vcount + '1' WHERE id = ".$USER['id']." ;");
			$GLOBALS['DATABASE']->query("UPDATE `uni1_votesystem_log` set `time` = '".TIMESTAMP."' where `user_id` = ".$USER['id']." AND `vote_system_id` = ".$vote_id." ;");
			header("Location: ".$cautare['link']);
		}
	}else{
		/*============> nu a votat pe noul sistem , si ii punem insert <==============*/
		//$GLOBALS['DATABASE']->query("Update ".USERS." set `darkmatter` = `darkmatter` + ".$cautare['prize']." where `id` = '".$USER['id']."' ; ");
		$USER['darkmatter'] += $cautare['prize'];
		$GLOBALS['DATABASE']->query("INSERT INTO `uni1_votesystem_log` VALUES (".$USER['id'].", ".TIMESTAMP.", ".$vote_id.")");
			header("Location: ".$cautare['link']);
	}
}
		
		$find_vote = $GLOBALS['DATABASE']->query("SELECT *FROM `uni1_votesystem` ");
$votes = array(); /*aici vom pune toate arrayurile cu voturi*/
while($vote = $GLOBALS['DATABASE']->fetch_array($find_vote)){
	/*============> cautarea daca a votat in ultimele 12 h <==============*/
	$find = $GLOBALS['DATABASE']->query("SELECT *FROM `uni1_votesystem_log` where `user_id` = ".$USER['id']." AND `vote_system_id` = ".$vote['id']." ;");
	
		/*============> facem arrayul pentru afisarea voturilor<==============*/
	$votes[$vote['id']]= array();
	$votes[$vote['id']]['pic'] = $vote['image'];
	$votes[$vote['id']]['prize'] = $vote['prize'];
	
	if($GLOBALS['DATABASE']->numRows($find)>0){
		/*============> a votat pana acuma , si acum verificam timpul <==============*/
		$find = $GLOBALS['DATABASE']->fetch_array($find);
		if(TIMESTAMP < ($find['time']+12*60*60)){
			/*============> nu au trecut cele 12h de cand a votat <==============*/
			$secunde = $find['time'] + 12*60*60 - TIMESTAMP;
			$votes[$vote['id']]['link'] = '<font color=\'red\'><span class=countdown2 secs='.$secunde.'></span></font>';
		}else{
			$votes[$vote['id']]['link'] = '<font color=lime><a href=game.php?page=vote&i='.$vote['id'].' target=\"_blank\">VOTE</a></font>';
		}
	}else{
		$votes[$vote['id']]['link'] = '<font color=lime><a href=game.php?page=vote&i='.$vote['id'].' target=\"_blank\">VOTE</a></font>';
	}
}
		
		$this->tplObj->assign_vars(array(
			'voturile' => $votes,
		));
		$this->display('page.vote.default.tpl');
	}
}
?>