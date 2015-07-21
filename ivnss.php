<?php

// Your Database Connection Details
$host = 'localhost';
$db_name = '';
$db_user = '';
$db_password = '';

mysql_connect($host, $db_user, $db_password);
mysql_select_db($db_name);
function _VoteReward($userId, $userIp, $valid) { 
    if($valid == 1) { 
        // Make userid safe to use in query
        $userId = mysql_real_escape_string($userId);
   
        // Check if that user voted already
        // Adjust this query to match your table, column names etc
      //  $voted = mysql_fetch_array(mysql_query("SELECT voted FROM vote_list WHERE user = '".$userId."'"));
       // if(!$voted[0]) {
            // User has not voted, grant him reward, for example points
            mysql_query("UPDATE `uni1_users` SET `darkmatter` = `darkmatter` + '15000', v1 = '".TIMESTAMP."' WHERE `id` = '".mysql_escape_string($userId)."';");
       // }
       // else {
            // Do whatever you want if he voted already. Maybe a log of false votes
       // }

    }

}
//-------------------------- Don't change anything below this! ----------------------------- //

$Whitelist = array('dksajdasjdwuudsak');

$userId = isset($_POST['userid']) ? $_POST['userid'] : null;
$userIp = isset($_POST['userip']) ? $_POST['userip'] : null;
$valid = isset($_POST['voted']) ? intval($_POST['voted']) : 0;
$at_refc = isset($_POST['at_refc']) ? $_POST['at_refc'] : null; 
$result = false;
if (!empty($userId) && !empty($at_refc)) { 
{ 
 if (in_array($at_refc, $Whitelist)) {
            $result = true;
            _VoteReward($userId, $valid);
      }
} 	  
if ($result) {
    echo 'OK';
}
//Close Connection
mysql_close();

?>