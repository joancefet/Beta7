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
 * @info $Id: ShowDisclamerPage.class.php 2416 2012-11-10 00:12:51Z slaver7 $
 * @link http://2moons.cc/
 */


class ShowJobsPage extends AbstractPage
{
	public static $requireModule = 0;

	function __construct() 
	{
		parent::__construct();
		$this->setWindow('light');
	}
	function info() 
	{
		global $LNG, $USER;
		$id   = HTTP::_GP('id', '');
		$newsResult	= $GLOBALS['DATABASE']->query("SELECT id, date, title, text, catID FROM uni1_jobs WHERE is_active = '1' AND id = '".$id."' ;");
		$newsList	= array();
		
		while ($newsRow = $GLOBALS['DATABASE']->fetchArray($newsResult))
		{
			$newsList[]	= array(
				'id' => $newsRow['id'],
				'title' => $newsRow['title'],
				'text' 	=> makebr($newsRow['text']),
				'date' 	=> _date($LNG['php_tdformat'], $newsRow['date'], $USER),
				'image' => 'images/jobs/'.$newsRow['catID'].'.png',
			);
		} 
		
		
		$newsResult1	= $GLOBALS['DATABASE']->query("SELECT id, date, title, text, catID FROM uni1_jobs WHERE is_active = '1' ORDER BY id DESC LIMIT 6;");
		$newsList1	= array();
		
		while ($newsRow1 = $GLOBALS['DATABASE']->fetchArray($newsResult1))
		{
			$newsList1[]	= array(
				'id' => $newsRow1['id'],
				'title' => $newsRow1['title'],
				'text' 	=> makebr($newsRow1['text']),
				'date' 	=> _date($LNG['php_tdformat'], $newsRow1['date'], $USER),
				'image' => 'images/jobs/'.$newsRow1['catID'].'.png',
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
			'newsList1'	=> $newsList1,
			'topicsList'	=> $topicsList,
			'notif'	=> 'Jobs',
			'info'	=> '',
			'actual_link' => 'http://'.$_SERVER['HTTP_HOST'].''.$_SERVER['REQUEST_URI'].'',
			
		));
		
		$this->render('page.jobs.show.tpl');
	}
	
	function show() 
	{
		global $LNG, $USER;
		$newsResult	= $GLOBALS['DATABASE']->query("SELECT id, date, title, text, catID FROM uni1_jobs WHERE is_active = '1' ORDER BY id DESC LIMIT 6;");
		$newsList	= array();
		
		while ($newsRow = $GLOBALS['DATABASE']->fetchArray($newsResult))
		{
			$newsList[]	= array(
				'id' => $newsRow['id'],
				'title' => $newsRow['title'],
				'text' 	=> substr($newsRow['text'],0,160). "...",
				'date' 	=> _date($LNG['php_tdformat'], $newsRow['date'], $USER),
				'image' => 'images/jobs/'.$newsRow['catID'].'.png',
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
			'notif'	=> 'Jobs',
			'info'	=> 'Here will be listed all open applications to become a staff member',
			
		));
		
		$this->render('page.jobs.default.tpl');
	}
}
