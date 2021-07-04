-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 04 Jul 2021 pada 20.31
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `nama_depan` varchar(128) DEFAULT NULL,
  `nama_belakang` varchar(128) DEFAULT NULL,
  `hp` varchar(16) DEFAULT NULL,
  `foto` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama_depan`, `nama_belakang`, `hp`, `foto`) VALUES
(3, 'admin', '$2y$10$xlDK/KURJjYLbaUiExQ24uamdiL9xoy36KJ69vd2ExctX4L4KUY2.', 'Administrator', '', '', 'default.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_jual`
--

CREATE TABLE `detail_jual` (
  `id_jual` int(11) NOT NULL,
  `id_kendaraan` varchar(16) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `harga` int(11) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_modal`
--

CREATE TABLE `detail_modal` (
  `id_modal` int(11) NOT NULL,
  `id_kendaraan` varchar(128) NOT NULL,
  `tanggal` datetime NOT NULL,
  `detail` varchar(256) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `merk_mobil`
--

CREATE TABLE `merk_mobil` (
  `id_merk` int(11) NOT NULL,
  `nama_merk` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `merk_mobil`
--

INSERT INTO `merk_mobil` (`id_merk`, `nama_merk`) VALUES
(1, 'Toyota'),
(2, 'Hyundai'),
(3, 'Daihatsu'),
(4, 'Honda'),
(5, 'Mitsubishi'),
(6, 'Suzuki'),
(7, 'Nisan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `id_kendaraan` varchar(16) NOT NULL,
  `merk_mobil` varchar(128) NOT NULL,
  `type_mobil` varchar(128) NOT NULL,
  `jenis_transmisi` varchar(128) NOT NULL,
  `bahan_bakar` varchar(128) NOT NULL,
  `warna` varchar(128) NOT NULL,
  `tahun_rakitan` int(4) NOT NULL,
  `tnkb` varchar(128) NOT NULL,
  `gambar` varchar(128) DEFAULT NULL,
  `nama_pemilik` varchar(128) DEFAULT NULL,
  `nomor_rangka` varchar(128) DEFAULT NULL,
  `nomor_mesin` varchar(128) DEFAULT NULL,
  `detail` text DEFAULT NULL,
  `harga_jual` int(11) DEFAULT NULL,
  `tanggal_input` datetime NOT NULL,
  `status` int(1) NOT NULL,
  `tanggal_terjual` datetime DEFAULT NULL,
  `id_sales_penjual` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `id_kendaraan`, `merk_mobil`, `type_mobil`, `jenis_transmisi`, `bahan_bakar`, `warna`, `tahun_rakitan`, `tnkb`, `gambar`, `nama_pemilik`, `nomor_rangka`, `nomor_mesin`, `detail`, `harga_jual`, `tanggal_input`, `status`, `tanggal_terjual`, `id_sales_penjual`) VALUES
(17, 'NM.001', 'Daihatsu', 'AGYA 1.2 H', 'Manual', 'Bensin', 'Hitam', 2000, 'BM 1945 MR', '20210329011557.jpg', 'WAHYU', 'MN2124', 'KXL371823', '', NULL, '2021-03-29 00:00:00', 0, NULL, NULL),
(19, 'NM.003', 'Nissan', 'Magnite', 'Manual', 'Bensin', 'Merah', 2019, 'BM 14 EM', '20210329020832.jpg', 'Defri', 'MKSJ21491OK', 'YES2368', '', NULL, '2021-03-29 00:00:00', 0, NULL, NULL),
(20, 'NM.004', 'Nissan', 'Navara', 'Manual', 'Bensin', 'Orange', 2019, 'BM 123 OK', '20210329020957.jpg', 'Steven', 'SDG768565234', 'DFG675435234', '', NULL, '2021-03-29 00:00:00', 0, NULL, NULL),
(21, 'NM.005', 'Nissan', 'Livina', 'Manual', 'Bensin', 'Putih', 2018, 'BM 2964 IS', '20210329021247.jpeg', 'Steven', 'DGI345678', 'ODS476586970', '', NULL, '2021-03-29 00:00:00', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sales`
--

CREATE TABLE `sales` (
  `id_sales` int(11) NOT NULL,
  `username` varchar(128) DEFAULT NULL,
  `password` varchar(128) DEFAULT NULL,
  `nama_depan` varchar(128) DEFAULT NULL,
  `nama_belakang` varchar(128) DEFAULT NULL,
  `hp` varchar(16) DEFAULT NULL,
  `foto` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sales`
--

INSERT INTO `sales` (`id_sales`, `username`, `password`, `nama_depan`, `nama_belakang`, `hp`, `foto`) VALUES
(7, 'sales', '$2y$10$BPHz9srK/GbaAuMj1JXtzOhJBru9y3lmutkLJYL3LnSmInjUOyF9m', 'Sales', '', '', 'default.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `detail_jual`
--
ALTER TABLE `detail_jual`
  ADD PRIMARY KEY (`id_jual`);

--
-- Indeks untuk tabel `detail_modal`
--
ALTER TABLE `detail_modal`
  ADD PRIMARY KEY (`id_modal`);

--
-- Indeks untuk tabel `merk_mobil`
--
ALTER TABLE `merk_mobil`
  ADD PRIMARY KEY (`id_merk`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD UNIQUE KEY `id_kendaraan` (`id_kendaraan`);

--
-- Indeks untuk tabel `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id_sales`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `detail_jual`
--
ALTER TABLE `detail_jual`
  MODIFY `id_jual` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `detail_modal`
--
ALTER TABLE `detail_modal`
  MODIFY `id_modal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `merk_mobil`
--
ALTER TABLE `merk_mobil`
  MODIFY `id_merk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `sales`
--
ALTER TABLE `sales`
  MODIFY `id_sales` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
