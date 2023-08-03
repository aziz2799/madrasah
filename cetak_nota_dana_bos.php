<!DOCTYPE html>
<html>
<head>
	<title>Cetak Nota Penerimaan Beasiswa</title>

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

<h2 align="center"><img src="img/smp.svg" style="width:140px;height:140px;"><br>
SMPN 9 SAMPIT<br>
Nota Penerimaan Dana BOS
</h2>

<?php 
	include('config.php');
	$id = $_GET['id'];

	$stmt = $dbConn->prepare("SELECT * FROM tdana_bos, tuser where kd_dana_bos='$id' and tdana_bos.kd_admin=tuser.kd_admin"); 
	$stmt->execute(); 
	$row = $stmt->fetch();

?>

<div class="tab_center">
<table width="600px" align="center" >
	<tr>
		<td></td>
		<td></td>
		<td align="right">Tanggal :</td>
		<td><?php echo $row['tgl_terima'] ?></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td align="right">No Nota :</td>
		<td align="center"><?php echo $row['kd_dana_bos'] ?></td>
	</tr>
	<tr>
		<th>Telah Diterima Oleh</th>
		<th>:</th>
		<th><?php echo $row['nama_admin']; ?></th>
		<th>&nbsp;</th>
	</tr>

		<tr>
			<td align="center" colspan="4">Untuk Penerimaan Dana BOS</td>
		</tr>
	<tr>
		<td></td>
		<td></td>
		<td align="center"><strong>Total Penerimaan Dana</strong></td>
		<td align="center"><strong><?php echo 'Rp. '.number_format($row['jumlah_dana_bos'], 0, ',', '.'); ?></strong></td>
	</tr>
    	<tr>
		<td></td>
		<td></td>
		<td align="center">&nbsp;</td>
		<td align="center"><strong>Penerima<br><br>
        <?php  echo $row['nama_admin']; ?>
        </strong></td>
	</tr>
</table>
<?php echo "<script>
		window.print();
	</script>"; ?>
</div>

</body>
</html>




