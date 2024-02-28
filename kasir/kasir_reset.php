<?php
session_start();

$_SESSION['barang'] = [];
header('location:kasir.php');
?>