<?php
include 'connect.php';

$con=OpenCon();
echo "<b>Connected Successfully</b><br>";

$sql="DELETE FROM `register` WHERE Name='Ankita'";
$ans=mysqli_query($con,$sql);
echo "record deleted";
?>