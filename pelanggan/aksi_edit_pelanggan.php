<?php
include("../koneksi.php");
  $kd_pelanggan = $_POST["kd_pelanggan"];
  $nama_pel = $_POST["nama_pel"];
  $alamat_pel = $_POST["alamat_pel"];
  $no_telp = $_POST["no_telp"];

$sql= "update PELANGGAN set KD_PELANGGAN ='$kd_pelanggan' , NAMA_PEL = '$nama_pel', ALAMAT_PEL = '$alamat_pel', NO_TELP = '$no_telp'  WHERE KD_PELANGGAN = '$kd_pelanggan'";

$parsesql = oci_parse($conn, $sql);
$q = oci_execute($parsesql) or die(oci_error());
$res = oci_commit($conn);
if ($q) {
  header('location:../index.php?hal=pelanggan');
  }
  else {echo "gagal";}

?>

