<?php
include 'koneksi.php'; // Pastikan file koneksi sudah benar

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_user = mysqli_real_escape_string($koneksi, $_POST['id_user']);
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $password = $_POST['password'];
    $role = mysqli_real_escape_string($koneksi, $_POST['role']);

    // Hash password sebelum disimpan
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Query untuk menyimpan data
    $query = "INSERT INTO petugas (id_petugas, username, password, role) VALUES ('$id_petugas', '$username', '$hashed_password', '$role')";
    if (mysqli_query($koneksi, $query)) {
        echo "<script>alert('Registrasi berhasil!'); window.location='login_petugas.php';</script>";
    } else {
        echo "<script>alert('Registrasi gagal: " . mysqli_error($koneksi) . "'); window.history.back();</script>";
    }
}
?>