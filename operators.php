<?php
$age="20";
echo 'your age is '.$age; /*concatenation*/
echo'<br>';
echo'<br>';
$a=20;
$b=10;
echo $a**$b; /* b is the power of a*/
echo'<br>';
echo'<br>';
$a=20;
$b=10;
var_dump($a==$b);
echo'<br>';
if($a>$b){
    echo 'yes a is greater';
}
else{
    echo 'no a isnt greater';
}
/*always use \"===\" for comparison*/
echo'<br>';
echo'<br>';
$s='bzen';
$s .= ' is';
$s .= ' noob';
echo $s;
echo'<br>';
echo'<br>';
/*logical operators --- and (&&)  OR (||)*/
$a=10;
$b=20;
$c=20;
if(($a==$b) || ($b==$c))
{
    echo 'ok';
}
else
    echo 'noob';
echo'<br>';
echo'<br>';

$a=10;
$b=20;
$c=20;
if(($a===$b) && ($a===$c))
{
    echo 'ok';
}
else
    echo 'noob';
echo'<br>';
echo'<br>';
/* ternary operators----short form of if and else-----(boolean)? true : false;*/
$a=10;
$b=20;
$c=20;
echo ($a===$b || $b===$c ) ? 'ok ': 'noob';
echo ($a===$b || $a===$c ) ? 'ok': 'noob';
echo'<br>';
echo'<br>';
/*if elseif*/
$a=10;
$b=20;
$c=30;
if(($a===$b) && ($a===$c))
{
    echo 'ok';
}
else if($a != $b && $b != $c){
    echo 'Bzen is noob';
}
else{
    echo 'noob';
}
echo'<br>';
echo'<br>';
/*switch*/
$a=10;
$b=20;
$c=30;
switch($a){
    case 10:
        echo '10';
        break;
    case 20:
        echo '20';
        break;
    default:
        echo 'invalod number';
}
