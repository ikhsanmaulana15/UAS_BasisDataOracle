<?php
include("../koneksi.php");
  $kd_jenis = $_POST["kd_jenis"];
  $nama_jenis = $_POST["nama_jenis"];
 
$sql= "update JENIS_BARANG set KD_JENIS ='$kd_jenis' , NAMA_JENIS = '$nama_jenis' WHERE KD_JENIS = '$kd_jenis'";

$parsesql = oci_parse($conn, $sql);
$q = oci_execute($parsesql) or die(oci_error());
$res = oci_commit($conn);
if ($q) {
  header('location:../index.php?hal=jenis_barang');
  }
  else {echo "gagal";}

?>
