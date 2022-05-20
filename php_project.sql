-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2022 at 09:16 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_cost` decimal(6,2) NOT NULL,
  `order_status` varchar(100) NOT NULL DEFAULT 'on_hold',
  `user_id` int(11) NOT NULL,
  `user_phone` int(11) NOT NULL,
  `user_city` varchar(255) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `order_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_cost`, `order_status`, `user_id`, `user_phone`, `user_city`, `user_address`, `order_date`) VALUES
(1, '155.00', 'delivered', 1, 2147483647, 'asdsa', 'saddasd', '2022-05-14 09:53:44'),
(2, '155.00', 'delivered', 1, 2147483647, 'vfddvd', 'assdfff', '2022-05-14 10:59:34'),
(3, '155.00', 'delivered', 1, 2147483647, 'Patna', 'Daldali road Danapur', '2022-05-14 13:30:42'),
(4, '155.00', 'delivered', 1, 620100753, 'Patna', 'Daldali road Danapur', '2022-05-14 13:32:09'),
(5, '155.00', 'delivered', 1, 620100753, 'Patna', 'Daldali road Danapur', '2022-05-14 13:57:51'),
(6, '155.00', 'delivered', 1, 620100753, 'Patna', 'Daldali road Danapur', '2022-05-14 14:01:53'),
(7, '599.00', 'delivered', 3, 2147483647, 'yty', 'eee', '2022-05-15 14:45:21'),
(8, '599.00', 'deliverd', 3, 620100753, 'Patna', 'Daldali road Danapur', '2022-05-15 15:55:26'),
(9, '699.00', 'delivered', 3, 2147483647, 'Patna', 'Daldali road Danapur', '2022-05-16 11:03:25'),
(10, '9999.99', 'delivered', 2, 2147483647, 'PATNA', 'SULTANPUR MATH TRIMURTI NAGAR', '2022-05-16 11:08:26'),
(11, '699.00', 'delivered', 3, 2147483647, 'Lucknow', 'Lucknow', '2022-05-16 19:47:44'),
(12, '155.00', 'delivered', 3, 620100753, 'Patna', 'Daldali road Danapur', '2022-05-17 13:18:06'),
(13, '1299.00', 'delivered', 3, 620100753, 'Patna', 'Daldali road Danapur', '2022-05-17 13:33:07'),
(14, '1299.00', 'delivered', 3, 620100753, 'Patna', 'Daldali road Danapur', '2022-05-17 13:36:10'),
(15, '1299.00', 'delivered', 3, 620100753, 'Patna', 'Daldali road Danapur', '2022-05-17 19:43:28'),
(16, '1299.00', 'delivered', 3, 620100753, 'Patna', 'Daldali road Danapur', '2022-05-17 19:43:50'),
(17, '2298.00', 'delivered', 3, 620100753, 'Patna', 'Daldali road Danapur', '2022-05-17 21:19:47'),
(18, '155.00', 'delivered', 3, 620100753, 'Patna', 'Daldali road Danapur', '2022-05-18 06:34:15'),
(19, '604.00', 'delivered', 3, 620100753, 'Patna', 'Daldali road Danapur', '2022-05-18 06:35:52'),
(20, '449.00', 'delivered', 3, 620100753, 'Patna', 'Daldali road Danapur', '2022-05-18 09:29:32'),
(21, '2148.00', 'not paid', 3, 620100753, 'Patna', 'Daldali road Danapur', '2022-05-18 21:00:41'),
(22, '2198.00', 'not paid', 3, 2147483647, 'Chandigarh', 'Chandigarh University', '2022-05-19 07:38:13');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `item_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_price` decimal(6,2) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`item_id`, `order_id`, `product_id`, `product_name`, `product_image`, `product_price`, `product_quantity`, `user_id`, `order_date`) VALUES
(1, 2, '6', 'Coats', 'coat1.webp', '155.00', 1, 1, '2022-05-14 10:59:34'),
(2, 3, '2', 'White Shoes', 'featured1.webp', '155.00', 1, 1, '2022-05-14 13:30:42'),
(3, 4, '2', 'White Shoes', 'featured1.webp', '155.00', 1, 1, '2022-05-14 13:32:09'),
(4, 5, '2', 'White Shoes', 'featured1.webp', '155.00', 1, 1, '2022-05-14 13:57:51'),
(5, 6, '2', 'White Shoes', 'featured1.webp', '155.00', 1, 1, '2022-05-14 14:01:53'),
(6, 7, '10', 'Men\'s Coat', 'coat3.jpg', '599.00', 1, 3, '2022-05-15 14:45:21'),
(7, 8, '10', 'Men\'s Coat', 'coat3.jpg', '599.00', 1, 3, '2022-05-15 15:55:26'),
(8, 9, '30', 'Black  shaded Jeans', 'Jeans7.webp', '699.00', 1, 3, '2022-05-16 11:03:25'),
(9, 10, '15', ' Sasta Apple Watch', 'watch4.jpeg', '199.00', 1, 2, '2022-05-16 11:08:26'),
(10, 10, '48', 'Rangila Shoe', 'shoes9.webp', '8999.00', 1, 2, '2022-05-16 11:08:26'),
(11, 10, '40', 'Kurti 1', 'Kurti10.webp', '699.00', 1, 2, '2022-05-16 11:08:26'),
(12, 10, '41', 'Black Kurti ', 'Kurti11.webp', '699.00', 1, 2, '2022-05-16 11:08:26'),
(13, 11, '37', 'Green Crop Tops', 'Tops4.webp', '699.00', 1, 3, '2022-05-16 19:47:44'),
(14, 12, '2', 'White Shoes', 'featured1.webp', '155.00', 1, 3, '2022-05-17 13:18:06'),
(15, 13, '20', 'Black Shirt', 'Casualshirt1.webp', '1299.00', 1, 3, '2022-05-17 13:33:07'),
(16, 14, '20', 'Black Shirt', 'Casualshirt1.webp', '1299.00', 1, 3, '2022-05-17 13:36:10'),
(17, 15, '20', 'Black Shirt', 'Casualshirt1.webp', '1299.00', 1, 3, '2022-05-17 19:43:28'),
(18, 16, '20', 'Black Shirt', 'Casualshirt1.webp', '1299.00', 1, 3, '2022-05-17 19:43:50'),
(19, 17, '20', 'Black Shirt', 'Casualshirt1.webp', '1299.00', 1, 3, '2022-05-17 21:19:47'),
(20, 17, '21', 'Green Shirt', 'Casualshirt2.webp', '999.00', 1, 3, '2022-05-17 21:19:47'),
(21, 18, '3', 'Shirt', 'shirt.jpg', '155.00', 1, 3, '2022-05-18 06:34:15'),
(22, 19, '3', 'Shirt', 'shirt.jpg', '155.00', 1, 3, '2022-05-18 06:35:52'),
(23, 19, '4', 'Grey Jacket', 'featured5.jpeg', '449.00', 1, 3, '2022-05-18 06:35:52'),
(24, 20, '4', 'Grey Jacket', 'featured5.jpeg', '449.00', 1, 3, '2022-05-18 09:29:32'),
(25, 21, '12', 'Realme Watch', 'watch1.jpeg', '899.00', 1, 3, '2022-05-18 21:00:41'),
(26, 21, '18', 'Puma Shoes', 'shoes3.jpeg', '1249.00', 1, 3, '2022-05-18 21:00:41'),
(27, 22, '12', 'Realme Watch', 'watch1.jpeg', '899.00', 1, 3, '2022-05-19 07:38:13'),
(28, 22, '20', 'Black Shirt', 'Casualshirt1.webp', '1299.00', 1, 3, '2022-05-19 07:38:13');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `transaction_id` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_category` varchar(100) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_image2` varchar(255) NOT NULL,
  `product_image3` varchar(255) NOT NULL,
  `product_image4` varchar(255) NOT NULL,
  `product_price` decimal(6,2) NOT NULL,
  `product_special_offer` int(2) NOT NULL,
  `product_color` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_category`, `product_description`, `product_image`, `product_image2`, `product_image3`, `product_image4`, `product_price`, `product_special_offer`, `product_color`) VALUES
(2, 'White Shoes', 'featured', 'awesome white shoes', 'featured1.webp', 'featured1.webp', 'featured1.webp', 'featured1.webp', '155.00', 0, 'white'),
(3, 'Shirt', 'featured', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'shirt.jpg', 'shirt.jpeg', 'shirt.jpeg', 'shirt.jpeg', '155.00', 0, 'black'),
(4, 'Grey Jacket', 'featured', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'featured5.jpeg', 'featured5.jpeg', 'featured5.jpeg', 'featured5.jpeg', '449.00', 0, 'Grey'),
(5, 'Black Jacket', 'featured', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'featured6.jpeg', 'featured6.jpeg', 'featured6.jpeg', 'featured6.jpeg', '399.00', 0, 'Black'),
(6, 'Girls Coat', 'coats', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'coat1.webp', 'coat1.webp', 'coat1.webp', 'coat1.webp', '499.00', 0, 'White'),
(9, 'Girls Pink Coat', 'coats', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'coat2.jpg', 'coat2.jpg', 'coat2.jpg', 'coat2.jpg', '659.00', 0, 'Pink'),
(10, 'Men\'s Coat', 'coats', 'daaLorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitiasdadassda', 'coat3.jpg', 'coat3.jpg', 'coat3.jpg', 'coat3.jpg', '599.00', 0, 'Yellow'),
(11, 'Men\'s Coat White', 'coats', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'coat4.webp', 'coat4.webp', 'coat4.webp', 'coat4.webp', '699.00', 0, 'White'),
(12, 'Realme Watch', 'watch', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'watch1.jpeg', 'watch1.jpeg', 'watch1.jpeg', 'watch1.jpeg', '899.00', 0, 'Silver'),
(13, 'Mi Watch', 'watch', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'watch2.jpeg', 'watch2.jpeg', 'watch2.jpeg', 'watch2.jpeg', '1049.00', 0, 'White'),
(14, 'Fastrack Watch', 'watch', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'watch3.jpeg', 'watch3.jpeg', 'watch3.jpeg', 'watch3.jpeg', '1890.00', 0, 'Black'),
(15, ' Sasta Apple Watch', 'watch', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'watch4.jpeg', 'watch4.jpeg', 'watch4.jpeg', 'watch4.jpeg', '199.00', 0, 'Black'),
(16, 'Adidas Shoes', 'shoes', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'shoes1.jpeg', 'shoes1.jpeg', 'shoes1.jpeg', 'shoes1.jpeg', '490.00', 0, 'blue'),
(17, 'Reebok', 'shoes', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'shoes2.jpeg', 'shoes2.jpeg', 'shoes2.jpeg', 'shoes2.jpeg', '750.00', 0, 'Black'),
(18, 'Puma Shoes', 'shoes', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'shoes3.jpeg', 'shoes3.jpeg', 'shoes3.jpeg', 'shoes3.jpeg', '1249.00', 0, 'Black'),
(19, 'Nike Shoes', 'shoes', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'shoes4.jpeg', 'shoes4.jpeg', 'shoes4.jpeg', 'shoes4.jpeg', '1599.00', 0, 'Yellow'),
(20, 'Black Shirt', 'm_shirt', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'Casualshirt1.webp', 'Casualshirt1.webp', 'Casualshirt1.webp', 'Casualshirt1.webp', '1299.00', 0, 'Black'),
(21, 'Green Shirt', 'm_shirt', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'Casualshirt2.webp', 'Casualshirt2.webp', 'Casualshirt2.webp', 'Casualshirt2.webp', '999.00', 0, 'Green'),
(22, 'Casual Black Shirt', 'm_shirt', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'Casualshirt3.webp', 'Casualshirt3.webp', 'Casualshirt3.webp', 'Casualshirt3.webp', '299.00', 0, 'Black'),
(23, 'Striped Fancy Shirt', 'm_shirt', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'Casualshirt4.webp', 'Casualshirt4.webp', 'Casualshirt4.webp', 'Casualshirt4.webp', '199.00', 0, 'colourful'),
(24, 'White Shirt', 'm2_shirt', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'Casualshirt5.webp', 'Casualshirt5.webp', 'Casualshirt5.webp', 'Casualshirt5.webp', '699.00', 0, 'colourful'),
(25, 'T-Shirt', 'm2_shirt', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'tshirt1.webp', 'tshirt1.webp', 'tshirt1.webp', 'tshirt1.webp', '699.00', 0, 'colourful'),
(26, 'RED & BLACK T-Shirt', 'm2_shirt', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'tshirt2.webp', 'tshirt2.webp', 'tshirt2.webp', 'tshirt2.webp', '699.00', 0, 'colourful'),
(27, 'White Stripped Shirt', 'm2_shirt', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'tshirt4.webp', 'tshirt4.webp', 'tshirt4.webp', 'tshirt4.webp', '699.00', 0, 'colourful'),
(28, 'Black Jeans', 'm3_shirt', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'Jeans1.webp', 'Jeans1.webp', 'Jeans1.webp', 'Jeans1.webp', '699.00', 0, 'colourful'),
(29, 'Blue Jeans', 'm3_shirt', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'Jeans2.webp', 'Jeans2.webp', 'Jeans2.webp', 'Jeans2.webp', '699.00', 0, 'colourful'),
(30, 'Black  shaded Jeans', 'm3_shirt', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'Jeans7.webp', 'Jeans7.webp', 'Jeans7.webp', 'Jeans7.webp', '699.00', 0, 'colourful'),
(31, 'Blue shaded Jeans', 'm3_shirt', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'Jeans11.webp', 'Jeans11.webp', 'Jeans11.webp', 'Jeans11.webp', '699.00', 0, 'colourful'),
(32, 'Saree', 'w_shirt', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'Saree1.webp', 'Saree1.webp', 'Saree1.webp', 'Saree1.webp', '699.00', 0, 'colourful'),
(33, 'Pink and White Saree', 'w_shirt', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'Saree2.jpg', 'Saree2.jpg', 'Saree2.jpg', 'Saree2.jpg', '699.00', 0, 'colourful'),
(34, 'Tops', 'w_shirt', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'Tops1.webp', 'Tops1.webp', 'Tops1.webp', 'Tops1.webp', '699.00', 0, 'colourful'),
(35, 'Crop Tops', 'w_shirt', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'Tops2.webp', 'Tops2.webp', 'Tops2.webp', 'Tops2.webp', '699.00', 0, 'colourful'),
(36, 'Pink Crop Tops', 'w2_shirt', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'Tops3.webp', 'Tops3.webp', 'Tops3.webp', 'Tops3.webp', '699.00', 0, 'colourful'),
(37, 'Green Crop Tops', 'w2_shirt', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'Tops4.webp', 'Tops4.webp', 'Tops4.webp', 'Tops4.webp', '699.00', 0, 'colourful'),
(38, 'Blue Skirt', 'w2_shirt', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'skirt1.webp', 'skirt1.webp', 'skirt1.webp', 'skirt1.webp', '699.00', 0, 'colourful'),
(39, 'Black Skirt', 'w2_shirt', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'skirt3.webp', 'skirt3.webp', 'skirt3.webp', 'skirt3.webp', '699.00', 0, 'colourful'),
(40, 'Kurti 1', 'w3_shirt', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'Kurti10.webp', 'Kurti10.webp', 'Kurti10.webp', 'Kurti10.webp', '699.00', 0, 'colourful'),
(41, 'Black Kurti ', 'w3_shirt', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'Kurti11.webp', 'Kurti11.webp', 'Kurti11.webp', 'Kurti11.webp', '699.00', 0, 'colourful'),
(42, 'White Coat', 'w3_shirt', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'coat1.webp', 'coat1.webp', 'coat1.webp', 'coat1.webp', '999.00', 0, 'colourful'),
(43, 'Pink Coat', 'w3_shirt', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'coat2.jpg', 'coat2.jpg', 'coat2.jpg', 'coat2.jpg', '1099.00', 0, 'colourful'),
(44, 'Reebok Shoes', 's_shoes', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'shoes5.webp', 'shoes5.webp', 'shoes5.webp', 'shoes5.webp', '599.00', 0, 'Red'),
(45, 'Adidas Shoes', 's_shoes', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'shoes6.webp', 'shoes6.webp', 'shoes6.webp', 'shoes6.webp', '825.00', 0, 'Black'),
(46, 'Nike Shoes', 's_shoes', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'shoes7.webp', 'shoes7.webp', 'shoes7.webp', 'shoes7.webp', '2259.00', 0, 'Colorfull'),
(47, 'Casual shoes', 's_shoes', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'shoes8.webp', 'shoes8.webp', 'shoes8.webp', 'shoes8.webp', '1459.00', 0, 'Colorfull'),
(48, 'Rangila Shoe', 's1_shoes', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'shoes9.webp', 'shoes9.webp', 'shoes9.webp', 'shoes9.webp', '8999.00', 0, 'Colorfull'),
(49, 'Branded Casual Shoes', 's1_shoes', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'shoes10.webp', 'shoes10.webp', 'shoes10.webp', 'shoes10.webp', '999.00', 0, 'Colorfull'),
(50, 'Adidas Exclusive Shoe', 's1_shoes', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'shoes11.webp', 'shoes11.webp', 'shoes11.webp', 'shoes11.webp', '4599.00', 0, 'Colorfull'),
(51, 'Dailyuse Shoes', 's1_shoes', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'shoes12.webp', 'shoes12.webp', 'shoes12.webp', 'shoes12.webp', '449.00', 0, 'Colorfull'),
(52, 'Grey Trolley Bag', 'bag', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'bag1.webp', 'bag1.webp', 'bag1.webp', 'bag1.webp', '2049.00', 0, 'Colorfull'),
(53, 'Black Trolley Bag', 'bag', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'bag2.webp', 'bag2.webp', 'bag2.webp', 'bag2.webp', '2550.00', 0, 'Colorfull'),
(54, 'FancyTrolley Bag', 'bag', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'bags3.webp', 'bags3.webp', 'bags3.webp', 'bags3.webp', '4550.00', 0, 'Colorfull'),
(55, 'Exclusive Trolley Bag', 'bag', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'bags4.webp', 'bags4.webp', 'bags4.webp', 'bags4.webp', '4999.00', 0, 'Colorfull'),
(56, 'Small Bag', 'bag_1', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'bags5.webp', 'bags5.webp', 'bags5.webp', 'bags5.webp', '599.00', 0, 'Colorfull'),
(57, ' Laptop Bag', 'bag_1', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'bags6.webp', 'bags6.webp', 'bags6.webp', 'bags6.webp', '799.00', 0, 'Colorfull'),
(58, ' Laptop Bag Black', 'bag_1', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'bag7.webp', 'bag7.webp', 'bag7.webp', 'bag7.webp', '399.00', 0, 'Colorfull'),
(59, ' Laptop Bag Blue', 'bag_1', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'bag8.webp', 'bag8.webp', 'bag8.webp', 'bag8.webp', '599.00', 0, 'Colorfull'),
(60, 'School Bag Orange', 'bag_2', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'bag9.webp', 'bag9.webp', 'bag9.webp', 'bag9.webp', '799.00', 0, 'Colorfull'),
(61, 'School Bag Blue', 'bag_2', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'bag10.webp', 'bag10.webp', 'bag10.webp', 'bag10.webp', '1099.00', 0, 'Colorfull'),
(62, 'School Bag Black', 'bag_2', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'bag11.webp', 'bag11.webp', 'bag11.webp', 'bag11.webp', '499.00', 0, 'Colorfull'),
(63, 'Exclusive School Bag', 'bag_2', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'bag12.webp', 'bag12.webp', 'bag12.webp', 'bag12.webp', '1249.00', 0, 'Colorfull'),
(64, 'Boys Party Wear', 'boys', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'boys_party1.webp', 'boys_party1.webp', 'boys_party1.webp', 'boys_party1.webp', '1049.00', 0, 'Colorfull'),
(65, 'Boys Party Wear Grey', 'boys', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'boys_party2.webp', 'boys_party2.webp', 'boys_party2.webp', 'boys_party2.webp', '1449.00', 0, 'Colorfull'),
(66, 'Boys Party Wear White', 'boys', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'boys_party3.webp', 'boys_party3.webp', 'boys_party3.webp', 'boys_party3.webp', '2449.00', 0, 'Colorfull'),
(67, 'Boys Party Wear Blue', 'boys', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'boys_party4.webp', 'boys_party4.webp', 'boys_party4.webp', 'boys_party4.webp', '2449.00', 0, 'Colorfull'),
(68, 'Blue Jeans', 'boys_1', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'boys_jeans1.webp', 'boys_jeans1.webp', 'boys_jeans1.webp', 'boys_jeans1.webp', '999.00', 0, 'Colorfull'),
(69, 'Fancy Jeans', 'boys_1', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'boys_jeans2.webp', 'boys_jeans2.webp', 'boys_jeans2.webp', 'boys_jeans2.webp', '399.00', 0, 'Colorfull'),
(70, 'Black Jeans', 'boys_1', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'boys_jeans3.webp', 'boys_jeans3.webp', 'boys_jeans3.webp', 'boys_jeans3.webp', '599.00', 0, 'Colorfull'),
(71, 'Sasta Jeans', 'boys_1', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'boys_jeans4.webp', 'boys_jeans4.webp', 'boys_jeans4.webp', 'boys_jeans4.webp', '199.00', 0, 'Colorfull'),
(72, 'Sky Blue T-shit', 'boys_2', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'boys_tshirt1.webp', 'boys_tshirt1.webp', 'boys_tshirt1.webp', 'boys_tshirt1.webp', '599.00', 0, 'Colorfull'),
(73, 'Pack of 5 T-shit', 'boys_2', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'boys_tshirt2.webp', 'boys_tshirt2.webp', 'boys_tshirt2.webp', 'boys_tshirt2.webp', '1099.00', 0, 'Colorfull'),
(74, 'Black T-shit', 'boys_2', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'boys_tshirt3.webp', 'boys_tshirt3.webp', 'boys_tshirt3.webp', 'boys_tshirt3.webp', '429.00', 0, 'Colorfull'),
(75, 'Green T-shit', 'boys_2', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'boys_tshirt4.webp', 'boys_tshirt4.webp', 'boys_tshirt4.webp', 'boys_tshirt4.webp', '929.00', 0, 'Colorfull'),
(76, 'Fancy Watch', 'watch_1', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'watch5.webp', 'watch5.webp', 'watch5.webp', 'watch5.webp', '999.00', 0, 'Colorfull'),
(77, 'Fancy Analog Watch', 'watch_1', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'watch6.webp', 'watch6.webp', 'watch6.webp', 'watch6.webp', '459.00', 0, 'Colorfull'),
(78, 'Leather Belt Watch', 'watch_1', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'watch7.webp', 'watch7.webp', 'watch7.webp', 'watch7.webp', '899.00', 0, 'Colorfull'),
(79, 'Silver Watch', 'watch_1', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'watch8.webp', 'watch8.webp', 'watch8.webp', 'watch8.webp', '799.00', 0, 'Colorfull'),
(80, 'Brown Leather Watch', 'watch_2', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'watch9.webp', 'watch9.webp', 'watch9.webp', 'watch9.webp', '350.00', 0, 'Colorfull'),
(81, 'Black Analog Watch', 'watch_2', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'watch10.webp', 'watch10.webp', 'watch10.webp', 'watch10.webp', '1550.00', 0, 'Colorfull'),
(82, 'Exclusive Watch', 'watch_2', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'watch11.webp', 'watch11.webp', 'watch11.webp', 'watch11.webp', '4990.00', 0, 'Colorfull'),
(83, 'Sata Watch', 'watch_2', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'watch12.webp', 'watch12.webp', 'watch12.webp', 'watch12.webp', '69.00', 0, 'Colorfull'),
(84, 'Pink skirt', 'girl', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'girl.webp', 'girl.webp', 'girl.webp', 'girl.webp', '269.00', 0, 'Colorfull'),
(85, 'Black skirt', 'girl', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'girls_dress1.webp', 'girls_dress1.webp', 'girls_dress1.webp', 'girls_dress1.webp', '369.00', 0, 'Colorfull'),
(86, 'Short skirt', 'girl', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'girls_dress2.webp', 'girls_dress2.webp', 'girls_dress2.webp', 'girls_dress2.webp', '469.00', 0, 'Colorfull'),
(87, 'Red skirt', 'girl', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'girls_dress3.webp', 'girls_dress3.webp', 'girls_dress3.webp', 'girls_dress3.webp', '569.00', 0, 'Colorfull'),
(88, 'Yellow skirt', 'girl1', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'girls_dress4.webp', 'girls_dress4.webp', 'girls_dress4.webp', 'girls_dress4.webp', '669.00', 0, 'Colorfull'),
(89, 'Yellow pink dress', 'girl1', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'girls_dress5.webp', 'girls_dress5.webp', 'girls_dress5.webp', 'girls_dress5.webp', '689.00', 0, 'Colorfull'),
(90, 'Purple dress', 'girl1', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'girls_dress6.webp', 'girls_dress6.webp', 'girls_dress6.webp', 'girls_dress6.webp', '589.00', 0, 'Colorfull'),
(91, 'Green dress', 'girl1', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'girls_dress7.webp', 'girls_dress7.webp', 'girls_dress7.webp', 'girls_dress7.webp', '889.00', 0, 'Colorfull'),
(92, 'Purple dress', 'girl2', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'girls_dress8.webp', 'girls_dress8.webp', 'girls_dress8.webp', 'girls_dress8.webp', '989.00', 0, 'Colorfull'),
(93, 'Jeans', 'girl2', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'girls_dress9.webp', 'girls_dress9.webp', 'girls_dress9.webp', 'girls_dress9.webp', '1189.00', 0, 'Colorfull'),
(94, 'Yellow Jeans', 'girl2', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'girls_dress11.webp', 'girls_dress11.webp', 'girls_dress11.webp', 'girls_dress11.webp', '1189.00', 0, 'Colorfull'),
(95, 'Faded blue Jeans', 'girl2', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'girls_dress12.webp', 'girls_dress12.webp', 'girls_dress12.webp', 'girls_dress12.webp', '1289.00', 0, 'Colorfull'),
(96, 'Black Sweat shirt', 'hoody', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'SweatShirt1.webp', 'SweatShirt1.webp', 'SweatShirt1.webp', 'SweatShirt1.webp', '1289.00', 0, 'Colorfull'),
(97, 'Blue Sweat shirt', 'hoody', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'SweatShirt2.webp', 'SweatShirt2.webp', 'SweatShirt2.webp', 'SweatShirt2.webp', '1289.00', 0, 'Colorfull'),
(98, 'Pink Sweat shirt', 'hoody', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'SweatShirt3.webp', 'SweatShirt3.webp', 'SweatShirt3.webp', 'SweatShirt3.webp', '1389.00', 0, 'Colorfull'),
(99, 'Red Sweat shirt', 'hoody', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'SweatShirt4.webp', 'SweatShirt4.webp', 'SweatShirt4.webp', 'SweatShirt4.webp', '1489.00', 0, 'Colorfull'),
(100, 'Grey Sweat shirt', 'hoody1', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'SweatShirt5.webp', 'SweatShirt5.webp', 'SweatShirt5.webp', 'SweatShirt5.webp', '1589.00', 0, 'Colorfull'),
(101, 'White Sweat shirt', 'hoody1', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'SweatShirt6.webp', 'SweatShirt6.webp', 'SweatShirt6.webp', 'SweatShirt6.webp', '1589.00', 0, 'Colorfull'),
(102, 'Black Pink Sweat shirt', 'hoody1', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'SweatShirt7.webp', 'SweatShirt7.webp', 'SweatShirt7.webp', 'SweatShirt7.webp', '1689.00', 0, 'Colorfull'),
(103, 'Black White Sweat shirt', 'hoody1', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'SweatShirt8.webp', 'SweatShirt8.webp', 'SweatShirt8.webp', 'SweatShirt8.webp', '2300.00', 0, 'Colorfull'),
(104, 'Ban Sweat shirt', 'hoody2', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'SweatShirt9.webp', 'SweatShirt9.webp', 'SweatShirt9.webp', 'SweatShirt9.webp', '2200.00', 0, 'Colorfull'),
(105, 'Grey white shirt', 'hoody2', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'SweatShirt10.webp', 'SweatShirt10.webp', 'SweatShirt10.webp', 'SweatShirt10.webp', '2200.00', 0, 'Colorfull'),
(106, 'Yellow Black shirt', 'hoody2', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'SweatShirt11.webp', 'SweatShirt11.webp', 'SweatShirt11.webp', 'SweatShirt11.webp', '2500.00', 0, 'Colorfull'),
(107, 'Faded Sweat shirt', 'hoody2', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio modi quis cupiditate quos magni ducimus eveniet! Tempore minima velit distinctio rem dignissimos mollitia', 'SweatShirt12.webp', 'SweatShirt12.webp', 'SweatShirt12.webp', 'SweatShirt12.webp', '3000.00', 0, 'Colorfull');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_password`) VALUES
(1, 'Saurav', 'abcd@gmail.com', '188a2e6703fcdcb297f073b91e907a14'),
(2, 'Saurav', 'bcda@gmail.com', '251800da8d338eb82819105d5f3c7629'),
(3, 'Adarsh Verma', 'adarshverma742@gmail.com', 'bf35940950a81da53fffa64464826886');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `UX_Constraint` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
