<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
include ("../include/config.php");
include ("checkuser.php");
?>
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
</head>
<body>
<?php
$ID=$_REQUEST["ID"];
$titleID=$_REQUEST["titleID"];
$class_id=$_REQUEST["class_id"];
$sqlN="select * from ".$titleID."_info where ID=".$ID."";
$resultN=mysql_query($sqlN);
$rsN=mysql_fetch_array($resultN)
?>
<form id="form1" name="form1" method="post" action="savebiginfo.php?action=edit&ID=<?php echo $ID;?>&titleID=<?php echo $titleID;?>" onSubmit="return CheckForm();">
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
      <td width="17%" align="right">缩略图： </td>
      <td><label>
        <input name="images" type="text" id="images" value="<?php echo $rsN["images"];?>" size="60" />
      </label></td>
    </tr>
		<!------>
	 <tr bgcolor="#FFFFFF">
      <td width="17%" align="right">发布媒体： </td>
      <td><label>
        <input name="meiti" type="text" id="meiti" value="<?php echo $rsN["meiti"];?>"/>
      </label></td>
    </tr>
	 <tr bgcolor="#FFFFFF">
      <td width="17%" align="right">成功连接： </td>
      <td><label>
        <input name="url" type="text" id="url" value="<?php echo $rsN["url"];?>"/>
      </label></td>
    </tr>
	<!------>
	
	
	
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
        <input style="WIDTH: 73px; HEIGHT: 25px" type="submit" name="Submit" value="确认提交" />
&nbsp;
<input style="WIDTH: 73px; HEIGHT: 25px" type="reset" name="Submit2" value="重新添写" />
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
           alert("信息标题不能空!");
           return false;
		}
		var reg	= new RegExp(/^[^*$#\\~@!&%￥<>=|{}+-\/]+$/);
		if (! reg.test(document.form1.title.value))
		{
			alert("不能输入特殊字符！");
			document.form1.title.focus();
			return false;
		}
	}
</script>