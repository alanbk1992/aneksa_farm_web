/*
SQLyog Ultimate v13.1.1 (32 bit)
MySQL - 10.4.24-MariaDB : Database - anekasat_aneka_satwa
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`anekasat_aneka_satwa` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `anekasat_aneka_satwa`;

/*Table structure for table `farm` */

DROP TABLE IF EXISTS `farm`;

CREATE TABLE `farm` (
  `farm_id` int(11) NOT NULL AUTO_INCREMENT,
  `farm_name` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `membership_id` int(11) DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  PRIMARY KEY (`farm_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `farm` */

insert  into `farm`(`farm_id`,`farm_name`,`address`,`phone`,`membership_id`,`active`,`created_date`) values 
(1,'Keenan Bird Farm',NULL,NULL,1,1,NULL),
(2,'Kimora Farm',NULL,NULL,1,1,NULL);

/*Table structure for table `farm_detail` */

DROP TABLE IF EXISTS `farm_detail`;

CREATE TABLE `farm_detail` (
  `farm_detail_id` int(255) NOT NULL AUTO_INCREMENT,
  `farm_id` int(255) DEFAULT NULL,
  `user_id` int(255) DEFAULT NULL,
  `follower` int(255) NOT NULL DEFAULT 0,
  `is_default` int(255) DEFAULT 1,
  PRIMARY KEY (`farm_detail_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `farm_detail` */

insert  into `farm_detail`(`farm_detail_id`,`farm_id`,`user_id`,`follower`,`is_default`) values 
(1,1,1,5000,0),
(2,2,1,0,1);

/*Table structure for table `membership` */

DROP TABLE IF EXISTS `membership`;

CREATE TABLE `membership` (
  `membership_id` int(11) NOT NULL AUTO_INCREMENT,
  `membership_name` varchar(255) NOT NULL,
  `membership_duration` int(255) NOT NULL,
  `created_date` datetime DEFAULT NULL,
  PRIMARY KEY (`membership_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `membership` */

insert  into `membership`(`membership_id`,`membership_name`,`membership_duration`,`created_date`) values 
(1,'Member Trial',7,'2023-04-19 02:52:53'),
(2,'Member Pro',360,'2023-04-19 02:53:40');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `birth_date` datetime DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `forget_password` varchar(255) DEFAULT NULL,
  `forget_password_expired` varchar(255) DEFAULT NULL,
  `password_salt` varchar(255) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `firebase_id` text DEFAULT NULL,
  `firebase_time` varchar(255) DEFAULT NULL,
  `device_brand` varchar(255) DEFAULT NULL,
  `device_model` int(255) DEFAULT NULL,
  `device_serial` varchar(255) DEFAULT NULL,
  `device_os` varchar(255) DEFAULT NULL,
  `activation_code` varchar(255) DEFAULT NULL,
  `referral_by` varchar(11) DEFAULT NULL,
  `google_user_id` varchar(255) DEFAULT NULL,
  `is_login` int(11) DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `users` */

insert  into `users`(`user_id`,`role_id`,`first_name`,`last_name`,`username`,`email`,`phone`,`birth_date`,`gender`,`address`,`password`,`forget_password`,`forget_password_expired`,`password_salt`,`token`,`firebase_id`,`firebase_time`,`device_brand`,`device_model`,`device_serial`,`device_os`,`activation_code`,`referral_by`,`google_user_id`,`is_login`,`active`,`created_date`,`update_date`) values 
(1,NULL,'Alan','Budi Kusuma','msinfo45','msinfo45@gmail.com','089519999390',NULL,NULL,NULL,'123',NULL,NULL,NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,1,NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
