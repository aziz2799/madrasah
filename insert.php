<?php
include('koneksi.php');
session_start();



//provinsi
if (isset ($_POST ['btn_pro'])){
	$nama = $_POST['nama'];
	
$sql="insert into provinsi values ('','$nama')";
mysqli_query($conn, $sql);
$num = mysqli_affected_rows($conn);
if($num > 0){
echo "<script language='javascript'>
document.location='index.php?page=provinsi';
</script>";
}else {
	echo "<script>alert('Data Gagal Disimpan');history.go(-1)</script>";
}
}

//update provinsi
if (isset ($_POST ['btn_proupdate'])){
	$id=$_POST['id'];
	$nama = $_POST['nama'];
	
$sql="update provinsi set nama_provinsi='$nama' where id_provinsi='$id'";
mysqli_query($conn, $sql);
$num = mysqli_affected_rows($conn);
if($num > 0){
echo "<script language='javascript'>
document.location='index.php?page=provinsi';
</script>";
}else {
	echo "<script>alert('Data Gagal Disimpan');history.go(-1)</script>";
}
}

//kabupaten
if (isset ($_POST ['btn_kab'])){
	$nama = $_POST['nama'];
	$pro=$_POST['provinsi'];
	
$sql="insert into kabupaten values ('','$nama','$pro')";
mysqli_query($conn, $sql);
$num = mysqli_affected_rows($conn);
if($num > 0){
echo "<script language='javascript'>
document.location='index.php?page=kabupaten';
</script>";
}else {
	echo "<script>alert('Data Gagal Disimpan');history.go(-1)</script>";
}
}

//update kabupaten
if (isset ($_POST ['btn_kabupdate'])){
	$id=$_POST['id'];
	$nama = $_POST['nama'];
	$pro = $_POST['provinsi'];
	
$sql="update kabupaten set nama_kabupaten='$nama',id_provinsi='$pro' where id_kabupaten='$id'";
mysqli_query($conn, $sql);
$num = mysqli_affected_rows($conn);
if($num > 0){
echo "<script language='javascript'>
document.location='index.php?page=kabupaten';
</script>";
}else {
	echo "<script>alert('Data Gagal Disimpan');history.go(-1)</script>";
}
}

//update kecamatan
if (isset ($_POST ['btn_kecupdate'])){
	$id=$_POST['id'];
	$nama = $_POST['nama'];
	$kab = $_POST['kab'];
	
$sql="update kecamatan set nama_kecamatan='$nama',id_kabupaten='$kab' where id_kecamatan='$id'";
mysqli_query($conn, $sql);
$num = mysqli_affected_rows($conn);
if($num > 0){
echo "<script language='javascript'>
document.location='index.php?page=kecamatan';
</script>";
}else {
	echo "<script>alert('Data Gagal Disimpan');history.go(-1)</script>";
}
}

//kecamatan
if (isset ($_POST ['btn_kec'])){
	$nama = $_POST['nama'];
	$kab=$_POST['kabupaten'];
	
$sql="insert into kecamatan values ('','$nama','$kab')";
mysqli_query($conn, $sql);
$num = mysqli_affected_rows($conn);
if($num > 0){
echo "<script language='javascript'>
document.location='index.php?page=kecamatan';
</script>";
}else {
	echo "<script>alert('Data Gagal Disimpan');history.go(-1)</script>";
}
}

//surat ijazah hilang
if (isset ($_POST ['ijazah_hilang'] )){
	$nisn=$_POST['nisn'];
	$sktlk=$_POST['sktlk'];
	$tahun_ajaran=$_POST['tahun_ajaran'];
	$nip_ks=$_POST['nip_kepala_sekolah'];
	$nama_ks=$_POST['nama_kepala_sekolah'];
	$nip=$_POST['nip'];
	 $kode_sekolah = $_SESSION['user']['kode_sekolah'];
	  $query="insert into surat_ijazah_hilang value ('','$sktlk','$nisn','$kode_sekolah','$tahun_ajaran','$nip_ks','$nama_ks','$nip',CURRENT_DATE,'Belum ACC')";
	$ekse_query=mysqli_query($conn,$query);	
	$num = mysqli_affected_rows($conn);
	if($num > 0){
		echo "<script>alert('Data Menunggu Verifikasi');</script>";
echo "<script language='javascript'>
document.location='index.php?page=ijazahhilang';
</script>";
}else {
	echo "<script>alert('Data Gagal Disimpan');history.go(-1)</script>";
}
}

//surat ijazah rusak
if (isset ($_POST ['ijazah_rusak'] )){
	$nisn=$_POST['nisn'];
	$nosttb=$_POST['nosttb'];
	$kerusakan=$_POST['kerusakan'];
	$tahun_ajaran=$_POST['tahun_ajaran'];
	$nip_ks=$_POST['nip_kepala_sekolah'];
	$nama_ks=$_POST['nama_kepala_sekolah'];
	$nip=$_POST['nip'];
	 $kode_sekolah = $_SESSION['user']['kode_sekolah'];
	  $query="insert into surat_ijazah_rusak value ('','$kode_sekolah','$nisn','$tahun_ajaran','$kerusakan','$nip_ks','$nama_ks','$nip',CURRENT_DATE,'Belum ACC')";
	$ekse_query=mysqli_query($conn,$query);	
	$num = mysqli_affected_rows($conn);
if($num > 0){
		echo "<script>alert('Data Menunggu Verifikasi');</script>";
echo "<script language='javascript'>
document.location='index.php?page=ijazahrusak';
</script>";
}else {
	echo "<script>alert('Data Gagal Disimpan');history.go(-1)</script>";
}
}

//surat ijazah salah
if (isset ($_POST ['ijazah_salah'] )){
	$nisn=$_POST['nisn'];
	$nosttb=$_POST['nosttb'];
	$salah=$_POST['salah'];
	$benar=$_POST['benar'];
	$tahun_ajaran=$_POST['tahun_ajaran'];
	$nip_ks=$_POST['nip_kepala_sekolah'];
	$nama_ks=$_POST['nama_kepala_sekolah'];
	$nip=$_POST['nip'];
	 $kode_sekolah = $_SESSION['user']['kode_sekolah'];
	  $query="insert into surat_ijazah_salah value ('','$kode_sekolah','$nisn','$tahun_ajaran','$salah','$benar','$nip_ks','$nama_ks','$nip',CURRENT_DATE,'Belum ACC')";
	$ekse_query=mysqli_query($conn,$query);
	$num = mysqli_affected_rows($conn);
if($num > 0){
		echo "<script>alert('Data Menunggu Verifikasi');</script>";
echo "<script language='javascript'>
document.location='index.php?page=ijazahsalah';
</script>";
}else {
	echo "<script>alert('Data Gagal Disimpan');history.go(-1)</script>";
}
}

//siswa
if (isset ($_POST ['btn_siswa'])){
    $nisn = $_POST['nisn'];
	$nama = $_POST['nama'];
	$nama_ayah = $_POST['nama_ayah'];
	$nama_ibu = $_POST['nama_ibu'];
	$tmpt_tinggal = $_POST['tmpt_tinggal'];
	$tgl_lahir = $_POST['tgl_lahir'];
	$pekerjaan_ayah = $_POST['pekerjaan_ayah'];
	$pekerjaan_ibu = $_POST['pekerjaan_ibu'];
	$jk = $_POST['jk'];
	$kd_sklh=$_SESSION['user']['kode_sekolah'];
	
$sql="insert into siswa values ('$nisn','$nama','$tgl_lahir','$jk','$nama_ayah','$pekerjaan_ayah','$nama_ibu','$pekerjaan_ibu','$tmpt_tinggal','$kd_sklh','','Aktif')";
mysqli_query($conn, $sql);
$num = mysqli_affected_rows($conn);
if($num > 0){
echo "<script language='javascript'>
document.location='index.php?page=siswa';
</script>";
}else {
	echo "<script>alert('Data Gagal Disimpan');history.go(-1)</script>";
}
}

//siswa update
if (isset ($_POST ['btn_siswaupdate'])){
    $nisn = $_POST['nisn'];
	$nama = $_POST['nama'];
	$nama_ayah = $_POST['nama_ayah'];
	$nama_ibu = $_POST['nama_ibu'];
	$tmpt_tinggal = $_POST['tmpt_tinggal'];
	$tgl_lahir = $_POST['tgl_lahir'];
	$pekerjaan_ayah = $_POST['pekerjaan_ayah'];
	$pekerjaan_ibu = $_POST['pekerjaan_ibu'];
	$jk = $_POST['jk'];
	$no_sttb=$_POST['no_sttb'];
	$status=$_POST['status'];
	
$sql="update siswa set nisn='$nisn',nama='$nama',tgl_lahir='$tgl_lahir',jk='$jk',nama_ayah='$nama_ayah',
pekerjaan_ayah='$pekerjaan_ayah',nama_ibu='$nama_ibu',pekerjaan_ibu='$pekerjaan_ibu',alamat='$tmpt_tinggal',no_sttb='$no_sttb',status='$status' where nisn='$nisn'";
mysqli_query($conn, $sql);
$num = mysqli_affected_rows($conn);
if($num > 0){
echo "<script language='javascript'>
document.location='index.php?page=siswa';
</script>";
}else {
	echo "<script>alert('Data Gagal Disimpan');history.go(-1)</script>";
}
}


//sekolah
if (isset ($_POST ['btn_sekolah'])){
    $kode = $_POST['kode'];
	$kec = $_POST['kecamatan'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$pass = $_POST['pass'];
	$no = $_POST['no'];
		
$sql="insert into sekolah values ('$kode','$nama','$kec','$pass','$alamat','$no')";
mysqli_query($conn, $sql);
$num = mysqli_affected_rows($conn);
if($num > 0){
echo "<script language='javascript'>
document.location='index.php?page=sekolah';
</script>";
}else {
	echo "<script>alert('Data Gagal Disimpan');history.go(-1)</script>";
}
}

//update sekolah
if (isset ($_POST ['btn_sekolahupdate'])){
    $kode = $_POST['kode'];
	$kec = $_POST['kecamatan'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$pass = $_POST['pass'];
	$no = $_POST['no'];
		
$sql="update sekolah set nama_sekolah='$nama',id_kecamatan='$kec',password='$pass',alamat_sekolah='$alamat',no_wa_sekolah='$no' where kode_sekolah='$kode')";
mysqli_query($conn, $sql);
$num = mysqli_affected_rows($conn);
if($num > 0){
echo "<script language='javascript'>
document.location='index.php?page=sekolah';
</script>";
}else {
	echo "<script>alert('Data Gagal Disimpan');history.go(-1)</script>";
}
}

//ketua
if (isset ($_POST ['btn_ketua'])){
    $nip = $_POST['nip'];
	$nama = $_POST['nama'];
	 $foto = $_FILES['Gambar']['name'];
$tmp = $_FILES['Gambar']['tmp_name'];
$path = "ttd/".$foto;
if(move_uploaded_file($tmp, $path )){
$sql="insert into ketua values ('$nip','$nama','$foto')";
mysqli_query($conn, $sql);

$num = mysqli_affected_rows($conn);
if($num > 0){
echo "<script language='javascript'>alert('Data Berhasil di simpan!');
document.location='index.php?page=ketua';
</script>";
}else {
	echo "<script>alert('Data Gagal Disimpan');history.go(-1)</script>";
}

 }else{
  // Jika gambar gagal diupload, Lakukan :
  echo "<script>alert('Tanda Tangan harus di Upload!');history.go(-1);</script>";

    }
}

//surat pindah
if (isset ($_POST ['surat_pindah'] )){
	$nisn=$_POST['nisn'];
	$nis=$_POST['nis'];
	$asal=$_POST['asal'];
	$kelas=$_POST['kelas'];
	$tujuan=$_POST['tujuan'];
	$keperluan=$_POST['keperluan'];
	$nip=$_POST['nip'];
	 $foto_surat_rekom = $_FILES['surat_rekom']['name'];
$tmp = $_FILES['surat_rekom']['tmp_name'];
$path = "surat_sekolah_asal/".$foto_surat_rekom;
	 $foto_surat_ortu = $_FILES['surat_ortu']['name'];
$tmp1 = $_FILES['surat_ortu']['tmp_name'];
$path1 = "surat_orang_tua/".$foto_surat_ortu;
if(move_uploaded_file($tmp, $path ) && move_uploaded_file($tmp1, $path1 )){
$query="insert into surat_pindah value ('','$nisn','$nis','$asal','$kelas','$tujuan','$keperluan','$nip',CURRENT_DATE,'$foto_surat_rekom','$foto_surat_ortu','Belum ACC')";
	$ekse_query=mysqli_query($conn,$query);	
$num = mysqli_affected_rows($conn);
if($num > 0){
echo "<script language='javascript'>alert('Data Berhasil di simpan!');
document.location='index.php?page=pindah';
</script>";
}	
}
}

//surat kehilangan ijazah
if (isset ($_POST ['ijazah_hilang'] )){
	$nisn=$_POST['nisn'];
	$nosttb=$_POST['nosttb'];
	$sktlk=$_POST['sktlk'];
	$tahun_ajaran=$_POST['tahun_ajaran'];
	$nip_ks=$_POST['nip_kepala_sekolah'];
	$nama_ks=$_POST['nama_kepala_sekolah'];
	$nip=$_POST['nip'];
	 $kode_sekolah = $_SESSION['user']['kode_sekolah'];
	  $ttd = $_FILES['ttd_kepsek']['name'];
$tmp = $_FILES['ttd_kepsek']['tmp_name'];
$path = "ttd_kepsek/".$ttd;
if(move_uploaded_file($tmp, $path )){
$query="insert into surat_ijazah_hilang value ('','$sktlk','$nisn','$nosttb','$kode_sekolah','$tahun_ajaran','nip_kas','$nama_ks','$ttd','$nip')";
	$ekse_query=mysqli_query($conn,$query);	
$num = mysqli_affected_rows($conn);
if($num > 0){
echo "<script language='javascript'>alert('Data Berhasil di simpan!');
document.location='index.php?page=ijazahhilang';
</script>";
}	
}
}

?>