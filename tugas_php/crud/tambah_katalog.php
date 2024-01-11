<html>
<head>
	<title>Add Katalog</title>
</head>
 
<body>
	<a href="katalog.php">Go to Home</a>
	<br/><br/>
 
	<form action="tambah_katalog.php" method="post" name="form4">
		<table width="25%" border="0">
			<tr> 
				<td>Id_Katalog</td>
				<td><input type="text" name="id_katalog"></td>
			</tr>
			<tr> 
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	<?php if (isset($_POST['Submit'])) {
     $id_katalog = $_POST['id_katalog'];
     $nama = $_POST['nama'];

     include_once 'connect.php';

     $result = mysqli_query(
         $mysqli,
         "INSERT INTO `katalog` (`id_katalog`, `nama`) VALUES ('$id_katalog', '$nama');"
     );

     header('Location:katalog.php');
 } ?>
</body>
</html>