<form method="post" action="" enctype="multipart/form-data">
         <h3>导入Excel表：</h3><input  type="file" name="file_stu" />
           <input type="submit" name="submit" value="导入" />
</form>
<?php 

include ("../include/config.php");
include ("../include/function.php");
require_once '../Classes/PHPExcel.php';
require_once '../Classes/PHPExcel/IOFactory.php';
require_once '../Classes/PHPExcel/Reader/Excel5.php';


if(isset($_POST["submit"])){

if (! empty ( $_FILES ['file_stu'] ['name'] ))
 {
    $tmp_file = $_FILES ['file_stu'] ['tmp_name'];
    $file_types = explode ( ".", $_FILES ['file_stu'] ['name'] );
    $file_type = $file_types [count ( $file_types ) - 1];
     /*判别是不是.xls文件，判别是不是excel文件*/
	 

     if (strtolower ( $file_type ) != "xls")              
    {
         echo '不是Excel文件，重新上传';
     }
    /*设置上传路径*/
     $savePath = '../upload/Excel/';
    /*以时间来命名上传的文件*/
     $str = date ( 'Ymdhis' ); 
     $file_name = $str . "." . $file_type;
     /*是否上传成功*/
     if (! copy ( $tmp_file, $savePath . $file_name )) 
      {
          echo '上传失败';
      }
 
}

$objReader = PHPExcel_IOFactory::createReader('Excel5');//use excel2007 for 2007 format 

$objPHPExcel = $objReader->load($savePath . $file_name); //$filename可以是上传的文件，或者是指定的文件

$sheet = $objPHPExcel->getSheet(0); 
$highestRow = $sheet->getHighestRow(); // 取得总行数 
$highestColumn = $sheet->getHighestColumn(); // 取得总列数
$k = 0; 
$sh= 0;

//循环读取excel文件,读取一条,插入一条
for($j=2;$j<=$highestRow;$j++)
{
 
$a = $objPHPExcel->getActiveSheet()->getCell("A".$j)->getValue();//获取A列的值
$b = $objPHPExcel->getActiveSheet()->getCell("B".$j)->getValue();//获取B列的值
$c = $objPHPExcel->getActiveSheet()->getCell("C".$j)->getValue();//获取C列的值
$d = $objPHPExcel->getActiveSheet()->getCell("D".$j)->getValue();//获取D列的值
$e = $objPHPExcel->getActiveSheet()->getCell("E".$j)->getValue();//获取E列的值
$sql = "INSERT INTO media_info(nav_id,class_id,sh,VipUser,medianame,weburl,anliurl,scprice,price,sccprice) VALUES('46','36','".$sh."','".$a."','".$b."','".$c."','".$d."','".$e."','".($e+10)."','".($e+40)."')";
echo $sql;
mysql_query($sql);
 
}


echo "<script>alert('导入成功,等待管理员审核！');location.href='../admin/managemtbiginfo1.php';</script>";	





}
?>