-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Nov 2024 pada 11.47
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edufun`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `desc` text NOT NULL,
  `date` date NOT NULL,
  `cat_id` bigint(20) UNSIGNED NOT NULL,
  `au_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `articles`
--

INSERT INTO `articles` (`id`, `title`, `desc`, `date`, `cat_id`, `au_id`, `created_at`, `updated_at`) VALUES
(1, 'Machine Learning', 'Sed sit quam error est. Qui fuga eos velit qui reprehenderit odio et. Placeat omnis eum dolore quia voluptas dolorem. Repellendus quasi suscipit voluptatem ratione eos repellat aliquid voluptas. Qui aut dolorum impedit amet sequi explicabo. Qui voluptatem ullam sint ad dolores.\n\nSit nihil est aut aperiam repellat. Quos sed autem eligendi aut aperiam quasi aut. Inventore ea enim ea enim dolores similique. Veniam necessitatibus aut deserunt facilis voluptas qui. Soluta provident nesciunt dolorem delectus explicabo molestiae rem temporibus. Deleniti et sed recusandae error et quasi voluptas. Omnis magnam enim architecto. Labore libero qui porro aut molestiae nulla modi. Magnam cupiditate in assumenda beatae consequatur dicta.', '2000-04-23', 1, 1, '2024-11-03 01:41:43', '2024-11-03 01:41:43'),
(2, 'Deep Learning', 'Omnis et a quae mollitia ut. Non repellat aliquam ea dolor. Eos cum totam nihil et. Quis in eos distinctio officiis est. Porro voluptatibus autem libero aspernatur rerum sapiente fugit. Est aut aut eum quas ea provident. Inventore est nemo laudantium fugit at aperiam voluptatem exercitationem.\n\nConsequatur cupiditate sed qui ut. Dignissimos fugiat dolor omnis aspernatur earum voluptate delectus necessitatibus. Quia id expedita omnis id omnis dolores. Maxime est et labore vel. Dolorem id doloremque harum recusandae repellendus nesciunt dicta. Nihil assumenda commodi saepe eius eveniet a est. Earum architecto facere laborum dolorem et minus dolor. Minus id veniam blanditiis ut consectetur voluptas.', '1993-02-12', 1, 1, '2024-11-03 01:41:43', '2024-11-03 01:41:43'),
(3, 'Natural Language Processing', 'Et non ipsum earum architecto delectus ea et. Et quos vel dolor ut dolores voluptatibus quae. Numquam et aut voluptatem vitae qui ut consectetur similique. Nobis est possimus nihil corporis.\n\nAutem tempore atque totam blanditiis nam. Dignissimos enim fugiat aut. Delectus asperiores error doloremque incidunt omnis sunt molestiae. Animi voluptatem modi aliquam totam optio expedita. Rerum delectus et distinctio sit. Fugiat placeat repellat debitis voluptatum. Rerum neque aliquam omnis minima sunt est. Qui corporis fuga ipsa facere.', '1993-01-17', 1, 1, '2024-11-03 01:41:43', '2024-11-03 01:41:43'),
(4, 'Software Security', 'Deleniti earum esse ut rerum itaque est. Nostrum ea aliquid voluptatem molestiae ea. Aut quis aut tempore ut eum minus temporibus. Molestiae quia tenetur maxime optio vel enim tenetur. Quam voluptates ipsam quia facere ullam.\n\nIpsum odio ut deleniti omnis. Sed aut labore omnis culpa sed est. Est aut ut corrupti placeat eius minima. Et accusamus eum tempora vitae nostrum sit culpa. Sint et magnam nisi labore molestiae omnis.', '1989-03-08', 2, 2, '2024-11-03 01:41:43', '2024-11-03 01:41:43'),
(5, 'Network Administration', 'Rerum molestiae et earum aliquid tenetur voluptas. Temporibus ducimus et sed voluptatem. Nam perspiciatis in reprehenderit laudantium eos quo in. Impedit aperiam et quae. Iusto consequatur sunt sint et non.\n\nTempora non quam qui. Facilis vel fugit error qui et voluptas voluptates occaecati. Quam autem vel numquam quasi. Repellendus blanditiis non eos. Illum aliquam ut quis sapiente est. Possimus ipsum commodi vel modi placeat sed officia. Corporis error harum harum blanditiis tempore recusandae qui. Eum sed sunt quia. Dolorum sapiente doloremque blanditiis tempore magnam ut. Occaecati est aut nesciunt dolores reprehenderit non aut omnis. Beatae pariatur provident nihil eum dolores omnis veniam. Similique non est at.', '1974-07-04', 2, 2, '2024-11-03 01:41:43', '2024-11-03 01:41:43'),
(6, 'Popular Network Technology', 'Quo rem debitis impedit ipsa ex natus. Nihil id laudantium vel ut et delectus neque. Inventore similique sequi minima ab. Et laborum voluptatem velit voluptate. Aut ratione qui expedita dolorem voluptas debitis repellendus harum. Itaque facilis quidem tempora qui fugit vero voluptas. Modi enim eveniet ut ut voluptates blanditiis. Ea iure et harum iusto.\n\nPerspiciatis voluptatibus vero dolorem quas aspernatur perspiciatis atque. Quis saepe minima dolor voluptatem est sunt. Nihil porro a ea eum quasi expedita. Corporis voluptas facilis voluptatem fuga voluptatum odio officiis. Alias natus eum omnis et necessitatibus repellendus.', '2005-01-18', 2, 2, '2024-11-03 01:41:43', '2024-11-03 01:41:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `authors`
--

CREATE TABLE `authors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `specialist` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `authors`
--

INSERT INTO `authors` (`id`, `name`, `specialist`, `created_at`, `updated_at`) VALUES
(1, 'Fanes Liu, S.Kom.', 'Data Science Specialist', '2024-11-03 01:41:42', '2024-11-03 01:41:42'),
(2, 'Ming Ming, Dr. M.Kom.', 'Network Security Specialist', '2024-11-03 01:41:42', '2024-11-03 01:41:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Data Science', '2024-11-03 01:41:42', '2024-11-03 01:41:42'),
(2, 'Network Security', '2024-11-03 01:41:42', '2024-11-03 01:41:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `jobs`
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
-- Struktur dari tabel `job_batches`
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
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_11_02_103509_create_categories_table', 1),
(5, '2024_11_02_103545_create_authors_table', 1),
(6, '2024_11_02_103623_create_articles_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
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
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('42MHQmgOzsA4Tpy8k9cDcCskjieHyb9unGYuvfZa', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36 Edg/130.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVEh5a3FSU08xSlBZZE5YM203Y2RreUFxcldzbU84Z0dPSjB2ZkN5WCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wb3B1bGFyIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1730630549);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_cat_id_foreign` (`cat_id`),
  ADD KEY `articles_au_id_foreign` (`au_id`);

--
-- Indeks untuk tabel `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeks untuk tabel `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT untuk tabel `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `authors`
--
ALTER TABLE `authors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_au_id_foreign` FOREIGN KEY (`au_id`) REFERENCES `authors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `articles_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
