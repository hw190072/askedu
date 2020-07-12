-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2020-07-12 18:31:03
-- 服务器版本： 5.7.26
-- PHP 版本： 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `askedu`
--

-- --------------------------------------------------------

--
-- 表的结构 `ask_admin`
--

CREATE TABLE `ask_admin` (
  `id` mediumint(10) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(120) NOT NULL,
  `avatar` varchar(120) NOT NULL COMMENT '用户图像',
  `age` varchar(3) NOT NULL,
  `nickname` varchar(60) NOT NULL COMMENT '昵称',
  `phone` varchar(50) NOT NULL COMMENT '手机',
  `email` varchar(120) NOT NULL COMMENT '电子邮箱',
  `addip` int(60) NOT NULL COMMENT '注册ip',
  `ip` varchar(20) NOT NULL COMMENT '登陆id',
  `sex` tinyint(1) NOT NULL DEFAULT '1' COMMENT '性别：0男；1女',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '启用状态：1启用；0禁用',
  `group_id` mediumint(8) NOT NULL COMMENT '角色id',
  `create_time` int(10) NOT NULL COMMENT '注册时间',
  `last_time` int(10) NOT NULL COMMENT '最后登陆时间'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `ask_admin`
--

INSERT INTO `ask_admin` (`id`, `username`, `password`, `avatar`, `age`, `nickname`, `phone`, `email`, `addip`, `ip`, `sex`, `status`, `group_id`, `create_time`, `last_time`) VALUES
(1, 'h123456', 'e10adc3949ba59abbe56e057f20f883e', '', '', '小小何', '', 'xh@qq.com', 0, '127.0.0.1', 0, 1, 1, 1568947450, 1568947450),
(2, 'xf123456', 'e10adc3949ba59abbe56e057f20f883e', '', '', '小飞', '', 'xf@qq.com', 0, '127.0.0.1', 0, 1, 2, 1568947683, 1568947683),
(3, 'xx123456', 'e10adc3949ba59abbe56e057f20f883e', '', '', '小小', '', 'xx@qq.com', 0, '127.0.0.1', 0, 1, 3, 1568948233, 1568948233);

-- --------------------------------------------------------

--
-- 表的结构 `ask_alldata`
--

CREATE TABLE `ask_alldata` (
  `id` bigint(20) NOT NULL COMMENT '客户id',
  `name` varchar(120) DEFAULT NULL COMMENT '姓名',
  `gender` varchar(10) DEFAULT NULL COMMENT '未知,男,女',
  `age` varchar(10) DEFAULT NULL COMMENT '年龄',
  `birth` varchar(10) DEFAULT NULL COMMENT '生日',
  `idcard` varchar(30) DEFAULT NULL COMMENT '身份证号',
  `nation` varchar(120) DEFAULT NULL COMMENT '民族',
  `marriage` varchar(30) DEFAULT NULL COMMENT '婚姻',
  `phone` varchar(30) DEFAULT NULL COMMENT '手机号码',
  `job` varchar(120) DEFAULT NULL COMMENT '工作',
  `province` varchar(120) DEFAULT NULL COMMENT '省',
  `city` varchar(120) DEFAULT NULL COMMENT '市',
  `county` varchar(120) DEFAULT NULL COMMENT '区',
  `detailed` varchar(120) DEFAULT NULL COMMENT '详细地址',
  `education` varchar(120) DEFAULT NULL COMMENT '学历',
  `school` varchar(120) DEFAULT NULL COMMENT '毕业学校',
  `major` varchar(60) DEFAULT NULL COMMENT '专业',
  `chsi_acct` varchar(60) DEFAULT NULL COMMENT '学信网账户',
  `chsi_pwd` varchar(60) DEFAULT NULL COMMENT '学信网密码',
  `company` varchar(120) DEFAULT NULL COMMENT '公司',
  `email` varchar(120) DEFAULT NULL COMMENT '邮箱',
  `social` varchar(120) DEFAULT NULL COMMENT '社保',
  `address` varchar(120) DEFAULT NULL COMMENT '通讯地址',
  `child` varchar(60) DEFAULT NULL COMMENT '小孩随迁',
  `social_acct` varchar(60) DEFAULT NULL COMMENT '人保账户',
  `social_pwd` varchar(60) DEFAULT NULL COMMENT '人保密码',
  `total` int(20) DEFAULT NULL COMMENT '总费用',
  `pay` int(20) DEFAULT NULL COMMENT '已缴费用',
  `unpaid` int(20) DEFAULT NULL COMMENT '未缴费用',
  `source` varchar(20) DEFAULT NULL COMMENT '来源',
  `audit` varchar(20) DEFAULT NULL COMMENT '审核方式',
  `entrance` varchar(60) DEFAULT NULL COMMENT '申报窗口',
  `payment` varchar(20) DEFAULT NULL COMMENT '付款方式',
  `declare` varchar(20) DEFAULT NULL COMMENT '申报方式',
  `progress` varchar(20) DEFAULT NULL COMMENT '工作进度',
  `remark` text COMMENT '备注',
  `transfer` varchar(60) DEFAULT NULL COMMENT '迁移地',
  `founder` varchar(20) DEFAULT NULL COMMENT '创建人',
  `belong` varchar(20) DEFAULT NULL COMMENT '归属用户',
  `querykey` int(10) DEFAULT '1',
  `create_time` int(10) DEFAULT NULL COMMENT '创建时间',
  `update_time` int(10) DEFAULT NULL COMMENT '更新时间'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `ask_alldata`
--

INSERT INTO `ask_alldata` (`id`, `name`, `gender`, `age`, `birth`, `idcard`, `nation`, `marriage`, `phone`, `job`, `province`, `city`, `county`, `detailed`, `education`, `school`, `major`, `chsi_acct`, `chsi_pwd`, `company`, `email`, `social`, `address`, `child`, `social_acct`, `social_pwd`, `total`, `pay`, `unpaid`, `source`, `audit`, `entrance`, `payment`, `declare`, `progress`, `remark`, `transfer`, `founder`, `belong`, `querykey`, `create_time`, `update_time`) VALUES
(1, '黄晓宇', NULL, NULL, NULL, '440203199401042117', NULL, NULL, '18588948087', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '积分制', '待定', NULL, '个人申报', '核对资料', NULL, NULL, NULL, '周慧婷', 1, 1594549733, 1594549733),
(2, '刘丰', NULL, NULL, NULL, '362331199001100034', NULL, NULL, '17610280660', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '核准', '待定', NULL, '个人申报', '核对资料', NULL, NULL, NULL, '周慧婷', 1, 1594549733, 1594549733),
(3, '贺志忠', NULL, NULL, NULL, '44162119931013381X', NULL, NULL, '18565660218', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '核准', '待定', NULL, '个人申报', '核对资料', NULL, NULL, NULL, '周慧婷', 1, 1594549733, 1594549733),
(4, '林晓纯', NULL, NULL, NULL, '440509199310011221', NULL, NULL, '13794139570', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '积分制', '待定', NULL, '单位申报', '核对资料', NULL, NULL, NULL, '周慧婷', 1, 1594549733, 1594549733),
(5, '林艳妮', NULL, NULL, NULL, '441881199410058324', NULL, NULL, '13825230331', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '积分制', '待定', NULL, '单位申报', '核对资料', NULL, NULL, NULL, '周慧婷', 1, 1594549733, 1594549733),
(6, '林静华', NULL, NULL, NULL, '445224199503290329', NULL, NULL, '17817239373', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '积分制', '待定', NULL, '单位申报', '核对资料', NULL, NULL, NULL, '周慧婷', 1, 1594549733, 1594549733),
(7, '胡剑波', NULL, NULL, NULL, '420106199107128438', NULL, NULL, '18827077033', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '核准', '待定', NULL, '个人申报', '核对资料', NULL, NULL, NULL, '周慧婷', 1, 1594549733, 1594549733),
(8, '熊春芬', NULL, NULL, NULL, '429006197703283024', NULL, NULL, '18551821126', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '核准', '待定', NULL, '个人申报', '核对资料', NULL, NULL, NULL, '周慧婷', 1, 1594549733, 1594549733),
(9, '张军', NULL, NULL, NULL, '420528198611073814', NULL, NULL, '15889652403', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '积分制', '待定', NULL, '单位申报', '核对资料', NULL, NULL, NULL, '周慧婷', 1, 1594549733, 1594549733),
(10, '栾金霏', NULL, NULL, NULL, '230182198806091000', NULL, NULL, '13902945369', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '核准', '待定', NULL, '个人申报', '核对资料', NULL, NULL, NULL, '周慧婷', 1, 1594549733, 1594549733),
(11, '覃丽住', NULL, NULL, NULL, '452730199205142946 ', NULL, NULL, '18138418542', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '应届生', '待定', NULL, '个人申报', '核对资料', NULL, NULL, NULL, '周慧婷', 1, 1594549733, 1594549733),
(12, '梁文秀', NULL, NULL, NULL, '341281199005059124 ', NULL, NULL, ' 18714934655 ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '核准', '待定', NULL, '个人申报', '核对资料', NULL, NULL, NULL, '周慧婷', 1, 1594549733, 1594549733),
(13, '高顺斌', NULL, NULL, NULL, '441224199505136030', NULL, NULL, '15913432278', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '应届生', '待定', NULL, '个人申报', '核对资料', NULL, NULL, NULL, '周慧婷', 1, 1594549733, 1594549733),
(14, '林宁', NULL, NULL, NULL, '445281199306277106', NULL, NULL, '13202230709', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '核准', '待定', NULL, '个人申报', '核对资料', NULL, NULL, NULL, '周慧婷', 1, 1594549733, 1594549733),
(15, '胥凯', NULL, NULL, NULL, '511325198403300616', NULL, NULL, '15012552591', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '积分制', '待定', NULL, '个人申报', '核对资料', NULL, NULL, NULL, '周慧婷', 1, 1594549733, 1594549733),
(16, '曹语馨', NULL, NULL, NULL, '440111199012054522', NULL, NULL, '13600002676', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '留学生', '待定', NULL, '个人申报', '核对资料', NULL, NULL, NULL, '周慧婷', 1, 1594549733, 1594549733),
(17, '吴海平', NULL, NULL, NULL, '441622199502126063', NULL, NULL, '13549255232', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '积分制', '待定', NULL, '个人申报', '核对资料', NULL, NULL, NULL, '周慧婷', 1, 1594549733, 1594549733),
(18, '李冬', NULL, NULL, NULL, '23020719941107061X', NULL, NULL, '18246123857', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '核准', '待定', NULL, '个人申报', '核对资料', NULL, NULL, NULL, '周慧婷', 1, 1594549733, 1594549733),
(19, '孙萍', NULL, NULL, NULL, '340403198212261241', NULL, NULL, '13554912919', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '积分制', '待定', NULL, '个人申报', '核对资料', NULL, NULL, NULL, '周慧婷', 1, 1594549733, 1594549733),
(20, '邓创', NULL, NULL, NULL, '430421199510239236', NULL, NULL, '18682374744', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '核准制', '待定', NULL, '个人申报', '办理迁移证', NULL, NULL, NULL, '周慧婷', 1, 1594549733, 1594549733),
(21, '潘文学', NULL, NULL, NULL, '500382198501226418', NULL, NULL, '13410079598', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '核准制', '待定', NULL, '个人申报', '办理迁移证', NULL, NULL, NULL, '周慧婷', 1, 1594549733, 1594549733);

-- --------------------------------------------------------

--
-- 表的结构 `ask_auth_group`
--

CREATE TABLE `ask_auth_group` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `title` char(100) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `rules` varchar(255) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `ask_auth_group`
--

INSERT INTO `ask_auth_group` (`id`, `title`, `status`, `rules`) VALUES
(1, '超级管理员', 1, '1,2,3,4,5,18,6,7,8,9,19,10,11,12,13,20,34,35,36,37,14,15,16,17,21,22,23,24,25,26,27,28,29,30,31,32,33'),
(2, '频道管理员', 1, '1,2,18,6,19,10,11,12,13,20,34,35,37,14,15,16,17,21,22,23,24,27,28,29'),
(3, '信息发布员', 1, '1,2,6,19,10,20,37,14,15,16,21,22,27,28,29');

-- --------------------------------------------------------

--
-- 表的结构 `ask_auth_group_access`
--

CREATE TABLE `ask_auth_group_access` (
  `uid` mediumint(8) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `ask_auth_group_access`
--

INSERT INTO `ask_auth_group_access` (`uid`, `group_id`) VALUES
(1, 1),
(2, 2),
(3, 3);

-- --------------------------------------------------------

--
-- 表的结构 `ask_auth_rule`
--

CREATE TABLE `ask_auth_rule` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` char(80) NOT NULL DEFAULT '',
  `title` char(20) NOT NULL DEFAULT '',
  `type` tinyint(1) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `condition` char(100) NOT NULL DEFAULT '',
  `pid` mediumint(9) NOT NULL DEFAULT '0' COMMENT '上级规则id 0表示顶级规则',
  `icon` varchar(15) NOT NULL COMMENT '图标名称',
  `show` tinyint(1) NOT NULL DEFAULT '1' COMMENT '菜单是否显示'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `ask_auth_rule`
--

INSERT INTO `ask_auth_rule` (`id`, `name`, `title`, `type`, `status`, `condition`, `pid`, `icon`, `show`) VALUES
(1, 'admin/Conf', '系统设置', 1, 1, '', 0, '', 1),
(2, 'admin/Conf/conflist', '配置列表', 1, 1, '', 1, '', 1),
(3, 'admin/Conf/add', '添加系统配置', 1, 1, '', 1, '', 1),
(4, 'admin/Conf/edit', '修改系统配置', 1, 1, '', 1, '', 1),
(5, 'admin/Conf/del', '删除系统配置', 1, 1, '', 1, '', 1),
(6, 'admin/AuthRule', '权限配置', 1, 1, '', 0, '', 1),
(7, 'admin/AuthRule/add', '添加权限配置', 1, 1, '', 6, '', 1),
(8, 'admin/AuthRule/edit', '修改权限配置', 1, 1, '', 6, '', 1),
(9, 'admin/AuthRule/del', '删除权限配置', 1, 1, '', 6, '', 1),
(10, 'admin/Cate', '栏目管理', 1, 1, '', 0, '', 1),
(11, 'admin/Cate/add', '添加栏目', 1, 1, '', 10, '', 1),
(12, 'admin/Cate/edit', '修改栏目', 1, 1, '', 10, '', 1),
(13, 'admin/Cate/del', '删除栏目', 1, 1, '', 10, '', 1),
(14, 'admin/Archives', '文章管理', 1, 1, '', 0, '', 1),
(15, 'admin/Archives/add', '添加文章', 1, 1, '', 14, '', 1),
(16, 'admin/Archives/edit', '修改文章', 1, 1, '', 14, '', 1),
(17, 'admin/Archives/del', '删除文章', 1, 1, '', 14, '', 1),
(18, 'admin/Conf/lst', '网站配置列表', 1, 1, '', 1, '', 1),
(19, 'admin/AuthRule/lst', '权限配置列表', 1, 1, '', 6, '', 1),
(20, 'admin/Cate/lst', '栏目列表', 1, 1, '', 10, '', 1),
(21, 'admin/Archives/lst', '文章列表', 1, 1, '', 14, '', 1),
(22, 'admin/Admin', '管理员', 1, 1, '', 0, '', 1),
(23, 'admin/Admin/lst', '管理员列表', 1, 1, '', 22, '', 1),
(24, 'admin/Admin/add', '添加管理员', 1, 1, '', 22, '', 1),
(25, 'admin/Admin/edit', '修改管理员', 1, 1, '', 22, '', 1),
(26, 'admin/Admin/del', '删除管理员', 1, 1, '', 22, '', 1),
(27, 'admin/Admin/editpwd', '修改密码', 1, 1, '', 22, '', 1),
(28, 'admin/AuthGroup', '用户组管理', 1, 1, '', 0, '', 1),
(29, 'admin/AuthGroup/lst', '用户组列表', 1, 1, '', 28, '', 1),
(30, 'admin/AuthGroup/add', '添加用户组', 1, 1, '', 28, '', 1),
(31, 'admin/AuthGroup/edit', '修改用户组', 1, 1, '', 28, '', 1),
(32, 'admin/AuthGroup/del', '删除用户组', 1, 1, '', 28, '', 1),
(33, 'admin/AuthGroup/power', '添加用户组权限', 1, 1, '', 28, '', 1),
(34, 'admin/Cate/changestatus', '更改栏目状态', 1, 1, '', 10, '', 1),
(35, 'admin/Cate/order', '栏目批量排序', 1, 1, '', 10, '', 1),
(36, 'admin/Cate/batchdel', '批量删除栏目', 1, 1, '', 10, '', 1),
(37, 'admin/Cate/ajaxlst', '栏目伸展', 1, 1, '', 10, '', 1);

-- --------------------------------------------------------

--
-- 表的结构 `ask_conf`
--

CREATE TABLE `ask_conf` (
  `id` mediumint(9) NOT NULL COMMENT '配置项id',
  `cnname` varchar(60) NOT NULL COMMENT '中文名称',
  `enname` varchar(60) NOT NULL COMMENT '英文名称',
  `value` text NOT NULL COMMENT '默认值',
  `values` varchar(60) NOT NULL COMMENT '可选值',
  `dt_type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1:输入框 2:单选',
  `cf_type` varchar(1) NOT NULL COMMENT '1:网站配置 2:附件配置 3:其他配置'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `ask_conf`
--

INSERT INTO `ask_conf` (`id`, `cnname`, `enname`, `value`, `values`, `dt_type`, `cf_type`) VALUES
(1, '站点名称', 'sitename', '长沙中研白癜风医院', '', 1, '1'),
(2, '站点网址', 'siteurl', 'cszybdfyy.com', '', 1, '1'),
(3, '关键词', 'keywords', '长沙中研白癜风医院', '', 5, '1'),
(4, '站点描述', 'description', '长沙中研白癜风医院', '', 5, '1'),
(5, '二维码', 'ewm', '', '', 6, '2'),
(6, '网站logo', 'logo', '', '', 6, '2'),
(7, '开启缓存', 'iscache', '开启', '开启,关闭', 2, '1'),
(8, '关闭站点', 'closesite', '开启', '开启,关闭', 2, '1'),
(9, '电子邮箱', 'email', '297529383@qq.com', '', 1, '1'),
(10, '联系方式', 'contact', '297529383@qq.com', '', 1, '1');

-- --------------------------------------------------------

--
-- 表的结构 `ask_graduate`
--

CREATE TABLE `ask_graduate` (
  `id` bigint(20) NOT NULL COMMENT '客户id',
  `name` varchar(120) DEFAULT NULL COMMENT '姓名',
  `gender` varchar(10) DEFAULT NULL COMMENT '未知,男,女',
  `age` varchar(10) DEFAULT NULL COMMENT '年龄',
  `birth` varchar(10) DEFAULT NULL COMMENT '生日',
  `idcard` varchar(30) DEFAULT NULL COMMENT '身份证号',
  `nation` varchar(120) DEFAULT NULL COMMENT '民族',
  `marriage` varchar(30) DEFAULT NULL COMMENT '婚姻',
  `phone` varchar(30) DEFAULT NULL COMMENT '手机号码',
  `job` varchar(120) DEFAULT NULL COMMENT '工作',
  `province` varchar(120) DEFAULT NULL COMMENT '省',
  `city` varchar(120) DEFAULT NULL COMMENT '市',
  `county` varchar(120) DEFAULT NULL COMMENT '区',
  `detailed` varchar(120) DEFAULT NULL COMMENT '详细地址',
  `education` varchar(120) DEFAULT NULL COMMENT '学历',
  `school` varchar(120) DEFAULT NULL COMMENT '毕业学校',
  `major` varchar(60) DEFAULT NULL COMMENT '专业',
  `chsi_acct` varchar(60) DEFAULT NULL COMMENT '学信网账户',
  `chsi_pwd` varchar(60) DEFAULT NULL COMMENT '学信网密码',
  `company` varchar(120) DEFAULT NULL COMMENT '公司',
  `email` varchar(120) DEFAULT NULL COMMENT '邮箱',
  `social` varchar(120) DEFAULT NULL COMMENT '社保',
  `address` varchar(120) DEFAULT NULL COMMENT '通讯地址',
  `child` varchar(60) DEFAULT NULL COMMENT '小孩随迁',
  `social_acct` varchar(60) DEFAULT NULL COMMENT '人保账户',
  `social_pwd` varchar(60) DEFAULT NULL COMMENT '人保密码',
  `total` int(20) DEFAULT NULL COMMENT '总费用',
  `pay` int(20) DEFAULT NULL COMMENT '已缴费用',
  `unpaid` int(20) DEFAULT NULL COMMENT '未缴费用',
  `source` varchar(20) DEFAULT NULL COMMENT '来源',
  `audit` varchar(20) DEFAULT NULL COMMENT '审核方式',
  `entrance` varchar(60) DEFAULT NULL COMMENT '申报窗口',
  `payment` varchar(20) DEFAULT NULL COMMENT '付款方式',
  `declare` varchar(20) DEFAULT NULL COMMENT '申报方式',
  `progress` varchar(20) DEFAULT NULL COMMENT '工作进度',
  `remark` text COMMENT '备注',
  `transfer` varchar(60) DEFAULT NULL COMMENT '迁移地',
  `founder` varchar(20) DEFAULT NULL COMMENT '创建人',
  `belong` varchar(20) DEFAULT NULL COMMENT '归属用户',
  `querykey` int(10) DEFAULT '1',
  `create_time` int(10) DEFAULT NULL COMMENT '创建时间',
  `update_time` int(10) DEFAULT NULL COMMENT '更新时间'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 表的结构 `ask_integral`
--

CREATE TABLE `ask_integral` (
  `id` bigint(20) NOT NULL COMMENT '客户id',
  `name` varchar(120) DEFAULT NULL COMMENT '姓名',
  `gender` varchar(10) DEFAULT NULL COMMENT '未知,男,女',
  `age` varchar(10) DEFAULT NULL COMMENT '年龄',
  `birth` varchar(10) DEFAULT NULL COMMENT '生日',
  `idcard` varchar(30) DEFAULT NULL COMMENT '身份证号',
  `nation` varchar(120) DEFAULT NULL COMMENT '民族',
  `marriage` varchar(30) DEFAULT NULL COMMENT '婚姻',
  `phone` varchar(30) DEFAULT NULL COMMENT '手机号码',
  `job` varchar(120) DEFAULT NULL COMMENT '工作',
  `province` varchar(120) DEFAULT NULL COMMENT '省',
  `city` varchar(120) DEFAULT NULL COMMENT '市',
  `county` varchar(120) DEFAULT NULL COMMENT '区',
  `detailed` varchar(120) DEFAULT NULL COMMENT '详细地址',
  `education` varchar(120) DEFAULT NULL COMMENT '学历',
  `school` varchar(120) DEFAULT NULL COMMENT '毕业学校',
  `major` varchar(60) DEFAULT NULL COMMENT '专业',
  `chsi_acct` varchar(60) DEFAULT NULL COMMENT '学信网账户',
  `chsi_pwd` varchar(60) DEFAULT NULL COMMENT '学信网密码',
  `company` varchar(120) DEFAULT NULL COMMENT '公司',
  `email` varchar(120) DEFAULT NULL COMMENT '邮箱',
  `social` varchar(120) DEFAULT NULL COMMENT '社保',
  `address` varchar(120) DEFAULT NULL COMMENT '通讯地址',
  `child` varchar(60) DEFAULT NULL COMMENT '小孩随迁',
  `social_acct` varchar(60) DEFAULT NULL COMMENT '人保账户',
  `social_pwd` varchar(60) DEFAULT NULL COMMENT '人保密码',
  `total` int(20) DEFAULT NULL COMMENT '总费用',
  `pay` int(20) DEFAULT NULL COMMENT '已缴费用',
  `unpaid` int(20) DEFAULT NULL COMMENT '未缴费用',
  `source` varchar(20) DEFAULT NULL COMMENT '来源',
  `audit` varchar(20) DEFAULT NULL COMMENT '审核方式',
  `entrance` varchar(60) DEFAULT NULL COMMENT '申报窗口',
  `payment` varchar(20) DEFAULT NULL COMMENT '付款方式',
  `declare` varchar(20) DEFAULT NULL COMMENT '申报方式',
  `progress` varchar(20) DEFAULT NULL COMMENT '工作进度',
  `remark` text COMMENT '备注',
  `transfer` varchar(60) DEFAULT NULL COMMENT '迁移地',
  `founder` varchar(20) DEFAULT NULL COMMENT '创建人',
  `belong` varchar(20) DEFAULT NULL COMMENT '归属用户',
  `querykey` int(10) DEFAULT '1',
  `create_time` int(10) DEFAULT NULL COMMENT '创建时间',
  `update_time` int(10) DEFAULT NULL COMMENT '更新时间'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 表的结构 `ask_overseas`
--

CREATE TABLE `ask_overseas` (
  `id` bigint(20) NOT NULL COMMENT '客户id',
  `name` varchar(120) DEFAULT NULL COMMENT '姓名',
  `gender` varchar(10) DEFAULT NULL COMMENT '未知,男,女',
  `age` varchar(10) DEFAULT NULL COMMENT '年龄',
  `birth` varchar(10) DEFAULT NULL COMMENT '生日',
  `idcard` varchar(30) DEFAULT NULL COMMENT '身份证号',
  `nation` varchar(120) DEFAULT NULL COMMENT '民族',
  `marriage` varchar(30) DEFAULT NULL COMMENT '婚姻',
  `phone` varchar(30) DEFAULT NULL COMMENT '手机号码',
  `job` varchar(120) DEFAULT NULL COMMENT '工作',
  `province` varchar(120) DEFAULT NULL COMMENT '省',
  `city` varchar(120) DEFAULT NULL COMMENT '市',
  `county` varchar(120) DEFAULT NULL COMMENT '区',
  `detailed` varchar(120) DEFAULT NULL COMMENT '详细地址',
  `education` varchar(120) DEFAULT NULL COMMENT '学历',
  `school` varchar(120) DEFAULT NULL COMMENT '毕业学校',
  `major` varchar(60) DEFAULT NULL COMMENT '专业',
  `chsi_acct` varchar(60) DEFAULT NULL COMMENT '学信网账户',
  `chsi_pwd` varchar(60) DEFAULT NULL COMMENT '学信网密码',
  `company` varchar(120) DEFAULT NULL COMMENT '公司',
  `email` varchar(120) DEFAULT NULL COMMENT '邮箱',
  `social` varchar(120) DEFAULT NULL COMMENT '社保',
  `address` varchar(120) DEFAULT NULL COMMENT '通讯地址',
  `child` varchar(60) DEFAULT NULL COMMENT '小孩随迁',
  `social_acct` varchar(60) DEFAULT NULL COMMENT '人保账户',
  `social_pwd` varchar(60) DEFAULT NULL COMMENT '人保密码',
  `total` int(20) DEFAULT NULL COMMENT '总费用',
  `pay` int(20) DEFAULT NULL COMMENT '已缴费用',
  `unpaid` int(20) DEFAULT NULL COMMENT '未缴费用',
  `source` varchar(20) DEFAULT NULL COMMENT '来源',
  `audit` varchar(20) DEFAULT NULL COMMENT '审核方式',
  `entrance` varchar(60) DEFAULT NULL COMMENT '申报窗口',
  `payment` varchar(20) DEFAULT NULL COMMENT '付款方式',
  `declare` varchar(20) DEFAULT NULL COMMENT '申报方式',
  `progress` varchar(20) DEFAULT NULL COMMENT '工作进度',
  `remark` text COMMENT '备注',
  `transfer` varchar(60) DEFAULT NULL COMMENT '迁移地',
  `founder` varchar(20) DEFAULT NULL COMMENT '创建人',
  `belong` varchar(20) DEFAULT NULL COMMENT '归属用户',
  `querykey` int(10) DEFAULT '1',
  `create_time` int(10) DEFAULT NULL COMMENT '创建时间',
  `update_time` int(10) DEFAULT NULL COMMENT '更新时间'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 表的结构 `ask_standard`
--

CREATE TABLE `ask_standard` (
  `id` bigint(20) NOT NULL COMMENT '客户id',
  `name` varchar(120) DEFAULT NULL COMMENT '姓名',
  `gender` varchar(10) DEFAULT NULL COMMENT '未知,男,女',
  `age` varchar(10) DEFAULT NULL COMMENT '年龄',
  `birth` varchar(10) DEFAULT NULL COMMENT '生日',
  `idcard` varchar(30) DEFAULT NULL COMMENT '身份证号',
  `nation` varchar(120) DEFAULT NULL COMMENT '民族',
  `marriage` varchar(30) DEFAULT NULL COMMENT '婚姻',
  `phone` varchar(30) DEFAULT NULL COMMENT '手机号码',
  `job` varchar(120) DEFAULT NULL COMMENT '工作',
  `province` varchar(120) DEFAULT NULL COMMENT '省',
  `city` varchar(120) DEFAULT NULL COMMENT '市',
  `county` varchar(120) DEFAULT NULL COMMENT '区',
  `detailed` varchar(120) DEFAULT NULL COMMENT '详细地址',
  `education` varchar(120) DEFAULT NULL COMMENT '学历',
  `school` varchar(120) DEFAULT NULL COMMENT '毕业学校',
  `major` varchar(60) DEFAULT NULL COMMENT '专业',
  `chsi_acct` varchar(60) DEFAULT NULL COMMENT '学信网账户',
  `chsi_pwd` varchar(60) DEFAULT NULL COMMENT '学信网密码',
  `company` varchar(120) DEFAULT NULL COMMENT '公司',
  `email` varchar(120) DEFAULT NULL COMMENT '邮箱',
  `social` varchar(120) DEFAULT NULL COMMENT '社保',
  `address` varchar(120) DEFAULT NULL COMMENT '通讯地址',
  `child` varchar(60) DEFAULT NULL COMMENT '小孩随迁',
  `social_acct` varchar(60) DEFAULT NULL COMMENT '人保账户',
  `social_pwd` varchar(60) DEFAULT NULL COMMENT '人保密码',
  `total` int(20) DEFAULT NULL COMMENT '总费用',
  `pay` int(20) DEFAULT NULL COMMENT '已缴费用',
  `unpaid` int(20) DEFAULT NULL COMMENT '未缴费用',
  `source` varchar(20) DEFAULT NULL COMMENT '来源',
  `audit` varchar(20) DEFAULT NULL COMMENT '审核方式',
  `entrance` varchar(60) DEFAULT NULL COMMENT '申报窗口',
  `payment` varchar(20) DEFAULT NULL COMMENT '付款方式',
  `declare` varchar(20) DEFAULT NULL COMMENT '申报方式',
  `progress` varchar(20) DEFAULT NULL COMMENT '工作进度',
  `remark` text COMMENT '备注',
  `transfer` varchar(60) DEFAULT NULL COMMENT '迁移地',
  `founder` varchar(20) DEFAULT NULL COMMENT '创建人',
  `belong` varchar(20) DEFAULT NULL COMMENT '归属用户',
  `querykey` int(10) DEFAULT '1',
  `create_time` int(10) DEFAULT NULL COMMENT '创建时间',
  `update_time` int(10) DEFAULT NULL COMMENT '更新时间'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 表的结构 `ask_student`
--

CREATE TABLE `ask_student` (
  `id` bigint(11) NOT NULL COMMENT '学员id',
  `name` varchar(60) DEFAULT NULL COMMENT '姓名',
  `gender` varchar(10) DEFAULT NULL COMMENT '未知,男,女',
  `age` varchar(10) DEFAULT NULL COMMENT '年龄',
  `idcard` varchar(30) DEFAULT NULL COMMENT '身份证号',
  `birth` varchar(30) DEFAULT NULL COMMENT '出生日期',
  `email` varchar(60) DEFAULT NULL COMMENT '电子邮箱',
  `nation` varchar(30) DEFAULT NULL COMMENT '民族',
  `register` varchar(60) DEFAULT NULL COMMENT '户籍',
  `marriage` varchar(30) DEFAULT NULL COMMENT '婚姻状况',
  `phone` varchar(30) DEFAULT NULL COMMENT '手机号码',
  `political` varchar(20) DEFAULT NULL COMMENT '政治面貌',
  `job` varchar(10) DEFAULT NULL COMMENT '职业',
  `address` varchar(60) DEFAULT NULL COMMENT '通讯地址',
  `emergency_contact` varchar(60) DEFAULT NULL COMMENT '紧急联系人',
  `total` int(20) DEFAULT NULL COMMENT '总费用',
  `tuition_one` int(20) DEFAULT NULL COMMENT '第一年学费',
  `tuition_two` int(20) DEFAULT NULL COMMENT '第二年学费',
  `unpaid` int(20) DEFAULT NULL COMMENT '未缴费用',
  `source` varchar(10) DEFAULT NULL COMMENT '来源',
  `promote` varchar(10) DEFAULT NULL COMMENT '提升层次',
  `school` varchar(20) DEFAULT NULL COMMENT '报读学校',
  `student_type` varchar(30) DEFAULT NULL COMMENT '报读类型',
  `major` varchar(20) DEFAULT NULL COMMENT '报读专业',
  `payment` varchar(20) DEFAULT NULL COMMENT '付款方式',
  `batch` varchar(10) DEFAULT NULL COMMENT '批次',
  `receipt` varchar(120) DEFAULT NULL COMMENT '收据编号',
  `student_acct` varchar(30) DEFAULT NULL COMMENT '学员账号',
  `student_pwd` varchar(60) DEFAULT NULL COMMENT '学员密码',
  `pay_status` varchar(10) DEFAULT NULL COMMENT '缴费状态',
  `apply_time` date DEFAULT NULL COMMENT '报名日期',
  `recruit_teacher` varchar(30) DEFAULT NULL COMMENT '招收老师',
  `reception_teacher` varchar(30) DEFAULT NULL COMMENT '接待老师',
  `remark` text COMMENT '备注',
  `querykey` int(11) DEFAULT '1',
  `create_time` int(10) DEFAULT NULL COMMENT '创建时间',
  `update_time` int(10) DEFAULT NULL COMMENT '更新时间'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 表的结构 `ask_user`
--

CREATE TABLE `ask_user` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `username` varchar(30) NOT NULL COMMENT '用户名',
  `password` varchar(20) NOT NULL COMMENT '密码',
  `nickname` varchar(40) NOT NULL COMMENT '昵称',
  `head_img` varchar(150) NOT NULL COMMENT '头像地址',
  `realname` varchar(60) NOT NULL COMMENT '真实姓名',
  `idcard` int(18) NOT NULL COMMENT '身份证',
  `gender` tinyint(1) NOT NULL DEFAULT '1' COMMENT '性别:1男；2女',
  `phone` varchar(15) NOT NULL COMMENT '手机号码',
  `country` varchar(60) NOT NULL COMMENT '国家',
  `province` varchar(60) NOT NULL COMMENT '省份',
  `city` varchar(60) NOT NULL COMMENT '城市',
  `money` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '金额',
  `total_money` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '累计消费',
  `create_time` int(10) NOT NULL COMMENT '注册时间',
  `last_time` int(10) NOT NULL COMMENT '最后登陆时间',
  `token` varchar(32) NOT NULL,
  `token_time` int(10) NOT NULL,
  `openid` varchar(100) NOT NULL COMMENT '微信openid',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '状态：1启用；0关闭'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `ask_user`
--

INSERT INTO `ask_user` (`id`, `username`, `password`, `nickname`, `head_img`, `realname`, `idcard`, `gender`, `phone`, `country`, `province`, `city`, `money`, `total_money`, `create_time`, `last_time`, `token`, `token_time`, `openid`, `status`) VALUES
(1, '', '', '，，，韋', 'https://wx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTKQNUgjtVPmh3qiazDtUOpt3527JmVM83q7FcjODxZAfBxU9KTAWJdobDcAxe4l42H5DAo5puk3GkQ/132', '', 0, 2, '', '中国', '上海', '', '0.00', '0.00', 1570679718, 0, '8L9ebzKiIsnKIr2g83gW79LaGwTqo0KN', 1570679718, 'oHgsa4_wRB63AGu3AEfDGgvFcbdo', 1);

--
-- 转储表的索引
--

--
-- 表的索引 `ask_admin`
--
ALTER TABLE `ask_admin`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `ask_alldata`
--
ALTER TABLE `ask_alldata`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `ask_auth_group`
--
ALTER TABLE `ask_auth_group`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `ask_auth_group_access`
--
ALTER TABLE `ask_auth_group_access`
  ADD UNIQUE KEY `uid_group_id` (`uid`,`group_id`),
  ADD KEY `uid` (`uid`),
  ADD KEY `group_id` (`group_id`);

--
-- 表的索引 `ask_auth_rule`
--
ALTER TABLE `ask_auth_rule`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- 表的索引 `ask_conf`
--
ALTER TABLE `ask_conf`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `ask_graduate`
--
ALTER TABLE `ask_graduate`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `ask_integral`
--
ALTER TABLE `ask_integral`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `ask_overseas`
--
ALTER TABLE `ask_overseas`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `ask_standard`
--
ALTER TABLE `ask_standard`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `ask_student`
--
ALTER TABLE `ask_student`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `ask_user`
--
ALTER TABLE `ask_user`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `ask_admin`
--
ALTER TABLE `ask_admin`
  MODIFY `id` mediumint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用表AUTO_INCREMENT `ask_alldata`
--
ALTER TABLE `ask_alldata`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '客户id', AUTO_INCREMENT=22;

--
-- 使用表AUTO_INCREMENT `ask_auth_group`
--
ALTER TABLE `ask_auth_group`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用表AUTO_INCREMENT `ask_auth_rule`
--
ALTER TABLE `ask_auth_rule`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- 使用表AUTO_INCREMENT `ask_conf`
--
ALTER TABLE `ask_conf`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT COMMENT '配置项id', AUTO_INCREMENT=11;

--
-- 使用表AUTO_INCREMENT `ask_graduate`
--
ALTER TABLE `ask_graduate`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '客户id';

--
-- 使用表AUTO_INCREMENT `ask_integral`
--
ALTER TABLE `ask_integral`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '客户id';

--
-- 使用表AUTO_INCREMENT `ask_overseas`
--
ALTER TABLE `ask_overseas`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '客户id';

--
-- 使用表AUTO_INCREMENT `ask_standard`
--
ALTER TABLE `ask_standard`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '客户id';

--
-- 使用表AUTO_INCREMENT `ask_student`
--
ALTER TABLE `ask_student`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT COMMENT '学员id';

--
-- 使用表AUTO_INCREMENT `ask_user`
--
ALTER TABLE `ask_user`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
