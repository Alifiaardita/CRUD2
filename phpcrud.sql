-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jun 2023 pada 14.35
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpcrud`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id`, `nama`, `pengarang`, `penerbit`, `jenis`, `gambar`) VALUES
(1, 'Laskar Pelangi', 'andrea Hirata', 'Bentang pustaka', 'Novel', '645850c46c03b.jpg'),
(2, 'Honesty', 'Park Kim Xiontoll', 'PT.Elex Media Komputindo', 'komik', '6458508cf0c5c.jpg'),
(4, 'Kanguru Pohon Yang Tidak Sabar', 'Nelfi Syafrinah', 'Tiga Ananda', 'Dongeng', '645dd52982e57.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'dhyan', '$2y$10$oJuchDjG5fGihWDuHj9bP.fPDUGIWCmxY2bIIPT/UNOqLCZr1JFCa'),
(2, 'admin1', '$2y$10$ftwGA7ikTUBUSmCTnM1YCed6LvC6dqRFRPAAlJnkDz9UybuCYt.BS'),
(3, 'alifia ardita', '$2y$10$SY0X4kscJIczOFGZ2ckR8.ebGC993CjJtba3mPBqW/NzfbX3Cd7Jq'),
(4, 'dita', '$2y$10$8cvE6U.LQIIJH4yY/0qPyeGv62VfbDWKsFsEe1BBY3v3Wxjy2upBS'),
(8, 'admin', '$2y$10$lNAdxURA2hOa6xNMQUvjZuHDY9qQh0ZFooTGoVto2sBBA.4/ccaXK');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
