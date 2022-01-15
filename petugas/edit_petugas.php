<div class="content-wrapper" style="min-height: 956px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        EDIT DATA PETUGAS
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
      </ol>
    </section>

 <?php
include("koneksi.php");

$stid = oci_parse($conn, "select * from petugas where KD_PETUGAS='$_GET[id]'");
            oci_execute($stid);
            while (($d = oci_fetch_array($stid, OCI_BOTH)) != false) {

?>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Form edit data petugas</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

            <form role="form" action="petugas/aksi_edit_petugas.php" method="POST">

              <div class="box-body">
                <div class="form-group">
                  <label>Kode Petugas</label>
                  <input type="text" class="form-control" placeholder="Enter Kode" name="kd_petugas" value="<?php echo $d['KD_PETUGAS'];?>">
                </div>

                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" class="form-control" placeholder="Enter Nama" name="nama_petugas" value="<?php echo $d['NAMA_PETUGAS'];?>">
                </div>

                <div class="form-group">
                	<label>Alamat</label>
                	<textarea class="form-control" name="alamat"><?php echo $d['ALAMAT'];?></textarea>
                </div>

              <!-- /.box-body -->

              <div class="box-footer">
                <input type="hidden" name="id" value="<?php echo $d['kd_petugas'];?>">
                <button type="submit" class="btn btn-primary">Ubah</button>
              </div>
            </form>

<?php } 

?>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (left) -->
        <!-- right column -->
        
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->

</div>