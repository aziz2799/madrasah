


  <div class="container">
  <?php if (isset($_SESSION["siswa"])){?>
<h4 style="color:#000"><b><i class="fas fa-folder-open" style="color:#000"></i> Layanan</b></h4>
<p>Silahkan pilih salah satu menu yang kami sediakan di bawah ini</p>

<div class="row">

 <div class="col-md-3">        
        <div class="card" style="width: 14rem;">
  			<div class="card-body text-center">
   			 <p class="card-title">Laporan Pembayaran SPP</p>
   				 <a href="index.php?page=lap_spps" class="btn btn-primary text-center">Buka</a>
  </div>
  
  </div>
</div>

  <div class="col-md-3">
        <div class="card" style="width: 14rem;">
  			<div class="card-body text-center">
   			 <p class="card-title">Presensi Kehadiran Siswa</p>
   				 <a href="index.php?page=presensi1" class="btn btn-primary text-center">Buka</a>
  </div>
  
  </div>
</div>


  <!-- informasi -->
	
  </div>
  <?php   } else {?>
    <center>
 <h3>Login Siswa</h3>
<form method="post">
  <div class="form-group mb-2 ml-2 mr-2" style="width: 30rem;">
    <label for="exampleInputEmail1">NIS</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="username" aria-describedby="emailHelp">
   
  </div>
  <div class="form-group  mb-2 ml-2 mr-2"  style="width: 30rem;">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
 
  <button type="submit" name="login" class="btn btn-primary  mb-2 ml-2 mr-2">Submit</button>
</form><br />
<a href="index.php">Login Admin</a>
</center>
<?php } ?>



</div>





<?php
if(isset($_POST['login']))
{
$user = $_POST['username'];
$pass = $_POST['password'];
$ambil = mysqli_query($conn,"select * from tsiswa WHERE nis='$user' AND pass='$pass'");

mysqli_num_rows($ambil) == 1;
$akun = mysqli_fetch_assoc($ambil);
if ($akun  >= '1'){
$_SESSION["siswa"] = $akun;


echo "<script>location='index.php?page=home2';</script>";
}
else{
echo "<script>alert('Gagal Login, Periksa Akun Anda');</script>";
	echo "<script>location='index.php?page=home2';</script>";	
}
}

?>