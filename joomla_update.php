#
#<?php die('Forbidden.'); ?>
#Date: 2022-03-11 08:59:57 UTC
#Software: Joomla Platform 13.1.0 Stable [ Curiosity ] 24-Apr-2013 00:00 GMT

#Fields: datetime	priority clientip	category	message
2022-03-11T08:59:57+00:00	INFO 127.0.0.1	update	Update started by user Super User (954). Old version is 3.10.6.
2022-03-11T08:59:58+00:00	INFO 127.0.0.1	update	Downloading update file from https://s3-us-west-2.amazonaws.com/joomla-official-downloads/joomladownloads/joomla4/Joomla_4.1.0-Stable-Update_Package.zip?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIA6LXDJLNUINX2AVMH%2F20220311%2Fus-west-2%2Fs3%2Faws4_request&X-Amz-Date=20220311T085954Z&X-Amz-Expires=60&X-Amz-SignedHeaders=host&X-Amz-Signature=09da76ec0ae561eeec9a3d18ad82163db57f98137aae8f967fd181250bb515d2.
2022-03-11T09:00:07+00:00	INFO 127.0.0.1	update	File Joomla_4.1.0-Stable-Update_Package.zip downloaded.
2022-03-11T09:00:07+00:00	INFO 127.0.0.1	update	Starting installation of new version.
2022-03-11T09:00:17+00:00	INFO 127.0.0.1	update	Finalising installation.
2022-03-11T09:00:17+00:00	INFO 127.0.0.1	update	Start of SQL updates.
2022-03-11T09:00:17+00:00	INFO 127.0.0.1	update	The current database version (schema) is 3.10.0-2021-05-28.
2022-03-11T09:00:17+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-03-05. Query text: INSERT INTO `#__extensions` (`name`, `type`, `element`, `folder`, `client_id`, `.
2022-03-11T09:00:17+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-03-05. Query text: DELETE FROM `#__extensions` WHERE `type` = 'library' AND `element` = 'phputf8';.
2022-03-11T09:00:17+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-03-05. Query text: DELETE FROM `#__extensions` WHERE `type` = 'plugin' AND `element` = 'p3p' AND `f.
2022-03-11T09:00:17+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-03-05. Query text: ALTER TABLE `#__user_keys` DROP COLUMN `invalid`;.
2022-03-11T09:00:17+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-03-05. Query text: INSERT INTO `#__extensions` (`name`, `type`, `element`, `folder`, `client_id`, `.
2022-03-11T09:00:17+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-03-05. Query text: INSERT INTO `#__template_styles` (`template`, `client_id`, `home`, `title`, `inh.
2022-03-11T09:00:17+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-03-05. Query text: UPDATE `#__modules` SET `position` = 'status' WHERE `module` = 'mod_version' AND.
2022-03-11T09:00:17+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-03-05. Query text: DELETE FROM `#__extensions` WHERE `type` = 'template' AND `element` = 'hathor' A.
2022-03-11T09:00:17+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-03-05. Query text: DELETE FROM `#__template_styles` WHERE `template` = 'hathor' AND `client_id` = 1.
2022-03-11T09:00:17+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-03-05. Query text: DELETE FROM `#__extensions` WHERE `type` = 'template' AND `element` = 'isis' AND.
2022-03-11T09:00:17+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-03-05. Query text: DELETE FROM `#__template_styles` WHERE `template` = 'isis' AND `client_id` = 1;.
2022-03-11T09:00:17+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-03-05. Query text: DELETE FROM `#__extensions` WHERE `type` = 'template' AND `element` = 'protostar.
2022-03-11T09:00:17+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-03-05. Query text: DELETE FROM `#__template_styles` WHERE `template` = 'protostar' AND `client_id` .
2022-03-11T09:00:17+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-03-05. Query text: DELETE FROM `#__extensions` WHERE `type` = 'template' AND `element` = 'beez3' AN.
2022-03-11T09:00:17+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-03-05. Query text: DELETE FROM `#__template_styles` WHERE `template` = 'beez3' AND `client_id` = 0;.
2022-03-11T09:00:17+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-03-05. Query text: DELETE FROM `#__extensions` WHERE `name` = 'mod_submenu';.
2022-03-11T09:00:17+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-03-05. Query text: ALTER TABLE `#__extensions` DROP COLUMN `system_data`;.
2022-03-11T09:00:17+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-03-05. Query text: INSERT INTO `#__extensions` (`name`, `type`, `element`, `folder`, `client_id`, `.
2022-03-11T09:00:17+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-03-05. Query text: UPDATE `#__menu` SET `link` = 'index.php?option=com_config&view=config' WHERE `l.
2022-03-11T09:00:17+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-03-05. Query text: UPDATE `#__menu` SET `link` = 'index.php?option=com_config&view=templates' WHERE.
2022-03-11T09:00:17+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-03-05. Query text: ALTER TABLE `#__extensions` ADD COLUMN `changelogurl` text AFTER `element`;.
2022-03-11T09:00:17+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-03-05. Query text: ALTER TABLE `#__updates` ADD COLUMN `changelogurl` text AFTER `infourl`;.
2022-03-11T09:00:17+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-03-05. Query text: INSERT INTO `#__extensions` (`name`, `type`, `element`, `folder`, `client_id`, `.
2022-03-11T09:00:17+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-03-05. Query text: INSERT INTO `#__postinstall_messages` (`extension_id`, `title_key`, `description.
2022-03-11T09:00:17+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-03-05. Query text: DELETE FROM `#__extensions` WHERE `type` = 'library' AND `element` = 'idna_conve.
2022-03-11T09:00:17+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-03-05. Query text: ALTER TABLE `#__modules` CHANGE `content` `content` TEXT NULL;.
2022-03-11T09:00:17+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-05-15. Query text: CREATE TABLE IF NOT EXISTS `#__workflows` (   `id` int NOT NULL AUTO_INCREMENT, .
2022-03-11T09:00:17+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-05-15. Query text: INSERT INTO `#__workflows` (`id`, `asset_id`, `published`, `title`, `description.
2022-03-11T09:00:17+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-05-15. Query text: CREATE TABLE IF NOT EXISTS `#__workflow_associations` (   `item_id` int NOT NULL.
2022-03-11T09:00:17+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-05-15. Query text: CREATE TABLE IF NOT EXISTS `#__workflow_stages` (   `id` int NOT NULL AUTO_INCRE.
2022-03-11T09:00:17+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-05-15. Query text: INSERT INTO `#__workflow_stages` (`id`, `asset_id`, `ordering`, `workflow_id`, `.
2022-03-11T09:00:17+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-05-15. Query text: CREATE TABLE IF NOT EXISTS `#__workflow_transitions` (   `id` int NOT NULL AUTO_.
2022-03-11T09:00:17+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-05-15. Query text: INSERT INTO `#__workflow_transitions` (`id`, `asset_id`, `published`, `ordering`.
2022-03-11T09:00:17+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-05-15. Query text: INSERT INTO `#__extensions` (`package_id`, `name`, `type`, `element`, `folder`, .
2022-03-11T09:00:17+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-05-15. Query text: INSERT INTO `#__workflow_associations` (`item_id`, `stage_id`, `extension`) SELE.
2022-03-11T09:00:17+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-19. Query text: ALTER TABLE `#__user_notes` CHANGE `modified_user_id` `modified_user_id` int uns.
2022-03-11T09:00:17+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-19. Query text: INSERT INTO `#__extensions` (`package_id`, `name`, `type`, `element`, `folder`, .
2022-03-11T09:00:17+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-19. Query text: CREATE TABLE IF NOT EXISTS `#__template_overrides` (   `id` int unsigned NOT NUL.
2022-03-11T09:00:17+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-19. Query text: INSERT INTO `#__extensions` (`package_id`, `name`, `type`, `element`, `folder`, .
2022-03-11T09:00:17+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: INSERT INTO `#__extensions` (`package_id`, `name`, `type`, `element`, `folder`, .
2022-03-11T09:00:17+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: TRUNCATE TABLE `#__finder_filters`;.
2022-03-11T09:00:18+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: ALTER TABLE `#__finder_filters` MODIFY `created_by` int unsigned NOT NULL DEFAUL.
2022-03-11T09:00:18+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: ALTER TABLE `#__finder_filters` MODIFY `created_by_alias` varchar(255) NOT NULL .
2022-03-11T09:00:18+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: ALTER TABLE `#__finder_filters` MODIFY `created` datetime NOT NULL;.
2022-03-11T09:00:18+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: ALTER TABLE `#__finder_filters` MODIFY `modified` datetime NOT NULL;.
2022-03-11T09:00:18+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: ALTER TABLE `#__finder_filters` MODIFY `checked_out_time` datetime NULL DEFAULT .
2022-03-11T09:00:18+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: ALTER TABLE `#__finder_filters` CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4.
2022-03-11T09:00:18+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: ALTER TABLE `#__finder_filters` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_un.
2022-03-11T09:00:18+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: TRUNCATE TABLE `#__finder_links`;.
2022-03-11T09:00:18+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: ALTER TABLE `#__finder_links` CHANGE `route` `route` varchar(400);.
2022-03-11T09:00:18+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: ALTER TABLE `#__finder_links` CHANGE `language` `language` CHAR(7) NOT NULL DEFA.
2022-03-11T09:00:18+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: ALTER TABLE `#__finder_links` MODIFY `state` int NOT NULL DEFAULT 1;.
2022-03-11T09:00:18+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: ALTER TABLE `#__finder_links` MODIFY `access` int NOT NULL DEFAULT 0;.
2022-03-11T09:00:18+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: ALTER TABLE `#__finder_links` MODIFY `indexdate` datetime NOT NULL;.
2022-03-11T09:00:18+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: ALTER TABLE `#__finder_links` MODIFY `publish_start_date` datetime NULL DEFAULT .
2022-03-11T09:00:18+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: ALTER TABLE `#__finder_links` MODIFY `publish_end_date` datetime NULL DEFAULT NU.
2022-03-11T09:00:18+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: ALTER TABLE `#__finder_links` MODIFY `start_date` datetime NULL DEFAULT NULL;.
2022-03-11T09:00:18+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: ALTER TABLE `#__finder_links` MODIFY `end_date` datetime NULL DEFAULT NULL;.
2022-03-11T09:00:18+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: ALTER TABLE `#__finder_links` ADD INDEX `idx_language` (`language`);.
2022-03-11T09:00:18+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: ALTER TABLE `#__finder_links` CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_u.
2022-03-11T09:00:18+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: ALTER TABLE `#__finder_links` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unic.
2022-03-11T09:00:18+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: CREATE TABLE `#__finder_links_terms` ( 	`link_id` INT UNSIGNED NOT NULL, 	`term_.
2022-03-11T09:00:18+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: DROP TABLE `#__finder_links_terms0`;.
2022-03-11T09:00:18+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: DROP TABLE `#__finder_links_terms1`;.
2022-03-11T09:00:18+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: DROP TABLE `#__finder_links_terms2`;.
2022-03-11T09:00:18+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: DROP TABLE `#__finder_links_terms3`;.
2022-03-11T09:00:18+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: DROP TABLE `#__finder_links_terms4`;.
2022-03-11T09:00:18+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: DROP TABLE `#__finder_links_terms5`;.
2022-03-11T09:00:18+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: DROP TABLE `#__finder_links_terms6`;.
2022-03-11T09:00:18+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: DROP TABLE `#__finder_links_terms7`;.
2022-03-11T09:00:18+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: DROP TABLE `#__finder_links_terms8`;.
2022-03-11T09:00:18+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: DROP TABLE `#__finder_links_terms9`;.
2022-03-11T09:00:18+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: DROP TABLE `#__finder_links_termsa`;.
2022-03-11T09:00:18+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: DROP TABLE `#__finder_links_termsb`;.
2022-03-11T09:00:18+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: DROP TABLE `#__finder_links_termsc`;.
2022-03-11T09:00:18+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: DROP TABLE `#__finder_links_termsd`;.
2022-03-11T09:00:18+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: DROP TABLE `#__finder_links_termse`;.
2022-03-11T09:00:18+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: DROP TABLE `#__finder_links_termsf`;.
2022-03-11T09:00:18+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: CREATE TABLE IF NOT EXISTS `#__finder_logging` (   `searchterm` VARCHAR(255) NOT.
2022-03-11T09:00:18+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: ALTER TABLE `#__finder_logging` CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4.
2022-03-11T09:00:18+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: ALTER TABLE `#__finder_logging` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_un.
2022-03-11T09:00:18+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: DROP TABLE `#__finder_taxonomy`;.
2022-03-11T09:00:18+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: CREATE TABLE IF NOT EXISTS `#__finder_taxonomy` ( 	`id` INT UNSIGNED NOT NULL AU.
2022-03-11T09:00:18+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: INSERT INTO `#__finder_taxonomy` (`id`, `parent_id`, `lft`, `rgt`, `level`, `pat.
2022-03-11T09:00:18+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: TRUNCATE TABLE `#__finder_taxonomy_map`;.
2022-03-11T09:00:18+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: ALTER TABLE `#__finder_taxonomy_map` CONVERT TO CHARACTER SET utf8mb4 COLLATE ut.
2022-03-11T09:00:19+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: ALTER TABLE `#__finder_taxonomy_map` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8m.
2022-03-11T09:00:19+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: TRUNCATE TABLE `#__finder_terms`;.
2022-03-11T09:00:19+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: ALTER TABLE `#__finder_terms` CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_u.
2022-03-11T09:00:19+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: ALTER TABLE `#__finder_terms` CHANGE `language` `language` CHAR(7) NOT NULL DEFA.
2022-03-11T09:00:19+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: ALTER TABLE `#__finder_terms` MODIFY `term` varchar(75) CHARACTER SET utf8mb4 CO.
2022-03-11T09:00:19+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: ALTER TABLE `#__finder_terms` MODIFY `stem` varchar(75) CHARACTER SET utf8mb4 CO.
2022-03-11T09:00:19+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: ALTER TABLE `#__finder_terms` MODIFY `soundex` varchar(75) CHARACTER SET utf8mb4.
2022-03-11T09:00:19+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: ALTER TABLE `#__finder_terms` DROP INDEX `idx_term`;.
2022-03-11T09:00:19+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: ALTER TABLE `#__finder_terms` ADD INDEX `idx_stem` (`stem`);.
2022-03-11T09:00:19+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: ALTER TABLE `#__finder_terms` ADD INDEX `idx_language` (`language`);.
2022-03-11T09:00:19+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: ALTER TABLE `#__finder_terms` ADD UNIQUE INDEX `idx_term_language` (`term`, `lan.
2022-03-11T09:00:19+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: ALTER TABLE `#__finder_terms` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unic.
2022-03-11T09:00:19+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: DROP TABLE IF EXISTS `#__finder_terms_common`;.
2022-03-11T09:00:19+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: CREATE TABLE `#__finder_terms_common` (   `term` varchar(75) CHARACTER SET utf8m.
2022-03-11T09:00:19+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: INSERT INTO `#__finder_terms_common` (`term`, `language`, `custom`) VALUES 	('i'.
2022-03-11T09:00:19+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: TRUNCATE TABLE `#__finder_tokens`;.
2022-03-11T09:00:19+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: ALTER TABLE `#__finder_tokens` CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_.
2022-03-11T09:00:19+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: ALTER TABLE `#__finder_tokens` CHANGE `language` `language` CHAR(7) NOT NULL DEF.
2022-03-11T09:00:19+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: ALTER TABLE `#__finder_tokens` MODIFY `term` varchar(75) CHARACTER SET utf8mb4 C.
2022-03-11T09:00:19+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: ALTER TABLE `#__finder_tokens` MODIFY `stem` varchar(75) CHARACTER SET utf8mb4 C.
2022-03-11T09:00:19+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: ALTER TABLE `#__finder_tokens` ADD INDEX `idx_stem` (`stem`);.
2022-03-11T09:00:19+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: ALTER TABLE `#__finder_tokens` ADD INDEX `idx_language` (`language`);.
2022-03-11T09:00:19+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: ALTER TABLE `#__finder_tokens` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_uni.
2022-03-11T09:00:19+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: TRUNCATE TABLE `#__finder_tokens_aggregate`;.
2022-03-11T09:00:19+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: ALTER TABLE `#__finder_tokens_aggregate` CONVERT TO CHARACTER SET utf8mb4 COLLAT.
2022-03-11T09:00:19+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: ALTER TABLE `#__finder_tokens_aggregate` DROP COLUMN `map_suffix`;.
2022-03-11T09:00:19+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: ALTER TABLE `#__finder_tokens_aggregate` CHANGE `language` `language` CHAR(7) NO.
2022-03-11T09:00:19+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: ALTER TABLE `#__finder_tokens_aggregate` MODIFY `term` varchar(75) CHARACTER SET.
2022-03-11T09:00:19+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: ALTER TABLE `#__finder_tokens_aggregate` MODIFY `stem` varchar(75) CHARACTER SET.
2022-03-11T09:00:19+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: ALTER TABLE `#__finder_tokens_aggregate` MODIFY `term_weight` float unsigned NOT.
2022-03-11T09:00:19+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: ALTER TABLE `#__finder_tokens_aggregate` MODIFY `context_weight` float unsigned .
2022-03-11T09:00:19+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: ALTER TABLE `#__finder_tokens_aggregate` MODIFY `total_weight` float unsigned NO.
2022-03-11T09:00:19+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: ALTER TABLE `#__finder_tokens_aggregate` DEFAULT CHARACTER SET utf8mb4 COLLATE u.
2022-03-11T09:00:19+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: ALTER TABLE `#__finder_types` MODIFY `mime` varchar(100) NOT NULL DEFAULT '';.
2022-03-11T09:00:20+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: ALTER TABLE `#__finder_types` CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_u.
2022-03-11T09:00:20+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-07-29. Query text: ALTER TABLE `#__finder_types` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unic.
2022-03-11T09:00:20+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-08-29. Query text: ALTER TABLE `#__ucm_content` MODIFY `core_created_time` datetime NOT NULL;.
2022-03-11T09:00:20+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-08-29. Query text: ALTER TABLE `#__ucm_content` MODIFY `core_modified_time` datetime NOT NULL;.
2022-03-11T09:00:20+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-08-29. Query text: ALTER TABLE `#__ucm_content` MODIFY `core_publish_up` datetime NULL DEFAULT NULL.
2022-03-11T09:00:20+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-08-29. Query text: ALTER TABLE `#__ucm_content` MODIFY `core_publish_down` datetime NULL DEFAULT NU.
2022-03-11T09:00:20+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-08-29. Query text: UPDATE `#__ucm_content` SET `core_checked_out_time` = '0000-00-00 00:00:00' WHER.
2022-03-11T09:00:20+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-08-29. Query text: ALTER TABLE `#__ucm_content` MODIFY `core_checked_out_time` datetime NULL DEFAUL.
2022-03-11T09:00:20+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-08-29. Query text: ALTER TABLE `#__modules` MODIFY `publish_up` datetime NULL DEFAULT NULL;.
2022-03-11T09:00:20+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-08-29. Query text: ALTER TABLE `#__modules` MODIFY `publish_down` datetime NULL DEFAULT NULL;.
2022-03-11T09:00:20+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-08-29. Query text: ALTER TABLE `#__modules` MODIFY `checked_out_time` datetime NULL DEFAULT NULL;.
2022-03-11T09:00:20+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-08-29. Query text: UPDATE `#__modules` SET `publish_up` = NULL WHERE `publish_up` = '0000-00-00 00:.
2022-03-11T09:00:20+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-08-29. Query text: UPDATE `#__modules` SET `publish_down` = NULL WHERE `publish_down` = '0000-00-00.
2022-03-11T09:00:20+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2018-08-29. Query text: UPDATE `#__modules` SET `checked_out_time` = NULL WHERE `checked_out_time` = '00.
2022-03-11T09:00:20+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-03-09. Query text: UPDATE `#__extensions` SET `client_id` = 1 WHERE `name` = 'com_mailto';.
2022-03-11T09:00:20+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-03-09. Query text: UPDATE `#__extensions` SET `client_id` = 1 WHERE `name` = 'com_wrapper';.
2022-03-11T09:00:20+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-03-09. Query text: UPDATE `#__content_types` SET `router` = '' WHERE `type_alias` = 'com_users.user.
2022-03-11T09:00:20+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-03-09. Query text: INSERT INTO `#__extensions` (`package_id`, `name`, `type`, `element`, `folder`, .
2022-03-11T09:00:20+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-03-09. Query text: INSERT INTO `#__extensions` (`name`, `type`, `element`, `folder`, `client_id`, `.
2022-03-11T09:00:20+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-03-09. Query text: CREATE TABLE IF NOT EXISTS `#__mail_templates` (   `template_id` VARCHAR(127) NO.
2022-03-11T09:00:20+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-03-09. Query text: INSERT INTO `#__mail_templates` (`template_id`, `language`, `subject`, `body`, `.
2022-03-11T09:00:20+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-03-09. Query text: DELETE FROM `#__menu` WHERE `link` = 'index.php?option=com_postinstall' AND `men.
2022-03-11T09:00:20+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-03-09. Query text: DELETE FROM `#__menu` WHERE `link` = 'index.php?option=com_redirect' AND `menuty.
2022-03-11T09:00:20+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-03-09. Query text: DELETE FROM `#__menu` WHERE `link` = 'index.php?option=com_joomlaupdate' AND `me.
2022-03-11T09:00:20+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-03-09. Query text: INSERT INTO `#__extensions` (`package_id`, `name`, `type`, `element`, `folder`, .
2022-03-11T09:00:20+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-03-30. Query text: ALTER TABLE `#__menu` ADD COLUMN `publish_up` datetime;.
2022-03-11T09:00:20+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-03-30. Query text: ALTER TABLE `#__menu` ADD COLUMN `publish_down` datetime;.
2022-03-11T09:00:20+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-03-30. Query text: ALTER TABLE `#__menu` MODIFY `checked_out_time` datetime NULL DEFAULT NULL;.
2022-03-11T09:00:20+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-03-30. Query text: UPDATE `#__menu` SET `checked_out_time` = NULL WHERE `checked_out_time` = '0000-.
2022-03-11T09:00:20+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-04-15. Query text: INSERT INTO `#__extensions` (`package_id`, `name`, `type`, `element`, `folder`, .
2022-03-11T09:00:20+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-04-15. Query text: INSERT INTO `#__extensions` (`package_id`, `name`, `type`, `element`, `folder`, .
2022-03-11T09:00:20+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-04-22. Query text: ALTER TABLE `#__contact_details` MODIFY `created` datetime NOT NULL;.
2022-03-11T09:00:20+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-04-22. Query text: ALTER TABLE `#__contact_details` MODIFY `modified` datetime NOT NULL;.
2022-03-11T09:00:20+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-04-22. Query text: ALTER TABLE `#__contact_details` MODIFY `publish_up` datetime NULL DEFAULT NULL;.
2022-03-11T09:00:20+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-04-22. Query text: ALTER TABLE `#__contact_details` MODIFY `publish_down` datetime NULL DEFAULT NUL.
2022-03-11T09:00:20+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-04-22. Query text: ALTER TABLE `#__contact_details` MODIFY `checked_out_time` datetime NULL DEFAULT.
2022-03-11T09:00:20+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-04-22. Query text: UPDATE `#__contact_details` SET `created` = '1980-01-01 00:00:00' WHERE `created.
2022-03-11T09:00:20+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-04-22. Query text: UPDATE `#__contact_details` SET `modified` = `created`, `modified_by` = `created.
2022-03-11T09:00:20+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-04-22. Query text: UPDATE `#__contact_details` SET `publish_up` = NULL WHERE `publish_up` = '0000-0.
2022-03-11T09:00:20+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-04-22. Query text: UPDATE `#__contact_details` SET `publish_down` = NULL WHERE `publish_down` = '00.
2022-03-11T09:00:20+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-04-22. Query text: UPDATE `#__contact_details` SET `checked_out_time` = NULL WHERE `checked_out_tim.
2022-03-11T09:00:20+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-04-22. Query text: UPDATE `#__ucm_content` SET `core_created_time` = '1980-01-01 00:00:00'  WHERE `.
2022-03-11T09:00:20+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-04-22. Query text: UPDATE `#__ucm_content` SET `core_modified_time` = `core_created_time`  WHERE `c.
2022-03-11T09:00:20+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-04-22. Query text: UPDATE `#__ucm_content` SET `core_publish_up` = NULL  WHERE `core_type_alias` = .
2022-03-11T09:00:20+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-04-22. Query text: UPDATE `#__ucm_content` SET `core_publish_down` = NULL  WHERE `core_type_alias` .
2022-03-11T09:00:20+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-04-22. Query text: UPDATE `#__ucm_content` SET `core_checked_out_time` = NULL  WHERE `core_type_ali.
2022-03-11T09:00:20+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-05-20. Query text: UPDATE `#__menu` SET `link`='index.php?option=com_banners&view=banners' WHERE `m.
2022-03-11T09:00:20+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-05-20. Query text: UPDATE `#__menu` SET `link`='index.php?option=com_categories&view=categories&ext.
2022-03-11T09:00:20+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-05-20. Query text: UPDATE `#__menu` SET `link`='index.php?option=com_contact&view=contacts' WHERE `.
2022-03-11T09:00:20+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-05-20. Query text: UPDATE `#__menu` SET `link`='index.php?option=com_categories&view=categories&ext.
2022-03-11T09:00:20+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-05-20. Query text: UPDATE `#__menu` SET `link`='index.php?option=com_newsfeeds&view=newsfeeds' WHER.
2022-03-11T09:00:20+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-05-20. Query text: UPDATE `#__menu` SET `link`='index.php?option=com_categories&view=categories&ext.
2022-03-11T09:00:20+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-05-20. Query text: UPDATE `#__menu` SET `link`='index.php?option=com_redirect&view=links' WHERE `me.
2022-03-11T09:00:20+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-05-20. Query text: UPDATE `#__menu` SET `link`='index.php?option=com_search&view=searches' WHERE `m.
2022-03-11T09:00:20+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-05-20. Query text: UPDATE `#__menu` SET `link`='index.php?option=com_finder&view=index' WHERE `menu.
2022-03-11T09:00:20+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-05-20. Query text: UPDATE `#__menu` SET `link`='index.php?option=com_tags&view=tags' WHERE `menutyp.
2022-03-11T09:00:20+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-05-20. Query text: UPDATE `#__menu` SET `link`='index.php?option=com_associations&view=associations.
2022-03-11T09:00:20+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-05-20. Query text: ALTER TABLE `#__extensions` ADD COLUMN `note` varchar(255) AFTER `state`;.
2022-03-11T09:00:20+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-06-29. Query text: ALTER TABLE `#__banners` MODIFY `created` datetime NOT NULL;.
2022-03-11T09:00:20+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-06-29. Query text: ALTER TABLE `#__banners` MODIFY `modified` datetime NOT NULL;.
2022-03-11T09:00:20+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-06-29. Query text: ALTER TABLE `#__banners` MODIFY `reset` datetime NULL DEFAULT NULL;.
2022-03-11T09:00:20+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-06-29. Query text: ALTER TABLE `#__banners` MODIFY `publish_up` datetime NULL DEFAULT NULL;.
2022-03-11T09:00:20+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-06-29. Query text: ALTER TABLE `#__banners` MODIFY `publish_down` datetime NULL DEFAULT NULL;.
2022-03-11T09:00:20+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-06-29. Query text: ALTER TABLE `#__banners` MODIFY `checked_out_time` datetime NULL DEFAULT NULL;.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-06-29. Query text: ALTER TABLE `#__banner_clients` MODIFY `checked_out_time` datetime NULL DEFAULT .
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-06-29. Query text: UPDATE `#__banners` SET `created` = '1980-01-01 00:00:00' WHERE `created` = '000.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-06-29. Query text: UPDATE `#__banners` SET `modified` = `created`, `modified_by` = `created_by` WHE.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-06-29. Query text: UPDATE `#__banners` SET `reset` = NULL WHERE `reset` = '0000-00-00 00:00:00';.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-06-29. Query text: UPDATE `#__banners` SET `publish_up` = NULL WHERE `publish_up` = '0000-00-00 00:.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-06-29. Query text: UPDATE `#__banners` SET `publish_down` = NULL WHERE `publish_down` = '0000-00-00.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-06-29. Query text: UPDATE `#__banners` SET `checked_out_time` = NULL WHERE `checked_out_time` = '00.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-06-29. Query text: UPDATE `#__banner_clients` SET `checked_out_time` = NULL WHERE `checked_out_time.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-06-29. Query text: UPDATE `#__ucm_content` SET `core_created_time` = '1980-01-01 00:00:00'  WHERE `.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-06-29. Query text: UPDATE `#__ucm_content` SET `core_modified_time` = `core_created_time`  WHERE `c.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-06-29. Query text: UPDATE `#__ucm_content` SET `core_publish_up` = NULL  WHERE `core_type_alias` = .
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-06-29. Query text: UPDATE `#__ucm_content` SET `core_publish_down` = NULL  WHERE `core_type_alias` .
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-06-29. Query text: UPDATE `#__ucm_content` SET `core_checked_out_time` = NULL  WHERE `core_type_ali.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-06-29. Query text: ALTER TABLE `#__newsfeeds` MODIFY `created` datetime NOT NULL;.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-06-29. Query text: ALTER TABLE `#__newsfeeds` MODIFY `modified` datetime NOT NULL;.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-06-29. Query text: ALTER TABLE `#__newsfeeds` MODIFY `publish_up` datetime NULL DEFAULT NULL;.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-06-29. Query text: ALTER TABLE `#__newsfeeds` MODIFY `publish_down` datetime NULL DEFAULT NULL;.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-06-29. Query text: ALTER TABLE `#__newsfeeds` MODIFY `checked_out_time` datetime NULL DEFAULT NULL;.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-06-29. Query text: UPDATE `#__newsfeeds` SET `created` = '1980-01-01 00:00:00' WHERE `created` = '0.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-06-29. Query text: UPDATE `#__newsfeeds` SET `modified` = `created`, `modified_by` = `created_by` W.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-06-29. Query text: UPDATE `#__newsfeeds` SET `publish_up` = NULL WHERE `publish_up` = '0000-00-00 0.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-06-29. Query text: UPDATE `#__newsfeeds` SET `publish_down` = NULL WHERE `publish_down` = '0000-00-.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-06-29. Query text: UPDATE `#__newsfeeds` SET `checked_out_time` = NULL WHERE `checked_out_time` = '.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-06-29. Query text: UPDATE `#__ucm_content` SET `core_created_time` = '1980-01-01 00:00:00'  WHERE `.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-06-29. Query text: UPDATE `#__ucm_content` SET `core_modified_time` = `core_created_time`  WHERE `c.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-06-29. Query text: UPDATE `#__ucm_content` SET `core_publish_up` = NULL  WHERE `core_type_alias` = .
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-06-29. Query text: UPDATE `#__ucm_content` SET `core_publish_down` = NULL  WHERE `core_type_alias` .
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-06-29. Query text: UPDATE `#__ucm_content` SET `core_checked_out_time` = NULL  WHERE `core_type_ali.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-07-13. Query text: CREATE TABLE IF NOT EXISTS `#__webauthn_credentials` (     `id`         VARCHAR(.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-07-13. Query text: INSERT INTO `#__extensions` (`package_id`, `name`, `type`, `element`, `folder`, .
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-07-13. Query text: INSERT INTO `#__extensions` (`package_id`, `name`, `type`, `element`, `folder`, .
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-07-13. Query text: DELETE FROM `#__extensions` WHERE `element` = 'mod_status' AND `client_id` = 1;.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-07-13. Query text: INSERT INTO `#__modules` (`title`, `note`, `content`, `ordering`, `position`, `c.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-07-13. Query text: INSERT INTO `#__modules_menu` (`moduleid`, `menuid`) VALUES (LAST_INSERT_ID(), 0.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-07-13. Query text: INSERT INTO `#__modules` (`title`, `note`, `content`, `ordering`, `position`, `c.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-07-13. Query text: INSERT INTO `#__modules_menu` (`moduleid`, `menuid`) VALUES (LAST_INSERT_ID(), 0.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-07-13. Query text: INSERT INTO `#__modules` (`title`, `note`, `content`, `ordering`, `position`, `c.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-07-13. Query text: INSERT INTO `#__modules_menu` (`moduleid`, `menuid`) VALUES (LAST_INSERT_ID(), 0.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-07-13. Query text: INSERT INTO `#__modules` (`title`, `note`, `content`, `ordering`, `position`, `c.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-07-13. Query text: INSERT INTO `#__modules_menu` (`moduleid`, `menuid`) VALUES (LAST_INSERT_ID(), 0.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-07-13. Query text: INSERT INTO `#__modules` (`title`, `note`, `content`, `ordering`, `position`, `c.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-07-13. Query text: INSERT INTO `#__modules_menu` (`moduleid`, `menuid`) VALUES (LAST_INSERT_ID(), 0.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-07-13. Query text: INSERT INTO `#__modules` (`title`, `note`, `content`, `ordering`, `position`, `c.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-07-13. Query text: INSERT INTO `#__modules_menu` (`moduleid`, `menuid`) VALUES (LAST_INSERT_ID(), 0.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-07-13. Query text: INSERT INTO `#__modules` (`title`, `note`, `content`, `ordering`, `position`, `c.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-07-13. Query text: INSERT INTO `#__modules_menu` (`moduleid`, `menuid`) VALUES (LAST_INSERT_ID(), 0.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-07-13. Query text: INSERT INTO `#__modules` (`title`, `note`, `content`, `ordering`, `position`, `c.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-07-13. Query text: INSERT INTO `#__modules_menu` (`moduleid`, `menuid`) VALUES (LAST_INSERT_ID(), 0.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-07-13. Query text: INSERT INTO `#__modules` (`title`, `note`, `content`, `ordering`, `position`, `c.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-07-13. Query text: INSERT INTO `#__modules_menu` (`moduleid`, `menuid`) VALUES (LAST_INSERT_ID(), 0.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-07-13. Query text: INSERT INTO `#__modules` (`title`, `note`, `content`, `ordering`, `position`, `c.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-07-13. Query text: INSERT INTO `#__modules_menu` (`moduleid`, `menuid`) VALUES (LAST_INSERT_ID(), 0.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-07-13. Query text: INSERT INTO `#__modules` (`title`, `note`, `content`, `ordering`, `position`, `c.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-07-13. Query text: INSERT INTO `#__modules_menu` (`moduleid`, `menuid`) VALUES (LAST_INSERT_ID(), 0.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-07-13. Query text: INSERT INTO `#__modules` (`title`, `note`, `content`, `ordering`, `position`, `c.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-07-13. Query text: INSERT INTO `#__modules_menu` (`moduleid`, `menuid`) VALUES (LAST_INSERT_ID(), 0.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-07-13. Query text: INSERT INTO `#__modules` (`title`, `note`, `content`, `ordering`, `position`, `c.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-07-13. Query text: INSERT INTO `#__modules_menu` (`moduleid`, `menuid`) VALUES (LAST_INSERT_ID(), 0.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-07-13. Query text: INSERT INTO `#__modules` (`title`, `note`, `content`, `ordering`, `position`, `c.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-07-13. Query text: INSERT INTO `#__modules_menu` (`moduleid`, `menuid`) VALUES (LAST_INSERT_ID(), 0.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-07-13. Query text: INSERT INTO `#__modules` (`title`, `note`, `content`, `ordering`, `position`, `c.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-07-13. Query text: INSERT INTO `#__modules_menu` (`moduleid`, `menuid`) VALUES (LAST_INSERT_ID(), 0.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-07-13. Query text: INSERT INTO `#__modules` (`title`, `note`, `content`, `ordering`, `position`, `c.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-07-13. Query text: INSERT INTO `#__modules_menu` (`moduleid`, `menuid`) VALUES (LAST_INSERT_ID(), 0.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-07-13. Query text: UPDATE `#__modules` SET `title` = 'Update Checks',`ordering` = 3,`position` = 'i.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-07-13. Query text: INSERT INTO `#__modules` (`title`, `note`, `content`, `ordering`, `position`, `c.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-07-13. Query text: INSERT INTO `#__modules_menu` (`moduleid`, `menuid`) VALUES (LAST_INSERT_ID(), 0.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-07-13. Query text: UPDATE `#__modules` SET `ordering` = 2,`position` = 'status' WHERE `#__modules`..
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-07-13. Query text: INSERT INTO `#__modules` (`title`, `note`, `content`, `ordering`, `position`, `c.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-07-13. Query text: INSERT INTO `#__modules_menu` (`moduleid`, `menuid`) VALUES (LAST_INSERT_ID(), 0.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-07-13. Query text: INSERT INTO `#__modules` (`title`, `note`, `content`, `ordering`, `position`, `c.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-07-13. Query text: INSERT INTO `#__modules_menu` (`moduleid`, `menuid`) VALUES (LAST_INSERT_ID(), 0.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-09-13. Query text: ALTER TABLE `#__contact_details` DROP COLUMN `xreference`;.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-09-13. Query text: ALTER TABLE `#__content` DROP COLUMN `xreference`;.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-09-13. Query text: ALTER TABLE `#__newsfeeds` DROP COLUMN `xreference`;.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-09-13. Query text: ALTER TABLE `#__update_sites` ADD COLUMN `checked_out` int unsigned NOT NULL DEF.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-09-13. Query text: ALTER TABLE `#__update_sites` ADD COLUMN `checked_out_time` datetime NULL DEFAUL.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-09-13. Query text: ALTER TABLE `#__content_frontpage` ADD COLUMN `featured_up` datetime;.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-09-13. Query text: ALTER TABLE `#__content_frontpage` ADD COLUMN `featured_down` datetime;.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-09-13. Query text: INSERT INTO `#__extensions` (`package_id`, `name`, `type`, `element`, `folder`, .
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-09-13. Query text: INSERT INTO `#__menu` (`menutype`, `title`, `alias`, `note`, `path`, `link`, `ty.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-09-22. Query text: ALTER TABLE `#__content` MODIFY `created` datetime NOT NULL;.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-09-22. Query text: ALTER TABLE `#__content` MODIFY `modified` datetime NOT NULL;.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-09-22. Query text: ALTER TABLE `#__content` MODIFY `publish_up` datetime NULL DEFAULT NULL;.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-09-22. Query text: ALTER TABLE `#__content` MODIFY `publish_down` datetime NULL DEFAULT NULL;.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-09-22. Query text: ALTER TABLE `#__content` MODIFY `checked_out_time` datetime NULL DEFAULT NULL;.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-09-22. Query text: UPDATE `#__content` SET `created` = '1980-01-01 00:00:00' WHERE `created` = '000.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-09-22. Query text: UPDATE `#__content` SET `modified` = `created`, `modified_by` = `created_by` WHE.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-09-22. Query text: UPDATE `#__content` SET `publish_up` = NULL WHERE `publish_up` = '0000-00-00 00:.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-09-22. Query text: UPDATE `#__content` SET `publish_down` = NULL WHERE `publish_down` = '0000-00-00.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-09-22. Query text: UPDATE `#__content` SET `checked_out_time` = NULL WHERE `checked_out_time` = '00.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-09-22. Query text: UPDATE `#__ucm_content` SET `core_created_time` = '1980-01-01 00:00:00'  WHERE `.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-09-22. Query text: UPDATE `#__ucm_content` SET `core_modified_time` = `core_created_time`  WHERE `c.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-09-22. Query text: UPDATE `#__ucm_content` SET `core_publish_up` = NULL  WHERE `core_type_alias` = .
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-09-22. Query text: UPDATE `#__ucm_content` SET `core_publish_down` = NULL  WHERE `core_type_alias` .
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-09-22. Query text: UPDATE `#__ucm_content` SET `core_checked_out_time` = NULL  WHERE `core_type_ali.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-09-22. Query text: ALTER TABLE `#__messages` MODIFY `date_time` datetime NOT NULL;.
2022-03-11T09:00:21+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-10-06. Query text: ALTER TABLE `#__redirect_links` MODIFY `created_date` datetime NOT NULL;.
2022-03-11T09:00:22+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-10-06. Query text: ALTER TABLE `#__redirect_links` MODIFY `modified_date` datetime NOT NULL;.
2022-03-11T09:00:22+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-10-06. Query text: UPDATE `#__redirect_links` SET `created_date` = '1980-01-01 00:00:00' WHERE `cre.
2022-03-11T09:00:22+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-10-06. Query text: UPDATE `#__redirect_links` SET `modified_date` = `created_date` WHERE `modified_.
2022-03-11T09:00:22+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-10-06. Query text: ALTER TABLE `#__action_logs` MODIFY `log_date` datetime NOT NULL;.
2022-03-11T09:00:22+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-10-06. Query text: ALTER TABLE `#__fields` MODIFY `created_time` datetime NOT NULL;.
2022-03-11T09:00:22+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-10-06. Query text: ALTER TABLE `#__fields` MODIFY `modified_time` datetime NOT NULL;.
2022-03-11T09:00:22+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-10-06. Query text: ALTER TABLE `#__fields` MODIFY `checked_out_time` datetime NULL DEFAULT NULL;.
2022-03-11T09:00:22+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-10-06. Query text: ALTER TABLE `#__fields_groups` MODIFY `created` datetime NOT NULL;.
2022-03-11T09:00:22+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-10-06. Query text: ALTER TABLE `#__fields_groups` MODIFY `modified` datetime NOT NULL;.
2022-03-11T09:00:22+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-10-06. Query text: ALTER TABLE `#__fields_groups` MODIFY `checked_out_time` datetime NULL DEFAULT N.
2022-03-11T09:00:22+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-10-06. Query text: UPDATE `#__fields` SET `modified_time` = `created_time`, `modified_by` = `create.
2022-03-11T09:00:22+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-10-06. Query text: UPDATE `#__fields` SET `checked_out_time` = NULL WHERE `checked_out_time` = '000.
2022-03-11T09:00:22+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-10-06. Query text: UPDATE `#__fields_groups` SET `modified` = `created`, `modified_by` = `created_b.
2022-03-11T09:00:22+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-10-06. Query text: UPDATE `#__fields_groups` SET `checked_out_time` = NULL WHERE `checked_out_time`.
2022-03-11T09:00:22+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-10-06. Query text: ALTER TABLE `#__privacy_requests` MODIFY `requested_at` datetime NOT NULL;.
2022-03-11T09:00:22+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-10-06. Query text: ALTER TABLE `#__privacy_requests` MODIFY `confirm_token_created_at` datetime NUL.
2022-03-11T09:00:22+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-10-06. Query text: ALTER TABLE `#__privacy_consents` MODIFY `created` datetime NOT NULL;.
2022-03-11T09:00:22+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-10-06. Query text: UPDATE `#__privacy_requests` SET `confirm_token_created_at` = NULL WHERE `confir.
2022-03-11T09:00:22+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-10-06. Query text: ALTER TABLE `#__tags` MODIFY `created_time` datetime NOT NULL;.
2022-03-11T09:00:22+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-10-06. Query text: ALTER TABLE `#__tags` MODIFY `modified_time` datetime NOT NULL;.
2022-03-11T09:00:22+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-10-06. Query text: ALTER TABLE `#__tags` MODIFY `publish_up` datetime NULL DEFAULT NULL;.
2022-03-11T09:00:22+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-10-06. Query text: ALTER TABLE `#__tags` MODIFY `publish_down` datetime NULL DEFAULT NULL;.
2022-03-11T09:00:22+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-10-06. Query text: ALTER TABLE `#__tags` MODIFY `checked_out_time` datetime NULL DEFAULT NULL;.
2022-03-11T09:00:22+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-10-06. Query text: UPDATE `#__tags` SET `modified_time` = `created_time`, `modified_user_id` = `cre.
2022-03-11T09:00:22+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-10-06. Query text: UPDATE `#__tags` SET `publish_up` = NULL WHERE `publish_up` = '0000-00-00 00:00:.
2022-03-11T09:00:22+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-10-06. Query text: UPDATE `#__tags` SET `publish_down` = NULL WHERE `publish_down` = '0000-00-00 00.
2022-03-11T09:00:22+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-10-06. Query text: UPDATE `#__tags` SET `checked_out_time` = NULL WHERE `checked_out_time` = '0000-.
2022-03-11T09:00:22+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-10-06. Query text: UPDATE `#__ucm_content` SET `core_modified_time` = `core_created_time`  WHERE `.
2022-03-11T09:00:22+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-10-06. Query text: UPDATE `#__ucm_content` SET `core_publish_up` = NULL  WHERE `core_type_alias` =.
2022-03-11T09:00:22+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-10-06. Query text: UPDATE `#__ucm_content` SET `core_publish_down` = NULL  WHERE `core_type_alias`.
2022-03-11T09:00:22+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-10-06. Query text: UPDATE `#__ucm_content` SET `core_checked_out_time` = NULL  WHERE `core_type_al.
2022-03-11T09:00:22+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-10-06. Query text: ALTER TABLE `#__user_notes` MODIFY `created_time` datetime NOT NULL;.
2022-03-11T09:00:22+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-10-06. Query text: ALTER TABLE `#__user_notes` MODIFY `modified_time` datetime NOT NULL;.
2022-03-11T09:00:22+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-10-06. Query text: ALTER TABLE `#__user_notes` MODIFY `review_time` datetime NULL DEFAULT NULL;.
2022-03-11T09:00:22+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-10-06. Query text: ALTER TABLE `#__user_notes` MODIFY `publish_up` datetime NULL DEFAULT NULL;.
2022-03-11T09:00:22+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-10-06. Query text: ALTER TABLE `#__user_notes` MODIFY `publish_down` datetime NULL DEFAULT NULL;.
2022-03-11T09:00:22+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-10-06. Query text: ALTER TABLE `#__user_notes` MODIFY `checked_out_time` datetime NULL DEFAULT NULL.
2022-03-11T09:00:22+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-10-06. Query text: UPDATE `#__user_notes` SET `modified_time` = `created_time`, `modified_user_id` .
2022-03-11T09:00:22+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-10-06. Query text: UPDATE `#__user_notes` SET `review_time` = NULL WHERE `review_time` = '0000-00-0.
2022-03-11T09:00:22+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-10-06. Query text: UPDATE `#__user_notes` SET `publish_up` = NULL WHERE `publish_up` = '0000-00-00 .
2022-03-11T09:00:22+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-10-06. Query text: UPDATE `#__user_notes` SET `publish_down` = NULL WHERE `publish_down` = '0000-00.
2022-03-11T09:00:22+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-10-06. Query text: UPDATE `#__user_notes` SET `checked_out_time` = NULL WHERE `checked_out_time` = .
2022-03-11T09:00:22+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-10-06. Query text: UPDATE `#__ucm_content` SET `core_modified_time` = `core_created_time`  WHERE `.
2022-03-11T09:00:22+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-10-06. Query text: UPDATE `#__ucm_content` SET `core_publish_up` = NULL  WHERE `core_type_alias` =.
2022-03-11T09:00:22+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-10-06. Query text: UPDATE `#__ucm_content` SET `core_publish_down` = NULL  WHERE `core_type_alias`.
2022-03-11T09:00:22+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-10-06. Query text: UPDATE `#__ucm_content` SET `core_checked_out_time` = NULL  WHERE `core_type_al.
2022-03-11T09:00:22+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-10-06. Query text: ALTER TABLE `#__categories` MODIFY `created_time` datetime NOT NULL;.
2022-03-11T09:00:22+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-10-06. Query text: ALTER TABLE `#__categories` MODIFY `modified_time` datetime NOT NULL;.
2022-03-11T09:00:22+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-10-06. Query text: ALTER TABLE `#__categories` MODIFY `checked_out_time` datetime NULL DEFAULT NULL.
2022-03-11T09:00:22+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-10-06. Query text: UPDATE `#__categories` SET `created_time` = '1980-01-01 00:00:00' WHERE `created.
2022-03-11T09:00:22+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-10-06. Query text: UPDATE `#__categories` SET `modified_time` = `created_time`, `modified_user_id` .
2022-03-11T09:00:22+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-10-06. Query text: UPDATE `#__categories` SET `checked_out_time` = NULL WHERE `checked_out_time` = .
2022-03-11T09:00:22+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-10-06. Query text: UPDATE `#__ucm_content` SET `core_created_time` = '1980-01-01 00:00:00'  WHERE .
2022-03-11T09:00:22+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-10-06. Query text: UPDATE `#__ucm_content` SET `core_modified_time` = `core_created_time`  WHERE `.
2022-03-11T09:00:22+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-10-06. Query text: UPDATE `#__ucm_content` SET `core_checked_out_time` = NULL  WHERE `core_type_al.
2022-03-11T09:00:23+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-10-06. Query text: ALTER TABLE `#__extensions` MODIFY `checked_out_time` datetime NULL DEFAULT NULL.
2022-03-11T09:00:23+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-10-06. Query text: UPDATE `#__extensions` SET `checked_out_time` = NULL WHERE `checked_out_time` = .
2022-03-11T09:00:23+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-10-17. Query text: UPDATE `#__content_types`    SET `field_mappings` = REPLACE(`field_mappings`,'".
2022-03-11T09:00:23+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-10-17. Query text: ALTER TABLE `#__users` MODIFY `registerDate` datetime NOT NULL;.
2022-03-11T09:00:23+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-10-17. Query text: ALTER TABLE `#__users` MODIFY `lastvisitDate` datetime NULL DEFAULT NULL;.
2022-03-11T09:00:23+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-10-17. Query text: ALTER TABLE `#__users` MODIFY `lastResetTime` datetime NULL DEFAULT NULL;.
2022-03-11T09:00:23+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-10-17. Query text: UPDATE `#__users` SET `registerDate` = '1980-01-01 00:00:00' WHERE `registerDate.
2022-03-11T09:00:23+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-10-17. Query text: UPDATE `#__users` SET `lastvisitDate` = NULL WHERE `lastvisitDate` = '0000-00-00.
2022-03-11T09:00:23+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-10-17. Query text: UPDATE `#__users` SET `lastResetTime` = NULL WHERE `lastResetTime` = '0000-00-00.
2022-03-11T09:00:23+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2019-10-17. Query text: UPDATE `#__content_types`    SET `field_mappings` = REPLACE(`field_mappings`,'".
2022-03-11T09:00:23+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-02-02. Query text: INSERT INTO `#__extensions` (`package_id`, `name`, `type`, `element`, `folder`, .
2022-03-11T09:00:23+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-02-02. Query text: INSERT INTO `#__extensions` (`package_id`, `name`, `type`, `element`, `folder`, .
2022-03-11T09:00:23+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-02-02. Query text: UPDATE `#__extensions` SET `enabled` = 0 WHERE `name` = 'plg_api-authentication_.
2022-03-11T09:00:23+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-02-02. Query text: DELETE FROM `#__menu` WHERE `link` = 'index.php?option=com_messages' AND `menuty.
2022-03-11T09:00:23+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-02-02. Query text: DELETE FROM `#__menu` WHERE `link` = 'index.php?option=com_messages&view=message.
2022-03-11T09:00:23+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-02-02. Query text: DELETE FROM `#__menu` WHERE `link` = 'index.php?option=com_messages&task=message.
2022-03-11T09:00:23+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-02-02. Query text: UPDATE `#__menu` SET `img` = 'class:bookmark' WHERE `path` = 'Banners';.
2022-03-11T09:00:23+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-02-02. Query text: UPDATE `#__menu` SET `img` = 'class:address-book' WHERE `path` = 'Contacts';.
2022-03-11T09:00:23+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-02-02. Query text: UPDATE `#__menu` SET `img` = 'class:rss' WHERE `path` = 'News Feeds';.
2022-03-11T09:00:23+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-02-02. Query text: UPDATE `#__menu` SET `img` = 'class:language' WHERE `path` = 'Multilingual Assoc.
2022-03-11T09:00:23+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-02-02. Query text: UPDATE `#__menu` SET `img` = 'class:search-plus' WHERE `path` = 'Smart Search';.
2022-03-11T09:00:23+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-03-10. Query text: ALTER TABLE `#__banners` MODIFY `metakey` text;.
2022-03-11T09:00:23+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-03-10. Query text: ALTER TABLE `#__banner_clients` MODIFY `metakey` text;.
2022-03-11T09:00:23+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-03-10. Query text: ALTER TABLE `#__contact_details` MODIFY `metakey` text;.
2022-03-11T09:00:23+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-03-10. Query text: ALTER TABLE `#__content` MODIFY `metakey` text;.
2022-03-11T09:00:23+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-03-10. Query text: ALTER TABLE `#__languages` MODIFY `metakey` text;.
2022-03-11T09:00:23+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-03-10. Query text: ALTER TABLE `#__newsfeeds` MODIFY `metakey` text;.
2022-03-11T09:00:23+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-03-10. Query text: ALTER TABLE `#__tags` MODIFY `metakey` varchar(1024) NOT NULL DEFAULT '';.
2022-03-11T09:00:23+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-03-10. Query text: ALTER TABLE `#__content_types` MODIFY `table` varchar(2048) NOT NULL DEFAULT '';.
2022-03-11T09:00:23+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-03-10. Query text: DELETE FROM `#__extensions` WHERE `name` = 'com_mailto';.
2022-03-11T09:00:23+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-03-10. Query text: INSERT INTO `#__extensions` (`package_id`, `name`, `type`, `element`, `folder`, .
2022-03-11T09:00:23+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-03-10. Query text: INSERT INTO `#__extensions` (`package_id`, `name`, `type`, `element`, `folder`, .
2022-03-11T09:00:23+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-03-25. Query text: ALTER TABLE `#__extensions` MODIFY `protected` tinyint NOT NULL DEFAULT 0 COMMEN.
2022-03-11T09:00:23+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-03-25. Query text: ALTER TABLE `#__extensions` ADD COLUMN `locked` tinyint NOT NULL DEFAULT 0 COMME.
2022-03-11T09:00:23+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-03-25. Query text: UPDATE `#__extensions` SET `locked` = 1, `protected` = 0 WHERE (`type` = 'compon.
2022-03-11T09:00:23+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-03-25. Query text: UPDATE `#__extensions` SET `protected` = 1, `enabled` = 1 WHERE (`type` = 'compo.
2022-03-11T09:00:23+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-03-25. Query text: UPDATE `#__extensions` SET `protected` = 0, `locked` = 0 WHERE (`type` = 'librar.
2022-03-11T09:00:23+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-05-29. Query text: INSERT INTO `#__extensions` (`package_id`, `name`, `type`, `element`, `folder`, .
2022-03-11T09:00:23+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-05-29. Query text: INSERT INTO `#__mail_templates` (`template_id`, `language`, `subject`, `body`, `.
2022-03-11T09:00:23+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-05-29. Query text: RENAME TABLE `#__ucm_history` TO `#__history`;.
2022-03-11T09:00:23+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-05-29. Query text: ALTER TABLE `#__history` CHANGE `ucm_item_id` `item_id` VARCHAR(50) NOT NULL AFT.
2022-03-11T09:00:23+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-05-29. Query text: UPDATE #__history AS h INNER JOIN #__content_types AS c ON h.ucm_type_id = c.typ.
2022-03-11T09:00:23+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-05-29. Query text: ALTER TABLE `#__history` DROP COLUMN `ucm_type_id`;.
2022-03-11T09:00:23+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-05-29. Query text: ALTER TABLE `#__history` MODIFY `save_date` datetime NOT NULL;.
2022-03-11T09:00:23+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-05-29. Query text: ALTER TABLE `#__extensions` MODIFY `checked_out` INT UNSIGNED;.
2022-03-11T09:00:23+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-05-29. Query text: ALTER TABLE `#__menu` MODIFY `checked_out` INT UNSIGNED;.
2022-03-11T09:00:23+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-05-29. Query text: ALTER TABLE `#__modules` MODIFY `checked_out` INT UNSIGNED;.
2022-03-11T09:00:23+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-05-29. Query text: ALTER TABLE `#__tags` MODIFY `checked_out` INT UNSIGNED;.
2022-03-11T09:00:23+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-05-29. Query text: ALTER TABLE `#__update_sites` MODIFY `checked_out` INT UNSIGNED;.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-05-29. Query text: ALTER TABLE `#__user_notes` MODIFY `checked_out` INT UNSIGNED;.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-05-29. Query text: ALTER TABLE `#__workflows` MODIFY `checked_out` INT UNSIGNED;.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-05-29. Query text: ALTER TABLE `#__workflow_stages` MODIFY `checked_out` INT UNSIGNED;.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-05-29. Query text: ALTER TABLE `#__workflow_transitions` MODIFY `checked_out` INT UNSIGNED;.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-05-29. Query text: ALTER TABLE `#__banners` MODIFY `checked_out` INT UNSIGNED;.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-05-29. Query text: ALTER TABLE `#__banner_clients` MODIFY `checked_out` INT UNSIGNED;.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-05-29. Query text: ALTER TABLE `#__contact_details` MODIFY `checked_out` INT UNSIGNED;.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-05-29. Query text: ALTER TABLE `#__content` MODIFY `checked_out` INT UNSIGNED;.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-05-29. Query text: ALTER TABLE `#__finder_filters` MODIFY `checked_out` INT UNSIGNED;.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-05-29. Query text: ALTER TABLE `#__newsfeeds` MODIFY `checked_out` INT UNSIGNED;.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-05-29. Query text: ALTER TABLE `#__categories` MODIFY `checked_out` INT UNSIGNED;.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-05-29. Query text: ALTER TABLE `#__fields` MODIFY `checked_out` INT UNSIGNED;.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-05-29. Query text: ALTER TABLE `#__fields_groups` MODIFY `checked_out` INT UNSIGNED;.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-05-29. Query text: ALTER TABLE `#__ucm_content` MODIFY `core_checked_out_user_id` INT UNSIGNED;.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-05-29. Query text: UPDATE `#__extensions` SET `checked_out` = null WHERE `checked_out` = 0;.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-05-29. Query text: UPDATE `#__menu` SET `checked_out` = null WHERE `checked_out` = 0;.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-05-29. Query text: UPDATE `#__modules` SET `checked_out` = null WHERE `checked_out` = 0;.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-05-29. Query text: UPDATE `#__tags` SET `checked_out` = null WHERE `checked_out` = 0;.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-05-29. Query text: UPDATE `#__update_sites` SET `checked_out` = null WHERE `checked_out` = 0;.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-05-29. Query text: UPDATE `#__user_notes` SET `checked_out` = null WHERE `checked_out` = 0;.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-05-29. Query text: UPDATE `#__workflows` SET `checked_out` = null WHERE `checked_out` = 0;.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-05-29. Query text: UPDATE `#__workflow_stages` SET `checked_out` = null WHERE `checked_out` = 0;.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-05-29. Query text: UPDATE `#__workflow_transitions` SET `checked_out` = null WHERE `checked_out` = .
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-05-29. Query text: UPDATE `#__banners` SET `checked_out` = null WHERE `checked_out` = 0;.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-05-29. Query text: UPDATE `#__banner_clients` SET `checked_out` = null WHERE `checked_out` = 0;.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-05-29. Query text: UPDATE `#__contact_details` SET `checked_out` = null WHERE `checked_out` = 0;.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-05-29. Query text: UPDATE `#__content` SET `checked_out` = null WHERE `checked_out` = 0;.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-05-29. Query text: UPDATE `#__finder_filters` SET `checked_out` = null WHERE `checked_out` = 0;.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-05-29. Query text: UPDATE `#__newsfeeds` SET `checked_out` = null WHERE `checked_out` = 0;.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-05-29. Query text: UPDATE `#__categories` SET `checked_out` = null WHERE `checked_out` = 0;.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-05-29. Query text: UPDATE `#__fields` SET `checked_out` = null WHERE `checked_out` = 0;.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-05-29. Query text: UPDATE `#__fields_groups` SET `checked_out` = null WHERE `checked_out` = 0;.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-05-29. Query text: UPDATE `#__ucm_content` SET `core_checked_out_user_id` = null WHERE `core_checke.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-09-27. Query text: UPDATE `#__menu` SET `link`='index.php?option=com_finder' WHERE `menutype`='main.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-09-27. Query text: UPDATE `#__menu` SET `link`='index.php?option=com_tags&view=tags' WHERE `menutyp.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-09-27. Query text: UPDATE `#__menu` SET `link`='index.php?option=com_associations&view=associations.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-09-27. Query text: DELETE FROM `#__extensions` WHERE `name` = 'plg_content_imagelazyload' AND `type.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-09-27. Query text: DELETE FROM `#__extensions` WHERE `name` = 'plg_authentication_gmail' AND `type`.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-09-27. Query text: DELETE `e1`.*   FROM `#__extensions` AS `e1`   LEFT JOIN (SELECT MAX(extension_i.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-09-27. Query text: UPDATE `#__extensions` SET `enabled` = 1 WHERE `name` = 'plg_sampledata_multilan.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-12-20. Query text: INSERT INTO `#__mail_templates` (`template_id`, `language`, `subject`, `body`, `.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-12-20. Query text: UPDATE `#__banners` SET `created` = '1980-01-01 00:00:00' WHERE `created` = '000.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-12-20. Query text: UPDATE `#__banners` SET `modified` = `created` WHERE `modified` = '0000-00-00 00.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-12-20. Query text: UPDATE `#__categories` SET `created_time` = '1980-01-01 00:00:00' WHERE `created.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-12-20. Query text: UPDATE `#__categories` SET `modified_time` = `created_time` WHERE `modified_time.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-12-20. Query text: UPDATE `#__contact_details` SET `created` = '1980-01-01 00:00:00' WHERE `created.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-12-20. Query text: UPDATE `#__contact_details` SET `modified` = `created` WHERE `modified` = '0000-.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-12-20. Query text: UPDATE `#__content` SET `created` = '1980-01-01 00:00:00' WHERE `created` = '000.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-12-20. Query text: UPDATE `#__content` SET `modified` = `created` WHERE `modified` = '0000-00-00 00.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-12-20. Query text: UPDATE `#__newsfeeds` SET `created` = '1980-01-01 00:00:00' WHERE `created` = '0.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-12-20. Query text: UPDATE `#__newsfeeds` SET `modified` = `created` WHERE `modified` = '0000-00-00 .
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-12-20. Query text: UPDATE `#__ucm_content` SET `core_created_time` = '1980-01-01 00:00:00'  WHERE `.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-12-20. Query text: UPDATE `#__ucm_content` SET `core_modified_time` = `core_created_time`  WHERE `c.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-12-20. Query text: UPDATE `#__redirect_links` SET `created_date` = '1980-01-01 00:00:00' WHERE `cre.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-12-20. Query text: UPDATE `#__redirect_links` SET `modified_date` = `created_date` WHERE `modified_.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-12-20. Query text: UPDATE `#__users` SET `registerDate` = '1980-01-01 00:00:00' WHERE `registerDate.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2020-12-20. Query text: UPDATE `#__modules` SET `title` = 'Notifications' WHERE `#__modules`.`id` = 9;.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2021-04-22. Query text: DELETE FROM `#__postinstall_messages`  WHERE `title_key`     IN ('COM_CPANEL_MSG.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2021-04-22. Query text: ALTER TABLE `#__fields` ADD COLUMN `only_use_in_subform` tinyint NOT NULL DEFAUL.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2021-04-22. Query text: UPDATE `#__extensions` SET `name` = 'plg_fields_subform', `element` = 'subform' .
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2021-04-22. Query text: UPDATE `#__fields` SET `type` = 'subform' WHERE `type` = 'subfields';.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2021-04-22. Query text: ALTER TABLE `#__mail_templates` ADD COLUMN `extension` varchar(127) NOT NULL DEF.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2021-04-22. Query text: UPDATE `#__mail_templates` SET `extension` = SUBSTRING(`template_id`, 1, POSITIO.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2021-04-27. Query text: UPDATE `#__modules`    SET `params` = REPLACE(`params`,'"bootstrap_size":"6"','".
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2021-04-27. Query text: UPDATE `#__modules`    SET `params` = REPLACE(`params`,'"bootstrap_size": "6"','.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2021-04-27. Query text: UPDATE `#__modules`    SET `params` = REPLACE(`params`,'"header_tag":"h3"','"hea.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2021-05-30. Query text: UPDATE `#__template_styles`    SET `params` = '{"hue":"hsl(214, 63%, 20%)","bg-l.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2021-05-30. Query text: DELETE FROM `#__extensions` WHERE `name` = 'com_csp' and `type` = 'component' an.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2021-05-30. Query text: DROP TABLE IF EXISTS `#__csp`;.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2021-05-30. Query text: UPDATE `#__mail_templates`    SET `subject` = 'COM_PRIVACY_EMAIL_DATA_EXPORT_COM.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2021-05-30. Query text: ALTER TABLE `#__finder_taxonomy` ADD INDEX `idx_level` (`level`);.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2021-05-30. Query text: UPDATE `#__modules`    SET `params` = REPLACE(`params`,'"layout":"cassiopeia:dro.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2021-05-30. Query text: UPDATE `#__update_sites`    SET `location` = 'https://update.joomla.org/language.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2021-06-04. Query text: UPDATE `#__template_styles`    SET `title` = 'Atum - Default'  WHERE `title` = '.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2021-06-04. Query text: UPDATE `#__template_styles`    SET `title` = 'Cassiopeia - Default'  WHERE `titl.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2021-08-13. Query text: UPDATE `#__assets`    SET `name` = 'com_content.stage.1'  WHERE `name` = 'com_co.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2021-08-13. Query text: UPDATE `#__assets` SET `title` = 'Unpublish' WHERE `name` = 'com_content.transit.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2021-08-13. Query text: UPDATE `#__assets` SET `title` = 'Publish'   WHERE `name` = 'com_content.transit.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2021-08-13. Query text: UPDATE `#__assets` SET `title` = 'Trash'     WHERE `name` = 'com_content.transit.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2021-08-13. Query text: UPDATE `#__assets` SET `title` = 'Archive'   WHERE `name` = 'com_content.transit.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2021-08-13. Query text: UPDATE `#__workflow_stages` s  INNER JOIN (SELECT `name`, MAX(`id`) AS `id` FROM.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2021-08-17. Query text: INSERT INTO `#__extensions` (`name`, `type`, `element`, `folder`, `client_id`, `.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2021-08-17. Query text: UPDATE `#__extensions` a  CROSS JOIN (SELECT `extension_id` FROM `#__extensions`.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2021-08-17. Query text: INSERT INTO `#__update_sites` (`name`, `type`, `location`, `enabled`) VALUES ('S.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.0-2021-08-17. Query text: INSERT INTO `#__update_sites_extensions` (`update_site_id`, `extension_id`) VALU.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.3-2021-09-04. Query text: DELETE FROM `#__update_sites_extensions`  WHERE `update_site_id` IN (SELECT `upd.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.3-2021-09-04. Query text: DELETE FROM `#__update_sites`  WHERE `location` = 'https://raw.githubusercontent.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.3-2021-09-04. Query text: DELETE FROM `#__extensions`  WHERE `type` = 'package' AND `element` = 'pkg_searc.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.3-2021-09-05. Query text: UPDATE `#__workflow_transitions` SET `title` = 'PUBLISH' WHERE `title`= 'Publish.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.3-2021-09-05. Query text: UPDATE `#__workflow_transitions` SET `title` = 'UNPUBLISH' WHERE `title`= 'Unpub.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.3-2021-09-05. Query text: UPDATE `#__workflow_transitions` SET `title` = 'TRASH' WHERE `title`= 'Trash';.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.3-2021-09-05. Query text: UPDATE `#__workflow_transitions` SET `title` = 'ARCHIVE' WHERE `title`= 'Archive.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.3-2021-09-05. Query text: UPDATE `#__workflow_transitions` SET `title` = 'FEATURE' WHERE `title`= 'Feature.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.3-2021-09-05. Query text: UPDATE `#__workflow_transitions` SET `title` = 'UNFEATURE' WHERE `title`= 'Unfea.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.3-2021-09-05. Query text: UPDATE `#__workflow_transitions` SET `title` = 'PUBLISH_AND_FEATURE' WHERE `titl.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.0.6-2021-12-23. Query text: UPDATE `#__extensions` SET `checked_out` = NULL WHERE `type` = 'package' AND `el.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.1.0-2021-11-20. Query text: CREATE TABLE IF NOT EXISTS `#__scheduler_tasks` (   `id` int unsigned NOT NULL A.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.1.0-2021-11-20. Query text: INSERT INTO `#__extensions` (`package_id`, `name`, `type`, `element`, `folder`, .
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.1.0-2021-11-20. Query text: INSERT INTO `#__extensions` (`package_id`, `name`, `type`, `element`, `folder`, .
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.1.0-2021-11-20. Query text: INSERT INTO `#__action_logs_extensions` (`extension`) VALUES ('com_scheduler');.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.1.0-2021-11-20. Query text: INSERT INTO `#__action_log_config` (`type_title`, `type_alias`, `id_holder`, `ti.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.1.0-2021-11-20. Query text: INSERT INTO `#__mail_templates` (`template_id`, `extension`, `language`, `subjec.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.1.0-2021-11-28. Query text: UPDATE `#__template_styles` SET `inheritable` = 1 WHERE `template` = 'atum' AND .
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.1.0-2021-11-28. Query text: UPDATE `#__template_styles`    SET `params` = REPLACE(`params`,'"useFontScheme":.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.1.0-2021-12-29. Query text: INSERT INTO `#__extensions` (`name`, `type`, `element`, `folder`, `client_id`, `.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.1.0-2022-01-08. Query text: UPDATE `#__mail_templates`    SET `params` = '{"tags": ["task_id", "task_title"].
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.1.0-2022-01-19. Query text: INSERT INTO `#__extensions` (`name`, `type`, `element`, `folder`, `client_id`, `.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.1.0-2022-01-24. Query text: ALTER TABLE `#__redirect_links` DROP INDEX `idx_link_modifed`;.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Ran query from file 4.1.0-2022-01-24. Query text: ALTER TABLE `#__redirect_links` ADD INDEX `idx_link_modified` (`modified_date`);.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	End of SQL updates.
2022-03-11T09:00:24+00:00	INFO 127.0.0.1	update	Deleting removed files and folders.
2022-03-11T09:00:28+00:00	INFO 127.0.0.1	update	Cleaning up after installation.
2022-03-11T09:00:29+00:00	INFO 127.0.0.1	update	Update to version 4.1.0 is complete.
