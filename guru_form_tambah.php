<div class="container">
<div class="row">
<div class="col-md-12 ">
<h3 class="font-weight-bold text-center">Form Input Guru</h3>
</div>
</div>

<hr>



<center>
<form method="post" action="insert.php">
<table>
<tr>
<td>ID Guru</td>
<td><input type="text" maxlength="10" class="form-control" name="id_guru" required oninvalid="this.setCustomValidity('Inputan Tidak Boleh Kosong')" oninput="setCustomValidity('')" /></td>
</tr>
<tr>
<td>Nama Guru</td>
<td><input type="text" class="form-control" name="nama" required oninvalid="this.setCustomValidity('Inputan Tidak Boleh Kosong')" oninput="setCustomValidity('')" /></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" class="form-control" name="pass" required oninvalid="this.setCustomValidity('Inputan Tidak Boleh Kosong')" oninput="setCustomValidity('')" /></td>
</tr>
<tr>
<td></td>
<td><input type="submit" class="btn btn-primary mt-3" name="btn_guru" value="Simpan" required oninvalid="this.setCustomValidity('Inputan Tidak Boleh Kosong')" oninput="setCustomValidity('')" /></td>
</tr>
</table>
</form>
</center>


 <form>
    <?php
include('koneksi.php');
$query = "SELECT*FROM tguru";
$result = mysqli_query($conn, $query);

if ($result){
?><center><h1>Daftar Guru</h1> </center>
  <table  class="table table-hover" style="width:100%">
    <tr>
      <td>ID Guru</td>
      <td>Password</td>
      <td>Nama Guru</td>
       <td>Opsi</td>
     <?php 
	while ($row = mysqli_fetch_row($result)){
	?>
    <tr>
      <?php
	  $id_guru = $row[0];
	  $pass=$row[2];
	  $nama=$row[1];

	
		
	?>
    
      <td><?php echo $id_guru;?></td>
      <td><?php echo $pass;?></td>
      <td><?php echo $nama;?></td>      
      <td>
     <a href="index.php?deleteguru=<?php echo $id_guru;?>">Hapus</a> 
      </td>
    </tr>
   <?php } ?>
  </table>
 <?php

} 
 ?>
   </form> 
     <?php
	 if (isset ($_GET['deleteguru'])){
	 $nisn=$_GET['deleteguru']; 
	  $query="delete from tguru where id_guru='$id_guru'";
	  $result = mysqli_query($conn, $query);
	  echo "<script language='javascript'>alert('Data Berhasil di hapus!');
document.location='index.php?page=guru';
</script>";
	 }
	   ?>



</div>
