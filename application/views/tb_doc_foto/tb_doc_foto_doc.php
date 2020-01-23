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
        <h2>Tb_doc_foto List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Date</th>
		<th>Judul</th>
		<th>Caption</th>
		<th>Image Name</th>
		<th>Image Type</th>
		<th>Image Size Str</th>
		<th>Google Photo Link</th>
		
            </tr><?php
            foreach ($tb_doc_foto_data as $tb_doc_foto)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $tb_doc_foto->date ?></td>
		      <td><?php echo $tb_doc_foto->judul ?></td>
		      <td><?php echo $tb_doc_foto->caption ?></td>
		      <td><?php echo $tb_doc_foto->image_name ?></td>
		      <td><?php echo $tb_doc_foto->image_type ?></td>
		      <td><?php echo $tb_doc_foto->image_size_str ?></td>
		      <td><?php echo $tb_doc_foto->google_photo_link ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>