<?php
class ShowMessageListPage extends AbstractPage
{
function __construct()
{
parent::__construct();
}

function show(){
global $USER, $PLANET, $LNG, $UNI, $CONF,$resource,$pricelist;

if($USER['authlevel'] < 3 ){
		$this->printMessage("your dont have enough permissions!", true, array('game.php?page=Overview', 2));
		die();
	}
	
$messageRaw	= $GLOBALS['DATABASE']->query("SELECT u.username, us.username as senderName, m.* 
		FROM uni1_messages_copy as m
		LEFT JOIN ".USERS." as u ON m.message_owner = u.id
		LEFT JOIN ".USERS." as us ON m.message_sender = us.id
		WHERE m.message_type = '1' AND message_sender != '1' AND message_universe = '1'
		ORDER BY message_time DESC, message_id DESC
		;");
	
	while($messageRow = $GLOBALS['DATABASE']->fetch_array($messageRaw))
	{
		$messageList[$messageRow['message_id']]	= array(
			'sender'	=> empty($messageRow['senderName']) ? $messageRow['message_from'] : $messageRow['senderName'].' (ID:&nbsp;'.$messageRow['message_sender'].')',
			'receiver'	=> $messageRow['username'].' (ID:&nbsp;'.$messageRow['message_owner'].')',
			'subject'	=> $messageRow['message_subject'],
			'text'		=> $messageRow['message_text'],
			'time'		=> str_replace(' ', '&nbsp;', _date($LNG['php_tdformat'], $messageRow['message_time']), $USER['timezone']),
		);
	}
$this->tplObj->assign_vars(array(	
		'messageList'	=> $messageList,
		));
		
		$this->display('page.messagelist.tpl');
		
}
}