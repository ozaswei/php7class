<?php
/* while loop*/
$i=1;
while($i<=10) {
    echo "bzen is noob $i<br>";
    $i++;
}
echo '<br>';
echo '<br>';
/* do while loop*/
$i=1;
 do{
    echo "bzen is noob $i<br>";
    $i++;
}while($i<=10);
echo '<br>';
echo '<br>';
/*for loop */
for($i=1;$i<=10;$i++){
    echo "bzen is noob $i<br>";
}
echo '<br>';
echo '<br>';
/* break ---- exits the loop*/
for($i=1;$i<=10;$i++){
    if($i==5){
        echo 'five';
        break;
    }
    echo "bzen is noob $i<br>";
}
echo '<br>';
echo '<br>';
/* continue ---- makes the loop to go to check the condition again*/
for($i=1;$i<=10;$i++){
    if($i==5){
        echo 'five<br>';
        continue;
    }
    echo "bzen is noob $i<br>";
}
echo '<br>';
echo '<br>';
/*for each loop ----- for array */
$a=[1,"bzen","noob",45];
foreach($a as $key => $b){
    echo $b.'<br>';
    }

