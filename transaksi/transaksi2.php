
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Transaksi
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Data Transaksi</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
                    
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <a href="index.php?hal=tambah_transaksi">
              <input type="button" value="Tambah" class="btn btn-primary" name="">
              </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Kode Transaksi</th>
                  <th>Tanggal</th>
                  <th>Kode Pelanggan</th>
                  <th>Kode Barang</th>
                  <th>Kode Petugas</th>
                  <th>Jumlah Beli</th>
                  <th>Total Harga</th>
                  <th>Jumlah Bayar</th>
                  <th>Kembalian</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
<?php

include 'koneksi.php';
            $stid = oci_parse($conn, 'SELECT * from TRANSAKSI');
            oci_execute($stid);
            
            while (($d = oci_fetch_array($stid, OCI_BOTH)) != false) {
              ?>
                <tr>

                  <td><?php echo $d['KD_TRANSAKSI']?></td>
                  <td><?php echo $d['TANGGAL']?></td>
                  <td><?php echo $d['KD_PELANGGAN']?></td>
                  <td><?php echo $d['KD_BARANG']?></td>
                  <td><?php echo $d['KD_PETUGAS']?></td>
                  <td><?php echo $d['JUMLAH_BELI']?></td>
                  <td><?php echo $d['TOTAL_HARGA']?></td>
                  <td><?php echo $d['JUMLAH_BAYAR']?></td>
                  <td><?php echo $d['KEMBALIAN']?></td>
                  
                  <td><a href="index.php?hal=edit_transaksi&id=<?php echo $d['KD_TRANSAKSI']?>"><button type="button" class="btn btn-warning" name=""> <i class="fa fa-pencil"></i> Edit</button></a>
                    <a onclick="return confirm('Anda Yakin...?')" href="transaksi/hapus_transaksi.php?id=<?php echo $d['KD_TRANSAKSI']?>">
                    <button type="button" class="btn btn-danger" name=""> <i class="fa fa-trash"></i> Hapus</button></a>
                  </td>
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