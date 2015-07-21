<?php
define('MODE'  , 'CRON');
define('ROOT_PATH', str_replace('\\', '/',dirname(__FILE__)).'/');
set_include_path(ROOT_PATH);
require('includes/common.php');
require_once 'inc/virtual_currency_protocol.php';

class VirtualCurrencyExample extends VirtualCurrency {
public function setupDB() {
try {
$this->db = new PDO('mysql:host='.DBConfig::HOST.';port='.DBConfig::PORT.';dbname='.DBConfig::DB, DBConfig::USER, DBConfig::PASS);
} catch (PDOException $e) {
throw new Exception($e->getMessage()); //verbose exception
//throw new Exception('could not connect to database.'); //production exception
}
}
public function userExists($user) {
//query the db to see if user exists
$sth = $this->db->prepare("SELECT * FROM uni1_users WHERE id='".$user."'");
$sth->execute(array($user));
return count($sth->fetchAll()) > 0;
}
public function invoiceExists($invoiceID) {
//query db to see if invoice exists
$sth = $this->db->prepare("SELECT * FROM vc_payments WHERE payment_invoice=".$invoiceID."");
$sth->execute(array($invoiceID));
return count($sth->fetchAll()) > 0;
}
public function newInvoice($invoiceID, $userID, $sum) {
try {
//insert new invoice into db
$GLOBALS['DATABASE']->query("INSERT INTO vc_payments(payment_invoice, user_id, payment_date, payment_total) VALUES (".$invoiceID.", '".$userID."', ".TIMESTAMP.", ".$sum.")");
$GLOBALS['DATABASE']->query("UPDATE uni1_users SET antimatter = antimatter + ".$sum." WHERE id = ".$userID."");
SendSimpleMessage($userID, '', TIMESTAMP, 4, 'System', 'Anti Matter Order', 'Xsolla payment was successful. <br>'.pretty_number($sum).' anti matter have been credited to your account.');
SendSimpleMessage(1, '', TIMESTAMP, 4, 'System', 'Anti Matter Order', 'Xsolla payment was successful. <br>'.pretty_number($sum).' Anti Matter Units have been credited to '.$userID.' account.');
} catch (PDOException $e) {
throw new Exception('error creating payment.');
}
}
public function cancelInvoice($invoiceID) {
//check if order is already canceled
$sth = $this->db->prepare("SELECT * FROM vc_payments WHERE payment_invoice=".$invoiceID." AND payment_canceled=1");
$sth->execute(array($invoiceID));
//cancel if this invoice has not been canceled already
if (count($sth->fetchAll()) < 1) {
$sth = $this->db->prepare("UPDATE vc_payments SET payment_canceled=1, payment_canceled_date=now() WHERE payment_invoice=".$invoiceID."");
$sth->execute(array($invoiceID));
}
}
}
$example = new VirtualCurrencyExample();
$example->process();
?>