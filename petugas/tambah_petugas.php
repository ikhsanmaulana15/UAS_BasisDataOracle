<div class="content-wrapper" style="min-height: 956px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        TAMBAH DATA PETUGAS
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
            <form role="form" action="petugas/aksi_tambah_petugas.php" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label>Kode Petugas</label>
                  <input type="text" class="form-control" placeholder="Kode Petugas" name="kd_petugas">
                </div>
               
                <div class="form-group">
                  <label>Nama Petugas</label>
                  <input type="text" class="form-control" placeholder="Nama Petugas" name="nama_petugas">
                </div>

                <div class="form-group">
                  <label>Alamat Petugas</label>
                  <input type="text" class="form-control" placeholder="Alamat" name="alamat">
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