<?php
	include("config.php");

	$id = $_GET['id'];
	$sql = "DELETE FROM tuser WHERE kd_admin=:id";
	$query = $dbConn->prepare($sql);
	$query->execute(array(':id' => $id));

	// Cek jika proses Berhasil
	if($query){
		echo "
		<script language='javascript'>alert('Data Berhasil di Hapus!');
			document.location='index.php?page=user';
		</script>";
	}else {
		echo "<script>alert('Data Gagal Disimpan');history.go(-1)</script>";
	}
	// Tutup Koneksi
	$dbConn = null;

?>