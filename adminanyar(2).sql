-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2019 at 04:34 AM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(9) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `no_telp_admin` text NOT NULL,
  `username_admin` varchar(50) NOT NULL,
  `password_admin` varchar(50) NOT NULL,
  `id_level` int(9) NOT NULL,
  `id_jenis_kelamin` int(9) NOT NULL,
  `NIP` int(30) NOT NULL,
  `Alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `no_telp_admin`, `username_admin`, `password_admin`, `id_level`, `id_jenis_kelamin`, `NIP`, `Alamat`) VALUES
(1, 'met', '9098397289', 'met', '1234', 4, 2, 1902913210, 'jember'),
(2, 'metty', '12132431', 'adminsd', '123', 2, 2, 1243454779, 'bangkok'),
(3, 'hai', '089763578', 'haii', '123', 3, 1, 1234356457, 'sadewgj'),
(4, 'admin sd', '98729817910', 'adminsd', '123', 2, 1, 1324654688, 'sasrtg'),
(5, 'ini', '9765789', 'admintk', '123', 1, 2, 43546576, 'kjasdhsiud');

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
(5, 5, 'Admin Direktur'),
(6, 6, 'Kepala Sekolah');

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
(1, 'amin.jpg', 1),
(5, 'gallery/Bukti_pendaftaran/GraffitiCreator22.png', 2),
(6, 'gallery/Bukti_pendaftaran/GraffitiCreator23.png', 2),
(7, 'gallery/Bukti_pendaftaran/GraffitiCreator24.png', 2),
(8, 'gallery/Bukti_pendaftaran/GraffitiCreator23.png', 2),
(9, 'gallery/Bukti_pendaftaran/Capture.JPG', 2),
(10, 'gallery/Bukti_pendaftaran/Screenshot_1.png', 2),
(11, 'gallery/Bukti_pendaftaran/Screenshot_15.png', 2),
(12, 'gallery/Bukti_pendaftaran/Chrysanthemum.jpg', 2),
(13, 'gallery/Bukti_pendaftaran/Koala.jpg', 2),
(14, 'gallery/Bukti_pendaftaran/Jellyfish.jpg', 2),
(15, 'gallery/Bukti_pendaftaran/Lighthouse.jpg', 2),
(16, 'gallery/Bukti_pendaftaran/Lighthouse1.jpg', 2),
(17, 'gallery/Bukti_pendaftaran/Penguins.jpg', 2),
(18, 'gallery/Bukti_pendaftaran/Penguins1.jpg', 2),
(19, 'gallery/Bukti_pendaftaran/Penguins2.jpg', 2),
(20, 'gallery/Bukti_pendaftaran/Lighthouse2.jpg', 2),
(21, 'gallery/Bukti_pendaftaran/Lighthouse3.jpg', 2);

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

-- --------------------------------------------------------

--
-- Table structure for table `data_awal`
--

CREATE TABLE `data_awal` (
  `id_data` int(10) NOT NULL,
  `id_jenjang` int(9) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `asal_sekolah` varchar(50) NOT NULL,
  `no_hp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_awal`
--

INSERT INTO `data_awal` (`id_data`, `id_jenjang`, `nama`, `alamat`, `asal_sekolah`, `no_hp`) VALUES
(9, 2, 'jjhb', 'ggg', 'hgh', '43436'),
(10, 2, 'kkm', 'tfhv', 'fdfdd', '65654'),
(11, 2, 'haa', 'kel', 'tk', '097868'),
(12, 3, 'aprian', 'tuban', 'sd 1', '0897252718'),
(13, 1, 'heny', 'jkt', 'paud', '089009890'),
(14, 2, 'Haris Abdullah Faqih', 'Perum Tegal Besar', 'TK Darussholah', '085257721303');

-- --------------------------------------------------------

--
-- Table structure for table `data_tempat_tinggal`
--

CREATE TABLE `data_tempat_tinggal` (
  `id_data_tempat_tinggal` int(9) NOT NULL,
  `id_siswa` int(9) NOT NULL,
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
-- Table structure for table `hasil`
--

CREATE TABLE `hasil` (
  `id_hasil` int(9) NOT NULL,
  `id_siswa` int(9) DEFAULT NULL,
  `id_daful` int(9) DEFAULT NULL,
  `hasil` enum('Lulus','Tidak Lulus','Belum Lulus','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_test`
--

CREATE TABLE `jadwal_test` (
  `id_jenjang` int(9) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `tempat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal_test`
--

INSERT INTO `jadwal_test` (`id_jenjang`, `tanggal`, `waktu`, `tempat`) VALUES
(1, '2018-12-03', '08:00:00', 'TK Al - Amien\r\n'),
(2, '2019-02-03', '09:00:00', 'SD 2'),
(3, '2018-12-03', '08:00:00', 'xsxs');

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
  `id_siswa` int(9) NOT NULL,
  `usia_ibu_ketika_lahir` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelahiran_anak`
--

INSERT INTO `kelahiran_anak` (`id_kelahiran_anak`, `lama_dalam_kandungan`, `keadaan_dalam_kandungan`, `keadaan_lahir`, `proses_kelahiran`, `yang_membantu_kelahiran`, `berat_panjang_ketika_lahir`, `id_siswa`, `usia_ibu_ketika_lahir`) VALUES
(1, 7, 'baik dong', 'sehat', 'normal', 'mbah', '2,98kg', 0, 29);

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

-- --------------------------------------------------------

--
-- Table structure for table `kemampuan_anak`
--

CREATE TABLE `kemampuan_anak` (
  `id_kemampuan_anak` int(9) NOT NULL,
  `id_siswa` int(9) NOT NULL,
  `bangun_tidur_sendiri` varchar(25) NOT NULL,
  `membersihkan_tempat_tidur_sendiri` varchar(25) NOT NULL,
  `mandi_sendiri` varchar(25) NOT NULL,
  `gosok_gigi_sendiri` varchar(25) NOT NULL,
  `mengenakan_pakaian_sendiri` varchar(25) NOT NULL,
  `makan_sendiri` varchar(25) NOT NULL,
  `memakai_sepatu_sendiri` varchar(25) NOT NULL,
  `tidur_tidak_ditemani` varchar(25) NOT NULL,
  `bermain_ke_rumah_tangga` varchar(25) NOT NULL,
  `bermain_sendiri` varchar(25) NOT NULL,
  `mengucapkan_terima_kasih` varchar(25) NOT NULL,
  `mengucapkan_salam` varchar(25) NOT NULL,
  `menjawab_salam` varchar(25) NOT NULL,
  `hafal_doa_tertentu` varchar(25) NOT NULL,
  `mengenal_huruf_latin` varchar(25) NOT NULL,
  `mengenal_huruf_arab` varchar(25) NOT NULL,
  `mengenal_angka_sampai_dengan_5` varchar(25) NOT NULL,
  `menulis_angka_sampai_dengan_5` varchar(25) NOT NULL,
  `menulis_huruf_latin` varchar(25) NOT NULL,
  `menulis_huruf_arab` varchar(25) NOT NULL,
  `menggambar_bentuk_sesuatu` varchar(25) NOT NULL,
  `mewarnai_suatu_gambar` varchar(25) NOT NULL,
  `Menceritakan pengalaman` varchar(25) NOT NULL,
  `belajar_baca_quran` varchar(25) NOT NULL,
  `buku_yang_digunakan` varchar(25) NOT NULL,
  `pencapaian_jilid` varchar(25) NOT NULL,
  `surat_pendek_yg_sudah_hafal` text NOT NULL
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
  `golongan_darah` enum('A','B','AB','O') NOT NULL,
  `id_siswa` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kewarganegaraan`
--

CREATE TABLE `kewarganegaraan` (
  `id_kewarganegaraan` int(9) NOT NULL,
  `status_warganegara` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kewarganegaraan`
--

INSERT INTO `kewarganegaraan` (`id_kewarganegaraan`, `status_warganegara`) VALUES
(1, 'Warga Negara Indonesia'),
(2, 'Warga Negara Asing'),
(3, 'Warga Negara Indonesia Keturunan');

-- --------------------------------------------------------

--
-- Table structure for table `kondisi_keluarga`
--

CREATE TABLE `kondisi_keluarga` (
  `id_kondisi_keluarga` int(9) NOT NULL,
  `pertanyaan_kondisi` varchar(100) NOT NULL,
  `jawaban_kondisi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kondisi_keluarga`
--

INSERT INTO `kondisi_keluarga` (`id_kondisi_keluarga`, `pertanyaan_kondisi`, `jawaban_kondisi`) VALUES
(1, 'tidak tau', 'yayay');

-- --------------------------------------------------------

--
-- Table structure for table `kuisioner`
--

CREATE TABLE `kuisioner` (
  `id_kuisioner` int(9) NOT NULL,
  `id_siswa` int(9) NOT NULL,
  `jawaban_soal_1` text NOT NULL,
  `jawaban_soal_2` text NOT NULL,
  `jawaban_soal_3` text NOT NULL,
  `jawaban_soal_4` text NOT NULL,
  `jawaban_soal_5` text NOT NULL,
  `jawaban_soal_6` text NOT NULL,
  `jawaban_soal_7` text NOT NULL,
  `jawaban_soal_8` text NOT NULL,
  `jawaban_soal_9` text NOT NULL,
  `jawaban_soal_10` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kuisioner`
--

INSERT INTO `kuisioner` (`id_kuisioner`, `id_siswa`, `jawaban_soal_1`, `jawaban_soal_2`, `jawaban_soal_3`, `jawaban_soal_4`, `jawaban_soal_5`, `jawaban_soal_6`, `jawaban_soal_7`, `jawaban_soal_8`, `jawaban_soal_9`, `jawaban_soal_10`) VALUES
(1, 2, 'saSA', 'ASas', 'ASas', 'ASas', 'aSas', 'dsdsd', 'dsda', 'sadsad', 'Memperoleh prestasi akademik yang tinggi', 'on'),
(2, 2, 'nmmnbm', 'bnmbnm', 'bnmbnm', 'bnmbnm', 'bnmbnm', 'bnmbnm', 'bnmnbm', 'bnmnbm', 'Mendapatkan pendidikan berimbang antara ilmu umum dan agama', 'on'),
(3, 2, 'xcxcx', 'cxccxxc', 'cxxcxc', 'xcxc', 'xcxc', 'xcxcx', 'xccxccx', 'xcxccxxc', 'Mendapatkan pendidikan berimbang antara ilmu umum dan agama', 'Berhubungan Langsung Dengan Al-Baitul Amien'),
(4, 2, '<script>alert(\'test\');</script>', 'adasd', 'asdsada', 'adssada', 'adsadassd', 'asda', 'asdada', 'adsdasd', 'Menginginkan anak kami menjadi anak yang sholih dan sholihah', 'Dari Rekan Kerja');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_observasi`
--

CREATE TABLE `nilai_observasi` (
  `id_nilai_observasi` int(9) NOT NULL,
  `id_siswa` int(9) NOT NULL,
  `nilai_observasi` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nilai_psikotes`
--

CREATE TABLE `nilai_psikotes` (
  `id_nilai_psikotes` int(9) NOT NULL,
  `nilai_psikotes` int(9) NOT NULL,
  `id_siswa` int(10) NOT NULL
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
  `id_pembayaran` int(9) NOT NULL,
  `id_siswa` int(9) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran_ulang`
--

CREATE TABLE `pendaftaran_ulang` (
  `id_pendaftaran_ulang` int(9) NOT NULL,
  `id_user` int(9) NOT NULL,
  `id_pembayaran` int(9) NOT NULL,
  `id_siswa` int(9) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_sekolah`
--

CREATE TABLE `riwayat_sekolah` (
  `id_riwayat_sekolah` int(9) NOT NULL,
  `asal_sekolah` varchar(100) NOT NULL,
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
  `warganegara` enum('Warga Negara Indonesia','Warga Negara Asing','Warga Negara Indonesia Keturunan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(9) NOT NULL,
  `id_jenjang` int(9) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `email_user` varchar(50) NOT NULL,
  `password_user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `id_jenjang`, `nama_user`, `email_user`, `password_user`) VALUES
(1, 2, 'meet', 'meet12@gmail.com', '123'),
(2, 1, 'hiii', 'hii@yahoo.com', '123'),
(3, 3, 'aprian', 'aprian@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `NIP` (`NIP`),
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
-- Indexes for table `ciri_khas_anak`
--
ALTER TABLE `ciri_khas_anak`
  ADD PRIMARY KEY (`id_ciri_khas_anak`),
  ADD KEY `id_siswa_ciri_khas_anak` (`id_siswa`);

--
-- Indexes for table `data_awal`
--
ALTER TABLE `data_awal`
  ADD PRIMARY KEY (`id_data`),
  ADD KEY `id_jenjang` (`id_jenjang`);

--
-- Indexes for table `data_tempat_tinggal`
--
ALTER TABLE `data_tempat_tinggal`
  ADD PRIMARY KEY (`id_data_tempat_tinggal`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id_gambar`),
  ADD KEY `id_user_gambar` (`id_user`),
  ADD KEY `id_admin_gambar` (`id_admin_gambar`);

--
-- Indexes for table `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id_hasil`),
  ADD KEY `id_siswa` (`id_siswa`),
  ADD KEY `id_daful` (`id_daful`);

--
-- Indexes for table `jadwal_test`
--
ALTER TABLE `jadwal_test`
  ADD PRIMARY KEY (`id_jenjang`);

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
  ADD PRIMARY KEY (`id_kemampuan_anak`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indexes for table `kesehatan_anak`
--
ALTER TABLE `kesehatan_anak`
  ADD PRIMARY KEY (`id_kesehatan_anak`),
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
  ADD PRIMARY KEY (`id_kuisioner`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indexes for table `nilai_observasi`
--
ALTER TABLE `nilai_observasi`
  ADD PRIMARY KEY (`id_nilai_observasi`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indexes for table `nilai_psikotes`
--
ALTER TABLE `nilai_psikotes`
  ADD PRIMARY KEY (`id_nilai_psikotes`),
  ADD KEY `id_siswa` (`id_siswa`);

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
  ADD KEY `id_pembayaran_pendaftaran_baru` (`id_pembayaran`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indexes for table `pendaftaran_ulang`
--
ALTER TABLE `pendaftaran_ulang`
  ADD PRIMARY KEY (`id_pendaftaran_ulang`),
  ADD KEY `id_pendaftaran_ulang_user` (`id_user`),
  ADD KEY `id_pendaftaran_ulang_pembayaran` (`id_pembayaran`),
  ADD KEY `id_siswa` (`id_siswa`);

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
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `id_jenjang` (`id_jenjang`),
  ADD KEY `id_jenjang_2` (`id_jenjang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `admin_level`
--
ALTER TABLE `admin_level`
  MODIFY `id_level` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `agama`
--
ALTER TABLE `agama`
  MODIFY `id_agama` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `bukti_transaksi`
--
ALTER TABLE `bukti_transaksi`
  MODIFY `id_bukti_transaksi` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `ciri_khas_anak`
--
ALTER TABLE `ciri_khas_anak`
  MODIFY `id_ciri_khas_anak` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_awal`
--
ALTER TABLE `data_awal`
  MODIFY `id_data` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `data_tempat_tinggal`
--
ALTER TABLE `data_tempat_tinggal`
  MODIFY `id_data_tempat_tinggal` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id_gambar` int(9) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id_kelahiran_anak` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `keluarga`
--
ALTER TABLE `keluarga`
  MODIFY `id_keluarga` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kemampuan_anak`
--
ALTER TABLE `kemampuan_anak`
  MODIFY `id_kemampuan_anak` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kesehatan_anak`
--
ALTER TABLE `kesehatan_anak`
  MODIFY `id_kesehatan_anak` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kewarganegaraan`
--
ALTER TABLE `kewarganegaraan`
  MODIFY `id_kewarganegaraan` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kondisi_keluarga`
--
ALTER TABLE `kondisi_keluarga`
  MODIFY `id_kondisi_keluarga` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kuisioner`
--
ALTER TABLE `kuisioner`
  MODIFY `id_kuisioner` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `nilai_observasi`
--
ALTER TABLE `nilai_observasi`
  MODIFY `id_nilai_observasi` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `nilai_psikotes`
--
ALTER TABLE `nilai_psikotes`
  MODIFY `id_nilai_psikotes` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nilai_tes`
--
ALTER TABLE `nilai_tes`
  MODIFY `id_nilai_tes` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id_pendaftaran_ulang` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `riwayat_sekolah`
--
ALTER TABLE `riwayat_sekolah`
  MODIFY `id_riwayat_sekolah` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `saudara_kandung_anak`
--
ALTER TABLE `saudara_kandung_anak`
  MODIFY `id_saudara_kandung` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- Constraints for table `ciri_khas_anak`
--
ALTER TABLE `ciri_khas_anak`
  ADD CONSTRAINT `ciri_khas_anak_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `data_awal`
--
ALTER TABLE `data_awal`
  ADD CONSTRAINT `data_awal_ibfk_1` FOREIGN KEY (`id_jenjang`) REFERENCES `jenjang` (`id_jenjang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `data_tempat_tinggal`
--
ALTER TABLE `data_tempat_tinggal`
  ADD CONSTRAINT `data_tempat_tinggal_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`);

--
-- Constraints for table `gambar`
--
ALTER TABLE `gambar`
  ADD CONSTRAINT `gambar_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `gambar_ibfk_2` FOREIGN KEY (`id_admin_gambar`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hasil`
--
ALTER TABLE `hasil`
  ADD CONSTRAINT `hasil_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`),
  ADD CONSTRAINT `hasil_ibfk_3` FOREIGN KEY (`id_daful`) REFERENCES `pendaftaran_ulang` (`id_pendaftaran_ulang`);

--
-- Constraints for table `jadwal_test`
--
ALTER TABLE `jadwal_test`
  ADD CONSTRAINT `jadwal_test_ibfk_1` FOREIGN KEY (`id_jenjang`) REFERENCES `jenjang` (`id_jenjang`);

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
-- Constraints for table `kemampuan_anak`
--
ALTER TABLE `kemampuan_anak`
  ADD CONSTRAINT `kemampuan_anak_ibfk_2` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`);

--
-- Constraints for table `kesehatan_anak`
--
ALTER TABLE `kesehatan_anak`
  ADD CONSTRAINT `kesehatan_anak_ibfk_2` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nilai_observasi`
--
ALTER TABLE `nilai_observasi`
  ADD CONSTRAINT `nilai_observasi_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`);

--
-- Constraints for table `nilai_psikotes`
--
ALTER TABLE `nilai_psikotes`
  ADD CONSTRAINT `nilai_psikotes_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`);

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
  ADD CONSTRAINT `notifikasi_ibfk_3` FOREIGN KEY (`id_jenis_notifikasi`) REFERENCES `jenis_notifikasi` (`id_jenis_notifikasi`) ON UPDATE CASCADE;

--
-- Constraints for table `pendaftaran_baru`
--
ALTER TABLE `pendaftaran_baru`
  ADD CONSTRAINT `pendaftaran_baru_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pendaftaran_baru_ibfk_2` FOREIGN KEY (`id_pembayaran`) REFERENCES `pembayaran` (`id_pembayaran`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pendaftaran_baru_ibfk_3` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`);

--
-- Constraints for table `pendaftaran_ulang`
--
ALTER TABLE `pendaftaran_ulang`
  ADD CONSTRAINT `pendaftaran_ulang_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pendaftaran_ulang_ibfk_2` FOREIGN KEY (`id_pembayaran`) REFERENCES `pembayaran` (`id_pembayaran`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pendaftaran_ulang_ibfk_3` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`);

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
  ADD CONSTRAINT `siswa_ibfk_5` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_jenjang`) REFERENCES `jenjang` (`id_jenjang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
