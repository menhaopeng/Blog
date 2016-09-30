/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50547
Source Host           : localhost:3306
Source Database       : blog

Target Server Type    : MYSQL
Target Server Version : 50547
File Encoding         : 65001

Date: 2016-09-30 16:08:46
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for blog_category
-- ----------------------------
DROP TABLE IF EXISTS `blog_category`;
CREATE TABLE `blog_category` (
  `cate_id` int(11) NOT NULL AUTO_INCREMENT,
  `cate_name` varchar(50) DEFAULT '' COMMENT '//分类名称',
  `cate_title` varchar(255) DEFAULT '' COMMENT '//分类说明',
  `cate_keywords` varchar(255) DEFAULT '' COMMENT '//关键词',
  `cate_description` varchar(255) DEFAULT '' COMMENT '//描述',
  `cate_view` int(10) DEFAULT '0' COMMENT '//查看次数',
  `cate_order` tinyint(255) DEFAULT '0' COMMENT '//排序',
  `cate_pid` int(11) DEFAULT '0' COMMENT '//父级id',
  PRIMARY KEY (`cate_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=gbk COMMENT='文章分类';

-- ----------------------------
-- Records of blog_category
-- ----------------------------
INSERT INTO `blog_category` VALUES ('1', '新闻', '最新！最全的新闻资讯', '', '', '0', '3', '0');
INSERT INTO `blog_category` VALUES ('2', '体育', '全民健身', '', '', '0', '1', '0');
INSERT INTO `blog_category` VALUES ('3', '娱乐', '各大媒体八卦', '', '', '0', '0', '0');
INSERT INTO `blog_category` VALUES ('4', '腾讯新闻', '新闻中心_腾讯网', '', '', '0', '0', '1');
INSERT INTO `blog_category` VALUES ('5', '新闻联播', '全集高清视频在线观看', '', '', '0', '0', '1');
INSERT INTO `blog_category` VALUES ('6', '搜狐体育', '搜狐体育-搜狐', '', '', '0', '0', '2');
INSERT INTO `blog_category` VALUES ('7', 'sina体育', '2016年里约奥运会_新浪奥运', '', '', '0', '0', '2');

-- ----------------------------
-- Table structure for blog_user
-- ----------------------------
DROP TABLE IF EXISTS `blog_user`;
CREATE TABLE `blog_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT '' COMMENT '//用户名',
  `password` varchar(255) DEFAULT '' COMMENT '//密码',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=gbk COMMENT='管理员';

-- ----------------------------
-- Records of blog_user
-- ----------------------------
INSERT INTO `blog_user` VALUES ('1', 'admin', 'eyJpdiI6IlRKWlVCSDhkMjYzZUgyS29SMkJXR0E9PSIsInZhbHVlIjoiN2htcmdVMXJscTFlMFcxTzJjZ0ttdz09IiwibWFjIjoiNTUzM2UyZGZhZjIyOWJmYWU0YTY5MGM1NTRiYTcyNDU2ZmExZGQ4ODlmNzhmYzk2MmJmZWQ2NDRiODdhN2QzNCJ9');
