<?php
session_start();
require 'koneksi.php'; // Pastikan koneksi.php berisi kode untuk menghubungkan ke database

// Cek apakah form disubmit
if (isset($_POST['proses'])) {
    // Ambil data dari form
    $id_reservasi = $_POST['id_reservasi'];
    $nama_pemesan = $_POST['nama_pemesan'];
    $no_hp = $_POST['no_hp'];
    $email = $_POST['email'];
    $check_in = $_POST['check_in'];
    $check_out = $_POST['check_out'];
    $jumlah_kamar = $_POST['jumlah_kamar'];
    $jenis_kamar = $_POST['jenis_kamar'];

    // Query untuk update data
    $updateQuery = "UPDATE reservasi SET 
        nama_pemesan = '$nama_pemesan',
        no_hp = '$no_hp',
        email = '$email',
        check_in = '$check_in',
        check_out = '$check_out',
        jumlah_kamar = '$jumlah_kamar',
        jenis_kamar = '$jenis_kamar'
        WHERE id_reservasi = '$id_reservasi'";

    // Eksekusi query
    if ($koneksi->query($updateQuery) === TRUE) {
        // Redirect ke halaman data reservasi setelah berhasil
        header("Location: rsv_data.php");
        exit();
    } else {
        echo "Error updating record: " . $koneksi->error;
    }
} else {
    // Jika tidak ada data yang dikirim, redirect ke halaman data reservasi
    header("Location: rsv_data.php");
    exit();
}
?>