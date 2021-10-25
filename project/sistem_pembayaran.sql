-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Okt 2021 pada 16.03
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistem_pembayaran`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL DEFAULT '',
  `npm` varchar(30) NOT NULL DEFAULT '',
  `email` varchar(126) NOT NULL DEFAULT '',
  `password` varchar(256) NOT NULL DEFAULT '0',
  `jurusan` varchar(50) NOT NULL DEFAULT '0',
  `tunggakan` int(11) NOT NULL DEFAULT 0,
  `foto` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `npm`, `email`, `password`, `jurusan`, `tunggakan`, `foto`) VALUES
(1, 'admin', 'admin', 'admin', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5', 'admin', 0, NULL),
(2, 'Wahyu Widyanto', '06.2020.1.07266', 'wahyuuy01@gmail.com', '20f5b82118cd49c2468f05b846b6b6df5c4cd6e348f3c69d0307ffd261acea6b', 'Informtika', 0, '07266.jpg'),
(3, 'Danu Septi Adi', '06.2020.1.07290', 'danu@gmail.com', 'fd0edc0217584ff07ee5f3c6ac798e534ff49d13e90270f8c48b6ec2e4183fbe', 'Informtika', 0, 'foto.png'),
(4, 'Hirdhan Farhan Antama', '06.2020.1.07289', 'hirdan@gmail.com', '93a84cfcaeff7539fd444fb9ef40a2cd82a8e5a1af049af097ba1b54d183e36e', 'Informtika', 0, 'foto.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `npm` (`npm`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;