-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Feb 2021 pada 12.56
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si_gereja`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `baptis`
--

CREATE TABLE `baptis` (
  `baptis_id` int(11) NOT NULL,
  `sakramen` varchar(25) DEFAULT NULL,
  `kat_baptis` varchar(15) DEFAULT NULL,
  `nama_baptis` varchar(100) DEFAULT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') DEFAULT NULL,
  `tempat_lahir` varchar(100) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `tempat_baptis` varchar(100) DEFAULT NULL,
  `tanggal_baptis` date DEFAULT NULL,
  `lingkungan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `baptis`
--

INSERT INTO `baptis` (`baptis_id`, `sakramen`, `kat_baptis`, `nama_baptis`, `nama_lengkap`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `tempat_baptis`, `tanggal_baptis`, `lingkungan`) VALUES
(26, 'Pembaptisan', NULL, 'Olifanis', 'Olifanis Jaya', 'Perempuan', 'Ruteng', '1998-04-26', 'Greja ratu rosari', '2019-02-04', 'Caroline'),
(31, 'Pembaptisan', 'Balita', 'Vinsensia ', 'Vinsensia Saina', 'Laki-laki', 'Ruteng', '1968-04-04', 'Greja ratu rosari', '2017-01-06', 'Nikolas'),
(33, 'Pembaptisan', 'Balita', 'Romanus ', 'Romanus Abut', 'Laki-laki', 'Malang', '1970-05-04', 'Greja ratu rosari', '2018-01-01', 'Nikolas'),
(51, 'Pembaptisan', 'Dewasa', 'Jannz', 'Jannz Natali', 'Laki-laki', 'Malang', '2020-04-04', 'Greja Ratu Rosari', '2020-04-04', 'Caroline'),
(58, 'Pembaptisan', 'Dewasa', 'Yohanes', 'Yohanes Natal', 'Laki-laki', 'Malang', '2020-11-02', 'Greja Rosari', '2020-11-02', 'Caroline'),
(63, 'Pembaptisan', 'Remaja', 'Paul', 'Paul', 'Laki-laki', 'Narang', '2020-11-02', 'Narang', '2020-11-02', 'Elizabeth'),
(65, 'Pembabtisan', 'Dewasa', 'Yohanes', 'Rinto', 'Laki-laki', 'Iteng', '2020-11-02', 'Greja', '2020-11-01', 'Caroline'),
(68, 'Pembabtisan', 'Dewasa', 'Yohanes', 'Yohanes Natal', 'Laki-laki', 'Labuan Bajo', '2020-11-02', 'Gereja', '2020-11-09', 'Caroline'),
(70, 'Pembabtisan', 'Balita', 'Test', 'Test', 'Laki-laki', 'Malang', '2020-11-02', 'Malang', '2020-11-01', 'Caroline');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komuni`
--

CREATE TABLE `komuni` (
  `komuni_id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jen_kel` enum('Laki-laki','Perempuan') NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tpt_permandian` varchar(100) NOT NULL,
  `tgl_permandian` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `komuni`
--

INSERT INTO `komuni` (`komuni_id`, `nama`, `jen_kel`, `tgl_lahir`, `tpt_permandian`, `tgl_permandian`) VALUES
(11, 'Olianis Jaya', 'Perempuan', '1998-04-26', 'Kapela Stasi Lawi', '2020-01-01'),
(12, 'Ignasius Loyola', 'Laki-laki', '2004-07-31', 'Kapela Stasi Lawi', '2020-01-01'),
(13, 'Jannz Natali', 'Laki-laki', '1995-12-24', 'Kapela Stasi Lawi', '2020-01-01'),
(14, 'Pakomeus Dahlan', 'Laki-laki', '1995-04-24', 'Kapela Stasi Waning', '2020-01-01'),
(15, 'Caroline Natali', 'Perempuan', '2020-11-01', 'Greja Ratu Rosari', '2020-11-01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nikah`
--

CREATE TABLE `nikah` (
  `nikah_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `n_pasangan` varchar(100) NOT NULL,
  `a_pasangan` varchar(100) NOT NULL,
  `n_saksi` varchar(100) NOT NULL,
  `tgl_nikah` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `nikah`
--

INSERT INTO `nikah` (`nikah_id`, `user_id`, `n_pasangan`, `a_pasangan`, `n_saksi`, `tgl_nikah`) VALUES
(103, 101, 'Icha Cahyani', 'Cancar', 'Atanas', '2020-12-02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumuman`
--

CREATE TABLE `pengumuman` (
  `pengumuman_id` int(11) NOT NULL,
  `judul_pengumuman` varchar(150) DEFAULT NULL,
  `tanggal_pengumuman` date DEFAULT NULL,
  `isi_pengumuman` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengumuman`
--

INSERT INTO `pengumuman` (`pengumuman_id`, `judul_pengumuman`, `tanggal_pengumuman`, `isi_pengumuman`) VALUES
(24, 'Latar Belakang Masalah', '2020-12-08', '<blockquote>\r\n<p><strong><big>P</big></strong>elaksanaan pelayanan administrasi seperti penndataan umat, pendataan baptis, pendataan komuni pertama, serta pelaporan keuangan yang dilakukan selama ini&nbsp; pada Gereja Ratu Rosari &nbsp;melalui beberapa&nbsp; tahap seperti: Dari umat ke ketua lingkugan, setelah itu diserahkan ke sekertariat paroki. Kondisi ini tentunya membutuhkan waktu yang cukup lama baik dari sisi umat maupun pengurus lingkungan serta sekertariat paroki dalam melakukan proses pengimputan data. Adapun sistem pengolahan data saat ini masih terbatas pada penggunan <em>Microsoft Office Excel </em>dan <em>Microsoft Ofifice Word </em>dan belum memiliki <em>database </em>shingga pihak Gereja atau umat sangat sulit mengakses dan mengolah data dengan cepat. Selain itu ketika membutuhkan informasi maka setiap <em>file </em>yang ada harus diperiksa satu persatu untuk memperoleh data yang dibutuhkan. Proses pengolahan data seperti ini juga &nbsp;memiliki kendala dimana sulitnya mencari dan mengakses data.</p>\r\n</blockquote>\r\n'),
(25, 'Kolekte', '2020-12-27', '<p>Kolekte 25000</p>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sakramen`
--

CREATE TABLE `sakramen` (
  `sakramen_id` int(11) NOT NULL,
  `sakramen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nik_kk` int(1) NOT NULL,
  `name` varchar(128) NOT NULL,
  `jk` enum('Laki-laki','Perempuan') NOT NULL,
  `tpt_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat_kk` varchar(100) NOT NULL,
  `st_nikah` varchar(20) NOT NULL,
  `st_keluarga` varchar(20) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `nik`, `nik_kk`, `name`, `jk`, `tpt_lahir`, `tgl_lahir`, `alamat_kk`, `st_nikah`, `st_keluarga`, `pekerjaan`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(101, '222', 101, 'Admin', 'Laki-laki', 'Lawi', '1995-11-24', 'Caroline', 'Sudah', 'Suami', 'Swasta', 'jannz@gmail.com', 'admin2.jpg', '$2y$10$H7AVaLpxa39J0SLcWkdZUeEDi3khUe2359IazvaCc9EsPsThlErhK', 1, 1, 1606387081),
(134, '333', 101, 'Benyamin Hamiro', 'Laki-laki', 'Lawi', '2021-02-11', 'Caroline', 'Sudah', 'Suami', 'Swasta', '', '', '', 0, 0, 0),
(135, '555', 101, 'tes', 'Laki-laki', 'Lawi', '2010-07-08', 'Agatha', 'Sudah', 'Suami', 'Swasta', 'test@gmail.com', 'default.jpg', '$2y$10$nTGNxrCloZk/V0c91KRzjux2n1fUL.gN3vAiZfMfpfAg64r01z6WS', 2, 1, 1613037612),
(136, '333', 135, 'Viko', 'Laki-laki', 'Lawi', '2016-06-08', 'Agatha', 'Sudah', 'Anak', 'Swasta', '', '', '', 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(314, 1, 1),
(317, 1, 4),
(320, 2, 2),
(322, 1, 38),
(331, 1, 2),
(333, 1, 37);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'admin'),
(2, 'user'),
(3, 'menu'),
(4, 'administrasi'),
(37, 'laporan'),
(38, 'informasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Umat'),
(3, 'sekertariat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'Profil', 'user/index', 'fas fa-fw fa-user', 1),
(4, 3, 'Menu', 'menu', 'fas fa-fw fa-folder-plus', 1),
(5, 3, 'Sub menu', 'menu/submenu', 'fas fa-fw fa-tasks', 1),
(28, 1, 'User role', 'admin/role', 'fas fa-fw fa-tools', 1),
(30, 4, 'Baptis', 'administrasi/index', 'fa fa-fw fa-users', 1),
(36, 4, 'Komuni', 'administrasi/komuni', 'fa fa-fw fa-users', 1),
(38, 4, 'Nikah', 'administrasi/nikah', 'fa fa-fw fa-users', 1),
(44, 37, 'Laporan baptis', 'laporan/index', 'far fa-fw fa-folder', 1),
(45, 37, 'Laporan komuni', 'laporan/komuni', 'far fa-fw fa-folder', 1),
(46, 37, 'Laporan nikah', 'laporan/nikah', 'far fa-fw fa-folder', 1),
(47, 2, 'Daftar Nikah', 'user/registrasinikah', 'fa fa-fw fa-user-plus', 1),
(48, 38, 'Tambah Info', 'informasi/index', 'far fa-fw fa-bell', 1),
(50, 2, 'Info Paroki', 'user/info', 'fa fa-fw fa-bell', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `baptis`
--
ALTER TABLE `baptis`
  ADD PRIMARY KEY (`baptis_id`);

--
-- Indeks untuk tabel `komuni`
--
ALTER TABLE `komuni`
  ADD PRIMARY KEY (`komuni_id`);

--
-- Indeks untuk tabel `nikah`
--
ALTER TABLE `nikah`
  ADD PRIMARY KEY (`nikah_id`);

--
-- Indeks untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`pengumuman_id`);

--
-- Indeks untuk tabel `sakramen`
--
ALTER TABLE `sakramen`
  ADD PRIMARY KEY (`sakramen_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `baptis`
--
ALTER TABLE `baptis`
  MODIFY `baptis_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT untuk tabel `komuni`
--
ALTER TABLE `komuni`
  MODIFY `komuni_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `nikah`
--
ALTER TABLE `nikah`
  MODIFY `nikah_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `pengumuman_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `sakramen`
--
ALTER TABLE `sakramen`
  MODIFY `sakramen_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=336;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
