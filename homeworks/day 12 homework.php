<?php
//1)
$i=2; //this variable stores the no. of times the repeatition will happen
$a='yolo';
$g='';
function my_str_repeat(){ //function start
    global $i,$a,$g;
for($j=1;$j<=$i;$j++)
{
    //echo $a.'<br>'; not meant for array
    $g.=$a;
}
return $g;
}//function end
my_str_repeat();
echo $g.'<br>';
echo'<hr>';
//--------------------------------------------------------------------------------------------------------------------
//2)
$b=[1,2,4,9,1,6,8,9];
function repsort(&$d){ //used pass by reference //function start
    global $b;
    $c=[];
for($i=0;$i<count($b);$i++){
    if(!in_array($b[$i],$c)){
        $d[$i]=$b[$i];
    }
    $c[]=$b[$i];
}
//print_r ($d); ---to check if all the repeated value got removed.
sort($d); //to sort the values in array in ascending orderf3t+
return $d;
}//function end
repsort($d);
echo '<pre>';
print_r($d);
echo '<hr>';
//--------------------------------------------------------------------------------------------------------------------
//3) to find the min
function findmin(){
    $values = func_get_args();
    $ListNumber= array_shift($values); //array shift removes the first element from $values and keeps it to $ListNumber varisble
    foreach($values as $value){
        if($value < $ListNumber){
            $ListNumber=$value;
        }
    }
    print_r($ListNumber);
    return $ListNumber;
}
findmin(1,2,3,4,5,6,7,8,9);
