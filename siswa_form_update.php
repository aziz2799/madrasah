<!DOCTYPE html>
<html>
<head>
 <title>Edit Data</title>
  <link rel="stylesheet" type="text/css" href="../style/style.css?v=1" />

  <script type="text/javascript">

    function getConfirmation(){
      var retVal = confirm("Anda yakin dengan data yang anda ubah?");
      if( retVal == true ){
        return true;
      }
      else{
        return false;
      }
    }  

  </script>

</head>
<body>
<div id="wrapper">

<div class="container">
<div class="row">
<div class="col-md-12 ">
<h2 align = "center">Form Update Siswa</h2>
</div>
</div>

  <div id="content">
  <div id="article">

  <?php
	include("config.php");

	if (isset($_GET['updatesiswa'])){

		$id=$_GET['updatesiswa'];

    $result = $dbConn->prepare("SELECT * FROM tsiswa where nisn=:id");
    $result->execute(array(':id' => $id));
    $row = $result->fetch(PDO::FETCH_ASSOC);

    if ($row) {
      
    } else {
      echo "DATA TIDAK DI TEMUKAN";
    }

	}
  ?>

</table>

<input type="hidden" name="nisn" value="<?php echo $row['nisn']; ?>">
<form name="edit" action="proses_update.php?id=<?php echo $row['nisn']; ?>" method="post">
  <table cellpadding="3" cellspacing="0" align="center">

  <tr>
    <td>NISN</td>
    <td>:</td>
    <td><input type="text" name="in_KdAdmin" value="<?php echo $row['nisn']; ?>" readonly class="form-control"></td>
  </tr>
  <tr>
    <td>NIS</td>
    <td>:</td>
    <td><input type="text" name="in_KdAdmin" value="<?php echo $row['nis']; ?>" readonly  class="form-control"></td>
  </tr>
  <tr>
    <td>Nama</td>
    <td>:</td>
    <td><input type="text" name="nama" value="<?php echo $row['nama']; ?>"  class="form-control"></td>
  </tr>

  <tr>
    <td>Password</td>
    <td>:</td>
    <td><input type="password" name="pass" value="<?php echo $row['pass']; ?>" size="10"></td>
  </tr>

  <tr>
    <td>Jenis Kelamin</td>
    <td>:</td>
    <td><input type="radio" name="jk" value="Laki-laki" <?php if($row['jk']=='Laki-Laki'){ ?>checked<?php } ?> /><label class="ml-2">Laki-laki</label>
<input class="ml-3" type="radio" name="jk" value="Perempuan" <?php if($row['jk']=='Perempuan'){ ?>checked<?php } ?> /><label class="ml-2">Perempuan</label></td>
  </tr>

  <tr>
    <td>Keterangan</td>
    <td>:</td>
    <td><select name="keterangan" class="form-control" required>

                  <option value="Lulus" <?php if($row['keterangan']=='Lulus'){ ?>selected<?php } ?>>Lulus</option>
                  <option value="Belum Lulus" <?php if($row['keterangan']=='Belum Lulus'){ ?>selected<?php } ?>>Belum Lulus</option>
              </select></td>
  </tr>

     <tr>
    <td></td>
    <td></td>
    <td>
	<button type="submit" name="btn_siswa_update" class="btn btn-info">Submit</button>
   </td>
   </tr>
  </table>
 </form>
 <br>
 <br>



 </div>
 </div>

</body>
</html>
