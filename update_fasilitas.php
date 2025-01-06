<?php
session_start();
require 'koneksi.php';

if(isset($_POST["proses"])){
    $id_fasilitas = $_POST["id_fasilitas"];
    $fasilitas = $_POST["fasilitas"];

    if(isset($_FILES["gambar"]["name"])){
        $fileName = $_FILES["gambar"]["name"];
        $fileSize = $_FILES["gambar"]["size"];
        $tmpName = $_FILES["gambar"]["tmp_name"];

        $validImageExtension = ['jpg','jpeg','png'];
        $ImageExtension = explode('.', $fileName);
        $ImageExtension = strtolower(end($ImageExtension));
        
        if (!in_array($ImageExtension, $validImageExtension)) {
            echo
            "
            <script>
                alert('Invalid Image Extension');    
            </script>
            ";
        } else if ($fileSize > 100000000) {
            echo
            "
            <script>
                alert('Image Size Is Too Large');
            </script>
            ";
        } else {
            $newImageName = uniqid() . '.' . $ImageExtension; // Menggunakan nama unik dengan ekstensi
            move_uploaded_file($tmpName, 'pictures/' . $newImageName);
            $query = "UPDATE fasilitas SET fasilitas='$fasilitas', gambar_fasilitas='$newImageName' WHERE id_fasilitas = '$id_fasilitas'";
            
            if (mysqli_query($koneksi, $query)) {
                echo
                "
                <script>
                    alert('Successfully Updated');
                    document.location.href ='admin_fasilitas.php';
                </script>
                ";
            } else {
                echo "Error: " . mysqli_error($koneksi);
            }
        }
    }
}
?>