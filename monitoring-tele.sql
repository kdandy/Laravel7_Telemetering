/*
 Navicat Premium Data Transfer

 Source Server         : laragon
 Source Server Type    : MySQL
 Source Server Version : 50733
 Source Host           : 127.0.0.1:3306
 Source Schema         : monitoring-tele

 Target Server Type    : MySQL
 Target Server Version : 50733
 File Encoding         : 65001

 Date: 09/12/2021 15:18:45
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 58 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (49, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (50, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (51, '2021_11_17_150044_create_node_tele_1_table', 1);
INSERT INTO `migrations` VALUES (52, '2021_11_17_150123_create_node_tele_2_table', 1);
INSERT INTO `migrations` VALUES (53, '2021_11_23_132901_create_user_table', 1);
INSERT INTO `migrations` VALUES (54, '2021_12_05_005842_create_node1_table', 1);
INSERT INTO `migrations` VALUES (55, '2021_12_06_104431_create_node2_table', 1);
INSERT INTO `migrations` VALUES (56, '2021_12_06_104447_create_node3_table', 1);
INSERT INTO `migrations` VALUES (57, '2021_12_06_104646_create_node_tele_3_table', 1);

-- ----------------------------
-- Table structure for nodes1
-- ----------------------------
DROP TABLE IF EXISTS `nodes1`;
CREATE TABLE `nodes1`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `waktu` datetime NULL DEFAULT NULL,
  `sensor_CO` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sensor_O3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sensor_H2S` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sensor_DUST` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sensor_NH3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sensor_NO2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sensor_TEMPERATURE` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sensor_HUMIDITY` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sensor_PRESSURE` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sensor_RAIN` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sensor_WIND_SPEED` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sensor_WIND_DIRECT` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 24 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of nodes1
-- ----------------------------
INSERT INTO `nodes1` VALUES (1, '2021-12-07 23:18:13', '2021-12-07 23:18:13', '2021-12-07 09:03:06', '0.73', '0.07', '0.67', '-0.10', '4.00', '0.04\r\n\r\n', '23.00', '71.00', '955.40', '0.000\r\n\r\n', '0', '320\r\n\r\n');
INSERT INTO `nodes1` VALUES (2, '2021-12-07 23:30:13', '2021-12-07 23:30:13', '2021-12-07 09:03:06', '0.73', '0.07', '0.67', '-0.10', '4.00', '0.04\r\n\r\n', '23.00', '71.00', '955.40', '0.000\r\n\r\n', '0', '320\r\n\r\n');
INSERT INTO `nodes1` VALUES (3, '2021-12-08 00:00:12', '2021-12-08 00:00:12', '2021-12-07 09:03:06', '0.73', '0.07', '0.67', '-0.10', '4.00', '0.04\r\n\r\n', '23.00', '71.00', '955.40', '0.000\r\n\r\n', '0', '320\r\n\r\n');
INSERT INTO `nodes1` VALUES (4, '2021-12-08 00:30:13', '2021-12-08 00:30:13', '2021-12-07 09:03:06', '0.73', '0.07', '0.67', '-0.10', '4.00', '0.04\r\n\r\n', '23.00', '71.00', '955.40', '0.000\r\n\r\n', '0', '320\r\n\r\n');
INSERT INTO `nodes1` VALUES (5, '2021-12-08 01:00:13', '2021-12-08 01:00:13', '2021-12-07 09:03:06', '0.73', '0.07', '0.67', '-0.10', '4.00', '0.04\r\n\r\n', '23.00', '71.00', '955.40', '0.000\r\n\r\n', '0', '320\r\n\r\n');
INSERT INTO `nodes1` VALUES (6, '2021-12-08 01:30:13', '2021-12-08 01:30:13', '2021-12-07 09:03:06', '0.73', '0.07', '0.67', '-0.10', '4.00', '0.04\r\n\r\n', '23.00', '71.00', '955.40', '0.000\r\n\r\n', '0', '320\r\n\r\n');
INSERT INTO `nodes1` VALUES (7, '2021-12-08 02:00:14', '2021-12-08 02:00:14', '2021-12-07 09:03:06', '0.73', '0.07', '0.67', '-0.10', '4.00', '0.04\r\n\r\n', '23.00', '71.00', '955.40', '0.000\r\n\r\n', '0', '320\r\n\r\n');
INSERT INTO `nodes1` VALUES (8, '2021-12-08 02:30:13', '2021-12-08 02:30:13', '2021-12-07 09:03:06', '0.73', '0.07', '0.67', '-0.10', '4.00', '0.04\r\n\r\n', '23.00', '71.00', '955.40', '0.000\r\n\r\n', '0', '320\r\n\r\n');
INSERT INTO `nodes1` VALUES (9, '2021-12-08 03:00:13', '2021-12-08 03:00:13', '2021-12-07 09:03:06', '0.73', '0.07', '0.67', '-0.10', '4.00', '0.04\r\n\r\n', '23.00', '71.00', '955.40', '0.000\r\n\r\n', '0', '320\r\n\r\n');
INSERT INTO `nodes1` VALUES (10, '2021-12-08 03:30:13', '2021-12-08 03:30:13', '2021-12-07 09:03:06', '0.73', '0.07', '0.67', '-0.10', '4.00', '0.04\r\n\r\n', '23.00', '71.00', '955.40', '0.000\r\n\r\n', '0', '320\r\n\r\n');
INSERT INTO `nodes1` VALUES (11, '2021-12-08 04:00:14', '2021-12-08 04:00:14', '2021-12-07 09:03:06', '0.73', '0.07', '0.67', '-0.10', '4.00', '0.04\r\n\r\n', '23.00', '71.00', '955.40', '0.000\r\n\r\n', '0', '320\r\n\r\n');
INSERT INTO `nodes1` VALUES (12, '2021-12-08 04:30:13', '2021-12-08 04:30:13', '2021-12-07 09:03:06', '0.73', '0.07', '0.67', '-0.10', '4.00', '0.04\r\n\r\n', '23.00', '71.00', '955.40', '0.000\r\n\r\n', '0', '320\r\n\r\n');
INSERT INTO `nodes1` VALUES (13, '2021-12-08 05:00:13', '2021-12-08 05:00:13', '2021-12-07 09:03:06', '0.73', '0.07', '0.67', '-0.10', '4.00', '0.04\r\n\r\n', '23.00', '71.00', '955.40', '0.000\r\n\r\n', '0', '320\r\n\r\n');
INSERT INTO `nodes1` VALUES (14, '2021-12-08 05:30:13', '2021-12-08 05:30:13', '2021-12-07 09:03:06', '0.73', '0.07', '0.67', '-0.10', '4.00', '0.04\r\n\r\n', '23.00', '71.00', '955.40', '0.000\r\n\r\n', '0', '320\r\n\r\n');
INSERT INTO `nodes1` VALUES (15, '2021-12-08 06:00:13', '2021-12-08 06:00:13', '2021-12-07 09:03:06', '0.73', '0.07', '0.67', '-0.10', '4.00', '0.04\r\n\r\n', '23.00', '71.00', '955.40', '0.000\r\n\r\n', '0', '320\r\n\r\n');
INSERT INTO `nodes1` VALUES (16, '2021-12-08 06:30:12', '2021-12-08 06:30:12', '2021-12-07 09:03:06', '0.73', '0.07', '0.67', '-0.10', '4.00', '0.04\r\n\r\n', '23.00', '71.00', '955.40', '0.000\r\n\r\n', '0', '320\r\n\r\n');
INSERT INTO `nodes1` VALUES (17, '2021-12-08 07:00:14', '2021-12-08 07:00:14', '2021-12-07 09:03:06', '0.73', '0.07', '0.67', '-0.10', '4.00', '0.04\r\n\r\n', '23.00', '71.00', '955.40', '0.000\r\n\r\n', '0', '320\r\n\r\n');
INSERT INTO `nodes1` VALUES (18, '2021-12-08 07:30:13', '2021-12-08 07:30:13', '2021-12-07 09:03:06', '0.73', '0.07', '0.67', '-0.10', '4.00', '0.04\r\n\r\n', '23.00', '71.00', '955.40', '0.000\r\n\r\n', '0', '320\r\n\r\n');
INSERT INTO `nodes1` VALUES (19, '2021-12-08 08:00:13', '2021-12-08 08:00:13', '2021-12-07 09:03:06', '0.73', '0.07', '0.67', '-0.10', '4.00', '0.04\r\n\r\n', '23.00', '71.00', '955.40', '0.000\r\n\r\n', '0', '320\r\n\r\n');
INSERT INTO `nodes1` VALUES (20, '2021-12-08 08:30:13', '2021-12-08 08:30:13', '2021-12-07 09:03:06', '0.73', '0.07', '0.67', '-0.10', '4.00', '0.04\r\n\r\n', '23.00', '71.00', '955.40', '0.000\r\n\r\n', '0', '320\r\n\r\n');
INSERT INTO `nodes1` VALUES (21, '2021-12-08 09:00:13', '2021-12-08 09:00:13', '2021-12-07 09:03:06', '0.73', '0.07', '0.67', '-0.10', '4.00', '0.04\r\n\r\n', '23.00', '71.00', '955.40', '0.000\r\n\r\n', '0', '320\r\n\r\n');
INSERT INTO `nodes1` VALUES (22, '2021-12-08 11:00:17', '2021-12-08 11:00:17', '2021-12-07 09:03:06', '0.73', '0.07', '0.67', '-0.10', '4.00', '0.04\r\n\r\n', '23.00', '71.00', '955.40', '0.000\r\n\r\n', '0', '320\r\n\r\n');
INSERT INTO `nodes1` VALUES (23, '2021-12-08 11:31:24', '2021-12-08 11:31:24', '2021-12-07 09:03:06', '0.73', '0.07', '0.67', '-0.10', '4.00', '0.04\r\n\r\n', '31.50', '61.60', '951.29', '0.000\r\n\r\n', '0', '320\r\n\r\n');

-- ----------------------------
-- Table structure for nodes2
-- ----------------------------
DROP TABLE IF EXISTS `nodes2`;
CREATE TABLE `nodes2`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `waktu` datetime NULL DEFAULT NULL,
  `sensor_CO` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sensor_O3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sensor_H2S` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sensor_DUST` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sensor_NH3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sensor_NO2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sensor_TEMPERATURE` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sensor_HUMIDITY` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sensor_PRESSURE` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sensor_RAIN` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sensor_WIND_SPEED` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sensor_WIND_DIRECT` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of nodes2
-- ----------------------------

-- ----------------------------
-- Table structure for nodes3
-- ----------------------------
DROP TABLE IF EXISTS `nodes3`;
CREATE TABLE `nodes3`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `waktu` datetime NULL DEFAULT NULL,
  `sensor_CO` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sensor_O3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sensor_H2S` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sensor_DUST` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sensor_NH3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sensor_NO2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sensor_TEMPERATURE` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sensor_HUMIDITY` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sensor_PRESSURE` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sensor_RAIN` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sensor_WIND_SPEED` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sensor_WIND_DIRECT` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of nodes3
-- ----------------------------

-- ----------------------------
-- Table structure for nodes_tele_1
-- ----------------------------
DROP TABLE IF EXISTS `nodes_tele_1`;
CREATE TABLE `nodes_tele_1`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `waktu` datetime NULL DEFAULT NULL,
  `sensor_CO` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sensor_O3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sensor_H2S` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sensor_DUST` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sensor_NH3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sensor_NO2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sensor_TEMPERATURE` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sensor_HUMIDITY` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sensor_PRESSURE` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sensor_RAIN` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sensor_WIND_SPEED` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sensor_WIND_DIRECT` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of nodes_tele_1
-- ----------------------------

-- ----------------------------
-- Table structure for nodes_tele_2
-- ----------------------------
DROP TABLE IF EXISTS `nodes_tele_2`;
CREATE TABLE `nodes_tele_2`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `waktu` datetime NULL DEFAULT NULL,
  `sensor_CO` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sensor_O3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sensor_H2S` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sensor_DUST` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sensor_NH3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sensor_NO2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sensor_TEMPERATURE` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sensor_HUMIDITY` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sensor_PRESSURE` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sensor_RAIN` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sensor_WIND_SPEED` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sensor_WIND_DIRECT` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of nodes_tele_2
-- ----------------------------

-- ----------------------------
-- Table structure for nodes_tele_3
-- ----------------------------
DROP TABLE IF EXISTS `nodes_tele_3`;
CREATE TABLE `nodes_tele_3`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `waktu` datetime NULL DEFAULT NULL,
  `sensor_CO` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sensor_O3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sensor_H2S` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sensor_DUST` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sensor_NH3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sensor_NO2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sensor_TEMPERATURE` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sensor_HUMIDITY` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sensor_PRESSURE` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sensor_RAIN` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sensor_WIND_SPEED` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sensor_WIND_DIRECT` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of nodes_tele_3
-- ----------------------------

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `password` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, '2021-12-06 12:00:35', '2021-12-06 12:00:35', 'admin', 'admin', NULL);

SET FOREIGN_KEY_CHECKS = 1;
