<?php
include("../include/config.php");
include("../include/function.php");
$ID=$_REQUEST["ID"];
$sqlN="select * from news_info where ID=".$ID."";
$resultN=mysql_db_query($dbname,$sqlN);
$rsN=mysql_fetch_array($resultN);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<TITLE><?php echo $rsN["title"];?>_<?php echo $webname;?></TITLE>
<META content="text/html; charset=UTF-8" http-equiv=Content-Type>
<LINK rel=stylesheet type=text/css href="../images/index.css">
<LINK rel=stylesheet type=text/css href="../images/css.css">
<link href="../images/ruanwen.css" rel="stylesheet" media="screen" type="text/css">
<META name=GENERATOR content="MSHTML 8.00.6001.19394">
<style>
.timea{
	text-align: center;
    font-size: 12px;
    color: #A9A7A7;
    border-bottom: 1px dashed #CEC9C9;
    margin-top: 10px;
    padding-bottom: 10px;
	}
.infoa {}
#content .post-content .infoa P{text-indent: 0;border-bottom: 1px dashed #CEC9C9;MARGIN: 5px 0px 5px;}
#content .post-content .infoa P strong{font-size: 14px;}
#content .post-content DIV.infoa{padding:0px;margin:0px;}
</style>
</head>
<body class="articleview">
<div class="header clearfix">
  <link rel="stylesheet" href="/style/css/common.css" type="text/css" />
<?php
include("../menu.php");
?>
</div>
<div id="wrapmain">
  <div class="maincont clearfix">
    <div class="adct corner5px mb15 clearfix" id="adt"><img src="./images/banner.jpg" width="980" height="279"></div>
    <div class="wrapindex clearfix">
      <div class="homeleft corner5px mb15">
        <div class="position">当前位置：<a href="../">网站主页</a> &gt; <a href="../news/news.php">资讯中心</a></div>
        <div class="b2"></div>
        <div class="clearfix" id="content">
          <div class="post-title">
            <h1><?php echo $rsN["title"];?></h1>
          </div>
          <div class="clearfix"></div>
		 <div class='timea'>发布时间:<?php echo $rsN["data"];?> 来源:<?php echo $rsN["entitle"];?></div>
		
		  <div class="post-content clearfix">
		  
	
	<!--	 <div class='infoa'>
		 
	
		 <p><strong>发布媒体：<?php echo $rsN["meiti"];?></strong></p>
		 <p><strong>成功链接：<a href='<?php echo $rsN["url"];?>' target='_blank'><?php echo $rsN["url"];?></a></strong></p>
		 </div>   -->

		 
		 
		 
		  <?php echo $rsN["content"];?></div>
		  <HR color=#e5e5e5 SIZE=1 width="100%">
<?php
$sql1="select * from news_info where ID>".$ID." order by ID asc limit 0,1";
$result1=mysql_db_query($dbname,$sql1);
	if(mysql_num_rows($result1))
	{
		$rs1 = mysql_fetch_array($result1);
		$PID1=$rs1["ID"];
		//$class_id1=$rs1["class_id"];
		$title1=$rs1["title"];
		$previous_post="<strong>上一篇：</strong><a title='".$title1."' href='../news/newsinfo.php?ID=".$PID1."'>".$title1."</a>";
	}
	else
	{
		$previous_post="<strong>上一篇：</strong>没有了";
	}

$sql2="select * from news_info where ID<".$ID." order by ID desc limit 0,1";
$result2=mysql_db_query($dbname,$sql2);
	if(mysql_num_rows($result2))
	{
		$rs2 = mysql_fetch_array($result2);
		$PID2=$rs2["ID"];
		//$class_id2=$rs2["class_id"];
		$title2=$rs2["title"];
		$next_post="<strong>下一篇：</strong><a title='".$title2."' href='../news/newsinfo.php?ID=".$PID2."'>".$title2."</a>";
	}
	else
	{
		$next_post="<strong>下一篇：</strong>没有了";
	}
?>
<DIV><?php echo $previous_post;?><BR><?php echo $next_post;?></DIV>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
include("footer.php");
?>
</body>
</html>