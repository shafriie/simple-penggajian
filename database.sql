-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Aug 27, 2018 at 06:31 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ismail_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_divisi`
--

CREATE TABLE `tb_divisi` (
  `id_divisi` char(5) NOT NULL,
  `nama_divisi` varchar(15) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_divisi`
--

INSERT INTO `tb_divisi` (`id_divisi`, `nama_divisi`, `keterangan`) VALUES
('DV01', 'Vice Director', ''),
('DV02', 'General Manager', ''),
('DV03', 'Marketing', ''),
('DV04', 'Accounting', ''),
('DV05', 'HRD', ''),
('DV06', 'IT', ''),
('DV09', 'Administrasi', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_gaji`
--

CREATE TABLE `tb_gaji` (
  `ID_gaji` int(11) NOT NULL,
  `NIP` int(11) NOT NULL,
  `id_jabatan` char(5) NOT NULL,
  `tanggal` date NOT NULL,
  `data_absen` int(11) NOT NULL,
  `gaji_pokok` int(11) NOT NULL,
  `tunjangan_jabatan` int(11) NOT NULL,
  `pajak` int(11) NOT NULL,
  `gaji_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_gaji`
--

INSERT INTO `tb_gaji` (`ID_gaji`, `NIP`, `id_jabatan`, `tanggal`, `data_absen`, `gaji_pokok`, `tunjangan_jabatan`, `pajak`, `gaji_total`) VALUES
(1, 3, 'jb02', '0000-00-00', 0, 300000, 200000, 1500000, 500000),
(9, 1, 'JB02', '0000-00-00', 500000, 5000000, 400000, 250000, 4650000),
(10, 1, 'JB02', '0000-00-00', 5000000, 5000000, 400000, 250000, 150000),
(11, 1, 'JB02', '0000-00-00', 200000, 5000000, 400000, 250000, 4950000),
(12, 2, 'JB03', '0000-00-00', 200000, 4000000, 200000, 150000, 3850000),
(13, 1, 'JB02', '0000-00-00', 100000, 5000000, 400000, 250000, 5050000),
(14, 1, 'JB02', '2018-04-13', 5000, 5000000, 400000, 250000, 5145000),
(15, 4, 'JB04', '2018-04-06', 500000, 3000000, 150000, 100000, 2550000),
(16, 1, 'JB02', '0000-00-00', 5000, 5000000, 400000, 250000, 5145000),
(17, 1, 'JB02', '2018-04-02', 0, 5000000, 400000, 250000, 5150000),
(18, 1, 'JB02', '2018-04-03', 0, 5000000, 400000, 250000, 5150000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_jabatan`
--

CREATE TABLE `tb_jabatan` (
  `id_jabatan` char(5) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `gaji_pokok` int(11) NOT NULL,
  `tunjangan_jabatan` int(11) NOT NULL,
  `pajak` decimal(11,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jabatan`
--

INSERT INTO `tb_jabatan` (`id_jabatan`, `jabatan`, `gaji_pokok`, `tunjangan_jabatan`, `pajak`) VALUES
('1', 'HRD', 6000000, 900000, '0.05'),
('2', 'Manager', 10000000, 1500000, '0.05'),
('3', 'Pegawai', 22000000, 4400000, '0.05');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jenis_kelamin` enum('Perempuan','Laki-Laki') NOT NULL,
  `alamat` longtext NOT NULL,
  `no_telp` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `jabatan` int(11) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `email`, `jenis_kelamin`, `alamat`, `no_telp`, `username`, `password`, `jabatan`, `status`) VALUES
(3, 'Fitri Rahayu', '', '', '', '', 'fitri', '123', 1, 1),
(5, 'Ari Budiman', '', '', '', '', 'ari', '123', 2, 1),
(12, 'Ismail Hasan', '', '', '', '', 'ismail', '123', 3, 1),
(13, 'Jajang Arifin', 'jajang@gmail.com', 'Laki-Laki', 'Priuk', '021-32943294923432', 'kurakura', '123', 3, 1),
(15, 'Jajang Arifin', 'jajang@gmail.com', 'Laki-Laki', 'Priuk', '021-32943294923432', 'kurakura1', '123', 3, 1),
(16, 'asdsasds', 'sadasd@gmail.com', 'Laki-Laki', 'asdadas', 'asdasas', 'aasdasdsa', '123', 1, 1),
(17, 'asdas', 'asdasda@gmail.com', 'Laki-Laki', 'asddads', '2321321', 'sadsadsa', 'asadasdas', 1, 1),
(18, 'asdasdas', 'safrisyamsudin123@gmail.com', 'Laki-Laki', 'asdasdsa', 'sadasa', 'hasduhas', '123', 1, 1),
(19, 'asdasdsa', 'sdasd@gmail.com', 'Laki-Laki', 'asdasd', 'sadsad', 'asaas', 'asdadsa', 3, 1),
(20, 'sajdnasj', 'antanija40@gmail.com', 'Laki-Laki', 'asdasdsa', 'asdads', 'safri113', '113', 1, 1),
(21, 'Haryanti S.Pd', 'safrisyamsudin123@gmail.com', 'Laki-Laki', 'asdas', 'asdas', 'jasdhyasdgy21', 'saas', 1, 1),
(22, 'sajdnasj', 'safrisyamsudin123@gmail.com', 'Laki-Laki', 'sadadas', 'aasdasd', 'jdsahuaywegfywe', '123', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_divisi`
--
ALTER TABLE `tb_divisi`
  ADD PRIMARY KEY (`id_divisi`);

--
-- Indexes for table `tb_gaji`
--
ALTER TABLE `tb_gaji`
  ADD PRIMARY KEY (`ID_gaji`);

--
-- Indexes for table `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_gaji`
--
ALTER TABLE `tb_gaji`
  MODIFY `ID_gaji` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
