<?php 
include('koneksi.php');
include('config.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  
<link rel="icon" type="image/png" href="Gambar/logo_nu.png">
  <title>Madrasah Aliyah Nurul Ummah</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  
   <link href="css/style.css" type="text/css" rel="stylesheet">
  
   <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
   
   <link rel="stylesheet" href="js/jquery-ui.css" />
 

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    
    
      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-0">
         <img src="Gambar/logo_nu.png" width="110" height="80" class="mb-2 mt-4">
        </div>
      </a>
                          
                 
      <div class="login-info mt-5" align="center" >
      <a href="index.php" style="color:#000000">
      <span><b>
      <img src="Gambar/user.png" width"30" height="30" alt="me" class="online" /> 
      <?php if(isset($_SESSION['guru'])) {?> <?php echo $_SESSION['guru']['nama']; } ?> 
      <?php if(isset($_SESSION['admin'])) {?> <?php echo $_SESSION['admin']['nama_admin']; } ?>
	  <?php if(isset($_SESSION['siswa'])) {?> <?php echo $_SESSION['siswa']['nama']; } ?>
      </b></span>
      
      
      <hr class="sidebar-divider mt-2">
      </a>
	 	                                                        
      	<li class="nav-item active">
		  <?php if(isset($_SESSION['siswa'])) {?> <a class="nav-link" href="index.php?page=home2"><?php } else{ ?>
			<a class="nav-link" href="index.php">
			<?php } ?>
        <span>Dashboard</span></a>
        </li>
        
      	<?php  if(isset($_SESSION['admin'])){ ?>
      	<hr class="sidebar-divider">
 		<li class="nav-item active">
        <a class="nav-link" href="index.php?page=user">

       
        <span>Data Admin</span></a>
      	</li>
        <hr class="sidebar-divider">
 		<li class="nav-item active">
        <a class="nav-link" href="index.php?page=siswa">
          
        <span>Data Siswa</span></a>
      	</li>
       	<hr class="sidebar-divider">
 		<li class="nav-item active">
        <a class="nav-link" href="index.php?page=guru">
          
        <span>Data Guru</span></a>
      	</li>
      	<hr class="sidebar-divider">
       	<li class="nav-item active">
        <a class="nav-link" href="index.php?page=mapel">
          
        <span>Data Mata Pelajaran</span></a>
      	</li>
       	
        <?php }
		?>       
       
	   
	   <?php  if(isset($_SESSION['guru'])){ ?>
      	<hr class="sidebar-divider">
 		<li class="nav-item active">
        <a class="nav-link" href="index.php?page=ruang">

       
        <span>Data Ruang Ajar</span></a>
      	</li>
        
		  <hr class="sidebar-divider">
 		<li class="nav-item active">
        <a class="nav-link" href="index.php?page=presensi">

       
        <span>Presensi Siswa</span></a>
      	</li>
		  <hr class="sidebar-divider">
 		<li class="nav-item active">
        <a class="nav-link" href="index.php?page=rekap">

       
        <span>Rekap Presensi Siswa</span></a>
      	</li>
       	
        <?php }
		?> 
      	   <?php  if(isset($_SESSION['siswa'])){ ?>
      	<hr class="sidebar-divider">
 		<li class="nav-item active">
        <a class="nav-link" href="index.php?page=lap_spps">

       
        <span>Laporan SPP</span></a>
      	</li>
        
		  <hr class="sidebar-divider">
 		<li class="nav-item active">
        <a class="nav-link" href="index.php?page=presensi1">

       
        <span>Presensi Kehadiran Siswa</span></a>
      	</li>
        <?php }
		?> 
     	<?php 
	 	if(isset($_SESSION['admin'])|| isset($_SESSION['guru'])|| isset($_SESSION['siswa'])){
	 	?>
       	<hr class="sidebar-divider">
 		<li class="nav-item active">
        <a class="nav-link" href="index.php?page=logout">
          
        <span>Logout</span></a>
      	</li>

<?php } ?>
    
       
      <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>
		</ul>

   
    <div id="content-wrapper" class="d-flex flex-column">

     
      <div id="content">

      
        <div class="container-fluid">
        
        <h2 class=" mt-4  font-weight-bold text-center" style="font-family:Verdana, Geneva, sans-serif"> Sistem Informasi Pembayaran SPP Dan Monitoring Kehadiran Siswa<br>
        <h3 class=" mt-1   font-weight-bold text-center" style="font-family:Verdana, Geneva, sans-serif"> Madrasah Aliyah Nurul Ummah<br>
        </h2></h5>
		<hr>


         <?php 
	if(isset($_GET['page'] )){
		$page = $_GET['page'];
		//$detil = $_GET['detil'];
		switch ($page) {
			
					case 'akuntambah':
					include "akun_form_tambah.php";
					break;
					case 'akunhapus':
					include "akun_hapus.php";
					break;
				case 'presensi':
					include "presensi.php";
					break;
				case 'presensi1':
					include "presensi2.php";
					break;	
					case 'spp':
					include "spp.php";
					break;	
				case 'lap_spp':
					include "laporan_spp.php";
					break;
				case 'lap_spps':
					include "laporan_spp_siswa.php";
					break;	
				case 'guru':
						include "guru_form_tambah.php";
						break;
				case 'siswa':
					include "siswa_form_tambah.php";
					break;
				case 'ruang':
					include "ruang_form_tambah.php";
					break;	
				case 'rekap':
					include "rekap_presensi.php";
					break;
				case 'user':
					include "user_lis.php";
					break;
				case 'lap_dana':
					include "laporan_dana_bos.php";
					break;	
				case 'home2':
					include "home2.php";
					break;	
				case 'mapel':
						include "mapel_form_tambah.php";
						break;
				case 'fuser':
					include "user_form_tambah.php";
					break;
			case 'admin':
				include "home2.php";
				break;
			case 'logout':
			unset ($_SESSION['admin']);
				unset ($_SESSION['guru']);
				unset ($_SESSION['siswa']);
				echo "<script>location='index.php';</script>";
				break;
			
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
		}else if(isset($_GET['deletesiswa'] )){
		$detil = $_GET['deletesiswa'];
		switch ($detil) {
			case $detil:
				include "form_input_siswa.php";
				break;			
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
		
		}else if(isset($_GET['updatesiswa'] )){
		$detil = $_GET['updatesiswa'];
		switch ($detil) {
			case $detil:
				include "siswa_form_update.php";
				break;			
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
		
			}
			else if(isset($_GET['presen'] )){
				$id_ruang = $_GET['presen'];
				switch ($id_ruang) {
					case $id_ruang:
						include "presensi_form_tambah.php";
						break;			
					default:
						echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
						break;
				}
				
				}else if(isset($_GET['presen1'] )){
					$id_ruang = $_GET['presen1'];
					switch ($id_ruang) {
						case $id_ruang:
							include "rekap_presensi_siswa.php";
							break;			
						default:
							echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
							break;
				}
				
					}else if(isset($_GET['nonaktif'] )){
				$status1 = $_GET['nonaktif'];
				switch ($status1) {
					case $status1:
						include "siswa_form_tambah.php";
						break;			
					default:
						echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
						break;
				}
				
					
					}else if(isset($_GET['updateuser'] )){
				$detil = $_GET['updateuser'];
				switch ($detil) {
					case $detil:
						include "user_form_update.php";
						break;			
					default:
						echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
						break;
				}
				
				}else if(isset($_GET['aktif'] )){
					$status1 = $_GET['aktif'];
					switch ($status1) {
						case $status1:
							include "siswa_form_tambah.php";
							break;			
						default:
							echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
							break;
					}
				
					}
	
	
		
	else{
		include "home.php";
	}
	 ?>
  

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Aziz Maulana 2023</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  
  <script src="js/jquery-1.8.3.js"></script>
<script src="js/jquery-ui.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>
  
   <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>
    

</body>

</html>
