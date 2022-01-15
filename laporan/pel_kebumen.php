
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Laporan Pelanggan Kebumen
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Laporan Pelanggan Kebumen</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
                    
          <!-- /.box -->

          <div class="box">
            
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
                  <th>No.Telp</th>
                  
                </tr>
                </thead>
                <tbody>
<?php

include 'koneksi.php';

           $no = 1;
           $stid = oci_parse($conn, 'SELECT * from PELANGGAN_KEBUMEN');
          oci_execute($stid);
          while (($d = oci_fetch_array ($stid, OCI_BOTH)) != false) {
            ?>
                <tr>
                  <td><?php echo $no ++ ?></td>
                  <td><?php echo $d['KD_PELANGGAN']?></td>
                  <td><?php echo $d['NAMA_PEL']?></td>
                  <td><?php echo $d['ALAMAT_PEL']?></td>
                  <td><?php echo ($d['NO_TELP'])?></td>
                  
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