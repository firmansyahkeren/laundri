<?php
session_start();

include '../koneksi.php';
include 'header.php';

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}
 
?>
 
	<div class="container mt-3">

      <a href="index.php" class="btn btn-default">Dashboard</a>  
	 <a href="barang.php" class="btn btn-default">Barang</a> 
	 <a href="user.php" class="btn btn-default">User</a>  
	 <a href="kasir.php" class="btn btn-default">Transaksi</a>  
	 <a href="transaksi.php" class="btn btn-default">Detail</a> 
	 <a href="../logout.php" class="btn btn-default">Logout</a>

  <div class="mt-4 p-5 bg-primary text-white rounded">
    <h1>Selamat Datang Ditoko Berkah Barokah</h1> 
   <p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
  </div>
</div>