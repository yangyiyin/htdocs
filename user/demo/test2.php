<?php
function word2html($wordname,$htmlname)
{
$word = new COM("word.application") or die("Unable to instanciate Word");
$word->Visible = 1;
$word->Documents->Open($wordname);
$word->Documents[1]->SaveAs($htmlname,8);
$word->Quit();
$word = null;
unset($word);
}
word2html('1.docx','1.html');
?>