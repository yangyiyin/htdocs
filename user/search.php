<?php
include ("../include/config.php");
include ("../include/function.php");
$VipUser=$_COOKIE["VipUser"];
//echo "<script>alert('".$VipUser."');</script>";
$sqlu="select * from user where VipUser='".$VipUser."'";
$resultu=mysql_db_query($dbname,$sqlu);
$rsu=mysql_fetch_array($resultu);
if($rsu!=NULL)
{
    $yue=$rsu["yue"];
	$flag=$rsu["flag"];
}
?>

<?php


if($_GET["a"]=="mt_search"){
	
	$mc=$_GET["mc"];
	$cid=$_GET["cid"];
	$paixu=$_GET["paixu"];
	$hyfl=$_GET["hyfl"];
	$zmt=$_GET["zmt"];
	$fgdq=$_GET["fgdq"];
	$ljqk=$_GET["ljqk"];
	$slqk=$_GET["slqk"];
	$Page=$_GET["Page"];
	$typefl=$_GET["typefl"];
	$fssl=$_GET["fssl"];
	switch($paixu)
	{
	case "1":
		$ssql="and (price between 5 and 20)";
		break;
	case "2":
		$ssql="and (price between 21 and 50)";
		break;
	case "3":
		$ssql="and price >51";
		break;
	case "4":
		$ssql="and (price between 0 and 100)";
		break;
	case "5":
		$ssql="and (price between 101 and 300)";
		break;
	case "6":
		$ssql="and (price between 301 and 500)";
		break;
	case "7":
		$ssql="and price >501";
		break;
	default:
		$ssql="";
	}
	switch($fssl)
	{
	case "1":
		$fssql="and (fans between 0 and 10000)";
		break;
	case "2":
		$fssql="and (fans between 10001 and 50000)";
		break;
	case "3":
		$fssql="and (fans between 50001 and 100000)";
		break;
	case "4":
		$fssql="and (fans between 100001 and 300000)";
		break;
	case "5":
		$fssql="and (fans between 300001 and 500000)";
		break;
	case "6":
		$fssql="and fans >500001";
		break;
	default:
		$fssql="";
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
	if($hyfl=="0"){
		$hyflsql="";
	}
	else{
		$hyflsql="and class_id=".$hyfl."";
	}
	if($zmt=="0"){
		$zmtsql="";
	}
	else{
		$zmtsql="and zhmh='".$zmt."'";
	}
	if($fgdq=="0"){
		$fgdqsql="";
	}
	else{
		$fgdqsql="and diqu='".$fgdq."'";
	}
	if($ljqk=="0"){
		$ljqksql="";
	}
	else{
		$ljqksql="and linkurl='".$ljqk."'";
	}
	if($slqk=="0"){
		$slqksql="";
	}
	else{
		$slqksql="and xinwenyuan='".$slqk."'";
	}
	
	if($typefl!==""){
		$typeflsql="and typefl=".$typefl."";
	}
	
	
	/*-----------------设置每页显示数目-------------------*/
	$List_Num=40;
	/*-----------------计算共有记录数--------------------*/
	
	
	$sqlN="select Count(*) from media_info where sh=1 and nav_id=46  ".$msql." ".$typeflsql."  ".$csql." ".$fgdqsql." ".$zmtsql." ".$ljqksql." ".$slqksql." ".$hyflsql." ".$ssql." ".$fssql."";
	$resultN=mysql_db_query($dbname,$sqlN);
	$rsN=mysql_fetch_array($resultN);
	$Num=$rsN[0];
	/*------------------计算共有页数--------------------*/
	$CountPage=ceil($Num/$List_Num);
	/*-------------------设置当道页--------------------*/
	$Cpage=$Page+1;
	/*--------------------------------------------------*/
	if($Page==0){
		$sql="select * from media_info where sh=1 and nav_id=46  ".$msql." ".$typeflsql." ".$csql." ".$fgdqsql." ".$zmtsql." ".$ljqksql." ".$slqksql." ".$hyflsql." ".$ssql." ".$fssql."  order by price asc limit ".($List_Num*$Page).",".$List_Num." ";
	}else{
		$sql="select * from media_info where sh=1 and nav_id=46  ".$msql." ".$typeflsql." ".$csql." ".$fgdqsql." ".$zmtsql." ".$ljqksql." ".$slqksql." ".$hyflsql." ".$ssql." ".$fssql." order by price asc  limit ".($List_Num*$Page).",".$List_Num." ";
	}
	
	//$sql="select * from media_info where sh=1 and nav_id=46  ".$msql."  ".$csql." ".$fgdqsql." ".$zmtsql." ".$ljqksql." ".$slqksql." ".$hyflsql." ".$ssql."";
}
$result=mysql_db_query($dbname,$sql);



//echo "<script>alert('".$id."');</script>";
?>
<style>
#searchtr .casea span a{color:blue;font-weight:700;}
table.table{border:0px;border-collapse:collapse;}
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
.fnum{position: absolute;left: 35%;top: -26px;}

.fenye{line-height:50px;}
.fenye a{padding:2px 3px;text-decoration: none;border: 1px solid #ddd;margin-right:5px;}
</style>
<div class='layui-table-view'>
<div class='fnum'>共有<b><?php echo $Num;?></b>家媒体资源</div>
<table width="100%" cellspacing="0" border-collapse="collapse" id="searchtr" class='table'>

  <tr class='trone'>

    <th  width="33" ><div align="center"><strong>勾选</strong></div></th>

	<th height="30" width="100" ><div align="center"><strong>媒体分类</strong></div></th>

    <th width="170" ><div align="center"><strong>媒体名称</strong></div></th>
	
	<th width="80" ><div align="center"><strong>推荐指数</strong></div></th>
<?php if($flag==1){?>
	<th width="100" ><div align="center"><strong>代理价</strong></div></th>
<?php } elseif($flag==2){?>
    <th width="100" ><div align="center"><strong>价格</strong></div></th>
<?php } else {?>
    <th width="100" ><div align="center"><strong>零售价</strong></div></th>
<?php }?>
    <th width="120" ><div align="center"><strong><?php if($_GET["typefl"]==1||$_GET["typefl"]==2){echo "带网址情况";}else{echo "粉丝数量";}?></strong></div></th>

    <th width="100" ><div align="center"><strong><?php if($_GET["typefl"]==1||$_GET["typefl"]==2){echo "新闻源";}else{echo "地区";}?></strong></div></th>

    <th width="250" ><div align="center"><strong>备注</strong></div></th>

  </tr>
<?php
	if (mysql_num_rows($result)==NULL)
		{
			$fy="no";
		   echo "<br><table width=750 border=0 align=center cellpadding=0 cellspacing=0><tr>
                 <td align=center><span class=rd rd>没有相关媒体数据！</span></td></tr></table>";
		}
       
	else
		{
			$fy="yes";
		?>
	<?php
		$i=1;
		while($rs=mysql_fetch_array($result))
		{
			$ID=$rs["ID"];
			$price=$rs["price"];
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
<?php if($flag==1){?>
	<td height="25" width="33" align="center"><input name="xz[]" type="checkbox" id="xz_<?php echo $rs["ID"];?>" value="<?php echo $rs["ID"]?>" onclick="sel(<?php echo $rs["ID"];?>,<?php echo $rs["ID"];?>,<?php echo $rs["dlprice"];?>,<?php echo $rsu["yue"];?>);" /></td>
<?php } elseif($flag==2){ ?>
	<td height="25" width="33" align="center"><input name="xz[]" type="checkbox" id="xz_<?php echo $rs["ID"];?>" value="<?php echo $rs["ID"]?>" onclick="sel(<?php echo $rs["ID"];?>,<?php echo $rs["ID"];?>,<?php echo $rs["scprice"];?>,<?php echo $rsu["yue"];?>);" /></td>
<?php }
else{
 ?>
	<td height="25" width="33" align="center"><input name="xz[]" type="checkbox" id="xz_<?php echo $rs["ID"];?>" value="<?php echo $rs["ID"]?>" onclick="sel(<?php echo $rs["ID"];?>,<?php echo $rs["ID"];?>,<?php echo $rs["price"];?>,<?php echo $rsu["yue"];?>);" /></td>
<?php
 }
?>
    <td class='tha' height="25" width="100" align="center"><a href='javascript:void(0)'><?php echo $rsb["SmallClass"];?></a></td>

   <td width="170" ><div align="center" class='casea'><a href='<?php echo $rs["anliurl"];?>' target="_blank"><?php echo $rs["medianame"];?></a><span style="float:right;margin-right:5px;"><a href='<?php echo $rs["anliurl"];?>' target="_blank">案例</a></span></div><input name="xz_mc_<?php echo $rs["ID"];?>" type="hidden" id="xz_mc_<?php echo $rs["ID"];?>" value="<?php echo $rs["medianame"];?>"></td>
	
	<td width="80" ><div align="center"><img src="<?php echo $rs["tj"];?>" border="0" width="64" height="12" alt="推荐指数"></div></td>

<?php if($flag==1){?>
    <td width="100" ><div align="center" style="color: rgb(255, 0, 0);"><b><?php echo $rs["dlprice"];?></b></div></td>
<?php } elseif($flag==2){?>
    <td width="100" ><div align="center" style="text-decoration:line-through"><?php echo $rs["scprice"];?></div></td>
<?php } else {?>
	<td width="100" ><div align="center" style="color: rgb(255, 0, 0);"><b><?php echo $rs["price"];?></b></div></td>
<?php }?>
    <td width="100" ><div align="center"><?php if($_GET["typefl"]==1||$_GET["typefl"]==2){echo $rs["linkurl"];}else{echo $rs["fans"];}?></div></td>

    <td width="100" ><div align="center"><?php if($_GET["typefl"]==1||$_GET["typefl"]==2){echo $rs["xinwenyuan"];}else{echo $rs["diqu"];}?></div></td>

    <td width="250" ><div align="center"><?php echo $rs["content"];?></div></td>

  </tr>
<?php
	$i=$i+1;
	}
}
?>
</table>
<table align='center'><tr class='fenye'><td><p><?php
				 if ($fy=="yes")
				 {
								  
								  
								  if($Page!=0)
								  {
								  $Prv=$Page-1;
								  echo "<a href='javaScript:mt_search(0,0);'>首页</a>";
								  echo "<a href='javaScript:mt_search(0,".$Prv.");'>上一页</a>";
								  }
								  else
								  {
								   echo "<a href='javascript:void(0)'>首页</a>";
								   echo "<a href='javascript:void(0)'>上一页</a>";
								  }
							
					
								  if($Page!=$CountPage-1)
								  {
								  $NtPage=$Page+1;
								  $EdPage=$CountPage-1;
								  echo "<a href='javaScript:mt_search(0,".$NtPage.");'>下一页</a>";
								  echo "<a href='javaScript:mt_search(0,".$EdPage.");'>尾页</a>";
								  }
								  else
								  {
								   echo "<a href='javascript:void(0)'>下一页</a>";
								   echo "<a href='javascript:void(0)'>尾页</a>";
								  }
								  echo "<a href='javascript:void(0)'>当前为".$Cpage."/".$CountPage."页  共".$Num."条记录</a>";
				 }
				 ?></td></p></tr></table>
</div>