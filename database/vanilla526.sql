-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2022 at 09:03 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `headstart`
--

-- --------------------------------------------------------

/*
// vanilla526
// ID INT

// title VARCHAR(80)

// seo_lang VARCHAR(5)
// seo_title VARCHAR(100)
// seo_author VARCHAR(50)
// seo_copy VARCHAR(50)
// seo_desc VARCHAR(250)
// seo_keywords VARCHAR(250)
// seo_url VARCHAR(250)
// seo_image VARCHAR(250)

// NavItem1 VARCHAR(25)
// NavItem2 VARCHAR(25)
// NavItem3 VARCHAR(25)
// NavItem4 VARCHAR(25)
// NavItem5 VARCHAR(25)

// Headline VARCHAR(50)
// StrongSubHeadline VARCHAR(50)
// SubHeadline VARCHAR(50)
// HeaderCtaBtn VARCHAR(25)

// P2Header VARCHAR(50)
// P2HeaderText VARCHAR(250)
// P2HeaderListItem1 VARCHAR(50)
// P2HeaderListItem2 VARCHAR(50)
// P2HeaderListItem3 VARCHAR(50)
// P2HeaderListItem4 VARCHAR(50)
// P2HeaderCtaBtn VARCHAR(25)
// P2BoxTitle1 VARCHAR(50)
// P2BoxText1 VARCHAR(250)
// P2BoxTitle2 VARCHAR(50)
// P2BoxText2 VARCHAR(250)
// P2BoxTitle3 VARCHAR(50)
// P2BoxText3 VARCHAR(250)
// P2BoxTitle4 VARCHAR(50)
// P2BoxText4 VARCHAR(250)

// CarouselImg1 VARCHAR(250)
// CarouselText1 VARCHAR(100)
// CarouselSub1 VARCHAR(100)
// CarouselImg2 VARCHAR(250)
// CarouselText2 VARCHAR(100)
// CarouselSub2 VARCHAR(100)
// CarouselImg3 VARCHAR(250)
// CarouselText3 VARCHAR(100)
// CarouselSub3 VARCHAR(100)
// CarouselImg4 VARCHAR(250)
// CarouselText4 VARCHAR(100)
// CarouselSub4 VARCHAR(100)
// CarouselImg5 VARCHAR(250)
// CarouselText5 VARCHAR(100)
// CarouselSub5 VARCHAR(100)
// CarouselImg6 VARCHAR(250)
// CarouselText6 VARCHAR(100)
// CarouselSub6 VARCHAR(100)
// CarouselImg7 VARCHAR(250)
// CarouselText7 VARCHAR(100)
// CarouselSub7 VARCHAR(100)
// CarouselImg8 VARCHAR(250)
// CarouselText8 VARCHAR(100)
// CarouselSub8 VARCHAR(100)

// TabImg1 VARCHAR(250)
// TabText1 VARCHAR(250)
// TabImg2 VARCHAR(250)
// TabText2 VARCHAR(250)
// TabImg3 VARCHAR(250)
// TabText3 VARCHAR(250)
// TabImg4 VARCHAR(250)
// TabText4 VARCHAR(250)
// TabItem1 VARCHAR(50)
// TabItem2 VARCHAR(50)
// TabItem3 VARCHAR(50)
// TabItem4 VARCHAR(50)

// CompanyName VARCHAR(50)
*/

CREATE TABLE IF NOT EXISTS `vanilla526_seo` (
    `id` int(11) NOT NULL,
    `title` varchar(80) NOT NULL,
    `seo_lang` varchar(5) NOT NULL,
    `seo_title` varchar(100) NOT NULL,
    `seo_author` varchar(50) NOT NULL,
    `seo_copy` varchar(50) NOT NULL,
    `seo_desc` varchar(250) NOT NULL,
    `seo_keywords` varchar(250) NOT NULL,
    `seo_url` varchar(250) NOT NULL,
    `seo_image` varchar(250) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS `vanilla526_nav` (
    `id` int(11) NOT NULL,
    `NavItem1` varchar(25) NOT NULL,
    `NavItem2` varchar(25) NOT NULL,
    `NavItem3` varchar(25) NOT NULL,
    `NavItem4` varchar(25) NOT NULL,
    `NavItem5` varchar(25) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS `vanilla526_carousel` (
    `id` int(11) NOT NULL,
    `CarouselImg1` varchar(250) NOT NULL,
    `CarouselText1` varchar(100) NOT NULL,
    `CarouselSub1` varchar(100) NOT NULL,
    `CarouselImg2` varchar(250) NOT NULL,
    `CarouselText2` varchar(100) NOT NULL,
    `CarouselSub2` varchar(100) NOT NULL,
    `CarouselImg3` varchar(250) NOT NULL,
    `CarouselText3` varchar(100) NOT NULL,
    `CarouselSub3` varchar(100) NOT NULL,
    `CarouselImg4` varchar(250) NOT NULL,
    `CarouselText4` varchar(100) NOT NULL,
    `CarouselSub4` varchar(100) NOT NULL,
    `CarouselImg5` varchar(250) NOT NULL,
    `CarouselText5` varchar(100) NOT NULL,
    `CarouselSub5` varchar(100) NOT NULL,
    `CarouselImg6` varchar(250) NOT NULL,
    `CarouselText6` varchar(100) NOT NULL,
    `CarouselSub6` varchar(100) NOT NULL,
    `CarouselImg7` varchar(250) NOT NULL,
    `CarouselText7` varchar(100) NOT NULL,
    `CarouselSub7` varchar(100) NOT NULL,
    `CarouselImg8` varchar(250) NOT NULL,
    `CarouselText8` varchar(100) NOT NULL,
    `CarouselSub8` varchar(100) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS `vanilla526` (
    `id` int(11) NOT NULL,
    `Headline` varchar(50) NOT NULL,
    `StrongSubHeadline` varchar(50) NOT NULL,
    `SubHeadline` varchar(50) NOT NULL,
    `HeaderCtaBtn` varchar(25) NOT NULL,
    `P2Header` varchar(50) NOT NULL,
    `P2HeaderText` varchar(250) NOT NULL,
    `P2HeaderListItem1` varchar(50) NOT NULL,
    `P2HeaderListItem2` varchar(50) NOT NULL,
    `P2HeaderListItem3` varchar(50) NOT NULL,
    `P2HeaderListItem4` varchar(50) NOT NULL,
    `P2HeaderCtaBtn` varchar(25) NOT NULL,
    `P2BoxTitle1` varchar(50) NOT NULL,
    `P2BoxText1` varchar(250) NOT NULL,
    `P2BoxTitle2` varchar(50) NOT NULL,
    `P2BoxText2` varchar(250) NOT NULL,
    `P2BoxTitle3` varchar(50) NOT NULL,
    `P2BoxText3` varchar(250) NOT NULL,
    `P2BoxTitle4` varchar(50) NOT NULL,
    `P2BoxText4` varchar(250) NOT NULL,
    `TabImg1` varchar(250) NOT NULL,
    `TabText1` varchar(250) NOT NULL,
    `TabImg2` varchar(250) NOT NULL,
    `TabText2` varchar(250) NOT NULL,
    `TabImg3` varchar(250) NOT NULL,
    `TabText3` varchar(250) NOT NULL,
    `TabImg4` varchar(250) NOT NULL,
    `TabText4` varchar(250) NOT NULL,
    `TabItem1` varchar(50) NOT NULL,
    `TabItem2` varchar(50) NOT NULL,
    `TabItem3` varchar(50) NOT NULL,
    `TabItem4` varchar(50) NOT NULL,
    `CompanyName` varchar(50) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;