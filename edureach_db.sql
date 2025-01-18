-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2025 at 03:10 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edureach_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `writer` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `image`, `writer`, `body`, `created_at`, `updated_at`) VALUES
(1, 'Tips Belajar Bahasa Inggris bagi Pemula', 'img/article/artimg-1.jpg', 'Regina Aulia', 'Bahasa inggris merupakan salah satu bahasa yang paling banyak digunakan di dunia saat ini. Menurut detik.com, saat ini ada lebih dari 1.4 miliar penutur bahasa Inggris di seluruh dunia. Bagi sebagian orang belajar bahasa baru merupakan salah satu cara untuk memanfaatkan waktu terbaik. Tapi, bagi sebagian orang yang lain, belajar bahasa baru terkadang menjadi kesulitan tersendiri. Apalagi belajar bahasa baru saat seseorang sudah dewasa, tantangan akan menjadi lebih sulit menantang. Lalu bagaimana cara-cara agar belajar bahasa Inggris bisa menjadi menyenangkan dan tidak kaku?', '2025-01-18 06:09:45', '2025-01-18 06:09:45'),
(2, 'Tantangan Indonesia dalam Era Digital', 'img/article/artimg-2.jpg', 'Jeffrey Wijaya', 'Indonesia menghadapi tantangan besar dalam memenuhi kebutuhan talenta digital yang terus meningkat. Berdasarkan laporan Kementerian Komunikasi dan Informatika (Kominfo), Indonesia membutuhkan 500.000 talenta digital per tahun untuk menutup kesenjangan sekitar 3 juta talenta digital pada 2030. Namun, banyak anak Indonesia masih menghadapi kesulitan dalam menguasai salah satu fondasi penting dari pendidikan STEM (Science, Technology, Engineering, Mathematics), yaitu matematika. Berdasarkan survei Programme for International Student Assessment (PISA) 2018, kemampuan matematika siswa Indonesia berada di peringkat 75 dari 81 negara, dengan 71 persen siswa tidak mencapai kompetensi minimum.', '2025-01-18 06:09:45', '2025-01-18 06:09:45'),
(3, 'Rahasia Cara Belajar Efektif untuk Kamu', 'img/article/artimg-3.jpg', 'Baldian Martin', 'Belajar yang efektif membutuhkan beberapa trik agar hasilnya maksimal. Pertama, tentukan tujuan belajar agar memiliki motivasi untuk mencapainya. Selanjutnya, pilih waktu yang tepat untuk belajar, meski singkat, asal konsisten. Belajar di tempat yang nyaman juga penting karena dapat mempengaruhi konsentrasi dan kemampuan otak dalam menyerap informasi. Jangan lupa untuk membuat rangkuman materi dengan kata-kata sendiri, ini membantu dalam mengulang dan memperdalam pemahaman. Selain itu, mengerjakan latihan soal juga merupakan cara yang efektif untuk menguji pemahaman terhadap materi yang dipelajari. Dengan latihan soal, kita bisa mengetahui poin-poin yang belum dikuasai dan perlu dipelajari kembali. Metode ini lebih baik dibandingkan belajar secara terburu-buru. Jadi, dengan menentukan tujuan, waktu, tempat yang tepat, serta melakukan rangkuman dan latihan soal, proses belajar akan lebih efektif dan menyenangkan.', '2025-01-18 06:09:45', '2025-01-18 06:09:45'),
(4, 'Belajar dengan Teknik Pomodoro', 'img/article/artimg-4.jpg', 'Tim Admin', 'Teknik Pomodoro adalah metode manajemen waktu yang dapat meningkatkan fokus dan efisiensi dalam belajar. Metode ini melibatkan sesi belajar yang terpisah dengan waktu istirahat yang teratur, biasanya dilakukan dalam interval 25 menit belajar dan 5 menit istirahat. Setiap interval 25 menit disebut satu \"Pomodoro\", dan setelah empat Pomodoro, istirahat lebih panjang sekitar 15-30 menit. Dengan cara ini, otak tetap segar dan terhindar dari kelelahan, sehingga kualitas belajar tetap terjaga. Penggunaan teknik Pomodoro juga membantu mengurangi prokrastinasi dan meningkatkan disiplin diri. Ketika waktu terbatas, kita cenderung lebih fokus dan memanfaatkan waktu dengan lebih efisien. Selain itu, dengan adanya istirahat yang teratur, kita dapat menghindari rasa stres dan merasa lebih termotivasi untuk melanjutkan belajar. Teknik ini sangat cocok bagi mereka yang mudah terganggu atau merasa kesulitan untuk mempertahankan fokus dalam waktu lama, menjadikannya solusi praktis untuk belajar dengan produktif.', '2025-01-18 06:09:45', '2025-01-18 06:09:45');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `teacher_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `description`, `teacher_id`, `created_at`, `updated_at`) VALUES
(1, 'Matematika: Aljabar', 'Menguasai konsep dasar aljabar, termasuk persamaan linear, kuadrat, dan sistem persamaan.', 1, '2025-01-18 06:12:12', '2025-01-18 06:12:12'),
(2, 'Fisika: Gerak dan Gaya', 'Mempelajari konsep gerak, gaya, dan hukum Newton.', 1, '2025-01-18 06:14:21', '2025-01-18 06:14:21'),
(3, 'Biologi: Sel', 'Mempelajari struktur dan fungsi sel sebagai unit dasar kehidupan.', 1, '2025-01-18 06:15:20', '2025-01-18 06:15:20'),
(4, 'Bahasa Indonesia: Menulis Kreatif', 'Mengembangkan kemampuan menulis cerita pendek, puisi, dan artikel.', 2, '2025-01-18 06:17:36', '2025-01-18 06:17:36'),
(5, 'Kimia: Struktur Atom', 'Mempelajari tentang partikel penyusun atom, model atom, dan sifat-sifat atom.', 3, '2025-01-18 06:19:18', '2025-01-18 06:25:07'),
(6, 'Kimia: Termokimia', 'Memahami persamaan termokimia dan jenis perubahan entalpi standar', 3, '2025-01-18 06:23:08', '2025-01-18 06:25:15'),
(7, 'Bahasa Indonesia: Teks Argumentasi', 'Memahami pengertian, ciri-Ciri, struktur, tujuan, dan kaidah kebahasaan dari teks argumentasi', 2, '2025-01-18 06:24:44', '2025-01-18 06:24:44'),
(8, 'Matematika: Eksponen', 'Memahami konsep dasar eksponen dan sifat-sifatnya', 1, '2025-01-18 06:26:54', '2025-01-18 06:26:54');

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donations`
--

INSERT INTO `donations` (`id`, `name`, `email`, `amount`, `message`, `created_at`, `updated_at`) VALUES
(2, 'Natalie Widjaja', 'natalie88@gmail.com', 250000.00, 'Semoga bermanfaat', '2025-01-18 07:08:21', '2025-01-18 07:08:21');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE `materials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`id`, `name`, `link`, `course_id`, `created_at`, `updated_at`) VALUES
(1, 'Pendahuluan Aljabar', 'https://www.ruangguru.com/blog/penyelesaian-bentuk-bentuk-aljabar', 1, '2025-01-18 06:12:53', '2025-01-18 06:12:53'),
(2, 'Sistem Persamaan Linear Dua Variabel', 'https://www.ruangguru.com/blog/matematika-kelas-8-cara-menyelesaikan-sistem-persamaan-linear-dua-variabel-spldv', 1, '2025-01-18 06:12:53', '2025-01-18 06:12:53'),
(3, 'Operasi Perpangkatan (Kuadrat)', 'https://www.ruangguru.com/blog/matematika-kelas-7-cara-menyelesaikan-operasi-perpangkatan-pada-bentuk-aljabar', 1, '2025-01-18 06:12:53', '2025-01-18 06:12:53'),
(4, 'Jenis-jenis Gerak', 'https://www.ruangguru.com/blog/macam-macam-gerak-benda-dan-contohnya', 2, '2025-01-18 06:14:21', '2025-01-18 06:14:21'),
(5, 'Hukum Newton', 'https://mediaindonesia.com/humaniora/430841/isi-hukum-newton-1-2-3-bunyi-rumus-dan-contoh-kasus', 2, '2025-01-18 06:14:21', '2025-01-18 06:14:21'),
(6, 'Penerapan Hukum Newton dalam Kehidupan Sehari-hari', 'https://tirto.id/contoh-penerapan-hukum-newton-1-2-3-dalam-kehidupan-sehari-hari-gjvB', 2, '2025-01-18 06:14:21', '2025-01-18 06:14:21'),
(7, 'Pendahuluan Sel', 'https://www.ruangguru.com/blog/mengenal-jenis-dan-struktur-sel-pada-makhluk-hidup', 3, '2025-01-18 06:15:20', '2025-01-18 06:15:20'),
(8, 'Pengenalan Cerpen', 'https://www.ruangguru.com/blog/apa-itu-cerpen', 4, '2025-01-18 06:17:36', '2025-01-18 06:17:36'),
(9, 'Membuat Puisi', 'https://www.ruangguru.com/blog/cara-membuat-puisi-yang-baik-dan-benar', 4, '2025-01-18 06:17:36', '2025-01-18 06:17:36'),
(10, 'Membuat Artikel', 'https://www.ruangguru.com/blog/pengertian-struktur-dan-jenis-artikel', 4, '2025-01-18 06:17:36', '2025-01-18 06:17:36'),
(14, 'Materi Teks Argumentasi', 'https://www.ruangguru.com/blog/teks-argumentasi', 7, '2025-01-18 06:24:44', '2025-01-18 06:24:44'),
(15, 'Mengenal Partikel dan Notasi Atom', 'https://www.ruangguru.com/blog/mengenal-partikel-dan-notasi-atom', 5, '2025-01-18 06:25:07', '2025-01-18 06:25:07'),
(16, 'Macam-macam Model Atom', 'https://www.ruangguru.com/blog/macam-macam-model-atom', 5, '2025-01-18 06:25:08', '2025-01-18 06:25:08'),
(17, 'Materi Termokimia', 'https://www.ruangguru.com/blog/persamaan-termokimia-dan-jenis-perubahan-entalpi-standar', 6, '2025-01-18 06:25:15', '2025-01-18 06:25:15'),
(18, 'Konsep Dasar Eksponen', 'https://www.ruangguru.com/blog/dasar-dasar-mengetahui-apa-itu-eksponen', 8, '2025-01-18 06:26:54', '2025-01-18 06:26:54'),
(19, 'Latihan Soal', 'https://www.defantri.com/2017/09/matematika-dasar-eksponen.html', 8, '2025-01-18 06:26:54', '2025-01-18 06:26:54');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_12_18_102558_add_role_to_users_table', 1),
(5, '2024_12_18_123547_create_courses_table', 1),
(6, '2024_12_18_123811_create_materials_table', 1),
(7, '2024_12_18_152559_create_threads_table', 1),
(8, '2024_12_18_152702_create_replies_table', 1),
(9, '2024_12_18_173205_create_articles_table', 1),
(10, '2025_01_17_105453_create_donations_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `message` text NOT NULL,
  `thread_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`id`, `message`, `thread_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Halo Bu.', 1, 4, '2025-01-18 06:35:06', '2025-01-18 06:35:06'),
(4, 'Salam kenal Bu.', 1, 5, '2025-01-18 06:45:31', '2025-01-18 06:45:31');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('U4GnbYJl0fOgJMqEaV2FGY5O7uZLq6M5ukHtyYTm', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/132.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNmhzd05iT0xucUwyQndUUE9VVjZNQTIydTY3eWNRNjhyYTFGOExZRSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1737209321);

-- --------------------------------------------------------

--
-- Table structure for table `threads`
--

CREATE TABLE `threads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `threads`
--

INSERT INTO `threads` (`id`, `title`, `message`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Salam Perkenalan', 'Halo semuanya,\r\n\r\nPerkenalkan, saya Andini, salah satu pengajar dalam platform ini. Saya berharap dapat membantu kalian untuk memahami materi dengan lebih baik, mendukung perjalanan belajar kalian, dan menjawab pertanyaan-pertanyaan kalian selama proses pembelajaran. Silahkan gunakan forum ini untuk bertanya seputar materi, mendiskusikan tugas, atau bahkan meminta saran untuk belajar lebih efektif.\r\n\r\nSemangat belajar dan jangan ragu untuk berdiskusi.\r\n\r\nSalam hangat,\r\nAndini', 1, '2025-01-18 06:34:18', '2025-01-18 06:34:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'learner',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Andini Crystal', 'andini125@gmail.com', 'teacher', NULL, '$2y$12$R9TFW7oScbmIB1f8OYGYRehZGL8AUHbk/zMEeN4yab0LEE3FBK1aO', NULL, '2025-01-18 06:11:41', '2025-01-18 06:11:41'),
(2, 'Budi Satrio', 'budisatrio123@gmail.com', 'teacher', NULL, '$2y$12$wrfYyvfY2RmMR8iFLs1oxuIVfbzSzSesujkMvHreVGaCDuS1fA0lO', NULL, '2025-01-18 06:16:26', '2025-01-18 06:16:26'),
(3, 'Andika Atmaja', 'andika100@gmail.com', 'teacher', NULL, '$2y$12$VdBtLV/uy/Kq3euJIPvH/eJjZQUt0Srabu8wE82HwNSTp11cAZtnO', NULL, '2025-01-18 06:18:17', '2025-01-18 06:18:17'),
(4, 'Charlie Wonka', 'charlie75@gmail.com', 'learner', NULL, '$2y$12$ZP/DHgybqEDgTqOUGxDSm.ZNiklhafMmEfI3mbVx03CksbVXuiH7m', NULL, '2025-01-18 06:28:02', '2025-01-18 06:28:02'),
(5, 'Peter Wijaya', 'peter100@gmail.com', 'learner', NULL, '$2y$12$y8gYnUz8xQ6.Bzg2lC8OSOXdTiHLuIvRdtQgil9WbOaE8N05UAwY.', NULL, '2025-01-18 06:28:51', '2025-01-18 06:28:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `courses_teacher_id_foreign` (`teacher_id`);

--
-- Indexes for table `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`id`),
  ADD KEY `materials_course_id_foreign` (`course_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `replies_thread_id_foreign` (`thread_id`),
  ADD KEY `replies_user_id_foreign` (`user_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `threads`
--
ALTER TABLE `threads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `threads_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `donations`
--
ALTER TABLE `donations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `materials`
--
ALTER TABLE `materials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `threads`
--
ALTER TABLE `threads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_teacher_id_foreign` FOREIGN KEY (`teacher_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `materials`
--
ALTER TABLE `materials`
  ADD CONSTRAINT `materials_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `replies`
--
ALTER TABLE `replies`
  ADD CONSTRAINT `replies_thread_id_foreign` FOREIGN KEY (`thread_id`) REFERENCES `threads` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `replies_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `threads`
--
ALTER TABLE `threads`
  ADD CONSTRAINT `threads_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
