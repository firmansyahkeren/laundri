<?php
session_start();

include '../koneksi.php';
include 'header.php';
?>

<div class="container mt-3">

	<h1>List Riwayat</h1>
	<a href="index.php" class="btn btn-default">Kembali</a>
      <table class="table table-bordered">
    <thead class="thead-dark">
		<tr>
			<th>ID</th>
			<th>Tanggal</th>
			<th>Nomor</th>
			<th>Total</th>
      <th>Bayar</th>
      <th>Kembali</th>
		</tr>
	 </thead>
		<?php 
		include '../koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from transaksi");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['tanggal_waktu']; ?></td>
				<td><?php echo $d['nomor']; ?></td>
				<td><?php echo $d['total']; ?></td>
                <td><?php echo $d['rupiah']; ?></td>
                <td><?php echo $d['kembali']; ?></td>
                <td>
                    <a href="../cetak_nota.php?id=<?php echo $d['id_transaksi']; ?>" class="btn btn-success">Cetak</a>
					<a href="../transaksi_delete.php?id=<?php echo $d['id_transaksi']; ?>" class="btn btn-danger">Hapus</a>
                </td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>