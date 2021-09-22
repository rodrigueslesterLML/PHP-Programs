<?php
include 'connect.php';
$con=OpenCon();
echo "<b>Connected Successfully</b><br>";
$sql="SELECT Name FROM `register`";
$ans=mysqli_query($con,$sql);
$num=mysqli_num_rows($ans);
echo "<br><b>Number of rows = $num</b>";
while($row=mysqli_fetch_assoc($ans))
{
    echo "<br>";
    echo $row['Name'];
}
?>