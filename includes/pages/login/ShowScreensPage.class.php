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
 * @info $Id: ShowScreensPage.class.php 2640 2013-03-23 19:23:26Z slaver7 $
 * @link http://2moons.cc/
 */


class ShowScreensPage extends AbstractPage
{
	public static $requireModule = 0;

	function __construct() 
	{
		parent::__construct();
	}
	
	function show() 
	{
		$screenshots	= array();
		$directoryIterator = new DirectoryIterator('styles/resource/images/login/screens/');
        foreach ($directoryIterator as $fileinfo) { 
            if (!$fileinfo->isFile())
			{
				continue;
            }			
			
			$thumbnail = 'styles/resource/images/login/screens/'.$fileinfo->getFilename();
			if(file_exists('styles/resource/images/login/screens/thumbnails/'.$fileinfo->getFilename()))
			{
				$thumbnail = 'styles/resource/images/login/screens/thumbnails/'.$fileinfo->getFilename();
			}
			
			$screenshots[]	= array(
				'path' 		=> 'styles/resource/images/login/screens/'.$fileinfo->getFilename(),
				'thumbnail' => $thumbnail,
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
			'screenshots' => $screenshots
			'topicsList' => $topicsList
		));;
		$this->render('page.screens.default.tpl');
	}
}
