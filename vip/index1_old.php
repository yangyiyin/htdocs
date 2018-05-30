<?php
include("../include/config.php");
include("../include/function.php");
$VipUser=$_COOKIE["VipUser"];
//echo "<script>alert('".$VipUser."');</script>";
$sql="select * from user where VipUser='".$VipUser."'";
$result=mysql_db_query($dbname,$sql);
$rs=mysql_fetch_array($result);
if($rs!=NULL)
{
    $yue=$rs["yue"];
}
?>
<?php 

if($_COOKIE["fg"]==2){
	$sqlN="select Count(*) from media_info where sh=1 and VipUser='".$VipUser."'";
}else{
	$sqlN="select Count(*) from media_info where sh=1";
}
$resultN=mysql_db_query($dbname,$sqlN);
$rsN=mysql_fetch_array($resultN);
$Num=$rsN[0];
?>
<HTML>
<HEAD>
<TITLE>软文价格中心 - 好推手</TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<link href="/css/buttons.css" type="text/css" rel="stylesheet"/>
<link href="../images/reset.css" rel="stylesheet" type="text/css" />
<link href="../images/zh-cn-system.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="../images/jquery.min.js"></script>
<script language="javascript" type="text/javascript" src="../images/styleswitch.js"></script>
</HEAD>
<BODY>
<DIV style="_width: 80.9%; _margin-right: -12px" id=main_frameid class="pad-10 display">
<DIV class="col-2  col-auto">
<H6>价格查询系统</H6>
<div class='stypelist'>
<?php
$list='';
$dclink='';
$mtdl='';
$dcmc='';
$mtdltj='';
switch($_GET["type"])
	{
	case "1":
	$list="<a class='on' href='?type=1'>PC端网媒</a><a  href='?type=2'>自媒体APP</a>";
	$dclink='rwgzy.php';
	$mtdl='综合门户网站';
	$dcmc='导出媒体资源表';
	$mtdltj='paixu>50';
	$typefl=1;
		break;
	case "2":
	$list="<a  href='?type=1'>PC端网媒</a><a class='on' href='?type=2'>自媒体APP</a>";
	$dclink='rwgzy.php?fl=zmt';
	$dcmc='导出自媒体资源表';
	$mtdl='客户端自媒体';
	$mtdltj='paixu<51';
	
	$typefl=2;
		break;

	default:
	$list="<a class='on' href='?type=1'>PC端网媒</a><a  href='?type=2'>自媒体APP</a>";
	$dclink='rwgzy.php';
	$mtdl='综合门户网站';
	$dcmc='导出媒体资源表';
	$mtdltj='paixu>50';
	$typefl=1;
	}


?>
<?php 
echo $list;

?>
<input type="hidden" name="typefl" id="typefl" value="<?php 
echo $typefl;

?>">
</div>
<DIV class=content>
<DIV id=flselect>
<TABLE style="BORDER-BOTTOM: #ccc 1px solid; BORDER-LEFT: #ccc 1px solid; PADDING-BOTTOM: 5px; BORDER-TOP: #ccc 1px solid; BORDER-RIGHT: #ccc 1px solid" border=0 cellPadding=0 width="100%" id="rkjb">
  <TBODY>

 

<tr>
			<td style="padding:10px;margin:5px;"><input type="hidden" name="hyfl" id="hyfl" value="0">
			<span onclick=mt_search3() class="button button-primary button-rounded button-small">行业分类</span>
			<a onclick="mt_search1(0)" class="button button-pill button-tiny areaon">不限</a>
			 <?php
		$sqls="select * from media_class where BigID=46 order by paixu desc";
		$results=mysql_db_query($dbname,$sqls);
		while($rss=mysql_fetch_array($results))
		{
	  ?>
	  
	<a onclick=mt_search1(<?php echo $rss["ID"];?>) class="button button-pill button-tiny"><?php echo $rss["SmallClass"];?></a>
<?php } ?>
			</td>
		</tr>




<tr>
			<td style="padding:10px;margin:5px;"><input type="hidden" name="zmt" id="zmt" value="0">
			<span onclick=mt_search3() class="button button-primary button-rounded button-small"><?php echo $mtdl;?></span>
<a onclick="mt_search7(0)" class="button button-pill button-tiny areaon">不限</a>			
			<?php
		$sqls="select * from menhu_class where ".$mtdltj." order by paixu asc";
		
		$results=mysql_db_query($dbname,$sqls);
		while($rss=mysql_fetch_array($results))
		{
	  ?>
	  
	<a onclick="mt_search7('<?php echo $rss["BigClass"];?>')" class="button button-pill button-tiny"><?php echo $rss["BigClass"];?></a>
<?php } ?>
<a href="<?php echo $dclink;?>" class="button button-primary button-rounded button-small" target="_blank"><?php echo $dcmc;?></a>
			</td>
		</tr>


<!--<tr>
			<td style="padding:10px;margin:5px;">
			<span onclick=mt_search3() class="button button-primary button-rounded button-small">综合门户网站</span>
			   <a onclick="mt_search7(0)" class="button button-pill button-tiny areaon">不限</a>
			  <?php
		$sqls="select * from menhu_class where paixu>50 order by paixu asc";
		$results=mysql_db_query($dbname,$sqls);
		while($rss=mysql_fetch_array($results))
		{
	  ?>
	 
	<a onclick="mt_search7('<?php echo $rss["BigClass"];?>')" class="button button-pill button-tiny"><?php echo $rss["BigClass"];?></a>
	
<?php } ?>  
	<a href="rwgzy.php" class="button button-primary button-rounded button-small" target="_blank">导出媒体资源表</a>
			</td>
		</tr>   -->




<tr>
			<td style="padding:10px;margin:5px;"><input type="hidden" name="fgdq" id="fgdq" value="0">
			<span onclick=mt_search3() class="button button-primary button-rounded button-small">覆盖地区</span>
 <a onclick="mt_search6(0)" class="button button-pill button-tiny areaon">不限</a>			
			<?php
		$sqls="select * from diqu_class order by paixu asc";
		$results=mysql_db_query($dbname,$sqls);
		while($rss=mysql_fetch_array($results))
		{
	  ?>
	 
	<a onclick="mt_search6('<?php echo $rss["BigClass"];?>')" class="button button-pill button-tiny"><?php echo $rss["BigClass"];?></a>
<?php } ?>
			</td>
		</tr>



<tr>
			<td style="padding:10px;margin:5px;"><input type="hidden" name="ljqk" id="ljqk" value="0">
			<span onclick=mt_search3() class="button button-primary button-rounded button-small">链接情况</span>
		<a onclick="mt_search5(0)" class="button button-pill button-tiny areaon">不限</a>
	<a onclick="mt_search5('可带网址')" class="button button-pill button-tiny">可带网址</a>
	<a onclick="mt_search5('不能带网址')" class="button button-pill button-tiny">不能带网址</a>

			</td>
		</tr>
		
		<tr>
			<td style="padding:10px;margin:5px;"><input type="hidden" name="slqk" id="slqk" value="0">
			<span onclick=mt_search3() class="button button-primary button-rounded button-small">收录情况</span>
			
		<a onclick="mt_search4(0)" class="button button-pill button-tiny areaon">不限</a>	
	<a class="button button-pill button-tiny" onclick="mt_search4('百度新闻源')">百度新闻源</a>
    <a class="button button-pill button-tiny" onclick="mt_search4('360新闻源')">360新闻源</a>
    <a class="button button-pill button-tiny" onclick="mt_search4('网页收录')">网页收录</a>


			</td>
		</tr>
	<tr>
			<td style="padding:10px;margin:5px;"><input type="hidden" name="paixu" id="paixu" value="0">
			<span onclick=mt_search3() class="button button-primary button-rounded button-small">价格分类</span>
	<a onclick="mt_search2(0)" class="button button-pill button-tiny areaon">不限</a>		
	<a onclick="mt_search2(1)" class="button button-pill button-tinyn">5-20元</a>	
	<a class="button button-pill button-tiny" onclick="mt_search2('2')">20-50元</a>
    <a class="button button-pill button-tiny" onclick="mt_search2('3')">50元以上</a>
   


			</td>
		</tr>	

  </TBODY></TABLE>
  
  <form name="form2" id='searchtrun' style="margin-bottom:20px;">
          <br />
          <table width="100%" cellpadding="0" cellspacing="0" bgcolor="#e2e2e2" >
            <tr>
              <td width="12%" height="28" bgcolor="#FFFFFF" style="border-top:1px solid #ccc; border-left:1px solid #ccc; border-right:1px solid #ccc;"><div align="center">媒体查找</div></td>
       			  <td width="88%" align="center" valign="middle" bgcolor="#FFFFFF"><table border="0" cellpadding="5" cellspacing="2">
                  <tr>
				<td><div style='margin-right:80px;'><!--共有<?php echo $Num;?>家媒体资源--></div></td>
				  
                    <td><div align="center">媒体名称</div></td>
                   <td><input name="meiti_name" type="text" class="txt" id="meiti_name" size="13" onkeydown="if(event.keyCode == 13)event.returnValue = false;"/></td>
				   
				   
              </select></td>
                    <td><input type="button" name="button2" id="button2" value="查找" onclick="mt_search();" style="border:1px solid #ccc; background:#e2e2e2;color:#000; width:80px; cursor:pointer;"/></td>
                    <td></td>
                  </tr>
                </table></td>
            </tr>
            <tr>
              <td height="23" colspan="2" bgcolor="#FFFFFF"><div id="s_meti"></div></td>
            </tr>
          </table>
        </form></DIV>
		
		
		
</DIV></DIV>
<DIV class="bk20 hr"></DIV></DIV>
<DIV style="DISPLAY: none" id=background class=background></DIV>
<DIV style="DISPLAY: none" id=progressBar class=progressBar>数据加载中，请稍等...</DIV>
<SCRIPT type=text/javascript>

$(document).ready(function(){
	
	var ajaxbg = $("#background,#progressBar"); 
	ajaxbg.hide(); 
	$(document).ajaxStart(function () { 
	ajaxbg.show(); 
	}).ajaxStop(function () { 
	ajaxbg.hide(); 
	});  
	 mt_search();
})
 

function mt_search()
{
	$.get("../user/search1.php?a=mt_search",{"mc":$("#meiti_name").val(),"cid":$("#class_id").val(),"skey":$("#skey").val(),"mh":$("#zhmh").val(),"diqu":$("#diqu").val(),"lurl":$("#linkurl").val(),"xwy":$("#xinwenyuan").val()},function(data){

		$("#s_meti").html(data);
	});
}

function mt_search1(id)
{
	$.get("../user/search1.php?a=mt_search",{"fl":id},function(data){

		$("#s_meti").html(data);
	});
}

function mt_search2(id)
{
	$.get("../user/search1.php?a=mt_search",{"jg":id},function(data){

		$("#s_meti").html(data);
	});
}

function mt_search3(id)
{
	$.get("../user/search1.php?a=mt_searchall",{"jg":"all"},function(data){

		$("#s_meti").html(data);
	});
}
  

function mt_search4(id)
{ 
	$.get("../user/search1.php?a=mt_searchall",{"xw":id},function(data){

		$("#s_meti").html(data);
	});
}

function mt_search5(id)
{ 
	$.get("../user/search1.php?a=mt_searchall",{"lj":id},function(data){

		$("#s_meti").html(data);
	});
}
function mt_search6(id)
{ 
	$.get("../user/search1.php?a=mt_searchall",{"dq":id},function(data){

		$("#s_meti").html(data);
	});
}
function mt_search7(id)
{ 
	$.get("../user/search1.php?a=mt_searchall",{"zhmh":id},function(data){

		$("#s_meti").html(data);
	});
}

function meiturn()
{ 
	$("#searchtrun").slideToggle();
} 
 
</SCRIPT>

<SCRIPT language=javascript> 
var rows = document.getElementsByTagName('tr');//获取所有表格行
for (var i=0;i<rows.length;i++){//然后对其遍历
    rows[i].onmouseover = function(){      
        this.className += 'highlight';//鼠标经过时，显示样式altrow,注意，js中的样式是className而不是class，这个是新手容易犯的错误；
    }
    rows[i].onmouseout = function(){       
        this.className = this.className.replace('highlight','');//鼠标一走的时候，把样式也去掉
    }
}
$(function(){
   $("#skey a").click(function(){
         $("#skey a").removeClass("areaon");
         $(this).addClass("areaon");
   });
});
</SCRIPT>
</BODY>
</HTML>
