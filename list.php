<?php 
include_once 'db.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>6701174057</title>
</head>
<body>
	<table>
		<thead>
			<th>Nama</th>
			<th>NIM</th>
			<th>Tanggal Lahir</th>
			<th>Action</th>
		</thead>
		<tbody>
		<?php 
		$query ="SELECT * FROM siswa";
		$result = mysqli_query($conn,$query);
		if (mysqli_num_rows($result)>0) {
			while ($row =mysqli_fetch_assoc($result)){
		 ?>
		 	<tr>
		 		<td><?php echo $row['nama'];  ?></td>
		 		<td><?php echo $row['nim'];  ?></td>
		 		<td><?php echo $row['tgl_lahir'];  ?></td>
		 		<td><a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a> | <a href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Delete</a></td>
		 	</tr>
		 	<?php
		 		}
		 	}else{
		 		echo "no result";
		 	}
	 	  ?>
		 </tbody>
	</table>
	<a href="form.php">Tambah Data</a>
</body>
</html>