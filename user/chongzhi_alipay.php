<?php
//设置工程相对路径
$root_path="../";
if(file_exists("$root_path/pay/alipay.config.php")){	  
	require_once("$root_path/pay/alipay.config.php");
}
	if($apayok==1){
		echo "<script>location.href='../user/chongzhi_dc.php';</script>";
	}else{
		echo "<script>location.href='../user/chongzhia.php';</script>";
	}
?>
