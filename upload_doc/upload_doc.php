<?php
/**
 * Created by PhpStorm.
 * User: yyy
 * Date: 18/5/30
 * Time: 下午9:50
 */

function convert_doc_to_html($source) {
    $dir = __DIR__ . '/files';
    chmod($dir, 0774);
    $cmd = 'd:\libreoffice\program\soffice.exe --convert-to html -- '.$dir.' '.$source;
    shell_exec($cmd);

}

if($file = $_FILES['download']) {
    $str=stristr($file['name'],'.');

    $doc_name = time();
    $doc_path_name = __DIR__ . '/files/'.$doc_name.$str;
    if(move_uploaded_file($file['tmp_name'], $doc_path_name)){   // 执行文件上传操作
        convert_doc_to_html($doc_path_name);
        echo $doc_name . '.html';
    }
}