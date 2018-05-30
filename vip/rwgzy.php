<?php
include ("../include/config.php");
include ("../include/function.php");

require_once("../Classes/PHPExcel.php");
$excel = new PHPExcel(); //实例化PHPExcel类
//设置作者(非必要)
$excel->getProperties()->setCreator("zxgzw");

//以下是要导出的数据
if($_GET["fl"]=="zmt"){
$fileName='软文阁自媒体报价表';
$sql="select SmallClass,medianame,anliurl,price,linkurl,xinwenyuan,content,zhmh,typefl from media_info,media_class where media_info.typefl=2  AND media_class.id=media_info.class_id AND media_info.sh=1 order by medianame desc";	
}else
if($_GET["fl"]=="wxgzh"){
$fileName='软文阁微信公众号报价表';
$sql="select SmallClass,medianame,anliurl,price,fans,diqu,content,zhmh,typefl from media_info,media_class where media_info.typefl=3  AND media_class.id=media_info.class_id AND media_info.sh=1 order by medianame desc";	
}else
if($_GET["fl"]=="xlwb"){
$fileName='软文阁新浪微博报价表';
$sql="select SmallClass,medianame,anliurl,price,fans,diqu,content,zhmh,typefl from media_info,media_class where media_info.typefl=4  AND media_class.id=media_info.class_id AND media_info.sh=1 order by medianame desc";	
}else
	if($_GET["fl"]=="meiti"){
		$fileName='软文阁优势媒体报价表';
$sql="select zhmh,SmallClass,medianame,anliurl,price,linkurl,xinwenyuan,content,typefl from media_info,media_class where media_info.typefl=1 AND media_class.id=media_info.class_id AND media_info.sh=1 order by zhmh desc";
	}
else
		if($_GET["fl"]=="diqu"){
			$fileName='软文阁优势媒体报价表';
$sql="select diqu,SmallClass,medianame,anliurl,price,linkurl,xinwenyuan,content,zhmh,typefl from media_info,media_class where media_info.typefl=1 AND media_class.id=media_info.class_id AND media_info.sh=1 order by diqu desc";
		}


else{
$fileName='软文阁优势媒体报价表';
$sql="select SmallClass,medianame,anliurl,price,linkurl,xinwenyuan,content,zhmh,typefl from media_info,media_class where media_info.typefl=1 AND media_class.id=media_info.class_id AND media_info.sh=1 order by SmallClass asc";

}
ECHO $sql;
$result=mysql_db_query($dbname,$sql);


//set width 
if($_GET["fl"]=="diqu"){
$excel->getActiveSheet()->getColumnDimension('A')->setWidth(10);
$excel->getActiveSheet()->getColumnDimension('B')->setWidth(20); 
$excel->getActiveSheet()->getColumnDimension('C')->setWidth(30);
$excel->getActiveSheet()->getColumnDimension('D')->setWidth(60);
$excel->getActiveSheet()->getColumnDimension('E')->setWidth(15);
$excel->getActiveSheet()->getColumnDimension('F')->setWidth(15);
$excel->getActiveSheet()->getColumnDimension('G')->setWidth(25);
$excel->getActiveSheet()->getColumnDimension('H')->setWidth(60);
}elseif($_GET["fl"]=="meiti"){
$excel->getActiveSheet()->getColumnDimension('A')->setWidth(15);
$excel->getActiveSheet()->getColumnDimension('B')->setWidth(20); 
$excel->getActiveSheet()->getColumnDimension('C')->setWidth(30);
$excel->getActiveSheet()->getColumnDimension('D')->setWidth(60);
$excel->getActiveSheet()->getColumnDimension('E')->setWidth(15);
$excel->getActiveSheet()->getColumnDimension('F')->setWidth(15);
$excel->getActiveSheet()->getColumnDimension('G')->setWidth(25);
$excel->getActiveSheet()->getColumnDimension('H')->setWidth(60);	
}else{
$excel->getActiveSheet()->getColumnDimension('A')->setWidth(20); 
$excel->getActiveSheet()->getColumnDimension('B')->setWidth(30);
$excel->getActiveSheet()->getColumnDimension('C')->setWidth(60);
$excel->getActiveSheet()->getColumnDimension('D')->setWidth(15);
$excel->getActiveSheet()->getColumnDimension('E')->setWidth(15);
$excel->getActiveSheet()->getColumnDimension('F')->setWidth(25);
$excel->getActiveSheet()->getColumnDimension('G')->setWidth(60);
}
//单元格居中
$excel->getDefaultStyle()->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$excel->getDefaultStyle()->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);

//开始导出。注意$i要从1开始，不能从0开始，原因如下：'A'.$i,当i=1即为A1(第一行，第一个格子)

//表头数组
if($_GET["fl"]=="wxgzh" || $_GET["fl"]=="xlwb"){
$letter = array('A','B','C','D','E','F','G');
$tableheader = array('媒体分类','媒体名称','案例','会员价','粉丝数量','地区','备注');
}elseif($_GET["fl"]=="diqu"){
$letter = array('A','B','C','D','E','F','G','H');
$tableheader = array('地区','媒体分类','媒体名称','案例','会员价','带网址情况','收录情况','备注');	
}elseif($_GET["fl"]=="meiti"){
$letter = array('A','B','C','D','E','F','G','H');
$tableheader = array('门户名称','媒体分类','媒体名称','案例','会员价','带网址情况','收录情况','备注');
}
else{
$letter = array('A','B','C','D','E','F','G');
$tableheader = array('媒体分类','媒体名称','案例','会员价','带网址情况','收录情况','备注');	
}

//填充表头信息

for($i = 0;$i < count($tableheader);$i++) {
    $excel->getActiveSheet()->setCellValue("$letter[$i]1","$tableheader[$i]");
}
//填充内容信息


if($_GET["fl"]=="diqu"){
for($i = 2;$i <= mysql_num_rows($result)+1;$i++){
	$datas=mysql_fetch_row($result);
	$excel->getActiveSheet()->setCellValue('A'.$i, $datas['0']);
	$excel->getActiveSheet()->setCellValue('B'.$i, $datas['1']);
	$excel->getActiveSheet()->setCellValue('C'.$i, $datas['2']);
	$excel->getActiveSheet()->setCellValue('D'.$i, $datas['3']);
	$excel->getActiveSheet()->setCellValue('E'.$i, $datas['4']);
	$excel->getActiveSheet()->setCellValue('F'.$i, $datas['5']);
	$excel->getActiveSheet()->setCellValue('G'.$i, $datas['6']);
	$excel->getActiveSheet()->setCellValue('H'.$i, strip_tags(str_replace("&nbsp;","",$datas['7'])));
	

}
}elseif($_GET["fl"]=="meiti"){
	for($i = 2;$i <= mysql_num_rows($result)+1;$i++){
	$datas=mysql_fetch_row($result);
	$excel->getActiveSheet()->setCellValue('A'.$i, $datas['0']);
	$excel->getActiveSheet()->setCellValue('B'.$i, $datas['1']);
	$excel->getActiveSheet()->setCellValue('C'.$i, $datas['2']);
	$excel->getActiveSheet()->setCellValue('D'.$i, $datas['3']);
	$excel->getActiveSheet()->setCellValue('E'.$i, $datas['4']);
	$excel->getActiveSheet()->setCellValue('F'.$i, $datas['5']);
	$excel->getActiveSheet()->setCellValue('G'.$i, $datas['6']);
	$excel->getActiveSheet()->setCellValue('H'.$i, strip_tags(str_replace("&nbsp;","",$datas['7'])));
   
}
	
	
	
}else{
for($i = 2;$i <= mysql_num_rows($result)+1;$i++){
	$datas=mysql_fetch_row($result);
	$excel->getActiveSheet()->setCellValue('A'.$i, $datas['0']);
	$excel->getActiveSheet()->setCellValue('B'.$i, $datas['1']);
	$excel->getActiveSheet()->setCellValue('C'.$i, $datas['2']);
	$excel->getActiveSheet()->setCellValue('D'.$i, $datas['3']);
	$excel->getActiveSheet()->setCellValue('E'.$i, $datas['4']);
	$excel->getActiveSheet()->setCellValue('F'.$i, $datas['5']);
	$excel->getActiveSheet()->setCellValue('G'.$i, strip_tags(str_replace("&nbsp;","",$datas['6'])));

}	
	
}





$excel->getActiveSheet()->setTitle("$fileName"); //含义见下图


ob_end_clean();//清除缓冲区,避免乱码
header("Pragma: public");
header("Expires: 0");
header("Cache-Control:must-revalidate, post-check=0, pre-check=0");
header("Content-Type:application/force-download");
header("Content-Type:application/vnd.ms-execl");
header("Content-Type:application/octet-stream");
header("Content-Type:application/download");;
header('Content-Disposition: attachment;filename="'.$fileName.time().'.xls"');
header("Content-Transfer-Encoding:binary");

$objWriter = PHPExcel_IOFactory::createWriter($excel, 'Excel5');
$objWriter->save('php://output');  


?>