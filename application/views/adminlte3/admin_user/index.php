<?php   //privilege
print_data('get_where', array('users', array('id_user'=>$this->session->userdata('id'))), 'privilege') == 'admin';
$cetak = print_data('get_where', array('users', array('id_user'=>$this->session->userdata('id'))), 'username');
?>

<style>
 .garis_tepi1 {
   border: 2px solid skyblue;
 }
 .garis_tepi2 {
   border: 10px dotted blue;
 }
</style>
<!-- Page Header -->
<div class="page-header row no-gutters py-4">
  <div class="col-12 col-sm-12 text-center text-sm-left mb-0">
    <span class="text-uppercase page-subtitle"> SIAP KAWAL</span>
    <h1 class="page-title">ADMIN USER</h1>
  </div>
</div>
<!-- End Page Header -->

<?php if($this->session->flashdata('success')){ ?>  
 <div class="alert alert-success">  
   <a href="#" class="close" data-dismiss="alert">&times;</a>  
   <strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>  
 </div>  
<?php } else if($this->session->flashdata('error')){ ?>  
 <div class="alert alert-danger">  
   <a href="#" class="close" data-dismiss="alert">&times;</a>  
   <strong>Error!</strong> <?php echo $this->session->flashdata('error'); ?>  
 </div>  
<?php } else if($this->session->flashdata('warning')){ ?>  
 <div class="alert alert-warning">  
   <a href="#" class="close" data-dismiss="alert">&times;</a>  
   <strong>Warning!</strong> <?php echo $this->session->flashdata('warning'); ?>  
 </div>  
<?php } else if($this->session->flashdata('info')){ ?>  
 <div class="alert alert-info">  
   <a href="#" class="close" data-dismiss="alert">&times;</a>  
   <strong>Info!</strong> <?php echo $this->session->flashdata('info'); ?>  
 </div>  
<?php } ?>  


<!-- form input -->
<div class="row">
  <div class="col">
    <div class="card mb-4">

     
      <div class="card-body">

 <button type="button" data-toggle="modal" data-target="#tambah-data" class="btn btn-info mb-4" class="glyphicon glyphicon-repeat">Tambah User</button>
<br>
       <!-- TABLE -->
       <div style="overflow-x:auto;">
         <table id="example2" class="table table-bordered table-striped" style="width:auto">
          <thead class="thead-dark">
            <tr class="text-black">
              <th style="text-align: center;">No</th>
              <th style="text-align: center;">ID User</th>
              <th style="text-align: center;">Username</th>
              <th style="text-align: center;">Privilege</th>
              <th style="text-align: center;">Aksi</th>
              <!-- <th style="text-align: center;" width="200px">Aksi</th> -->
            </tr>
          </thead>

          <tbody>
            <?php 
            $no=1;
            foreach ($users as $data)
              : ?>
            <tr>
              <td style="text-align: center;" ><?php echo $no++; ?></td>
              <td style="text-align: center;"  width="150px"><?php echo $data -> id_user; ?></td>
              <td style="text-align: center;"><?php echo $data -> username; ?></td>
              <td style="text-align: center;"><?php echo $data -> privilege; ?></td>
              <td style="text-align: center;"  width="200px">
                <a class="btn btn-warning btn-sm" href="<?php echo base_url() ?>superadmin/admin_user/edit/<?php echo $data->id_user ?>">Edit</a>
                <a class="btn btn-danger btn-sm" href="<?php echo base_url(); ?>superadmin/admin_user/hapus/<?php echo $data->id_user ?>" onclick="return confirm('Yakin ingin menghapus?')" >Delete</a>
              </td>
              

            <?php endforeach ?>
          </tbody>
        </table>
        <!-- END TABLE -->
      </div>
    </div>
  </div>
</div>


<!-- Modal 1 -->
  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="tambah-data" class="modal fade">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h4 class="modal-title text-center">Form Tambah User</h4>
        </div>
        <form class="form-horizontal" action="<?php echo base_url('superadmin/admin_user/tambah_aksi')?>" method="post" enctype="multipart/form-data" role="form">
          <div class="modal-body">
            <div class="form-group">
              <label for="exampleFormControlInput1">Username</label>
              <input type="text" class="form-control" name="username" placeholder="Username" required>
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Password</label>
              <textarea name="password" class="form-control" id="exampleFormControlInput1" placeholder="Password"></textarea>
            </div>
             <div class="form-group">
              <label for="exampleFormControlInput1">Privilege</label>
              <input name="privilege" class="form-control" id="exampleFormControlInput1" placeholder="Admin" value="admin" readonly></input>
            </div>
           
          
          <div class="modal-footer">
            <button class="btn btn-info" type="submit"> Simpan&nbsp;</button>
            <!-- <p id="demo"></p> -->
            <!-- <button type="button" onclick="getLocation()">Try It</button> -->
            <button type="button" class="btn btn-danger" data-dismiss="modal"> Batal</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
<!-- END Modal Tambah -->
