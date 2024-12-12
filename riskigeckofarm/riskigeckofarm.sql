-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Jan 2024 pada 09.12
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `riskigeckofarm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '123'),
(2, 'admin2', '12345');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gecko`
--

CREATE TABLE `gecko` (
  `id` int(11) NOT NULL,
  `gambar_gecko` varchar(255) NOT NULL,
  `morph` varchar(255) NOT NULL,
  `parent` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `jenis_kelamin` varchar(16) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `gecko`
--

INSERT INTO `gecko` (`id`, `gambar_gecko`, `morph`, `parent`, `dob`, `jenis_kelamin`, `harga`) VALUES
(15, '461-1.jpg', 'Bold Stripe het Bell', ' Bold Stripe het Bell ph Radar X Bell Bold Stripe', '2024-01-16', 'Jantan', 300000),
(18, '813-toke1.jpg', 'Bold Stripe het Bell', 'Bold Stripe het Bell ph Radar X Bell Bold Stripe', '2024-01-16', 'Betina', 10),
(19, '237-.20240116162758.20240116162654contoh.jpg', 'Reverse Stripe het Bell', 'Bold Stripe het Bell ph Radar X Bell Bold Stripe', '2024-01-16', 'Jantan', 300000),
(20, '369-.20240116162654contoh.jpg', 'Bold Stripe het Bell', 'Bold Stripe het Bell ph Radar X Bell Bold Stripe', '2024-01-16', 'Jantan', 69),
(21, '152-.20240116162654contoh.jpg', 'Bold Stripe het Bell', 'dgshd', '2024-01-16', 'Jantan', 50),
(22, '704-.20240116162654contoh.jpg', 'Bold Stripe het Bell', 'Bold Stripe het Bell ph Radar X Bell Bold Stripe', '2024-01-16', 'Jantan', 10),
(33, '549-524-contoh.jpeg', 'Bold Stripe het Bell', 'Bold Stripe het Bell ph Radar X Bell Bold Stripe', '2024-01-19', 'Jantan', 6000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(12, 'Riski Pebriansyah', '$2y$10$B/7WATsLPiQeM0QJOJ2UCut2mHLiFmhakDXKwJzXdSrlart9iXzUS'),
(13, 'riski', '$2y$10$MWRkVQJxysnJO.tFEJLBbuuatYEa7p61Z0bBNS0GDnWxcWFeXXWnG'),
(14, 'RiskiP', '$2y$10$AkTgtKhp4DN2TxANB2h/Eu1tvEDFYJtmerTWPcCnexNd90NgEGLh2'),
(15, 'admin', '$2y$10$T0ITNLdMY/fLiIFj3/tSk.30V0ObdhZsTqu1BpJ5EZ33hnkodvhwW'),
(16, 'riskipp', '$2y$10$AevMbMk53.Uda6MNNQdwhe.l93hbcOWLN4rgSO1OCHZOc8VgWsUsi'),
(17, 'pe', '$2y$10$WoZzQ/vtYJA5Re0iTEbRZeOA1njGAzyDX.B7mUuxCzBSqFBMbgv6O'),
(18, 'riski', '$2y$10$Vlfa4rIAv6/nIFg.2QCiJuKY6hPYVG4..BiopVZl3Ycx2ew4E9S2y');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gecko`
--
ALTER TABLE `gecko`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `gecko`
--
ALTER TABLE `gecko`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
