-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 09 Agu 2019 pada 18.57
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pta-mufti2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `tlp_admin` varchar(14) NOT NULL,
  `alamat_admin` text NOT NULL,
  `email_admin` varchar(50) NOT NULL,
  `password_admin` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `tlp_admin`, `alamat_admin`, `email_admin`, `password_admin`) VALUES
(1, 'mufti', '082137710507', 'Sleman', 'mufti@gmail.com', 'dd6a160efe63a6b04244b2bbad757977');

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `tgl_artikel` date NOT NULL,
  `judul_artikel` varchar(100) NOT NULL,
  `isi_artikel` text NOT NULL,
  `foto_artikel` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_konsultasi`
--

CREATE TABLE `detail_konsultasi` (
  `id_detail_konsultasi` int(11) NOT NULL,
  `id_konsultasi` int(11) NOT NULL,
  `id_gejala` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_konsultasi`
--

INSERT INTO `detail_konsultasi` (`id_detail_konsultasi`, `id_konsultasi`, `id_gejala`) VALUES
(1, 2, 1),
(2, 2, 2),
(3, 2, 3),
(4, 2, 4),
(5, 2, 5),
(6, 2, 6),
(7, 4, 1),
(8, 4, 2),
(9, 4, 3),
(10, 4, 4),
(11, 5, 1),
(12, 5, 2),
(13, 6, 7),
(14, 6, 8),
(15, 6, 9),
(16, 6, 10),
(17, 6, 11),
(18, 7, 1),
(19, 7, 2),
(20, 7, 3),
(21, 8, 7),
(22, 9, 16),
(23, 9, 17),
(24, 9, 18),
(25, 9, 19),
(26, 9, 20),
(27, 9, 21),
(28, 9, 22),
(29, 11, 16),
(30, 11, 17),
(31, 11, 18),
(32, 11, 19),
(33, 11, 20),
(34, 11, 21),
(35, 11, 22),
(36, 12, 16),
(37, 12, 17),
(38, 12, 18),
(39, 12, 19),
(40, 12, 20),
(41, 12, 21),
(42, 12, 22),
(43, 15, 16),
(44, 15, 17),
(45, 15, 18),
(46, 15, 19),
(47, 15, 20),
(48, 15, 21),
(49, 15, 22),
(50, 16, 7),
(51, 16, 8),
(52, 16, 9),
(53, 16, 10),
(54, 16, 11),
(55, 16, 12),
(56, 16, 13),
(57, 16, 14),
(58, 17, 16),
(59, 17, 17),
(60, 17, 18),
(61, 17, 19),
(62, 17, 20),
(63, 17, 21),
(64, 17, 22),
(65, 18, 1),
(66, 18, 2),
(67, 18, 3),
(68, 18, 4),
(69, 18, 5),
(70, 18, 6),
(71, 19, 23),
(72, 19, 24),
(73, 19, 25),
(74, 21, 7),
(75, 21, 8),
(76, 22, 7),
(77, 22, 8),
(78, 23, 1),
(79, 24, 1),
(80, 24, 2),
(81, 24, 3),
(82, 24, 4),
(83, 24, 5),
(84, 24, 6),
(85, 25, 7),
(86, 25, 8),
(87, 26, 16),
(88, 26, 17),
(89, 26, 18),
(90, 26, 19),
(91, 26, 20),
(92, 26, 21),
(93, 26, 22),
(94, 27, 16),
(95, 27, 17),
(96, 27, 18),
(97, 27, 19),
(98, 28, 23),
(99, 28, 24),
(100, 30, 23),
(101, 30, 24),
(102, 31, 7),
(103, 31, 8),
(104, 32, 1),
(105, 32, 2),
(106, 32, 3),
(107, 32, 4),
(108, 33, 7),
(109, 33, 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejala`
--

CREATE TABLE `gejala` (
  `id_gejala` int(11) NOT NULL,
  `nama_gejala` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gejala`
--

INSERT INTO `gejala` (`id_gejala`, `nama_gejala`) VALUES
(1, 'Bintil yang muncul seperti cacar air di salah satu sisi tubuh (kanan atau kiri).(G01)'),
(2, 'Bintil tersebut hanya setempat.(G02)'),
(3, 'Jaringan sekitar bintil menjadi bengkak.(G03)'),
(4, 'Bintil akan berkembang menjadi luka lepuh.(G04)'),
(5, 'Luka lepuh akan pecah dan menjadi luka berkerak, lalu menghilang secara perlahan.(G05)'),
(6, 'Bintil yang timbul di area mata dapat mengganggu penglihatan.(G06)'),
(7, 'Ruam merah yang bermula di wajah, lalu menyebar ke badan dan tungkai.(G07)'),
(8, 'Demam.(G08)'),
(9, 'Sakit kepala.(G09)'),
(10, 'Pilek dan hidung tersumbat.(G10)'),
(11, 'Tidak nafsu makan.(G11)'),
(12, 'Mata merah.(G012)'),
(13, 'Nyeri sendi, terutama pada remaja wanita.(G13)'),
(14, 'Muncul benjolan di sekitar telinga dan leher, akibat pembengkakan kelenjar getah bening(G14)'),
(16, 'Munculnya bintil-bintil pada permukaan kulit (G15)'),
(17, 'Umumnya bintil tersebut kecil (seukuran biji kacang hijau) (G16)'),
(18, 'Puncak bintil terlihat seperti cekungan, bahkan ada yang seperti memiliki titik (G17)'),
(19, 'Beberapa bintil ada yang terasa gatal (G18)'),
(20, 'Bintil mudah menyebar ke area kulit lainnya dan mudah menular pada orang lain (G19)'),
(21, 'Jika pecah, akan keluar cairan putih kekuningan. Cairan ini dapat menularkan molluscum contagiosum (G20)'),
(22, 'Kadang-kadang ketika akan sembuh, bintil bisa menyebabkan kulit menjadi kemerahan dan mengalami pembengkakan ringan meskipun tidak terasa menyakitkan (G21)'),
(23, 'Muncul di telapak kaki, kadang-kadang di tumit dan jari kaki (G22)'),
(24, 'Jenis ini dapat menyakitkan dan biasanya tumbuh ke dalam kulit karena adanya tekanan dari telapak kaki (G23)'),
(25, 'Ciri khasnya memiliki titik hitam di tengah dengan daerah putih disekitarnya yang mengeras (G24)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konsultasi`
--

CREATE TABLE `konsultasi` (
  `id_konsultasi` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `tgl_konsultasi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `konsultasi`
--

INSERT INTO `konsultasi` (`id_konsultasi`, `id_pasien`, `tgl_konsultasi`) VALUES
(2, 1, '0000-00-00'),
(3, 1, '0000-00-00'),
(4, 1, '0000-00-00'),
(5, 1, '0000-00-00'),
(6, 1, '0000-00-00'),
(7, 1, '0000-00-00'),
(8, 1, '0000-00-00'),
(9, 1, '0000-00-00'),
(10, 1, '0000-00-00'),
(11, 1, '0000-00-00'),
(12, 1, '0000-00-00'),
(13, 1, '0000-00-00'),
(14, 1, '0000-00-00'),
(15, 1, '0000-00-00'),
(16, 1, '0000-00-00'),
(17, 1, '0000-00-00'),
(18, 1, '0000-00-00'),
(19, 1, '0000-00-00'),
(20, 1, '0000-00-00'),
(21, 2, '2019-07-24'),
(22, 2, '2019-07-25'),
(23, 2, '2019-07-25'),
(24, 3, '2019-07-25'),
(25, 3, '2019-07-25'),
(26, 4, '2019-07-27'),
(27, 4, '2019-07-27'),
(28, 5, '2019-07-27'),
(29, 5, '2019-07-27'),
(30, 5, '2019-07-27'),
(31, 6, '2019-07-27'),
(32, 7, '2019-07-27'),
(33, 1, '2019-08-07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(11) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `alamat_pasien` text NOT NULL,
  `tlp_pasien` varchar(14) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin_pasien` varchar(11) NOT NULL,
  `email_pasien` varchar(50) NOT NULL,
  `password_pasien` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama_pasien`, `alamat_pasien`, `tlp_pasien`, `tanggal_lahir`, `jenis_kelamin_pasien`, `email_pasien`, `password_pasien`) VALUES
(1, 'bambang', 'jawa tengah', '085765654567', '1995-07-09', 'laki-laki', 'bambang@gmail.com', 'bambang'),
(2, 'Rudi', 'bantul', '0898765432', '2019-07-05', 'laki-laki', 'rudi@gmail.com', 'qwerty'),
(3, 'mufti', 'sleman', '082132765654', '2019-07-20', 'Laki - laki', 'mufti@gmail.com', 'qwerty'),
(4, 'Rusdi', 'sleman, Yogyakarta', '087765654543', '1994-02-04', 'Laki - laki', 'rusdi@gmail.com', 'qwerty'),
(5, 'ardi putra', 'nologaten,sleman', '08976567876', '1994-05-07', 'Laki - laki', 'ardi@gmail.com', 'qwerty'),
(6, 'bagus pramana', 'boyolali', '086876556543', '1992-04-23', 'Laki - laki', 'bagus@gmail.com', 'qwerty'),
(7, 'yudi hermawan', 'cilacap', '089765654543', '1998-08-01', 'Laki - laki', 'yudi@gmail.com', 'qwerty');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengetahuan`
--

CREATE TABLE `pengetahuan` (
  `id_pengetahuan` int(11) NOT NULL,
  `id_penyakit` int(11) NOT NULL,
  `id_gejala` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengetahuan`
--

INSERT INTO `pengetahuan` (`id_pengetahuan`, `id_penyakit`, `id_gejala`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 1, 6),
(7, 2, 7),
(8, 2, 8),
(9, 2, 9),
(10, 2, 10),
(11, 2, 11),
(12, 2, 12),
(13, 2, 13),
(14, 6, 16),
(15, 6, 17),
(16, 6, 18),
(17, 6, 19),
(18, 6, 20),
(19, 6, 21),
(20, 6, 22),
(21, 7, 23),
(22, 7, 24),
(23, 7, 25),
(24, 2, 14);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyakit`
--

CREATE TABLE `penyakit` (
  `id_penyakit` int(11) NOT NULL,
  `kd_penyakit` varchar(11) NOT NULL,
  `nama_penyakit` varchar(255) NOT NULL,
  `deskripsi_penyakit` text NOT NULL,
  `saran_penyakit` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penyakit`
--

INSERT INTO `penyakit` (`id_penyakit`, `kd_penyakit`, `nama_penyakit`, `deskripsi_penyakit`, `saran_penyakit`) VALUES
(1, 'P01', 'Herpes zozter', 'Herpes Zoster disebabkan oleh virus Varicella zoster. ', 'Pengobatan dengan obat antivirus perlu segera dilakukan. \r\nSemakin dini pengobatan herpes zoster dilakukan, semakin efektif hasilnya. \r\nContoh obat antivirus yang diberikan adalah famiciclovir, acyclovir, dan valacyclovir. \r\nDi samping mengonsumsi obat, terdapat beberapa upaya yang bisa dilakukan penderita herpes zoster untuk mengurangi gejalanya, \r\nyaitu mengenakan pakaian longgar dan berbahan lembut, seperti katun, untuk mencegah gesekan dan iritasi pada kulit,\r\n menutup bintil agar tetap bersih dan kering, mandi dengan air dingin atau menempelkan kompres dingin pada bintil. \r\nCara ini bisa dilakukan untuk meredakan rasa nyeri dan gatal.'),
(2, '', 'Rubella', 'Campak Jerman atau Rubella adalah infeksi virus yang ditandai dengan ruam merah pada kulit. \r\nMeskipun sama-sama menyebabkan ruam kemerahan pada kulit, rubella berbeda dengan campak. \r\nSelain disebabkan oleh virus yang berbeda, efek campak umumnya lebih parah dibandingkan rubella.\r\nWalaupun tergolong ringan, rubella bisa menulari ibu hamil, terutama pada trimester pertama kehamilan. \r\nKondisi tersebut dapat menyebabkan keguguran, atau jika kehamilan terus berlangsung, bayi dapat terlahir tuli, menderita katarak, atau mengalami kelainan jantung.\r\nOleh karena itu, penting untuk memeriksa kekebalan tubuh terhadap rubella pada saat merencanakan kehamilan.\r\n-penyebab :\r\nRubella disebabkan oleh infeksi virus yang menular dari satu orang ke orang lain. \r\nSeseorang bisa terserang rubella ketika menghirup percikan air liur yang dikeluarkan penderita saat batuk atau bersin. \r\nKontak langsung dengan benda yang terkontaminasi air liur penderita juga memungkinkan seseorang mengalami rubella.\r\nSelain melalui beberapa cara di atas, virus rubella juga dapat menular dari ibu hamil ke janin yang dikandungnya, melalui aliran darah.', 'Segera periksakan diri ke dokter jika muncul gejala-gejala di atas, terlebih bila sedang hamil.\r\nMeskipun jarang terjadi, rubella dapat memicu infeksi telinga dan pembengkakan otak. \r\nOleh karena itu, segera ke dokter bila muncul gejala lain berupa sakit kepala yang terus menerus, nyeri di telinga, dan kaku pada leher.\r\nPengobatan rubella cukup dilakukan di rumah, karena gejalanya tergolong ringan. \r\nDokter akan meresepkan obat paracetamol guna meringankan nyeri dan demam, serta menyarankan pasien untuk banyak beristirahat di rumah, agar virus tidak menyebar ke orang lain.\r\nPada ibu hamil yang menderita rubella, dokter akan meresepkan obat antivirus. \r\nMeski dapat mengurangi gejala, antivirus tidak mencegah kemungkinan bayi menderita sindom rubella kongenital, yaitu suatu kondisi yang menyebabkan bayi terlahir dengan kelainan.\r\n'),
(6, '', 'Moluskum Kontagiosum', 'Moluskum kontagiosum adalah kondisi yang umum. \r\nPenyakit ini biasa terjadi pada anak-anak, terutama anak laki-laki, dan orang dewasa muda. \r\nPada orang dewasa, moluskum kontagiosum sebagian besar terjadi karena penularan melalui kontak seksual. \r\nKasus-kasus yang lainnya disebabkan oleh sistem kekebalan tubuh yang lemah atau penyakit menular lainnya.', 'Selalu periksakan diri Anda ke dokter untuk memantau perkembangan gejala dan kesehatan Anda.\r\nJagalah daerah yang terinfeksi agar tetap bersih dan tertutup dengan pakaian untuk menghindari penyebaran virus.\r\nJangan berbagi handuk tangan dengan orang lain sampai benjolan benar-benar hilang.\r\nJangan menggaruk benjolan pada kulit dan kemudian menyentuh bagian lain dari tubuh Anda. Anda dapat menyebarkan virus jika melakukan hal ini dan mungkin dapat terkena infeksi bakteri lain.\r\nJangan gunakan kolam renang umum, sauna, dan kamar mandi sampai benjolan hilang, untuk menghindari penularan infeksi kepada orang lain.\r\nPakai kondom saat berhubungan seksual untuk menghindari penularan.\r\nCuci pakaian dengan klorin (pemutih) atau air panas untuk membunuh virus.'),
(7, '', 'Veruka Vulgaris / Kutil Biasa', 'veruka vulgaris/kutil biasa adalah pertumbuhan kulit yang disebabkan oleh jenis virus yang disebut human papillomavirus (HPV). \r\nHPV menginfeksi lapisan atas kulit, biasanya memasuki tubuh di daerah kulit yang rusak. \r\nVirus menyebabkan lapisan atas kulit untuk tumbuh pesat, membentuk kutil. \r\nKutil dapat tumbuh di mana saja pada tubuh, dan ada berbagai jenis. \r\nMisalnya, kutil umum tumbuh paling sering di tangan. \r\nKutil mudah menyebar melalui kontak langsung dengan virus human papillomavirus. \r\nAnda dapat menginfeksi diri dengan menyentuh kutil dan kemudian menyentuh bagian lain dari tubuh Anda. \r\nAnda dapat menginfeksi orang lain dengan berbagi handuk, pisau cukur, atau barang-barang pribadi lainnya. \r\nSetelah kontak dengan HPV, kemudian akan tumbuh dengan lambat di bawah kulit sebelum kutil tampak. \r\nTidak selalu ketika Anda kontak dengan HPV, Anda akan terkena kutil. \r\nNamun memang ada beberapa orang yang cenderung lebih mungkin untuk terkena kutil daripada yang lain.\r\n- penyebab :\r\nVirus HPV menyebabkan pertumbuhan keratin yang berlebihan dan cepat, yang merupakan protein keras pada lapisan atas kulit. \r\nHPV yang berbeda menyebabkan kutil yang berbeda. \r\nVirus penyebab kutil dapat ditularkan melalui kontak kulit ke kulit, dan melalui kontak dengan handuk atau sepatu.', 'Asam salisilat, merupakan asam yang melunakkan permukaan kulit dan menyebabkan kulit meluruh dan mudah dirontokkan. \r\nIni adalah pengobatan paling umum untuk kutil. \r\nHanya saja pengobatan ini membutuhkan waktu berminggu-minggu hingga hitungan bulan.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rule`
--

CREATE TABLE `rule` (
  `id_rule` int(11) NOT NULL,
  `id_gejala_parent` int(11) NOT NULL,
  `id_gejala_pertanyaan` int(11) NOT NULL,
  `id_gejala_ya` int(11) NOT NULL,
  `id_gejala_tidak` int(11) NOT NULL,
  `id_penyakit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rule`
--

INSERT INTO `rule` (`id_rule`, `id_gejala_parent`, `id_gejala_pertanyaan`, `id_gejala_ya`, `id_gejala_tidak`, `id_penyakit`) VALUES
(1, 0, 1, 2, 7, 0),
(2, 1, 2, 3, 0, 0),
(3, 2, 3, 4, 0, 0),
(4, 3, 4, 5, 0, 0),
(5, 4, 5, 6, 0, 0),
(6, 5, 6, 0, 0, 1),
(7, 1, 7, 8, 16, 0),
(8, 7, 8, 9, 0, 0),
(9, 8, 9, 10, 0, 0),
(10, 9, 10, 11, 0, 0),
(11, 10, 11, 12, 0, 0),
(12, 11, 12, 13, 0, 0),
(13, 12, 13, 14, 0, 0),
(14, 13, 14, 0, 0, 2),
(15, 7, 16, 17, 23, 0),
(16, 16, 17, 18, 0, 0),
(17, 17, 18, 19, 0, 0),
(18, 18, 19, 20, 0, 0),
(19, 19, 20, 21, 0, 0),
(20, 20, 21, 22, 0, 0),
(21, 21, 22, 0, 0, 6),
(22, 16, 23, 24, 0, 0),
(23, 23, 24, 25, 0, 0),
(24, 24, 25, 0, 0, 7),
(25, 9, 5, 16, 2, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `detail_konsultasi`
--
ALTER TABLE `detail_konsultasi`
  ADD PRIMARY KEY (`id_detail_konsultasi`),
  ADD KEY `id_konsultasi` (`id_konsultasi`),
  ADD KEY `id_gejala` (`id_gejala`);

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id_gejala`);

--
-- Indexes for table `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD PRIMARY KEY (`id_konsultasi`),
  ADD KEY `id_pasien` (`id_pasien`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `pengetahuan`
--
ALTER TABLE `pengetahuan`
  ADD PRIMARY KEY (`id_pengetahuan`),
  ADD KEY `id_penyakit` (`id_penyakit`),
  ADD KEY `id_gejala` (`id_gejala`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id_penyakit`);

--
-- Indexes for table `rule`
--
ALTER TABLE `rule`
  ADD PRIMARY KEY (`id_rule`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `detail_konsultasi`
--
ALTER TABLE `detail_konsultasi`
  MODIFY `id_detail_konsultasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;
--
-- AUTO_INCREMENT for table `gejala`
--
ALTER TABLE `gejala`
  MODIFY `id_gejala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `konsultasi`
--
ALTER TABLE `konsultasi`
  MODIFY `id_konsultasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `pengetahuan`
--
ALTER TABLE `pengetahuan`
  MODIFY `id_pengetahuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `id_penyakit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `rule`
--
ALTER TABLE `rule`
  MODIFY `id_rule` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_konsultasi`
--
ALTER TABLE `detail_konsultasi`
  ADD CONSTRAINT `detail_konsultasi_ibfk_1` FOREIGN KEY (`id_konsultasi`) REFERENCES `konsultasi` (`id_konsultasi`) ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_konsultasi_ibfk_2` FOREIGN KEY (`id_gejala`) REFERENCES `gejala` (`id_gejala`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD CONSTRAINT `konsultasi_ibfk_1` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pengetahuan`
--
ALTER TABLE `pengetahuan`
  ADD CONSTRAINT `pengetahuan_ibfk_1` FOREIGN KEY (`id_penyakit`) REFERENCES `penyakit` (`id_penyakit`) ON UPDATE CASCADE,
  ADD CONSTRAINT `pengetahuan_ibfk_2` FOREIGN KEY (`id_gejala`) REFERENCES `gejala` (`id_gejala`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
