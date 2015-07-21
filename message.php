<?php

define('MODE', 'CRON');
define('ROOT_PATH', str_replace('\\', '/',dirname(__FILE__)).'/');
set_include_path(ROOT_PATH);
require('includes/common.php');


$getch = $GLOBALS['DATABASE']->query("SELECT COUNT(*) FROM `uni1_messages` where `message_owner` = '1' AND `message_unread` = '1' ");
if($GLOBALS['DATABASE']->numRows($getch) == 0){
        echo json_encode(array('success' => false));
}else{
        //Reception des nouveau message

        while($x = $GLOBALS['DATABASE']->fetch_array($getch)){
                $resp = $x;
               
        }
        echo json_encode(array('success'=>true,'data'=>$resp));
}
?>