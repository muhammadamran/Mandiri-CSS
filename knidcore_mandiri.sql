-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 11, 2020 at 05:24 PM
-- Server version: 5.6.45
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `knidcore_mandiri`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_log`
--

CREATE TABLE `tb_log` (
  `log_id` int(100) NOT NULL,
  `log_user` varchar(100) NOT NULL,
  `log_type` varchar(100) NOT NULL,
  `log_date` datetime NOT NULL,
  `remark` varchar(800) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_log`
--

INSERT INTO `tb_log` (`log_id`, `log_user`, `log_type`, `log_date`, `remark`) VALUES
(1, 'Administrator', 'login', '2019-12-01 18:46:12', ' '),
(2, 'Eam', 'login', '2019-12-01 18:49:12', ' '),
(3, 'muhammad.amran', 'login', '2019-12-01 19:07:12', ' '),
(4, 'Administrator', 'login', '2019-12-01 19:08:12', ' '),
(5, 'muhammad.amran', 'login', '2019-12-02 16:32:12', ' '),
(6, 'Administrator', 'login', '2019-12-02 17:37:12', ' '),
(7, 'Administrator', 'login', '2019-12-02 18:33:12', ' '),
(8, 'Administrator', 'login', '2019-12-03 19:18:12', ' '),
(9, 'Administrator', 'login', '2019-12-03 20:51:12', ' '),
(10, 'Administrator', 'login', '2019-12-04 11:17:12', ' '),
(11, 'Administrator', 'login', '2019-12-04 17:20:12', ' '),
(12, 'Administrator', 'login', '2019-12-05 09:16:12', ' '),
(13, 'administrator', 'login', '2019-12-09 08:18:12', ' '),
(14, 'administrator', 'login', '2019-12-12 16:51:12', ' '),
(15, 'Administrator', 'login', '2019-12-13 14:16:12', ' '),
(16, 'muhammad.amran', 'login', '2019-12-13 14:17:12', ' '),
(17, 'Administrator', 'login', '2019-12-24 08:39:12', ' '),
(18, 'Administrator', 'login', '2019-12-24 08:40:12', ' '),
(19, 'muhammad.amran', 'login', '2019-12-24 08:41:12', ' '),
(20, 'Administrator', 'login', '2020-01-20 03:18:01', ' '),
(21, 'administrator', 'login', '2020-02-06 10:47:02', ' ');

-- --------------------------------------------------------

--
-- Table structure for table `tb_news`
--

CREATE TABLE `tb_news` (
  `id_news` int(11) NOT NULL,
  `gambar` varchar(225) NOT NULL,
  `title` varchar(225) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `url` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL,
  `nm` enum('1','2','3','4') NOT NULL,
  `tgl` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_note`
--

CREATE TABLE `tb_note` (
  `id_note` int(11) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `note` varchar(500) NOT NULL,
  `tgl_note` date NOT NULL,
  `user_name` varchar(225) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_parameter`
--

CREATE TABLE `tb_parameter` (
  `id_par` int(11) NOT NULL,
  `id_logbook` int(11) NOT NULL,
  `hasil_review` varchar(255) NOT NULL,
  `tindak_lanjut` varchar(255) NOT NULL,
  `report` varchar(255) NOT NULL,
  `CHR` int(11) DEFAULT NULL,
  `bobot` varchar(50) DEFAULT NULL,
  `saran_perbaikan` varchar(255) NOT NULL,
  `tanggapan` varchar(255) NOT NULL,
  `target_date` date NOT NULL,
  `process_date` date NOT NULL,
  `komentar` varchar(255) DEFAULT NULL,
  `reviewer` int(11) DEFAULT NULL,
  `tema_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `Risiko` varchar(225) DEFAULT NULL,
  `Dampak` varchar(225) DEFAULT NULL,
  `Mitigasi` varchar(225) DEFAULT NULL,
  `KP` varchar(225) DEFAULT NULL,
  `dashboard` varchar(225) DEFAULT NULL,
  `status_ccr` varchar(225) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_parameter`
--

INSERT INTO `tb_parameter` (`id_par`, `id_logbook`, `hasil_review`, `tindak_lanjut`, `report`, `CHR`, `bobot`, `saran_perbaikan`, `tanggapan`, `target_date`, `process_date`, `komentar`, `reviewer`, `tema_id`, `status`, `Risiko`, `Dampak`, `Mitigasi`, `KP`, `dashboard`, `status_ccr`) VALUES
(9, 8, 'adad', 'Yes', 'Quick Report', 0, 'Major', 'ssefse', 'rsgsrg', '2019-12-31', '0000-00-00', '', 0, 1, 0, NULL, NULL, NULL, NULL, 'Asumsi & Penentuan Limit', 'Working Paper Kualitas NAK'),
(6, 8, 'dawd', 'No', 'Quick Report', 0, 'Major', 'awd', 'aefaef', '2019-12-31', '0000-00-00', '', 0, 1, 0, NULL, NULL, NULL, NULL, 'Kesesuaian Tujuan Penggunaan', 'Working Paper Supervisi Loan Monitoring'),
(7, 8, 'uih', 'No', 'Quick Report', 0, 'Major', 'tfyuyi', 'p[kpoij', '2019-12-31', '0000-00-00', '', 0, 2, 0, NULL, NULL, NULL, NULL, 'blank', 'Working Paper Supervisi Loan Monitoring'),
(8, 8, 'efsef', 'No', 'Quick Report', 0, 'Major', 'sefef', 'efesf', '2019-12-31', '0000-00-00', '', 0, 3, 0, NULL, NULL, NULL, NULL, 'Non Financial', 'Working Paper Supervisi Loan Monitoring');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tema`
--

CREATE TABLE `tb_tema` (
  `id_tema` int(11) NOT NULL,
  `tipe_id` int(11) NOT NULL,
  `tema` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tema`
--

INSERT INTO `tb_tema` (`id_tema`, `tipe_id`, `tema`) VALUES
(1, 1, 'Pelaksanaan Trade Checking Informasi'),
(2, 1, 'Ketertiban Pemenuhan Covenant/Informasi/Laporan Keuangan '),
(3, 1, 'Deteksi Ultimate Owner, Bonafiditas & Kapabilitas'),
(4, 1, 'Historical Pembayaran Kewajiban'),
(5, 1, 'Dukungan Positif Dari Perusahaan Afiliasi atau Grup usaha'),
(6, 2, 'Kewajaran Penetapan Asumsi  Dalam  Proyeksi Keuangan'),
(7, 2, 'Posisi Baki Debet Terhadap Underlying Aset Dan Kesesuaian Penggunaan Fasilitas Kredit'),
(8, 2, 'Kewajaran Penetapan Asumsi Dalam Perhitungan Limit Kredit'),
(9, 2, 'Penyaluran Transaksi Aktivitas Keuangan'),
(10, 2, 'Past Performance dan Kinerja Keuangan'),
(11, 2, 'Kemampuan Penyediaan Self  Financing'),
(12, 2, 'Pengalaman Para Pengurus Dan Pemegang Saham Dalam Menjalankan Usaha Yang Dibiayai'),
(13, 2, 'Current Issues Sektor Industri  Yang Dibiayai'),
(14, 2, 'Pengaruh Perubahan Regulasi/Kebijakan Pemerintah Yang Bedampak Pada Usaha Debitur'),
(15, 2, 'Tingkat Persaingan Di Bidang Usaha Debitur'),
(16, 2, 'Kontinuitas Produksi Dan Suplai Barang/Bahan Baku'),
(17, 2, 'Kewajaran Obyek Kredit (Khusus KI)'),
(18, 2, 'Kesesuaian Antara Struktur Kredit Dengan Pola  Usaha'),
(19, 2, 'Risiko Utama Telah Terindentifikasi Dan Termitigasi Dengan Tepat'),
(20, 2, 'Kesesuaian Penetapan Ketentuan/Syarat Penarikan/ Covenant Kredit'),
(21, 2, 'Pemenuhan Covenant Yang Terkait Dengan Repayment Capacity'),
(22, 2, 'Pelaksanaan dan Laporan OTS'),
(23, 3, 'Penyerahan agunan oleh Debitur'),
(24, 3, 'Kualitas Agunan'),
(25, 3, 'Kepemilikan dan Legalitas Agunan'),
(26, 3, 'Kewajaran nilai agunan'),
(27, 3, 'Penilaian bonafiditas pemberi guarantor (jika ada PG/CG/Cashflow Guarantee)'),
(28, 3, 'Penilaian Stock dan Piutang (hasil dari merchandise inspection)'),
(29, 3, 'Perhitungan SCR  Agunan NFA dan FA'),
(30, 3, 'Penutupan asuransi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tipe`
--

CREATE TABLE `tb_tipe` (
  `id_tipe` int(11) NOT NULL,
  `nama_tipe` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tipe`
--

INSERT INTO `tb_tipe` (`id_tipe`, `nama_tipe`) VALUES
(1, 'Reputation & Character'),
(2, 'Repayment Capacity'),
(3, 'Recovery Rate');

-- --------------------------------------------------------

--
-- Table structure for table `tb_unit_kerja_master`
--

CREATE TABLE `tb_unit_kerja_master` (
  `uk_id` int(100) NOT NULL,
  `uk_name` varchar(100) NOT NULL,
  `uk_description` varchar(500) DEFAULT NULL,
  `uk_remark` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_unit_kerja_master`
--

INSERT INTO `tb_unit_kerja_master` (`uk_id`, `uk_name`, `uk_description`, `uk_remark`) VALUES
(1, 'Sector Multifinance & Automotive', '0', '0'),
(2, 'Sector Transport', '0', '0'),
(3, 'Sector Mining & Energy, Oil & Gas', '0', '0'),
(4, 'Sector Plantation / Agro Business 1', '0', '0'),
(5, 'Sector Plantation / Agro Business 2', '0', '0'),
(6, 'Sector Trading (Komoditas)', '0', '0'),
(7, 'Sector Healthcare, FMCG & Other Services', '0', '0'),
(8, 'Sector Construction, Property & Hotel', '0', '0'),
(9, 'Sector Textile & Telco', '0', '0'),
(10, 'CMB Palembang', '0', '0'),
(11, 'CMB Jkt Kelapa Gading', '0', '0'),
(12, 'CMB Jkt Thamrin', '0', '0'),
(13, 'CMB Bandung', '0', '0'),
(14, 'CMB Jkt Sudirman', '0', '0'),
(15, 'CMB Medan', '0', '0'),
(16, 'CMB Surabaya ', '0', '0'),
(17, 'CMB Jkt Kota', '0', '0'),
(18, 'CMB Plaza Mandiri', '0', '0'),
(19, 'CMB Pekanbaru', '0', '0'),
(20, 'CMB Makassar', '0', '0'),
(21, 'CMB Semarang', '0', '0'),
(22, 'CMB Jkt Imam Bonjol', '0', '0'),
(23, 'CMB Denpasar', '0', '0'),
(24, 'CMB Balikpapan', '0', '0'),
(25, 'CMB Banjarmasin', '0', '0'),
(26, 'CMB Bekasi', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tb_upload_bidangusaha`
--

CREATE TABLE `tb_upload_bidangusaha` (
  `id_bd` int(11) NOT NULL,
  `CIF` double DEFAULT NULL,
  `DEBITUR_BD_USAHA` varchar(225) DEFAULT NULL,
  `UNIT_KERJA_BD` varchar(500) DEFAULT NULL,
  `GROUP_BD_USAHA` varchar(225) DEFAULT NULL,
  `BIDANG_USAHA` varchar(225) DEFAULT NULL,
  `LIMIT_BD` double DEFAULT NULL,
  `BADE_BD` double DEFAULT NULL,
  `month_bidangusaha` date NOT NULL,
  `type_bd` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_upload_bidangusaha`
--

INSERT INTO `tb_upload_bidangusaha` (`id_bd`, `CIF`, `DEBITUR_BD_USAHA`, `UNIT_KERJA_BD`, `GROUP_BD_USAHA`, `BIDANG_USAHA`, `LIMIT_BD`, `BADE_BD`, `month_bidangusaha`, `type_bd`) VALUES
(1, 1154101, 'ABC', 'CMB SEMARANG', 'CMB1', 'Migas', 301000000000, 151000000000, '2019-07-01', 'Corporate\r'),
(2, 1154102, 'ABC', 'CMB SEMARANG', 'CMB2', 'Air Mineral', 100000000000, 56125000000, '2019-08-01', 'Corporate\r'),
(3, 1154103, 'QWERTY', 'CMB SEMARANG', 'CMB3', 'Distributor', -101000000000, -38882000000, '2019-07-01', 'Corporate\r'),
(4, 1154104, 'SIEMENS', 'CMB SEMARANG', 'CMB4', 'Distributor', -302000000000, -134000000000, '2019-07-01', 'Corporate\r'),
(5, 1154105, 'POS', 'CMB SEMARANG', 'CMB5', 'Distributor', -503000000000, -229000000000, '2019-07-01', 'Corporate\r'),
(6, 1154106, 'WIKA', 'CMB BANDUNG', 'CMB6', 'Distributor', -704000000000, -324000000000, '2019-07-01', 'Corporate\r'),
(7, 1154107, 'ADHI', 'CMB BANDUNG', 'CMB7', 'Migas', -905000000000, -419000000000, '2019-07-01', 'Corporate\r'),
(8, 1154108, 'BANK SUMUT', 'CMB BANDUNG', 'CMB8', 'Distributor', -1110000000000, -514000000000, '2019-07-01', 'Corporate\r'),
(9, 1154109, 'PELINDO', 'CMB BANDUNG', 'CMB9', 'Distributor', -1310000000000, -609000000000, '2019-07-01', 'Corporate\r'),
(10, 1154110, 'KUMIS LOGISTIC', 'CMB BANDUNG', 'CMB10', 'Distributor', -1510000000000, -704000000000, '2019-07-01', 'Corporate\r'),
(11, 1154111, 'MSI', 'CMB JKT SUDIRMAN', 'CMB11', 'Distributor', -1710000000000, -799000000000, '2019-07-01', 'Corporate\r'),
(12, 1154112, 'ACER', 'CMB JKT SUDIRMAN', 'CMB12', 'Distributor', -1910000000000, -894000000000, '2019-07-01', 'Corporate\r'),
(13, 1154113, 'HP', 'CMB JKT SUDIRMAN', 'CMB13', 'Migas', -2110000000000, -989000000000, '2019-07-01', 'Corporate\r'),
(14, 1154114, 'IPHONE', 'CMB JKT SUDIRMAN', 'CMB14', 'Distributor', -2310000000000, -1080000000000, '2019-07-01', 'Corporate\r'),
(15, 1154115, 'SAMSUNG', 'CMB JKT SUDIRMAN', 'CMB15', 'Distributor', -2510000000000, -1180000000000, '2019-07-01', 'Corporate\r'),
(16, 1154116, 'LENOVO', 'CMB Medan', 'CMB16', 'Distributor', -2710000000000, -1270000000000, '2019-07-01', 'Corporate\r'),
(17, 1154117, 'DJARUM', 'CMB Medan', 'CMB17', 'Distributor', -2920000000000, -1370000000000, '2019-07-01', 'Corporate\r'),
(18, 1154118, 'INDO CYBER', 'CMB Medan', 'CMB18', 'Distributor', -3120000000000, -1460000000000, '2019-07-01', 'Corporate\r'),
(19, 1154119, 'GLOBAL EARPORATE', 'CMB Medan', 'CMB19', 'Migas', -3320000000000, -1560000000000, '2019-07-01', 'Corporate\r'),
(20, 1154120, 'BUKALAPAK', 'CMB JKT KOTA', 'CMB20', 'Distributor', -3520000000000, -1650000000000, '2019-07-01', 'Corporate\r'),
(21, 1154121, 'TOKOPEDIA', 'CMB JKT KOTA', 'CMB21', 'Distributor', -3720000000000, -1750000000000, '2019-07-01', 'Corporate\r'),
(22, 1154122, 'SHOOPE', 'CMB JKT KOTA', 'CMB22', 'Distributor', -3920000000000, -1840000000000, '2019-07-01', 'Corporate\r'),
(23, 1154123, 'LAZADA', 'CMB JKT KOTA', 'CMB23', 'Distributor', -4120000000000, -1940000000000, '2019-07-01', 'Corporate\r'),
(24, 1154124, 'AMAZON', 'CMB JKT KOTA', 'CMB24', 'Distributor', -4320000000000, -2030000000000, '2019-07-01', 'Corporate\r');

-- --------------------------------------------------------

--
-- Table structure for table `tb_upload_logbook`
--

CREATE TABLE `tb_upload_logbook` (
  `id_logbook` int(100) NOT NULL,
  `date_time_log` date NOT NULL,
  `kd_cabang` varchar(225) NOT NULL,
  `kanwil_nm` varchar(225) NOT NULL,
  `area_log` varchar(225) NOT NULL,
  `CBC_NAME` varchar(225) NOT NULL,
  `CIF` double NOT NULL,
  `no_rek` double NOT NULL,
  `nm_customer` varchar(225) NOT NULL,
  `JNS_KRD` varchar(225) NOT NULL,
  `BUC_REPORTING` varchar(225) NOT NULL,
  `BUC_PENGELOLA` varchar(225) NOT NULL,
  `BUC_FLOOR` varchar(225) NOT NULL,
  `KOLL_LOG` varchar(225) NOT NULL,
  `KOL_LOG` varchar(225) NOT NULL,
  `restru_no` varchar(225) NOT NULL,
  `LIMIT_LOG` varchar(500) NOT NULL,
  `BADE_LOG` varchar(500) NOT NULL,
  `BILPRN_LOG` varchar(225) NOT NULL,
  `BILINT_LOG` varchar(225) NOT NULL,
  `PDDAYS` varchar(225) NOT NULL,
  `IPDDAY` varchar(225) NOT NULL,
  `BANK_FG_LOG` varchar(225) NOT NULL,
  `CURTYP_LOG` varchar(225) NOT NULL,
  `KURS_LOG` varchar(225) NOT NULL,
  `NMGROUP_LOG` varchar(225) NOT NULL,
  `RATE_LOG` double NOT NULL,
  `ORGAMT` double NOT NULL,
  `CBAL` double NOT NULL,
  `BISEKT` double NOT NULL,
  `MATDAT_LOG` date NOT NULL,
  `ACCSTS` varchar(225) NOT NULL,
  `PKDATE_LOG` date NOT NULL,
  `KODE` varchar(225) NOT NULL,
  `NON_BPR_LOG` varchar(225) NOT NULL,
  `NAMA_KANWIL_II` varchar(225) NOT NULL,
  `NPL` varchar(225) NOT NULL,
  `npl_buc` varchar(225) NOT NULL,
  `LAR` varchar(225) NOT NULL,
  `FRML_1` varchar(225) NOT NULL,
  `FRML_2` varchar(225) NOT NULL,
  `fg` varchar(225) NOT NULL,
  `fg_IDR_VA` varchar(225) NOT NULL,
  `Kanwil_lar` varchar(225) NOT NULL,
  `Revolv` varchar(225) NOT NULL,
  `Expertise` text NOT NULL,
  `month_logbook` date NOT NULL,
  `type_logbook` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'No Action',
  `status2` varchar(50) DEFAULT NULL,
  `BidangUsaha` varchar(225) NOT NULL,
  `status_tindaklanjut` varchar(50) DEFAULT NULL,
  `send_tindaklanjut` int(11) NOT NULL DEFAULT '0',
  `reviewer` varchar(100) DEFAULT NULL,
  `status_ccr` text,
  `limit_ex` varchar(225) DEFAULT NULL,
  `bade_bank_lain` varchar(225) DEFAULT NULL,
  `gusaha` varchar(225) DEFAULT NULL,
  `rating` varchar(225) DEFAULT NULL,
  `ioutlook` varchar(225) DEFAULT NULL,
  `PG` varchar(225) DEFAULT NULL,
  `HP` varchar(225) DEFAULT NULL,
  `C_1` varchar(225) DEFAULT NULL,
  `C_2` varchar(225) DEFAULT NULL,
  `C_3` varchar(225) DEFAULT NULL,
  `C_4` varchar(225) DEFAULT NULL,
  `C_5` varchar(225) DEFAULT NULL,
  `C_6` varchar(225) DEFAULT NULL,
  `C_7` varchar(225) DEFAULT NULL,
  `C_8` varchar(225) DEFAULT NULL,
  `C_9` varchar(225) DEFAULT NULL,
  `C_10` varchar(225) DEFAULT NULL,
  `C_11` varchar(225) DEFAULT NULL,
  `C_12` varchar(225) DEFAULT NULL,
  `C_13` varchar(225) DEFAULT NULL,
  `C_14` varchar(225) DEFAULT NULL,
  `Periode` varchar(225) DEFAULT NULL,
  `UsulanKolektibilitas` varchar(255) DEFAULT NULL,
  `UsulanWatchlist` varchar(225) DEFAULT NULL,
  `AccountStrategy` varchar(225) DEFAULT NULL,
  `CatatanUpBU` varchar(225) DEFAULT NULL,
  `TindakLanjut` varchar(225) DEFAULT NULL,
  `Time_line` varchar(225) DEFAULT NULL,
  `KemampuanMembayar` varchar(225) DEFAULT NULL,
  `KinerjaUsaha` varchar(225) DEFAULT NULL,
  `ProspekUsaha` varchar(225) DEFAULT NULL,
  `ParameterWatchlist` varchar(225) DEFAULT NULL,
  `c_HasilReview` varchar(225) DEFAULT NULL,
  `c_TindakLanjut` varchar(225) DEFAULT NULL,
  `c_Timeline` varchar(225) DEFAULT NULL,
  `c_Status` varchar(225) DEFAULT NULL,
  `ap_HasilReview` varchar(225) DEFAULT NULL,
  `ap_TindakLanjut` varchar(225) DEFAULT NULL,
  `ap_Timeline` varchar(225) DEFAULT NULL,
  `ap_Status` varchar(225) DEFAULT NULL,
  `IBA` varchar(225) DEFAULT NULL,
  `EK` varchar(225) DEFAULT NULL,
  `nt_AccountStrategy` varchar(225) DEFAULT NULL,
  `WT` varchar(225) DEFAULT NULL,
  `D_1` varchar(225) DEFAULT NULL,
  `D_2` varchar(225) DEFAULT NULL,
  `D_3` varchar(225) DEFAULT NULL,
  `D_4` varchar(225) DEFAULT NULL,
  `D_5` varchar(225) DEFAULT NULL,
  `D_6` varchar(225) DEFAULT NULL,
  `D_7` varchar(225) DEFAULT NULL,
  `D_8` varchar(225) DEFAULT NULL,
  `D_9` varchar(225) DEFAULT NULL,
  `D_10` varchar(225) DEFAULT NULL,
  `D_11` varchar(225) DEFAULT NULL,
  `D_12` varchar(225) DEFAULT NULL,
  `D_13` varchar(225) DEFAULT NULL,
  `D_14` varchar(225) DEFAULT NULL,
  `D_15` varchar(225) DEFAULT NULL,
  `D_16` varchar(225) DEFAULT NULL,
  `D_17` varchar(225) DEFAULT NULL,
  `NT_1` varchar(225) DEFAULT NULL,
  `NT_2` varchar(225) DEFAULT NULL,
  `NT_3` varchar(225) DEFAULT NULL,
  `NT_4` varchar(225) DEFAULT NULL,
  `NT_5` varchar(225) DEFAULT NULL,
  `NT_6` varchar(225) DEFAULT NULL,
  `LK_1` varchar(225) DEFAULT NULL,
  `LK_2` varchar(225) DEFAULT NULL,
  `LK_3` varchar(225) DEFAULT NULL,
  `Sales1` varchar(225) DEFAULT NULL,
  `Sales2` varchar(225) DEFAULT NULL,
  `Sales3` varchar(225) DEFAULT NULL,
  `EBITDA1` varchar(225) DEFAULT NULL,
  `EBITDA2` varchar(225) DEFAULT NULL,
  `EBITDA3` varchar(225) DEFAULT NULL,
  `NPM1` varchar(225) DEFAULT NULL,
  `NPM2` varchar(225) DEFAULT NULL,
  `NPM3` varchar(225) DEFAULT NULL,
  `CR1` varchar(225) DEFAULT NULL,
  `CR2` varchar(225) DEFAULT NULL,
  `CR3` varchar(225) DEFAULT NULL,
  `Leverage1` varchar(225) DEFAULT NULL,
  `Leverage2` varchar(225) DEFAULT NULL,
  `Leverage3` varchar(225) DEFAULT NULL,
  `EBITDAI1` varchar(225) DEFAULT NULL,
  `EBITDAI2` varchar(225) DEFAULT NULL,
  `EBITDAI3` varchar(225) DEFAULT NULL,
  `DSCR1` varchar(225) DEFAULT NULL,
  `DSCR2` varchar(225) DEFAULT NULL,
  `DSCR3` varchar(225) DEFAULT NULL,
  `Debt1` varchar(225) DEFAULT NULL,
  `Debt2` varchar(225) DEFAULT NULL,
  `Debt3` varchar(225) DEFAULT NULL,
  `CF_1` varchar(225) DEFAULT NULL,
  `CF_2` varchar(225) DEFAULT NULL,
  `CF_3` varchar(225) DEFAULT NULL,
  `limit_ex_NA` varchar(225) DEFAULT NULL,
  `bade_bank_lain_NA` varchar(225) DEFAULT NULL,
  `gusaha_NA` varchar(225) DEFAULT NULL,
  `rating_NA` varchar(225) DEFAULT NULL,
  `ioutlook_NA` varchar(225) DEFAULT NULL,
  `PG_NA` varchar(225) DEFAULT NULL,
  `HP_NA` varchar(225) DEFAULT NULL,
  `BidangUsaha_NA` varchar(225) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_upload_logbook`
--

INSERT INTO `tb_upload_logbook` (`id_logbook`, `date_time_log`, `kd_cabang`, `kanwil_nm`, `area_log`, `CBC_NAME`, `CIF`, `no_rek`, `nm_customer`, `JNS_KRD`, `BUC_REPORTING`, `BUC_PENGELOLA`, `BUC_FLOOR`, `KOLL_LOG`, `KOL_LOG`, `restru_no`, `LIMIT_LOG`, `BADE_LOG`, `BILPRN_LOG`, `BILINT_LOG`, `PDDAYS`, `IPDDAY`, `BANK_FG_LOG`, `CURTYP_LOG`, `KURS_LOG`, `NMGROUP_LOG`, `RATE_LOG`, `ORGAMT`, `CBAL`, `BISEKT`, `MATDAT_LOG`, `ACCSTS`, `PKDATE_LOG`, `KODE`, `NON_BPR_LOG`, `NAMA_KANWIL_II`, `NPL`, `npl_buc`, `LAR`, `FRML_1`, `FRML_2`, `fg`, `fg_IDR_VA`, `Kanwil_lar`, `Revolv`, `Expertise`, `month_logbook`, `type_logbook`, `status`, `status2`, `BidangUsaha`, `status_tindaklanjut`, `send_tindaklanjut`, `reviewer`, `status_ccr`, `limit_ex`, `bade_bank_lain`, `gusaha`, `rating`, `ioutlook`, `PG`, `HP`, `C_1`, `C_2`, `C_3`, `C_4`, `C_5`, `C_6`, `C_7`, `C_8`, `C_9`, `C_10`, `C_11`, `C_12`, `C_13`, `C_14`, `Periode`, `UsulanKolektibilitas`, `UsulanWatchlist`, `AccountStrategy`, `CatatanUpBU`, `TindakLanjut`, `Time_line`, `KemampuanMembayar`, `KinerjaUsaha`, `ProspekUsaha`, `ParameterWatchlist`, `c_HasilReview`, `c_TindakLanjut`, `c_Timeline`, `c_Status`, `ap_HasilReview`, `ap_TindakLanjut`, `ap_Timeline`, `ap_Status`, `IBA`, `EK`, `nt_AccountStrategy`, `WT`, `D_1`, `D_2`, `D_3`, `D_4`, `D_5`, `D_6`, `D_7`, `D_8`, `D_9`, `D_10`, `D_11`, `D_12`, `D_13`, `D_14`, `D_15`, `D_16`, `D_17`, `NT_1`, `NT_2`, `NT_3`, `NT_4`, `NT_5`, `NT_6`, `LK_1`, `LK_2`, `LK_3`, `Sales1`, `Sales2`, `Sales3`, `EBITDA1`, `EBITDA2`, `EBITDA3`, `NPM1`, `NPM2`, `NPM3`, `CR1`, `CR2`, `CR3`, `Leverage1`, `Leverage2`, `Leverage3`, `EBITDAI1`, `EBITDAI2`, `EBITDAI3`, `DSCR1`, `DSCR2`, `DSCR3`, `Debt1`, `Debt2`, `Debt3`, `CF_1`, `CF_2`, `CF_3`, `limit_ex_NA`, `bade_bank_lain_NA`, `gusaha_NA`, `rating_NA`, `ioutlook_NA`, `PG_NA`, `HP_NA`, `BidangUsaha_NA`) VALUES
(8, '2019-07-01', '13501', 'WILAYAH  VII / SEMARANG', 'HUB SEMARANG PEMUDA', 'CMB BANDUNG', 1154101, 3110000000000, 'AAA', 'W-KMK', 'CBC25', 'CBC25', 'CBC25', '1', '1', 'N', '5000000000', '2676000000', 'BILPRN_LOG', 'BILINT_LOG', 'PDDAYS', 'IPDDAY', 'N', 'IDR', '1', 'CMB3', 0.135, 5000000000, 2676000000, 3630, '2019-07-01', '1', '2019-07-01', 'LOA', 'CBC25', '7 - WILAYAH  VII / SEMARANG', '7 - WILAYAH  VII / SEMARANG', 'CBC25', 'N', ' CBC251', ' CBC2511', 'CMB31', 'CBC25IDR', 'N', 'N', '0', '2019-07-01', 'Corporate\r', 'No Action', NULL, '', NULL, 0, '6', '[\"Working Paper Kualitas NAK\",\"Working Paper Kualitas Kredit\",\"Working Paper Supervisi Loan Monitoring\"]', '', '', '', '', '', '', '', 'Yes', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, '2019-07-01', '13501', 'WILAYAH  VII / SEMARANG', 'HUB SEMARANG PEMUDA', 'CMB JKT SUDIRMAN', 1154102, 3110000000000, 'BBB', 'W-KMK', 'CBC25', 'CBC25', 'CBC25', '1', '1', 'N', '5000000000', '2676000000', 'BILPRN_LOG', 'BILINT_LOG', 'PDDAYS', 'IPDDAY', 'N', 'IDR', '1', 'CMB3', 0.135, 5000000000, 2676000000, 3630, '2019-07-01', '1', '2019-07-01', 'LOA', 'CBC25', '7 - WILAYAH  VII / SEMARANG', '7 - WILAYAH  VII / SEMARANG', 'CBC25', 'N', ' CBC251', ' CBC2511', 'CMB31', 'CBC25IDR', 'N', 'N', '0', '2019-07-01', 'Corporate\r', 'No Action', NULL, '', NULL, 0, '13', '[\"Working Paper Kualitas NAK\",\"Working Paper Kualitas Kredit\",\"Working Paper Supervisi Loan Monitoring\"]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, '2019-07-01', '13501', 'WILAYAH  VII / SEMARANG', 'HUB SEMARANG PEMUDA', 'CMB JKT SUDIRMAN', 1154103, 3110000000000, 'CCC', 'W-KMK', 'CBC25', 'CBC25', 'CBC25', '1', '1', 'N', '5000000000', '2676000000', 'BILPRN_LOG', 'BILINT_LOG', 'PDDAYS', 'IPDDAY', 'N', 'IDR', '1', 'CMB3', 0.135, 5000000000, 2676000000, 3630, '2019-07-01', '1', '2019-07-01', 'LOA', 'CBC25', '7 - WILAYAH  VII / SEMARANG', '7 - WILAYAH  VII / SEMARANG', 'CBC25', 'N', ' CBC251', ' CBC2511', 'CMB31', 'CBC25IDR', 'N', 'N', '0', '2019-07-01', 'Corporate\r', 'No Action', NULL, '', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, '2019-07-01', '13501', 'WILAYAH  VII / SEMARANG', 'HUB SEMARANG PEMUDA', 'CMB JKT SUDIRMAN', 1154104, 3110000000000, 'DDD', 'W-KMK', 'CBC25', 'CBC25', 'CBC25', '1', '1', 'N', '5000000000', '2676000000', 'BILPRN_LOG', 'BILINT_LOG', 'PDDAYS', 'IPDDAY', 'N', 'IDR', '1', 'CMB3', 0.135, 5000000000, 2676000000, 3630, '2019-07-01', '1', '2019-07-01', 'LOA', 'CBC25', '7 - WILAYAH  VII / SEMARANG', '7 - WILAYAH  VII / SEMARANG', 'CBC25', 'N', ' CBC251', ' CBC2511', 'CMB31', 'CBC25IDR', 'N', 'N', '0', '2019-07-01', 'Corporate\r', 'No Action', NULL, '', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, '2019-07-01', '13501', 'WILAYAH  VII / SEMARANG', 'HUB SEMARANG PEMUDA', 'CMB JKT SUDIRMAN', 1154105, 3110000000000, 'EEE', 'W-KMK', 'CBC25', 'CBC25', 'CBC25', '1', '1', 'N', '5000000000', '2676000000', 'BILPRN_LOG', 'BILINT_LOG', 'PDDAYS', 'IPDDAY', 'N', 'IDR', '1', 'CMB3', 0.135, 5000000000, 2676000000, 3630, '2019-07-01', '1', '2019-07-01', 'LOA', 'CBC25', '7 - WILAYAH  VII / SEMARANG', '7 - WILAYAH  VII / SEMARANG', 'CBC25', 'N', ' CBC251', ' CBC2511', 'CMB31', 'CBC25IDR', 'N', 'N', '0', '2019-07-01', 'Corporate\r', 'No Action', NULL, '', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, '2019-07-01', '13501', 'WILAYAH  VII / SEMARANG', 'HUB SEMARANG PEMUDA', 'CMB Medan', 1154106, 3110000000000, 'FFF', 'W-KMK', 'CBC25', 'CBC25', 'CBC25', '1', '1', 'N', '5000000000', '2676000000', 'BILPRN_LOG', 'BILINT_LOG', 'PDDAYS', 'IPDDAY', 'N', 'IDR', '1', 'CMB3', 0.135, 5000000000, 2676000000, 3630, '2019-07-01', '1', '2019-07-01', 'LOA', 'CBC25', '7 - WILAYAH  VII / SEMARANG', '7 - WILAYAH  VII / SEMARANG', 'CBC25', 'N', ' CBC251', ' CBC2511', 'CMB31', 'CBC25IDR', 'N', 'N', '0', '2019-07-01', 'Corporate\r', 'No Action', NULL, '', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, '2019-07-01', '13501', 'WILAYAH  VII / SEMARANG', 'HUB SEMARANG PEMUDA', 'CMB Medan', 1154107, 3110000000000, 'GGG', 'W-KMK', 'CBC25', 'CBC25', 'CBC25', '1', '1', 'N', '5000000000', '2676000000', 'BILPRN_LOG', 'BILINT_LOG', 'PDDAYS', 'IPDDAY', 'N', 'IDR', '1', 'CMB3', 0.135, 5000000000, 2676000000, 3630, '2019-07-01', '1', '2019-07-01', 'LOA', 'CBC25', '7 - WILAYAH  VII / SEMARANG', '7 - WILAYAH  VII / SEMARANG', 'CBC25', 'N', ' CBC251', ' CBC2511', 'CMB31', 'CBC25IDR', 'N', 'N', '0', '2019-07-01', 'Corporate\r', 'No Action', NULL, '', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, '2019-07-01', '13501', 'WILAYAH  VII / SEMARANG', 'HUB SEMARANG PEMUDA', 'CMB Medan', 1154108, 3110000000000, 'HHH', 'W-KMK', 'CBC25', 'CBC25', 'CBC25', '1', '1', 'N', '5000000000', '2676000000', 'BILPRN_LOG', 'BILINT_LOG', 'PDDAYS', 'IPDDAY', 'N', 'IDR', '1', 'CMB3', 0.135, 5000000000, 2676000000, 3630, '2019-07-01', '1', '2019-07-01', 'LOA', 'CBC25', '7 - WILAYAH  VII / SEMARANG', '7 - WILAYAH  VII / SEMARANG', 'CBC25', 'N', ' CBC251', ' CBC2511', 'CMB31', 'CBC25IDR', 'N', 'N', '0', '2019-07-01', 'Corporate\r', 'No Action', NULL, '', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, '2019-07-01', '13501', 'WILAYAH  VII / SEMARANG', 'HUB SEMARANG PEMUDA', 'CMB Medan', 1154109, 3110000000000, 'III', 'W-KMK', 'CBC25', 'CBC25', 'CBC25', '1', '1', 'N', '5000000000', '2676000000', 'BILPRN_LOG', 'BILINT_LOG', 'PDDAYS', 'IPDDAY', 'N', 'IDR', '1', 'CMB3', 0.135, 5000000000, 2676000000, 3630, '2019-07-01', '1', '2019-07-01', 'LOA', 'CBC25', '7 - WILAYAH  VII / SEMARANG', '7 - WILAYAH  VII / SEMARANG', 'CBC25', 'N', ' CBC251', ' CBC2511', 'CMB31', 'CBC25IDR', 'N', 'N', '0', '2019-07-01', 'Corporate\r', 'No Action', NULL, '', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, '2019-07-01', '13501', 'WILAYAH  VII / SEMARANG', 'HUB SEMARANG PEMUDA', 'CMB JKT KOTA', 1154110, 3110000000000, 'JJJ', 'W-KMK', 'CBC25', 'CBC25', 'CBC25', '1', '1', 'N', '5000000000', '2676000000', 'BILPRN_LOG', 'BILINT_LOG', 'PDDAYS', 'IPDDAY', 'N', 'IDR', '1', 'CMB3', 0.135, 5000000000, 2676000000, 3630, '2019-07-01', '1', '2019-07-01', 'LOA', 'CBC25', '7 - WILAYAH  VII / SEMARANG', '7 - WILAYAH  VII / SEMARANG', 'CBC25', 'N', ' CBC251', ' CBC2511', 'CMB31', 'CBC25IDR', 'N', 'N', '0', '2019-07-01', 'Corporate\r', 'No Action', NULL, '', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, '2019-07-01', '13501', 'WILAYAH  VII / SEMARANG', 'HUB SEMARANG PEMUDA', 'CMB JKT KOTA', 1154111, 3110000000000, 'KKK', 'W-KMK', 'CBC25', 'CBC25', 'CBC25', '1', '1', 'N', '5000000000', '2676000000', 'BILPRN_LOG', 'BILINT_LOG', 'PDDAYS', 'IPDDAY', 'N', 'IDR', '1', 'CMB3', 0.135, 5000000000, 2676000000, 3630, '2019-07-01', '1', '2019-07-01', 'LOA', 'CBC25', '7 - WILAYAH  VII / SEMARANG', '7 - WILAYAH  VII / SEMARANG', 'CBC25', 'N', ' CBC251', ' CBC2511', 'CMB31', 'CBC25IDR', 'N', 'N', '0', '2019-07-01', 'Corporate\r', 'No Action', NULL, '', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, '2019-07-01', '13501', 'WILAYAH  VII / SEMARANG', 'HUB SEMARANG PEMUDA', 'CMB JKT KOTA', 1154112, 3110000000000, 'LLL', 'W-KMK', 'CBC25', 'CBC25', 'CBC25', '1', '1', 'N', '5000000000', '2676000000', 'BILPRN_LOG', 'BILINT_LOG', 'PDDAYS', 'IPDDAY', 'N', 'IDR', '1', 'CMB3', 0.135, 5000000000, 2676000000, 3630, '2019-07-01', '1', '2019-07-01', 'LOA', 'CBC25', '7 - WILAYAH  VII / SEMARANG', '7 - WILAYAH  VII / SEMARANG', 'CBC25', 'N', ' CBC251', ' CBC2511', 'CMB31', 'CBC25IDR', 'N', 'N', '0', '2019-07-01', 'Corporate\r', 'No Action', NULL, '', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, '2019-07-01', '13501', 'WILAYAH  VII / SEMARANG', 'HUB SEMARANG PEMUDA', 'CMB JKT KOTA', 1154113, 3110000000000, 'MMM', 'W-KMK', 'CBC25', 'CBC25', 'CBC25', '1', '1', 'N', '5000000000', '2676000000', 'BILPRN_LOG', 'BILINT_LOG', 'PDDAYS', 'IPDDAY', 'N', 'IDR', '1', 'CMB3', 0.135, 5000000000, 2676000000, 3630, '2019-07-01', '1', '2019-07-01', 'LOA', 'CBC25', '7 - WILAYAH  VII / SEMARANG', '7 - WILAYAH  VII / SEMARANG', 'CBC25', 'N', ' CBC251', ' CBC2511', 'CMB31', 'CBC25IDR', 'N', 'N', '0', '2019-07-01', 'Corporate\r', 'No Action', NULL, '', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, '2019-07-01', '13501', 'WILAYAH  VII / SEMARANG', 'HUB SEMARANG PEMUDA', 'CMB JKT KOTA', 1154114, 3110000000000, 'OOO', 'W-KMK', 'CBC25', 'CBC25', 'CBC25', '1', '1', 'N', '5000000000', '2676000000', 'BILPRN_LOG', 'BILINT_LOG', 'PDDAYS', 'IPDDAY', 'N', 'IDR', '1', 'CMB3', 0.135, 5000000000, 2676000000, 3630, '2019-07-01', '1', '2019-07-01', 'LOA', 'CBC25', '7 - WILAYAH  VII / SEMARANG', '7 - WILAYAH  VII / SEMARANG', 'CBC25', 'N', ' CBC251', ' CBC2511', 'CMB31', 'CBC25IDR', 'N', 'N', '0', '2019-07-01', 'Corporate\r', 'No Action', NULL, '', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_upload_sectorusaha`
--

CREATE TABLE `tb_upload_sectorusaha` (
  `id_sectorusaha` int(100) NOT NULL,
  `Date_time_su` date NOT NULL,
  `Deibitur_su` varchar(255) NOT NULL,
  `CIF` double NOT NULL,
  `Kol_su` double NOT NULL,
  `ic_sector` varchar(255) NOT NULL,
  `gas_REPORTING` varchar(255) NOT NULL,
  `bade_su` double NOT NULL,
  `limit_su` double NOT NULL,
  `month_su` date NOT NULL,
  `type_su` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_upload_sectorusaha`
--

INSERT INTO `tb_upload_sectorusaha` (`id_sectorusaha`, `Date_time_su`, `Deibitur_su`, `CIF`, `Kol_su`, `ic_sector`, `gas_REPORTING`, `bade_su`, `limit_su`, `month_su`, `type_su`) VALUES
(1, '0000-00-00', '', 1154101, 0, 'AMAN', '', 0, 0, '2019-07-01', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_upload_watchlist`
--

CREATE TABLE `tb_upload_watchlist` (
  `id_watc` int(11) NOT NULL,
  `UNIT_KERJA_RISK` varchar(225) DEFAULT NULL,
  `CBC` varchar(225) DEFAULT NULL,
  `CIF` double DEFAULT NULL,
  `DEBITUR_WATCH` varchar(225) DEFAULT NULL,
  `WATCHLIST_SEJAK` date DEFAULT NULL,
  `BIDANG_USAHA_WATCH` varchar(225) DEFAULT NULL,
  `SEKTOR_INDUSTRI` varchar(225) DEFAULT NULL,
  `LIMIT_WC` double DEFAULT NULL,
  `BADE_WC` double DEFAULT NULL,
  `Saldo_CKPN` double DEFAULT NULL,
  `CKPN` double DEFAULT NULL,
  `KOL_WATCH` varchar(225) DEFAULT NULL,
  `Rekom_Kol` varchar(225) DEFAULT NULL,
  `Rekom_kol_final` varchar(225) DEFAULT NULL,
  `TW1` varchar(225) DEFAULT NULL,
  `Kondisi_Keuangan` text,
  `PROSPEK_USAHA` text,
  `ACCT_STRATEGY` varchar(225) DEFAULT NULL,
  `WEWENANG` varchar(225) DEFAULT NULL,
  `ALASAN_WATCHLIST` text,
  `UPAYA` text,
  `ACTION_PLAN` text,
  `TENGGAT_WAKTU` text,
  `NOTA_WL` text,
  `month_watchlist` date NOT NULL,
  `type_watchlist` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_upload_watchlist`
--

INSERT INTO `tb_upload_watchlist` (`id_watc`, `UNIT_KERJA_RISK`, `CBC`, `CIF`, `DEBITUR_WATCH`, `WATCHLIST_SEJAK`, `BIDANG_USAHA_WATCH`, `SEKTOR_INDUSTRI`, `LIMIT_WC`, `BADE_WC`, `Saldo_CKPN`, `CKPN`, `KOL_WATCH`, `Rekom_Kol`, `Rekom_kol_final`, `TW1`, `Kondisi_Keuangan`, `PROSPEK_USAHA`, `ACCT_STRATEGY`, `WEWENANG`, `ALASAN_WATCHLIST`, `UPAYA`, `ACTION_PLAN`, `TENGGAT_WAKTU`, `NOTA_WL`, `month_watchlist`, `type_watchlist`) VALUES
(1, NULL, NULL, 1154101, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-07-01', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_upload_yoyo`
--

CREATE TABLE `tb_upload_yoyo` (
  `id_yoyo` int(11) NOT NULL,
  `CBC_NAME_YOYO` varchar(225) NOT NULL,
  `CIF` double NOT NULL,
  `bidangusaha_yoyo` varchar(255) NOT NULL,
  `nm_debitur_yoyo` varchar(255) NOT NULL,
  `db_sejak` date NOT NULL,
  `BUC` double NOT NULL,
  `kol_mont` double NOT NULL,
  `limit_yoyo` double NOT NULL,
  `bade_yoyo` varchar(500) NOT NULL,
  `tungg_pokok_nilai` varchar(500) NOT NULL,
  `tungg_pokok_maks_hari` varchar(500) NOT NULL,
  `tungg_bunga_nilai` varchar(225) NOT NULL,
  `tungg_bunga_maks_hari` varchar(225) NOT NULL,
  `month_yoyo` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_upload_yoyo`
--

INSERT INTO `tb_upload_yoyo` (`id_yoyo`, `CBC_NAME_YOYO`, `CIF`, `bidangusaha_yoyo`, `nm_debitur_yoyo`, `db_sejak`, `BUC`, `kol_mont`, `limit_yoyo`, `bade_yoyo`, `tungg_pokok_nilai`, `tungg_pokok_maks_hari`, `tungg_bunga_nilai`, `tungg_bunga_maks_hari`, `month_yoyo`) VALUES
(1, '', 1154101, '', '', '0000-00-00', 0, 0, 0, '', '', '', '', '', '2019-07-01');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `user_id` int(10) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_created` date NOT NULL,
  `user_role` enum('Administrator','DH','GH','EAM','Reviewer') NOT NULL,
  `user_region` varchar(100) NOT NULL,
  `user_dept` varchar(225) NOT NULL,
  `user_foto` varchar(225) NOT NULL,
  `NIP` int(100) NOT NULL,
  `FirstName` varchar(225) NOT NULL,
  `LastName` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `user_name`, `user_password`, `user_created`, `user_role`, `user_region`, `user_dept`, `user_foto`, `NIP`, `FirstName`, `LastName`) VALUES
(1, 'Administrator', 'admin', '2018-10-08', 'Administrator', 'Jakarta', '', 'user.png', 192098998, 'Muhammad', 'Amran Hakim'),
(2, 'titok.radityo', 'changeme', '2018-10-14', 'Administrator', 'Jakarta', '', 'user.png', 129915, '-', '-'),
(3, 'Atasan I', '1234', '2019-05-06', 'DH', 'Jakarta', '', 'user.png', 129914, '-', '-'),
(4, 'Atasan II', '1234', '2019-05-08', 'GH', 'Jakarta', '', 'user.png', 129913, '-', '-'),
(5, 'EAM', '1234', '2019-05-08', 'EAM', 'Jakarta', '', 'user.png', 129912, '-', '-'),
(6, 'muhammad.amran', '1234', '2019-05-08', 'Reviewer', 'Jakarta', '', 'user.png', 129911, 'Muhammad', 'Amran'),
(7, 'nisa.nisa', '1234', '2019-08-09', 'Administrator', 'Jakarta', '', 'user.png', 12910, '-', '-'),
(9, 'gilang', '1234', '2019-08-13', 'Administrator', 'Bandung', '-', 'user.png', 12097, '-', '-'),
(10, 'amran.hakim', '1234', '2019-08-28', 'Administrator', 'Jakarta', '', 'user.png', 129916, '-', '-'),
(12, 'hellos', '1234', '2019-09-16', 'Administrator', 'Jakarta', '', 'user.png', 190210, 'hellos', 'id'),
(13, 'gilang.romadhanu', '1234', '2019-11-05', 'Reviewer', '-', 'CMB Bandung', 'user.png', 0, 'Gilang', 'Romadhanu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_log`
--
ALTER TABLE `tb_log`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `tb_news`
--
ALTER TABLE `tb_news`
  ADD PRIMARY KEY (`id_news`);

--
-- Indexes for table `tb_note`
--
ALTER TABLE `tb_note`
  ADD PRIMARY KEY (`id_note`);

--
-- Indexes for table `tb_parameter`
--
ALTER TABLE `tb_parameter`
  ADD PRIMARY KEY (`id_par`);

--
-- Indexes for table `tb_tema`
--
ALTER TABLE `tb_tema`
  ADD PRIMARY KEY (`id_tema`);

--
-- Indexes for table `tb_tipe`
--
ALTER TABLE `tb_tipe`
  ADD PRIMARY KEY (`id_tipe`);

--
-- Indexes for table `tb_unit_kerja_master`
--
ALTER TABLE `tb_unit_kerja_master`
  ADD PRIMARY KEY (`uk_id`);

--
-- Indexes for table `tb_upload_bidangusaha`
--
ALTER TABLE `tb_upload_bidangusaha`
  ADD PRIMARY KEY (`id_bd`);

--
-- Indexes for table `tb_upload_logbook`
--
ALTER TABLE `tb_upload_logbook`
  ADD PRIMARY KEY (`id_logbook`);

--
-- Indexes for table `tb_upload_sectorusaha`
--
ALTER TABLE `tb_upload_sectorusaha`
  ADD PRIMARY KEY (`id_sectorusaha`);

--
-- Indexes for table `tb_upload_watchlist`
--
ALTER TABLE `tb_upload_watchlist`
  ADD PRIMARY KEY (`id_watc`);

--
-- Indexes for table `tb_upload_yoyo`
--
ALTER TABLE `tb_upload_yoyo`
  ADD PRIMARY KEY (`id_yoyo`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_log`
--
ALTER TABLE `tb_log`
  MODIFY `log_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tb_news`
--
ALTER TABLE `tb_news`
  MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_note`
--
ALTER TABLE `tb_note`
  MODIFY `id_note` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_parameter`
--
ALTER TABLE `tb_parameter`
  MODIFY `id_par` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_tema`
--
ALTER TABLE `tb_tema`
  MODIFY `id_tema` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30540;

--
-- AUTO_INCREMENT for table `tb_tipe`
--
ALTER TABLE `tb_tipe`
  MODIFY `id_tipe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_unit_kerja_master`
--
ALTER TABLE `tb_unit_kerja_master`
  MODIFY `uk_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tb_upload_bidangusaha`
--
ALTER TABLE `tb_upload_bidangusaha`
  MODIFY `id_bd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tb_upload_logbook`
--
ALTER TABLE `tb_upload_logbook`
  MODIFY `id_logbook` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tb_upload_sectorusaha`
--
ALTER TABLE `tb_upload_sectorusaha`
  MODIFY `id_sectorusaha` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_upload_watchlist`
--
ALTER TABLE `tb_upload_watchlist`
  MODIFY `id_watc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_upload_yoyo`
--
ALTER TABLE `tb_upload_yoyo`
  MODIFY `id_yoyo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
