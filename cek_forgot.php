<?php
session_start();

// Koneksi ke database
$servername = "localhost"; // Ganti dengan server Anda
$username = "root"; // Ganti dengan username Anda
$password = ""; // Ganti dengan password Anda
$dbname = "db_jaya"; // Ganti dengan nama database Anda

$koneksi = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// Proses pembaruan kata sandi
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email']; // Ambil email dari session atau dari input
    $password = $_POST['password'];

    // Cek apakah kata sandi lama benar
    $sql = "SELECT * FROM customer WHERE email='$email'";
    $result = $koneksi->query($sql);
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        
                // Hash password sebelum disimpan
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            
            // Update kata sandi baru
            $sql = "UPDATE customer SET password='$password' WHERE email='$email'";
            
            if ($koneksi->query($sql) === TRUE) {
                echo "Kata sandi berhasil diperbarui.";
                header ("location:login.php");
    } else {
        echo "Email tidak ditemukan.";
    }
  }
}


$koneksi->close();
?>