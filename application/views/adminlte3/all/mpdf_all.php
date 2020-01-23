<!DOCTYPE html>
<html>
    <head>
        <title>Laporan</title>
</head>
<body>	
<div class="row">
	<div class="col 6">
		<h2 class="text-center" style="text-align: center;">Laporan Download File Sambutan</h2>
	</div>
</div>


<br>
<p style="font-size:11px;">Tanggal Cetak : <?php echo date("D-d/m/Y") ?></p>

     <table border="1"  align="center" cellpadding="2" cellspacing="2" >
     	<thead>
        <tr>
        <th style="text-align: center; font-size:11px;">No</th>
        <th  style="text-align: center; font-size:11px;">ID File</th>
        <th  style="text-align: center; font-size:11px;">Judul</th>
        <th  style="text-align: center; font-size:11px;">Path File</th>
        <th  style="text-align: center; font-size:11px;">NIK</th>
        </tr>
    </thead>

       <tbody>
        <?php 
        $no=1;
        $data = $this->db->get('tb_record_sambutan')->result();
        foreach ($data as $data): ?>
    <tr>
      <td style="text-align: center; font-size:11px;"><?php echo $no++; ?></td>
      <td style="text-align: center; font-size:11px;"><?php echo $data -> id; ?></td>
      <td style="text-align: center; font-size:11px;"><?php echo $data -> judul; ?></td>
      <td style="text-align: center; font-size:11px;"><?php echo $data -> path_sambutan; ?></td>
      <td style="text-align: center; font-size:11px;"><?php echo $data -> nik; ?></td>



    


   <?php endforeach ?>

     </tbody>
    </table>
</html>