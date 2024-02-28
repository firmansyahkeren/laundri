<?php
session_start();

include '../koneksi.php';
include 'header.php';
?>

<div class="container mt-3">

	<h1>List Barang</h1>
	<a href="barang_add.php" class="btn btn-default">Tambah</a>
    <a href="index.php" class="btn btn-default">Kembali</a>
      <table class="table table-bordered">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>harga</th>
			<th>Stok</th>
			<th>Aksi</th>
		</tr>
		<?php 
		include '../koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from barang");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $d['id_barang'] ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['harga']; ?></td>
				<td><?php echo $d['stok']; ?></td>
				<td>
					<a href="barang_update.php?id=<?php echo $d['id_barang']; ?>" class="btn btn-success">EDIT</a>
					<a href="barang_delete.php?id=<?php echo $d['id_barang']; ?>" class="btn btn-danger">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>