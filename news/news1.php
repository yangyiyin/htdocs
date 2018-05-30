<?php
include("../include/config.php");
include("../include/function.php");
$BigID=@$_REQUEST["BigID"];
if($BigID==""){
	$BigClass="最新资讯";
}
else{
	$sqls="select * from news_class where ID=".$BigID."";
	$results=mysql_db_query($dbname,$sqls);
	$rss=mysql_fetch_array($results);
	$BigClass=$rss["BigClass"];
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<TITLE>资讯中心_<?php echo $webname;?></TITLE>
<META content="text/html; charset=UTF-8" http-equiv=Content-Type>
<link href="../images/index.css" rel="stylesheet" type="text/css">
<link href="../images/reset.css" rel="stylesheet" type="text/css">
<link href="../images/ruanwen.css" rel="stylesheet" type="text/css">
<META name=GENERATOR content="MSHTML 8.00.6001.19394">
</head>
<body class="articleview">
<div class="header clearfix">
<link rel="stylesheet" href="/style/css/common.css" type="text/css" />
<?php
include("../menu.php");
?>
</div>
<div id="wrapmain">
  <div class="maincont clearfix">
  
    <div class="wrapindex clearfix">
      <!------------->
	  <div class="box" id="page_content">
    <div id="page_left">
        <div id="top_slide">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <!--li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                    <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                    <li data-target="#myCarousel" data-slide-to="3" class=""></li-->
                </ol>
                <div class="carousel-inner">
                                            <div class="item active">
                            <a title="" href="javascript:void(0)" target="_blank"><img src="/style/images/index_banner1.jpg" alt=""></a>
                            <div class="container">
                                <div class="carousel-caption">
                                    <h1><a title="" href="javascript:void(0)" target="_blank"></a></h1>
                                </div>
                            </div>
                        </div>
                                    </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
        <div id="post_list_box" class="border_gray">
            <div id="post_list">
			
			<?php
			/*-----------------接收相关数据值---------------------*/
			$BigID=@$_REQUEST["BigID"];
			$Page=@$_REQUEST["Page"];
			/*-----------------设置每页显示数目-------------------*/
			$List_Num=10;
			/*-----------------计算共有记录数--------------------*/
			if($BigID=="")
			{
			$sqlN="select Count(*) from news_info";
			}
			else
			{
			$sqlN="select Count(*) from news_info where class_id=".$BigID."";
			}
			$resultN=mysql_db_query($dbname,$sqlN);
			$rsN=mysql_fetch_array($resultN);
			$Num=$rsN[0];

			/*------------------计算共有页数--------------------*/
			$CountPage=ceil($Num/$List_Num);
			/*-------------------设置当道页--------------------*/
			$Cpage=$Page+1;
			/*--------------------------------------------------*/

			if($BigID=="")
			{
			$sql="select * from news_info order by ID desc limit ".($List_Num*$Page).",".$List_Num."";
		
			}
			else
			{
			$sql="select * from news_info where class_id=".$BigID." order by ID desc limit ".($List_Num*$Page).",".$List_Num."";
			
			}
			$result=mysql_db_query($dbname,$sql);
					 if (mysql_num_rows($result)==NULL)
					 {
					 $fy="no";
							  echo "<br><table width=95% border=0 align=center cellpadding=0 cellspacing=0><tr>
							 <td align=center><span class=rd rd>还没有添加数据！</span></td></tr></table>";
					 }
					 else
					 {
					 $fy="yes";
					
						  while($rs=mysql_fetch_array($result))
						  {
			?>
			
			
			
			
			
                                    <div class="post">
                        <div class="post_left">
                            <a href="../news/newsinfo.php?ID=<?php echo $rs["ID"];?>" target="_blank" title="<?php echo $newsOB->utfSubstr($rs["title"],0,100);?>"><img src="/images/logo.png" alt="<?php echo $newsOB->utfSubstr($rs["title"],0,100);?>"></a>
                            <a href="/news.php" target="_blank"><span class="post_type_salon" style="background-color:#ed0d0d"><?php echo $BigClass;?></span></a>
                        </div>
                        <div class="post_right">
                            <h1 class="post_title"><a href="../news/newsinfo.php?ID=<?php echo $rs["ID"];?>" target="_blank" title="<?php echo $newsOB->utfSubstr($rs["title"],0,100);?>"><?php echo $newsOB->utfSubstr($rs["title"],0,100);?></a></h1>
                            <div class="post_property">
                                <div class="post_spliter">•</div>
                                <div class="post_date"><?php echo $rs["data"];?></div>
                                <div class="clear"></div>
                            </div>
                            <p class="post_brief">　　　　怎么发新闻、投稿、发新闻、发软文、发文章、发稿、就上软文批发网（www.szyjtcm.cn）全国3000多家网络媒体资源自由选择</p>
                        </div>
                    </div>
                                 
					<?php
					}
				 }?>			 
								 
								 
								 
								 
								 
                            </div>
           <DIV class=pagelist>
			<?php
				 if ($fy=="yes")
				 {
								  echo "当前为".$Cpage."/".$CountPage."页  共".$Num."条记录&nbsp;&nbsp;";
								  
								  if($Page!=0)
								  {
								  $Prv=$Page-1;
								  echo "<a href='../news/news.php"."'>首页</a>&nbsp;&nbsp;";
								  echo "<a href='../news/news.php?Page=".$Prv.""."'>上一页</a>&nbsp;&nbsp;";
								  }
								  else
								  {
								   echo "首页&nbsp;&nbsp;";
								   echo "上一页&nbsp;&nbsp;";
								  }
								  if($Page!=$CountPage-1)
								  {
								  $NtPage=$Page+1;
								  $EdPage=$CountPage-1;
								  echo "<a href='../news/news.php?Page=".$NtPage."'>下一页</a>&nbsp;&nbsp;";
								  echo "<a href='../news/news.php?Page=".$EdPage."'>尾页</a>&nbsp;&nbsp;";
								  }
								  else
								  {
								   echo "下一页&nbsp;&nbsp;";
								   echo "尾页&nbsp;&nbsp;";
								  }
				 }
				 ?>
			</DIV>
        </div>
    </div>
    <div id="page_right">
        <div id="post_label" class="right_box border_gray">
            <div class="right_box_title">分类</div>
            <a href="#" title="" target="_blank" class="btn_more"></a>
            <div class="right_box_content">
                <ul>
				<?php
					$sql1="select * from news_class order by ID asc";
					$result1=mysql_db_query($dbname,$sql1);
						while($rs1=mysql_fetch_array($result1))
						{
						if($BigID==$rs1["ID"]){
					?>
					<a href="../news/news.php?BigID=<?php echo $rs1["ID"];?>" class=sideba><li><?php echo $rs1["BigClass"];?></li></a>
					<?php
						 }else{ ?>
					<a href="../news/news.php?BigID=<?php echo $rs1["ID"];?>"><li><?php echo $rs1["BigClass"];?></li></a>
					<?php
						 }
						}?>

                </ul>
                <div class="clear"></div>
            </div>
        </div>
        <div class="clear"></div>
       
        <div id="top_post" class="right_box border_gray">
            <div class="right_box_title">热点资讯</div>
            <div class="right_box_content">
			
			<?php
					$sql2="select * from news_info where tj=1 order by ID desc limit 0,10";
					$result2=mysql_db_query($dbname,$sql2);
						while($rs2=mysql_fetch_array($result2))
						{
					
					?>
					

				
						
<a class="top_post_item day_best_post" target="_blank" href="../news/news.php?BigID=<?php echo $rs2["ID"];?>" title="<?php echo $newsOB->utfSubstr($rs2["title"],0,100);?>" alt="<?php echo $newsOB->utfSubstr($rs2["title"],0,100);?>" style="display: block;">
                        <img src="/images/logo.png">
                        <p><?php echo $newsOB->utfSubstr($rs2["title"],0,100);?></p>
                        <div class="clear"></div>
                    </a>
                      	<?php
				
						}?>             
                                
                            </div>
        </div>
    </div>
</div>

	  <!------------->
    </div>
  </div>
</div>

<?php
include("footer.php");
?>
</body>
</html>