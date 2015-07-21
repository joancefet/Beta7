<?php
class ShowAlloErrorPage extends AbstractPage
{	
	public static $requireModule = 0;
	
	function __construct() 
	{
		parent::__construct();
	}
	 function genToken( $len = 28, $md5 = true ) {
		 $chars = array(
        'Q',  '8', 'y', '5', 'Z', 'G', 'O', 
        'S',  'N', 'D', 'h', 'W', 
        '1',  'E', 'L', '4', '6', '7', '9', 'a',
        'A',  'b', 'B', 'C', 'd', 'e', '2', 'f', 'P', 'g', 
        'H',  'i', 'X', 'U', 'J', 'k', 'r', 'l', 't', 'M', 'n',
        'o',  'p', 'F', 'q', 'K', 'R', 's', 'c', 'm', 'T',
        'v',  'j', 'u', 'V', 'w', 'x', 'I', 'Y', 'z'
		);
	 # Array indice friendly number of chars; empty token string
    $numChars = count($chars) - 1; $token = '';
 
    # Create random token at the specified length
    for ( $i=0; $i<$len; $i++ )
        $token .= $chars[ mt_rand(0, $numChars) ];
 
    # Should token be run through md5?
    if ( $md5 ) {
 
        # Number of 32 char chunks
        $chunks = ceil( strlen($token) / 32 ); $md5token = '';
 
        # Run each chunk through md5
        for ( $i=1; $i<=$chunks; $i++ )
            $md5token .= md5( substr($token, $i * 32 - 32, 32) );
 
        # Trim the token
        $token = substr($md5token, 0, $len);
 
    } return $token;
}
	function show()
	{
		global $CONF, $LNG, $PLANET, $USER, $db, $resource, $UNI;

		
			$code = isset($_GET['code']) ? $_GET['code'] : null;
			$orderid		= $GLOBALS['DATABASE']->GetInsertID();
			$userId		= $USER['id'];
			$timer = time();
if (isset($code)) {

			//code
			$string_t = ""; 
			for($i=0;$i<3;$i++){
				$string_t .= $this->genToken(5,false)."-";
			}
			$string_t = substr($string_t,0,-1);
			$GLOBALS['DATABASE']->query("INSERT INTO `uni1_allopass_log` VALUES ('".$orderid."', '".mysql_escape_string($userId)."', '".mysql_escape_string($code)."', '0','error', '".$string_t."', '0', '0', '0',  '".$timer."', '2')");
}

$query = $GLOBALS['DATABASE']->query("SELECT orderid FROM `uni1_allopass_log` where `code` = '".$code."' ;");
$query  = $GLOBALS['DATABASE']->fetch_array($query);

	$this->tplObj->assign_vars(array( 

	'transac' => $string_t,
	'code' => $code,
	'orderid' => $query['orderid'],
	));


	$this->display('page.allo.error.tpl');

	}
}
?>