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
            <li class="breadcrumb-item"><a href="../">File Desain</a></li>
            <li class="breadcrumb-item">Details</li>
          </ol>
        </div>
        <h4 class="page-title">Details Dokumentasi File Desain</h4>
      </div>
    </div>
  </div>
  <!-- end page title end breadcrumb -->
  <div class="row">
   <?php 
   foreach ($tb_doc_file as $data)
    : ?>
  <div class="col">
    <div class="card-box">
      <div class="container">
        <div class="row">
          <div class="col-sm mb-4">
           <img src="<?php echo base_url('file_desain/'. $data -> gambar_tumbnail); ?>" class="img-thumbnail" alt="Responsive image"   width="100%">
           <br>
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
          <h4 class="header-title">NAMA FILE :</h4>
          <p><?php echo $data -> path_file; ?></p>
          <h4 class="header-title">EKSTENSI FILE :</h4>
          <p><?php echo $data -> ekstensi_file; ?></p>


          <a type="button" class="btn btn-danger mt-2" data-toggle="modal" data-target="#login-modal" id="<?php echo $data->id; ?>">Klik untuk Download</a> 

          <!--  <center><input type="button" class="btn btn-info btn-sm login-modal" value="View Info" id="<?php echo $data->id; ?>"></center> -->

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
     
      <form class="form-horizontal" action="<?php echo base_url('file/tambah_aksi')?>" method="post" enctype="multipart/form-data" role="form">
        <div class="modal-body">
          <div class="form-group">
            <label for="exampleFormControlInput1">Masukan NIK Anda </label>
            <input type="text" class="form-control" name="id" placeholder="NIK" value="<?php echo $data->id; ?>" hidden>
            <input type="text" class="form-control" name="judul" placeholder="NIK" value="<?php echo $data->judul; ?>" hidden>
            <input type="text" class="form-control" name="path_file" placeholder="NIK" value="<?php echo $data->path_file; ?>" hidden>
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

<script src="<?php print base_url('pdfobject'); ?>/pdfobject.js"></script>
<script>PDFObject.embed("<?php print base_url('file_sambutan'); ?>/<?php echo $data -> path_sambutan; ?>", "#example1");</script>
<script type="text/javascript">
  $(function () {
    document.addEventListener("pagerendered", function (e) {
      $('#print').hide();
      $('#viewBookmark').hide();
      $('#openFile').hide();
    });
  });

  function checkLength(el) {
    if (el.value.length != 16) {
      alert("NIK harus berisi 16 digit angka")
    }
  }
</script>
