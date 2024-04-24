/*
 Navicat MySQL Data Transfer

 Source Server         : local
 Source Server Type    : MariaDB
 Source Server Version : 101106 (10.11.6-MariaDB-0+deb12u1)
 Source Host           : localhost:3306
 Source Schema         : demo

 Target Server Type    : MariaDB
 Target Server Version : 101106 (10.11.6-MariaDB-0+deb12u1)
 File Encoding         : 65001

 Date: 24/04/2024 17:04:21
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for User
-- ----------------------------
DROP TABLE IF EXISTS `User`;
CREATE TABLE `User` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `firstName` varchar(255) DEFAULT NULL,
  `lastName` varchar(255) DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of User
-- ----------------------------
BEGIN;
INSERT INTO `User` (`id`, `email`, `password`, `firstName`, `lastName`, `active`) VALUES (1, 'user@example.com', 'e10adc3949ba59abbe56e057f20f883e', 'User', NULL, 1);
INSERT INTO `User` (`id`, `email`, `password`, `firstName`, `lastName`, `active`) VALUES (2, 'wedwedwed', 'dwedwed', 'edwe', 'dwedwed', NULL);
INSERT INTO `User` (`id`, `email`, `password`, `firstName`, `lastName`, `active`) VALUES (3, 'wedwedwed', 'dwedwed', 'edwe', 'dwedwed', NULL);
INSERT INTO `User` (`id`, `email`, `password`, `firstName`, `lastName`, `active`) VALUES (4, 'wedwedwed', 'dwedwed', 'edwe', 'dwedwed', NULL);
INSERT INTO `User` (`id`, `email`, `password`, `firstName`, `lastName`, `active`) VALUES (5, 'wedwedwed', 'dwedwed', 'edwe', 'dwedwed', NULL);
INSERT INTO `User` (`id`, `email`, `password`, `firstName`, `lastName`, `active`) VALUES (6, 'wedwedwed', 'dwedwed', 'edwe', 'dwedwed', NULL);
INSERT INTO `User` (`id`, `email`, `password`, `firstName`, `lastName`, `active`) VALUES (7, 'wedwedwed', 'dwedwed', 'edwe', 'dwedwed', NULL);
INSERT INTO `User` (`id`, `email`, `password`, `firstName`, `lastName`, `active`) VALUES (8, 'wedwedwed', 'dwedwed', 'edwe', 'dwedwed', NULL);
INSERT INTO `User` (`id`, `email`, `password`, `firstName`, `lastName`, `active`) VALUES (9, 'wedwedwed', 'dwedwed', 'edwe', 'dwedwed', NULL);
INSERT INTO `User` (`id`, `email`, `password`, `firstName`, `lastName`, `active`) VALUES (10, 'wedwedwed', 'dwedwed', 'edwe', 'dwedwed', NULL);
INSERT INTO `User` (`id`, `email`, `password`, `firstName`, `lastName`, `active`) VALUES (11, 'wedwedwed', 'dwedwed', 'edwe', 'dwedwed', NULL);
INSERT INTO `User` (`id`, `email`, `password`, `firstName`, `lastName`, `active`) VALUES (12, 'wedwedwed', 'dwedwed', 'edwe', 'dwedwed', NULL);
INSERT INTO `User` (`id`, `email`, `password`, `firstName`, `lastName`, `active`) VALUES (13, 'dasdas', 'dadadad', 'asd', 'sdasd', NULL);
INSERT INTO `User` (`id`, `email`, `password`, `firstName`, `lastName`, `active`) VALUES (14, 'dasdas', 'dadadad', 'asd', 'sdasd', NULL);
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
