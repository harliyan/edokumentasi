

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
        <form class="form-horizontal" action="<?php echo site_url(). '/admin/input_file/update'; ?>" role="form" method="post"> 
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
              <a class="navbar-brand" href="#pablo" style="color: #1d1124"><b>ID Sambutan</b></a>
              <input type="text" class="form-control" name="id" placeholder="ID Desa" value="<?php echo $data->id ?>" readonly>
              <a class="navbar-brand" href="#pablo" style="color: #1d1124"><b>Judul Sambutan</b></a>
              <input type="text" class="form-control" name="judul" placeholder="ID Desa" value="<?php echo $data->judul ?>">
              <a class="navbar-brand" href="#pablo" style="color: #1d1124"><b>Caption Sambutan</b></a>
              <textarea class="form-control" name="caption"  cols="2" rows="10" placeholder="Enter ..."><?php echo $data->caption ?></textarea>

              <a class="navbar-brand" href="#pablo" style="color: #1d1124"><b>Ekstensi file</b></a>
              <input type="text" class="form-control" name="ekstensi_file" placeholder="ID Desa" value="Path sebelumnya : <?php echo $data->ekstensi_file ?>" readonly>

               <select class="form-control" name="ekstensi_file" placeholder="Masukan Jenis Kelamin" value="<?php echo $data->ekstensi_file ?>"  required>
                 <option value="">Pilih Ekstensi File Desain</option>
                    <option value ="cdr">cdr</option>
                    <option value ="ai">ai</option>
                    <option value ="psd">psd</option>
                    <option value ="jpg">jpg</option>
                    <option value ="jpeg">jpeg</option>
                    <option value ="png">png</option>
                    <option value ="cat">cat</option>
                    <option value ="raw">raw</option>
                    <option value ="pdf">pdf</option>
              </select>



             <a class="navbar-brand" href="#pablo" style="color: #1d1124"><b>Path File</b></a>
             <input type="text" class="form-control" name="path_file"  value="<?php echo $data->path_file ?>" readonly>
                 <a class="navbar-brand" href="#pablo" style="color: #1d1124"><b>Link Google Drive</b></a>
              <input type="text" class="form-control" name="google_drive_link" placeholder="Link Google Drive" value="<?php echo $data->google_drive_link ?>">
           </div>
           <br> 
           <br> 
           <div class="col-lg-6 col-md-6 col-sm-6">
            <a href="<?php echo base_url('file_desain/'. $data -> gambar_tumbnail); ?>" data-lightbox="image-1" data-title="<?php echo $data -> judul; ?>" ><img src="<?php echo base_url('file_desain/'. $data -> gambar_tumbnail); ?>" class="img-thumbnail mt-4" alt="Responsive image" ></a>

            <br>

            <br>
            <button class="btn btn-info" type="submit"> Simpan&nbsp;</button>
            <a class="btn btn-danger" href="<?php echo base_url() ?>admin/input_file">Batal</a>
          </div>
        </form>
      <?php } ?>
    </section>
  </div>
