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
        <h2 style="margin-top:0px">Tb_doc_file <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="timestamp">Date <?php echo form_error('date') ?></label>
            <input type="text" class="form-control" name="date" id="date" placeholder="Date" value="<?php echo $date; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Judul <?php echo form_error('judul') ?></label>
            <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul" value="<?php echo $judul; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Caption <?php echo form_error('caption') ?></label>
            <input type="text" class="form-control" name="caption" id="caption" placeholder="Caption" value="<?php echo $caption; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Gambar Tumbnail <?php echo form_error('gambar_tumbnail') ?></label>
            <input type="text" class="form-control" name="gambar_tumbnail" id="gambar_tumbnail" placeholder="Gambar Tumbnail" value="<?php echo $gambar_tumbnail; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Path File <?php echo form_error('path_file') ?></label>
            <input type="text" class="form-control" name="path_file" id="path_file" placeholder="Path File" value="<?php echo $path_file; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Ekstensi File <?php echo form_error('ekstensi_file') ?></label>
            <input type="text" class="form-control" name="ekstensi_file" id="ekstensi_file" placeholder="Ekstensi File" value="<?php echo $ekstensi_file; ?>" />
        </div>
	    <div class="form-group">
            <label for="google_drive_link">Google Drive Link <?php echo form_error('google_drive_link') ?></label>
            <textarea class="form-control" rows="3" name="google_drive_link" id="google_drive_link" placeholder="Google Drive Link"><?php echo $google_drive_link; ?></textarea>
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('tb_doc_file') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>