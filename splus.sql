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
  `kategori_deskripsi` text NOT NULL,
  `kategori_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `kategori_pengguna_id` int(11) DEFAULT NULL,
  `kategori_author` varchar(60) DEFAULT NULL,
  `kategori_count` int(11) DEFAULT 0,
  `kategori_cover` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`kategori_id`) USING BTREE,
  KEY `album_pengguna_id` (`kategori_pengguna_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

/*Data for the table `tbl_kategori` */

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
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_pelanggan` */

insert  into `tbl_pelanggan`(`id`,`session_id`,`nama`,`email`,`telepon`,`handphone`,`alamat`,`kecamatan`,`kota`,`provinsi`,`kodepos`) values 
(9,'45370864514277036','andika','dya406321@gmail.com','087754379841','087754379841','jl, bakti II no. 23','Penjaringan','Kota Jakarta Utara','DKI Jakarta','14440'),
(8,'77147310108051726','Mangrana','splusindo255@gmail.com','0231869789','0856475867','Jl Danmoqot','Cilandak','Kota Jakarta Selatan','DKI Jakarta','45678');

/*Table structure for table `tbl_pembelian` */

DROP TABLE IF EXISTS `tbl_pembelian`;

CREATE TABLE `tbl_pembelian` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_pembelian` */

insert  into `tbl_pembelian`(`id`,`pelanggan_id`,`session_id`,`faktur`,`nama_produk`,`tipe_produk`,`harga_produk_meter`,`lebar_produk`,`tinggi_produk`,`warna_produk`,`jumlah_produk`,`harga_produk`,`kurir_pengiriman`,`layanan_pengiriman`,`ongkos_pengiriman`,`tanggal_pengiriman`,`resi_pengiriman`,`catatan_pembelian`,`metode_pembayaran`,`diskon`,`status`) values 
(7,8,'77147310108051726','SMTT/30-06-20/7134','COMBI ROLL SCREEN','Rainbow',492800,1000,1000,'Brown',1,492800,'Citra Van Titipan Ki','ONS',70000,'2020-07-29',NULL,'Depan grand mall cilandak','MANDIRI',NULL,1),
(6,8,'77147310108051726','SMTT/30-06-20/7134','VERTICAL BLIND','ALEGRO 3000',632500,1000,1000,'White',2,1265000,'Citra Van Titipan Ki','ONS',70000,'2020-07-29',NULL,'Depan grand mall cilandak','MANDIRI',NULL,1),
(8,9,'45370864514277036','SMTT/08-02-21/4690','BLACKOUT ROLL SCREEN	','DGSB Series',453200,800,600,'Grey',1,217536,'Jalur Nugraha Ekakur','YES',75000,'0000-00-00',NULL,'','BCA',NULL,1);

/*Table structure for table `tbl_pengguna` */

DROP TABLE IF EXISTS `tbl_pengguna`;

CREATE TABLE `tbl_pengguna` (
  `pengguna_id` int(11) NOT NULL AUTO_INCREMENT,
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

/*Data for the table `tbl_pengguna` */

insert  into `tbl_pengguna`(`pengguna_id`,`pengguna_nama`,`pengguna_moto`,`pengguna_jenkel`,`pengguna_username`,`pengguna_password`,`pengguna_tentang`,`pengguna_email`,`pengguna_nohp`,`pengguna_facebook`,`pengguna_twitter`,`pengguna_linkdin`,`pengguna_google_plus`,`pengguna_status`,`pengguna_level`,`pengguna_register`,`pengguna_photo`) values 
(2,'S-Plus Indonesia',NULL,'L','smtechtex@splusindonesia.co.id','e471711af0db2f6c64df4f60573baa8e',NULL,'smtechtex@splusindonesia.co.id','(0231) 8511781',NULL,NULL,NULL,NULL,1,'1','2020-01-13 06:31:34','d540ba14929a5fbc859fcf8004d894fc.png'),
(3,'S-Plus Jakarta',NULL,'L','arul','4c9d830f39238c6607b162a92e528759',NULL,'jakarta@splusindonesia.co.id','(021) 62301599',NULL,NULL,NULL,NULL,1,'2','2020-04-07 13:59:55','b8167f3e2c7eca3e873838f066a50057.png'),
(4,'IT',NULL,'L','it','it123',NULL,'it@gmail.com','089235772503',NULL,NULL,NULL,NULL,1,'1','2022-01-13 03:21:25','31400d5a267e02e416784d3a6e820323.jpg');

/*Table structure for table `tbl_pengunjung` */

DROP TABLE IF EXISTS `tbl_pengunjung`;

CREATE TABLE `tbl_pengunjung` (
  `pengunjung_id` int(10) NOT NULL AUTO_INCREMENT,
  `pengunjung_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `pengunjung_ip` varchar(40) DEFAULT NULL,
  `pengunjung_perangkat` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`pengunjung_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=124767 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

/*Data for the table `tbl_pengunjung` */

insert  into `tbl_pengunjung`(`pengunjung_id`,`pengunjung_tanggal`,`pengunjung_ip`,`pengunjung_perangkat`) values 
(124759,'2022-01-13 12:32:30','::1','Chrome'),
(124760,'2022-01-13 13:09:56','127.0.0.1','Firefox'),
(124761,'2022-01-14 07:26:22','127.0.0.1','Firefox'),
(124762,'2022-01-14 14:46:51','::1','Chrome'),
(124763,'2022-01-15 07:36:22','::1','Chrome'),
(124764,'2022-01-17 07:27:22','::1','Chrome'),
(124765,'2022-01-18 08:11:41','::1','Chrome'),
(124766,'2022-01-19 08:08:49','::1','Chrome');

/*Table structure for table `tbl_produk` */

DROP TABLE IF EXISTS `tbl_produk`;

CREATE TABLE `tbl_produk` (
  `produk_id` int(20) NOT NULL AUTO_INCREMENT,
  `produk_slug` varchar(200) DEFAULT NULL,
  `produk_nama` varchar(100) DEFAULT NULL,
  `produk_kategori` varchar(100) DEFAULT NULL,
  `produk_gambar` varchar(200) DEFAULT NULL,
  `produk_deskripsi` text DEFAULT NULL,
  PRIMARY KEY (`produk_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

/*Data for the table `tbl_produk` */

insert  into `tbl_produk`(`produk_id`,`produk_slug`,`produk_nama`,`produk_kategori`,`produk_gambar`,`produk_deskripsi`) values 
(1,'sunshade-combi-roll-screen','Combi Roll Screen','Sunshade','combi/1.jpg','Sun shade merupakan gabungan dari PVC dengan kain serat fiber'),
(2,'sunshade-roll-screen','Roll Screen','Sunshade','roll-screen/1.jpg','Sun shade merupakan gabungan dari PVC dengan kain serat fiber'),
(3,'sunshade-sun-screen','Sun Screen','Sunshade','sun-screen/1.jpg','Sun shade merupakan gabungan dari PVC dengan kain serat fiber'),
(4,'sunshade-black-out-roll-screen','Blackout Roll Screen	','Sunshade','blackout/1.jpg','Sun shade merupakan gabungan dari PVC dengan kain serat fiber'),
(5,'sunshade-vertical-blind','Vertical Blind','Sunshade','vert-blind/1.jpg','Sun shade merupakan gabungan dari PVC dengan kain serat fiber'),
(6,'sunshade-horizontal-wood','Horizontal Wood','Sunshade','wood-blind/1.jpg','Sun shade merupakan gabungan dari PVC dengan kain serat fiber'),
(7,'sunshade-honeycomb','Honeycomb','Sunshade','honeycomb/1.jpg','Sun shade merupakan gabungan dari PVC dengan kain serat fiber'),
(8,'sunshade-horizontal-alumunium','Horizontal Alumunium','Sunshade','alumunium/1.jpg','Sun shade merupakan gabungan dari PVC dengan kain serat fiber'),
(9,'pintu-abs','Pintu','pintu','classic-2-20.jpg','Pintu ABS'),
(10,'window','window','window','window.jpg','window'),
(11,'interor-Material','Interor Material','Interor ',NULL,NULL),
(12,'exterior-Material','Exterior Material','Exterior',NULL,NULL),
(13,'Aksesoris','Aksesoris','Aksesoris',NULL,NULL),
(14,'Masker','Masker','Masker',NULL,NULL);

/*Table structure for table `tbl_produk_keranjang` */

DROP TABLE IF EXISTS `tbl_produk_keranjang`;

CREATE TABLE `tbl_produk_keranjang` (
  `keranjang_id` int(11) NOT NULL AUTO_INCREMENT,
  `session_id` varchar(100) DEFAULT NULL,
  `nama_produk` varchar(200) DEFAULT NULL,
  `tipe_produk` varchar(200) DEFAULT NULL,
  `harga_produk_meter` decimal(20,0) DEFAULT NULL,
  `lebar_produk` decimal(10,0) DEFAULT NULL,
  `tinggi_produk` decimal(10,0) DEFAULT NULL,
  `warna_produk` varchar(50) DEFAULT NULL,
  `jumlah_produk` decimal(10,0) DEFAULT NULL,
  `harga_produk` decimal(50,0) DEFAULT NULL,
  PRIMARY KEY (`keranjang_id`)
) ENGINE=MyISAM AUTO_INCREMENT=104 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_produk_keranjang` */

/*Table structure for table `tbl_produk_varian` */

DROP TABLE IF EXISTS `tbl_produk_varian`;

CREATE TABLE `tbl_produk_varian` (
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

/*Data for the table `tbl_produk_varian` */

insert  into `tbl_produk_varian`(`varian_id`,`produk_id`,`varian_type`,`varian_nama`,`varian_gambar_depan`,`varian_gambar_utama`,`varian_gambar_warna`,`varian_harga`,`varian_harga_meter`,`varian_jumlah`,`varian_deskripsi`,`varian_ukuran`,`varian_warna`,`tokopedia`,`bukalapak`) values 
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
(142,9,'classic-2','classic-2','','classic/classic-2-20.jpg','warna_new/10.jpg',0,657800,NULL,'Pintu ABS','1000x1000','BROWN','https://www.tokopedia.com/splus-indonesia/roller-blind-s-plus-horizontal-aluminium-35-mm-dot-uk-70x150-cm-silver','https://www.bukalapak.com/p/rumah-tangga/furniture-interior/dekorasi-rumah/3e9n606-jual-roller-blind-s-plus-horizontal-aluminium-35-mm-dot-uk-70x150-cm?from=product_owner&product_owner=normal_seller'),
(143,9,'classic-1','classic-1','pintu/classic-1-50.jpg','pintu/classic-1-50.jpg','warna_new/veronastone-57.jpg',0,657800,NULL,'Pintu ABS','1000x1000','WHITE',NULL,NULL),
(144,9,'classic-1','classic-1',NULL,'classic/classic-1-50.jpg','warna_new/10.jpg',0,657800,NULL,'Pintu ABS','1000x1000','BLACK',NULL,NULL),
(145,9,'classic-1','classic-1','','classic/classic-1-50.jpg','warna_new/20.jpg',0,657800,NULL,'Pintu ABS','1000x1000','BROWN',NULL,NULL),
(146,9,'classic-1','classic-1',NULL,'classic/classic-1-50.jpg','warna_new/59.jpg',NULL,NULL,NULL,NULL,'1000x1000','GRAY',NULL,NULL),
(147,9,'classic-1','classic-1',NULL,'classic/classic-1-50.jpg','warna_new/27.jpg',0,NULL,NULL,'Pintu ABS','1000x1000','YELLOW',NULL,NULL),
(148,9,'classic-1','classic-1',NULL,'classic/classic-1-50.jpg','warna_new/80.jpg',NULL,NULL,NULL,NULL,'1000x1000','BROWN 2',NULL,NULL),
(149,9,'artdoor-c1-30','artdoor-c1-30','pintu/artdoor-c1-30.jpg','pintu/artdoor-c1-30.jpg','warna_new/59.jpg',NULL,NULL,NULL,NULL,'1000x1000','GRAY',NULL,NULL),
(150,9,'artdoor-c1-30','artdoor-c1-30',NULL,'artdoor/artdoor-c1-30.jpg','warna_new/20.jpg',NULL,NULL,NULL,NULL,'1000x1000','BROWN',NULL,NULL),
(151,9,'artdoor-c1-30','artdoor-c1-30',NULL,'artdoor/artdoor-c1-30.jpg','warna_new/27.jpg',NULL,NULL,NULL,NULL,'1000x1000','YELLOW',NULL,NULL),
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

/*Table structure for table `tbl_subkategoriproduk` */

DROP TABLE IF EXISTS `tbl_subkategoriproduk`;

CREATE TABLE `tbl_subkategoriproduk` (
  `id_kategori_produk` int(11) NOT NULL,
  `id_subkategori_produk` int(11) NOT NULL AUTO_INCREMENT,
  `nama_subkategori` varchar(255) NOT NULL,
  `subkategori_seo` varchar(255) NOT NULL,
  PRIMARY KEY (`id_subkategori_produk`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_subkategoriproduk` */

insert  into `tbl_subkategoriproduk`(`id_kategori_produk`,`id_subkategori_produk`,`nama_subkategori`,`subkategori_seo`) values 
(1,1,'Pintu ABS','pondasi'),
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
(5,16,'Masker Anak-anak','Masker_Anak-anak');

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
