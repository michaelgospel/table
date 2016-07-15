/*
Navicat MySQL Data Transfer

Source Server         : mysql
Source Server Version : 50624
Source Host           : localhost:3306
Source Database       : user

Target Server Type    : MYSQL
Target Server Version : 50624
File Encoding         : 65001

Date: 2016-07-15 10:59:49
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for db_index_user
-- ----------------------------
DROP TABLE IF EXISTS `db_index_user`;
CREATE TABLE `db_index_user` (
  `uid` varchar(32) NOT NULL COMMENT '用户id',
  `username` varchar(30) NOT NULL COMMENT '用户名',
  PRIMARY KEY (`uid`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for db_user_1
-- ----------------------------
DROP TABLE IF EXISTS `db_user_1`;
CREATE TABLE `db_user_1` (
  `uid` varchar(32) NOT NULL COMMENT '用户id',
  `username` varchar(30) NOT NULL COMMENT '用户名',
  `password` varchar(30) NOT NULL COMMENT '密码',
  `sex` varchar(30) NOT NULL COMMENT '性别',
  `age` varchar(30) NOT NULL COMMENT '年龄',
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for db_user_2
-- ----------------------------
DROP TABLE IF EXISTS `db_user_2`;
CREATE TABLE `db_user_2` (
  `uid` varchar(32) NOT NULL COMMENT '用户id',
  `username` varchar(30) NOT NULL COMMENT '用户名',
  `password` varchar(30) NOT NULL COMMENT '密码',
  `sex` varchar(30) NOT NULL COMMENT '性别',
  `age` varchar(30) NOT NULL COMMENT '年龄',
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for db_user_3
-- ----------------------------
DROP TABLE IF EXISTS `db_user_3`;
CREATE TABLE `db_user_3` (
  `uid` varchar(32) NOT NULL COMMENT '用户id',
  `username` varchar(30) NOT NULL COMMENT '用户名',
  `password` varchar(30) NOT NULL COMMENT '密码',
  `sex` varchar(30) NOT NULL COMMENT '性别',
  `age` varchar(30) NOT NULL COMMENT '年龄',
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for db_user_4
-- ----------------------------
DROP TABLE IF EXISTS `db_user_4`;
CREATE TABLE `db_user_4` (
  `uid` varchar(32) NOT NULL COMMENT '用户id',
  `username` varchar(30) NOT NULL COMMENT '用户名',
  `password` varchar(30) NOT NULL COMMENT '密码',
  `sex` varchar(30) NOT NULL COMMENT '性别',
  `age` varchar(30) NOT NULL COMMENT '年龄',
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for db_user_5
-- ----------------------------
DROP TABLE IF EXISTS `db_user_5`;
CREATE TABLE `db_user_5` (
  `uid` varchar(32) NOT NULL COMMENT '用户id',
  `username` varchar(30) NOT NULL COMMENT '用户名',
  `password` varchar(30) NOT NULL COMMENT '密码',
  `sex` varchar(30) NOT NULL COMMENT '性别',
  `age` varchar(30) NOT NULL COMMENT '年龄',
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for db_user_6
-- ----------------------------
DROP TABLE IF EXISTS `db_user_6`;
CREATE TABLE `db_user_6` (
  `uid` varchar(32) NOT NULL COMMENT '用户id',
  `username` varchar(30) NOT NULL COMMENT '用户名',
  `password` varchar(30) NOT NULL COMMENT '密码',
  `sex` varchar(30) NOT NULL COMMENT '性别',
  `age` varchar(30) NOT NULL COMMENT '年龄',
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for db_user_7
-- ----------------------------
DROP TABLE IF EXISTS `db_user_7`;
CREATE TABLE `db_user_7` (
  `uid` varchar(32) NOT NULL COMMENT '用户id',
  `username` varchar(30) NOT NULL COMMENT '用户名',
  `password` varchar(30) NOT NULL COMMENT '密码',
  `sex` varchar(30) NOT NULL COMMENT '性别',
  `age` varchar(30) NOT NULL COMMENT '年龄',
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for db_user_8
-- ----------------------------
DROP TABLE IF EXISTS `db_user_8`;
CREATE TABLE `db_user_8` (
  `uid` varchar(32) NOT NULL COMMENT '用户id',
  `username` varchar(30) NOT NULL COMMENT '用户名',
  `password` varchar(30) NOT NULL COMMENT '密码',
  `sex` varchar(30) NOT NULL COMMENT '性别',
  `age` varchar(30) NOT NULL COMMENT '年龄',
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
