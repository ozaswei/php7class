<?php
$a=10;
$b=$a;// b and a access the same memory location
$b=100;
echo $a;

$arr=[2,5,1,3];
sort($arr);
echo '<pre';
print_r($arr);
echo'<hr>';
$value=100;
/**
 * this function is for demo purpose of passed by reference and it is a good practice
 * @param int $x
 * @return mixed
 */
function check(&$x){ //& denotes passed by refernce and so $value and $x points at the same memory
    $x++;
    return $x;
}
check($value);
echo $value;