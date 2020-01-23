    <div class="wrapper">
      <div class="container-fluid">
        <!-- Page-Title -->
        <div class="row">
          <div class="col-sm-12">
            <div class="page-title-box">
              <div class="btn-group float-right">
                <ol class="breadcrumb hide-phone p-0 m-0">
                  <li class="breadcrumb-item"><a href="home">Home</a></li>
                  <li class="breadcrumb-item">File Desain</li>
                </ol>
              </div>
              <h4 class="page-title">Dokumentasi File Desain</h4>
            </div>
          </div>
        </div>
        <!-- end page title end breadcrumb -->
        <div class="row">
          <div class="col-md-8 offset-md-2">
            <div class="pt-3 pb-4">
              <form method="post">
                <div class="input-group">
                  <input class="form-control" type="text" placeholder="Cari File . . ." aria-label="Search" name="keyword">
                  <div class="input-group-append">
                    <button type="submit" name="search" value="search" class="btn waves-effect waves-light btn-custom"><i class="fa fa-search mr-1"></i> Mulai</button>  <a class="btn btn-danger" href="<?php echo base_url('file'); ?>" role="button"><i class="fa fa-refresh mr-1"></i>Refresh</a>
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
          foreach ($doc_file as $data) : ?>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card-box">
                <center>
                  <h4 class="header-title"><?php echo $data->judul; ?></h4>
                </center>
                 <a href="<?php echo base_url('file_desain/' . $data->gambar_tumbnail); ?>" data-lightbox="image-1" data-title="<?php echo $data->judul; ?>"><img src="<?php echo base_url('file_desain/' . $data->gambar_tumbnail); ?>" class="img-thumbnail mb-4" alt="Responsive image"></a>
                 
                <!-- <center> <h4 class="header-title"><?php echo $data->ekstensi_file; ?></h4></center> -->
                <?php if ($data->ekstensi_file == 'doc') {
                  echo '<center><img height="120" src="https://siapkawal.pekalongankota.go.id/highfront/file_icons/doc.svg"/></center>';
                }
                if ($data->ekstensi_file == 'cdr') {
                  echo '<center><img height="120" src="https://siapkawal.pekalongankota.go.id/highfront/file_icons/cdr.svg"/></center>';
                }
                if ($data->ekstensi_file == 'psd') {
                  echo '<center><img height="120" src="https://siapkawal.pekalongankota.go.id/highfront/file_icons/psd.svg"/></center>';
                }
                if ($data->ekstensi_file == 'exe') {
                  echo '<center><img height="120" src="https://siapkawal.pekalongankota.go.id/highfront/file_icons/exe.svg"/></center>';
                }
                if ($data->ekstensi_file == 'jpg') {
                  echo '<center><img height="120" src="https://siapkawal.pekalongankota.go.id/highfront/file_icons/jpg.svg"/></center>';
                }
                if ($data->ekstensi_file == 'jpeg') {
                  echo '<center><img height="120" src="https://siapkawal.pekalongankota.go.id/highfront/file_icons/jpg.svg"/></center>';
                }
                if ($data->ekstensi_file == 'png') {
                  echo '<center><img height="120" src="https://siapkawal.pekalongankota.go.id/highfront/file_icons/png.svg"/></center>';
                }
                if ($data->ekstensi_file == 'ai') {
                  echo '<center><img height="120" src="https://siapkawal.pekalongankota.go.id/highfront/file_icons/ai.svg"/></center>';
                }
                if ($data->ekstensi_file == 'svg') {
                  echo '<center><img height="120" src="https://siapkawal.pekalongankota.go.id/highfront/file_icons/svg.svg"/></center>';
                }
                if ($data->ekstensi_file == 'eps') {
                  echo '<center><img height="120" src="https://siapkawal.pekalongankota.go.id/highfront/file_icons/eps.svg"/></center>';
                }
                if ($data->ekstensi_file == 'zip') {
                  echo '<center><img height="120" src="https://siapkawal.pekalongankota.go.id/highfront/file_icons/zip.svg"/></center>';
                }
                if ($data->ekstensi_file == 'cat') {
                  echo '<center><img height="120" src="https://siapkawal.pekalongankota.go.id/highfront/file_icons/cat.svg"/></center>';
                }

                if ($data->ekstensi_file == 'html') {
                  echo '<center><img height="120" src="https://siapkawal.pekalongankota.go.id/highfront/file_icons/html.svg"/></center>';
                }
                if ($data->ekstensi_file == 'raw') {
                  echo '<center><img height="120" src="https://siapkawal.pekalongankota.go.id/highfront/file_icons/raw.svg"/></center>';
                } else if ($data->ekstensi_file == 'pdf') {
                  echo '<center><img height="120" src="https://siapkawal.pekalongankota.go.id/highfront/file_icons/pdf.svg"/></center>';
                }
                ?>
                <center><p class="mt-3" style="margin-bottom: 0;"><?php echo $data->caption; ?></p></center>
                <center><p>Nama File : <?php echo $data->path_file; ?></p></center>
                <center><a class="btn btn-light btn-sm" href="<?php echo base_url() ?>file/details/<?php echo $data->id ?>">Lihat Details</a></center>
                <!--       <button type="button" class="btn btn-info btn-sm waves-effect float-right" data-toggle="modal" data-target="#login-modal">Download Desain</button> -->
                <br>
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

    <!-- Modal -->
    <div id="custom-modal" class="modal-demo">
      <button type="button" class="close" onclick="Custombox.modal.close();">
        <span>&times;</span><span class="sr-only">Close</span>
      </button>
      <h4 class="custom-modal-title">Detail File Desain</h4>
      <div class="custom-modal-text">
        <form class="form-horizontal" action="#">

          <div class="form-group m-b-25">
            <div class="col-12">
              <label for="emailaddress3">Judul File</label>
              <input class="form-control" type="text" id="emailaddress3" placeholder="<?php echo $data->judul; ?>" disabled>
            </div>
          </div>
          <div class="form-group m-b-25">
            <div class="col-12">
              <label for="emailaddress3">Caption File</label>
              <input class="form-control" type="text" id="emailaddress3" placeholder="<?php echo $data->caption; ?>" disabled>
            </div>
          </div>
          <div class="form-group m-b-25">
            <div class="col-12">
              <label for="emailaddress3">Ekstensi File : <?php echo $data->ekstensi_file; ?></label>
            </div>
          </div>

          <div class="form-group m-b-25">
            <div class="col-12">
              <label for="emailaddress3">Gambar Tumbnail</label>
              <br>
              <center><img src="<?php echo base_url('file_desain/' . $data->gambar_tumbnail); ?>" class="img-thumbnail" alt="Responsive image" height="180" width="180"></center>
            </div>
          </div>


        </form>
      </div>
    </div>

    <!-- Modal -->
    <div id="verif" class="modal-demo">
      <button type="button" class="close" onclick="Custombox.modal.close();">
        <span>&times;</span><span class="sr-only">Close</span>
      </button>
      <h4 class="custom-modal-title">Detail File Desain</h4>
      <div class="custom-modal-text">
        <form class="form-horizontal" action="#">


          <!-- <button class="btn w-lg btn-rounded btn-custom waves-effect waves-light" type="submit">Sign In</button> -->
      </div>
    </div>

    </form>
    </div>
    </div>

    <!-- Signup modal content -->
    <div id="login-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
            <h2 class="text-uppercase text-center m-b-30">
            </h2>
            <form class="form-horizontal" action="#">
              <div class="form-group m-b-25">
                <div class="col-12">
                  <center><label for="emailaddress1">Masukan NIK untuk Download</label></center>
                  <input class="form-control" type="number" id="emailaddress1" required="" placeholder="332511040578XX">
                </div>
              </div>

              <div class="form-group account-btn text-center m-t-10">
                <div class="col-12">
                  <!--    <a class="btn w-lg btn-rounded btn-custom waves-effect waves-light" href="<?php print base_url('download/'); ?>Laporan Telecenter Kota Pekalongan.pdf"> -->
                  <a class="btn w-lg btn-rounded btn-custom waves-effect waves-light" type="submit" href="#">Download</a>
                </div>
              </div>

            </form>

          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
