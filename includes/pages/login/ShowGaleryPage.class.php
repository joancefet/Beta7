<?php

/**
 *  2Moons
 *  Copyright (C) 2012 Jan
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package 2Moons
 * @author Jan <info@2moons.cc>
 * @copyright 2006 Perberos <ugamela@perberos.com.ar> (UGamela)
 * @copyright 2008 Chlorel (XNova)
 * @copyright 2012 Jan <info@2moons.cc> (2Moons)
 * @license http://www.gnu.org/licenses/gpl.html GNU GPLv3 License
 * @version 2.0.$Revision: 2242 $ (2012-11-31)
 * @info $Id: ShowNewsPage.class.php 2436 2012-11-17 15:13:12Z slaver7 $
 * @link http://2moons.cc/
 */

class ShowGaleryPage extends AbstractPage
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
		$newsResult	= $GLOBALS['DATABASE']->query("SELECT id, date, title, text, user, catID FROM ".NEWS." ORDER BY id DESC;");
		$newsList	= array();
		
		
		
		while ($newsRow = $GLOBALS['DATABASE']->fetchArray($newsResult))
		{
			$newsList[]	= array(
				'id' => $newsRow['id'],
				'title' => $newsRow['title'],
				'from' 	=> t('news_from', _date(t('php_tdformat'), $newsRow['date']), $newsRow['user']),
				'text' 	=> makebr($newsRow['text']),
				'date' 	=> _date($LNG['php_tdformat'], $newsRow['date'], $newsRow['user']),
				'image' 	=> 'images/'.$newsRow['catID'].'.jpg',
			);
		}
		
		$topicsResult	= $GLOBALS['DATABASE']->query("SELECT tid, title, last_post, topic_firstpost, title_seo FROM forum_topics WHERE tdelete_time = '0' ORDER BY last_post DESC LIMIT 5;");
		$topicsList	= array();
		
		while ($topicsRow = $GLOBALS['DATABASE']->fetchArray($topicsResult))
		{
			$topicsList[]	= array(
				'id' => $topicsRow['tid'],
				'title' => $topicsRow['title'],
				'topic_firstpost' => $topicsRow['topic_firstpost'],
				'title_seo' => $topicsRow['title_seo'],
				'date' 	=> _date($LNG['php_tdformat'], $topicsRow['last_post'], 1),
			);
		}
		
		$this->assign(array(
		'newsList'	=> $newsList,
		'topicsList'	=> $topicsList,
		));
		
		$this->render('page.galery.default.tpl');
	}
	
	function screen() 
	{	
		global $LNG;
		$newsResult	= $GLOBALS['DATABASE']->query("SELECT id, date, title, text, user, catID FROM ".NEWS." ORDER BY id DESC;");
		$newsList	= array();
		
		
		
		while ($newsRow = $GLOBALS['DATABASE']->fetchArray($newsResult))
		{
			$newsList[]	= array(
				'id' => $newsRow['id'],
				'title' => $newsRow['title'],
				'from' 	=> t('news_from', _date(t('php_tdformat'), $newsRow['date']), $newsRow['user']),
				'text' 	=> makebr($newsRow['text']),
				'date' 	=> _date($LNG['php_tdformat'], $newsRow['date'], $newsRow['user']),
				'image' 	=> 'images/'.$newsRow['catID'].'.jpg',
			);
		}
		$topicsResult	= $GLOBALS['DATABASE']->query("SELECT tid, title, last_post, topic_firstpost, title_seo FROM forum_topics WHERE tdelete_time = '0' ORDER BY last_post DESC LIMIT 5;");
		$topicsList	= array();
		
		while ($topicsRow = $GLOBALS['DATABASE']->fetchArray($topicsResult))
		{
			$topicsList[]	= array(
				'id' => $topicsRow['tid'],
				'title' => $topicsRow['title'],
				'topic_firstpost' => $topicsRow['topic_firstpost'],
				'title_seo' => $topicsRow['title_seo'],
				'date' 	=> _date($LNG['php_tdformat'], $topicsRow['last_post'], 1),
			);
		}
	
		$this->assign(array(
		'newsList'	=> $newsList,
		'topicsList'	=> $topicsList,
		));
		
		$this->render('page.screenshot.default.tpl');
	}
	
	function space() 
	{		
		global $LNG;
		$newsResult	= $GLOBALS['DATABASE']->query("SELECT id, date, title, text, user, catID FROM ".NEWS." ORDER BY id DESC;");
		$newsList	= array();
		
		
		
		while ($newsRow = $GLOBALS['DATABASE']->fetchArray($newsResult))
		{
			$newsList[]	= array(
				'id' => $newsRow['id'],
				'title' => $newsRow['title'],
				'from' 	=> t('news_from', _date(t('php_tdformat'), $newsRow['date']), $newsRow['user']),
				'text' 	=> makebr($newsRow['text']),
				'date' 	=> _date($LNG['php_tdformat'], $newsRow['date'], $newsRow['user']),
				'image' 	=> 'images/'.$newsRow['catID'].'.jpg',
			);
		}
		
		$topicsResult	= $GLOBALS['DATABASE']->query("SELECT tid, title, last_post, topic_firstpost, title_seo FROM forum_topics WHERE tdelete_time = '0' ORDER BY last_post DESC LIMIT 5;");
		$topicsList	= array();
		
		while ($topicsRow = $GLOBALS['DATABASE']->fetchArray($topicsResult))
		{
			$topicsList[]	= array(
				'id' => $topicsRow['tid'],
				'title' => $topicsRow['title'],
				'topic_firstpost' => $topicsRow['topic_firstpost'],
				'title_seo' => $topicsRow['title_seo'],
				'date' 	=> _date($LNG['php_tdformat'], $topicsRow['last_post'], 1),
			);
		}
	
		$this->assign(array(
		'newsList'	=> $newsList,
		'topicsList'	=> $topicsList,
		));
		
		$this->render('page.space.default.tpl');
	}
	
	function update() 
	{		
		global $LNG;
		$newsResult	= $GLOBALS['DATABASE']->query("SELECT id, date, title, text, user, catID FROM ".NEWS." ORDER BY id DESC;");
		$newsList	= array();
		
		
		
		while ($newsRow = $GLOBALS['DATABASE']->fetchArray($newsResult))
		{
			$newsList[]	= array(
				'id' => $newsRow['id'],
				'title' => $newsRow['title'],
				'from' 	=> t('news_from', _date(t('php_tdformat'), $newsRow['date']), $newsRow['user']),
				'text' 	=> makebr($newsRow['text']),
				'date' 	=> _date($LNG['php_tdformat'], $newsRow['date'], $newsRow['user']),
				'image' 	=> 'images/'.$newsRow['catID'].'.jpg',
			);
		}
		$topicsResult	= $GLOBALS['DATABASE']->query("SELECT tid, title, last_post, topic_firstpost, title_seo FROM forum_topics WHERE tdelete_time = '0' ORDER BY last_post DESC LIMIT 5;");
		$topicsList	= array();
		
		while ($topicsRow = $GLOBALS['DATABASE']->fetchArray($topicsResult))
		{
			$topicsList[]	= array(
				'id' => $topicsRow['tid'],
				'title' => $topicsRow['title'],
				'topic_firstpost' => $topicsRow['topic_firstpost'],
				'title_seo' => $topicsRow['title_seo'],
				'date' 	=> _date($LNG['php_tdformat'], $topicsRow['last_post'], 1),
			);
		}
		
	
		$this->assign(array(
		'newsList'	=> $newsList,
		'topicsList'	=> $topicsList,
		));
		
		$this->render('page.update.default.tpl');
	}
}