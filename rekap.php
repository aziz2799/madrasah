<div class="container">
<div class="row">
<div class="col-md-12 ">
<h4 class="font-weight-bold text-center" style="color:#000000">REKAPITULASI DATA PERMOHONAN YANG TELAH SELESAI DI PROSES</h4>
</div>
</div>


</div>

<hr>
<div class="row">
 <div class="col-md-3">        
        <div class="card" style="width: 14rem;">
  			<div class="card-body text-center">
             <p class="card-title">
             <?php
             $query="SELECT COUNT(*) AS jumlah FROM surat_pindah where status='Sudah ACC'";
	 $result = mysqli_query($conn, $query);
	$row = mysqli_fetch_array($result);
	echo "Jumlah Sudah ACC ".$row['jumlah'];
	?></p>
   			 <p class="card-title">Surat Rekomendasi Pindah Sekolah</p>
   				 <a href="index.php?page=pindah4" class="btn btn-primary text-center">Lihat</a>
  </div>
  
  </div>
</div>

  <div class="col-md-3">
        <div class="card" style="width: 14rem;">
  			<div class="card-body text-center">
              <p class="card-title">
             <?php
             $query="SELECT COUNT(*) AS jumlah FROM surat_ijazah_hilang where status='Sudah ACC'";
	 $result = mysqli_query($conn, $query);
	$row = mysqli_fetch_array($result);
	echo "Jumlah Sudah ACC ".$row['jumlah'];
	?></p>
   			 <p class="card-title">Surat Keterangan Pengganti Ijazah Hilang</p>
   				 <a href="index.php?page=ijazahhilang4" class="btn btn-primary text-center">Lihat</a>
  </div>
  
  </div>
</div>

<div class="col-md-3">        
        <div class="card" style="width: 14rem;">
  			<div class="card-body text-center">
             <p class="card-title">
             <?php
             $query="SELECT COUNT(*) AS jumlah FROM surat_ijazah_rusak where status='Sudah ACC'";
	 $result = mysqli_query($conn, $query);
	$row = mysqli_fetch_array($result);
	echo "Jumlah Sudah ACC ".$row['jumlah'];
	?></p>
   			 <p class="card-title">Surat Keterangan Pengganti Ijazah Rusak</p>
   				 <a href="index.php?page=ijazahrusak4" class="btn btn-primary text-center">Lihat</a>
  </div>
  
  </div>
</div>
<div class="col-md-3">       
        <div class="card" style="width: 15rem;">
  			<div class="card-body text-center">
             <p class="card-title">
             <?php
             $query="SELECT COUNT(*) AS jumlah FROM surat_ijazah_salah where status='Sudah ACC'";
	 $result = mysqli_query($conn, $query);
	$row = mysqli_fetch_array($result);
	echo "Jumlah Sudah ACC ".$row['jumlah'];
	?></p>
   			 <p class="card-title">Surat Keterangan Kesalahan Penulisan Ijazah</p>
   				 <a href="index.php?page=ijazahsalah4" class="btn btn-primary text-center">Lihat</a>
</div>
</div>
</div>
</div>
<?php include("koneksi.php"); ?>
