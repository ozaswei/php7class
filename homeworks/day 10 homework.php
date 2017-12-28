<?php
$a=[['ram','ram@gmail.com','lalitpur','bzen is noob'],
    ['bzen','bzen@gmail.com','kathmandu'],
    ['hari','hari@gmail.com','KEC']];
for($i=0;$i<count($a);$i++){
    echo"for array($i):: ".'<br>';
    for($j=0;$j<count($a[$i]);$j++){
        echo $a[$i][$j].'<br>';
    }
    echo '<br>';
}
echo count($a);
echo '<hr>';
$b=[['name'=>'ram', //name is key and ram is value
    'email'=>'ram@gmail.com',
    'add'=>'kalimati'],
    ['name'=>'ram',
        'email'=>'ram@gmail.com',
        'add'=>'kalimati']];
foreach($b as $key => $value){
    foreach($value as $x =>$item)
    echo $item.'<br>';
}