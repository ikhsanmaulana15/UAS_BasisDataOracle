
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Barang
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Data Barang</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
                    
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <a href="index.php?hal=tambah_barang">
              <input type="button" value="Tambah" class="btn btn-primary" name="">
              </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Kode Barang</th>
                  <th>Kode Jenis</th>
                  <th>Kode Petugas</th>
                  <th>Nama Barang</th>
                  <th>Jumlah Barang</th>
                  <th>Harga</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
<?php

include 'koneksi.php';
            $stid = oci_parse($conn, 'SELECT * from BARANG');
            oci_execute($stid);
            $no=1;
            while (($d = oci_fetch_array($stid, OCI_BOTH)) != false) {
              ?>
                <tr>
                  <td><?php echo $no; $no++;?></td>
                  <td><?php echo $d['KD_BARANG']?></td>
                  <td><?php echo $d['KD_JENIS']?></td>
                  <td><?php echo $d['KD_PETUGAS']?></td>
                  <td><?php echo $d['NAMA_BARANG']?></td>
                  <td><?php echo $d['JUMLAH_BARANG']?></td>
                  <td><?php echo $d['HARGA']?></td>
                  
                  <td><a href="index.php?hal=edit_barang&id=<?php echo $d['KD_BARANG']?>"><button type="button" class="btn btn-warning" name=""> <i class="fa fa-pencil"></i> Edit</button></a>
                    <a onclick="return confirm('Anda Yakin...?')" href="barang/hapus_barang.php?id=<?php echo $d['KD_BARANG']?>">
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