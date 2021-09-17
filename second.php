<?php
$x=5;$y=10;
function add()
{
    global $x,$y;
    echo $x+$y;
}
add();
?>