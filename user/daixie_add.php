<?php
include ("checkuser.php");
include ("../include/config.php");
include("../include/function.php");
$VipUser=$_COOKIE["VipUser"];
$sql="select * from user where VipUser='".$VipUser."'";
$result=mysql_db_query($dbname,$sql);
$rs=mysql_fetch_array($result);
if($rs!=NULL)
{
    $yue=$rs["yue"];
}
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
var ue = UE.getEditor('editor');//初始化对象  
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
<H6>代写添加</H6>
<DIV class=content>
<FORM id=form1 onsubmit="return check()" method=post name=form1 action="savedaixie.php?action=add">
<TABLE cellSpacing=1 cellPadding=0 width="100%" bgColor=#e2e2e2>
  <TBODY>
  <TR>
    <TD bgColor=#ffffff height=20 width="12%">
      <DIV align=center>标题</DIV></TD>
    <TD 
    style="PADDING-BOTTOM: 10px; PADDING-LEFT: 10px; PADDING-RIGHT: 10px; PADDING-TOP: 10px" 
    bgColor=#ffffff width="88%" align=left><INPUT id="biaoti" lang=require class=txt size=100 name="biaoti">（标题字数控制在20个汉字以内为宜！）</TD></TR>
  <TR>
    <TD bgColor=#ffffff height=30>
      <DIV align=center>要求</DIV></TD>
    <TD 
    style="PADDING-BOTTOM: 10px; PADDING-LEFT: 10px; PADDING-RIGHT: 10px; PADDING-TOP: 10px" 
    bgColor=#ffffff align=left>
	
	<script id="editor" name="yaoqiu" type="text/plain" style="width:85%;height:330px;"></script>
			<div  id='editora' style="display:none;">1、推广对象：&lt;BR /&gt;
2、文章体裁：&lt;BR /&gt;
3、文章标题：&lt;BR /&gt;
4、宣传要点：&lt;BR /&gt;
5、其他要求：&lt;BR /&gt;
5、软文案例：&lt;br /&gt;若能提供一篇您认为不错的软文链接给我们，对我们的写作方向很有参考作用，写出的文章也能比较达到您预期的要求。&lt;BR /&gt;</div>
			

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
    bgColor=#ffffff align=left><SELECT id="pianshu" lang=require onchange=setprice(this.value) name="pianshu"> <OPTION selected value=1>请选择</OPTION> <OPTION value=2>普通文章100元/篇</OPTION> <OPTION value=3>优秀文章180元/篇</OPTION> <OPTION value=4>高级写手300元/篇</OPTION> <OPTION value=5>资深记者360元/篇</OPTION></SELECT></TD></TR>
  <TR>
    <TD bgColor=#ffffff height=30>
      <DIV align=center>金额</DIV></TD>
    <TD style="PADDING-BOTTOM: 10px; PADDING-LEFT: 10px; PADDING-RIGHT: 10px; PADDING-TOP: 10px" 
    bgColor=#ffffff align=left><INPUT style="COLOR: rgb(255,0,0)" id="jiage" 
      class=txt value=0 readOnly size=8 name="jiage"> 元 <SPAN id="ye"></SPAN><!--INPUT 
      id="dingdan" value="201308121116273426" type="hidden" name="dingdan"--><INPUT 
      id="yuer" value="<?php echo $yue;?>" type="hidden" name="yuer"></TD></TR>
  <TR>
    <TD bgColor=#ffffff height=30>&nbsp;</TD>
    <TD bgColor=#ffffff align=left><INPUT style="WIDTH: 60px; HEIGHT: 25px" id="button" value=" 提 交 " type=submit disabled name="button"> 
    </TD></TR></TBODY></TABLE></FORM></DIV></DIV>
<DIV class="bk20 hr"></DIV></DIV><IFRAME id=main height=0 
src="../images/daixie_add.php" frameBorder=0 width=0 name=main></IFRAME>
<SCRIPT type=text/javascript>
function setprice(val)
{
	if($("#pianshu").val()==1)
	{
		$("#jiage").val(0);
	}
    if($("#pianshu").val()==2)
	{
		$("#jiage").val(100);
	}
	if($("#pianshu").val()==3)
	{
		$("#jiage").val(180);
	}
	if($("#pianshu").val()==4)
	{
		$("#jiage").val(300);
	}
	if($("#pianshu").val()==5)
	{
		$("#jiage").val(360);
	}
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
