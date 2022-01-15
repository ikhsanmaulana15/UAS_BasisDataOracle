<div class="content-wrapper" style="min-height: 956px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        EDIT DATA BARANG
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
      </ol>
    </section>

 <?php
include("koneksi.php");

$stid = oci_parse($conn, "select * from BARANG where KD_BARANG ='$_GET[id]'");
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
              <h3 class="box-title">Form edit data barang</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

            <form role="form" action="BARANG/aksi_edit_barang.php" method="POST">

              <div class="box-body">
                <div class="form-group">
                  <label>Kode barang</label>
                  <input type="text" class="form-control" placeholder="Enter Kode Barang" name="kd_barang" value="<?php echo $d['KD_BARANG'];?>">
                </div>


                <div class="box-body">
                <div class="form-group">
                  <label>Kode jenis</label>
                  <input type="text" class="form-control" placeholder="Enter Kode Jenis" name="kd_jenis" value="<?php echo $d['KD_JENIS'];?>">
                </div>

                <div class="box-body">
                <div class="form-group">
                  <label>Kode petugas</label>
                  <input type="text" class="form-control" placeholder="Enter Kode Petugas" name="kd_petugas" value="<?php echo $d['KD_PETUGAS'];?>">
                </div>


                <div class="form-group">
                  <label>Nama barang</label>
                  <input type="text" class="form-control" placeholder="Enter Nama" name="nama_barang" value="<?php echo $d['NAMA_BARANG'];?>">
                </div>

                <div class="form-group">
                  <label>Jumlah Barang</label>
                  <input type="number" class="form-control" placeholder="Enter Jumlah" name="jumlah_barang" value="<?php echo $d['JUMLAH_BARANG'];?>">
                </div>

                <div class="form-group">
                  <label>Harga</label>
                  <input type="number" class="form-control" placeholder="Enter Harga" name="harga" value="<?php echo $d['HARGA'];?>">
                </div>
 
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="hidden" name="id" value="<?php echo $d['KD_BARANG'];?>">
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