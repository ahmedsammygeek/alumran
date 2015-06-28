-- phpMyAdmin SQL Dump
-- version 4.4.9
-- http://www.phpmyadmin.net
--
-- Host: 50.62.209.83:3306
-- Generation Time: Jun 28, 2015 at 07:30 AM
-- Server version: 5.5.43-37.2-log
-- PHP Version: 5.5.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jalalallowz_sya7a`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE IF NOT EXISTS `aboutus` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `content_ar` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

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
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

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
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `hotel` tinyint(4) NOT NULL,
  `refer_id` int(11) NOT NULL,
  `msg` text NOT NULL,
  `address` varchar(500) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `seen` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `name`, `email`, `phone`, `hotel`, `refer_id`, `msg`, `address`, `date`, `seen`) VALUES
(3, 'admin', 'amed@yahoo.com', '01099819821', 1, 3, 'i wanna rea this room pleaxe ', 'manousra', '0000-00-00 00:00:00', 0),
(5, 'admin', 'amed@yahoo.com', '01099819821', 1, 3, 'i wanna rea this room pleaxe ', 'manousra', '0000-00-00 00:00:00', 0),
(6, 'ahmed', 'ahme@yahoo.com', '019992828', 1, 3, 'hkjashkhaskja', 'mansoura', '0000-00-00 00:00:00', 0),
(7, 'ahme', 'ask@yahoo.com', '01993', 1, 3, 'asdaskd', 'asd', '0000-00-00 00:00:00', 0),
(8, 'admin', 'glal@yaho.com', '010928373', 1, 9, 'some ata here b2a ', 'mansoura', '0000-00-00 00:00:00', 0),
(11, 'alaa', 'alaaelgndy21@yahoo.com', '01201212454', 1, 3, 'content', 'cairo', '2015-06-25 15:27:54', 0);

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE IF NOT EXISTS `hotels` (
  `id` int(11) NOT NULL,
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
  `hotel_or_not` tinyint(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`id`, `title`, `desc`, `BED`, `POOL`, `SAFE`, `GAMES`, `TRANSPORT`, `CONDITION`, `BATHTUB`, `CHAMPAIGNE`, `DINNER`, `ROOM_SERVICE`, `PET_FRIENDLY`, `title_ar`, `desc_ar`, `hotel_or_not`) VALUES
(3, 'nara bera', '<h3>Stay in the heart of Istanbul</h3><h3><br></h3><h3>Nar Pera Hotel is located in the heart of Beyoglu district, a short walk from the lively Istiklal Street, which houses many restaurants, art galleries and shops. The historic Galata Tower is just two minutes away on foot, and offers accommodation place terrace overlooking the tower. It also provides a terrace on the roof with panoramic views of the old city and the Golden Horn.</h3><h3><br></h3><h3>The rooms and apartments have a separate lounge and sofa of 3 seats and flat-screen TV with satellite channels. They all include a kitchenette with a refrigerator, microwave and work space is also used as a food.</h3><h3><br></h3><h3>You can in Nar Pera Hotel Start your day with a generous breakfast buffet style and includes hot and cold dishes. They can also arrange the reception desk meals in the room in addition to preparing meals of the food-for viruses.</h3><h3><br></h3><h3>Nar Pera Hotel is a 15-minute walk from Taksim Square, and Istanbul Ataturk Airport is 21.5 kilometers. And you can take advantage of an airport shuttle service at an additional cost.</h3><h3><br></h3><h3>Beyoglu is a wonderful choice for travelers interested for nightlife, dining and shopping.</h3>', 1, 2, 1, 1, 1, 1, 2, 2, 1, 1, 2, 'نار بيرا ', '<div>أقم في قلب إسطنبول</div><div><br></div><div>يقع Nar Pera Hotel في قلب حي بيوغلو على مسافة قصيرة سيراً على الأقدام من شارع الاستقلال الحيوي الذي يضم العديد من المطاعم والمعارض الفنية والمحلات التجارية. كما يبعُد برج غالاتا التاريخي مسافة دقيقتين فقط سيراً على الأقدام، ويوفر مكان الإقامة تراساً يطل على البرج. كما يوفر تراساً على السطح مع إطلالاتٍ بانورامية على المدينة القديمة والقرن الذهبي.</div><div><br></div><div>تحتوي الغرف والشقق على صالة منفصلة وأريكة من 3 مقاعد وتلفزيون بشاشة مسطحة مع قنوات فضائية. كما تشتمل جميعها على مطبخ صغير مزود بثلاجة وميكروويف ومساحة عمل تُستَخدم كمنطقة طعام أيضاً.</div><div><br></div><div>يمكنكم في Nar Pera Hotel بدء يومكم مع إفطار سخي على طراز البوفيه المفتوح ويتضمن الأطباق الساخنة والباردة. كما يُمكن لمكتب الاستقبال ترتيب تناول الوجبات في الغرفة بالإضافة إلى إعداد الوجبات اللازمة للحميات الغذائية الخاصة.</div><div><br></div><div>يقع Nar Pera Hotel على بعد 15 دقيقةً فقط سيراً على الأقدام من ميدان تقسيم، ويبعد مطار إسطنبول أتاتورك مسافة 21.5 كم. ويُمكنكم الاستفادة من خدمة نقل المطار مقابل تكلفة إضافية.</div><div><br></div><div>بيوغلو هو خيار رائع للمسافرين المهتمين بـ الحياة الليلية والطعام والتسوق.</div>', 1),
(4, 'Nar Galata Mansion', '<div>Traditional wooden. It offers free Wi-Fi and a front desk around the clock service, and offers simple, air-conditioned.</div><div><br></div><div>All rooms are decorated mainly white decor, which features a minibar and a private bathroom.</div><div><br></div><div>A generous buffet breakfast is served open with a lot of hot and cold dishes every day in the place of residence. There are a lot of bars, shops and restaurants in Istiklal Street, which is located just 5 minutes walk. Cafes are also available in the street where the hotel is located him.</div><div><br></div><div>Place of residence is located just 5 minutes walk from the tram station leading to Taksim Square, which is just 1.5 km away. And up trams to Sultanahmet Mosque and Dolmabahce Palace in less than 10 minutes, as the Bosphorus River is a 10-minute drive away.</div><div><br></div><div>Shuttle to Ataturk International Airport, which is located 19 km service is available, as Sabiha Gokcen Airport is 42 km.</div><div><br></div><div>Beyoglu is a wonderful choice for travelers interested for nightlife, dining and shopping.</div>', 1, 2, 1, 1, 1, 1, 2, 1, 1, 2, 2, 'نار غلطة القصر', '<p>خشبي تقليدي. ويوفر خدمة الواي فاي المجانية ومكتب استقبال يعمل على مدار الساعة، كما يضم غرفاً بسيطة ومكيفة.</p><p>تم تزيين جميع الغرف بديكور أبيض بشكل أساسي، وهي تحتوي على تلفزيون وميني بار وحمام خاص.</p><p>يتم تقديم بوفيه إفطار مفتوح سخي مع الكثير من الأطباق الساخنة والباردة يومياً في مكان الإقامة. وتوجد الكثير من البارات والمتاجر والمطاعم في شارع الاستقلال الذي يقع على بعد 5 دقائق سيراً على الأقدام. كما تتوفر مقاهي في الشارع الذي يقع به الفندق.</p><p>يقع مكان الإقامة على بعد 5 دقائق سيراً على الأقدام من محطة الترام المؤدية إلى ساحة تقسيم، والتي تبعد مسافة 1.5 كم. وتصل قطارات الترام إلى مسجد السلطان أحمد وقصر دولماباهس في غضون أقل من 10 دقائق، كما يبعد نهر البوسفور مسافة 10 دقائق بالسيارة.</p><p>تتوفر خدمة نقل مكوكية إلى مطار أتاتورك الدولي الذي يقع على بعد 19 كم، كما يبعد مطار صبيحة كوكجن مسافة 42 كم.</p><p>بيوغلو هو خيار رائع للمسافرين المهتمين بـ&nbsp;الحياة الليلية&nbsp;والطعام&nbsp;والتسوق.</p>', 1),
(5, 'Accra Hotel - Spchal Kategora', '<h3>Stay in the heart of Istanbul</h3><h3><br></h3><h3>Nar Pera Hotel is located in the heart of Beyoglu district, a short walk from the lively Istiklal Street, which houses many restaurants, art galleries and shops. The historic Galata Tower is just two minutes away on foot, and offers accommodation place terrace overlooking the tower. It also provides a terrace on the roof with panoramic views of the old city and the Golden Horn.</h3><h3><br></h3><h3>The rooms and apartments have a separate lounge and sofa of 3 seats and flat-screen TV with satellite channels. They all include a kitchenette with a refrigerator, microwave and work space is also used as a food.</h3><h3><br></h3><h3>You can in Nar Pera Hotel Start your day with a generous breakfast buffet style and includes hot and cold dishes. They can also arrange the reception desk meals in the room in addition to preparing meals of the food-for viruses.</h3><h3><br></h3><h3>Nar Pera Hotel is a 15-minute walk from Taksim Square, and Istanbul Ataturk Airport is 21.5 kilometers. And you can take advantage of an airport shuttle service at an additional cost.</h3><h3><br></h3><h3>Beyoglu is a wonderful choice for travelers interested for nightlife, dining and shopping.</h3>', 1, 2, 1, 2, 1, 1, 2, 2, 1, 2, 2, 'فندق أكرا - سبيشال كاتيغوري', '<div>أقم في قلب إسطنبول</div><div><br></div><div>يقع Nar Pera Hotel في قلب حي بيوغلو على مسافة قصيرة سيراً على الأقدام من شارع الاستقلال الحيوي الذي يضم العديد من المطاعم والمعارض الفنية والمحلات التجارية. كما يبعُد برج غالاتا التاريخي مسافة دقيقتين فقط سيراً على الأقدام، ويوفر مكان الإقامة تراساً يطل على البرج. كما يوفر تراساً على السطح مع إطلالاتٍ بانورامية على المدينة القديمة والقرن الذهبي.</div><div><br></div><div>تحتوي الغرف والشقق على صالة منفصلة وأريكة من 3 مقاعد وتلفزيون بشاشة مسطحة مع قنوات فضائية. كما تشتمل جميعها على مطبخ صغير مزود بثلاجة وميكروويف ومساحة عمل تُستَخدم كمنطقة طعام أيضاً.</div><div><br></div><div>يمكنكم في Nar Pera Hotel بدء يومكم مع إفطار سخي على طراز البوفيه المفتوح ويتضمن الأطباق الساخنة والباردة. كما يُمكن لمكتب الاستقبال ترتيب تناول الوجبات في الغرفة بالإضافة إلى إعداد الوجبات اللازمة للحميات الغذائية الخاصة.</div><div><br></div><div>يقع Nar Pera Hotel على بعد 15 دقيقةً فقط سيراً على الأقدام من ميدان تقسيم، ويبعد مطار إسطنبول أتاتورك مسافة 21.5 كم. ويُمكنكم الاستفادة من خدمة نقل المطار مقابل تكلفة إضافية.</div><div><br></div><div>بيوغلو هو خيار رائع للمسافرين المهتمين بـ الحياة الليلية والطعام والتسوق.</div>', 1),
(6, 'Golden Rain Hotel Old City ', '<h3>Stay in the heart of Istanbul</h3><h3><br></h3><h3>Nar Pera Hotel is located in the heart of Beyoglu district, a short walk from the lively Istiklal Street, which houses many restaurants, art galleries and shops. The historic Galata Tower is just two minutes away on foot, and offers accommodation place terrace overlooking the tower. It also provides a terrace on the roof with panoramic views of the old city and the Golden Horn.</h3><h3><br></h3><h3>The rooms and apartments have a separate lounge and sofa of 3 seats and flat-screen TV with satellite channels. They all include a kitchenette with a refrigerator, microwave and work space is also used as a food.</h3><h3><br></h3><h3>You can in Nar Pera Hotel Start your day with a generous breakfast buffet style and includes hot and cold dishes. They can also arrange the reception desk meals in the room in addition to preparing meals of the food-for viruses.</h3><h3><br></h3><h3>Nar Pera Hotel is a 15-minute walk from Taksim Square, and Istanbul Ataturk Airport is 21.5 kilometers. And you can take advantage of an airport shuttle service at an additional cost.</h3><h3><br></h3><h3>Beyoglu is a wonderful choice for travelers interested for nightlife, dining and shopping.</h3>', 1, 1, 2, 1, 1, 1, 2, 2, 2, 2, 2, 'الذهبي المطر فندق المدينة القديمة', '<div>أقم في قلب إسطنبول</div><div><br></div><div>يقع Nar Pera Hotel في قلب حي بيوغلو على مسافة قصيرة سيراً على الأقدام من شارع الاستقلال الحيوي الذي يضم العديد من المطاعم والمعارض الفنية والمحلات التجارية. كما يبعُد برج غالاتا التاريخي مسافة دقيقتين فقط سيراً على الأقدام، ويوفر مكان الإقامة تراساً يطل على البرج. كما يوفر تراساً على السطح مع إطلالاتٍ بانورامية على المدينة القديمة والقرن الذهبي.</div><div><br></div><div>تحتوي الغرف والشقق على صالة منفصلة وأريكة من 3 مقاعد وتلفزيون بشاشة مسطحة مع قنوات فضائية. كما تشتمل جميعها على مطبخ صغير مزود بثلاجة وميكروويف ومساحة عمل تُستَخدم كمنطقة طعام أيضاً.</div><div><br></div><div>يمكنكم في Nar Pera Hotel بدء يومكم مع إفطار سخي على طراز البوفيه المفتوح ويتضمن الأطباق الساخنة والباردة. كما يُمكن لمكتب الاستقبال ترتيب تناول الوجبات في الغرفة بالإضافة إلى إعداد الوجبات اللازمة للحميات الغذائية الخاصة.</div><div><br></div><div>يقع Nar Pera Hotel على بعد 15 دقيقةً فقط سيراً على الأقدام من ميدان تقسيم، ويبعد مطار إسطنبول أتاتورك مسافة 21.5 كم. ويُمكنكم الاستفادة من خدمة نقل المطار مقابل تكلفة إضافية.</div><div><br></div><div>بيوغلو هو خيار رائع للمسافرين المهتمين بـ الحياة الليلية والطعام والتسوق.</div>', 1),
(7, 'offer', 'offer testing', 1, 1, 1, 1, 2, 2, 2, 2, 2, 1, 2, 'عرض', 'اختبار العرض', 0);

-- --------------------------------------------------------

--
-- Table structure for table `hotel_images`
--

CREATE TABLE IF NOT EXISTS `hotel_images` (
  `id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `pic` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hotel_images`
--

INSERT INTO `hotel_images` (`id`, `hotel_id`, `pic`) VALUES
(7, 3, '9uoefbdlpija.jpg'),
(8, 3, 'lr14exqjuds7.jpg'),
(9, 3, 'rq6dzjkn58i3.jpg'),
(10, 4, 'h2tk4um59zyn.jpg'),
(11, 4, 'b5datzplsgh7.jpg'),
(12, 4, 'zdnf2ar71l4k.jpg'),
(14, 5, '6g5b2qxiz43s.jpg'),
(15, 5, 't167z9o83api.jpg'),
(16, 6, 'hsqae1lrnk7d.jpg'),
(17, 6, 'sbx63ynevwu8.jpg'),
(18, 7, 'jwra6kqmhd38.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `phone` varchar(20) NOT NULL,
  `watched` tinyint(4) NOT NULL,
  `time_sent` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `content`, `phone`, `watched`, `time_sent`) VALUES
(1, 'laaaa', 'alaaelgndy21@yahoo.com', 'sdmkvernpvnreopveruifbdvbvueribviuebrvuierbvuierbvurbviuerbvuierbvuiebruifberfuieruifheuifheruifherufhrieufiuberuivberuibuierfhuierhfuierhfiubreuivbreuivbervervrrvverv', '01201212454', 1, '2015-06-24 21:47:45');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE IF NOT EXISTS `newsletter` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

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
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `descreption` text NOT NULL,
  `title_ar` varchar(255) NOT NULL,
  `descreption_ar` text NOT NULL,
  `page_name` varchar(255) NOT NULL,
  `page_name_ar` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `descreption`, `title_ar`, `descreption_ar`, `page_name`, `page_name_ar`) VALUES
(1, 'cars rent', 'information about cars rent in turey .', 'سيارات للتاجير', 'معلومات تاجير السيارات في تركيا من خلال الشركة', 'cars', ''),
(2, 'Property', 'you can rent , buy ans sell too&nbsp;Property throuth our company', 'عقارات', 'يمكنك بيع و شراء و تاجير عقارات من خلالنا', 'Property', ''),
(3, 'vip service', '', 'خدمات vip', '', 'خدمات vip', ''),
(4, 'know turkey', '', 'تعرف على تركيا', '', 'تعرف على تركيا', ''),
(5, 'airport', '', 'حجوزات طيران', '', 'حجوزات طيران', 'airport 7agz'),
(6, 'doctors', '', 'سياحة طبية', '', 'سياحة طبية', ''),
(7, 'investment', '', 'مشاريع استثمارية', '', 'استثمار', ''),
(8, '', '', 'دراسات اقتصادية', '', 'استثمار', ''),
(9, 'new page', '', '', '', 'new page', ''),
(10, 'new', '', '', '', 'new page', '');

-- --------------------------------------------------------

--
-- Table structure for table `pages_images`
--

CREATE TABLE IF NOT EXISTS `pages_images` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `page_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pages_images`
--

INSERT INTO `pages_images` (`id`, `image`, `page_id`) VALUES
(4, '42437_jWK3yO-tftQ70kkNVWfDmw.jpg', 2),
(5, '55755_dRNWxbJprv8dxI9KLsE2Zw.jpg', 2),
(6, '55755_OpYLWIR3MIsqjOZNifVPfw.jpg', 2),
(7, 'download.jpg', 1),
(8, 'images (1).jpg', 1),
(9, 'images.jpg', 1),
(11, 'Flights_hero_image_42-42982796.jpg', 5),
(12, 'health-tourism-turkey.jpg', 6),
(14, 'hqdefault.jpg', 7),
(16, 'hqdefault.jpg', 3),
(17, 'hqdefault.jpg', 8),
(18, 'hqdefault.jpg', 9),
(19, 'hqdefault.jpg', 10);

-- --------------------------------------------------------

--
-- Table structure for table `site_info`
--

CREATE TABLE IF NOT EXISTS `site_info` (
  `id` int(11) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `instgram` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `address_ar` text NOT NULL,
  `skype` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `site_info`
--

INSERT INTO `site_info` (`id`, `phone`, `email`, `facebook`, `twitter`, `instgram`, `address`, `address_ar`, `skype`) VALUES
(1, '01204122661', 'jalal@yahoo.com', 'jalaal@facebook.com', 'jalal@twitter.com', 'alaa@instgram.com', 'sudia , makka , eilaf', 'السعودية . مكة  , ايلاف', 'jalal@skype.com');

-- --------------------------------------------------------

--
-- Table structure for table `website_home`
--

CREATE TABLE IF NOT EXISTS `website_home` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `title_ar` varchar(255) NOT NULL,
  `content_ar` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `website_home`
--

INSERT INTO `website_home` (`id`, `title`, `content`, `image`, `title_ar`, `content_ar`) VALUES
(1, 'Turkey is your choise', 'General informationOf course we known that each country has its own character in many ways, for the piece must be certain we have a background for any country before traveling to it, the following points are as illustrative points and some of them tips.• Capital: Ankara• Official language: Turkish (but you can talk to them in English as well)• Currency: Turkish Lira (and can deal with them in dollars or euro)• Religion: Islam (99% Muslims, mostly Sunnis and Alawites There section)• Water: preferred not to drink water from the tap.•', 'orange.jpg', 'تركيا اختيارك', 'معلومات عامةطبعا معروف لنا ان لكل دولة طابعها الخاص من عدة نواحي , لذالك يجب ان تكون عندنا خلفية معينة عن اي دولة قبل السفر اليها , والنقاط التالية هي بمثابة نقاط توضيحية وقسم منها نصائح.• العاصمة : انقرة• اللغة الرسمية : تركية (لكن تستطيع ان تكلمهم بالانجليزية ايضا)• العملة : ليرة تركية جديدة (وتستطيع ان تتعامل معهم بالدولار او اليورو)• الديانة : اسلام ( 99% مسلمين واغلبهم من السنة ويوجد قسم علويين)• المياه : مفضل ان لا تشرب من ماء الحنفية.• الاسعار : ليست رخيصة بالذات في المناطق السياحية. احذر الاستغلال. (مثال: لتر بنزين عندهم ثمنه 7-8 ريال سعودي وهذا يدل على غلاء المعيشة)• طبيعة الناس : مثل العرب بالضبط من ناحية الشكل الخارجي والديانة , مزاجهم حار وسريعي الغضب. يعني لو دخلت لجدال مع بائع حول سعر سلعة معينة قد يغضب عليك ويطردك.• الطعام : شرقي ومألوف لنا كعرب.• أسعار الفنادق : على سبيل المثال رحلة 4 أيام ,'),
(2, 'rooms', 'General informationOf course we known that each country has its own character in many ways, for the piece must be certain we have a background for any country before traveling to it, the following points are as illustrative points and some of them tips.• Capital: Ankara• Official language: Turkish (but you can talk to them in English as well)• Currency: Turkish Lira (and can deal with them in dollars or euro)• Religion: Islam (99% Muslims, mostly Sunnis and Alawites There section)• Water: preferred not to drink water from the tap.•', 'zdnf2ar71l4k.jpg', 'حجرات الفنادق', 'معلومات عامةطبعا معروف لنا ان لكل دولة طابعها الخاص من عدة نواحي , لذالك يجب ان تكون عندنا خلفية معينة عن اي دولة قبل السفر اليها , والنقاط التالية هي بمثابة نقاط توضيحية وقسم منها نصائح.• العاصمة : انقرة• اللغة الرسمية : تركية (لكن تستطيع ان تكلمهم بالانجليزية ايضا)• العملة : ليرة تركية جديدة (وتستطيع ان تتعامل معهم بالدولار او اليورو)• الديانة : اسلام ( 99% مسلمين واغلبهم من السنة ويوجد قسم علويين)• المياه : مفضل ان لا تشرب من ماء الحنفية.• الاسعار : ليست رخيصة بالذات في المناطق السياحية. احذر الاستغلال. (مثال: لتر بنزين عندهم ثمنه 7-8 ريال سعودي وهذا يدل على غلاء المعيشة)• طبيعة الناس : مثل العرب بالضبط من ناحية الشكل الخارجي والديانة , مزاجهم حار وسريعي الغضب. يعني لو دخلت لجدال مع بائع حول سعر سلعة معينة قد يغضب عليك ويطردك.• الطعام : شرقي ومألوف لنا كعرب.• أسعار الفنادق : على سبيل المثال رحلة 4 أيام ,'),
(3, 'Islamic Tourism', 'General informationOf course we known that each country has its own character in many ways, for the piece must be certain we have a background for any country before traveling to it, the following points are as illustrative points and some of them tips.• Capital: Ankara• Official language: Turkish (but you can talk to them in English as well)• Currency: Turkish Lira (and can deal with them in dollars or euro)• Religion: Islam (99% Muslims, mostly Sunnis and Alawites There section)• Water: preferred not to drink water from the tap.•', '3.jpg', 'لسياحة الاسلامية', 'معلومات عامةطبعا معروف لنا ان لكل دولة طابعها الخاص من عدة نواحي , لذالك يجب ان تكون عندنا خلفية معينة عن اي دولة قبل السفر اليها , والنقاط التالية هي بمثابة نقاط توضيحية وقسم منها نصائح.• العاصمة : انقرة• اللغة الرسمية : تركية (لكن تستطيع ان تكلمهم بالانجليزية ايضا)• العملة : ليرة تركية جديدة (وتستطيع ان تتعامل معهم بالدولار او اليورو)• الديانة : اسلام ( 99% مسلمين واغلبهم من السنة ويوجد قسم علويين)• المياه : مفضل ان لا تشرب من ماء الحنفية.• الاسعار : ليست رخيصة بالذات في المناطق السياحية. احذر الاستغلال. (مثال: لتر بنزين عندهم ثمنه 7-8 ريال سعودي وهذا يدل على غلاء المعيشة)• طبيعة الناس : مثل العرب بالضبط من ناحية الشكل الخارجي والديانة , مزاجهم حار وسريعي الغضب. يعني لو دخلت لجدال مع بائع حول سعر سلعة معينة قد يغضب عليك ويطردك.• الطعام : شرقي ومألوف لنا كعرب.• أسعار الفنادق : على سبيل المثال رحلة 4 أيام ,'),
(4, 'Water Tourism', 'General informationOf course we known that each country has its own character in many ways, for the piece must be certain we have a background for any country before traveling to it, the following points are as illustrative points and some of them tips.• Capital: Ankara• Official language: Turkish (but you can talk to them in English as well)• Currency: Turkish Lira (and can deal with them in dollars or euro)• Religion: Islam (99% Muslims, mostly Sunnis and Alawites There section)• Water: preferred not to drink water from the tap.•', 'royalwings.jpg', 'السياحة المائية', 'معلومات عامةطبعا معروف لنا ان لكل دولة طابعها الخاص من عدة نواحي , لذالك يجب ان تكون عندنا خلفية معينة عن اي دولة قبل السفر اليها , والنقاط التالية هي بمثابة نقاط توضيحية وقسم منها نصائح.• العاصمة : انقرة• اللغة الرسمية : تركية (لكن تستطيع ان تكلمهم بالانجليزية ايضا)• العملة : ليرة تركية جديدة (وتستطيع ان تتعامل معهم بالدولار او اليورو)• الديانة : اسلام ( 99% مسلمين واغلبهم من السنة ويوجد قسم علويين)• المياه : مفضل ان لا تشرب من ماء الحنفية.• الاسعار : ليست رخيصة بالذات في المناطق السياحية. احذر الاستغلال. (مثال: لتر بنزين عندهم ثمنه 7-8 ريال سعودي وهذا يدل على غلاء المعيشة)• طبيعة الناس : مثل العرب بالضبط من ناحية الشكل الخارجي والديانة , مزاجهم حار وسريعي الغضب. يعني لو دخلت لجدال مع بائع حول سعر سلعة معينة قد يغضب عليك ويطردك.• الطعام : شرقي ومألوف لنا كعرب.• أسعار الفنادق : على سبيل المثال رحلة 4 أيام ,'),
(5, 'golf', 'General informationOf course we known that each country has its own character in many ways, for the piece must be certain we have a background for any country before traveling to it, the following points are as illustrative points and some of them tips.• Capital: Ankara• Official language: Turkish (but you can talk to them in English as well)• Currency: Turkish Lira (and can deal with them in dollars or euro)• Religion: Islam (99% Muslims, mostly Sunnis and Alawites There section)• Water: preferred not to drink water from the tap.•', '5.jpg', 'الجولف ', 'معلومات عامةطبعا معروف لنا ان لكل دولة طابعها الخاص من عدة نواحي , لذالك يجب ان تكون عندنا خلفية معينة عن اي دولة قبل السفر اليها , والنقاط التالية هي بمثابة نقاط توضيحية وقسم منها نصائح.• العاصمة : انقرة• اللغة الرسمية : تركية (لكن تستطيع ان تكلمهم بالانجليزية ايضا)• العملة : ليرة تركية جديدة (وتستطيع ان تتعامل معهم بالدولار او اليورو)• الديانة : اسلام ( 99% مسلمين واغلبهم من السنة ويوجد قسم علويين)• المياه : مفضل ان لا تشرب من ماء الحنفية.• الاسعار : ليست رخيصة بالذات في المناطق السياحية. احذر الاستغلال. (مثال: لتر بنزين عندهم ثمنه 7-8 ريال سعودي وهذا يدل على غلاء المعيشة)• طبيعة الناس : مثل العرب بالضبط من ناحية الشكل الخارجي والديانة , مزاجهم حار وسريعي الغضب. يعني لو دخلت لجدال مع بائع حول سعر سلعة معينة قد يغضب عليك ويطردك.• الطعام : شرقي ومألوف لنا كعرب.• أسعار الفنادق : على سبيل المثال رحلة 4 أيام ,');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel_images`
--
ALTER TABLE `hotel_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages_images`
--
ALTER TABLE `pages_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_info`
--
ALTER TABLE `site_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `website_home`
--
ALTER TABLE `website_home`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `hotel_images`
--
ALTER TABLE `hotel_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `pages_images`
--
ALTER TABLE `pages_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `site_info`
--
ALTER TABLE `site_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `website_home`
--
ALTER TABLE `website_home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
