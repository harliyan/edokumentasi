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
    <h1 class="page-title">INPUT DATA FILE DESAIN</h1>
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
  <div class="col-lg-6">
    <div class="card mb-4">
      <div class="card-body">
        <p class="card-text">Masukan Video Kegiatan</p>
        <button type="button" data-toggle="modal" data-target="#tambah-data" class="btn btn-info" class="glyphicon glyphicon-repeat">Tambah File dan Deskripsi</button>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col">
    <div class="card mb-4">
      <div class="card-body">
        <!-- TABLE -->
        <div style="overflow-x:auto;">
         <table id="example2" class="table table-bordered table-striped" style="width:auto">
           <thead class="thead-dark">
            <tr class="text-black">
              <th style="text-align: center;">No</th>
              <th style="text-align: center;">Judul File</th>
              <th style="text-align: center;">Deskripsi</th>
              <th style="text-align: center;">Tumbnail</th>
              <th style="text-align: center;">File Desain Lokal</th>
              <th style="text-align: center;">Ekstensi File Desain</th>
              <th style="text-align: center;">Google Drive Link</th>
              <th style="text-align: center;" width="200px">Aksi</th>


            </tr>
          </thead>

          <tbody>
            <?php 
            $no=1;
            foreach ($doc_file as $data)
              : ?>
            <tr>
              <td style="text-align: center;"><?php echo $no++; ?></td>
              <td style="text-align: center;"><?php echo $data -> judul; ?></td>
              <td style="text-align: center;"><?php echo $data -> caption; ?></td>
              <td style="text-align: center;"><a href="<?php echo base_url('file_desain/'. $data -> gambar_tumbnail); ?>" data-lightbox="image-1" data-title="<?php echo $data -> judul; ?>" ><img src="<?php echo base_url('file_desain/'. $data -> gambar_tumbnail); ?>" class="img-thumbnail" style="width:70px; height:auto;" alt="Responsive image" ></a></td>
              <td style="text-align: center;"><?php echo $data -> path_file; ?></td>
              <td style="text-align: center;"><?php echo $data -> ekstensi_file; ?></td>
               <td style="text-align: center;"><?php echo $data -> google_drive_link; ?></td>
              <td style="text-align: center;">
                <a class="btn btn-warning btn-sm" href="<?php echo base_url() ?>admin/input_file/edit/<?php echo $data->id ?>">Edit</a>
                <a class="btn btn-danger btn-sm" href="<?php echo base_url(); ?>admin/input_file/hapus/<?php echo $data->id ?>" onclick="return confirm('Yakin ingin menghapus?')" >Delete</a>
              </td>
            <?php endforeach ?>
          </tbody>  
        </table>
      </div>
      </div>
      </div>

    <!-- Modal 1 -->
    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="tambah-data" class="modal fade">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header text-center">
            <h4 class="modal-title text-center">Form Input File Desain</h4>
          </div>
          <form class="form-horizontal" action="<?php echo base_url('admin/input_file/tambah_aksi')?>" method="post" enctype="multipart/form-data" role="form">
            <div class="modal-body">
              <div class="form-group">
                <label for="exampleFormControlInput1">Judul Desain</label>
                <input type="text" class="form-control" name="judul" placeholder="Masukan Judul Desain" required>
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput1">Caption/Deskripsi</label>
                <textarea name="caption" class="form-control" id="exampleFormControlInput1"  cols="2" rows="10" placeholder="Masukan Captions atau deskripsi" required></textarea>
              </div>
              <div>
               <label for="exampleFormControlInput1">Upload File Desain (Max 8MB)</label>
               <label for="exampleFormControlInput1" class="text-danger">Kosongkan saat upload file ke Google Drive</label>
               <label for="exampleFormControlInput1" class="text-danger">Untuk File ekstensi .cdr dibuat .zip terlebih dahulu</label>
             </div>
             <br>
             <div class="form-group">
              <input type="file" name="path_file" class="form-control-file" id="path_file">
            </div>
            <br>
            <div>
             <label for="exampleFormControlInput1">Gambar Tumbnail Desain (Max 2MB)</label>
           </div>
           <br>
           <div class="form-group">
            <input type="file" name="gambar_tumbnail" class="form-control-file" id="gambar_tumbnail">
          </div>
          <br>
          <div class="form-group">
           <div class="form-group">
            <label for="exampleFormControlSelect1">Ekstensi File Desain</label>
            <select class="form-control" name="ekstensi_file" required>
              <option value="">Pilih Ekstensi File Desain</option>
              <option value ="jpg">jpg</option>
              <option value ="jpeg">jpeg</option>
              <option value ="jpe">jpe</option>
              <option value ="png">png</option>
              <option value ="ai">ai</option>
              <option value ="psd">psd</option>
              <option value ="eps">eps</option>
              <option value ="zip">zip</option>
              <option value ="pdf">pdf</option>
              <option value ="cat">cat</option>
              <option value ="raw">raw</option>
              <option value ="gif">gif</option>
              <option value ="ods">ods</option>
              <option value ="odt">odt</option>
              <option value ="odp">odp</option>
              <option value ="ppt">ppt</option>
            </select>
          </div>
        </div>
        <div class="form-group">
                <label for="exampleFormControlInput1">Google Drive Link</label>
                <input type="text" class="form-control" name="google_drive_link" placeholder="Masukan Link Google Drive" required>
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
