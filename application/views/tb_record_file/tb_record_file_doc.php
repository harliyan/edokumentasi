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
        <h2>Tb_record_file List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Id</th>
		<th>Judul</th>
		<th>Path File</th>
		<th>Nik</th>
		
            </tr><?php
            foreach ($tb_record_file_data as $tb_record_file)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $tb_record_file->id ?></td>
		      <td><?php echo $tb_record_file->judul ?></td>
		      <td><?php echo $tb_record_file->path_file ?></td>
		      <td><?php echo $tb_record_file->nik ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>