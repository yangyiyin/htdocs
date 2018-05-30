<?php
include ("../include/config.php");
include ("../include/function.php");
require_once("../Classes/PHPExcel.php");
$VipUser=$_COOKIE["VipUser"];
$excel = new PHPExcel(); //实例化PHPExcel类
//设置作者(非必要)
$excel->getProperties()->setCreator("zxgzw");
//以下是要导出的数据
$sql="select order_id,title,weburl,medianame,price,data from ruanwen_info where VipUser='".$VipUser."' and flag=2 and yn=1 order by ID desc";
$result=mysql_db_query($dbname,$sql);


//set width 

$excel->getActiveSheet()->getColumnDimension('A')->setWidth(18); 
$excel->getActiveSheet()->getColumnDimension('B')->setWidth(25);
$excel->getActiveSheet()->getColumnDimension('C')->setWidth(40);
$excel->getActiveSheet()->getColumnDimension('D')->setWidth(25);
$excel->getActiveSheet()->getColumnDimension('E')->setWidth(10);
$excel->getActiveSheet()->getColumnDimension('F')->setWidth(20);

//单元格居中
$excel->getDefaultStyle()->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$excel->getDefaultStyle()->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);

//开始导出。注意$i要从1开始，不能从0开始，原因如下：'A'.$i,当i=1即为A1(第一行，第一个格子)
$letter = array('A','B','C','D','E','F');
//表头数组
$tableheader = array('订单ID','文章标题','网址','发布网站','费用(元)','发布时间');
//填充表头信息
for($i = 0;$i < count($tableheader);$i++) {
    $excel->getActiveSheet()->setCellValue("$letter[$i]1","$tableheader[$i]");
}
//填充内容信息
for($i = 2;$i <= mysql_num_rows($result)+1;$i++){
	$datas=mysql_fetch_row($result);
	$excel->getActiveSheet()->setCellValue('A'.$i, $datas['0']);
	$excel->getActiveSheet()->setCellValue('B'.$i, $datas['1']);
	$excel->getActiveSheet()->setCellValue('C'.$i, $datas['2']);
	$excel->getActiveSheet()->setCellValue('D'.$i, $datas['3']);
	$excel->getActiveSheet()->setCellValue('E'.$i, $datas['4']);
	$excel->getActiveSheet()->setCellValue('F'.$i, $datas['5']);
	//$excel->getActiveSheet()->setCellValue('G'.$i, strip_tags($datas['6']));
}
$excel->getActiveSheet()->setTitle('软文发布列表'); //含义见下图

$fileName = '软文发布列表';
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