<div class="content-wrapper" style="min-height: 956px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        TAMBAH DATA TRANSAKSI
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
            <form role="form" action="transaksi/aksi_tambah_transaksi.php" method="post">
              <div class="box-body">

                <div class="form-group">
                  <label for= "Pelanggan">Pilih Nama Pembeli</label>
                  <select name = 'kd_pelanggan' class="form-control"> 
                  <?php  
                  include 'koneksi.php';
                  $stid = oci_parse($conn, 'SELECT * from PELANGGAN');
                  oci_execute($stid);
                  while (($d = oci_fetch_array($stid, OCI_BOTH)) != false){
                  $kd_pelanggan= $d['KD_PELANGGAN'];
                  $nama_pel= $d['NAMA_PEL'];
                  $alamat_pel= $d['ALAMAT_PEL'];
                  $no_telp= $d['NO_TELP'];
                  echo "<option value = '$kd_pelanggan'>$nama_pel</option>";
                  }
                  ?>
                  </select>

                </div>

                <div class="form-group">
                  <label for= "barang">Pilih Nama Barang</label>
                  <select name = 'kd_barang' class="form-control"> 
                  <?php  
                  include 'koneksi.php';
                  $stid = oci_parse($conn, 'SELECT * from BARANG');
                  oci_execute($stid);
                  while (($d = oci_fetch_array($stid, OCI_BOTH)) != false){
                  $kd_barang = $d['KD_BARANG'];
                  $kd_jenis = $d['KD_JENIS'];
                  $kd_petugas = $d['KD_PETUGAS'];
                  $nama_barang = $d['NAMA_BARANG'];
                  $jumlah_barang = $d['JUMLAH_BARANG'];
                  $harga = $d['HARGA'];
                  echo "<option value = '$kd_barang'>$nama_barang</option>";
                  }
                  ?>
                  </select>

                </div>

                <div class="form-group">
                  <label for= "barang">Pilih Nama Petugas</label>
                  <select name = 'kd_petugas' class="form-control"> 
                  <?php  
                  include 'koneksi.php';
                  $stid = oci_parse($conn, 'SELECT * from PETUGAS');
                  oci_execute($stid);
                  while (($d = oci_fetch_array($stid, OCI_BOTH)) != false){
                  $kd_petugas = $d['KD_PETUGAS'];
                  $nama_petugas = $d['NAMA_PETUGAS'];
                  $alamat = $d['ALAMAT'];
                  
                  echo "<option value = '$kd_petugas'>$nama_petugas</option>";
                  }
                  ?>
                  </select>
                </div>

                <div class="form-group">
                  <label>Jumlah Beli</label>
                  <input class="form-control" name="jumlah_beli" type="number">
                </div>

                <div class="form-group">
                <input class="form-control" name="total_harga" type="hidden" >
                </div>


                <div class="form-group">
                  <label>Jumlah Bayar</label>
                  <input class="form-control" name="jumlah_bayar" type="number">
                </div>

                <div class="form-group">
                  <input class="form-control" name="kembalian" type="hidden" >
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