  <style>
    /* Make the image fully responsive */
    .carousel-inner img {
      width: 100%;
      height: 100%;
    }
  </style>

  <div class="wrapper">
    <div class="container-fluid">
      <!-- Page-Title -->
      <div class="row">
        <div class="col-sm-12">
          <div class="page-title-box">
            <div class="btn-group float-right">
              <ol class="breadcrumb hide-phone p-0 m-0">
                <li class="breadcrumb-item"><a href="../">Home</a></li>
                <li class="breadcrumb-item">Foto</li>
              </ol>
            </div>
            <h4 class="page-title">Dokumentasi Foto</h4>
          </div>
        </div>
      </div>
      <!-- end page title end breadcrumb -->

      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="pt-3 pb-4">
            <form method="post">
              <div class="input-group">
                <input class="form-control" type="text" placeholder="Cari Foto . . ." aria-label="Search" name="keyword">
                <div class="input-group-append">
                  <button type="submit" name="search" value="search" class="btn waves-effect waves-light btn-custom"><i class="fa fa-search mr-1"></i> Mulai</button> <a class="btn btn-danger" href="<?php echo base_url('foto'); ?>" role="button"><i class="fa fa-refresh mr-1"></i>Refresh</a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <br>
      <div class="row">
        <?php
        $no = 1;
        foreach ($doc_foto as $data) : ?>
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="card-box">
              <h5 class="mb-3"><a href="<?php echo base_url() ?>foto/details/<?php echo $data->id ?>" style="color: #000000"><?php echo $data->judul; ?></h5>
              <a href="<?php echo base_url('uploads/' . $data->image_name); ?>" data-lightbox="image-1" data-title="<?php echo $data->judul; ?>"><img src="<?php echo base_url('uploads/' . $data->image_name); ?>" class="img-thumbnail" alt="Responsive image"></a>
              <p class="mt-2"><?php echo substr ($data -> caption, 0, 200); ?> [Read More]</p>
              <!-- <p class="mt-2"><?php echo $data->caption; ?></p> -->
            </div>
          </div>
        <?php endforeach ?>

      </div>
    </div>
  </div>
  </div>
  <!-- end row -->

  <div class="row">
    <div class="col">
      <!--Tampilkan pagination-->
      <?php echo $pagination; ?>
    </div>
  </div>
  <br>


  <!-- end row -->
  </div>
  <!-- end row -->

  </div> <!-- end container -->