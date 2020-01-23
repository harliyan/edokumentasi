<style>
  .pdfobject-container { height: 30rem; border: 1rem solid rgba(0,0,0,.1); }
</style>

<div class="wrapper">
  <div class="container-fluid">
   <!-- Page-Title -->
   <div class="row">
    <div class="col-sm-12">
      <div class="page-title-box">
        <div class="btn-group float-right">
          <ol class="breadcrumb hide-phone p-0 m-0">
            <li class="breadcrumb-item"><a href="../../">Home</a></li>
            <li class="breadcrumb-item"><a href="../">Foto</a></li>
            <li class="breadcrumb-item">Details</li>
          </ol>
        </div>
        <h4 class="page-title">Details Foto</h4>
      </div>
    </div>
  </div>
  <!-- end page title end breadcrumb -->
  <br>
  <div class="row">
   <?php 
   foreach ($tb_doc_foto as $data)
    : ?>
  <div class="col">
    <div class="card-box">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="container">
              <div class="row">
                <div class="col-sm">
                  <h4 class="header-title">TUMBNAIL FOTO KEGIATAN :</h4>
                  <a href="<?php echo base_url('uploads/'. $data -> image_name); ?>" data-lightbox="image-1" data-title="<?php echo $data -> judul; ?>" ><img src="<?php echo base_url('uploads/'. $data -> image_name); ?>" class="img-thumbnail" alt="Responsive image" ></a>
                </div>


                <div class="col-sm">
                  <h4 class="header-title">JUDUL :</h4>
                  <p><?php echo $data -> judul; ?></p>
                  <h4 class="header-title">CAPTION :</h4>
                  <p><?php echo $data -> caption; ?></p>
                  <h4 class="header-title">TANGGAL UPLOAD :</h4>
                  <p><?php echo substr ($data -> date, 0, 10); ?></p>
                  <h4 class="header-title">JAM UPLOAD :</h4>
                  <p><?php echo substr ($data -> date, 11); ?></p>
                 <!--  <h4 class="header-title">TUMBNAIL NAME :</h4>
                  <p><?php echo $data -> image_name; ?></p>
                  <h4 class="header-title">TUMBNAIL IMAGE TYPE :</h4>
                  <p><?php echo $data -> image_type; ?></p>
                  <h4 class="header-title">TUMBNAIL IMAGE SIZE :</h4>
                  <p><?php echo $data -> image_size_str; ?></p> -->

                  <a type="button" class="btn btn-danger" data-toggle="modal" data-target="#login-modal" id="<?php echo $data->id; ?>">Klik untuk Download</a> 

                  <!-- <button type="button" class="btn btn-danger mt-4" data-toggle="modal" data-target="#login-modal">Klik untuk Download</button> -->
                </div>
              </div>
            </div>
          <?php endforeach ?>


        </div> 
      </div> 
    </div> 
  </div>
</div>
</div>
</div>
</div>

<!-- Modal 1 -->
  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="login-modal" class="modal fade">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
       
        <form class="form-horizontal" action="<?php echo base_url('foto/tambah_aksi')?>" method="post" enctype="multipart/form-data" role="form"> 
          <div class="modal-body">
            <div class="form-group">
              <label for="exampleFormControlInput1">Masukan NIK Anda </label>
              <input type="text" class="form-control" name="id" placeholder="NIK" value="<?php echo $data->id; ?>" hidden>
              <input type="text" class="form-control" name="judul" placeholder="NIK" value="<?php echo $data->judul; ?>" hidden>
             <!--  <input type="text" class="form-control" name="image_name" placeholder="NIK" value="<?php echo $data->image_name; ?>" hidden> -->
              <input type="text" class="form-control" name="google_photo_link" placeholder="NIK" value="<?php echo $data->google_photo_link; ?>" hidden>
                 <input  onblur="checkLength(this)" id="groupidtext" type="number" class="form-control" name="nik" id="nik" placeholder="NIK"   maxlength="16" required>
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

<script>
function checkLength(el) {
  if (el.value.length != 16) {
    alert("NIK harus berisi 16 digit angka")
  }
}
</script>