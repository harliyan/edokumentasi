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
        <h2 style="margin-top:0px">Tb_doc_video <?php echo $button ?></h2>
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
            <label for="link_youtube">Link Youtube <?php echo form_error('link_youtube') ?></label>
            <textarea class="form-control" rows="3" name="link_youtube" id="link_youtube" placeholder="Link Youtube"><?php echo $link_youtube; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="embed_link">Embed Link <?php echo form_error('embed_link') ?></label>
            <textarea class="form-control" rows="3" name="embed_link" id="embed_link" placeholder="Embed Link"><?php echo $embed_link; ?></textarea>
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('tb_doc_video') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>