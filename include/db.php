<?php
$dbhost = '192.168.38.29';		//数据库服务器
$dbuser = 'root';			//数据库用户名
$dbpasswd = '123123';		//数据库密码
$dbname = 'cjmjw';		//数据库名
if(is_file($_SERVER['DOCUMENT_ROOT'].'/360safe/360webscan.php')){
    require_once($_SERVER['DOCUMENT_ROOT'].'/360safe/360webscan.php');
} // 注意文件路径
?>