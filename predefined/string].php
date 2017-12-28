<?php
$a='bzen is noob';
echo strtoupper($a).'<br>';
echo $a[0].'<br>';
echo ucwords($a).'<br>';
echo ucfirst($a).'<br>';
echo strlen('  bzen  ').'<br>'; //prints the no of strings along with the spaces
echo strlen(trim('   bzen    ')).'<br>';//doesnt count the front and back space when used trim
echo str_replace('p','o','apple').'<br>';
$x='apple'; // to remove repeated letter of the word
$newarray=[];
for($i=0;$i<strlen($x);$i++){
    if(!in_array($x[$i],$newarray)){
        echo $x[$i];
    }
    $newarray[]=$x[$i];
}
 echo'<br>';
