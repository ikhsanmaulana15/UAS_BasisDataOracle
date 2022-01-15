<div class="content-wrapper" style="min-height: 956px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        TAMBAH DATA BARANG
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
            <form role="form" action="barang/aksi_tambah_barang.php" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label>Kode Barang</label>
                  <input type="text" class="form-control" placeholder="Kode Barang" name="kd_barang">
                </div>
                <div class="form-group">
                  <label>Kode Jenis</label>
                  <input type="text" class="form-control" placeholder="Kode Jenis" name="kd_jenis">
                </div>
                <div class="form-group">
                  <label>Kode Petugas</label>
                <input type="text" class="form-control" placeholder="Kode Petugas" name="kd_petugas">
                </div>
                <div class="form-group">
                  <label>Nama Barang</label>
                <input type="text" class="form-control" placeholder="Nama Barang" name="nama_barang">
                </div>
                <div class="form-group">
                  <label>Jumlah Barang</label>
                  <input class="form-control" name="jumlah_barang" type="number">
                </div>
                </div>

                <div class="form-group">
                  <label>Harga Barang</label>
                  <input class="form-control" name="harga" type="number">
                </div>
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