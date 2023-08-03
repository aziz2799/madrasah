<?php 

// koneksi
include("config.php");
include("koneksi.php");

// suplayer
if (isset ($_POST ['btn_suplayer_tambah'])){
	$nama_sup = $_POST['in_NamaSup'];
	$alamat_sup = $_POST['in_AlamatSup'];
	$telepon_sup = $_POST['in_TeleponSup'];
	$kode_pos = $_POST['in_KodePos'];
	$no_rek = $_POST['in_NoRek'];
	$password = $_POST['in_Password'];
	$username = $_POST['in_Username'];
	$no_daftar="SELECT MAX( CAST( SUBSTRING( kd_sup, 3, LENGTH( kd_sup ) ) AS UNSIGNED ) ) AS maxID
FROM tsupplier";
$hasil=mysqli_query($conn,$no_daftar);	
$data1=mysqli_fetch_array($hasil);
$idmax=$data1['maxID'];
$nomor=$idmax++;
$nip="SP".sprintf($idmax);

	$sql = "INSERT INTO tsupplier (kd_sup,nama_sup,alamat_sup,telepon_sup,kode_pos,no_rek,username,password) VALUES (:kd_sup,:nama_sup,:alamat_sup,:telepon_sup,:kode_pos,:no_rek,:username,:password)";
	$query = $dbConn->prepare($sql);
	$query->bindparam(':kd_sup', $nip);
	$query->bindparam(':nama_sup', $nama_sup);
	$query->bindparam(':alamat_sup', $alamat_sup);
	$query->bindparam(':telepon_sup', $telepon_sup);
	$query->bindparam(':kode_pos', $kode_pos);
	$query->bindparam(':no_rek', $no_rek);
	$query->bindparam(':username', $username);
	$query->bindparam(':password', $password);
	$query->execute();

	if($query){
		echo "
		<script language='javascript'>
			alert('Data Berhasil di simpan!');
			document.location='index.php?page=suplayer';
		</script>";
	}else {
		echo "<script>alert('Data Gagal Disimpan');history.go(-1)</script>";
	}

	$dbConn = null;
}

//barang
if (isset ($_POST ['btn_barang_tambah'])){
	$kd_brg = $_POST['in_KdBrg'];
	$nama_brg = $_POST['in_NamaBrg'];
	$hrg_beli = $_POST['in_HrgBeli'];
	$hrg_jual = $_POST['in_HrgJual'];
	$stok = $_POST['in_Stok'];

	$sql = "INSERT INTO tbarang (kd_brg,nama_brg,hrg_beli,hrg_jual,stok) VALUES (:kd_brg,:nama_brg,:hrg_beli,:hrg_jual,:stok)";
	$query = $dbConn->prepare($sql);
	$query->bindparam(':kd_brg', $kd_brg);
	$query->bindparam(':nama_brg', $nama_brg);
	$query->bindparam(':hrg_beli', $hrg_beli);
	$query->bindparam(':hrg_jual', $hrg_jual);
	$query->bindparam(':stok', $stok);
	$query->execute();

	if($query){
		echo "
		<script language='javascript'>
			alert('Data Berhasil di simpan!');
			document.location='index.php';
		</script>";
	}else {
		echo "<script>alert('Data Gagal Disimpan');history.go(-1)</script>";
	}

	$dbConn = null;
}


// USER
if (isset ($_POST ['btn_user_tambah'])){
	
	//$kd_admin = $_POST['in_KdAdmin'];
	$nama_admin = $_POST['in_NamaAdmin'];
	$username = $_POST['in_Username'];
	$password = $_POST['in_Password'];
	$email = $_POST['in_Email'];
	$level = $_POST['in_Level'];
	$query="select *from tuser where username='$username'";
	$result1=mysqli_query($conn,$query);
	$row1=mysqli_num_rows($result1);
	if($row1==1){echo "<script>alert('Username Sudah Ada');history.go(-1)</script>";}
	else{
	$sql = "INSERT INTO tuser (nama_admin,username,password,email,level) VALUES (:nama_admin,:username,:password,:email,:level)";
	$query = $dbConn->prepare($sql);
	//$query->bindparam(':kd_admin', $kd_admin);
	$query->bindparam(':nama_admin', $nama_admin);
	$query->bindparam(':username', $username);
	$query->bindparam(':password', $password);
	$query->bindparam(':email', $email);
	$query->bindparam(':level', $level);
	$query->execute();

	if($query){
		echo "
		<script language='javascript'>
			alert('Data Berhasil di simpan!');
			document.location='index.php?page=user';
		</script>";
	}else {
		echo "<script>alert('Data Gagal Disimpan');history.go(-1)</script>";
	}

	$dbConn = null;
	}
}


// Akun
if (isset ($_POST ['btn_akun_tambah'])){
	$kode_akun = $_POST['in_KodeAkun'];
	$nama_akun = $_POST['in_NamaAkun'];
	$jenis_akun = $_POST['in_JenisAkun'];

	$sql = "INSERT INTO takun VALUES (:kode_akun,:nama_akun,:jenis_akun)";
	$query = $dbConn->prepare($sql);
	$query->bindparam(':kode_akun', $kode_akun);
	$query->bindparam(':nama_akun', $nama_akun);
	$query->bindparam(':jenis_akun', $jenis_akun);
	$query->execute();

	if($query){
		echo "
		<script language='javascript'>
			alert('Data Berhasil di simpan!');
			document.location='index.php?page=akun';
		</script>";
	}else {
		echo "<script>alert('Data Gagal Disimpan');history.go(-1)</script>";
	}

	$dbConn = null;
}

// Jasa
if (isset ($_POST ['btn_jasa_tambah'])){
	$nama_jasa= $_POST['in_nama_jasa'];
	$harga_jasa = $_POST['in_harga_jasa'];

	$sql = "INSERT INTO tjasa VALUES ('',:nama_jasa, :harga_jasa)";
	$query = $dbConn->prepare($sql);
	$query->bindparam(':nama_jasa', $nama_jasa);
	$query->bindparam(':harga_jasa', $harga_jasa);
	$query->execute();

	if($query){
		echo "
		<script language='javascript'>
			alert('Data Berhasil di simpan!');
			document.location='index.php?page=jasa';
		</script>";
	}else {
		echo "<script>alert('Data Gagal Disimpan');history.go(-1)</script>";
	}

	$dbConn = null;
}


// Customer
if (isset ($_POST ['btn_customer_tambah'])){
	
	$nama_cus = $_POST['in_NamaCus'];
	$alamat_cus = $_POST['in_AlamatCus'];
	$telepon_cus = $_POST['in_TeleponCus'];
	$no_daftar="SELECT MAX( CAST( SUBSTRING( kd_cus, 3, LENGTH( kd_cus ) ) AS UNSIGNED ) ) AS maxID
FROM tcustomer";
$hasil=mysqli_query($conn,$no_daftar);	
$data1=mysqli_fetch_array($hasil);
$idmax=$data1['maxID'];
$nomor=$idmax++;
$nip="CS".sprintf($idmax);

	$sql = "INSERT INTO tcustomer (kd_cus,nama_cus,alamat_cus,telepon_cus) VALUES (:kd_cus,:nama_cus,:alamat_cus,:telepon_cus)";
	$query = $dbConn->prepare($sql);
	$query->bindparam(':kd_cus', $nip);
	$query->bindparam(':nama_cus', $nama_cus);
	$query->bindparam(':alamat_cus', $alamat_cus);
	$query->bindparam(':telepon_cus', $telepon_cus);
	$query->execute();

	if($query){
		echo "
		<script language='javascript'>
			alert('Data Berhasil di simpan!');
			document.location='index.php?page=customer';
		</script>";
	}else {
		echo "<script>alert('Data Gagal Disimpan');history.go(-1)</script>";
	}

	$dbConn = null;
}

?>