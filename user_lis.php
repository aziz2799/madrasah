

   <script type="text/javascript">

   function getConfirmation(){
	   var retVal = confirm("Anda yakin dengan data yang anda hapus?");
	   if( retVal == true ){
	      return true;
	   }
	   else{
	      return false;
	   }
	}  

  </script>



<div id="wrapper">
<!-- Navigasi Panel -->
<?php

?>


	<div class="container">
<div class="row">
<div class="col-md-12 ">
<h2 align = "center">DAFTAR ADMIN</h2>
		<p align = "center"><a href="index.php?page=fuser">Tambah</a></p>
</div>
</div>
  <div id="content">
  <div id="article">

  	<div id="tam2">

  	</div>


<table width="900px" align="center" border="1" class="table table-bordered" style="border-collapse:collapse">
	<tr>
    <th>Pilihan</th>
		<th>Kd Admin</th>
		<th>Nama</th>
		<th>Username</th>
		<th>Password</th>
		<th>Email</th>
			</tr>
	<?php
		include("config.php");
		$result = $dbConn->query("SELECT * FROM tuser");
		while($row = $result->fetch(PDO::FETCH_ASSOC)) { 
	?>
		<tr>
         <td width="200px">
			     <a href="index.php?updateuser=<?php echo $row['kd_admin']?>">
			            UBAH |
		        </a>
              <a href="user_hapus.php?id=<?php echo $row['kd_admin']?>" >
  			            HAPUS
  			     </a>
         </td>
			<td>
				<?php echo $row['kd_admin']; ?>
			</td>
			<td>
				<?php echo $row['nama_admin']; ?>
			</td>
			<td align="center">
				<?php echo $row['username']; ?>
			</td>
			<td align="center">
				<?php echo $row['password']; ?>
			</td>
			<td>
				<?php echo $row['email']; ?>
			</td>
			
		</tr>
	<?php
		}
	?>

</table>


 </div>
 </div></div></div>

 

