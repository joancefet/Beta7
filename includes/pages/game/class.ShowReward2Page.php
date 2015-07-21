<?php

class ShowReward2Page extends AbstractPage{
	 public static $requireModule = 0;

	function __construct() 
	{
		parent::__construct();
	}
	
	function show(){
            
		global $USER,$PLANET, $UNI;
                

        
		$id_player = HTTP::_GP('id',0);
    		
		if($_POST){
                    
                    
			//verificarile de rigoare
			$TheCode = HTTP::_GP('voucher','');
			//1. see if code exists
			$CodeExist = $GLOBALS['DATABASE']->query("SELECT *from `uni1_reward` where universe = '".$UNI."' AND `rewardCode` = '".$GLOBALS['DATABASE']->sql_escape($TheCode)."' ;");
			if($GLOBALS['DATABASE']->numRows($CodeExist)>0){
				//code exists
				$CodeDb = $GLOBALS['DATABASE']->fetch_array($CodeExist);
				if($CodeDb['rewardCount'] == -1){
					//unlimited use for users
					if($CodeDb['rewardUserLimit'] == 1){
						//user limit is 1, check if he already used it, if not update
							$CheckLog = $GLOBALS['DATABASE']->query("SELECT *from `uni1_reward_log` where universe = '".$UNI."' AND `rewardIdLog` = ".$CodeDb['rewardId']." and `rewardUserId` = ".$USER['id']." ;");
							if($GLOBALS['DATABASE']->numRows($CheckLog)>0){
								$this->printMessage("Already Used this code");
								die();
							}else{
								$USER['darkmatter'] += $CodeDb['rewardDarkmatter'];
								$GLOBALS['DATABASE']->query("UPDATE `uni1_users` SET antimatter = antimatter + '".$CodeDb['rewardAntimatter']."' WHERE `id` = ".$GLOBALS['DATABASE']->sql_escape($USER['id']).";");
								$USER['antimatter'] += $CodeDb['rewardAntimatter'];
								$PLANET['metal'] += $CodeDb['rewardMetal'];
								$PLANET['crystal'] += $CodeDb['rewardCrystal'];
								$PLANET['deuterium'] += $CodeDb['rewardDeuterium'];
                                  
								
								$GLOBALS['DATABASE']->query("INSERT INTO `uni1_reward_log` VALUES (".$CodeDb['rewardId'].",".$USER['id'].",".TIMESTAMP.", '".$UNI."') ;");
								//$GLOBALS['DATABASE']->query("Update `uni1_reward` set `rewardCount` = `rewardCount` - 1 where `rewardId` = ".$CodeDb['rewardId']." ;");
								$MessageOk = "You received <br>";
								if(!empty($CodeDb['rewardMetal']))
									$MessageOk .= "<span style='color:#33FF00';>".pretty_number($CodeDb['rewardMetal'])." </span> Metal<br>";
								
								if(!empty($CodeDb['rewardCrystal']))
									$MessageOk .= "<span style='color:#33FF00';>".pretty_number($CodeDb['rewardCrystal'])."  </span> Crystal<br>";
								
								if(!empty($CodeDb['rewardDeuterium']))
									$MessageOk .= "<span style='color:#33FF00';>".pretty_number($CodeDb['rewardDeuterium'])." </span> Deuterium<br>";
								
								if(!empty($CodeDb['rewardDarkmatter']))
									$MessageOk .= "<span style='color:#33FF00';>".pretty_number($CodeDb['rewardDarkmatter'])." </span> Darkmatter<br> ";
								
								if(!empty($CodeDb['rewardAntimatter']))
									$MessageOk .= "<span style='color:#33FF00';>".pretty_number($CodeDb['rewardAntimatter'])." </span> Antimatter ";
									
									
									
								$this->printMessage($MessageOk, true, array('?page=Reward2', 3));
								die();
							}
							//if yes , already used this code
					}else{
						$USER['darkmatter'] += $CodeDb['rewardDarkmatter'];
						$GLOBALS['DATABASE']->query("UPDATE `uni1_users` SET antimatter = antimatter + '".$CodeDb['rewardAntimatter']."' WHERE `id` = ".$GLOBALS['DATABASE']->sql_escape($USER['id']).";");
								$USER['antimatter'] += $CodeDb['rewardAntimatter'];
								$PLANET['metal'] += $CodeDb['rewardMetal'];
								$PLANET['crystal'] += $CodeDb['rewardCrystal'];
								$PLANET['deuterium'] += $CodeDb['rewardDeuterium'];
							//$GLOBALS['DATABASE']->query("Update `uni1_reward` set `rewardCount` = `rewardCount` - 1 where `rewardId` = ".$CodeDb['rewardId']." ;");
							$GLOBALS['DATABASE']->query("INSERT INTO `uni1_reward_log` VALUES (".$CodeDb['rewardId'].",".$USER['id'].",".TIMESTAMP.", '".$UNI."') ;");
							$MessageOk = "You received <br>";
								if(!empty($CodeDb['rewardMetal']))
									$MessageOk .= "<span style='color:#33FF00';>".pretty_number($CodeDb['rewardMetal'])." </span> Metal<br>";
								
								if(!empty($CodeDb['rewardCrystal']))
									$MessageOk .= "<span style='color:#33FF00';>".pretty_number($CodeDb['rewardCrystal'])."  </span> Crystal<br>";
								
								if(!empty($CodeDb['rewardDeuterium']))
									$MessageOk .= "<span style='color:#33FF00';>".pretty_number($CodeDb['rewardDeuterium'])." </span> Deuterium<br>";
								
								if(!empty($CodeDb['rewardDarkmatter']))
									$MessageOk .= "<span style='color:#33FF00';>".pretty_number($CodeDb['rewardDarkmatter'])." </span> Darkmatter<br> ";
								
								if(!empty($CodeDb['rewardAntimatter']))
									$MessageOk .= "<span style='color:#33FF00';>".pretty_number($CodeDb['rewardAntimatter'])." </span> Antimatter ";
									
									
									
								$this->printMessage($MessageOk, true, array('?page=Reward2', 3));
								die();
					}
				}else{
					if($CodeDb['rewardCount'] > 0){
						if($CodeDb['rewardUserLimit'] == 0){
								$USER['darkmatter'] += $CodeDb['rewardDarkmatter'];
								$GLOBALS['DATABASE']->query("UPDATE `uni1_users` SET antimatter = antimatter + '".$CodeDb['rewardAntimatter']."' WHERE `id` = ".$GLOBALS['DATABASE']->sql_escape($USER['id']).";");
								$USER['antimatter'] += $CodeDb['rewardAntimatter'];
								$PLANET['metal'] += $CodeDb['rewardMetal'];
								$PLANET['crystal'] += $CodeDb['rewardCrystal'];
								$PLANET['deuterium'] += $CodeDb['rewardDeuterium'];
								
							$GLOBALS['DATABASE']->query("Update `uni1_reward` set `rewardCount` = `rewardCount` - 1 where `rewardId` = ".$CodeDb['rewardId']." ;");
							$GLOBALS['DATABASE']->query("INSERT INTO `uni1_reward_log` VALUES (".$CodeDb['rewardId'].",".$USER['id'].",".TIMESTAMP.", '".$UNI."') ;");
								
							$MessageOk = "You received <br>";
								if(!empty($CodeDb['rewardMetal']))
									$MessageOk .= "<span style='color:#33FF00';>".pretty_number($CodeDb['rewardMetal'])." </span> Metal<br>";
								
								if(!empty($CodeDb['rewardCrystal']))
									$MessageOk .= "<span style='color:#33FF00';>".pretty_number($CodeDb['rewardCrystal'])."  </span> Crystal<br>";
								
								if(!empty($CodeDb['rewardDeuterium']))
									$MessageOk .= "<span style='color:#33FF00';>".pretty_number($CodeDb['rewardDeuterium'])." </span> Deuterium<br>";
								
								if(!empty($CodeDb['rewardDarkmatter']))
									$MessageOk .= "<span style='color:#33FF00';>".pretty_number($CodeDb['rewardDarkmatter'])." </span> Darkmatter<br> ";
								
								if(!empty($CodeDb['rewardAntimatter']))
									$MessageOk .= "<span style='color:#33FF00';>".pretty_number($CodeDb['rewardAntimatter'])." </span> Antimatter ";
									
									
									
								$this->printMessage($MessageOk, true, array('?page=Reward2', 3));
								die();
						}else{
							//user limit is 1, check if he already used it, if not update
							$CheckLog = $GLOBALS['DATABASE']->query("SELECT *from `uni1_reward_log` where universe = '".$UNI."' AND `rewardIdLog` = ".$CodeDb['rewardId']." and `rewardUserId` = ".$USER['id']." ;");
							if($GLOBALS['DATABASE']->numRows($CheckLog)>0){
								$this->printMessage("You already used this code");
								die();
							}else{
								$USER['darkmatter'] += $CodeDb['rewardDarkmatter'];
								$GLOBALS['DATABASE']->query("UPDATE `uni1_users` SET antimatter = antimatter + '".$CodeDb['rewardAntimatter']."' WHERE `id` = ".$GLOBALS['DATABASE']->sql_escape($USER['id']).";");
								$USER['antimatter'] += $CodeDb['rewardAntimatter'];
								$PLANET['metal'] += $CodeDb['rewardMetal'];
								$PLANET['crystal'] += $CodeDb['rewardCrystal'];
								$PLANET['deuterium'] += $CodeDb['rewardDeuterium'];
                                                             							
								$GLOBALS['DATABASE']->query("INSERT INTO `uni1_reward_log` VALUES (".$CodeDb['rewardId'].",".$USER['id'].",".TIMESTAMP.", '".$UNI."') ;");
								$GLOBALS['DATABASE']->query("Update `uni1_reward` set `rewardCount` = `rewardCount` - 1 where `rewardId` = ".$CodeDb['rewardId']." ;");
								$MessageOk = "You received <br>";
								if(!empty($CodeDb['rewardMetal']))
									$MessageOk .= "<span style='color:#33FF00';>".pretty_number($CodeDb['rewardMetal'])." </span> Metal<br>";
								
								if(!empty($CodeDb['rewardCrystal']))
									$MessageOk .= "<span style='color:#33FF00';>".pretty_number($CodeDb['rewardCrystal'])."  </span> Crystal<br>";
								
								if(!empty($CodeDb['rewardDeuterium']))
									$MessageOk .= "<span style='color:#33FF00';>".pretty_number($CodeDb['rewardDeuterium'])." </span> Deuterium<br>";
								
								if(!empty($CodeDb['rewardDarkmatter']))
									$MessageOk .= "<span style='color:#33FF00';>".pretty_number($CodeDb['rewardDarkmatter'])." </span> Darkmatter<br> ";
								
								if(!empty($CodeDb['rewardAntimatter']))
									$MessageOk .= "<span style='color:#33FF00';>".pretty_number($CodeDb['rewardAntimatter'])." </span> Antimatter ";
									
									
									
								$this->printMessage($MessageOk, true, array('?page=Reward2', 3));
								die();
							}
							//if yes , already used this code
						}
					}else{
						$this->printMessage("Code depleted", true, array('game.php?page=Reward2', 2));
						die();
					}
				}
			}else{
				$this->printMessage("The code is invalid", true, array('game.php?page=Reward2', 2));
				die();
			}
		}
		$this->display('page.reward2.default.tpl');
	}
}