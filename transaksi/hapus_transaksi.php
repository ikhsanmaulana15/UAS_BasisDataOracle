<?php
include("../koneksi.php");

$sql="delete from TRANSAKSI where KD_TRANSAKSI='$_GET[id]'";
$parsesql = oci_parse($conn, $sql);
$q = oci_execute($parsesql) or die(oci_error());

if ($q) {
  header("location:../index.php?hal=transaksi&pesan=berhasil_hapus");
}else{
  header("location:../index.php?hal=transaksi&pesan=gagal_hapus");
  $err=oci_error();
  echo "$sql";
}
?>
