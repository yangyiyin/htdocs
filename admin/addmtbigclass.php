<?php
include ("../include/config.php");
include ("checkuser.php");

$titleID=$_REQUEST["titleID"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台管理</title>
<link rel="stylesheet" href="skin/css/base.css" type="text/css" />
<script type='text/javascript' src='images/jquery.min.js'></script>
<script charset="utf-8" src="../kindeditor/kindeditor.js"></script>
<script type="text/javascript" charset="utf-8" src="../ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="../ueditor/ueditor.all.min.js"> </script>
<script type="text/javascript" charset="utf-8" src="../ueditor/lang/zh-cn/zh-cn.js"></script>
<script>
var ue = UE.getEditor('editor');//初始化对象  
var ue = UE.getEditor('editora');//初始化对象
</script>
</head>
<body>
<form id="form1" name="form1" method="post" action="savemtbiginfo.php?action=add&titleID=<?php echo $titleID;?>" onSubmit="return CheckForm();"> 
  <table width="98%" align="center" border="0" cellpadding="4" cellspacing="1" bgcolor="#e2e2e2" style="margin-bottom:8px">
    <tr bgcolor="#EEF4EA">
      <td colspan="2" align="center" background="skin/images/frame/wbg.gif" class='title'><span class="sitemu"><strong>添加媒体资源</strong></span></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td width="17%" align="right">资源大类：</td>
	  <td><select name="nav_id" size="1" id="nav_id">
          <?php
			$sql="select * from nav_class";
            $result=mysql_db_query($dbname,$sql);
			while($rs=mysql_fetch_array($result))
			{
			?>
          <option value="<?php echo $rs["ID"];?>"><?php echo $rs["BigClass"];?></option>
          <?php
			}
		  ?>
      </select></td>
    </tr>
	 <tr bgcolor="#FFFFFF">
      <td width="17%" align="right"> 媒体类型：</td>
	  <td>
	  <INPUT   value='1'  type="radio" name="typefl">PC端网媒　
	  <INPUT  value='2' type="radio" name="typefl">自媒体APP　
	  <INPUT  value='3' type="radio" name="typefl">微信公众号　
	  <INPUT  value='4' type="radio" name="typefl">新浪微博
	  
</td>
    </tr>
	
	<tr bgcolor="#FFFFFF">
      <td align="right">资源小类：</td>
      <td>
		<select name="sc_id" id="sc_id" title="选择资源二级分类"> 
		</select> 
	  </td>
    </tr>
	<tr bgcolor="#FFFFFF">
      <td width="17%" align="right">指定媒介主： </td>
      <td><label>
        <input name="meijie" type="text" id="meijie" size="20" />
      </label></td>
    </tr>
	
	<tr bgcolor="#FFFFFF">
      <td width="17%" align="right">联系编辑： </td>
      <td><label>
        <input name="tela" type="text" id="tela" size="60" />
      </label></td>
    </tr>
	<tr bgcolor="#FFFFFF" style='display:none;'>
      <td width="17%" align="right">优惠类别：</td>
	  <td><select name="small_id" size="1" id="small_id">
	  <option value="0">无</option>
          <?php
			$sqls="select * from ".$titleID."_small";
            $results=mysql_db_query($dbname,$sqls);
			while($rss=mysql_fetch_array($results))
			{
			?>
          <option value="<?php echo $rss["ID"];?>"><?php echo $rss["BigClass"];?></option>
          <?php
			}
		  ?>
      </select></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td width="17%" align="right">媒体名称：</td>
      <td width="83%"><input name="medianame" type="text" id="medianame" size="60" /></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td width="17%" align="right">所在地区：</td>
      <td width="83%"><select name="diqu" size="1" id="diqu">
          <?php
			$sqld="select * from diqu_class";
            $resultd=mysql_db_query($dbname,$sqld);
			while($rsd=mysql_fetch_array($resultd))
			{
			?>
          <option value="<?php echo $rsd["BigClass"];?>"><?php echo $rsd["BigClass"];?></option>
          <?php
			}
		  ?>
      </select></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td width="17%" align="right">媒体网址： </td>
      <td><label>
        <input name="weburl" type="text" id="weburl" size="60" />
      </label></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td width="17%" align="right">案例网址： </td>
      <td><label>
        <input name="anliurl" type="text" id="anliurl" size="60" />
      </label></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td width="17%" align="right">链接情况： </td>
      <td><select name="linkurl" size="1" id="linkurl">
          <option value=" ">请选择</option>
		  <option value="可超链接">可超链接</option>
		  <option value="文本链接">文本链接</option>
		  <option value="可带网址">可带网址</option>
		  <option value="不能带连接">不能带连接</option>
		  <option value="不能带网址">不能带网址</option>
      </select></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td width="17%" align="right">新闻源： </td>
      <td><select name="xinwenyuan" size="1" id="xinwenyuan">
          <option value="非新闻源">非新闻源</option>
		  <option value="网页收录">网页收录</option>
		  <option value="百度新闻源">百度新闻源</option>
		  <option value="谷歌新闻源">谷歌新闻源</option>
		  <option value="搜狗新闻源">搜狗新闻源</option>
		  <option value="360新闻源">360新闻源</option>
		  <option value="搜搜新闻源">搜搜新闻源</option>
      </select></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td width="17%" align="right">综合门户媒体： </td>
      <td><select name="zhmh" size="1" id="zhmh">
          <option value=" ">非门户</option>
		  <?php
			$sql2="select * from menhu_class";
            $result2=mysql_db_query($dbname,$sql2);
			while($rs2=mysql_fetch_array($result2))
			{
			?>
          <option value="<?php echo $rs2["BigClass"];?>"><?php echo $rs2["BigClass"];?></option>
          <?php
			}
		  ?>
      </select></td>
    </tr>
	<tr bgcolor="#FFFFFF">
      <td width="17%" align="right">粉丝数量： </td>
      <td><label>
        <input name="fans" type="text" id="fans" value="0" size="13" />
      </label></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td width="17%" align="right">成本价格： </td>
      <td><label>
        <input name="scprice" type="text" id="scprice" size="13" />元
      </label></td>
    </tr>
   
	<tr bgcolor="#FFFFFF">
      <td width="17%" align="right">零售价格： </td>
      <td><label>
        <input name="price" type="text" id="price" size="13" />元
      </label></td>
    </tr>
	<tr bgcolor="#FFFFFF">
      <td width="17%" align="right">市场价格： </td>
      <td><label>
        <input name="sccprice" type="text" id="sccprice" size="13" />元
      </label></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td width="17%" align="right">备注说明： </td>
      <td><script id="editor" name="content" type="text/plain" style="width:85%;height:330px;"></script></td>
    </tr>
	<tr bgcolor="#FFFFFF">
      <td width="17%" align="right">资源介绍： </td>
      <td><script id="editora" name="neirong" type="text/plain" style="width:85%;height:330px;"></script></td>
    </tr>
	<tr bgcolor="#FFFFFF">
      <td align="right">推荐：</td>
      <!--td height="35"><input name="tj" type="checkbox" id="tj" value="1" />
      是</td-->
	  
	  <td height="35"><select onchange="document.x1.src=options[selectedIndex].value" size="1" name="tj">
<option value="../images/stars.gif">无推荐</option>
<option value="../images/stars1.gif">1星推荐</option>
<option value="../images/stars2.gif">2星推荐</option>
<option value="../images/stars3.gif">3星推荐</option>
<option value="../images/stars4.gif">4星推荐</option>
<option value="../images/stars5.gif">5星推荐</option>
</select>&nbsp;&nbsp;<img  alt="" src="../images/stars.gif" name="x1"  height="12"/></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td>&nbsp;</td>
      <td height="35"><span style="PADDING-LEFT: 10px">
        <input style="WIDTH: 73px; HEIGHT: 25px" type="submit" name="Submit" value="确认提交" />
&nbsp;
<input style="WIDTH: 73px; HEIGHT: 25px" type="reset" name="Submit2" value="重新添写" />
      </span></td>
    </tr>
  </table>
</form>
</body>
</html>
<script language="javascript" src="comm_js/comm.js"></script>
<script language="javascript">
function CheckForm()
	{
		if(document.form1.medianame.value==""){
           document.form1.medianame.focus();
           alert("媒体名称不能空!");
           return false;
		}
		if(document.form1.typefl[0].checked==false && document.form1.typefl[1].checked==false&& document.form1.typefl[2].checked==false&& document.form1.typefl[3].checked==false){
           
           alert("媒体类型不能空!");
           return false;
		}
		var reg	= new RegExp(/^[^*$#\\~@!&%￥<>=|{}+-\/]+$/);
		if (! reg.test(document.form1.medianame.value))
		{
			alert("不能输入特殊字符！");
			document.form1.medianame.focus();
			return false;
		}
		if(document.form1.scprice.value==""){
           document.form1.scprice.focus();
           alert("成本价格不能空!");
           return false;
		}
		var reg	= new RegExp(/^\d*\.?\d{0,2}$/);
		if (! reg.test(document.form1.scprice.value))
		{
			alert("请正确输入成本价格");
			document.form1.scprice.focus();
			return false;
		}
		if (Number(document.form1.scprice.value) < 0.01) {
			alert("成本价格最小是0.01.");
			document.form1.scprice.focus();
			return false;
		}
		
		if(document.form1.price.value==""){
           document.form1.price.focus();
           alert("零售价格不能空!");
           return false;
		}
		var reg	= new RegExp(/^\d*\.?\d{0,2}$/);
		if (! reg.test(document.form1.price.value))
		{
			alert("请正确输入零售价格");
			document.form1.price.focus();
			return false;
		}
		if (Number(document.form1.price.value) < 0.01) {
			alert("零售价格最小是0.01.");
			document.form1.price.focus();
			return false;
		}
		
		
		if(document.form1.sccprice.value==""){
           document.form1.sccprice.focus();
           alert("市场价格不能空!");
           return false;
		}
		var reg	= new RegExp(/^\d*\.?\d{0,2}$/);
		if (! reg.test(document.form1.sccprice.value))
		{
			alert("请正确输入市场价格");
			document.form1.sccprice.focus();
			return false;
		}
		if (Number(document.form1.sccprice.value) < 0.01) {
			alert("市场价格最小是0.01.");
			document.form1.sccprice.focus();
			return false;
		}
		
		
		if(document.form1.fans.value==""){
           document.form1.fans.focus();
           alert("粉丝数量不能空!");
           return false;
		}
		
	}
	
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