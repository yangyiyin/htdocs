<?php
defined('IN_BKUP') or exit('Access Denied');
?>
<link rel="stylesheet" href="skin/css/base.css" type="text/css" />
<table width="98%" border="0" align="center" cellpadding="4" cellspacing="1" bgcolor="#e2e2e2">
  <tr>
    <td width="748" height="28" align="center" background="skin/images/frame/wbg.gif" class='title'>&nbsp;&nbsp;<strong>�������ݿ�</strong></td>
  </tr>
  <tr>
    <td height="49" bgcolor="#FFFFFF"><form id="myform" name="myform" method="post" action="?action=<?=$action?>">
      <table width="100%" height="49" border="0" cellpadding="0" cellspacing="1">
        <tr>
          <td height="47" valign="top" bgcolor="#FFFFFF">
              <table class="tableBorder" width="100%" border="0" align="center" cellpadding="1" cellspacing="1" bgcolor="#FFFFFF">
                <tr align="center" bgcolor="#F8F8F8" >
                  <td width="16%" bgcolor="#F2F2F2"><span class="tablerowhighlight">
                    <input name='chkall' type='checkbox' id='chkall' onclick='checkall(this.form)' value='check' checked>
                  ȫѡ/��ѡ </span></td>
                  <td width="43%" bgcolor="#F2F2F2">���ݿ��</td>
                  <td align="center" bgcolor="#F2F2F2">��¼����</td>
                  <td width="23%" align="center" bgcolor="#F2F2F2">��С[��<span class="tablerowhighlight">
                    <?=$totalsize?>
                  </span>M]</td>
                </tr>
<?php 
if(is_array($bktables)){
	foreach($bktables as $k => $tablename){
?>		
                <tr align="center" >
                  <td height="24" bgcolor="#F2F2F2"><span class="tablerow">
                    <input type="checkbox" name="tables[]" value="<?=$tablename?>" checked="checked" />
                  </span></td>
                  <td height="24" bgcolor="#F2F2F2"><span class="tablerow">
                    <?=$tablename?>
                  </span></td>
                  <td width="18%" align="center" bgcolor="#F2F2F2"><span class="tablerow">
                    <?=$bkresults[$k]?>
                  </span></td>
                  <td align="center" bgcolor="#F2F2F2"><span class="tablerow">
                    <?=$size[$k]?>
                  </span>M</td>
                </tr>
<?php 
	}
}
?>				
                <tr align="center" >
                  <td height="30" colspan="4" align="center" bgcolor="#F2F2F2"><span class="tablerow">
                    <input type=hidden name="sizelimit" value="20480" size=5>
                    <input type="submit" name="dosubmit" value=" ��ʼ�������� ">
                  </span></td>
                </tr>
            </table>
			</td>
        </tr>
      </table>
        </form>
    </td>    
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
