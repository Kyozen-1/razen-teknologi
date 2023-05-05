-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 26 Apr 2023 pada 06.27
-- Versi server: 5.7.33
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `razen_teknologi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `fitur_layanans`
--

CREATE TABLE `fitur_layanans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `layanan_id` bigint(20) UNSIGNED DEFAULT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `fitur_layanans`
--

INSERT INTO `fitur_layanans` (`id`, `layanan_id`, `judul`, `created_at`, `updated_at`) VALUES
(1, 1, 'Prominent IT Security Services.', '2023-04-19 18:26:28', '2023-04-19 18:53:25'),
(2, 2, 'Mitech Management Systems.', '2023-04-19 19:03:33', '2023-04-19 19:03:33'),
(3, 3, 'Prominent IT Security Services.', '2023-04-19 19:05:02', '2023-04-19 19:05:02'),
(4, 4, 'Prominent IT Security Services.', '2023-04-19 19:05:48', '2023-04-19 19:05:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `landing_page_aplikasis`
--

CREATE TABLE `landing_page_aplikasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `section_1` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `landing_page_aplikasis`
--

INSERT INTO `landing_page_aplikasis` (`id`, `section_1`, `created_at`, `updated_at`) VALUES
(1, '{\"gambar\": \"643b70c0ca85c-230416.png\"}', '2023-04-15 20:51:28', '2023-04-15 20:51:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `landing_page_berandas`
--

CREATE TABLE `landing_page_berandas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `section_1` json DEFAULT NULL,
  `section_2` json DEFAULT NULL,
  `section_3` json DEFAULT NULL,
  `section_4` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `landing_page_berandas`
--

INSERT INTO `landing_page_berandas` (`id`, `section_1`, `section_2`, `section_3`, `section_4`, `created_at`, `updated_at`) VALUES
(1, '{\"judul\": \"Advanced <br> Innovative IT <br> Solutions\", \"gambar\": \"643a98fd727b5-230415.png\", \"deskripsi\": \"<p>We run all kinds of IT services that vowsuccess</p>\", \"sub_judul\": \"BEST IT SOLUTION PROVIDER\"}', '{\"judul\": \"Having Someone With a Deep & Broad Understanding.\", \"sub_judul\": \"OUR JOURNEY\"}', '{\"judul\": \"Just Make An Awesome Tour Here.\", \"gambar\": \"643b4ac5f1ce7-230416.png\", \"konten\": [{\"id\": \"643b4af937cd9\", \"item\": \"Easy To Edit\"}, {\"id\": \"643b4af937cdc\", \"item\": \"24/ Online Support\"}, {\"id\": \"643b4af937cdd\", \"item\": \"Easy To Edit\"}, {\"id\": \"643b4b0bf16ea\", \"item\": \"24/ Online Support\"}], \"tautan\": \"https://www.youtube.com/embed/4xe72U7mXNg\", \"deskripsi\": \"<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>\", \"sub_judul\": \"INTRO VIDEO\"}', '{\"judul\": \"Get Every Single Update Here.\", \"sub_judul\": \"NEWS FEEDS\"}', '2023-04-15 05:30:53', '2023-04-16 23:15:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `landing_page_kontaks`
--

CREATE TABLE `landing_page_kontaks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `section_1` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `landing_page_kontaks`
--

INSERT INTO `landing_page_kontaks` (`id`, `section_1`, `created_at`, `updated_at`) VALUES
(1, '{\"gambar\": \"643b9a16db962-230416.png\"}', '2023-04-15 23:47:50', '2023-04-15 23:47:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `landing_page_layanans`
--

CREATE TABLE `landing_page_layanans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `section_1` json DEFAULT NULL,
  `section_2` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `landing_page_layanans`
--

INSERT INTO `landing_page_layanans` (`id`, `section_1`, `section_2`, `created_at`, `updated_at`) VALUES
(1, '{\"gambar\": \"643b6a8375341-230416.png\"}', '{\"judul\": \"Just Make An Awesome Tour Here.\", \"gambar\": \"643b6c374b288-230416.png\", \"deskripsi\": \"<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>\", \"sub_judul\": \"CALL TO ACTION\"}', '2023-04-15 20:24:51', '2023-04-15 20:32:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `landing_page_perusahaans`
--

CREATE TABLE `landing_page_perusahaans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `section_1` json DEFAULT NULL,
  `section_2` json DEFAULT NULL,
  `section_3` json DEFAULT NULL,
  `section_4` json DEFAULT NULL,
  `section_5` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `landing_page_perusahaans`
--

INSERT INTO `landing_page_perusahaans` (`id`, `section_1`, `section_2`, `section_3`, `section_4`, `section_5`, `created_at`, `updated_at`) VALUES
(1, '{\"gambar\": \"643b52e646f49-230416.png\"}', '{\"gambar\": \"643b55df88426-230416.png\", \"tautan\": \"https://www.youtube.com/embed/4xe72U7mXNg\"}', '{\"judul\": \"We’ve Been Thriving In 38 Years.\", \"deskripsi\": \"<p>Labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat ion ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\", \"sub_judul\": \"ABOUT US\", \"gambar_besar\": \"643b582ac485c-230416.png\", \"gambar_kecil\": \"643b582ac0804-230416.png\", \"deskripsi_judul\": \"<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>\"}', '{\"judul\": \"IT Services & Support For Business.\", \"sub_judul\": \"SERVICES\"}', '{\"judul\": \"Our Buddys Always Ready To Solve Your Issues.\", \"sub_judul\": \"TEAM\"}', '2023-04-15 18:44:06', '2023-04-15 20:01:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `layanans`
--

CREATE TABLE `layanans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul_kecil` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci,
  `ikon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `layanans`
--

INSERT INTO `layanans` (`id`, `judul_kecil`, `judul`, `deskripsi`, `ikon`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'UI/UX DESIGN', 'Just Make An Awesome Tour Here.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.', '643f45ab86493-230419.png', '643f45aba0f93-230419.png', '2023-04-18 18:36:43', '2023-04-19 18:57:00'),
(2, 'Managed IT services', 'Managed IT services', 'Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed do eiusmod tempor incididunt ut labore.', '64409ca1132a5-230420.png', '64409ca1304d4-230420.png', '2023-04-19 19:00:01', '2023-04-19 19:00:01'),
(3, 'Backup and Recovery', 'Backup and Recovery', 'Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed do eiusmod tempor incididunt ut labore.', '64409cd6148b7-230420.png', '64409cd615a68-230420.png', '2023-04-19 19:00:54', '2023-04-19 19:00:54'),
(4, 'Cyber Security', 'Cyber Security', 'Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed do eiusmod tempor incididunt ut labore.', '64409d13d08ce-230420.png', '64409d13d18e1-230420.png', '2023-04-19 19:01:55', '2023-04-19 19:01:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `layanan_perusahaans`
--

CREATE TABLE `layanan_perusahaans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci,
  `gambar_default` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar_hover` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `layanan_perusahaans`
--

INSERT INTO `layanan_perusahaans` (`id`, `judul`, `deskripsi`, `gambar_default`, `gambar_hover`, `created_at`, `updated_at`) VALUES
(1, 'Our Approach', 'Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed.', '643e113993927-230418.png', '643e1139aba53-230418.png', '2023-04-17 20:40:41', '2023-04-17 20:42:02'),
(2, 'Our Values', 'Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed.', '643e11bda02e6-230418.png', '643e11bda23da-230418.png', '2023-04-17 20:42:53', '2023-04-17 20:42:53'),
(3, 'Our Resources', 'Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed.', '643e11cfb2664-230418.png', '643e11cfb4273-230418.png', '2023-04-17 20:43:11', '2023-04-17 20:43:11'),
(4, 'Growth Process', 'Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed.', '643e11ea6f039-230418.png', '643e11ea70d9f-230418.png', '2023-04-17 20:43:38', '2023-04-17 20:43:38'),
(5, 'Our Support', 'Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed.', '643e132fea7ab-230418.png', '643e132feba7a-230418.png', '2023-04-17 20:49:03', '2023-04-17 20:49:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_media_sosials`
--

CREATE TABLE `master_media_sosials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode_ikon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `master_media_sosials`
--

INSERT INTO `master_media_sosials` (`id`, `nama`, `kode_ikon`, `created_at`, `updated_at`) VALUES
(1, 'Facebook', 'fab fa-facebook-f', '2023-04-17 23:16:55', '2023-04-17 23:16:55'),
(2, 'Twitter', 'fab fa-twitter', '2023-04-17 23:18:31', '2023-04-17 23:18:31'),
(3, 'LinkedIn', 'fab fa-linkedin-in', '2023-04-17 23:18:42', '2023-04-17 23:18:42'),
(4, 'Youtube', 'fab fa-youtube', '2023-04-17 23:18:53', '2023-04-17 23:18:53'),
(5, 'Tik Tok', 'fab fa-tiktok', '2023-04-22 21:02:19', '2023-04-22 21:02:19'),
(6, 'Instagram', 'fab fa-instagram', '2023-04-22 21:04:10', '2023-04-22 21:04:10');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2023_04_12_121022_create_profils_table', 2),
(5, '2023_04_15_115645_create_landing_page_berandas_table', 3),
(6, '2023_04_15_122852_drop_column_section_5_to_landing_page_berandas', 4),
(7, '2023_04_16_012019_create_landing_page_perusahaans_table', 5),
(8, '2023_04_16_023848_drop_column_section_6_to_landing_page_perusahaans', 6),
(9, '2023_04_16_030434_create_landing_page_layanans_table', 7),
(10, '2023_04_16_034838_create_landing_page_aplikasis_table', 8),
(11, '2023_04_16_063940_create_landing_page_kontaks_table', 9),
(12, '2023_04_17_061841_create_timelines_table', 10),
(13, '2023_04_17_115752_create_testimonis_table', 11),
(14, '2023_04_17_130239_create_layanan_perusahaans_table', 12),
(15, '2023_04_18_040312_create_master_media_sosials_table', 13),
(16, '2023_04_18_062527_create_tims_table', 14),
(17, '2023_04_18_062716_create_pivot_tim_media_sosials_table', 14),
(18, '2023_04_18_114319_create_layanans_table', 15),
(19, '2023_04_18_114705_create_pivot_daftar_layanans_table', 15),
(20, '2023_04_19_024221_create_fitur_layanans_table', 16),
(21, '2023_04_19_024502_create_pivot_item_fitur_layanans_table', 16),
(22, '2023_04_23_035348_create_pivot_profil_media_sosials_table', 17);

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
-- Struktur dari tabel `pivot_daftar_layanans`
--

CREATE TABLE `pivot_daftar_layanans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `layanan_id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pivot_daftar_layanans`
--

INSERT INTO `pivot_daftar_layanans` (`id`, `layanan_id`, `judul`, `created_at`, `updated_at`) VALUES
(1, 1, 'Web Template Design', '2023-04-18 18:36:43', '2023-04-18 19:34:52'),
(2, 1, 'Theme Development', '2023-04-18 18:36:43', '2023-04-18 19:34:52'),
(3, 1, 'Game Design', '2023-04-18 18:36:43', '2023-04-18 19:34:52'),
(4, 1, 'Illustration Design', '2023-04-18 18:36:43', '2023-04-18 19:34:52'),
(5, 2, 'Web Template Design', '2023-04-19 19:00:01', '2023-04-19 19:00:01'),
(6, 2, 'Theme Development', '2023-04-19 19:00:01', '2023-04-19 19:00:01'),
(7, 2, 'Game Design', '2023-04-19 19:00:01', '2023-04-19 19:00:01'),
(8, 2, 'Illustration Design', '2023-04-19 19:00:01', '2023-04-19 19:00:01'),
(9, 3, 'Web Template Design', '2023-04-19 19:00:54', '2023-04-19 19:00:54'),
(10, 3, 'Theme Development', '2023-04-19 19:00:54', '2023-04-19 19:00:54'),
(11, 3, 'Game Design', '2023-04-19 19:00:54', '2023-04-19 19:00:54'),
(12, 3, 'Illustration Design', '2023-04-19 19:00:54', '2023-04-19 19:00:54'),
(13, 4, 'Web Template Design', '2023-04-19 19:01:55', '2023-04-19 19:01:55'),
(14, 4, 'Theme Development', '2023-04-19 19:01:55', '2023-04-19 19:01:55'),
(15, 4, 'Game Design', '2023-04-19 19:01:55', '2023-04-19 19:01:55'),
(16, 4, 'Illustration Design', '2023-04-19 19:01:55', '2023-04-19 19:01:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pivot_item_fitur_layanans`
--

CREATE TABLE `pivot_item_fitur_layanans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fitur_layanan_id` bigint(20) UNSIGNED DEFAULT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pivot_item_fitur_layanans`
--

INSERT INTO `pivot_item_fitur_layanans` (`id`, `fitur_layanan_id`, `judul`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 1, 'Mitech Management Systems.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.', '2023-04-19 18:26:28', '2023-04-19 18:53:25'),
(2, 1, 'Efficient Database Security.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.', '2023-04-19 18:26:28', '2023-04-19 18:53:25'),
(3, 1, 'Reliable Multi-function Technology.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.', '2023-04-19 18:26:28', '2023-04-19 18:53:25'),
(5, 1, 'Highly Professional Staffs.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.', '2023-04-19 18:52:23', '2023-04-19 18:52:23'),
(6, 2, 'Mitech Management Systems.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.', '2023-04-19 19:03:33', '2023-04-19 19:03:33'),
(7, 2, 'Efficient Database Security.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.', '2023-04-19 19:03:33', '2023-04-19 19:03:33'),
(8, 2, 'Reliable Multi-function Technology.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.', '2023-04-19 19:03:33', '2023-04-19 19:03:33'),
(9, 2, 'Highly Professional Staffs.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.', '2023-04-19 19:03:33', '2023-04-19 19:03:33'),
(10, 3, 'Mitech Management Systems.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.', '2023-04-19 19:05:02', '2023-04-19 19:05:02'),
(11, 3, 'Efficient Database Security.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.', '2023-04-19 19:05:02', '2023-04-19 19:05:02'),
(12, 3, 'Reliable Multi-function Technology.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.', '2023-04-19 19:05:02', '2023-04-19 19:05:02'),
(13, 3, 'Highly Professional Staffs.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.', '2023-04-19 19:05:02', '2023-04-19 19:05:02'),
(14, 4, 'Mitech Management Systems.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.', '2023-04-19 19:05:48', '2023-04-19 19:05:48'),
(15, 4, 'Efficient Database Security.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.', '2023-04-19 19:05:48', '2023-04-19 19:05:48'),
(16, 4, 'Reliable Multi-function Technology.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.', '2023-04-19 19:05:48', '2023-04-19 19:05:48'),
(17, 4, 'Highly Professional Staffs.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.', '2023-04-19 19:05:48', '2023-04-19 19:05:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pivot_profil_media_sosials`
--

CREATE TABLE `pivot_profil_media_sosials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `media_sosial_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profil_id` bigint(20) UNSIGNED DEFAULT NULL,
  `tautan` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pivot_profil_media_sosials`
--

INSERT INTO `pivot_profil_media_sosials` (`id`, `media_sosial_id`, `profil_id`, `tautan`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'https://web.facebook.com/razenteknologiindonesia?_rdc=2&_rdr', '2023-04-22 21:07:25', '2023-04-22 21:07:25'),
(2, 6, 1, 'https://www.instagram.com/razen_teknologi/', '2023-04-22 21:07:25', '2023-04-22 21:07:25'),
(3, 4, 1, 'https://www.youtube.com/@razenteknologiindonesia1653', '2023-04-22 21:07:25', '2023-04-22 21:07:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pivot_tim_media_sosials`
--

CREATE TABLE `pivot_tim_media_sosials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tim_id` bigint(20) UNSIGNED DEFAULT NULL,
  `media_sosial_id` bigint(20) UNSIGNED DEFAULT NULL,
  `tautan` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pivot_tim_media_sosials`
--

INSERT INTO `pivot_tim_media_sosials` (`id`, `tim_id`, `media_sosial_id`, `tautan`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Razen Teknologi', '2023-04-18 04:17:17', '2023-04-18 04:17:17'),
(2, 1, 2, 'Razen Teknologi', '2023-04-18 04:17:17', '2023-04-18 04:17:17'),
(3, 1, 3, 'Razen Teknologi', '2023-04-18 04:17:17', '2023-04-18 04:17:17'),
(4, 1, 4, 'Razen Teknologi', '2023-04-18 04:17:17', '2023-04-18 04:17:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profils`
--

CREATE TABLE `profils` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `profils`
--

INSERT INTO `profils` (`id`, `nama`, `pt`, `no_hp`, `email`, `logo`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Razen Teknologi', 'PT Razen Teknologi Indonesia', '082299449494', 'hello@razen.co.id', '642b9aa063e73-230404.png', 'Yogyakarta', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimonis`
--

CREATE TABLE `testimonis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `judul_testimoni` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `testimoni` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `testimonis`
--

INSERT INTO `testimonis` (`id`, `nama`, `jabatan`, `foto`, `judul_testimoni`, `testimoni`, `created_at`, `updated_at`) VALUES
(1, 'Rosalina D. William', 'Founder, Romada Co.', '643d3a75244ea-230417.png', 'Great Quality Software', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore to magna\r\n                            aliqua. Ut enim ad minim veniam, quis nostrud a exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.\r\n                            Duis aute irure dolor in reprehenderit in the voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur\r\n                            sint occaecat cupidatat non proident.', '2023-04-17 05:24:21', '2023-04-17 05:24:21'),
(2, 'Rosalina D. William', 'Founder, Romada Co.', '643d3a9c0dc1a-230417.png', 'Great Quality Software', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore to magna\r\n                            aliqua. Ut enim ad minim veniam, quis nostrud a exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.\r\n                            Duis aute irure dolor in reprehenderit in the voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur\r\n                            sint occaecat cupidatat non proident.', '2023-04-17 05:25:00', '2023-04-17 05:25:00'),
(3, 'Rosalina D. William', 'Founder, Romada Co.', '643d3adbd0a44-230417.png', 'Great Quality Software', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore to magna\r\n                            aliqua. Ut enim ad minim veniam, quis nostrud a exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.\r\n                            Duis aute irure dolor in reprehenderit in the voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur\r\n                            sint occaecat cupidatat non proident.', '2023-04-17 05:26:03', '2023-04-17 05:26:03'),
(4, 'Rosalina D. William', 'Founder, Romada Co.', '643d3ba034a56-230417.png', 'Great Quality Software', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore to magna\r\n                            aliqua. Ut enim ad minim veniam, quis nostrud a exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.\r\n                            Duis aute irure dolor in reprehenderit in the voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur\r\n                            sint occaecat cupidatat non proident.', '2023-04-17 05:29:20', '2023-04-17 05:29:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `timelines`
--

CREATE TABLE `timelines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `timelines`
--

INSERT INTO `timelines` (`id`, `judul`, `deskripsi`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Research', 'Business Apps have become an essential asset for organizations across the globe. To ensure that your business application runs smoothly, a robust app strategy is required. Rather than rushing the application directly for development, organizations must have brainstorming sessions with app developers and discuss their mobile app development strategy.', '643ceb12a65ec-230417.png', '2023-04-16 23:45:38', '2023-04-16 23:45:38'),
(2, 'Wireframing', 'We create innovative, unique design ideas for your app and show them in the form of the live prototype which shows the complete flow of the mobile app with all-screen designs and flow of complete functionality with each step. It gives the client a complete idea of how his mobile app will look and function.', '643ceb5b07e8d-230417.png', '2023-04-16 23:46:51', '2023-04-16 23:46:51'),
(3, 'Designing', 'With a unique blend of modern technologies and innovative approaches, we create responsive and adaptive designs. We understand what it takes to build a brand from the design perspective, we help clients thrive by simplifying designs that can make a lasting impact on the mind of the users which in turn, increase brand awareness and loyalty.', '643ceb7e8f010-230417.png', '2023-04-16 23:47:26', '2023-04-16 23:47:26'),
(4, 'Development', 'After coming together with app designs, the mobile app developers get down to bring everything into action. The project manager defines tasks to the developers and develops apps step by step to achieve the set milestones. We value your time and money, thus, a discussion of every thought, suggestion, or decision is done with you.', '643cec58e95ee-230417.png', '2023-04-16 23:51:05', '2023-04-16 23:51:05'),
(5, 'Testing & Publish', 'We make certain that the application matches up to all your cited requirements. After completing the testing procedure we assist our customers in uploading their applications on Appstore and Playstore. They have strong policies to make the app live, but we do have quite good expertise in this domain.', '643cec7ce8147-230417.png', '2023-04-16 23:51:40', '2023-04-16 23:51:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tims`
--

CREATE TABLE `tims` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tims`
--

INSERT INTO `tims` (`id`, `nama`, `jabatan`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Rosalina D. William', 'Founder', '643e7c3d2694b-230418.png', '2023-04-18 04:17:17', '2023-04-18 04:17:17');

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
  `color_layout` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nav_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `placement` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `behaviour` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `layout` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `radius` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `color_layout`, `nav_color`, `placement`, `behaviour`, `layout`, `radius`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Razen Teknologi', 'razen_teknologi@razen.co.id', NULL, '$2y$10$vUlaHLsUBySNV17OB4bA0OgYjwnU1ThdLwFcLlbghO900K8Jz.1f.', 'dark-sky', 'default', 'vertical', 'pinned', 'fluid', 'rounded', NULL, NULL, '2023-04-18 18:28:42');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `fitur_layanans`
--
ALTER TABLE `fitur_layanans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fitur_layanans_layanan_id_foreign` (`layanan_id`);

--
-- Indeks untuk tabel `landing_page_aplikasis`
--
ALTER TABLE `landing_page_aplikasis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `landing_page_berandas`
--
ALTER TABLE `landing_page_berandas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `landing_page_kontaks`
--
ALTER TABLE `landing_page_kontaks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `landing_page_layanans`
--
ALTER TABLE `landing_page_layanans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `landing_page_perusahaans`
--
ALTER TABLE `landing_page_perusahaans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `layanans`
--
ALTER TABLE `layanans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `layanan_perusahaans`
--
ALTER TABLE `layanan_perusahaans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `master_media_sosials`
--
ALTER TABLE `master_media_sosials`
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
-- Indeks untuk tabel `pivot_daftar_layanans`
--
ALTER TABLE `pivot_daftar_layanans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pivot_daftar_layanans_layanan_id_foreign` (`layanan_id`);

--
-- Indeks untuk tabel `pivot_item_fitur_layanans`
--
ALTER TABLE `pivot_item_fitur_layanans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pivot_item_fitur_layanans_fitur_layanan_id_foreign` (`fitur_layanan_id`);

--
-- Indeks untuk tabel `pivot_profil_media_sosials`
--
ALTER TABLE `pivot_profil_media_sosials`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pivot_profil_media_sosials_media_sosial_id_foreign` (`media_sosial_id`),
  ADD KEY `pivot_profil_media_sosials_profil_id_foreign` (`profil_id`);

--
-- Indeks untuk tabel `pivot_tim_media_sosials`
--
ALTER TABLE `pivot_tim_media_sosials`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pivot_tim_media_sosials_tim_id_foreign` (`tim_id`),
  ADD KEY `pivot_tim_media_sosials_media_sosial_id_foreign` (`media_sosial_id`);

--
-- Indeks untuk tabel `profils`
--
ALTER TABLE `profils`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `testimonis`
--
ALTER TABLE `testimonis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `timelines`
--
ALTER TABLE `timelines`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tims`
--
ALTER TABLE `tims`
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
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `fitur_layanans`
--
ALTER TABLE `fitur_layanans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `landing_page_aplikasis`
--
ALTER TABLE `landing_page_aplikasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `landing_page_berandas`
--
ALTER TABLE `landing_page_berandas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `landing_page_kontaks`
--
ALTER TABLE `landing_page_kontaks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `landing_page_layanans`
--
ALTER TABLE `landing_page_layanans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `landing_page_perusahaans`
--
ALTER TABLE `landing_page_perusahaans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `layanans`
--
ALTER TABLE `layanans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `layanan_perusahaans`
--
ALTER TABLE `layanan_perusahaans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `master_media_sosials`
--
ALTER TABLE `master_media_sosials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `pivot_daftar_layanans`
--
ALTER TABLE `pivot_daftar_layanans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `pivot_item_fitur_layanans`
--
ALTER TABLE `pivot_item_fitur_layanans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `pivot_profil_media_sosials`
--
ALTER TABLE `pivot_profil_media_sosials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pivot_tim_media_sosials`
--
ALTER TABLE `pivot_tim_media_sosials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `profils`
--
ALTER TABLE `profils`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `testimonis`
--
ALTER TABLE `testimonis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `timelines`
--
ALTER TABLE `timelines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tims`
--
ALTER TABLE `tims`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `fitur_layanans`
--
ALTER TABLE `fitur_layanans`
  ADD CONSTRAINT `fitur_layanans_layanan_id_foreign` FOREIGN KEY (`layanan_id`) REFERENCES `layanans` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pivot_daftar_layanans`
--
ALTER TABLE `pivot_daftar_layanans`
  ADD CONSTRAINT `pivot_daftar_layanans_layanan_id_foreign` FOREIGN KEY (`layanan_id`) REFERENCES `layanans` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pivot_item_fitur_layanans`
--
ALTER TABLE `pivot_item_fitur_layanans`
  ADD CONSTRAINT `pivot_item_fitur_layanans_fitur_layanan_id_foreign` FOREIGN KEY (`fitur_layanan_id`) REFERENCES `fitur_layanans` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pivot_profil_media_sosials`
--
ALTER TABLE `pivot_profil_media_sosials`
  ADD CONSTRAINT `pivot_profil_media_sosials_media_sosial_id_foreign` FOREIGN KEY (`media_sosial_id`) REFERENCES `master_media_sosials` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pivot_profil_media_sosials_profil_id_foreign` FOREIGN KEY (`profil_id`) REFERENCES `profils` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pivot_tim_media_sosials`
--
ALTER TABLE `pivot_tim_media_sosials`
  ADD CONSTRAINT `pivot_tim_media_sosials_media_sosial_id_foreign` FOREIGN KEY (`media_sosial_id`) REFERENCES `master_media_sosials` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pivot_tim_media_sosials_tim_id_foreign` FOREIGN KEY (`tim_id`) REFERENCES `tims` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
