﻿<?php
include ("checkuser.php");
include ("../include/config.php");

$ID=$_REQUEST["ID"];
$sqlN="select * from daixie_info where ID=".$ID."";
$resultN=mysql_db_query($dbname,$sqlN);
//mysql_select_db($dbname);
//$resultN=mysql_query($sqlN);
$rsN=mysql_fetch_array($resultN)
?>
<HTML xmlns="http://www.w3.org/1999/xhtml">
<HEAD>
<TITLE>后台管理中心</TITLE>
<META content="text/html; charset=utf-8" http-equiv=Content-Type>
<META content=IE=7 http-equiv=X-UA-Compatible>
<META name=GENERATOR content="MSHTML 8.00.6001.19394">
<LINK rel=stylesheet type=text/css href="../images/reset.css">
<LINK rel=stylesheet type=text/css href="../images/zh-cn-system.css">
<SCRIPT language=javascript type=text/javascript src="../images/jquery.min.js"></SCRIPT>
<SCRIPT language=javascript type=text/javascript src="../images/styleswitch.js"></SCRIPT>

<SCRIPT type=text/javascript>
	window.focus();
	var pc_hash = 'oxB0Wa';
	</SCRIPT>
<script type="text/javascript" charset="utf-8" src="../ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="../ueditor/ueditor.all.min.js"> </script>
<script type="text/javascript" charset="utf-8" src="../ueditor/lang/zh-cn/zh-cn.js"></script>
<script>
    $(document).ready(function(){  
        var ue = UE.getEditor('editor');  
        var proinfo=$("#editora").text();  
          
        ue.ready(function() {//编辑器初始化完成再赋值  
            ue.setContent(proinfo);  //赋值给UEditor  
        });  
          
    });  
</script>
</HEAD>
<BODY>
<STYLE type=text/css>HTML {
	_overflow-y: scroll
}
</STYLE>

<DIV style="_width: 98.9%; _margin-right: -12px" id=main_frameid 
class="pad-10 display">
<DIV class="col-2  col-auto">
<H6>代写编辑</H6>
<DIV class=content>
<FORM id=form1 onsubmit="return check()" method=post name=form1 action="savedaixie.php?action=edit">
<TABLE cellSpacing=1 cellPadding=0 width="100%" bgColor=#e2e2e2>
  <TBODY>
  <TR>
    <TD bgColor=#ffffff height=20 width="12%">
	  <INPUT id="userid" value="<?php echo $rsN["ID"];?>" type="hidden" name="userid">
      <DIV align=center>标题</DIV></TD>
    <TD style="PADDING-BOTTOM: 10px; PADDING-LEFT: 10px; PADDING-RIGHT: 10px; PADDING-TOP: 10px" 
    bgColor=#ffffff width="88%" align=left><INPUT id="biaoti" value="<?php echo $rsN["title"];?>" lang=require class=txt size=80 name="biaoti">（标题字数控制在20个汉字以内为宜！）</TD></TR>
  <TR>
    <TD bgColor=#ffffff height=30>
      <DIV align=center>要求</DIV></TD>
    <TD 
    style="PADDING-BOTTOM: 10px; PADDING-LEFT: 10px; PADDING-RIGHT: 10px; PADDING-TOP: 10px" 
    bgColor=#ffffff align=left>
	
	<script id="editor" name="yaoqiu" type="text/plain" style="width:85%;height:330px;"></script>
<div  id='editora' style="display:none;"><?php echo htmlspecialchars($rsN["content"]);?></div>

       </TD></TR>
  <TR>
    <TD bgColor=#ffffff height=30>
      <DIV align=center>参考示例</DIV></TD>
    <TD style="PADDING-BOTTOM: 10px; PADDING-LEFT: 10px; PADDING-RIGHT: 10px; PADDING-TOP: 10px" 
    bgColor=#ffffff align=left>1、推广对象：一起飞（www.yiqifei.com），正文里添加一处网址；<BR>2、文章体裁：采访型/评论型/故事型/自由型（请选择1种），字数1000以上，要求原创；<BR>3、文章标题：含关键词“特价机票”；<BR>4、宣传要点：一起飞机票网，特价机票2折起，可预订全球200个国家机票，方便又实惠；<BR>5、若有其他要求请写清楚详细，不满意可以重新修改。<BR>6、若能提供一篇您认为不错的软文链接给我们，对我们的写作方向很有参考作用，写出的文章也能比较达到您预期的要求。</TD></TR>
  <TR>
    <TD bgColor=#ffffff height=30>
      <DIV align=center>篇数</DIV></TD>
    <TD style="PADDING-BOTTOM: 10px; PADDING-LEFT: 10px; PADDING-RIGHT: 10px; PADDING-TOP: 10px" 
    bgColor=#ffffff align=left>1</TD></TR>
  <TR>
    <TD bgColor=#ffffff height=30>
      <DIV align=center>金额</DIV></TD>
    <TD style="PADDING-BOTTOM: 10px; PADDING-LEFT: 10px; PADDING-RIGHT: 10px; PADDING-TOP: 10px" 
    bgColor=#ffffff align=left><?php echo $rsN["price"];?>元</TD></TR>
  <TR>
    <TD bgColor=#ffffff height=30>
      <DIV align=center>状态</DIV></TD>
    <TD style="PADDING-BOTTOM: 10px; PADDING-LEFT: 10px; PADDING-RIGHT: 10px; PADDING-TOP: 10px" 
    bgColor=#ffffff align=left><?php 
	if($rsN['flag']==0)
	{
		echo "<b style='color:#FF0000'>未确认</b>";
	}
	elseif($rsN['flag']==1)
	{
		echo "<b style='color:#FF0000'>已确认</b>";
	}
	elseif($rsN['flag']==2)
	{
		echo "<b style='color:#2a8104'>已完成</b>";
	}
	elseif($rsN['flag']==3)
	{
		echo "<b style='color:#FF0000'>请修改</b>";
	}
	else
	{
		echo "<b style='color:#FF0000'>已修改</b>";
	}?></TD></TR>
  <TR>
    <TD bgColor=#ffffff height=30>&nbsp;</TD>
    <TD style="PADDING-BOTTOM: 10px; PADDING-LEFT: 10px; PADDING-RIGHT: 10px; PADDING-TOP: 10px" 
    bgColor=#ffffff align=left><INPUT style="WIDTH: 60px; HEIGHT: 25px" id="button" value=" 提 交 " type=submit name="button"> 
    </TD></TR></TBODY></TABLE></FORM></DIV></DIV>
<DIV class="bk20 hr"></DIV></DIV><IFRAME id=main height=0 
src="../images/daixie_add.php" frameBorder=0 width=0 name=main></IFRAME>
<SCRIPT type=text/javascript>
function setprice(val)
{
	$("#jiage").val(val*50);
	if($("#jiage").val()==0)
	{
		$("#ye").html(" ");
		$("#button").attr("disabled",true);
	}
	else if($("#yuer").val()-0 < $("#jiage").val()-0)
	{
		$("#ye").html("余额不足请充值.");
		$("#button").attr("disabled",true);
	}
	else
	{
		$("#ye").html(" ");
		$("#button").attr("disabled",false);
	}
}


function check()
    {
        var flg = true;
		var flg1= true;
        $("input[lang='require']").each(function(){
			$(this).css("border-color","#ffffff"); 
            if($(this).val() == "") {
                flg = false;   
				$(this).css("border-color","#FF0000");            
            }        
        })
		
		 $("select[lang='require']").each(function(){
			$(this).css("background-color","#ffffff"); 
            if($(this).val() == "0") {
                flg1 = false;   
				$(this).css("background-color","#FF0000");            
            }        
        })
		
		if(flg==false || flg1==false)
		{
	 	    alert('红色提示为关键信息,请填写完整,不能空!');
			return false;   
			
		}
		
		var reg	= new RegExp(/^[^*$#\\~@!&%￥<>=|{}+-\/]+$/);
		if (! reg.test(document.form1.biaoti.value))
		{
			alert("不能输入特殊字符！");
			document.form1.biaoti.focus();
			return false;
		}
		
        return true;
    }  

</SCRIPT>
</BODY>
</HTML>
