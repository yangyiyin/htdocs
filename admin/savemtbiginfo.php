<?php
header("Content-Type: text/html; charset=utf-8");
include ("../include/config.php");
include ("checkuser.php");
?>

<?php
if($_COOKIE["fg"]>2)
{
 echo "<script>alert('您的权限有限，请与超级管理员联系！');history.go(-1);</script>";
}
else
{
  $action=@$_REQUEST["action"];
  $titleID=@$_REQUEST["titleID"];
  $nav_id=@$_REQUEST["nav_id"];
  $class_id=@$_REQUEST["sc_id"];
  $small_id=@$_REQUEST["small_id"];
  $medianame=@$_REQUEST["medianame"];
  $diqu=@$_REQUEST["diqu"];
  $weburl=@$_REQUEST["weburl"];
  $anliurl=@$_REQUEST["anliurl"];
  $linkurl=@$_REQUEST["linkurl"];
  $xinwenyuan=@$_REQUEST["xinwenyuan"];
  $zhmh=@$_REQUEST["zhmh"];
  $fans=@$_REQUEST["fans"];
  if($fans==""){
	$fans=0;
  }
  $price=@$_REQUEST["price"];
  $scprice=@$_REQUEST["scprice"];
  $sccprice=@$_REQUEST["sccprice"];
  $jjprice=@$_REQUEST["jjprice"];
  $content=@$_REQUEST["content"];
  $neirong=@$_REQUEST["neirong"];
  $tj=@$_REQUEST["tj"];
  $tela=@$_REQUEST["tela"];
  $typefl=@$_REQUEST["typefl"];
  $VipUser=@$_REQUEST["meijie"];
  
  //echo "<script>alert('".$nav_id."');</script>";
  
  $data=date("Y-m-d");

  $ID=@$_REQUEST["ID"];
  
  switch($action)
  {
   case "add":
  // $VipUser=$_COOKIE["AdminUser"];	//获取媒体添加者：当前用户（即媒介编辑）
   $sh=1;							//0为未审核通过，需要超管审核

   $sql="insert into ".$titleID."_info (class_id,small_id,medianame,nav_id,sh,diqu,weburl,anliurl,linkurl,xinwenyuan,zhmh,fans,price,scprice,sccprice,content,neirong,tj,tela,data,VipUser,typefl) values (".$class_id.",".$small_id.",'".$medianame."',".$nav_id.",".$sh.",'".$diqu."','".$weburl."','".$anliurl."','".$linkurl."','".$xinwenyuan."','".$zhmh."',".$fans.",".$price.",".$scprice.",".$sccprice.",'".$content."','".$neirong."','".$tj."','".$tela."','".$data."','".$VipUser."','".$typefl."')";
   
   mysql_db_query($dbname,$sql);
   //mysql_select_db($dbname);
   //$result=mysql_query($sql);
   echo "<script>alert('添加媒体资源成功！');location.href='managemtbiginfo.php?titleID=".$titleID."';</script>";
  break;
 
  case "edit":

  $sql="update ".$titleID."_info set nav_id=".$nav_id.",class_id=".$class_id.",small_id=".$small_id.",medianame='".$medianame."',diqu='".$diqu."',weburl='".$weburl."',anliurl='".$anliurl."',linkurl='".$linkurl."',xinwenyuan='".$xinwenyuan."',zhmh='".$zhmh."',fans=".$fans.",price=".$price.",scprice=".$scprice.",sccprice=".$sccprice.",content='".$content."',neirong='".$neirong."',tj='".$tj."',tela='".$tela."',data='".$data."',VipUser='".$VipUser."',typefl='".$typefl."' where ID=".$ID."";
  mysql_db_query($dbname,$sql);
  //mysql_select_db($dbname);
  //$result=mysql_query($sql);
  echo "<script>alert('修改媒体资源成功！');location.href='managemtbiginfo.php?titleID=".$titleID."';</script>";
  break;
  
  case "shmt":	//审核媒介编辑录入的媒体资源
  
  $sh=@$_REQUEST["sh"];

    $sql="update ".$titleID."_info set nav_id=".$nav_id.",class_id=".$class_id.",small_id=".$small_id.",medianame='".$medianame."',diqu='".$diqu."',weburl='".$weburl."',anliurl='".$anliurl."',linkurl='".$linkurl."',xinwenyuan='".$xinwenyuan."',zhmh='".$zhmh."',fans=".$fans.",price=".$price.",scprice=".$scprice.",sccprice=".$sccprice.",content='".$content."',neirong='".$neirong."',tj='".$tj."',tela='".$tela."',sh='".$sh."',typefl='".$typefl."' where ID=".$ID."";
  mysql_db_query($dbname,$sql);
  echo "<script>alert('审核媒体资源成功！');location.href='managemtbiginfo1.php?titleID=".$titleID."';</script>";
  break;
  
  case "price":	//改价

  if($jjprice==1){
	$sql="update ".$titleID."_info set price=price+".$price.",scprice=scprice+".$scprice.",sccprice=sccprice+".$sccprice."";
  }
  elseif($jjprice==2){
	$sql="update ".$titleID."_info set price=price-".$price.",scprice=scprice-".$scprice.",sccprice=sccprice-".$sccprice."";
  }
  mysql_db_query($dbname,$sql);
  //mysql_select_db($dbname);
  //$result=mysql_query($sql);
  echo "<script>alert('批量修改媒体价格成功！');location.href='managemtbiginfo.php?titleID=".$titleID."';</script>";
  break;
 
  case "del":
  foreach(@$_REQUEST["ID"] as $it)
  {
   $sql2="delete from ".$titleID."_info where ID=".$it."";
   mysql_db_query($dbname,$sql2);
   //mysql_select_db($dbname);
   //$result2=mysql_query($sql2);
  }
   echo "<script>alert('删除媒体资源成功！');location.href='managemtbiginfo.php?titleID=".$titleID."';</script>";
  break;
  }
}
?>