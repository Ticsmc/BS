/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 50645
 Source Host           : 10.10.7.1:3306
 Source Schema         : tindb

 Target Server Type    : MySQL
 Target Server Version : 50645
 File Encoding         : 65001

 Date: 21/03/2020 20:20:34
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for account
-- ----------------------------
DROP TABLE IF EXISTS `account`;
CREATE TABLE `account`  (
  `Id` int(11) NOT NULL,
  `rest` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `own` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`Id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of account
-- ----------------------------
INSERT INTO `account` VALUES (1, '1', '666');

-- ----------------------------
-- Table structure for news
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news`  (
  `id` int(11) NOT NULL,
  `title` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `content` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES (1, 'zhr', 'zhr is very good.');
INSERT INTO `news` VALUES (2, 'MstLab', 'MstLab are very cool.');

-- ----------------------------
-- Table structure for site
-- ----------------------------
DROP TABLE IF EXISTS `site`;
CREATE TABLE `site`  (
  `s_id` int(11) NOT NULL,
  `s_type_id` int(11) NOT NULL,
  `s_name` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `s_url` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`s_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of site
-- ----------------------------
INSERT INTO `site` VALUES (1, 1, 'SQLi 数字型', './sit/sql_injection/sql_num.php');
INSERT INTO `site` VALUES (2, 1, 'SQLi 字符型', './sit/sql_injection/sql_string.php');
INSERT INTO `site` VALUES (3, 1, 'SQLi 搜索型', './sit/sql_injection/sql_search.php');
INSERT INTO `site` VALUES (4, 2, 'XSS 反射型', './sit/xss/reflect_xss.php');
INSERT INTO `site` VALUES (5, 2, 'XSS 存储型', './sit/xss/stored_xss.php');
INSERT INTO `site` VALUES (6, 2, 'XSS DOM型', './sit/xss/dom_xss.php');
INSERT INTO `site` VALUES (7, 3, 'JSONP劫持', './sit/csrf/jsonp.php?callback=test');
INSERT INTO `site` VALUES (8, 3, 'CORS跨域资源读取', './sit/csrf/userinfo.php');
INSERT INTO `site` VALUES (9, 4, '任意文件包含', './sit/file_include/any_include.php');
INSERT INTO `site` VALUES (10, 4, '目录限制文件包含', './sit/file_include/include_1.php');
INSERT INTO `site` VALUES (11, 5, '任意文件上传', './sit/file_upload/any_upload.php');
INSERT INTO `site` VALUES (12, 5, 'JS限制文件上传', './sit/file_upload/upload_js.php');
INSERT INTO `site` VALUES (13, 5, 'MIME限制文件上传', './sit/file_upload/upload_mime.php');
INSERT INTO `site` VALUES (15, 5, '内容限制文件上传', './sit/file_upload/upload_content.php');
INSERT INTO `site` VALUES (16, 6, '任意代码执行', './sit/code_exec/code.php');
INSERT INTO `site` VALUES (17, 6, '任意命令执行', './sit/code_exec/exec.php');
INSERT INTO `site` VALUES (18, 7, 'SSRF', './sit/ssrf/ssrf.php');
INSERT INTO `site` VALUES (19, 7, '条件竞争-支付', './sit/race_condition/pay.php');
INSERT INTO `site` VALUES (20, 7, '条件竞争-上传', './sit/race_condition/upload.php');
INSERT INTO `site` VALUES (21, 7, '任意文件读取', './sit/others/file_read.php');
INSERT INTO `site` VALUES (22, 7, 'XXE', './sit/xxe/');

-- ----------------------------
-- Table structure for site_type
-- ----------------------------
DROP TABLE IF EXISTS `site_type`;
CREATE TABLE `site_type`  (
  `st_id` int(11) NOT NULL,
  `st_name` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`st_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of site_type
-- ----------------------------
INSERT INTO `site_type` VALUES (1, 'SQL注入');
INSERT INTO `site_type` VALUES (2, 'XSS跨站');
INSERT INTO `site_type` VALUES (3, 'CSRF');
INSERT INTO `site_type` VALUES (4, '文件包含');
INSERT INTO `site_type` VALUES (5, '文件上传');
INSERT INTO `site_type` VALUES (6, '代码/命令执行');
INSERT INTO `site_type` VALUES (7, '其他');

SET FOREIGN_KEY_CHECKS = 1;
