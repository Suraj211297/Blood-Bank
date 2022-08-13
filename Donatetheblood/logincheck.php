<?php

session_start();

$conn = mysqli_connect("localhost","root");

if($conn){
	// echo "connection successful";
}else{
	echo "connection failed";
}

$db = mysqli_select_db($conn,'bloodbank');

if(isset($_POST['SignIn'])){
	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql = " select * from blood where email ='$email' and password = '$password'";
	$result = mysqli_query($conn,$sql);

	$row = mysqli_num_rows($result);
		if($row>0){
			echo "login successful";
			$_SESSION['email'] = $email;


			header('Location:user/index.php');
		}else{
			echo "Login failed! Please enter correct email and password";
			header('signin.php');
		}
	
}

?>