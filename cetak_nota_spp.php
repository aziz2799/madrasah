<!DOCTYPE html>
<html>
<head>
	<title>Cetak Nota SPP</title>

	<style type="text/css">
		
		h2 {
			margin: 0 auto;
			border: 2px solid black;
			width: 600px;
			padding-top: 8px;
			padding-bottom: 8px;
		}

		.tab_center {
			margin: 0 auto;
			border: 2px solid black;
			width: 600px;
			padding-top: 8px;
			padding-bottom: 8px;
		}

	</style>

</head>
<body>

<h2 align="center"><img src="img/logo.jpg" style="width:140px;height:140px;"><br>
Madrasah Aliyah Nurul Ummah<br>
Nota pembayaran SPP
</h2>

<?php 
	include('config.php');
	$id = $_GET['id'];

	$stmt = $dbConn->prepare("SELECT * FROM tbayar_spp, tsiswa, tuser where tbayar_spp.kd_bayar_spp='$id' and tbayar_spp.nisn=tsiswa.nisn and tbayar_spp.kd_admin=tuser.kd_admin"); 
	$stmt->execute(); 
	$row = $stmt->fetch();

?>

<div class="tab_center">
<table width="600px" align="center" >
	<tr>
		<td></td>
		<td></td>
		<td align="right">Tanggal :</td>
		<td><?php echo $row['tgl_bayar'] ?></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td align="right">No Nota :</td>
		<td align="center"><?php echo $row['kd_bayar_spp'] ?></td>
	</tr>
	<tr>
		<th>Telah terima dari</th>
		<th>:</th>
		<th><?php echo $row['nama']; ?></th>
		<th>&nbsp;</th>
	</tr>
	<tr>
			<td align="center" colspan="4"><?php echo $row['ket_spp']; ?></td>
		</tr>
		<tr>
			<td align="center" colspan="4"></td>
		</tr>
	<tr>
		<td></td>
		<td></td>
		<td align="center"><strong>Total Bayar</strong></td>
		<td align="center"><strong><?php echo 'Rp. '.number_format($row['total_bayar'], 0, ',', '.'); ?></strong></td>
	</tr>
    	<tr>
		<td></td>
		<td></td>
		<td align="center"><strong>Penerima<br><br>
		  <?php  echo $row['nama_admin']; ?>
		</strong></td>
		<td align="center"><strong>Pembayar<br><br>
        <?php  echo $row['nama']; ?>
        </strong></td>
	</tr>
</table>
<?php echo "<script>
		window.print();
	</script>"; ?>
</div>

</body>
</html>




