<?php
session_start();
require 'koneksi.php';

if (isset($_POST["proses"])) {
    $nama_pemesan = $_POST["nama_pemesan"];
    $no_hp = $_POST["no_hp"];
    $email = $_POST["email"];
    $check_in = $_POST["check_in"];
    $check_out = $_POST["check_out"];
    $jumlah_kamar = $_POST["jumlah_kamar"];
    $jenis_kamar = $_POST["jenis_kamar"];
            
            $query =  "INSERT INTO reservasi(nama_pemesan, no_hp, email, check_in, check_out, jumlah_kamar, jenis_kamar) VALUES ('$nama_pemesan', '$no_hp', '$email', '$check_in', '$check_out', '$jumlah_kamar', '$jenis_kamar')";
            if (mysqli_query($koneksi, $query)) {
                echo "
                <script>
                    alert('Successfully Added');
                    document.location.href = 'rsv_data.php';
                </script>
                ";
            } else {
                echo "
                <script>
                    alert('Failed to add data');
                    document.location.href = 'rsv_data.php';
                </script>
                ";
            }
        }
    

?>