<?php
include "koneksi.php"; // Ensure the database connection is available

$id_kamar = $_POST['id_kamar'];
$jenis_kamar = $_POST['jenis_kamar'];
$harga_kamar = $_POST['harga_kamar'];
$jumlah_kasur = $_POST['jumlah'];

// Upload image if a new file is provided
if (isset($_FILES['gambar']['name']) && !empty($_FILES['gambar']['name'])) {
    $targetGambar = "uploads/" . basename($_FILES['gambar']['name']);
    if (move_uploaded_file($_FILES['gambar']['tmp_name'], $targetGambar)) {
        // Delete old image if it exists
        $queryGambarLama = mysqli_query($koneksi, "SELECT gambar_kamar FROM kamar WHERE id_kamar = '$id_kamar'");
        $gambarLama = mysqli_fetch_assoc($queryGambarLama)['gambar_kamar'];
        if (file_exists("uploads/" . $gambarLama)) {
            unlink("uploads/" . $gambarLama);
        }
    } else {
        echo "Failed to upload image.";
    }
} else {
    // If no new file, keep the old image
    $queryGambar = mysqli_query($koneksi, "SELECT gambar_kamar FROM kamar WHERE id_kamar = '$id_kamar'");
    $gambar = mysqli_fetch_assoc($queryGambar)['gambar_kamar'];
}

// Update data in the database
$queryUpdate = "UPDATE kamar SET
    jenis_kamar = '$jenis_kamar',
    harga_kamar = '$harga_kamar',
    jumlah_kasur = '$jumlah_kasur',
    gambar_kamar = '$gambar'
WHERE id_kamar = '$id_kamar'";

if (mysqli_query($koneksi, $queryUpdate)) {
    header("Location: admin_kamarhotel.php?status=success"); // Redirect to the main page with success status
} else {
    echo "Failed to update data: " . mysqli_error($koneksi);
}
?>