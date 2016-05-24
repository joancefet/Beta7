INSERT INTO `uni1_cronjobs` (`cronjobID`, `name`, `isActive`, `min`, `hours`, `dom`, `month`, `dow`, `class`, `nextTime`, `lock`) VALUES
(12, 'Asteroid Cronjon', 1, '25', '9,15,21', '*', '*', '*', 'AsteroidCronJob', 1430551500, NULL);

ALTER TABLE `uni1_planets` ADD `der_deuterium` DOUBLE(50,0) UNSIGNED NOT NULL DEFAULT '0' AFTER `der_crystal`;