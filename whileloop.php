<?php

$n=153;
$rev=0;
$no=$n;
while($n!=0)
{
    $rem=$n%10;
    $rev=($rev*10)+$rem;
    $n=(int)($n/10);
}
echo "Reverse of $no is $rev";
?>