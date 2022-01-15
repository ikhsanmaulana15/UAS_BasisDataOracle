<?php
include("../koneksi.php");
  $tanggal = date("d-m-Y");

  $kd_pelanggan = $_POST["kd_pelanggan"];
  $kd_barang = $_POST["kd_barang"];
  $kd_petugas = $_POST["kd_petugas"];
  $jumlah_beli = $_POST["jumlah_beli"];
  $total_harga = $_POST["total_harga"];
  $jumlah_bayar = $_POST["jumlah_bayar"];
  $kembalian = $_POST["kembalian"];
 
 $sql ="INSERT INTO transaksi VALUES ('','$tanggal','$kd_pelanggan','$kd_barang','$kd_petugas','$jumlah_beli','$total_harga','$jumlah_bayar','$kembalian')";


	$parsesql = oci_parse($conn, $sql);
  $q = oci_execute($parsesql) or die(oci_error());
  $res = oci_commit($conn);
if ($q) {
  header('location:../index.php?hal=laporan');
  }
  else {echo "gagal";}

?>
