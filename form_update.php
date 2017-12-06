<!DOCTYPE html>
<html>
<head>
	<title>Input Data</title>
</head>
<body>
<?php 
			require_once "koneksi.php";

	$email = "";
		if(isset($_GET['email']))
			$email = $_GET['email'];		
	$qry = mysqli_query($cn, "SELECT * FROM tbinsta WHERE email = '$email'");
	while($row = mysqli_fetch_array($qry)){
 ?>
	<form action="proses_update.php" method="POST">
		<input type="hidden" name="id" value="<?php echo $row["email"]; ?>" >
		Email: <input type="email" name="email" value="<?php echo $row["email"]; ?>" ><br/>
		Password: <input type="password" name="password" value="<?php echo $row["password"]; ?>"><br/>
		<input type="submit" value="simpan">
	</form>
<?php } ?>
</body>
</html>