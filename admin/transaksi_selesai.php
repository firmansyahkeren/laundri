<?php 

session_start();
// koneksi database
include '../koneksi.php';

$id_trx = $_GET['id'];

$data = mysqli_query($koneksi,"SELECT * FROM transaksi WHERE id_transaksi='$id_trx'");
$trx = mysqli_fetch_assoc($data);
print_r($trx);
?>


<html>
<body>
<head>	
<title>Struk</title>
<style type="text/css">
	body{
		color: #a7a7a7;
	}
</style>
</head>

<body>
	<div align="center">
		<table width="500" border="0" cellpadding="1" cellspacing="0">
			<tr>
				<th>Toko Toki<br>
				  Jl Untung Suropati <br>
				Semarang Jawa Tengah </th>
			</tr>
			<tr align="center"><td><hr></td></tr>
				<tr>
					<td>05-01-2024 08:12 Nayyara Qabila Ruqa</td>
				</tr>
			<tr><td><hr></td></tr>
		</table>
		<table width="500" border="0" cellpading="3" cellspacing="0">
			<tr>
				<td>Nama</td>
				<td>1</td>
				<td align="right">1000</td>
			    <td align="right">1000</td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>1</td>
				<td align="right">1000</td>
			    <td align="right">1000</td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>1</td>
				<td align="right">1000</td>
			    <td align="right">1000</td>
			</tr>
			<tr>
				<td colspan="4"><hr></td>
			</tr>
			<tr>
				<td align="right" colspan="3">Total</td>
				<td align="right">1000</td>
			</tr>
			<tr>
				<td align="right" colspan="3">Bayar</td>
				<td align="right">1000</td>
			</tr>
			<tr>
				<td align="right" colspan="3">Kembali</td>
				<td align="right">1000</td>
			</tr>
		</table>
		<table width="500" border="0" cellpading="1" cellspacing="0">
			<tr><td><hr></td></tr>
			<tr>
				<th>Terimakasih, Silahkan Datang Kembali</th>
			</tr>
			<tr>
				<th>===== Layanan Konsumen =====</th>
			</tr>
			<tr>
				08219273211</th>
			</tr>
		</table>
	</div>
</body>
</body>
</html>