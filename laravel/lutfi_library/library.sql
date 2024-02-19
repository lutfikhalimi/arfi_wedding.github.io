/*
SQLyog Professional v12.4.3 (64 bit)
MySQL - 10.4.24-MariaDB : Database - library
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`library` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `library`;

/*Table structure for table `authors` */

DROP TABLE IF EXISTS `authors`;

CREATE TABLE `authors` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` char(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `authors` */

insert  into `authors`(`id`,`name`,`email`,`phone_number`,`address`,`created_at`,`updated_at`) values 
(1,'Frederick Zboncak','yankunding@gmail.com','082135362699','12658 Ana Center Suite 884\nEast Willamouth, VT 68152-8237','2024-01-17 01:58:02','2024-01-17 01:58:02'),
(2,'Lorena Mosciski','amcclure@yahoo.com','082175607342','64139 Wolf Radial Suite 860\nMcCulloughfurt, WV 11948','2024-01-17 01:58:02','2024-01-17 01:58:02'),
(3,'Griffin Batz','knader@yahoo.com','082197696299','581 Hessel Island Suite 074\nPort Guiseppe, MA 06432-6899','2024-01-17 01:58:02','2024-01-17 01:58:02'),
(4,'Salvatore Hermiston','wcasper@kuhic.com','082183189740','8692 Lily Lights Suite 536\nKoeppville, HI 04684','2024-01-17 01:58:02','2024-01-17 01:58:02'),
(5,'Kameron Brakus DVM','ikreiger@hotmail.com','082123954612','19860 Bogan Corner\nBeierfort, AZ 35918','2024-01-17 01:58:02','2024-01-17 01:58:02'),
(6,'Ms. Clemmie Boyle','lolson@russel.info','082119282578','9486 Casper Falls Apt. 852\nMathildeberg, AL 77443-1006','2024-01-17 01:58:02','2024-01-17 01:58:02'),
(7,'Leonardo Howell','dickinson.courtney@gmail.com','08217428535','967 Metz Turnpike\nSouth Bethanyfurt, AR 93833','2024-01-17 01:58:02','2024-01-17 01:58:02'),
(8,'Robin Rau','heber64@yahoo.com','082160496','80211 Abbott Radial Suite 356\nNoemiechester, NJ 42110-7198','2024-01-17 01:58:02','2024-01-17 01:58:02'),
(9,'Dr. Maybelle Greenholt V','opadberg@smith.com','082173031361','634 Stanton Lodge\nSouth Bertha, NY 79789-9147','2024-01-17 01:58:02','2024-01-17 01:58:02'),
(10,'Sheldon Windler','kling.scarlett@gislason.com','082113476604','751 Amy Unions Suite 697\nLake Benny, AK 56897','2024-01-17 01:58:02','2024-01-17 01:58:02'),
(11,'Hailee Beahan','marietta.lind@hotmail.com','082139751378','988 Barry Hills Suite 058\nIsomchester, NC 68740-0240','2024-01-17 01:58:02','2024-01-17 01:58:02'),
(12,'Orville Schumm','daphney41@gmail.com','082184812161','432 Koby Plains Apt. 502\nMandyland, IN 24250','2024-01-17 01:58:02','2024-01-17 01:58:02'),
(13,'Prof. Lowell Kris','clabadie@yahoo.com','082175854682','48082 Cronin Manor Suite 191\nWuckerttown, GA 55712','2024-01-17 01:58:02','2024-01-17 01:58:02'),
(14,'Elise O\'Hara','langosh.danny@medhurst.org','08214096612','3862 Else Greens\nDanielview, KS 07226','2024-01-17 01:58:02','2024-01-17 01:58:02'),
(15,'Juana Crooks','devon.greenfelder@yahoo.com','082181955244','17013 Kaylin Stream Apt. 044\nMayertstad, RI 06799','2024-01-17 01:58:02','2024-01-17 01:58:02'),
(16,'Everardo Heathcote','schultz.jacklyn@mills.org','082197735064','836 Sincere Route Suite 121\nKutchfurt, NJ 95563-9565','2024-01-17 01:58:02','2024-01-17 01:58:02'),
(17,'Terrell Jenkins','lukas.tromp@koch.com','082187615070','582 Bergnaum Points\nNorth Jordi, WI 60580-7997','2024-01-17 01:58:02','2024-01-17 01:58:02'),
(18,'Mr. Leonel Leannon III','stanford03@gmail.com','082126740684','3042 Jayme Spurs\nNorth Darius, AK 38103-5208','2024-01-17 01:58:02','2024-01-17 01:58:02'),
(19,'Kennedi Koelpin Jr.','ryan.ross@kreiger.com','082171520490','482 Reichert Crescent\nAlfredfurt, NC 24387-0955','2024-01-17 01:58:02','2024-01-17 01:58:02'),
(20,'Bertrand Feeney V','jmorar@hotmail.com','08216735431','97641 Bella Mall Suite 255\nShanafort, PA 13890','2024-01-17 01:58:02','2024-01-17 01:58:02');

/*Table structure for table `books` */

DROP TABLE IF EXISTS `books`;

CREATE TABLE `books` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `isbn` int(11) NOT NULL,
  `title` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` int(11) NOT NULL,
  `publisher_id` bigint(20) unsigned NOT NULL,
  `author_id` bigint(20) unsigned NOT NULL,
  `catalog_id` bigint(20) unsigned NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `books_publisher_id_foreign` (`publisher_id`),
  KEY `books_author_id_foreign` (`author_id`),
  KEY `books_catalog_id_foreign` (`catalog_id`),
  CONSTRAINT `books_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`),
  CONSTRAINT `books_catalog_id_foreign` FOREIGN KEY (`catalog_id`) REFERENCES `catalogs` (`id`),
  CONSTRAINT `books_publisher_id_foreign` FOREIGN KEY (`publisher_id`) REFERENCES `publishers` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `books` */

insert  into `books`(`id`,`isbn`,`title`,`year`,`publisher_id`,`author_id`,`catalog_id`,`qty`,`price`,`created_at`,`updated_at`) values 
(4,796552325,'Miss Anna Mraz MD',2021,31,15,30,11,14967,'2024-01-17 03:27:52','2024-01-17 03:27:52'),
(5,612996664,'Clarabelle Mayer',2024,26,12,23,17,15852,'2024-01-17 03:27:52','2024-01-17 03:27:52'),
(6,850310,'Francisca Kreiger',2022,36,18,28,15,18430,'2024-01-17 03:27:52','2024-01-17 03:27:52'),
(7,63805486,'Malvina Mosciski',2010,35,19,24,19,18813,'2024-01-17 03:27:52','2024-01-17 03:27:52'),
(8,71333082,'Mrs. Cindy Abbott',2014,29,14,30,15,16962,'2024-01-17 03:27:52','2024-01-17 03:27:52'),
(9,559458693,'Orville Keebler IV',2012,37,10,23,16,19391,'2024-01-17 03:27:52','2024-01-17 03:27:52'),
(10,614958588,'Shaniya Keebler',2015,29,15,23,12,16971,'2024-01-17 03:27:52','2024-01-17 03:27:52'),
(11,775661358,'Miss Ima Larkin',2022,34,3,25,19,17830,'2024-01-17 03:27:52','2024-01-17 03:27:52'),
(12,721454936,'Jany Lebsack',2022,24,4,28,15,13511,'2024-01-17 03:27:52','2024-01-17 03:27:52'),
(13,740874425,'Chanel Daniel',2022,39,12,24,14,18588,'2024-01-17 03:27:52','2024-01-17 03:27:52'),
(14,751402393,'Edna Bartoletti',2010,36,1,28,20,18108,'2024-01-17 03:27:52','2024-01-17 03:27:52'),
(15,614246474,'Mr. Elton Mueller',2016,32,18,22,17,18827,'2024-01-17 03:27:52','2024-01-17 03:27:52'),
(16,705568056,'Alanna Rosenbaum',2020,36,20,26,16,15063,'2024-01-17 03:27:52','2024-01-17 03:27:52'),
(17,269780047,'Ellen Gibson',2016,27,13,28,18,13446,'2024-01-17 03:27:52','2024-01-17 03:27:52'),
(18,951588425,'Doris Kuhic',2015,37,9,29,18,12340,'2024-01-17 03:27:52','2024-01-17 03:27:52'),
(19,964194021,'Art Rutherford',2012,32,18,29,12,12983,'2024-01-17 03:27:52','2024-01-17 03:27:52'),
(20,12334271,'Tillman Towne',2017,40,19,25,20,17094,'2024-01-17 03:27:52','2024-01-17 03:27:52'),
(21,510166477,'Ignacio Morar II',2018,32,6,29,11,15364,'2024-01-17 03:27:52','2024-01-17 03:27:52'),
(22,384613663,'Dr. Marcelle Walker DDS',2020,38,13,27,19,14013,'2024-01-17 03:27:52','2024-01-17 03:27:52'),
(23,303512757,'Zelda Harber III',2022,23,8,28,12,14910,'2024-01-17 03:27:52','2024-01-17 03:27:52');

/*Table structure for table `catalogs` */

DROP TABLE IF EXISTS `catalogs`;

CREATE TABLE `catalogs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `catalogs` */

insert  into `catalogs`(`id`,`name`,`created_at`,`updated_at`) values 
(21,'Westley Schneider','2024-01-17 03:05:04','2024-01-17 03:05:04'),
(22,'Arvel Monahan Sr.','2024-01-17 03:05:04','2024-01-17 03:05:04'),
(23,'Prof. Heidi Mills IV','2024-01-17 03:05:04','2024-01-17 03:05:04'),
(24,'Vidal Larson','2024-01-17 03:05:04','2024-01-17 03:05:04'),
(25,'Prof. Nettie Krajcik','2024-01-17 03:05:04','2024-01-17 03:05:04'),
(26,'Major Runolfsson DVM','2024-01-17 03:05:04','2024-01-17 03:05:04'),
(27,'Vivien Wilderman','2024-01-17 03:05:04','2024-01-17 03:05:04'),
(28,'Mr. Jarvis Mueller','2024-01-17 03:05:04','2024-01-17 03:05:04'),
(29,'Stephany Lindgren','2024-01-17 03:05:04','2024-01-17 03:05:04'),
(30,'Olen Kemmer','2024-01-17 03:05:04','2024-01-17 03:05:04');

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `members` */

DROP TABLE IF EXISTS `members`;

CREATE TABLE `members` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` char(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `members` */

insert  into `members`(`id`,`name`,`gender`,`phone_number`,`address`,`email`,`created_at`,`updated_at`) values 
(1,'Miss Maida Gutmann','L','082712790911','2585 Abernathy Isle\nBergechester, UT 45212-1243','lgorczany@kub.com','2024-01-17 04:02:46','2024-01-17 04:02:46'),
(2,'Ms. Frederique West','P','082693260401','1352 Cameron Hollow\nWest April, MO 89613','zboncak.stephen@mckenzie.biz','2024-01-17 04:02:46','2024-01-17 04:02:46'),
(3,'Maud Moen','L','08253190886','370 Schamberger Groves\nNew Loren, NJ 89745-9478','jimmy88@yahoo.com','2024-01-17 04:02:46','2024-01-17 04:02:46'),
(4,'Mercedes Orn','L','082438441622','310 Aaron Village\nRosenbaumview, MO 79912','ondricka.kurtis@yahoo.com','2024-01-17 04:02:46','2024-01-17 04:02:46'),
(5,'Lizzie Wisozk','P','082311786121','25994 Murray Bypass Apt. 619\nMayershire, LA 15390-1380','frunolfsson@hand.com','2024-01-17 04:02:46','2024-01-17 04:02:46'),
(6,'Horacio Brakus','P','082657039057','83252 Marvin Vista\nKatherynmouth, KY 79260','abraun@gmail.com','2024-01-17 04:02:46','2024-01-17 04:02:46'),
(7,'Adeline Parisian','P','082669625709','5416 Lakin Isle Suite 767\nNew Jo, MA 55241-5293','sjacobson@zulauf.net','2024-01-17 04:02:46','2024-01-17 04:02:46'),
(8,'Devin Beier','P','082983253306','358 Rempel Heights\nZolachester, DC 90589','kunde.america@murazik.com','2024-01-17 04:02:46','2024-01-17 04:02:46'),
(9,'Brooks Schiller','P','082978580120','1290 Lia Ports Suite 143\nLake Simeonfurt, HI 03162','savannah27@braun.com','2024-01-17 04:02:46','2024-01-17 04:02:46'),
(10,'Dameon Nicolas','P','082212382846','1031 Funk Port\nLake Mariah, AR 36186','fkuphal@trantow.info','2024-01-17 04:02:46','2024-01-17 04:02:46'),
(11,'Arvilla Kub','L','082908055740','3051 Fadel Plaza\nPort Finnberg, AR 72346-2499','quinn.orn@wunsch.com','2024-01-17 04:02:46','2024-01-17 04:02:46'),
(12,'Julianne Rosenbaum','P','082635224166','3195 Dandre Plains Suite 245\nSouth Jeanieton, CT 83975','ulockman@koepp.com','2024-01-17 04:02:46','2024-01-17 04:02:46'),
(13,'Timmy Hilpert','P','082992839209','47619 Friesen Common\nEast Sheldonchester, WI 19747','breitenberg.orin@doyle.com','2024-01-17 04:02:46','2024-01-17 04:02:46'),
(14,'Natalia Spencer','L','082106894349','3188 Demond Ford Suite 986\nWest Clara, GA 42229','iva65@beer.info','2024-01-17 04:02:46','2024-01-17 04:02:46'),
(15,'Imogene McCullough','L','082483184934','6346 Lubowitz Stream Suite 419\nNorth Jasenport, IN 78824','green.pamela@goodwin.com','2024-01-17 04:02:46','2024-01-17 04:02:46'),
(16,'Angelica Conroy','L','082764091407','36836 Arlie Hills Apt. 987\nCarmeloshire, WY 11829-5459','terry.jerrell@kuhlman.com','2024-01-17 04:02:46','2024-01-17 04:02:46'),
(17,'Leanna Kuvalis','P','082441240363','146 Viola Streets Suite 450\nKassulkeborough, SC 11960-9413','bulah13@hotmail.com','2024-01-17 04:02:46','2024-01-17 04:02:46'),
(18,'Tess Kris','L','082545284963','3635 Mary Views\nMariaview, MT 39695','schinner.diego@gmail.com','2024-01-17 04:02:46','2024-01-17 04:02:46'),
(19,'Vita Nikolaus','P','082782173918','60768 Luciano Lakes\nEviestad, VA 35036','gorczany.francis@balistreri.com','2024-01-17 04:02:46','2024-01-17 04:02:46'),
(20,'Mr. Nat Kunde','L','082360198327','19461 Lori Trafficway\nNorth Margaretthaven, MA 85198-3166','klocko.camron@yahoo.com','2024-01-17 04:02:46','2024-01-17 04:02:46');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(9,'2014_01_16_032440_create_members_table',1),
(10,'2014_10_12_000000_create_users_table',2),
(11,'2014_10_12_100000_create_password_reset_tokens_table',2),
(12,'2014_10_12_100000_create_password_resets_table',2),
(13,'2019_08_19_000000_create_failed_jobs_table',2),
(14,'2019_12_14_000001_create_personal_access_tokens_table',2),
(15,'2024_01_16_032548_create_publishers_table',2),
(16,'2024_01_16_032644_create_authors_table',2),
(17,'2024_01_16_032742_create_catalogs_table',2),
(18,'2024_01_16_032823_create_books_table',2),
(19,'2024_01_16_032855_create_transactions_table',2),
(20,'2024_01_16_032952_create_transaction_details_table',2);

/*Table structure for table `password_reset_tokens` */

DROP TABLE IF EXISTS `password_reset_tokens`;

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_reset_tokens` */

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `personal_access_tokens` */

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `personal_access_tokens` */

/*Table structure for table `publishers` */

DROP TABLE IF EXISTS `publishers`;

CREATE TABLE `publishers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` char(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `publishers` */

insert  into `publishers`(`id`,`name`,`email`,`phone_number`,`address`,`created_at`,`updated_at`) values 
(21,'Norwood Friesen Jr.','sammie.bins@yahoo.com','082374640227','3953 Schinner Roads\nDeemouth, NC 15690-8816','2024-01-17 03:11:42','2024-01-17 03:11:42'),
(22,'Catalina Dach','jessyca13@hotmail.com','082286135198','6804 Aidan Prairie\nNew Wilburnfort, MS 21125','2024-01-17 03:11:42','2024-01-17 03:11:42'),
(23,'Prof. Lula Considine','agleason@robel.biz','082983630571','1113 Damaris Trail\nNew Jayceeland, NE 16221-1029','2024-01-17 03:11:42','2024-01-17 03:11:42'),
(24,'Mr. Oliver Bogisich','marlene.hintz@hotmail.com','082741309464','344 Neva Spur\nAmberborough, SC 57884','2024-01-17 03:11:42','2024-01-17 03:11:42'),
(25,'Jules Eichmann','ledner.dayana@hotmail.com','08224432477','50696 Alaina Way Suite 693\nMarvinfort, AL 72138','2024-01-17 03:11:42','2024-01-17 03:11:42'),
(26,'Hilton Kulas PhD','mohamed.koelpin@boyle.com','082443697044','600 Delfina Shoal\nNorth Gaylordside, LA 08352-1285','2024-01-17 03:11:42','2024-01-17 03:11:42'),
(27,'Geoffrey Kertzmann','ibrahim.carter@gmail.com','08282500218','389 Bria Hollow\nMayraview, CT 07304','2024-01-17 03:11:42','2024-01-17 03:11:42'),
(28,'Camille Paucek','ed19@gmail.com','082333013827','2462 Lexie Stream Suite 694\nBuckridgeborough, TX 24980-2193','2024-01-17 03:11:42','2024-01-17 03:11:42'),
(29,'Diamond McKenzie','qwisozk@hotmail.com','082863489187','4336 Breitenberg Springs Suite 084\nProhaskaland, HI 35181-3630','2024-01-17 03:11:42','2024-01-17 03:11:42'),
(30,'Marty Graham','gkiehn@yahoo.com','082138252805','681 Frances Branch\nNorth Cierra, FL 54914-4958','2024-01-17 03:11:42','2024-01-17 03:11:42'),
(31,'Dr. Kendra Hyatt MD','rogahn.lorena@yahoo.com','082475742703','59291 Vicky Motorway Suite 549\nBednarbury, SC 51523-7776','2024-01-17 03:11:42','2024-01-17 03:11:42'),
(32,'Lula Kulas IV','bergstrom.arvilla@hotmail.com','082757435241','74273 Vernice Isle Suite 320\nMitchelborough, AK 39901-8370','2024-01-17 03:11:42','2024-01-17 03:11:42'),
(33,'Miss Linda Dickens','aschaden@grant.net','082384642727','6344 Bernice Forest\nPort Elias, ME 89742-8591','2024-01-17 03:11:42','2024-01-17 03:11:42'),
(34,'Kaitlin Dietrich','berge.aliza@hotmail.com','082650056371','17641 Heaney River Suite 907\nWardborough, WA 96222','2024-01-17 03:11:42','2024-01-17 03:11:42'),
(35,'Dr. Delpha Lesch','jodie15@hotmail.com','082252406646','50935 Melody Manor Apt. 241\nJosefinaville, RI 73000-1715','2024-01-17 03:11:42','2024-01-17 03:11:42'),
(36,'Dr. Elwyn D\'Amore V','zion.moore@hotmail.com','082456576575','385 Hahn Keys Apt. 070\nVivianetown, OH 47238','2024-01-17 03:11:42','2024-01-17 03:11:42'),
(37,'Freda Bogan','kboyer@kovacek.biz','08262254134','83992 Lockman Summit Apt. 837\nNorth Arlieborough, MT 02727','2024-01-17 03:11:42','2024-01-17 03:11:42'),
(38,'Dustin Mertz','oankunding@carter.com','082129818031','47699 Gustave Keys Apt. 420\nWest Amber, NY 88970','2024-01-17 03:11:42','2024-01-17 03:11:42'),
(39,'Prof. Raven Sporer DVM','amara.stehr@gmail.com','082938417816','64718 Bailey Rest\nJustusshire, MA 31633-6775','2024-01-17 03:11:42','2024-01-17 03:11:42'),
(40,'Mrs. Emmie Conroy','glover.verlie@hotmail.com','082594515792','400 Charlie Locks Suite 883\nBrandyberg, MO 38509-8791','2024-01-17 03:11:42','2024-01-17 03:11:42');

/*Table structure for table `transaction_details` */

DROP TABLE IF EXISTS `transaction_details`;

CREATE TABLE `transaction_details` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `transaction_id` bigint(20) unsigned NOT NULL,
  `book_id` bigint(20) unsigned NOT NULL,
  `qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `transaction_details_transaction_id_foreign` (`transaction_id`),
  KEY `transaction_details_book_id_foreign` (`book_id`),
  CONSTRAINT `transaction_details_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  CONSTRAINT `transaction_details_transaction_id_foreign` FOREIGN KEY (`transaction_id`) REFERENCES `transactions` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `transaction_details` */

/*Table structure for table `transactions` */

DROP TABLE IF EXISTS `transactions`;

CREATE TABLE `transactions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `member_id` bigint(20) unsigned NOT NULL,
  `date_start` date NOT NULL,
  `date_end` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `transactions_member_id_foreign` (`member_id`),
  CONSTRAINT `transactions_member_id_foreign` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `transactions` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `member_id` bigint(20) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_member_id_foreign` (`member_id`),
  CONSTRAINT `users_member_id_foreign` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
