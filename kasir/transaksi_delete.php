<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
if (isset($_GET['id'])){

$id = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from transaksi where id_transaksi='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:transaksi.php");
}
 
?>