-- Coluna que informa o tick atual
ALTER TABLE `uni1_config` ADD `tick` INT(11) UNSIGNED NOT NULL DEFAULT '0'
ALTER TABLE `uni1_config` ADD `tick_last_time` INT(11) NOT NULL DEFAULT '0'

ALTER TABLE `uni1_fleets` ADD `tickinicial` INT(11) UNSIGNED NOT NULL DEFAULT '0'
ALTER TABLE `uni1_fleets` ADD `tickfinal` INT(11) UNSIGNED NOT NULL DEFAULT '0'
ALTER TABLE `uni1_fleets` ADD `tickretorno` INT(11) UNSIGNED NOT NULL DEFAULT '0'

ALTER TABLE `uni1_fleets_alarm` ADD `tickinicial` INT(11) UNSIGNED NOT NULL DEFAULT '0'
ALTER TABLE `uni1_fleets_alarm` ADD `tickfinal` INT(11) UNSIGNED NOT NULL DEFAULT '0'
ALTER TABLE `uni1_fleets_alarm` ADD `tickretorno` INT(11) UNSIGNED NOT NULL DEFAULT '0'

ALTER TABLE `uni1_log_fleets` ADD `tickinicial` INT(11) UNSIGNED NOT NULL DEFAULT '0'
ALTER TABLE `uni1_log_fleets` ADD `tickfinal` INT(11) UNSIGNED NOT NULL DEFAULT '0'
ALTER TABLE `uni1_log_fleets` ADD `tickretorno` INT(11) UNSIGNED NOT NULL DEFAULT '0'