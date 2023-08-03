<?php 

include("config.php");

// siswa
if (isset ($_POST ['btn_siswa_update'])){
	$nisn = $_GET['id'];
	$nama = $_POST['nama'];
	$pass = $_POST['pass'];
	$jk = $_POST['jk'];
	$ket = $_POST['keterangan'];

	$sql = "UPDATE tsiswa SET nama=:nama,pass=:pass,jk=:jk,keterangan=:ket WHERE nisn=:nisn";
	$query = $dbConn->prepare($sql);
	$query->bindparam(':nisn', $nisn);
	$query->bindparam(':nama', $nama);
	$query->bindparam(':pass', $pass);
	$query->bindparam(':jk', $jk);
	$query->bindparam(':ket', $ket);
	$query->execute();

	if($query){
		echo "
		<script language='javascript'>
			alert('Data Berhasil di perbarui!');
			document.location='index.php?page=siswa';
		</script>";
	}else {
		echo "<script>alert('Data Gagal Disimpan');history.go(-1)</script>";
	}

	$dbConn = null;
}




// user
if (isset ($_POST ['btn_user_update'])){
	$kd_admin = $_GET['id'];
	$nama_admin = $_POST['in_NamaAdmin'];
	$username = $_POST['in_Username'];
	$password = $_POST['in_Password'];
	$email = $_POST['in_Email'];

	$sql = "UPDATE tuser SET kd_admin=:kd_admin,nama_admin=:nama_admin,username=:username,password=:password,email=:email WHERE kd_admin=:kd_admin";
	$query = $dbConn->prepare($sql);
	$query->bindparam(':kd_admin', $kd_admin);
	$query->bindparam(':nama_admin', $nama_admin);
	$query->bindparam(':username', $username);
	$query->bindparam(':password', $password);
	$query->bindparam(':email', $email);
	$query->execute();

	if($query){
		echo "
		<script language='javascript'>
			alert('Data Berhasil di perbarui!');
			document.location='index.php?page=user';
		</script>";
	}else {
		echo "<script>alert('Data Gagal Disimpan');history.go(-1)</script>";
	}

	$dbConn = null;
}





?>