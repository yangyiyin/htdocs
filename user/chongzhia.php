<?php
include ("checkuser.php");
include("../include/config.php");
include("../include/function.php");
require_once("../pay/alipay.config.php");
$data=date("Y-m-d H:i:s");
$order_id=getyear($data).getmonth($data).getday($data).rand(10000,99999);
?>
<HTML>
<HEAD>
<TITLE>充值管理</TITLE>
<META content="text/html; charset=utf-8" http-equiv=Content-Type>
<META content=IE=7 http-equiv=X-UA-Compatible>
<META name=GENERATOR content="MSHTML 8.00.6001.19394">
<LINK rel=stylesheet type=text/css href="../images/reset.css">
<LINK rel=stylesheet type=text/css href="../images/zh-cn-system.css">
<LINK rel=stylesheet type=text/css href="../pay/images/layout.css">
<SCRIPT language=javascript type=text/javascript src="../images/jquery.min.js"></SCRIPT>
<SCRIPT language=javascript type=text/javascript src="../images/styleswitch.js"></SCRIPT>
<SCRIPT language=JavaScript>
<!-- 
  //校验输入框 -->
function CheckForm()
{
	if (document.alipayment.WIDsubject.value.length == 0) {
		alert("请输入商品名称.");
		document.alipayment.WIDsubject.focus();
		return false;
	}
	if (document.alipayment.WIDtotal_fee.value.length == 0) {
		alert("请输入付款金额.");
		document.alipayment.WIDtotal_fee.focus();
		return false;
	}
	var reg	= new RegExp(/^\d*\.?\d{0,2}$/);
	if (! reg.test(document.alipayment.WIDtotal_fee.value))
	{
        alert("请正确输入付款金额");
		document.alipayment.WIDtotal_fee.focus();
		return false;
	}
	if (Number(document.alipayment.WIDtotal_fee.value) < 10) {
		alert("付款金额金额最小是10");
		document.alipayment.WIDtotal_fee.focus();
		return false;
	}
}  

<!-- 
  //控制文字显示 -->
function glowit(which){
if (document.all.glowtext[which].filters[0].strength==2)
document.all.glowtext[which].filters[0].strength=1
else
document.all.glowtext[which].filters[0].strength=2
}
function glowit2(which){
if (document.all.glowtext.filters[0].strength==2)
document.all.glowtext.filters[0].strength=1
else
document.all.glowtext.filters[0].strength=2
}
function startglowing(){
if (document.all.glowtext&&glowtext.length){
for (i=0;i<glowtext.length;i++)
eval('setInterval("glowit('+i+')",150)')
}
else if (glowtext)
setInterval("glowit2(0)",150)
}
if (document.all)
window.onload=startglowing

</SCRIPT>
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
.kaihu_sm {BORDER: #b0c5ee 1px solid;text-align:center;padding:2px;
	MARGIN-bottom: 10px; COLOR: #ff0000; FONT-SIZE: 14px; FONT-WEIGHT: normal
}
.kaihu_sm span{COLOR: #000000;}
</STYLE>

<DIV style="_width: 98.9%; _margin-right: -12px" id=main_frameid class="pad-100 display">
<DIV class="col-2  col-auto">
<H6>在线充值</H6>
<DIV class=content>

<div class='kaihu_sm'>温馨提醒：<span>充值金额不能低于10元。为达到更好的效果，单个活动建议1000元起投。</span></div>
<FORM name=alipayment onSubmit="return CheckForm();" action="../pay/alipayapi.php" method=post target="_blank">
<TABLE cellSpacing=1 cellPadding=5 width="100%" bgColor=#e2e2e2 style="font-size:13px">
  <TBODY>
  <TR>
    <TD bgColor=#ffffff height=35>
      <DIV align=center>充　　值</DIV></TD>
    <TD bgColor=#ffffff align=left><IMG src="../images/zfb.jpg" width=256 
      height=57></TD></TR>
  <TR>
    <TD bgColor=#ffffff height=35 width="12%">
      <DIV align=center>
      <DIV align=center>账　　号</DIV></DIV></TD>
    <TD bgColor=#ffffff width="88%" align=left>&nbsp;&nbsp;<?php echo $_COOKIE["VipUser"];?></TD></TR>
  <TR>
    <TD bgColor=#ffffff height=35 width="12%">
      <DIV align=center>
      <DIV align=center>收 款 方</DIV></DIV></TD>
	  <?php
$sql="select * from bank_info order by ID asc";
$result=mysql_query($sql);
	while($rs=mysql_fetch_array($result))
	{
?>

    <TD bgColor=#ffffff width="88%" align=left>&nbsp;&nbsp;<?php echo $rs["name"];?></TD></TR>
	<INPUT size=30 name=WIDseller_email maxlength="200" value="<?php echo $rs["accnumber"];?>" type="hidden">
	<INPUT size=30 name=WIDout_trade_no maxlength="200" value="<?php echo $order_id; ?>" type="hidden">
	


	<INPUT size=30 name=WIDsubject maxlength="200" value="会员充值" type="hidden">
	<INPUT size=30 name=WIDbody maxlength="200" value="" type="hidden">
  <TR>
    <TD bgColor=#ffffff height=35>
      <DIV align=center>充值金额</DIV></TD>
    <TD bgColor=#ffffff align=left>&nbsp; <INPUT maxLength=10 size=30 name=WIDtotal_fee onFocus="if(Number(this.value)==0){this.value='';}" value="10" style="width:113"/>&nbsp; <span>注：付款后不要关闭支付宝页面，一定要等页面自动跳转显示充值成功才行，若充值没有到账，请联系客服充值。</span>
	<INPUT value="<?php echo $_COOKIE["VipUser"];?>" type="hidden" name="VipUser"></TD></TR>
  <TR>
    <TD bgColor=#ffffff height=35>&nbsp;</TD>
    <TD bgColor=#ffffff align=left>　<INPUT style="WIDTH: 80px; HEIGHT: 25px" id=button value=" 开始支付 " type=submit name=button></TD></TR></TBODY></TABLE></FORM>
<DIV class="bk20 hr"></DIV>
<DIV class=wycz_zh>
<TABLE width="100%" style="font-size:13px">
  <TBODY>
  <TR>
    <TH id=kaihu_sm colSpan=4>其他支付方式：请在支付后通知客服查账！</TH></TR>
  <TR>
    <TH width="18%">银行</TH>
    <TH width="17%">账户</TH>
    <TH width="30%">帐号</TH>
    <TH width="40%">开户行</TH></TR>

  <TR>
    <TD><IMG src="<?php echo $rs["propic"];?>"></TD>
    <TD><?php echo $rs["name"];?></TD>
    <TD><?php echo $rs["accnumber"];?></TD>
    <TD><?php echo $rs["bankname"];?></TD></TR>
<?php
	}
?>
  <TR>
    <TH id=kaihu_sm colSpan=4>其他支付方式：请在支付后通知客服查账！</TH></TR></TBODY></TABLE></DIV></DIV></DIV>
<DIV class="bk20 hr"></DIV></DIV><IFRAME id=main height=0 src="about:blank" frameBorder=0 width=0 name=main></IFRAME>
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
