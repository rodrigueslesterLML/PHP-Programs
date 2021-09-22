<?php

$num=array(10,20,30,40);
$sum=0;
echo "Array elements are <br>";
foreach($num as $i)
{
    echo "$i<br>";
    $sum=$sum+$i;
}
echo "<br> Sum of the array is $sum "; 