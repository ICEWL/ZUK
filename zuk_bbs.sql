/*
Navicat MySQL Data Transfer

Source Server         : WAMP
Source Server Version : 50711
Source Host           : localhost:3306
Source Database       : zuk_bbs

Target Server Type    : MYSQL
Target Server Version : 50711
File Encoding         : 65001

Date: 2016-11-16 09:12:33
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `zuk_article`
-- ----------------------------
DROP TABLE IF EXISTS `zuk_article`;
CREATE TABLE `zuk_article` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `mid` int(11) NOT NULL COMMENT '发贴人id',
  `sid` int(11) NOT NULL COMMENT '版块id',
  `title` varchar(255) NOT NULL COMMENT '标题',
  `keywords` varchar(255) DEFAULT NULL COMMENT '标签',
  `thumbnail` varchar(255) NOT NULL COMMENT '缩略图',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0：正常  1：待审',
  `content` text NOT NULL COMMENT '内容',
  `t` int(10) unsigned NOT NULL COMMENT '时间',
  `n` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '点击',
  PRIMARY KEY (`aid`),
  KEY `sid` (`sid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zuk_article
-- ----------------------------
INSERT INTO `zuk_article` VALUES ('3', '1', '47', '1', '', '', '0', '1', '1479194514', '0');

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
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zuk_auth_group
-- ----------------------------
INSERT INTO `zuk_auth_group` VALUES ('1', '超级管理员', '1', '0');
INSERT INTO `zuk_auth_group` VALUES ('2', '管理员', '1', '13,14,23,22,21,20,19,18,17,16,15,24,36,34,33,32,31,30,29,27,26,25,1');
INSERT INTO `zuk_auth_group` VALUES ('3', '普通用户', '1', '1');

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
) ENGINE=MyISAM AUTO_INCREMENT=71 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zuk_auth_rule
-- ----------------------------
INSERT INTO `zuk_auth_rule` VALUES ('1', '0', 'Index/index', '管理中心', 'menu-icon fa fa-tachometer', '1', '1', '', '1', '1', null);
INSERT INTO `zuk_auth_rule` VALUES ('2', '0', '', '用户及组', 'menu-icon fa fa-users', '1', '1', '', '1', '2', '');
INSERT INTO `zuk_auth_rule` VALUES ('3', '2', 'Member/index', '所有用户', '', '1', '1', '', '1', '3', null);
INSERT INTO `zuk_auth_rule` VALUES ('4', '2', 'Member/add', '新增用户', '', '1', '1', '', '1', '4', '');
INSERT INTO `zuk_auth_rule` VALUES ('5', '0', '', '版块管理', 'menu-icon fa fa-send', '1', '1', '', '1', '5', '');
INSERT INTO `zuk_auth_rule` VALUES ('6', '5', 'Category/index', '所有版块', '', '1', '1', '', '1', '6', '');
INSERT INTO `zuk_auth_rule` VALUES ('7', '5', 'Category/add', '新增版块', '', '1', '1', '', '1', '7', '');
INSERT INTO `zuk_auth_rule` VALUES ('9', '8', '', '所有主题', '', '1', '1', '', '1', '9', '');
INSERT INTO `zuk_auth_rule` VALUES ('10', '8', '', '新增主题', '', '1', '1', '', '1', '10', '');
INSERT INTO `zuk_auth_rule` VALUES ('11', '0', '', '帖子管理', 'menu-icon fa fa-cubes', '1', '1', '', '1', '11', '');
INSERT INTO `zuk_auth_rule` VALUES ('12', '11', 'Article/index', '所有帖子', '', '1', '1', '', '1', '12', '');
INSERT INTO `zuk_auth_rule` VALUES ('13', '11', 'Article/add', '发布帖子', '', '1', '1', '', '1', '13', '');
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
INSERT INTO `zuk_auth_rule` VALUES ('67', '2', 'Group/index', '用户组管理', '', '1', '1', '', '1', '32', '');
INSERT INTO `zuk_auth_rule` VALUES ('68', '2', 'Group/add', '新增用户组', '', '1', '1', '', '1', '33', '');
INSERT INTO `zuk_auth_rule` VALUES ('70', '11', 'Article/manage', '帖子审核', '', '1', '1', '', '1', '15', '');

-- ----------------------------
-- Table structure for `zuk_category`
-- ----------------------------
DROP TABLE IF EXISTS `zuk_category`;
CREATE TABLE `zuk_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` tinyint(1) NOT NULL COMMENT '0zuk，1moto，2粉丝,3站务',
  `pid` int(11) NOT NULL COMMENT '父ID',
  `name` varchar(100) NOT NULL COMMENT '版块名称',
  `title` varchar(200) DEFAULT NULL COMMENT '版块副标题',
  `cgicon` varchar(255) DEFAULT NULL COMMENT '版块图标',
  `description` varchar(255) DEFAULT NULL COMMENT '版块描述',
  `o` int(11) NOT NULL COMMENT '排序',
  PRIMARY KEY (`id`),
  KEY `fsid` (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zuk_category
-- ----------------------------
INSERT INTO `zuk_category` VALUES ('49', '0', '0', 'ZUI社区', '简单，最好看 — ZUI官方用户交流区', '', 'ZUI是ZUK基于Android系统深度定制的UI，力求打造“简单，最好看”的手机系统。', '30');
INSERT INTO `zuk_category` VALUES ('47', '0', '0', 'ZUK Z1手机', 'ZUK首款智能手机ZUK Z1用户交流区', '/Uploads/cgicon/2016/11/15/582b26b1d5e3e.jpeg', 'ZUK Z1搭载骁龙801处理器、采用5.5英寸全高清屏幕，内置4100mAh大容量电池', '10');
INSERT INTO `zuk_category` VALUES ('48', '0', '0', '联想ZUK Z2', 'ZUK Z2智能手机用户交流区', '', '高通骁龙820处理器、4GB内存+64GB存储、发热先知', '20');
INSERT INTO `zuk_category` VALUES ('50', '0', '49', '产品公告', '', '', '', '1');
INSERT INTO `zuk_category` VALUES ('52', '1', '0', 'Moto M', '全金属机身 · 智能指纹识别', '', '全金属机身 · 杜比全景声 · 智能指纹识别', '40');
INSERT INTO `zuk_category` VALUES ('53', '1', '0', 'Moto Z系列', 'Moto Z 定义模块化手机', '', 'Moto Z啪嗒一声，任性变身。无需任何设置与连线，轻轻扣上自动识别电池、JBL音响、投影仪等模块，最新潮的体验层出不穷。', '50');
INSERT INTO `zuk_category` VALUES ('54', '0', '0', 'Moto X系列', 'Moto X系列手机综合板块', '', '本版为Moto X系列手机综合板块，Moto X 极和Moto X Style手机直戳子版哦。', '60');
INSERT INTO `zuk_category` VALUES ('55', '2', '0', '趣摄阁', '趣摄他人不曾见过的风景。', '', '拍出美丽生活，记录精彩瞬间，随手分享他人不曾见过的风景。', '70');
INSERT INTO `zuk_category` VALUES ('56', '2', '0', '联想畅谈', '在这里谈天说地，广交好友', '', '聊人生聊理想聊妹子聊机友，畅所欲言，尽在联想畅谈。', '80');
INSERT INTO `zuk_category` VALUES ('57', '2', '0', '主题苑', '联想手机主题的美,我们要从里到外', '', '联想手机主题的美,我们要从里到外', '90');
INSERT INTO `zuk_category` VALUES ('58', '3', '0', '活动中心', '社区最新最快活动信息', '', '社区活动聚集地，有趣的好玩的，等你加入。', '100');
INSERT INTO `zuk_category` VALUES ('59', '3', '0', '申请公告', '用户组|精华帖|勋章申请', '', '精华帖申报，加入用户组申请等多项福利尽在本版置顶', '110');
INSERT INTO `zuk_category` VALUES ('60', '3', '0', '建议申诉', '主要负责解封、投诉等事务', '', '站务中心主要负责处理投诉，解封等事务。', '120');

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
) ENGINE=MyISAM AUTO_INCREMENT=243 DEFAULT CHARSET=utf8;

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
INSERT INTO `zuk_log` VALUES ('106', 'admin', '1478857239', '127.0.0.1', '编辑菜单，ID：67');
INSERT INTO `zuk_log` VALUES ('107', 'admin', '1478857248', '127.0.0.1', '编辑菜单，ID：67');
INSERT INTO `zuk_log` VALUES ('108', 'admin', '1478857260', '127.0.0.1', '编辑菜单，ID：68');
INSERT INTO `zuk_log` VALUES ('109', 'admin', '1478857304', '127.0.0.1', '新增菜单，名称：封禁用户');
INSERT INTO `zuk_log` VALUES ('110', 'admin', '1478857322', '127.0.0.1', '编辑菜单，ID：69');
INSERT INTO `zuk_log` VALUES ('111', 'admin', '1478857451', '127.0.0.1', '编辑菜单，ID：69');
INSERT INTO `zuk_log` VALUES ('112', 'admin', '1478859206', '127.0.0.1', '修改个人资料');
INSERT INTO `zuk_log` VALUES ('113', 'admin', '1479085488', '127.0.0.1', '登录成功。');
INSERT INTO `zuk_log` VALUES ('114', 'admin', '1479085497', '127.0.0.1', '登录成功。');
INSERT INTO `zuk_log` VALUES ('115', 'admin', '1479085800', '127.0.0.1', '删除菜单ID：69');
INSERT INTO `zuk_log` VALUES ('116', 'admin', '1479088787', '127.0.0.1', '编辑菜单，ID：67');
INSERT INTO `zuk_log` VALUES ('117', 'admin', '1479088913', '127.0.0.1', '删除用户组ID：6');
INSERT INTO `zuk_log` VALUES ('118', 'admin', '1479089041', '127.0.0.1', '编辑菜单，ID：68');
INSERT INTO `zuk_log` VALUES ('119', 'admin', '1479091088', '127.0.0.1', '新增用户组，ID：0，组名：sss');
INSERT INTO `zuk_log` VALUES ('120', 'admin', '1479091096', '127.0.0.1', '删除用户组ID：8');
INSERT INTO `zuk_log` VALUES ('121', 'admin', '1479094242', '127.0.0.1', '编辑菜单，ID：6');
INSERT INTO `zuk_log` VALUES ('122', 'admin', '1479094260', '127.0.0.1', '编辑菜单，ID：7');
INSERT INTO `zuk_log` VALUES ('123', 'admin', '1479096114', '127.0.0.1', '删除分类，ID：');
INSERT INTO `zuk_log` VALUES ('124', 'admin', '1479096117', '127.0.0.1', '删除分类，ID：');
INSERT INTO `zuk_log` VALUES ('125', 'admin', '1479098332', '127.0.0.1', '删除分类，ID：2');
INSERT INTO `zuk_log` VALUES ('126', 'admin', '1479098334', '127.0.0.1', '删除分类，ID：1');
INSERT INTO `zuk_log` VALUES ('127', 'admin', '1479098355', '127.0.0.1', '删除分类，ID：3');
INSERT INTO `zuk_log` VALUES ('128', 'admin', '1479098381', '127.0.0.1', '删除分类，ID：1');
INSERT INTO `zuk_log` VALUES ('129', 'admin', '1479103474', '127.0.0.1', '删除菜单ID：8');
INSERT INTO `zuk_log` VALUES ('130', 'admin', '1479106467', '127.0.0.1', '删除版块，ID：1');
INSERT INTO `zuk_log` VALUES ('131', 'admin', '1479106649', '127.0.0.1', '删除版块，ID：39');
INSERT INTO `zuk_log` VALUES ('132', 'admin', '1479106650', '127.0.0.1', '删除版块，ID：39');
INSERT INTO `zuk_log` VALUES ('133', 'admin', '1479106650', '127.0.0.1', '删除版块，ID：39');
INSERT INTO `zuk_log` VALUES ('134', 'admin', '1479106662', '127.0.0.1', '删除版块，ID：2');
INSERT INTO `zuk_log` VALUES ('135', 'admin', '1479106673', '127.0.0.1', '删除版块，ID：3');
INSERT INTO `zuk_log` VALUES ('136', 'admin', '1479106679', '127.0.0.1', '删除版块，ID：4');
INSERT INTO `zuk_log` VALUES ('137', 'admin', '1479106684', '127.0.0.1', '删除版块，ID：5');
INSERT INTO `zuk_log` VALUES ('138', 'admin', '1479106686', '127.0.0.1', '删除版块，ID：4');
INSERT INTO `zuk_log` VALUES ('139', 'admin', '1479106686', '127.0.0.1', '删除版块，ID：3');
INSERT INTO `zuk_log` VALUES ('140', 'admin', '1479106687', '127.0.0.1', '删除版块，ID：2');
INSERT INTO `zuk_log` VALUES ('141', 'admin', '1479107520', '127.0.0.1', '删除版块，ID：1');
INSERT INTO `zuk_log` VALUES ('142', 'admin', '1479107523', '127.0.0.1', '删除版块，ID：38');
INSERT INTO `zuk_log` VALUES ('143', 'admin', '1479108047', '127.0.0.1', '登录成功。');
INSERT INTO `zuk_log` VALUES ('144', 'admin', '1479112267', '127.0.0.1', '新增版块，ID：40，名称：ZUK Z1手机');
INSERT INTO `zuk_log` VALUES ('145', 'admin', '1479112302', '127.0.0.1', '新增版块，ID：41，名称：联想ZUK Z2');
INSERT INTO `zuk_log` VALUES ('146', 'admin', '1479112364', '127.0.0.1', '新增版块，ID：42，名称：ZUI社区');
INSERT INTO `zuk_log` VALUES ('147', 'admin', '1479114105', '127.0.0.1', '新增版块，ID：43，名称：产品公告');
INSERT INTO `zuk_log` VALUES ('148', 'admin', '1479114959', '127.0.0.1', '新增版块，ID：44，名称：111');
INSERT INTO `zuk_log` VALUES ('149', 'admin', '1479114963', '127.0.0.1', '删除版块，ID：44');
INSERT INTO `zuk_log` VALUES ('150', 'admin', '1479116357', '127.0.0.1', '修改个人资料');
INSERT INTO `zuk_log` VALUES ('151', 'admin', '1479116376', '127.0.0.1', '版块修改，ID：43，名称：1');
INSERT INTO `zuk_log` VALUES ('152', 'admin', '1479116396', '127.0.0.1', '删除版块，ID：43');
INSERT INTO `zuk_log` VALUES ('153', 'admin', '1479116411', '127.0.0.1', '版块修改，ID：40，名称：1');
INSERT INTO `zuk_log` VALUES ('154', 'admin', '1479116420', '127.0.0.1', '删除版块，ID：40');
INSERT INTO `zuk_log` VALUES ('155', 'admin', '1479116425', '127.0.0.1', '删除版块，ID：42');
INSERT INTO `zuk_log` VALUES ('156', 'admin', '1479116427', '127.0.0.1', '删除版块，ID：41');
INSERT INTO `zuk_log` VALUES ('157', 'admin', '1479116439', '127.0.0.1', '新增版块，ID：45，名称：1');
INSERT INTO `zuk_log` VALUES ('158', 'admin', '1479116446', '127.0.0.1', '新增版块，ID：46，名称：2');
INSERT INTO `zuk_log` VALUES ('159', 'admin', '1479116455', '127.0.0.1', '版块修改，ID：45，名称：11');
INSERT INTO `zuk_log` VALUES ('160', 'admin', '1479116911', '127.0.0.1', '删除版块，ID：45');
INSERT INTO `zuk_log` VALUES ('161', 'admin', '1479116914', '127.0.0.1', '删除版块，ID：46');
INSERT INTO `zuk_log` VALUES ('162', 'admin', '1479116996', '127.0.0.1', '新增版块，ID：47，名称：ZUK Z1手机');
INSERT INTO `zuk_log` VALUES ('163', 'admin', '1479117036', '127.0.0.1', '新增版块，ID：48，名称：联想ZUK Z2');
INSERT INTO `zuk_log` VALUES ('164', 'admin', '1479117076', '127.0.0.1', '新增版块，ID：49，名称：ZUI社区');
INSERT INTO `zuk_log` VALUES ('165', 'admin', '1479117178', '127.0.0.1', '新增版块，ID：50，名称：产品公告');
INSERT INTO `zuk_log` VALUES ('166', 'admin', '1479117222', '127.0.0.1', '新增版块，ID：51，名称：1');
INSERT INTO `zuk_log` VALUES ('167', 'admin', '1479117592', '127.0.0.1', '登录成功。');
INSERT INTO `zuk_log` VALUES ('168', 'admin', '1479117687', '127.0.0.1', '登录成功。');
INSERT INTO `zuk_log` VALUES ('169', 'admin', '1479117763', '127.0.0.1', '登录失败。');
INSERT INTO `zuk_log` VALUES ('170', 'admin', '1479117773', '127.0.0.1', '登录成功。');
INSERT INTO `zuk_log` VALUES ('171', 'admin', '1479119677', '127.0.0.1', '新增版块，ID：52，名称：Moto M');
INSERT INTO `zuk_log` VALUES ('172', 'admin', '1479122638', '127.0.0.1', '文章分类修改，ID：52，名称：Moto M');
INSERT INTO `zuk_log` VALUES ('173', 'admin', '1479122681', '127.0.0.1', '新增分类，ID：53，名称：Moto Z系列');
INSERT INTO `zuk_log` VALUES ('174', 'admin', '1479122779', '127.0.0.1', '文章分类修改，ID：53，名称：Moto Z系列');
INSERT INTO `zuk_log` VALUES ('175', 'admin', '1479122795', '127.0.0.1', '文章分类修改，ID：53，名称：Moto Z系列');
INSERT INTO `zuk_log` VALUES ('176', 'admin', '1479122837', '127.0.0.1', '文章分类修改，ID：52，名称：Moto M');
INSERT INTO `zuk_log` VALUES ('177', 'admin', '1479122857', '127.0.0.1', '文章分类修改，ID：47，名称：ZUK Z1手机');
INSERT INTO `zuk_log` VALUES ('178', 'admin', '1479122871', '127.0.0.1', '文章分类修改，ID：48，名称：联想ZUK Z2');
INSERT INTO `zuk_log` VALUES ('179', 'admin', '1479122885', '127.0.0.1', '文章分类修改，ID：49，名称：ZUI社区');
INSERT INTO `zuk_log` VALUES ('180', 'admin', '1479123256', '127.0.0.1', '新增分类，ID：54，名称：Moto X系列');
INSERT INTO `zuk_log` VALUES ('181', 'admin', '1479123374', '127.0.0.1', '新增分类，ID：55，名称：趣摄阁');
INSERT INTO `zuk_log` VALUES ('182', 'admin', '1479123409', '127.0.0.1', '新增分类，ID：56，名称：联想畅谈');
INSERT INTO `zuk_log` VALUES ('183', 'admin', '1479123451', '127.0.0.1', '新增分类，ID：57，名称：主题苑');
INSERT INTO `zuk_log` VALUES ('184', 'admin', '1479123462', '127.0.0.1', '文章分类修改，ID：56，名称：联想畅谈');
INSERT INTO `zuk_log` VALUES ('185', 'admin', '1479123523', '127.0.0.1', '新增分类，ID：58，名称：活动中心');
INSERT INTO `zuk_log` VALUES ('186', 'admin', '1479123554', '127.0.0.1', '新增分类，ID：59，名称：申请公告');
INSERT INTO `zuk_log` VALUES ('187', 'admin', '1479123585', '127.0.0.1', '新增分类，ID：60，名称：建议申诉');
INSERT INTO `zuk_log` VALUES ('188', 'admin', '1479127598', '127.0.0.1', '修改个人资料');
INSERT INTO `zuk_log` VALUES ('189', 'admin', '1479128166', '127.0.0.1', '版块分类修改，ID：47，名称：ZUK Z1手机');
INSERT INTO `zuk_log` VALUES ('190', 'admin', '1479128188', '127.0.0.1', '版块分类修改，ID：47，名称：ZUK Z1手机');
INSERT INTO `zuk_log` VALUES ('191', 'admin', '1479128344', '127.0.0.1', '版块分类修改，ID：47，名称：ZUK Z1手机');
INSERT INTO `zuk_log` VALUES ('192', 'admin', '1479130269', '127.0.0.1', '编辑会员信息，会员UID：1');
INSERT INTO `zuk_log` VALUES ('193', 'admin', '1479130370', '127.0.0.1', '编辑会员信息，会员UID：1');
INSERT INTO `zuk_log` VALUES ('194', 'admin', '1479131236', '127.0.0.1', '编辑会员信息，会员UID：1');
INSERT INTO `zuk_log` VALUES ('195', 'admin', '1479132315', '127.0.0.1', '版块分类修改，ID：47，名称：ZUK Z1手机');
INSERT INTO `zuk_log` VALUES ('196', 'admin', '1479133957', '127.0.0.1', '版块分类修改，ID：47，名称：ZUK Z1手机');
INSERT INTO `zuk_log` VALUES ('197', 'admin', '1479134001', '127.0.0.1', '版块分类修改，ID：47，名称：ZUK Z1手机');
INSERT INTO `zuk_log` VALUES ('198', 'admin', '1479134097', '127.0.0.1', '版块分类修改，ID：47，名称：ZUK Z1手机');
INSERT INTO `zuk_log` VALUES ('199', 'admin', '1479134200', '127.0.0.1', '版块分类修改，ID：47，名称：ZUK Z1手机');
INSERT INTO `zuk_log` VALUES ('200', 'admin', '1479134409', '127.0.0.1', '版块分类修改，ID：47，名称：ZUK Z1手机');
INSERT INTO `zuk_log` VALUES ('201', 'admin', '1479134434', '127.0.0.1', '版块分类修改，ID：47，名称：ZUK Z1手机');
INSERT INTO `zuk_log` VALUES ('202', 'admin', '1479134519', '127.0.0.1', '版块分类修改，ID：47，名称：ZUK Z1手机');
INSERT INTO `zuk_log` VALUES ('203', 'admin', '1479135337', '127.0.0.1', '版块分类修改，ID：47，名称：ZUK Z1手机');
INSERT INTO `zuk_log` VALUES ('204', 'admin', '1479136504', '127.0.0.1', '版块分类修改，ID：47，名称：ZUK Z1手机');
INSERT INTO `zuk_log` VALUES ('205', 'admin', '1479171637', '127.0.0.1', '登录成功。');
INSERT INTO `zuk_log` VALUES ('206', 'admin', '1479172056', '127.0.0.1', '版块分类修改，ID：47，名称：ZUK Z1手机');
INSERT INTO `zuk_log` VALUES ('207', 'admin', '1479172084', '127.0.0.1', '版块分类修改，ID：47，名称：ZUK Z1手机');
INSERT INTO `zuk_log` VALUES ('208', 'admin', '1479172374', '127.0.0.1', '版块分类修改，ID：47，名称：ZUK Z1手机');
INSERT INTO `zuk_log` VALUES ('209', 'admin', '1479172393', '127.0.0.1', '修改个人资料');
INSERT INTO `zuk_log` VALUES ('210', 'admin', '1479172605', '127.0.0.1', '版块分类修改，ID：47，名称：ZUK Z1手机');
INSERT INTO `zuk_log` VALUES ('211', 'admin', '1479172918', '127.0.0.1', '版块分类修改，ID：47，名称：ZUK Z1手机');
INSERT INTO `zuk_log` VALUES ('212', 'admin', '1479172974', '127.0.0.1', '版块分类修改，ID：47，名称：ZUK Z1手机');
INSERT INTO `zuk_log` VALUES ('213', 'admin', '1479175744', '127.0.0.1', '编辑菜单，ID：12');
INSERT INTO `zuk_log` VALUES ('214', 'admin', '1479175768', '127.0.0.1', '编辑菜单，ID：13');
INSERT INTO `zuk_log` VALUES ('215', 'admin', '1479178867', '127.0.0.1', '新增帖子，AID：1');
INSERT INTO `zuk_log` VALUES ('216', 'admin', '1479179682', '127.0.0.1', '修改个人资料');
INSERT INTO `zuk_log` VALUES ('217', 'admin', '1479179895', '127.0.0.1', '编辑帖子，AID：1');
INSERT INTO `zuk_log` VALUES ('218', 'admin', '1479183620', '127.0.0.1', '版块分类修改，ID：47，名称：ZUK Z1手机');
INSERT INTO `zuk_log` VALUES ('219', 'admin', '1479190713', '127.0.0.1', '新增帖子，AID：2');
INSERT INTO `zuk_log` VALUES ('220', 'admin', '1479190748', '127.0.0.1', '删除帖子，AID：2');
INSERT INTO `zuk_log` VALUES ('221', 'admin', '1479190758', '127.0.0.1', '删除帖子，AID：1');
INSERT INTO `zuk_log` VALUES ('222', 'admin', '1479190777', '127.0.0.1', '修改个人资料');
INSERT INTO `zuk_log` VALUES ('223', 'admin', '1479192024', '127.0.0.1', '编辑菜单，ID：14');
INSERT INTO `zuk_log` VALUES ('224', 'admin', '1479192124', '127.0.0.1', '新增菜单，名称：帖子审核');
INSERT INTO `zuk_log` VALUES ('225', 'admin', '1479192150', '127.0.0.1', '编辑菜单，ID：70');
INSERT INTO `zuk_log` VALUES ('226', 'admin', '1479193255', '127.0.0.1', '删除菜单ID：14');
INSERT INTO `zuk_log` VALUES ('227', 'admin', '1479194501', '127.0.0.1', '编辑菜单，ID：70');
INSERT INTO `zuk_log` VALUES ('228', 'admin', '1479194514', '127.0.0.1', '新增帖子，AID：3');
INSERT INTO `zuk_log` VALUES ('229', 'admin', '1479196438', '127.0.0.1', '审核帖子，AID：3');
INSERT INTO `zuk_log` VALUES ('230', 'admin', '1479196512', '127.0.0.1', '审核帖子，AID：3');
INSERT INTO `zuk_log` VALUES ('231', 'admin', '1479196912', '127.0.0.1', '回收帖子，AID：3');
INSERT INTO `zuk_log` VALUES ('232', 'admin', '1479196957', '127.0.0.1', '审核帖子，AID：3');
INSERT INTO `zuk_log` VALUES ('233', 'admin', '1479196961', '127.0.0.1', '回收帖子，AID：3');
INSERT INTO `zuk_log` VALUES ('234', 'admin', '1479197007', '127.0.0.1', '版块分类修改，ID：47，名称：ZUK Z1手机');
INSERT INTO `zuk_log` VALUES ('235', 'admin', '1479198962', '127.0.0.1', '审核帖子，AID：3');
INSERT INTO `zuk_log` VALUES ('236', 'admin', '1479199187', '127.0.0.1', '回收帖子，AID：3');
INSERT INTO `zuk_log` VALUES ('237', 'admin', '1479199191', '127.0.0.1', '审核帖子，AID：3');
INSERT INTO `zuk_log` VALUES ('238', 'admin', '1479212221', '127.0.0.1', '修改网站配置。');
INSERT INTO `zuk_log` VALUES ('239', 'admin', '1479212238', '127.0.0.1', '修改网站配置。');
INSERT INTO `zuk_log` VALUES ('240', 'admin', '1479212250', '127.0.0.1', '修改网站配置。');
INSERT INTO `zuk_log` VALUES ('241', 'admin', '1479222936', '127.0.0.1', '修改个人资料');
INSERT INTO `zuk_log` VALUES ('242', 'admin', '1479222962', '127.0.0.1', '版块分类修改，ID：47，名称：ZUK Z1手机');

-- ----------------------------
-- Table structure for `zuk_member`
-- ----------------------------
DROP TABLE IF EXISTS `zuk_member`;
CREATE TABLE `zuk_member` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(225) NOT NULL,
  `head` varchar(255) DEFAULT NULL COMMENT '头像',
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
INSERT INTO `zuk_member` VALUES ('1', 'admin', '/Uploads/head/2016/11/15/582b269798fa0.jpg', '1', '1478793600', '13053237223', '239126037', 'shineky7@163.com', '66d6a1c8748025462128dc75bf5ae8d1', '1479131236', '0');
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
INSERT INTO `zuk_setting` VALUES ('title', '联想手机社区-联想手机官方论坛 -  联想手机社区', '0', '');
INSERT INTO `zuk_setting` VALUES ('keywords', '联想手机,联想手机官网,联想手机论坛,联想ZUK,ZUK官网,ZUK手机,ZUI,ZUK社区,moto官网,moto手机,moto论坛', '0', '');
INSERT INTO `zuk_setting` VALUES ('description', '联想手机社区,是联想官方面向全国联想手机用户的公开交流平台。以moto手机_zuk手机_联想手机等系列产品为主，为联想手机用户提供最新鲜的联想手机评测、联想手机固件刷机、联想手机玩机技巧、联想手机售后服务以及联想手机官方资讯等。更多精彩，尽在联想手机社区 ,联想手机社区', '0', '');
