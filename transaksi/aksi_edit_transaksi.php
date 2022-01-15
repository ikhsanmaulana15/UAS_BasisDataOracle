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

$sql= "update TRANSAKSI set KD_PELANGGAN = '$kd_pelanggan', KD_BARANG= '$kd_barang', KD_PETUGAS = '$kd_petugas', JUMLAH_BELI = '$jumlah_beli' , TOTAL_HARGA = '$total_harga' , JUMLAH_BAYAR = '$jumlah_bayar', KEMBALIAN ='$kembalian' WHERE KD_TRANSAKSI = '$kd_transaksi'";

$parsesql = oci_parse($conn, $sql);
$q = oci_execute($parsesql) or die(oci_error());
$res = oci_commit($conn);
if ($q) {
  header('location:../index.php?hal=transaksi');
  }
  else {echo "gagal";}

?>

