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
        <h2 style="margin-top:0px">Tb_doc_foto <?php echo $button ?></h2>
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
            <label for="caption">Caption <?php echo form_error('caption') ?></label>
            <textarea class="form-control" rows="3" name="caption" id="caption" placeholder="Caption"><?php echo $caption; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="varchar">Image Name <?php echo form_error('image_name') ?></label>
            <input type="text" class="form-control" name="image_name" id="image_name" placeholder="Image Name" value="<?php echo $image_name; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Image Type <?php echo form_error('image_type') ?></label>
            <input type="text" class="form-control" name="image_type" id="image_type" placeholder="Image Type" value="<?php echo $image_type; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Image Size Str <?php echo form_error('image_size_str') ?></label>
            <input type="text" class="form-control" name="image_size_str" id="image_size_str" placeholder="Image Size Str" value="<?php echo $image_size_str; ?>" />
        </div>
	    <div class="form-group">
            <label for="google_photo_link">Google Photo Link <?php echo form_error('google_photo_link') ?></label>
            <textarea class="form-control" rows="3" name="google_photo_link" id="google_photo_link" placeholder="Google Photo Link"><?php echo $google_photo_link; ?></textarea>
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('tb_doc_foto') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>