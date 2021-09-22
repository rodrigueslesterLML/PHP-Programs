<?php
$n1=10;
$n2=20;
$n3=5;
if($n1>$n2 and $n1>$n3)
{
    echo "$n1 is greatest";
}
elseif($n2>$n3 && $n2>$n1) 
// && / and  
// not / !
// or 
{
    echo "$n2 is greatest";
}
else{
    echo " $n3 is greatest";
}
?>