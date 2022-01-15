<!DOCTYPE html>

<?php
include "style/pilih_style.php";
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword">

    <title>Login Toko Laris</title>

  </head>

<body class="hold-transition login-page">
<body style="background-image :url(dist/img/index2.jpg);
        background-repeat: no-repeat;
            color:#fff;">

<div class="login-box">
  <div class="login-logo">
    <a href="index.php"><b>Welcome To </b>Toko Laris</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Silahkan Login</p>

    <form action="proses_login.php" method="post">

      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Username">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>

      <div class="row">
        <div class="col-xs-8">
        </div>
       <div class="col-xs-4" >
        <!-- /.col -->
          <button type="submit" class="btn btn-primary btn-block btn-flat" >Login</button>
        </div>
        </div>
        <!-- /.col -->
      </div>
    </form>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

</body>
</html>

