<?php
include("../koneksi.php");
  $kd_pelanggan = $_POST["kd_pelanggan"];
  $nama_pel = $_POST["nama_pel"];
  $alamat_pel = $_POST["alamat_pel"];
  $no_telp = $_POST["no_telp"];
 
$sql = "insert INTO PELANGGAN (KD_PELANGGAN,NAMA_PEL,ALAMAT_PEL,NO_TELP) VALUES ('$kd_pelanggan','$nama_pel','$alamat_pel','$no_telp')";

  $parsesql = oci_parse($conn, $sql);
  $q = oci_execute($parsesql) or die(oci_error());
  $res = oci_commit($conn);
if ($q) {
  header('location:../index.php?hal=pelanggan');
  }
  else {echo "gagal";}

?>
