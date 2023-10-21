-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2023 at 02:52 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `signupforms`
--

-- --------------------------------------------------------

--
-- Table structure for table `phones`
--

CREATE TABLE `phones` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `ram` varchar(20) NOT NULL,
  `storage` varchar(20) NOT NULL,
  `camera` varchar(20) NOT NULL,
  `battery` varchar(20) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `phones`
--

INSERT INTO `phones` (`id`, `name`, `brand`, `ram`, `storage`, `camera`, `battery`, `price`) VALUES
(1, 'a3', 'MI', '4GB', '64GB', '42mp', '4500mah', 11000),
(3, 'iphon11', 'IPHONE', '4GB', '64GB', '12MP', '5000mah', 49999),
(4, 'm13', 'OPPO', '4GB', '64GB', '60MP', '4000mah', 16099),
(5, 'iphone13', 'IPHONE', '4GB', '128GB', '12MP', '2815mAh', 59999),
(6, 'Galaxy S21', 'SAMSUNG', '8GB', '128GB', '12MP', '4000mAh', 49999),
(7, '9pro', 'ONEPLUS', '8GB', '128GB', '48MP', '4500mAh', 44999),
(8, 'Note 10 pro', 'MI', '6GB', '128GB', '64MP', '5020mAh', 14999),
(9, 'Pixel6', 'GOOGLE', '12GB', '128GB', '108MP', '4500mAh', 16999),
(10, 'V21', 'VIVO', '8GB', '128GB', '44MP', '4000mAh', 24999),
(11, 'X3', 'POCO', '6GB', '128GB', '48MP', '5160mAh', 17999),
(12, 'ROG Phone 5', 'ASUS', '8GB', '128GB', '64MP', '6000mAh', 39999),
(13, 'A52', 'SAMSUNG', '6GB', '128GB', 'Quad 64MP', '4500MaH', 21499),
(14, 'y20', 'VIVO', '4GB', '64GB', '13MP', '5000mAh', 11990),
(15, 'F19 pro+', 'OPPO', '8GB', '128GB', '48MP', '4310mAh', 22990),
(16, 'Narzo 30 Pro', 'REALME', '4GB', '64GB', '48MP', '5000mAh', 13999),
(17, '11X', 'MI', '6GB', '128GB', '48MP', '4520mAh', 26999),
(18, 'Iphon12', 'IPHONE', '4GB', '64GB', '12MP', '2815mAh', 59999),
(19, 'ZenPHone7', 'ASUS', '8GB', '128GB', '64 MP', '5000mmAh', 29999);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `roles` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password_hash`, `roles`) VALUES
(1, 'useru', '$2y$10$ZqOa4chTxatG7OMH3trTpekEaRvRc4/X5NuSdwV/evp9BEsY.EJje', 'abc'),
(2, 'useru', '$2y$10$EOdpwkr41.XDW/KIBd/eK.PWH.EB4xliKwLxwnYAnsOBkrdbkWhAa', 'abc'),
(3, 'useru', '$2y$10$MbfiLrA7TYd6H28Dvkg3yuHgY2/asZj5n.RytfSmBsPUX/ybuWeQW', 'abc'),
(4, 'useru', '$2y$10$MWjpRKroSf0/M28.qOIf4uFV/DTvPYTPWgPjx2jgEqeWAH8.8CBH2', 'abc'),
(5, 'useru', '$2y$10$9ZmAM350BFByUJ29m.ESDOUfXdEl2NgtG1egvDnV.SwEgVsg/PjCm', 'dkdkdk'),
(6, 'useru', '$2y$10$PA2EwaRlFUQozj85eMd4reXVyyUkpNfPnEaBDXs3hHDb1Ji6fk9nG', 'dkdkdk'),
(7, 'abhinav', '$2y$10$/zmROTguJ64d4ygeQNgoMO.xF1JgBM7jsheiv2ZUYqtcMuowNCFvO', 'admin'),
(8, 'abhinav', '$2y$10$XM7W7BYPWWcrpkCLc1kyie7.k.R5k0zYg1cPVGpjhYu6NiUs6sHRS', 'admin'),
(9, 'abhinav', '$2y$10$LomSTbA49rJ5o0rv3CMlfesVJYsADe7XY8HObMKn8W9WeuADDUBAm', 'admin'),
(10, 'abhinav', '$2y$10$RPZjXgw0A5mdVzJuSZ.WDuAdYF327dYDNVv4SgImbG/S/fwJ/4zZW', 'admin'),
(11, 'abhi', '$2y$10$GWlJL/9bLoCTTgjFpPdreOQL/njpdNUoOx6UZZE6jzuueKCaQLAIS', 'admin'),
(12, 'abhi', '$2y$10$RW/2FMZsU4xqvkWhlelc6.9CGAvQHRgp6YZUcS5HrH9d3J6J6RzZK', 'admin'),
(13, 'abhi', '$2y$10$gxr.2HFxbHsQgYXVZ3DGbetq/a9icn41U2f9V8yARO4o0txVNk5BK', 'admin'),
(14, 'abhi', '$2y$10$55Vns3GEl9uS0fyTilfv8.1m67qpg8yOSGoGnhN6M4cfqdXzIhCbC', 'admin'),
(15, 'khan', 'khanam', 'user'),
(16, 'khan', 'khanji', 'user'),
(17, 'khanbhai', 'bhai', 'user'),
(18, 'ashu', 'ashu', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `phones`
--
ALTER TABLE `phones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `phones`
--
ALTER TABLE `phones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
