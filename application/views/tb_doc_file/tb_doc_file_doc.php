<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            .word-table {
                border:1px solid black !important; 
                border-collapse: collapse !important;
                width: 100%;
            }
            .word-table tr th, .word-table tr td{
                border:1px solid black !important; 
                padding: 5px 10px;
            }
        </style>
    </head>
    <body>
        <h2>Tb_doc_file List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Date</th>
		<th>Judul</th>
		<th>Caption</th>
		<th>Gambar Tumbnail</th>
		<th>Path File</th>
		<th>Ekstensi File</th>
		<th>Google Drive Link</th>
		
            </tr><?php
            foreach ($tb_doc_file_data as $tb_doc_file)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $tb_doc_file->date ?></td>
		      <td><?php echo $tb_doc_file->judul ?></td>
		      <td><?php echo $tb_doc_file->caption ?></td>
		      <td><?php echo $tb_doc_file->gambar_tumbnail ?></td>
		      <td><?php echo $tb_doc_file->path_file ?></td>
		      <td><?php echo $tb_doc_file->ekstensi_file ?></td>
		      <td><?php echo $tb_doc_file->google_drive_link ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>