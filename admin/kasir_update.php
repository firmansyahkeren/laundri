<?php 

session_start();
// koneksi database
include '../koneksi.php';


$qty = $_POST['qty'];
// print_r($qty);

foreach ($_SESSION['barang'] as $key => $value) {
	
	$_SESSION['barang'][$key]['qty'] = $qty[$key];

}
header('location:kasir.php');
?>