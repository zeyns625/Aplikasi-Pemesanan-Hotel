<?php
session_start();
require 'koneksi.php';

if (isset($_POST["proses"])) {
    $fasilitas = $_POST["fasilitas"];;

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
                document.location.href = 'admin_fasilitas.php'; // Redirect to avoid further execution
            </script>
            ";
            exit; // Stop further execution
        } elseif ($fileSize > 100000000) {
            echo "
            <script>
                alert('Image Size Is Too Large');
                document.location.href = 'admin_fasilitas.php'; // Redirect to avoid further execution
            </script>
            ";
            exit; // Stop further execution
        } else {
            $newImageName = uniqid() . '.' . $imageExtension; // Use unique ID with the correct extension
            if (move_uploaded_file($tmpName, 'pictures/' . $newImageName)) {
            
            $query = "INSERT INTO fasilitas (fasilitas, gambar_fasilitas) VALUES ('$fasilitas', '$newImageName')";
            
            if (mysqli_query($koneksi, $query)) {
                echo "
                <script>
                    alert('Successfully Added');
                    document.location.href = 'admin_fasilitas.php';
                </script>
                ";
            } else {
                echo "
                <script>
                    alert('Failed to add data');
                    document.location.href = 'admin_fasilitas.php';
                </script>
                ";
            }
        }
    }
}
}
?>