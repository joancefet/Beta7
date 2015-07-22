-- Create the races table
CREATE TABLE IF NOT EXISTS `uni1_races` (  `race_id` int(11) NOT NULL AUTO_INCREMENT,  `race_name` varchar(50) NOT NULL,  `race_fleet_construction_time` float NOT NULL DEFAULT '1',  `race_research_construction_time` float NOT NULL DEFAULT '1',  `race_building_construction_time` float NOT NULL DEFAULT '1',  `race_defence_construction_time` float NOT NULL DEFAULT '1',  UNIQUE KEY `race_id` (`race_id`)) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5;

-- Fil the races table with the 4 standard races
INSERT INTO `uni1_races` (`race_id`, `race_name`, `race_fleet_construction_time`, `race_research_construction_time`, `race_building_construction_time`, `race_defence_construction_time`) VALUES(1, 'Altairians', 0.8, 1, 1, 1),(2, 'Cetians', 1, 0.8, 1, 1),(3, 'Jawas', 1, 1, 0.8, 1),(4, 'Nordics', 1, 1, 1, 0.8);

-- Add column to the users table so we can find what race a user is
ALTER TABLE `uni1_users` ADD `race` TINYINT UNSIGNED NOT NULL DEFAULT '0' AFTER `authlevel`

-- Add new column to the vars table so we can make race specific buildings / ships / researches / defenses
ALTER TABLE  `uni1_vars` ADD  `specificRace` INT NOT NULL DEFAULT  '0'

-- Alter row in vars so that one building is race specific (Orbital station)
UPDATE `uni1_vars` SET  `specificRace` =  '1' WHERE  `uni1_vars`.`elementID` =411;

-- Change the validation table so that the race can be filt uppon registration (Thx for reunien for noticing)
ALTER TABLE `uni1_users_valid` ADD `race` TINYINT UNSIGNED NOT NULL DEFAULT '0' AFTER `language`;




