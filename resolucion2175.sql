/*
SQLyog Community Edition- MySQL GUI v6.07
Host - 5.6.17 : Database - resolucion2175
*********************************************************************
Server version : 5.6.17
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

create database if not exists `resolucion2175`;

USE `resolucion2175`;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

/*Table structure for table `aux_tipo_identificacion` */

DROP TABLE IF EXISTS `aux_tipo_identificacion`;

CREATE TABLE `aux_tipo_identificacion` (
  `codigo` varchar(2) DEFAULT NULL,
  `tipo` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `aux_tipo_identificacion` */

insert  into `aux_tipo_identificacion`(`codigo`,`tipo`) values ('CC','Cédula de ciudadanía'),('CE','Cédula de extranjeria'),('PA','Pasaporte'),('5','Registro Civil'),('TI','Tarjeta de identidad'),('AS','Adulto sin identificación'),('MS','Menor sin identificación');

/*Table structure for table `empleados` */

DROP TABLE IF EXISTS `empleados`;

CREATE TABLE `empleados` (
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `web` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `empleados` */

/*Table structure for table `recien_nacido` */

DROP TABLE IF EXISTS `recien_nacido`;

CREATE TABLE `recien_nacido` (
  `id` varchar(20) NOT NULL,
  `tipo_id` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `recien_nacido` */

insert  into `recien_nacido`(`id`,`tipo_id`) values ('2','0'),('3','0'),('55','2'),('56','2'),('57','4'),('58','4'),('59','3'),('60','3'),('61','3'),('62','1'),('63','5'),('64','4'),('65','4'),('66','0'),('67','4'),('68','5');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
