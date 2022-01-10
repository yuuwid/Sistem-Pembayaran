-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Jan 2022 pada 06.02
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
-- Struktur dari tabel `history_pembayaran`
--

CREATE TABLE `history_pembayaran` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL DEFAULT 0,
  `id_jenis` int(11) NOT NULL DEFAULT 0,
  `no_transaksi` varchar(50) NOT NULL DEFAULT '0',
  `total_biaya` bigint(20) NOT NULL DEFAULT 0,
  `tanggal_transaksi` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `history_pembayaran`
--

INSERT INTO `history_pembayaran` (`id`, `id_user`, `id_jenis`, `no_transaksi`, `total_biaya`, `tanggal_transaksi`, `status`, `keterangan`) VALUES
(20, 2, 1, '153-062020107266-1-2', 80000, '2021-12-04 01:14:27', -1, NULL),
(21, 2, 3, '143-062020107266-2', 1300000, '2021-12-04 01:17:03', 9, NULL),
(22, 2, 3, '155-062020107266-2', 1300000, '2021-12-04 01:18:08', 9, 'December 2021'),
(23, 2, 3, '813-062020107266-2', 1300000, '2021-12-04 01:23:59', 9, 'December 2021'),
(24, 2, 1, '521-062020107266-1-2', 80000, '2021-12-04 01:24:21', 9, '0'),
(25, 2, 3, '464-062020107266-2', 1300000, '2021-12-04 02:12:29', 9, 'January 2022'),
(26, 2, 1, '204-062020107266-1-2', 80000, '2022-01-06 04:19:32', 1, '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_pembayaran`
--

CREATE TABLE `jenis_pembayaran` (
  `id` int(11) NOT NULL,
  `kode` varchar(20) DEFAULT NULL,
  `jenis` varchar(50) NOT NULL DEFAULT '0',
  `biaya` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jenis_pembayaran`
--

INSERT INTO `jenis_pembayaran` (`id`, `kode`, `jenis`, `biaya`) VALUES
(1, 'NONBPPPRAK1234', 'Praktikum', 80000),
(2, 'BPPP12', 'BPP Pagi', 1200000),
(3, 'BPPM21', 'BPP Malam', 1300000);

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
  `status_bpp` varchar(50) NOT NULL DEFAULT '0',
  `foto` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `npm`, `email`, `password`, `jurusan`, `status_bpp`, `foto`) VALUES
(1, 'admin', 'admin', 'admin', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5', 'admin', '0', NULL),
(2, 'Wahyu Widyanto', '06.2020.1.07266', 'wahyuuy01@gmail.com', '20f5b82118cd49c2468f05b846b6b6df5c4cd6e348f3c69d0307ffd261acea6b', 'Informatika', 'Desember 2021', 'foto.png'),
(3, 'Danu Septi Adi', '06.2020.1.07290', 'danu@gmail.com', 'fd0edc0217584ff07ee5f3c6ac798e534ff49d13e90270f8c48b6ec2e4183fbe', 'Informatika', '', 'foto.png'),
(4, 'Hirdhan Farhan Antama', '06.2020.1.07289', 'hirdan@gmail.com', '93a84cfcaeff7539fd444fb9ef40a2cd82a8e5a1af049af097ba1b54d183e36e', 'Informatika', '', 'foto.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `history_pembayaran`
--
ALTER TABLE `history_pembayaran`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `no_transaksi` (`no_transaksi`),
  ADD KEY `FK_history_pembayaran_mahasiswa` (`id_user`),
  ADD KEY `FK_history_pembayaran_non_bpp` (`id_jenis`);

--
-- Indeks untuk tabel `jenis_pembayaran`
--
ALTER TABLE `jenis_pembayaran`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode` (`kode`);

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
-- AUTO_INCREMENT untuk tabel `history_pembayaran`
--
ALTER TABLE `history_pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `jenis_pembayaran`
--
ALTER TABLE `jenis_pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `history_pembayaran`
--
ALTER TABLE `history_pembayaran`
  ADD CONSTRAINT `FK_history_pembayaran_mahasiswa` FOREIGN KEY (`id_user`) REFERENCES `mahasiswa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_history_pembayaran_non_bpp` FOREIGN KEY (`id_jenis`) REFERENCES `jenis_pembayaran` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
