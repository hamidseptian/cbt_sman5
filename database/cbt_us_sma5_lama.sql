-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2020 at 03:54 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(3) NOT NULL,
  `nama_admin` varchar(25) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` text NOT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama_admin`, `username`, `password`, `level`) VALUES
(6, 'Hamid Septian', '11', '11', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(11) NOT NULL,
  `nama_guru` varchar(25) NOT NULL,
  `id_mapel` varchar(5) NOT NULL,
  `nip` int(11) NOT NULL,
  `tmpl_guru` varchar(25) NOT NULL,
  `tgll_guru` date NOT NULL,
  `pangkat_gol` varchar(10) NOT NULL,
  `pangkat_tmt` date NOT NULL,
  `jabatan` varchar(25) NOT NULL,
  `tmt_jabatan` date NOT NULL,
  `masa_kerja` varchar(25) NOT NULL,
  `pendidikan` varchar(10) NOT NULL,
  `jurusan` varchar(25) NOT NULL,
  `asal_pendidikan` varchar(25) NOT NULL,
  `tahun_lulus` int(4) NOT NULL,
  `email_guru` varchar(25) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `nama_guru`, `id_mapel`, `nip`, `tmpl_guru`, `tgll_guru`, `pangkat_gol`, `pangkat_tmt`, `jabatan`, `tmt_jabatan`, `masa_kerja`, `pendidikan`, `jurusan`, `asal_pendidikan`, `tahun_lulus`, `email_guru`, `password`) VALUES
(2, 'Hamid', '7', 0, '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '', '', '', 0, '', ''),
(3, 'Penyok', '5', 0, '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '', '', '', 0, '22', '22'),
(4, 'Faisal', '9', 0, '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '', '', '', 0, '33', '33');

-- --------------------------------------------------------

--
-- Table structure for table `jawaban`
--

CREATE TABLE `jawaban` (
  `idj` int(11) NOT NULL,
  `id_soal` varchar(5) NOT NULL,
  `id_paket` varchar(5) NOT NULL,
  `jawaban` text NOT NULL,
  `pilihan` varchar(4) NOT NULL,
  `poin` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jawaban`
--

INSERT INTO `jawaban` (`idj`, `id_soal`, `id_paket`, `jawaban`, `pilihan`, `poin`) VALUES
(3516, '1', '58', '<p>dwq</p>\r\n', 'A', '0'),
(3517, '1', '58', 'scw', 'B', '0'),
(3518, '1', '58', 'cscs', 'C', '5'),
(3519, '1', '58', 'csacs', 'D', '0'),
(3521, '2', '58', 'sdq', 'A', '0'),
(3522, '2', '58', 'dsd', 'B', '0'),
(3523, '2', '58', 'd', 'C', '0'),
(3524, '2', '58', 'qd', 'D', '0'),
(3525, '2', '58', 'dwfqwfasf', 'E', '5'),
(3526, '3', '58', 'csa', 'A', '9'),
(3527, '3', '58', 'sacxsav', 'B', '9'),
(3528, '3', '58', 'dhgcw', 'C', '9'),
(3529, '3', '58', '99', 'D', '9'),
(3530, '3', '58', 'csajhcv', 'E', '8'),
(3531, '4', '58', 'sc', 'A', '9'),
(3532, '4', '58', 'sahcb', 'B', '8'),
(3533, '4', '58', 'scshicb', 'C', '8'),
(3534, '4', '58', 'cbw', 'D', '6'),
(3535, '4', '58', 'wqjcw', 'E', '5'),
(3536, '1', '59', '2', 'A', '0'),
(3537, '1', '59', '3', 'B', '5'),
(3538, '1', '59', '4', 'C', '0'),
(3539, '1', '59', '5', 'D', '0'),
(3540, '1', '59', '6', 'E', '0'),
(3551, '1', '60', 'q', 'A', '5'),
(3552, '1', '60', 'q', 'B', '0'),
(3553, '1', '60', 'q', 'C', '0'),
(3554, '1', '60', 'q', 'D', '0'),
(3555, '1', '60', 'q', 'E', '0'),
(3556, '2', '60', 'p', 'A', '5'),
(3557, '2', '60', 'h', 'B', '0'),
(3558, '2', '60', 'p', 'C', '0'),
(3559, '2', '60', 'p', 'D', '0'),
(3560, '2', '60', 'p', 'E', '0'),
(3561, '1', '61', 'sojn', 'A', '5'),
(3562, '1', '61', 'sncskj', 'B', '0'),
(3563, '1', '61', 'cnsdjcn', 'C', '0'),
(3564, '1', '61', 'nsdkj', 'D', '0'),
(3565, '1', '61', 'ksdkj', 'E', '0'),
(3566, '2', '61', 'sac', 'A', '0'),
(3567, '2', '61', 'ascasc', 'B', '5'),
(3568, '2', '61', 'ascasc', 'C', '0'),
(3569, '2', '61', 'ascasc', 'D', '0'),
(3570, '2', '61', 'saccas', 'E', '0');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(3) NOT NULL,
  `nama_kelas` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`) VALUES
(1, 'XIPS A B C'),
(3, 'csacas');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `id_mapel` int(4) NOT NULL,
  `nama_mapel` varchar(40) NOT NULL,
  `kkm` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`id_mapel`, `nama_mapel`, `kkm`) VALUES
(5, 'Matematik', 50),
(7, 'kimia', 0),
(8, 'ekonimi s', 0),
(9, 'Teknologi Informasi Dan K', 0);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL,
  `nama` varchar(70) NOT NULL,
  `panggilan` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `hp` varchar(14) NOT NULL,
  `wa` varchar(14) NOT NULL,
  `tmpl` varchar(60) NOT NULL,
  `tgll` varchar(25) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `pendidikan` varchar(30) NOT NULL,
  `instansi` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `ipk` varchar(10) NOT NULL,
  `pernah_cpns` varchar(10) NOT NULL,
  `nilai` varchar(12) NOT NULL,
  `program` varchar(25) NOT NULL,
  `pembayaran` varchar(25) NOT NULL,
  `tanggal_bayar` varchar(25) NOT NULL,
  `foto_struk` text NOT NULL,
  `foto` varchar(244) NOT NULL,
  `status_pembayaran` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `nama`, `panggilan`, `email`, `hp`, `wa`, `tmpl`, `tgll`, `jk`, `alamat`, `pendidikan`, `instansi`, `jurusan`, `ipk`, `pernah_cpns`, `nilai`, `program`, `pembayaran`, `tanggal_bayar`, `foto_struk`, `foto`, `status_pembayaran`) VALUES
(1, 'Hamid Septian', 'Hamid', 'hamidseptian@gmail.com', '081537553136', '081537553136', 'Padang', '1995-09-18', 'Laki-laki', 'Padang', 'SMA Sederajat', 'STMIK IP', 'SI', '3,61', 'Tidak', '0,0,0', 'CPNS Reguler', 'Transfer', '', '', '', 'lunas');

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `id_paket` int(11) NOT NULL,
  `nama_paket` varchar(50) NOT NULL,
  `boleh_akses` varchar(10) NOT NULL,
  `jenis_ujian` varchar(25) NOT NULL,
  `id_mapel` varchar(5) NOT NULL,
  `id_kelas` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id_paket`, `nama_paket`, `boleh_akses`, `jenis_ujian`, `id_mapel`, `id_kelas`) VALUES
(58, 'wfav', 'Tidak', '', '', ''),
(59, 'Matematika 100', 'Ya', '', '', '3'),
(60, 'Ujian Pertamadd d', 'Ya', 'UTS', '5', '1'),
(61, 'Paket Ujian Akhir', 'Ya', 'UTS', '9', '3');

-- --------------------------------------------------------

--
-- Table structure for table `pembagian_kelas`
--

CREATE TABLE `pembagian_kelas` (
  `id_guru` varchar(5) NOT NULL,
  `id_kelas` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembagian_kelas`
--

INSERT INTO `pembagian_kelas` (`id_guru`, `id_kelas`) VALUES
('4', '1');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `nama_siswa` varchar(25) NOT NULL,
  `nis_siswa` int(16) NOT NULL,
  `alamat_siswa` text NOT NULL,
  `id_kelas` varchar(5) NOT NULL,
  `email_siswa` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nama_siswa`, `nis_siswa`, `alamat_siswa`, `id_kelas`, `email_siswa`, `password`) VALUES
(4, 'Hamid Septian', 123, 'maransi city', '1', '22', '22');

-- --------------------------------------------------------

--
-- Table structure for table `soal`
--

CREATE TABLE `soal` (
  `id_soal` int(11) NOT NULL,
  `id_paket` varchar(10) NOT NULL,
  `nomor_soal` int(5) NOT NULL,
  `soal` text NOT NULL,
  `gambar` text NOT NULL,
  `kunci_jawaban` varchar(5) NOT NULL,
  `pembahasan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soal`
--

INSERT INTO `soal` (`id_soal`, `id_paket`, `nomor_soal`, `soal`, `gambar`, `kunci_jawaban`, `pembahasan`) VALUES
(732, '58', 1, '<p>dqwdwq</p>\r\n', '', 'C', ''),
(733, '58', 2, '<p>ascs</p>\r\n', '', 'E', ''),
(734, '58', 3, '<p>ascssacabskc</p>\r\n', '', '', ''),
(735, '58', 4, '<p>asccsa</p>\r\n', '', '', ''),
(736, '59', 1, '<p>1+1</p>\r\n', '', 'B', ''),
(737, '60', 1, '<p>ascsdvsdv</p>\r\n', '', 'A', ''),
(738, '60', 2, '<p>php adalah bahasa</p>\r\n', '', 'A', ''),
(739, '61', 1, '<p>apa itu komputer</p>\r\n', '', 'A', ''),
(740, '61', 2, '<p>sacascascasc</p>\r\n', '', 'B', '');

-- --------------------------------------------------------

--
-- Table structure for table `ujian`
--

CREATE TABLE `ujian` (
  `id_siswa` varchar(20) NOT NULL,
  `id_paket` varchar(20) NOT NULL,
  `id_soal` varchar(20) NOT NULL,
  `jawaban` varchar(20) NOT NULL,
  `jadwal_ujian` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ujian`
--

INSERT INTO `ujian` (`id_siswa`, `id_paket`, `id_soal`, `jawaban`, `jadwal_ujian`) VALUES
('1', '54', '1', 'C', '2020-03-17-09-20'),
('1', '54', '2', 'D', '2020-03-17-09-20'),
('1', '54', '3', 'C', '2020-03-17-09-20'),
('1', '54', '4', 'D', '2020-03-17-09-20'),
('1', '53', '1', 'D', '2020-03-17-09-35'),
('1', '53', '2', 'C', '2020-03-17-09-35'),
('1', '53', '3', 'D', '2020-03-17-09-35'),
('1', '53', '8', 'D', '2020-03-17-09-35'),
('1', '52', '1', 'A', '2020-03-17-09-36'),
('1', '52', '2', 'A', '2020-03-17-09-36'),
('1', '52', '3', 'A', '2020-03-17-09-36'),
('1', '52', '4', 'A', '2020-03-17-09-36'),
('1', '52', '5', 'A', '2020-03-17-09-36'),
('1', '52', '6', 'A', '2020-03-17-09-36'),
('1', '52', '7', 'A', '2020-03-17-09-36'),
('1', '52', '8', 'A', '2020-03-17-09-36'),
('1', '52', '9', 'A', '2020-03-17-09-36'),
('1', '52', '10', 'A', '2020-03-17-09-36'),
('1', '52', '11', 'B', '2020-03-17-09-36'),
('1', '52', '12', 'B', '2020-03-17-09-36'),
('1', '52', '13', 'B', '2020-03-17-09-36'),
('1', '52', '14', 'B', '2020-03-17-09-36'),
('1', '52', '15', 'B', '2020-03-17-09-36'),
('1', '52', '16', 'B', '2020-03-17-09-36'),
('1', '52', '17', 'B', '2020-03-17-09-36'),
('1', '52', '18', 'A', '2020-03-17-09-36'),
('1', '52', '19', 'A', '2020-03-17-09-36'),
('1', '52', '20', 'A', '2020-03-17-09-36'),
('1', '52', '21', 'A', '2020-03-17-09-36'),
('1', '52', '22', 'A', '2020-03-17-09-36'),
('1', '52', '95', 'B', '2020-03-17-09-36'),
('1', '52', '96', 'A', '2020-03-17-09-36'),
('1', '52', '97', 'A', '2020-03-17-09-36'),
('1', '52', '98', 'A', '2020-03-17-09-36'),
('1', '52', '99', 'B', '2020-03-17-09-36'),
('1', '52', '100', 'A', '2020-03-17-09-36'),
('4', '54', '1', 'C', '2020-03-19-09-58'),
('4', '54', '2', 'D', '2020-03-19-09-58'),
('4', '54', '3', 'C', '2020-03-19-09-58'),
('4', '54', '4', 'B', '2020-03-19-09-58'),
('4', '54', '5', 'B', '2020-03-19-09-58'),
('4', '60', '1', 'A', '2020-03-24-08-57'),
('4', '60', '2', 'A', '2020-03-24-08-57');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(3) NOT NULL,
  `id_user` varchar(40) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` text NOT NULL,
  `password_awal` varchar(250) NOT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `id_user`, `username`, `password`, `password_awal`, `level`) VALUES
(1, '1', 'hamidseptian@gmail.com', '$2y$10$1bwua/liM4EW.Y29MvZm.OCFJR2LvUtz7KMyE87SxTVemLHkoIJQ.', '18091995', 'member');

-- --------------------------------------------------------

--
-- Table structure for table `waktu`
--

CREATE TABLE `waktu` (
  `id_waktu` int(1) NOT NULL,
  `waktu` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `waktu`
--

INSERT INTO `waktu` (`id_waktu`, `waktu`) VALUES
(1, 90);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `jawaban`
--
ALTER TABLE `jawaban`
  ADD PRIMARY KEY (`idj`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`,`panggilan`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jawaban`
--
ALTER TABLE `jawaban`
  MODIFY `idj` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3571;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id_mapel` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `soal`
--
ALTER TABLE `soal`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=741;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
