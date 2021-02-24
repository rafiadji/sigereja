/*
 Navicat Premium Data Transfer

 Source Server         : Local Server
 Source Server Type    : MySQL
 Source Server Version : 80023
 Source Host           : localhost:3306
 Source Schema         : si_gereja

 Target Server Type    : MySQL
 Target Server Version : 80023
 File Encoding         : 65001

 Date: 24/02/2021 15:03:06
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for baptis
-- ----------------------------
DROP TABLE IF EXISTS `baptis`;
CREATE TABLE `baptis`  (
  `baptis_id` int(0) NOT NULL AUTO_INCREMENT,
  `user_id` int(0) NULL DEFAULT NULL,
  `kat_baptis` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `nama_baptis` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `tanggal_baptis` date NULL DEFAULT NULL,
  `tempat_baptis` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  PRIMARY KEY (`baptis_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 71 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of baptis
-- ----------------------------
INSERT INTO `baptis` VALUES (1, 139, 'Remaja', NULL, NULL, NULL);

-- ----------------------------
-- Table structure for komuni
-- ----------------------------
DROP TABLE IF EXISTS `komuni`;
CREATE TABLE `komuni`  (
  `komuni_id` int(0) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `jen_kel` enum('Laki-laki','Perempuan') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tpt_permandian` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `tgl_permandian` date NOT NULL,
  PRIMARY KEY (`komuni_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 17 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of komuni
-- ----------------------------
INSERT INTO `komuni` VALUES (11, 'Olianis Jaya', 'Perempuan', '1998-04-26', 'Kapela Stasi Lawi', '2020-01-01');
INSERT INTO `komuni` VALUES (12, 'Ignasius Loyola', 'Laki-laki', '2004-07-31', 'Kapela Stasi Lawi', '2020-01-01');
INSERT INTO `komuni` VALUES (13, 'Jannz Natali', 'Laki-laki', '1995-12-24', 'Kapela Stasi Lawi', '2020-01-01');
INSERT INTO `komuni` VALUES (14, 'Pakomeus Dahlan', 'Laki-laki', '1995-04-24', 'Kapela Stasi Waning', '2020-01-01');
INSERT INTO `komuni` VALUES (15, 'Caroline Natali', 'Perempuan', '2020-11-01', 'Greja Ratu Rosari', '2020-11-01');

-- ----------------------------
-- Table structure for nikah
-- ----------------------------
DROP TABLE IF EXISTS `nikah`;
CREATE TABLE `nikah`  (
  `nikah_id` int(0) NOT NULL AUTO_INCREMENT,
  `user_id` int(0) NOT NULL,
  `n_pasangan` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `a_pasangan` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `n_saksi` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `tgl_nikah` date NOT NULL,
  PRIMARY KEY (`nikah_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 104 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of nikah
-- ----------------------------
INSERT INTO `nikah` VALUES (103, 101, 'Icha Cahyani', 'Cancar', 'Atanas', '2020-12-02');

-- ----------------------------
-- Table structure for pengumuman
-- ----------------------------
DROP TABLE IF EXISTS `pengumuman`;
CREATE TABLE `pengumuman`  (
  `pengumuman_id` int(0) NOT NULL AUTO_INCREMENT,
  `judul_pengumuman` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `tanggal_pengumuman` date NULL DEFAULT NULL,
  `isi_pengumuman` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL,
  PRIMARY KEY (`pengumuman_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 26 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pengumuman
-- ----------------------------
INSERT INTO `pengumuman` VALUES (24, 'Latar Belakang Masalah', '2020-12-08', '<blockquote>\r\n<p><strong><big>P</big></strong>elaksanaan pelayanan administrasi seperti penndataan umat, pendataan baptis, pendataan komuni pertama, serta pelaporan keuangan yang dilakukan selama ini&nbsp; pada Gereja Ratu Rosari &nbsp;melalui beberapa&nbsp; tahap seperti: Dari umat ke ketua lingkugan, setelah itu diserahkan ke sekertariat paroki. Kondisi ini tentunya membutuhkan waktu yang cukup lama baik dari sisi umat maupun pengurus lingkungan serta sekertariat paroki dalam melakukan proses pengimputan data. Adapun sistem pengolahan data saat ini masih terbatas pada penggunan <em>Microsoft Office Excel </em>dan <em>Microsoft Ofifice Word </em>dan belum memiliki <em>database </em>shingga pihak Gereja atau umat sangat sulit mengakses dan mengolah data dengan cepat. Selain itu ketika membutuhkan informasi maka setiap <em>file </em>yang ada harus diperiksa satu persatu untuk memperoleh data yang dibutuhkan. Proses pengolahan data seperti ini juga &nbsp;memiliki kendala dimana sulitnya mencari dan mengakses data.</p>\r\n</blockquote>\r\n');
INSERT INTO `pengumuman` VALUES (25, 'Kolekte', '2020-12-27', '<p>Kolekte 25000</p>\r\n');

-- ----------------------------
-- Table structure for sakramen
-- ----------------------------
DROP TABLE IF EXISTS `sakramen`;
CREATE TABLE `sakramen`  (
  `sakramen_id` int(0) NOT NULL AUTO_INCREMENT,
  `sakramen` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`sakramen_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `user_id` int(0) NOT NULL AUTO_INCREMENT,
  `nik` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nik_kk` int(0) NOT NULL,
  `name` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `jk` enum('Laki-laki','Perempuan') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `tpt_lahir` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat_kk` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `st_baptis` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `st_nikah` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `st_keluarga` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `pekerjaan` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `image` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `role_id` int(0) NOT NULL,
  `is_active` int(0) NOT NULL,
  `date_created` int(0) NOT NULL,
  PRIMARY KEY (`user_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 140 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (101, '222', 101, 'Admin', 'Laki-laki', 'Lawi', '1995-11-24', 'Caroline', 'Sudah', 'Sudah', 'Suami', 'Swasta', 'jannz@gmail.com', 'admin2.jpg', '$2y$10$H7AVaLpxa39J0SLcWkdZUeEDi3khUe2359IazvaCc9EsPsThlErhK', 1, 1, 1606387081);
INSERT INTO `user` VALUES (137, '82630002', 82630001, 'Robet', 'Laki-laki', 'Malang', '1995-01-23', 'Maria', 'Sudah', 'Sudah', 'Suami', 'Swasta', 'robet@gmail.com', 'default.jpg', '$2y$10$xlJX8g4mRM2GfKKl6EE34uNzmccSJ7KLYyqUX8Wfb2oiopgI7NVoe', 2, 1, 1614052925);
INSERT INTO `user` VALUES (138, '82630003', 82630001, 'Yoneta', 'Perempuan', 'Malang', '1995-07-25', 'Maria', 'Sudah', 'Sudah', 'Istri', 'Swasta', '', '', '', 0, 0, 0);
INSERT INTO `user` VALUES (139, '82630004', 82630001, 'Sinu', 'Laki-laki', 'Malang', '2019-06-19', 'Maria', 'Belum', 'Belum', 'Anak', 'Swasta', '', '', '', 0, 0, 0);

-- ----------------------------
-- Table structure for user_access_menu
-- ----------------------------
DROP TABLE IF EXISTS `user_access_menu`;
CREATE TABLE `user_access_menu`  (
  `id` int(0) NOT NULL AUTO_INCREMENT,
  `role_id` int(0) NOT NULL,
  `menu_id` int(0) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 337 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user_access_menu
-- ----------------------------
INSERT INTO `user_access_menu` VALUES (314, 1, 1);
INSERT INTO `user_access_menu` VALUES (317, 1, 4);
INSERT INTO `user_access_menu` VALUES (320, 2, 2);
INSERT INTO `user_access_menu` VALUES (322, 1, 38);
INSERT INTO `user_access_menu` VALUES (331, 1, 2);
INSERT INTO `user_access_menu` VALUES (333, 1, 37);
INSERT INTO `user_access_menu` VALUES (336, 1, 3);

-- ----------------------------
-- Table structure for user_menu
-- ----------------------------
DROP TABLE IF EXISTS `user_menu`;
CREATE TABLE `user_menu`  (
  `id` int(0) NOT NULL AUTO_INCREMENT,
  `menu` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 40 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user_menu
-- ----------------------------
INSERT INTO `user_menu` VALUES (1, 'admin');
INSERT INTO `user_menu` VALUES (2, 'user');
INSERT INTO `user_menu` VALUES (3, 'menu');
INSERT INTO `user_menu` VALUES (4, 'administrasi');
INSERT INTO `user_menu` VALUES (37, 'laporan');
INSERT INTO `user_menu` VALUES (38, 'informasi');

-- ----------------------------
-- Table structure for user_role
-- ----------------------------
DROP TABLE IF EXISTS `user_role`;
CREATE TABLE `user_role`  (
  `id` int(0) NOT NULL AUTO_INCREMENT,
  `role` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 29 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user_role
-- ----------------------------
INSERT INTO `user_role` VALUES (1, 'Admin');
INSERT INTO `user_role` VALUES (2, 'Umat');
INSERT INTO `user_role` VALUES (3, 'sekertariat');

-- ----------------------------
-- Table structure for user_sub_menu
-- ----------------------------
DROP TABLE IF EXISTS `user_sub_menu`;
CREATE TABLE `user_sub_menu`  (
  `id` int(0) NOT NULL AUTO_INCREMENT,
  `menu_id` int(0) NOT NULL,
  `title` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `url` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `icon` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `is_active` int(0) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 53 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user_sub_menu
-- ----------------------------
INSERT INTO `user_sub_menu` VALUES (1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1);
INSERT INTO `user_sub_menu` VALUES (2, 2, 'Profil', 'user/index', 'fas fa-fw fa-user', 1);
INSERT INTO `user_sub_menu` VALUES (4, 3, 'Menu', 'menu', 'fas fa-fw fa-folder-plus', 1);
INSERT INTO `user_sub_menu` VALUES (5, 3, 'Sub menu', 'menu/submenu', 'fas fa-fw fa-tasks', 1);
INSERT INTO `user_sub_menu` VALUES (28, 1, 'User role', 'admin/role', 'fas fa-fw fa-tools', 1);
INSERT INTO `user_sub_menu` VALUES (30, 4, 'Baptis', 'administrasi/index', 'fa fa-fw fa-users', 1);
INSERT INTO `user_sub_menu` VALUES (36, 4, 'Komuni', 'administrasi/komuni', 'fa fa-fw fa-users', 1);
INSERT INTO `user_sub_menu` VALUES (38, 4, 'Nikah', 'administrasi/nikah', 'fa fa-fw fa-users', 1);
INSERT INTO `user_sub_menu` VALUES (44, 37, 'Laporan baptis', 'laporan/index', 'far fa-fw fa-folder', 1);
INSERT INTO `user_sub_menu` VALUES (45, 37, 'Laporan komuni', 'laporan/komuni', 'far fa-fw fa-folder', 1);
INSERT INTO `user_sub_menu` VALUES (46, 37, 'Laporan nikah', 'laporan/nikah', 'far fa-fw fa-folder', 1);
INSERT INTO `user_sub_menu` VALUES (47, 2, 'Daftar Nikah', 'user/registrasinikah', 'fa fa-fw fa-user-plus', 1);
INSERT INTO `user_sub_menu` VALUES (48, 38, 'Tambah Info', 'informasi/index', 'far fa-fw fa-bell', 1);
INSERT INTO `user_sub_menu` VALUES (50, 2, 'Info Paroki', 'user/info', 'fa fa-fw fa-bell', 1);

SET FOREIGN_KEY_CHECKS = 1;
