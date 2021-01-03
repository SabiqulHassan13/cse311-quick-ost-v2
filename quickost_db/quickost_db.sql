-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2019 at 07:08 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quickost_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `email_id` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`email_id`, `subject`, `message`) VALUES
('abc@xyz.com', 'test', 'nais'),
('emdad.abir@gmail.com', 'greetings', 'hey bro'),
('jahid.haq@gmail.com', 'greetings', 'how are u friend?'),
('jamal.sheikh@gmail.com', 'greetings', 'hello sir');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(3) DEFAULT NULL,
  `user_id` int(3) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `quantity` int(3) NOT NULL,
  `order_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `user_id`, `price`, `quantity`, `order_date`) VALUES
(101, 101, '599.00', 12, '2019-08-22'),
(101, 102, '105.00', 9, '2019-08-19'),
(101, 111, '500.00', 3, '2019-08-07'),
(101, 112, '105.00', 9, '2019-08-22'),
(101, 109, '105.00', 1, '2019-08-08');

-- --------------------------------------------------------

--
-- Table structure for table `registered_user`
--

CREATE TABLE `registered_user` (
  `user_id` int(3) NOT NULL,
  `password` varchar(10) NOT NULL,
  `first_name` varchar(15) NOT NULL,
  `last_name` varchar(15) NOT NULL,
  `email_id` varchar(30) NOT NULL,
  `contact_no` varchar(15) DEFAULT NULL,
  `reg_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registered_user`
--

INSERT INTO `registered_user` (`user_id`, `password`, `first_name`, `last_name`, `email_id`, `contact_no`, `reg_date`) VALUES
(101, 'pass123', 'John', 'Smith', 'john.smith@gmail.com', '01515222333', '2019-07-27'),
(102, 'pass102', 'John', 'Dino', 'john.dino@gmail.com', '01724666777', '2019-07-27'),
(103, 'pass103', 'Jamal', 'Sheikh', 'jamal.sheikh@gmail.com', '01981225533', '0000-00-00'),
(104, 'pass104', 'Jahid', 'Haq', 'jahid.haq@gmail.com', '01461555444', '2019-07-27'),
(105, 'pass105', 'Jakia', 'Tahsin', 'jakia.tahsin@gmail.com', '01578999222', '2019-07-27'),
(106, '106', 'nayeem', 'rahman', 'abc@xyz.com', '123456789', '2019-07-01'),
(107, 'pass107', 'Emdad', 'Abir', 'emdad.abir@gmail.com', '01952877679', '2019-07-10'),
(108, '123456', 'kowshin', 'raihama', 'k@gmail.com', '123456', '2019-07-09'),
(109, 'pass109', 'Riaj', 'Sheikh', 'riaj.sheikh@gmail.com', '01461555444', '2019-08-24'),
(110, 'pass110', 'jilu', 'mia', 'jilu.mia@gmail.com', '01724666777', '2019-08-12'),
(111, 'pass111', 'jio', 'mac', 'jio.mac@gmail.com', '01461555444', '2019-08-22'),
(112, '123456', 'Nayeem', 'Rahman', 'abc@xyz.com', '01681999384', '2019-08-30'),
(126, 'abir', 'Emdadul Haque', 'Abir', 'emdad.abir@gmail.com', '01956033876', '2019-07-30');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int(3) NOT NULL,
  `user_id` int(3) NOT NULL,
  `product_id` int(3) NOT NULL,
  `review` varchar(255) NOT NULL,
  `review_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`review_id`, `user_id`, `product_id`, `review`, `review_date`) VALUES
(1, 109, 101, 'good product', '2019-08-06'),
(2, 102, 101, 'quality product', '2019-08-23'),
(3, 108, 101, 'best product', '2019-08-22'),
(4, 108, 102, 'best solution', '2019-08-17'),
(5, 112, 101, 'osthir!!', '2019-08-13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`email_id`);

--
-- Indexes for table `registered_user`
--
ALTER TABLE `registered_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
