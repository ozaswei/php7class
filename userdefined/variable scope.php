<?php
function x(){
    $a=10;
    return $a;
}
$a=x();
echo $a;
echo'<hr>';
$b=100;
function y(){
    global $b; //takes the global value of b and if changed the global value also changes and no need return to change the value of b
    echo $b;
}
y();
echo'<hr>';