-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Jan 2022 pada 04.31
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
-- Database: `pendataan_buku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2022_01_28_072140_create_table_kategori', 2),
(6, '2022_01_28_090330_create_table_bukus', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_buku`
--

CREATE TABLE `m_buku` (
  `id` int(10) UNSIGNED NOT NULL,
  `kategori` int(11) NOT NULL,
  `judul` varchar(115) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` int(11) NOT NULL,
  `penulis` varchar(115) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `m_buku`
--

INSERT INTO `m_buku` (`id`, `kategori`, `judul`, `keterangan`, `stock`, `penulis`, `gambar`, `created_at`, `updated_at`) VALUES
(10, 8, 'Into The Wild', '<p>Into the Wild yang ditulis pada 1996, adalah buku non-fiksi tentang kehidupan seorang hiker atau pejalan kaki asal Amerika, Christopher McCandless.<br></p>', 10, 'Jon Krakauer', 'Into The Wild.jpg', '2022-01-28 22:07:08', '2022-01-28 22:07:08'),
(11, 8, 'The Lightning Thief', '<p>Film ini berawal dari cerita Percy Jackson (Logan Lerman), seorang anak remaja yang belum tahu sejarah keturunannya. Ia bahkan tidak tahu bahwa dirinya adalah keturunan Dewa Laut dari Yunani Kuno, Poseidon, dan seorang Demigod (setengah dewa setengah manusia)<br></p>', 5, 'Rick Riordan', 'The Lightning Thief.jpg', '2022-01-30 20:30:00', '2022-01-30 20:30:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_kategori`
--

CREATE TABLE `m_kategori` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(115) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `m_kategori`
--

INSERT INTO `m_kategori` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(5, 'Komik', '2022-01-28 04:03:12', '2022-01-28 04:03:30'),
(7, 'Horor', '2022-01-28 07:28:40', '2022-01-28 07:28:40'),
(8, 'Adventure', '2022-01-28 07:28:55', '2022-01-28 07:28:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(11, 'Naufal Zaki', 'nouvalzaki87@gmail.com', NULL, '$2y$10$aM5U9B68t7WWSjnhp/iEr.caMJjme.I.ye7sZvhTDeAyIiMmCDo4G', NULL, '2022-01-30 20:27:30', '2022-01-30 20:27:30');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `m_buku`
--
ALTER TABLE `m_buku`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `m_kategori`
--
ALTER TABLE `m_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `m_buku`
--
ALTER TABLE `m_buku`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `m_kategori`
--
ALTER TABLE `m_kategori`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
