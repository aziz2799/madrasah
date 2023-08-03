
<?php 
error_reporting(0);

?>
<h1><center>Transaksi Penerimaan Dana BOS</center></h1>


<br />
<form action="insert.php" method="post">
<table>
<tr>
<td>Kode Penerimaan Dana BOS</td>
<td><input class="form-control" type="text" value="<?php 
$no_daftar="SELECT MAX( CAST( SUBSTRING( kd_dana_bos, 3, LENGTH( kd_dana_bos ) ) AS UNSIGNED ) ) AS maxID
FROM tdana_bos";
$hasil=mysqli_query($conn,$no_daftar);	
$data1=mysqli_fetch_array($hasil);
$idmax=$data1['maxID'];
$nomor=$idmax++;
$nip=sprintf($idmax); echo "BS$nip"; ?>" name="kd_dana" readonly="readonly" /></td>
</tr>
<tr>
<td>Keterangan</td>
<td><input type="text"  name="keterangan" id="nama" class="form-control" /></td>
</tr>
<tr>
<td>Jumlah Penerimaan</td>
<td><input type="text" name="jumlah"  id="jumlah" class="form-control"  onchange='tryNumberFormat(this.form.thirdBox);'  /></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="btn_dana_bos" class="btn btn-info" value="Tambah"/></td>
</tr>
</table>
</form>

       
 
