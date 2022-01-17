-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2022 at 05:03 PM
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
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `cust_id` varchar(255) NOT NULL,
  `cust_name` varchar(255) NOT NULL,
  `phn_num` varchar(255) NOT NULL,
  `reg_date` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `cust_id`, `cust_name`, `phn_num`, `reg_date`, `mail`, `country`) VALUES
(1, '#CS-00002	', 'Joan Dyer', '202-555-0983', '12/03/2021', 'JoanDyer@gmail.com', 'South Africa'),
(2, '#CS-00003	', 'Joan', '202-555-0984', '12/03/2021', 'Joan@gmail.com', 'South Africa'),
(3, '#CS-00004	', 'Dyer', '202-555-0984', '12/03/2021', 'Dyer@gmail.com', 'Africa'),
(4, '#CS-00005	', 'Dyer', '202-555-0984', '12/03/2021', 'Dyer@gmail.com', 'America');

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
  `date` varchar(255) NOT NULL,
  `seller_gst` varchar(255) NOT NULL,
  `purchase_gst` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `number`, `order_id`, `cust_name`, `item`, `pay_info`, `price`, `status`, `block_num`, `address`, `pincode`, `phn_num`, `email`, `date`, `seller_gst`, `purchase_gst`) VALUES
(1, '#78414', '#ORDER-00002	', 'Joan Dyer', 'Note Diaries', 'Bank EMI', '620', '1', 'A-510\r\n', '81 Fulton London\r\n', '385467\r\n', '202-458-4568', 'JoanDyer@gmail.com', '12/01/2022', 'AFQWEPX17390VJ', 'NVFQWEPX1730VJ'),
(2, '#78515', '#ORDER-00003	', 'Dyer', 'Diaries', 'Bank EMI', '600', '1', ' A-511', '82 Fulton London', '4568', '202-458-4568', 'Dyer@gmail.com', '12/01/2022', 'AFQWEPX17450BJ', 'DGFSEPX17450BJ'),
(3, '#78416', '#ORDER-00003	', 'Joan', 'Watch', 'Debit Card', '500', '0', 'A-515', '81 Fulton London', ' 2024', ' 202-458-4568', 'Joan@gmail.com', '12/01/2022', 'NVFQWEPX2735KL', 'NVFQWEPX567RG'),
(4, '#78514', '#ORDER-00004	', 'Alexander', 'Oculus VR', 'Credit Card', '250', '0', 'A-516', '81 Downtown', '5165', '458-202-4568', 'Alexander@gmail.com', '12/01/2022', 'YTRIOPPX1730VJ', 'SRTWVYPX1730VJ'),
(5, '#78513', '#ORDER-00015	', 'Julia', 'Flower Port', 'Bank EMI', '400', '1', 'A-518', '81 Fulton London', '385467', '315-467-3874', 'Julia@yahoo.com', '12/01/2022', 'NVFQWEPY1340TZ', 'NVFIOPPX1730XZ'),
(6, '#78412', '#ORDER-00016	', 'Anas', 'Wall Clock', 'Debit Card', '300', '0', 'A-516', '81 Fulton London', '46785', ' 212-428-456', 'Anas@outlook.com', '12/01/2022', 'NVFQWEPX1897YO', 'NVFQWEPX1745TS'),
(7, '#78413', '#ORDER-00017	', 'Anas Khan', 'Watch', 'Debit Card', '400', '1', 'A-510', ' 81 London', ' 385467', ' 202-458-4568', 'AnasKhan@gmail.com', '13/02/2022', 'NVFQWEPX1730XZ', 'NVFQWEPX1730BN'),
(8, '#78417', '#ORDER-00024	', 'Wasay', 'Oculus VR', 'Credit Card', '430', '1', 'A-610', '81 Fulton London\r\n', '315217', '430-420-5431', 'Wasay@gmail.com', '13/01/2022', 'NVFQWEPX1730VJ', 'NVFQWEPX1730VJ'),
(9, '#78510', '#ORDER-00025	', 'Sheheryar', 'Watch', 'Credit Card', '500', '0', ' A-500', ' p1 London', ' 385467', ' 385-467-567', 'Sheheryar@gmail.com', '13/01/2022', 'NVFQWEPX1730VJ', 'NVFQWEPX1730VJ'),
(10, '#78410', '#ORDER-00027	', 'Sheheryar', 'Watch', 'Credit Card', '500', '0', 'A-410', ' 81 London', ' 385467', '854-677-9876', 'shery@gmail.com', '13/01/2022', 'NVFQWEPX1730VJ', 'NVFQWEPX1730VJ'),
(11, '#78409', '#ORDER-00029	', 'Shery', 'Watch', 'Credit Card', '500', '1', ' A-490', ' 81 Fulton London', ' 385467', '385-467-422', 'shery@gmail.com', '14/01/2022', 'NVFQWEPX1730VJ', 'NVFQWEPX1730BJ');

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
(19, 'Watch', '120', 'Good Condition And Great Look', 'image (1).jpg'),
(20, 'Oculus VR', '150', 'Good Condition and Best Quality', 'productslide-3.jpg'),
(21, 'Wall Clock', '120', 'Best For Office use...In Good Condition', 'image (9).jpg'),
(22, 'Oculus VR Black', '120', 'Good Quality', 'product-items-3.jpg');

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
  `count` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visit_count`
--

INSERT INTO `visit_count` (`id`, `count`, `date`) VALUES
(1, '30', '01/13/2022');

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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `visit_count`
--
ALTER TABLE `visit_count`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
