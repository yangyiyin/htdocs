<?php
include ("../include/config.php");
include ("checkuser.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台管理</title>
<link rel="stylesheet" href="skin/css/base.css" type="text/css" />
<script language="javascript" type="text/javascript" src="../images/jquery.min.js"></script>
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
<style type="text/css">
#button { width: 130px; height: 25px; border: 0; background:#2AABE4; color:#FFFFFF; }
#button:hover {width: 130px; height: 25px; border: 0; background:#34CAF4; cursor:hand;}
</style>
</head>
<body>
<?php
$ID=$_REQUEST["ID"];
$titleID=$_REQUEST["titleID"];
$class_id=$_REQUEST["class_id"];
$sqlN="select * from ".$titleID."_info where ID=".$ID."";
//$resultN=mysql_db_query($dbname,$sqlN);
mysql_select_db($dbname);
$resultN=mysql_query($sqlN);
$rsN=mysql_fetch_array($resultN)
?>
<form id="form1" name="form1" method="post" action="savecpbiginfo.php?action=edit&ID=<?php echo $ID;?>&titleID=<?php echo $titleID;?>" onSubmit="return CheckForm();">
  <table width="98%" align="center" border="0" cellpadding="4" cellspacing="1" bgcolor="#e2e2e2" style="margin-bottom:8px">
    <tr bgcolor="#EEF4EA">
      <td colspan="2" align="center" background="skin/images/frame/wbg.gif" class='title'><span class="sitemu"><strong>修改信息内容</strong></span></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="right">信息类别：</td>
      <td><select name="class_id" size="1" id="class_id">
          <?php
			$sql="select * from ".$titleID."_class";
            //$result=mysql_db_query($dbname,$sql);
			mysql_select_db($dbname);
			$result=mysql_query($sql);
			while($rs=mysql_fetch_array($result))
			{
			?>
        <option value="<?php echo $rs["ID"];?>" <?php if($rs["ID"]==$class_id) {echo "selected";}?>><?php echo $rs["BigClass"];?></option>
          <?php
			}
		  ?>
      </select></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td width="17%" align="right">信息标题：</td>
      <td width="83%"><input name="title" type="text" id="title" value="<?php echo $rsN["title"];?>" size="60" /></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="right">来源： </td>
      <td><label>
        <input name="entitle" type="text" id="entitle" value="<?php echo $rsN["entitle"];?>" />
      </label></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="right">缩略图：</td>
      <td><input name="propic" type="text" class="webInput" id="propic3" value="<?php echo $rsN["propic"];?>" size="60" />
          <input type="button" name="Submit4" value="上传图片" onclick="window.open('upfile_indexpic.php?setform=form1&amp;setpic=propic&amp;setress=propic','','status=no,scrollbars=no,top=20,left=110,width=420,height=165')" /></td>
    </tr>
    <!--tr bgcolor="#FFFFFF">
      <td align="right">摘要： </td>
      <td><label>
		<textarea id="encontent" name="encontent"  rows="5" cols="90" ><?=$rsN["encontent"];?></textarea>
      </label></td>
    </tr-->
    <tr bgcolor="#FFFFFF">
      <td align="right">内容：</td>
      <td>
	  <script id="editor" name="content" type="text/plain" style="width:85%;height:330px;"></script>
<div  id='editora' style="display:none;"><?php echo htmlspecialchars($rsN["content"]);?></div>
</td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td align="right">推荐：</td>
      <td height="35">
      <?php 
	  if($rsN["tj"]<>1)
	  {
	  echo "<input name='tj' type='checkbox' id='tj' value='1' />";
	  }
	  else
	  {
	  echo "<input name='tj' type='checkbox' id='tj' value='1' checked='checked' />";
	  }
	  ?>
      是</td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td>&nbsp;</td>
      <td height="35"><span style="PADDING-LEFT: 10px">
        <input style="width:75px" type="submit" name="Submit" id="button" value=" 确认提交 " />
&nbsp;
<input type="reset" style="width:75px" name="Submit2" id="button" value=" 重新添写 " />
      </span></td>
    </tr>
  </table>
</form>
<?php
include ("footx.php");
?>
</body>
</html>
<script language="javascript" src="comm_js/comm.js"></script>
<script language="javascript">
	function CheckForm()
	{
		if(document.form1.title.value==""){
           document.form1.title.focus();
           alert("新闻标题（中文）不能空!");
           return false;
		}
		/*
		var reg	= new RegExp(/^[^*$#\\~@!&%￥<>=|{}+-\/]+$/);
		if (! reg.test(document.form1.title.value))
		{
			alert("不能输入特殊字符！");
			document.form1.title.focus();
			return false;
		}
		var reg	= new RegExp(/^[^*$#\\~@!&%￥<>=|{}+-\/]+$/);
		if (! reg.test(document.form1.entitle.value))
		{
			alert("不能输入特殊字符！");
			document.form1.entitle.focus();
			return false;
		}
		*/
		
		if(document.form1.entitle.value==""){
           document.form1.entitle.focus();
           alert("新闻标题（英文）不能空!");
           return false;
		}
		
		if(document.form1.nb.value==""){
           document.form1.nb.focus();
           alert("浏览次数不能空!");
           return false;
		}
	}
</script>