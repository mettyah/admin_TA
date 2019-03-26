-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2019 at 08:02 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adminanyar`
--

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(9) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `nama_panggilan` varchar(50) NOT NULL,
  `tempat_lahir_siswa` varchar(50) NOT NULL,
  `tanggal_lahir_siswa` date NOT NULL,
  `usia_siswa` int(3) NOT NULL,
  `tinggal_bersama_siswa` varchar(50) NOT NULL,
  `bahasa_sehari_hari_dirumah` int(50) NOT NULL,
  `anak_ke_siswa` int(3) NOT NULL,
  `id_user` int(9) NOT NULL,
  `no_telp_siswa` text NOT NULL,
  `gambar_siswa` varchar(100) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan','') NOT NULL,
  `agama` enum('Islam','Katolik','Protestan','Hindu','Budha','Kong hu cu') NOT NULL,
  `warganegara` enum('Warga Negara Indonesia','Warga Negara Asing','Warga Negara Indonesia Keturunan') NOT NULL,
  `status` enum('Lulus','Tidak Lulus','Belum Lulus','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nama_siswa`, `nama_panggilan`, `tempat_lahir_siswa`, `tanggal_lahir_siswa`, `usia_siswa`, `tinggal_bersama_siswa`, `bahasa_sehari_hari_dirumah`, `anak_ke_siswa`, `id_user`, `no_telp_siswa`, `gambar_siswa`, `jenis_kelamin`, `agama`, `warganegara`, `status`) VALUES
(1, 'metty anugrah', 'metty', 'jember', '2019-03-26', 12, 'Orang Tua', 0, 1, 2, '08990166717', 'gallery/Gambar_siswa/GraffitiCreator213.png', 'Perempuan', 'Islam', 'Warga Negara Indonesia', 'Belum Lulus');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_5` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
