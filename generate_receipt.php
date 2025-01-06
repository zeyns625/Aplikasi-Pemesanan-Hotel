<?php
require('fpdf/fpdf.php'); // Pastikan path ke fpdf.php benar

// Ambil data dari form atau database
$check_in = $_POST['check_in']; // Tanggal check-in
$check_out = $_POST['check_out']; // Tanggal check-out
$jenis_kamar = $_POST['jenis_kamar']; // Jenis kamar
$jumlah_kamar = $_POST['jumlah_kamar']; // Jumlah kamar
$harga_kamar = $_POST['harga_kamar']; // Harga kamar

// Buat instance baru dari FPDF
$pdf = new FPDF();
$pdf->AddPage();

// Set font
$pdf->SetFont('Arial', 'B', 16);

// Judul struk
$pdf->Cell(0, 10, 'STRUK PEMBAYARAN', 0, 1, 'C');
$pdf->Ln(10); // Jarak

// Set font untuk detail
$pdf->SetFont('Arial', '', 12);

// Tambahkan detail pemesanan
$pdf->Cell(0, 10, 'Tanggal Check-In: ' . $check_in, 0, 1);
$pdf->Cell(0, 10, 'Tanggal Check-Out: ' . $check_out, 0, 1);
$pdf->Cell(0, 10, 'Jenis Kamar: ' . $jenis_kamar, 0, 1);
$pdf->Cell(0, 10, 'Jumlah Kamar: ' . $jumlah_kamar, 0, 1);
$pdf->Cell(0, 10, 'Harga Kamar: Rp ' . number_format($harga_kamar, 2, ',', '.'), 0, 1);

// Total harga
$total_harga = $jumlah_kamar * $harga_kamar;
$pdf->Cell(0, 10, 'Total Harga: Rp ' . number_format($total_harga, 2, ',', '.'), 0, 1);

// Output PDF
$pdf->Output('I', 'Struk_Pembayaran.pdf'); // 'I' untuk menampilkan di browser
?>