<?php
// Pastikan jalur ini sesuai dengan lokasi TCPDF di server Anda
require_once('tcpdf/tcpdf.php'); // Sesuaikan path jika TCPDF berada di folder yang berbeda

// Buat instance baru dari TCPDF
$pdf = new TCPDF();

// Set informasi dokumen
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('JAYA HOTEL');
$pdf->SetTitle('Bukti Pembayaran Reservasi');
$pdf->SetSubject('Reservasi');

// Set header dan footer
$pdf->setHeaderData('', 0, 'Bukti Pembayaran Reservasi', 'JAYA HOTEL');
$pdf->setFooterData(array(0, 64, 0), array(0, 64, 128));

// Set font
$pdf->SetFont('helvetica', '', 12);

// Tambah halaman
$pdf->AddPage();

// Ambil data reservasi dari database
$servername = "localhost";
$username   = "root";
$password   = "";
$database   = "db_jaya";

// Buat koneksi ke database
$koneksi = mysqli_connect($servername, $username, $password, $database);

// Cek koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Ambil semua ID reservasi
$selectQuery = "SELECT id_reservasi FROM reservasi ORDER BY id_reservasi";
$result = $koneksi->query($selectQuery);

// Debug: Periksa apakah query berhasil
if (!$result) {
    die("Query gagal: " . mysqli_error($koneksi));
}

// Ambil semua ID ke dalam array
$idArray = [];
if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $idArray[] = $row['id_reservasi'];
    }
}

// Pilih satu ID secara acak dari array
if (count($idArray) > 0) {
    $randomId = $idArray[array_rand($idArray)];

    // Ambil detail reservasi berdasarkan ID yang dipilih
    $detailQuery = "SELECT * FROM reservasi WHERE id_reservasi = $randomId LIMIT 1";
    $detailResult = $koneksi->query($detailQuery);

    // Buat tabel untuk data reservasi
    $html = '<h2>Bukti Pembayaran Reservasi</h2>';
    $html .= '<table border="1" cellpadding="5">
                <tr>
                    <th>ID Reservasi</th>
                    <th>Nama Pemesan</th>
                    <th>No HP</th>
                    <th>Email</th>
                    <th>Check In</th>
                    <th>Check Out</th>
                    <th>Jumlah Kamar</th>
                    <th>Jenis Kamar</th>
                </tr>';

    // Periksa apakah ada hasil
    if ($detailResult && mysqli_num_rows($detailResult) > 0) {
        $row = mysqli_fetch_assoc($detailResult);
        $html .= '<tr>
                    <td>' . htmlspecialchars($row['id_reservasi']) . '</td>
                    <td>' . htmlspecialchars($row['nama_pemesan']) . '</td>
                    <td>' . htmlspecialchars($row['no_hp']) . '</td>
                    <td>' . htmlspecialchars($row['email']) . '</td>
                    <td>' . htmlspecialchars($row['check_in']) . '</td>
                    <td>' . htmlspecialchars($row['check_out']) . '</td>
                    <td>' . htmlspecialchars($row['jumlah_kamar']) . '</td>
                    <td>' . htmlspecialchars($row['jenis_kamar']) . '</td>
                  </tr>';
    } else {
        $html .= '<tr><td colspan="8">Tidak ada data reservasi.</td></tr>';
    }

    $html .= '</table>';
} else {
    $html = '<h2>Bukti Pembayaran Reservasi</h2><p>Tidak ada data reservasi.</p>';
}

// Output HTML content
$pdf->writeHTML($html, true, false, true, false, '');

// Tutup koneksi
mysqli_close($koneksi);

// Close dan output PDF
$pdf->Output('bukti_pembayaran.pdf', 'I'); // 'I' untuk menampilkan di browser
?>