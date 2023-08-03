
<div id="wrapper">
<!-- Navigasi Panel -->
<?php
   include 'config.php';
$bulan=array('01' =>'Janurai',
				 '02' =>'Februari',
				 '03' =>'Maret',
				 '04' =>'April',
				 '05' =>'Mei',
				 '06' =>'Juni',
				 '07' =>'Juli',
				 '08' =>'Agustus',
				 '09' =>'September',
				 '10' =>'Oktober',
				 '11' =>'November',
				 '12' =>'Desember',			 
				 );  
   $bln = $_GET['bulan'];
   $tahun = $_GET['tahun'];
   $result = $dbConn->query("
   SELECT *
   FROM 
      tbayar_spp, 
      tsiswa
   WHERE 
      tsiswa.nisn=tbayar_spp.nisn 
         AND month(tbayar_spp.tgl_bayar)='$bln' AND year(tbayar_spp.tgl_bayar) = '$tahun'
      ");
?>

		<table align="center">
			<tr><td><h2 align = "center">Laporan Pembayaran SPP</h2></td></tr>
			<tr><td align="center"><img src="img/logo.jpg" style="width:140px; height:140px;"></td></tr>
			<tr><td> <h2 align="center">Periode <?php echo "$bulan[$bln] $tahun"; ?></h2></td></tr>
				</table>
<hr>
<table width="700px" align="center"  border="1" class="table table-bordered">
	<tr>
		<th>Kd Pembayaran SPP</th>
		<th>Tanggal Pembayaran</th>
		<th>Nama Siswa</th>
      <th>Pembayaran</th>
	</tr>
	<?php
$total=0;
  		while($row = $result->fetch(PDO::FETCH_ASSOC)) { 
	?>
		<tr>
			<td align="center">
				<?php echo $row['kd_bayar_spp']; ?>
			</td>
			<td align="center">
				<?php echo $row['tgl_bayar']; ?>
			</td>
			<td align="center">
				<?php echo $row['nama']; ?>
			</td>
			<td align="center">
				<?php echo "Rp.".number_format($row['total_bayar'], 0, ".", "."); ?>
			</td>
		</tr>
	<?php
		 $total += $row['total_bayar'];
		}
	?>
<tr>
      <td colspan="3" align="center"><b>Total Pembayaran Di Bulan Ini<b></td>
      <td align="center"><strong><?php echo "Rp.".number_format($total, 0, ".", "."); ?></strong></td>
    </tr>
</table>

<br>
<br>
<hr>

<script type="text/javascript">
  window.print();
</script>
