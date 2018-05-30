-- phpMyAdmin SQL Dump
-- version 2.11.9.2
-- http://www.phpmyadmin.net
--
-- 主机: 127.0.0.1:3306
-- 生成日期: 2018 年 05 月 30 日 09:41
-- 服务器版本: 5.1.28
-- PHP 版本: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `cjmjw`
--

-- --------------------------------------------------------

--
-- 表的结构 `about`
--

CREATE TABLE IF NOT EXISTS `about` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `entitle` text,
  `content` text,
  `encontent` text,
  `paixu` int(11) DEFAULT NULL,
  `data` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=5 ;

--
-- 导出表中的数据 `about`
--

INSERT INTO `about` (`ID`, `title`, `entitle`, `content`, `encontent`, `paixu`, `data`) VALUES
(4, '公司简介', '', '<DIV class="m_l_div m_l_one small">\r\n<H2>平台简介</H2>\r\n<P>国内最大的软文推广平台，合作网络媒体1000余家，日均发稿3000篇以上，服务企业客户5000余家，专注于软文营销。</P></DIV>\r\n<DIV class="m_l_div m_l_two small">\r\n<H2>优势发稿</H2>\r\n<P>全部采用资源包月、直编合作、软文交换的合作方式，确保低价、快速、稳定的发布渠道，平台供货代理300余家。</P></DIV>\r\n<DIV class="m_l_div m_l_three small">\r\n<H2>方便快捷</H2>\r\n<P>您仅需注册账号、充值所需费用（无最低限额，冲多有惠），提交稿件，即可选择千余家网络媒体快速发布。</P></DIV>\r\n<DIV class="m_l_div m_l_four small">\r\n<H2>企业保障</H2>\r\n<P>最新推出软文免费策划、软文收录查询、软文效果跟踪、软文删稿重发、软文定时发布、更多服务为您免费定制。</P></DIV>', '', 1, '2013-09-18');

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `AdminUser` varchar(255) DEFAULT NULL,
  `AdminPass` varchar(255) DEFAULT NULL,
  `qq` varchar(255) DEFAULT NULL,
  `dianhua` varchar(255) DEFAULT NULL,
  `myemail` varchar(255) DEFAULT NULL,
  `weburl` varchar(255) DEFAULT NULL,
  `flag` int(11) DEFAULT '0',
  `ip` varchar(255) DEFAULT NULL,
  `regtime` varchar(255) DEFAULT NULL,
  `data` varchar(255) DEFAULT NULL,
  `yue` float DEFAULT '0',
  `tyue` float DEFAULT '0',
  `headpic` varchar(255) DEFAULT '../images/headpic.gif	',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=5 ;

--
-- 导出表中的数据 `admin`
--

INSERT INTO `admin` (`ID`, `AdminUser`, `AdminPass`, `qq`, `dianhua`, `myemail`, `weburl`, `flag`, `ip`, `regtime`, `data`, `yue`, `tyue`, `headpic`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', '2385788327', '18368461820', '2385788327@qq.com', 'http://www.zxgzw.com', 1, '', '', '', 126744, 0, '../upload/headpic/1464714876.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `anli_class`
--

CREATE TABLE IF NOT EXISTS `anli_class` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `BigClass` varchar(255) DEFAULT NULL,
  `enBigClass` varchar(255) DEFAULT NULL,
  `paixu` int(11) DEFAULT NULL,
  `data` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=30 ;

--
-- 导出表中的数据 `anli_class`
--


-- --------------------------------------------------------

--
-- 表的结构 `anli_info`
--

CREATE TABLE IF NOT EXISTS `anli_info` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `class_id` int(11) DEFAULT NULL,
  `title` text,
  `entitle` text,
  `nd` int(11) DEFAULT '1',
  `content` text,
  `encontent` text,
  `data` varchar(255) DEFAULT '',
  `tj` int(11) DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=102 ;

--
-- 导出表中的数据 `anli_info`
--


-- --------------------------------------------------------

--
-- 表的结构 `appkf_info`
--

CREATE TABLE IF NOT EXISTS `appkf_info` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `VipUser` varchar(255) DEFAULT NULL,
  `owner` varchar(255) DEFAULT NULL,
  `mid` int(11) DEFAULT '0',
  `order_id` varchar(255) DEFAULT NULL,
  `title` text,
  `medianame` text,
  `weburl` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT '0',
  `content` text,
  `reason` text,
  `dreason` text,
  `data` varchar(255) DEFAULT '',
  `fbtime` varchar(255) DEFAULT '',
  `flag` int(11) DEFAULT '0',
  `yn` int(11) DEFAULT '0',
  `dyn` int(11) DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=132 ;

--
-- 导出表中的数据 `appkf_info`
--

INSERT INTO `appkf_info` (`ID`, `VipUser`, `owner`, `mid`, `order_id`, `title`, `medianame`, `weburl`, `price`, `content`, `reason`, `dreason`, `data`, `fbtime`, `flag`, `yn`, `dyn`) VALUES
(129, 'vip01', '', 178, '2013101493086', '网站应用开发需求', '腾讯高级应用开发', '', 230, '网站应用开发需求', '', '', '2013-10-14 08:39:16', '', 0, 0, 1),
(130, 'vip01', '', 179, '2013101493086', '网站应用开发需求', '腾讯普通应用开发', '', 200, '网站应用开发需求', '特殊原因，不能实现。', '', '2013-10-14 08:39:16', '2013-10-14 08:48:24', 3, 0, 0),
(131, 'vip01', '', 176, '2013101493086', '网站应用开发需求', '新浪高级应用开发', 'http://www.sina.com.cn/', 80, '网站应用开发需求', '', '', '2013-10-14 08:39:16', '2013-10-14 08:47:38', 2, 1, 0);

-- --------------------------------------------------------

--
-- 表的结构 `ask_class`
--

CREATE TABLE IF NOT EXISTS `ask_class` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `BigClass` varchar(255) DEFAULT NULL,
  `enBigClass` varchar(255) DEFAULT NULL,
  `paixu` int(11) DEFAULT NULL,
  `data` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=30 ;

--
-- 导出表中的数据 `ask_class`
--

INSERT INTO `ask_class` (`ID`, `BigClass`, `enBigClass`, `paixu`, `data`) VALUES
(28, '已回复', '', 1, '2013-09-19'),
(29, '未回复', '', 2, '2013-09-19');

-- --------------------------------------------------------

--
-- 表的结构 `ask_discuss`
--

CREATE TABLE IF NOT EXISTS `ask_discuss` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `VipUser` varchar(255) DEFAULT NULL,
  `order_id` varchar(255) DEFAULT NULL,
  `recontent` text,
  `data` varchar(255) DEFAULT '',
  `flag` int(11) DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=94 ;

--
-- 导出表中的数据 `ask_discuss`
--

INSERT INTO `ask_discuss` (`ID`, `VipUser`, `order_id`, `recontent`, `data`, `flag`) VALUES
(79, 'admin', '13772844834611', '尊敬的客户：<br />\r\n			　　您反馈的问题，我们已收到，并正在处理中...请耐心等待我们的处理结果，谢谢！', '2013-10-02 12:34:48', 0),
(80, 'admin', '13770231578873', '支付宝系统异常，请稍等再试！', '2013-10-02 01:05:48', 0),
(81, 'vip01', '13770231578873', '那我稍候再试，谢谢！', '2013-10-02 01:27:15', 0),
(82, 'admin', '13770231578873', '好的，有问题请继续向我们反馈，谢谢您对我们工作的支持。', '2013-10-02 01:30:22', 0),
(83, 'admin', '2017071921980', '尊敬的客户：<br />\r\n			　　您反馈的问题，我们已收到，并正在处理中...请耐心等待我们的处理结果，谢谢！', '2017-07-27 16:10:29', 0),
(84, 'admin', '2017071921980', '', '2017-07-27 16:10:44', 0),
(85, 'admin', '2017121565610', '尊敬的客户：<br />\r\n			　　您反馈的问题，我们已收到，并正在处理中...请耐心等待我们的处理结果，谢谢！', '2017-12-15 14:22:08', 0),
(86, 'admin', '2017121565610', '', '2017-12-15 14:22:18', 0),
(87, 'admin', '2017121974503', '尊敬的客户：<br />\r\n			　　您反馈的问题，我们已收到，并正在处理中...请耐心等待我们的处理结果，谢谢！', '2017-12-22 21:59:24', 0),
(88, 'admin', '2017121974503', '', '2017-12-25 19:28:37', 0),
(89, 'admin', '2017072715243', '尊敬的客户：<br />\r\n			　　您反馈的问题，我们已收到，并正在处理中...请耐心等待我们的处理结果，谢谢！', '2018-01-03 14:37:15', 0),
(90, 'admin', '2017072715243', '', '2018-01-03 14:37:23', 0),
(91, 'admin', '2018010353349', '尊敬的客户：<br />\r\n			　　您反馈的问题，我们已收到，并正在处理中...请耐心等待我们的处理结果，谢谢！', '2018-01-03 14:38:49', 0),
(92, 'admin', '2018010353349', '', '2018-01-03 14:38:52', 0),
(93, 'admin', '2018010198137', '尊敬的客户：<br />\r\n			　　您反馈的问题，我们已收到，并正在处理中...请耐心等待我们的处理结果，谢谢！', '2018-01-30 11:00:08', 0);

-- --------------------------------------------------------

--
-- 表的结构 `ask_info`
--

CREATE TABLE IF NOT EXISTS `ask_info` (
  `ID` int(1) NOT NULL AUTO_INCREMENT,
  `VipUser` varchar(255) DEFAULT NULL,
  `order_id` varchar(255) DEFAULT NULL,
  `title` text,
  `content` text,
  `encontent` text,
  `data` varchar(255) DEFAULT '',
  `flag` int(11) DEFAULT '0',
  `yn` int(11) DEFAULT '0',
  `dyn` int(11) DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=100 ;

--
-- 导出表中的数据 `ask_info`
--

INSERT INTO `ask_info` (`ID`, `VipUser`, `order_id`, `title`, `content`, `encontent`, `data`, `flag`, `yn`, `dyn`) VALUES
(67, 'vip02', '13769389137314', '充值失败但已扣款', '<p>充值提示失败，但款项已扣掉，麻烦检查确认一下。</p>', '', '2013-09-19', 0, 0, 0),
(68, 'vip01', '13769389138313', '软文发布失败', '<p>不知道怎么回事，执行了操作却发布失败。</p>', '', '2013-09-19', 0, 0, 0),
(69, 'vip01', '13770231578873', '不能充值问题', '<p>为什么使用支付宝不能充值？<br/></p>', '', '2013-09-19', 2, 1, 0),
(70, 'vip01', '13772844834611', '请问如何充值？', '<p>我不会充值，请问如何充值？</p>', '', '2013-09-19', 1, 0, 0),
(71, 'vip01', '1377284727600', '如何申请代写软文？', '<p>请问如何申请代写软文？</p>', '', '2013-09-19', 0, 0, 0),
(72, 'admin', '2013092282379', '富软文', '', '', '2013-09-22', 1, 0, 0),
(73, 'vip01', '2013092295001', 'xxxxxxxxx', '<p>xxxxxxxxxxxxxxxxx</p>', '', '2013-09-22', 1, 0, 0),
(74, 'dobxiblc', '2016082146318', 'Mr.', '1', NULL, '2016-08-21', 0, 0, 0),
(75, 'dobxiblc', '2016082110670', 'Mr.', '1', NULL, '2016-08-21', 0, 0, 0),
(76, 'dobxiblc', '2016082178236', 'Mr.', '1', NULL, '2016-08-21', 0, 0, 0),
(77, 'dobxiblc', '2016082192356', '', '', NULL, '2016-08-21', 0, 0, 0),
(78, 'shixin', '2016122836109', '2016122753736', '<span style="font-size:14.6667px;line-height:22px;">请尽快处理发布</span>', NULL, '2016-12-28', 0, 0, 0),
(79, '15054340057', '2017032176206', '15054340057充值300怎么显示没充值', '<p>15054340057充值300怎么显示没充值</p>\r\n<p>&nbsp;</p>', NULL, '2017-03-21', 0, 0, 0),
(80, 'ccyyzz911', '2017071921980', '链接内文章被删除', '<p>标题：女王传奇QUEEN STORY：时尚在英国 唯美在女王</p>\r\n<p>站点：UC头条</p>', NULL, '2017-07-19', 2, 1, 0),
(81, 'liao881023', '2017072136287', '您好，帮忙尽快撤下稿件吧。稿件有问题，需要变动。', '<div>2017072188390</div>\r\n<div>2017072188390</div>\r\n<div>2017072188390</div>\r\n<div>2017072188390</div>\r\n<div>2017072188390</div>\r\n<div>2017072174091</div>\r\n<div>2017072174091</div>\r\n<div>2017072174091</div>\r\n<div>2017072174091</div>\r\n<div>2017072174091</div>\r\n<div>2017072174091</div>\r\n<div>2017072174091</div>\r\n<div>2017072174091</div>\r\n<div>2017072174091</div>\r\n<div>2017072174091</div>\r\n<div>这些订单号，帮忙撤下吧。谢谢了。</div>', NULL, '2017-07-21', 0, 0, 0),
(82, 'ccyyzz911', '2017072715243', '2017072541777 链接错误', '<table width="100%" cellpadding="0" cellspacing="1" bgcolor="#e2e2e2" style="font-family:''Microsoft YaHei'';font-size:12px;"><tbody><tr><td bgcolor="#ffffff" height="30" style="padding:0px;margin:0px;word-wrap:break-word;"><div align="center">2017072541777</div>\r\n</td>\r\n<td bgcolor="#ffffff" style="padding:0px;margin:0px;word-wrap:break-word;"></td>\r\n</tr>\r\n</tbody>\r\n</table>', NULL, '2017-07-27', 2, 1, 0),
(83, 'test2', '2017121565610', '测试', '测试', NULL, '2017-12-15', 2, 1, 0),
(84, '18651096476', '2017121974503', '订单链接批量导出', '订单链接是否可以批量导出，一个一个复制太麻烦了。', NULL, '2017-12-19', 2, 1, 0),
(85, 'TX5004', '2018010198137', '充值了未到账怎么办？', '充值了未到账怎么办？', NULL, '2018-01-01', 1, 0, 1),
(86, 'TX5004', '2018010137185', '2018010186514', '今天到底能不能发布新闻啊？', NULL, '2018-01-01', 0, 0, 1),
(87, '159123', '2018010353349', '5一天一天日', '他他他', NULL, '2018-01-03', 2, 1, 0),
(88, '1095875722', '2018012957488', '俺家的“崽儿”去哪了？王思聪：在我这答题呢，不用担心', '<p style="font-family:sans-serif;font-size:16px;"><span style="font-family:宋体;font-size:14px;">哈喽小伙伴们大家好，这里是小编诚然菌~最近啊，相信很多游戏策划都要被老板骂啦，为啥呢？因为<span style="font-family:Calibri;">IOS</span>免费榜单第一已经被“我们的崽儿”给霸占了。</span></p>\r\n<p style="font-family:sans-serif;font-size:16px;"><span style="font-family:宋体;font-size:14px;">老板：你们怎么搞的？被一蛙打败了？</span></p>\r\n<p style="font-family:sans-serif;font-size:16px;"><span style="font-family:宋体;font-size:14px;">策划（小心嘀咕）：老板，这情况也有你儿子的功劳啊……</span></p>\r\n<p style="font-family:sans-serif;font-size:16px;"><span style="font-family:宋体;font-size:14px;">老板默默打开了“旅行的青蛙”：胡说！俺儿子到现在都没回来呢！</span></p>\r\n<p style="font-family:sans-serif;font-size:16px;"><span style="font-family:宋体;font-size:14px;">……</span></p>\r\n<p style="font-family:sans-serif;font-size:16px;"><span style="font-family:宋体;font-size:14px;">不过说笑归说笑啊，旅行的青蛙能登顶IOS免费下载榜单，也有它自己的道理。这个不需要氪金，也不需要嗑时间的小游戏却给现在的玩家们一种不一样的游戏体验??激发了广大年轻“爸妈”的父爱母爱，在这个爱心泛滥的时代，有一只蛙可以让淤出的爱得到价值……<span style="font-family:Calibri;">emmm</span>什么比较申意的在这里就不多说了。</span></p>\r\n<p style="font-family:sans-serif;font-size:16px;"><span style="font-family:宋体;font-size:14px;">最近呐，诚然菌也养了一只“崽儿”起名叫“蛙钱”，其含义是：哇！钱！</span></p>\r\n<p style="font-family:sans-serif;font-size:16px;"><img src="http://www.2349.cn/ueditor/php/upload/image/20180129/1517212670102469.png" title="1517212670102469.png" _src="http://www.2349.cn/ueditor/php/upload/image/20180129/1517212670102469.png" alt="blob.png" /><span style="font-family:宋体;font-size:14px;">&nbsp;</span></p>\r\n<p style="font-family:sans-serif;font-size:16px;"><span style="font-family:宋体;font-size:14px;">总想着某一天归来的“崽儿”能够给我带回来一笔巨额资金！可是，他要么给我寄了张明信片，要么……回来就吃我的东西！早知道这样，干脆叫你猪蛙算了……</span></p>\r\n<p style="font-family:sans-serif;font-size:16px;"><span style="font-family:宋体;font-size:14px;">这不，离家旅行的“蛙钱”又给我发来了明信片。</span></p>\r\n<p style="font-family:sans-serif;font-size:16px;"><img src="http://www.2349.cn/ueditor/php/upload/image/20180129/1517212674350847.png" title="1517212674350847.png" _src="http://www.2349.cn/ueditor/php/upload/image/20180129/1517212674350847.png" alt="blob.png" /><span style="font-family:宋体;font-size:14px;">&nbsp;</span></p>\r\n<p style="font-family:sans-serif;font-size:16px;"><span style="font-family:宋体;font-size:14px;">唉都看腻了，要么是风景要么和小昆虫搁那玩，我说咱作为一只蛙能不能有点食物链意识？</span></p>\r\n<p style="font-family:sans-serif;font-size:16px;"><span style="font-family:宋体;font-size:14px;">诶？</span></p>\r\n<p style="font-family:sans-serif;font-size:16px;"><span style="font-family:宋体;font-size:14px;">维特米呢特？</span></p>\r\n<p style="font-family:sans-serif;font-size:16px;"><span style="font-family:宋体;font-size:14px;">这……这是和老公的合照？？</span></p>\r\n<p style="font-family:sans-serif;font-size:16px;"><span style="font-family:宋体;font-size:14px;">还没等我反应过来，“咚咚咚”崽儿回来了。</span></p>\r\n<p style="font-family:sans-serif;font-size:16px;"><img src="http://www.2349.cn/ueditor/php/upload/image/20180129/1517212679430869.png" title="1517212679430869.png" _src="http://www.2349.cn/ueditor/php/upload/image/20180129/1517212679430869.png" alt="blob.png" /><span style="font-family:宋体;font-size:14px;">&nbsp;</span></p>\r\n<p style="font-family:sans-serif;font-size:16px;"><span style="font-family:宋体;font-size:14px;">emmm……</span></p>\r\n<p style="font-family:sans-serif;font-size:16px;"><span style="font-family:宋体;font-size:14px;">&nbsp;</span></p>\r\n<p style="font-family:sans-serif;font-size:16px;"><span style="font-family:宋体;font-size:14px;">故事是讲完了，但是现实还在继续。上面的段子可不是完全虚构的，旅かえるx一智千金确实要迎来了合作。可能有些小伙伴不知道“一智千金”是什么？其实啊，就是熊猫直播的一个答题赢现金类的节目。观众们在看直播的同时进行答题，答对本场的全部<span style="font-family:Calibri;">12</span>个问题之后即可分红奖池里的奖金啦。</span></p>\r\n<p style="font-family:sans-serif;font-size:16px;"><span style="font-family:宋体;font-size:14px;">而且看到这篇文章的小伙伴们有福利啦。偷偷告诉你，在本次旅かえるx一智千金中，题目有关咱们的“崽儿”有一题的问题是：最近火热的游戏《旅行的青蛙》的被子什么颜色？</span></p>\r\n<p style="font-family:sans-serif;font-size:16px;"><span style="font-family:宋体;font-size:14px;">哼哼，如果不切出去看自家的崽儿能回答的出来的小伙伴们请举手！反正小编是答不上来。</span></p>\r\n<p style="font-family:sans-serif;font-size:16px;"><span style="font-family:宋体;font-size:14px;">有了这次合作，于是网友们就开始调侃：</span></p>\r\n<p style="font-family:sans-serif;font-size:16px;"><span style="font-family:宋体;font-size:14px;">网友：俺家的“崽儿”咋还不回来啊，去哪了呀？</span></p>\r\n<p style="font-family:sans-serif;font-size:16px;"><span style="font-family:宋体;font-size:14px;">王思聪：在我这答题呢，不用担心。</span></p>\r\n<p style="font-family:sans-serif;font-size:16px;"><span style="font-family:宋体;font-size:14px;">此次节目合作其实还是比较期待的，想不想来测验一下自己是否是一位合格的家长呢？可以关注一下每天的答题档：12：<span style="font-family:Calibri;">30</span>和<span style="font-family:Calibri;">21</span>：<span style="font-family:Calibri;">30</span>，注意哦，请务必将熊猫直播<span style="font-family:Calibri;">APP</span>更新到最新版本哦。</span></p>\r\n<p style="font-family:sans-serif;font-size:16px;"><span style="font-family:宋体;font-size:14px;">那么小伙伴们其实自己也可以来预测一下，此次的节目合作的内容。比如说，在《旅行的青蛙》中加入可爱的熊猫崽崽？</span></p>\r\n<p style="font-family:sans-serif;font-size:16px;"><img src="http://www.2349.cn/ueditor/php/upload/image/20180129/1517212689817819.png" title="1517212689817819.png" _src="http://www.2349.cn/ueditor/php/upload/image/20180129/1517212689817819.png" alt="blob.png" width="632" height="565" style="width:632px;height:565px;" />?<span style="font-family:宋体;font-size:14px;">&nbsp;</span></p>\r\n<p style="font-family:sans-serif;font-size:16px;"><span style="font-family:宋体;font-size:14px;">不过想想在“一智千金”的直播中，弹幕被“崽儿”爸妈全军覆没的壮观景象还是有点小激动的！</span></p>\r\n<p style="font-family:sans-serif;font-size:16px;"><span style="font-family:宋体;font-size:14px;">“崽儿”加油！</span></p>\r\n<p style="font-family:sans-serif;font-size:16px;"><span style="font-family:宋体;font-size:14px;">“崽儿”在上，受为父一膜拜！</span></p>\r\n<p style="font-family:sans-serif;font-size:16px;"><span style="font-family:宋体;font-size:14px;">那是俺家的“崽儿”！</span></p>\r\n<p style="font-family:sans-serif;font-size:16px;"><span style="font-family:宋体;font-size:14px;">还有各种自家“崽儿”名字的刷屏，什么“狗蛋”啊“牛蛋”啊“蛙钱”呐……</span></p>\r\n<p style="font-family:sans-serif;font-size:16px;"><span style="font-family:宋体;font-size:14px;">与其干等蛙回家，不如答题赢钱花。好啦，本期的内容就到此结束啦，小伙伴们认为在答题中会遇到什么样的与自家“崽儿”有关的奇葩问题呢？欢迎小伙伴们在评论区当一回出题人<span style="font-family:Calibri;">~</span></span></p>\r\n<p style="font-family:sans-serif;font-size:16px;"><span style="font-family:Calibri;font-size:14px;">&nbsp;</span></p>\r\n<div><span style="font-family:Calibri;font-size:14px;"><br />\r\n</span></div>', NULL, '2018-01-29', 0, 0, 1),
(89, '1095875722', '2018012994938', '旅行青蛙变青蛙去哪先别急！它可能在《一智千金》给你赚生活费呢', '<p style="font-family:sans-serif;font-size:16px;"><span style="font-family:宋体;font-size:14px;">《旅行青蛙》近期火遍了朋友圈，仿佛一夜之间你认识的朋友们都成了爸爸妈妈，每天除了认真工作好好生活就是没事点开游戏看看自家的蛙回来没，如果没回来则悻悻继续等，如果回来了便看看蛙都经历了什么、带回了什么，可以说《旅行青蛙》的结果未知设定引发了玩家们的探索欲，今天我们就来聊聊你家的蛙可能去哪了。</span></p>\r\n<p style="font-family:sans-serif;font-size:16px;"><img src="http://www.2349.cn/ueditor/php/upload/image/20180129/1517212842177015.png" title="1517212842177015.png" _src="http://www.2349.cn/ueditor/php/upload/image/20180129/1517212842177015.png" alt="blob.png" /><span style="font-family:宋体;font-size:14px;">&nbsp;</span></p>\r\n<p style="font-family:sans-serif;font-size:16px;"><span style="font-family:宋体;font-size:14px;">《旅行青蛙》由于与世界各地的风景名胜联系在了一起，所以在养蛙的同时大家还能见识到更多好玩的地方，今天我们要说的青蛙可能出现的地方，就是熊猫直播的新节目《一智千金》。从图中我们可以看到，熊猫直播与《旅行青蛙》已经开始了深度的合作，品牌在游戏中已经得到了深度的结合，画面中出现了既能丰富场景内容的熊猫，又不会遮挡住任何与游戏有关的内容，这样的结合是大家最希望看到的。</span></p>\r\n<p style="font-family:sans-serif;font-size:16px;"><img src="http://www.2349.cn/ueditor/php/upload/image/20180129/1517212848241078.png" title="1517212848241078.png" _src="http://www.2349.cn/ueditor/php/upload/image/20180129/1517212848241078.png" alt="blob.png" /><span style="font-family:宋体;font-size:14px;">&nbsp;</span></p>\r\n<p style="font-family:sans-serif;font-size:16px;"><span style="font-family:宋体;font-size:14px;">《旅行青蛙》最令玩家痴迷的内容便是等待，尽管可能几天都没有消息，但一旦青蛙回来了，各位玩家便会欢呼雀跃与大家分享自己的小蛙又去了哪、又带回了什么。在等待的时间里，各位家长可以参与《一智千金》为它赚点奶粉钱，以便小蛙下次归来之后，多为它准备一些旅行所需用品，或许会比朋友提前解锁一些内容也说不定。</span></p>\r\n<p style="font-family:sans-serif;font-size:16px;"><img src="http://www.2349.cn/ueditor/php/upload/image/20180129/1517212852373606.png" title="1517212852373606.png" _src="http://www.2349.cn/ueditor/php/upload/image/20180129/1517212852373606.png" alt="blob.png" />?<span style="font-family:宋体;font-size:14px;">&nbsp;</span></p>\r\n<p style="font-family:sans-serif;font-size:16px;"><span style="font-family:宋体;font-size:14px;">时下最流行的直播答题游戏与时下最流行的手机游戏结合在一起将会擦出怎样的火花、拓展出哪些脑洞大开的合作，或许是我们玩家接下来将要去期待的内容，也正是这样的联动才让我们的手机世界更加丰富多彩。各位辛勤养小蛙的玩家父母们，现在养小蛙能做的只有等，是否想过全程看小蛙直播它都经历了什么？想想还真的很期待呢。</span></p>\r\n<p style="font-family:sans-serif;font-size:16px;"><img src="http://www.2349.cn/ueditor/php/upload/image/20180129/1517212856139880.png" title="1517212856139880.png" _src="http://www.2349.cn/ueditor/php/upload/image/20180129/1517212856139880.png" alt="blob.png" /><span style="font-family:宋体;font-size:14px;">&nbsp;</span></p>\r\n<p style="font-family:sans-serif;font-size:16px;"><span style="font-family:Calibri;font-size:14px;">&nbsp;</span></p>\r\n<p style="font-family:sans-serif;font-size:16px;"><span style="font-family:Calibri;font-size:14px;">&nbsp;</span></p>\r\n<div><span style="font-family:Calibri;font-size:14px;"><br />\r\n</span></div>', NULL, '2018-01-29', 0, 0, 1),
(90, '', '2018051994232', '88888', '88888'' RLIKE (SELECT (CASE WHEN (46=46) THEN 88888 ELSE 0x28 END)) AND ''5X''=''5X', NULL, '2018-05-19', 0, 0, 0),
(91, '', '2018051973338', '88888', '88888', NULL, '2018-05-19', 0, 0, 0),
(92, '', '2018051989568', '88888', '88888'' AND ''FX'' LIKE ''bF', NULL, '2018-05-19', 0, 0, 0),
(93, '', '2018051954686', '88888', '88888'' AND ''HC'' LIKE ''HC', NULL, '2018-05-19', 0, 0, 0),
(94, '', '2018051989530', '88888', '88888', NULL, '2018-05-19', 0, 0, 0),
(95, '', '2018051978304', '88888', '88888'') AND (''Iu'' LIKE ''jD', NULL, '2018-05-19', 0, 0, 0),
(96, '', '2018051968342', '88888', '88888', NULL, '2018-05-19', 0, 0, 0),
(97, '', '2018051912590', '88888', '88888'') AND (''Uy'' LIKE ''Uy', NULL, '2018-05-19', 0, 0, 0),
(98, '', '2018051923875', '88888', '88888', NULL, '2018-05-19', 0, 0, 0),
(99, 'test', '2018052894721', '21', '<p>123</p>', NULL, '2018-05-28', 0, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `bank_info`
--

CREATE TABLE IF NOT EXISTS `bank_info` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `accnumber` varchar(255) DEFAULT NULL,
  `bankname` varchar(255) DEFAULT NULL,
  `propic` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=18 ;

--
-- 导出表中的数据 `bank_info`
--

INSERT INTO `bank_info` (`ID`, `name`, `accnumber`, `bankname`, `propic`) VALUES
(9, '慈溪市易创信息技术有限公司', '2359905724@qq.com', '支付宝', '../upload/Partners/1470397462.png');

-- --------------------------------------------------------

--
-- 表的结构 `caiwu`
--

CREATE TABLE IF NOT EXISTS `caiwu` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` varchar(255) DEFAULT NULL,
  `trade_id` varchar(255) DEFAULT NULL,
  `VipUser` varchar(255) DEFAULT NULL,
  `operator` varchar(255) DEFAULT NULL,
  `leixing` varchar(255) DEFAULT NULL,
  `jine` float DEFAULT '0',
  `flag` int(11) DEFAULT '0',
  `data` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=4 ;

--
-- 导出表中的数据 `caiwu`
--

INSERT INTO `caiwu` (`ID`, `order_id`, `trade_id`, `VipUser`, `operator`, `leixing`, `jine`, `flag`, `data`) VALUES
(1, '2018053021917', NULL, 'test', 'admin', '账号代充值', 1000, 1, '2018-05-30 09:35:37'),
(2, '2018053089936', NULL, 'admin', 'admin', '软文发稿', 5, 3, '2018-05-30 09:35:57'),
(3, '2018053077766', NULL, 'admin', 'admin', '软文发稿', 10, 3, '2018-05-30 09:41:28');

-- --------------------------------------------------------

--
-- 表的结构 `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `entitle` text,
  `content` text,
  `encontent` text,
  `paixu` int(11) DEFAULT NULL,
  `data` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=6 ;

--
-- 导出表中的数据 `contact`
--

INSERT INTO `contact` (`ID`, `title`, `entitle`, `content`, `encontent`, `paixu`, `data`) VALUES
(5, '联系我们', '', '<P><STRONG><FONT style="FONT-SIZE: 16pt">联系方式： </FONT></STRONG></P>\r\n<P>公司电话：4000020172 </P>\r\n<P>企业 Q Q：800023525 </P>\r\n<P>经理Q Q：775925816 </P>\r\n<P>公司邮箱：775925816@qq.com </P>\r\n<P>联系人：朱先生</P>', '', 1, '2013-09-18');

-- --------------------------------------------------------

--
-- 表的结构 `daixie_discuss`
--

CREATE TABLE IF NOT EXISTS `daixie_discuss` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `VipUser` varchar(255) DEFAULT NULL,
  `order_id` varchar(255) DEFAULT NULL,
  `recontent` text,
  `data` varchar(255) DEFAULT '',
  `flag` int(11) DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=85 ;

--
-- 导出表中的数据 `daixie_discuss`
--

INSERT INTO `daixie_discuss` (`ID`, `VipUser`, `order_id`, `recontent`, `data`, `flag`) VALUES
(79, 'vip01', '2013092276847', '要求已更新，请重新看要求。', '2013-10-01 09:02:21', 0),
(80, 'vip01', '2013092276847', '稿件要求已再次修改，请查看。', '2013-10-02 03:51:48', 0),
(81, 'admin', '2013092276847', '已经按要求再次作了修改，请审阅。', '2013-10-02 06:57:07', 0),
(82, 'vip01', '2013092276847', '最好能突出产品的卖点。', '2013-10-02 07:06:44', 0),
(83, 'admin', '2013092276847', '能详细说一下你们公司的产品有什么卖点吗？', '2013-10-02 07:25:26', 0),
(84, 'admin', '2018032442706', '231', '2018-03-24 21:39:06', 0);

-- --------------------------------------------------------

--
-- 表的结构 `daixie_info`
--

CREATE TABLE IF NOT EXISTS `daixie_info` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `VipUser` varchar(255) DEFAULT NULL,
  `order_id` varchar(255) DEFAULT NULL,
  `title` text,
  `pianshu` int(11) DEFAULT '0',
  `price` int(11) DEFAULT '0',
  `content` text,
  `encontent` text,
  `data` varchar(255) DEFAULT '',
  `flag` int(11) DEFAULT '0',
  `yn` int(11) DEFAULT '0',
  `dyn` int(11) DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk AUTO_INCREMENT=1 ;

--
-- 导出表中的数据 `daixie_info`
--


-- --------------------------------------------------------

--
-- 表的结构 `diqu_class`
--

CREATE TABLE IF NOT EXISTS `diqu_class` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `BigClass` varchar(255) DEFAULT NULL,
  `enBigClass` varchar(255) DEFAULT NULL,
  `paixu` int(11) DEFAULT NULL,
  `data` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=104 ;

--
-- 导出表中的数据 `diqu_class`
--

INSERT INTO `diqu_class` (`ID`, `BigClass`, `enBigClass`, `paixu`, `data`) VALUES
(94, '甘肃', '', 23, '2017-10-21'),
(93, '辽宁', '', 22, '2017-10-21'),
(91, '海南', '', 20, '2017-10-21'),
(89, '云南', '', 18, '2017-10-21'),
(87, '贵州', '', 16, '2017-10-21'),
(92, '黑龙江', '', 21, '2017-10-21'),
(90, '新疆', '', 19, '2017-10-21'),
(88, '重庆', '', 17, '2017-10-21'),
(86, '四川', '', 15, '2017-10-21'),
(85, '广西', '', 14, '2017-10-21'),
(84, '安徽', '', 13, '2017-10-21'),
(83, '江苏', '', 12, '2017-10-21'),
(82, '陕西', '', 11, '2017-10-21'),
(81, '湖南', '', 10, '2017-10-21'),
(80, '湖北', '', 9, '2017-10-21'),
(79, '山西', '', 8, '2017-10-21'),
(78, '山东', '', 7, '2017-10-21'),
(77, '河南', '', 6, '2017-10-21'),
(76, '浙江', '', 5, '2017-10-21'),
(75, '江西', '', 4, '2017-10-21'),
(72, '全国', '', 1, '2017-09-04'),
(73, '北京', '', 2, '2017-10-21'),
(74, '上海', '', 3, '2017-10-21'),
(95, '福建', '', 24, '2017-10-21'),
(96, '广东', '', 25, '2017-10-21'),
(97, '河北', '', 26, '2017-10-21'),
(98, '天津', '', 27, '2017-10-21'),
(99, '青海', '', 28, '2017-10-21'),
(100, '内蒙古', '', 29, '2017-10-23'),
(101, '吉林', '', 30, '2018-01-05'),
(102, '宁夏', '', 31, '2018-01-06'),
(103, '西藏', '', 32, '2018-01-06');

-- --------------------------------------------------------

--
-- 表的结构 `huiyuan_info`
--

CREATE TABLE IF NOT EXISTS `huiyuan_info` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `VipUser` varchar(255) DEFAULT NULL,
  `owner` varchar(255) DEFAULT NULL,
  `mid` int(11) DEFAULT '0',
  `order_id` varchar(255) DEFAULT NULL,
  `title` text,
  `medianame` text,
  `weburl` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT '0',
  `content` text,
  `reason` text,
  `dreason` text,
  `data` varchar(255) DEFAULT '',
  `fbtime` varchar(255) DEFAULT '',
  `flag` int(11) DEFAULT '0',
  `yn` int(11) DEFAULT '0',
  `dyn` int(11) DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=131 ;

--
-- 导出表中的数据 `huiyuan_info`
--

INSERT INTO `huiyuan_info` (`ID`, `VipUser`, `owner`, `mid`, `order_id`, `title`, `medianame`, `weburl`, `price`, `content`, `reason`, `dreason`, `data`, `fbtime`, `flag`, `yn`, `dyn`) VALUES
(129, 'vip01', '', 158, '2013101419173', '代写宣传软文', '新浪普通会员', '', 100, '代写宣传软文', '违规内容。', '', '2013-10-14 06:33:44', '2013-10-14 06:54:57', 3, 0, 0),
(130, 'vip01', '', 160, '2013101419173', '代写宣传软文', '腾讯普通会员', 'http://www.qq.com/', 150, '代写宣传软文', '', '', '2013-10-14 06:33:44', '2013-10-14 06:54:14', 2, 1, 0);

-- --------------------------------------------------------

--
-- 表的结构 `huodong_info`
--

CREATE TABLE IF NOT EXISTS `huodong_info` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `VipUser` varchar(255) DEFAULT NULL,
  `owner` varchar(255) DEFAULT NULL,
  `mid` int(11) DEFAULT '0',
  `order_id` varchar(255) DEFAULT NULL,
  `title` text,
  `medianame` text,
  `weburl` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT '0',
  `content` text,
  `reason` text,
  `dreason` text,
  `data` varchar(255) DEFAULT '',
  `fbtime` varchar(255) DEFAULT '',
  `flag` int(11) DEFAULT '0',
  `yn` int(11) DEFAULT '0',
  `dyn` int(11) DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=131 ;

--
-- 导出表中的数据 `huodong_info`
--

INSERT INTO `huodong_info` (`ID`, `VipUser`, `owner`, `mid`, `order_id`, `title`, `medianame`, `weburl`, `price`, `content`, `reason`, `dreason`, `data`, `fbtime`, `flag`, `yn`, `dyn`) VALUES
(129, 'vip01', '', 172, '2013101480749', '活动：购鞋有优惠，不容错过', '腾讯促销活动', '', 83, '活动：购鞋有优惠，不容错过', '特殊原因，取消活动。', '', '2013-10-14 07:52:38', '2013-10-14 08:02:26', 3, 0, 0),
(130, 'vip01', '', 170, '2013101480749', '活动：购鞋有优惠，不容错过', '新浪促销活动', 'http://www.sina.com.cn/', 80, '活动：购鞋有优惠，不容错过', '', '', '2013-10-14 07:52:38', '2013-10-14 08:01:31', 2, 1, 0);

-- --------------------------------------------------------

--
-- 表的结构 `media_class`
--

CREATE TABLE IF NOT EXISTS `media_class` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `BigID` int(11) DEFAULT '0',
  `SmallClass` varchar(255) DEFAULT NULL,
  `enSmallClass` varchar(255) DEFAULT NULL,
  `paixu` int(11) DEFAULT NULL,
  `data` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=72 ;

--
-- 导出表中的数据 `media_class`
--

INSERT INTO `media_class` (`ID`, `BigID`, `SmallClass`, `enSmallClass`, `paixu`, `data`) VALUES
(30, 46, '房产家居', '', 1, '2013-09-18'),
(31, 46, '酒店旅游', '', 2, '2013-09-19'),
(32, 46, '游戏网站', '', 3, '2013-09-19'),
(33, 46, '娱乐明星', '', 4, '2013-09-19'),
(34, 46, '女性时尚', '', 5, '2013-09-19'),
(35, 46, '汽车网站', '', 6, '2013-09-19'),
(36, 46, '新闻资讯', '', 24, '2013-09-19'),
(37, 46, '教育培训', '', 8, '2013-09-19'),
(38, 46, '生活消费', '', 9, '2013-09-19'),
(39, 46, '母婴育儿', '', 10, '2013-09-19'),
(40, 46, '工业农业', '', 11, '2013-09-19'),
(41, 46, '健康医疗', '', 12, '2013-09-19'),
(42, 46, '动漫网站', '', 13, '2013-09-19'),
(43, 46, '文化艺术', '', 14, '2013-09-19'),
(64, 46, '体育网站', NULL, 17, NULL),
(65, 46, '历史频道', NULL, 18, NULL),
(66, 46, '美食餐饮', NULL, 5, NULL),
(69, 46, '法制社会', NULL, 21, NULL),
(68, 46, '微商销售', NULL, 21, NULL),
(70, 46, '企业资讯', NULL, 19, NULL),
(71, 46, '家电行业', NULL, 1, NULL),
(62, 46, 'IT科技', NULL, 0, NULL),
(63, 46, '财经商业', NULL, 0, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `media_info`
--

CREATE TABLE IF NOT EXISTS `media_info` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `VipUser` varchar(255) DEFAULT NULL,
  `sh` int(11) DEFAULT '0',
  `nav_id` int(11) DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL,
  `small_id` int(11) DEFAULT NULL,
  `medianame` text,
  `medialx` varchar(255) DEFAULT NULL,
  `weburl` varchar(255) DEFAULT NULL,
  `anliurl` varchar(255) DEFAULT NULL,
  `linkurl` varchar(255) DEFAULT NULL,
  `xinwenyuan` varchar(255) DEFAULT NULL,
  `zhmh` varchar(255) DEFAULT NULL,
  `diqu` varchar(255) DEFAULT NULL,
  `fans` int(11) DEFAULT '0',
  `price` int(11) DEFAULT '0',
  `dlprice` int(11) DEFAULT '0',
  `scprice` int(11) DEFAULT '0',
  `sccprice` int(11) NOT NULL DEFAULT '0',
  `content` text,
  `neirong` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `data` varchar(255) DEFAULT '',
  `flag` int(11) DEFAULT '0',
  `tj` varchar(255) DEFAULT '../images/stars.gif',
  `tela` text NOT NULL,
  `typefl` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=3 ;

--
-- 导出表中的数据 `media_info`
--

INSERT INTO `media_info` (`ID`, `VipUser`, `sh`, `nav_id`, `class_id`, `small_id`, `medianame`, `medialx`, `weburl`, `anliurl`, `linkurl`, `xinwenyuan`, `zhmh`, `diqu`, `fans`, `price`, `dlprice`, `scprice`, `sccprice`, `content`, `neirong`, `data`, `flag`, `tj`, `tela`, `typefl`) VALUES
(1, '', 1, 46, 35, 0, '一点资讯（车车生活馆）', NULL, 'https://www.yidianzixun.com/channel/m970159?searchword=%E8%BD%A6%E8%BD%A6%E7%94%9F%E6%B4%BB%E9%A6%86', 'https://www.yidianzixun.com/channel/m970159?searchword=%E8%BD%A6%E8%BD%A6%E7%94%9F%E6%B4%BB%E9%A6%86', '不能带网址', '网页收录', '一点号', '全国', 0, 15, 0, 5, 45, '', '', '2018-05-30', 0, '../images/stars.gif', '', '2'),
(2, '', 1, 46, 30, 0, '搜狐汽车', NULL, 'https://www.sohu.com/a/128036875_576947', 'https://www.sohu.com/a/128036875_576947', '不能带网址', '百度新闻源', '搜狐网', '全国', 0, 10, 0, 10, 60, '', '', '2018-05-30', 0, '../images/stars.gif', '', '1');

-- --------------------------------------------------------

--
-- 表的结构 `media_small`
--

CREATE TABLE IF NOT EXISTS `media_small` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `BigClass` varchar(255) DEFAULT NULL,
  `enBigClass` varchar(255) DEFAULT NULL,
  `paixu` int(11) DEFAULT NULL,
  `data` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=50 ;

--
-- 导出表中的数据 `media_small`
--

INSERT INTO `media_small` (`ID`, `BigClass`, `enBigClass`, `paixu`, `data`) VALUES
(46, '今日头条', '', 1, '2017-08-09'),
(47, '一点资讯', '', 2, '2017-08-09'),
(48, '天天快报', '', 3, '2017-08-09'),
(49, '网易客户端', '', 4, '2017-08-09');

-- --------------------------------------------------------

--
-- 表的结构 `menhuhz_info`
--

CREATE TABLE IF NOT EXISTS `menhuhz_info` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `VipUser` varchar(255) DEFAULT NULL,
  `owner` varchar(255) DEFAULT NULL,
  `mid` int(11) DEFAULT '0',
  `order_id` varchar(255) DEFAULT NULL,
  `title` text,
  `medianame` text,
  `weburl` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT '0',
  `content` text,
  `reason` text,
  `dreason` text,
  `data` varchar(255) DEFAULT '',
  `fbtime` varchar(255) DEFAULT '',
  `flag` int(11) DEFAULT '0',
  `yn` int(11) DEFAULT '0',
  `dyn` int(11) DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=131 ;

--
-- 导出表中的数据 `menhuhz_info`
--

INSERT INTO `menhuhz_info` (`ID`, `VipUser`, `owner`, `mid`, `order_id`, `title`, `medianame`, `weburl`, `price`, `content`, `reason`, `dreason`, `data`, `fbtime`, `flag`, `yn`, `dyn`) VALUES
(129, 'vip01', '', 166, '2013101482138', '妙手攒机 宏图三胞网络DIY装机挑战赛即将启动', '新浪小门户', '', 200, '妙手攒机 宏图三胞网络DIY装机挑战赛即将启动', '有敏感性内容，不允许发。', '', '2013-10-14 07:31:09', '2013-10-14 07:41:18', 3, 0, 0),
(130, 'vip01', '', 168, '2013101482138', '妙手攒机 宏图三胞网络DIY装机挑战赛即将启动', '腾讯小门户', 'http://www.qq.com/', 150, '妙手攒机 宏图三胞网络DIY装机挑战赛即将启动', '', '', '2013-10-14 07:31:09', '2013-10-14 07:40:12', 2, 1, 0);

-- --------------------------------------------------------

--
-- 表的结构 `menhu_class`
--

CREATE TABLE IF NOT EXISTS `menhu_class` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `BigClass` varchar(255) DEFAULT NULL,
  `enBigClass` varchar(255) DEFAULT NULL,
  `paixu` int(11) DEFAULT NULL,
  `data` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=120 ;

--
-- 导出表中的数据 `menhu_class`
--

INSERT INTO `menhu_class` (`ID`, `BigClass`, `enBigClass`, `paixu`, `data`) VALUES
(30, '头条号', '', 1, '2018-01-05'),
(31, '一点号', '', 5, '2017-10-21'),
(32, '天天快报', '', 20, '2017-09-04'),
(33, '腾讯客户端', '', 19, '2017-09-04'),
(34, '搜狐媒体', '', 18, '2017-09-04'),
(35, '搜狐客户端', '', 17, '2017-09-04'),
(36, '网易订阅', '', 16, '2017-09-04'),
(37, '网易客户端', '', 15, '2017-09-04'),
(38, '简书', '', 14, '2017-09-04'),
(39, '新浪看点', '', 13, '2017-09-04'),
(40, 'uc头条', '', 12, '2017-09-04'),
(41, '知乎', '', 11, '2017-09-04'),
(42, '时刻头条', '', 10, '2018-01-13'),
(43, '东方财富号', '', 9, '2017-09-04'),
(44, '百家号', '', 8, '2017-09-04'),
(45, '中金在线号', '', 7, '2017-09-04'),
(46, '北京时间', '', 6, '2017-09-04'),
(47, '凤凰客户端', '', 6, '2017-10-21'),
(48, '快传号', '', 4, '2018-01-13'),
(109, '中国直播网', '', 77, '2018-01-06'),
(50, '搜狐焦点', '', 10, '2017-10-21'),
(51, '触电新闻', '', 11, '2017-10-21'),
(53, '东方号', '', 5, '2017-10-21'),
(54, '九派号', '', 5, '2017-10-21'),
(55, '封面号', '', 5, '2017-10-19'),
(91, '中国广播网', '', 61, '2018-01-05'),
(77, '易车号', '', 26, '2017-12-12'),
(78, '买车网专栏', '', 27, '2017-12-12'),
(79, '新浪网', '', 52, '2017-12-12'),
(80, '腾讯网', '', 51, '2017-12-12'),
(81, '搜狐网', '', 53, '2018-01-05'),
(82, '网易', '', 54, '2017-12-12'),
(83, '新浪财经头条', '', 32, '2017-12-13'),
(84, '创头条', '', 33, '2017-12-13'),
(85, '中华网', '', 55, '2018-01-03'),
(86, '中国网', '', 56, '2018-01-05'),
(87, '凤凰网', '', 57, '2018-01-05'),
(88, '中国日报', '', 58, '2018-01-05'),
(89, '中国经济网', '', 59, '2018-01-05'),
(90, '中国新闻网', '', 60, '2018-01-05'),
(92, '国际在线', '', 62, '2018-01-05'),
(93, '人民网', '', 63, '2018-01-05'),
(94, '光明网', '', 64, '2018-01-05'),
(95, '新华网', '', 65, '2018-01-05'),
(96, '慧聪网', '', 66, '2018-01-05'),
(97, '千龙网', '', 67, '2018-01-05'),
(98, '中国青年网', '', 68, '2018-01-05'),
(99, '和讯网', '', 69, '2018-01-05'),
(100, '环球网', '', 70, '2018-01-05'),
(101, '北青网', '', 71, '2018-01-05'),
(102, '中青在线', '', 72, '2018-01-05'),
(103, '央广网', '', 74, '2018-01-05'),
(104, '21CN', '', 73, '2018-01-05'),
(105, '央视网', '', 75, '2018-01-05'),
(106, '趣头条', '', 34, '2018-01-05'),
(107, '艾瑞专栏', '', 35, '2018-01-05'),
(110, '大众网', '', 78, '2018-01-06'),
(111, '东方网', '', 79, '2018-01-08'),
(112, '北方网', '', 80, '2018-01-10'),
(113, '雪球财经', '', 36, '2018-01-15'),
(114, '太平洋汽车（行家号）', '', 37, '2018-01-25'),
(115, '悟空财经', '', 38, '2018-01-25'),
(116, '金色财经', '', 39, '2018-04-03'),
(117, '汽车头条', '', 40, '2018-04-03'),
(118, '同花顺号', '', 40, '2018-04-03'),
(119, '驱动号', '', 37, '2018-04-16');

-- --------------------------------------------------------

--
-- 表的结构 `nav_class`
--

CREATE TABLE IF NOT EXISTS `nav_class` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `BigClass` varchar(255) DEFAULT NULL,
  `enBigClass` varchar(255) DEFAULT NULL,
  `paixu` int(11) DEFAULT NULL,
  `data` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=57 ;

--
-- 导出表中的数据 `nav_class`
--

INSERT INTO `nav_class` (`ID`, `BigClass`, `enBigClass`, `paixu`, `data`) VALUES
(46, '软文发布', '', 1, '2014-02-12');

-- --------------------------------------------------------

--
-- 表的结构 `news_class`
--

CREATE TABLE IF NOT EXISTS `news_class` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `BigClass` varchar(255) DEFAULT NULL,
  `enBigClass` varchar(255) DEFAULT NULL,
  `paixu` int(11) DEFAULT NULL,
  `data` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=34 ;

--
-- 导出表中的数据 `news_class`
--

INSERT INTO `news_class` (`ID`, `BigClass`, `enBigClass`, `paixu`, `data`) VALUES
(28, '最新稿件', '', 1, '2017-06-13'),
(29, '发稿帮助', '', 2, '2013-09-18'),
(31, '软文案例', '', 4, '2018-04-09'),
(32, '软文套餐', '', 5, '2018-04-09'),
(33, '软文课堂', '', 3, '2018-04-09');

-- --------------------------------------------------------

--
-- 表的结构 `news_info`
--

CREATE TABLE IF NOT EXISTS `news_info` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `class_id` int(11) DEFAULT NULL,
  `title` text,
  `entitle` text,
  `nd` int(11) DEFAULT '1',
  `content` text,
  `encontent` text,
  `data` varchar(255) DEFAULT '',
  `tj` int(11) DEFAULT '0',
  `meiti` text NOT NULL,
  `url` text NOT NULL,
  `images` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk AUTO_INCREMENT=1 ;

--
-- 导出表中的数据 `news_info`
--


-- --------------------------------------------------------

--
-- 表的结构 `page_seo`
--

CREATE TABLE IF NOT EXISTS `page_seo` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `BigClass` varchar(255) DEFAULT NULL,
  `enBigClass` varchar(255) DEFAULT NULL,
  `Title` text,
  `enTitle` text,
  `KeyWords` text,
  `enKeyWords` text,
  `Descr` text,
  `enDescr` text,
  `paixu` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=19 ;

--
-- 导出表中的数据 `page_seo`
--

INSERT INTO `page_seo` (`ID`, `BigClass`, `enBigClass`, `Title`, `enTitle`, `KeyWords`, `enKeyWords`, `Descr`, `enDescr`, `paixu`) VALUES
(1, '会员注册', 'reg', '会员注册', '', '会员注册', '', '会员注册', '', 1),
(2, '会员登录', 'login', '会员登录', '', '会员登录', '', '会员登录', '', 2),
(3, '新闻中心', 'news', '新闻中心', '', '新闻中心', '', '新闻中心', '', 3),
(4, '合作媒体', 'media', '合作媒体', '', '合作媒体', '', '合作媒体', '', 4),
(5, '软文案例', 'anli', '成功案例 ', '', '成功案例 ', '', '成功案例 ', '', 5),
(6, '媒体价格', 'price', '媒体价格', '', '媒体价格', '', '媒体价格', '', 6),
(7, '软文套餐', 'taocan', '软文套餐', '', '软文套餐', '', '软文套餐', '', 7),
(8, '软文代写', 'daixie', '软文代写', '', '软文代写', '', '软文代写', '', 8),
(9, '联系我们', 'contact', '联系我们', '', '联系我们', '', '联系我们', '', 9);

-- --------------------------------------------------------

--
-- 表的结构 `piclink_class`
--

CREATE TABLE IF NOT EXISTS `piclink_class` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `BigClass` varchar(255) DEFAULT NULL,
  `enBigClass` varchar(255) DEFAULT NULL,
  `paixu` int(11) DEFAULT NULL,
  `data` varchar(255) DEFAULT NULL,
  `propic` varchar(255) DEFAULT NULL,
  `linkurl` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=48 ;

--
-- 导出表中的数据 `piclink_class`
--


-- --------------------------------------------------------

--
-- 表的结构 `qunfa_info`
--

CREATE TABLE IF NOT EXISTS `qunfa_info` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `VipUser` varchar(255) DEFAULT NULL,
  `owner` varchar(255) DEFAULT NULL,
  `mid` int(11) DEFAULT '0',
  `order_id` varchar(255) DEFAULT NULL,
  `title` text,
  `medianame` text,
  `weburl` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT '0',
  `content` text,
  `reason` text,
  `dreason` text,
  `data` varchar(255) DEFAULT '',
  `fbtime` varchar(255) DEFAULT '',
  `flag` int(11) DEFAULT '0',
  `yn` int(11) DEFAULT '0',
  `dyn` int(11) DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=132 ;

--
-- 导出表中的数据 `qunfa_info`
--

INSERT INTO `qunfa_info` (`ID`, `VipUser`, `owner`, `mid`, `order_id`, `title`, `medianame`, `weburl`, `price`, `content`, `reason`, `dreason`, `data`, `fbtime`, `flag`, `yn`, `dyn`) VALUES
(129, 'vip01', '', 175, '2013101488140', '妙手攒机 宏图三胞网络DIY装机挑战赛即将启动', '新浪微博群发', '', 100, '妙手攒机 宏图三胞网络DIY装机挑战赛即将启动', '', '', '2013-10-14 08:14:33', '', 0, 0, 0),
(130, 'vip01', '', 174, '2013101488140', '妙手攒机 宏图三胞网络DIY装机挑战赛即将启动', '腾讯微博群发', 'http://www.sina.com.cn/', 60, '妙手攒机 宏图三胞网络DIY装机挑战赛即将启动', '', '', '2013-10-14 08:14:33', '2013-10-14 08:27:28', 2, 1, 0),
(131, 'vip01', '', 173, '2013101488140', '妙手攒机 宏图三胞网络DIY装机挑战赛即将启动', '腾讯QQ群发', '', 30, '妙手攒机 宏图三胞网络DIY装机挑战赛即将启动', '腾讯封锁，群发不了。', '', '2013-10-14 08:14:33', '2013-10-14 08:29:04', 3, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `ruanwen_info`
--

CREATE TABLE IF NOT EXISTS `ruanwen_info` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `VipUser` varchar(255) DEFAULT NULL,
  `owner` varchar(255) DEFAULT NULL,
  `mid` int(11) DEFAULT '0',
  `order_id` varchar(255) DEFAULT NULL,
  `title` text,
  `medianame` text,
  `weburl` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT '0',
  `content` text,
  `reason` text,
  `dreason` text,
  `data` varchar(255) DEFAULT '',
  `fbtime` varchar(255) DEFAULT '',
  `flag` int(11) DEFAULT '0',
  `yn` int(11) DEFAULT '0',
  `dyn` int(11) DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=2 ;

--
-- 导出表中的数据 `ruanwen_info`
--

INSERT INTO `ruanwen_info` (`ID`, `VipUser`, `owner`, `mid`, `order_id`, `title`, `medianame`, `weburl`, `price`, `content`, `reason`, `dreason`, `data`, `fbtime`, `flag`, `yn`, `dyn`) VALUES
(1, 'admin', '', 2, '2018053077766', 'r6456455756', '搜狐汽车', NULL, 10, '<p>67657657567567<br/></p>', NULL, NULL, '2018-05-30 09:41:28', '', 0, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `shequ_info`
--

CREATE TABLE IF NOT EXISTS `shequ_info` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `VipUser` varchar(255) DEFAULT NULL,
  `owner` varchar(255) DEFAULT NULL,
  `mid` int(11) DEFAULT '0',
  `order_id` varchar(255) DEFAULT NULL,
  `title` text,
  `medianame` text,
  `weburl` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT '0',
  `content` text,
  `reason` text,
  `dreason` text,
  `data` varchar(255) DEFAULT '',
  `fbtime` varchar(255) DEFAULT '',
  `flag` int(11) DEFAULT '0',
  `yn` int(11) DEFAULT '0',
  `dyn` int(11) DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=131 ;

--
-- 导出表中的数据 `shequ_info`
--

INSERT INTO `shequ_info` (`ID`, `VipUser`, `owner`, `mid`, `order_id`, `title`, `medianame`, `weburl`, `price`, `content`, `reason`, `dreason`, `data`, `fbtime`, `flag`, `yn`, `dyn`) VALUES
(129, 'vip01', '', 154, '2013101498868', '好鞋网：购鞋新选择，低价买好鞋', '腾讯社区', '', 120, '好鞋网：购鞋新选择，低价买好鞋', '内容违规', '', '2013-10-14 05:06:57', '2013-10-14 06:08:49', 3, 0, 0),
(130, 'vip01', '', 153, '2013101498868', '好鞋网：购鞋新选择，低价买好鞋', '新浪社区', 'http://www.345234.com/', 80, '好鞋网：购鞋新选择，低价买好鞋', '', '', '2013-10-14 05:06:57', '2013-10-14 06:07:51', 2, 1, 0);

-- --------------------------------------------------------

--
-- 表的结构 `shuijun_info`
--

CREATE TABLE IF NOT EXISTS `shuijun_info` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `VipUser` varchar(255) DEFAULT NULL,
  `owner` varchar(255) DEFAULT NULL,
  `mid` int(11) DEFAULT '0',
  `order_id` varchar(255) DEFAULT NULL,
  `title` text,
  `medianame` text,
  `weburl` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT '0',
  `content` text,
  `reason` text,
  `dreason` text,
  `data` varchar(255) DEFAULT '',
  `fbtime` varchar(255) DEFAULT '',
  `flag` int(11) DEFAULT '0',
  `yn` int(11) DEFAULT '0',
  `dyn` int(11) DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=131 ;

--
-- 导出表中的数据 `shuijun_info`
--

INSERT INTO `shuijun_info` (`ID`, `VipUser`, `owner`, `mid`, `order_id`, `title`, `medianame`, `weburl`, `price`, `content`, `reason`, `dreason`, `data`, `fbtime`, `flag`, `yn`, `dyn`) VALUES
(129, 'vip01', '', 164, '2013101465014', '代写宣传公司宣传性软文', '腾讯普通水军', '', 120, '代写宣传公司宣传性软文', '内容不符合规定。', '', '2013-10-14 07:07:11', '2013-10-14 07:19:35', 3, 0, 0),
(130, 'vip01', '', 162, '2013101465014', '代写宣传公司宣传性软文', '新浪普通水军', 'http://www.qq.com/', 180, '代写宣传公司宣传性软文', '', '', '2013-10-14 07:07:11', '2013-10-14 07:18:50', 2, 1, 0);

-- --------------------------------------------------------

--
-- 表的结构 `tixian`
--

CREATE TABLE IF NOT EXISTS `tixian` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `VipUser` varchar(255) DEFAULT NULL,
  `order_id` varchar(255) DEFAULT NULL,
  `title` text,
  `accnumber` varchar(255) DEFAULT NULL,
  `jine` int(11) DEFAULT '0',
  `content` text,
  `data` varchar(255) DEFAULT '',
  `edata` varchar(255) DEFAULT NULL,
  `flag` int(11) DEFAULT '0',
  `yn` int(11) DEFAULT '0',
  `dyn` int(11) DEFAULT '0',
  `name` text,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk AUTO_INCREMENT=1 ;

--
-- 导出表中的数据 `tixian`
--


-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `VipUser` varchar(255) DEFAULT NULL,
  `VipPass` varchar(255) DEFAULT NULL,
  `medianame` text,
  `qq` varchar(255) DEFAULT NULL,
  `dianhua` varchar(255) DEFAULT NULL,
  `myemail` varchar(255) DEFAULT NULL,
  `weburl` varchar(255) DEFAULT NULL,
  `flag` int(11) DEFAULT '0',
  `ip` varchar(255) DEFAULT NULL,
  `regtime` varchar(255) DEFAULT NULL,
  `data` varchar(255) DEFAULT NULL,
  `yue` float DEFAULT '0',
  `tyue` float DEFAULT '0',
  `headpic` varchar(255) DEFAULT '../images/headpic.gif',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=2 ;

--
-- 导出表中的数据 `user`
--

INSERT INTO `user` (`ID`, `VipUser`, `VipPass`, `medianame`, `qq`, `dianhua`, `myemail`, `weburl`, `flag`, `ip`, `regtime`, `data`, `yue`, `tyue`, `headpic`) VALUES
(1, 'test', 'e10adc3949ba59abbe56e057f20f883e', NULL, '2435435', '13555555555', '123@qq.com', '个人', 3, '127.0.0.1', '2018-05-30 09:34:41', '2018-05-30 09:34:41', 1000, 0, '../images/headpic.gif');

-- --------------------------------------------------------

--
-- 表的结构 `webinfo`
--

CREATE TABLE IF NOT EXISTS `webinfo` (
  `webID` int(11) NOT NULL AUTO_INCREMENT,
  `webname` varchar(255) DEFAULT NULL,
  `enwebname` varchar(255) DEFAULT NULL,
  `weburl` varchar(255) DEFAULT NULL,
  `icp` varchar(255) DEFAULT NULL,
  `enicp` varchar(255) DEFAULT NULL,
  `cname` varchar(255) DEFAULT NULL,
  `dianhua` varchar(255) DEFAULT NULL,
  `fax` varchar(255) DEFAULT NULL,
  `myemail` varchar(255) DEFAULT NULL,
  `bgtel` varchar(255) DEFAULT NULL,
  `qq` varchar(255) DEFAULT NULL,
  `qyqq` varchar(255) DEFAULT NULL,
  `msn` varchar(255) DEFAULT NULL,
  `mob` varchar(255) DEFAULT NULL,
  `address` text,
  `enaddress` text,
  `gcadd` text,
  `engcadd` text,
  `title` text,
  `entitle` text,
  `keyword` text,
  `enkeyword` text,
  `descr` text,
  `endescr` text,
  `banquan` text,
  `enbanquan` text,
  `about` text,
  `enabout` text,
  PRIMARY KEY (`webID`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=3 ;

--
-- 导出表中的数据 `webinfo`
--

INSERT INTO `webinfo` (`webID`, `webname`, `enwebname`, `weburl`, `icp`, `enicp`, `cname`, `dianhua`, `fax`, `myemail`, `bgtel`, `qq`, `qyqq`, `msn`, `mob`, `address`, `enaddress`, `gcadd`, `engcadd`, `title`, `entitle`, `keyword`, `enkeyword`, `descr`, `endescr`, `banquan`, `enbanquan`, `about`, `enabout`) VALUES
(2, '超级媒介(Www.Cjmjw.Cn)一站式媒体自主投放平台', '', 'http://www.cjmjw.cn', '慈溪市易创信息技术有限公司', '', '王志辉', '0574-63511052', '18368461820', '2385788327@qq.com', '', '2385788327', '', '', '18368461820', '浙江省慈溪市号', '', '', '', '超级媒介(Www.Cjmjw.Cn)品牌推广_新闻稿发布_一站式媒体自主投放平台', '', '软文推广,超级媒介,软文营销,软文发布,自助发稿平台,新闻发稿,新闻稿发布,媒体投放', '', '超级媒介，是您品牌推广好伙伴,隶属于慈溪市易创信息技术有限公司,为企业客户提供全面的网络推广,快速提升企业产品形象和知名度,易创公司拥有国内腾讯、新浪、搜狐、网易等5000多家网络新闻媒体网站资源。', '', '超级媒介(Www.Cjmjw.Cn)一站式媒体自主投放平台', '', '', '');

-- --------------------------------------------------------

--
-- 表的结构 `wyx_info`
--

CREATE TABLE IF NOT EXISTS `wyx_info` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `VipUser` varchar(255) DEFAULT NULL,
  `owner` varchar(255) DEFAULT NULL,
  `mid` int(11) DEFAULT '0',
  `order_id` varchar(255) DEFAULT NULL,
  `title` text,
  `medianame` text,
  `weburl` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT '0',
  `content` text,
  `reason` text,
  `dreason` text,
  `data` varchar(255) DEFAULT '',
  `fbtime` varchar(255) DEFAULT '',
  `flag` int(11) DEFAULT '0',
  `yn` int(11) DEFAULT '0',
  `dyn` int(11) DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=129 ;

--
-- 导出表中的数据 `wyx_info`
--

INSERT INTO `wyx_info` (`ID`, `VipUser`, `owner`, `mid`, `order_id`, `title`, `medianame`, `weburl`, `price`, `content`, `reason`, `dreason`, `data`, `fbtime`, `flag`, `yn`, `dyn`) VALUES
(127, 'vip01', '', 152, '2013101469474', '穿“哈特威”衬衫的男人', '腾讯微信大号03', '', 100, '穿“哈特威”衬衫的男人', '不符合发布条件。', '', '2013-10-14 02:36:20', '2013-10-14 06:07:16', 3, 0, 0),
(128, 'vip01', '', 147, '2013101469474', '穿“哈特威”衬衫的男人', '新浪微博大号01', 'http://www.34423423.com/', 100, '穿“哈特威”衬衫的男人', '', '', '2013-10-14 02:36:20', '2013-10-14 06:06:25', 2, 1, 0);
