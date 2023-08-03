<div class="container">
<div class="row">
<div class="col-md-12 ">
<h3 class="font-weight-bold text-center">Form Input Mata Pelajaran</h3>
</div>
</div>

<hr>


 <center>
<form method="post"  action="insert.php">
<table>
<tr>
<td>Nama Mata Pelajaran</td>
<td><input type="text" class="form-control" name="nama" required oninvalid="this.setCustomValidity('Inputan Tidak Boleh Kosong')" oninput="setCustomValidity('')" /></td>
<td><input type="submit" class="btn btn-primary mt-2" name="btn_mapel" value="Simpan" required oninvalid="this.setCustomValidity('Inputan Tidak Boleh Kosong')" oninput="setCustomValidity('')" /></td>
</tr>
</table>
</form>
</center><br>
 <form>
    <?php
include('koneksi.php');
$query = "SELECT*FROM tmatpel";
$result = mysqli_query($conn, $query);

if ($result){
?><div align="center"> <h1>Daftar Mata Pelajaran</h1>
     
  <table  class="table table-hover" style="width:50%">
    <tr>
      <td>Nama Mata Pelajaran</td>
       <td>Opsi</td>
     <?php 
	while ($row = mysqli_fetch_row($result)){
	?>
    <tr>
      <?php
	  $id_mapel = $row[0];
	  $nama=$row[1];

	
		
	?>
      <td><?php echo $nama;?></td>      
      <td>
     <a href="index.php?deletemapel=<?php echo $id_mapel;?>">Hapus</a> 
      </td>
    </tr>
   <?php } ?>
  </table>
 <?php

} 
 ?>
   </form> 
   
     <?php
	 if (isset ($_GET['deletemapel'])){
	 $nisn=$_GET['deletemapel']; 
	  $query="delete from tmapel where id_mapel='$id_mapel'";
	  $result = mysqli_query($conn, $query);
	  echo "<script language='javascript'>alert('Data Berhasil di hapus!');
document.location='index.php?page=mapel';
</script>";
	 }
	   ?>

</div>

</div>
