-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 01 Des 2021 pada 18.40
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_listenme`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `lagu`
--

CREATE TABLE `lagu` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `artist` varchar(30) NOT NULL,
  `genre` varchar(30) NOT NULL,
  `album` varchar(30) NOT NULL,
  `file_lagu` varchar(50) NOT NULL,
  `file_album` varchar(50) NOT NULL,
  `poster` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `lagu`
--

INSERT INTO `lagu` (`id`, `title`, `artist`, `genre`, `album`, `file_lagu`, `file_album`, `poster`) VALUES
(1, 'What makes you beautiful', 'One Direction', 'Pop, RnB', 'asd', 'whatmakesyoubeautiful.mp3', 'asdasd', 'whatmakesyoubeautiful.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `playlist`
--

CREATE TABLE `playlist` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `artist` varchar(30) NOT NULL,
  `genre` varchar(30) NOT NULL,
  `album` varchar(30) NOT NULL,
  `file_lagu` varchar(50) NOT NULL,
  `file_album` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tracks`
--

CREATE TABLE `tracks` (
  `id` int(11) NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `artist` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `release` int(11) NOT NULL,
  `poster` text NOT NULL,
  `track_name` varchar(250) NOT NULL,
  `rating` float NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tracks`
--

INSERT INTO `tracks` (`id`, `uploader`, `artist`, `title`, `release`, `poster`, `track_name`, `rating`) VALUES
(15, 'Azmifxuzy', 'Avril Lavigne', 'Rock N Roll', 2147483647, '600.png', 'Avril Lavigne - Rock N Roll.mp3', 8),
(16, 'Azmifxuzy', 'Billie Eilish', 'All the good girls go to hell', 2147483647, '123.png', 'Billie Eilish - all the good girls go to hell (Lyrics).mp3', 7.5),
(31, 'Azmifxuzy', 'A$AP Rocky X Tyler the Creator', 'Potato Salad', 2147483647, 'maxresdefault.jpg', 'A$AP ROCKY X TYLER THE CREATOR - POTATO SALAD.mp3', 0),
(32, 'Azmifxuzy', '88rising', 'Midsummer Madness', 2147483647, 'mm.jpg', '88RISING - Midsummer Madness (Official Music Video).mp3', 0),
(33, 'Azmifxuzy', 'Dean Skyzx', 'Staywithme', 2147483647, 'dd.jpg', 'Dean Skyzx - staywithme.mp3', 0),
(34, 'Azmifxuzy', 'Alan Walker ft. Sabrina', 'On My Way', 2147483647, 'aw.jpg', 'Alan Walker Sabrina Carpenter  Farruko  - On My Way.mp3', 0),
(35, 'Azmifxuzy', 'Nella Kharisma', 'Ditinggal Rabi', 2147483647, 'asd.jpg', 'NELLA KHARISMA - DI TINGGAL RABI.mp3', 0),
(36, 'Azmifxuzy', 'Saykojigor', 'MELEMPEM', 2147483647, 'aaaa.jpg', 'saykojigor - MELEMPEM.mp3', 0),
(37, 'Azmifxuzy', 'Future James', 'Life Could Be a Dream', 2147483647, 'rsz_1_life_could_be_a_dream_notmm.jpg', 'Future James - Life Could Be A Dream.mp3', 0),
(38, 'Azmifxuzy', 'Stand Here Alone', 'Indah Tak Sempurna', 2147483647, 'download.jpg', 'STAND HERE ALONE - INDAH TAK SEMPURNA ( OFFICIAL MUSIC VIDEO ).mp3', 0),
(39, 'Azmifxuzy', 'Silent Please', 'Tersenyum dalam Tangis', 2147483647, 'zxc.jpg', 'Silent Please - Tersenyum dalam tangis.mp3', 0),
(40, 'dwiky', 'One Direction', 'What makes you beautiful', 2011, 'whatmakesyoubeautiful.jpeg', 'whatmakesyoubeautiful.mp3', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` int(11) NOT NULL,
  `image` text NOT NULL,
  `role` varchar(6) NOT NULL,
  `id_status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created`, `image`, `role`, `id_status`) VALUES
(4, 'Azmifxuzy', 'azmi@gmail.com', '123456', 2147483647, 'defaultfoto.png', 'admin', 1),
(6, 'dwiky', 'dwiky@gmail.com', '123', 2147483647, 'defaultfoto.png', 'member', 1),
(7, 'Yoga', 'bang@music.com', '123456', 2147483647, 'defaultfoto.png', 'member', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `lagu`
--
ALTER TABLE `lagu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tracks`
--
ALTER TABLE `tracks`
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
-- AUTO_INCREMENT untuk tabel `tracks`
--
ALTER TABLE `tracks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
