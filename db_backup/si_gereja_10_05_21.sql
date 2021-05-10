/*
 Navicat Premium Data Transfer

 Source Server         : Local Server
 Source Server Type    : MySQL
 Source Server Version : 50733
 Source Host           : localhost:3306
 Source Schema         : si_gereja

 Target Server Type    : MySQL
 Target Server Version : 50733
 File Encoding         : 65001

 Date: 10/05/2021 14:44:36
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for baptis
-- ----------------------------
DROP TABLE IF EXISTS `baptis`;
CREATE TABLE `baptis`  (
  `baptis_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NULL DEFAULT NULL,
  `kat_baptis` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama_baptis` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tanggal_baptis` date NULL DEFAULT NULL,
  `st_konfrim` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`baptis_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of baptis
-- ----------------------------
INSERT INTO `baptis` VALUES (1, 104, 'Remaja', 'Albert', '2021-05-12', 1);
INSERT INTO `baptis` VALUES (2, 105, 'Remaja', 'Shania', '2021-05-12', 1);

-- ----------------------------
-- Table structure for komuni
-- ----------------------------
DROP TABLE IF EXISTS `komuni`;
CREATE TABLE `komuni`  (
  `komuni_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `jen_kel` enum('Laki-laki','Perempuan') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tpt_permandian` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tgl_permandian` date NOT NULL,
  PRIMARY KEY (`komuni_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 16 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

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
  `nikah_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NULL DEFAULT NULL,
  `nik_pasangan` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `n_pasangan` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `a_pasangan` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `n_saksi` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tgl_nikah` date NULL DEFAULT NULL,
  `st_konfrim` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`nikah_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of nikah
-- ----------------------------
INSERT INTO `nikah` VALUES (1, 105, '5366221698', 'Rico', 'Malang', 'Sumira', NULL, 0);

-- ----------------------------
-- Table structure for pengumuman
-- ----------------------------
DROP TABLE IF EXISTS `pengumuman`;
CREATE TABLE `pengumuman`  (
  `pengumuman_id` int(11) NOT NULL AUTO_INCREMENT,
  `judul_pengumuman` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tanggal_pengumuman` date NULL DEFAULT NULL,
  `isi_pengumuman` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  PRIMARY KEY (`pengumuman_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 26 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

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
  `sakramen_id` int(11) NOT NULL AUTO_INCREMENT,
  `sakramen` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`sakramen_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `nik` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nik_kk` int(1) NOT NULL,
  `name` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `jk` enum('Laki-laki','Perempuan') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tpt_lahir` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat_kk` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `st_nikah` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `st_baptis` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `st_keluarga` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pekerjaan` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL,
  PRIMARY KEY (`user_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 106 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (101, '222', 101, 'Admin', 'Laki-laki', 'Lawi', '1995-11-24', 'Caroline', 'Sudah', 'Sudah', 'Suami', 'Swasta', 'jannz@gmail.com', 'admin2.jpg', '$2y$10$H7AVaLpxa39J0SLcWkdZUeEDi3khUe2359IazvaCc9EsPsThlErhK', 1, 1, 1606387081);
INSERT INTO `user` VALUES (102, '82630002', 82630001, 'Robet', 'Laki-laki', 'Malang', '1990-02-15', 'Agatha', 'Sudah', 'Sudah', 'Suami', 'Swasta', 'robet@gmail.com', 'default.jpg', '$2y$10$RnZkr8i/tiTTaUDoSgErwe8jcDzIrDCtAtRRMJfvVr7JBwGlO28jK', 2, 1, 1619582149);
INSERT INTO `user` VALUES (103, '82630003', 82630001, 'Risa', 'Perempuan', 'Malang', '1991-05-15', 'Agatha', 'Sudah', 'Sudah', 'Istri', 'Swasta', '', '', '', 0, 0, 0);
INSERT INTO `user` VALUES (104, '82630004', 82630001, 'Soni', 'Laki-laki', 'Malang', '2000-07-20', 'Agatha', 'Belum', 'Sudah', 'Anak', 'Swasta', '', '', '', 0, 0, 0);
INSERT INTO `user` VALUES (105, '82630005', 82630001, 'Shamanta', 'Perempuan', 'Malang', '1998-06-30', 'Agatha', 'Terdaftar', 'Terdaftar', 'Anak', 'Swasta', '', '', '', 0, 0, 0);

-- ----------------------------
-- Table structure for user_access_menu
-- ----------------------------
DROP TABLE IF EXISTS `user_access_menu`;
CREATE TABLE `user_access_menu`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 334 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user_access_menu
-- ----------------------------
INSERT INTO `user_access_menu` VALUES (314, 1, 1);
INSERT INTO `user_access_menu` VALUES (317, 1, 4);
INSERT INTO `user_access_menu` VALUES (320, 2, 2);
INSERT INTO `user_access_menu` VALUES (322, 1, 38);
INSERT INTO `user_access_menu` VALUES (331, 1, 2);
INSERT INTO `user_access_menu` VALUES (333, 1, 37);

-- ----------------------------
-- Table structure for user_menu
-- ----------------------------
DROP TABLE IF EXISTS `user_menu`;
CREATE TABLE `user_menu`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 39 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `url` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `icon` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `is_active` int(1) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 51 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

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

-- ----------------------------
-- View structure for daftar_baptis
-- ----------------------------
DROP VIEW IF EXISTS `daftar_baptis`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `daftar_baptis` AS select `user`.`user_id` AS `user_id`,`baptis`.`baptis_id` AS `baptis_id`,`user`.`nik` AS `nik`,`user`.`nik_kk` AS `nik_kk`,`user`.`name` AS `name`,`user`.`jk` AS `jk`,`user`.`st_baptis` AS `st_baptis`,`baptis`.`kat_baptis` AS `kat_baptis`,`baptis`.`nama_baptis` AS `nama_baptis`,`baptis`.`tanggal_baptis` AS `tanggal_baptis`,`baptis`.`st_konfrim` AS `st_konfrim` from (`user` join `baptis` on((`baptis`.`user_id` = `user`.`user_id`)));

-- ----------------------------
-- View structure for daftar_nikah
-- ----------------------------
DROP VIEW IF EXISTS `daftar_nikah`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `daftar_nikah` AS select `user`.`user_id` AS `user_id`,`nikah`.`nikah_id` AS `nikah_id`,`user`.`nik` AS `nik`,`user`.`nik_kk` AS `nik_kk`,`user`.`name` AS `name`,`user`.`jk` AS `jk`,`user`.`st_nikah` AS `st_nikah`,`nikah`.`nik_pasangan` AS `nik_pasangan`,`nikah`.`n_pasangan` AS `n_pasangan`,`nikah`.`a_pasangan` AS `a_pasangan`,`nikah`.`n_saksi` AS `n_saksi`,`nikah`.`tgl_nikah` AS `tgl_nikah`,`nikah`.`st_konfrim` AS `st_konfrim` from (`user` join `nikah` on((`nikah`.`user_id` = `user`.`user_id`)));

-- ----------------------------
-- Triggers structure for table baptis
-- ----------------------------
DROP TRIGGER IF EXISTS `update_st_after_insert`;
delimiter ;;
CREATE TRIGGER `update_st_after_insert` AFTER INSERT ON `baptis` FOR EACH ROW BEGIN
UPDATE `user` SET st_baptis = "Terdaftar" WHERE user_id = NEW.user_id;
END
;;
delimiter ;

-- ----------------------------
-- Triggers structure for table baptis
-- ----------------------------
DROP TRIGGER IF EXISTS `update_st_after_update`;
delimiter ;;
CREATE TRIGGER `update_st_after_update` AFTER UPDATE ON `baptis` FOR EACH ROW BEGIN
UPDATE `user` SET st_baptis = "Pelaksanaan" WHERE user_id = OLD.user_id;
END
;;
delimiter ;

-- ----------------------------
-- Triggers structure for table nikah
-- ----------------------------
DROP TRIGGER IF EXISTS `update_st_nikah_after_insert`;
delimiter ;;
CREATE TRIGGER `update_st_nikah_after_insert` AFTER INSERT ON `nikah` FOR EACH ROW BEGIN
UPDATE `user` SET st_nikah = "Terdaftar" WHERE user_id = NEW.user_id;
END
;;
delimiter ;

-- ----------------------------
-- Triggers structure for table nikah
-- ----------------------------
DROP TRIGGER IF EXISTS `update_st_nikah_after_update`;
delimiter ;;
CREATE TRIGGER `update_st_nikah_after_update` AFTER UPDATE ON `nikah` FOR EACH ROW BEGIN
UPDATE `user` SET st_nikah = "Pelaksanaan" WHERE user_id = OLD.user_id;
END
;;
delimiter ;

SET FOREIGN_KEY_CHECKS = 1;
