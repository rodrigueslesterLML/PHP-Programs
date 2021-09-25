<?php
include 'connection.php';
$con = OpenCon();

if(isset($_POST['Submit']))
{
    $uname=$pwd=$mail="";
    $uname=$_POST['Username'];
    $pwd=$_POST['Password'];
    $mail=$_POST['Email'];
    $pattern='/^(?=.[0-9])(?=.[A-z]).{8,20}$/';
    if(preg_match($pattern,$pwd)){
        echo "<br>Sigma Password";
    }
    else{
        echo "<br>Beta Password";
    }
    $sql="INSERT INTO `details`(`Username`, `Email`, `Password`) VALUES ('$uname','$mail','$pwd')";
    $ans=mysqli_query($con,$sql);
    if($ans){
        echo "<br>Successfully Inserted";
    }
}
?>