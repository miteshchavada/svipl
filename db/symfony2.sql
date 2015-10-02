-- phpMyAdmin SQL Dump
-- version 3.4.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 02, 2015 at 05:58 PM
-- Server version: 5.1.60
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `symfony2`
--

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
(1, '<div class="cont-dtl">\r\n<div class="adr-dtl">\r\n<h2 class="sec-title">CONTACT US</h2>\r\n<address class="adr">\r\n<p><strong>Siddhivinayak Infocom Pvt. Ltd.</strong> <br />18, Navin Nagar Society,<br /> 2 Saurashtra KalaKendra Main Road,<br /> Rajkot - 360 007. (Gujarat - India)</p>\r\n<p><strong>Phone:</strong>+91 281 2577430</p>\r\n<p><strong>Email:</strong><a href="#">info@svipl.in</a></p>\r\n</address></div>\r\n<div class="map-main"><iframe class="gmap" src="http://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=siddhivinayk+software+rajkot&amp;aq=&amp;sll=22.273487,70.779848&amp;sspn=0.180139,0.220757&amp;ie=UTF8&amp;hq=siddhivinayk+software&amp;hnear=Rajkot,+Gujarat&amp;t=m&amp;ll=22.300254,70.771758&amp;spn=0.008009,0.066884&amp;output=embed" width="918" height="459"></iframe></div>\r\n</div>', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
(1, 'super', 'super', 'employee.svipl@gmail.com', 'employee.svipl@gmail.com', 1, '6jn0hv7120gs048k4scowcsk0s4csgw', '60hQ8pYr1jnhE1lANBG4ux5jqJvOEyMwIs2jQLD0tGv3Iak4bDtM0Ifv2co61bJJQ4FeBHrTc8sGXpMH7HxxQw==', '2015-09-29 10:49:17', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(3, 'admin', 'admin', 'mitesh.chavada36@gmail.com', 'mitesh.chavada36@gmail.com', 1, '4pyimvmgk7i8gcsow8os0owk0gwws4g', 'nrk1qgac5d7pznU6Yed8J39cqcHDa2oRl4k787bmxFTgDK7w7uWYX63LgHsdV6Ew4vmmfa/bPzzkg2ds6g0p4g==', '2015-10-01 18:40:00', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL);

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
(1, '<section class="col-3-4">\r\n<div class="wrap-col">\r\n<h2 class="under">Welcome, dear visitor!</h2>\r\n<div class="wrapper">\r\n<figure class="left marg_right1"><img src="../../bundles/acmehome/images/logo.png" alt="" width="288" height="94" /></figure>\r\n<p class="pad_bot1">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa.</p>\r\n<p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>\r\n</div>\r\n</div>\r\n</section>', '2014-09-25 00:00:00', '2014-09-25 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `Image`
--

CREATE TABLE IF NOT EXISTS `Image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `Image`
--

INSERT INTO `Image` (`id`, `image`, `createdAt`, `updatedAt`) VALUES
(7, '1090976769_652350732_img2.jpg', '2015-09-22 13:19:55', '2015-09-22 13:19:55'),
(8, '1644763898_1353790450_img4.jpg', '2015-09-22 13:20:04', '2015-09-22 13:20:04'),
(9, '698681798_344752430_img3.jpg', '2015-09-25 17:47:21', '2015-09-25 17:47:21'),
(10, '357707574_576304949_img1.jpg', '2015-09-25 18:15:35', '2015-09-25 18:15:35');

-- --------------------------------------------------------

--
-- Table structure for table `Info`
--

CREATE TABLE IF NOT EXISTS `Info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `Info`
--

INSERT INTO `Info` (`id`, `title`, `description`, `createdAt`, `updatedAt`) VALUES
(2, 'powerfull title', 'description for powerfull', '2014-09-16 18:08:53', '2014-09-16 18:08:53'),
(3, 'Powerful analytics', 'PSD source files are available for free for registered members. The basic package is available for anyone.', '2014-09-16 18:09:33', '2014-09-16 18:09:33'),
(4, 'Worldwide solutions', 'This website template has several pages: Home, News, Services, Products, Contacts (contact form doesn’t work).', '2014-09-16 18:09:59', '2014-09-16 18:09:59'),
(5, 'Worldwide solutions', 'This website template has several pages: Home, News, Services, Products, Contacts (contact form doesn’t work).', '2014-09-27 17:24:39', '2014-09-27 17:24:39');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=26 ;

--
-- Dumping data for table `News`
--

INSERT INTO `News` (`id`, `title`, `image`, `description`, `createdAt`, `updatedAt`) VALUES
(4, 'Lorem Ipsum dolor sit amet consectetur adipiscing elit mitesh', 'page4_img3.jpg', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.', '2014-09-27 10:44:12', '2014-09-27 10:44:12'),
(5, 'Duis aute irure dolor in reprehenderit', 'page2_img2.jpg', 'Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur.', '2014-09-27 10:45:30', '2014-09-27 10:45:30'),
(6, 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem', 'page2_img3.jpg', 'Vel illum qui dolorem eum fugiat quo voluptas nulla pariatur. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis.', '2014-09-27 11:11:36', '2014-09-27 11:11:36'),
(7, 'Duis aute irure dolor in reprehenderit', 'page2_img2.jpg', '\r\n\r\nSed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur.', '2014-09-27 11:14:57', '2014-09-27 11:14:57'),
(8, 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem', 'page2_img3.jpg', '\r\n\r\nVel illum qui dolorem eum fugiat quo voluptas nulla pariatur. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis.', '2014-09-27 11:15:28', '2014-09-27 11:15:28'),
(9, 'Lorem Ipsum dolor sit amet consectetur adipiscing elit', 'page2_img1.jpg', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.', '2014-09-27 11:15:51', '2014-09-27 11:15:51'),
(10, 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem', 'page1_img1.jpg', 'Vel illum qui dolorem eum fugiat quo voluptas nulla pariatur. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis.', '2014-09-27 11:16:20', '2014-09-27 11:16:20'),
(11, 'Lorem Ipsum dolor sit amet consectetur adipiscing elit', 'page2_img1.jpg', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.', '2014-09-27 11:16:48', '2014-09-27 11:16:48'),
(12, 'Duis aute irure dolor in reprehenderit', 'page2_img2.jpg', 'Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur.', '2014-09-27 11:17:10', '2014-09-27 11:17:10'),
(13, 'Lorem Ipsum dolor sit amet consectetur adipiscing elit', 'page2_img1.jpg', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.', '2014-09-27 11:17:41', '2014-09-27 11:17:41'),
(14, 'Duis aute irure dolor in reprehenderit', 'page2_img2.jpg', '\r\n\r\nSed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur.', '2014-09-27 11:18:05', '2014-09-27 11:18:05'),
(15, 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem', 'page2_img3.jpg', 'Vel illum qui dolorem eum fugiat quo voluptas nulla pariatur. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis.', '2014-09-27 11:18:25', '2014-09-27 11:18:25'),
(16, 'Duis aute irure dolor in reprehenderit', 'page2_img2.jpg', '\r\n\r\nSed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur.', '2014-09-27 11:18:47', '2014-09-27 11:18:47'),
(17, 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem', 'page2_img3.jpg', 'Vel illum qui dolorem eum fugiat quo voluptas nulla pariatur. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis.', '2014-09-27 11:19:19', '2014-09-27 11:19:19'),
(18, 'Lorem Ipsum dolor sit amet consectetur adipiscing elit', 'page2_img1.jpg', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.', '2014-09-27 11:19:47', '2014-09-27 11:19:47'),
(19, 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem', 'page2_img3.jpg', 'Vel illum qui dolorem eum fugiat quo voluptas nulla pariatur. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis.', '2014-09-27 11:20:15', '2014-09-27 11:20:15'),
(20, 'Lorem Ipsum dolor sit amet consectetur adipiscing elit', 'page2_img1.jpg', '\r\n\r\nDuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.', '2014-09-27 11:20:38', '2014-09-27 11:20:38'),
(21, 'Duis aute irure dolor in reprehenderit', 'page2_img2.jpg', 'Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur.', '2014-09-27 11:21:03', '2014-09-27 11:21:03'),
(22, 'Lorem Ipsum dolor sit amet consectetur adipiscing elit', 'page2_img1.jpg', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.', '2015-09-28 11:45:17', '2015-09-28 11:45:17'),
(23, 'Lorem Ipsum dolor sit amet consectetur adipiscing elit mitesh', 'page2_img1.jpg', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.', '2015-09-28 11:45:31', '2015-09-28 11:45:31'),
(24, 'Lorem Ipsum dolor sit amet consectetur adipiscing elit mitesh', 'page2_img1.jpg', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.', '2015-09-28 11:46:43', '2015-09-28 11:46:43'),
(25, 'Lorem Ipsum dolor sit amet consectetur adipiscing elit mitesh', 'page2_img1.jpg', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.', '2015-09-28 11:48:18', '2015-09-28 11:48:18');

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
-- Table structure for table `Product`
--

CREATE TABLE IF NOT EXISTS `Product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `status` int(11) NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `Product`
--

INSERT INTO `Product` (`id`, `name`, `price`, `status`, `description`, `image`) VALUES
(1, 'test', '50', 1, 'test', 'page4_img1.jpg'),
(2, 'test', '50', 1, 'test', 'page4_img3.jpg'),
(3, 'test', '50', 1, 'test', 'page4_img5.jpg'),
(4, 'test', '50', 1, 'test', 'page4_img2.jpg'),
(5, 'test', '50', 1, 'test', 'page4_img4.jpg'),
(6, 'test', '50', 1, 'test', 'page4_img6.jpg'),
(8, 'test', '150', 1, 'test', 'page4_img3.jpg');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `Services`
--

INSERT INTO `Services` (`id`, `title`, `image`, `description`, `createdAt`, `updatedAt`) VALUES
(1, 'Strategic Planning', 'page3_img1.gif', 'At vero eos et accusamus et iusto odio dignissimo ducimu qui blanditiis praesentium voluptatum deleniti.', '2014-09-30 13:41:50', '2014-09-30 13:41:50'),
(2, 'Client Relationship', 'page3_img3.gif', 'Atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.', '2014-09-30 13:42:34', '2014-09-30 13:42:34'),
(3, 'Insurance Services', 'page3_img5.gif', 'Similique sunt in culpa harum quidem rerum facilis est et expedita distinctio namlibero tempore, cum soluta.', '2014-09-30 13:43:10', '2014-09-30 13:43:10'),
(4, 'Risk Management', 'page3_img2.gif', 'Nobis eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas. ', '2014-09-30 13:43:50', '2014-09-30 13:43:50'),
(5, 'Investments', 'page3_img4.gif', 'assumenda est, omnis dolor repellendus. Temporibus autem quibusdam aut officiis debitis aut.', '2014-09-30 13:44:24', '2014-09-30 13:44:24'),
(6, 'Sales Lead Generation', 'page3_img6.gif', 'Rerum necessitatibus saepe eveniet et voluptates repu- diandae sint et molestiae non recusandae.', '2014-09-30 13:45:19', '2014-09-30 13:45:19');

-- --------------------------------------------------------

--
-- Table structure for table `Testimonials`
--

CREATE TABLE IF NOT EXISTS `Testimonials` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `post` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `Testimonials`
--

INSERT INTO `Testimonials` (`id`, `name`, `post`, `description`, `createdAt`, `updatedAt`) VALUES
(2, 'James Coloway1', 'welcome', '“Nam libero tempore, cum soluta nobis eligendi quo minus quod maxime placeat facere.”', '2014-09-26 11:54:38', '2014-09-26 11:54:38'),
(5, 'James Coloway2', 'Director', '“Nam libero tempore, cum soluta nobis eligendi quo minus quod maxime placeat facere.”', '2014-09-26 12:21:54', '2014-09-26 12:21:54'),
(6, 'James Coloway3', 'Director', '“Nam libero tempore, cum soluta nobis eligendi quo minus quod maxime placeat facere.”', '2014-09-26 12:22:14', '2014-09-26 12:22:14'),
(7, 'Milan', 'Managin Director', '“Nam libero tempore, cum soluta nobis eligendi quo minus quod maxime placeat facere.”', '2014-10-06 18:17:28', '2014-10-06 18:17:28');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
