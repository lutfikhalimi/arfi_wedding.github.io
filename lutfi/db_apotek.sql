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
  `harga_satuan` decimal(32,0) NOT NULL,
  `jumlah` decimal(15,0) NOT NULL,
  `total_bayar` decimal(15,0) NOT NULL,
  PRIMARY KEY (`kd_penjualan`),
  KEY `fk_pelanggan` (`id_pelanggan`),
  KEY `karyawan` (`id_karyawan`),
  KEY `obat` (`id_obat`),
  CONSTRAINT `fk_pelanggan` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id_pelanggan`),
  CONSTRAINT `karyawan` FOREIGN KEY (`id_karyawan`) REFERENCES `karyawan` (`id_karyawan`),
  CONSTRAINT `obat` FOREIGN KEY (`id_obat`) REFERENCES `obat` (`id_obat`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `faktur_penjualan` */

insert  into `faktur_penjualan`(`kd_penjualan`,`tanggal`,`id_pelanggan`,`id_karyawan`,`id_obat`,`harga_satuan`,`jumlah`,`total_bayar`) values 
(1,'2023-12-01',1,1,1,29000,1,29000),
(2,'2023-11-29',2,4,6,13000,3,39000),
(3,'2023-10-09',3,3,5,17000,1,17000);

/*Table structure for table `faktur_supply` */

DROP TABLE IF EXISTS `faktur_supply`;

CREATE TABLE `faktur_supply` (
  `kd_faktur` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `id_karyawan` int(11) NOT NULL,
  `id_supplier` int(11) NOT NULL,
  `id_obat` int(11) NOT NULL,
  `harga_satuan` decimal(10,0) NOT NULL,
  `jumlah_obat` decimal(15,0) NOT NULL,
  `total_bayar` decimal(15,0) NOT NULL,
  PRIMARY KEY (`kd_faktur`),
  KEY `fk_supplier` (`id_supplier`),
  KEY `fk_karyawan` (`id_karyawan`),
  KEY `fk_obat` (`id_obat`),
  CONSTRAINT `fk_karyawan` FOREIGN KEY (`id_karyawan`) REFERENCES `karyawan` (`id_karyawan`),
  CONSTRAINT `fk_obat` FOREIGN KEY (`id_obat`) REFERENCES `obat` (`id_obat`),
  CONSTRAINT `fk_supplier` FOREIGN KEY (`id_supplier`) REFERENCES `supplier` (`id_supplier`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

/*Data for the table `faktur_supply` */

insert  into `faktur_supply`(`kd_faktur`,`tanggal`,`id_karyawan`,`id_supplier`,`id_obat`,`harga_satuan`,`jumlah_obat`,`total_bayar`) values 
(4,'2023-10-11',1,1,1,29000,20,850000),
(5,'2023-10-03',2,3,3,15000,20,300000),
(6,'2023-10-17',3,2,4,10000,30,300000),
(7,'2023-10-18',4,4,6,13000,30,390000),
(8,'2023-09-18',6,5,7,50000,10,500000);

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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

/*Data for the table `karyawan` */

insert  into `karyawan`(`id_karyawan`,`nama`,`jenis_kelamin`,`tgl_lahir`,`no_tlp`,`status`) values 
(1,'Suripto','Laki-Laki','1995-06-27','082135678654','Tetap'),
(2,'Kumaidi','Laki-Laki','1994-05-03','082173636363','Tetap'),
(3,'Susanto','Laki-Laki','1995-07-03','082373828288','Magang'),
(4,'Maktup','Laki-Laki','1993-06-15','082374636666','Tetap'),
(5,'Zaenap','Perempuan','1997-08-01','089877766622','Tetap'),
(6,'Fitri','Perempuan','1998-11-03','089873737373','Magang'),
(7,'Dinda','Perempuan','2000-12-03','082137647575','Tetap'),
(8,'Desi','Perempuan','1999-12-03','087836363636','Magang'),
(9,'Amat','Laki-Laki','1999-11-11','082138474646','Magang'),
(10,'Nuril','Laki-Laki','2000-06-14','082738474747','Tetap');

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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

/*Data for the table `obat` */

insert  into `obat`(`id_obat`,`nama`,`jenis`,`harga`,`stok`,`tgl_kadaluwarsa`,`id_supplier`) values 
(1,'OBH Combi Plus','Flu & Batuk',29000,'20','2024-01-11',1),
(2,'OBH Ika','Batuk Berdahak',25000,'15','2024-01-24',1),
(3,'Ibuprofen','Sakit Gigi',15000,'20','2024-01-20',3),
(4,'Insto','Mata Merah',10000,'30','2023-02-16',2),
(5,'Diapet','Sakit Perut',17000,'27','2024-02-13',2),
(6,'Panadol Extra','Sakit Kepala',13000,'30','2024-01-24',4),
(7,'Neo Apacin','Sesak Nafas',50000,'10','2024-01-18',5),
(8,'Cooling','Sakit Tenggorokan',20000,'12','2024-01-26',4),
(9,'Salonpas','Sakit Pinggang',5000,'30','2024-02-09',3),
(10,'Betadin','Luka luar',12000,'20','2024-03-07',1);

/*Table structure for table `pelanggan` */

DROP TABLE IF EXISTS `pelanggan`;

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(32) NOT NULL,
  `jenis_kelamin` char(10) NOT NULL,
  `usia` int(10) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `Keluhan` varchar(50) NOT NULL,
  PRIMARY KEY (`id_pelanggan`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

/*Data for the table `pelanggan` */

insert  into `pelanggan`(`id_pelanggan`,`nama`,`jenis_kelamin`,`usia`,`alamat`,`Keluhan`) values 
(1,'Ana Siva','Perempuan',30,'Seren','Flu & Batuk'),
(2,'Andreas','Laki-Laki',28,'Tanjung Anom','Sakit Kepala'),
(3,'Zahro','Perempuan',32,'Puspo','Sakit Perut'),
(4,'Saiful Anam','Laki-Laki',30,'Gintungan','Sakit Kepala'),
(5,'Kasirun','Laki-Laki',40,'Wadas','Batuk Berdahak'),
(6,'Alpiah','Perempuan',39,'Wadas','Mata Merah'),
(7,'Zidan','Laki-Laki',35,'Puspo','Flu & Batuk'),
(8,'Anam','Laki-Laki',32,'Seren','Sakit Kepala'),
(9,'Saifudin','Laki-Laki',27,'Kutoarjo','Sakit Gigi'),
(10,'Iroh','Perempuan',31,'Kutoarjo','Sakit Gigi');

/*Table structure for table `supplier` */

DROP TABLE IF EXISTS `supplier`;

CREATE TABLE `supplier` (
  `id_supplier` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(32) NOT NULL,
  `jenis_kelamin` char(10) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_tlp` varchar(15) NOT NULL,
  PRIMARY KEY (`id_supplier`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

/*Data for the table `supplier` */

insert  into `supplier`(`id_supplier`,`nama`,`jenis_kelamin`,`alamat`,`no_tlp`) values 
(1,'Anwar','Laki-Laki','Girimulyo','082137854040'),
(2,'Irfan','Laki-Laki','Jatiwangsan','082137854050'),
(3,'Nuruz Sabila','Perempuan','Girimulyo','082137849383'),
(4,'Yuliono','Laki-Laki','Sutoragan','082537487363'),
(5,'Putri Anindita','Perempuan','Winong','082174837464'),
(6,'Farizi','Laki-Laki','Winong','087863545533'),
(7,'Endang','Perempuan','Kemiri','082123459876'),
(8,'Hery','Laki-Laki','Sutoragan','082288899966'),
(9,'Azra','Laki-Laki','Sutoragan','085874633883'),
(10,'Fajar','Laki-Laki','Winong','082138474664');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
