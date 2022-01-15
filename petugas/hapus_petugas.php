<?php
include("../koneksi.php");
$sql="delete from PETUGAS where KD_PETUGAS='$_GET[id]'";
$parsesql = oci_parse($conn, $sql);
$q = oci_execute($parsesql) or die(oci_error());

if ($q) {
  header("location:../index.php?hal=petugas&pesan=berhasil_hapus");
}else{
  header("location:../index.php?hal=petugas&pesan=gagal_hapus");
  $err=oci_error();
  echo "$sql";
}
?>
