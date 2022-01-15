<?php
include("../koneksi.php");
  $kd_petugas = $_POST["kd_petugas"];
  $nama_petugas = $_POST["nama_petugas"];
  $alamat = $_POST["alamat"];

$sql= "insert INTO PETUGAS (KD_PETUGAS,NAMA_PETUGAS,ALAMAT) VALUES ('$kd_petugas','$nama_petugas','$alamat')";
$parsesql = oci_parse($conn, $sql);
$q = oci_execute($parsesql) or die(oci_error());
$res = oci_commit($conn);

if ($q) {
  header('location:../index.php?hal=petugas');
  }
  else {echo "gagal";}

?>


  
