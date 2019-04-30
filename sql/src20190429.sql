/*
SQLyog Ultimate v9.63 
MySQL - 5.1.41 : Database - src
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`src` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;

USE `src`;

/*Table structure for table `acceso_temporal` */

DROP TABLE IF EXISTS `acceso_temporal`;

CREATE TABLE `acceso_temporal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cartera_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `acceso_temporal` */

/*Table structure for table `estatus` */

DROP TABLE IF EXISTS `estatus`;

CREATE TABLE `estatus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AVG_ROW_LENGTH=5461;

/*Data for the table `estatus` */

insert  into `estatus`(`id`,`descripcion`) values (2,'FINALIZADO'),(3,'RENOVADO'),(5,'ACTIVO'),(6,'BAJA');

/*Table structure for table `menu` */

DROP TABLE IF EXISTS `menu`;

CREATE TABLE `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `html_id` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `htmlmenu` (`html_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `menu` */

insert  into `menu`(`id`,`descripcion`,`html_id`) values (1,'Distribuidores','m_distribuidores'),(2,'Clientes','m_clientes'),(3,'Banco','m_banco'),(4,'Desembolsos','m_desembolsos'),(5,'Pagos','m_pagos'),(6,'Cortes','m_cortes'),(7,'Entradas y Salidas','m_caja'),(8,'Historial','m_historial'),(9,'Credito','m_credito'),(10,'Carteras','m_carteras'),(11,'Valeras','m_valeras'),(12,'Cancelacion de Vales','m_cancelacion_vales'),(13,'Reportes','m_reportes'),(14,'Rep Desenbiksis','m_rep_desembolsos'),(15,'Rep Pagos','m_rep_pagos'),(16,'Entradas y Salidas','m_rep_caja'),(17,'Relaciones de Cobro','m_relaciones'),(18,'Recibos de Cte','m_recibos'),(19,'Rep Colocado','m_rep_colocado'),(20,'Rep Pendientes Pago','m_rep_ppagos'),(21,'Rep Movimientos','m_rep_movimientos'),(22,'Administracion','m_administracion'),(23,'Sucursales','m_sucursales'),(24,'Zonas','m_zonas'),(25,'Usuarios','m_usuarios'),(26,'Perfiles','m_perfiles');

/*Table structure for table `menu_accesos` */

DROP TABLE IF EXISTS `menu_accesos`;

CREATE TABLE `menu_accesos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `menu_accesos` */

/*Table structure for table `oficinas` */

DROP TABLE IF EXISTS `oficinas`;

CREATE TABLE `oficinas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `oficinas` */

insert  into `oficinas`(`id`,`descripcion`) values (1,'OFICINA MINGO'),(2,'OFICINA MARISOL');

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AVG_ROW_LENGTH=8192;

/*Data for the table `roles` */

insert  into `roles`(`id`,`descripcion`) values (1,'ADMIN'),(2,'COORINADOR');

/*Table structure for table `tipo_prestamo` */

DROP TABLE IF EXISTS `tipo_prestamo`;

CREATE TABLE `tipo_prestamo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dias` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AVG_ROW_LENGTH=5461;

/*Data for the table `tipo_prestamo` */

insert  into `tipo_prestamo`(`id`,`descripcion`,`dias`) values (1,'SEMANAL',7),(2,'QUINCENAL',15),(3,'DIEZ PORCIENTO',15),(4,'PRIMER MODELO',7);

/*Table structure for table `usuarios` */

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `appaterno` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `apmaterno` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nombre` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `usuario` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `estatus_id` int(11) NOT NULL,
  `autorizacion` enum('S','N') COLLATE utf8_unicode_ci DEFAULT 'N',
  `admin` enum('S','N') COLLATE utf8_unicode_ci DEFAULT 'N',
  `autorizacion_esp` enum('S','N') COLLATE utf8_unicode_ci DEFAULT 'N',
  `rol_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `User` (`usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AVG_ROW_LENGTH=1638;

/*Data for the table `usuarios` */

insert  into `usuarios`(`id`,`appaterno`,`apmaterno`,`nombre`,`usuario`,`password`,`estatus_id`,`autorizacion`,`admin`,`autorizacion_esp`,`rol_id`) values (1,'CORTEZ','CORTEZ','AXEL ENRIQUE','AXEL','05b8caaf6ba6f4bdb68675ab8b893bda',5,'S','S','S',1),(2,'PONCE','AMARILLAS','SERGIO','SERGIO','e58aea67b01fa747687f038dfde066f6',5,'N','N','N',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
