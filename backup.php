<?php

include('koneksi.php');

// Hapus file sebelumnya
// $files = glob('db/backup/*'); // membaca semua nama file di dalam direktori
// foreach($files as $file){ // perulangan berdasarkan jumlah file
//    if(is_file($file))
//        unlink($file); // menghapus file
// }

// $query="select*from perusahaan";
// $jal=mysqli_fetch_array(mysqli_query($conn,$query));
// $nama=$jal['nama_p'];
// echo "Perusahaan : ".$nama;
// echo "<br>";
$file_name = 'Backup-Data-' . date("Y-m-d-H-i-s") . '.zip';

// ini berhasil
$command = "mysqldump --user=root --databases dinas pendidikan --extended-insert=FALSE --result-file=db\backup\database.sql";
system($command);

// masukan file sql ke dalam zip
$fileToZip = 'db/backup/database.sql';

$zip = new ZipArchive;

$res = $zip->open($file_name, ZipArchive::CREATE);
if ($res === TRUE) {
   $zip->addFile($fileToZip, basename('database.sql'));
   $zip->close();
} else {
   echo 'failed, code:' . $res;
}

// memindah file
rename($file_name,'db/backup/'.$file_name);

// header('Content-type: application/pdf');
// header('Content-Disposition: attachment; filename="' . basename("db/backup/".$file_name) . '"');
// header('Content-Transfer-Encoding: binary');

// header("Content-Type: application/zip");
// header("Content-Transfer-Encoding: Binary");
// header("Content-Length: ".filesize($file_name));
// header("Content-Disposition: attachment; filename=\"". basename("db/backup/".$file_name) ."\"");        

// readfile("db/backup/".$file_name);

echo "<center>Klik <a href='db/backup/".$file_name."'>Disini</a> untuk mendownload Data Backup!</center>";


function Redirect($url, $permanent = false)
{
    if (headers_sent() === false)
    {
        header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
    }

    exit();
}

//Redirect('index.php', false);

?>