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

<!--   <div class="container-fluid">
   <div class="row">
    <div class="col">
    Total Pengunjung : 244
  </div> -->

  <br>
  <br>
  <div class="container">
    <div class="row">
     <?php 
     $data = $tb_doc_foto;
     ?>
   </div>
   <div class="col">
    <div class="container">
     <div class="card-box">
      <div class="row">
        <div class="col">
          <div class="container">
            <div class="row">
              <h3 class="header-title text-center mb-4"><?php echo $data -> judul; ?></h3>
              <a href="<?php echo base_url('uploads/'. $data -> image_name); ?>" data-lightbox="image-1" data-title="<?php echo $data -> judul; ?>" ><img src="<?php echo base_url('uploads/'. $data -> image_name); ?>" class="img-thumbnail" alt="Responsive image" ></a>
            </div>
            <div class="title-wrap title-wrap--line"></div>
            <br>
            <br>
            <div class="container-fluid">
             <!--  <h1><?php $count_my_page = ("hitcounter.txt"); $hits = file($count_my_page); $hits[0] ++; $fp = fopen($count_my_page , "w"); fputs($fp , "$hits[0]"); fclose($fp); echo $hits[0]; ?></h1> -->
             <p class="mt-4"><?php echo $data -> caption; ?></p>
             <center><p><small>Klik tombol di bawah dan masukan NIK untuk melihat dan mengunduh <br>dokumentasi foto lainnya pada Kegiatan ini</small></p></center>
             <center><a type="button" class="btn btn-danger" data-toggle="modal" data-target="#login-modal" id="<?php echo $data->id; ?>">Klik untuk Download</a> </center>
           </div>
         </div>
       </div>
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
            <label for="exampleFormControlInput1">Masukan 16 Digit NIK Anda </label>
            <input type="text" class="form-control" name="id" placeholder="NIK" value="<?php echo $data->id; ?>" hidden>
            <input type="text" class="form-control" name="judul" placeholder="NIK" value="<?php echo $data->judul; ?>" hidden>
            <input type="text" class="form-control" name="google_photo_link" placeholder="Nomer Induk Kependudukan" value="<?php echo $data->google_photo_link; ?>" hidden>
            <input  onblur="checkLength(this)" id="groupidtext" type="number" class="form-control" name="nik" id="nik" placeholder="Nomer Induk Kependudukan"   maxlength="16" required>
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
