# Host: localhost  (Version 8.0.18)
# Date: 2020-07-01 09:06:45
# Generator: MySQL-Front 6.1  (Build 1.26)


#
# Structure for table "addresses"
#

DROP TABLE IF EXISTS `addresses`;
CREATE TABLE `addresses` (
  `addr_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`addr_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

#
# Data for table "addresses"
#

INSERT INTO `addresses` VALUES (1,1,'Rua Dois de Junho','200'),(2,2,'Rod Augusto Montenegro, KM 10','8'),(3,4,'Quarta Rua Rural','22b');

#
# Structure for table "credit_cards"
#

DROP TABLE IF EXISTS `credit_cards`;
CREATE TABLE `credit_cards` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` int(10) DEFAULT NULL,
  `hash` varchar(255) DEFAULT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `last_digits` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Data for table "credit_cards"
#

INSERT INTO `credit_cards` VALUES (1,1,'card_ckc2m9nr304m6h56dzqvcjwgo','mastercard','7606','2020-07-01 00:28:29','2020-07-01 00:28:29');

#
# Structure for table "users"
#

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL DEFAULT '',
  `last_name` varchar(100) NOT NULL DEFAULT '',
  `email` varchar(255) DEFAULT NULL,
  `genre` char(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

#
# Data for table "users"
#

INSERT INTO `users` VALUES (1,'CAIO','SILVA','caio@gmail.com','M','2020-06-30 00:00:00','2020-06-30 19:19:31'),(2,'EMANUELLE','SILVA','emanuelle@gmail.com','F','2020-06-30 00:00:00','2020-06-30 19:19:46'),(3,'Pedro','Leite','pedro@gmail.com','M','2020-06-30 22:51:00','2020-06-30 22:51:00'),(5,'Fernando','Leite','fernando@gmail.com','M','2020-06-30 22:56:22','2020-06-30 23:03:18');
