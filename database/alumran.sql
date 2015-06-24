-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2015 at 05:00 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `alumran`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE IF NOT EXISTS `aboutus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `content_ar` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `content`, `content_ar`) VALUES
(1, 'our company alumran welcome to you and we wamt make you happy fuidgvbuivberuibveruibvev<br>erbvuiebuivbeiurvbreubiverbivuiberv<br>ev<br>irevierobvie<br>brv<br>ebv<br>eiobvievbreivrbeiorbveoivboerivbeiovbervioebvrve<br>rbvuierbuierbeuirbveuivbruiebveuirbveuirbveriuvervevrerrv', 'شكرة  العمران ترحب بكم و تتمنى لكم قضاء وقت سعيد');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user_name`, `password`) VALUES
(3, 'alaa', '9f501154b7e5872e75704103a87b10317e86c5ac'),
(4, 'ahmed', 'cc6ebc80a79411f1ed29c0ea899e939d53a5eb30');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `hotel` tinyint(4) NOT NULL,
  `refer_id` int(11) NOT NULL,
  `msg` text NOT NULL,
  `address` varchar(500) NOT NULL,
  `date` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `name`, `email`, `phone`, `hotel`, `refer_id`, `msg`, `address`, `date`) VALUES
(1, 'admin', 'amed@yahoo.com', '01099819821', 1, 3, 'i wanna rea this room pleaxe ', 'manousra', '0000-00-00 00:00:00'),
(2, 'admin', 'amed@yahoo.com', '01099819821', 1, 3, 'i wanna rea this room pleaxe ', 'manousra', '0000-00-00 00:00:00'),
(3, 'admin', 'amed@yahoo.com', '01099819821', 1, 3, 'i wanna rea this room pleaxe ', 'manousra', '0000-00-00 00:00:00'),
(4, 'admin', 'amed@yahoo.com', '01099819821', 1, 3, 'i wanna rea this room pleaxe ', 'manousra', '0000-00-00 00:00:00'),
(5, 'admin', 'amed@yahoo.com', '01099819821', 1, 3, 'i wanna rea this room pleaxe ', 'manousra', '0000-00-00 00:00:00'),
(6, 'ahmed', 'ahme@yahoo.com', '019992828', 1, 3, 'hkjashkhaskja', 'mansoura', '0000-00-00 00:00:00'),
(7, 'ahme', 'ask@yahoo.com', '01993', 1, 3, 'asdaskd', 'asd', '0000-00-00 00:00:00'),
(8, 'admin', 'glal@yaho.com', '010928373', 1, 9, 'some ata here b2a ', 'mansoura', '0000-00-00 00:00:00'),
(9, 'admin', 'glal@yaho.com', '010928373', 1, 9, 'some ata here b2a ', 'mansoura', '0000-00-00 00:00:00'),
(10, 'admin', 'glal@yaho.com', '010928373', 1, 9, 'some ata here b2a ', 'mansoura', '2015-06-24 14:58:01');

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE IF NOT EXISTS `hotels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `desc` text NOT NULL,
  `BED` int(11) NOT NULL,
  `POOL` tinyint(4) NOT NULL,
  `SAFE` tinyint(4) NOT NULL,
  `GAMES` tinyint(4) NOT NULL,
  `TRANSPORT` tinyint(4) NOT NULL,
  `CONDITION` tinyint(4) NOT NULL,
  `BATHTUB` tinyint(4) NOT NULL,
  `CHAMPAIGNE` tinyint(4) NOT NULL,
  `DINNER` tinyint(4) NOT NULL,
  `ROOM_SERVICE` tinyint(4) NOT NULL,
  `PET_FRIENDLY` tinyint(4) NOT NULL,
  `title_ar` varchar(255) NOT NULL,
  `desc_ar` text NOT NULL,
  `hotel_or_not` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`id`, `title`, `desc`, `BED`, `POOL`, `SAFE`, `GAMES`, `TRANSPORT`, `CONDITION`, `BATHTUB`, `CHAMPAIGNE`, `DINNER`, `ROOM_SERVICE`, `PET_FRIENDLY`, `title_ar`, `desc_ar`, `hotel_or_not`) VALUES
(1, 'fkds;lfk;', 'fadf', 1, 1, 1, 2, 1, 1, 1, 1, 1, 2, 2, 'f', 'fd', 0);

-- --------------------------------------------------------

--
-- Table structure for table `hotel_images`
--

CREATE TABLE IF NOT EXISTS `hotel_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hotel_id` int(11) NOT NULL,
  `pic` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `hotel_images`
--

INSERT INTO `hotel_images` (`id`, `hotel_id`, `pic`) VALUES
(1, 1, '5d6zsuclb439.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `phone` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE IF NOT EXISTS `newsletter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `name`, `email`) VALUES
(1, 'alaa', 'alaaelgndy@yahoo.com'),
(2, 'amira', 'amiraadel@yahoo.com'),
(3, 'kjlk', 'sfks@yahoo.co'),
(4, 'kjlk', 'sfks@yahoo.c'),
(5, 'kjlk', 'sfks@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `descreption` text NOT NULL,
  `title_ar` varchar(255) NOT NULL,
  `descreption_ar` text NOT NULL,
  `page_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pages_images`
--

CREATE TABLE IF NOT EXISTS `pages_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `page_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `site_info`
--

CREATE TABLE IF NOT EXISTS `site_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `phone` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `instgram` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `address_ar` text NOT NULL,
  `skype` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `site_info`
--

INSERT INTO `site_info` (`id`, `phone`, `email`, `facebook`, `twitter`, `instgram`, `address`, `address_ar`, `skype`) VALUES
(1, '01204122661', 'alaaelgndy@yahoo.com', 'alaaelgndy@facebook.com', 'alaaelgndy@twitter.com', 'alaa@instgram.com', 'sudia , makka , eilaf', 'السعودية . مكة  , ايلاف', 'jalal@skype.com');

-- --------------------------------------------------------

--
-- Table structure for table `website_home`
--

CREATE TABLE IF NOT EXISTS `website_home` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `title_ar` varchar(255) NOT NULL,
  `content_ar` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `website_home`
--

INSERT INTO `website_home` (`id`, `title`, `content`, `image`, `title_ar`, `content_ar`) VALUES
(1, 'test', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit perspiciatis officia recusandae ut nesciunt beatae in earum, similique, dolor omnis architecto error odio excepturi nisi dolorum. Explicabo quo quidem, ipsum?', 'a2646efc07c399126e07323ff2f1c176.jpg', 'اختبار ', 'أبجد هوز دولور الجلوس امات، consectetur الحسومات. في المزاريب، وأنهم لا يعرفون اللقاء المبارك Reprehenderit المقبولة واجبات، وفي نفسه، وآلام خطأ المهندس المعماري، كل الكراهية excepturi الحزن فقط. سأشرح هذه النقطة، أليس كذلك؟'),
(2, 'rooms', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit perspiciatis officia recusandae ut nesciunt beatae in earum, similique, dolor omnis architecto error odio excepturi nisi dolorum. Explicabo quo quidem, ipsum?', 'hqdefault.jpg', 'حجرات الفنادق', 'أبجد هوز دولور الجلوس امات، consectetur الحسومات. في المزاريب، وأنهم لا يعرفون اللقاء المبارك Reprehenderit المقبولة واجبات، وفي نفسه، وآلام خطأ المهندس المعماري، كل الكراهية excepturi الحزن فقط. سأشرح هذه النقطة، أليس كذلك؟'),
(3, 'Islamic Tourism', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit perspiciatis officia recusandae ut nesciunt beatae in earum, similique, dolor omnis architecto error odio excepturi nisi dolorum. Explicabo quo quidem, ipsum?', '3.jpg', 'لسياحة الاسلامية', 'أبجد هوز دولور الجلوس امات، consectetur الحسومات. في المزاريب، وأنهم لا يعرفون اللقاء المبارك Reprehenderit المقبولة واجبات، وفي نفسه، وآلام خطأ المهندس المعماري، كل الكراهية excepturi الحزن فقط. سأشرح هذه النقطة، أليس كذلك؟'),
(4, 'Water Tourism', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit perspiciatis officia recusandae ut nesciunt beatae in earum, similique, dolor omnis architecto error odio excepturi nisi dolorum. Explicabo quo quidem, ipsum?', '60722_410213612378614_1066720932_n.jpg', 'السياحة المائية', 'أبجد هوز دولور الجلوس امات، consectetur الحسومات. في المزاريب، وأنهم لا يعرفون اللقاء المبارك Reprehenderit المقبولة واجبات، وفي نفسه، وآلام خطأ المهندس المعماري، كل الكراهية excepturi الحزن فقط. سأشرح هذه النقطة، أليس كذلك؟'),
(5, 'golf', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit perspiciatis officia recusandae ut nesciunt beatae in earum, similique, dolor omnis architecto error odio excepturi nisi dolorum. Explicabo quo quidem, ipsum?', '5.jpg', 'الجولف ', 'أبجد هوز دولور الجلوس امات، consectetur الحسومات. في المزاريب، وأنهم لا يعرفون اللقاء المبارك Reprehenderit المقبولة واجبات، وفي نفسه، وآلام خطأ المهندس المعماري، كل الكراهية excepturi الحزن فقط. سأشرح هذه النقطة، أليس كذلك؟');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
