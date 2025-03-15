-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 15, 2025 at 07:43 PM
-- Server version: 8.0.30
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website_admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `aksara_ngalagenas`
--

CREATE TABLE `aksara_ngalagenas` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar_aksara` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar_pola` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aksara_ngalagenas`
--

INSERT INTO `aksara_ngalagenas` (`id`, `nama`, `gambar_aksara`, `gambar_pola`, `created_at`, `updated_at`) VALUES
(1, 'ka', 'aksara/01JMC1Z21W1TWMEMGD5SSWKBFW.png', 'pola/01JMC1Z22DGPKFQJGDECMC26Q8.png', '2025-02-18 01:14:34', '2025-02-18 01:14:34'),
(2, 'ga', 'aksara/01JMES6X1CVAJ04AF226EE5MPX.png', 'pola/01JMES6X1VY8SY69K0SNZZMFMX.png', '2025-02-19 02:39:17', '2025-02-19 02:39:17'),
(3, 'nga', 'aksara/01JMESBPA871CZ5SEFC19BYKXQ.png', 'pola/01JMESBPARYCS6Y45JH9CRB1XT.png', '2025-02-19 02:41:54', '2025-02-19 02:41:54');

-- --------------------------------------------------------

--
-- Table structure for table `aksara_swaras`
--

CREATE TABLE `aksara_swaras` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar_aksara` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar_pola` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aksara_swaras`
--

INSERT INTO `aksara_swaras` (`id`, `nama`, `gambar_aksara`, `gambar_pola`, `created_at`, `updated_at`) VALUES
(1, 'a', 'aksara/01JN1B7693VR4XZS9PG7QJXG89.png', 'pola/01JPDKBKT9X4RCDN9PVZX3VW1Y.png', '2025-02-18 01:12:38', '2025-03-15 19:09:09'),
(3, 'é', 'aksara/01JN1B42XJ9SX5BS9B238BNTPF.png', 'pola/01JPDKDZJK705HXDS0JM815RQV.png', '2025-02-26 07:38:39', '2025-03-15 19:10:27'),
(4, 'i', 'aksara/01JN1B9FTTZZ2YMEJ9DJ1KWVPQ.png', 'pola/01JPDKF60567B7AZTA36ZXVA7R.png', '2025-02-26 07:41:36', '2025-03-15 19:11:06'),
(5, 'o', 'aksara/01JN1BCY6NP8PGWN0GX5YBTX3C.png', 'pola/01JPDKGM3F3J3343EDH6FNK0FF.png', '2025-02-26 07:43:29', '2025-03-15 19:11:53'),
(6, 'u', 'aksara/01JN1BFMDCK4YG1JPC3J9QSM6N.png', 'pola/01JPDKHQ8GXZWPMXGHCP1Y323P.png', '2025-02-26 07:44:57', '2025-03-15 19:12:29'),
(7, 'e', 'aksara/01JN1BGTZH13NVMSGVVMZC0ZC7.png', 'pola/01JPDKPZMRM3CP9FZ419X46ZT2.png', '2025-02-26 07:45:37', '2025-03-15 19:15:22'),
(8, 'eu', 'aksara/01JN1BJ8RYY7ER7FKP5CCW6K3J.png', 'pola/01JPDKVWGJ388AP2CGAJ9QRKP3.png', '2025-02-26 07:46:24', '2025-03-15 19:18:03');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('031a30a1ae4c3c45ddf9e65fcff3037f449ee0c0', 'i:1;', 1738059394),
('031a30a1ae4c3c45ddf9e65fcff3037f449ee0c0:timer', 'i:1738059394;', 1738059394),
('1fc311e82d173937c947e4df4213fbcbab4da6e8', 'i:1;', 1739549734),
('1fc311e82d173937c947e4df4213fbcbab4da6e8:timer', 'i:1739549734;', 1739549734),
('356a192b7913b04c54574d18c28d46e6395428ab', 'i:1;', 1742066319),
('356a192b7913b04c54574d18c28d46e6395428ab:timer', 'i:1742066319;', 1742066319),
('4b66f4416514fa3229c9b8219b8e110701f29ae9', 'i:1;', 1740352615),
('4b66f4416514fa3229c9b8219b8e110701f29ae9:timer', 'i:1740352615;', 1740352615),
('712949ee08edfb270d7e484bd2bd0aef6beb89d2', 'i:1;', 1740645021),
('712949ee08edfb270d7e484bd2bd0aef6beb89d2:timer', 'i:1740645021;', 1740645021),
('8552a98cb188b31d7879c569d7badbc3c674462b', 'i:1;', 1739054428),
('8552a98cb188b31d7879c569d7badbc3c674462b:timer', 'i:1739054428;', 1739054428),
('9679f125ab9ec476cada410b8843da3f4b14eaee', 'i:1;', 1739509598),
('9679f125ab9ec476cada410b8843da3f4b14eaee:timer', 'i:1739509598;', 1739509598),
('9821ae0b021a97e4740f2679d150f52377ff4cb0', 'i:1;', 1739491430),
('9821ae0b021a97e4740f2679d150f52377ff4cb0:timer', 'i:1739491430;', 1739491430),
('a17961fa74e9275d529f489537f179c05d50c2f3', 'i:1;', 1737993784),
('a17961fa74e9275d529f489537f179c05d50c2f3:timer', 'i:1737993784;', 1737993784),
('b067509ba11417b56b808c373e4733f5a1bec698', 'i:1;', 1739693933),
('b067509ba11417b56b808c373e4733f5a1bec698:timer', 'i:1739693932;', 1739693932),
('bbc9f35a91dd4fc9c8a30fe721c9177b9f4e08b8', 'i:1;', 1738564745),
('bbc9f35a91dd4fc9c8a30fe721c9177b9f4e08b8:timer', 'i:1738564745;', 1738564745),
('bbdf00009a16bc20b86e5efb0e10c8d2020e52d9', 'i:1;', 1739172540),
('bbdf00009a16bc20b86e5efb0e10c8d2020e52d9:timer', 'i:1739172540;', 1739172540),
('caf22cc019ccf10f9ca948342dcf632282dbd967', 'i:1;', 1740208075),
('caf22cc019ccf10f9ca948342dcf632282dbd967:timer', 'i:1740208075;', 1740208075),
('d4a867532a9caab2d05ba652d5492f65171bb880', 'i:1;', 1740055588),
('d4a867532a9caab2d05ba652d5492f65171bb880:timer', 'i:1740055588;', 1740055588),
('d8e96cc73d834533398f95f773aaf79472ef7e57', 'i:1;', 1739866320),
('d8e96cc73d834533398f95f773aaf79472ef7e57:timer', 'i:1739866320;', 1739866320),
('fff6544fde3dfa40a7a1d58a104aa2ea6078e004', 'i:1;', 1739610349),
('fff6544fde3dfa40a7a1d58a104aa2ea6078e004:timer', 'i:1739610349;', 1739610349);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kuis_terjemahan_aksara_ke_latins`
--

CREATE TABLE `kuis_terjemahan_aksara_ke_latins` (
  `id` bigint UNSIGNED NOT NULL,
  `soal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `A` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `B` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `C` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `D` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jawaban` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kuis_terjemahan_aksara_ke_latins`
--

INSERT INTO `kuis_terjemahan_aksara_ke_latins` (`id`, `soal`, `A`, `B`, `C`, `D`, `jawaban`, `created_at`, `updated_at`) VALUES
(5, '01JP4J4CA6EFVJMSHEDDC23JP0.png', 'Gambar', 'Konci', 'Gunting', 'Spidol', 'Gambar', '2025-03-12 06:54:34', '2025-03-12 06:54:34'),
(6, '01JP4J5BQ4TJ2TXXG2B9KNK60N.png', 'Gambar', 'Konci', 'Gunting', 'Spidol', 'Konci', '2025-03-12 06:55:06', '2025-03-12 07:32:34'),
(7, '01JP4J6Y7C8R0GKJTHKSEXW109.png', 'Langit', 'Laut', 'Gunting', 'Spidol', 'Langit', '2025-03-12 06:55:58', '2025-03-12 06:55:58'),
(8, '01JP4J8J99G354EDV3JY9QMC2N.png', 'Gambar', 'Konci', 'Gunting', 'Spidol', 'Spidol', '2025-03-12 06:56:51', '2025-03-12 07:36:12'),
(9, '01JP4J9YK1SG2N5XKBH75NQVC3.png', 'Piring', 'Peso', 'Gunting', 'Perahu', 'Piring', '2025-03-12 06:57:36', '2025-03-12 06:57:36'),
(10, '01JP4JK7JJF5CVKVT2FEEY1MMS.png', 'Harta', 'Harita', 'Konci', 'Gambar', 'Harita', '2025-03-12 07:02:40', '2025-03-12 07:02:40'),
(11, '01JP4JMH4H357HZKW18M0Z0CWC.png', 'Sasauran', 'Salian', 'Sanajan', 'Sauyunan', 'Sanajan', '2025-03-12 07:03:23', '2025-03-12 07:03:23'),
(12, '01JP4JP62010312NQS1TGDTNVM.png', 'Jual', 'Sakola', 'Dijual', 'Disakola', 'Dijual', '2025-03-12 07:04:17', '2025-03-12 07:04:17'),
(13, '01JP4JQRKT9Y8N4Y14M86ZG8RP.png', 'Pasar', 'Jual Murah', 'Pasar Murah', 'Pasar Mahal', 'Pasar Mahal', '2025-03-12 07:05:09', '2025-03-12 07:05:09'),
(14, '01JP4JSAKJ6SXWN95JR9C4C89N.png', 'Sisindiran', 'Sanajan', 'Sasauran', 'Sauyunan', 'Sisindiran', '2025-03-12 07:06:00', '2025-03-12 07:06:00'),
(15, '01JP4JX2WMMD4NRJ0BJS2EWTQN.png', 'Tong asa pangpunjulna, sabab teu alus', 'Unggal jalma boga kaunggulan masing-masing', 'Ulah adigung-adiguna asa aing uyah kidul', 'Tong reueus-reugreug, sakabeh jelema sarua', 'Ulah adigung-adiguna asa aing uyah kidul', '2025-03-12 07:08:03', '2025-03-12 07:08:03'),
(16, '01JP4JYVJGM9A86DNTPCJKJVX2.png', 'Ka sadapan', 'Ka sakola', 'Di sadapan', 'Di sakola', 'Ka sadapan', '2025-03-12 07:09:01', '2025-03-12 07:09:01'),
(17, '01JP4K0DYX3TFFQPZRRSRCM3WV.png', 'Bahasa Sunda', 'Bahasa Jawa', 'Aksara Sunda', 'Aksara Jawa', 'Aksara Sunda', '2025-03-12 07:09:53', '2025-03-12 07:09:53'),
(18, '01JP4K4S185TZWKD7SD6JTJ7B5.png', 'Basa Sunda téh Basa Rasa', 'Urang Diajar Aksara Sunda', 'Diajar Aksara Sunda di Sakola', 'Basa Sunda Basa Indung', 'Basa Sunda téh Basa Rasa', '2025-03-12 07:12:15', '2025-03-12 07:12:15'),
(19, '01JP4K6HSE607DG0JK3CZYN34H.png', 'Luhung ku élmu', 'Lain nu abdi', 'Ulah sok kitu', 'Luhung ku sasama', 'Luhung ku élmu', '2025-03-12 07:13:14', '2025-03-12 07:13:14'),
(20, '01JP4K7XWHQN7MQH5H8D4JBEWN.png', '314', '432', '123', '234', '234', '2025-03-12 07:13:59', '2025-03-12 07:13:59'),
(21, '01JP4K9JFS8A82Y1FXRGS3BPG6.png', 'Lingkungan', 'Lalawora', 'Lalampahan', 'Lalakon', 'Lalawora', '2025-03-12 07:14:53', '2025-03-12 07:14:53'),
(22, '01JP4KDW227GNCM5BF6VST0Q1F.png', 'Sakahayang', 'Saenyana', 'Sasama', 'Sakola', 'Sakahayang', '2025-03-12 07:17:13', '2025-03-12 07:17:13'),
(23, '01JP4KG3P40TESWVQVA8GD2ZZ7.png', 'Ceramah', 'Qoriah', 'Qorban', 'Kiai', 'Qoriah', '2025-03-12 07:18:27', '2025-03-12 07:18:27'),
(24, '01JP4KHEFG94ESD0VYF9MT9VMZ.png', 'Vitamin', 'Sapatu', 'Komputer', 'Spidol', 'Vitamin', '2025-03-12 07:19:11', '2025-03-12 07:19:11');

-- --------------------------------------------------------

--
-- Table structure for table `kuis_terjemahan_latin_ke_aksaras`
--

CREATE TABLE `kuis_terjemahan_latin_ke_aksaras` (
  `id` bigint UNSIGNED NOT NULL,
  `soal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `A` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `B` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `C` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `D` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jawaban` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kuis_terjemahan_latin_ke_aksaras`
--

INSERT INTO `kuis_terjemahan_latin_ke_aksaras` (`id`, `soal`, `A`, `B`, `C`, `D`, `jawaban`, `created_at`, `updated_at`) VALUES
(2, 'Kecap \"Komputer\" lamun diterjemahkeun kana Aksara Sunda jadi ...', '01JP4RDPB1T4RQMS6629K9BVSS.png', '01JP4RDPBHB7BJBPNRPJG7YAJY.png', '01JP4RDPBZ90SMYTXS4A7N3N5E.png', '01JP4RDPCDE55P00Q33Z9PA93G.png', 'A', NULL, '2025-03-12 08:44:31'),
(3, 'Kecap \"Buku\" lamun diterjemahkeun kana Aksara Sunda jadi ... ', '01JP4RH3D4HP8C62TQW300REVG.png', '01JP4RH3DPP3SZYAYF7R5X1WW4.png', '01JP4RH3EATXR4E3CZ4DSFDYK9.png', '01JP4RH3EZQ46AR94Y74D7HFSY.png', 'B', '2025-02-08 16:13:39', '2025-03-12 08:46:22'),
(4, 'Kecap \"Tresna\" lamun diterjemahkeun kana aksara Sunda jadi ... ', '01JP4RM1YJT488TABDBBFKXNMP.png', '01JP4RM1Z3HGB1BK5VHWVBHH77.png', '01JP4RM1ZK2WSNK3FPRE4BRD1F.png', '01JP4RM204VDQK295AX736P1BM.png', 'B', '2025-02-08 16:32:57', '2025-03-12 08:47:59'),
(5, 'Kecap \"Iraha\" lamun diterjemahkeun kana Aksara Sunda jadi ...', '01JP4RQ4R3DYZS452FSC9934W1.png', '01JP4RQ4RGJRS9KNPFCSJQ57NW.png', '01JP4RQ4RWEVQ716RF8N0W0EER.png', '01JP4RQ4SEE7ZPBCVXENXN63T0.png', 'D', '2025-02-08 16:34:58', '2025-03-12 08:49:40'),
(6, 'Kecap \"Lembur\" lamun diterjemahkeun kana Aksara Sunda jadi ...', '01JP4RTE870C7H8PVGY9WZP3D4.png', '01JP4RTE8SGA0JMYEMN9ZDTZF4.png', '01JP4RTE9B8N05BQ3WB99GP6CP.png', '01JP4RTEBER66RPRFKBVKVJ0GN.png', 'C', '2025-02-08 16:36:50', '2025-03-12 08:51:28'),
(7, 'Kecap \"Jalan\" lamun diterjemahkeun kana Aksara Sunda jadi ...', '01JP4RY7F1PA2C8RHR0H2EC4EV.png', '01JP4RY7FMX1160WB804TFBE4K.png', '01JP4RY7GAQFVMY2MCV82K1FN9.png', '01JP4RY7GNY0T1P9BSZNBPPR6W.png', 'A', '2025-03-12 08:53:32', '2025-03-12 08:53:32'),
(8, 'Kecap \"Sataun landung\" lamun diterjemahkeun kana Aksara Sunda jadi ...', '01JP4S0ZJFTZCWEA4E1NZ7CM7E.png', '01JP4S0ZJZEZ9BA8SWPMPWVSMP.png', '01JP4S0ZKD4KD1NJ97HG939JTY.png', '01JP4S0ZKRCQZJVAWKY7F0822S.png', 'A', '2025-03-12 08:55:03', '2025-03-12 08:55:03'),
(9, 'Kecap \"Ema mesen peda buereum\" lamun diterjemahkeun kana Aksara Sunda jadi ...', '01JP4S5DHHVGH840P36TBRG2AH.png', '01JP4S5DJ2BY77WW8HNPF8NWFG.png', '01JP4S5DJN3TWRR6E6DS8NJHRE.png', '01JP4S5DK54NWRTRA2Y5GRVJJE.png', 'D', '2025-03-12 08:57:28', '2025-03-12 08:57:28'),
(10, 'Kecap \"Abah dagang béas di pasar\" lamun diterjemahkeun kana Aksara Sunda jadi ...', '01JP4SA1W4EKJ8JDSV7KMQG716.png', '01JP4SA1WP9YC63HZEGTWFJXDN.png', '01JP4SA1X37V0CRTGHR3R3YK4M.png', '01JP4SA1XKT7HVXSN6YMSXMAPY.png', 'B', '2025-03-12 09:00:00', '2025-03-12 09:00:00'),
(11, 'Kecap \"Jalan Braga\" lamun diterjemahkeun kana Aksara Sunda jadi ...', '01JP4SD34MVNTQCW1B2AM3KBA7.png', '01JP4SD351FQD4XN4CFRE1SQE6.png', '01JP4SD35GJ2RN652BM7MGYS5Y.png', '01JP4SD35ZNT8EHENKD3XBT3JD.png', 'A', '2025-03-12 09:01:39', '2025-03-12 09:01:39'),
(12, 'Kecap \"Embé\" lamun diterjemahkeun kana Aksara Sunda jadi ...', '01JP4SFCZVV77NV7H47FBN0AN9.png', '01JP4SFD09K7599WJSZ0H2TKMH.png', '01JP4SFD0HGKDEZYMYQ9SGJ3A2.png', '01JP4SFD0Y08E14MA0VDP6R84E.png', 'C', '2025-03-12 09:02:55', '2025-03-12 09:02:55'),
(13, 'Kecap \"Ucing\" lamun diterjemahkeun kana Aksara Sunda jadi ...', '01JP4SHXFXEN1ZQDWPJVR3Y9HZ.png', '01JP4SHXG918VGJKQS6TMH2GYV.png', '01JP4SHXGPK2KC51H8X5W16RAV.png', '01JP4SHXH5ZBP32DTAMZP41C7H.png', 'C', '2025-03-12 09:04:17', '2025-03-12 09:04:17'),
(14, 'Kecap \"21 Méi 2021\" lamun diterjemahkeun kana Aksara Sunda jadi ...', '01JP4SP41NZBC0T414YT3SARN4.png', '01JP4SP4272WBCMV0MV7JAQDXQ.png', '01JP4SP42QX7JBXQBTVS9K74NM.png', '01JP4SP439ZZW23J59NCXAK4BC.png', 'B', '2025-03-12 09:06:35', '2025-03-12 09:06:35'),
(15, 'Kecap \"Mobil téh luak léok\" lamun diterjemahkeun kana Aksara Sunda jadi ...', '01JP4SS59196HJD7GCSJPH4V9P.png', '01JP4SS59NS5HW3CYKYDZRPKKF.png', '01JP4SS5A5XEXC6FC7DW8RD6Q5.png', '01JP4SS5AQBHPPG7X105XTVEBV.png', 'D', '2025-03-12 09:08:15', '2025-03-12 09:08:15'),
(16, 'Kecap \"3 x 5 + 6 = 21\" lamun diterjemahkeun kana Aksara Sunda jadi ...', '01JP4SVJ4S2GJZZ7GKDDYBHV4M.png', '01JP4SVJ5B6VX5N97KW018J5NN.png', '01JP4SVJ6YD9KDA0DFAR7HCENN.png', '01JP4SVJ7X6K9DM29Q37QH9XC5.png', 'A', '2025-03-12 09:09:34', '2025-03-12 09:09:34'),
(17, 'Kecap \"Diajar aksara sunda\" lamun diterjemahkeun kana Aksara Sunda jadi ...', '01JP4SY0XJZJ6QDJKBD6RK23DC.png', '01JP4SY0Y4XMBG3ZQ6V3KEJZ8V.png', '01JP4SY0YKK6NJDFQPETWF5JBA.png', '01JP4SY0Z1SA2XACX297N574MW.png', 'C', '2025-03-12 09:10:54', '2025-03-13 04:50:55'),
(18, 'Kecap \"Abdi reueus jadi urang sunda\" lamun diterjemahkeun kana Aksara Sunda jadi ...', '01JP4T15K3H99GVMD0TTF72CAR.png', '01JP4T15KQ4ZH73JMX4ATP2ZWH.png', '01JP4T15M9R6FA25RKZHHHJEHY.png', '01JP4T15MVBXGKBJM0SCHPVAJ9.png', 'D', '2025-03-12 09:12:37', '2025-03-12 09:12:37'),
(19, 'Kecap \"Sanajan\" lamun diterjemahkeun kana Aksara Sunda jadi ...', '01JP4T4ZX9SNN40AW10JW3WB6S.png', '01JP4T4ZXTJT28PP9P1XSC1FDD.png', '01JP4T4ZYBKF6A7075PH7RFGN4.png', '01JP4T4ZYWD1WCH1FYEYGBB10X.png', 'C', '2025-03-12 09:14:43', '2025-03-12 09:14:43'),
(20, 'Kecap \"Harita\" lamun diterjemahkeun kana Aksara Sunda jadi ...', '01JP4T8M56N7MZ0ZJ9WGBA8YDP.png', '01JP4T8M60HNF2W4Y7G8M31XN9.png', '01JP4T8M785GJX9GFM9RQY0Q57.png', '01JP4T8M7S40B9ZNWVCY0NFH6X.png', 'A', '2025-03-12 09:16:42', '2025-03-12 09:16:42'),
(21, 'Kecap \"Urang kudu hormat ka guru\" lamun diterjemahkeun kana Aksara Sunda jadi ...', '01JP4TG21PAY7QRBS0HNWE3Q58.png', '01JP4TG226NMGE8GVJDS82WD9Y.png', '01JP4TG22TSFD6FY0FP35W6449.png', '01JP4TG23BES4184F55XYQJJAB.png', 'D', '2025-03-12 09:20:45', '2025-03-12 09:20:45');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collection_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conversions_disk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` bigint UNSIGNED NOT NULL,
  `manipulations` json NOT NULL,
  `custom_properties` json NOT NULL,
  `generated_conversions` json NOT NULL,
  `responsive_images` json NOT NULL,
  `order_column` int UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_12_23_152138_create_siswas_table', 2),
(5, '2024_12_23_162152_create_nilais_table', 2),
(6, '2024_12_23_162539_create_kuis_terjemahans_table', 2),
(7, '2024_12_23_162800_create_latihan_menulis_table', 2),
(8, '2024_12_24_064513_create_personal_access_tokens_table', 3),
(9, '2025_01_21_100253_remove_kelas_from_siswas_table', 4),
(10, '2025_01_22_140118_create_kuis_terjemahan_latin_ke_aksaras_table', 5),
(11, '2025_01_22_152940_create_kuis_terjemahan_aksara_ke_latins_table', 6),
(12, '2025_01_23_135214_create_nilai_kuis_terjemahan_aksara_ke_latins_table', 7),
(13, '2025_01_23_141334_add_siswa_id_to_nilai_kuis_terjemahan_aksara_ke_latin_table', 8),
(14, '2025_01_23_171145_create_nilai_kuis_terjemahan_aksara_ke_latins_table', 9),
(15, '2025_01_23_180225_create_nilai_kuis_terjemahan_latin_ke_aksara_table', 10),
(16, '2025_01_23_180604_create_nilai_kuis_terjemahan_latin_ke_aksaras_table', 10),
(17, '2025_01_23_184854_create_nilai_kuis_menulis_aksara_swara_table', 11),
(18, '2025_01_24_112749_create_nilai_kuis_menulis_aksara_ngalagena_1_table', 12),
(19, '2025_01_24_140435_create_nilai_kuis_menulis_aksara_ngalagena_2_table', 13),
(20, '2025_01_24_231746_create_nilai_kuis_menulis_aksara_ngalagena_3_table', 14),
(21, '2025_01_25_100919_create_media_table', 15),
(22, '2025_02_18_061316_create_aksaras_table', 16),
(23, '2025_02_18_061316_create_aksara_swaras_table', 17),
(24, '2025_02_18_065903_create_aksara_ngalagenas_table', 17);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_kuis_menulis_aksara_ngalagena_1`
--

CREATE TABLE `nilai_kuis_menulis_aksara_ngalagena_1` (
  `id` bigint UNSIGNED NOT NULL,
  `siswa_id` bigint UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `aksara_ka` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aksara_ga` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aksara_nga` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aksara_ca` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aksara_ja` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aksara_nya` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aksara_ta` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nilai_kuis_menulis_aksara_ngalagena_1`
--

INSERT INTO `nilai_kuis_menulis_aksara_ngalagena_1` (`id`, `siswa_id`, `tanggal`, `aksara_ka`, `aksara_ga`, `aksara_nga`, `aksara_ca`, `aksara_ja`, `aksara_nya`, `aksara_ta`, `created_at`, `updated_at`) VALUES
(1, 2, '2025-01-24', '01JJC8GBX9CSWX8Z8EZY0R74XP.png', '01JJC8GBXVVTJPGC87S734VBZP.png', '01JJC8GBYCHXZHKNFK5S3S6AW3.png', '01JJC8GBYYAFVWDPT3P2CYX2ZV.png', '01JJC8GBZFC097G79W3BV265N4.png', '01JJC8GC001HR8MMC1M9H7XNJV.png', '01JJC8GC0GCRECY8Y4ENF86A31.png', '2025-01-24 06:37:29', '2025-01-24 06:37:29');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_kuis_menulis_aksara_ngalagena_2`
--

CREATE TABLE `nilai_kuis_menulis_aksara_ngalagena_2` (
  `id` bigint UNSIGNED NOT NULL,
  `siswa_id` bigint UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `aksara_da` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aksara_na` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aksara_pa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aksara_ba` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aksara_ma` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aksara_ya` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aksara_ra` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aksara_la` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nilai_kuis_menulis_aksara_ngalagena_2`
--

INSERT INTO `nilai_kuis_menulis_aksara_ngalagena_2` (`id`, `siswa_id`, `tanggal`, `aksara_da`, `aksara_na`, `aksara_pa`, `aksara_ba`, `aksara_ma`, `aksara_ya`, `aksara_ra`, `aksara_la`, `created_at`, `updated_at`) VALUES
(1, 2, '2025-01-25', '01JJD9CXEAGQBGSXE8DESTP0NM.png', '01JJD9CXFDYNH33HEQR7Y6H6PG.png', '01JJD9CXGT1Q7RKVGWWW2ET1H9.png', '01JJD9CXHCAMZJJSAAMJJAEKP3.png', '01JJD9CXJ0YJTR5TV6PGN8ZAE1.png', '01JJD9CXJZJFC93QHKDCSETTYH.png', '01JJD9CXKYGVMQ49MX5HC1P2BV.png', '01JJD9CXMHMHGT6Y0JD6TFZG2E.png', '2025-01-24 16:12:19', '2025-01-24 16:12:19');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_kuis_menulis_aksara_ngalagena_3`
--

CREATE TABLE `nilai_kuis_menulis_aksara_ngalagena_3` (
  `id` bigint UNSIGNED NOT NULL,
  `siswa_id` bigint UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `aksara_wa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aksara_sa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aksara_ha` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aksara_fa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aksara_va` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aksara_qa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aksara_xa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aksara_za` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nilai_kuis_menulis_aksara_ngalagena_3`
--

INSERT INTO `nilai_kuis_menulis_aksara_ngalagena_3` (`id`, `siswa_id`, `tanggal`, `aksara_wa`, `aksara_sa`, `aksara_ha`, `aksara_fa`, `aksara_va`, `aksara_qa`, `aksara_xa`, `aksara_za`, `created_at`, `updated_at`) VALUES
(1, 1, '2025-01-25', '01JJDAKSERG6Z6N6XCJ6014CE5.png', '01JJDAKSFRRKSPG3KZK1YY5Q6P.png', '01JJDAKSGQP1WF6WTZXEC9NNA0.png', '01JJDAKSHBFSANTKMH37R47TRT.png', '01JJDAKSJ5FEFFPW7KSZW7W174.png', '01JJDAKSKE7DE2PYYFBDRRSFE3.png', '01JJDAKSMBTJF7NNRG4VWGD8VZ.png', '01JJDAKSMVD2M9VFX078VCAERR.png', '2025-01-24 16:33:33', '2025-01-24 16:33:33');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_kuis_menulis_aksara_swara`
--

CREATE TABLE `nilai_kuis_menulis_aksara_swara` (
  `id` bigint UNSIGNED NOT NULL,
  `siswa_id` bigint UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `aksara_a` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aksara_é` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aksara_i` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aksara_o` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aksara_u` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aksara_e` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aksara_eu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nilai_kuis_menulis_aksara_swara`
--

INSERT INTO `nilai_kuis_menulis_aksara_swara` (`id`, `siswa_id`, `tanggal`, `aksara_a`, `aksara_é`, `aksara_i`, `aksara_o`, `aksara_u`, `aksara_e`, `aksara_eu`, `created_at`, `updated_at`) VALUES
(1, 1, '2025-01-24', '01JJBZKJDGV78P73KD8FWRJX32.png', '01JJBZKJG32J87C63HT3HQ83R7.png', '01JJBZKJGKT4YHE49PCCQ4C3R6.png', '01JJBZKJH39QJBNM3H60TSJB9Y.png', '01JJBZKJHKKMGK6T5YFF98TG0C.png', '01JJBZKJJ3EX1X7BC5Z1N40YW4.png', '01JJBZKJJJFZBMA2VM6YW28JZH.png', '2025-01-24 01:57:00', '2025-01-24 04:01:57');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_kuis_terjemahan_aksara_ke_latins`
--

CREATE TABLE `nilai_kuis_terjemahan_aksara_ke_latins` (
  `id` bigint UNSIGNED NOT NULL,
  `siswa_id` bigint UNSIGNED NOT NULL,
  `Nilai` int NOT NULL,
  `Tanggal` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nilai_kuis_terjemahan_aksara_ke_latins`
--

INSERT INTO `nilai_kuis_terjemahan_aksara_ke_latins` (`id`, `siswa_id`, `Nilai`, `Tanggal`, `created_at`, `updated_at`) VALUES
(1, 1, 100, '2025-01-24', '2025-01-23 10:18:13', '2025-01-23 10:18:13'),
(2, 2, 80, '2025-01-24', '2025-01-23 10:31:44', '2025-01-23 10:31:44'),
(4, 1, 85, '2025-02-21', NULL, NULL),
(5, 2, 77, '2025-02-22', '2025-02-24 20:22:18', '2025-02-24 20:22:18'),
(6, 2, 0, '2025-02-25', '2025-02-24 20:27:39', '2025-02-24 20:27:39'),
(7, 2, 0, '2025-02-25', '2025-02-24 20:28:51', '2025-02-24 20:28:51'),
(8, 2, 5, '2025-02-25', '2025-02-24 20:36:59', '2025-02-24 20:36:59'),
(9, 2, 10, '2025-02-25', '2025-02-24 20:47:34', '2025-02-24 20:47:34'),
(10, 2, 5, '2025-02-25', '2025-02-24 21:31:39', '2025-02-24 21:31:39'),
(11, 2, 5, '2025-02-25', '2025-02-24 21:38:24', '2025-02-24 21:38:24'),
(12, 2, 10, '2025-02-25', '2025-02-24 21:39:07', '2025-02-24 21:39:07'),
(13, 1, 10, '2025-02-25', '2025-02-24 21:41:01', '2025-02-24 21:41:01'),
(14, 1, 10, '2025-02-25', '2025-02-24 21:41:57', '2025-02-24 21:41:57'),
(15, 1, 10, '2025-02-25', '2025-02-24 21:42:43', '2025-02-24 21:42:43'),
(16, 1, 0, '2025-02-25', '2025-02-24 22:14:39', '2025-02-24 22:14:39'),
(17, 2, 0, '2025-02-25', '2025-02-25 01:43:08', '2025-02-25 01:43:08'),
(18, 2, 0, '2025-02-25', '2025-02-25 02:08:53', '2025-02-25 02:08:53'),
(19, 2, 5, '2025-02-26', '2025-02-26 08:09:34', '2025-02-26 08:09:34'),
(20, 2, 15, '2025-02-26', '2025-02-26 08:10:34', '2025-02-26 08:10:34'),
(21, 2, 5, '2025-02-26', '2025-02-26 08:11:47', '2025-02-26 08:11:47'),
(22, 2, 15, '2025-02-26', '2025-02-26 08:25:47', '2025-02-26 08:25:47'),
(23, 2, 0, '2025-03-01', '2025-02-28 11:35:04', '2025-02-28 11:35:04'),
(24, 2, 0, '2025-03-02', '2025-03-01 16:36:49', '2025-03-01 16:36:49'),
(25, 2, 5, '2025-03-07', '2025-03-06 23:10:33', '2025-03-06 23:10:33'),
(26, 2, 10, '2025-03-07', '2025-03-06 23:11:10', '2025-03-06 23:11:10'),
(27, 2, 10, '2025-03-07', '2025-03-07 09:22:30', '2025-03-07 09:22:30'),
(28, 2, 0, '2025-03-07', '2025-03-07 09:23:09', '2025-03-07 09:23:09'),
(29, 2, 0, '2025-03-07', '2025-03-07 09:59:59', '2025-03-07 09:59:59'),
(30, 2, 5, '2025-03-08', '2025-03-07 10:09:02', '2025-03-07 10:09:02'),
(31, 2, 5, '2025-03-08', '2025-03-07 10:38:43', '2025-03-07 10:38:43'),
(32, 1, 10, '2025-03-08', '2025-03-07 10:42:22', '2025-03-07 10:42:22'),
(33, 4, 5, '2025-03-08', '2025-03-07 10:51:07', '2025-03-07 10:51:07'),
(34, 4, 5, '2025-03-08', '2025-03-07 10:52:04', '2025-03-07 10:52:04'),
(35, 4, 0, '2025-03-08', '2025-03-07 10:56:20', '2025-03-07 10:56:20'),
(36, 4, 5, '2025-03-08', '2025-03-07 10:56:53', '2025-03-07 10:56:53'),
(37, 4, 15, '2025-03-08', '2025-03-07 10:57:33', '2025-03-07 10:57:33'),
(38, 2, 0, '2025-03-08', '2025-03-08 01:31:44', '2025-03-08 01:31:44'),
(39, 4, 10, '2025-03-08', '2025-03-08 02:06:10', '2025-03-08 02:06:10'),
(40, 4, 0, '2025-03-08', '2025-03-08 02:06:44', '2025-03-08 02:06:44'),
(41, 4, 5, '2025-03-09', '2025-03-08 17:38:39', '2025-03-08 17:38:39'),
(42, 4, 10, '2025-03-09', '2025-03-08 17:45:02', '2025-03-08 17:45:02'),
(43, 4, 0, '2025-03-09', '2025-03-09 01:47:19', '2025-03-09 01:47:19'),
(44, 4, 0, '2025-03-09', '2025-03-09 01:54:08', '2025-03-09 01:54:08'),
(45, 4, 0, '2025-03-09', '2025-03-09 02:01:56', '2025-03-09 02:01:56'),
(46, 4, 5, '2025-03-09', '2025-03-09 06:05:56', '2025-03-09 06:05:56'),
(47, 4, 5, '2025-03-09', '2025-03-09 08:01:25', '2025-03-09 08:01:25'),
(48, 4, 10, '2025-03-09', '2025-03-09 09:30:20', '2025-03-09 09:30:20'),
(49, 4, 0, '2025-03-09', '2025-03-09 09:59:50', '2025-03-09 09:59:50'),
(50, 4, 0, '2025-03-09', '2025-03-09 09:59:59', '2025-03-09 09:59:59'),
(51, 4, 0, '2025-03-09', '2025-03-09 10:01:07', '2025-03-09 10:01:07'),
(52, 4, 5, '2025-03-10', '2025-03-10 14:29:19', '2025-03-10 14:29:19'),
(53, 4, 10, '2025-03-10', '2025-03-10 15:56:36', '2025-03-10 15:56:36'),
(54, 4, 10, '2025-03-10', '2025-03-10 16:12:04', '2025-03-10 16:12:04'),
(55, 4, 5, '2025-03-11', '2025-03-10 17:06:11', '2025-03-10 17:06:11'),
(56, 4, 10, '2025-03-11', '2025-03-10 17:06:37', '2025-03-10 17:06:37'),
(57, 4, 5, '2025-03-11', '2025-03-10 17:08:16', '2025-03-10 17:08:16'),
(58, 4, 5, '2025-03-11', '2025-03-10 17:09:11', '2025-03-10 17:09:11'),
(59, 4, 5, '2025-03-11', '2025-03-10 17:22:10', '2025-03-10 17:22:10'),
(60, 4, 5, '2025-03-11', '2025-03-10 17:24:55', '2025-03-10 17:24:55'),
(61, 4, 5, '2025-03-11', '2025-03-10 18:10:29', '2025-03-10 18:10:29'),
(62, 4, 10, '2025-03-11', '2025-03-10 23:20:34', '2025-03-10 23:20:34'),
(63, 4, 5, '2025-03-11', '2025-03-11 00:15:28', '2025-03-11 00:15:28'),
(64, 4, 0, '2025-03-11', '2025-03-11 00:41:39', '2025-03-11 00:41:39'),
(65, 4, 5, '2025-03-11', '2025-03-11 00:41:59', '2025-03-11 00:41:59'),
(66, 4, 0, '2025-03-11', '2025-03-11 01:10:20', '2025-03-11 01:10:20'),
(67, 4, 0, '2025-03-11', '2025-03-11 01:12:15', '2025-03-11 01:12:15'),
(68, 5, 5, '2025-03-11', '2025-03-11 06:58:02', '2025-03-11 06:58:02'),
(69, 18, 45, '2025-03-12', '2025-03-12 07:34:09', '2025-03-12 07:34:09'),
(70, 18, 0, '2025-03-12', '2025-03-12 08:05:40', '2025-03-12 08:05:40'),
(71, 18, 0, '2025-03-12', '2025-03-12 08:06:34', '2025-03-12 08:06:34'),
(72, 18, 0, '2025-03-12', '2025-03-12 08:06:39', '2025-03-12 08:06:39'),
(73, 18, 0, '2025-03-12', '2025-03-12 08:06:52', '2025-03-12 08:06:52'),
(74, 18, 15, '2025-03-12', '2025-03-12 08:07:01', '2025-03-12 08:07:01'),
(75, 2, 0, '2025-03-13', '2025-03-13 03:41:37', '2025-03-13 03:41:37'),
(76, 2, 75, '2025-03-13', '2025-03-13 03:47:45', '2025-03-13 03:47:45'),
(77, 2, 70, '2025-03-13', '2025-03-13 04:29:31', '2025-03-13 04:29:31'),
(78, 2, 85, '2025-03-13', '2025-03-13 04:39:23', '2025-03-13 04:39:23'),
(79, 2, 80, '2025-03-13', '2025-03-13 13:31:56', '2025-03-13 13:31:56'),
(80, 2, 40, '2025-03-14', '2025-03-14 12:10:49', '2025-03-14 12:10:49');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_kuis_terjemahan_latin_ke_aksara`
--

CREATE TABLE `nilai_kuis_terjemahan_latin_ke_aksara` (
  `id` bigint UNSIGNED NOT NULL,
  `siswa_id` bigint UNSIGNED NOT NULL,
  `Nilai` int NOT NULL,
  `Tanggal` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nilai_kuis_terjemahan_latin_ke_aksara`
--

INSERT INTO `nilai_kuis_terjemahan_latin_ke_aksara` (`id`, `siswa_id`, `Nilai`, `Tanggal`, `created_at`, `updated_at`) VALUES
(1, 1, 78, '2025-01-24', '2025-01-23 11:19:27', '2025-01-23 11:19:27'),
(2, 2, 76, '2025-02-13', '2025-02-17 21:56:34', '2025-02-17 21:57:35'),
(3, 1, 98, '2025-02-18', '2025-02-17 21:58:36', '2025-02-17 21:58:36'),
(4, 2, 95, '2025-02-18', '2025-02-17 21:58:57', '2025-02-17 21:58:57'),
(5, 2, 73, '2025-02-19', '2025-02-19 09:03:22', '2025-02-19 09:03:22'),
(6, 2, 46, '2025-02-20', '2025-02-19 09:04:25', '2025-02-19 09:04:25'),
(7, 1, 85, '2025-02-22', '2025-02-22 03:09:50', '2025-02-22 03:09:50'),
(8, 2, 77, '2025-02-22', '2025-02-22 03:11:05', '2025-02-22 03:11:05'),
(11, 2, 10, '2025-02-22', '2025-02-22 04:49:27', '2025-02-22 04:49:27'),
(62, 2, 77, '2025-02-22', '2025-02-23 23:45:16', '2025-02-23 23:45:16'),
(63, 2, 5, '2025-02-24', '2025-02-24 00:53:10', '2025-02-24 00:53:10'),
(64, 2, 5, '2025-02-24', '2025-02-24 00:55:06', '2025-02-24 00:55:06'),
(65, 2, 10, '2025-02-24', '2025-02-24 01:16:00', '2025-02-24 01:16:00'),
(67, 2, 5, '2025-02-24', '2025-02-24 01:23:28', '2025-02-24 01:23:28'),
(68, 2, 5, '2025-02-24', '2025-02-24 01:41:11', '2025-02-24 01:41:11'),
(70, 2, 10, '2025-02-24', '2025-02-24 01:44:22', '2025-02-24 01:44:22'),
(71, 2, 5, '2025-02-24', '2025-02-24 02:20:35', '2025-02-24 02:20:35'),
(72, 2, 5, '2025-02-24', '2025-02-24 02:21:27', '2025-02-24 02:21:27'),
(73, 2, 5, '2025-02-24', '2025-02-24 04:56:07', '2025-02-24 04:56:07'),
(74, 2, 10, '2025-02-24', '2025-02-24 04:58:22', '2025-02-24 04:58:22'),
(75, 2, 0, '2025-02-25', '2025-02-24 19:41:30', '2025-02-24 19:41:30'),
(76, 2, 5, '2025-02-25', '2025-02-24 20:13:21', '2025-02-24 20:13:21'),
(77, 2, 0, '2025-02-25', '2025-02-24 20:27:38', '2025-02-24 20:27:38'),
(78, 2, 0, '2025-02-25', '2025-02-24 20:28:52', '2025-02-24 20:28:52'),
(79, 2, 5, '2025-02-25', '2025-02-24 20:36:58', '2025-02-24 20:36:58'),
(80, 2, 10, '2025-02-25', '2025-02-24 20:47:33', '2025-02-24 20:47:33'),
(81, 2, 5, '2025-02-25', '2025-02-24 21:31:40', '2025-02-24 21:31:40'),
(82, 2, 5, '2025-02-25', '2025-02-24 21:38:23', '2025-02-24 21:38:23'),
(83, 2, 10, '2025-02-25', '2025-02-24 21:39:08', '2025-02-24 21:39:08'),
(84, 1, 10, '2025-02-25', '2025-02-24 21:41:02', '2025-02-24 21:41:02'),
(85, 1, 10, '2025-02-25', '2025-02-24 21:41:58', '2025-02-24 21:41:58'),
(86, 1, 10, '2025-02-25', '2025-02-24 21:42:42', '2025-02-24 21:42:42'),
(87, 1, 0, '2025-02-25', '2025-02-24 22:14:38', '2025-02-24 22:14:38'),
(88, 2, 0, '2025-02-25', '2025-02-25 01:43:07', '2025-02-25 01:43:07'),
(89, 2, 0, '2025-02-25', '2025-02-25 02:08:54', '2025-02-25 02:08:54'),
(90, 2, 5, '2025-02-26', '2025-02-26 08:09:35', '2025-02-26 08:09:35'),
(91, 2, 15, '2025-02-26', '2025-02-26 08:10:33', '2025-02-26 08:10:33'),
(92, 2, 5, '2025-02-26', '2025-02-26 08:11:48', '2025-02-26 08:11:48'),
(93, 2, 15, '2025-02-26', '2025-02-26 08:25:48', '2025-02-26 08:25:48'),
(94, 2, 0, '2025-03-01', '2025-02-28 11:35:06', '2025-02-28 11:35:06'),
(95, 2, 0, '2025-03-02', '2025-03-01 16:36:48', '2025-03-01 16:36:48'),
(96, 2, 5, '2025-03-07', '2025-03-06 23:10:32', '2025-03-06 23:10:32'),
(97, 2, 10, '2025-03-07', '2025-03-06 23:11:09', '2025-03-06 23:11:09'),
(98, 2, 10, '2025-03-07', '2025-03-07 09:22:29', '2025-03-07 09:22:29'),
(99, 2, 0, '2025-03-07', '2025-03-07 09:23:09', '2025-03-07 09:23:09'),
(100, 2, 0, '2025-03-07', '2025-03-07 09:59:58', '2025-03-07 09:59:58'),
(101, 2, 5, '2025-03-08', '2025-03-07 10:09:01', '2025-03-07 10:09:01'),
(102, 2, 5, '2025-03-08', '2025-03-07 10:38:43', '2025-03-07 10:38:43'),
(103, 1, 10, '2025-03-08', '2025-03-07 10:42:22', '2025-03-07 10:42:22'),
(104, 4, 5, '2025-03-08', '2025-03-07 10:51:06', '2025-03-07 10:51:06'),
(105, 4, 5, '2025-03-08', '2025-03-07 10:52:03', '2025-03-07 10:52:03'),
(106, 4, 0, '2025-03-08', '2025-03-07 10:56:19', '2025-03-07 10:56:19'),
(107, 4, 5, '2025-03-08', '2025-03-07 10:56:52', '2025-03-07 10:56:52'),
(108, 4, 15, '2025-03-08', '2025-03-07 10:57:32', '2025-03-07 10:57:32'),
(109, 2, 0, '2025-03-08', '2025-03-08 01:31:43', '2025-03-08 01:31:43'),
(110, 4, 10, '2025-03-09', '2025-03-08 18:22:19', '2025-03-08 18:22:19'),
(111, 4, 5, '2025-03-09', '2025-03-09 01:45:54', '2025-03-09 01:45:54'),
(112, 4, 10, '2025-03-09', '2025-03-09 01:48:40', '2025-03-09 01:48:40'),
(113, 4, 5, '2025-03-09', '2025-03-09 02:01:47', '2025-03-09 02:01:47'),
(114, 4, 5, '2025-03-09', '2025-03-09 02:06:36', '2025-03-09 02:06:36'),
(115, 4, 5, '2025-03-09', '2025-03-09 02:06:49', '2025-03-09 02:06:49'),
(116, 4, 10, '2025-03-09', '2025-03-09 04:03:17', '2025-03-09 04:03:17'),
(117, 4, 10, '2025-03-09', '2025-03-09 06:06:56', '2025-03-09 06:06:56'),
(118, 4, 10, '2025-03-09', '2025-03-09 08:03:27', '2025-03-09 08:03:27'),
(119, 4, 5, '2025-03-09', '2025-03-09 08:08:49', '2025-03-09 08:08:49'),
(120, 4, 15, '2025-03-09', '2025-03-09 08:11:28', '2025-03-09 08:11:28'),
(121, 4, 10, '2025-03-09', '2025-03-09 09:11:24', '2025-03-09 09:11:24'),
(122, 4, 10, '2025-03-10', '2025-03-10 14:31:29', '2025-03-10 14:31:29'),
(123, 4, 0, '2025-03-10', '2025-03-10 16:42:11', '2025-03-10 16:42:11'),
(124, 4, 0, '2025-03-11', '2025-03-10 17:22:34', '2025-03-10 17:22:34'),
(125, 4, 0, '2025-03-11', '2025-03-10 23:21:20', '2025-03-10 23:21:20'),
(126, 4, 0, '2025-03-11', '2025-03-10 23:50:58', '2025-03-10 23:50:58'),
(127, 4, 5, '2025-03-11', '2025-03-11 00:30:52', '2025-03-11 00:30:52'),
(128, 4, 5, '2025-03-11', '2025-03-11 00:37:14', '2025-03-11 00:37:14'),
(129, 4, 0, '2025-03-11', '2025-03-11 00:39:10', '2025-03-11 00:39:10'),
(130, 4, 5, '2025-03-11', '2025-03-11 00:48:52', '2025-03-11 00:48:52'),
(131, 4, 0, '2025-03-11', '2025-03-11 00:49:55', '2025-03-11 00:49:55'),
(132, 4, 5, '2025-03-11', '2025-03-11 01:00:57', '2025-03-11 01:00:57'),
(133, 4, 5, '2025-03-11', '2025-03-11 01:04:01', '2025-03-11 01:04:01'),
(134, 4, 0, '2025-03-11', '2025-03-11 01:12:43', '2025-03-11 01:12:43'),
(135, 18, 15, '2025-03-12', '2025-03-12 07:35:13', '2025-03-12 07:35:13'),
(136, 18, 60, '2025-03-12', '2025-03-12 09:28:50', '2025-03-12 09:28:50'),
(137, 18, 0, '2025-03-12', '2025-03-12 09:59:39', '2025-03-12 09:59:39'),
(138, 18, 0, '2025-03-12', '2025-03-12 09:59:43', '2025-03-12 09:59:43'),
(139, 18, 0, '2025-03-12', '2025-03-12 09:59:50', '2025-03-12 09:59:50'),
(140, 2, 75, '2025-03-13', '2025-03-13 04:48:21', '2025-03-13 04:48:21'),
(141, 2, 0, '2025-03-13', '2025-03-13 05:14:43', '2025-03-13 05:14:43');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('3lChRC3OyHndmqPPICYYoH4WUItYvy6umx5xFTvk', 1, '192.168.0.105', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoibmxpazU5bjhtcmQzWkg2c0FLejVwU0ZiRUM3R1BWbXJzcjZCT3VVbSI7czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEyJHZzVUQ5aXphbm8wSWZ4blpoY2Zydk9WYVpDd0dGWlgudUphWXpaNllQUU51T2hETnMwdkxTIjtzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo1MjoiaHR0cDovLzE5Mi4xNjguMC4xMDU6ODAwMC9hZG1pbi9ha3NhcmEtc3dhcmFzLzEvZWRpdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1742065595),
('eZ11amqeBQlUKaphAQY1iOHJM847kPtqcqCxxtuL', 1, '192.168.0.105', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoidGZ5eEtKZlJZdENiUjJ4WEQ2OUpOcEhIZ1lWUXdQU2l6bkpaWm9CbCI7czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEyJHZzVUQ5aXphbm8wSWZ4blpoY2Zydk9WYVpDd0dGWlgudUphWXpaNllQUU51T2hETnMwdkxTIjtzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo1MjoiaHR0cDovLzE5Mi4xNjguMC4xMDU6ODAwMC9hZG1pbi9ha3NhcmEtc3dhcmFzLzEvZWRpdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1742065590),
('SrPYKPkN737BQV29IeRQmsP2Atl6ADarVk3loX5x', 1, '192.168.0.105', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiMG9mbVNuYWpUN2N5T3NUVWNIYXNqMGZvSEZUZmlDSWh4QXZUYVZqdyI7czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEyJHZzVUQ5aXphbm8wSWZ4blpoY2Zydk9WYVpDd0dGWlgudUphWXpaNllQUU51T2hETnMwdkxTIjtzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo0NToiaHR0cDovLzE5Mi4xNjguMC4xMDU6ODAwMC9hZG1pbi9ha3NhcmEtc3dhcmFzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo4OiJmaWxhbWVudCI7YTowOnt9fQ==', 1742066291);

-- --------------------------------------------------------

--
-- Table structure for table `siswas`
--

CREATE TABLE `siswas` (
  `id` bigint UNSIGNED NOT NULL,
  `NIS` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NAMA` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `siswas`
--

INSERT INTO `siswas` (`id`, `NIS`, `NAMA`, `created_at`, `updated_at`) VALUES
(1, '2021081015', 'Nanda Aprillia Lestari Mufti', '2024-12-23 10:53:10', '2025-02-19 08:34:55'),
(2, '12345', 'nabila', '2024-12-24 00:51:19', '2024-12-24 00:51:19'),
(4, '456789', 'deti siti', '2025-01-25 06:32:01', '2025-01-25 06:32:01'),
(5, '0987654321', 'vita', '2025-03-11 06:31:59', '2025-03-11 06:31:59'),
(9, '242510254577', 'Abi Nur Alamsyah', '2025-03-11 07:39:09', '2025-03-11 07:39:09'),
(10, '242510254578', 'Agus Setiawan', '2025-03-11 07:40:38', '2025-03-11 07:40:38'),
(11, '242510254579', 'Aigif Ramdan', '2025-03-11 07:41:02', '2025-03-11 07:41:02'),
(12, '242510254580', 'Aira Devti Permanik', '2025-03-11 07:41:39', '2025-03-11 07:41:39'),
(13, '242510254581', 'Alif Nurohman', '2025-03-11 07:41:55', '2025-03-11 07:41:55'),
(14, '242510254582', 'Andre Nugraha', '2025-03-11 07:42:20', '2025-03-11 07:42:20'),
(15, '242510254583', 'Anisa Yulia Ningsih', '2025-03-11 07:42:47', '2025-03-11 07:42:47'),
(16, '242510254584', 'Azizah Sri Nur Asih', '2025-03-11 07:43:19', '2025-03-11 07:43:19'),
(17, '242510254585', 'Dadan Muhamad Ridwan', '2025-03-11 07:43:40', '2025-03-11 07:43:40'),
(18, '242510254586', 'Devina Fitriyani', '2025-03-11 07:43:59', '2025-03-11 07:43:59'),
(19, '242510254587', 'Evan Fauzan Kamil', '2025-03-11 07:44:48', '2025-03-11 07:44:48'),
(20, '242510254588', 'Fahri Muhammad Zikry', '2025-03-11 07:45:33', '2025-03-11 07:45:33'),
(21, '242510254589', 'Farida Triyani', '2025-03-11 07:45:51', '2025-03-11 07:45:51'),
(22, '242510254590', 'Ghani Fairus', '2025-03-11 07:46:20', '2025-03-11 07:46:20'),
(23, '242510254591', 'Gia Fazrika Putri', '2025-03-11 07:47:00', '2025-03-11 07:47:00'),
(24, '242510254592', 'Hamdan Algiyats', '2025-03-11 07:47:48', '2025-03-11 07:47:48'),
(25, '242510254593', 'Iksan', '2025-03-11 07:48:04', '2025-03-11 07:48:04'),
(26, '242510254594', 'Indrya Febryanti', '2025-03-11 07:48:44', '2025-03-11 07:48:44'),
(27, '242510254595', 'Kristy Halda Fahira', '2025-03-11 07:49:49', '2025-03-11 07:49:49'),
(28, '242510254596', 'Lia Meliyani', '2025-03-11 07:50:10', '2025-03-11 07:50:10'),
(29, '242510254597', 'Mochamad Anugrah Dwi Putra', '2025-03-11 07:50:40', '2025-03-11 07:50:40'),
(30, '242510254598', 'Muamar Sulfitra Ramadhan', '2025-03-11 07:51:15', '2025-03-11 07:51:15'),
(31, '242510254599', 'Muhammad Ferdy Vernando', '2025-03-11 07:51:50', '2025-03-11 07:51:50'),
(32, '242510254600', 'Muhammad Rian', '2025-03-11 07:52:40', '2025-03-11 07:52:40'),
(33, '242510254601', 'Nazwa Nurviani', '2025-03-11 07:53:00', '2025-03-11 07:53:00'),
(34, '242510254602', 'Nia Yuniarti', '2025-03-11 07:53:20', '2025-03-11 07:53:20'),
(35, '242510254603', 'Oktaviani Nursafitri', '2025-03-11 07:54:07', '2025-03-11 07:54:07'),
(36, '242510254604', 'Pandu Pratama', '2025-03-11 07:54:46', '2025-03-11 07:54:46'),
(37, '242510254605', 'Raihan Eka Ramadhan', '2025-03-11 07:55:05', '2025-03-11 07:55:05'),
(38, '242510254606', 'Ratu Riyani Wulansari', '2025-03-11 07:55:47', '2025-03-11 07:55:47'),
(39, '242510254607', 'Rismayadi Afrizal', '2025-03-11 07:56:18', '2025-03-11 07:56:18'),
(40, '242510254608', 'Riva Zenira Putri Triani', '2025-03-11 07:56:53', '2025-03-11 07:56:53'),
(41, '242510254609', 'Ryan Khaindra Utama', '2025-03-11 07:57:23', '2025-03-11 07:57:23'),
(42, '242510254610', 'Silvia Tri Lestari', '2025-03-11 07:57:49', '2025-03-11 07:57:49'),
(43, '242510254611', 'Viona Rekaniah Nur Agustin', '2025-03-11 07:58:20', '2025-03-11 07:58:20'),
(44, '242510254612', 'Zian Oktaviana', '2025-03-11 07:58:39', '2025-03-11 07:58:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$12$vsUD9izano0IfxnZhcfrvOVaZCwGFZX.uJaYzZ6YPQNuOhDNs0vLS', 'CjMz3F1N3i98TaYzYk753zj7tjzfL0GO1o6Y8LlYz3c9PyJi2ORijBvIb7GW', '2024-12-23 08:19:35', '2024-12-23 08:19:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aksara_ngalagenas`
--
ALTER TABLE `aksara_ngalagenas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aksara_swaras`
--
ALTER TABLE `aksara_swaras`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kuis_terjemahan_aksara_ke_latins`
--
ALTER TABLE `kuis_terjemahan_aksara_ke_latins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kuis_terjemahan_latin_ke_aksaras`
--
ALTER TABLE `kuis_terjemahan_latin_ke_aksaras`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `media_uuid_unique` (`uuid`),
  ADD KEY `media_model_type_model_id_index` (`model_type`,`model_id`),
  ADD KEY `media_order_column_index` (`order_column`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai_kuis_menulis_aksara_ngalagena_1`
--
ALTER TABLE `nilai_kuis_menulis_aksara_ngalagena_1`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nilai_kuis_menulis_aksara_ngalagena_1_siswa_id_foreign` (`siswa_id`);

--
-- Indexes for table `nilai_kuis_menulis_aksara_ngalagena_2`
--
ALTER TABLE `nilai_kuis_menulis_aksara_ngalagena_2`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nilai_kuis_menulis_aksara_ngalagena_2_siswa_id_foreign` (`siswa_id`);

--
-- Indexes for table `nilai_kuis_menulis_aksara_ngalagena_3`
--
ALTER TABLE `nilai_kuis_menulis_aksara_ngalagena_3`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nilai_kuis_menulis_aksara_ngalagena_3_siswa_id_foreign` (`siswa_id`);

--
-- Indexes for table `nilai_kuis_menulis_aksara_swara`
--
ALTER TABLE `nilai_kuis_menulis_aksara_swara`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nilai_kuis_menulis_aksara_swara_siswa_id_foreign` (`siswa_id`);

--
-- Indexes for table `nilai_kuis_terjemahan_aksara_ke_latins`
--
ALTER TABLE `nilai_kuis_terjemahan_aksara_ke_latins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nilai_kuis_terjemahan_aksara_ke_latins_siswa_id_foreign` (`siswa_id`);

--
-- Indexes for table `nilai_kuis_terjemahan_latin_ke_aksara`
--
ALTER TABLE `nilai_kuis_terjemahan_latin_ke_aksara`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nilai_kuis_terjemahan_latin_ke_aksara_siswa_id_foreign` (`siswa_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `siswas`
--
ALTER TABLE `siswas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aksara_ngalagenas`
--
ALTER TABLE `aksara_ngalagenas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `aksara_swaras`
--
ALTER TABLE `aksara_swaras`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kuis_terjemahan_aksara_ke_latins`
--
ALTER TABLE `kuis_terjemahan_aksara_ke_latins`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `kuis_terjemahan_latin_ke_aksaras`
--
ALTER TABLE `kuis_terjemahan_latin_ke_aksaras`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `nilai_kuis_menulis_aksara_ngalagena_1`
--
ALTER TABLE `nilai_kuis_menulis_aksara_ngalagena_1`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `nilai_kuis_menulis_aksara_ngalagena_2`
--
ALTER TABLE `nilai_kuis_menulis_aksara_ngalagena_2`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `nilai_kuis_menulis_aksara_ngalagena_3`
--
ALTER TABLE `nilai_kuis_menulis_aksara_ngalagena_3`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `nilai_kuis_menulis_aksara_swara`
--
ALTER TABLE `nilai_kuis_menulis_aksara_swara`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `nilai_kuis_terjemahan_aksara_ke_latins`
--
ALTER TABLE `nilai_kuis_terjemahan_aksara_ke_latins`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `nilai_kuis_terjemahan_latin_ke_aksara`
--
ALTER TABLE `nilai_kuis_terjemahan_latin_ke_aksara`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `siswas`
--
ALTER TABLE `siswas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `nilai_kuis_menulis_aksara_ngalagena_1`
--
ALTER TABLE `nilai_kuis_menulis_aksara_ngalagena_1`
  ADD CONSTRAINT `nilai_kuis_menulis_aksara_ngalagena_1_siswa_id_foreign` FOREIGN KEY (`siswa_id`) REFERENCES `siswas` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `nilai_kuis_menulis_aksara_ngalagena_2`
--
ALTER TABLE `nilai_kuis_menulis_aksara_ngalagena_2`
  ADD CONSTRAINT `nilai_kuis_menulis_aksara_ngalagena_2_siswa_id_foreign` FOREIGN KEY (`siswa_id`) REFERENCES `siswas` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `nilai_kuis_menulis_aksara_ngalagena_3`
--
ALTER TABLE `nilai_kuis_menulis_aksara_ngalagena_3`
  ADD CONSTRAINT `nilai_kuis_menulis_aksara_ngalagena_3_siswa_id_foreign` FOREIGN KEY (`siswa_id`) REFERENCES `siswas` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `nilai_kuis_menulis_aksara_swara`
--
ALTER TABLE `nilai_kuis_menulis_aksara_swara`
  ADD CONSTRAINT `nilai_kuis_menulis_aksara_swara_siswa_id_foreign` FOREIGN KEY (`siswa_id`) REFERENCES `siswas` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `nilai_kuis_terjemahan_aksara_ke_latins`
--
ALTER TABLE `nilai_kuis_terjemahan_aksara_ke_latins`
  ADD CONSTRAINT `nilai_kuis_terjemahan_aksara_ke_latins_siswa_id_foreign` FOREIGN KEY (`siswa_id`) REFERENCES `siswas` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `nilai_kuis_terjemahan_latin_ke_aksara`
--
ALTER TABLE `nilai_kuis_terjemahan_latin_ke_aksara`
  ADD CONSTRAINT `nilai_kuis_terjemahan_latin_ke_aksara_siswa_id_foreign` FOREIGN KEY (`siswa_id`) REFERENCES `siswas` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
