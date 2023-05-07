-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 07 Bulan Mei 2023 pada 10.20
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
-- Struktur dari tabel `landing_page_layanan_pemerintahans`
--

CREATE TABLE `landing_page_layanan_pemerintahans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `section_1` json DEFAULT NULL,
  `section_2` json DEFAULT NULL,
  `section_3` json DEFAULT NULL,
  `section_4` json DEFAULT NULL,
  `section_5` json DEFAULT NULL,
  `section_6` json DEFAULT NULL,
  `section_7` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `landing_page_layanan_pemerintahans`
--

INSERT INTO `landing_page_layanan_pemerintahans` (`id`, `section_1`, `section_2`, `section_3`, `section_4`, `section_5`, `section_6`, `section_7`, `created_at`, `updated_at`) VALUES
(1, '{\"judul\": \"Produk Pemerintahan Daerah oleh Razen\", \"gambar\": \"6454bb9519e9e-230505.png\", \"konten\": [{\"id\": \"6454bf78288b4\", \"item\": \"Produk Dinas Razen sistem akuntansi online terbukti handal untuk bisnis\"}, {\"id\": \"6454bf78288b6\", \"item\": \"Membantu pencatatan keuangan, pembukuan & operasional bisnis perusahaan menjadi mudah & efisien\"}, {\"id\": \"6454bf8b4fc76\", \"item\": \"Kelola dengan solusi automasi, kapanpun & dimanapun\"}], \"tautan\": \"https://www.youtube.com/embed/pH47yFwWDJ0\"}', '{\"judul\": \"Produk Pemerintahan Daerah yang terbukti dipercaya 30 dinas di Indonesia\"}', '{\"judul\": \"7 Produk pemerintahan unggulan Razen Teknologi\"}', '{\"judul\": \"3 alasan Produk Dinas Razen jadi Pilihan Pemerintah Daerah\", \"konten\": [{\"id\": \"645602ec505ad\", \"item\": \"Pionir sistem akuntansi online pertama di Indonesia\", \"gambar\": \"645602ec2f439-230506.png\"}, {\"id\": \"645602ec52ebe\", \"item\": \"Fitur terlengkap, terintegrasi dalam satu platform\", \"gambar\": \"645602ec506f0-230506.png\"}, {\"id\": \"6456038f1d003\", \"item\": \"Layanan after sales terbaik dengan fitur live chat\", \"gambar\": \"6456038f1a097-230506.png\"}]}', '{\"judul\": \"Pelajari apa yang Pemerintah daerah katakan tentang kami\", \"sub_judul\": \"TESTIMONI PEMERINTAH DERAH\"}', '{\"judul\": \"Dapatkan solusi lengkap dengan jasa konsultasi bisnis\", \"gambar\": \"6456085c666aa-230506.png\", \"konten\": [{\"id\": \"645607aeb4b16\", \"jawaban\": \"Keuangan bisnis Anda akan ditangani oleh partner konsultan yang berpengalaman di bidangnya.\", \"pertanyaan\": \"Pembukuan jadi lebih akurat\"}, {\"id\": \"645607aeb4b19\", \"jawaban\": \"Keuangan bisnis Anda akan ditangani oleh partner konsultan yang berpengalaman di bidangnya.\", \"pertanyaan\": \"Pengambilan keputusan lebih instan\"}, {\"id\": \"645608e90a16f\", \"jawaban\": \"Keuangan bisnis Anda akan ditangani oleh partner konsultan yang berpengalaman di bidangnya.\", \"pertanyaan\": \"Pengelolaan bisnis jadi lebih mudah\"}], \"deskripsi\": \"Terbukti dipercaya untuk tumbuh bersama bisnis dan perusahaan terbaik dari beragam skala, usaha kecil, UKM, industri, dan berbagai kota di Indonesia.\"}', '{\"judul\": \"Apa itu zen smart kabupaten?\", \"konten\": [{\"id\": \"64560bbb5abbe\", \"jawaban\": \"Ada 5 manfaat besar dari menggunakan software akuntansi online, antara lain: 1. memudahkan pekerjaan dinas, 2. menghemat biaya sistem akuntansi, 3. optimalisasi SDM, 4. otomasi dan 5. efisiensi:\\r\\n\\r\\n1. Memudahkan pekerjaan dinas: Sistem akuntansi online bermanfaat untuk membantu dinas atau perusahaan dalam memproses kegiatan pencatatan dan perhitungan transaksi bisnis yang lebih efisien, cepat, instan, serta memudahkan untuk di akses.\\r\\n\\r\\n2. Menghemat biaya sistem akuntansi: Sistem jenis ini dapat digunakan dengan biaya yang lebih terjangkau sehingga lebih menguntungkan dibandingkan dengan tenaga dan biaya manual.\\r\\n\\r\\n3. Optimalisasi SDM: Anda tidak perlu banyak tenaga ahli akuntan untuk bisnis, Anda tidak harus paham penggunaan rumus-rumus akuntansi dalam pemakaiannya.\\r\\n\\r\\n4. Otomasi: Proses pembukuan yang otomatis dan lebih aman dengan minim risiko kesalahan hitung manusia seperti yang terjadi dalam proses manual.\\r\\n\\r\\n5. Efisiensi: Sistem dapat mengumpulkan seluruh pendataan perusahaan sehingga semua menjadi satu tempat, lebih mudah di kontrol dan diawasi.\\r\\n\\r\\nAda banyak hal yang bisa dilakukan oleh software akuntansi, antara lain: Untuk laporan keuangan, pembukuan, data transaksi, faktur invoice penjualan, pembayaran pesanan.\", \"pertanyaan\": \"Apa manfaat dari produk sistem akuntansi online?\"}, {\"id\": \"64560bbb5abc0\", \"jawaban\": \"Beberapa kriteria dalam memilih sistem termasuk kemanan data zen antara lain:\\r\\n\\r\\nHarus memiliki keamanan yang ber-sertifikat, mudah digunakan, mudah diakses, memiliki fitur lengkap, sistem terintegrasi, sudah dipercaya banyak pengguna dan memiliki customer support yang siap membantu.\\r\\n\\r\\nPastikan juga memiliki paket dan harga yang bersahabat dan sesuai dengan kebutuhan.\\r\\n\\r\\nUntuk Anda yang membutuhkan solusi manajemen perhitungan dan pencatatan transaksi bisnis yang murah dan aman, pastikan vendor dan perusahaannya sudah terpercaya.\", \"pertanyaan\": \"Bagaimana cara memilih sistem akuntansi online untuk bisnis?\"}, {\"id\": \"64560bbb5abc1\", \"jawaban\": \"Software offline di install di komputer, bisa dijalankan tanpa terhubung ke internet. Tetapi untuk mendapatkan data yang real-time dan akurat membutuhkan update data secara manual.\\r\\n\\r\\nSedangkan sistem  online harus terhubung ke internet, tetapi laporan data terintegrasi dan dapat diakses secara real-time kapan saja dan di mana saja, melalui perangkat komputer atau perangkat Android atau iOS.\\r\\n\\r\\nTidak harus di instal atau dipasang di komputer, sehingga membuat proses akuntansi semakin ringan karena berbasis Web Base (Cloud) .\\r\\n\\r\\nKoneksi internet dan kebutuhan olah informasi secara cepat sangat dibutuhkan perusahaan untuk selalu memonitor bisnis secara akurat.\", \"pertanyaan\": \"Apa perbedaan akuntansi online dan offline?\"}, {\"id\": \"64560bbb5abc2\", \"jawaban\": \"Bagaimana jadinya jika sistem yang sering digunakan di perusahaan adalah produk tidak resmi? Apakah menjadi manfaat dan aman untuk melindungi data perusahaan?\\r\\n\\r\\nDownload dan gunakan zen original untuk menjaga data dan keamanan bisnis Anda.\\r\\n\\r\\nSoftware dari dalam dan brand luar negeri, jika tidak resmi dapat membahayakan sistem pengguna, sangat disarankan untuk selalu menggunakan aplikasi resmi untuk keamanan data perusahaan.\\r\\n\\r\\nKelola bisnis lebih tenang dan berkah dengan produk yang terpercaya, murah cukup terjangkau, resmi dan terjamin.\", \"pertanyaan\": \"Mengapa harus menggunakan sistem zen yang asli?\"}, {\"id\": \"64560bd2242f9\", \"jawaban\": \"Daftar hari ini dan login ke sistem website Smart Kabupaten.id, atau install aplikasi Smart Kabupaten di Google Play dan App Store.\\r\\n\\r\\nGRATIS untuk demo!\\r\\n\\r\\nTidak perlu melakukan Gunakan browser Anda dan langsung gunakan di browser (web base), atau dapatkan dan Install aplikasinya.\\r\\n\\r\\nPaket harga langganan yang bervariasi tergantung kebutuhan bisnis yang Anda miliki, dapatkan langganan harga terjangkau di halaman harga software Smart Kabupaten ini.\", \"pertanyaan\": \"Bagaimana cara memulai menggunakan Smart Kabupaten online?\"}], \"deskripsi\": \"Zen smart kabupaten adalah perangkat lunak untuk mencatat, mengolah, menampilkan data transaksi akuntansi bisnis untuk memberikan solusi bagi UKM & perusahaan terkait pembukuan, laporan keuangan, invoice, dan neraca keuangan secara online serta real-time.\\r\\n\\r\\nRibuan pemerintah daerah mempercayai kemampuan akuntansi online yang terintegrasi  cloud. Saatnya Anda mendapatkan manfaatnya, sekarang.\"}', '2023-05-05 01:17:25', '2023-05-06 17:28:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `landing_page_layanan_startups`
--

CREATE TABLE `landing_page_layanan_startups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `section_1` json DEFAULT NULL,
  `section_2` json DEFAULT NULL,
  `section_3` json DEFAULT NULL,
  `section_4` json DEFAULT NULL,
  `section_5` json DEFAULT NULL,
  `section_6` json DEFAULT NULL,
  `section_7` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `landing_page_layanan_startups`
--

INSERT INTO `landing_page_layanan_startups` (`id`, `section_1`, `section_2`, `section_3`, `section_4`, `section_5`, `section_6`, `section_7`, `created_at`, `updated_at`) VALUES
(1, '{\"judul\": \"Produk Startup Rintisan oleh Razen\", \"video\": \"64564cc57e699-230506.mp4\", \"gambar\": \"64564cc57ed10-230506.jpg\", \"deskripsi\": \"Punya gagasan operasi bisnis Anda di suatu tempat? Tidak masalah! Razen Teknologi adalah layanan yang Anda perlukan untuk mengelola seluruh website Anda dari mana saja, kapan saja!\", \"sub_judul\": \"RAZEN TEKNOLOGI\"}', '{\"judul\": \"Berkualitas dan Teknologi Terkini!\", \"deskripsi\": \"Memiliki berbagai macam fiturdesain yang kreatif,\\r\\nkonten yang informatif dan bermanfaat, navigasi yang mudah dipahami,\\r\\ntampilan responsif yang memudahkan akses dari berbagai perangkat,\\r\\nkecepatan loading yang cepat dan fitur interaktif seperti forum\\r\\natau chat yang memungkinkan pengguna berinteraksi satu sama lain.\", \"sub_judul\": \"Dapatkan Semua Fitur Menakjubkan Hanya Dalam Satu Website\"}', '{\"judul\": \"Generasi Baru Dari Website Teknologi Terkini Telah Hadir\", \"konten\": [{\"id\": \"645653a4d2f18\", \"ikon\": \"icon-1\", \"judul\": \"Performa Tinggi\"}, {\"id\": \"645653a4d2f1b\", \"ikon\": \"icon-2\", \"judul\": \"Menggunakan Plugins and Extensions\"}, {\"id\": \"64565437f1d1d\", \"ikon\": \"icon-3\", \"judul\": \"Mudah Digunakan\"}], \"deskripsi\": \"Serangkaian alat lengkap dirancang untuk membuat hidup lebih mudah dengan website berkualitas\"}', '{\"judul\": \"4 Produk Startup Rintisan Unggulan Razen Teknologi\"}', '{\"judul\": \"100+ IN ALL RAZEN TECHNOLOGY VERSIONS\", \"deskripsi\": \"TOP 5 STAR RATING\\r\\nReal people, real stories. Hear from our community.\", \"sub_judul\": \"Startup Rintisan Produk Razen Teknologi\"}', '{\"judul\": \"Didukung Oleh Tenaga Professional PROFESSIONAL\", \"gambar\": \"64565b21940ee-230506.png\", \"konten\": [{\"id\": \"64565cd164a98\", \"judul\": \"Dokumentasi Online - Berisi semua deskripsi terkait dengan penggunaan dan fitur yang tersedia\"}, {\"id\": \"64565cd164a9a\", \"judul\": \"Dokumentasi Video (segera hadir) - Butuh instruksi visual? Periksa tutorial video kami\"}, {\"id\": \"64565ce78cd98\", \"judul\": \"Dukungan Penuh - Hubungi kami jika Anda mendapatkan masalah saat menggunakan produk kami\"}], \"deskripsi\": \"Bermasalah ketika menggunakan produk kami? Kami akan membantu Anda\"}', '{\"judul\": \"Bangun situs web Anda dengan Razen Teknologi Beli sekarang, mulai dari IDR 2.000K!\", \"deskripsi\": \"Razen Teknologi telah berpengalaman sejak 2019 dan merupakan salah satu perusahaan terpercaya dengan penjualan lebih dari 100+.\"}', '2023-05-06 05:49:09', '2023-05-06 07:04:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `landing_page_layanan_swastas`
--

CREATE TABLE `landing_page_layanan_swastas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `section_1` json DEFAULT NULL,
  `section_2` json DEFAULT NULL,
  `section_3` json DEFAULT NULL,
  `section_4` json DEFAULT NULL,
  `section_5` json DEFAULT NULL,
  `section_6` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `landing_page_layanan_swastas`
--

INSERT INTO `landing_page_layanan_swastas` (`id`, `section_1`, `section_2`, `section_3`, `section_4`, `section_5`, `section_6`, `created_at`, `updated_at`) VALUES
(1, '{\"judul\": \"Beragam Pengelolaan Dalam Menunjang Kebutuhan Bisnis Anda\", \"video\": \"645637d40f041-230506.mp4\", \"deskripsi\": \"Performance Power Full, Efisien, dan memiliki berbagai Fitur menarik.\", \"sub_judul\": \"PRODUK SWASTA\"}', '{\"deskripsi\": \"Cara Tercepat untuk Mengembangkan Bisnis Anda dengan Teknologi\\r\\nRazen Teknologi Siap Memberikan Fitur - Fitur Terbaik Sesuai Kebutuhan Bisnis Anda\"}', '{\"judul\": \"5 Produk Lengkap Untuk Menunjang Bisnis Anda\"}', '{\"judul\": \"Mengembangkan bisnis kecil bersama sama\", \"gambar\": \"64563ae8aa44a-230506.png\", \"konten\": \"\", \"deskripsi\": \"Kami membuat aplikasi web & smartphone modern untuk membantu berbagai bisnis Anda. Kami akan memberikan fitur - fitur yang dapat membantu proses bisnis anda secara efisien. Segera menghubungi kami untuk menikmati kemudahan dalam bisnis anda.\"}', '{\"judul\": \"Testimoni Pengguna Produk Kami\", \"konten\": [{\"id\": \"6456421442f1b\", \"nama\": \"Farah Liza\", \"testimoni\": \"Pendapatan bisnis saya semakin meningkat setelah menggunakan sistem yang disediakan oleh Razen Teknologi.\"}, {\"id\": \"6456421442f1d\", \"nama\": \"Budi Basuki\", \"testimoni\": \"Fitur - fitur yang di berikan pada sistem aplikasi milik Razen, sangat memberikan kemudahan dalam mengelola penjualan bisnis saya.\"}, {\"id\": \"6456421442f1e\", \"nama\": \"Abdul Rahman\", \"testimoni\": \"Sebelum menggunakan sistem razen pendatapan bisnis saya begitu - begitu saja, Setelah menggunakan sistem milik Razen Bisnis saya terus berkembang.\"}, {\"id\": \"6456421442f1f\", \"nama\": \"Halim Podiono\", \"testimoni\": \"Aplikasi milik razen memiliki performa yang baik dan memiliki berbagai fitur - fitur yang memperluas bisnis saya.\"}]}', '{\"judul\": \"Website Swasta Menjadi Kebutuhkan Bisnis Anda Saat ini!\", \"deskripsi\": \"Website Company Profile Untuk UKM adalah Kebutuhan Anda untuk memiliki website profesional yang dibangun dengan web design premium, serta tampilan yang familiar.\"}', '2023-05-06 04:19:48', '2023-05-06 05:10:33');

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
-- Struktur dari tabel `layanan_pemerintahan_data_dinas`
--

CREATE TABLE `layanan_pemerintahan_data_dinas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `layanan_pemerintahan_data_dinas`
--

INSERT INTO `layanan_pemerintahan_data_dinas` (`id`, `nama`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'BPBD', '6456f75dd8137-230507.png', '2023-05-06 17:57:01', '2023-05-06 17:57:44'),
(2, 'Pariwisata', '6456f77abd063-230507.png', '2023-05-06 17:57:30', '2023-05-06 17:57:30'),
(3, 'Jawa Tengah', '6456f7972b185-230507.png', '2023-05-06 17:57:59', '2023-05-06 17:57:59'),
(4, 'Kabupaten Madiun', '6456f7dede492-230507.gif', '2023-05-06 17:59:10', '2023-05-06 17:59:10'),
(5, 'Kementrian Pendidikan dan Kebudayaan', '6456f8025a180-230507.png', '2023-05-06 17:59:46', '2023-05-06 17:59:46'),
(6, 'Kementrian Perhubungan Republik Indonesia', '6456f82e22cb8-230507.png', '2023-05-06 18:00:30', '2023-05-06 18:00:30'),
(7, 'Kota Blitar', '6456f8432a61f-230507.png', '2023-05-06 18:00:51', '2023-05-06 18:00:51'),
(8, 'Kabupaten Magelang', '6456f85523826-230507.png', '2023-05-06 18:01:09', '2023-05-06 18:01:09'),
(9, 'Batam', '6456f85f5038b-230507.png', '2023-05-06 18:01:19', '2023-05-06 18:01:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `layanan_pemerintahan_produk_unggulans`
--

CREATE TABLE `layanan_pemerintahan_produk_unggulans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `layanan_pemerintahan_produk_unggulans`
--

INSERT INTO `layanan_pemerintahan_produk_unggulans` (`id`, `judul`, `deskripsi`, `link`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Akutansi Dinas', 'Pantau laporan bisnis & keuangan melalui dasbor performa bisnis dengan template laporan yang lengkap', '#', '645703dde8f5e-230507.png', '2023-05-06 18:50:22', '2023-05-06 18:54:39'),
(2, 'Akuntansi', 'Lebih akurat dengan pembukuan yang lebih mudah dipahami dan sesuai dengan standar akuntansi di Indonesia', '#', '645704fb35817-230507.png', '2023-05-06 18:55:07', '2023-05-06 18:55:07'),
(3, 'Razen Pay', 'Terima segala pembayaran lebih mudah dengan satu dompet digital yang keamanannya setara dengan standar bank', '#', '6457053970639-230507.png', '2023-05-06 18:56:09', '2023-05-06 18:56:09'),
(4, 'Invoice & Faktur', 'Terima pembayaran lebih cepat dengan fitur otomasi invoice tanpa perlu khawatir lupa kirim atau telat kirim', '#', '6457054fca876-230507.png', '2023-05-06 18:56:31', '2023-05-06 18:56:31'),
(5, 'Produk & Inventory', 'Kelola stok barang secara terpusat dan real-time pada setiap gudang hanya melalui satu dasbor', '#', '64570564d437d-230507.png', '2023-05-06 18:56:53', '2023-05-06 18:56:53'),
(6, 'Biaya & Anggaran', 'Manfaatkan data real-time untuk membuat keputusan perusahaan lebih akurat dengan aplikasi laporan keuangan', '#', '64570578be681-230507.png', '2023-05-06 18:57:12', '2023-05-06 18:57:12'),
(7, 'Perpajakan', 'Hilangkan risiko kesalahan perhitungan pajak dengan kalkulasi otomatis hanya dengan satu klik', '#', '64570592668da-230507.png', '2023-05-06 18:57:38', '2023-05-06 18:57:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `layanan_pemerintahan_testimoni_pemerintahs`
--

CREATE TABLE `layanan_pemerintahan_testimoni_pemerintahs` (
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
-- Dumping data untuk tabel `layanan_pemerintahan_testimoni_pemerintahs`
--

INSERT INTO `layanan_pemerintahan_testimoni_pemerintahs` (`id`, `nama`, `jabatan`, `foto`, `judul_testimoni`, `testimoni`, `created_at`, `updated_at`) VALUES
(1, 'BPBD Madiun', 'Dinas', '64571731973ef-230507.png', 'Testimoni BPBD', '“Eatlah tidak perlu menghabiskan 1-2 hari kerja hanya untuk membuat laporan keuangan secara manual, karena proses diselesaikan secara otomatis dari aplikasi.”', '2023-05-06 20:12:49', '2023-05-06 20:14:18'),
(2, 'Disbudpar Blitar', 'Dinas', '645717c530203-230507.png', 'Testimoni Disbudpar Blitar', '“Razen membantu kami mengetahui kondisi keuangan perusahaan kapanpun dan di manapun, bahkan ketika dalam perjalanan. Saat mengikuti tender, kami bisa mengambil keputusan bisnis secara cepat dan tepat.”', '2023-05-06 20:15:17', '2023-05-06 20:15:17'),
(3, 'Disbudpar Madiun', 'Dinas', '645717ec0832f-230507.gif', 'Testimoni Disbudpar Madiun', '“Razen bisa memenuhi kebutuhan pengelolaan keuangan kami dengan sistem real time monitoring. Hal itu sangat membantu perusahaan yang memiliki ribuan outlet.”', '2023-05-06 20:15:56', '2023-05-06 20:15:56'),
(4, 'Pertanian Magelang', 'Dinas', '6457180f95052-230507.png', 'Testimoni Pertanian Magelang', '“Fitur multi warehouse, memudahkan BARDI melihat pergerakan barang secara jelas, seperti berapa banyak produk yang sedang transit, dikirim ke pelanggan hingga jumlah produk yang ada di gudang cabang saat ini.”', '2023-05-06 20:16:31', '2023-05-06 20:16:31'),
(5, 'Testimoni Dinas', 'Testimoni Dinas', '6457184df153d-230507.gif', 'Testimoni Dinas', '“Kami tidak perlu membuat sistem sendiri. Sistem stock in and stock out, payment customer hingga terms of payment mengikuti sistem yang ada di Smart Kabupaten. Tanpa sistem Smart Kabupaten, akan sulit manage peoplenya.”', '2023-05-06 20:17:33', '2023-05-06 20:17:33'),
(6, 'Testimoni Dinas 2', 'Dinas', '64571868c5754-230507.gif', 'Testimoni Dinas', '“Proses pembuatan invoice lebih cepat hingga 5x lipat. Secara manual biasanya sekitar 25 hari, kini hanya membutuhkan 3-5 hari.”', '2023-05-06 20:18:00', '2023-05-06 20:18:00'),
(7, 'Dinas 3', 'Dinas', '645718d465bb7-230507.gif', 'Testimoni Dinas 3', '“Dulu, rekapan stok opame hanya dapat dilakukan 1x sebulan secara manual. Kini, dengan fitur produk & inventory, stok opname dapat dilakukan otomatis setiap 1-2 minggu sekali. “', '2023-05-06 20:19:48', '2023-05-06 20:19:48'),
(8, 'Dinas 4', 'Dinas', '645718f5be3f8-230507.gif', 'Testimoni Dinas 4', '“Pengawasan ribuan stok pun juga dapat dilakukan dengan praktis tanpa perlu datang ke gudang, karena data stok selalu ter-update secara real-time setiap ada transaksi.”', '2023-05-06 20:20:21', '2023-05-06 20:20:21'),
(9, 'Dinas 5', 'Dinas', '645719313ca0e-230507.gif', 'Testimoni Dinas 5', '“Melalui fitur-fitur akuntansi Smart Kabupaten, kami jadi bisa memonitor perkembangan bisnis, sales, dan laporan keuangan di satu platform yang bisa diakses oleh banyak karyawan secara mudah.”', '2023-05-06 20:21:21', '2023-05-06 20:21:21');

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
-- Struktur dari tabel `layanan_startup_produk_rintisans`
--

CREATE TABLE `layanan_startup_produk_rintisans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `layanan_startup_produk_rintisans`
--

INSERT INTO `layanan_startup_produk_rintisans` (`id`, `nama`, `link`, `created_at`, `updated_at`, `deskripsi`, `gambar`) VALUES
(1, 'Mami Clean', '#', '2023-05-07 01:34:40', '2023-05-07 02:54:25', '\"Mami Clean merupakan merupakan Startup Rintisan di Indonesia yang memiliki layanan Layanan Mami Laundry, Mami Clean dan Mami Servic yang dikerjakan oleh para ahlinya\"', '6457755171654-230507.png'),
(2, 'Pendekar Bengkel', 'https://www.pendekarbengkel.com/', '2023-05-07 01:34:58', '2023-05-07 02:53:50', '\"Layanan maintenance dan service kendaraan hanya untuk anda. Dapatkan layanan terbaik dari teknisi berpengalaman untuk memastikan kendaraan anda berada pada kondisi maksimal setiap saat.\"', '6457752e970d8-230507.png'),
(3, 'Bangun Tani', 'https://marketplace.demo.smartservice.co.id/', '2023-05-07 01:35:28', '2023-05-07 02:53:17', '\"Banguntani merupakan e-commerce di Indonesia yang menawarkan berbagai macam produk sayuran, buah-buahan, daging segar, ikan segar, lauk pauk dan berbagai macam sembako.\"', '6457750d307be-230507.png'),
(4, 'Subcon', '#', '2023-05-07 01:35:43', '2023-05-07 02:52:42', '\"Subcon merupakan aplikasi e-commerce di Indonesia yang merupakan Startup Rintisan\"', '645774ea6d0ff-230507.png'),
(5, 'Akad sah', 'https://akadsah.com/', '2023-05-07 01:36:04', '2023-05-07 02:52:12', '\"Aplikasi manajemen pernikahan untuk membantu anda mempersiapkan hari spesial. Menyediakan semua kebutuhan pernikahan berkualitas dan terpercaya didalam 1 platform.\"', '645774cbb23c9-230507.png'),
(6, 'Vokasee', 'https://vokasee.id/#', '2023-05-07 01:36:33', '2023-05-07 02:51:31', '\"Belajar tanpa batas secara Online. Mitra Prakerin dan Pengajaran online serta kursus yang akan dipandu oleh para ahli untuk membantu Anda memperoleh keterampilan baru di dunia Industri 4.0.\"', '645774a3b154d-230507.png'),
(7, 'Laden', 'https://jasa.demo.smartservice.co.id/#/', '2023-05-07 01:36:47', '2023-05-07 02:50:12', '\"Laden merupakan e-commerce di Indonesia yang menawarkan berbagai macam layanan \"serabutan\", seperti pembersihan, perbaikan, pemasangan, renovasi pada berbagai macam bidang.\"', '64577454abfdc-230507.png'),
(8, 'Frigle', '#', '2023-05-07 01:36:59', '2023-05-07 02:49:40', '\"Frigle merupakan aplikasi e-commerce di Indonesia yang merupakan Startup Rintisan\"', '645774346b2f2-230507.png'),
(9, 'KolHype', 'https://kolhype.com/', '2023-05-07 01:37:26', '2023-05-07 02:48:47', 'Digital Agency Berbasis Komunitas Influencer #1 di Indonesia. Kesempatan terbaik untuk membuat Bisnis anda di kenal luas & mendapatkan Profit Yang Lebih Besar dengan strategi Influencer Marketing.', '645773ff5ec69-230507.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `layanan_startup_produk_rintisan_unggulans`
--

CREATE TABLE `layanan_startup_produk_rintisan_unggulans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `gambar_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `layanan_startup_produk_rintisan_unggulans`
--

INSERT INTO `layanan_startup_produk_rintisan_unggulans` (`id`, `judul`, `deskripsi`, `gambar`, `created_at`, `updated_at`, `gambar_2`, `gambar_3`) VALUES
(1, 'Banguntani', '“Banguntani merupakan e-commerce di Indonesia yang menawarkan berbagai macam produk sayuran, buah-buahan, daging segar, ikan segar, lauk pauk dan berbagai macam sembako.”', '64576ca8dd137-230507.png', '2023-05-07 02:17:29', '2023-05-07 02:22:09', '64576ca93303d-230507.png', '64576ca962400-230507.png'),
(2, 'Akadsah', '“Aplikasi manajemen pernikahan untuk membantu anda mempersiapkan hari spesial. Menyediakan semua kebutuhan pernikahan berkualitas dan terpercaya didalam 1 platform.\"', '64576f9ac1f2f-230507.png', '2023-05-07 02:30:04', '2023-05-07 02:30:04', '64576f9b26d0b-230507.png', '64576f9b7f0f6-230507.png'),
(3, 'Pendekar Bengkel', '“Layanan maintenance dan service kendaraan hanya untuk anda. Dapatkan layanan terbaik dari teknisi berpengalaman untuk memastikan kendaraan anda berada pada kondisi maksimal setiap saat.”', '64576fe111de8-230507.png', '2023-05-07 02:31:14', '2023-05-07 02:31:14', '64576fe16ccf7-230507.png', '64576fe198db0-230507.png'),
(4, 'Mami Clean', '“Layanan Mami Laundry, Mami Clean dan Mami Service.”', '6457702889174-230507.png', '2023-05-07 02:32:25', '2023-05-07 02:32:25', '64577028c95d4-230507.png', '6457702913bd1-230507.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `layanan_swasta_produk_lengkaps`
--

CREATE TABLE `layanan_swasta_produk_lengkaps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `layanan_swasta_produk_lengkaps`
--

INSERT INTO `layanan_swasta_produk_lengkaps` (`id`, `judul`, `deskripsi`, `link`, `logo`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'GET ERP', '“Platform Untuk Mengelola Seluruh Bisnis anda untuk operasional lebih produktif & terintegrasi. Kurangi waktu untuk tugas administratif, dan lebih banyak waktu untuk bekerja, menggunakan Zen ERP, SISTEM BISNIS ALL-IN-ONE.”', 'https://tech.razen.co.id/solusi/get-erp-razen/', '64572916f3631-230507.png', '645729174d7c8-230507.png', '2023-05-06 21:29:11', '2023-05-06 21:29:11'),
(2, 'GET STORE', '“Bangun toko merupakan e-commerce online yang bisa Anda gunakan untuk menjual produk Anda dalam hitungan menit. Buat toko impian Anda, tambahkan produk, kelola inventaris dan mulai untuk kembangkan bisnis Anda.\"', 'https://tech.razen.co.id/solusi/get-store-razen/', '6457299d876da-230507.png', '6457299dd6950-230507.png', '2023-05-06 21:31:26', '2023-05-06 21:31:26'),
(3, 'GET PROJECT', '“Semua fitur manajemen tugas diujung jari anda. Sistem dirancang untuk pengusaha dan manajer proyek yang mencari cara efisien untuk mengelola pekerjaan mereka. Buat proyek, tetapkan tugas, lacak waktu, buat faktur untuk klien, dan dapatkan bayaran - dalam beberapa klik.”', '#', '645729e3c2153-230507.png', '645729e41c367-230507.png', '2023-05-06 21:32:36', '2023-05-06 21:32:36'),
(4, 'GET CRM', '“Satu - satunya alat yang anda perlukan untuk mengelola seluruh bisnis anda. Kelola setiap aspek bisnis Anda dengan sedikit atau tanpa usaha. Tetapkan proyek, tangani akuntansi, dan berkolaborasi dengan tim Anda. Kelola prospek dan ubah mereka menjadi klien - semuanya di satu tempat.”', '#', '64572a227eb22-230507.png', '64572a22cd3e1-230507.png', '2023-05-06 21:33:38', '2023-05-06 21:33:38'),
(5, 'GET LMS', '“Platform pendidikan dengan fitur yang lengkap untuk membantu instruktur membuat dan menerbitkan kursus video, kelas langsung serta kursus teks sebagai langkah untuk menghasilkan uang dan membantu siswa belajar dengan mudah.”', 'https://tech.razen.co.id/solusi/elearning/', '64572a6eef67d-230507.png', '64572a6f49dec-230507.png', '2023-05-06 21:34:55', '2023-05-06 21:34:55');

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
(22, '2023_04_23_035348_create_pivot_profil_media_sosials_table', 17),
(23, '2023_05_04_015257_add_logo_kecil_to_profils', 18),
(24, '2023_05_05_073427_create_landing_page_layanan_pemerintahans_table', 19),
(25, '2023_05_06_081809_create_landing_page_layanan_swastas_table', 20),
(27, '2023_05_06_123040_create_landing_page_layanan_startups_table', 21),
(28, '2023_05_07_003837_create_layanan_pemerintahan_data_dinas_table', 22),
(29, '2023_05_07_011428_create_layanan_pemerintahan_produk_unggulans_table', 23),
(30, '2023_05_07_022407_create_layanan_pemerintahan_testimoni_pemerintahs_table', 24),
(31, '2023_05_07_040458_create_layanan_swasta_produk_lengkaps_table', 25),
(32, '2023_05_07_082206_create_layanan_startup_produk_rintisans_table', 26),
(33, '2023_05_07_082644_drop_gambar_from_layanan_startup_produk_rintisans', 27),
(34, '2023_05_07_085247_create_layanan_startup_produk_rintisan_unggulans_table', 28),
(35, '2023_05_07_090706_add_gambar_2_to_layanan_startup_produk_rintisan_unggulans', 29),
(36, '2023_05_07_094020_add_deskripsi_to_layanan_startup_produk_rintisans', 30);

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `logo_kecil` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `profils`
--

INSERT INTO `profils` (`id`, `nama`, `pt`, `no_hp`, `email`, `logo`, `alamat`, `created_at`, `updated_at`, `logo_kecil`) VALUES
(1, 'Razen Teknologi', 'PT Razen Teknologi Indonesia', '082299449494', 'hello@razen.co.id', '642b9aa063e73-230404.png', 'Yogyakarta', NULL, '2023-05-03 18:57:29', '6453110958d3f-230504.png');

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
(1, 'Razen Teknologi', 'razen_teknologi@razen.co.id', NULL, '$2y$10$vUlaHLsUBySNV17OB4bA0OgYjwnU1ThdLwFcLlbghO900K8Jz.1f.', 'dark-sky', 'default', 'vertical', 'pinned', 'fluid', 'rounded', NULL, NULL, '2023-05-06 17:16:43');

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
-- Indeks untuk tabel `landing_page_layanan_pemerintahans`
--
ALTER TABLE `landing_page_layanan_pemerintahans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `landing_page_layanan_startups`
--
ALTER TABLE `landing_page_layanan_startups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `landing_page_layanan_swastas`
--
ALTER TABLE `landing_page_layanan_swastas`
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
-- Indeks untuk tabel `layanan_pemerintahan_data_dinas`
--
ALTER TABLE `layanan_pemerintahan_data_dinas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `layanan_pemerintahan_produk_unggulans`
--
ALTER TABLE `layanan_pemerintahan_produk_unggulans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `layanan_pemerintahan_testimoni_pemerintahs`
--
ALTER TABLE `layanan_pemerintahan_testimoni_pemerintahs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `layanan_perusahaans`
--
ALTER TABLE `layanan_perusahaans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `layanan_startup_produk_rintisans`
--
ALTER TABLE `layanan_startup_produk_rintisans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `layanan_startup_produk_rintisan_unggulans`
--
ALTER TABLE `layanan_startup_produk_rintisan_unggulans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `layanan_swasta_produk_lengkaps`
--
ALTER TABLE `layanan_swasta_produk_lengkaps`
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
-- AUTO_INCREMENT untuk tabel `landing_page_layanan_pemerintahans`
--
ALTER TABLE `landing_page_layanan_pemerintahans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `landing_page_layanan_startups`
--
ALTER TABLE `landing_page_layanan_startups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `landing_page_layanan_swastas`
--
ALTER TABLE `landing_page_layanan_swastas`
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
-- AUTO_INCREMENT untuk tabel `layanan_pemerintahan_data_dinas`
--
ALTER TABLE `layanan_pemerintahan_data_dinas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `layanan_pemerintahan_produk_unggulans`
--
ALTER TABLE `layanan_pemerintahan_produk_unggulans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `layanan_pemerintahan_testimoni_pemerintahs`
--
ALTER TABLE `layanan_pemerintahan_testimoni_pemerintahs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `layanan_perusahaans`
--
ALTER TABLE `layanan_perusahaans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `layanan_startup_produk_rintisans`
--
ALTER TABLE `layanan_startup_produk_rintisans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `layanan_startup_produk_rintisan_unggulans`
--
ALTER TABLE `layanan_startup_produk_rintisan_unggulans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `layanan_swasta_produk_lengkaps`
--
ALTER TABLE `layanan_swasta_produk_lengkaps`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

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
