<?php
include("../koneksi.php");
  $kd_barang = $_POST["kd_barang"];
  $kd_jenis = $_POST["kd_jenis"];
  $kd_petugas = $_POST["kd_petugas"];
  $nama_barang = $_POST["nama_barang"];
  $jumlah_barang = $_POST["jumlah_barang"];
  $harga = $_POST["harga"];

$sql= "update BARANG set KD_BARANG ='$kd_barang' , KD_JENIS = '$kd_jenis', KD_PETUGAS = '$kd_petugas', NAMA_BARANG = '$nama_barang' , JUMLAH_BARANG = '$jumlah_barang' , harga = '$harga' WHERE KD_BARANG = '$kd_barang'";

$parsesql = oci_parse($conn, $sql);
$q = oci_execute($parsesql) or die(oci_error());
$res = oci_commit($conn);
if ($q) {
  header('location:../index.php?hal=barang');
  }
  else {echo "gagal";}

?>

