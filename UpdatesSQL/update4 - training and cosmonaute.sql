-- Definir cosmonaute_day para todos os dias
ALTER TABLE `uni1_config` MODIFY COLUMN `cosmonaute`  tinyint(3) UNSIGNED NOT NULL DEFAULT 1 AFTER `end_game`;

-- Habilitar treinamento
ALTER TABLE `uni1_users` MODIFY COLUMN `training`  tinyint(3) UNSIGNED NOT NULL DEFAULT 0 AFTER `v3`;