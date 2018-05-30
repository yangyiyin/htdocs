<?php
require_once("./dedeadmin/config.php");
//require_once("PHPExcel.php");
//$excel = new PHPExcel(); //实例化PHPExcel类

$sql="SELECT * FROM  dede_archives";
$dsql->SetQuery($sql); 
$dsql->Execute(); 

/*
//设置作者(非必要)
$excel->getProperties()->setCreator("Reson");

//以下是要导出的数据
$datas = array(
array(
	0 => 'UID',
	1 => '用户名',
	2 => '性别'
),
array(
	0 => '1',
	1 => 'reson',
	2 => '男'
),
array(
	0 => '2',
	1 => 'anyse',
	2 => '女'
)
);

//开始导出。注意$i要从1开始，不能从0开始，原因如下：'A'.$i,当i=1即为A1(第一行，第一个格子)
$i = 1;
foreach($datas as $key => $val){
	$excel->getActiveSheet()->setCellValue('A'.$i, $val['0']);
	$excel->getActiveSheet()->setCellValue('B'.$i, $val['1']);
	$excel->getActiveSheet()->setCellValue('C'.$i, $val['2']);
	$i++;
}

$excel->getActiveSheet()->setTitle('php学习人员名单'); //含义见下图

$fileName = 'test';
header("Pragma: public");
header("Expires: 0");
header("Cache-Control:must-revalidate, post-check=0, pre-check=0");
header("Content-Type:application/force-download");
header("Content-Type:application/vnd.ms-execl");
header("Content-Type:application/octet-stream");
header("Content-Type:application/download");;
header('Content-Disposition: attachment;filename="'.$fileName.'.xls"');
header("Content-Transfer-Encoding:binary");

$objWriter = PHPExcel_IOFactory::createWriter($excel, 'Excel5');
$objWriter->save('php://output');   */
?>