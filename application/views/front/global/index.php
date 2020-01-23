<!doctype html>
<html lang="en">

<?php

$data_header = isset($data_header) ? $data_header : [];
?>

<?php $this->load->view('front/global/head', $data_header); ?>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TPMD3ZP"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    
	<?php $this->load->view('front/global/'.$topbar.''); ?>
	<?php $this->load->view('front/global/'.$menu.''); ?>
	<?php $this->load->view('front/'.$active_controller.'/'.$active_function); ?>
</div>
<!-- end wrapper -->

<?php $this->load->view('front/global/footer'); ?>
<script src="<?php print base_url('lightbox'); ?>/dist/js/lightbox.js"></script>

</body>
</html>
