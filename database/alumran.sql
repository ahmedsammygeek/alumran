-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2015 at 03:55 AM
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `hotel_images`
--

CREATE TABLE IF NOT EXISTS `hotel_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hotel_id` int(11) NOT NULL,
  `pic` text NOT NULL,
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `name`, `email`) VALUES
(1, 'alaa', 'alaaelgndy@yahoo.com');

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
(1, 'Turkey', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eu lacus sed neque auctor cursus. Integer egestas quam non orci pharetra, vel accumsan ante tristique. Nullam elementum massa eget odio tristique varius. Vivamus id est nec dui auctor posuere. Maecenas eu pulvinar eros. Integer velit velit, faucibus eget accumsan a, sollicitudin in lorem. Nulla cursus vitae justo ut rutrum.', '1.jpg', 'تركيا', 'محتوى السياحة في تركيا باللغه العربيه'),
(2, 'rooms', 'In euismod vestibulum libero vel auctor. Cras fermentum neque ut ante porta, in bibendum lorem elementum. Morbi volutpat lacus dui, vel faucibus velit dignissim at. Integer malesuada diam urna, sed bibendum magna sollicitudin ac. Donec aliquet dui id congue interdum. Nunc aliquam dui lectus, a imperdiet ex convallis sit amet. In fringilla, sem nec sagittis dapibus, est nibh tincidunt tortor, vel vestibulum est velit vel mi.', '2.jpg', 'حجرات الفنادق', 'محتوى الحجرات في الفنادق التركية باللغة العربيه'),
(3, 'Islamic Tourism', 'description Islamic Tourism', '3.jpg', 'لسياحة الاسلامية', 'وصغ السياحة الاسلامية في تركيا'),
(4, 'Water Tourism', 'descreption Water Tourism', '4.jpg', 'السياحة المائية', 'وصف السياحة المائية ف تركيا'),
(5, 'golf', 'descrepytion golf tourism', '5.jpg', 'الجولف ', 'وصف رياضة الجوالف في تركيا');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
