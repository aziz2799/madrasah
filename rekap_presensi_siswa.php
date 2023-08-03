<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>

<body>
<?php
$id_kelas=$_GET['presen1'];
$nisn=$_SESSION['siswa']['nisn'];
$nama_siswa=$_SESSION['siswa']['nama'];
$sql_ruang="SELECT * FROM truang,tmatpel WHERE truang.id_matpel=tmatpel.id_matpel and id_ruang='$id_kelas'";
$hasil_ruang=mysqli_query($conn,$sql_ruang);	
$data_ruang=mysqli_fetch_array($hasil_ruang);
$matpel=$data_ruang['nama_matpel'];
$kelas=$data_ruang['kelas'];
$semester=$data_ruang['semester'];
?>

            <div class="card-header py-3">
              <center><h2 class="m-0 font-weight-bold text-primary">Rekap Presensi Kehadiran 
                <?php echo "$nama_siswa($nisn) Pada Mata Pelajaran $matpel Kelas $kelas Semester $semester "; ?> </h2>
            </div>
 
                  <table  width="50%" border="1" style="margin-left:auto;margin-right:auto"  >
                  <thead>
                    <tr align="center">
                      <th>No</th>
                      <th>Tanggal Presensi</th>
                      <th>Keterangan</th>

                    </tr>
                  </thead>
                  <tbody align="center">
                    <?php

                    $sql="SELECT * FROM tpresensi WHERE nisn='$nisn' and id_ruang='$id_kelas' ";
                    $query=mysqli_query($conn,$sql);
                    $i = 1;
                    while ($data=mysqli_fetch_array($query)){

                        $ket=$data["ket"];
                        $tgl=$data["tgl_presensi"];
                    ?>
                    <tr>
                      <td><?=$i++;?></td>
					  <td><?= $tgl;?></td>
                      <td><?= $ket;?></td>
                    
                  
                    </tr>
                    <?php }?>
                    </tbody>
                    
           <p>Total Hadir:                <?php
                       $no_daftar="SELECT COUNT(ket) as total FROM `tpresensi` WHERE ket='Hadir' and id_ruang='$id_kelas' and nisn='$nisn'";
	                     $hasil=mysqli_query($conn,$no_daftar);	
                       $data1=mysqli_fetch_array($hasil);
                       $ket1=$data1['total']; echo $ket1; ?></p>
           <p>Total Sakit:    <?php
                       $no_daftar="SELECT COUNT(ket) as total FROM `tpresensi` WHERE ket='Sakit' and id_ruang='$id_kelas' and nisn='$nisn'";
	                     $hasil=mysqli_query($conn,$no_daftar);	
                       $data1=mysqli_fetch_array($hasil);
                       $ket1=$data1['total']; echo $ket1; ?></p>
           <p>Total Ijin:      <?php
                       $no_daftar="SELECT COUNT(ket) as total FROM `tpresensi` WHERE ket='Ijin' and id_ruang='$id_kelas' and nisn='$nisn'";
	                     $hasil=mysqli_query($conn,$no_daftar);	
                       $data1=mysqli_fetch_array($hasil);
                       $ket1=$data1['total']; echo $ket1; ?></p>
           <p>Total Absen:  <?php
                       $no_daftar="SELECT COUNT(ket) as total FROM `tpresensi` WHERE ket='Absen' and id_ruang='$id_kelas' and nisn='$nisn'";
	                     $hasil=mysqli_query($conn,$no_daftar);	
                       $data1=mysqli_fetch_array($hasil);
                       $ket1=$data1['total']; echo $ket1; ?></p>
                </center>

</body>
</html>