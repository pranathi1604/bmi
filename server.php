<?php
if(!isset($con)){
SESSION_start();

$con=mysqli_connect('localhost','root','','login');

}
$username="";
$email="";
$errors=array();

if(isset($_POST['register'])){
	$username=mysqli_real_escape_string($con,$_POST['username']);
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$password_1=mysqli_real_escape_string($con,$_POST['password']);
	$password_2=mysqli_real_escape_string($con,$_POST['password2']);

	if(empty($username)){
		array_push($errors,"Username is required");
	}
	if(empty($email)){
		array_push($errors,"Email is required");
	}
	if(empty($password_1)){
		array_push($errors,"Password is required");
	}
	if($password_1!= $password_2){
		array_push($errors,"The two passwords do not match");
	}
	
	if(count($errors)==0){
		$password=$password_1; 
		$sql="Insert into users(username,email,password) values('$username','$email','$password')";
		mysqli_query($con,$sql);
        header('location:login.php');
	}
}

if (isset($_POST['login'])){
	$username=mysqli_real_escape_string($con,$_POST['username1']);
	
	$password=mysqli_real_escape_string($con,$_POST['password1']);

	if(empty($username)){
		array_push($errors,"Username is required");
	}
	if(empty($password)){
		array_push($errors,"Password is required");
	}
	if(count($errors)==0){
		$password=$password;
		$query="select * from users where username='$username' and password='$password'";
		$result=mysqli_query($con,$query);
		if(mysqli_num_rows($result)==1){
			$_SESSION['username']=$username;
			header('location:home.php');
		}else{
			array_push($errors," Wrong username/password combination");
			
		}
	}
	
}


if(isset($_POST['logout'])){
	SESSION_destroy();
	unset($_SESSION['username']);
	header('location:notloghome.php');
}
?>