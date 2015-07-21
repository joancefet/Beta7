<?php

if (!allowedTo(str_replace(array(dirname(__FILE__), '\\', '/', '.php'), '', __FILE__))) exit;

function ShowVoucherPage() 
{
	global $LNG, $USER;
	
	
    $template = new template();
    
    if($_GET['mode'] == 'delete' && !empty($_GET['i'])){
        //delete an entry
        $GLOBALS['DATABASE']->query("DELETE from `uni1_reward` where `rewardId` = ".$GLOBALS['DATABASE']->sql_escape($_GET['i'])." ;");
        $template->message("Voucher Code deleted");
        die();
    }
    if($_POST){
        $SQL = "";
        foreach($_POST as $key => $value){
            $SQL .= "'".$value."',";
        }
        $SQL = substr($SQL,0,-1);
        $GLOBALS['DATABASE']->query("INSERT INTO `uni1_reward` VALUES (NULL,".$SQL.");");
        $template->message("Voucher Added");
        die();
    }
   $AllVouchers = array();
   
   $GetAll = $GLOBALS['DATABASE']->query("SELECT * FROM `uni1_reward` ;");
   if($GLOBALS['DATABASE']->numRows($GetAll)>0){
    while($x = $GLOBALS['DATABASE']->fetch_array($GetAll)){
        $AllVouchers[] = $x;
    }
   }
	$template->assign_vars(
        array(
            'AllVouchers' => $AllVouchers,
        )
    );
	$template->show('VoucherEditor.tpl');
}
?>