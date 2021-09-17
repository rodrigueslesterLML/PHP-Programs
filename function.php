<?php

//declare(strict_types=1); // if this is mentioned then your arguments cant be string 
function Name()

{
    echo "<br>Lester";
}

function Add(int $a, int $b)
{
    return($a+$b);
}

function Subtract(int $a, int $b)
{
    return ($a-$b);
}
Name();
$ans=Add(100,100);
echo "<br> Addition= $ans";

$res=Subtract(10,"7");
echo "<br>Subtraction= $res";

?>