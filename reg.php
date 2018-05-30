<?php
require_once("rand.inc.php");
include ("include/config.php");
include("include/function.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML xmlns="http://www.w3.org/1999/xhtml">
<HEAD>
<title><?php echo $A_Title;?>_<?php echo $webname;?></title>
<meta name="keywords" content="<?php echo $A_KeyWords;?>" />
<meta name="description" content="<?php echo $A_Descr;?>" />
<META content="text/html; charset=utf-8" http-equiv=Content-Type>
<link type="text/css" rel="stylesheet" href="style/css/openEasydialog.css"/>

<link rel="stylesheet" href="style/css/common.css" type="text/css" />
<LINK rel=stylesheet type=text/css href="images/index.css">
<LINK rel=stylesheet type=text/css href="images/css.css">
<link href="../images/resets.css" rel="stylesheet" type="text/css">
<SCRIPT type=text/javascript src="images/jquery.min.js"></SCRIPT>
<script src="images/easydialog.js"></script>
<STYLE type=text/css>* {
	WORD-BREAK: break-all;line-height:35px;
}
BODY {
	PADDING-BOTTOM: 0px; MARGIN: 0px; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; COLOR: #333333; FONT-SIZE: 12px; PADDING-TOP: 0px
}
UL {
	PADDING-BOTTOM: 0px; MARGIN: 0px; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; PADDING-TOP: 0px
}
FORM {
	PADDING-BOTTOM: 0px; MARGIN: 0px; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; PADDING-TOP: 0px
}
.reg_title {
	BORDER-BOTTOM: #cccccc 1px solid; PADDING-BOTTOM: 10px; PADDING-LEFT: 10px; PADDING-RIGHT: 0px; COLOR: #ff6600; FONT-SIZE: 14px; FONT-WEIGHT: bold; PADDING-TOP: 0px
}
TD {
	PADDING-BOTTOM: 5px; PADDING-LEFT: 5px; PADDING-RIGHT: 5px; PADDING-TOP: 5px
}
.reg_inp {
	BORDER-BOTTOM: #bdc7d8 1px solid; BORDER-LEFT: #bdc7d8 1px solid; PADDING-BOTTOM: 5px; LINE-HEIGHT: 16px; PADDING-LEFT: 4px; PADDING-RIGHT: 4px; HEIGHT: 16px; BORDER-TOP: #bdc7d8 1px solid; BORDER-RIGHT: #bdc7d8 1px solid; PADDING-TOP: 5px
}
.f_red {
	COLOR: red
}
A.applink:hover {
	BORDER-BOTTOM: #dce6f4 2px dotted; BORDER-LEFT: #dce6f4 2px dotted; PADDING-BOTTOM: 2px; BACKGROUND-COLOR: #ffff00; PADDING-LEFT: 2px; PADDING-RIGHT: 2px; COLOR: green; BORDER-TOP: #dce6f4 2px dotted; BORDER-RIGHT: #dce6f4 2px dotted; TEXT-DECORATION: none; PADDING-TOP: 2px
}
A.applink {
	BORDER-BOTTOM: #dce6f4 2px dotted; BORDER-LEFT: #dce6f4 2px dotted; PADDING-BOTTOM: 2px; PADDING-LEFT: 2px; PADDING-RIGHT: 2px; BACKGROUND: none transparent scroll repeat 0% 0%; COLOR: #2f5bff; BORDER-TOP: #dce6f4 2px dotted; BORDER-RIGHT: #dce6f4 2px dotted; TEXT-DECORATION: none; PADDING-TOP: 2px
}
A.info {
	BACKGROUND: none transparent scroll repeat 0% 0%; COLOR: #2f5bff; TEXT-DECORATION: none
}
A.info:hover {
	BACKGROUND: none transparent scroll repeat 0% 0%; COLOR: green; TEXT-DECORATION: underline
}
.mainnav {
	WIDTH: 100%; BACKGROUND: #08a5e0; HEIGHT: 40px
}
.mainnav .nav {
	MARGIN: 0px auto; WIDTH: 980px
}
.mainnav .nav .current-post-ancestor {
	BACKGROUND: #40bbec
}
.mainnav .nav .current-menu-ancestor {
	BACKGROUND: #40bbec
}
.mainnav .nav .current-menu-parent {
	BACKGROUND: #40bbec
}
.mainnav .nav .current-menu-item {
	BACKGROUND: #40bbec
}
.mainnav .nav UL {
	Z-INDEX: 999; POSITION: relative; FLOAT: left; HEIGHT: 100%
}
.mainnav .nav LI {
	TEXT-ALIGN: center; WIDTH: 100px; DISPLAY: inline; FLOAT: left; HEIGHT: 40px; MARGIN-RIGHT: 1px; TEXT-DECORATION: none
}
.mainnav .nav LI A {
	PADDING-BOTTOM: 0px; LINE-HEIGHT: 40px; PADDING-LEFT: 15px; PADDING-RIGHT: 15px; DISPLAY: block; COLOR: #fff; FONT-SIZE: 16px; PADDING-TOP: 0px
}
.mainnav .nav LI A:link {
	PADDING-BOTTOM: 0px; LINE-HEIGHT: 40px; PADDING-LEFT: 15px; PADDING-RIGHT: 15px; DISPLAY: block; COLOR: #fff; FONT-SIZE: 16px; PADDING-TOP: 0px
}
.mainnav .nav LI A:visited {
	PADDING-BOTTOM: 0px; LINE-HEIGHT: 40px; PADDING-LEFT: 15px; PADDING-RIGHT: 15px; DISPLAY: block; COLOR: #fff; FONT-SIZE: 16px; PADDING-TOP: 0px
}
.mainnav .nav LI A:active {
	PADDING-BOTTOM: 0px; LINE-HEIGHT: 40px; PADDING-LEFT: 15px; PADDING-RIGHT: 15px; DISPLAY: block; COLOR: #fff; FONT-SIZE: 16px; PADDING-TOP: 0px
}
.mainnav .nav UL LI UL {
	Z-INDEX: 999; POSITION: absolute; FILTER: alpha(opacity=90); WIDTH: 158px; DISPLAY: none; BACKGROUND: #08a5e0; HEIGHT: auto; BORDER-TOP: #fff 1px solid; opacity: .9; -moz-opacity: .9
}
.mainnav .nav UL LI UL LI {
	BORDER-BOTTOM: #fff 1px solid; TEXT-ALIGN: left; PADDING-BOTTOM: 0px; PADDING-LEFT: 0px; WIDTH: 158px; PADDING-RIGHT: 0px; DISPLAY: block; BACKGROUND: none transparent scroll repeat 0% 0%; FLOAT: left; PADDING-TOP: 0px
}
.mainnav .nav UL LI UL LI A {
	LINE-HEIGHT: 24px; WIDTH: 128px; DISPLAY: block; FLOAT: none; FONT-SIZE: 12px
}
.mainnav .nav LI A:hover {
	BACKGROUND: #ffbf4b
}
.mainnav .nav UL LI UL LI A:hover {
	BACKGROUND: #ffbf4b
}
input:focus{outline: 0;border: 1px solid #f48787;box-shadow: 0px 0px 3px 1px #f48787; }
.input_move{line-height: 30px;cursor:pointer;font-size:14px;color:#ffffff;background-color:#e53329;text-align:center;width:210px;height:30px;border:1px solid #a6231c;font-weight:900;font-family:Microsoft YaHei;border-radius:10px;}
.input_out{line-height: 30px;cursor:pointer;font-size:14px;color:#ffffff;background-color:#c32921;text-align:center;width:210px;height:30px;border:1px solid #a6231c;font-weight:900;font-family:Microsoft YaHei;border-radius:10px;}

</STYLE>

<META name=GENERATOR content="MSHTML 8.00.6001.19394">
</HEAD>
<BODY>
<?php
include("menu.php");
?>

<DIV class=clear></DIV>
<DIV style="PADDING-BOTTOM: 20px; MARGIN: 0px auto; PADDING-LEFT: 50px; WIDTH: 870px; PADDING-RIGHT: 50px; PADDING-TOP: 10px">
<DIV 
style="PADDING-BOTTOM: 20px; LINE-HEIGHT: 35px; PADDING-LEFT: 20px; PADDING-RIGHT: 20px; BACKGROUND: #FFF6E2; PADDING-TOP: 20px"><SPAN 
class=f_b>&gt;&gt;&nbsp;已经是会员？请点： <A class=susua href="../user/"><FONT color=red><FONT size=5>登录</FONT></FONT></A>！ &nbsp;忘记了密码？请点： <A class=susua href="../system/contact.php">联系客服找回</A>！</SPAN><BR><SPAN class=f_gray>&gt;&gt;&nbsp;请认真、仔细地填写以下信息，<SPAN class=f_red>*</SPAN>为必填项 
</SPAN></DIV><BR>
<FORM name="form1" id="form1" onsubmit="return postform();" method="post" action="savevip.php?action=add"><FONT color=red></FONT>
<DIV class=reg_title>帐户信息</DIV>
<TABLE cellSpacing=5 cellPadding=5 width="100%">
  <TBODY>
  <TR>
    <TD class=tl width=137>会员类型 <SPAN class=f_red>*</SPAN></TD>
    <TD><INPUT id=g_1 value=3 CHECKED type="radio" name="flag">广告主　<INPUT id=g_2 value=2 type="radio" name="flag">媒介主</TD>
  </TR>
  </TBODY>
</TABLE>
<TABLE cellSpacing=5 cellPadding=5 width="100%">
  <TBODY>
  <TR>
    <TD class=tl>会员名：<SPAN class=f_red>*</SPAN></TD>
    <TD><INPUT onblur=checknew() style="LINE-HEIGHT: 22px; WIDTH: 200px; HEIGHT: 22px" id="user" class="reg_inp" type="text" name="user"> <SPAN id="un" class="f_red"></SPAN><SPAN 
      style="COLOR: #ccc">用户名不能小于6个字符(0-9 a-z A-Z _ -)，并且不能大于20个字符</SPAN> </TD>
    <TD>&nbsp;</TD></TR>
  <TR>
    <TD class=tl width=137>登录密码：<SPAN class=f_red>*</SPAN></TD>
    <TD><INPUT style="LINE-HEIGHT: 22px; WIDTH: 200px; HEIGHT: 22px" id="pass1" class="reg_inp" type="password" name="pass1"> <SPAN id="un" class="f_red"></SPAN><SPAN 
      style="COLOR: #ccc">密码不能小于6个字符</SPAN></TD>
    <TD><SPAN id=dpassword class=f_red></SPAN>&nbsp; </TD></TR>
  <TR>
    <TD class=tl>重复输入密码：<SPAN class=f_red>*</SPAN></TD>
    <TD><INPUT onblur=twopass() style="LINE-HEIGHT: 22px; WIDTH: 200px; HEIGHT: 22px" id="pass2" class="reg_inp" size=30 type="password" name="pass2"> <SPAN id=un1 class=f_red></SPAN><SPAN style="COLOR: #ccc">两次密码请输入一致</SPAN> </TD>
    <TD><SPAN id=dcpassword class=f_red></SPAN>&nbsp; </TD></TR></TBODY></TABLE>
<DIV class=reg_title>联系方式</DIV>
<TABLE cellSpacing=5 cellPadding=5 width="100%">
  <TBODY>
  <TR>
    <TD class=tl>联系人：<SPAN class=f_red>*</SPAN></TD>
    <TD><INPUT style="LINE-HEIGHT: 22px; WIDTH: 200px; HEIGHT: 22px" id="web" class="reg_inp" type="text" name="web"><span style="COLOR: #ccc"> 公司名称（个人用户填写个人名字）</span></TD>
    <TD>&nbsp;</TD>
    <TD>&nbsp;</TD></TR>
  <TR>
    <TD class=tl width=137>电子邮箱：<SPAN class=f_red>*</SPAN></TD>
    <TD><INPUT style="LINE-HEIGHT: 22px; WIDTH: 200px; HEIGHT: 22px" id="email" class="reg_inp" type="text" 
      name="email"></TD>
    <TD>
      <DIV style="DISPLAY: none" id=temail class=tips></DIV><SPAN id=demail 
      class=f_red></SPAN>&nbsp; </TD></TR>
  <TR>
    <TD class=tl>QQ号码：<SPAN class=f_red>*</SPAN></TD>
    <TD><INPUT style="LINE-HEIGHT: 22px; WIDTH: 200px; HEIGHT: 22px" id="qq" class="reg_inp" type="text" name="qq"><span style="COLOR: #ccc"> 发稿中便于我们联系您</span></TD>
    <TD>&nbsp;</TD>
    <TD><SPAN id=dqq class=f_red></SPAN>&nbsp; </TD></TR>
  <TR>
    <TD class=tl>联系电话：<SPAN class=f_red>*</SPAN></TD>
    <TD><INPUT style="LINE-HEIGHT: 22px; WIDTH: 200px; HEIGHT: 22px" id="tel" class="reg_inp" type="text" name="tel"><span style="COLOR: #ccc"> 忘记密码找回需用</span></TD>
    <TD></TD>
    <TD>&nbsp;</TD></TR>
  </TBODY></TABLE>
<TABLE cellSpacing=5 cellPadding=5 width="100%">
  <TBODY>
  <TR>
    <TD class=tl width=137>验证码 <SPAN class=f_red>*</SPAN></TD>
    <TD id=verify_img><DIV style="float:left; margin-top:10px"><INPUT style="LINE-HEIGHT: 22px; WIDTH: 130px; HEIGHT: 22px;BORDER: #bdc7d8 1px solid;" id=ver maxLength=5 type=text name=code></div> <div class="checkcodeimg" style="float:left; padding-left:10px; padding-top:3px; margin-left:10px"><?php echo $_SESSION['authnum'];?></div></TD>
    <TD><SPAN id=dcaptcha class=f_red></SPAN>&nbsp; </TD></TR>
	<tr>
    <td class="tl" width="137">&nbsp;</td>
    <td style="font-size: 12px;;"><input type="checkbox" id="agree" disabled="false" name="agree" checked="checked" style="height: 25px">&nbsp;<span class="v_align">我同意&nbsp;</span> <span class="v_align">
							<a href="javascript:;" onclick="showCompanypact()" class="blue-link" style="color: #0CA5E9;">&lt;&lt;软文阁服务条款&gt;&gt;</a></span></td></tr>
							
  <TR>
    <TD class=tl>完成啦!</TD>
    <TD width=300>
	
	<INPUT tabindex="11" class="input_out" onmousemove="this.className='input_move'" onmouseout="this.className='input_out'" value="注&nbsp;&nbsp;&nbsp;&nbsp;册" type="submit" name="submit">
	</TD>
    <TD>&nbsp;</TD></TR></TBODY></TABLE></FORM><BR>
<SCRIPT type=text/javascript>
        function postform()
        {
			var code_hidden = '<?php echo $_SESSION['authnum'];?>';
            var username = $("#user").val();         
            var pass1 = $("#pass1").val();
            var pass2 = $("#pass2").val();
			var web = $("#web").val();
            var email = $("#email").val();
		    var qq = $("#qq").val();
			var tel = $("#tel").val();
            var code = $("#ver").val();
            if(username=='')
            {
                alert("用户名不能为空！");
                return false;
            }
            if(pass1=='')
            {
                alert("密码不能为空！");
                return false;
            }
            if(pass2=='')
            {
                alert("确认密码不能为空！");
                return false;
            }
			
            
            if(pass1!=pass2)
            {
                alert('两次输入的密码不一致');
                return false;
            }
			if(web=='')
            {
                alert("联系人不能为空！");
                return false;
            }
            if(email=='')
            {
                alert("Email不能为空！");
                return false;
            }
            if(qq=='')
            {
                alert("qq不能为空！");
                return false;
            }
			 if(tel=='')
            {
                alert("联系电话不能为空！");
                return false;
            }
            if(code=='')
            {
                alert("验证码不能为空！");
                return false;
            }
            
			if(code_hidden != code)
			{
				document.form1.code.focus();
				alert('验证码输入错误!');
				return false;
			}
			
            var emailPat=/^(.+)@(.+)$/;
            var matchArray=email.match(emailPat);
            if (matchArray==null) {
                alert("电子邮件格式不正确");
                return false;
            }
            
            var qqmatch = /^[\d]{5,12}$/;
            var matchqqArray=qq.match(qqmatch);
            
            if (matchqqArray==null) {
                alert("qq格式不对");
                return false;
            }
            
        }
		
		function checknew()
		{
			if($("#user").val()!=""){
			$.get("user/action.php?a=checknew",{"u":$("#user").val()},function(data){
				if(data==1)
				{
					$("#un").html("<BR>用户名已注册，请更换!");
					$("#user")[0].focus();
				}
				else if(data==2)
				{
					$("#un").html("<BR>admin用户名不能注册，请更换!");
					$("#user")[0].focus();
				}
				else if(data==0)
				{
					$("#un").html("<BR>可以注册!");
				}
				else
				{
					$("#un").html("<BR>新用户名检测失败!");
				}
			});}
		}
		
		
		function twopass()
		{
			if($("#pass1").val()!=$("#pass2").val())
			{
				$("#un1").html("<BR>两次密码不一致");
				return false;
			}
			else
			$("#un1").html(" ");
		}
    </SCRIPT>
</DIV>
<?php
include("footer.php");
?>
<!-- 服务保障弹出框 start -->
<style>
		.easyDialog_wrapper{width: 800px;overflow: hidden;}
		.easyDialog_title{width:inherit;}
		.easyDialog_text{width:inherit;height:500px;overflow: scroll;}
		.easyDialog_title .close_btn{background: url("/img/close.gif") no-repeat!important;}
		.c-box{text-align:left;}
</style>

<div id="snapshotPic_box" class="easyDialog_wrapper">
	<div class="easyDialog_content">
	<div class="easyDialog_title"><span class="blue_span detail_name" id="detailtitle_name" >服务保障</span><a href="javascript:;" title="关闭窗口" class="close_btn" onclick="easyDialog.close();"></a></div>
	
	<div class="easyDialog_text">
		<div class="c-box"><span style="padding: 0px; height: auto; line-height: 24px; font-family: &quot;微软雅黑&quot;,&quot;宋体&quot;;">尊敬的用户，欢迎注册成为软文阁平台（简称&quot;软文阁&quot;）的用户。在注册前请仔细阅读如下服务条款：<br />
软文阁依据本协议的规定提供服务，本协议具有合同效力。用户必须完全同意本协议，才能够享受软文阁提供的服务。用户在软文阁注册成功即表示用户完全接受本协议的全部条款。注册用户时请用户认真阅读本服务协议，用户可以选择“接受”或“拒绝”本服务协议（未成年人应在法定监护人陪同下审阅）。用户只有在接受本服务协议的情况下，才有权使用软文阁提供的相关服务。用户的实际使用行为将视为对本服务协议的接受，并同意接受本服务协议的约束。<br />
<span style="color: rgb(204, 0, 0); font-size: 14px; font-weight: bold;"> 一、定义</span><br />
在本协议中所使用的下列词语，除非另有定义，应具有以下含义：<br />
1、 &quot;软文阁&quot;在无特别说明的情况下，均指&quot;软文阁&quot;。<br />
2、&quot;用户&quot;指符合本协议所规定的条件，同意遵守本服务协议、条款（包括但不限于本协议），并实际使用软文阁的个人或机构。<br />
<span style="color: rgb(204, 0, 0); font-size: 14px; font-weight: bold;"> 二、用户资格</span><br />
1、 只有根据中国法律或设立地法律、法规和/或规章成立并合法存在的公司、企事业单位、社团组织和其他组织才能申请成为软文阁用户，可以使用软文阁的服务。<br />
2、无民事行为能力人、限制民事行为能力人以及无经营或特定经营资格的组织不当注册成为软文阁用户或超过其民事权利或行为能力范围从事交易的，其与软文阁之间的协议自始无效，软文阁一经发现，有权立即注销该用户，并追究其使用软文阁服务的一切法律责任。<br />
3、用户必须具有明确的办公地址和联系电话，并提供真实的联系人姓名或公司名称。<br />
<span style="color: rgb(204, 0, 0); font-size: 14px; font-weight: bold;"> 三、用户的权利和义务</span><br />
1、用户有权根据本协议及软文阁发布的相关规则，利用软文阁交易平台发布任务信息、查询媒介资源信息、制作报价单、下发稿、广告等订单、参加软文阁的活动及有权享受软文阁提供的其他的有关资讯及信息服务。<br />
2、用户有权根据需要更改登录密码和支付密码。用户应对以该用户名进行的所有活动和事件负全部责任。<br />
3、用户有义务确保向软文阁提供的任何资料、注册信息真实准确，包括但不限于真实的公司名称、联系人姓名、身份证号、联系电话、地址、邮政编码等。保证软文阁可以通过上述联系方式与用户进行联系。同时，用户也有义务在相关资料实际变更时及时更新有关注册资料。<br />
4、用户不得以任何形式擅自转让或授权他人使用自己在软文阁的用户帐号。<br />
5、用户有义务确保在软文阁交易平台下的订单信息的真实、准确，无误导性。<br />
6、用户不得在软文阁发布国家禁止信息、不得发布侵犯他人知识产权或其他合法权益的信息，也不得发布违背社会公共利益或公共道德的信息。<br />
7、用户在软文阁交易中应当遵守诚实信用原则，不得以不正当竞争方式扰乱网上交易秩序，不得从事与网上交易无关的不当行为，不得在交易平台上发布任何违法信息。<br />
8、用户承诺自己在使用软文阁交易平台实施的所有行为遵守国家法律、法规和软文阁的相关规定以及各种社会公共利益或公共道德。对于任何法律后果，用户将独立承担所有法律责任。<br />
9、用户在软文阁网上交易过程中如与其他用户因交易产生纠纷，可以请求软文阁从中予以协调。用户如发现其他用户有违法或违反本协议的行为，可以向软文阁举报。如用户因网上交易与其他用户产生诉讼的，用户有权通过司法部门要求软文阁提供相关资料。<br />
10、用户应承担因交易产生的相关费用，并依法纳税。<br />
11、未经软文阁书面允许，用户不得将软文阁的媒介信息以及在平台上所展示的任何信息以复制、修改、翻译等形式（包含但不限于于以上形式）制作衍生作品、分发或公开展示。<br />
12、用户不得使用以下方式登录网站或破坏网站所提供的服务：<br />
&nbsp;&nbsp;&nbsp;&nbsp;1)	以机器人软件、蜘蛛软件、爬虫软件、刷屏软件或其它自动方式访问或登录软文阁；<br />
&nbsp;&nbsp;&nbsp;&nbsp;2)	通过任何方式对软文阁网站结构造成或可能造成不良影响的行为；<br />
&nbsp;&nbsp;&nbsp;&nbsp;3)	通过任何方式干扰或试图干扰软文阁的交易行为；<br />
13、用户同意其提供给软文阁的邮箱和手机接收来自软文阁的信息，包括但不限于活动信息、交易信息、促销信息等。<br />
<span 
style="color: rgb(204, 0, 0); font-size: 14px; font-weight: bold;"> 四、软文阁的权利和义务</span><br />
1、软文阁仅为用户提供一个交易平台，用户必须保证所有信息真实有效合法<br />
2、软文阁有义务在现有技术水平的基础上确保整个网上交易平台的正常运行，避免服务中断或将中断时间限制在最短时间内，保证用户网上交易活动的顺利进行。<br />
3、软文阁有义务对用户在注册使用软文阁平台所遇到的问题及时作出解答。<br />
4、软文阁有权对用户的注册资料进行查阅，对存在任何问题或怀疑的注册资料，软文阁有权发出通知询问用户并要求用户做出解释、改正，或不通知用户直接做出处罚、删除信息、删除账号等处理。<br />
5、用户因在软文阁上交易与其他用户产生质检纠纷的，用户同意软文阁根据事前制定的系统质检流程对纠纷进行判断、裁决，在判断过程中，软文阁有权通过电子邮件及电话联系向纠纷双方了解纠纷情况，并将根据了解的情况进行协调沟通，最终作出裁决。用户同意接受软文阁裁决所导致的补款或扣款处理。<br />
6、软文阁没有义务对所有用户的注册资料、所有的交易行为以及与交易有关的其他事项进行事先审查，但如发生以下情形，软文阁有权限制用户的活动、向用户核实有关资料、发出警告通知、暂时中止、无限期地中止及拒绝向该用户提供服务：<br />
&nbsp;&nbsp;&nbsp;&nbsp;1)	用户违反本协议或因被提及而纳入本协议的文件；<br />
&nbsp;&nbsp;&nbsp;&nbsp;2)	存在用户或其他第三方通知软文阁，认为某个用户或具体交易事项存在违法或不当行为，并提供相关证据，而软文阁无法联系到该用户核实该用户向软文阁提供的任何资料；<br />
&nbsp;&nbsp;&nbsp;&nbsp;3)	存在用户或其他第三方通知软文阁，认为某个用户或具体交易事项存在违法或不当行为，并提供相关证据。软文阁以普通非专业交易者的知识水平标准对相关内容进行判别，可以明显认为这些内容或行为可能对软文阁用户或软文阁造成财务损失或法律责任。<br />
7、根据国家法律法规、本协议的内容和软文阁所掌握的事实依据，可以认定用户存在违法或违反本协议行为以及在软文阁平台上的其他不当行为，软文阁有权在软文阁平台以网络发布形式公布用户的违法行为，并有权随时作出删除相关信息、终止服务提供等处理，而无须征得用户的同意。<br />
8、软文阁有权在不通知用户的前提下删除或采取其他限制性措施处理下列信息：包括但不限于以规避费用为目的；以炒作信用为目的；存在欺诈等恶意或虚假内容；与网上交易无关或不是以交易为目的；存在恶意下单或其他试图扰乱正常交易秩序因素；该信息违反公共利益或可能严重损害软文阁和其他用户合法利益的。<br />
<span style="color: rgb(204, 0, 0); font-size: 14px; font-weight: bold;"> 五、服务的中断和终止</span><br />
1、在软文阁未向用户收取相关服务费用的情况下，软文阁可自行全权决定以任何理由 (包括但不限于软文阁认为用户已违反本协议的字面意义和精神，或用户在超过180天内未登录软文阁等) 终止对用户的服务，并不再保存用户在软文阁的全部资料（包括但不限于用户信息、稿件信息、交易信息等）。同时软文阁可自行全权决定，在发出通知或不发出通知的情况下，随时停止提供全部或部分服务。服务终止后，软文阁没有义务为用户保留原用户资料或与之相关的任何信息，或转发任何未曾阅读或发送的信息给用户或第三方。<br />
2、如用户向软文阁提出注销软文阁注册用户身份，需经软文阁审核同意，由软文阁注销该注册用户，用户即解除与软文阁的协议关系，但软文阁仍保留下列权利：<br />
&nbsp;&nbsp;&nbsp;&nbsp;1)	用户注销后，软文阁有权保留该用户的资料，包括但不限于以前的用户资料、交易记录等。<br />
&nbsp;&nbsp;&nbsp;&nbsp;2)	用户注销后，如用户在注销前在软文阁交易平台上存在违法行为或违反本协议的行为，软文阁仍可行使本协议所规定的权利。<br />
3、如存在下列情况，软文阁可以通过注销用户的方式终止服务：<br />
&nbsp;&nbsp;&nbsp;&nbsp;1)	在用户违反本协议相关规定时，软文阁有权终止向该用户提供服务。软文阁将在中断服务时通知用户。但如该用户在被软文阁终止提供服务后，再一次直接或间接或以他人名义注册为软文阁用户的，软文阁有权再次单方面终止为该用户提供服务；<br />
&nbsp;&nbsp;&nbsp;&nbsp;2)	一旦软文阁发现用户提供的注册资料存在虚假的情况，软文阁有权随时终止为该用户提供服务；<br />
&nbsp;&nbsp;&nbsp;&nbsp;3)	用户出现作弊行为，网站可根据情况作出处理，甚至注销用户。<br />
&nbsp;&nbsp;&nbsp;&nbsp;4)	其它软文阁认为需终止服务的情况。<br />
<span 
style="color: rgb(204, 0, 0); font-size: 14px; font-weight: bold;"> 六、软文阁的责任范围</span><br />
当用户接受该协议时，用户应明确了解并同意∶<br />
1、用户使用软文阁之风险由用户个人负担。软文阁是在现有技术基础上提供的。软文阁不保证以下事项∶<br />
&nbsp;&nbsp;&nbsp;&nbsp;1)	软文阁将符合用户的要求。<br />
&nbsp;&nbsp;&nbsp;&nbsp;2)	软文阁不受干扰、能够及时提供、安全可靠或免于出错。<br />
&nbsp;&nbsp;&nbsp;&nbsp;3)	本服务使用权的取得结果是正确或可靠的。<br />
2、是否经由软文阁下载或取得任何资料，由用户自行考虑、衡量并且自负风险，因下载任何资料而导致用户电脑系统的任何损坏或资料流失，用户应负完全责任。<br />
3、用户经由软文阁取得的建议和资讯，无论其形式或表现，绝不构成本协议未明示规定的任何保证。<br />
4、基于以下原因而造成的利润、软文阁商誉、使用、资料损失或其它无形损失，软文阁不承担任何直接、间接、附带、特别、衍生性或惩罚性赔偿（即使软文阁已被告知前款赔偿的可能性）：<br />
&nbsp;&nbsp;&nbsp;&nbsp;1)	软文阁的使用或无法使用。<br />
&nbsp;&nbsp;&nbsp;&nbsp;2)	用户的传输或资料遭到未获授权的存取或变更。<br />
&nbsp;&nbsp;&nbsp;&nbsp;3)	软文阁中任何第三方之声明或行为。<br />
&nbsp;&nbsp;&nbsp;&nbsp;4)	软文阁其它相关事宜。<br />
5、软文阁只是为用户提供一个服务交易的平台，对于用户所发布的任务和合法性、真实性及其品质，以及用户履行交易的能力等，软文阁一律不负任何担保责任。用户如果因使用软文阁，或因购买刊登于软文阁的任何物品，而受到损害时，软文阁不负任何补偿或赔偿责任。<br />
6、软文阁提供与其它互联网上的网站或资源的链接，用户可能会因此连结至其它运营商经营的网站，但不表示软文阁与这些运营商有任何关系。其它运营商经营的网站均由各经营者自行负责，不属于软文阁控制及负责范围之内。对于存在或来源于此类软文阁网站或资源的任何内容、广告、产品或其它资料，软文阁亦不予保证或负责。因使用或依赖任何此类网站或资源发布的或经由此类网站或资源获得的任何内容、物品或服务所产生的任何损害或损失，软文阁不负任何直接或间接的责任。<br />
<span 
style="color: rgb(204, 0, 0); font-size: 14px; font-weight: bold;"> 七、知识产权</span><br />
1、软文阁及软文阁所使用的任何相关软件、程序、内容，包括但不限于作品、图片、档案、资料、网站构架、网站版面的安排、网页设计、经由软文阁或广告商向用户呈现的广告或资讯，均由软文阁或其它权利人依法享有相应的知识产权，包括但不限于著作权、商标权、专利权或其它专属权利等，受到相关法律的保护。未经软文阁或权利人明示授权，用户保证不修改、出租、出借、出售、散布软文阁及软文阁所使用的上述任何资料和资源，或根据上述资料和资源制作成任何种类物品。<br />
2、软文阁授予用户不可转移及非专属的使用权，使用户可以通过单机计算机使用软文阁的目标代码（以下简称&quot;软件&quot;），但用户不得且不得允许任何第三方，复制、修改、创作衍生作品、进行还原工程、反向组译，或以其它方式破译或试图破译源代码，或出售、转让&quot;软件&quot;或对&quot;软件 &quot;进行再授权，或以其它方式移转&quot;软件&quot;之任何权利。用户同意不以任何方式修改&quot;软件&quot;，或使用修改后的&quot;软件&quot;。<br />
3、用户不得经由非软文阁所提供的界面使用软文阁。<br />
<span 
style="color: rgb(204, 0, 0); font-size: 14px; font-weight: bold;"> 八、不可抗力</span><br />
因不可抗力或者其他意外事件，使得本协议的履行不可能、不必要或者无意义的，双方均不承担责任。本合同所称之不可抗力意指不能预见、不能避免并不能克服的客观情况，包括但不限于战争、台风、水灾、火灾、雷击或地震、罢工、暴动、法定疾病、黑客攻击、网络病毒、电信部门技术管制、政府行为或任何其它自然或人为造成的灾难等客观情况。<br />
<span 
style="color: rgb(204, 0, 0); font-size: 14px; font-weight: bold;"> 九、争议解决方式</span><br />
1、本协议及其修订本的有效性、履行和与本协议及其修订本效力有关的所有事宜，将受中华人民共和国法律管辖，任何争议仅适用中华人民共和国法律。<br />
2、因使用软文阁服务所引起与软文阁的任何争议，均应提交相应官方仲裁机关进行仲裁。相关争议应单独仲裁，不得与任何其它方的争议在任何仲裁中合并处理，该仲裁裁决是终局，对各方均有约束力。如果所涉及的争议不适于仲裁解决，用户同意一切争议由具有管辖权的法院管辖。本协议可由软文阁随时修订，并将修订后的协议公告于软文阁
网站顶部显眼位置，修订后的条款内容自公告时起生效，并成为本协议的一部分。</span></li>
                    
                
                <div class="clear"></div>
            </div>
	</div>
    </div>
</div>

<script>
function showCompanypact(){
	
	easyDialog.open({
		container:'snapshotPic_box',
		overlay : true
	});
}
</script>

<!-- 服务保障弹出框 end -->
</BODY>
</HTML>
