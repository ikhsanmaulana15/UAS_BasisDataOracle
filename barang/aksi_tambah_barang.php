<?php
include("../koneksi.php");
  $kd_barang = $_POST["kd_barang"];
  $kd_jenis = $_POST["kd_jenis"];
  $kd_petugas = $_POST["kd_petugas"];
  $nama_barang = $_POST["nama_barang"];
  $jumlah_barang = $_POST["jumlah_barang"];
  $harga = $_POST["harga"];
 
 
$sql = "insert INTO BARANG (KD_BARANG,KD_JENIS,KD_PETUGAS,NAMA_BARANG,JUMLAH_BARANG,HARGA) VALUES ('$kd_barang','$kd_jenis','$kd_petugas','$nama_barang','$jumlah_barang','$harga')";

	$parsesql = oci_parse($conn, $sql);
  $q = oci_execute($parsesql) or die(oci_error());
  $res = oci_commit($conn);
if ($q) {
  header('location:../index.php?hal=barang');
  }
  else {echo "gagal";}

?>
