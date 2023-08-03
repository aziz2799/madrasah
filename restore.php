<?php
include('koneksi.php');
$files = glob('db/restore/*'); // membaca semua nama file di dalam direktori
foreach($files as $file){ // perulangan berdasarkan jumlah file
   if(is_file($file))
       unlink($file); // menghapus file
}

$target_dir = "db/restore/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;

// Check if file already exists
if (file_exists($target_file)) {
   echo "Database sudah ada.";
   $uploadOk = 0;
}

$fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if($fileType != "db" && $fileType != "sql" && $fileType != "zip") {
   echo "Maaf file database tidak sesuai!";
   $uploadOk = 0;
}

if ($uploadOk == 0) {
   echo "Gagal import file.";
   // if everything is ok, try to upload file
} else {
   if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
     echo "<center> <h3>Database ". basename( $_FILES["fileToUpload"]["name"]). " berhasil di import.</h3> <br> <a href='index.php'> Kembali Ke Menu Utama <a/> </center>";
   } else {
      echo "Error saat mengimport Database.";
   }
}


$target_dir = "db/restore/";

$zip = new ZipArchive;
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
//echo $target_file;
$res = $zip->open($target_file);
if ($res === TRUE) {
   $zip->extractTo($target_dir);
   $zip->close();
} else {
   echo 'failed, code:' . $res;
}

$isi_file = file_get_contents("db/restore/database.sql");
$string_query = rtrim( $isi_file, "\n;");
$array_query = explode(";", $string_query);

foreach($array_query as $query){
   $conn->query($query);
}

?>