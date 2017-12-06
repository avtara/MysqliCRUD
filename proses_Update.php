<?php 
	//buat koneksi
	require_once "koneksi.php";

	$id = $_POST['id'];

	$email = $_POST['email'];
	$password = $_POST['password'];

	//buat query
	mysqli_query($cn,"UPDATE tbinsta SET email='$email',password='$password' WHERE email='$id'");

	header('location: instagar.php');

 ?>