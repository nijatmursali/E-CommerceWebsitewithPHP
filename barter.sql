SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE DATABASE IF NOT EXISTS `barter` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `barter`;


CREATE TABLE IF NOT EXISTS `addproducts` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `city` text NOT NULL,
  `descri` text NOT NULL,
  `price` int(20) NOT NULL,
  `cid` int(11) NOT NULL,
  `image` text NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `mob` text NOT NULL,
  PRIMARY KEY (`pid`),
  KEY `cid` (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=70 ;



CREATE TABLE IF NOT EXISTS `admin` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `Email` text NOT NULL,
  `FirstName` text NOT NULL,
  `LastName` text NOT NULL,
  `Mob` text NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

CREATE TABLE IF NOT EXISTS `details` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `Email` text NOT NULL,
  `FirstName` text NOT NULL,
  `LastName` text NOT NULL,
  `Mob` text NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;



CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(50) NOT NULL DEFAULT '',
  `link` varchar(100) NOT NULL DEFAULT '#',
  `parent` int(11) NOT NULL DEFAULT '0',
  `sort` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

INSERT INTO `menu` (`id`, `label`, `link`, `parent`, `sort`) VALUES
(1, 'Elektronika', '#', 0, 0),
(2, 'Telefonlar', '#', 0, 0),
(3, 'Nomreler', '#', 0, 0),
(4, 'Audio', '#', 0, 0),
(5, 'Komputer', '#', 0, 0),
(6, 'Komponentler', '#', 0, 0),
(7, 'Noutbooklar', '#', 0, 0),
(8, 'Oyunlar', '#', 0, 0),
(9, 'Foto', '#', 0, 0),
(10, 'Ofis', '#', 0, 0),
(11, 'Masaustu', '#', 0, 0),
(12, 'DasinmazEmlak', '#', 0, 0),
(13, 'Menziller', '#', 0, 0),
(14, 'Villalar', '#', 0, 0),
(15, 'Torpaq', '#', 0, 0),
(16, 'Obyektler', '#', 0, 0),
(17, 'Xaricdeemlak', '#', 0, 0),
(18, 'Qarajlar', '#', 0, 0),
(19, 'Avtomobil', '#', 0, 0),
(20, 'Ehtiyathisse', '#', 0, 0),
(21, 'Avtobus', '#', 0, 0),
(22, 'Motosikletler', '#', 0, 0),
(23, 'Hobbi', '#', 0, 0),
(24, 'Idman', '#', 0, 0),
(25, 'Musiqi', '#', 0, 0),
(26, 'Kolleksiya', '#', 0, 0),
(27, 'Kitab', '#', 0, 0),
(28, 'Velosiped', '#', 0, 0),
(29, 'Bilet', '#', 0, 0),
(30, 'Sexsiesya', '#', 0, 0),
(31, 'Saat', '#', 0, 0),
(32, 'Geyim', '#', 0, 0),
(33, 'Saglamliq', '#', 0, 0),
(34, 'Aksesuar', '#', 0, 0),
(35, 'Evbag', '#', 0, 0),
(36, 'Mebel', '#', 0, 0),
(37, 'Meishet', '#', 0, 0),
(38, 'Temir', '#', 0, 0),
(39, 'Qabqacaq', '#', 0, 0);

ALTER TABLE `addproducts`
  ADD CONSTRAINT `parent` FOREIGN KEY (`cid`) REFERENCES `menu` (`id`);
