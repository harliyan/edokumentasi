

<!-- Page Header -->
<div class="page-header row no-gutters py-4">
  <div class="col-12 col-sm-12 text-center text-sm-left mb-0">


    <span class="text-uppercase page-subtitle">EDIT</span>
    <h1 class="page-title">UBAH DATA SIAP KAWAL</h1>
  </div>
</div>
<!-- End Page Header -->
<div class="card-header">
  <section class="content">

   <?php foreach($tb_telecenter as $data){ ?>

    <div class="card-body">
      <div class="tab-content">
        <form class="form-horizontal" action="<?php echo site_url(). '/superadmin/admin_user/update'; ?>" role="form" method="post"> 
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
              <a class="navbar-brand" href="#pablo" style="color: #1d1124"><b>ID User</b></a>
              <input type="text" class="form-control" name="id_user" placeholder="ID Desa" value="<?php echo $data->id_user ?>" readonly>
              <a class="navbar-brand" href="#pablo" style="color: #1d1124"><b>Username</b></a>
              <input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo $data->username ?>">

               <a class="navbar-brand" href="#pablo" style="color: #1d1124"><b>Password</b></a>
              <input type="password" class="form-control" name="password" placeholder="Password" value="<?php echo $data->password ?>">

              <br>
              <button class="btn btn-info" type="submit"> Simpan&nbsp;</button>
              <a class="btn btn-danger" href="<?php echo base_url() ?>superadmin/admin_user">Batal</a>
            </div>
          </form>
        <?php } ?>
      </section>
    </div>
