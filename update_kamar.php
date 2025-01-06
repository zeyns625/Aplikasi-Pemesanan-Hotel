<?php
session_start();
require 'koneksi.php';

if(isset($_POST["proses"])){
    $id_kamar = $_POST["id_kamar"];
    $jenis_kamar = $_POST["jenis_kamar"];
    $harga_kamar = $_POST["harga_kamar"];
    $jumlah  = $_POST["jumlah"];
    $ketersediaan  = $_POST["ketersediaan"];


    if(isset($_FILES["gambar"]["name"])){
        $fileName = $_FILES["gambar"]["name"];
        $fileSize = $_FILES["gambar"]["size"];
        $tmpName = $_FILES["gambar"]["tmp_name"];

        $validImageExtension = ['jpg','jpeg','png'];
        $ImageExtension = explode('.', $fileName);
        $ImageExtension = strtolower(end($ImageExtension));
        if (!in_array($ImageExtension, $validImageExtension) ){
            echo
            "
            <sript>
                alert(Invalid Image Extension');    
            </script>
            ";
    }
    else if ($fileSize > 100000000){
        echo
        "
        <script>
        alert('Image Size Is Too Large');
        </script>
        ";
    }   
    else{
        $newImageName = uniqid();
        $newImageName = $fileName;

move_uploaded_file($tmpName,'pictures/' . $newImageName);
$query = "UPDATE kamar SET jenis_kamar='$jenis_kamar', harga_kamar='$harga_kamar', jumlah_kasur='$jumlah', ketersediaan='$ketersediaan', gambar_kamar='$newImageName' where id_kamar = '$id_kamar'";
mysqli_query($koneksi, $query);
        echo
        "
        <script>
        alert('Succesfully Added');
        document.location.href ='admin_kamarhotel.php';
        </script>
        ";
    }
}
}
?>

    

    
    