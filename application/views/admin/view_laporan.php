<!DOCTYPE html>
<html>
<head>
	<title>Laporan</title>
	<style type="text/css">
		html, body{
			height: 100%;
		}
		body{
			padding:10px;
			border: 1px solid #333;
		}
		h1{
			text-align: center;

		}
		th{
			background-color: #333;
			color: white;
		}
		#box-tbl{
			margin-top: 40px: 
		}
	</style>
</head>
<body>
	<h1>Laporan total hasil orderan</h1>

	<hr>
	<div id="box-tbl">
		<table border="1" cellpadding="10" cellspacing="0" style="margin: auto;">
			<tr>
				<th>Nama</th>
				<th>Alamat</th>
				<th>No telpon</th>
				<th>Jenis Perawatan</th>
				<th>Tanggal</th>
			</tr>
			<?php foreach($laporan as $row){ ?>
			<tr>
				<td><?= $row['nama']  ?></td>
				<td><?= $row['alamat']  ?></td>
				<td><?= $row['no_hp']  ?></td>
				<td><?= $row['jenis_pengurusan']  ?></td>
				<td><?= $row['tgl']  ?></td>
			</tr>
			<?php } ?>
		</table>
		
	</div>
</body>
</html>