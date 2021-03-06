<?php
include("../include/config.php");
include("../include/function.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML xmlns="http://www.w3.org/1999/xhtml">
<HEAD>
<TITLE>危机公关 - 软文街（RuanWen.La）</TITLE>
<META content="text/html; charset=utf-8" http-equiv=Content-Type>
<LINK rel=stylesheet type=text/css href="../images/index.css">
<LINK rel=stylesheet type=text/css href="../images/css.css">
<LINK rel=icon type=image/x-icon href="../images/favicon.ico">
<STYLE type=text/css>#main {
	MARGIN: 30px auto 10px; WIDTH: 1000px; OVERFLOW: hidden
}
#main .service {
	OVERFLOW: hidden
}
#main .service UL {
	OVERFLOW: hidden
}
#main .service UL LI {
	MARGIN: 0px 10px; WIDTH: 230px; FLOAT: left
}
#main .service UL LI IMG {
	WIDTH: 224px; HEIGHT: 134px
}
#main .service UL LI A.title {
	TEXT-ALIGN: center; PADDING-BOTTOM: 12px; LINE-HEIGHT: 32px; DISPLAY: block; FONT-FAMILY: "微软雅黑"; HEIGHT: 32px; COLOR: #000; FONT-SIZE: 22px
}
#main .service UL LI A.title:hover {
	BACKGROUND: url(../images/service_title.jpg) no-repeat center 5px; COLOR: #ff3200
}
#main .service UL LI A.p209.title:hover {
	BACKGROUND: url(../images/service_title_l.jpg) no-repeat center 5px
}
#main .service UL LI A.img {
	BORDER-BOTTOM: #ccc 1px solid; TEXT-ALIGN: center; BORDER-LEFT: #ccc 1px solid; PADDING-BOTTOM: 2px; PADDING-LEFT: 2px; PADDING-RIGHT: 2px; DISPLAY: block; HEIGHT: 134px; BORDER-TOP: #ccc 1px solid; BORDER-RIGHT: #ccc 1px solid; PADDING-TOP: 2px
}
#main .service UL LI A.img:hover {
	PADDING-BOTTOM: 1px; PADDING-LEFT: 1px; PADDING-RIGHT: 1px; PADDING-TOP: 1px
}
#main .service UL LI A.p208.img:hover {
	BORDER-BOTTOM: #1aada9 2px solid; BORDER-LEFT: #1aada9 2px solid; BORDER-TOP: #1aada9 2px solid; BORDER-RIGHT: #1aada9 2px solid
}
#main .service UL LI A.p209.img:hover {
	BORDER-BOTTOM: #d54b19 2px solid; BORDER-LEFT: #d54b19 2px solid; BORDER-TOP: #d54b19 2px solid; BORDER-RIGHT: #d54b19 2px solid
}
#main .service UL LI A.p210.img:hover {
	BORDER-BOTTOM: #a4ac07 2px solid; BORDER-LEFT: #a4ac07 2px solid; BORDER-TOP: #a4ac07 2px solid; BORDER-RIGHT: #a4ac07 2px solid
}
#main .service UL LI A.p232.img:hover {
	BORDER-BOTTOM: #f3922b 2px solid; BORDER-LEFT: #f3922b 2px solid; BORDER-TOP: #f3922b 2px solid; BORDER-RIGHT: #f3922b 2px solid
}
#main .service UL LI SPAN {
	PADDING-BOTTOM: 10px; LINE-HEIGHT: 20px; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; DISPLAY: block; COLOR: #999; OVERFLOW: hidden; PADDING-TOP: 10px
}
.blk1 {
	CLEAR: both; OVERFLOW: hidden
}
.blk2 {
	CLEAR: both; OVERFLOW: hidden
}
.blk3 {
	CLEAR: both; OVERFLOW: hidden
}
.blk4 {
	CLEAR: both; OVERFLOW: hidden
}
.blk {
	CLEAR: both; OVERFLOW: hidden
}
.blk1 {
	HEIGHT: 5px
}
.blk2 {
	HEIGHT: 10px
}
.blk3 {
	HEIGHT: 15px
}
.blk4 {
	HEIGHT: 20px
}
.blk {
	HEIGHT: 65px
}
A.applink:hover {
	BORDER-BOTTOM: #dce6f4 2px dotted; BORDER-LEFT: #dce6f4 2px dotted; PADDING-BOTTOM: 2px; BACKGROUND-COLOR: #ffff00; PADDING-LEFT: 2px; PADDING-RIGHT: 2px; COLOR: green; BORDER-TOP: #dce6f4 2px dotted; BORDER-RIGHT: #dce6f4 2px dotted; TEXT-DECORATION: none; PADDING-TOP: 2px
}
A.applink {
	BORDER-BOTTOM: #dce6f4 2px dotted; BORDER-LEFT: #dce6f4 2px dotted; PADDING-BOTTOM: 2px; PADDING-LEFT: 2px; PADDING-RIGHT: 2px; BACKGROUND: none transparent scroll repeat 0% 0%; COLOR: #2f5bff; BORDER-TOP: #dce6f4 2px dotted; BORDER-RIGHT: #dce6f4 2px dotted; TEXT-DECORATION: none; PADDING-TOP: 2px
}
A.info {
	BACKGROUND: none transparent scroll repeat 0% 0%; COLOR: #2f5bff; TEXT-DECORATION: none
}
A.info:hover {
	BACKGROUND: none transparent scroll repeat 0% 0%; COLOR: green; TEXT-DECORATION: underline
}
.mainnav {
	WIDTH: 100%; BACKGROUND: #08a5e0; HEIGHT: 40px
}
.mainnav .nav {
	MARGIN: 0px auto; WIDTH: 980px
}
.mainnav .nav .current-post-ancestor {
	BACKGROUND: #40bbec
}
.mainnav .nav .current-menu-ancestor {
	BACKGROUND: #40bbec
}
.mainnav .nav .current-menu-parent {
	BACKGROUND: #40bbec
}
.mainnav .nav .current-menu-item {
	BACKGROUND: #40bbec
}
.mainnav .nav UL {
	Z-INDEX: 999; POSITION: relative; FLOAT: left; HEIGHT: 100%
}
.mainnav .nav LI {
	TEXT-ALIGN: center; WIDTH: 100px; DISPLAY: inline; FLOAT: left; HEIGHT: 40px; MARGIN-RIGHT: 1px; TEXT-DECORATION: none
}
.mainnav .nav LI A {
	PADDING-BOTTOM: 0px; LINE-HEIGHT: 40px; PADDING-LEFT: 15px; PADDING-RIGHT: 15px; DISPLAY: block; COLOR: #fff; FONT-SIZE: 16px; PADDING-TOP: 0px
}
.mainnav .nav LI A:link {
	PADDING-BOTTOM: 0px; LINE-HEIGHT: 40px; PADDING-LEFT: 15px; PADDING-RIGHT: 15px; DISPLAY: block; COLOR: #fff; FONT-SIZE: 16px; PADDING-TOP: 0px
}
.mainnav .nav LI A:visited {
	PADDING-BOTTOM: 0px; LINE-HEIGHT: 40px; PADDING-LEFT: 15px; PADDING-RIGHT: 15px; DISPLAY: block; COLOR: #fff; FONT-SIZE: 16px; PADDING-TOP: 0px
}
.mainnav .nav LI A:active {
	PADDING-BOTTOM: 0px; LINE-HEIGHT: 40px; PADDING-LEFT: 15px; PADDING-RIGHT: 15px; DISPLAY: block; COLOR: #fff; FONT-SIZE: 16px; PADDING-TOP: 0px
}
.mainnav .nav UL LI UL {
	Z-INDEX: 999; POSITION: absolute; FILTER: alpha(opacity=90); WIDTH: 158px; DISPLAY: none; BACKGROUND: #08a5e0; HEIGHT: auto; BORDER-TOP: #fff 1px solid; opacity: .9; -moz-opacity: .9
}
.mainnav .nav UL LI UL LI {
	BORDER-BOTTOM: #fff 1px solid; TEXT-ALIGN: left; PADDING-BOTTOM: 0px; PADDING-LEFT: 0px; WIDTH: 158px; PADDING-RIGHT: 0px; DISPLAY: block; BACKGROUND: none transparent scroll repeat 0% 0%; FLOAT: left; PADDING-TOP: 0px
}
.mainnav .nav UL LI UL LI A {
	LINE-HEIGHT: 24px; WIDTH: 128px; DISPLAY: block; FLOAT: none; FONT-SIZE: 12px
}
.mainnav .nav LI A:hover {
	BACKGROUND: #ffbf4b
}
.mainnav .nav UL LI UL LI A:hover {
	BACKGROUND: #ffbf4b
}
</STYLE>

<META name=GENERATOR content="MSHTML 8.00.6001.19394">
</HEAD>
<BODY>
<link rel="stylesheet" href="/style/css/common.css" type="text/css" />
<?php
include("../menu.php");
?>
<DIV class=blk2></DIV>
<CENTER><IMG alt=软文推广账号 src="../images/prbanner1.jpg" width=980 
height=277></CENTER>
<DIV class=blk2></DIV>
<DIV id=main>
<DIV class=service>
<UL>
  <LI><A class="title p232">舆情监测</A><A class="img p232"><IMG 
  src="../images/pr1.jpg"></A><SPAN>舆情监测是指整合互联网信息采集技术及信息智能处理技术通过对互联网海量信息自动抓取、自动分类聚类、主题检测、专题聚焦，实现用户的网络舆情监测和新闻...</SPAN></LI>
  <LI><A class="title p209">网络危机处理</A><A class="img p209"><IMG 
  src="../images/pr2.jpg"></A><SPAN>由于企业质量不达标、同行恶性竞争或受外界突发性事件影响，而给企业带来的危机，企业针对网络负面所采取的一系列自救行动，包括消除影响、恢复形象...</SPAN></LI>
  <LI><A class="title p210">品牌维护</A><A class="img p210"><IMG 
  src="../images/pr3.jpg"></A><SPAN>品牌维护是品牌战略实施中的一项重要的工作。在市场经济的环境下，一个良好的品牌形象是一个企业在激烈竞争中强有力的资本。竞争是残酷的，俗话说...</SPAN></LI>
  <LI><A class="title p208">新闻发稿</A><A class="img p208"><IMG 
  src="../images/pr4.jpg"></A><SPAN>随着时代的进步和社会的发展，传统的“硬广告”越来越使广大消费者感觉到眼球疲劳，而“软文”的出线正好弥补了“硬广告”的不足。再客观说明...</SPAN></LI></UL></DIV></DIV>
<DIV class=blk2></DIV>
<CENTER><IMG alt=软文推广账号 src="../images/prkh.jpg" width=980 height=430></CENTER>
<?php
include("footer.php");
?>
</BODY>
</HTML>
