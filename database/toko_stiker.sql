-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Nov 2023 pada 13.12
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_stiker`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `stiker`
--

CREATE TABLE `stiker` (
  `id_stiker` int(11) NOT NULL,
  `nama_stiker` varchar(50) NOT NULL,
  `jenis_stiker` varchar(30) NOT NULL,
  `deskripsi_stiker` text NOT NULL,
  `harga_stiker` int(50) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `stiker`
--

INSERT INTO `stiker` (`id_stiker`, `nama_stiker`, `jenis_stiker`, `deskripsi_stiker`, `harga_stiker`, `gambar`) VALUES
(75, 'ripai', 'kartun', 'keren', 123, '2023-10-25 09-26-53am ripai.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'Rifai', '$2y$10$/PN3KKV8NqG0l7Q.H2aiX.3fgRqaT0MWInPCEMI7LAZIJNRF9hOtW');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `stiker`
--
ALTER TABLE `stiker`
  ADD PRIMARY KEY (`id_stiker`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `stiker`
--
ALTER TABLE `stiker`
  MODIFY `id_stiker` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
