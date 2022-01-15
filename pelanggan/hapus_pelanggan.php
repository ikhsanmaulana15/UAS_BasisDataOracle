<?php
include("../koneksi.php");
$sql="delete from PELANGGAN where KD_PELANGGAN='$_GET[id]'";
$parsesql = oci_parse($conn, $sql);
$q = oci_execute($parsesql) or die(oci_error());

if ($q) {
  header("location:../index.php?hal=pelanggan&pesan=berhasil_hapus");
}else{
  header("location:../index.php?hal=pelanggan&pesan=gagal_hapus");
  $err=oci_error();
  echo "$sql";
}
?>
