-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-12-02 02:59:12
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `thinkphp`
--

-- --------------------------------------------------------

--
-- 表的结构 `tp_city`
--

CREATE TABLE IF NOT EXISTS `tp_city` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `title` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `tp_city`
--

INSERT INTO `tp_city` (`id`, `name`, `title`) VALUES
(1, 'bj', 'beijing is a very nice city'),
(2, 'sh', 'shanghai is a city'),
(3, 'gz', 'gg is very hot');

-- --------------------------------------------------------

--
-- 表的结构 `tp_message`
--

CREATE TABLE IF NOT EXISTS `tp_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(60) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `filename` varchar(30) NOT NULL DEFAULT '',
  `time` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=48 ;

--
-- 转存表中的数据 `tp_message`
--

INSERT INTO `tp_message` (`id`, `title`, `content`, `filename`, `time`, `uid`) VALUES
(45, 'Modifying', 'with one of the supported input types. The Moment prototype is exposed through moment.fn. If you want to add your own functions, that is where you would put them. For ease of reference, any method on the Moment.prototype will be referenced in the docs as moment#method. So Moment.prototype.format == moment.fn.format == moment#format.', '583fdc0605afd.jpg', 1480580102, 10),
(44, 'File input', 'with one of the supported input types. The Moment prototype is exposed through moment.fn. If you want to add your own functions, that is where you would put them. For ease of reference, any method on the Moment.prototype will be referenced in the docs as moment#method. So Moment.prototype.format == moment.fn.format == moment#format.', '583fbf95e033a.jpg', 1480572821, 10),
(46, 'Test for geshi', 'diyihang\r\ndierhang', '0', 1480581177, 10),
(47, 'Test for geshi2', 'diyihang <br>\r\ndierhang', '0', 1480581199, 10),
(34, 'Image message test', 'with one of the supported input types. The Moment prototype is exposed through moment.fn. If you want to add your own functions, that is where you would put them. For ease of reference, any method on the Moment.prototype will be referenced in the docs as moment#method. So Moment.prototype.format == moment.fn.format == moment#format.', '583fdb1a5ce23.jpg', 1480579866, 10),
(32, 'Test for no upload', 'nstead of modifying the native Date.prototype, Moment.js creates a wrapper for the Date object. To get this wrapper object, simply call moment() with one of the supported input types. The Moment prototype is exposed through moment.fn. If you want to add your own functions, that is where you would put them. For ease of reference, any method on the Moment.prototype will be referenced in the docs as moment#method. So Moment.prototype.format == moment.fn.format == moment#format.', '0', 1480577507, 10),
(30, 'Test for bootstrap fileinput', 'nstead of modifying the native Date.prototype, Moment.js creates a wrapper for the Date object. To get this wrapper object, simply call moment() with one of the supported input types. The Moment prototype is exposed through moment.fn. If you want to add your own functions, that is where you would put them. For ease of reference, any method on the Moment.prototype will be referenced in the docs as moment#method. So Moment.prototype.format == moment.fn.format == moment#format.', '583fd009f1507.jpg', 1480577033, 10),
(28, 'File input', 'with one of the supported input types. The Moment prototype is exposed through moment.fn. If you want to add your own functions, that is where you would put them. For ease of reference, any method on the Moment.prototype will be referenced in the docs as moment#method. So Moment.prototype.format == moment.fn.format == moment#format.', '583fbf95e033a.jpg', 1480572821, 10),
(43, 'Lonly Night', 'oment.fn. If you want to add your own functions, that is where you would put them. For ease of reference, any method on the Moment.prototype will be referenced in the docs as moment#method. So Moment.prototype.formatoment.fn. If you want to add your own functions, that is where you would put them. For ease of reference, any method on the Moment.prototype will be referenced in the docs as moment#method. So Moment.prototype.format', '0', 1480580518, 10),
(42, 'File input', 'nstead of modifying the native Date.prototype, Moment.js creates a wrapper for the Date object. To get this wrapper object, simply call moment() with one of the supported input types. The Moment prototype is exposed through moment.fn. If you want to add your own functions, that is where you would put them. For ease of reference, any method on the Moment.prototype will be referenced in the docs as moment#method. So Moment.prototype.format == moment.fn.format == moment#format.', '0', 1480571574, 10),
(41, 'Image message test', 'with one of the supported input types. The Moment prototype is exposed through moment.fn. If you want to add your own functions, that is where you would put them. For ease of reference, any method on the Moment.prototype will be referenced in the docs as moment#method. So Moment.prototype.format == moment.fn.format == moment#format.', '583fdb1a5ce23.jpg', 1480579866, 10),
(40, 'Lonly Night', 'oment.fn. If you want to add your own functions, that is where you would put them. For ease of reference, any method on the Moment.prototype will be referenced in the docs as moment#method. So Moment.prototype.formatoment.fn. If you want to add your own functions, that is where you would put them. For ease of reference, any method on the Moment.prototype will be referenced in the docs as moment#method. So Moment.prototype.format', '0', 1480580518, 10),
(39, 'Bihzi NOT bitch', 'ate object. To get this wrapper object, simply call moment() with one of the supported input types. The Moment prototype is exposed through moment.fn. If you want to add your own functions, that is where you would put them. For ease of reference, any method on the Moment.prototype will be referenced in the ', '583fdd7fee84f.jpg', 1480580479, 1),
(38, 'How beautiful', 'This image is magical!ject. To get this wrapper object, simply call moment() with one of the supported input types. The Moment prototype is exposed through moment.fn. If you want to add your own functions, that is where you would put them. For ease of reference, any method on the Moment.prototype will be referenced in the docs as moment#method. So Moment.prototype.format == moment.', '583fdcbedb0d0.jpg', 1480580286, 10),
(37, 'TEST233', 'No Image\r\nugh moment.fn. If you want to add your own functions, that is where you would put them. For ease of reference, any method on the Moment.prototype will be referenced in the docs as moment#method. So Moment.prototype.format == ', '0', 1480580154, 10),
(36, 'modifying', 'modifying the native Date.prototype, Moment.js creates a wrapper for the Date object. To get this wrapper object, simply call moment() with one of the supported input types. The Moment prototype is exposed through moment.fn. If you want to add your own functions, that is where you would put them. For ease of reference, any method on the Moment.prototype will be referenced in the docs as moment#method. So Moment.prototype.for', '583fdc17a679b.jpg', 1480580119, 10),
(35, 'Modifying', 'with one of the supported input types. The Moment prototype is exposed through moment.fn. If you want to add your own functions, that is where you would put them. For ease of reference, any method on the Moment.prototype will be referenced in the docs as moment#method. So Moment.prototype.format == moment.fn.format == moment#format.', '583fdc0605afd.jpg', 1480580102, 10),
(26, 'No file message', 'nstead of modifying the native Date.prototype, Moment.js creates a wrapper for the Date object. To get this wrapper object, simply call moment() with one of the supported input types. The Moment prototype is exposed through moment.fn. If you want to add your own functions, that is where you would put them. For ease of reference, any method on the Moment.prototype will be referenced in the docs as moment#method. So Moment.prototype.format == moment.fn.format == moment#format.', '0', 1480570859, 10),
(27, 'File input', 'nstead of modifying the native Date.prototype, Moment.js creates a wrapper for the Date object. To get this wrapper object, simply call moment() with one of the supported input types. The Moment prototype is exposed through moment.fn. If you want to add your own functions, that is where you would put them. For ease of reference, any method on the Moment.prototype will be referenced in the docs as moment#method. So Moment.prototype.format == moment.fn.format == moment#format.', '0', 1480571574, 10);

-- --------------------------------------------------------

--
-- 表的结构 `tp_reply`
--

CREATE TABLE IF NOT EXISTS `tp_reply` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mid` int(11) NOT NULL,
  `fid` int(11) NOT NULL,
  `content` text NOT NULL,
  `time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- 转存表中的数据 `tp_reply`
--

INSERT INTO `tp_reply` (`id`, `mid`, `fid`, `content`, `time`) VALUES
(1, 6, 1, 'nihao', 1480558199),
(2, 6, 2, 'lz hui fu id 6 message', 1480559496),
(3, 10, 2, 'qraswfa', 1480561419),
(4, 23, 2, 'Sofa!!!', 1480563929),
(5, 28, 10, 'Good image!', 1480572837),
(6, 37, 10, 'Sofa!!!!!!!!!!!', 1480580237),
(7, 36, 10, 'WOW!!cool', 1480580248),
(8, 30, 10, 'I agree with you~', 1480580297),
(9, 38, 1, '???', 1480580341),
(10, 38, 1, 'sorry i was wrong stupy!', 1480580392),
(11, 39, 10, 'great title', 1480580497),
(12, 39, 10, 'hi nice to meet u', 1480580665);

-- --------------------------------------------------------

--
-- 表的结构 `tp_user`
--

CREATE TABLE IF NOT EXISTS `tp_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` char(32) NOT NULL,
  `sex` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- 转存表中的数据 `tp_user`
--

INSERT INTO `tp_user` (`id`, `username`, `password`, `sex`) VALUES
(1, 'gwl', '1', 1),
(2, 'lz', '2', 0),
(3, 'asdf', '3', 1),
(4, 'tony', '123', 1),
(5, 'qwer', 'qwerewq', 0),
(6, 'test', 'cfeada', 0),
(7, 'ztz3', 'dafe', 1),
(8, 'ztzzz', 'dgghrt', 1),
(9, 'mdzz', 'ggfs', 1),
(10, 'shrikl', 'lll', 1),
(11, 'mimaceshi', 'fdsa', 1),
(12, 'register', '123', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
