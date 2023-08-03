
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
<h3 class="font-weight-bold text-center">Laporan Pembayaran SPP</h3>
</div>
</div>


<form action="index.php?page=lap_spp" method="POST">
  Bulan
  <select name="bulan">
  <option value="01">Januari</option>
  <option value="02">Februari</option>
  <option value="03">Maret</option>
  <option value="04">April</option>
  <option value="05">Mei</option>
  <option value="06">Juni</option>
  <option value="07">Juli</option>
  <option value="08">Agustus</option>
  <option value="09">September</option>
  <option value="10">Oktober</option>
  <option value="11">November</option>
  <option value="12">Desember</option>
  </select>
  Tahun
  <select name="tahun">
  <?php
  $mulai= date('Y') - 5;
  for($i = $mulai;$i<$mulai + 70;$i++){
      $sel = $i == date('Y') ? ' selected="selected"' : '';
      echo '<option value="'.$i.'"'.$sel.'>'.$i.'</option>';
  }
  ?>
  </select>

  <button name="filter" type="submit" value=filter>Filter</button>

</form>

 <br>

<table width="900px" align="center"  class="table table-bordered">
	<tr>
    <th>Pilihan</th>
		<th>Kode Pembayaran SPP</th>
        <th>Nama Siswa</th>
		<th>Tanggal</th>
    <th>Keterangan</th>
		<th>Total Pembayaran</th>
	</tr>
	<?php
		if(isset($_POST['filter'])){
      $bulan = $_POST['bulan'];
      $tahun = $_POST['tahun'];
      $result = $dbConn->query("SELECT * FROM tbayar_spp,tsiswa where tsiswa.nisn=tbayar_spp.nisn and month(tgl_bayar)='$bulan' and year(tgl_bayar) = '$tahun'");

      echo '<a href="laporan_spp_cetak.php?bulan='.$bulan.'&tahun='.$tahun.'" target="_blank">CETAK</a>';
     
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
      <td>
				<?php echo $row['ket_spp']; ?>
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
      
      <td colspan="4" align="center"><b>Total Pembayaran Di Bulan Ini<b></td>
      <td align="center"><strong><?php echo $total; ?></strong></td>
    </tr>
  <?php } ?>

</table>

  </div>
  </div>

