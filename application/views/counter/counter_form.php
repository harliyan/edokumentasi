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
        <h2 style="margin-top:0px">Counter <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Ip <?php echo form_error('ip') ?></label>
            <input type="text" class="form-control" name="ip" id="ip" placeholder="Ip" value="<?php echo $ip; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Id Berita <?php echo form_error('id_berita') ?></label>
            <input type="text" class="form-control" name="id_berita" id="id_berita" placeholder="Id Berita" value="<?php echo $id_berita; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Browser <?php echo form_error('browser') ?></label>
            <input type="text" class="form-control" name="browser" id="browser" placeholder="Browser" value="<?php echo $browser; ?>" />
        </div>
	    <div class="form-group">
            <label for="datetime">Tanggal <?php echo form_error('tanggal') ?></label>
            <input type="text" class="form-control" name="tanggal" id="tanggal" placeholder="Tanggal" value="<?php echo $tanggal; ?>" />
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('counter') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>