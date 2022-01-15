
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Pelanggan
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Data Pelanggan</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
                    <?php
            if (isset($_GET['pesan'])) {
                if ($_GET['pesan']=='berhasil_tambah') {
                  echo "
                        <div class='alert alert-success alert-dismissible'>
                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                        <i class='icon fa fa-check'></i> Tambah Data Berhasil..!
                        </div>
                        ";
                }
                if ($_GET['pesan']=='gagal_tambah') {
                  echo "
                        <div class='alert alert-danger alert-dismissible'>
                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                        <i class='icon fa fa-check'></i> Tambah Data Gagal..!
                        </div>
                        ";
                }
                if ($_GET['pesan']=='berhasil_edit') {
                  echo "
                        <div class='alert alert-success alert-dismissible'>
                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                        <i class='icon fa fa-check'></i> Edit Data Berhasil..!
                        </div>
                        ";
                }
                if ($_GET['pesan']=='gagal_edit') {
                  echo "
                        <div class='alert alert-danger alert-dismissible'>
                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                        <i class='icon fa fa-check'></i> Edit Data Gagal..!
                        </div>
                        ";
                }
                 if ($_GET['pesan']=='berhasil_hapus') {
                  echo "
                        <div class='alert alert-success alert-dismissible'>
                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                        <i class='icon fa fa-check'></i> Hapus Data Berhasil..!
                        </div>
                        ";
                }
                if ($_GET['pesan']=='gagal_hapus') {
                  echo "
                        <div class='alert alert-denger alert-dismissible'>
                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                        <i class='icon fa fa-check'></i> Hapus Data Gagal..!
                        </div>
                        ";
                }
            }
          ?>
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <a href="index.php?hal=tambah_pelanggan">
              <input type="button" value="Tambah" class="btn btn-primary" name="">
              </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>

                <tr>
                  <th>No</th>
                  <th>Kode Pelanggan</th>
                  <th>Nama Pelanggan</th>
                  <th>Alamat Pelanggan</th>
                  <th>N0. Telpon</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
<?php

include 'koneksi.php';
            $stid = oci_parse($conn, 'SELECT * from PELANGGAN');
            oci_execute($stid);
            $no=1;
            while (($d = oci_fetch_array($stid, OCI_BOTH)) != false) {
              ?>

                <tr>
                  <td><?php echo $no; $no++;?></td>
                  <td><?php echo $d['KD_PELANGGAN']?></td>
                  <td><?php echo $d['NAMA_PEL']?></td>
                  <td><?php echo $d['ALAMAT_PEL']?></td>
                  <td><?php echo $d['NO_TELP']?></td>

                  <td><a href="index.php?hal=edit_pelanggan&id=<?php echo $d['KD_PELANGGAN']?>"><button type="button" class="btn btn-warning" name=""> <i class="fa fa-pencil"></i> Edit</button></a>
                    <a onclick="return confirm('Anda Yakin...?')" href="pelanggan/hapus_pelanggan.php?id=<?php echo $d['KD_PELANGGAN']?>">
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