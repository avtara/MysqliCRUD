<!DOCTYPE html>
<html>
<head>
	<title>Tampil Data</title>
</head>
<body>
	<?php
		//connection string 
		/*require "koneksi.php";
		require "koneksi.php";*/
		require_once "koneksi.php";
		require_once "koneksi.php";

		//query
		$email = "";
		if(isset($_GET['email']))
			$email = $_GET['email'];
		$qry = mysqli_query($cn, "DELETE FROM tbinsta WHERE email = '$email'");
		$qry = mysqli_query($cn, "SELECT * FROM tbinsta");
		//hasil
	?>
		<a href="form_input.php">Input Data</a>
		<table border="1">
			<tr>
				<th>No</th>			
				<th>Email</th>			
				<th>Password</th>			
				<th>Aksi</th>
				<th>Update</th>			
			</tr>
	<?php
		$nomor = 1;
		while($row = mysqli_fetch_array($qry)){
	?>
			<tr>
				<td><?php echo $nomor++; ?></td>
				<td><?php echo $row["email"]; ?></td>
				<td><?php echo $row["password"]; ?></td>
				<td><a href="http://localhost/mj/instagar.php?email=<?php echo $row['email']; ?>">Hapus</a></td>
				<td><a href="http://localhost/mj/form_update.php?email=<?php echo $row['email']; ?>">update</a></td>
			</tr>
	<?php
		}
	?>
		</table>
</body>
</html>