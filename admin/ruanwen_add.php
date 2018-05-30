<?php
//new COM("word.application") or die("Unable to instanciate Word");
include ("checkuser.php");
include ("../include/config.php");
include("../include/function.php");

$AdminUser=$_COOKIE["AdminUser"];
$sql="select * from admin where AdminUser='".$AdminUser."'";
$result=mysql_db_query($dbname,$sql);
$rs=mysql_fetch_array($result);
if($rs!=NULL)
{
    $yue=$rs["yue"];
}

$ID=@$_REQUEST["ID"];
if($ID<>""){
    $sqlN="select * from ruanwen_info where ID=".$ID."";
    $resultN=mysql_db_query($dbname,$sqlN);
    $rsN=mysql_fetch_array($resultN);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=7" />
    <title>后台管理中心</title>
    <link href="/css/buttons.css" type="text/css" rel="stylesheet"/>
    <link href="../images/reset.css" rel="stylesheet" type="text/css" />
    <link href="../images/zh-cn-system.css" rel="stylesheet" type="text/css" />
    <script language="javascript" type="text/javascript" src="../images/jquery-1.8.3.js"></script>
    <!--百度webuploader-->
    <link rel="stylesheet" type="text/css" href="./assert/webuploader/webuploader.css">
    <script type="text/javascript" src="./assert/webuploader/webuploader.min.js"></script>


    <script language="javascript" type="text/javascript" src="../images/styleswitch.js"></script>
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
        html{_overflow-y:scroll}.background{display:block;width:100%;height:100%;opacity:0.4;filter:alpha(opacity=40);background:while;position:absolute;top:0;left:0;z-index:2000;}.progressBar{border:solid 2px #86A5AD;background:white url(progressBar_m.gif) no-repeat 10px 10px;}.progressBar{display:block;width:148px;height:28px;position:fixed;top:50%;left:50%;margin-left:-74px;margin-top:-14px;padding:10px 10px 10px 50px;text-align:left;line-height:27px;font-weight:bold;position:absolute;z-index:2001;}.nextpage{background:#3E5F9B;color:#fff;bottom:0;margin:0px;left:0px;position:fixed;line-height:25px;width:100%;z-index:999;padding-left:10px;_bottom:auto;_width:100%;_position:absolute;font-size:14;padding-left:0px;_top:expression(eval(document.documentElement.scrollTop+document.documentElement.clientHeight-this.offsetHeight-(parseInt(this.currentStyle.marginTop,20)||0)-(parseInt(this.currentStyle.marginBottom,20)||0)));}
        .webuploader-pick{
            width:430px!important;
            position: relative;
            overflow: hidden;
            margin-right: 4px;
            display:inline-block;
            *display:inline;
            padding:4px 10px 4px;
            font-size:14px;
            line-height:18px!important;
            *line-height:20px;
            color:#fff;
            text-align:center;
            vertical-align:middle;
            /*background-color:#5bb75b!important;*/
            border:none!important;
            border-color:#e6e6e6 #e6e6e6 #bfbfbf;
            border-bottom-color:#b3b3b3;
            -webkit-border-radius:4px;
            -moz-border-radius:4px;
            border-radius:4px;
            cursor: pointer;

        }
        .upbtn{
            background: none!important;
        }

    </style>

</head>
<body topmargin="0" bottommargin="0" leftmargin="0" rightmargin="0">
<div id="main_frameid" class="pad-10 display" style="_margin-right:-12px;_width:98.9%;">
    <div class="col-2  col-auto" >
        <h6>软文发布
            <!-- <span  style="padding-left:15px;cursor:pointer" onclick="$('#form1').slideToggle();">切换发布框</span> <span id='meiturn' onclick='meiturn()' style="padding-left:15px;cursor:pointer">切换查找框</span>-->
        </h6>
        <div class="content">
            <form id="form1" name="form1" method="post" action="saveruanwen.php?action=add" onsubmit="return check()" style="display:" >
                <table width="100%" cellpadding="0" cellspacing="1" bgcolor="#e2e2e2" id='step2' style="font-size:12px">
                    <tr>
                        <td width="12%" height="30" bgcolor="#FFFFFF"><div align="center">标    题</div></td>
                        <td width="88%" align="left" bgcolor="#FFFFFF" style="padding:10px;"><input name="biaoti" type="text" class="txt" id="biaoti" lang='require'  size="100" xml:lang="require" value="<?php if($ID<>""){ echo $rsN["title"];}?>"/>
                            <input type="hidden" name="dingdan" id="dingdan"  value=""/>
                            （标题字数尽量控制在18个汉字内！） </td>
                    </tr>
                    <tr>
                        <td width="12%" height="30" bgcolor="#FFFFFF"><div align="center">上    传</div></td>
                        <td width="88%" align="left" bgcolor="#FFFFFF" style="padding:10px;">


<!--                            <div onclick="return $EDITORUI['edui62']._onClick(event, this);" class="upbtn" style="padding-top:7px;float:left;background:#149BED;">-->
                            <div class="upbtn upload_doc" id="filePicker" style="padding-top:7px;float:left;background:#149BED;">
                                <span style="line-height:24px;">上传WORD文档，支持DOCX和DOC格式</span>

                            </div>


                        </td>
                    </tr>

                    <tr>
                        <td height="30" bgcolor="#FFFFFF"><div align="center">内    容</div></td>
                        <td align="left" bgcolor="#FFFFFF" style="padding:10px;">
                            <script id="editor" name="neirong" type="text/plain" style="width:85%;height:330px;"></script>
                            <div  id='editora' style="display:none;"><?php if($ID<>""){ echo htmlspecialchars($rsN["content"]);}?></div>


                            <input type="submit" name="button" id="buttonsave" value=" 提 交 "  style="width:60px; height:25px;display:none" /></td>
                    </tr>
                    <tr>
                        <td height="30" bgcolor="#FFFFFF"><div align="center">金    额</div></td>
                        <td align="left" bgcolor="#FFFFFF" style="padding-left:10px;"><input name="totalmoney" type="hidden" id="totalmoney" style="border:0px;" value="0" readonly="readonly"/>(余额：<font color="#FF0000"><b><?php echo $yue;?></b></font>元 )
                            <font color="blue">第一步：填写标题、内容；点击下一步；第二步：选择要提交的网站，发布成功，等待回链。</font>
                        </td>
                    </tr>
                </table>
                <div align="center"><!--input name="totalmoney" type="hidden" id="totalmoney" style="border:0px;" value="0" readonly="readonly"/--> <input type="hidden" id='yixuanhidden' name='yixuanhidden'/><input type="button" value="下一步 选择媒体" onclick="nextpage()" style="width:130px; height:30px;text-align:center;  margin-top:10px; "/><!--input type="button" value="上一步 选择媒体" onclick="perpage()" style="width:130px;height:30px; text-align:center;margin-top:3px;"/><input type="button" value=" 提 交 " onclick="$('#buttonsave').click()"  style="width:80px;height:30px; text-align:center;margin-top:3px;"/--></div>
            </form>
            <br />
            <div id="flselect" style="display:none">


                <TABLE style="BORDER-BOTTOM: #ccc 1px solid; BORDER-LEFT: #ccc 1px solid; PADDING-BOTTOM: 5px; BORDER-TOP: #ccc 1px solid; BORDER-RIGHT: #ccc 1px solid" border=0 cellPadding=0 width="100%">
                    <TBODY>



                    <tr>
                        <td style="padding:10px;margin:5px;">
                            <span onclick=mt_search3() class="button button-primary button-rounded button-small">行业分类</span>
                            <?php
                            $sqls="select * from media_class where BigID=46 order by paixu desc";
                            $results=mysql_db_query($dbname,$sqls);
                            while($rss=mysql_fetch_array($results))
                            {
                                ?>
                                <a onclick=mt_search1(<?php echo $rss["ID"];?>) class="button button-pill button-tiny"><?php echo $rss["SmallClass"];?></a>
                            <?php } ?>
                        </td>
                    </tr>


                    <tr>
                        <td style="padding:10px;margin:5px;">
                            <span onclick=mt_search3() class="button button-primary button-rounded button-small">客户端自媒体</span>
                            <?php
                            $sqls="select * from menhu_class where paixu<51 order by paixu asc";
                            $results=mysql_db_query($dbname,$sqls);
                            while($rss=mysql_fetch_array($results))
                            {
                                ?>
                                <a onclick="mt_search7('<?php echo $rss["BigClass"];?>')" class="button button-pill button-tiny"><?php echo $rss["BigClass"];?></a>
                            <?php } ?>
                        </td>
                    </tr>


                    <tr>
                        <td style="padding:10px;margin:5px;">
                            <span onclick=mt_search3() class="button button-primary button-rounded button-small">综合门户网站</span>
                            <?php
                            $sqls="select * from menhu_class where paixu>50 order by paixu asc";
                            $results=mysql_db_query($dbname,$sqls);
                            while($rss=mysql_fetch_array($results))
                            {
                                ?>
                                <a onclick="mt_search7('<?php echo $rss["BigClass"];?>')" class="button button-pill button-tiny"><?php echo $rss["BigClass"];?></a>
                            <?php } ?>

                            <a href="rwgzy.php" class="button button-primary button-rounded button-small" target="_blank">导出媒体资源表</a>
                        </td>
                    </tr>




                    <tr>
                        <td style="padding:10px;margin:5px;">
                            <span onclick=mt_search3() class="button button-primary button-rounded button-small">覆盖地区</span>
                            <?php
                            $sqls="select * from diqu_class order by paixu asc";
                            $results=mysql_db_query($dbname,$sqls);
                            while($rss=mysql_fetch_array($results))
                            {
                                ?>
                                <a onclick="mt_search6('<?php echo $rss["BigClass"];?>')" class="button button-pill button-tiny"><?php echo $rss["BigClass"];?></a>
                            <?php } ?>
                        </td>
                    </tr>



                    <tr>
                        <td style="padding:10px;margin:5px;">
                            <span onclick=mt_search3() class="button button-primary button-rounded button-small">链接情况</span>

                            <a onclick="mt_search5('可带网址')" class="button button-pill button-tiny">可带网址</a>
                            <a onclick="mt_search5('不能带网址')" class="button button-pill button-tiny">不能带网址</a>

                        </td>
                    </tr>



                    </TBODY></TABLE>


                <form name="form2" id='searchtrun' style="margin-bottom:20px;">
                    <br />
                    <table width="100%" cellpadding="0" cellspacing="0" bgcolor="#e2e2e2" >
                        <tr>
                            <td width="6%" height="28" bgcolor="#FFFFFF" style="border-top:1px solid #ccc; border-left:1px solid #ccc; border-right:1px solid #ccc;"><div align="center">媒体查找</div></td>
                            <td width="94%" align="center" valign="middle" bgcolor="#FFFFFF"><table border="0" cellpadding="5" cellspacing="2">
                                    <tr>
                                        <td><div style='margin-right:80px;'>共有<?php echo $Num;?>家媒体资源</div></td>
                                        <td><div align="center">媒体名称</div></td>
                                        <td><input name="meiti_name" type="text" class="txt" id="meiti_name" size="13" onkeydown="if(event.keyCode == 13)event.returnValue = false;"/></td>

                                        <td><input type="button" name="button2" id="button2" value="查找" onclick="mt_search();" style="border:1px solid #ccc; background:#e2e2e2;color:#000; width:80px; cursor:pointer;"/></td>
                                        <td></td>
                                    </tr>
                                </table></td>
                        </tr>
                        <tr>
                            <td height="23" colspan="2" bgcolor="#FFFFFF"><div id="s_meti"></div></td>
                        </tr>
                    </table>
                </form>
                <div id='yixuan' class="nextpage"> &nbsp;已选媒体: <span id="yixuantr"></span>&nbsp;&nbsp;总额：<b><span id='totalmoney2'>0</span></b>元（余额：<b><span id="yue"><?php echo $yue;?></span></b>元）
                    <!--<input type="button" value=" 清 空 " onclick="clearall()" style="width:80px;height:30px; text-align:center;margin-top:3px;"/>-->
                    <!--input type="button" value="下一步 编辑内容" onclick="nextpage()" style="width:130px; height:30px;text-align:center;  margin-top:10px; "/-->
                    <input type="button" value="上一步 编辑内容" onclick="perpage()" style="width:130px;height:30px; text-align:center;margin-top:3px;"/>
                    <input type="button" value=" 提 交 " onclick="$('#buttonsave').click()"  style="width:80px;height:30px; text-align:center;margin-top:3px;"/>
                </div>
            </div>
        </div>
    </div>
    <div class="bk20 hr"></div>
</div>
<div id="background" class="background" style="display: none; "></div>
<div id="progressBar" class="progressBar" style="display: none; ">数据加载中，请稍等...</div>

<script type="text/javascript">
    $(document).ready(function(){
        var ajaxbg = $("#background,#progressBar");
        ajaxbg.hide();
        $(document).ajaxStart(function () {
            ajaxbg.show();
        }).ajaxStop(function () {
            ajaxbg.hide();
        });
        mt_search();
    })

    function setprice(val){
        $("#jiage").val(val*15);
    }

    function mt_search(){
        $.get("search.php?a=mt_search",{
                "mc":$("#meiti_name").val(),"cid":$("#class_id").val(),"skey":$("#skey").val(),"mh":$("#zhmh").val(),"diqu":$("#diqu").val(),"lurl":$("#linkurl").val(),"xwy":$("#xinwenyuan").val()
            }
            ,function(data){
                $("#s_meti").html(data);
            });
    }

    function mt_search1(id){
        $.get("search.php?a=mt_search",{
                "fl":id
            }
            ,function(data){
                $("#s_meti").html(data);
            });
    }

    function mt_search2(id){
        $.get("search.php?a=mt_search",{
                "jg":id
            }
            ,function(data){
                $("#s_meti").html(data);
            });
    }

    function mt_search3(id){
        $.get("search.php?a=mt_searchall",{
                "jg":"all"
            }
            ,function(data){
                $("#s_meti").html(data);
            });
    }

    function mt_search4(id){
        $.get("search.php?a=mt_searchall",{
                "xw":id
            }
            ,function(data){
                $("#s_meti").html(data);
            });
    }

    function mt_search5(id){
        $.get("search.php?a=mt_searchall",{
                "lj":id
            }
            ,function(data){
                $("#s_meti").html(data);
            });
    }

    function mt_search6(id){
        $.get("search.php?a=mt_searchall",{
                "dq":id
            }
            ,function(data){
                $("#s_meti").html(data);
            });
    }

    function mt_search7(id){
        $.get("search.php?a=mt_searchall",{
                "zhmh":id
            }
            ,function(data){
                $("#s_meti").html(data);
            });
    }

    function meiturn(){
        $("#searchtrun").slideToggle();
    }

    function sel(id,tr,jg,yue){
        var ye=yue;
        var s7=jg;
        var s2=$("#xz_mc_"+id).val();
        //alert(yue);
        //alert(s7);

        //如何取消选择，运行yixuansc，减掉选择金额
        if($("#xz_"+id).attr("checked")==false) {
            yixuancl(id,s2,s7);
            return false;
        }

        if(ye >= ($("#totalmoney").val()*1 + s7*1)){
            var yx=$("#yixuanhidden").val();
            $("#yixuan").show();
            if( yx.indexOf(tr)==-1 ) {
                $("#yixuanhidden").val(id+":"+s2+","+yx);
                $("#totalmoney").val($("#totalmoney").val()*1 + s7*1)
                $("#totalmoney2").html(	$("#totalmoney2").html()*1 + s7*1)
                $("#yixuantr").append("<span id='yixuantr2_"+id+"'>&nbsp;"+s2+s7+"元<a href='javascript:;'onclick=\"yixuancl('"+id+"','"+s2+"',"+s7+")\" style='color:#FF0'>[X]</a></span>");
            }
        }
        else{
            $("#biaoti")[0].focus();
            alert('余额不足，请先充值');
            $("#xz_"+id).attr("checked",false);
            return false;
        }
    }

    function yixuancl(tr,mc,je){
        var yx=$("#yixuanhidden").val();
        //yx=yx.replace("$"+tr+"$,","");
        //yx=yx.replace(tr+",","");

        yx=yx.replace(tr+":"+mc+",","");
        $("#yixuanhidden").val(yx);
        $("#xz_"+tr).attr("checked",false);
        $("#yixuantr2_"+tr).remove();
        $("#totalmoney").val( $("#totalmoney").val()*1 - je*1 )
        $("#totalmoney2").html(	$("#totalmoney2").html()*1 - je*1 )
    }

    function yixuan(s1,s2,s3,s4,s5,s6,tr,id){
        var ye=0.00;
        var s7=s3;

        if($("#xz_"+id).attr("checked")==false) {
            yixuansc(id,s7);
            return false;
        }
        if(ye >= ($("#totalmoney").val()*1 + s7*1)){
            var yx=$("#yixuanhidden").val();
            $("#yixuan").show();
            if( yx.indexOf(tr)==-1 ) {
                $("#yixuanhidden").val(tr+","+yx);
                $("#totalmoney").val($("#totalmoney").val()*1 + s7*1)
                $("#totalmoney2").html(	$("#totalmoney2").html()*1 + s7*1)
                $("#yixuantr").append("<span id='yixuantr2_"+id+"'>"+s2+s7+"元<a href='javascript:;' onclick=\"yixuansc('"+id+"',"+s7+")\" style='color:#FF0'>[X]</a></span>&nbsp;&nbsp;");
            }
        }
        else{
            $("#biaoti")[0].focus();
            alert('余额不足，请先充值');
            $("#xz_"+id).attr("checked",false);
            return false;
        }
    }

    function yixuansc(tr,je){
        var yx=$("#yixuanhidden").val();
        //yx=yx.replace("$"+tr+"$,","");
        yx=yx.replace(tr+",","");
        $("#yixuanhidden").val(yx);
        $("#xz_"+tr).attr("checked",false);
        $("#yixuantr2_"+tr).remove();
        $("#totalmoney").val( $("#totalmoney").val()*1 - je*1 )
        $("#totalmoney2").html(	$("#totalmoney2").html()*1 - je*1 )
    }

    function check(){
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
        if(flg==false || flg1==false){
            alert('红色提示为关键信息,请填写完整,不能空!');
            return false;
        }

        var s7=$("#yixuanhidden").val();
        if(s7.replace("$","").replace(",","").replace(" ","")==""){
            alert('未选择任何频道');
            return false;
        }
        return true;
    }

    /*
     function perpage(){
     $("#flselect").show();
     $("#form1").hide();
     }

     function nextpage(){
     $("#flselect").hide();
     $("#form1").show();
     }
     */

    function nextpage(){
        if($("#biaoti").val()!=""){
            $("#flselect").show();
            $("#form1").hide();
        }
        else{
            alert('请先填写标题与内容!');
        }
    }

    function perpage(){
        $("#flselect").hide();
        $("#form1").show();
    }


    function clearall() {
        var checkboxs = $(":checkbox");
        for(var i=0;i<checkboxs.length;i++) {
            if(checkboxs[i].name=="xz") {
                if(checkboxs[i].checked) {
                    checkboxs[i].click();
                    checkboxs[i].checked = false;
                }
            }
        }
        $("#yixuantr").html("");
    }

//    $('.upload_doc').click(function(){
//        $('#editora').html('<?php //echo htmlspecialchars("<div>123</div>");?>//');
//    })

    var uploader = WebUploader.create({

        // 选完文件后，是否自动上传。
        auto: true,

        // swf文件路径
        swf: './assert/webuploader/Uploader.swf',

        // 文件接收服务端。
        server: "../upload_doc/upload_doc.php",

        // 选择文件的按钮。可选。
        // 内部根据当前运行是创建，可能是input元素，也可能是flash.
        pick: {id : '#filePicker',
            //只能选择一个文件上传
            multiple: false},
        multiple: false,
        fileVal: 'download',
        duplicate: true,
        // 只允许选择图片文件。
        accept: {
            title: 'Files',
            extensions: 'doc,docx',
            mimeTypes: 'application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document'
        }
    });
    uploader.on( 'uploadSuccess', function(file, response) {
        var str = $('.webuploader-pick').html();
        $('.webuploader-pick').html('解析中...');
        var inter = setInterval(function () {
            //轮询
            $.get('../upload_doc/get_html.php?name='+response._raw, {}, function(res){
                console.log(res);
                if (res == 'success') {
                    clearInterval(inter);
                    $('.webuploader-pick').html(str);
                    //把内容插入进去

                }
            })
        }, 1000);

    });

</script>

<script language="javascript">
    var rows = document.getElementsByTagName('tr');//获取所有表格行
    for (var i=0;i<rows.length;i++){//然后对其遍历
        rows[i].onmouseover = function(){
            this.className += 'highlight';//鼠标经过时，显示样式altrow,注意，js中的样式是className而不是class，这个是新手容易犯的错误；
        }
        rows[i].onmouseout = function(){
            this.className = this.className.replace('highlight','');//鼠标一走的时候，把样式也去掉
        }
    }

</script>
</body>
</html>