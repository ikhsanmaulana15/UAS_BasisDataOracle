<div class="content-wrapper" style="min-height: 956px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        EDIT DATA TRANSAKSI
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
      </ol>
    </section>

 <?php
include("koneksi.php");

$stid = oci_parse($conn, "select * from transaksi where KD_TRANSAKSI ='$_GET[id]'");
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
              <h3 class="box-title">Form edit data transaksi</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

            <form role="form" action="transaksi/aksi_edit_transaksi.php" method="POST">

              <div class="box-body">
                <div class="form-group">
                  <label>Kode Pelanggan</label>
                  <input type="text" class="form-control" placeholder="Enter Kode transaksi" name="kd_pelanggan" value="<?php echo $d['KD_PELANGGAN'];?>">
                </div>


                <div class="box-body">
                <div class="form-group">
                  <label>Kode Barang</label>
                  <input type="text" class="form-control" placeholder="Enter Kode Jenis" name="kd_barang" value="<?php echo $d['KD_BARANG'];?>">
                </div>

                <div class="box-body">
                <div class="form-group">
                  <label>Kode Petugas</label>
                  <input type="text" class="form-control" placeholder="Enter Kode Petugas" name="kd_petugas" value="<?php echo $d['KD_PETUGAS'];?>">
                </div>


                <div class="form-group">
                  <label>Jumlah Beli</label>
                  <input type="number" class="form-control"  name="jumlah_beli" value="<?php echo $d['JUMLAH_BELI'];?>">
                </div>

                <div class="form-group">
                  <label>Total Harga</label>
                  <input type="number" class="form-control"  name="total_harga" value="<?php echo $d['TOTAL_HARGA'];?>">
                </div>

                <div class="form-group">
                  <label>Jumlah Bayar</label>
                  <input type="number" class="form-control"  name="jumlah_bayar" value="<?php echo $d['JUMLAH_BAYAR'];?>">
                </div>

                <div class="form-group">
                  <label>Kembalian</label>
                  <input type="number" class="form-control"  name="kembalian" value="<?php echo $d['KEMBALIAN'];?>">
                </div>
 
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="hidden" name="id" value="<?php echo $d['KD_transaksi'];?>">
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