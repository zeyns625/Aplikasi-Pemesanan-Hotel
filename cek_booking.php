<?php
session_start();
require 'koneksi.php';

if (isset($_POST["proses"])) {
    // Ambil data dari form
    $nama_pemesan = trim($_POST["nama_pemesan"]);
    $no_hp = trim($_POST["no_hp"]);
    $email = trim($_POST["email"]);
    $check_in = $_POST["check_in"];
    $check_out = $_POST["check_out"];
    $jumlah_kamar = (int)$_POST["jumlah_kamar"]; // Pastikan ini adalah integer
    $jenis_kamar = trim($_POST["jenis_kamar"]);

    // Validasi input
    if (empty($nama_pemesan) || empty($no_hp) || empty($email) || empty($check_in) || empty($check_out) || empty($jumlah_kamar) || empty($jenis_kamar)) {
        echo "
        <script>
            alert('Semua field harus diisi.');
            document.location.href = 'room.php';
        </script>
        ";
        exit();
    }

    // Cek ketersediaan kamar
    $query = "SELECT ketersediaan FROM kamar WHERE jenis_kamar = ?";
    $stmt = $koneksi->prepare($query);
    $stmt->bind_param("s", $jenis_kamar);
    $stmt->execute();
    $result = $stmt->get_result();
    $kamar = $result->fetch_assoc();

    if (!$kamar) {
        echo "
        <script>
            alert('Jenis kamar tidak ditemukan.');
            document.location.href = 'room.php';
        </script>
        ";
        exit();
    }

    if ($kamar['ketersediaan'] < $jumlah_kamar) {
        echo "
        <script>
            alert('Maaf, jumlah kamar yang diminta melebihi ketersediaan.');
            document.location.href = 'room.php';
        </script>
        ";
        exit();
    }

    // Kurangi jumlah kamar yang tersedia
    $new_ketersediaan = $kamar['ketersediaan'] - $jumlah_kamar;
    $updateQuery = "UPDATE kamar SET ketersediaan = ? WHERE jenis_kamar = ?";
    $updateStmt = $koneksi->prepare($updateQuery);
    $updateStmt->bind_param("is", $new_ketersediaan, $jenis_kamar);
    $updateStmt->execute();

    // Simpan data pemesanan ke tabel reservasi
    $insertQuery = "INSERT INTO reservasi (nama_pemesan, no_hp, email, check_in, check_out, jumlah_kamar, jenis_kamar) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $insertStmt = $koneksi->prepare($insertQuery);
    $insertStmt->bind_param("sssssis", $nama_pemesan, $no_hp, $email, $check_in, $check_out, $jumlah_kamar, $jenis_kamar);

    if ($insertStmt->execute()) {
        echo "
        <script>
            alert('Booking berhasil!');
            document.location.href = 'room.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Gagal menambahkan data pemesanan.');
            document.location.href = 'room.php';
        </script>
        ";
    }
}
?>