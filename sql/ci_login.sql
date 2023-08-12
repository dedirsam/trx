-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Jul 2023 pada 01.12
-- Versi server: 10.4.16-MariaDB
-- Versi PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_login`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_bon`
--

CREATE TABLE `tbl_bon` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jml_bon` varchar(255) DEFAULT NULL,
  `jml_byr` varchar(255) DEFAULT NULL,
  `kategori` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_bon`
--

INSERT INTO `tbl_bon` (`id`, `nama`, `jml_bon`, `jml_byr`, `kategori`, `status`, `created_at`, `updated_at`) VALUES
(6, '0', '0', '0', 'Token Listrik', '1', '2023-07-28 11:18:42', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id`, `nama_kategori`, `created_at`, `updated_at`) VALUES
(6, 'Token Listrik', '2023-07-27 10:50:19', '0000-00-00 00:00:00'),
(7, 'Pulsa HP', '2023-07-27 10:50:34', '0000-00-00 00:00:00'),
(8, 'Tagihan Listrik', '2023-07-27 10:51:11', '0000-00-00 00:00:00'),
(9, 'Tarik Tunai', '2023-07-27 10:51:31', '0000-00-00 00:00:00'),
(10, 'Transfer', '2023-07-27 10:51:44', '0000-00-00 00:00:00'),
(11, 'GoPay', '2023-07-27 13:32:04', '0000-00-00 00:00:00'),
(12, 'SetorTunai', '2023-07-27 13:32:24', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_konfigurasi`
--

CREATE TABLE `tbl_konfigurasi` (
  `id_konfigurasi` int(11) NOT NULL,
  `nama_website` varchar(225) NOT NULL,
  `logo` varchar(225) NOT NULL,
  `favicon` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `facebook` varchar(225) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `keywords` varchar(225) NOT NULL,
  `metatext` varchar(225) NOT NULL,
  `about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_konfigurasi`
--

INSERT INTO `tbl_konfigurasi` (`id_konfigurasi`, `nama_website`, `logo`, `favicon`, `email`, `no_telp`, `alamat`, `facebook`, `instagram`, `keywords`, `metatext`, `about`) VALUES
(1, 'ADMIN', 'member.png', 'admin.png', 'admin@susantokun.com', '081906515912', 'KOMPLEK BTN Munjul No.12A 02/06, Sukaresmi, Cianjur, Jawa Barat, Indonesia (43253)', 'https://facebook.com/susantokundotcom', 'https://instagram.com/susantokun', 'info-susantokun, demo-susantokun, susantokun', 'Situs Edukasi, Tips dan Tutorial', 'Susantokun adalah situs edukasi seperti pelajaran dan ilmu pengetahuan, serta membahas tentang tips, tutorial, teknologi, tugas-tugas hingga berita terkini.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_role`
--

CREATE TABLE `tbl_role` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_role`
--

INSERT INTO `tbl_role` (`id`, `name`, `description`) VALUES
(1, 'Administrator', 'Hak akses Administrator'),
(2, 'Member', 'Hak akses Member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_saldo_bank`
--

CREATE TABLE `tbl_saldo_bank` (
  `id` int(11) NOT NULL,
  `sal_in` int(15) DEFAULT NULL,
  `kategori` varchar(255) DEFAULT NULL,
  `laba` int(15) DEFAULT NULL,
  `ket` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_saldo_bank`
--

INSERT INTO `tbl_saldo_bank` (`id`, `sal_in`, `kategori`, `laba`, `ket`, `created_at`, `updated_at`) VALUES
(1, 205000, NULL, NULL, NULL, '2023-07-29 15:23:05', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_saldo_cash`
--

CREATE TABLE `tbl_saldo_cash` (
  `id` int(11) NOT NULL,
  `sal_in` int(15) DEFAULT NULL,
  `kategori` varchar(255) DEFAULT NULL,
  `laba` int(15) DEFAULT NULL,
  `ket` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_saldo_cash`
--

INSERT INTO `tbl_saldo_cash` (`id`, `sal_in`, `kategori`, `laba`, `ket`, `created_at`, `updated_at`) VALUES
(1, 50000, NULL, NULL, NULL, '2023-07-30 00:10:11', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_saldo_payfazz`
--

CREATE TABLE `tbl_saldo_payfazz` (
  `id` int(11) NOT NULL,
  `sal_in` int(15) DEFAULT NULL,
  `kategori` varchar(255) DEFAULT NULL,
  `laba` int(15) DEFAULT NULL,
  `ket` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_saldo_payfazz`
--

INSERT INTO `tbl_saldo_payfazz` (`id`, `sal_in`, `kategori`, `laba`, `ket`, `created_at`, `updated_at`) VALUES
(1, 405000, NULL, NULL, NULL, '2023-07-29 15:26:47', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_saldo_payopay`
--

CREATE TABLE `tbl_saldo_payopay` (
  `id` int(11) NOT NULL,
  `sal_in` int(15) DEFAULT NULL,
  `kategori` varchar(255) DEFAULT NULL,
  `laba` int(15) DEFAULT NULL,
  `ket` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_saldo_payopay`
--

INSERT INTO `tbl_saldo_payopay` (`id`, `sal_in`, `kategori`, `laba`, `ket`, `created_at`, `updated_at`) VALUES
(1, 305000, NULL, NULL, NULL, '2023-07-29 15:26:24', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_trx`
--

CREATE TABLE `tbl_trx` (
  `id` int(11) NOT NULL,
  `j_trx` int(11) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `kategori` varchar(255) DEFAULT NULL,
  `jml_trx` int(15) DEFAULT NULL,
  `jml_byr` int(15) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_trx`
--

INSERT INTO `tbl_trx` (`id`, `j_trx`, `nama`, `kategori`, `jml_trx`, `jml_byr`, `status`, `created_at`, `update_at`) VALUES
(23, 0, 'Rere', 'Pulsa HP', 1000, 0, '1', '2023-07-30 14:56:30', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tunai`
--

CREATE TABLE `tbl_tunai` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `kategori` varchar(255) DEFAULT NULL,
  `jumlah` int(25) DEFAULT NULL,
  `ket` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_tunai`
--

INSERT INTO `tbl_tunai` (`id`, `nama`, `kategori`, `jumlah`, `ket`, `created_at`) VALUES
(1, 'Dedi Saputra AMd', '7', 80000, NULL, '2023-07-27 08:21:54'),
(2, 'Rere', 'Token Listrik', 50000, NULL, '2023-07-27 08:28:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `id_role` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `password_reset_key` varchar(100) DEFAULT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `activated` tinyint(1) NOT NULL DEFAULT 0,
  `last_login` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `id_role`, `username`, `password`, `password_reset_key`, `first_name`, `last_name`, `email`, `phone`, `photo`, `activated`, `last_login`, `created_at`, `updated_at`) VALUES
(1, 1, 'admin', '$2y$05$OA.OoeNHoEkbGGKazYqPU.UOaI5jmgro8x2pRSV56ClTWlDf0EEn2', '', 'ADMIN', 'izak', 'admin@mail.com', '085274955975', 'blank.png', 1, '2020-03-14 22:34:49', '2020-03-14 21:58:17', NULL),
(2, 2, 'member', '$2y$05$8GdJw3BVbmhN6x2t0MNise7O0xqLMCNAN1cmP6fkhy0DZl4SxB5iO', '', 'MEMBER', 'SUSANTOKUN', 'member@mail.com', '081906515912', '1583991814826.png', 1, '2020-03-14 22:32:04', '2020-03-14 22:00:32', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_bon`
--
ALTER TABLE `tbl_bon`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_konfigurasi`
--
ALTER TABLE `tbl_konfigurasi`
  ADD PRIMARY KEY (`id_konfigurasi`);

--
-- Indeks untuk tabel `tbl_role`
--
ALTER TABLE `tbl_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_saldo_bank`
--
ALTER TABLE `tbl_saldo_bank`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_saldo_cash`
--
ALTER TABLE `tbl_saldo_cash`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_saldo_payfazz`
--
ALTER TABLE `tbl_saldo_payfazz`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_saldo_payopay`
--
ALTER TABLE `tbl_saldo_payopay`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_trx`
--
ALTER TABLE `tbl_trx`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_tunai`
--
ALTER TABLE `tbl_tunai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_bon`
--
ALTER TABLE `tbl_bon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tbl_konfigurasi`
--
ALTER TABLE `tbl_konfigurasi`
  MODIFY `id_konfigurasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_role`
--
ALTER TABLE `tbl_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_saldo_bank`
--
ALTER TABLE `tbl_saldo_bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_saldo_cash`
--
ALTER TABLE `tbl_saldo_cash`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_saldo_payfazz`
--
ALTER TABLE `tbl_saldo_payfazz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_saldo_payopay`
--
ALTER TABLE `tbl_saldo_payopay`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_trx`
--
ALTER TABLE `tbl_trx`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `tbl_tunai`
--
ALTER TABLE `tbl_tunai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
