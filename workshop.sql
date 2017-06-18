/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100206
 Source Host           : localhost
 Source Database       : workshop

 Target Server Type    : MySQL
 Target Server Version : 100206
 File Encoding         : utf-8

 Date: 06/18/2017 22:22:36 PM
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `kontak`
-- ----------------------------
DROP TABLE IF EXISTS `kontak`;
CREATE TABLE `kontak` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pesan` text NOT NULL,
  `tanggal` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `kontak`
-- ----------------------------
BEGIN;
INSERT INTO `kontak` VALUES ('2', 'Rizky', 'riskihajar@gmail.com', 'test', '2017-06-18 16:19:32');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
