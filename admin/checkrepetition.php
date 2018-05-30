<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head runat="server">
<?php
include ("checkuser.php");
include ("../include/config.php");
include ("../include/function.php");


$cfsql="select medianame,count(*) as count from media_info group by medianame having count>1";

$cfresult=mysql_query($cfsql);


	




?>
<title>后台管理</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="skin/css/base.css" type="text/css" />
<SCRIPT language=javascript> 
<!-- 
window.onerror=function(){return true;} 
// --> 
</SCRIPT>
<STYLE type=text/css>
.alink{
line-height:32px;}
.alink a{
border:#999999 1px solid;
padding-left:6px; padding-right:6px; padding-bottom:2px; padding-top:2px;
margin-lef:2px; margin-right:2px; color:#999999 color:#3399FF}
.alink a:hover{
background:#FFFFCC; border:#999999 1px solid; text-decoration:none; color:#3399FF}
.ok{
border:#999999 1px solid;
padding-left:6px; padding-right:6px; padding-bottom:2px; padding-top:2px;
margin-lef:2px; margin-right:2px; color:#3399FF; font-weight:bold;
}
.pager{
background:#ffffff; line-height:32px; padding-left:6px;}
.pager a{
border:#999999 1px solid;
padding-left:6px; padding-right:6px; padding-bottom:2px; padding-top:2px;
margin-lef:2px; margin-right:2px; color:#999999 color:#3399FF}
.pager a:hover{
background:#FFFFCC; border:#999999 1px solid; text-decoration:none; color:#3399FF}
#casea{margin-right:2px;float:right;font-weight:700}
#casea a{color:blue;}
</STYLE>
</HEAD>
<BODY bottomMargin=0 leftMargin=0 rightMargin=0 topMargin=0>
<TABLE border=0 cellSpacing=0 cellPadding=0 width="100%" style="font-size:12px">
  <TBODY>
  <TR>
    <TD>
	 
      <TABLE border=0 cellSpacing=0 cellPadding=0 width="98%" align=center style="font-size:12px">
        <TBODY>
        <TR bgColor=#7691c7>
          <TD bgColor=#FFFFFF colSpan=12 align=middle>
		  <form id="myform" name="myform" method="post" action="savemtbiginfo.php?action=del&amp;titleID=media">
            <TABLE style="BORDER-COLLAPSE: collapse" border=1 cellSpacing=0 borderColor=#c9d3e9 cellPadding=0 width="100%" align=center style="font-size:12px">

		
              <TBODY>
              <TR height=25 bgColor=#e3e8f3>
                <TD>
                  <DIV align=center>序号</DIV></TD>
				<TD>
                  <DIV align=center>媒体名称</DIV></TD>
				   
				  
				  
                <TD>
                  <DIV align=center>媒体大类</DIV></TD>
				<TD>
                  <DIV align=center>媒体小类</DIV></TD>
				  
				  
				  
			
			<TD>
                  <DIV align=center>媒体主</DIV></TD>	  
           <TD>
                  <DIV align=center>联系编辑</DIV></TD>

				<TD>
                  <DIV align=center>成本价</DIV></TD>
               
                <TD>
                  <DIV align=center>零售价</DIV></TD>
				  <TD>
                  <DIV align=center>市场价</DIV></TD>
				<TD>
                  <DIV align=center>新闻源</DIV></TD>
                <TD>
                  <DIV align=center>所在地区</DIV></TD>
                <TD>
                  <DIV align=center>操作</DIV></TD>
				<TD>
                  <DIV align=center>选择</DIV></TD></TR></TR>
			<?php
			
			
			while($cfrs=mysql_fetch_array($cfresult)){


$sql="select * from media_info  where sh=1 and medianame='".$cfrs[medianame]."'";
$result=mysql_query($sql);		
		
			
			
			
			
	
			while($rs=mysql_fetch_array($result))
			{
			?>
			
			
			
			
			
			
			
              <TR onmouseover="this.bgColor='#FBDFCC';" onmouseout="this.bgColor='#FFFFFF';" height=25>
				<TD>
                  <DIV align=center><?php echo $rs["ID"];?></DIV></TD>
				<TD>
                  <DIV align=center><A href="<?php echo $rs["weburl"];?>" target=_blank><?php echo $newsOB->utfSubstr($rs["medianame"],0,20);?></A><span id='casea'><A href="<?php echo $rs["weburl"];?>" target=_blank>案例</A></span></DIV></TD>
				  
                <TD>
                  <DIV align=center><?php
				  $sqlB="select * from nav_class where ID=".$rs["nav_id"]."";
                  $resultB=mysql_db_query($dbname,$sqlB);
			      $rsB=mysql_fetch_array($resultB);
				  echo $rsB["BigClass"];
				  ?></DIV></TD>
				<TD>
                  <DIV align=center><?php
				  $sqlB="select * from media_class where ID=".$rs["class_id"]."";
                  $resultB=mysql_db_query($dbname,$sqlB);
			      $rsB=mysql_fetch_array($resultB);
				  echo $rsB["SmallClass"];
				  ?></DIV></TD>
				<TD>
                  <DIV align=center><?php 
				  $sqlU="select A.ID,A.VipUser,B.ID,B.VipUser from media_info as A,user as B where A.VipUser=B.VipUser and A.ID=".$rs["ID"]."";
                  $resultU=mysql_db_query($dbname,$sqlU);
			      $rsU=mysql_fetch_array($resultU);
				  if($rs["VipUser"]==NULL){
					  echo "管理员发布";
				  }else{
					  echo "<a href='vipinfo.php?ID=".$rsU["ID"]."'>".$rs["VipUser"]."</a>";
				  }
				  
				  ?></a></DIV></TD>
              <TD>
                  <DIV align=center><?php echo $rs["tela"];?></DIV></TD>
					
				<TD>
                  <DIV align=center><?php echo $rs["scprice"];?>元</DIV></TD>
                
                <TD>
                  <DIV align=center><?php echo $rs["price"];?>元</DIV></TD>
				  <TD>
                  <DIV align=center><?php echo $rs["sccprice"];?>元</DIV></TD>
				<TD>
                  <DIV align=center><?php echo $rs["xinwenyuan"];?></DIV></TD>
                <TD>
                  <DIV align=center><?php echo $rs["diqu"];?></DIV></TD>
                <TD>
                  <DIV class="alink" align=center><A href="editmtbiginfo.php?ID=<?php echo $rs["ID"];?>&nav_id=<?php echo $rs["nav_id"];?>&class_id=<?php echo $rs["class_id"];?>&small_id=<?php echo $rs["small_id"];?>&titleID=media">修改</A></DIV></TD>
				<TD>
                  <DIV align=center><input name="ID[]" type="checkbox" id="ID[]" value="<?php echo $rs["ID"]?>" /></DIV></TD></TR>
			<?php
			
			}}?>
			
			
			
			
			
			
			
                  <tr align="center">
                    <td colspan="12" align="right" bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="2">
                        <tr>
                      
                          <td width="13%" align="right"><a href="#" onclick="mm();">全选</a>
                              <input type="checkbox" name="checkbox" value="Check All" onclick="mm();" />
                              <input type="submit" name="Submit" value="删 除" onclick="return test();" /></td>
                        </tr>
                    </table></td>
                  </tr>
			  </TBODY>
		
		
			
			
			  </TABLE></form></TD></TR></TBODY></TABLE>
      <TABLE border=0 cellSpacing=0 cellPadding=0 width="100%" style="font-size:12px">
        <TBODY>
        <TR>
          <TD>&nbsp;</TD></TR></TBODY></TABLE></TD></TR></TBODY>
</TABLE>
<?php
include ("footx.php");
?>
</BODY>
</HTML>
<script language="javascript" src="comm_js/javascriptTxt.js"></script>
<script language="javascript">
function getVal(){
	$.getJSON("select.php",{nav_id:$("#nav_id").val()},function(json){
	var sc_id = $("#sc_id");
	$("option",sc_id).remove(); //清空原有的选项，也可使用 sc_id.empty();
	$.each(json,function(index,array){
	var option = "<option value='"+array['sc_id']+"'>"+array['sc_name']+"</option>";
	sc_id.append(option);
	});
	});
	}
	//下面是页面加载时自动执行一次getVal()函数
	$().ready(function(){
	getVal();
	$("#nav_id").change(function(){//有变动时，执行getVal()函数
	getVal();
	});
	});
</script>