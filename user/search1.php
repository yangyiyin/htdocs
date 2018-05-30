<?php
include ("../include/config.php");
include ("../include/function.php");
$VipUser=$_COOKIE["VipUser"];
$sqlu="select * from user where VipUser='".$VipUser."'";
$resultu=mysql_query($sqlu);
$rsu=mysql_fetch_array($resultu);
if($rsu!=NULL)
{
    $yue=$rsu["yue"];
	$flag=$rsu["flag"];
}
?>

<?php
if($_GET["fl"]<>""){
	$id=$_GET["fl"];
	if($flag==2){
		$sql="select * from media_info where sh=1 and nav_id=46 and VipUser='".$VipUser."' and class_id=".$id." order by ID asc";
	}
	else{
		$sql="select * from media_info where sh=1 and nav_id=46 and class_id=".$id." order by ID asc";
	}
}
elseif($_GET["fls"]<>""){
	$id=$_GET["fls"];
	if($flag==2){
		$sql="select * from media_info where sh=1 and nav_id=46 and VipUser='".$VipUser."' and small_id=".$id." order by ID asc";
	}
	else{
		$sql="select * from media_info where sh=1 and nav_id=46 and small_id=".$id." order by ID asc";
	}
}
elseif($_GET["lj"]<>""){
	$id=$_GET["lj"];
	if($flag==2){
		$sql="select * from media_info where sh=1 and nav_id=46 and VipUser='".$VipUser."' and linkurl='".$id."' order by ID asc";
	}
	else{
		$sql="select * from media_info where sh=1 and nav_id=46 and linkurl='".$id."' order by ID asc";
	}
}
elseif($_GET["xw"]<>""){
	$id=$_GET["xw"];
	if($flag==2){
		$sql="select * from media_info where sh=1 and nav_id=46 and VipUser='".$VipUser."' and xinwenyuan='".$id."' order by ID asc";
	}
	else{
		$sql="select * from media_info where sh=1 and nav_id=46 and xinwenyuan='".$id."' order by ID asc";
	}
}
elseif($_GET["jg"]<>"" and $_GET["jg"]<>"all"){
	$id=$_GET["jg"];
	if($flag==1){
	  switch($_GET["jg"])
		{
		 case "0":
		   $sql="select * from media_info where (dlprice between 0 and 40) and sh=1 and nav_id=46 order by ID asc";
		   break;
		 case "1":
		   $sql="select * from media_info where (dlprice between 41 and 70) and sh=1 and nav_id=46 order by ID asc";
		   break;
		 case "2":
		   $sql="select * from media_info where (dlprice between 71 and 120) and sh=1 and nav_id=46 order by ID asc";
		   break;
		 case "3":
		   $sql="select * from media_info where (dlprice >120) and sh=1 and nav_id=46 order by ID asc";
		   break;
		 default:
		   $sql="select * from media_info where sh=1 and nav_id=46 order by ID asc";
		}
	}
	elseif($flag==2){
	  switch($_GET["jg"])
		{
		 case "0":
		   $sql="select * from media_info where (scprice between 0 and 40) and sh=1 and nav_id=46 and VipUser='".$VipUser."' order by ID asc";
		   break;
		 case "1":
		   $sql="select * from media_info where (scprice between 41 and 70) and sh=1 and nav_id=46 and VipUser='".$VipUser."' order by ID asc";
		   break;
		 case "2":
		   $sql="select * from media_info where (scprice between 71 and 120) and sh=1 and nav_id=46 and VipUser='".$VipUser."' order by ID asc";
		   break;
		 case "3":
		   $sql="select * from media_info where (scprice >120) and sh=1 and nav_id=46 and VipUser='".$VipUser."' order by ID asc";
		   break;
		 default:
		   $sql="select * from media_info where sh=1 and nav_id=46 and VipUser='".$VipUser."' order by ID asc";
		}
	}
	else{
	  switch($_GET["jg"])
		{
		 case "0":
		   $sql="select * from media_info where (price between 0 and 40) and sh=1 and nav_id=46 order by ID asc";
		   break;
		 case "1":
		   $sql="select * from media_info where (price between 41 and 70) and sh=1 and nav_id=46 order by ID asc";
		   break;
		 case "2":
		   $sql="select * from media_info where (price between 71 and 120) and sh=1 and nav_id=46 order by ID asc";
		   break;
		 case "3":
		   $sql="select * from media_info where (price >120) and sh=1 and nav_id=46 order by ID asc";
		   break;
		 default:
		   $sql="select * from media_info where sh=1 and nav_id=46 order by ID asc";
		}
	}
}
elseif($_GET["dq"]<>""){
	$id=$_GET["dq"];
	if($flag==2){
		$sql="select * from media_info where sh=1 and nav_id=46 and VipUser='".$VipUser."' and diqu='".$id."' order by ID asc";
	}
	else{
		$sql="select * from media_info where sh=1 and nav_id=46 and diqu='".$id."' order by ID asc";
	}
}
elseif($_GET["zhmh"]<>""){
	$id=$_GET["zhmh"];
	if($flag==2){
		$sql="select * from media_info where sh=1 and nav_id=46 and VipUser='".$VipUser."' and zhmh='".$id."' order by ID asc";
	}
	else{
		$sql="select * from media_info where sh=1 and nav_id=46 and zhmh='".$id."' order by ID asc";
	}
}
elseif($_GET["tejia"]<>""){
	$id=$_GET["tejia"];
	if($flag==2){
		$sql="select * from media_info where sh=1 and nav_id=46 and VipUser='".$VipUser."' and small_id='".$id."' order by ID asc";
	}
	else{
		$sql="select * from media_info where sh=1 and nav_id=46 and small_id='".$id."' order by ID asc";
	}
}
else{
	$mc=$_GET["mc"];
	$cid=$_GET["cid"];
	$skey=5;
	$mh=$_GET["mh"];
	$diqu=$_GET["diqu"];
	$lurl=$_GET["lurl"];
	$xwy=$_GET["xwy"];
	switch($skey)
	{
	case "1":
		if($flag==1){
			$ssql="order by dlprice asc";
		}
		elseif($flag==2){
			$ssql="order by scprice asc";
		}
		else{
			$ssql="order by price asc";
		}
		break;
	case "2":
		if($flag==1){
			$ssql="order by dlprice desc";
		}
		elseif($flag==2){
			$ssql="order by scprice desc";
		}
		else{
			$ssql="order by price desc";
		}
		break;
	case "3":
		$ssql="order by fans asc";
		break;
	case "4":
		$ssql="order by fans desc";
		break;
	case "5":
		$ssql="order by price asc";
		break;
	case "6":
		$ssql="order by price desc";
		break;
	default:
		$ssql="order by ID desc";
	}
	
	if($mc==""){
		$msql="";
	}
	else{
		$msql="and medianame like '%".$mc."%'";
	}
	if($cid==""){
		$csql="";
	}
	else{
		$csql="and class_id=".$cid."";
	}
	if($mh==""){
		$hsql="";
	}
	else{
		$hsql="and zhmh='".$mh."'";
	}
	if($diqu==""){
		$dsql="";
	}
	else{
		$dsql="and diqu='".$diqu."'";
	}
	if($lurl==""){
		$lsql="";
	}
	else{
		$lsql="and linkurl='".$lurl."'";
	}
	if($xwy==""){
		$xsql="";
	}
	else{
		$xsql="and xinwenyuan='".$xwy."'";
	}
	
	if($flag==2){
		$sql="select * from media_info where sh=1 and nav_id=46 and VipUser='".$VipUser."' ".$csql." ".$hsql." ".$dsql." ".$lsql." ".$xsql." ".$msql." ".$ssql."";
	}
	else{
		$sql="select * from media_info where sh=1 and nav_id=46 ".$csql." ".$hsql." ".$dsql." ".$lsql." ".$xsql." ".$msql." ".$ssql."";
	}
}
$result=mysql_db_query($dbname,$sql);
$num_rows = mysql_num_rows($result); 
//echo "<script>alert('".$id."');</script>";
?>
<style>
#casea{margin-right:2px;float:right;font-weight:700}
#casea a{color:blue;}
#searchtr .casea span a{color:blue;font-weight:700;}
table.table{border:0px;border-collapse:collapse;font-size:14px;}
table.table tr,table.table tr th,table.table tr td{border:0px}
.layui-table-view{border-width: 1px;border-style: solid;border-color: #e6e6e6;position: relative;}
#searchtr TR{background-color:#f2f2f2}
#searchtr TR:hover{background-color:#f2f2f2}
table.table .trone{border: 1px #e6e6e6 solid; }
table.table tr th{padding: 6px 0;min-height:30px;line-height:30px;}
table.table tr td{padding: 6px 0;}
table.table tr td.tha a{height:22px;line-height: 22px;padding: 0 5px;font-size: 12px;background-color: #1c96e3;border-radius: 100px;display: inline-block;color: #fff;white-space: nowrap;text-align: center;text-decoration: none;}
table.table tr td.tha a:hover{opacity: .8;filter: alpha(opacity=80);}
table.table tr.tra{background-color:#fff !important;}
table.table tr.tra:hover{background-color:#f2f2f2 !important;}
.fnum{position: absolute;left: 32%;top: -26px;}
</style>
<div class='layui-table-view'>
<div class='fnum'>共有<b><?php echo $num_rows;?></b>家媒体资源</div>
<table width="100%" cellspacing="0" border-collapse="collapse" id="searchtr" class='table'>
   <tr class='trone'>
	<th  width="100" ><div align="center"><strong>媒体分类</strong></div></th>
    <th width="170" ><div align="center"><strong>媒体名称</strong></div></th>
	<th width="80" ><div align="center"><strong>推荐指数</strong></div></th>
<?php if($flag==1){?>
	<th width="100" ><div align="center"><strong>代理价</strong></div></th>
<?php } elseif($flag==2){?>
    <th width="100" ><div align="center"><strong>价格</strong></div></th>
<?php } else {?>
    <th width="100" ><div align="center"><strong>零售价</strong></div></th>
<?php }?>

    <th width="120" ><div align="center"><strong>带网址情况</strong></div></th>

    <th width="100" ><div align="center"><strong>新闻源</strong></div></th>

    <th width="250" ><div align="center"><strong>备注</strong></div></th>

  </tr>
<?php
	if (mysql_num_rows($result)==NULL)
		{
		   echo "<br><table width=750 border=0 align=center cellpadding=0 cellspacing=0><tr>
                 <td align=center><span class=rd rd>没有相关媒体数据！</span></td></tr></table>";
		}
       
	else
		{
		?>
	<?php
		$i=1;
		while($rs=mysql_fetch_array($result))
		{
			$class_id=$rs["class_id"];
			$sqlb="select * from media_class where ID=".$class_id."";
			$resultb=mysql_db_query($dbname,$sqlb);
			$rsb=mysql_fetch_array($resultb)
		?>
    <tr <?php 
if($i%2==0){
	echo "";
}else{
	echo "class='tra'";
}
?> id='yixuna<?php echo $rs["ID"];?>' >

    <td class='tha' height="25" width="100" align="center"><a href='javascript:void(0)'><?php echo $rsb["SmallClass"];?></a></td>

   <td width="170" ><div align="center"><a href='<?php echo $rs["anliurl"];?>' target="_blank"><?php echo $rs["medianame"];?></a><span id='casea'><a href='<?php echo $rs["anliurl"];?>' target="_blank">案例</a></span></div><input name="xz_mc_<?php echo $rs["ID"];?>" type="hidden" id="xz_mc_<?php echo $rs["ID"];?>" value="<?php echo $rs["medianame"];?>"></td>
	
	<td width="80" ><div align="center"><img src="<?php echo $rs["tj"];?>" border="0" width="64" height="12" alt="推荐指数"></div></td>
	
<?php if($flag==1){?>
    <td width="100" ><div align="center" style="color: rgb(255, 0, 0);"><b><?php echo $rs["dlprice"];?></b></div></td>
<?php } elseif($flag==2){?>
    <td width="100" ><div align="center" style="color: rgb(255, 0, 0);"><b><?php echo $rs["scprice"];?></b></div></td>
<?php } else {?>
	<td width="100" ><div align="center" style="color: rgb(255, 0, 0);"><b><?php echo $rs["price"];?></b></div></td>
<?php }?>

    <td width="100" ><div align="center"><?php echo $rs["linkurl"];?></div></td>

    <td width="100" ><div align="center"><?php echo $rs["xinwenyuan"];?></div></td>

    <td width="250" ><div align="center"><?php echo $rs["content"];?></div></td>

  </tr>
<?php
	$i=$i+1;
	}
}
?>
</table>
</div>