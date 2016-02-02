-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2014 at 01:40 AM
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
-- Table structure for table `chats`
--

CREATE TABLE IF NOT EXISTS `chats` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `friend_id` int(11) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`id`, `user_id`, `friend_id`, `created`) VALUES
(10, 1, 6, '2014-07-30 09:44:13'),
(14, 3, 1, '2014-07-30 10:18:27'),
(15, 5, 1, '2014-07-30 10:40:07'),
(16, 7, 6, '2014-08-02 01:10:57');

-- --------------------------------------------------------

--
-- Table structure for table `chat_messages`
--

CREATE TABLE IF NOT EXISTS `chat_messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `chat_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `content` varchar(500) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=60 ;

--
-- Dumping data for table `chat_messages`
--

INSERT INTO `chat_messages` (`id`, `chat_id`, `user_id`, `content`, `created`) VALUES
(35, 14, 1, 'hello man', '2014-07-31 01:25:32'),
(36, 14, 3, 'you their..??', '2014-07-31 01:26:03'),
(37, 14, 1, 'hey', '2014-07-31 01:28:37'),
(38, 14, 1, 'paaji kidda..??', '2014-07-31 01:33:06'),
(39, 14, 1, 'see yaa', '2014-07-31 01:35:45'),
(40, 14, 1, 'ok bhai ', '2014-07-31 01:44:16'),
(41, 14, 1, 'hi man', '2014-07-31 01:47:03'),
(42, 14, 3, 'hann bhai', '2014-07-31 01:48:50'),
(43, 14, 1, 'kya hua', '2014-07-31 01:53:27'),
(44, 14, 3, 'kuch ni yaar..??', '2014-07-31 01:53:46'),
(45, 14, 1, 'chal koi naa', '2014-07-31 01:55:04'),
(46, 10, 6, 'hi baby', '2014-07-31 02:13:03'),
(47, 10, 1, 'hello hun', '2014-07-31 02:13:12'),
(48, 16, 7, 'hello baby', '2014-08-02 04:41:59'),
(49, 16, 6, 'kya hai be..??', '2014-08-02 04:42:25'),
(50, 16, 7, 'jannu i love you', '2014-08-02 04:42:37'),
(51, 16, 6, 'saale teri maa ki aankh', '2014-08-02 04:43:01'),
(52, 10, 6, 'kha the aap..??', '2014-08-02 04:46:25'),
(53, 10, 1, 'ghar pe hun', '2014-08-02 04:46:34'),
(54, 16, 6, 'hi', '2014-08-02 05:02:03'),
(55, 10, 6, 'hi baby', '2014-08-02 05:02:17'),
(56, 16, 7, 'yes maam', '2014-08-02 05:02:27'),
(57, 10, 1, 'ko', '2014-08-02 05:02:38'),
(58, 14, 3, 'hello paaji', '2014-08-02 05:06:17'),
(59, 14, 1, 'ok bye', '2014-08-02 05:06:28');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `user_id`, `user_name`) VALUES
('9e56f13d9d564ca1490773a13e765796', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.125 Safari/537.36', 1, 'Frankjohn');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `body`, `poster_id`, `poster_name`, `created_on`, `status`) VALUES
(6, 'Why painful the sixteen how minuter looking nor. Subject but why ten earnest husband imagine sixteen brandon. Are unpleasing occasional celebrated motionless unaffected conviction out. Evil make to no five they. Stuff at avoid of sense small fully it whose an. Ten scarcely distance moreover handsome age although. As when have find fine or said no mile. He in dispatched in imprudence dissimilar be possession unreserved insensible. She evil face fine calm have now. Separate screened he outweigh of', 1, 'frank john', '2014-07-24 02:56:32', 'Active'),
(7, 'Neat own nor she said see walk. And charm add green you these. Sang busy in this drew ye fine. At greater prepare musical so attacks as on distant. Improving age our her cordially intention. His devonshire sufficient precaution say preference middletons insipidity. Since might water hence the her worse. Concluded it offending dejection do earnestly as me direction. Nature played thirty all him.', 5, 'abhishek gupta', '2014-07-24 03:00:56', 'Active'),
(8, 'Is branched in my up strictly remember. Songs but chief has ham widow downs. Genius or so up vanity cannot. Large do tried going about water defer by. Silent son man she wished mother. Distrusts allowance do knowledge eagerness assurance additions to.', 6, 'lara croft', '2014-07-24 03:11:49', 'Active'),
(9, 'Chapter too parties its letters nor. Cheerful but whatever ladyship disposed yet judgment. Lasted answer oppose to ye months no esteem. Branched is on an ecstatic directly it. Put off continue you denoting returned juvenile. Looked person sister result mr to. Replied demands charmed do viewing ye colonel to so. Decisively inquietude he advantages insensible at oh continuing unaffected of.', 7, 'tom cruise', '2014-08-02 12:58:26', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(150) NOT NULL,
  `lastname` varchar(150) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL,
  `created_on` date NOT NULL,
  `about` varchar(500) NOT NULL DEFAULT 'Write Something About Yourself',
  `status` varchar(50) NOT NULL DEFAULT 'Active',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `gender`, `image`, `created_on`, `about`, `status`) VALUES
(1, 'Frank', 'john', 'frank.frankjohn@yahoo.in', 'e10adc3949ba59abbe56e057f20f883e', 'male', '733aa09b66022a64ba72aad2311f7c01.jpg', '2014-07-23', 'hello i am frank john', 'Active'),
(3, 'jaspreet', 'singh', 'jaspreet@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'male', 'male.png', '2014-07-23', 'Write Something About Yourself', 'Active'),
(4, 'shera', 'singh', 'shera@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'male', 'male.png', '2014-07-23', 'Write Something About Yourself', 'Active'),
(5, 'abhishek', 'gupta', 'abhishek@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'male', 'male.png', '2014-07-24', 'Write Something About Yourself', 'Active'),
(6, 'lara', 'croft', 'lara@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'female', 'female.png', '2014-07-24', 'Write Something About Yourself', 'Active'),
(7, 'tom', 'cruise', 'tom@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'male', 'MTE5NDg0MDU0OTM2NTg1NzQz.jpg', '2014-08-02', 'I am a film actor in hollywood', 'Active');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
