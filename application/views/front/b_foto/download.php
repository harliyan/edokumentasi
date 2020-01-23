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
            <li class="breadcrumb-item"><a href="../">File Foto</a></li>
            <li class="breadcrumb-item">Download</li>
          </ol>
        </div>
        <h4 class="page-title">Download File Desain</h4>
      </div>
    </div>
  </div>
  <!-- end page title end breadcrumb -->
  <div class="row">
   <?php 
   foreach ($tb_doc_foto as $data)
    : ?>
  <div class="col">
    <div class="card-box">
     <center> <div class="container">
        <div class="row">
         
          <div class="col-sm">
     
            <h4 class="header-title">EKSTENSI FILE :</h4>
            <p><?php echo $data -> image_name; ?></p>

         <a  download="Siap Kawal" class="btn w-lg btn-rounded btn-custom waves-effect waves-light" type="submit" href="<?php echo base_url() ?>file_sambutan/<?php echo $data->image_name ?>">Download</a>

          </div>

        </div>
      </div> </center>
    <?php endforeach ?>


  </div> 
</div> 
</div> 
</div>
</div>
</div>
</div>
</div>

