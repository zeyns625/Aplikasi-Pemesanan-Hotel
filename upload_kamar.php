<?php
session_start();
require 'koneksi.php';

if (isset($_POST["proses"])) {
    $jenis_kamar = $_POST["jenis_kamar"];
    $harga_kamar = $_POST["harga_kamar"];
    $jumlah = $_POST["jumlah"];
    $ketersediaan = $_POST["ketersediaan"];

    if (isset($_FILES["gambar"]["name"])) {
        $fileName = $_FILES["gambar"]["name"];
        $fileSize = $_FILES["gambar"]["size"];
        $tmpName = $_FILES["gambar"]["tmp_name"];

        $validImageExtension = ['jpg', 'jpeg', 'png'];
        $imageExtension = explode('.', $fileName);
        $imageExtension = strtolower(end($imageExtension));

        if (!in_array($imageExtension, $validImageExtension)) {
            echo "
            <script>
                alert('Invalid Image Extension');    
                document.location.href = 'dash_admin.php'; // Redirect to avoid further execution
            </script>
            ";
            exit; // Stop further execution
        } elseif ($fileSize > 100000000) {
            echo "
            <script>
                alert('Image Size Is Too Large');
                document.location.href = 'dash_petugas.php'; // Redirect to avoid further execution
            </script>
            ";
            exit; // Stop further execution
        } else {
            $newImageName = uniqid() . '.' . $imageExtension; // Use unique ID with the correct extension
            if (move_uploaded_file($tmpName, 'pictures/' . $newImageName)) {
            
            $query = "INSERT INTO kamar (jenis_kamar, harga_kamar, jumlah_kasur, ketersediaan, gambar_kamar) VALUES ('$jenis_kamar', '$harga_kamar', '$jumlah','$ketersediaan', '$newImageName')";
            
            if (mysqli_query($koneksi, $query)) {
                echo "
                <script>
                    alert('Successfully Added');
                    document.location.href = 'dash_petugas.php';
                </script>
                ";
            } else {
                echo "
                <script>
                    alert('Failed to add data');
                    document.location.href = 'dash_petugas.php';
                </script>
                ";
            }
        }
    }
}
}
?>