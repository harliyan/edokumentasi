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
        <h2>Counter List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Ip</th>
		<th>Id Berita</th>
		<th>Browser</th>
		<th>Tanggal</th>
		
            </tr><?php
            foreach ($counter_data as $counter)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $counter->ip ?></td>
		      <td><?php echo $counter->id_berita ?></td>
		      <td><?php echo $counter->browser ?></td>
		      <td><?php echo $counter->tanggal ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>