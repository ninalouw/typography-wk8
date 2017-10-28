-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Oct 28, 2017 at 09:16 PM
-- Server version: 5.6.35
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `typography_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_tb`
--

CREATE TABLE `portfolio_tb` (
  `portfolio_id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `image` text NOT NULL,
  `client_name` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `portfolio_tb`
--

INSERT INTO `portfolio_tb` (`portfolio_id`, `title`, `image`, `client_name`, `description`, `category_id`) VALUES
(1, 'Leafy Script', 'img/leafy-fjord.jpg', 'Brian Johnson', 'Spicy jalapeno pariatur ham hock pork aliquip minim cupim labore ex. Leberkas kielbasa aliqua sint flank ad pig, capicola nulla frankfurter.', 3),
(2, 'Vintii Extended', 'img/vintii-2.jpg', 'Vasya Park', 'Spicy jalapeno pariatur ham hock pork aliquip minim cupim labore ex. Leberkas kielbasa aliqua sint flank ad pig, capicola nulla frankfurter.', 2),
(3, 'Kust Script', 'img/kust.jpg', 'Sven Svenson', 'Spicy jalapeno pariatur ham hock pork aliquip minim cupim labore ex. Leberkas kielbasa aliqua sint flank ad pig, capicola nulla frankfurter.', 3),
(4, 'Modeka Mono', 'img/modeka.jpg', 'Morna Mauron', 'Spicy jalapeno pariatur ham hock pork aliquip minim cupim labore ex. Leberkas kielbasa aliqua sint flank ad pig, capicola nulla frankfurter.', 4),
(5, 'Mona Script', 'img/mona-2.png', 'John Smith', 'Spicy jalapeno pariatur ham hock pork aliquip minim cupim labore ex. Leberkas kielbasa aliqua sint flank ad pig, capicola nulla frankfurter.', 3),
(6, 'Peomy', 'img/peomy-1.png', 'Penelope Pitt', 'Spicy jalapeno pariatur ham hock pork aliquip minim cupim labore ex. Leberkas kielbasa aliqua sint flank ad pig, capicola nulla frankfurter.', 3),
(7, 'Sunn Serif', 'img/sunn-serif.jpg', 'Sandy May', 'Spicy jalapeno pariatur ham hock pork aliquip minim cupim labore ex. Leberkas kielbasa aliqua sint flank ad pig, capicola nulla frankfurter.', 1),
(8, 'Ciuta Della', 'img/ciuta.png', 'Sergio Rossi', 'Spicy jalapeno pariatur ham hock pork aliquip minim cupim labore ex. Leberkas kielbasa aliqua sint flank ad pig, capicola nulla frankfurter.', 2),
(9, 'Kaleidos', 'img/kaleidos.png', 'Karl Schlemmer', 'Spicy jalapeno pariatur ham hock pork aliquip minim cupim labore ex. Leberkas kielbasa aliqua sint flank ad pig, capicola nulla frankfurter.', 2),
(12, 'Geogro', '../img/geogro-slab.png', 'Gina Bert', 'Spicy jalapeno pariatur ham hock pork aliquip minim cupim labore ex. Leberkas kielbasa aliqua sint flank ad pig, capicola nulla frankfurter.', 1),
(14, 'Pacifico', '../img/pacifico.png', 'Peter Kim', 'Spicy jalapeno pariatur ham hock pork aliquip minim cupim labore ex. Leberkas kielbasa aliqua sint flank ad pig, capicola nulla frankfurter.', 2),
(16, 'Leafy Extended', '../img/leafy.jpg', 'Joelle Buck', 'Spicy jalapeno pariatur ham hock pork aliquip minim cupim labore ex. Leberkas kielbasa aliqua sint flank ad pig, capicola nulla frankfurter.', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `portfolio_tb`
--
ALTER TABLE `portfolio_tb`
  ADD PRIMARY KEY (`portfolio_id`),
  ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `portfolio_tb`
--
ALTER TABLE `portfolio_tb`
  MODIFY `portfolio_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `portfolio_tb`
--
ALTER TABLE `portfolio_tb`
  ADD CONSTRAINT `fk_category_id` FOREIGN KEY (`category_id`) REFERENCES `category_tb` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE;
