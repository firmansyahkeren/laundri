<?php
// memanggil library FPDF
require('library/fpdf.php');
include 'koneksi.php';
 
// intance object dan memberikan pengaturan halaman PDF
$pdf=new FPDF('P','mm','A4');
$pdf->AddPage();
 
$pdf->SetFont('Times','B',13);
$pdf->Cell(200,10,'DATA TRANSAKSI',0,0,'C');
 
$pdf->Cell(10,15,'',0,1);
$pdf->SetFont('Times','B',9);
$pdf->Cell(10,7,'ID',1,0,'C');
$pdf->Cell(25,7,'Tanggal' ,1,0,'C');
$pdf->Cell(20,7,'Nomor',1,0,'C');
$pdf->Cell(20,7,'Total',1,0,'C');
$pdf->Cell(20,7,'Rupiah',1,0,'C');
$pdf->Cell(20,7,'Kembali',1,0,'C');
 
 
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Times','',10);
$no=1;
$data = mysqli_query($koneksi,"SELECT  * FROM transaksi;");
while($d = mysqli_fetch_array($data)){
	
  $pdf->Cell(10,6, $d['id_transaksi'],1,0,'C');
  $pdf->Cell(25,6, $d['tanggal_waktu'],1,0);
  $pdf->Cell(20,6, $d['nomor'],1,0);  
  $pdf->Cell(20,6, $d['total'],1,0);
  $pdf->Cell(20,6, $d['rupiah'],1,0);
  $pdf->Cell(20,6, $d['kembali'],1,1);
}
 
$pdf->Output();
 
?>