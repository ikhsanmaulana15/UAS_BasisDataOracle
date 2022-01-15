<?php
    if (isset($_GET['hal'])) {

        if ($_GET['hal']=='jenis_barang') {
          include "jenis_barang/jenis_barang.php";
        }
        elseif ($_GET['hal']=='tambah_jenis_barang') {
          include "jenis_barang/tambah_jenis_barang.php";
        }
        elseif ($_GET['hal']=='edit_jenis_barang') {
          include "jenis_barang/edit_jenis_barang.php";
        }

        if ($_GET['hal']=='petugas') {
          include "petugas/petugas.php";
        }
        elseif ($_GET['hal']=='tambah_petugas') {
          include "petugas/tambah_petugas.php";
        }
        elseif ($_GET['hal']=='edit_petugas') {
          include "petugas/edit_petugas.php";
        }

        if ($_GET['hal']=='barang') {
          include "barang/barang.php";
        }
        elseif ($_GET['hal']=='tambah_barang') {
          include "barang/tambah_barang.php";
        }
        elseif ($_GET['hal']=='edit_barang') {
          include "barang/edit_barang.php";
        }
               
        if ($_GET['hal']=='transaksi') {
          include "transaksi/transaksi.php";
        }
        elseif ($_GET['hal']=='tambah_transaksi') {
          include "transaksi/tambah_transaksi.php";
        }
        elseif ($_GET['hal']=='edit_transaksi') {
          include "transaksi/edit_transaksi.php";
        }

        elseif ($_GET['hal']=='transaksi2') {
          include "transaksi/transaksi2.php";
        }

        if ($_GET['hal']=='laporan') {
          include "laporan/laporan.php";
        }
        elseif ($_GET['hal']=='cetak') {
          include "laporan/cetak.php";
        }
        elseif ($_GET['hal']=='cetak_excel') {
          include "laporan/cetak_excel.php";
        }
        elseif ($_GET['hal']=='pel_kebumen') {
          include "laporan/pel_kebumen.php";
        }

        if ($_GET['hal']=='pelanggan') {
          include "pelanggan/pelanggan.php";
        }
        elseif ($_GET['hal']=='tambah_pelanggan') {
          include "pelanggan/tambah_pelanggan.php";
        }
        elseif ($_GET['hal']=='edit_pelanggan') {
          include "pelanggan/edit_pelanggan.php";
        }
        
        if ($_GET['hal']=='logout') {
          include "logout/logout.php";
        }


    }else{
    include "home.php";
    }
?>


