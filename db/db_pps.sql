-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2022 at 02:45 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

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
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `message`, `time`) VALUES
(1, 'Khan', 'Khan@gmail.com', '0331 123456789', 'MY product has not been delivered yet.', '2022-02-11 15:40:02'),
(2, 'Shery', 'Shery@gmail.com', '0322 334455667', 'Product Received', '2022-02-11 15:45:38');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `cust_id` varchar(255) NOT NULL,
  `cust_name` varchar(255) NOT NULL,
  `phn_num` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `cust_id`, `cust_name`, `phn_num`, `mail`, `country`, `reg_date`) VALUES
(1, '#CS-00002	', 'Joan Dyer', '202-555-0983', 'JoanDyer@gmail.com', 'South Africa', '2022-02-11 15:43:04'),
(2, '#CS-00003	', 'Joan', '202-555-0984', 'Joan@gmail.com', 'South Africa', '2022-02-11 15:43:04'),
(3, '#CS-00004	', 'Dyer', '202-555-0984', 'Dyer@gmail.com', 'Africa', '2022-02-11 15:43:04'),
(4, '#CS-00005	', 'Dyer', '202-555-0984', 'Dyer@gmail.com', 'America', '2022-02-11 15:43:04');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `number` varchar(255) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `cust_name` varchar(255) NOT NULL,
  `item` varchar(255) NOT NULL,
  `pay_info` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `block_num` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `phn_num` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `seller_gst` varchar(255) NOT NULL,
  `purchase_gst` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `number`, `order_id`, `cust_name`, `item`, `pay_info`, `price`, `status`, `block_num`, `address`, `pincode`, `phn_num`, `email`, `seller_gst`, `purchase_gst`, `date`) VALUES
(1, '#78414', '#ORDER-00002	', 'Joan Dyer', 'Note Diaries', 'Bank EMI', '620', '1', 'A-510\r\n', '81 Fulton London\r\n', '385467\r\n', '202-458-4568', 'JoanDyer@gmail.com', 'AFQWEPX17390VJ', 'NVFQWEPX1730VJ', '2022-02-11 15:40:54'),
(2, '#78515', '#ORDER-00003	', 'Dyer', 'Diaries', 'Bank EMI', '600', '1', ' A-511', '82 Fulton London', '4568', '202-458-4568', 'Dyer@gmail.com', 'AFQWEPX17450BJ', 'DGFSEPX17450BJ', '2022-02-11 15:40:54'),
(3, '#78416', '#ORDER-00003	', 'Joan', 'Watch', 'Debit Card', '500', '0', 'A-515', '81 Fulton London', ' 2024', ' 202-458-4568', 'Joan@gmail.com', 'NVFQWEPX2735KL', 'NVFQWEPX567RG', '2022-02-11 15:40:54'),
(4, '#78514', '#ORDER-00004	', 'Alexander', 'Oculus VR', 'Credit Card', '250', '0', 'A-516', '81 Downtown', '5165', '458-202-4568', 'Alexander@gmail.com', 'YTRIOPPX1730VJ', 'SRTWVYPX1730VJ', '2022-02-11 15:40:54'),
(5, '#78513', '#ORDER-00015	', 'Julia', 'Flower Port', 'Bank EMI', '400', '1', 'A-518', '81 Fulton London', '385467', '315-467-3874', 'Julia@yahoo.com', 'NVFQWEPY1340TZ', 'NVFIOPPX1730XZ', '2022-02-11 15:40:54'),
(6, '#78412', '#ORDER-00016	', 'Anas', 'Wall Clock', 'Debit Card', '300', '0', 'A-516', '81 Fulton London', '46785', ' 212-428-456', 'Anas@outlook.com', 'NVFQWEPX1897YO', 'NVFQWEPX1745TS', '2022-02-11 15:40:54'),
(7, '#78413', '#ORDER-00017	', 'Anas Khan', 'Watch', 'Debit Card', '400', '1', 'A-510', ' 81 London', ' 385467', ' 202-458-4568', 'AnasKhan@gmail.com', 'NVFQWEPX1730XZ', 'NVFQWEPX1730BN', '2022-02-11 15:40:54'),
(8, '#78417', '#ORDER-00024	', 'Wasay', 'Oculus VR', 'Credit Card', '430', '1', 'A-610', '81 Fulton London\r\n', '315217', '430-420-5431', 'Wasay@gmail.com', 'NVFQWEPX1730VJ', 'NVFQWEPX1730VJ', '2022-02-11 15:40:54'),
(9, '#78510', '#ORDER-00025	', 'Sheheryar', 'Watch', 'Credit Card', '500', '0', ' A-500', ' p1 London', ' 385467', ' 385-467-567', 'Sheheryar@gmail.com', 'NVFQWEPX1730VJ', 'NVFQWEPX1730VJ', '2022-02-11 15:40:54'),
(10, '#78410', '#ORDER-00027	', 'Sheheryar', 'Watch', 'Credit Card', '500', '0', 'A-410', ' 81 London', ' 385467', '854-677-9876', 'shery@gmail.com', 'NVFQWEPX1730VJ', 'NVFQWEPX1730VJ', '2022-02-11 15:40:54'),
(11, '#78409', '#ORDER-00029	', 'Shery', 'Watch', 'Credit Card', '500', '1', ' A-490', ' 81 Fulton London', ' 385467', '385-467-422', 'shery@gmail.com', 'NVFQWEPX1730VJ', 'NVFQWEPX1730BJ', '2022-02-11 15:40:54');

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
(5, 'Flower Port', '80', 'Looks Amazing', 'image (11).jpg'),
(6, 'VR 2', '200', 'good', 'productslide-5.jpg'),
(7, 'VR', '250', 'good', 'productslide-5.jpg'),
(8, 'VR', '250', 'good', 'productslide-5.jpg'),
(9, 'Wall Clock', '120', 'Best For Office use...In Good Condition', 'image (9).jpg'),
(10, 'Watch', '120', 'Good Condition And Great Look', 'image (1).jpg'),
(11, 'Flower Port', '100', 'Great Look', 'image (11).jpg'),
(12, 'VR', '250', 'good', 'productslide-5.jpg'),
(13, 'VR 1', '250', 'good', 'productslide-5.jpg'),
(14, 'VR 2', '200', 'good', 'productslide-5.jpg'),
(15, 'VR 5', '200', 'good', 'productslide-5.jpg'),
(16, 'VR', '200', 'good', 'productslide-5.jpg'),
(17, 'VR Black', '200', 'good', 'productslide-5.jpg'),
(18, 'Flower Port', '100', 'Great Look', 'image (11).jpg'),
(20, 'Oculus VR', '150', 'Good Condition and Best Quality', 'productslide-3.jpg'),
(21, 'Wall Clock', '120', 'Best For Office use...In Good Condition', 'image (9).jpg'),
(22, 'Oculus VR Black', '120', 'Good Quality', 'product-items-3.jpg'),
(23, 'Oculus VR Black\'', '10', 'good one', 'productslide-3.jpg');

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

-- --------------------------------------------------------

--
-- Table structure for table `visit_count`
--

CREATE TABLE `visit_count` (
  `id` int(255) NOT NULL,
  `page_name` varchar(255) NOT NULL,
  `count` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visit_count`
--

INSERT INTO `visit_count` (`id`, `page_name`, `count`) VALUES
(1, 'Home Page', 30),
(2, 'Contact Us', 14);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `visit_count`
--
ALTER TABLE `visit_count`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `visit_count`
--
ALTER TABLE `visit_count`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
