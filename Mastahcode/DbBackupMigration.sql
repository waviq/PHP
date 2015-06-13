/*
SQLyog Ultimate v11.33 (64 bit)
MySQL - 5.6.21 : Database - mastahcode
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`mastahcode` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `mastahcode`;

/*Table structure for table `detailjeniskelamin` */

DROP TABLE IF EXISTS `detailjeniskelamin`;

CREATE TABLE `detailjeniskelamin` (
  `idUser` int(10) unsigned NOT NULL,
  `idJenisKelamin` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `detailjeniskelamin_iduser_index` (`idUser`),
  KEY `detailjeniskelamin_idjeniskelamin_index` (`idJenisKelamin`),
  CONSTRAINT `detailjeniskelamin_idjeniskelamin_foreign` FOREIGN KEY (`idJenisKelamin`) REFERENCES `jeniskelamin` (`id`) ON DELETE CASCADE,
  CONSTRAINT `detailjeniskelamin_iduser_foreign` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `detailjeniskelamin` */

/*Table structure for table `jeniskelamin` */

DROP TABLE IF EXISTS `jeniskelamin`;

CREATE TABLE `jeniskelamin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `jenisKelamin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `jeniskelamin` */

insert  into `jeniskelamin`(`id`,`jenisKelamin`,`created_at`,`updated_at`) values (1,'Pria','0000-00-00 00:00:00','0000-00-00 00:00:00'),(2,'Wanita','0000-00-00 00:00:00','0000-00-00 00:00:00');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`migration`,`batch`) values ('2014_10_12_000000_create_users_table',1),('2014_10_12_100000_create_password_resets_table',1),('2015_06_03_053418_create_jenis_kelamins_table',2),('2015_06_12_130006_Alter_User',3),('2015_06_12_131707_RoleTable',3);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `roles` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jenisKelamin` enum('Pria','Wanita') COLLATE utf8_unicode_ci DEFAULT NULL,
  `tanggalLahir` date DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nomorTelfon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `role_id` int(10) unsigned NOT NULL,
  `seen` tinyint(1) NOT NULL DEFAULT '0',
  `valid` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`jenisKelamin`,`tanggalLahir`,`alamat`,`nomorTelfon`,`email`,`password`,`remember_token`,`created_at`,`updated_at`,`role_id`,`seen`,`valid`) values (10,'Waviq subhi','Pria','2003-06-20','jl tegal slawi jatibarang','085642868886','waviq.subkhi@gmail.com','$2y$10$SllriB943XKDUBnCg3BmY.a92g4G8nhFYDvY65YmRn4r2N3uIs6Be','c5mcp4iLJSaaSwvuK8ZDcJX6sxqGVS6v7c4VucosOQ2WHoMeg67BpHkjVWK3','2015-06-03 01:30:26','2015-06-11 17:07:53',0,0,0),(12,'waviq ganteng','Pria','2001-06-20','jl tegal slawi jatibarang','085642868886','waviq.subkhei@gmail.com','$2y$10$dIgb3fUHmp3VztgMfwSaE./Ge7XTkzTz9I3ZmW8XJk/S07XxJSWjW','KWcKSlyzySpdziguvx3vnReZEA8X7ipt3u2dsM2wRayDpesNG8YHUEdh0xDf','2015-06-03 10:17:14','2015-06-03 10:17:38',0,0,0),(20,'Waviq S','Wanita','2003-06-20','jl tegal slawi jatibarang','085642868886','waviq@users.noreply.github.com','$2y$10$WNniXG4iDeG7MD.wpe5cSue2PcHjapBfqeRccr/Vxh9CZ8jwSk6l6','88rIqTgQQ4dyHeMnNlDtzjN8l3M4dGFSgQm3Cy6aMMw0uID7GqJVYDKF8NvP','2015-06-03 22:25:49','2015-06-03 22:26:08',0,0,0),(21,'sesya','Wanita','2002-06-20','jl tegal slawi jatibarang','085642868886','sesya@sesya.com','$2y$10$pcOmb9jIHyxXKhH4zuAvQOic8JCuDxf3fAM6ZNq0KHJWcP.6SL0.S','nBAXJWYHVoX3voAKuMt7Vd2E2he3ubGmUYrvh0K1877y4vEwAfTZg1PzZGHE','2015-06-03 22:26:40','2015-06-03 22:27:02',0,0,0);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
