<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
if (isset($_POST['simpan'])){
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into barang values('','$nama','$harga','$jumlah')");
 
// mengalihkan halaman kembali ke index.php
header("location:barang.php");
}
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>File Barang</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

	<h2>Tambah Barang</h2>
	<form method="post">
		<table>
			<tr>			
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td><input type="number" name="harga"></td>
			</tr>
			<tr>
				<td>Jumlah</td>
				<td><input type="text" name="jumlah"></td>
			</tr>	
		</table>
		<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
		<a href="barang.php" class="btn btn-danger">Back</a>		
	</form>
</body>
</html>