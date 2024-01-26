-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2024 at 04:15 PM
-- Server version: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryID` int(10) UNSIGNED NOT NULL,
  `categoryName` varchar(200) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `parentID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `categoryDescription` varchar(500) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryID`, `categoryName`, `parentID`, `categoryDescription`) VALUES
(1, 'تولید محتوا', 0, 'کار‌های نوشتاری و تایپ خود را به تولید کننده‌های محتوای دورکاری بدهید تا نتیجه‌ باور نکردنی بگیرید.'),
(2, 'طراحی سایت', 0, 'برای کسب و کار خود، یک وبسایت بسازید تا در اینترنت معروف شوید و مشتریان‌تان شما را پیدا کنند.'),
(3, 'مهندسی علوم تجربی', 0, 'پروژه‌های در زمینه مهندسی، علوم تجربی و... را به بهترین فریلنسرها بسپارید.'),
(4, 'برنامه نویسی', 0, '\r\nبرای کسب‌وکار خود، نرم‌افزار یا اپلیکیشن سفارش دهید تا مشتری‌های خود را چندین برابر کنید.'),
(5, 'سئو SEO', 0, 'به جای صرف هزینه‌های گزاف روی تبلیغات، با سئو و بهینه سازی سایت تان، همیشه در رتبه‌های بالا باشید'),
(6, 'ترجمه', 0, 'ترجمه‌های خود را به بهترین مترجم‌های کارلنسر بسپارید.');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `commentProjectID` int(11) NOT NULL,
  `commentSenderID` int(11) NOT NULL,
  `commentSubmitDate` datetime NOT NULL,
  `commentText` varchar(1000) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `commentSenderName` varchar(250) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `commentSenderUsername` varchar(250) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `allow` int(11) NOT NULL DEFAULT '-1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `commentProjectID`, `commentSenderID`, `commentSubmitDate`, `commentText`, `commentSenderName`, `commentSenderUsername`, `allow`) VALUES
(20, 33, 8, '2023-12-30 17:14:42', 'عالیه', 'hasan', 'hasan01', 0),
(21, 28, 8, '2023-12-30 17:15:01', 'پروژه خوبیه موفق باشید', 'hasan', 'hasan01', 1),
(23, 24, 8, '2023-12-30 17:15:57', 'لطفا در خواست من برای پروژتون رو بررسی کنید', 'hasan', 'hasan01', 1),
(22, 26, 8, '2023-12-30 17:15:37', 'به چه صورت انتظار دارید پروژه انجام شه؟', 'hasan', 'hasan01', -1),
(19, 30, 1, '2023-12-30 17:14:09', '30 صفحه مقاله فقط 55 تومان؟ واقعا که!', 'Adminstrator', 'admin', 1),
(18, 32, 1, '2023-12-30 17:13:49', 'مبلغ کمی در نظر گرفتید متاسفانه', 'Adminstrator', 'admin', 1),
(17, 33, 1, '2023-12-30 17:13:19', 'پروژه بنظر خوبیه', 'Adminstrator', 'admin', 1),
(24, 31, 8, '2023-12-30 17:16:33', 'چه مدت زمانی دارید؟', 'hasan', 'hasan01', 1),
(25, 31, 12, '2023-12-30 17:17:18', 'یا ظاهر کار هم براتون اهمیت داره؟', 'ali', 'ali01', 1),
(26, 28, 12, '2023-12-30 17:17:35', 'بنظر پروژه بزرگی میاد!!', 'ali', 'ali01', 1),
(27, 27, 12, '2023-12-30 17:18:01', 'حیف که اتوکد بلد نیستم وگرنه انجام میدادم.', 'ali', 'ali01', 1),
(28, 26, 12, '2023-12-30 17:18:34', 'پروژه خوب یعنی این بسیار مفید و کاربردی پیشنهاد دادم لطفا بررسی کنید', 'ali', 'ali01', -1),
(29, 24, 10, '2023-12-30 17:19:11', 'کار رو به تیم ما بسپارید با خیال راحت', 'reza', 'reza01', 1),
(30, 26, 10, '2023-12-30 17:19:25', 'بنظر ساده میاد که', 'reza', 'reza01', 1),
(31, 27, 10, '2023-12-30 17:19:49', 'شک دارم برای درخواست دادن بنظر سخته و مبلغ پایین', 'reza', 'reza01', 1),
(32, 30, 10, '2023-12-30 17:20:17', 'زمان اختصاص داده شده چه میزان هست؟ تا کی میخواین؟', 'reza', 'reza01', 1),
(33, 25, 10, '2023-12-30 17:20:37', 'عالی بود محشره', 'reza', 'reza01', 1),
(34, 28, 17, '2023-12-30 17:22:40', 'wow!', 'sina', 'sina01', 1),
(35, 24, 17, '2023-12-30 17:22:58', 'من میخوام این پروژه رو ', 'sina', 'sina01', -1),
(36, 25, 17, '2023-12-30 17:23:18', 'حله', 'sina', 'sina01', 0),
(37, 25, 17, '2023-12-30 17:23:33', 'اوکیه', 'sina', 'sina01', 0),
(38, 33, 12, '2024-01-25 13:39:52', 'سلامم', 'ali', 'ali01', -1);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(300) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `email` varchar(300) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `subject` varchar(500) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `message` varchar(3000) COLLATE utf8mb4_persian_ci NOT NULL,
  `submitDate` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `subject`, `message`, `submitDate`) VALUES
(1, 'حسن', 'h.nasrollahi@outlook.de', 'سایت شما', 'با تشکر از سایت خوبتون', '2023-12-27 19:13:35'),
(2, 'رضا', 'reza@gmail.com', 'لودینگ سایت', 'سایت بسیار دیر لود میشه لطفا پیگیری کنید', '2023-12-30 16:36:19'),
(3, 'رضا', 'reza@gmail.com', 'لودینگ سایت', 'سایت بسیار دیر لود میشه لطفا پیگیری کنید', '2023-12-30 16:36:21'),
(4, 'محمد', 'm@yahoo.com', 'طراحی', 'طراحی سایت بسیار تامل برانگیزه!', '2023-12-30 16:36:53'),
(5, 'محمد', 'm@outlook.com', 'طراحی', 'نظری ندارم در ارتباط با طراحی تشکر از شما', '2024-01-24 17:01:08');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `projectID` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `description` varchar(1000) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `price` int(10) UNSIGNED DEFAULT NULL,
  `userID` int(10) UNSIGNED NOT NULL,
  `category` int(11) NOT NULL,
  `submitDate` datetime NOT NULL,
  `editDate` datetime DEFAULT NULL,
  `image` varchar(250) COLLATE utf8mb4_persian_ci DEFAULT '/files/images/project/nophoto.png',
  `projectStatus` int(1) NOT NULL DEFAULT '0',
  `freelancerID` int(10) UNSIGNED DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`projectID`, `name`, `description`, `price`, `userID`, `category`, `submitDate`, `editDate`, `image`, `projectStatus`, `freelancerID`) VALUES
(24, 'نوشتن shell script برای لینوکس', 'با سلام و خسته نباشید خدمت دوستان عزیز\r\nنیاز به چند شل اسکریپت داریم که کار های زیر رو انجام بده ۱- تغییر ip و اضافه کردن ip به یک vpn 2- ست کردن دامنه و ssl بر روی سروری که پروتوکل سیسکو و اوپن روش هست', 600, 1, 4, '2023-12-30 16:21:09', NULL, '/files/images/project/1703949669download.png', 0, NULL),
(23, 'تولید ریل یا کلیپ اینستاگرام', 'تم ریل: عجایب و شگفتی های جهان طبیعت(حیوانات/گیاهان/دریاها و اقیانوس ها/بدن انسان/نجوم/آب/باد/خاک/آتش/جنگل ها/بیابان ها/زمین)', 500, 1, 1, '2023-12-30 16:18:48', NULL, '/files/images/project/1703949528how-to-change-instagram-app-icon.jpg', 0, NULL),
(25, 'بهبود سایت (فرانت نکست - بکند نست - دیتابیس مونگو دیبی)', 'دوستای عزیز ما یه سایت داریم که فرانتش با نکست و بکندش با نست هست و دیتابیسش هم مونگو دیبی هست. سایت در حال حاضر آنلاین و در حال استفاده هست(یه سایت مثل دیوار که اطلاعات ملک ثبت میشه). میخواستم سایت رو یکم امکانات جدید بهش اضافه کنیم و یه قسمت هایی رو بهبود بدیم.', 700, 1, 2, '2023-12-30 16:22:12', NULL, '/files/images/project/1703949732download (1).png', 1, 17),
(26, 'پروژه پژوهشی', 'موضوع درس پژوهی: رفع اختلال در درس دیکته نویسی دانش اموزان پایه چهارم مدرسه دخترانه رضوان ۱', 100, 1, 1, '2023-12-30 16:24:03', NULL, '/files/images/project/1703949843research11.png', 0, NULL),
(27, 'پروژه دانشجویی اتوکد', 'کشیدن نقشه در اتوکد + سکشن a و b و c \r\nو همینطور در اتوکد اندازه هم وارد شود ', 350, 1, 1, '2023-12-30 16:25:34', NULL, '/files/images/project/1703949934office-plan-copy.jpg', 0, NULL),
(28, 'پیشرفت و بالا اوردن سایت در search engine', 'پیشرفت و بالا اوردن سایت در search engine های گوگل و بینگ\r\n\r\nSEO Optimization برای وبسایت با حدود ۱۰ تا html page\r\n\r\nبررسی مشکلات وبسایت مربوط به رنکینگ Google  ', 450, 8, 5, '2023-12-30 16:28:02', NULL, '/files/images/project/1703950082Knowledge-base-part-3_what-is-seo.jpg', 0, NULL),
(29, 'نیرو متخصص SEO', '\r\nبه یک نیرو متخصص سئو برای بهینه سازی وب سایت های فروشگاهی و خدماتی نیاز داریم\r\nسئو on page\r\nسئو off page\r\nتحلیل کلمه کلیدی ها\r\nو نوشتن مقالات سئو شده', 999, 8, 5, '2023-12-30 16:29:31', NULL, '/files/images/project/1703950171learn-seo-new-t.png', 0, NULL),
(30, 'ترجمه 30 صفحه مقاله انگلیسی به فارسی ', 'ترجمه 30 صفحه مقاله انگلیسی به فارسی همراه با جدول', 55, 12, 6, '2023-12-30 16:31:04', NULL, '/files/images/project/1703950264ac-image-5O1563940218QJ.jpeg', 0, NULL),
(31, 'تایب متن های فارسی در Word', 'تایپ متن های دستنویس و بهم ریخته، ترجمه متون انگلیسی، تایپ فایل های صوتی', 92, 12, 6, '2023-12-30 16:32:02', NULL, '/files/images/project/1703950322word1-min.jpg', 0, NULL),
(32, 'سمینار تجارت الکترونیک', 'در خصوص سمینار ۳۰ ص ارشد مهندسی تجارت الکترونیک با موضوع تحلیل تشخیصی برای شناسایی داده های پرت در تجزیه و تحلیل کلان داده       4561 ', 185, 10, 3, '2023-12-30 16:33:40', NULL, '/files/images/project/1703950420seminar-holding-mms-back.jpg', 0, NULL),
(33, 'پروژه علوم سیاسی', '- توسعه فرهنگی ایران از منظر نظریه ساختار-کارگزار(مطالعه موردی: آموزش و پرورش دولت )\r\n- یه مقاله نه حد علمی پژوهشی اما محتواش کپی نباشه\r\n- استاد یکسری توضیحات دادن که میفرستم خدمتتون', 25, 10, 3, '2023-12-30 16:34:45', NULL, '/files/images/project/1703950485286.jpg', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `reqID` int(10) UNSIGNED NOT NULL,
  `projectID` int(10) UNSIGNED NOT NULL,
  `freelancerID` int(10) UNSIGNED NOT NULL,
  `accepted` int(1) NOT NULL DEFAULT '-1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`reqID`, `projectID`, `freelancerID`, `accepted`) VALUES
(16, 25, 12, -1),
(15, 26, 10, -1),
(14, 25, 10, -1),
(13, 33, 10, 0),
(17, 32, 12, -1),
(18, 27, 12, -1),
(19, 31, 8, -1),
(20, 30, 8, -1),
(21, 33, 8, -1),
(22, 24, 8, 0),
(23, 25, 17, 1),
(24, 28, 1, -1),
(25, 33, 12, -1);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `pic` varchar(1000) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL DEFAULT '../assets/img/slider/defaultslider.png',
  `description` varchar(1000) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL DEFAULT 'توضیحات اسلایدر'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `pic`, `description`) VALUES
(1, '../assets/img/slider/slider1.png', 'توضیحات 1'),
(2, '../assets/img/slider/slider2.png', 'توضیحات 2'),
(3, '../assets/img/slider/slider3.jpeg', 'توضیحات 3');

-- --------------------------------------------------------

--
-- Table structure for table `stats`
--

CREATE TABLE `stats` (
  `id` int(10) UNSIGNED NOT NULL,
  `totalProject` int(10) UNSIGNED NOT NULL,
  `doneProject` int(10) UNSIGNED NOT NULL,
  `score` int(10) UNSIGNED NOT NULL,
  `satisfiedCustomer` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `stats`
--

INSERT INTO `stats` (`id`, `totalProject`, `doneProject`, `score`, `satisfiedCustomer`) VALUES
(1, 11, 0, 1743, 87);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8_persian_ci NOT NULL,
  `username` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `password` varchar(300) COLLATE utf8_persian_ci NOT NULL,
  `email` varchar(150) COLLATE utf8_persian_ci NOT NULL,
  `phone` varchar(11) COLLATE utf8_persian_ci NOT NULL,
  `gender` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `cv` varchar(3000) COLLATE utf8_persian_ci NOT NULL,
  `joinDate` datetime NOT NULL,
  `profileimage` varchar(300) COLLATE utf8_persian_ci NOT NULL DEFAULT '/files/images/user/nophoto.png'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `password`, `email`, `phone`, `gender`, `cv`, `joinDate`, `profileimage`) VALUES
(1, 'Adminstrator', 'admin', '$2y$10$B0SqqydxdOLqnNCXiJCo2uqy2uODC2l/cigtr20I5cwhiqN1ixpnq', 'admin@gmail.com', '09368413419', 0, 'مدیریت دورکاری', '2022-10-17 00:00:00', '/files/images/user/1703345197applsci-10-04102-g001.png'),
(2, 'mehrdad', 'mehrad01', '$2y$10$6qBPZYRnTZ4MNfIToiaQ9.JhjWzy5UlJltZfUnTxS79mcahx8Vuti', 'mehrdad@gmail.com', '09112459876', 0, 'مهرداد توکلی هستم؛ نویسنده، استراتژیست محتوا‌ و سئوکار؛ سئو و تولید محتوا شغل اصلی منه و عاشق کارم هستم. برای من کیفیت حرف اول رو می‌زنه..', '2022-11-08 02:40:46', '	/files/images/user/nophoto.png'),
(8, 'hasan', 'hasan01', '$2y$10$6qBPZYRnTZ4MNfIToiaQ9.JhjWzy5UlJltZfUnTxS79mcahx8Vuti', 'hasan@gmail.com', '09172443048', 0, '6+2 سال برنامه نویسی پایتون«حرفه ایی»/آشنایت کامل با اصلی ترین فریم ورک های پایتون/دوست دار محیط زیست/ری اکت باز/خیلی دوستدار یونیکس', '2023-12-23 17:09:28', '/files/images/user/nophoto.png'),
(10, 'reza', 'reza01', '$2y$10$6qBPZYRnTZ4MNfIToiaQ9.JhjWzy5UlJltZfUnTxS79mcahx8Vuti', 'reza@gmail.com', '09172443048', 0, 'کارشناس سئو و دیجیتال مارکتینگ', '2023-12-28 00:00:00', '/files/images/user/nophoto.png'),
(11, 'mohammad', 'mohammad01', '$2y$10$6qBPZYRnTZ4MNfIToiaQ9.JhjWzy5UlJltZfUnTxS79mcahx8Vuti', 'mohammad@gmail.com', '09172443049', 0, 'گروه برنامه نویسی صعود در خدمتتون هستیم لطفا در صورت داشتن اطلاعات کامل و دقیق در مورد پروژه پیشنهاد ارسال کنین . با تشکر', '2023-12-01 00:00:00', '/files/images/user/nophoto.png'),
(12, 'ali', 'ali01', '$2y$10$6qBPZYRnTZ4MNfIToiaQ9.JhjWzy5UlJltZfUnTxS79mcahx8Vuti', 'ali@gmail.com', '09172443046', 0, 'انجام پروژه ها با بالاترین کیفیت،در کوتاه ترین زمان. مشتریان قبلی من دوستان امروز من هستن . به جمع دوستان فردای من خوش امدید', '2023-12-12 00:00:00', '/files/images/user/nophoto.png'),
(13, 'javad', 'javad01', '$2y$10$6qBPZYRnTZ4MNfIToiaQ9.JhjWzy5UlJltZfUnTxS79mcahx8Vuti', 'javad@gmail.com', '09112459870', 0, 'برنامه نویس دات نت؛بالای 15 سال سابقه برنامه نویسی در زمینه دات نت،تخصص در زمینه نوشتن ربات های فرآیند محور،تخصص حرفه ای در کانورت اطلاعات', '2022-11-08 02:40:46', '	/files/images/user/nophoto.png'),
(14, 'fatemeh', 'fatemeh01', '$2y$10$6qBPZYRnTZ4MNfIToiaQ9.JhjWzy5UlJltZfUnTxS79mcahx8Vuti', 'fatemeh@gmail.com', '09212459876', 1, 'برنامه نویس و طراح گرافیکی / هرچی هست لطف و کرم خداست / ادویه ای به نام عشق چاشنی تمام کارهای منه / نفر 1 وردپرس در پونیشا / سریع و حرفه ای', '2022-11-02 02:40:46', '	/files/images/user/nophoto.png'),
(15, 'zahra', 'zahra01', '$2y$10$6qBPZYRnTZ4MNfIToiaQ9.JhjWzy5UlJltZfUnTxS79mcahx8Vuti', 'zahra@gmail.com', '09212454876', 1, 'متخصص طراحی سایت وردپرس، سئو و بهینه سازی، افزایش امنیت سایتهای وردپرس، طراحی سایت با المنتور ، ارائه مشاوره رایگان قبل از انجام پروژه .', '2022-11-18 02:40:46', '	/files/images/user/nophoto.png'),
(16, 'yaseman', 'yaseman01', '$2y$10$6qBPZYRnTZ4MNfIToiaQ9.JhjWzy5UlJltZfUnTxS79mcahx8Vuti', 'yaseman@gmail.com', '09232454876', 1, '6+2 سال برنامه نویسی پایتون«حرفه ایی»/آشنایت کامل با اصلی ترین فریم ورک های پایتون/دوست دار محیط زیست/ری اکت باز/خیلی دوستدار یونیکس', '2022-11-16 02:40:46', '	/files/images/user/nophoto.png'),
(17, 'sina', 'sina01', '$2y$10$6qBPZYRnTZ4MNfIToiaQ9.JhjWzy5UlJltZfUnTxS79mcahx8Vuti', 'sina@gmail.com', '09145648976', 0, 'فاقد رزومه', '2023-12-30 16:09:00', '/files/images/user/nophoto.png'),
(27, 'رضا قنبریان', 'ghreza3', '$2y$10$ujyv6oOMrR3i1lRhoNoSKO0idkDhhHfV4DQ3Ms08rFI0dZKhnIsES', 'ghreza3@gmail.com', '09391012062', 0, '', '2024-01-24 16:11:29', '/files/images/user/nophoto.png'),
(20, 'nksn', 'jkndf', '$2y$10$6qBPZYRnTZ4MNfIToiaQ9.JhjWzy5UlJltZfUnTxS79mcahx8Vuti', 'jkdnv@gmail.com', '09122569874', 0, 'dfwe', '2023-12-30 16:56:34', '/files/images/user/nophoto.png'),
(26, 'رضا قنبریان', 'ghreza2', '$2y$10$gvCY0LrKTY1nP9BHuNC/sOx7CmqQkVs9EcFu5cbvslbp.5AZ0Rc8e', 'ghreza2@gmail.com', '09391012068', 0, 'wef', '2024-01-24 16:02:57', '/files/images/user/nophoto.png'),
(28, 'رضا قنبریان', 'ghreza4', '$2y$10$6qBPZYRnTZ4MNfIToiaQ9.JhjWzy5UlJltZfUnTxS79mcahx8Vuti', 'ghreza4@gmail.com', '09391013062', 0, '', '2024-01-24 16:13:04', '/files/images/user/nophoto.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryID`),
  ADD UNIQUE KEY `catName` (`categoryName`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`projectID`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`reqID`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stats`
--
ALTER TABLE `stats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `projectID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `reqID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
