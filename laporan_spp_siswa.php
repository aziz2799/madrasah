
   <script type="text/javascript">

   function getConfirmation(){
	   var retVal = confirm("Anda yakin dengan data yang anda hapus?");
	   if( retVal == true ){
	      return true;
	   }
	   else{
	      return false;
	   }
	}  

  </script>


<div id="wrapper">
<!-- Navigasi Panel -->
<?php

?>


	<div class="container">
<div class="row">
<div class="col-md-12 ">
<h3 class="font-weight-bold text-center">Laporan Pembayaran SPP Siswa</h3>
</div>
</div>

<table width="900px" align="center"  class="table table-bordered">
	<tr>
    <th>Pilihan</th>
		<th>Kode Pembayaran SPP</th>
        <th>Nama Siswa</th>
		<th>Tanggal</th>
		<th>Total Pembayaran</th>
	</tr>
	<?php
	$nisn=$_SESSION["siswa"]["nisn"];	
      $result = $dbConn->query("SELECT * FROM tbayar_spp,tsiswa where tsiswa.nisn=tbayar_spp.nisn and tbayar_spp.nisn='$nisn'");

      
      $total = 0;
  		while($row = $result->fetch(PDO::FETCH_ASSOC)) { 
	?>
		<tr>
         <td width="200px">
			     <a href="cetak_nota_spp.php?id=<?php echo $row['kd_bayar_spp']?>" target="_blank">
			            Cetak Nota
		        </a>
         </td>
			<td>
				<?php echo $row['kd_bayar_spp']; ?>
			</td>
            <td>
				<?php echo $row['nama']; ?>
			</td>
			<td>
				<?php echo $row['tgl_bayar']; ?>
			</td>
			<td align="center">
				<?php echo $row['total_bayar']; ?>
			</td>
		</tr>
	<?php
    $total += $row['total_bayar'];
    }
	
	?>
  <tr>
      
      <td colspan="4" align="center"><b>Total Pembayaran Selama Ini<b></td>
      <td align="center"><strong><?php echo $total; ?></strong></td>
    </tr>


</table>
</div>
</div>



