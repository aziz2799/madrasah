<?php
$term = $_GET['term'];
$query = "SELECT * FROM tsiswa where nisn like '%$term%' or nama like '%$term%' and keterangan='Belum Lulus'
 LIMIT 5";
include('../koneksi.php');

$hs = mysqli_query($conn,$query);

$json = array();

while($rs = mysqli_fetch_array($hs)){
    $json[] = array(
        'label' => $rs['nisn'].'/'.$rs['nama'],
        'value' => $rs['nisn'],
		'nama' => $rs['nama']
    );
}

echo json_encode($json);
?> 