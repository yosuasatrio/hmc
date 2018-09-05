-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Sep 2018 pada 08.32
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 7.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hmc`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `car`
--

CREATE TABLE `car` (
  `id_mobil` int(255) NOT NULL,
  `nama_mobil` varchar(255) NOT NULL,
  `tahun_mobil` varchar(255) NOT NULL,
  `harga_mobil` int(255) NOT NULL,
  `gambar_mobil` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `car`
--

INSERT INTO `car` (`id_mobil`, `nama_mobil`, `tahun_mobil`, `harga_mobil`, `gambar_mobil`) VALUES
(1, 'Testing Mobil', '2018', 200000000, 'pic1.jpg'),
(2, 'Testing Mobil 2', '2018', 200000000, 'pic2.jpg'),
(3, 'Testing Mobil 3', '2018', 200000000, 'pic3.jpg'),
(4, 'Testing Mobil 4', '2018', 200000000, 'pic4.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `post`
--

CREATE TABLE `post` (
  `id_post` int(255) NOT NULL,
  `title_post` varchar(255) NOT NULL,
  `thumbnail_post` varchar(255) NOT NULL,
  `detail_post` text NOT NULL,
  `category_post` varchar(255) NOT NULL,
  `date_post` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `post`
--

INSERT INTO `post` (`id_post`, `title_post`, `thumbnail_post`, `detail_post`, `category_post`, `date_post`) VALUES
(1, 'Post 1', 'pic1.jpg', 'Testing', 'events', '2018-09-05 00:00:00'),
(2, 'Post 2', 'pic2.jpg', 'Testing 2', 'article', '2018-09-05 00:00:00'),
(3, 'Post 3', 'pic3.jpg', 'Testing 3', 'promo', '2018-09-05 00:00:00'),
(4, 'Post 4', 'pic1.jpg', 'Testing 4', 'promo', '2018-09-05 00:00:00'),
(5, 'Post 5', 'pic3.jpg', 'Testing 5', 'article', '2018-09-05 00:00:00'),
(6, 'Post 6', 'pic2.jpg', 'Testing 6', 'events', '2018-09-05 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indeks untuk tabel `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_post`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `car`
--
ALTER TABLE `car`
  MODIFY `id_mobil` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `post`
--
ALTER TABLE `post`
  MODIFY `id_post` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
