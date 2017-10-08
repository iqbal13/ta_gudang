<?php 


	include 'config/koneksi.php';

	$username = $_POST['username'];
	$password=  $_POST['password'];


	$password = $password;

	$query = mysqli_query($conn,"SELECT * FROM users WHERE username = '$username' AND password = '$password'");

	if(mysqli_num_rows($query) == 0){

		echo "<script>alert('Username atau Password anda salah ')</script>";
		echo "<script>window.open('".$url."/login.php','_self')</script>";


	}else{

		$dt = mysqli_fetch_array($query);
		$_SESSION['username'] = $dt['username'];
		$_SESSION['level'] = $dt['level'];

		echo "<script>alert('Login Berhasil')</script>";
		echo "<script>window.open('".$url."/index.php','_self')</script>";

	}


	?>