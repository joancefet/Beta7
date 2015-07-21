<?php

#Example PHP Postback Script

// Your Database Connection Details
$host = 'localhost';
$db_name = '';
$db_user = ''; 
$db_password = '';


mysql_connect($host, $db_user, $db_password);
mysql_select_db($db_name);

function _VoteReward($userId, $userIp, $valid) {

        //if(!$voted[0]) {
    if($valid == 1) {

        // Make userid safe to use in query
        $userId = mysql_real_escape_string($userId);
		$timer = time();
		$timer += 12 * 60 * 60; 
        // Check if that user voted already
        // Adjust this query to match your table, column names etc
        //$voted = mysql_fetch_array(mysql_query("SELECT voted FROM vote_list WHERE user = '".$userId."'"));
        //if(!$voted[0]) {
            // User has not voted, grant him reward, for example points
            mysql_query("UPDATE `uni1_users` SET `darkmatter` = `darkmatter` + '40000', v3 = '".$timer."' WHERE `id` = '".mysql_escape_string($userId)."';");
			mysql_query("INSERT INTO uni1_votesystem_log VALUES ('".mysql_escape_string($userId)."','".$timer."','3', '1') ;");
        //}
        //else {
            // Do whatever you want if he voted already. Maybe a log of false votes
       // }

    }

}

//-------------------------- Don't change anything below this! ----------------------------- //

$ipsWhitelist = array('78.46.67.100');	

$userId = isset($_POST['userid']) ? $_POST['userid'] : null;
$userIp = isset($_POST['userip']) ? $_POST['userip'] : null;
$valid  = isset($_POST['voted']) ? intval($_POST['voted']) : 0;

$result = false;
if (!empty($userId) && !empty($userIp)) {

        
        _VoteReward($userId, $userIp, $valid);
    $result = true;

}

if ($result) {
    echo 'OK';
}

//Close Connection
mysql_close();

?>