
<?php 
error_reporting(0);
class Item{
 var $kd;
 var $nama;
 var $hrg;
 var $jml;
}
$cart=[];
  if (empty($_SESSION['cart'])) {
$cart=[];
 }
else{$cart = unserialize(serialize($_SESSION['cart']));}
if(isset($_POST['btn_tambah']) && !isset($_POST['update']))  { 
	
	$item = new Item();
	$item->kd = $_POST['kd_costumer'];
	$item->nama = $_POST['nama_barang'];
	$item->hrg = $_POST['hrg_brg'];
	$item->jml = $_POST['jml_brg'];
	$index = -1;
	$cart = unserialize(serialize($_SESSION['cart']));
		if($index == -1) 
			$_SESSION['cart'][] = $item; 
			
echo "<script>location='index.php?page=jualjasa';</script>";
			
}
// Delete product in cart
if(isset($_GET['index']) && !isset($_POST['update'])) {
	$cart = unserialize(serialize($_SESSION['cart']));
	unset($cart[$_GET['index']]);
	$cart = array_values($cart);
	$_SESSION['cart'] = $cart;
}


$s=0;
 	for($i=0; $i<count($cart); $i++){
 		$s=$s+$cart[$i]->jml;}
?>
<h1><center>Transaksi Pembayaran SPP</center></h1>


<br />
<form action="insert.php" method="post">
<table>
<tr>
<td>Kode Pembayaran SPP</td>
<td><input class="form-control" type="text" value="<?php 
$no_daftar="SELECT MAX( CAST( SUBSTRING( kd_bayar_spp, 4, LENGTH( kd_bayar_spp ) ) AS UNSIGNED ) ) AS maxID
FROM tbayar_spp";
$hasil=mysqli_query($conn,$no_daftar);	
$data1=mysqli_fetch_array($hasil);
$idmax=$data1['maxID'];
$nomor=$idmax++;
$nip=sprintf($idmax); echo "000$nip"; ?>" name="kd_bayar" readonly="readonly" /></td>
</tr>
<tr>
<td>NISN</td>
<td><input class="form-control" type="text" value="" name="nisn" id="nisn" /></td>
</tr>
<tr>
<td>Nama Siswa</td>
<td><input type="text"  name="nama" id="nama" class="form-control"  readonly/></td>
</tr>
<tr>
<td>Jumlah Pembayaran</td>
<td><h4>Rp.120.000</h4><input type="hidden" name="jumlah"   id="jumlah" class="form-control"  value="120000"  /></td>
</tr>
<tr>
<td>Keterangan SPP</td>
<td>  <select name="ket">
  <option value="01">Januari</option>
  <option value="02">Februari</option>
  <option value="03">Maret</option>
  <option value="04">April</option>
  <option value="05">Mei</option>
  <option value="06">Juni</option>
  <option value="07">Juli</option>
  <option value="08">Agustus</option>
  <option value="09">September</option>
  <option value="10">Oktober</option>
  <option value="11">November</option>
  <option value="12">Desember</option>
  </select>
  <select name="tahun">
  <?php
  $mulai= date('Y') - 5;
  for($i = $mulai;$i<$mulai + 70;$i++){
      $sel = $i == date('Y') ? ' selected="selected"' : '';
      echo '<option value="'.$i.'"'.$sel.'>'.$i.'</option>';
  }
  ?>
  </select>
   <select name="kete">
  <option value="Ganjil">Ganjil</option>
  <option value="Genap">Genap</option>
  </select>
  </td>
</tr>
<tr>

<td></td>
<td><input type="submit" name="btn_bayar" class="btn btn-info" value="Tambah"/></td>
</tr>
</table>
</form>


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
    
       
 
