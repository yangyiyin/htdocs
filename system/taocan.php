<?php
include("../include/config.php");
include("../include/function.php");
$BigID=32;
if($BigID==""){
	$BigClass="软文阁";
}
else{
	$sqls="select * from news_class where ID=".$BigID."";
	
	$results=mysql_db_query($dbname,$sqls);
	$rss=mysql_fetch_array($results);
	$BigClass=$rss["BigClass"];
}

?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->

<HEAD>
<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
<title><?php echo $G_Title;?>_<?php echo $webname;?></title>
<meta name="keywords" content="<?php echo $E_KeyWords;?>" />
<meta name="description" content="<?php echo $E_Descr;?>" />
<META content="text/html; charset=utf-8" http-equiv=Content-Type>
<link rel="stylesheet" type="text/css" href="/style/css/bootstrap.css" >
<link rel="stylesheet" href="/style/css/anli.css" type="text/css" />
<link rel="stylesheet" href="/style/css/common.css" type="text/css" />
<LINK rel=stylesheet type=text/css href="../images/ruanwen.css" media=screen>
<LINK rel=icon type=image/x-icon href="../images/favicon.ico">

<META name=GENERATOR content="MSHTML 8.00.6001.19394">
<!--[if lt IE 9]>
<script src="/style/js/html5shiv.js"></script>
<script src="/style/js/respond.min.js"></script>
<![endif]-->
</HEAD>
<BODY>
<?php
include("../menu.php");
?>
<DIV >
<section class="init-banner">
        <img src="/style/images/banner-jiejuefangan.jpg">
        <div class="text">
            <h3>软文套餐</h3>            <p><small>针对各行业推出"全方位"的营销套餐！助您的企业品牌天天爆屏</small></p>        </div>
    </section>        <div class="wrap-slider">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-title">
                            <div class="breadcrumbs mgl2">
                                <ul>
                                    <li><a href="/">首页</a></li>
                                    <li>软文套餐</li>
                                </ul>
                            </div><!-- breadcrumb -->
                            <div class="page-content ">
                                <span>软文套餐</span>
                            </div>
                        </div><!-- page-title -->
                    </div>
                </div>
            </div><!-- container -->
        </div><!-- wrap-slider -->
 <section class="flat-row v8">

            <div class="container case">

<div class="row">



<?php
			/*-----------------接收相关数据值---------------------*/
			$BigID=32;
			$Page=@$_REQUEST["Page"];
			/*-----------------设置每页显示数目-------------------*/
			$List_Num=12;
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
			
			

                    <div class="col-md-4 col-sm-6 m-b-20">

                            <article class="post style2 column clearfix">

                                <div class="featured-post">

                                    <a href="../news/newsinfo.php?ID=<?php echo $rs["ID"];?>">

                                        
                                            <img src="<?php if($rs["images"]==""){
												echo "/images/logo.png";
											}
											else{
												echo $rs["images"];
											}
											?>">


                                </div><!-- /.feature-post -->

                                <div class="content-post">

                                    <h2 class="title-post"><?php echo $newsOB->utfSubstr($rs["title"],0,100);?></h2>

                                    <p><?php echo mb_substr(strip_tags($rs["content"]),0,85,'utf-8');?></p>

                                    </a>

                                    <a href="../news/newsinfo.php?ID=<?php echo $rs["ID"];?>" class="readmore">阅读全文</a>

                                </div><!-- /.contetn-post -->

                            </article>

                        </div>
							<?php
					}
				 }?>		
						


                </div>
				 <div class="blog-pagination pull-right m-t-20">
                    <ul class="flat-pagination">
					<?php
				 if ($fy=="yes")
				 {
								  echo "<li class='paginate_button'><a href='#'>当前为".$Cpage."/".$CountPage."页  共".$Num."条记录</a></li>";
								  
								  if($Page!=0)
								  {
								  $Prv=$Page-1;
								  echo "<li class='paginate_button'><a href='../system/taocan.php'>首页</a></li>";
								  echo "<li class='paginate_button'><a href='../system/taocan.php?Page=".$Prv."'>上一页</a></li>";
								  }
								  else
								  {
								   echo "<li class='paginate_button'><a href='#'>首页</a></li>";
								   echo "<li class='paginate_button'><a href='#'>上一页</a></li>";
								  }
								  if($Page!=$CountPage-1)
								  {
								  $NtPage=$Page+1;
								  $EdPage=$CountPage-1;
								  echo "<li class='paginate_button'><a href='../system/taocan.php?Page=".$NtPage."'>下一页</a></li>";
								  echo "<li class='paginate_button'><a href='../system/taocan.php?Page=".$EdPage."'>尾页</a></li>";
								  }
								  else
								  {
								   echo "<li class='paginate_button'><a href='#'>下一页</a></li>";
								   echo "<li class='paginate_button'><a href='#'>尾页</a></li>";
								  }
				 }
				 ?>
					
	




						 </ul><!-- /.flat-pagination -->
                </div>
            </div>

        </section>


</DIV>
<?php
include("footer.php");
?>
</BODY>
</HTML>
