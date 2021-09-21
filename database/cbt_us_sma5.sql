-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Sep 2020 pada 17.22
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cbt_us_sma5`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(3) NOT NULL,
  `nama_admin` varchar(25) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` text NOT NULL,
  `level` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama_admin`, `username`, `password`, `level`) VALUES
(6, 'Riza Yusfika', '11', '11', 'Admin'),
(7, 'Unknown', '22', '22', 'Master');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(11) NOT NULL,
  `id_ptk` varchar(5) NOT NULL,
  `id_mapel` varchar(5) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` text NOT NULL,
  `akses_sistem` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id_guru`, `id_ptk`, `id_mapel`, `username`, `password`, `akses_sistem`) VALUES
(20, '1', '5', '33', '33', 'Ya'),
(21, '15', '11', '200426044754', '200426044754', 'Ya'),
(22, '24', '10', '200912094456', '200912094456', 'Ya'),
(23, '13', '5', '', '', ''),
(24, '10', '12', '200917113854', '200917113854', 'Ya'),
(25, '11', '15', '', '', ''),
(26, '12', '5', '', '', ''),
(27, '16', '9', '', '', ''),
(28, '17', '10', '', '', ''),
(29, '21', '9', '200921042821', '200921042821', 'Ya'),
(30, '9', '5', '', '', ''),
(31, '8', '9', '', '', ''),
(32, '7', '13', '', '', ''),
(33, '6', '12', '', '', ''),
(34, '5', '9', '', '', ''),
(35, '46', '8', '', '', ''),
(36, '45', '7', '', '', ''),
(37, '2', '14', '', '', ''),
(38, '37', '10', '', '', ''),
(39, '20', '5', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jawaban`
--

CREATE TABLE `jawaban` (
  `idj` int(11) NOT NULL,
  `id_soal` varchar(5) NOT NULL,
  `id_paket` varchar(5) NOT NULL,
  `jawaban` text NOT NULL,
  `pilihan` varchar(4) NOT NULL,
  `poin` varchar(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jawaban`
--

INSERT INTO `jawaban` (`idj`, `id_soal`, `id_paket`, `jawaban`, `pilihan`, `poin`) VALUES
(3621, '1', '78', 'Word', 'A', '0'),
(3622, '1', '78', 'Power Poin', 'B', '0'),
(3623, '1', '78', 'Excel', 'C', '5'),
(3624, '1', '78', 'Access', 'D', '0'),
(3625, '1', '78', 'MySQL', 'E', '0'),
(3626, '2', '78', 'Pointer', 'A', '0'),
(3627, '2', '78', 'Range', 'B', '0'),
(3628, '2', '78', 'Cell', 'C', '5'),
(3629, '2', '78', 'Mouse', 'D', '0'),
(3630, '2', '78', 'Row', 'E', '0'),
(3631, '3', '78', 'XFD', 'A', '5'),
(3632, '3', '78', 'A', 'B', '0'),
(3633, '3', '78', 'J', 'C', '0'),
(3634, '3', '78', 'LL', 'D', '0'),
(3635, '3', '78', 'MN', 'E', '0'),
(3636, '4', '78', 'Menuju pada sel tertentu', 'A', '0'),
(3637, '4', '78', 'Memindahkan pointer satu baris keatas', 'B', '0'),
(3638, '4', '78', 'Memindahkan pointer satu baris kebawah', 'C', '0'),
(3639, '4', '78', 'Menuju ke akhir sel', 'D', '0'),
(3640, '4', '78', 'Menuju ke awal sel', 'E', '5'),
(3641, '5', '78', 'Mouse', 'A', '5'),
(3642, '5', '78', 'Kursor ', 'B', '0'),
(3643, '5', '78', 'Pointer', 'C', '0'),
(3644, '5', '78', 'Range', 'D', '0'),
(3645, '5', '78', 'Kolom', 'E', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(3) NOT NULL,
  `nama_kelas` varchar(25) NOT NULL,
  `tingkat` varchar(2) NOT NULL,
  `id_ptk` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `tingkat`, `id_ptk`) VALUES
(15, 'XII MIPA 1', '12', '15'),
(14, 'XII IS 3', '12', '21'),
(13, 'XII IS 2', '12', '13'),
(12, 'XII IS 1', '12', '8'),
(11, 'XI MIPA 3', '11', '11'),
(10, 'XI MIPA 2', '11', '10'),
(9, 'XI MIPA 1', '11', '9'),
(8, 'XI IIS 3', '11', '12'),
(7, 'XI IIS 2', '11', '7'),
(6, 'XI IIS 1', '11', '6'),
(1, 'X IIS 1', '10', '1'),
(2, 'X IIS 2', '10', '2'),
(3, 'X IIS 3', '10', '3'),
(4, 'X MIPA 1', '10', '4'),
(5, 'X MIPA 2', '10', '5'),
(16, 'XII MIPA 2', '12', '16'),
(17, 'XII MIPA 3', '12', '17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapel`
--

CREATE TABLE `mapel` (
  `id_mapel` int(4) NOT NULL,
  `nama_mapel` text NOT NULL,
  `kkm` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mapel`
--

INSERT INTO `mapel` (`id_mapel`, `nama_mapel`, `kkm`) VALUES
(5, 'Matematika', 100),
(7, 'Kimia', 0),
(8, 'Ekonomi', 99),
(9, 'Teknologi Informasi Dan Komunikasi', 0),
(10, 'Sosiologi', 0),
(11, 'IPS', 0),
(12, 'IPA', 0),
(13, 'Bahasa Inggris', 20),
(14, 'Bahasa Jepang', 100),
(15, 'Bahasa Pemograman', 50);

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket`
--

CREATE TABLE `paket` (
  `id_paket` int(3) NOT NULL,
  `nama_paket` varchar(50) NOT NULL,
  `boleh_akses` varchar(10) NOT NULL,
  `jenis_ujian` varchar(10) NOT NULL,
  `id_mapel` varchar(5) NOT NULL,
  `tingkat_kelas` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `paket`
--

INSERT INTO `paket` (`id_paket`, `nama_paket`, `boleh_akses`, `jenis_ujian`, `id_mapel`, `tingkat_kelas`) VALUES
(78, 'UTS Teknologi Informasi Dan Komunikasi Kelas 12', 'Ya', 'UTS', '9', '12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembagian_kelas`
--

CREATE TABLE `pembagian_kelas` (
  `id_guru` varchar(5) NOT NULL,
  `id_kelas` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembagian_kelas`
--

INSERT INTO `pembagian_kelas` (`id_guru`, `id_kelas`) VALUES
('4', '1'),
('5', '1'),
('5', '3'),
('12', '1'),
('12', '3'),
('12', '4'),
('12', '5'),
('12', '6');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembagian_mapel`
--

CREATE TABLE `pembagian_mapel` (
  `id_kelas` varchar(5) NOT NULL,
  `id_mapel` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembagian_mapel`
--

INSERT INTO `pembagian_mapel` (`id_kelas`, `id_mapel`) VALUES
('4', '5'),
('4', '7'),
('4', '8'),
('4', '10'),
('4', '12'),
('4', '13'),
('4', '14'),
('3', '5'),
('3', '7'),
('3', '11'),
('3', '12'),
('3', '14'),
('5', '9'),
('5', '10'),
('5', '12'),
('5', '13'),
('7', '5'),
('7', '7'),
('7', '8'),
('7', '9'),
('7', '10'),
('7', '11'),
('7', '12'),
('7', '13'),
('7', '14'),
('1', '5'),
('1', '7'),
('1', '11'),
('1', '13'),
('1', '14'),
('1', '15'),
('14', '5'),
('14', '8'),
('14', '9'),
('14', '11'),
('14', '12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ptk`
--

CREATE TABLE `ptk` (
  `id_ptk` varchar(23) NOT NULL,
  `nama_ptk` varchar(35) NOT NULL,
  `nuptk` varchar(18) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `tmpl` varchar(25) NOT NULL,
  `tgll` varchar(25) NOT NULL,
  `nip` varchar(25) NOT NULL,
  `status_pegawai` varchar(20) NOT NULL,
  `jenis_ptk` varchar(25) NOT NULL,
  `gelar_depan` varchar(15) NOT NULL,
  `gelar_belakang` varchar(15) NOT NULL,
  `jenjang_pendidikan` varchar(15) NOT NULL,
  `jurusan` varchar(25) NOT NULL,
  `sertifikasi` varchar(25) NOT NULL,
  `tmt_kerja` varchar(16) NOT NULL,
  `tugas_tambahan` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ptk`
--

INSERT INTO `ptk` (`id_ptk`, `nama_ptk`, `nuptk`, `jk`, `tmpl`, `tgll`, `nip`, `status_pegawai`, `jenis_ptk`, `gelar_depan`, `gelar_belakang`, `jenjang_pendidikan`, `jurusan`, `sertifikasi`, `tmt_kerja`, `tugas_tambahan`) VALUES
('1', 'Afrina Mardesci', '3636756657300060', 'P', 'PADANG', '1978-03-04', '197803042006042000', 'PNS', 'Guru Mapel', '', 'S.H.', 'S1', 'Ilmu Hukum ', 'Pendidikan Kewarganegaraa', '2012-05-23', ''),
('10', 'Desi Novianti', '4444756658300070', 'P', 'PAKASAI', '1978-11-12', '197811122010012000', 'PNS', 'Guru Mapel', '', 'S.Ag', 'S1', 'Pendidikan Agama Islam', '', '2012-05-23', ''),
('11', 'Desriwati', '4539760661300080', 'P', 'MUARA SIKABALUAN', '1982-02-07', '198202072009012000', 'PNS', 'Guru TIK', '', 'S.Kom, S.Kom', 'S1', 'Teknologi Informasi dan K', 'Teknologi Informasi dan K', '2012-05-23', ''),
('12', 'Deswarni', '9563750653300160', 'P', 'PARIAMAN', '1972-12-31', '197212312005012000', 'PNS', 'Guru Mapel', '', 'A.Md, S.Pd', 'S1', 'Pendidikan Seni Drama, Ta', 'Seni Budaya', '2011-10-03', ''),
('13', 'Devi Karmilawati', '1548762663210040', 'P', 'PARIAMAN', '1984-12-16', '198412162010012000', 'PNS', 'Guru Mapel', '', 'S.Pd', 'S1', 'Pendidikan Bahasa Jerman', '', '2010-01-02', ''),
('14', 'Dewi Sukma', '8862756657210060', 'P', 'PAKANDANGAN', '1978-05-30', '197805302010012000', 'PNS', 'Guru Mapel', '', 'S.S.', 'S1', 'Sejarah', 'Sejarah', '2010-02-11', ''),
('15', 'Dicky Agus', '5252754656200020', 'L', 'JAKARTA', '1976-09-20', '197609202010011000', 'PNS', 'Guru Mapel', '', 'S.Si', 'S1', 'Kimia', 'Kimia', '2010-02-11', 'Pembina OSIS'),
('16', 'Efrihasnul Abrar', '6235769670130080', 'L', 'PARIAMAN', '1991-09-03', '', 'Guru Honor Sekolah', 'Guru Mapel', '', 'S.Pd', 'S1', 'Pendidikan Jasmani dan Ke', '', '2016-07-01', ''),
('17', 'Elfi Hendrayeti', '5933749651300100', 'P', 'KAMPUNG BARU', '1971-06-01', '197106011997022000', 'PNS', 'Guru Mapel', '', 'S.Pd', 'S1', 'Bahasa Inggris', 'Bahasa Inggris', '2010-06-01', 'Guru Piket, Pembina Pramu'),
('18', 'Idval Zikra', '2857766667131180', 'L', 'PADUSUNAN', '1988-05-25', '', 'Tenaga Honor Sekolah', 'Tenaga Administrasi Sekol', '', 'S.Pd.I', 'S1', 'Pendidikan Agama Islam', '', '2015-07-01', ''),
('19', 'Indah Susanti', '2543758659300010', 'P', 'BUKITTINGGI', '1980-02-11', '198002112010012000', 'PNS', 'Guru Mapel', '', 'S.Pd', 'S1', 'Pendidikan Bahasa dan Sas', 'Bahasa Indonesia (dan Sas', '2010-02-11', ''),
('2', 'Akhlisa Febi Triyani', '644765000000000', 'P', 'PADANG', '1986-03-12', '198603122010012000', 'PNS', 'Guru Mapel', '', 'S.Pd', 'S1', 'Kimia', 'Kimia', '2015-01-30', ''),
('20', 'Irja', '1857750653120000', 'L', 'SIMPANG KURAI TAJI', '1972-05-25', '197205252014061000', 'PNS', 'Guru Mapel', '', 'S.E., M.Si', 'S2', 'Ekonomi', '', '2014-09-22', ''),
('21', 'Iskandar Rahman', '4534765666110060', 'L', 'KAMPUNG TANGAH', '1987-02-02', '198702022010011000', 'PNS', 'Guru BK', '', 'S.Pd, M.Pd', 'S2', 'Bimbingan dan Konseling (', 'Bimbingan dan Konseling (', '2010-01-01', ''),
('22', 'Jasnelvi Helvira', '1055754657220000', 'P', 'PAYAKUMBUH', '1976-07-23', '197607232009012000', 'PNS', 'Guru Mapel', '', 'S.S.', 'S1', 'Muatan Lokal Bahasa Daera', '', '2012-05-23', ''),
('23', 'Junaidi', '3054740642200040', 'L', 'PAGUH DALAM', '1962-07-22', '196207221987101000', 'PNS', 'Guru Mapel', '', 'S.Pd, M.Pd', 'S2', 'Bahasa Indonesia', 'Bahasa dan Sastra Indones', '2009-10-26', ''),
('24', 'Khairiyah', '9742744646300080', 'P', 'KAMPUNG BARU', '1966-04-10', '196604102005012000', 'PNS', 'Guru Mapel', 'Dra', '', 'S1', 'Bahasa Inggris', '', '2012-11-26', 'Guru Piket, Pembina Ekstr'),
('25', 'Lisa Handriyani', '3359770671130040', 'P', 'PARIAMAN', '1992-10-27', '', 'Tenaga Honor Sekolah', 'Tenaga Administrasi Sekol', '', 'S.Pd.I', 'S1', 'Pendidikan Agama Islam', '', '2014-05-01', ''),
('26', 'Mardiyah', '7336740643300000', 'P', 'BATANG KABUNG', '1962-10-04', '196210041985122000', 'PNS', 'Guru BK', '', 'S.Pd, S.Pd', 'S1', 'Bimbingan dan Konseling', 'Bimbingan dan Konseling (', '2011-01-01', ''),
('27', 'Mega Sukma Dewi', '1952766667130140', 'P', 'PARIAMAN', '1988-06-20', '', 'Honor Daerah TK.I Pr', 'Tenaga Perpustakaan', '', 'S.Pd', 'S1', 'Pendidikan Jasmani dan Ke', '', '2011-10-01', ''),
('28', 'Munawardi', '                ', 'L', 'KP. BARU', '1983-01-04', '', 'Tenaga Honor Sekolah', 'Tenaga Perpustakaan', '', '', 'SMA / sederajat', 'Ilmu Pengetahuan Alam (IP', '', '2011-10-01', ''),
('29', 'Nasrul', '3442745648200030', 'L', 'KAMPUNG TANJUNG CAMPAGO', '1967-11-10', '196711101991031000', 'PNS', 'Guru Mapel', '', 'S.Pd', 'S1', 'Pendidikan Fisika', 'Fisika', '2010-05-06', 'Kepala Laboratorium'),
('3', 'Ali Nurdin. A', '8261738640200020', 'L', 'PARIAMAN', '1960-09-29', '196009291982021000', 'PNS', 'Guru Mapel', '', 'S.Pd', 'S1', 'Pendidikan Kewarganegaraa', 'Pendidikan Kewarganegaraa', '1982-02-01', ''),
('30', 'Nurni', '1439747653300000', 'P', 'KAJAI', '1969-11-07', '196911071997032000', 'PNS', 'Guru Mapel', '', 'S.Pd', 'S1', 'Bahasa Inggris', 'Bahasa Inggris', '2011-04-25', ''),
('31', 'Nuryetti', '8036739641300010', 'P', 'PADANG', '1961-07-04', '196107041988032000', 'PNS', 'Guru Mapel', '', 'S.Pd, M.Si', 'S2', 'Matematika', 'Matematika', '2011-11-14', ''),
('32', 'Onil Eka Putra', '6448763664130120', 'L', 'PADANG', '1985-01-16', '198501162011011000', 'PNS', 'Tenaga Perpustakaan', '', 'A.Md', 'D3', 'lainnya', '', '2011-01-01', ''),
('33', 'Osmiati', '1452762664210120', 'P', 'TANJUNG JATI', '1984-11-20', '198411202010012000', 'PNS', 'Guru Mapel', '', 'S.Pd', 'S1', 'Pendidikan Bahasa dan Sas', 'Bahasa Indonesia', '2010-02-11', ''),
('34', 'Perdinan Tanjung', '5233761663110040', 'L', 'SIMATORKIS', '1983-09-01', '198309012009011000', 'PNS', 'Guru Mapel', '', 'S.Pd', 'S1', 'Biologi', 'Biologi', '2009-01-01', 'Wakil Kepala Sekolah Sarp'),
('35', 'Reni Sapitri', '346761663300053', 'P', 'GASAN KECIL', '1983-10-14', '198310142010012000', 'PNS', 'Guru Mapel', '', 'S.Pd', 'S1', 'Filsafat dan Sosiologi Pe', 'Sosiologi', '2010-02-11', 'Guru Piket'),
('36', 'Reno Sari', '8345767668130100', 'P', 'CIMPARUH', '1989-10-13', '', 'Guru Honor Sekolah', 'Guru Mapel', '', 'S.Pd.I', 'S1', 'Pendidikan Agama Islam', '', '2014-07-01', ''),
('37', 'Rita Yurtania', '35762663300083', 'P', 'BUKITTINGGI', '1984-03-07', '198403072010012000', 'PNS', 'Guru Mapel', '', 'S.Pd', 'S1', 'Ekonomi', 'Ekonomi', '2010-02-11', 'Guru Piket, Pembina Pramu'),
('38', 'Satni Ridwan', '                ', 'L', 'KP. BARU', '1988-11-05', '', 'Tenaga Honor Sekolah', 'Tenaga Administrasi Sekol', '', 'S.Pd, S.Pd', 'S1', 'Bahasa Inggris', '', '2011-01-01', ''),
('39', 'Seprah Madeni', '2239754655300040', 'P', 'Jambu', '1976-09-07', '197609072000122000', 'PNS', 'Kepala Sekolah', '', 'S.Pd, M.Pd', 'S2', 'Pendidikan Bahasa Inggris', 'Bahasa Inggris', '2002-01-01', 'Kepala Sekolah'),
('4', 'Basril', '4644766667200010', 'L', 'Lembak Pasang', '1988-03-12', '', 'Tenaga Honor Sekolah', 'Tenaga Administrasi Sekol', '', 'S.Kom', 'S1', 'lainnya', '', '2007-01-02', ''),
('40', 'Susi Mustika', '5339756657300040', 'P', 'KAMPUNG BARU', '1978-10-07', '197810072003122000', 'PNS', 'Guru Mapel', '', 'S.Pd', 'S1', 'Pendidikan Matematika', 'Matematika', '2012-05-23', ''),
('41', 'Syadri', '6563744646110850', 'L', 'LOHONG', '1966-12-31', '196612312000031000', 'PNS', 'Guru Mapel', '', 'A.Ma.Pd, S.Pd', 'S1', 'Pendidikan Dunia Usaha', 'Ekonomi', '2010-10-01', ''),
('42', 'Syukril Hamdi Umar', '5453762663110050', 'L', 'GADUR', '1984-01-21', '198401212010011000', 'PNS', 'Guru Mapel', '', 'S.Pd', 'S1', 'Pendidikan Kewarganegaraa', 'Pendidikan Pancasila dan ', '2010-02-11', 'Bendahara BOS, Kepala Per'),
('43', 'Tesi Junita', '5935760661130180', 'P', 'PADANG', '1982-06-03', '198206032010012000', 'PNS', 'Tenaga Administrasi Sekol', '', 'S.E.', 'S1', 'Ekonomi', '', '2014-01-17', ''),
('44', 'Widya Kurniatul Awalia', '2048765666300060', 'P', 'PADANG', '1987-07-16', '198707162010012000', 'PNS', 'Guru Mapel', '', 'S.Pd', 'S1', 'Pendidikan Fisika', 'Fisika', '2010-02-11', ''),
('45', 'Yudhi Rosmen', '2347757659110060', 'L', 'PEKAN BARU', '1979-10-15', '197910152010011000', 'PNS', 'Guru TIK', '', 'S.Kom', 'S1', 'Teknologi Informasi dan K', 'Teknologi Informasi dan K', '2010-02-11', ''),
('46', 'Zulkifli', '139743646200063', 'L', 'KP. KANDANG', '1965-08-07', '196508071993031000', 'PNS', 'Guru Mapel', '', 'S.Pd', 'S1', 'Pendidikan Geografi', 'Geografi', '2012-05-23', ''),
('5', 'Cici Sulastri', '4548759661300080', 'P', 'BUKITTINGGI', '1981-12-16', '198112162010012000', 'PNS', 'Guru Mapel', '', 'S.Si', 'S1', 'Biologi', 'Biologi', '2010-02-11', ''),
('6', 'Danil Putra', '2661763664110060', 'L', 'PADUSUNAN', '1985-03-29', '198503292010011000', 'PNS', 'Guru Mapel', '', 'S.Pd', 'S1', 'Pendidikan Jasmani dan Ke', '', '2010-02-11', ''),
('7', 'David', '4955754656110040', 'L', 'PADANG', '1976-06-23', '197606232009011000', 'PNS', 'Guru Mapel', '', 'S.Sos', 'S1', 'Sosiologi', 'Sosiologi', '2012-05-23', 'Wakil Kepala Sekolah Kesi'),
('8', 'Dedi Hendri', '4649752653200000', 'L', 'APAR', '1974-03-17', '197403172005011000', 'PNS', 'Guru Mapel', '', 'S.Pd', 'S1', 'Sejarah', 'Sejarah', '2012-03-19', ''),
('9', 'Deni Adrivia', '9433758658300040', 'P', 'PARIAMAN', '1984-04-28', '198404282010012000', 'PNS', 'Guru Mapel', '', 'S.Pd', 'S1', 'Pendidikan Matematika', 'Matematika', '2010-01-01', ''),
('No', 'Nama', 'NUPTK', 'J', 'Tempat Lahir', 'Tanggal Lahir', 'NIP', 'Status Kepegawaian', 'Jenis PTK', 'Gelar Depan', 'Gelar Belakang', 'Jenjang', 'Jurusan/Prodi', 'Sertifikasi', 'TMT Kerja', 'Tugas Tambahan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `nama_siswa` varchar(25) NOT NULL,
  `id_kelas` varchar(5) NOT NULL,
  `nis` int(16) NOT NULL,
  `nisn` int(16) NOT NULL,
  `tmpl` varchar(25) NOT NULL,
  `tgll` date NOT NULL,
  `jk` varchar(1) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `sdk` varchar(15) NOT NULL,
  `anak_ke` int(2) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `sekolah_asal` varchar(25) NOT NULL,
  `nama_ayah` varchar(25) NOT NULL,
  `nama_ibu` varchar(25) NOT NULL,
  `kerja_ayah` varchar(25) NOT NULL,
  `kerja_ibu` varchar(25) NOT NULL,
  `email_siswa` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nama_siswa`, `id_kelas`, `nis`, `nisn`, `tmpl`, `tgll`, `jk`, `agama`, `sdk`, `anak_ke`, `alamat`, `no_telp`, `sekolah_asal`, `nama_ayah`, `nama_ibu`, `kerja_ayah`, `kerja_ibu`, `email_siswa`, `password`) VALUES
(7, 'GENTA SURYA DARNA', '14', 2296, 0, '', '0000-00-00', 'L', '', '', 0, '', '', '', '', '', '', '', '2296', '2296'),
(6, 'FAJRI MARZUKI', '14', 2285, 0, '', '0000-00-00', 'L', '', '', 0, '', '', '', '', '', '', '', '2285', '2285'),
(5, 'FADILA AGUS SAFIMA NURMY', '14', 2282, 0, '', '0000-00-00', 'P', '', '', 0, '', '', '', '', '', '', '', '2282', '2282'),
(4, 'DESRIZAL RANI FITRI', '14', 2263, 0, '', '0000-00-00', 'P', '', '', 0, '', '', '', '', '', '', '', '2263', '2263'),
(3, 'DAVID ILHAM', '14', 2260, 0, '', '0000-00-00', 'L', '', '', 0, '', '', '', '', '', '', '', '2260', '2260'),
(1, 'AFIFA RAHMADANI', '14', 2238, 0, '', '0000-00-00', 'P', '', '', 0, '', '', '', '', '', '', '', '2238', '2238'),
(2, 'ALFRENDOM BINTAR', '14', 2243, 0, '', '0000-00-00', 'L', '', '', 0, '', '', '', '', '', '', '', '2243', '2243'),
(8, 'HENDRI VALDI', '14', 2300, 0, '', '0000-00-00', 'L', '', '', 0, '', '', '', '', '', '', '', '2300', '2300'),
(9, 'LUSI JAYUSMAN', '14', 2317, 0, '', '0000-00-00', 'P', '', '', 0, '', '', '', '', '', '', '', '2317', '2317'),
(10, 'M. ARFINUS AKBAR', '14', 2319, 0, '', '0000-00-00', 'L', '', '', 0, '', '', '', '', '', '', '', '2319', '2319'),
(11, 'M. FAJRI', '14', 2320, 0, '', '0000-00-00', 'L', '', '', 0, '', '', '', '', '', '', '', '2320', '2320'),
(12, 'MUHAMAD RAHUL SAPUTRA', '14', 2331, 0, '', '0000-00-00', 'L', '', '', 0, '', '', '', '', '', '', '', '2331', '2331'),
(13, 'NADIA RAHMADANI', '14', 2348, 0, '', '0000-00-00', 'P', '', '', 0, '', '', '', '', '', '', '', '2348', '2348'),
(14, 'NALDI HARIANTO', '14', 2349, 0, '', '0000-00-00', 'L', '', '', 0, '', '', '', '', '', '', '', '2349', '2349'),
(15, 'NURAINI SAFITRI', '14', 2358, 0, '', '0000-00-00', 'P', '', '', 0, '', '', '', '', '', '', '', '2358', '2358'),
(16, 'REVALINA KLARISSA', '14', 2377, 0, '', '0000-00-00', 'P', '', '', 0, '', '', '', '', '', '', '', '2377', '2377'),
(17, 'RIDHO FEBRI ANANDA', '14', 2384, 0, '', '0000-00-00', 'L', '', '', 0, '', '', '', '', '', '', '', '2384', '2384'),
(18, 'RINO AIDIL SAPUTRA', '14', 2389, 0, '', '0000-00-00', 'L', '', '', 0, '', '', '', '', '', '', '', '2389', '2389'),
(19, 'RIVA SAPITRI', '14', 2391, 0, '', '0000-00-00', 'P', '', '', 0, '', '', '', '', '', '', '', '2391', '2391'),
(20, 'RUZI HARDIAN', '14', 2394, 0, '', '0000-00-00', 'L', '', '', 0, '', '', '', '', '', '', '', '2394', '2394'),
(21, 'SARI MAHARANI PUTRI', '14', 2400, 0, '', '0000-00-00', 'P', '', '', 0, '', '', '', '', '', '', '', '2400', '2400'),
(22, 'SAYFUL ANDANIL', '14', 2401, 0, '', '0000-00-00', 'L', '', '', 0, '', '', '', '', '', '', '', '2401', '2401'),
(23, 'SILVI GUSNI ASNATUL KHAIR', '14', 2405, 0, '', '0000-00-00', 'P', '', '', 0, '', '', '', '', '', '', '', '2405', '2405'),
(24, 'TIRA RIMAWATI PUTRI', '14', 2417, 0, '', '0000-00-00', 'P', '', '', 0, '', '', '', '', '', '', '', '2417', '2417'),
(25, 'WAHYU RASIDI', '14', 2425, 0, '', '0000-00-00', 'L', '', '', 0, '', '', '', '', '', '', '', '2425', '2425'),
(26, 'YULIA ANANI', '14', 2431, 0, '', '0000-00-00', 'P', '', '', 0, '', '', '', '', '', '', '', '2431', '2431'),
(27, 'ZULEYKA DELLA ZAHARA', '14', 2436, 0, '', '0000-00-00', 'P', '', '', 0, '', '', '', '', '', '', '', '2436', '2436'),
(28, 'ABDULLAH AZZAM', '9', 2236, 0, '', '0000-00-00', 'L', '', '', 0, '', '', '', '', '', '', '', '2236', '2236'),
(29, 'ARIF ABDILLAH', '9', 2250, 0, '', '0000-00-00', 'L', '', '', 0, '', '', '', '', '', '', '', '2250', '2250'),
(30, 'CICI SRIWAHYU NINGSIH', '9', 2254, 0, '', '0000-00-00', 'P', '', '', 0, '', '', '', '', '', '', '', '2254', '2254'),
(31, 'CICI ZULIYANTI', '9', 2255, 0, '', '0000-00-00', 'P', '', '', 0, '', '', '', '', '', '', '', '2255', '2255'),
(32, 'ELVINA', '9', 2277, 0, '', '0000-00-00', 'P', '', '', 0, '', '', '', '', '', '', '', '2277', '2277'),
(33, 'FIFO KHAER ARIFIN', '9', 2290, 0, '', '0000-00-00', 'L', '', '', 0, '', '', '', '', '', '', '', '2290', '2290'),
(34, 'FITRI', '9', 2293, 0, '', '0000-00-00', 'P', '', '', 0, '', '', '', '', '', '', '', '2293', '2293'),
(35, 'GIRVARUZI KHALID', '9', 2297, 0, '', '0000-00-00', 'L', '', '', 0, '', '', '', '', '', '', '', '2297', '2297'),
(36, 'IKBAL', '9', 2301, 0, '', '0000-00-00', 'L', '', '', 0, '', '', '', '', '', '', '', '2301', '2301'),
(37, 'IKRA MUHAMMAD FALENTINO', '9', 2302, 0, '', '0000-00-00', 'L', '', '', 0, '', '', '', '', '', '', '', '2302', '2302'),
(38, 'JIHAN RAMADHANI', '9', 2311, 0, '', '0000-00-00', 'P', '', '', 0, '', '', '', '', '', '', '', '2311', '2311'),
(39, 'LISA FAUZIAH RAMADHANI', '9', 2316, 0, '', '0000-00-00', 'P', '', '', 0, '', '', '', '', '', '', '', '2316', '2316'),
(40, 'MELATI APRIANI', '9', 2328, 0, '', '0000-00-00', 'P', '', '', 0, '', '', '', '', '', '', '', '2328', '2328'),
(41, 'MUHAMMAD AL FIQRAM', '9', 2336, 0, '', '0000-00-00', 'L', '', '', 0, '', '', '', '', '', '', '', '2336', '2336'),
(42, 'MUHAMMAD AL HADID', '9', 2338, 0, '', '0000-00-00', 'L', '', '', 0, '', '', '', '', '', '', '', '2338', '2338'),
(43, 'NIRAWATI', '9', 2354, 0, '', '0000-00-00', 'P', '', '', 0, '', '', '', '', '', '', '', '2354', '2354'),
(44, 'NOVY FEBRI ANGGRAINI', '9', 2357, 0, '', '0000-00-00', 'P', '', '', 0, '', '', '', '', '', '', '', '2357', '2357'),
(45, 'RAJA ASLAM SYAWIR', '9', 2369, 0, '', '0000-00-00', 'L', '', '', 0, '', '', '', '', '', '', '', '2369', '2369'),
(46, 'RESI ASMI', '9', 2375, 0, '', '0000-00-00', 'P', '', '', 0, '', '', '', '', '', '', '', '2375', '2375'),
(47, 'RESTU SYAHDA', '9', 2376, 0, '', '0000-00-00', 'P', '', '', 0, '', '', '', '', '', '', '', '2376', '2376'),
(48, 'RIAN PUTRA MAIFIDA', '9', 2382, 0, '', '0000-00-00', 'L', '', '', 0, '', '', '', '', '', '', '', '2382', '2382'),
(49, 'SALSA BILA', '9', 2397, 0, '', '0000-00-00', 'P', '', '', 0, '', '', '', '', '', '', '', '2397', '2397'),
(50, 'SELVI JULIA PUTRI', '9', 2402, 0, '', '0000-00-00', 'P', '', '', 0, '', '', '', '', '', '', '', '2402', '2402'),
(51, 'TEDY FIRMANSYAH', '9', 2413, 0, '', '0000-00-00', 'L', '', '', 0, '', '', '', '', '', '', '', '2413', '2413'),
(52, 'UTARI', '9', 2420, 0, '', '0000-00-00', 'P', '', '', 0, '', '', '', '', '', '', '', '2420', '2420'),
(53, 'VANESYA IVANKA', '9', 2421, 0, '', '0000-00-00', 'P', '', '', 0, '', '', '', '', '', '', '', '2421', '2421'),
(54, 'ZULFI ANDRE', '9', 2437, 0, '', '0000-00-00', 'L', '', '', 0, '', '', '', '', '', '', '', '2437', '2437'),
(55, 'ADI RAHMANTO', '10', 2231, 0, '', '0000-00-00', 'L', '', '', 0, '', '', '', '', '', '', '', '2231', '2231'),
(56, 'ADINDA PUSPA SARI', '10', 2232, 0, '', '0000-00-00', 'P', '', '', 0, '', '', '', '', '', '', '', '2232', '2232'),
(57, 'ALFAUZI IKHRAM', '10', 2242, 0, '', '0000-00-00', 'L', '', '', 0, '', '', '', '', '', '', '', '2242', '2242'),
(58, 'ANJELIKA SEPTIA', '10', 2247, 0, '', '0000-00-00', 'P', '', '', 0, '', '', '', '', '', '', '', '2247', '2247'),
(59, 'ARIF RAHMAT SAPUTRA', '10', 2251, 0, '', '0000-00-00', 'L', '', '', 0, '', '', '', '', '', '', '', '2251', '2251'),
(60, 'DIMAS ARI', '10', 2268, 0, '', '0000-00-00', 'L', '', '', 0, '', '', '', '', '', '', '', '2268', '2268'),
(61, 'ELFIRA FITRIA ARIFIN', '10', 2274, 0, '', '0000-00-00', 'P', '', '', 0, '', '', '', '', '', '', '', '2274', '2274'),
(62, 'ELSA JUNIARTI', '10', 2276, 0, '', '0000-00-00', 'P', '', '', 0, '', '', '', '', '', '', '', '2276', '2276'),
(63, 'FIKHRA WINATA', '10', 2291, 0, '', '0000-00-00', 'L', '', '', 0, '', '', '', '', '', '', '', '2291', '2291'),
(64, 'ILHAM SAFRIANTO', '10', 2304, 0, '', '0000-00-00', 'L', '', '', 0, '', '', '', '', '', '', '', '2304', '2304'),
(65, 'INDRY NURFADILLAH', '10', 2305, 0, '', '0000-00-00', 'P', '', '', 0, '', '', '', '', '', '', '', '2305', '2305'),
(66, 'LIDIA AMELIA SUNDARI', '10', 2315, 0, '', '0000-00-00', 'P', '', '', 0, '', '', '', '', '', '', '', '2315', '2315'),
(67, 'LUTHFIANSYAH GAYO', '10', 2318, 0, '', '0000-00-00', 'L', '', '', 0, '', '', '', '', '', '', '', '2318', '2318'),
(68, 'MUHAMMAD FAUZAN', '10', 2342, 0, '', '0000-00-00', 'L', '', '', 0, '', '', '', '', '', '', '', '2342', '2342'),
(69, 'MUHAMMAD VICKY', '10', 2345, 0, '', '0000-00-00', 'L', '', '', 0, '', '', '', '', '', '', '', '2345', '2345'),
(70, 'MUTIARA AULIA', '10', 2347, 0, '', '0000-00-00', 'P', '', '', 0, '', '', '', '', '', '', '', '2347', '2347'),
(71, 'PUTRI INDRI YANI', '10', 2362, 0, '', '0000-00-00', 'P', '', '', 0, '', '', '', '', '', '', '', '2362', '2362'),
(72, 'REZA ARRIDHO', '10', 2378, 0, '', '0000-00-00', 'L', '', '', 0, '', '', '', '', '', '', '', '2378', '2378'),
(73, 'SANTIA RISNI', '10', 2399, 0, '', '0000-00-00', 'P', '', '', 0, '', '', '', '', '', '', '', '2399', '2399'),
(74, 'SUCI INTAN SARI', '10', 2410, 0, '', '0000-00-00', 'P', '', '', 0, '', '', '', '', '', '', '', '2410', '2410'),
(75, 'TITI SANTIYA', '10', 2418, 0, '', '0000-00-00', 'P', '', '', 0, '', '', '', '', '', '', '', '2418', '2418'),
(76, 'FAJRATUL ADNI', '10', 2283, 0, '', '0000-00-00', 'P', '', '', 0, '', '', '', '', '', '', '', '2283', '2283'),
(77, 'INDAH CAHYANI', '10', 2440, 0, '', '0000-00-00', 'P', '', '', 0, '', '', '', '', '', '', '', '2440', '2440'),
(78, 'MUHAMMAD PUTRA', '10', 2349, 0, '', '0000-00-00', 'L', '', '', 0, '', '', '', '', '', '', '', '2349', '2349'),
(79, 'REZA OKTA SHINTIA', '10', 2379, 0, '', '0000-00-00', 'P', '', '', 0, '', '', '', '', '', '', '', '2379', '2379'),
(80, 'STEFI MONIKA', '10', 2408, 0, '', '0000-00-00', 'P', '', '', 0, '', '', '', '', '', '', '', '2408', '2408'),
(81, 'ADIT ANUGRAH', '11', 2233, 0, '', '0000-00-00', 'L', '', '', 0, '', '', '', '', '', '', '', '2233', '2233'),
(82, 'AFIFA FAUZIAH', '11', 2238, 0, '', '0000-00-00', 'P', '', '', 0, '', '', '', '', '', '', '', '2238', '2238'),
(83, 'ALIF SURYADI', '11', 2244, 0, '', '0000-00-00', 'L', '', '', 0, '', '', '', '', '', '', '', '2244', '2244'),
(84, 'APRIZA WIRANDA', '11', 2248, 0, '', '0000-00-00', 'L', '', '', 0, '', '', '', '', '', '', '', '2248', '2248'),
(85, 'DESI DELFITA', '11', 2262, 0, '', '0000-00-00', 'P', '', '', 0, '', '', '', '', '', '', '', '2262', '2262'),
(86, 'DIMAS ARIO PUTRA', '11', 2269, 0, '', '0000-00-00', 'L', '', '', 0, '', '', '', '', '', '', '', '2269', '2269'),
(87, 'EKA JELITA PUTRI', '11', 2273, 0, '', '0000-00-00', 'P', '', '', 0, '', '', '', '', '', '', '', '2273', '2273'),
(88, 'ELMI NOVITA', '11', 2275, 0, '', '0000-00-00', 'P', '', '', 0, '', '', '', '', '', '', '', '2275', '2275'),
(89, 'FAJAR SIDDIK DJAAFAR', '11', 0, 0, '', '0000-00-00', 'L', '', '', 0, '', '', '', '', '', '', '', '', ''),
(90, 'FAUZIAH MAILANI', '11', 2286, 0, '', '0000-00-00', 'P', '', '', 0, '', '', '', '', '', '', '', '2286', '2286'),
(91, 'HALIMUR RASYID', '11', 2299, 0, '', '0000-00-00', 'L', '', '', 0, '', '', '', '', '', '', '', '2299', '2299'),
(92, 'IRWAN FADHILA', '11', 2307, 0, '', '0000-00-00', 'P', '', '', 0, '', '', '', '', '', '', '', '2307', '2307'),
(93, 'MARINA SYARAH', '11', 2326, 0, '', '0000-00-00', 'P', '', '', 0, '', '', '', '', '', '', '', '2326', '2326'),
(94, 'MASYURAH NABILLA SARI', '11', 2327, 0, '', '0000-00-00', 'P', '', '', 0, '', '', '', '', '', '', '', '2327', '2327'),
(95, 'NATHASYA NOVIA RAMADHAN', '11', 2350, 0, '', '0000-00-00', 'P', '', '', 0, '', '', '', '', '', '', '', '2350', '2350'),
(96, 'NAURA AMELIA PUTRI', '11', 2352, 0, '', '0000-00-00', 'P', '', '', 0, '', '', '', '', '', '', '', '2352', '2352'),
(97, 'NISA ANA DINDA', '11', 2355, 0, '', '0000-00-00', 'P', '', '', 0, '', '', '', '', '', '', '', '2355', '2355'),
(98, 'RARA FITRI', '11', 2371, 0, '', '0000-00-00', 'P', '', '', 0, '', '', '', '', '', '', '', '2371', '2371'),
(99, 'RIDO MUHAMAD PRATAMA', '11', 2386, 0, '', '0000-00-00', 'L', '', '', 0, '', '', '', '', '', '', '', '2386', '2386'),
(100, 'RIZKA AULIA PUTRI', '11', 2392, 0, '', '0000-00-00', 'P', '', '', 0, '', '', '', '', '', '', '', '2392', '2392'),
(101, 'SALSA ASHYIFA', '11', 2396, 0, '', '0000-00-00', 'P', '', '', 0, '', '', '', '', '', '', '', '2396', '2396'),
(102, 'SITI SA`DIAH', '11', 2406, 0, '', '0000-00-00', 'P', '', '', 0, '', '', '', '', '', '', '', '2406', '2406'),
(103, 'ZHIARA SINTA MUTIARANI', '11', 2434, 0, '', '0000-00-00', 'P', '', '', 0, '', '', '', '', '', '', '', '2434', '2434');

-- --------------------------------------------------------

--
-- Struktur dari tabel `soal`
--

CREATE TABLE `soal` (
  `id_soal` int(11) NOT NULL,
  `id_paket` varchar(10) NOT NULL,
  `nomor_soal` int(5) NOT NULL,
  `soal` text NOT NULL,
  `gambar` text NOT NULL,
  `kunci_jawaban` varchar(5) NOT NULL,
  `pembahasan` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `soal`
--

INSERT INTO `soal` (`id_soal`, `id_paket`, `nomor_soal`, `soal`, `gambar`, `kunci_jawaban`, `pembahasan`) VALUES
(5, '78', 5, '<p>Penunjuk sel disebut</p>\r\n', '', 'A', ''),
(4, '78', 4, '<p>Tombol F5 dalam lembar kerja Excel berfungsi untuk</p>\r\n', '', 'E', ''),
(3, '78', 3, '<p>Kolom akhir dari lembar kerja Excel adalah</p>\r\n', '', 'A', ''),
(1, '78', 1, '<p>Dibawah ini yang termasuk aplikasi pengolah angka adalah</p>\r\n', '', 'C', ''),
(2, '78', 2, '<p>Perpotongan kolom dan baris disebut</p>\r\n', '', 'C', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ujian`
--

CREATE TABLE `ujian` (
  `id_siswa` varchar(5) NOT NULL,
  `id_paket` varchar(5) NOT NULL,
  `id_soal` varchar(5) NOT NULL,
  `jawaban` varchar(5) NOT NULL,
  `jadwal_ujian` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ujian`
--

INSERT INTO `ujian` (`id_siswa`, `id_paket`, `id_soal`, `jawaban`, `jadwal_ujian`) VALUES
('7', '78', '1', 'C', '2020-09-22-09-52'),
('7', '78', '2', 'B', '2020-09-22-09-52'),
('7', '78', '3', 'A', '2020-09-22-09-52'),
('7', '78', '4', 'C', '2020-09-22-09-52'),
('7', '78', '5', 'C', '2020-09-22-09-52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `waktu`
--

CREATE TABLE `waktu` (
  `id_waktu` int(1) NOT NULL,
  `waktu` int(4) NOT NULL,
  `jenis_ujian` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `waktu`
--

INSERT INTO `waktu` (`id_waktu`, `waktu`, `jenis_ujian`) VALUES
(1, 120, 'UTS');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indeks untuk tabel `jawaban`
--
ALTER TABLE `jawaban`
  ADD PRIMARY KEY (`idj`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indeks untuk tabel `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indeks untuk tabel `ptk`
--
ALTER TABLE `ptk`
  ADD PRIMARY KEY (`id_ptk`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id_soal`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT untuk tabel `jawaban`
--
ALTER TABLE `jawaban`
  MODIFY `idj` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3646;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id_mapel` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT untuk tabel `soal`
--
ALTER TABLE `soal`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=751;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
