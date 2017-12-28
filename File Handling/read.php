<?php
//$handle = fopen('note.txt','r');
//if($handle) {
//    echo 'yes'.'<br>';
//    $size=filesize('note.txt'); // to get the file size
//    $content= fread($handle,$size);
//    echo $content.'<br>';
//    echo " the files size is :: $size".'<br>';
//    $line=fgets($handle); // to read a line and put the cursor at the next line after that
//
//    fclose($handle);
//}
$google=file_get_contents('https://www.google.com');
echo $google;