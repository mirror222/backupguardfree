<?php
require_once(dirname(__FILE__).'/../../com/config/config.magento.php');

$installer = $this;

$installer->startSetup();

$installer->run("DROP TABLE IF EXISTS `".SG_CONFIG_TABLE_NAME."`;
				CREATE TABLE `".SG_CONFIG_TABLE_NAME."` (
                  `ckey` varchar(255) NOT NULL,
                  `cvalue` varchar(255) NOT NULL,
                  PRIMARY KEY (`ckey`)
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
				INSERT INTO `".SG_CONFIG_TABLE_NAME."` VALUES 
                ('SG_BACKUP_SYNCHRONOUS_STORAGE_UPLOAD','1'),
                ('SG_NOTIFICATIONS_ENABLED','0'),
                ('SG_NOTIFICATIONS_EMAIL_ADDRESS',''),
                ('SG_STORAGE_BACKUPS_FOLDER_NAME','sg_backups');

                DROP TABLE IF EXISTS `".SG_ACTION_TABLE_NAME."`;
                CREATE TABLE `".SG_ACTION_TABLE_NAME."` (
                  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
                  `name` varchar(255) NOT NULL,
                  `type` tinyint(3) unsigned NOT NULL,
                  `subtype` tinyint(3) unsigned NOT NULL DEFAULT '0',
                  `status` tinyint(3) unsigned NOT NULL,
                  `progress` tinyint(3) unsigned NOT NULL DEFAULT '0',
                  `start_date` datetime NOT NULL,
                  `update_date` datetime DEFAULT NULL,
                  PRIMARY KEY (`id`)
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8;");

$installer->endSetup();