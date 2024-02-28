<?php 

session_start();
// koneksi database
include '../koneksi.php';

// menghilangkan Rp pada nominal
$rupiah = preg_replace ('/\D/', '', $_POST['rupiah']);
// print_r(preg_replace('/\D/', '', $_POST)['total']);

// print_r($_SESSION['cart']);

$id_transaksi = $_POST['id_transaksi'];
$tanggal_waktu = date('Y-m-d H:i:s');
$nomor = rand(111111,999999);
$total = $_POST['total'];
$kembali = $rupiah-$total;

// insert ke tabel transaksi
mysqli_query($koneksi, "INSERT INTO transaksi (id_transaksi,tanggal_waktu,nomor,total,rupiah,kembali) VALUES (NULL,'$tanggal_waktu','$nomor','$total','$rupiah','$kembali')");

// mendapatkan id transaksi baru
$id_transaksi = mysqli_insert_id($koneksi);

//inser ke detail transaksi
foreach ($_SESSION['barang'] as $key => $value) {
    
	$id_barang = $value['id'];
	$harga = $value['harga'];
	$qty = $value['qty'];
	$total = $harga*$qty;

	mysqli_query($koneksi,"INSERT INTO transaksi_detail (id_transaksi_detail,id_transaksi,id_barang,harga,qty,total) VALUES (NULL,'$id_transaksi_detail','$id_transaksi','$id_barang','$harga','$qty',$total)");

	// $sum += $value['harga']*$value['qty'];
}

header("location:transaksi.php?id");
?>