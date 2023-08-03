

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
<h2 align = "center">Daftar Ruangan Yang Di Ajar</h2>
		<p align = "center"><a href="index.php?page=ruang">Tambah</a></p>
</div>
</div>
<div class="row">
<table width="900px" align="center" border="1" class="table table-bordered" style="border-collapse:collapse">
	<tr>
    <th>Pilihan</th>
		<th>Mata Pelajaran</th>
		<th>Kelas</th>
		<th>Semester</th>
			</tr>
	<?php
		include("config.php");
		$guru=$_SESSION['guru']['id_guru'];
		$result = $dbConn->query("SELECT * FROM truang,tmatpel where tmatpel.id_matpel=truang.id_matpel and id_guru='$guru'");
		while($row = $result->fetch(PDO::FETCH_ASSOC)) { 
	?>
		<tr>
         <td width="200px">
			     <a href="index.php?presen=<?php echo $row['id_ruang']?>">
			            Presensi
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
 

 

