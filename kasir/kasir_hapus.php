<?php 
session_start();
// koneksi database
include 'koneksi.php';

$id = $_GET['id'];

$barang = $_SESSION['barang'];
// print_r($barang);

$k = array_filter($barang,function ($var) use ($id) {
	return ($var['id']==$id);

});
print_r($k);

foreach ($k as $key => $value) {
	unset($_SESSION['barang'][$key]);
}
// Mengembalikan urutan data
$_SESSION['barang'] = array_values($_SESSION ['barang']);

header('location:kasir.php');
?>