<div class="container">
<div class="row">
<div class="col-md-12 ">
<h4 class="font-weight-bold text-center">INPUT DATA SISWA</h4>
</div>
</div>

<hr>


<div class="row">
<form method="post"  action="insert.php">
<table>
<tr>
<td>NISN</td>
<td><input type="text" class="form-control" maxlength="10" name="nisn" required oninvalid="this.setCustomValidity('Inputan Tidak Boleh Kosong')" oninput="setCustomValidity('')" /></td>
</tr>
<tr>
<td>Nama Siswa</td>
<td><input type="text" class="form-control" name="nama" required oninvalid="this.setCustomValidity('Inputan Tidak Boleh Kosong')" oninput="setCustomValidity('')" /></td>
</tr>
<tr>
<td>Tanggal Lahir</td>
<td><input type="date" class="form-control" name="tgl_lahir" required oninvalid="this.setCustomValidity('Inputan Tidak Boleh Kosong')" oninput="setCustomValidity('')" /></td>
</tr>
<tr>
<td>Jenis Kelamin</td>
<td>
<input type="radio" name="jk" value="Laki-laki" checked /><label class="ml-2">Laki-laki</label>
<input class="ml-3" type="radio" name="jk" value="Perempuan" /><label class="ml-2">Perempuan</label>
</td>
</tr>
<tr>
<td>Nama Ayah</td>
<td><input type="text" class="form-control" name="nama_ayah" required oninvalid="this.setCustomValidity('Inputan Tidak Boleh Kosong')" oninput="setCustomValidity('')" /></td>
</tr>
<tr>
<td>Pekerjaan Ayah</td>
<td><input type="text" class="form-control" name="pekerjaan_ayah" required oninvalid="this.setCustomValidity('Inputan Tidak Boleh Kosong')" oninput="setCustomValidity('')" /></td>
</tr>
<tr>
<td>Nama Ibu</td>
<td><input type="text" class="form-control" name="nama_ibu" required oninvalid="this.setCustomValidity('Inputan Tidak Boleh Kosong')" oninput="setCustomValidity('')" /></td>
</tr>
<tr>
<td>Pekerjaan Ibu</td>
<td><input type="text" class="form-control" name="pekerjaan_ibu" required oninvalid="this.setCustomValidity('Inputan Tidak Boleh Kosong')" oninput="setCustomValidity('')" /></td>
</tr>
<tr>
<td>Tempat Tinggal</td>
<td><input type="text" class="form-control" name="tmpt_tinggal" required oninvalid="this.setCustomValidity('Inputan Tidak Boleh Kosong')" oninput="setCustomValidity('')" /></td>
</tr>
<tr>
<td></td>
<td><input type="submit" class="btn btn-primary mt-3" name="btn_siswa" value="Simpan" required oninvalid="this.setCustomValidity('Inputan Tidak Boleh Kosong')" oninput="setCustomValidity('')" /></td>
</tr>
</table>
</form>
</div>

 <form>
    <?php
$kd_sklh=$_SESSION['user']['kode_sekolah'];
$query = "SELECT*FROM siswa where kode_sekolah='$kd_sklh'";
$result = mysqli_query($conn, $query);

if ($result){
?><h4 class="mt-4" align="center">Daftar Siswa</h4>
    <div align="center">  
  <table  class="table table-hover" style="width:100%">
    <tr>
      <td>NISN</td>
      <td>Nama Siswa</td>
      <td>Tgl Lahir </td>
      <td>Jenis Kelamin</td>
      <td>Nama Ayah</td>
      <td>Pekerjaan Ayah</td>
      <td>Nama Ibu</td>
      <td>Pekerjaan Ibu</td>
      <td>Alamat</td>
      <td>Status</td>
       <td>Opsi</td>
     <?php 
	while ($row = mysqli_fetch_row($result)){
	?>
    <tr>
      <?php
	  $nisn = $row[0];
	  $nama=$row[1];
	$tgl_lahir = $row[2];
	$jk = $row[3];
	$nama_ayah = $row[ 4];
	$pekerjaan_ayah = $row[ 5];
	$nama_ibu = $row[ 6];
	$pekerjaan_ibu = $row[ 7];
	$alamat = $row[ 8];
	$status = $row[ 11];	
	?>
    
      <td><?php echo $nisn;?></td>
      <td><?php echo $nama;?></td>
      <td><?php echo $tgl_lahir;?></td>
      <td><?php echo $jk;?></td>
      <td><?php echo $nama_ayah;?></td>
      <td><?php echo $pekerjaan_ayah;?></td>
      <td><?php echo $nama_ibu;?></td>
      <td><?php echo $pekerjaan_ibu;?></td>
      <td><?php echo $alamat;?></td>
     <td><?php echo $status;?></td>
  
      <td>
     <a href="index.php?deletesiswa=<?php echo $nisn;?>">Hapus</a> <a href="index.php?updatesiswa=<?php echo $nisn;?>">| Update</a> 
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
	 $nipp=$_GET['deletesiswa']; 
	  $query="delete from siswa where nisn='$nisn'";
	  $result = mysqli_query($conn, $query);
	  echo "<script language='javascript'>alert('Data Berhasil di hapus!');
document.location='index.php?page=siswa';
</script>";
	 }
	   ?>

</div>

</div>
