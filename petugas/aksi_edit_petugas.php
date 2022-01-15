<?php
include("../koneksi.php");
  $kd_petugas = $_POST["kd_petugas"];
  $nama_petugas = $_POST["nama_petugas"];
  $alamat = $_POST["alamat"];

$sql= "update PETUGAS set KD_PETUGAS ='$kd_petugas' , NAMA_PETUGAS = '$nama_petugas', ALAMAT = '$alamat' WHERE KD_PETUGAS = '$kd_petugas'";

$parsesql = oci_parse($conn, $sql);
$q = oci_execute($parsesql) or die(oci_error());
$res = oci_commit($conn);
if ($q) {
  header('location:../index.php?hal=petugas');
  }
  else {echo "gagal";}

?>

