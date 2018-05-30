
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<title>后台管理中心</title>
<link href="../images/reset.css" rel="stylesheet" type="text/css" />
<link href="../images/zh-cn-system.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="../images/jquery.min.js"></script>
<script language="javascript" type="text/javascript" src="../images/styleswitch.js"></script>


<style type="text/css">
html{_overflow-y:scroll}.background{display:block;width:100%;height:100%;opacity:0.4;filter:alpha(opacity=40);background:while;position:absolute;top:0;left:0;z-index:2000;}.progressBar{border:solid 2px #86A5AD;background:white url(progressBar_m.gif) no-repeat 10px 10px;}.progressBar{display:block;width:148px;height:28px;position:fixed;top:50%;left:50%;margin-left:-74px;margin-top:-14px;padding:10px 10px 10px 50px;text-align:left;line-height:27px;font-weight:bold;position:absolute;z-index:2001;}.nextpage{background:#3E5F9B;color:#fff;bottom:0;margin:0px;left:0px;position:fixed;line-height:25px;width:100%;z-index:999;padding-left:10px;_bottom:auto;_width:100%;_position:absolute;font-size:14;padding-left:0px;_top:expression(eval(document.documentElement.scrollTop+document.documentElement.clientHeight-this.offsetHeight-(parseInt(this.currentStyle.marginTop,20)||0)-(parseInt(this.currentStyle.marginBottom,20)||0)));}

.kstd{margin-bottom: 8px;padding-top:80px;margin: 0 auto;width: 700px;}
.kstd a{display:inline-block;width:95px;height:45px;float:left;margin-left:14px;line-height:45px;border-radius:22px;text-align:center;margin-left:42px;margin-right:25px;border:1px solid #2798eb;text-decoration:none;color:#2798eb;font-size:16px;transition:all .4s}
.kstd a:hover{background-color:#2798eb;color:white;}


</style>
    
</head>
<body topmargin="0" bottommargin="0" leftmargin="0" rightmargin="0">


<div class="row-fluid mgt15 kstd">









<a  href="ruanwen_add1.php<?php if($_GET["ID"]!=""){echo "?ID=".$_GET["ID"]."&action=".$_GET["action"];}?>">新闻媒体</a>

<a  href="ruanwen_add2.php<?php if($_GET["ID"]!=""){echo "?ID=".$_GET["ID"]."&action=".$_GET["action"];}?>">自媒体APP</a>
<a  href="ruanwen_add3.php<?php if($_GET["ID"]!=""){echo "?ID=".$_GET["ID"]."&action=".$_GET["action"];}?>">微信公众号</a>
<a  href="ruanwen_add4.php<?php if($_GET["ID"]!=""){echo "?ID=".$_GET["ID"]."&action=".$_GET["action"];}?>">新浪微博</a>


</div>

</body>
</html>