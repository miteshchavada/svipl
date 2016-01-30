-- phpMyAdmin SQL Dump
-- version 3.4.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 30, 2016 at 03:42 PM
-- Server version: 5.1.60
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sonata`
--

-- --------------------------------------------------------

--
-- Table structure for table `Cart`
--

CREATE TABLE IF NOT EXISTS `Cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quantity` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cust_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cust_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cust_phone` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `cust_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cust_description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Category`
--

CREATE TABLE IF NOT EXISTS `Category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Dumping data for table `Category`
--

INSERT INTO `Category` (`id`, `userid`, `name`, `status`, `created_at`, `updated_at`) VALUES
(6, 3, 'Mobile', 1, '2015-11-16 17:35:10', '2015-11-16 17:35:10'),
(7, 3, 'Accessories', 1, '2015-11-16 17:35:35', '2015-11-16 17:35:35'),
(9, 1, 'Jewellery', 1, '2015-11-16 17:49:27', '2015-11-16 17:49:27'),
(10, 1, 'Earings', 1, '2015-11-16 17:49:41', '2015-11-16 17:49:41'),
(11, 1, 'Sets', 1, '2015-11-16 17:49:52', '2015-11-16 17:49:52');

-- --------------------------------------------------------

--
-- Table structure for table `Contact`
--

CREATE TABLE IF NOT EXISTS `Contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Contactus`
--

CREATE TABLE IF NOT EXISTS `Contactus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `Contactus`
--

INSERT INTO `Contactus` (`id`, `description`, `createdAt`, `updatedAt`) VALUES
(1, '<div class="cont-dtl">\r\n<div class="adr-dtl">\r\n<h2 class="sec-title">CONTACT US</h2>\r\n<address class="adr">\r\n<p><strong>Siddhivinayak Infocom Pvt. Ltd.</strong> <br />18, Navin Nagar Society,<br /> 2 Saurashtra KalaKendra Main Road,<br /> Rajkot - 360 007. (Gujarat - India)</p>\r\n<p><strong>Phone:</strong>+91 281 2577430</p>\r\n<p><strong>Email:</strong><a href="mailto:info@svipl.in">info@svipl.in</a></p>\r\n<p>&nbsp;</p>\r\n</address></div>\r\n<div class="map-main"><iframe class="gmap" src="http://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=siddhivinayk+software+rajkot&amp;aq=&amp;sll=22.273487,70.779848&amp;sspn=0.180139,0.220757&amp;ie=UTF8&amp;hq=siddhivinayk+software&amp;hnear=Rajkot,+Gujarat&amp;t=m&amp;ll=22.300254,70.771758&amp;spn=0.008009,0.066884&amp;output=embed" width="918" height="459"></iframe></div>\r\n</div>', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `Followus`
--

CREATE TABLE IF NOT EXISTS `Followus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `Followus`
--

INSERT INTO `Followus` (`id`, `title`, `logo`, `link`, `status`, `createdAt`, `updatedAt`) VALUES
(3, 'Facebook', 'icon1.jpg', 'https://www.facebook.com/siddhivinayak.svipl', '1', '2015-10-19 14:25:55', '2015-10-19 14:25:55'),
(4, 'Twitter', 'icon2.jpg', 'https://twitter.com/sviplfive', '1', '2015-10-19 14:27:23', '2015-10-19 14:27:23'),
(5, 'LinkedIn', 'icon3.jpg', 'https://www.linkedin.com/company/siddhi-vinayak-infocom-pvt.-ltd.-rajkot-gujarat', '1', '2015-10-19 14:27:55', '2015-10-19 14:27:55'),
(7, 'Delicious', 'icon4.jpg', 'http://www.delicious.com', '1', '2015-10-20 11:54:00', '2015-10-20 11:54:00');

-- --------------------------------------------------------

--
-- Table structure for table `fos_user`
--

CREATE TABLE IF NOT EXISTS `fos_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_957A647992FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_957A6479A0D96FBF` (`email_canonical`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `fos_user`
--

INSERT INTO `fos_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`) VALUES
(1, 'super', 'super', 'employee.svipl@gmail.com', 'employee.svipl@gmail.com', 1, '6jn0hv7120gs048k4scowcsk0s4csgw', '60hQ8pYr1jnhE1lANBG4ux5jqJvOEyMwIs2jQLD0tGv3Iak4bDtM0Ifv2co61bJJQ4FeBHrTc8sGXpMH7HxxQw==', '2016-01-19 16:04:38', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:10:"ROLE_ADMIN";}', 0, NULL),
(3, 'admin', 'admin', 'mitesh.chavada36@gmail.com', 'mitesh.chavada36@gmail.com', 1, '4pyimvmgk7i8gcsow8os0owk0gwws4g', 'nrk1qgac5d7pznU6Yed8J39cqcHDa2oRl4k787bmxFTgDK7w7uWYX63LgHsdV6Ew4vmmfa/bPzzkg2ds6g0p4g==', '2015-12-29 15:29:20', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `Front`
--

CREATE TABLE IF NOT EXISTS `Front` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `Front`
--

INSERT INTO `Front` (`id`, `description`, `createdAt`, `updatedAt`) VALUES
(1, '<section id="feature">\r\n<div class="container">\r\n<div class="center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">\r\n<h2>Features</h2>\r\n<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br /> et dolore magna aliqua. Ut enim ad minim veniam</p>\r\n</div>\r\n<div class="row">\r\n<div class="features">\r\n<div data-wow-delay="600ms" data-wow-duration="1000ms" class="col-md-4 col-sm-6 wow fadeInDown animated" style="visibility: visible; animation-duration: 1000ms; animation-delay: 600ms; animation-name: fadeInDown;">\r\n<div class="feature-wrap"><i class="fa fa-bullhorn"></i>\r\n<h2>Fresh and Clean</h2>\r\n<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>\r\n</div>\r\n</div>\r\n<!--/.col-md-4-->\r\n<div data-wow-delay="600ms" data-wow-duration="1000ms" class="col-md-4 col-sm-6 wow fadeInDown animated" style="visibility: visible; animation-duration: 1000ms; animation-delay: 600ms; animation-name: fadeInDown;">\r\n<div class="feature-wrap"><i class="fa fa-comments"></i>\r\n<h2>Retina ready</h2>\r\n<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>\r\n</div>\r\n</div>\r\n<!--/.col-md-4-->\r\n<div data-wow-delay="600ms" data-wow-duration="1000ms" class="col-md-4 col-sm-6 wow fadeInDown animated" style="visibility: visible; animation-duration: 1000ms; animation-delay: 600ms; animation-name: fadeInDown;">\r\n<div class="feature-wrap"><i class="fa fa-cloud-download"></i>\r\n<h2>Easy to customize</h2>\r\n<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>\r\n</div>\r\n</div>\r\n<!--/.col-md-4-->\r\n<div data-wow-delay="600ms" data-wow-duration="1000ms" class="col-md-4 col-sm-6 wow fadeInDown animated" style="visibility: visible; animation-duration: 1000ms; animation-delay: 600ms; animation-name: fadeInDown;">\r\n<div class="feature-wrap"><i class="fa fa-leaf"></i>\r\n<h2>Adipisicing elit</h2>\r\n<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>\r\n</div>\r\n</div>\r\n<!--/.col-md-4-->\r\n<div data-wow-delay="600ms" data-wow-duration="1000ms" class="col-md-4 col-sm-6 wow fadeInDown animated" style="visibility: visible; animation-duration: 1000ms; animation-delay: 600ms; animation-name: fadeInDown;">\r\n<div class="feature-wrap"><i class="fa fa-cogs"></i>\r\n<h2>Sed do eiusmod</h2>\r\n<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>\r\n</div>\r\n</div>\r\n<!--/.col-md-4-->\r\n<div data-wow-delay="600ms" data-wow-duration="1000ms" class="col-md-4 col-sm-6 wow fadeInDown animated" style="visibility: visible; animation-duration: 1000ms; animation-delay: 600ms; animation-name: fadeInDown;">\r\n<div class="feature-wrap"><i class="fa fa-heart"></i>\r\n<h2>Labore et dolore</h2>\r\n<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>\r\n</div>\r\n</div>\r\n<!--/.col-md-4--></div>\r\n<!--/.services--></div>\r\n<!--/.row--></div>\r\n<!--/.container--></section>', '2014-09-25 00:00:00', '2014-09-25 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `Image`
--

CREATE TABLE IF NOT EXISTS `Image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `backgroundimage` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `Image`
--

INSERT INTO `Image` (`id`, `title`, `link`, `description`, `image`, `backgroundimage`, `createdAt`, `updatedAt`) VALUES
(8, 'Lorem ipsum dolor sit amet consectetur adipisicing elit', 'http://www.facebook.com/svipl', 'Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...', '355162268_img1.png', '376825676_bg1.jpg', '2015-09-22 13:20:04', '2015-09-22 13:20:04'),
(9, 'Lorem ipsum dolor sit amet consectetur adipisicing elit', 'http://www.facebook.com/svipl', 'Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...', '102048053_img2.png', '1805836769_bg2.jpg', '2015-09-25 17:47:21', '2015-09-25 17:47:21'),
(10, 'Lorem ipsum dolor sit amet consectetur adipisicing elit', 'http://www.facebook.com/svipl', 'Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...', '2006268912_img3.png', '1918180662_bg3.jpg', '2015-09-25 18:15:35', '2015-09-25 18:15:35');

-- --------------------------------------------------------

--
-- Table structure for table `Info`
--

CREATE TABLE IF NOT EXISTS `Info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `percentage` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `Info`
--

INSERT INTO `Info` (`id`, `title`, `percentage`, `createdAt`, `updatedAt`) VALUES
(2, 'Graphic Design', '68', '2014-09-16 18:08:53', '2014-09-16 18:08:53'),
(3, 'HTML', '95', '2014-09-16 18:09:33', '2014-09-16 18:09:33'),
(4, 'CSS', '80', '2014-09-16 18:09:59', '2014-09-16 18:09:59'),
(5, 'Wordpress', '90', '2014-09-27 17:24:39', '2014-09-27 17:24:39'),
(9, 'Symfony1.0', '80', '2016-01-06 13:30:16', '2016-01-06 13:30:16'),
(10, 'Laravel5', '90', '2016-01-06 13:30:54', '2016-01-06 13:30:54'),
(11, 'Symfony2', '55', '2016-01-06 13:31:50', '2016-01-06 13:31:50'),
(12, 'Core Php', '98', '2016-01-06 13:32:48', '2016-01-06 13:32:48');

-- --------------------------------------------------------

--
-- Table structure for table `Logo`
--

CREATE TABLE IF NOT EXISTS `Logo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `logo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `Logo`
--

INSERT INTO `Logo` (`id`, `logo`, `status`, `created_at`, `updated_at`) VALUES
(6, '255001517_svipl-logo.png', 1, '2015-10-14 19:01:34', '2015-10-14 19:01:34'),
(7, '1191928922_old_logo.png', 0, '2015-10-15 11:43:38', '2015-10-15 11:43:38'),
(8, '1265649486_1443276559_circle_green.png', 0, '2015-12-28 12:40:58', '2015-12-28 12:40:58');

-- --------------------------------------------------------

--
-- Table structure for table `News`
--

CREATE TABLE IF NOT EXISTS `News` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` longtext COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=30 ;

--
-- Dumping data for table `News`
--

INSERT INTO `News` (`id`, `title`, `image`, `description`, `createdAt`, `updatedAt`) VALUES
(26, 'Consequat bibendum quam liquam viverra', 'blog1.jpg', 'Curabitur quis libero leo, pharetra mattis eros. Praesent consequat libero eget dolor convallis vel rhoncus magna scelerisque. Donec nisl ante, elementum eget posuere a, consectetur a metus. Proin a adipiscing sapien. Suspendisse vehicula porta lectus vel semper. Nullam sapien elit, lacinia eu tristique non.posuere at mi. Morbi at turpis id urna ullamcorper ullamcorper.', '2015-11-19 19:10:28', '2015-11-19 19:10:28'),
(27, 'Consequat bibendum quam liquam viverra', 'blog2.jpg', 'Curabitur quis libero leo, pharetra mattis eros. Praesent consequat libero eget dolor convallis vel rhoncus magna scelerisque. Donec nisl ante, elementum eget posuere a, consectetur a metus. Proin a adipiscing sapien. Suspendisse vehicula porta lectus vel semper. Nullam sapien elit, lacinia eu tristique non.posuere at mi. Morbi at turpis id urna ullamcorper ullamcorper.', '2015-11-19 19:10:57', '2015-11-19 19:10:57'),
(28, 'test', 'avatar.jpg', 'fdssf', '2015-11-20 10:55:28', '2015-11-20 10:55:28'),
(29, 'Facebook', 'gallery1.png', 'dsfdssfd', '2015-11-20 10:55:51', '2015-11-20 10:55:51');

-- --------------------------------------------------------

--
-- Table structure for table `Newsletter`
--

CREATE TABLE IF NOT EXISTS `Newsletter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `People`
--

CREATE TABLE IF NOT EXISTS `People` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `People`
--

INSERT INTO `People` (`id`, `title`, `image`, `description`, `createdAt`, `updatedAt`) VALUES
(2, 'Lorem ipsum dolor sit amet consectetur adipisicing elit', 'accordion1.png', 'dddd dddd', '2016-01-06 16:36:19', '2016-01-06 16:36:19'),
(6, 'Lorem ipsum dolor sit amet ', 'contact.png', 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor. ', '2016-01-06 16:56:57', '2016-01-06 16:56:57'),
(7, 'Lorem ipsum dolor sit amet', 'man1.jpg', 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.', '2016-01-06 16:57:40', '2016-01-06 16:57:40'),
(8, 'Lorem ipsum dolor sit amet', 'man2.jpg', 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor. ', '2016-01-06 16:58:03', '2016-01-06 16:58:03');

-- --------------------------------------------------------

--
-- Table structure for table `Product`
--

CREATE TABLE IF NOT EXISTS `Product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `status` int(11) NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `userid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=20 ;

--
-- Dumping data for table `Product`
--

INSERT INTO `Product` (`id`, `name`, `category`, `price`, `status`, `description`, `image`, `userid`) VALUES
(14, 'Pendent', '9', '800', 1, 'Immitation Jewellery for Gold Plating and no guarantee and warranty so, further no items refundable.', 'page4_img3.jpg', 1),
(15, 'Ear Earings', '10', '1500', 1, 'Earings for ear ware and gold plating with 100% pure gold plating product.', 'page4_img6.jpg', 1),
(16, 'Pendent Sets', '11', '2500', 1, 'this is a pendent sets for gold plating and no any refundable after purchase items.', 'page4_img5.jpg', 1),
(17, 'Pendent 1', '10', '150', 1, 'this is a casting pendent for bid metal.', 'blog1.jpg', 1),
(18, 'samsung\n', '6', '15000', 1, 'test description', 'img1.jpg', 3),
(19, 'Head Phone', '7', '1500', 1, 'test description for head phone', 'img2.jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `Services`
--

CREATE TABLE IF NOT EXISTS `Services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=28 ;

--
-- Dumping data for table `Services`
--

INSERT INTO `Services` (`id`, `title`, `image`, `description`, `createdAt`, `updatedAt`) VALUES
(1, 'Business theme', 'item1.png', 'There are many variations of passages of Lorem Ipsum available, but the majority', '2014-09-30 13:41:50', '2014-09-30 13:41:50'),
(2, 'Client Relationship', 'item2.png', 'Atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.', '2014-09-30 13:42:34', '2014-09-30 13:42:34'),
(3, 'Insurance Services', 'item3.png', 'Similique sunt in culpa harum quidem rerum facilis est et expedita distinctio namlibero tempore, cum soluta.', '2014-09-30 13:43:10', '2014-09-30 13:43:10'),
(4, 'Risk Management', 'item4.png', 'Nobis eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas. ', '2014-09-30 13:43:50', '2014-09-30 13:43:50'),
(5, 'Investments', 'item5.png', 'assumenda est, omnis dolor repellendus. Temporibus autem quibusdam aut officiis debitis aut.', '2014-09-30 13:44:24', '2014-09-30 13:44:24'),
(6, 'Sales Lead Generation', 'item6.png', 'Rerum necessitatibus saepe eveniet et voluptates repu- diandae sint et molestiae non recusandae.', '2014-09-30 13:45:19', '2014-09-30 13:45:19'),
(22, 'Facebook', 'item7.png', 'There are many variations of passages of Lorem Ipsum available, but the majority', '2016-01-01 18:14:17', '2016-01-01 18:14:17'),
(23, 'Business theme', 'item8.png', 'There are many variations of passages of Lorem Ipsum available, but the majority', '2016-01-01 18:36:09', '2016-01-01 18:36:09'),
(24, 'Business theme', 'item9.png', 'There are many variations of passages of Lorem Ipsum available, but the majority', '2016-01-01 18:36:27', '2016-01-01 18:36:27'),
(25, 'Business theme', 'item10.png', 'There are many variations of passages of Lorem Ipsum available, but the majority', '2016-01-01 18:36:43', '2016-01-01 18:36:43'),
(26, 'Business theme', 'item11.png', 'There are many variations of passages of Lorem Ipsum available, but the majority', '2016-01-01 18:36:55', '2016-01-01 18:36:55'),
(27, 'Business theme', 'item12.png', 'There are many variations of passages of Lorem Ipsum available, but the majority', '2016-01-01 18:37:24', '2016-01-01 18:37:24');

-- --------------------------------------------------------

--
-- Table structure for table `Team`
--

CREATE TABLE IF NOT EXISTS `Team` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `skills` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gmail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `Team`
--

INSERT INTO `Team` (`id`, `name`, `designation`, `skills`, `image`, `facebook`, `twitter`, `gmail`, `description`, `createdAt`, `updatedAt`) VALUES
(3, 'John Doe', 'Founder and CEO', '0,3', 'client1.png', 'http://www.facebook.com', 'http://www.twitter.com', 'http://www.gmail.com', 'Founder and CEO Description', '2016-01-19 19:22:44', '2016-01-19 19:22:44');

-- --------------------------------------------------------

--
-- Table structure for table `Testimonials`
--

CREATE TABLE IF NOT EXISTS `Testimonials` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `post` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `Testimonials`
--

INSERT INTO `Testimonials` (`id`, `name`, `post`, `description`, `image`, `createdAt`, `updatedAt`) VALUES
(2, 'Samir Shukla', 'Director of svipl.in', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt', 'testimonials1.png', '2014-09-26 11:54:38', '2014-09-26 11:54:38'),
(5, 'Mandar Dave', 'Director of svipl.in', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt', 'testimonials1.png', '2014-09-26 12:21:54', '2014-09-26 12:21:54'),
(9, 'Jatin Parekh', 'Director of svipl.in', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt', 'testimonials1.png', '2016-01-19 12:25:56', '2016-01-19 12:25:56'),
(10, 'Apoorva Pandya', 'Director of svipl.in', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt', 'testimonials1.png', '2016-01-19 12:26:31', '2016-01-19 12:26:31');

-- --------------------------------------------------------

--
-- Table structure for table `Work`
--

CREATE TABLE IF NOT EXISTS `Work` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `Work`
--

INSERT INTO `Work` (`id`, `title`, `image`, `description`, `createdAt`, `updatedAt`) VALUES
(2, 'Responsive Web Design', 'tab2.png', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don''t look even slightly believable. If you are going to use.', '2016-01-06 18:47:01', '2016-01-06 18:47:01'),
(3, 'Premium Plugin Included', 'tab1.png', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don''t look even slightly believable. If you are going to use. ', '2016-01-06 18:57:33', '2016-01-06 18:57:33'),
(4, 'Predefine Layout', 'team-member.jpg', '\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.\r\n', '2016-01-06 18:58:21', '2016-01-06 18:58:21'),
(5, 'Our Philosophy', 'client1.png', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don''t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn''t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words', '2016-01-06 18:58:53', '2016-01-06 18:58:53'),
(6, 'What We do ?', 'team-member.jpg', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don''t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn''t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures,', '2016-01-06 18:59:30', '2016-01-06 18:59:30');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
