<?php
$database_hostname = "localhost";
$database_username = "root";
$database_password = "";
$database_name = "FITRI";
$database_port = "3306";

try {
    $database_conection = new PDO("mysql:host=$database_hostname;port=$database_port;dbname=$database_name", $database_username, $database_password);
    // echo "Koneksi Berhasil";
} catch (PDOException $x) {
    echo $x->getMessage();
}
