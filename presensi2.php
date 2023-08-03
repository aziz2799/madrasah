

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
<h3 class="font-weight-bold text-center">Daftar Kelas Yang Di Ikuti Siswa</h3>
</div>
</div>
  <div id="content">
  <div id="article">

  	<div id="tam2">

  	</div>


<table width="900px" align="center" border="1" class="table table-bordered" style="border-collapse:collapse">
	<tr>
    <th>Pilihan</th>
		<th>Mata Pelajaran</th>
		<th>Kelas</th>
		<th>Semester</th>
			</tr>
	<?php
		$nisn=$_SESSION['siswa']['nisn'];
		$result = $dbConn->query("SELECT * FROM truang,tmatpel,tdetil_ruang where tdetil_ruang.id_ruang=truang.id_ruang and tmatpel.id_matpel=truang.id_matpel and nisn='$nisn'");
		while($row = $result->fetch(PDO::FETCH_ASSOC)) { 
	?>
		<tr>
         <td width="200px">
			     <a href="index.php?presen1=<?php echo $row['id_ruang']?>">
			          Liat Presensi
		        </a>
      
         </td>
			<td>
				<?php echo $row['nama_matpel']; ?>
			</td>
			<td>
				<?php echo $row['kelas']; ?>
			</td>
			<td>
				<?php echo $row['semester']; ?>
			</td>
			
			
		</tr>
	<?php
		}
	?>

</table>


 </div>
 </div> </div>
 </div>


 

