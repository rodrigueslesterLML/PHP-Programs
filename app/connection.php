<?php
function Open()
{
    $server="localhost";
    $uname="root";
    $pwd="";
    $dbname="registration";
    $con=mysqli_connect($server,$uname,$pwd,$dbname);
    if(!$con)
    {
        die("Connection Unsuccessful".mysqli_connect_error()) ;
    }
return $con;
}
function Close($con)
{
    $con->close();
}

?>