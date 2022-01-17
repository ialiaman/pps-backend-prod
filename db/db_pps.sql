-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2022 at 06:50 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pps`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`, `image`) VALUES
(1, 'Watch', '120', 'Good Condition And Great Look', 'image (1).jpg'),
(2, 'Oculus VR', '150', 'Good Condition and Best Quality', 'productslide-3.jpg'),
(3, 'Flower Port', '100', 'Great Look', 'image (11).jpg'),
(4, 'Wall Clock', '120', 'Best For Office use...In Good Condition', 'image (9).jpg'),
(5, 'WHITE WATCH', '200', 'Good One And looks Amazing...', 'image (6).jpg'),
(6, 'Flower Port', '80', 'Looks Amazing', 'image (11).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `first_name` varchar(128) NOT NULL,
  `last_name` varchar(128) NOT NULL,
  `email` varchar(64) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `cpassword`) VALUES
(18, 'sheheryar', 'khan', 'sheheryarkhan@gmail.com', '$2y$10$7kNUzH1j9.q.wpCMaUP3Mu/PXV26r0zLCBqKHvPH2hzcHcoYj.7vy', '$2y$10$7f0onH9r9cK5/Bwp.jDCKOvxB6nUoX/vCayZb.wO2lmWsQfTBgIU6'),
(19, 'shery', 'khan', 'shery@gmail.com', '$2y$10$Wvr93jmdcgwu2A0.TqI.COmBzevzI.HUs9sGPTJK12Vrf6Djda/qO', '$2y$10$CCZH4BuDeVQPURA8rB1z0O07vok9S7vE0HjoL4SLJRYLfJigi1C4a'),
(20, 'sher', 'khan', 'sherkhan@gmail.com', '$2y$10$7WWrFCmiMPLCpv71iOEzXuRqCkUmWXBPx4h0AQ32BdFfEXpqLn8wq', '$2y$10$6LjmytrvwH2ygmlC0WfXrutm7sVgctJQUkFQA6toqeY2u5q6zk4IO'),
(21, 'shery', 'khan', 'sherykhan@gmail.com', '$2y$10$OUogU7jOPNBLEBDWn8LSZe51.9IE6jTxXe3naN66UzqC5tnSx039.', '$2y$10$4phkNV9aK8G.BdI934oiYuq7peAH43vUQeJ99KAu5mVEBSJIvzNhC'),
(23, 'anas', 'khan', 'anas@gmail.com', '$2y$10$ZpiIz7uhWepqHmE43DDBDOVcWVgROJvjZy9rQ94JB10KfCmJJhZgy', '$2y$10$YXpgsw5jOcYUB5OKOmVM5u21hF0fNycneDRF2T3UZHsoV0H5MdOQ.'),
(24, 'wasay', 'khan', 'wasay@gmail.com', '$2y$10$ZnbXEciEfb1p4/TG8mm09.CT.WL/RWpCtyPI2nV7frSMcLDe.crLW', '$2y$10$OCGNm12RF0NjceKWNT1jFuG2vtxg53XuHQqA/2736S5/ht1lqLK6u');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
