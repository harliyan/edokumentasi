<style>

.icon-bar {
  position: fixed;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-35%);
}

.icon-bar a {
  display: block;
  text-align: center;
  padding: 8px;
  transition: all 0.3s ease;
  color: white;
  font-size: 16px;
}

.icon-bar a:hover {
  background-color: #000;
}

.facebook {
  background: #3B5998;
  color: white;
}

.twitter {
  background: #55ACEE;
  color: white;
}

.instagram {
  background: #dd4b39;
  color: white;
}


.youtube {
  background: #bb0000;
  color: white;
}

.content {
  margin-left: 75px;
  font-size: 30px;
}
</style>

 <div class="icon-bar">
 <a href="https://www.facebook.com/HumasPemkotPekalongan" class="facebook"><i class="fa fa-facebook"></i></a> 
  <a href="https://twitter.com/HumasPemkotPkl" class="twitter"><i class="fa fa-twitter"></i></a> 
  <a href="https://www.instagram.com/humaspemkotpekalongan/" class="instagram"><i class="fa fa-instagram"></i></a> 
  <a href="https://www.youtube.com/channel/UCfs4U9SM6I8HLUb9zK1RmpQ" class="youtube"><i class="fa fa-youtube"></i></a> 

</div>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                SiapKawal v1 | Humas Kota Pekalongan © 2019<span class="d-none d-sm-inline-block"></span>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->


<!-- jQuery  -->

<script src="<?php print base_url('highfront/admin/horizontal/'); ?>assets/js/bootstrap.bundle.min.js"></script>
<script src="<?php print base_url('highfront/admin/horizontal/'); ?>assets/js/waves.js"></script>
<script src="<?php print base_url('highfront/admin/horizontal/'); ?>assets/js/jquery.slimscroll.js"></script>

<script src="<?php print base_url('highfront/admin/'); ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php print base_url('highfront/admin/'); ?>plugins/datatables/dataTables.bootstrap4.min.js"></script>
<script src="<?php print base_url('highfront/admin/'); ?>plugins/datatables/dataTables.responsive.min.js"></script>

<!-- KNOB JS -->
        <!--[if IE]>
        <script type="text/javascript" src="../plugins/jquery-knob/excanvas.js"></script>
    <![endif]-->
    <script src="<?php print base_url('highfront/admin/'); ?>plugins/jquery-knob/jquery.knob.js"></script>

    <!-- Modal-Effect -->
    <script src="<?php print base_url('highfront/admin/'); ?>plugins/custombox/js/custombox.min.js"></script>
    <script src="<?php print base_url('highfront/admin/'); ?>plugins/custombox/js/custombox.legacy.min.js"></script>

    <!-- App js -->
    <script src="<?php print base_url('highfront/admin/horizontal/'); ?>assets/js/jquery.core.js"></script>
    <script src="<?php print base_url('highfront/admin/horizontal/'); ?>assets/js/jquery.app.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>

     <script type="text/javascript">
     console.log("%cDinas Kominfo Kota Pekalongan", "color: black;");
     console.log("%c2019", "color: black;");
    </script>
