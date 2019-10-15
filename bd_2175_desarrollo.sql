/*
SQLyog Community Edition- MySQL GUI v6.07
Host - 5.5.24-log : Database - resolucion2175
*********************************************************************
Server version : 5.5.24-log
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

create database if not exists `resolucion2175`;

USE `resolucion2175`;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

/*Table structure for table `gestante` */

DROP TABLE IF EXISTS `gestante`;

CREATE TABLE `gestante` (
  `tipoide` varchar(2) DEFAULT NULL,
  `numero` varchar(17) NOT NULL,
  `primer_apellido` varchar(60) DEFAULT NULL,
  `segundo_apellido` varchar(60) DEFAULT NULL,
  `primer_nombre` varchar(60) DEFAULT NULL,
  `segundo_nombre` varchar(60) DEFAULT NULL,
  `fecha_nac` date DEFAULT NULL,
  `edad_gestacional` varchar(2) DEFAULT NULL,
  `cod_etnia` varchar(1) DEFAULT NULL,
  `fecha_atencion` date DEFAULT NULL,
  `finalidad_consulta` varchar(2) DEFAULT NULL,
  `codigo_cups` varchar(6) DEFAULT NULL,
  `fecha_sum_acido_fol` date DEFAULT NULL,
  `fecha_sum_sulf_ferr` date DEFAULT NULL,
  `fecha_sum_carb_cal` date DEFAULT NULL,
  `fecha_toma_anti_hep` date DEFAULT NULL,
  `resultado_anti_hep` varchar(1) DEFAULT NULL,
  `fecha_toma_serologia` date DEFAULT NULL,
  `resultado_serologia` varchar(1) DEFAULT NULL,
  `fecha_asesoria_elisa` date DEFAULT NULL,
  `fecha_toma_elisa` date DEFAULT NULL,
  `resultdo_elisa` varchar(1) DEFAULT NULL,
  `fecha_hemoglobina` date DEFAULT NULL,
  `resultado_hemoglobina` varchar(1) DEFAULT NULL,
  `fecha_cons_lactancia` datetime DEFAULT NULL,
  PRIMARY KEY (`numero`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `gestante` */

insert  into `gestante`(`tipoide`,`numero`,`primer_apellido`,`segundo_apellido`,`primer_nombre`,`segundo_nombre`,`fecha_nac`,`edad_gestacional`,`cod_etnia`,`fecha_atencion`,`finalidad_consulta`,`codigo_cups`,`fecha_sum_acido_fol`,`fecha_sum_sulf_ferr`,`fecha_sum_carb_cal`,`fecha_toma_anti_hep`,`resultado_anti_hep`,`fecha_toma_serologia`,`resultado_serologia`,`fecha_asesoria_elisa`,`fecha_toma_elisa`,`resultdo_elisa`,`fecha_hemoglobina`,`resultado_hemoglobina`,`fecha_cons_lactancia`) values ('CC','10410910','YATE','ESTUPIÃ‘AN','NORMA','MARIA','1995-10-24','21','6','2016-02-01','06','890201','2016-10-30','2016-12-01','2016-12-31','2016-12-30','1','2017-01-01','2','2017-01-02','2017-01-02','3','2016-12-30','1','2016-12-30 00:00:00');

/*Table structure for table `ninos05` */

DROP TABLE IF EXISTS `ninos05`;

CREATE TABLE `ninos05` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `tipoide` varchar(2) DEFAULT NULL,
  `numero` varchar(17) NOT NULL,
  `fecha_nac` date DEFAULT NULL,
  `sexo` varchar(1) DEFAULT NULL,
  `cod_etnia` varchar(1) DEFAULT NULL,
  `primer_apellido` varchar(60) DEFAULT NULL,
  `segundo_apellido` varchar(60) DEFAULT NULL,
  `primer_nombre` varchar(60) DEFAULT NULL,
  `segundo_nombre` varchar(60) DEFAULT NULL,
  `fecha_atencion` date DEFAULT NULL,
  `finalidad_consulta` varchar(2) DEFAULT NULL,
  `codigo_cups` varchar(6) DEFAULT NULL,
  `peso` varchar(6) DEFAULT NULL,
  `talla` varchar(3) DEFAULT NULL,
  `fecha_sum_sulfato` date DEFAULT NULL,
  `fecha_sum_vitamina` date DEFAULT NULL,
  `fecha_sum_micronut` date DEFAULT NULL,
  `fecha_hemoglobina` date DEFAULT NULL,
  `resulado_hemoglobina` varchar(4) DEFAULT NULL,
  PRIMARY KEY (`id`,`numero`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `ninos05` */

insert  into `ninos05`(`id`,`tipoide`,`numero`,`fecha_nac`,`sexo`,`cod_etnia`,`primer_apellido`,`segundo_apellido`,`primer_nombre`,`segundo_nombre`,`fecha_atencion`,`finalidad_consulta`,`codigo_cups`,`peso`,`talla`,`fecha_sum_sulfato`,`fecha_sum_vitamina`,`fecha_sum_micronut`,`fecha_hemoglobina`,`resulado_hemoglobina`) values (1,'RC','001','2009-10-09','M','4','RONCAYO','MENDEZ','MARIA','ELENA','2016-09-18','04','890201','30','120','2016-09-20','2016-09-20','2016-09-20','2016-09-20','12'),(2,'RC','002','2010-09-20','H','5','CONTRERAS','JIMENEZ','JORGE','MARIA','2016-09-15','04','890205','30','120','2016-09-20','2016-09-19','0016-09-18','2016-09-17','12');

/*Table structure for table `ninos611` */

DROP TABLE IF EXISTS `ninos611`;

CREATE TABLE `ninos611` (
  `tipoide` varchar(2) DEFAULT NULL,
  `numero` varchar(17) NOT NULL,
  `fecha_nac` date DEFAULT NULL,
  `sexo` varchar(1) DEFAULT NULL,
  `cod_etnia` varchar(1) DEFAULT NULL,
  `primer_apellido` varchar(60) DEFAULT NULL,
  `segundo_apellido` varchar(60) DEFAULT NULL,
  `primer_nombre` varchar(60) DEFAULT NULL,
  `segundo_nombre` varchar(60) DEFAULT NULL,
  `fecha_atencion` date DEFAULT NULL,
  `finalidad_consulta` varchar(2) DEFAULT NULL,
  `codigo_cups` varchar(6) DEFAULT NULL,
  `peso` varchar(6) DEFAULT NULL,
  `talla` varchar(3) DEFAULT NULL,
  `fecha_hemoglobina` date DEFAULT NULL,
  `resulado_hemoglobina` varchar(4) DEFAULT NULL,
  PRIMARY KEY (`numero`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `ninos611` */

insert  into `ninos611`(`tipoide`,`numero`,`fecha_nac`,`sexo`,`cod_etnia`,`primer_apellido`,`segundo_apellido`,`primer_nombre`,`segundo_nombre`,`fecha_atencion`,`finalidad_consulta`,`codigo_cups`,`peso`,`talla`,`fecha_hemoglobina`,`resulado_hemoglobina`) values ('11','RC','2009-07-31','H','M','ANDRES','MOR','ARCILLA','1','2016-10-30','04','890201','10','130','2016-11-30','13');

/*Table structure for table `parto` */

DROP TABLE IF EXISTS `parto`;

CREATE TABLE `parto` (
  `tipoide` varchar(2) DEFAULT NULL,
  `numero` varchar(17) NOT NULL,
  `primer_apellido` varchar(60) DEFAULT NULL,
  `segundo_apellido` varchar(60) DEFAULT NULL,
  `primer_nombre` varchar(60) DEFAULT NULL,
  `segundo_nombre` varchar(60) DEFAULT NULL,
  `cod_etnia` varchar(1) DEFAULT NULL,
  `fecha_atencion` date DEFAULT NULL,
  `finalidad_consulta` varchar(2) DEFAULT NULL,
  `codigo_cups` varchar(6) DEFAULT NULL,
  `toma_prueba_sifilis` varchar(1) DEFAULT NULL,
  `fecha_toma_sifilis` date DEFAULT NULL,
  `resultado_serologia` varchar(1) DEFAULT NULL,
  `asesoria_pre_elisa` varchar(1) DEFAULT NULL,
  `fecha_asesoria_elisa` date DEFAULT NULL,
  `toma_prueba_vih` varchar(1) DEFAULT NULL,
  `fecha_toma_vih` date DEFAULT NULL,
  `resultado_vih` varchar(1) DEFAULT NULL,
  `sum_anticon_post` varchar(1) DEFAULT NULL,
  `fecha_sum_anti` date DEFAULT NULL,
  PRIMARY KEY (`numero`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `parto` */

insert  into `parto`(`tipoide`,`numero`,`primer_apellido`,`segundo_apellido`,`primer_nombre`,`segundo_nombre`,`cod_etnia`,`fecha_atencion`,`finalidad_consulta`,`codigo_cups`,`toma_prueba_sifilis`,`fecha_toma_sifilis`,`resultado_serologia`,`asesoria_pre_elisa`,`fecha_asesoria_elisa`,`toma_prueba_vih`,`fecha_toma_vih`,`resultado_vih`,`sum_anticon_post`,`fecha_sum_anti`) values ('CC','32666100','RAMIREZ','MENDOZA','ANA','MARIA','3','2016-10-29','01','735910','1','2016-11-30','2','1','2016-11-30','1','2017-12-31','2','1','2016-12-31');

/*Table structure for table `persona1217` */

DROP TABLE IF EXISTS `persona1217`;

CREATE TABLE `persona1217` (
  `tipoide` varchar(2) DEFAULT NULL,
  `numero` varchar(17) NOT NULL,
  `fecha_nac` date DEFAULT NULL,
  `sexo` varchar(1) DEFAULT NULL,
  `cod_etnia` varchar(1) DEFAULT NULL,
  `primer_apellido` varchar(60) DEFAULT NULL,
  `segundo_apellido` varchar(60) DEFAULT NULL,
  `primer_nombre` varchar(60) DEFAULT NULL,
  `segundo_nombre` varchar(60) DEFAULT NULL,
  `fecha_atencion` date DEFAULT NULL,
  `finalidad_consulta` varchar(2) DEFAULT NULL,
  `codigo_cups` varchar(6) DEFAULT NULL,
  `peso` varchar(6) DEFAULT NULL,
  `talla` varchar(3) DEFAULT NULL,
  `fecha_hemoglobina` date DEFAULT NULL,
  `resulado_hemoglobina` varchar(4) DEFAULT NULL,
  PRIMARY KEY (`numero`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `persona1217` */

insert  into `persona1217`(`tipoide`,`numero`,`fecha_nac`,`sexo`,`cod_etnia`,`primer_apellido`,`segundo_apellido`,`primer_nombre`,`segundo_nombre`,`fecha_atencion`,`finalidad_consulta`,`codigo_cups`,`peso`,`talla`,`fecha_hemoglobina`,`resulado_hemoglobina`) values ('RC','2222','2003-09-26','H','6','CHING','GIL','JAIRO','ANDRES','2016-12-29','04','890201','47','150','2016-12-30','15');

/*Table structure for table `recien_nacido` */

DROP TABLE IF EXISTS `recien_nacido`;

CREATE TABLE `recien_nacido` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `tipoide` varchar(2) DEFAULT NULL,
  `numero` varchar(17) NOT NULL,
  `fecha_nac` date DEFAULT NULL,
  `sexo` varchar(1) DEFAULT NULL,
  `cod_etnia` varchar(1) DEFAULT NULL,
  `primer_apellido` varchar(60) DEFAULT NULL,
  `segundo_apellido` varchar(60) DEFAULT NULL,
  `primer_nombre` varchar(60) DEFAULT NULL,
  `segundo_nombre` varchar(60) DEFAULT NULL,
  `tamizaje_neonatal` varchar(1) DEFAULT NULL,
  `fecha_tamizaje` date DEFAULT NULL,
  PRIMARY KEY (`id`,`numero`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `recien_nacido` */

insert  into `recien_nacido`(`id`,`tipoide`,`numero`,`fecha_nac`,`sexo`,`cod_etnia`,`primer_apellido`,`segundo_apellido`,`primer_nombre`,`segundo_nombre`,`tamizaje_neonatal`,`fecha_tamizaje`) values (1,'RC','10','2016-09-14','M','1','ALARCON','BENITES','ANDREA','MARIA','1','2016-09-12'),(2,'NV','123','2016-08-30','H','A','1','JORGE','ANDRES','LAURENS','1','2016-09-19'),(3,'RC','123456','2016-06-15','H','J','JAIRO','LUGO','CHING','5','1','2016-09-18'),(4,'RC','10','2016-06-15','M','1','ALARCON','BENITES','ANDREA','MARIA','1','2016-09-18');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
