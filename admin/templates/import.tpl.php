<?php
defined('IN_BKUP') or exit('Access Denied');
?>
<link rel="stylesheet" href="skin/css/base.css" type="text/css" />
<table width="98%" border="0" align="center" cellpadding="4" cellspacing="1" bgcolor="#e2e2e2">
  <tr>
    <td width="748" height="28" align="center" background="skin/images/frame/wbg.gif" class='title' style="padding-left:80px;">&nbsp;&nbsp;�ѱ��ݵ�SQL�ļ�</td>
  </tr>
  <tr>
    <td height="49" bgcolor="#FFFFFF"><form id="myform" name="myform" method="post" action="">
      <table width="100%" height="49" border="0" cellpadding="0" cellspacing="1">
        <tr>
          <td height="47" valign="top" bgcolor="#FFFFFF"><table class="tableBorder" width="100%" border="0" align="center" cellpadding="1" cellspacing="1" bgcolor="#FFFFFF">
            <tr align="center" bgcolor="#F8F8F8" >
              <td width="8%" height="24" bgcolor="#F2F2F2"><span class="tablerowhighlight">ѡ��</span></td>
              <td width="11%" bgcolor="#F2F2F2"><span class="tablerowhighlight">ID</span></td>
              <td width="29%" bgcolor="#F2F2F2"><span class="tablerowhighlight">�ļ���</span></td>
              <td width="11%" bgcolor="#F2F2F2"><span class="tablerowhighlight">�ļ���С</span></td>
              <td align="center" bgcolor="#F2F2F2"><span class="tablerowhighlight">����ʱ��</span></td>
              <td width="24%" align="center" bgcolor="#F2F2F2">����</td>
            </tr>
<?php 
if(is_array($infos)){
	foreach($infos as $id => $info){
$id++;
?>
            <tr align="center" >
              <td height="24" bgcolor="#F2F2F2"><span class="tablerow">
                <input name="filenames[]" type="checkbox" id="filenames[]" value="<?=$info['filename']?>" />
              </span></td>
              <td height="24" bgcolor="#F2F2F2"><?=$id?></td>
              <td height="24" bgcolor="#F2F2F2"><a href="./data/<?=$info['filename']?>">
                <?=$info['filename']?>
              </a></td>
              <td height="24" bgcolor="#F2F2F2"><span class="px10">
                <?=$info['filesize']?>
M</span></td>
              <td width="17%" align="center" bgcolor="#F2F2F2"><span class="px10">
                <?=$info['maketime']?>
              </span></td>
              <td align="center" bgcolor="#F2F2F2"><a href="?action=<?=$action?>&amp;pre=<?=$info['pre']?>&amp;dosubmit=1">����</a> | <a href="?action=delete&amp;filenames=<?=$info['filename']?>">ɾ��</a> | <a href="?action=down&amp;filename=<?=$info['filename']?>">����</a></td>
            </tr>
            <?php 
	}
}
?>
            
            <tr align="center" >
              <td height="30" align="center" bgcolor="#F2F2F2"><span class="tablerow">
                <input name='chkall' type='checkbox' id='chkall' onclick='checkall(this.form)' value='check'>
              </span></td>
              <td height="30" colspan="5" align="left" bgcolor="#F2F2F2" style="padding-left:10px;"><span class="tablerow">ȫѡ/��ѡ
                  <input type="submit" name="submit2" value=" ɾ��ѡ�еı��� " onclick="document.myform.action='?action=delete'" />
              </span></td>
              </tr>
          </table></td>
        </tr>
      </table>
    </form></td>
  </tr>
</table>
<br />
<table width="98%" border="0" align="center" cellpadding="4" cellspacing="1" bgcolor="#e2e2e2">
  <tr>
    <td width="100%" height="28" align="center" background="skin/images/frame/wbg.gif" class='title'>&nbsp;�ϴ����ݿⱸ���ļ�</td>
  </tr>
  <tr>
    <td height="49" bgcolor="#FFFFFF"><form id="upload" name="upload" method="post" enctype="multipart/form-data" action="?action=uploadsql">
      <table class="tableBorder" width="100%" border="0" align="center" cellpadding="4" cellspacing="1" bgcolor="#FFFFFF">
        <tr align="center" bgcolor="#F8F8F8" >
          <td width="25%" bgcolor="#FFFFFF"><span class="tablerow">�ϴ�SQL�ļ���</span></td>
          <td width="25%" bgcolor="#FFFFFF"><span class="tablerow">
            <input name="uploadfile" type="file" size="25" />
            <input type="hidden" name="max_file_size2" value="4096000">
          </span></td>
          <td width="25%" bgcolor="#FFFFFF"><span class="tablerow">
            <input name="dosubmit" type="submit" id="dosubmit" value=" �ϴ� " />
          </span></td>
        </tr>
      </table>
    </form></td>
  </tr>
</table>
</body>
</html>
<script type="text/javascript">
function checkall(form) {
	for(var i = 0;i < form.elements.length; i++) {
		var e = form.elements[i];
		if (e.name != 'chkall' && e.disabled != true) {
			e.checked = form.chkall.checked;
		}
	}
}
</script>
