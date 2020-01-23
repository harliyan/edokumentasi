<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Tb_doc_foto Read</h2>
        <table class="table">
	    <tr><td>Date</td><td><?php echo $date; ?></td></tr>
	    <tr><td>Judul</td><td><?php echo $judul; ?></td></tr>
	    <tr><td>Caption</td><td><?php echo $caption; ?></td></tr>
	    <tr><td>Image Name</td><td><?php echo $image_name; ?></td></tr>
	    <tr><td>Image Type</td><td><?php echo $image_type; ?></td></tr>
	    <tr><td>Image Size Str</td><td><?php echo $image_size_str; ?></td></tr>
	    <tr><td>Google Photo Link</td><td><?php echo $google_photo_link; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('tb_doc_foto') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>