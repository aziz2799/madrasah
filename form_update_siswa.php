<div class="container">
<div class="row">
<div class="col-md-12 ">
<h3 class="font-weight-bold text-center">Form Update Siswa</h3>
</div>
</div>

<hr>
<div class="row">

<?php

// Ambil data dulu Buat di masukan ke dalam masing2 input text
include("koneksi.php");
if (isset ($_GET ['updatesiswa'])){
	$cari=$_GET['updatesiswa'];
	$query_cari="SELECT * FROM siswa where nisn='$cari' ";
$hasil_cari=mysqli_query($conn,$query_cari);	
$data_cari=mysqli_fetch_array($hasil_cari);

if($data_cari == 0) { ?>

	<center><h3 class="mt-5">Data Tidak Ditemukan</h3></center>
<?php
}else{

  $nisn = $data_cari['nisn'];
	$nama = $data_cari['nama'];
	$alamat = $data_cari['alamat'];
	$tgl_lahir = $data_cari['tgl_lahir'];
	$jk = $data_cari['jk'];
	$pekerjaan_ayah = $data_cari['pekerjaan_ayah'];
	$nama_ayah = $data_cari['nama_ayah'];
	$nama_ibu = $data_cari['nama_ibu'];
	$pekerjaan_ibu = $data_cari['pekerjaan_ibu'];
	$no_sttb = $data_cari['no_sttb'];
	
?>


<form method="post"  action="insert.php">
<table>
<tr>
<td>NISN</td>
<td><input type="text" class="form-control" value="<?php echo $nisn ?>" maxlength="10" name="nisn" required oninvalid="this.setCustomValidity('Inputan Tidak Boleh Kosong')" oninput="setCustomValidity('')" /></td>
</tr>
<tr>
<td>Nama Siswa</td>
<td><input type="text" class="form-control" value="<?php echo $nama ?>" name="nama" required oninvalid="this.setCustomValidity('Inputan Tidak Boleh Kosong')" oninput="setCustomValidity('')" /></td>
</tr>
<tr>
<td>Tanggal Lahir</td>
<td><input type="date" class="form-control" value="<?php echo $tgl_lahir ?>" name="tgl_lahir" required oninvalid="this.setCustomValidity('Inputan Tidak Boleh Kosong')" oninput="setCustomValidity('')" /></td>
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
<td><input type="text" class="form-control" value="<?php echo $nama_ayah ?>" name="nama_ayah" required oninvalid="this.setCustomValidity('Inputan Tidak Boleh Kosong')" oninput="setCustomValidity('')" /></td>
</tr>
<tr>
<td>Pekerjaan Ayah</td>
<td><input type="text" class="form-control" value="<?php echo $pekerjaan_ayah ?>" name="pekerjaan_ayah" required oninvalid="this.setCustomValidity('Inputan Tidak Boleh Kosong')" oninput="setCustomValidity('')" /></td>
</tr>
<tr>
<td>Nama Ibu</td>
<td><input type="text" class="form-control" value="<?php echo $nama_ibu ?>" name="nama_ibu" required oninvalid="this.setCustomValidity('Inputan Tidak Boleh Kosong')" oninput="setCustomValidity('')" /></td>
</tr>
<tr>
<td>Pekerjaan Ibu</td>
<td><input type="text" class="form-control" value="<?php echo $pekerjaan_ibu ?>" name="pekerjaan_ibu" required oninvalid="this.setCustomValidity('Inputan Tidak Boleh Kosong')" oninput="setCustomValidity('')" /></td>
</tr>
<tr>
<td>Tempat Tinggal</td>
<td><input type="text" class="form-control" value="<?php echo $alamat ?>" name="tmpt_tinggal" required oninvalid="this.setCustomValidity('Inputan Tidak Boleh Kosong')" oninput="setCustomValidity('')" /></td>
</tr>
<tr>
<td>No STTB</td>
<td><input type="text" class="form-control" value="<?php echo $no_sttb ?>" name="no_sttb"  /></td>
</tr>
<tr>
<td>Status</td>
<td><select name="status">
<option value="Aktif">Aktif</option>
<option value="Lulus">Lulus</option>
</select></td>
</tr>
<tr>
<td></td>
<td><input type="submit" class="btn btn-primary mt-3" name="btn_siswaupdate" value="Simpan" required oninvalid="this.setCustomValidity('Inputan Tidak Boleh Kosong')" oninput="setCustomValidity('')" /></td>
</tr>
</table>
</form>
<?php }} ?>
</div>

</div>