CREATE DATABASE  IF NOT EXISTS `kpadb_short_url` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `kpadb_short_url`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: kpadb_short_url
-- ------------------------------------------------------
-- Server version	5.7.17-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shorl_url_counter`
--

DROP TABLE IF EXISTS `shorl_url_counter`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shorl_url_counter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url_id` int(11) DEFAULT NULL,
  `value` tinyint(4) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shorl_url_counter`
--

LOCK TABLES `shorl_url_counter` WRITE;
/*!40000 ALTER TABLE `shorl_url_counter` DISABLE KEYS */;
INSERT INTO `shorl_url_counter` VALUES (1,10,1,'2017-10-27 08:50:58','2017-10-27 08:50:58'),(2,11,1,'2017-10-27 08:51:13','2017-10-27 08:51:13'),(3,10,1,'2017-10-27 08:56:52','2017-10-27 08:56:52'),(4,11,1,'2017-10-27 08:57:06','2017-10-27 08:57:06'),(5,21,1,'2017-10-27 09:25:12','2017-10-27 09:25:12'),(6,21,1,'2017-10-27 09:25:22','2017-10-27 09:25:22'),(7,12,1,'2017-10-27 09:36:16','2017-10-27 09:36:16');
/*!40000 ALTER TABLE `shorl_url_counter` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `short_url`
--

DROP TABLE IF EXISTS `short_url`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `short_url` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `hex_code` varchar(40) DEFAULT NULL,
  `destination_url` varchar(500) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `short_url`
--

LOCK TABLES `short_url` WRITE;
/*!40000 ALTER TABLE `short_url` DISABLE KEYS */;
INSERT INTO `short_url` VALUES (1,0,'0D301B','http://sadsadsad.com',1,'2017-10-27 04:40:29','2017-10-27 04:40:29'),(2,0,'278E07','http://sadsadsad.com',1,'2017-10-27 04:41:26','2017-10-27 04:41:26'),(3,0,'00EEE0','http://sadsadsad.com',1,'2017-10-27 04:42:36','2017-10-27 04:42:36'),(4,0,'EFACCE','http://sadsadsad.com',1,'2017-10-27 04:42:44','2017-10-27 04:42:44'),(5,0,'7E955C','https://webs.kpa.ph/2017/07/23/launch-your-dream-website-today/',1,'2017-10-27 04:43:33','2017-10-27 04:43:33'),(6,0,'7BEFCA','https://webs.kpa.ph/2017/07/23/launch-your-dream-website-today/',1,'2017-10-27 04:45:54','2017-10-27 04:45:54'),(7,0,'0D8410','https://webs.kpa.ph/2017/07/23/launch-your-dream-website-today/',1,'2017-10-27 04:59:57','2017-10-27 04:59:57'),(8,0,'3E636E','https://webs.kpa.ph/2017/07/23/launch-your-dream-website-today/',1,'2017-10-27 06:54:54','2017-10-27 06:54:54'),(12,1,'834F8E','https://webs.kpa.ph/2017/07/23/launch-your-dream-website-today/',1,'2017-10-27 07:14:25','2017-10-27 07:14:25'),(21,2,'896853','https://web.facebook.com/gladys.yusi?fref=pb&hc_location=profile_browser',1,'2017-10-27 09:22:57','2017-10-27 09:22:57');
/*!40000 ALTER TABLE `short_url` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_token_unique` (`token`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'765b1923b8002e4fba57e8de0458be06','king paulo aquino','king@kpa.ph','$2y$10$2CIPFwfsZcpWDMR/fcjCeui4aEHM9gosH1CqoLTvtq.sIUyS7ohii','fXuha4mY0lORApFxexflsHZp1B5bcWGPSC3ue0eDkbKR4YU7cv7Z4A3L8IKk','2017-10-26 19:18:37','2017-10-26 19:56:38'),(2,'daa395b485083bf48ff8dedc29da7746','king paulo aquino','king@cdgpacific.com','$2y$10$4IYMRcDfGz/uQppGsEMVUOqWJlCeyWcO24Dje1k65BUp7/j.f764e','OvgGx8shj0VxS7NAC08WVstttSLuIlg5aoFovbEj0WVff3O899sCAAxxTHgC','2017-10-26 19:58:26','2017-10-26 19:58:26');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-10-27 18:44:15
