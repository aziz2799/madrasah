<div class="container">
<div class="row">
<div class="col-md-12 ">
<h3 class="font-weight-bold text-center">Form Input Siswa</h3>
</div>
</div>

<hr>


<div class="row">
<form method="post"  action="insert.php">
<table>
<tr>
<td>NISN</td>
<td><input type="text" maxlength="10" class="form-control" name="nisn" required oninvalid="this.setCustomValidity('Inputan Tidak Boleh Kosong')" oninput="setCustomValidity('')" /></td>
</tr>
<tr>
<td>NIS</td>
<td><input type="text" maxlength="4" class="form-control" name="nis" required oninvalid="this.setCustomValidity('Inputan Tidak Boleh Kosong')" oninput="setCustomValidity('')" /></td>
</tr>
<tr>
<td>Nama Siswa</td>
<td><input type="text" class="form-control" name="nama" required oninvalid="this.setCustomValidity('Inputan Tidak Boleh Kosong')" oninput="setCustomValidity('')" /></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" class="form-control" name="pass" required oninvalid="this.setCustomValidity('Inputan Tidak Boleh Kosong')" oninput="setCustomValidity('')" /></td>
</tr>
<tr>
<td>Jenis Kelamin</td>
<td>
<input type="radio" name="jk" value="Laki-laki" checked /><label class="ml-2">Laki-laki</label>
<input class="ml-3" type="radio" name="jk" value="Perempuan" /><label class="ml-2">Perempuan</label>
</td>
</tr>
<tr>
<td></td>
<td><input type="submit" class="btn btn-primary mt-3" name="btn_siswa" value="Simpan" required oninvalid="this.setCustomValidity('Inputan Tidak Boleh Kosong')" oninput="setCustomValidity('')" /></td>
</tr>
</table>
</form>

 <form>
    <?php
include('koneksi.php');
$query = "SELECT*FROM tsiswa";
$result = mysqli_query($conn, $query);

if ($result){
?><h1>Daftar Siswa</h1>
    <div align="center">  
  <table  class="table table-hover" style="width:100%">
    <tr>
      <td>NISN</td>
      <td>NIS</td>
      <td>Password</td>
      <td>Nama Siswa</td>
      <td>Jenis Kelamin</td>
      <td>Status</td>
      <td>Keterangan</td>
       <td>Opsi</td>
     <?php 
	while ($row = mysqli_fetch_row($result)){
	?>
    <tr>
      <?php
	  $nisn = $row[0];
	  $nis = $row[1];
	  $pass=$row[2];
	  $nama=$row[3];
	$jk = $row[ 4];
  $status = $row[ 5];
  $ket = $row[ 6];
	
		
	?>
    
      <td><?php echo $nisn;?></td>
      <td><?php echo $nis;?></td>
      <td><?php echo $pass;?></td>
      <td><?php echo $nama;?></td>
      <td><?php echo $jk;?></td>
      <td><?php echo $status;?></td>
      <td><?php echo $ket;?></td>
        
      <td>
     <a href="index.php?deletesiswa=<?php echo $nisn;?>">Hapus</a> ||
     <?php if($status=='Aktif'){ ?><a href="index.php?nonaktif=<?php echo $nisn;?>">Non Aktifkan</a><?php } else{ ?>
     <a href="index.php?aktif=<?php echo $nisn;?>">Aktifkan</a><?php } ?> || <a href="index.php?updatesiswa=<?php echo $nisn;?>">Ubah</a>
      </td>
    </tr>
   <?php } ?>
  </table>
 <?php

} 
 ?>
   </form> 
   
     <?php
	 if (isset ($_GET['deletesiswa'])){
	 $nisn=$_GET['deletesiswa']; 
	  $query="delete from tsiswa where nisn='$nisn'";
	  $result = mysqli_query($conn, $query);
	  echo "<script language='javascript'>alert('Data Berhasil di hapus!');
document.location='index.php?page=siswa';
</script>";
	 }

	 if (isset ($_GET['nonaktif'])){
	 $nisn=$_GET['nonaktif']; 
	  $query="update tsiswa set status='Non Aktif' where nisn='$nisn'";
	  $result = mysqli_query($conn, $query);
	  echo "<script language='javascript'>alert('Siswa Berhasil di Non Aktifkan!');
document.location='index.php?page=siswa';
</script>";
	 }

   if (isset ($_GET['aktif'])){
    $nisn=$_GET['aktif']; 
     $query="update tsiswa set status='Aktif' where nisn='$nisn'";
     $result = mysqli_query($conn, $query);
     echo "<script language='javascript'>alert('Siswa Berhasil di Aktifkan!');
 document.location='index.php?page=siswa';
 </script>";
    }
	   ?>  

</div>

</div>
