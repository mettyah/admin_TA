-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2018 at 05:59 AM
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
-- Database: `adminanyar`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(9) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `no_telp_admin` text NOT NULL,
  `username_admin` varchar(50) NOT NULL,
  `password_admin` varchar(50) NOT NULL,
  `id_level` int(9) NOT NULL,
  `id_jenis_kelamin` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `no_telp_admin`, `username_admin`, `password_admin`, `id_level`, `id_jenis_kelamin`) VALUES
(1, 'Jon', '081235295632', 'jon', 'jon', 4, 1),
(2, 'Bahrul', '081235235235', 'bahrul', 'bahrul', 5, 1),
(3, 'admintk', '025895', 'admintk', 'admintk', 1, 1),
(4, 'adminsd', '02369999', 'adminsd', 'adminsd', 2, 1),
(7, 'adminsmp', '081235295632', 'adminsmp', 'adminsmp', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin_level`
--

CREATE TABLE `admin_level` (
  `id_level` int(9) NOT NULL,
  `level` int(11) NOT NULL,
  `nama_level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_level`
--

INSERT INTO `admin_level` (`id_level`, `level`, `nama_level`) VALUES
(1, 1, 'Admin TK'),
(2, 2, 'Admin SD'),
(3, 3, 'Admin SMP'),
(4, 4, 'Admin Sekretaris'),
(5, 5, 'Admin Direktur');

-- --------------------------------------------------------

--
-- Table structure for table `agama`
--

CREATE TABLE `agama` (
  `id_agama` int(9) NOT NULL,
  `nama_agama` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agama`
--

INSERT INTO `agama` (`id_agama`, `nama_agama`) VALUES
(1, 'Islam'),
(2, 'Kristen'),
(3, 'Katolik'),
(4, 'Hindu'),
(5, 'Budha'),
(6, 'Kong Hu Cu');

-- --------------------------------------------------------

--
-- Table structure for table `bukti_transaksi`
--

CREATE TABLE `bukti_transaksi` (
  `id_bukti_transaksi` int(9) NOT NULL,
  `nama_bukti_gambar` varchar(255) NOT NULL,
  `id_user` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bukti_transaksi`
--

INSERT INTO `bukti_transaksi` (`id_bukti_transaksi`, `nama_bukti_gambar`, `id_user`) VALUES
(1, 'luffy.jpg', 7),
(2, 'IMG_0145.JPG', 8);

-- --------------------------------------------------------

--
-- Table structure for table `bukti_transaksi_daftar_ulang`
--

CREATE TABLE `bukti_transaksi_daftar_ulang` (
  `id_bukti_transaksi_daftar_ulang` int(9) NOT NULL,
  `nama_gambar` varchar(255) NOT NULL,
  `id_user` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bukti_transaksi_daftar_ulang`
--

INSERT INTO `bukti_transaksi_daftar_ulang` (`id_bukti_transaksi_daftar_ulang`, `nama_gambar`, `id_user`) VALUES
(1, 'luffy_daftar_ulang.jpg', 7),
(2, 'purtahu.JPG', 8);

-- --------------------------------------------------------

--
-- Table structure for table `ciri_khas_anak`
--

CREATE TABLE `ciri_khas_anak` (
  `id_ciri_khas_anak` int(9) NOT NULL,
  `ciri_fisik_yang_menonjol` varchar(50) NOT NULL,
  `ciri_kepribadian_yang_menonjol` varchar(50) NOT NULL,
  `bakat_khusus_yang_menonjol` varchar(50) NOT NULL,
  `prestasi_yang_pernah_diraih` varchar(50) NOT NULL,
  `id_siswa` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ciri_khas_anak`
--

INSERT INTO `ciri_khas_anak` (`id_ciri_khas_anak`, `ciri_fisik_yang_menonjol`, `ciri_kepribadian_yang_menonjol`, `bakat_khusus_yang_menonjol`, `prestasi_yang_pernah_diraih`, `id_siswa`) VALUES
(1, 'Tangan bisa melar (Gomu Gomu No)', 'Tidak bisa diatur', 'Gear 4th', '1.5 Milyar Berry', 2),
(2, 'Jari', 'Suka Ngoding', 'Android Dev', 'Juara 1 Nasional Ngoding tercepat', 3);

-- --------------------------------------------------------

--
-- Table structure for table `data_tempat_tinggal`
--

CREATE TABLE `data_tempat_tinggal` (
  `id_data_tempat_tinggal` int(9) NOT NULL,
  `status_tempat_tinggal` varchar(50) NOT NULL,
  `jarak_rumah_ke_sekolah` varchar(50) NOT NULL,
  `luas_bangunan_rumah` varchar(50) NOT NULL,
  `jumlah_kamar` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE `gambar` (
  `id_gambar` int(9) NOT NULL,
  `nama_gambar` varchar(255) NOT NULL,
  `id_user` int(9) NOT NULL,
  `id_admin_gambar` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `golongan_darah`
--

CREATE TABLE `golongan_darah` (
  `id_golongan_darah` int(9) NOT NULL,
  `golongan_darah` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `golongan_darah`
--

INSERT INTO `golongan_darah` (`id_golongan_darah`, `golongan_darah`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'AB'),
(4, 'O'),
(5, '-');

-- --------------------------------------------------------

--
-- Table structure for table `hasil`
--

CREATE TABLE `hasil` (
  `id_hasil` int(9) NOT NULL,
  `total_nilai` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_kelamin`
--

CREATE TABLE `jenis_kelamin` (
  `id_jenis_kelamin` int(9) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_kelamin`
--

INSERT INTO `jenis_kelamin` (`id_jenis_kelamin`, `jenis_kelamin`) VALUES
(1, 'LAKI - LAKI'),
(2, 'PEREMPUAN');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_notifikasi`
--

CREATE TABLE `jenis_notifikasi` (
  `id_jenis_notifikasi` int(9) NOT NULL,
  `jenis_notifikasi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_notifikasi`
--

INSERT INTO `jenis_notifikasi` (`id_jenis_notifikasi`, `jenis_notifikasi`) VALUES
(1, 'Jenis 1'),
(2, 'Jenis 2');

-- --------------------------------------------------------

--
-- Table structure for table `jenjang`
--

CREATE TABLE `jenjang` (
  `id_jenjang` int(9) NOT NULL,
  `nama_jenjang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenjang`
--

INSERT INTO `jenjang` (`id_jenjang`, `nama_jenjang`) VALUES
(1, 'TK'),
(2, 'SD'),
(3, 'SMP');

-- --------------------------------------------------------

--
-- Table structure for table `kelahiran_anak`
--

CREATE TABLE `kelahiran_anak` (
  `id_kelahiran_anak` int(9) NOT NULL,
  `lama_dalam_kandungan` int(9) NOT NULL,
  `keadaan_dalam_kandungan` varchar(100) NOT NULL,
  `keadaan_lahir` varchar(100) NOT NULL,
  `proses_kelahiran` varchar(100) NOT NULL,
  `yang_membantu_kelahiran` varchar(100) NOT NULL,
  `berat_panjang_ketika_lahir` varchar(100) NOT NULL,
  `usia_ibu_ketika_lahir` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `keluarga`
--

CREATE TABLE `keluarga` (
  `id_keluarga` int(9) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `tanggal_lahir_ayah` date NOT NULL,
  `tanggal_lahir_ibu` date NOT NULL,
  `pendidikan_terakhir_ayah` varchar(50) NOT NULL,
  `pendidikan_terakhir_ibu` varchar(50) NOT NULL,
  `jurusan_yang_diambil_ayah` varchar(50) NOT NULL,
  `jurusan_yang_diambil_ibu` varchar(50) NOT NULL,
  `nama_instansi_ayah_bekerja` varchar(50) NOT NULL,
  `nama_instansi_ibu_bekerja` varchar(50) NOT NULL,
  `pangkat_golongan_ayah` varchar(50) NOT NULL,
  `pangkat_golongan_ibu` varchar(50) NOT NULL,
  `lama_kerja_ayah_perhari` varchar(50) NOT NULL,
  `lama_kerja_ibu_perhari` varchar(50) NOT NULL,
  `penghasilan_perbulan_ayah` int(50) NOT NULL,
  `penghasilan_perbulan_ibu` int(50) NOT NULL,
  `jumlah_tanggungan_ayah` int(50) NOT NULL,
  `jumlah_tanggungan_ibu` int(50) NOT NULL,
  `alamat_rumah_ayah` varchar(50) NOT NULL,
  `alamat_rumah_ibu` varchar(50) NOT NULL,
  `alamat_kantor_ayah` varchar(50) NOT NULL,
  `alamat_kantor_ibu` varchar(50) NOT NULL,
  `telp_rumah_hp_ayah` int(13) NOT NULL,
  `telp_rumah_hp_ibu` int(13) NOT NULL,
  `telp_kantor_ayah` int(13) NOT NULL,
  `telp_kantor_ibu` int(13) NOT NULL,
  `kesempatan_berkomunikasi_dg_ayah` varchar(100) NOT NULL,
  `kesempatan_berkomunikasi_dg_ibu` varchar(100) NOT NULL,
  `id_siswa` int(9) NOT NULL,
  `id_agama_ayah` int(9) NOT NULL,
  `id_agama_ibu` int(9) NOT NULL,
  `id_kewarganegaraan_ayah` int(9) NOT NULL,
  `id_kewarganegaraan_ibu` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keluarga`
--

INSERT INTO `keluarga` (`id_keluarga`, `nama_ayah`, `nama_ibu`, `tanggal_lahir_ayah`, `tanggal_lahir_ibu`, `pendidikan_terakhir_ayah`, `pendidikan_terakhir_ibu`, `jurusan_yang_diambil_ayah`, `jurusan_yang_diambil_ibu`, `nama_instansi_ayah_bekerja`, `nama_instansi_ibu_bekerja`, `pangkat_golongan_ayah`, `pangkat_golongan_ibu`, `lama_kerja_ayah_perhari`, `lama_kerja_ibu_perhari`, `penghasilan_perbulan_ayah`, `penghasilan_perbulan_ibu`, `jumlah_tanggungan_ayah`, `jumlah_tanggungan_ibu`, `alamat_rumah_ayah`, `alamat_rumah_ibu`, `alamat_kantor_ayah`, `alamat_kantor_ibu`, `telp_rumah_hp_ayah`, `telp_rumah_hp_ibu`, `telp_kantor_ayah`, `telp_kantor_ibu`, `kesempatan_berkomunikasi_dg_ayah`, `kesempatan_berkomunikasi_dg_ibu`, `id_siswa`, `id_agama_ayah`, `id_agama_ibu`, `id_kewarganegaraan_ayah`, `id_kewarganegaraan_ibu`) VALUES
(1, 'Monkey D Dragon', 'Nyonya Dragon', '1945-06-20', '1945-06-20', 'Pemimpin Pasukan Revolusioner', 'Pemimpin Pasukan Revolusioner', 'Bajak Laut', 'Bajak Laut', 'Pasukan Revolusioner', 'Pasukan Revolusioner', 'A', 'A', '24 Jam', '24 Jam', 1000000000, 1000000000, 500000, 500000, 'Baltigo', 'Baltigo', 'Baltigo', 'Baltigo', 81081081, 81081082, 81081083, 81081084, 'Tidak pernah', 'Tidak pernah', 2, 2, 3, 2, 1),
(2, 'Ayah Anas', 'Ibu Anas', '1945-06-03', '1945-06-26', 'S3', 'S3', 'Hukum', 'Ekonomi', 'Pengadilan', 'Bank', 'A', 'B', '8', '7', 10000000, 8000000, 2000000, 1000000, 'Jember', 'Bondowoso', 'Jakarta', 'Tangerang', 812365478, 823216469, 123456, 123457, 'Setiap bulan', 'Setiap Minggu', 3, 1, 1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `kemampuan_anak`
--

CREATE TABLE `kemampuan_anak` (
  `id_kemampuan_anak` int(9) NOT NULL,
  `aktifitas` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kesehatan_anak`
--

CREATE TABLE `kesehatan_anak` (
  `id_kesehatan_anak` int(9) NOT NULL,
  `berat_badan` int(9) NOT NULL,
  `tinggi_badan` varchar(10) NOT NULL,
  `minum_asi_selama` int(3) NOT NULL,
  `perkembangan_dalam_2bulan` varchar(100) NOT NULL,
  `kelainan_dalam_tubuh` varchar(100) NOT NULL,
  `makanan_tambahan_kurang_dari_2bulan` varchar(100) NOT NULL,
  `imunisasi_yang_diberikan` varchar(100) NOT NULL,
  `alergi_makanan_dan_obat` varchar(100) NOT NULL,
  `penglihatan` varchar(100) NOT NULL,
  `pendengaran` varchar(100) NOT NULL,
  `penampilan` varchar(100) NOT NULL,
  `id_golongan_darah` int(9) NOT NULL,
  `id_siswa` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kesehatan_anak`
--

INSERT INTO `kesehatan_anak` (`id_kesehatan_anak`, `berat_badan`, `tinggi_badan`, `minum_asi_selama`, `perkembangan_dalam_2bulan`, `kelainan_dalam_tubuh`, `makanan_tambahan_kurang_dari_2bulan`, `imunisasi_yang_diberikan`, `alergi_makanan_dan_obat`, `penglihatan`, `pendengaran`, `penampilan`, `id_golongan_darah`, `id_siswa`) VALUES
(1, 50, '170', 1, 'Baik', 'Tidak ada', 'Tidak ada', 'Imunisasi biasa', 'Alergi Laut', 'Terlalu tajam', 'Baik', 'Standart', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `kewarganegaraan`
--

CREATE TABLE `kewarganegaraan` (
  `id_kewarganegaraan` int(9) NOT NULL,
  `status_warganegara` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kewarganegaraan`
--

INSERT INTO `kewarganegaraan` (`id_kewarganegaraan`, `status_warganegara`) VALUES
(1, 'Warga Negara Indonesia'),
(2, 'Warga Negara Asing');

-- --------------------------------------------------------

--
-- Table structure for table `kondisi_keluarga`
--

CREATE TABLE `kondisi_keluarga` (
  `id_kondisi_keluarga` int(9) NOT NULL,
  `pertanyaan_kondisi` varchar(100) NOT NULL,
  `jawaban_kondisi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kuisioner`
--

CREATE TABLE `kuisioner` (
  `id_kuisioner` int(9) NOT NULL,
  `pertanyaan` varchar(100) NOT NULL,
  `jawaban` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nilai_psikotes`
--

CREATE TABLE `nilai_psikotes` (
  `id_nilai_psikotes` int(9) NOT NULL,
  `nilai_psikotes` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nilai_tes`
--

CREATE TABLE `nilai_tes` (
  `id_nilai_tes` int(9) NOT NULL,
  `matematika` int(9) NOT NULL,
  `ipa` int(9) NOT NULL,
  `bahasa_indonesia` int(9) NOT NULL,
  `bahasa_inggris` int(9) NOT NULL,
  `psikologi` int(9) NOT NULL,
  `jumlah_nilai_tes` int(9) NOT NULL,
  `rata_rata_nilai_tes` int(9) NOT NULL,
  `id_siswa` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai_tes`
--

INSERT INTO `nilai_tes` (`id_nilai_tes`, `matematika`, `ipa`, `bahasa_indonesia`, `bahasa_inggris`, `psikologi`, `jumlah_nilai_tes`, `rata_rata_nilai_tes`, `id_siswa`) VALUES
(1, 100, 100, 100, 100, 100, 500, 100, 2),
(4, 100, 30, 100, 100, 100, 500, 100, 3),
(6, 40, 40, 40, 40, 40, 200, 40, 8),
(10, 50, 50, 50, 50, 50, 250, 50, 10);

-- --------------------------------------------------------

--
-- Table structure for table `notifikasi`
--

CREATE TABLE `notifikasi` (
  `id_notifikasi` int(9) NOT NULL,
  `judul_notifikasi` varchar(50) NOT NULL,
  `isi_notifikasi` varchar(50) NOT NULL,
  `status_notifikasi` varchar(50) NOT NULL,
  `id_user` int(9) NOT NULL,
  `id_jenis_notifikasi` int(9) NOT NULL,
  `id_admin` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(9) NOT NULL,
  `status_pembayaran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `status_pembayaran`) VALUES
(1, 'LUNAS'),
(2, 'BELUM LUNAS');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran_baru`
--

CREATE TABLE `pendaftaran_baru` (
  `id_pendaftaran_baru` int(9) NOT NULL,
  `id_user` int(9) NOT NULL,
  `id_pembayaran` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftaran_baru`
--

INSERT INTO `pendaftaran_baru` (`id_pendaftaran_baru`, `id_user`, `id_pembayaran`) VALUES
(1, 7, 1),
(2, 8, 2);

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran_ulang`
--

CREATE TABLE `pendaftaran_ulang` (
  `id_pendaftaran_ulang` int(9) NOT NULL,
  `id_user` int(9) NOT NULL,
  `id_pembayaran` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftaran_ulang`
--

INSERT INTO `pendaftaran_ulang` (`id_pendaftaran_ulang`, `id_user`, `id_pembayaran`) VALUES
(1, 7, 1),
(3, 8, 2);

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_sekolah`
--

CREATE TABLE `riwayat_sekolah` (
  `id_riwayat_sekolah` int(9) NOT NULL,
  `nama_sekolah` varchar(50) NOT NULL,
  `tahun_masuk` int(4) NOT NULL,
  `tahun_lulus` int(4) NOT NULL,
  `alamat_sekolah` varchar(50) NOT NULL,
  `kesulitan_saat_sekolah` varchar(100) NOT NULL,
  `aktifitas_yang_disukai` varchar(100) NOT NULL,
  `id_siswa` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `saudara_kandung_anak`
--

CREATE TABLE `saudara_kandung_anak` (
  `id_saudara_kandung` int(9) NOT NULL,
  `nama_saudara_kandung` varchar(50) NOT NULL,
  `pendidikan_saudara_kandung` varchar(50) NOT NULL,
  `kelas_saudara_kandung` varchar(50) NOT NULL,
  `no_induk_saudara_kandung` int(50) NOT NULL,
  `id_jenis_kelamin` int(9) NOT NULL,
  `id_siswa` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saudara_kandung_anak`
--

INSERT INTO `saudara_kandung_anak` (`id_saudara_kandung`, `nama_saudara_kandung`, `pendidikan_saudara_kandung`, `kelas_saudara_kandung`, `no_induk_saudara_kandung`, `id_jenis_kelamin`, `id_siswa`) VALUES
(1, 'Portgas D Ace', 'Bajak Laut', 'Divisi Kedua Bajak Laut Shirohige', 123456, 1, 2);

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
  `anak_ke_siswa` int(3) NOT NULL,
  `id_user` int(9) NOT NULL,
  `id_jenis_kelamin` int(9) NOT NULL,
  `id_agama` int(9) NOT NULL,
  `id_warganegara` int(9) NOT NULL,
  `id_status_diterima` int(9) NOT NULL,
  `no_telp_siswa` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nama_siswa`, `nama_panggilan`, `tempat_lahir_siswa`, `tanggal_lahir_siswa`, `usia_siswa`, `tinggal_bersama_siswa`, `anak_ke_siswa`, `id_user`, `id_jenis_kelamin`, `id_agama`, `id_warganegara`, `id_status_diterima`, `no_telp_siswa`) VALUES
(2, 'Monkey D Luffy', 'luffy', 'East Blue', '1997-06-12', 20, 'Sunny Go', 1, 7, 1, 2, 1, 3, '081235234568'),
(3, 'Anas Abiem Bahar', 'Anas', 'Tanggul', '1997-06-12', 20, 'Ortu', 1, 6, 1, 1, 1, 3, '0814563216'),
(8, 'M. bahrul Arif', 'Bahrul', 'Mojokerto', '1997-02-02', 20, 'Ortu', 1, 5, 1, 2, 1, 3, '654789'),
(10, 'Adi Nugraha', 'Purtahu', 'Tuban', '1997-06-12', 20, 'Ortu', 1, 8, 1, 4, 2, 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `status_diterima`
--

CREATE TABLE `status_diterima` (
  `id_status_diterima` int(9) NOT NULL,
  `status_diterima` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_diterima`
--

INSERT INTO `status_diterima` (`id_status_diterima`, `status_diterima`) VALUES
(1, 'LULUS'),
(2, 'TIDAK LULUS'),
(3, 'BELUM LULUS');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(9) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `email_user` varchar(50) NOT NULL,
  `password_user` varchar(50) NOT NULL,
  `id_jenjang` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `email_user`, `password_user`, `id_jenjang`) VALUES
(5, 'Bahrul', 'bahrul@gmail.com', 'bahrul', 3),
(6, 'Anas', 'anas@gmail.com', 'anas', 2),
(7, 'luffy', 'luffy@onepiece.com', 'luffy', 1),
(8, 'Adi', 'adi@gmail.com', 'adi', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `id_level_admin` (`id_level`),
  ADD KEY `id_jenis_kelamin_admin` (`id_jenis_kelamin`);

--
-- Indexes for table `admin_level`
--
ALTER TABLE `admin_level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `agama`
--
ALTER TABLE `agama`
  ADD PRIMARY KEY (`id_agama`);

--
-- Indexes for table `bukti_transaksi`
--
ALTER TABLE `bukti_transaksi`
  ADD PRIMARY KEY (`id_bukti_transaksi`),
  ADD KEY `id_user_bukti_transaksi` (`id_user`);

--
-- Indexes for table `bukti_transaksi_daftar_ulang`
--
ALTER TABLE `bukti_transaksi_daftar_ulang`
  ADD PRIMARY KEY (`id_bukti_transaksi_daftar_ulang`),
  ADD KEY `id_bukti_transaksi_daftar_ulang_user` (`id_user`);

--
-- Indexes for table `ciri_khas_anak`
--
ALTER TABLE `ciri_khas_anak`
  ADD PRIMARY KEY (`id_ciri_khas_anak`),
  ADD KEY `id_siswa_ciri_khas_anak` (`id_siswa`);

--
-- Indexes for table `data_tempat_tinggal`
--
ALTER TABLE `data_tempat_tinggal`
  ADD PRIMARY KEY (`id_data_tempat_tinggal`);

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id_gambar`),
  ADD KEY `id_user_gambar` (`id_user`),
  ADD KEY `id_admin_gambar` (`id_admin_gambar`);

--
-- Indexes for table `golongan_darah`
--
ALTER TABLE `golongan_darah`
  ADD PRIMARY KEY (`id_golongan_darah`);

--
-- Indexes for table `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id_hasil`);

--
-- Indexes for table `jenis_kelamin`
--
ALTER TABLE `jenis_kelamin`
  ADD PRIMARY KEY (`id_jenis_kelamin`);

--
-- Indexes for table `jenis_notifikasi`
--
ALTER TABLE `jenis_notifikasi`
  ADD PRIMARY KEY (`id_jenis_notifikasi`);

--
-- Indexes for table `jenjang`
--
ALTER TABLE `jenjang`
  ADD PRIMARY KEY (`id_jenjang`);

--
-- Indexes for table `kelahiran_anak`
--
ALTER TABLE `kelahiran_anak`
  ADD PRIMARY KEY (`id_kelahiran_anak`);

--
-- Indexes for table `keluarga`
--
ALTER TABLE `keluarga`
  ADD PRIMARY KEY (`id_keluarga`),
  ADD KEY `id_siswa_keluarga` (`id_siswa`),
  ADD KEY `id_agama_ayah` (`id_agama_ayah`),
  ADD KEY `id_agama_ibu` (`id_agama_ibu`),
  ADD KEY `id_kewarganegaraan_ayah` (`id_kewarganegaraan_ayah`),
  ADD KEY `id_kewarganegaraan_ibu` (`id_kewarganegaraan_ibu`);

--
-- Indexes for table `kemampuan_anak`
--
ALTER TABLE `kemampuan_anak`
  ADD PRIMARY KEY (`id_kemampuan_anak`);

--
-- Indexes for table `kesehatan_anak`
--
ALTER TABLE `kesehatan_anak`
  ADD PRIMARY KEY (`id_kesehatan_anak`),
  ADD KEY `id_golongan_darah_siswa` (`id_golongan_darah`),
  ADD KEY `id_siswa_kesehatan_anak` (`id_siswa`);

--
-- Indexes for table `kewarganegaraan`
--
ALTER TABLE `kewarganegaraan`
  ADD PRIMARY KEY (`id_kewarganegaraan`);

--
-- Indexes for table `kondisi_keluarga`
--
ALTER TABLE `kondisi_keluarga`
  ADD PRIMARY KEY (`id_kondisi_keluarga`);

--
-- Indexes for table `kuisioner`
--
ALTER TABLE `kuisioner`
  ADD PRIMARY KEY (`id_kuisioner`);

--
-- Indexes for table `nilai_psikotes`
--
ALTER TABLE `nilai_psikotes`
  ADD PRIMARY KEY (`id_nilai_psikotes`);

--
-- Indexes for table `nilai_tes`
--
ALTER TABLE `nilai_tes`
  ADD PRIMARY KEY (`id_nilai_tes`),
  ADD KEY `id_nilai_siswa` (`id_siswa`);

--
-- Indexes for table `notifikasi`
--
ALTER TABLE `notifikasi`
  ADD PRIMARY KEY (`id_notifikasi`),
  ADD KEY `id_user_notifikasi` (`id_user`),
  ADD KEY `id_jenis_notifikasi` (`id_jenis_notifikasi`),
  ADD KEY `id_notifikasi_admin` (`id_admin`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `pendaftaran_baru`
--
ALTER TABLE `pendaftaran_baru`
  ADD PRIMARY KEY (`id_pendaftaran_baru`),
  ADD KEY `id_user_pendaftaran_baru` (`id_user`),
  ADD KEY `id_pembayaran_pendaftaran_baru` (`id_pembayaran`);

--
-- Indexes for table `pendaftaran_ulang`
--
ALTER TABLE `pendaftaran_ulang`
  ADD PRIMARY KEY (`id_pendaftaran_ulang`),
  ADD KEY `id_pendaftaran_ulang_user` (`id_user`),
  ADD KEY `id_pendaftaran_ulang_pembayaran` (`id_pembayaran`);

--
-- Indexes for table `riwayat_sekolah`
--
ALTER TABLE `riwayat_sekolah`
  ADD PRIMARY KEY (`id_riwayat_sekolah`),
  ADD KEY `id_siswa_riwayat_sekolah` (`id_siswa`);

--
-- Indexes for table `saudara_kandung_anak`
--
ALTER TABLE `saudara_kandung_anak`
  ADD PRIMARY KEY (`id_saudara_kandung`),
  ADD KEY `id_jenis_kelamin_saudara_kandung` (`id_jenis_kelamin`),
  ADD KEY `id_siswa_saudara_kandung_anak` (`id_siswa`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_jenis_kelamin_siswa` (`id_jenis_kelamin`),
  ADD KEY `id_agama_siswa` (`id_agama`),
  ADD KEY `id_warganegara_siswa` (`id_warganegara`),
  ADD KEY `id_status_diterima_siswa` (`id_status_diterima`);

--
-- Indexes for table `status_diterima`
--
ALTER TABLE `status_diterima`
  ADD PRIMARY KEY (`id_status_diterima`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_jenjang_user` (`id_jenjang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `admin_level`
--
ALTER TABLE `admin_level`
  MODIFY `id_level` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `agama`
--
ALTER TABLE `agama`
  MODIFY `id_agama` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `bukti_transaksi`
--
ALTER TABLE `bukti_transaksi`
  MODIFY `id_bukti_transaksi` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bukti_transaksi_daftar_ulang`
--
ALTER TABLE `bukti_transaksi_daftar_ulang`
  MODIFY `id_bukti_transaksi_daftar_ulang` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ciri_khas_anak`
--
ALTER TABLE `ciri_khas_anak`
  MODIFY `id_ciri_khas_anak` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id_gambar` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `golongan_darah`
--
ALTER TABLE `golongan_darah`
  MODIFY `id_golongan_darah` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id_hasil` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jenis_kelamin`
--
ALTER TABLE `jenis_kelamin`
  MODIFY `id_jenis_kelamin` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jenis_notifikasi`
--
ALTER TABLE `jenis_notifikasi`
  MODIFY `id_jenis_notifikasi` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jenjang`
--
ALTER TABLE `jenjang`
  MODIFY `id_jenjang` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kelahiran_anak`
--
ALTER TABLE `kelahiran_anak`
  MODIFY `id_kelahiran_anak` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `keluarga`
--
ALTER TABLE `keluarga`
  MODIFY `id_keluarga` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kemampuan_anak`
--
ALTER TABLE `kemampuan_anak`
  MODIFY `id_kemampuan_anak` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kesehatan_anak`
--
ALTER TABLE `kesehatan_anak`
  MODIFY `id_kesehatan_anak` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kewarganegaraan`
--
ALTER TABLE `kewarganegaraan`
  MODIFY `id_kewarganegaraan` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kondisi_keluarga`
--
ALTER TABLE `kondisi_keluarga`
  MODIFY `id_kondisi_keluarga` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kuisioner`
--
ALTER TABLE `kuisioner`
  MODIFY `id_kuisioner` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nilai_psikotes`
--
ALTER TABLE `nilai_psikotes`
  MODIFY `id_nilai_psikotes` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nilai_tes`
--
ALTER TABLE `nilai_tes`
  MODIFY `id_nilai_tes` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `notifikasi`
--
ALTER TABLE `notifikasi`
  MODIFY `id_notifikasi` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pendaftaran_baru`
--
ALTER TABLE `pendaftaran_baru`
  MODIFY `id_pendaftaran_baru` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pendaftaran_ulang`
--
ALTER TABLE `pendaftaran_ulang`
  MODIFY `id_pendaftaran_ulang` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `riwayat_sekolah`
--
ALTER TABLE `riwayat_sekolah`
  MODIFY `id_riwayat_sekolah` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `saudara_kandung_anak`
--
ALTER TABLE `saudara_kandung_anak`
  MODIFY `id_saudara_kandung` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `status_diterima`
--
ALTER TABLE `status_diterima`
  MODIFY `id_status_diterima` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `admin_level` (`id_level`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `admin_ibfk_2` FOREIGN KEY (`id_jenis_kelamin`) REFERENCES `jenis_kelamin` (`id_jenis_kelamin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bukti_transaksi`
--
ALTER TABLE `bukti_transaksi`
  ADD CONSTRAINT `bukti_transaksi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bukti_transaksi_daftar_ulang`
--
ALTER TABLE `bukti_transaksi_daftar_ulang`
  ADD CONSTRAINT `bukti_transaksi_daftar_ulang_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ciri_khas_anak`
--
ALTER TABLE `ciri_khas_anak`
  ADD CONSTRAINT `ciri_khas_anak_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `gambar`
--
ALTER TABLE `gambar`
  ADD CONSTRAINT `gambar_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `gambar_ibfk_2` FOREIGN KEY (`id_admin_gambar`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `keluarga`
--
ALTER TABLE `keluarga`
  ADD CONSTRAINT `keluarga_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `keluarga_ibfk_2` FOREIGN KEY (`id_agama_ayah`) REFERENCES `agama` (`id_agama`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `keluarga_ibfk_3` FOREIGN KEY (`id_agama_ibu`) REFERENCES `agama` (`id_agama`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `keluarga_ibfk_4` FOREIGN KEY (`id_kewarganegaraan_ayah`) REFERENCES `kewarganegaraan` (`id_kewarganegaraan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `keluarga_ibfk_5` FOREIGN KEY (`id_kewarganegaraan_ibu`) REFERENCES `kewarganegaraan` (`id_kewarganegaraan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kesehatan_anak`
--
ALTER TABLE `kesehatan_anak`
  ADD CONSTRAINT `kesehatan_anak_ibfk_1` FOREIGN KEY (`id_golongan_darah`) REFERENCES `golongan_darah` (`id_golongan_darah`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kesehatan_anak_ibfk_2` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nilai_tes`
--
ALTER TABLE `nilai_tes`
  ADD CONSTRAINT `nilai_tes_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `notifikasi`
--
ALTER TABLE `notifikasi`
  ADD CONSTRAINT `notifikasi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `notifikasi_ibfk_2` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `notifikasi_ibfk_3` FOREIGN KEY (`id_jenis_notifikasi`) REFERENCES `jenis_notifikasi` (`id_jenis_notifikasi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pendaftaran_baru`
--
ALTER TABLE `pendaftaran_baru`
  ADD CONSTRAINT `pendaftaran_baru_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pendaftaran_baru_ibfk_2` FOREIGN KEY (`id_pembayaran`) REFERENCES `pembayaran` (`id_pembayaran`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pendaftaran_ulang`
--
ALTER TABLE `pendaftaran_ulang`
  ADD CONSTRAINT `pendaftaran_ulang_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pendaftaran_ulang_ibfk_2` FOREIGN KEY (`id_pembayaran`) REFERENCES `pembayaran` (`id_pembayaran`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `riwayat_sekolah`
--
ALTER TABLE `riwayat_sekolah`
  ADD CONSTRAINT `riwayat_sekolah_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `saudara_kandung_anak`
--
ALTER TABLE `saudara_kandung_anak`
  ADD CONSTRAINT `saudara_kandung_anak_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `saudara_kandung_anak_ibfk_2` FOREIGN KEY (`id_jenis_kelamin`) REFERENCES `jenis_kelamin` (`id_jenis_kelamin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`id_jenis_kelamin`) REFERENCES `jenis_kelamin` (`id_jenis_kelamin`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `siswa_ibfk_2` FOREIGN KEY (`id_warganegara`) REFERENCES `kewarganegaraan` (`id_kewarganegaraan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `siswa_ibfk_3` FOREIGN KEY (`id_agama`) REFERENCES `agama` (`id_agama`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `siswa_ibfk_4` FOREIGN KEY (`id_status_diterima`) REFERENCES `status_diterima` (`id_status_diterima`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `siswa_ibfk_5` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_jenjang`) REFERENCES `jenjang` (`id_jenjang`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
