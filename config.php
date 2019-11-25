<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,'login');
if(isset($_POST['register'])){
$username=mysqli_real_escape_string($con,$_POST['username']);

$password=mysqli_real_escape_string($con,$_POST['password']);
    mysqli_query($con,"insert into log values ('$username','$password')");
}
?>
