-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2021 at 01:57 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `display_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `display_name`, `email`, `password`) VALUES
(3, 'admin', 'admin@admin.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `photo` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `photo`, `description`) VALUES
(7, 'H & M', 'HnM.png', 'Hennes & Mauritz AB'),
(8, 'Pull and Bear', 'pnb.png', 'Pull&Bear is a Spanish clothing and accessories retailer.'),
(9, 'Zara', 'zara.png', 'Zara is a Spanish clothing retailer based in Galicia');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `password`, `phone`) VALUES
(2, 'hirgy', 'hirgy9@gmail.com', 'kamujelek321', '081312243295');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `address` text NOT NULL,
  `status` enum('pending','packing','shipping','delivered','canceled') NOT NULL DEFAULT 'pending',
  `total` int(11) NOT NULL,
  `payment_method` enum('Cash on delivery','Debit Card') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `photo` text NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `price`, `photo`, `brand_id`, `product_category_id`) VALUES
(3, 'Printed T-shirt', 'Black/Snoopy', 300000, 'printed.jpg', 7, 2),
(4, 'Printed T-shirt', 'BLACK/LIL NAS X', 300000, 'printed.2.jpg', 7, 2),
(5, 'Relaxed Fit T-shirt', 'BEIGE/REFLECTIVE PRINT', 180000, 'relaxed.jpg', 7, 2),
(6, 'Regular Fit T-shirt', 'BLACK/DISPLACED', 80000, 'regular.jpg', 7, 2),
(7, 'Embroidery Renda T-Shirt', 'THE T-SHIRT IS MADE FROM A STITCH DESIGN FROM COTTON WITH A RANDOM PATTERN TEXTURE. ROUND COLLAR AND', 329000, 'zara1.jpg', 9, 2),
(8, 'Round Collar T-Shirt', 'WIDE T-SHIRT WITH ROUND COLLAR AND SHORT SLEEVES.', 499900, 'zara2.jpg', 9, 2),
(9, 'T-Shirt  Tank Top', 'WIDE STRIPED T-SHIRT WITH ROUND COLLAR AND SLEEVELESS.', 199900, 'zara3.jpg', 7, 2),
(10, '2-pack of muscle fit T-shirts', 'Pack of two basic muscle fit T-shirts with short sleeves and a round neckline. Made of cotton.', 139900, 'pnb1.jpg', 8, 2),
(11, 'Black and white tie-dye T-shirt', 'Black and white tie-dye shirt with rounded neckline and short sleeves. Made of 100% cotton.', 299900, 'pnb2.jpg', 8, 2),
(12, 'Slim fit chinos with accessories', 'Slim fit chinos with detailed accessories, elastic drawstring waistband, zippers and buttons, and pockets.', 449900, 'pnb3.jpg', 8, 3),
(13, 'Slim fit chinos with accessories', 'Slim fit chinos with detailed accessories, elastic drawstring waistband, zippers and buttons, and pockets.', 449900, 'pnb4.jpg', 8, 3),
(14, 'Ripstop cargo trousers', 'Cargo pants in ripstop fabric with pockets at the brim, waist and elastic cuffs. Made of cotton.', 599900, 'pnb5.jpg', 8, 3),
(15, 'Standard dyed cargo trousers', 'Standard dyed cargo trousers with closed pockets and elastic waistband and hem.', 599900, 'pnb6.jpg', 8, 3),
(16, 'Cotton Chinos Skinny Fit', 'Stretch twill cotton chinos with button and zipper golbi, diagonal side pockets and button back pockets. Skinny Fit - a slightly shorter leg model where the thighs, knees and ankles are tight for a tight fitting silhouette.', 399900, 'hnm1.jpg', 7, 3),
(17, 'Joggers Skinny Fit', 'Sweatshirt jogger pants with closed elastic band and drawstring at waist. Back pocket with patch zippers, diagonal side pockets and slim leg style with ribbed seams. Fluffy on the inside. The polyester content in these jogger pants is recycled.', 499900, 'hnm2.jpg', 7, 3),
(18, 'Jogger Cropped Waist Pants', 'LIGHT TROUSERS WITH ELASTIC WAISTS ARE EASY TO ADJUST WITH DRAWSTRING. FRONT PLEATS DETAIL.', 729900, 'zara4.jpg', 9, 3),
(19, 'Shirt Jacket', 'Shirt jacket in woven fabric with a collar and press-studs down the front.', 899900, 'hnm3.jpg', 7, 5),
(20, 'Denim Shirt jacket', 'Shirt jacket in washed cotton denim with a collar, buttons down the front and open chest pockets', 449900, 'hnm4.jpg', 7, 5),
(21, 'Jacket Slim Fit', 'Single-breasted jacket in a textured weave made from a cotton blend with narrow notch lapels, a decorative buttonhole and imitation suede elbow patches.', 899900, 'hnm5.jpg', 7, 5),
(22, 'Sweatshirt', 'Printed T-shirt top, gently drooping shoulders, long sleeves and knits around neckline, cuffs, and hems. Fluffy on the inside.', 150000, 'hnm6.jpg', 7, 6),
(23, 'Hooded top', 'Long-sleeved hooded sweater in soft T-shirt with one kangaroo style pocket.', 449900, 'hnm7.jpg', 7, 6),
(25, 'Color Block Technical Jacket', 'LIGHT JACKET WITH STAND COLLAR AND LONG SLEEVES ELASTIC CUFF SEAMS. PASPOAL POCKET ON THE HIP.', 999900, 'zara5.jpg', 9, 5),
(26, 'Parka Kanguru Linen', 'LIGHT-COLLARED PARKA WITH EASY-TO-ADJUST HOOD AND EASY-TO-ADJUST LONG SLEEVES. POCKETS IN FRONT OF', 999900, 'zara6.jpg', 9, 5),
(27, 'Varsity Slogan Hoodie', 'LOOSE-FITTING HOODIE WITH AN ADJUSTABLE HOOD AND SHORT SLEEVES. FEATURING RIBBED TRIMS', 629900, 'zara7.jpg', 9, 6),
(28, 'Basic colored denim jacket', 'Basic denim jacket with side and front pockets, and buttons. Available in several colors and made of cotton.', 599900, 'pnb7.jpg', 8, 5),
(29, 'Light bomber jacket', 'Basic lightweight bomber jacket with zippers on front, pockets, and long sleeves.', 449900, 'pnb8.jpg', 9, 5),
(30, 'Basic sweatshirt with a linear logo', 'The basic round neck sweatshirt is available in a variety of colors, with a simple contrast logo, long sleeves, and round neckline. Made of cotton.', 399900, 'pnb9.jpg', 8, 6);

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `name`, `description`) VALUES
(2, 'T - Shirts', ''),
(3, 'Pants', ''),
(5, 'Jackets', ''),
(6, 'Hoodies & Sweatshirt', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`email`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `brand_id` (`brand_id`),
  ADD KEY `product_category_id` (`product_category_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`product_category_id`) REFERENCES `product_categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
