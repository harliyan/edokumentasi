<!doctype html>
<html lang="en">
<?php $this->load->view('front/global/head'); ?>
<body>
	<?php $this->load->view('front/global/'.$topbar.''); ?>
	<?php $this->load->view('front/global/'.$menu.''); ?>
	<?php $this->load->view('front/'.$active_controller.'/'.$active_function); ?>
</div>
<!-- end wrapper -->
<?php $this->load->view('front/global/footer'); ?>
<script src="<?php print base_url('lightbox'); ?>/dist/js/lightbox.js"></script>
</body>
</html>
