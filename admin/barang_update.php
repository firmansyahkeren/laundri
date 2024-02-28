<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
if (isset($_POST['update'])){
$id_barang = $_POST['id_barang'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
 
// update data ke database
mysqli_query($koneksi,"update barang set nama='$nama', harga='$harga', stok='$stok' where id_barang='$id_barang'");
 
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
 
	<h2>Update Barang</h2>
 
	<?php
	include '../koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from barang where id_barang='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post">
			<table>
				<tr>			
					<td>Nama</td>
					<td>
						<input type="hidden" name="id_barang" value="<?php echo $d['id_barang']; ?>">
						<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
					</td>
				</tr>
				<tr>
					<td>Harga</td>
					<td><input type="number" name="harga" value="<?php echo $d['harga']; ?>"></td>
				</tr>
				<tr>
					<td>Jumlah</td>
					<td><input type="text" name="stok" value="<?php echo $d['stok']; ?>"></td>
				</tr>
			</table>
			<input type="submit" name="update" value="Save" class="btn btn-primary">
			<a href="barang.php" class="btn btn-danger">Back</a>
		</form>
		<?php 
	}
	?>
 
</body>
</html>