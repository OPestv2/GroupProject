-- MariaDB dump 10.18  Distrib 10.5.8-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: admin_book
-- ------------------------------------------------------
-- Server version	10.5.8-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `books` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `title` varchar(300) NOT NULL,
  `description` text NOT NULL,
  `poster` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `author` varchar(500) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `user_idx` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `books`
--

LOCK TABLES `books` WRITE;
/*!40000 ALTER TABLE `books` DISABLE KEYS */;
INSERT INTO `books` VALUES (1,1,'Pies Baskerville’ów','Pies Baskerville’ów (inny tytuł polskiego przekładu: Tajemnica Baskerville’ów; ang. The Hound of the Baskervilles) – powieść detektywistyczna sir Arthura Conana Doyle’a, wydawana w odcinkach od sierpnia 1901 w czasopiśmie The Strand Magazine, w postaci książkowej w marcu 1902[1] (wydanie polskie 1902). Jedna z najsłynniejszych pozycji z cyklu opowieści o detektywie Sherlocku Holmesie.\r\n\r\nPierwszy polski przekład autorstwa Eugenii Żmijewskiej, pod tytułem Tajemnica Baskerville’ów został wydany w formie książkowej w 1902 jako dodatek do dziennika Słowo[2]. Następny polski przekład autorstwa Bronisławy Neufeldówny, pod tytułem Pies Baskerville’ów ukazał się w 1903[3].','fa5bb7d7d0802a9ebe1e02d3b1159890.jpeg','7dba4eeed751b501260da9dc2aae9578.pdf','Arthur Conan Doyle','Arthur Conan Doyle','2021-04-17 15:12:13'),(2,9,'Principles Of Success ','<p>Brian is recognized as the top sales training and personal success authority in the world today. He has authored more than 60 books and has produced more than 500 audio and video learning programs on sales, management, business success and personal development, including worldwide bestseller The Psychology of Achievement.</p>\r\n','550224e3a164dcdedd2ead8eab94bc8d.jpg','e2e24fdddf50fec30addd1fda4f8c301.pdf','Brian Tracy','literatura motywacyjna','2021-04-17 15:13:15'),(3,9,'2000 leagues under the sea','<p>Opis 2.</p>\r\n','36f6448e39e8e5a705ca98b35fca86b4.jpg','624a1bd4a23a180efd85a7d60829557b.pdf','Autor 2','powieść przygodowa','2021-04-17 16:47:05'),(4,9,'Finding London','<p>Opis 3</p>\r\n\r\n<p> </p>\r\n','7a43024c942f4703b6cfba16cffc22f8.jpeg','924ded83a966bfbced3b04f6ae9a3b03.pdf','Autor 2','powieść przygodowa','2021-04-17 16:50:26'),(5,9,'Famished','<p>Opis 5</p>\r\n\r\n<p> </p>\r\n','24bbe8aeceb4536e9d59f72f68f2075d.jpg','2ca01813b1d96fd2daf3baa7b5d64535.pdf','Autor 2','powieść przygodowa','2021-04-17 16:54:45'),(6,9,'Brain Storm','<p>Opis 7</p>\r\n\r\n<p> </p>\r\n','711d08e8330cdbe2efc1175ff4047805.jpg','9a6ddfcf88c739700d089c38dac052b8.pdf','Autor 3','powieść przygodowa','2021-04-17 16:57:20'),(7,9,'Missing','<p>Opis 8</p>\r\n\r\n<p> </p>\r\n','6a548e6f3123622ae1759dcc98ee959b.jpg','dd0d92b24512c8e8af15b27f1a15e5a9.pdf','Autor 8','powieść przygodowa','2021-04-17 16:59:57'),(8,9,'Children of the Knight','<p>Opis 10</p>\r\n\r\n<p> </p>\r\n','b6e6e80a6f3ee266f85e1277bf2a9c0d.jpg','45199f86229f26e863381aa67f901e7f.pdf','Autor 9','powieść przygodowa','2021-04-17 17:02:26'),(9,9,'The forgotten child','<p>Opis 15</p>\r\n\r\n<p> </p>\r\n','bb35108efc1cd98b7cda404f692b43fc.jpg','96638fff6ecab4b42b7e11c7e2b64cc6.pdf','Autor 11','powieść przygodowa','2021-04-17 17:04:20'),(10,9,'A pair of scholgirls','<p>Opis 100</p>\r\n','d3e4e7bbf55fa4146fe5cff1a365b1ae.jpg','fcd7fff876a5fb1b7d45dae9a26cbde9.pdf','Autor 11','powieść przygodowa','2021-04-17 17:28:52');
/*!40000 ALTER TABLE `books` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `book_id` int(10) unsigned NOT NULL,
  `comment` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `user_idx` (`user_id`),
  KEY `book_idx` (`book_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES (1,1,2,'super :)','2021-04-17 16:47:00'),(2,1,6,'nowy test','2021-04-17 16:59:17'),(3,9,1,'Zaebista ksiazka\r\n','2021-04-17 17:30:29'),(4,1,1,'twst','2021-04-17 17:30:57'),(5,9,10,'kji\r\n','2021-04-17 20:58:23'),(6,1,5,'test1','2021-04-21 13:01:33');
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `favorite`
--

DROP TABLE IF EXISTS `favorite`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `favorite` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `book_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_idx` (`user_id`),
  KEY `book_id` (`book_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `favorite`
--

LOCK TABLES `favorite` WRITE;
/*!40000 ALTER TABLE `favorite` DISABLE KEYS */;
INSERT INTO `favorite` VALUES (8,8,1),(9,7,1),(10,5,1),(11,10,9),(12,9,9),(13,2,9),(14,2,1),(15,1,9),(16,6,9);
/*!40000 ALTER TABLE `favorite` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sessions` (
  `id` varchar(128) CHARACTER SET utf8 NOT NULL,
  `ip_address` varchar(45) CHARACTER SET utf8 NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT 0,
  `data` blob NOT NULL,
  KEY `sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('5b9d5bb524f91d4667083ebfd262b8d6a40cbef5','188.34.141.228',1618656279,'__ci_last_regenerate|i:1618656279;user_id|i:7;email|s:12:\"test@test.pl\";displayname|s:7:\"test123\";logged_in|b:1;'),('34d1b5fec6a5678d3522389b521f306e4055de9a','188.34.141.228',1618659354,'__ci_last_regenerate|i:1618659354;'),('db851012ae6c725ebc832e235010f5d1fadff569','188.34.141.228',1618659688,'__ci_last_regenerate|i:1618659688;'),('0cefd424413f7f97a7e9de02b3b57b5a3417a24b','188.34.141.228',1618660011,'__ci_last_regenerate|i:1618660011;'),('e0f47a63c7fc3d792dc8aab6391e6817eb21e9eb','188.34.141.228',1618660853,'__ci_last_regenerate|i:1618660853;user_id|s:1:\"1\";email|s:19:\"volyca222@gmail.com\";displayname|s:6:\"volyca\";logged_in|b:1;'),('cacb005fb0fcdd7cb22fe7290e806f5c1713b260','188.34.141.228',1618661830,'__ci_last_regenerate|i:1618661830;user_id|s:1:\"1\";email|s:19:\"volyca222@gmail.com\";displayname|s:6:\"volyca\";logged_in|b:1;'),('403e418f1fdcbfb2e6475f03130f90fc18452113','188.34.141.228',1618662217,'__ci_last_regenerate|i:1618662217;user_id|s:1:\"1\";email|s:19:\"volyca222@gmail.com\";displayname|s:6:\"volyca\";logged_in|b:1;'),('6ab3b87b3cf24c6329388eef9b3e70d2351eee9a','188.34.141.228',1618662530,'__ci_last_regenerate|i:1618662530;user_id|s:1:\"1\";email|s:19:\"volyca222@gmail.com\";displayname|s:6:\"volyca\";logged_in|b:1;'),('50a6716b8914924f894020f1c1e74aeda14b126d','188.34.141.228',1618662833,'__ci_last_regenerate|i:1618662833;user_id|s:1:\"1\";email|s:19:\"volyca222@gmail.com\";displayname|s:6:\"volyca\";logged_in|b:1;'),('e4e188f54502b6793d3d700af530848e0507bab1','188.34.141.228',1618663149,'__ci_last_regenerate|i:1618663149;user_id|s:1:\"1\";email|s:19:\"volyca222@gmail.com\";displayname|s:6:\"volyca\";logged_in|b:1;'),('3afc235fb5a398e631a5e0247d9c5d83b6a815d6','188.34.141.228',1618663609,'__ci_last_regenerate|i:1618663609;user_id|s:1:\"1\";email|s:19:\"volyca222@gmail.com\";displayname|s:6:\"volyca\";logged_in|b:1;'),('acd631745f762fe79737a16d87b1502640e2ed34','188.34.141.228',1618664232,'__ci_last_regenerate|i:1618664232;user_id|s:1:\"1\";email|s:19:\"volyca222@gmail.com\";displayname|s:6:\"volyca\";logged_in|b:1;'),('4b9a1955ae4eafc9cfcbd33a54ace1b3e861e527','188.34.141.228',1618664921,'__ci_last_regenerate|i:1618664921;user_id|s:1:\"1\";email|s:19:\"volyca222@gmail.com\";displayname|s:6:\"volyca\";logged_in|b:1;'),('fad905628588dfb2716d6eb94a8f6454c8be8099','149.154.161.20',1618664468,'__ci_last_regenerate|i:1618664468;'),('a46a268561cc6fa31010ba336ca733b915cc21ea','5.173.132.159',1618664928,'__ci_last_regenerate|i:1618664928;user_id|i:9;email|s:18:\"fedoriv-01@ukr.net\";displayname|s:8:\"marshall\";logged_in|b:1;'),('7f122c70135ca61224c7ca21ed79ac75ad745c85','188.34.141.228',1618665273,'__ci_last_regenerate|i:1618665273;user_id|s:1:\"1\";email|s:19:\"volyca222@gmail.com\";displayname|s:6:\"volyca\";logged_in|b:1;'),('2cf1c0afcaff726f9eb8fe6789b44b18a6fc51d3','5.173.132.159',1618665239,'__ci_last_regenerate|i:1618665239;user_id|i:9;email|s:18:\"fedoriv-01@ukr.net\";displayname|s:8:\"marshall\";logged_in|b:1;'),('b212bbbc09e5b275bf2328b2598de7ff1623d918','188.34.141.228',1618665956,'__ci_last_regenerate|i:1618665956;user_id|s:1:\"1\";email|s:19:\"volyca222@gmail.com\";displayname|s:6:\"volyca\";logged_in|b:1;'),('f343afd8408d87ffe71e1b46d19b024948e4a601','5.173.132.159',1618666555,'__ci_last_regenerate|i:1618666555;'),('6924e5478355d87308134df26bf831b5fc9476ba','188.34.141.228',1618666266,'__ci_last_regenerate|i:1618666266;user_id|s:1:\"1\";email|s:19:\"volyca222@gmail.com\";displayname|s:6:\"volyca\";logged_in|b:1;'),('63c299546b99ec52df7fde746bb6b9a8330777ff','188.34.141.228',1618667155,'__ci_last_regenerate|i:1618667155;user_id|s:1:\"1\";email|s:19:\"volyca222@gmail.com\";displayname|s:6:\"volyca\";logged_in|b:1;'),('960f2c1922994e339d8f349965ac619d800c98c3','5.173.132.159',1618667704,'__ci_last_regenerate|i:1618667704;user_id|s:1:\"9\";email|s:18:\"fedoriv-01@ukr.net\";displayname|s:8:\"marshall\";logged_in|b:1;'),('1beb67d90c451603369c3decfde9d5728ddb2ff2','188.34.141.228',1618667499,'__ci_last_regenerate|i:1618667499;user_id|s:1:\"1\";email|s:19:\"volyca222@gmail.com\";displayname|s:6:\"volyca\";logged_in|b:1;'),('080c69f330e17df8495a2cef9c0c92b1dc9941d9','188.34.141.228',1618668067,'__ci_last_regenerate|i:1618668067;user_id|s:1:\"1\";email|s:19:\"volyca222@gmail.com\";displayname|s:6:\"volyca\";logged_in|b:1;'),('fe4a7c95da25779b15f45febbadf301a3c75a2fc','5.173.132.159',1618670315,'__ci_last_regenerate|i:1618670315;user_id|s:1:\"9\";email|s:18:\"fedoriv-01@ukr.net\";displayname|s:8:\"marshall\";logged_in|b:1;'),('d7098de38b09a6ed4c905794c31c0343ec4a9210','188.34.141.228',1618669907,'__ci_last_regenerate|i:1618669907;user_id|s:1:\"1\";email|s:19:\"volyca222@gmail.com\";displayname|s:6:\"volyca\";logged_in|b:1;'),('ffb6d130003102c2846f20b144462ffebca857d5','188.34.141.228',1618670397,'__ci_last_regenerate|i:1618670397;user_id|s:1:\"1\";email|s:19:\"volyca222@gmail.com\";displayname|s:6:\"volyca\";logged_in|b:1;'),('2ce992de8cd24ccb4d71dd1b28301580d40d9b0d','5.173.132.159',1618670628,'__ci_last_regenerate|i:1618670628;user_id|s:1:\"9\";email|s:18:\"fedoriv-01@ukr.net\";displayname|s:8:\"marshall\";logged_in|b:1;add_error|s:20:\"Problem z dodawaniem\";__ci_vars|a:1:{s:9:\"add_error\";s:3:\"old\";}'),('235891539e7d90ef1cd8f0353b40f8107d95a177','188.34.141.228',1618670795,'__ci_last_regenerate|i:1618670795;user_id|s:1:\"1\";email|s:19:\"volyca222@gmail.com\";displayname|s:6:\"volyca\";logged_in|b:1;'),('365285541618dd9fdd4cf664cdbcea75d3c6604f','5.173.132.159',1618670970,'__ci_last_regenerate|i:1618670970;user_id|s:1:\"9\";email|s:18:\"fedoriv-01@ukr.net\";displayname|s:8:\"marshall\";logged_in|b:1;'),('dd929e383f42370a57baeddb2cdbae3f436d0f50','188.34.141.228',1618671172,'__ci_last_regenerate|i:1618671172;user_id|s:1:\"1\";email|s:19:\"volyca222@gmail.com\";displayname|s:6:\"volyca\";logged_in|b:1;'),('6dc936af17682f401338dbbb2b57a4c82858fca7','5.173.132.159',1618671280,'__ci_last_regenerate|i:1618671280;user_id|s:1:\"9\";email|s:18:\"fedoriv-01@ukr.net\";displayname|s:8:\"marshall\";logged_in|b:1;add_error|s:26:\"Problem z dodawaniem pliku\";__ci_vars|a:1:{s:9:\"add_error\";s:3:\"old\";}'),('01b889b3819e197e70041c4d4dd2d295382d4222','188.34.141.228',1618671544,'__ci_last_regenerate|i:1618671544;user_id|s:1:\"1\";email|s:19:\"volyca222@gmail.com\";displayname|s:6:\"volyca\";logged_in|b:1;'),('726b59d83ba47782a30b18b7b2641d1636ffafd1','5.173.132.159',1618671597,'__ci_last_regenerate|i:1618671597;user_id|s:1:\"9\";email|s:18:\"fedoriv-01@ukr.net\";displayname|s:8:\"marshall\";logged_in|b:1;'),('d1097a0016618727abb442422e545246f45f96b5','188.34.141.228',1618671973,'__ci_last_regenerate|i:1618671973;user_id|s:1:\"1\";email|s:19:\"volyca222@gmail.com\";displayname|s:6:\"volyca\";logged_in|b:1;'),('e5755e6c9c60fe1ae6accc8b51fc7cd46c54db74','5.173.132.159',1618671976,'__ci_last_regenerate|i:1618671976;user_id|s:1:\"9\";email|s:18:\"fedoriv-01@ukr.net\";displayname|s:8:\"marshall\";logged_in|b:1;'),('c75bfcf7b6c1d39279279f020db03cc8210872fb','188.34.141.228',1618671666,'__ci_last_regenerate|i:1618671660;'),('1ef14a7b005bd6d614bccbf8d02f11e7305d613a','188.34.141.228',1618672302,'__ci_last_regenerate|i:1618672302;user_id|s:1:\"1\";email|s:19:\"volyca222@gmail.com\";displayname|s:6:\"volyca\";logged_in|b:1;'),('cb61200ff7924717f2265829395b0c6c7b285ab9','5.173.132.159',1618673018,'__ci_last_regenerate|i:1618673018;user_id|s:1:\"9\";email|s:18:\"fedoriv-01@ukr.net\";displayname|s:8:\"marshall\";logged_in|b:1;'),('f3b85198c6d48cf96d442bc9f61ba268e82a42c9','188.34.141.228',1618672679,'__ci_last_regenerate|i:1618672679;user_id|s:1:\"1\";email|s:19:\"volyca222@gmail.com\";displayname|s:6:\"volyca\";logged_in|b:1;'),('fde9daf9ab85853a4a55e881fd48d3e5e11754ac','188.34.141.228',1618672981,'__ci_last_regenerate|i:1618672981;user_id|s:1:\"1\";email|s:19:\"volyca222@gmail.com\";displayname|s:6:\"volyca\";logged_in|b:1;'),('0c15fcd3a5a26826e65543d657ad14f3122faa48','188.34.141.228',1618673282,'__ci_last_regenerate|i:1618673282;user_id|s:1:\"1\";email|s:19:\"volyca222@gmail.com\";displayname|s:6:\"volyca\";logged_in|b:1;'),('29d61f5fd7202599dda461d6db489d7f65b1d3ba','5.173.132.159',1618673332,'__ci_last_regenerate|i:1618673332;user_id|s:1:\"9\";email|s:18:\"fedoriv-01@ukr.net\";displayname|s:8:\"marshall\";logged_in|b:1;'),('9f63c57322d6415c42fa78db5101667a092a57ec','188.34.141.228',1618673457,'__ci_last_regenerate|i:1618673282;user_id|s:1:\"1\";email|s:19:\"volyca222@gmail.com\";displayname|s:6:\"volyca\";logged_in|b:1;'),('8ac5a46cf67350bca476b9ece6b544a7a3090f3d','5.173.132.159',1618673633,'__ci_last_regenerate|i:1618673633;user_id|s:1:\"9\";email|s:18:\"fedoriv-01@ukr.net\";displayname|s:8:\"marshall\";logged_in|b:1;'),('b10e2547b9071096122a8b5671c5939d149ee0ca','5.173.132.159',1618673638,'__ci_last_regenerate|i:1618673633;user_id|s:1:\"9\";email|s:18:\"fedoriv-01@ukr.net\";displayname|s:8:\"marshall\";logged_in|b:1;'),('04cad410ea5d29540d4657bfdcf94f52206532c3','87.246.197.215',1618685903,'__ci_last_regenerate|i:1618685860;user_id|s:1:\"9\";email|s:18:\"fedoriv-01@ukr.net\";displayname|s:8:\"marshall\";logged_in|b:1;'),('9f8c871ab642fa693edcdd66ecbb5ab2447c3cea','188.34.141.228',1618734391,'__ci_last_regenerate|i:1618734351;'),('953143b3e949a4177a04b756ed41db81e5498b50','195.154.61.206',1618736653,'__ci_last_regenerate|i:1618736653;'),('d1ca27f1820bbbfd64757c51298c4d3081930355','51.15.191.81',1618736772,'__ci_last_regenerate|i:1618736772;'),('2b977305ecba3de5dc0161d455195502395237d6','87.246.197.215',1618741782,'__ci_last_regenerate|i:1618741741;user_id|s:1:\"9\";email|s:18:\"fedoriv-01@ukr.net\";displayname|s:8:\"marshall\";logged_in|b:1;'),('ce8fa86104a1a72eb69ef76e936ceee9427988f5','87.246.197.215',1618753704,'__ci_last_regenerate|i:1618753704;user_id|s:1:\"9\";email|s:18:\"fedoriv-01@ukr.net\";displayname|s:8:\"marshall\";logged_in|b:1;'),('2ada03fb71e03248b078c4c255445020c8534458','89.64.16.250',1618753453,'__ci_last_regenerate|i:1618753268;user_id|i:10;email|s:13:\"test@test.com\";displayname|s:5:\"Jakub\";logged_in|b:1;'),('6bda904172ad78ec3a65e9f17609a70ff104bd01','87.246.197.215',1618753875,'__ci_last_regenerate|i:1618753704;user_id|s:1:\"9\";email|s:18:\"fedoriv-01@ukr.net\";displayname|s:8:\"marshall\";logged_in|b:1;'),('80447d0219ac0971be90ae9c3744d4779c47550a','87.246.197.215',1618766404,'__ci_last_regenerate|i:1618766400;user_id|s:1:\"9\";email|s:18:\"fedoriv-01@ukr.net\";displayname|s:8:\"marshall\";logged_in|b:1;'),('62faea2a29e7bb6d2a2c3a1df10fd9a4e8d6dc1c','87.246.197.215',1618823070,'__ci_last_regenerate|i:1618823070;'),('842ed747189fe0a577eaff8008e268c52b751199','87.246.197.215',1618842514,'__ci_last_regenerate|i:1618842514;user_id|s:1:\"9\";email|s:18:\"fedoriv-01@ukr.net\";displayname|s:8:\"marshall\";logged_in|b:1;'),('b99aee53f243e53ef221ee538503429c4af69986','87.246.197.215',1618842531,'__ci_last_regenerate|i:1618842514;user_id|s:1:\"9\";email|s:18:\"fedoriv-01@ukr.net\";displayname|s:8:\"marshall\";logged_in|b:1;'),('8784570142dc37f474a431eb049c4cc553c87f41','87.246.197.215',1618856533,'__ci_last_regenerate|i:1618856524;user_id|s:1:\"9\";email|s:18:\"fedoriv-01@ukr.net\";displayname|s:8:\"marshall\";logged_in|b:1;'),('d3010a0d83bf82123181b330bbf378e5a538fdb0','87.246.197.215',1618910096,'__ci_last_regenerate|i:1618910065;user_id|s:1:\"9\";email|s:18:\"fedoriv-01@ukr.net\";displayname|s:8:\"marshall\";logged_in|b:1;'),('e3b924fd20c5cbe15d4f2eb9e775cde9af55fdea','87.246.197.215',1618917277,'__ci_last_regenerate|i:1618917273;user_id|s:1:\"9\";email|s:18:\"fedoriv-01@ukr.net\";displayname|s:8:\"marshall\";logged_in|b:1;'),('3999ecf4edffe5c5e6c152c1e5792f1bf6642d3a','87.246.197.215',1618947200,'__ci_last_regenerate|i:1618947200;user_id|s:1:\"9\";email|s:18:\"fedoriv-01@ukr.net\";displayname|s:8:\"marshall\";logged_in|b:1;'),('335ef7497033f2adede6fe2aa38403590177a1c3','87.246.197.215',1618949463,'__ci_last_regenerate|i:1618949463;user_id|s:1:\"9\";email|s:18:\"fedoriv-01@ukr.net\";displayname|s:8:\"marshall\";logged_in|b:1;'),('9efaf10ed460435e23f4dcf8dc9a14547c136a74','87.246.197.215',1618951322,'__ci_last_regenerate|i:1618951322;user_id|s:1:\"9\";email|s:18:\"fedoriv-01@ukr.net\";displayname|s:8:\"marshall\";logged_in|b:1;'),('3b0a9ed7666b8406ab6d961b4fae0610424ff172','87.246.197.215',1618951322,'__ci_last_regenerate|i:1618951322;user_id|s:1:\"9\";email|s:18:\"fedoriv-01@ukr.net\";displayname|s:8:\"marshall\";logged_in|b:1;'),('98627466f5c07f5e85e809f2e2175d5706bf815b','188.34.141.228',1618988651,'__ci_last_regenerate|i:1618988651;user_id|s:1:\"1\";email|s:19:\"volyca222@gmail.com\";displayname|s:6:\"volyca\";logged_in|b:1;'),('c54880b0c065286b48b0a97c4b37f987307fe24c','188.34.141.228',1618991935,'__ci_last_regenerate|i:1618991935;user_id|s:1:\"1\";email|s:19:\"volyca222@gmail.com\";displayname|s:6:\"volyca\";logged_in|b:1;'),('964647cad7271249882fa0c8cc1b709b9a9cfc72','188.34.141.228',1618993502,'__ci_last_regenerate|i:1618993502;user_id|s:1:\"1\";email|s:19:\"volyca222@gmail.com\";displayname|s:6:\"volyca\";logged_in|b:1;'),('2c04bc31824dc9de2ad0439d17ec652b79a7ba07','188.34.141.228',1618999459,'__ci_last_regenerate|i:1618999459;user_id|s:1:\"1\";email|s:19:\"volyca222@gmail.com\";displayname|s:6:\"volyca\";logged_in|b:1;'),('435a3383bc59fd2e6ba20f8cf1842df60b5611c5','188.34.141.228',1619002610,'__ci_last_regenerate|i:1619002610;user_id|s:1:\"1\";email|s:19:\"volyca222@gmail.com\";displayname|s:6:\"volyca\";logged_in|b:1;'),('47024eb82a743a1418405d67a0eef429db58f1d7','188.34.141.228',1619002940,'__ci_last_regenerate|i:1619002940;user_id|s:1:\"1\";email|s:19:\"volyca222@gmail.com\";displayname|s:6:\"volyca\";logged_in|b:1;'),('1f687e9f5aa59c495d9d992d19a519dc31790875','188.34.141.228',1619005995,'__ci_last_regenerate|i:1619005995;user_id|s:1:\"1\";email|s:19:\"volyca222@gmail.com\";displayname|s:6:\"volyca\";logged_in|b:1;'),('99638f2329448a1c422c0aa56bf14a804d05f421','87.246.197.215',1619003416,'__ci_last_regenerate|i:1619003416;user_id|s:1:\"9\";email|s:18:\"fedoriv-01@ukr.net\";displayname|s:8:\"marshall\";logged_in|b:1;'),('d0ce94a1614f8dd41be466bd7b33ec8ebd62a588','87.246.197.215',1619004442,'__ci_last_regenerate|i:1619004442;user_id|s:1:\"9\";email|s:18:\"fedoriv-01@ukr.net\";displayname|s:8:\"marshall\";logged_in|b:1;'),('18e80f1e55867730ec64549f69904cf31b3ae2bd','87.246.197.215',1619006644,'__ci_last_regenerate|i:1619006644;user_id|s:1:\"9\";email|s:18:\"fedoriv-01@ukr.net\";displayname|s:8:\"marshall\";logged_in|b:1;'),('332380d648373b1feeacbbfcdf843106149a81b9','188.34.141.228',1619006451,'__ci_last_regenerate|i:1619006451;user_id|s:1:\"1\";email|s:19:\"volyca222@gmail.com\";displayname|s:6:\"volyca\";logged_in|b:1;'),('aef10bff022d5346fa2970478a8be41c62365f4f','188.34.141.228',1619006462,'__ci_last_regenerate|i:1619006451;user_id|s:1:\"1\";email|s:19:\"volyca222@gmail.com\";displayname|s:6:\"volyca\";logged_in|b:1;'),('22abf00f073c98fa424b983db17de5d6e8e5ad31','87.246.197.215',1619010018,'__ci_last_regenerate|i:1619010018;user_id|s:1:\"9\";email|s:18:\"fedoriv-01@ukr.net\";displayname|s:8:\"marshall\";logged_in|b:1;'),('2159237110567353d439560452b0c95999e79a5a','87.246.197.215',1619012995,'__ci_last_regenerate|i:1619012995;user_id|s:1:\"9\";email|s:18:\"fedoriv-01@ukr.net\";displayname|s:8:\"marshall\";logged_in|b:1;'),('34746375865ec11837091884a6c9c05397cc4595','87.246.197.215',1619013001,'__ci_last_regenerate|i:1619012995;user_id|s:1:\"9\";email|s:18:\"fedoriv-01@ukr.net\";displayname|s:8:\"marshall\";logged_in|b:1;'),('f4eb5e1ca4108ff67f0c6fb3463982cbe02ef3e3','18.237.117.112',1619024233,'__ci_last_regenerate|i:1619024233;'),('40ceed2c3ff86c99af64633cef56a56374dc764b','205.169.39.1',1619025643,'__ci_last_regenerate|i:1619025643;'),('ab38f539ecce77f8d458c4ce9aabe481199c866d','87.246.251.242',1619026974,'__ci_last_regenerate|i:1619026970;user_id|s:1:\"9\";email|s:18:\"fedoriv-01@ukr.net\";displayname|s:8:\"marshall\";logged_in|b:1;'),('ef9884a705f24e6b5585a44c617fee3c5021c076','188.34.141.228',1619034453,'__ci_last_regenerate|i:1619034453;user_id|s:1:\"1\";email|s:19:\"volyca222@gmail.com\";displayname|s:6:\"volyca\";logged_in|b:1;'),('1eb0008477634d6e20918b73386d1021eef33b9c','188.34.141.228',1619034457,'__ci_last_regenerate|i:1619034453;user_id|s:1:\"1\";email|s:19:\"volyca222@gmail.com\";displayname|s:6:\"volyca\";logged_in|b:1;'),('d4f7d6426c21d7e860307e41e034b4f403e654d5','51.158.109.3',1619067858,'__ci_last_regenerate|i:1619067858;'),('2b43b2540d51f78dddb84463bde6dd0e6c4c3b5b','188.34.141.228',1619075089,'__ci_last_regenerate|i:1619075089;user_id|s:1:\"1\";email|s:19:\"volyca222@gmail.com\";displayname|s:6:\"volyca\";logged_in|b:1;'),('510b3e1891cdc63373922141de8c818e59a1f7ae','188.34.141.228',1619075672,'__ci_last_regenerate|i:1619075672;user_id|s:1:\"1\";email|s:19:\"volyca222@gmail.com\";displayname|s:6:\"volyca\";logged_in|b:1;'),('dcd6ec6b34ca53d9069f79f76c2c6266b01cb7bb','188.34.141.228',1619076404,'__ci_last_regenerate|i:1619076404;user_id|s:1:\"1\";email|s:19:\"volyca222@gmail.com\";displayname|s:6:\"volyca\";logged_in|b:1;'),('28071b9b96bfd9e6ae59555388cf108555af16c5','188.34.141.228',1619076542,'__ci_last_regenerate|i:1619076404;user_id|s:1:\"1\";email|s:19:\"volyca222@gmail.com\";displayname|s:6:\"volyca\";logged_in|b:1;'),('56839860507705c4afb9ed2d2739e1998643a397','188.34.141.228',1619101428,'__ci_last_regenerate|i:1619101428;'),('e1cee4d19d8898125bd0ba6bca0525d427473c60','188.34.141.228',1619101443,'__ci_last_regenerate|i:1619101428;user_id|s:1:\"1\";email|s:19:\"volyca222@gmail.com\";displayname|s:6:\"volyca\";logged_in|b:1;'),('c11af6593c2b49d480b5048d2d18dcb21d910a6e','188.34.141.228',1619119323,'__ci_last_regenerate|i:1619119323;user_id|s:1:\"1\";email|s:19:\"volyca222@gmail.com\";displayname|s:6:\"volyca\";logged_in|b:1;'),('05139545b2e127df2863562b7dfba356ea792a30','87.246.197.215',1619117769,'__ci_last_regenerate|i:1619117769;user_id|s:1:\"9\";email|s:18:\"fedoriv-01@ukr.net\";displayname|s:8:\"marshall\";logged_in|b:1;'),('4bcdce9dde7a6b1ba3d153244d71807dac77835c','87.246.197.215',1619118674,'__ci_last_regenerate|i:1619118674;user_id|s:1:\"9\";email|s:18:\"fedoriv-01@ukr.net\";displayname|s:8:\"marshall\";logged_in|b:1;'),('8a6efe660a482028d938b7eebb78487aa33ef758','87.246.197.215',1619119180,'__ci_last_regenerate|i:1619119180;user_id|s:1:\"9\";email|s:18:\"fedoriv-01@ukr.net\";displayname|s:8:\"marshall\";logged_in|b:1;'),('199f95c48282f0f1eb8f91959f65b7265842c983','87.246.197.215',1619121624,'__ci_last_regenerate|i:1619121624;user_id|s:1:\"9\";email|s:18:\"fedoriv-01@ukr.net\";displayname|s:8:\"marshall\";logged_in|b:1;'),('dd3b99490fef7e9c61bfb885f417476b0017fa1a','188.34.141.228',1619119810,'__ci_last_regenerate|i:1619119810;user_id|s:1:\"1\";email|s:19:\"volyca222@gmail.com\";displayname|s:6:\"volyca\";logged_in|b:1;'),('f949ceeb7823af9ce1d107106d8f2c103b8fce1a','188.34.141.228',1619120114,'__ci_last_regenerate|i:1619120114;user_id|s:1:\"1\";email|s:19:\"volyca222@gmail.com\";displayname|s:3:\"123\";logged_in|b:1;email_success|s:24:\"E-Mail został zmieniony\";__ci_vars|a:1:{s:13:\"email_success\";s:3:\"old\";}'),('d18067e54cc62aa90a3ddd83de783ec365af8e7f','188.34.141.228',1619120676,'__ci_last_regenerate|i:1619120676;user_id|s:1:\"1\";email|s:19:\"volyca222@gmail.com\";displayname|s:3:\"123\";logged_in|b:1;'),('d69f4438df4fec46f399a0ebfe43ffd386c83c9e','188.34.141.228',1619121604,'__ci_last_regenerate|i:1619121604;user_id|s:1:\"1\";email|s:19:\"volyca222@gmail.com\";displayname|s:6:\"volyca\";logged_in|b:1;'),('969619fcdb9a84f0b4f44a13460bed292f55a553','188.34.141.228',1619121748,'__ci_last_regenerate|i:1619121604;user_id|s:1:\"1\";email|s:19:\"volyca222@gmail.com\";displayname|s:6:\"volyca\";logged_in|b:1;'),('f2f7c5d18ee28fb6cf60612b29af5515353f36f2','87.246.197.215',1619121711,'__ci_last_regenerate|i:1619121624;user_id|s:1:\"9\";email|s:18:\"fedoriv-01@ukr.net\";displayname|s:8:\"marshall\";logged_in|b:1;'),('fc064e6ac1cad5cc7ac750e340842018622356f8','87.246.197.215',1619121725,'__ci_last_regenerate|i:1619121722;'),('29cf7b627249db8dc41c900e5621142f4346f343','34.77.162.11',1619133535,'__ci_last_regenerate|i:1619133535;'),('65ce66973870ee0d604ee38057082cce7df4dcc5','188.34.141.228',1619167316,'__ci_last_regenerate|i:1619167021;user_id|s:1:\"1\";email|s:19:\"volyca222@gmail.com\";displayname|s:6:\"volyca\";logged_in|b:1;'),('ff7ce3dbc790139e11537b2025ca942a8c25f9c5','188.34.141.228',1619174790,'__ci_last_regenerate|i:1619174788;'),('068997f4967f08590ab07f811211cceaabf829b9','188.34.141.228',1619185453,'__ci_last_regenerate|i:1619185453;'),('a4febdcc21826a1d43e0eb65be24c14238a3f510','34.86.35.29',1619204588,'__ci_last_regenerate|i:1619204588;'),('4b8ed55ec54d8857b291d364a6a3ac17fddc0b24','87.246.251.242',1619261057,'__ci_last_regenerate|i:1619261039;user_id|s:1:\"9\";email|s:18:\"fedoriv-01@ukr.net\";displayname|s:8:\"marshall\";logged_in|b:1;'),('b4c92f6007b538214acd5443ac1b0194e855d4f6','188.34.141.228',1619276700,'__ci_last_regenerate|i:1619276700;user_id|s:1:\"1\";email|s:19:\"volyca222@gmail.com\";displayname|s:6:\"volyca\";logged_in|b:1;'),('fd15c265b6b07c8f0ab5de30944bc4f60e9c8fa6','188.34.141.228',1619277020,'__ci_last_regenerate|i:1619277020;user_id|s:1:\"1\";email|s:19:\"volyca222@gmail.com\";displayname|s:6:\"volyca\";logged_in|b:1;'),('c5d1954c58cbea31f217a76d073654a0c7da586b','188.34.141.228',1619277781,'__ci_last_regenerate|i:1619277781;user_id|s:1:\"1\";email|s:19:\"volyca222@gmail.com\";displayname|s:6:\"volyca\";logged_in|b:1;'),('8a1a4a474fda772bf93cb1c75e4f77223f520986','87.246.197.215',1619280333,'__ci_last_regenerate|i:1619280333;user_id|s:1:\"9\";email|s:18:\"fedoriv-01@ukr.net\";displayname|s:8:\"marshall\";logged_in|b:1;'),('f20209433b919c91cb5e40c93a588df0e38495b5','188.34.141.228',1619278939,'__ci_last_regenerate|i:1619278939;user_id|s:1:\"1\";email|s:19:\"volyca222@gmail.com\";displayname|s:6:\"volyca\";logged_in|b:1;'),('11d40c97115b69c9cd5bbfe350771d181def96dc','188.34.141.228',1619278941,'__ci_last_regenerate|i:1619278939;'),('50ccaa92c64d4be170bac29bae46ae949be3cca4','87.246.197.215',1619280354,'__ci_last_regenerate|i:1619280333;user_id|s:1:\"9\";email|s:18:\"fedoriv-01@ukr.net\";displayname|s:8:\"marshall\";logged_in|b:1;'),('0c2450cfae71e8652a6c78ebec7c4a97690059b5','87.246.197.215',1619292171,'__ci_last_regenerate|i:1619291965;user_id|s:1:\"9\";email|s:18:\"fedoriv-01@ukr.net\";displayname|s:8:\"marshall\";logged_in|b:1;'),('4a1e4a878268412811186c8b240d7dd04d98e6e7','188.34.141.228',1619349275,'__ci_last_regenerate|i:1619349139;user_id|s:1:\"1\";email|s:19:\"volyca222@gmail.com\";displayname|s:6:\"volyca\";logged_in|b:1;'),('9ad97d32294ef71321c270db6f87fa306e4e64c8','87.246.197.215',1619367210,'__ci_last_regenerate|i:1619367172;user_id|s:1:\"9\";email|s:18:\"fedoriv-01@ukr.net\";displayname|s:8:\"marshall\";logged_in|b:1;'),('cca50f2397b0bfb811dc0735b3026a2cf90ce86e','87.246.197.215',1619430543,'__ci_last_regenerate|i:1619430543;user_id|s:1:\"9\";email|s:18:\"fedoriv-01@ukr.net\";displayname|s:8:\"marshall\";logged_in|b:1;'),('9a9cb03088f79845e077d01d16e103ce973ba582','87.246.197.215',1619431566,'__ci_last_regenerate|i:1619431566;user_id|s:1:\"9\";email|s:18:\"fedoriv-01@ukr.net\";displayname|s:8:\"marshall\";logged_in|b:1;'),('c1ff4273ebd257acf0fd69d3a97b6377f0f032c3','87.246.197.215',1619431674,'__ci_last_regenerate|i:1619431566;user_id|s:1:\"9\";email|s:18:\"fedoriv-01@ukr.net\";displayname|s:8:\"marshall\";logged_in|b:1;'),('ee43138e97898e784a3ab258cccbc73cd662c5c9','188.34.141.228',1619440672,'__ci_last_regenerate|i:1619440672;'),('d931d1c4d99ca9e56b3e5008b5264693b8971696','87.246.197.215',1619440850,'__ci_last_regenerate|i:1619440850;user_id|s:1:\"9\";email|s:18:\"fedoriv-01@ukr.net\";displayname|s:8:\"marshall\";logged_in|b:1;'),('4cf4cc1f7d11db51f769f868cbb66269573bbb73','188.34.141.228',1619441228,'__ci_last_regenerate|i:1619441228;'),('e0e60b60e5765848221d22a1e505fb577ea87e82','87.246.197.215',1619441808,'__ci_last_regenerate|i:1619441808;user_id|s:1:\"9\";email|s:18:\"fedoriv-01@ukr.net\";displayname|s:8:\"marshall\";logged_in|b:1;'),('cfa7094b7fbe640771eac0e51158e781b7c26341','188.34.141.228',1619441589,'__ci_last_regenerate|i:1619441589;user_id|s:1:\"1\";email|s:19:\"volyca222@gmail.com\";displayname|s:6:\"volyca\";logged_in|b:1;'),('40f91f4eac24fc6200ced92b2573fae12215a9d1','188.34.141.228',1619441855,'__ci_last_regenerate|i:1619441589;user_id|s:1:\"1\";email|s:19:\"volyca222@gmail.com\";displayname|s:6:\"volyca\";logged_in|b:1;'),('16786c9652453c4a62bf2d3c9ccec2a2e2d10f36','87.246.197.215',1619447213,'__ci_last_regenerate|i:1619447213;user_id|s:1:\"9\";email|s:18:\"fedoriv-01@ukr.net\";displayname|s:8:\"marshall\";logged_in|b:1;'),('1df63c904939aeb3689a791f6262445a5b52ffc2','149.154.161.20',1619447132,'__ci_last_regenerate|i:1619447132;'),('d5f98abbb56fd21828a9e06125398b57d902bcc5','87.246.197.215',1619447610,'__ci_last_regenerate|i:1619447610;user_id|s:1:\"9\";email|s:18:\"fedoriv-01@ukr.net\";displayname|s:8:\"marshall\";logged_in|b:1;'),('de9b4e8a8445858c09bea88c6b8ab413efdca9f9','83.29.28.93',1619447240,'__ci_last_regenerate|i:1619447224;'),('24c2aa51edaf837864e191d573a302ca38b0ec2e','5.173.139.161',1619447386,'__ci_last_regenerate|i:1619447386;'),('2d9b28fb3ec5950670927c2afb7228dd031ceb26','87.246.197.215',1619452743,'__ci_last_regenerate|i:1619452743;user_id|s:1:\"9\";email|s:18:\"fedoriv-01@ukr.net\";displayname|s:8:\"marshall\";logged_in|b:1;'),('d6eed2d519c60896f7e2612d525369a7e6218b55','87.246.197.215',1619453116,'__ci_last_regenerate|i:1619453116;user_id|s:1:\"9\";email|s:18:\"fedoriv-01@ukr.net\";displayname|s:8:\"marshall\";logged_in|b:1;'),('bea8cc8e80be637c7cd5a328fec96141a97b16d3','87.246.197.215',1619453142,'__ci_last_regenerate|i:1619453116;user_id|s:1:\"9\";email|s:18:\"fedoriv-01@ukr.net\";displayname|s:8:\"marshall\";logged_in|b:1;');
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tickets`
--

DROP TABLE IF EXISTS `tickets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tickets` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `subject` varchar(250) NOT NULL,
  `value` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tickets`
--

LOCK TABLES `tickets` WRITE;
/*!40000 ALTER TABLE `tickets` DISABLE KEYS */;
INSERT INTO `tickets` VALUES (1,1,'test','test','2021-04-26 12:47:33');
/*!40000 ALTER TABLE `tickets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL DEFAULT '',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Kaidan Yurii','volyca','volyca222@gmail.com','$2y$10$Tsu1vX9lTawTpeQzSJoc8eJXBfZXo3QbGuqq8ucd2O3k0KhWDs3NG','2021-02-06 00:15:44','0000-00-00 00:00:00'),(7,'test','test123','test@test.pl','$2y$10$khWLilG48udnKZhaAnwn.uSQbcp.uhH0Hh8k3CyDjqyJxn29pnF7m','2021-04-17 10:44:39',NULL),(9,'Ostap','marshall','fedoriv-01@ukr.net','$2y$10$t3m5VvzBUqTYwr/IwOp61eofNMpDDwFDaZcEIoK5u7QtgDwhSXJ.G','2021-04-17 13:04:31',NULL),(10,'Jakub','Jakub','test@test.com','$2y$10$H1wJqbejbhJv3p7XprRWW.ANJvabSPHlA3jvUU//7rUFNRJMRjQkm','2021-04-18 13:42:46',NULL);
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

-- Dump completed on 2021-04-26 18:07:23
