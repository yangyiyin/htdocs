﻿<?php
include("checkuser.php");
include("../include/config.php");

$ID=$_REQUEST["ID"];
$sqlN="select * from tixian where ID=".$ID."";
$resultN=mysql_db_query($dbname,$sqlN);
//mysql_select_db($dbname);
//$resultN=mysql_query($sqlN);
$rsN=mysql_fetch_array($resultN)
?>
<HTML>
<HEAD>
<TITLE>后台管理中心</TITLE>
<META content="text/html; charset=utf-8" http-equiv=Content-Type>
<META content=IE=7 http-equiv=X-UA-Compatible>
<META name=GENERATOR content="MSHTML 8.00.6001.19394">
<LINK rel=stylesheet type=text/css href="../images/reset.css">
<LINK rel=stylesheet type=text/css href="../images/zh-cn-system.css">
<SCRIPT language=javascript type=text/javascript src="../images/jquery.min.js"></SCRIPT>
<SCRIPT language=javascript type=text/javascript src="../images/styleswitch.js"></SCRIPT>

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
.wycz_zh {
	LINE-HEIGHT: 32px; MARGIN-TOP: 10px
}
.wycz_zh TABLE {
	TEXT-ALIGN: center; BORDER-COLLAPSE: collapse
}
.wycz_zh TABLE {
	BORDER-BOTTOM: #b0c5ee 1px solid; BORDER-LEFT: #b0c5ee 1px solid; HEIGHT: 45px; BORDER-TOP: #b0c5ee 1px solid; BORDER-RIGHT: #b0c5ee 1px solid
}
.wycz_zh TH {
	BORDER-BOTTOM: #b0c5ee 1px solid; BORDER-LEFT: #b0c5ee 1px solid; HEIGHT: 45px; BORDER-TOP: #b0c5ee 1px solid; BORDER-RIGHT: #b0c5ee 1px solid
}
.wycz_zh TD {
	BORDER-BOTTOM: #b0c5ee 1px solid; BORDER-LEFT: #b0c5ee 1px solid; HEIGHT: 45px; BORDER-TOP: #b0c5ee 1px solid; BORDER-RIGHT: #b0c5ee 1px solid
}
.wycz_zh TH {
	BACKGROUND: #f0f5fb
}
#kaihu_sm {
	MARGIN-TOP: 20px; COLOR: #ff0000; FONT-SIZE: 14px; FONT-WEIGHT: normal
}
</STYLE>

<DIV style="_width: 98.9%; _margin-right: -12px" id=main_frameid class="pad-10 display">
<DIV class="col-2  col-auto">
<H6>提现申请</H6>
<DIV class=content>
<FORM onsubmit="return check()" method=post name=alipayment action="savetixian.php?action=isok">
<TABLE cellSpacing=1 cellPadding=5 width="100%" bgColor=#e2e2e2 style="font-size:13px">
  <TBODY>
  <TR>
    <TD bgColor=#ffffff height=30>
      <DIV align=center>提　　现</DIV></TD>
    <TD bgColor=#ffffff align=left><IMG src="../images/zfb.jpg" width=256 
      height=57></TD></TR>
  <TR>
    <TD bgColor=#ffffff height=30 width="12%">
      <DIV align=center>
      <DIV align=center>提现用户</DIV></DIV></TD>
	  <INPUT id="userid" value="<?php echo $rsN["ID"];?>" type="hidden" name="userid">
	  <INPUT id="VipUser" value="<?php echo $rsN["VipUser"];?>" type="hidden" name="VipUser">
    <TD bgColor=#ffffff width="88%" align=left>&nbsp;&nbsp;<?php echo $rsN["VipUser"];?></TD></TR>
  <TR>
    <TD bgColor=#ffffff height=30 width="12%">
      <DIV align=center>
      <DIV align=center>支付宝账号</DIV></DIV></TD>
	  <INPUT id="accnumber" value="<?php echo $rsN["accnumber"];?>" type="hidden" name="accnumber">
    <TD bgColor=#ffffff width="88%" align=left>&nbsp;&nbsp;<?php echo $rsN["accnumber"];?></TD></TR>
  <TR>
    <TD bgColor=#ffffff height=30>
      <DIV align=center>提现金额</DIV></TD>
	  <INPUT id="jine" value="<?php echo $rsN["jine"];?>" type="hidden" name="jine">
    <TD bgColor=#ffffff align=left>&nbsp; <?php echo $rsN["jine"];?> 元 </TD></TR>
  <TR>
    <TD bgColor=#ffffff height=30>
      <DIV align=center>备注</DIV></TD>
    <TD style="PADDING-BOTTOM: 10px; PADDING-LEFT: 10px; PADDING-RIGHT: 10px; PADDING-TOP: 10px" 
    bgColor=#ffffff align=left>
	
	<script id="editor" name="content" type="text/plain" style="width:85%;height:330px;"></script>
<div  id='editora' style="display:none;">款项已转指定支付宝账号，请注意及时查收。</div>

</TD></TR>
  <TR>
    <TD bgColor=#ffffff height=30>&nbsp;</TD>
    <TD bgColor=#ffffff align=left>　<INPUT style="WIDTH: 60px; HEIGHT: 25px" id=button value=" 提 交 " type=submit name=button></TD></TR></TBODY></TABLE></FORM>
<DIV class="bk20 hr"></DIV>
</DIV></DIV>
<DIV class="bk20 hr"></DIV></DIV><IFRAME id=main height=0 src="about:blank" 
frameBorder=0 width=0 name=main></IFRAME>
<SCRIPT type=text/javascript>
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
		 
		if(flg==false)
		{
	 	    alert('红色提示为关键信息,请填写完整,不能空!');
			return false;   
			
		}
		
        return true;
    }  

</SCRIPT>
</BODY>
</HTML>
