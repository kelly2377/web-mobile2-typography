-- Adminer 5.4.2 MySQL 8.0.27 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `contactMessages`;
CREATE TABLE `contactMessages` (
  `messageID` smallint NOT NULL AUTO_INCREMENT,
  `firstName` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phoneNumber` varchar(13) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contactReason` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`messageID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `contactMessages` (`messageID`, `firstName`, `lastName`, `email`, `phoneNumber`, `contactReason`, `message`, `date`) VALUES
(1,	'Jerome',	'Dobson',	'jgtod@gmail.com',	'2672362367',	'New Topic',	'yar har fiddle dee dee',	'2026-04-14 17:45:41'),
(2,	'john',	'crow',	'jankrow@gmail.com',	'2343234322',	'New Topic',	'being a pirate is alright to be',	'2026-04-14 17:46:39'),
(3,	'john',	'doe',	'johndoe@gmail.com',	'',	'New Topic',	'hehe',	'2026-04-16 14:49:59'),
(4,	'john',	'doe',	'johndoe@gmail.com',	'123-456-7891',	'New Topic',	'hehe',	'2026-04-16 14:53:51'),
(6,	'john',	'doe',	'johndoe@gmail.com',	'(123)4567891',	'New Topic',	'hehe',	'2026-04-16 14:57:13'),
(10,	'john',	'doe',	'johncena@gmail.com',	'',	'Content Feedback',	'yar',	'2026-04-16 15:55:20'),
(11,	'john',	'doe',	'johncena@gmail.com',	'',	'Content Feedback',	'yar',	'2026-04-16 15:59:00');

-- 2026-04-19 04:06:57 UTC
