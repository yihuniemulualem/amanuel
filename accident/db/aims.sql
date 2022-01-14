-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 19, 2019 at 07:10 AM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `aims`
--

-- --------------------------------------------------------

--
-- Table structure for table `adnu`
--

CREATE TABLE IF NOT EXISTS `adnu` (
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `sex` varchar(5) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(25) NOT NULL,
  `u_name` varchar(15) NOT NULL,
  `psw` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adnu`
--


-- --------------------------------------------------------

--
-- Table structure for table `aminpost`
--

CREATE TABLE IF NOT EXISTS `aminpost` (
  `connt` varchar(65000) NOT NULL,
  `id` int(100) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `aminpost`
--


-- --------------------------------------------------------

--
-- Table structure for table `emrgncyrpo`
--

CREATE TABLE IF NOT EXISTS `emrgncyrpo` (
  `name` varchar(20) NOT NULL,
  `report` varchar(65000) NOT NULL,
  `id` int(100) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `emrgncyrpo`
--

INSERT INTO `emrgncyrpo` (`name`, `report`, `id`) VALUES
('zemenay', 'there is some problem around kombolcha.', 15),
('yimer', 'receiving the accident sound and having quick response to the received accident sound and storing the nature of the accident, the location details, the sequence service there are many problem on the accident management that was established long years ago to give service to protect. Kombolcha city from accident. The station has responsible for receiving the accident sound and having quick response to the received accident sound and storing the nature of the accident, the location details, the sequence ', 13);

-- --------------------------------------------------------

--
-- Table structure for table `notifi`
--

CREATE TABLE IF NOT EXISTS `notifi` (
  `usern` varchar(20) NOT NULL,
  `phone` int(10) NOT NULL,
  `content` varchar(65000) NOT NULL,
  `red` int(100) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`red`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `notifi`
--

INSERT INTO `notifi` (`usern`, `phone`, `content`, `red`) VALUES
('aasss', 920790583, 'service there are many problem on the accident management that was established long years ago to give service to protect. Kombolcha city from accident. The station has responsible for receiving the accident sound and having quick response to the received accident sound and storing the nature of the accident, the location details, the sequence.', 4),
('sssss', 920790583, 'contentcontentcontentcontentcontentcontentcontentcontent\r\ncontentcontentcontentcontentcontentcontentcontent', 6),
('yimerrr', 920790583, 'service there are many problem on the accident management that was established long years ago to give service to protect. Kombolcha city from accident. The station has responsible for receiving the accident sound and having quick response to the received accident sound and storing the nature of the accident, the location details, the sequence.', 7);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `title` varchar(200) NOT NULL,
  `post` varchar(8000) NOT NULL,
  `imag` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`title`, `post`, `imag`) VALUES
('hope', 'display: block; - Displaying the links as block elements makes the whole link area clickable (not just the text), and it allows us to specify the width (and padding, margin, height, etc. if you want)\r\nwidth: 60px; - Block elements take up the full width available by default. We want to specify a 60 pixels width\r\nYou can also set the width of <ul>, and remove the width of <a>, as they will take up the full width available when displayed as block elements. This will produce the same result as our previous example:\r\ndisplay: block; - Displaying the links as block elements makes the whole link area clickable (not just the text), and it allows us to specify the width (and padding, margin, height, etc. if you want)\r\nwidth: 60px; - Block elements take up the full width available by default. We want to specify a 60 pixels width\r\nYou can also set the width of <ul>, and remove the width of <a>, as they will take up the full width available when displayed as block elements. This will produce the same result as our previous example:', '32 (3).jpg'),
('kebede', 'service to protect. Kombolcha city from accident. The station has responsible for receiving the accident sound and having quick response to the received accident sound and storing the nature of the accident, the location details, the sequence.', '18 (3).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `resourc_a`
--

CREATE TABLE IF NOT EXISTS `resourc_a` (
  `actype` varchar(15) NOT NULL,
  `acweight` varchar(20) NOT NULL,
  `rstype` varchar(8000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resourc_a`
--

INSERT INTO `resourc_a` (`actype`, `acweight`, `rstype`) VALUES
('Car', 'Dangerous', '  hi threeeeeeeeeeeee                                    '),
('Fire', 'Medium', 'service to protect. Kombolcha city from accident. The station has responsible for receiving the accident sound and having quick response to the received accident sound and storing the nature of the accident, the location details, the sequence                        '),
('Harrassement', 'Simple', ' he accident, the location details, the sequence                                      ');

-- --------------------------------------------------------

--
-- Table structure for table `sreport`
--

CREATE TABLE IF NOT EXISTS `sreport` (
  `usern` varchar(20) NOT NULL,
  `phone` int(11) NOT NULL,
  `conntent` varchar(65000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sreport`
--

INSERT INTO `sreport` (`usern`, `phone`, `conntent`) VALUES
('asres', 934567890, 'service to protect. Kombolcha city from accident. The station has responsible for receiving the accident sound and having quick response to the received accident sound and storing the nature of the accident, the location details, the sequence. '),
('tesfaye', 920790583, 'Not! Kombolcha city police station is one of the institutions of accident management station on the given of this service there are many problem on the accident management that was established long years ago to give service to protect. Kombolcha city from accident. The station has responsible for receiving the accident sound and having quick response to the received accident sound and storing the nature of the accident, the location details, the sequence.'),
('yimer', 920790583, 'having quick response to the received accident sound and storing the nature of the accident, the location details, the sequence'),
('yimer', 920790583, 'having quick response to the received accident sound and storing the nature of the accident, the location details, the sequence'),
('asres', 934567890, 'service to protect. Kombolcha city from accident. The station has responsible for receiving the accident sound and having quick response to the received accident sound and storing the nature of the accident, the location details, the sequence. '),
('yimer', 2147483647, 'Not! Kombolcha city police station is one of the institutions of accident management station on the given of this service there are many problem on the accident management that was established long years ago to give service to protect. Kombolcha city from accident. The station has responsible for receiving the accident sound and having quick response to the received accident sound and storing the nature of the accident, the location details, the sequence.'),
('solomon', 920790583, 'service to protect. Kombolcha city from accident. The station has responsible for receiving the accident sound and having quick response to the received accident sound and storing the nature of the accident, the location details, the sequence'),
('tesfaye', 920790583, 'Not! Kombolcha city police station is one of the institutions of accident management station on the given of this service there are many problem on the accident management that was established long years ago to give service to protect. Kombolcha city from accident. The station has responsible for receiving the accident sound and having quick response to the received accident sound and storing the nature of the accident, the location details, the sequence.'),
('solomon', 920790583, 'service to protect. Kombolcha city from accident. The station has responsible for receiving the accident sound and having quick response to the received accident sound and storing the nature of the accident, the location details, the sequence'),
('asres', 934567890, 'service to protect. Kombolcha city from accident. The station has responsible for receiving the accident sound and having quick response to the received accident sound and storing the nature of the accident, the location details, the sequence. ');

-- --------------------------------------------------------

--
-- Table structure for table `tmpost`
--

CREATE TABLE IF NOT EXISTS `tmpost` (
  `connt` varchar(65000) NOT NULL,
  `id` int(100) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tmpost`
--


-- --------------------------------------------------------

--
-- Table structure for table `tmtoofi`
--

CREATE TABLE IF NOT EXISTS `tmtoofi` (
  `cont` varchar(65000) NOT NULL,
  `id` int(100) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tmtoofi`
--


-- --------------------------------------------------------

--
-- Table structure for table `tview`
--

CREATE TABLE IF NOT EXISTS `tview` (
  `fill_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `sex` varchar(6) NOT NULL,
  `age` int(2) NOT NULL,
  `date_b` varchar(20) NOT NULL,
  `phone` int(10) NOT NULL,
  `accidnt_t` varchar(10) NOT NULL,
  `adres` varchar(20) NOT NULL,
  `datee` varchar(20) NOT NULL,
  `time` varchar(15) NOT NULL,
  `pdie` int(255) NOT NULL,
  `content` varchar(8000) NOT NULL,
  PRIMARY KEY (`fill_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `tview`
--

INSERT INTO `tview` (`fill_id`, `name`, `sex`, `age`, `date_b`, `phone`, `accidnt_t`, `adres`, `datee`, `time`, `pdie`, `content`) VALUES
(2, 'belet', 'male', 24, '2015-06-24', 923456789, 'killing  ', 'asdfghj', '2020-06-24', '20:24', 0, 'Not! Kombolcha city police station is one of the institutions of accident management station on the given of this service there are many problem on the accident management that was established long years ago to give service to protect. Kombolcha city from accident. The station has responsible for receiving the accident sound and having quick response to the received accident sound and storing the nature of the accident, the location details, the sequence'),
(4, 'tesfaye', 'male', 25, '2019-05-13', 1234567890, 'traffic ', '', '', '', 0, ''),
(10, '', 'male', 0, '', 0, 'traffic ', '', '', '', 0, ''),
(11, '', 'male', 0, '', 0, 'traffic ', '', '', '', 0, ''),
(12, '', 'male', 0, '', 0, 'traffic ', '', '', '', 0, ''),
(13, '', 'male', 0, '', 0, 'traffic ', '', '', '', 0, ''),
(14, '', 'male', 0, '', 0, 'traffic ', '', '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `useracount`
--

CREATE TABLE IF NOT EXISTS `useracount` (
  `fnamee` varchar(15) NOT NULL,
  `lnamee` varchar(15) NOT NULL,
  `sexx` varchar(5) NOT NULL,
  `phonee` int(10) NOT NULL,
  `emaile` varchar(25) NOT NULL,
  `u_namee` varchar(15) NOT NULL,
  `psww` varchar(10) NOT NULL,
  `usertypee` varchar(15) NOT NULL,
  PRIMARY KEY (`u_namee`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useracount`
--

INSERT INTO `useracount` (`fnamee`, `lnamee`, `sexx`, `phonee`, `emaile`, `u_namee`, `psww`, `usertypee`) VALUES
('tesfaye', 'admasu', 'Male', 920790583, 'tesena7@gmail.com', 'tesfaye', '@tesfaye', 'admin'),
('yordanos', 'yordanos', 'Male', 920790583, 'tesena7@gmail.com', 'yordanos', 'yordanos', 'Officer'),
('tadi', 'adugna', 'Male', 920790583, 'tesena7@gmail.com', 'tadi', 'tadi1', 'Officer'),
('siraj', 'mohammed', 'Male', 920790583, 'tesena7@gmail.com', 'siraj', '@siraj', 'Teamcontroler'),
('zeki', 'sied', 'Male', 920790583, 'tesena@gmail.com', 'zeki', '@zeki', 'Teamcontroler'),
('almu', 'tades', 'Male', 912457845, 'habamu3@gmail.com', 'moloa', 'moloaa', 'Teamcontroler');
