-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Mar 07, 2023 at 01:59 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookingtickets`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `group_name` varchar(100) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `photo` varchar(250) DEFAULT NULL,
  `description` text NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `group_name`, `topic`, `photo`, `description`, `status`, `created_by`) VALUES
(1, 'news', 'Hollowgraves Haunted Manor', 'http://localhost:8000/upload/article/haunted-house1.jpeg', '<div class=\"wpb_text_column wpb_content_element wpb_animate_when_almost_visible wpb_left-to-right left-to-right wpb_start_animation animated\" style=\"animation: 1s cubic-bezier(0.175, 0.885, 0.32, 1.275) 0s 1 normal both running wpb_ltr; opacity: 1; margin-bottom: 35px; color: rgb(1, 1, 1); font-family: ProximaRegular, sans-serif; font-size: 14px;\"><div class=\"wpb_wrapper\" style=\"margin-bottom: 0px;\"><p style=\"margin: 10px 0px 0px; font-size: 15px; line-height: 1.7; font-family: Muli, Arial, Helvetica, sans-serif;\">The house first opened in 1995 as a Halloween attraction at the Gingerbread Castle in Hamburg, NJ. After additional Halloween runs in Wayne and Andover, the house made the change to a shore attraction with its debut at Keansburg Amusement Park in 2002. After that one season, it moved to the Seaside Heights in 2003. After four seasons, the house returned to its Halloween roots with seasons in Vernon and Budd Lake from 2007 through 2010. In 2012, the Haunted Manor returned to Seaside Heights. A long term stay was made impossible though when Hurricane Sandy ravaged the boardwalk, destroying just about everything on it. Somehow, the Haunted Manor was one of very few attractions to make it through the storm completely intact and, in 2013, it relocated back to Keansburg Amusement Park in Keansburg, NJ where we plan to keep it for the foreseeable future!</p></div></div><div class=\"wpb_text_column wpb_content_element wpb_animate_when_almost_visible wpb_right-to-left right-to-left wpb_start_animation animated\" style=\"animation: 1s cubic-bezier(0.175, 0.885, 0.32, 1.275) 0s 1 normal both running wpb_rtl; opacity: 1; margin-bottom: 35px; color: rgb(1, 1, 1); font-family: ProximaRegular, sans-serif; font-size: 14px;\"><div class=\"wpb_wrapper\" style=\"margin-bottom: 0px;\"><p style=\"margin: 10px 0px 0px; font-size: 15px; line-height: 1.7; font-family: Muli, Arial, Helvetica, sans-serif;\">As mentioned above, the Haunted Manor is family friendly. While there are definitely some bloody scenes inside, we pride ourselves on creepiness over excessive gore. It is much more in the vein of a classic haunted house attraction with a mixture of live actors and one of a kind animatronic characters that you will find nowhere else!</p></div></div>', 1, 'huyen'),
(2, 'news', 'Keeping cool in Keansburg', 'http://localhost:8000/upload/article/runaway-rapids-post.jpeg', '<p><strong style=\"font-weight: bold; color: rgb(1, 1, 1); font-family: ProximaRegular, sans-serif; font-size: 14px;\">KEANSBURG AMUSEMENT PARK:</strong><span style=\"color: rgb(1, 1, 1); font-family: ProximaRegular, sans-serif; font-size: 14px;\">&nbsp;On Beachway Avenue adjacent to the Keansburg boardwalk. The amusement park includes bumper cars, kiddie rides, adolescent and adult rides, including roller coaster and scare house. The park is currently open daily with limited attractions at noon on weekdays, 11 a.m. on weekends. The full park will be running by late June. Park gates will open at 10 a.m., and the park is open until about 11 p.m. on weekdays, later on weekends. Food options include classic boardwalk fare and seafood. Alcohol is not permitted inside the parks. Fully restored Old Heidelberg Inn, destroyed by Sandy, will open during the summer. The park will have limited openings, weather permitting, through mid-October. For up-to-date information, check the park\'s website.</span><br></p>', 1, 'huyen'),
(3, 'blog-home', 'Directions & Parking', 'http://localhost:8000/upload/article/directions1.jpeg', '<p style=\"margin: 10px 0px 20px; font-size: 15px; line-height: 1.7; font-family: Muli, Arial, Helvetica, sans-serif; color: rgb(1, 1, 1);\"><span class=\"text-pink\" style=\"color: rgb(255, 0, 200);\"><strong style=\"font-weight: bold; margin-bottom: 0px;\">From the North:</strong></span><br>Take NJ Turnpike South to Exit 11<br>Follow to Garden State Parkway South to Exit 117<br style=\"margin-bottom: 0px;\">See Below</p><p style=\"margin: 10px 0px 20px; font-size: 15px; line-height: 1.7; font-family: Muli, Arial, Helvetica, sans-serif; color: rgb(1, 1, 1);\"><span class=\"text-pink\" style=\"color: rgb(255, 0, 200);\"><strong style=\"font-weight: bold; margin-bottom: 0px;\">From Staten Island:</strong></span><br>Take Outerbridge Crossing to Garden State Parkway South to Exit 117<br style=\"margin-bottom: 0px;\">See Below</p><p style=\"margin: 10px 0px 20px; font-size: 15px; line-height: 1.7; font-family: Muli, Arial, Helvetica, sans-serif; color: rgb(1, 1, 1);\"><span class=\"text-pink\" style=\"color: rgb(255, 0, 200);\"><strong style=\"font-weight: bold; margin-bottom: 0px;\">From the South:</strong></span><br>Take Garden State Parkway North to Exit 117<br style=\"margin-bottom: 0px;\">See Below</p><p style=\"margin: 10px 0px 20px; font-size: 15px; line-height: 1.7; font-family: Muli, Arial, Helvetica, sans-serif; color: rgb(1, 1, 1);\"><span class=\"text-pink\" style=\"color: rgb(255, 0, 200);\"><strong style=\"font-weight: bold; margin-bottom: 0px;\">From State Highway 35:</strong></span><br>Go North through Middletown to Palmer Avenue (Target Store on right)<br>Turn right onto Palmer Avenue<br style=\"margin-bottom: 0px;\">Go straight for 3 1/2 miles to beach</p><p style=\"margin: 10px 0px 20px; font-size: 15px; line-height: 1.7; font-family: Muli, Arial, Helvetica, sans-serif; color: rgb(1, 1, 1);\"><span class=\"text-pink\" style=\"color: rgb(255, 0, 200);\"><strong style=\"font-weight: bold; margin-bottom: 0px;\">From Garden State Parkway 117:</strong></span><br>Follow signs for Route 36 East<br>Go straight for 4 miles on Route 36 East<br>Take jughandle for Laurel Avenue and turn left to cross over Route 36<br style=\"margin-bottom: 0px;\">Follow Laurel Avenue for 1 mile into Keansburg</p><p style=\"margin: 10px 0px 20px; font-size: 15px; line-height: 1.7; font-family: Muli, Arial, Helvetica, sans-serif; color: rgb(1, 1, 1);\"><span class=\"text-pink\" style=\"color: rgb(255, 0, 200);\"><strong style=\"font-weight: bold; margin-bottom: 0px;\">PARKING:</strong></span><br style=\"margin-bottom: 0px;\">It is more convenient for guests to use the lot behind the amusement park. The cost to park a car ALL DAY LONG is $7.00 Monday through Friday and $10.00 a car ALL DAY LONG Weekends &amp; Holidays.</p><p style=\"margin: 10px 0px 20px; font-size: 15px; line-height: 1.7; font-family: Muli, Arial, Helvetica, sans-serif; color: rgb(1, 1, 1);\">Metered parking is limited and available on the street and in the lot north of the amusement park. The Borough of Keansburg owns and operates the meters and strictly enforces any time infractions. Parking violation tickets are given by the Borough of Keansburg for any expired meter.</p><p style=\"margin: 10px 0px 20px; font-size: 15px; line-height: 1.7; font-family: Muli, Arial, Helvetica, sans-serif; color: rgb(1, 1, 1);\">Other Parking Rules:</p><p style=\"margin: 10px 0px 20px; font-size: 15px; line-height: 1.7; font-family: Muli, Arial, Helvetica, sans-serif; color: rgb(1, 1, 1);\">- NO in and out of the lot allowed</p><p style=\"margin: 10px 0px 20px; font-size: 15px; line-height: 1.7; font-family: Muli, Arial, Helvetica, sans-serif; color: rgb(1, 1, 1);\">- NO tailgating</p><p style=\"margin: 10px 0px 20px; font-size: 15px; line-height: 1.7; font-family: Muli, Arial, Helvetica, sans-serif; color: rgb(1, 1, 1);\">-Lot closes 1/2 hour after park closes. Absolutely NO overnight parking.</p><p style=\"margin: 10px 0px 20px; font-size: 15px; line-height: 1.7; font-family: Muli, Arial, Helvetica, sans-serif; color: rgb(1, 1, 1);\"><span class=\"text-pink\" style=\"color: rgb(255, 0, 200);\"><strong style=\"font-weight: bold; margin-bottom: 0px;\">TRANSPORTATION:</strong></span><br style=\"margin-bottom: 0px;\">Buses leave out of Port Authority, New York City. The destination stop is Beachway, Keansburg. To view the schedule, follow these steps:</p><p style=\"margin: 10px 0px 20px; font-size: 15px; line-height: 1.7; font-family: Muli, Arial, Helvetica, sans-serif; color: rgb(1, 1, 1);\">Go to the Academy Bus Lines web site<br>Click on “Commuter” at top of home page<br>Click on “Schedules”<br>Click on “Route 36 to Port Authority”<br style=\"margin-bottom: 0px;\">Our destination is Keansburg/Beachway</p>', 1, 'huyen'),
(4, 'blog-home', 'Keansburg Amusement Parks', 'http://localhost:8000/upload/article/thepatch-0403.jpeg', '<p style=\"margin: 10px 0px 20px; font-size: 14px; line-height: 1.7; font-family: ProximaRegular, sans-serif; color: rgb(1, 1, 1);\"><strong style=\"font-weight: bold;\">KEANSBURG, N.J.&nbsp;—</strong>&nbsp;Keansburg Amusement Park will officially open for the season Palm Sunday weekend, April 8 and 9, the park has confirmed. The amusement park will be open all spring break at 12 noon through Monday, April 17 (weather permitting). And the mermaids will be back this summer: Beginning Monday, June 26th Runaway Rapids will have live Mermaids swimming with guests every Monday during the 2017 season.</p><p style=\"margin: 10px 0px 20px; font-size: 14px; line-height: 1.7; font-family: ProximaRegular, sans-serif; color: rgb(1, 1, 1);\">And as&nbsp;<a href=\"https://patch.com/new-jersey/middletown-nj/keansburg-amusement-park-s-easter-egg-hunt-will-be-april-9\" target=\"_blank\" style=\"outline: 0px; color: rgb(0, 207, 255); transition: all 0.3s ease 0s;\">we already told you</a>, Keansburg Amusement Park will also hold its annual Easter egg hunt on Sunday, April 9 this year, beginning at 1 p.m., rain or shine.</p>', 1, 'huyen'),
(5, 'blog-home', 'Mermaid Mondays', 'http://localhost:8000/upload/article/Mermaid-1.jpeg', '<h4 style=\"font-family: &quot;Leckerli One&quot;, cursive; line-height: 1.1; color: rgb(85, 47, 125); margin-top: 10px; margin-bottom: 10px; font-size: 32px;\"><p style=\"margin: 10px 0px 20px; font-size: 16px; line-height: 1.7; font-family: ProximaRegular, sans-serif; color: rgb(97, 49, 140);\"><strong style=\"font-weight: bold;\">Yes, mermaids do exist! This is your chance to swim with a live mermaid!</strong></p></h4><h4 style=\"font-family: &quot;Leckerli One&quot;, cursive; line-height: 1.1; color: rgb(85, 47, 125); margin-top: 10px; margin-bottom: 10px; font-size: 32px;\">Most Mondays&nbsp;</h4><h4 style=\"font-family: &quot;Leckerli One&quot;, cursive; line-height: 1.1; color: rgb(85, 47, 125); margin-top: 10px; margin-bottom: 10px; font-size: 32px;\"><p style=\"margin: 10px 0px 20px; font-size: 16px; line-height: 1.7; font-family: ProximaRegular, sans-serif; color: rgb(97, 49, 140);\">Call our ticket booth for more information 732-495-5241.</p></h4>', 1, 'huyen'),
(6, 'rules', 'SAFETY RULES', '', '<h2 style=\"outline: 0px; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border: 0px none; font-size: 36px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 20px; vertical-align: baseline; font-family: Georgia; line-height: 40px; letter-spacing: 3px; color: rgb(48, 113, 212); text-align: center; text-transform: uppercase;\">SAFETY</h2><p class=\"subheading\" style=\"outline: 0px; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border: 0px none; font-size: 1.2em; margin: -35px 0px 20px; padding: 15px 0px; vertical-align: baseline; text-align: center; line-height: 30px; letter-spacing: 0.025em; color: rgba(0, 0, 0, 0.5); font-family: &quot;Open Sans&quot;, sans-serif; font-weight: 600;\"><br></p><ul style=\"outline: 0px; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border: 0px none; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 30px; vertical-align: baseline; list-style-type: square; line-height: 1.5em; color: rgb(47, 49, 59); font-family: &quot;Open Sans&quot;, sans-serif; letter-spacing: 0.84px;\"><li style=\"outline: 0px; background: 0px 0px; border: 0px none; margin: 0px; padding: 0px 0px 0px 10px; vertical-align: baseline; position: relative;\">All waterslides and pools are monitored by perfectly trained members of our staff.</li><li style=\"outline: 0px; background: 0px 0px; border: 0px none; margin: 0px; padding: 0px 0px 0px 10px; vertical-align: baseline; position: relative;\">Lifeguards and medical staff are present at all times.</li><li style=\"outline: 0px; background: 0px 0px; border: 0px none; margin: 0px; padding: 0px 0px 0px 10px; vertical-align: baseline; position: relative;\">Whatever inflatable items brought in by client will, prior to any use on the Water Park premises, have to have previously been safety-cleared by our safety monitoring staff.</li><li style=\"outline: 0px; background: 0px 0px; border: 0px none; margin: 0px; padding: 0px 0px 0px 10px; vertical-align: baseline; position: relative;\">No glassware and alcoholic beverages are allowed on the premises of Water Park.</li><li style=\"outline: 0px; background: 0px 0px; border: 0px none; margin: 0px; padding: 0px 0px 0px 10px; vertical-align: baseline; position: relative;\">Children under 10 years old must be accompanied by an adult.</li><li style=\"outline: 0px; background: 0px 0px; border: 0px none; margin: 0px; padding: 0px 0px 0px 10px; vertical-align: baseline; position: relative;\">Be sure to wear appropriate swimwear (short pants or garments featuring metal buckles, rivets, zippers or rings are not allowed).</li><li style=\"outline: 0px; background: 0px 0px; border: 0px none; margin: 0px; padding: 0px 0px 0px 10px; vertical-align: baseline; position: relative;\">Children lifejackets are being provided at the “Guest Relations booth”.</li><li style=\"outline: 0px; background: 0px 0px; border: 0px none; margin: 0px; padding: 0px 0px 0px 10px; vertical-align: baseline; position: relative;\">No running on Water Park premises!</li><li style=\"outline: 0px; background: 0px 0px; border: 0px none; margin: 0px; padding: 0px 0px 0px 10px; vertical-align: baseline; position: relative;\">No diving allowed in any of Water Park pools!</li><li style=\"outline: 0px; background: 0px 0px; border: 0px none; margin: 0px; padding: 0px 0px 0px 10px; vertical-align: baseline; position: relative;\">There is a set of specific safety rules to be observed for every Water Park game or activity. Be sure to observe such rules at all times!</li><li style=\"outline: 0px; background: 0px 0px; border: 0px none; margin: 0px; padding: 0px 0px 0px 10px; vertical-align: baseline; position: relative;\">You have an obligation to comply with the instructions given by our safety staff members.</li><li style=\"outline: 0px; background: 0px 0px; border: 0px none; margin: 0px; padding: 0px 0px 0px 10px; vertical-align: baseline; position: relative;\">Participation in certain Water Park activities is conditional on a good physical condition as well as on specific age&nbsp;</li></ul><div class=\"plaisio\" style=\"outline: 0px; background: 0px 0px rgb(235, 243, 245); border: 0px none; font-size: 14px; margin: 0px; padding: 2em; vertical-align: baseline; box-shadow: rgba(0, 0, 0, 0.2) 0px 0px 5px; border-radius: 20px; color: rgb(47, 49, 59); font-family: &quot;Open Sans&quot;, sans-serif; letter-spacing: 0.84px;\"><p style=\"outline: 0px; background: 0px 0px; border: 0px none; font-size: 16px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 15px 0px; vertical-align: baseline; text-align: center; line-height: 30px; letter-spacing: 0.025em;\">JEWELERY, WATCHES, ZIPPER-EQUIPPED SWIMSUITS OR SHARP OBJECTS WHILST USING THE GAMES, ARE STRICTLY FORBIDDEN.<br style=\"outline: 0px;\">NO ACCESS TO “KAMIZAKE”, “FREE-FALL”, “TURBO”, “SPACE BOWL WATERSLIDE” AND “TWISTER SLIDES” ALLOWED TO CHILDREN UNDER 12.<br style=\"outline: 0px;\">CHILDREN UNDER 8 MAY USE THE “STINGRAY SLIDE” AND “HEAD FIRST MAR RACER SLIDE” IF SO CONSENTED BY THE ADULTS ACCOMPANYING THEM.</p></div>', 1, 'huyen'),
(10, 'cai gi', '123123', 'http://localhost:8000/upload/article/boat-hero.webp', '<p>123213</p>', 1, 'phong');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `name`, `photo`) VALUES
(3, 'welcome', 'http://localhost:8000/upload/Summer-Job.png'),
(4, 'welcombanner', 'http://localhost:8000/upload/no1_text.png'),
(6, 'food', 'http://localhost:8000/upload/Skillet-Rosemary-Dijon-Chicken-in-Creamy-Yoghurt-Sauce-Content-1320x300.jpeg'),
(8, 'Runaway Rapids', 'http://localhost:8000/upload/head-beach.jpeg'),
(9, 'Go Karts', 'http://localhost:8000/upload/Kartodrom.jpeg'),
(10, 'Keansburg Amusement Park', 'http://localhost:8000/upload/1 (2)_0.png'),
(11, 'ticket', 'http://localhost:8000/upload/ticket.png'),
(12, 'about us', 'http://localhost:8000/upload/aboutus.jpeg'),
(13, 'news', 'http://localhost:8000/upload/news.jpeg'),
(14, 'Safety Rules', 'http://localhost:8000/upload/safety.png'),
(15, 'login-register', 'http://localhost:8000/upload/boat-hero.webp');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `customer_id`, `product_id`, `quantity`, `price`) VALUES
(70, 66, 6, 1, 45),
(71, 66, 7, 1, 79),
(72, 67, 6, 3, 45),
(73, 67, 7, 1, 79),
(74, 68, 6, 1, 45),
(75, 68, 7, 1, 79),
(76, 69, 8, 1, 149),
(77, 70, 6, 1, 45),
(78, 70, 7, 1, 79),
(79, 71, 6, 1, 45),
(80, 71, 7, 1, 79),
(81, 72, 8, 1, 149),
(82, 73, 6, 1, 45),
(83, 73, 7, 1, 79);

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `company` varchar(255) DEFAULT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `payment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `phone`, `email`, `description`, `created_at`, `updated_at`, `payment`) VALUES
(66, '1234567891', 'Hieupham11tt11111@gmail.com', '123', '2023-03-05', '2023-03-05', '1'),
(67, '1234567891', 'adasd12eqwdwuduead@gmail.com', 'qưueuhqe', '2023-03-05', '2023-03-05', NULL),
(68, '1234567891', 'adasd12euduead@gmail.com', '123312', '2023-03-05', '2023-03-05', '1'),
(69, '1234567891', 'Hieupham11tt1111@gmail.com', '123123', '2023-03-05', '2023-03-05', NULL),
(70, '0908086863', 'nghiamc147@gmail.com', 'ádasdsd', '2023-03-06', '2023-03-06', NULL),
(71, '0908086863', 'nghiamc147@gmail.com', 'ádsad', '2023-03-06', '2023-03-06', NULL),
(72, '0908086863', 'nghiamc147@gmail.com', 'x', '2023-03-06', '2023-03-06', NULL),
(73, '0908086863', 'nguyentienphat050702@gmail.com', '1233', '2023-03-06', '2023-03-06', '1');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `failed_jobs`
--

INSERT INTO `failed_jobs` (`id`, `uuid`, `connection`, `queue`, `payload`, `exception`, `failed_at`) VALUES
(1, '4b8973e8-0be9-4a37-be50-a01235fdb357', 'database', 'default', '{\"uuid\":\"4b8973e8-0be9-4a37-be50-a01235fdb357\",\"displayName\":\"App\\\\Jobs\\\\SendMail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendMail\",\"command\":\"O:17:\\\"App\\\\Jobs\\\\SendMail\\\":2:{s:8:\\\"\\u0000*\\u0000email\\\";s:24:\\\"doquan23032003@gmail.com\\\";s:5:\\\"delay\\\";O:25:\\\"Illuminate\\\\Support\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2023-03-02 12:13:15.841286\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}}\"}}', 'ErrorException: Undefined variable $products in C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\storage\\framework\\views\\a915fe421ec786a33560a0c5412ef91ac373f4d6.php:86\nStack trace:\n#0 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Bootstrap\\HandleExceptions.php(266): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->handleError(2, \'Undefined varia...\', \'C:\\\\Users\\\\ADMIN\\\\...\', 86)\n#1 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\storage\\framework\\views\\a915fe421ec786a33560a0c5412ef91ac373f4d6.php(86): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->Illuminate\\Foundation\\Bootstrap\\{closure}(2, \'Undefined varia...\', \'C:\\\\Users\\\\ADMIN\\\\...\', 86)\n#2 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\Filesystem\\Filesystem.php(109): require(\'C:\\\\Users\\\\ADMIN\\\\...\')\n#3 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\Filesystem\\Filesystem.php(110): Illuminate\\Filesystem\\Filesystem::Illuminate\\Filesystem\\{closure}()\n#4 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Engines\\PhpEngine.php(58): Illuminate\\Filesystem\\Filesystem->getRequire(\'C:\\\\Users\\\\ADMIN\\\\...\', Array)\n#5 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Engines\\CompilerEngine.php(70): Illuminate\\View\\Engines\\PhpEngine->evaluatePath(\'C:\\\\Users\\\\ADMIN\\\\...\', Array)\n#6 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(195): Illuminate\\View\\Engines\\CompilerEngine->get(\'C:\\\\Users\\\\ADMIN\\\\...\', Array)\n#7 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(178): Illuminate\\View\\View->getContents()\n#8 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(147): Illuminate\\View\\View->renderContents()\n#9 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(381): Illuminate\\View\\View->render()\n#10 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(358): Illuminate\\Mail\\Mailer->renderView(\'mail.success\', Array)\n#11 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(270): Illuminate\\Mail\\Mailer->addContent(Object(Illuminate\\Mail\\Message), \'mail.success\', NULL, NULL, Array)\n#12 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailable.php(212): Illuminate\\Mail\\Mailer->send(\'mail.success\', Array, Object(Closure))\n#13 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\Support\\Traits\\Localizable.php(19): Illuminate\\Mail\\Mailable->Illuminate\\Mail\\{closure}()\n#14 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailable.php(213): Illuminate\\Mail\\Mailable->withLocale(NULL, Object(Closure))\n#15 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(307): Illuminate\\Mail\\Mailable->send(Object(Illuminate\\Mail\\Mailer))\n#16 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(253): Illuminate\\Mail\\Mailer->sendMailable(Object(App\\Mail\\OrderShipped))\n#17 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\PendingMail.php(124): Illuminate\\Mail\\Mailer->send(Object(App\\Mail\\OrderShipped))\n#18 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\app\\Jobs\\SendMail.php(41): Illuminate\\Mail\\PendingMail->send(Object(App\\Mail\\OrderShipped))\n#19 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): App\\Jobs\\SendMail->handle()\n#20 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#21 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#22 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(37): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#23 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(661): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#24 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(128): Illuminate\\Container\\Container->call(Array)\n#25 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(App\\Jobs\\SendMail))\n#26 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendMail))\n#27 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#28 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(124): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(App\\Jobs\\SendMail), false)\n#29 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(App\\Jobs\\SendMail))\n#30 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendMail))\n#31 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(126): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#32 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(70): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(App\\Jobs\\SendMail))\n#33 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(98): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#34 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(425): Illuminate\\Queue\\Jobs\\Job->fire()\n#35 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(375): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#36 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(173): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#37 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(147): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#38 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(130): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#39 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#40 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#41 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#42 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(37): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#43 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(661): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#44 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(183): Illuminate\\Container\\Container->call(Array)\n#45 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\symfony\\console\\Command\\Command.php(312): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#46 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(153): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#47 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\symfony\\console\\Application.php(1022): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#48 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\symfony\\console\\Application.php(314): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#49 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\symfony\\console\\Application.php(168): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#50 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php(102): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#51 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(155): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#52 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#53 {main}\n\nNext Illuminate\\View\\ViewException: Undefined variable $products (View: C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\resources\\views\\mail\\success.blade.php) in C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\storage\\framework\\views\\a915fe421ec786a33560a0c5412ef91ac373f4d6.php:86\nStack trace:\n#0 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Engines\\PhpEngine.php(60): Illuminate\\View\\Engines\\CompilerEngine->handleViewException(Object(ErrorException), 0)\n#1 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Engines\\CompilerEngine.php(70): Illuminate\\View\\Engines\\PhpEngine->evaluatePath(\'C:\\\\Users\\\\ADMIN\\\\...\', Array)\n#2 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(195): Illuminate\\View\\Engines\\CompilerEngine->get(\'C:\\\\Users\\\\ADMIN\\\\...\', Array)\n#3 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(178): Illuminate\\View\\View->getContents()\n#4 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(147): Illuminate\\View\\View->renderContents()\n#5 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(381): Illuminate\\View\\View->render()\n#6 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(358): Illuminate\\Mail\\Mailer->renderView(\'mail.success\', Array)\n#7 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(270): Illuminate\\Mail\\Mailer->addContent(Object(Illuminate\\Mail\\Message), \'mail.success\', NULL, NULL, Array)\n#8 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailable.php(212): Illuminate\\Mail\\Mailer->send(\'mail.success\', Array, Object(Closure))\n#9 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\Support\\Traits\\Localizable.php(19): Illuminate\\Mail\\Mailable->Illuminate\\Mail\\{closure}()\n#10 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailable.php(213): Illuminate\\Mail\\Mailable->withLocale(NULL, Object(Closure))\n#11 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(307): Illuminate\\Mail\\Mailable->send(Object(Illuminate\\Mail\\Mailer))\n#12 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(253): Illuminate\\Mail\\Mailer->sendMailable(Object(App\\Mail\\OrderShipped))\n#13 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\PendingMail.php(124): Illuminate\\Mail\\Mailer->send(Object(App\\Mail\\OrderShipped))\n#14 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\app\\Jobs\\SendMail.php(41): Illuminate\\Mail\\PendingMail->send(Object(App\\Mail\\OrderShipped))\n#15 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): App\\Jobs\\SendMail->handle()\n#16 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#17 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#18 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(37): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#19 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(661): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#20 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(128): Illuminate\\Container\\Container->call(Array)\n#21 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(App\\Jobs\\SendMail))\n#22 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendMail))\n#23 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#24 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(124): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(App\\Jobs\\SendMail), false)\n#25 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(App\\Jobs\\SendMail))\n#26 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendMail))\n#27 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(126): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#28 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(70): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(App\\Jobs\\SendMail))\n#29 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(98): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#30 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(425): Illuminate\\Queue\\Jobs\\Job->fire()\n#31 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(375): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#32 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(173): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#33 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(147): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#34 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(130): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#35 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#36 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#37 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#38 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(37): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#39 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(661): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#40 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(183): Illuminate\\Container\\Container->call(Array)\n#41 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\symfony\\console\\Command\\Command.php(312): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#42 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(153): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#43 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\symfony\\console\\Application.php(1022): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#44 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\symfony\\console\\Application.php(314): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#45 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\symfony\\console\\Application.php(168): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#46 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php(102): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#47 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(155): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#48 C:\\Users\\ADMIN\\OneDrive - Ho Chi Minh City University of Foreign Languages and Information Technology - HUFLIT\\Desktop\\New folder (4)\\banve_qp 2\\artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#49 {main}', '2023-03-02 05:13:15');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gallery_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `photo` varchar(250) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `menu_id` int(11) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gallery_id`, `name`, `photo`, `status`, `menu_id`, `description`) VALUES
(5, 'Pharaoh’s Fury', 'http://localhost:8000/upload/unspecified-3.jpeg', 1, 2, NULL),
(6, 'Moby Dick', 'http://localhost:8000/upload/mobydick-thrillrides.png', 1, 2, NULL),
(7, 'Motorcycles', 'http://localhost:8000/upload/Motorcycle.jpeg', 1, 2, NULL),
(8, 'Happy Swing', 'http://localhost:8000/upload/happy-swing-1.jpeg', 1, 2, NULL),
(9, 'Castaways Creek', 'http://localhost:8000/upload/castawaycreek-waterpark.png', 1, 2, NULL),
(10, 'Mountain Blast', 'http://localhost:8000/upload/mountainblast-waterpark.png', 1, 2, NULL),
(11, 'Side by Side Yellow Slides', 'http://localhost:8000/upload/yellowslides-waterpark.png', 1, 2, NULL),
(12, 'Go Karts', 'http://localhost:8000/upload/GoKarts1.jpeg', 1, 2, NULL),
(93, 'Pharaoh’s Fury', 'http://localhost:8000/upload/unspecified-3.jpeg', 1, 2, NULL),
(94, 'Moby Dick', 'http://localhost:8000/upload/mobydick-thrillrides.png', 1, 2, NULL),
(95, 'Motorcycles', 'http://localhost:8000/upload/Motorcycle.jpeg', 1, 2, NULL),
(96, 'Happy Swing', 'http://localhost:8000/upload/happy-swing-1.jpeg', 1, 2, NULL),
(97, 'Castaways Creek', 'http://localhost:8000/upload/castawaycreek-waterpark.png', 1, 2, NULL),
(98, 'Mountain Blast', 'http://localhost:8000/upload/mountainblast-waterpark.png', 1, 2, NULL),
(99, 'Side by Side Yellow Slides', 'http://localhost:8000/upload/yellowslides-waterpark.png', 1, 2, NULL),
(100, 'Go Karts', 'http://localhost:8000/upload/GoKarts1.jpeg', 1, 2, NULL),
(101, 'Assignment1_NguyenThaiQuocPhong_20DH112253 (1).docx', 'http://localhost:8000/upload/aboutus.jpeg', 1, 2, NULL),
(102, 'phong', 'http://localhost:8000/upload/aboutus.jpeg', 1, 2, NULL),
(103, 'Pharaoh’s Fury', 'http://localhost:8000/upload/unspecified-3.jpeg', 1, 2, NULL),
(104, 'Moby Dick', 'http://localhost:8000/upload/mobydick-thrillrides.png', 1, 2, NULL),
(105, 'Motorcycles', 'http://localhost:8000/upload/Motorcycle.jpeg', 1, 2, NULL),
(106, 'Happy Swing', 'http://localhost:8000/upload/happy-swing-1.jpeg', 1, 2, NULL),
(107, 'Castaways Creek', 'http://localhost:8000/upload/castawaycreek-waterpark.png', 1, 2, NULL),
(108, 'Mountain Blast', 'http://localhost:8000/upload/mountainblast-waterpark.png', 1, 2, NULL),
(109, 'Side by Side Yellow Slides', 'http://localhost:8000/upload/yellowslides-waterpark.png', 1, 2, NULL),
(110, 'Go Karts', 'http://localhost:8000/upload/GoKarts1.jpeg', 1, 2, NULL),
(111, 'Assignment1_NguyenThaiQuocPhong_20DH112253 (1).docx', 'http://localhost:8000/upload/aboutus.jpeg', 1, 2, NULL),
(112, 'phong', 'http://localhost:8000/upload/aboutus.jpeg', 1, 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `queue`, `payload`, `attempts`, `reserved_at`, `available_at`, `created_at`) VALUES
(5, 'default', '{\"uuid\":\"bc1b960b-4ce9-4bfd-b80f-cc7f3d552b72\",\"displayName\":\"App\\\\Jobs\\\\SendMail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendMail\",\"command\":\"O:17:\\\"App\\\\Jobs\\\\SendMail\\\":2:{s:8:\\\"\\u0000*\\u0000email\\\";s:24:\\\"adasd12euduead@gmail.com\\\";s:5:\\\"delay\\\";O:25:\\\"Illuminate\\\\Support\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2023-03-05 06:26:31.352650\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}}\"}}', 0, NULL, 1677997591, 1677997589),
(6, 'default', '{\"uuid\":\"7a92d6bb-0c84-46f5-8ec7-34aebf6e9c2e\",\"displayName\":\"App\\\\Jobs\\\\SendMail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendMail\",\"command\":\"O:17:\\\"App\\\\Jobs\\\\SendMail\\\":2:{s:8:\\\"\\u0000*\\u0000email\\\";s:26:\\\"adasd12euasdadduead@gmail.\\\";s:5:\\\"delay\\\";O:25:\\\"Illuminate\\\\Support\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2023-03-05 06:30:41.859137\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}}\"}}', 0, NULL, 1677997841, 1677997839),
(7, 'default', '{\"uuid\":\"619f7fa1-38c7-410f-bafd-a57eb568deca\",\"displayName\":\"App\\\\Jobs\\\\SendMail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendMail\",\"command\":\"O:17:\\\"App\\\\Jobs\\\\SendMail\\\":2:{s:8:\\\"\\u0000*\\u0000email\\\";s:30:\\\"adasd12e123213uduead@gmail.com\\\";s:5:\\\"delay\\\";O:25:\\\"Illuminate\\\\Support\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2023-03-05 06:33:42.093668\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}}\"}}', 0, NULL, 1677998022, 1677998020),
(8, 'default', '{\"uuid\":\"5fd1e15a-c020-492a-97f4-3beb9eb97a54\",\"displayName\":\"App\\\\Jobs\\\\SendMail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendMail\",\"command\":\"O:17:\\\"App\\\\Jobs\\\\SendMail\\\":2:{s:8:\\\"\\u0000*\\u0000email\\\";s:33:\\\"adasd12easd123213uduead@gmail.com\\\";s:5:\\\"delay\\\";O:25:\\\"Illuminate\\\\Support\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2023-03-05 06:34:20.262351\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}}\"}}', 0, NULL, 1677998060, 1677998058),
(9, 'default', '{\"uuid\":\"cfa59451-3c22-4e3d-8980-cfab1cae84ab\",\"displayName\":\"App\\\\Jobs\\\\SendMail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendMail\",\"command\":\"O:17:\\\"App\\\\Jobs\\\\SendMail\\\":2:{s:8:\\\"\\u0000*\\u0000email\\\";s:33:\\\"adasd12easd123213uduead@gmail.com\\\";s:5:\\\"delay\\\";O:25:\\\"Illuminate\\\\Support\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2023-03-05 06:41:40.898620\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}}\"}}', 0, NULL, 1677998500, 1677998498),
(10, 'default', '{\"uuid\":\"5754d536-8fdb-4a92-996f-dbd687b957f5\",\"displayName\":\"App\\\\Jobs\\\\SendMail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendMail\",\"command\":\"O:17:\\\"App\\\\Jobs\\\\SendMail\\\":2:{s:8:\\\"\\u0000*\\u0000email\\\";s:33:\\\"adasd12easd123213uduead@gmail.com\\\";s:5:\\\"delay\\\";O:25:\\\"Illuminate\\\\Support\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2023-03-05 06:42:12.759831\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}}\"}}', 0, NULL, 1677998532, 1677998530),
(11, 'default', '{\"uuid\":\"e86717db-4325-4be3-b55d-8193d5ab3da3\",\"displayName\":\"App\\\\Jobs\\\\SendMail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendMail\",\"command\":\"O:17:\\\"App\\\\Jobs\\\\SendMail\\\":2:{s:8:\\\"\\u0000*\\u0000email\\\";s:33:\\\"adasd12easd123213uduead@gmail.com\\\";s:5:\\\"delay\\\";O:25:\\\"Illuminate\\\\Support\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2023-03-05 06:42:20.945728\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}}\"}}', 0, NULL, 1677998540, 1677998538),
(12, 'default', '{\"uuid\":\"047c9ef6-e90f-4529-b007-1bd0007ad6c0\",\"displayName\":\"App\\\\Jobs\\\\SendMail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendMail\",\"command\":\"O:17:\\\"App\\\\Jobs\\\\SendMail\\\":2:{s:8:\\\"\\u0000*\\u0000email\\\";s:33:\\\"adasd12easd123213uduead@gmail.com\\\";s:5:\\\"delay\\\";O:25:\\\"Illuminate\\\\Support\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2023-03-05 06:42:46.298564\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}}\"}}', 0, NULL, 1677998566, 1677998564),
(13, 'default', '{\"uuid\":\"650fac81-3cef-4613-80da-f97ed1c03978\",\"displayName\":\"App\\\\Jobs\\\\SendMail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendMail\",\"command\":\"O:17:\\\"App\\\\Jobs\\\\SendMail\\\":2:{s:8:\\\"\\u0000*\\u0000email\\\";s:33:\\\"adasd12easd123213uduead@gmail.com\\\";s:5:\\\"delay\\\";O:25:\\\"Illuminate\\\\Support\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2023-03-05 06:44:15.464894\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}}\"}}', 0, NULL, 1677998655, 1677998653),
(14, 'default', '{\"uuid\":\"1b49d567-c411-4fcc-ad04-cd9c90ae3ab3\",\"displayName\":\"App\\\\Jobs\\\\SendMail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendMail\",\"command\":\"O:17:\\\"App\\\\Jobs\\\\SendMail\\\":2:{s:8:\\\"\\u0000*\\u0000email\\\";s:33:\\\"adasd12easd123213uduead@gmail.com\\\";s:5:\\\"delay\\\";O:25:\\\"Illuminate\\\\Support\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2023-03-05 06:51:03.355112\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}}\"}}', 0, NULL, 1677999063, 1677999061),
(15, 'default', '{\"uuid\":\"e6aa8b47-a647-4e77-a28e-15c9267753b9\",\"displayName\":\"App\\\\Jobs\\\\SendMail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendMail\",\"command\":\"O:17:\\\"App\\\\Jobs\\\\SendMail\\\":2:{s:8:\\\"\\u0000*\\u0000email\\\";s:33:\\\"adasd12easd123213uduead@gmail.com\\\";s:5:\\\"delay\\\";O:25:\\\"Illuminate\\\\Support\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2023-03-05 06:51:15.228581\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}}\"}}', 0, NULL, 1677999075, 1677999073),
(16, 'default', '{\"uuid\":\"0c32a0ac-6c68-49ae-9fcb-5d368a0e7ab1\",\"displayName\":\"App\\\\Jobs\\\\SendMail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendMail\",\"command\":\"O:17:\\\"App\\\\Jobs\\\\SendMail\\\":2:{s:8:\\\"\\u0000*\\u0000email\\\";s:33:\\\"adasd12easd123213uduead@gmail.com\\\";s:5:\\\"delay\\\";O:25:\\\"Illuminate\\\\Support\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2023-03-05 06:52:02.061758\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}}\"}}', 0, NULL, 1677999122, 1677999120),
(17, 'default', '{\"uuid\":\"9d5a3921-2a56-4840-80d8-90fd27b5cd10\",\"displayName\":\"App\\\\Jobs\\\\SendMail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendMail\",\"command\":\"O:17:\\\"App\\\\Jobs\\\\SendMail\\\":2:{s:8:\\\"\\u0000*\\u0000email\\\";s:23:\\\"qqphong20011@gmail.com1\\\";s:5:\\\"delay\\\";O:25:\\\"Illuminate\\\\Support\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2023-03-05 07:07:01.732101\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}}\"}}', 0, NULL, 1678000021, 1678000019),
(18, 'default', '{\"uuid\":\"92526855-00f8-462e-a8e9-13bb80659cf1\",\"displayName\":\"App\\\\Jobs\\\\SendMail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendMail\",\"command\":\"O:17:\\\"App\\\\Jobs\\\\SendMail\\\":2:{s:8:\\\"\\u0000*\\u0000email\\\";s:33:\\\"adasd12easd123213uduead@gmail.com\\\";s:5:\\\"delay\\\";O:25:\\\"Illuminate\\\\Support\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2023-03-05 07:08:42.859988\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}}\"}}', 0, NULL, 1678000122, 1678000120),
(19, 'default', '{\"uuid\":\"7192330a-9ddb-4190-a7ff-71cef6187b85\",\"displayName\":\"App\\\\Jobs\\\\SendMail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendMail\",\"command\":\"O:17:\\\"App\\\\Jobs\\\\SendMail\\\":2:{s:8:\\\"\\u0000*\\u0000email\\\";s:30:\\\"adasd12e123213uduead@gmail.com\\\";s:5:\\\"delay\\\";O:25:\\\"Illuminate\\\\Support\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2023-03-05 07:12:51.925264\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}}\"}}', 0, NULL, 1678000371, 1678000370),
(20, 'default', '{\"uuid\":\"231c2f30-c1b1-4a03-90c7-c6a12f646609\",\"displayName\":\"App\\\\Jobs\\\\SendMail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendMail\",\"command\":\"O:17:\\\"App\\\\Jobs\\\\SendMail\\\":2:{s:8:\\\"\\u0000*\\u0000email\\\";s:33:\\\"adasd12easd123213uduead@gmail.com\\\";s:5:\\\"delay\\\";O:25:\\\"Illuminate\\\\Support\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2023-03-05 07:16:58.658452\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}}\"}}', 0, NULL, 1678000618, 1678000616),
(21, 'default', '{\"uuid\":\"963b4ff3-2c51-4edb-8197-511f5aba1beb\",\"displayName\":\"App\\\\Jobs\\\\SendMail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendMail\",\"command\":\"O:17:\\\"App\\\\Jobs\\\\SendMail\\\":2:{s:8:\\\"\\u0000*\\u0000email\\\";s:25:\\\"Hieuphamtt22221@gmail.com\\\";s:5:\\\"delay\\\";O:25:\\\"Illuminate\\\\Support\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2023-03-05 07:21:24.267745\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}}\"}}', 0, NULL, 1678000884, 1678000882),
(22, 'default', '{\"uuid\":\"db83a14f-b7f8-44be-abc1-2d42c73c6ec4\",\"displayName\":\"App\\\\Jobs\\\\SendMail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendMail\",\"command\":\"O:17:\\\"App\\\\Jobs\\\\SendMail\\\":2:{s:8:\\\"\\u0000*\\u0000email\\\";s:23:\\\"Hieupham11tt1@gmail.com\\\";s:5:\\\"delay\\\";O:25:\\\"Illuminate\\\\Support\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2023-03-05 07:23:30.926577\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}}\"}}', 0, NULL, 1678001010, 1678001008),
(23, 'default', '{\"uuid\":\"2941c55f-fefe-4dd4-b7aa-1aef981c60fa\",\"displayName\":\"App\\\\Jobs\\\\SendMail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendMail\",\"command\":\"O:17:\\\"App\\\\Jobs\\\\SendMail\\\":2:{s:8:\\\"\\u0000*\\u0000email\\\";s:26:\\\"Hieupham11t111t1@gmail.com\\\";s:5:\\\"delay\\\";O:25:\\\"Illuminate\\\\Support\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2023-03-05 07:24:17.974887\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}}\"}}', 0, NULL, 1678001057, 1678001055),
(24, 'default', '{\"uuid\":\"35db1b64-0536-4bc0-8014-e1011a0b2e93\",\"displayName\":\"App\\\\Jobs\\\\SendMail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendMail\",\"command\":\"O:17:\\\"App\\\\Jobs\\\\SendMail\\\":2:{s:8:\\\"\\u0000*\\u0000email\\\";s:26:\\\"Hieupham11tt1111@gmail.com\\\";s:5:\\\"delay\\\";O:25:\\\"Illuminate\\\\Support\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2023-03-05 07:25:15.128303\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}}\"}}', 0, NULL, 1678001115, 1678001113),
(25, 'default', '{\"uuid\":\"cfe508b9-566f-42c8-ba34-bba2b337456f\",\"displayName\":\"App\\\\Jobs\\\\SendMail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendMail\",\"command\":\"O:17:\\\"App\\\\Jobs\\\\SendMail\\\":2:{s:8:\\\"\\u0000*\\u0000email\\\";s:26:\\\"Hieupham11tt1111@gmail.com\\\";s:5:\\\"delay\\\";O:25:\\\"Illuminate\\\\Support\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2023-03-05 07:26:01.785042\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}}\"}}', 0, NULL, 1678001161, 1678001159),
(26, 'default', '{\"uuid\":\"3f16a04b-f361-441c-acdc-10eb25a3bd0f\",\"displayName\":\"App\\\\Jobs\\\\SendMail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendMail\",\"command\":\"O:17:\\\"App\\\\Jobs\\\\SendMail\\\":2:{s:8:\\\"\\u0000*\\u0000email\\\";s:26:\\\"Hieupham11tt1111@gmail.com\\\";s:5:\\\"delay\\\";O:25:\\\"Illuminate\\\\Support\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2023-03-05 07:29:13.427123\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}}\"}}', 0, NULL, 1678001353, 1678001351),
(27, 'default', '{\"uuid\":\"0ada5ae7-924d-4e40-930e-f973b408a71b\",\"displayName\":\"App\\\\Jobs\\\\SendMail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendMail\",\"command\":\"O:17:\\\"App\\\\Jobs\\\\SendMail\\\":2:{s:8:\\\"\\u0000*\\u0000email\\\";s:27:\\\"Hieupham11tt11111@gmail.com\\\";s:5:\\\"delay\\\";O:25:\\\"Illuminate\\\\Support\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2023-03-05 07:30:48.375366\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}}\"}}', 0, NULL, 1678001448, 1678001446),
(28, 'default', '{\"uuid\":\"4304240e-2db3-4740-bfa0-f5f57ba62d3c\",\"displayName\":\"App\\\\Jobs\\\\SendMail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendMail\",\"command\":\"O:17:\\\"App\\\\Jobs\\\\SendMail\\\":2:{s:8:\\\"\\u0000*\\u0000email\\\";s:27:\\\"Hieupham11tt11111@gmail.com\\\";s:5:\\\"delay\\\";O:25:\\\"Illuminate\\\\Support\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2023-03-05 07:31:44.164902\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}}\"}}', 0, NULL, 1678001504, 1678001502),
(29, 'default', '{\"uuid\":\"8d43e38b-9bf6-4ab9-a109-35cb5b577aba\",\"displayName\":\"App\\\\Jobs\\\\SendMail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendMail\",\"command\":\"O:17:\\\"App\\\\Jobs\\\\SendMail\\\":2:{s:8:\\\"\\u0000*\\u0000email\\\";s:26:\\\"Hieupham11t111t1@gmail.com\\\";s:5:\\\"delay\\\";O:25:\\\"Illuminate\\\\Support\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2023-03-05 07:34:01.572973\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}}\"}}', 0, NULL, 1678001641, 1678001639),
(30, 'default', '{\"uuid\":\"5ac725dc-e67c-494f-8ec1-acfe826cc967\",\"displayName\":\"App\\\\Jobs\\\\SendMail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendMail\",\"command\":\"O:17:\\\"App\\\\Jobs\\\\SendMail\\\":2:{s:8:\\\"\\u0000*\\u0000email\\\";s:27:\\\"Hieupham11tt11111@gmail.com\\\";s:5:\\\"delay\\\";O:25:\\\"Illuminate\\\\Support\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2023-03-05 07:38:40.748088\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}}\"}}', 0, NULL, 1678001920, 1678001918),
(31, 'default', '{\"uuid\":\"38460c74-9546-4a15-bfe5-10a830321aae\",\"displayName\":\"App\\\\Jobs\\\\SendMail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendMail\",\"command\":\"O:17:\\\"App\\\\Jobs\\\\SendMail\\\":2:{s:8:\\\"\\u0000*\\u0000email\\\";s:26:\\\"Hieupham11t111t1@gmail.com\\\";s:5:\\\"delay\\\";O:25:\\\"Illuminate\\\\Support\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2023-03-05 07:55:19.163895\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}}\"}}', 0, NULL, 1678002919, 1678002917),
(32, 'default', '{\"uuid\":\"d304fcec-1c8e-41f4-885b-bad2a6f5ded9\",\"displayName\":\"App\\\\Jobs\\\\SendMail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendMail\",\"command\":\"O:17:\\\"App\\\\Jobs\\\\SendMail\\\":2:{s:8:\\\"\\u0000*\\u0000email\\\";s:24:\\\"adasd12euduead@gmail.com\\\";s:5:\\\"delay\\\";O:25:\\\"Illuminate\\\\Support\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2023-03-05 08:01:47.815902\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}}\"}}', 0, NULL, 1678003307, 1678003305),
(33, 'default', '{\"uuid\":\"b496d47b-2ca1-4876-ae97-4cc889285413\",\"displayName\":\"App\\\\Jobs\\\\SendMail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendMail\",\"command\":\"O:17:\\\"App\\\\Jobs\\\\SendMail\\\":2:{s:8:\\\"\\u0000*\\u0000email\\\";s:24:\\\"adasd12euduead@gmail.com\\\";s:5:\\\"delay\\\";O:25:\\\"Illuminate\\\\Support\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2023-03-05 08:02:28.043226\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}}\"}}', 0, NULL, 1678003348, 1678003346),
(34, 'default', '{\"uuid\":\"9bd4a3d2-b301-460d-bf49-b1141ffc2592\",\"displayName\":\"App\\\\Jobs\\\\SendMail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendMail\",\"command\":\"O:17:\\\"App\\\\Jobs\\\\SendMail\\\":2:{s:8:\\\"\\u0000*\\u0000email\\\";s:24:\\\"adasd12euduead@gmail.com\\\";s:5:\\\"delay\\\";O:25:\\\"Illuminate\\\\Support\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2023-03-05 08:06:56.793913\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}}\"}}', 0, NULL, 1678003616, 1678003614),
(35, 'default', '{\"uuid\":\"68bd90f2-d318-44ac-9092-d48eb3f022bf\",\"displayName\":\"App\\\\Jobs\\\\SendMail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendMail\",\"command\":\"O:17:\\\"App\\\\Jobs\\\\SendMail\\\":2:{s:8:\\\"\\u0000*\\u0000email\\\";s:27:\\\"Hieupham11tt11111@gmail.com\\\";s:5:\\\"delay\\\";O:25:\\\"Illuminate\\\\Support\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2023-03-05 08:22:56.270498\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}}\"}}', 0, NULL, 1678004576, 1678004574),
(36, 'default', '{\"uuid\":\"4ead8120-22f7-4d8c-8143-7fb716091bd4\",\"displayName\":\"App\\\\Jobs\\\\SendMail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendMail\",\"command\":\"O:17:\\\"App\\\\Jobs\\\\SendMail\\\":2:{s:8:\\\"\\u0000*\\u0000email\\\";s:26:\\\"Hieupham11tt1111@gmail.com\\\";s:5:\\\"delay\\\";O:25:\\\"Illuminate\\\\Support\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2023-03-05 08:25:33.466913\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}}\"}}', 0, NULL, 1678004733, 1678004731),
(37, 'default', '{\"uuid\":\"f30254a6-aaa3-4063-a466-0e7465289233\",\"displayName\":\"App\\\\Jobs\\\\SendMail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendMail\",\"command\":\"O:17:\\\"App\\\\Jobs\\\\SendMail\\\":2:{s:8:\\\"\\u0000*\\u0000email\\\";s:27:\\\"Hieupham11tt11111@gmail.com\\\";s:5:\\\"delay\\\";O:25:\\\"Illuminate\\\\Support\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2023-03-05 08:30:00.124667\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}}\"}}', 0, NULL, 1678005000, 1678004998),
(38, 'default', '{\"uuid\":\"1df5fa09-49b8-4db3-ad51-7f0d99a8e615\",\"displayName\":\"App\\\\Jobs\\\\SendMail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendMail\",\"command\":\"O:17:\\\"App\\\\Jobs\\\\SendMail\\\":2:{s:8:\\\"\\u0000*\\u0000email\\\";s:27:\\\"Hieupham11tt11111@gmail.com\\\";s:5:\\\"delay\\\";O:25:\\\"Illuminate\\\\Support\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2023-03-05 08:39:32.719062\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}}\"}}', 0, NULL, 1678005572, 1678005570),
(39, 'default', '{\"uuid\":\"d1d220b7-2e3a-49eb-bf7a-5a7aa70343c8\",\"displayName\":\"App\\\\Jobs\\\\SendMail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendMail\",\"command\":\"O:17:\\\"App\\\\Jobs\\\\SendMail\\\":2:{s:8:\\\"\\u0000*\\u0000email\\\";s:26:\\\"Hieupham11tt1111@gmail.com\\\";s:5:\\\"delay\\\";O:25:\\\"Illuminate\\\\Support\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2023-03-05 08:42:01.295351\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}}\"}}', 0, NULL, 1678005721, 1678005719),
(40, 'default', '{\"uuid\":\"147c5396-8aae-4677-94f7-9b2580249e17\",\"displayName\":\"App\\\\Jobs\\\\SendMail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendMail\",\"command\":\"O:17:\\\"App\\\\Jobs\\\\SendMail\\\":2:{s:8:\\\"\\u0000*\\u0000email\\\";s:27:\\\"Hieupham11tt11111@gmail.com\\\";s:5:\\\"delay\\\";O:25:\\\"Illuminate\\\\Support\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2023-03-05 08:43:04.121753\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}}\"}}', 0, NULL, 1678005784, 1678005782),
(41, 'default', '{\"uuid\":\"e6193299-59f1-48de-b2af-37c56326995e\",\"displayName\":\"App\\\\Jobs\\\\SendMail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendMail\",\"command\":\"O:17:\\\"App\\\\Jobs\\\\SendMail\\\":2:{s:8:\\\"\\u0000*\\u0000email\\\";s:27:\\\"Hieupham11tt11111@gmail.com\\\";s:5:\\\"delay\\\";O:25:\\\"Illuminate\\\\Support\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2023-03-05 08:45:16.306930\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}}\"}}', 0, NULL, 1678005916, 1678005914),
(42, 'default', '{\"uuid\":\"03e094c8-01ba-4f9c-82e0-c01dd923bbfb\",\"displayName\":\"App\\\\Jobs\\\\SendMail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendMail\",\"command\":\"O:17:\\\"App\\\\Jobs\\\\SendMail\\\":2:{s:8:\\\"\\u0000*\\u0000email\\\";s:27:\\\"Hieupham11tt11111@gmail.com\\\";s:5:\\\"delay\\\";O:25:\\\"Illuminate\\\\Support\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2023-03-05 08:52:18.896099\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}}\"}}', 0, NULL, 1678006338, 1678006336),
(43, 'default', '{\"uuid\":\"d150e457-ad71-453f-a2d8-7dfb166da9cb\",\"displayName\":\"App\\\\Jobs\\\\SendMail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendMail\",\"command\":\"O:17:\\\"App\\\\Jobs\\\\SendMail\\\":2:{s:8:\\\"\\u0000*\\u0000email\\\";s:28:\\\"adasd12eqwdwuduead@gmail.com\\\";s:5:\\\"delay\\\";O:25:\\\"Illuminate\\\\Support\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2023-03-05 12:14:40.544658\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}}\"}}', 0, NULL, 1678018480, 1678018479),
(44, 'default', '{\"uuid\":\"46090eed-ebaa-436a-a80b-bb5af45d1881\",\"displayName\":\"App\\\\Jobs\\\\SendMail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendMail\",\"command\":\"O:17:\\\"App\\\\Jobs\\\\SendMail\\\":2:{s:8:\\\"\\u0000*\\u0000email\\\";s:24:\\\"adasd12euduead@gmail.com\\\";s:5:\\\"delay\\\";O:25:\\\"Illuminate\\\\Support\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2023-03-05 12:15:42.751535\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}}\"}}', 0, NULL, 1678018542, 1678018540),
(45, 'default', '{\"uuid\":\"7f54fb5e-34f6-4187-93a6-2ee537047695\",\"displayName\":\"App\\\\Jobs\\\\SendMail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendMail\",\"command\":\"O:17:\\\"App\\\\Jobs\\\\SendMail\\\":2:{s:8:\\\"\\u0000*\\u0000email\\\";s:26:\\\"Hieupham11tt1111@gmail.com\\\";s:5:\\\"delay\\\";O:25:\\\"Illuminate\\\\Support\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2023-03-05 12:39:22.571774\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}}\"}}', 0, NULL, 1678019962, 1678019960),
(46, 'default', '{\"uuid\":\"3f81635c-9667-4902-8376-8159cc8821fa\",\"displayName\":\"App\\\\Jobs\\\\SendMail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendMail\",\"command\":\"O:17:\\\"App\\\\Jobs\\\\SendMail\\\":2:{s:8:\\\"\\u0000*\\u0000email\\\";s:20:\\\"nghiamc147@gmail.com\\\";s:5:\\\"delay\\\";O:25:\\\"Illuminate\\\\Support\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2023-03-06 15:43:45.277366\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}}\"}}', 0, NULL, 1678117425, 1678117423),
(47, 'default', '{\"uuid\":\"4f265308-8491-44fc-93fb-30ddb9ffe665\",\"displayName\":\"App\\\\Jobs\\\\SendMail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendMail\",\"command\":\"O:17:\\\"App\\\\Jobs\\\\SendMail\\\":2:{s:8:\\\"\\u0000*\\u0000email\\\";s:20:\\\"nghiamc147@gmail.com\\\";s:5:\\\"delay\\\";O:25:\\\"Illuminate\\\\Support\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2023-03-06 15:47:05.879404\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}}\"}}', 0, NULL, 1678117625, 1678117623),
(48, 'default', '{\"uuid\":\"c50ca0a5-ed4f-499a-a781-b46df29be3b9\",\"displayName\":\"App\\\\Jobs\\\\SendMail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendMail\",\"command\":\"O:17:\\\"App\\\\Jobs\\\\SendMail\\\":2:{s:8:\\\"\\u0000*\\u0000email\\\";s:20:\\\"nghiamc147@gmail.com\\\";s:5:\\\"delay\\\";O:25:\\\"Illuminate\\\\Support\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2023-03-06 15:48:24.407960\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}}\"}}', 0, NULL, 1678117704, 1678117702),
(49, 'default', '{\"uuid\":\"9a74f0a0-dd7c-41bf-9b1d-e87d3f6f37b4\",\"displayName\":\"App\\\\Jobs\\\\SendMail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendMail\",\"command\":\"O:17:\\\"App\\\\Jobs\\\\SendMail\\\":2:{s:8:\\\"\\u0000*\\u0000email\\\";s:30:\\\"nguyentienphat050702@gmail.com\\\";s:5:\\\"delay\\\";O:25:\\\"Illuminate\\\\Support\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2023-03-06 15:52:38.524211\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}}\"}}', 0, NULL, 1678117958, 1678117956);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `url` varchar(255) NOT NULL,
  `promotions_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `photo`, `url`, `promotions_id`) VALUES
(1, 'Food', 'http://localhost:8000/upload/100ticketbook.png', 'food/index', NULL),
(2, 'zones', '', 'zones/index', NULL),
(3, 'tickets', '', 'tickets/index', NULL),
(10, 'Contact/About us', NULL, 'contact', NULL),
(17, 'Safety Rules', NULL, 'safety-rules', NULL),
(19, 'Home', NULL, 'index', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `description` text DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `photo` varchar(250) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `menu` int(11) NOT NULL,
  `detail` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `name`, `description`, `price`, `photo`, `quantity`, `status`, `menu`, `detail`) VALUES
(6, 'Keansburg Amusement Park 50 Ticket Sheet', NULL, 45, 'http://localhost:8000/upload/50ticket1 (1).png', 100, 1, 3, NULL),
(7, 'Keansburg Amusement Park 100 Ticket Book', '*Price includes NJ Sales Tax. $6.95 shipping & handling. Allow 10 days for delivery.', 79, 'http://localhost:8000/upload/100ticketbook.png', 100, 1, 3, ''),
(8, 'Keansburg Amusement Park 200 Ticket Book', '*Price includes NJ Sales Tax. $6.95 shipping & handling. Allow 10 days for delivery.', 149, 'http://localhost:8000/upload/200ticketbook.png', 100, 1, 3, ''),
(9, 'Runaway Rapids – 3 Hour Admission', '$6.95 shipping & handling. Allow 10 days for delivery.  B.O.G.O SALE VALID UNTIL MIDNIGHT DECEMBER 15TH. TICKETS WILL BE DOUBLED AFTER YOUR ORDER IS PLACED. FOR EXAMPLE IF YOU WANT TWO TICKETS PURCHASE ONE, IF YOU WANT FOUR TICKETS, PURCHASE TWO, AND SO ON. THANK YOU.', 37, 'http://localhost:8000/upload/runaway.png', 100, 1, 3, ''),
(10, 'Nickerson’s Ice Cream', 'Nickerson’s Ice cream has been serving freshly made hard ice cream since 1946 . Choose a cone, sundae,milkshake, or our crowd favorite; a famous waffle and ice cream sandwich! The combinations are endless with toppings like hot fudge, caramel, sprinkles, and more!', 23, 'http://localhost:8000/upload/icecreamwafflecone.jpg', NULL, 1, 1, ''),
(11, 'Cheesy’s Pizza', 'Craving some traditional boardwalk pizza? Cheesy’s is the place for you! Toppings include pepperoni, sausage, peppers, onions, and more! Traditional, Sicilian, or garlic knots! Yum!', 32, 'http://localhost:8000/upload/IMG_1661-2048x1536.jpeg', NULL, 1, 1, NULL),
(19, 'Entry ticket - From Monday to Friday', NULL, 80, 'http://localhost:8000/upload/ticket.jpeg', 100, 1, 3, 'Entry ticket'),
(20, 'Boardwalk Grill', '\r\nNew venue, Boardwalk Grill at the Pavilion Bar, will serve up delicious gyros and more!', 40, 'http://localhost:8000/upload/fried-chicken-chicken-fried-crunchy-60616.jpeg', NULL, 1, 1, 'Boardwalk Grill at the Pavilion Bar'),
(21, 'Pharaoh’s Fury', '<p style=\"margin: 10px 0px 20px; line-height: 1.7; font-family: ProximaRegular, sans-serif; color: rgb(97, 49, 140);\"><br class=\"Apple-interchange-newline\">The swinging Egyptian-themed boat with the head of a pharaoh, moves back and forth in a 180 degree arc to thrill riders of all ages. </p><p style=\"margin: 10px 0px 20px; line-height: 1.7; font-family: ProximaRegular, sans-serif; color: rgb(97, 49, 140);\">CAUTION: This is an extremely active ride, not for all 42″ to 48″ riders!</p><p style=\"margin: 10px 0px 20px; line-height: 1.7; font-family: ProximaRegular, sans-serif; color: rgb(97, 49, 140);\"><span class=\"small\" style=\"font-size: 12px; color: rgb(145, 145, 145);\">5 TICKETS:<br>HEIGHT REQUIREMENT: 48\" to ride alone 42\"-48\" w/ adult</span></p>', 80, 'http://localhost:8000/upload/unspecified-3.jpeg', NULL, 1, 2, 'Keansburg Amusement Park'),
(22, 'Moby Dick', '<p style=\"margin: 10px 0px 20px; line-height: 1.7; font-family: ProximaRegular, sans-serif; color: rgb(97, 49, 140);\">The Moby Dick lifts 24 riders on an undersea adventure spinning in a clockwise and counter clockwise motion that will thrill parents and kids alike. Be prepared to reboard after the action is over because this is one of the park’s favorite attractions.</p><p style=\"margin: 10px 0px 20px; line-height: 1.7; font-family: ProximaRegular, sans-serif; color: rgb(97, 49, 140);\"><span class=\"small\" style=\"font-size: 12px; color: rgb(145, 145, 145);\">5 TICKETS:<br>HEIGHT REQUIREMENT: 48\" to ride alone 42\"-48\" w/ adult</span></p>', 80, 'http://localhost:8000/upload/mobydick-thrillrides.png', NULL, 1, 2, 'Keansburg Amusement Park'),
(23, 'Motorcycles', '<p style=\"margin: 10px 0px 20px; line-height: 1.7; font-family: ProximaRegular, sans-serif; color: rgb(97, 49, 140);\">Girls and boys choose to ride any of the brightly colored bikes with lights and horns for a real motorcycle riding experience.</p><p style=\"margin: 10px 0px 20px; line-height: 1.7; font-family: ProximaRegular, sans-serif; color: rgb(97, 49, 140);\"><span class=\"small\" style=\"font-size: 12px; color: rgb(145, 145, 145);\">2 TICKETS: $1.30 – $2.00*<br>HEIGHT REQUIREMENT: 30\" (50\" max. height)</span></p>', 4, 'http://localhost:8000/upload/Motorcycle.jpeg', NULL, 1, 2, 'Keansburg Amusement Park'),
(24, 'Happy Swing', '<p style=\"margin: 10px 0px 20px; line-height: 1.7; font-family: ProximaRegular, sans-serif; color: rgb(97, 49, 140);\">The park’s newest addition, the Happy Swing can accommodate parents and children alike on a “swinging” adventure like no other!</p><p style=\"margin: 10px 0px 20px; line-height: 1.7; font-family: ProximaRegular, sans-serif; color: rgb(97, 49, 140);\"><span class=\"small\" style=\"font-size: 12px; color: rgb(145, 145, 145);\">2 TICKETS<br>HEIGHT REQUIREMENT: 36\"</span></p>', 6, 'http://localhost:8000/upload/happy-swing-1.jpeg', NULL, 1, 2, 'Keansburg Amusement Park'),
(25, 'Castaways Creek', '<p style=\"margin: 10px 0px 20px; line-height: 1.7; font-family: ProximaRegular, sans-serif; color: rgb(97, 49, 140);\">Continuous fun awaits as you enter the crazy/lazy river. You can gently lull downstream the river in a tube or choose to play with all the interactive activities along the way. The rivers is 4ft deep at maximum height. Interaction is part of the fun on the river. Water detonators along the outside of the river release air bubbles to surprise tubers or cause a water explosion. There are&nbsp;also swinging fish to grab and waterfalls to go under!</p><p style=\"margin: 10px 0px 20px; line-height: 1.7; font-family: ProximaRegular, sans-serif; color: rgb(97, 49, 140);\"><span class=\"small\" style=\"font-size: 12px; color: rgb(145, 145, 145);\">Children under 42″ must wear a life jacket and be accompanied by a responsible adult.<br>Riders must use single or double inflatable tube.<br>Entry and exit on designated staired areas only.</span></p>', 10, 'http://localhost:8000/upload/castawaycreek-waterpark.png', NULL, 1, 2, 'Runaway Rapids'),
(26, 'Mountain Blast', '<p style=\"margin: 10px 0px 20px; line-height: 1.7; font-family: ProximaRegular, sans-serif; color: rgb(97, 49, 140);\"><br class=\"Apple-interchange-newline\">Double your fun on this double tube and double wide slide. You can ride alone or with a partner but you will find it hard to control the spinning of the tube as you plunge down this rolling slide.</p><p style=\"margin: 10px 0px 20px; line-height: 1.7; font-family: ProximaRegular, sans-serif; color: rgb(97, 49, 140);\"><span class=\"small\" style=\"font-size: 12px; color: rgb(145, 145, 145);\">Under 48″ and non swimmers must wear a life jacket. Must be 42″ or more to ride. Maximum combined weight of 400 lbs.</span></p>', 10, 'http://localhost:8000/upload/mountainblast-waterpark.png', NULL, 1, 2, 'Runaway Rapids'),
(27, 'Side by Side Yellow Slides', '<p><br class=\"Apple-interchange-newline\"><span style=\"color: rgb(97, 49, 140); font-family: ProximaRegular, sans-serif;\">Splash pool from 0″ to 12″ of water with all interactive water play. Short slides that sit next to each. Half the fun is climbing and playing your way to the top before sliding down.</span><br></p>', 10, 'http://localhost:8000/upload/yellowslides-waterpark.png', NULL, 1, 2, 'Runaway Rapids'),
(28, 'Go Karts', '<div class=\"wpb_text_column wpb_content_element wpb_animate_when_almost_visible wpb_top-to-bottom top-to-bottom orange_header wpb_start_animation animated\" style=\"animation: 1s cubic-bezier(0.175, 0.885, 0.32, 1.275) 0s 1 normal both running wpb_ttb; opacity: 1; text-align: center; margin-bottom: 35px; color: rgb(1, 1, 1); font-family: ProximaRegular, sans-serif; font-size: 14px;\"><div class=\"wpb_wrapper\" style=\"margin-bottom: 0px;\"><span style=\"color: rgb(145, 145, 145); font-size: 11.25px; font-family: Muli, Arial, Helvetica, sans-serif; text-align: left;\">Go Kart tickets must be purchased separately at the Go Kart Ticket Booth. Go Karts are not included in any wristband special. &nbsp;Closed toe shoes must be worn when operating a go kart.</span><br></div></div><div class=\"wpb_text_column wpb_content_element wpb_animate_when_almost_visible wpb_top-to-bottom top-to-bottom wpb_start_animation animated\" style=\"animation: 1s cubic-bezier(0.175, 0.885, 0.32, 1.275) 0s 1 normal both running wpb_ttb; opacity: 1; margin-bottom: 35px; color: rgb(1, 1, 1); font-family: ProximaRegular, sans-serif; font-size: 14px;\"><div class=\"wpb_wrapper\" style=\"margin-bottom: 0px;\"><p style=\"margin: 10px 0px 0px; font-size: 15px; line-height: 1.7; font-family: Muli, Arial, Helvetica, sans-serif; text-align: center;\"><span class=\"small text-blue\" style=\"font-size: 11.25px; color: rgb(145, 145, 145); margin-bottom: 0px;\">*Closing time varies for Runaway Rapids water park and is dependent upon park occupancy and/or buy-out events. Please call 732-495-5240 for details on Runaway Rapids closing times from Memorial Day to Labor Day. Otherwise call 732-495-1400 for additional information.</span></p></div></div>', 20, 'http://localhost:8000/upload/GoKarts1.jpeg', NULL, 1, 2, 'Go Karts'),
(29, 'Girardi’s Kabobs', '<div style=\"color: rgb(1, 1, 1); font-family: ProximaRegular, sans-serif; font-size: 14px;\">Our original Fresh Grilled 1/4lb. Pork &amp; Chicken Kabobs were established here in the park in 1997.</div><div style=\"color: rgb(1, 1, 1); font-family: ProximaRegular, sans-serif; font-size: 14px;\">Also serving traditional Sabrett Hotdogs and other boardwalk favorites.</div>', 10, 'http://localhost:8000/upload/pexels-photo-604660.jpeg', NULL, 1, 1, 'Girardi’s Kabobs'),
(30, 'Assignment1_NguyenThaiQuocPhong_20DH112253 (1).docx', '<p>adsa</p>', 1, 'http://localhost:8000/upload/aboutus.jpeg', 123, 1, 2, 'ỊIAD'),
(31, 'phong', '<p>qưe</p>', 50, 'http://localhost:8000/upload/aboutus.jpeg', 12, 1, 2, 'ỊIAD'),
(32, 'phong', '<p>123</p>', 123, 'http://localhost:8000/upload/aboutus.jpeg', 123, 1, 2, 'ưef');

-- --------------------------------------------------------

--
-- Table structure for table `promotions`
--

CREATE TABLE `promotions` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `sale_off` int(11) NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `description` varchar(250) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `menu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `promotions`
--

INSERT INTO `promotions` (`id`, `name`, `start_date`, `end_date`, `sale_off`, `created_by`, `status`, `description`, `created_at`, `updated_at`, `menu`) VALUES
(1, 'tickets', '2023-03-04', '2023-03-23', 30, 'huyen', 1, 'sale for monday to friday', '2023-02-22', '2023-03-06', 3);

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` bigint(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `name_client` varchar(255) NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `review` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id`, `product_id`, `name_client`, `email`, `created_at`, `updated_at`, `review`) VALUES
(3, 19, 'huyen', 'test1@gmail.fdffd', '2023-03-02', '2023-03-02', 'hello'),
(4, 19, 'huyen', 'test1@gmail.fdffd', '2023-03-02', '2023-03-02', 'nkn'),
(5, 19, 'huyen', 'test1@gmail.fdffd', '2023-03-02', '2023-03-02', 'naas'),
(6, 20, 'phong', 'qqphong20011@gmail.com', '2023-03-02', '2023-03-02', 'cais nay ngon'),
(7, 11, 'phong', 'qqphong20011@gmail.com', '2023-03-02', '2023-03-02', 'good'),
(8, 28, 'Huy', 'taolaphong78@gmail.com', '2023-03-06', '2023-03-06', 'aaa'),
(9, 29, 'Huy', 'taolaphong78@gmail.com', '2023-03-06', '2023-03-06', 'ngon'),
(10, 28, 'phong', 'qqphong2001@gmail.com', '2023-03-06', '2023-03-06', 'hay');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `token` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `phone`, `status`, `token`, `role`) VALUES
(20, 'phong', 'qqphong2001@gmail.com', '2023-02-20 04:31:29', '$2y$10$G3nDopfEM0M4HbJEkW62IOFxOoeQLfXg5O6UveWMU0eQMcvHB5yJO', NULL, '2023-02-20 04:30:55', '2023-02-20 04:31:29', 1234567891, 1, NULL, 2),
(21, 'phong', 'qqphong20011@gmail.com', '2023-02-20 04:32:39', '$2y$10$ESt3w6z9ZHKCQ.GMosgmq.sOb5QoeP1DLRmVi7MiJ5aUYLizNA/b.', NULL, '2023-02-20 04:32:26', '2023-02-20 04:32:39', 1234567891, 1, NULL, 1),
(22, 'phong', 'qqphong200111@gmail.com', NULL, '$2y$10$mFrNdxJabA/xNuilFtl6Quuis/Cr1lIj/mkFRNrHO4S64rCRSiCca', NULL, '2023-02-20 04:32:55', '2023-02-20 04:32:55', 1234567891, 1, NULL, 1),
(23, 'huyen', 'test1@gmail.fdffd', '2023-02-21 06:45:01', '$2y$10$5shu.ph4fZrN1f.0EO6VIuKbsxewHmQALoniO9GUPokEi0nO6oXsa', NULL, '2023-02-21 04:33:57', '2023-02-21 06:45:01', 123456789, 1, NULL, 2),
(24, 'phong', 'n1.amber3003@gmail.com', NULL, '$2y$10$V6I4LXCxMmQf4x0QZMimQu7objqdjpoyULdmP3rr4vevebJInWFSG', NULL, '2023-02-21 04:41:53', '2023-02-21 04:41:53', 123456789, 1, NULL, 1),
(25, 'phong', 'phong123456@gmail.com', NULL, '$2y$10$muk93iKmWhZTvdcSmGj6KeMH0w8oTfRkCfEw5YBLE/LxNAbzcldQW', NULL, '2023-02-21 04:42:44', '2023-02-21 04:42:44', 123456789, 1, NULL, 1),
(26, 'huyen', 'test3@gmail.fdffd', '2023-02-21 04:46:37', '$2y$10$6E2nDVBpcQcwnOhbxTqK0e60.lmNKsQqPipIqhMYVIGQZgybG/TUm', NULL, '2023-02-21 04:46:23', '2023-02-21 04:46:37', 123456789, 1, NULL, 2),
(27, 'Quan', 'doquan2003@gmail.com', NULL, '$2y$10$dQxTVIaCH61iXN9iWDiYmuaAnsg5SzuN820UnJjvjtwf0Sxm2GyZK', NULL, '2023-03-02 04:46:17', '2023-03-02 04:46:17', 1234567891, 1, NULL, 1),
(28, 'Quan', 'doquan23032003@gmail.com', NULL, '$2y$10$r7H9uTYONt3cZXEcWkvDzeAozML0KKXAzeSGyHnzdKqWZh69OrJqq', NULL, '2023-03-02 04:48:05', '2023-03-02 04:48:05', 1234567891, 1, NULL, 1),
(30, 'Huy', 'taolaphong78@gmail.com', NULL, '$2y$10$B2Rlti.UU4gKLlUA3ceAWeX1bj8.smyb7VxzGrPEhRbHfzh8GzOOi', NULL, '2023-03-06 06:45:15', '2023-03-06 06:45:15', 1234567891, 1, NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `promotions_id` (`promotions_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `menu` (`menu`);

--
-- Indexes for table `promotions`
--
ALTER TABLE `promotions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gallery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `promotions`
--
ALTER TABLE `promotions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`),
  ADD CONSTRAINT `carts_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`promotions_id`) REFERENCES `promotions` (`id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`menu`) REFERENCES `menu` (`id`);

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `rating_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`),
  ADD CONSTRAINT `rating_ibfk_2` FOREIGN KEY (`email`) REFERENCES `users` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
