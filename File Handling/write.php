<?php
//$handle = fopen('note.txt','w');
//if($handle) {
//    $bytes = fwrite($handle, "hello");
//    echo "you wrote $bytes";
//    fclose($handle);
//}
$handle = fopen('note.txt','a');
if($handle) {
    $bytes = fwrite($handle, "hello\n");
    echo "you wrote $bytes";
    fclose($handle);
}