<!-- header -->
<div id="bar">
<div class="wrap">
<div class="fl" style="color:#686868;height:30px;line-height: 30px;">
<?php if(isset($_COOKIE['fg'])){
	if($_COOKIE['fg']==1){
		echo "您好，管理员[".$_COOKIE['VipUser']."] ， <a rel='nofollow' href='/admin/'  style='color: #ff0000;'>会员中心</a>";
	}else{
		echo "您好，会员[".$_COOKIE['VipUser']."] ， <a rel='nofollow' href='/user/'  style='color: #ff0000;'>会员中心</a>";
	}
}else{
	echo "你好，欢迎访问超级媒介网!";
}
?>
</div>
    <div class="bar_in">
        <p>
<a href="../news/news.php">新闻动态</a><span>|</span>
<a href="../system/contact.php">联系我们</a><span>|</span>
<a href="#">支付方式</a>
        </p>

    </div>
</div>
</div>

<div id="header">
	<div class="header_in">
	<div class="logo">
	       <a href="/" title="超级媒介"><img src="/style/images/logo.png" alt="超级媒介" width="200" height="77"></a>
				</div>
	<div class="logo_text"><div>软文推广行业领军品牌<br>慈溪易创科技旗下网站</div></div>
				<div class="nav">
					<ul class="wrapper">
    <li><a href="/">首页</a></li>
	<li><a href="../reg.php">会员注册</a></li>
	<li><a href="../vip/index.php">媒体价格</a></li>
	<li><a href="../system/ruanwen.php">软文推广</a></li>
	<li><a href="../system/taocan.php">软文套餐</a></li>
	<li><a href="../system/daixie.php">软文代写</a></li>
    <li><a href="../system/anli.php">成功案例</a></li>
					</ul>
				</div>
			</div>
		</div><!--naver end-->
<div class="xian"></div>		