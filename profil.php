<div class="container">
<div class="row">
<div class="col-md-12 ">
</div>


<div class="login-info mt-3" align="left"  style="color:#000000" ><h5>
      <?php if(isset($_SESSION['user'])) {?> Anda Login Sebagai <b><?php echo $_SESSION['user']['nama_sekolah']; } ?> </b>
      <?php if(isset($_SESSION['admin'])) {?> Anda Login Sebagai <b><?php echo $_SESSION['admin']['username_admin']; } ?> </b>
      </h5>
</div>
</div>
</div>

<div class="alert alert-info" style="margin: 5px 13px 0px;">
					<p>Beberapa tips/saran dalam membuat Password : </p>
					<ol>
						<li>Panjang Password sebaiknya minimal 12 karakter</li>
						<li>Terdiri atas kombinasi huruf dan angka, misal p45sw0rd54y4am4n</li>
						<li>Jangan menggunakan informasi pribadi sebagai Password, <b>misal nama anak, nama orang tua, tempat tinggal dll</b></li>
						<li>Ubahlah Password anda secara berkala, <b>misal 6 bulan sekali</b></li>
						<li>Jangan membuat Password yang sama dengan Userid anda, <b>misal Userid="abcde", Password="abcde"</b></li>
					</ol>
				</div>
                

<div class="col-12 mt-3">												    
<a href="javascript:;" class="btn btn-info font-weight-bolder font-size-sm rounded-0" type="button" data-toggle="modal" data-target="#rubahpass"><span class="pr-1 fas fa-key"></span> Rubah Password</a>
</div>
                                                  
<form method="post"  action="insert.php">