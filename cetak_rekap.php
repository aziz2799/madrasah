<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>

<body>
<?php
include("config.php");
include('koneksi.php');
$id_kelas=$_GET['id'];
$sql_ruang="SELECT * FROM truang,tmatpel WHERE truang.id_matpel=tmatpel.id_matpel and id_ruang='$id_kelas'";
$hasil_ruang=mysqli_query($conn,$sql_ruang);	
$data_ruang=mysqli_fetch_array($hasil_ruang);
$matpel=$data_ruang['nama_matpel'];
$kelas=$data_ruang['kelas'];
$semester=$data_ruang['semester'];
?>

            <div class="card-header py-3">
              <center><h2 class="m-0 font-weight-bold text-primary">Rekap Presensi <?php echo "$matpel Kelas $kelas Semester $semester "; ?> </h2>
            </div>
            <h2 align="center"><img src="img/logo.jpg" style="width:140px;height:140px;"><br>
Madrasah Aliyah Nurul Ummah<br>
</h2>
                  <table  width="50%" border="1" style="margin-left:auto;margin-right:auto"  >
                  <thead>
                    <tr align="center">
                      <th>No</th>
					  <th>NIS</th>
                      <th>Nama</th>
                      <th>Hadir</th>
                      <th>Sakit</th>
                      <th>Ijin</th>
                      <th>Absen</th>

                    </tr>
                  </thead>
                  <tbody align="center">
                    <?php

                    $sql="SELECT * FROM tdetil_ruang,tsiswa WHERE tdetil_ruang.nisn=tsiswa.nisn and id_ruang='$id_kelas' order by nama asc";
                    $query=mysqli_query($conn,$sql);
                    $i = 1;
                    while ($data=mysqli_fetch_array($query)){
                        $nisn=$data["nisn"];
						$nis=$data["nis"];
                        $nama=$data["nama"];
                    ?>
                    <tr>
                      <td><?=$i++;?></td>
					  <td><?= $nis;?></td>
                      <td><?= $nama;?></td>
                      <td> 
                      <?php
                       $no_daftar="SELECT COUNT(ket) as total FROM `tpresensi` WHERE ket='Hadir' and id_ruang='$id_kelas' and nisn='$nisn'";
	                     $hasil=mysqli_query($conn,$no_daftar);	
                       $data1=mysqli_fetch_array($hasil);
                       $ket1=$data1['total']; echo $ket1; ?>
                      </td>
                      <td> 
                      <?php
                       $no_daftar="SELECT COUNT(ket) as total FROM `tpresensi` WHERE ket='Sakit' and id_ruang='$id_kelas' and nisn='$nisn'";
	                     $hasil=mysqli_query($conn,$no_daftar);	
                       $data1=mysqli_fetch_array($hasil);
                       $ket1=$data1['total']; echo $ket1; ?>
                      </td>
                      <td> 
                      <?php
                       $no_daftar="SELECT COUNT(ket) as total FROM `tpresensi` WHERE ket='Ijin' and id_ruang='$id_kelas' and nisn='$nisn'";
	                     $hasil=mysqli_query($conn,$no_daftar);	
                       $data1=mysqli_fetch_array($hasil);
                       $ket1=$data1['total']; echo $ket1; ?>
                      </td>
                      <td> 
                      <?php
                       $no_daftar="SELECT COUNT(ket) as total FROM `tpresensi` WHERE ket='Absen' and id_ruang='$id_kelas' and nisn='$nisn'";
	                     $hasil=mysqli_query($conn,$no_daftar);	
                       $data1=mysqli_fetch_array($hasil);
                       $ket1=$data1['total']; echo $ket1; ?>
                      </td>
                    </tr>
                    <?php }?>
                    </tbody>
                </table>
           
                </center>

</body>
</html>