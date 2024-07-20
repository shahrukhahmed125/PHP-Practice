-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2024 at 01:28 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `idiscuss`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `img` varchar(250) NOT NULL,
  `category_description` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `img`, `category_description`, `created_at`) VALUES
(1, 'Python', 'img/python_img.jpg', 'Python is a high-level, general-purpose programming language. Its design philosophy emphasizes code readability with the use of significant indentation.', '2023-09-09 20:40:32'),
(2, 'Javascript ', 'img/javascript_img.jpg', 'JavaScript, often abbreviated as JS, is a programming language that is one of the core technologies of the World Wide Web, alongside HTML and CSS. As of 2023, 98.7% of websites use JavaScript.', '2023-09-09 20:43:09'),
(3, 'Django', 'img/django_img.jpg', 'Django is a high-level Python web framework that encourages rapid development and clean, pragmatic design. Django is a free and open-source, Python-based web framework that follows the model–template–views architectural pattern.', '2023-09-10 20:20:43'),
(4, 'Flask', 'img/flask_img.jpg', 'Flask is a micro web framework written in Python. It is classified as a microframework because it does not require particular tools or libraries.', '2023-09-10 20:32:27'),
(5, 'React js', 'img/react_img.jpg', 'React is a free and open-source front-end JavaScript library for building user interfaces based on components. It is maintained by Meta and a community of individual developers and companies.', '2023-09-10 20:48:39'),
(6, 'Php', 'img/php_img.jpg', 'PHP is a popular general-purpose scripting language that is especially suited to web development. It is fast, flexible, and pragmatic, and powers everything from blogs to the most popular websites in the world. PHP was originally an abbreviation of Person', '2023-09-10 20:55:46');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(8) NOT NULL,
  `comment_content` text NOT NULL,
  `thread_id` int(8) NOT NULL,
  `comment_by` int(8) NOT NULL,
  `comment_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_content`, `thread_id`, `comment_by`, `comment_time`) VALUES
(1, 'This is a comment for test.', 1, 1, '2023-09-12 20:58:06'),
(2, 'second comment for test.', 1, 5, '2023-09-12 21:12:23'),
(3, 'i cannot understand this problem. ', 18, 6, '2023-09-12 21:19:51'),
(4, 'hi', 18, 4, '2023-09-12 21:50:34'),
(5, 'chalo shaba cuto', 1, 2, '2023-09-13 19:36:16'),
(6, 'hi', 1, 1, '2023-09-26 10:27:32'),
(7, 'nikal pakore', 1, 1, '2023-09-26 10:55:04'),
(8, '&ltbody class=\"container\"&gt\r\nhello bhai\r\n&lt/body&gt', 1, 1, '2023-09-30 07:50:52'),
(9, '\"that is\"', 1, 1, '2023-09-30 07:51:37'),
(12, 'it\'s easy', 1, 1, '2023-09-30 08:05:06'),
(13, 'i am also having the same issue.', 23, 1, '2023-10-01 09:36:09');

-- --------------------------------------------------------

--
-- Table structure for table `threads`
--

CREATE TABLE `threads` (
  `thread_id` int(7) NOT NULL,
  `thread_title` varchar(255) NOT NULL,
  `thread_desc` text NOT NULL,
  `thread_cat_id` int(7) NOT NULL,
  `thread_user_id` int(7) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `threads`
--

INSERT INTO `threads` (`thread_id`, `thread_title`, `thread_desc`, `thread_cat_id`, `thread_user_id`, `timestamp`) VALUES
(1, 'Unable to install numpy library ', 'I am not able to install numpy library in my windows 11. ', 1, 1, '2023-09-10 23:22:58'),
(2, 'Manually raising (throwing) an exception in Python', 'How do I raise an exception in Python so that it can later be caught via an except block?', 1, 5, '2023-09-11 20:17:13'),
(3, 'What are metaclasses in Python?', 'What are metaclasses in Python?', 1, 6, '2023-09-11 20:27:05'),
(4, 'How do I create a directory, and any missing parent directories?', 'How do I create a directory at a given path, and also create any missing parent directories along that path? For example, the Bash command mkdir -p /path/to/nested/directory does this.', 1, 2, '2023-09-11 20:31:04'),
(5, 'How do I execute a program or call a system command?', 'How do I call an external command within Python as if I had typed it in a shell or command prompt?', 1, 5, '2023-09-11 20:34:46'),
(6, 'How slicing in Python works', 'How does Python\'s slice notation work? how can I understand which elements end up in the slice? Please include references where appropriate.', 1, 3, '2023-09-11 20:38:00'),
(7, 'Chart JS Chart Background Pattern', 'I have checked out the chart js documentation\r\n\r\nAlso this post: Chart area background color chartjs , and others\r\n\r\nBut I have not been able to find a way to create a horizontally striped background of the plotting area with two rgba colors.\r\n\r\nIs this possible to do?\r\n\r\nThanks!\r\n\r\nthis is for an application built using the angular framework.', 2, 4, '2023-09-11 20:43:41'),
(8, 'Why does a challenge validation fail between WebAuthn server (go) and client (JavaScript)?', 'I am developing a client server application. The server portion is written in pure Go, using the go-webauthn/webauthn library. The client side is pure JavaScript.\r\n\r\nCurrently I have implemented a register begin and register finish hook, which already does some communication.\r\n\r\nWhen a user logs in with his/her web browser, it is possible to register a webauthn device. By clicking the butten, a dialog appears and I can touch the sensor of my Yubikey. After that data is sent to the server, which parses the data and does validation. Unfortunately this fails!', 2, 7, '2023-09-11 20:45:18'),
(9, 'How do I log a Python error with debug information?', 'I am printing Python exception messages to a log file with logging.error', 1, 3, '2023-09-11 20:50:15'),
(12, 'How do I select rows from a DataFrame based on column values?', 'How can I select rows from a DataFrame based on values in some column in Pandas?', 1, 2, '2023-09-11 21:00:51'),
(18, 'How do I get PHP errors to display?', 'I have checked my PHP ini file (php.ini) and display_errors is set and also error reporting is E_ALL. I have restarted my Apache webserver.', 6, 1, '2023-09-12 21:17:49'),
(19, 'Random Password Generator python', 'How to make a random password generator using python tkinter desktop application with attractive ui', 1, 6, '2023-09-26 09:32:27'),
(20, '$_server error', 'please solve this problem', 1, 1, '2023-09-26 10:37:38'),
(21, 'python short programs', 'please share some python short programs.', 1, 1, '2023-09-26 10:49:37'),
(22, 'Flask is the python\'s framwork?', '&ltbhai aap ko maloom hona chahiye ye baat&gt', 4, 1, '2023-09-30 08:15:19'),
(23, 'Django error for update', 'please share the complete update crud code.', 3, 1, '2023-10-01 09:34:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sno` int(8) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sno`, `user_email`, `user_pass`, `timestamp`) VALUES
(1, 'user@gmail.com', '$2y$10$20TaPxTSqgcYtyYkk1fNBOfRzDnkfjYp/NOMA6t7hqcT21eGFUsMC', '2023-09-13 21:19:47'),
(2, 'prince@gmail.com', '$2y$10$4InCVR8/tDgFMTHHJxYHEeSfZ446zpsRFbyQfE.UqRpgKlDHzprUm', '2023-09-14 21:18:31'),
(3, 'shahrukhahmed125@gmail.com', '$2y$10$KaewY89UTZBnwJzA7tWmnu2nxITnweSsvpzfry5V9IGq4nfavEaBS', '2023-09-14 21:19:24'),
(4, 'shahrukhahmed110@outlook.com', '$2y$10$cWfptTeeW9/eR2F.dfKUcuVg/A9TkpGarYXvUotF9eeuzVdDCv3Si', '2023-09-14 21:20:10'),
(5, 'shahzaibahmed3821@gmail.com', '$2y$10$SUp2TrkE3P9qsMsyDK3WV.MLEZjICTd5ee3ozcoCnoFqBvRbzrP/K', '2023-09-14 21:21:25'),
(6, 'sh@sh', '$2y$10$hmTDR2rW6O37q9BSQZ8N/.J7MKP8bwNuBqzY9duM/2l8xldaZThR.', '2023-09-14 21:22:46'),
(7, 'ja@ja', '$2y$10$yzAX4D4xcnuhkvFB35Loeu95Q19Id7t1CBMPJjkEi0XCfNjFcguVG', '2023-09-14 21:24:35'),
(8, 'admin@gmail.com', '$2y$10$BH7WF2TX6ydj.lLXmnmJGOhEUwufxcExgUfcSFzes602PznBtK9wC', '2024-03-20 19:31:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `threads`
--
ALTER TABLE `threads`
  ADD PRIMARY KEY (`thread_id`);
ALTER TABLE `threads` ADD FULLTEXT KEY `thread_title` (`thread_title`,`thread_desc`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `threads`
--
ALTER TABLE `threads`
  MODIFY `thread_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sno` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
