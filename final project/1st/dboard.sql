-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- 主机: 127.0.0.1
-- 生成日期: 2014-04-21 13:04:00
-- 服务器版本: 5.6.14
-- PHP 版本: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `dboard`
--

-- --------------------------------------------------------

--
-- 表的结构 `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `topic_id` int(10) NOT NULL DEFAULT '0' COMMENT '回复ID和主题ID对应',
  `reply_id` int(10) NOT NULL DEFAULT '0' COMMENT 'X条ID',
  `reply_name` varchar(32) COLLATE utf8_bin NOT NULL,
  `reply_detail` text COLLATE utf8_bin NOT NULL,
  `reply_datetime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=31 ;

--
-- 转存表中的数据 `comment`
--

INSERT INTO `comment` (`id`, `topic_id`, `reply_id`, `reply_name`, `reply_detail`, `reply_datetime`) VALUES
(28, 7, 1, '1', 'testdfsa', '2014-04-21 07:23:38'),
(29, 6, 1, '1', 'comment test', '2014-04-21 07:55:29'),
(30, 6, 2, 'jhuang', 'test', '2014-04-21 08:06:45');

-- --------------------------------------------------------

--
-- 表的结构 `discussion`
--

CREATE TABLE IF NOT EXISTS `discussion` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `topic` varchar(255) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `detail` text CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `name` varchar(32) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `datetime` datetime NOT NULL,
  `vote` int(10) NOT NULL,
  `reply` int(10) NOT NULL,
  `sticky` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `discussion`
--

INSERT INTO `discussion` (`id`, `topic`, `detail`, `name`, `datetime`, `vote`, `reply`, `sticky`) VALUES
(7, 'test', 'dsadadadas', '1', '2014-04-21 07:23:25', 0, 1, NULL),
(9, 'Topic', 'Content', 'jhuang', '2014-04-21 08:16:25', 0, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `forum_user`
--

CREATE TABLE IF NOT EXISTS `forum_user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `password` varchar(32) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=14 ;

--
-- 转存表中的数据 `forum_user`
--

INSERT INTO `forum_user` (`id`, `username`, `password`) VALUES
(13, 'jhuang', '2e0f606e3090a123468fc634d794ea8d');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
