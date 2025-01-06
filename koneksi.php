<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$database   = "db_jaya";

$koneksi = mysqli_connect($servername,$username,$password,$database);

// cek koneksi
if (mysqli_connect_errno()){
    echo "Koneksi Database Gagal: ". mmysqli_connect_errno();
}
?>