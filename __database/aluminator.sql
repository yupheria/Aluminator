-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2015 at 07:00 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `alumniator`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `captcha`
--

CREATE TABLE IF NOT EXISTS `captcha` (
  `captcha_id` bigint(13) unsigned NOT NULL AUTO_INCREMENT,
  `captcha_time` int(10) unsigned NOT NULL,
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `word` varchar(20) NOT NULL,
  PRIMARY KEY (`captcha_id`),
  KEY `word` (`word`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=133 ;

--
-- Dumping data for table `captcha`
--

INSERT INTO `captcha` (`captcha_id`, `captcha_time`, `ip_address`, `word`) VALUES
(132, 1433220393, '::1', '');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  PRIMARY KEY (`session_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `user_id`, `user_name`) VALUES
('9e56f13d9d564ca1490773a13e765796', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.125 Safari/537.36', 1, 'Frankjohn'),
('d8ba0554b9c3bc51ae3b69fb75845ade', '49.207.232.192', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.152 Safari/537.36', 13, 'adfsdf');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `content` varchar(200) NOT NULL,
  `commenter_id` int(11) NOT NULL,
  `commenter_name` varchar(100) NOT NULL,
  `created_on` datetime NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Active',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `content`, `commenter_id`, `commenter_name`, `created_on`, `status`) VALUES
(3, 8, 'comment no 1', 1, 'Frank john', '2014-07-25 11:19:25', 'Active'),
(4, 8, 'paaji kidda', 3, 'jaspreet singh', '2014-07-25 11:37:44', 'Active'),
(5, 8, 'teri maa ka', 6, 'lara croft', '2014-07-26 01:55:37', 'Active'),
(6, 8, 'hello commenter paaji kidda', 1, 'Frank john', '2014-07-28 12:32:00', 'Active'),
(7, 7, 'hello bhai meri english thodi weak hai', 7, 'tom cruise', '2014-08-02 12:55:28', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `friendlist`
--

CREATE TABLE IF NOT EXISTS `friendlist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `friend_name` varchar(100) NOT NULL,
  `friend_id` int(11) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Request Pending',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `friendlist`
--

INSERT INTO `friendlist` (`id`, `user_id`, `user_name`, `friend_name`, `friend_id`, `status`) VALUES
(19, 1, 'Frankjohn', 'laracroft', 6, 'Friends'),
(20, 1, 'Frankjohn', 'abhishekgupta', 5, 'Friends'),
(21, 3, 'jaspreetsingh', 'Frankjohn', 1, 'Friends'),
(22, 7, 'tomcruise', 'laracroft', 6, 'Friends');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img_path` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `img_path`) VALUES
(10, '143322036312076Hydrangeas.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `img_path` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `body`, `img_path`) VALUES
(15, 'News', '<p>Weltex new news</p>', '14332203509951Desert.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `body` varchar(500) NOT NULL,
  `poster_id` int(11) NOT NULL,
  `poster_name` varchar(100) NOT NULL,
  `created_on` datetime NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Active',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `body`, `poster_id`, `poster_name`, `created_on`, `status`) VALUES
(6, 'Why painful the sixteen how minuter looking nor. Subject but why ten earnest husband imagine sixteen brandon. Are unpleasing occasional celebrated motionless unaffected conviction out. Evil make to no five they. Stuff at avoid of sense small fully it whose an. Ten scarcely distance moreover handsome age although. As when have find fine or said no mile. He in dispatched in imprudence dissimilar be possession unreserved insensible. She evil face fine calm have now. Separate screened he outweigh of', 1, 'frank john', '2014-07-24 02:56:32', 'Active'),
(7, 'Neat own nor she said see walk. And charm add green you these. Sang busy in this drew ye fine. At greater prepare musical so attacks as on distant. Improving age our her cordially intention. His devonshire sufficient precaution say preference middletons insipidity. Since might water hence the her worse. Concluded it offending dejection do earnestly as me direction. Nature played thirty all him.', 5, 'abhishek gupta', '2014-07-24 03:00:56', 'Active'),
(8, 'Is branched in my up strictly remember. Songs but chief has ham widow downs. Genius or so up vanity cannot. Large do tried going about water defer by. Silent son man she wished mother. Distrusts allowance do knowledge eagerness assurance additions to.', 6, 'lara croft', '2014-07-24 03:11:49', 'Active'),
(9, 'Chapter too parties its letters nor. Cheerful but whatever ladyship disposed yet judgment. Lasted answer oppose to ye months no esteem. Branched is on an ecstatic directly it. Put off continue you denoting returned juvenile. Looked person sister result mr to. Replied demands charmed do viewing ye colonel to so. Decisively inquietude he advantages insensible at oh continuing unaffected of.', 7, 'tom cruise', '2014-08-02 12:58:26', 'Active'),
(10, 'test naveen', 13, 'adf sdf', '2015-05-24 01:32:02', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(150) NOT NULL,
  `lastname` varchar(150) NOT NULL,
  `student_id` varchar(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL,
  `created_on` date NOT NULL,
  `about` varchar(500) NOT NULL DEFAULT 'Write Something About Yourself',
  `status` varchar(50) NOT NULL DEFAULT 'Active',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `student_id`, `email`, `password`, `gender`, `image`, `created_on`, `about`, `status`) VALUES
(1, 'Frank', 'john', '', 'frank.frankjohn@yahoo.in', 'e10adc3949ba59abbe56e057f20f883e', 'male', '733aa09b66022a64ba72aad2311f7c01.jpg', '2014-07-23', 'hello i am frank john', 'Active'),
(3, 'jaspreet', 'singh', '', 'jaspreet@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'male', 'male.png', '2014-07-23', 'Write Something About Yourself', 'Active'),
(4, 'shera', 'singh', '', 'shera@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'male', 'male.png', '2014-07-23', 'Write Something About Yourself', 'Active'),
(5, 'abhishek', 'gupta', '', 'abhishek@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'male', 'male.png', '2014-07-24', 'Write Something About Yourself', 'Active'),
(6, 'lara', 'croft', '', 'lara@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'female', 'female.png', '2014-07-24', 'Write Something About Yourself', 'Active'),
(7, 'tom', 'cruise', '', 'tom@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'male', 'MTE5NDg0MDU0OTM2NTg1NzQz.jpg', '2014-08-02', 'I am a film actor in hollywood', 'Active'),
(13, 'adf', 'sdf', 'asdfsdf', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'female', 'female.png', '2015-05-19', 'Write Something About Yourself', 'Active'),
(14, 'asdf', 'asd', 'asdfdf', 'asdsfdf@gmail.com', '4297f44b13955235245b2497399d7a93', 'others', 'male.png', '2015-05-19', 'Write Something About Yourself', 'Deactive'),
(15, 'asfd', 'adfs', 'asdfff', 'asdfdhffh@gmail.com', '202cb962ac59075b964b07152d234b70', 'female', 'female.png', '2015-05-24', 'Write Something About Yourself', 'Deactive');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
