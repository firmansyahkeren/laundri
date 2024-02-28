<?php
session_start();

include '../koneksi.php';
include 'header.php';
?>

<div class="container mt-3">

	<h1>List User</h1>
	<a href="user_add.php" class="btn btn-default">Tambah</a>
	<a href="index.php" class="btn btn-default">Kembali</a>
      <table class="table table-bordered">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Username</th>
			<th>Password</th>
			<th>Level</th>
		</tr>
		<?php 
		include '../koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from user");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $d['id_user'] ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['username']; ?></td>
				<td><?php echo $d['password']; ?></td>
				<td><?php echo $d['level']; ?></td>
				<td>
					<a href="user_update.php?id=<?php echo $d['id_user']; ?>" class="btn btn-success">EDIT</a>
					<a href="user_delete.php?id=<?php echo $d['id_user']; ?>" class="btn btn-danger">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>