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
    <h1 class="page-title">REPORT RECORD DOWNLOAD FILE FOTO</h1>
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
          <div class="col-lg-2 col-md-2 col-sm-2 mb-4">
        <a href="<?php echo base_url('admin/mpdf_all3'); ?>"  target="_blank" class="form-control btn btn-danger"><i class="glyphicon glyphicon glyphicon-floppy-save"></i> Cetak PDF</a>
      </div> 
       <!-- TABLE -->
       <div style="overflow-x:auto;">
         <table id="example2" class="table table-bordered table-striped" style="width:auto">
          <thead class="thead-dark">
            <tr class="text-black">
              <th style="text-align: center;">No</th>
              <th style="text-align: center;">ID File</th>
              <th style="text-align: center;">Judul</th>
              <th style="text-align: center;">Google Photo Link</th>
              <th style="text-align: center;">NIK</th>
              <!-- <th style="text-align: center;" width="200px">Aksi</th> -->
            </tr>
          </thead>

          <tbody>
            <?php 
            $no=1;
            foreach ($tb_record_foto as $data)
              : ?>
            <tr>
              <td style="text-align: center;"><?php echo $no++; ?></td>
              <td style="text-align: center;"><?php echo $data -> id; ?></td>
              <td><?php echo $data -> judul; ?></td>
              <td style="text-align: center;"><?php echo $data -> google_photo_link; ?></td>
              <td style="text-align: center;"><?php echo $data -> nik; ?></td>
                

          
            <?php endforeach ?>
          </tbody>
        </table>
        <!-- END TABLE -->
      </div>
    </div>
  </div>
</div>

