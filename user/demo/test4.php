<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>接收上传文件</title>
<?php
 function word2html($wfilepath)
 {
   $word=new COM("Word.Application") or die("无法打开 MS Word");
   $word->visible = 1 ; 
   echo $wfilepath;
   $word->Documents->Open($wfilepath)or die("无法打开这个文件");
   $htmlpath=substr($wfilepath,0,-4);
   $word->ActiveDocument->SaveAs($htmlpath,8);
   $word->quit(0);
	print( "Word转html完成!" );
 }
//print_r($_FILES);

error_reporting(2047);
if (!empty($_FILES)) {
/*
  $conn = new COM("ADODB.Connection");
  $connstr = "DRIVER={Microsoft Access Driver (*.mdb)}; DBQ=" . realpath("person.mdb");
  $conn->Open($connstr);
  */
  $uploaddir = 'uploads/';
  if(!is_dir($uploaddir)){
    mkdir($uploaddir);
  }

  $filename =$_FILES['filename']['name'];
  $filename =substr($_FILES['filename']["name"],0,strpos($_FILES['filename']["name"],"."));
  $uploadfile = $uploaddir.$filename.substr($_FILES['filename']["name"],strpos($_FILES['filename']["name"],"."));
  //目录名.文件名.后缀名
  $temploadfile = $_FILES['filename']['tmp_name'];
  move_uploaded_file($temploadfile , $uploadfile); //移动文件
  $path = $_SERVER['SCRIPT_FILENAME'];
  $filepath = $_SERVER["PHP_SELF"];
  $path = substr($path,0,strpos($path,$filepath));
  $htmlpath = $path."/shiyan4/".$uploadfile;
  word2html($htmlpath);
  //$query =@mysql_query( "Insert into $username(fname,file)values('$filename','$uploadfile')")or die("error");
}


word2html('1.docx');
?>
</head>
<body>
</body>
</html>