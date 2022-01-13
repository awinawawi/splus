/*
 Navicat Premium Data Transfer

 Source Server         : Amazon DB
 Source Server Type    : MySQL
 Source Server Version : 50722
 Source Host           : dbcloud.ct1z8ptclyeg.ap-southeast-1.rds.amazonaws.com:3306
 Source Schema         : db_splus

 Target Server Type    : MySQL
 Target Server Version : 50722
 File Encoding         : 65001
db_splusdb_splus
 Date: 18/02/2020 08:38:34
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tbl_galeri
-- ----------------------------
DROP TABLE IF EXISTS `tbl_galeri`;
CREATE TABLE `tbl_galeri`  (
  `galeri_id` int(11) NOT NULL AUTO_INCREMENT,
  `galeri_judul` varchar(60) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `galeri_tanggal` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0),
  `galeri_gambar` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `galeri_kategori_id` int(11) NULL DEFAULT NULL,
  `galeri_pengguna_id` int(11) NULL DEFAULT NULL,
  `galeri_author` varchar(60) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`galeri_id`) USING BTREE,
  INDEX `galeri_album_id`(`galeri_kategori_id`) USING BTREE,
  INDEX `galeri_pengguna_id`(`galeri_pengguna_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for tbl_inbox
-- ----------------------------
DROP TABLE IF EXISTS `tbl_inbox`;
CREATE TABLE `tbl_inbox`  (
  `inbox_id` int(11) NOT NULL AUTO_INCREMENT,
  `inbox_nama` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `inbox_email` varchar(60) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `inbox_kontak` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `inbox_pesan` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `inbox_tanggal` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0),
  `inbox_status` int(11) NULL DEFAULT 1 COMMENT '1=Belum dilihat, 0=Telah dilihat',
  PRIMARY KEY (`inbox_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for tbl_kategori
-- ----------------------------
DROP TABLE IF EXISTS `tbl_kategori`;
CREATE TABLE `tbl_kategori`  (
  `kategori_id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_nama` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kategori_deskripsi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kategori_tanggal` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0),
  `kategori_pengguna_id` int(11) NULL DEFAULT NULL,
  `kategori_author` varchar(60) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kategori_count` int(11) NULL DEFAULT 0,
  `kategori_cover` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`kategori_id`) USING BTREE,
  INDEX `album_pengguna_id`(`kategori_pengguna_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_kategori
-- ----------------------------
INSERT INTO `tbl_kategori` VALUES (3, 'S-PLUS PINTU', 'S+ Door menjadikan ruangan anda menjadi nyaman dan penuh ketenangan yang dipancarkan oleh berbagai macam warna dan tekstur yang khas. Dengan tekstur kayu yang sangat mirip dengan kayu yang sebenarnya memberi kesan keindahan yang alami.', '2020-01-14 03:06:23', 2, 'Jenat', 5, '527e8e4535016385a675b7e8793c0a0a.png');
INSERT INTO `tbl_kategori` VALUES (4, 'S-PLUS JENDELA', 'S+ Jendel', '2020-01-14 03:06:58', 2, 'Jenat', 0, '7a0aca8a8e8cc6ef6e376346538af455.png');
INSERT INTO `tbl_kategori` VALUES (5, 'S-PLUS PLAFON', 'S+ Plafon', '2020-01-14 03:07:15', 2, 'Jenat', 0, '4335476687ab48555a9181c7b9a03999.png');
INSERT INTO `tbl_kategori` VALUES (7, 'S-PLUS WPC DECK TILE', 'S+ WPC Deck', '2020-01-14 03:09:00', 2, 'Jenat', 0, 'a9a8e1f4ece6b6d93992010c004ffe6d.png');
INSERT INTO `tbl_kategori` VALUES (8, 'S-PLUS SUN SHADE', 'S+ Sun Shade', '2020-01-14 03:09:21', 2, 'Jenat', 0, '72a5c3f21c9702bc2db3048fe7255df9.png');
INSERT INTO `tbl_kategori` VALUES (9, 'S-PLUS SOLID SURFACE', 'S+ Solid surface adalah material sintetis mirip dengan batu granit atau batu marmer yang terbuat dari campuran Unsaturated Polyester (UPE) dan Filer Aluminium Tri-Hydroxide (ATH). Solid surface memiliki banyak keunggulan. Jika batu marmer atau granit memiliki pori-pori pada permukaannya, maka solid surface tidak memiliki pori-pori', '2020-01-29 00:56:34', 2, 'Jenat', 0, 'bb4a9f57fb644b614d1b8050ded37e5c.png');
INSERT INTO `tbl_kategori` VALUES (10, 'S-PLUS KITCHEN SET', 'S+ Kitchen Set', '2020-01-29 00:56:45', 2, 'Jenat', 0, '5e2247186fda852d07e1797d2d65668c.png');
INSERT INTO `tbl_kategori` VALUES (11, 'NAMO-PINTU', 'NAMO', '2020-02-11 02:06:39', 2, 'Jenat', 0, '7dbc31f7e1cb535948332a9ec78f3edb.jpg');

-- ----------------------------
-- Table structure for tbl_komentar
-- ----------------------------
DROP TABLE IF EXISTS `tbl_komentar`;
CREATE TABLE `tbl_komentar`  (
  `komentar_id` int(11) NOT NULL AUTO_INCREMENT,
  `komentar_nama` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `komentar_email` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `komentar_web` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `komentar_isi` varchar(120) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `komentar_tanggal` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0),
  `komentar_status` int(2) NULL DEFAULT 0,
  `komentar_tulisan_id` int(11) NULL DEFAULT NULL,
  `komentar_parent` int(11) NULL DEFAULT 0,
  PRIMARY KEY (`komentar_id`) USING BTREE,
  INDEX `komentar_tulisan_id`(`komentar_tulisan_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for tbl_log_aktivitas
-- ----------------------------
DROP TABLE IF EXISTS `tbl_log_aktivitas`;
CREATE TABLE `tbl_log_aktivitas`  (
  `log_id` int(11) NOT NULL AUTO_INCREMENT,
  `log_nama` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `log_tanggal` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0),
  `log_ip` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `log_pengguna_id` int(11) NULL DEFAULT NULL,
  `log_icon` blob NULL,
  `log_jenis_icon` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`log_id`) USING BTREE,
  INDEX `log_pengguna_id`(`log_pengguna_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for tbl_pelanggan
-- ----------------------------
DROP TABLE IF EXISTS `tbl_pelanggan`;
CREATE TABLE `tbl_pelanggan`  (
  `pelanggan_id` int(11) NOT NULL AUTO_INCREMENT,
  `pelanggan_foto` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pelanggan_nama` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `pelanggan_provinsi` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `pelanggan_kecamatan` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `pelanggan_kota` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `pelanggan_kelurahan` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `pelanggan_alamat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `pelanggan_kodepos` decimal(5, 0) NULL DEFAULT NULL,
  `pelanggan_ttl` date NULL DEFAULT NULL,
  `pelanggan_telpon` decimal(15, 0) NULL DEFAULT NULL,
  `pelanggan_username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `pelanggan_email` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `pelanggan_password` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `pelanggan_status` enum('verify','active') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT 'verify',
  `pelanggan_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `pelanggan_last_login` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0) ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`pelanggan_id`, `pelanggan_foto`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_pelanggan
-- ----------------------------
INSERT INTO `tbl_pelanggan` VALUES (3, 'a245b4b6e746bf5e1c4ddac3e978476f.png', 'Splus Indonesia', 'JAWA BARAT', 'HARJAMUKTI', 'KOTA CIREBON', 'KALIJAGA', 'Jl. Raya Kanci ', 45144, '1992-07-28', 8794548241, 'splusindo', 'splusindo255@gmail.com', '$2y$10$qfcDQyjkEj1Pplta5A8hjeJa6Mwe/hEaprFLuDvSeW4k1zy25Q8lu', 'active', '400345', '2020-02-18 01:22:27');
INSERT INTO `tbl_pelanggan` VALUES (4, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'faradillaiva@gmail.com', NULL, 'verify', '400345', '2020-02-18 01:22:27');

-- ----------------------------
-- Table structure for tbl_pelanggan_keranjang
-- ----------------------------
DROP TABLE IF EXISTS `tbl_pelanggan_keranjang`;
CREATE TABLE `tbl_pelanggan_keranjang`  (
  `keranjang_id` int(11) NOT NULL AUTO_INCREMENT,
  `keranjang_pelanggan_id` int(11) NULL DEFAULT NULL,
  `keranjang_produk_id` int(11) NULL DEFAULT NULL,
  `keranjang_kuantitas` int(11) NULL DEFAULT NULL,
  `keranjang_total` int(20) NULL DEFAULT NULL,
  `keranjang_warna` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `keranjang_ukuran` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`keranjang_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 18 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_pelanggan_keranjang
-- ----------------------------
INSERT INTO `tbl_pelanggan_keranjang` VALUES (17, 3, 231, 1, 402600, '1023#743', '');

-- ----------------------------
-- Table structure for tbl_pelanggan_pesanan
-- ----------------------------
DROP TABLE IF EXISTS `tbl_pelanggan_pesanan`;
CREATE TABLE `tbl_pelanggan_pesanan`  (
  `pesanan_id` int(11) NOT NULL AUTO_INCREMENT,
  `pesanan_faktur` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `pesanan_pelanggan_id` int(11) NULL DEFAULT NULL,
  `pesanan_produk_id` int(11) NULL DEFAULT NULL,
  `pesanan_kuantitas` int(10) NULL DEFAULT NULL,
  `pesanan_total` int(20) NULL DEFAULT NULL,
  `pesanan_status` enum('Sudah Bayar','Belum Bayar','Selesai') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `pesanan_pengiriman` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `pesanan_tanggal` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0) ON UPDATE CURRENT_TIMESTAMP(0),
  `pesanan_catatan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `pesanan_metode_pembayaran` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `pesanan_warna` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `pesanan_ukuran` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`pesanan_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_pelanggan_pesanan
-- ----------------------------
INSERT INTO `tbl_pelanggan_pesanan` VALUES (13, 'SPLUS39873', 3, 232, 2, 721600, 'Sudah Bayar', NULL, '2020-02-03 03:27:44', NULL, 'Virtual Account Mandiri', 'Brown', '200x800');
INSERT INTO `tbl_pelanggan_pesanan` VALUES (14, 'SPLUS67291', 3, 231, 4, 1610400, 'Belum Bayar', NULL, '2020-02-13 03:59:35', NULL, 'Virtual Account MANDIRI', '1023#743', NULL);

-- ----------------------------
-- Table structure for tbl_pengguna
-- ----------------------------
DROP TABLE IF EXISTS `tbl_pengguna`;
CREATE TABLE `tbl_pengguna`  (
  `pengguna_id` int(11) NOT NULL AUTO_INCREMENT,
  `pengguna_nama` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pengguna_moto` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pengguna_jenkel` varchar(2) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pengguna_username` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pengguna_password` varchar(35) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pengguna_tentang` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `pengguna_email` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pengguna_nohp` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pengguna_facebook` varchar(35) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pengguna_twitter` varchar(35) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pengguna_linkdin` varchar(35) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pengguna_google_plus` varchar(35) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pengguna_status` int(2) NULL DEFAULT 1,
  `pengguna_level` varchar(3) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pengguna_register` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0),
  `pengguna_photo` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`pengguna_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_pengguna
-- ----------------------------
INSERT INTO `tbl_pengguna` VALUES (2, 'Jenat', NULL, 'P', 'admin', '21232f297a57a5a743894a0e4a801fc3', NULL, 'w@gmail.com', '001001001001', NULL, NULL, NULL, NULL, 1, '1', '2020-01-13 06:31:34', '0284cb1f94c0b62dd8d3afd02a828d0a.png');

-- ----------------------------
-- Table structure for tbl_pengunjung
-- ----------------------------
DROP TABLE IF EXISTS `tbl_pengunjung`;
CREATE TABLE `tbl_pengunjung`  (
  `pengunjung_id` int(10) NOT NULL AUTO_INCREMENT,
  `pengunjung_tanggal` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0),
  `pengunjung_ip` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pengunjung_perangkat` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`pengunjung_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 28 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_pengunjung
-- ----------------------------
INSERT INTO `tbl_pengunjung` VALUES (1, '2020-01-27 03:53:21', '::1', 'Chrome');
INSERT INTO `tbl_pengunjung` VALUES (2, '2020-01-28 00:45:59', '::1', 'Chrome');
INSERT INTO `tbl_pengunjung` VALUES (3, '2020-01-29 00:48:52', '::1', 'Chrome');
INSERT INTO `tbl_pengunjung` VALUES (4, '2020-01-30 01:21:13', '::1', 'Chrome');
INSERT INTO `tbl_pengunjung` VALUES (5, '2020-01-31 00:58:41', '::1', 'Chrome');
INSERT INTO `tbl_pengunjung` VALUES (6, '2020-02-01 02:59:26', '::1', 'Chrome');
INSERT INTO `tbl_pengunjung` VALUES (7, '2020-02-03 00:37:45', '::1', 'Chrome');
INSERT INTO `tbl_pengunjung` VALUES (8, '2020-02-04 00:21:35', '::1', 'Chrome');
INSERT INTO `tbl_pengunjung` VALUES (9, '2020-02-05 00:46:52', '::1', 'Chrome');
INSERT INTO `tbl_pengunjung` VALUES (10, '2020-02-05 00:52:59', '127.0.0.1', 'Firefox');
INSERT INTO `tbl_pengunjung` VALUES (11, '2020-02-05 00:52:59', '127.0.0.1', 'Firefox');
INSERT INTO `tbl_pengunjung` VALUES (12, '2020-02-06 00:48:19', '::1', 'Chrome');
INSERT INTO `tbl_pengunjung` VALUES (13, '2020-02-07 01:00:55', '::1', 'Chrome');
INSERT INTO `tbl_pengunjung` VALUES (14, '2020-02-08 00:54:19', '::1', 'Chrome');
INSERT INTO `tbl_pengunjung` VALUES (15, '2020-02-10 01:00:19', '::1', 'Chrome');
INSERT INTO `tbl_pengunjung` VALUES (16, '2020-02-11 00:52:09', '127.0.0.1', 'Chrome');
INSERT INTO `tbl_pengunjung` VALUES (17, '2020-02-11 00:52:23', '::1', 'Chrome');
INSERT INTO `tbl_pengunjung` VALUES (18, '2020-02-11 07:51:32', '192.168.1.186', 'Chrome');
INSERT INTO `tbl_pengunjung` VALUES (19, '2020-02-11 08:34:13', '192.168.1.80', 'Chrome');
INSERT INTO `tbl_pengunjung` VALUES (20, '2020-02-12 00:52:57', '::1', 'Chrome');
INSERT INTO `tbl_pengunjung` VALUES (21, '2020-02-12 03:47:48', '103.10.60.214', 'Chrome');
INSERT INTO `tbl_pengunjung` VALUES (22, '2020-02-13 00:54:20', '::1', 'Chrome');
INSERT INTO `tbl_pengunjung` VALUES (23, '2020-02-13 03:01:00', '192.168.1.23', 'Chrome');
INSERT INTO `tbl_pengunjung` VALUES (24, '2020-02-14 00:45:30', '::1', 'Chrome');
INSERT INTO `tbl_pengunjung` VALUES (25, '2020-02-15 00:41:52', '::1', 'Chrome');
INSERT INTO `tbl_pengunjung` VALUES (26, '2020-02-17 01:23:08', '::1', 'Chrome');
INSERT INTO `tbl_pengunjung` VALUES (27, '2020-02-18 00:49:50', '::1', 'Chrome');

-- ----------------------------
-- Table structure for tbl_produk
-- ----------------------------
DROP TABLE IF EXISTS `tbl_produk`;
CREATE TABLE `tbl_produk`  (
  `produk_id` int(20) NOT NULL AUTO_INCREMENT,
  `produk_judul` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `produk_tanggal` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0),
  `produk_type` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `produk_deskripsi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `produk_harga` int(50) NULL DEFAULT NULL,
  `produk_kategori_id` int(20) NULL DEFAULT NULL,
  `produk_stok` int(10) NULL DEFAULT NULL,
  `produk_gambar` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `produk_warna` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `produk_ukuran` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `produk_pengguna_id` int(11) NULL DEFAULT NULL,
  `produk_author` varchar(60) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`produk_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 241 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_produk
-- ----------------------------
INSERT INTO `tbl_produk` VALUES (2, 'Classic KL 1', '2020-01-27 03:29:27', 'classic', 'Daun + Kusen', 1331000, 3, 1000, '', '', '800,2000', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (3, 'Classic KL 1', '2020-01-27 03:30:35', 'classic', 'Daun + Kusen', 1524600, 3, 1000, '', '', '900,2100', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (4, 'Classic KL 2', '2020-01-27 03:33:22', 'classic', 'Daun', 968000, 3, 1000, '', '', '730,1960', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (5, 'Classic KL 2', '2020-01-27 04:18:13', 'classic', 'Daun', 1120350, 3, 200, '', '', '830,2060', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (6, 'Fortebello A', '2020-01-27 04:19:20', 'fortebello', 'Daun + Kusen', 1958500, 3, 300, '', '', '700,1900', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (7, 'Fortebello A', '2020-01-27 06:17:31', 'fortebello', 'Daun + Kusen', 2071650, 3, 250, NULL, NULL, '800,2000', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (8, 'Fortebello A', '2020-01-27 06:18:54', 'fortebello', 'Daun + Kusen', 2175500, 3, 230, NULL, NULL, '800,2100', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (9, 'Fortebello A', '2020-01-27 06:22:26', 'fortebello', 'Daun + Kusen', 2262000, 3, 220, NULL, NULL, '900,2100', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (10, 'Fortebello A', '2020-01-27 06:23:33', 'fortebello', 'Daun + Kusen', 2489600, 3, 240, NULL, NULL, '900,2400', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (11, 'Fortebello A', '2020-01-27 06:26:27', 'fortebello', 'Daun', 1261060, 3, 210, NULL, NULL, '630,1860', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (12, 'Fortebello A', '2020-01-27 06:28:18', 'fortebello', 'Daun', 1330280, 3, 205, NULL, NULL, '730,1960', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (13, 'Fortebello A', '2020-01-27 06:29:47', 'fortebello', 'Daun', 1396830, 3, 204, NULL, NULL, '730,2060', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (14, 'Fortebello A', '2020-01-27 06:33:53', 'fortebello', 'Daun', 1458050, 3, 210, NULL, NULL, '830,2060', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (15, 'Fortebello A', '2020-01-27 06:35:04', 'fortebello', 'Daun', 1604460, 3, 202, NULL, NULL, '830,2360', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (16, 'Fortebello B', '2020-01-27 06:49:07', 'fortebello', 'Daun + Kusen', 1958500, 3, 203, NULL, NULL, '700,1900', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (17, 'Fortebello B', '2020-01-27 06:51:09', 'fortebello', 'Daun + Kusen', 2071650, 3, 205, NULL, NULL, '800,2000', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (18, 'Fortebello B', '2020-01-27 06:52:01', 'fortebello', 'Daun + Kusen', 2175500, 3, 204, NULL, NULL, '800,2100', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (19, 'Fortebello B', '2020-01-27 06:53:01', 'fortebello', 'Daun + Kusen', 2262000, 3, 202, NULL, NULL, '900,2100', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (20, 'Fortebello B', '2020-01-28 01:05:23', 'fortebello', 'Daun + Kusen', 2489600, 3, 203, NULL, NULL, '900,2400', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (21, 'Fortebello B', '2020-01-28 01:07:58', 'fortebello', 'Daun', 1261060, 3, 205, NULL, NULL, '630,1860', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (22, 'Fortebello B', '2020-01-28 01:12:57', 'fortebello', 'Daun', 1330280, 3, 203, NULL, NULL, '730,1960', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (23, 'Fortebello B', '2020-01-28 01:13:00', 'fortebello', 'Daun', 1396830, 3, 202, NULL, NULL, '730,2060', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (24, 'Fortebello B', '2020-01-28 01:13:03', 'fortebello', 'Daun', 1458050, 3, 201, NULL, NULL, '830,2060', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (25, 'Fortebello B', '2020-01-28 01:13:13', 'fortebello', 'Daun', 1604460, 3, 199, NULL, NULL, '830,2360', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (26, 'Fortebello C', '2020-01-28 01:15:39', 'fortebello', 'Daun + Kusen', 1958500, 3, 196, NULL, NULL, '700,1900', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (27, 'Fortebello C', '2020-01-28 01:16:02', 'fortebello', 'Daun + Kusen', 2071650, 3, 206, NULL, NULL, '800,2000', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (28, 'Fortebello C', '2020-01-28 01:16:08', 'fortebello', 'Daun + Kusen', 2175500, 3, 207, NULL, NULL, '800,2100', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (29, 'Fortebello C', '2020-01-28 01:16:11', 'fortebello', 'Daun + Kusen', 2262000, 3, 248, NULL, NULL, '900,2100', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (30, 'Fortebello C', '2020-01-28 01:16:17', 'fortebello', 'Daun + Kusen', 2489600, 3, 233, NULL, NULL, '900,2400', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (31, 'Fortebello C', '2020-01-28 01:22:12', 'fortebello', 'Daun', 1261060, 3, 205, NULL, NULL, '630,1860', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (32, 'Fortebello C', '2020-01-28 01:22:27', 'fortebello', 'Daun', 1330280, 3, 208, NULL, NULL, '730,1960', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (33, 'Fortebello C', '2020-01-28 01:22:34', 'fortebello', 'Daun', 1396830, 3, 201, NULL, NULL, '730,2060', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (34, 'Fortebello C', '2020-01-28 01:22:37', 'fortebello', 'Daun', 1458050, 3, 209, NULL, NULL, '830,2060', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (35, 'Fortebello C', '2020-01-28 01:22:44', 'fortebello', 'Daun', 1604460, 3, 208, NULL, NULL, '830,2360', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (36, 'Fortebello D', '2020-01-28 02:02:03', 'fortebello', 'Daun + Kusen', 1958500, 3, 201, NULL, NULL, '700,1900', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (37, 'Fortebello D', '2020-01-28 02:02:18', 'fortebello', 'Daun + Kusen', 2071650, 3, 209, NULL, NULL, '800,2000', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (38, 'Fortebello D', '2020-01-28 02:02:22', 'fortebello', 'Daun + Kusen', 2175500, 3, 206, NULL, NULL, '800,2100', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (39, 'Fortebello D', '2020-01-28 02:02:25', 'fortebello', 'Daun + Kusen', 2262000, 3, 201, NULL, NULL, '900,2100', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (40, 'Fortebello D', '2020-01-28 02:02:31', 'fortebello', 'Daun + Kusen', 2489600, 3, 205, NULL, NULL, '900,2400', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (41, 'Fortebello D', '2020-01-28 02:04:57', 'fortebello', 'Daun', 1261060, 3, 201, NULL, NULL, '630,1860', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (42, 'Fortebello D', '2020-01-28 02:05:03', 'fortebello', 'Daun', 1330280, 3, 97, NULL, NULL, '730,1960', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (43, 'Fortebello D', '2020-01-28 02:05:05', 'fortebello', 'Daun', 1396830, 3, 92, NULL, NULL, '730,2060', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (44, 'Fortebello D', '2020-01-28 02:05:08', 'fortebello', 'Daun', 1458050, 3, 95, NULL, NULL, '830,2060', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (45, 'Fortebello D', '2020-01-28 02:05:11', 'fortebello', 'Daun', 1604460, 3, 94, NULL, NULL, '830,2360', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (46, 'Fortebello E', '2020-01-28 02:07:55', 'fortebello', 'Daun + Kusen', 1958500, 3, 108, NULL, NULL, '700,1900', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (47, 'Fortebello E', '2020-01-28 02:08:07', 'fortebello', 'Daun + Kusen', 2071650, 3, 106, NULL, NULL, '800,2000', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (48, 'Fortebello E', '2020-01-28 02:08:10', 'fortebello', 'Daun + Kusen', 2175500, 3, 107, NULL, NULL, '800,2100', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (49, 'Fortebello E', '2020-01-28 02:08:14', 'fortebello', 'Daun + Kusen', 2262000, 3, 101, NULL, NULL, '900,2100', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (50, 'Fortebello E', '2020-01-28 02:08:17', 'fortebello', 'Daun + Kusen', 2489600, 3, 111, NULL, NULL, '900,2400', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (51, 'Fortebello E', '2020-01-28 02:10:35', 'fortebello', 'Daun', 1261060, 3, 104, NULL, NULL, '630,1860', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (52, 'Fortebello E', '2020-01-28 02:10:46', 'fortebello', 'Daun', 1330280, 3, 113, NULL, NULL, '730,1960', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (53, 'Fortebello E', '2020-01-28 02:10:53', 'fortebello', 'Daun', 1396830, 3, 111, NULL, NULL, '730,2060', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (54, 'Fortebello E', '2020-01-28 02:10:56', 'fortebello', 'Daun', 1458050, 3, 110, NULL, NULL, '830,2060', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (55, 'Fortebello E', '2020-01-28 02:10:58', 'fortebello', 'Daun', 1604460, 3, 118, NULL, NULL, '830,2360', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (56, 'Fortebello F', '2020-01-28 02:12:32', 'fortebello', 'Daun + Kusen', 1958500, 3, 115, NULL, NULL, '700,1900', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (57, 'Fortebello F', '2020-01-28 02:12:49', 'fortebello', 'Daun + Kusen', 2071650, 3, 110, NULL, NULL, '800,2000', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (58, 'Fortebello F', '2020-01-28 02:12:52', 'fortebello', 'Daun + Kusen', 2175500, 3, 96, NULL, NULL, '800,2100', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (59, 'Fortebello F', '2020-01-28 02:12:59', 'fortebello', 'Daun + Kusen', 2262000, 3, 99, NULL, NULL, '900,2100', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (60, 'Fortebello F', '2020-01-28 02:13:02', 'fortebello', 'Daun + Kusen', 2489600, 3, 93, NULL, NULL, '900,2400', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (61, 'Fortebello F', '2020-01-28 02:18:07', 'fortebello', 'Daun', 1261060, 3, 96, NULL, NULL, '630,1860', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (62, 'Fortebello F', '2020-01-28 02:18:20', 'fortebello', 'Daun', 1330280, 3, 99, NULL, NULL, '730,1960', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (63, 'Fortebello F', '2020-01-28 02:18:23', 'fortebello', 'Daun', 1396830, 3, 107, NULL, NULL, '730,2060', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (64, 'Fortebello F', '2020-01-28 02:18:30', 'fortebello', 'Daun', 1458050, 3, 91, NULL, NULL, '830,2060', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (65, 'Fortebello F', '2020-01-28 02:18:33', 'fortebello', 'Daun', 1604460, 3, 90, NULL, NULL, '830,2360', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (66, 'Fortebello G', '2020-01-28 02:21:14', 'fortebello', 'Daun + Kusen', 1958500, 3, 116, NULL, NULL, '700,1900', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (67, 'Fortebello G', '2020-01-28 02:21:28', 'fortebello', 'Daun + Kusen', 2071650, 3, 121, NULL, NULL, '800,2000', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (68, 'Fortebello G', '2020-01-28 02:21:30', 'fortebello', 'Daun + Kusen', 2175500, 3, 123, NULL, NULL, '800,2100', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (69, 'Fortebello G', '2020-01-28 02:21:33', 'fortebello', 'Daun + Kusen', 2262000, 3, 196, NULL, NULL, '900,2100', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (70, 'Fortebello G', '2020-01-28 02:21:36', 'fortebello', 'Daun + Kusen', 2489600, 3, 104, NULL, NULL, '900,2400', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (71, 'Fortebello G', '2020-01-28 02:23:59', 'fortebello', 'Daun', 1261060, 3, 96, NULL, NULL, '630,1860', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (72, 'Fortebello G', '2020-01-28 02:24:03', 'fortebello', 'Daun', 1330280, 3, 99, NULL, NULL, '730,1960', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (73, 'Fortebello G', '2020-01-28 02:24:06', 'fortebello', 'Daun', 1396830, 3, 93, NULL, NULL, '730,2060', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (74, 'Fortebello G', '2020-01-28 02:24:09', 'fortebello', 'Daun', 1458050, 3, 96, NULL, NULL, '830,2060', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (75, 'Fortebello G', '2020-01-28 02:24:11', 'fortebello', 'Daun', 1604460, 3, 99, NULL, NULL, '830,2360', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (76, 'Fortebello H', '2020-01-28 02:28:27', 'fortebello', 'Daun + Kusen', 1958500, 3, 116, NULL, NULL, '700,1900', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (78, 'Fortebello H', '2020-01-28 02:28:48', 'fortebello', 'Daun + Kusen', 2071650, 3, 121, NULL, NULL, '800,2000', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (79, 'Fortebello H', '2020-01-28 02:28:57', 'fortebello', 'Daun + Kusen', 2175500, 3, 123, NULL, NULL, '800,2100', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (80, 'Fortebello H', '2020-01-28 02:29:00', 'fortebello', 'Daun + Kusen', 2262000, 3, 196, NULL, NULL, '900,2100', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (81, 'Fortebello H', '2020-01-28 02:29:03', 'fortebello', 'Daun + Kusen', 2489600, 3, 104, NULL, NULL, '900,2400', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (82, 'Fortebello H', '2020-01-28 02:32:20', 'fortebello', 'Daun', 1261060, 3, 96, NULL, NULL, '630,1860', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (83, 'Fortebello H', '2020-01-28 02:32:24', 'fortebello', 'Daun', 1330280, 3, 99, NULL, NULL, '730,1960', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (84, 'Fortebello H', '2020-01-28 02:32:27', 'fortebello', 'Daun', 1396830, 3, 107, NULL, NULL, '730,2060', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (85, 'Fortebello H', '2020-01-28 02:32:33', 'fortebello', 'Daun', 1458050, 3, 91, NULL, NULL, '830,2060', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (86, 'Fortebello H', '2020-01-28 02:32:38', 'fortebello', 'Daun', 1604460, 3, 90, NULL, NULL, '830,2360', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (87, 'Premium P1', '2020-01-28 02:35:57', 'premium', 'Daun + Kusen', 2258350, 3, 116, NULL, NULL, '700,1900', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (88, 'Premium P1', '2020-01-28 02:36:21', 'premium', 'Daun + Kusen', 2385760, 3, 121, NULL, NULL, '800,2000', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (89, 'Premium P1', '2020-01-28 02:36:23', 'premium', 'Daun + Kusen', 2502890, 3, 123, NULL, NULL, '800,2100', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (90, 'Premium P1', '2020-01-28 02:36:27', 'premium', 'Daun + Kusen', 2601990, 3, 196, NULL, NULL, '900,2100', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (91, 'Premium P1', '2020-01-28 02:36:29', 'premium', 'Daun + Kusen', 2858870, 3, 104, NULL, NULL, '900,2400', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (92, 'Premium P1', '2020-01-28 02:44:02', 'premium', 'Daun', 1500400, 3, 96, NULL, NULL, '630,1860', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (93, 'Premium P1', '2020-01-28 02:44:14', 'premium', 'Daun', 1583890, 3, 99, NULL, NULL, '730,1960', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (94, 'Premium P1', '2020-01-28 02:44:18', 'premium', 'Daun', 1663750, 3, 107, NULL, NULL, '730,2060', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (95, 'Premium P1', '2020-01-28 02:44:24', 'premium', 'Daun', 1737560, 3, 91, NULL, NULL, '830,2060', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (96, 'Premium P1', '2020-01-28 02:44:32', 'premium', 'Daun', 1913250, 3, 98, NULL, NULL, '830,2360', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (97, 'Premium P2', '2020-01-28 02:49:36', 'premium', 'Daun + Kusen', 2258350, 3, 225, NULL, NULL, '700,1900', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (98, 'Premium P2', '2020-01-28 02:49:39', 'premium', 'Daun + Kusen', 2385760, 3, 207, NULL, NULL, '800,2000', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (99, 'Premium P2', '2020-01-28 02:49:43', 'premium', 'Daun + Kusen', 2502890, 3, 220, NULL, NULL, '800,2100', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (100, 'Premium P2', '2020-01-28 02:49:46', 'premium', 'Daun + Kusen', 2601990, 3, 210, NULL, NULL, '900,2100', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (101, 'Premium P2', '2020-01-28 02:49:53', 'premium', 'Daun + Kusen', 2858870, 3, 215, NULL, NULL, '900,2400', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (102, 'Premium P2', '2020-01-28 02:52:45', 'premium', 'Daun', 1500400, 3, 116, NULL, NULL, '630,1860', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (103, 'Premium P2', '2020-01-28 02:52:48', 'premium', 'Daun', 1583890, 3, 121, NULL, NULL, '730,1960', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (104, 'Premium P2', '2020-01-28 02:52:50', 'premium', 'Daun', 1663750, 3, 123, NULL, NULL, '730,2060', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (105, 'Premium P2', '2020-01-28 02:52:59', 'premium', 'Daun', 1737560, 3, 196, NULL, NULL, '830,2060', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (106, 'Premium P2', '2020-01-28 02:53:01', 'premium', 'Daun', 1913250, 3, 104, NULL, NULL, '830,2360', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (107, 'Premium P3', '2020-01-28 02:56:13', 'premium', 'Daun + Kusen', 2258350, 3, 96, NULL, NULL, '700,1900', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (108, 'Premium P3', '2020-01-28 02:56:16', 'premium', 'Daun + Kusen', 2385760, 3, 99, NULL, NULL, '800,2000', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (109, 'Premium P3', '2020-01-28 02:56:19', 'premium', 'Daun + Kusen', 2502890, 3, 107, NULL, NULL, '800,2100', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (110, 'Premium P3', '2020-01-28 02:56:21', 'premium', 'Daun + Kusen', 2601990, 3, 91, NULL, NULL, '900,2100', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (111, 'Premium P3', '2020-01-28 02:56:25', 'premium', 'Daun + Kusen', 2858870, 3, 98, NULL, NULL, '900,2400', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (112, 'Premium P3', '2020-01-28 02:59:26', 'premium', 'Daun', 1500400, 3, 225, NULL, NULL, '630,1860', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (113, 'Premium P3', '2020-01-28 02:59:29', 'premium', 'Daun', 1583890, 3, 207, NULL, NULL, '730,1960', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (114, 'Premium P3', '2020-01-28 02:59:32', 'premium', 'Daun', 1663750, 3, 220, NULL, NULL, '730,2060', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (115, 'Premium P3', '2020-01-28 02:59:35', 'premium', 'Daun', 1737560, 3, 210, NULL, NULL, '830,2060', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (116, 'Premium P3', '2020-01-28 02:59:39', 'premium', 'Daun', 1913250, 3, 215, NULL, NULL, '830,2360', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (117, 'Premium P4', '2020-01-28 03:02:02', 'premium', 'Daun + Kusen', 2258350, 3, 116, NULL, NULL, '700,1900', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (118, 'Premium P4', '2020-01-28 03:02:06', 'premium', 'Daun + Kusen', 2385760, 3, 121, NULL, NULL, '800,2000', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (119, 'Premium P4', '2020-01-28 03:02:11', 'premium', 'Daun + Kusen', 2502890, 3, 123, NULL, NULL, '800,2100', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (120, 'Premium P4', '2020-01-28 03:02:14', 'premium', 'Daun + Kusen', 2601990, 3, 196, NULL, NULL, '900,2100', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (121, 'Premium P4', '2020-01-28 03:02:18', 'premium', 'Daun + Kusen', 2858870, 3, 104, NULL, NULL, '900,2400', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (122, 'Premium P4', '2020-01-28 03:04:36', 'premium', 'Daun', 1500400, 3, 96, NULL, NULL, '630,1860', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (123, 'Premium P4', '2020-01-28 03:04:38', 'premium', 'Daun', 1583890, 3, 99, NULL, NULL, '730,1960', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (124, 'Premium P4', '2020-01-28 03:04:47', 'premium', 'Daun', 1663750, 3, 107, NULL, NULL, '730,2060', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (125, 'Premium P4', '2020-01-28 03:04:51', 'premium', 'Daun', 1737560, 3, 91, NULL, NULL, '830,2060', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (126, 'Premium P4', '2020-01-28 03:04:56', 'premium', 'Daun', 1913250, 3, 98, NULL, NULL, '830,2360', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (127, 'Premium P5', '2020-01-28 03:07:07', 'premium', 'Daun + Kusen', 2258350, 3, 225, NULL, NULL, '700,1900', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (128, 'Premium P5', '2020-01-28 03:07:21', 'premium', 'Daun + Kusen', 2385760, 3, 207, NULL, NULL, '800,2000', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (129, 'Premium P5', '2020-01-28 03:07:23', 'premium', 'Daun + Kusen', 2502890, 3, 220, NULL, NULL, '800,2100', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (130, 'Premium P5', '2020-01-28 03:07:26', 'premium', 'Daun + Kusen', 2601990, 3, 210, NULL, NULL, '900,2100', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (131, 'Premium P5', '2020-01-28 03:07:29', 'premium', 'Daun + Kusen', 2858870, 3, 215, NULL, NULL, '900,2400', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (132, 'Premium P5', '2020-01-28 03:10:02', 'premium', 'Daun', 1500400, 3, 116, NULL, NULL, '630,1860', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (133, 'Premium P5', '2020-01-28 03:10:05', 'premium', 'Daun', 1583890, 3, 121, NULL, NULL, '730,1960', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (134, 'Premium P5', '2020-01-28 03:10:11', 'premium', 'Daun', 1663750, 3, 123, NULL, NULL, '730,2060', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (135, 'Premium P5', '2020-01-28 03:10:15', 'premium', 'Daun', 1737560, 3, 196, NULL, NULL, '830,2060', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (136, 'Premium P5', '2020-01-28 03:10:17', 'premium', 'Daun', 1913250, 3, 104, NULL, NULL, '830,2360', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (137, 'Premium P6', '2020-01-28 03:13:07', 'premium', 'Daun + Kusen', 2258350, 3, 96, NULL, NULL, '700,1900', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (138, 'Premium P6', '2020-01-28 03:13:10', 'premium', 'Daun + Kusen', 2385760, 3, 99, NULL, NULL, '800,2000', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (139, 'Premium P6', '2020-01-28 03:13:13', 'premium', 'Daun + Kusen', 2502890, 3, 107, NULL, NULL, '800,2100', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (140, 'Premium P6', '2020-01-28 03:13:15', 'premium', 'Daun + Kusen', 2601990, 3, 91, NULL, NULL, '900,2100', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (141, 'Premium P6', '2020-01-28 03:13:19', 'premium', 'Daun + Kusen', 2858870, 3, 98, NULL, NULL, '900,2400', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (142, 'Premium P6', '2020-01-28 03:15:54', 'premium', 'Daun', 1500400, 3, 116, NULL, NULL, '630,1860', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (143, 'Premium P6', '2020-01-28 03:15:58', 'premium', 'Daun', 1583890, 3, 121, NULL, NULL, '730,1960', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (144, 'Premium P6', '2020-01-28 03:16:01', 'premium', 'Daun', 1663750, 3, 123, NULL, NULL, '730,2060', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (145, 'Premium P6', '2020-01-28 03:16:05', 'premium', 'Daun', 1737560, 3, 196, NULL, NULL, '830,2060', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (146, 'Premium P6', '2020-01-28 03:16:08', 'premium', 'Daun', 1913250, 3, 104, NULL, NULL, '830,2360', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (147, 'Premium P7', '2020-01-28 03:18:39', 'premium', 'Daun + Kusen', 2258350, 3, 116, NULL, NULL, '700,1900', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (148, 'Premium P7', '2020-01-28 03:18:41', 'premium', 'Daun + Kusen', 2385760, 3, 121, NULL, NULL, '800,2000', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (149, 'Premium P7', '2020-01-28 03:18:44', 'premium', 'Daun + Kusen', 2502890, 3, 123, NULL, NULL, '800,2100', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (150, 'Premium P7', '2020-01-28 03:18:46', 'premium', 'Daun + Kusen', 2601990, 3, 196, NULL, NULL, '900,2100', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (151, 'Premium P7', '2020-01-28 03:18:49', 'premium', 'Daun + Kusen', 2858870, 3, 104, NULL, NULL, '900,2400', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (152, 'Premium P7', '2020-01-28 03:20:45', 'premium', 'Daun', 1500400, 3, 116, NULL, NULL, '630,1860', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (153, 'Premium P7', '2020-01-28 03:20:47', 'premium', 'Daun', 1583890, 3, 121, NULL, NULL, '730,1960', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (154, 'Premium P7', '2020-01-28 03:20:50', 'premium', 'Daun', 1663750, 3, 123, NULL, NULL, '730,2060', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (155, 'Premium P7', '2020-01-28 03:20:52', 'premium', 'Daun', 1737560, 3, 196, NULL, NULL, '830,2060', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (156, 'Premium P7', '2020-01-28 03:20:55', 'premium', 'Daun', 1913250, 3, 104, NULL, NULL, '830,2360', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (157, 'Premium Deco A', '2020-01-28 03:28:36', 'premiun deco', 'Daun + Kusen', 2385780, 3, 116, NULL, 'A1,A2,A3', '800,2000', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (158, 'Premium Deco A', '2020-01-28 03:29:33', 'premiun deco', 'Daun + Kusen', 2502890, 3, 121, NULL, 'A1,A2,A3', '800,2100', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (159, 'Premium Deco A', '2020-01-28 03:29:42', 'premiun deco', 'Daun + Kusen', 2601990, 3, 123, NULL, 'A1,A2,A3', '900,2100', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (160, 'Premium Deco A', '2020-01-28 03:29:50', 'premiun deco', 'Daun + Kusen', 2858870, 3, 196, NULL, 'A1,A2,A3', '900,2400', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (161, 'Premium Deco A', '2020-01-28 03:30:00', 'premiun deco', 'Daun', 1583890, 3, 121, NULL, 'A1,A2,A3', '730,1960', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (162, 'Premium Deco A', '2020-01-28 03:30:09', 'premiun deco', 'Daun', 1663750, 3, 123, NULL, 'A1,A2,A3', '730,2060', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (163, 'Premium Deco A', '2020-01-28 03:30:18', 'premiun deco', 'Daun', 1737560, 3, 196, NULL, 'A1,A2,A3', '830,2060', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (164, 'Premium Deco A', '2020-01-28 03:30:29', 'premiun deco', 'Daun', 1913250, 3, 104, NULL, 'A1,A2,A3', '830,2360', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (165, 'Premium Deco B', '2020-01-28 03:37:40', 'premiun deco', 'Daun + Kusen', 2385780, 3, 225, NULL, 'B1,B2,B3', '800,2000', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (166, 'Premium Deco B', '2020-01-28 03:38:19', 'premiun deco', 'Daun + Kusen', 2502890, 3, 207, NULL, 'B1,B2,B3', '800,2100', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (167, 'Premium Deco B', '2020-01-28 03:38:23', 'premiun deco', 'Daun + Kusen', 2601990, 3, 220, NULL, 'B1,B2,B3', '900,2100', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (168, 'Premium Deco B', '2020-01-28 03:38:30', 'premiun deco', 'Daun + Kusen', 2858870, 3, 210, NULL, 'B1,B2,B3', '900,2400', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (169, 'Premium Deco B', '2020-01-28 03:41:26', 'premiun deco', 'Daun', 1583890, 3, 104, NULL, 'B1,B2,B3', '730,1960', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (170, 'Premium Deco B', '2020-01-28 03:41:50', 'premiun deco', 'Daun', 1663750, 3, 113, NULL, 'B1,B2,B3', '730,2060', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (171, 'Premium Deco B', '2020-01-28 03:41:58', 'premiun deco', 'Daun', 1737560, 3, 111, NULL, 'B1,B2,B3', '830,2060', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (172, 'Premium Deco B', '2020-01-28 03:42:05', 'premiun deco', 'Daun', 1913250, 3, 110, NULL, 'B1,B2,B3', '830,2360', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (173, 'Felice F1', '2020-01-28 03:47:50', 'felice', 'Daun + Kusen + Engsel', 1035000, 3, 87, NULL, 'White,Brown', '700,1950', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (174, 'Felice F2', '2020-01-28 03:52:59', 'felice', 'Daun + Kusen + Engsel', 1035000, 3, 82, NULL, 'White,Brown', '700,1950', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (175, 'Felice F1', '2020-01-28 03:47:50', 'felice', 'Daun + Kusen + Engsel', 1085000, 3, 54, NULL, 'White,Brown', '700,1950', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (176, 'Felice F2', '2020-01-28 03:52:59', 'felice', 'Daun + Kusen + Engsel', 1085000, 3, 56, NULL, 'White,Brown', '700,1950', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (178, 'Plafon 140 Putih Polos', '2020-01-28 03:59:29', 'plafon polos', 'P x L x T dan harga /lembar', 108800, 5, 12, NULL, 'Putih Polos', '4000,140,7.28', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (179, 'Plafon 200 Putih Polos', '2020-01-28 04:05:53', 'plafon polos', 'P x L x T dan harga /lembar', 64800, 5, 18, NULL, 'Putih Polos', '4000,200,7.28', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (180, 'Plafon 140 Laminate', '2020-01-29 01:25:50', 'plafon laminate', 'P x L x T dan harga /lembar', 177800, 5, 14, NULL, '', '4000,140,7.28', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (181, 'Plafon 200 Laminate', '2020-01-29 01:27:50', 'plafon laminate', 'P x L x T dan harga /lembar', 131500, 5, 18, NULL, '', '4000,200,7.28', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (182, 'Plafon 200 Deco', '2020-01-29 03:41:37', 'plafon deco', 'P x L x T dan harga /lembar', 112500, 5, 4, NULL, NULL, '3000,140,7.28', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (183, 'Lis EG2', '2020-01-29 03:43:40', 'accesories', 'P x L x T dan harga /batang', 20500, 5, 9, NULL, NULL, '4000,140,7.28', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (184, 'Lis EG3', '2020-01-29 03:48:29', 'accesories', 'P x L x T dan harga /batang', 11250, 5, 11, NULL, NULL, '4000,140,7.28', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (185, 'Lis EG4', '2020-01-29 03:52:35', 'accesories', 'P x L x T dan harga /batang', 20500, 5, 16, NULL, NULL, '4000,140,7.28', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (186, 'Lis EG90', '2020-01-29 03:54:31', 'accesories', 'P x L x T dan harga /batang', 13250, 5, 18, NULL, NULL, '4000,140,7.28', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (187, 'CHIP', '2020-01-29 06:26:09', 'solid surface lembar', 'P x L x K dan harga /lembar', 2152200, 9, 34, NULL, 'Snow White,Corn,White,Ice Berg,Night Sky,Natural Granite,Heather Grey,Grey Sand,Emerald', '2000,760,12', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (188, 'CHIP', '2020-01-29 06:26:10', 'solid surface lembar', 'P x L x K dan harga /lembar', 2582600, 9, 36, NULL, 'Snow White,Corn,White,Ice Berg,Night Sky,Natural Granite,Heather Grey,Grey Sand,Emerald', '2400,760,12', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (189, 'CHIP', '2020-01-29 06:26:11', 'solid surface lembar', 'P x L x K dan harga /lembar', 3724700, 9, 38, NULL, 'Snow White,Corn,White,Ice Berg,Night Sky,Natural Granite,Heather Grey,Grey Sand,Emerald', '3760,760,12', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (190, 'CHIP', '2020-01-29 06:26:12', 'solid surface pabrik', 'P x L x K dan harga /meter', 2215700, 9, 21, NULL, 'Snow White,Corn,White,Ice Berg,Night Sky,Natural Granite,Heather Grey,Grey Sand,Emerald', 'M1', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (191, 'DECO', '2020-01-29 06:37:46', 'solid surface lembar', 'P x L x K dan harga /lembar', 2215700, 9, 31, NULL, 'Vogve Grey Sand 1,Vogve Grey Sand 2,Pure Black,Pure White,Cube White,Cube Black', '2000,760,12', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (192, 'DECO', '2020-01-29 06:40:44', 'solid surface lembar', 'P x L x K dan harga /lembar', 2658900, 9, 35, NULL, 'Vogve Grey Sand 1,Vogve Grey Sand 2,Pure Black,Pure White,Cube White,Cube Black', '2400,760,12', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (193, 'DECO', '2020-01-29 06:42:24', 'solid surface pabrik', 'P x L x K dan harga /meter', 1266100, 9, 39, NULL, 'Vogve Grey Sand 1,Vogve Grey Sand 2,Pure Black,Pure White,Cube White,Cube Black', 'M1', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (195, 'Multi Combi One Tone', '2020-01-29 06:51:35', 'combi shade', 'Note Jawa\r\nLuas= PxL\r\nTotal= LuasxHarga\r\nMinimum Pembelian 1M2\r\nMaksimum Pembelian :\r\nCombi:280x300cm', 973500, 8, 20, '4452ca661a60006dc8c58a6f218870dd.jpg', 'White,Ivory,Grey', '', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (196, 'Multi Combi Two Tone', '2020-01-29 06:56:47', 'combi shade', 'Note Jawa\r\nLuas= PxL\r\nTotal= LuasxHarga\r\nMinimum Pembelian 1M2\r\nMaksimum Pembelian :\r\nCombi:280x300cm', 1111000, 8, 10, '50e1c3c4a43ed75858ed13b45750c69c.jpg', 'White,Ivory,Beige,Cherry,Taek', '', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (197, 'Basic', '2020-01-29 07:06:24', 'combi shade', 'Note Jawa\r\nLuas= PxL\r\nTotal= LuasxHarga\r\nMinimum Pembelian 1M2\r\nMaksimum Pembelian :\r\nCombi:280x300cm', 360800, 8, 15, '4f6406ab9d3ccde3b822c40284ba7948.png', 'White,Green,Peach,Mustard,Mocca,Pink', '', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (198, 'Wood Look S/T 2 Tone', '2020-01-29 07:08:34', 'combi shade', 'Note Jawa\r\nLuas= PxL\r\nTotal= LuasxHarga\r\nMinimum Pembelian 1M2\r\nMaksimum Pembelian :\r\nCombi:280x300cm', 594000, 8, 19, NULL, 'White,Ivory,Mushroom,Brown,Chocolate,Gray', '', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (199, 'Wood Look Soft', '2020-01-29 07:11:58', 'combi shade', 'Note Jawa\r\nLuas= PxL\r\nTotal= LuasxHarga\r\nMinimum Pembelian 1M2\r\nMaksimum Pembelian :\r\nCombi:280x300cm', 594000, 8, 19, '2ecdf522869e38fb8939144ea07d1c97.png', 'White,Ivory,Mushroom,Brown,Chocolate,Codet Blue,Gray', '', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (200, 'Net Wood Look', '2020-01-29 07:13:14', 'combi shade', 'Note Jawa\r\nLuas= PxL\r\nTotal= LuasxHarga\r\nMinimum Pembelian 1M2\r\nMaksimum Pembelian :\r\nCombi:280x300cm', 481800, 8, 19, NULL, 'Green,Pink,Blue,Brown,Black', '', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (201, 'Rainbow', '2020-01-29 07:15:37', 'combi shade', 'Note Jawa\r\nLuas= PxL\r\nTotal= LuasxHarga\r\nMinimum Pembelian 1M2\r\nMaksimum Pembelian :\r\nCombi:280x300cm', 492800, 8, 25, '3892c93e20b9561c8f858d979025b038.png', 'Pink,Brown,Sand,Gray', '', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (202, 'Balwood Look Combi', '2020-01-29 07:17:23', 'combi shade', 'Note Jawa\r\nLuas= PxL\r\nTotal= LuasxHarga\r\nMinimum Pembelian 1M2\r\nMaksimum Pembelian :\r\nCombi:280x300cm', 544500, 8, 29, 'a9a327585a59d81ba316e299ec433480.png', 'Mushroom,Cherry,Nile', '', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (203, 'Shani', '2020-01-29 07:20:22', 'combi shade', 'Note Jawa\r\nLuas= PxL\r\nTotal= LuasxHarga\r\nMinimum Pembelian 1M2\r\nMaksimum Pembelian :\r\nCombi:280x300cm', 561000, 8, 32, 'a7ee36d576ac5698a33d1b4bb4806f6d.png', 'White,Peach,Caramel,Dark Gray', '', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (204, 'Metal Romance', '2020-01-29 07:22:05', 'combi shade', 'Note Jawa\r\nLuas= PxL\r\nTotal= LuasxHarga\r\nMinimum Pembelian 1M2\r\nMaksimum Pembelian :\r\nCombi:280x300cm', 649000, 8, 35, '3be09c6b88d13283f0f69bf5b059cfe2.png', 'White,Gold Pink,Blue,Khaki', '', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (205, 'Blackout Combi', '2020-01-29 07:23:33', 'combi shade', 'Note Jawa\r\nLuas= PxL\r\nTotal= LuasxHarga\r\nMinimum Pembelian 1M2\r\nMaksimum Pembelian :\r\nCombi:280x300cm', 753500, 8, 39, '843e38424efc88aba01fa512dc07e1d5.png', 'White,Beige,Gray,Dark Gray', '', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (206, 'Alegro 3010 (1%)', '2020-01-29 07:25:35', 'roll screen shade', 'Note Jawa\r\nLuas= PxL\r\nTotal= LuasxHarga\r\nMinimum Pembelian 1M2\r\nMaksimum Pembelian :\r\n300x300cm', 481800, 8, 42, NULL, 'White,Beige,Gray', '', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (207, 'Alegro 3030 (3%)', '2020-01-29 07:27:17', 'roll screen shade', 'Note Jawa\r\nLuas= PxL\r\nTotal= LuasxHarga\r\nMinimum Pembelian 1M2\r\nMaksimum Pembelian :\r\n300x300cm', 481800, 8, 42, NULL, 'White,Beige,Gray', '', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (208, 'Alegro 3050 (5%)', '2020-01-29 07:28:18', 'roll screen shade', 'Note Jawa\r\nLuas= PxL\r\nTotal= LuasxHarga\r\nMinimum Pembelian 1M2\r\nMaksimum Pembelian :\r\n300x300cm', 453200, 8, 45, NULL, 'White,Beige,Gray', '', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (209, 'Forte 4010 (1%)', '2020-01-29 07:29:32', 'roll screen shade', 'Note Jawa\r\nLuas= PxL\r\nTotal= LuasxHarga\r\nMinimum Pembelian 1M2\r\nMaksimum Pembelian :\r\n300x300cm', 564300, 8, 47, NULL, 'White,Beige,Gray', '', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (210, 'Forte 4030 (3%)', '2020-01-29 07:31:08', 'roll screen shade', 'Note Jawa\r\nLuas= PxL\r\nTotal= LuasxHarga\r\nMinimum Pembelian 1M2\r\nMaksimum Pembelian :\r\n300x300cm', 564300, 8, 49, NULL, 'White,Beige,Gray', '', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (211, 'Chaos 5000 (5%)', '2020-01-29 07:32:09', 'roll screen shade', 'Note Jawa\r\nLuas= PxL\r\nTotal= LuasxHarga\r\nMinimum Pembelian 1M2\r\nMaksimum Pembelian :\r\n300x300cm', 398200, 8, 49, NULL, 'White,Beige', '', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (212, 'Chaos 5000 (5%)', '2020-01-29 07:33:21', 'roll screen shade', 'Note Jawa\r\nLuas= PxL\r\nTotal= LuasxHarga\r\nMinimum Pembelian 1M2\r\nMaksimum Pembelian :\r\n300x300cm', 547800, 8, 59, NULL, 'Silver', '', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (213, '12,5MM (Patternless)', '2020-01-29 07:34:45', 'aluminium blind', 'Note Jawa\r\nLuas= PxL\r\nTotal= LuasxHarga\r\nMinimum Pembelian 1M2\r\nMaksimum Pembelian :\r\n300x300cm', 2877600, 8, 65, NULL, 'White,Silver,Gold', '', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (214, '25MM (Woodlook)', '2020-01-29 07:37:31', 'aluminium blind', 'Note Jawa\r\nLuas= PxL\r\nTotal= LuasxHarga\r\nMinimum Pembelian 1M2\r\nMaksimum Pembelian :\r\n300x300cm', 767300, 8, 62, NULL, 'L.Wood,Wood', '', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (215, '25MM (Patternless)', '2020-01-29 07:38:50', 'aluminium blind', 'Note Jawa\r\nLuas= PxL\r\nTotal= LuasxHarga\r\nMinimum Pembelian 1M2\r\nMaksimum Pembelian :\r\n300x300cm', 533500, 8, 66, NULL, 'Brown,Sky Blue,Milky White,Pink,Silver,Light Yellow,Mint', '', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (216, '35MM (Perforated)', '2020-01-29 07:40:58', 'aluminium blind', 'Note Jawa\r\nLuas= PxL\r\nTotal= LuasxHarga\r\nMinimum Pembelian 1M2\r\nMaksimum Pembelian :\r\n300x300cm', 671000, 8, 69, NULL, 'Silver Perforated,Gold Perforated', '', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (217, '35MM (Patternless)', '2020-01-29 07:42:36', 'aluminium blind', 'Note Jawa\r\nLuas= PxL\r\nTotal= LuasxHarga\r\nMinimum Pembelian 1M2\r\nMaksimum Pembelian :\r\n300x300cm', 556600, 8, 63, NULL, 'Silver Shine,Gold Shine,Silver,White', '', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (218, '35MM (Patternless)', '2020-01-29 07:45:11', 'aluminium blind', 'Note Jawa\r\nLuas= PxL\r\nTotal= LuasxHarga\r\nMinimum Pembelian 1M2\r\nMaksimum Pembelian :\r\n300x300cm', 708400, 8, 67, NULL, 'Black', '', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (219, '35MM Dot', '2020-01-29 07:48:07', 'aluminium blind', 'Note Jawa\r\nLuas= PxL\r\nTotal= LuasxHarga\r\nMinimum Pembelian 1M2\r\nMaksimum Pembelian :\r\n300x300cm', 657800, 8, 77, NULL, 'Silver Dot,Gold Dot', '', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (220, 'Alegro 3000', '2020-01-29 07:51:37', 'vertical blind', 'Note Jawa\r\nLuas= PxL\r\nTotal= LuasxHarga\r\nMinimum Pembelian 1M2\r\nMaksimum Pembelian :\r\n300x400', 632500, 8, 74, NULL, 'White,Beige,Gray', '', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (221, 'Forte 4000', '2020-01-29 07:54:16', 'vertical blind', 'Note Jawa\r\nLuas= PxL\r\nTotal= LuasxHarga\r\nMinimum Pembelian 1M2\r\nMaksimum Pembelian :\r\n300x400', 712800, 8, 79, NULL, 'White,Beige,Gray', '', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (222, 'Chaos 5000', '2020-01-29 07:55:42', 'vertical blind', 'Note Jawa\r\nLuas= PxL\r\nTotal= LuasxHarga\r\nMinimum Pembelian 1M2\r\nMaksimum Pembelian :\r\n300x400', 603000, 8, 72, NULL, 'White,Beige', '', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (223, 'Chaos 5000', '2020-01-29 07:56:51', 'vertical blind', 'Note Jawa\r\nLuas= PxL\r\nTotal= LuasxHarga\r\nMinimum Pembelian 1M2\r\nMaksimum Pembelian :\r\n300x400', 696500, 8, 74, NULL, 'Silver', '', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (224, 'Ben Series', '2020-01-29 07:57:59', 'vertical blind', 'Note Jawa\r\nLuas= PxL\r\nTotal= LuasxHarga\r\nMinimum Pembelian 1M2\r\nMaksimum Pembelian :\r\n300x400', 841500, 8, 72, NULL, 'Forsythia,Blue,Rosewood,Brown', '', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (225, 'Straw', '2020-01-29 07:59:55', 'vertical blind', 'Note Jawa\r\nLuas= PxL\r\nTotal= LuasxHarga\r\nMinimum Pembelian 1M2\r\nMaksimum Pembelian :\r\n300x400', 874000, 8, 71, NULL, 'Beige,Brown', '', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (226, 'GV00501', '2020-01-29 08:01:11', 'vertical blind', 'Note Jawa\r\nLuas= PxL\r\nTotal= LuasxHarga\r\nMinimum Pembelian 1M2\r\nMaksimum Pembelian :\r\n300x400', 484000, 8, 79, NULL, 'Yellow,Blue,Green', '', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (227, 'Ben Series', '2020-01-29 08:06:09', 'blackout shade', 'Note Jawa\r\nLuas= PxL\r\nTotal= LuasxHarga\r\nMinimum Pembelian 1M2\r\nMaksimum Pembelian :\r\n260x300cm', 500500, 8, 72, NULL, 'Forsythia,Blue,Rosewood', '', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (228, 'DGCB Series', '2020-01-29 08:08:22', 'blackout shade', 'Note Jawa\r\nLuas= PxL\r\nTotal= LuasxHarga\r\nMinimum Pembelian 1M2\r\nMaksimum Pembelian :\r\n260x300cm', 453200, 8, 75, NULL, 'White,Gray,Beige', '', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (229, 'DGSB Series', '2020-01-29 08:10:44', 'blackout shade', 'Note Jawa\r\nLuas= PxL\r\nTotal= LuasxHarga\r\nMinimum Pembelian 1M2\r\nMaksimum Pembelian :\r\n260x300cm', 453200, 8, 72, NULL, 'White,Gray,Beige', '', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (230, 'Wood 50MM', '2020-01-29 08:11:23', 'wood blind', 'Note Jawa\r\nLuas= PxL\r\nTotal= LuasxHarga\r\nMinimum Pembelian 1M2\r\nMaksimum Pembelian :\r\n300x300cm', 1119800, 8, 74, NULL, 'LH-113,LH1017,LH1016,LH184,LH1012', '', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (231, 'Peru', '2020-01-29 08:15:38', 'roll shade', 'Note Jawa\r\nLuas= PxL\r\nTotal= LuasxHarga\r\nMinimum Pembelian 1M2\r\nMaksimum Pembelian :\r\n280x300cm', 402600, 8, 70, 'd9001b13ddbcee1b00f1a76d465bda3e.png', '1021#740,1023#743', '', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (232, 'Staw', '2020-01-29 08:17:39', 'roll shade', 'Note Jawa\r\nLuas= PxL\r\nTotal= LuasxHarga\r\nMinimum Pembelian 1M2\r\nMaksimum Pembelian :\r\n280x300cm', 360800, 8, 64, 'd74460255e4aa3dd4eebc96cfe3df940.png', 'Beige,Brown', '', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (233, 'Mayway', '2020-01-29 08:18:51', 'roll shade', 'Note Jawa\r\nLuas= PxL\r\nTotal= LuasxHarga\r\nMinimum Pembelian 1M2\r\nMaksimum Pembelian :\r\n280x300cm', 363000, 8, 71, '1c634ed9d8d900de98e7ea4007b65784.png', '905BrBg,904Brw', '', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (234, 'One Tone', '2020-01-29 08:20:31', 'honeycomb shade', 'Note Jawa\r\nLuas= PxL\r\nTotal= LuasxHarga\r\nMinimum Pembelian 1M2\r\n', 645300, 8, 79, NULL, 'Peach Skin,Lemon,Dark Cocoa,Wine', '', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (235, 'Two Tone', '2020-01-29 08:25:32', 'honeycomb shade', 'Note Jawa\r\nLuas= PxL\r\nTotal= LuasxHarga\r\nMinimum Pembelian 1M2\r\n', 663300, 8, 89, NULL, 'Peach Skin,Lemon,Dark Cocoa,Wine,Mose Green,Blue,Gray', '', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (236, 'Blackout', '2020-01-29 08:27:14', 'honeycomb shade', 'Note Jawa\r\nLuas= PxL\r\nTotal= LuasxHarga\r\nMinimum Pembelian 1M2\r\n', 1037300, 8, 95, NULL, 'Ivory,Ice Blue', '', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (237, 'Sliding', '2020-01-30 00:58:17', NULL, NULL, NULL, 4, 20, NULL, NULL, '', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (238, 'Sliding+Grid', '2020-01-30 00:59:28', NULL, NULL, NULL, 4, 25, NULL, NULL, '', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (239, 'Swing', '2020-01-30 01:00:18', NULL, NULL, NULL, 4, 32, NULL, NULL, '', 2, 'Jenat');
INSERT INTO `tbl_produk` VALUES (240, 'Fixed Glass', '2020-01-30 01:01:00', NULL, NULL, NULL, 4, 12, NULL, NULL, '', 2, 'Jenat');

-- ----------------------------
-- Table structure for tbl_rekan
-- ----------------------------
DROP TABLE IF EXISTS `tbl_rekan`;
CREATE TABLE `tbl_rekan`  (
  `rekan_id` int(20) NOT NULL AUTO_INCREMENT,
  `rekan_nama` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `rekan_logo` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `rekan_tanggal` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0),
  UNIQUE INDEX `rekan_id`(`rekan_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_rekan
-- ----------------------------
INSERT INTO `tbl_rekan` VALUES (1, 'Partner 1', 'c893cf243f34a436178a26c056a2c405.jpg', '2020-01-10 03:01:04');
INSERT INTO `tbl_rekan` VALUES (2, 'Partner 2', 'e7c7fc5051e6c920e222be0257e568c5.jpg', '2020-01-10 03:37:37');
INSERT INTO `tbl_rekan` VALUES (3, 'Partner 3', '5f43580d4356387a9125b7785296e956.jpg', '2020-01-10 03:38:06');
INSERT INTO `tbl_rekan` VALUES (4, 'Partner 4', '1a8e122a1acf6ab4891c33f4acff95de.jpg', '2020-01-10 03:38:14');
INSERT INTO `tbl_rekan` VALUES (5, 'Partner 5', 'db090f9606c6fd832ff087971d30b7c5.jpg', '2020-01-10 03:38:23');
INSERT INTO `tbl_rekan` VALUES (6, 'Partner 6', 'e966a85470b6e2dcabb0b1a715a5f1d3.jpg', '2020-01-10 03:38:33');
INSERT INTO `tbl_rekan` VALUES (7, 'Partner 7', '9f310c654fac735054a3a925648b1b95.jpg', '2020-01-10 03:38:41');
INSERT INTO `tbl_rekan` VALUES (8, 'Partner 8', '2abbceeeeb1a218fe335d22c5ca9bf33.jpg', '2020-01-10 03:38:52');
INSERT INTO `tbl_rekan` VALUES (9, 'Partner 9', 'a64a55dc8e01a77b6e6336a9218c9820.jpg', '2020-01-10 03:38:59');
INSERT INTO `tbl_rekan` VALUES (10, 'Partner 10', 'a1dd1b2ac39d8a56d192e21ea172ba7f.jpg', '2020-01-10 03:39:17');
INSERT INTO `tbl_rekan` VALUES (11, 'Partner 11', '708c08760ecd74173a30cc3f3b3a6010.jpg', '2020-01-10 03:39:25');

-- ----------------------------
-- Table structure for tbl_slider
-- ----------------------------
DROP TABLE IF EXISTS `tbl_slider`;
CREATE TABLE `tbl_slider`  (
  `slider_id` int(11) NOT NULL AUTO_INCREMENT,
  `slider_ket` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `slider_gambar` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`slider_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for tbl_testimoni
-- ----------------------------
DROP TABLE IF EXISTS `tbl_testimoni`;
CREATE TABLE `tbl_testimoni`  (
  `testimoni_id` int(20) NOT NULL AUTO_INCREMENT,
  `testimoni_pelanggan_id` int(20) NULL DEFAULT NULL,
  `testimoni_pelanggan_nama` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `testimoni_isi` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `testimoni_tanggal` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0),
  `testimoni_gambar` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`testimoni_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_testimoni
-- ----------------------------
INSERT INTO `tbl_testimoni` VALUES (1, 0, 'Jail', '', '2020-01-10 04:23:15', 'ea61eddae3e5708d87d0b64f2ae6d1f4.jpg');

-- ----------------------------
-- Table structure for tbl_testing
-- ----------------------------
DROP TABLE IF EXISTS `tbl_testing`;
CREATE TABLE `tbl_testing`  (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `bank_code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `amount` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `external_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `account_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id_create` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `payment_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `suggested_amount` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_testing
-- ----------------------------
INSERT INTO `tbl_testing` VALUES (6, 'Splus Indonesia', 'BRI', 'ACTIVE', '721600', 'SPLUS39873', '262159999484150', '5e3513b95581c46003f8653b', 'SPLUS39873_1580536802044', NULL);

-- ----------------------------
-- Table structure for tbl_video
-- ----------------------------
DROP TABLE IF EXISTS `tbl_video`;
CREATE TABLE `tbl_video`  (
  `video_id` int(11) NOT NULL AUTO_INCREMENT,
  `video_judul` varchar(60) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `video_tanggal` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0),
  `video_video` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `video_album_id` int(11) NULL DEFAULT NULL,
  `video_pengguna_id` int(11) NULL DEFAULT NULL,
  `video_author` varchar(60) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`video_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;
