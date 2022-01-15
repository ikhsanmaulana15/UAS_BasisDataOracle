<?php
include("../koneksi.php");
  $kd_jenis = $_POST["kd_jenis"];
  $nama_jenis = $_POST["nama_jenis"];

$sql= "insert INTO JENIS_BARANG (KD_JENIS,NAMA_JENIS) VALUES ('$kd_jenis','$nama_jenis')";
$parsesql = oci_parse($conn, $sql);
$q = oci_execute($parsesql) or die(oci_error());
$res = oci_commit($conn);

if ($q) {
  header('location:../index.php?hal=jenis_barang');
  }
  else {echo "gagal";}

?>


  
