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
<h2 align = "center">Form Update Admin</h2>
</div>
</div>
  <div id="content">
  <div id="article">

  <?php
	include("config.php");

	if (isset($_GET['updateuser'])){

		$id=$_GET['updateuser'];

    $result = $dbConn->prepare("SELECT * FROM tuser where kd_admin=:id");
    $result->execute(array(':id' => $id));
    $row = $result->fetch(PDO::FETCH_ASSOC);

    if ($row) {
      
    } else {
      echo "DATA TIDAK DI TEMUKAN";
    }

	}
  ?>

</table>

<input type="hidden" name="in_KdSup" value="<?php echo $row['kd_admin']; ?>">
<form name="edit" action="proses_update.php?id=<?php echo $row['kd_admin']; ?>" method="post">
  <table cellpadding="3" cellspacing="0" align="center">

  <tr>
    <td>ID User</td>
    <td>:</td>
    <td><input type="text" name="in_KdAdmin" value="<?php echo $row['kd_admin']; ?>" size="10" class="form-control"></td>
  </tr>
  
  <tr>
    <td>Nama</td>
    <td>:</td>
    <td><input type="text" name="in_NamaAdmin" value="<?php echo $row['nama_admin']; ?>" size="10" class="form-control"></td>
  </tr>

  <tr>
    <td>Username</td>
    <td>:</td>
    <td><input type="text" name="in_Username" value="<?php echo $row['username']; ?>" size="10" class="form-control"></td>
  </tr>

  <tr>
    <td>Password</td>
    <td>:</td>
    <td><input type="password" name="in_Password" value="<?php echo $row['password']; ?>" size="10"></td>
  </tr>

  <tr>
    <td>email</td>
    <td>:</td>
    <td><input type="text" name="in_Email" value="<?php echo $row['email']; ?>" size="10" class="form-control"></td>
  </tr>

     <tr>
    <td></td>
    <td></td>
    <td>
	<button type="submit" name="btn_user_update" class="btn btn-info">Submit</button>
   </td>
   </tr>
  </table>
 </form>
 <br>
 <br>



 </div>
 </div> </div> </div>

</body>
</html>
