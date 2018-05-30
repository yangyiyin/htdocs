<?php
require_once("rand.inc.php");
include ("include/config.php");
include("include/function.php");
$VipUser=$_COOKIE["VipUser"];
$AdminUser=$_COOKIE["AdminUser"];
if($VipUser<>""){
	$sql="select * from user where VipUser='".$VipUser."'";
	//$result=mysql_db_query($dbname,$sql);
	mysql_select_db($dbname);
	$result=mysql_query($sql);
	$rs=mysql_fetch_array($result);
	if($rs!=NULL)
	{
		$yue=$rs["yue"];
		$ip=$rs["ip"];
		$data=$rs["data"];
	}
	$ufalg=1;
	$username=$VipUser;
	$userpath="../user/";
	$fg=$_COOKIE["fg"];
	switch($_COOKIE["fg"])
	{
		case "1":
			$jiaose="核心代理";
			break;
		case "2":
			$jiaose="合作加盟供应商";
			break;
		case "3":
			$jiaose="企业用户";
			break;
	}
}
elseif($AdminUser<>""){
	$sql="select * from admin where AdminUser='".$AdminUser."'";
	//$result=mysql_db_query($dbname,$sql);
	mysql_select_db($dbname);
	$result=mysql_query($sql);
	$rs=mysql_fetch_array($result);
	if($rs!=NULL)
	{
		$yue=$rs["yue"];
		$ip=$rs["ip"];
		$data=$rs["data"];
	}
	$ufalg=1;
	$username=$AdminUser;
	$userpath="../admin/";
	$fg=$_COOKIE["fg"];
	switch($_COOKIE["fg"])
	{
		case "1":
			$jiaose="站长";
			break;
		case "2":
			$jiaose="副站长";
			break;
		case "3":
			$jiaose="检查员";
			break;
	}
}
else{
	$ufalg=0;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="style/js/uaredirect.js" type="text/javascript"></script>
<script type="text/javascript">uaredirect("/m/");</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title><?php echo $title;?></title>
<meta name="keywords" content="<?php echo $keyword;?>" />
<meta name="description" content="<?php echo $descr;?>" />
<meta name=GENERATOR content="MSHTML 8.00.6001.19394">
<link rel="shortcut icon" href="favicon.ico" />
<link rel="stylesheet" href="style/css/reset.css" type="text/css" />
<link rel="stylesheet" href="style/css/common.css" type="text/css" />
<link rel="stylesheet" href="style/css/index.css" type="text/css" />
<link rel="stylesheet" href="style/css/jquery.ui.min.css" type="text/css" />
<link rel="stylesheet" href="style/css/resetN.css" type="text/css" />
<link rel="stylesheet" href="style/css/home.css" type="text/css" />
<link rel="stylesheet" href="style/css/alipay.css" media="all" charset="utf-8" />
<link rel="stylesheet" type="text/css" href="style/css/iconfont.css">
<script type="text/javascript" src="style/js/modernizr.min.js" charset="utf-8"></script>
<script type="text/javascript" src="style/js/index.min.js"></script>
<script type="text/javascript" src="style/js/jquery.min.js"></script>
<script type="text/javascript" src="style/js/jquery.flexslider-min.js" charset="utf-8"></script>
<script type="text/javascript">
$(document).ready(function() {
	function change_lr(ele, ele_t, cla_name, eee) {
		ele.find(ele_t).mouseover(function() {
			var n = ele.find(ele_t).index($(this));
			ele.find(ele_t).removeClass("sc");
			ele.find(ele_t).eq(n).addClass("sc");
			eee.find("." + cla_name).hide();
			eee.find("." + cla_name).eq(n).show();
		});
	}
	//切换的调用在这里       
	change_lr($(".indd_tt"), "li", "a_a", $(".ind_down"));
})
</script>
<!-- wbg解决ie6下的背景 勿动！！！-->
<!--[if IE 6]>
<script src="style/js/ie_png.js" mce_src="style/js/ie_png.js"></script>
<script type="text/javascript">
	DD_belatedPNG.fix('.hot,bg');
</script>
<![endif]-->
<!--[if lt IE 9]>
<script src="style/js/html5shiv.min.js"></script>
<![endif]-->
<script type="text/javascript" language="javascript">
/*
* 设置最小宽度
* obj：javaScript节点对象
* width：数值
*/
function setMinWidth(obj, width) {
    obj.style.width = '855px';
}
/*
* 设置最大宽度
* obj：javaScript节点对象
* width：数值
*/
function setMaxWidth(obj, width) {
    obj.style.width = "855px";
}
window.onload = function () {
    $('#index_banner').children('li[class^=num0]').each(function () {
        setMinWidth(this, 1000);
    });
};
window.onresize = function () {
    $('#index_banner').children('li[class^=num0]').each(function () {
        setMinWidth(this, 1000);
    });
};
var t = n = 0, count;
var t1 = n1 = 0, count1;
$(document).ready(function () {
    //banner
    $("#index_banner li[class^=num0]").each(function (index) {
        $(this).bind('mouseover', function () {
            atoonmouseover(this);
        });
        $(this).bind('mouseout', function () {
            atoonmouseout(this);
        });
    });
    count = $("#index_banner li[class^=num0]").length;
    $("#index_banner li[class^=num0]:not(:first-child)").hide();
    $("#index_circle a").click(function () {
        var i = $(this).attr('ref') - 1; //获取Li元素内的值，即1，2，3，4
        n = i;
        if (i >= count) return;
        $("#index_banner li[class^=num0]").filter(":visible").fadeOut(500).parent().children().eq(i).fadeIn(500);
        $(this).addClass('orange').siblings().removeClass('orange');
    });
    setInterval("showAuto()", 10000);
    //$("#banner").hover(function () { clearInterval(t); }, function () { t = setInterval("showAuto()", 5000); });

});

function showAuto() {
    n = n >= (count - 1) ? 0 : ++n;
    $("#index_circle a").eq(n).trigger('click');
}
</script>

<SCRIPT language="javascript">
var code_hidden = '<?php echo $_SESSION['authnum'];?>';
function check(){
	if(document.getElementById('VipUser').value==""){
		document.getElementById('VipUser').focus();
		alert("登录帐号不能够为空!");
		return false;
	}
	if(document.getElementById('VipPass').value==""){
		document.getElementById('VipPass').focus();
		alert("密码不能够为空!");
		return false;
	}
if(code_hidden != form1.checkcode.value){
document.form1.checkcode.focus();
alert('验证码输入错误!');
return false;
}
	document.form1.action="checklogin.php";
	document.form1.submit();
	return true;
}

function loadimage(){
	document.getElementById('imageCreate').click();
}
</SCRIPT>
<style>
.nav ul li .nav1{
	background: #333333;
	color: #FFFFFF;
}
</style>
</head>
<body>
<div id="processing" style="display:none"></div>
<div id="swin" style="display:none"></div>
<div id="suwin" style="display:none"></div>
<div id="warp"><script type="text/javascript" src="style/js/nav.js"></script>
<?php
include("menu.php");
?>
<script type="text/javascript">
var addRippleEffect = function (e) {
	var target = e.target;
	if (target.tagName.toLowerCase() !== 'a') return false;
	var rect = target.getBoundingClientRect();
	var ripple = target.querySelector('.ripple');
	if (!ripple) {
		ripple = document.createElement('span');
		ripple.className = 'ripple';
		ripple.style.height = ripple.style.width = Math.max(rect.width, rect.height) + 'px';
		target.appendChild(ripple);
	}
	ripple.classList.remove('show');
	var top = e.pageY - rect.top - ripple.offsetHeight / 2 - document.body.scrollTop;
	var left = e.pageX - rect.left - ripple.offsetWidth / 2 - document.body.scrollLeft;
	ripple.style.top = top + 'px';
	ripple.style.left = left + 'px';
	ripple.classList.add('show');
	return false;
}
document.querySelector('.nav').addEventListener('click', addRippleEffect, false);
</script><div class="clear"></div>
<!-- banner start -->
<div id='heada'>
<div id="banner" class="index_banner0728">
	<div class="clear" style="height:1px;"></div>
	<ul id="index_banner" class="img">
		<li class="num01" data="1" style="display:inline-block;"><a href="javascript:;" target="_blank"><img src="style/images/index_banner1.jpg" width='855px' height='314px'></a></li>
		<li class="num02" data="2" style="display:none;"><a href="javascript:;" target="_blank"><img src="style/images/index_banner2.jpg" width='855px' height='314px'></a></li>
		<li class="num03" data="3" style="display:none;"><a href="javascript:;" target="_blank"><img src="style/images/index_banner3.jpg" width='855px' height='314px'></a></li>
		<li class="num04" data="4" style="display:none;"><a href="javascript:;" target="_blank"><img src="/upload/20180106232632_80513.jpg" width='855px' height='314px'></a></li>
	</ul>
	<div id="index_circle" class="circle">
		<a href="javascript:;" class="orange" ref="1"></a>
		<a href="javascript:;" ref="2"></a>
		<a href="javascript:;" ref="3"></a>
		<a href="javascript:;" ref="4"></a>
	</div>
	
</div>








<div class="mask">
		<div class="authcenter-body-login">
            			<div class="login login-modern " id="J-login">
						
                <form name="form1" id="form1" method="post" action="" class="ui-form">
				<?php
if($ufalg<>1){ ?>
                    <fieldset>
                        <h2 class="ui-form-title" id="J-login-title">登录超级媒介</h2>
						<div class="ui-form-item" id="J-username">
							<label id="J-label-user" class="ui-label" style="background-color:#aaabab;">
								<span class="uiicon ui-icon-userDEF"><i class="iconauth">&#xe600;</i></span>
							</label>
							<input type="text" id="VipUser" name="VipUser" tabindex="1" value="" class="ui-input ui-input-normal" autocomplete="off" maxlength="100" placeholder="请输入用户名" style="background:#fff;">
						</div>
						<div class="ui-form-item" id="J-password">
							<label id="J-label-editer" class="ui-label" style="background-color:#aaabab;">
								<span class="uiicon ui-icon-securityON" id="safeSignCheck"><i class="iconauth">&#xe603;</i></span>
							</label>
							<span class="standardPwdContainer">
							  <input type="password" id="VipPass" name="VipPass" tabindex="2" value="" class="ui-input" oncontextmenu="return false" onpaste="return false" oncopy="return false" oncut="return false" autocomplete="off" placeholder="请输入密码" style="background:#fff;"/>
							</span>
						</div>
						<div id="J-checkcode" class='ui-form-item'>
							<label id="J-label-checkcode" class="ui-label" style="background-color:#aaabab;">
								<i class="uiicon iconauth ui-icon-checkcodeT" id="J-switchCheckcode">&#xe604;</i>
							</label>
							<INPUT class="ui-input ui-input-checkcode" maxLength=5 type=text name="checkcode" id="checkcode" style="TEXT-TRANSFORM: uppercase; IME-MODE: disabled; background:#fff;">
							
							<div class="ui-checkcode"> 
								<?php echo $_SESSION['authnum'];?>
							</div>
						</div>
                        <div class="ui-form-item ui-form-item-30pd" id="J-submit">
                            <input type="button" value="登 录" class="btnLogin" id="J-login-btn"  onclick="javascript:check()"  tabindex="4">
                            <p class="ui-form-other">
                                <a class="register" href="reg.php" target="_blank" title="免费注册" tabindex="6"><font  class="textlink">没有账号？</font>立即注册</a>
                            </p>
                        </div>
                    </fieldset>
					
					<?php }
else{ ?>
					<div class="ui-form">
					<h3 class="ui-form-title">欢迎回来</h3>
					<div class="ui-form-item">
						<p class="ui-form-text">检测到您已经登录的账户：</p>
						<p class="ui-form-text">
							<span class="icon-sso" id="J-ssoLogin-icon"></span>
							<span class="login-sso-username" id="J-ssoLogin-name"><?php echo $username;?></span>
						</p>
					</div>

					<div class="ui-form-item ui-form-item-30pd">
						<a href="<?php echo $userpath;?>" class="uibutton textlink" id="J-ssoLogin-btn">进入会员中心</a>
						<p class="ui-form-other">
							<a class="textlink" href="logouts.php" tabindex="2" id="J-ssoLogin-change">注销登录</a>
						</p>
					</div>
				</div>
				
				<?php } ?>
				
                </form>
            </div>
		

        </div>
	</div>
	<div class='clear'></div>
	</div>
	


	<!--floor1-->
<div class="floor floor1">
    <div class="content-in">
        <div class="head_title">
            <h2>我们能做什么？</h2>
            <p>The role of news marketing</p>
        </div>

        <ul>
            <li>
                <div class="circle"><img src="/style/images/f1_icon01.png" alt="企业营销ico"/></div>
                <p>企业营销</p>
                <span>重大企业事件</span>
                <span>参与慈善活动</span>
                <span>行业特色事件</span>
                <span>危机公关事件</span>
            </li>
            <li>
                <div class="circle"><img src="/style/images/f1_icon02.png" alt="CEO营销ico"/></div>
                <p>CEO营销</p>
                <span>CEO故事访谈</span>
                <span>发表行业性观点</span>
                <span>社会热点点评</span>
                <span>荣誉及社会责任</span>
            </li>
            <li>
                <div class="circle"><img src="/style/images/f1_icon03.png" alt="文化营销ico"/></div>
                <p>文化营销</p>
                <span>企业价值理念</span>
                <span>企业文化观</span>
                <span>企业成长历程</span>
                <span>企业品牌故事</span>
            </li>
            <li style="margin-right:0;">
                <div class="circle"><img src="/style/images/f1_icon04.png" alt="产品营销ico"/></div>
                <p>产品营销</p>
                <span>产品新上市曝光</span>
                <span>提高产品知名度</span>
                <span>产品百度关键字</span>
                <span>百度搜索信任度</span>
            </li>
        </ul>
    </div>
</div>
<!--floor1-->

<!--floor4-->
<div class="floor floor4">
    <div class="content-in clearfix" style="position:relative; height:530px;">
        <div class="head_title">
            <h2>我们的优势</h2>
            <p>Advantage</p>
        </div>
        <img src="/style/images/f4_img01.png" />

        <ul>
            <li class="li_one" style="top:120px; right:230px;">
                <div class="li_left left_1"><span style="font-size:14px;  line-height:110%;">海量<br/>资源</span></div>
                <div class="li_right" style="padding:5px 0 0 15px;">超过1500家权威网络媒体资源，满足不同行业<br/>的品牌推广诉求</div>
            </li>
            <li class="li_two" style="top:180px; right:170px;">
                <div class="li_left left_2"><span style="font-size:14px;  line-height:120%;">覆盖<br/>范围广</span></div>
                <div class="li_right" style="padding:8px 0 0 15px;">汇集全国门户、地方门户、行业门户等优质<br/>媒体资源，涵盖各地区各行业。</div>
            </li>
            <li class="li_three" style="top:260px; right:130px;">
                <div class="li_left left_3"><span style="font-size:16px; line-height:130%;">传播<br/>费用优</span></div>
                <div class="li_right" style="padding:10px 0 0 15px;">以客户为导向，掌握一手媒体价格，传播费<br/>用便宜，季度推广和年度推广服务价格更优惠。</div>
            </li>
            <li class="li_four" style="top:360px; right:120px;">
                <div class="li_left left_4"><span style="font-size:18px; line-height:140%;">专业<br/>服务</span></div>
                <div class="li_right" style="padding:10px 0 0 15px;">超过6年网络推广经验，从接洽、确认、推广、<br/>数据分析等环节提供全标准化的服务流程，确使达到最好<br/>的宣传效果。</div>
            </li>
            <li class="li_five" style="top:445px; right:200px;">
                <div class="li_left left_5"><span style="font-size:20px; line-height:140%;">精准<br/>聚焦</span></div>
                <div class="li_right" style="padding:20px 0 0 15px;">大数据分析用户属性，精选符合客户特性的媒体渠道，分<br/>时间、分阶段投放新闻内容。</div>
            </li>
        </ul>

    </div>
</div>


	
<!-- banner end -->
<div class="row_01" style="background: #f9f9f9;">
    <div class="wrapper">
      
   
   
   
   <!-------->
   
   
   <div class="index-item_y">





		

			<div class="partners" style=" min-height:340px;padding:1px;">
		
				<div class="head_title" style="margin:60px auto 50px;">
					<h2>百万优质媒体资源</h2>
					<h3>慈溪市易创信息技术有限公司为企业提供"全方位"的互联网品牌推广营销服务！</h3>
        <p>致力于打造"中国互联网新闻营销第一品牌"，以"多、快、好、省"的良好的口碑，赢得市场和企业的一致认可。</p>
				</div>


				<div class="mr_frbox middle">


					<img class="mr_frBtnL prev floatl" src="/style/images/mfrL.png" width="70" height="70">
					<div class="mr_frUl floatl">
						<ul style="width: 4275px; position: relative; overflow: hidden; padding: 0px; margin: 0px; left: -1425px;"><li class="frli" style="float: left; width: 95px;">
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/sina.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>新浪网</label></div>
							</a>
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/wangyi.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>网易网</label></div>
							</a>
						</li><li class="frli" style="float: left; width: 95px;">
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/souhu.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>搜狐网</label></div>
							</a>
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/tengxun.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>腾讯网</label></div>
							</a>
						</li><li class="frli" style="float: left; width: 95px;">
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/renminwang_03.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>人民网</label></div>
							</a>
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/xinhuawang.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>新华网</label></div>
							</a>
						</li><li class="frli" style="float: left; width: 95px;">
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/fenghuangwang.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>凤凰网</label></div>
							</a>
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/huangqiuwang.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>环球网</label></div>
							</a>
						</li><li class="frli" style="float: left; width: 95px;">
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/zhongguowang.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>中国网</label></div>
							</a>
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/zhonghuawang.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>中华网</label></div>
							</a>
						</li><li class="frli" style="float: left; width: 95px;">
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/guojizaixian.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>国际在线</label></div>
							</a>
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/yangshiwang.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>央视网</label></div>
							</a>
						</li><li class="frli" style="float: left; width: 95px;">
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/zhongguoribao.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>中国日报网</label></div>
							</a>
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/guangmingwang.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>光明网</label></div>
							</a>
						</li><li class="frli" style="float: left; width: 95px;">
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/yangguangwang.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>央广网</label></div>
							</a>
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/qingnianwang.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>中国青年网</label></div>
							</a>
						</li><li class="frli" style="float: left; width: 95px;">
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/MSN.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>MSN</label></div>
							</a>
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/TOM.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>TOM网</label></div>
							</a>
						</li><li class="frli" style="float: left; width: 95px;">
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/hexun.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>和讯网</label></div>
							</a>
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/jingrongjie.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>金融界</label></div>
							</a>
						</li><li class="frli" style="float: left; width: 95px;">
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/beiqingwang.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>北青网</label></div>
							</a>
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/zhongxinwang.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>中新网</label></div>
							</a>
						</li><li class="frli" style="float: left; width: 95px;">
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/21CN.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>21CN</label></div>
							</a>
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/zhongjing.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>中金在线</label></div>
							</a>
						</li><li class="frli" style="float: left; width: 95px;">
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/qianlongwang.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>千龙网</label></div>
							</a>
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/nanfangcaifu.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>南方财富网</label></div>
							</a>
						</li><li class="frli" style="float: left; width: 95px;">
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/jingjiwang.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>中国经济网</label></div>
							</a>
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/dongfangcaifu.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>东方财富网</label></div>
							</a>
						</li><li class="frli" style="float: left; width: 95px;">
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/zhongxinwang.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>中新网</label></div>
							</a>
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/zhongqingzaixian.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>中青在线</label></div>
							</a>
						</li>
						<li class="frli" style="float: left; width: 95px;">
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/sina.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>新浪网</label></div>
							</a>
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/wangyi.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>网易网</label></div>
							</a>
						</li>
						<li class="frli" style="float: left; width: 95px;">
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/souhu.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>搜狐网</label></div>
							</a>
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/tengxun.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>腾讯网</label></div>
							</a>
						</li>
						<li class="frli" style="float: left; width: 95px;">
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/renminwang_03.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>人民网</label></div>
							</a>
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/xinhuawang.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>新华网</label></div>
							</a>
						</li>
						<li class="frli" style="float: left; width: 95px;">
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/fenghuangwang.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>凤凰网</label></div>
							</a>
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/huangqiuwang.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>环球网</label></div>
							</a>
						</li>
						<li class="frli" style="float: left; width: 95px;">
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/zhongguowang.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>中国网</label></div>
							</a>
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/zhonghuawang.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>中华网</label></div>
							</a>
						</li>
						<li class="frli" style="float: left; width: 95px;">
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/guojizaixian.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>国际在线</label></div>
							</a>
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/yangshiwang.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>央视网</label></div>
							</a>
						</li>
						<li class="frli" style="float: left; width: 95px;">
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/zhongguoribao.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>中国日报网</label></div>
							</a>
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/guangmingwang.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>光明网</label></div>
							</a>
						</li>
						<li class="frli" style="float: left; width: 95px;">
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/yangguangwang.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>央广网</label></div>

							</a>
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/qingnianwang.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>中国青年网</label></div>
							</a>
						</li>
						<li class="frli" style="float: left; width: 95px;">
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/MSN.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>MSN</label></div>
							</a>
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/TOM.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>TOM网</label></div>
							</a>
						</li>
						<li class="frli" style="float: left; width: 95px;">
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/hexun.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>和讯网</label></div>
							</a>
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/jingrongjie.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>金融界</label></div>
							</a>
						</li>
						<li class="frli" style="float: left; width: 95px;">
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/beiqingwang.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>北青网</label></div>
							</a>
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/zhongxinwang.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>中新网</label></div>
							</a>
						</li>
						<li class="frli" style="float: left; width: 95px;">
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/21CN.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>21CN</label></div>
							</a>
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/zhongjing.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>中金在线</label></div>
							</a>
						</li>
						<li class="frli" style="float: left; width: 95px;">
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/qianlongwang.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>千龙网</label></div>
							</a>
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/nanfangcaifu.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>南方财富网</label></div>
							</a>
						</li>
						<li class="frli" style="float: left; width: 95px;">
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/jingjiwang.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>中国经济网</label></div>
							</a>
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/dongfangcaifu.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>东方财富网</label></div>
							</a>
						</li>
						<li class="frli" style="float: left; width: 95px;">
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/zhongxinwang.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>中新网</label></div>
							</a>
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/zhongqingzaixian.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>中青在线</label></div>
							</a>
						</li>
						<li class="frli" style="float: left; width: 95px;">
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/sina.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>新浪网</label></div>
							</a>
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/wangyi.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>网易网</label></div>
							</a>
						</li><li class="frli" style="float: left; width: 95px;">
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/souhu.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>搜狐网</label></div>
							</a>
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/tengxun.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>腾讯网</label></div>
							</a>
						</li><li class="frli" style="float: left; width: 95px;">
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/renminwang_03.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>人民网</label></div>
							</a>
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/xinhuawang.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>新华网</label></div>
							</a>
						</li><li class="frli" style="float: left; width: 95px;">
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/fenghuangwang.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>凤凰网</label></div>
							</a>
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/huangqiuwang.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>环球网</label></div>
							</a>
						</li><li class="frli" style="float: left; width: 95px;">
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/zhongguowang.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>中国网</label></div>
							</a>
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/zhonghuawang.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>中华网</label></div>
							</a>
						</li><li class="frli" style="float: left; width: 95px;">
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/guojizaixian.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>国际在线</label></div>
							</a>
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/yangshiwang.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>央视网</label></div>
							</a>
						</li><li class="frli" style="float: left; width: 95px;">
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/zhongguoribao.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>中国日报网</label></div>
							</a>
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/guangmingwang.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>光明网</label></div>
							</a>
						</li><li class="frli" style="float: left; width: 95px;">
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/yangguangwang.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>央广网</label></div>
							</a>
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/qingnianwang.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>中国青年网</label></div>
							</a>
						</li><li class="frli" style="float: left; width: 95px;">
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/MSN.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>MSN</label></div>
							</a>
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/TOM.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>TOM网</label></div>
							</a>
						</li><li class="frli" style="float: left; width: 95px;">
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/hexun.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>和讯网</label></div>
							</a>
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/jingrongjie.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>金融界</label></div>
							</a>
						</li><li class="frli" style="float: left; width: 95px;">
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/beiqingwang.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>北青网</label></div>
							</a>
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/zhongxinwang.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>中新网</label></div>
							</a>
						</li><li class="frli" style="float: left; width: 95px;">
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/21CN.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>21CN</label></div>
							</a>
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/zhongjing.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>中金在线</label></div>
							</a>
						</li><li class="frli" style="float: left; width: 95px;">
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/qianlongwang.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>千龙网</label></div>
							</a>
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/nanfangcaifu.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>南方财富网</label></div>
							</a>
						</li><li class="frli" style="float: left; width: 95px;">
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/jingjiwang.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>中国经济网</label></div>
							</a>
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/dongfangcaifu.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>东方财富网</label></div>
							</a>
						</li><li class="frli" style="float: left; width: 95px;">
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/zhongxinwang.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>中新网</label></div>
							</a>
							<a href="javascript:void(0)" target="_blank">
								<span><img src="/style/images/zhongqingzaixian.png" width="90" height="90"></span>
								<div class="words" style="display: none;"><label>中青在线</label></div>
							</a>
						</li></ul>
					</div>
					<img class="mr_frBtnR next floatr" src="/style/images/mfrR.png" width="70" height="70">
				</div>
			</div>
	




						<script language="javascript" type="text/javascript" src="/style/js/ss.js"></script>
						<script language="javascript">
						$('.mr_frUl ul li a').hover(function () {
							$(this).find('.words').animate({ opacity: 'show', height: 'show' }, 0);
						}, function () {
							$('.words').stop(true, true).hide();
						});
						jQuery(".mr_frbox").slide({titCell:"",mainCell:".mr_frUl ul",autoPage:true,effect:"leftLoop",autoPlay:true,vis:11});

					


						

					</script>

				</div>
   <!----------->
   
   
   


    </div>
    <!--wrapper end-->
  </div>
  
  
  
  

  

<div class="row_04 com_bg">
    <div class="wrapper">
      <div class="head">
        <h2>特价媒体<span style="color: #e60012; font-size:20px">Package</span></h2>
      </div>
      <div class="bk30"></div>
      <div class="body">
        <div class="picScroll">
          <div class="bd">
            <div class="scrollWrap">
              <ul class="picList">
                <li>
                  <div class="thumb"><img alt="今日头条软文发布" src="style/images/1.jpg"> </div>
                  <div class="desc">
                    <h4>今日头条软文发布</h4>
                    <p>抢购价<em>¥5</em><a href="/reg.php" target="_blank" rel="nofollow"><img alt="购买" src="style/images/buy.gif"></a></p>
                  </div>
                  <div class="icon"></div>
                </li>
                <li>
                  <div class="thumb"><img alt="搜狐媒体软文发布" src="style/images/2.jpg"> </div>
                  <div class="desc">
                    <h4>搜狐媒体软文发布</h4>
                    <p>抢购价<em>¥5</em><a href="/reg.php" target="_blank" rel="nofollow"><img alt="购买" src="style/images/buy.gif"></a></p>
                  </div>
                  <div class="icon"></div>
                </li>
                <li>
                  <div class="thumb"><img alt="一点资讯软文发布" src="style/images/3.jpg"> </div>
                  <div class="desc">
                    <h4>一点资讯软文发布</h4>
                    <p>抢购价<em>¥5</em><a href="/reg.php" target="_blank" rel="nofollow"><img alt="购买" src="style/images/buy.gif"></a></p>
                  </div>
                  <div class="icon"></div>
                </li>
                <li>
                  <div class="thumb"><img alt="凤凰客户端软文发布" src="style/images/4.jpg"> </div>
                  <div class="desc">
                    <h4>凤凰客户端软文发布</h4>
                    <p>抢购价<em>¥5</em><a href="/reg.php" target="_blank" rel="nofollow"><img alt="购买" src="style/images/buy.gif"></a></p>
                  </div>
                  <div class="icon"></div>
                </li>
                <li>
                  <div class="thumb"><img alt="腾讯客户端软文发布" src="style/images/5.jpg"></div>
                  <div class="desc">
                    <h4>腾讯客户端软文发布</h4>
                    <p>抢购价<em>¥5</em><a href="/reg.php" target="_blank" rel="nofollow"><img alt="购买" src="style/images/buy.gif"></a></p>
                  </div>
                  <div class="icon"></div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    
	
	
	</div>
    <!--wrapper end-->
  </div>
  <!--row_04 end-->
  
  
  
<!--floor3-->
<div class="floor floor3">
    <div class="content-in">
        <div class="head_title">
            <h2>新闻软文发布的好处</h2>
            <p>News soft marketing benefits</p>

            <ul>
                <li>
                    <div class="li_left left_1"></div>
                    <div class="li_right">
                        <strong>权威展示，提升品牌认可度</strong>
                        <p>新闻作为公众媒体具有公正性、权威性，在网民心中可信度高并且受众能主动接受新闻传播的内容，这对企业提升品牌认可度和影响力有极大的帮助。</p>
                    </div>
                </li>
                <li>
                    <div class="li_left left_2"></div>
                    <div class="li_right">
                        <strong>关键词搜索，提升品牌曝光率</strong>
                        <p>百度一直对新闻给予的权重很高，通过关键词即可搜索到相关内容并且在百度新闻栏里面获得首页待遇，受众更容易了解品牌信息，还可以有效的增强品牌曝光度。</p>
                    </div>
                </li>
                <li>
                    <div class="li_left left_3"></div>
                    <div class="li_right">
                        <strong>长久保存，持续口碑效应</strong>
                        <p>新闻稿件经过一次性发布，能够长期存在和传播，为品牌源源不断的提供网络口碑支持。</p>
                    </div>
                </li>
                <li>
                    <div class="li_left left_4"></div>
                    <div class="li_right">
                        <strong>覆盖面广，提升品牌知名度</strong>
                        <p>新闻营销不受地域限制，可以将企业新闻定向传播到互联网各个角落，覆盖意向客户视野，反复引导受众，并提高品牌形象和知名度。</p>
                    </div>
                </li>
                <li>
                    <div class="li_left left_5"></div>
                    <div class="li_right">
                        <strong>完整诠释，使品牌信息更准确</strong>
                        <p>新闻可以用文字完整诠释要传播的信息，因此，新闻报道可以把企业要传达的目标信息传播得更准确、详尽。</p>
                    </div>
                </li>
                <li>
                    <div class="li_left left_6"></div>
                    <div class="li_right">
                        <strong>高性价比，降低广告成本</strong>
                        <p>新闻营销具有高性价比的优势，相较于其他推广形式价格较便宜，可以降低企业预算成本，对于企业来说是非常划算的选择。</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>


  
  
<div id="sections">
<div class="caseboxs">
<section class="cases">
	<div class="box">
    	<!--div class="caption">
        	<i></i><span>经典案例欣赏</span>
            <br class="clear" />
        </div-->
		<div class="list_tit"><b class="a_ico">经典案例欣赏</b></div>
		<div style="clear:both;"></div>
        <div class="swiper-container items">
           <div class="swiper-wrapper">
				<div class="swiper-slide">
                    <a href="http://Www.Cjmjw.Cn/news/newsinfo.php?ID=73" target="_blank">
                    <img src="style/images/2-15111GH12D94.png" alt="李美璇" />
                    <li><p>案例欣赏<br /><strong>李美璇</strong><br />新歌《中国的版图是火炬》</p></a></li>
				</div>
				<div class="swiper-slide">
                    <a href="http://Www.Cjmjw.Cn/news/newsinfo.php?ID=199" target="_blank">
                    <img src="/upload/20180106165706_66598.png" alt="吉利汽车" />
                    <li><p>案例欣赏<br /><strong>吉利汽车</strong><br />吉利集团打造的一款全新品牌</p></a></li>
				</div>
				<div class="swiper-slide fr">
                    <a href="http://Www.Cjmjw.Cn/news/newsinfo.php?ID=75" target="_blank">
                    <img src="style/images/2-15111GF300X7.png" alt="中国石油" />
                    <li><p>案例欣赏<br /><strong>中国石油</strong><br />中国石油推广案例</p></a></li>
                </div>
           </div>
        </div>
		<div style="clear:both;"></div>
        <a href="/system/anli.php" title="欣赏更多经典案例" class="more" target="_blank">MORE</a>
	</div>
</section>
</div>
</div>



<div class="block5"></div>
﻿

<script type="text/javascript">
$('.footer .ft_logo').hover(function(){
	$(this).addClass('ft_logo_h');
	},
	function(){
	$(this).removeClass('ft_logo_h');
	}) 
</script>
</div>

<!-- footer -->
<div class="btm_bga">
  <div class="btma"> <span>加入 超级媒介 立刻使用新闻稿发布平台！</span> <a target="_blank" rel="nofollow" href="/reg.php"><img src="/style/images/btn_ljjr.jpg" alt="注册账号" width="236" height="40" style="display:block; float:right; margin-top:13px;"></a> </div>
</div>
<!-- footer -->
<div class="footera com_bga">
  <div class="wrappera">
    <div class="row_08a">
      <div class="box1a">
        <div class="heada">
          <h3>商务合作</h3>
        </div>
        <div class="bodya">
          <ul>
            <li>企业QQ：<?php echo $qq;?></li>
            <li>咨询电话：<?php echo $dianhua;?></li>
            <li>售后电话：<?php echo $dianhua;?></li>
            <li>投诉电话：<?php echo $dianhua;?></li>
          </ul>
        </div>
      </div>
      <!--box1 end-->
      <div class="box2a">
        <div class="heada">
          <h3>服务咨询</h3>
        </div>
        <div class="bodya">
          <ul>
            <li>小余：2385788327（售前）<a target="_blank" rel="nofollow" href="http://wpa.qq.com/msgrd?v=3&uin=3029542305&site=qq&menu=yes"><img border="0" src="/style/images/button_121.gif" alt="点击这里给我发消息" title="点击这里给我发消息"/></a></li>
            <li>小蛋：2385788327（售前）<a target="_blank" rel="nofollow" href="http://wpa.qq.com/msgrd?v=3&uin=2492586218&site=qq&menu=yes"><img border="0" src="/style/images/button_121.gif" alt="点击这里给我发消息" title="点击这里给我发消息"/></a></li>
            <li>小王：2385788327（售前）<a target="_blank" rel="nofollow"  href="http://wpa.qq.com/msgrd?v=3&uin=2385788327&site=qq&menu=yes"><img border="0" src="/style/images/button_121.gif" alt="点击这里给我发消息" title="点击这里给我发消息"/></a></li>
            <li>小人：2385788327（售后）<a target="_blank" rel="nofollow" href="http://wpa.qq.com/msgrd?v=3&uin=2385788327&site=qq&menu=yes"><img border="0" src="/style/images/button_121.gif" alt="点击这里给我发消息" title="点击这里给我发消息"/></a></li>
          </ul>
        </div>
      </div>
      <!--box2 end-->
      <div class="box3a">
        <div class="heada">
          <h3> 友情链接</h3>
        </div>
        <div class="bodya linka">
         <?php
	$sql="select * from piclink_class where BigClass<>'" . "' order by paixu asc";
	//$result=mysql_db_query($dbname,$sql);
	mysql_select_db($dbname);
	$result=mysql_query($sql);
	while($rs=mysql_fetch_array($result))
		{
			$link=$rs["linkurl"];
		?>
	<A class="linkb" href="<?php echo $link;?>" target="_blank"><?php echo $rs["BigClass"];?></A>
	<?php
		}
	?>
        </div>
      </div>
      <!--box3 end-->
      <div class="box4a">
        <div class="heada">
          <h3>扫一扫 加关注</h3>
        </div>
        <div class="bodya"><img src="/style/images/weixin.jpg" alt=""></div>
      </div>
      <!--box4 end-->
      <div class="clear"></div>
    </div>
  </div>
  <!--row_08 end-->
  <div class="copyrighta">
    <div class="thumba">
      <ul>
        <li><a rel="nofollow" target="_blank" href="http://Www.Cjmjw.Cn/upload/20171215111100_89277.jpg" target="_blank" ><img src="http://Www.Cjmjw.Cn/upload/20171215111051_79090.jpg"></a></li>
        <li><a rel="nofollow" target="_blank" href="http://webscan.360.cn/index/checkwebsite/url/Www.Cjmjw.Cn" target="_blank" ><img src="http://Www.Cjmjw.Cn/upload/20180228203737_13370.png"></a></li>
        <li><a rel="nofollow" target="_blank" href="http://xinyong.360.cn/detail/b.zxgzw.com" target="_blank" ><img src="http://c.trustutn.org/images/cert/cert_0_1.png"></a></li>
        
      </ul>
    </div>
    <div class="foot_txta">
      <p>超级媒介&nbsp;<a href="<?php echo $weburl;?>">(Www.Cjmjw.Cn)</a>&nbsp;&nbsp;&copy; 2013-2018&nbsp;All Right Reserved.&nbsp;&nbsp;法律顾问：ITLAW-王先生 </p>
      <p>主管单位：易创公司 版权所有 浙ICP备16040543号-2 <a href="<?php echo $weburl;?>"><strong>软文推广</strong></a>首选（<a href="<?php echo $weburl;?>"><b>超级媒介</b></a>）新闻稿自助发布平台</p>
      <p>超级媒介是国内领先的自媒体软文营销平台，隶属于慈溪市易创信息技术有限公司，超级媒介：老品牌、大影响、高效率、发遍全网络！</p>
    </div>
    <div class="clear"></div>
  </div>
  <!--wrapper end-->
</div>
<!-- /footer -->

<!-- footer -->
<script type="text/javascript">
$(function() {
	$("#sliderBox").flexslider({
		slideshow: true,                //Boolean: Animate slider automatically 载入页面时，是否自动播放
		slideshowSpeed: 5000,
		directionNav: false,
		pauseOnHover: true,
		animationDuration: 200,
		before:function(){$('.slideTitle').animate({'top':'20px','opacity':'0'},300);$('.slideText').animate({'top':'56%','opacity':'0'},300)},
		after:function(){$('.slideTitle').animate({'top':'60px','opacity':'1'},300);$('.slideText').delay(300).animate({'top':'66%','opacity':'1'},300)},
	});
	$("#sliderBox .banner1").click(function(){
	    	location.href="/";
	})
	/*
	$("#sliderBox .banner2").click(function(){
		location.href="/shownews.html?id=68"; 
	})
	
	$("#sliderBox .banner3").click(function(){
		location.href="/shownews.html?id=54"; 
	})
	*/
});
	
function qrcodesel(t){
	if(t==1){
		$('#J-login').show();
		$('#J-ssoLogin').show();
		$('#J-qrcode').addClass("fn-hide");
		$('#J-qrcode-target').removeClass("qrcode-target-hide");
		$('#J-qrcode-target').addClass("qrcode-target-show");
		$('#qrcodesel').val(0);
	}else{
		$('#J-login').hide();
		$('#J-ssoLogin').hide();
		$('#J-qrcode').removeClass("fn-hide");
		$('#J-qrcode-target').removeClass("qrcode-target-show");
		$('#J-qrcode-target').addClass("qrcode-target-hide");
		$('#qrcodesel').val(1);
	}
}
</script>
<!-- 视频弹窗开始 -->



<!-----<style type="text/css">
.pop_box{border:1px solid #000; position:absolute; z-index:99999; left:0px; top:300px; background:#000;}
.close_open{display:block; width:40px; height:18px; line-height:18px; text-align:center; color:#000; background:#ccc; position:absolute; right:0; top:0; z-index:199; font-size:12px; text-decoration:none;}
div.clink a,div.clink a:link,div.clink a:visited { display:block; width:280px; height:209px;background:red; top:0px;z-index:100;position:absolute; filter:alpha(opacity=0);opacity:0.0;}
div.clink a span { display:block;width:0px; height:0px; backgrond:blue;background:red; z-index:99;position:absolute;filter:alpha(opacity=0);opacity:0.0;}
body,td,th {
font-size: 12px;
}
</style>

<div class="pop_box" id="ad_cover">
<a href="javascript:void(0)" class="close_open">关闭</a>
<div class="clink"></div>
<div class="player_video"><div id="CuPlayerWin"></div></div>
</div>
<script type="text/javascript">
var PWRD_SWFPATH="style/images/JZminiPlayer.swf";//播放器文件地址
</script>
<script type="text/javascript" src="style/js/swfobject.js"></script>
<script type="text/javascript">
addVideoPlayer('CuPlayerWin',280,210,{file:'http://www.haha7788.com/vcl.mp4',autoplay:true});
$(".close_open").click(function(){
removeSWF('CuPlayerWin'); 
$(".pop_box").hide();
});
$(document).ready(function(){
function scrollAd(){
var offset = $(window).height() + $(document).scrollTop()-615;
$('#ad_cover').animate({top:offset+400},{duration:200,queue:false});
} 
scrollAd();
$(window).scroll(scrollAd);
});
</script>  ---->

<!-- 视频弹窗结束 -->


<!--代码部分begin-->
<div id="floatTools" class="rides-cs" style="height:246px;">
  <div class="floatL">
  	<a id="aFloatTools_Show" class="btnOpen" title="查看在线客服" style="top:20px;display:block" href="javascript:void(0);">展开</a>
  	<a id="aFloatTools_Hide" class="btnCtn" title="关闭在线客服" style="top:20px;display:none" href="javascript:void(0);">收缩</a>
  </div>
  <div id="divFloatToolsView" class="floatR" style="display: none;height:237px;width: 140px;">
    <div class="cn">
      <h3 class="titZx">超级媒介客服</h3>
      <ul>
        <li><span>销售小王</span> <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=2385788327&site=qq&menu=yes"><img border="0" src="/style/css/img/online.png" alt="点击这里给我发消息" title="点击这里给我发消息"/></a> </li>
        <li><span>销售小蛋</span> <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=2492586218&site=qq&menu=yes"><img border="0" src="/style/css/img/online.png" alt="点击这里给我发消息" title="点击这里给我发消息"/></a> </li>
        <li><span>媒介入驻</span> <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=2385788327&site=qq&menu=yes"><img border="0" src="/style/css/img/online.png" alt="点击这里给我发消息" title="点击这里给我发消息"/></a> </li>
        <li>
            <a href="http://Www.Cjmjw.Cn/" target="_blank">超级媒介</a>
          
            <div class="div_clear"></div>
        </li>
        <li style="border:none;"><span>电话：18069218786</span> </li>
      </ul>
    </div>
  </div>
</div>


<script>
	$(function(){
		$("#aFloatTools_Show").click(function(){
			$('#divFloatToolsView').animate({width:'show',opacity:'show'},100,function(){$('#divFloatToolsView').show();});
			$('#aFloatTools_Show').hide();
			$('#aFloatTools_Hide').show();				
		});
		$("#aFloatTools_Hide").click(function(){
			$('#divFloatToolsView').animate({width:'hide', opacity:'hide'},100,function(){$('#divFloatToolsView').hide();});
			$('#aFloatTools_Show').show();
			$('#aFloatTools_Hide').hide();	
		});
	});
</script>
<!--代码部分end-->


<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?cde686153b816b30a3312e6d6baeda3c";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
</body>
</html>