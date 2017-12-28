<?php
$a=[110,'monogatari',24,'junni taisen',12,'scratado','pewdiepie',5000,'florado'];
for($b=0;$b<count($a);$b++)
{
    echo "array $b has :: $a[$b]".'<br>';
}
echo'<br>';
if(count($a)%2==0){
    echo "As the no. of elements of the given array is :: ".count($a)." which is even, so its middle term can't be calculated".'<br>';
}
else{
   $c=(count($a))/2;
    echo "As the no. of elements of the given array is :: ".count($a)." which is odd, so its middle term is :: $a[$c]".'<br>';
}