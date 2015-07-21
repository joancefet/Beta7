<?php
class ShowRefystemPage extends AbstractPage
{	
	
	function __construct() 
	{
		parent::__construct();
	}
	
	function show(){
	global $USER, $PLANET, $LNG, $resource, $CONF, $UNI, $reslist;
	
	$status   = HTTP::_GP('status', '');
    switch($status){
	case '':
	$this->tplObj->assign_vars(
				array(
				'userid' => $USER['id'],
				'path'						=> HTTP_PATH,
				'ref_active'		=> Config::get('ref_active'),
                                       
				)
		);
		$this->display("page.refer.default.tpl");
		break;
		case 'refs':
		$RefLinks		= array();
		
		$RefLinksRAW	= $GLOBALS['DATABASE']->query("SELECT u.id, u.username, s.total_points FROM ".USERS." as u LEFT JOIN ".STATPOINTS." as s ON s.id_owner = u.id AND s.stat_type = '1' WHERE ref_id = ".$USER['id'].";");
		
		
			while ($RefRow = $GLOBALS['DATABASE']->fetch_array($RefLinksRAW)) {
				$RefLinks[$RefRow['id']]	= array(
					'username'	=> $RefRow['username'],
					'points'	=> min($RefRow['total_points'], Config::get('ref_minpoints'))
				);
			}
		
		
		
		$this->tplObj->assign_vars(
				array(
				'ref_active'				=> Config::get('ref_active'),
			'ref_minpoints'				=> Config::get('ref_minpoints'),
			'RefLinks'					=> $RefLinks,
				)
		);
		$this->display("page.reference.default.tpl");
		break;
	}
	
	}
}
?>