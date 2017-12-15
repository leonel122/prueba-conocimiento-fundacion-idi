/*
Navicat MySQL Data Transfer

Source Server         : mysql
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : foundation_idi

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-12-15 10:35:42
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for monitorias
-- ----------------------------
DROP TABLE IF EXISTS `monitorias`;
CREATE TABLE `monitorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_monitor` int(11) DEFAULT NULL,
  `matter` varchar(40) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `lounge` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `monitorias_monitor` (`id_monitor`),
  CONSTRAINT `monitorias_monitor` FOREIGN KEY (`id_monitor`) REFERENCES `monitors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for monitors
-- ----------------------------
DROP TABLE IF EXISTS `monitors`;
CREATE TABLE `monitors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firsts_names` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `academic_program` varchar(40) DEFAULT NULL,
  `semester` varchar(10) DEFAULT NULL,
  `identification_card` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
