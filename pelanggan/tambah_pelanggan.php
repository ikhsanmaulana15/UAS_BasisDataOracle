<div class="content-wrapper" style="min-height: 956px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        TAMBAH DATA PELANGGAN
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="pelanggan/aksi_tambah_pelanggan.php" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label>Kode Pelanggan</label>
                  <input type="text" class="form-control" placeholder="Kode Pelanggan" name="kd_pelanggan">
                </div>
                <div class="form-group">
                  <label>Nama Pelanggan</label>
                  <input type="text" class="form-control" placeholder="Nama Pelanggan" name="nama_pel">
                </div>
                <div class="form-group">
                  <label>Alamat Pelanggan</label>
                  <input type="text" class="form-control" placeholder="Alamat Pelanggan" name="alamat_pel">
                </div>
                
                <div class="form-group">
                  <label>No. Telp</label>
                  <input class="form-control" name="no_telp" type="number">
                </div>
              
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Tambah</button>
              </div>
            </form>
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