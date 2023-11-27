<?php
require once '../koneksi/koneksi.php';

$nama depan = $_POST['ndepan'];
$nama belakang=$_POST['nbelakang'];
$email= S_POST['mail'];
$password= $_ POST['pwd'];
$photo_name = $_FILES['filePhoto']['name']; 
$photo_tmp = $_FILES['filePhoto']['tmp_name'];

if (lempty($_POST['id'])) {
//kalau id tidak kosong, update
try {
   move_uploaded_file($photo_tmp, '../photo/'.$photo_name);
   $sql 'UPDATE' data_pendaftar' SET 'nama_depan' = ?, 'nama_belakang' = ?, 'email' = ?, 'password' =?,
   'photo'? WHERE id = ?';
    $qonnect = $database_connection->prepare($sql);
    $qonnect->execute([$nama_depan, $nama_belakang, $email, shal($password), 'photo/'.$photo_name, $_POST['id']]);

    echo "Data updated successfully!";
} catch (PDOException $e) {
        die("Error updating data: " . $err->getMessage());
}
} else {
         //kalau kosong,insert
         try{
            move_uploaded_file($photo_tmp, '../photo/', $photo_name);
            $sql = 'INSERT INTO `data_pendaftar` (`nama_depan`, `nama_belakangg`, `email`, `password`, `photo`) VALUES (?,?,?,?,?,)';
            $qonnect = $databasse_connection->prepare($sql);
            $qonnect->execute([$nama_depan,$nama_belakang,$email, shal($password), 'photo/' .$photo_name]);
            echo "Data inserted successfully!";
        } catch (PDOException $err) {
            die("Error inserting data: " $err->getMessage());
        }
}