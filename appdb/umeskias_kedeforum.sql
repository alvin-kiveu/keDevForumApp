-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 24, 2023 at 09:03 AM
-- Server version: 10.3.38-MariaDB-cll-lve
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `umeskias_kedeforum`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `ID` int(11) NOT NULL,
  `commentid` varchar(500) NOT NULL,
  `devitid` varchar(500) NOT NULL,
  `userKdfId` varchar(500) NOT NULL,
  `devitcomment` text NOT NULL,
  `commenttime` varchar(500) NOT NULL
);

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`ID`, `commentid`, `devitid`, `userKdfId`, `devitcomment`, `commenttime`) VALUES
(2, '641a198b2b956', 'fqudarwu1l4wxrtzbldi', '-2042027001', '<p>just stop using php</p>', '2023-03-21 20:54:35'),
(3, '641a22eef208f', 'fqudarwu1l4wxrtzbldi', '-1449048510', '<p>😅😅 I see a php hatter&nbsp;there , but you can still using With MongoDB.</p>', '2023-03-21 21:34:39'),
(4, '641a32150411b', 'v9wes6a3qmasf34b3blw', '-1133477524', '<p>Just testing</p><p><br></p>', '2023-03-21 22:39:17'),
(5, '641a32b748922', 'v9wes6a3qmasf34b3blw', '-1449048510', '<p>🙂 Cool</p>', '2023-03-21 22:41:59'),
(6, '641a5e3ec0bd8', 'v9wes6a3qmasf34b3blw', '-56560341', '<p>Great start ⭐</p>', '2023-03-22 01:47:42'),
(7, '641a7b4c12655', 'f3cv3p2tqnnr6xss08oy', '-2042027001', '<p>open source it 😅</p>', '2023-03-22 03:51:40'),
(8, '641a9837764de', 'v9wes6a3qmasf34b3blw', '190046538', '<p>it a good start having in mind it\'s your first release version.</p><p><br></p>', '2023-03-22 05:55:03'),
(9, '641a9b8977ac7', 'v9wes6a3qmasf34b3blw', '-1880997435', '<p>A step 🪜</p><p>We going higher&nbsp;</p>', '2023-03-22 06:09:13'),
(10, '641aa9835ff9f', 'f3cv3p2tqnnr6xss08oy', '-1449048510', '<p>I\'ll&nbsp; open source it for the chosen few</p>', '2023-03-22 07:08:51'),
(11, '641caa681a961', 'ujkif7m7jzkeqsivqcu3', '-1133477524', '<p>Nice work</p>', '2023-03-23 19:37:12'),
(12, '641cb2600db0c', 'f3cv3p2tqnnr6xss08oy', '747711566', '<p>Chat forum....where anyone online can chat at real time and also show any registered user who is online 🙂<strong>​​​​​​​</strong></p>', '2023-03-23 20:11:12'),
(13, '641cb57919648', 'ujkif7m7jzkeqsivqcu3', '-1449048510', '<p>Thanks</p>', '2023-03-23 20:24:25'),
(14, '641d9737a6698', 'jnmtccepqddioa2ajt6m', '-2038676964', '<p>l kinda do think that they are really going to imporve the productivity of developers.<br></p>', '2023-03-24 12:27:35'),
(15, '641d98647fddb', 'ujkif7m7jzkeqsivqcu3', '-2038676964', '<p>l was just wondering where can someone give his/her feedback about the website.??</p><p><br></p>', '2023-03-24 12:32:36'),
(16, '641db73028e87', 'ujkif7m7jzkeqsivqcu3', '-1449048510', '<p>i will create that option soon</p>', '2023-03-24 14:44:00'),
(17, '642140102c81e', 'ujkif7m7jzkeqsivqcu3', '1175689070', '<p>Use tinkercard to create&nbsp; virtual simulations&nbsp;</p>', '2023-03-27 07:04:48'),
(18, '64216fb8c6e03', 'jnmtccepqddioa2ajt6m', '-1449048510', '<p>i also agree with you</p>', '2023-03-27 10:28:08'),
(19, '6421700dedc0f', 'ujkif7m7jzkeqsivqcu3', '-1449048510', '<p>i wanted to get the consept first then proceed</p>', '2023-03-27 10:29:33'),
(20, '642195eb097d4', 'f3cv3p2tqnnr6xss08oy', '-2038676964', '<p>l like that chat forum feature that Duke m Legend has suggested</p>', '2023-03-27 13:11:07'),
(21, '6421982f89bdc', 'v9wes6a3qmasf34b3blw', '-2038676964', '<p>l really can\'t wait for the create zones feature. Because l really do think that its going to be fun.</p>', '2023-03-27 13:20:47'),
(22, '6423f84920b17', 'cg9cul5r35d6ei6i44qb', '1349912207', '<p>W3SCHOOLS&nbsp;</p>', '2023-03-29 08:35:21'),
(23, '64252b3b4e9a7', 'xsusgbn8gq2nyxujq8lu', '-369437600', '<p>Great job on the videos.</p>', '2023-03-30 06:24:59'),
(24, '64253daeec335', 'xsusgbn8gq2nyxujq8lu', '-369437600', '<p>I have a question. What urls does one use on a live web app in place of the ones provided by Safaricom for testing?</p>', '2023-03-30 07:43:43'),
(25, '64253daeec334', 'xsusgbn8gq2nyxujq8lu', '-369437600', '<p>I have a question. What urls does one use on a live web app in place of the ones provided by Safaricom for testing?</p>', '2023-03-30 07:43:43'),
(26, '64253daeee494', 'xsusgbn8gq2nyxujq8lu', '-369437600', '<p>I have a question. What urls does one use on a live web app in place of the ones provided by Safaricom for testing?</p>', '2023-03-30 07:43:43'),
(27, '643060bd32a8e', 'h6trdnff0yg8vser7je9', '1230087154', '<p>Try using chatgpt to do it for you</p>', '2023-04-07 18:28:13'),
(28, '64344d0035810', '2hy30mb6hsn4l6mkfodc', '-1726829210', '<p>Awesome.&nbsp;</p>', '2023-04-10 17:53:04'),
(29, '646a27bf2e212', 'kecswas1uc4s0sl30osg', '-642541437', '&lt;p&gt;&amp;lt;script&amp;gt;document.getElementsByTagName(&#039;body&#039;).inn innerH=&quot;hacked&quot;&amp;lt;/script&amp;gt;&lt;/p&gt;', '2023-05-21 14:16:31'),
(30, '646b2bd9c4bfb', 'v9wes6a3qmasf34b3blw', '-2006877269', '&lt;p&gt;&amp;lt;img src=x&amp;gt;&lt;/p&gt;', '2023-05-22 08:46:17'),
(31, '646b2bda289a3', 'v9wes6a3qmasf34b3blw', '-2006877269', '&lt;p&gt;&amp;lt;img src=x&amp;gt;&lt;/p&gt;', '2023-05-22 08:46:18'),
(32, '646b2c5c084c0', 'y5b8ov3wrcqk2abjwqbj', '-2006877269', '&lt;p&gt;&amp;lt;img src=x&amp;gt;&lt;/p&gt;', '2023-05-22 08:48:28'),
(33, '646b2c7a7dec6', 'y5b8ov3wrcqk2abjwqbj', '-2006877269', '&lt;p&gt;&amp;lt;/p&amp;gt;&lt;/p&gt;', '2023-05-22 08:48:58'),
(34, '646b2cd5cd88a', 'y5b8ov3wrcqk2abjwqbj', '-2006877269', '&lt;p&gt;////////////////////////&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;//////////////&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;////////////&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;///////////&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;////////////&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;//////////&lt;/p&gt;&lt;p&gt;&amp;lt;IMG src=x&amp;gt;&lt;/p&gt;', '2023-05-22 08:50:29'),
(35, '646b2d32e8a93', 'y5b8ov3wrcqk2abjwqbj', '-2006877269', '&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;br&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&amp;lt;img src=x&amp;gt;&lt;/p&gt;', '2023-05-22 08:52:03');

-- --------------------------------------------------------

--
-- Table structure for table `deviters`
--

CREATE TABLE `deviters` (
  `ID` int(11) NOT NULL,
  `userDevAdded` varchar(500) NOT NULL,
  `userDevAdder` varchar(500) NOT NULL
);

--
-- Dumping data for table `deviters`
--

INSERT INTO `deviters` (`ID`, `userDevAdded`, `userDevAdder`) VALUES
(1, '-1449048510', '238162291'),
(2, '-568969589', '238162291'),
(3, '-568969589', '238162291'),
(4, '-568969589', '-154965052'),
(5, '686324790', '238162291'),
(6, '686324790', '238162291'),
(7, '686324790', '238162291'),
(8, '686324790', '238162291'),
(9, '686324790', '238162291'),
(10, '617722215', '238162291'),
(11, '-568969589', '-1449048510'),
(12, '-1133477524', '-1449048510'),
(13, '617722215', '-1449048510'),
(14, '-568969589', '67045303'),
(15, '-2042027001', '67045303'),
(16, '238162291', '67045303'),
(17, '238162291', '67045303'),
(18, '-1449048510', '67045303'),
(19, '686324790', '67045303'),
(20, '-1133477524', '67045303'),
(21, '-2042027001', '-1449048510'),
(22, '-1824575292', '-1449048510'),
(23, '-1449048510', '997343609'),
(24, '-1449048510', '997343609'),
(25, '-1726829210', '747711566'),
(26, '-1449048510', '747711566'),
(27, '-1133477524', '747711566'),
(28, '1332286462', '747711566'),
(29, '-1914788049', '747711566'),
(30, '238162291', '747711566'),
(32, '-2038676964', '-1449048510'),
(34, '-1449048510', '-1726829210'),
(35, '-568969589', '-1726829210'),
(36, '-62202566', '-1726829210'),
(37, '-1449048510', '425272368'),
(38, '-1449048510', '425272368'),
(39, '-568969589', '425272368'),
(40, '617722215', '425272368'),
(41, '-2038676964', '425272368'),
(43, '-1895707842', '2027279151'),
(44, '-2042027001', '1996265235'),
(45, '-568969589', '1996265235'),
(46, '-568969589', '190046538'),
(47, '1996265235', '-1449048510'),
(48, '-1449048510', '1255888991'),
(49, '2023849656', '-642541437'),
(50, '-959906750', '612078350');

-- --------------------------------------------------------

--
-- Table structure for table `devitupdown`
--

CREATE TABLE `devitupdown` (
  `ID` int(11) NOT NULL,
  `devitid` varchar(500) NOT NULL,
  `userKdfId` varchar(500) NOT NULL,
  `devitype` text NOT NULL
);

--
-- Dumping data for table `devitupdown`
--

INSERT INTO `devitupdown` (`ID`, `devitid`, `userKdfId`, `devitype`) VALUES
(22, 'fqudarwu1l4wxrtzbldi', '-154965052', 'divitup'),
(23, 'e9yzyukrdsxfmwmhwglu', '-154965052', 'divitup'),
(29, 'e9yzyukrdsxfmwmhwglu', '238162291', 'divitup'),
(34, 'fqudarwu1l4wxrtzbldi', '238162291', 'divitup'),
(36, 'fqudarwu1l4wxrtzbldi', '-1449048510', 'divitup'),
(37, 'e9yzyukrdsxfmwmhwglu', '-1449048510', 'divitup'),
(38, 'v9wes6a3qmasf34b3blw', '-1449048510', 'divitup'),
(39, 'v9wes6a3qmasf34b3blw', '1255888991', 'divitup'),
(40, 'e9yzyukrdsxfmwmhwglu', '1255888991', 'divitup'),
(42, 'v9wes6a3qmasf34b3blw', '425272368', 'divitup'),
(43, 'fqudarwu1l4wxrtzbldi', '425272368', 'divitup'),
(45, 'v9wes6a3qmasf34b3blw', '-56560341', 'divitup'),
(46, 'e9yzyukrdsxfmwmhwglu', '-56560341', 'divitup'),
(48, 'fqudarwu1l4wxrtzbldi', '-2042027001', 'divitup'),
(52, 'f3cv3p2tqnnr6xss08oy', '-1880997435', 'divitup'),
(53, 'fqudarwu1l4wxrtzbldi', '-1880997435', 'divitup'),
(54, 'v9wes6a3qmasf34b3blw', '-1880997435', 'divitup'),
(92, 'f3cv3p2tqnnr6xss08oy', '-1726829210', 'divitup'),
(94, 'e9yzyukrdsxfmwmhwglu', '-1726829210', 'divitup'),
(97, 'f3cv3p2tqnnr6xss08oy', '-1449048510', 'divitup'),
(98, 'fqudarwu1l4wxrtzbldi', '-1934291095', 'divitup'),
(99, 'f3cv3p2tqnnr6xss08oy', '2085749061', 'divitup'),
(100, 'f3cv3p2tqnnr6xss08oy', '-878135053', 'divitup'),
(101, 'f3cv3p2tqnnr6xss08oy', '1676850661', 'divitup'),
(102, 'tmzzakw7qfcajs8ud5sr', '-1449048510', 'divitup'),
(103, 'ujkif7m7jzkeqsivqcu3', '-1449048510', 'divitup'),
(104, 'ujkif7m7jzkeqsivqcu3', '-1133477524', 'divitup'),
(105, 'f3cv3p2tqnnr6xss08oy', '747711566', 'divitup'),
(106, 'jnmtccepqddioa2ajt6m', '-1449048510', 'divitup'),
(107, 'jnmtccepqddioa2ajt6m', '-56560341', 'divitup'),
(108, 'ujkif7m7jzkeqsivqcu3', '-56560341', 'divitup'),
(109, 'tmzzakw7qfcajs8ud5sr', '-56560341', 'divitup'),
(114, 'rps302hx2j3to3xpudhf', '-2038676964', 'divitup'),
(116, 'cg9cul5r35d6ei6i44qb', '-1449048510', 'divitup'),
(117, 'rps302hx2j3to3xpudhf', '-1449048510', 'divitup'),
(118, 'cg9cul5r35d6ei6i44qb', '-1726829210', 'divitup'),
(120, 'jnmtccepqddioa2ajt6m', '-1726829210', 'divitup'),
(121, 'ujkif7m7jzkeqsivqcu3', '-1726829210', 'divitup'),
(122, 'tmzzakw7qfcajs8ud5sr', '-1726829210', 'divitup'),
(123, 'fqudarwu1l4wxrtzbldi', '-1726829210', 'divitup'),
(124, 'v9wes6a3qmasf34b3blw', '-1726829210', 'divitup'),
(127, '9hgqmzshkwm8b1tagqux', '-1449048510', 'divitup'),
(131, 'jnmtccepqddioa2ajt6m', '425272368', 'divitup'),
(132, 'cg9cul5r35d6ei6i44qb', '425272368', 'divitup'),
(133, 'xnq5haz22nrvlotwit1y', '-1449048510', 'divitup'),
(134, 'z2iptsbhctzd5ad786xr', '-1449048510', 'divitup'),
(136, 'xsusgbn8gq2nyxujq8lu', '-1449048510', 'divitup'),
(137, 'cg9cul5r35d6ei6i44qb', '-1473276209', 'divitup'),
(138, 'z2iptsbhctzd5ad786xr', '-409573', 'divitup'),
(140, 'h6trdnff0yg8vser7je9', '-1449048510', 'divitup'),
(141, 'qyde66ladnfey4f6ocvt', '-1449048510', 'divitup'),
(144, 'acgrim3j574wpdo14o8m', '1996265235', 'divitup'),
(145, 'tohgi48wv2e022cilp7n', '-2038676964', 'divitup'),
(146, 'acgrim3j574wpdo14o8m', '-2038676964', 'divitup'),
(147, 'xsusgbn8gq2nyxujq8lu', '-2038676964', 'divitup'),
(148, '9hgqmzshkwm8b1tagqux', '-2038676964', 'divitup'),
(150, 'tohgi48wv2e022cilp7n', '-1449048510', 'divitup'),
(151, 'acgrim3j574wpdo14o8m', '-1449048510', 'divitup'),
(152, 'qi7hpgl5k3golc9pmi0t', '-1449048510', 'divitup'),
(154, 'qi7hpgl5k3golc9pmi0t', '1255888991', 'divitup'),
(155, 'f3cv3p2tqnnr6xss08oy', '1255888991', 'divitup'),
(156, '2hy30mb6hsn4l6mkfodc', '-1726829210', 'divitup'),
(157, 'qi7hpgl5k3golc9pmi0t', '-1726829210', 'divitup'),
(158, 'tohgi48wv2e022cilp7n', '-1726829210', 'divitup'),
(159, 'acgrim3j574wpdo14o8m', '-1726829210', 'divitup'),
(160, 'xsusgbn8gq2nyxujq8lu', '-1726829210', 'divitup'),
(161, 'xnq5haz22nrvlotwit1y', '67045303', 'divitup'),
(162, 'qi7hpgl5k3golc9pmi0t', '-2038676964', 'divitup'),
(163, '2hy30mb6hsn4l6mkfodc', '-2038676964', 'divitup'),
(165, 'qi7hpgl5k3golc9pmi0t', '612078350', 'divitup'),
(166, 'v9wes6a3qmasf34b3blw', '-959906750', 'divitdown'),
(167, 'v9wes6a3qmasf34b3blw', '612078350', 'divitup'),
(168, 'n70sn65l3z71ots1ednz', '612078350', 'divitup');

-- --------------------------------------------------------

--
-- Table structure for table `devitviews`
--

CREATE TABLE `devitviews` (
  `ID` int(11) NOT NULL,
  `devitid` varchar(500) NOT NULL,
  `devkdfid` varchar(500) NOT NULL
);

--
-- Dumping data for table `devitviews`
--

INSERT INTO `devitviews` (`ID`, `devitid`, `devkdfid`) VALUES
(1, 'e9yzyukrdsxfmwmhwglu', '238162291'),
(2, 'v9wes6a3qmasf34b3blw', '238162291'),
(3, 'fqudarwu1l4wxrtzbldi', '-568969589'),
(4, 'fqudarwu1l4wxrtzbldi', '238162291'),
(5, 'fqudarwu1l4wxrtzbldi', '-2042027001'),
(6, 'fqudarwu1l4wxrtzbldi', '-1449048510'),
(7, 'v9wes6a3qmasf34b3blw', '-1133477524'),
(8, 'v9wes6a3qmasf34b3blw', '-1449048510'),
(9, 'e9yzyukrdsxfmwmhwglu', '425272368'),
(10, 'e9yzyukrdsxfmwmhwglu', '-1449048510'),
(11, 'v9wes6a3qmasf34b3blw', '-56560341'),
(12, 'fqudarwu1l4wxrtzbldi', '-56560341'),
(13, 'f3cv3p2tqnnr6xss08oy', '-1449048510'),
(14, 'f3cv3p2tqnnr6xss08oy', '238162291'),
(15, 'f3cv3p2tqnnr6xss08oy', '-2042027001'),
(16, 'v9wes6a3qmasf34b3blw', '190046538'),
(17, 'f3cv3p2tqnnr6xss08oy', '-1880997435'),
(18, 'fqudarwu1l4wxrtzbldi', '-1880997435'),
(19, 'v9wes6a3qmasf34b3blw', '-1880997435'),
(20, 'e9yzyukrdsxfmwmhwglu', '-1824575292'),
(21, 'e9yzyukrdsxfmwmhwglu', '-1934291095'),
(22, 'f3cv3p2tqnnr6xss08oy', '2085749061'),
(23, 'e9yzyukrdsxfmwmhwglu', '2085749061'),
(24, 'v9wes6a3qmasf34b3blw', '2085749061'),
(25, 'fqudarwu1l4wxrtzbldi', '2085749061'),
(26, 'f3cv3p2tqnnr6xss08oy', '997343609'),
(27, 'fqudarwu1l4wxrtzbldi', '1676850661'),
(28, 'v9wes6a3qmasf34b3blw', '1676850661'),
(29, 'tmzzakw7qfcajs8ud5sr', '-1449048510'),
(30, 'ujkif7m7jzkeqsivqcu3', '-1449048510'),
(31, 'ujkif7m7jzkeqsivqcu3', '-1133477524'),
(32, 'f3cv3p2tqnnr6xss08oy', '747711566'),
(33, 'fqudarwu1l4wxrtzbldi', '747711566'),
(34, 'fqudarwu1l4wxrtzbldi', '-62202566'),
(35, 'jnmtccepqddioa2ajt6m', '-1449048510'),
(36, 'ujkif7m7jzkeqsivqcu3', '-975394032'),
(37, 'fqudarwu1l4wxrtzbldi', '-975394032'),
(38, 'rps302hx2j3to3xpudhf', '-2038676964'),
(39, 'jnmtccepqddioa2ajt6m', '-2038676964'),
(40, 'cg9cul5r35d6ei6i44qb', '-2038676964'),
(41, 'ujkif7m7jzkeqsivqcu3', '-2038676964'),
(42, 'cg9cul5r35d6ei6i44qb', '-1449048510'),
(43, 'rps302hx2j3to3xpudhf', '-1449048510'),
(44, 'cg9cul5r35d6ei6i44qb', '-1726829210'),
(45, 'rps302hx2j3to3xpudhf', '-1726829210'),
(46, '9hgqmzshkwm8b1tagqux', '-1449048510'),
(47, 'cg9cul5r35d6ei6i44qb', '-62202566'),
(48, 'jnmtccepqddioa2ajt6m', '425272368'),
(49, 'cg9cul5r35d6ei6i44qb', '425272368'),
(50, 'ujkif7m7jzkeqsivqcu3', '1175689070'),
(51, 'z2iptsbhctzd5ad786xr', '-2038676964'),
(52, 'xnq5haz22nrvlotwit1y', '-2038676964'),
(53, '9hgqmzshkwm8b1tagqux', '-2038676964'),
(54, 'tmzzakw7qfcajs8ud5sr', '-2038676964'),
(55, 'f3cv3p2tqnnr6xss08oy', '-2038676964'),
(56, 'fqudarwu1l4wxrtzbldi', '-2038676964'),
(57, 'e9yzyukrdsxfmwmhwglu', '-2038676964'),
(58, 'v9wes6a3qmasf34b3blw', '-2038676964'),
(59, 'z2iptsbhctzd5ad786xr', '1349912207'),
(60, 'cg9cul5r35d6ei6i44qb', '1349912207'),
(61, 'jnmtccepqddioa2ajt6m', '1349912207'),
(62, 'ujkif7m7jzkeqsivqcu3', '1349912207'),
(63, 'tmzzakw7qfcajs8ud5sr', '1349912207'),
(64, 'xsusgbn8gq2nyxujq8lu', '-1449048510'),
(65, 'xsusgbn8gq2nyxujq8lu', '-369437600'),
(66, 'xsusgbn8gq2nyxujq8lu', '-2038676964'),
(67, 'cg9cul5r35d6ei6i44qb', '-1473276209'),
(68, 'ujkif7m7jzkeqsivqcu3', '-1473276209'),
(69, 'cg9cul5r35d6ei6i44qb', '-409573'),
(70, 'v9wes6a3qmasf34b3blw', '-409573'),
(71, 'acgrim3j574wpdo14o8m', '1996265235'),
(72, 'ujkif7m7jzkeqsivqcu3', '1996265235'),
(73, 'tohgi48wv2e022cilp7n', '-2038676964'),
(74, 'acgrim3j574wpdo14o8m', '-1449048510'),
(75, 'qi7hpgl5k3golc9pmi0t', '-1449048510'),
(76, 'qi7hpgl5k3golc9pmi0t', '1230087154'),
(77, 'acgrim3j574wpdo14o8m', '1230087154'),
(78, 'h6trdnff0yg8vser7je9', '1230087154'),
(79, '2hy30mb6hsn4l6mkfodc', '-1449048510'),
(80, 'qyde66ladnfey4f6ocvt', '-1726829210'),
(81, '2hy30mb6hsn4l6mkfodc', '-1726829210'),
(82, 'h6trdnff0yg8vser7je9', '67045303'),
(83, 'xnq5haz22nrvlotwit1y', '67045303'),
(84, 'qi7hpgl5k3golc9pmi0t', '-2038676964'),
(85, '2hy30mb6hsn4l6mkfodc', '-2038676964'),
(86, 'tohgi48wv2e022cilp7n', '-1449048510'),
(87, 'tohgi48wv2e022cilp7n', '1180266343'),
(88, 'qi7hpgl5k3golc9pmi0t', '-642541437'),
(89, 'x', '-642541437'),
(90, 'n6tml7cixsupg4gdgz5z', '612078350'),
(91, 'fpa1sm7wfqzlbdkdst47', '612078350'),
(92, 'e2mfn7cuzvdw85cpb7z1', '-642541437'),
(93, 'uv8fyfozv02ux88waqds', '-642541437'),
(94, 'kecswas1uc4s0sl30osg', '-642541437'),
(95, 'kecswas1uc4s0sl30osg', '612078350'),
(96, 'kecswas1uc4s0sl30osg', '-1449048510'),
(97, 'qi7hpgl5k3golc9pmi0t', '612078350'),
(98, 'n70sn65l3z71ots1ednz', '-642541437'),
(99, 'n70sn65l3z71ots1ednz', '612078350'),
(100, 'v9wes6a3qmasf34b3blw', '-2006877269'),
(101, 'y5b8ov3wrcqk2abjwqbj', '-2006877269');

-- --------------------------------------------------------

--
-- Table structure for table `feeds`
--

CREATE TABLE `feeds` (
  `ID` int(11) NOT NULL,
  `feedid` varchar(500) NOT NULL,
  `title` text NOT NULL,
  `content` longtext NOT NULL,
  `email` varchar(500) NOT NULL,
  `postedTime` varchar(500) NOT NULL,
  `views` int(11) NOT NULL,
  `comment` int(11) NOT NULL,
  `devitup` int(11) NOT NULL,
  `devitdown` int(11) NOT NULL
);

--
-- Dumping data for table `feeds`
--

INSERT INTO `feeds` (`ID`, `feedid`, `title`, `content`, `email`, `postedTime`, `views`, `comment`, `devitup`, `devitdown`) VALUES
(1, 'v9wes6a3qmasf34b3blw', 'First KeDevForum Devit', '<p>Welcome to KeDevFrum! Join our community of tech enthusiasts. Share ideas, solve problems, and explore the latest tech trends. What feature would you like to see added?</p>', 'alvo967@gmail.com', '2023-03-21 12:02:47', 0, 8, 6, 1),
(2, 'e9yzyukrdsxfmwmhwglu', 'How to send a HTTP request with PHP', '<p>&nbsp;To send an HTTP request with PHP, you can use the built-in function <code>curl_init()</code> to initialize a cURL session, set the required options using <code>curl_setopt()</code>, and then execute the request using <code>curl_exec()</code>. Here&#39;s an example:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<pre>\r\n<code class=\"language-php\">// initialize cURL session\r\n$ch = curl_init();\r\n\r\n// set URL and other options\r\ncurl_setopt($ch, CURLOPT_URL, \"http://example.com\");\r\ncurl_setopt($ch, CURLOPT_RETURNTRANSFER, true);\r\n\r\n// execute the request and get response\r\n$response = curl_exec($ch);\r\n\r\n// close cURL session\r\ncurl_close($ch);\r\n</code></pre>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>In this example, we&#39;re sending a GET request to <code>http://example.com</code> and setting the <code>CURLOPT_RETURNTRANSFER</code> option to true to return the response as a string. You can also set other options like headers, request method, request body, etc. as required.</p>', 'umeskiasoftwares@gmail.com', '2023-03-21 12:16:25', 0, 0, 6, 0),
(3, 'fqudarwu1l4wxrtzbldi', 'PHP  Connection with MongoDB', '<p>&nbsp;</p>\r\n<quillbot-extension-portal></quillbot-extension-portal>', 'devjameskw@gmail.com', '2023-03-21 14:44:57', 0, 2, 8, 0),
(4, 'f3cv3p2tqnnr6xss08oy', 'Features  Suggestions on KeDevForum', '<p>Please suggest features that you would like to be added on KeDevForum.</p>', 'alvo967@gmail.com', '2023-03-22 02:03:41', 0, 4, 9, 0),
(5, 'tmzzakw7qfcajs8ud5sr', 'Convert text to audio using python', '<p>First you need to install the following python library&#39;s gTTS and playsound</p>\r\n\r\n<p>Instaling gTTS</p>\r\n\r\n<pre>\r\n<code class=\"language-bash\">pip install gTTS</code></pre>\r\n\r\n<p>Instaling playsound</p>\r\n\r\n<pre>\r\n<code class=\"language-bash\">pip install playsound</code></pre>\r\n\r\n<p>Create a python files the paste the code below&nbsp;</p>\r\n\r\n<pre>\r\n<code class=\"language-python\">import os\r\nfrom gtts import gTTS\r\nfrom playsound import playsound\r\n\r\n# SPEAK\r\ndef speak(text):\r\n    tts = gTTS(text)\r\n    tts.save(\"sample.mp3\")\r\n    playsound(\"sample.mp3\")\r\n    \r\n    \r\ndef askUser():\r\n    input_text = input(\"Type Text : \")\r\n    speak(input_text)\r\n    \r\naskUser()\r\n</code></pre>\r\n\r\n<p>Run the python.&nbsp;</p>', 'alvo967@gmail.com', '2023-03-23 14:04:39', 0, 0, 3, 0),
(6, 'ujkif7m7jzkeqsivqcu3', 'TURN ON AND OFF BULB WITH BLUETOOTH AND RELAY SOURCE CODE', '<pre>\r\n<code class=\"language-cs\">char inputdata;\r\nint pin = 13;\r\nint outputdata = 13;\r\n\r\nvoid setup() {\r\n  Serial.begin(9600);\r\n  pinMode(pin, OUTPUT);\r\n  Serial.println(\"START APPLICATION\");\r\n}\r\n\r\n\r\nvoid loop() {\r\n  if(Serial.available() &gt; 0){\r\n     inputdata = Serial.read();\r\n     if(inputdata == \'1\'){\r\n       Serial.println(\"BULB TURNED ON\");\r\n       //TURNING ON RELAY\r\n       digitalWrite(outputdata, HIGH);\r\n       //TIME TO WAIT BEFORE TURNING OFF\r\n       delay(1000);\r\n     }else if (inputdata == \'2\'){\r\n       Serial.println(\"BULB TURNED OFF\");\r\n       digitalWrite(outputdata, LOW);\r\n     }else if(inputdata == \'WHITE\'){\r\n             digitalWrite(outputdata, LOW);\r\n             digitalWrite(outputdata, HIGH);\r\n             delay(1000);\r\n     }\r\n   }\r\n}</code></pre>\r\n\r\n<p>&nbsp;</p>', 'alvo967@gmail.com', '2023-03-23 17:46:57', 0, 6, 4, 0),
(7, 'jnmtccepqddioa2ajt6m', 'GitHub Copilot X: Microsoft Introduces New AI Coding Features to Your Editor', '<p>Microsoft has recently announced GitHub Copilot X, which introduces five new AI coding features to your editor. These features include:</p>\r\n\r\n<ol>\r\n	<li>\r\n	<p>Chat Window: A built-in chat window allows you to interact with GitHub Copilot X and receive additional assistance when needed.</p>\r\n	</li>\r\n	<li>\r\n	<p>Tailored Docs: The tool will provide you with documentation that is tailored to the specific code you are working on, allowing for faster and more efficient coding.</p>\r\n	</li>\r\n	<li>\r\n	<p>Voice Coding: With voice coding, you can use your voice to input code into your editor, reducing the need for manual typing and increasing productivity.</p>\r\n	</li>\r\n	<li>\r\n	<p>Pull Request Descriptions: GitHub Copilot X will automatically generate descriptive pull request summaries based on the code changes made, making it easier for reviewers to understand the changes.</p>\r\n	</li>\r\n	<li>\r\n	<p>AI CLI: This feature allows you to interact with the GitHub Copilot X using command line interface (CLI) tools, making it easier to integrate with your existing workflow.</p>\r\n	</li>\r\n</ol>\r\n\r\n<p>What do you think of these new features? Which one are you most excited to try out?</p>', 'alvo967@gmail.com', '2023-03-23 20:52:23', 0, 2, 4, 0),
(8, 'rps302hx2j3to3xpudhf', 'How To Integrate APIs in Vanilla JavaScript', '<p>APIs, or Application Programming Interfaces, allow you to interact with external data sources and retrieve information to use in your own application. In this tutorial, I&#39;ll show you how to work with APIs using Vanilla JavaScript.</p>\r\n\r\n<p>Before we get started, it&#39;s important to have a basic understanding of HTTP requests and responses. HTTP requests retrieve information from a server, while HTTP responses are what the server sends back.</p>\r\n\r\n<p><strong>Step 1: Making an HTTP Request</strong></p>\r\n\r\n<p>To make an HTTP request in Vanilla JavaScript, we&#39;ll use the&nbsp;<code>fetch()</code>&nbsp;function. This function returns a Promise that resolves to the Response object representing the response to your request.</p>\r\n\r\n<p>Here&#39;s an example of a simple GET request:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<pre>\r\n<code>fetch(\'https://api.example.com/data\')\r\n  .then(response =&gt; response.json())\r\n  .then(data =&gt; console.log(data))\r\n  .catch(error =&gt; console.error(error));\r\n</code></pre>\r\n\r\n<p>This code makes a GET request to the&nbsp;<code>https://api.example.com/data</code>&nbsp;endpoint and logs the JSON data it receives.</p>\r\n\r\n<p><strong>Step 2: Adding Request Options</strong></p>\r\n\r\n<p>In some cases, you may need to add options to your request, such as headers or a request body. You can do this by passing an options object as the second argument to the&nbsp;<code>fetch()</code>&nbsp;function.</p>\r\n\r\n<p>Here&#39;s an example of a POST request with a request body:</p>\r\n\r\n<pre>\r\n<code>const options = {\r\n  method: \'POST\',\r\n  headers: {\r\n    \'Content-Type\': \'application/json\'\r\n  },\r\n  body: JSON.stringify({\r\n    name: \'John Doe\',\r\n    email: \'john.doe@example.com\'\r\n  })\r\n};\r\n\r\nfetch(\'https://api.example.com/register\', options)\r\n  .then(response =&gt; response.json())\r\n  .then(data =&gt; console.log(data))\r\n  .catch(error =&gt; console.error(error));\r\n</code></pre>\r\n\r\n<p><strong>Step 3: Handling Responses</strong></p>\r\n\r\n<p>Once you&#39;ve received a response from the server, you&#39;ll need to process it to get the data you want. In this example, we&#39;re using&nbsp;<code>response.json()</code>&nbsp;to convert the response to a JSON object.</p>\r\n\r\n<p>You&#39;ll also want to handle errors, in case something goes wrong with the request. We&#39;re using the&nbsp;<code>catch()</code>&nbsp;method to log the error to the console.</p>\r\n\r\n<p><strong>Step 4: Adding Error Handling</strong></p>\r\n\r\n<p>To ensure your application is robust and reliable, it&#39;s important to add proper error handling.</p>\r\n\r\n<p>Here&#39;s an example of how to handle different HTTP status codes:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<pre>\r\n<code>fetch(\'https://api.example.com/data\')\r\n  .then(response =&gt; {\r\n    if (!response.ok) {\r\n      throw new Error(`HTTP error! status: ${response.status}`);\r\n    }\r\n    return response.json();\r\n  })\r\n  .then(data =&gt; console.log(data))\r\n  .catch(error =&gt; console.error(error));\r\n</code></pre>\r\n\r\n<p>In this example, we&#39;re using the&nbsp;<code>response.ok</code>&nbsp;property to check if the response&#39;s status code is in the 200-299 range (indicating a successful response). If the response is not OK, we throw an error with the status code.</p>\r\n\r\n<p>Examples to illustrate working with APIs using Vanilla JavaScript:</p>\r\n\r\n<p>Example 1: Retrieving data from a REST API</p>\r\n\r\n<pre>\r\n<code>fetch(\'https://jsonplaceholder.typicode.com/posts\')\r\n  .then(response =&gt; response.json())\r\n  .then(data =&gt; {\r\n    console.log(data);\r\n    data.forEach(post =&gt; {\r\n      console.log(post.title);\r\n    });\r\n  })\r\n  .catch(error =&gt; console.error(error));\r\n</code></pre>\r\n\r\n<p>In this example, we&#39;re using the&nbsp;<code>fetch()</code>&nbsp;function to make a GET request to the&nbsp;<code>https://jsonplaceholder.typicode.com/posts</code>&nbsp;endpoint, which returns a list of blog posts. We&#39;re then using the&nbsp;<code>response.json()</code>&nbsp;method to convert the response to a JSON object and log the data to the console.</p>\r\n\r\n<p>Example 2: Adding query parameters to a GET request</p>\r\n\r\n<p>COPY</p>\r\n\r\n<p>COPY</p>\r\n\r\n<p>COPY</p>\r\n\r\n<p>COPY</p>\r\n\r\n<p>COPY</p>\r\n\r\n<p>COPY</p>\r\n\r\n<p>COPY</p>\r\n\r\n<p>COPY</p>\r\n\r\n<p>COPY</p>\r\n\r\n<p>COPY</p>\r\n\r\n<p>COPY</p>\r\n\r\n<pre>\r\n<code>const searchTerm = \'javascript\';\r\n\r\nfetch(`https://api.example.com/search?q=${searchTerm}`)\r\n  .then(response =&gt; response.json())\r\n  .then(data =&gt; console.log(data))\r\n  .catch(error =&gt; console.error(error));\r\n</code></pre>\r\n\r\n<p>In this example, we&#39;re making a GET request to the&nbsp;<code>https://api.example.com/search</code>&nbsp;endpoint, with a query parameter of&nbsp;<code>q=javascript</code>. We then log the JSON data returned by the API to the console.</p>\r\n\r\n<p>Example 3: POST request with a JSON request body</p>\r\n\r\n<p>COPY</p>\r\n\r\n<p>COPY</p>\r\n\r\n<p>COPY</p>\r\n\r\n<p>COPY</p>\r\n\r\n<p>COPY</p>\r\n\r\n<p>COPY</p>\r\n\r\n<p>COPY</p>\r\n\r\n<p>COPY</p>\r\n\r\n<p>COPY</p>\r\n\r\n<p>COPY</p>\r\n\r\n<p>COPY</p>\r\n\r\n<pre>\r\n<code>const options = {\r\n  method: \'POST\',\r\n  headers: {\r\n    \'Content-Type\': \'application/json\'\r\n  },\r\n  body: JSON.stringify({\r\n    title: \'My First Blog Post\',\r\n    body: \'This is the body of my first blog post.\'\r\n  })\r\n};\r\n\r\nfetch(\'https://jsonplaceholder.typicode.com/posts\', options)\r\n  .then(response =&gt; response.json())\r\n  .then(data =&gt; console.log(data))\r\n  .catch(error =&gt; console.error(error));\r\n</code></pre>\r\n\r\n<p>In this example, we&#39;re making a POST request to the&nbsp;<code>https://jsonplaceholder.typicode.com/posts</code>&nbsp;endpoint with a JSON request body containing the title and body of a blog post. We then log the JSON data returned by the API to the console.</p>\r\n\r\n<p>Example 4: PUT request to update an existing resource</p>\r\n\r\n<p>COPY</p>\r\n\r\n<p>COPY</p>\r\n\r\n<p>COPY</p>\r\n\r\n<p>COPY</p>\r\n\r\n<p>COPY</p>\r\n\r\n<p>COPY</p>\r\n\r\n<p>COPY</p>\r\n\r\n<p>COPY</p>\r\n\r\n<p>COPY</p>\r\n\r\n<p>COPY</p>\r\n\r\n<p>COPY</p>\r\n\r\n<pre>\r\n<code>const options = {\r\n  method: \'PUT\',\r\n  headers: {\r\n    \'Content-Type\': \'application/json\'\r\n  },\r\n  body: JSON.stringify({\r\n    id: 1,\r\n    title: \'My Updated Blog Post\',\r\n    body: \'This is the updated body of my first blog post.\'\r\n  })\r\n};\r\n\r\nfetch(\'https://jsonplaceholder.typicode.com/posts/1\', options)\r\n  .then(response =&gt; response.json())\r\n  .then(data =&gt; console.log(data))\r\n  .catch(error =&gt; console.error(error));\r\n</code></pre>\r\n\r\n<p>In this example, we&#39;re making a PUT request to the&nbsp;<code>https://jsonplaceholder.typicode.com/posts/1</code>&nbsp;endpoint with a JSON request body containing the updated data for the blog post with an&nbsp;<code>id</code>&nbsp;of 1. We&#39;re then logging the JSON data returned by the API.</p>\r\n\r\n<p>That&#39;s it!</p>\r\n\r\n<p>You now know how to work with APIs using Vanilla JavaScript. You can use this knowledge to retrieve data from external sources and integrate it into your own applications.</p>\r\n\r\n<p>I&#39;d love to connect with you via&nbsp;&nbsp;<strong>LinkedIn on (https://www.linkedin.com/in/yatunyi-brian-97521623b/)</strong></p>\r\n\r\n<p>Happy hacking!</p>', 'yatunyi.15075@students.kyu.ac.ke', '2023-03-24 11:53:55', 0, 0, 2, 0),
(9, 'cg9cul5r35d6ei6i44qb', '5 Best Websites for Beginners to Learn Coding for Free', '<p>Coding has become an essential skill in today&#39;s digital age. Whether you&#39;re interested in building your own website or mobile app, or you want to pursue a career in tech, learning to code is a great way to get started.</p>\r\n\r\n<p>However, with so many resources available online, it can be difficult for beginners to know where to start. In this blog post, we&#39;ll take a look at some of the best websites for beginners to learn to code.</p>\r\n\r\n<p><strong>1) Codecademy</strong></p>\r\n\r\n<p>Codecademy&nbsp;is one of the most popular coding websites for beginners. It offers a variety of coding courses for free, including HTML, CSS, JavaScript, Python, and Ruby. The courses are designed to be interactive and hands-on, allowing you to practice coding as you learn. Codecademy also offers a paid Pro version that provides additional features, such as quizzes, projects, and certificates of completion.</p>\r\n\r\n<p><strong>2) FreeCodeCamp</strong></p>\r\n\r\n<p>FreeCodeCamp&nbsp;is a nonprofit organization that offers a comprehensive curriculum for learning web development. It includes courses on HTML, CSS, JavaScript, jQuery, Bootstrap, React, and more. The curriculum is designed to be self-paced, and it includes a community of learners who can offer support and feedback as you progress through the courses. FreeCodeCamp also offers a certification program that allows you to demonstrate your skills to potential employers.</p>\r\n\r\n<p><strong>3) Udemy</strong></p>\r\n\r\n<p>Udemy&nbsp;is an online learning platform that offers a wide variety of coding courses for beginners. The courses are created by experts in the field and cover a range of topics, from basic programming concepts to more advanced topics such as machine learning and artificial intelligence. While many courses on Udemy require payment, there are also free courses available, and Udemy frequently offers discounts on its paid courses.</p>\r\n\r\n<p><strong>4) Coursera</strong></p>\r\n\r\n<p>Coursera&nbsp;is another online learning platform that offers coding courses for beginners. It partners with universities and other institutions to provide high-quality, structured courses on a wide range of topics, including programming languages such as Python, Java, and C++. The courses are typically taught by professors or industry professionals and include video lectures, quizzes, and projects. While many courses on Coursera require payment, there are also free courses available.</p>\r\n\r\n<p><strong>5) Khan Academy</strong></p>\r\n\r\n<p>Khan Academy&nbsp;is a nonprofit organization that offers free courses on a variety of subjects, including coding. Its coding courses are designed for beginners and cover topics such as HTML, CSS, JavaScript, and SQL. The courses include interactive exercises and challenges, and Khan Academy provides a community forum where learners can ask questions and receive feedback.</p>\r\n\r\n<p><strong>6) HojaLeaks</strong></p>\r\n\r\n<p>HojaLeaks&nbsp;is also a platform that offers open-source coding tutorials that beginners can use to get started in their coding journey.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Learning to code can be challenging, but with the right resources, it can also be a rewarding experience. Whether you&#39;re interested in building your own projects or pursuing a career in tech, these websites provide a great starting point for beginners. Give them a try and see which one works best for you!</p>\r\n\r\n<p>I&#39;d love to connect with you via&nbsp;<strong>LinkedIn(https://www.linkedin.com/in/yatunyi-brian-97521623b/)</strong></p>\r\n\r\n<p>Happy Coding!</p>', 'yatunyi.15075@students.kyu.ac.ke', '2023-03-24 12:25:23', 0, 1, 4, 0),
(10, '9hgqmzshkwm8b1tagqux', 'Creating python virtual environment', '<p>python -m venv pyenv</p>\r\n\r\n<p>pyenv\\Scripts\\activate</p>\r\n\r\n<p>(pyenv) pip install django</p>', 'oluochbonfas68@gmail.com', '2023-03-24 20:36:15', 0, 0, 4, 0),
(11, 'z2iptsbhctzd5ad786xr', 'The Future of JavaScript: What\'s Next for the Language.', '<p>JavaScript has come a long way since its creation in 1995. Today, it is the most popular programming language in the world, powering everything from simple website interactions to complex web applications. But what&#39;s next for JavaScript? In this post, we&#39;ll explore some of the upcoming changes and trends that are shaping the future of this powerful language.</p>\r\n\r\n<p><strong>One of the biggest changes on the horizon for JavaScript is the continued growth of TypeScript</strong>.</p>\r\n\r\n<p>TypeScript is a superset of JavaScript that adds features like static typing and object-oriented programming concepts. It has been gaining popularity in recent years as a way to write more scalable and maintainable code, and many large companies, including Microsoft and Airbnb, have already adopted it. As TypeScript continues to mature, we can expect to see more developers switching to it and integrating it into their JavaScript workflows.</p>\r\n\r\n<p><strong>Another trend that is shaping the future of JavaScript is the rise of WebAssembly</strong>.</p>\r\n\r\n<p>WebAssembly is a new low-level language that allows developers to write high-performance code that can run in web browsers. While it is not a replacement for JavaScript, it can complement it by providing a way to run computationally intensive tasks more efficiently. This could open up new possibilities for web applications, such as advanced gaming experiences or machine learning applications.</p>\r\n\r\n<p><strong>Finally, we can expect to see continued improvements to the JavaScript language itself</strong>.</p>\r\n\r\n<p>ECMAScript, the standard that defines JavaScript, is updated regularly with new features and improvements. Some of the upcoming features include nullish coalescing, which makes it easier to work with null and undefined values, and optional chaining, which simplifies working with nested objects and arrays. As the language continues to evolve, we can expect it to become even more powerful and versatile.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>In conclusion, the future of JavaScript looks bright. With the continued growth of TypeScript, the rise of WebAssembly, and ongoing improvements to the language itself, we can expect to see new and exciting possibilities for web development in the years to come. As always, staying up-to-date with the latest trends and best practices will be key to success for JavaScript developers.</p>\r\n\r\n<p>Happy coding!!</p>', 'yatunyi.15075@students.kyu.ac.ke', '2023-03-27 12:52:45', 0, 0, 2, 0),
(12, 'xnq5haz22nrvlotwit1y', '10 cool extensions that are a MUST HAVE in your visual studio code.', '<p><strong>1. ESLint:</strong></p>\r\n\r\n<p>This extension provides real-time feedback on your code as you type, helping you catch errors and enforce coding standards. It also integrates with many popular JavaScript frameworks, such as React and Vue.js.</p>\r\n\r\n<p><strong>2.Prettier</strong>:</p>\r\n\r\n<p>Prettier is a code formatter that automatically formats your code to a consistent style. It can save you time and effort by handling tedious formatting tasks automatically.</p>\r\n\r\n<p><strong>3.Debugger for Chrome</strong>:</p>\r\n\r\n<p>This extension allows you to debug your JavaScript code directly from Visual Studio Code using the Chrome debugger. It supports both client-side and server-side debugging and is a powerful tool for tracking down bugs.</p>\r\n\r\n<p><strong>4.GitLens:</strong></p>\r\n\r\n<p>GitLens enhances the built-in Git functionality in Visual Studio Code, allowing you to easily see who made changes to the code and when. It also provides other useful features like blame annotations and code lens indicators.</p>\r\n\r\n<p><strong>5.Live Server:</strong></p>\r\n\r\n<p>This extension launches a local development server that automatically refreshes the browser when you make changes to your code. It&#39;s a great way to speed up your development workflow and see changes in real-time.</p>\r\n\r\n<p><strong>6.Auto Close Tag</strong>:</p>\r\n\r\n<p>This extension automatically closes HTML and XML tags as you type, saving you time and reducing the chance of errors.</p>\r\n\r\n<p><strong>7.Bracket Pair Colorizer</strong>:</p>\r\n\r\n<p>This extension colors matching brackets in your code, making it easier to visually parse your code and avoid syntax errors.</p>\r\n\r\n<p><strong>8.Code Runner:</strong></p>\r\n\r\n<p>This extension allows you to run code directly from within Visual Studio Code, without having to switch to a separate terminal or command prompt.</p>\r\n\r\n<p><strong>9.Path Intellisense</strong>:</p>\r\n\r\n<p>This extension provides auto-completion for file paths in your code, making it easier to navigate your project and reduce errors caused by typos.</p>\r\n\r\n<p><strong>10.REST Client</strong>:</p>\r\n\r\n<p>This extension allows you to send HTTP requests and test API endpoints directly from within Visual Studio Code. It&#39;s a great way to test your API code and ensure that it&#39;s working correctly.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Happy Coding!</p>', 'yatunyi.15075@students.kyu.ac.ke', '2023-03-27 13:06:08', 0, 0, 2, 0),
(13, 'xsusgbn8gq2nyxujq8lu', 'Mpesa integration with Node.js and PHP - Let\'s Talk About Your Experience', '<p>Hey everyone,</p>\r\n\r\n<p>I&#39;m the creator of the YouTube videos about Mpesa integration with Node.js and PHP that you may have watched. I&#39;m really excited to see that people are interested in this topic, and I wanted to open up a discussion to hear about your experiences.</p>\r\n\r\n<p>While creating the videos, I tried to cover as much ground as possible, but I understand that integrating Mpesa with Node.js and PHP can be a complex task. I want to make sure that everyone who watches my videos is able to implement Mpesa integration successfully.</p>\r\n\r\n<p>So, whether you&#39;ve had a smooth experience with Mpesa integration or have run into some problems, I&#39;d love to hear from you. What challenges have you faced, and how did you solve them? Are there any topics that you wish I had covered in more detail?</p>\r\n\r\n<p>I&#39;m always looking for feedback on how I can improve my videos and make them more helpful for everyone who watches. This forum post is a great place to discuss any issues that you&#39;ve had, share your knowledge with others, and get help with any problems that you&#39;re facing.</p>\r\n\r\n<p>Thanks for watching my videos, and I&#39;m looking forward to hearing about your experiences with Mpesa integration with Node.js and PHP!</p>', 'alvo967@gmail.com', '2023-03-29 20:13:54', 0, 4, 3, 0),
(14, 'qyde66ladnfey4f6ocvt', 'Survey Automation Tool', '<p>Good morning guys?<br />\r\nWhat do you think is a standard time for custom developing a dynamic survey management tool<br />\r\n(admin logins in and create any kind of survey, a link is generated shared to target, collect feedback, and perform basic analytics)</p>', 'njerumoses17@gmail.com', '2023-04-01 09:02:36', 0, 0, 1, 0),
(15, 'h6trdnff0yg8vser7je9', 'PHP Documentor', '<p>Do we have a tool that can comment all the php code - classes, functions and objects automatically?</p>', 'kivoech@gmail.com', '2023-04-01 09:23:09', 0, 1, 1, 0),
(16, 'acgrim3j574wpdo14o8m', 'Getting Started With Web Scraping Using Cheerio JS', '<p><strong>INTRODUCTION</strong></p>\r\n\r\n<p>I&rsquo;m currently working on&nbsp;a project&nbsp;that relies heavily on Cheerio JS and I&rsquo;ve learned a lot of lessons along the way; if you are an expert on JQuery, then Cheerio JS will be intuative to you, but for the rest of us developers it is an obscure and esoteric library. Just look at the &lt;a href=&quot;https://cheerio.js.org/&quot;&gt;documentation&lt;/a&gt;.</p>\r\n\r\n<p>In this post I&rsquo;m using the ES6 syntax.</p>\r\n\r\n<p>The libraries I will be using are:</p>\r\n\r\n<pre>\r\n<code class=\"language-javascript\">import axios from \'axios\';\r\nimport * as cheerio from \'cheerio\';</code></pre>\r\n\r\n<p>The sample website I will be scrapping is&nbsp;a &lt;a href=&quot;https://www.goodreads.com/book/show/320.One_Hundred_Years_of_Solitude&quot;&gt;goodreads page&lt;/a&gt; (Hopefully it stays alive).</p>\r\n\r\n<p>You should inspect the site&rsquo;s HTML before you continue.</p>\r\n\r\n<p>&lt;h2&gt;Scraping &lt;/h2&gt;</p>\r\n\r\n<p>Only a subset of the entire Cheerio JS library is necessary to successfully scrape a site. Therefore, this is not a complete overview of the entire library but only the parts that relate to scrapping.</p>\r\n\r\n<p>&lt;h3&gt;Loading &lt;/h3&gt;</p>\r\n\r\n<p>You must&nbsp;load&nbsp;HTML before using Cheerio. To load HTML into Cheerio you must get the HTML page of the website you want to scrape, this can be accoplished by:</p>\r\n\r\n<pre>\r\n<code class=\"language-javascript\">const { data } = await axios.get(\r\n	\'https://www.goodreads.com/book/show/320.One_Hundred_Years_of_Solitude\'\r\n);</code></pre>\r\n\r\n<p><strong>data</strong>&nbsp;contains the HTML website, to load it into Cheerio you must use:</p>\r\n\r\n<pre>\r\n<code class=\"language-javascript\">const $ = cheerio.load(data);</code></pre>\r\n\r\n<p>the&nbsp;<strong>$</strong>&nbsp;is an instance of the CheerioAPI object and is also reffered to as a querying function.</p>\r\n\r\n<p>&lt;h2&gt;Querying &lt;/h2&gt;</p>\r\n\r\n<p>&lt;h3&gt;Getting the book title &lt;/h3&gt;</p>\r\n\r\n<p>Supposed you wanted to get the book title, the title&rsquo;s parent is an h1 element with the id &ldquo;bookTitle&rdquo;</p>\r\n\r\n<pre>\r\n<code class=\"language-html\">&lt;h1 id=\"bookTitle\" class=\"gr-h1 gr-h1--serif\" itemprop=\"name\"&gt; One Hundred Years of Solitude &lt;/h1&gt;</code></pre>\r\n\r\n<p>so all you would need to do is run</p>\r\n\r\n<pre>\r\n<code class=\"language-javascript\">const title = $(\'#bookTitle\').text();</code></pre>\r\n\r\n<p>this works most of the time, but for some cases it wont, so you will need to traverse the DOM until you reach the node.</p>\r\n\r\n<pre>\r\n<code class=\"language-javascript\">const title = $(\'body div div div div div div div h1#bookTitle\').text();</code></pre>\r\n\r\n<p>this might also not work in some cases, so you can use</p>\r\n\r\n<pre>\r\n<code class=\"language-javascript\">const title = $(\'body\')\r\n	.children(\'div\')\r\n	.children(\'div\')\r\n	.children(\'div\')\r\n	.children(\'div\')\r\n	.children(\'div\')\r\n	.children(\'div\')\r\n	.children(\'div\')\r\n	.children(\'h1#bookTitle\')\r\n	.text();</code></pre>\r\n\r\n<p>&lt;h2&gt;Getting the book image &lt;/h2&gt;</p>\r\n\r\n<p>Suppose now that you want to get the book&rsquo;s image url, the book is nested under a div with the class &ldquo;bookCoverContainer&rdquo; and is itself a img element with the id &ldquo;coverImage&rdquo;</p>\r\n\r\n<pre>\r\n<code class=\"language-javascript\">&lt;div class=\"bookCoverContainer\"&gt;\r\n	&lt;div class=\"bookCoverPrimary\"&gt;\r\n		&lt;a rel=\"nofollow\" itemprop=\"image\" href=\"/book/photo/320.One_Hundred_Years_of_Solitude\"\r\n			&gt;&lt;img\r\n				id=\"coverImage\"\r\n				alt=\"One Hundred Years of Solitude\"\r\n				src=\"https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1327881361l/320.jpg\"\r\n		/&gt;&lt;/a&gt;\r\n	&lt;/div&gt;\r\n	&lt;!--...--&gt;\r\n&lt;/div&gt;</code></pre>\r\n\r\n<p>to get the link of the image you can write:</p>\r\n\r\n<pre>\r\n<code class=\"language-javascript\">const image = $(\'.bookCoverContainer #coverImage\').attr(\'src\');</code></pre>\r\n\r\n<p>or Simply:</p>\r\n\r\n<pre>\r\n<code class=\"language-javascript\">const image = $(\'#coverImage\').attr(\'src\');</code></pre>\r\n\r\n<p>&lt;h2&gt;Getting the average stars &lt;/h2&gt;</p>\r\n\r\n<p>Let make this a little more fun. Suppose you wanted to get the average book rating, all the comments are under the div with the &ldquo;bookReviews&rdquo; id, each comment has a span with the class &ldquo;staticStars&rdquo; with the title attribute of either</p>\r\n\r\n<pre>\r\n<code>did not like it -&gt; 1 star\r\nit was ok -&gt; 2 stars\r\nliked it -&gt; 3 stars\r\nreally liked it -&gt; 4 stars\r\nit was amazing -&gt; 5 stars</code></pre>\r\n\r\n<p>to get the average number of stars for the book you have to iterate through all the comments and divide the sum of their stars with the number of comments.</p>\r\n\r\n<pre>\r\n<code class=\"language-javascript\">let numOfComments = 0;\r\nlet sumOfStars = 0;\r\n\r\n$(\'#bookReviews .friendReviews\').each((_, e) =&gt; {\r\n	numOfComments++;\r\n	switch (\r\n		$(e)\r\n			.children(\'div\')\r\n			.children(\'div\')\r\n			.children(\'div\')\r\n			.children(\'div\')\r\n			.children(\'span:eq(1)\')\r\n			.attr(\'title\')\r\n	) {\r\n		case \'did not like it\':\r\n			sumOfStars += 1;\r\n			break;\r\n		case \'it was ok\':\r\n			sumOfStars += 2;\r\n			break;\r\n		case \'liked it\':\r\n			sumOfStars += 3;\r\n			break;\r\n		case \'really liked it\':\r\n			sumOfStars += 4;\r\n			break;\r\n		case \'it was amazing\':\r\n			sumOfStars += 5;\r\n			break;\r\n	}\r\n});\r\n\r\nif (numOfComments &gt; 0) console.log(sumOfStars / numOfComments);</code></pre>\r\n\r\n<p>The result was 4.03.</p>\r\n\r\n<p>You can learn more about querying at the &lt;a href=&quot;https://api.jquery.com/&quot;&gt;JQuery documentation&lt;/a&gt;</p>\r\n\r\n<p>&lt;h2&gt;Conclusion &lt;/h2&gt;</p>\r\n\r\n<p>This is all you need to get started scrapping with Cheerio JS! Scrapping is more about creativity and experimentation than algorithm cunningness (most of the functions are written for you), and the limits are endless, so go forth and scrape.</p>\r\n\r\n<p>&lt;h1&gt;Tips and Side Notes &lt;/h1&gt;</p>\r\n\r\n<ul>\r\n	<li>You should change the User-Agent to look less suspicous.</li>\r\n</ul>\r\n\r\n<pre>\r\n<code class=\"language-javascript\">const result = await axios.get(\'https://example.com\', {\r\n	headers: {\r\n		\'User-Agent\': \'Opera/8.67 (X11; Linux x86_64; en-US) Presto/2.10.178 Version/11.00\',\r\n	},\r\n});</code></pre>\r\n\r\n<ul>\r\n	<li>The data text you get from an element may sometimes contain extra padding, so you should remove it.</li>\r\n</ul>\r\n\r\n<pre>\r\n<code class=\"language-javascript\">let text = $(\'h1\').text();\r\ntext = text.trim();</code></pre>\r\n\r\n<ul>\r\n	<li>Traversing the DOM with the children() function is error prone and looks messy so you should write a function that parses text into the element you want. Mine is</li>\r\n</ul>\r\n\r\n<pre>\r\n<code class=\"language-javascript\">const genElement = (s: string, e: string) =&gt; {\r\n	if (s == \'\') return;\r\n	const $ = load(e);\r\n	let i = 0;\r\n	let str = \'\';\r\n	let el = $();\r\n	for (; i &lt; s.length; i++) {\r\n		if (s[i] == \' \') {\r\n			el = $(str);\r\n			str = \'\';\r\n			i++;\r\n			break;\r\n		}\r\n		str += s[i];\r\n	}\r\n	for (; i &lt; s.length; i++) {\r\n		if (s[i] == \' \') {\r\n			el = $(el).children(str);\r\n			str = \'\';\r\n			continue;\r\n		}\r\n		str += s[i];\r\n	}\r\n	el = $(el).children(str);\r\n	return el;\r\n};</code></pre>\r\n\r\n<p>you can use it like</p>\r\n\r\n<pre>\r\n<code class=\"language-javascript\">$(genElement(\'div table tbody tr td div div a img\', $(e).html() ?? \'\'));</code></pre>\r\n\r\n<ul>\r\n	<li>\r\n	<p>f you write right click on any page and click &ldquo;View page source&rdquo;, a new tab with the website&rsquo;s source will be nicely displayed.</p>\r\n	</li>\r\n	<li>\r\n	<p>Modern websites are dynamic, so there is a high chance that your code will break in a couple of months, if not a couple of weeks.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>You&#39;re Welcome</p>', 'joashagesa@yahoo.com', '2023-04-03 16:13:00', 0, 0, 4, 0),
(17, 'tohgi48wv2e022cilp7n', 'Making QR codes using Python.', '<p>import qrcode</p>\r\n\r\n<p><br />\r\ntext = &quot;Hello, world!&quot;</p>\r\n\r\n<p><br />\r\nqr = qrcode.QRCode(version=1, box_size=10, border=4)<br />\r\nqr.add_data(text)<br />\r\nqr.make(fit=True)</p>\r\n\r\n<p><br />\r\nimg = qr.make_image(fill_color=&quot;black&quot;, back_color=&quot;white&quot;)<br />\r\nimg.save(&quot;my_qr_code.png&quot;)<br />\r\n&nbsp;</p>', 'yatunyi.15075@students.kyu.ac.ke', '2023-04-03 21:20:10', 0, 0, 3, 0),
(18, 'qi7hpgl5k3golc9pmi0t', 'How to Learn Programming Effectively: Using Question Driven Development as Your Best Approach', '<p>Hello! As a programmer, I highly recommend using Question Driven Development (QDD) as a way to learn how to program effectively. QDD involves actively engaging with the material by asking questions and seeking answers, instead of simply following tutorials or reading books.</p>\r\n\r\n<p>By starting with a problem or question and using available resources to solve it, learners can develop their programming and problem-solving skills. QDD also encourages self-sufficiency and boosts confidence in one&#39;s abilities.</p>\r\n\r\n<p>Have you tried using QDD before? I&#39;d love to hear about your experiences and thoughts in the comments below!</p>', 'alvo967@gmail.com', '2023-04-07 12:33:36', 0, 0, 5, 0),
(19, '2hy30mb6hsn4l6mkfodc', 'How to configure load balancing on Mikrotik routers for Two different ISPs', '<p>Assign IP addresses</p>\r\n\r\n<p>/ip address add address=172.16.10.1/24 network=172.16.10.0 broadcast=172.16.10.255 interface=LAN add address=192.168.1.2/30 network=192.168.1.0 broadcast=192.168.1.3 interface=ISP1 add address=192.168.2.2/30 network=192.168.2.0 broadcast=192.168.2.3 interface=ISP2</p>\r\n\r\n<p>Set default gateways for unmarked connections</p>\r\n\r\n<p>/ip route add dst-address=0.0.0.0/0 check-gateway=ping gateway=192.168.1.1,192.168.2.1</p>\r\n\r\n<p>Nat rules for traffics out both ISPs connections</p>\r\n\r\n<p>/ip firewall nat add action=masquerade chain=srcnat comment=&rdquo;ISP1&Prime; out-interface=ether1 add action=masquerade chain=srcnat comment=&rdquo;ISP2&Prime; out-interface=ether2</p>\r\n\r\n<p>Mark inbound connections</p>\r\n\r\n<p>/ip firewall mangle add action=mark-connection chain=input comment=&rdquo;ISP1_Inbound&rdquo; in-interface=ether1 new-connection-mark=&rdquo;ISP1_Inbound&rdquo; add action=mark-connection chain=input comment=&rdquo;ISP2_Inbound&rdquo; in-interface=ether2 new-connection-mark=&rdquo;ISP2_Inbound&rdquo;</p>\r\n\r\n<p>Use Route Mark for outbound connections</p>\r\n\r\n<p>/ip firewall mangle add action=mark-routing chain=output comment=&rdquo;ISP1_Outbound&rdquo; connection-mark=&rdquo;ISP1_Inbound&rdquo; new-routing-mark=&rdquo;ISP1_Outbound&rdquo; add action=mark-routing chain=output comment=&rdquo;ISP2_Outbound&rdquo; connection-mark=&rdquo;ISP1_Inbound&rdquo; new-routing-mark=&rdquo;ISP2_Outbound&rdquo;</p>\r\n\r\n<p>Setting route marks for LAN connections</p>\r\n\r\n<p>/ip firewall mangle add action=mark-routing chain=prerouting comment=&rdquo;LAN load balancing 2-0&Prime; dst-address-type=!local in-interface=ether3 new-routing-mark=&rdquo;ISP1_Outbound&rdquo; passthrough=yes per-connection-classifier=both-addresses-and-ports:2/0 add action=mark-routing chain=prerouting comment=&rdquo;LAN load balancing 2-1&Prime; dst-address-type=!local in-interface=ether3 new-routing-mark=&rdquo;ISP2_Outbound&rdquo; passthrough=yes per-connection-classifier=both-addresses-and-ports:2/1</p>\r\n\r\n<p>Setting default routes</p>\r\n\r\n<p>/ip route add distance=1 gateway=192.168.1.1 routing-mark=&rdquo;ISP1_Outbound&rdquo; add distance=1 gateway=192.168.2.1 routing-mark=&rdquo;ISP2_Outbound&rdquo;</p>', 'alvo967@gmail.com', '2023-04-10 12:47:29', 0, 1, 2, 0),
(40, 'n70sn65l3z71ots1ednz', 'document.getElementsByTagName(\"body\")[0].style.display=\'none\'', 'Hello', 'ndungujoseph@gmail.com', '2023-05-21 14:54:45', 0, 0, 1, 0),
(41, 'y5b8ov3wrcqk2abjwqbj', '....', '..&lt;img src=x&gt;..', 'ndungujoseph1@gmail.com', '2023-05-22 08:44:24', 0, 4, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `ID` int(11) NOT NULL,
  `devkdfid` varchar(500) NOT NULL,
  `fulnames` text NOT NULL,
  `email` varchar(500) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `Deviters` int(11) NOT NULL,
  `Devees` int(11) NOT NULL,
  `profilepic` varchar(500) NOT NULL,
  `resetpassword` varchar(500) NOT NULL
);

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`ID`, `devkdfid`, `fulnames`, `email`, `username`, `password`, `Deviters`, `Devees`, `profilepic`, `resetpassword`) VALUES
(1, '-1449048510', 'Alvin Kiveu', 'alvo967@gmail.com', 'CeoOfUmeskiaSoftwares', '$2y$10$XiES1E7mjt.Bj9eZxkm06uS4xogj6vTQvODpPYdcfmQNCXu7h4rDK', 9, 7, '1679399813profile.jpeg', ''),
(2, '238162291', 'KeDevForum', 'umeskiasoftwares@gmail.com', 'kedevforum', '$2y$10$RMGNjz2tZ/HWZ/qODxAfwu1lBcL2NI6ZrllMpSJaIjSvyA/3I1xcy', 3, 9, '1679400542IMG-20230317-WA0000.jpg', ''),
(3, '-568969589', 'James Kariuki', 'devjameskw@gmail.com', 'jimna', '$2y$10$FE9uVQ3jKH8HZSPVjApCLezsgl77ujQXe17yF6Pdb/d6KZwoKn3Mi', 9, 0, '1679410078profile.jpg', ''),
(4, '-154965052', 'Godfrey', 'gmukira78@gmail.com', 'Godfrey', '$2y$10$omjp//VRJJaHQMtB.3NCB.sqgf2Vz60u04Ha65jAKsoI0ZPCHsSD6', 0, 1, '', ''),
(5, '-2042027001', 'Kimita wanjohi', 'kimitawanjohi7923@gmail.com', 'thatkim', '$2y$10$ToLjkj3EINkE764zt5i5CeNodPKiLih75L/STXh.nFcX4F.WNUa2u', 3, 0, '1679414789wp11457078-tanjiro-demon-form-wallpapers.png', ''),
(6, '686324790', 'JKSoftwares', 'johnstonekipkosgei31@gmail.com', 'JKSoftwares', '$2y$10$zeYsEWLyd8oq7D34eweO2Owj1yBXxUipW.31ZrsAKlabS8/RczKOe', 6, 0, '', ''),
(7, '1332286462', 'Emmanuel onwong\'a Paul', 'eonwonga99@gmail.com', '@eonwonga', '$2y$10$PKoB6VQa957wGtelZel0FOn0pasc/TxlIxNn3EFYPJQUU.AkTX0bm', 1, 0, '', ''),
(8, '617722215', 'Issah Awadh', 'issahbreezy0@gmail.com', 'Issahbreezy', '$2y$10$jZGQrelU.uvCrmGLouy9oO3gfzQlqQV2Sp4bHieT6g646nFEoEd1W', 3, 0, '', ''),
(9, '1927778552', 'Dazzer Gazelle', 'dollackip99@gmail.com', 'DapperGazelle473', '$2y$10$i8wo3VpjZxMN898IgNGiROx00PLaa5iIFnvGSX0XHsgOVs8FRtVFC', 0, 0, '', ''),
(10, '-1133477524', 'Kelvin Nzioka', 'kkelvinnzioka@gmail.com', 'algomasterr', '$2y$10$bNrDb4tGutzntkqEiw8DQuM.bLJynSt46.mdFxIMQxI5Ka8phW/Au', 3, 0, '16794385601669356085414.jpg', ''),
(11, '1255888991', 'Koome Alessandro', 'koomealessandro@gmail.com', 'Sandro', '$2y$10$L6SzkpNv48oH7k40NlEQiOdJf7wsXneJjvDID8pZYFBAOigU98i8O', 0, 1, '168087680820221015191645_IMG_7233.jpg', ''),
(12, '67045303', 'Dev CrazyKid', 'softtech.spyhacker@gmail.com', 'Dr.CrazyKid', '$2y$10$DGzqFh61ehUP3qxqrU5PiOA/wX8FlC55YhfWylZmw5W..CJTBA4YS', 0, 7, '1681167287Screenshot_20230314-224826.jpg', ''),
(13, '425272368', 'Wamutitu njoroge', 'wamtitujose@gmail.com', 'wamtitu', '$2y$10$jnqy.sYNQaySuqXhP/MpIefQi0cdl6RMYB6vmRyLSRHaUNlHzC/4i', 0, 5, '', ''),
(14, '-56560341', 'Bwire Timothy', '20bwire@gmail.com', 'T_Bro', '$2y$10$.OL11Q4GWNYSpVcAT8nmdO0xA64Y1YkAxwx9m./nezYEb1k7uPuea', 0, 0, '1679449285-6084673940996860797_121.jpg', ''),
(15, '190046538', 'Linton Edimund', 'lintonli162@gmail.com', 'LintonMaina', '$2y$10$vEBVJlimVVgUnN6aeYXyluIUVYJ0MJTMj2YFvEeD1JDqUUuCETpc.', 0, 1, '', ''),
(16, '-1880997435', 'Evans Kithega', 'evanskithega@gmail.com', 'ubnt', '$2y$10$gd.XWRjItR4CJTHgrYaQTewbj8oBA6f8L7PiseQTjO9oQnYzrfGLy', 0, 0, '', ''),
(17, '-592114957', 'Lvy', 'lvynyambura049@gmail.com', 'Lvy', '$2y$10$YSh.yrXq4pfPILQvsHlTd.aA3HFYY/iQFHKFucr/YmEPy/HKg17Ea', 0, 0, '', ''),
(18, '-1895707842', 'Gabriel_evans', 'gabrielevans418@gmail.com', 'gabriel_evans', '$2y$10$W1Lq52rsk.MgalxGigLqLuXSlC8WA0hSfO3wa3nJV83DvWQU.reh.', 1, 0, '', ''),
(19, '-1824575292', 'James Wambua', 'jwambua055@gmail.com', 'lone', '$2y$10$sURk4VrHdEmm8eeMhURVo.vkNSaNHNKiavmT49rhpCfS31/78Yls2', 1, 0, '1679477328317845354_553111726166502_2403087339906065109_n.webp', ''),
(20, '-1726829210', 'Michael Wayne', 'kromwell005@gmail.com', 'waynekm', '$2y$10$L13R9qESPq1ubRBuvNOWIe0sr5sK/.rHc0S2vBAt8fA2/xV5qPcr.', 1, 3, '16796878101.png', ''),
(21, '1373515683', 'Nathan', 'nathaniechuma96@gmail.com', 'Nathan', '$2y$10$WOdGU5Q7RirH04Yyok//TOksZG.nhv8Mk1SoicFa2EvAHKXbqbAb2', 0, 0, '', ''),
(22, '-1934291095', 'Innocent mwaniki', 'zumntavon@gmail.com', 'Zumnta', '$2y$10$jHeGWD1yDM3XEquVLVZYBe0CoS7yc1pIbY8ce8J0wztgnGbb9Of4y', 0, 0, '', ''),
(23, '1053194132', 'Benson mathu', 'mathubenson712@gmail.com', 'vinniebenson', '$2y$10$jGDvSxF7vu3TjqzGrLoLOu4MVS26M6wGb4sKU309aOD5pdz4GucQ.', 0, 0, '', ''),
(24, '2085749061', 'Sam wam', 'wamugisamuel03@gmail.com', 'Toxi', '$2y$10$nopKzJ759v6MeIe7L10AIe7JJ5trTBdUho8DU15NwXcwj/s8T5fr.', 0, 0, '', ''),
(25, '-1934583898', 'Muriithi Samuel Kirogo', 'muriithi11892@gmail.com', 'Kirogo', '$2y$10$2kC06KnEAh5DaN8e1ajk3eQyrHEzz1.BhkzWGPkF0LdHMZfCbJ3AS', 0, 0, '1679493334827547 (1).png', ''),
(26, '1874024433', 'Street_legal', 'tevingathu@gmail.com', 'street_legal', '$2y$10$H8DFR7pHz5qg0IIuFg.JVe7iwkHtLXE4.sGrigQL4PAU97a.wJfm.', 0, 0, '', ''),
(27, '997343609', 'Mike Posner', 'seweenold@gmail.com', 'MikePosner', '$2y$10$VSGRZuJj0CnfLWuAkuaTP.Cl8w.nt2e8/hx7YNa5S7WcEOww5YSZq', 0, 2, '1679505431connor-coyne-OgqWLzWRSaI-unsplash.jpg', ''),
(28, '-878135053', 'Just Boogie', 'amososwom162@gmail.com', 'Boogie', '$2y$10$10xFN5fIOQYUI07yrKOSwu.Gdy0OpOe1lnpt1ALOkgRmvwOfrXv86', 0, 0, '1679507276amoh.jpg', ''),
(29, '-1230615414', 'Julie Gathoni', 'itsmegathoni@gmail.com', 'Gathoni', '$2y$10$X/IfseWJOTN50SFfT/eHFugrXqHmx8DTzs/qyMs6Mrn09jVsV27E6', 0, 0, '', ''),
(30, '1676850661', 'Jared Andika', 'andikajared255@gmail.com', 'Kalinitech', '$2y$10$ZIxCoLZUBUGMqIW1xddzrOTZKaz14hIYUGd2hGST/ncV57p5JvGU.', 0, 0, '167952594420221104_140918.jpg', ''),
(31, '1849341073', 'Erick Mburu', 'mburuerick387@gmail.com', 'Stalliz', '$2y$10$SnaYxCso9GcVyP/8s1GCs.QWGIDWo6yeBlcF48qr.ITQjo6hdnBmO', 0, 0, '', ''),
(32, '1187955092', 'Njuguna Benjamin', 'projectbuild201@gmail.com', 'BENJA', '$2y$10$KgSrXEl4X.iCde8qS2z3Ruy6eKJBjbHWH8ABMYUtsVH/9OwBbA/Kq', 0, 0, '1679562621Larzish [Kimetsu no Yaiba x Reader].jpg', ''),
(33, '-1877496027', 'Rachel wanga', 'rachelwanganyawira2@gmail.com', 'Ray', '$2y$10$eyg/tCFessQ4fFrigRvHN.3SZ.ECBpiVbMjGz.wqDrXz3Nidf4WzO', 0, 0, '', ''),
(34, '-1914788049', 'Bonfas oluoch', 'oluochbonfas68@gmail.com', 'Boncode', '$2y$10$D6tJPv5/SWCZZkaDiIB2NObfHq3RgZprZXY4M2Mc3x/vLh5Fzf7r6', 1, 0, '', ''),
(35, '747711566', 'Duke m legend', 'angwenyiduke01@gmail.com', 'mlegend', '$2y$10$z1b6g8D9yTu68lu0YzI2Mun92N.SpZrjbLzrXiqMzIE7GkAySGMG6', 0, 6, '1679601921Screenshot_20230323-230449.png', ''),
(36, '-62202566', 'Purity', 'purityirungu39@gmail.com', 'Purity1210', '$2y$10$tGiZbhvltJTRWd2OnWgTZOsuD.OmwYm1UHF5MXES/gK8LUOnsjssO', 1, 0, '', ''),
(37, '-975394032', 'Karimi', 'kimamogeorge69@gmail.com', 'Karimi', '$2y$10$QBeQ8Hv.20CFRHTk3o.qn.HFPhSSum8Mh21ntRiiAqMFlqqhDCIKy', 0, 0, '', ''),
(38, '-2038676964', 'YATUNYI BRIAN ONDEKO', 'yatunyi.15075@students.kyu.ac.ke', 'Brian', '$2y$10$BcTZJvf6qX66W6.zK2F0P.GQ7v9VzOaUJgHwndAEt52DU3NPwcdze', 2, 0, '1679658231orsrc61493.jpg', ''),
(39, '-1505935015', 'Sasa', 'sasa@gmail.com', 'sasa', '$2y$10$ztlSF0iYP3sEEu8c/leceOepBWFdHsK96itzDX2xk8mm4v6vgQDpG', 0, 0, '', ''),
(40, '1180266343', 'BRIAN KARANJA', 'karanjabrian298@gmail.com', 'cyb3r_arson', '$2y$10$w9UHfNZ2uqfDCu7wRoym4ebBJ5DFhyNddxLoicK5OAh1j2SsHoDP.', 0, 0, '', ''),
(41, '1175689070', 'Job Samuel', 'wafulasamueljob21@gmail.com', 'Jswafula', '$2y$10$IUM02prQuN1LRfOHToNkMuRUGGdTOxEddWOClEe2gxYjAhaqLdX0u', 0, 0, '', ''),
(42, '1349912207', 'Bryan Giitwa', 'bryancybertech@gmail.com', 'bryan', '$2y$10$Bq2v9lCXElncquKF4g9j7umerRXd3uoeUNf/oGAEzwUkEN8iTDeti', 0, 0, '', ''),
(43, '2112725171', 'Stephen Kihuni', 'Stephenkihuni55@gmail.com', 'kihuni', '$2y$10$bUxCkmvafIjaAaF8Hmh1PO.mmeLBftfo8YOLkU5.1bnrwHJi/48oi', 0, 0, '', ''),
(44, '-369437600', 'Zack', 'orikingsols@gmail.com', 'Oriking', '$2y$10$1/uFImv.KsaO/Giejk7OGelu8b1.FzXH7Hsp6j3w1vAZztjR29xSa', 0, 0, '', ''),
(45, '-524062525', 'Engineer murithi', 'murithiengineer6155@gmail.com', 'muri', '$2y$10$.wZbxEJfZjaquixxoOS36OIo1o/SIeXd1NhZ.PnLnc7y35I8Ob.ay', 0, 0, '', ''),
(46, '-1473276209', 'John Mwenda', 'lewie398@gmail.com', 'JaxxBriggs', '$2y$10$EFa2G9PeMJauiaYZedj/qeX9tTeahHAe8YM51gM5PC9jaIgsePBE6', 0, 0, '', ''),
(47, '2027279151', 'Moses Nyaga', 'njerumoses17@gmail.com', 'njerumoses17', '$2y$10$FicvL.sYSmLXUU4m.f5s1OWpVhQcS.mc/YqT5zdsp/a7KFxy1jc06', 0, 1, '16803426101632765246171.jpg', ''),
(48, '-409573', 'Victor Kipkoech', 'kivoech@gmail.com', 'Victor', '$2y$10$.2ZI9ixlVYVtrLqj3h9WFe4RkGkkD4yiEIall2D50DuIC/WnJ0.C2', 0, 0, '', ''),
(49, '1124527570', 'Judy chelangat', 'judieysiggy@gmail.com', 'judieysiggy', '$2y$10$/lnB1RehEpEdspHIeuRmCOT91Oe3AfPB1kysaKz6wn1Tv1sdK51dq', 0, 0, '', ''),
(50, '1996265235', 'Joash Agesa', 'joashagesa@yahoo.com', 'JoashAguvasu', '$2y$10$3EBQkM6edRASIZT0sf0qC.GVipiSwgiuUrBVchfC73ThHBnpXilkW', 1, 2, '1680539385Django the Cat.gif', ''),
(51, '-1670628909', 'MAXWELL NJOROGE', 'njorogemaxwell6@gmail.com', 'Maxwell', '$2y$10$/ovzeX6chZao5B3fwR9nAe82xsyVokjttAAzjjq5R4uzxRxT6Suiq', 0, 0, '', ''),
(52, '1049275742', 'Victor kipyegon', 'kipyegon722@gmail.com', 'Brijavi', '$2y$10$EgZsPOptswj1vmmns18M5.0HHkQkjyKTXeCgvW90LvD.L16UwMhLG', 0, 0, '', ''),
(53, '1230087154', 'Viki Mariz', 'victorkim6.vk@gmail.com', 'Mariz', '$2y$10$EjsZqcFBWmmMMVOtraBufuPYxIh3lR7b53NVZy0KRg5T1KjxS8QYa', 0, 0, '', ''),
(54, '1017491852', 'Tim Nyakundi', 'nyakunditimpatrick@gmail.com', 'Teeskillz', '$2y$10$md0tpUchBx.Uh6XA35/g4OgSKTiEqZ3MJDddnNxWhvhRczrvy7M62', 0, 0, '', ''),
(55, '2005896897', 'Milla Jesso', 'millajesso2000@gmail.com', 'm_j_b_o', '$2y$10$XpwU21mvJkbuX/z.ExSIh.3vBuC/.OF0.yAjpN8v5yJlddRsyTBoW', 0, 0, '', ''),
(56, '2023849656', 'Ndung Joseph', 'ndungujoseph0000@gmail.com', 'ndungu', '$2y$10$M7FlTdV7NtV.wT9ON9D9XuxTVr2KvE4o0LuuS07geq9b6A/ceG8b.', 1, 0, '', ''),
(57, '-642541437', 'Ndung Joseph', 'ndungujoseph@gmail.com', 'ndungu2', '$2y$10$ZOplGvxITek/dRXHCfCKkeynx3ES2cxL3Sqd0Xg/Lo0bABtHuiu7e', 0, 1, '', ''),
(58, '612078350', 'umesjjaja', 'umeskia@gmail.com', 'umeskia', '$2y$10$bjRo0b3rBW5.LXEZiF6U8eXxZlX6PcQgyfZ5aSAGA.cs//TYDX8pu', 0, 1, '', ''),
(59, '-959906750', 'Joseph', 'ndungujoseph00@gmail.com', '&lt;imgsrc=xonerror=alert(document.cookie)&gt;', '$2y$10$lnuBt4HQAnyTfZx64jd4yOm9dr7HzqtmIiL047gel5pr73KVZw5/W', 1, 0, '', ''),
(60, '-2006877269', '&lt;img src=x&gt;', 'ndungujoseph1@gmail.com', '&lt;imgsrc=x&gt;', '$2y$10$IOJFZJtcBDKly52GPFQh.uPaawZMmTg7b8OhXdXx6D77N3eS2NWma', 0, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `ID` int(11) NOT NULL,
  `usernotified` varchar(500) NOT NULL,
  `usernotifer` varchar(500) NOT NULL,
  `notificatointype` varchar(500) NOT NULL,
  `notificationmessage` text NOT NULL,
  `notificationtime` varchar(500) NOT NULL,
  `notificationstatus` text NOT NULL
);

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`ID`, `usernotified`, `usernotifer`, `notificatointype`, `notificationmessage`, `notificationtime`, `notificationstatus`) VALUES
(1, '-1449048510', '238162291', 'deviter', 'added you as a deviter', '2023-03-21 12:09:30', 'read'),
(2, '-1449048510', '238162291', 'divitup', 'devitup your devit', '2023-03-21 12:11:22', 'read'),
(3, '-1449048510', '-568969589', 'divitup', 'devitup your devit', '2023-03-21 13:23:36', 'read'),
(4, '238162291', '-568969589', 'divitup', 'devitup your devit', '2023-03-21 13:27:51', 'read'),
(5, '-568969589', '238162291', 'deviter', 'added you as a deviter', '2023-03-21 15:27:30', 'read'),
(6, '238162291', '238162291', 'divitup', 'devitup your devit', '2023-03-21 15:28:19', 'read'),
(7, '-568969589', '238162291', 'divitup', 'devitup your devit', '2023-03-21 15:31:00', 'read'),
(8, '-568969589', '238162291', 'comment', 'has commented on your devit', '2023-03-21 15:39:47', 'read'),
(9, '-568969589', '-154965052', 'divitup', 'devitup your devit', '2023-03-21 15:45:28', 'read'),
(10, '238162291', '-154965052', 'divitup', 'devitup your devit', '2023-03-21 15:45:58', 'read'),
(11, '-568969589', '-154965052', 'deviter', 'added you as a deviter', '2023-03-21 15:48:39', 'read'),
(12, '238162291', '686324790', 'divitup', 'devitup your devit', '2023-03-21 16:22:35', 'read'),
(13, '686324790', '238162291', 'deviter', 'added you as a deviter', '2023-03-21 19:32:13', 'unread'),
(14, '617722215', '238162291', 'deviter', 'added you as a deviter', '2023-03-21 20:49:45', 'unread'),
(15, '-568969589', '-2042027001', 'comment', 'has commented on your devit', '2023-03-21 20:54:35', 'read'),
(16, '-568969589', '-1449048510', 'divitup', 'devitup your devit', '2023-03-21 21:31:58', 'read'),
(17, '-568969589', '-1449048510', 'comment', 'has commented on your devit', '2023-03-21 21:34:39', 'read'),
(18, '-568969589', '-1449048510', 'deviter', 'added you as a deviter', '2023-03-21 21:35:56', 'read'),
(19, '-1449048510', '-1133477524', 'comment', 'has commented on your devit', '2023-03-21 22:39:17', 'read'),
(20, '238162291', '-1449048510', 'divitup', 'devitup your devit', '2023-03-21 22:51:25', 'read'),
(21, '-1449048510', '-1449048510', 'divitup', 'devitup your devit', '2023-03-21 22:51:29', 'read'),
(22, '-1133477524', '-1449048510', 'deviter', 'added you as a deviter', '2023-03-21 22:55:18', 'read'),
(23, '617722215', '-1449048510', 'deviter', 'added you as a deviter', '2023-03-21 22:55:29', 'unread'),
(24, '-1449048510', '1255888991', 'divitup', 'devitup your devit', '2023-03-21 22:57:39', 'read'),
(25, '238162291', '1255888991', 'divitup', 'devitup your devit', '2023-03-21 22:57:42', 'read'),
(26, '-568969589', '1255888991', 'divitup', 'devitup your devit', '2023-03-21 22:57:45', 'read'),
(27, '-568969589', '67045303', 'deviter', 'added you as a deviter', '2023-03-21 23:02:53', 'read'),
(28, '-2042027001', '67045303', 'deviter', 'added you as a deviter', '2023-03-21 23:03:04', 'read'),
(29, '238162291', '67045303', 'deviter', 'added you as a deviter', '2023-03-21 23:03:08', 'read'),
(30, '-1449048510', '67045303', 'deviter', 'added you as a deviter', '2023-03-21 23:03:23', 'read'),
(31, '686324790', '67045303', 'deviter', 'added you as a deviter', '2023-03-21 23:03:26', 'unread'),
(32, '-1133477524', '67045303', 'deviter', 'added you as a deviter', '2023-03-21 23:03:40', 'read'),
(33, '-2042027001', '-1449048510', 'deviter', 'added you as a deviter', '2023-03-21 23:14:04', 'read'),
(34, '-1449048510', '425272368', 'divitup', 'devitup your devit', '2023-03-21 23:23:26', 'read'),
(35, '-568969589', '425272368', 'divitup', 'devitup your devit', '2023-03-21 23:25:18', 'read'),
(36, '-568969589', '-56560341', 'divitup', 'devitup your devit', '2023-03-22 01:38:30', 'read'),
(37, '-1449048510', '-56560341', 'divitup', 'devitup your devit', '2023-03-22 01:39:07', 'read'),
(38, '238162291', '-56560341', 'divitup', 'devitup your devit', '2023-03-22 01:46:27', 'read'),
(39, '-1449048510', '-56560341', 'comment', 'has commented on your devit', '2023-03-22 01:47:42', 'read'),
(40, '-568969589', '-2042027001', 'divitup', 'devitup your devit', '2023-03-22 03:28:58', 'read'),
(41, '-1449048510', '-2042027001', 'divitup', 'devitup your devit', '2023-03-22 03:29:23', 'read'),
(42, '-1449048510', '-2042027001', 'comment', 'has commented on your devit', '2023-03-22 03:51:40', 'read'),
(43, '-568969589', '190046538', 'divitup', 'devitup your devit', '2023-03-22 05:50:45', 'unread'),
(44, '-1449048510', '190046538', 'comment', 'has commented on your devit', '2023-03-22 05:55:03', 'read'),
(45, '-1449048510', '-1880997435', 'divitup', 'devitup your devit', '2023-03-22 06:06:56', 'read'),
(46, '-568969589', '-1880997435', 'divitup', 'devitup your devit', '2023-03-22 06:07:05', 'unread'),
(47, '-1449048510', '-1880997435', 'comment', 'has commented on your devit', '2023-03-22 06:09:13', 'read'),
(48, '-1824575292', '-1449048510', 'deviter', 'added you as a deviter', '2023-03-22 10:10:36', 'unread'),
(49, '-1449048510', '-1726829210', 'divitup', 'devitup your devit', '2023-03-22 10:15:20', 'read'),
(50, '238162291', '-1726829210', 'divitup', 'devitup your devit', '2023-03-22 10:18:00', 'unread'),
(51, '-568969589', '-1934291095', 'divitup', 'devitup your devit', '2023-03-22 10:53:28', 'unread'),
(52, '-1449048510', '2085749061', 'divitup', 'devitup your devit', '2023-03-22 12:50:59', 'read'),
(53, '-1449048510', '997343609', 'deviter', 'added you as a deviter', '2023-03-22 17:18:09', 'read'),
(54, '-1449048510', '-878135053', 'divitup', 'devitup your devit', '2023-03-22 17:48:42', 'read'),
(55, '-1449048510', '1676850661', 'divitup', 'devitup your devit', '2023-03-22 22:24:30', 'read'),
(56, '-1449048510', '-1133477524', 'divitup', 'devitup your devit', '2023-03-23 19:36:51', 'read'),
(57, '-1726829210', '747711566', 'deviter', 'added you as a deviter', '2023-03-23 20:06:22', 'read'),
(58, '-1449048510', '747711566', 'deviter', 'added you as a deviter', '2023-03-23 20:06:36', 'read'),
(59, '-1133477524', '747711566', 'deviter', 'added you as a deviter', '2023-03-23 20:06:53', 'unread'),
(60, '1332286462', '747711566', 'deviter', 'added you as a deviter', '2023-03-23 20:07:03', 'unread'),
(61, '-1914788049', '747711566', 'deviter', 'added you as a deviter', '2023-03-23 20:07:36', 'read'),
(62, '238162291', '747711566', 'deviter', 'added you as a deviter', '2023-03-23 20:07:54', 'unread'),
(63, '-1449048510', '747711566', 'divitup', 'devitup your devit', '2023-03-23 20:09:04', 'read'),
(64, '-1449048510', '747711566', 'comment', 'has commented on your devit', '2023-03-23 20:11:12', 'read'),
(65, '-1449048510', '-2038676964', 'divitup', 'devitup your devit', '2023-03-24 11:40:56', 'read'),
(66, '-2038676964', '-2038676964', 'divitup', 'devitup your devit', '2023-03-24 12:00:14', 'read'),
(67, '2085749061', '-2038676964', 'deviter', 'added you as a deviter', '2023-03-24 12:05:32', 'unread'),
(68, '-1449048510', '-2038676964', 'comment', 'has commented on your devit', '2023-03-24 12:27:35', 'read'),
(69, '-2038676964', '-1449048510', 'divitup', 'devitup your devit', '2023-03-24 14:41:15', 'read'),
(70, '-2038676964', '-1449048510', 'deviter', 'added you as a deviter', '2023-03-24 14:43:03', 'read'),
(71, '-2038676964', '-1726829210', 'divitup', 'devitup your devit', '2023-03-24 19:40:54', 'read'),
(72, '-568969589', '-1726829210', 'divitup', 'devitup your devit', '2023-03-24 19:41:24', 'unread'),
(73, '-1449048510', '-1726829210', 'deviter', 'added you as a deviter', '2023-03-24 19:57:17', 'read'),
(74, '-568969589', '-1726829210', 'deviter', 'added you as a deviter', '2023-03-24 19:58:06', 'unread'),
(75, '-62202566', '-1726829210', 'deviter', 'added you as a deviter', '2023-03-24 19:59:12', 'read'),
(76, '-1914788049', '-1449048510', 'divitup', 'devitup your devit', '2023-03-24 21:07:03', 'unread'),
(77, '-1914788049', '425272368', 'divitup', 'devitup your devit', '2023-03-26 13:06:16', 'unread'),
(78, '-1449048510', '425272368', 'deviter', 'added you as a deviter', '2023-03-26 13:10:26', 'read'),
(79, '-568969589', '425272368', 'deviter', 'added you as a deviter', '2023-03-26 13:12:11', 'unread'),
(80, '617722215', '425272368', 'deviter', 'added you as a deviter', '2023-03-26 13:13:49', 'unread'),
(81, '-2038676964', '425272368', 'divitup', 'devitup your devit', '2023-03-26 15:00:52', 'read'),
(82, '-2038676964', '425272368', 'deviter', 'added you as a deviter', '2023-03-26 15:06:39', 'read'),
(83, '-1449048510', '1175689070', 'comment', 'has commented on your devit', '2023-03-27 07:04:48', 'read'),
(84, '686324790', '-2038676964', 'deviter', 'added you as a deviter', '2023-03-27 13:22:25', 'unread'),
(85, '-2038676964', '1349912207', 'comment', 'has commented on your devit', '2023-03-29 08:35:21', 'read'),
(86, '-1449048510', '1349912207', 'divitup', 'devitup your devit', '2023-03-29 08:42:27', 'read'),
(87, '-1449048510', '-369437600', 'comment', 'has commented on your devit', '2023-03-30 06:24:59', 'read'),
(88, '-2038676964', '-1473276209', 'divitup', 'devitup your devit', '2023-03-30 20:20:07', 'read'),
(89, '-1895707842', '2027279151', 'deviter', 'added you as a deviter', '2023-04-01 09:10:07', 'unread'),
(90, '-2038676964', '-409573', 'divitup', 'devitup your devit', '2023-04-01 09:20:57', 'read'),
(91, '2027279151', '2027279151', 'divitup', 'devitup your devit', '2023-04-01 09:46:50', 'read'),
(92, '-409573', '-1449048510', 'divitup', 'devitup your devit', '2023-04-01 22:29:08', 'unread'),
(93, '2027279151', '-1449048510', 'divitup', 'devitup your devit', '2023-04-01 22:29:11', 'unread'),
(94, '-1449048510', '1124527570', 'divitup', 'devitup your devit', '2023-04-03 08:47:39', 'read'),
(95, '-2042027001', '1996265235', 'deviter', 'added you as a deviter', '2023-04-03 16:26:36', 'unread'),
(96, '-568969589', '1996265235', 'deviter', 'added you as a deviter', '2023-04-03 16:30:30', 'unread'),
(97, '1996265235', '1996265235', 'divitup', 'devitup your devit', '2023-04-03 16:31:44', 'read'),
(98, '1996265235', '-2038676964', 'divitup', 'devitup your devit', '2023-04-03 21:29:11', 'unread'),
(99, '-1914788049', '-2038676964', 'divitup', 'devitup your devit', '2023-04-03 21:29:58', 'unread'),
(100, '-568969589', '190046538', 'deviter', 'added you as a deviter', '2023-04-04 17:44:52', 'unread'),
(101, '1996265235', '-1449048510', 'divitup', 'devitup your devit', '2023-04-04 18:01:42', 'unread'),
(102, '1996265235', '-1449048510', 'deviter', 'added you as a deviter', '2023-04-04 18:02:36', 'unread'),
(103, '-1449048510', '1255888991', 'deviter', 'added you as a deviter', '2023-04-07 14:09:23', 'read'),
(104, '-409573', '1230087154', 'comment', 'has commented on your devit', '2023-04-07 18:28:13', 'unread'),
(105, '1996265235', '-1726829210', 'divitup', 'devitup your devit', '2023-04-10 17:51:43', 'unread'),
(106, '-1449048510', '-1726829210', 'comment', 'has commented on your devit', '2023-04-10 17:53:04', 'read'),
(107, '-2038676964', '67045303', 'divitup', 'devitup your devit', '2023-04-10 22:53:18', 'read'),
(108, '2023849656', '-642541437', 'deviter', 'added you as a deviter', '2023-05-21 13:39:31', 'unread'),
(109, '-1449048510', '612078350', 'divitup', 'devitup your devit', '2023-05-21 14:44:47', 'read'),
(110, '-642541437', '612078350', 'divitup', 'devitup your devit', '2023-05-21 15:09:04', 'unread'),
(111, '-959906750', '612078350', 'deviter', 'added you as a deviter', '2023-05-21 15:12:25', 'unread'),
(112, '-1449048510', '-2006877269', 'comment', 'has commented on your devit', '2023-05-22 08:46:17', 'unread');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `deviters`
--
ALTER TABLE `deviters`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `devitupdown`
--
ALTER TABLE `devitupdown`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `devitviews`
--
ALTER TABLE `devitviews`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `feeds`
--
ALTER TABLE `feeds`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `deviters`
--
ALTER TABLE `deviters`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `devitupdown`
--
ALTER TABLE `devitupdown`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT for table `devitviews`
--
ALTER TABLE `devitviews`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `feeds`
--
ALTER TABLE `feeds`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
