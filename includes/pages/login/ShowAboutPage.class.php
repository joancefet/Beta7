<?php


class ShowAboutPage extends AbstractPage
{
	public static $requireModule = 0;

	function __construct() 
	{
		parent::__construct();
		$this->setWindow('light');
	}
	
	function show() 
	{		
		global $LNG;
		$newsResult	= $GLOBALS['DATABASE']->query("SELECT id, date, title, text, user FROM ".NEWS." ORDER BY id DESC LIMIT 5;");
		$newsList	= array();
		
		while ($newsRow = $GLOBALS['DATABASE']->fetchArray($newsResult))
		{
			$newsList[]	= array(
				'id' => $newsRow['id'],
				'title' => $newsRow['title'],
				'from' 	=> t('news_from', _date(t('php_tdformat'), $newsRow['date']), $newsRow['user']),
				'text' 	=> makebr($newsRow['text']),
				'date' 	=> _date($LNG['php_tdformat'], $newsRow['date'], $newsRow['user']),
			);
		}
		
		
		
		
		$this->assign(array(
		'newsList'	=> $newsList,
		));
		
		$this->render('page.about.default.tpl');
	}
}
