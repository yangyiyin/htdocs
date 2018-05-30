<?php
include ("checkuser.php");
include ("../include/config.php");
switch($_COOKIE["fg"])
		{
		 case "2":
		 $pintai="广告主";
		 break;
		 case "3":
		 $pintai="媒介主";
		 break;
		}
echo "<script> if(confirm( '确定要切换到".$pintai."平台吗？'))  location.href='changeyes.php';else location.href='index.php'; </script>"; 


?>