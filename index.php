<?php

require "init.php";

if (isset($_POST['username'])&&isset($_POST['password'])&&isset($_POST['password_again'])) {
	$username=mysqli_real_escape_string($con,$_POST['username']);
	$password=$_POST['password'];
	$password_again=$_POST['password_again'];
	if (empty($username)||empty($password)||empty($password_again)) {
		echo "all feldes are required";
	}elseif ($password!==$password_again) {
		echo "password not matches";
	}else{
		$regester=mysqli_query($con,"insert into `users` values('','$username','$password')");
		echo $username."you have been regestered succesfully";
	}
}
?>

<form action="" method="post">
	username*<input type="text" name="username"><br>
	password*<input type="text" name="password"><br>
	password_again<input type="text" name="password_again">
	<input type="submit" value="send">
