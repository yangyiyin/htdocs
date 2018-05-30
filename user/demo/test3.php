<?php
	$word = new COM("word.application") or die("Can't start Word!");
    // 显示目前正在使用的Word的版本号
    //echo "Loading Word, v. {$word->Version}";
    // 把它的可见性设置为0（假），如果要使它在最前端打开，使用1（真）
    // to open the application in the forefront, use 1 (true)
    //$word->Visible = 0;
    
    //打?一个文档
    $word->Documents->OPen(dirname(__FILE__)."/1.docx");
    //读取文档内容
    $test= $word->ActiveDocument->content->Text;
    echo $test;
    echo "";
    //将文档中需要换的变量更换一下
    $test=str_replace("<{变量}>","这是变量",$test);
    echo $test;
    $word->Documents->Add();
    // 在新文档中添加文字
    $word->Selection->TypeText("$test");
    //把文档保存在目录中
    $word->Documents[1]->SaveAs("2.doc");
    // 关闭与COM组件之间的连接
    $word->Quit();
?>