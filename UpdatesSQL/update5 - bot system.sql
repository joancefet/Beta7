CREATE TABLE IF NOT EXISTS `uni1_bots` (
      `id` bigint(11) NOT NULL AUTO_INCREMENT,
      `player` bigint(11) NOT NULL,
      `last_time` int(11) NOT NULL,
      `every_time` int(11) NOT NULL,
      `last_planet` bigint(11) NOT NULL,
      `type` int(11) NOT NULL,
      PRIMARY KEY (`id`)
    ) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0;
    
    INSERT INTO `uni1_cronjobs` (`cronjobID`, `name`, `isActive`, `min`, `hours`, `dom`, `month`, `dow`, `class`, `nextTime`, `lock`) VALUES (NULL, 'bot', '1', '*/5', '*', '*', '*', '*', 'BotCronjob', '0', NULL);