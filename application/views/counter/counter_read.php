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
        <h2 style="margin-top:0px">Counter Read</h2>
        <table class="table">
	    <tr><td>Ip</td><td><?php echo $ip; ?></td></tr>
	    <tr><td>Id Berita</td><td><?php echo $id_berita; ?></td></tr>
	    <tr><td>Browser</td><td><?php echo $browser; ?></td></tr>
	    <tr><td>Tanggal</td><td><?php echo $tanggal; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('counter') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>