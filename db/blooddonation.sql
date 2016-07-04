/*
SQLyog Community v11.3 (32 bit)
MySQL - 10.1.9-MariaDB : Database - blooddonation
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`blooddonation` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `blooddonation`;

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `phone` bigint(15) DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `created_timestamp` datetime DEFAULT NULL,
  `active_doner` tinyint(1) DEFAULT '0',
  `blood_group` varchar(25) DEFAULT NULL,
  `user_type` enum('Admin','User') DEFAULT NULL,
  `user_photo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQUE` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`password`,`phone`,`state_id`,`city_id`,`created_timestamp`,`active_doner`,`blood_group`,`user_type`,`user_photo`) values (1,'Admin(Blood Donation)','admin@blood.com','admin',NULL,NULL,NULL,'2016-06-01 22:52:27',NULL,NULL,'Admin',NULL),(6,'test','deep.baranwal@gmail.com','aman',7503816529,NULL,NULL,NULL,1,NULL,'User',NULL),(7,'Arun Ramanchandran','arun@yopmail.com','arun@123',7503816529,NULL,NULL,NULL,0,NULL,'User',NULL),(8,'sunil','nagwar@yopmail.com','aman9621',7503816529,NULL,NULL,NULL,0,NULL,'User',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
