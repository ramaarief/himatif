-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Mar 2020 pada 10.17
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
(1, '183140714111036', 'Rama Arief Permana', '2018', 'Banyuwangi', 'products-20200316055456.png', NULL, NULL),
(2, '183140714111031', 'Budi Susanto Fari', '2020', 'Surabaya', 'products-20200316055654.png', '2020-02-08 18:02:52', NULL),
(3, '183140714111032', 'Susi Susanti', '2019', 'Bogor', 'products-20200316055718.png', NULL, NULL),
(4, '183140714111033', 'Hanin Fairuz', '2019', 'Cibinong', 'products-20200316055751.png', NULL, NULL),
(5, '183140714111034', 'Bruno Fernandez Muroil', '2020', 'Bandung', 'member5.png', NULL, NULL),
(6, '183140714111001', 'Safairuz Fauzah', '2018', 'Padang', 'products-20200316055820.png', NULL, NULL),
(7, '183140714111002', 'Budi Doremi', '2019', 'Bogor', 'products-20200211031400.png', NULL, NULL),
(8, '183140714111003', 'Salsabila Hanan', '2018', 'Banyuwangi', 'products-20200316055839.png', NULL, NULL);

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
(20, '2020_02_08_174055_create_proker_table', 4);

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
  `kapel_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `proker`
--

INSERT INTO `proker` (`id`, `Proker`, `Tanggal_Pelaksanaan`, `Tempat`, `kapel_id`, `created_at`, `updated_at`) VALUES
(1, 'First Gathering Maba TI', '2019-09-19', 'Ayam Goreng Cak Nan', 1, '2020-02-19 00:03:35', NULL),
(2, 'Makrab TI (LIMIT 3.0)', '2020-01-28', 'Villa Batu', 2, '2020-02-19 00:03:35', NULL),
(3, 'First Gathering Staff Muda', '2019-11-14', 'Lobbi Biro Lantai 1 Vokasi UB', 5, '2020-02-19 00:03:35', NULL),
(4, 'Regenerasi Himpunan TI', '2020-02-02', 'R.309 - 310 Vokasi UB', 4, '2020-02-19 00:03:35', NULL),
(5, 'Sertijab TI', '2019-11-05', 'R.309 - 310 Vokasi UB', 3, '2020-02-19 00:03:35', NULL);

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
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rama', 'rama@gmail.com', NULL, '$2y$10$ayx6fHM1VeuiV7FdtTpCcO814jtIe08tndDCNQ11WeforuBRMUYDq', NULL, '2020-02-18 07:23:20', '2020-02-18 07:23:20');

--
-- Indexes for dumped tables
--

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `proker_kapel_id_foreign` (`kapel_id`);

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
-- AUTO_INCREMENT untuk tabel `member`
--
ALTER TABLE `member`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `proker`
--
ALTER TABLE `proker`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `proker`
--
ALTER TABLE `proker`
  ADD CONSTRAINT `proker_kapel_id_foreign` FOREIGN KEY (`kapel_id`) REFERENCES `member` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
