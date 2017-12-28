<?php
/*1)find the greatest number*/
$a=80;
$b=160;
$c=230;
if($a>$b){
    if($a>$c)
        echo "a is greater and its value is $a";
    else{
        echo "c is greater and its value is $c";
    }
}
else{
    if($b>$c){
        echo "b is greater and its value is $b";
    }
    else{
        echo "c is greater and its value is $c";
    }
}
echo "<hr>";
/*2) check if the person is elligible for admission or not by the given conditions*/
$age=60;
if(($age>=16) && ($age<=30)){
    echo "your age is $age and u are elligible(i said it with a posed look)";
}
elseif($age>30){
    echo "your age is $age and u are too old to be elligible(i said it with a posed look)";
}
elseif($age<16){
    echo "your age is $age and u are still too young to be elligible(i said it with a posed look)";
}
echo "<hr>";
/*3) using switch print he days by numbers usage*/
$a=6;
switch($a){
    case 1:
        echo "sunday, no. pressed is $a";
        break;
    case 2:
        echo "monday, no. pressed is $a";
        break;
    case 3:
        echo "tuesday, no. pressed is $a";
        break;
    case 4:
        echo "wednesday, no. pressed is $a";
        break;
    case 5:
        echo "thursday, no. pressed is $a";
        break;
    case 6:
        echo "frichickenday, no. pressed is $a";
        break;
    case 7:
        echo "saturday, no. pressed is $a";
        break;
    default:
        echo "invalid no. pressed that is $a (noob)";
}
echo "<hr>";
echo "welcome to the simple calculator";
echo '<br>';
echo '<br>';
echo 'type \'+\' for addition';
echo '<br>';
echo 'type \'-\' for substraction';
echo '<br>';
echo 'type \'/\' for division';
echo '<br>';
echo 'type \'*\' for multiplication';
echo '<br>';
echo 'type \'**\' for power calculation';
echo '<br>';
$x='*';
$a=10;
$b=2;
echo "you typed:: ($x) ";
echo '<br>';
echo '<br>';
switch($x){
    case '+':
        {
         echo 'The answer is '.($a+$b);
         break;
        }
    case '-':
        {
            echo 'The answer is '.($a-$b);
            break;
        }
    case '*':
        {
            echo 'The answer is '.($a*$b);
            break;
        }
    case '/':
        {
            echo 'The answer is '.($a/$b);
            break;
        }
    case '**':
        {
            echo 'The answer is '.($a**$b);
            break;
        }
    default:
        {
            echo "invalid operator used(noob)";
        }
}
