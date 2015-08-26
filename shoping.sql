-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 20, 2012 at 06:12 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shoping`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoryname` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `categoryname`, `description`) VALUES
(34, 'Mobile', 'dsfsfdsf'),
(35, 'Laptop', 'sdfsdfsd'),
(36, 'Desktop', 'dfdsfgdsf'),
(37, 'Software', 'sdfsfdsfs'),
(38, 'Tablet', 'sdfsdfs'),
(39, 'Cameras', 'sadsfdsfnsk');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `orderid` int(11) NOT NULL AUTO_INCREMENT,
  `item` int(3) NOT NULL,
  `totalamt` int(11) NOT NULL,
  `date` date NOT NULL,
  `payment` varchar(255) NOT NULL,
  `userid` int(11) NOT NULL,
  PRIMARY KEY (`orderid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderid`, `item`, `totalamt`, `date`, `payment`, `userid`) VALUES
(6, 2, 268, '2012-11-16', 'cash on delivery', 1),
(7, 2, 268, '2012-11-16', 'cash on delivery', 1),
(8, 2, 268, '2012-11-16', 'cash on delivery', 1),
(9, 2, 1320, '2012-11-16', 'cash on delivery', 1),
(10, 2, 1138, '2012-11-17', 'cash on delivery', 1),
(11, 5, 2510, '2012-11-17', 'cash on delivery', 1),
(12, 2, 268, '2012-11-17', 'cash on delivery', 1),
(13, 3, 734, '2012-11-17', 'cash on delivery', 15),
(16, 1, 123, '2012-11-18', 'cash on delivery', 1),
(17, 1, 321, '2012-11-18', 'cash on delivery', 1),
(18, 1, 321, '2012-11-18', 'cash on delivery', 1),
(19, 1, 321, '2012-11-18', 'cash on delivery', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `productname` varchar(255) NOT NULL,
  `pid` int(11) NOT NULL,
  `ppid` int(11) NOT NULL,
  `imagename` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL,
  `price` varchar(15) NOT NULL,
  `description` varchar(500) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=66 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `productname`, `pid`, `ppid`, `imagename`, `status`, `price`, `description`, `quantity`) VALUES
(42, 'aaa2', 36, 34, 'tech1.jpg', '', '123', 'dfsdfsdfds', 5),
(43, 'aaa3', 37, 34, '3.jpg', '', '145', 'sdfsfsfsdff', 45),
(44, 'bbb1', 38, 35, '4.jpg', '', '456', 'fdsfdsfdfs', 45),
(45, 'zdzad', 39, 35, '1.jpg', '', '124524', 'dsadasdsa', 45),
(46, 'adad', 38, 35, '1.gif', '', '4546', 'dsdsdsds', 45),
(47, 'sdsr', 38, 35, '22ndSep_MontBlanc_homepage.jpg', '', '125', 'fdgdffggdgd', 4578),
(48, 'dvdfg', 38, 35, '8.jpg', '', '4589', 'dfgdfgdfgd', 23),
(49, 'hgjghjg', 38, 35, '6.jpg', '', '1456', 'dsfgertdg', 4578),
(50, 'dsfdg', 38, 35, 'cat2.jpg', '', '45', 'sfsdf', 42),
(51, 'sfdgdg', 38, 35, 'Lotto_watches_M_1_2x_new_1.jpg', '', '363', 'dfgdgdfgdgdfg', 78),
(52, 'sadsad', 40, 36, '2.jpg', '', '125', 'sdsddsdsdsd', 41),
(53, 'vdsfsdf', 43, 37, '3.jpg', '', '125', 'dff', 45),
(54, 'erere', 44, 38, '1.jpg', '', '123', 'erewrwrweer', 78),
(55, 'ewewr', 46, 39, '8.jpg', '', '63', 'rerrwr', 32),
(58, 'sfsf', 36, 34, 'CS05121010_S_M_1_2x.jpg', '', '321', 'dfsfsff', 42),
(59, 'ewrwr', 36, 34, '22ndSep_MontBlanc_homepage.jpg', '', '999', 'rewrwerwrwerwr', 55),
(65, 'kaushal', 36, 34, 'OLAY_TOTAL_EFECTS_DAY_CREAM_NORMAL_SPF15_50_gm_M_1_2x_newnew.jpg', '', '4546', 'sdfdsf', 45);

-- --------------------------------------------------------

--
-- Table structure for table `subcat`
--

CREATE TABLE IF NOT EXISTS `subcat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subcatname` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `pid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `subcat`
--

INSERT INTO `subcat` (`id`, `subcatname`, `description`, `pid`) VALUES
(36, 'a2', 'asdsadsa', 34),
(37, 'a3', 'dada', 34),
(38, 'b1', 'dasds', 35),
(39, 'b2', 'fsdfd', 35),
(40, 'c1', 'dszfsdf', 36),
(41, 'c2', 'dsfcdsfs', 36),
(42, 'd1', 'wdsadsadsad', 37),
(43, 'd2', 'sadsadsads', 37),
(44, 'e1', 'asdsadad', 38),
(45, 'e2', 'asdasdasdsa', 38),
(46, 'f1', 'dsadasd', 39),
(47, 'f2', 'dsadsass', 39);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mno` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user`, `pass`, `email`, `mno`, `address`) VALUES
(1, 'ajay', 'ajay', 'ajayhlovelyh02@gmail.com', 2147483647, 'scfsdsdvdsvdss'),
(2, 'asdasda adasda', '963852741', 'neerajji92@gmail.com', 2147483647, 'dasdsadfssf'),
(3, 'ajay askdsad', '123456789', 'anshul.mishra32@gmail.com', 2147483647, 'sdfsdfsfasdca'),
(4, 'abcde sdsad', 'aaaaaaaaa', 'ajayhlovelyh022@gmail.com', 2147483647, '999999sdfsdfs'),
(5, 'sdbhs sknfasdfka', 'aaaaaaaaa', 'ajayhlovelyh0222@gmail.com', 2147483647, 'dghfgjhgkgjhgjhfcgdyt'),
(6, 'wdad adasda', 'aaaaaaaaa', 'ajayhlovelyh022222@gmail.com', 2147483647, 'asdasdsadasd'),
(7, 'eafdsf shfhgh', 'aaaaaaaaa', 'anshul.mishra332@gmail.com', 2147483647, 'sfdgdhfhghfgh'),
(8, 'sefdsg fyhygfju', '123456789', 'anshul.mishra3332@gmail.com', 2147483647, 'fdsfdstgdyfg'),
(9, 'sdfsdf fsdfsdf', '123456789', 'anshul.mishra32222@gmail.com', 2147483647, 'adfdsfsdfsf'),
(10, 'ersty hgjghk', '123456789', 'anshul.mishra323232@gmail.com', 2147483647, 'ytti cyoyoiyvlujhy'),
(11, 'gfhjfjyg hgkkkkkkkk', '123456789', 'anshul.mishra3233332@gmail.com', 2147483647, 'hfch jg iughkjghkjgbkjh'),
(12, 'gfdjhgj hgjklhlk', '123456789', 'anshul.mishra325623@gmail.com', 2147483647, 'tyviyiuligkufkughugilhio'),
(13, 'hdkashks akdjasda', '123456789', 'ajayhlovelyh0200022@gmail.com', 2147483647, 'hkerfhfsfjiojfffsgfgg'),
(14, 'kfhsdkfs edfsdkfsdjfl', '123456789', 'ajayhlovelyh02222236@gmail.com', 2147483647, 'kdfhsaldjsaldsadlada'),
(15, 'hasda kjchskcs', '123456789', 'ajayhlovelyh02963@gmail.com', 2147483647, 'kjsdhfksdhlfsdsfsdkf');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `pass`) VALUES
(18, 'k', 'k'),
(19, 'abc', 'abc');
