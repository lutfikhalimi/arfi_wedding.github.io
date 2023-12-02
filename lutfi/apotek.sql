/*
SQLyog Professional v12.4.3 (64 bit)
MySQL - 10.4.24-MariaDB : Database - db_apotek
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_apotek` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `db_apotek`;

/*Table structure for table `faktur_penjualan` */

DROP TABLE IF EXISTS `faktur_penjualan`;

CREATE TABLE `faktur_penjualan` (
  `kd_penjualan` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `id_karyawan` int(11) NOT NULL,
  `id_obat` int(11) NOT NULL,
  `jumlah` decimal(15,0) NOT NULL,
  `total_bayar` decimal(15,0) NOT NULL,
  PRIMARY KEY (`kd_penjualan`),
  KEY `fk_pelanggan` (`id_pelanggan`),
  KEY `karyawan` (`id_karyawan`),
  KEY `obat` (`id_obat`),
  CONSTRAINT `fk_pelanggan` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id_pelanggan`),
  CONSTRAINT `karyawan` FOREIGN KEY (`id_karyawan`) REFERENCES `karyawan` (`id_karyawan`),
  CONSTRAINT `obat` FOREIGN KEY (`id_obat`) REFERENCES `obat` (`id_obat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `faktur_penjualan` */

/*Table structure for table `faktur_supply` */

DROP TABLE IF EXISTS `faktur_supply`;

CREATE TABLE `faktur_supply` (
  `kd_faktur` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `id_karyawan` int(11) NOT NULL,
  `id_supplier` int(11) NOT NULL,
  `id_obat` int(11) NOT NULL,
  `jumlah_obat` decimal(15,0) NOT NULL,
  `total_bayar` decimal(15,0) NOT NULL,
  PRIMARY KEY (`kd_faktur`),
  KEY `fk_supplier` (`id_supplier`),
  KEY `fk_karyawan` (`id_karyawan`),
  KEY `fk_obat` (`id_obat`),
  CONSTRAINT `fk_karyawan` FOREIGN KEY (`id_karyawan`) REFERENCES `karyawan` (`id_karyawan`),
  CONSTRAINT `fk_obat` FOREIGN KEY (`id_obat`) REFERENCES `obat` (`id_obat`),
  CONSTRAINT `fk_supplier` FOREIGN KEY (`id_supplier`) REFERENCES `supplier` (`id_supplier`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `faktur_supply` */

/*Table structure for table `karyawan` */

DROP TABLE IF EXISTS `karyawan`;

CREATE TABLE `karyawan` (
  `id_karyawan` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(32) NOT NULL,
  `jenis_kelamin` char(10) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `no_tlp` varchar(15) NOT NULL,
  `status` varchar(32) NOT NULL,
  PRIMARY KEY (`id_karyawan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `karyawan` */

/*Table structure for table `obat` */

DROP TABLE IF EXISTS `obat`;

CREATE TABLE `obat` (
  `id_obat` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(32) NOT NULL,
  `jenis` varchar(32) NOT NULL,
  `harga` decimal(15,0) NOT NULL,
  `stok` varchar(25) NOT NULL,
  `tgl_kadaluwarsa` date NOT NULL,
  `id_supplier` int(32) NOT NULL,
  PRIMARY KEY (`id_obat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `obat` */

/*Table structure for table `pelanggan` */

DROP TABLE IF EXISTS `pelanggan`;

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(32) NOT NULL,
  `jenis_kelamin` char(10) NOT NULL,
  `usia` int(10) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  PRIMARY KEY (`id_pelanggan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `pelanggan` */

/*Table structure for table `supplier` */

DROP TABLE IF EXISTS `supplier`;

CREATE TABLE `supplier` (
  `id_supplier` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(32) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_tlp` varchar(15) NOT NULL,
  PRIMARY KEY (`id_supplier`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `supplier` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
