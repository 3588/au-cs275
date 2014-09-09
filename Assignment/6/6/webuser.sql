-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- 主机: 127.0.0.1
-- 生成日期: 2014 年 04 月 21 日 11:32
-- 服务器版本: 5.5.32
-- PHP 版本: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `webuser`
--
CREATE DATABASE IF NOT EXISTS `webuser` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `webuser`;

-- --------------------------------------------------------

--
-- 表的结构 `auth`
--

CREATE TABLE IF NOT EXISTS `auth` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `auth`
--

INSERT INTO `auth` (`id`, `username`, `password`) VALUES
(4, 'authuser', 'ac3915e0c7d256ee67fcdd9772f200ab'),
(5, 'jhuang', '023299564b0db47d5f3e476a254d0c21');

-- --------------------------------------------------------

--
-- 表的结构 `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `comment` text NOT NULL,
  `datetime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- 转存表中的数据 `comment`
--

INSERT INTO `comment` (`id`, `username`, `comment`, `datetime`) VALUES
(5, 'authuser', 'test1', '2014-04-11 15:48:01'),
(6, 'authuser', 'test3', '2014-04-11 15:50:10'),
(7, 'authuser', 'test3', '2014-04-11 15:50:38'),
(8, 'authuser', 'test3', '2014-04-11 15:51:07'),
(9, 'authuser', 'test3', '2014-04-11 15:51:21'),
(10, 'authuser', 'test123', '2014-04-11 15:55:11'),
(11, 'jhuang', 'jhuang test', '2014-04-11 16:02:36'),
(12, 'jhuang', 'jhuang test23', '2014-04-11 16:02:48'),
(13, 'jhuang', 'test new time', '2014-04-11 16:46:27');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
