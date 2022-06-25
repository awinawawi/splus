/*
SQLyog Community v13.1.7 (64 bit)
MySQL - 10.4.21-MariaDB : Database - u5815491_splus
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`u5815491_splus` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `u5815491_splus`;

/*Table structure for table `product` */

DROP TABLE IF EXISTS `product`;

CREATE TABLE `product` (
  `product_id` int(20) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(120) NOT NULL,
  `product_jenis` varchar(100) NOT NULL,
  `product_price` decimal(8,2) NOT NULL,
  `product_tipe` varchar(5) NOT NULL,
  `product_brand` varchar(50) NOT NULL,
  `product_camera` varchar(20) NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `product_quantity` mediumint(5) NOT NULL,
  `product_status` enum('0','1') NOT NULL COMMENT '0-active,1-inactive',
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

/*Data for the table `product` */

insert  into `product`(`product_id`,`product_name`,`product_jenis`,`product_price`,`product_tipe`,`product_brand`,`product_camera`,`product_image`,`product_quantity`,`product_status`) values 
(1,'Honor 9 Lite (Sapphire Blue, 64 GB)  (4 GB RAM)','Honor',14499.00,'4','64','13','image-1.jpeg',10,'1'),
(2,'\r\nInfinix Hot S3 (Sandstone Black, 32 GB)  (3 GB RAM)','Infinix',8999.00,'3','32','13','image-2.jpeg',10,'1'),
(3,'VIVO V9 Youth (Gold, 32 GB)  (4 GB RAM)','VIVO',16990.00,'4','32','16','image-3.jpeg',10,'1'),
(4,'Moto E4 Plus (Fine Gold, 32 GB)  (3 GB RAM)','Moto',11499.00,'3','32','8','image-4.jpeg',10,'1'),
(5,'Lenovo K8 Plus (Venom Black, 32 GB)  (3 GB RAM)','Lenevo',9999.00,'3','32','13','image-5.jpg',10,'1'),
(6,'Samsung Galaxy On Nxt (Gold, 16 GB)  (3 GB RAM)','Samsung',10990.00,'3','16','13','image-6.jpeg',10,'1'),
(7,'Moto C Plus (Pearl White, 16 GB)  (2 GB RAM)','Moto',7799.00,'2','16','8','image-7.jpeg',10,'1'),
(8,'Panasonic P77 (White, 16 GB)  (1 GB RAM)','Panasonic',5999.00,'1','16','8','image-8.jpeg',10,'1'),
(9,'OPPO F5 (Black, 64 GB)  (6 GB RAM)','OPPO',19990.00,'6','64','16','image-9.jpeg',10,'1'),
(10,'Honor 7A (Gold, 32 GB)  (3 GB RAM)','Honor',8999.00,'3','32','13','image-10.jpeg',10,'1'),
(11,'Asus ZenFone 5Z (Midnight Blue, 64 GB)  (6 GB RAM)','Asus',29999.00,'6','128','12','image-12.jpeg',10,'1'),
(12,'Redmi 5A (Gold, 32 GB)  (3 GB RAM)','MI',5999.00,'3','32','13','image-12.jpeg',10,'1'),
(13,'Intex Indie 5 (Black, 16 GB)  (2 GB RAM)','Intex',4999.00,'2','16','8','image-13.jpeg',10,'1'),
(14,'Google Pixel 2 XL (18:9 Display, 64 GB) White','Google',61990.00,'4','64','12','image-14.jpeg',10,'1'),
(15,'Samsung Galaxy A9','Samsung',36000.00,'8','128','24','image-15.jpeg',10,'1'),
(16,'Lenovo A5','Lenovo',5999.00,'2','16','13','image-16.jpeg',10,'1'),
(17,'Asus Zenfone Lite L1','Asus',5999.00,'2','16','13','image-17.jpeg',10,'1'),
(18,'Lenovo K9','Lenovo',8999.00,'3','32','13','image-18.jpeg',10,'1'),
(19,'Infinix Hot S3x','Infinix',9999.00,'3','32','13','image-19.jpeg',10,'1'),
(20,'Realme 2','Realme',8990.00,'4','64','13','image-20.jpeg',10,'1'),
(21,'Redmi Note 6 Pro','Redmi',13999.00,'4','64','20','image-21.jpeg',10,'1'),
(22,'Realme C1','Realme',7999.00,'2','16','15','image-22.jpeg',10,'1'),
(23,'Vivo V11','Vivo',22900.00,'6','64','21','image-23.jpeg',10,'1'),
(24,'Oppo F9 Pro','Oppo',23990.00,'6','64','18','image-24.jpg',10,'1'),
(25,'Honor 9N','Honor',11999.00,'4','64','15','image-25.jpg',10,'1'),
(26,'Redmi 6A','Redmi',6599.00,'2','16','13','image-26.jpeg',10,'1'),
(27,'InFocus Vision 3','InFocus',7399.00,'2','16','13','image-27.jpeg',10,'1'),
(28,'Vivo Y69','Vivo',11390.00,'3','32','16','image-28.jpeg',10,'1'),
(29,'Honor 7x','Honor',12721.00,'4','32','18','image-29.jpeg',10,'1'),
(30,'Nokia 2.1','Nokia',6580.00,'2','1','8','image-30.jpeg',10,'1');

/*Table structure for table `tbl_blog` */

DROP TABLE IF EXISTS `tbl_blog`;

CREATE TABLE `tbl_blog` (
  `blog_id` int(11) NOT NULL,
  `blog_pengguna_id` int(11) DEFAULT NULL,
  `blog_slug` varchar(255) DEFAULT NULL,
  `blog_judul` varchar(255) DEFAULT NULL,
  `blog_gambar` varchar(255) DEFAULT NULL,
  `blog_deskripsi` varchar(255) DEFAULT NULL,
  `blog_kategori` varchar(255) DEFAULT NULL,
  `blog_subkategori` varchar(255) DEFAULT NULL,
  `blog_meta_deskripsi` varchar(255) DEFAULT NULL,
  `blog_meta_keyword` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`blog_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_blog` */

/*Table structure for table `tbl_brand` */

DROP TABLE IF EXISTS `tbl_brand`;

CREATE TABLE `tbl_brand` (
  `id_brand` int(11) NOT NULL AUTO_INCREMENT,
  `brand` varchar(100) NOT NULL,
  PRIMARY KEY (`id_brand`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_brand` */

insert  into `tbl_brand`(`id_brand`,`brand`) values 
(1,'SPLUS'),
(2,'NAMO'),
(3,'IROOM');

/*Table structure for table `tbl_cabang` */

DROP TABLE IF EXISTS `tbl_cabang`;

CREATE TABLE `tbl_cabang` (
  `id_cabang` int(10) NOT NULL AUTO_INCREMENT,
  `nama_cabang` varchar(255) DEFAULT NULL,
  `latitude` int(255) DEFAULT NULL,
  `longitude` int(255) DEFAULT NULL,
  PRIMARY KEY (`id_cabang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_cabang` */

/*Table structure for table `tbl_detail_produk` */

DROP TABLE IF EXISTS `tbl_detail_produk`;

CREATE TABLE `tbl_detail_produk` (
  `varian_id` int(11) NOT NULL AUTO_INCREMENT,
  `id_kategori_produk` int(11) NOT NULL,
  `produk_id` int(11) NOT NULL,
  `varian_type` varchar(150) DEFAULT NULL,
  `varian_nama` varchar(150) DEFAULT NULL,
  `varian_gambar_depan` varchar(200) DEFAULT NULL,
  `varian_gambar_utama` varchar(200) DEFAULT NULL,
  `varian_gambar_warna` varchar(200) DEFAULT NULL,
  `varian_harga` bigint(20) DEFAULT NULL,
  `varian_harga_meter` decimal(10,0) DEFAULT NULL,
  `varian_jumlah` bigint(20) DEFAULT NULL,
  `varian_deskripsi` longtext DEFAULT NULL,
  `varian_ukuran` varchar(100) DEFAULT NULL,
  `varian_warna` varchar(100) DEFAULT NULL,
  `tokopedia` text DEFAULT NULL,
  `bukalapak` text DEFAULT NULL,
  PRIMARY KEY (`varian_id`)
) ENGINE=MyISAM AUTO_INCREMENT=157 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_detail_produk` */

insert  into `tbl_detail_produk`(`varian_id`,`id_kategori_produk`,`produk_id`,`varian_type`,`varian_nama`,`varian_gambar_depan`,`varian_gambar_utama`,`varian_gambar_warna`,`varian_harga`,`varian_harga_meter`,`varian_jumlah`,`varian_deskripsi`,`varian_ukuran`,`varian_warna`,`tokopedia`,`bukalapak`) values 
(1,0,1,'clasic1','Multi Combi One Tone',NULL,'2.jpg','combi/warna/multi-combi-one-tone/01-white.jpg',0,973500,NULL,'Combi one tone','1000x1000','White','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-multi-combi-one-tone-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d94raq-jual-roller-blind-s-plus-combi-shade-multi-combi-one-tone-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(2,0,1,'clasic2','Multi Combi One Tone',NULL,'2.jpg','combi/warna/multi-combi-one-tone/02-ivory.jpg',0,973500,NULL,'Combi one tone','1000x1000','Ivory','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-multi-combi-one-tone-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d94raq-jual-roller-blind-s-plus-combi-shade-multi-combi-one-tone-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(3,0,1,'clasic3','Multi Combi One Tone',NULL,'2.jpg','combi/warna/multi-combi-one-tone/03-grey.jpg',0,973500,NULL,'Combi one tone','1000x1000','Grey','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-multi-combi-one-tone-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d94raq-jual-roller-blind-s-plus-combi-shade-multi-combi-one-tone-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(4,0,1,NULL,'Multi Combi Two Tone',NULL,'2.jpg','combi/warna/multi-combi-two-tone/01-beige.jpg',0,1111000,NULL,'Combi Two tone','1000x1000','Beige','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-multi-combi-two-tone-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d96e39-jual-roller-blind-s-plus-combi-shade-multi-combi-two-tone-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(5,0,1,NULL,'Multi Combi Two Tone',NULL,'combi/1.jpg','combi/warna/multi-combi-two-tone/02-white.jpg',0,1111000,NULL,'Combi Two tone','1000x1000','White','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-multi-combi-two-tone-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d96e39-jual-roller-blind-s-plus-combi-shade-multi-combi-two-tone-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(6,0,1,NULL,'Multi Combi Two Tone',NULL,'combi/1.jpg','combi/warna/multi-combi-two-tone/03-cherry.jpg',0,1111000,NULL,'Combi Two tone','1000x1000','Cherry','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-multi-combi-two-tone-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d96e39-jual-roller-blind-s-plus-combi-shade-multi-combi-two-tone-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(7,0,1,NULL,'Multi Combi Two Tone',NULL,'combi/1.jpg','combi/warna/multi-combi-two-tone/04-ivory.jpg',0,1111000,NULL,'Combi Two tone','1000x1000','Ivory','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-multi-combi-two-tone-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d96e39-jual-roller-blind-s-plus-combi-shade-multi-combi-two-tone-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(8,0,1,NULL,'Multi Combi Two Tone',NULL,'combi/1.jpg','combi/warna/multi-combi-two-tone/05-teak.jpg',0,1111000,NULL,'Combi Two tone','1000x1000','Taek','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-multi-combi-two-tone-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d96e39-jual-roller-blind-s-plus-combi-shade-multi-combi-two-tone-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(9,0,1,NULL,'Basic',NULL,'combi/1.jpg','combi/warna/basic/01-white.jpg',0,360800,NULL,'Combi Shade Basic','1000x1000','White','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-basic-uk-60x120-cm-a355','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d2ldyl-jual-roller-blind-s-plus-combi-shade-basic-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(10,0,1,NULL,'Basic',NULL,'combi/1.jpg','combi/warna/basic/02-peach.jpg',0,360800,NULL,'Combi Shade Basic','1000x1000','Peach','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-basic-uk-60x120-cm-a355','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d2ldyl-jual-roller-blind-s-plus-combi-shade-basic-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(11,0,1,NULL,'Basic',NULL,'combi/1.jpg','combi/warna/basic/03-mustard.jpg',0,360800,NULL,'Combi Shade Basic','1000x1000','Mustard','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-basic-uk-60x120-cm-a355','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d2ldyl-jual-roller-blind-s-plus-combi-shade-basic-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(12,0,1,NULL,'Basic',NULL,'combi/1.jpg','combi/warna/basic/07-flourscent-green.jpg',0,360800,NULL,'Combi Shade Basic','1000x1000','Flourcent Green','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-basic-uk-60x120-cm-a355','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d2ldyl-jual-roller-blind-s-plus-combi-shade-basic-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(13,0,1,NULL,'Basic',NULL,'combi/1.jpg','combi/warna/basic/05-pink.jpg',0,360800,NULL,'Combi Shade Basic','1000x1000','Pink','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-basic-uk-60x120-cm-a355','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d2ldyl-jual-roller-blind-s-plus-combi-shade-basic-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(14,0,1,NULL,'Basic',NULL,'combi/1.jpg','combi/warna/basic/06-mocha.jpg',0,360800,NULL,'Combi Shade Basic','1000x1000','Mocca','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-basic-uk-60x120-cm-a355','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d2ldyl-jual-roller-blind-s-plus-combi-shade-basic-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(15,0,1,NULL,'Woodlook S/T 2 Tone',NULL,'combi/1.jpg','combi/warna/woodlook-s-t-tone/01-ivory.jpg',0,594000,NULL,'Combi Shade Woodlook S/T 2 Tone','1000x1000','Ivory','\r\nhttps://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-wood-look-s-t-2-tone-uk-60x120-cm\r\n\r\nhttps://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-wood-look-s-t-2-tone-uk-60x120-cm\r\nhttps://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-wood-look-s-t-2-tone-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d2n7ld-jual-roller-blind-s-plus-combi-shade-woodlook-2-tone-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(16,0,1,NULL,'Woodlook S/T 2 Tone',NULL,'combi/1.jpg','combi/warna/woodlook-s-t-tone/02-white.jpg',0,594000,NULL,'Combi Shade Woodlook S/T 2 Tone','1000x1000','White','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-wood-look-s-t-2-tone-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d2n7ld-jual-roller-blind-s-plus-combi-shade-woodlook-2-tone-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(17,0,1,NULL,'Woodlook S/T 2 Tone',NULL,'combi/1.jpg','combi/warna/woodlook-s-t-tone/03-brown.jpg',0,594000,NULL,'Combi Shade Woodlook S/T 2 Tone','1000x1000','Brown','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-wood-look-s-t-2-tone-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d2n7ld-jual-roller-blind-s-plus-combi-shade-woodlook-2-tone-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(18,0,1,NULL,'Woodlook S/T 2 Tone',NULL,'combi/1.jpg','combi/warna/woodlook-s-t-tone/04-mushroom.jpg',0,594000,NULL,'Combi Shade Woodlook S/T 2 Tone','1000x1000','Mushroom','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-wood-look-s-t-2-tone-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d2n7ld-jual-roller-blind-s-plus-combi-shade-woodlook-2-tone-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(19,0,1,NULL,'Woodlook S/T 2 Tone',NULL,'combi/1.jpg','combi/warna/woodlook-s-t-tone/05-grey.jpg',0,594000,NULL,'Combi Shade Woodlook S/T 2 Tone','1000x1000','Grey','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-wood-look-s-t-2-tone-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d2n7ld-jual-roller-blind-s-plus-combi-shade-woodlook-2-tone-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(20,0,1,NULL,'Woodlook S/T 2 Tone',NULL,'combi/1.jpg','combi/warna/woodlook-s-t-tone/06-chocolate.jpg',0,594000,NULL,'Combi Shade Woodlook S/T 2 Tone','1000x1000','Chocolate','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-wood-look-s-t-2-tone-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d2n7ld-jual-roller-blind-s-plus-combi-shade-woodlook-2-tone-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(21,0,1,NULL,'Wood Look Soft',NULL,'combi/1.jpg','combi/warna/woodlook-soft/01-mushroom.jpg',0,594000,NULL,'Combi Shade Wood Look Soft','1000x1000','Mushroom','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-wood-look-soft-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d2ojmo-jual-roller-blind-s-plus-combi-shade-woodlook-soft-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(22,0,1,NULL,'Wood Look Soft',NULL,'combi/1.jpg','combi/warna/woodlook-soft/02-white.jpg',0,594000,NULL,'Combi Shade Wood Look Soft','1000x1000','White','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-wood-look-soft-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d2ojmo-jual-roller-blind-s-plus-combi-shade-woodlook-soft-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(23,0,1,NULL,'Wood Look Soft',NULL,'combi/1.jpg','combi/warna/woodlook-soft/03-chocolate.jpg',0,594000,NULL,'Combi Shade Wood Look Soft','1000x1000','Chocolate','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-wood-look-soft-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d2ojmo-jual-roller-blind-s-plus-combi-shade-woodlook-soft-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(24,0,1,NULL,'Wood Look Soft',NULL,'combi/1.jpg','combi/warna/woodlook-soft/04-brown.jpg',0,594000,NULL,'Combi Shade Wood Look Soft','1000x1000','Brown','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-wood-look-soft-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d2ojmo-jual-roller-blind-s-plus-combi-shade-woodlook-soft-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(25,0,1,NULL,'Wood Look Soft',NULL,'combi/1.jpg','combi/warna/woodlook-soft/05-grey.jpg',0,594000,NULL,'Combi Shade Wood Look Soft','1000x1000','Grey','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-wood-look-soft-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d2ojmo-jual-roller-blind-s-plus-combi-shade-woodlook-soft-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(26,0,1,NULL,'Wood Look Soft',NULL,'combi/1.jpg','combi/warna/woodlook-soft/06-cadet-blue.jpg',0,594000,NULL,'Combi Shade Wood Look Soft','1000x1000','Cadet Blue','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-wood-look-soft-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d2ojmo-jual-roller-blind-s-plus-combi-shade-woodlook-soft-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(27,0,1,NULL,'Net Wood Look',NULL,'combi/1.jpg','combi/warna/net-wood-look/01-green.jpg',0,481800,NULL,'Combi Shade Net Wood Look','1000x1000','Green','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-net-wood-look-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d2plvm-jual-roller-blind-s-plus-net-wood-look-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(28,0,1,NULL,'Net Wood Look',NULL,'combi/1.jpg','combi/warna/net-wood-look/02-pink.jpg',0,481800,NULL,'Combi Shade Net Wood Look','1000x1000','Pink','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-net-wood-look-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d2plvm-jual-roller-blind-s-plus-net-wood-look-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(29,0,1,NULL,'Net Wood Look',NULL,'combi/1.jpg','combi/warna/net-wood-look/03-blue.jpg',0,481800,NULL,'Combi Shade Net Wood Look','1000x1000','Blue','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-net-wood-look-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d2plvm-jual-roller-blind-s-plus-net-wood-look-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(30,0,1,NULL,'Net Wood Look',NULL,'combi/1.jpg','combi/warna/net-wood-look/04-brown.jpg',0,481800,NULL,'Combi Shade Net Wood Look','1000x1000','Brown','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-net-wood-look-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d2plvm-jual-roller-blind-s-plus-net-wood-look-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(31,0,1,NULL,'Net Wood Look',NULL,'combi/1.jpg','combi/warna/net-wood-look/05-black.jpg',0,481800,NULL,'Combi Shade Net Wood Look','1000x1000','Black','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-net-wood-look-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d2plvm-jual-roller-blind-s-plus-net-wood-look-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(32,0,1,NULL,'Rainbow',NULL,'combi/1.jpg','combi/warna/rainbow/01-pink.jpg',0,492800,NULL,'Combi Shade Rainbow','1000x1000','Pink','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-rainbow-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d2r5wa-jual-roller-blind-s-plus-combi-shade-rainbow-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(33,0,1,NULL,'Rainbow',NULL,'combi/1.jpg','combi/warna/rainbow/02-brown.jpg',0,492800,NULL,'Combi Shade Rainbow','1000x1000','Brown','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-rainbow-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d2r5wa-jual-roller-blind-s-plus-combi-shade-rainbow-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(34,0,1,NULL,'Rainbow',NULL,'combi/1.jpg','combi/warna/rainbow/03-send.jpg',0,492800,NULL,'Combi Shade Rainbow','1000x1000','Sand','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-rainbow-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d2r5wa-jual-roller-blind-s-plus-combi-shade-rainbow-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(35,0,1,NULL,'Rainbow',NULL,'combi/1.jpg','combi/warna/rainbow/04-grey.jpg',0,492800,NULL,'Combi Shade Rainbow','1000x1000','Gray','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-rainbow-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d2r5wa-jual-roller-blind-s-plus-combi-shade-rainbow-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(36,0,1,NULL,'Balwood Look Combi',NULL,'combi/1.jpg','combi/warna/balwood-look-combi/01-mushroom.jpg',0,544500,NULL,'Combi Shade Balwood Look Combi','1000x1000','Mushroom','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-balwood-look-combi-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d2sj6b-jual-roller-blind-s-plus-combi-shade-balwood-look?from=product_owner&product_owner=normal_seller'),
(37,0,1,NULL,'Balwood Look Combi',NULL,'combi/1.jpg','combi/warna/balwood-look-combi/02-cherry.jpg',0,544500,NULL,'Combi Shade Balwood Look Combi','1000x1000','Cherry','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-balwood-look-combi-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d2sj6b-jual-roller-blind-s-plus-combi-shade-balwood-look?from=product_owner&product_owner=normal_seller'),
(38,0,1,NULL,'Balwood Look Combi',NULL,'combi/1.jpg','combi/warna/balwood-look-combi/03-nile.jpg',0,544500,NULL,'Combi Shade Balwood Look Combi','1000x1000','Nile','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-balwood-look-combi-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d2sj6b-jual-roller-blind-s-plus-combi-shade-balwood-look?from=product_owner&product_owner=normal_seller'),
(39,0,1,NULL,'Shani',NULL,'combi/1.jpg','combi/warna/shani/01-white.jpg',0,561000,NULL,'Combi Shade Shani','1000x1000','White','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-shani-uk-60-x-120cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d2ukft-jual-roller-blind-s-plus-combi-shade-shani-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(40,0,1,NULL,'Shani',NULL,'combi/1.jpg','combi/warna/shani/02-peach.jpg',0,561000,NULL,'Combi Shade Shani','1000x1000','Peach','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-shani-uk-60-x-120cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d2ukft-jual-roller-blind-s-plus-combi-shade-shani-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(41,0,1,NULL,'Shani',NULL,'combi/1.jpg','combi/warna/shani/03-caramel.jpg',0,561000,NULL,'Combi Shade Shani','1000x1000','Charamel','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-shani-uk-60-x-120cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d2ukft-jual-roller-blind-s-plus-combi-shade-shani-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(42,0,1,NULL,'Shani',NULL,'combi/1.jpg','combi/warna/shani/04-dark-grey.jpg',0,561000,NULL,'Combi Shade Shani','1000x1000','Dark Grey','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-shani-uk-60-x-120cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d2ukft-jual-roller-blind-s-plus-combi-shade-shani-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(43,0,1,NULL,'Metal Romance',NULL,'combi/1.jpg','combi/warna/metal-romance/01-white.jpg',0,649000,NULL,'Combi Shade Metal Romance','1000x1000','White','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-metal-romance-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3e8evs8-jual-roller-blind-s-plus-combi-shade-metal-romance-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(44,0,1,NULL,'Metal Romance',NULL,'combi/1.jpg','combi/warna/metal-romance/02-gold-pink.jpg',0,649000,NULL,'Combi Shade Metal Romance','1000x1000','Gold Pink','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-metal-romance-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3e8evs8-jual-roller-blind-s-plus-combi-shade-metal-romance-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(45,0,1,NULL,'Metal Romance',NULL,'combi/1.jpg','combi/warna/metal-romance/03-blue.jpg',0,649000,NULL,'Combi Shade Metal Romance','1000x1000','Blue','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-metal-romance-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3e8evs8-jual-roller-blind-s-plus-combi-shade-metal-romance-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(46,0,1,NULL,'Metal Romance',NULL,'combi/1.jpg','combi/warna/metal-romance/04-khaki.jpg',0,649000,NULL,'Combi Shade Metal Romance','1000x1000','Khaki','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-metal-romance-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3e8evs8-jual-roller-blind-s-plus-combi-shade-metal-romance-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(47,0,1,NULL,'Blackout Combi',NULL,'combi/1.jpg','combi/warna/blackout-combi/01-white.jpg',0,753500,NULL,'Combi Shade Blackout Combi','1000x1000','White','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-blackout-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d2zhvb-jual-roller-blind-s-plus-combi-shade-blackout-uk-60x120-cmm?from=product_owner&product_owner=normal_seller'),
(48,0,1,NULL,'Blackout Combi',NULL,'combi/1.jpg','combi/warna/blackout-combi/02-beige.jpg',0,753500,NULL,'Combi Shade Blackout Combi','1000x1000','Beige','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-blackout-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d2zhvb-jual-roller-blind-s-plus-combi-shade-blackout-uk-60x120-cmm?from=product_owner&product_owner=normal_seller'),
(49,0,1,NULL,'Blackout Combi',NULL,'combi/1.jpg','combi/warna/blackout-combi/03-grey.jpg',0,753500,NULL,'Combi Shade Blackout Combi','1000x1000','Grey','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-blackout-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d2zhvb-jual-roller-blind-s-plus-combi-shade-blackout-uk-60x120-cmm?from=product_owner&product_owner=normal_seller'),
(50,0,1,NULL,'Blackout Combi',NULL,'combi/1.jpg','combi/warna/blackout-combi/04-dark-grey.jpg',0,753500,NULL,'Combi Shade Blackout Combi','1000x1000','Dark Grey','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-blackout-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d2zhvb-jual-roller-blind-s-plus-combi-shade-blackout-uk-60x120-cmm?from=product_owner&product_owner=normal_seller'),
(51,0,3,NULL,'Alegro 3010 (1%)',NULL,'sun-screen/1.jpg','sun-screen/warna/alegro-1-3010/01-white.jpg',0,481800,NULL,'Sun Screen Alegro 3010 (1%)','1000x1000','White','https://www.tokopedia.com/splus-indonesia/sun-screen-s-plus-alegro-3010-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d8x9lk-jual-sun-screen-s-plus-alegro-3010-uk-60x120?from=product_owner&product_owner=normal_seller'),
(52,0,3,NULL,'Alegro 3010 (1%)',NULL,'sun-screen/1.jpg','sun-screen/warna/alegro-1-3010/02-beige.jpg',0,481800,NULL,'Sun Screen Alegro 3010 (1%)','1000x1000','Beige','https://www.tokopedia.com/splus-indonesia/sun-screen-s-plus-alegro-3010-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d8x9lk-jual-sun-screen-s-plus-alegro-3010-uk-60x120?from=product_owner&product_owner=normal_seller'),
(53,0,3,NULL,'Alegro 3010 (1%)',NULL,'sun-screen/1.jpg','sun-screen/warna/alegro-1-3010/03-grey.jpg',0,481800,NULL,'Sun Screen Alegro 3010 (1%)','1000x1000','Grey','https://www.tokopedia.com/splus-indonesia/sun-screen-s-plus-alegro-3010-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d8x9lk-jual-sun-screen-s-plus-alegro-3010-uk-60x120?from=product_owner&product_owner=normal_seller'),
(54,0,3,NULL,'Alegro 3030 (3%)',NULL,'sun-screen/1.jpg','sun-screen/warna/alegro-3-3030/01-white.jpg',0,481800,NULL,'Sun Screen Alegro 3030 (3%)','1000x1000','White',NULL,NULL),
(55,0,3,NULL,'Alegro 3030 (3%)',NULL,'sun-screen/1.jpg','sun-screen/warna/alegro-3-3030/02-beige.jpg',0,481800,NULL,'Sun Screen Alegro 3030 (3%)','1000x1000','Beige',NULL,NULL),
(56,0,3,NULL,'Alegro 3030 (3%)',NULL,'sun-screen/1.jpg','sun-screen/warna/alegro-3-3030/03-grey.jpg',0,481800,NULL,'Sun Screen Alegro 3030 (3%)','1000x1000','Grey',NULL,NULL),
(57,0,3,NULL,'Alegro 3050 (5%)',NULL,'sun-screen/1.jpg','sun-screen/warna/alegro-5-3050/01-white.jpg',0,453200,NULL,'Sun Screen Alegro 3050 (5%)','1000x1000','White',NULL,NULL),
(58,0,3,NULL,'Alegro 3050 (5%)',NULL,'sun-screen/1.jpg','sun-screen/warna/alegro-5-3050/02-beige.jpg',0,453200,NULL,'Sun Screen Alegro 3050 (5%)','1000x1000','Beige',NULL,NULL),
(59,0,3,NULL,'Alegro 3050 (5%)',NULL,'sun-screen/1.jpg','sun-screen/warna/alegro-5-3050/03-grey.jpg',0,453200,NULL,'Sun Screen Alegro 3050 (5%)','1000x1000','Grey',NULL,NULL),
(60,0,3,NULL,'Forte 4010 (1%)',NULL,'sun-screen/1.jpg','sun-screen/warna/forte-1-4010/01-white.jpg',0,564300,NULL,'Sun Screen Forte 4010 (1%)','1000x1000','White',NULL,NULL),
(61,0,3,NULL,'Forte 4010 (1%)',NULL,'sun-screen/1.jpg','sun-screen/warna/forte-1-4010/02-beige.jpg',0,564300,NULL,'Sun Screen Forte 4010 (1%)','1000x1000','Beige',NULL,NULL),
(62,0,3,NULL,'Forte 4010 (1%)',NULL,'sun-screen/1.jpg','sun-screen/warna/forte-1-4010/03-grey.jpg',0,564300,NULL,'Sun Screen Forte 4010 (1%)','1000x1000','Grey',NULL,NULL),
(63,0,3,NULL,'Forte 4030 (3%)',NULL,'sun-screen/1.jpg','sun-screen/warna/forte-3-4030/01-white.jpg',0,564300,NULL,'Sun Screen Forte 4030 (3%)','1000x1000','White',NULL,NULL),
(64,0,3,NULL,'Forte 4030 (3%)',NULL,'sun-screen/1.jpg','sun-screen/warna/forte-3-4030/02-beige.jpg',0,564300,NULL,'Sun Screen Forte 4030 (3%)','1000x1000','Beige',NULL,NULL),
(65,0,3,NULL,'Forte 4030 (3%)',NULL,'sun-screen/1.jpg','sun-screen/warna/forte-3-4030/03-grey.jpg',0,564300,NULL,'Sun Screen Forte 4030 (3%)','1000x1000','Grey',NULL,NULL),
(66,0,3,NULL,'Chaos 5000 (5%)',NULL,'sun-screen/1.jpg','sun-screen/warna/chaos-5000/01-white.jpg',0,398200,NULL,'Sun Screen Chaos 5000 (5%)','1000x1000','White','https://www.tokopedia.com/splus-indonesia/sun-screen-s-plus-chaos-5000-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3ehfh0a-jual-sun-screen-s-plus-chaos-5000-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(67,0,3,NULL,'Chaos 5000 (5%)',NULL,'sun-screen/1.jpg','sun-screen/warna/chaos-5000/02-beige.jpg',0,398200,NULL,'Sun Screen Chaos 5000 (5%)','1000x1000','Beige','https://www.tokopedia.com/splus-indonesia/sun-screen-s-plus-chaos-5000-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3ehfh0a-jual-sun-screen-s-plus-chaos-5000-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(68,0,3,NULL,'Chaos 5000 (5%)',NULL,'sun-screen/1.jpg','sun-screen/warna/chaos-5000/04-silver-white.jpg',0,547800,NULL,'Sun Screen Chaos 5000 (5%)','1000x1000','Silver',NULL,NULL),
(69,0,2,NULL,'Peru',NULL,'roll-screen/1.jpg','roll-screen/warna/peru/01-1021.jpg',0,402600,NULL,'Roll Screen Peru','1000x1000','1021#740','https://www.tokopedia.com/splus-indonesia/roll-screen-s-plus-peru-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d8n2ki-jual-roller-blind-s-plus-roll-screen-peru-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(70,0,2,NULL,'Peru',NULL,'roll-screen/1.jpg','roll-screen/warna/peru/01-1023.jpg',0,402600,NULL,'Roll Screen Peru','1000x1000','1023#743','https://www.tokopedia.com/splus-indonesia/roll-screen-s-plus-peru-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d8n2ki-jual-roller-blind-s-plus-roll-screen-peru-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(71,0,2,NULL,'Straw',NULL,'roll-screen/1.jpg','roll-screen/warna/straw/01-brown.jpg',0,360800,NULL,'Roll Screen Straw','1000x1000','Brown','https://www.tokopedia.com/splus-indonesia/roll-screen-s-plus-straw-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d8ob62-jual-roller-blind-s-plus-roll-screen-straw-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(72,0,2,NULL,'Straw',NULL,'roll-screen/1.jpg','roll-screen/warna/straw/01-beige.jpg',0,360800,NULL,'Roll Screen Straw','1000x1000','Beige','https://www.tokopedia.com/splus-indonesia/roll-screen-s-plus-straw-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d8ob62-jual-roller-blind-s-plus-roll-screen-straw-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(73,0,2,NULL,'Mayway',NULL,'roll-screen/1.jpg','roll-screen/warna/mai-way/01-905-BrBg.jpg',0,363000,NULL,'Roll Screen Mayway','1000x1000','905BrBg','https://www.tokopedia.com/splus-indonesia/roll-screen-s-plus-mayway-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d8p6od-jual-roller-blind-s-plus-roll-screen-mayway-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(74,0,2,NULL,'Mayway',NULL,'roll-screen/1.jpg','roll-screen/warna/mai-way/02-904-Brw.jpg',0,363000,NULL,'Roll Screen Mayway','1000x1000','904Brw','https://www.tokopedia.com/splus-indonesia/roll-screen-s-plus-mayway-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d8p6od-jual-roller-blind-s-plus-roll-screen-mayway-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(75,0,4,NULL,'Ben Series',NULL,'blackout/1.jpg','blackout/warna/ben-series/01-forsythia.jpg',0,500500,NULL,'Blackout Roll Screen Ben Series','1000x1000','Forsythia','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-blackout-shade-ben-series-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d3171e-jual-roller-blind-s-plus-blackout-shade-ben-series?from=product_owner&product_owner=normal_seller'),
(76,0,4,NULL,'Ben Series',NULL,'blackout/1.jpg','blackout/warna/ben-series/02-blue.jpg',0,500500,NULL,'Blackout Roll Screen Ben Series','1000x1000','Blue','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-blackout-shade-ben-series-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d3171e-jual-roller-blind-s-plus-blackout-shade-ben-series?from=product_owner&product_owner=normal_seller'),
(77,0,4,NULL,'Ben Series',NULL,'blackout/1.jpg','blackout/warna/ben-series/03-rosewood.jpg',0,500500,NULL,'Blackout Roll Screen Ben Series','1000x1000','Rose Wood','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-blackout-shade-ben-series-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d3171e-jual-roller-blind-s-plus-blackout-shade-ben-series?from=product_owner&product_owner=normal_seller'),
(79,0,4,NULL,'DGCB Series',NULL,'blackout/1.jpg','blackout/warna/dgcb/01-white.jpg',0,453200,NULL,'Blackout Roll Screen DGCB Series','1000x1000','White','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-blackout-shade-dgsb-series-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d8l2pp-jual-roller-blind-s-plus-blackout-shade-dgcb-series?from=product_owner&product_owner=normal_seller'),
(80,0,4,NULL,'DGCB Series',NULL,'blackout/1.jpg','blackout/warna/dgcb/02-grey.jpg',0,453200,NULL,'Blackout Roll Screen DGCB Series','1000x1000','Grey','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-blackout-shade-dgsb-series-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d8l2pp-jual-roller-blind-s-plus-blackout-shade-dgcb-series?from=product_owner&product_owner=normal_seller'),
(81,0,4,NULL,'DGCB Series',NULL,'blackout/1.jpg','blackout/warna/dgcb/03-beige.jpg',0,453200,NULL,'Blackout Roll Screen DGCB Series','1000x1000','Beige','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-blackout-shade-dgsb-series-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d8l2pp-jual-roller-blind-s-plus-blackout-shade-dgcb-series?from=product_owner&product_owner=normal_seller'),
(82,0,4,NULL,'DGSB Series',NULL,'blackout/1.jpg','blackout/warna/dgsb/01-white.jpg',0,453200,NULL,'Blackout Roll Screen DGSB Series','1000x1000','White','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-blackout-shade-dgsb-series-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d8m93y-jual-roller-blind-s-plus-blackout-shade-dgsb-series-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(83,0,4,NULL,'DGSB Series',NULL,'blackout/1.jpg','blackout/warna/dgsb/02-grey.jpg',0,453200,NULL,'Blackout Roll Screen DGSB Series','1000x1000','Grey','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-blackout-shade-dgsb-series-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d8m93y-jual-roller-blind-s-plus-blackout-shade-dgsb-series-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(84,0,4,NULL,'DGSB Series',NULL,'blackout/1.jpg','blackout/warna/dgsb/03-beige.jpg',0,453200,NULL,'Blackout Roll Screen DGSB Series','1000x1000','Beige','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-blackout-shade-dgsb-series-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d8m93y-jual-roller-blind-s-plus-blackout-shade-dgsb-series-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(85,0,5,NULL,'ALEGRO 3000',NULL,'vert-blind/1.jpg','vert-blind/warna/alegro-3000/01-white.jpg',0,632500,NULL,'Vertical Blind ALEGRO 3000','1000x1000','White','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-vertical-alegro-3000-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d91trz-jual-roller-blind-s-plus-vertical-alegro-3000-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(86,0,5,NULL,'ALEGRO 3000',NULL,'vert-blind/1.jpg','vert-blind/warna/alegro-3000/02-grey.jpg',0,632500,NULL,'Vertical Blind ALEGRO 3000','1000x1000','Grey','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-vertical-alegro-3000-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d91trz-jual-roller-blind-s-plus-vertical-alegro-3000-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(87,0,5,NULL,'ALEGRO 3000',NULL,'vert-blind/1.jpg','vert-blind/warna/alegro-3000/03-beige.jpg',0,632500,NULL,'Vertical Blind ALEGRO 3000','1000x1000','Beige','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-vertical-alegro-3000-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d91trz-jual-roller-blind-s-plus-vertical-alegro-3000-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(88,0,5,NULL,'FORTE 4000',NULL,'vert-blind/1.jpg','vert-blind/warna/forte-4000/01-white.jpg',0,712800,NULL,'Vertical Blind FORTE 4000','1000x1000','White',NULL,NULL),
(89,0,5,NULL,'FORTE 4000',NULL,'vert-blind/1.jpg','vert-blind/warna/forte-4000/02-grey.jpg',0,712800,NULL,'Vertical Blind FORTE 4000','1000x1000','Grey',NULL,NULL),
(90,0,5,NULL,'FORTE 4000',NULL,'vert-blind/1.jpg','vert-blind/warna/forte-4000/03-beige.jpg',0,712800,NULL,'Vertical Blind FORTE 4000','1000x1000','Beige',NULL,NULL),
(91,0,5,NULL,'CHAOS 5000',NULL,'vert-blind/1.jpg','vert-blind/warna/chaos-5000/01-white.jpg',0,603000,NULL,'Vertical Blind CHAOS 5000','1000x1000','White',NULL,NULL),
(92,0,5,NULL,'CHAOS 5000',NULL,'vert-blind/1.jpg','vert-blind/warna/chaos-5000/02-beige.jpg',0,603000,NULL,'Vertical Blind CHAOS 5000','1000x1000','Beige',NULL,NULL),
(93,0,5,NULL,'CHAOS 5000',NULL,'vert-blind/1.jpg','vert-blind/warna/chaos-5000/04-silver-white.jpg',0,696500,NULL,'Vertical Blind CHAOS 5000','1000x1000','Silver',NULL,NULL),
(94,0,5,NULL,'BEN SERIES',NULL,'vert-blind/1.jpg','vert-blind/warna/ben-series/01-forsythia.jpg',0,841500,NULL,'Vertical Blind BEN SERIES','1000x1000','Forsythia','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-vertical-ben-series-uk-60x120-cm-forsythia','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3eaf2m5-jual-roller-blind-s-plus-vertical-ben-series-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(95,0,5,NULL,'BEN SERIES',NULL,'vert-blind/1.jpg','vert-blind/warna/ben-series/02-blue.jpg',0,841500,NULL,'Vertical Blind BEN SERIES','1000x1000','Blue','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-vertical-ben-series-uk-60x120-cm-forsythia','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3eaf2m5-jual-roller-blind-s-plus-vertical-ben-series-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(96,0,5,NULL,'BEN SERIES',NULL,'vert-blind/1.jpg','vert-blind/warna/ben-series/03-rosewood.jpg',0,841500,NULL,'Vertical Blind BEN SERIES','1000x1000','Rose Wood','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-vertical-ben-series-uk-60x120-cm-forsythia','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3eaf2m5-jual-roller-blind-s-plus-vertical-ben-series-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(98,0,5,NULL,'STRAW',NULL,'vert-blind/1.jpg','vert-blind/warna/straw/01-brown.jpg',0,874000,NULL,'Vertical Blind STRAW','1000x1000','Brown','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-vertical-straw-uk-60x120-cm-beige','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3eaje74-jual-roller-blind-s-plus-vertical-straw-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(99,0,5,NULL,'STRAW',NULL,'vert-blind/1.jpg','vert-blind/warna/straw/02-beige.jpg',0,874000,NULL,'Vertical Blind STRAW','1000x1000','Beige','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-vertical-straw-uk-60x120-cm-beige','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3eaje74-jual-roller-blind-s-plus-vertical-straw-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(100,0,5,NULL,'GV00501',NULL,'vert-blind/1.jpg','vert-blind/warna/gv/01.jpg',0,484000,NULL,'Vertical Blind GV00501','1000x1000','White','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-vertical-gv00501-uk-60x120-cm-yellow','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3eam1j7-jual-roller-blind-s-plus-vertical-gv00501-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(101,0,5,NULL,'GV00501',NULL,'vert-blind/1.jpg','vert-blind/warna/gv/02.jpg',0,484000,NULL,'Vertical Blind GV00501','1000x1000','Green','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-vertical-gv00501-uk-60x120-cm-yellow','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3eam1j7-jual-roller-blind-s-plus-vertical-gv00501-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(102,0,5,NULL,'GV00501',NULL,'vert-blind/1.jpg','vert-blind/warna/gv/03.jpg',0,484000,NULL,'Vertical Blind GV00501','1000x1000','Blue','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-vertical-gv00501-uk-60x120-cm-yellow','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3eam1j7-jual-roller-blind-s-plus-vertical-gv00501-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(103,0,6,NULL,'WOOD 50MM',NULL,'wood-blind/1.jpg','wood-blind/warna/horizontal-wood/01-LH-113.jpg',0,1119800,NULL,'Horizontal Wood WOOD 50MM','1000x1000','LH-113','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-horizontal-wood-uk-90x180-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d8vdm7-jual-roller-blind-s-plus-horizontal-wood-uk-90x180-cm?from=product_owner&product_owner=normal_seller'),
(104,0,6,NULL,'WOOD 50MM',NULL,'wood-blind/1.jpg','wood-blind/warna/horizontal-wood/02-LH-1017.jpg',0,1119800,NULL,'Horizontal Wood WOOD 50MM','1000x1000','LH-1017','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-horizontal-wood-uk-90x180-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d8vdm7-jual-roller-blind-s-plus-horizontal-wood-uk-90x180-cm?from=product_owner&product_owner=normal_seller'),
(105,0,6,NULL,'WOOD 50MM',NULL,'wood-blind/1.jpg','wood-blind/warna/horizontal-wood/03-LH-1016.jpg',0,1119800,NULL,'Horizontal Wood WOOD 50MM','1000x1000','LH-1016','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-horizontal-wood-uk-90x180-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d8vdm7-jual-roller-blind-s-plus-horizontal-wood-uk-90x180-cm?from=product_owner&product_owner=normal_seller'),
(106,0,6,NULL,'WOOD 50MM',NULL,'wood-blind/1.jpg','wood-blind/warna/horizontal-wood/04-LH-184.jpg',0,1119800,NULL,'Horizontal Wood WOOD 50MM','1000x1000','LH-184','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-horizontal-wood-uk-90x180-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d8vdm7-jual-roller-blind-s-plus-horizontal-wood-uk-90x180-cm?from=product_owner&product_owner=normal_seller'),
(107,0,6,NULL,'WOOD 50MM',NULL,'wood-blind/1.jpg','wood-blind/warna/horizontal-wood/05-LH-1012.jpg',0,1119800,NULL,'Horizontal Wood WOOD 50MM','1000x1000','LH-1012','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-horizontal-wood-uk-90x180-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d8vdm7-jual-roller-blind-s-plus-horizontal-wood-uk-90x180-cm?from=product_owner&product_owner=normal_seller'),
(108,0,7,NULL,'ONE TONE',NULL,'honeycomb/1.jpg','honeycomb/warna/honeycomb-one-tone/01-B-006-Peach-Skin.jpg',0,645300,NULL,'Honeycomb ONE TONE','1000x1000','B-006 PEACH SKIN','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-honeycomb-one-tone-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d8py6x-jual-roller-blind-s-plus-honeycomb-one-tone-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(109,0,7,NULL,'ONE TONE',NULL,'honeycomb/1.jpg','honeycomb/warna/honeycomb-one-tone/02-B-043-Lemon.jpg',0,645300,NULL,'Honeycomb ONE TONE','1000x1000','B-043 LEMON','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-honeycomb-one-tone-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d8py6x-jual-roller-blind-s-plus-honeycomb-one-tone-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(110,0,7,NULL,'ONE TONE',NULL,'honeycomb/1.jpg','honeycomb/warna/honeycomb-one-tone/03-B-012-Dark-Cocoa.jpg',0,645300,NULL,'Honeycomb ONE TONE','1000x1000','B-012 DARK COCOA','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-honeycomb-one-tone-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d8py6x-jual-roller-blind-s-plus-honeycomb-one-tone-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(111,0,7,NULL,'ONE TONE',NULL,'honeycomb/1.jpg','honeycomb/warna/honeycomb-one-tone/04-B-20-Wine.jpg',0,645300,NULL,'Honeycomb ONE TONE','1000x1000','B-20 WINE','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-honeycomb-one-tone-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d8py6x-jual-roller-blind-s-plus-honeycomb-one-tone-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(112,0,7,NULL,'TWO TONE',NULL,'honeycomb/1.jpg','honeycomb/warna/honeycomb-two-tone/01-A-006-Peach-Skin.jpg',0,663300,NULL,'Honeycomb TWO TONE','1000x1000','A-006 PEACH SKIN','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-honeycomb-two-tone-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d8rm7m-jual-roller-blind-s-plus-honeycomb-two-tone-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(113,0,7,NULL,'TWO TONE',NULL,'honeycomb/1.jpg','honeycomb/warna/honeycomb-two-tone/02-A-012-Dark-Cocoa.jpg',0,663300,NULL,'Honeycomb TWO TONE','1000x1000','A-012 DARK COCOA','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-honeycomb-two-tone-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d8rm7m-jual-roller-blind-s-plus-honeycomb-two-tone-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(114,0,7,NULL,'TWO TONE',NULL,'honeycomb/1.jpg','honeycomb/warna/honeycomb-two-tone/03-A-20-Wine.jpg',0,663300,NULL,'Honeycomb TWO TONE','1000x1000','A-20 WINE','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-honeycomb-two-tone-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d8rm7m-jual-roller-blind-s-plus-honeycomb-two-tone-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(115,0,7,NULL,'TWO TONE',NULL,'honeycomb/1.jpg','honeycomb/warna/honeycomb-two-tone/04-A-027-Mose-Green.jpg',0,663300,NULL,'Honeycomb TWO TONE','1000x1000','A-027 MOSE GREEN','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-honeycomb-two-tone-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d8rm7m-jual-roller-blind-s-plus-honeycomb-two-tone-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(116,0,7,NULL,'TWO TONE',NULL,'honeycomb/1.jpg','honeycomb/warna/honeycomb-two-tone/05-A-034-Blue.jpg',0,663300,NULL,'Honeycomb TWO TONE','1000x1000','A-034 BLUE','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-honeycomb-two-tone-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d8rm7m-jual-roller-blind-s-plus-honeycomb-two-tone-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(117,0,7,NULL,'TWO TONE',NULL,'honeycomb/1.jpg','honeycomb/warna/honeycomb-two-tone/06-A-041-Grey.jpg',0,663300,NULL,'Honeycomb TWO TONE','1000x1000','A-041 GREY','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-honeycomb-two-tone-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d8rm7m-jual-roller-blind-s-plus-honeycomb-two-tone-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(118,0,7,NULL,'BLACKOUT',NULL,'honeycomb/1.jpg','honeycomb/warna/blackout/01-Opa-902-ivory.jpg',0,1037300,NULL,'Honeycomb BLACKOUT','1000x1000','OPA-902 IVORY','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-honeycomb-blackout-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d8t3s8-jual-roller-blind-s-plus-hoeycomb-blackout-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(119,0,7,NULL,'BLACKOUT',NULL,'honeycomb/1.jpg','honeycomb/warna/blackout/02-Opa-905-Ice-Blue.jpg',0,1037300,NULL,'Honeycomb BLACKOUT','1000x1000','OPA-095 ICE BLUE','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-honeycomb-blackout-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d8t3s8-jual-roller-blind-s-plus-hoeycomb-blackout-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(120,0,8,NULL,'12,5MM (Patternless)',NULL,'alumunium/1.jpg','alumunium/warna/12-55mm-patternless/01-White-1211.jpg',0,2877600,NULL,'Horizontal Alumunium 12,5MM (Patternless)','1000x1000','WHITE (1211)','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-horizontal-aluminium-12-5-mm-patternless-uk-70x150-white','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3e9i5b1-jual-roller-blind-s-plus-horizontal-aluminium-12-5-mm-patternless-uk-70x150-cm?from=product_owner&product_owner=normal_seller'),
(121,0,8,NULL,'12,5MM (Patternless)',NULL,'alumunium/1.jpg','alumunium/warna/12-55mm-patternless/02-Silver-1243.jpg',0,2877600,NULL,'Horizontal Alumunium 12,5MM (Patternless)','1000x1000','SILVER (1234)','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-horizontal-aluminium-12-5-mm-patternless-uk-70x150-white','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3e9i5b1-jual-roller-blind-s-plus-horizontal-aluminium-12-5-mm-patternless-uk-70x150-cm?from=product_owner&product_owner=normal_seller'),
(122,0,8,NULL,'12,5MM (Patternless)',NULL,'alumunium/1.jpg','alumunium/warna/12-55mm-patternless/03-Gold-12906.jpg',0,2877600,NULL,'Honeycomb 12,5MM (Patternless)','1000x1000','GOLD (12906)','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-horizontal-aluminium-12-5-mm-patternless-uk-70x150-white','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3e9i5b1-jual-roller-blind-s-plus-horizontal-aluminium-12-5-mm-patternless-uk-70x150-cm?from=product_owner&product_owner=normal_seller'),
(123,0,8,NULL,'25MM (woodlook)',NULL,'alumunium/1.jpg','alumunium/warna/25-00mm-woodlook/01-L-Brown-2207.jpg',0,767300,NULL,'Horizontal Alumunium 25MM (woodlook)','1000x1000','L. WOOD (2207)','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-horizontal-aluminium-25mm-woodlook-uk-70x150-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d8vdm7-jual-roller-blind-s-plus-horizontal-wood-uk-90x180-cm?from=product_owner&product_owner=normal_seller'),
(124,0,8,NULL,'25MM (woodlook)',NULL,'alumunium/1.jpg','alumunium/warna/25-00mm-woodlook/02-D-Brown-2207.jpg',0,767300,NULL,'Horizontal Alumunium 25MM (woodlook)','1000x1000','WOOD (2206)','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-horizontal-aluminium-25mm-woodlook-uk-70x150-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d8vdm7-jual-roller-blind-s-plus-horizontal-wood-uk-90x180-cm?from=product_owner&product_owner=normal_seller'),
(125,0,8,NULL,'25MM (Patternless)',NULL,'alumunium/1.jpg','alumunium/warna/25-00mm-patternless/07-Brown-6015.jpg',0,533500,NULL,'Horizontal Alumunium 25MM (Patternless)','1000x1000','BROWN (6015)','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-horizontal-aluminium-25-mm-patternless-uk-70x150cm-brown','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3e9llsk-jual-roller-blind-s-plus-horizontal-aluminium-25-mm-patternless-uk-70x150-cm?from=product_owner&product_owner=normal_seller'),
(126,0,8,NULL,'25MM (Patternless)',NULL,'alumunium/1.jpg','alumunium/warna/25-00mm-patternless/06-Sky-Blue-6009.jpg',0,533500,NULL,'Horizontal Alumunium 25MM (Patternless)','1000x1000','SKY BLUE (60009)','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-horizontal-aluminium-25-mm-patternless-uk-70x150cm-brown','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3e9llsk-jual-roller-blind-s-plus-horizontal-aluminium-25-mm-patternless-uk-70x150-cm?from=product_owner&product_owner=normal_seller'),
(127,0,8,NULL,'25MM (Patternless)',NULL,'alumunium/1.jpg','alumunium/warna/25-00mm-patternless/01-Milky-White-6001.jpg',0,533500,NULL,'Horizontal Alumunium 25MM (Patternless)','1000x1000','MILKY WHITE (6001)','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-horizontal-aluminium-25-mm-patternless-uk-70x150cm-brown','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3e9llsk-jual-roller-blind-s-plus-horizontal-aluminium-25-mm-patternless-uk-70x150-cm?from=product_owner&product_owner=normal_seller'),
(128,0,8,NULL,'25MM (Patternless)',NULL,'alumunium/1.jpg','alumunium/warna/25-00mm-patternless/04-Pink-2609.jpg',0,533500,NULL,'Horizontal Alumunium 25MM (Patternless)','1000x1000','PINK (2609)','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-horizontal-aluminium-25-mm-patternless-uk-70x150cm-brown','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3e9llsk-jual-roller-blind-s-plus-horizontal-aluminium-25-mm-patternless-uk-70x150-cm?from=product_owner&product_owner=normal_seller'),
(129,0,8,NULL,'25MM (Patternless)',NULL,'alumunium/1.jpg','alumunium/warna/25-00mm-patternless/02-Silver-2600.jpg',0,533500,NULL,'Horizontal Alumunium 25MM (Patternless)','1000x1000','SILVER (DSL 26000)','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-horizontal-aluminium-25-mm-patternless-uk-70x150cm-brown','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3e9llsk-jual-roller-blind-s-plus-horizontal-aluminium-25-mm-patternless-uk-70x150-cm?from=product_owner&product_owner=normal_seller'),
(130,0,8,NULL,'25MM (Patternless)',NULL,'alumunium/1.jpg','alumunium/warna/25-00mm-patternless/03-Ivory-2602.jpg',0,533500,NULL,'Horizontal Alumunium 25MM (Patternless)','1000x1000','LIGHT YELLOW (2602)','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-horizontal-aluminium-25-mm-patternless-uk-70x150cm-brown','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3e9llsk-jual-roller-blind-s-plus-horizontal-aluminium-25-mm-patternless-uk-70x150-cm?from=product_owner&product_owner=normal_seller'),
(131,0,8,NULL,'25MM (Patternless)',NULL,'alumunium/1.jpg','alumunium/warna/25-00mm-patternless/05-Mint-2606.jpg',0,533500,NULL,'Horizontal Alumunium 25MM (Patternless)','1000x1000','MINT (2606','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-horizontal-aluminium-25-mm-patternless-uk-70x150cm-brown','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3e9llsk-jual-roller-blind-s-plus-horizontal-aluminium-25-mm-patternless-uk-70x150-cm?from=product_owner&product_owner=normal_seller'),
(132,0,8,NULL,'35MM (Perforated)',NULL,'alumunium/1.jpg','alumunium/warna/35-00mm-perforated/01-Silver-3050.jpg',0,671000,NULL,'Horizontal Alumunium 35MM (Perforated)','1000x1000','SILVER PERFORATED','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-horizontal-aluminium-35-mm-perforated-uk-70x150-silver','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3e9xcb9-jual-roller-blind-s-plus-horizontal-aluminium-35-mm-perforated-uk-70x150-cm?from=product_owner&product_owner=normal_seller'),
(133,0,8,NULL,'35MM (Perforated)',NULL,'alumunium/1.jpg','alumunium/warna/35-00mm-perforated/02-Gold-3010.jpg',0,671000,NULL,'Horizontal Alumunium 35MM (Perforated)','1000x1000','GOLD PERFORATED','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-horizontal-aluminium-35-mm-perforated-uk-70x150-silver','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3e9xcb9-jual-roller-blind-s-plus-horizontal-aluminium-35-mm-perforated-uk-70x150-cm?from=product_owner&product_owner=normal_seller'),
(134,0,8,NULL,'35MM (Patternless)',NULL,'alumunium/1.jpg','alumunium/warna/35-00mm-patternless/02-Matt-Silver-3500.jpg',0,556600,NULL,'Horizontal Alumunium 35MM (Patternless)','1000x1000','SILVER SHINE','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-horizontal-aluminium-35-mm-patternless-uk-70x150cm-gold','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3e9pg0j-jual-roller-blind-s-plus-horizontal-aluminium-35-mm-patternless-uk-70x150-cm?from=product_owner&product_owner=normal_seller'),
(135,0,8,NULL,'35MM (Patternless)',NULL,'alumunium/1.jpg','alumunium/warna/35-00mm-patternless/05-Gold-3510.jpg',0,556600,NULL,'Horizontal Alumunium 35MM (Patternless)','1000x1000','GOLD SHINE','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-horizontal-aluminium-35-mm-patternless-uk-70x150cm-gold','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3e9pg0j-jual-roller-blind-s-plus-horizontal-aluminium-35-mm-patternless-uk-70x150-cm?from=product_owner&product_owner=normal_seller'),
(136,0,8,NULL,'35MM (Patternless)',NULL,'alumunium/1.jpg','alumunium/warna/35-00mm-patternless/04-Silver-3511.jpg',0,556600,NULL,'Horizontal Alumunium 35MM (Patternless)','1000x1000','SILVER','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-horizontal-aluminium-35-mm-patternless-uk-70x150cm-gold','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3e9pg0j-jual-roller-blind-s-plus-horizontal-aluminium-35-mm-patternless-uk-70x150-cm?from=product_owner&product_owner=normal_seller'),
(137,0,8,NULL,'35MM (Patternless)',NULL,'alumunium/1.jpg','alumunium/warna/35-00mm-patternless/01-Milky-White-3501.jpg',0,556600,NULL,'Horizontal Alumunium 35MM (Patternless)','1000x1000','WHITE','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-horizontal-aluminium-35-mm-patternless-uk-70x150cm-gold','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3e9pg0j-jual-roller-blind-s-plus-horizontal-aluminium-35-mm-patternless-uk-70x150-cm?from=product_owner&product_owner=normal_seller'),
(138,0,8,NULL,'35MM (Patternless)',NULL,'alumunium/1.jpg','alumunium/warna/35-00mm-patternless/03-Black-3520.jpg',0,708400,NULL,'Horizontal Alumunium 35MM (Patternless)','1000x1000','BLACK','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-horizontal-aluminium-35-mm-patternless-uk-70x150cm-gold','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3e9pg0j-jual-roller-blind-s-plus-horizontal-aluminium-35-mm-patternless-uk-70x150-cm?from=product_owner&product_owner=normal_seller'),
(139,0,8,NULL,'35MM Dot',NULL,'alumunium/1.jpg','alumunium/warna/35-00mm-dot/01-Silver-3808.jpg',0,657800,NULL,'Horizontal Alumunium 35MM Dot','1000x1000','SILVER DOT','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-horizontal-aluminium-35-mm-dot-uk-70x150-cm-silver','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3e9n606-jual-roller-blind-s-plus-horizontal-aluminium-35-mm-dot-uk-70x150-cm?from=product_owner&product_owner=normal_seller'),
(140,0,8,NULL,'35MM Dot',NULL,'alumunium/1.jpg','alumunium/warna/35-00mm-dot/02-Gold-3810.jpg',0,657800,NULL,'Horizontal Alumunium 35MM Dot','1000x1000','GOLD DOT','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-horizontal-aluminium-35-mm-dot-uk-70x150-cm-silver','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3e9n606-jual-roller-blind-s-plus-horizontal-aluminium-35-mm-dot-uk-70x150-cm?from=product_owner&product_owner=normal_seller'),
(141,0,9,'classic-2','classic-2','classic/classic-1-50.jpg','classic/classic-2-20.jpg','warna_new/19.jpg',0,657800,NULL,'Pintu ABS','1000x1000','BROWN MOTIF','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-horizontal-aluminium-35-mm-dot-uk-70x150-cm-silver','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3e9n606-jual-roller-blind-s-plus-horizontal-aluminium-35-mm-dot-uk-70x150-cm?from=product_owner&product_owner=normal_seller'),
(142,0,9,'classic-2','classic-2','','classic/classic-2-20.jpg','warna_new/10.jpg',0,657800,NULL,'Pintu ABS','1000x1000','BROWN','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-horizontal-aluminium-35-mm-dot-uk-70x150-cm-silver','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3e9n606-jual-roller-blind-s-plus-horizontal-aluminium-35-mm-dot-uk-70x150-cm?from=product_owner&product_owner=normal_seller'),
(143,0,9,'classic-1','classic-1','classic/classic-2-20.JPG','classic/classic-1-50.jpg','warna_new/veronastone-57.jpg',0,657800,NULL,'Pintu ABS','1000x1000','WHITE',NULL,NULL),
(144,0,9,'classic-1','classic-1',NULL,'classic/classic-1-50.jpg','warna_new/10.jpg',0,657800,NULL,'Pintu ABS','1000x1000','BLACK',NULL,NULL),
(145,0,9,'classic-1','classic-1','','classic/classic-1-50.jpg','warna_new/20.jpg',0,657800,NULL,'Pintu ABS','1000x1000','BROWN',NULL,NULL),
(146,0,9,'classic-1','classic-1',NULL,'classic/classic-1-50.jpg','warna_new/59.jpg',NULL,NULL,NULL,NULL,'1000x1000','GRAY',NULL,NULL),
(147,0,9,'classic-1','classic-1',NULL,'classic/classic-1-50.jpg','warna_new/27.jpg',0,NULL,NULL,'Pintu ABS','1000x1000','YELLOW',NULL,NULL),
(148,0,9,'classic-1','classic-1',NULL,'classic/classic-1-50.jpg','warna_new/80.jpg',NULL,NULL,NULL,NULL,'1000x1000','BROWN 2',NULL,NULL),
(149,0,9,'artdoor-c1-30','artdoor-c1-30','artdoor/artdoor-c1-30.jpg','artdoor/artdoor-c1-30.jpg','warna_new/59.jpg',NULL,NULL,NULL,NULL,'1000x1000','GRAY',NULL,NULL),
(150,0,9,'artdoor-c1-30','artdoor-c1-30',NULL,'artdoor/artdoor-c1-30.jpg','warna_new/20.jpg',NULL,NULL,NULL,NULL,'1000x1000','BROWN',NULL,NULL),
(151,0,9,'artdoor-c1-30','artdoor-c1-30',NULL,'artdoor/artdoor-c1-30.jpg','warna_new/27.jpg',NULL,NULL,NULL,NULL,'1000x1000','YELLOW',NULL,NULL),
(152,0,10,'grande-pga-1090','grande-1','upvc/felice_upvc/grande-pga-1090.jpg','upvc/felice_upvc/grande-pga-1090.jpg','warna_new/50.jpg',NULL,NULL,NULL,'Pintu Upvc','1000x1000','WHITE',NULL,NULL),
(153,0,10,'premium-p2-70','premium-1','upvc/sashdoor_upvc/premium-p2-70.jpg','upvc/sashdoor_upvc/premium-p2-70.jpg','warna_new/50.jpg',NULL,NULL,NULL,'Pintu Upvc','1000x1000','WHITE',NULL,NULL),
(154,0,9,'artdoor-n2-50','artdoor-n2-50','artdoor/artdoor-n2-50.jpg','artdoor/artdoor-n2-50.jpg','warna_new/50.jpg',NULL,NULL,NULL,NULL,'1000x1000','WHITE',NULL,NULL),
(155,0,9,'artdoor-p3-59','artdoor-p3-59','artdoor/artdoor-p3-59.jpg','artdoor/artdoor-p3-59.jpg','warna_new/59.jpg',NULL,NULL,NULL,NULL,'1000x1000','GRAY',NULL,NULL),
(156,0,9,'artdoor-r7-60','artdoor-r7-60','artdoor/artdoor-r7-60.jpg','artdoor/artdoor-r7-60.jpg','warna_new/60.jpg',NULL,NULL,NULL,NULL,'1000x1000','BROWN',NULL,NULL);

/*Table structure for table `tbl_galeri` */

DROP TABLE IF EXISTS `tbl_galeri`;

CREATE TABLE `tbl_galeri` (
  `galeri_id` int(11) NOT NULL AUTO_INCREMENT,
  `galeri_pengguna_id` int(11) DEFAULT NULL,
  `galeri_judul` varchar(60) DEFAULT NULL,
  `galeri_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `galeri_gambar` varchar(40) DEFAULT NULL,
  `galeri_kategori` varchar(100) DEFAULT NULL,
  `galeri_subkategori` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`galeri_id`) USING BTREE,
  KEY `galeri_album_id` (`galeri_kategori`) USING BTREE,
  KEY `galeri_pengguna_id` (`galeri_pengguna_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=173 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

/*Data for the table `tbl_galeri` */

insert  into `tbl_galeri`(`galeri_id`,`galeri_pengguna_id`,`galeri_judul`,`galeri_tanggal`,`galeri_gambar`,`galeri_kategori`,`galeri_subkategori`) values 
(4,2,'Event Jakarta S-Plus','2020-04-08 09:56:04','ea757575f99288d7bbe9e0066f01b377.jpg','aktifitas','Event Jakarta Maret 2020'),
(5,2,'Penghargaan SMC','2020-04-09 08:48:15','9b6c8ec5bffc9db7e62c96126be59511.jpg','aktifitas','Penghargaan SMC'),
(6,2,'Penghargaan SMC','2020-04-09 08:48:35','71dd5adaa057db31b54429c53a976551.jpg','aktifitas','Penghargaan SMC'),
(7,2,'Penghargaan SMC','2020-04-09 08:48:54','91c70c91dd2e9efd06bbd829ade1a7f9.jpg','aktifitas','Penghargaan SMC'),
(8,2,'Penghargaan SMC','2020-04-09 08:49:07','84bdfb29167a88428a7bccec48369175.jpg','aktifitas','Penghargaan SMC'),
(9,2,'Jendela Swing S-Plus','2020-04-09 08:51:52','8725fc4cf26dc41429891f99fd057b30.jpg','jendela',''),
(10,2,'Jendela Swing S-Plus','2020-04-09 09:34:39','89cc78f82ddec553dd6e5212fd3d64d7.jpg','jendela',''),
(11,2,'Jendela Kombinasi S-Plus','2020-04-09 09:35:27','33149d0e7e35c19c53c8f36e3883e452.jpg','jendela',''),
(12,2,'Pintu Classic ABS S-Plus','2020-04-09 09:36:05','2832c3542670022a7ce7e7ae17a89034.jpg','pintu',''),
(13,2,'Pintu Classic ABS S-Plus','2020-04-09 09:38:01','29fbf0d65bf2c542381e6ca5e4977e0c.jpg','pintu',''),
(14,2,'Pintu Classic ABS S-Plus','2020-04-09 09:49:33','3f25d3a0b841a0d3464c91efd35d3e0b.jpg','pintu',''),
(15,2,'Pintu Classic ABS S-Plus','2020-04-09 09:51:32','f59dc77c36728f7f7054aac4619c7089.jpg','pintu',''),
(16,2,'Pintu Fortebello ABS S-Plus','2020-04-09 09:57:01','9e67c2b25e1e6cce69f27834f479aabe.jpg','pintu',''),
(17,2,'Pintu Fortebello ABS S-Plus','2020-04-09 09:58:18','7475fff49806492e044c59f319555695.jpg','pintu',''),
(18,2,'Pintu Namo Membrane','2020-04-09 09:59:38','5bf428f74472aff692fba1e3f40cf537.jpg','namo',''),
(19,2,'Pintu Premium Deco ABS S-Plus','2020-04-09 10:02:37','89917d6919bc9a2837e433ebd4514f74.jpg','pintu',''),
(20,2,'Pintu Premium ABS S-Plus','2020-04-09 10:02:59','548a6d2f264f7774cc994f7ae76d1453.jpg','pintu',''),
(21,2,'Pintu Premium ABS S-Plus','2020-04-09 10:03:33','039ddd5ed973f9c0baa915e996f39d46.jpg','pintu',''),
(22,2,'Pintu Classic ABS S-Plus','2020-04-09 10:03:59','50b4f7997e8eb2f579e8f7aab59fab9f.jpg','pintu',''),
(23,2,'Pintu Premium ABS S-Plus','2020-04-09 10:04:28','bbce8fbe64ad81e716e64b29ea429fe5.jpg','pintu',''),
(24,2,'Pintu Premium ABS S-Plus','2020-04-09 10:04:52','f2f03a9eba688516aa68084cd4a46854.jpg','pintu',''),
(25,2,'Pintu Premium ABS S-Plus','2020-04-09 10:05:04','f269a0b57a89690beb52b4f0e4b2c6fc.jpg','pintu',''),
(26,2,'Pintu Fortebello S-Plus','2020-04-09 10:05:23','9a44d35bc413f23ee91cc0c4cd84dc53.jpg','pintu',''),
(27,2,'Pintu Premium ABS S-Plus','2020-04-09 10:09:27','661174206696e4d66979689950f4f383.jpg','pintu',''),
(28,2,'Pintu Classic ABS S-Plus','2020-04-09 10:10:08','f1b0bacc741573720aa76f5a725cbd92.jpg','pintu',''),
(29,2,'Plafon Polos uPVC S-Plus','2020-04-09 10:13:41','f153dae0ed4eeba9f6e3ecb47e8c1933.jpg','plafon',''),
(30,2,'Plafon Polos uPVC S-Plus','2020-04-09 10:14:19','c94597836b6426c0570066d6972d28c7.jpg','plafon',''),
(31,2,'Plafon Polos uPVC S-Plus','2020-04-09 10:15:15','1078234064c09a0ec22fc75ae751694c.jpg','plafon',''),
(32,2,'Plafon Laminate uPVC S-Plus','2020-04-09 10:15:43','b0d152982f4b5258703ea65f08bfe257.jpg','plafon',''),
(33,2,'Plafon Laminate uPVC S-Plus','2020-04-09 10:16:25','657e2f04bad6daf142a3acde644b230a.jpg','plafon',''),
(34,2,'Plafon Laminate uPVC S-Plus','2020-04-09 10:17:08','4549a54212135f9fe1474cfa84ff1b5f.jpg','plafon',''),
(35,2,'Plafon Deco uPVC S-Plus','2020-04-09 10:18:00','db49c3763e9083a55f598f6aa91aec6f.jpg','plafon',''),
(36,2,'Plafon Laminate uPVC S-Plus','2020-04-09 10:18:32','b500b96a60f44f16150bb8895c3bc0af.jpg','plafon',''),
(37,2,'Plafon Laminate uPVC S-Plus','2020-04-09 10:19:03','83251c83cdd416b537c8b372a42ce933.jpg','plafon',''),
(38,2,'WPC Deck S-Plus','2020-04-09 10:21:25','ac1959f35fe5f812c8892f8cced31c49.jpg','wpc',''),
(39,2,'WPC Deck S-Plus','2020-04-09 10:21:41','6e5cf4e436f0bb1eb363b1e4bf25e52e.jpg','wpc',''),
(40,2,'WPC Wall S-Plus','2020-04-09 10:22:03','9b853f2e04f2e24058e320eb1720dc6a.jpg','wpc',''),
(41,2,'WPC Wall S-Plus','2020-04-09 10:22:21','60606c98463f7c8bbb78fa0325bf33b4.jpg','wpc',''),
(42,2,'WPC Wall S-Plus','2020-04-09 10:22:37','2ea92cfd7f0abf77ea658eb5424e5330.jpg','wpc',''),
(43,2,'Roller Blind S-Plus','2020-04-09 10:25:23','c2e9e4d9efe4cffde747bd69aabadae6.jpg','shade',''),
(44,2,'Roller Blind S-Plus','2020-04-09 10:25:39','a2bfa360d7bc592b2663ced8e987b026.jpg','shade',''),
(45,2,'Roller Blind S-Plus','2020-04-09 10:25:53','664b6936b80dbb99c4a84389a3a9ebf0.jpg','shade',''),
(46,2,'Roller Blind S-Plus','2020-04-09 10:26:12','8ae262274d9957a3c7922c539f60e670.jpg','shade',''),
(47,2,'Roller Blind S-Plus','2020-04-09 10:26:28','2a90830e0b9ead5f7b096419b46623d8.jpg','shade',''),
(48,2,'Roller Blind S-Plus','2020-04-09 10:26:39','93696cb4e7bf0de6948c5516cf9b7c40.jpg','shade',''),
(49,2,'Roller Blind S-Plus','2020-04-09 10:26:54','6f100ba97d493fa8fa26a46e11263ed1.jpg','shade',''),
(50,2,'Roller Blind S-Plus','2020-04-09 10:27:08','5fd6f296077c67668df6e6c5da7f47e7.jpg','shade',''),
(51,2,'Roller Blind S-Plus','2020-04-09 10:27:24','2b5f8f64f98e07c00588b15b6c0f3aa0.jpg','shade',''),
(52,2,'Solid Surface S-Plus','2020-04-09 10:29:09','d36877ad369d7c6005c09bb94bfbf9f2.jpg','solid',''),
(53,2,'Solid Surface S-Plus','2020-04-09 10:29:29','433790a81ec2868e067aebe109cb3e48.jpg','solid',''),
(54,2,'Solid Surface S-Plus','2020-04-09 10:30:07','6de52fae0eecb8cba647565626ee3412.jpg','solid',''),
(55,2,'Solid Surface S-Plus','2020-04-09 10:30:23','bebaead77d0da55fb50a7fbdfc6cc4fe.jpg','solid',''),
(56,2,'Solid Surface S-Plus','2020-04-09 10:30:38','dcf8951e4f3d6cdd9cdae98e6cf9dee6.jpg','solid',''),
(57,2,'Solid Surface S-Plus','2020-04-09 10:30:49','60e2b17386a3056d0b06eae9909e4fb9.jpg','solid',''),
(58,2,'Kitchen Set S-Plus','2020-04-09 10:31:57','af529417bbabbd9a4b943a6e263cf9d0.jpg','kitchen',''),
(59,2,'Kitchen Set S-Plus','2020-04-09 10:32:15','e6010b0c80e7b37a3953570481b5451e.jpg','kitchen',''),
(60,2,'Kitchen Set S-Plus','2020-04-09 10:32:32','c08fba19fb1c1ef8b4644598c5c3bd73.jpg','kitchen',''),
(61,2,'Kitchen Set S-Plus','2020-04-09 10:32:46','24cdbcaecea94a7ae43207882cdf326c.jpg','kitchen',''),
(62,2,'Kitchen Set S-Plus','2020-04-09 10:33:03','55bad0ac5c7268439f0dda8528fdeddf.jpg','kitchen',''),
(63,2,'Kitchen Set S-Plus','2020-04-09 10:33:17','d908ade36a5da626b7f3168c5dfacbe1.jpg','kitchen',''),
(64,2,'Kitchen Set S-Plus','2020-04-09 10:33:28','8ef8da9f5db15bb9d914cb00ace212b7.jpg','kitchen',''),
(65,2,'Kitchen Set S-Plus','2020-04-09 10:33:40','33e4c6a1774e34295c93a04c3d89eccc.jpg','kitchen',''),
(66,2,'Kitchen Set S-Plus','2020-04-09 10:33:53','a81e6b8c7fb2bb312f2f89e470b4f9c9.jpg','kitchen',''),
(67,2,'Kitchen Set S-Plus','2020-04-09 10:34:04','2790487c4a53a56ce341141a45cfd31a.jpg','kitchen',''),
(68,2,'Kitchen Set S-Plus','2020-04-09 10:34:17','dbc6731e0fd6abd8cd56a992858a511d.jpg','kitchen',''),
(69,2,'Kitchen Set S-Plus','2020-04-09 10:34:33','03cfedfcfa35f5b246c8ef272db34f02.jpg','kitchen',''),
(83,2,'Event Jakarta','2020-04-09 13:38:59','c4df171af38f08f47e17411b99ed5643.jpg','aktifitas','Event Indobuildtech Jakarta 2016'),
(84,2,'Event Jakarta','2020-04-09 13:48:42','b65d054bbe5aeb48dca6f94b7ae8013a.jpg','aktifitas','Event Indobuildtech Jakarta 2016'),
(85,2,'Event Jakarta','2020-04-09 13:48:55','9e78dd1742207b0ea95c7e2a56cdd36a.jpg','aktifitas','Event Indobuildtech Jakarta 2016'),
(86,2,'Event Jakarta','2020-04-09 13:49:09','b3ce1e2eb6d48544650778a2440f9966.jpg','aktifitas','Event Indobuildtech Jakarta 2016'),
(87,2,'Event Jakarta','2020-04-09 13:49:23','71c6447610cab7c26009ecf3a19b4634.jpg','aktifitas','Event Indobuildtech Jakarta 2016'),
(90,2,'Event Surabaya','2020-04-09 13:54:14','de70b161ab58122de85de8ad0a4c0eb0.jpg','aktifitas','Event Indobuildtech Surabaya 2016'),
(91,2,'Event Surabaya','2020-04-09 13:54:34','434b9f35038205cd07f5eddc3a7b75d9.jpg','aktifitas','Event Indobuildtech Surabaya 2016'),
(93,2,'Event Surabaya','2020-04-09 14:10:27','6bac98c683f2d08f84868e6416dc7f96.jpg','aktifitas','Event Indobuildtech Surabaya 2016'),
(94,2,'Event Surabaya','2020-04-09 14:10:55','aaf82cc90783eb7d2de4d73e6c4c92b5.jpg','aktifitas','Event Indobuildtech Surabaya 2016'),
(95,2,'Event Surabaya','2020-04-09 14:11:13','d1e8b90d2d98a6c4d5aa65bacd5300b0.jpg','aktifitas','Event Indobuildtech Surabaya 2016'),
(96,2,'Event Surabaya','2020-04-09 14:11:27','450f8e22957b5accfe5930b4134da904.jpg','aktifitas','Event Indobuildtech Surabaya 2016'),
(97,2,'Event Surabaya','2020-04-09 14:11:40','43bb4d3d86b12c51eb765bfa09cfc6aa.jpg','aktifitas','Event Indobuildtech Surabaya 2016'),
(98,2,'Event Surabaya','2020-04-09 14:11:53','32a76cf379651d5bf90f6ea33d6ed145.jpg','aktifitas','Event Indobuildtech Surabaya 2016'),
(99,2,'Event Surabaya','2020-04-09 14:12:08','4ebf9fd91b4b3ff1c96b982299e82e50.jpg','aktifitas','Event Indobuildtech Surabaya 2016'),
(100,2,'Event Surabaya','2020-04-09 14:12:20','fa28cbcc46701a9b4002f872be578ade.jpg','aktifitas','Event Indobuildtech Surabaya 2016'),
(108,2,'Gathering S-Plus','2020-04-09 14:19:22','6c39f8c9143d506883e41dad3f9f3125.jpg','aktifitas','Gathering'),
(109,2,'Gathering S-Plus','2020-04-09 14:19:57','3276fa1a7d58c56c97d1fc9c367068b8.jpg','aktifitas','Gathering'),
(110,2,'Gathering S-Plus','2020-04-09 14:20:11','bc54fa87b1c3d9ed37fcd8bc741233e2.jpg','aktifitas','Gathering'),
(111,2,'Gathering S-Plus','2020-04-09 14:20:26','e1a3d0ca5ce5609cfbf5f9ac1a9e3d92.jpg','aktifitas','Gathering'),
(112,2,'Gathering S-Plus','2020-04-09 14:20:45','dfec4981d36103411fcd4f343a9f4363.jpg','aktifitas','Gathering'),
(113,2,'Gathering S-Plus','2020-04-09 14:21:03','484406c6ffe3239068573c36a836206f.jpg','aktifitas','Gathering'),
(114,2,'Gathering S-Plus','2020-04-09 14:21:15','a8c6496dd4a87afe550cdf4fa4a0c9f6.jpg','aktifitas','Gathering'),
(115,2,'Gathering S-Plus','2020-04-09 14:21:27','e6f5fce411942fb454486d99c99bc005.jpg','aktifitas','Gathering'),
(116,2,'Jogja Expo','2020-04-09 14:22:11','209e87a632b850235db50931c6e906eb.jpg','aktifitas','Jogja Expo 2016'),
(117,2,'Jogja Expo','2020-04-09 14:22:30','d5a9e7917bb664b2896da991c77a9b8c.jpg','aktifitas','Jogja Expo 2016'),
(118,2,'Jogja Expo','2020-04-09 14:22:42','cd474f1bacd583f504972b671a260e3c.jpg','aktifitas','Jogja Expo 2016'),
(119,2,'Jogja Expo','2020-04-09 14:22:55','128688ed50fc0a94327d9d8221e91592.jpg','aktifitas','Jogja Expo 2016'),
(120,2,'Jogja Expo','2020-04-09 14:23:09','5fe5e8e2a3b4f262aa801fdfb5d71d01.jpg','aktifitas','Jogja Expo 2016'),
(121,2,'Jogja Expo','2020-04-09 14:23:22','87ae44c757b2a47d49c0cd6e3b3a2b76.jpg','aktifitas','Jogja Expo 2016'),
(122,2,'Jogja Expo','2020-04-09 14:23:34','b92a90df308645813675cf3931ca356d.jpg','aktifitas','Jogja Expo 2016'),
(123,2,'Jogja Expo','2020-04-09 14:23:46','055484045f22662c7628cf4c0bb0fc20.jpg','aktifitas','Jogja Expo 2016'),
(124,2,'Jogja Expo','2020-04-09 14:24:01','e38ee6d97e24ec30849e93fad70bb01e.jpg','aktifitas','Jogja Expo 2016'),
(125,2,'Jogja Expo','2020-04-09 14:24:11','efc11e13e1810f359bd243fa9c7a5aa5.jpg','aktifitas','Jogja Expo 2016'),
(126,2,'Jogja Expo','2020-04-09 14:24:23','af2fef9d83645de2ca439f47d61e92bb.jpg','aktifitas','Jogja Expo 2016'),
(127,2,'Jogja Expo','2020-04-09 14:24:35','55cab74f0ea497b1f40ee8043887be7f.jpg','aktifitas','Jogja Expo 2016'),
(128,2,'Jendela uPVC','2020-04-09 14:25:55','394a325898cfda54ad791b1cb192a6f0.jpg','jendela',''),
(129,2,'Jendela uPVC','2020-04-09 14:26:06','671fc55fc84bea2003c3b33d608ad767.jpg','jendela',''),
(130,2,'Jendela uPVC','2020-04-09 14:26:30','a20621db9c30a0c909bf6f00a4ff6e4a.jpg','jendela',''),
(131,2,'Jendela uPVC','2020-04-09 14:26:43','023b9ebca8c2231b0e4e958cf2b1c3c0.jpeg','jendela',''),
(132,2,'Jendela uPVC','2020-04-09 14:26:56','899b9ed17cb54b5013f431b551a7b82b.jpg','jendela',''),
(133,2,'Jendela uPVC','2020-04-09 14:27:14','71b1846d57eab354593606dba5f3d3a7.jpg','jendela',''),
(134,2,'Jendela uPVC','2020-04-09 14:27:30','0e6e80bc7c11f0cb7473332cf6e297c9.jpg','jendela',''),
(135,2,'Jendela uPVC','2020-04-09 14:27:51','65470993887c20ec7950b00c81054f70.jpg','jendela',''),
(136,2,'Jendela uPVC','2020-04-09 14:28:03','5d6de83cab9b7b2cfcee5656ab8dd66c.jpg','jendela',''),
(137,2,'Jendela uPVC','2020-04-09 14:28:23','4d9bf7badbc8eb7f037c0e4fad57f947.jpg','jendela',''),
(138,2,'Jendela uPVC','2020-04-09 14:30:40','476941858e9ae49864ed0a06f7e79764.jpg','jendela',''),
(139,2,'Jendela uPVC','2020-04-09 14:31:30','14f0f0349064b43b532188b64a96fa20.jpg','jendela',''),
(140,2,'Jendela uPVC','2020-04-09 14:31:58','092ba350ed728c80a9a52e05cd9b9f88.jpg','jendela',''),
(141,2,'Jendela uPVC','2020-04-09 14:32:26','0e9c0e6ab3ccc8ef77b11c707ef5b419.jpg','jendela',''),
(142,2,'Jendela uPVC','2020-04-09 14:33:10','eb5ede5cf25393f920550e0a4cd1040b.jpg','jendela',''),
(144,2,'Jendela uPVC','2020-04-09 14:37:11','70e3d6ef223565774496d8bf4f22204f.jpg','jendela',''),
(146,2,'DPRD PEMALANG','2021-11-12 11:19:14','9999118f2daca6dcc2ba63d4ae753016.jpg','project','GEDUNG DPRD PEMALANG'),
(149,2,'DPRD PEMALANG','2021-11-12 12:36:37','952209fdecc205a2fca13fde31320ad1.jpg','project','GEDUNG DPRD PEMALANG'),
(150,2,'DPRD PEMALANG','2021-11-12 13:06:43','1b02ee6d9f174c7df816a15a2d611f2f.jpg','project','GEDUNG DPRD PEMALANG'),
(151,2,'C HOTEL','2021-11-12 13:22:30','4626c4ba45cba002781e35514c4841c8.jpg','project','HOTEL C CIREBON'),
(152,2,'C HOTEL','2021-11-12 13:22:57','f7b04e3f3b411f675e6f6320e76b5267.jpg','project','HOTEL C CIREBON'),
(153,2,'C HOTEL','2021-11-12 13:23:16','ec56802c0c8b3e064a4cdf1fbfb80d7e.jpg','project','HOTEL C CIREBON'),
(163,2,'kosan yogya','2021-11-12 13:52:44','1c4decd0972235b477cd7b9e08305616.jpg','project','PROYEK KOSAN YOGYA'),
(164,2,'kosan yogya','2021-11-12 13:53:57','8b44df1d14a51535e0a5a769c0be54ef.jpg','project','PROYEK KOSAN YOGYA'),
(165,2,'kosan yogya','2021-11-12 13:54:14','70ecd6e89d8d3d89844e52af9a31337b.jpg','project','PROYEK KOSAN YOGYA'),
(166,2,'kosan yogya','2021-11-12 13:54:35','46e84c0efed07e44219aecda1a3ae488.jpg','project','PROYEK KOSAN YOGYA'),
(167,2,'kosan yogya','2021-11-12 13:54:59','ab3c1aae7787c19ab8676c0508039896.jpg','project','PROYEK KOSAN YOGYA'),
(168,2,'rumah','2021-11-12 14:00:53','23346690caca9670bf72945387ced53b.jpg','project','RUMAH PRIBADI'),
(169,2,'rumah','2021-11-12 14:02:23','81351f5cbd46fe9a5411b004c0d1fd78.jpg','project','RUMAH PRIBADI'),
(170,2,'abs rumah tinggal','2021-11-12 14:05:14','011eb82742c660e8c1b5142319421fcc.jpg','project','ABS RUMAH TINGGAL'),
(171,2,'abs rumah tinggal','2021-11-12 14:07:05','d328ab675611c5b09f0e16157a6ec154.jpg','project','ABS RUMAH TINGGAL'),
(172,2,'abs rumah tinggal','2021-11-12 14:07:25','5f83a59a4b7ad57f173850281be90074.jpg','project','ABS RUMAH TINGGAL');

/*Table structure for table `tbl_inbox` */

DROP TABLE IF EXISTS `tbl_inbox`;

CREATE TABLE `tbl_inbox` (
  `inbox_id` int(11) NOT NULL AUTO_INCREMENT,
  `inbox_nama` varchar(40) DEFAULT NULL,
  `inbox_email` varchar(60) DEFAULT NULL,
  `inbox_kontak` varchar(20) DEFAULT NULL,
  `inbox_pesan` text DEFAULT NULL,
  `inbox_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `inbox_status` int(11) DEFAULT 1 COMMENT '1=Belum dilihat, 0=Telah dilihat',
  PRIMARY KEY (`inbox_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

/*Data for the table `tbl_inbox` */

/*Table structure for table `tbl_kategori` */

DROP TABLE IF EXISTS `tbl_kategori`;

CREATE TABLE `tbl_kategori` (
  `kategori_id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_nama` varchar(50) DEFAULT NULL,
  `kategori_slug` varchar(100) DEFAULT NULL,
  `kategori_deskripsi` text NOT NULL,
  `kategori_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `kategori_pengguna_id` int(11) DEFAULT NULL,
  `kategori_author` varchar(60) DEFAULT NULL,
  `kategori_count` int(11) DEFAULT 0,
  `kategori_cover` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`kategori_id`) USING BTREE,
  KEY `album_pengguna_id` (`kategori_pengguna_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

/*Data for the table `tbl_kategori` */

insert  into `tbl_kategori`(`kategori_id`,`kategori_nama`,`kategori_slug`,`kategori_deskripsi`,`kategori_tanggal`,`kategori_pengguna_id`,`kategori_author`,`kategori_count`,`kategori_cover`) values 
(1,'PINTU','pintu','pintu','2022-04-20 14:06:01',22,'itakumala',0,'9749528f02fde3c71df3b56ab36d13bc.jpg'),
(2,'JENDELA','jendela','jendela','2022-04-07 08:52:33',2,'itakumala',0,'00eecdeb56f347c1169278c229396dfc.jpg'),
(3,'INTERIOR_MATERIAL','interior_material','interior_material','2022-04-07 08:54:11',3,'itakumala',0,'6ec64bb4901b2f2b3f0fddb73a10bbe3.jpg'),
(4,'EXTERIOR_MATERIAL','exterior_material','exterior_material','2022-04-07 08:54:52',4,'itakumala',0,'bccb1115545c589dc3702824abfa0658.jpg'),
(5,'MASKER','masker','masker','2022-04-07 08:55:10',5,'itakumala',0,'b3e47cb8e7f4268b94ba80c4622c7897.jpg'),
(6,'AKSESORIS','aksesoris','aksesoris','2022-06-14 08:34:38',22,'itakumala',0,'b7556b1a9a1c7d2925718369b16dd752.jpg');

/*Table structure for table `tbl_kategoriproduk` */

DROP TABLE IF EXISTS `tbl_kategoriproduk`;

CREATE TABLE `tbl_kategoriproduk` (
  `id_kategori_produk` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(225) NOT NULL,
  `kategori_seo` varchar(225) NOT NULL,
  PRIMARY KEY (`id_kategori_produk`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_kategoriproduk` */

insert  into `tbl_kategoriproduk`(`id_kategori_produk`,`nama_kategori`,`kategori_seo`) values 
(1,'PINTU','pintu'),
(2,'JENDELA','jendela'),
(3,'INLIFE','inlife'),
(4,'OUTLIFE','outlife'),
(5,'MASKER','masker'),
(6,'AKSESORIS','aksesoris');

/*Table structure for table `tbl_kelas` */

DROP TABLE IF EXISTS `tbl_kelas`;

CREATE TABLE `tbl_kelas` (
  `kelas_id` int(11) NOT NULL AUTO_INCREMENT,
  `produk_subkategori` int(11) NOT NULL,
  `kelas_nama` varchar(50) DEFAULT NULL,
  `kelas_deskripsi` text NOT NULL,
  `kelas_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `kelas_pengguna_id` int(11) DEFAULT NULL,
  `kelas_author` varchar(60) DEFAULT NULL,
  `kelas_count` int(11) DEFAULT 0,
  `kelas_cover` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`kelas_id`),
  KEY `album_pengguna_id` (`kelas_pengguna_id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

/*Data for the table `tbl_kelas` */

insert  into `tbl_kelas`(`kelas_id`,`produk_subkategori`,`kelas_nama`,`kelas_deskripsi`,`kelas_tanggal`,`kelas_pengguna_id`,`kelas_author`,`kelas_count`,`kelas_cover`) values 
(1,1,'classic','classic','2022-06-14 14:21:29',22,'itakumala',0,'2e479c958409d29e1283a3e0c7d3c096.jpg'),
(2,1,'Fortebello','Fortebello','2022-06-14 14:21:48',22,'itakumala',0,'c23bf4cee6b8fa5d4736cf5d162a24f5.jpg'),
(3,1,'Premium','Premium General','2022-06-14 14:22:38',22,'itakumala',0,'f374a67c388b7a2d83ca8b5ceb02f44a.jpg'),
(4,1,'Premium Deco','Premium Deco','2022-06-14 14:22:38',22,'itakumala',0,'021fbfece1cfac7043686634062a4bcc.jpg'),
(5,1,'Grande','Grande','2022-06-14 14:22:38',22,'itakumala',0,'24852161b6dc9c0ad245973d40f42931.jpg'),
(6,1,'Art Door','Art Door','2022-06-14 14:22:59',22,'itakumala',0,'87468664f1db659376cf49195da8b5ea.jpg'),
(7,1,'Exterior Door','Exterior Door','2022-06-14 14:23:20',22,'itakumala',0,'6801e0e969072ee5e2e688c9769dbbd2.jpg'),
(8,2,'Felice','Felice','2022-06-15 11:03:38',22,'itakumala',0,'757a89d58a897bfa53636d1d28082fd0.jpg'),
(9,2,'Sash Door','Sash Door','2022-06-15 11:04:07',22,'itakumala',0,'b6911f3b36c8ac3cd82e7cd7a89828d4.jpg'),
(10,3,'Laminate Door','Laminate Door','2022-06-15 11:04:53',22,'itakumala',0,'2177e65c81d33575f8779f29a7ceec2b.jpg'),
(11,3,'ECO Door','ECO Door','2022-06-15 11:05:15',22,'itakumala',0,'f17f41b6c3164b92870cbe420913ce4c.jpg'),
(12,3,'Veneer Solid Door','Veneer Solid Door','2022-06-15 11:05:33',22,'itakumala',0,'064bd16fde1ed2ca206c7489a96c2924.jpg'),
(13,3,'Timber Joint Door','Timber Joint Door','2022-06-15 11:05:56',22,'itakumala',0,'b204c5d74a48988e3dae991bc24eefbb.jpg'),
(14,3,'ART Door','ART Door','2022-06-15 11:06:15',22,'itakumala',0,'958ec7f6050153724f1af5839c57670e.jpg'),
(15,4,'jendela_upvc','jendela_upvc','2022-06-15 11:07:29',22,'itakumala',0,'e284ec017b309b70759c8fefb34e594a.jpg'),
(16,5,'Plafon Polos','Plafon Polos','2022-06-15 11:08:33',22,'itakumala',0,'0b29e0e460d3a4379cbda172f32ef754.jpg'),
(17,5,'Plafon Laminate','Plafon Laminate','2022-06-15 11:09:17',22,'itakumala',0,'cdee8cf7ce6522c0dbb5120f83fb5e21.jpg'),
(18,5,'Plafon Deco','Plafon Deco','2022-06-15 11:10:04',22,'itakumala',0,'721b5073a5e321a8ed1cc348c04e5f3c.jpg'),
(19,6,'Combi Roll Screen','Combi Roll Screen','2022-06-15 11:11:09',22,'itakumala',0,'16dee159dc18cac490667b49345ed6ea.jpg'),
(20,6,'Roll Screen','Roll Screen','2022-06-15 11:11:34',22,'itakumala',0,'f03a2ed591de755ac4933a82bc2ee789.jpg'),
(21,6,'Sun Screen','Sun Screen','2022-06-15 11:11:49',22,'itakumala',0,'af915709455ae844cca1057c3edf21b3.jpg'),
(22,6,'Blackout Roll Screen','Blackout Roll Screen','2022-06-15 11:12:14',22,'itakumala',0,'373fb94737304016b084bb67c3f8867a.jpg'),
(23,6,'Vertical Blind','Vertical Blind','2022-06-15 11:12:39',22,'itakumala',0,'13ba22fb25d2ac2b7c30d4d97694c37c.jpg'),
(24,6,'Horizontal Wood','Horizontal Wood','2022-06-15 11:13:28',22,'itakumala',0,'7fb648a6ea22eff4ffe56eef97d8e135.png'),
(25,6,'Horizontal Aluminium','Horizontal Aluminium','2022-06-15 11:13:51',22,'itakumala',0,'cecd8c126b80de8c4cc353451b622f66.JPG'),
(26,6,'Honeycomb','Honeycomb','2022-06-15 11:14:09',22,'itakumala',0,'748e3181ca7ee366d0a174904e5ec074.jpg'),
(27,7,'CHIP','CHIP','2022-06-15 11:14:39',22,'itakumala',0,'0b176d7353361fbc291cf2c7900f7977.jpg'),
(28,7,'DECO','DECO','2022-06-15 11:14:59',22,'itakumala',0,'76d666b20f58c8f0977553b50c291c4d.jpg'),
(29,8,'kitchen set','kitchen set','2022-06-15 11:24:26',22,'itakumala',0,'b48d1fe0be7d4f5beb7812b7c89482ec.jpg'),
(30,9,'pvc form board','pvc form board','2022-06-15 11:24:56',22,'itakumala',0,'fdd9107cd6e82ff51d0ca6d6ff736a65.jpg'),
(31,10,'Vinyl Flooring','Vinyl Flooring','2022-06-15 11:25:24',22,'itakumala',0,'c7e6f9ee3bbdf860b5840ef9af8e32cb.jpg'),
(32,10,'Woven Vinyl Flooring','Woven Vinyl Flooring','2022-06-15 11:25:46',22,'itakumala',0,'bd6e505b148e26a829ea0986f2e5e14c.jpg'),
(33,11,'ambalan','ambalan','2022-06-15 11:26:15',22,'itakumala',0,'f0fddaf4deed6072f244b290a7e52d5b.jpg'),
(34,12,'Deck Tile','Deck Tile','2022-06-15 11:26:50',22,'itakumala',0,'22562e9948489cb33493fd043c127567.jpg'),
(35,12,'Wall Partition','Wall Partition','2022-06-15 11:27:09',22,'itakumala',0,'65446ca9c50d77f50e85c097f6caf70b.jpg'),
(36,13,'Parasol','Parasol','2022-06-15 11:27:35',22,'itakumala',0,'b93aebb6de9ab2df6587c10d9d1609d5.jpg'),
(37,14,'masker dewasa','masker dewasa','2022-06-15 11:28:08',22,'itakumala',0,'e69470028e5143bf22ae50ad83fe4206.jpg'),
(38,15,'masker kids','masker kids','2022-06-15 11:28:25',22,'itakumala',0,'76885fe94529940ced5e9950e35f83ab.jpg'),
(39,16,'akasesoris pintu','akasesoris pintu','2022-06-15 11:29:47',22,'itakumala',0,'919b6206b0ac5e39d2e891d980d9b570.jpg'),
(40,17,'aksesoris jendela','aksesoris jendela','2022-06-15 11:30:15',22,'itakumala',0,'2efc509398b67782841a3f0c7c210ee7.jpg'),
(41,18,'aksesoris kitchen set','aksesoris kitchen set','2022-06-15 11:30:39',22,'itakumala',0,'f3f22cee99ef037fb0c268ae141d23c1.jpg'),
(42,19,'aksesoris automatic','aksesoris automatic','2022-06-15 11:31:04',22,'itakumala',0,'0f00f49f5aa176b84d27881b6ade8300.jpg'),
(43,20,'acc lainya','acc lainya','2022-06-15 11:31:30',22,'itakumala',0,'298590049c205001e614c847c4b6246a.png'),
(50,0,NULL,'',NULL,NULL,NULL,NULL,NULL),
(51,0,NULL,'',NULL,NULL,NULL,NULL,NULL);

/*Table structure for table `tbl_komentar` */

DROP TABLE IF EXISTS `tbl_komentar`;

CREATE TABLE `tbl_komentar` (
  `komentar_id` int(11) NOT NULL AUTO_INCREMENT,
  `komentar_nama` varchar(30) DEFAULT NULL,
  `komentar_email` varchar(50) DEFAULT NULL,
  `komentar_web` varchar(100) DEFAULT NULL,
  `komentar_isi` varchar(120) DEFAULT NULL,
  `komentar_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `komentar_status` int(2) DEFAULT 0,
  `komentar_tulisan_id` int(11) DEFAULT NULL,
  `komentar_parent` int(11) DEFAULT 0,
  PRIMARY KEY (`komentar_id`) USING BTREE,
  KEY `komentar_tulisan_id` (`komentar_tulisan_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

/*Data for the table `tbl_komentar` */

/*Table structure for table `tbl_log_aktivitas` */

DROP TABLE IF EXISTS `tbl_log_aktivitas`;

CREATE TABLE `tbl_log_aktivitas` (
  `log_id` int(11) NOT NULL AUTO_INCREMENT,
  `log_nama` text DEFAULT NULL,
  `log_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `log_ip` varchar(20) DEFAULT NULL,
  `log_pengguna_id` int(11) DEFAULT NULL,
  `log_icon` blob DEFAULT NULL,
  `log_jenis_icon` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`log_id`) USING BTREE,
  KEY `log_pengguna_id` (`log_pengguna_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

/*Data for the table `tbl_log_aktivitas` */

/*Table structure for table `tbl_pelanggan` */

DROP TABLE IF EXISTS `tbl_pelanggan`;

CREATE TABLE `tbl_pelanggan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `session_id` varchar(100) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `telepon` varchar(15) DEFAULT NULL,
  `handphone` varchar(15) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `kecamatan` varchar(100) DEFAULT NULL,
  `kota` varchar(100) DEFAULT NULL,
  `provinsi` varchar(100) DEFAULT NULL,
  `kodepos` varchar(6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_pelanggan` */

insert  into `tbl_pelanggan`(`id`,`session_id`,`nama`,`email`,`telepon`,`handphone`,`alamat`,`kecamatan`,`kota`,`provinsi`,`kodepos`) values 
(45,'22745457468250657','coroterbang','coroterbang@M','089XXXXXXX','089XXXXXXX','JL.ANDIR','Andir','Kota Bandung','Jawa Barat','45193'),
(43,'22745457468250657','sw','sw@gsw.com','089xxxxxx','089xxxxxx','anjas','Arjasari','Kabupaten Bandung','Jawa Barat','3421'),
(44,'22745457468250657','tesa','tesa@bb.com','083xxxxxx','083xxxxxx','kejaksan','Kejaksan','Kota Cirebon','Jawa Barat','45192'),
(24,'22745457468250657','gandi','aruldimyati96@gmail.com','08xxxxxxxxxx','08xxxxxxxxxx','jl.Bengkulu','Gading Cempaka','Kota Bengkulu','Bengkulu','45123');

/*Table structure for table `tbl_pembelian` */

DROP TABLE IF EXISTS `tbl_pembelian`;

CREATE TABLE `tbl_pembelian` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pengguna_id` int(11) DEFAULT NULL,
  `pelanggan_id` int(11) DEFAULT NULL,
  `session_id` varchar(100) DEFAULT NULL,
  `faktur` varchar(100) DEFAULT NULL,
  `nama_produk` varchar(100) DEFAULT NULL,
  `tipe_produk` varchar(100) DEFAULT NULL,
  `harga_produk_meter` decimal(20,0) DEFAULT NULL,
  `lebar_produk` decimal(10,0) DEFAULT NULL,
  `tinggi_produk` decimal(10,0) DEFAULT NULL,
  `warna_produk` varchar(50) DEFAULT NULL,
  `jumlah_produk` decimal(10,0) DEFAULT NULL,
  `harga_produk` decimal(50,0) DEFAULT NULL,
  `kurir_pengiriman` varchar(20) DEFAULT NULL,
  `layanan_pengiriman` varchar(50) DEFAULT NULL,
  `ongkos_pengiriman` decimal(50,0) DEFAULT NULL,
  `tanggal_pengiriman` date DEFAULT NULL,
  `resi_pengiriman` varchar(40) DEFAULT NULL,
  `catatan_pembelian` text DEFAULT NULL,
  `metode_pembayaran` varchar(50) DEFAULT NULL,
  `diskon` decimal(3,0) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_pembelian` */

insert  into `tbl_pembelian`(`id`,`pengguna_id`,`pelanggan_id`,`session_id`,`faktur`,`nama_produk`,`tipe_produk`,`harga_produk_meter`,`lebar_produk`,`tinggi_produk`,`warna_produk`,`jumlah_produk`,`harga_produk`,`kurir_pengiriman`,`layanan_pengiriman`,`ongkos_pengiriman`,`tanggal_pengiriman`,`resi_pengiriman`,`catatan_pembelian`,`metode_pembayaran`,`diskon`,`status`) values 
(26,24,26,'22745457468250657','SMTT-060622-7437','PINTU','grande-001',10000,1000,1000,'BROWN',1,10000,'Jalur Nugraha Ekakur','OKE',50000,'0000-00-00',NULL,'jl.grogol','BCA',NULL,1),
(25,24,25,'22745457468250657','SMTT-060622-7030 ','AKSESORIS','aksesoris',10000,1000,1000,'',2,20000,'Jalur Nugraha Ekakur','OKE',120000,'0000-00-00',NULL,'jl.doi','BNI',NULL,1),
(23,22,22,'22745457468250657','SMTT-060622-7361','PINTU','classic-002',10000,1000,1000,'BROWN',2,20000,'Jalur Nugraha Ekakur','OKE',50000,'0000-00-00',NULL,'depan gang kosong','BCA',NULL,1),
(24,22,24,'22745457468250657','SMTT-060622-2555','MASKER','masker',10000,1000,1000,'',2,20000,'Citra Van Titipan Ki','ECO',185000,'0000-00-00',NULL,'jl.gedong','BCA',NULL,1),
(22,22,22,'22745457468250657','SMTT-060622-7361','PINTU','classic-001',10000,1000,1000,'BROWN',2,20000,'Jalur Nugraha Ekakur','OKE',50000,'0000-00-00',NULL,'depan gang kosong','BCA',NULL,1),
(41,25,44,'22745457468250657','SMTT-130622-4147','PINTU','artdoor-p3-59',10000,1000,1000,'',1,10000,'Wahana Prestasi Logi','Normal',25000,'0000-00-00',NULL,'kejaksan','BCA',NULL,1),
(40,25,43,'22745457468250657','SMTT-130622-6814','PINTU','artdoor-p3-59',10000,1000,1000,'',1,10000,'Jalur Nugraha Ekakur','OKE',50000,'0000-00-00',NULL,'anjas','BCA',NULL,1),
(42,24,45,'22745457468250657','SMTT-150622-6079','PINTU','classic-001',10000,1000,1000,'BROWN',1,10000,'Wahana Prestasi Logi','Normal',30000,'2022-06-29',NULL,'JL.ANDIR','BCA',NULL,1);

/*Table structure for table `tbl_pengguna` */

DROP TABLE IF EXISTS `tbl_pengguna`;

CREATE TABLE `tbl_pengguna` (
  `pengguna_id` int(11) NOT NULL AUTO_INCREMENT,
  `pelanggan_id` int(11) NOT NULL,
  `pengguna_nama` varchar(50) DEFAULT NULL,
  `pengguna_moto` varchar(100) DEFAULT NULL,
  `pengguna_jenkel` varchar(2) DEFAULT NULL,
  `pengguna_username` varchar(30) DEFAULT NULL,
  `pengguna_password` varchar(35) DEFAULT NULL,
  `pengguna_tentang` text DEFAULT NULL,
  `pengguna_email` varchar(50) DEFAULT NULL,
  `pengguna_nohp` varchar(20) DEFAULT NULL,
  `pengguna_facebook` varchar(35) DEFAULT NULL,
  `pengguna_twitter` varchar(35) DEFAULT NULL,
  `pengguna_linkdin` varchar(35) DEFAULT NULL,
  `pengguna_google_plus` varchar(35) DEFAULT NULL,
  `pengguna_status` int(2) DEFAULT 1,
  `pengguna_level` varchar(3) DEFAULT NULL,
  `pengguna_register` timestamp NULL DEFAULT current_timestamp(),
  `pengguna_photo` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`pengguna_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

/*Data for the table `tbl_pengguna` */

insert  into `tbl_pengguna`(`pengguna_id`,`pelanggan_id`,`pengguna_nama`,`pengguna_moto`,`pengguna_jenkel`,`pengguna_username`,`pengguna_password`,`pengguna_tentang`,`pengguna_email`,`pengguna_nohp`,`pengguna_facebook`,`pengguna_twitter`,`pengguna_linkdin`,`pengguna_google_plus`,`pengguna_status`,`pengguna_level`,`pengguna_register`,`pengguna_photo`) values 
(2,0,'S-Plus Indonesia',NULL,'L','smtechtex@splusindonesia.co.id','e471711af0db2f6c64df4f60573baa8e',NULL,'smtechtex@splusindonesia.co.id','(0231) 8511781',NULL,NULL,NULL,NULL,1,'1','2020-01-13 06:31:34','d540ba14929a5fbc859fcf8004d894fc.png'),
(3,0,'S-Plus Jakarta',NULL,'L','arul','4c9d830f39238c6607b162a92e528759',NULL,'jakarta@splusindonesia.co.id','(021) 62301599',NULL,NULL,NULL,NULL,1,'1','2020-04-07 13:59:55','b8167f3e2c7eca3e873838f066a50057.png'),
(4,0,'IT',NULL,'L','it','0b1dd5fabd221ef63c58c026bce4cf6b',NULL,'it@gmail.com','089235772503',NULL,NULL,NULL,NULL,1,'2','2022-01-13 03:21:25','1d55ed29faf8663cd66fd968cbbae450.png'),
(22,22,'itakumala',NULL,'P','itakumala','62ca9672c3bf3b1357ae0bd56c244be3',NULL,'itakumala@gmail.com','08923577990',NULL,NULL,NULL,NULL,1,'1','2022-04-01 10:29:24','76ddc7ba0ef32bc274b775fdca5d2f60.png'),
(24,24,'gandi',NULL,'L','coro','a83cf5e7e3efb396410e825794c1bff2',NULL,'coro@gmail.com','089235772503',NULL,NULL,NULL,NULL,1,'2','2022-04-20 15:44:03','c8b6acca4131113b6ba17489a8c38aa5.png'),
(25,40,'nawawi',NULL,'L','nawawi','a83cf5e7e3efb396410e825794c1bff2',NULL,'nawawi@gmail.com','089235772503',NULL,NULL,NULL,NULL,1,'2','2022-06-11 08:28:36','f7f035021ff7131a76baf6514a172865.png');

/*Table structure for table `tbl_pengunjung` */

DROP TABLE IF EXISTS `tbl_pengunjung`;

CREATE TABLE `tbl_pengunjung` (
  `pengunjung_id` int(10) NOT NULL AUTO_INCREMENT,
  `pengunjung_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `pengunjung_ip` varchar(40) DEFAULT NULL,
  `pengunjung_perangkat` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`pengunjung_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=124873 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

/*Data for the table `tbl_pengunjung` */

insert  into `tbl_pengunjung`(`pengunjung_id`,`pengunjung_tanggal`,`pengunjung_ip`,`pengunjung_perangkat`) values 
(124759,'2022-01-13 12:32:30','::1','Chrome'),
(124760,'2022-01-13 13:09:56','127.0.0.1','Firefox'),
(124761,'2022-01-14 07:26:22','127.0.0.1','Firefox'),
(124762,'2022-01-14 14:46:51','::1','Chrome'),
(124763,'2022-01-15 07:36:22','::1','Chrome'),
(124764,'2022-01-17 07:27:22','::1','Chrome'),
(124765,'2022-01-18 08:11:41','::1','Chrome'),
(124766,'2022-01-19 08:08:49','::1','Chrome'),
(124767,'2022-01-20 07:53:46','::1','Chrome'),
(124768,'2022-01-21 07:25:02','::1','Chrome'),
(124769,'2022-01-22 07:52:10','::1','Chrome'),
(124770,'2022-01-24 08:14:04','::1','Chrome'),
(124771,'2022-01-25 07:34:17','::1','Chrome'),
(124772,'2022-01-26 07:27:17','::1','Chrome'),
(124773,'2022-01-27 07:35:06','::1','Chrome'),
(124774,'2022-01-28 08:33:11','::1','Chrome'),
(124775,'2022-01-29 07:44:26','::1','Chrome'),
(124776,'2022-01-31 07:50:27','::1','Chrome'),
(124777,'2022-02-02 07:45:43','::1','Chrome'),
(124778,'2022-02-03 08:02:01','::1','Chrome'),
(124779,'2022-02-04 08:02:15','::1','Chrome'),
(124780,'2022-02-19 12:24:30','::1','Chrome'),
(124781,'2022-02-21 07:39:59','::1','Chrome'),
(124782,'2022-02-22 07:39:08','::1','Chrome'),
(124783,'2022-02-23 07:48:12','::1','Chrome'),
(124784,'2022-02-24 07:45:18','::1','Chrome'),
(124785,'2022-02-25 07:41:30','::1','Chrome'),
(124786,'2022-02-26 07:57:21','::1','Chrome'),
(124787,'2022-03-01 08:34:14','::1','Chrome'),
(124788,'2022-03-02 07:24:44','::1','Chrome'),
(124789,'2022-03-04 08:05:38','::1','Chrome'),
(124790,'2022-03-05 07:51:48','::1','Chrome'),
(124791,'2022-03-07 09:02:46','::1','Chrome'),
(124792,'2022-03-08 07:41:00','::1','Chrome'),
(124793,'2022-03-09 07:57:01','::1','Chrome'),
(124794,'2022-03-10 07:51:25','::1','Chrome'),
(124795,'2022-03-11 08:27:23','::1','Chrome'),
(124796,'2022-03-12 08:16:38','::1','Chrome'),
(124797,'2022-03-14 08:02:36','::1','Chrome'),
(124798,'2022-03-15 08:37:07','::1','Chrome'),
(124799,'2022-03-16 07:59:22','::1','Chrome'),
(124800,'2022-03-16 09:21:01','127.0.0.1','Firefox'),
(124801,'2022-03-17 07:45:13','::1','Chrome'),
(124802,'2022-03-18 07:24:45','::1','Chrome'),
(124803,'2022-03-19 07:43:25','::1','Chrome'),
(124804,'2022-03-21 07:35:06','::1','Chrome'),
(124805,'2022-03-22 07:53:34','::1','Chrome'),
(124806,'2022-03-23 08:13:14','::1','Chrome'),
(124807,'2022-03-24 08:03:07','::1','Chrome'),
(124808,'2022-03-25 08:01:31','::1','Chrome'),
(124809,'2022-03-26 07:45:42','::1','Chrome'),
(124810,'2022-03-28 07:46:21','::1','Chrome'),
(124811,'2022-03-29 08:34:28','::1','Chrome'),
(124812,'2022-03-30 08:15:38','::1','Chrome'),
(124813,'2022-04-01 07:27:51','::1','Chrome'),
(124814,'2022-04-02 08:05:11','::1','Chrome'),
(124815,'2022-04-04 08:09:18','::1','Chrome'),
(124816,'2022-04-06 11:21:44','::1','Chrome'),
(124817,'2022-04-07 08:49:04','::1','Chrome'),
(124818,'2022-04-08 07:42:40','::1','Chrome'),
(124819,'2022-04-09 08:11:33','::1','Chrome'),
(124820,'2022-04-11 08:45:33','::1','Chrome'),
(124821,'2022-04-12 08:01:57','::1','Chrome'),
(124822,'2022-04-13 09:18:44','::1','Chrome'),
(124823,'2022-04-14 11:06:03','::1','Chrome'),
(124824,'2022-04-18 08:04:48','::1','Chrome'),
(124825,'2022-04-19 07:57:26','::1','Chrome'),
(124826,'2022-04-20 09:10:32','::1','Chrome'),
(124827,'2022-04-21 07:49:53','::1','Chrome'),
(124828,'2022-04-22 07:35:43','::1','Chrome'),
(124829,'2022-04-22 08:35:58','127.0.0.1','Chrome'),
(124830,'2022-04-23 08:30:51','::1','Chrome'),
(124831,'2022-04-26 08:28:50','::1','Chrome'),
(124832,'2022-04-27 07:32:15','::1','Chrome'),
(124833,'2022-04-28 08:18:16','::1','Chrome'),
(124834,'2022-05-09 07:32:53','::1','Chrome'),
(124835,'2022-05-09 13:44:09','127.0.0.1','Firefox'),
(124836,'2022-05-10 08:29:56','::1','Chrome'),
(124837,'2022-05-11 08:08:31','::1','Chrome'),
(124838,'2022-05-12 07:57:41','::1','Chrome'),
(124839,'2022-05-13 14:40:24','::1','Chrome'),
(124840,'2022-05-14 07:53:04','::1','Chrome'),
(124841,'2022-05-17 08:06:13','::1','Chrome'),
(124842,'2022-05-18 07:52:12','::1','Chrome'),
(124843,'2022-05-19 07:50:08','::1','Chrome'),
(124844,'2022-05-20 08:30:00','::1','Chrome'),
(124845,'2022-05-23 07:45:25','::1','Chrome'),
(124846,'2022-05-24 07:56:16','::1','Chrome'),
(124847,'2022-05-25 07:35:19','::1','Chrome'),
(124848,'2022-05-27 07:47:10','::1','Chrome'),
(124849,'2022-05-28 07:45:17','::1','Chrome'),
(124850,'2022-05-30 07:53:08','::1','Chrome'),
(124851,'2022-05-31 07:31:07','::1','Chrome'),
(124852,'2022-06-02 07:45:21','::1','Chrome'),
(124853,'2022-06-03 07:51:33','::1','Chrome'),
(124854,'2022-06-04 07:23:53','::1','Chrome'),
(124855,'2022-06-06 07:37:04','::1','Chrome'),
(124856,'2022-06-07 07:24:43','::1','Chrome'),
(124857,'2022-06-08 08:45:24','::1','Chrome'),
(124858,'2022-06-09 08:01:13','::1','Chrome'),
(124859,'2022-06-10 07:56:28','::1','Chrome'),
(124860,'2022-06-11 07:31:45','::1','Chrome'),
(124861,'2022-06-13 07:57:54','::1','Chrome'),
(124862,'2022-06-14 07:58:14','::1','Chrome'),
(124863,'2022-06-15 08:07:04','::1','Chrome'),
(124864,'2022-06-16 08:09:09','::1','Chrome'),
(124865,'2022-06-17 07:57:42','::1','Chrome'),
(124866,'2022-06-18 07:41:00','::1','Chrome'),
(124867,'2022-06-20 07:50:51','::1','Chrome'),
(124868,'2022-06-21 07:35:11','::1','Chrome'),
(124869,'2022-06-22 07:47:11','::1','Chrome'),
(124870,'2022-06-23 07:49:38','::1','Chrome'),
(124871,'2022-06-24 07:48:49','::1','Chrome'),
(124872,'2022-06-25 07:28:54','::1','Chrome');

/*Table structure for table `tbl_product_splus` */

DROP TABLE IF EXISTS `tbl_product_splus`;

CREATE TABLE `tbl_product_splus` (
  `product_id` int(20) NOT NULL AUTO_INCREMENT,
  `product_kategori` int(11) NOT NULL,
  `product_name` varchar(120) NOT NULL,
  `product_jenis` varchar(100) NOT NULL,
  `product_price` decimal(8,2) NOT NULL,
  `product_tipe` varchar(100) NOT NULL,
  `product_brand` varchar(50) NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `product_quantity` mediumint(5) NOT NULL,
  `product_status` enum('0','1') NOT NULL COMMENT '0-active,1-inactive',
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

/*Data for the table `tbl_product_splus` */

insert  into `tbl_product_splus`(`product_id`,`product_kategori`,`product_name`,`product_jenis`,`product_price`,`product_tipe`,`product_brand`,`product_image`,`product_quantity`,`product_status`) values 
(1,1,'Pintu Classic-001','ABS',10000.00,'Pintu Classic-001','SPLUS','pintu/classic-2-20.jpg',5,'1'),
(2,2,'Jendela Classic-110','UPVC_JENDELA',10000.00,'Jendela Classic-110','SPLUS','window/window3.jpg',5,'1'),
(3,3,'kichen-001','KICHEN',10000.00,'kichen-001','SPLUS','interior/kichen-001.jpg',5,'1'),
(4,4,'wpc-001','WPC',10000.00,'wpc-001','SPLUS','exterior/wpc-001.jpg',5,'1'),
(5,5,'gagang-pintu-001','AKSESORIS',10000.00,'gagang-pintu-001','SPLUS','aksesoris/gagang-pintu.jpg',5,'1'),
(6,6,'masker-dewasa-001','MASKER',10000.00,'masker-dewasa-001','SPLUS','masker/masker-dewasa-001.jpg',5,'1'),
(7,3,'kichen-002','KICHEN',10000.00,'kichen-002','SPLUS','interior/kichen-002.jpg',5,'1'),
(8,1,'Pintu artdoor -001','UPVC_PINTU',8000.00,'Pintu artdoor -001','SPLUS','pintu/artdoor-c1-30.jpg',5,'1'),
(9,1,'Pintu grande-001','NAMO',8000.00,'Pintu grande-001','NAMO','pintu/grande.jpg',5,'1'),
(10,1,'Pintu Classic-002','ABS',8000.00,'Pintu Classic-002','SPLUS','pintu/classic-1-50.jpg',5,'1');

/*Table structure for table `tbl_produk` */

DROP TABLE IF EXISTS `tbl_produk`;

CREATE TABLE `tbl_produk` (
  `produk_id` int(20) NOT NULL AUTO_INCREMENT,
  `id_kategori_produk` int(11) DEFAULT NULL,
  `produk_kategori_id` int(20) DEFAULT NULL,
  `produk_judul` varchar(50) DEFAULT NULL,
  `tanggal` timestamp NULL DEFAULT current_timestamp(),
  `produk_author` varchar(60) DEFAULT NULL,
  `produk_slug` varchar(200) DEFAULT NULL,
  `produk_nama` varchar(100) DEFAULT NULL,
  `produk_kategori` varchar(100) DEFAULT NULL,
  `produk_gambar` varchar(200) DEFAULT NULL,
  `produk_deskripsi` text DEFAULT NULL,
  PRIMARY KEY (`produk_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

/*Data for the table `tbl_produk` */

insert  into `tbl_produk`(`produk_id`,`id_kategori_produk`,`produk_kategori_id`,`produk_judul`,`tanggal`,`produk_author`,`produk_slug`,`produk_nama`,`produk_kategori`,`produk_gambar`,`produk_deskripsi`) values 
(1,1,1,NULL,'2022-04-07 09:28:42',NULL,'pintu','Pintu','1','classic-2-20.jpg','Pintu ABS'),
(2,2,2,NULL,'2022-04-07 09:28:42',NULL,'window','window','2','window.jpg','window'),
(3,3,3,NULL,'2022-04-07 09:28:42',NULL,'interor-Material','Interor Material','3',NULL,NULL),
(4,4,4,NULL,'2022-04-07 09:28:42',NULL,'exterior-Material','Exterior Material','4',NULL,NULL),
(5,5,5,NULL,'2022-04-07 09:28:42',NULL,'Aksesoris','Aksesoris','5',NULL,NULL),
(6,6,6,NULL,'2022-04-07 09:28:42',NULL,'Masker','Masker','6',NULL,NULL);

/*Table structure for table `tbl_produk_keranjang` */

DROP TABLE IF EXISTS `tbl_produk_keranjang`;

CREATE TABLE `tbl_produk_keranjang` (
  `keranjang_id` int(11) NOT NULL AUTO_INCREMENT,
  `session_id` varchar(100) DEFAULT NULL,
  `nama_produk` varchar(200) DEFAULT NULL,
  `tipe_produk` varchar(200) DEFAULT NULL,
  `harga_produk_meter` decimal(20,0) DEFAULT NULL,
  `ukuran` varchar(100) DEFAULT NULL,
  `lebar_produk` decimal(10,0) DEFAULT NULL,
  `tinggi_produk` decimal(10,0) DEFAULT NULL,
  `warna_produk` varchar(50) DEFAULT NULL,
  `warna_produk2` varchar(50) DEFAULT NULL,
  `jumlah_produk` decimal(10,0) DEFAULT NULL,
  `harga_produk` decimal(50,0) DEFAULT NULL,
  PRIMARY KEY (`keranjang_id`)
) ENGINE=MyISAM AUTO_INCREMENT=289 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_produk_keranjang` */

insert  into `tbl_produk_keranjang`(`keranjang_id`,`session_id`,`nama_produk`,`tipe_produk`,`harga_produk_meter`,`ukuran`,`lebar_produk`,`tinggi_produk`,`warna_produk`,`warna_produk2`,`jumlah_produk`,`harga_produk`) values 
(287,'22745457468250657','CLASSIC-1-50','classic-1-50',1500000,'3000x1000',NULL,NULL,'50',NULL,1,1500000),
(288,'22745457468250657','CLASSIC-1-50','classic-1-50',2000000,'2000x1000',NULL,NULL,'50',NULL,1,2000000);

/*Table structure for table `tbl_produk_lama` */

DROP TABLE IF EXISTS `tbl_produk_lama`;

CREATE TABLE `tbl_produk_lama` (
  `produk_id` int(20) NOT NULL AUTO_INCREMENT,
  `id_kategori_produk` int(11) DEFAULT NULL,
  `produk_slug` varchar(200) DEFAULT NULL,
  `produk_nama` varchar(100) DEFAULT NULL,
  `produk_kategori` varchar(100) DEFAULT NULL,
  `produk_gambar` varchar(200) DEFAULT NULL,
  `produk_deskripsi` text DEFAULT NULL,
  PRIMARY KEY (`produk_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

/*Data for the table `tbl_produk_lama` */

insert  into `tbl_produk_lama`(`produk_id`,`id_kategori_produk`,`produk_slug`,`produk_nama`,`produk_kategori`,`produk_gambar`,`produk_deskripsi`) values 
(1,0,'sunshade-combi-roll-screen','Combi Roll Screen','Sunshade','combi/1.jpg','Sun shade merupakan gabungan dari PVC dengan kain serat fiber'),
(2,0,'sunshade-roll-screen','Roll Screen','Sunshade','roll-screen/1.jpg','Sun shade merupakan gabungan dari PVC dengan kain serat fiber'),
(3,0,'sunshade-sun-screen','Sun Screen','Sunshade','sun-screen/1.jpg','Sun shade merupakan gabungan dari PVC dengan kain serat fiber'),
(4,0,'sunshade-black-out-roll-screen','Blackout Roll Screen	','Sunshade','blackout/1.jpg','Sun shade merupakan gabungan dari PVC dengan kain serat fiber'),
(5,0,'sunshade-vertical-blind','Vertical Blind','Sunshade','vert-blind/1.jpg','Sun shade merupakan gabungan dari PVC dengan kain serat fiber'),
(6,0,'sunshade-horizontal-wood','Horizontal Wood','Sunshade','wood-blind/1.jpg','Sun shade merupakan gabungan dari PVC dengan kain serat fiber'),
(7,0,'sunshade-honeycomb','Honeycomb','Sunshade','honeycomb/1.jpg','Sun shade merupakan gabungan dari PVC dengan kain serat fiber'),
(8,0,'sunshade-horizontal-alumunium','Horizontal Alumunium','Sunshade','alumunium/1.jpg','Sun shade merupakan gabungan dari PVC dengan kain serat fiber'),
(9,1,'pintu','Pintu','pintu','classic-2-20.jpg','Pintu ABS'),
(10,2,'window','window','window','window.jpg','window'),
(11,3,'interor-Material','Interor Material','Interor ',NULL,NULL),
(12,4,'exterior-Material','Exterior Material','Exterior',NULL,NULL),
(13,5,'Aksesoris','Aksesoris','Aksesoris',NULL,NULL),
(14,6,'Masker','Masker','Masker',NULL,NULL);

/*Table structure for table `tbl_produk_varian` */

DROP TABLE IF EXISTS `tbl_produk_varian`;

CREATE TABLE `tbl_produk_varian` (
  `varian_id` int(11) NOT NULL AUTO_INCREMENT,
  `produk_id` int(11) NOT NULL,
  `varian_produk_id` int(11) NOT NULL,
  `varian_kategori_id` int(11) NOT NULL,
  `varian_author` varchar(150) DEFAULT NULL,
  `varian_judul` varchar(100) DEFAULT NULL,
  `varian_stok` varchar(100) DEFAULT NULL,
  `varian_gambar` varchar(100) DEFAULT NULL,
  `varian_pengguna_id` int(11) NOT NULL,
  `id_subkategori_produk` int(11) NOT NULL,
  `varian_type` varchar(150) DEFAULT NULL,
  `varian_nama` varchar(150) DEFAULT NULL,
  `varian_gambar_depan` varchar(150) DEFAULT NULL,
  `varian_gambar_utama` varchar(200) DEFAULT NULL,
  `varian_gambar_warna` varchar(200) DEFAULT NULL,
  `varian_harga` bigint(20) DEFAULT NULL,
  `varian_harga_meter` decimal(10,0) DEFAULT NULL,
  `varian_jumlah` bigint(20) DEFAULT NULL,
  `varian_deskripsi` longtext DEFAULT NULL,
  `varian_ukuran` varchar(100) DEFAULT NULL,
  `varian_warna` varchar(100) DEFAULT NULL,
  `tokopedia` text DEFAULT NULL,
  `bukalapak` text DEFAULT NULL,
  `product_name` varchar(120) NOT NULL,
  `product_jenis` varchar(100) NOT NULL,
  `product_price` decimal(8,2) NOT NULL,
  `product_tipe` varchar(100) NOT NULL,
  `product_brand` varchar(50) NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `product_quantity` mediumint(5) NOT NULL,
  `product_status` enum('0','1') NOT NULL,
  PRIMARY KEY (`varian_id`)
) ENGINE=MyISAM AUTO_INCREMENT=182 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_produk_varian` */

insert  into `tbl_produk_varian`(`varian_id`,`produk_id`,`varian_produk_id`,`varian_kategori_id`,`varian_author`,`varian_judul`,`varian_stok`,`varian_gambar`,`varian_pengguna_id`,`id_subkategori_produk`,`varian_type`,`varian_nama`,`varian_gambar_depan`,`varian_gambar_utama`,`varian_gambar_warna`,`varian_harga`,`varian_harga_meter`,`varian_jumlah`,`varian_deskripsi`,`varian_ukuran`,`varian_warna`,`tokopedia`,`bukalapak`,`product_name`,`product_jenis`,`product_price`,`product_tipe`,`product_brand`,`product_image`,`product_quantity`,`product_status`) values 
(7,1,0,0,NULL,NULL,NULL,NULL,0,1,'pintu','classic-001','pintu/classic-1-50.jpg','pintu/classic-1-50.jpg','warna_new/20.jpg',NULL,240000,NULL,NULL,'1000x1000','BROWN',NULL,NULL,'Pintu Classic-001','ABS',10000.00,'Pintu Classic-001','SPLUS','pintu/classic-1-50.jpg',5,'1'),
(1,1,0,0,NULL,NULL,NULL,NULL,0,1,'pintu','classic-001','','pintu/classic-1-50.jpg','warna_new/19.jpg',NULL,10000,NULL,NULL,'1000x1000','BROWN-MOTIF',NULL,NULL,'Pintu Classic-001','ABS',10000.00,'Pintu Classic-001','SPLUS','pintu/classic-1-50.jpg',5,'0'),
(2,2,0,0,NULL,NULL,NULL,NULL,0,1,'jendela','window','window/window3.jpg','window/window3.jpg','warna_new/59.jpg',NULL,240000,NULL,NULL,'1000x1000',NULL,NULL,NULL,'Jendela Classic-110','UPVC_JENDELA',10000.00,'Jendela Classic-110','SPLUS','window/window3.jpg',5,'1'),
(3,3,0,0,NULL,NULL,NULL,NULL,0,1,'kichen','kichen-001','interior/kichen-001.jpg','interior/kichen-001.jpg','warna_new/59.jpg',NULL,10000,NULL,NULL,'1000x1000',NULL,NULL,NULL,'kichen-001','KICHEN',10000.00,'kichen-001','SPLUS','interior/kichen-001.jpg',5,'1'),
(4,4,0,0,NULL,NULL,NULL,NULL,0,2,'exterior','exterior','exterior/wpc-001.jpg','exterior/wpc-001.jpg','warna_new/59.jpg',NULL,10000,NULL,NULL,'1000x1000',NULL,NULL,NULL,'wpc-001','WPC',10000.00,'wpc-001','SPLUS','exterior/wpc-001.jpg',5,'1'),
(5,5,0,0,NULL,NULL,NULL,NULL,0,2,'aksesoris','aksesoris','aksesoris/gagang-pintu.jpg','aksesoris/gagang-pintu.jpg','warna_new/59.jpg',NULL,10000,NULL,NULL,'1000x1000',NULL,NULL,NULL,'gagang-pintu-001','AKSESORIS',10000.00,'gagang pintu-001','NAMO','aksesoris/gagang-pintu.jpg',5,'1'),
(6,6,0,0,NULL,NULL,NULL,NULL,0,2,'masker','masker','masker/masker-dewasa-001.jpg','masker/masker-dewasa-001.jpg','warna_new/59.jpg',NULL,10000,NULL,NULL,'1000x1000',NULL,NULL,NULL,'masker-dewasa-001','MASKER',10000.00,'masker dewasa-001','SPLUS','masker/masker-dewasa-001.jpg',5,'1'),
(8,1,0,0,NULL,NULL,NULL,NULL,0,1,'pintu','classic-002','pintu/classic-2-20.jpg','pintu/classic-2-20.jpg','warna_new/20.jpg',NULL,10000,NULL,NULL,'1000x1000','BROWN',NULL,NULL,'Pintu Classic-002','ABS',10000.00,'Pintu Classic-002','SPLUS','pintu/classic-2-20.jpg',5,'1'),
(9,3,0,0,NULL,NULL,NULL,NULL,0,1,'kichen','kichen-002','interior/kichen-002.jpg','interior/kichen-002.jpg','warna_new/20.jpg',NULL,10000,NULL,NULL,'1000x1000','BROWN',NULL,NULL,'kichen-002','KICHEN',10000.00,'kichen-002','SPLUS','interior/kichen-002.jpg',5,'1'),
(10,1,0,0,NULL,NULL,NULL,NULL,0,1,'pintu','artdoor-001','pintu/artdoor-c1-30.jpg','pintu/artdoor-c1-30.jpg','warna_new/20.jpg',NULL,10000,NULL,NULL,'1000x1000','BROWN',NULL,NULL,'Pintu artdoor-001','NAMO',8000.00,'Pintu artdoor-001','NAMO','pintu/artdoor-c1-30.jpg',3,'1'),
(11,1,0,0,NULL,NULL,NULL,NULL,0,1,'pintu','grande-001','pintu/grande.jpg','pintu/grande.jpg','warna_new/20.jpg',NULL,10000,NULL,NULL,'1000x1000','BROWN',NULL,NULL,'Pintu grande-001','ABS',8000.00,'Pintu grande-001','SPLUS','pintu/grande.jpg',3,'1'),
(12,1,0,0,'itakumala',NULL,NULL,NULL,22,1,'pintu','artdoor-r7-60','pintu/artdoor-r7-60.jpg','pintu/artdoor-r7-60.jpg','warna_new/59.jpg',NULL,10000,NULL,'23','1000x1000',NULL,NULL,NULL,'Pintu artdoor-r7-60','ARTDOOR',10000.00,'Pintu artdoor-r7-60','SPLUS','pintu/artdoor-r7-60.jpg',3,'1'),
(13,1,0,0,NULL,NULL,NULL,NULL,0,1,'pintu','artdoor-p3-59','pintu/artdoor-p3-59.jpg','pintu/artdoor-p3-59.jpg','warna_new/59.jpg',NULL,10000,NULL,NULL,'1000x1000','BROWN',NULL,NULL,'Pintu artdoor-p3-59','ARTDOOR',10000.00,'Pintu artdoor-p3-59','SPLUS','pintu/artdoor-p3-59.jpg',3,'1');

/*Table structure for table `tbl_produk_varian_lama` */

DROP TABLE IF EXISTS `tbl_produk_varian_lama`;

CREATE TABLE `tbl_produk_varian_lama` (
  `varian_id` int(11) NOT NULL AUTO_INCREMENT,
  `produk_id` int(11) NOT NULL,
  `varian_type` varchar(150) DEFAULT NULL,
  `varian_nama` varchar(150) DEFAULT NULL,
  `varian_gambar_depan` varchar(200) DEFAULT NULL,
  `varian_gambar_utama` varchar(200) DEFAULT NULL,
  `varian_gambar_warna` varchar(200) DEFAULT NULL,
  `varian_harga` bigint(20) DEFAULT NULL,
  `varian_harga_meter` decimal(10,0) DEFAULT NULL,
  `varian_jumlah` bigint(20) DEFAULT NULL,
  `varian_deskripsi` longtext DEFAULT NULL,
  `varian_ukuran` varchar(100) DEFAULT NULL,
  `varian_warna` varchar(100) DEFAULT NULL,
  `tokopedia` text DEFAULT NULL,
  `bukalapak` text DEFAULT NULL,
  PRIMARY KEY (`varian_id`)
) ENGINE=MyISAM AUTO_INCREMENT=172 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_produk_varian_lama` */

insert  into `tbl_produk_varian_lama`(`varian_id`,`produk_id`,`varian_type`,`varian_nama`,`varian_gambar_depan`,`varian_gambar_utama`,`varian_gambar_warna`,`varian_harga`,`varian_harga_meter`,`varian_jumlah`,`varian_deskripsi`,`varian_ukuran`,`varian_warna`,`tokopedia`,`bukalapak`) values 
(1,1,NULL,'Multi Combi One Tone','combi/1.jpg','combi/1.jpg','combi/warna/multi-combi-one-tone/01-white.jpg',0,973500,NULL,'Combi one tone','1000x1000','White','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-multi-combi-one-tone-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d94raq-jual-roller-blind-s-plus-combi-shade-multi-combi-one-tone-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(2,1,NULL,'Multi Combi One Tone','combi/1.jpg','combi/1.jpg','combi/warna/multi-combi-one-tone/02-ivory.jpg',0,973500,NULL,'Combi one tone','1000x1000','Ivory','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-multi-combi-one-tone-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d94raq-jual-roller-blind-s-plus-combi-shade-multi-combi-one-tone-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(3,1,NULL,'Multi Combi One Tone','combi/1.jpg','combi/1.jpg','combi/warna/multi-combi-one-tone/03-grey.jpg',0,973500,NULL,'Combi one tone','1000x1000','Grey','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-multi-combi-one-tone-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d94raq-jual-roller-blind-s-plus-combi-shade-multi-combi-one-tone-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(4,1,NULL,'Multi Combi Two Tone','combi/1.jpg','combi/1.jpg','combi/warna/multi-combi-two-tone/01-beige.jpg',0,1111000,NULL,'Combi Two tone','1000x1000','Beige','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-multi-combi-two-tone-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d96e39-jual-roller-blind-s-plus-combi-shade-multi-combi-two-tone-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(5,1,NULL,'Multi Combi Two Tone','combi/1.jpg','combi/1.jpg','combi/warna/multi-combi-two-tone/02-white.jpg',0,1111000,NULL,'Combi Two tone','1000x1000','White','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-multi-combi-two-tone-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d96e39-jual-roller-blind-s-plus-combi-shade-multi-combi-two-tone-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(6,1,NULL,'Multi Combi Two Tone','combi/1.jpg','combi/1.jpg','combi/warna/multi-combi-two-tone/03-cherry.jpg',0,1111000,NULL,'Combi Two tone','1000x1000','Cherry','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-multi-combi-two-tone-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d96e39-jual-roller-blind-s-plus-combi-shade-multi-combi-two-tone-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(7,1,NULL,'Multi Combi Two Tone','combi/1.jpg','combi/1.jpg','combi/warna/multi-combi-two-tone/04-ivory.jpg',0,1111000,NULL,'Combi Two tone','1000x1000','Ivory','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-multi-combi-two-tone-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d96e39-jual-roller-blind-s-plus-combi-shade-multi-combi-two-tone-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(8,1,NULL,'Multi Combi Two Tone','combi/1.jpg','combi/1.jpg','combi/warna/multi-combi-two-tone/05-teak.jpg',0,1111000,NULL,'Combi Two tone','1000x1000','Taek','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-multi-combi-two-tone-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d96e39-jual-roller-blind-s-plus-combi-shade-multi-combi-two-tone-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(9,1,NULL,'Basic',NULL,'combi/1.jpg','combi/warna/basic/01-white.jpg',0,360800,NULL,'Combi Shade Basic','1000x1000','White','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-basic-uk-60x120-cm-a355','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d2ldyl-jual-roller-blind-s-plus-combi-shade-basic-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(10,1,NULL,'Basic',NULL,'combi/1.jpg','combi/warna/basic/02-peach.jpg',0,360800,NULL,'Combi Shade Basic','1000x1000','Peach','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-basic-uk-60x120-cm-a355','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d2ldyl-jual-roller-blind-s-plus-combi-shade-basic-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(11,1,NULL,'Basic',NULL,'combi/1.jpg','combi/warna/basic/03-mustard.jpg',0,360800,NULL,'Combi Shade Basic','1000x1000','Mustard','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-basic-uk-60x120-cm-a355','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d2ldyl-jual-roller-blind-s-plus-combi-shade-basic-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(12,1,NULL,'Basic',NULL,'combi/1.jpg','combi/warna/basic/07-flourscent-green.jpg',0,360800,NULL,'Combi Shade Basic','1000x1000','Flourcent Green','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-basic-uk-60x120-cm-a355','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d2ldyl-jual-roller-blind-s-plus-combi-shade-basic-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(13,1,NULL,'Basic',NULL,'combi/1.jpg','combi/warna/basic/05-pink.jpg',0,360800,NULL,'Combi Shade Basic','1000x1000','Pink','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-basic-uk-60x120-cm-a355','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d2ldyl-jual-roller-blind-s-plus-combi-shade-basic-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(14,1,NULL,'Basic',NULL,'combi/1.jpg','combi/warna/basic/06-mocha.jpg',0,360800,NULL,'Combi Shade Basic','1000x1000','Mocca','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-basic-uk-60x120-cm-a355','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d2ldyl-jual-roller-blind-s-plus-combi-shade-basic-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(15,1,NULL,'Woodlook S/T 2 Tone',NULL,'combi/1.jpg','combi/warna/woodlook-s-t-tone/01-ivory.jpg',0,594000,NULL,'Combi Shade Woodlook S/T 2 Tone','1000x1000','Ivory','\r\nhttps://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-wood-look-s-t-2-tone-uk-60x120-cm\r\n\r\nhttps://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-wood-look-s-t-2-tone-uk-60x120-cm\r\nhttps://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-wood-look-s-t-2-tone-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d2n7ld-jual-roller-blind-s-plus-combi-shade-woodlook-2-tone-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(16,1,NULL,'Woodlook S/T 2 Tone',NULL,'combi/1.jpg','combi/warna/woodlook-s-t-tone/02-white.jpg',0,594000,NULL,'Combi Shade Woodlook S/T 2 Tone','1000x1000','White','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-wood-look-s-t-2-tone-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d2n7ld-jual-roller-blind-s-plus-combi-shade-woodlook-2-tone-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(17,1,NULL,'Woodlook S/T 2 Tone',NULL,'combi/1.jpg','combi/warna/woodlook-s-t-tone/03-brown.jpg',0,594000,NULL,'Combi Shade Woodlook S/T 2 Tone','1000x1000','Brown','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-wood-look-s-t-2-tone-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d2n7ld-jual-roller-blind-s-plus-combi-shade-woodlook-2-tone-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(18,1,NULL,'Woodlook S/T 2 Tone',NULL,'combi/1.jpg','combi/warna/woodlook-s-t-tone/04-mushroom.jpg',0,594000,NULL,'Combi Shade Woodlook S/T 2 Tone','1000x1000','Mushroom','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-wood-look-s-t-2-tone-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d2n7ld-jual-roller-blind-s-plus-combi-shade-woodlook-2-tone-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(19,1,NULL,'Woodlook S/T 2 Tone',NULL,'combi/1.jpg','combi/warna/woodlook-s-t-tone/05-grey.jpg',0,594000,NULL,'Combi Shade Woodlook S/T 2 Tone','1000x1000','Grey','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-wood-look-s-t-2-tone-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d2n7ld-jual-roller-blind-s-plus-combi-shade-woodlook-2-tone-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(20,1,NULL,'Woodlook S/T 2 Tone',NULL,'combi/1.jpg','combi/warna/woodlook-s-t-tone/06-chocolate.jpg',0,594000,NULL,'Combi Shade Woodlook S/T 2 Tone','1000x1000','Chocolate','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-wood-look-s-t-2-tone-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d2n7ld-jual-roller-blind-s-plus-combi-shade-woodlook-2-tone-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(21,1,NULL,'Wood Look Soft',NULL,'combi/1.jpg','combi/warna/woodlook-soft/01-mushroom.jpg',0,594000,NULL,'Combi Shade Wood Look Soft','1000x1000','Mushroom','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-wood-look-soft-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d2ojmo-jual-roller-blind-s-plus-combi-shade-woodlook-soft-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(22,1,NULL,'Wood Look Soft',NULL,'combi/1.jpg','combi/warna/woodlook-soft/02-white.jpg',0,594000,NULL,'Combi Shade Wood Look Soft','1000x1000','White','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-wood-look-soft-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d2ojmo-jual-roller-blind-s-plus-combi-shade-woodlook-soft-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(23,1,NULL,'Wood Look Soft',NULL,'combi/1.jpg','combi/warna/woodlook-soft/03-chocolate.jpg',0,594000,NULL,'Combi Shade Wood Look Soft','1000x1000','Chocolate','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-wood-look-soft-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d2ojmo-jual-roller-blind-s-plus-combi-shade-woodlook-soft-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(24,1,NULL,'Wood Look Soft',NULL,'combi/1.jpg','combi/warna/woodlook-soft/04-brown.jpg',0,594000,NULL,'Combi Shade Wood Look Soft','1000x1000','Brown','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-wood-look-soft-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d2ojmo-jual-roller-blind-s-plus-combi-shade-woodlook-soft-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(25,1,NULL,'Wood Look Soft',NULL,'combi/1.jpg','combi/warna/woodlook-soft/05-grey.jpg',0,594000,NULL,'Combi Shade Wood Look Soft','1000x1000','Grey','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-wood-look-soft-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d2ojmo-jual-roller-blind-s-plus-combi-shade-woodlook-soft-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(26,1,NULL,'Wood Look Soft',NULL,'combi/1.jpg','combi/warna/woodlook-soft/06-cadet-blue.jpg',0,594000,NULL,'Combi Shade Wood Look Soft','1000x1000','Cadet Blue','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-wood-look-soft-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d2ojmo-jual-roller-blind-s-plus-combi-shade-woodlook-soft-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(27,1,NULL,'Net Wood Look',NULL,'combi/1.jpg','combi/warna/net-wood-look/01-green.jpg',0,481800,NULL,'Combi Shade Net Wood Look','1000x1000','Green','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-net-wood-look-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d2plvm-jual-roller-blind-s-plus-net-wood-look-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(28,1,NULL,'Net Wood Look',NULL,'combi/1.jpg','combi/warna/net-wood-look/02-pink.jpg',0,481800,NULL,'Combi Shade Net Wood Look','1000x1000','Pink','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-net-wood-look-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d2plvm-jual-roller-blind-s-plus-net-wood-look-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(29,1,NULL,'Net Wood Look',NULL,'combi/1.jpg','combi/warna/net-wood-look/03-blue.jpg',0,481800,NULL,'Combi Shade Net Wood Look','1000x1000','Blue','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-net-wood-look-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d2plvm-jual-roller-blind-s-plus-net-wood-look-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(30,1,NULL,'Net Wood Look',NULL,'combi/1.jpg','combi/warna/net-wood-look/04-brown.jpg',0,481800,NULL,'Combi Shade Net Wood Look','1000x1000','Brown','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-net-wood-look-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d2plvm-jual-roller-blind-s-plus-net-wood-look-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(31,1,NULL,'Net Wood Look',NULL,'combi/1.jpg','combi/warna/net-wood-look/05-black.jpg',0,481800,NULL,'Combi Shade Net Wood Look','1000x1000','Black','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-net-wood-look-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d2plvm-jual-roller-blind-s-plus-net-wood-look-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(32,1,NULL,'Rainbow',NULL,'combi/1.jpg','combi/warna/rainbow/01-pink.jpg',0,492800,NULL,'Combi Shade Rainbow','1000x1000','Pink','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-rainbow-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d2r5wa-jual-roller-blind-s-plus-combi-shade-rainbow-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(33,1,NULL,'Rainbow',NULL,'combi/1.jpg','combi/warna/rainbow/02-brown.jpg',0,492800,NULL,'Combi Shade Rainbow','1000x1000','Brown','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-rainbow-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d2r5wa-jual-roller-blind-s-plus-combi-shade-rainbow-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(34,1,NULL,'Rainbow',NULL,'combi/1.jpg','combi/warna/rainbow/03-send.jpg',0,492800,NULL,'Combi Shade Rainbow','1000x1000','Sand','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-rainbow-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d2r5wa-jual-roller-blind-s-plus-combi-shade-rainbow-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(35,1,NULL,'Rainbow',NULL,'combi/1.jpg','combi/warna/rainbow/04-grey.jpg',0,492800,NULL,'Combi Shade Rainbow','1000x1000','Gray','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-rainbow-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d2r5wa-jual-roller-blind-s-plus-combi-shade-rainbow-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(36,1,NULL,'Balwood Look Combi',NULL,'combi/1.jpg','combi/warna/balwood-look-combi/01-mushroom.jpg',0,544500,NULL,'Combi Shade Balwood Look Combi','1000x1000','Mushroom','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-balwood-look-combi-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d2sj6b-jual-roller-blind-s-plus-combi-shade-balwood-look?from=product_owner&product_owner=normal_seller'),
(37,1,NULL,'Balwood Look Combi',NULL,'combi/1.jpg','combi/warna/balwood-look-combi/02-cherry.jpg',0,544500,NULL,'Combi Shade Balwood Look Combi','1000x1000','Cherry','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-balwood-look-combi-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d2sj6b-jual-roller-blind-s-plus-combi-shade-balwood-look?from=product_owner&product_owner=normal_seller'),
(38,1,NULL,'Balwood Look Combi',NULL,'combi/1.jpg','combi/warna/balwood-look-combi/03-nile.jpg',0,544500,NULL,'Combi Shade Balwood Look Combi','1000x1000','Nile','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-balwood-look-combi-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d2sj6b-jual-roller-blind-s-plus-combi-shade-balwood-look?from=product_owner&product_owner=normal_seller'),
(39,1,NULL,'Shani',NULL,'combi/1.jpg','combi/warna/shani/01-white.jpg',0,561000,NULL,'Combi Shade Shani','1000x1000','White','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-shani-uk-60-x-120cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d2ukft-jual-roller-blind-s-plus-combi-shade-shani-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(40,1,NULL,'Shani',NULL,'combi/1.jpg','combi/warna/shani/02-peach.jpg',0,561000,NULL,'Combi Shade Shani','1000x1000','Peach','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-shani-uk-60-x-120cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d2ukft-jual-roller-blind-s-plus-combi-shade-shani-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(41,1,NULL,'Shani',NULL,'combi/1.jpg','combi/warna/shani/03-caramel.jpg',0,561000,NULL,'Combi Shade Shani','1000x1000','Charamel','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-shani-uk-60-x-120cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d2ukft-jual-roller-blind-s-plus-combi-shade-shani-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(42,1,NULL,'Shani',NULL,'combi/1.jpg','combi/warna/shani/04-dark-grey.jpg',0,561000,NULL,'Combi Shade Shani','1000x1000','Dark Grey','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-shani-uk-60-x-120cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d2ukft-jual-roller-blind-s-plus-combi-shade-shani-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(43,1,NULL,'Metal Romance',NULL,'combi/1.jpg','combi/warna/metal-romance/01-white.jpg',0,649000,NULL,'Combi Shade Metal Romance','1000x1000','White','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-metal-romance-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3e8evs8-jual-roller-blind-s-plus-combi-shade-metal-romance-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(44,1,NULL,'Metal Romance',NULL,'combi/1.jpg','combi/warna/metal-romance/02-gold-pink.jpg',0,649000,NULL,'Combi Shade Metal Romance','1000x1000','Gold Pink','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-metal-romance-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3e8evs8-jual-roller-blind-s-plus-combi-shade-metal-romance-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(45,1,NULL,'Metal Romance',NULL,'combi/1.jpg','combi/warna/metal-romance/03-blue.jpg',0,649000,NULL,'Combi Shade Metal Romance','1000x1000','Blue','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-metal-romance-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3e8evs8-jual-roller-blind-s-plus-combi-shade-metal-romance-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(46,1,NULL,'Metal Romance',NULL,'combi/1.jpg','combi/warna/metal-romance/04-khaki.jpg',0,649000,NULL,'Combi Shade Metal Romance','1000x1000','Khaki','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-metal-romance-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3e8evs8-jual-roller-blind-s-plus-combi-shade-metal-romance-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(47,1,NULL,'Blackout Combi',NULL,'combi/1.jpg','combi/warna/blackout-combi/01-white.jpg',0,753500,NULL,'Combi Shade Blackout Combi','1000x1000','White','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-blackout-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d2zhvb-jual-roller-blind-s-plus-combi-shade-blackout-uk-60x120-cmm?from=product_owner&product_owner=normal_seller'),
(48,1,NULL,'Blackout Combi',NULL,'combi/1.jpg','combi/warna/blackout-combi/02-beige.jpg',0,753500,NULL,'Combi Shade Blackout Combi','1000x1000','Beige','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-blackout-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d2zhvb-jual-roller-blind-s-plus-combi-shade-blackout-uk-60x120-cmm?from=product_owner&product_owner=normal_seller'),
(49,1,NULL,'Blackout Combi',NULL,'combi/1.jpg','combi/warna/blackout-combi/03-grey.jpg',0,753500,NULL,'Combi Shade Blackout Combi','1000x1000','Grey','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-blackout-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d2zhvb-jual-roller-blind-s-plus-combi-shade-blackout-uk-60x120-cmm?from=product_owner&product_owner=normal_seller'),
(50,1,NULL,'Blackout Combi',NULL,'combi/1.jpg','combi/warna/blackout-combi/04-dark-grey.jpg',0,753500,NULL,'Combi Shade Blackout Combi','1000x1000','Dark Grey','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-combi-shade-blackout-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d2zhvb-jual-roller-blind-s-plus-combi-shade-blackout-uk-60x120-cmm?from=product_owner&product_owner=normal_seller'),
(51,3,NULL,'Alegro 3010 (1%)',NULL,'sun-screen/1.jpg','sun-screen/warna/alegro-1-3010/01-white.jpg',0,481800,NULL,'Sun Screen Alegro 3010 (1%)','1000x1000','White','https://www.tokopedia.com/splus-indonesia/sun-screen-s-plus-alegro-3010-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d8x9lk-jual-sun-screen-s-plus-alegro-3010-uk-60x120?from=product_owner&product_owner=normal_seller'),
(52,3,NULL,'Alegro 3010 (1%)',NULL,'sun-screen/1.jpg','sun-screen/warna/alegro-1-3010/02-beige.jpg',0,481800,NULL,'Sun Screen Alegro 3010 (1%)','1000x1000','Beige','https://www.tokopedia.com/splus-indonesia/sun-screen-s-plus-alegro-3010-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d8x9lk-jual-sun-screen-s-plus-alegro-3010-uk-60x120?from=product_owner&product_owner=normal_seller'),
(53,3,NULL,'Alegro 3010 (1%)',NULL,'sun-screen/1.jpg','sun-screen/warna/alegro-1-3010/03-grey.jpg',0,481800,NULL,'Sun Screen Alegro 3010 (1%)','1000x1000','Grey','https://www.tokopedia.com/splus-indonesia/sun-screen-s-plus-alegro-3010-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d8x9lk-jual-sun-screen-s-plus-alegro-3010-uk-60x120?from=product_owner&product_owner=normal_seller'),
(54,3,NULL,'Alegro 3030 (3%)',NULL,'sun-screen/1.jpg','sun-screen/warna/alegro-3-3030/01-white.jpg',0,481800,NULL,'Sun Screen Alegro 3030 (3%)','1000x1000','White',NULL,NULL),
(55,3,NULL,'Alegro 3030 (3%)',NULL,'sun-screen/1.jpg','sun-screen/warna/alegro-3-3030/02-beige.jpg',0,481800,NULL,'Sun Screen Alegro 3030 (3%)','1000x1000','Beige',NULL,NULL),
(56,3,NULL,'Alegro 3030 (3%)',NULL,'sun-screen/1.jpg','sun-screen/warna/alegro-3-3030/03-grey.jpg',0,481800,NULL,'Sun Screen Alegro 3030 (3%)','1000x1000','Grey',NULL,NULL),
(57,3,NULL,'Alegro 3050 (5%)',NULL,'sun-screen/1.jpg','sun-screen/warna/alegro-5-3050/01-white.jpg',0,453200,NULL,'Sun Screen Alegro 3050 (5%)','1000x1000','White',NULL,NULL),
(58,3,NULL,'Alegro 3050 (5%)',NULL,'sun-screen/1.jpg','sun-screen/warna/alegro-5-3050/02-beige.jpg',0,453200,NULL,'Sun Screen Alegro 3050 (5%)','1000x1000','Beige',NULL,NULL),
(59,3,NULL,'Alegro 3050 (5%)',NULL,'sun-screen/1.jpg','sun-screen/warna/alegro-5-3050/03-grey.jpg',0,453200,NULL,'Sun Screen Alegro 3050 (5%)','1000x1000','Grey',NULL,NULL),
(60,3,NULL,'Forte 4010 (1%)',NULL,'sun-screen/1.jpg','sun-screen/warna/forte-1-4010/01-white.jpg',0,564300,NULL,'Sun Screen Forte 4010 (1%)','1000x1000','White',NULL,NULL),
(61,3,NULL,'Forte 4010 (1%)',NULL,'sun-screen/1.jpg','sun-screen/warna/forte-1-4010/02-beige.jpg',0,564300,NULL,'Sun Screen Forte 4010 (1%)','1000x1000','Beige',NULL,NULL),
(62,3,NULL,'Forte 4010 (1%)',NULL,'sun-screen/1.jpg','sun-screen/warna/forte-1-4010/03-grey.jpg',0,564300,NULL,'Sun Screen Forte 4010 (1%)','1000x1000','Grey',NULL,NULL),
(63,3,NULL,'Forte 4030 (3%)',NULL,'sun-screen/1.jpg','sun-screen/warna/forte-3-4030/01-white.jpg',0,564300,NULL,'Sun Screen Forte 4030 (3%)','1000x1000','White',NULL,NULL),
(64,3,NULL,'Forte 4030 (3%)',NULL,'sun-screen/1.jpg','sun-screen/warna/forte-3-4030/02-beige.jpg',0,564300,NULL,'Sun Screen Forte 4030 (3%)','1000x1000','Beige',NULL,NULL),
(65,3,NULL,'Forte 4030 (3%)',NULL,'sun-screen/1.jpg','sun-screen/warna/forte-3-4030/03-grey.jpg',0,564300,NULL,'Sun Screen Forte 4030 (3%)','1000x1000','Grey',NULL,NULL),
(66,3,NULL,'Chaos 5000 (5%)',NULL,'sun-screen/1.jpg','sun-screen/warna/chaos-5000/01-white.jpg',0,398200,NULL,'Sun Screen Chaos 5000 (5%)','1000x1000','White','https://www.tokopedia.com/splus-indonesia/sun-screen-s-plus-chaos-5000-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3ehfh0a-jual-sun-screen-s-plus-chaos-5000-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(67,3,NULL,'Chaos 5000 (5%)',NULL,'sun-screen/1.jpg','sun-screen/warna/chaos-5000/02-beige.jpg',0,398200,NULL,'Sun Screen Chaos 5000 (5%)','1000x1000','Beige','https://www.tokopedia.com/splus-indonesia/sun-screen-s-plus-chaos-5000-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3ehfh0a-jual-sun-screen-s-plus-chaos-5000-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(68,3,NULL,'Chaos 5000 (5%)',NULL,'sun-screen/1.jpg','sun-screen/warna/chaos-5000/04-silver-white.jpg',0,547800,NULL,'Sun Screen Chaos 5000 (5%)','1000x1000','Silver',NULL,NULL),
(69,2,NULL,'Peru',NULL,'roll-screen/1.jpg','roll-screen/warna/peru/01-1021.jpg',0,402600,NULL,'Roll Screen Peru','1000x1000','1021#740','https://www.tokopedia.com/splus-indonesia/roll-screen-s-plus-peru-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d8n2ki-jual-roller-blind-s-plus-roll-screen-peru-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(70,2,NULL,'Peru',NULL,'roll-screen/1.jpg','roll-screen/warna/peru/01-1023.jpg',0,402600,NULL,'Roll Screen Peru','1000x1000','1023#743','https://www.tokopedia.com/splus-indonesia/roll-screen-s-plus-peru-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d8n2ki-jual-roller-blind-s-plus-roll-screen-peru-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(71,2,NULL,'Straw',NULL,'roll-screen/1.jpg','roll-screen/warna/straw/01-brown.jpg',0,360800,NULL,'Roll Screen Straw','1000x1000','Brown','https://www.tokopedia.com/splus-indonesia/roll-screen-s-plus-straw-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d8ob62-jual-roller-blind-s-plus-roll-screen-straw-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(72,2,NULL,'Straw',NULL,'roll-screen/1.jpg','roll-screen/warna/straw/01-beige.jpg',0,360800,NULL,'Roll Screen Straw','1000x1000','Beige','https://www.tokopedia.com/splus-indonesia/roll-screen-s-plus-straw-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d8ob62-jual-roller-blind-s-plus-roll-screen-straw-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(73,2,NULL,'Mayway',NULL,'roll-screen/1.jpg','roll-screen/warna/mai-way/01-905-BrBg.jpg',0,363000,NULL,'Roll Screen Mayway','1000x1000','905BrBg','https://www.tokopedia.com/splus-indonesia/roll-screen-s-plus-mayway-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d8p6od-jual-roller-blind-s-plus-roll-screen-mayway-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(74,2,NULL,'Mayway',NULL,'roll-screen/1.jpg','roll-screen/warna/mai-way/02-904-Brw.jpg',0,363000,NULL,'Roll Screen Mayway','1000x1000','904Brw','https://www.tokopedia.com/splus-indonesia/roll-screen-s-plus-mayway-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d8p6od-jual-roller-blind-s-plus-roll-screen-mayway-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(75,4,NULL,'Ben Series',NULL,'blackout/1.jpg','blackout/warna/ben-series/01-forsythia.jpg',0,500500,NULL,'Blackout Roll Screen Ben Series','1000x1000','Forsythia','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-blackout-shade-ben-series-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d3171e-jual-roller-blind-s-plus-blackout-shade-ben-series?from=product_owner&product_owner=normal_seller'),
(76,4,NULL,'Ben Series',NULL,'blackout/1.jpg','blackout/warna/ben-series/02-blue.jpg',0,500500,NULL,'Blackout Roll Screen Ben Series','1000x1000','Blue','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-blackout-shade-ben-series-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d3171e-jual-roller-blind-s-plus-blackout-shade-ben-series?from=product_owner&product_owner=normal_seller'),
(77,4,NULL,'Ben Series',NULL,'blackout/1.jpg','blackout/warna/ben-series/03-rosewood.jpg',0,500500,NULL,'Blackout Roll Screen Ben Series','1000x1000','Rose Wood','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-blackout-shade-ben-series-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d3171e-jual-roller-blind-s-plus-blackout-shade-ben-series?from=product_owner&product_owner=normal_seller'),
(79,4,NULL,'DGCB Series',NULL,'blackout/1.jpg','blackout/warna/dgcb/01-white.jpg',0,453200,NULL,'Blackout Roll Screen DGCB Series','1000x1000','White','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-blackout-shade-dgsb-series-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d8l2pp-jual-roller-blind-s-plus-blackout-shade-dgcb-series?from=product_owner&product_owner=normal_seller'),
(80,4,NULL,'DGCB Series',NULL,'blackout/1.jpg','blackout/warna/dgcb/02-grey.jpg',0,453200,NULL,'Blackout Roll Screen DGCB Series','1000x1000','Grey','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-blackout-shade-dgsb-series-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d8l2pp-jual-roller-blind-s-plus-blackout-shade-dgcb-series?from=product_owner&product_owner=normal_seller'),
(81,4,NULL,'DGCB Series',NULL,'blackout/1.jpg','blackout/warna/dgcb/03-beige.jpg',0,453200,NULL,'Blackout Roll Screen DGCB Series','1000x1000','Beige','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-blackout-shade-dgsb-series-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d8l2pp-jual-roller-blind-s-plus-blackout-shade-dgcb-series?from=product_owner&product_owner=normal_seller'),
(82,4,NULL,'DGSB Series',NULL,'blackout/1.jpg','blackout/warna/dgsb/01-white.jpg',0,453200,NULL,'Blackout Roll Screen DGSB Series','1000x1000','White','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-blackout-shade-dgsb-series-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d8m93y-jual-roller-blind-s-plus-blackout-shade-dgsb-series-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(83,4,NULL,'DGSB Series',NULL,'blackout/1.jpg','blackout/warna/dgsb/02-grey.jpg',0,453200,NULL,'Blackout Roll Screen DGSB Series','1000x1000','Grey','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-blackout-shade-dgsb-series-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d8m93y-jual-roller-blind-s-plus-blackout-shade-dgsb-series-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(84,4,NULL,'DGSB Series',NULL,'blackout/1.jpg','blackout/warna/dgsb/03-beige.jpg',0,453200,NULL,'Blackout Roll Screen DGSB Series','1000x1000','Beige','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-blackout-shade-dgsb-series-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d8m93y-jual-roller-blind-s-plus-blackout-shade-dgsb-series-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(85,5,NULL,'ALEGRO 3000',NULL,'vert-blind/1.jpg','vert-blind/warna/alegro-3000/01-white.jpg',0,632500,NULL,'Vertical Blind ALEGRO 3000','1000x1000','White','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-vertical-alegro-3000-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d91trz-jual-roller-blind-s-plus-vertical-alegro-3000-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(86,5,NULL,'ALEGRO 3000',NULL,'vert-blind/1.jpg','vert-blind/warna/alegro-3000/02-grey.jpg',0,632500,NULL,'Vertical Blind ALEGRO 3000','1000x1000','Grey','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-vertical-alegro-3000-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d91trz-jual-roller-blind-s-plus-vertical-alegro-3000-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(87,5,NULL,'ALEGRO 3000',NULL,'vert-blind/1.jpg','vert-blind/warna/alegro-3000/03-beige.jpg',0,632500,NULL,'Vertical Blind ALEGRO 3000','1000x1000','Beige','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-vertical-alegro-3000-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d91trz-jual-roller-blind-s-plus-vertical-alegro-3000-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(88,5,NULL,'FORTE 4000',NULL,'vert-blind/1.jpg','vert-blind/warna/forte-4000/01-white.jpg',0,712800,NULL,'Vertical Blind FORTE 4000','1000x1000','White',NULL,NULL),
(89,5,NULL,'FORTE 4000',NULL,'vert-blind/1.jpg','vert-blind/warna/forte-4000/02-grey.jpg',0,712800,NULL,'Vertical Blind FORTE 4000','1000x1000','Grey',NULL,NULL),
(90,5,NULL,'FORTE 4000',NULL,'vert-blind/1.jpg','vert-blind/warna/forte-4000/03-beige.jpg',0,712800,NULL,'Vertical Blind FORTE 4000','1000x1000','Beige',NULL,NULL),
(91,5,NULL,'CHAOS 5000',NULL,'vert-blind/1.jpg','vert-blind/warna/chaos-5000/01-white.jpg',0,603000,NULL,'Vertical Blind CHAOS 5000','1000x1000','White',NULL,NULL),
(92,5,NULL,'CHAOS 5000',NULL,'vert-blind/1.jpg','vert-blind/warna/chaos-5000/02-beige.jpg',0,603000,NULL,'Vertical Blind CHAOS 5000','1000x1000','Beige',NULL,NULL),
(93,5,NULL,'CHAOS 5000',NULL,'vert-blind/1.jpg','vert-blind/warna/chaos-5000/04-silver-white.jpg',0,696500,NULL,'Vertical Blind CHAOS 5000','1000x1000','Silver',NULL,NULL),
(94,5,NULL,'BEN SERIES',NULL,'vert-blind/1.jpg','vert-blind/warna/ben-series/01-forsythia.jpg',0,841500,NULL,'Vertical Blind BEN SERIES','1000x1000','Forsythia','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-vertical-ben-series-uk-60x120-cm-forsythia','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3eaf2m5-jual-roller-blind-s-plus-vertical-ben-series-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(95,5,NULL,'BEN SERIES',NULL,'vert-blind/1.jpg','vert-blind/warna/ben-series/02-blue.jpg',0,841500,NULL,'Vertical Blind BEN SERIES','1000x1000','Blue','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-vertical-ben-series-uk-60x120-cm-forsythia','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3eaf2m5-jual-roller-blind-s-plus-vertical-ben-series-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(96,5,NULL,'BEN SERIES',NULL,'vert-blind/1.jpg','vert-blind/warna/ben-series/03-rosewood.jpg',0,841500,NULL,'Vertical Blind BEN SERIES','1000x1000','Rose Wood','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-vertical-ben-series-uk-60x120-cm-forsythia','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3eaf2m5-jual-roller-blind-s-plus-vertical-ben-series-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(98,5,NULL,'STRAW',NULL,'vert-blind/1.jpg','vert-blind/warna/straw/01-brown.jpg',0,874000,NULL,'Vertical Blind STRAW','1000x1000','Brown','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-vertical-straw-uk-60x120-cm-beige','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3eaje74-jual-roller-blind-s-plus-vertical-straw-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(99,5,NULL,'STRAW',NULL,'vert-blind/1.jpg','vert-blind/warna/straw/02-beige.jpg',0,874000,NULL,'Vertical Blind STRAW','1000x1000','Beige','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-vertical-straw-uk-60x120-cm-beige','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3eaje74-jual-roller-blind-s-plus-vertical-straw-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(100,5,NULL,'GV00501',NULL,'vert-blind/1.jpg','vert-blind/warna/gv/01.jpg',0,484000,NULL,'Vertical Blind GV00501','1000x1000','White','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-vertical-gv00501-uk-60x120-cm-yellow','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3eam1j7-jual-roller-blind-s-plus-vertical-gv00501-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(101,5,NULL,'GV00501',NULL,'vert-blind/1.jpg','vert-blind/warna/gv/02.jpg',0,484000,NULL,'Vertical Blind GV00501','1000x1000','Green','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-vertical-gv00501-uk-60x120-cm-yellow','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3eam1j7-jual-roller-blind-s-plus-vertical-gv00501-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(102,5,NULL,'GV00501',NULL,'vert-blind/1.jpg','vert-blind/warna/gv/03.jpg',0,484000,NULL,'Vertical Blind GV00501','1000x1000','Blue','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-vertical-gv00501-uk-60x120-cm-yellow','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3eam1j7-jual-roller-blind-s-plus-vertical-gv00501-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(103,6,NULL,'WOOD 50MM',NULL,'wood-blind/1.jpg','wood-blind/warna/horizontal-wood/01-LH-113.jpg',0,1119800,NULL,'Horizontal Wood WOOD 50MM','1000x1000','LH-113','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-horizontal-wood-uk-90x180-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d8vdm7-jual-roller-blind-s-plus-horizontal-wood-uk-90x180-cm?from=product_owner&product_owner=normal_seller'),
(104,6,NULL,'WOOD 50MM',NULL,'wood-blind/1.jpg','wood-blind/warna/horizontal-wood/02-LH-1017.jpg',0,1119800,NULL,'Horizontal Wood WOOD 50MM','1000x1000','LH-1017','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-horizontal-wood-uk-90x180-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d8vdm7-jual-roller-blind-s-plus-horizontal-wood-uk-90x180-cm?from=product_owner&product_owner=normal_seller'),
(105,6,NULL,'WOOD 50MM',NULL,'wood-blind/1.jpg','wood-blind/warna/horizontal-wood/03-LH-1016.jpg',0,1119800,NULL,'Horizontal Wood WOOD 50MM','1000x1000','LH-1016','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-horizontal-wood-uk-90x180-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d8vdm7-jual-roller-blind-s-plus-horizontal-wood-uk-90x180-cm?from=product_owner&product_owner=normal_seller'),
(106,6,NULL,'WOOD 50MM',NULL,'wood-blind/1.jpg','wood-blind/warna/horizontal-wood/04-LH-184.jpg',0,1119800,NULL,'Horizontal Wood WOOD 50MM','1000x1000','LH-184','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-horizontal-wood-uk-90x180-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d8vdm7-jual-roller-blind-s-plus-horizontal-wood-uk-90x180-cm?from=product_owner&product_owner=normal_seller'),
(107,6,NULL,'WOOD 50MM',NULL,'wood-blind/1.jpg','wood-blind/warna/horizontal-wood/05-LH-1012.jpg',0,1119800,NULL,'Horizontal Wood WOOD 50MM','1000x1000','LH-1012','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-horizontal-wood-uk-90x180-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d8vdm7-jual-roller-blind-s-plus-horizontal-wood-uk-90x180-cm?from=product_owner&product_owner=normal_seller'),
(108,7,NULL,'ONE TONE',NULL,'honeycomb/1.jpg','honeycomb/warna/honeycomb-one-tone/01-B-006-Peach-Skin.jpg',0,645300,NULL,'Honeycomb ONE TONE','1000x1000','B-006 PEACH SKIN','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-honeycomb-one-tone-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d8py6x-jual-roller-blind-s-plus-honeycomb-one-tone-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(109,7,NULL,'ONE TONE',NULL,'honeycomb/1.jpg','honeycomb/warna/honeycomb-one-tone/02-B-043-Lemon.jpg',0,645300,NULL,'Honeycomb ONE TONE','1000x1000','B-043 LEMON','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-honeycomb-one-tone-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d8py6x-jual-roller-blind-s-plus-honeycomb-one-tone-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(110,7,NULL,'ONE TONE',NULL,'honeycomb/1.jpg','honeycomb/warna/honeycomb-one-tone/03-B-012-Dark-Cocoa.jpg',0,645300,NULL,'Honeycomb ONE TONE','1000x1000','B-012 DARK COCOA','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-honeycomb-one-tone-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d8py6x-jual-roller-blind-s-plus-honeycomb-one-tone-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(111,7,NULL,'ONE TONE',NULL,'honeycomb/1.jpg','honeycomb/warna/honeycomb-one-tone/04-B-20-Wine.jpg',0,645300,NULL,'Honeycomb ONE TONE','1000x1000','B-20 WINE','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-honeycomb-one-tone-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d8py6x-jual-roller-blind-s-plus-honeycomb-one-tone-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(112,7,NULL,'TWO TONE',NULL,'honeycomb/1.jpg','honeycomb/warna/honeycomb-two-tone/01-A-006-Peach-Skin.jpg',0,663300,NULL,'Honeycomb TWO TONE','1000x1000','A-006 PEACH SKIN','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-honeycomb-two-tone-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d8rm7m-jual-roller-blind-s-plus-honeycomb-two-tone-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(113,7,NULL,'TWO TONE',NULL,'honeycomb/1.jpg','honeycomb/warna/honeycomb-two-tone/02-A-012-Dark-Cocoa.jpg',0,663300,NULL,'Honeycomb TWO TONE','1000x1000','A-012 DARK COCOA','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-honeycomb-two-tone-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d8rm7m-jual-roller-blind-s-plus-honeycomb-two-tone-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(114,7,NULL,'TWO TONE',NULL,'honeycomb/1.jpg','honeycomb/warna/honeycomb-two-tone/03-A-20-Wine.jpg',0,663300,NULL,'Honeycomb TWO TONE','1000x1000','A-20 WINE','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-honeycomb-two-tone-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d8rm7m-jual-roller-blind-s-plus-honeycomb-two-tone-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(115,7,NULL,'TWO TONE',NULL,'honeycomb/1.jpg','honeycomb/warna/honeycomb-two-tone/04-A-027-Mose-Green.jpg',0,663300,NULL,'Honeycomb TWO TONE','1000x1000','A-027 MOSE GREEN','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-honeycomb-two-tone-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d8rm7m-jual-roller-blind-s-plus-honeycomb-two-tone-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(116,7,NULL,'TWO TONE',NULL,'honeycomb/1.jpg','honeycomb/warna/honeycomb-two-tone/05-A-034-Blue.jpg',0,663300,NULL,'Honeycomb TWO TONE','1000x1000','A-034 BLUE','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-honeycomb-two-tone-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d8rm7m-jual-roller-blind-s-plus-honeycomb-two-tone-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(117,7,NULL,'TWO TONE',NULL,'honeycomb/1.jpg','honeycomb/warna/honeycomb-two-tone/06-A-041-Grey.jpg',0,663300,NULL,'Honeycomb TWO TONE','1000x1000','A-041 GREY','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-honeycomb-two-tone-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d8rm7m-jual-roller-blind-s-plus-honeycomb-two-tone-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(118,7,NULL,'BLACKOUT',NULL,'honeycomb/1.jpg','honeycomb/warna/blackout/01-Opa-902-ivory.jpg',0,1037300,NULL,'Honeycomb BLACKOUT','1000x1000','OPA-902 IVORY','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-honeycomb-blackout-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d8t3s8-jual-roller-blind-s-plus-hoeycomb-blackout-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(119,7,NULL,'BLACKOUT',NULL,'honeycomb/1.jpg','honeycomb/warna/blackout/02-Opa-905-Ice-Blue.jpg',0,1037300,NULL,'Honeycomb BLACKOUT','1000x1000','OPA-095 ICE BLUE','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-honeycomb-blackout-uk-60x120-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d8t3s8-jual-roller-blind-s-plus-hoeycomb-blackout-uk-60x120-cm?from=product_owner&product_owner=normal_seller'),
(120,8,NULL,'12,5MM (Patternless)',NULL,'alumunium/1.jpg','alumunium/warna/12-55mm-patternless/01-White-1211.jpg',0,2877600,NULL,'Horizontal Alumunium 12,5MM (Patternless)','1000x1000','WHITE (1211)','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-horizontal-aluminium-12-5-mm-patternless-uk-70x150-white','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3e9i5b1-jual-roller-blind-s-plus-horizontal-aluminium-12-5-mm-patternless-uk-70x150-cm?from=product_owner&product_owner=normal_seller'),
(121,8,NULL,'12,5MM (Patternless)',NULL,'alumunium/1.jpg','alumunium/warna/12-55mm-patternless/02-Silver-1243.jpg',0,2877600,NULL,'Horizontal Alumunium 12,5MM (Patternless)','1000x1000','SILVER (1234)','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-horizontal-aluminium-12-5-mm-patternless-uk-70x150-white','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3e9i5b1-jual-roller-blind-s-plus-horizontal-aluminium-12-5-mm-patternless-uk-70x150-cm?from=product_owner&product_owner=normal_seller'),
(122,8,NULL,'12,5MM (Patternless)',NULL,'alumunium/1.jpg','alumunium/warna/12-55mm-patternless/03-Gold-12906.jpg',0,2877600,NULL,'Honeycomb 12,5MM (Patternless)','1000x1000','GOLD (12906)','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-horizontal-aluminium-12-5-mm-patternless-uk-70x150-white','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3e9i5b1-jual-roller-blind-s-plus-horizontal-aluminium-12-5-mm-patternless-uk-70x150-cm?from=product_owner&product_owner=normal_seller'),
(123,8,NULL,'25MM (woodlook)',NULL,'alumunium/1.jpg','alumunium/warna/25-00mm-woodlook/01-L-Brown-2207.jpg',0,767300,NULL,'Horizontal Alumunium 25MM (woodlook)','1000x1000','L. WOOD (2207)','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-horizontal-aluminium-25mm-woodlook-uk-70x150-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d8vdm7-jual-roller-blind-s-plus-horizontal-wood-uk-90x180-cm?from=product_owner&product_owner=normal_seller'),
(124,8,NULL,'25MM (woodlook)',NULL,'alumunium/1.jpg','alumunium/warna/25-00mm-woodlook/02-D-Brown-2207.jpg',0,767300,NULL,'Horizontal Alumunium 25MM (woodlook)','1000x1000','WOOD (2206)','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-horizontal-aluminium-25mm-woodlook-uk-70x150-cm','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3d8vdm7-jual-roller-blind-s-plus-horizontal-wood-uk-90x180-cm?from=product_owner&product_owner=normal_seller'),
(125,8,NULL,'25MM (Patternless)',NULL,'alumunium/1.jpg','alumunium/warna/25-00mm-patternless/07-Brown-6015.jpg',0,533500,NULL,'Horizontal Alumunium 25MM (Patternless)','1000x1000','BROWN (6015)','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-horizontal-aluminium-25-mm-patternless-uk-70x150cm-brown','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3e9llsk-jual-roller-blind-s-plus-horizontal-aluminium-25-mm-patternless-uk-70x150-cm?from=product_owner&product_owner=normal_seller'),
(126,8,NULL,'25MM (Patternless)',NULL,'alumunium/1.jpg','alumunium/warna/25-00mm-patternless/06-Sky-Blue-6009.jpg',0,533500,NULL,'Horizontal Alumunium 25MM (Patternless)','1000x1000','SKY BLUE (60009)','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-horizontal-aluminium-25-mm-patternless-uk-70x150cm-brown','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3e9llsk-jual-roller-blind-s-plus-horizontal-aluminium-25-mm-patternless-uk-70x150-cm?from=product_owner&product_owner=normal_seller'),
(127,8,NULL,'25MM (Patternless)',NULL,'alumunium/1.jpg','alumunium/warna/25-00mm-patternless/01-Milky-White-6001.jpg',0,533500,NULL,'Horizontal Alumunium 25MM (Patternless)','1000x1000','MILKY WHITE (6001)','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-horizontal-aluminium-25-mm-patternless-uk-70x150cm-brown','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3e9llsk-jual-roller-blind-s-plus-horizontal-aluminium-25-mm-patternless-uk-70x150-cm?from=product_owner&product_owner=normal_seller'),
(128,8,NULL,'25MM (Patternless)',NULL,'alumunium/1.jpg','alumunium/warna/25-00mm-patternless/04-Pink-2609.jpg',0,533500,NULL,'Horizontal Alumunium 25MM (Patternless)','1000x1000','PINK (2609)','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-horizontal-aluminium-25-mm-patternless-uk-70x150cm-brown','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3e9llsk-jual-roller-blind-s-plus-horizontal-aluminium-25-mm-patternless-uk-70x150-cm?from=product_owner&product_owner=normal_seller'),
(129,8,NULL,'25MM (Patternless)',NULL,'alumunium/1.jpg','alumunium/warna/25-00mm-patternless/02-Silver-2600.jpg',0,533500,NULL,'Horizontal Alumunium 25MM (Patternless)','1000x1000','SILVER (DSL 26000)','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-horizontal-aluminium-25-mm-patternless-uk-70x150cm-brown','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3e9llsk-jual-roller-blind-s-plus-horizontal-aluminium-25-mm-patternless-uk-70x150-cm?from=product_owner&product_owner=normal_seller'),
(130,8,NULL,'25MM (Patternless)',NULL,'alumunium/1.jpg','alumunium/warna/25-00mm-patternless/03-Ivory-2602.jpg',0,533500,NULL,'Horizontal Alumunium 25MM (Patternless)','1000x1000','LIGHT YELLOW (2602)','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-horizontal-aluminium-25-mm-patternless-uk-70x150cm-brown','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3e9llsk-jual-roller-blind-s-plus-horizontal-aluminium-25-mm-patternless-uk-70x150-cm?from=product_owner&product_owner=normal_seller'),
(131,8,NULL,'25MM (Patternless)',NULL,'alumunium/1.jpg','alumunium/warna/25-00mm-patternless/05-Mint-2606.jpg',0,533500,NULL,'Horizontal Alumunium 25MM (Patternless)','1000x1000','MINT (2606','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-horizontal-aluminium-25-mm-patternless-uk-70x150cm-brown','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3e9llsk-jual-roller-blind-s-plus-horizontal-aluminium-25-mm-patternless-uk-70x150-cm?from=product_owner&product_owner=normal_seller'),
(132,8,NULL,'35MM (Perforated)',NULL,'alumunium/1.jpg','alumunium/warna/35-00mm-perforated/01-Silver-3050.jpg',0,671000,NULL,'Horizontal Alumunium 35MM (Perforated)','1000x1000','SILVER PERFORATED','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-horizontal-aluminium-35-mm-perforated-uk-70x150-silver','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3e9xcb9-jual-roller-blind-s-plus-horizontal-aluminium-35-mm-perforated-uk-70x150-cm?from=product_owner&product_owner=normal_seller'),
(133,8,NULL,'35MM (Perforated)',NULL,'alumunium/1.jpg','alumunium/warna/35-00mm-perforated/02-Gold-3010.jpg',0,671000,NULL,'Horizontal Alumunium 35MM (Perforated)','1000x1000','GOLD PERFORATED','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-horizontal-aluminium-35-mm-perforated-uk-70x150-silver','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3e9xcb9-jual-roller-blind-s-plus-horizontal-aluminium-35-mm-perforated-uk-70x150-cm?from=product_owner&product_owner=normal_seller'),
(134,8,NULL,'35MM (Patternless)',NULL,'alumunium/1.jpg','alumunium/warna/35-00mm-patternless/02-Matt-Silver-3500.jpg',0,556600,NULL,'Horizontal Alumunium 35MM (Patternless)','1000x1000','SILVER SHINE','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-horizontal-aluminium-35-mm-patternless-uk-70x150cm-gold','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3e9pg0j-jual-roller-blind-s-plus-horizontal-aluminium-35-mm-patternless-uk-70x150-cm?from=product_owner&product_owner=normal_seller'),
(135,8,NULL,'35MM (Patternless)',NULL,'alumunium/1.jpg','alumunium/warna/35-00mm-patternless/05-Gold-3510.jpg',0,556600,NULL,'Horizontal Alumunium 35MM (Patternless)','1000x1000','GOLD SHINE','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-horizontal-aluminium-35-mm-patternless-uk-70x150cm-gold','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3e9pg0j-jual-roller-blind-s-plus-horizontal-aluminium-35-mm-patternless-uk-70x150-cm?from=product_owner&product_owner=normal_seller'),
(136,8,NULL,'35MM (Patternless)',NULL,'alumunium/1.jpg','alumunium/warna/35-00mm-patternless/04-Silver-3511.jpg',0,556600,NULL,'Horizontal Alumunium 35MM (Patternless)','1000x1000','SILVER','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-horizontal-aluminium-35-mm-patternless-uk-70x150cm-gold','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3e9pg0j-jual-roller-blind-s-plus-horizontal-aluminium-35-mm-patternless-uk-70x150-cm?from=product_owner&product_owner=normal_seller'),
(137,8,NULL,'35MM (Patternless)',NULL,'alumunium/1.jpg','alumunium/warna/35-00mm-patternless/01-Milky-White-3501.jpg',0,556600,NULL,'Horizontal Alumunium 35MM (Patternless)','1000x1000','WHITE','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-horizontal-aluminium-35-mm-patternless-uk-70x150cm-gold','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3e9pg0j-jual-roller-blind-s-plus-horizontal-aluminium-35-mm-patternless-uk-70x150-cm?from=product_owner&product_owner=normal_seller'),
(138,8,NULL,'35MM (Patternless)',NULL,'alumunium/1.jpg','alumunium/warna/35-00mm-patternless/03-Black-3520.jpg',0,708400,NULL,'Horizontal Alumunium 35MM (Patternless)','1000x1000','BLACK','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-horizontal-aluminium-35-mm-patternless-uk-70x150cm-gold','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3e9pg0j-jual-roller-blind-s-plus-horizontal-aluminium-35-mm-patternless-uk-70x150-cm?from=product_owner&product_owner=normal_seller'),
(139,8,NULL,'35MM Dot',NULL,'alumunium/1.jpg','alumunium/warna/35-00mm-dot/01-Silver-3808.jpg',0,657800,NULL,'Horizontal Alumunium 35MM Dot','1000x1000','SILVER DOT','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-horizontal-aluminium-35-mm-dot-uk-70x150-cm-silver','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3e9n606-jual-roller-blind-s-plus-horizontal-aluminium-35-mm-dot-uk-70x150-cm?from=product_owner&product_owner=normal_seller'),
(140,8,NULL,'35MM Dot',NULL,'alumunium/1.jpg','alumunium/warna/35-00mm-dot/02-Gold-3810.jpg',0,657800,NULL,'Horizontal Alumunium 35MM Dot','1000x1000','GOLD DOT','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-horizontal-aluminium-35-mm-dot-uk-70x150-cm-silver','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3e9n606-jual-roller-blind-s-plus-horizontal-aluminium-35-mm-dot-uk-70x150-cm?from=product_owner&product_owner=normal_seller'),
(141,9,'classic-2','classic-2','pintu/classic-2-20.jpg','pintu/classic-2-20.jpg','warna_new/19.jpg',0,657800,NULL,'Pintu ABS','1000x1000','BROWN MOTIF','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-horizontal-aluminium-35-mm-dot-uk-70x150-cm-silver','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3e9n606-jual-roller-blind-s-plus-horizontal-aluminium-35-mm-dot-uk-70x150-cm?from=product_owner&product_owner=normal_seller'),
(142,9,'classic-2','classic-2','','pintu/classic-2-20.jpg','warna_new/10.jpg',0,657800,NULL,'Pintu ABS','1000x1000','BROWN','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-horizontal-aluminium-35-mm-dot-uk-70x150-cm-silver','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3e9n606-jual-roller-blind-s-plus-horizontal-aluminium-35-mm-dot-uk-70x150-cm?from=product_owner&product_owner=normal_seller'),
(143,9,'classic-1','classic-1','pintu/classic-1-50.jpg','pintu/classic-1-50.jpg','warna_new/veronastone-57.jpg',0,657800,NULL,'Pintu ABS','1000x1000','WHITE',NULL,NULL),
(144,9,'classic-1','classic-1','','pintu/classic-1-50.jpg','warna_new/10.jpg',0,657800,NULL,'Pintu ABS','1000x1000','BLACK',NULL,NULL),
(145,9,'classic-1','classic-1','','pintu/classic-1-50.jpg','warna_new/20.jpg',0,657800,NULL,'Pintu ABS','1000x1000','BROWN',NULL,NULL),
(146,9,'classic-1','classic-1',NULL,'pintu/classic-1-50.jpg','warna_new/59.jpg',NULL,NULL,NULL,NULL,'1000x1000','GRAY',NULL,NULL),
(147,9,'classic-1','classic-1',NULL,'pintu/classic-1-50.jpg','warna_new/27.jpg',0,NULL,NULL,'Pintu ABS','1000x1000','YELLOW',NULL,NULL),
(148,9,'classic-1','classic-1',NULL,'pintu/classic-1-50.jpg','warna_new/80.jpg',NULL,NULL,NULL,NULL,'1000x1000','BROWN 2',NULL,NULL),
(149,9,'artdoor-c1-30','artdoor-c1-30','pintu/artdoor-c1-30.jpg','pintu/artdoor-c1-30.jpg','warna_new/59.jpg',NULL,NULL,NULL,NULL,'1000x1000','GRAY',NULL,NULL),
(150,9,'artdoor-c1-30','artdoor-c1-30','','pintu/artdoor-c1-30.jpg','warna_new/20.jpg',NULL,NULL,NULL,NULL,'1000x1000','BROWN',NULL,NULL),
(151,9,'artdoor-c1-30','artdoor-c1-30','','pintu/artdoor-c1-30.jpg','warna_new/27.jpg',NULL,NULL,NULL,NULL,'1000x1000','YELLOW',NULL,NULL),
(152,9,'grande-pga-1090','grande-1','pintu/grande.jpg','pintu/grande.jpg','warna_new/50.jpg',NULL,NULL,NULL,'Pintu Upvc','1000x1000','WHITE',NULL,NULL),
(159,10,'window-003','window-003','window/window3.jpg','window/window3.jpg','warna_new/60.jpg',NULL,NULL,NULL,NULL,'1000x1000','BROWN',NULL,NULL),
(153,9,'premium-p2-70','premium-1','pintu/premium.jpg','pintu/premium.jpg','warna_new/50.jpg',NULL,NULL,NULL,'Pintu Upvc','1000x1000','WHITE',NULL,NULL),
(158,10,'window-002','window-002','window/window2.jpg','window/window2.jpg','warna_new/10.jpg',NULL,NULL,NULL,NULL,'1000x1000','BROWN',NULL,NULL),
(154,9,'artdoor-n2-50','artdoor-n2-50','pintu/artdoor-n2-50.jpg','pintu/artdoor-n2-50.jpg','warna_new/50.jpg',NULL,NULL,NULL,NULL,'1000x1000','WHITE',NULL,NULL),
(155,9,'artdoor-p3-59','artdoor-p3-59','pintu/artdoor-p3-59.jpg','pintu/artdoor-p3-59.jpg','warna_new/59.jpg',NULL,NULL,NULL,NULL,'1000x1000','GRAY',NULL,NULL),
(156,9,'artdoor-r7-60','artdoor-r7-60','pintu/artdoor-r7-60.jpg','pintu/artdoor-r7-60.jpg','warna_new/60.jpg',NULL,NULL,NULL,NULL,'1000x1000','BROWN',NULL,NULL),
(157,10,'window-001','window-001','window/window.jpg','window/window.jpg','warna_new/60.jpg',NULL,657800,NULL,NULL,'1000x1000','WHITE',NULL,NULL),
(160,10,'window-004','window-004','window/window4.jpg','window/window4.jpg','warna_new/50.jpg',NULL,657800,NULL,NULL,'1000x1000','BROWN',NULL,NULL),
(161,10,'window-005','window-005','window/window5.jpg','window/window5.jpg','warna_new/60.jpg',NULL,657800,NULL,NULL,'1000x1000','GRAY',NULL,NULL),
(162,10,'window-006','window-006','window/window6.jpg','window/window6.jpg','warna_new/59.jpg',NULL,657800,NULL,NULL,'1000x1000','BROWN',NULL,NULL),
(163,11,'pvc-toilet-001','pvc-toilet-001','interior/pvc-toilet-001.jpg','interior/pvc-toilet-001.jpg','warna_new/59.jpg',NULL,657800,NULL,NULL,'1000x1000','BROWN',NULL,NULL),
(164,11,'kichen-001','kichen-001','interior/kichen-001.jpg','interior/kichen-001.jpg','warna_new/59.jpg',NULL,657800,NULL,NULL,'1000x1000','BROWN',NULL,NULL),
(165,11,'kichen-002','kichen-002','interior/kichen-002.jpg','interior/kichen-002.jpg','warna_new/60.jpg',NULL,657800,NULL,NULL,'1000x1000','GRAY',NULL,NULL),
(166,11,'pvc-toilet-002','pvc-toilet-002','interior/pvc-toilet-002.jpg','interior/pvc-toilet-002.jpg','warna_new/60.jpg',NULL,657800,NULL,NULL,'1000x1000','GRAY',NULL,NULL),
(167,12,'wpc-001','wpc-001','exterior/wpc-001.jpg','exterior/wpc-001.jpg','warna_new/60.jpg',NULL,657800,NULL,NULL,'1000x1000','GRAY',NULL,NULL),
(168,12,'wpc-002','wpc-002','exterior/wpc-002.jpeg','exterior/wpc-002.jpeg','warna_new/60.jpg',NULL,657800,NULL,NULL,'1000x1000','GRAY',NULL,NULL),
(169,13,'gagang-pintu-001','gagang-pintu-001','aksesoris/gagang-pintu.jpg','aksesoris/gagang-pintu.jpg','warna_new/60.jpg',NULL,657800,NULL,NULL,'1000x1000',NULL,NULL,NULL),
(170,14,'masker-dewasa-001','masker-dewasa-001','masker/masker-dewasa-001.jpg','masker/masker-dewasa-001.jpg','warna_new/60.jpg',NULL,657800,NULL,NULL,'1000x1000',NULL,NULL,NULL),
(171,14,'masker-anak-001','masker-anak-001','masker/masker-dewasa-002.jpg','masker/masker-dewasa-002.jpg','warna_new/60.jpg',NULL,657800,NULL,NULL,'1000x1000',NULL,NULL,NULL);

/*Table structure for table `tbl_rekan` */

DROP TABLE IF EXISTS `tbl_rekan`;

CREATE TABLE `tbl_rekan` (
  `rekan_id` int(20) NOT NULL AUTO_INCREMENT,
  `rekan_nama` varchar(50) DEFAULT NULL,
  `rekan_logo` varchar(200) DEFAULT NULL,
  `rekan_tanggal` timestamp NULL DEFAULT current_timestamp(),
  UNIQUE KEY `rekan_id` (`rekan_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

/*Data for the table `tbl_rekan` */

insert  into `tbl_rekan`(`rekan_id`,`rekan_nama`,`rekan_logo`,`rekan_tanggal`) values 
(1,'Partner 1','c893cf243f34a436178a26c056a2c405.jpg','2020-01-10 03:01:04'),
(2,'Partner 2','e7c7fc5051e6c920e222be0257e568c5.jpg','2020-01-10 03:37:37'),
(3,'Partner 3','5f43580d4356387a9125b7785296e956.jpg','2020-01-10 03:38:06'),
(4,'Partner 4','1a8e122a1acf6ab4891c33f4acff95de.jpg','2020-01-10 03:38:14'),
(5,'Partner 5','db090f9606c6fd832ff087971d30b7c5.jpg','2020-01-10 03:38:23'),
(6,'Partner 6','e966a85470b6e2dcabb0b1a715a5f1d3.jpg','2020-01-10 03:38:33'),
(7,'Partner 7','9f310c654fac735054a3a925648b1b95.jpg','2020-01-10 03:38:41'),
(8,'Partner 8','2abbceeeeb1a218fe335d22c5ca9bf33.jpg','2020-01-10 03:38:52'),
(9,'Partner 9','a64a55dc8e01a77b6e6336a9218c9820.jpg','2020-01-10 03:38:59'),
(10,'Partner 10','a1dd1b2ac39d8a56d192e21ea172ba7f.jpg','2020-01-10 03:39:17'),
(11,'Partner 11','708c08760ecd74173a30cc3f3b3a6010.jpg','2020-01-10 03:39:25');

/*Table structure for table `tbl_slider` */

DROP TABLE IF EXISTS `tbl_slider`;

CREATE TABLE `tbl_slider` (
  `slider_id` int(11) NOT NULL AUTO_INCREMENT,
  `slider_ket` varchar(200) DEFAULT NULL,
  `slider_gambar` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`slider_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

/*Data for the table `tbl_slider` */

/*Table structure for table `tbl_splus_rekening` */

DROP TABLE IF EXISTS `tbl_splus_rekening`;

CREATE TABLE `tbl_splus_rekening` (
  `id_rekening` int(5) NOT NULL AUTO_INCREMENT,
  `nama_bank` varchar(50) NOT NULL,
  `no_rekening` varchar(50) NOT NULL,
  `pemilik_rekening` varchar(150) NOT NULL,
  PRIMARY KEY (`id_rekening`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_splus_rekening` */

insert  into `tbl_splus_rekening`(`id_rekening`,`nama_bank`,`no_rekening`,`pemilik_rekening`) values 
(1,'BNI','268 302 961','PT SMART TECHTEX'),
(2,'MANDIRI','134 000 734 3691','PT SMART TECHTEX'),
(3,'BCA','3041 777 000','PT SMART TECHTEX');

/*Table structure for table `tbl_subkategori` */

DROP TABLE IF EXISTS `tbl_subkategori`;

CREATE TABLE `tbl_subkategori` (
  `subkategori_id` int(11) NOT NULL AUTO_INCREMENT,
  `subkategori_nama` varchar(50) DEFAULT NULL,
  `subkategori_deskripsi` text NOT NULL,
  `subkategori_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `subkategori_pengguna_id` int(11) DEFAULT NULL,
  `subkategori_author` varchar(60) DEFAULT NULL,
  `subkategori_count` int(11) DEFAULT 0,
  `subkategori_cover` varchar(40) DEFAULT NULL,
  `produk_kategori` int(11) NOT NULL,
  PRIMARY KEY (`subkategori_id`),
  KEY `album_pengguna_id` (`subkategori_pengguna_id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

/*Data for the table `tbl_subkategori` */

insert  into `tbl_subkategori`(`subkategori_id`,`subkategori_nama`,`subkategori_deskripsi`,`subkategori_tanggal`,`subkategori_pengguna_id`,`subkategori_author`,`subkategori_count`,`subkategori_cover`,`produk_kategori`) values 
(1,'PINTU ABS','ABS','2022-06-14 09:27:38',22,'itakumala',0,'ba403cdc22af473a1eb5022bdc360641.jpg',1),
(2,'PINTU UPVC','UPVC','2022-06-14 09:28:16',22,'itakumala',0,'619974720f3e820adf464d0ae8bd19c8.jpg',1),
(3,'PINTU NAMO','NAMO','2022-06-14 09:41:31',22,'itakumala',0,'81338751e05603ba1ace9306a6e2e811.jpg',1),
(4,'JENDELA UPVC','UPVC','2022-06-15 08:55:14',22,'itakumala',0,'6dd8578b3dcb280e14192eb50ba391f0.jpg',2),
(5,'PLAFON UPVC','Plafon Upvc','2022-06-15 08:56:16',22,'itakumala',0,'ea814d326cecc4830606e201db81e5aa.jpg',3),
(6,'SUN SHADE','sun shade','2022-06-15 08:56:49',22,'itakumala',0,'3d7721fb0de21d71478dbd1bbe5fdbe3.jpg',3),
(7,'SOLID SURFACE','solid surface','2022-06-15 08:57:24',22,'itakumala',0,'9603196bb00ba5b25a7239c3b3270cc0.jpg',3),
(8,'KITCHEN SET','Kitchen Set','2022-06-15 08:57:58',22,'itakumala',0,'b58286578f23b60a79e6500d7de8e24b.jpg',3),
(9,'PVC FOAM BOARD','PVC FOAM BOARD','2022-06-15 08:58:18',22,'itakumala',0,'9e293e231be076b5f333d3567ce1d19b.jpg',3),
(10,'VINYL FLOORING','VINYL FLOORING','2022-06-15 08:59:22',22,'itakumala',0,'a11c125fbc80f018aab1d89d970c739a.jpg',3),
(11,'AMBALAN (Wall Shelving)','AMBALAN (Wall Shelving)','2022-06-15 08:59:39',22,'itakumala',0,'bab1afa27e0524472bc3fc3711482095.jpg',3),
(12,'WPC','WPC','2022-06-15 09:00:23',22,'itakumala',0,'3e8c1ff7473d0061492fe047c4467d62.jpg',4),
(13,'PARASOL','PARASOL','2022-06-15 09:00:43',22,'itakumala',0,'ccd403f6da5ec714c51ad83b9794373f.jpg',4),
(14,'MASKER DEWASA','MASKER DEWASA','2022-06-15 09:01:09',22,'itakumala',0,'5353fd085e5618ce23670c98a5588a5d.jpg',5),
(15,'MASKER KIDS','MASKER KIDS','2022-06-15 09:01:29',22,'itakumala',0,'b5aecbb653f2d2b757c333ebd203b07a.jpg',5),
(16,'AKSESORIS PINTU','AKSESORIS PINTU','2022-06-15 09:02:09',22,'itakumala',0,'8c3ba3c78572261147ca4e98fd384907.png',6),
(17,'AKSESORIS JENDELA','AKSESORIS JENDELA','2022-06-15 09:03:12',22,'itakumala',0,'1416a15b6b29867e1ebd865e98bdbdaf.png',6),
(18,'AKSESORIS KITCHEN SET','AKSESORIS KITCHEN SET','2022-06-15 09:03:41',22,'itakumala',0,'8d25059289dea21ff5b03fe0a9d63419.png',6),
(19,'AKSESORIS AUTOMATIC','AKSESORIS AUTOMATIC','2022-06-15 09:04:05',22,'itakumala',0,'0c7fbf5b4ece42d78c3c0204dffe8692.png',6),
(20,'ACC LAINNYA','ACC LAINNYA','2022-06-15 09:04:24',22,'itakumala',0,'40d05affcf2a58aaca01c778fa95a20a.png',6);

/*Table structure for table `tbl_subkategoriproduk` */

DROP TABLE IF EXISTS `tbl_subkategoriproduk`;

CREATE TABLE `tbl_subkategoriproduk` (
  `id_kategori_produk` int(11) NOT NULL,
  `id_subkategori_produk` int(11) NOT NULL AUTO_INCREMENT,
  `nama_subkategori` varchar(255) NOT NULL,
  `subkategori_seo` varchar(255) NOT NULL,
  PRIMARY KEY (`id_subkategori_produk`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_subkategoriproduk` */

insert  into `tbl_subkategoriproduk`(`id_kategori_produk`,`id_subkategori_produk`,`nama_subkategori`,`subkategori_seo`) values 
(1,1,'Pintu ABS','pintu_abs'),
(1,2,'Pintu UPVC','Pintu_UPVC'),
(1,3,'Pintu Namo','Pintu_Namo'),
(1,4,'Pintu IROOM','Pintu_IROOM'),
(2,5,'Jendela UPVC','Jendela_UPVC'),
(2,6,'Jendela IROOM','Jendela_IROOM'),
(3,7,'Plafon UPVC','Plafon_UPVC'),
(3,8,'Sun Shade','Sun_Shade'),
(3,9,'Solid Surface','Solid_Surface'),
(3,10,'Kitchen Set','Kitchen_Set'),
(3,11,'PVC Foarm Board','PVC_Foarm_Board'),
(3,12,'Vinyl Flooring','Vinyl_Flooring'),
(4,13,'WPC','WPC'),
(4,14,'Parasol','Parasol'),
(5,15,'Masker Dewasa','Masker_Dewasa'),
(5,16,'Masker Anak-anak','Masker_Anak-anak'),
(3,17,'Ambalan','ambalan'),
(6,18,'Aksesoris pintu','aksesoris_pintu'),
(6,19,'Aksesoris jendela','aksesoris_jendela'),
(6,20,'Aksesoris kichenset','aksesoris_kichenset'),
(6,21,'Aksesoris Automatic','aksesoris_Automatic'),
(6,22,'Aksesoris Acclainya','aksesoris_Acclainya');

/*Table structure for table `tbl_testimoni` */

DROP TABLE IF EXISTS `tbl_testimoni`;

CREATE TABLE `tbl_testimoni` (
  `testimoni_id` int(20) NOT NULL AUTO_INCREMENT,
  `testimoni_pelanggan_id` int(20) DEFAULT NULL,
  `testimoni_pelanggan_nama` varchar(20) DEFAULT NULL,
  `testimoni_isi` varchar(255) DEFAULT NULL,
  `testimoni_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `testimoni_gambar` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`testimoni_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

/*Data for the table `tbl_testimoni` */

insert  into `tbl_testimoni`(`testimoni_id`,`testimoni_pelanggan_id`,`testimoni_pelanggan_nama`,`testimoni_isi`,`testimoni_tanggal`,`testimoni_gambar`) values 
(1,0,'Jail','','2020-01-10 04:23:15','ea61eddae3e5708d87d0b64f2ae6d1f4.jpg');

/*Table structure for table `tbl_testing` */

DROP TABLE IF EXISTS `tbl_testing`;

CREATE TABLE `tbl_testing` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `bank_code` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `external_id` varchar(255) DEFAULT NULL,
  `account_number` varchar(255) DEFAULT NULL,
  `id_create` varchar(255) DEFAULT NULL,
  `payment_id` varchar(255) DEFAULT NULL,
  `suggested_amount` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

/*Data for the table `tbl_testing` */

insert  into `tbl_testing`(`id`,`name`,`bank_code`,`status`,`amount`,`external_id`,`account_number`,`id_create`,`payment_id`,`suggested_amount`) values 
(6,'Splus Indonesia','BRI','ACTIVE','721600','SPLUS39873','262159999484150','5e3513b95581c46003f8653b','SPLUS39873_1580536802044',NULL);

/*Table structure for table `tbl_ukuran` */

DROP TABLE IF EXISTS `tbl_ukuran`;

CREATE TABLE `tbl_ukuran` (
  `id_ukuran` int(11) NOT NULL AUTO_INCREMENT,
  `kelas_id` int(11) DEFAULT NULL,
  `varian_ukuran2` varchar(100) DEFAULT NULL,
  `nama_ukuran` varchar(100) DEFAULT NULL,
  `lebar` varchar(100) DEFAULT NULL,
  `tinggi` varchar(100) DEFAULT NULL,
  `harga` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`id_ukuran`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_ukuran` */

insert  into `tbl_ukuran`(`id_ukuran`,`kelas_id`,`varian_ukuran2`,`nama_ukuran`,`lebar`,`tinggi`,`harga`) values 
(1,1,'730 x 1960(standar)','730 x 1960 dp','730','1960',1),
(2,1,'830 x 2060(standar)','830 x 2060 dp','830','2060 ',2),
(3,1,'800 x 2000(standar+kusen)','800 x 2000 dpk','800','2000',3),
(4,1,'900 x 2100(standar+kusen)','900 x 2100 dpk','900','2100',4);

/*Table structure for table `tbl_varian_coba` */

DROP TABLE IF EXISTS `tbl_varian_coba`;

CREATE TABLE `tbl_varian_coba` (
  `varian_id` int(11) NOT NULL AUTO_INCREMENT,
  `produk_kategori` int(11) NOT NULL,
  `produk_subkategori` int(11) NOT NULL,
  `produk_kelas` int(11) NOT NULL,
  `produk_brand` int(11) NOT NULL,
  `varian_nama` varchar(150) NOT NULL,
  `varian_seo` varchar(150) NOT NULL,
  `varian_warna` varchar(150) NOT NULL,
  `varian_warna2` varchar(150) NOT NULL,
  `satuan` varchar(50) NOT NULL,
  `harga_beli` bigint(20) DEFAULT NULL,
  `harga_konsumen` decimal(10,0) DEFAULT NULL,
  `stok` int(11) NOT NULL,
  `berat` varchar(50) NOT NULL,
  `diskon` int(11) NOT NULL,
  `varian_ukuran` varchar(100) DEFAULT NULL,
  `varian_harga` bigint(20) DEFAULT NULL,
  `varian_harga_meter` decimal(10,0) DEFAULT NULL,
  `varian_jumlah` bigint(20) DEFAULT NULL,
  `varian_deskripsi` text DEFAULT NULL,
  `varian_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `varian_pengguna_id` int(11) DEFAULT NULL,
  `varian_author` varchar(60) DEFAULT NULL,
  `varian_count` int(11) DEFAULT 0,
  `varian_cover` varchar(40) DEFAULT NULL,
  `varian_warna_cover` varchar(40) DEFAULT NULL,
  `varian_warna_cover2` varchar(100) DEFAULT NULL,
  `status` enum('0','1') NOT NULL,
  PRIMARY KEY (`varian_id`),
  KEY `album_pengguna_id` (`varian_pengguna_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1000 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

/*Data for the table `tbl_varian_coba` */

insert  into `tbl_varian_coba`(`varian_id`,`produk_kategori`,`produk_subkategori`,`produk_kelas`,`produk_brand`,`varian_nama`,`varian_seo`,`varian_warna`,`varian_warna2`,`satuan`,`harga_beli`,`harga_konsumen`,`stok`,`berat`,`diskon`,`varian_ukuran`,`varian_harga`,`varian_harga_meter`,`varian_jumlah`,`varian_deskripsi`,`varian_tanggal`,`varian_pengguna_id`,`varian_author`,`varian_count`,`varian_cover`,`varian_warna_cover`,`varian_warna_cover2`,`status`) values 
(1,1,1,1,1,'classic-1-50','','50','','pcs',0,2000000,25,'0',0,'2000x1000',0,0,0,'classic-1-50','2022-06-17 08:07:18',22,'itakumala',0,'3d0ab419af8f79fb657e7342ef3dd3eb.jpg','50.jpg','\\\\N','1'),
(2,1,1,1,1,'classic-1-50','','20','','pcs',0,1500000,25,'0',0,'3000x1000',0,0,0,'classic-1-50','2022-06-21 11:13:03',22,'itakumala',0,'3d0ab419af8f79fb657e7342ef3dd3eb.jpg','20.jpg','\\\\N','0'),
(3,1,1,1,1,'classic-2-20','','20','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'classic-2-20','2022-06-20 15:29:54',22,'itakumala',0,'87b34d666e8e43a56132192226520952.jpg','20.jpg','\\\\N','1'),
(4,1,1,1,1,'classic-2-20','','50','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'classic-2-20','2022-06-22 10:07:27',22,'itakumala',0,'87b34d666e8e43a56132192226520952.jpg','50.JPG','\\\\N','0'),
(5,1,1,2,1,'fortebello-a-20','','10','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-a-20','2022-06-20 15:32:45',22,'itakumala',0,'728132cbfb0d182de705f77977a55a33.jpg','10.jpg','\\\\N','0'),
(6,1,1,2,1,'fortebello-a-20','','20','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-a-20','2022-06-22 10:16:38',22,'itakumala',0,'728132cbfb0d182de705f77977a55a33.jpg','20.JPG','\\\\N','1'),
(7,1,1,2,1,'fortebello-a-20','','30','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-a-20','2022-06-22 10:18:43',22,'itakumala',0,'728132cbfb0d182de705f77977a55a33.jpg','30.JPG','\\\\N','0'),
(8,1,1,2,1,'fortebello-a-20','','40','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-a-20','2022-06-22 10:18:50',22,'itakumala',0,'728132cbfb0d182de705f77977a55a33.jpg','40.JPG','\\\\N','0'),
(9,1,1,2,1,'fortebello-a-20','','50','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-a-20','2022-06-22 10:18:56',22,'itakumala',0,'728132cbfb0d182de705f77977a55a33.jpg','50.JPG','\\\\N','0'),
(10,1,1,2,1,'fortebello-a-20','','60','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-a-20','2022-06-22 10:19:02',22,'itakumala',0,'728132cbfb0d182de705f77977a55a33.jpg','60.JPG','\\\\N','0'),
(11,1,1,2,1,'fortebello-a-20','','70','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-a-20','2022-06-22 10:19:07',22,'itakumala',0,'728132cbfb0d182de705f77977a55a33.jpg','70.JPG','\\\\N','0'),
(12,1,1,2,1,'fortebello-a-20','','80','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-a-20','2022-06-22 10:19:13',22,'itakumala',0,'728132cbfb0d182de705f77977a55a33.jpg','80.JPG','\\\\N','0'),
(13,1,1,2,1,'fortebello-a-20','','90','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-a-20','2022-06-22 10:19:18',22,'itakumala',0,'728132cbfb0d182de705f77977a55a33.jpg','90.JPG','\\\\N','0'),
(14,1,1,2,1,'fortebello-a-20','','59','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-a-20','2022-06-22 10:19:18',22,'itakumala',0,'728132cbfb0d182de705f77977a55a33.jpg','59.JPG','\\\\N','0'),
(15,1,1,2,1,'fortebello-b-10','','10','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-b-10','2022-06-22 10:23:41',22,'itakumala',0,'f1fbe374368c4da3e31798da0eb49ca0.jpg','10.jpg','\\\\N','1'),
(16,1,1,2,1,'fortebello-b-10','','20','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-b-10','2022-06-22 10:38:27',22,'itakumala',0,'f1fbe374368c4da3e31798da0eb49ca0.jpg','20.jpg','\\\\N','0'),
(17,1,1,2,1,'fortebello-b-10','','30','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-b-10','2022-06-22 10:38:28',22,'itakumala',0,'f1fbe374368c4da3e31798da0eb49ca0.jpg','30.jpg','\\\\N','0'),
(18,1,1,2,1,'fortebello-b-10','','40','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-b-10','2022-06-22 10:39:10',22,'itakumala',0,'f1fbe374368c4da3e31798da0eb49ca0.jpg','40.jpg','\\\\N','0'),
(19,1,1,2,1,'fortebello-b-10','','50','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-b-10','2022-06-22 10:39:16',22,'itakumala',0,'f1fbe374368c4da3e31798da0eb49ca0.jpg','50.jpg','\\\\N','0'),
(20,1,1,2,1,'fortebello-b-10','','60','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-b-10','2022-06-22 10:39:20',22,'itakumala',0,'f1fbe374368c4da3e31798da0eb49ca0.jpg','60.jpg','\\\\N','0'),
(21,1,1,2,1,'fortebello-b-10','','70','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-b-10','2022-06-22 10:39:27',22,'itakumala',0,'f1fbe374368c4da3e31798da0eb49ca0.jpg','70.jpg','\\\\N','0'),
(22,1,1,2,1,'fortebello-b-10','','80','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-b-10','2022-06-22 10:39:32',22,'itakumala',0,'f1fbe374368c4da3e31798da0eb49ca0.jpg','80.jpg','\\\\N','0'),
(23,1,1,2,1,'fortebello-b-10','','90','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-b-10','2022-06-22 10:39:37',22,'itakumala',0,'f1fbe374368c4da3e31798da0eb49ca0.jpg','90.jpg','\\\\N','0'),
(24,1,1,2,1,'fortebello-b-10','','59','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-b-10','2022-06-22 10:39:37',22,'itakumala',0,'f1fbe374368c4da3e31798da0eb49ca0.jpg','59.jpg','\\\\N','0'),
(25,1,1,2,1,'fortebello-c-60','','10','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-c-60','2022-06-21 08:09:51',22,'itakumala',0,'bc903ae2e22e7082fcdd2a8b817d79c5.jpg','10.jpg','\\\\N','0'),
(26,1,1,2,1,'fortebello-c-60','','20','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-c-60','2022-06-22 10:49:48',22,'itakumala',0,'bc903ae2e22e7082fcdd2a8b817d79c5.jpg','20.jpg','\\\\N','0'),
(27,1,1,2,1,'fortebello-c-60','','30','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-c-60','2022-06-22 10:50:25',22,'itakumala',0,'bc903ae2e22e7082fcdd2a8b817d79c5.jpg','30.jpg','\\\\N','0'),
(28,1,1,2,1,'fortebello-c-60','','40','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-c-60','2022-06-22 10:50:31',22,'itakumala',0,'bc903ae2e22e7082fcdd2a8b817d79c5.jpg','40.jpg','\\\\N','0'),
(29,1,1,2,1,'fortebello-c-60','','50','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-c-60','2022-06-22 10:50:35',22,'itakumala',0,'bc903ae2e22e7082fcdd2a8b817d79c5.jpg','50.jpg','\\\\N','0'),
(30,1,1,2,1,'fortebello-c-60','','60','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-c-60','2022-06-22 10:50:40',22,'itakumala',0,'bc903ae2e22e7082fcdd2a8b817d79c5.jpg','60.jpg','\\\\N','1'),
(31,1,1,2,1,'fortebello-c-60','','70','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-c-60','2022-06-22 10:50:45',22,'itakumala',0,'bc903ae2e22e7082fcdd2a8b817d79c5.jpg','70.jpg','\\\\N','0'),
(32,1,1,2,1,'fortebello-c-60','','80','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-c-60','2022-06-22 10:50:49',22,'itakumala',0,'bc903ae2e22e7082fcdd2a8b817d79c5.jpg','80.jpg','\\\\N','0'),
(33,1,1,2,1,'fortebello-c-60','','90','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-c-60','2022-06-22 10:50:55',22,'itakumala',0,'bc903ae2e22e7082fcdd2a8b817d79c5.jpg','90.jpg','\\\\N','0'),
(34,1,1,2,1,'fortebello-c-60','','59','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-c-60','2022-06-22 10:50:55',22,'itakumala',0,'bc903ae2e22e7082fcdd2a8b817d79c5.jpg','59.jpg','\\\\N','0'),
(35,1,1,2,1,'fortebello-d-10','','10','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-d-10','2022-06-21 08:11:05',22,'itakumala',0,'dbcbd1d78aacdd6408bcf7f336ad0ed9.jpg','10.jpg','\\\\N','1'),
(36,1,1,2,1,'fortebello-d-10','','20','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-d-10','2022-06-21 08:11:05',22,'itakumala',0,'dbcbd1d78aacdd6408bcf7f336ad0ed9.jpg','20.jpg','\\\\N','0'),
(37,1,1,2,1,'fortebello-d-10','','30','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-d-10','2022-06-21 08:11:05',22,'itakumala',0,'dbcbd1d78aacdd6408bcf7f336ad0ed9.jpg','30.jpg','\\\\N','0'),
(38,1,1,2,1,'fortebello-d-10','','40','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-d-10','2022-06-21 08:11:04',22,'itakumala',0,'dbcbd1d78aacdd6408bcf7f336ad0ed9.jpg','40.jpg','\\\\N','0'),
(39,1,1,2,1,'fortebello-d-10','','50','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-d-10','2022-06-21 08:11:04',22,'itakumala',0,'dbcbd1d78aacdd6408bcf7f336ad0ed9.jpg','50.jpg','\\\\N','0'),
(40,1,1,2,1,'fortebello-d-10','','60','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-d-10','2022-06-21 08:11:04',22,'itakumala',0,'dbcbd1d78aacdd6408bcf7f336ad0ed9.jpg','60.jpg','\\\\N','0'),
(41,1,1,2,1,'fortebello-d-10','','70','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-d-10','2022-06-21 08:11:04',22,'itakumala',0,'dbcbd1d78aacdd6408bcf7f336ad0ed9.jpg','70.jpg','\\\\N','0'),
(42,1,1,2,1,'fortebello-d-10','','80','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-d-10','2022-06-21 08:11:04',22,'itakumala',0,'dbcbd1d78aacdd6408bcf7f336ad0ed9.jpg','80.jpg','\\\\N','0'),
(43,1,1,2,1,'fortebello-d-10','','90','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-d-10','2022-06-21 08:11:04',22,'itakumala',0,'dbcbd1d78aacdd6408bcf7f336ad0ed9.jpg','90.jpg','\\\\N','0'),
(44,1,1,2,1,'fortebello-d-10','','59','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-d-10','2022-06-21 08:11:04',22,'itakumala',0,'dbcbd1d78aacdd6408bcf7f336ad0ed9.jpg','59.jpg','\\\\N','0'),
(45,1,1,2,1,'fortebello-e-50','','10','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-e-50','2022-06-21 08:12:30',22,'itakumala',0,'440f9b71513578ef8bda1c539180f128.jpg','10.jpg','\\\\N','0'),
(46,1,1,2,1,'fortebello-e-50','','20','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-e-50','2022-06-21 08:12:30',22,'itakumala',0,'440f9b71513578ef8bda1c539180f128.jpg','20.jpg','\\\\N','0'),
(47,1,1,2,1,'fortebello-e-50','','30','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-e-50','2022-06-21 08:12:30',22,'itakumala',0,'440f9b71513578ef8bda1c539180f128.jpg','30.jpg','\\\\N','0'),
(48,1,1,2,1,'fortebello-e-50','','40','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-e-50','2022-06-21 08:12:30',22,'itakumala',0,'440f9b71513578ef8bda1c539180f128.jpg','40.jpg','\\\\N','0'),
(49,1,1,2,1,'fortebello-e-50','','50','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-e-50','2022-06-21 08:12:30',22,'itakumala',0,'440f9b71513578ef8bda1c539180f128.jpg','50.jpg','\\\\N','1'),
(50,1,1,2,1,'fortebello-e-50','','60','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-e-50','2022-06-21 08:12:30',22,'itakumala',0,'440f9b71513578ef8bda1c539180f128.jpg','60.jpg','\\\\N','0'),
(51,1,1,2,1,'fortebello-e-50','','70','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-e-50','2022-06-21 08:12:30',22,'itakumala',0,'440f9b71513578ef8bda1c539180f128.jpg','70.jpg','\\\\N','0'),
(52,1,1,2,1,'fortebello-e-50','','80','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-e-50','2022-06-21 08:12:30',22,'itakumala',0,'440f9b71513578ef8bda1c539180f128.jpg','80.jpg','\\\\N','0'),
(53,1,1,2,1,'fortebello-e-50','','90','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-e-50','2022-06-21 08:12:30',22,'itakumala',0,'440f9b71513578ef8bda1c539180f128.jpg','90.jpg','\\\\N','0'),
(54,1,1,2,1,'fortebello-e-50','','59','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-e-50','2022-06-21 08:12:30',22,'itakumala',0,'440f9b71513578ef8bda1c539180f128.jpg','59.jpg','\\\\N','0'),
(55,1,1,2,1,'fortebello-f-30','','10','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-f-30','2022-06-21 08:13:41',22,'itakumala',0,'17598f4f11d09c1442e3fbd1f6941800.jpg','10.jpg','\\\\N','0'),
(56,1,1,2,1,'fortebello-f-30','','20','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-f-30','2022-06-21 08:13:41',22,'itakumala',0,'17598f4f11d09c1442e3fbd1f6941800.jpg','20.jpg','\\\\N','0'),
(57,1,1,2,1,'fortebello-f-30','','30','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-f-30','2022-06-21 08:13:41',22,'itakumala',0,'17598f4f11d09c1442e3fbd1f6941800.jpg','30.jpg','\\\\N','1'),
(58,1,1,2,1,'fortebello-f-30','','40','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-f-30','2022-06-21 08:13:41',22,'itakumala',0,'17598f4f11d09c1442e3fbd1f6941800.jpg','40.jpg','\\\\N','0'),
(59,1,1,2,1,'fortebello-f-30','','50','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-f-30','2022-06-21 08:13:41',22,'itakumala',0,'17598f4f11d09c1442e3fbd1f6941800.jpg','50.jpg','\\\\N','0'),
(60,1,1,2,1,'fortebello-f-30','','60','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-f-30','2022-06-21 08:13:41',22,'itakumala',0,'17598f4f11d09c1442e3fbd1f6941800.jpg','60.jpg','\\\\N','0'),
(61,1,1,2,1,'fortebello-f-30','','70','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-f-30','2022-06-21 08:13:41',22,'itakumala',0,'17598f4f11d09c1442e3fbd1f6941800.jpg','70.jpg','\\\\N','0'),
(62,1,1,2,1,'fortebello-f-30','','80','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-f-30','2022-06-21 08:13:41',22,'itakumala',0,'17598f4f11d09c1442e3fbd1f6941800.jpg','80.jpg','\\\\N','0'),
(63,1,1,2,1,'fortebello-f-30','','90','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-f-30','2022-06-21 08:13:41',22,'itakumala',0,'17598f4f11d09c1442e3fbd1f6941800.jpg','90.jpg','\\\\N','0'),
(64,1,1,2,1,'fortebello-f-30','','59','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-f-30','2022-06-21 08:13:41',22,'itakumala',0,'17598f4f11d09c1442e3fbd1f6941800.jpg','59.jpg','\\\\N','0'),
(65,1,1,2,1,'fortebello-g-90','','10','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-g-90','2022-06-21 08:14:32',22,'itakumala',0,'0d3246717ccff931e5222809c9e536fe.jpg','10.jpg','\\\\N','0'),
(66,1,1,2,1,'fortebello-g-90','','20','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-g-90','2022-06-21 08:14:32',22,'itakumala',0,'0d3246717ccff931e5222809c9e536fe.jpg','20.jpg','\\\\N','0'),
(67,1,1,2,1,'fortebello-g-90','','30','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-g-90','2022-06-21 08:14:32',22,'itakumala',0,'0d3246717ccff931e5222809c9e536fe.jpg','30.jpg','\\\\N','0'),
(68,1,1,2,1,'fortebello-g-90','','40','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-g-90','2022-06-21 08:14:32',22,'itakumala',0,'0d3246717ccff931e5222809c9e536fe.jpg','40.jpg','\\\\N','0'),
(69,1,1,2,1,'fortebello-g-90','','50','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-g-90','2022-06-21 08:14:32',22,'itakumala',0,'0d3246717ccff931e5222809c9e536fe.jpg','50.jpg','\\\\N','0'),
(70,1,1,2,1,'fortebello-g-90','','60','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-g-90','2022-06-21 08:14:32',22,'itakumala',0,'0d3246717ccff931e5222809c9e536fe.jpg','60.jpg','\\\\N','0'),
(71,1,1,2,1,'fortebello-g-90','','70','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-g-90','2022-06-21 08:14:32',22,'itakumala',0,'0d3246717ccff931e5222809c9e536fe.jpg','70.jpg','\\\\N','0'),
(72,1,1,2,1,'fortebello-g-90','','80','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-g-90','2022-06-21 08:14:32',22,'itakumala',0,'0d3246717ccff931e5222809c9e536fe.jpg','80.jpg','\\\\N','0'),
(73,1,1,2,1,'fortebello-g-90','','90','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-g-90','2022-06-21 08:14:32',22,'itakumala',0,'0d3246717ccff931e5222809c9e536fe.jpg','90.jpg','\\\\N','1'),
(74,1,1,2,1,'fortebello-g-90','','59','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-g-90','2022-06-21 08:14:32',22,'itakumala',0,'0d3246717ccff931e5222809c9e536fe.jpg','59.jpg','\\\\N','1'),
(75,1,1,2,1,'fortebello-h-50','','10','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-h-50','2022-06-21 08:15:17',22,'itakumala',0,'1c88c35219cf5d38144e3362be0c7d69.jpg','10.jpg','\\\\N','0'),
(76,1,1,2,1,'fortebello-h-50','','20','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-h-50','2022-06-21 08:15:17',22,'itakumala',0,'1c88c35219cf5d38144e3362be0c7d69.jpg','20.jpg','\\\\N','0'),
(77,1,1,2,1,'fortebello-h-50','','30','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-h-50','2022-06-21 08:15:17',22,'itakumala',0,'1c88c35219cf5d38144e3362be0c7d69.jpg','30.jpg','\\\\N','0'),
(78,1,1,2,1,'fortebello-h-50','','40','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-h-50','2022-06-21 08:15:17',22,'itakumala',0,'1c88c35219cf5d38144e3362be0c7d69.jpg','40.jpg','\\\\N','0'),
(79,1,1,2,1,'fortebello-h-50','','50','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-h-50','2022-06-21 08:15:17',22,'itakumala',0,'1c88c35219cf5d38144e3362be0c7d69.jpg','50.jpg','\\\\N','1'),
(80,1,1,2,1,'fortebello-h-50','','60','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-h-50','2022-06-21 08:15:17',22,'itakumala',0,'1c88c35219cf5d38144e3362be0c7d69.jpg','60.jpg','\\\\N','0'),
(81,1,1,2,1,'fortebello-h-50','','70','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-h-50','2022-06-21 08:15:17',22,'itakumala',0,'1c88c35219cf5d38144e3362be0c7d69.jpg','70.jpg','\\\\N','0'),
(82,1,1,2,1,'fortebello-h-50','','80','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-h-50','2022-06-21 08:15:17',22,'itakumala',0,'1c88c35219cf5d38144e3362be0c7d69.jpg','80.jpg','\\\\N','0'),
(83,1,1,2,1,'fortebello-h-50','','90','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-h-50','2022-06-21 08:15:17',22,'itakumala',0,'1c88c35219cf5d38144e3362be0c7d69.jpg','90.jpg','\\\\N','0'),
(84,1,1,2,1,'fortebello-h-50','','59','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-h-50','2022-06-21 08:15:17',22,'itakumala',0,'1c88c35219cf5d38144e3362be0c7d69.jpg','59.jpg','\\\\N','0'),
(85,1,1,2,1,'fortebello-l-59','','10','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-l-59','2022-06-21 08:16:24',22,'itakumala',0,'769e86cbcdd456baa8322c97c1e751b2.jpg','10.jpg','\\\\N','0'),
(86,1,1,2,1,'fortebello-l-59','','20','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-l-59','2022-06-21 08:16:24',22,'itakumala',0,'769e86cbcdd456baa8322c97c1e751b2.jpg','20.jpg','\\\\N','0'),
(87,1,1,2,1,'fortebello-l-59','','30','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-l-59','2022-06-21 08:16:24',22,'itakumala',0,'769e86cbcdd456baa8322c97c1e751b2.jpg','30.jpg','\\\\N','0'),
(88,1,1,2,1,'fortebello-l-59','','40','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-l-59','2022-06-21 08:16:24',22,'itakumala',0,'769e86cbcdd456baa8322c97c1e751b2.jpg','40.jpg','\\\\N','0'),
(89,1,1,2,1,'fortebello-l-59','','50','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-l-59','2022-06-21 08:16:24',22,'itakumala',0,'769e86cbcdd456baa8322c97c1e751b2.jpg','50.jpg','\\\\N','0'),
(90,1,1,2,1,'fortebello-l-59','','60','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-l-59','2022-06-21 08:16:24',22,'itakumala',0,'769e86cbcdd456baa8322c97c1e751b2.jpg','60.jpg','\\\\N','0'),
(91,1,1,2,1,'fortebello-l-59','','70','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-l-59','2022-06-21 08:16:24',22,'itakumala',0,'769e86cbcdd456baa8322c97c1e751b2.jpg','70.jpg','\\\\N','0'),
(92,1,1,2,1,'fortebello-l-59','','80','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-l-59','2022-06-21 08:16:24',22,'itakumala',0,'769e86cbcdd456baa8322c97c1e751b2.jpg','80.jpg','\\\\N','0'),
(93,1,1,2,1,'fortebello-l-59','','90','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-l-59','2022-06-21 08:16:24',22,'itakumala',0,'769e86cbcdd456baa8322c97c1e751b2.jpg','90.jpg','\\\\N','0'),
(94,1,1,2,1,'fortebello-l-59','','59','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-l-59','2022-06-21 08:16:24',22,'itakumala',0,'769e86cbcdd456baa8322c97c1e751b2.jpg','59.jpg','\\\\N','1'),
(95,1,1,2,1,'fortebello-m-40','','10','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-m-40','2022-06-21 08:54:02',22,'itakumala',0,'b97a2241fca49ed5162486a485038607.jpg','10.jpg','\\\\N','0'),
(96,1,1,2,1,'fortebello-m-40','','20','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-m-40','2022-06-21 08:54:02',22,'itakumala',0,'b97a2241fca49ed5162486a485038607.jpg','20.jpg','\\\\N','0'),
(97,1,1,2,1,'fortebello-m-40','','30','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-m-40','2022-06-21 08:54:02',22,'itakumala',0,'b97a2241fca49ed5162486a485038607.jpg','30.jpg','\\\\N','0'),
(98,1,1,2,1,'fortebello-m-40','','40','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-m-40','2022-06-21 08:54:02',22,'itakumala',0,'b97a2241fca49ed5162486a485038607.jpg','40.jpg','\\\\N','1'),
(99,1,1,2,1,'fortebello-m-40','','50','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-m-40','2022-06-21 08:54:02',22,'itakumala',0,'b97a2241fca49ed5162486a485038607.jpg','50.jpg','\\\\N','0'),
(100,1,1,2,1,'fortebello-m-40','','60','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-m-40','2022-06-21 08:54:02',22,'itakumala',0,'b97a2241fca49ed5162486a485038607.jpg','60.jpg','\\\\N','0'),
(101,1,1,2,1,'fortebello-m-40','','70','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-m-40','2022-06-21 08:54:02',22,'itakumala',0,'b97a2241fca49ed5162486a485038607.jpg','70.jpg','\\\\N','0'),
(102,1,1,2,1,'fortebello-m-40','','80','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-m-40','2022-06-21 08:54:02',22,'itakumala',0,'b97a2241fca49ed5162486a485038607.jpg','80.jpg','\\\\N','0'),
(103,1,1,2,1,'fortebello-m-40','','90','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-m-40','2022-06-21 08:54:02',22,'itakumala',0,'b97a2241fca49ed5162486a485038607.jpg','90.jpg','\\\\N','0'),
(104,1,1,2,1,'fortebello-m-40','','59','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'fortebello-m-40','2022-06-21 08:54:02',22,'itakumala',0,'b97a2241fca49ed5162486a485038607.jpg','59.jpg','\\\\N','0'),
(105,1,1,3,1,'premium-p1-80','','10','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'premium-p1-80','2022-06-23 08:17:24',22,'itakumala',0,'6edbb79e59d0dbae1abdd30ee6bd6102.jpg','10.jpg','\\\\N','0'),
(106,1,1,3,1,'premium-p1-80','','20','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'premium-p1-80','2022-06-23 10:06:55',22,'itakumala',0,'6edbb79e59d0dbae1abdd30ee6bd6102.jpg','20.jpg','\\\\N','0'),
(107,1,1,3,1,'premium-p1-80','','30','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'premium-p1-80','2022-06-23 08:17:24',22,'itakumala',0,'6edbb79e59d0dbae1abdd30ee6bd6102.jpg','30.jpg','\\\\N','0'),
(108,1,1,3,1,'premium-p1-80','','40','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'premium-p1-80','2022-06-23 10:06:55',22,'itakumala',0,'6edbb79e59d0dbae1abdd30ee6bd6102.jpg','40.jpg','\\\\N','0'),
(109,1,1,3,1,'premium-p1-80','','50','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'premium-p1-80','2022-06-23 08:17:24',22,'itakumala',0,'6edbb79e59d0dbae1abdd30ee6bd6102.jpg','50.jpg','\\\\N','0'),
(110,1,1,3,1,'premium-p1-80','','60','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'premium-p1-80','2022-06-23 10:06:55',22,'itakumala',0,'6edbb79e59d0dbae1abdd30ee6bd6102.jpg','60.jpg','\\\\N','0'),
(111,1,1,3,1,'premium-p1-80','','70','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'premium-p1-80','2022-06-23 08:17:24',22,'itakumala',0,'6edbb79e59d0dbae1abdd30ee6bd6102.jpg','70.jpg','\\\\N','0'),
(112,1,1,3,1,'premium-p1-80','','80','0','pcs',0,0,25,'0',0,'730x1960',0,0,0,'premium-p1-80','2022-06-23 10:06:55',22,'itakumala',0,'6edbb79e59d0dbae1abdd30ee6bd6102.jpg','80.jpg','\\\\N','1'),
(113,1,1,3,1,'premium-p1-80','','90','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'premium-p1-80','2022-06-23 08:17:24',22,'itakumala',0,'6edbb79e59d0dbae1abdd30ee6bd6102.jpg','90.jpg','\\\\N','0'),
(114,1,1,3,1,'premium-p1-80','','59','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'premium-p1-80','2022-06-23 10:06:55',22,'itakumala',0,'6edbb79e59d0dbae1abdd30ee6bd6102.jpg','59.jpg','\\\\N','0'),
(115,1,1,3,1,'premium-p2-70','','10','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'premium-p2-70','2022-06-23 10:06:55',22,'itakumala',0,'premium-p2-70.jpg','10.jpg','\\\\N','0'),
(116,1,1,3,1,'premium-p2-70','','20','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'premium-p2-70','2022-06-23 10:06:55',22,'itakumala',0,'premium-p2-70.jpg','20.jpg','\\\\N','0'),
(117,1,1,3,1,'premium-p2-70','','30','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'premium-p2-70','2022-06-23 10:06:55',22,'itakumala',0,'premium-p2-70.jpg','30.jpg','\\\\N','0'),
(118,1,1,3,1,'premium-p2-70','','40','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'premium-p2-70','2022-06-23 10:06:55',22,'itakumala',0,'premium-p2-70.jpg','40.jpg','\\\\N','0'),
(119,1,1,3,1,'premium-p2-70','','50','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'premium-p2-70','2022-06-23 10:06:55',22,'itakumala',0,'premium-p2-70.jpg','50.jpg','\\\\N','0'),
(120,1,1,3,1,'premium-p2-70','','60','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'premium-p2-70','2022-06-23 10:06:55',22,'itakumala',0,'premium-p2-70.jpg','60.jpg','\\\\N','0'),
(121,1,1,3,1,'premium-p2-70','','70','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'premium-p2-70','2022-06-23 10:06:55',22,'itakumala',0,'premium-p2-70.jpg','70.jpg','\\\\N','1'),
(122,1,1,3,1,'premium-p2-70','','80','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'premium-p2-70','2022-06-23 10:06:55',22,'itakumala',0,'premium-p2-70.jpg','80.jpg','\\\\N','0'),
(123,1,1,3,1,'premium-p2-70','','90','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'premium-p2-70','2022-06-23 10:06:55',22,'itakumala',0,'premium-p2-70.jpg','90.jpg','\\\\N','0'),
(124,1,1,3,1,'premium-p2-70','','59','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'premium-p2-70','2022-06-23 10:06:55',22,'itakumala',0,'premium-p2-70.jpg','59.jpg','\\\\N','0'),
(125,1,1,3,1,'premium-p3-90','','10','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'premium-p3-90','2022-06-23 10:06:55',22,'itakumala',0,'premium-p3-90.jpg','10.jpg','\\\\N','0'),
(126,1,1,3,1,'premium-p3-90','','20','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'premium-p3-90','2022-06-23 10:06:55',22,'itakumala',0,'premium-p3-90.jpg','20.jpg','\\\\N','0'),
(127,1,1,3,1,'premium-p3-90','','30','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'premium-p3-90','2022-06-23 10:06:55',22,'itakumala',0,'premium-p3-90.jpg','30.jpg','\\\\N','0'),
(128,1,1,3,1,'premium-p3-90','','40','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'premium-p3-90','2022-06-23 10:06:55',22,'itakumala',0,'premium-p3-90.jpg','40.jpg','\\\\N','0'),
(129,1,1,3,1,'premium-p3-90','','50','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'premium-p3-90','2022-06-23 10:06:55',22,'itakumala',0,'premium-p3-90.jpg','50.jpg','\\\\N','0'),
(130,1,1,3,1,'premium-p3-90','','60','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'premium-p3-90','2022-06-23 10:06:55',22,'itakumala',0,'premium-p3-90.jpg','60.jpg','\\\\N','0'),
(131,1,1,3,1,'premium-p3-90','','70','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'premium-p3-90','2022-06-23 10:06:55',22,'itakumala',0,'premium-p3-90.jpg','70.jpg','\\\\N','0'),
(132,1,1,3,1,'premium-p3-90','','80','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'premium-p3-90','2022-06-23 10:06:55',22,'itakumala',0,'premium-p3-90.jpg','80.jpg','\\\\N','0'),
(133,1,1,3,1,'premium-p3-90','','90','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'premium-p3-90','2022-06-23 10:06:55',22,'itakumala',0,'premium-p3-90.jpg','90.jpg','\\\\N','1'),
(134,1,1,3,1,'premium-p3-90','','59','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'premium-p3-90','2022-06-23 10:06:55',22,'itakumala',0,'premium-p3-90.jpg','59.jpg','\\\\N','0'),
(135,1,1,3,1,'premium-p4-10','','10','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'premium-p4-10','2022-06-23 10:06:55',22,'itakumala',0,'premium-p4-10.jpg','10.jpg','\\\\N','1'),
(136,1,1,3,1,'premium-p4-10','','20','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'premium-p4-10','2022-06-23 10:06:55',22,'itakumala',0,'premium-p4-10.jpg','20.jpg','\\\\N','0'),
(137,1,1,3,1,'premium-p4-10','','30','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'premium-p4-10','2022-06-23 10:06:55',22,'itakumala',0,'premium-p4-10.jpg','30.jpg','\\\\N','0'),
(138,1,1,3,1,'premium-p4-10','','40','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'premium-p4-10','2022-06-23 10:06:55',22,'itakumala',0,'premium-p4-10.jpg','40.jpg','\\\\N','0'),
(139,1,1,3,1,'premium-p4-10','','50','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'premium-p4-10','2022-06-23 10:06:55',22,'itakumala',0,'premium-p4-10.jpg','50.jpg','\\\\N','0'),
(140,1,1,3,1,'premium-p4-10','','60','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'premium-p4-10','2022-06-23 10:06:55',22,'itakumala',0,'premium-p4-10.jpg','60.jpg','\\\\N','0'),
(141,1,1,3,1,'premium-p4-10','','70','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'premium-p4-10','2022-06-23 10:06:55',22,'itakumala',0,'premium-p4-10.jpg','70.jpg','\\\\N','0'),
(142,1,1,3,1,'premium-p4-10','','80','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'premium-p4-10','2022-06-23 10:06:55',22,'itakumala',0,'premium-p4-10.jpg','80.jpg','\\\\N','0'),
(143,1,1,3,1,'premium-p4-10','','90','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'premium-p4-10','2022-06-23 10:06:55',22,'itakumala',0,'premium-p4-10.jpg','90.jpg','\\\\N','0'),
(144,1,1,3,1,'premium-p4-10','','59','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'premium-p4-10','2022-06-23 10:06:55',22,'itakumala',0,'premium-p4-10.jpg','59.jpg','\\\\N','0'),
(145,1,1,3,1,'premium-p5-30','','10','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'premium-p5-30','2022-06-23 10:06:55',22,'itakumala',0,'premium-p5-30.jpg','10.jpg','\\\\N','0'),
(146,1,1,3,1,'premium-p5-30','','20','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'premium-p5-30','2022-06-23 10:06:55',22,'itakumala',0,'premium-p5-30.jpg','20.jpg','\\\\N','0'),
(147,1,1,3,1,'premium-p5-30','','30','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'premium-p5-30','2022-06-23 10:06:55',22,'itakumala',0,'premium-p5-30.jpg','30.jpg','\\\\N','1'),
(148,1,1,3,1,'premium-p5-30','','40','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'premium-p5-30','2022-06-23 10:06:55',22,'itakumala',0,'premium-p5-30.jpg','40.jpg','\\\\N','0'),
(149,1,1,3,1,'premium-p5-30','','50','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'premium-p5-30','2022-06-23 10:06:55',22,'itakumala',0,'premium-p5-30.jpg','50.jpg','\\\\N','0'),
(150,1,1,3,1,'premium-p5-30','','60','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'premium-p5-30','2022-06-23 10:06:55',22,'itakumala',0,'premium-p5-30.jpg','60.jpg','\\\\N','0'),
(151,1,1,3,1,'premium-p5-30','','70','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'premium-p5-30','2022-06-23 10:06:55',22,'itakumala',0,'premium-p5-30.jpg','70.jpg','\\\\N','0'),
(152,1,1,3,1,'premium-p5-30','','80','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'premium-p5-30','2022-06-23 10:06:55',22,'itakumala',0,'premium-p5-30.jpg','80.jpg','\\\\N','0'),
(153,1,1,3,1,'premium-p5-30','','90','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'premium-p5-30','2022-06-23 10:06:55',22,'itakumala',0,'premium-p5-30.jpg','90.jpg','\\\\N','0'),
(154,1,1,3,1,'premium-p5-30','','59','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'premium-p5-30','2022-06-23 10:06:55',22,'itakumala',0,'premium-p5-30.jpg','59.jpg','\\\\N','0'),
(155,1,1,3,1,'premium-p6-5035','','50','35','pcs',0,1500000,25,'0',0,'730x1960',0,0,0,'premium-p6-5035','2022-06-23 10:06:55',22,'itakumala',0,'fc9397720ceaa88b36e3211c53c3aea4.jpg','50.jpg','35.jpg','1'),
(156,1,1,3,1,'premium-p7-6027','','6027','','pcs',0,0,25,'0',0,'630x1860',0,0,0,'premium-p7-6027','2022-06-23 10:06:55',22,'itakumala',0,'premium-p7-6027.jpg','6027.jpg','\\\\N','1');

/*Table structure for table `tbl_varian_coba_copy` */

DROP TABLE IF EXISTS `tbl_varian_coba_copy`;

CREATE TABLE `tbl_varian_coba_copy` (
  `varian_id` int(11) NOT NULL AUTO_INCREMENT,
  `produk_kategori` int(11) NOT NULL,
  `produk_subkategori` int(11) NOT NULL,
  `produk_kelas` int(11) NOT NULL,
  `produk_brand` int(11) NOT NULL,
  `varian_nama` varchar(150) NOT NULL,
  `varian_seo` varchar(150) NOT NULL,
  `varian_warna` varchar(150) NOT NULL,
  `satuan` varchar(50) NOT NULL,
  `harga_beli` bigint(20) DEFAULT NULL,
  `harga_konsumen` decimal(10,0) DEFAULT NULL,
  `stok` int(11) NOT NULL,
  `berat` varchar(50) NOT NULL,
  `diskon` int(11) NOT NULL,
  `varian_ukuran` varchar(100) DEFAULT NULL,
  `varian_harga` bigint(20) DEFAULT NULL,
  `varian_harga_meter` decimal(10,0) DEFAULT NULL,
  `varian_jumlah` bigint(20) DEFAULT NULL,
  `varian_deskripsi` text DEFAULT NULL,
  `varian_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `varian_pengguna_id` int(11) DEFAULT NULL,
  `varian_author` varchar(60) DEFAULT NULL,
  `varian_count` int(11) DEFAULT 0,
  `varian_cover` varchar(40) DEFAULT NULL,
  `varian_warna_cover` varchar(40) DEFAULT NULL,
  `status` enum('0','1') NOT NULL,
  PRIMARY KEY (`varian_id`),
  KEY `album_pengguna_id` (`varian_pengguna_id`)
) ENGINE=InnoDB AUTO_INCREMENT=178 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

/*Data for the table `tbl_varian_coba_copy` */

insert  into `tbl_varian_coba_copy`(`varian_id`,`produk_kategori`,`produk_subkategori`,`produk_kelas`,`produk_brand`,`varian_nama`,`varian_seo`,`varian_warna`,`satuan`,`harga_beli`,`harga_konsumen`,`stok`,`berat`,`diskon`,`varian_ukuran`,`varian_harga`,`varian_harga_meter`,`varian_jumlah`,`varian_deskripsi`,`varian_tanggal`,`varian_pengguna_id`,`varian_author`,`varian_count`,`varian_cover`,`varian_warna_cover`,`status`) values 
(1,1,1,1,1,'classic-1-50','','50','pcs',0,0,25,'3',0,'1000x1000',NULL,0,NULL,'classic-1-50','2022-06-17 08:07:18',22,'itakumala',0,'3d0ab419af8f79fb657e7342ef3dd3eb.jpg','50.jpg','1'),
(2,1,2,6,1,'feleice-f1-putih','','WHITE','pcs',0,0,11,'3',0,'1000x1000',NULL,0,NULL,'feleice-f1-putih','2022-06-17 08:11:05',22,'itakumala',0,'baa6f8dcc1af7838fb5698520a07f293.jpg','90.jpg','1'),
(3,1,3,8,2,'laminate-duo','','BROWN','pcs',0,0,11,'3',0,'1000x1000',NULL,0,NULL,'laminate-duo','2022-06-17 13:27:31',22,'itakumala',0,'cd9a090989756b8566c8cf12af029bfb.jpg','25.jpg','1'),
(4,2,4,13,1,'upvc-jendela-jungkit','','WHITE','pcs',0,0,11,'3',0,'1000x1000',NULL,0,NULL,'upvc-jendela-jungkit','2022-06-17 13:30:14',22,'itakumala',0,'3a129ed465969cabd640edd46b34f4e9.jpg','90.jpg','1'),
(5,3,5,14,1,'plafon-polos','','WHITE','pcs',0,0,11,'3',0,'1000x1000',NULL,0,NULL,'plafon-polos','2022-06-17 13:31:45',22,'itakumala',0,'5793ab2b724237900288cd19dffbc84a.jpg','90.jpg','1'),
(6,4,12,32,1,'wpc-deck-g354h','','BROWN','pcs',0,0,11,'3',0,'1000x1000',NULL,0,NULL,'wpc-deck-g354h','2022-06-17 13:35:51',22,'itakumala',0,'3b541d7e9bd8825fd39b2f3a1d7892d9.jpg','10.jpg','1'),
(7,1,1,4,1,'artdoor-c1-30','','BROWN','pcs',0,0,11,'3',0,'1000x1000',NULL,0,NULL,'artdoor-c1-30','2022-06-17 14:31:16',22,'itakumala',0,'974fadad1dc3f365d17a4815bdb922e1.jpg','60.jpg','1'),
(8,1,3,9,2,'eco-ed1-cw10','','BROWN','pcs',0,0,11,'3',0,'1000x1000',NULL,0,NULL,'eco-ed1-cw10','2022-06-18 09:00:43',22,'itakumala',0,'2346a54ec5b60a3a60f82d7d766d92ea.jpg','60.jpg','1'),
(9,6,16,37,1,'aksesoris-001','','BROWN','pcs',0,0,11,'3',0,'1000x1000',NULL,0,NULL,'aksesoris-001','2022-06-20 12:45:17',22,'itakumala',0,'c382a87909eb9d7aebad78048daf62a0.jpg','10.jpg','1'),
(10,5,14,35,1,'masker-dewasa','','WHITE','pcs',0,0,11,'3',0,'1000x1000',NULL,0,NULL,'masker-dewasa','2022-06-20 12:48:30',22,'itakumala',0,'6af200ba6e7c98f9c7ac7ee5aea2af06.jpg','90.jpg','1'),
(11,1,1,1,1,'classic-2-20','','20','pcs',0,0,11,'3',0,'1000x1000',NULL,0,NULL,'classic-2-20','2022-06-20 15:29:54',22,'itakumala',0,'87b34d666e8e43a56132192226520952.jpg','20.jpg','1'),
(12,1,1,2,1,'fortebello-a-20','','10','pcs',0,0,11,'3',0,'1000x1000',NULL,0,NULL,'fortebello-a-20','2022-06-20 15:32:45',22,'itakumala',0,'728132cbfb0d182de705f77977a55a33.jpg','10.jpg','1'),
(13,1,1,2,1,'fortebello-c-60','','10','pcs',0,0,11,'3',0,'1000x1000',NULL,0,NULL,'fortebello-c-60','2022-06-21 08:09:51',22,'itakumala',0,'bc903ae2e22e7082fcdd2a8b817d79c5.jpg','10.jpg','1'),
(14,1,1,2,1,'fortebello-d-10','','BROWN','pcs',0,0,11,'3',0,'1000x1000',NULL,0,NULL,'fortebello-d-10','2022-06-21 08:11:05',22,'itakumala',0,'dbcbd1d78aacdd6408bcf7f336ad0ed9.jpg','naturalbown-26.jpg','1'),
(15,1,1,2,1,'fortebello-e-50','','WHITE','pcs',0,0,11,'3',0,'1000x1000',NULL,0,NULL,'fortebello-e-50','2022-06-21 08:12:30',22,'itakumala',0,'440f9b71513578ef8bda1c539180f128.jpg','50.jpg','1'),
(16,1,1,2,1,'fortebello-f-30','','BROWN','pcs',0,0,11,'3',0,'1000x1000',NULL,0,NULL,'fortebello-f-30','2022-06-21 08:13:41',22,'itakumala',0,'17598f4f11d09c1442e3fbd1f6941800.jpg','30.jpg','1'),
(17,1,1,2,1,'fortebello-g-90','','WHITE','pcs',0,0,11,'3',0,'1000x1000',NULL,0,NULL,'fortebello-g-90','2022-06-21 08:14:32',22,'itakumala',0,'0d3246717ccff931e5222809c9e536fe.jpg','50.jpg','1'),
(18,1,1,2,1,'fortebello-h-50','','WHITE','pcs',0,0,11,'3',0,'1000x1000',NULL,0,NULL,'fortebello-h-50','2022-06-21 08:15:17',22,'itakumala',0,'1c88c35219cf5d38144e3362be0c7d69.jpg',NULL,'1'),
(19,1,1,2,1,'fortebello-l-59','','ABU-ABU','pcs',0,0,11,'3',0,'1000x1000',NULL,0,NULL,'fortebello-l-59','2022-06-21 08:16:24',22,'itakumala',0,'769e86cbcdd456baa8322c97c1e751b2.jpg',NULL,'1'),
(20,1,1,2,1,'fortebello-m-40','','ABU-ABU','pcs',0,0,11,'3',0,'1000x1000',NULL,0,NULL,'fortebello-m-40','2022-06-21 08:54:02',22,'itakumala',0,'b97a2241fca49ed5162486a485038607.jpg',NULL,'1'),
(21,1,1,3,1,'grande-pga-1090','','WHITE-BROWN','pcs',0,0,11,'3',0,'1000x1000',NULL,0,NULL,'grande-pga-1090','2022-06-21 08:55:34',22,'itakumala',0,'6529e9c00730dea021e9f3c7094e1212.jpg',NULL,'1'),
(22,1,1,3,1,'grande-pgb1-2550','','WHITE-BROWN','pcs',0,0,11,'3',0,'1000x1000',NULL,0,NULL,'grande-pgb1-2550','2022-06-21 08:57:16',22,'itakumala',0,'cbed11abc0655cee08f54315310b82c6.jpg',NULL,'1'),
(23,1,1,3,1,'grande-pgb2-2560','','BROWN ','pcs',0,0,11,'3',0,'1000x1000',NULL,0,NULL,'grande-pgb2-2560','2022-06-21 08:58:00',22,'itakumala',0,'3b1ee9bedf8d99f893a2b9d76285a5c4.jpg',NULL,'1'),
(24,1,1,3,1,'grande-pgc-4050','','WHITE','pcs',0,0,11,'3',0,'1000x1000',NULL,0,NULL,'grande-pgc-4050','2022-06-21 08:58:33',22,'itakumala',0,'9a59aa227316b56f923af912cd085188.jpg',NULL,'1'),
(25,1,1,3,1,'grande-pgd-6030','','BROWN','pcs',0,0,11,'3',0,'1000x1000',NULL,0,NULL,'grande-pgd-6030','2022-06-21 09:00:11',22,'itakumala',0,'3c278e5586c11c7a990442b1aa73c521.jpg',NULL,'1'),
(26,1,1,3,1,'premiumdeco-pda1-2519','','BROWN ','pcs',0,0,100,'3',0,'1000x1000',NULL,0,NULL,'premiumdeco-pda1-2519','2022-06-21 10:38:09',22,'itakumala',0,'47993e5c30a9a78c3a03e93c453925c9.jpg',NULL,'1'),
(27,1,1,3,1,'premiumdeco-pda2-2510','','BROWN ','pcs',0,0,100,'3',0,'1000x1000',NULL,0,NULL,'premiumdeco-pda2-2510','2022-06-21 10:38:48',22,'itakumala',0,'102e7074dfd67388c59dd0d1b41c2cf2.jpg',NULL,'1'),
(28,1,1,3,1,'premiumdeco-pda3-5010','','WHITE','pcs',0,0,11,'3',0,'1000x1000',NULL,0,NULL,'premiumdeco-pda3-5010','2022-06-21 10:39:38',22,'itakumala',0,'11cec27170ebbca4e5e1c955862fab42.jpg',NULL,'1'),
(29,1,1,3,1,'premiumdeco-pdb1-5010','','BROWN','pcs',0,0,100,'3',0,'1000x1000',NULL,NULL,NULL,'premiumdeco-pdb1-5010','2022-06-21 10:40:20',22,'itakumala',0,'704c0f44d269a90a18f625949fe768d4.jpg',NULL,'1'),
(30,1,1,3,1,'premiumdeco-pdb2-1050','','WHITE','pcs',0,0,100,'3',0,'1000x1000',NULL,NULL,NULL,'premiumdeco-pdb2-1050','2022-06-21 10:41:00',22,'itakumala',0,'e177c24475f642517a47c152b6e964ef.jpg',NULL,'1'),
(31,1,1,3,1,'premiumdeco-pdb3-2750','','WHITE','pcs',0,0,100,'3',0,'1000x1000',NULL,NULL,NULL,'premiumdeco-pdb3-2750','2022-06-21 10:41:38',22,'itakumala',0,'740a85666093b9623e699dc9ced2128e.jpg',NULL,'1'),
(32,1,1,3,1,'premium-p1-80','','WHITE','pcs',0,0,100,'3',0,'1000x1000',NULL,NULL,NULL,'premium-p1-80','2022-06-21 10:42:37',22,'itakumala',0,'1b237328e0530c2eef1659956375b3f3.jpg','10.jpg','1'),
(33,1,1,1,1,'classic-1-50','','20','pcs',0,0,0,'',0,'1000x1000',NULL,NULL,NULL,NULL,'2022-06-21 11:13:03',NULL,NULL,0,'3d0ab419af8f79fb657e7342ef3dd3eb.jpg','20.jpg','0'),
(34,1,1,3,1,'premium-p2-70','','ABU-ABU','pcs',0,0,100,'3',0,'1000x1000',NULL,NULL,NULL,'premium-p2-70','2022-06-21 12:48:50',22,'itakumala',0,'f28c9ae1bd09da218e7df195e68146c2.jpg',NULL,'1'),
(35,1,1,3,1,'premium-p3-90','','WHITE','pcs',0,0,100,'3',0,'1000x1000',NULL,NULL,NULL,'premium-p3-90','2022-06-21 12:49:34',22,'itakumala',0,'548fccaab0677303a9b582207c7830b0.jpg',NULL,'1'),
(36,1,1,3,1,'premium-p4-10','','BROWN-MOTIF','pcs',0,0,100,'3',0,'1000x1000',NULL,NULL,NULL,'premium-p4-10','2022-06-21 12:50:42',22,'itakumala',0,'5950228263ab90abf786be6f753bd553.jpg',NULL,'1'),
(37,1,1,3,1,'premium-p5-30','','BROWN ','pcs',0,0,100,'3',0,'1000x1000',NULL,NULL,NULL,'premium-p5-30','2022-06-21 12:51:35',22,'itakumala',0,'0e6e37c173d574a76c393bd74eedf064.jpg',NULL,'1'),
(38,1,1,3,1,'premium-p6-5035','','WHITE-MOTIF','pcs',0,0,100,'3',0,'1000x1000',NULL,NULL,NULL,'premium-p6-5035','2022-06-21 12:52:27',22,'itakumala',0,'2d0a07e796a492ee5f2e9f3574c2d7a2.jpg',NULL,'1'),
(39,1,1,3,1,'premium-p7-6027','','BROWN-MOTIF','pcs',0,0,100,'0',0,'1000x1000',NULL,NULL,NULL,'premium-p7-6027','2022-06-21 12:53:06',22,'itakumala',0,'02356b76ce8177efc8a2ae4cf2c20856.jpg',NULL,'1'),
(40,1,1,4,1,'artdoor-c2-30','','BROWN-MOTIF','pcs',0,0,100,'0',0,'1000x1000',NULL,NULL,NULL,'artdoor-c2-30','2022-06-21 12:55:51',22,'itakumala',0,'7ca9b325611c31db8ecfd30c3e048ec0.jpg',NULL,'1'),
(41,1,1,4,1,'artdoor-c3-30','','BROWN-MOTIF','pcs',0,0,100,'0',0,'1000x1000',NULL,NULL,NULL,'artdoor-c3-30','2022-06-21 12:57:01',22,'itakumala',0,'b76b323620c1a175ff1dd6699d8aa748.jpg',NULL,'1'),
(42,1,1,4,1,'artdoor-c4-30','','BROWN-MOTIF','pcs',0,0,100,'0',0,'1000x1000',NULL,NULL,NULL,'artdoor-c4-30','2022-06-21 12:57:32',22,'itakumala',0,'fab0c8d90af425f76e6decfdbcd49ae5.jpg',NULL,'1'),
(43,1,1,4,1,'artdoor-c5-30','','BROWN-MOTIF','pcs',0,0,100,'0',0,'1000x1000',NULL,NULL,NULL,'artdoor-c5-30','2022-06-21 12:58:11',22,'itakumala',0,'281127b2acfb9f74d025fa9740b5a01b.jpg',NULL,'1'),
(44,1,1,4,1,'artdoor-c6-30','','BROWN-MOTIF','pcs',0,0,100,'0',0,'1000x1000',NULL,NULL,NULL,'artdoor-c6-30','2022-06-21 12:59:19',22,'itakumala',0,'b6808daf5598db712fefb0ace8f63e20.jpg',NULL,'1'),
(45,1,1,4,1,'artdoor-c7-30','','BROWN-MOTIF','pcs',0,0,100,'0',0,'1000x1000',NULL,NULL,NULL,'artdoor-c7-30','2022-06-21 12:59:52',22,'itakumala',0,'be45ddcdb3c990f5728fd163a715e2ab.jpg',NULL,'1'),
(46,1,1,4,1,'artdoor-m1-40','','BROWN-MOTIF','pcs',0,0,100,'0',0,'1000x1000',NULL,NULL,NULL,'artdoor-m1-40','2022-06-21 13:00:26',22,'itakumala',0,'61b91a3c66e14a476cc6a79f9ef0f3bd.jpg',NULL,'1'),
(47,1,1,4,1,'artdoor-m2-40','','BROWN-MOTIF','pcs',0,0,100,'0',0,'1000x1000',NULL,NULL,NULL,'artdoor-m2-40','2022-06-21 13:01:20',22,'itakumala',0,'83f984268a0e7c46afbf27716c222f46.jpg',NULL,'1'),
(48,1,1,4,1,'artdoor-m3-40','','BROWN-MOTIF','pcs',0,0,100,'0',0,'1000x1000',NULL,NULL,NULL,'artdoor-m3-40','2022-06-21 13:01:57',22,'itakumala',0,'8659415ecae573b608ac37f276823b9d.jpg',NULL,'1'),
(49,1,1,4,1,'artdoor-m4-40','','BROWN-MOTIF','pcs',0,0,100,'0',0,'1000x1000',NULL,NULL,NULL,'artdoor-m4-40','2022-06-21 13:02:36',22,'itakumala',0,'45fb67f229d30b0862e561ca8b23fe13.jpg',NULL,'1'),
(50,1,1,4,1,'artdoor-m5-40','','BROWN-MOTIF','pcs',0,0,100,'0',0,'1000x1000',NULL,NULL,NULL,'artdoor-m5-40','2022-06-21 13:03:34',22,'itakumala',0,'5a3a7ddfadc5c622da99ee83861ae327.jpg',NULL,'1'),
(51,1,1,4,1,'artdoor-m6-40','','WHITE-BROWN','pcs',0,0,100,'0',0,'1000x1000',NULL,NULL,NULL,'artdoor-m6-40','2022-06-21 13:04:59',22,'itakumala',0,'8b100e1a96ff3d97095d89cfb50e54c2.jpg',NULL,'1'),
(52,1,1,4,1,'artdoor-m7-40','','WHITE-BROWN','pcs',0,0,100,'0',0,'1000x1000',NULL,NULL,NULL,'artdoor-m7-40','2022-06-21 13:06:11',22,'itakumala',0,'b532c4072298f562861fbb82d2caf62e.jpg',NULL,'1'),
(53,1,1,4,1,'artdoor-n1-50','','WHITE','pcs',0,0,100,'0',0,'1000x1000',NULL,NULL,NULL,'artdoor-n1-50','2022-06-21 13:15:52',22,'itakumala',0,'0618d5fad4bbc7d50e3b00fcda161103.jpg',NULL,'1'),
(54,1,1,4,1,'artdoor-n2-50','','WHITE','pcs',0,0,100,'0',0,'1000x1000',NULL,NULL,NULL,'artdoor-n2-50','2022-06-21 13:16:31',22,'itakumala',0,'9c4eae78d3a0a0ea38911321d4266e3b.jpg',NULL,'1'),
(55,1,1,4,1,'artdoor-n3-50','','WHITE','pcs',0,0,100,'0',0,'1000x1000',NULL,NULL,NULL,'artdoor-n3-50','2022-06-21 13:17:31',22,'itakumala',0,'80fc11e5dc6789a61d86be1db7f9fd89.jpg',NULL,'1'),
(56,1,1,4,1,'artdoor-p1-59','','ABU-ABU','pcs',0,0,100,'0',0,'1000x1000',NULL,NULL,NULL,'artdoor-p1-59','2022-06-21 13:20:53',22,'itakumala',0,'77c5e1a7db29ecc36e561710a724b126.jpg',NULL,'1'),
(57,1,1,4,1,'artdoor-r1-60','','BROWN ','pcs',0,0,100,'0',0,'1000x1000',NULL,NULL,NULL,'artdoor-r1-60','2022-06-21 13:22:26',22,'itakumala',0,'e226b859db9b3071c1b03cc1ebcf4acf.jpg',NULL,'1'),
(58,1,2,6,1,'felice-f1a-putih','','WHITE','pcs',0,0,100,'0',0,'1000x1000',NULL,NULL,NULL,'felice-f1a-putih','2022-06-21 13:25:19',22,'itakumala',0,'ce5ddbd1cc2f96970f5b72a99a6c1c2e.jpg','90.jpg','1'),
(59,1,2,6,1,'felice-f2a-putih','','WHITE','pcs',0,0,100,'0',0,'1000x1000',NULL,NULL,NULL,'felice-f2a-putih','2022-06-21 13:25:56',22,'itakumala',0,'a0937442e5f4aead27e8b08cffbb1f68.jpg','90.jpg','1'),
(60,1,2,7,1,'sash-sd1-putih','','WHITE','pcs',0,0,100,'0',0,'1000x1000',NULL,NULL,NULL,'sash-sd1-putih','2022-06-21 13:26:53',22,'itakumala',0,'bb428233e13eb5906971b7b9787d2f72.jpg','90.jpg','1'),
(61,1,2,7,1,'sash-sd2-putih','','WHITE','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'sash-sd2-putih','2022-06-21 13:40:54',22,'itakumala',0,'08959357d1a458d312f6c97010913b28.jpg','90.jpg','1'),
(62,1,2,7,1,'sash-sd3-putih','','WHITE','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'sash-sd3-putih','2022-06-21 13:41:48',22,'itakumala',0,'3396b81d135cff30b2e2d40de19b00e9.jpg','90.jpg','1'),
(63,1,2,7,1,'sash-sd4-putih','','WHITE','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'sash-sd4-putih','2022-06-21 13:42:26',22,'itakumala',0,'c8e510db67c9f97887c84cc69ed0cc74.jpg','90.jpg','1'),
(64,1,2,7,1,'sash-sd5-putih','','WHITE','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'sash-sd5-putih','2022-06-21 13:42:56',22,'itakumala',0,'a195b151a5ff180875ae1bd0cb1a14af.jpg','90.jpg','1'),
(65,1,2,7,1,'sash-sd6-putih','','WHITE','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'sash-sd6-putih','2022-06-21 13:43:25',22,'itakumala',0,'1ef29d0358aa4cae51f54ca8b41e480b.jpg','90.jpg','1'),
(66,1,2,7,1,'sash-sd7-putih','','WHITE','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'sash-sd7-putih','2022-06-21 13:44:48',22,'itakumala',0,'8e101348eb512d9a99dee936468b7776.jpg','90.jpg','1'),
(67,1,3,9,1,'eco-ed2-cy10','','WHITE','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'eco-ed2-cy10','2022-06-21 13:54:36',22,'itakumala',0,'b1ab49db3f9c46ecd18cdb8584f28704.jpg',NULL,'1'),
(68,1,3,9,1,'eco-ed3-co20','','BROWN','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'eco-ed3-co20','2022-06-21 14:02:09',22,'itakumala',0,'22c518f0af2d697947100c97cfae3455.jpg',NULL,'1'),
(69,1,3,9,1,'eco-ed4-cy20','','WHITE','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'eco-ed4-cy20','2022-06-21 14:03:11',22,'itakumala',0,'58d2f2959653e4e795183b845fb1553b.jpg',NULL,'1'),
(70,1,3,9,1,'eco-ed5-cg60','','ABU-ABU','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'eco-ed5-cg60','2022-06-21 14:51:32',22,'itakumala',0,'6343283609ffc2f9eda00fd4f176de00.jpg',NULL,'1'),
(71,1,3,9,1,'eco-ed6-co10','','BROWN','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'eco-ed6-co10','2022-06-21 15:09:39',22,'itakumala',0,'87dd5f79288c284cb280d26455033155.jpg','27.jpg','1'),
(72,1,3,9,2,'eco-ed7-cw10','','BROWN ','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'eco-ed7-cw10','2022-06-22 07:59:05',22,'itakumala',0,'db58236a67a2781da7b7a3ad706f9962.jpg',NULL,'1'),
(73,1,3,9,2,'eco-ed8-cy40','','CLAY','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'eco-ed8-cy40','2022-06-22 08:00:06',22,'itakumala',0,'e1ced31dde35cefe57dcd52d667b831d.jpg',NULL,'1'),
(74,1,2,9,2,'eco-ed10-co20','','BROWN ','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'eco-ed10-co20','2022-06-22 08:00:56',22,'itakumala',0,'7e9c1219427e1077601b622e8273bf15.jpg',NULL,'1'),
(75,1,3,9,2,'eco-ed9-cy20','','WHITE','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'eco-ed9-cy20','2022-06-22 08:05:27',22,'itakumala',0,'5f65f31a4071fc9a1bd97ae82c2c2dec.jpg',NULL,'1'),
(76,1,3,9,2,'eco-ed11-cw10','','BROWN','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'eco-ed11-cw10','2022-06-22 08:06:12',22,'itakumala',0,'b5767e92460b813d5be76eb751d47ea9.jpg',NULL,'1'),
(77,1,3,9,2,'eco-ed12-cy10','','WHITE','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'eco-ed12-cy10','2022-06-22 08:07:08',22,'itakumala',0,'7ad3344c67e7c86cb96ddbab8332678c.jpg',NULL,'1'),
(78,1,3,9,2,'eco-ed13-cy20','','WHITE','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'eco-ed13-cy20','2022-06-22 08:07:50',22,'itakumala',0,'bc26937dc15e8ac4e2dbdd9c621d401e.jpg',NULL,'1'),
(79,1,3,9,2,'eco-ed14-co20','','BROWN','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'eco-ed14-co20','2022-06-22 08:08:39',22,'itakumala',0,'b40dca28ac6b942742eba39f179a21ff.jpg',NULL,'1'),
(80,1,3,8,2,'laminate-duo-bridge1-9010','','WHITE-BROWN','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'laminate-duo-bridge1-9010','2022-06-22 08:09:37',22,'itakumala',0,'b5c97146332df8e12325fc004efcafa1.jpg',NULL,'1'),
(81,1,3,8,1,'laminate-duo-bridge2-9010','','WHITE-BROWN','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'laminate-duo-bridge2-9010','2022-06-22 08:10:21',22,'itakumala',0,'d42b18ac8e63af8d923f8c6b9726ac4f.jpg',NULL,'1'),
(82,1,3,8,2,'laminate-duo-matrix-2510','','BROWN','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'laminate-duo-matrix-2510','2022-06-22 08:11:43',22,'itakumala',0,'66ace50911edd73baf29c359329ca521.jpg',NULL,'1'),
(83,1,3,8,2,'laminate-duo-shield-2510','','BROWN','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'laminate-duo-shield-2510','2022-06-22 08:12:15',22,'itakumala',0,'b6293c47dfd5991417b8ca63d7dd7703.jpg',NULL,'1'),
(84,1,3,8,2,'laminate-duo-strata-3010','','BROWN','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'laminate-duo-strata-3010','2022-06-22 08:12:47',22,'itakumala',0,'d15e4b2f9bc3a15d934cac30d9f54d95.jpg',NULL,'1'),
(85,1,3,8,2,'laminate-duo-stream-1030','','BROWN','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'laminate-duo-stream-1030','2022-06-22 08:13:24',22,'itakumala',0,'cf41ca04d0bf725558645679f8c15b69.jpg',NULL,'1'),
(86,1,3,8,2,'laminate-uno-bridge1-25','','BROWN','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'laminate-uno-bridge1-25','2022-06-22 08:14:31',22,'itakumala',0,'4ada34224aaf9e0dbd1acc6405d7b776.jpg',NULL,'1'),
(87,1,3,8,2,'laminate-uno-bridge2-30','','BROWN','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'laminate-uno-bridge2-30','2022-06-22 08:15:09',22,'itakumala',0,'a428b279b45b4028f83c01d731b37a32.jpg',NULL,'1'),
(88,1,3,8,2,'laminate-uno-cloud-25','','BROWN','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'laminate-uno-cloud-25','2022-06-22 08:15:46',22,'itakumala',0,'2fd4d722aa1cfaf70fe2b0b7a7f113ab.jpg',NULL,'1'),
(89,1,3,8,2,'laminate-uno-matrix-10','','BROWN','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'laminate-uno-matrix-10','2022-06-22 08:16:21',22,'itakumala',0,'523709b3206c5709b3e28a989d8d6a14.jpg',NULL,'1'),
(90,1,3,8,2,'laminate-uno-nude-10','','BROWN','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'laminate-uno-nude-10','2022-06-22 08:16:52',22,'itakumala',0,'ecbafebd4891cd11fc2204a3bad5edca.jpg',NULL,'1'),
(91,1,3,8,2,'laminate-uno-shield-90','','WHITE','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'laminate-uno-shield-90','2022-06-22 08:17:32',22,'itakumala',0,'8ae0dc9554028e4bb9d3caa600e2069f.jpg',NULL,'1'),
(92,1,3,8,1,'laminate-uno-strata-25','','BROWN','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'laminate-uno-strata-25','2022-06-22 08:17:59',22,'itakumala',0,'c0719614e7267fddc7224fe4c6597fee.jpg',NULL,'1'),
(93,1,3,8,2,'laminate-uno-stream-30','','BROWN','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'laminate-uno-stream-30','2022-06-22 08:18:38',22,'itakumala',0,'ef593be3d85541ae9d71cbda34aa9a7b.jpg',NULL,'1'),
(94,1,3,11,2,'timber-ag-a1-cw10','','BROWN','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'timber-ag-a1-cw10','2022-06-22 08:19:30',22,'itakumala',0,'080928b1722c8c25b86a4ba8c992bc6b.jpg',NULL,'1'),
(95,1,3,11,2,'timber-ag-a2-cw20','','BROWN','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'timber-ag-a2-cw20','2022-06-22 08:20:17',22,'itakumala',0,'4f77f3cf86eb10ff61f5157eb92a4f2d.jpg',NULL,'1'),
(96,1,3,11,2,'timber-ag-b1-co10','','BROWN','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'timber-ag-b1-co10','2022-06-22 08:21:00',22,'itakumala',0,'91f5f624102876d6dd96878566d73019.jpg',NULL,'1'),
(97,1,3,11,2,'timber-ag-b2-co20','','BROWN','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'timber-ag-b2-co20','2022-06-22 08:21:34',22,'itakumala',0,'c9ee1dfd77aea4852e1dbb46bb088b28.jpg',NULL,'1'),
(98,1,3,11,2,'timber-ag-b3-cg20','','ABU-ABU','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'timber-ag-b3-cg20','2022-06-22 08:22:18',22,'itakumala',0,'0b9ec2df5040bc04d9357b27f4951cd9.jpg',NULL,'1'),
(99,1,3,11,2,'timber-ag-c2-ch10','','WHITE','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'timber-ag-c2-ch10','2022-06-22 08:23:19',22,'itakumala',0,'dfbf248dfc5d65166a9087eb641600f7.jpg',NULL,'1'),
(100,1,3,11,2,'timber-ag-b4-cy10','','CLAY','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'timber-ag-b4-cy10','2022-06-22 08:24:18',22,'itakumala',0,'88a1b6cc860b9892be79aab85b30df39.jpg',NULL,'1'),
(101,1,3,11,2,'timber-ag-b5-cy30','','ABU-ABU','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'timber-ag-b5-cy30','2022-06-22 08:24:55',22,'itakumala',0,'f5a410766c59976882267cf2907937ef.jpg',NULL,'1'),
(102,1,3,11,2,'timber-ag-d2-cw10','','BROWN ','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'timber-ag-d2-cw10','2022-06-22 08:25:34',22,'itakumala',0,'afadab8d019b0ee3e08a4896aa00bcef.jpg','60.JPG','1'),
(103,1,3,11,2,'timber-ag-d3-co10','','BROWN ','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'timber-ag-d3-co10','2022-06-22 08:26:14',22,'itakumala',0,'42c93a6f6d72820d4a28bc3570be4b70.jpg','60.JPG','1'),
(104,1,3,11,2,'timber-ag-f1-co20','','BROWN','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'timber-ag-f1-co20','2022-06-22 08:31:41',22,'itakumala',0,'52e330ee3e5465ac6dfaba6a28277413.jpg','60.JPG','1'),
(105,1,3,11,2,'timber-aw-a1-cw10','','BROWN','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'timber-aw-a1-cw10','2022-06-22 08:32:28',22,'itakumala',0,'ffa0669032c48047caf8b9cc805234f6.jpg','60.JPG','1'),
(106,1,3,11,2,'timber-aw-b1-cw20','','BROWN ','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'timber-aw-b1-cw20','2022-06-22 08:33:11',22,'itakumala',0,'a745c8b2fef1c46202b13ae1268f6a68.jpg','60.JPG','1'),
(107,1,3,10,2,'veneer-onetone-vd1','','BROWN','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'veneer-onetone-vd1','2022-06-22 08:34:19',22,'itakumala',0,'5cf1674e2739a9bcdf0187abf6c9285f.jpg','60.JPG','1'),
(108,1,3,10,2,'veneer-onetone-vd2','','BROWN','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'veneer-onetone-vd2','2022-06-22 08:35:12',22,'itakumala',0,'daa9ee46c5f491972f921cc496266b6f.jpg','60.JPG','1'),
(109,1,3,10,2,'veneer-onetone-vd3','','BROWN ','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'veneer-onetone-vd3','2022-06-22 08:35:48',22,'itakumala',0,'f2af1c1f973b40b152259311ef952b18.jpg','60.JPG','1'),
(110,1,3,10,2,'veneer-onetone-vd4','','BROWN ','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'veneer-onetone-vd4','2022-06-22 08:36:28',22,'itakumala',0,'549318307b0b3b740ea8780a7a3a5e9a.jpg','60.JPG','1'),
(111,1,3,10,2,'veneer-onetone-vd5','','BROWN ','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'veneer-onetone-vd5','2022-06-22 08:36:57',22,'itakumala',0,'019283f12f032df66ec66cc21d865586.jpg','60.JPG','1'),
(112,1,3,10,2,'veneer-onetone-vd6','','BROWN','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'veneer-onetone-vd6','2022-06-22 08:37:32',22,'itakumala',0,'ae3dbf478463ec37c8160c4efecec442.jpg','60.JPG','1'),
(113,1,3,10,2,'veneer-onetone-vd7','','BROWN ','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'veneer-onetone-vd7','2022-06-22 08:38:03',22,'itakumala',0,'ccca3908777435b810241b8fd72df6c1.jpg','60.JPG','1'),
(114,1,3,10,2,'veneer-twotone-vd1','','BROWN','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'veneer-twotone-vd1','2022-06-22 08:38:32',22,'itakumala',0,'5ca107335c3097ac5f290acca45c9cfa.jpg','60.JPG','1'),
(115,1,3,10,2,'veneer-twotone-vd1','','BROWN','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'veneer-twotone-vd1','2022-06-22 08:39:00',22,'itakumala',0,'a38331183ae422d3f2a45b0a1fd5601c.jpg','60.JPG','1'),
(116,1,3,10,2,'veneer-twotone-vd2','','BROWN ','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'veneer-twotone-vd2','2022-06-22 08:39:27',22,'itakumala',0,'7b5a5c502be66f0d0be66cb811458fba.jpg','60.JPG','1'),
(117,1,3,10,2,'veneer-twotone-vd2','','BROWN ','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'veneer-twotone-vd2','2022-06-22 08:43:14',22,'itakumala',0,'f86bf0004c0d4771a64a6a7b25239920.jpg','60.JPG','1'),
(118,1,3,10,2,'veneer-twotone-vd3','','BROWN','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'veneer-twotone-vd3','2022-06-22 08:43:50',22,'itakumala',0,'8327ca5b1f6e4360ff64c87aeb9b6ac2.jpg','60.JPG','1'),
(119,1,3,10,2,'veneer-twotone-vd4','','BROWN ','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'veneer-twotone-vd4','2022-06-22 08:44:26',22,'itakumala',0,'d0745c09273278b0e65a1d6436a9b1d3.jpg','60.JPG','1'),
(120,1,3,10,2,'veneer-twotone-vd6','','BROWN','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'veneer-twotone-vd6','2022-06-22 08:44:54',22,'itakumala',0,'0aa653757d5f5c9a23c9dafbefbeb79f.jpg','60.JPG','1'),
(121,1,3,10,2,'veneer-twotone-vd7','','BROWN','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'veneer-twotone-vd7','2022-06-22 08:45:25',22,'itakumala',0,'74a54336b6e57b4a3c05b7173b5f6ae7.jpg','60.JPG','1'),
(122,1,3,4,2,'veneer-twotone-vd7','','BROWN ','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'veneer-twotone-vd7','2022-06-22 08:46:29',22,'itakumala',0,'51d3bfeb62e9fb650e71e081561b53d7.jpg','60.JPG','1'),
(123,1,3,4,2,'artdoor-ad-p3-cg20','','ABU-ABU','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'artdoor-ad-p3-cg20','2022-06-22 08:47:28',22,'itakumala',0,'3bae7542d4357961b56885c4dc330b1d.jpg','59.JPG','1'),
(124,1,3,4,2,'artdoor-ad-p4-cg20','','ABU-ABU','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'artdoor-ad-p4-cg20','2022-06-22 08:50:21',22,'itakumala',0,'469293f296cc407383f1141ad5faecca.jpg','59.JPG','1'),
(125,1,3,4,2,'artdoor-ad-p5-cg20','','ABU-ABU','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'artdoor-ad-p5-cg20','2022-06-22 08:50:53',22,'itakumala',0,'025105e41eb9492494aa4c348fa05728.jpg','59.JPG','1'),
(126,1,3,4,2,'artdoor-ad-p6-cg20','','ABU-ABU','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'artdoor-ad-p6-cg20','2022-06-22 08:51:25',22,'itakumala',0,'1fe9bb17b048ec35df4a0c86a11407cf.jpg','59.JPG','1'),
(127,1,3,12,2,'artdoor-ad-p7-cg20','','ABU-ABU','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'artdoor-ad-p7-cg20','2022-06-22 08:52:13',22,'itakumala',0,'4763fea8e91718bf0ff3d310f0bf28d3.jpg','59.JPG','1'),
(128,2,4,13,1,'upvc-jendela-fixed2','','WHITE','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'upvc-jendela-fixed2','2022-06-22 09:20:25',22,'itakumala',0,'8770b609f048e43c838337479dff3b49.jpg','veronastone-57.jpg','1'),
(129,2,4,13,1,'upvc-jendela-jungkit1','','WHITE','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'upvc-jendela-jungkit1','2022-06-22 09:21:07',22,'itakumala',0,'5e90f18511fb47a5f45571684b94cf50.jpg','veronastone-57.jpg','1'),
(130,2,4,13,1,'upvc-jendela-jungkit2','','WHITE','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'upvc-jendela-jungkit2','2022-06-22 09:21:36',22,'itakumala',0,'d95071dc3fa0cf53bec4950cd51d2614.jpg','veronastone-57.jpg','1'),
(131,2,4,13,1,'upvc-jendela-sliding+grid1','','WHITE','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'upvc-jendela-sliding+grid1','2022-06-22 09:22:05',22,'itakumala',0,'dbe8ba543f8687951e7f4d437ae0492d.jpg','veronastone-57.jpg','1'),
(132,2,4,13,1,'upvc-jendela-sliding+grid2','','WHITE','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'upvc-jendela-sliding+grid2','2022-06-22 09:32:04',22,'itakumala',0,'a3fa6b424288b41fe0a6c9e3bfc2804e.jpg','veronastone-57.jpg','1'),
(133,2,4,13,1,'upvc-jendela-sliding1','','WHITE','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'upvc-jendela-sliding1','2022-06-22 09:32:42',22,'itakumala',0,'48c7b2665a22e7247c020fb77eb43cf2.jpg','veronastone-57.jpg','1'),
(134,2,4,13,1,'upvc-jendela-sliding2','','WHITE','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'upvc-jendela-sliding2','2022-06-22 09:33:16',22,'itakumala',0,'31cb78ecb01bb8003e0fcb86398074dd.jpg','veronastone-57.jpg','1'),
(135,3,5,14,1,'plafon-acc2','','WHITE','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'plafon-acc2','2022-06-22 09:37:02',22,'itakumala',0,'ef4dbdba6c303ffbde01df487da20b16.jpg',NULL,'1'),
(136,3,5,14,1,'plafon-acc3','','WHITE','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'plafon-acc3','2022-06-22 09:38:21',22,'itakumala',0,'c5d3a6173faed81610e1d005b8415b86.jpg',NULL,'1'),
(137,3,5,14,1,'plafon-acc4','','WHITE','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'plafon-acc4','2022-06-22 09:38:56',22,'itakumala',0,'ed19632fb86a68efaebc3e561635f090.jpg',NULL,'1'),
(138,3,5,16,1,'plafon-deco-pd1','','WHITE-MOTIF','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'plafon-deco-pd1','2022-06-22 09:39:54',22,'itakumala',0,'c961bbf04d12bc2409b0d5d0c6a92628.jpg',NULL,'1'),
(139,3,5,16,1,'plafon-deco-pd2','','WHITE-MOTIF','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'plafon-deco-pd2','2022-06-22 09:42:08',22,'itakumala',0,'0113ae0364d999db3486dbd42c63519d.jpg',NULL,'1'),
(140,3,5,16,1,'plafon-deco-pd3','','WHITE-MOTIF','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'plafon-deco-pd3','2022-06-22 09:42:51',22,'itakumala',0,'82386485d648b5c02c8c978b0ddb7285.jpg',NULL,'1'),
(141,3,5,16,1,'plafon-deco-pd5','','WHITE-MOTIF','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'plafon-deco-pd5','2022-06-22 09:43:33',22,'itakumala',0,'897f038dfc9ab2c0ea02ba965b563b6f.jpg',NULL,'1'),
(142,3,5,16,1,'plafon-deco-pd6','','RED','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'plafon-deco-pd6','2022-06-22 09:48:24',22,'itakumala',0,'75635fb96e82ab318dc1e27e11c69a01.jpg',NULL,'1'),
(143,3,5,16,1,'plafon-deco-pd7','','BLUE','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'plafon-deco-pd7','2022-06-22 09:49:00',22,'itakumala',0,'6f7a6096a24af3ef4e4a303692eb0976.jpg',NULL,'1'),
(144,3,5,16,1,'plafon-deco-pd8','','RED','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'plafon-deco-pd8','2022-06-22 09:49:42',22,'itakumala',0,'8a5b29b945d503641658a63d0933fd26.jpg',NULL,'1'),
(145,3,5,16,1,'plafon-deco-pd9','','BROWN ','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'plafon-deco-pd9','2022-06-22 09:50:29',22,'itakumala',0,'c2e5a9341bc3545b7b7b034d8de6addf.jpg',NULL,'1'),
(146,3,5,16,1,'plafon-deco-pd10','','BROWN','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'plafon-deco-pd10','2022-06-22 09:53:38',22,'itakumala',0,'53756b96006871e1363461aafd1c85aa.jpg',NULL,'1'),
(147,3,5,15,1,'plafon-lam-10','','BROWN','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'plafon-lam-10','2022-06-22 09:54:12',22,'itakumala',0,'979ccdaac3e1105391c6ad4104606fca.jpg',NULL,'1'),
(148,3,5,15,1,'plafon-lam-20','','BROWN','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'plafon-lam-20','2022-06-22 09:54:49',22,'itakumala',0,'c6a16a9cb935e97ed735193556404f28.jpg',NULL,'1'),
(149,3,5,15,1,'plafon-lam-25','','BROWN','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'plafon-lam-25','2022-06-22 09:55:27',22,'itakumala',0,'b34d7748803d73022217f8d431aa1c90.jpg',NULL,'1'),
(150,3,5,15,1,'plafon-lam-30','','BROWN-MOTIF','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'plafon-lam-30','2022-06-22 09:56:02',22,'itakumala',0,'5768829845db5f12cc7aa742cb72c6ba.jpg',NULL,'1'),
(151,1,1,1,1,'classic-2-20','','50','pcs',0,0,0,'0',0,'0',0,0,0,'classic-2-20','2022-06-22 10:07:27',22,'itakumala',0,'87b34d666e8e43a56132192226520952.jpg','50.JPG','1'),
(152,3,5,15,1,'plafon-lam-40','','ABU-ABU','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'plafon-lam-40','2022-06-22 09:58:07',22,'itakumala',0,'67d1da059b8d04e45fbd641ce5c5c078.jpg',NULL,'0'),
(153,1,1,2,1,'fortebello-a-20','','20','pcs',0,0,0,'0',0,NULL,NULL,0,NULL,NULL,'2022-06-22 10:16:38',NULL,NULL,0,'728132cbfb0d182de705f77977a55a33.jpg','20.JPG','0'),
(154,1,1,2,1,'fortebello-a-20','','30','',NULL,NULL,0,'',0,NULL,NULL,NULL,NULL,NULL,'2022-06-22 10:18:43',NULL,NULL,0,'728132cbfb0d182de705f77977a55a33.jpg','30.JPG','0'),
(155,1,1,2,1,'fortebello-a-20','','40','',NULL,NULL,0,'',0,NULL,NULL,NULL,NULL,NULL,'2022-06-22 10:18:50',NULL,NULL,0,'728132cbfb0d182de705f77977a55a33.jpg','40.JPG','0'),
(156,1,1,2,1,'fortebello-a-20','','50','',NULL,NULL,0,'',0,NULL,NULL,NULL,NULL,NULL,'2022-06-22 10:18:56',NULL,NULL,0,'728132cbfb0d182de705f77977a55a33.jpg','50.JPG','0'),
(157,1,1,2,1,'fortebello-a-20','','60','',NULL,NULL,0,'',0,NULL,NULL,NULL,NULL,NULL,'2022-06-22 10:19:02',NULL,NULL,0,'728132cbfb0d182de705f77977a55a33.jpg','60.JPG','0'),
(158,1,1,2,1,'fortebello-a-20','','70','',NULL,NULL,0,'',0,NULL,NULL,NULL,NULL,NULL,'2022-06-22 10:19:07',NULL,NULL,0,'728132cbfb0d182de705f77977a55a33.jpg','70.JPG','0'),
(159,1,1,2,1,'fortebello-a-20','','80','',NULL,NULL,0,'',0,NULL,NULL,NULL,NULL,NULL,'2022-06-22 10:19:13',NULL,NULL,0,'728132cbfb0d182de705f77977a55a33.jpg','80.JPG','0'),
(160,1,1,2,1,'fortebello-a-20','','90','',NULL,NULL,0,'',0,NULL,NULL,NULL,NULL,NULL,'2022-06-22 10:19:18',NULL,NULL,0,'728132cbfb0d182de705f77977a55a33.jpg','90.JPG','0'),
(161,1,1,2,1,'fortebello-b-10','','10','pcs',NULL,0,100,'0',0,NULL,NULL,NULL,NULL,'fortebello-b-10','2022-06-22 10:23:41',22,'itakumala',0,'f1fbe374368c4da3e31798da0eb49ca0.jpg','10.jpg','1'),
(162,1,1,2,1,'fortebello-b-10','','20','',NULL,NULL,0,'',0,NULL,NULL,NULL,NULL,NULL,'2022-06-22 10:38:27',NULL,NULL,0,'f1fbe374368c4da3e31798da0eb49ca0.jpg','20.jpg','0'),
(163,1,1,2,1,'fortebello-b-10','','30','',NULL,NULL,0,'',0,NULL,NULL,NULL,NULL,NULL,'2022-06-22 10:38:28',NULL,NULL,0,'f1fbe374368c4da3e31798da0eb49ca0.jpg','30.jpg','0'),
(164,1,1,2,1,'fortebello-b-10','','40','',NULL,NULL,0,'',0,NULL,NULL,NULL,NULL,NULL,'2022-06-22 10:39:10',NULL,NULL,0,'f1fbe374368c4da3e31798da0eb49ca0.jpg','40.jpg','0'),
(165,1,1,2,1,'fortebello-b-10','','50','',NULL,NULL,0,'',0,NULL,NULL,NULL,NULL,NULL,'2022-06-22 10:39:16',NULL,NULL,0,'f1fbe374368c4da3e31798da0eb49ca0.jpg','50.jpg','0'),
(166,1,1,2,1,'fortebello-b-10','','60','',NULL,NULL,0,'',0,NULL,NULL,NULL,NULL,NULL,'2022-06-22 10:39:20',NULL,NULL,0,'f1fbe374368c4da3e31798da0eb49ca0.jpg','60.jpg','0'),
(167,1,1,2,1,'fortebello-b-10','','70','',NULL,NULL,0,'',0,NULL,NULL,NULL,NULL,NULL,'2022-06-22 10:39:27',NULL,NULL,0,'f1fbe374368c4da3e31798da0eb49ca0.jpg','70.jpg','0'),
(168,1,1,2,1,'fortebello-b-10','','80','',NULL,NULL,0,'',0,NULL,NULL,NULL,NULL,NULL,'2022-06-22 10:39:32',NULL,NULL,0,'f1fbe374368c4da3e31798da0eb49ca0.jpg','80.jpg','0'),
(169,1,1,2,1,'fortebello-b-10','','90','',NULL,NULL,0,'',0,NULL,NULL,NULL,NULL,NULL,'2022-06-22 10:39:37',NULL,NULL,0,'f1fbe374368c4da3e31798da0eb49ca0.jpg','90.jpg','0'),
(170,1,1,2,1,'fortebello-c-60','','20','pcs',0,0,0,'',0,NULL,NULL,NULL,NULL,NULL,'2022-06-22 10:49:48',NULL,NULL,0,'bc903ae2e22e7082fcdd2a8b817d79c5.jpg','20.jpg','0'),
(171,1,1,2,1,'fortebello-c-60','','30','pcs',0,0,0,'',0,NULL,NULL,NULL,NULL,NULL,'2022-06-22 10:50:25',NULL,NULL,0,'bc903ae2e22e7082fcdd2a8b817d79c5.jpg','30.jpg','0'),
(172,1,1,2,1,'fortebello-c-60','','40','pcs',0,0,0,'',0,NULL,NULL,NULL,NULL,NULL,'2022-06-22 10:50:31',NULL,NULL,0,'bc903ae2e22e7082fcdd2a8b817d79c5.jpg','40.jpg','0'),
(173,1,1,2,1,'fortebello-c-60','','50','pcs',0,0,0,'',0,NULL,NULL,NULL,NULL,NULL,'2022-06-22 10:50:35',NULL,NULL,0,'bc903ae2e22e7082fcdd2a8b817d79c5.jpg','50.jpg','0'),
(174,1,1,2,1,'fortebello-c-60','','60','pcs',0,0,0,'',0,NULL,NULL,NULL,NULL,NULL,'2022-06-22 10:50:40',NULL,NULL,0,'bc903ae2e22e7082fcdd2a8b817d79c5.jpg','60.jpg','0'),
(175,1,1,2,1,'fortebello-c-60','','70','pcs',0,0,0,'',0,NULL,NULL,NULL,NULL,NULL,'2022-06-22 10:50:45',NULL,NULL,0,'bc903ae2e22e7082fcdd2a8b817d79c5.jpg','70.jpg','0'),
(176,1,1,2,1,'fortebello-c-60','','80','pcs',0,0,0,'',0,NULL,NULL,NULL,NULL,NULL,'2022-06-22 10:50:49',NULL,NULL,0,'bc903ae2e22e7082fcdd2a8b817d79c5.jpg','80.jpg','0'),
(177,1,1,2,1,'fortebello-c-60','','90','pcs',0,0,0,'',0,NULL,NULL,NULL,NULL,NULL,'2022-06-22 10:50:55',NULL,NULL,0,'bc903ae2e22e7082fcdd2a8b817d79c5.jpg','90.jpg','0');

/*Table structure for table `tbl_video` */

DROP TABLE IF EXISTS `tbl_video`;

CREATE TABLE `tbl_video` (
  `video_id` int(11) NOT NULL AUTO_INCREMENT,
  `video_judul` varchar(60) DEFAULT NULL,
  `video_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `video_video` varchar(40) DEFAULT NULL,
  `video_album_id` int(11) DEFAULT NULL,
  `video_pengguna_id` int(11) DEFAULT NULL,
  `video_author` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`video_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

/*Data for the table `tbl_video` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
