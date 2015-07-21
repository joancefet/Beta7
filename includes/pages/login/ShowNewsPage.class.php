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

class ShowNewsPage extends AbstractPage
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
		$id   = HTTP::_GP('id', '');
		$newsResult	= $GLOBALS['DATABASE']->query("SELECT id, date, title, text, catID, user FROM ".NEWS." WHERE id = '".$id."';");
		$newsList	= array();
		
		while ($newsRow = $GLOBALS['DATABASE']->fetchArray($newsResult))
		{
			$newsList[]	= array(
				'id' => $newsRow['id'],
				'title' => $newsRow['title'],
				'from' 	=> t('news_from', _date(t('php_tdformat'), $newsRow['date']), $newsRow['user']),
				'text' 	=> makebr($newsRow['text']),
				'date' 	=> _date($LNG['php_tdformat'], $newsRow['date'], $newsRow['user']),
				'image' => 'images/'.$newsRow['catID'].'.jpg',
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
		
		
		$newsResult1	= $GLOBALS['DATABASE']->query("SELECT id, date, title, text, catID, user FROM ".NEWS." ORDER BY id DESC LIMIT 5;");
		$newsList1	= array();
		
		while ($newsRow1 = $GLOBALS['DATABASE']->fetchArray($newsResult1))
		{
			$newsList1[]	= array(
				'id' => $newsRow1['id'],
				'title' => $newsRow1['title'],
				'from' 	=> t('news_from', _date(t('php_tdformat'), $newsRow1['date']), $newsRow1['user']),
				'text' 	=> makebr($newsRow1['text']),
				'date' 	=> _date($LNG['php_tdformat'], $newsRow1['date'], $newsRow1['user']),
				'image' => 'images/'.$newsRow1['catID'].'.jpg',
			);
		}
		
		$this->assign(array(
			'topicsList'	=> $topicsList,
			'newsList'	=> $newsList,
			'newsList1'	=> $newsList1,
			'actual_link' => 'http://'.$_SERVER['HTTP_HOST'].''.$_SERVER['REQUEST_URI'].'',
			
			
			
			
		));
		
		$this->render('page.news.details.tpl');
	}
	
	
	function update() 
	{	
		global $LNG;
		$newsResult	= $GLOBALS['DATABASE']->query("SELECT id, date, title, text, catID, user FROM ".NEWS." WHERE catID = '1' ORDER BY id DESC LIMIT 5;");
		$newsList	= array();
		
		while ($newsRow = $GLOBALS['DATABASE']->fetchArray($newsResult))
		{
			$newsList[]	= array(	
				'id' => $newsRow['id'],
				'title' => $newsRow['title'],
				'from' 	=> t('news_from', _date(t('php_tdformat'), $newsRow['date']), $newsRow['user']),
				'text' 	=> substr($newsRow['text'],0,160). "...",
				'date' 	=> _date($LNG['php_tdformat'], $newsRow['date'], $newsRow['user']),
				'image' => 'images/'.$newsRow['catID'].'.jpg',
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
			'notif' => 'Innovations in developing',
			'info' => 'News about new additions and changes to the Astro-Mania Game.',
		));
		
		$this->render('page.news.default.tpl');
	}
	function stock() 
	{	
		global $LNG;
		$newsResult	= $GLOBALS['DATABASE']->query("SELECT id, date, title, text, catID, user FROM ".NEWS." WHERE catID = '2' ORDER BY id DESC LIMIT 5;");
		$newsList	= array();
		
		while ($newsRow = $GLOBALS['DATABASE']->fetchArray($newsResult))
		{
			$newsList[]	= array(
				'id' => $newsRow['id'],
				'title' => $newsRow['title'],
				'from' 	=> t('news_from', _date(t('php_tdformat'), $newsRow['date']), $newsRow['user']),
				'text' 	=> substr($newsRow['text'],0,160). "...",
				'date' 	=> _date($LNG['php_tdformat'], $newsRow['date'], $newsRow['user']),
				'image' => 'images/'.$newsRow['catID'].'.jpg',
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
			'topicsList'	=> $topicsList,
			'newsList'	=> $newsList,
			'notif' => 'Stock',
			'info' => 'News about the actions undertaken in the Astro-Mania server.',
		));
		
		$this->render('page.news.default.tpl');
	}
	function contest() 
	{	
		global $LNG;
		$newsResult	= $GLOBALS['DATABASE']->query("SELECT id, date, title, text, catID, user FROM ".NEWS." WHERE catID = '3' ORDER BY id DESC LIMIT 5;");
		$newsList	= array();
		
		while ($newsRow = $GLOBALS['DATABASE']->fetchArray($newsResult))
		{
			$newsList[]	= array(
				'id' => $newsRow['id'],
				'title' => $newsRow['title'],
				'from' 	=> t('news_from', _date(t('php_tdformat'), $newsRow['date']), $newsRow['user']),
				'text' 	=> substr($newsRow['text'],0,160). "...",
				'date' 	=> _date($LNG['php_tdformat'], $newsRow['date'], $newsRow['user']),
				'image' => 'images/'.$newsRow['catID'].'.jpg',
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
			'topicsList'	=> $topicsList,
			'newsList'	=> $newsList,
			'notif' => 'Contests',
			'info' => 'Competitions, gaming game events, a variety of events in Astro-Mania.',
		));
		
		$this->render('page.news.default.tpl');
	}
	function notif() 
	{	
		global $LNG;
		$newsResult	= $GLOBALS['DATABASE']->query("SELECT id, date, title, text, catID, user FROM ".NEWS." WHERE catID = '4' ORDER BY id DESC LIMIT 5;");
		$newsList	= array();
		
		while ($newsRow = $GLOBALS['DATABASE']->fetchArray($newsResult))
		{
			$newsList[]	= array(
				'id' => $newsRow['id'],
				'title' => $newsRow['title'],
				'from' 	=> t('news_from', _date(t('php_tdformat'), $newsRow['date']), $newsRow['user']),
				'text' 	=> substr($newsRow['text'],0,160). "...",
				'date' 	=> _date($LNG['php_tdformat'], $newsRow['date'], $newsRow['user']),
				'image' => 'images/'.$newsRow['catID'].'.jpg',
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
			'topicsList'	=> $topicsList,
			'newsList'	=> $newsList,
			'notif' => 'Notifications',
			'info' => 'Messages about updates, technical papers on the services of the game, forum, portal.',
			
		));
		
		$this->render('page.news.default.tpl');
	}
	
	function all() 
	{	
		global $LNG;
		$newsResult	= $GLOBALS['DATABASE']->query("SELECT id, date, title, text, catID, user FROM ".NEWS." ORDER BY id DESC LIMIT 5;");
		$newsList	= array();
		
		while ($newsRow = $GLOBALS['DATABASE']->fetchArray($newsResult))
		{
			$newsList[]	= array(
				'id' => $newsRow['id'],
				'title' => $newsRow['title'],
				'from' 	=> t('news_from', _date(t('php_tdformat'), $newsRow['date']), $newsRow['user']),
				'text' 	=> substr($newsRow['text'],0,160). "...",
				'date' 	=> _date($LNG['php_tdformat'], $newsRow['date'], $newsRow['user']),
				'image' => 'images/'.$newsRow['catID'].'.jpg',
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
			'notif' => 'All the news',
			'info' => '',
			
		));
		
		$this->render('page.news.default.tpl');
	}
}