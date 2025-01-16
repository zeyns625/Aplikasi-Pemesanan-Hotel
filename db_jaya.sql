-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jan 2025 pada 04.52
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_jaya`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id_user` int(10) NOT NULL,
  `email` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id_user`, `email`, `username`, `password`) VALUES
(9, 'heejoo@gmail.com', 'heejoo', '$2y$10$YmYYjmdt.J6lukH.pD5T7.TYFXyPor0B0.YIKrxzWGv2Oxh0CtfU2'),
(10, 'dewan@gmail.com', 'dewan', '$2y$10$oaLAtzEsQGCitl2RES0vFuF1HIKDIMZKjlogDL6uuv.zknFe0IaGy');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id_fasilitas` int(30) NOT NULL,
  `fasilitas` varchar(255) NOT NULL,
  `gambar_fasilitas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `fasilitas`
--

INSERT INTO `fasilitas` (`id_fasilitas`, `fasilitas`, `gambar_fasilitas`) VALUES
(7, 'Swimming Pool', '6768062b53cb3.jpg'),
(8, 'Gym', '676806856bb6f.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kamar`
--

CREATE TABLE `kamar` (
  `id_kamar` int(10) NOT NULL,
  `jenis_kamar` varchar(50) NOT NULL,
  `harga_kamar` varchar(50) NOT NULL,
  `ketersediaan` varchar(25) NOT NULL,
  `jumlah_kasur` varchar(20) NOT NULL,
  `gambar_kamar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kamar`
--

INSERT INTO `kamar` (`id_kamar`, `jenis_kamar`, `harga_kamar`, `ketersediaan`, `jumlah_kasur`, `gambar_kamar`) VALUES
(12, 'superior', '765.000,00', '20', '1', 'images.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(10) NOT NULL,
  `nama_petugas` varchar(25) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `username`, `password`, `role`) VALUES
(1, 'admin', 'admin1', 'adminjaya', ''),
(2, 'resepsionis', 'resepsionis1', 'resepsionisjaya', ''),
(4, 'dewan', 'admin2', 'admin2', ''),
(6, '', 'admin3', '$2y$10$IPoI1vk1pJ7fnLiB.xIVvebd8ujOMwVB31SgXQ/BjoCsKFy.VUjPW', 'admin'),
(9, '', 'rsp2', '$2y$10$KVGkaOIeCq7LsiQwMBkGz.mJGb1.MOvXLBxM85boRHTsnYUepovd2', 'resepsionis'),
(10, '', 'santika', '$2y$10$3rS2vaUguT4YijzpSm9Jq.YldhpovOf1fY0vJKYV3t/LTd2pLcbQu', 'admin'),
(11, '', 'admin4', '$2y$10$9ngWVYpZpeFTiF.y6/XKMe6rPWLZJWxn8kQ57Fw2zJHDwYcSc3AYS', 'admin'),
(12, '', 'rsp3', '$2y$10$.vIYHwgwPMCTPeyT7P/D..JWFPwC9Viq1w5MlFZMkkQb9nv9cChGe', 'resepsionis');

-- --------------------------------------------------------

--
-- Struktur dari tabel `reservasi`
--

CREATE TABLE `reservasi` (
  `id_reservasi` int(10) NOT NULL,
  `nama_pemesan` varchar(50) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `email` varchar(35) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `jumlah_kamar` varchar(12) NOT NULL,
  `jenis_kamar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `reservasi`
--

INSERT INTO `reservasi` (`id_reservasi`, `nama_pemesan`, `no_hp`, `email`, `check_in`, `check_out`, `jumlah_kamar`, `jenis_kamar`) VALUES
(36, 'deyan', '098765456578', 'dewan@gmail.com', '2025-01-07', '2025-01-08', '2', 'Deluxe'),
(38, 'Dewan', '87349234790234', 'dewan@gmail.com', '2025-01-11', '2025-01-12', '1', 'suite');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indeks untuk tabel `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indeks untuk tabel `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`id_reservasi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `customer`
--
ALTER TABLE `customer`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id_fasilitas` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id_kamar` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `reservasi`
--
ALTER TABLE `reservasi`
  MODIFY `id_reservasi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
