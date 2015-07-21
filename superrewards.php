<?php
/*
SuperRewards.com App Postback Handling Script for Publishers.
You will need a web server running PHP and a MySQL database (or MySQL-like database).
This script uses PHP's PDO which can be configured to use different database types.
Installation Instructions:
1. Fill in the configuration options below.
2. Place the script on your web server and make sure it is accessible from the Internet.
Ex: http://www.example.com/app/postback.php
3. Automatically setup the database tables for use with this script by passing the setup option in the URL.
Ex: http://www.example.com/app/postback.php?setup=1
4. Test your integration by sending a Test Postback.
See: http://docs.superrewards.com/v1.0/docs/notification-postbacks
5. Use the information in the database to award in-game currency to your users.
For more details, see our documentation at:
http://docs.superrewards.com/v1.0/docs/getting-started
*/
define('APP_SECRET', ''); // App Secret Key. Find it by going to the Apps page, select Edit on the App of your choice, then Integrate.
define('DB_USER', ''); // Your database user.
define('DB_PASSWORD', ''); // Your database password.
define('DB_HOST', ''); // Your database host (usually 127.0.0.1).
define('DB_HOST_PORT', ''); // Your database host port (usually 3306).
define('DB_NAME', ''); // Your database name.
define('DB_PREFIX', ''); // OPTIONAL: A database table prefix, such as 'app1_'. This easily allows multiple apps to be served from the same database.
error_reporting(E_WARNING);
// *** No more configuration below this line. ***
header('Content-Type:text/plain');
// If &setup is passed in, setup tables needed to use this script.
if(isset($_REQUEST['setup']))
{
$query =
"CREATE TABLE IF NOT EXISTS `".DB_PREFIX."transactions` (
`id` INT NOT NULL,
`uid` BIGINT,
`oid` INT,
`new` INT,
`time` DATETIME,
PRIMARY KEY (`id`))
CHARACTER SET utf8 COLLATE utf8_general_ci;
CREATE TABLE IF NOT EXISTS `".DB_PREFIX."users` (
`uid` BIGINT NOT NULL,
`total` INT,
`time` DATETIME,
PRIMARY KEY (`uid`))
CHARACTER SET utf8 COLLATE utf8_general_ci;";
try
{
// Connect to Database.
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME.";port=".DB_HOST_PORT, DB_USER, DB_PASSWORD, array( PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING ));
$query = $dbh->prepare($query);
if(!$query->execute())
echo "Could not create tables in database: ".DB_NAME." @ ".DB_HOST.'. Check your configuration above.';
else
echo "Tables setup successfully!";
$dbh = null;
}
catch (PDOException $e)
{
exit($e->getMessage());
}
exit();
}
$id = $_REQUEST['id']; // ID of this transaction.
$uid = $_REQUEST['uid']; // ID of the user which performed this transaction.
$oid = $_REQUEST['oid']; // ID of the offer or direct payment method.
$new = $_REQUEST['new']; // Number of in-game currency your user has earned by completing this offer.
$total = $_REQUEST['total']; // Total number of in-game currency your user has earned on this App.
$sig = $_REQUEST['sig']; // Security hash used to verify the authenticity of the postback.
/**
* Sanity check.
*
* If you are using alphanumeric user ids, remove the is_numeric($uid) check. Alphanumeric
* ids can only be enabled by Super Rewards Support
*
* If you are using alphanumeric user ids, please ensure that you use the appropriate URL-encoding
* for non-text or unicode characters. For example: ~ should be encoded as %7E
*/
if(!(is_numeric($id) && is_numeric($uid) && is_numeric($oid) && is_numeric($new) && is_numeric($total)))
exit('0'); // Fail.
$result = 1;
$sig_compare = md5($id.':'.$new.':'.$uid.':'.APP_SECRET);
// Only accept if the Security Hash matches what we have.
if($sig == $sig_compare)
{
$timestamp = date("Y-m-d H:i:s", time());
try
{
// Connect to Database.
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME.";port=".DB_HOST_PORT, DB_USER, DB_PASSWORD, array( PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING ));
// Add new transaction
$query = $dbh->prepare("INSERT INTO ".DB_PREFIX."transactions(id, uid, oid, new, time) VALUES (:id,:uid,:oid,:new,:time) ON DUPLICATE KEY UPDATE id=:id,uid=:uid,oid=:oid,new=:new,time=:time");
$query->bindParam(':id', $id, PDO::PARAM_INT);
$query->bindParam(':uid', $uid, PDO::PARAM_INT);
$query->bindParam(':oid', $oid, PDO::PARAM_INT);
$query->bindParam(':new', $new, PDO::PARAM_INT);
$query->bindParam(':time', $timestamp, PDO::PARAM_STR);
if(!$query->execute())
$result = 0; // Problems executing SQL. Fail.
// Add/Update user.
$query = $dbh->prepare("INSERT INTO ".DB_PREFIX."users(uid, total, time) VALUES (:uid,:total,:time) ON DUPLICATE KEY UPDATE uid=:uid,total=:total,time=:time");
$query->bindParam(':uid', $uid, PDO::PARAM_INT);
$query->bindParam(':total', $total, PDO::PARAM_INT);
$query->bindParam(':time', $timestamp, PDO::PARAM_STR);
if(!$query->execute())
$result = 0; // Problems executing SQL. Fail.
$dbh = null;
} 
catch (PDOException $e)
{
exit($e->getMessage());
}
}
else
$result = 0; // Security hash incorrect. Fail.
echo $result;
// This script will output a status code of 1 (Success) or 0 (Try sending again later).
?>