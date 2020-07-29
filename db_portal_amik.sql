-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 22 Jul 2020 pada 09.24
-- Versi Server: 5.6.37
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_portal_amik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE IF NOT EXISTS `tb_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_nama` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`admin_id`, `admin_username`, `admin_password`, `admin_nama`) VALUES
(1, 'admin', 'admin', 'Adela Fitra');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_berita`
--

CREATE TABLE IF NOT EXISTS `tb_berita` (
  `berita_id` int(11) NOT NULL,
  `berita_judul` varchar(255) NOT NULL,
  `berita_isi` text NOT NULL,
  `berita_gambar` text NOT NULL,
  `berita_post` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_berita`
--

INSERT INTO `tb_berita` (`berita_id`, `berita_judul`, `berita_isi`, `berita_gambar`, `berita_post`) VALUES
(4, 'Pengecekan Judul Penelitian', 'Admin yang bertugas bertangguang jawab atas Pengecekan Judul Penetlitian yang di Ajukan', '8cbe4fd334619a0b25afb75b475c71fc.png', '2020-07-18'),
(6, 'Pengumpulan Judul Penelitian', 'Berakhir Sampai Akhir Tahun Ini', 'f36e5a9fbaa0dc2addb54f535ead2225.png', '2020-07-18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_dosen`
--

CREATE TABLE IF NOT EXISTS `tb_dosen` (
  `dosen_id` int(11) NOT NULL,
  `dosen_nidn` varchar(255) NOT NULL,
  `dosen_pass` varchar(255) NOT NULL,
  `dosen_nama` varchar(255) NOT NULL,
  `dosen_jkel` int(11) NOT NULL,
  `dosen_alamat` varchar(255) NOT NULL,
  `dosen_agama` varchar(255) NOT NULL,
  `dosen_pdd` varchar(255) NOT NULL,
  `dosen_status` varchar(255) NOT NULL,
  `dosen_tgl_msk` date NOT NULL,
  `dosen_email` varchar(255) NOT NULL,
  `dosen_nohp` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_dosen`
--

INSERT INTO `tb_dosen` (`dosen_id`, `dosen_nidn`, `dosen_pass`, `dosen_nama`, `dosen_jkel`, `dosen_alamat`, `dosen_agama`, `dosen_pdd`, `dosen_status`, `dosen_tgl_msk`, `dosen_email`, `dosen_nohp`) VALUES
(1, '151011', 'asdasd12', 'Egova Riva Gustino, S. Kom', 1, 'Padang', 'Hindu', 'S3', 'Tetap', '1985-05-08', 'wugofacy@mailinator.net', '0819629431');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penelitian`
--

CREATE TABLE IF NOT EXISTS `tb_penelitian` (
  `penelitian_id` int(11) NOT NULL,
  `dosen_id` int(11) NOT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `penelitian_judul` varchar(255) NOT NULL,
  `penelitian_status` varchar(255) NOT NULL DEFAULT 'Belum Di Cek',
  `penelitian_file` text NOT NULL,
  `penelitian_mulai` date NOT NULL,
  `penelitian_selesai` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_penelitian`
--

INSERT INTO `tb_penelitian` (`penelitian_id`, `dosen_id`, `admin_id`, `penelitian_judul`, `penelitian_status`, `penelitian_file`, `penelitian_mulai`, `penelitian_selesai`) VALUES
(3, 1, NULL, 'Jaminan Atas Produk Halal Terhadap Justifikasi Intervensi Negara Aatas Kelambagaan Ssertifikasi Halal', 'Belum Di Cek', 'd26519edfaf39c668358dd990b925d9e.pdf', '2020-07-08', '2020-07-21'),
(4, 1, 1, 'Lorem ipsum hic qui', 'Di Setujui', '8724a6fc59f9c1ec9e5abf34a465994c.pdf', '2020-07-20', '2020-07-30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`berita_id`);

--
-- Indexes for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  ADD PRIMARY KEY (`dosen_id`);

--
-- Indexes for table `tb_penelitian`
--
ALTER TABLE `tb_penelitian`
  ADD PRIMARY KEY (`penelitian_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `berita_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  MODIFY `dosen_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_penelitian`
--
ALTER TABLE `tb_penelitian`
  MODIFY `penelitian_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
