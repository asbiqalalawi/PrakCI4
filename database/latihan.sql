-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Nov 2020 pada 23.26
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */
;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */
;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */
;
/*!40101 SET NAMES utf8mb4 */
;
--
-- Database: `latihan`
--
-- --------------------------------------------------------
--
-- Struktur dari tabel `migrations`
--
CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` text NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8;
--
-- Dumping data untuk tabel `migrations`
--
INSERT INTO `migrations` (
    `id`,
    `version`,
    `class`,
    `group`,
    `namespace`,
    `time`,
    `batch`
  )
VALUES (
    1,
    '2020-11-13-090638',
    'App\\Database\\Migrations\\Produk',
    'default',
    'App',
    1605259538,
    1
  );
-- --------------------------------------------------------
--
-- Struktur dari tabel `produk`
--
CREATE TABLE `produk` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `deskripsi_produk` text NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8;
--
-- Dumping data untuk tabel `produk`
--
INSERT INTO `produk` (
    `id`,
    `nama_produk`,
    `deskripsi_produk`,
    `created_at`,
    `updated_at`
  )
VALUES (1, 'baju', 'baju panjang', NULL, NULL),
  (2, 'celana', 'celana panjang', NULL, NULL);
--
-- Indexes for dumped tables
--
--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
ADD PRIMARY KEY (`id`);
--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
ADD PRIMARY KEY (`id`);
--
-- AUTO_INCREMENT untuk tabel yang dibuang
--
--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 2;
--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 3;
COMMIT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */
;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */
;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */
;