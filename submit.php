<?php
include_once 'db.php';

if (isset($_POST['submit'])){
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$tgl_lahir =$_POST['tgl_lahir'];

	$query = "INSERT INTO siswa(nim, nama, tgl_lahir) 
				VALUES ('$nim','$nama','$tgl_lahir')";
	$query_success = mysqli_query($conn,$query);
	if ($query_success) {
		echo "query sukses";
		header("location: list.php");
	}else{
		echo mysql_error($conn);
		echo "<a href='form.php'>Kembali</a>";
	}
	mysqli_close($conn);
}

  ?>