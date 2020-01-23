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
        <h2 style="margin-top:0px">Tb_doc_file List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('tb_doc_file/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('tb_doc_file/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('tb_doc_file'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-primary" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Date</th>
		<th>Judul</th>
		<th>Caption</th>
		<th>Gambar Tumbnail</th>
		<th>Path File</th>
		<th>Ekstensi File</th>
		<th>Google Drive Link</th>
		<th>Action</th>
            </tr><?php
            foreach ($tb_doc_file_data as $tb_doc_file)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $tb_doc_file->date ?></td>
			<td><?php echo $tb_doc_file->judul ?></td>
			<td><?php echo $tb_doc_file->caption ?></td>
			<td><?php echo $tb_doc_file->gambar_tumbnail ?></td>
			<td><?php echo $tb_doc_file->path_file ?></td>
			<td><?php echo $tb_doc_file->ekstensi_file ?></td>
			<td><?php echo $tb_doc_file->google_drive_link ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('tb_doc_file/read/'.$tb_doc_file->id),'Read'); 
				echo ' | '; 
				echo anchor(site_url('tb_doc_file/update/'.$tb_doc_file->id),'Update'); 
				echo ' | '; 
				echo anchor(site_url('tb_doc_file/delete/'.$tb_doc_file->id),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
				?>
			</td>
		</tr>
                <?php
            }
            ?>
        </table>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
		<?php echo anchor(site_url('tb_doc_file/excel'), 'Excel', 'class="btn btn-primary"'); ?>
		<?php echo anchor(site_url('tb_doc_file/word'), 'Word', 'class="btn btn-primary"'); ?>
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
    </body>
</html>