<?php 
if(isset($_POST['login']))
{
$user = $_POST['user'];
$pass = $_POST['pass'];
$ambil = mysqli_query($conn,"select * from tuser WHERE username='$user' AND password='$pass'");

if(mysqli_num_rows($ambil) == 1){
$akun = mysqli_fetch_assoc($ambil);
if ($akun ['level'] == '1'){
$_SESSION["admin"] = $akun;


echo "<script>location='index.php';</script>";
}
}
else{
$ambil = mysqli_query($conn,"select * from tguru WHERE id_guru='$user' AND password='$pass'");

if(mysqli_num_rows($ambil) == 1){
$akun = mysqli_fetch_assoc($ambil);
$_SESSION["guru"] = $akun;


echo "<script>location='index.php';</script>";
}

else{
echo "<script>alert('Gagal Login, Periksa Akun Anda');</script>";

}}
}

 ?>

<div class="container">
<?php if (isset($_SESSION["admin"]) || isset($_SESSION["guru"])){?>
<h4 style="color:#000"><b><i class="fas fa-folder-open" style="color:#000"></i> Menu  Data Umum</b></h4>
<p>Silahkan pilih salah satu menu yang kami sediakan di bawah ini</p>

<div class="row">

<?php if (isset($_SESSION["admin"])){?>
 <div class="col-md-3">        
        <div class="card" style="width: 14rem;">
  			<div class="card-body text-center">
   			 <p class="card-title">Data Admin</p>
   				 <a href="index.php?page=user" class="btn btn-primary text-center">Buka</a>
  </div>
  
  </div>
</div>

  <div class="col-md-3">
        <div class="card" style="width: 14rem;">
  			<div class="card-body text-center">
   			 <p class="card-title">Data Siswa</p>
   				 <a href="index.php?page=siswa" class="btn btn-primary text-center">Buka</a>
  </div>
  
  </div>
</div>

<div class="col-md-3">        
        <div class="card" style="width: 14rem;">
  			<div class="card-body text-center">
   			 <p class="card-title">Data Guru</p>
   				 <a href="index.php?page=guru" class="btn btn-primary text-center">Buka</a>
  </div>
  
  </div>
</div>
<div class="col-md-3">       
        <div class="card" style="width: 15rem;">
  			<div class="card-body text-center">
   			 <p class="card-title">Data Mata Pelajaran</p>
   				 <a href="index.php?page=mapel" class="btn btn-primary text-center">Buka</a>
  </div>
  </div>
</div>
<?php } ?>

<?php if (isset($_SESSION["guru"])){?>
 <div class="col-md-3">        
        <div class="card" style="width: 14rem;">
  			<div class="card-body text-center">
   			 <p class="card-title">Ruang Ajar Guru</p>
   				 <a href="index.php?page=ruang" class="btn btn-primary text-center">Buka</a>
  </div>
  
  </div>
</div>

  
<?php } ?>

  <!-- informasi -->
	<td>&nbsp;</td>
	<div class="container">
	<h4 style="color:#000"><b><i class="fas fa-info-circle" style="color:#000"></i> Layanan</b></h4>

</div>
<?php if (isset($_SESSION["admin"])){?>
<div class="col-md-3">        
        <div class="card" style="width: 14rem;">
  			<div class="card-body text-center">
   			 <p class="card-title">Pembayaran SPP</p>
   				 <a href="index.php?page=spp" class="btn btn-primary text-center">Buka</a>
  </div>
  
  </div>
</div>
<?php } if (isset($_SESSION["guru"])){?>
  <div class="col-md-3">
        <div class="card" style="width: 14rem;">
  			<div class="card-body text-center">
   			 <p class="card-title">Presensi Siswa</p>
   				 <a href="index.php?page=presensi" class="btn btn-primary text-center">Buka</a>
  </div>
  
  </div>
</div>
<?php } ?>
<div class="container">
	<h4 style="color:#000"><b><i class="fa fa-book fa-fw" style="color:#000"></i> Laporan/Rekap</b></h4>

</div>
<?php if (isset($_SESSION["admin"])){?>
<div class="col-md-3">        
        <div class="card" style="width: 14rem;">
  			<div class="card-body text-center">
   			 <p class="card-title">Laporan Pembayaran SPP</p>
   				 <a href="index.php?page=lap_spp" class="btn btn-primary text-center">Buka</a>
  </div>
  
  </div>
</div>
<?php } if (isset($_SESSION["guru"])){?>
  <div class="col-md-3">
        <div class="card" style="width: 14rem;">
  			<div class="card-body text-center">
   			 <p class="card-title">Rekap Presensi Siswa</p>
   				 <a href="index.php?page=rekap" class="btn btn-primary text-center">Buka</a>
  </div>
  
  </div>
</div>

 

<?php } }

else{ 

?>
   <center>
 <h3>Login Admin/Guru</h3>
<form method="post">
  <div class="form-group mb-2 ml-2 mr-2" style="width: 30rem;">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="user" aria-describedby="emailHelp">
   
  </div>
  <div class="form-group  mb-2 ml-2 mr-2"  style="width: 30rem;">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="pass">
  </div>
 
  <button type="submit" name="login" class="btn btn-primary  mb-2 ml-2 mr-2">Submit</button>
</form><br />
<a href="index.php?page=home2">Login Siswa</a>
</center>
<?php } 

?>
</div>