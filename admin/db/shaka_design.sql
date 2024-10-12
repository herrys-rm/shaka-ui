-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 18 Sep 2024 pada 01.59
-- Versi Server: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saka_design`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `logo`
--

CREATE TABLE `logo` (
  `id` int(11) NOT NULL,
  `logo_name` varchar(255) NOT NULL,
  `logo_image_path` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `logo`
--

INSERT INTO `logo` (`id`, `logo_name`, `logo_image_path`, `created_at`) VALUES
(6, 'oky', 'logo.png', '2024-09-13 22:45:15'),
(7, 'logo-', 'Simple-Emblem.png', '2024-09-13 22:49:35'),
(8, 'logo-', 'logo.png', '2024-09-13 22:49:51'),
(9, 'bbbbbbb', 'Instagram-Logo.png', '2024-09-13 22:54:31'),
(10, 'twitter', 'twitter-logo-png-transparent-background-1024x1024.png', '2024-09-13 22:55:48'),
(11, '', 'logo.png', '2024-09-13 23:09:19'),
(12, '', 'twitter-logo-png-transparent-background-1024x1024.png', '2024-09-13 23:10:06'),
(13, '', 'logo.png', '2024-09-15 22:26:59'),
(14, '', 'twitter-logo-png-transparent-background-1024x1024.png', '2024-09-15 22:39:09'),
(15, '', 'logo.png', '2024-09-15 22:42:05'),
(16, '', 'twitter-logo-png-transparent-background-1024x1024.png', '2024-09-15 22:42:49'),
(17, '', 'logo.png', '2024-09-15 22:43:08'),
(18, '', 'twitter-logo-png-transparent-background-1024x1024.png', '2024-09-15 22:44:19'),
(19, '', 'logo.png', '2024-09-15 22:44:40'),
(20, '', 'twitter-logo-png-transparent-background-1024x1024.png', '2024-09-15 22:45:04'),
(21, '', 'logo.png', '2024-09-15 22:45:42'),
(22, '', 'twitter-logo-png-transparent-background-1024x1024.png', '2024-09-15 22:46:31'),
(23, '', 'logo.png', '2024-09-15 22:46:56'),
(24, '', 'twitter-logo-png-transparent-background-1024x1024.png', '2024-09-15 22:48:04'),
(25, '', 'twitter-logo-png-transparent-background-1024x1024.png', '2024-09-15 22:48:42'),
(26, '', 'logo.png', '2024-09-15 22:49:05'),
(27, '', 'twitter-logo-png-transparent-background-1024x1024.png', '2024-09-15 22:49:28'),
(28, '', 'logo.png', '2024-09-15 22:49:49'),
(29, '', 'twitter-logo-png-transparent-background-1024x1024.png', '2024-09-15 22:50:13'),
(30, '', 'logo.png', '2024-09-15 23:16:03'),
(31, '', 'twitter-logo-png-transparent-background-1024x1024.png', '2024-09-15 23:16:19'),
(32, '', 'logo.png', '2024-09-15 23:16:43'),
(33, '', 'twitter-logo-png-transparent-background-1024x1024.png', '2024-09-15 23:16:54'),
(34, '', 'logo.png', '2024-09-16 12:17:17'),
(35, '', 'twitter-logo-png-transparent-background-1024x1024.png', '2024-09-16 12:33:38'),
(36, '', 'logo.png', '2024-09-16 12:33:51'),
(37, '', 'twitter-logo-png-transparent-background-1024x1024.png', '2024-09-16 12:34:23'),
(38, '', 'logo.png', '2024-09-16 12:34:41'),
(39, '', 'twitter-logo-png-transparent-background-1024x1024.png', '2024-09-16 12:35:47'),
(40, '', 'Syaka.png', '2024-09-16 22:50:26'),
(41, '', 'logo.png', '2024-09-17 12:19:03'),
(42, '', 'logo.png', '2024-09-17 23:15:17'),
(43, '', 'Syaka.png', '2024-09-17 23:19:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_title` varchar(100) NOT NULL,
  `img_desc` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `portfolio`
--

INSERT INTO `portfolio` (`id`, `image`, `image_title`, `img_desc`, `created_at`) VALUES
(18, 'masonry-portfolio-3.jpg', 'Flower', '', '2024-09-17 23:45:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `title`
--

CREATE TABLE `title` (
  `id` int(11) NOT NULL,
  `title_name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `title`
--

INSERT INTO `title` (`id`, `title_name`, `created_at`) VALUES
(1, 'Saka Kontruksi', '2024-09-16 13:21:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `username` varchar(33) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `fullname`, `username`, `password`) VALUES
(1, 'administrator', 'admin', '$2y$10$kqWyun0px42U.yfOsWSZXOl3H1AbAIBmKn0fWPCzC2.PrkIjCYGGC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `title`
--
ALTER TABLE `title`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `title`
--
ALTER TABLE `title`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
