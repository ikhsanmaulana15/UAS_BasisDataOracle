  <!DOCTYPE html>
<?php 
   include 'koneksi.php';
   include'fungsi/fungsi_indotgl.php';
   include'fungsi/fungsi_rupiah.php';
       header('Content-type: application/vnd-ms-excel');
       header('Content-Disposition: attachment;filename=LaporanPenjualanTokoLaris.xls');  ?>
  <html>
  <head>
    <title><h3><center>Laporan Penjualan Toko Laris</center></h3></title>
  </head>
       
    <body>
      <div class="row">
        <div class="col-xs-12">         
            <!-- /.box-header -->
            <h3><center>Laporan Penjualan Toko Laris</center></h3>
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
              </tbody>  
              </table>
<br>
</br>
              <div class="row">
        <div class="col-xs-12">
            <!-- /.box-header -->
            <div class="box-body">
            <div class="pull-right">
  

            <h5><center>Cikarang Selatan, <?php echo tgl_indo($tang); ?></center> </h5>
            <b><center>Manager Perusahaan</center></b>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <b><center>Sanna Setia</center></b>

            </div>
          </div>
        </div>
      </div>

      </div>
    </div>
  </div>

 </body>
 </html>