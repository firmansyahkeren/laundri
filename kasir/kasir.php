<?php 

session_start();
// koneksi database
include 'koneksi.php';
include 'admin/header.php';


$barang = mysqli_query ($koneksi,"SELECT * FROM barang");

$sum = 0;
if(isset($_SESSION['barang']))
{
	foreach ($_SESSION['barang'] as $key => $value) {
		$sum += $value['harga']*$value['qty'];
	}
}

?>

<div class="row">
	<div class="col-md-8">
		  <h1>Transaksi</h1>
		  <form method="post" action="kasir_act.php" class="form-inline">
		  	<div class="input-group">
		  			<select class="form-control" name="id_barang">
				<option value="">Pilih Barang</option>
				<?php while ($row = mysqli_fetch_array ($barang)){?>
					<option value="<?=$row['id_barang']?>"><?=$row['nama']?></option>
					<?php } ?>
			</select>
		  	</div>
		  	<div class="input-group">
		  		<input type="number" name="qty" class="form-control">
		  		<span class="input-group-btn">
		  			<button class="btn btn-default" type="submit">Tambah</button>
		  			<a href="kasir_reset.php" class="btn btn-default">Reset</a>
		  		</span>
		  	</div>
		  </form>
<br>
<form method="post" action="kasir_update.php">
		<table class="table table-bordered">
			<tr>
				<td>Nama</td>
				<td>Harga</td>
				<td>Qty</td>
				<td>Sub Total</td>
				

			</tr>
			<?php foreach ($_SESSION['barang'] as $key => $value) { ?>
       <tr>
  <td><?=$value['nama']?></td>
	<td align="right"><?=number_format($value ['harga'])?></td>
	<td class="col-md-2"><input type="number" name="qty[]" value="<?=$value['qty']?>" class="form-control"></td>
	<td align="right"><?=number_format($value['qty']*$value['harga'])?></td>
  <td><a href="kasir_hapus.php?id=<?=$value['id']?>" class="btn btn-danger">Hapus</a></td>
       </tr>
      
			<?php } ?>
</div>
</table>
<button type="submit" class="btn btn-default">Perbarui</button>
<a href="petugas.php" class="btn btn-default">Kembali</a>
</form>
<center><div class="col-md-4">
		<h3>Total Rp. <?=number_format($sum)?></h3>
		<form action="transaksi_act.php" method="POST">
			<input type="hidden" name="total" value="<?=$sum?>">
		<div class="form-group">
			<label>Bayar</label>
			<input type="text" id="rupiah" name="rupiah" class="form-control"></input>
		</div>
		<button type="submit" class="btn btn-primary">Selesai</button>
	 
<script type="text/javascript">
		
		var rupiah = document.getElementById('rupiah');
		rupiah.addEventListener('keyup', function(e){
			// tambahkan 'Rp.' pada saat form di ketik
			// gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
			rupiah.value = formatRupiah(this.value, 'Rp. ');
		});
 
		/* Fungsi formatRupiah */
		function formatRupiah(angka, prefix){
			var number_string = angka.replace(/[^,\d]/g, '').toString(),
			split   		= number_string.split(','),
			sisa     		= split[0].length % 3,
			rupiah     		= split[0].substr(0, sisa),
			ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);
 
			// tambahkan titik jika yang di input sudah menjadi angka ribuan
			if(ribuan){
				separator = sisa ? '.' : '';
				rupiah += separator + ribuan.join('.');
			}
 
			rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
			return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
		}
	</script>


	</form>
  </div>
 </div>
</div>
</body>
</html>
