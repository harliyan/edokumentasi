        <!-- Page Header -->
        <div class="page-header row no-gutters py-4">
          <div class="col-12 col-sm-12 text-center text-sm-left mb-0">
            <span class="text-uppercase page-subtitle"> Home</span>
            <h1 class="page-title">DATA E-DOKUMENTASI</h1>
          </div>
        </div>
        <!-- End Page Header -->

        <div class="row">
          <div class="col-lg col-md-12 col-sm-12 mb-4">
            <div class="stats-small stats-small--1 card card-small">
              <div class="card-body p-0 d-flex">
                <div class="d-flex flex-column m-auto">
                  <div class="stats-small__data text-center">
                    <span class="stats-small__label text-uppercase">Data Foto</span>
                    <center><font size="20" face="Kalam" color="#31708F"><?php echo $get_foto_count[0]->count; ?></font> </center>
                    <!--  <h6 class="stats-small__value count my-3"><?php echo $get_foto_count[0]->count; ?></h6> -->
                  </div>
                  <div class="stats-small__data">
                   <span class="stats-small__percentage stats-small__percentage--increase">DATA</span>
                 </div>
               </div>
               <canvas height="120" class="blog-overview-stats-small-1"></canvas>
             </div>
           </div>
         </div>
         <div class="col-lg col-md-12 col-sm-12 mb-4">
          <div class="stats-small stats-small--1 card card-small">
            <div class="card-body p-0 d-flex">
              <div class="d-flex flex-column m-auto">
                <div class="stats-small__data text-center">
                  <span class="stats-small__label text-uppercase">Data Video</span>
                  <center><font size="20" face="Kalam" color="#31708F"><?php echo $get_video_count[0]->count; ?></font> </center>
                </div>
                <div class="stats-small__data">
                  <span class="stats-small__percentage stats-small__percentage--increase">DATA</span>
                </div>
              </div>
              <canvas height="120" class="blog-overview-stats-small-3"></canvas>
            </div>
          </div>
        </div>
        <div class="col-lg col-md-12 col-sm-12 mb-4">
          <div class="stats-small stats-small--1 card card-small">
            <div class="card-body p-0 d-flex">
              <div class="d-flex flex-column m-auto">
                <div class="stats-small__data text-center">
                  <span class="stats-small__label text-uppercase">Data File Sambutan</span>
                   <center><font size="20" face="Kalam" color="#31708F"><?php echo $get_sambutan_count[0]->count; ?></font> </center>
                </div>
                <div class="stats-small__data">
                  <span class="stats-small__percentage stats-small__percentage--increase">DATA</span>
                </div>
              </div>
              <canvas height="120" class="blog-overview-stats-small-4"></canvas>
            </div>
          </div>
        </div>
        <div class="col-lg col-md-12 col-sm-12 mb-4">
          <div class="stats-small stats-small--1 card card-small">
            <div class="card-body p-0 d-flex">
              <div class="d-flex flex-column m-auto">
                <div class="stats-small__data text-center">
                  <span class="stats-small__label text-uppercase">Data File Desain</span>
                  <center><font size="20" face="Kalam" color="#31708F"><?php echo $get_file_count[0]->count; ?></font> </center>
                </div>
                <div class="stats-small__data">
                  <span class="stats-small__percentage stats-small__percentage--increase">DATA</span>
                </div>
              </div>
              <canvas height="120" class="blog-overview-stats-small-4"></canvas>
            </div>
          </div>
        </div>
      </div>
      
      <!-- graph -->
      <div class="row">
       <div class="col">
        <div class="card">
          <div>
         <canvas id="myChart" width="500" height="200"></canvas>
         <br>
        </div>
        </div>
      </div>
    </div>

<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Foto', 'Video', 'Sambutan', 'File Desain'],
        datasets: [{
            label: 'Grafik Data',
            data: [<?php echo $get_foto_count[0]->count; ?>, <?php echo $get_video_count[0]->count; ?>, <?php echo $get_sambutan_count[0]->count; ?>, <?php echo $get_file_count[0]->count; ?>],
            backgroundColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
             
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
              
            ],
            borderWidth: 2
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>