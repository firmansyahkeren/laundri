
<?php 
session_start();
// koneksi database
include '../koneksi.php';

if(isset($_POST['id_barang']))
{
    $id_barang = $_POST['id_barang'];
    $qty = $_POST['qty'];
  
$data = mysqli_query($koneksi,"SELECT * FROM barang WHERE id_barang='$id_barang'");
       // echo var dump($data);
       // return false;
$b = mysqli_fetch_array($data);

$barang = [
      'id' => $b['id_barang'],
      'nama' => $b['nama'],
      'harga' => $b['harga'],
      'qty' => $qty
  
];

$_SESSION['barang'][] = $barang;
krsort($_SESSION['barang']);

header("location:kasir.php");

}

?>