-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Feb 2020 pada 20.43
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `himpunan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `id` int(2) NOT NULL,
  `NIM` int(16) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Tahun_Angkatan` int(4) NOT NULL,
  `Alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id`, `NIM`, `Nama`, `Tahun_Angkatan`, `Alamat`) VALUES
(1, 1831, 'Budi Susanto Fari', 2016, 'Medan'),
(2, 1832, 'Soni Goviono D', 2018, 'Surabaya'),
(3, 1833, 'Sini De Andre', 2017, 'Bogor'),
(4, 1834, 'Santi Santika', 2019, 'Malang'),
(5, 1835, 'Reza Bahardian', 2018, 'Semarang'),
(6, 1836, 'Rama Arief Permana', 2018, 'Banyuwangi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `NIM` char(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tahun_Angkatan` char(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Alamat` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`id`, `NIM`, `Nama`, `Tahun_Angkatan`, `Alamat`, `Photo`, `created_at`, `updated_at`) VALUES
(1, '183140714111036', 'Rama Arief Permana', '2016', 'Banyuwangi', 'member6.png', NULL, NULL),
(2, '183140714111031', 'Budi Susanto Fari', '2018', 'Surabaya', 'member4.png', '2020-02-08 18:02:52', NULL),
(3, '183140714111032', 'Susi Susanti', '2018', 'Bogor', 'member3.png', NULL, NULL),
(4, '183140714111033', 'Hanin Fairuz', '2017', 'Cibinong', 'member2.png', NULL, NULL),
(5, '183140714111034', 'Bruno Fernandez Muroil', '2018', 'Papua', 'member5.png', NULL, NULL);

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_02_01_083044_himpunan', 1),
(11, '2014_10_12_000000_create_users_table', 2),
(12, '2014_10_12_100000_create_password_resets_table', 2),
(13, '2020_02_07_014303_create_member_table', 2),
(14, '2020_02_08_093349_create_psdm_table', 3),
(17, '2020_02_08_174055_create_proker_table', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `proker`
--

CREATE TABLE `proker` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Proker` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tanggal_Pelaksanaan` date NOT NULL,
  `Tempat` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Kapel` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `proker`
--

INSERT INTO `proker` (`id`, `Proker`, `Tanggal_Pelaksanaan`, `Tempat`, `Kapel`, `created_at`, `updated_at`) VALUES
(1, 'First Gathering Maba TI', '2019-09-18', 'Ayam Goreng Cak Per', 'Rama Arief Permana', '2020-02-08 19:40:39', NULL),
(2, 'Bakti Sosial Himatif', '2020-01-28', 'Pasar Besar ', 'Budi Susanto Fari', '2020-02-08 19:40:39', NULL),
(3, 'Sambut Wisuda TI', '2019-11-14', 'Gor Pertamina', 'Susi Susanti', '2020-02-08 19:40:39', NULL),
(4, 'Fun Futsal TI', '2020-02-02', 'SM Futsal Malang', 'Hanin Fairuz', '2020-02-08 19:40:39', NULL),
(5, 'Makrab TI 2019', '2019-11-05', 'Villa Batu', 'Bruno Fernandez Muroil', '2020-02-08 19:40:39', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `proker`
--
ALTER TABLE `proker`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT untuk tabel `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `member`
--
ALTER TABLE `member`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `proker`
--
ALTER TABLE `proker`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `proker`
--
ALTER TABLE `proker`
  ADD CONSTRAINT `proker_id_foreign` FOREIGN KEY (`id`) REFERENCES `member` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
