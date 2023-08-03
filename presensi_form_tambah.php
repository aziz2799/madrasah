

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
  <div class="card shadow mb-4">
            <div class="card-header py-3">
              <center><h2 class="m-0 font-weight-bold text-primary">Daftar Siswa </h2></center>
            </div>
            <div class="card-body">             
                <form role="form" action="insert.php?id=<?php echo $_GET['presen'];?>" method="post" name="postform" enctype="multipart/form-data">
             
                  <table class="table table-bordered"  width="100%" cellspacing="0">
                  <thead>
                    <tr align="center">
                      <th>No</th>
                      <th>NISN</th>
					  <th>NIS</th>
                      <th>Nama</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody align="center">
                    <?php
                    $id_kelas=$_GET['presen'];
                    $sql="SELECT * FROM tdetil_ruang,tsiswa WHERE tdetil_ruang.nisn=tsiswa.nisn and id_ruang='$id_kelas' and status='Aktif' order by nama asc";
                    $query=mysqli_query($conn,$sql);
                    $i = 1;
                    while ($data=mysqli_fetch_array($query)){
                        $nisn=$data["nisn"];
						$nis=$data["nis"];
                        $nama=$data["nama"];
                    ?>
                    <tr>
                      <td><?=$i++;?></td>
                      <td><?= $nisn;?></td>
					  <td><?= $nis;?></td>
                      <td><?= $nama;?></td>
                      <td> 
                      <label class="radio-inline"><input type="radio" name="<?= 'ket'.$data["nisn"];?>" id="<?php echo 'opsi1'.$nisn;?>" value="Hadir">Hadir</label>
                      <label class="radio-inline"><input type="radio" name="<?= 'ket'.$data["nisn"];?>" id="<?php echo 'opsi1'.$nisn;?>" value="Absen">Absen</label>
                      <label class="radio-inline"><input type="radio" name="<?= 'ket'.$data["nisn"];?>" id="<?php echo 'opsi1'.$nisn;?>" value="Sakit">Sakit</label>
                      <label class="radio-inline"><input type="radio" name="<?= 'ket'.$data["nisn"];?>" id="<?php echo 'opsi1'.$nisn;?>" value="Izin">Izin</label>

                      </td>
                    </tr>
                    <?php }?>
                    </tbody>
                </table>
           
            <button type="submit" class="btn btn-primary mt-4 col-md-2 offset-10">Simpan Data</button>
            </form>
            
      
          </div>
 

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
