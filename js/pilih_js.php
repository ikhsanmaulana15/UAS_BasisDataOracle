<?php
    if (isset($_GET['hal'])) {

        if ($_GET['hal']=='pelanggan') {
          include "js/js_tabel.php";
        }
        elseif ($_GET['hal']=='tambah_pelanggan') {
          include "js/js2.php";
        }
        elseif ($_GET['hal']=='edit_pelanggan') {
          include "js/js2.php";
        }
      

         if ($_GET['hal']=='petugas') {
          include "js/js_tabel.php";
        }
        elseif ($_GET['hal']=='tambah_petugas') {
          include "js/js2.php";
        }
        elseif ($_GET['hal']=='edit_petugas') {
          include "js/js2.php";
        }
     

        if ($_GET['hal']=='barang') {
          include "js/js_tabel.php";
        }
        elseif ($_GET['hal']=='tambah_barang') {
          include "js/js2.php";
        }
        elseif ($_GET['hal']=='edit_barang') {
          include "js/js2.php";
        }
       
if ($_GET['hal']=='jenis_barang') {
          include "js/js_tabel.php";
        }
        elseif ($_GET['hal']=='tambah_jenis_barang') {
          include "js/js2.php";
        }
        elseif ($_GET['hal']=='edit_jenis_barang') {
          include "js/js2.php";
        }

if ($_GET['hal']=='transaksi2') {
          include "js/js_tabel.php";
        }
        elseif ($_GET['hal']=='tambah_transaksi') {
          include "js/js2.php";
        }
        elseif ($_GET['hal']=='edit_transaksi') {
          include "js/js2.php";
        }
        elseif ($_GET['hal']=='transaksi2') {
          include "js/js2.php";
        }

    }else{
    include "js/js1.php";
    }
?>




