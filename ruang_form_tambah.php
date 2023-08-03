<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>
<script type="text/javascript">
		function hanyaAngka(evt) {
		  var charCode = (evt.which) ? evt.which : event.keyCode
		   if (charCode > 31 && (charCode < 48 || charCode > 57))
 
		    return false;
		  return true;
		}
	</script>
<body>
<?php
error_reporting(0);

		
class Item{
 var $id;
 var $kredit;
 var $debit;
 var $keterangan;
 var $jml;
 var $ket;
}
$cart=[];
 if (empty($_SESSION['list'])) {
$cart=[];
 }
else{$cart = unserialize(serialize($_SESSION['list']));}
if(isset($_POST['tambah']))  { 
	
	$item = new Item();
	$item->nisn = $_POST['nisn'];
	$item->nama = $_POST['nama'];
	$index = -1;
	$cart = unserialize(serialize($_SESSION['list']));
		if($index == -1) 
			$_SESSION['list'][] = $item; 
			echo "<script>location='index.php?page=ruang';</script>";
			
}
// Delete product in cart
if(isset($_GET['index']) && !isset($_POST['update'])) {
	$cart = unserialize(serialize($_SESSION['list']));
	unset($cart[$_GET['index']]);
	$cart = array_values($cart);
	$_SESSION['list'] = $cart;
}

?>
<center><h1>Form Input Siswa Kedalam Ruangan</h1><br />
<form method="post">
<table>
<tr>
<td>NISN</td>
<td><input class="form-control" type="text" value="" name="nisn" id="nisn" /></td>
</tr>
<tr>
<td>Nama Siswa</td>
<td><input type="text"  name="nama" id="nama" class="form-control"  readonly/></td>
</tr>
<tr>

<td></td>
<td><input type="submit" name="tambah" value="Tambah" /> &ensp; <input type="reset" name="cancel" value="Batal" /></td>
</tr>
</table><br />
</form>
</center>
<center><h2>List Siswa Dalam Ruangan</h2> </center>
<form method="POST" action="insert.php">
	<table>
	<tr>
<td>Mata Pelajaran</td>
<td>:</td>
<td><select name="mapel" class="form-control">
 <?php 
	   $query="select*from tmatpel";
	  $result=mysqli_query($conn,$query);
	  while ($row=mysqli_fetch_array($result)){
	  ?>
       <option value="<?php echo $row['id_matpel']; ?>"><?php echo $row['nama_matpel'] ?></option>
      <?php } ?>
</select></td>
</tr>		
	<tr>
<td>Kelas</td>
<td>:</td>
<td><input type="text" name="kelas" onkeypress="" value=""  /></td>
</tr>
<tr>
<td>Semester</td>
<td>:</td>
<td><input type="text" name="semester" onkeypress="" value=""  /></td>
</tr>
	</table><br>
<table width="50%" border="1" >
<?php
$kode=$_SESSION["guru"]['id_guru'];?><input type="hidden" name="guru" value="<?php echo $kode; ?>" />

	<th width="20%">Option</th>
	<th width="30%">NISN</th>
    <th width="50%">Nama Siswa</th>
</tr>
<?php 
 	 $s = 0;
 	 $index = 0;
 	for($i=0; $i<count($cart); $i++){
 		$s=$s+$cart[$i]->jml;
 ?>	
   <tr>
    	<td><a href="index.php?page=ruang&&index=<?php echo $index; ?>" onClick="return confirm('Yakin dihapus?')" >Delete</a> </td>
   		<td> <?php echo $cart[$i]->nisn; ?> </td>
        <td> <?php echo $cart[$i]->nama; ?> </td>
   </tr>
 	<?php 
	 	$index++;
 	} ?>
</table>
<p>
  <input type="submit" name="submit_ruang" value="Simpan"/>
</p>
</form>
</body>
<link rel="stylesheet" href="js/jquery-ui.css" />
<script src="js/jquery-1.8.3.js"></script>
<script src="js/jquery-ui.js"></script>
 
      <script>
     $(function () {
        $("#nisn").autocomplete({  
            minLength:1,
            delay:0,
            source:'pencarian/ssiswa.php',   
           select:function(event, ui){				
				$('#nama').val(ui.item.nama);
                }
            });
        });
    </script>
</html>