<?php
include("koneksi.php");
$barang = "select count(*) as JUM from BARANG ";
$sumParse = oci_parse($conn, $barang);
oci_define_by_name($sumParse, "JUM", $barang);
oci_execute($sumParse);
while(oci_fetch($sumParse))

$jenis = "select count(*) as JUM from JENIS_BARANG ";
$sumParse = oci_parse($conn, $jenis);
oci_define_by_name($sumParse, "JUM", $jenis);
oci_execute($sumParse);
while(oci_fetch($sumParse))

  $pelanggan = "select count(*) as JUM from PELANGGAN ";
$sumParse = oci_parse($conn, $pelanggan);
oci_define_by_name($sumParse, "JUM", $pelanggan);
oci_execute($sumParse);
while(oci_fetch($sumParse))

$transaksi = "select count(*) as JUM from TRANSAKSI";
$sumParse = oci_parse($conn, $transaksi);
oci_define_by_name($sumParse, "JUM", $transaksi);
oci_execute($sumParse);
while(oci_fetch($sumParse)){{{{

?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <h3>Welcome <?php echo $user = $_SESSION['username'] ?></h3>

     </h4>

      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3 class="card-title"><?php echo $barang ;  } ?>

              <p>Data Barang</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3 class="card-title"><?php echo $jenis ;  } ?>

              <p>Jenis Barang</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3 class="card-title"><?php echo $pelanggan ;  } ?>

              <p>Data Pelanggan</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3 class="card-title"><?php echo $transaksi ;  } ?>

              <p>Data Transaksi</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>


      <!-- /.row -->
      <!-- Main row -->
      
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>