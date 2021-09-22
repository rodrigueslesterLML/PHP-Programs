<?php
include 'connect.php';
$con=OpenCon();
echo "Connected Successfully<br>";
$sql="INSERT INTO `register` (`Name`, `Password`) VALUES ('Lester', 'A1456')";
$ans=mysqli_query($con,$sql);
if($ans)
{
    echo "<br>Inserted</b>";
}
else
{
    echo "Not Inserted".mysqli_error($con);

}
?>
