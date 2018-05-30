<?php
include("../include/config.php");
include("../include/function.php");

?>
<?php
/*-----------------接收相关数据值---------------------*/
$Page=@$_REQUEST["Page"];
$skey=@$_REQUEST["skey"];
$key=@$_REQUEST["key"];
/*-----------------设置每页显示数目-------------------*/
$List_Num=30;
/*-----------------计算共有记录数--------------------*/
if($key=="")
{
	if($_GET["mc"]<>""){
		$id=$_GET["mc"];
		$sqlN="select Count(*) from media_info where sh=1 and nav_id=46 and medianame like '%".$id."%'";
	}
	elseif($_GET["fl"]<>""){
		$id=$_GET["fl"];
		$sqlN="select Count(*) from media_info where sh=1 and nav_id=46 and class_id=".$id."";
	}
	elseif($_GET["fls"]<>""){
		$id=$_GET["fls"];
		$sqlN="select Count(*) from media_info where sh=1 and nav_id=46 and small_id=".$id."";
	}
	elseif($_GET["lj"]<>""){
		$id=$_GET["lj"];
		$sqlN="select Count(*) from media_info where sh=1 and nav_id=46 and linkurl='".$id."'";
	}
	elseif($_GET["xw"]<>""){
		$id=$_GET["xw"];
		$sqlN="select Count(*) from media_info where sh=1 and nav_id=46 and xinwenyuan='".$id."'";
	}
	elseif($_GET["jg"]<>"" and $_GET["jg"]<>"all"){
		$id=$_GET["jg"];
		switch($_GET["jg"])
			{
			 case "0":
			   $sqlN="select Count(*) from media_info where (scprice between 0 and 40) and sh=1 and nav_id=46";
			   break;
			 case "1":
			   $sqlN="select Count(*) from media_info where (scprice between 41 and 70) and sh=1 and nav_id=46";
			   break;
			 case "2":
			   $sqlN="select Count(*) from media_info where (scprice between 71 and 120) and sh=1 and nav_id=46";
			   break;
			 case "3":
			   $sqlN="select Count(*) from media_info where sh=1 and nav_id=46 and dlprice >120";
			   break;
			 default:
			   $sqlN="select Count(*) from media_info where sh=1 and nav_id=46";
			}
	}
	elseif($_GET["dq"]<>""){
		$id=$_GET["dq"];
		$sqlN="select Count(*) from media_info where sh=1 and nav_id=46 and diqu='".$id."'";
	}
	elseif($_GET["zhmh"]<>""){
		$id=$_GET["zhmh"];
		$sqlN="select Count(*) from media_info where sh=1 and nav_id=46 and zhmh='".$id."'";
	}
	else{
		$sqlN="select Count(*) from media_info where sh=1 and nav_id=46";
	}
}
else
{
	if($_GET["mc"]<>""){
		$id=$_GET["mc"];
		$sqlN="select Count(*) from media_info where sh=1 and nav_id=46 and medianame like '%".$id."%' ".$skey." like '%".$key."%'";
	}
	elseif($_GET["fl"]<>""){
		$id=$_GET["fl"];
		$sqlN="select Count(*) from media_info where sh=1 and nav_id=46 and class_id=".$id." ".$skey." like '%".$key."%'";
	}
	elseif($_GET["fls"]<>""){
		$id=$_GET["fls"];
		$sqlN="select Count(*) from media_info where sh=1 and nav_id=46 and small_id=".$id." ".$skey." like '%".$key."%'";
	}
	elseif($_GET["lj"]<>""){
		$id=$_GET["lj"];
		$sqlN="select Count(*) from media_info where sh=1 and nav_id=46 and linkurl='".$id."' ".$skey." like '%".$key."%'";
	}
	elseif($_GET["xw"]<>""){
		$id=$_GET["xw"];
		$sqlN="select Count(*) from media_info where sh=1 and nav_id=46 and xinwenyuan='".$id."' ".$skey." like '%".$key."%'";
	}
	elseif($_GET["jg"]<>"" and $_GET["jg"]<>"all"){
		$id=$_GET["jg"];
		switch($_GET["jg"])
			{
			 case "0":
			   $sqlN="select Count(*) from media_info where (scprice between 0 and 40) and sh=1 and nav_id=46 ".$skey." like '%".$key."%'";
			   break;
			 case "1":
			   $sqlN="select Count(*) from media_info where (scprice between 41 and 70) and sh=1 and nav_id=46 ".$skey." like '%".$key."%'";
			   break;
			 case "2":
			   $sqlN="select Count(*) from media_info where (scprice between 71 and 120) and sh=1 and nav_id=46 ".$skey." like '%".$key."%'";
			   break;
			 case "3":
			   $sqlN="select Count(*) from media_info where sh=1 and nav_id=46 and dlprice >120 ".$skey." like '%".$key."%'";
			   break;
			 default:
			   $sqlN="select Count(*) from media_info where sh=1 and nav_id=46 ".$skey." like '%".$key."%'";
			}
	}
	elseif($_GET["dq"]<>""){
		$id=$_GET["dq"];
		$sqlN="select Count(*) from media_info where sh=1 and nav_id=46 and diqu='".$id."' ".$skey." like '%".$key."%'";
	}
	elseif($_GET["zhmh"]<>""){
		$id=$_GET["zhmh"];
		$sqlN="select Count(*) from media_info where sh=1 and nav_id=46 and zhmh='".$id."' ".$skey." like '%".$key."%'";
	}
	else{
		$sqlN="select Count(*) from media_info where sh=1 and nav_id=46 ".$skey." like '%".$key."%'";
	}
}
$resultN=mysql_db_query($dbname,$sqlN);
$rsN=mysql_fetch_array($resultN);
$Num=$rsN[0];

/*------------------计算共有页数--------------------*/
$CountPage=ceil($Num/$List_Num);
/*-------------------设置当道页--------------------*/
$Cpage=$Page+1;

if($key=="ser")
{
	if($_GET["fl"]<>""){
		$id=$_GET["fl"];
		$sql="select * from media_info where sh=1 and nav_id=46 and class_id=".$id." order by ID asc limit ".($List_Num*$Page).",".$List_Num."";
	}
	elseif($_GET["fls"]<>""){
		$id=$_GET["fls"];
		$sql="select * from media_info where sh=1 and nav_id=46 and small_id=".$id." order by ID asc limit ".($List_Num*$Page).",".$List_Num."";
	}
	elseif($_GET["lj"]<>""){
		$id=$_GET["lj"];
		$sql="select * from media_info where sh=1 and nav_id=46 and linkurl='".$id."' order by ID asc limit ".($List_Num*$Page).",".$List_Num."";
	}
	elseif($_GET["xw"]<>""){
		$id=$_GET["xw"];
		$sql="select * from media_info where sh=1 and nav_id=46 and xinwenyuan='".$id."' order by ID asc limit ".($List_Num*$Page).",".$List_Num."";
	}
	elseif($_GET["jg"]<>"" and $_GET["jg"]<>"all"){
		$id=$_GET["jg"];
		switch($_GET["jg"])
			{
			 case "0":
			   $sql="select * from media_info where (scprice between 0 and 40) and sh=1 and nav_id=46 order by ID asc limit ".($List_Num*$Page).",".$List_Num."";
			   break;
			 case "1":
			   $sql="select * from media_info where (scprice between 41 and 70) and sh=1 and nav_id=46 order by ID asc limit ".($List_Num*$Page).",".$List_Num."";
			   break;
			 case "2":
			   $sql="select * from media_info where (scprice between 71 and 120) and sh=1 and nav_id=46 order by ID asc limit ".($List_Num*$Page).",".$List_Num."";
			   break;
			 case "3":
			   $sql="select * from media_info where sh=1 and nav_id=46 and dlprice >120 order by ID asc limit ".($List_Num*$Page).",".$List_Num."";
			   break;
			 default:
			   $sql="select * from media_info where sh=1 and nav_id=46 order by ID asc limit ".($List_Num*$Page).",".$List_Num."";
			}
	}
	elseif($_GET["dq"]<>""){
		$id=$_GET["dq"];
		$sql="select * from media_info where sh=1 and nav_id=46 and diqu='".$id."' order by ID asc limit ".($List_Num*$Page).",".$List_Num."";
	}
	elseif($_GET["zhmh"]<>""){
		$id=$_GET["zhmh"];
		$sql="select * from media_info where sh=1 and nav_id=46 and zhmh='".$id."' order by ID asc limit ".($List_Num*$Page).",".$List_Num."";
	}
	else{
	$id=$_GET["mc"];
	$cid=$_GET["cid"];
	$skey=$_GET["skey"];
	switch($skey)
	{
	case "1":
		$ssql="order by dlprice asc";
		break;
	case "2":
		$ssql="order by dlprice desc";
		break;
	case "3":
		$ssql="order by fans asc";
		break;
	case "4":
		$ssql="order by fans desc";
		break;
	default:
		$ssql="order by ID desc";
	}
	if($id==""){
		if($cid==""){
			$sql="select * from media_info where sh=1 and nav_id=46 ".$ssql."";
		}
		else{
			$sql="select * from media_info where sh=1 and nav_id=46 and class_id=".$cid." ".$ssql."";
		}
	}
	else{
		if($cid==""){
			$sql="select * from media_info where sh=1 and nav_id=46 and medianame like '%".$id."%' ".$ssql."";
		}
		else{
			$sql="select * from media_info where sh=1 and nav_id=46 and class_id=".$cid." and medianame like '%".$id."%' ".$ssql."";
		}
	}
}
}
else{
	if($_GET["fl"]<>""){
		$id=$_GET["fl"];
		$sql="select * from media_info where sh=1 and nav_id=46 and class_id=".$id." ".$ssql." limit ".($List_Num*$Page).",".$List_Num."";
	}
	elseif($_GET["fls"]<>""){
		$id=$_GET["fls"];
		$sql="select * from media_info where sh=1 and nav_id=46 and small_id=".$id." ".$ssql." limit ".($List_Num*$Page).",".$List_Num."";
	}
	elseif($_GET["lj"]<>""){
		$id=$_GET["lj"];
		$sql="select * from media_info where sh=1 and nav_id=46 and linkurl='".$id."' ".$ssql." limit ".($List_Num*$Page).",".$List_Num."";
	}
	elseif($_GET["xw"]<>""){
		$id=$_GET["xw"];
		$sql="select * from media_info where sh=1 and nav_id=46 and xinwenyuan='".$id."' ".$ssql." limit ".($List_Num*$Page).",".$List_Num."";
	}
	elseif($_GET["jg"]<>"" and $_GET["jg"]<>"all"){
		$id=$_GET["jg"];
		switch($_GET["jg"])
			{
			 case "0":
			   $sql="select * from media_info where (scprice between 0 and 40) and sh=1 and nav_id=46 ".$ssql." limit ".($List_Num*$Page).",".$List_Num."";
			   break;
			 case "1":
			   $sql="select * from media_info where (scprice between 41 and 70) and sh=1 and nav_id=46 ".$ssql." limit ".($List_Num*$Page).",".$List_Num."";
			   break;
			 case "2":
			   $sql="select * from media_info where (scprice between 71 and 120) and sh=1 and nav_id=46 ".$ssql." limit ".($List_Num*$Page).",".$List_Num."";
			   break;
			 case "3":
			   $sql="select * from media_info where sh=1 and nav_id=46 and dlprice >120 ".$ssql." limit ".($List_Num*$Page).",".$List_Num."";
			   break;
			 default:
			   $sql="select * from media_info where sh=1 and nav_id=46 ".$ssql." limit ".($List_Num*$Page).",".$List_Num."";
			}
	}
	elseif($_GET["dq"]<>""){
		$id=$_GET["dq"];
		$sql="select * from media_info where sh=1 and nav_id=46 and diqu='".$id."' ".$ssql." limit ".($List_Num*$Page).",".$List_Num."";
	}
	elseif($_GET["zhmh"]<>""){
		$id=$_GET["zhmh"];
		$sql="select * from media_info where sh=1 and nav_id=46 and zhmh='".$id."' ".$ssql." limit ".($List_Num*$Page).",".$List_Num."";
	}
	else{
	$id=$_GET["mc"];
	$cid=$_GET["cid"];
	$skey=$_GET["skey"];
	switch($skey)
	{
	case "1":
		$ssql="order by dlprice asc";
		break;
	case "2":
		$ssql="order by dlprice desc";
		break;
	case "3":
		$ssql="order by fans asc";
		break;
	case "4":
		$ssql="order by fans desc";
		break;
	default:
		$ssql="order by ID desc";
	}
	if($id==""){
		if($cid==""){
			$sql="select * from media_info where sh=1 and nav_id=46 ".$ssql."";
		}
		else{
			$sql="select * from media_info where sh=1 and nav_id=46 and class_id=".$cid." ".$ssql."";
		}
	}
	else{
		if($cid==""){
			$sql="select * from media_info where sh=1 and nav_id=46 and medianame like '%".$id."%' ".$ssql."";
		}
		else{
			$sql="select * from media_info where sh=1 and nav_id=46 and class_id=".$cid." and medianame like '%".$id."%' ".$ssql."";
		}
	}
}

}
$result=mysql_db_query($dbname,$sql);

//echo "<script>alert('".$id."');</script>";
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML xmlns="http://www.w3.org/1999/xhtml">
<HEAD>

<title><?php echo $F_Title;?>_<?php echo $webname;?></title>
<meta name="keywords" content="<?php echo $F_KeyWords;?>" />
<meta name="description" content="<?php echo $F_Descr;?>" />
<META content="text/html; charset=UTF-8" http-equiv=Content-Type>
<link href="/css/buttons.css" type="text/css" rel="stylesheet"/>
<LINK rel=stylesheet type=text/css href="../images/reset.css">
<LINK rel=stylesheet type=text/css href="../images/zh-cn-system.css">
<SCRIPT language=javascript type=text/javascript src="../images/jquery.min.js"></SCRIPT>
<STYLE type=text/css>HTML BODY {
	FONT-FAMILY: "微软雅黑"; FONT-SIZE: 14px;line-height: 5px;
}
A {
	COLOR: #000000; CURSOR: pointer; TEXT-DECORATION: none
}
A:hover {
	COLOR: #39c; TEXT-DECORATION: underline
}
.clear {
	HEIGHT: 0px; CLEAR: both; FONT-SIZE: 0px; OVERFLOW: hidden
}
.clearfix:after {
	DISPLAY: block; HEIGHT: 0px; VISIBILITY: hidden; CLEAR: both; CONTENT: "."
}
.clearfix {
	
}
.btlogin {
	WIDTH: 120px; BACKGROUND: url(../images/denglu.gif) no-repeat; HEIGHT: 44px
}
.main {
	MARGIN: 0px auto; WIDTH: 100%; ZOOM: 1; OVERFLOW: hidden
}
.top {
	WIDTH: 100%;  HEIGHT: 75px
}
.head {
	MARGIN: 0px auto; WIDTH: 980px; HEIGHT: 75px
}
.head H1 {
	TEXT-INDENT: 500px; WIDTH: 316px; DISPLAY: block; WHITE-SPACE: nowrap; BACKGROUND: url(../images/logo.png) no-repeat; FLOAT: left; HEIGHT: 75px; OVERFLOW: hidden
}
.daohang {
	LINE-HEIGHT: 38px; FLOAT: right; HEIGHT: 50px; PADDING-TOP: 25px
}
.daohang LI {
	MARGIN: 0px 10px; FLOAT: left
}
.ban {
	POSITION: relative; WIDTH: 100%; BACKGROUND: url(../images/banner_bg.gif) repeat-x; HEIGHT: 340px; _margin-top: -25px
}
.banner {
	MARGIN: 0px auto; WIDTH: 980px; BACKGROUND: url(../images/ban_bg1.png); HEIGHT: 340px
}
.main {
	MARGIN: 0px auto; WIDTH: 980px
}
.main_l {
	PADDING-LEFT: 18px; WIDTH: 580px; PADDING-RIGHT: 37px; FLOAT: left; _padding-right: 27px
}
.foot {
	TEXT-ALIGN: center; LINE-HEIGHT: 30px; WIDTH: 100%; BACKGROUND: url(../images/footBgNew.png) repeat-x; HEIGHT: 100px; FONT-SIZE: 14px; PADDING-TOP: 30px
}
.background {
	Z-INDEX: 2000; POSITION: absolute; FILTER: alpha(opacity=40); WIDTH: 100%; DISPLAY: block; HEIGHT: 100%; TOP: 0px; LEFT: 0px; opacity: 0.4
}
.progressBar {
	BORDER-BOTTOM: #86a5ad 2px solid; BORDER-LEFT: #86a5ad 2px solid; BACKGROUND: url(progressBar_m.gif) white no-repeat 10px 10px; BORDER-TOP: #86a5ad 2px solid; BORDER-RIGHT: #86a5ad 2px solid
}
.progressBar {
	Z-INDEX: 2001; POSITION: absolute; TEXT-ALIGN: left; PADDING-BOTTOM: 10px; LINE-HEIGHT: 27px; MARGIN-TOP: -14px; PADDING-LEFT: 50px; WIDTH: 148px; PADDING-RIGHT: 10px; DISPLAY: block; HEIGHT: 28px; MARGIN-LEFT: -74px; TOP: 50%; FONT-WEIGHT: bold; PADDING-TOP: 10px; LEFT: 50%
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
<DIV class=clear></DIV>
<DIV style="_width: 80.9%; _margin-right: -12px" id=main_frameid class="display">
<DIV class="col-2  col-auto">
<H6>价格查询系统</H6>
<DIV class=content>
<DIV id=flselect>
<TABLE style="BORDER-BOTTOM: #ccc 1px solid; BORDER-LEFT: #ccc 1px solid; PADDING-BOTTOM: 5px; BORDER-TOP: #ccc 1px solid; BORDER-RIGHT: #ccc 1px solid" border=0 cellPadding=0 width="100%" id="skey">
  <TBODY>

 

<tr>
			<td style="padding:10px;margin:5px;">
			<span onclick=mt_search3() class="button button-primary button-rounded button-small">行业分类</span>
			 <?php
		$sqls="select * from media_class where BigID=46 order by paixu desc";
		$results=mysql_db_query($dbname,$sqls);
		while($rss=mysql_fetch_array($results))
		{
	  ?>
	<a onclick=mt_search1(<?php echo $rss["ID"];?>) class="button button-pill button-tiny"><?php echo $rss["SmallClass"];?></a>
<?php } ?>
			</td>
		</tr>


<tr>
			<td style="padding:10px;margin:5px;">
			<span onclick=mt_search3() class="button button-primary button-rounded button-small">客户端自媒体</span>
			  <?php
		$sqls="select * from menhu_class where paixu<51 order by paixu asc";
		$results=mysql_db_query($dbname,$sqls);
		while($rss=mysql_fetch_array($results))
		{
	  ?>
	<a onclick="mt_search7('<?php echo $rss["BigClass"];?>')" class="button button-pill button-tiny"><?php echo $rss["BigClass"];?></a>
<?php } ?>
<a href="rwgzy.php?fl=zmt" class="button button-primary button-rounded button-small" target="_blank">导出自媒体资源表</a>
			</td>
		</tr>


<tr>
			<td style="padding:10px;margin:5px;">
			<span onclick=mt_search3() class="button button-primary button-rounded button-small">综合门户网站</span>
			  <?php
		$sqls="select * from menhu_class where paixu>50 order by paixu asc";
		$results=mysql_db_query($dbname,$sqls);
		while($rss=mysql_fetch_array($results))
		{
	  ?>
	<a onclick="mt_search7('<?php echo $rss["BigClass"];?>')" class="button button-pill button-tiny"><?php echo $rss["BigClass"];?></a>
	
<?php } ?>  
	<a href="rwgzy.php" class="button button-primary button-rounded button-small" target="_blank">导出媒体资源表</a>
			</td>
		</tr>




<tr>
			<td style="padding:10px;margin:5px;">
			<span onclick=mt_search3() class="button button-primary button-rounded button-small">覆盖地区</span>
			  <?php
		$sqls="select * from diqu_class order by paixu asc";
		$results=mysql_db_query($dbname,$sqls);
		while($rss=mysql_fetch_array($results))
		{
	  ?>
	<a onclick="mt_search6('<?php echo $rss["BigClass"];?>')" class="button button-pill button-tiny"><?php echo $rss["BigClass"];?></a>
<?php } ?>
			</td>
		</tr>



<tr>
			<td style="padding:10px;margin:5px;">
			<span onclick=mt_search3() class="button button-primary button-rounded button-small">链接情况</span>
		
	<a onclick="mt_search5('可带网址')" class="button button-pill button-tiny">可带网址</a>
	<a onclick="mt_search5('不能带网址')" class="button button-pill button-tiny">不能带网址</a>

			</td>
		</tr>
		
		<tr>
			<td style="padding:10px;margin:5px;">
			<span onclick=mt_search3() class="button button-primary button-rounded button-small">收录情况</span>
			
			
	<a class="button button-pill button-tiny" onclick="mt_search4('百度新闻源')">百度新闻源</a>
    <a class="button button-pill button-tiny" onclick="mt_search4('360新闻源')">360新闻源</a>
    <a class="button button-pill button-tiny" onclick="mt_search4('网页收录')">网页收录</a>


			</td>
		</tr>



  </TBODY></TABLE>
  
  
  
  
  <form name="form2" id='searchtrun' style="margin-bottom:20px;">
          <br />
          <table width="100%" cellpadding="0" cellspacing="0" bgcolor="#e2e2e2" >
            <tr>
              <td width="6%" height="28" bgcolor="#FFFFFF" style="border-top:1px solid #ccc; border-left:1px solid #ccc; border-right:1px solid #ccc;"><div align="center">媒体查找</div></td>
       			  <td width="94%" align="center" valign="middle" bgcolor="#FFFFFF"><table border="0" cellpadding="5" cellspacing="2">
                  <tr>
				
				  <td><div style='margin-right:180px;'><!--共有<?php echo $Num;?>家媒体资源--></div></td>
                    <td><div align="center">媒体名称</div></td>
                   <td><input name="meiti_name" type="text" class="txt" id="meiti_name" size="13" onkeydown="if(event.keyCode == 13)event.returnValue = false;"/></td>
				  
				   
              
                    <td><input type="button" name="button2" id="button2" value="查找" onclick="mt_search();" style="border:1px solid #ccc; background:#e2e2e2;color:#000; width:80px; cursor:pointer;"/></td>
                    <td></td>
                  </tr>
                </table></td>
            </tr>
            <tr>
              <td height="23" colspan="2" bgcolor="#FFFFFF"><div id="s_meti"></div></td>
            </tr>
          </table>
        </form></DIV></DIV></DIV>
<DIV class="bk20 hr"></DIV></DIV>
<DIV style="DISPLAY: none" id=background class=background></DIV>
<DIV style="DISPLAY: none" id=progressBar class=progressBar>数据加载中，请稍等...</DIV>
<SCRIPT type=text/javascript>

$(document).ready(function(){
	
	var ajaxbg = $("#background,#progressBar"); 
	ajaxbg.hide(); 
	$(document).ajaxStart(function () { 
	ajaxbg.show(); 
	}).ajaxStop(function () { 
	ajaxbg.hide(); 
	});  
	 mt_search();
})
 

function mt_search()
{
	$.get("search.php?a=mt_search",{"mc":$("#meiti_name").val(),"cid":$("#class_id").val(),"skey":$("#skey").val(),"mh":$("#zhmh").val(),"diqu":$("#diqu").val(),"lurl":$("#linkurl").val(),"xwy":$("#xinwenyuan").val()},function(data){

		$("#s_meti").html(data);
	});
}

function mt_search1(id)
{
	$.get("search.php?a=mt_search",{"fl":id},function(data){

		$("#s_meti").html(data);
	});
}

function mt_searchs1(id)
{
	$.get("search.php?a=mt_search",{"fls":id},function(data){

		$("#s_meti").html(data);
	});
}

function mt_search2(id)
{
	$.get("search.php?a=mt_search",{"jg":id},function(data){

		$("#s_meti").html(data);
	});
}

function mt_search3(id)
{
	$.get("search.php?a=mt_searchall",{"jg":"all"},function(data){

		$("#s_meti").html(data);
	});
}
  

function mt_search4(id)
{ 
	$.get("search.php?a=mt_searchall",{"xw":id},function(data){

		$("#s_meti").html(data);
	});
}

function mt_search5(id)
{ 
	$.get("search.php?a=mt_searchall",{"lj":id},function(data){

		$("#s_meti").html(data);
	});
}
function mt_search6(id)
{ 
	$.get("search.php?a=mt_searchall",{"dq":id},function(data){

		$("#s_meti").html(data);
	});
}
function mt_search7(id)
{ 
	$.get("search.php?a=mt_searchall",{"zhmh":id},function(data){

		$("#s_meti").html(data);
	});
}

function meiturn()
{ 
	$("#searchtrun").slideToggle();
} 
 
</SCRIPT>
<SCRIPT language=javascript> 
var rows = document.getElementsByTagName('tr');//获取所有表格行
for (var i=0;i<rows.length;i++){//然后对其遍历
    rows[i].onmouseover = function(){      
        this.className += 'highlight';//鼠标经过时，显示样式altrow,注意，js中的样式是className而不是class，这个是新手容易犯的错误；
    }
    rows[i].onmouseout = function(){       
        this.className = this.className.replace('highlight','');//鼠标一走的时候，把样式也去掉
    }
}

$(function(){
   $("#skey a").click(function(){
         $("#skey a").removeClass("areaon");
         $(this).addClass("areaon");
   });
});
</SCRIPT>

		
<?php
include("footer.php");
?>
</BODY>
</HTML>
