
-- -----------------------------
-- Table structure for `tp_ad`
-- -----------------------------
DROP TABLE IF EXISTS `tp_ad`;
CREATE TABLE `tp_ad` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `type_id` mediumint(8) NOT NULL COMMENT '类型ID',
  `name` varchar(250) NOT NULL COMMENT '广告名称',
  `image` varchar(250) DEFAULT NULL COMMENT '图片',
  `thumb` varchar(250) DEFAULT NULL COMMENT '缩略图',
  `url` varchar(250) DEFAULT NULL COMMENT '链接地址',
  `description` varchar(250) DEFAULT NULL COMMENT '备注',
  `sort` mediumint(8) DEFAULT '50' COMMENT '排序',
  `status` tinyint(1) DEFAULT NULL COMMENT '状态',
  `create_time` int(11) DEFAULT '0' COMMENT '添加时间',
  `update_time` int(11) DEFAULT '0' COMMENT '修改时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='广告表';

-- -----------------------------
-- Records of `tp_ad`
-- -----------------------------
INSERT INTO `tp_ad` VALUES ('1', '1', 'banner_1 ', '/uploads/20181225/b671c6f234a72c2e6560c63ddd9dc0ff.jpg', '/uploads/20181225/b671c6f234a72c2e6560c63ddd9dc0ff.jpg', '', '免费、开源\r\n快速、简单', '1', '1', '1541128222', '1553154525');
INSERT INTO `tp_ad` VALUES ('2', '1', 'banner_2', '/uploads/20181225/25670f5712b4acfb61c5d2a1bce79225.jpg', '/uploads/20181225/25670f5712b4acfb61c5d2a1bce79225.jpg', '', 'banner_2', '2', '1', '1545719151', '1551937531');
