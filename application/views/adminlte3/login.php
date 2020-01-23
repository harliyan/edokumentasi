<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>DOKUMENTASI</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- icon -->
  <link rel="shortcut icon" href="<?php print base_url('Shards-Dashboard'); ?>/boy.ico" type="image/x-icon">
  <link rel="icon" href="<?php print base_url('Shards-Dashboard'); ?>/boy.ico" type="image/x-icon">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php print base_url('adminlte3/'); ?>dist/css/adminlte.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php print base_url('adminlte3/'); ?>plugins/iCheck/square/blue.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
  <!-- <img src="<?php print base_url('adminlte3/'); ?>dist/img/statistik2.jpg" style="position: absolute; width: 100%; height: 100%; z-index: -1;  "> -->
  <?php
  if($this->session->flashdata('login_gagal')){
    echo
    '<div class="alert alert-danger text-center">'.
    $this->session->flashdata('login_gagal').'</div>';
  } ?>
  <div class="login-box">
    <div class="login-logo">
      <div>
      </div>
      <font color="black">E<b> DOKUMENTASI</b></font>
      
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg text-muted">Masuk untuk memulai sesi Anda</p>
         

        <form action="<?=base_url('auth/cek_login');?> " method="post">
          <div class="form-group has-feedback">
            <input type="username" name="username" class="form-control" placeholder="Username">
            <!--   <span class="fa fa-envelope form-control-feedback"></span> -->
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="password" class="form-control" placeholder="Password">
            <!--  <span class="fa fa-lock form-control-feedback"></span> -->
          </div>
          <div class="row">
            <div class="col-6">
              <div class="checkbox icheck">
                 <a type="submit" class="btn btn-info btn-block btn-flat" href="<?=base_url('home');?>">Home</a>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-6">
              <button type="submit" class="btn btn-danger btn-block btn-flat">Masuk</button>
            </div>

            <!-- /.col -->
          </div>
        
        </form>

        
        <!-- /.social-auth-links -->

        
 <!--        <p class="mb-0">
          <a href=user/register class="text-dark">Daftar Sebagai Pelamar</a>
          <br>
          <a href=user/info class="text-dark">Informasi</a>
        </p> -->
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="<?php print base_url('adminlte3/'); ?>plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?php print base_url('adminlte3/'); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- iCheck -->
  <script src="<?php print base_url('adminlte3/'); ?>plugins/iCheck/icheck.min.js"></script>
  <script>
    $(function () {
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass   : 'iradio_square-blue',
      increaseArea : '20%' // optional
    })
    })
  </script>
</body>
</html>