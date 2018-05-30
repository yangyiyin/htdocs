#Master8.NET Created
# --------------------------------------------------------


DROP TABLE IF EXISTS about;
CREATE TABLE `about` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `entitle` text,
  `content` text,
  `encontent` text,
  `paixu` int(11) DEFAULT NULL,
  `data` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=gb2312;

INSERT INTO about VALUES('4','��˾���','','<DIV class=\"m_l_div m_l_one small\">\r\n<H2>ƽ̨���</H2>\r\n<P>�������������ƹ�ƽ̨����������ý��1000��ң��վ�����3000ƪ���ϣ�������ҵ�ͻ�5000��ң�רע������Ӫ����</P></DIV>\r\n<DIV class=\"m_l_div m_l_two small\">\r\n<H2>���Ʒ���</H2>\r\n<P>ȫ��������Դ���¡�ֱ����������Ľ����ĺ�����ʽ��ȷ���ͼۡ����١��ȶ��ķ���������ƽ̨��������300��ҡ�</P></DIV>\r\n<DIV class=\"m_l_div m_l_three small\">\r\n<H2>������</H2>\r\n<P>������ע���˺š���ֵ������ã�������޶����лݣ����ύ���������ѡ��ǧ�������ý����ٷ�����</P></DIV>\r\n<DIV class=\"m_l_div m_l_four small\">\r\n<H2>��ҵ����</H2>\r\n<P>�����Ƴ�������Ѳ߻���������¼��ѯ������Ч�����١�����ɾ���ط������Ķ�ʱ�������������Ϊ����Ѷ��ơ�</P></DIV>','','1','2013-09-18');

DROP TABLE IF EXISTS admin;
CREATE TABLE `admin` (
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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=gb2312;

INSERT INTO admin VALUES('1','admin','c33367701511b4f6020ec61ded352059','2245849708','13261853069','2245849708@qq.com','http://www.hongmuchuan.com','1','127.0.0.1','','2014-02-08 11:34:27','868','0','../upload/headpic/1380283488.bmp');

DROP TABLE IF EXISTS anli_class;
CREATE TABLE `anli_class` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `BigClass` varchar(255) DEFAULT NULL,
  `enBigClass` varchar(255) DEFAULT NULL,
  `paixu` int(11) DEFAULT NULL,
  `data` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=gb2312;


DROP TABLE IF EXISTS anli_info;
CREATE TABLE `anli_info` (
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
) ENGINE=MyISAM AUTO_INCREMENT=73 DEFAULT CHARSET=gb2312;


DROP TABLE IF EXISTS appkf_info;
CREATE TABLE `appkf_info` (
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
) ENGINE=MyISAM AUTO_INCREMENT=132 DEFAULT CHARSET=gb2312;

INSERT INTO appkf_info VALUES('129','vip01','','178','2013101493086','��վӦ�ÿ�������','��Ѷ�߼�Ӧ�ÿ���','','230','��վӦ�ÿ�������','','','2013-10-14 08:39:16','','0','0','1');
INSERT INTO appkf_info VALUES('130','vip01','','179','2013101493086','��վӦ�ÿ�������','��Ѷ��ͨӦ�ÿ���','','200','��վӦ�ÿ�������','����ԭ�򣬲���ʵ�֡�','','2013-10-14 08:39:16','2013-10-14 08:48:24','3','0','0');
INSERT INTO appkf_info VALUES('131','vip01','','176','2013101493086','��վӦ�ÿ�������','���˸߼�Ӧ�ÿ���','http://www.sina.com.cn/','80','��վӦ�ÿ�������','','','2013-10-14 08:39:16','2013-10-14 08:47:38','2','1','0');

DROP TABLE IF EXISTS ask_class;
CREATE TABLE `ask_class` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `BigClass` varchar(255) DEFAULT NULL,
  `enBigClass` varchar(255) DEFAULT NULL,
  `paixu` int(11) DEFAULT NULL,
  `data` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=gb2312;

INSERT INTO ask_class VALUES('28','�ѻظ�','','1','2013-09-19');
INSERT INTO ask_class VALUES('29','δ�ظ�','','2','2013-09-19');

DROP TABLE IF EXISTS ask_discuss;
CREATE TABLE `ask_discuss` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `VipUser` varchar(255) DEFAULT NULL,
  `order_id` varchar(255) DEFAULT NULL,
  `recontent` text,
  `data` varchar(255) DEFAULT '',
  `flag` int(11) DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=83 DEFAULT CHARSET=gb2312;

INSERT INTO ask_discuss VALUES('79','admin','13772844834611','�𾴵Ŀͻ���<br />\r\n			���������������⣬�������յ��������ڴ�����...�����ĵȴ����ǵĴ�������лл��','2013-10-02 12:34:48','0');
INSERT INTO ask_discuss VALUES('80','admin','13770231578873','֧����ϵͳ�쳣�����Ե����ԣ�','2013-10-02 01:05:48','0');
INSERT INTO ask_discuss VALUES('81','vip01','13770231578873','�����Ժ����ԣ�лл��','2013-10-02 01:27:15','0');
INSERT INTO ask_discuss VALUES('82','admin','13770231578873','�õģ�����������������Ƿ�����лл�������ǹ�����֧�֡�','2013-10-02 01:30:22','0');

DROP TABLE IF EXISTS ask_info;
CREATE TABLE `ask_info` (
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
) ENGINE=MyISAM AUTO_INCREMENT=74 DEFAULT CHARSET=gb2312;

INSERT INTO ask_info VALUES('67','vip02','13769389137314','��ֵʧ�ܵ��ѿۿ�','<p>��ֵ��ʾʧ�ܣ��������ѿ۵����鷳���ȷ��һ�¡�</p>','','2013-09-19','0','0','0');
INSERT INTO ask_info VALUES('68','vip01','13769389138313','���ķ���ʧ��','<p>��֪����ô���£�ִ���˲���ȴ����ʧ�ܡ�</p>','','2013-09-19','0','0','0');
INSERT INTO ask_info VALUES('69','vip01','13770231578873','���ܳ�ֵ����','<p>Ϊʲôʹ��֧�������ܳ�ֵ��<br/></p>','','2013-09-19','2','1','0');
INSERT INTO ask_info VALUES('70','vip01','13772844834611','������γ�ֵ��','<p>�Ҳ����ֵ��������γ�ֵ��</p>','','2013-09-19','1','0','0');
INSERT INTO ask_info VALUES('71','vip01','1377284727600','��������д���ģ�','<p>������������д���ģ�</p>','','2013-09-19','0','0','0');
INSERT INTO ask_info VALUES('72','admin','2013092282379','������','','','2013-09-22','1','0','0');
INSERT INTO ask_info VALUES('73','vip01','2013092295001','xxxxxxxxx','<p>xxxxxxxxxxxxxxxxx</p>','','2013-09-22','1','0','0');

DROP TABLE IF EXISTS bank_info;
CREATE TABLE `bank_info` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `accnumber` varchar(255) DEFAULT NULL,
  `bankname` varchar(255) DEFAULT NULL,
  `propic` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=gb2312;

INSERT INTO bank_info VALUES('9','������','googlesem@foxmail.com','http://www.alipay.com','../images/yinhang_01.png');
INSERT INTO bank_info VALUES('10','������','5424040420','http://www.tenpay.com','../images/yinhang_02.png');
INSERT INTO bank_info VALUES('11','������','6222021813000778915','�й���������','../images/yinhang_05.png');
INSERT INTO bank_info VALUES('12','������','6227001852510636976','�й���������','../images/yinhang_06.png');
INSERT INTO bank_info VALUES('13','������','6228480031424512718','�й�ũҵ����','../images/yinhang_07.png');
INSERT INTO bank_info VALUES('14','������','370285000668664','�й���������','../images/yinhang_09.png');

DROP TABLE IF EXISTS caiwu;
CREATE TABLE `caiwu` (
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
) ENGINE=MyISAM AUTO_INCREMENT=122 DEFAULT CHARSET=gb2312;

INSERT INTO caiwu VALUES('30','2013090381452','','admin','admin','�˺ų�ֵ','500','1','2013-09-18 03:13:45');
INSERT INTO caiwu VALUES('31','2013090382366','','vip01','admin','�˺Ŵ���ֵ','500','1','2013-09-18 03:13:58');
INSERT INTO caiwu VALUES('32','2013090344848','','vip02','admin','�˺Ŵ���ֵ','500','1','2013-09-18 03:14:07');
INSERT INTO caiwu VALUES('33','2013090353645','','vip03','admin','�˺Ŵ���ֵ','500','1','2013-09-18 03:14:16');
INSERT INTO caiwu VALUES('34','2013092127552','','vip01','vip01','���ķ���','90','3','2013-09-21 04:19:48');
INSERT INTO caiwu VALUES('35','2013092276847','','vip01','vip01','���Ĵ�д','50','3','2013-09-22 09:31:24');
INSERT INTO caiwu VALUES('36','2013092253447','','vip04','admin','�˺Ŵ���ֵ','123','1','2013-09-22 10:11:14');
INSERT INTO caiwu VALUES('37','2013092286023','','vip04','admin','�˺Ŵ���ֵ','100','1','2013-09-22 10:11:30');
INSERT INTO caiwu VALUES('38','2013092259898','','admin','admin','���ķ���','50','3','2013-09-22 10:19:32');
INSERT INTO caiwu VALUES('39','2013092226964','','admin','admin','���ķ���','330','3','2013-09-22 10:20:36');
INSERT INTO caiwu VALUES('40','2013092264938','','admin','admin','�˺ų�ֵ','500','1','2013-09-22 10:21:43');
INSERT INTO caiwu VALUES('41','2013092546232','','vip02','admin','�������','0','6','2013-09-25 04:58:31');
INSERT INTO caiwu VALUES('42','2013092546232','','admin','admin','��������','20','6','2013-09-25 04:58:31');
INSERT INTO caiwu VALUES('43','2013092567219','','vip02','admin','�������','10','6','2013-09-25 08:43:47');
INSERT INTO caiwu VALUES('44','2013092567219','','admin','admin','��������','10','6','2013-09-25 08:43:47');
INSERT INTO caiwu VALUES('45','2013092533365','','vip01','admin','���ľܸ�','70','5','2013-09-25 09:08:34');
INSERT INTO caiwu VALUES('46','2013092579175','','vip01','vip01','���ķ���','60','3','2013-09-25 10:13:37');
INSERT INTO caiwu VALUES('47','2013092631305','','vip01','vip01','���ķ���','60','3','2013-09-26 02:16:24');
INSERT INTO caiwu VALUES('48','2013092753450','','vip01','vip01','����ɾ��','60','5','2013-09-27 03:04:21');
INSERT INTO caiwu VALUES('49','2013092771014','','vip01','vip01','���ķ���','70','3','2013-09-27 04:41:01');
INSERT INTO caiwu VALUES('50','2013092760071','','vip01','vip01','���ķ���','130','3','2013-09-27 04:42:05');
INSERT INTO caiwu VALUES('51','2013092733408','','vip01','vip01','���Ĵ�д','50','3','2013-09-27 04:46:21');
INSERT INTO caiwu VALUES('52','2013092772853','','vip01','vip01','���Ĵ�д','100','3','2013-09-27 04:48:00');
INSERT INTO caiwu VALUES('53','2013092751303','','vip01','admin','�˺Ŵ���ֵ','3000','1','2013-09-27 04:48:56');
INSERT INTO caiwu VALUES('54','2013092732566','','vip01','vip01','���Ĵ�д','150','3','2013-09-27 04:49:23');
INSERT INTO caiwu VALUES('55','2013092773966','','vip02','vip02','���ķ���','120','3','2013-09-27 05:02:00');
INSERT INTO caiwu VALUES('56','2013092747264','','vip04','admin','�˺Ŵ���ֵ','1000','1','2013-09-27 05:09:21');
INSERT INTO caiwu VALUES('57','2013092743109','','vip04','vip04','���Ĵ�д','150','3','2013-09-27 05:09:54');
INSERT INTO caiwu VALUES('58','2013092791343','','vip04','vip04','���ķ���','90','3','2013-09-27 05:10:55');
INSERT INTO caiwu VALUES('59','2013092719345','','vip04','vip04','���ķ���','50','3','2013-09-27 05:11:41');
INSERT INTO caiwu VALUES('60','2013092720431','','vip02','admin','���ľܸ�','70','5','2013-09-27 01:36:58');
INSERT INTO caiwu VALUES('61','2013092768098','','vip02','admin','�������','10','6','2013-09-27 01:38:29');
INSERT INTO caiwu VALUES('62','2013092768098','','admin','admin','��������','60','6','2013-09-27 01:38:29');
INSERT INTO caiwu VALUES('63','2013092861583','','admin','admin','���ķ���','10','3','2013-09-28 02:42:53');
INSERT INTO caiwu VALUES('64','2013092821038','','admin','admin','���ķ���','10','3','2013-09-28 04:08:27');
INSERT INTO caiwu VALUES('65','2013092988285','','admin','admin','�˺ų�ֵ','800','1','2013-09-29 06:05:32');
INSERT INTO caiwu VALUES('66','2013092928468','','vip05','admin','�˺Ŵ���ֵ','800','1','2013-09-29 06:05:51');
INSERT INTO caiwu VALUES('67','2013092957032','','vip05','vip05','���ķ���','380','3','2013-09-29 06:16:42');
INSERT INTO caiwu VALUES('68','2013092910928','','vip05','vip05','���ķ���','220','3','2013-09-29 06:50:01');
INSERT INTO caiwu VALUES('69','2013092923861','','vip05','admin','�˺Ŵ���ֵ','800','1','2013-09-29 07:22:28');
INSERT INTO caiwu VALUES('70','2013092990375','','vip05','vip05','���ķ���','320','3','2013-09-29 07:23:32');
INSERT INTO caiwu VALUES('71','2013092983583','','admin','admin','���ķ���','130','3','2013-09-29 07:45:12');
INSERT INTO caiwu VALUES('72','2013092919654','','admin','admin','���ķ���','130','3','2013-09-29 07:59:32');
INSERT INTO caiwu VALUES('73','2013092971270','','admin','admin','���ķ���','30','3','2013-09-29 08:13:19');
INSERT INTO caiwu VALUES('74','2013092919107','','admin','admin','���ķ���','160','3','2013-09-29 08:19:30');
INSERT INTO caiwu VALUES('75','2013092960067','','vip01','vip01','���ķ���','150','3','2013-09-29 08:32:55');
INSERT INTO caiwu VALUES('76','2013092972166','','admin','admin','���ķ���','130','3','2013-09-29 08:42:24');
INSERT INTO caiwu VALUES('77','2013092937976','','admin','admin','���ķ���','130','3','2013-09-29 08:43:23');
INSERT INTO caiwu VALUES('78','2013092941802','','admin','admin','���ķ���','130','3','2013-09-29 08:46:56');
INSERT INTO caiwu VALUES('79','2013092933453','','vip01','vip01','���ķ���','150','3','2013-09-29 08:47:25');
INSERT INTO caiwu VALUES('80','2013092931071','','vip05','vip05','���ķ���','200','3','2013-09-29 08:48:10');
INSERT INTO caiwu VALUES('81','2013092918517','','admin','admin','���ķ���','160','3','2013-09-29 09:08:55');
INSERT INTO caiwu VALUES('82','2013092946142','','admin','admin','���ķ���','30','3','2013-09-29 09:10:34');
INSERT INTO caiwu VALUES('83','2013092912298','','vip01','vip01','���ķ���','210','3','2013-09-29 09:11:19');
INSERT INTO caiwu VALUES('84','2013092928704','','vip01','vip01','���ķ���','60','3','2013-09-29 09:11:37');
INSERT INTO caiwu VALUES('85','2013092992320','','vip05','vip05','���ķ���','320','3','2013-09-29 09:12:27');
INSERT INTO caiwu VALUES('86','2013092924883','','vip05','vip05','���ķ���','120','3','2013-09-29 09:12:47');
INSERT INTO caiwu VALUES('87','2013092952371','','admin','admin','��������','20','6','2013-09-29 09:27:56');
INSERT INTO caiwu VALUES('88','2013092952080','','vip02','vip02','����ɾ��','50','5','2013-09-29 10:10:00');
INSERT INTO caiwu VALUES('89','2013100174226','','vip01','vip01','���Ĵ�д','50','3','2013-10-01 04:11:06');
INSERT INTO caiwu VALUES('90','2013100147641','','vip01','vip01','��дɾ��','50','5','2013-10-01 04:24:53');
INSERT INTO caiwu VALUES('91','2013100193616','','admin','admin','���Ĵ�д','50','3','2013-10-01 05:22:43');
INSERT INTO caiwu VALUES('92','2013100118080','','vip01','vip01','���Ĵ�д','50','3','2013-10-01 05:36:31');
INSERT INTO caiwu VALUES('93','2013100250844','','vip02','admin','���ֽ��','300','6','2013-10-02 05:50:27');
INSERT INTO caiwu VALUES('94','2013100414328','','admin','admin','��������','-30','6','2013-10-04 07:40:07');
INSERT INTO caiwu VALUES('95','2013100480153','','admin','admin','��������','20','6','2013-10-04 07:50:28');
INSERT INTO caiwu VALUES('96','2013100484775','','admin','admin','��������','70','6','2013-10-04 08:06:12');
INSERT INTO caiwu VALUES('97','2013100438660','','admin','admin','��������','60','6','2013-10-04 08:23:42');
INSERT INTO caiwu VALUES('98','2013101469474','','vip01','vip01','΢Ӫ������','200','3','2013-10-14 02:36:20');
INSERT INTO caiwu VALUES('99','2013101498868','','vip01','vip01','��������','200','3','2013-10-14 05:06:57');
INSERT INTO caiwu VALUES('100','2013101433296','','admin','admin','��������','50','6','2013-10-14 06:06:45');
INSERT INTO caiwu VALUES('101','2013101433384','','admin','admin','��������','30','6','2013-10-14 06:08:08');
INSERT INTO caiwu VALUES('102','2013101419173','','vip01','vip01','��Ա����','250','3','2013-10-14 06:33:44');
INSERT INTO caiwu VALUES('103','2013101437913','','admin','admin','��������','60','6','2013-10-14 06:54:30');
INSERT INTO caiwu VALUES('104','2013101465014','','vip01','vip01','��Ա����','300','3','2013-10-14 07:07:11');
INSERT INTO caiwu VALUES('105','2013101431014','','admin','admin','��������','80','6','2013-10-14 07:19:00');
INSERT INTO caiwu VALUES('106','2013101482138','','vip01','vip01','�Ż���������','350','3','2013-10-14 07:31:09');
INSERT INTO caiwu VALUES('107','2013101438569','','admin','admin','��������','60','6','2013-10-14 07:40:23');
INSERT INTO caiwu VALUES('108','2013101480749','','vip01','vip01','�����','163','3','2013-10-14 07:52:38');
INSERT INTO caiwu VALUES('109','2013101433296','','admin','admin','��������','30','6','2013-10-14 08:01:40');
INSERT INTO caiwu VALUES('110','2013101488140','','vip01','vip01','Ⱥ������','190','3','2013-10-14 08:14:33');
INSERT INTO caiwu VALUES('111','2013101475882','','admin','admin','��������','10','6','2013-10-14 08:27:44');
INSERT INTO caiwu VALUES('112','2013101493086','','vip01','vip01','Ӧ�ÿ�������','510','3','2013-10-14 08:39:16');
INSERT INTO caiwu VALUES('113','2013101492045','','admin','admin','��������','50','6','2013-10-14 08:47:49');
INSERT INTO caiwu VALUES('114','2013101499409','','vip01','vip01','Ӧ�ÿ���ɾ��','230','5','2013-10-14 08:49:17');
INSERT INTO caiwu VALUES('115','2013101649811','','vip02','admin','�˺Ŵ���ֵ','500','1','2013-10-16 05:08:17');
INSERT INTO caiwu VALUES('116','2013101628355','','vip02','admin','���ֽ��','100','6','2013-10-16 05:29:40');
INSERT INTO caiwu VALUES('117','2013101615427','','vip02','admin','���ֽ��','100','6','2013-10-16 05:34:34');
INSERT INTO caiwu VALUES('118','2013101616726','','vip02','admin','���ֽ��','500','6','2013-10-16 05:52:57');
INSERT INTO caiwu VALUES('119','2014012178334','','admin','admin','���ķ���','30','3','2014-01-21 07:49:44');
INSERT INTO caiwu VALUES('120','2014012190527','','admin','admin','���ķ���','30','3','2014-01-21 08:13:51');
INSERT INTO caiwu VALUES('121','2014072260210','','admin','admin','�˺ų�ֵ','8','1','2014-07-22 15:32:12');

DROP TABLE IF EXISTS contact;
CREATE TABLE `contact` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `entitle` text,
  `content` text,
  `encontent` text,
  `paixu` int(11) DEFAULT NULL,
  `data` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=gb2312;

INSERT INTO contact VALUES('5','��ϵ����','','<P><STRONG><FONT style=\"FONT-SIZE: 16pt\">��ϵ��ʽ�� </FONT></STRONG></P>\r\n<P>��˾�绰��4000020172 </P>\r\n<P>��ҵ Q Q��800023525 </P>\r\n<P>����Q Q��775925816 </P>\r\n<P>��˾���䣺775925816@qq.com </P>\r\n<P>��ϵ�ˣ�������</P>','','1','2013-09-18');

DROP TABLE IF EXISTS daixie_discuss;
CREATE TABLE `daixie_discuss` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `VipUser` varchar(255) DEFAULT NULL,
  `order_id` varchar(255) DEFAULT NULL,
  `recontent` text,
  `data` varchar(255) DEFAULT '',
  `flag` int(11) DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=84 DEFAULT CHARSET=gb2312;

INSERT INTO daixie_discuss VALUES('79','vip01','2013092276847','Ҫ���Ѹ��£������¿�Ҫ��','2013-10-01 09:02:21','0');
INSERT INTO daixie_discuss VALUES('80','vip01','2013092276847','���Ҫ�����ٴ��޸ģ���鿴��','2013-10-02 03:51:48','0');
INSERT INTO daixie_discuss VALUES('81','admin','2013092276847','�Ѿ���Ҫ���ٴ������޸ģ������ġ�','2013-10-02 06:57:07','0');
INSERT INTO daixie_discuss VALUES('82','vip01','2013092276847','�����ͻ����Ʒ�����㡣','2013-10-02 07:06:44','0');
INSERT INTO daixie_discuss VALUES('83','admin','2013092276847','����ϸ˵һ�����ǹ�˾�Ĳ�Ʒ��ʲô������','2013-10-02 07:25:26','0');

DROP TABLE IF EXISTS daixie_info;
CREATE TABLE `daixie_info` (
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
) ENGINE=MyISAM AUTO_INCREMENT=82 DEFAULT CHARSET=gb2312;

INSERT INTO daixie_info VALUES('74','vip01','2013092276847','��Ь������Ь��ѡ�񣬵ͼ����Ь','1','50','<p>1���ƹ���󣺺�Ь��<br />\r\n2��������ã�����<br />\r\n3�����±��⣺����<br />\r\n4������Ҫ�㣺������Ь���Ĳ�Ʒ�۵ͣ�������Ʒ�ʺá�<br />\r\n5������Ҫ��<br />\r\n5�����İ�����û��<br />\r\n�����ṩһƪ����Ϊ������������Ӹ����ǣ������ǵ�д��������вο����ã�д��������Ҳ�ܱȽϴﵽ��Ԥ�ڵ�Ҫ��</p>','<p><span style=\"color:#444444;font-family:??????;font-size:medium;background-color:#ffffff;\">���������ṩһƪ����Ϊ������������Ӹ����ǣ������ǵ�д��������вο����ã�д��������Ҳ�ܱȽϴﵽ��Ԥ�ڵ�Ҫ��<span style=\"color:#444444;font-family:??????;font-size:medium;background-color:#ffffff;\">�����ṩһƪ����Ϊ������������Ӹ����ǣ������ǵ�д��������вο����ã�д��������Ҳ�ܱȽϴﵽ��Ԥ�ڵ�Ҫ��</span></span></p>\r\n<p><span style=\"color:#444444;font-family:??????;font-size:medium;background-color:#ffffff;\"><span style=\"color:#444444;font-family:??????;font-size:medium;background-color:#ffffff;\"><span style=\"color:#444444;font-family:??????;font-size:medium;background-color:#ffffff;\">���������ṩһƪ����Ϊ������������Ӹ����ǣ������ǵ�д��������вο����ã�д��������Ҳ�ܱȽϴﵽ��Ԥ�ڵ�Ҫ��<span style=\"color:#444444;font-family:??????;font-size:medium;background-color:#ffffff;\">�����ṩһƪ����Ϊ������������Ӹ����ǣ������ǵ�д��������вο����ã�д��������Ҳ�ܱȽϴﵽ��Ԥ�ڵ�Ҫ��</span></span></span></span></p>\r\n<p><span style=\"color:#444444;font-family:??????;font-size:medium;background-color:#ffffff;\"><span style=\"color:#444444;font-family:??????;font-size:medium;background-color:#ffffff;\"><span style=\"color:#444444;font-family:??????;font-size:medium;background-color:#ffffff;\"><span style=\"color:#444444;font-family:??????;font-size:medium;background-color:#ffffff;\"><span style=\"color:#444444;font-family:??????;font-size:medium;background-color:#ffffff;\">���������ṩһƪ����Ϊ������������Ӹ����ǣ������ǵ�д��������вο����ã�д��������Ҳ�ܱȽϴﵽ��Ԥ�ڵ�Ҫ��<span style=\"color:#444444;font-family:??????;font-size:medium;background-color:#ffffff;\">�����ṩһƪ����Ϊ������������Ӹ����ǣ������ǵ�д��������вο����ã�д��������Ҳ�ܱȽϴﵽ��Ԥ�ڵ�Ҫ��</span></span></span></span></span></span></p>\r\n<p><span style=\"color:#444444;font-family:??????;font-size:medium;background-color:#ffffff;\"><span style=\"color:#444444;font-family:??????;font-size:medium;background-color:#ffffff;\"><span style=\"color:#444444;font-family:??????;font-size:medium;background-color:#ffffff;\"><span style=\"color:#444444;font-family:??????;font-size:medium;background-color:#ffffff;\"><span style=\"color:#444444;font-family:??????;font-size:medium;background-color:#ffffff;\"><span style=\"color:#444444;font-family:??????;font-size:medium;background-color:#ffffff;\"><span style=\"color:#444444;font-family:??????;font-size:medium;background-color:#ffffff;\">���������ṩһƪ����Ϊ������������Ӹ����ǣ������ǵ�д��������вο����ã�д��������Ҳ�ܱȽϴﵽ��Ԥ�ڵ�Ҫ��<span style=\"color:#444444;font-family:??????;font-size:medium;background-color:#ffffff;\">�����ṩһƪ����Ϊ������������Ӹ����ǣ������ǵ�д��������вο����ã�д��������Ҳ�ܱȽϴﵽ��Ԥ�ڵ�Ҫ��</span></span></span></span></span></span></span></span></p>','2013-09-22 09:31:24','3','0','0');
INSERT INTO daixie_info VALUES('75','vip01','2013092733408','haohaod ','1','50','<p>1���ƹ����<br/>2��������ã�<br/>3�����±��⣺<br/>4������Ҫ�㣺<br/>5������Ҫ��<br/>5�����İ�����<br/>�����ṩһƪ����Ϊ������������Ӹ����ǣ������ǵ�д��������вο����ã�д��������Ҳ�ܱȽϴﵽ��Ԥ�ڵ�Ҫ��<br/></p>','','2013-09-27 04:46:21','4','0','0');
INSERT INTO daixie_info VALUES('76','vip01','2013092772853','kkkk','2','100','<p>1���ƹ����<br/>2��������ã�<br/>3�����±��⣺<br/>4������Ҫ�㣺<br/>5������Ҫ��<br/>5�����İ�����<br/>�����ṩһƪ����Ϊ������������Ӹ����ǣ������ǵ�д��������вο����ã�д��������Ҳ�ܱȽϴﵽ��Ԥ�ڵ�Ҫ��<br/></p>','','2013-09-27 04:48:00','1','0','0');
INSERT INTO daixie_info VALUES('77','vip01','2013092732566','dafgadsg','3','150','<p>1���ƹ����<br/>2��������ã�<br/>3�����±��⣺<br/>4������Ҫ�㣺<br/>5������Ҫ��<br/>5�����İ�����<br/>�����ṩһƪ����Ϊ������������Ӹ����ǣ������ǵ�д��������вο����ã�д��������Ҳ�ܱȽϴﵽ��Ԥ�ڵ�Ҫ��<br/></p>','','2013-09-27 04:49:23','5','0','0');
INSERT INTO daixie_info VALUES('78','vip04','2013092743109','test it','3','150','<p>1���ƹ����<br/>2��������ã�<br/>3�����±��⣺<br/>4������Ҫ�㣺<br/>5������Ҫ��<br/>5�����İ�����<br/>�����ṩһƪ����Ϊ������������Ӹ����ǣ������ǵ�д��������вο����ã�д��������Ҳ�ܱȽϴﵽ��Ԥ�ڵ�Ҫ��<br/></p>','<p style=\"padding:0px;margin-bottom:10px;line-height:25px;text-indent:2em;color:#444444;font-size:14px;font-family:??????;-webkit-text-size-adjust:none;\">����������������ڿ�ʼ��ᵽ��һ�׺õ���װ������һ���������������۳����ٻ�������Ч����ʵ����һ���޴����¡����������ײ����Ⱥ�У���������</p>\r\n<p style=\"padding:0px;margin-bottom:10px;line-height:25px;text-indent:2em;color:#444444;font-size:14px;font-family:??????;-webkit-text-size-adjust:none;\">�����������Ϳ�ʼ�����ˡ�</p>\r\n<p style=\"padding:0px;margin-bottom:10px;line-height:25px;text-indent:2em;color:#444444;font-size:14px;font-family:??????;-webkit-text-size-adjust:none;\"><br style=\"padding:0px;margin:0px auto;\" />\r\n</p>\r\n<p style=\"padding:0px;margin-bottom:10px;line-height:25px;text-indent:2em;color:#444444;font-size:14px;font-family:??????;-webkit-text-size-adjust:none;\">�������ȣ����������������ʹ��Լ���??���Ƕ�������ˡ���Σ���Ϊ����������</p>\r\n<p style=\"padding:0px;margin-bottom:10px;line-height:25px;text-indent:2em;color:#444444;font-size:14px;font-family:??????;-webkit-text-size-adjust:none;\">��������??��б�ȼ���Ϊ�˿Ͷ��Ƶġ�??���죬ʹ���������������ᡢ���߹�</p>\r\n<p style=\"padding:0px;margin-bottom:10px;line-height:25px;text-indent:2em;color:#444444;font-size:14px;font-family:??????;-webkit-text-size-adjust:none;\">�����������²�ϧ�����ļ��ã����ʹ����Ϊ�����ʡ���</p>\r\n<p style=\"padding:0px;margin-bottom:10px;line-height:25px;text-indent:2em;color:#444444;font-size:14px;font-family:??????;-webkit-text-size-adjust:none;\"><br style=\"padding:0px;margin:0px auto;\" />\r\n</p>\r\n<p style=\"padding:0px;margin-bottom:10px;line-height:25px;text-indent:2em;color:#444444;font-size:14px;font-family:??????;-webkit-text-size-adjust:none;\">�����°ںܳ������������Ŀ�����ť����������ĸ����??�ǳ���Ҳ�ǳ���������</p>\r\n<p style=\"padding:0px;margin-bottom:10px;line-height:25px;text-indent:2em;color:#444444;font-size:14px;font-family:??????;-webkit-text-size-adjust:none;\">����������������Ҳ������һ���ϱ�ս��ǰ�ĸ��š�</p>\r\n<p style=\"padding:0px;margin-bottom:10px;line-height:25px;text-indent:2em;color:#444444;font-size:14px;font-family:??????;-webkit-text-size-adjust:none;\"><br style=\"padding:0px;margin:0px auto;\" />\r\n</p>\r\n<p style=\"padding:0px;margin-bottom:10px;line-height:25px;text-indent:2em;color:#444444;font-size:14px;font-family:??????;-webkit-text-size-adjust:none;\">��������Ҫ���ǡ���������ʹ�ô������������ڵ��������Ĳ�ƥ���������ǵĳ���</p>\r\n<p style=\"padding:0px;margin-bottom:10px;line-height:25px;text-indent:2em;color:#444444;font-size:14px;font-family:??????;-webkit-text-size-adjust:none;\">����??��Ӣ��������ë��ĵ�б�Ʋ������ո�����˹�����µط�����ë֯���Ƴ�</p>\r\n<p style=\"padding:0px;margin-bottom:10px;line-height:25px;text-indent:2em;color:#444444;font-size:14px;font-family:??????;-webkit-text-size-adjust:none;\">������Ӣ����ӡ��Ⱥ�����ĺ����ޣ���ӡ��������֯�񣬴�Ӣ��������˹�����Ŀ��</p>\r\n<p style=\"padding:0px;margin-bottom:10px;line-height:25px;text-indent:2em;color:#444444;font-size:14px;font-family:??????;-webkit-text-size-adjust:none;\">����ϸë�����Ӱ�����������ϸ�����ڴ�����ô�������ĳ�������ʹ���õ��ڶ��</p>\r\n<p style=\"padding:0px;margin-bottom:10px;line-height:25px;text-indent:2em;color:#444444;font-size:14px;font-family:??????;-webkit-text-size-adjust:none;\">�����������㡣</p>\r\n<p style=\"padding:0px;margin-bottom:10px;line-height:25px;text-indent:2em;color:#444444;font-size:14px;font-family:??????;-webkit-text-size-adjust:none;\"><br style=\"padding:0px;margin:0px auto;\" />\r\n</p>\r\n<p style=\"padding:0px;margin-bottom:10px;line-height:25px;text-indent:2em;color:#444444;font-size:14px;font-family:??????;-webkit-text-size-adjust:none;\">�������������������������ݵ�С����������һ��С��˾���ϵ������������Ƶġ�</p>\r\n<p style=\"padding:0px;margin-bottom:10px;line-height:25px;text-indent:2em;color:#444444;font-size:14px;font-family:??????;-webkit-text-size-adjust:none;\">������������СС�������﹤����������114�ꡣ</p>\r\n<p style=\"padding:0px;margin-bottom:10px;line-height:25px;text-indent:2em;color:#444444;font-size:14px;font-family:??????;-webkit-text-size-adjust:none;\"><br style=\"padding:0px;margin:0px auto;\" />\r\n</p>\r\n<p style=\"padding:0px;margin-bottom:10px;line-height:25px;text-indent:2em;color:#444444;font-size:14px;font-family:??????;-webkit-text-size-adjust:none;\">���������������������ĵ���򵽡�����������������д������Ƭ����G?F?����</p>\r\n<p style=\"padding:0px;margin-bottom:10px;line-height:25px;text-indent:2em;color:#444444;font-size:14px;font-family:??????;-webkit-text-size-adjust:none;\">��������������?�������ǣ�������</p>','2013-09-27 05:09:54','2','0','0');
INSERT INTO daixie_info VALUES('79','vip01','2013100174226','��д����������������������','1','50','1���ƹ���󣺡�������������<br />\r\n2��������ã�����<br />\r\n3�����±��⣺����<br />\r\n4������Ҫ�㣺<br />\r\n5������Ҫ��<br />\r\n5�����İ�����<br />\r\n�����ṩһƪ����Ϊ������������Ӹ����ǣ������ǵ�д��������вο����ã�д��������Ҳ�ܱȽϴﵽ��Ԥ�ڵ�Ҫ��<br />','','2013-10-01 04:11:06','0','0','1');
INSERT INTO daixie_info VALUES('80','admin','2013100193616','��д������˾����������','1','50','1���ƹ����<br />\r\n2��������ã�<br />\r\n3�����±��⣺<br />\r\n4������Ҫ�㣺<br />\r\n5������Ҫ��<br />\r\n5�����İ�����<br />\r\n�����ṩһƪ����Ϊ������������Ӹ����ǣ������ǵ�д��������вο����ã�д��������Ҳ�ܱȽϴﵽ��Ԥ�ڵ�Ҫ��<br />','','2013-10-01 05:22:43','0','0','0');
INSERT INTO daixie_info VALUES('81','vip01','2013100118080','��д��ľ����˾����������','1','50','1���ƹ���󣺺�ľ����˾<br />\r\n2��������ã�����<br />\r\n3�����±��⣺����<br />\r\n4������Ҫ�㣺<br />\r\n5������Ҫ��<br />\r\n5�����İ�����<br />\r\n�����ṩһƪ����Ϊ������������Ӹ����ǣ������ǵ�д��������вο����ã�д��������Ҳ�ܱȽϴﵽ��Ԥ�ڵ�Ҫ��<br />','','2013-10-01 05:36:31','0','0','0');

DROP TABLE IF EXISTS diqu_class;
CREATE TABLE `diqu_class` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `BigClass` varchar(255) DEFAULT NULL,
  `enBigClass` varchar(255) DEFAULT NULL,
  `paixu` int(11) DEFAULT NULL,
  `data` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=gb2312;

INSERT INTO diqu_class VALUES('30','����','','1','2013-09-18');
INSERT INTO diqu_class VALUES('31','�Ϻ�','','2','2013-09-18');
INSERT INTO diqu_class VALUES('32','�㶫','','3','2013-09-18');
INSERT INTO diqu_class VALUES('33','�㽭','','4','2013-09-18');
INSERT INTO diqu_class VALUES('34','���','','5','2013-09-18');
INSERT INTO diqu_class VALUES('35','����','','6','2013-09-18');
INSERT INTO diqu_class VALUES('36','����','','7','2013-09-18');
INSERT INTO diqu_class VALUES('37','����','','8','2013-09-18');
INSERT INTO diqu_class VALUES('38','�ӱ�','','9','2013-09-18');
INSERT INTO diqu_class VALUES('39','����','','10','2013-09-18');
INSERT INTO diqu_class VALUES('40','����','','11','2013-09-18');
INSERT INTO diqu_class VALUES('41','ɽ��','','12','2013-09-18');
INSERT INTO diqu_class VALUES('42','����','','13','2013-09-18');
INSERT INTO diqu_class VALUES('43','����','','14','2013-09-18');
INSERT INTO diqu_class VALUES('44','�Ĵ�','','15','2013-09-18');
INSERT INTO diqu_class VALUES('45','����','','16','2013-09-18');
INSERT INTO diqu_class VALUES('46','����','','17','2013-09-18');
INSERT INTO diqu_class VALUES('47','����','','18','2013-09-18');
INSERT INTO diqu_class VALUES('48','�ຣ','','19','2013-09-18');
INSERT INTO diqu_class VALUES('49','����','','20','2013-09-18');
INSERT INTO diqu_class VALUES('50','����','','21','2013-09-18');
INSERT INTO diqu_class VALUES('51','����','','22','2013-09-18');
INSERT INTO diqu_class VALUES('52','��������','','23','2013-09-18');

DROP TABLE IF EXISTS huiyuan_info;
CREATE TABLE `huiyuan_info` (
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
) ENGINE=MyISAM AUTO_INCREMENT=131 DEFAULT CHARSET=gb2312;

INSERT INTO huiyuan_info VALUES('129','vip01','','158','2013101419173','��д��������','������ͨ��Ա','','100','��д��������','Υ�����ݡ�','','2013-10-14 06:33:44','2013-10-14 06:54:57','3','0','0');
INSERT INTO huiyuan_info VALUES('130','vip01','','160','2013101419173','��д��������','��Ѷ��ͨ��Ա','http://www.qq.com/','150','��д��������','','','2013-10-14 06:33:44','2013-10-14 06:54:14','2','1','0');

DROP TABLE IF EXISTS huodong_info;
CREATE TABLE `huodong_info` (
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
) ENGINE=MyISAM AUTO_INCREMENT=131 DEFAULT CHARSET=gb2312;

INSERT INTO huodong_info VALUES('129','vip01','','172','2013101480749','�����Ь���Żݣ����ݴ��','��Ѷ�����','','83','�����Ь���Żݣ����ݴ��','����ԭ��ȡ�����','','2013-10-14 07:52:38','2013-10-14 08:02:26','3','0','0');
INSERT INTO huodong_info VALUES('130','vip01','','170','2013101480749','�����Ь���Żݣ����ݴ��','���˴����','http://www.sina.com.cn/','80','�����Ь���Żݣ����ݴ��','','','2013-10-14 07:52:38','2013-10-14 08:01:31','2','1','0');

DROP TABLE IF EXISTS media_class;
CREATE TABLE `media_class` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `BigID` int(11) DEFAULT '0',
  `SmallClass` varchar(255) DEFAULT NULL,
  `enSmallClass` varchar(255) DEFAULT NULL,
  `paixu` int(11) DEFAULT NULL,
  `data` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=62 DEFAULT CHARSET=gb2312;

INSERT INTO media_class VALUES('30','46','��ҵó��','','1','2013-09-18');
INSERT INTO media_class VALUES('31','46','��������','','2','2013-09-19');
INSERT INTO media_class VALUES('32','46','Ů��ʱ��','','3','2013-09-19');
INSERT INTO media_class VALUES('33','46','��������','','4','2013-09-19');
INSERT INTO media_class VALUES('34','46','��Ϸ��վ','','5','2013-09-19');
INSERT INTO media_class VALUES('35','46','������վ','','6','2013-09-19');
INSERT INTO media_class VALUES('36','46','������ѵ','','7','2013-09-19');
INSERT INTO media_class VALUES('37','46','�Ƶ�����','','8','2013-09-19');
INSERT INTO media_class VALUES('38','46','����ҽ��','','9','2013-09-19');
INSERT INTO media_class VALUES('39','46','�����Ҿ�','','10','2013-09-19');
INSERT INTO media_class VALUES('40','46','�ƾ���ҵ','','11','2013-09-19');
INSERT INTO media_class VALUES('41','46','������Ѷ','','12','2013-09-19');
INSERT INTO media_class VALUES('42','46','IT-�Ƽ�','','13','2013-09-19');
INSERT INTO media_class VALUES('43','46','�ײ�ϵ��','','14','2013-09-19');
INSERT INTO media_class VALUES('44','46','������ɱ','','15','2013-09-19');
INSERT INTO media_class VALUES('45','46','ʮԪר��','','16','2013-09-19');
INSERT INTO media_class VALUES('46','47','΢��Ӫ��','','17','');
INSERT INTO media_class VALUES('47','47','΢��Ӫ��','','18','');
INSERT INTO media_class VALUES('48','48','������','','19','');
INSERT INTO media_class VALUES('49','48','С����','','20','');
INSERT INTO media_class VALUES('50','49','�߼���Ա','','21','');
INSERT INTO media_class VALUES('51','49','��ͨ��Ա','','22','');
INSERT INTO media_class VALUES('52','50','�߼�ˮ��','','23','');
INSERT INTO media_class VALUES('53','50','��ͨˮ��','','24','');
INSERT INTO media_class VALUES('54','51','���Ż�','','25','');
INSERT INTO media_class VALUES('55','51','С�Ż�','','26','');
INSERT INTO media_class VALUES('56','52','�Żݻ','','27','');
INSERT INTO media_class VALUES('57','52','�����','','28','');
INSERT INTO media_class VALUES('58','53','QQȺ��','','29','');
INSERT INTO media_class VALUES('59','53','΢��Ⱥ��','','30','');
INSERT INTO media_class VALUES('60','54','�߼�Ӧ�ÿ���','','31','');
INSERT INTO media_class VALUES('61','54','��ͨӦ�ÿ���','','32','');

DROP TABLE IF EXISTS media_info;
CREATE TABLE `media_info` (
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
  `content` text,
  `neirong` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `data` varchar(255) DEFAULT '',
  `flag` int(11) DEFAULT '0',
  `tj` varchar(255) DEFAULT '../images/stars.gif',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=181 DEFAULT CHARSET=gb2312;

INSERT INTO media_info VALUES('73','','1','46','30','0','�й���-����','','http://minqi.china.com.cn/','http://minqi.china.com.cn/','�ɴ���ַ','������Դ','�й���','��������','0','130','50','10','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('74','','1','46','30','0','�й���','','http://news.workercn.cn/','http://news.workercn.cn/','�ɴ���ַ','�ٶ�����Դ',' ','��������','0','150','50','10','','','2013-09-18','0','../images/stars.gif');
INSERT INTO media_info VALUES('75','','1','46','30','0','�й���̼��','','http://www.ditan360.com/','http://www.ditan360.com/','�ɴ���ַ','�ٶ�����Դ','','��������','0','150','80','70','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('76','','1','46','30','0','�й����Ĳɹ���','','http://www.jiancai365.cn/','http://www.jiancai365.cn/','�ɴ���ַ','������Դ','','��������','0','220','100','10','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('77','','1','46','30','0','�й�����װ����','','http://www.ccd.com.cn/','http://www.ccd.com.cn/','�ɴ���ַ','�ٶ�����Դ','','��������','0','180','70','10','','','2013-09-02','0','../images/stars.gif');
INSERT INTO media_info VALUES('78','','1','46','30','0','�ر���','','http://www.tiboo.cn/','http://www.tiboo.cn/','�ɴ���ַ','������Դ','','��������','0','170','80','10','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('79','','1','46','30','0','�й��ҵ���','','http://www.cheaa.com/','http://www.cheaa.com/','�ɴ���ַ','�ٶ�����Դ',' ','��������','0','170','80','10','','','2013-09-18','0','../images/stars.gif');
INSERT INTO media_info VALUES('80','','1','46','30','0','�л�������','','http://www.chinachugui.com/','http://www.chinachugui.com/','�ɴ���ַ','������Դ','','��������','0','180','80','10','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('81','','1','46','30','0','���繤����','','http://ch.gongchang.com/','http://ch.gongchang.com/','�ı�����','������Դ','','��������','0','150','70','10','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('82','','1','46','30','0','�й���ҵ��','','http://www.ecgoods.com/','http://www.ecgoods.com/','�ı�����','������Դ','','��������','0','130','60','10','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('83','','1','46','31','0','������-����','','http://life.lyd.com.cn/','http://life.lyd.com.cn/system/2013/01/21/010223640.shtml','�ɴ���ַ','������Դ','','��������','0','130','20','10','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('84','','1','46','31','0','�й�������-����','','http://www.youth.cn/','http://www.youth.cn/mscj/sh/jdxw/201307/t20130717_3546744.htm','�ɴ���ַ','������Դ','','��������','0','150','70','10','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('85','','1','46','31','0','������-����','','http://life.eastday.com/','http://life.eastday.com/eastday/dfsh/node719470/node719472/u1a7441643.html','���ܴ���ַ','������Դ','','��������','0','130','60','10','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('86','','1','46','31','0','��������','','http://life.cyol.com/','http://life.cyol.com/content/2013-07/10/content_8695409.htm','�ı�����','�ٶ�����Դ',' ','��������','0','180','80','10','','','2013-09-18','0','../images/stars.gif');
INSERT INTO media_info VALUES('87','','1','46','31','0','�ִ�������','','http://www.xdxfdb.com/','http://www.xdxfdb.com/html/2013/0711/55172.shtml','�ı�����','������Դ','','��������','0','120','60','10','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('88','','1','46','31','0','�й��㲥��-����','','http://www.cnr.cn/','http://www.cnr.cn/kfqpd/sp/201305/t20130527_512677831.shtml','�ı�����','������Դ','','��������','0','100','50','10','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('89','','1','46','31','0','�й��ձ���-����','','http://xf.chinadaily.com.cn/','http://xf.chinadaily.com.cn/html/2013/0701/11285.shtml','�ı�����','������Դ','�й��ձ���','��������','0','90','45','10','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('90','','1','46','31','0','�й��ձ���-����','','http://www.wschina.com.cn/','http://www.wschina.com.cn/2012/1119/106858.shtml','�ı�����','������Դ','�й��ձ���','��������','0','100','50','10','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('91','','1','46','31','0','�й��ձ���-ʳƷ','','http://sp.chinadaily.com.cn/','http://sp.chinadaily.com.cn/info/20130123/97366.html','�ı�����','������Դ','�й��ձ���','��������','0','120','60','10','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('92','','1','46','31','0','�й���-����','','http://live.china.com.cn/','http://live.china.com.cn/2013-01/18/content_5681423.htm','�ɴ���ַ','������Դ','�й���','��������','0','120','70','10','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('93','','1','46','32','0','�����-ʱ��','','http://life.lyd.com.cn/','http://life.lyd.com.cn/system/2013/01/21/010223640.shtml','�ı�����','�ٶ�����Դ','�����','��������','0','130','20','10','','','2013-09-21','0','../images/stars5.gif');
INSERT INTO media_info VALUES('94','','1','46','32','0','TOM-����','','http://post.lady.tom.com/','http://post.lady.tom.com/s/FD000AB33449.html','�ı�����','������Դ','TOM��','��������','0','100','50','10','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('95','','1','46','32','46','�й�������-ʱ��','','http://fashion.ce.cn/','http://fashion.ce.cn/','�ɴ���ַ','������Դ','','��������','0','150','70','10','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('96','','1','46','32','0','�й���װ��','','http://www.efu.com.cn/','http://www.efu.com.cn/','�ɳ�����','�ȸ�����Դ','','����','0','170','70','10','<p>����ʹ��</p>','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('97','','1','46','32','0','Ʒ������','','http://biz.ppsj.com.cn/','http://biz.ppsj.com.cn/2009-8-22/1918862341.html','�ɴ���ַ','�ٶ�����Դ',' ','��������','0','150','70','10','','','2013-09-18','0','../images/stars.gif');
INSERT INTO media_info VALUES('98','','1','46','32','0','�й������','','http://www.zaojiao.com/','http://www.zaojiao.com/','�ɴ���ַ','������Դ','','��������','0','160','80','10','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('99','','1','46','32','0','��ĸ��','','http://www.fumu.com/','http://www.fumu.com/','�ɴ���ַ','������Դ','','��������','0','160','80','10','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('100','','1','46','32','0','�й�������','','http://www.5721.net/','http://www.5721.net/','�ɴ���ַ','������Դ','','��������','0','150','80','10','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('101','','1','46','32','0','������-����','','http://www.rayli.com.cn/baby/','http://www.rayli.com.cn/baby/','�ɴ���ַ','������Դ','','��������','0','180','90','10','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('102','','1','46','32','0','���ױ�����','','http://www.qbaobei.com/','http://www.qbaobei.com/','�ɴ���ַ','������Դ','','��������','0','190','90','10','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('103','','1','46','33','0','TOM-����','','http://post.sports.tom.com/','http://post.sports.tom.com/s/520009516186.html','�ı�����','�ٶ�����Դ','TOM��','��������','0','100','50','10','','','2013-09-18','0','../images/stars.gif');
INSERT INTO media_info VALUES('104','','1','46','33','0','TOM-����','','http://post.yule.tom.com/','http://post.yule.tom.com/21001DBA705.html','�ı�����','�ٶ�����Դ','TOM��','��������','0','100','50','10','','','2013-09-18','0','../images/stars.gif');
INSERT INTO media_info VALUES('105','','1','46','33','0','�й�������-����','','http://ent.ce.cn/','http://ent.ce.cn/','�ɴ���ַ','������Դ','�й�������','��������','0','150','80','10','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('106','','1','46','33','0','����������','','http://www.zggjysw.com/','http://www.zggjysw.com/','�ɴ���ַ','������Դ','','��������','0','130','60','10','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('107','','1','46','33','0','��һ��Ƶ��','','http://www.v1.cn/','http://www.v1.cn/','�ɴ���ַ','������Դ','','��������','0','150','70','10','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('108','','1','46','33','0','����ʱ����','','http://www.27.cn/','http://www.27.cn/','�ɴ���ַ','������Դ','','��������','0','180','80','10','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('109','','1','46','33','0','��˿��','','http://www.ifensi.com/','http://www.ifensi.com/','�ı�����','�ٶ�����Դ',' ','��������','0','200','80','10','','','2013-09-18','0','../images/stars.gif');
INSERT INTO media_info VALUES('110','','1','46','33','0','������-����','','http://ent.daqi.com/','http://ent.daqi.com/','�ı�����','������Դ','','��������','0','170','70','10','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('111','','1','46','33','0','��Ȥ��','','http://www.vsuch.com/','http://www.vsuch.com/','�ı�����','������Դ','','��������','0','170','70','10','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('112','','1','46','33','0','�ѹ�����-������Ѷ','','http://news.sogua.com/ent/','http://news.sogua.com/ent/','�ı�����','������Դ','','��������','0','180','70','10','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('113','','1','46','34','0','��ȶ���-��Ϸ','','http://games.enet.com.cn/','http://games.enet.com.cn/article/A1120130607025.html','�ɴ���ַ','�ٶ�����Դ',' ','��������','0','230','100','10','','','2013-09-18','0','../images/stars.gif');
INSERT INTO media_info VALUES('114','','1','46','34','0','766��Ϸ��','','http://news.766.com/','http://news.766.com/dl/2013-08-16/2107159.shtml','�ɴ���ַ','�ٶ�����Դ','','��������','0','230','120','100','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('115','','1','46','34','0','5617������','','http://news.5617.com/','http://news.5617.com/news/detail/1041513','���ܴ���ַ','������Դ','','��������','0','200','90','10','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('116','','1','46','34','0','265G��Ϸ��','','http://www.265g.com/','http://www.265g.com/news/gamenews/399081.html','�ɴ���ַ','�ٶ�����Դ',' ','��������','0','230','90','10','','','2013-09-18','0','../images/stars.gif');
INSERT INTO media_info VALUES('117','','1','46','34','0','������-��Ϸ','','http://game.gmw.cn/','http://game.gmw.cn/2013-08/17/content_8630130.htm','�ɴ���ַ','������Դ','','��������','0','280','110','70','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('118','','1','46','34','0','���ִ�','','http://www.xinshoucun.com/','http://www.xinshoucun.com/','�ɴ���ַ','������Դ','','��������','0','150','70','10','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('119','','1','46','34','0','��Ϸ����','','http://www.noyes.cn/','http://www.noyes.cn/','�ɴ���ַ','������Դ','','��������','0','150','80','10','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('120','','1','46','34','0','�йش���Ϸ','','http://game.zol.com.cn/','http://game.zol.com.cn/','�ɴ���ַ','�ٶ�����Դ',' ','����','0','220','100','10','','','2013-09-18','0','../images/stars.gif');
INSERT INTO media_info VALUES('121','','1','46','34','0','�ξ���','','http://news.uuu9.com/','http://news.uuu9.com/2013/201308/297877.shtml','�ɴ���ַ','�ٶ�����Դ','','��������','0','230','100','90','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('122','','1','46','34','0','7yx��Ϸ��','','http://www.7yx.com.cn/','http://www.7yx.com.cn/html/2013/0815/1376552669.html','���ܴ���ַ','������Դ','','��������','0','180','100','10','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('123','','1','46','35','0','�����-����','','http://hefei.auto.ifeng.com/','http://hefei.auto.ifeng.com/shangqing/2013/0625/1896.html','�ɴ���ַ','������Դ','�����','��������','0','150','80','10','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('124','','1','46','35','0','TOM-����','','http://auto.tom.com/','http://auto.tom.com/2013-05-14/0D5C/00676451.html','�ı�����','�ٶ�����Դ',' ','��������','0','100','50','10','','','2013-09-18','0','../images/stars.gif');
INSERT INTO media_info VALUES('125','','1','46','35','0','������-����','','http://dateauto.eastday.com/','http://dateauto.eastday.com/','�ı�����','������Դ','','��������','0','180','80','10','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('126','','1','46','35','0','ǧ����-����','','http://auto.qianlong.com/','http://auto.qianlong.com/','�ı�����','������Դ','ǧ����','��������','0','150','70','10','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('127','','1','46','35','0','����֮��','','http://www.16888.com/','http://www.16888.com/','�ı�����','�ٶ�����Դ',' ','����','0','180','80','10','','','2013-09-18','0','../images/stars.gif');
INSERT INTO media_info VALUES('128','','1','46','35','0','����������','','http://www.citymotors.com.cn/','http://www.citymotors.com.cn/','�ı�����','������Դ','','����','0','180','80','30','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('129','','1','46','35','0','�ѳ���','','http://www.soche8.com/','http://www.soche8.com/','�ı�����','������Դ','','�Ϻ�','0','170','70','10','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('130','','1','46','35','0','����������','','http://www.mycar168.com/','http://www.mycar168.com/','�ɴ���ַ','������Դ','','����','0','280','190','140','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('131','','1','46','35','0','��������','','http://www.car136.com/','http://www.car136.com/','�ı�����','������Դ','','����','0','30','20','10','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('132','','1','46','35','0','����������','','http://www.qc188.com/','http://www.qc188.com/','�ı�����','������Դ','','����','0','180','80','60','','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('133','vip02','1','46','35','0','����������','','http://www.qc188.com/','http://www.qc188.com/','�ɳ�����','������Դ','','����','0','120','60','30','<p>����</p>','','2013-10-20','0','../images/stars3.gif');
INSERT INTO media_info VALUES('134','vip02','0','46','30','0','������','','��̨','��','�ɳ�����','',' ','�㶫','0','100','80','50','<p>test��</p>','','2013-09-27','0','../images/stars1.gif');
INSERT INTO media_info VALUES('135','vip02','1','46','34','46','��Ϸ��Ϸ','','���ĸ���ʹ��','��������ɱ','�ı�����','������Դ','','�㶫','0','99','88','55','<p>�Ŵ�ʦ��</p>','','2013-10-04','0','../images/stars5.gif');
INSERT INTO media_info VALUES('136','vip02','0','46','36','0','����ʵ����','','������','��','�ɳ�����','��ҳ��¼','�й��㲥��','�Ϻ�','0','80','70','60','<p>�������<br/></p>','','2013-09-27','0','../images/stars.gif');
INSERT INTO media_info VALUES('137','vip02','1','46','30','46','����������','','http://www.qc188.com/','http://life.lyd.com.cn/system/2013/01/21/010223640.shtml','�ɴ���ַ','������Դ','','����','0','80','60','40','<p>312312431414</p>','','2013-09-29','0','../images/stars.gif');
INSERT INTO media_info VALUES('138','vip02','0','46','30','46','IT�Ƽ���Ϣ��','','http://www.qc188.com/','http://www.qc188.com/','�ı�����','',' ','����','0','0','0','10','','','2013-09-28','0','../images/stars.gif');
INSERT INTO media_info VALUES('139','vip02','1','46','42','0','IT�Ƽ���Ϣ��','','http://www.qc188.com/','http://www.qc188.com/','�ɳ�����','������Դ','','����','0','50','30','10','','','2013-10-04','0','../images/stars2.gif');
INSERT INTO media_info VALUES('140','vip02','1','46','41','0','�й������ձ���','','http://life.lyd.com.cn/','http://www.ccd.com.cn/','�ɳ�����','������Դ','','����','0','200','150','120','�Ƽ�','','2013-10-04','0','../images/stars3.gif');
INSERT INTO media_info VALUES('142','','0','46','30','0','ccc12312','','http://www.qc188.com/','http://www.qc188.com/',' ','������Դ',' ','����','0','120','80','50','','','2013-10-04','0','../images/stars.gif');
INSERT INTO media_info VALUES('143','','0','46','30','46','bbb1231231','','http://www.qc188.com/','http://www.qc188.com/','�ɳ�����','������Դ',' ','����','0','200','100','88','','','2013-10-04','0','../images/stars2.gif');
INSERT INTO media_info VALUES('144','vip02','0','46','38','0','�й�������','','http://www.qc188.com/','http://www.qc188.com/','�ɴ���ַ','������Դ',' ','����','0','0','0','38','','','2013-10-04','0','../images/stars.gif');
INSERT INTO media_info VALUES('145','','0','46','30','0','d123123','','http://life.lyd.com.cn/','http://www.qc188.com/','���ܴ�����','������Դ',' ','����','0','80','60','30','','','2013-10-04','0','../images/stars.gif');
INSERT INTO media_info VALUES('147','','1','47','46','0','����΢�����01','','http://www.sina.com.cn/','','','������Դ','������','����','0','160','100','50','','','2013-10-13','0','../images/stars3.gif');
INSERT INTO media_info VALUES('148','','1','47','46','0','����΢�����02','','http://www.sina.com.cn/','','','������Դ','������','����','0','200','120','80','','','2013-10-13','0','../images/stars4.gif');
INSERT INTO media_info VALUES('149','','1','47','46','0','����΢�����03','','http://www.sina.com.cn/','','','������Դ','������','����','0','170','110','70','','','2013-10-13','0','../images/stars5.gif');
INSERT INTO media_info VALUES('150','','1','47','47','0','��Ѷ΢�Ŵ��01','','http://www.qq.com/','','','������Դ','��Ѷ��','����','0','200','120','80','','','2013-10-13','0','../images/stars3.gif');
INSERT INTO media_info VALUES('151','','1','47','47','0','��Ѷ΢�Ŵ��02','','http://www.qq.com/','','','������Դ','��Ѷ��','����','0','180','120','70','','','2013-10-13','0','../images/stars2.gif');
INSERT INTO media_info VALUES('152','','1','47','47','49','��Ѷ΢�Ŵ��03','','http://www.qq.com/','http://www.qq.com/','','������Դ','��Ѷ��','����','0','170','100','50','','','2013-10-13','0','../images/stars4.gif');
INSERT INTO media_info VALUES('153','','1','48','48','0','���˴�����','','http://www.sina.com.cn/','','','������Դ','������','����','0','120','80','50','','','2013-10-14','0','../images/stars.gif');
INSERT INTO media_info VALUES('154','','1','48','49','0','����С����','','http://www.sina.com.cn/','','','������Դ','������','����','0','240','120','80','','','2013-10-14','0','../images/stars.gif');
INSERT INTO media_info VALUES('155','','1','48','48','0','��Ѷ������','','http://www.qq.com/','','','������Դ','��Ѷ��','����','0','180','130','70','','','2013-10-14','0','../images/stars.gif');
INSERT INTO media_info VALUES('156','','1','48','49','48','��ѶС����','','http://www.qq.com/','http://www.qq.com/','','������Դ','��Ѷ��','����','0','100','60','30','','','2013-10-14','0','../images/stars.gif');
INSERT INTO media_info VALUES('157','','1','49','50','0','���˸߼���Ա','','http://www.sina.com.cn/','','','������Դ','������','����','0','300','200','100','','','2013-10-14','0','../images/stars5.gif');
INSERT INTO media_info VALUES('158','','1','49','51','0','������ͨ��Ա','','http://www.sina.com.cn/','','','������Դ','������','����','0','150','100','50','','','2013-10-14','0','../images/stars.gif');
INSERT INTO media_info VALUES('159','','1','49','50','0','��Ѷ�߼���Ա','','http://www.qq.com/','',' ','������Դ','��Ѷ��','����','0','260','190','120','','','2013-10-14','0','../images/stars2.gif');
INSERT INTO media_info VALUES('160','','1','49','51','0','��Ѷ��ͨ��Ա','','http://www.qq.com/','http://www.qq.com/','','������Դ','��Ѷ��','����','0','220','150','90','','','2013-10-14','0','../images/stars2.gif');
INSERT INTO media_info VALUES('161','','1','50','52','0','���˸߼�ˮ��','','http://www.sina.com.cn/','',' ','������Դ','������','����','0','430','300','230','','','2013-10-14','0','../images/stars.gif');
INSERT INTO media_info VALUES('162','','1','50','53','0','������ͨˮ��','','http://www.sina.com.cn/','',' ','������Դ','������','����','0','250','180','100','','','2013-10-14','0','../images/stars.gif');
INSERT INTO media_info VALUES('163','','1','50','52','0','��Ѷ�߼�ˮ��','','http://www.qq.com/','',' ','������Դ','��Ѷ��','����','0','400','320','238','','','2013-10-14','0','../images/stars.gif');
INSERT INTO media_info VALUES('164','','1','50','53','0','��Ѷ��ͨˮ��','','http://www.qq.com/','http://www.qq.com/','','������Դ','��Ѷ��','����','0','180','120','80','','','2013-10-14','0','../images/stars.gif');
INSERT INTO media_info VALUES('165','','1','51','54','0','���˴��Ż�','','http://www.sina.com.cn/','',' ','������Դ','������','����','0','430','380','300','','','2013-10-14','0','../images/stars.gif');
INSERT INTO media_info VALUES('166','','1','51','55','0','����С�Ż�','','http://www.sina.com.cn/','',' ','������Դ','������','����','0','300','200','120','','','2013-10-14','0','../images/stars.gif');
INSERT INTO media_info VALUES('167','','1','51','54','0','��Ѷ���Ż�','','http://www.qq.com/','',' ','������Դ','��Ѷ��','����','0','510','420','380','','','2013-10-14','0','../images/stars.gif');
INSERT INTO media_info VALUES('168','','1','51','55','0','��ѶС�Ż�','','http://www.qq.com/','http://www.qq.com/','','������Դ','��Ѷ��','����','0','240','150','90','','','2013-10-14','0','../images/stars.gif');
INSERT INTO media_info VALUES('169','','1','52','56','0','�����Żݻ','','http://www.sina.com.cn/','',' ','������Դ','������','����','0','180','120','100','','','2013-10-14','0','../images/stars.gif');
INSERT INTO media_info VALUES('170','','1','52','57','0','���˴����','','http://www.sina.com.cn/','',' ','������Դ','������','����','0','110','80','50','','','2013-10-14','0','../images/stars.gif');
INSERT INTO media_info VALUES('171','','1','52','56','0','��Ѷ�Żݻ','','http://www.qq.com/','',' ','������Դ','��Ѷ��','����','0','230','112','90','','','2013-10-14','0','../images/stars.gif');
INSERT INTO media_info VALUES('172','','1','52','57','0','��Ѷ�����','','http://www.qq.com/','','','������Դ','��Ѷ��','����','0','130','83','43','','','2013-10-14','0','../images/stars.gif');
INSERT INTO media_info VALUES('173','','1','53','58','0','��ѶQQȺ��','','http://www.qq.com/','','','������Դ','��Ѷ��','����','0','40','30','20','','','2013-10-14','0','../images/stars.gif');
INSERT INTO media_info VALUES('174','','1','53','59','0','��Ѷ΢��Ⱥ��','','http://www.qq.com/','','','������Դ','��Ѷ��','����','0','80','60','50','','','2013-10-14','0','../images/stars.gif');
INSERT INTO media_info VALUES('175','','1','53','59','0','����΢��Ⱥ��','','http://www.sina.com.cn/','http://www.sina.com.cn/','','������Դ','������','����','0','200','100','80','','','2013-10-14','0','../images/stars.gif');
INSERT INTO media_info VALUES('176','','1','54','60','0','���˸߼�Ӧ�ÿ���','','http://www.sina.com.cn/','','','������Դ','������','����','0','130','80','30','','','2013-10-14','0','../images/stars.gif');
INSERT INTO media_info VALUES('177','','1','54','61','0','������ͨӦ�ÿ���','','http://www.sina.com.cn/','',' ','������Դ','������','����','0','450','280','120','','','2013-10-14','0','../images/stars.gif');
INSERT INTO media_info VALUES('178','','1','54','60','0','��Ѷ�߼�Ӧ�ÿ���','','http://www.qq.com/','',' ','������Դ','��Ѷ��','����','0','400','230','150','','','2013-10-14','0','../images/stars.gif');
INSERT INTO media_info VALUES('179','','1','54','61','0','��Ѷ��ͨӦ�ÿ���','','http://www.qq.com/','','','������Դ','��Ѷ��','����','0','500','200','120','','','2014-04-04','0','../images/stars.gif');
INSERT INTO media_info VALUES('180','vip02','0','47','46','0','��Ѷ΢�Ŵ��03','','http://www.qq.com/','http://www.qq.com/',' ','������Դ','��Ѷ��','����','10000','0','0','100','','','2013-10-20','0','../images/stars.gif');

DROP TABLE IF EXISTS media_small;
CREATE TABLE `media_small` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `BigClass` varchar(255) DEFAULT NULL,
  `enBigClass` varchar(255) DEFAULT NULL,
  `paixu` int(11) DEFAULT NULL,
  `data` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=gb2312;

INSERT INTO media_small VALUES('46','10Ԫ��ɱ','','1','2013-10-03');
INSERT INTO media_small VALUES('47','20Ԫ��ɱ','','2','2013-10-04');
INSERT INTO media_small VALUES('48','30Ԫ��ɱ','','3','2013-10-04');
INSERT INTO media_small VALUES('49','100Ԫ��ɱ','','4','2013-10-04');

DROP TABLE IF EXISTS menhu_class;
CREATE TABLE `menhu_class` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `BigClass` varchar(255) DEFAULT NULL,
  `enBigClass` varchar(255) DEFAULT NULL,
  `paixu` int(11) DEFAULT NULL,
  `data` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=gb2312;

INSERT INTO menhu_class VALUES('30','������','','1','2013-09-18');
INSERT INTO menhu_class VALUES('31','�Ѻ���','','2','2013-09-18');
INSERT INTO menhu_class VALUES('32','��Ѷ��','','3','2013-09-18');
INSERT INTO menhu_class VALUES('33','������','','4','2013-09-18');
INSERT INTO menhu_class VALUES('34','�����','','5','2013-09-18');
INSERT INTO menhu_class VALUES('35','�л���','','6','2013-09-18');
INSERT INTO menhu_class VALUES('36','������','','7','2013-09-18');
INSERT INTO menhu_class VALUES('37','������','','8','2013-09-18');
INSERT INTO menhu_class VALUES('38','ǧ����','','9','2013-09-18');
INSERT INTO menhu_class VALUES('39','�»���','','10','2013-09-18');
INSERT INTO menhu_class VALUES('40','�й���','','11','2013-09-18');
INSERT INTO menhu_class VALUES('41','�۴���','','12','2013-09-18');
INSERT INTO menhu_class VALUES('42','TOM��','','13','2013-09-18');
INSERT INTO menhu_class VALUES('43','21CN��','','14','2013-09-18');
INSERT INTO menhu_class VALUES('44','�й��ձ���','','15','2013-09-18');
INSERT INTO menhu_class VALUES('45','�й�������','','16','2013-09-18');
INSERT INTO menhu_class VALUES('46','�й�������','','17','2013-09-18');
INSERT INTO menhu_class VALUES('47','�й��㲥��','','18','2013-09-18');

DROP TABLE IF EXISTS menhuhz_info;
CREATE TABLE `menhuhz_info` (
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
) ENGINE=MyISAM AUTO_INCREMENT=131 DEFAULT CHARSET=gb2312;

INSERT INTO menhuhz_info VALUES('129','vip01','','166','2013101482138','�����ܻ� ��ͼ��������DIYװ����ս����������','����С�Ż�','','200','�����ܻ� ��ͼ��������DIYװ����ս����������','�����������ݣ���������','','2013-10-14 07:31:09','2013-10-14 07:41:18','3','0','0');
INSERT INTO menhuhz_info VALUES('130','vip01','','168','2013101482138','�����ܻ� ��ͼ��������DIYװ����ս����������','��ѶС�Ż�','http://www.qq.com/','150','�����ܻ� ��ͼ��������DIYװ����ս����������','','','2013-10-14 07:31:09','2013-10-14 07:40:12','2','1','0');

DROP TABLE IF EXISTS nav_class;
CREATE TABLE `nav_class` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `BigClass` varchar(255) DEFAULT NULL,
  `enBigClass` varchar(255) DEFAULT NULL,
  `paixu` int(11) DEFAULT NULL,
  `data` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=gb2312;

INSERT INTO nav_class VALUES('46','���ķ���','','1','2014-02-12');
INSERT INTO nav_class VALUES('47','΢Ӫ��','','2','2013-10-04');
INSERT INTO nav_class VALUES('48','����','','3','2013-10-04');
INSERT INTO nav_class VALUES('49','��Ա','','4','2013-10-04');
INSERT INTO nav_class VALUES('50','ˮ��','','5','2013-10-04');
INSERT INTO nav_class VALUES('51','�Ż�����','','6','2013-10-04');
INSERT INTO nav_class VALUES('52','�','','7','2013-10-04');
INSERT INTO nav_class VALUES('53','Ⱥ��','','8','2013-10-04');
INSERT INTO nav_class VALUES('54','Ӧ�ÿ���','','9','2013-10-04');

DROP TABLE IF EXISTS news_class;
CREATE TABLE `news_class` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `BigClass` varchar(255) DEFAULT NULL,
  `enBigClass` varchar(255) DEFAULT NULL,
  `paixu` int(11) DEFAULT NULL,
  `data` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=gb2312;

INSERT INTO news_class VALUES('28','��������','','1','2013-09-18');
INSERT INTO news_class VALUES('29','�������','','2','2013-09-18');

DROP TABLE IF EXISTS news_info;
CREATE TABLE `news_info` (
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
) ENGINE=MyISAM AUTO_INCREMENT=73 DEFAULT CHARSET=gb2312;

INSERT INTO news_info VALUES('67','28','������ʲô�ã�','���Ľ�','1','����1. ���û������׽��ܹ�� \r\n<P style=\"TEXT-ALIGN: left; TEXT-INDENT: 2em\">���ڹ����Ϣ̫��̫�ӣ������߶������ԣ���ϲ��Ӳ�������Ĺ�棬����Ը���Լ�ȥѰ���Լ�����Ҫ����Ϣ���������Ĳ���Ӳ�Թ���������⵽�û��ִ������ÿͻ��������н�٣�������ȥ���ܡ�</P>\r\n<P style=\"TEXT-ALIGN: left; TEXT-INDENT: 2em\">2. ���û���ȥ���õ��Ķ�����</P>\r\n<P style=\"TEXT-ALIGN: left; TEXT-INDENT: 2em\">��������Ķ�붼����Ȩ���ԡ�רҵ�Ի���Ȥζ�ԡ������ԣ��ܸ��û���ȥ���õ��Ķ����ܣ����û��ڶ�����ʱ���˹��Ĵ��ڣ�ȫ���ĵ�Ͷ�������������˸��׻���û���ϲ����������õĿڱ���</P>\r\n<P style=\"TEXT-ALIGN: left; TEXT-INDENT: 2em\">3. �ɱ����õͣ�������Ϣ����Ч����</P>\r\n<P style=\"TEXT-ALIGN: left; TEXT-INDENT: 2em\">��ͨ�Ĺ��Ͷ����úܸߣ��������ܳ��ص���Ϣ��ʮ�����ޣ�������ֽ��ý���ϵ�ͼƬ��棬��Щ����ֻ�ж����ɴ�С���ܰ�����������ƣ��޷��������Ϣ�����ر������������Ĺ��Ͷ����õͣ��������ܳ��ص���Ϣ������Ӧ��Ͷ�ʻر�Ҳ�ߵöࡣ</P>','','2013-09-18','0');
INSERT INTO news_info VALUES('68','28','�����ܷ�����Щý��','���Ľ�','1','<P>�����ܶ���ҵ�����ķ����ϣ��ܾ�������ý������ѡ�����Ľ�ý��⽫������վ���к��������ķ��໮�֡�������ҵ����ý���ѡ��</P>\r\n<P>��������������Դ����ϵ�ͷ���</P>','','2013-09-18','0');
INSERT INTO news_info VALUES('69','28','��ҵ��ν�������Ӫ��','���Ľ�','1','<P>�������Ĵ�2009��ɾ�\"�԰׽�\"�����Ѿ������5�꣬2009-2011��Ҳ�ǵ�һ�����ĸ߳�������ҵ��ʼ�������ĺͻ���ģ�£���2012��\"�廪���\" ������ģʽ��ʼ������һ���߳���רҵ����д�ֺ��Ŷӿ�ʼ����ˮ�档���Ǵ�2013�꿪ʼ�����ĵĻԻ�ʱ���ѹ���������ƽ���ڣ����ĵ�ý��Ҳ��ʼ���ǣ�������Ӳ����ƽ��ʹ���ı��ȿ�ʼ���¡�</P>\r\n<P>����ƽ�����Ŀɿ���Ǳ�����ޣ���������������Ļ�����ʢ��δ�����ĵķ�չ������\"Ǳ��ʽ���\"??�����ĵĹ������õ�Ӫ��ÿ�����ڣ�����\"����\"��\"��������\"ʽ������Ӫ�������й���ҵ�ı���֮·��&nbsp; </P>\r\n<P>�������Ľ�Ϊ���ṩȫ��λ�����ķ��񣬾���ɼ���������ҵQQ����Ǣ̸��</P>','','2013-09-18','0');
INSERT INTO news_info VALUES('71','29','�������ķ��������Ч��ʱ��˵��','���Ľ�','1','<p style=\"text-align:left;text-indent:2em;\">1��99%����£��ڱ�ƽ̨�����ĸ�������ñ������������ϵģ�</p>\r\n<p style=\"text-align:left;text-indent:2em;\">2������������Υ�������桢������������������������ݼ����ӣ����ϼ���鱻����ý��༭��Աɾ��ģ���ƽ̨�����˿</p>\r\n<p style=\"text-align:left;text-indent:2em;\">3�����������ݼ��������棬��������ý��༭ɾ��ģ���ƽ̨��ŵ���£�</p>\r\n<p style=\"text-align:left;text-indent:2em;\">��1��6������ɾ��ģ��������ط����ط����˿�100%ȫ���˿</p>\r\n<p style=\"text-align:left;text-indent:2em;\">��2��6���º�ɾ��ģ����ǿ�Э����ý�幵ͨ�����ָ��������ٱ�֤�ָ����˿</p>\r\n<p style=\"text-align:left;text-indent:2em;\">лл֧������⣡</p>','','2013-09-28','0');
INSERT INTO news_info VALUES('72','29','���ķ����̳̣�һ��','���Ľ�','1','<p>����1����ѯ���߿ͷ�����ȡ���µĿ�����ֵ�Żݻ������</p>\r\n<p>����2���û�������<a href=\"http://www.sina.com.cn/reg.php\">http://www.sina.com.cn/reg.php</a> ������ϵ�ͷ������˺ţ�ӵ���������ĺ��Ĵ������˻���</p>\r\n<p>����3���û����ں�̨<span style=\"color:#0070c0;\">�����߳�ֵ��</span>ҳ��ʹ�ð���֧�������Ƹ�ͨ��������ת�˵ȷ�ʽ���г�ֵ��������������ϵ���߿ͷ�Ϊ�����</p>\r\n<p>����4���û��ں�̨<span style=\"color:#0070c0;\">�����ķ�����</span>�ύ������ͷ���Ѹ�ٽ����ĸ����˺��ύ���༭���ţ������ɹ����ں�̨���ܿ����������ӵ�ַ�ˡ�</p>\r\n<p>����5��û�и����ô�죿��ע��<span style=\"color:#0070c0;\">����д���¡�</span>���û�¼���Լ���վ������Ϻ���Ҫ���͵ĸ���󣬿ͷ�������̽�����Ҫ������÷��͵���д����д������ں�̨���ܲ鵽�����ˣ�������ø�����Ǻ����⣬���ں�̨<span style=\"color:#0070c0;\">���ύ������</span>��������Ӧ��ID�Ͳ�����֮�����ͷ������̸�������Ϣ��</p>','','2013-10-19','0');

DROP TABLE IF EXISTS page_seo;
CREATE TABLE `page_seo` (
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
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=gb2312;

INSERT INTO page_seo VALUES('1','��Աע��','reg','��Աע��','','��Աע��','','��Աע��','','1');
INSERT INTO page_seo VALUES('2','��Ա��¼','login','��Ա��¼','','��Ա��¼','','��Ա��¼','','2');
INSERT INTO page_seo VALUES('3','��������','news','��������','','��������','','��������','','3');
INSERT INTO page_seo VALUES('4','����ý��','media','����ý��','','����ý��','','����ý��','','4');
INSERT INTO page_seo VALUES('5','���İ���','anli','���İ���','','���İ���','','���İ���','','5');
INSERT INTO page_seo VALUES('6','���ļ۸�','price','���ļ۸�','','���ļ۸�','','���ļ۸�','','6');
INSERT INTO page_seo VALUES('7','�����ײ�','taocan','�����ײ�','','�����ײ�','','�����ײ�','','7');
INSERT INTO page_seo VALUES('8','���Ĵ�д','daixie','���Ĵ�д','','���Ĵ�д','','���Ĵ�д','','8');
INSERT INTO page_seo VALUES('9','��ϵ����','contact','��ϵ����','','��ϵ����','','��ϵ����','','9');

DROP TABLE IF EXISTS piclink_class;
CREATE TABLE `piclink_class` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `BigClass` varchar(255) DEFAULT NULL,
  `enBigClass` varchar(255) DEFAULT NULL,
  `paixu` int(11) DEFAULT NULL,
  `data` varchar(255) DEFAULT NULL,
  `propic` varchar(255) DEFAULT NULL,
  `linkurl` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=gb2312;

INSERT INTO piclink_class VALUES('38','��ľ���߶�����','','1','','','http://www.hongmuchuan.com/');

DROP TABLE IF EXISTS qunfa_info;
CREATE TABLE `qunfa_info` (
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
) ENGINE=MyISAM AUTO_INCREMENT=132 DEFAULT CHARSET=gb2312;

INSERT INTO qunfa_info VALUES('129','vip01','','175','2013101488140','�����ܻ� ��ͼ��������DIYװ����ս����������','����΢��Ⱥ��','','100','�����ܻ� ��ͼ��������DIYװ����ս����������','','','2013-10-14 08:14:33','','0','0','0');
INSERT INTO qunfa_info VALUES('130','vip01','','174','2013101488140','�����ܻ� ��ͼ��������DIYװ����ս����������','��Ѷ΢��Ⱥ��','http://www.sina.com.cn/','60','�����ܻ� ��ͼ��������DIYװ����ս����������','','','2013-10-14 08:14:33','2013-10-14 08:27:28','2','1','0');
INSERT INTO qunfa_info VALUES('131','vip01','','173','2013101488140','�����ܻ� ��ͼ��������DIYװ����ս����������','��ѶQQȺ��','','30','�����ܻ� ��ͼ��������DIYװ����ս����������','��Ѷ������Ⱥ�����ˡ�','','2013-10-14 08:14:33','2013-10-14 08:29:04','3','0','0');

DROP TABLE IF EXISTS ruanwen_info;
CREATE TABLE `ruanwen_info` (
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
) ENGINE=MyISAM AUTO_INCREMENT=129 DEFAULT CHARSET=gb2312;

INSERT INTO ruanwen_info VALUES('85','vip01','0','0','2013092127552','����������������������','Ʒ������','http://www.sina.com.cn','70','<p>����������������ڿ�ʼ��ᵽ��һ�׺õ���װ������һ���������������۳����ٻ�������Ч����ʵ����һ���޴����¡����������ײ����Ⱥ�У���������</p><p>�����������Ϳ�ʼ�����ˡ�</p><p><br/></p><p>�������ȣ����������������ʹ��Լ���??���Ƕ�������ˡ���Σ���Ϊ����������</p><p>��������??��б�ȼ���Ϊ�˿Ͷ��Ƶġ�??���죬ʹ���������������ᡢ���߹�</p><p>�����������²�ϧ�����ļ��ã����ʹ����Ϊ�����ʡ���</p><p><br/></p><p>�����°ںܳ������������Ŀ�����ť����������ĸ����??�ǳ���Ҳ�ǳ���������</p><p>����������������Ҳ������һ���ϱ�ս��ǰ�ĸ��š�</p><p><br/></p><p>��������Ҫ���ǡ���������ʹ�ô������������ڵ��������Ĳ�ƥ���������ǵĳ���</p><p>����??��Ӣ��������ë��ĵ�б�Ʋ������ո�����˹�����µط�����ë֯���Ƴ�</p><p>������Ӣ����ӡ��Ⱥ�����ĺ����ޣ���ӡ��������֯�񣬴�Ӣ��������˹�����Ŀ��</p><p>����ϸë�����Ӱ�����������ϸ�����ڴ�����ô�������ĳ�������ʹ���õ��ڶ��</p><p>�����������㡣</p><p><br/></p><p>�������������������������ݵ�С����������һ��С��˾���ϵ������������Ƶġ�</p><p>������������СС�������﹤����������114�ꡣ</p><p><br/></p><p>���������������������ĵ���򵽡�����������������д������Ƭ����G?F?����</p><p>��������������?�������ǣ�������</p>','���������������¡�','','2013-09-21 04:19:48','','3','1','0');
INSERT INTO ruanwen_info VALUES('86','vip01','0','0','2013092127552','����������������������','�����-ʱ��','http://www.hongmuchuan.com','20','<p>����������������ڿ�ʼ��ᵽ��һ�׺õ���װ������һ���������������۳����ٻ�������Ч����ʵ����һ���޴����¡����������ײ����Ⱥ�У���������</p><p>�����������Ϳ�ʼ�����ˡ�</p><p><br/></p><p>�������ȣ����������������ʹ��Լ���??���Ƕ�������ˡ���Σ���Ϊ����������</p><p>��������??��б�ȼ���Ϊ�˿Ͷ��Ƶġ�??���죬ʹ���������������ᡢ���߹�</p><p>�����������²�ϧ�����ļ��ã����ʹ����Ϊ�����ʡ���</p><p><br/></p><p>�����°ںܳ������������Ŀ�����ť����������ĸ����??�ǳ���Ҳ�ǳ���������</p><p>����������������Ҳ������һ���ϱ�ս��ǰ�ĸ��š�</p><p><br/></p><p>��������Ҫ���ǡ���������ʹ�ô������������ڵ��������Ĳ�ƥ���������ǵĳ���</p><p>����??��Ӣ��������ë��ĵ�б�Ʋ������ո�����˹�����µط�����ë֯���Ƴ�</p><p>������Ӣ����ӡ��Ⱥ�����ĺ����ޣ���ӡ��������֯�񣬴�Ӣ��������˹�����Ŀ��</p><p>����ϸë�����Ӱ�����������ϸ�����ڴ�����ô�������ĳ�������ʹ���õ��ڶ��</p><p>�����������㡣</p><p><br/></p><p>�������������������������ݵ�С����������һ��С��˾���ϵ������������Ƶġ�</p><p>������������СС�������﹤����������114�ꡣ</p><p><br/></p><p>���������������������ĵ���򵽡�����������������д������Ƭ����G?F?����</p><p>��������������?�������ǣ�������</p>','','','2013-09-21 04:19:48','2013-09-25 08:57:57','2','1','0');
INSERT INTO ruanwen_info VALUES('87','admin','0','0','2013092259898','123123123','�й���-����','','50','<p><br/>123123123123132</p>','','','2013-09-22 10:19:32','','0','0','0');
INSERT INTO ruanwen_info VALUES('88','admin','0','0','2013092226964','12313123','�й���','','50','<p><br/>123123123123123123123</p>','','','2013-09-22 10:20:36','','0','0','0');
INSERT INTO ruanwen_info VALUES('89','admin','0','0','2013092226964','12313123','�й���-����','','50','<p><br/>123123123123123123123</p>','','','2013-09-22 10:20:36','','0','0','0');
INSERT INTO ruanwen_info VALUES('90','admin','0','0','2013092226964','12313123','�й�����װ����','','70','<p><br/>123123123123123123123</p>','','','2013-09-22 10:20:36','','0','0','0');
INSERT INTO ruanwen_info VALUES('91','admin','0','0','2013092226964','12313123','�ر���','','80','<p><br/>123123123123123123123</p>','','','2013-09-22 10:20:36','','0','0','0');
INSERT INTO ruanwen_info VALUES('92','admin','0','0','2013092226964','12313123','�й��ҵ���','','80','<p><br/>123123123123123123123000</p>','','','2013-09-22 10:20:36','','1','0','0');
INSERT INTO ruanwen_info VALUES('93','vip01','0','0','2013092579175','����������������������','����������','','60','<p>����������������ڿ�ʼ��ᵽ��һ�׺õ���װ������һ���������������۳����ٻ�������Ч����ʵ����һ���޴����¡����������ײ����Ⱥ�У���������</p><p>�����������Ϳ�ʼ�����ˡ�</p><p><br/></p><p>�������ȣ����������������ʹ��Լ���??���Ƕ�������ˡ���Σ���Ϊ����������</p><p>��������??��б�ȼ���Ϊ�˿Ͷ��Ƶġ�??���죬ʹ���������������ᡢ���߹�</p><p>�����������²�ϧ�����ļ��ã����ʹ����Ϊ�����ʡ���</p><p><br/></p><p>�����°ںܳ������������Ŀ�����ť����������ĸ����??�ǳ���Ҳ�ǳ���������</p><p>����������������Ҳ������һ���ϱ�ս��ǰ�ĸ��š�</p><p><br/></p><p>��������Ҫ���ǡ���������ʹ�ô������������ڵ��������Ĳ�ƥ���������ǵĳ���</p><p>����??��Ӣ��������ë��ĵ�б�Ʋ������ո�����˹�����µط�����ë֯���Ƴ�</p><p>������Ӣ����ӡ��Ⱥ�����ĺ����ޣ���ӡ��������֯�񣬴�Ӣ��������˹�����Ŀ��</p><p>����ϸë�����Ӱ�����������ϸ�����ڴ�����ô�������ĳ�������ʹ���õ��ڶ��</p><p>�����������㡣</p><p><br/></p><p>�������������������������ݵ�С����������һ��С��˾���ϵ������������Ƶġ�</p><p>������������СС�������﹤����������114�ꡣ</p><p><br/></p><p>���������������������ĵ���򵽡�����������������д������Ƭ����G?F?����</p><p>��������������?�������ǣ�������</p>','','','2013-09-25 10:13:37','','0','0','1');
INSERT INTO ruanwen_info VALUES('94','vip01','0','0','2013092631305','����������������������','����������','','60','<p>����������������ڿ�ʼ��ᵽ��һ�׺õ���װ������һ���������������۳����ٻ�������Ч����ʵ����һ���޴����¡����������ײ����Ⱥ�У���������</p><p>�����������Ϳ�ʼ�����ˡ�</p><p><br/></p><p>�������ȣ����������������ʹ��Լ���??���Ƕ�������ˡ���Σ���Ϊ����������</p><p>��������??��б�ȼ���Ϊ�˿Ͷ��Ƶġ�??���죬ʹ���������������ᡢ���߹�</p><p>�����������²�ϧ�����ļ��ã����ʹ����Ϊ�����ʡ���</p><p><br/></p><p>�����°ںܳ������������Ŀ�����ť����������ĸ����??�ǳ���Ҳ�ǳ���������</p><p>����������������Ҳ������һ���ϱ�ս��ǰ�ĸ��š�</p><p><br/></p><p>��������Ҫ���ǡ���������ʹ�ô������������ڵ��������Ĳ�ƥ���������ǵĳ���</p><p>����??��Ӣ��������ë��ĵ�б�Ʋ������ո�����˹�����µط�����ë֯���Ƴ�</p><p>������Ӣ����ӡ��Ⱥ�����ĺ����ޣ���ӡ��������֯�񣬴�Ӣ��������˹�����Ŀ��</p><p>����ϸë�����Ӱ�����������ϸ�����ڴ�����ô�������ĳ�������ʹ���õ��ڶ��</p><p>�����������㡣</p><p><br/></p><p>�������������������������ݵ�С����������һ��С��˾���ϵ������������Ƶġ�</p><p>������������СС�������﹤����������114�ꡣ</p><p><br/></p><p>���������������������ĵ���򵽡�����������������д������Ƭ����G?F?����</p><p>��������������?�������ǣ�������</p>','','','2013-09-26 02:16:24','','1','0','0');
INSERT INTO ruanwen_info VALUES('95','vip01','0','0','2013092771014','����������������������','�й�������-����','','70','<p>����������������ڿ�ʼ��ᵽ��һ�׺õ���װ������һ���������������۳����ٻ�������Ч����ʵ����һ���޴����¡����������ײ����Ⱥ�У���������</p><p>�����������Ϳ�ʼ�����ˡ�</p><p><br/></p><p>�������ȣ����������������ʹ��Լ���??���Ƕ�������ˡ���Σ���Ϊ����������</p><p>��������??��б�ȼ���Ϊ�˿Ͷ��Ƶġ�??���죬ʹ���������������ᡢ���߹�</p><p>�����������²�ϧ�����ļ��ã����ʹ����Ϊ�����ʡ���</p><p><br/></p><p>�����°ںܳ������������Ŀ�����ť����������ĸ����??�ǳ���Ҳ�ǳ���������</p><p>����������������Ҳ������һ���ϱ�ս��ǰ�ĸ��š�</p><p><br/></p><p>��������Ҫ���ǡ���������ʹ�ô������������ڵ��������Ĳ�ƥ���������ǵĳ���</p><p>����??��Ӣ��������ë��ĵ�б�Ʋ������ո�����˹�����µط�����ë֯���Ƴ�</p><p>������Ӣ����ӡ��Ⱥ�����ĺ����ޣ���ӡ��������֯�񣬴�Ӣ��������˹�����Ŀ��</p><p>����ϸë�����Ӱ�����������ϸ�����ڴ�����ô�������ĳ�������ʹ���õ��ڶ��</p><p>�����������㡣</p><p><br/></p><p>�������������������������ݵ�С����������һ��С��˾���ϵ������������Ƶġ�</p><p>������������СС�������﹤����������114�ꡣ</p><p><br/></p><p>���������������������ĵ���򵽡�����������������д������Ƭ����G?F?����</p><p>��������������?�������ǣ�������</p>','','','2013-09-27 04:41:01','','0','0','0');
INSERT INTO ruanwen_info VALUES('96','vip01','0','0','2013092760071','test','��������','','80','<p>�ɰ�˹�ٷ�</p>','','','2013-09-27 04:42:05','','0','0','0');
INSERT INTO ruanwen_info VALUES('97','vip01','0','0','2013092760071','test','�й���-����','','50','<p>�ɰ�˹�ٷ�</p>','','','2013-09-27 04:42:05','','0','0','0');
INSERT INTO ruanwen_info VALUES('98','vip02','0','0','2013092773966','�Ŵ�ʦ��','�й�������-����','http://www.sina.com.cn','70','<p>���Ӹ��˰�</p>','������������Ϣ��','','2013-09-27 05:02:00','','3','1','0');
INSERT INTO ruanwen_info VALUES('99','vip02','0','0','2013092773966','�Ŵ�ʦ��','�й���-����','','50','<p>���Ӹ��˰������������˵�ˮ׼</p>','','','2013-09-27 05:02:00','','0','0','1');
INSERT INTO ruanwen_info VALUES('100','vip04','0','0','2013092791343','fabuyit','�й�������-ʱ��','http://www.sina.com.cn','70','<p>fdsf&nbsp;</p>','','','2013-09-27 05:10:55','','2','1','0');
INSERT INTO ruanwen_info VALUES('101','vip04','0','0','2013092791343','fabuyit','�����-ʱ��','','20','<p>fdsf&nbsp;</p>','','','2013-09-27 05:10:55','','0','0','0');
INSERT INTO ruanwen_info VALUES('102','vip04','0','0','2013092719345','fabuyit','TOM-����','','50','<p>fdsf&nbsp;</p>','','','2013-09-27 05:11:41','','0','0','0');
INSERT INTO ruanwen_info VALUES('103','admin','0','0','2013092861583','����������������������','�й���','','10','����������������ڿ�ʼ��ᵽ��һ�׺õ���װ������һ���������������۳����ٻ�������Ч����ʵ����һ���޴����¡����������ײ����Ⱥ�У����������������Ϳ�ʼ�����ˡ�\r\n\r\n\r\n\r\n\r\n�������ȣ����������������ʹ��Լ���??���Ƕ�������ˡ���Σ���Ϊ�������������õ�б�ȼ���Ϊ�˿Ͷ��Ƶġ�??���죬ʹ���������������ᡢ���߹�\r\n\r\n�����������²�ϧ�����ļ��ã����ʹ����Ϊ�����ʡ���\r\n\r\n\r\n\r\n\r\n�����°ںܳ������������Ŀ�����ť����������ĸ����??�ǳ���Ҳ�ǳ���������������������Ҳ������һ���ϱ�ս��ǰ�ĸ��š�\r\n\r\n\r\n\r\n\r\n��������Ҫ���ǡ���������ʹ�ô������������ڵ��������Ĳ�ƥ���������ǵĳ�����Ӣ��������ë��ĵ�б�Ʋ������ո�����˹�����µط�����ë֯���Ƴ񣬴�Ӣ����ӡ��Ⱥ�����ĺ����ޣ���ӡ��������֯�񣬴�Ӣ��������˹�����Ŀ��\r\n\r\n����ϸë�����Ӱ�����������ϸ�����ڴ�����ô�������ĳ�������ʹ���õ��ڶ���������㡣\r\n\r\n\r\n\r\n\r\n�������������������������ݵ�С����������һ��С��˾���ϵ������������Ƶġ���������СС�������﹤����������114�ꡣ\r\n\r\n\r\n\r\n\r\n���������������������ĵ���򵽡�����������������д������Ƭ������������������?�������ǣ�������\r\n','','','2013-09-28 02:42:53','','1','0','0');
INSERT INTO ruanwen_info VALUES('104','admin','0','0','2013092821038','����������������������','�й���ҵ��','','10','<p>����������������ڿ�ʼ��ᵽ��һ�׺õ���װ������һ���������������۳����ٻ�������Ч����ʵ����һ���޴����¡����������ײ����Ⱥ�У����������������Ϳ�ʼ�����ˡ�</p>\r\n<p><br />\r\n</p>\r\n<p>�������ȣ����������������ʹ��Լ���??���Ƕ�������ˡ���Σ���Ϊ�������������õ�б�ȼ���Ϊ�˿Ͷ��Ƶġ�??���죬ʹ���������������ᡢ���߹�</p>\r\n<p>�����������²�ϧ�����ļ��ã����ʹ����Ϊ�����ʡ���</p>\r\n<p><br />\r\n</p>\r\n<p>�����°ںܳ������������Ŀ�����ť����������ĸ����??�ǳ���Ҳ�ǳ���������������������Ҳ������һ���ϱ�ս��ǰ�ĸ��š�</p>\r\n<p><br />\r\n</p>\r\n<p>��������Ҫ���ǡ���������ʹ�ô������������ڵ��������Ĳ�ƥ���������ǵĳ�����Ӣ��������ë��ĵ�б�Ʋ������ո�����˹�����µط�����ë֯���Ƴ񣬴�Ӣ����ӡ��Ⱥ�����ĺ����ޣ���ӡ��������֯�񣬴�Ӣ��������˹�����Ŀ��</p>\r\n<p>����ϸë�����Ӱ�����������ϸ�����ڴ�����ô�������ĳ�������ʹ���õ��ڶ���������㡣</p>\r\n<p><br />\r\n</p>\r\n<p>�������������������������ݵ�С����������һ��С��˾���ϵ������������Ƶġ���������СС�������﹤����������114�ꡣ</p>\r\n<p><br />\r\n</p>\r\n<p>���������������������ĵ���򵽡�����������������д������Ƭ������������������?�������ǣ�������</p>','','','2013-09-28 04:08:27','','0','0','0');
INSERT INTO ruanwen_info VALUES('105','vip05','vip02','0','2013092910928','��Ь������Ь��ѡ�񣬵ͼ����Ь','�й��ձ���-����','','45','<span style=\"color:#333333;font-family:����;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\">������������һ��������ϲ���Ĺ��﷽ʽ������Ь�������Ҳ��һ�������������Ŀ����Ь�̣����������е�������Ҳ�����ˣ����󲿷ֵĵط��Ĳ�Ʒ���й�ͬ�ص㣬Ҫô����Ҫ�ۣ�Ҫô������������ô��������ô����������������Ʒ��Ь��?�����˽⵽������רҵ��B2CЬ������һƥ�����ӳ����������Ь��www.haoxie.net��������һ��֮�ʳɹ�������ҵ5ǿ�����С�Ʒ���ۿ���������������ϲ������Ʒ����������������������Ь!���Ь������ҵ�Ļ���ı���ϣ�������һ���ĺ�Ь����ƽ̨�������ܹ�������ȫ�µĹ�Ь���飬ȫ�µ����Ѹ��ܡ�</span><br style=\"color:#333333;font-family:����;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\" />\r\n<br style=\"color:#333333;font-family:����;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\" />\r\n<span style=\"color:#333333;font-family:����;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\">������Ь��www.haoxie.net��2011�������������һ��ķ�չ����ȻӮ���������˿�Ⱥ�������������Ҫ�Ƿ���Ь����Թ˿͵���ҵģʽ��������ȫ��ͬ���ǳ�֪����Ʒ�ơ�����Ʒ��ЬԴ������������ǿ���ۿۡ�����Ǻ�Ь��ǿ���������˿͵ķ�ʽ��Ҳ��Ϊʲô��Ь�Ĺ˿ͻ�ѡ���Ь��վ��ԭ�򡣱���û��Ь?�Ǿ��Ϻ�Ь�������͵��ۿ����Ь!���ں�Ь����ƽ̨���ڵ߸�������õĹ��</span><br style=\"color:#333333;font-family:����;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\" />\r\n<br style=\"color:#333333;font-family:����;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\" />\r\n<span style=\"color:#333333;font-family:����;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\">�������ʱ�����ǵ����ʽ��Ȼ�����˺ܴ�ı䣬������ʵ�������۷�ʽ�������У���������ǰ�ص����������������ǲ����̻��ĵط�����������Ҳ��֪�������ںܶ��������������������Ҳ���൱�ļ��ҵģ���Ҫ�����п���ת���������Ǳز����ٵģ��������ܵ������������ĺ�Ь��www.haoxie.net��ӱ���������ڶ����������Ŀ���Ѿ����������õ�������������Ь�ӵ����ȥ������Դ�㽭����)</span>','','','2013-09-29 06:50:01','','0','0','0');
INSERT INTO ruanwen_info VALUES('106','vip05','vip02','0','2013092910928','��Ь������Ь��ѡ�񣬵ͼ����Ь','�й���-����','http://www.hongmuchuan.com/','50','<span style=\"color:#333333;font-family:����;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\">������������һ��������ϲ���Ĺ��﷽ʽ������Ь�������Ҳ��һ�������������Ŀ����Ь�̣����������е�������Ҳ�����ˣ����󲿷ֵĵط��Ĳ�Ʒ���й�ͬ�ص㣬Ҫô����Ҫ�ۣ�Ҫô������������ô��������ô����������������Ʒ��Ь��?�����˽⵽������רҵ��B2CЬ������һƥ�����ӳ����������Ь��www.haoxie.net��������һ��֮�ʳɹ�������ҵ5ǿ�����С�Ʒ���ۿ���������������ϲ������Ʒ����������������������Ь!���Ь������ҵ�Ļ���ı���ϣ�������һ���ĺ�Ь����ƽ̨�������ܹ�������ȫ�µĹ�Ь���飬ȫ�µ����Ѹ��ܡ�</span><br style=\"color:#333333;font-family:����;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\" />\r\n<br style=\"color:#333333;font-family:����;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\" />\r\n<span style=\"color:#333333;font-family:����;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\">������Ь��www.haoxie.net��2011�������������һ��ķ�չ����ȻӮ���������˿�Ⱥ�������������Ҫ�Ƿ���Ь����Թ˿͵���ҵģʽ��������ȫ��ͬ���ǳ�֪����Ʒ�ơ�����Ʒ��ЬԴ������������ǿ���ۿۡ�����Ǻ�Ь��ǿ���������˿͵ķ�ʽ��Ҳ��Ϊʲô��Ь�Ĺ˿ͻ�ѡ���Ь��վ��ԭ�򡣱���û��Ь?�Ǿ��Ϻ�Ь�������͵��ۿ����Ь!���ں�Ь����ƽ̨���ڵ߸�������õĹ��</span><br style=\"color:#333333;font-family:����;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\" />\r\n<br style=\"color:#333333;font-family:����;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\" />\r\n<span style=\"color:#333333;font-family:����;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\">�������ʱ�����ǵ����ʽ��Ȼ�����˺ܴ�ı䣬������ʵ�������۷�ʽ�������У���������ǰ�ص����������������ǲ����̻��ĵط�����������Ҳ��֪�������ںܶ��������������������Ҳ���൱�ļ��ҵģ���Ҫ�����п���ת���������Ǳز����ٵģ��������ܵ������������ĺ�Ь��www.haoxie.net��ӱ���������ڶ����������Ŀ���Ѿ����������õ�������������Ь�ӵ����ȥ������Դ�㽭����)</span>','','','2013-09-29 06:50:01','2013-09-29 09:27:16','2','0','0');
INSERT INTO ruanwen_info VALUES('107','vip05','vip02','0','2013092990375','��Ь������Ь��ѡ�񣬵ͼ����Ь','����������','http://www.sina.com.cn','80','<span style=\"color:#333333;font-family:����;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\">������������һ��������ϲ���Ĺ��﷽ʽ������Ь�������Ҳ��һ�������������Ŀ����Ь�̣����������е�������Ҳ�����ˣ����󲿷ֵĵط��Ĳ�Ʒ���й�ͬ�ص㣬Ҫô����Ҫ�ۣ�Ҫô������������ô��������ô����������������Ʒ��Ь��?�����˽⵽������רҵ��B2CЬ������һƥ�����ӳ����������Ь��www.haoxie.net��������һ��֮�ʳɹ�������ҵ5ǿ�����С�Ʒ���ۿ���������������ϲ������Ʒ����������������������Ь!���Ь������ҵ�Ļ���ı���ϣ�������һ���ĺ�Ь����ƽ̨�������ܹ�������ȫ�µĹ�Ь���飬ȫ�µ����Ѹ��ܡ�</span><br style=\"color:#333333;font-family:����;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\" />\r\n<br style=\"color:#333333;font-family:����;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\" />\r\n<span style=\"color:#333333;font-family:����;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\">������Ь��www.haoxie.net��2011�������������һ��ķ�չ����ȻӮ���������˿�Ⱥ�������������Ҫ�Ƿ���Ь����Թ˿͵���ҵģʽ��������ȫ��ͬ���ǳ�֪����Ʒ�ơ�����Ʒ��ЬԴ������������ǿ���ۿۡ�����Ǻ�Ь��ǿ���������˿͵ķ�ʽ��Ҳ��Ϊʲô��Ь�Ĺ˿ͻ�ѡ���Ь��վ��ԭ�򡣱���û��Ь?�Ǿ��Ϻ�Ь�������͵��ۿ����Ь!���ں�Ь����ƽ̨���ڵ߸�������õĹ��</span><br style=\"color:#333333;font-family:����;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\" />\r\n<br style=\"color:#333333;font-family:����;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\" />\r\n<span style=\"color:#333333;font-family:����;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\">�������ʱ�����ǵ����ʽ��Ȼ�����˺ܴ�ı䣬������ʵ�������۷�ʽ�������У���������ǰ�ص����������������ǲ����̻��ĵط�����������Ҳ��֪�������ںܶ��������������������Ҳ���൱�ļ��ҵģ���Ҫ�����п���ת���������Ǳز����ٵģ��������ܵ������������ĺ�Ь��www.haoxie.net��ӱ���������ڶ����������Ŀ���Ѿ����������õ�������������Ь�ӵ����ȥ������Դ�㽭����)</span>','','','2013-09-29 07:23:32','2013-09-29 09:25:14','2','1','0');
INSERT INTO ruanwen_info VALUES('108','vip05','vip02','0','2013092990375','��Ь������Ь��ѡ�񣬵ͼ����Ь','�й������ձ���','','150','<span style=\"color:#333333;font-family:����;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\">������������һ��������ϲ���Ĺ��﷽ʽ������Ь�������Ҳ��һ�������������Ŀ����Ь�̣����������е�������Ҳ�����ˣ����󲿷ֵĵط��Ĳ�Ʒ���й�ͬ�ص㣬Ҫô����Ҫ�ۣ�Ҫô������������ô��������ô����������������Ʒ��Ь��?�����˽⵽������רҵ��B2CЬ������һƥ�����ӳ����������Ь��www.haoxie.net��������һ��֮�ʳɹ�������ҵ5ǿ�����С�Ʒ���ۿ���������������ϲ������Ʒ����������������������Ь!���Ь������ҵ�Ļ���ı���ϣ�������һ���ĺ�Ь����ƽ̨�������ܹ�������ȫ�µĹ�Ь���飬ȫ�µ����Ѹ��ܡ�</span><br style=\"color:#333333;font-family:����;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\" />\r\n<br style=\"color:#333333;font-family:����;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\" />\r\n<span style=\"color:#333333;font-family:����;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\">������Ь��www.haoxie.net��2011�������������һ��ķ�չ����ȻӮ���������˿�Ⱥ�������������Ҫ�Ƿ���Ь����Թ˿͵���ҵģʽ��������ȫ��ͬ���ǳ�֪����Ʒ�ơ�����Ʒ��ЬԴ������������ǿ���ۿۡ�����Ǻ�Ь��ǿ���������˿͵ķ�ʽ��Ҳ��Ϊʲô��Ь�Ĺ˿ͻ�ѡ���Ь��վ��ԭ�򡣱���û��Ь?�Ǿ��Ϻ�Ь�������͵��ۿ����Ь!���ں�Ь����ƽ̨���ڵ߸�������õĹ��</span><br style=\"color:#333333;font-family:����;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\" />\r\n<br style=\"color:#333333;font-family:����;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\" />\r\n<span style=\"color:#333333;font-family:����;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\">�������ʱ�����ǵ����ʽ��Ȼ�����˺ܴ�ı䣬������ʵ�������۷�ʽ�������У���������ǰ�ص����������������ǲ����̻��ĵط�����������Ҳ��֪�������ںܶ��������������������Ҳ���൱�ļ��ҵģ���Ҫ�����п���ת���������Ǳز����ٵģ��������ܵ������������ĺ�Ь��www.haoxie.net��ӱ���������ڶ����������Ŀ���Ѿ����������õ�������������Ь�ӵ����ȥ������Դ�㽭����)</span>','','','2013-09-29 07:23:32','','1','0','0');
INSERT INTO ruanwen_info VALUES('109','admin','','0','2013092983583','��Ь������Ь��ѡ�񣬵ͼ����Ь','�й������ձ���','','130','<span style=\"color:#333333;font-family:����;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\">������������һ��������ϲ���Ĺ��﷽ʽ������Ь�������Ҳ��һ�������������Ŀ����Ь�̣����������е�������Ҳ�����ˣ����󲿷ֵĵط��Ĳ�Ʒ���й�ͬ�ص㣬Ҫô����Ҫ�ۣ�Ҫô������������ô��������ô����������������Ʒ��Ь��?�����˽⵽������רҵ��B2CЬ������һƥ�����ӳ����������Ь��www.haoxie.net��������һ��֮�ʳɹ�������ҵ5ǿ�����С�Ʒ���ۿ���������������ϲ������Ʒ����������������������Ь!���Ь������ҵ�Ļ���ı���ϣ�������һ���ĺ�Ь����ƽ̨�������ܹ�������ȫ�µĹ�Ь���飬ȫ�µ����Ѹ��ܡ�</span><br style=\"color:#333333;font-family:����;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\" />\r\n<br style=\"color:#333333;font-family:����;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\" />\r\n<span style=\"color:#333333;font-family:����;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\">������Ь��www.haoxie.net��2011�������������һ��ķ�չ����ȻӮ���������˿�Ⱥ�������������Ҫ�Ƿ���Ь����Թ˿͵���ҵģʽ��������ȫ��ͬ���ǳ�֪����Ʒ�ơ�����Ʒ��ЬԴ������������ǿ���ۿۡ�����Ǻ�Ь��ǿ���������˿͵ķ�ʽ��Ҳ��Ϊʲô��Ь�Ĺ˿ͻ�ѡ���Ь��վ��ԭ�򡣱���û��Ь?�Ǿ��Ϻ�Ь�������͵��ۿ����Ь!���ں�Ь����ƽ̨���ڵ߸�������õĹ��</span><br style=\"color:#333333;font-family:����;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\" />\r\n<br style=\"color:#333333;font-family:����;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\" />\r\n<span style=\"color:#333333;font-family:����;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\">�������ʱ�����ǵ����ʽ��Ȼ�����˺ܴ�ı䣬������ʵ�������۷�ʽ�������У���������ǰ�ص����������������ǲ����̻��ĵط�����������Ҳ��֪�������ںܶ��������������������Ҳ���൱�ļ��ҵģ���Ҫ�����п���ת���������Ǳز����ٵģ��������ܵ������������ĺ�Ь��www.haoxie.net��ӱ���������ڶ����������Ŀ���Ѿ����������õ�������������Ь�ӵ����ȥ������Դ�㽭����)</span>','','','2013-09-29 07:45:12','','0','0','0');
INSERT INTO ruanwen_info VALUES('110','admin','','0','2013092919654','��Ь������Ь��ѡ�񣬵ͼ����Ь','�й������ձ���','','130','<span style=\"color:#333333;font-family:����;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\">������������һ��������ϲ���Ĺ��﷽ʽ������Ь�������Ҳ��һ�������������Ŀ����Ь�̣����������е�������Ҳ�����ˣ����󲿷ֵĵط��Ĳ�Ʒ���й�ͬ�ص㣬Ҫô����Ҫ�ۣ�Ҫô������������ô��������ô����������������Ʒ��Ь��?�����˽⵽������רҵ��B2CЬ������һƥ�����ӳ����������Ь��www.haoxie.net��������һ��֮�ʳɹ�������ҵ5ǿ�����С�Ʒ���ۿ���������������ϲ������Ʒ����������������������Ь!���Ь������ҵ�Ļ���ı���ϣ�������һ���ĺ�Ь����ƽ̨�������ܹ�������ȫ�µĹ�Ь���飬ȫ�µ����Ѹ��ܡ�</span><br style=\"color:#333333;font-family:����;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\" />\r\n<br style=\"color:#333333;font-family:����;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\" />\r\n<span style=\"color:#333333;font-family:����;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\">������Ь��www.haoxie.net��2011�������������һ��ķ�չ����ȻӮ���������˿�Ⱥ�������������Ҫ�Ƿ���Ь����Թ˿͵���ҵģʽ��������ȫ��ͬ���ǳ�֪����Ʒ�ơ�����Ʒ��ЬԴ������������ǿ���ۿۡ�����Ǻ�Ь��ǿ���������˿͵ķ�ʽ��Ҳ��Ϊʲô��Ь�Ĺ˿ͻ�ѡ���Ь��վ��ԭ�򡣱���û��Ь?�Ǿ��Ϻ�Ь�������͵��ۿ����Ь!���ں�Ь����ƽ̨���ڵ߸�������õĹ��</span><br style=\"color:#333333;font-family:����;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\" />\r\n<br style=\"color:#333333;font-family:����;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\" />\r\n<span style=\"color:#333333;font-family:����;font-size:14px;line-height:24px;text-align:left;background-color:#e7f0f7;\">�������ʱ�����ǵ����ʽ��Ȼ�����˺ܴ�ı䣬������ʵ�������۷�ʽ�������У���������ǰ�ص����������������ǲ����̻��ĵط�����������Ҳ��֪�������ںܶ��������������������Ҳ���൱�ļ��ҵģ���Ҫ�����п���ת���������Ǳز����ٵģ��������ܵ������������ĺ�Ь��www.haoxie.net��ӱ���������ڶ����������Ŀ���Ѿ����������õ�������������Ь�ӵ����ȥ������Դ�㽭����)</span>','','','2013-09-29 07:59:32','','0','0','0');
INSERT INTO ruanwen_info VALUES('111','admin','','0','2013092971270','����������������������','����������','http://www.sina.com.cn','30','1','','','2013-09-29 08:13:19','2013-09-29 10:01:56','2','1','0');
INSERT INTO ruanwen_info VALUES('112','admin','vip02','0','2013092919107','�����ܻ� ��ͼ��������DIYװ����ս����������','�й������ձ���','','130','','','','2013-09-29 08:19:30','','0','0','0');
INSERT INTO ruanwen_info VALUES('113','admin','vip02','0','2013092919107','�����ܻ� ��ͼ��������DIYװ����ս����������','����������','','30','','�����������������ݡ�','','2013-09-29 08:19:30','2013-09-29 10:00:48','3','0','0');
INSERT INTO ruanwen_info VALUES('114','vip01','','140','2013092960067','��д������˾����������','�й������ձ���','','150','','���ݺ����������ԣ���������','','2013-09-29 08:32:55','2013-09-29 10:05:49','3','0','0');
INSERT INTO ruanwen_info VALUES('115','admin','vip02','140','2013092941802','12313123','�й������ձ���','','130','','���ܷ��������¡�','','2013-09-29 08:46:56','2013-09-29 10:06:43','3','0','0');
INSERT INTO ruanwen_info VALUES('116','vip01','vip02','140','2013092933453','�Ŵ�ʦ��','�й������ձ���','','150','','','','2013-09-29 08:47:25','','0','0','0');
INSERT INTO ruanwen_info VALUES('117','vip05','vip02','140','2013092931071','ok0410410','�й������ձ���','','200','','','','2013-09-29 08:48:10','','0','0','0');
INSERT INTO ruanwen_info VALUES('118','admin','vip02','133','2013092918517','������������','����������','','30','','','','2013-09-29 09:08:55','','0','0','0');
INSERT INTO ruanwen_info VALUES('119','admin','vip02','140','2013092918517','������������','�й������ձ���','','130','','','','2013-09-29 09:08:55','','0','0','0');
INSERT INTO ruanwen_info VALUES('120','admin','vip02','133','2013092946142','������������','����������','','30','','','','2013-09-29 09:10:34','','0','0','0');
INSERT INTO ruanwen_info VALUES('121','vip01','vip02','133','2013092912298','�Ŵ�ʦ��','����������','','60','','','','2013-09-29 09:11:19','','0','0','0');
INSERT INTO ruanwen_info VALUES('122','vip01','vip02','140','2013092912298','�Ŵ�ʦ��','�й������ձ���','','150','','','','2013-09-29 09:11:19','','0','0','0');
INSERT INTO ruanwen_info VALUES('123','vip01','vip02','133','2013092928704','�Ŵ�ʦ��','����������','','60','','','','2013-09-29 09:11:37','','1','0','0');
INSERT INTO ruanwen_info VALUES('124','vip05','vip02','133','2013092992320','��д��������','����������','http://www.hongmuchuan.com','120','','','','2013-09-29 09:12:27','2013-10-04 08:22:58','2','1','0');
INSERT INTO ruanwen_info VALUES('125','vip05','vip02','140','2013092992320','��д��������','�й������ձ���','http://www.hongmuchuan.com','200','','','','2013-09-29 09:12:27','2013-10-04 08:05:40','2','1','0');
INSERT INTO ruanwen_info VALUES('126','vip05','vip02','133','2013092924883','��д��������','����������','http://www.1451.com/','120','','','','2013-09-29 09:12:47','2013-10-04 08:17:31','2','1','0');
INSERT INTO ruanwen_info VALUES('127','admin','','146','2014012178334','123','BC24234','http://www.123.com/','30','','','','2014-01-21 07:49:44','2014-01-21 07:53:10','2','0','0');
INSERT INTO ruanwen_info VALUES('128','admin','','146','2014012190527','134564','BC24234','http://www.123.com/','30','','','','2014-01-21 08:13:51','2014-01-21 20:17:29','2','0','0');

DROP TABLE IF EXISTS shequ_info;
CREATE TABLE `shequ_info` (
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
) ENGINE=MyISAM AUTO_INCREMENT=131 DEFAULT CHARSET=gb2312;

INSERT INTO shequ_info VALUES('129','vip01','','154','2013101498868','��Ь������Ь��ѡ�񣬵ͼ����Ь','��Ѷ����','','120','��Ь������Ь��ѡ�񣬵ͼ����Ь','����Υ��','','2013-10-14 05:06:57','2013-10-14 06:08:49','3','0','0');
INSERT INTO shequ_info VALUES('130','vip01','','153','2013101498868','��Ь������Ь��ѡ�񣬵ͼ����Ь','��������','http://www.345234.com/','80','��Ь������Ь��ѡ�񣬵ͼ����Ь','','','2013-10-14 05:06:57','2013-10-14 06:07:51','2','1','0');

DROP TABLE IF EXISTS shuijun_info;
CREATE TABLE `shuijun_info` (
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
) ENGINE=MyISAM AUTO_INCREMENT=131 DEFAULT CHARSET=gb2312;

INSERT INTO shuijun_info VALUES('129','vip01','','164','2013101465014','��д������˾����������','��Ѷ��ͨˮ��','','120','��д������˾����������','���ݲ����Ϲ涨��','','2013-10-14 07:07:11','2013-10-14 07:19:35','3','0','0');
INSERT INTO shuijun_info VALUES('130','vip01','','162','2013101465014','��д������˾����������','������ͨˮ��','http://www.qq.com/','180','��д������˾����������','','','2013-10-14 07:07:11','2013-10-14 07:18:50','2','1','0');

DROP TABLE IF EXISTS tixian;
CREATE TABLE `tixian` (
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
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=94 DEFAULT CHARSET=gb2312;

INSERT INTO tixian VALUES('82','vip02','2013100285371','��������','googlesem@foxmail.com','500','������תָ��֧�����˺ţ���ע�⼰ʱ���ա�','2013-10-02 03:09:17','2013-10-16 05:52:57','2','0','0');
INSERT INTO tixian VALUES('83','vip02','2013100221609','��������','5045222@qq.com','300','������תָ��֧�����˺ţ���ע�⼰ʱ���ա�','2013-10-02 03:48:54','2013-10-10 20:34:34','2','1','0');
INSERT INTO tixian VALUES('84','vip02','2013100293232','��������','5515122@qq.com','380','','2013-10-02 04:50:29','','1','0','0');
INSERT INTO tixian VALUES('85','vip02','2013101651127','��������','123543@126.com','100','������תָ��֧�����˺ţ���ע�⼰ʱ���ա�','2013-10-16 03:03:18','2013-10-16 05:34:34','2','0','0');
INSERT INTO tixian VALUES('86','vip02','2013101641931','��������','5045222@qq.com','100','','2013-10-16 04:55:00','','0','0','0');
INSERT INTO tixian VALUES('87','vip02','2013101633365','��������','5045222@qq.com','100','','2013-10-16 05:09:25','','0','0','0');
INSERT INTO tixian VALUES('88','vip02','2013102169265','��������','5424040420','10','','2013-10-21 10:26:23','','0','0','0');
INSERT INTO tixian VALUES('89','vip02','2013102132310','��������','sdfsdgdsg','10','','2013-10-21 10:26:42','','0','0','0');
INSERT INTO tixian VALUES('90','vip02','2013102141530','��������','123543@126.com','10','','2013-10-21 10:26:59','','0','0','0');
INSERT INTO tixian VALUES('91','vip02','2013102166642','��������','123543@126.com','10','','2013-10-21 10:26:59','','0','0','0');
INSERT INTO tixian VALUES('92','vip02','2013102120623','��������','5045222@qq.com','10','','2013-10-21 10:27:31','','0','0','0');
INSERT INTO tixian VALUES('93','vip02','2013102137523','��������','ldl-45545@126.com','10','','2013-10-21 10:28:03','','0','0','0');

DROP TABLE IF EXISTS user;
CREATE TABLE `user` (
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
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=gb2312;

INSERT INTO user VALUES('1','vip01','e10adc3949ba59abbe56e057f20f883e','','2245849708','13261853069','2245849708@qq.com','http://www.hongmuchuan.com','1','127.0.0.1','2013-09-18 02:08:36','2014-01-23 09:40:07','317','0','../upload/headpic/1380287708.bmp');
INSERT INTO user VALUES('2','vip02','e10adc3949ba59abbe56e057f20f883e','','','','','','2','127.0.0.1','2013-09-18 02:08:36','2014-01-23 09:40:38','780','530','../images/headpic.gif');
INSERT INTO user VALUES('3','vip03','e10adc3949ba59abbe56e057f20f883e','','50652132','13261853069','sybase188@126.com','http://www.hongmuchuan.com','2','127.0.0.1','2013-09-18 02:08:36','2014-01-22 08:15:41','500','0','../images/headpic.gif');
INSERT INTO user VALUES('8','vip06','e10adc3949ba59abbe56e057f20f883e','','245554121','1312045120','vip06@qq.com','http://www.13568454.com','3','127.0.0.1','2013-09-28 07:10:54','2013-09-28 07:11:23','0','0','../images/headpic.gif');
INSERT INTO user VALUES('4','vip04','e10adc3949ba59abbe56e057f20f883e','','551144','1380000245','vip04@126.com','http://www.hongmuchuan.com','2','127.0.0.1','2013-09-18 11:57:03','2014-01-22 08:16:11','933','0','../upload/headpic/1380285647.bmp');
INSERT INTO user VALUES('5','vip05','e10adc3949ba59abbe56e057f20f883e','','500154120','1380000001','vip05@126.com','http://www.hongmuchuan.com','3','127.0.0.1','2013-09-23 01:47:59','2013-10-21 03:00:03','40','0','../images/headpic.gif');
INSERT INTO user VALUES('6','111111','96e79218965eb72c92a549dd5a330112','','111111','111111','111111@qq.com','http://www.111111.com','3','127.0.0.1','2013-09-25 02:05:35','2013-09-25 02:05:48','0','0','../images/headpic.gif');
INSERT INTO user VALUES('7','222222','e3ceb5881a0a1fdaad01296d7554868d','','222222','222222','222222@qq.com','http://www.222222.com','2','127.0.0.1','2013-09-25 02:07:15','2013-09-25 02:07:27','0','0','../images/headpic.gif');
INSERT INTO user VALUES('9','vip07','e10adc3949ba59abbe56e057f20f883e','','155541212','22116458','vip07@qq.com','http://www.2352345.com','3','','2013-09-28 07:19:13','','0','0','../images/headpic.gif');
INSERT INTO user VALUES('10','vip08','e10adc3949ba59abbe56e057f20f883e','','12154454','151555454','vip08@qq.com','http://www.252354.com','3','','2013-09-28 07:22:27','','0','0','../images/headpic.gif');
INSERT INTO user VALUES('11','vip09','e10adc3949ba59abbe56e057f20f883e','','1545454','155454554','vip09@qq.com','http://www.52345.com','3','','2013-09-28 07:35:11','','0','0','../images/headpic.gif');
INSERT INTO user VALUES('12','vip10','e10adc3949ba59abbe56e057f20f883e','','11565','134648410','vip10@qq.com','http://www.5759.com','3','','2013-09-28 07:48:35','','0','0','../images/headpic.gif');
INSERT INTO user VALUES('13','vip11','e10adc3949ba59abbe56e057f20f883e','','5441121','3168/51','5441121@qq.com','http://www.hongmuchuan.com','3','127.0.0.1','2013-10-01 10:29:20','2013-10-03 05:45:03','0','0','../images/headpic.gif');
INSERT INTO user VALUES('14','vip12','e10adc3949ba59abbe56e057f20f883e','','9888922','','2245849708@qq.com','','3','127.0.0.1','2013-10-01 10:48:37','2013-10-01 10:48:37','0','0','../images/headpic.gif');

DROP TABLE IF EXISTS webinfo;
CREATE TABLE `webinfo` (
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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=gb2312;

INSERT INTO webinfo VALUES('2','������','','http://hts.hongmuchuan.com/','������201305541','','������','020-9888922','020-9888922','9888922@qq.com','','9888922','','','13800000001','������','','','','������','','������','','������','','������','','','');

DROP TABLE IF EXISTS wyx_info;
CREATE TABLE `wyx_info` (
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
) ENGINE=MyISAM AUTO_INCREMENT=129 DEFAULT CHARSET=gb2312;

INSERT INTO wyx_info VALUES('127','vip01','','152','2013101469474','����������������������','��Ѷ΢�Ŵ��03','','100','����������������������','�����Ϸ���������','','2013-10-14 02:36:20','2013-10-14 06:07:16','3','0','0');
INSERT INTO wyx_info VALUES('128','vip01','','147','2013101469474','����������������������','����΢�����01','http://www.34423423.com/','100','����������������������','','','2013-10-14 02:36:20','2013-10-14 06:06:25','2','1','0');

