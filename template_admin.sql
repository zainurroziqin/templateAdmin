-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Nov 2021 pada 15.21
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `template_admin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `No` int(4) NOT NULL,
  `NIP` varchar(25) NOT NULL,
  `NIDN` varchar(15) NOT NULL,
  `Nama` varchar(60) NOT NULL,
  `Jabatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`No`, `NIP`, `NIDN`, `Nama`, `Jabatan`) VALUES
(1, '197405192003121002', '0019057403', 'Nugroho Setyo Wibowo, ST. MT', 'Lektor Kepala'),
(2, '197111151998021001', '0015117106', 'Adi Heru Utomo, S.Kom, M.Kom', 'Lektor Kepala'),
(3, '198907102019031010', '0010078903', ' Ery Setiyawan Jullev Atmadji, S.Kom, M.Cs', 'Tenaga Pengajar'),
(4, '199408122019031013', '0012089401', 'Mukhamad Angga Gumilang, S. Pd., M. Eng.', 'Tenaga Pengajar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `level_detail`
--

CREATE TABLE `level_detail` (
  `id` int(4) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `level_detail`
--

INSERT INTO `level_detail` (`id`, `level`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `No` int(4) NOT NULL,
  `NIM` varchar(11) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Alamat` varchar(60) NOT NULL,
  `JenisKelamin` enum('Laki-laki','Perempuan','','') NOT NULL,
  `Prodi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`No`, `NIM`, `Nama`, `Alamat`, `JenisKelamin`, `Prodi`) VALUES
(1, 'E41200296', 'Zainur Roziqin', 'Jalan Merak Lingk. Plaosa', 'Laki-laki', 'Teknik Informatika'),
(2, 'E41200319', 'Dimas Fany Azzuzi', 'Jalan Jaksa Agung Suprapto', 'Laki-laki', 'Teknik Informatika');

-- --------------------------------------------------------

--
-- Struktur dari tabel `staff`
--

CREATE TABLE `staff` (
  `No` int(4) NOT NULL,
  `NIP` varchar(25) NOT NULL,
  `Nama` varchar(60) NOT NULL,
  `Jabatan` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `staff`
--

INSERT INTO `staff` (`No`, `NIP`, `Nama`, `Jabatan`) VALUES
(1, '197112242001121001', 'Hari Prabowo, SE', 'Admin Jurusan Teknologi Informasi'),
(2, '19800717 201409 2 003', 'Indriana Rahmawati', 'Admin Program Studi Teknik Informatika');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_detail`
--

CREATE TABLE `user_detail` (
  `id` int(6) NOT NULL,
  `user_email` varchar(60) NOT NULL,
  `user_password` varchar(30) NOT NULL,
  `user_fullname` varchar(60) NOT NULL,
  `level` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_detail`
--

INSERT INTO `user_detail` (`id`, `user_email`, `user_password`, `user_fullname`, `level`) VALUES
(1, 'user1@user.com', '12344321', 'User', 2),
(2, 'admin@admin.com', '12344321', 'Admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`No`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`No`);

--
-- Indeks untuk tabel `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`No`);

--
-- Indeks untuk tabel `user_detail`
--
ALTER TABLE `user_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `level` (`level`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dosen`
--
ALTER TABLE `dosen`
  MODIFY `No` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `No` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `staff`
--
ALTER TABLE `staff`
  MODIFY `No` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_detail`
--
ALTER TABLE `user_detail`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
