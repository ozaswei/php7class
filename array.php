<?php
/*index array*/
$a=[1,"bzen","noob",45]; /* array declare*/
echo gettype($a);
echo '<br>';
echo $a[3];
echo '<br>';
$a[10]='hello';
$a[]='unmarried';
echo "$a[1] is no. $a[0] $a[2] and his mmr is $a[3]";
echo "<pre>";
echo print_r($a);
echo count($a);
echo'<br>';
echo'<br>';
/*multi dimenstional array*/
$info=[['ram','ram@gmail.com','lalitpur'],
        ['bzen','bzen@gmail.com','kathmandu'],
        ['hari','hari@gmail.com','KEC']
];
echo $info[0][0].' and '.$info[1][0].' are friends';
echo'<br>'.'<br';
//associative array
$b=['name'=>'ram', //name is key and ram is value
    'email'=>'ram#gmail.com',
    'add'=>'kalimati'];
echo "<pre>";
print_r($b);
echo $b['add'];
echo'<br>'.'<br>';
foreach($b as $key => $value){
    echo $key.'<br>';
}

