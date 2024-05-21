/*
SQLyog Ultimate v12.5.0 (64 bit)
MySQL - 10.4.32-MariaDB : Database - laravel_eloquent
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`laravel_eloquent` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `laravel_eloquent`;

/*Table structure for table `cache` */

DROP TABLE IF EXISTS `cache`;

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `cache` */

/*Table structure for table `cache_locks` */

DROP TABLE IF EXISTS `cache_locks`;

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `cache_locks` */

/*Table structure for table `contacts` */

DROP TABLE IF EXISTS `contacts`;

CREATE TABLE `contacts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `student_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `contacts_student_id_foreign` (`student_id`),
  CONSTRAINT `contacts_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `contacts` */

insert  into `contacts`(`id`,`email`,`phone`,`address`,`city`,`student_id`,`created_at`,`updated_at`) values 
(1,'lorenza@example.net','424-893-6104','455 Ed Ridges\nSouth Zoie, KY 17567-8049','Richieside',11,'2024-05-21 01:11:48','2024-05-21 01:11:48'),
(2,'raegan.deckow@example.net','+1-984-908-4357','7569 Carter Centers\nPort Ora, DC 80131-5989','Richieside',12,'2024-05-21 01:11:48','2024-05-21 01:11:48'),
(3,'elinore.macejkovic@example.org','+1.667.532.0081','986 Sarina Divide\nHamillbury, GA 90539-0042','Lake Neomaburgh',13,'2024-05-21 01:11:48','2024-05-21 01:11:48'),
(4,'obarrows@example.org','626-543-7347','8893 Ortiz Cape Suite 027\nJerdemouth, MD 36372','South Rosannaville',14,'2024-05-21 01:11:48','2024-05-21 01:11:48'),
(5,'fkuvalis@example.net','+1 (781) 201-1873','71115 Gerda Inlet\nNorth Baby, VT 17761-5611','Heidenreichfort',15,'2024-05-21 01:11:48','2024-05-21 01:11:48'),
(6,'obrekke@example.net','1-720-697-8811','99637 Bednar Green Apt. 783\nEast Shaniaport, AR 95638-1634','Averyshire',16,'2024-05-21 01:11:48','2024-05-21 01:11:48'),
(7,'nelda.tremblay@example.org','541.419.4102','2599 Elvis Branch Apt. 293\nEast Trentontown, IL 47367','McGlynnmouth',17,'2024-05-21 01:11:48','2024-05-21 01:11:48'),
(8,'hintz.stephon@example.org','+1-203-619-7947','727 Beatty Club\nHaleymouth, MN 12763','East Bertrand',18,'2024-05-21 01:11:48','2024-05-21 01:11:48'),
(9,'jessika.kihn@example.org','+1-878-765-2072','820 Waelchi Ford\nWest Lilyan, MS 68226','Maggioport',19,'2024-05-21 01:11:48','2024-05-21 01:11:48'),
(10,'kristoffer98@example.org','+13649689244','894 Rosenbaum Forge Suite 557\nEast Lacyton, NJ 25056','South Harmony',20,'2024-05-21 01:11:48','2024-05-21 01:11:48'),
(11,'baboo','9988776','#654 JA Road','mithi',21,NULL,NULL);

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `job_batches` */

DROP TABLE IF EXISTS `job_batches`;

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `job_batches` */

/*Table structure for table `jobs` */

DROP TABLE IF EXISTS `jobs`;

CREATE TABLE `jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) unsigned NOT NULL,
  `reserved_at` int(10) unsigned DEFAULT NULL,
  `available_at` int(10) unsigned NOT NULL,
  `created_at` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `jobs` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(7,'0001_01_01_000000_create_users_table',1),
(8,'0001_01_01_000001_create_cache_table',1),
(9,'0001_01_01_000002_create_jobs_table',1),
(10,'2024_05_21_010832_create_students_table',1),
(11,'2024_05_21_010844_create_contacts_table',1);

/*Table structure for table `password_reset_tokens` */

DROP TABLE IF EXISTS `password_reset_tokens`;

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_reset_tokens` */

/*Table structure for table `sessions` */

DROP TABLE IF EXISTS `sessions`;

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `sessions` */

insert  into `sessions`(`id`,`user_id`,`ip_address`,`user_agent`,`payload`,`last_activity`) values 
('8IT0lQSQYnq4Mtxh9B4afyYYXdqGNy3JfhT0snHM',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:126.0) Gecko/20100101 Firefox/126.0','YTozOntzOjY6Il90b2tlbiI7czo0MDoidEE5UHYybTE4WXBLVXFwYVdlSGI5aU1YY1JyVmozN09DdEV1UG1EUiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zdHVkZW50L2NyZWF0ZSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1716315591),
('FswnyAIdzCxEAS8ndiNGuTJos7Tsap4l8MczYL16',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:126.0) Gecko/20100101 Firefox/126.0','YTozOntzOjY6Il90b2tlbiI7czo0MDoiRWVpdHhMb2dhQ1VuSmd2SjN0RkNtcXlleGhSY3NTY0FBVUR3ZzV1ZSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1716308641),
('GRyTKsWdjlWPhg8m9TIYeMoXr9IueYpsvY2gmieu',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:126.0) Gecko/20100101 Firefox/126.0','YTozOntzOjY6Il90b2tlbiI7czo0MDoiZlA0dlUweU5KS3FXT0R5Q01WUWxraFdveFhabGRXY2xoOVdVc0JnVSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zdHVkZW50Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1716312645);

/*Table structure for table `students` */

DROP TABLE IF EXISTS `students`;

CREATE TABLE `students` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `age` smallint(5) unsigned NOT NULL,
  `gender` varchar(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `students` */

insert  into `students`(`id`,`name`,`age`,`gender`,`created_at`,`updated_at`) values 
(11,'Prof. Lorenza Beier',18,'male','2024-05-21 01:11:48','2024-05-21 01:11:48'),
(12,'Dr. Denis Wiza',24,'male','2024-05-21 01:11:48','2024-05-21 01:11:48'),
(13,'Betsy Mayer',20,'male','2024-05-21 01:11:48','2024-05-21 01:11:48'),
(14,'Lonnie Frami',22,'female','2024-05-21 01:11:48','2024-05-21 01:11:48'),
(15,'Claudine Jakubowski IV',18,'female','2024-05-21 01:11:48','2024-05-21 01:11:48'),
(16,'Miss Alexane Von',20,'male','2024-05-21 01:11:48','2024-05-21 01:11:48'),
(17,'Sadye Kuhlman',25,'male','2024-05-21 01:11:48','2024-05-21 01:11:48'),
(18,'Mrs. Lauriane Schroeder',24,'male','2024-05-21 01:11:48','2024-05-21 01:11:48'),
(19,'Mr. Kiel Marquardt I',19,'male','2024-05-21 01:11:48','2024-05-21 01:11:48'),
(20,'Izabella Cremin',22,'female','2024-05-21 01:11:48','2024-05-21 01:11:48'),
(21,'baboo',22,'male',NULL,NULL);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
