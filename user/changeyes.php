<?php

include ("checkuser.php");
include ("../include/config.php");
$VipUser=@$_REQUEST["VipUser"];
$flag=@$_REQUEST["fg"];
if($flag=="2"){
	$sql="update user set flag='3' where VipUser='".$VipUser."'";
}else{
	$sql="update user set flag='2' where VipUser='".$VipUser."'";
}
if(mysql_db_query($dbname,$sql)){
	echo "<script>alert('修改成功,请重新登录！');location.href='/logouts.php';</script>";
}else{
	echo "修改失败";
}

?>