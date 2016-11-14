/*
Navicat MySQL Data Transfer

Source Server         : WAMP
Source Server Version : 50711
Source Host           : localhost:3306
Source Database       : zuk_bbs

Target Server Type    : MYSQL
Target Server Version : 50711
File Encoding         : 65001

Date: 2016-11-11 17:29:36
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `zuk_auth_group`
-- ----------------------------
DROP TABLE IF EXISTS `zuk_auth_group`;
CREATE TABLE `zuk_auth_group` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` char(100) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `rules` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zuk_auth_group
-- ----------------------------
INSERT INTO `zuk_auth_group` VALUES ('1', '超级管理员', '1', '0');
INSERT INTO `zuk_auth_group` VALUES ('2', '管理员', '1', '13,14,23,22,21,20,19,18,17,16,15,24,36,34,33,32,31,30,29,27,26,25,1');
INSERT INTO `zuk_auth_group` VALUES ('3', '普通用户', '1', '1');
INSERT INTO `zuk_auth_group` VALUES ('6', '333', '0', '1,2');

-- ----------------------------
-- Table structure for `zuk_auth_group_access`
-- ----------------------------
DROP TABLE IF EXISTS `zuk_auth_group_access`;
CREATE TABLE `zuk_auth_group_access` (
  `uid` mediumint(8) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  UNIQUE KEY `uid_group_id` (`uid`,`group_id`),
  KEY `uid` (`uid`),
  KEY `group_id` (`group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zuk_auth_group_access
-- ----------------------------
INSERT INTO `zuk_auth_group_access` VALUES ('1', '1');
INSERT INTO `zuk_auth_group_access` VALUES ('17', '1');

-- ----------------------------
-- Table structure for `zuk_auth_rule`
-- ----------------------------
DROP TABLE IF EXISTS `zuk_auth_rule`;
CREATE TABLE `zuk_auth_rule` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `name` char(80) NOT NULL DEFAULT '',
  `title` char(20) NOT NULL DEFAULT '',
  `icon` varchar(255) NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `condition` char(100) NOT NULL DEFAULT '',
  `islink` tinyint(1) NOT NULL DEFAULT '1',
  `o` int(11) NOT NULL COMMENT '排序',
  `tips` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=69 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zuk_auth_rule
-- ----------------------------
INSERT INTO `zuk_auth_rule` VALUES ('1', '0', 'Index/index', '管理中心', 'menu-icon fa fa-tachometer', '1', '1', '', '1', '1', '友情提示：经常查看操作日志，发现异常以便及时追查原因。');
INSERT INTO `zuk_auth_rule` VALUES ('2', '0', '', '用户及组', 'menu-icon fa fa-users', '1', '1', '', '1', '2', '');
INSERT INTO `zuk_auth_rule` VALUES ('3', '2', 'Member/index', '所有用户', '', '1', '1', '', '1', '3', '这是网站设置的提示。');
INSERT INTO `zuk_auth_rule` VALUES ('4', '2', 'Member/add', '新增用户', '', '1', '1', '', '1', '4', '');
INSERT INTO `zuk_auth_rule` VALUES ('5', '0', '', '版块管理', 'menu-icon fa fa-send', '1', '1', '', '1', '5', '');
INSERT INTO `zuk_auth_rule` VALUES ('6', '5', '', '所有版块', '', '1', '1', '', '1', '6', '');
INSERT INTO `zuk_auth_rule` VALUES ('7', '5', '', '新增版块', '', '1', '1', '', '1', '7', '');
INSERT INTO `zuk_auth_rule` VALUES ('8', '0', '', '主题管理', 'menu-icon fa fa-legal', '1', '1', '', '1', '8', '');
INSERT INTO `zuk_auth_rule` VALUES ('9', '8', '', '所有主题', '', '1', '1', '', '1', '9', '');
INSERT INTO `zuk_auth_rule` VALUES ('10', '8', '', '新增主题', '', '1', '1', '', '1', '10', '');
INSERT INTO `zuk_auth_rule` VALUES ('11', '0', '', '帖子管理', 'menu-icon fa fa-cubes', '1', '1', '', '1', '11', '');
INSERT INTO `zuk_auth_rule` VALUES ('12', '11', '', '所有帖子', '', '1', '1', '', '1', '12', '');
INSERT INTO `zuk_auth_rule` VALUES ('13', '11', '', '发布帖子', '', '1', '1', '', '1', '13', '');
INSERT INTO `zuk_auth_rule` VALUES ('14', '11', '', '帖子回收', '', '1', '1', '', '1', '14', '');
INSERT INTO `zuk_auth_rule` VALUES ('15', '0', '', '评论管理', 'menu-icon fa fa-comment', '1', '1', '', '1', '15', '');
INSERT INTO `zuk_auth_rule` VALUES ('16', '15', '', '所有评论', '', '1', '1', '', '1', '16', '');
INSERT INTO `zuk_auth_rule` VALUES ('17', '15', '', '评论回收', '', '1', '1', '', '1', '17', '');
INSERT INTO `zuk_auth_rule` VALUES ('18', '0', '', '金币管理', 'menu-icon fa fa-jpy', '1', '1', '', '1', '18', '');
INSERT INTO `zuk_auth_rule` VALUES ('19', '18', '', '金币明细', '', '1', '1', '', '1', '19', '');
INSERT INTO `zuk_auth_rule` VALUES ('20', '18', '', '商品管理', '', '1', '1', '', '1', '20', '');
INSERT INTO `zuk_auth_rule` VALUES ('21', '0', '', '链接管理', 'menu-icon fa fa-link', '1', '1', '', '1', '21', '');
INSERT INTO `zuk_auth_rule` VALUES ('22', '21', '', '友链管理', '', '1', '1', '', '1', '22', '');
INSERT INTO `zuk_auth_rule` VALUES ('23', '21', '', '新增友链', '', '1', '1', '', '1', '23', '');
INSERT INTO `zuk_auth_rule` VALUES ('24', '21', '', '广告管理', '', '1', '1', '', '1', '24', '');
INSERT INTO `zuk_auth_rule` VALUES ('25', '21', '', '标签管理', '', '1', '1', '', '1', '25', null);
INSERT INTO `zuk_auth_rule` VALUES ('26', '0', '', '系统设置', 'menu-icon fa fa-cog', '1', '1', '', '1', '26', '');
INSERT INTO `zuk_auth_rule` VALUES ('27', '26', 'Menu/index', '菜单管理', '', '1', '1', '', '1', '27', '');
INSERT INTO `zuk_auth_rule` VALUES ('29', '26', 'Menu/add', '新增菜单', '', '1', '1', '', '1', '29', '');
INSERT INTO `zuk_auth_rule` VALUES ('30', '26', 'Setting/setting', '网站设置', '', '1', '1', '', '1', '30', '');
INSERT INTO `zuk_auth_rule` VALUES ('67', '2', '', '用户组管理', '', '1', '1', '', '1', '0', '');
INSERT INTO `zuk_auth_rule` VALUES ('68', '2', '', '新增用户组', '', '1', '1', '', '1', '0', '');

-- ----------------------------
-- Table structure for `zuk_log`
-- ----------------------------
DROP TABLE IF EXISTS `zuk_log`;
CREATE TABLE `zuk_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `t` int(10) NOT NULL,
  `ip` varchar(16) NOT NULL,
  `log` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=106 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zuk_log
-- ----------------------------
INSERT INTO `zuk_log` VALUES ('1', 'admin', '1478514134', '::1', '登录成功。');
INSERT INTO `zuk_log` VALUES ('2', 'admin', '1478516647', '127.0.0.1', '登录成功。');
INSERT INTO `zuk_log` VALUES ('3', 'admin', '1478517162', '127.0.0.1', '登录成功。');
INSERT INTO `zuk_log` VALUES ('4', 'admin', '1478517844', '127.0.0.1', '新增会员，会员UID：2');
INSERT INTO `zuk_log` VALUES ('5', 'admin', '1478524235', '127.0.0.1', '登录成功。');
INSERT INTO `zuk_log` VALUES ('6', 'admin', '1478567438', '127.0.0.1', '登录成功。');
INSERT INTO `zuk_log` VALUES ('7', 'admin', '1478612453', '127.0.0.1', '登录成功。');
INSERT INTO `zuk_log` VALUES ('8', 'admin', '1478659847', '127.0.0.1', '登录成功。');
INSERT INTO `zuk_log` VALUES ('9', 'adminadmin', '1478676293', '127.0.0.1', '登录失败。');
INSERT INTO `zuk_log` VALUES ('10', 'admin', '1478676305', '127.0.0.1', '登录成功。');
INSERT INTO `zuk_log` VALUES ('11', 'admin', '1478681510', '127.0.0.1', '编辑用户组，ID：1，组名：超级管理员');
INSERT INTO `zuk_log` VALUES ('12', 'admin', '1478692304', '127.0.0.1', '修改网站配置。');
INSERT INTO `zuk_log` VALUES ('13', 'admin', '1478692306', '127.0.0.1', '修改网站配置。');
INSERT INTO `zuk_log` VALUES ('14', 'admin', '1478692326', '127.0.0.1', '修改网站配置。');
INSERT INTO `zuk_log` VALUES ('15', 'admin', '1478692329', '127.0.0.1', '修改网站配置。');
INSERT INTO `zuk_log` VALUES ('16', 'admin', '1478692331', '127.0.0.1', '修改网站配置。');
INSERT INTO `zuk_log` VALUES ('17', 'admin', '1478692335', '127.0.0.1', '修改网站配置。');
INSERT INTO `zuk_log` VALUES ('18', 'admin', '1478692434', '127.0.0.1', '修改网站配置。');
INSERT INTO `zuk_log` VALUES ('19', 'admin', '1478692435', '127.0.0.1', '修改网站配置。');
INSERT INTO `zuk_log` VALUES ('20', 'admin', '1478692436', '127.0.0.1', '修改网站配置。');
INSERT INTO `zuk_log` VALUES ('21', 'admin', '1478692438', '127.0.0.1', '修改网站配置。');
INSERT INTO `zuk_log` VALUES ('22', 'admin', '1478692440', '127.0.0.1', '修改网站配置。');
INSERT INTO `zuk_log` VALUES ('23', 'admin', '1478692441', '127.0.0.1', '修改网站配置。');
INSERT INTO `zuk_log` VALUES ('24', 'admin', '1478692442', '127.0.0.1', '修改网站配置。');
INSERT INTO `zuk_log` VALUES ('25', 'admin', '1478692443', '127.0.0.1', '修改网站配置。');
INSERT INTO `zuk_log` VALUES ('26', 'admin', '1478692444', '127.0.0.1', '修改网站配置。');
INSERT INTO `zuk_log` VALUES ('27', 'admin', '1478692445', '127.0.0.1', '修改网站配置。');
INSERT INTO `zuk_log` VALUES ('28', 'admin', '1478692446', '127.0.0.1', '修改网站配置。');
INSERT INTO `zuk_log` VALUES ('29', 'admin', '1478692447', '127.0.0.1', '修改网站配置。');
INSERT INTO `zuk_log` VALUES ('30', 'admin', '1478692448', '127.0.0.1', '修改网站配置。');
INSERT INTO `zuk_log` VALUES ('31', 'admin', '1478760714', '127.0.0.1', '登录成功。');
INSERT INTO `zuk_log` VALUES ('32', 'admin', '1478763205', '127.0.0.1', '登录成功。');
INSERT INTO `zuk_log` VALUES ('33', 'admin', '1478768440', '127.0.0.1', '登录成功。');
INSERT INTO `zuk_log` VALUES ('34', 'admin', '1478768473', '127.0.0.1', '登录成功。');
INSERT INTO `zuk_log` VALUES ('35', 'admin', '1478768492', '127.0.0.1', '登录成功。');
INSERT INTO `zuk_log` VALUES ('36', 'admin', '1478770147', '127.0.0.1', '编辑菜单，ID：1');
INSERT INTO `zuk_log` VALUES ('37', 'admin', '1478774230', '127.0.0.1', '编辑菜单，ID：30');
INSERT INTO `zuk_log` VALUES ('38', 'admin', '1478774635', '127.0.0.1', '登录成功。');
INSERT INTO `zuk_log` VALUES ('39', 'admin', '1478774823', '127.0.0.1', '登录成功。');
INSERT INTO `zuk_log` VALUES ('40', 'admin', '1478775916', '127.0.0.1', '修改网站配置。');
INSERT INTO `zuk_log` VALUES ('41', 'admin', '1478776032', '127.0.0.1', '编辑菜单，ID：1');
INSERT INTO `zuk_log` VALUES ('42', 'admin', '1478776060', '127.0.0.1', '编辑菜单，ID：26');
INSERT INTO `zuk_log` VALUES ('43', 'admin', '1478776089', '127.0.0.1', '编辑菜单，ID：2');
INSERT INTO `zuk_log` VALUES ('44', 'admin', '1478776099', '127.0.0.1', '编辑菜单，ID：2');
INSERT INTO `zuk_log` VALUES ('45', 'admin', '1478776117', '127.0.0.1', '编辑菜单，ID：2');
INSERT INTO `zuk_log` VALUES ('46', 'admin', '1478776191', '127.0.0.1', '编辑菜单，ID：5');
INSERT INTO `zuk_log` VALUES ('47', 'admin', '1478776352', '127.0.0.1', '编辑菜单，ID：21');
INSERT INTO `zuk_log` VALUES ('48', 'admin', '1478776432', '127.0.0.1', '修改网站配置。');
INSERT INTO `zuk_log` VALUES ('49', 'admin', '1478777586', '127.0.0.1', '编辑菜单，ID：5');
INSERT INTO `zuk_log` VALUES ('50', 'admin', '1478777631', '127.0.0.1', '编辑菜单，ID：21');
INSERT INTO `zuk_log` VALUES ('51', 'admin', '1478777707', '127.0.0.1', '编辑菜单，ID：18');
INSERT INTO `zuk_log` VALUES ('52', 'admin', '1478777760', '127.0.0.1', '编辑菜单，ID：15');
INSERT INTO `zuk_log` VALUES ('53', 'admin', '1478778368', '127.0.0.1', '编辑菜单，ID：11');
INSERT INTO `zuk_log` VALUES ('54', 'admin', '1478778531', '127.0.0.1', '新增菜单，名称：权限管理');
INSERT INTO `zuk_log` VALUES ('55', 'admin', '1478778564', '127.0.0.1', '新增菜单，名称：新增权限');
INSERT INTO `zuk_log` VALUES ('56', 'admin', '1478779165', '127.0.0.1', '编辑菜单，ID：3');
INSERT INTO `zuk_log` VALUES ('57', 'admin', '1478779191', '127.0.0.1', '编辑菜单，ID：4');
INSERT INTO `zuk_log` VALUES ('58', 'admin', '1478779814', '127.0.0.1', '删除会员UID：Array');
INSERT INTO `zuk_log` VALUES ('59', 'admin', '1478780081', '127.0.0.1', '编辑菜单，ID：2');
INSERT INTO `zuk_log` VALUES ('60', 'admin', '1478780102', '127.0.0.1', '编辑菜单，ID：67');
INSERT INTO `zuk_log` VALUES ('61', 'admin', '1478780119', '127.0.0.1', '编辑菜单，ID：68');
INSERT INTO `zuk_log` VALUES ('62', 'admin', '1478780344', '127.0.0.1', '新增会员，会员UID：3');
INSERT INTO `zuk_log` VALUES ('63', 'admin', '1478780371', '127.0.0.1', '删除会员UID：Array');
INSERT INTO `zuk_log` VALUES ('64', 'admin', '1478780433', '127.0.0.1', '新增会员，会员UID：4');
INSERT INTO `zuk_log` VALUES ('65', 'admin', '1478780601', '127.0.0.1', '删除会员UID：Array');
INSERT INTO `zuk_log` VALUES ('66', 'admin', '1478780645', '127.0.0.1', '新增会员，会员UID：5');
INSERT INTO `zuk_log` VALUES ('67', 'admin', '1478781082', '127.0.0.1', '删除会员UID：5');
INSERT INTO `zuk_log` VALUES ('68', 'admin', '1478781088', '127.0.0.1', '新增会员，会员UID：6');
INSERT INTO `zuk_log` VALUES ('69', 'admin', '1478781097', '127.0.0.1', '删除会员UID：Array');
INSERT INTO `zuk_log` VALUES ('70', 'admin', '1478781102', '127.0.0.1', '新增会员，会员UID：7');
INSERT INTO `zuk_log` VALUES ('71', 'admin', '1478781108', '127.0.0.1', '删除会员UID：7');
INSERT INTO `zuk_log` VALUES ('72', 'admin', '1478781119', '127.0.0.1', '新增会员，会员UID：8');
INSERT INTO `zuk_log` VALUES ('73', 'admin', '1478781150', '127.0.0.1', '新增会员，会员UID：9');
INSERT INTO `zuk_log` VALUES ('74', 'admin', '1478781159', '127.0.0.1', '删除会员UID：Array');
INSERT INTO `zuk_log` VALUES ('75', 'admin', '1478782403', '127.0.0.1', '新增会员，会员UID：10');
INSERT INTO `zuk_log` VALUES ('76', 'admin', '1478782551', '127.0.0.1', '编辑会员信息，会员UID：1');
INSERT INTO `zuk_log` VALUES ('77', 'admin', '1478782903', '127.0.0.1', '新增会员，会员UID：11');
INSERT INTO `zuk_log` VALUES ('78', 'admin2', '1478782914', '127.0.0.1', '登录成功。');
INSERT INTO `zuk_log` VALUES ('79', 'admin2', '1478783587', '127.0.0.1', '编辑会员信息，会员UID：1');
INSERT INTO `zuk_log` VALUES ('80', 'admin2', '1478784030', '127.0.0.1', '编辑会员信息，会员UID：1');
INSERT INTO `zuk_log` VALUES ('81', 'admin', '1478784049', '127.0.0.1', '登录成功。');
INSERT INTO `zuk_log` VALUES ('82', 'admin', '1478784360', '127.0.0.1', '编辑会员信息，会员UID：1');
INSERT INTO `zuk_log` VALUES ('83', 'admin', '1478784676', '127.0.0.1', '新增会员，会员UID：12');
INSERT INTO `zuk_log` VALUES ('84', 'admin', '1478784805', '127.0.0.1', '新增会员，会员UID：13');
INSERT INTO `zuk_log` VALUES ('85', 'admin', '1478787605', '127.0.0.1', '编辑会员信息，会员UID：10');
INSERT INTO `zuk_log` VALUES ('86', 'admin1', '1478787663', '127.0.0.1', '登录成功。');
INSERT INTO `zuk_log` VALUES ('87', 'admin', '1478787774', '127.0.0.1', '登录成功。');
INSERT INTO `zuk_log` VALUES ('88', 'admin', '1478787843', '127.0.0.1', '编辑会员信息，会员UID：1');
INSERT INTO `zuk_log` VALUES ('89', 'admin', '1478787882', '127.0.0.1', '编辑会员信息，会员UID：1');
INSERT INTO `zuk_log` VALUES ('90', 'admin', '1478787892', '127.0.0.1', '编辑会员信息，会员UID：1');
INSERT INTO `zuk_log` VALUES ('91', 'admin', '1478787898', '127.0.0.1', '编辑会员信息，会员UID：1');
INSERT INTO `zuk_log` VALUES ('92', 'admin', '1478787931', '127.0.0.1', '编辑会员信息，会员UID：11');
INSERT INTO `zuk_log` VALUES ('93', 'admin', '1478788145', '127.0.0.1', '编辑会员信息，会员UID：1');
INSERT INTO `zuk_log` VALUES ('94', 'admin', '1478788722', '127.0.0.1', '编辑会员信息，会员UID：1');
INSERT INTO `zuk_log` VALUES ('95', 'admin', '1478788752', '127.0.0.1', '编辑会员信息，会员UID：1');
INSERT INTO `zuk_log` VALUES ('96', 'admin', '1478788968', '127.0.0.1', '编辑会员信息，会员UID：1');
INSERT INTO `zuk_log` VALUES ('97', 'admin', '1478789049', '127.0.0.1', '编辑会员信息，会员UID：1');
INSERT INTO `zuk_log` VALUES ('98', 'admin', '1478854309', '127.0.0.1', '登录成功。');
INSERT INTO `zuk_log` VALUES ('99', 'admin', '1478854396', '127.0.0.1', '编辑会员信息，会员UID：1');
INSERT INTO `zuk_log` VALUES ('100', 'admin', '1478854418', '127.0.0.1', '删除会员UID：Array');
INSERT INTO `zuk_log` VALUES ('101', 'admin', '1478854456', '127.0.0.1', '删除会员UID：11');
INSERT INTO `zuk_log` VALUES ('102', 'admin', '1478854462', '127.0.0.1', '删除会员UID：10');
INSERT INTO `zuk_log` VALUES ('103', 'admin', '1478854536', '127.0.0.1', '新增会员，会员UID：17');
INSERT INTO `zuk_log` VALUES ('104', 'admin', '1478854557', '127.0.0.1', '编辑会员信息，会员UID：17');
INSERT INTO `zuk_log` VALUES ('105', 'admin', '1478855414', '127.0.0.1', '登录成功。');

-- ----------------------------
-- Table structure for `zuk_member`
-- ----------------------------
DROP TABLE IF EXISTS `zuk_member`;
CREATE TABLE `zuk_member` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(225) NOT NULL,
  `head` varchar(255) NOT NULL COMMENT '头像',
  `sex` tinyint(1) NOT NULL COMMENT '0保密1男，2女',
  `birthday` int(10) NOT NULL COMMENT '生日',
  `phone` varchar(20) NOT NULL COMMENT '电话',
  `qq` varchar(20) NOT NULL COMMENT 'QQ',
  `email` varchar(255) NOT NULL COMMENT '邮箱',
  `password` varchar(32) NOT NULL,
  `t` int(10) unsigned NOT NULL COMMENT '注册时间',
  `status` tinyint(1) NOT NULL COMMENT '0 正常 1封禁',
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zuk_member
-- ----------------------------
INSERT INTO `zuk_member` VALUES ('1', 'admin', '/Public/attached/2016/11/10/582487b8c95e6.jpg', '1', '1478793600', '13053237223', '239126037', 'shineky7@163.com', '66d6a1c8748025462128dc75bf5ae8d1', '1478854396', '0');
INSERT INTO `zuk_member` VALUES ('17', 'sky', '/Public/attached/2016/11/11/582587856e249.jpg', '0', '-28800', '', '', '', '66d6a1c8748025462128dc75bf5ae8d1', '1478854557', '0');

-- ----------------------------
-- Table structure for `zuk_setting`
-- ----------------------------
DROP TABLE IF EXISTS `zuk_setting`;
CREATE TABLE `zuk_setting` (
  `k` varchar(100) NOT NULL COMMENT '变量',
  `v` varchar(255) NOT NULL COMMENT '值',
  `type` tinyint(1) NOT NULL COMMENT '0系统，1自定义',
  `name` varchar(255) NOT NULL COMMENT '说明',
  PRIMARY KEY (`k`),
  KEY `k` (`k`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zuk_setting
-- ----------------------------
INSERT INTO `zuk_setting` VALUES ('sitename', 'ZUK-BBS', '0', '');
INSERT INTO `zuk_setting` VALUES ('title', 'ZUK-BBS', '0', '');
INSERT INTO `zuk_setting` VALUES ('keywords', 'ZUK-BBS', '0', '');
INSERT INTO `zuk_setting` VALUES ('description', 'ZUK-BBS', '0', '');
