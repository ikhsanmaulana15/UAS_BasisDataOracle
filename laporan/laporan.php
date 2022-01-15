
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Laporan 
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Laporan Penjualan Toko Laris</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
                    
          <!-- /.box -->

          <div class="box">
            
            <div class="box-header">
              <br>
              <a class='btn btn-success' href='index.php?hal=cetak'  target="_blank"> <i class='fa fa-print'></i> Print</a>

              <a class='btn btn-primary' href='excel.php' target="_blank"> <i class='fa fa-table '></i> xls</a>
        <br><br>

            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Kode Transaksi</th>
                  <th>Tanggal</th>
                  <th>Nama Pelanggan</th>
                  <th>Nama Barang</th>
                  <th>Nama Petugas</th>
                  <th>Jumlah Beli</th>
                  <th>Harga</th>
                  <th>Total Harga</th>
                  <th>Jumlah Bayar</th>
                  <th>Kembalian</th>
                  
                </tr>
                </thead>
                <tbody>
<?php

include 'koneksi.php';
include'fungsi/fungsi_indotgl.php';
include'fungsi/fungsi_rupiah.php';
          
           $no = 1;
           $total_semua = 0;
           $kembalian_semua = 0;
           $stid = oci_parse($conn, 'SELECT pelanggan.*, barang.*, petugas.*, transaksi.* FROM transaksi 
transaksi INNER JOIN pelanggan pelanggan ON transaksi.kd_pelanggan = pelanggan.kd_pelanggan INNER JOIN barang barang ON transaksi.kd_barang = barang.kd_barang INNER JOIN petugas petugas ON transaksi.kd_petugas = petugas.kd_petugas ORDER BY transaksi.kd_transaksi ASC');
          oci_execute($stid);
          while (($d = oci_fetch_array ($stid, OCI_BOTH)) != false) {
          $total = $d["HARGA"] * $d["JUMLAH_BELI"];
          $total_semua += $total; 
          $kembalian = $d["JUMLAH_BAYAR"] - $total;
          $kembalian_semua += $kembalian;
          $tang = $d["TANGGAL"];
            ?>
                <tr>
                  <td><?php echo $no ++ ?></td>
                  <td><?php echo $d['KD_TRANSAKSI']?></td>
                  <td><?php echo tgl_indo($tang)?></td>
                  <td><?php echo $d['NAMA_PEL']?></td>
                  <td><?php echo $d['NAMA_BARANG']?></td>
                  <td><?php echo $d['NAMA_PETUGAS']?></td>
                  <td><?php echo $d['JUMLAH_BELI']?></td>
                  <td><?php echo rupiah($d['HARGA'])?></td>
                  <td><?php echo rupiah($total) ?></td>
                  <td><?php echo rupiah($d['JUMLAH_BAYAR'])?></td>
                  <td><?php echo rupiah($kembalian) ?></td>
                  
                </tr>
<?php } ?>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>