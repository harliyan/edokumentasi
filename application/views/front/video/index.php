    <style type="text/css">
      .stretched-link::after {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 1;
        pointer-events: auto;
        content: "";
        background-color: rgba(0, 0, 0, 0);
      }

      @media screen and (max-width: 767px){
       .btn-danger {
         background: transparent;
         border: none;
         /* etc */
       }
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
                <li class="breadcrumb-item"><a href="home">Home</a></li>
                <li class="breadcrumb-item">Video</li>
              </ol>
            </div>
            <h4 class="page-title">Dokumentasi Video</h4>
          </div>
        </div>
      </div>
      <!-- end page title end breadcrumb -->
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="pt-3 pb-4">
            <form method="post">
              <div class="input-group">
                <input class="form-control" type="text" placeholder="Cari Video . . ." aria-label="Search" name="keyword">
                <div class="input-group-append">
                  <button type="submit" name="search" value="search" class="btn waves-effect waves-light btn-custom"><i class="fa fa-search mr-1"></i> Mulai</button>  <a class="btn btn-danger" href="<?php echo base_url('video'); ?>" role="button"><i class="fa fa-refresh mr-1"></i>Refresh</a>
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
        foreach ($doc_video as $data) : 
          $coba = $data->embed_link;
          ?>
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="card-box">
              <h5 ><?php echo $data->judul; ?></h5>
              <a class="show-modal" data-url="<?= $coba ?>"><img src="<?php echo base_url('uploads/' . $data->gambar_tumbnail); ?>" class="img-thumbnail mt-2" alt="Responsive image"> </a>
               <p class="mt-2"><?php echo substr ($data -> caption, 0, 200); ?> [Read More]</p>
         <!-- <p class="mt-2"><?php echo $data->caption; ?></p> -->
         <a class="btn btn-danger float-right" href="<?= $data->embed_link; ?>" role="button" target="_blank">Link Youtube</a>
         <br>
         <br>
       </div>
     </div>
   <?php endforeach ?>

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
</div>
<!-- end row -->
</div> <!-- end container -->

<!-- Modal 1 -->
  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="login-modal" class="modal fade">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
       
        <form class="form-horizontal" action="<?php echo base_url('sambutan/tambah_aksi')?>" method="post" enctype="multipart/form-data" role="form"> 
          <div class="modal-body">
            <div class="form-group">
                 <iframe id="modalVideo" width="765" height="325" src="" frameborder="0" allowfullscreen></iframe>
            </div>
            
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal"> Batal</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
<!-- END Modal Tambah -->

<script type="text/javascript">
$(document).ready(function(){
    /* Get iframe src attribute value i.e. YouTube video url
    and store it in a variable */
    //var url = $("#modalVideo").attr('src');
    
    /* Assign empty url value to the iframe src attribute when
    modal hide, which stop the video playing */

    $("#login-modal").on('hide.bs.modal', function(){
      //alert("OK");return false;
        $("#modalVideo").attr('src', '');
    });
    
    /* Assign the initially stored url back to the iframe src
    attribute when modal is displayed again */
    

    $(".show-modal").click(function(){
      //alert("OK");return false;
      //alert($(this).data('url'));
      var url = $(this).data('url');
      console.log(url);
      $("#modalVideo").attr('src', url);
        $("#login-modal").modal({

            backdrop: 'static',

            keyboard: false

        });

    });
});
</script>
