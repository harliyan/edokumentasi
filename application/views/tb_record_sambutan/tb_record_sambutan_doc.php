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
        <h2>Tb_record_sambutan List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Id</th>
		<th>Judul</th>
		<th>Path Sambutan</th>
		<th>Nik</th>
		
            </tr><?php
            foreach ($tb_record_sambutan_data as $tb_record_sambutan)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $tb_record_sambutan->id ?></td>
		      <td><?php echo $tb_record_sambutan->judul ?></td>
		      <td><?php echo $tb_record_sambutan->path_sambutan ?></td>
		      <td><?php echo $tb_record_sambutan->nik ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>