<?php 
$host = "localhost";
$user = "root";
$pass = "";
$db = "ujian";

$koneksi = mysqli_connect($host,$user,$pass,$db);

// Cek Koneksi
if (mysqli_connect_errno()){
    echo "Database Koneksi gagal : ". mysqli_connect_error();
}

?>