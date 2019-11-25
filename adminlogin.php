<?php
if(!isset($con)){
SESSION_start();

$con=mysqli_connect('localhost','root','','login');
}

$username1="admin";
$password2="admin123";
$errors=array();

if (isset($_POST['login'])){
	$username=mysqli_real_escape_string($con,$_POST['username']);
	
	$password=mysqli_real_escape_string($con,$_POST['password']);

	if(empty($username)){
		array_push($errors,"Username is required");
	}
	if(empty($password)){
		array_push($errors,"Password is required");
	}
if(count($errors)==0){
		if($username1==$username && $password2==$password){
			$_SESSION['username']=$username;
			header('location:adminhome.php');
        }
    else{
			array_push($errors," Wrong username/password combination");
			
		}
}
}
?>

