# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.29)
# Database: blacktipchallenge
# Generation Time: 2013-09-25 21:15:38 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table angler
# ------------------------------------------------------------

DROP TABLE IF EXISTS `angler`;

CREATE TABLE `angler` (
  `angler_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `team_name` varchar(50) DEFAULT NULL,
  `angler_name` varchar(50) DEFAULT NULL,
  `shark_species` varchar(50) DEFAULT NULL,
  `overall` int(7) DEFAULT NULL,
  `fork` int(7) DEFAULT NULL,
  `girth` int(7) DEFAULT NULL,
  `entry_time` varchar(50) DEFAULT NULL,
  `entry_date` varchar(50) DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  PRIMARY KEY (`angler_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `angler` WRITE;
/*!40000 ALTER TABLE `angler` DISABLE KEYS */;

INSERT INTO `angler` (`angler_id`, `team_name`, `angler_name`, `shark_species`, `overall`, `fork`, `girth`, `entry_time`, `entry_date`, `weight`)
VALUES
	(154,'Team Raptor','John Smith','blacktip',78,69,41,'02:53:01 pm','September 24, 2013',NULL),
	(155,'Team Raptor','Johnny','blacktip',78,67,39,'02:58:53 pm','September 24, 2013',127),
	(156,'Team Shark','Hans Moleman','blacktip',89,89,89,'03:05:20 pm','September 24, 2013',881),
	(157,'test','test','blacktip',78,78,78,'03:07:35 pm','September 24, 2013',593),
	(158,'Tem','test','blacktip',67,76,0,'03:08:31 pm','September 24, 2013',0),
	(159,'team blacktip','johnny','blacktip',67,67,0,'03:13:16 pm','September 24, 2013',0),
	(160,'team blacktip','johnny','blacktip',67,67,0,'03:13:56 pm','September 24, 2013',0),
	(161,'team blacktip','johnny','lemon',67,67,0,'03:14:18 pm','September 24, 2013',NULL),
	(162,'team blacktip','johnny','lemon',67,67,0,'03:14:37 pm','September 24, 2013',0),
	(163,'Team Lemon','John','hammerhead',189,178,0,'03:15:12 pm','September 24, 2013',0),
	(164,'Team Dusky','dusky','dusky',78,78,0,'03:16:41 pm','September 24, 2013',0),
	(165,'Team Dusky','dusky','dusky',78,78,0,'03:20:12 pm','September 24, 2013',0),
	(166,'Team Dusky','dusky','dusky',78,78,0,'03:20:40 pm','September 24, 2013',0),
	(167,'Team Dusky','dusky','dusky',78,78,0,'03:21:11 pm','September 24, 2013',0),
	(168,'tram blscktip','johnn','blacktip',78,78,78,'03:21:33 pm','September 24, 2013',593),
	(169,'tram blscktip','johnn','blacktip',78,78,78,'03:22:22 pm','September 24, 2013',593),
	(170,'tram blscktip','johnn','blacktip',78,78,78,'03:28:42 pm','September 24, 2013',593),
	(171,'tram blscktip','johnn','blacktip',78,78,78,'03:29:20 pm','September 24, 2013',593),
	(172,'tram blscktip','johnn','blacktip',78,78,78,'03:29:52 pm','September 24, 2013',593),
	(173,'tram blscktip','johnn','blacktip',78,78,78,'03:30:17 pm','September 24, 2013',593),
	(174,'tram blscktip','johnn','blacktip',78,78,78,'03:30:38 pm','September 24, 2013',593),
	(175,'tram blscktip','johnn','blacktip',78,78,78,'03:30:53 pm','September 24, 2013',593),
	(176,'tram blscktip','johnn','blacktip',78,78,78,'03:32:01 pm','September 24, 2013',593),
	(177,'tram blscktip','johnn','blacktip',78,78,78,'03:32:09 pm','September 24, 2013',593),
	(178,'tram blscktip','johnn','blacktip',78,78,78,'03:33:08 pm','September 24, 2013',593),
	(179,'tram blscktip','johnn','blacktip',78,78,78,'03:33:15 pm','September 24, 2013',593),
	(180,'tram blscktip','johnn','blacktip',78,78,78,'03:33:21 pm','September 24, 2013',593),
	(181,'tram blscktip','johnn','blacktip',78,78,78,'03:34:10 pm','September 24, 2013',593),
	(182,'tram blscktip','johnn','blacktip',78,78,78,'03:34:18 pm','September 24, 2013',593),
	(183,'tram blscktip','johnn','blacktip',78,78,78,'03:36:14 pm','September 24, 2013',593),
	(184,'tram blscktip','johnn','blacktip',78,78,78,'03:37:27 pm','September 24, 2013',593),
	(185,'tram blscktip','johnn','blacktip',78,78,78,'03:37:37 pm','September 24, 2013',593),
	(186,'tram blscktip','johnn','blacktip',78,78,78,'03:38:12 pm','September 24, 2013',593),
	(187,'tram blscktip','johnn','blacktip',78,78,78,'03:38:41 pm','September 24, 2013',593),
	(188,'tram blscktip','johnn','blacktip',78,78,78,'03:38:46 pm','September 24, 2013',593),
	(189,'tram blscktip','johnn','blacktip',78,78,78,'03:39:05 pm','September 24, 2013',593),
	(190,'tram blscktip','johnn','blacktip',78,78,78,'03:39:35 pm','September 24, 2013',593),
	(191,'tram blscktip','johnn','blacktip',78,78,78,'03:40:05 pm','September 24, 2013',593),
	(192,'tram blscktip','johnn','blacktip',78,78,78,'03:40:11 pm','September 24, 2013',593),
	(193,'tram blscktip','johnn','blacktip',78,78,78,'03:40:22 pm','September 24, 2013',593),
	(194,'tram blscktip','johnn','blacktip',78,78,78,'03:41:17 pm','September 24, 2013',593),
	(195,'tram blscktip','johnn','blacktip',78,78,78,'03:42:14 pm','September 24, 2013',593),
	(196,'tram blscktip','johnn','blacktip',78,78,78,'03:42:54 pm','September 24, 2013',593),
	(197,'tram blscktip','johnn','blacktip',78,78,78,'03:43:51 pm','September 24, 2013',593),
	(198,'tram blscktip','johnn','blacktip',78,78,78,'03:44:13 pm','September 24, 2013',593),
	(199,'tram blscktip','johnn','blacktip',78,78,78,'03:44:28 pm','September 24, 2013',593),
	(200,'tram blscktip','johnn','blacktip',78,78,78,'03:44:34 pm','September 24, 2013',593),
	(201,'tram blscktip','johnn','blacktip',78,78,78,'03:44:53 pm','September 24, 2013',593),
	(202,'tram blscktip','johnn','blacktip',78,78,78,'03:45:00 pm','September 24, 2013',593),
	(203,'tram blscktip','johnn','blacktip',78,78,78,'03:45:21 pm','September 24, 2013',593),
	(204,'tram blscktip','johnn','blacktip',78,78,78,'03:45:33 pm','September 24, 2013',593),
	(205,'tram blscktip','johnn','blacktip',78,78,78,'03:45:59 pm','September 24, 2013',593),
	(206,'tram blscktip','johnn','blacktip',78,78,78,'03:46:12 pm','September 24, 2013',593),
	(207,'tram blscktip','johnn','blacktip',78,78,78,'03:46:22 pm','September 24, 2013',593),
	(208,'tram blscktip','johnn','blacktip',78,78,78,'03:47:25 pm','September 24, 2013',593),
	(209,'tram blscktip','johnn','blacktip',78,78,78,'03:48:29 pm','September 24, 2013',593),
	(210,'Team Sharks','Shark','blacktip',78,71,41,'03:50:59 pm','September 25, 2013',150),
	(211,'test','test','blacknose',67,76,0,'04:59:26 pm','September 25, 2013',0),
	(212,'test','test','blacknose',67,76,0,'05:00:52 pm','September 25, 2013',0);

/*!40000 ALTER TABLE `angler` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table nonshark
# ------------------------------------------------------------

DROP TABLE IF EXISTS `nonshark`;

CREATE TABLE `nonshark` (
  `angler_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `angler_name` varchar(50) DEFAULT NULL,
  `fish_species` varchar(50) DEFAULT NULL,
  `overall_length` int(11) DEFAULT NULL,
  `entry_time` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`angler_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `nonshark` WRITE;
/*!40000 ALTER TABLE `nonshark` DISABLE KEYS */;

INSERT INTO `nonshark` (`angler_id`, `angler_name`, `fish_species`, `overall_length`, `entry_time`)
VALUES
	(4,'Joey Rock','Rockfish',22,'02:37:54 pm'),
	(5,'Joey Rock','Rockfish',22,'02:38:35 pm');

/*!40000 ALTER TABLE `nonshark` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table photo
# ------------------------------------------------------------

DROP TABLE IF EXISTS `photo`;

CREATE TABLE `photo` (
  `photo_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `angler_photo` varchar(100) DEFAULT NULL,
  `angler_date` time DEFAULT NULL,
  `overall_closeUp_photo` varchar(100) DEFAULT NULL,
  `overall_closeUp_date` time DEFAULT NULL,
  `overall_wide_photo` varchar(100) DEFAULT NULL,
  `overall_wide_date` time DEFAULT NULL,
  `fork_photo` varchar(100) DEFAULT NULL,
  `fork_date` time DEFAULT NULL,
  `girth_photo` varchar(100) DEFAULT NULL,
  `girth_date` time DEFAULT NULL,
  `fighting_photo` varchar(100) DEFAULT NULL,
  `fighting_date` time DEFAULT NULL,
  PRIMARY KEY (`photo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `photo` WRITE;
/*!40000 ALTER TABLE `photo` DISABLE KEYS */;

INSERT INTO `photo` (`photo_id`, `angler_photo`, `angler_date`, `overall_closeUp_photo`, `overall_closeUp_date`, `overall_wide_photo`, `overall_wide_date`, `fork_photo`, `fork_date`, `girth_photo`, `girth_date`, `fighting_photo`, `fighting_date`)
VALUES
	(1,'path/angler_photo.jpg','04:50:00','path/overall_closeUp_photo.jpg','04:50:00','path/overall_wide_photo.jpg','04:50:00','path/fork_photo.jpg','04:50:00','path/girth_photo.jpg','04:50:00','path/fighting_photo.jpg','04:50:00'),
	(2,'http://www.blacktipchallenge.com/2013/kyle_blacktip_3rd.jpg','04:50:00','path/overall_closeUp_photo.jpg','04:50:00','path/overall_wide_photo.jpg','04:50:00','path/fork_photo.jpg','04:50:00','path/girth_photo.jpg','04:50:00','path/fighting_photo.jpg','04:50:00'),
	(3,'/asl_project/upload/angler.JPG','04:50:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(4,'/asl_project/upload/angler.JPG','04:50:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(5,'/asl_project/upload/angler.JPG','04:50:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(6,'/asl_project/upload/btc_prd.jpg','04:50:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(7,'/asl_project/upload/me.jpeg','04:50:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(8,'/asl_project/upload/big_grass_carp.jpg','04:50:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(9,'/asl_project/upload/big_jack_S_2.jpg','04:50:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(10,'/asl_project/upload/cbs_news.jpg','04:50:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(11,'/asl_project/upload/big_jack.jpg','04:50:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(12,'/asl_project/upload/DSCF2091.JPG','04:50:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(13,'/asl_project/upload/DSCF2040.JPG','04:50:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(14,'/asl_project/upload/DSC_4079.JPG','04:50:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(15,'/asl_project/upload/DSC_4079.JPG','04:50:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(16,'/asl_project/upload/DSC_4079.JPG','04:50:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(17,'/asl_project/upload/DSC_4079.JPG','04:50:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(18,'/asl_project/upload/IMG_0125.JPG','04:50:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(19,'/asl_project/upload/DSC_4880.JPG','04:50:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(20,'/asl_project/upload/DSC_4880.JPG','04:50:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(21,'/asl_project/upload/DSC_4880.JPG','04:50:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(22,'/asl_project/upload/DSC_4880.JPG','04:50:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(23,'/asl_project/upload/bull_shark_2.jpg','04:50:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(24,'/asl_project/upload/bull_shark_2.jpg','04:50:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(25,'/asl_project/upload/bull_shark_2.jpg','04:50:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(26,'/asl_project/upload/bull_shark_2.jpg','04:50:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(27,'/asl_project/upload/bull_shark_2.jpg','04:50:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(28,'/asl_project/upload/bull_shark_2.jpg','04:50:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(29,'/asl_project/upload/bull_shark_2.jpg','04:50:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(30,'/asl_project/upload/bull_shark_2.jpg','04:50:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(31,'/asl_project/upload/bull_shark_2.jpg','04:50:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(32,'/asl_project/upload/bull_shark_2.jpg','04:50:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(33,'/asl_project/upload/bull_shark_2.jpg','04:50:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(34,'/asl_project/upload/bull_shark_2.jpg','04:50:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(35,'/asl_project/upload/bull_shark_2.jpg','04:50:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(36,'/asl_project/upload/bull_shark_2.jpg','04:50:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(37,'/asl_project/upload/bull_shark_2.jpg','04:50:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(38,'/asl_project/upload/bull_shark_2.jpg','04:50:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(39,'/asl_project/upload/bull_shark_2.jpg','04:50:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(40,'/asl_project/upload/bull_shark_2.jpg','04:50:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(41,'/asl_project/upload/bull_shark_2.jpg','04:50:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(42,'/asl_project/upload/bull_shark_2.jpg','04:50:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(43,'/asl_project/upload/bull_shark_2.jpg','04:50:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(44,'/asl_project/upload/bull_shark_2.jpg','04:50:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(45,'/asl_project/upload/bull_shark_2.jpg','04:50:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(46,'/asl_project/upload/bull_shark_2.jpg','04:50:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(47,'/asl_project/upload/bull_shark_2.jpg','04:50:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(48,'/asl_project/upload/bull_shark_2.jpg','04:50:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(49,'/asl_project/upload/bull_shark_2.jpg','04:50:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(50,'/asl_project/upload/bull_shark_2.jpg','04:50:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(51,'/asl_project/upload/bull_shark_2.jpg','04:50:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(52,'/asl_project/upload/bull_shark_2.jpg','04:50:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(53,'/asl_project/upload/bull_shark_2.jpg','04:50:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(54,'/asl_project/upload/bull_shark_2.jpg','04:50:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(55,'/asl_project/upload/bull_shark_2.jpg','04:50:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(56,'/asl_project/upload/bull_shark_2.jpg','04:50:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(57,'/asl_project/upload/bull_shark_2.jpg','04:50:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(58,'/asl_project/upload/bull_shark_2.jpg','04:50:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(59,'/asl_project/upload/bull_shark_2.jpg','04:50:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(60,'/asl_project/upload/bull_shark_2.jpg','04:50:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(61,'/asl_project/upload/bull_shark_2.jpg','04:50:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(62,'/asl_project/upload/bull_shark_2.jpg','04:50:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(63,'/asl_project/upload/bull_shark_2.jpg','04:50:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(64,'/asl_project/upload/bull_shark_2.jpg','04:50:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(65,'/asl_project/upload/big_jack_S_2.jpg','04:50:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(66,'/asl_project/upload/grass_carp.jpg','04:50:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(67,'/asl_project/upload/grass_carp.jpg','04:50:00',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);

/*!40000 ALTER TABLE `photo` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table register
# ------------------------------------------------------------

DROP TABLE IF EXISTS `register`;

CREATE TABLE `register` (
  `user_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `team_name` varchar(50) DEFAULT NULL,
  `angler_1` varchar(50) DEFAULT NULL,
  `angler_1_age` int(2) DEFAULT NULL,
  `angler_2` varchar(50) DEFAULT NULL,
  `angler_2_age` int(2) DEFAULT NULL,
  `angler_3` varchar(50) DEFAULT NULL,
  `angler_3_age` int(2) DEFAULT NULL,
  `angler_4` varchar(50) DEFAULT NULL,
  `angler_4_age` int(2) DEFAULT NULL,
  `angler_5` varchar(50) DEFAULT NULL,
  `angler_5_age` int(2) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `register` WRITE;
/*!40000 ALTER TABLE `register` DISABLE KEYS */;

INSERT INTO `register` (`user_id`, `team_name`, `angler_1`, `angler_1_age`, `angler_2`, `angler_2_age`, `angler_3`, `angler_3_age`, `angler_4`, `angler_4_age`, `angler_5`, `angler_5_age`, `username`, `password`)
VALUES
	(1,'John Smith','John Smith',25,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'johnsmith','password'),
	(2,'John Smith','John Smith',25,'',0,'',0,'',0,'',0,'johnsmith','password'),
	(3,'Team Bob','Bob',27,'Rob',78,'',0,'',0,'',0,'teambob','password'),
	(4,'Team Bob','John Smith',27,'',0,'',0,'',0,'',0,'username','password'),
	(5,'Blacktip Challenge','Blacktip Challenge',29,'',0,'',0,'',0,'',0,'blacktipchallenge','MfA7YIuy4bh8n4HtjpAvtM1FEzi4/Yf4CnX04BrWXATREx67Bv7s5YjwsMoftoGI6f8enGdepmTGDR24y9r7Ww=='),
	(6,'Team bart','Team bart',56,'',0,'',0,'',0,'',0,'username','5f4dcc3b5aa765d61d8327deb882cf99'),
	(7,'Team Blue','John',78,'Joe',78,'',0,'',0,'',0,'teamblue','5f4dcc3b5aa765d61d8327deb882cf99'),
	(8,'Bob Smith','Bob Smith',56,'',0,'',0,'',0,'',0,'bobsmith','5f4dcc3b5aa765d61d8327deb882cf99'),
	(9,'Team Fullsail','Josh',78,'Bob',67,'',0,'',0,'',0,'joshbob','86a65acd94b33daa87c1c6a2d1408593');

/*!40000 ALTER TABLE `register` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
