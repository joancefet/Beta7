<?php

// Your Database Connection Details
$host = 'localhost';
$db_name = '';
$db_user = ''; 
$db_password = '';

mysql_connect($host, $db_user, $db_password);
mysql_select_db($db_name);
function _VoteReward($custom) {
        // Make userid safe to use in query
        $userId = mysql_real_escape_string($custom);
		$timer = time();
		$timer += 12 * 60 * 60; 
		$timerreal = time();
   
        // Check if that user voted already
        // Adjust this query to match your table, column names etc
        $voted = mysql_fetch_array(mysql_query("SELECT v1 FROM uni1_users WHERE id = '".$userId."'"));
        if($voted['v1'] < $timerreal) {
           //  User has not voted, grant him reward, for example points
            mysql_query("UPDATE `uni1_users` SET `darkmatter` = `darkmatter` + '40000', v1 = '".$timer."' WHERE `id` = '".mysql_escape_string($userId)."';");
            mysql_query("INSERT INTO uni1_votesystem_log VALUES ('".mysql_escape_string($userId)."','".$timer."','1', '1') ;");
        }
        else {
            // Do whatever you want if he voted already. Maybe a log of false votes
        }

    

}
//-------------------------- Don't change anything below this! ----------------------------- //

$custom   = $_POST['custom'];
$result = false;
if ($custom > 0)
{ 
_VoteReward($custom);
$result = true;
}
if ($result) {
    echo 'OK';
}
//Close Connection
mysql_close();

?>