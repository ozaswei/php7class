<?php
/*(1)*/
$a=1;
while($a<=50) {
    if ($a % 2 == 0) {
        echo "$a : even<br>";
    } else {
        echo "$a : odd<br>";
    }
    $a++;
}
echo'<hr>';
/*(2)using while loop*/
$b=1;
$c=5;
while($b<=5){
    while($c>=1){
        echo "*";
        $c--;
    }
echo '<br>';
    $c=5;
    $c-=$b;
    $b++;
}
echo '<hr>';
/*(3)using for loop*/
for($d=1;$d<=5;$d++){
    for($e=$d;$e>=1;$e--){
        echo '*';
    }
    echo '<br>';
}
echo '<hr>';
/*(4) print the3 value of array*/
$f=[1,"b",3890,"jakiro","4.5 mmr","bzen is noob",3.4,5000,"state of decay2 is comming soon"];
for($g=0;$g<count($f);$g++){
    echo "array $g has :: $f[$g]";
    echo '<br>';
}

