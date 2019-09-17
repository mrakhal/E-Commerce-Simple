-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Bulan Mei 2018 pada 12.44
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `catalogyuk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `address` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `zipcode` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `orders`
--

INSERT INTO `orders` (`id`, `product_id`, `username`, `nama_barang`, `qty`, `price`, `address`, `address2`, `city`, `state`, `zipcode`) VALUES
(5, 3, 'coba', 'Baju Kurang Bahan', 1, '258470.00', 'komplek jajajajajan', 'jangan jangan', 'bandung', 'indonesia', '40611'),
(6, 1, 'coba', 'Sweater Abu ', 2, '595000.00', 'gedung f', 'hati2', 'bandung', 'Indonesia', '555'),
(7, 6, 'coba', 'Baju Batik Merah', 1, '720000.00', 'palsu', '12312', 'tes', 'adasd', '12412'),
(8, 5, 'coba', 'Baju Zest Loafer', 1, '689000.00', '213', 'd', 'dqqw', '123', '22'),
(9, 7, 'mrakhalf', 'Baju Saipul Jamil', 1, '0.00', 'Komplek', 'kjdiwaiwaj wakandawidnwai', 'Wakanda', 'Wakanda', '40611');

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `kategori`, `title`, `description`, `image`, `price`) VALUES
(1, 'Unisex', 'Sweater Abu ', 'Sweater tanpa motif detail slit Warna abu High rise Unlined Regular fit Bahan Katun Nyaman Saat Dipakai Didesain oleh perusahaan terkenal', 'Produk1.png', '595000.00'),
(2, 'Laki-Laki', 'Kemeja Koko ', 'Baju koko monokrom detail kerah warna kontras Warna putih Kerah tinggi Unlined Regular fit Kancing depan Detail bordir Material katun Tinggi model 188cm mengenakan ukuran M', 'Produk2.png', '546000.00'),
(3, 'Perempuan', 'Baju Kurang Bahan', 'Baju koko Hitam detail pundak kurang bahan Unlined Regular fit Detail bordir Material katun Tinggi model 188cm mengenakan ukuran M', 'Produk3.png', '258470.00'),
(4, 'Unisex', 'Sweater Galaxy', 'Sweater nuansa luar angkasa Warna galaxy Unlined Regular fit Material katun kombinasi Tinggi model 173cm, menggunakan ukuran S', 'Produk4.png', '450000.00'),
(5, 'Perempuan', 'Baju Zest Loafer', 'Drop shoulder blouse lengan panjang detail bordir Warna abu Kerah standar Unlined Loose fit Material katun Tinggi model 170cm, mengenakan ukuran one size', 'Produk5.png', '689000.00'),
(6, 'Perempuan', 'Baju Batik Merah', 'Blouse batik print lengan panjang Warna merah Kerah bulat Unlined Kancing belakang Regular fit Material poliester Tinggi model 176 cm mengenakan ukuran S', 'Produk6.png', '720000.00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `join_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `username`, `password`, `join_date`) VALUES
(5, 'Mochamad', 'Rakha', 'mochamadrakha@gmail.com', 'mrakhalf', 'c334ba469f14d85f7c6d705a534aff6d', '2018-05-12 05:11:33'),
(6, 'Zaenal', 'Abidin', 'Zaenalabidin@gmail.com', 'zaenalabidin', '25d55ad283aa400af464c76d713c07ad', '2018-05-12 13:15:49'),
(7, 'coba', 'coba', 'coba@coba.com', 'coba', 'c3ec0f7b054e729c5a716c8125839829', '2018-05-13 07:09:28');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT untuk tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
