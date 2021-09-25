<?php
function OpenCon()
{
    $servername="localhost";
    $username="root";
    $pwd="";
    $dbname="registration";
    $con=mysqli_connect($servername,$username,$pwd,$dbname);
    if(!$con)
    {
        die("Connection Unsuccessful".mysqli_connect_error());
    }
    return $con;
}
function Close($con)
{
    $con->close();
}
?>